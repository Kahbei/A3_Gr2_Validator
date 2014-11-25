<?php
/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 23/11/2014
 * Time: 17:26
 */

namespace CHECK\CheckValidator;

/**
 * Class DateTimeValidator
 * @package CHECK\CheckValidator
 */
class DateTimeValidator
{

    /**
     *Constructor
     */
    public function __construct() {
    }

    /**
     * @param \DateTime $date
     *
     * @return bool
     */
    public static function isMajor(\DateTime $date) {
        $dateNow = new \DateTime();
        $minus   = $date->diff($dateNow);
        return $minus->y >= 18;
    }

    /**
     * @param \DateTime $date
     * @param int $year
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function dateYear(\DateTime $date, $year) {
        if(is_int($year) === false)
            throw new \Exception('This parameter must be int');

        return $date->format('Y') == $year;
    }

    /**
     * @param \DateTime $date
     * @param int $month
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function dateMonth(\DateTime $date, $month) {
        if(is_int($month) === false){
            throw new \Exception('This parameter must be int');
        }
        return $date->format('m') == $month;
    }

    /**
     * @param \DateTime $date
     * @param int $day
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function dateDay(\DateTime $date, $day) {
        if(is_int($day) === false)
            throw new \Exception('This parameter must be int');

        return $date->format('d') == $day;
    }

    /**
     * @param \DateTime $date
     *
     * @return bool
     */
    public  static function datePassed(\DateTime $date) {
        $dateNow = new \DateTime();
        return $date < $dateNow;
    }

    /**
     * @param \DateTime $date
     *
     * @return bool
     */
    public static function dateComing(\DateTime $date) {
        $dateNow = new \DateTime();
        return $date > $dateNow;
    }

    /**
     * @param \DateTime $date
     * @param int $dayPassed
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function dateMoreThan(\DateTime $date, $dayPassed) {
        if(is_int($dayPassed) === false)
            throw new \Exception('Parameter must be int');

        $dateNow = new \DateTime();
        $minus   = $date->diff($dateNow);
        return $minus->days > $dayPassed;
    }

    /**
     * @param \DateTime $date
     * @param int $dayPassed
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function dateLessThan(\DateTime $date, $dayPassed) {
        if(is_int($dayPassed) === false)
            throw new \Exception('Parameter must be int');

        $dateNow = new \DateTime();
        $minus   = $date->diff($dateNow);
        return $minus->days < $dayPassed;
    }

    /**
     * @param \DateTime $date
     * @param string $timeZone
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function timeZone(\DateTime $date, $timeZone) {
        if(is_string($timeZone) === false)
            throw new \Exception('Parameter must be string');

        $dateNow  = new \DateTime();
        $dateZone = $dateNow->setTimezone(new \DateTimeZone($timeZone));
        $date1    = $dateZone->getTimezone();
        $date2    = $date->getTimezone();
        return $date1->getName() === $date2->getName();
    }

}
