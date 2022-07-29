<?php
namespace PEEC\PeecExtension\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Daniel Saiz <daniel.saiz@gmx.at>
 * @author Matthias Kohler <Matthias.Kohler@gmx.de>
 */
class PublicationTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \PEEC\PeecExtension\Domain\Model\Publication
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \PEEC\PeecExtension\Domain\Model\Publication();
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
    public function getTypeReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getType()
        );
    }

    /**
     * @test
     */
    public function setTypeForIntSetsType()
    {
        $this->subject->setType(12);

        self::assertAttributeEquals(
            12,
            'type',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPdfReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getPdf()
        );
    }

    /**
     * @test
     */
    public function setPdfForFileReferenceSetsPdf()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setPdf($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'pdf',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getReferencelinkReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getReferencelink()
        );
    }

    /**
     * @test
     */
    public function setReferencelinkForStringSetsReferencelink()
    {
        $this->subject->setReferencelink('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'referencelink',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDoiReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDoi()
        );
    }

    /**
     * @test
     */
    public function setDoiForStringSetsDoi()
    {
        $this->subject->setDoi('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'doi',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getJournalReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getJournal()
        );
    }

    /**
     * @test
     */
    public function setJournalForStringSetsJournal()
    {
        $this->subject->setJournal('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'journal',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getYearReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getYear()
        );
    }

    /**
     * @test
     */
    public function setYearForIntSetsYear()
    {
        $this->subject->setYear(12);

        self::assertAttributeEquals(
            12,
            'year',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getVolumeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVolume()
        );
    }

    /**
     * @test
     */
    public function setVolumeForStringSetsVolume()
    {
        $this->subject->setVolume('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'volume',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getNumberReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNumber()
        );
    }

    /**
     * @test
     */
    public function setNumberForStringSetsNumber()
    {
        $this->subject->setNumber('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'number',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMonthReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMonth()
        );
    }

    /**
     * @test
     */
    public function setMonthForStringSetsMonth()
    {
        $this->subject->setMonth('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'month',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getNoteReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNote()
        );
    }

    /**
     * @test
     */
    public function setNoteForStringSetsNote()
    {
        $this->subject->setNote('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'note',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPublisherReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPublisher()
        );
    }

    /**
     * @test
     */
    public function setPublisherForStringSetsPublisher()
    {
        $this->subject->setPublisher('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'publisher',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAddressReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAddress()
        );
    }

    /**
     * @test
     */
    public function setAddressForStringSetsAddress()
    {
        $this->subject->setAddress('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'address',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEditionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEdition()
        );
    }

    /**
     * @test
     */
    public function setEditionForStringSetsEdition()
    {
        $this->subject->setEdition('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'edition',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getIsbnReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getIsbn()
        );
    }

    /**
     * @test
     */
    public function setIsbnForStringSetsIsbn()
    {
        $this->subject->setIsbn('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'isbn',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBooktitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBooktitle()
        );
    }

    /**
     * @test
     */
    public function setBooktitleForStringSetsBooktitle()
    {
        $this->subject->setBooktitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'booktitle',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOrganizationReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOrganization()
        );
    }

    /**
     * @test
     */
    public function setOrganizationForStringSetsOrganization()
    {
        $this->subject->setOrganization('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'organization',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSeriesReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSeries()
        );
    }

    /**
     * @test
     */
    public function setSeriesForStringSetsSeries()
    {
        $this->subject->setSeries('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'series',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getChapterReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getChapter()
        );
    }

    /**
     * @test
     */
    public function setChapterForStringSetsChapter()
    {
        $this->subject->setChapter('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'chapter',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSchoolReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSchool()
        );
    }

    /**
     * @test
     */
    public function setSchoolForStringSetsSchool()
    {
        $this->subject->setSchool('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'school',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHowpublishedReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getHowpublished()
        );
    }

    /**
     * @test
     */
    public function setHowpublishedForStringSetsHowpublished()
    {
        $this->subject->setHowpublished('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'howpublished',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEditorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEditor()
        );
    }

    /**
     * @test
     */
    public function setEditorForStringSetsEditor()
    {
        $this->subject->setEditor('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'editor',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStartpageReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getStartpage()
        );
    }

    /**
     * @test
     */
    public function setStartpageForIntSetsStartpage()
    {
        $this->subject->setStartpage(12);

        self::assertAttributeEquals(
            12,
            'startpage',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEndingpageReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getEndingpage()
        );
    }

    /**
     * @test
     */
    public function setEndingpageForIntSetsEndingpage()
    {
        $this->subject->setEndingpage(12);

        self::assertAttributeEquals(
            12,
            'endingpage',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCitationlableReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCitationlable()
        );
    }

    /**
     * @test
     */
    public function setCitationlableForStringSetsCitationlable()
    {
        $this->subject->setCitationlable('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'citationlable',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAuthorReturnsInitialValueForEmployee()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getAuthor()
        );
    }

    /**
     * @test
     */
    public function setAuthorForObjectStorageContainingEmployeeSetsAuthor()
    {
        $author = new \PEEC\PeecExtension\Domain\Model\Employee();
        $objectStorageHoldingExactlyOneAuthor = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneAuthor->attach($author);
        $this->subject->setAuthor($objectStorageHoldingExactlyOneAuthor);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneAuthor,
            'author',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addAuthorToObjectStorageHoldingAuthor()
    {
        $author = new \PEEC\PeecExtension\Domain\Model\Employee();
        $authorObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $authorObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($author));
        $this->inject($this->subject, 'author', $authorObjectStorageMock);

        $this->subject->addAuthor($author);
    }

    /**
     * @test
     */
    public function removeAuthorFromObjectStorageHoldingAuthor()
    {
        $author = new \PEEC\PeecExtension\Domain\Model\Employee();
        $authorObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $authorObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($author));
        $this->inject($this->subject, 'author', $authorObjectStorageMock);

        $this->subject->removeAuthor($author);
    }
}
