<?php

declare(strict_types=1);

namespace App\Service;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Enum\PaginationEnum;
use Symfony\Component\HttpFoundation\Request;
use App\Factory\FactoryInterface;
use App\Model\DTO\Result;

class PaginationService
{
    /**
     * @var Request
     */
    protected $request;

    /**
     * @var int
     */
    protected $limit;

    /**
     * @var int
     */
    protected $page;

    /**
     * @var FactoryInterface
     */
    private $resultFactory;

    public function __construct(RequestStack $requestStack, FactoryInterface $resultFactory)
    {
        $this->request = $requestStack->getCurrentRequest();
        $this->resultFactory = $resultFactory;

        $this->page = $this->request->get(PaginationEnum::PAGE_INDEX) ?? PaginationEnum::PAGE;
        $this->limit = $this->request->get(PaginationEnum::LIMIT_INDEX) ?? PaginationEnum::LIMIT;
    }

    public function getResult(ArrayCollection $collectionData): Result
    {
        $offset = $this->page > PaginationEnum::PAGE ? ($this->page - 1) * $this->limit : $this->page - 1;

        return $this->resultFactory->create(
            [
                'page' => $this->page + 1,
                'count' => $collectionData->count(),
                'limit' => $this->limit,
                'collection' => $collectionData->slice($offset, $this->limit),
            ]
        );
    }
}
