<?php

namespace Ziyodulloxon\StringHelper\Facades;

use ReflectionException;

/**
 * @method length()
 * @method static \Ziyodulloxon\StringHelper\Core\Str capitalize(string $str)
 * */
class Str
{
    /**
     * @throws ReflectionException
     */
    public static function __callStatic(string $method, array $args)
    {
        $class = new \ReflectionClass(\Ziyodulloxon\StringHelper\Core\Str::class);
        if ($class->hasMethod($method)) {
            $object = $class->newInstance();
            return $object->$method(...$args);
        }
        throw new \BadMethodCallException("Method [$method] does not exist.");
    }
}