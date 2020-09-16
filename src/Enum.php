<?php

namespace SimpleEnum;

use Exception;
use ReflectionClass;

/**
 * Simple enum class.
 */
abstract class Enum
{
    /**
     * @param mixed $value Value of the enum
     */
    final public function __construct($value)
    {
        $reflectionClass = new ReflectionClass($this);
        $constants = $reflectionClass->getConstants();

        if (!in_array($value, $constants, true)) {
            throw new Exception("'$value' is not valid value.");
        }

        $this->value = $value;
    }

    /**
     * Get comparable value
     *
     * @return mixed
     */
    public function value()
    {
        return $this->value;
    }

    /**
     * @var mixed
     */
    private $value;
}