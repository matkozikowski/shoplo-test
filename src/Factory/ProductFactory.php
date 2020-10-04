<?php

namespace App\Factory;

use App\Model\DTO\ProductDTO;

class ProductFactory implements FactoryInterface
{
    public function create($productName = null)
    {
        $productDTO = new ProductDTO();
        $productDTO->setName($productName);

        return $productDTO;
    }
}
