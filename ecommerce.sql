-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 04 Décembre 2014 à 17:35
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `auteur`, `editeur`, `categorie`, `image`, `date_edition`, `prix`) VALUES
(1, 'Eugénie Grandet', 'Honoré de Balzac', 'Gallimard', 'roman', 'eugenie_grandet.jpg', '2012-08-13', 10.5),
(2, 'Manifeste du parti communiste', 'Karl Marx', 'Edition sociale', 'sciences sociales', 'manifeste.jpg', '2013-02-11', 8.5),
(3, 'Germinal', 'Emile Zola', '\r\nHatier', 'roman', 'germinal.jpg', '2012-02-22', 12),
(4, 'Les misérables', 'Victor Hugo', 'Naxos Audiobooks', 'roman', 'miserables.jpg', '2013-09-02', 14.7),
(6, 'Socrate', 'Socrate', 'Socrate', 'philosophie', 'socrate_2.jpeg', '2014-12-02', 50),
(7, 'Éloge à l''amour', 'Alain Badiou avec Nicolas Truong', 'Flammarion', 'philosophie', 'badiou_eloge_amour.jpg', '2011-06-06', 5);

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
