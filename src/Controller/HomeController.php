<?php

namespace App\Controller;

use PHPUnit\Util\Exception;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use App\Service\ProductService;

class HomeController
{
    /**
     * @var Environment
     */
    private $twig;

    /**
     * @var ProductService
     */
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
