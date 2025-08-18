<?php

namespace Ziyodulloxon\StringHelper\Core;

class Arr
{
    public function __construct(private array $array)
    {
    }

    public function count(): int
    {
        return count($this->array);
    }

    public function capitalizeAll(): static
    {
        foreach ($this->array as $key => $value) {
            $this->array[$key] = strtoupper($this->array[$key]);
        }
        return $this;
    }

    public function capitalizeFirst(): static
    {
        foreach ($this->array as $key => $value) {
            $this->array[$key] = ucfirst($this->array[$key]);
        }
        return $this;
    }

    public function capitalizeLast(): static
    {
        $this->array[array_key_last($this->array)] = ucfirst($this->array[array_key_last($this->array)]);
        return $this;
    }

    public function uncapitalizeAll(): static
    {
        foreach ($this->array as $key => $value) {
            $this->array[$key] = strtolower($this->array[$key]);
        }
        return $this;
    }

    public function join(string $glue = ' '): Str
    {
        return new Str(implode($glue, $this->array));
    }

    public function get(): array
    {
        return $this->array;
    }

    public function __toString(): string
    {
        ob_start();
        dump($this->array);
        return ob_get_clean();
    }
}