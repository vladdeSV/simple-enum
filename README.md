![SimpleEnum](header.svg)

# SimpleEnum
[![dead simple](https://img.shields.io/badge/dead-simple-gray?labelColor=111)](https://github.com/vladdeSV/simple-enum#example)
[![minimum php version](https://img.shields.io/packagist/php-v/vladdesv/simple-enum?color=8892BF&logo=php&labelColor=24292E)](https://github.com/vladdeSV/simple-enum/blob/master/composer.json#L25)
[![master](https://github.com/vladdeSV/simple-enum/workflows/master/badge.svg)](https://github.com/vladdeSV/simple-enum/actions?query=workflow%3Amaster)

Dead simple PHP enum. This thing runs on PHP 5.3, heck maybe even PHP 5.1.2*, so just yoink the files if you need it for your Legacy project.

<sub>&ast; This enum uses the Reflection class, which was introduced in PHP 5.1.2</sup>

## Why?
I come from C-like languages with proper enums. Why is there no such simple, built-in, proper, enum in PHP?

The [SplEnum](https://www.php.net/manual/en/class.splenum.php) looks promising, but has some oddities with its implementation. As an added bonus, it might not work for [your setup](https://stackoverflow.com/a/57885080).

Other third-party alternatives (see [this](https://github.com/spatie/enum), [this](https://github.com/myclabs/php-enum), [this](https://github.com/DASPRiD/Enum), and [this](https://github.com/marc-mabe/php-enum) for instance) are overly complicated for my needs. This should probably solve it for most of my use cases.

## Example

```php
<?php

use SimpleEnum\Enum;

class MyEnum extends Enum
{
    const foo = 1;
    const bar = 2;
    const baz = 3;
}

$myEnum = new MyEnum(MyEnum::foo);

assert($myEnum->value() === MyEnum::foo);
assert($myEnum->equals(new MyEnum(1)));

```

## Installation

```sh
composer require vladdesv/simple-enum
```

## License
MIT © [Vladimirs Nordholm](https://github.com/vladdeSV)
