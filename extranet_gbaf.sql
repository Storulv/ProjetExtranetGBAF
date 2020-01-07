-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 07 jan. 2020 à 10:10
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `extranet gbaf`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteurs`
--

DROP TABLE IF EXISTS `acteurs`;
CREATE TABLE IF NOT EXISTS `acteurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Image` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `resume` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `acteurs`
--

INSERT INTO `acteurs` (`id`, `Image`, `Description`, `resume`) VALUES
(1, 'img/formation_co.png', '<p>Formation&co est une association française présente sur tout le territoire.Nous proposons à des personnes issues de tout milieu de devenir entrepreneur grâce à un crédit et un accompagnement professionnel et personnalisé.\r\n    </br>Notre proposition :</br>\r\n    <ul>\r\n      <li>un financement jusqu’à 30 000€ ;</li>\r\n      <li>un suivi personnalisé et gratuit ;</li>\r\n      <li>une lutte acharnée contre les freins sociétaux et les stéréotypes.</li>\r\n    </ul>\r\n    Le financement est possible, peu importe le métier : coiffeur, banquier, éleveur de chèvres… . Nous collaborons avec des personnes talentueuses et motivées. Vous n’avez pas de diplômes ? Ce n’est pas un problème pour nous ! Nos financements s’adressent à tous.\r\n    </p>', '<p class=\"pActeurs\">Formation&co est une association française présente sur tout le territoire. Nous proposons à des personnes issues de tout milieu de devenir entrepreneur grâce à un crédit et un accompagnement professionnel et personnalisé.</p>'),
(7, 'img/protectpeople.png', '<p>Protectpeople finance la solidarité nationale.\r\n    </br>Nous appliquons le principe édifié par la Sécurité sociale française en 1945 : permettre à chacun de bénéficier d’une protection sociale.\r\n    </br>\r\n    </br>\r\n    Chez Protectpeople, chacun cotise selon ses moyens et reçoit selon ses besoins. Protectpeople est ouvert à tous, sans considération d’âge ou d’état de santé. Nous garantissons un accès aux soins et une retraite. Chaque année, nous collectons et répartissons 300 milliards d’euros.\r\n    </br>\r\n    <ul>\r\n      <li>sociale : nous garantissons la fiabilité des données sociales ;</li>\r\n      <li>économique : nous apportons une contribution aux activités économiques.</li>\r\n    </ul>\r\n    </p>', '<p class=\"pActeurs\">Protectpeople finance la solidarité nationale. Nous appliquons le principe édifié par la Sécurité sociale française en 1945 : permettre à chacun de bénéficier d’une protection sociale.</p>'),
(8, 'img/Dsa_france.png', '<p>La CDE (Chambre Des Entrepreneurs) accompagne les entreprises dans leurs démarches de formation. Son président est élu pour 3 ans par ses pairs, chefs d’entreprises et présidents des CDE.\r\n    </p>', '<p class=\"pActeurs\">Dsa France accélère la croissance du territoire et s’engage avec les collectivités territoriales. Nous accompagnons les entreprises dans les étapes clés de leur évolution.</p>'),
(9, 'img/CDE.png', '<p>La CDE (Chambre Des Entrepreneurs) accompagne les entreprises dans leurs démarches de formation. Son président est élu pour 3 ans par ses pairs, chefs d’entreprises et présidents des CDE.\r\n    </p>', '<p class=\"pActeurs\">La CDE (Chambre Des Entrepreneurs) accompagne les entreprises dans leurs démarches de formation.</p>');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_acteurs` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `commentaires_acteurs` (`id_acteurs`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `dislikes`
--

DROP TABLE IF EXISTS `dislikes`;
CREATE TABLE IF NOT EXISTS `dislikes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_acteurs` int(11) NOT NULL,
  `id_membres` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `dislikes_membres` (`id_membres`),
  KEY `dislikes_acteurs` (`id_acteurs`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_acteurs` int(11) NOT NULL,
  `id_membres` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `likes_membres` (`id_membres`),
  KEY `likes_acteurs` (`id_acteurs`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  `Prénom` text NOT NULL,
  `Username` text NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Question secrète` text NOT NULL,
  `Réponse question secrète` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_acteurs` FOREIGN KEY (`id_acteurs`) REFERENCES `acteurs` (`id`);

--
-- Contraintes pour la table `dislikes`
--
ALTER TABLE `dislikes`
  ADD CONSTRAINT `dislikes_acteurs` FOREIGN KEY (`id_acteurs`) REFERENCES `acteurs` (`id`),
  ADD CONSTRAINT `dislikes_membres` FOREIGN KEY (`id_membres`) REFERENCES `membres` (`id`);

--
-- Contraintes pour la table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_acteurs` FOREIGN KEY (`id_acteurs`) REFERENCES `acteurs` (`id`),
  ADD CONSTRAINT `likes_membres` FOREIGN KEY (`id_membres`) REFERENCES `membres` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
