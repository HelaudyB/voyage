<?php

namespace App\Repository;

use App\Entity\Elodie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Elodie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Elodie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Elodie[]    findAll()
 * @method Elodie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ElodieRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Elodie::class);
    }

    // /**
    //  * @return Elodie[] Returns an array of Elodie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Elodie
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
