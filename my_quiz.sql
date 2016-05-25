-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 21 Juin 2015 à 15:13
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `my_quiz`
--
CREATE DATABASE IF NOT EXISTS `my_quiz` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `my_quiz`;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Faune et Flore'),
(2, 'Sciences exactes'),
(3, 'Bd et Animations'),
(4, 'Corps et Ame'),
(5, 'Consoles et Jeux vidéo'),
(6, 'Technologie'),
(7, 'Croyances et Superstitions'),
(8, 'Art et Culture'),
(9, 'le 7e Art'),
(10, 'A Table'),
(11, 'Pouvoir et Affaires'),
(12, 'Musique et Hits'),
(13, 'Autour du monde'),
(14, 'Divertissement et Médias'),
(15, 'Au fil des siecles'),
(16, 'le XXIème siècle'),
(17, 'Sport'),
(18, 'Les Belles-lettres'),
(19, 'Series TV'),
(20, 'test');

-- --------------------------------------------------------

--
-- Structure de la table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `question` longtext COLLATE utf8_unicode_ci NOT NULL,
  `reponse1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reponse2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reponse3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reponse4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Contenu de la table `quiz`
--

INSERT INTO `quiz` (`id`, `category`, `question`, `reponse1`, `reponse2`, `reponse3`, `reponse4`, `activate`) VALUES
(1, '1', 'À quel animal fait référence Spiderman ?', 'Une araignée', 'Un rat ', 'Un loup ', 'Une chauve-souris ', 1),
(2, '1', 'Quel animal bêle ?', 'Le mouton', 'Le cerf', 'La poule', 'Le dindon', 1),
(3, '1', 'Parmi ces animaux, qui est le plus rapide ?', 'Le léopard', 'La tortue', 'Le lama', 'L''aï', 0),
(4, '1', 'Quel mâle est le reproducteur de l''espèce porcine ?', 'Le verrat', 'Le goret', 'Le porc', 'Le cochon', 1),
(5, '1', 'Quel animal est le plus proche parent de l''homme ?', 'Le singe', 'Le dauphin', 'Le chien', 'Le chat', 0),
(6, '1', 'À quel animal fait référence Spiderman ?', 'Une araignée', 'Un rat ', 'Un loup ', 'Une chauve-souris ', 1),
(7, '1', 'Quel animal bêle ?', 'Le mouton', 'Le cerf', 'La poule', 'Le dindon', 1),
(8, '1', 'Parmi ces animaux, qui est le plus rapide ?', 'Le léopard', 'La tortue', 'Le lama', 'L''aï', 1),
(9, '1', 'Quel mâle est le reproducteur de l''espèce porcine ?', 'Le verrat', 'Le goret', 'Le porc', 'Le cochon', 1),
(10, '1', 'Quel animal est le plus proche parent de l''homme ?', 'Le singe', 'Le dauphin', 'Le chien', 'Le chat', 1),
(11, '7', 'Que célèbre-t-on à la Toussaint ?', 'Les saints', 'L''automne', 'Le muguet', 'Le travail', 1),
(12, '7', 'À quel événement religieux de la tradition juive, les kiddoushin et les nissouïn font-ils référence ?', 'Au mariage', 'Au décès', 'Au passage à l’âge adulte', 'À la naissance', 1),
(13, '17', 'mlkgfd', '!:;,nb', '!:;,nbv', 'l,nb', ':;,nb', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activate` tinyint(4) NOT NULL DEFAULT '0',
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `mail`, `activate`, `ip`, `salt`, `roles`) VALUES
(1, 'test', 'test', 'test@test.fr', 1, '', '', 'a:0:{}'),
(2, 'bla', 'bla', 'bla@bla.fr', 0, '', '', ''),
(3, 'essai', 'test', 'bla@test.fr', 0, 'test', 'test', 'a:0:{}'),
(4, 'yo', 'yo', 'yo@yo.fr', 0, '', '', 'a:1:{i:0;s:9:"ROLE_USER";}');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
