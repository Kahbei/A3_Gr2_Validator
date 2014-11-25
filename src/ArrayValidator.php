<?php
/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 23/11/2014
 * Time: 17:26
 */

namespace CHECK\CheckValidator;

/**
 * Class ArrayValidator
 * @package CHECK\CheckValidator
 */
class ArrayValidator
{

    /**
     *Constructor
     */
    public function __construct() {
    }

    const OPERATOR_EQUAL          = 1;
    const OPERATOR_INFERIOR       = 2;
    const OPERATOR_INFERIOR_EQUAL = 3;
    const OPERATOR_SUPERIOR       = 4;
    const OPERATOR_SUPERIOR_EQUAL = 5;

    /**
     * @param array $array
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function arrayEmpty($array) {
        if(is_array($array) === false){
            throw new \Exception('This parameter must be an array');
        }
        return count($array) === 0;
    }

    /**
     * @param array $array
     * @param $operator
     * @param int $int
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function arrayOperator($array, $operator, $int) {
        if(is_array($array) === false || is_int($int) === false){
            throw new \Exception('Parameter must be in the correct type');
        }
        if(in_array($operator, [
            self::OPERATOR_EQUAL,
            self::OPERATOR_INFERIOR,
            self::OPERATOR_INFERIOR_EQUAL,
            self::OPERATOR_SUPERIOR,
            self::OPERATOR_SUPERIOR_EQUAL,
        ]) === false){
            throw new \Exception('Parameter must be in the correct type');
        }
        $arrayOperator = 0;

        switch($operator){
            case self::OPERATOR_EQUAL:
                $arrayOperator = count($array) === $int;
                break;

            case self::OPERATOR_SUPERIOR_EQUAL:
                $arrayOperator = count($array) >= $int;
                break;

            case self::OPERATOR_SUPERIOR:
                $arrayOperator = count($array) > $int;
                break;

            case self::OPERATOR_INFERIOR:
                $arrayOperator = count($array) < $int;
                break;

            case self::OPERATOR_INFERIOR_EQUAL:
                $arrayOperator = count($array) <= $int;
                break;
        }
        return $arrayOperator;
    }

    /**
     * @param array $array
     * @param int $min
     * @param int $max
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function arrayBetween($array, $min = 0, $max = 100) {
        if(is_array($array) === false || is_int($min) === false || is_int($max) === false){
            throw new \Exception('Parameter must be in the correct type');
        }
        return count($array) >= $min && count($array) <= $max;
    }

    /**
     * @param array $array
     * @param string $key
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function arrayKeyExist($array, $key) {
        if(is_array($array) === false || is_string($key) === false){
            throw new \Exception('Parameter must be in the correct type');
        }
        $arrayKey = array_key_exists($key, $array);
        return $arrayKey;
    }

    /**
     * @param array $array
     * @param string $value
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function arrayValueExist($array, $value) {
        if(is_array($array) === false || is_string($value) === false){
            throw new \Exception('Parameter must be in the correct type');
        }
        $arrayValue = in_array($value, $array);
        return $arrayValue;
    }

} 