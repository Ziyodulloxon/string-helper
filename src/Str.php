<?php

namespace Ziyodulloxon\StringHelper;

class Str
{
    public function __construct(private string $string)
    {
    }

    public static function __callStatic(string $method, array $args)
    {
        $class = new \ReflectionClass(self::class);
        if ($class->hasMethod($method)) {
            return $class->$method(...$args);
        }
        throw new \BadMethodCallException("Method [$method] does not exist.");
    }

    public function capitalize(string $string): static
    {
        $this->string = mb_strtolower($string);
        return $this;
    }

    public function length(): int
    {
        return strlen($this->string);
    }

    public function splitToSentences(): Arr
    {
        return new Arr(explode(". ", $this->string));
    }

    public function splitToWords(): Arr
    {
        return new Arr(explode(" ", $this->string));
    }
}
