<?php

declare(strict_types=1);

namespace App\Service;

use App\Storage\CartStorageInterface;
use App\Factory\CartFactory;
use App\Model\CartInterface;
use App\Entity\Product;

class CartManager
{
    /**
     * @var CartStorageInterface
     */
    protected $cartStorage;

    /**
     * @var CartFactory
     */
    private $cartFactory;

    public function __construct(CartStorageInterface $cartStorage, CartFactory $cartFactory)
    {
        $this->cartStorage = $cartStorage;
        $this->cartFactory = $cartFactory;
    }

    public function setCart(CartInterface $cart): void
    {
        $this->cartStorage->setCart($cart);
    }

    public function getCart()
    {
        if (false === $this->cartStorage->isInitialized()) {
            $this->cartStorage->setCart(
                $this->cartFactory->create()
            );
        }

        return $this->cartStorage->getCart();
    }

    /**
     * TODO: Add into Event call to save cart
     */
    public function saveCart(Product $product): void
    {

    }
}
