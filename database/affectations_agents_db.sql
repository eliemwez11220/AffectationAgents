-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 12 nov. 2020 à 20:52
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `affectations_agents_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `demande_affectation`
--

CREATE TABLE `demande_affectation` (
  `Id_demande_affectation` int(5) NOT NULL,
  `Date_Demande` date NOT NULL,
  `Matricule` int(5) NOT NULL,
  `LiBourgmestre` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fiche_affectation`
--

CREATE TABLE `fiche_affectation` (
  `Id` int(5) NOT NULL,
  `DateFiche_service` date NOT NULL,
  `Objectif` varchar(20) NOT NULL,
  `Matricule` int(5) NOT NULL,
  `Id_gouverneur` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fiche_affectation`
--

INSERT INTO `fiche_affectation` (`Id`, `DateFiche_service`, `Objectif`, `Matricule`, `Id_gouverneur`) VALUES
(1, '2020-11-12', 'Fiche agent', 1, 'kyabu');

-- --------------------------------------------------------

--
-- Structure de la table `fiche_evaluation`
--

CREATE TABLE `fiche_evaluation` (
  `Id_evaluation` int(5) NOT NULL,
  `Date_evaluation` date NOT NULL,
  `Description` varchar(30) NOT NULL,
  `LiBourgmestre` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fiche_evaluation`
--

INSERT INTO `fiche_evaluation` (`Id_evaluation`, `Date_evaluation`, `Description`, `LiBourgmestre`) VALUES
(1, '2020-11-12', 'pppppppppppp', 1);

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `Id_Piece` varchar(5) NOT NULL,
  `Date_Piece` int(11) NOT NULL,
  `Nom_Piece` int(11) NOT NULL,
  `Matricule` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tb_am_affectations`
--

CREATE TABLE `tb_am_affectations` (
  `Affectation_id` int(11) NOT NULL,
  `DateAffectation` date NOT NULL,
  `DateAjout` datetime NOT NULL,
  `Service_sid` int(11) NOT NULL,
  `Agent_sid` int(11) NOT NULL,
  `PosteOccupe` varchar(75) NOT NULL,
  `Objectif` text NOT NULL,
  `NomGouverneur` varchar(75) NOT NULL,
  `affec_observ` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tb_am_affectations`
--

INSERT INTO `tb_am_affectations` (`Affectation_id`, `DateAffectation`, `DateAjout`, `Service_sid`, `Agent_sid`, `PosteOccupe`, `Objectif`, `NomGouverneur`, `affec_observ`) VALUES
(1, '2020-11-12', '2020-11-12 20:45:18', 1, 1, 'Percepteur', 'Percevoir les differentes recettes de l\'etat', 'Kyabula Katwe', 'nouvelle affectation de l\'agent a la commune');

-- --------------------------------------------------------

--
-- Structure de la table `tb_am_agents`
--

CREATE TABLE `tb_am_agents` (
  `Agent_id` int(11) NOT NULL,
  `NomAg` varchar(20) NOT NULL,
  `Province` varchar(20) NOT NULL,
  `Districte` varchar(20) NOT NULL,
  `Territoire` varchar(20) NOT NULL,
  `Telephone` varchar(15) NOT NULL,
  `Email` varchar(75) NOT NULL,
  `Fonction` varchar(75) NOT NULL,
  `Adresse` varchar(75) NOT NULL,
  `Grade` varchar(75) NOT NULL,
  `DateAjout` datetime NOT NULL,
  `LieuNaissance` varchar(75) NOT NULL,
  `DateNaissance` date NOT NULL,
  `Ville` varchar(75) NOT NULL,
  `Matricule` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tb_am_agents`
--

INSERT INTO `tb_am_agents` (`Agent_id`, `NomAg`, `Province`, `Districte`, `Territoire`, `Telephone`, `Email`, `Fonction`, `Adresse`, `Grade`, `DateAjout`, `LieuNaissance`, `DateNaissance`, `Ville`, `Matricule`) VALUES
(1, 'Élie Mohamed', 'Lualaba', 'Lualaba', 'Kapanga', '0977090011', 'eliemwez.mohamed@gmail.com', 'administratif', '25, Rue des Rosiers, Naviundu, Haut-Katanga RDC', 'Licencie', '2020-11-12 20:35:00', 'likasi', '1999-11-12', 'lubumbashi', 202011220);

-- --------------------------------------------------------

--
-- Structure de la table `tb_am_communes`
--

CREATE TABLE `tb_am_communes` (
  `Commune_Id` int(11) NOT NULL,
  `NomCommune` varchar(75) NOT NULL,
  `NomOfficier` varchar(75) NOT NULL,
  `AdresseBureau` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tb_am_communes`
--

INSERT INTO `tb_am_communes` (`Commune_Id`, `NomCommune`, `NomOfficier`, `AdresseBureau`) VALUES
(1, 'Ruashi', 'Madame Mwadi', 'Avenue Tshombe, numero 25 quartier 001');

-- --------------------------------------------------------

--
-- Structure de la table `tb_am_services`
--

CREATE TABLE `tb_am_services` (
  `Service_id` int(11) NOT NULL,
  `NomService` varchar(75) NOT NULL,
  `NomResponsable` varchar(75) NOT NULL,
  `AdresseBureau` varchar(75) NOT NULL,
  `Commune_sid` int(11) NOT NULL,
  `DateAjout` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tb_am_services`
--

INSERT INTO `tb_am_services` (`Service_id`, `NomService`, `NomResponsable`, `AdresseBureau`, `Commune_sid`, `DateAjout`) VALUES
(1, 'Recette communale', 'Sarah Mwabani', 'Ruashi commune', 1, '2020-11-12 20:43:12');

-- --------------------------------------------------------

--
-- Structure de la table `tb_im_users`
--

CREATE TABLE `tb_im_users` (
  `id_asset` int(11) NOT NULL,
  `asset_fullname` varchar(75) NOT NULL,
  `asset_username` varchar(50) DEFAULT NULL,
  `asset_password` varchar(60) DEFAULT NULL,
  `asset_email` varchar(50) DEFAULT NULL,
  `asset_sexe` varchar(10) DEFAULT NULL,
  `asset_phone` varchar(50) DEFAULT NULL,
  `asset_type` varchar(20) DEFAULT 'logisticien',
  `date_ajout` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_connected` timestamp NULL DEFAULT NULL,
  `account_activated` varchar(25) DEFAULT 'active',
  `asset_avatar` varchar(75) DEFAULT NULL,
  `date_update` datetime DEFAULT NULL,
  `asset_fonction` varchar(75) NOT NULL,
  `asset_matricule` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_im_users`
--

INSERT INTO `tb_im_users` (`id_asset`, `asset_fullname`, `asset_username`, `asset_password`, `asset_email`, `asset_sexe`, `asset_phone`, `asset_type`, `date_ajout`, `date_connected`, `account_activated`, `asset_avatar`, `date_update`, `asset_fonction`, `asset_matricule`) VALUES
(1, 'Elie Mwez', 'eliemwez', '$2y$12$lgSZ78FDfw7MUBBIrMgsfOB2BEBDapoD4jIJEtr.arj6dSYRoBDZG', 'eliemwez.rubuz@gmail.com', 'Masculin', '+243858533285', 'user', '2020-09-11 08:08:58', '2020-09-21 08:02:11', 'active', 'global/img/avatars/avatar-eliemwez2.jpg', '2020-09-19 14:07:30', 'logisticien', '11220'),
(2, 'Administrateur', 'admin', '$2y$12$bGYGbrhUKpkUVun35wVyq.E3xoHKEsztWso0Hw6xlP4pRPrhNqxpu', 'admin@gmail.com', 'Homme', '+243903774951', 'admin', '2020-09-21 08:01:52', '2020-11-12 18:47:30', 'active', 'global/img/avatars/cryptographie-cles-cadenas-mot-passe-securite-icone-4965', '2020-11-12 18:13:03', 'admin', '2020010'),
(3, 'Mohamed', 'mohamed', '$2y$12$FYqeLdDL.LqmcH7l2I1YZewnQiyRiBI343vwZezJtQRKZr5.qZsx.', 'mohamed@gmail.com', 'masculin', '+243975556941', 'user', '2020-10-18 17:40:01', '2020-11-08 13:50:48', 'active', NULL, '2020-11-08 15:46:52', 'gerant', '1122001');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `demande_affectation`
--
ALTER TABLE `demande_affectation`
  ADD PRIMARY KEY (`Id_demande_affectation`),
  ADD KEY `Matricule` (`Matricule`);

--
-- Index pour la table `fiche_affectation`
--
ALTER TABLE `fiche_affectation`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `fiche_evaluation`
--
ALTER TABLE `fiche_evaluation`
  ADD PRIMARY KEY (`Id_evaluation`);

--
-- Index pour la table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`Id_Piece`),
  ADD KEY `Matricule` (`Matricule`);

--
-- Index pour la table `tb_am_affectations`
--
ALTER TABLE `tb_am_affectations`
  ADD PRIMARY KEY (`Affectation_id`);

--
-- Index pour la table `tb_am_agents`
--
ALTER TABLE `tb_am_agents`
  ADD PRIMARY KEY (`Agent_id`),
  ADD UNIQUE KEY `Matricule` (`Matricule`);

--
-- Index pour la table `tb_am_communes`
--
ALTER TABLE `tb_am_communes`
  ADD PRIMARY KEY (`Commune_Id`);

--
-- Index pour la table `tb_am_services`
--
ALTER TABLE `tb_am_services`
  ADD PRIMARY KEY (`Service_id`);

--
-- Index pour la table `tb_im_users`
--
ALTER TABLE `tb_im_users`
  ADD PRIMARY KEY (`id_asset`),
  ADD UNIQUE KEY `asset_username` (`asset_username`,`asset_email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `fiche_affectation`
--
ALTER TABLE `fiche_affectation`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `fiche_evaluation`
--
ALTER TABLE `fiche_evaluation`
  MODIFY `Id_evaluation` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tb_am_affectations`
--
ALTER TABLE `tb_am_affectations`
  MODIFY `Affectation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tb_am_agents`
--
ALTER TABLE `tb_am_agents`
  MODIFY `Agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tb_am_communes`
--
ALTER TABLE `tb_am_communes`
  MODIFY `Commune_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tb_am_services`
--
ALTER TABLE `tb_am_services`
  MODIFY `Service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tb_im_users`
--
ALTER TABLE `tb_im_users`
  MODIFY `id_asset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `demande_affectation`
--
ALTER TABLE `demande_affectation`
  ADD CONSTRAINT `demande_affectation_ibfk_1` FOREIGN KEY (`Matricule`) REFERENCES `tb_am_agents` (`Agent_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `piece`
--
ALTER TABLE `piece`
  ADD CONSTRAINT `piece_ibfk_1` FOREIGN KEY (`Matricule`) REFERENCES `tb_am_agents` (`Agent_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
