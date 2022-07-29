<?php
namespace PEEC\PeecExtension\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Daniel Saiz <daniel.saiz@gmx.at>
 * @author Matthias Kohler <Matthias.Kohler@gmx.de>
 */
class PublicationControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \PEEC\PeecExtension\Controller\PublicationController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\PEEC\PeecExtension\Controller\PublicationController::class)
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
    public function listActionFetchesAllPublicationsFromRepositoryAndAssignsThemToView()
    {

        $allPublications = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $publicationRepository = $this->getMockBuilder(\PEEC\PeecExtension\Domain\Repository\PublicationRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $publicationRepository->expects(self::once())->method('findAll')->will(self::returnValue($allPublications));
        $this->inject($this->subject, 'publicationRepository', $publicationRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('publications', $allPublications);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
