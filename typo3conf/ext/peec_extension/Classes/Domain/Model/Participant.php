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
 * Participant
 */
class Participant extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

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
}
