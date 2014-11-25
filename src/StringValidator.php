<?php
/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 23/11/2014
 * Time: 17:27
 */

namespace CHECK\CheckValidator;

/**
 * Class StringValidator
 * @package CHECK\CheckValidator
 */
class StringValidator
{

    /**
     *Constructor
     */
    public function __construct() {
    }

    /**
     * @param string $string
     * @param int $length
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthEqual($string, $length) {
        if(is_string($string) === false || is_int($length) === false){
            throw new \Exception('Parameter must be in correct format');
        }
        return mb_strlen($string) === $length;
    }

    /**
     * @param string $string
     * @param int $lengthMin
     * @param int $lengthMax
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthBetween($string, $lengthMin = 0, $lengthMax = 100) {
        if(is_string($string) === false || is_int($lengthMin) === false || is_int($lengthMax) === false){
            throw new \Exception('Parameter must be in correct format');
        }
        return mb_strlen($string) >= $lengthMin && mb_strlen($string) <= $lengthMax;
    }

    /**
     * @param string $string
     * @param int $length
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthSuperior($string, $length) {
        if(is_string($string) === false || is_int($length) === false){
            throw new \Exception('Parameter must be in correct format');
        }
         return mb_strlen($string) >= $length;
    }

    /**
     * @param string $string
     * @param int $length
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthInferior($string, $length) {
        if(is_string($string) === false || is_int($length) === false){
            throw new \Exception('Parameter must be in correct format');
        }
        return mb_strlen($string) <= $length;
    }

    /**
     * @param string $string
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function noWhiteSpaceBeginningEnd($string) {
        if(is_string($string) === false){
            throw new \Exception('Parameter must be in correct format');
        }
        return preg_match("/^\s/", $string) === 0 && preg_match("/\s$/", $string) === 0;
    }

    /**
     * @param string $string
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function noWhiteSpace($string) {
        if(is_string($string) === false){
            throw new \Exception('Parameter must be in correct format');
        }
        return preg_match("/\s/", $string) === 0;
    }
}