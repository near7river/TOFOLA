-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 04 Avril 2014 à 01:14
-- Version du serveur: 5.5.31
-- Version de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `db_tofola`
--
CREATE DATABASE IF NOT EXISTS `db_tofola` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_tofola`;

-- --------------------------------------------------------

--
-- Structure de la table `Centre`
--

CREATE TABLE IF NOT EXISTS `Centre` (
  `nom_centre` varchar(50) DEFAULT NULL,
  `centreID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`centreID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `Centre`
--

INSERT INTO `Centre` (`nom_centre`, `centreID`) VALUES
('cp1', 1),
('cp2', 2);

-- --------------------------------------------------------

--
-- Structure de la table `Delit`
--

CREATE TABLE IF NOT EXISTS `Delit` (
  `date_delit` date DEFAULT NULL,
  `type_delit` varchar(50) DEFAULT NULL,
  `delitID` int(11) NOT NULL AUTO_INCREMENT,
  `dossierJuridiqueID` int(11) DEFAULT NULL,
  PRIMARY KEY (`delitID`),
  KEY `dossierJuridiqueID` (`dossierJuridiqueID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Detention`
--

CREATE TABLE IF NOT EXISTS `Detention` (
  `date_detention` date DEFAULT NULL,
  `duree` int(11) DEFAULT NULL,
  `detentionID` int(11) NOT NULL AUTO_INCREMENT,
  `centreID` int(11) DEFAULT NULL,
  `mineur` int(11) DEFAULT NULL,
  PRIMARY KEY (`detentionID`),
  KEY `centreID` (`centreID`),
  KEY `mineurID` (`mineur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `Detention`
--

INSERT INTO `Detention` (`date_detention`, `duree`, `detentionID`, `centreID`, `mineur`) VALUES
('2014-03-11', 78, 1, 1, 10);

-- --------------------------------------------------------

--
-- Structure de la table `DossierJuridique`
--

CREATE TABLE IF NOT EXISTS `DossierJuridique` (
  `etat_juridique` int(11) DEFAULT NULL,
  `nom_tibunal` varchar(50) DEFAULT NULL,
  `numeroDossier` varchar(50) DEFAULT NULL,
  `dossierJuridiqueID` int(11) NOT NULL,
  `mineurID` int(11) DEFAULT NULL,
  PRIMARY KEY (`dossierJuridiqueID`),
  KEY `mineurID` (`mineurID`),
  KEY `r_etat_juridique` (`etat_juridique`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `DossierJuridique`
--

INSERT INTO `DossierJuridique` (`etat_juridique`, `nom_tibunal`, `numeroDossier`, `dossierJuridiqueID`, `mineurID`) VALUES
(NULL, NULL, NULL, 10, 10);

-- --------------------------------------------------------

--
-- Structure de la table `DossierMedical`
--

CREATE TABLE IF NOT EXISTS `DossierMedical` (
  `carnet_sante` tinyint(1) DEFAULT NULL,
  `poids` double DEFAULT NULL,
  `taille` double NOT NULL,
  `premier_visite` date DEFAULT NULL,
  `test_grossesse` tinyint(1) DEFAULT NULL,
  `visite_genico` tinyint(1) DEFAULT NULL,
  `dossierMedicalID` int(11) NOT NULL,
  `mineurID` int(11) DEFAULT NULL,
  PRIMARY KEY (`dossierMedicalID`),
  KEY `mineurID` (`mineurID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `DossierMedical`
--

INSERT INTO `DossierMedical` (`carnet_sante`, `poids`, `taille`, `premier_visite`, `test_grossesse`, `visite_genico`, `dossierMedicalID`, `mineurID`) VALUES
(NULL, NULL, 0, NULL, NULL, NULL, 10, 10);

-- --------------------------------------------------------

--
-- Structure de la table `DossierPsychologique`
--

CREATE TABLE IF NOT EXISTS `DossierPsychologique` (
  `etat_psychologique` varchar(255) DEFAULT NULL,
  `dossierPsychologiqueID` int(11) NOT NULL,
  `mineurID` int(11) DEFAULT NULL,
  PRIMARY KEY (`dossierPsychologiqueID`),
  KEY `mineurID` (`mineurID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `DossierPsychologique`
--

INSERT INTO `DossierPsychologique` (`etat_psychologique`, `dossierPsychologiqueID`, `mineurID`) VALUES
(NULL, 10, 10);

-- --------------------------------------------------------

--
-- Structure de la table `DossierSocial`
--

CREATE TABLE IF NOT EXISTS `DossierSocial` (
  `etat_enfant` int(11) DEFAULT NULL,
  `nbr_freres` int(11) DEFAULT NULL,
  `rang_enfant` int(11) DEFAULT NULL,
  `niveau_scolaire` int(11) DEFAULT NULL,
  `tuteur` varchar(50) DEFAULT NULL,
  `lien_tuteur` int(11) DEFAULT NULL,
  `adresse_tuteur` varchar(255) DEFAULT NULL,
  `nom_mere` varchar(50) DEFAULT NULL,
  `niveau_scol_mere` int(11) DEFAULT NULL,
  `profession_mere` varchar(50) DEFAULT NULL,
  `nom_pere` varchar(50) DEFAULT NULL,
  `niveau_scol_pere` int(11) DEFAULT NULL,
  `professeion_pere` varchar(50) DEFAULT NULL,
  `niveau_vie` int(11) DEFAULT NULL,
  `type_logement` int(11) DEFAULT NULL,
  `type_cartier` int(11) DEFAULT NULL,
  `dossierSocialID` int(11) NOT NULL,
  `mineurID` int(11) DEFAULT NULL,
  PRIMARY KEY (`dossierSocialID`),
  KEY `mineurID` (`mineurID`),
  KEY `r_etat_enfant` (`etat_enfant`),
  KEY `r_rang_enfant` (`rang_enfant`),
  KEY `r_niveau_scolaire` (`niveau_scolaire`),
  KEY `lien_tuteur` (`lien_tuteur`),
  KEY `niveau_scol_mere` (`niveau_scol_mere`),
  KEY `niveau_scol_pere` (`niveau_scol_pere`),
  KEY `type_logement` (`type_logement`),
  KEY `type_cartier` (`type_cartier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `DossierSocial`
--

INSERT INTO `DossierSocial` (`etat_enfant`, `nbr_freres`, `rang_enfant`, `niveau_scolaire`, `tuteur`, `lien_tuteur`, `adresse_tuteur`, `nom_mere`, `niveau_scol_mere`, `profession_mere`, `nom_pere`, `niveau_scol_pere`, `professeion_pere`, `niveau_vie`, `type_logement`, `type_cartier`, `dossierSocialID`, `mineurID`) VALUES
(NULL, NULL, NULL, 33, NULL, NULL, NULL, NULL, 35, NULL, NULL, 35, NULL, NULL, NULL, NULL, 10, 10);

-- --------------------------------------------------------

--
-- Structure de la table `Formation`
--

CREATE TABLE IF NOT EXISTS `Formation` (
  `intitule` varchar(50) DEFAULT NULL,
  `type_formation` int(11) DEFAULT NULL,
  `date_debut_formation` date DEFAULT NULL,
  `date_fin_formation` date DEFAULT NULL,
  `lieu_formation` varchar(50) DEFAULT NULL,
  `formationID` int(11) NOT NULL AUTO_INCREMENT,
  `mineur` int(11) DEFAULT NULL,
  PRIMARY KEY (`formationID`),
  KEY `mineurID` (`mineur`),
  KEY `type_formation` (`type_formation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'glyphicon glyphicon-cog'),
(5, 'GSM', 'glyphicon glyphicon-user'),
(6, 'GPC', 'glyphicon glyphicon-home'),
(7, 'GFIN', 'glyphicon glyphicon-shopping-cart'),
(8, 'Reporting', 'glyphicon glyphicon-print');

-- --------------------------------------------------------

--
-- Structure de la table `InquietudeTrouble`
--

CREATE TABLE IF NOT EXISTS `InquietudeTrouble` (
  `date_signal_inqui` date DEFAULT NULL,
  `type_inqietude` int(11) DEFAULT NULL,
  `inquietudeTroubleID` int(11) NOT NULL AUTO_INCREMENT,
  `dossierPsychologiqueID` int(11) DEFAULT NULL,
  PRIMARY KEY (`inquietudeTroubleID`),
  KEY `dossierPsychologiqueID` (`dossierPsychologiqueID`),
  KEY `type_inqietude` (`type_inqietude`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `MaladieContagieuse`
--

CREATE TABLE IF NOT EXISTS `MaladieContagieuse` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `mineurID` int(11) DEFAULT NULL,
  `maladieID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mineurID` (`mineurID`),
  KEY `maladieID` (`maladieID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `MaladieContagieuse`
--

INSERT INTO `MaladieContagieuse` (`id`, `mineurID`, `maladieID`) VALUES
(1, 10, 55),
(2, 10, 56);

-- --------------------------------------------------------

--
-- Structure de la table `Mineur`
--

CREATE TABLE IF NOT EXISTS `Mineur` (
  `photo_mineur` varchar(255) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `pseudo` varchar(50) DEFAULT NULL,
  `centre_de_transfert` int(11) DEFAULT NULL,
  `sexe` int(11) DEFAULT NULL,
  `date_nais` date DEFAULT NULL,
  `lieu_nais` varchar(50) DEFAULT NULL,
  `date_arrivee` date DEFAULT NULL,
  `date_sortie` date DEFAULT NULL,
  `source` int(11) DEFAULT NULL,
  `destination` int(11) DEFAULT NULL,
  `mineurID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`mineurID`),
  KEY `sexe` (`sexe`),
  KEY `source` (`source`),
  KEY `destination` (`destination`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `Mineur`
--

INSERT INTO `Mineur` (`photo_mineur`, `nom`, `prenom`, `pseudo`, `centre_de_transfert`, `sexe`, `date_nais`, `lieu_nais`, `date_arrivee`, `date_sortie`, `source`, `destination`, `mineurID`) VALUES
('89ec7-lmbbp1ae.jpg', 'loujih ليونيل ميسى -', 'ali', 'cobol', 1, 27, '2014-03-10', 'rabat', '2014-03-10', '2014-03-04', NULL, 48, 10);

--
-- Déclencheurs `Mineur`
--
DROP TRIGGER IF EXISTS `creer_dossier_mineur`;
DELIMITER //
CREATE TRIGGER `creer_dossier_mineur` AFTER INSERT ON `Mineur`
 FOR EACH ROW BEGIN
insert into DossierSocial (dossierSocialID,mineurID) values (NEW. mineurID,NEW. mineurID);
insert into DossierMedical (dossierMedicalID,mineurID) values (NEW. mineurID,NEW. mineurID);
insert into DossierPsychologique (dossierPsychologiqueID,mineurID) values (NEW. mineurID,NEW. mineurID);
insert into DossierJuridique (dossierJuridiqueID,mineurID) values (NEW. mineurID,NEW. mineurID);
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `Observation`
--

CREATE TABLE IF NOT EXISTS `Observation` (
  `date_observation` date DEFAULT NULL,
  `text_observation` varchar(50) DEFAULT NULL,
  `observationID` int(11) NOT NULL AUTO_INCREMENT,
  `mineur` int(11) DEFAULT NULL,
  PRIMARY KEY (`observationID`),
  KEY `mineurID` (`mineur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Referenciel`
--

CREATE TABLE IF NOT EXISTS `Referenciel` (
  `nomRef` varchar(50) DEFAULT 'autre',
  `valeurRef` varchar(50) DEFAULT NULL,
  `referencielID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`referencielID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

--
-- Contenu de la table `Referenciel`
--

INSERT INTO `Referenciel` (`nomRef`, `valeurRef`, `referencielID`) VALUES
('type_formation', NULL, 3),
('type_delit', NULL, 5),
('rang_enfant', NULL, 7),
('niveau_scolaire', NULL, 8),
('lien_tuteur', NULL, 10),
('situation_familial', NULL, 12),
('relation_pere_enfant', NULL, 13),
('niveau_vie', NULL, 14),
('type_logement', NULL, 15),
('type_cartier', NULL, 16),
('vaccin', NULL, 17),
('etat_juridique', NULL, 18),
('destination', NULL, 19),
('sexe', NULL, 20),
('type_inqietude', NULL, 25),
('type_trouble', NULL, 26),
('sexe', 'Garçon', 27),
('sexe', 'Fille', 28),
('etat_juridique', 'en conflit', 29),
('relation_pere_enfant', 'aucune relation', 30),
('relation_pere_enfant', 'mort', 31),
('relation_pere_enfant', 'autre', 32),
('niveau_scolaire', 'primaire', 33),
('niveau_scolaire', 'secandaire', 34),
('niveau_scolaire', 'etudes sup', 35),
('vaccin', NULL, 36),
('vaccin', 'V1', 37),
('destination', 'rue', 38),
('lien_tuteur', 'parent', 40),
('lien_tuteur', 'popo', 41),
('lien_tuteur', 'pp', 42),
('destination', 'autre', 44),
('etat_juridique', 'autre', 46),
('destination', 'maison', 48),
('destination', 'maroc', 50),
('situation_familial', 'compliqué', 53),
('maladie', NULL, 54),
('maladie', 'Oreillons', 55),
('maladie', 'rougeole', 56),
('rang_enfant', 'cadet', 57),
('maladie', 'dasdsa', 58);

--
-- Déclencheurs `Referenciel`
--
DROP TRIGGER IF EXISTS `update_Ref`;
DELIMITER //
CREATE TRIGGER `update_Ref` BEFORE INSERT ON `Referenciel`
 FOR EACH ROW BEGIN
if( NEW.nomRef=NULL) then
      SIGNAL sqlstate '45001' set message_text = "No way ! You cannot do this !";
end if;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `RelationPereEnfant`
--

CREATE TABLE IF NOT EXISTS `RelationPereEnfant` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `mineurID` int(11) DEFAULT NULL,
  `relationPEID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `relationPEID` (`relationPEID`),
  KEY `relationpereenfant_ibfk_3` (`mineurID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `RelationPereEnfant`
--

INSERT INTO `RelationPereEnfant` (`id`, `mineurID`, `relationPEID`) VALUES
(14, 10, 32),
(15, 10, 30);

-- --------------------------------------------------------

--
-- Structure de la table `SituationFamilial`
--

CREATE TABLE IF NOT EXISTS `SituationFamilial` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `mineurID` int(11) DEFAULT NULL,
  `situationID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mineurID` (`mineurID`),
  KEY `situationID` (`situationID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Trouble`
--

CREATE TABLE IF NOT EXISTS `Trouble` (
  `date_signal_trouble` date DEFAULT NULL,
  `type_trouble` int(11) DEFAULT NULL,
  `troubleID` int(11) NOT NULL AUTO_INCREMENT,
  `dossierPsychologiqueID` int(11) DEFAULT NULL,
  PRIMARY KEY (`troubleID`),
  KEY `dossierPsychologiqueID` (`dossierPsychologiqueID`),
  KEY `type_trouble` (`type_trouble`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrateur', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1396527469, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(4, '::1', 'naoufal zerai', '$2y$08$wFzVC/MrsEKqzquaIalUFujbDcIrJCkX0bi2OIO5mq9u9S6XRpn1K', NULL, 'naoufal.zerai@gmail.com', NULL, NULL, NULL, NULL, 1395102692, 1396220964, 1, 'naoufal', 'zerai', 'nearRiver', '212618828589');

-- --------------------------------------------------------

--
-- Structure de la table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Contenu de la table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(18, 1, 1),
(22, 1, 5),
(23, 1, 6),
(24, 1, 7),
(25, 1, 8),
(33, 4, 5),
(34, 4, 6),
(35, 4, 7),
(36, 4, 8);

-- --------------------------------------------------------

--
-- Structure de la table `VaccinMineur`
--

CREATE TABLE IF NOT EXISTS `VaccinMineur` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `mineurID` int(11) DEFAULT NULL,
  `vaccinID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mineurID` (`mineurID`),
  KEY `vaccinID` (`vaccinID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `VaccinMineur`
--

INSERT INTO `VaccinMineur` (`id`, `mineurID`, `vaccinID`) VALUES
(1, 10, 37);

-- --------------------------------------------------------

--
-- Structure de la table `Visite`
--

CREATE TABLE IF NOT EXISTS `Visite` (
  `date_visite` date DEFAULT NULL,
  `nom_medecin` varchar(50) DEFAULT NULL,
  `observations` varchar(50) DEFAULT NULL,
  `visiteID` int(11) NOT NULL AUTO_INCREMENT,
  `dossierMedicalID` int(11) DEFAULT NULL,
  PRIMARY KEY (`visiteID`),
  KEY `dossierMedicalID` (`dossierMedicalID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Delit`
--
ALTER TABLE `Delit`
  ADD CONSTRAINT `FK_Delit_DossierJuridique` FOREIGN KEY (`dossierJuridiqueID`) REFERENCES `DossierJuridique` (`dossierJuridiqueID`);

--
-- Contraintes pour la table `Detention`
--
ALTER TABLE `Detention`
  ADD CONSTRAINT `detention_ibfk_1` FOREIGN KEY (`mineur`) REFERENCES `Mineur` (`mineurID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Detention_Centre` FOREIGN KEY (`centreID`) REFERENCES `Centre` (`centreID`);

--
-- Contraintes pour la table `DossierJuridique`
--
ALTER TABLE `DossierJuridique`
  ADD CONSTRAINT `FK_DossierJuridique_Mineur` FOREIGN KEY (`mineurID`) REFERENCES `Mineur` (`mineurID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `r_etat_juridique` FOREIGN KEY (`etat_juridique`) REFERENCES `Referenciel` (`referencielID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `DossierMedical`
--
ALTER TABLE `DossierMedical`
  ADD CONSTRAINT `FK_DossierMedical_Mineur` FOREIGN KEY (`mineurID`) REFERENCES `Mineur` (`mineurID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `DossierPsychologique`
--
ALTER TABLE `DossierPsychologique`
  ADD CONSTRAINT `FK_DossierPsychologique_Mineur` FOREIGN KEY (`mineurID`) REFERENCES `Mineur` (`mineurID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `DossierSocial`
--
ALTER TABLE `DossierSocial`
  ADD CONSTRAINT `dossiersocial_ibfk_1` FOREIGN KEY (`lien_tuteur`) REFERENCES `Referenciel` (`referencielID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dossiersocial_ibfk_2` FOREIGN KEY (`niveau_scol_mere`) REFERENCES `Referenciel` (`referencielID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dossiersocial_ibfk_3` FOREIGN KEY (`niveau_scol_pere`) REFERENCES `Referenciel` (`referencielID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dossiersocial_ibfk_4` FOREIGN KEY (`type_logement`) REFERENCES `Centre` (`centreID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dossiersocial_ibfk_5` FOREIGN KEY (`type_cartier`) REFERENCES `Referenciel` (`referencielID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_DossierSocial_Mineur` FOREIGN KEY (`mineurID`) REFERENCES `Mineur` (`mineurID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `r_etat_enfant` FOREIGN KEY (`etat_enfant`) REFERENCES `Referenciel` (`referencielID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `r_niveau_scolaire` FOREIGN KEY (`niveau_scolaire`) REFERENCES `Referenciel` (`referencielID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `r_rang_enfant` FOREIGN KEY (`rang_enfant`) REFERENCES `Referenciel` (`referencielID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Formation`
--
ALTER TABLE `Formation`
  ADD CONSTRAINT `formation_ibfk_1` FOREIGN KEY (`type_formation`) REFERENCES `Referenciel` (`referencielID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formation_ibfk_2` FOREIGN KEY (`mineur`) REFERENCES `Mineur` (`mineurID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `InquietudeTrouble`
--
ALTER TABLE `InquietudeTrouble`
  ADD CONSTRAINT `FK_InquietudeTrouble_DossierPsychologique` FOREIGN KEY (`dossierPsychologiqueID`) REFERENCES `DossierPsychologique` (`dossierPsychologiqueID`),
  ADD CONSTRAINT `inquietudetrouble_ibfk_1` FOREIGN KEY (`type_inqietude`) REFERENCES `Referenciel` (`referencielID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `MaladieContagieuse`
--
ALTER TABLE `MaladieContagieuse`
  ADD CONSTRAINT `maladiecontagieuse_ibfk_1` FOREIGN KEY (`mineurID`) REFERENCES `Mineur` (`mineurID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `maladiecontagieuse_ibfk_2` FOREIGN KEY (`maladieID`) REFERENCES `Referenciel` (`referencielID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Mineur`
--
ALTER TABLE `Mineur`
  ADD CONSTRAINT `mineur_ibfk_1` FOREIGN KEY (`sexe`) REFERENCES `Referenciel` (`referencielID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mineur_ibfk_2` FOREIGN KEY (`source`) REFERENCES `Referenciel` (`referencielID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mineur_ibfk_3` FOREIGN KEY (`destination`) REFERENCES `Referenciel` (`referencielID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Observation`
--
ALTER TABLE `Observation`
  ADD CONSTRAINT `observation_ibfk_1` FOREIGN KEY (`mineur`) REFERENCES `Mineur` (`mineurID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `RelationPereEnfant`
--
ALTER TABLE `RelationPereEnfant`
  ADD CONSTRAINT `relationpereenfant_ibfk_2` FOREIGN KEY (`relationPEID`) REFERENCES `Referenciel` (`referencielID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relationpereenfant_ibfk_3` FOREIGN KEY (`mineurID`) REFERENCES `Mineur` (`mineurID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `SituationFamilial`
--
ALTER TABLE `SituationFamilial`
  ADD CONSTRAINT `situationfamilial_ibfk_1` FOREIGN KEY (`mineurID`) REFERENCES `Mineur` (`mineurID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `situationfamilial_ibfk_2` FOREIGN KEY (`situationID`) REFERENCES `Referenciel` (`referencielID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Trouble`
--
ALTER TABLE `Trouble`
  ADD CONSTRAINT `FK_Trouble_DossierPsychologique` FOREIGN KEY (`dossierPsychologiqueID`) REFERENCES `DossierPsychologique` (`dossierPsychologiqueID`),
  ADD CONSTRAINT `trouble_ibfk_1` FOREIGN KEY (`type_trouble`) REFERENCES `Referenciel` (`referencielID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Contraintes pour la table `VaccinMineur`
--
ALTER TABLE `VaccinMineur`
  ADD CONSTRAINT `vaccinmineur_ibfk_1` FOREIGN KEY (`mineurID`) REFERENCES `Mineur` (`mineurID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vaccinmineur_ibfk_2` FOREIGN KEY (`vaccinID`) REFERENCES `Referenciel` (`referencielID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Visite`
--
ALTER TABLE `Visite`
  ADD CONSTRAINT `FK_Visite_DossierMedical` FOREIGN KEY (`dossierMedicalID`) REFERENCES `DossierMedical` (`dossierMedicalID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
