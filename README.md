# CheckValidator

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Kahbei/A3_Gr2_Validator/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Kahbei/A3_Gr2_Validator/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/Kahbei/A3_Gr2_Validator/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Kahbei/A3_Gr2_Validator/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/Kahbei/A3_Gr2_Validator/badges/build.png?b=master)](https://scrutinizer-ci.com/g/Kahbei/A3_Gr2_Validator/build-status/master)[![Build Status](https://scrutinizer-ci.com/g/Kahbei/A3_Gr2_Validator/badges/build.png?b=master)](https://scrutinizer-ci.com/g/Kahbei/A3_Gr2_Validator/build-status/master)

This lib will check and validate some int, string, array, boolean, DateTime.

## Documentation

Firstly, you'll need to put this line :
```php
require __DIR__.'/vendor/autoload.php';
```

### IntegerValidator

IntegerValidator will check the integer you're chosen following these cases.


* equal - Check if $int is equal to $equal
```php
echo \CHECK\CheckValidator\IntegerValidator::equal($int,$equal);
```

* between - Check if $int is between $min and $max
```php
echo \CHECK\CheckValidator\IntegerValidator::between($int,$min,$max);
```

* minus - Check if $int is inferior to $max
```php
echo \CHECK\CheckValidator\IntegerValidator::minus($int,$max);
```

* superior - Check if $int îs superior to $min
```php
echo \CHECK\CheckValidator\IntegerValidator::superior($int,$min);
```

* positive - Check if $int is positive
```php
echo \CHECK\CheckValidator\IntegerValidator::positive($int);
```

* negative - Check if $int is negative
```php
echo \CHECK\CheckValidator\IntegerValidator::negative($int);
```


### StringValidator

StringValidator will check the string you're created following these cases.


* lengthEqual - Check if $string length is equal to $equal
```php
echo \CHECK\CheckValidator\StringValidator::lengthEqual($string, $equal);
```

* lengthSuperior - Check if $string length is superior to $min
```php
echo \CHECK\CheckValidator\StringValidator::lengthSuperior($string, $min);
```

* lengthInferior - Check if $string length is inferior to $max
```php
echo \CHECK\CheckValidator\StringValidator::lengthInferior($string, $max);
```

* lengthBetween - Check if $string length between $min and $max
```php
echo \CHECK\CheckValidator\StringValidator::lengthBetween($string, $min, $max);
```

* noWhiteSpaceBeginningEnd - Check if $string has whitespace at the beginning or/and at the end
```php
echo \CHECK\CheckValidator\StringValidator::noWhiteSpaceBeginningEnd($string);
```

* noWhiteSpace - Check if $string has any whitespace
```php
echo \CHECK\CheckValidator\StringValidator::noWhiteSpace($string);
```


### BooleanValidator

BooleanValidator will check the boolean you're chosen following these cases.


* isTrue - Check if $true is true
```php
echo \CHECK\CheckValidator\BooleanValidator::isTrue($true);
```

* isFalse - Check if $false is false
```php
echo \CHECK\CheckValidator\BooleanValidator::isFalse(false);
```


### ArrayValidator

ArrayValidator will check the array you're created following these cases.

* arrayEmpty - Check if $array is empty
```php
echo \CHECK\CheckValidator\ArrayValidator::arrayEmpty($array);
```

* arrayOperator - Check $array following the case you've chosen with $operator ( = , < , > , ≤ , ≥ ) 
```php
\CHECK\CheckValidator\ArrayValidator::arrayOperator($array, $operator, $int);
```

* arrayBetween - Check if $array length is between $min and $max
```php
echo \CHECK\CheckValidator\ArrayValidator::arrayBetween($array, $min, $max);
```

* arrayKeyExist - Check if $array has $key
```php
echo \CHECK\CheckValidator\ArrayValidator::arrayKeyExist($array, $key);
```

* arrayValueExist - Check if $array has $value
```php
echo \CHECK\CheckValidator\ArrayValidator::arrayValueExist($array, $value);
```


### DateTimeValidator

DateTimeValidator will check the DateTime you're created following these cases.

* isMajor - Check if $date has 18 years gap with the current time
```php
echo \CHECK\CheckValidator\DateTimeValidator::isMajor($date);
```

* dateYear - Check if $date has the same year with $year
```php
\CHECK\CheckValidator\DateTimeValidator::dateYear($date, $year);
```

* dateMonth - Check if $date has the same month with $month
```php
echo \CHECK\CheckValidator\DateTimeValidator::dateMonth($date, $month);
```

* dateDay - Check if $date has the same day with $day
```php
echo \CHECK\CheckValidator\DateTimeValidator::dateDay($date, $day);
```

* datePassed - Check if $date is passed
```php
echo \CHECK\CheckValidator\DateTimeValidator::datePassed($date);
```

* dateComing - Check if $date is coming
```php
echo \CHECK\CheckValidator\DateTimeValidator::dateComing($date);
```

* dateMoreThan - Check if more than $dayPassed day has passed between $date and the current time
```php
echo \CHECK\CheckValidator\DateTimeValidator::dateMoreThan($date ,$dayPassed);
```

* dateLessThan - Check if less than $dayPassed day has passed between $date and the current time
```php
echo \CHECK\CheckValidator\DateTimeValidator::dateLessThan($date ,$dayPassed);
```

* timeZone - Check if $date has the same TimeZone with $timeZone
```php
echo \CHECK\CheckValidator\DateTimeValidator::timeZone($date, $timeZone);
```