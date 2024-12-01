<?php

namespace App\Repository;

use App\Entity\OrderItem;
use App\Enum\StatusEnum;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use phpDocumentor\Reflection\Types\Boolean;

/**
 * @extends ServiceEntityRepository<OrderItem>
 */
class OrderItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrderItem::class);
    }

    //    /**
    //     * @return OrderItem[] Returns an array of OrderItem objects
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

    //    public function findOneBySomeField($value): ?OrderItem
    //    {
    //        return $this->createQueryBuilder('o')
    //            ->andWhere('o.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

    public function findAllByOrder($orderId): array {
        return $this->createQueryBuilder('oi')
            ->select('i.id as id, i.name as name, oi.quantity as quantity, oi.productPrice as productPrice')
            ->join('oi.inOrder','o')
            ->join('oi.product','i')
            ->andWhere('oi.inOrder = :orderId')
            ->setParameter('orderId', $orderId)
            ->getQuery()
            ->getResult();
    }

    public function alreadyInCart($cartId, $itemId): bool {
         return $this->createQueryBuilder('oi')
            ->andWhere('oi.inOrder = :cartId' )
            ->andWhere('oi.product = :itemId')
            ->setParameter('cartId',$cartId)
            ->setParameter('itemId',$itemId)
            ->getQuery()
            ->getOneOrNullResult() == null ? false : true;
    }

    public function findOneInCart($cartId, $itemId): null | OrderItem {
        return $this->createQueryBuilder('oi')
           ->andWhere('oi.inOrder = :cartId' )
           ->andWhere('oi.product = :itemId')
           ->setParameter('cartId',$cartId)
           ->setParameter('itemId',$itemId)
           ->getQuery()
           ->getOneOrNullResult();
   }

   public function cartValid($cartId): bool {
        $outOfStockItems = $this->createQueryBuilder('oi')
            ->andWhere('oi.inOrder = :cartId' )
            ->setParameter('cartId',$cartId)
            ->join('oi.product','o')
            ->andWhere('o.stock = 0')
            ->getQuery()
            ->getResult();

        $unavailableItems = $this->createQueryBuilder('oi')
        ->andWhere('oi.inOrder = :cartId' )
        ->setParameter('cartId',$cartId)
        ->join('oi.product','o')
        ->andWhere('o.status = :unavailable')
        ->setParameter('unavailable',StatusEnum::rupture)
        ->getQuery()
        ->getResult();

        return count($outOfStockItems) == 0 && count($unavailableItems) == 0;
    }
}
