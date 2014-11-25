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
    public function __construct() {
    }

    /**
     * @param bool $boolean
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isTrue($boolean) {
        if(false === is_bool($boolean))
            throw new \Exception('The parameter need to be a boolean');

        return $boolean;
    }

    /**
     * @param bool $boolean
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isFalse($boolean) {
        if(false === is_bool($boolean))
            throw new \Exception('The parameter need to be a boolean');

        return !$boolean;
    }

}
