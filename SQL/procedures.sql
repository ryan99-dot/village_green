-- Active: 1745478085709@@127.0.0.1@3306@village_green
/*Créez une procédure stockée qui sélectionne les commandes non soldées (en cours de livraison)*/
CREATE PROCEDURE com_non_soldee (IN etat_v VARCHAR(50))
BEGIN
    SELECT * FROM commande WHERE etat = etat_v;
END;
CALL com_non_soldee('En cours');

/*Créer une procédure qui renvoie le délai moyen entre la date de commande et la date de facturation.*/
CREATE PROCEDURE delai()
BEGIN
    SELECT SUM(DATEDIFF(e.date, c.date_commande))/COUNT(*) AS delai_moyen FROM commande AS c JOIN est_renseignee AS e ON c.numero_de_commande = e.numero_de_commande WHERE type_adresse = 'Facturation';
END;

DROP PROCEDURE delai;
