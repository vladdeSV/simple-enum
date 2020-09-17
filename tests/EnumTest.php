<?php

namespace SimpleEnum\Tests;

use Exception;
use PHPUnit_Framework_TestCase;
use stdClass;

class EnumTest extends PHPUnit_Framework_TestCase
{
    public function testCreateSimpleEnum()
    {
        $testEnum = new TestEnum(TestEnum::foo);

        self::assertSame(TestEnum::foo, $testEnum->value());
    }

    /**
     * @param $value
     *
     * @dataProvider validValues
     */
    public function testValidValues($value)
    {
        $testEnum = new TestEnum($value);

        self::assertSame($value, $testEnum->value());
    }

    /**
     * @expectedException Exception
     *
     * @dataProvider invalidValues
     */
    public function testInvalidValue($value)
    {
        new TestEnum($value);
    }

    public function validValues()
    {
        return array(
            array(TestEnum::foo),
            array(1),
            array(TestEnum::bar),
            array(2),
            array(TestEnum::baz),
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
            array(array(1,2,3)),
            array(new stdClass()),
            array((string)TestEnum::foo),
        );
    }
}
