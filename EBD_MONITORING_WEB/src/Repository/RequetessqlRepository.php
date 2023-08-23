<?php

namespace App\Repository;

use App\Entity\Requetessql;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Requetessql>
 *
 * @method Requetessql|null find($id, $lockMode = null, $lockVersion = null)
 * @method Requetessql|null findOneBy(array $criteria, array $orderBy = null)
 * @method Requetessql[]    findAll()
 * @method Requetessql[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RequetessqlRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Requetessql::class);
    }

    // Dans le repository de Requetessql
public function getRequetessqlCountByEtat(string $etat): int
{
    return $this->createQueryBuilder('r')
        ->select('COUNT(r)')
        ->where('r.etat = :etat')
        ->setParameter('etat', $etat)
        ->getQuery()
        ->getSingleScalarResult();
}


//    /**
//     * @return Requetessql[] Returns an array of Requetessql objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Requetessql
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
