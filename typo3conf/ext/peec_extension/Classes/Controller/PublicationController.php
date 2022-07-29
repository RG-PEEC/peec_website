<?php
namespace PEEC\PeecExtension\Controller;

use Geissler\Converter\Converter;
use Geissler\Converter\Standard\BibTeX\BibTeX;
use Geissler\Converter\Standard\RIS\RIS;
use PEEC\PeecExtension\Service\RisService;
use PEEC\PeecExtension\Domain\Filter;

/***
 *
 * This file is part of the "PEEC Extension" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Daniel Saiz <daniel.saiz@gmx.at>, FH Hagenberg
 *           Matthias Kohler <Matthias.Kohler@gmx.de>, FH Hagenberg
 *
 ***/
/**
 * PublicationController
 */
class PublicationController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * publicationRepository
     * 
     * @var \PEEC\PeecExtension\Domain\Repository\PublicationRepository
     */
    protected $publicationRepository = null;

    /**
     * publicationRepository
     * 
     * @var \PEEC\PeecExtension\Domain\Repository\EmployeeRepository
     * @inject
     */
    protected $employeeRepository = null;

    /**
     * @param \PEEC\PeecExtension\Domain\Repository\PublicationRepository $publicationRepository
     */
    public function injectPublicationRepository(\PEEC\PeecExtension\Domain\Repository\PublicationRepository $publicationRepository)
    {
        $this->publicationRepository = $publicationRepository;
    }

    /**
     * action list
     * 
     * @param array $demands
     * @return void
     */
    public function listAction(array $demands = [])
    {
        $filter = new Filter($this->settings);
        if ($demands['type'] != '') {
            $filter->setType($demands['type']);
        } else {
            $filter->setType("");
        }
        if ($demands['employee']) {
            $filter->setEmployee($demands['employee']);
        }
        if ($demands['from']) {
            $filter->setMinYear($demands['from']);
        }
        if ($demands['to']) {
            $filter->setMaxYear($demands['to']);
        }
        $this->view->assign('filter', $filter);
        $publications = $this->publicationRepository->findByFilter($filter);
        $types = $this->publicationRepository->findAllTypes();
        $years = $this->publicationRepository->findYearInterval();
        $this->view->assign('interval', $years);
        $this->view->assign('types', $types);
        $this->view->assign('publications', $publications);
        $this->view->assign('employees', $this->employeeRepository->findAllExcludePositions(["Extern"]));
    }

    /**
     * @param \PEEC\PeecExtension\Domain\Model\Publication $publication
     */
    public function downloadBibTexAction(\PEEC\PeecExtension\Domain\Model\Publication $publication)
    {
        require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('peec_extension', 'Resources/Private/Libraries/converter/vendor/autoload.php');

        //hand over to RisService - get Ris-formatted string
        $data = RisService::generateRisText($publication);

        //convert Ris to Bibtex-format
        $converter = new Converter();
        $file = $converter->convert(new RIS($data), new BibTeX());

        //request server to generate bib-File
        $headers = [
        'Pragma' => 'public', 
        'Expires' => 0, 
        'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0', 
        'Cache-Control' => 'public', 
        'Content-Description' => 'File Transfer', 
        'Content-Type' => 'application/x-bibtex', 
        'Content-Disposition' => 'attachment; filename="' . $publication->getTitle() . '.bib', 
        'Content-Transfer-Encoding' => 'binary', 
        'Content-Length' => strlen($file)
        ];
        foreach ($headers as $header => $data) {
            $this->response->setHeader($header, $data);
        }
        $this->response->sendHeaders();
        echo $file;
        exit;
    }
}
