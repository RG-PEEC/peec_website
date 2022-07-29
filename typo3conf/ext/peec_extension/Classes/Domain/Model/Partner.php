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
 * Partner
 */
class Partner extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

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
        $this->researchpartner = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->companypartner = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Adds a Fundingpartner
     * 
     * @param \PEEC\PeecExtension\Domain\Model\Researchpartner $researchpartner
     * @return void
     */
    public function addResearchpartner(\PEEC\PeecExtension\Domain\Model\Researchpartner $researchpartner)
    {
        $this->researchpartner->attach($researchpartner);
    }

    /**
     * Removes a Fundingpartner
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
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PEEC\PeecExtension\Domain\Model\Researchpartner> researchpartner
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
}
