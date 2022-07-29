<?php
namespace PEEC\PeecExtension\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Daniel Saiz <daniel.saiz@gmx.at>
 * @author Matthias Kohler <Matthias.Kohler@gmx.de>
 */
class CareerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \PEEC\PeecExtension\Domain\Model\Career
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \PEEC\PeecExtension\Domain\Model\Career();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getCompanyReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCompany()
        );
    }

    /**
     * @test
     */
    public function setCompanyForStringSetsCompany()
    {
        $this->subject->setCompany('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'company',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPlaceReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPlace()
        );
    }

    /**
     * @test
     */
    public function setPlaceForStringSetsPlace()
    {
        $this->subject->setPlace('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'place',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPositionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPosition()
        );
    }

    /**
     * @test
     */
    public function setPositionForStringSetsPosition()
    {
        $this->subject->setPosition('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'position',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getJobdescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getJobdescription()
        );
    }

    /**
     * @test
     */
    public function setJobdescriptionForStringSetsJobdescription()
    {
        $this->subject->setJobdescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'jobdescription',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStartdateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getStartdate()
        );
    }

    /**
     * @test
     */
    public function setStartdateForDateTimeSetsStartdate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setStartdate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'startdate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEnddateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getEnddate()
        );
    }

    /**
     * @test
     */
    public function setEnddateForDateTimeSetsEnddate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setEnddate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'enddate',
            $this->subject
        );
    }
}
