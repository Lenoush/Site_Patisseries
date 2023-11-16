-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 02 mai 2022 à 14:56
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `TestPatiserie`
--

-- --------------------------------------------------------

--
-- Structure de la table `Postulant`
--

CREATE TABLE `Postulant` (
  `Numero` int(11) NOT NULL,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Mail` text NOT NULL,
  `Telephone` int(10) NOT NULL,
  `Langues` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Postulant`
--

INSERT INTO `Postulant` (`Numero`, `Nom`, `Prenom`, `Mail`, `Telephone`, `Langues`) VALUES
(21, 'Oudjman', 'Lena', 'Lenaoudjman@yahoo.fr', 666215710, ''),
(22, 'Voity', 'Gab', 'Gab.V@gmail.fr', 987654321, ''),
(23, 'Ohayon', 'David', 'Ohayon@gmail.com', 897675643, 'Francais (natale) / Anglais (B2)'),
(24, 'Poisson', 'Miguel', 'P.M@gmail.com', 986745231, '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Postulant`
--
ALTER TABLE `Postulant`
  ADD PRIMARY KEY (`Numero`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Postulant`
--
ALTER TABLE `Postulant`
  MODIFY `Numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
