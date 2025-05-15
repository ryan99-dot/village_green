-- Active: 1745478085709@@127.0.0.1@3306@village_green
/*Créez une vue correspondant à la jointure Produits - Fournisseurs*/
CREATE VIEW v_produits_fournisseurs AS SELECT p.*, f.nom_fournisseur, f.mail_fournisseur, f.telephone_fournisseur FROM produit AS p JOIN fournisseur AS f ON p.reference_fournisseur = f.reference_fournisseur ORDER BY f.reference_fournisseur, p.reference_produit

/*Créez une vue correspondant à la jointure Produits - Catégorie/Sous catégorie*/
CREATE VIEW v_produits_rubrique AS SELECT p.*, s.nom_sous_rubrique, s.photo_sous_rubrique, r.id_rubrique, r.nom_rubrique, r.photo_rubrique FROM produit AS p JOIN sous_rubrique AS s ON p.id_sous_rubrique = s.id_sous_rubrique JOIN rubrique AS r ON s.id_rubrique = r.id_rubrique ORDER BY r.id_rubrique, s.id_sous_rubrique, p.reference_produit
