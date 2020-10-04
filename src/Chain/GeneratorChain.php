<?php

declare(strict_types=1);

namespace App\Chain;

use App\Generator\GeneratorInterface;

class GeneratorChain
{
    private $services;

    public function __construct()
    {
        $this->services = [];
    }

    public function addService(GeneratorInterface $service, string $serviceKey, string $languageCode): void
    {
        $service->setProduct($serviceKey);
        $service->setLanguage($languageCode);

        $this->services[$serviceKey][] = $service;
    }

    public function getServices(string $alias)
    {
        if (array_key_exists($alias, $this->services)) {
            return $this->services[$alias];
        }
    }
}
