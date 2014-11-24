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
$min - Minimal length value.


* String length inferior to
```php
echo \CHECK\CheckValidator\StringValidator::lengthInferior($string, $max);
```
$string - Your string which you want to check.
$max - Maximal length value.


* String length between X and X
```php
echo \CHECK\CheckValidator\StringValidator::lengthBetween($string, $min, $max);
```
$string - Your string which you want to check.
$min - Minimal length value.
$max - Maximal length value.


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