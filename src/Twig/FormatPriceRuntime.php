<?php

declare(strict_types=1);

namespace App\Twig;

use Twig\Extension\RuntimeExtensionInterface;

class FormatPriceRuntime implements RuntimeExtensionInterface
{
    public function formatPrice(int $number)
    {
        return number_format($number, 2, ',', ',');
    }
}