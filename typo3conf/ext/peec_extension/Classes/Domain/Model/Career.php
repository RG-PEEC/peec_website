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
 * Career
 */
class Career extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * company
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $company = '';

    /**
     * place
     * 
     * @var string
     */
    protected $place = '';

    /**
     * position
     * 
     * @var string
     */
    protected $position = '';

    /**
     * jobdescription
     * 
     * @var string
     */
    protected $jobdescription = '';

    /**
     * startdate
     * 
     * @var \DateTime
     */
    protected $startdate = null;

    /**
     * enddate
     * 
     * @var \DateTime
     */
    protected $enddate = null;

    /**
     * Returns the company
     * 
     * @return string $company
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Sets the company
     * 
     * @param string $company
     * @return void
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * Returns the position
     * 
     * @return string $position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets the position
     * 
     * @param string $position
     * @return void
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * Returns the jobdescription
     * 
     * @return string $jobdescription
     */
    public function getJobdescription()
    {
        return $this->jobdescription;
    }

    /**
     * Sets the jobdescription
     * 
     * @param string $jobdescription
     * @return void
     */
    public function setJobdescription($jobdescription)
    {
        $this->jobdescription = $jobdescription;
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
     * Returns the place
     * 
     * @return string $place
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Sets the place
     * 
     * @param string $place
     * @return void
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }
}
