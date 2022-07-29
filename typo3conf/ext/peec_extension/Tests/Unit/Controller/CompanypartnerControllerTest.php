<?php
namespace PEEC\PeecExtension\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Daniel Saiz <daniel.saiz@gmx.at>
 * @author Matthias Kohler <Matthias.Kohler@gmx.de>
 */
class CompanypartnerControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \PEEC\PeecExtension\Controller\CompanypartnerController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\PEEC\PeecExtension\Controller\CompanypartnerController::class)
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
    public function listActionFetchesAllCompanypartnersFromRepositoryAndAssignsThemToView()
    {

        $allCompanypartners = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $companypartnerRepository = $this->getMockBuilder(\PEEC\PeecExtension\Domain\Repository\CompanypartnerRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $companypartnerRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCompanypartners));
        $this->inject($this->subject, 'companypartnerRepository', $companypartnerRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('companypartners', $allCompanypartners);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
