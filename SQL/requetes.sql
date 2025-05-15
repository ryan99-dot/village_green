/*Chiffre d'affaires mois par mois pour une année sélectionnée*/
SELECT MONTH(c.date_commande) AS mois ,SUM(p.prix*d.quantite) AS chiffre_affaire FROM produit AS p JOIN donne_lieu_a AS d ON p.reference_produit = d.reference_produit JOIN commande AS c ON d.numero_de_commande = c.numero_de_commande WHERE YEAR(c.date_commande) = '2024' GROUP BY MONTH(c.date_commande)

/*Chiffre d'affaires généré pour un fournisseur*/
SELECT f.nom_fournisseur, SUM(p.prix*d.quantite) AS chiffre_affaire FROM fournisseur AS f JOIN produit AS p ON f.reference_fournisseur = p.reference_fournisseur JOIN donne_lieu_a AS d ON p.reference_produit = d.reference_produit JOIN commande AS c ON d.numero_de_commande = c.numero_de_commande GROUP BY f.nom_fournisseur

/*TOP 10 des produits les plus commandés pour une année sélectionnée (référence et nom du produit, quantité commandée, fournisseur)*/
SELECT p.reference_produit, p.nom_produit, SUM(d.quantite) AS quantite_commande, f.nom_fournisseur FROM produit AS p JOIN donne_lieu_a AS d ON p.reference_produit = d.reference_produit JOIN fournisseur AS f ON p.reference_fournisseur = f.reference_fournisseur JOIN commande AS c ON d.numero_de_commande = c.numero_de_commande WHERE YEAR(c.date_commande) = '2025' GROUP BY p.reference_produit ORDER BY quantite_commande DESC LIMIT 10

/*TOP 10 des produits les plus rémunérateurs pour une année sélectionnée (référence et nom du produit, marge, fournisseur)*/
SELECT p.reference_produit, p.nom_produit, SUM(p.prix*d.quantite) AS chiffre_affaire, SUM(p.prix_achat*d.quantite) AS total_achat, SUM(p.prix*d.quantite)-SUM(p.prix_achat*d.quantite) AS marge, f.nom_fournisseur FROM produit AS p JOIN donne_lieu_a AS d ON p.reference_produit = d.reference_produit JOIN fournisseur AS f ON p.reference_fournisseur = f.reference_fournisseur JOIN commande AS c ON d.numero_de_commande = c.numero_de_commande WHERE YEAR(c.date_commande) = '2025' GROUP BY p.reference_produit ORDER BY marge DESC LIMIT 10

/*Top 10 des clients en nombre de commandes ou chiffre d'affaires*/
SELECT u.identifiant, u.nom, u.prenom, SUM(p.prix*d.quantite) AS chiffre_affaire, COUNT(DISTINCT(c.numero_de_commande)) AS nombre_commande FROM utilisateur AS u JOIN commande AS c ON u.identifiant = c.identifiant JOIN donne_lieu_a AS d ON c.numero_de_commande = d.numero_de_commande JOIN produit AS p ON d.reference_produit = p.reference_produit WHERE u.role = 'Client' GROUP BY u.identifiant ORDER BY chiffre_affaire DESC, nombre_commande DESC LIMIT 10

/*Répartition du chiffre d'affaires par type de client*/
SELECT u.categorie_client, SUM(p.prix*d.quantite) AS chiffre_affaire FROM produit AS p JOIN donne_lieu_a AS d ON p.reference_produit = d.reference_produit JOIN commande AS c ON d.numero_de_commande = c.numero_de_commande JOIN utilisateur AS u ON c.identifiant = u.identifiant GROUP BY u.categorie_client ORDER BY chiffre_affaire DESC

/*Nombre de commandes en cours de livraison.*/
SELECT COUNT(DISTINCT(c.numero_de_commande)), b.statut FROM commande AS c JOIN est_renseignee AS e ON c.numero_de_commande = e.numero_de_commande JOIN bon_de_livraison AS b ON e.numero_bon_livraison = b.numero_bon_livraison WHERE b.statut = "En cours d'expédition" ORDER BY c.numero_de_commande
