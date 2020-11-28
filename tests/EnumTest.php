<?php

namespace SimpleEnum\Tests;

use Exception;
use PHPUnit_Framework_TestCase;
use SimpleEnum\Enum;
use SimpleEnum\Tests\TestEnums\BarEnum;
use SimpleEnum\Tests\TestEnums\FooEnum;
use stdClass;

class EnumTest extends PHPUnit_Framework_TestCase
{
    public function testCreateSimpleEnum()
    {
        $FooEnum = new FooEnum(FooEnum::foo);

        self::assertSame(FooEnum::foo, $FooEnum->value());
    }

    /**
     * @param $value
     *
     * @dataProvider validValues
     */
    public function testValidValues($value)
    {
        $FooEnum = new FooEnum($value);

        self::assertSame($value, $FooEnum->value());
    }

    /**
     * @dataProvider compareEqualValues
     *
     * @param Enum $a
     * @param Enum $b
     * @param bool $isEqual
     */
    public function testEqualEnums(Enum $a, Enum $b, $isEqual)
    {
        // workaround to get phpunit 4.0.0 to run on php >=7
        // comparing booleans in 'assertSame' causes fatal error
        self::assertTrue($a->equals($b) === $isEqual);
    }

    /**
     * @expectedException Exception
     *
     * @dataProvider invalidValues
     */
    public function testInvalidValue($value)
    {
        new FooEnum($value);
    }

    public function validValues()
    {
        return array(
            array(FooEnum::foo),
            array(1),
            array(FooEnum::bar),
            array(2),
            array(FooEnum::baz),
            array(3),
        );
    }

    public function invalidValues()
    {
        return array(
            array(4),
            array(3.2),
            array("1"),
            array(null),
            array(array(123)),
            array(array(1, 2, 3)),
            array(new stdClass()),
            array((string)FooEnum::foo),
        );
    }

    public function compareEqualValues()
    {
        return array(
            array(new FooEnum(FooEnum::foo), new FooEnum(FooEnum::foo), true),
            array(new FooEnum(FooEnum::foo), new FooEnum(FooEnum::bar), false),
            array(new FooEnum(FooEnum::foo), new BarEnum(BarEnum::a), false),
            array(new FooEnum(FooEnum::foo), new BarEnum(BarEnum::b), false),
        );
    }
}
