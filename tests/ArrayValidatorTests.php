<?php
/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 23/11/2014
 * Time: 17:23
 */

namespace Tests\CHECK\CheckValidator;

use CHECK\CheckValidator\ArrayValidator;

/**
 * Class ArrayValidatorTests
 * @package Tests\CHECK\CheckValidator
 */
class ArrayValidatorTests extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if the array is empty
     *
     * @throws \Exception
     */
    public function testArrayIsEmpty(){
        $array = array();
        $boolean = ArrayValidator::arrayEmpty($array);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the array isn't empty
     *
     * @throws \Exception
     */
    public function testArrayIsNotEmpty(){
        $array = array('Banane' => 'Banana Split');
        $boolean = ArrayValidator::arrayEmpty($array);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the array is equal to the number
     *
     * @throws \Exception
     */
    public function testArrayIsEqualTo(){
        $array = array('Opening' => 'Meaning of the Truth' ,'Ending' => 'Roundabout');
        $boolean = ArrayValidator::arrayOperator($array, ArrayValidator::OPERATOR_EQUAL, 2);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the array isn't equal to the number
     *
     * @throws \Exception
     */
    public function testArrayIsEqualNotTo(){
        $array = array('Opening' => 'Meaning of the Truth' ,'Ending' => 'Roundabout');
        $boolean = ArrayValidator::arrayOperator($array, ArrayValidator::OPERATOR_EQUAL, 1);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the array is inferior or equal to the number
     *
     * @throws \Exception
     */
    public function testArrayIsInferiorEqualTo(){
        $array = array('Opening' => 'Meaning of the Truth' ,'Ending' => 'Roundabout');
        $boolean = ArrayValidator::arrayOperator($array, ArrayValidator::OPERATOR_INFERIOR_EQUAL,2);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the array isn't inferior or equal to the number
     *
     * @throws \Exception
     */
    public function testArrayIsNotInferiorEqualTo(){
        $array = array('Opening' => 'Meaning of the Truth' ,'Ending' => 'Roundabout');
        $boolean = ArrayValidator::arrayOperator($array, ArrayValidator::OPERATOR_INFERIOR_EQUAL,1);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the array is inferior to the number
     *
     * @throws \Exception
     */
    public function testArrayIsInferiorTo(){
        $array = array('Opening' => 'Meaning of the Truth' ,'Ending' => 'Roundabout');
        $boolean = ArrayValidator::arrayOperator($array, ArrayValidator::OPERATOR_INFERIOR,3);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the array isn't inferior to the number
     *
     * @throws \Exception
     */
    public function testArrayIsNotInferiorTo(){
        $array = array('Opening' => 'Meaning of the Truth' ,'Ending' => 'Roundabout');
        $boolean = ArrayValidator::arrayOperator($array, ArrayValidator::OPERATOR_INFERIOR,1);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the array is superior or equal to the number
     *
     * @throws \Exception
     */
    public function testArrayIsSuperiorEqualTo(){
        $array = array('Opening' => 'Meaning of the Truth' ,'Ending' => 'Roundabout');
        $boolean = ArrayValidator::arrayOperator($array, ArrayValidator::OPERATOR_SUPERIOR_EQUAL,2);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the array isn't superior or equal to the number
     *
     * @throws \Exception
     */
    public function testArrayIsNotSuperiorEqualTo(){
        $array = array('Opening' => 'Meaning of the Truth' ,'Ending' => 'Roundabout');
        $boolean = ArrayValidator::arrayOperator($array, ArrayValidator::OPERATOR_SUPERIOR_EQUAL,3);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the array is superior to the number
     *
     * @throws \Exception
     */
    public function testArrayIsSuperiorTo(){
        $array = array('Opening' => 'Meaning of the Truth' ,'Ending' => 'Roundabout');
        $boolean = ArrayValidator::arrayOperator($array, ArrayValidator::OPERATOR_SUPERIOR,1);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the array isn't superior to the number
     *
     * @throws \Exception
     */
    public function testArrayIsNotSuperiorTo(){
        $array = array('Opening' => 'Meaning of the Truth' ,'Ending' => 'Roundabout');
        $boolean = ArrayValidator::arrayOperator($array, ArrayValidator::OPERATOR_SUPERIOR,3);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the array is between these numbers
     *
     * @throws \Exception
     */
    public function testArrayIsBetween(){
        $array = array('Opening' => 'Meaning of the Truth' ,'Ending' => 'Roundabout');
        $boolean = ArrayValidator::arrayBetween($array,1,3);
        $this->assertTrue($boolean);
    }

    /**
     * Test if the array isn't between these numbers
     *
     * @throws \Exception
     */
    public function testArrayIsNotBetween(){
        $array = array('Opening' => 'Meaning of the Truth' ,'Ending' => 'Roundabout');
        $boolean = ArrayValidator::arrayBetween($array,4,8);
        $this->assertFalse($boolean);
    }

    /**
     * Test if the array has this key
     *
     * @throws \Exception
     */
    public function testArrayKeyExist(){
        $array = array('PI' => '3.14', 'ln(e)' => '1');
        $boolean = ArrayValidator::arrayKeyExist($array,'PI');
        $this->assertTrue($boolean);
    }

    /**
     * Test if the array hasn't this key
     *
     * @throws \Exception
     */
    public function testArrayKeyDoNotExist(){
        $array = array('PI' => '3.14', 'ln(e)' => '1');
        $boolean = ArrayValidator::arrayKeyExist($array,'log');
        $this->assertFalse($boolean);
    }

    /**
     * Test if the array has this value
     *
     * @throws \Exception
     */
    public function testArrayValueExist(){
        $array = array('PI' => '3.14', 'ln(e)' => '1');
        $boolean = ArrayValidator::arrayValueExist($array,'1');
        $this->assertTrue($boolean);
    }

    /**
     * Test if the array hasn't this value
     *
     * @throws \Exception
     */
    public function testArrayValueDoNotExist(){
        $array = array('PI' => '3.14', 'ln(e)' => '1');
        $boolean = ArrayValidator::arrayValueExist($array,'42');
        $this->assertTrue($boolean);
    }
} 