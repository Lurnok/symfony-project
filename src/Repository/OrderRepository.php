<?php

namespace App\Repository;

use App\Entity\Order;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

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

    //    public function findOneBySomeField($value): ?Order
    //    {
    //        return $this->createQueryBuilder('o')
    //            ->andWhere('o.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

    public function getFiveLastOrders(): array {
        return $this->createQueryBuilder('o')
            ->orderBy('o.createdAt','desc')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();
    }

    public function getMonthlySalesData(): array
    {
        return $this->createQueryBuilder('o')
            ->select('SUBSTRING(o.createdAt, 1, 7) as month, SUM(oi.productPrice * oi.quantity) as totalSales')
            ->andWhere('o.status = :shipped OR o.status = :delivered')
            ->join('o.orderItem', 'oi')
            ->groupBy('month')
            ->orderBy('month', 'DESC')
            ->setMaxResults(12)
            ->setParameter('shipped', 'Shipped')
            ->setParameter('delivered', 'Delivered')
            ->getQuery()
            ->getResult();
    }
}
