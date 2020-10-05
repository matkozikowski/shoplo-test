<?php

declare(strict_types=1);

namespace App\Twig;

use Twig\Extension\RuntimeExtensionInterface;

class RenderImageRuntime implements RuntimeExtensionInterface
{
    private const IMAGE_FOLDER = 'products';

    public function renderImage(string $imagePath, int $productId)
    {

        return \sprintf('%s/%s/%s', self::IMAGE_FOLDER, $productId, $imagePath);
    }
}