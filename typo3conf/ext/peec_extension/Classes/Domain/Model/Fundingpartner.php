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
class Fundingpartner extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
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
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $abbreviation = null;

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
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference logo
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
     * @return string abbreviation
     */
    public function getAbbreviation()
    {
        return $this->abbreviation;
    }

    /**
     * Sets the abbreviation
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $abbreviation
     * @return void
     */
    public function setAbbreviation(\TYPO3\CMS\Extbase\Domain\Model\FileReference $abbreviation)
    {
        $this->abbreviation = $abbreviation;
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
}
