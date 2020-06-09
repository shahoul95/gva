-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 12 mai 2019 à 21:43
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `serveur_paiement`
--

-- --------------------------------------------------------

--
-- Structure de la table `banque`
--

DROP TABLE IF EXISTS `banque`;
CREATE TABLE IF NOT EXISTS `banque` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `numero_carte` varchar(255) NOT NULL,
  `mois_expire` varchar(255) NOT NULL,
  `annee_expire` varchar(255) NOT NULL,
  `cryptogramme` varchar(255) NOT NULL,
  `argent_dispo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `banque`
--

INSERT INTO `banque` (`id`, `numero_carte`, `mois_expire`, `annee_expire`, `cryptogramme`, `argent_dispo`) VALUES
(49, '123456799123', '12', '20', '$2y$10$mqlWLYsyxDOb7pjAErhgr.9lkAB7nNbbElTjS6OjSFpa6q1wHkRzK', '2700'),
(50, '123456799128', '12', '20', '$2y$10$e1wx.3JT/bIajVcN4KAjdODONp.E/clIcJlku08xLNIY/4bM7Sll.', '300');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
