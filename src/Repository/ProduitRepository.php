<?php

namespace App\Repository;

use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Produit>
 */
class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produit::class);
    }

    public function find5ProduitsRandom(): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT id FROM produit ORDER BY RAND() LIMIT 5';
        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery();
        $ids = array_column($result->fetchAllAssociative(), 'id');

        return $this->createQueryBuilder('p')
            ->where('p.id IN (:ids)')
            ->setParameter('ids', $ids)
            ->getQuery()
            ->getResult();
    }

    public function findProduitsByFournisseurs(array $fournisseurIds)
    {
        return $this->getEntityManager()->createQuery(
            'SELECT f.nom AS fournisseurNom, p.nom AS produitNom, p.prix
            FROM App\Entity\Fournisseur f
            JOIN f.produits p
            WHERE f.id IN (:ids)
            ORDER BY f.nom, p.nom'
        )
            ->setParameter('ids', $fournisseurIds)
            ->getResult();
    }





    //    /**
    //     * @return Produit[] Returns an array of Produit objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('p.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Produit
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
