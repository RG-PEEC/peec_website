<?php
namespace PEEC\PeecExtension\Controller;

use PEEC\PeecExtension\Domain\Filter;
use PEEC\PeecExtension\Service\MetatagService;
use TYPO3\CMS\Core\Utility\GeneralUtility;

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
 * ProjectController
 */
class ProjectController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * projectRepository
     * 
     * @var \PEEC\PeecExtension\Domain\Repository\ProjectRepository
     */
    protected $projectRepository = null;

    /**
     * publicationRepository
     * 
     * @var \PEEC\PeecExtension\Domain\Repository\EmployeeRepository
     * @inject
     */
    protected $employeeRepository = null;

    /**
     * publicationRepository
     * 
     * @var \PEEC\PeecExtension\Domain\Repository\CategoryRepository
     * @inject
     */
    protected $categoryRepository = null;

    /**
     * @param \PEEC\PeecExtension\Domain\Repository\ProjectRepository $projectRepository
     */
    public function injectProjectRepository(\PEEC\PeecExtension\Domain\Repository\ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    /**
     * action list
     * 
     * @param array $demands
     * @throws \Exception
     * @return void
     */
    public function listAction(array $demands = [])
    {
        $filter = new Filter($this->settings);
        if ($demands['category']) {
            $filter->setCategory($demands['category']);
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
        $categories = $this->categoryRepository->findAll();
        $employees = $this->employeeRepository->findAllExcludePositions(["Extern"]);
        $projects = $this->projectRepository->findByFilter($filter);
        $interval = $this->projectRepository->findYearInterval();
        $this->view->assign('filter', $filter);
        $this->view->assign('demands', $demands);
        $this->view->assign('categories', $categories);
        $this->view->assign('employees', $employees);
        $this->view->assign('interval', $interval);
        $this->view->assign('projects', $projects);
    }

    /**
     * action show
     * 
     * @param \PEEC\PeecExtension\Domain\Model\Project $project
     * @return void
     */
    public function showAction(\PEEC\PeecExtension\Domain\Model\Project $project)
    {
        $this->view->assign('project', $project);
        $metaTagService = GeneralUtility::makeInstance(MetatagService::class);
        $metaTagService->addTitle($project->getTitle());
        $metaTagService->addDescription($project->getDescription());
    }
}
