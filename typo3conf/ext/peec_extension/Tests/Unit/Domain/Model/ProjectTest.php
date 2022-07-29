<?php
namespace PEEC\PeecExtension\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Daniel Saiz <daniel.saiz@gmx.at>
 * @author Matthias Kohler <Matthias.Kohler@gmx.de>
 */
class ProjectTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \PEEC\PeecExtension\Domain\Model\Project
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \PEEC\PeecExtension\Domain\Model\Project();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStartdateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getStartdate()
        );
    }

    /**
     * @test
     */
    public function setStartdateForDateTimeSetsStartdate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setStartdate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'startdate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEnddateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getEnddate()
        );
    }

    /**
     * @test
     */
    public function setEnddateForDateTimeSetsEnddate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setEnddate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'enddate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getColorCodeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getColorCode()
        );
    }

    /**
     * @test
     */
    public function setColorCodeForStringSetsColorCode()
    {
        $this->subject->setColorCode('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'colorCode',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getActiveReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getActive()
        );
    }

    /**
     * @test
     */
    public function setActiveForBoolSetsActive()
    {
        $this->subject->setActive(true);

        self::assertAttributeEquals(
            true,
            'active',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTeaserimageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getTeaserimage()
        );
    }

    /**
     * @test
     */
    public function setTeaserimageForFileReferenceSetsTeaserimage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setTeaserimage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'teaserimage',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMediaReturnsInitialValueForFileReference()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getMedia()
        );
    }

    /**
     * @test
     */
    public function setMediaForFileReferenceSetsMedia()
    {
        $medium = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $objectStorageHoldingExactlyOneMedia = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneMedia->attach($medium);
        $this->subject->setMedia($objectStorageHoldingExactlyOneMedia);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneMedia,
            'media',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addMediumToObjectStorageHoldingMedia()
    {
        $medium = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $mediaObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $mediaObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($medium));
        $this->inject($this->subject, 'media', $mediaObjectStorageMock);

        $this->subject->addMedium($medium);
    }

    /**
     * @test
     */
    public function removeMediumFromObjectStorageHoldingMedia()
    {
        $medium = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $mediaObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $mediaObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($medium));
        $this->inject($this->subject, 'media', $mediaObjectStorageMock);

        $this->subject->removeMedium($medium);
    }

    /**
     * @test
     */
    public function getMemberReturnsInitialValueForEmployee()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getMember()
        );
    }

    /**
     * @test
     */
    public function setMemberForObjectStorageContainingEmployeeSetsMember()
    {
        $member = new \PEEC\PeecExtension\Domain\Model\Employee();
        $objectStorageHoldingExactlyOneMember = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneMember->attach($member);
        $this->subject->setMember($objectStorageHoldingExactlyOneMember);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneMember,
            'member',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addMemberToObjectStorageHoldingMember()
    {
        $member = new \PEEC\PeecExtension\Domain\Model\Employee();
        $memberObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $memberObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($member));
        $this->inject($this->subject, 'member', $memberObjectStorageMock);

        $this->subject->addMember($member);
    }

    /**
     * @test
     */
    public function removeMemberFromObjectStorageHoldingMember()
    {
        $member = new \PEEC\PeecExtension\Domain\Model\Employee();
        $memberObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $memberObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($member));
        $this->inject($this->subject, 'member', $memberObjectStorageMock);

        $this->subject->removeMember($member);
    }

    /**
     * @test
     */
    public function getLeaderReturnsInitialValueForEmployee()
    {
        self::assertEquals(
            null,
            $this->subject->getLeader()
        );
    }

    /**
     * @test
     */
    public function setLeaderForEmployeeSetsLeader()
    {
        $leaderFixture = new \PEEC\PeecExtension\Domain\Model\Employee();
        $this->subject->setLeader($leaderFixture);

        self::assertAttributeEquals(
            $leaderFixture,
            'leader',
            $this->subject
        );
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

    /**
     * @test
     */
    public function getFundingpartnerReturnsInitialValueForFundingpartner()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getFundingpartner()
        );
    }

    /**
     * @test
     */
    public function setFundingpartnerForObjectStorageContainingFundingpartnerSetsFundingpartner()
    {
        $fundingpartner = new \PEEC\PeecExtension\Domain\Model\Fundingpartner();
        $objectStorageHoldingExactlyOneFundingpartner = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneFundingpartner->attach($fundingpartner);
        $this->subject->setFundingpartner($objectStorageHoldingExactlyOneFundingpartner);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneFundingpartner,
            'fundingpartner',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addFundingpartnerToObjectStorageHoldingFundingpartner()
    {
        $fundingpartner = new \PEEC\PeecExtension\Domain\Model\Fundingpartner();
        $fundingpartnerObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $fundingpartnerObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($fundingpartner));
        $this->inject($this->subject, 'fundingpartner', $fundingpartnerObjectStorageMock);

        $this->subject->addFundingpartner($fundingpartner);
    }

    /**
     * @test
     */
    public function removeFundingpartnerFromObjectStorageHoldingFundingpartner()
    {
        $fundingpartner = new \PEEC\PeecExtension\Domain\Model\Fundingpartner();
        $fundingpartnerObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $fundingpartnerObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($fundingpartner));
        $this->inject($this->subject, 'fundingpartner', $fundingpartnerObjectStorageMock);

        $this->subject->removeFundingpartner($fundingpartner);
    }

    /**
     * @test
     */
    public function getCategoryReturnsInitialValueForCategory()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getCategory()
        );
    }

    /**
     * @test
     */
    public function setCategoryForObjectStorageContainingCategorySetsCategory()
    {
        $category = new \PEEC\PeecExtension\Domain\Model\Category();
        $objectStorageHoldingExactlyOneCategory = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneCategory->attach($category);
        $this->subject->setCategory($objectStorageHoldingExactlyOneCategory);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneCategory,
            'category',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addCategoryToObjectStorageHoldingCategory()
    {
        $category = new \PEEC\PeecExtension\Domain\Model\Category();
        $categoryObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $categoryObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($category));
        $this->inject($this->subject, 'category', $categoryObjectStorageMock);

        $this->subject->addCategory($category);
    }

    /**
     * @test
     */
    public function removeCategoryFromObjectStorageHoldingCategory()
    {
        $category = new \PEEC\PeecExtension\Domain\Model\Category();
        $categoryObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $categoryObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($category));
        $this->inject($this->subject, 'category', $categoryObjectStorageMock);

        $this->subject->removeCategory($category);
    }
}
