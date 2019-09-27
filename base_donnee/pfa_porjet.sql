-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 27 sep. 2019 à 21:30
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pfa_porjet`
--

-- --------------------------------------------------------

--
-- Structure de la table `coment_section`
--

DROP TABLE IF EXISTS `coment_section`;
CREATE TABLE IF NOT EXISTS `coment_section` (
  `ID_COMMENT` int(11) NOT NULL AUTO_INCREMENT,
  `ID_EVENT` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `DATE_COMENT` datetime DEFAULT NULL,
  `MESSAGE` text,
  PRIMARY KEY (`ID_COMMENT`),
  KEY `FK_APPARTENIR` (`ID_EVENT`),
  KEY `FK_COMMENTER` (`ID_USER`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `ID_EVENT` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USER` int(11) NOT NULL,
  `EVENT_TITLE` varchar(50) DEFAULT NULL,
  `TYPE_EVENT` varchar(20) DEFAULT NULL,
  `LOCATION` text,
  `DATE_START` datetime DEFAULT NULL,
  `DATE_END` datetime DEFAULT NULL,
  `PICTURE` longblob NOT NULL,
  PRIMARY KEY (`ID_EVENT`),
  KEY `FK_ASSOCIATION_4` (`ID_USER`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `infos`
--

DROP TABLE IF EXISTS `infos`;
CREATE TABLE IF NOT EXISTS `infos` (
  `ID_INFOS` int(11) NOT NULL AUTO_INCREMENT,
  `FEEDBACK` int(11) DEFAULT NULL,
  `INTERESE` varchar(11) DEFAULT NULL,
  `PARTICIPE` varchar(11) DEFAULT NULL,
  `ID_USER` int(11) NOT NULL,
  `ID_EVENT` int(11) NOT NULL,
  `OBSERVATION` varchar(50) DEFAULT NULL,
  `DATE_INFO` date DEFAULT NULL,
  PRIMARY KEY (`ID_INFOS`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID_USER` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(50) DEFAULT NULL,
  `EMAIL` text,
  `PASSWORD` char(30) DEFAULT NULL,
  `PHONE_NUMBER` varchar(15) DEFAULT NULL,
  `BIRTH_DATE` date DEFAULT NULL,
  PRIMARY KEY (`ID_USER`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
