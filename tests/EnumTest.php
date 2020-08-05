<?php

namespace SimpleEnum\Tests;

use Exception;
use PHPUnit_Framework_TestCase;

class EnumTest extends PHPUnit_Framework_TestCase
{
    public function testCreateSimpleEnum()
    {
        $testEnum = new TestEnum(TestEnum::foo);

        self::assertSame(TestEnum::foo, $testEnum->value());
    }

    /**
     * @expectedException Exception
     */
    public function testFailOnInvalidValue()
    {
        new TestEnum(1337);
    }
}
