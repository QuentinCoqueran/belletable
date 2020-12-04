-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 04 déc. 2020 à 12:36
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `qcm_belle_table`
--

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `idq` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` text NOT NULL,
  `niveau` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idq`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`idq`, `libelle`, `niveau`) VALUES
(1, 'Lequel des langages informatiques suivants est utilisé pour l’intelligence artificielle?', 1),
(2, 'Le cerveau de tout système informatique est _________?', 1),
(3, 'Quel protocole fournit un service de messagerie entre différents hôtes?', 1),
(4, 'Le microprocesseur a été introduit dans quelle génération d’ordinateur?', 1),
(5, 'Un programme qui convertit le langage assembleur en langage machine est appelé _______?', 1),
(6, 'Le système binaire utilise la base ______?', 1),
(7, 'Lequel des langages suivants est mieux adapté au programmation structuré?', 1),
(8, 'ASCII signifie _______?', 1),
(9, 'Laquelle des mémoires suivantes est non volatile?', 1),
(10, 'GUI signifie _______?', 1),
(11, 'Toute donnée ou instruction entrée dans la mémoire d’un ordinateur est considérée comme _____?', 1),
(12, 'Le temps pendant lequel une tâche est traitée par l’ordinateur est appelé _______?', 1),
(13, 'Lequel des circuits suivants est utilisé comme « Périphériques de mémoire » sur les ordinateurs?', 1),
(14, 'Lequel des énoncés suivants est faux?', 1),
(15, 'Pour indiquer à Excel que nous voulons entré une formule dans une cellule, nous devons commencer par un opérateur tel que _______?', 1),
(16, 'Une erreur est aussi appelée _________?', 2),
(17, 'Lequel des éléments suivants n’est pas un package d’application?', 2),
(18, 'Microsoft Word est un exemple de _________?', 2),
(19, 'La taille du mémoire des ordinateurs mainframe et de technologie avancée s’exprime en _________?', 2),
(20, 'La communication offerte par TCP est _________?', 2),
(21, 'Lequel des éléments suivants est le complément à 1 de 10?', 2),
(22, 'Quelle partie interprète les instructions du programme et lance les opérations de contrôle?', 2),
(23, 'Les pistes d’un disque accessibles sans repositionner les têtes R/W sont appelés ______?', 2),
(24, 'HTTP est un protocole situé dans la ________?', 2),
(25, 'Le temps pendant lequel une pièce d’équipement fonctionne est appelé ________?', 2),
(26, 'Dans un réseau, les ressources HTTP sont localisées par______?', 2),
(27, 'Le nom appliqué par Intel corp. à la technologie haute vitesse MOS est appelée______?', 2),
(28, 'Le client DNS s’appelle______?', 2),
(29, 'DHCP est utilisé dans______?', 2);

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

DROP TABLE IF EXISTS `reponse`;
CREATE TABLE IF NOT EXISTS `reponse` (
  `idr` int(11) NOT NULL AUTO_INCREMENT,
  `idq` int(11) NOT NULL,
  `libelle` text NOT NULL,
  `ok` int(11) NOT NULL,
  PRIMARY KEY (`idr`)
) ENGINE=MyISAM AUTO_INCREMENT=141 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reponse`
--

INSERT INTO `reponse` (`idr`, `idq`, `libelle`, `ok`) VALUES
(1, 1, 'C', 0),
(2, 1, 'COBOL', 0),
(3, 1, 'PROLOG', 1),
(4, 1, 'FORTRAN', 0),
(5, 2, 'CPU', 1),
(6, 2, 'Mémoire', 0),
(7, 2, 'Unité de contrôle', 0),
(8, 2, 'Unité arithmétique et logique – UAL', 0),
(9, 3, 'FTP', 0),
(10, 3, 'TELNET', 0),
(11, 3, 'SMTP', 1),
(12, 3, 'SNMP', 0),
(13, 4, 'Deuxième génération', 0),
(14, 4, 'Quatrième génération', 1),
(15, 4, 'les deux A et B sont vrais', 0),
(16, 4, 'Troisième génération', 0),
(17, 5, 'Assembleur', 1),
(18, 5, 'Interprèteur', 0),
(19, 5, 'Compilateur', 0),
(20, 5, 'Comparateur', 0),
(21, 6, '2', 1),
(22, 6, '10', 0),
(23, 6, '8', 0),
(24, 6, '16', 0),
(25, 7, 'PL/SQL', 0),
(26, 7, 'FORTRAN', 0),
(27, 7, 'PASCAL', 1),
(28, 7, 'PROLOG', 0),
(29, 8, 'American standard code for information interchange', 1),
(30, 8, 'All purpose scientific code for information interchange', 0),
(31, 8, 'American security code for information interchange', 0),
(32, 8, 'American Scientific code for information interchange', 0),
(33, 9, 'SRAM', 0),
(34, 9, 'DRAM\r\n\r\n', 0),
(35, 9, 'ROM', 1),
(36, 9, 'Tout les réponses sont vraies', 0),
(37, 10, 'Graph Use Interface', 0),
(38, 10, 'Graphical Universal Interface', 0),
(39, 10, 'Graphical User Interface', 1),
(40, 10, 'Graphical Unique Interface', 0),
(41, 11, 'Stockage', 0),
(42, 11, 'Sortie', 0),
(43, 11, 'Entrée', 1),
(44, 11, 'Information', 0),
(45, 12, 'Temps d’exécution', 1),
(46, 12, 'Temporisation', 0),
(47, 12, 'Temps réel', 0),
(48, 12, 'Temps d’attente', 0),
(49, 13, 'Flip Flop', 1),
(50, 13, 'Comparator', 0),
(51, 13, 'Attenuator', 0),
(52, 13, 'Aucune de ces réponses n’est vraie.', 0),
(53, 14, 'Photoshop est un outil de conception graphique par Adobe', 0),
(54, 14, 'Linux est un logiciel libre et open source', 0),
(55, 14, 'Linux est vendu par Microsoft', 1),
(56, 14, 'Windows XP est un système d’exploitation', 0),
(57, 15, '$', 0),
(58, 15, '#', 0),
(59, 15, '=', 1),
(60, 15, '+', 0),
(61, 16, 'Bug', 1),
(62, 16, 'Debug', 0),
(63, 16, 'Curseur', 0),
(64, 16, 'Icon', 0),
(65, 17, 'Open Office', 0),
(66, 17, 'Adobe Pagemaker', 0),
(67, 17, 'Microsoft Office', 0),
(68, 17, 'Red Hat Linux', 1),
(69, 18, 'Système d’exploitation', 0),
(70, 18, 'Dispositif de traitement', 0),
(71, 18, 'Logiciel applicatif', 1),
(72, 18, 'Périphérique d’entrée', 0),
(73, 19, 'Octets', 0),
(74, 19, 'Kilo Octets', 0),
(75, 19, 'Bits', 0),
(76, 19, 'Mega Octets', 1),
(77, 20, 'Full-duplex', 1),
(78, 20, 'Half-duplex\r\n\r\n', 0),
(79, 20, 'Semi-duplex', 0),
(80, 20, 'Octet par octet', 0),
(81, 21, '01', 1),
(82, 21, '110', 0),
(83, 21, '11', 0),
(84, 21, '10', 0),
(85, 22, 'Unité de stockage', 0),
(86, 22, 'Unité logique', 0),
(87, 22, 'Unité de contrôle', 1),
(88, 22, 'Aucune de ces réponses n’est vraie.', 0),
(89, 23, 'Surface', 0),
(90, 23, 'Cylindre', 1),
(91, 23, 'Cluster', 0),
(92, 23, 'Tout les réponses sont vraies.', 0),
(93, 24, 'Couche d’application', 1),
(94, 24, 'Couche de transport', 0),
(95, 24, 'Couche réseau', 0),
(96, 24, 'Aucune de ces réponses n’est vraie.', 0),
(97, 25, 'Temps de recherche', 0),
(98, 25, 'Temps effectif', 1),
(99, 25, 'Temps d’accès', 0),
(100, 25, 'Temps réel', 0),
(101, 26, 'Identificateur de Ressource Uniforme (URI)', 1),
(102, 26, 'Localisateur de Ressources Unique (LRU)', 0),
(103, 26, 'Identifiant Unique de Ressource (IUR)', 0),
(104, 26, 'Aucune de ces réponses n’est vraie.', 0),
(105, 27, 'HDLC', 0),
(106, 27, 'LAP', 0),
(107, 27, 'HMOS', 1),
(108, 27, 'SDLC', 0),
(109, 28, 'DNS updater', 0),
(110, 28, 'DNS resolver', 1),
(111, 28, 'DNS handler', 0),
(112, 28, 'Aucune de ces réponses n’est vraie.', 0),
(113, 29, 'IPv6', 0),
(114, 29, 'IPv4', 0),
(115, 29, 'IPv6 et IPv4', 1),
(116, 29, 'Aucune de ces réponses n’est vraie.', 0);

-- --------------------------------------------------------

--
-- Structure de la table `resultats`
--

DROP TABLE IF EXISTS `resultats`;
CREATE TABLE IF NOT EXISTS `resultats` (
  `idres` int(11) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `note` int(11) NOT NULL,
  `niveau` int(11) DEFAULT NULL,
  PRIMARY KEY (`idres`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `resultats`
--

INSERT INTO `resultats` (`idres`, `login`, `date`, `note`, `niveau`) VALUES
(1, 'toto', '2020-01-31 10:39:23', 2, NULL),
(2, 'toto', '2020-01-31 11:31:34', 1, NULL),
(3, 'toto', '2020-01-31 11:38:24', 2, NULL),
(4, 'toto', '2020-01-31 11:58:53', 3, 2),
(5, 'jean', '2020-01-31 12:00:04', 5, 1),
(6, 'jean', '2020-01-31 12:12:06', 3, 2),
(7, 'jean', '2020-02-14 09:22:35', 4, 2),
(8, 'toto', '2020-02-14 09:31:13', 2, 1),
(9, 'toto', '2020-02-14 09:36:52', 0, 1),
(10, '123', '2020-02-14 09:41:58', 1, 1),
(11, '', '2020-09-11 14:00:40', 3, 1),
(12, '123', '2020-09-11 14:01:53', 4, 1),
(13, '123', '2020-09-11 14:06:24', 2, 1),
(14, '123', '2020-09-11 14:06:46', 0, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
