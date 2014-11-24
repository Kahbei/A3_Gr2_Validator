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

class IntegerValidator {

    /**
     * @param int $integer
     * @param int $equal
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function equal($integer, $equal = 0){
        if(!is_int($integer) || !is_int($equal)){
            throw new \Exception('The paramaters need to be int');
        }
        if($integer == $equal){
            return false;
        }
        else{
            return true;
        }
    }

    /**
     * @param int $integer
     * @param int $minus
     * @param int $plus
     *
     * @throws \Exception
     *
     * @return bool
     */
    public static function between($integer, $minus = 0, $plus = 10){
        if(!is_int($integer) || !is_int($minus) || !is_int($plus)){
            throw new \Exception('The paramaters need to be int');
        }
        if($integer >= $minus && $integer <= $plus){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * @param int $integer
     * @param int $minus
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function superior($integer, $minus = 0){
        if(!is_int($integer) || !is_int($minus)){
            throw new \Exception('The paramaters need to be int');
        }
        if($integer >= $minus){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * @param int $integer
     * @param int $plus
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function minus($integer, $plus = 10){
        if(!is_int($integer) || !is_int($plus)){
            throw new \Exception('The paramaters need to be int');
        }
        if($integer <= $plus){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * @param $integer
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function positive($integer){
        if(!is_int($integer)){
            throw new \Exception('The paramaters need to be int');
        }
        if($integer >= 0){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * @param $integer
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function negative($integer){
        if(!is_int($integer)){
            throw new \Exception('The paramaters need to be int');
        }
        if($integer <= 0){
            return true;
        }
        else{
            return false;
        }
    }
} 