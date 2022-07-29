<?php
namespace PEEC\PeecExtension\Domain\Model;


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
 * Member
 */
class Employee extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * firstname
     * 
     * @var string
     */
    protected $firstnameAbbr = '';

    /**
     * firstname
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $firstname = '';

    /**
     * lastname
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $lastname = '';

    /**
     * academictitle
     * 
     * @var string
     */
    protected $academictitle = '';

    /**
     * postacademictitle
     * 
     * @var string
     */
    protected $postacademictitle = '';

    /**
     * email
     * 
     * @var string
     */
    protected $email = '';

    /**
     * phonenumber
     * 
     * @var string
     */
    protected $phonenumber = '';

    /**
     * picture
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $picture = null;

    /**
     * position
     * 
     * @var \PEEC\PeecExtension\Domain\Model\Position
     */
    protected $position = null;

    /**
     * education
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Education>
     */
    protected $education = null;

    /**
     * career
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Career>
     */
    protected $career = null;

    /**
     * Returns the firstname
     * 
     * @return string $firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Sets the firstname
     * 
     * @param string $firstname
     * @return void
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * returns capital first letter
     * 
     * @return string
     */
    public function getFirstLetter()
    {
        return strtoupper(substr($this->firstname, 0, 1));
    }

    /**
     * Returns the lastname
     * 
     * @return string $lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Sets the lastname
     * 
     * @param string $lastname
     * @return void
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Returns the academictitle
     * 
     * @return string $academictitle
     */
    public function getAcademictitle()
    {
        return $this->academictitle;
    }

    /**
     * Sets the academictitle
     * 
     * @param string $academictitle
     * @return void
     */
    public function setAcademictitle($academictitle)
    {
        $this->academictitle = $academictitle;
    }

    /**
     * Returns the email
     * 
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     * 
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Returns the phonenumber
     * 
     * @return string $phonenumber
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * Sets the phonenumber
     * 
     * @param string $phonenumber
     * @return void
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;
    }

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
        $this->education = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->career = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Education
     * 
     * @param \PEEC\PeecExtension\Domain\Model\Education $education
     * @return void
     */
    public function addEducation(\PEEC\PeecExtension\Domain\Model\Education $education)
    {
        $this->education->attach($education);
    }

    /**
     * Removes a Education
     * 
     * @param \PEEC\PeecExtension\Domain\Model\Education $educationToRemove The Education to be removed
     * @return void
     */
    public function removeEducation(\PEEC\PeecExtension\Domain\Model\Education $educationToRemove)
    {
        $this->education->detach($educationToRemove);
    }

    /**
     * Returns the education
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Education> $education
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Sets the education
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Education> $education
     * @return void
     */
    public function setEducation(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $education)
    {
        $this->education = $education;
    }

    /**
     * Adds a Career
     * 
     * @param \PEEC\PeecExtension\Domain\Model\Career $career
     * @return void
     */
    public function addCareer(\PEEC\PeecExtension\Domain\Model\Career $career)
    {
        $this->career->attach($career);
    }

    /**
     * Removes a Career
     * 
     * @param \PEEC\PeecExtension\Domain\Model\Career $careerToRemove The Career to be removed
     * @return void
     */
    public function removeCareer(\PEEC\PeecExtension\Domain\Model\Career $careerToRemove)
    {
        $this->career->detach($careerToRemove);
    }

    /**
     * Returns the career
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Career> $career
     */
    public function getCareer()
    {
        return $this->career;
    }

    /**
     * Sets the career
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Career> $career
     * @return void
     */
    public function setCareer(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $career)
    {
        $this->career = $career;
    }

    /**
     * Returns the position
     * 
     * @return \PEEC\PeecExtension\Domain\Model\Position $position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets the position
     * 
     * @param \PEEC\PeecExtension\Domain\Model\Position $position
     * @return void
     */
    public function setPosition(\PEEC\PeecExtension\Domain\Model\Position $position)
    {
        $this->position = $position;
    }

    /**
     * Returns the picture
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Sets the picture
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $picture
     * @return void
     */
    public function setPicture(\TYPO3\CMS\Extbase\Domain\Model\FileReference $picture)
    {
        $this->picture = $picture;
    }

    /**
     * Returns the postacademictitle
     * 
     * @return string $postacademictitle
     */
    public function getPostacademictitle()
    {
        return $this->postacademictitle;
    }

    /**
     * Sets the postacademictitle
     * 
     * @param string $postacademictitle
     * @return void
     */
    public function setPostacademictitle($postacademictitle)
    {
        $this->postacademictitle = $postacademictitle;
    }
}
