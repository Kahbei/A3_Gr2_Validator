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

var_dump($noWhiteSpace);