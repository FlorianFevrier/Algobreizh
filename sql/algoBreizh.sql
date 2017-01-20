-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 20, 2017 at 09:47 AM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `algoBreizh`
--

-- --------------------------------------------------------

--
-- Table structure for table `Article`
--

CREATE TABLE IF NOT EXISTS `Article` (
  `idArticle` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `prix` float NOT NULL,
  PRIMARY KEY (`idArticle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `articleCommande`
--

CREATE TABLE IF NOT EXISTS `articleCommande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idArticle` int(11) NOT NULL,
  `idCommande` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `articlePanier`
--

CREATE TABLE IF NOT EXISTS `articlePanier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idArticle` int(11) NOT NULL,
  `idPanier` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `adresse` text NOT NULL,
  `nom` tinytext NOT NULL,
  `num_tel` int(11) NOT NULL,
  `mail` tinytext NOT NULL,
  `mdp` tinytext NOT NULL,
  `zone` tinytext NOT NULL,
  `derniereVisite` date NOT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`idClient`, `adresse`, `nom`, `num_tel`, `mail`, `mdp`, `zone`, `derniereVisite`) VALUES
(2, '3 rue de Rhoazon Rennes 35000', 'AlguaLuna', 299453212, 'directeur@algaluna.fr', '004245', 'ouest', '2017-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `idCommande` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `idClient` tinyint(4) NOT NULL,
  `valider` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idCommande`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `idCom` int(11) NOT NULL AUTO_INCREMENT,
  `idCommercial` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `com` text NOT NULL,
  PRIMARY KEY (`idCom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `commercial`
--

CREATE TABLE IF NOT EXISTS `commercial` (
  `idCommercial` int(11) NOT NULL AUTO_INCREMENT,
  `mail` text NOT NULL,
  `mdp` text NOT NULL,
  `zone` text NOT NULL,
  PRIMARY KEY (`idCommercial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `commercial`
--

INSERT INTO `commercial` (`idCommercial`, `mail`, `mdp`, `zone`) VALUES
(1, 'valentinS@algobreizh.com', '004245', 'ouest');

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

CREATE TABLE IF NOT EXISTS `panier` (
  `idPanier` int(11) NOT NULL AUTO_INCREMENT,
  `idClient` int(11) NOT NULL,
  PRIMARY KEY (`idPanier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `teleprospecteur`
--

CREATE TABLE IF NOT EXISTS `teleprospecteur` (
  `idTele` int(11) NOT NULL AUTO_INCREMENT,
  `mail` tinytext NOT NULL,
  `mdp` tinytext NOT NULL,
  PRIMARY KEY (`idTele`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `teleprospecteur`
--

INSERT INTO `teleprospecteur` (`idTele`, `mail`, `mdp`) VALUES
(1, 'florian@algobreizh.com', '0'),
(2, 'florian@algobreih.com', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL,
  `mail` tinytext NOT NULL,
  `statut` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
