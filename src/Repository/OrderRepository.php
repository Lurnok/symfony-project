<?php

namespace App\Repository;

use App\Entity\Order;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Enum\OrderStatusEnum;

/**
 * @extends ServiceEntityRepository<Order>
 */
class OrderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Order::class);
    }

    //    /**
    //     * @return Order[] Returns an array of Order objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('o')
    //            ->andWhere('o.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('o.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    public function findOneById($id): ?Order
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    public function getFiveLastOrders(): array
    {
        return $this->createQueryBuilder('o')
            ->select('o', 'SUM(oi.quantity * oi.productPrice) AS orderValue')
            ->andWhere('o.status != :cart')
            ->leftJoin('o.items', 'oi')
            ->groupBy('o.id')
            ->orderBy('o.createdAt', 'desc')
            ->setMaxResults(5)
            ->setParameter('cart',OrderStatusEnum::cart)
            ->getQuery()
            ->getResult();
    }

    public function getProfitsByMonth(): array
    {
        return $this->createQueryBuilder('o')
            ->select('CONCAT(SUBSTRING(o.createdAt, 6, 2),\'-\',SUBSTRING(o.createdAt, 1, 4)) as month, SUM(oi.productPrice * oi.quantity) as value')
            ->andWhere('o.status = :expedie OR o.status = :livre OR o.status = :traitement')
            ->join('o.items', 'oi')
            ->groupBy('month')
            ->orderBy('month', 'DESC')
            ->setMaxResults(12)
            ->setParameter('expedie', OrderStatusEnum::expedie)
            ->setParameter('livre', OrderStatusEnum::livre)
            ->setParameter('traitement', OrderStatusEnum::prep)
            ->getQuery()
            ->getResult();
    }

    public function getUserCart($userId): ?Order
    {
        return $this->createQueryBuilder('o')
            ->join('o.user', 'u')
            ->andWhere('u.id = :userId')
            ->andWhere('o.status = :cart')
            ->setParameter('userId', $userId)
            ->setParameter('cart',OrderStatusEnum::cart)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
}
