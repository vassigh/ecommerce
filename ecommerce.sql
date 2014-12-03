-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 01 Décembre 2014 à 18:18
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
-- Structure de la table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `editeur` varchar(250) NOT NULL,
  `categorie` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_edition` date NOT NULL,
  `prix` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `auteur`, `editeur`, `categorie`, `image`, `date_edition`, `prix`) VALUES
(1, 'Eugénie Grandet', 'Honoré de Balzac', 'Gallimard', 1, 'eugenie_grandet.jpg', '2012-08-13', 10.5),
(2, 'Manifeste du parti communiste', 'Karl Marx', 'Edition sociale', 2, 'manifeste.jpg', '2013-02-11', 8.5),
(3, 'Germinal', 'Emile Zola', '\r\nEditions Hatier-Date:1992 -63pp-Poche-Broché', 1, 'germinal.jpg', '2012-02-22', 12),
(4, 'Les misérables', 'Victor Hugo', 'Naxos Audiobooks', 1, 'miserables.jpg', '2013-09-02', 14.7);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `password`) VALUES
(1, 'vassigh', 'chidan', 'cvassigh@wanadoo.fr', 'vach'),
(2, 'vassigh', 'lila', 'lila@wanadoo.fr', 'lila');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
