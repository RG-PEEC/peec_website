<?php
namespace PEEC\PeecExtension\Domain\Model;

use TYPO3\CMS\Core\Utility\GeneralUtility;

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
 * Project
 */
class Project extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $title = '';

    /**
     * startdate
     *
     * @var \DateTime
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $startdate = null;

    /**
     * enddate
     *
     * @var \DateTime
     */
    protected $enddate = null;

    /**
     * description
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $description = '';

    /**
     * colorCode
     *
     * @var string
     */
    protected $colorCode = '';

    /**
     * active
     *
     * @var bool
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $active = false;

    /**
     * Used for Project cards + Initial Image at Project Detail View
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $teaserimage = null;

    /**
     * further images - display @ lightbox
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $media = null;

    /**
     * member
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Employee>
     */
    protected $member = null;

    /**
     * leader
     *
     * @var \PEEC\PeecExtension\Domain\Model\Employee
     */
    protected $leader = null;

    /**
     * researchpartner
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Researchpartner>
     */
    protected $researchpartner = null;

    /**
     * companypartner
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Companypartner>
     */
    protected $companypartner = null;

    /**
     * fundingpartner
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Fundingpartner>
     */
    protected $fundingpartner = null;


    /**
     * publication
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Publication>
     */
    protected $publication = null;

    /**
     * category
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Category>
     */
    protected $category = null;

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
        $this->media = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->member = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->researchpartner = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->companypartner = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->fundingpartner = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->publication = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->category = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Returns the startdate
     *
     * @return \DateTime $startdate
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Sets the startdate
     *
     * @param \DateTime $startdate
     * @return void
     */
    public function setStartdate(\DateTime $startdate)
    {
        $this->startdate = $startdate;
    }

    /**
     * Get year of datetime
     *
     * @return int
     */
    public function getYearOfStartDate()
    {
        return $this->getStartdate()->format('Y');
    }

    /**
     * Returns the enddate
     *
     * @return \DateTime $enddate
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * Sets the enddate
     *
     * @param \DateTime $enddate
     * @return void
     */
    public function setEnddate(\DateTime $enddate)
    {
        $this->enddate = $enddate;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Adds a Member
     *
     * @param \PEEC\PeecExtension\Domain\Model\Employee $member
     * @return void
     */
    public function addMember(\PEEC\PeecExtension\Domain\Model\Employee $member)
    {
        $this->member->attach($member);
    }

    /**
     * Removes a Member
     *
     * @param \PEEC\PeecExtension\Domain\Model\Employee $memberToRemove The Employee to be removed
     * @return void
     */
    public function removeMember(\PEEC\PeecExtension\Domain\Model\Employee $memberToRemove)
    {
        $this->member->detach($memberToRemove);
    }

    /**
     * Returns the member
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Employee> member
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Sets the member
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Employee> $member
     * @return void
     */
    public function setMember(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $member)
    {
        $this->member = $member;
    }

    /**
     * Adds a Fundingpartner
     *
     * @param \PEEC\PeecExtension\Domain\Model\Fundingpartner $fundingpartner
     * @return void
     */
    public function addFundingpartner(\PEEC\PeecExtension\Domain\Model\Fundingpartner $fundingpartner)
    {
        $this->fundingpartner->attach($fundingpartner);
    }

    /**
     * Removes a Fundingpartner
     *
     * @param \PEEC\PeecExtension\Domain\Model\Fundingpartner $fundingpartnerToRemove The Fundingpartner to be removed
     * @return void
     */
    public function removeFundingpartner(\PEEC\PeecExtension\Domain\Model\Fundingpartner $fundingpartnerToRemove)
    {
        $this->fundingpartner->detach($fundingpartnerToRemove);
    }

    /**
     * Returns the fundingpartner
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Fundingpartner> $fundingpartner
     */
    public function getFundingpartner()
    {
        return $this->fundingpartner;
    }

    /**
     * Sets the fundingpartner
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Fundingpartner> $fundingpartner
     * @return void
     */
    public function setFundingpartner(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $fundingpartner)
    {
        $this->fundingpartner = $fundingpartner;
    }

    /**
     * Adds a Companypartner
     *
     * @param \PEEC\PeecExtension\Domain\Model\Companypartner $companypartner
     * @return void
     */
    public function addCompanypartner(\PEEC\PeecExtension\Domain\Model\Companypartner $companypartner)
    {
        $this->companypartner->attach($companypartner);
    }

    /**
     * Removes a Companypartner
     *
     * @param \PEEC\PeecExtension\Domain\Model\Companypartner $companypartnerToRemove The Companypartner to be removed
     * @return void
     */
    public function removeCompanypartner(\PEEC\PeecExtension\Domain\Model\Companypartner $companypartnerToRemove)
    {
        $this->companypartner->detach($companypartnerToRemove);
    }

    /**
     * Returns the companypartner
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Companypartner> $companypartner
     */
    public function getCompanypartner()
    {
        return $this->companypartner;
    }

    /**
     * Sets the companypartner
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Companypartner> $companypartner
     * @return void
     */
    public function setCompanypartner(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $companypartner)
    {
        $this->companypartner = $companypartner;
    }

    /**
     * Returns the leader
     *
     * @return \PEEC\PeecExtension\Domain\Model\Employee $leader
     */
    public function getLeader()
    {
        return $this->leader;
    }

    /**
     * Sets the leader
     *
     * @param \PEEC\PeecExtension\Domain\Model\Employee $leader
     * @return void
     */
    public function setLeader(\PEEC\PeecExtension\Domain\Model\Employee $leader)
    {
        $this->leader = $leader;
    }

    /**
     * Returns the active
     *
     * @return bool $active
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets the active
     *
     * @param bool $active
     * @return void
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * Returns the boolean state of active
     *
     * @return bool
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * Adds a Category
     *
     * @param \PEEC\PeecExtension\Domain\Model\Category $category
     * @return void
     */
    public function addCategory(\PEEC\PeecExtension\Domain\Model\Category $category)
    {
        $this->category->attach($category);
    }

    /**
     * Removes a Category
     *
     * @param \PEEC\PeecExtension\Domain\Model\Category $categoryToRemove The Category to be removed
     * @return void
     */
    public function removeCategory(\PEEC\PeecExtension\Domain\Model\Category $categoryToRemove)
    {
        $this->category->detach($categoryToRemove);
    }

    /**
     * Returns the category
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Category> $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the category
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Category> $category
     * @return void
     */
    public function setCategory(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $category)
    {
        $this->category = $category;
    }

    /**
     * Returns the colorCode
     *
     * @return string colorCode
     */
    public function getColorCode()
    {
        return $this->colorCode;
    }

    /**
     * Sets the colorCode
     *
     * @param string $colorCode
     * @return void
     */
    public function setColorCode($colorCode)
    {
        $this->colorCode = $colorCode;
    }

    /**
     * Adds a Researchpartner
     *
     * @param \PEEC\PeecExtension\Domain\Model\Researchpartner $researchpartner
     * @return void
     */
    public function addResearchpartner(\PEEC\PeecExtension\Domain\Model\Researchpartner $researchpartner)
    {
        $this->researchpartner->attach($researchpartner);
    }

    /**
     * Removes a Researchpartner
     *
     * @param \PEEC\PeecExtension\Domain\Model\Researchpartner $researchpartnerToRemove The Researchpartner to be removed
     * @return void
     */
    public function removeResearchpartner(\PEEC\PeecExtension\Domain\Model\Researchpartner $researchpartnerToRemove)
    {
        $this->researchpartner->detach($researchpartnerToRemove);
    }

    /**
     * Returns the researchpartner
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Researchpartner> $researchpartner
     */
    public function getResearchpartner()
    {
        return $this->researchpartner;
    }

    /**
     * Sets the researchpartner
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Researchpartner> $researchpartner
     * @return void
     */
    public function setResearchpartner(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $researchpartner)
    {
        $this->researchpartner = $researchpartner;
    }

    /**
     * Returns the teaserimage
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $teaserimage
     */
    public function getTeaserimage()
    {
        return $this->teaserimage;
    }

    /**
     * Sets the teaserimage
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $teaserimage
     * @return void
     */
    public function setTeaserimage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $teaserimage)
    {
        $this->teaserimage = $teaserimage;
    }

    /**
     * Adds a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $medium
     * @return void
     */
    public function addMedium(\TYPO3\CMS\Extbase\Domain\Model\FileReference $medium)
    {
        $this->media->attach($medium);
    }

    /**
     * Removes a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $mediumToRemove The FileReference to be removed
     * @return void
     */
    public function removeMedium(\TYPO3\CMS\Extbase\Domain\Model\FileReference $mediumToRemove)
    {
        $this->media->detach($mediumToRemove);
    }

    /**
     * Returns the media
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $media
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Sets the media
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $media
     * @return void
     */
    public function setMedia(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $media)
    {
        $this->media = $media;
    }


    /**
     * Adds a Publication
     *
     * @param \PEEC\PeecExtension\Domain\Model\Publication $publication
     * @return void
     */
    public function addPublication(\PEEC\PeecExtension\Domain\Model\Publication $publication)
    {
        $this->researchpartner->attach($publication);
    }

    /**
     * Removes a Publication
     *
     * @param \PEEC\PeecExtension\Domain\Model\Publication $publication The Researchpartner to be removed
     * @return void
     */
    public function removePublication(\PEEC\PeecExtension\Domain\Model\Publication $publication)
    {
        $this->researchpartner->detach($publication);
    }

    /**
     * Returns the publication
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Publication> $publication
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * Sets the publication
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Publication> $publication
     * @return void
     */
    public function setPublication(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $publication)
    {
        $this->researchpartner = $publication;
    }

}
