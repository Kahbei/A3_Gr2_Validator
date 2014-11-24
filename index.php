<?php
/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 23/11/2014
 * Time: 18:17
 */

require __DIR__.'/vendor/autoload.php';

$string = "ether";
$stringBis = " Bonjour et bienvenue ";

$array = array('banane' => 'banana split', 'fraise' => 'charlotte au fraise', 'pomme' => 'tarte au pomme', 'kiwi' => 'fu kyu dodu');
$arrayBis = array();
$date = new DateTime('09/01/1995 00:00:00');

$equal = \CHECK\CheckValidator\IntegerValidator::equal(2,2);
$between = \CHECK\CheckValidator\IntegerValidator::between(5,2,6);
$superior = \CHECK\CheckValidator\IntegerValidator::superior(2,1);
$inferior = \CHECK\CheckValidator\IntegerValidator::minus(5,6);
$positive = \CHECK\CheckValidator\IntegerValidator::positive(1);
$negative = \CHECK\CheckValidator\IntegerValidator::negative(-1);

$isTrue = \CHECK\CheckValidator\BooleanValidator::isTrue(true);
$isFalse = \CHECK\CheckValidator\BooleanValidator::isFalse(false);

$lengthEqual = \CHECK\CheckValidator\StringValidator::lengthEqual($string, 5);
$lengthInferior = \CHECK\CheckValidator\StringValidator::lengthInferior($string, 6);
$lengthSuperior = \CHECK\CheckValidator\StringValidator::lengthSuperior($string, 4);
$lengthBetween = \CHECK\CheckValidator\StringValidator::lengthBetween($string, 4, 6);
$noWhiteSpaceBeginningEnd = \CHECK\CheckValidator\StringValidator::noWhiteSpaceBeginningEnd($stringBis);
$noWhiteSpace = \CHECK\CheckValidator\StringValidator::noWhiteSpace($stringBis);

$arrayEmpty = \CHECK\CheckValidator\ArrayValidator::arrayEmpty($arrayBis);
$arrayOperator = \CHECK\CheckValidator\ArrayValidator::arrayOperator($array, \CHECK\CheckValidator\ArrayValidator::OPERATOR_EQUAL, 4);
$arrayBetween = \CHECK\CheckValidator\ArrayValidator::arrayBetween($array, 5, 8);
$arrayKeyExist = \CHECK\CheckValidator\ArrayValidator::arrayKeyExist($array,'kiwi');
$arrayValueExist = \CHECK\CheckValidator\ArrayValidator::arrayValueExist($array,'banana split');

$dateIsMajor = \CHECK\CheckValidator\DateTimeValidator::isMajor($date);
$dateYear = \CHECK\CheckValidator\DateTimeValidator::dateYear($date, 95);
$dateMonth = \CHECK\CheckValidator\DateTimeValidator::dateMonth($date, 9);
$dateDay = \CHECK\CheckValidator\DateTimeValidator::dateDay($date, 1);
$datePassed = \CHECK\CheckValidator\DateTimeValidator::datePassed($date);
$dateComing = \CHECK\CheckValidator\DateTimeValidator::dateComing($date);
$dateMoreThan = \CHECK\CheckValidator\DateTimeValidator::dateMoreThan($date ,7000);
$dateLessThan = \CHECK\CheckValidator\DateTimeValidator::dateLessThan($date, 9000);
$dateTimeZone = \CHECK\CheckValidator\DateTimeValidator::TimeZone($date, 'UTC');

var_dump($arrayOperator);