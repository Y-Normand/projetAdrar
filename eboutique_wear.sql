-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 27 sep. 2021 à 06:33
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `eboutique_wear`
--

-- --------------------------------------------------------

--
-- Structure de la table `acheter`
--

DROP TABLE IF EXISTS `acheter`;
CREATE TABLE IF NOT EXISTS `acheter` (
  `id_vetement` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  KEY `fk_acheter_vetement` (`id_vetement`),
  KEY `fk_acheter_utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
CREATE TABLE IF NOT EXISTS `adresse` (
  `id_adresse` int(11) NOT NULL AUTO_INCREMENT,
  `nom_adresse` varchar(50) NOT NULL,
  `rue_adresse` varchar(250) NOT NULL,
  `complement_adresse` varchar(250) NOT NULL,
  `codepostal_adresse` varchar(50) NOT NULL,
  `ville_adresse` varchar(150) NOT NULL,
  `pays_adresse` varchar(150) NOT NULL,
  PRIMARY KEY (`id_adresse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ajouter`
--

DROP TABLE IF EXISTS `ajouter`;
CREATE TABLE IF NOT EXISTS `ajouter` (
  `id_vetement` int(11) NOT NULL,
  `id_panier` int(11) NOT NULL,
  KEY `fk_acheter_panier` (`id_panier`),
  KEY `fk_ajouter_vetement` (`id_vetement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `collection`
--

DROP TABLE IF EXISTS `collection`;
CREATE TABLE IF NOT EXISTS `collection` (
  `id_collection` int(11) NOT NULL AUTO_INCREMENT,
  `nom_collection` varchar(150) NOT NULL,
  `partenaire_collection` varchar(250) NOT NULL,
  PRIMARY KEY (`id_collection`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `confier`
--

DROP TABLE IF EXISTS `confier`;
CREATE TABLE IF NOT EXISTS `confier` (
  `id_panier` int(11) NOT NULL,
  `id_livraison` int(11) NOT NULL,
  KEY `fk_confier_panier` (`id_panier`),
  KEY `fk_confier_livraison` (`id_livraison`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `couleur`
--

DROP TABLE IF EXISTS `couleur`;
CREATE TABLE IF NOT EXISTS `couleur` (
  `id_couleur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_couleur` varchar(50) NOT NULL,
  PRIMARY KEY (`id_couleur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etre`
--

DROP TABLE IF EXISTS `etre`;
CREATE TABLE IF NOT EXISTS `etre` (
  `id_genreVet` int(11) NOT NULL,
  `id_vetement` int(11) NOT NULL,
  KEY `fk_etre_vetement` (`id_vetement`),
  KEY `fk_etre_genrevet` (`id_genreVet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `id_facture` int(11) NOT NULL AUTO_INCREMENT,
  `id_panier` int(11) NOT NULL,
  PRIMARY KEY (`id_facture`),
  KEY `fk_generer_facture` (`id_panier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `id_fournisseur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_fournisseur` varchar(250) NOT NULL,
  `telephone_fournisseur` int(11) NOT NULL,
  `email_fournisseur` varchar(250) NOT NULL,
  PRIMARY KEY (`id_fournisseur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `generer`
--

DROP TABLE IF EXISTS `generer`;
CREATE TABLE IF NOT EXISTS `generer` (
  `id_utilisateur` int(11) NOT NULL,
  `id_panier` int(11) NOT NULL,
  KEY `fk_generer_utilisateur` (`id_utilisateur`),
  KEY `fk_generer_panier` (`id_panier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `genrevet`
--

DROP TABLE IF EXISTS `genrevet`;
CREATE TABLE IF NOT EXISTS `genrevet` (
  `id_genreVet` int(11) NOT NULL AUTO_INCREMENT,
  `nom_genreVet` int(11) NOT NULL,
  PRIMARY KEY (`id_genreVet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `habiter`
--

DROP TABLE IF EXISTS `habiter`;
CREATE TABLE IF NOT EXISTS `habiter` (
  `id_utilisateur` int(11) NOT NULL,
  `id_adresse` int(11) NOT NULL,
  KEY `fk_habiter_utilisateur` (`id_utilisateur`),
  KEY `fk_habiter_adresse` (`id_adresse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `illustrer`
--

DROP TABLE IF EXISTS `illustrer`;
CREATE TABLE IF NOT EXISTS `illustrer` (
  `id_image` int(11) NOT NULL,
  `id_vetement` int(11) NOT NULL,
  KEY `fk_illustrer_image` (`id_image`),
  KEY `fk_illustrer_vetement` (`id_vetement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id_image` int(11) NOT NULL AUTO_INCREMENT,
  `nom_image` varchar(150) NOT NULL,
  `chemin_image` varchar(250) NOT NULL,
  PRIMARY KEY (`id_image`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `lier`
--

DROP TABLE IF EXISTS `lier`;
CREATE TABLE IF NOT EXISTS `lier` (
  `id_panier` int(11) NOT NULL,
  `id_statut` int(11) NOT NULL,
  KEY `fk_lier_panier` (`id_panier`),
  KEY `fk_lier_statut` (`id_statut`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `id_livraison` int(11) NOT NULL AUTO_INCREMENT,
  `entreprise_livraison` varchar(250) NOT NULL,
  `prix_livraison` decimal(10,0) NOT NULL,
  `delai_livraison` varchar(150) NOT NULL,
  PRIMARY KEY (`id_livraison`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `livrer`
--

DROP TABLE IF EXISTS `livrer`;
CREATE TABLE IF NOT EXISTS `livrer` (
  `id_fournisseur` int(11) NOT NULL,
  `id_vetement` int(11) NOT NULL,
  KEY `fk_livrer_vetement` (`id_vetement`),
  KEY `fk_livrer_fournisseur` (`id_fournisseur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `localiser`
--

DROP TABLE IF EXISTS `localiser`;
CREATE TABLE IF NOT EXISTS `localiser` (
  `id_fournisseur` int(11) NOT NULL,
  `id_adresse` int(11) NOT NULL,
  KEY `fk_localiser_adresse` (`id_adresse`),
  KEY `fk_localiser_fournisseur` (`id_fournisseur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id_panier` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_panier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `nom_role` int(11) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

DROP TABLE IF EXISTS `statut`;
CREATE TABLE IF NOT EXISTS `statut` (
  `id_statut` int(11) NOT NULL AUTO_INCREMENT,
  `nom_statut` varchar(50) NOT NULL,
  PRIMARY KEY (`id_statut`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `taille`
--

DROP TABLE IF EXISTS `taille`;
CREATE TABLE IF NOT EXISTS `taille` (
  `id_taille` int(11) NOT NULL AUTO_INCREMENT,
  `nom_taille` varchar(50) NOT NULL,
  `letter_taille` varchar(10) NOT NULL,
  PRIMARY KEY (`id_taille`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tailler`
--

DROP TABLE IF EXISTS `tailler`;
CREATE TABLE IF NOT EXISTS `tailler` (
  `id_taille` int(11) NOT NULL,
  `id_vetement` int(11) NOT NULL,
  KEY `fk_taille_tailler` (`id_taille`),
  KEY `fk_tailler_vetement` (`id_vetement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `teindre`
--

DROP TABLE IF EXISTS `teindre`;
CREATE TABLE IF NOT EXISTS `teindre` (
  `id_couleur` int(11) NOT NULL,
  `id_vetement` int(11) NOT NULL,
  KEY `fk_teindre_couleur` (`id_couleur`),
  KEY `fk_teindre_vetement` (`id_vetement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `nom_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_utilisateur` varchar(150) NOT NULL,
  `prenom_utilisateur` int(150) NOT NULL,
  `password_utilisateur` varchar(250) NOT NULL,
  `email_utilisateur` varchar(250) NOT NULL,
  `pseudo_utilisateur` varchar(150) NOT NULL,
  `id_role` int(11) NOT NULL,
  PRIMARY KEY (`id_utilisateur`),
  KEY `fk_assigner_utilisateur` (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `vetement`
--

DROP TABLE IF EXISTS `vetement`;
CREATE TABLE IF NOT EXISTS `vetement` (
  `id_vetement` int(11) NOT NULL AUTO_INCREMENT,
  `nom_vetement` varchar(150) NOT NULL,
  `description_vetement` text,
  `prix_vetement` decimal(10,0) NOT NULL,
  `quantite_vetement` int(11) DEFAULT NULL,
  `id_type` int(11) NOT NULL,
  `id_collection` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_vetement`),
  KEY `fk_posseder_type` (`id_type`),
  KEY `fk_associer_collection` (`id_collection`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `acheter`
--
ALTER TABLE `acheter`
  ADD CONSTRAINT `fk_acheter_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `fk_acheter_vetement` FOREIGN KEY (`id_vetement`) REFERENCES `vetement` (`id_vetement`);

--
-- Contraintes pour la table `ajouter`
--
ALTER TABLE `ajouter`
  ADD CONSTRAINT `fk_acheter_panier` FOREIGN KEY (`id_panier`) REFERENCES `panier` (`id_panier`),
  ADD CONSTRAINT `fk_ajouter_vetement` FOREIGN KEY (`id_vetement`) REFERENCES `vetement` (`id_vetement`);

--
-- Contraintes pour la table `confier`
--
ALTER TABLE `confier`
  ADD CONSTRAINT `fk_confier_livraison` FOREIGN KEY (`id_livraison`) REFERENCES `livraison` (`id_livraison`),
  ADD CONSTRAINT `fk_confier_panier` FOREIGN KEY (`id_panier`) REFERENCES `panier` (`id_panier`);

--
-- Contraintes pour la table `etre`
--
ALTER TABLE `etre`
  ADD CONSTRAINT `fk_etre_genrevet` FOREIGN KEY (`id_genreVet`) REFERENCES `genrevet` (`id_genreVet`),
  ADD CONSTRAINT `fk_etre_vetement` FOREIGN KEY (`id_vetement`) REFERENCES `vetement` (`id_vetement`);

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `fk_generer_facture` FOREIGN KEY (`id_panier`) REFERENCES `panier` (`id_panier`);

--
-- Contraintes pour la table `generer`
--
ALTER TABLE `generer`
  ADD CONSTRAINT `fk_generer_panier` FOREIGN KEY (`id_panier`) REFERENCES `panier` (`id_panier`),
  ADD CONSTRAINT `fk_generer_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `habiter`
--
ALTER TABLE `habiter`
  ADD CONSTRAINT `fk_habiter_adresse` FOREIGN KEY (`id_adresse`) REFERENCES `adresse` (`id_adresse`),
  ADD CONSTRAINT `fk_habiter_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `illustrer`
--
ALTER TABLE `illustrer`
  ADD CONSTRAINT `fk_illustrer_image` FOREIGN KEY (`id_image`) REFERENCES `image` (`id_image`),
  ADD CONSTRAINT `fk_illustrer_vetement` FOREIGN KEY (`id_vetement`) REFERENCES `vetement` (`id_vetement`);

--
-- Contraintes pour la table `lier`
--
ALTER TABLE `lier`
  ADD CONSTRAINT `fk_lier_panier` FOREIGN KEY (`id_panier`) REFERENCES `panier` (`id_panier`),
  ADD CONSTRAINT `fk_lier_statut` FOREIGN KEY (`id_statut`) REFERENCES `statut` (`id_statut`);

--
-- Contraintes pour la table `livrer`
--
ALTER TABLE `livrer`
  ADD CONSTRAINT `fk_livrer_fournisseur` FOREIGN KEY (`id_fournisseur`) REFERENCES `fournisseur` (`id_fournisseur`),
  ADD CONSTRAINT `fk_livrer_vetement` FOREIGN KEY (`id_vetement`) REFERENCES `vetement` (`id_vetement`);

--
-- Contraintes pour la table `localiser`
--
ALTER TABLE `localiser`
  ADD CONSTRAINT `fk_localiser_adresse` FOREIGN KEY (`id_adresse`) REFERENCES `adresse` (`id_adresse`),
  ADD CONSTRAINT `fk_localiser_fournisseur` FOREIGN KEY (`id_fournisseur`) REFERENCES `fournisseur` (`id_fournisseur`);

--
-- Contraintes pour la table `tailler`
--
ALTER TABLE `tailler`
  ADD CONSTRAINT `fk_taille_tailler` FOREIGN KEY (`id_taille`) REFERENCES `taille` (`id_taille`),
  ADD CONSTRAINT `fk_tailler_vetement` FOREIGN KEY (`id_vetement`) REFERENCES `vetement` (`id_vetement`);

--
-- Contraintes pour la table `teindre`
--
ALTER TABLE `teindre`
  ADD CONSTRAINT `fk_teindre_couleur` FOREIGN KEY (`id_couleur`) REFERENCES `couleur` (`id_couleur`),
  ADD CONSTRAINT `fk_teindre_vetement` FOREIGN KEY (`id_vetement`) REFERENCES `vetement` (`id_vetement`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `fk_assigner_utilisateur` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);

--
-- Contraintes pour la table `vetement`
--
ALTER TABLE `vetement`
  ADD CONSTRAINT `fk_associer_collection` FOREIGN KEY (`id_collection`) REFERENCES `collection` (`id_collection`),
  ADD CONSTRAINT `fk_posseder_type` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
