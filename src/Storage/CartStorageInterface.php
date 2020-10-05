<?php

declare(strict_types=1);

namespace App\Storage;

use App\Model\CartInterface;

interface CartStorageInterface
{
    public function setCart(CartInterface $cart): void;

    public function getCart(): CartInterface;

    public function isInitialized(): bool;
}