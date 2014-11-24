<?php
/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 23/11/2014
 * Time: 17:20
 */

namespace Tests\CHECK\CheckValidator;

use CHECK\CheckValidator\StringValidator;

/**
 * Class StringValidatorTests
 * @package Tests\CHECK\CheckValidator
 */
class StringValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if the string is equal to a specific length
     *
     * @throws \Exception
     */
    public function testStringIsEqual(){
        $string = "bellum bellum";
        $length = mb_strlen($string);
        $boolean = StringValidator::lengthEqual($string,$length);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the string is not equal to a specific length
     *
     * @throws \Exception
     */
    public function testStringIsNotEqual(){
        $string = "bellum bellum";
        $length = mb_strlen($string);
        $boolean = StringValidator::lengthEqual($string, $length - 5);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the string is superior to a number
     *
     * @throws \Exception
     */
    public function testStringIsSuperior(){
        $string = "bellum bellum";
        $length = mb_strlen($string);
        $boolean = StringValidator::lengthSuperior($string , $length - 10);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the string is not superior to a number
     *
     * @throws \Exception
     */
    public function testStringIsNotSuperior(){
        $string = "bellum bellum";
        $length = mb_strlen($string);
        $boolean = StringValidator::lengthSuperior($string , $length + 10);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the string is inferior to a number
     *
     * @throws \Exception
     */
    public function testStringIsInferior(){
        $string = "bellum bellum";
        $length = mb_strlen($string);
        $boolean = StringValidator::lengthInferior($string , $length + 10);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the string is not inferior to a number
     *
     * @throws \Exception
     */
    public function testStringIsNotInferior(){
        $string = "bellum bellum";
        $length = mb_strlen($string);
        $boolean = StringValidator::lengthInferior($string , $length - 10);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the string is between two number
     *
     * @throws \Exception
     */
    public function testStringIsBetween(){
        $string = "bellum bellum";
        $length = mb_strlen($string);
        $boolean = StringValidator::lengthBetween($string , $length - 10, $length + 10);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the string is not between two number
     *
     * @throws \Exception
     */
    public function testStringIsNotBetween(){
        $string = "bellum bellum";
        $length = mb_strlen($string);
        $boolean = StringValidator::lengthBetween($string , $length + 10, $length - 10);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the string has no whitespace at the start or the end
     *
     * @throws \Exception
     */
    public function testNoWhiteSpaceBeginningEnd(){
        $string = "bellum bellum";
        $boolean = StringValidator::noWhiteSpaceBeginningEnd($string);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the string has no whitespace at the start or the end
     *
     * @throws \Exception
     */
    public function testHasWhiteSpaceBeginningEnd(){
        $string = " bellum bellum ";
        $boolean = StringValidator::noWhiteSpaceBeginningEnd($string);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the string has no whitespace
     *
     * @throws \Exception
     */
    public function testNoWhiteSpace(){
        $string = "bellumbellum";
        $boolean = StringValidator::noWhiteSpace($string);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the string has whitespace
     *
     * @throws \Exception
     */
    public function testHasWhiteSpace(){
        $string = "bellum bellum";
        $boolean = StringValidator::noWhiteSpace($string);
        $this->assertFalse($boolean);
    }
} 