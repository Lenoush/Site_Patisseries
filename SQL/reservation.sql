-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 02 mai 2022 à 13:51
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `reservation`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservation_table`
--

DROP TABLE IF EXISTS `reservation_table`;
CREATE TABLE IF NOT EXISTS `reservation_table` (
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Mail` text NOT NULL,
  `Choix1` varchar(50) NOT NULL,
  `Qte1` int(50) NOT NULL,
  `Choix2` varchar(50) NOT NULL,
  `Qte2` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation_table`
--

INSERT INTO `reservation_table` (`Nom`, `Prenom`, `Mail`, `Choix1`, `Qte1`, `Choix2`, `Qte2`) VALUES
('mar', '', '', '', 0, '', 0),
('youpi', '', '', '', 0, '', 0),
('hihi', '', '', '', 0, '', 0),
('youpi', '', '', '', 0, '', 0),
('youpiiiitralalaloulou', '', '', '', 0, '', 0),
('gibi', '', '', '', 0, '', 0),
('gibi', 'damour', '', '', 0, '', 0),
('riri', 'fifi', '', '', 0, '', 0),
('riri', 'fifi', 'r@r', '', 0, '', 0),
('po', 'lo', 'lopo@gmail', 'Fondant aux framboises', 1, 'Tartelette gourmande au citron', 1),
('mar', 'juju', 'juju@mail.com', 'Tartelette gourmande au citron', 8, 'Liste de nos Patisseries', 1),
('mar', 'Lisa', 'lisa@gmail', 'Liste de nos Patisseries', 1, 'Liste de nos Patisseries', 1),
('mar', 'sab', 'sab@mail', 'Tartelette gourmande aux framboises', 5, 'La forÃªt noire revisitÃ©e', 1),
('mar', 'sab', 'sab@mail', 'Tartelette gourmande aux framboises', 5, 'La forÃªt noire revisitÃ©e', 1),
('marciaux', 'lisa', 'mai@sg', 'Le fruit princie', 1, 'Liste de nos Patisseries', 1),
('lili', 'lili', 'mail@gom.com', 'La forÃªt noire revisitÃ©e', 1, 'Liste de nos Patisseries', 1),
('lili', 'lili', 'mail@gom.com', 'La forÃªt noire revisitÃ©e', 1, 'Liste de nos Patisseries', 1),
('lili', 'lili', 'mail@gom.com', 'La forÃªt noire revisitÃ©e', 1, 'Liste de nos Patisseries', 1),
('lili', 'lili', 'mail@gom.com', 'La forÃªt noire revisitÃ©e', 1, 'Liste de nos Patisseries', 1),
('lili', 'lili', 'mail@gom.com', 'La forÃªt noire revisitÃ©e', 1, 'Liste de nos Patisseries', 1),
('lili', 'lili', 'mail@gom.com', 'La forÃªt noire revisitÃ©e', 1, 'Liste de nos Patisseries', 1),
('zofei', 'zoefh', 'zofeih@zoegih', 'Liste de nos Patisseries', 1, 'Liste de nos Patisseries', 1),
('zofei', 'zoefh', 'zofeih@zoegih', 'Liste de nos Patisseries', 1, 'Liste de nos Patisseries', 1);

-- --------------------------------------------------------

--
-- Structure de la table `table_reservation`
--

DROP TABLE IF EXISTS `table_reservation`;
CREATE TABLE IF NOT EXISTS `table_reservation` (
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Mail` text NOT NULL,
  `Dat` date NOT NULL,
  `Choix1` varchar(50) NOT NULL,
  `Qte1` int(50) NOT NULL,
  `Choix2` varchar(50) NOT NULL,
  `Qte2` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
