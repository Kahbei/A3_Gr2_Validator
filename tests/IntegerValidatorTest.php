<?php
/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 23/11/2014
 * Time: 17:22
 */

namespace Tests\CHECK\CheckValidator;

use CHECK\CheckValidator\IntegerValidator;

/**
 * Class IntegerValidatorTests
 * @package Tests\CHECK\CheckValidator
 */
class IntegerValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if the integer is equal
     *
     * @throws \Exception
     */
    public function testIsEqual(){
        $int = mt_rand(1,10);
        $boolean = IntegerValidator::equal($int,$int);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the integer isn't equal
     *
     * @throws \Exception
     */
    public function testIsNotEqual(){
        $int = mt_rand(1,10);
        $integer = mt_rand(21,30);
        $boolean = IntegerValidator::equal($int,$integer);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the integer is between these numbers
     *
     * @throws \Exception
     */
    public function testIsBetween(){
        $int = mt_rand(5,15);
        $boolean = IntegerValidator::between($int,1,20);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the integer isn't between these numbers
     *
     * @throws \Exception
     */
    public function testIsNotBetween(){
        $int = mt_rand(5,15);
        $boolean = IntegerValidator::between($int,16,20);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the integer is superior to the number
     *
     * @throws \Exception
     */
    public function testIsSuperior(){
        $int = mt_rand(5,10);
        $boolean = IntegerValidator::superior($int, 1);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the integer isn't superior to the number
     *
     * @throws \Exception
     */
    public function testIsNotSuperior(){
        $int = mt_rand(5,10);
        $boolean = IntegerValidator::superior($int, 11);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the integer is inferior to the number
     *
     * @throws \Exception
     */
    public function testIsInferior(){
        $int = mt_rand(5,10);
        $boolean = IntegerValidator::minus($int, 11);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the integer isn't inferior to the number
     *
     * @throws \Exception
     */
    public function testIsNotInferior(){
        $int = mt_rand(5,10);
        $boolean = IntegerValidator::minus($int, 1);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the integer is positive
     *
     * @throws \Exception
     */
    public function testIsPositive(){
        $int = mt_rand(5,10);
        $boolean = IntegerValidator::positive($int);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the integer isn't positive
     *
     * @throws \Exception
     */
    public function testIsNotPositive(){
        $int = mt_rand(-10,-5);
        $boolean = IntegerValidator::positive($int);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the integer is negative
     *
     * @throws \Exception
     */
    public function testIsNegative(){
        $int = mt_rand(-10,-5);
        $boolean = IntegerValidator::negative($int);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the integer isn't negative
     *
     * @throws \Exception
     */
    public function testIsNotNegative(){
        $int = mt_rand(5,10);
        $boolean = IntegerValidator::negative($int);
        $this->assertFalse($boolean);
    }
} 