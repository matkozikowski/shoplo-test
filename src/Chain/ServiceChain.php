<?php

declare(strict_types=1);

namespace App\Chain;

use App\Service\DocumentInterface;

class ServiceChain
{
    private $services;

    public function __construct()
    {
        $this->services = [];
    }

    public function addService(DocumentInterface $service, string $alias)
    {
        $this->services[$alias] = $service;
    }

    public function getService(string $alias)
    {
        if (array_key_exists($alias, $this->services)) {
            return $this->services[$alias];
        }
    }
}
