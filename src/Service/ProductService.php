<?php

declare(strict_types=1);

namespace App\Service;

use App\Repository\ProductRepository;
use App\Service\PaginationService;
use App\Model\DTO\Result;

class ProductService
{
    /**
     * @var ProductRepository
     */
    private $productRepository;

    /**
     * @var PaginationService
     */
    private  $paginationService;

    public function __construct(ProductRepository $productRepository, PaginationService $paginationService)
    {
        $this->productRepository = $productRepository;
        $this->paginationService = $paginationService;
    }

    public function getList(): Result
    {
        return $this->paginationService->getResult(
            $this->productRepository->findProducts()
        );
    }
}