<?php
namespace PEEC\PeecExtension\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Daniel Saiz <daniel.saiz@gmx.at>
 * @author Matthias Kohler <Matthias.Kohler@gmx.de>
 */
class EmployeeControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \PEEC\PeecExtension\Controller\EmployeeController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\PEEC\PeecExtension\Controller\EmployeeController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllEmployeesFromRepositoryAndAssignsThemToView()
    {

        $allEmployees = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $employeeRepository = $this->getMockBuilder(\PEEC\PeecExtension\Domain\Repository\EmployeeRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $employeeRepository->expects(self::once())->method('findAll')->will(self::returnValue($allEmployees));
        $this->inject($this->subject, 'employeeRepository', $employeeRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('employees', $allEmployees);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenEmployeeToView()
    {
        $employee = new \PEEC\PeecExtension\Domain\Model\Employee();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('employee', $employee);

        $this->subject->showAction($employee);
    }
}
