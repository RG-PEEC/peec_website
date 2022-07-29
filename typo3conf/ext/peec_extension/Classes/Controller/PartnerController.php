<?php
namespace PEEC\PeecExtension\Controller;


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
 * PartnerController
 */
class PartnerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * partnerRepository
     * 
     * @var \PEEC\PeecExtension\Domain\Repository\ResearchpartnerRepository
     * @inject
     */
    protected $researchpartnerRepository = null;

    /**
     * partnerRepository
     * 
     * @var \PEEC\PeecExtension\Domain\Repository\CompanypartnerRepository
     * @inject
     */
    protected $companypartnerRepository = null;

    /**
     * partnerRepository
     * 
     * @var \PEEC\PeecExtension\Domain\Repository\PartnerRepository
     */
    protected $partnerRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $cpartners = $this->companypartnerRepository->findAllSorted();
        $rpartners = $this->researchpartnerRepository->findAllSorted();
        $this->view->assign('researchpartners', $rpartners);
        $this->view->assign('companypartners', $cpartners);
    }

    /**
     * @param \PEEC\PeecExtension\Domain\Repository\PartnerRepository $partnerRepository
     */
    public function injectPartnerRepository(\PEEC\PeecExtension\Domain\Repository\PartnerRepository $partnerRepository)
    {
        $this->partnerRepository = $partnerRepository;
    }
}
