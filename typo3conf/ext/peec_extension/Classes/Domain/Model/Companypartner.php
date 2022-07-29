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
 * Companypartner
 */
class Companypartner extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $name = '';

    /**
     * abbreviation
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $abbreviation = '';

    /**
     * website
     *
     * @var string
     */
    protected $website = '';

    /**
     * logo
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $logo = null;

    /**
     * if checked, partner is displayed on partnerpage
     *
     * @var bool
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $display = false;

    /**
     * participant
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Participant>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $participant = null;

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the logo
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Sets the logo
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
     * @return void
     */
    public function setLogo(\TYPO3\CMS\Extbase\Domain\Model\FileReference $logo)
    {
        $this->logo = $logo;
    }

    /**
     * Returns the abbreviation
     *
     * @return string $abbreviation
     */
    public function getAbbreviation()
    {
        return $this->abbreviation;
    }

    /**
     * Sets the abbreviation
     *
     * @param string $abbreviation
     * @return void
     */
    public function setAbbreviation($abbreviation)
    {
        $this->abbreviation = $abbreviation;
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
        $this->participant = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Participant
     *
     * @param \PEEC\PeecExtension\Domain\Model\Participant $participant
     * @return void
     */
    public function addParticipant(\PEEC\PeecExtension\Domain\Model\Participant $participant)
    {
        $this->participant->attach($participant);
    }

    /**
     * Removes a Participant
     *
     * @param \PEEC\PeecExtension\Domain\Model\Participant $participantToRemove The Participant to be removed
     * @return void
     */
    public function removeParticipant(\PEEC\PeecExtension\Domain\Model\Participant $participantToRemove)
    {
        $this->participant->detach($participantToRemove);
    }

    /**
     * Returns the participant
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Participant> $participant
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Sets the participant
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Participant> $participant
     * @return void
     */
    public function setParticipant(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $participant)
    {
        $this->participant = $participant;
    }

    /**
     * Returns the website
     *
     * @return string $website
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Sets the website
     *
     * @param string $website
     * @return void
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * Returns the display
     *
     * @return bool $display
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Sets the display
     *
     * @param bool $display
     * @return void
     */
    public function setDisplay($display)
    {
        $this->display = $display;
    }

    /**
     * Returns the boolean state of display
     *
     * @return bool
     */
    public function isDisplay()
    {
        return $this->display;
    }
}
