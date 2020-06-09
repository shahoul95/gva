-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 12 mai 2019 à 21:42
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
-- Base de données :  `vehicule`
--

-- --------------------------------------------------------

--
-- Structure de la table `aeroport`
--

DROP TABLE IF EXISTS `aeroport`;
CREATE TABLE IF NOT EXISTS `aeroport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `pays` text NOT NULL,
  `identifiant` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `aeroport`
--

INSERT INTO `aeroport` (`id`, `nom`, `pays`, `identifiant`) VALUES
(1, 'Aeroport De Paris', 'France', 'Europe'),
(2, 'Aeroport de Marseille', 'France', 'Europe'),
(3, 'Aeroport de bern', 'Suisse', 'Europe'),
(5, 'Aeroport de Francisco', 'Amerique', 'Etat-Unis'),
(6, 'Aeroport de Washington', 'Amerique', 'Etat-Unis'),
(7, 'Aeroport de Rome', 'Italie', 'Afrique');

-- --------------------------------------------------------

--
-- Structure de la table `date_reserve`
--

DROP TABLE IF EXISTS `date_reserve`;
CREATE TABLE IF NOT EXISTS `date_reserve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_retrait` datetime NOT NULL,
  `date_retour` datetime NOT NULL,
  `vehicule` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `telephone` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `lieu_retrait` varchar(255) NOT NULL,
  `lieu_retour` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vehicule` (`vehicule`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `date_reserve`
--

INSERT INTO `date_reserve` (`id`, `date_retrait`, `date_retour`, `vehicule`, `prenom`, `nom`, `date_naissance`, `telephone`, `adresse`, `mail`, `lieu_retrait`, `lieu_retour`, `prix`) VALUES
(1, '2019-01-23 04:13:44', '2019-02-14 08:34:00', 1, '', '', NULL, '', '', '', '', '', ''),
(2, '2019-01-13 09:00:00', '2019-01-20 16:00:00', 1, '', '', NULL, '', '', '', '', '', ''),
(3, '2019-02-25 07:22:00', '2019-02-28 05:02:36', 1, '', '', NULL, '', '', '', '', '', ''),
(4, '2019-01-08 06:21:00', '2019-01-16 12:42:00', 5, '', '', NULL, '', '', '', '', '', ''),
(5, '2019-04-10 19:00:00', '2019-04-20 20:00:00', 18, '', '', NULL, '', '', '', '', '', ''),
(6, '2019-04-09 10:00:00', '2019-04-24 08:13:43', 10, '', '', NULL, '', '', '', '', '', ''),
(7, '2019-05-10 00:00:00', '2019-05-25 00:00:00', 13, 'Shahoul', 'Shaik', '2019-05-23', '0782077158', '15 rue du tiers-pot', 'shahoul95@gmail.com', 'Aeroport de Paris', 'Aeroprt de Marseille', '1500'),
(8, '2019-05-05 22:59:00', '2019-05-08 22:01:00', 15, 'M. Shahoul', 'Shaik', '2019-05-19', '0130133101', '15 rue du tiers-pot 95140 Garges-les-Gonesse', 'shahoul95@gmail.com', 'Aeroport de bern, Suisse,Europe', 'Aeroport De Paris, France,Europe', '200'),
(9, '2019-05-05 22:59:00', '2019-05-08 22:01:00', 15, 'M. shahoul', 'Shaik', '2019-02-06', '0782077158', '15 rue du tiers-pot 95140 Garges-les-Gonesse', 'shahoul95@gmail.com', 'Aeroport de bern, Suisse,Europe', 'Aeroport De Paris, France,Europe', '200'),
(10, '2019-05-05 22:59:00', '2019-05-08 22:01:00', 15, 'M. shahoul', 'Shaik', '2019-02-06', '0782077158', '15 rue du tiers-pot 95140 Garges-les-Gonesse', 'shahoul95@gmail.com', 'Aeroport de bern, Suisse,Europe', 'Aeroport De Paris, France,Europe', '200'),
(11, '2019-05-12 22:58:00', '2019-05-14 22:58:00', 15, 'M. imrane', 'shaik', '2019-05-19', '0130133101', '15 rue du tiers 95140 garges', 'shahoul95@', 'Aeroport De Paris, France,Europe', 'Aeroport de Marseille, France,Europe', '200');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

DROP TABLE IF EXISTS `voiture`;
CREATE TABLE IF NOT EXISTS `voiture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marque` varchar(50) NOT NULL,
  `modele` varchar(50) NOT NULL,
  `carburant` varchar(50) NOT NULL,
  `boite` varchar(50) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `places` int(5) NOT NULL,
  `image` varchar(50) NOT NULL,
  `prix` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`id`, `marque`, `modele`, `carburant`, `boite`, `categorie`, `places`, `image`, `prix`) VALUES
(1, 'Peugeot', '208', 'Diesel', 'Manuelle', 'Berline', 5, '1.png', 100),
(2, 'Fiat', '500', 'Essence', 'Automatique', 'Coupé', 2, '2.png', 110),
(3, 'Opel', 'Mokka', 'Diesel', 'Manuelle', 'SUV', 5, '3.png', 150),
(4, 'BMW', 'Série 3', 'Essence', 'Automatique', 'Berline', 5, '4.png', 140),
(5, 'Mercedes-Benz', 'Classe E', 'Essence', 'Automatique', 'Berline', 5, '5.png', 140),
(6, 'Ford', 'Mustang', 'Essence', 'Manuelle', 'Coupé', 2, '6.png', 120),
(7, 'Jaquar', 'F-Type Cabrio', 'Manuelle', 'Automatique', 'Coupé', 2, '7.png', 200),
(8, 'Maserati', 'Ghibli', 'Essence', 'Manuelle', 'Coupé', 5, '8.png', 140),
(9, 'Mercedes-Benz', 'Classe A', 'Diesel', 'Automatique', 'Berline', 5, '9.png', 190),
(10, 'Porsche', 'Cayenne', 'Essence', 'Automatique', 'SUV', 5, '10.png', 140),
(11, 'Renault', 'Grand Scenic', 'Diesel', 'Manuelle', 'Monospace', 5, '11.png', 110),
(12, 'Renault', 'Megane', 'Diesel', 'Automatique', 'Monospace', 5, '12.png', 170),
(13, 'Jeep', 'Compass', 'Essence', 'Automatique', 'Monospace', 5, '13.png', 140),
(14, 'Peugeot', '5008', 'Diesel', 'Automatique', 'Monospace', 5, '14.png', 140),
(15, 'Opel', 'Vivaro', 'Diesel', 'Automatique', 'Monospace', 5, '15.png', 100),
(16, 'Mercedes-Benz', 'Classs V', 'Essence', 'Manuelle', 'Monospace', 5, '16.png', 130),
(17, 'Audi', 'A1', 'Essence', 'Automatique', 'Berline', 5, '17.png', 300),
(18, 'Opel', 'Astra', 'Essence', 'Manuelle', 'Berline', 5, '18.png', 140),
(19, 'Renault', 'Talisman', 'Essence', 'Automatique', 'Monospace', 5, '19.png', 140),
(20, 'Maserati', 'Levante', 'Essence', 'Automatique', 'SUV', 5, '20.png', 100);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `date_reserve`
--
ALTER TABLE `date_reserve`
  ADD CONSTRAINT `disponibilites` FOREIGN KEY (`vehicule`) REFERENCES `voiture` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
