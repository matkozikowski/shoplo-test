<?php

declare(strict_types=1);

namespace App\Service;

use Psr\Log\LoggerInterface;

class LoggerService
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function log(string $message): void
    {
        $this->logger->info($message);
    }
}