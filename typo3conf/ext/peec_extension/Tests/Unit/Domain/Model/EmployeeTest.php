<?php
namespace PEEC\PeecExtension\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Daniel Saiz <daniel.saiz@gmx.at>
 * @author Matthias Kohler <Matthias.Kohler@gmx.de>
 */
class EmployeeTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \PEEC\PeecExtension\Domain\Model\Employee
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \PEEC\PeecExtension\Domain\Model\Employee();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getFirstnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFirstname()
        );
    }

    /**
     * @test
     */
    public function setFirstnameForStringSetsFirstname()
    {
        $this->subject->setFirstname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'firstname',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLastnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLastname()
        );
    }

    /**
     * @test
     */
    public function setLastnameForStringSetsLastname()
    {
        $this->subject->setLastname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'lastname',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAcademictitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAcademictitle()
        );
    }

    /**
     * @test
     */
    public function setAcademictitleForStringSetsAcademictitle()
    {
        $this->subject->setAcademictitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'academictitle',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPostacademictitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPostacademictitle()
        );
    }

    /**
     * @test
     */
    public function setPostacademictitleForStringSetsPostacademictitle()
    {
        $this->subject->setPostacademictitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'postacademictitle',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmail()
        );
    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail()
    {
        $this->subject->setEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'email',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPhonenumberReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPhonenumber()
        );
    }

    /**
     * @test
     */
    public function setPhonenumberForStringSetsPhonenumber()
    {
        $this->subject->setPhonenumber('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'phonenumber',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPictureReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getPicture()
        );
    }

    /**
     * @test
     */
    public function setPictureForFileReferenceSetsPicture()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setPicture($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'picture',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPositionReturnsInitialValueForPosition()
    {
        self::assertEquals(
            null,
            $this->subject->getPosition()
        );
    }

    /**
     * @test
     */
    public function setPositionForPositionSetsPosition()
    {
        $positionFixture = new \PEEC\PeecExtension\Domain\Model\Position();
        $this->subject->setPosition($positionFixture);

        self::assertAttributeEquals(
            $positionFixture,
            'position',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEducationReturnsInitialValueForEducation()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getEducation()
        );
    }

    /**
     * @test
     */
    public function setEducationForObjectStorageContainingEducationSetsEducation()
    {
        $education = new \PEEC\PeecExtension\Domain\Model\Education();
        $objectStorageHoldingExactlyOneEducation = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneEducation->attach($education);
        $this->subject->setEducation($objectStorageHoldingExactlyOneEducation);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneEducation,
            'education',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addEducationToObjectStorageHoldingEducation()
    {
        $education = new \PEEC\PeecExtension\Domain\Model\Education();
        $educationObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $educationObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($education));
        $this->inject($this->subject, 'education', $educationObjectStorageMock);

        $this->subject->addEducation($education);
    }

    /**
     * @test
     */
    public function removeEducationFromObjectStorageHoldingEducation()
    {
        $education = new \PEEC\PeecExtension\Domain\Model\Education();
        $educationObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $educationObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($education));
        $this->inject($this->subject, 'education', $educationObjectStorageMock);

        $this->subject->removeEducation($education);
    }

    /**
     * @test
     */
    public function getCareerReturnsInitialValueForCareer()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getCareer()
        );
    }

    /**
     * @test
     */
    public function setCareerForObjectStorageContainingCareerSetsCareer()
    {
        $career = new \PEEC\PeecExtension\Domain\Model\Career();
        $objectStorageHoldingExactlyOneCareer = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneCareer->attach($career);
        $this->subject->setCareer($objectStorageHoldingExactlyOneCareer);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneCareer,
            'career',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addCareerToObjectStorageHoldingCareer()
    {
        $career = new \PEEC\PeecExtension\Domain\Model\Career();
        $careerObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $careerObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($career));
        $this->inject($this->subject, 'career', $careerObjectStorageMock);

        $this->subject->addCareer($career);
    }

    /**
     * @test
     */
    public function removeCareerFromObjectStorageHoldingCareer()
    {
        $career = new \PEEC\PeecExtension\Domain\Model\Career();
        $careerObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $careerObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($career));
        $this->inject($this->subject, 'career', $careerObjectStorageMock);

        $this->subject->removeCareer($career);
    }
}
