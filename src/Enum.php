<?php

declare(strict_types=1);

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
    final function __construct($value)
    {
        $constants = (new ReflectionClass($this))->getConstants();

        if (!in_array($value, $constants)) {
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