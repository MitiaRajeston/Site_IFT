-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 14 Mai 2024 à 16:32
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `universite`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE IF NOT EXISTS `etudiants` (
  `id_etudiant` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Date_de_naissance` date NOT NULL,
  `Filiere` varchar(50) NOT NULL,
  `Telephone` int(11) NOT NULL,
  `Adresse` varchar(50) NOT NULL,
  PRIMARY KEY (`id_etudiant`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `etudiants`
--

INSERT INTO `etudiants` (`id_etudiant`, `Nom`, `Prenom`, `Date_de_naissance`, `Filiere`, `Telephone`, `Adresse`) VALUES
(1, 'Fabien', 'Rzf', '2024-05-12', 'Informatique', 329913945, 'Region'),
(2, 'Leondo', 'Lebniz', '2024-04-30', 'Informatique', 329161052, 'Mangarano'),
(3, 'Lorna ', 'Leslie', '2024-05-31', 'Informatique', 329913945, 'Melville'),
(4, 'Jose ', 'Fidelice', '2003-05-29', 'Informatique', 385321347, 'Mangarano');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
