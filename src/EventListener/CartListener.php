<?php

declare(strict_types=1);

namespace App\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use App\Model\CartEvents;
use Symfony\Contracts\EventDispatcher\Event;
use App\Service\CartManager;

class CartListener implements EventSubscriberInterface
{
    private $cartManager;

    public function __construct(CartManager $cartManager)
    {
        $this->cartManager = $cartManager;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CartEvents::CART_ITEM_ADD => 'addItem',
            CartEvents::CART_SAVE => 'saveCart',
        ];
    }

    public function addItem(Event $event): void
    {
    }

    public function saveCart(Event $event): void
    {
        $this->cartManager->setCart(
            $event->getCart()
        );
    }
}
