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
    public function __construct(){
    }

    /**
     * @param string $string
     * @param int $length
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthEqual($string, $length){
        if(!is_string($string) || !is_int($length)){
            throw new \Exception('Parameter must be in correct format');
        }
        if(mb_strlen($string) == $length){
            return true;
        }
        else{
            return false;
        }
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
    public static function lengthBetween($string, $lengthMin = 0, $lengthMax = 100){
        if(!is_string($string) || !is_int($lengthMin) || !is_int($lengthMax)){
            throw new \Exception('Parameter must be in correct format');
        }
        if(mb_strlen($string) >= $lengthMin && mb_strlen($string) <= $lengthMax){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * @param string $string
     * @param int $length
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthSuperior($string, $length){
        if(!is_string($string) || !is_int($length)){
            throw new \Exception('Parameter must be in correct format');
        }
        if(mb_strlen($string) >= $length){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * @param string $string
     * @param int $length
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthInferior($string, $length){
        if(!is_string($string) || !is_int($length)){
            throw new \Exception('Parameter must be in correct format');
        }
        if(mb_strlen($string) <= $length){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * @param string $string
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function noWhiteSpaceBeginningEnd($string){
        if(!is_string($string)){
            throw new \Exception('Parameter must be in correct format');
        }
        $noWhiteSpace = trim($string);
        if(preg_match("/^\s/",$noWhiteSpace) == 0 && preg_match("/\s$/",$noWhiteSpace) == 0){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * @param string $string
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function noWhiteSpace($string){
        if(!is_string($string)){
            throw new \Exception('Parameter must be in correct format');
        }
        $noWhiteSpace = explode(" ",$string);
        if(preg_match("/\s/",implode($noWhiteSpace)) == 0){
            return true;
        }
        else{
            return false;
        }
    }
}