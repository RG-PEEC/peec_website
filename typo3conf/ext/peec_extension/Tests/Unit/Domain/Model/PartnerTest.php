<?php
namespace PEEC\PeecExtension\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Daniel Saiz <daniel.saiz@gmx.at>
 * @author Matthias Kohler <Matthias.Kohler@gmx.de>
 */
class PartnerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \PEEC\PeecExtension\Domain\Model\Partner
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \PEEC\PeecExtension\Domain\Model\Partner();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getResearchpartnerReturnsInitialValueForResearchpartner()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getResearchpartner()
        );
    }

    /**
     * @test
     */
    public function setResearchpartnerForObjectStorageContainingResearchpartnerSetsResearchpartner()
    {
        $researchpartner = new \PEEC\PeecExtension\Domain\Model\Researchpartner();
        $objectStorageHoldingExactlyOneResearchpartner = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneResearchpartner->attach($researchpartner);
        $this->subject->setResearchpartner($objectStorageHoldingExactlyOneResearchpartner);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneResearchpartner,
            'researchpartner',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addResearchpartnerToObjectStorageHoldingResearchpartner()
    {
        $researchpartner = new \PEEC\PeecExtension\Domain\Model\Researchpartner();
        $researchpartnerObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $researchpartnerObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($researchpartner));
        $this->inject($this->subject, 'researchpartner', $researchpartnerObjectStorageMock);

        $this->subject->addResearchpartner($researchpartner);
    }

    /**
     * @test
     */
    public function removeResearchpartnerFromObjectStorageHoldingResearchpartner()
    {
        $researchpartner = new \PEEC\PeecExtension\Domain\Model\Researchpartner();
        $researchpartnerObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $researchpartnerObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($researchpartner));
        $this->inject($this->subject, 'researchpartner', $researchpartnerObjectStorageMock);

        $this->subject->removeResearchpartner($researchpartner);
    }

    /**
     * @test
     */
    public function getCompanypartnerReturnsInitialValueForCompanypartner()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getCompanypartner()
        );
    }

    /**
     * @test
     */
    public function setCompanypartnerForObjectStorageContainingCompanypartnerSetsCompanypartner()
    {
        $companypartner = new \PEEC\PeecExtension\Domain\Model\Companypartner();
        $objectStorageHoldingExactlyOneCompanypartner = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneCompanypartner->attach($companypartner);
        $this->subject->setCompanypartner($objectStorageHoldingExactlyOneCompanypartner);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneCompanypartner,
            'companypartner',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addCompanypartnerToObjectStorageHoldingCompanypartner()
    {
        $companypartner = new \PEEC\PeecExtension\Domain\Model\Companypartner();
        $companypartnerObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $companypartnerObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($companypartner));
        $this->inject($this->subject, 'companypartner', $companypartnerObjectStorageMock);

        $this->subject->addCompanypartner($companypartner);
    }

    /**
     * @test
     */
    public function removeCompanypartnerFromObjectStorageHoldingCompanypartner()
    {
        $companypartner = new \PEEC\PeecExtension\Domain\Model\Companypartner();
        $companypartnerObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $companypartnerObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($companypartner));
        $this->inject($this->subject, 'companypartner', $companypartnerObjectStorageMock);

        $this->subject->removeCompanypartner($companypartner);
    }
}
