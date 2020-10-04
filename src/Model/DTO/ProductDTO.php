<?php

declare(strict_types=1);

namespace App\Model\DTO;

class ProductDTO
{
    private $name;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
