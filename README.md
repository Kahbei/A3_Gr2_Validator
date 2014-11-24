# CheckValidator

This lib will check and validate some argument.


## Integer Validator

With Integer Validator, it's checking and return true if your number is :


* Equal to
```php
echo \CHECK\CheckValidator\IntegerValidator::equal($int,$equal);
```
$int - Number you want to check.

$equal - Number which serve to test (defacto 0).


* Between X and X
```php
echo \CHECK\CheckValidator\IntegerValidator::between($int,$min,$max);
```
$int - Number you want to check.

$min - Number minimum (defacto 0).

$max - Number maximum (defacto 10).


* Inferior to
```php
$inferior = \CHECK\CheckValidator\IntegerValidator::minus($int,$max);
```
$int - Number you want to check.

$max - Number maximum (defacto 10).


* Superior to
```php
echo \CHECK\CheckValidator\IntegerValidator::superior($int,$min);
```
$int - Number you want to check.

$min - Number minimum (defacto 0).


* Positive
```php
echo \CHECK\CheckValidator\IntegerValidator::positive($int);
```
$int - Number you want to check if it's positive.


* Negative
```php
echo \CHECK\CheckValidator\IntegerValidator::negative($int);
```
$int - Number you want to check if it's negative.


## String Validator

With String Validator, it's checking and return true if your string is :


* String length equal to
```php
echo \CHECK\CheckValidator\StringValidator::lengthEqual($string, $equal);
```
$string - Your string which you want to check.

$equal - Length value which it must be equal.


* String length superior to
```php
echo \CHECK\CheckValidator\StringValidator::lengthSuperior($string, $min);
```
$string - Your string which you want to check.

$min - Minimal length value (defacto 0).


* String length inferior to
```php
echo \CHECK\CheckValidator\StringValidator::lengthInferior($string, $max);
```
$string - Your string which you want to check.

$max - Maximal length value (defacto 100).


* String length between X and X
```php
echo \CHECK\CheckValidator\StringValidator::lengthBetween($string, $min, $max);
```
$string - Your string which you want to check.

$min - Minimal length value (defacto 0).

$max - Maximal length value (defacto 100).


* No white space at the beginning and at the end of the string
```php
echo \CHECK\CheckValidator\StringValidator::noWhiteSpaceBeginningEnd($string);
```
$string - Your string which you want to remove a begging and ending space.


* No white space in the string
```php
echo \CHECK\CheckValidator\StringValidator::noWhiteSpace($string);
```
$string - Your string which you want to remove white space.


## Boolean Validator

With Boolean Validator, it's checking and return true if your boolean is :


* True
```php
echo \CHECK\CheckValidator\BooleanValidator::isTrue($true);
```
$true - Your boolean which must be true.


* False
```php
echo \CHECK\CheckValidator\BooleanValidator::isFalse(false);
```
$false - Your boolean which must be false.

## Array Validator

With Array Validator, it's checking and return true if :

* Array is Empty
```php
echo \CHECK\CheckValidator\ArrayValidator::arrayEmpty($array);
```
$array - Your array which you want to check.


* Array length is equal to, inferior to, inferior or equal to, superior to, superior or equal to
```php
\CHECK\CheckValidator\ArrayValidator::arrayOperator($array, $operator, $int);
```
$array - Your array which you want to check.

$operator - Choose the operator wanted between 5 choice.

$int - Number which you used to check your array.


* Array length is between X and X
```php
echo \CHECK\CheckValidator\ArrayValidator::arrayBetween($array, $min, $max);
```
$array - Your array which you want to check.

$min - Number minimal.

$max - Number maximal.


* Array has this key
```php
echo \CHECK\CheckValidator\ArrayValidator::arrayKeyExist($array, $key);
```
$array - Your array which you want to check.

$key - Key which you want to check if it's exist.


* Array has this value
```php
echo \CHECK\CheckValidator\ArrayValidator::arrayValueExist($array, $value);
```
$array - Your array which you want to check.

$value - Value which you want to check if it's exist.


## DateTime Validator

With DateTime Validator, it's checking and return true if :

* Is Major
```php
echo \CHECK\CheckValidator\DateTimeValidator::isMajor($date);
```
$date - Your dateTime which you want to check.


* DateTime has same year
```php
\CHECK\CheckValidator\DateTimeValidator::dateYear($date, $year);
```
$date - Your dateTime which you want to check.

$year - Year used to check.


* DateTime has same month
```php
echo \CHECK\CheckValidator\DateTimeValidator::dateMonth($date, $month);
```
$date - Your dateTime which you want to check.

$month - Month used to check.


* DateTime has same day
```php
echo \CHECK\CheckValidator\DateTimeValidator::dateDay($date, $day);
```
$date - Your dateTime which you want to check.

$day - Day used to check.


* DateTime is passed
```php
echo \CHECK\CheckValidator\DateTimeValidator::datePassed($date);
```
$date - Your dateTime which you want to check.


* DateTime is coming
```php
echo \CHECK\CheckValidator\DateTimeValidator::dateComing($date);
```
$date - Your dateTime which you want to check.


* More than X day since
```php
echo \CHECK\CheckValidator\DateTimeValidator::dateMoreThan($date ,$dayPassed);
```
$date - Your dateTime which you want to check.

$dayPassed - Number of day passed.


* Less than X day since
```php
echo \CHECK\CheckValidator\DateTimeValidator::dateLessThan($date ,$dayPassed);
```
$date - Your dateTime which you want to check.

$dayPassed - Number of day passed.

* Same TimeZone
```php
echo \CHECK\CheckValidator\DateTimeValidator::TimeZone($date, $timeZone);
```
$date - Your dateTime which you want to check.

$timeZone - Timezone used to check.