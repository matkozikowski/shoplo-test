<?php

namespace App\Controller;

use PHPUnit\Util\Exception;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class HomeController
{
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function index(): Response
    {
        return new Response(
            $this->twig->render('index.html.twig')
        );
    }
}
