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

            // if not convertible
            if (!is_scalar($value)) {
                $value = gettype($value);
            }

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
     * Compare if two enums are same class and have equal value
     *
     * @param Enum $other
     * @return bool
     */
    public function equals(self $other)
    {
        if (get_class($this) !== get_class($other)) {
            return false;
        }

        return $this->value === $other->value;
    }

    /**
     * @var mixed
     */
    private $value;
}