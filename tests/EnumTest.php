<?php

declare(strict_types=1);

namespace SimpleEnum\Tests;

use Exception;
use PHPUnit\Framework\TestCase;

class EnumTest extends TestCase
{
    public function testCreateSimpleEnum()
    {
        $testEnum = new TestEnum(TestEnum::foo);

        self::assertSame(TestEnum::foo, $testEnum->value());
    }

    public function testFailOnInvalidValue()
    {
        self::expectException(Exception::class);

        new TestEnum(1337);
    }
}
