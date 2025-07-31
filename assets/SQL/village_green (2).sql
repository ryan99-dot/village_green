-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : symfony_db:3306
-- Généré le : jeu. 31 juil. 2025 à 14:16
-- Version du serveur : 11.8.2-MariaDB-ubu2404
-- Version de PHP : 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `village_green`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE `adresse` (
  `id` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `code_postal` varchar(5) NOT NULL,
  `utilisateur_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`id`, `adresse`, `ville`, `code_postal`, `utilisateur_id`) VALUES
(1, '12 rue de la Musique', 'Paris', '75001', 5),
(2, '45 avenue des Notes', 'Lyon', '69002', 8),
(3, '78 boulevard du Son', 'Marseille', '13003', 3),
(4, '23 impasse des Rythmes', 'Toulouse', '31000', 12),
(5, '56 allée des Harmonies', 'Nice', '06000', 5),
(6, '10 rue des Musiciens', 'Paris', '75015', 6),
(7, '25 boulevard Harmonie', 'Lyon', '69003', 7),
(8, '3 avenue des Instruments', 'Marseille', '13006', 8),
(9, '18 rue du Conservatoire', 'Bordeaux', '33000', 9),
(10, '47 place du Métronome', 'Toulouse', '31000', 10),
(11, '12 rue de la Clé de Sol', 'Nantes', '44000', 11),
(12, '7 chemin des Partitions', 'Strasbourg', '67000', 12),
(13, '30 allée du Jazz', 'Lille', '59000', 13),
(14, '5 impasse des Cordes', 'Nice', '06000', 14),
(15, '22 rue du Solfège', 'Rennes', '35000', 5);

-- --------------------------------------------------------

--
-- Structure de la table `adresse_commande`
--

CREATE TABLE `adresse_commande` (
  `id` int(11) NOT NULL,
  `commande_id` int(11) DEFAULT NULL,
  `adresse_id` int(11) DEFAULT NULL,
  `bon_livraison_id` int(11) DEFAULT NULL,
  `numero_facture` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL COMMENT '(DC2Type:date_immutable)',
  `type_adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `adresse_commande`
--

INSERT INTO `adresse_commande` (`id`, `commande_id`, `adresse_id`, `bon_livraison_id`, `numero_facture`, `date`, `type_adresse`) VALUES
(1, 1, 1, 1, 'FAC001', '2025-04-20', 'Livraison'),
(2, 1, 2, 1, 'FAC001', '2025-04-20', 'Facturation'),
(3, 2, 3, 2, 'FAC002', '2025-04-21', 'Livraison'),
(4, 2, 4, 2, 'FAC002', '2025-04-21', 'Facturation'),
(5, 3, 5, 3, 'FAC003', '2025-04-22', 'Livraison'),
(6, 3, 6, 3, 'FAC003', '2025-04-22', 'Facturation'),
(7, 4, 7, 4, 'FAC004', '2025-04-23', 'Livraison'),
(8, 4, 8, 4, 'FAC004', '2025-04-23', 'Facturation'),
(9, 5, 9, 5, 'FAC005', '2025-04-24', 'Livraison'),
(10, 5, 10, 5, 'FAC005', '2025-04-24', 'Facturation'),
(11, 6, 11, 6, 'FAC006', '2025-04-25', 'Livraison'),
(12, 6, 12, 6, 'FAC006', '2025-04-25', 'Facturation'),
(13, 7, 13, 7, 'FAC007', '2025-04-26', 'Livraison'),
(14, 7, 14, 7, 'FAC007', '2025-04-26', 'Facturation'),
(15, 8, 15, 8, 'FAC008', '2025-04-27', 'Livraison'),
(16, 8, 1, 8, 'FAC008', '2025-04-27', 'Facturation'),
(17, 9, 2, 9, 'FAC009', '2025-04-28', 'Livraison'),
(18, 9, 3, 9, 'FAC009', '2025-04-28', 'Facturation'),
(19, 10, 4, 10, 'FAC010', '2025-04-29', 'Livraison'),
(20, 10, 5, 10, 'FAC010', '2025-04-29', 'Facturation'),
(21, 11, 6, 11, 'FAC011', '2025-04-30', 'Livraison'),
(22, 11, 7, 11, 'FAC011', '2025-04-30', 'Facturation'),
(23, 12, 8, 12, 'FAC012', '2025-05-01', 'Livraison'),
(24, 12, 9, 12, 'FAC012', '2025-05-01', 'Facturation'),
(25, 13, 10, 13, 'FAC013', '2025-05-02', 'Livraison'),
(26, 13, 11, 13, 'FAC013', '2025-05-02', 'Facturation'),
(27, 14, 12, 14, 'FAC014', '2025-05-03', 'Livraison'),
(28, 14, 13, 14, 'FAC014', '2025-05-03', 'Facturation'),
(29, 15, 14, 15, 'FAC015', '2025-05-04', 'Livraison'),
(30, 15, 15, 15, 'FAC015', '2025-05-04', 'Facturation');

-- --------------------------------------------------------

--
-- Structure de la table `bon_de_livraison`
--

CREATE TABLE `bon_de_livraison` (
  `id` int(11) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `bon_de_livraison`
--

INSERT INTO `bon_de_livraison` (`id`, `numero`, `statut`) VALUES
(1, 'BL001', 'Envoyé'),
(2, 'BL002', 'En préparation'),
(3, 'BL003', 'Livré'),
(4, 'BL004', 'Partiellement livré'),
(5, 'BL005', 'Préparé'),
(6, 'BL006', 'En attente'),
(7, 'BL007', 'Annulé'),
(8, 'BL008', 'En préparation'),
(9, 'BL009', 'Livré'),
(10, 'BL010', 'En cours d\'expédition'),
(11, 'BL011', 'En cours d\'expédition'),
(12, 'BL012', 'Livré'),
(13, 'BL013', 'En préparation'),
(14, 'BL014', 'Annulé'),
(15, 'BL015', 'En attente');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `numero` varchar(255) NOT NULL,
  `date` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `etat` varchar(255) NOT NULL,
  `reference_paiement` varchar(255) NOT NULL,
  `type_paiement` varchar(255) NOT NULL,
  `statut_paiement` varchar(255) NOT NULL,
  `date_paiement` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `utilisateur_id`, `numero`, `date`, `etat`, `reference_paiement`, `type_paiement`, `statut_paiement`, `date_paiement`) VALUES
(1, 10, 'CMD001', '2025-04-20 00:00:00', 'En cours', 'PAY001', 'Carte Bancaire', 'Payé', '2025-04-20 00:00:00'),
(2, 5, 'CMD002', '2025-04-21 00:00:00', 'Livrée', 'PAY002', 'Virement', 'En attente', NULL),
(3, 6, 'CMD003', '2025-04-22 00:00:00', 'Préparée', 'PAY003', 'Chèque', 'En attente', NULL),
(4, 11, 'CMD004', '2025-04-22 00:00:00', 'En cours', 'PAY004', 'Carte Bancaire', 'Payé', '2025-04-22 00:00:00'),
(5, 7, 'CMD005', '2025-04-23 00:00:00', 'En cours', 'PAY005', 'Virement', 'Payé', '2025-04-23 00:00:00'),
(6, 12, 'CMD006', '2025-04-23 00:00:00', 'Livrée', 'PAY006', 'Carte Bancaire', 'Payé', '2025-04-23 00:00:00'),
(7, 8, 'CMD007', '2025-04-24 00:00:00', 'En cours', 'PAY007', 'Chèque', 'En attente', NULL),
(8, 13, 'CMD008', '2025-04-24 00:00:00', 'Annulée', 'PAY008', 'Carte Bancaire', 'Annulé', NULL),
(9, 14, 'CMD009', '2025-04-25 00:00:00', 'Préparée', 'PAY009', 'Carte Bancaire', 'Payé', '2025-04-25 00:00:00'),
(10, 9, 'CMD010', '2025-04-25 00:00:00', 'En cours', 'PAY010', 'Virement', 'Payé', '2025-04-25 00:00:00'),
(11, 10, 'CMD011', '2024-05-15 00:00:00', 'En cours', 'PAY003', 'Carte Bancaire', 'Payé', '2024-05-15 00:00:00'),
(12, 6, 'CMD012', '2024-06-20 00:00:00', 'Livrée', 'PAY004', 'Virement', 'En attente', NULL),
(13, 11, 'CMD013', '2024-07-10 00:00:00', 'Annulée', 'PAY005', 'Chèque', 'Non payé', NULL),
(14, 5, 'CMD014', '2024-08-05 00:00:00', 'En cours', 'PAY006', 'Carte Bancaire', 'Payé', '2024-08-05 00:00:00'),
(15, 10, 'CMD015', '2024-09-18 00:00:00', 'Livrée', 'PAY007', 'Virement', 'En attente', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commande_produit`
--

CREATE TABLE `commande_produit` (
  `id` int(11) NOT NULL,
  `produit_id` int(11) DEFAULT NULL,
  `commande_id` int(11) DEFAULT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commande_produit`
--

INSERT INTO `commande_produit` (`id`, `produit_id`, `commande_id`, `quantite`) VALUES
(1, 1, 1, 2),
(2, 3, 2, 1),
(3, 2, 2, 3),
(4, 11, 1, 1),
(5, 14, 1, 1),
(6, 16, 2, 2),
(7, 15, 1, 5),
(8, 12, 2, 1),
(9, 1, 3, 2),
(10, 3, 3, 1),
(11, 2, 3, 3),
(12, 1, 3, 1),
(13, 14, 4, 1),
(14, 16, 4, 2),
(15, 15, 4, 5),
(16, 12, 4, 1),
(17, 4, 5, 1),
(18, 5, 5, 2),
(19, 6, 5, 3),
(20, 7, 6, 4),
(21, 8, 6, 1),
(22, 9, 6, 2),
(23, 10, 7, 3),
(24, 13, 7, 2),
(25, 11, 8, 2),
(26, 14, 8, 1),
(27, 15, 8, 1),
(28, 1, 9, 2),
(29, 16, 9, 3),
(30, 2, 10, 1),
(31, 3, 10, 4),
(32, 5, 10, 2),
(33, 4, 11, 1),
(34, 6, 11, 5),
(35, 7, 12, 3),
(36, 9, 12, 2),
(37, 10, 12, 1),
(38, 11, 13, 4),
(39, 13, 13, 1),
(40, 14, 14, 2),
(41, 16, 14, 2),
(42, 5, 15, 3),
(43, 6, 15, 4);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20250707094557', '2025-07-07 09:46:19', 275),
('DoctrineMigrations\\Version20250709121231', '2025-07-09 12:12:42', 27),
('DoctrineMigrations\\Version20250730074147', '2025-07-30 07:41:54', 33);

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `telephone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`id`, `reference`, `nom`, `mail`, `telephone`) VALUES
(1, 'FOUR001', 'Musique Plus', 'contact@musiqueplus.fr', '0123456789'),
(2, 'FOUR002', 'Instruments Pro', 'info@instrumentspro.com', '0987654321'),
(3, 'FOUR003', 'Sonorité', 'support@sonorite.fr', '0147258369'),
(4, 'FOUR004', 'Harmony', 'service@harmony.com', '0173648291'),
(5, 'FOUR005', 'Melody Corp', 'contact@melodycorp.fr', '0165987432'),
(6, 'FOUR006', 'Acoustic World', 'info@acousticworld.com', '0156324789'),
(7, 'FOUR007', 'Digital Harmony', 'contact@digitalharmony.fr', '0187456321'),
(8, 'FOUR008', 'ElectroSound', 'support@electrosound.com', '0145897632'),
(9, 'FOUR009', 'BassLine', 'contact@bassline.fr', '0192837465'),
(10, 'FOUR010', 'Orchestra Supply', 'info@orchestrasupply.com', '0178965412'),
(11, 'FOUR011', 'Percussion Center', 'vente@percussioncenter.fr', '0165478932'),
(12, 'FOUR012', 'PianoHouse', 'contact@pianohouse.fr', '0147852369'),
(13, 'FOUR013', 'GuitarZone', 'service@guitarzone.com', '0189567324'),
(14, 'FOUR014', 'StudioMix', 'contact@studiomix.fr', '0132456789'),
(15, 'FOUR015', 'Musicalia', 'info@musicalia.com', '0178456329');

-- --------------------------------------------------------

--
-- Structure de la table `livraison_produit`
--

CREATE TABLE `livraison_produit` (
  `id` int(11) NOT NULL,
  `produit_id` int(11) DEFAULT NULL,
  `bon_livraison_id` int(11) DEFAULT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `livraison_produit`
--

INSERT INTO `livraison_produit` (`id`, `produit_id`, `bon_livraison_id`, `quantite`) VALUES
(1, 1, 1, 2),
(2, 2, 1, 1),
(3, 1, 2, 3),
(4, 3, 2, 4),
(5, 4, 3, 2),
(6, 5, 3, 1),
(7, 2, 4, 3),
(8, 3, 4, 2),
(9, 5, 5, 1),
(10, 1, 5, 4);

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `sous_rubrique_id` int(11) DEFAULT NULL,
  `fournisseur_id` int(11) DEFAULT NULL,
  `reference` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `prix` double NOT NULL,
  `photo` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `publie` tinyint(1) NOT NULL,
  `actif` tinyint(1) NOT NULL,
  `prix_achat` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `sous_rubrique_id`, `fournisseur_id`, `reference`, `nom`, `description`, `prix`, `photo`, `stock`, `publie`, `actif`, `prix_achat`) VALUES
(1, 1, 1, 'PROD001', 'Guitare Acoustique', 'Guitare acoustique en bois massif', 150, 'https://cdn.pixabay.com/photo/2016/03/27/22/20/wood-1284504_1280.jpg', 10, 1, 1, 100),
(2, 2, 2, 'PROD002', 'Basse Électrique', 'Basse électrique 4 cordes', 200, 'https://cdn.pixabay.com/photo/2015/08/18/16/58/bass-guitar-894524_1280.jpg', 5, 1, 1, 140),
(3, 3, 3, 'PROD003', 'Piano Numérique', 'Piano numérique 88 touches', 500, 'piano_numerique.jpg', 3, 1, 1, 350),
(4, 4, 4, 'PROD004', 'Synthétiseur Analogique', 'Synthétiseur avec sons vintage', 300, 'synth_analogique.jpg', 7, 1, 1, 220),
(5, 5, 5, 'PROD005', 'Batterie Électronique', 'Kit de batterie électronique complet', 450, 'batterie_electronique.jpg', 2, 1, 1, 320),
(6, 6, 6, 'PROD006', 'Congas en bois', 'Paire de congas professionnels', 280, 'congas_bois.jpg', 4, 1, 1, 180),
(7, 7, 7, 'PROD007', 'Trompette Sib', 'Trompette en laiton avec étui', 320, 'trompette_sib.jpg', 6, 1, 1, 240),
(8, 8, 8, 'PROD008', 'Saxophone Alto', 'Saxophone alto doré', 600, 'saxophone_alto.jpg', 3, 1, 1, 420),
(9, 9, 9, 'PROD009', 'Câble Jack-Jack 6m', 'Câble audio 6 mètres pour instrument', 15, 'cable_jack.jpg', 20, 1, 1, 10),
(10, 10, 10, 'PROD010', 'Support Guitare', 'Support pliable pour guitare acoustique/électrique', 25, 'support_guitare.jpg', 15, 1, 1, 18),
(11, 1, 1, 'PROD011', 'Guitare Électrique', 'Guitare électrique 6 cordes, corps en érable', 180, 'guitare_electrique.jpg', 5, 1, 1, 130),
(12, 1, 1, 'PROD012', 'Ampli Guitare', 'Ampli de guitare 30W avec effets', 120, 'ampli_guitare.jpg', 8, 1, 1, 85),
(13, 2, 1, 'PROD013', 'Basse Active', 'Basse active avec préampli', 250, 'basse_active.jpg', 4, 1, 1, 180),
(14, 3, 3, 'PROD014', 'Piano à queue', 'Piano à queue acoustique', 1200, 'piano_queue.jpg', 2, 0, 0, 900),
(15, 5, 5, 'PROD015', 'Microphone USB', 'Microphone de studio pour enregistrement', 80, 'microphone_usb.jpg', 10, 1, 0, 60),
(16, 5, 5, 'PROD016', 'Batterie Acoustique', 'Batterie acoustique avec cymbales', 600, 'batterie_acoustique.jpg', 5, 1, 1, 450);

-- --------------------------------------------------------

--
-- Structure de la table `rubrique`
--

CREATE TABLE `rubrique` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `rubrique`
--

INSERT INTO `rubrique` (`id`, `nom`, `photo`) VALUES
(1, 'Cordes', 'https://cdn.pixabay.com/photo/2022/05/07/18/12/guitar-7180772_1280.jpg'),
(2, 'Claviers', 'https://cdn.pixabay.com/photo/2021/01/25/09/53/piano-5947813_1280.jpg'),
(3, 'Percussions', 'https://cdn.pixabay.com/photo/2017/07/05/04/01/battery-2473413_1280.jpg'),
(4, 'Cuivres', 'https://cdn.pixabay.com/photo/2023/10/30/20/54/saxophone-8353791_1280.jpg'),
(5, 'Accessoires', 'https://cdn.pixabay.com/photo/2021/11/26/19/27/electronics-6826542_1280.jpg'),
(6, 'Bois', 'https://cdn.pixabay.com/photo/2016/10/21/18/58/flute-1758799_1280.jpg'),
(7, 'Sonorisation', 'https://cdn.pixabay.com/photo/2019/11/21/17/32/sound-equipment-4642967_1280.jpg'),
(8, 'Éclairage', 'https://cdn.pixabay.com/photo/2017/08/07/09/00/theatre-2601686_1280.jpg'),
(9, 'Informatique musicale', 'https://cdn.pixabay.com/photo/2017/08/07/01/48/laptop-2598571_1280.jpg'),
(10, 'Partitions & Méthodes', 'https://cdn.pixabay.com/photo/2023/03/25/12/06/sheet-music-7875782_1280.jpg'),
(11, 'DJ & MAO', 'https://cdn.pixabay.com/photo/2015/07/26/17/18/mixer-861403_1280.jpg'),
(12, 'Microphones', 'https://cdn.pixabay.com/photo/2016/01/10/21/05/mic-1132528_1280.jpg'),
(13, 'Enregistrement', 'https://cdn.pixabay.com/photo/2019/03/29/15/41/radio-4089431_1280.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `sous_rubrique`
--

CREATE TABLE `sous_rubrique` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `rubrique_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sous_rubrique`
--

INSERT INTO `sous_rubrique` (`id`, `nom`, `photo`, `rubrique_id`) VALUES
(1, 'Guitares', 'https://cdn.pixabay.com/photo/2016/03/27/22/20/wood-1284504_1280.jpg', 1),
(2, 'Basses', 'https://cdn.pixabay.com/photo/2015/08/18/16/58/bass-guitar-894524_1280.jpg', 1),
(3, 'Pianos', 'https://cdn.pixabay.com/photo/2016/07/02/21/05/piano-1493797_1280.jpg', 2),
(4, 'Synthétiseurs', 'https://cdn.pixabay.com/photo/2020/11/09/19/14/synth-5727575_1280.jpg', 2),
(5, 'Batteries', 'https://cdn.pixabay.com/photo/2017/07/05/04/01/battery-2473413_1280.jpg', 3),
(6, 'Congas', 'https://images.freeimages.com/variants/TncQuHAUGAypDiSbLhs7kJus/f4a36f6589a0e50e702740b15352bc00e4bfaf6f58bd4db850e167794d05993d?fmt=webp&h=350', 3),
(7, 'Trompettes', 'https://cdn.pixabay.com/photo/2015/02/05/00/54/music-624421_1280.jpg', 4),
(8, 'Saxophones', 'https://cdn.pixabay.com/photo/2023/10/30/20/54/saxophone-8353791_1280.jpg', 4),
(9, 'Câbles', 'https://cdn.pixabay.com/photo/2021/11/10/20/04/microphone-6784749_1280.jpg', 5),
(10, 'Supports', 'https://images.freeimages.com/variants/Ju1TMdzM5BLyYjE6bEUJP4cs/f4a36f6589a0e50e702740b15352bc00e4bfaf6f58bd4db850e167794d05993d?fmt=webp&h=350', 5),
(11, 'Clarinette', 'https://cdn.pixabay.com/photo/2019/11/15/16/28/clarinet-4628755_1280.jpg', 6),
(12, 'Flûte', 'https://cdn.pixabay.com/photo/2021/09/09/05/43/the-flute-6609536_1280.jpg', 6),
(13, 'Enceintes', 'https://cdn.pixabay.com/photo/2017/03/26/22/15/speakers-2176734_1280.jpg', 7),
(14, 'Tables de mixage', 'https://cdn.pixabay.com/photo/2019/11/21/17/32/sound-equipment-4642968_1280.jpg', 7),
(15, 'Projecteurs', 'https://cdn.pixabay.com/photo/2018/04/05/19/51/spotlight-3293952_1280.jpg', 8),
(16, 'Pieds & Supports', 'https://cdn.pixabay.com/photo/2017/08/03/13/13/stainless-2576185_1280.jpg', 8),
(17, 'Interfaces audio', 'https://cdn.pixabay.com/photo/2016/08/01/17/11/audio-interface-1561567_1280.jpg', 9),
(18, 'Claviers maîtres', 'https://cdn.pixabay.com/photo/2017/08/07/08/37/piano-2601498_1280.jpg', 9),
(19, 'Partitions classiques', 'https://cdn.pixabay.com/photo/2021/04/10/21/45/music-book-6168179_1280.jpg', 10),
(20, 'Méthodes débutants', 'https://cdn.pixabay.com/photo/2018/05/13/15/38/lyrics-3396839_1280.jpg', 10),
(21, 'Contrôleurs DJ', 'https://cdn.pixabay.com/photo/2018/10/08/05/14/dj-3731970_1280.jpg', 11),
(22, 'Logiciels DJ', 'https://cdn.pixabay.com/photo/2020/02/11/01/13/laptop-4838060_1280.jpg', 11),
(23, 'Microphones filaires', 'https://cdn.pixabay.com/photo/2015/07/26/17/34/microphone-861449_1280.jpg', 12),
(24, 'Microphones sans fil', 'https://cdn.pixabay.com/photo/2023/12/08/02/12/microphone-8436595_1280.jpg', 12),
(25, 'Enregistreurs numériques', 'https://cdn.pixabay.com/photo/2015/10/10/08/50/tascam-dr-60d-980466_1280.jpg', 13),
(26, 'Studios portables', 'https://cdn.pixabay.com/photo/2015/10/24/09/09/studio-1004158_1280.png', 13);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `commercial_id` int(11) DEFAULT NULL,
  `email` varchar(180) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT '(DC2Type:json)' CHECK (json_valid(`roles`)),
  `password` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `categorie_client` varchar(255) DEFAULT NULL,
  `telephone` varchar(10) DEFAULT NULL,
  `coefficient_taxe` double DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `reduction` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `commercial_id`, `email`, `roles`, `password`, `nom`, `prenom`, `categorie_client`, `telephone`, `coefficient_taxe`, `service`, `reduction`) VALUES
(1, NULL, 'paul.durand@villagegreen.fr', '[\"ROLE_COMMERCIAL\"]', '$2y$13$uSOQ9p3CaDav/1el6zn5iOzQ.iiW0eGXCSSvjFdO.v9okwPimoT82', 'Durand', 'Paul', NULL, NULL, NULL, 'Ventes', NULL),
(2, NULL, 'sophie.lemoine@villagegreen.fr', '[\"ROLE_COMMERCIAL\"]', '$2y$13$Q.8Dgx/tFhPqwUb3X23fnu5IMwwI.j8.RYWl18/UrXemqoQOkbiTe', 'Lemoine', 'Sophie', NULL, NULL, NULL, 'Ventes', NULL),
(3, NULL, 'camille.dupont@villagegreen.fr', '[\"ROLE_COMMERCIAL\"]', '$2y$13$CIFFXGdnur71Q3HVvgrFTeiZnlCcshAb/1T5/t3hcbuqyir2tgHF.', 'Dupont', 'Camille', NULL, NULL, NULL, 'Grands Comptes', NULL),
(4, NULL, 'antoine.garcia@villagegreen.fr', '[\"ROLE_COMMERCIAL\"]', '$2y$13$nhKQALCWb2tdU78utic4EesFZ0.wmWhvLRS7.daA2oHJsqNPclaS.', 'Garcia', 'Antoine', NULL, NULL, NULL, 'Export', NULL),
(5, 1, 'jean.martin@clientpro.fr', '[\"ROLE_CLIENT\"]', '$2y$13$tjAy8mr7Q1TfvYtltLAUU.2UBAJlo/PPXimUzkpT6kio5IeOdr2XC', 'Martin', 'Jean', 'Professionnel', '0612345678', 1.2, NULL, 0.05),
(6, 1, 'claire.bernard@clientpro.fr', '[\"ROLE_CLIENT\"]', '$2y$13$sApbhzwhogByg5T7gKFXy.69k/S19Ga9haW6LQmA6aThQQrLhR/Sm', 'Bernard', 'Claire', 'Professionnel', '0698765432', 1.15, NULL, 0.1),
(7, 3, 'nathalie.leroy@clientpro.fr', '[\"ROLE_CLIENT\"]', '$2y$13$o43WAuOtLrbDKToLbBtxHOeg/OYjvqYPruMldcFjSG6VpWpp7utmu', 'Leroy', 'Nathalie', 'Professionnel', '0623456789', 1.1, NULL, 0.08),
(8, 4, 'olivier.faure@clientpro.fr', '[\"ROLE_CLIENT\"]', '$2y$13$dRY3dP56tWZDAdMPtgjWPucI1Lni68z9M4UgTAdKUvPgQDFtMaLpa', 'Faure', 'Olivier', 'Professionnel', '0634567891', 1.18, NULL, 0.06),
(9, 1, 'julie.simon@clientpro.fr', '[\"ROLE_CLIENT\"]', '$2y$13$jqvyC4V2tB.nM2ShkPpb7e7zfh19SG/n.RaLhUGYN8YRDSEGLi7t6', 'Simon', 'Julie', 'Professionnel', '0645678912', 1.2, NULL, 0.07),
(10, 2, 'lucie.petit@clientpart.fr', '[\"ROLE_CLIENT\"]', '$2y$13$lFXJ6Su671unckmqTN4d9ODteRCQqEEzUDMS7C77gN3vNws4yihu6', 'Petit', 'Lucie', 'Particulier', '0678945612', 1.25, NULL, NULL),
(11, 2, 'thomas.moreau@clientpart.fr', '[\"ROLE_CLIENT\"]', '$2y$13$4klGmZZ/z6kvmlldSR561ucv7o6ueiuulHWja2u0vfPQ0LeYcJGVm', 'Moreau', 'Thomas', 'Particulier', '0654321987', 1.25, NULL, NULL),
(12, 2, 'hugo.noel@clientpart.fr', '[\"ROLE_CLIENT\"]', '$2y$13$vn7cwSSbzQfWojRirbJKa.0sFFKTOQPdVbcLQK/MgRiLxGBTXsZ/O', 'Noël', 'Hugo', 'Particulier', '0667891234', 1.25, NULL, NULL),
(13, 2, 'chloe.lemoine@clientpart.fr', '[\"ROLE_CLIENT\"]', '$2y$13$LD4sYFqMgGq0048ZeYtZgOtB6jyvz8ma0AXbv1CZK.FAqSNi1vS8.', 'Lemoine', 'Chloé', 'Particulier', '0678912345', 1.25, NULL, NULL),
(14, 2, 'mathieu.barre@clientpart.fr', '[\"ROLE_CLIENT\"]', '$2y$13$m1WT5Sf1Qv12A8qRumK7UuPhWgCcfjuQBUZMdcivH73I//TmbY0W6', 'Barre', 'Mathieu', 'Particulier', '0689123456', 1.25, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C35F0816FB88E14F` (`utilisateur_id`);

--
-- Index pour la table `adresse_commande`
--
ALTER TABLE `adresse_commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_EF4361782EA2E54` (`commande_id`),
  ADD KEY `IDX_EF436174DE7DC5C` (`adresse_id`),
  ADD KEY `IDX_EF43617D8D16068` (`bon_livraison_id`);

--
-- Index pour la table `bon_de_livraison`
--
ALTER TABLE `bon_de_livraison`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6EEAA67DFB88E14F` (`utilisateur_id`);

--
-- Index pour la table `commande_produit`
--
ALTER TABLE `commande_produit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_DF1E9E87F347EFB` (`produit_id`),
  ADD KEY `IDX_DF1E9E8782EA2E54` (`commande_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `livraison_produit`
--
ALTER TABLE `livraison_produit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_69538245F347EFB` (`produit_id`),
  ADD KEY `IDX_69538245D8D16068` (`bon_livraison_id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_29A5EC277BEAFB00` (`sous_rubrique_id`),
  ADD KEY `IDX_29A5EC27670C757F` (`fournisseur_id`);

--
-- Index pour la table `rubrique`
--
ALTER TABLE `rubrique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sous_rubrique`
--
ALTER TABLE `sous_rubrique`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_87EA3D293BD38833` (`rubrique_id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_IDENTIFIER_EMAIL` (`email`),
  ADD KEY `IDX_1D1C63B37854071C` (`commercial_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `adresse_commande`
--
ALTER TABLE `adresse_commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `bon_de_livraison`
--
ALTER TABLE `bon_de_livraison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `commande_produit`
--
ALTER TABLE `commande_produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `livraison_produit`
--
ALTER TABLE `livraison_produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `rubrique`
--
ALTER TABLE `rubrique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `sous_rubrique`
--
ALTER TABLE `sous_rubrique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD CONSTRAINT `FK_C35F0816FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `adresse_commande`
--
ALTER TABLE `adresse_commande`
  ADD CONSTRAINT `FK_EF436174DE7DC5C` FOREIGN KEY (`adresse_id`) REFERENCES `adresse` (`id`),
  ADD CONSTRAINT `FK_EF4361782EA2E54` FOREIGN KEY (`commande_id`) REFERENCES `commande` (`id`),
  ADD CONSTRAINT `FK_EF43617D8D16068` FOREIGN KEY (`bon_livraison_id`) REFERENCES `bon_de_livraison` (`id`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_6EEAA67DFB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `commande_produit`
--
ALTER TABLE `commande_produit`
  ADD CONSTRAINT `FK_DF1E9E8782EA2E54` FOREIGN KEY (`commande_id`) REFERENCES `commande` (`id`),
  ADD CONSTRAINT `FK_DF1E9E87F347EFB` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `livraison_produit`
--
ALTER TABLE `livraison_produit`
  ADD CONSTRAINT `FK_69538245D8D16068` FOREIGN KEY (`bon_livraison_id`) REFERENCES `bon_de_livraison` (`id`),
  ADD CONSTRAINT `FK_69538245F347EFB` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_29A5EC27670C757F` FOREIGN KEY (`fournisseur_id`) REFERENCES `fournisseur` (`id`),
  ADD CONSTRAINT `FK_29A5EC277BEAFB00` FOREIGN KEY (`sous_rubrique_id`) REFERENCES `sous_rubrique` (`id`);

--
-- Contraintes pour la table `sous_rubrique`
--
ALTER TABLE `sous_rubrique`
  ADD CONSTRAINT `FK_87EA3D293BD38833` FOREIGN KEY (`rubrique_id`) REFERENCES `rubrique` (`id`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `FK_1D1C63B37854071C` FOREIGN KEY (`commercial_id`) REFERENCES `utilisateur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
