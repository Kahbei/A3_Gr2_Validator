<?php
/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 23/11/2014
 * Time: 17:26
 */

namespace CHECK\CheckValidator;

/**
 * Class BooleanValidator
 * @package CHECK\CheckValidator
 */
class BooleanValidator
{

    /**
     *Constructor
     */
    public function __construct(){
    }

    /**
     * @param bool $boolean
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isTrue($boolean)
    {
        if(!is_bool($boolean)){
            throw new \Exception('The parameter need to be a boolean');
        }
        if(!$boolean){
            return false;
        }
        else{
            return true;
        }
    }

    /**
     * @param bool $boolean
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isFalse($boolean)
    {
        if(!is_bool($boolean)){
            throw new \Exception('The parameter need to be a boolean');
        }
        if(!$boolean){
            return true;
        }
        else{
            return false;
        }
    }
} 