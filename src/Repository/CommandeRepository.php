<?php

namespace App\Repository;

use App\Entity\Commande;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Commande>
 */
class CommandeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Commande::class);
    }

    public function getChiffreAffairesParMois(int $annee): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "SELECT MONTH(c.date_paiement) AS mois, SUM(cp.quantite * p.prix_achat) AS total
        FROM commande c
        JOIN commande_produit cp ON c.id = cp.commande_id
        JOIN produit p ON cp.produit_id = p.id
        WHERE YEAR(c.date_paiement) = :annee
        GROUP BY mois
        ORDER BY mois ASC";

        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery(['annee' => $annee]);
        return $result->fetchAllAssociative();
    }

    public function getChiffreAffairesParFournisseur(int $annee)
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "SELECT f.nom AS fournisseur, SUM(cp.quantite * p.prix_achat) AS total
        FROM commande c
        JOIN commande_produit cp ON c.id = cp.commande_id
        JOIN produit p ON cp.produit_id = p.id
        JOIN fournisseur f ON p.fournisseur_id = f.id
        WHERE YEAR(c.date_paiement) = :annee
        GROUP BY f.nom
        ORDER BY total DESC;";

        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery(['annee' => $annee]);
        return $result->fetchAllAssociative();
    }

    public function getTop10Quantite(int $annee)
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "SELECT p.reference, p.nom, f.nom AS fournisseur, SUM(cp.quantite) AS quantite_totale
        FROM commande c
        JOIN commande_produit cp ON c.id = cp.commande_id
        JOIN produit p ON cp.produit_id = p.id
        JOIN fournisseur f ON p.fournisseur_id = f.id
        WHERE YEAR(c.date_paiement) = :annee
        GROUP BY p.id, p.reference, p.nom, f.nom
        ORDER BY quantite_totale DESC
        LIMIT 10";

        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery(['annee' => $annee]);
        return $result->fetchAllAssociative();
    }

    public function getTop10Marge(int $annee)
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "SELECT p.reference, p.nom, f.nom AS fournisseur, SUM(cp.quantite * (p.prix_achat + (p.prix * (u.coefficient_taxe - 1)) - (p.prix * COALESCE(u.reduction, 0))- p.prix_achat)) AS marge_totale
        FROM commande c
        JOIN utilisateur u ON c.utilisateur_id = u.id
        JOIN commande_produit cp ON c.id = cp.commande_id
        JOIN produit p ON cp.produit_id = p.id
        JOIN fournisseur f ON p.fournisseur_id = f.id
        WHERE YEAR(c.date_paiement) = :annee
        GROUP BY p.id, p.reference, p.nom, f.nom
        ORDER BY marge_totale DESC
        LIMIT 10";

        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery(['annee' => $annee]);
        return $result->fetchAllAssociative();
    }

    public function getTop10ClientsCommande(int $annee)
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "SELECT u.nom, u.prenom, COUNT(c.id) AS nb_commandes
        FROM commande c
        JOIN utilisateur u ON c.utilisateur_id = u.id
        WHERE YEAR(c.date_paiement) = :annee
        GROUP BY u.id, u.nom, u.prenom
        ORDER BY nb_commandes DESC
        LIMIT 10";

        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery(['annee' => $annee]);
        return $result->fetchAllAssociative();
    }

    public function getTop10ClientsChiffre(int $annee)
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "SELECT u.nom, u.prenom, SUM(cp.quantite * (p.prix_achat + (p.prix * (u.coefficient_taxe - 1)) - (p.prix * COALESCE(u.reduction, 0)))) AS total
        FROM commande c
        JOIN utilisateur u ON c.utilisateur_id = u.id
        JOIN commande_produit cp ON c.id = cp.commande_id
        JOIN produit p ON cp.produit_id = p.id
        WHERE YEAR(c.date_paiement) = :annee
        GROUP BY u.id, u.nom, u.prenom
        ORDER BY total DESC
        LIMIT 10";

        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery(['annee' => $annee]);
        return $result->fetchAllAssociative();
    }

    public function getChiffreAffairesTypeClient(int $annee)
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "SELECT u.categorie_client, SUM(cp.quantite * (p.prix_achat + (p.prix * (u.coefficient_taxe - 1)) - (p.prix * COALESCE(u.reduction, 0)))) AS total
        FROM commande c
        JOIN utilisateur u ON c.utilisateur_id = u.id
        JOIN commande_produit cp ON c.id = cp.commande_id
        JOIN produit p ON cp.produit_id = p.id
        WHERE YEAR(c.date_paiement) = :annee
        GROUP BY u.categorie_client";

        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery(['annee' => $annee]);
        return $result->fetchAllAssociative();
    }

    public function getNombreCommandesEnLivraison()
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "SELECT COUNT(DISTINCT c.id) AS nb_commandes_en_cours, bdl.statut
        FROM commande c
        JOIN adresse_commande ac ON c.id = ac.commande_id
        JOIN bon_de_livraison bdl ON ac.bon_livraison_id = bdl.id
        WHERE bdl.statut IN ('En cours d\'expédition', 'Partiellement livré')
        GROUP BY bdl.statut";

        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery();
        return $result->fetchAllAssociative();
    }

    //    /**
    //     * @return Commande[] Returns an array of Commande objects
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

    //    public function findOneBySomeField($value): ?Commande
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
