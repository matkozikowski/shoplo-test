<?php

declare(strict_types=1);

namespace App\Event;

use App\Model\CartInterface;
use Symfony\Contracts\EventDispatcher\Event;

class CartEvent extends Event
{
    /**
     * @var CartInterface
     */
    protected $cart;

    public function __construct(CartInterface $cart)
    {
        $this->cart = $cart;
    }

    public function getCart(): CartInterface
    {
        return $this->cart;
    }
}
