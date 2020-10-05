<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Common\Collections\ArrayCollection;

class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function findProducts(): ArrayCollection
    {
        $result = $this->createQueryBuilder('p')
            ->leftJoin('p.productImages', 'pi')
            ->andWhere('p.status = :status')
            ->setParameter('status', true)
            ->orderBy('p.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;

        return new ArrayCollection($result);
    }
}
