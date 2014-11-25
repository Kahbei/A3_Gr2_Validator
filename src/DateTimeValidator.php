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
     * @param \DateTime $date
     *
     * @return bool
     */
    public static function isMajor(\DateTime $date) {
        $dateNow = new \DateTime();
        $minus   = $date->diff($dateNow)->y;
        $isMajor = $minus >= 18;
        return $isMajor;
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

        $dateYear = $date->format('Y') == $year;
        return $dateYear;
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
        if(is_int($month) === false)
            throw new \Exception('This parameter must be int');

        $dateMonth = $date->format('m') == $month;
        return $dateMonth;
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

        $dateDay = $date->format('d') == $day;
        return $dateDay;
    }

    /**
     * @param \DateTime $date
     *
     * @return bool
     */
    public  static function datePassed(\DateTime $date) {
        $dateNow    = new \DateTime();
        $datePassed = $date < $dateNow;
        return $datePassed;
    }

    /**
     * @param \DateTime $date
     *
     * @return bool
     */
    public static function dateComing(\DateTime $date) {
        $dateNow    = new \DateTime();
        $dateComing = $date > $dateNow;
        return $dateComing;
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

        $dateNow      = new \DateTime();
        $minus        = $date->diff($dateNow)->days;
        $dateMoreThan = $minus > $dayPassed;
        return $dateMoreThan;
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

        $dateNow      = new \DateTime();
        $minus        = $date->diff($dateNow)->days;
        $dateLessThan = $minus < $dayPassed;
        return $dateLessThan;
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

        $dateNow      = new \DateTime();
        $dateZone     = $dateNow->setTimezone(new \DateTimeZone($timeZone));
        $date1        = $dateZone->getTimezone()->getName();
        $date2        = $date->getTimezone()->getName();
        $dateTimeZone = $date1 === $date2;
        return $dateTimeZone;
    }

}
