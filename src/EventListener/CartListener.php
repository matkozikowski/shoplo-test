<?php

declare(strict_types=1);

namespace App\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use App\Model\CartEvents;
use Symfony\Contracts\EventDispatcher\Event;
use App\Service\CartManager;
use App\Service\MailSenderService;
use App\Enum\MessageEnum;
use App\Service\LoggerService;

class CartListener implements EventSubscriberInterface
{
    /**
     * @var CartManager
     */
    private $cartManager;

    /**
     * @var LoggerService
     */
    private $loggerService;

    /**
     * @var MailSenderService
     */
    private $mailSenderService;

    public function __construct(CartManager $cartManager, LoggerService $loggerService, MailSenderService $mailSenderService)
    {
        $this->cartManager = $cartManager;
        $this->loggerService = $loggerService;
        $this->mailSenderService = $mailSenderService;
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
//        $this->mailSenderService->send(MessageEnum::NOTIFICATION_ADD_CART);
        $this->loggerService->log(MessageEnum::NOTIFICATION_ADD_CART);
    }

    public function saveCart(Event $event): void
    {
        $this->cartManager->setCart(
            $event->getCart()
        );
    }
}
