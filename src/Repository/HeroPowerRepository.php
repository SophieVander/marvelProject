<?php

namespace App\Repository;

use App\Entity\HeroPower;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method HeroPower|null find($id, $lockMode = null, $lockVersion = null)
 * @method HeroPower|null findOneBy(array $criteria, array $orderBy = null)
 * @method HeroPower[]    findAll()
 * @method HeroPower[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HeroPowerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HeroPower::class);
    }

    // /**
    //  * @return HeroPower[] Returns an array of HeroPower objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HeroPower
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
