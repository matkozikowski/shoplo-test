<?php

declare(strict_types=1);

namespace App\Model\DTO;


class Pagination
{
    /**
     * @var int
     */
    private $currentPage;

    /**
     * @var int
     */
    private $prevPage = 1;

    /**
     * @var int
     */
    private $nextPage = 1;

    /**
     * @var int
     */
    private $pageCount;

    public function getCurrentPage(): int
    {
        return $this->currentPage;
    }

    public function setCurrentPage(int $currentPage): void
    {
        $this->currentPage = $currentPage;
    }

    public function getPrevPage(): int
    {
        return $this->prevPage;
    }

    public function setPrevPage(int $prevPage): void
    {
        $this->prevPage = $prevPage;
    }

    public function getNextPage(): int
    {
        return $this->nextPage;
    }

    public function setNextPage(int $nextPage): void
    {
        $this->nextPage = $nextPage;
    }

    public function getPageCount(): int
    {
        return $this->pageCount;
    }

    public function setPageCount(int $pageCount): void
    {
        $this->pageCount = $pageCount;
    }
}
