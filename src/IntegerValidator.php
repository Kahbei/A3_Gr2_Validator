<?php
/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 23/11/2014
 * Time: 17:27
 */

namespace CHECK\CheckValidator;

/**
 * Class IntegerValidator
 * @package CHECK\CheckValidator
 */
class IntegerValidator
{

    /**
     *Constructor
     */
    public function __construct() {
    }

    /**
     * @param int $integer
     * @param int $equal
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function equal($integer, $equal = 0) {
        if(is_int($integer) === false || is_int($equal) === false){
            throw new \Exception('The paramaters need to be int');
        }
        return $integer === $equal;
    }

    /**
     * @param int $integer
     * @param int $min
     * @param int $max
     *
     * @throws \Exception
     *
     * @return bool
     */
    public static function between($integer, $min = 0, $max = 10) {
        if(is_int($integer) === false || is_int($min) === false || is_int($max) === false){
            throw new \Exception('The paramaters need to be int');
        }
        return $integer >= $min && $integer <= $max;
    }

    /**
     * @param int $integer
     * @param int $min
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function superior($integer, $min = 0) {
        if(is_int($integer) === false || is_int($min) === false){
            throw new \Exception('The paramaters need to be int');
        }
        return $integer >= $min;
    }

    /**
     * @param int $integer
     * @param int $max
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function minus($integer, $max = 10) {
        if(is_int($integer) === false || is_int($max) === false){
            throw new \Exception('The paramaters need to be int');
        }
        return $integer <= $max;
    }

    /**
     * @param $integer
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function positive($integer) {
        if(is_int($integer) === false){
            throw new \Exception('The paramaters need to be int');
        }
        return $integer >= 0;
    }

    /**
     * @param $integer
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function negative($integer) {
        if(is_int($integer) === false){
            throw new \Exception('The paramaters need to be int');
        }
        return $integer <= 0;
    }

} 