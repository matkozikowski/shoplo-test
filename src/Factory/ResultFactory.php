<?php

declare(strict_types=1);

namespace App\Factory;

use App\Model\DTO\Result;
use App\Model\DTO\Pagination;

class ResultFactory implements FactoryInterface
{
    public function create(?array $data = []): Result
    {
        $result = new Result();
        $result->setCollection($data['collection']);
        $result->setPagination(
            $this->createPagination($data)
        );

        return $result;
    }

    private function createPagination(array $data): ?Pagination
    {
        if ($data['count'] <= $data['limit'] || empty($data['collection'])) {
            return null;
        }


        $page = (int) $data['page'] - 1;
        $totalPage = (int) round($data['limit'] / (int) $data['count']) + 1;


        $pagination = new Pagination();
        $pagination->setPageCount($totalPage);
        $pagination->setCurrentPage($page);


        if ($totalPage > $page) {
            $pagination->setNextPage($page + 1);
        }

        if ($totalPage > $page) {
            $pagination->setPrevPage($page - 1);
        }

        return $pagination;
    }
}