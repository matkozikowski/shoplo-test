<?php

declare(strict_types=1);

namespace App\Model\DTO;


class Result
{
    private $collection;

    private $pagination;

    public function getCollection()
    {
        return $this->collection;
    }

    public function setCollection($collection): void
    {
        $this->collection = $collection;
    }

    public function getPagination()
    {
        return $this->pagination;
    }

    public function setPagination($pagination): void
    {
        $this->pagination = $pagination;
    }
}