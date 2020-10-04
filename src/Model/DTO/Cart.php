<?php

declare(strict_types=1);

namespace App\Model\DTO;

class SettingDTO
{
    protected $collection = [];

    public function setKey(string $index): void
    {
        $this->collection[$index] = [];
    }

    public function set(string $index, ?string $value): void
    {
        if (false === empty($value)) {
            $this->collection[$index] = $value;
        }
    }

    public function get(string $index): ?string
    {
        return $this->collection[$index] ?? null;
    }

    public function getKeys(): array
    {
        return array_keys($this->collection);
    }

    public function exists(string $index): bool
    {
        return array_key_exists($index, $this->collection);
    }
}
