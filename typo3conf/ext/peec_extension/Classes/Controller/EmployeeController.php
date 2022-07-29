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
 * EmployeeController
 */
class EmployeeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * employeeRepository
     * 
     * @var \PEEC\PeecExtension\Domain\Repository\EmployeeRepository
     */
    protected $employeeRepository = null;

    /**
     * employeeRepository
     * 
     * @var \PEEC\PeecExtension\Domain\Repository\PositionRepository
     * @inject
     */
    protected $positionRepository = null;

    /**
     * @param \PEEC\PeecExtension\Domain\Repository\EmployeeRepository $employeeRepository
     */
    public function injectEmployeeRepository(\PEEC\PeecExtension\Domain\Repository\EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $employees = $this->employeeRepository->findAllExcludePositions(["Extern"]);

        //$positions = $this->positionRepository->findAllWithoutGiven(["Extern"]);
        $this->view->assign('employees', $employees);

        //$this->view->assign('positions', $positions);
    }

    /**
     * action show
     * 
     * @param \PEEC\PeecExtension\Domain\Model\Employee $employee
     * @return void
     */
    public function showAction(\PEEC\PeecExtension\Domain\Model\Employee $employee)
    {
        $this->view->assign('employee', $employee);
    }
}
