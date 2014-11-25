<?php
/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 23/11/2014
 * Time: 17:22
 */

namespace Tests\CHECK\CheckValidator;

use CHECK\CheckValidator\BooleanValidator;

/**
 * Class BooleanValidatorTests
 * @package Tests\CHECK\CheckValidator
 */
class BooleanValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if the boolean is true
     *
     * @throws \Exception
     */
    public function testIsTrue(){
        $boolean = BooleanValidator::isTrue(true);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the boolean isn't true
     *
     * @throws \Exception
     */
    public function testIsNotTrue(){
        $boolean = BooleanValidator::isTrue(false);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the boolean is false
     *
     * @throws \Exception
     */
    public function testIsFalse(){
        $boolean = BooleanValidator::isFalse(false);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the boolean isn't false
     *
     * @throws \Exception
     */
    public function testIsNotFalse(){
        $boolean = BooleanValidator::isFalse(true);
        $this->assertFalse($boolean);
    }

} 