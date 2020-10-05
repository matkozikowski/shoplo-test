<?php

declare(strict_types=1);

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('price', [FormatPriceRuntime::class, 'formatPrice']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('render_image', [RenderImageRuntime::class, 'renderImage']),
        ];
    }
}