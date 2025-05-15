-- Active: 1745478085709@@127.0.0.1@3306@village_green
DROP DATABASE village_green;

CREATE DATABASE village_green;

USE village_green;


CREATE TABLE fournisseur(
   reference_fournisseur VARCHAR(20),
   nom_fournisseur VARCHAR(50) NOT NULL,
   mail_fournisseur VARCHAR(50) NOT NULL,
   telephone_fournisseur VARCHAR(10) NOT NULL,
   PRIMARY KEY(reference_fournisseur)
);

CREATE TABLE rubrique(
   id_rubrique INT AUTO_INCREMENT,
   nom_rubrique VARCHAR(50) NOT NULL,
   photo_rubrique VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_rubrique)
);

CREATE TABLE sous_rubrique(
   id_sous_rubrique INT AUTO_INCREMENT,
   nom_sous_rubrique VARCHAR(50) NOT NULL,
   photo_sous_rubrique VARCHAR(50) NOT NULL,
   id_rubrique INT NOT NULL,
   PRIMARY KEY(id_sous_rubrique),
   FOREIGN KEY(id_rubrique) REFERENCES rubrique(id_rubrique)
);

CREATE TABLE utilisateur(
   identifiant VARCHAR(50),
   role VARCHAR(50) NOT NULL,
   nom VARCHAR(50) NOT NULL,
   prenom VARCHAR(50) NOT NULL,
   mail VARCHAR(50) NOT NULL,
   mot_de_passe VARCHAR(50) NOT NULL,
   categorie_client VARCHAR(50),
   telephone VARCHAR(10),
   coefficient_taxe DECIMAL(4,2),
   service_entreprise VARCHAR(50),
   reduction DECIMAL(4,2),
   identifiant_commercial VARCHAR(50),
   PRIMARY KEY(identifiant),
   FOREIGN KEY(identifiant_commercial) REFERENCES utilisateur(identifiant)
);

CREATE TABLE commande(
   numero_de_commande VARCHAR(20),
   date_commande DATE NOT NULL,
   etat VARCHAR(50) NOT NULL,
   reference_paiement VARCHAR(20) NOT NULL,
   type_paiement VARCHAR(50) NOT NULL,
   statut_paiement VARCHAR(50) NOT NULL,
   date_paiement DATE,
   duree_conservation INT NOT NULL,
   identifiant VARCHAR(50) NOT NULL,
   PRIMARY KEY(numero_de_commande),
   FOREIGN KEY(identifiant) REFERENCES utilisateur(identifiant)
);

CREATE TABLE adresse(
   id_adresse INT AUTO_INCREMENT,
   adresse VARCHAR(50) NOT NULL,
   ville VARCHAR(50) NOT NULL,
   code_postal VARCHAR(5) NOT NULL,
   PRIMARY KEY(id_adresse)
);

CREATE TABLE bon_de_livraison(
   numero_bon_livraison VARCHAR(20),
   statut VARCHAR(50) NOT NULL,
   PRIMARY KEY(numero_bon_livraison)
);

CREATE TABLE produit(
   reference_produit VARCHAR(20),
   nom_produit VARCHAR(50) NOT NULL,
   description VARCHAR(200) NOT NULL,
   prix DECIMAL(10,2) NOT NULL,
   prix_achat DECIMAL(10,2) NOT NULL,
   photo_produit VARCHAR(100) NOT NULL,
   quantite_stock INT NOT NULL,
   publication BOOLEAN NOT NULL,
   actif BOOLEAN NOT NULL,
   id_sous_rubrique INT NOT NULL,
   reference_fournisseur VARCHAR(20) NOT NULL,
   PRIMARY KEY(reference_produit),
   FOREIGN KEY(id_sous_rubrique) REFERENCES sous_rubrique(id_sous_rubrique),
   FOREIGN KEY(reference_fournisseur) REFERENCES fournisseur(reference_fournisseur)
);

CREATE TABLE donne_lieu_a(
   reference_produit VARCHAR(20),
   numero_de_commande VARCHAR(20),
   quantite INT NOT NULL,
   PRIMARY KEY(reference_produit, numero_de_commande),
   FOREIGN KEY(reference_produit) REFERENCES produit(reference_produit),
   FOREIGN KEY(numero_de_commande) REFERENCES commande(numero_de_commande)
);

CREATE TABLE est_renseignee(
   numero_de_commande VARCHAR(20),
   id_adresse INT,
   numero_bon_livraison VARCHAR(20),
   numero_facture VARCHAR(50),
   date DATE,
   type_adresse VARCHAR(50) NOT NULL,
   PRIMARY KEY(numero_de_commande, id_adresse, numero_bon_livraison),
   FOREIGN KEY(numero_de_commande) REFERENCES commande(numero_de_commande),
   FOREIGN KEY(id_adresse) REFERENCES adresse(id_adresse),
   FOREIGN KEY(numero_bon_livraison) REFERENCES bon_de_livraison(numero_bon_livraison)
);

CREATE TABLE livre(
   reference_produit VARCHAR(20),
   numero_bon_livraison VARCHAR(20),
   quantite_livre INT NOT NULL,
   PRIMARY KEY(reference_produit, numero_bon_livraison),
   FOREIGN KEY(reference_produit) REFERENCES produit(reference_produit),
   FOREIGN KEY(numero_bon_livraison) REFERENCES bon_de_livraison(numero_bon_livraison)
);
