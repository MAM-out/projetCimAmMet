<?php

namespace App\Repository;

use App\Entity\Usagers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Usagers|null find($id, $lockMode = null, $lockVersion = null)
 * @method Usagers|null findOneBy(array $criteria, array $orderBy = null)
 * @method Usagers[]    findAll()
 * @method Usagers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsagersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Usagers::class);
    }

    // /**
    //  * @return Usagers[] Returns an array of Usagers objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Usagers
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
