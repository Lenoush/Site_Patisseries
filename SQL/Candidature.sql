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
-- Structure de la table `Candidature`
--

CREATE TABLE `Candidature` (
  `NumeroPostulant` int(11) DEFAULT NULL,
  `NumeroCandidature` int(11) NOT NULL,
  `DateDebut` date NOT NULL DEFAULT '2002-02-05',
  `TempsContrat` text,
  `TypeContrat` text,
  `Poste` text NOT NULL,
  `Disponibilité` text,
  `Message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Candidature`
--

INSERT INTO `Candidature` (`NumeroPostulant`, `NumeroCandidature`, `DateDebut`, `TempsContrat`, `TypeContrat`, `Poste`, `Disponibilité`, `Message`) VALUES
(21, 26, '2022-05-09', 'Temps Plein', 'Stage', 'technicien', 'Semaine Week-end Matin Journée', 'Attention je suis superbe ! '),
(21, 27, '2022-05-16', 'Temps Partiel', 'CDD', 'Serveuse', ' Week-end  ', ''),
(21, 28, '2022-05-23', 'Temps Plein', 'Alternance', 'Technicien', '   ', ''),
(21, 29, '2022-05-30', '', 'CDD', 'Service IT', '   ', ''),
(21, 30, '2022-05-31', '', '', 'Serveuse', '   ', ''), #Ici il n'y a que les attributs obligatoire. 
(22, 31, '2022-05-10', 'Temps Plein', 'CDI', 'Immobilier', '   ', ''),
(23, 32, '2022-05-17', '', 'CDD', 'technicien', '   ', 'VOITURE'),
(24, 33, '2022-06-02', 'Temps Plein', 'Alternance', 'poisson', '   ', 'Pk pas ');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Candidature`
--
ALTER TABLE `Candidature`
  ADD PRIMARY KEY (`NumeroCandidature`),
  ADD KEY `NumeroPostulant` (`NumeroPostulant`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Candidature`
--
ALTER TABLE `Candidature`
  MODIFY `NumeroCandidature` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Candidature`
--
ALTER TABLE `Candidature`
  ADD CONSTRAINT `candidature_ibfk_1` FOREIGN KEY (`NumeroPostulant`) REFERENCES `Postulant` (`Numero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
