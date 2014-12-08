-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 08 Décembre 2014 à 17:49
-- Version du serveur: 5.5.37-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `type`, `libelle`) VALUES
(1, '1', 'roman'),
(2, '2', 'politique');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE IF NOT EXISTS `commandes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date_commande` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Contenu de la table `commandes`
--

INSERT INTO `commandes` (`id`, `user_id`, `date_commande`) VALUES
(20, 1, '2014-12-08 10:01:08'),
(21, 1, '2014-12-08 10:35:07'),
(22, 1, '2014-12-08 10:39:37'),
(23, 1, '2014-12-08 10:48:00'),
(24, 1, '2014-12-08 10:50:02'),
(25, 1, '2014-12-08 10:52:04'),
(26, 1, '2014-12-08 10:53:06'),
(27, 1, '2014-12-08 10:55:51'),
(28, 1, '2014-12-08 12:16:44'),
(29, 1, '2014-12-08 12:18:03'),
(30, 1, '2014-12-08 12:30:41'),
(31, 1, '2014-12-08 12:41:14'),
(32, 1, '2014-12-08 12:41:46'),
(33, 1, '2014-12-08 12:49:59'),
(34, 1, '2014-12-08 12:50:28'),
(35, 1, '2014-12-08 12:55:57'),
(36, 1, '2014-12-08 15:26:18'),
(37, 10, '2014-12-08 15:54:03'),
(38, 11, '2014-12-08 16:04:51'),
(39, 12, '2014-12-08 16:11:22'),
(40, 1, '2014-12-08 16:27:28');

-- --------------------------------------------------------

--
-- Structure de la table `commande_produits`
--

CREATE TABLE IF NOT EXISTS `commande_produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_commande` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Contenu de la table `commande_produits`
--

INSERT INTO `commande_produits` (`id`, `id_commande`, `id_produit`, `quantite`) VALUES
(9, 20, 1, 2),
(10, 21, 10, 1),
(11, 22, 1, 1),
(12, 23, 10, 1),
(13, 24, 1, 1),
(14, 25, 2, 1),
(15, 26, 4, 1),
(16, 27, 1, 1),
(17, 27, 2, 2),
(18, 28, 1, 2),
(19, 28, 4, 1),
(20, 28, 11, 2),
(21, 29, 1, 1),
(22, 30, 1, 1),
(23, 34, 1, 1),
(24, 35, 1, 1),
(25, 36, 1, 2),
(26, 37, 1, 3),
(27, 37, 2, 1),
(28, 38, 1, 1),
(29, 39, 1, 2),
(30, 40, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `editeur` varchar(250) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_edition` date NOT NULL,
  `prix` float NOT NULL,
  `quantite` int(11) NOT NULL,
  `ean13` bigint(11) NOT NULL,
  `resume` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `auteur`, `editeur`, `categorie`, `image`, `date_edition`, `prix`, `quantite`, `ean13`, `resume`) VALUES
(1, 'Eugénie Grandet', 'Honoré de Balzac', 'Gallimard', 'Roman', 'eugenie_grandet.jpg', '2012-08-13', 10.5, 3, 12345, 'c''est un commentaire'),
(2, 'Manifeste du parti communiste', 'Karl Marx', 'Edition sociale', 'Sociologie', 'manifeste.jpg', '2013-02-11', 8.5, 4, 1234567890123, 'Le Manifeste du Parti communiste (en allemand : Manifest der Kommunistischen Partei) est un essai politico-philosophique commandé par la Ligue des communistes (ancienne Ligue des justes), et rédigé par le philosophe allemand Karl Marx.Écrit fin 1847 et début 1848 avec la participation de son ami Friedrich Engels et publié en février 1848, il a été diffusé à l''origine sous le titre Manifeste du Parti communiste, et il a ensuite été republié sous le titre Manifeste communiste.'),
(4, 'Les misérables', 'Victor Hugo', 'Naxos Audiobooks', 'Roman', 'miserables.jpg', '2013-09-02', 14.7, 0, 0, ''),
(10, 'Critique De La Raison Pure Ne', 'Emmanuel Kant ', 'Flammarion', 'psychologie', 'critique_raison_kant.jpg', '2014-12-01', 10.4, 0, 0, ''),
(11, 'Second Manifeste Pour La Philosophie', 'Alain Badiou avec Nicolas Truong', 'Nouvelles Lignes', 'sociologie', 'badiou_eloge_amour.jpg', '2013-08-09', 14, 0, 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `code` varchar(10) NOT NULL,
  `tel` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `password`, `adresse`, `pays`, `ville`, `code`, `tel`) VALUES
(1, 'vassigh', 'chidan', 'cvassigh@wanadoo.fr', 'vach', '146, rue Raymond Losserand', 'France', 'Paris', '75014', 145450155),
(3, 'vassigh', 'lila', 'lila@wanadoo.fr', 'lila', '146, rue Raymond Losserand', 'France', 'Paris', '75014', 145450155);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
