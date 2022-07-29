<?php
namespace PEEC\PeecExtension\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Daniel Saiz <daniel.saiz@gmx.at>
 * @author Matthias Kohler <Matthias.Kohler@gmx.de>
 */
class FundingpartnerControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \PEEC\PeecExtension\Controller\FundingpartnerController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\PEEC\PeecExtension\Controller\FundingpartnerController::class)
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
    public function listActionFetchesAllFundingpartnersFromRepositoryAndAssignsThemToView()
    {

        $allFundingpartners = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $fundingpartnerRepository = $this->getMockBuilder(\PEEC\PeecExtension\Domain\Repository\FundingpartnerRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $fundingpartnerRepository->expects(self::once())->method('findAll')->will(self::returnValue($allFundingpartners));
        $this->inject($this->subject, 'fundingpartnerRepository', $fundingpartnerRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('fundingpartners', $allFundingpartners);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
