<?php

namespace App\Controller;

use App\Service\CartManager;
use App\Exception\InvalidRequestException;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\CartItemInterface;
use App\Service\ProductService;
use App\Event\CartEvent;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use App\Model\CartEvents;
use Symfony\Component\HttpFoundation\JsonResponse;

class CartController
{
    /**
     * @var Environment
     */
    private $twig;

    /**
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;

    /**
     * @var ProductService
     */
    private $productService;

    /**
     * @var CartManager
     */
    private $cartManager;

    public function __construct(Environment $twig, EventDispatcherInterface $eventDispatcher, ProductService $productService, CartManager $cartManager)
    {
        $this->twig = $twig;
        $this->eventDispatcher = $eventDispatcher;
        $this->productService = $productService;
        $this->cartManager = $cartManager;
    }

    public function list(): Response
    {
        return new Response(
            $this->twig->render('cart.html.twig', ['cart' => $this->cartManager->getCart()])
        );
    }

    public function addItem(Request $request): Response
    {
        if (false === $request->isMethod(Request::METHOD_POST)) {
            throw new InvalidRequestException('Request method is not allowed');
        }

        $parameters = json_decode($request->getContent(), true);

        if (false === array_key_exists('product_id', $parameters)) {
            throw new InvalidRequestException('Missing parameter in request');
        }

        $cart = $this->cartManager->getCart();
        $cart->setItem(
            $this->getProduct($parameters['product_id'])
        );

        $cartEvent = new CartEvent($cart);
        $this->eventDispatcher->dispatch($cartEvent, CartEvents::CART_ITEM_ADD);
        $this->eventDispatcher->dispatch($cartEvent, CartEvents::CART_SAVE);

        return new JsonResponse([
            'product' => $parameters['product_id'],
        ]);
    }

    private function getProduct(int $productId): CartItemInterface
    {
        return $this->productService->getProductById($productId);
    }
}
