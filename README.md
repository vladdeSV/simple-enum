![SimpleEnum](header.svg)

![dead simple](https://img.shields.io/badge/dead-simple-111)
![minimum php version](https://img.shields.io/packagist/php-v/vladdesv/simple-enum?color=8892BF&logo=php)
![master](https://github.com/vladdeSV/simple-enum/workflows/master/badge.svg)

Dead simple PHP enum. This thing runs on PHP 5.3, heck maybe even PHP 5.1.2*, so just yoink the file if you need it for your Legacy project.

*=this enum uses the Reflection class, which was introduced in PHP 5.1.2

## Why?
I come from C-like languages with proper enums. Why is there no such simple, built-in, proper, enum in PHP?

The [SplEnum](https://www.php.net/manual/en/class.splenum.php) looks promising, but has some oddities with its implementation. As an added bonus, it might not work for [your setup](https://stackoverflow.com/a/57885080).

Other third party alternatives (see [this](https://github.com/spatie/enum), [this](https://github.com/myclabs/php-enum), and [this](https://github.com/marc-mabe/php-enum) for instance) are overly complicated for my needs. This should probably solve it for most of my use cases.

## Example

```php
<?php

use SimpleEnum\Enum;

class MyEnum extends Enum
{
    public const foo = 1;
    public const bar = 2;
    public const baz = 3;
}


$value = new MyEnum(MyEnum::foo);

assert($value->value() === MyEnum::foo); // true

```

## Installation

```sh
composer require vladdesv/simple-enum
```

## License
MIT © [Vladimirs Nordholm](https://github.com/vladdeSV)

