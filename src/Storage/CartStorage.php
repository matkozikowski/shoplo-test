<?php

declare(strict_types=1);

namespace App\Storage;

use Symfony\Component\HttpFoundation\Session\Session;
use App\Model\CartInterface;

class CartStorage implements CartStorageInterface
{
    /**
     * @var Session
     */
    private $session;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    public function setCart(CartInterface $cart): void
    {
        $this->session->set('cart', $cart);
    }

    public function getCart(): CartInterface
    {
        return $this->session->get('cart');
    }

    public function isInitialized(): bool
    {
        return $this->session->has('cart');
    }
}
