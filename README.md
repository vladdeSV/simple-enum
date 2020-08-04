![SimpleEnum](header.svg)

![dead simple](https://img.shields.io/badge/dead-simple-111)
![minimum php version 7.2](https://img.shields.io/packagist/php-v/vladdesv/simple-enum?color=8892BF&logo=php)
![should run fine on php version 5.3](https://img.shields.io/badge/php-^5.3%20*-yellow?logo=php)

Dead simple PHP enum. This thing should run on PHP 5.3, heck maybe even as far as 5.1.2*, so just take the yoink the file if you need it for your Legacy project.

*= only tested on PHP 7.4, but PhpStorm tells me it should run fine.

## Why?
I come from C-like languages with proper enums. Why is there no such simple, built-in, proper, enum in PHP?

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

