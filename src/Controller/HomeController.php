<?php

namespace App\Controller;

use PHPUnit\Util\Exception;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Service\ProductService;

class HomeController
{
    private $twig;

    private $productService;

    public function __construct(Environment $twig, ProductService $productService)
    {
        $this->twig = $twig;
        $this->productService = $productService;
    }

    public function index(): Response
    {
        $list = $this->productService->getList();

        return new Response(
            $this->twig->render('index.html.twig', ['items' => $list->getCollection(), 'pagination' => $list->getPagination()])
        );
    }
}
