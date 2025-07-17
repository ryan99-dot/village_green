<?php

namespace App\Repository;

use App\Entity\Fournisseur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Fournisseur>
 */
class FournisseurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fournisseur::class);
    }

public function find5FournisseursWithProduitsRandom(): array
{
    $conn = $this->getEntityManager()->getConnection();

    $sql = '
        SELECT DISTINCT f.*
        FROM fournisseur f
        JOIN produit p ON f.id = p.fournisseur_id
        ORDER BY RAND()
        LIMIT 5
    ';

    $stmt = $conn->prepare($sql);
    $result = $stmt->executeQuery();

    // Renvoie les entités via le mapping du Fournisseur
    return $result->fetchAllAssociative();
}




//    /**
//     * @return Fournisseur[] Returns an array of Fournisseur objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Fournisseur
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
