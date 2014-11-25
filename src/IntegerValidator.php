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
     * @param int $integer
     * @param int $equal
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function equal($integer, $equal = 0) {
        if (is_int($integer) === false || is_int($equal) === false)
            throw new \Exception('The paramaters need to be int');

        $equality = $integer === $equal;
        return $equality;
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
        if (is_int($integer) === false || is_int($min) === false || is_int($max) === false)
            throw new \Exception('The paramaters need to be int');

        $between = $integer >= $min && $integer <= $max;
        return $between;
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
        if (is_int($integer) === false || is_int($min) === false)
            throw new \Exception('The paramaters need to be int');

        $superior = $integer >= $min;
        return $superior;
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
        if (is_int($integer) === false || is_int($max) === false)
            throw new \Exception('The paramaters need to be int');

        $inferior = $integer <= $max;
        return $inferior;
    }

    /**
     * @param $integer
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function positive($integer) {
        if (is_int($integer) === false)
            throw new \Exception('The paramaters need to be int');

        $positive = $integer >= 0;
        return $positive;
    }

    /**
     * @param $integer
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function negative($integer) {
        if (is_int($integer) === false)
            throw new \Exception('The paramaters need to be int');

        $negative = $integer <= 0;
        return $negative;
    }

}
