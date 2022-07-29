<?php
namespace PEEC\PeecExtension\Domain\Model;

use Geissler\Converter\Converter;
use Geissler\Converter\Standard\RIS\RIS;
use Geissler\Converter\Standard\BibTeX\BibTeX;
use PEEC\PeecExtension\Service\RisService;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

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
 * Publication
 */
class Publication extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var BibTeX
     */
    protected $bibtex = '';

    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * type
     *
     * @var int
     */
    protected $type = 0;

    /**
     * Upload your pdf of your publication.
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $pdf = null;

    /**
     * referencelink
     *
     * @var string
     */
    protected $referencelink = '';

    /**
     * doi
     *
     * @var string
     */
    protected $doi = '';

    /**
     * journal
     *
     * @var string
     */
    protected $journal = '';

    /**
     * year
     *
     * @var int
     */
    protected $year = 0;

    /**
     * volume
     *
     * @var string
     */
    protected $volume = '';

    /**
     * number
     *
     * @var string
     */
    protected $number = '';

    /**
     * month
     *
     * @var string
     */
    protected $month = '';

    /**
     * note
     *
     * @var string
     */
    protected $note = '';

    /**
     * publisher
     *
     * @var string
     */
    protected $publisher = '';

    /**
     * address
     *
     * @var string
     */
    protected $address = '';

    /**
     * edition
     *
     * @var string
     */
    protected $edition = '';

    /**
     * isbn
     *
     * @var string
     */
    protected $isbn = '';

    /**
     * booktitle
     *
     * @var string
     */
    protected $booktitle = '';

    /**
     * organization
     *
     * @var string
     */
    protected $organization = '';

    /**
     * series
     *
     * @var string
     */
    protected $series = '';

    /**
     * chapter
     *
     * @var string
     */
    protected $chapter = '';

    /**
     * school
     *
     * @var string
     */
    protected $school = '';

    /**
     * howpublished
     *
     * @var string
     */
    protected $howpublished = '';

    /**
     * Enter this format: firstname, lastname    or with mutliple: firstname, lastname;
     * firstname, lastname
     *
     * @var string
     */
    protected $editor = '';

    /**
     * startpage
     *
     * @var int
     */
    protected $startpage = '';

    /**
     * endingpage
     *
     * @var int
     */
    protected $endingpage = 0;

    /**
     * used as key for bibTeX (@book {key ... })
     *
     *
     * @var string
     */
    protected $citationlable = '';

    /**
     * author
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Employee>
     */
    protected $author = null;

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->author = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Employee
     *
     * @param \PEEC\PeecExtension\Domain\Model\Employee $author
     * @return void
     */
    public function addAuthor(\PEEC\PeecExtension\Domain\Model\Employee $author)
    {
        $this->author->attach($author);
    }

    /**
     * Removes a Employee
     *
     * @param \PEEC\PeecExtension\Domain\Model\Employee $authorToRemove The Employee to be removed
     * @return void
     */
    public function removeAuthor(\PEEC\PeecExtension\Domain\Model\Employee $authorToRemove)
    {
        $this->author->detach($authorToRemove);
    }

    /**
     * Returns the author
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Employee> author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets the author
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Employee> $author
     * @return void
     */
    public function setAuthor(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $author)
    {
        $this->author = $author;
    }

    /**
     * Returns the pdf
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $pdf
     */
    public function getPdf()
    {
        return $this->pdf;
    }

    /**
     * Sets the pdf
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $pdf
     * @return void
     */
    public function setPdf(\TYPO3\CMS\Extbase\Domain\Model\FileReference $pdf)
    {
        $this->pdf = $pdf;
    }

    /**
     * Returns the referencelink
     *
     * @return string $referencelink
     */
    public function getReferencelink()
    {
        return $this->referencelink;
    }

    /**
     * Sets the referencelink
     *
     * @param string $referencelink
     * @return void
     */
    public function setReferencelink($referencelink)
    {
        $this->referencelink = $referencelink;
    }

    /**
     * Returns the type
     *
     * @return int $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     *
     * @param int $type
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the year
     *
     * @return int $year
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Sets the year
     *
     * @param int $year
     * @return void
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * Returns the journal
     *
     * @return string journal
     */
    public function getJournal()
    {
        return $this->journal;
    }

    /**
     * Sets the journal
     *
     * @param string $journal
     * @return void
     */
    public function setJournal($journal)
    {
        $this->journal = $journal;
    }

    /**
     * Returns the doi
     *
     * @return string $doi
     */
    public function getDoi()
    {
        return $this->doi;
    }

    /**
     * Sets the doi
     *
     * @param string $doi
     * @return void
     */
    public function setDoi($doi)
    {
        $this->doi = $doi;
    }

    /**
     * Returns the volume
     *
     * @return string $volume
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Sets the volume
     *
     * @param string $volume
     * @return void
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
    }

    /**
     * Returns the number
     *
     * @return string $number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets the number
     *
     * @param string $number
     * @return void
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * Returns the month
     *
     * @return string $month
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Sets the month
     *
     * @param string $month
     * @return void
     */
    public function setMonth($month)
    {
        $this->month = $month;
    }

    /**
     * Returns the note
     *
     * @return string $note
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets the note
     *
     * @param string $note
     * @return void
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * Returns the publisher
     *
     * @return string $publisher
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Sets the publisher
     *
     * @param string $publisher
     * @return void
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    /**
     * Returns the address
     *
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address
     *
     * @param string $address
     * @return void
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Returns the edition
     *
     * @return string $edition
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * Sets the edition
     *
     * @param string $edition
     * @return void
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;
    }

    /**
     * Returns the isbn
     *
     * @return string $isbn
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Sets the isbn
     *
     * @param string $isbn
     * @return void
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    /**
     * Returns the booktitle
     *
     * @return string $booktitle
     */
    public function getBooktitle()
    {
        return $this->booktitle;
    }

    /**
     * Sets the booktitle
     *
     * @param string $booktitle
     * @return void
     */
    public function setBooktitle($booktitle)
    {
        $this->booktitle = $booktitle;
    }

    /**
     * Returns the organization
     *
     * @return string $organization
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Sets the organization
     *
     * @param string $organization
     * @return void
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
    }

    /**
     * Returns the series
     *
     * @return string $series
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * Sets the series
     *
     * @param string $series
     * @return void
     */
    public function setSeries($series)
    {
        $this->series = $series;
    }

    /**
     * Returns the chapter
     *
     * @return string $chapter
     */
    public function getChapter()
    {
        return $this->chapter;
    }

    /**
     * Sets the chapter
     *
     * @param string $chapter
     * @return void
     */
    public function setChapter($chapter)
    {
        $this->chapter = $chapter;
    }

    /**
     * Returns the school
     *
     * @return string $school
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * Sets the school
     *
     * @param string $school
     * @return void
     */
    public function setSchool($school)
    {
        $this->school = $school;
    }

    /**
     * Returns the howpublished
     *
     * @return string $howpublished
     */
    public function getHowpublished()
    {
        return $this->howpublished;
    }

    /**
     * Sets the howpublished
     *
     * @param string $howpublished
     * @return void
     */
    public function setHowpublished($howpublished)
    {
        $this->howpublished = $howpublished;
    }

    /**
     * Returns the editor
     *
     * @return string $editor
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * Sets the editor
     *
     * @param string $editor
     * @return void
     */
    public function setEditor($editor)
    {
        $this->editor = $editor;
    }

    /**
     * Returns the startpage
     *
     * @return int startpage
     */
    public function getStartpage()
    {
        return $this->startpage;
    }

    /**
     * Sets the startpage
     *
     * @param string $startpage
     * @return void
     */
    public function setStartpage($startpage)
    {
        $this->startpage = $startpage;
    }

    /**
     * Returns the endingpage
     *
     * @return int $endingpage
     */
    public function getEndingpage()
    {
        return $this->endingpage;
    }

    /**
     * Sets the endingpage
     *
     * @param int $endingpage
     * @return void
     */
    public function setEndingpage($endingpage)
    {
        $this->endingpage = $endingpage;
    }

    /**
     * Returns the citationlable
     *
     * @return string $citationlable
     */
    public function getCitationlable()
    {
        return $this->citationlable;
    }

    /**
     * Sets the citationlable
     *
     * @param string $citationlable
     * @return void
     */
    public function setCitationlable($citationlable)
    {
        $this->citationlable = $citationlable;
    }

    /* ----------------- */

    /**
     * Returns the bibtex file
     *
     * @return string
     */
    public function getBibTex()
    {
        require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('peec_extension', 'Resources/Private/Libraries/converter/vendor/autoload.php');

        //hand over to RisService - get Ris-formatted string
        $data = RisService::generateRisText($this);

        //convert Ris to Bibtex-format
        $converter = new Converter();
        $RIS = new RIS($data);
        $file = $converter->convert($RIS, new BibTeX());
        $charEsc = array(
        'ö' => '\\"{o}',
        'ü' => '\\"{u}',
        'ä' => '\\"{a}',
        'Ö' => '\\"{O}',
        'Ü' => '\\"{U}',
        'Ä' => '\\"{A}',
        'ß' => '\\ss',
        'ô' => '\\^{o}',
        'Ô' => '\\^{O}',
        'ó' => '\\´{o}',
        'Ó' => '\\´{O}',
        'ò' => '\\`{o}',
        'Ò' => '\\`{O}',
        'â' => '\\^{a}',
        'Â' => '\\^{A}',
        'á' => '\\´{a}',
        'Á' => '\\´{A}',
        'à' => '\\`{a}',
        'À' => '\\`{A}',
        'û' => '\\^{u}',
        'Û' => '\\^{U}',
        'ú' => '\\´{u}',
        'Ú' => '\\´{U}',
        'ù' => '\\`{u}',
        'Ù' => '\\`{U}'
        );
        foreach ($charEsc as $key => $value) {
            $file = str_replace($key, $value, $file);
        }
        return $file;
    }

    /**
     * Returns the author
     *
     * @return string authors
     */
    public function getAuthorOutput()
    {
        $aAuthors = [];
        foreach ($this->author->toArray() as $author) {
            $aAuthors[] = strtoupper(substr($author->getFirstname(), 0, 1)) . ". "
                . $author->getLastname();
        }
        if(count($aAuthors) == 1){
            return ($aAuthors[0].",");
        }
        return implode(", ", array_slice($aAuthors, 0, -1)) . " and " . end($aAuthors);
    }

    /**
     * Returns the editorstring
     *
     * @return string $editor
     */
    public function getEditorString()
    {
        if ($this->editor != "") {
            $newEditors = [];
            $aEditors = [];
            $aData = explode(";", $this->editor);

            if (is_array($aData)) {

                foreach ($aData as $sEditor) {
                    $aEditors[] = [
                        "firstname" => explode(",",$sEditor)[0],
                        "lastname" => explode(",",$sEditor)[1]
                    ];
                }
            } else {
                $aEditors[] = [
                    "firstname" => explode(",",$this->editor)[0],
                    "lastname" => explode(",",$this->editor)[1]
                ];
            }
            foreach ($aEditors as $editor) {
                $newEditors[] = $editor['firstname'] . " " . $editor['lastname'];
            }
            if(count($newEditors) == 1){
                return ($newEditors[0].", Ed.");
            }

            return implode(", ", array_slice($newEditors, 0, -1)) . " and "
                . end($newEditors).", Eds.";
        }
        return null;
    }
}
