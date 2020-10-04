<?php

declare(strict_types=1);

namespace App\Provider;

use App\Lib\PdfInterface;
use App\Lib\Pdf;

class PdfProvider
{
    private $pageOrientation = 'L';

    public function getInstance(string $pdf = Pdf::class): Pdf
    {
        return new $pdf(
            $this->pageOrientation,
            PDF_UNIT,
            PDF_PAGE_FORMAT,
            true,
            'UTF-8',
            false
        );
    }

    public function setPageOrientation(string $pageOrientation): void
    {
        $this->pageOrientation = $pageOrientation;
    }
}
