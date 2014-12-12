-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 09 Décembre 2014 à 16:40
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

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
(40, 1, '2014-12-08 16:27:28'),
(41, 1, '2014-12-08 17:04:28'),
(42, 1, '2014-12-09 08:26:18'),
(43, 1, '2014-12-09 09:23:40'),
(44, 1, '2014-12-09 09:30:27'),
(45, 1, '2014-12-09 09:53:24'),
(46, 1, '2014-12-09 09:54:55'),
(47, 1, '2014-12-09 10:06:45'),
(48, 1, '2014-12-09 10:07:08'),
(49, 1, '2014-12-09 10:07:56'),
(50, 1, '2014-12-09 10:08:53'),
(51, 1, '2014-12-09 10:35:53'),
(52, 1, '2014-12-09 11:05:24'),
(53, 1, '2014-12-09 11:23:12'),
(54, 1, '2014-12-09 11:24:03'),
(55, 1, '2014-12-09 11:25:04'),
(56, 1, '2014-12-09 11:28:41'),
(57, 1, '2014-12-09 14:30:07');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

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
(30, 40, 1, 1),
(31, 41, 1, 1),
(32, 42, 1, 1),
(33, 43, 1, 4),
(34, 44, 1, 1),
(35, 45, 2, 1),
(36, 46, 1, 1),
(37, 47, 1, 1),
(38, 48, 1, 1),
(39, 49, 1, 1),
(40, 50, 1, 1),
(41, 51, 1, 1),
(42, 52, 2, 1),
(43, 53, 10, 1),
(44, 54, 10, 1),
(45, 55, 1, 1),
(46, 56, 1, 1),
(47, 57, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `editeur` varchar(250) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_edition` date NOT NULL,
  `prix` float NOT NULL,
  `quantite` int(11) NOT NULL,
  `ean13` bigint(11) NOT NULL,
  `resume` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `auteur`, `editeur`, `categorie`, `image`, `date_edition`, `prix`, `quantite`, `ean13`, `resume`) VALUES
(1, 'Eugénie Grandet', 'Honoré de Balzac', 'Gallimard', 'Roman', 'eugenie_grandet.jpg', '2012-08-13', 10.5, 12, 12345, 'A Saumur, Félix Grandet ( le père Grandet) s''est constitué, grâce à de nombreuses spéculations foncières, une fortune qui n''a d''égal que son avarice. Il règne en tyran sur son entourage : sa femme, sa fille unique, Eugènie, et sa servante Nanon. Il enferme tout à clé, et rationne toute la maisonnée.                '),
(2, 'Manifeste du parti communiste', 'Karl Marx', 'Edition sociale', 'Sociologie', 'manifeste.jpg', '2013-02-11', 8.5, 3, 1234567890123, 'Le Manifeste du Parti communiste (en allemand : Manifest der Kommunistischen Partei) est un essai politico-philosophique commandé par la Ligue des communistes (ancienne Ligue des justes), et rédigé par le philosophe allemand Karl Marx.Écrit fin 1847 et début 1848 avec la participation de son ami Friedrich Engels et publié en février 1848, il a été diffusé à l''origine sous le titre Manifeste du Parti communiste, et il a ensuite été republié sous le titre Manifeste communiste.'),
(4, 'Les misérables', 'Victor Hugo', 'Naxos Audiobooks', 'Roman', 'miserables.jpg', '2013-09-02', 14.7, 6, 2345654312786, 'Cette œuvre est bâtie en cinq parties et le récit s''organise au tour de Jean Valjean, ancien forçat, depuis sa sortie de prison en 1815 jusqu''à sa mort, en 1833, dans les bras de Cosette et de Marius. Mais autour de Jean Valjean, apparaissent aussi les destinées d''autres misérables ; Fantine, ouvrière obligée de confier Cosette, sa fille, à des inconnus, les Thénardier qui la traiteront comme un esclave. Marius, qui tombe amoureux de Cosette, et qui s''engagera sur les barricades lors de l''insurrection de 1832. Gavroche, gamin de Paris, qui sera tué, en chantant, sur une barricade.        '),
(10, 'Critique De La Raison Pure', 'Emmanuel Kant ', 'Flammarion', 'psychologie', 'critique_raison_kant.jpg', '2014-12-01', 10.4, 14, 1234, 'Celui qui aime la vie spéculative n’a pas de plus grand désir que de trouver dans l’approbation d’un juge éclairé et compétent un puissant encouragement à des efforts qui sont loin d’être sans utilité, quoique cette utilité soit éloignée, et que, pour cette raison, elle soit tout à fait méconnue du vulgaire[2].\n\nTel est le juge auquel je dédie aujourd’hui cet ouvrage ; je le recommande à sa bienveillante attention[3], je place sous sa protection tous les autres intérêts de ma carrière littéraire, et suis avec le plus profond respect,\n\n            De Votre Excellence,\n\n                Le très-humble et très-obéissant serviteur,\n\n                        Immanuel Kant\n\n                                '),
(11, 'Second Manifeste Pour La Philosophie', 'Alain Badiou avec Nicolas Truong', 'Nouvelles Lignes', 'sociologie', 'badiou_eloge_amour.jpg', '2013-08-09', 14, 6, 1234565421, 'L''amour veut que sa preuve enveloppe le désir ». Une simple phrase, page 39, qui contient l''ossature et la profondeur de la réflexion, et de l''amour en quête dans la vérité. Ce n''est pas une prise de position moraliste destinée à contrecarrer les adeptes de la satisfaction immédiate et transitoire des pulsions ou de l''hédonisme marchand. L''amour est présenté comme une procédure de vérité, une expérience réelle profondément humaine de la différence, de l''altérité, du deux, non vécue dans le conflit d''intérêts, mais comme condition sine qua non de co construction du sens, de l''existence ; une promesse de réinvention de la vie. L''amour, n''a rien à voir avec nos obscures tendances sécuritaires, mais se révèle autant qu''il nous révèle, à l''un comme à l''autre, dans l''acceptation confiante du hasard et de l''aventure engagée jusqu''au bord de l''être, jusqu''au bord de l''autre.                '),
(13, 'Qu''est-ce que la laïcité - لاييسيته چيست؟', 'Chidan Vassigh ', 'Akhtaran ', 'Politique', 'laicite_vasigh.jpg', '2008-02-02', 15, 10, 1234567890123, 'Un essai écrit en persan sur le pertinence de la laïcité en Iran à l''époque où ce pays est dominé par une théocratie islamique.\n\nلاييسيته چيست؟\nنقدي بر نظريه پردازي هاي ايراني در باره ي لاييسيته و سكولاريسم                                ');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `password`, `adresse`, `pays`, `ville`, `code`, `tel`) VALUES
(1, 'vassigh', 'chidan', 'cvassigh@wanadoo.fr', 'vach', '146, rue Raymond Losserand', 'France', 'Paris', '75014', 145450155),
(3, 'vassigh', 'lila', 'lila@wanadoo.fr', 'lila', '146, rue Raymond Losserand', 'France', 'Paris', '75014', 145450155);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
