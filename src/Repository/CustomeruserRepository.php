<?php

namespace App\Repository;

use App\Entity\Customeruser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Customeruser>
 *
 * @method Customeruser|null find($id, $lockMode = null, $lockVersion = null)
 * @method Customeruser|null findOneBy(array $criteria, array $orderBy = null)
 * @method Customeruser[]    findAll()
 * @method Customeruser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CustomeruserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Customeruser::class);
    }

//    /**
//     * @return Customeruser[] Returns an array of Customeruser objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Customeruser
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
