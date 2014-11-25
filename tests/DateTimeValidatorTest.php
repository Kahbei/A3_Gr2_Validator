<?php
/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 23/11/2014
 * Time: 17:23
 */

namespace Tests\CHECK\CheckValidator;

use CHECK\CheckValidator\DateTimeValidator;

/**
 * Class DateTimeValidatorTests
 * @package Tests\CHECK\CheckValidator
 */
class DateTimeValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if with the DateTime if it's 18 year or plus
     *
     * @throws \Exception
     */
    public function testIsMajor(){
        $date = new \DateTime('12/30/1993 00:00:00');
        $boolean = DateTimeValidator::isMajor($date);
        $this->assertTrue($boolean);
    }

    /**
     * Test if with the DateTime if it isn't 18 year or minus
     *
     * @throws \Exception
     */
    public function testIsNotMajor(){
        $date = new \DateTime('12/30/2012 00:00:00');
        $boolean = DateTimeValidator::isMajor($date);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the DateTime's year is equal
     *
     * @throws \Exception
     */
    public function testIsDateYear(){
        $date = new \DateTime('12/30/2012 00:00:00');
        $boolean = DateTimeValidator::dateYear($date, 2012);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the DateTime's year isn't equal
     *
     * @throws \Exception
     */
    public function testIsNotDateYear(){
        $date = new \DateTime('12/30/2012 00:00:00');
        $boolean = DateTimeValidator::dateYear($date, 2010);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the DateTime's month is equal
     *
     * @throws \Exception
     */
    public function testIsDateMonth(){
        $date = new \DateTime('12/30/2012 00:00:00');
        $boolean = DateTimeValidator::dateMonth($date, 12);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the DateTime's month isn't equal
     *
     * @throws \Exception
     */
    public function testIsNotDateMonth(){
        $date = new \DateTime('12/30/2012 00:00:00');
        $boolean = DateTimeValidator::dateMonth($date, 11);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the DateTime's day is equal
     *
     * @throws \Exception
     */
    public function testIsDateDay(){
        $date = new \DateTime('12/30/2012 00:00:00');
        $boolean = DateTimeValidator::dateDay($date, 30);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the DateTime's day isn't equal
     *
     * @throws \Exception
     */
    public function testIsNotDateDay(){
        $date = new \DateTime('12/30/2012 00:00:00');
        $boolean = DateTimeValidator::dateDay($date, 11);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the DateTime is passed
     *
     * @throws \Exception
     */
    public function testDatePassed(){
        $date = new \DateTime('05/08/1945 00:00:00');
        $boolean = DateTimeValidator::DatePassed($date);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the DateTime isn't passed
     *
     * @throws \Exception
     */
    public function testIsNotPassed(){
        $date = new \DateTime();
        $boolean = DateTimeValidator::datePassed($date);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the DateTime is coming
     *
     * @throws \Exception
     */
    public function testIsComing(){
        $date = new \DateTime('01/01/2112 00:00:00');
        $boolean = DateTimeValidator::dateComing($date);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the DateTime isn't coming
     *
     * @throws \Exception
     */
    public function testIsNotComing(){
        $date = new \DateTime();
        $boolean = DateTimeValidator::dateComing($date);
        $this->assertFalse($boolean);
    }

    /**
     * Test if more than X day have passed
     *
     * @throws \Exception
     */
    public function testHaveMoreThan(){
        $date = new \DateTime();
        $date2 = $date->add(new \DateInterval('P10D'));
        $boolean = DateTimeValidator::dateMoreThan($date2, 9);
        $this->assertTrue($boolean);
    }

    /**
     * Test if more than X day haven't passed
     *
     * @throws \Exception
     */
    public function testHaveNotMoreThan(){
        $date = new \DateTime();
        $date2 = $date->add(new \DateInterval('P10D'));
        $boolean = DateTimeValidator::dateMoreThan($date2, 99999);
        $this->assertFalse($boolean);
    }

    /**
     * Test if more than X day have passed
     *
     * @throws \Exception
     */
    public function testHaveLessThan(){
        $date = new \DateTime();
        $date2 = $date->sub(new \DateInterval('P10D'));
        $boolean = DateTimeValidator::dateLessThan($date2, 99999);
        $this->assertTrue($boolean);
    }

    /**
     * Test if more than X day haven't passed
     *
     * @throws \Exception
     */
    public function testHaveNotLessThan(){
        $date = new \DateTime();
        $date2 = $date->sub(new \DateInterval('P10D'));
        $boolean = DateTimeValidator::dateLessThan($date2, 9);
        $this->assertFalse($boolean);
    }

    /**
     * Test if it's the same Time zone
     *
     * @throws \Exception
     */
    public function testSameTimeZone(){
        $date = new \DateTime();
        $boolean = DateTimeValidator::timeZone($date, 'UTC');
        $this->assertTrue($boolean);
    }

    /**
     * Test if it's not the same Time zone
     *
     * @throws \Exception
     */
    public function testNotSameTimeZone(){
        $date = new \DateTime();
        $boolean = DateTimeValidator::timeZone($date, 'Asia/Tokyo');
        $this->assertFalse($boolean);
    }

} 