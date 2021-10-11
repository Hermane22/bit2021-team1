-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 11 Octobre 2021 à 13:58
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `dps`
--

-- --------------------------------------------------------

--
-- Structure de la table `list`
--

CREATE TABLE IF NOT EXISTS `list` (
  `N` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(200) CHARACTER SET utf8 NOT NULL,
  `relationship` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(25) CHARACTER SET utf8 NOT NULL,
  `mail` varchar(100) CHARACTER SET utf8 NOT NULL,
  `addresse` varchar(100) CHARACTER SET utf8 NOT NULL,
  `datet` date NOT NULL,
  PRIMARY KEY (`N`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Contenu de la table `list`
--

INSERT INTO `list` (`N`, `fullname`, `relationship`, `phone`, `mail`, `addresse`, `datet`) VALUES
(2, 'Moctar GUIRA', 'Friend', '4567890', 'fgh', 'KDG', '0000-00-00'),
(47, 'BAGORO Hermane', 'Friend', '+226', 'hermanebagoro@gmail.com', 'Ouagadougou', '2021-10-11'),
(48, 'SAWADOGO Raoul', 'Friend', '+226', 'sawadogoraoule@gmail.com', 'Ouagadougou', '2021-10-11'),
(49, 'YAMEOGO Abdoul Ouahab', 'Friend', '+226', 'mail@', 'Koudouoogu', '2021-10-11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
