<?php

namespace App\Repository;

use App\Entity\ProblemGroup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ProblemGroup|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProblemGroup|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProblemGroup[]    findAll()
 * @method ProblemGroup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProblemGroupRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProblemGroup::class);
    }

    // /**
    //  * @return ProblemGroup[] Returns an array of ProblemGroup objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProblemGroup
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
