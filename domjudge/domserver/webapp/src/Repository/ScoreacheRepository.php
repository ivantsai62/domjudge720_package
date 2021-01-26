<?php

namespace App\Repository;

use App\Entity\Scoreache;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Scoreache|null find($id, $lockMode = null, $lockVersion = null)
 * @method Scoreache|null findOneBy(array $criteria, array $orderBy = null)
 * @method Scoreache[]    findAll()
 * @method Scoreache[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ScoreacheRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Scoreache::class);
    }

    // /**
    //  * @return Scoreache[] Returns an array of Scoreache objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Scoreache
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
