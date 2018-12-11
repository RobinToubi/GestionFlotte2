-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 11 Décembre 2018 à 11:53
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gsb_gestionflotte`
--

-- --------------------------------------------------------

--
-- Structure de la table `centre`
--

CREATE TABLE `centre` (
  `Cagrement` varchar(8) NOT NULL DEFAULT '',
  `CraisonSociale` varchar(80) DEFAULT NULL,
  `Cadresse` varchar(200) DEFAULT NULL,
  `CcodePostal` varchar(5) DEFAULT NULL,
  `Cville` varchar(80) DEFAULT NULL,
  `Ctelephone` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `centre`
--

INSERT INTO `centre` (`Cagrement`, `CraisonSociale`, `Cadresse`, `CcodePostal`, `Cville`, `Ctelephone`) VALUES
('S015C021', 'CONTROLE AUTO SECURITE SARL', '6 AVE G POMPIDOU', '15000', 'AURILLAC', '0471639550'),
('S015D052', 'LG AUTO CONTROLE', '27 AVE DES VOLONTAIRES', '15000', 'AURILLAC', NULL),
('S015S057', 'LGT AUTO CONTROLE', '159 AVENUE DU GENERAL LECLERC', '15000', 'AURILLAC', NULL),
('S015S058', 'LJM AUTO CONTROLE', '10 RUE DU DOCTEUR CHIBRET', '15000', 'AURILLAC', NULL),
('S015T035', 'AGREE AURILLAC AUTO CONTROLE', '86 BLD LOUIS DAUZIER ', '15000', 'AURILLAC', '0471648409'),
('S015T045', 'AGREE AURILLAC AUTO CONTROLE', '8 RUE GEORGES BRASSENS', '15000', 'AURILLAC', NULL),
('S015Z046', 'CONTROLE TECHNIQUE AURILLACOIS', '4 RUE DU 11 NOVEMBRE', '15000', 'AURILLAC', '0471484205'),
('S015Z053', 'CANTAL CONTROLES TECHNIQUES', '12 ZA DES QUATRE CHEMINS', '15250', 'NAUCELLES', NULL),
('S015Z055', 'AUTO CONTROLE QUERCY LIMOUSIN', '47 AVENUE DES PUPILLES DE LA NATION', '15000', 'AURILLAC', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `controle`
--

CREATE TABLE `controle` (
  `Cid` int(255) NOT NULL,
  `Cbilan` varchar(255) DEFAULT NULL,
  `Ccentre` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `controle`
--

INSERT INTO `controle` (`Cid`, `Cbilan`, `Ccentre`) VALUES
(3, 'Controle Technique Toyota', 'S015C021'),
(8, 'Controle Technique Toyota', 'S015C021'),
(11, 'Controle Technique Renault', 'S015S058'),
(13, 'Controle Technique Peugeot', 'S015Z046');

-- --------------------------------------------------------

--
-- Structure de la table `entretien`
--

CREATE TABLE `entretien` (
  `Eid` int(255) NOT NULL,
  `Etechnicien` int(11) NOT NULL,
  `Edate` date NOT NULL,
  `Evehicule` varchar(10) NOT NULL,
  `Edescriptif` varchar(255) NOT NULL,
  `Eetat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `entretien`
--

INSERT INTO `entretien` (`Eid`, `Etechnicien`, `Edate`, `Evehicule`, `Edescriptif`, `Eetat`) VALUES
(1, 1, '2016-10-26', 'DW-456-TR', 'Montage pneus avants neige', 1),
(2, 2, '2017-05-10', 'DW-456-TR', 'Montage pneus avants été', 1),
(3, 2, '2017-06-15', 'DW-456-TR', 'Rendez-vous garage Toyota - Entretien garantie 15000km', 1),
(4, 1, '2017-11-02', 'DW-456-TR', 'Montage 4 pneus 4 saisons', 1),
(5, 1, '2017-11-03', 'EA-236-GA', 'Montage 4 pneus 4 saisons', 1),
(6, 1, '2017-11-04', 'EG-504-FP', 'Montage 4 pneus 4 saisons', 1),
(7, 2, '2018-12-19', 'EA-236-GA', 'Changement pare-brise', 1),
(8, 2, '2018-01-24', 'DW-456-TR', 'Rendez-vous garage Toyota - Entretien garantie 30000km', 1),
(9, 1, '2018-02-13', 'EG-504-FP', 'Changement ampoule clignotant avant-droit', 1),
(10, 2, '2018-04-11', 'EG-504-FP', 'Réglage optiques', 1),
(11, 1, '2018-05-11', 'EA-236-GA', 'Rendez-vous garage Renault - Entretien garantie 30000km', 1),
(12, 1, '2018-07-03', 'DW-456-TR', 'Changement filtre habitacle', 1),
(13, 2, '2018-09-19', 'EG-504-FP', 'Rendez-vous garage Peugeot - Entretien garantie 25000km', 1),
(14, 2, '2018-12-05', 'EA-236-GA', 'Vidange et filtre à huile', 1),
(15, 1, '2018-12-05', 'EK-812-HH', 'Vérification pression pneus', 1),
(16, 2, '2018-12-05', 'EK-812-HH', 'Mise à niveau liquides', 1),
(17, 2, '2018-12-05', 'EG-504-FP', 'Lavage complet', 1);

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

CREATE TABLE `etat` (
  `Ecode` int(11) NOT NULL,
  `Elibelle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `etat`
--

INSERT INTO `etat` (`Ecode`, `Elibelle`) VALUES
(1, 'En Cours'),
(2, 'A Realiser'),
(3, 'Terminer');

-- --------------------------------------------------------

--
-- Structure de la table `partenaire`
--

CREATE TABLE `partenaire` (
  `Pid` int(11) NOT NULL,
  `Pnom` varchar(50) NOT NULL,
  `Pdescription` varchar(255) NOT NULL,
  `Padresse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `Rid` int(11) NOT NULL,
  `Rlibelle` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`Rid`, `Rlibelle`) VALUES
(1, 'Salarie'),
(2, 'Commercial'),
(3, 'Administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `salarie`
--

CREATE TABLE `salarie` (
  `Sid` int(11) NOT NULL,
  `Snom` varchar(255) NOT NULL,
  `Sprenom` varchar(255) NOT NULL,
  `Smail` varchar(255) NOT NULL,
  `Spassword` varchar(255) NOT NULL,
  `Srole` int(11) NOT NULL,
  `Sdateajout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `salarie`
--

INSERT INTO `salarie` (`Sid`, `Snom`, `Sprenom`, `Smail`, `Spassword`, `Srole`, `Sdateajout`) VALUES
(1, 'PINQUIER', 'Alexandre', 'alexandrepinquier@gmail.com', 'ap', 1, '2015-01-01'),
(2, 'LACAZE', 'Julien', 'Julienlacaze@hotmail.com', 'jl', 1, '2015-01-01');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `Vimmat` varchar(10) NOT NULL,
  `Vdateachat` date NOT NULL,
  `Vmodele` varchar(255) NOT NULL,
  `Venergie` varchar(255) NOT NULL,
  `Vcommercial` int(11) DEFAULT NULL,
  `Vdateajout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `vehicule`
--

INSERT INTO `vehicule` (`Vimmat`, `Vdateachat`, `Vmodele`, `Venergie`, `Vcommercial`, `Vdateajout`) VALUES
('DW-456-TR', '2016-10-21', 'TOYOTA Auris II (2) HYBRIDE 136H DYNAMIC BUSINESS', 'Hybride Essence Electrique', 1, '2017-12-12'),
('EA-236-GA', '2017-03-07', 'RENAULT Mégane IV 1.5 DCI 110 ENERGY LIFE', 'Diesel', 2, '2017-07-07'),
('EG-504-FP', '2017-10-24', 'PEUGEOT 208 (2) 1.6 BLUEHDI 100 ALLURE 5P', 'Diesel', 1, '2018-01-24'),
('EK-812-HH', '2018-02-24', 'DS DS3 (2) 1.2 PURETECH 82 DRIVE EFFICIENCY SO CHIC', 'Essence', 2, '2018-05-22');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `centre`
--
ALTER TABLE `centre`
  ADD PRIMARY KEY (`Cagrement`);

--
-- Index pour la table `controle`
--
ALTER TABLE `controle`
  ADD PRIMARY KEY (`Cid`),
  ADD KEY `Ccentre` (`Ccentre`);

--
-- Index pour la table `entretien`
--
ALTER TABLE `entretien`
  ADD PRIMARY KEY (`Eid`),
  ADD KEY `Etechnicien` (`Etechnicien`),
  ADD KEY `Eetat` (`Eetat`),
  ADD KEY `Evehicule` (`Evehicule`);

--
-- Index pour la table `etat`
--
ALTER TABLE `etat`
  ADD PRIMARY KEY (`Ecode`);

--
-- Index pour la table `partenaire`
--
ALTER TABLE `partenaire`
  ADD PRIMARY KEY (`Pid`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Rid`);

--
-- Index pour la table `salarie`
--
ALTER TABLE `salarie`
  ADD PRIMARY KEY (`Sid`),
  ADD KEY `Srole` (`Srole`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`Vimmat`),
  ADD KEY `Vcommercial` (`Vcommercial`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `entretien`
--
ALTER TABLE `entretien`
  MODIFY `Eid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `etat`
--
ALTER TABLE `etat`
  MODIFY `Ecode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `partenaire`
--
ALTER TABLE `partenaire`
  MODIFY `Pid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `Rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `salarie`
--
ALTER TABLE `salarie`
  MODIFY `Sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `controle`
--
ALTER TABLE `controle`
  ADD CONSTRAINT `controle_ibfk_1` FOREIGN KEY (`Cid`) REFERENCES `entretien` (`Eid`),
  ADD CONSTRAINT `controle_ibfk_2` FOREIGN KEY (`Ccentre`) REFERENCES `centre` (`Cagrement`);

--
-- Contraintes pour la table `entretien`
--
ALTER TABLE `entretien`
  ADD CONSTRAINT `entretien_ibfk_1` FOREIGN KEY (`Etechnicien`) REFERENCES `salarie` (`Sid`),
  ADD CONSTRAINT `entretien_ibfk_3` FOREIGN KEY (`Eetat`) REFERENCES `etat` (`Ecode`),
  ADD CONSTRAINT `entretien_ibfk_4` FOREIGN KEY (`Evehicule`) REFERENCES `vehicule` (`Vimmat`);

--
-- Contraintes pour la table `salarie`
--
ALTER TABLE `salarie`
  ADD CONSTRAINT `salarie_ibfk_1` FOREIGN KEY (`Srole`) REFERENCES `role` (`Rid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
