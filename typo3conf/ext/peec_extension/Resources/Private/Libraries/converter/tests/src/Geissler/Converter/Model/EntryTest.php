<?php
namespace Geissler\Converter\Model;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-03-12 at 23:18:42.
 */
class EntryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Entry
     */
    protected $object;
    protected $class = 'Geissler\Converter\Model\Entry';

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Entry;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Geissler\Converter\Model\Entry::__construct
     * @covers Geissler\Converter\Model\Entry::setDOI
     * @covers Geissler\Converter\Model\Entry::getDOI
     */
    public function testDOI()
    {
        $data   =   'DOI: 10.xxxxxxxxx';
        $this->assertInstanceOf($this->class, $this->object->setDOI($data));
        $this->assertEquals($data, $this->object->getDOI());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setISBN
     * @covers Geissler\Converter\Model\Entry::getISBN
     */
    public function testISBN()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setISBN($data));
        $this->assertEquals($data, $this->object->getISBN());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setISSN
     * @covers Geissler\Converter\Model\Entry::getISSN
     */
    public function testISSN()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setISSN($data));
        $this->assertEquals($data, $this->object->getISSN());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setPMCID
     * @covers Geissler\Converter\Model\Entry::getPMCID
     */
    public function testPMCID()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setPMCID($data));
        $this->assertEquals($data, $this->object->getPMCID());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setPMID
     * @covers Geissler\Converter\Model\Entry::getPMID
     */
    public function testPMID()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setPMID($data));
        $this->assertEquals($data, $this->object->getPMID());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setURL
     * @covers Geissler\Converter\Model\Entry::getURL
     */
    public function testURL()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setURL($data));
        $this->assertEquals($data, $this->object->getURL());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setAbstract
     * @covers Geissler\Converter\Model\Entry::getAbstract
     */
    public function testAbstract()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setAbstract($data));
        $this->assertEquals($data, $this->object->getAbstract());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::getAccessed
     */
    public function testGetAccessed()
    {
        $this->assertInstanceOf('\Geissler\Converter\Model\Dates', $this->object->getAccessed());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setAddress
     * @covers Geissler\Converter\Model\Entry::getAddress
     */
    public function testAddress()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setAddress($data));
        $this->assertEquals($data, $this->object->getAddress());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setAnnote
     * @covers Geissler\Converter\Model\Entry::getAnnote
     */
    public function testAnnote()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setAnnote($data));
        $this->assertEquals($data, $this->object->getAnnote());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setArchive
     * @covers Geissler\Converter\Model\Entry::getArchive
     */
    public function testArchive()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setArchive($data));
        $this->assertEquals($data, $this->object->getArchive());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setArchiveLocation
     * @covers Geissler\Converter\Model\Entry::getArchiveLocation
     */
    public function testArchiveLocation()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setArchiveLocation($data));
        $this->assertEquals($data, $this->object->getArchiveLocation());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setArchivePlace
     * @covers Geissler\Converter\Model\Entry::getArchivePlace
     */
    public function testArchivePlace()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setArchivePlace($data));
        $this->assertEquals($data, $this->object->getArchivePlace());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::getAuthor
     */
    public function testGetAuthor()
    {
        $this->assertInstanceOf('\Geissler\Converter\Model\Persons', $this->object->getAuthor());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setAuthority
     * @covers Geissler\Converter\Model\Entry::getAuthority
     */
    public function testAuthority()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setAuthority($data));
        $this->assertEquals($data, $this->object->getAuthority());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setCallNumber
     * @covers Geissler\Converter\Model\Entry::getCallNumber
     */
    public function testCallNumber()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setCallNumber($data));
        $this->assertEquals($data, $this->object->getCallNumber());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setChapterNumber
     * @covers Geissler\Converter\Model\Entry::getChapterNumber
     */
    public function testChapterNumber()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setChapterNumber($data));
        $this->assertEquals($data, $this->object->getChapterNumber());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setCitationLabel
     * @covers Geissler\Converter\Model\Entry::getCitationLabel
     */
    public function testCitationLabel()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setCitationLabel($data));
        $this->assertEquals($data, $this->object->getCitationLabel());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::getCollectionEditor
     */
    public function testGetCollectionEditor()
    {
        $this->assertInstanceOf('\Geissler\Converter\Model\Persons', $this->object->getCollectionEditor());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setCollectionNumber
     * @covers Geissler\Converter\Model\Entry::getCollectionNumber
     */
    public function testCollectionNumber()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setCollectionNumber($data));
        $this->assertEquals($data, $this->object->getCollectionNumber());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setCollectionTitle
     * @covers Geissler\Converter\Model\Entry::getCollectionTitle
     */
    public function testCollectionTitle()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setCollectionTitle($data));
        $this->assertEquals($data, $this->object->getCollectionTitle());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::getComposer
     */
    public function testGetComposer()
    {
        $this->assertInstanceOf('\Geissler\Converter\Model\Persons', $this->object->getComposer());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::getContainerAuthor
     */
    public function testGetContainerAuthor()
    {
        $this->assertInstanceOf('\Geissler\Converter\Model\Persons', $this->object->getContainerAuthor());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setContainerTitle
     * @covers Geissler\Converter\Model\Entry::getContainerTitle
     */
    public function testContainerTitle()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setContainerTitle($data));
        $this->assertEquals($data, $this->object->getContainerTitle());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setContainerTitleShort
     * @covers Geissler\Converter\Model\Entry::getContainerTitleShort
     */
    public function testContainerTitleShort()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setContainerTitleShort($data));
        $this->assertEquals($data, $this->object->getContainerTitleShort());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setDatabase
     * @covers Geissler\Converter\Model\Entry::getDatabase
     */
    public function testDatabase()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setDatabase($data));
        $this->assertEquals($data, $this->object->getDatabase());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setDimensions
     * @covers Geissler\Converter\Model\Entry::getDimensions
     */
    public function testDimensions()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setDimensions($data));
        $this->assertEquals($data, $this->object->getDimensions());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::getDirector
     */
    public function testGetDirector()
    {
        $this->assertInstanceOf('\Geissler\Converter\Model\Persons', $this->object->getDirector());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setEdition
     * @covers Geissler\Converter\Model\Entry::getEdition
     */
    public function testEdition()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setEdition($data));
        $this->assertEquals($data, $this->object->getEdition());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setReprintEdition
     * @covers Geissler\Converter\Model\Entry::getReprintEdition
     */
    public function testReprintEdition()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setReprintEdition($data));
        $this->assertEquals($data, $this->object->getReprintEdition());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::getEditor
     */
    public function testGetEditor()
    {
        $this->assertInstanceOf('\Geissler\Converter\Model\Persons', $this->object->getEditor());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::getEditorialDirector
     */
    public function testGetEditorialDirector()
    {
        $this->assertInstanceOf('\Geissler\Converter\Model\Persons', $this->object->getEditorialDirector());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setEvent
     * @covers Geissler\Converter\Model\Entry::getEvent
     */
    public function testEvent()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setEvent($data));
        $this->assertEquals($data, $this->object->getEvent());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::getEventDate
     */
    public function testGetEventDate()
    {
        $this->assertInstanceOf('\Geissler\Converter\Model\Dates', $this->object->getEventDate());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setEventPlace
     * @covers Geissler\Converter\Model\Entry::getEventPlace
     */
    public function testEventPlace()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setEventPlace($data));
        $this->assertEquals($data, $this->object->getEventPlace());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setFullText
     * @covers Geissler\Converter\Model\Entry::getFullText
     */
    public function testFullText()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setFullText($data));
        $this->assertEquals($data, $this->object->getFullText());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setGenre
     * @covers Geissler\Converter\Model\Entry::getGenre
     */
    public function testGenre()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setGenre($data));
        $this->assertEquals($data, $this->object->getGenre());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::getIllustrator
     */
    public function testGetIllustrator()
    {
        $this->assertInstanceOf('\Geissler\Converter\Model\Persons', $this->object->getIllustrator());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::getInterviewer
     */
    public function testGetInterviewer()
    {
        $this->assertInstanceOf('\Geissler\Converter\Model\Persons', $this->object->getInterviewer());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setIssue
     * @covers Geissler\Converter\Model\Entry::getIssue
     */
    public function testIssue()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setIssue($data));
        $this->assertEquals($data, $this->object->getIssue());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::getIssued
     */
    public function testGetIssued()
    {
        $this->assertInstanceOf('\Geissler\Converter\Model\Dates', $this->object->getIssued());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setJournal
     * @covers Geissler\Converter\Model\Entry::getJournal
     */
    public function testJournal()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setJournal($data));
        $this->assertEquals($data, $this->object->getJournal());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setJournalShort
     * @covers Geissler\Converter\Model\Entry::getJournalShort
     */
    public function testJournalShort()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setJournalShort($data));
        $this->assertEquals($data, $this->object->getJournalShort());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setJurisdiction
     * @covers Geissler\Converter\Model\Entry::getJurisdiction
     */
    public function testJurisdiction()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setJurisdiction($data));
        $this->assertEquals($data, $this->object->getJurisdiction());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setKeyword
     * @covers Geissler\Converter\Model\Entry::getKeyword
     */
    public function testKeyword()
    {
        $this->assertInstanceOf($this->class, $this->object->setKeyword('test'));
        $this->assertInstanceOf($this->class, $this->object->setKeyword('tmp'));
        $this->assertInstanceOf($this->class, $this->object->setKeyword('1'));
        $this->assertInternalType('array', $this->object->getKeyword());
        $this->assertContains('test', $this->object->getKeyword());
        $this->assertContains('tmp', $this->object->getKeyword());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setLabel
     * @covers Geissler\Converter\Model\Entry::getLabel
     */
    public function testLabel()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setLabel($data));
        $this->assertEquals($data, $this->object->getLabel());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setLanguage
     * @covers Geissler\Converter\Model\Entry::getLanguage
     */
    public function testLanguage()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setLanguage($data));
        $this->assertEquals($data, $this->object->getLanguage());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setMedium
     * @covers Geissler\Converter\Model\Entry::getMedium
     */
    public function testMedium()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setMedium($data));
        $this->assertEquals($data, $this->object->getMedium());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setNote
     * @covers Geissler\Converter\Model\Entry::getNote
     */
    public function testNote()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setNote($data));
        $this->assertEquals($data, $this->object->getNote());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setNumber
     * @covers Geissler\Converter\Model\Entry::getNumber
     */
    public function testNumber()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setNumber($data));
        $this->assertEquals($data, $this->object->getNumber());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setNumberOfVolumes
     * @covers Geissler\Converter\Model\Entry::getNumberOfVolumes
     */
    public function testNumberOfVolumes()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setNumberOfVolumes($data));
        $this->assertEquals($data, $this->object->getNumberOfVolumes());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::getOriginalAuthor
     */
    public function testGetOriginalAuthor()
    {
        $this->assertInstanceOf('\Geissler\Converter\Model\Persons', $this->object->getOriginalAuthor());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::getOriginalDate
     */
    public function testGetOriginalDate()
    {
        $this->assertInstanceOf('\Geissler\Converter\Model\Dates', $this->object->getOriginalDate());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setOriginalPublisher
     * @covers Geissler\Converter\Model\Entry::getOriginalPublisher
     */
    public function testOriginalPublisher()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setOriginalPublisher($data));
        $this->assertEquals($data, $this->object->getOriginalPublisher());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setOriginalPublisherPlace
     * @covers Geissler\Converter\Model\Entry::getOriginalPublisherPlace
     */
    public function testOriginalPublisherPlace()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setOriginalPublisherPlace($data));
        $this->assertEquals($data, $this->object->getOriginalPublisherPlace());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setOriginalTitle
     * @covers Geissler\Converter\Model\Entry::getOriginalTitle
     */
    public function testOriginalTitle()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setOriginalTitle($data));
        $this->assertEquals($data, $this->object->getOriginalTitle());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setOrganization
     * @covers Geissler\Converter\Model\Entry::getOrganization
     */
    public function testOrganization()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setOrganization($data));
        $this->assertEquals($data, $this->object->getOrganization());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::getPages
     */
    public function testGetPages()
    {
        $this->assertInstanceOf('\Geissler\Converter\Model\Pages', $this->object->getPages());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setPdf
     * @covers Geissler\Converter\Model\Entry::getPdf
     */
    public function testPdf()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setPdf($data));
        $this->assertEquals($data, $this->object->getPdf());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setPublisher
     * @covers Geissler\Converter\Model\Entry::getPublisher
     */
    public function testPublisher()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setPublisher($data));
        $this->assertEquals($data, $this->object->getPublisher());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setPublisherPlace
     * @covers Geissler\Converter\Model\Entry::getPublisherPlace
     */
    public function testPublisherPlace()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setPublisherPlace($data));
        $this->assertEquals($data, $this->object->getPublisherPlace());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::getRecipient
     */
    public function testGetRecipient()
    {
        $this->assertInstanceOf('\Geissler\Converter\Model\Persons', $this->object->getRecipient());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setReferences
     * @covers Geissler\Converter\Model\Entry::getReferences
     */
    public function testReferences()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setReferences($data));
        $this->assertEquals($data, $this->object->getReferences());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::getReviewedAuthor
     */
    public function testGetReviewedAuthor()
    {
        $this->assertInstanceOf('\Geissler\Converter\Model\Persons', $this->object->getReviewedAuthor());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setReviewedTitle
     * @covers Geissler\Converter\Model\Entry::getReviewedTitle
     */
    public function testReviewedTitle()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setReviewedTitle($data));
        $this->assertEquals($data, $this->object->getReviewedTitle());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setScale
     * @covers Geissler\Converter\Model\Entry::getScale
     */
    public function testScale()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setScale($data));
        $this->assertEquals($data, $this->object->getScale());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setSchool
     * @covers Geissler\Converter\Model\Entry::getSchool
     */
    public function testSchool()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setSchool($data));
        $this->assertEquals($data, $this->object->getSchool());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setSection
     * @covers Geissler\Converter\Model\Entry::getSection
     */
    public function testSection()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setSection($data));
        $this->assertEquals($data, $this->object->getSection());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setSource
     * @covers Geissler\Converter\Model\Entry::getSource
     */
    public function testSource()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setSource($data));
        $this->assertEquals($data, $this->object->getSource());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setStatus
     * @covers Geissler\Converter\Model\Entry::getStatus
     */
    public function testStatus()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setStatus($data));
        $this->assertEquals($data, $this->object->getStatus());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::getSubmitted
     */
    public function testGetSubmitted()
    {
        $this->assertInstanceOf('\Geissler\Converter\Model\Dates', $this->object->getSubmitted());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setTitle
     * @covers Geissler\Converter\Model\Entry::getTitle
     */
    public function testTitle()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setTitle($data));
        $this->assertEquals($data, $this->object->getTitle());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setTitleSecondary
     * @covers Geissler\Converter\Model\Entry::getTitleSecondary
     */
    public function testTitleSecondary()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setTitleSecondary($data));
        $this->assertEquals($data, $this->object->getTitleSecondary());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setTitleShort
     * @covers Geissler\Converter\Model\Entry::getTitleShort
     */
    public function testTitleShort()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setTitleShort($data));
        $this->assertEquals($data, $this->object->getTitleShort());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::getTranslator
     */
    public function testGetTranslator()
    {
        $this->assertInstanceOf('\Geissler\Converter\Model\Persons', $this->object->getTranslator());

    }

    /**
     * @covers Geissler\Converter\Model\Entry::getType
     */
    public function testGetType()
    {
        $this->assertInstanceOf('\Geissler\Converter\Model\Type', $this->object->getType());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setVersion
     * @covers Geissler\Converter\Model\Entry::getVersion
     */
    public function testVersion()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setVersion($data));
        $this->assertEquals($data, $this->object->getVersion());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setVolume
     * @covers Geissler\Converter\Model\Entry::getVolume
     */
    public function testVolume()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setVolume($data));
        $this->assertEquals($data, $this->object->getVolume());
    }

    /**
     * @covers Geissler\Converter\Model\Entry::setYearSuffix
     * @covers Geissler\Converter\Model\Entry::getYearSuffix
     */
    public function testYearSuffix()
    {
        $data   =   'test data';
        $this->assertInstanceOf($this->class, $this->object->setYearSuffix($data));
        $this->assertEquals($data, $this->object->getYearSuffix());
    }
}
