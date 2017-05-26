-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 26 Mai 2017 à 05:32
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `chocolats`
--

-- --------------------------------------------------------

--
-- Structure de la table `chocolats`
--

CREATE TABLE `chocolats` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(2000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `chocolats`
--

INSERT INTO `chocolats` (`id`, `titre`, `description`) VALUES
(2, 'Fusce non arcu nisl', 'Duis non magna consectetur, lacinia enim non, ultricies est. Quisque nulla risus, pharetra at nisl sed, consequat posuere ipsum. Nam ac interdum augue, at sagittis sem. Aliquam blandit leo sit amet risus convallis, tempus rutrum lorem fermentum. Donec fermentum dolor a dui lobortis, a pellentesque felis molestie. Cras sed rutrum eros, id molestie tellus. Integer commodo orci tellus, quis iaculis nulla accumsan ut. Pellentesque molestie, justo sed porta pretium, purus diam dignissim sem, sit amet scelerisque magna ipsum a turpis.'),
(3, 'Ut aliquet laoreet lorem sit amet viverra', 'Mauris efficitur ipsum quis luctus vestibulum. Aliquam ornare, erat ac fringilla bibendum, orci eros elementum mauris, scelerisque tempor ante felis in felis. Vestibulum pretium non diam sed consequat. Quisque ut dui at magna dictum ultricies. Nulla in efficitur turpis. Praesent ut pretium velit. Curabitur et erat et justo rhoncus varius eget vel ex. Sed aliquam, ipsum et eleifend ornare, urna arcu lobortis lacus, condimentum hendrerit ligula sem vel ex'),
(4, 'Mauris porta a arcu nec convallis.', 'Sed lorem enim, lobortis eget ullamcorper vel, mollis quis orci. Quisque tellus elit, iaculis sit amet lacus eget, congue commodo eros. Sed vitae ipsum felis.'),
(5, 'Maecenas condimentum sodales sem, ut ultricies ipsum.', 'Aliquam iaculis fringilla sem sit amet commodo. Vivamus et mi aliquam, rhoncus dui eu, ultrices velit. Mauris vel sapien vitae sapien venenatis dignissim ac sit amet mi. Praesent eu aliquam purus. Suspendisse id enim ante. In nec efficitur ex.');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `auteur` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `commentaire` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `choco_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `auteur`, `commentaire`, `choco_id`) VALUES
(1, 'John Doe', 'Wow super le chocolat maaan!', 2),
(2, 'Jane Doe', 'Biiiigggg c\'est de la bombe cette sucrerie. Boum!', 3),
(3, 'Yo Yo', 'Jamais gouté a de quoi d\'aussi pas bon. Wouash.', 4),
(4, 'Dat Nigga', 'Pas pire. Je survis la', 5);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `username`, `passe`) VALUES
(1, 'Utilisateur Demo', 'demo', '7fe3514552cfeae2ee81e664ff7c4bfa25a327b4');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `chocolats`
--
ALTER TABLE `chocolats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `choco_id` (`choco_id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `chocolats`
--
ALTER TABLE `chocolats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `choco_id` FOREIGN KEY (`choco_id`) REFERENCES `chocolats` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
