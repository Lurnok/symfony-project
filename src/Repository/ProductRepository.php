<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Product>
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function getByCateg(string $category): array
    {
        return $this->createQueryBuilder('p')
            ->join('p.category', 'c')
            ->andWhere('c.description = :categ')
            ->setParameter('categ', $category)
            ->getQuery()
            ->getResult();
    }

    public function getById(string $id): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();
    }

    public function findAllPagination(): Query
    {
        return $this->createQueryBuilder('p')->getQuery();
    }

    public function getByCategPagination(string $category): Query
    {
        return $this->createQueryBuilder('p')
            ->join('p.category', 'c')
            ->andWhere('c.description = :categ')
            ->setParameter('categ', $category)
            ->getQuery();
    }

    public function getStatusPercentage()
    {

        $totalProducts = $this->createQueryBuilder('p2')
            ->select('COUNT(p2.id)')
            ->getQuery()
            ->getSingleScalarResult();

        $qb = $this->createQueryBuilder('p');

        return $qb->select('p.status, (COUNT(p.id) * 100.0 / :total) AS percentage')
            ->groupBy('p.status')
            ->setParameter('total', $totalProducts)
            ->having('percentage > 0 OR COUNT(p.id) = 0')
            ->getQuery()
            ->getResult();
    }

    public function productHasEnoughStock($name,$quantity) : bool {
        $product = $this->createQueryBuilder('p')
            ->andWhere('p.name = :name')
            ->setParameter('name', $name)
            ->getQuery()
            ->getOneOrNullResult();

        return $quantity <= $product->getStock();
    }

    public function getByName(string $name): ?Product
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.name = :name')
            ->setParameter('name', $name)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
