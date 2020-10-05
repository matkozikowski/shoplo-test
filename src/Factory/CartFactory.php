<?php

declare(strict_types=1);

namespace App\Factory;

use App\Model\Cart;

class CartFactory implements FactoryInterface
{
    public function create(): Cart
    {
        return new Cart();
    }
}