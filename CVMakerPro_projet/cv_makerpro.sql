-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 07 nov. 2020 à 14:56
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cv_makerpro`
--

-- --------------------------------------------------------

--
-- Structure de la table `ecole`
--

CREATE TABLE `ecole` (
  `ID` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `niveau_etude` varchar(255) NOT NULL,
  `etablissement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ecole`
--

INSERT INTO `ecole` (`ID`, `adresse`, `niveau_etude`, `etablissement`) VALUES
(1, 'Compiegne', 'College', 'Ferdinand bac'),
(2, 'Compiegne', 'Lycée', 'Pierre D\'ailly'),
(3, 'Compiegne', 'Lycée', 'Mireille grenet'),
(4, 'Compiegne', 'College', 'Jean Paul 2'),
(5, 'Compiègne', 'Collège', 'Debussy'),
(6, 'Belfort', 'Université', 'Technologique'),
(8, 'Paris', 'Université', 'Sorbonne'),
(9, 'Compiegne', 'College', 'Guynemer');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `ID` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `secteur` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`ID`, `adresse`, `secteur`, `nom`) VALUES
(5, 'Istres', 'Aéronotique', 'Dassault Aviation');

-- --------------------------------------------------------

--
-- Structure de la table `expériences professionnelle`
--

CREATE TABLE `expériences professionnelle` (
  `ID` int(11) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `taches` text NOT NULL,
  `poste` varchar(255) NOT NULL,
  `id_entreprise` int(11) NOT NULL,
  `id_inscription` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `expériences scolaire`
--

CREATE TABLE `expériences scolaire` (
  `ID` int(11) NOT NULL,
  `annee_sortie` year(4) NOT NULL,
  `annee_entree` year(4) NOT NULL,
  `diplome` varchar(255) NOT NULL,
  `id_ecole` int(11) NOT NULL,
  `id_inscription` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `informations personnelle`
--

CREATE TABLE `informations personnelle` (
  `ID` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `num_tel` int(11) NOT NULL,
  `date_naissance` date NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `description1` text NOT NULL,
  `description2` text NOT NULL,
  `description3` text NOT NULL,
  `poste` varchar(255) NOT NULL,
  `id_inscription` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `ID` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `loisirs`
--

CREATE TABLE `loisirs` (
  `ID` int(11) NOT NULL,
  `loisir` varchar(255) NOT NULL,
  `id_inscription` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `niveau langue`
--

CREATE TABLE `niveau langue` (
  `ID` int(11) NOT NULL,
  `langue` varchar(255) NOT NULL,
  `niveau` int(11) NOT NULL,
  `id_inscription` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `qualifications`
--

CREATE TABLE `qualifications` (
  `ID` int(11) NOT NULL,
  `qualif` varchar(255) NOT NULL,
  `id_inscription` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ecole`
--
ALTER TABLE `ecole`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `expériences professionnelle`
--
ALTER TABLE `expériences professionnelle`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_entreprise` (`id_entreprise`),
  ADD KEY `id_inscription` (`id_inscription`);

--
-- Index pour la table `expériences scolaire`
--
ALTER TABLE `expériences scolaire`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_ecole` (`id_ecole`),
  ADD KEY `id_inscription` (`id_inscription`);

--
-- Index pour la table `informations personnelle`
--
ALTER TABLE `informations personnelle`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_inscription` (`id_inscription`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `loisirs`
--
ALTER TABLE `loisirs`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_inscription` (`id_inscription`);

--
-- Index pour la table `niveau langue`
--
ALTER TABLE `niveau langue`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_inscription` (`id_inscription`);

--
-- Index pour la table `qualifications`
--
ALTER TABLE `qualifications`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_inscription` (`id_inscription`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ecole`
--
ALTER TABLE `ecole`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `expériences professionnelle`
--
ALTER TABLE `expériences professionnelle`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT pour la table `expériences scolaire`
--
ALTER TABLE `expériences scolaire`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT pour la table `informations personnelle`
--
ALTER TABLE `informations personnelle`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `loisirs`
--
ALTER TABLE `loisirs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT pour la table `niveau langue`
--
ALTER TABLE `niveau langue`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT pour la table `qualifications`
--
ALTER TABLE `qualifications`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `expériences professionnelle`
--
ALTER TABLE `expériences professionnelle`
  ADD CONSTRAINT `expériences professionnelle_ibfk_1` FOREIGN KEY (`id_entreprise`) REFERENCES `entreprise` (`ID`);

--
-- Contraintes pour la table `expériences scolaire`
--
ALTER TABLE `expériences scolaire`
  ADD CONSTRAINT `expériences scolaire_ibfk_1` FOREIGN KEY (`id_ecole`) REFERENCES `ecole` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
