-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 04 déc. 2020 à 12:35
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
-- Base de données : `belletable`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reference` text NOT NULL,
  `quantite_dispo` int(11) NOT NULL,
  `conditionnement` text NOT NULL,
  `prix_vente` int(11) NOT NULL,
  `prix_location` int(11) NOT NULL,
  `remarque` text,
  `designation` text NOT NULL,
  `tva` int(11) NOT NULL,
  `statut` int(11) NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `reference`, `quantite_dispo`, `conditionnement`, `prix_vente`, `prix_location`, `remarque`, `designation`, `tva`, `statut`, `img`) VALUES
(1, 'REF1', 12, 'pack de 10', 15, 2, 'coucou', 'Jeu de couverts a pois', 20, 1, 'couvertspois.jpeg'),
(2, 'REF 2', 11, 'Pack de 100', 70, 10, 'coucou', 'Lot d\'assiettes carrees', 20, 1, 'assiettescarres.jpeg'),
(3, 'REF3', 10, 'Lot de 10', 25, 3, 'hello', 'Verres carrees', 20, 1, 'verrescarree.jpeg'),
(4, 'REF4', 15, 'Lot 15 ', 15, 4, 'dodod', 'Assiettes creuses', 20, 1, 'assiettescreuse.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `commandes_achat`
--

DROP TABLE IF EXISTS `commandes_achat`;
CREATE TABLE IF NOT EXISTS `commandes_achat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `statut` text NOT NULL,
  `prix_ht` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `ido` int(11) NOT NULL AUTO_INCREMENT,
  `intitule` text NOT NULL,
  `description` varchar(3000) DEFAULT NULL,
  `datepub` datetime NOT NULL,
  `categorie` text NOT NULL,
  PRIMARY KEY (`ido`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `jobs`
--

INSERT INTO `jobs` (`ido`, `intitule`, `description`, `datepub`, `categorie`) VALUES
(1, 'recherche dev PHP blabla', NULL, '2020-02-07 07:41:55', 'Informatique'),
(2, 'Recherche commercial blabla', NULL, '2020-02-13 15:27:05', 'Commerce');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(25) CHARACTER SET utf8 NOT NULL,
  `mdp` varchar(20) CHARACTER SET utf8 NOT NULL,
  `nom` varchar(20) CHARACTER SET utf8 NOT NULL,
  `prenom` varchar(20) CHARACTER SET utf8 NOT NULL,
  `mail` varchar(50) CHARACTER SET utf8 NOT NULL,
  `numero` int(20) NOT NULL,
  `adm` int(11) NOT NULL,
  `rue` text CHARACTER SET utf8 NOT NULL,
  `code_postal` int(5) NOT NULL,
  `ville` text NOT NULL,
  PRIMARY KEY (`id`,`login`,`numero`,`mail`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `mdp`, `nom`, `prenom`, `mail`, `numero`, `adm`, `rue`, `code_postal`, `ville`) VALUES
(5, '123', '123', 'el ghoul', 'elias', '123@gmail.com', 1234567890, 0, '', 0, ''),
(6, 'test', '123', '***', '***', '***', 4540, 1, '', 0, ''),
(7, 'quentin', 'Quentin92', 'Dupont', 'GÃ©rard', 'quen@live.fr', 90909088, 0, '14 avenue defrance', 94230, 'Cachan');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
