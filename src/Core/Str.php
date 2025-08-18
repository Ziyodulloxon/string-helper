<?php

namespace Ziyodulloxon\StringHelper\Core;

class Str
{
    public function __construct(private string $string = "")
    {
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

    public function get(): string
    {
        return $this->string;
    }
}
