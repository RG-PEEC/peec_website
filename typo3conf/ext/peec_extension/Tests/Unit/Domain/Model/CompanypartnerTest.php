<?php
namespace PEEC\PeecExtension\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Daniel Saiz <daniel.saiz@gmx.at>
 * @author Matthias Kohler <Matthias.Kohler@gmx.de>
 */
class CompanypartnerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \PEEC\PeecExtension\Domain\Model\Companypartner
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \PEEC\PeecExtension\Domain\Model\Companypartner();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAbbreviationReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAbbreviation()
        );
    }

    /**
     * @test
     */
    public function setAbbreviationForStringSetsAbbreviation()
    {
        $this->subject->setAbbreviation('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'abbreviation',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getWebsiteReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getWebsite()
        );
    }

    /**
     * @test
     */
    public function setWebsiteForStringSetsWebsite()
    {
        $this->subject->setWebsite('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'website',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLogoReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getLogo()
        );
    }

    /**
     * @test
     */
    public function setLogoForFileReferenceSetsLogo()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setLogo($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'logo',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDisplayReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getDisplay()
        );
    }

    /**
     * @test
     */
    public function setDisplayForBoolSetsDisplay()
    {
        $this->subject->setDisplay(true);

        self::assertAttributeEquals(
            true,
            'display',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getParticipantReturnsInitialValueForParticipant()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getParticipant()
        );
    }

    /**
     * @test
     */
    public function setParticipantForObjectStorageContainingParticipantSetsParticipant()
    {
        $participant = new \PEEC\PeecExtension\Domain\Model\Participant();
        $objectStorageHoldingExactlyOneParticipant = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneParticipant->attach($participant);
        $this->subject->setParticipant($objectStorageHoldingExactlyOneParticipant);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneParticipant,
            'participant',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addParticipantToObjectStorageHoldingParticipant()
    {
        $participant = new \PEEC\PeecExtension\Domain\Model\Participant();
        $participantObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $participantObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($participant));
        $this->inject($this->subject, 'participant', $participantObjectStorageMock);

        $this->subject->addParticipant($participant);
    }

    /**
     * @test
     */
    public function removeParticipantFromObjectStorageHoldingParticipant()
    {
        $participant = new \PEEC\PeecExtension\Domain\Model\Participant();
        $participantObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $participantObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($participant));
        $this->inject($this->subject, 'participant', $participantObjectStorageMock);

        $this->subject->removeParticipant($participant);
    }
}
