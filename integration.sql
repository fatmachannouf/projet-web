-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 18 déc. 2024 à 22:10
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `integration`
--

-- --------------------------------------------------------

--
-- Structure de la table `certificat`
--

CREATE TABLE `certificat` (
  `id_certificat` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_certificat` date DEFAULT curdate(),
  `commentaire` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `certificat`
--

INSERT INTO `certificat` (`id_certificat`, `nom`, `email`, `date_certificat`, `commentaire`) VALUES
(19, 'imen', 'channouffatma72@gmail.com', '2024-12-13', 'php'),
(20, 'fatma', 'channouffatma42@gmail.com', '2024-12-13', 'kk'),
(21, 'hbdch', 'channouffatma92@gmail.com', '2024-12-13', 'kg'),
(24, 'koussay', 'koussay.channouf@gmail.com', '2024-12-14', 'c++');

-- --------------------------------------------------------

--
-- Structure de la table `chapitre`
--

CREATE TABLE `chapitre` (
  `NomCh` varchar(50) NOT NULL,
  `NumeroCh` int(3) NOT NULL,
  `Contenue` mediumtext NOT NULL,
  `NomC` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `NomC` varchar(100) NOT NULL,
  `ImageC` varchar(9000) NOT NULL,
  `DescriptionC` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`NomC`, `ImageC`, `DescriptionC`) VALUES
('C', 'C:\\xampp\\htdocs\\Learnora\\View\\Images\\C.PNG', 'C is a general-purpose programming language that has been widely used for over 50 years. C is very powerful; it has been used to develop operating systems, databases, applications, etc.'),
('C++', 'C:\\xampp\\htdocs\\Learnora\\View\\Images\\C++.PNG', 'C++ is a popular programming language. C++ is used to create computer programs, and is one of the most used language in game development. C++ was developed as an extension of C, and both languages have almost the same syntax.'),
('CSS', 'C:\\xampp\\htdocs\\Learnora\\View\\Images\\CSS.JPG', 'CSS is the language we use to style an HTML document. CSS describes how HTML elements should be displayed. This tutorial will teach you CSS from basic to advanced.'),
('HTML', 'C:\\xampp\\htdocs\\Learnora\\View\\Images\\HTML.JPG', 'HTML is the standard markup language for Web pages. With HTML you can create your own Website. HTML is easy to learn - You will enjoy it!'),
('JavaScript', 'C:\\xampp\\htdocs\\Learnora\\View\\Images\\JS.JPG', 'JavaScript is the world\'s most popular programming language. JavaScript is the programming language of the Web. JavaScript is easy to learn. This tutorial will teach you JavaScript from basic to advanced.'),
('MySQL', 'C:\\xampp\\htdocs\\Learnora\\View\\Images\\MySQL.PNG', 'MySQL is a widely used relational database management system (RDBMS). MySQL is free and open-source. MySQL is ideal for both small and large applications.'),
('PHP', 'C:\\xampp\\htdocs\\Learnora\\View\\Images\\PHP.JPG', 'PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft\'s ASP.'),
('PYTHON', 'C:\\xampp\\htdocs\\Learnora\\View\\Images\\PYTHON.PNG', 'Python is a popular programming language. Python can be used on a server to create web applications.'),
('SQL', 'C:\\xampp\\htdocs\\Learnora\\View\\Images\\SQL.PNG', 'SQL is a standard language for storing, manipulating and retrieving data in databases. Our SQL tutorial will teach you how to use SQL in: MySQL, SQL Server, MS Access, Oracle, Sybase, Informix, Postgres, and other database systems.');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `idquestion` int(11) NOT NULL,
  `texte` varchar(255) NOT NULL,
  `type` enum('php','js','java','c++') NOT NULL,
  `reponsepossible` text DEFAULT NULL,
  `reponsecorrecte` varchar(255) NOT NULL,
  `note` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`idquestion`, `texte`, `type`, `reponsepossible`, `reponsecorrecte`, `note`) VALUES
(3, 'jbcjhs', '', 'sdcd,dzz,sqd', 'sqd', 0),
(4, 'hdvscgh', '', 'dcs,dsd,dcds', 'dsd', 0),
(5, 'gdvcds', '', 'dhcv,ff,gg', 'ff', 0),
(6, 'dcd', '', 'ddd,dds,ff', 'ddd', 0),
(14, 'jhjghj', '', 'jhjbh,hhh', 'hhh', 0),
(15, 'hh', '', 'll,kk,mm', 'mm', 0),
(17, 'rskxc', '', 'hh,mm,ff', 'hh', 0);

-- --------------------------------------------------------

--
-- Structure de la table `resultat`
--

CREATE TABLE `resultat` (
  `idtest` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `idquestion` int(11) NOT NULL,
  `note` decimal(10,0) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `resultat`
--

INSERT INTO `resultat` (`idtest`, `userid`, `idquestion`, `note`, `date`) VALUES
(198, 'user125', 3, 1, '2024-12-05 18:00:01'),
(199, 'user125', 4, 1, '2024-12-05 18:00:01'),
(200, 'user125', 5, 1, '2024-12-05 18:00:01'),
(201, 'user125', 6, 1, '2024-12-05 18:00:01'),
(202, 'user125', 14, 1, '2024-12-05 18:00:01'),
(204, 'user125', 3, 1, '2024-12-05 18:00:45'),
(205, 'user125', 4, 1, '2024-12-05 18:00:45'),
(206, 'user125', 5, 1, '2024-12-05 18:00:45'),
(207, 'user125', 6, 1, '2024-12-05 18:00:45'),
(208, 'user125', 14, 1, '2024-12-05 18:00:45'),
(210, 'user125', 3, 1, '2024-12-05 19:13:42'),
(211, 'user125', 4, 1, '2024-12-05 19:13:42'),
(212, 'user125', 5, 1, '2024-12-05 19:13:42'),
(213, 'user125', 6, 1, '2024-12-05 19:13:42'),
(214, 'user125', 14, 1, '2024-12-05 19:13:42'),
(278, 'user123', 3, 1, '2024-12-06 14:46:50'),
(279, 'user123', 4, 1, '2024-12-06 14:46:50'),
(280, 'user123', 5, 1, '2024-12-06 14:46:50'),
(281, 'user123', 6, 1, '2024-12-06 14:46:50'),
(282, 'user123', 14, 1, '2024-12-06 14:46:50'),
(283, 'user123', 15, 1, '2024-12-06 14:46:50'),
(284, 'user123', 17, 1, '2024-12-06 14:46:50'),
(286, 'user123', 3, 1, '2024-12-06 14:57:53'),
(287, 'user123', 4, 1, '2024-12-06 14:57:53'),
(288, 'user123', 5, 1, '2024-12-06 14:57:53'),
(289, 'user123', 6, 1, '2024-12-06 14:57:53'),
(290, 'user123', 14, 1, '2024-12-06 14:57:53'),
(291, 'user123', 15, 1, '2024-12-06 14:57:53'),
(292, 'user123', 17, 1, '2024-12-06 14:57:53'),
(294, 'user123', 3, 1, '2024-12-06 19:41:05'),
(295, 'user123', 4, 1, '2024-12-06 19:41:05'),
(296, 'user123', 5, 1, '2024-12-06 19:41:05'),
(297, 'user123', 6, 1, '2024-12-06 19:41:05'),
(298, 'user123', 14, 1, '2024-12-06 19:41:05'),
(299, 'user123', 15, 1, '2024-12-06 19:41:05'),
(300, 'user123', 17, 1, '2024-12-06 19:41:05'),
(302, 'user123', 3, 1, '2024-12-12 17:25:59'),
(303, 'user123', 4, 1, '2024-12-12 17:25:59'),
(304, 'user123', 5, 1, '2024-12-12 17:25:59'),
(305, 'user123', 6, 1, '2024-12-12 17:25:59'),
(306, 'user123', 14, 1, '2024-12-12 17:25:59'),
(307, 'user123', 15, 1, '2024-12-12 17:25:59'),
(308, 'user123', 17, 1, '2024-12-12 17:25:59'),
(310, 'user123', 3, 1, '2024-12-12 18:17:20'),
(311, 'user123', 4, 1, '2024-12-12 18:17:20'),
(312, 'user123', 5, 1, '2024-12-12 18:17:20'),
(313, 'user123', 6, 1, '2024-12-12 18:17:20'),
(314, 'user123', 14, 1, '2024-12-12 18:17:20'),
(315, 'user123', 15, 1, '2024-12-12 18:17:20'),
(316, 'user123', 17, 1, '2024-12-12 18:17:20'),
(317, 'user123', 3, 1, '2024-12-12 19:37:31'),
(318, 'user123', 4, 1, '2024-12-12 19:37:31'),
(319, 'user123', 5, 1, '2024-12-12 19:37:31'),
(320, 'user123', 6, 1, '2024-12-12 19:37:31'),
(321, 'user123', 14, 1, '2024-12-12 19:37:31'),
(322, 'user123', 15, 1, '2024-12-12 19:37:31'),
(323, 'user123', 17, 1, '2024-12-12 19:37:31'),
(324, 'user123', 3, 1, '2024-12-12 20:54:58'),
(325, 'user123', 4, 1, '2024-12-12 20:54:58'),
(326, 'user123', 5, 1, '2024-12-12 20:54:58'),
(327, 'user123', 6, 1, '2024-12-12 20:54:58'),
(328, 'user123', 14, 1, '2024-12-12 20:54:58'),
(329, 'user123', 15, 1, '2024-12-12 20:54:58'),
(330, 'user123', 17, 1, '2024-12-12 20:54:58'),
(331, 'user123', 3, 1, '2024-12-12 21:12:50'),
(332, 'user123', 4, 1, '2024-12-12 21:12:50'),
(333, 'user123', 5, 1, '2024-12-12 21:12:50'),
(334, 'user123', 6, 1, '2024-12-12 21:12:50'),
(335, 'user123', 14, 1, '2024-12-12 21:12:50'),
(336, 'user123', 15, 1, '2024-12-12 21:12:50'),
(337, 'user123', 17, 1, '2024-12-12 21:12:50'),
(338, 'user123', 3, 1, '2024-12-13 01:16:26'),
(339, 'user123', 4, 1, '2024-12-13 01:16:26'),
(340, 'user123', 5, 1, '2024-12-13 01:16:26'),
(341, 'user123', 6, 1, '2024-12-13 01:16:26'),
(342, 'user123', 14, 1, '2024-12-13 01:16:26'),
(343, 'user123', 15, 1, '2024-12-13 01:16:26'),
(344, 'user123', 17, 1, '2024-12-13 01:16:26'),
(345, 'user123', 3, 1, '2024-12-13 01:19:17'),
(346, 'user123', 4, 1, '2024-12-13 01:19:17'),
(347, 'user123', 5, 1, '2024-12-13 01:19:17'),
(348, 'user123', 6, 1, '2024-12-13 01:19:17'),
(349, 'user123', 14, 1, '2024-12-13 01:19:17'),
(350, 'user123', 15, 1, '2024-12-13 01:19:17'),
(351, 'user123', 17, 1, '2024-12-13 01:19:17'),
(352, 'user123', 3, 1, '2024-12-13 01:23:55'),
(353, 'user123', 4, 1, '2024-12-13 01:23:55'),
(354, 'user123', 5, 1, '2024-12-13 01:23:55'),
(355, 'user123', 6, 1, '2024-12-13 01:23:55'),
(356, 'user123', 14, 1, '2024-12-13 01:23:55'),
(357, 'user123', 15, 1, '2024-12-13 01:23:55'),
(358, 'user123', 17, 1, '2024-12-13 01:23:55'),
(359, 'user123', 3, 1, '2024-12-13 01:38:26'),
(360, 'user123', 4, 1, '2024-12-13 01:38:26'),
(361, 'user123', 5, 1, '2024-12-13 01:38:26'),
(362, 'user123', 6, 1, '2024-12-13 01:38:26'),
(363, 'user123', 14, 1, '2024-12-13 01:38:26'),
(364, 'user123', 15, 1, '2024-12-13 01:38:26'),
(365, 'user123', 17, 1, '2024-12-13 01:38:26'),
(366, 'user123', 3, 1, '2024-12-13 08:55:32'),
(367, 'user123', 4, 1, '2024-12-13 08:55:32'),
(368, 'user123', 5, 1, '2024-12-13 08:55:32'),
(369, 'user123', 6, 1, '2024-12-13 08:55:32'),
(370, 'user123', 14, 1, '2024-12-13 08:55:32'),
(371, 'user123', 15, 1, '2024-12-13 08:55:32'),
(372, 'user123', 17, 1, '2024-12-13 08:55:32'),
(373, 'user123', 3, 1, '2024-12-13 09:52:32'),
(374, 'user123', 4, 1, '2024-12-13 09:52:32'),
(375, 'user123', 5, 1, '2024-12-13 09:52:32'),
(376, 'user123', 6, 1, '2024-12-13 09:52:32'),
(377, 'user123', 14, 1, '2024-12-13 09:52:32'),
(378, 'user123', 15, 1, '2024-12-13 09:52:32'),
(379, 'user123', 17, 1, '2024-12-13 09:52:32'),
(380, 'user123', 3, 1, '2024-12-14 14:13:07'),
(381, 'user123', 4, 1, '2024-12-14 14:13:07'),
(382, 'user123', 5, 1, '2024-12-14 14:13:07'),
(383, 'user123', 6, 1, '2024-12-14 14:13:07'),
(384, 'user123', 14, 1, '2024-12-14 14:13:07'),
(385, 'user123', 15, 1, '2024-12-14 14:13:07'),
(386, 'user123', 17, 1, '2024-12-14 14:13:07'),
(387, 'user123', 3, 1, '2024-12-14 14:29:29'),
(388, 'user123', 4, 1, '2024-12-14 14:29:29'),
(389, 'user123', 5, 1, '2024-12-14 14:29:29'),
(390, 'user123', 6, 1, '2024-12-14 14:29:29'),
(391, 'user123', 14, 1, '2024-12-14 14:29:29'),
(392, 'user123', 15, 1, '2024-12-14 14:29:29'),
(393, 'user123', 17, 1, '2024-12-14 14:29:29');

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `configpassword` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'student',
  `photo` varchar(255) DEFAULT NULL,
  `reset_token_hash` varchar(64) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`id`, `fullname`, `email`, `password`, `configpassword`, `role`, `photo`, `reset_token_hash`, `reset_token_expires_at`) VALUES
(1, 'eya', 'eya.trabelsi.2@esprit.tn', '777777', '777777', 'student', NULL, NULL, NULL),
(8, 'eya', 'eya.trabelsi.2@esprit.tn', '30', '30', 'student', NULL, NULL, NULL),
(9, 'eya', 'eya.trabelsi.2@esprit.tn', '30', '30', 'student', NULL, NULL, NULL),
(10, 'eya', 'admin@gamil.com', '30', '30', 'student', NULL, NULL, NULL),
(13, 'eya', 'admin2004@gamil.com', '30', '30', 'student', NULL, NULL, NULL),
(14, 'eya', 'admin2004@gmail.com', '4', '4', 'student', NULL, NULL, NULL),
(15, 'eya', 'admin2004@gamil.com', '8', '8', 'student', NULL, NULL, NULL),
(17, 'eya', 'eya.trabelsi.2@esprit.tn', '320', '320', 'student', NULL, NULL, NULL),
(18, 'eya', 'eya.trabelsi.2@esprit.tn', '9', '9', 'student', NULL, NULL, NULL),
(19, 'eya', 'eya.trabelsi.2@esprit.tn', '22', '22', 'student', NULL, NULL, NULL),
(20, 'eya', 'eya.trabelsi.2@esprit.tn', '000000', '000000', 'student', NULL, NULL, NULL),
(21, 'eya', 'eyatrabellssi1996@gmail.com', '666666', '666666', 'student', NULL, NULL, NULL),
(22, 'sarah', 'eyatrabellssi1996@gmail.com', '333333', '333333', 'student', NULL, NULL, NULL),
(23, 'eya', 'eya.trabelsi.2@esprit.tn', '000000', '000000', 'student', NULL, NULL, NULL),
(24, 'admin', 'Nomutilisateuradmin@gmail.com', '30032004', '30032004', 'admin', NULL, NULL, NULL),
(25, 'samira', 'eyatrrabelsi@gmail.com', '555555', '555555', 'student', NULL, NULL, NULL),
(26, 'meniar', 'eyatrrabelsi@gmail.com', '888888', '888888', 'student', NULL, NULL, NULL),
(27, 'gggg', 'ggg@gmail.com', '000000', '000000', 'student', NULL, NULL, NULL),
(28, 'sarah', 'eya.trabelsi.2@esprit.tn', '000000', '000000', 'student', NULL, NULL, NULL),
(29, 'nada', 'eya.trabelsi.2@esprit.tn', '777777', '777777', 'student', NULL, NULL, NULL),
(30, 'nada', 'eya.trabelsi.2@esprit.tn', '777777', '777777', 'student', NULL, NULL, NULL),
(31, 'eya', 'eya.trabelsi.2@esprit.tn', '555555', '555555', 'student', NULL, NULL, NULL),
(32, 'eya', 'Nomutilisateuradmin@gmail.com', '000000', '000000', 'admin', NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `certificat`
--
ALTER TABLE `certificat`
  ADD PRIMARY KEY (`id_certificat`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `chapitre`
--
ALTER TABLE `chapitre`
  ADD PRIMARY KEY (`NomCh`),
  ADD KEY `NomC` (`NomC`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`NomC`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`idquestion`);

--
-- Index pour la table `resultat`
--
ALTER TABLE `resultat`
  ADD PRIMARY KEY (`idtest`,`userid`),
  ADD KEY `fk_idquestion` (`idquestion`);

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reset_token_hash` (`reset_token_hash`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `certificat`
--
ALTER TABLE `certificat`
  MODIFY `id_certificat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `idquestion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `resultat`
--
ALTER TABLE `resultat`
  MODIFY `idtest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=394;

--
-- AUTO_INCREMENT pour la table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `resultat`
--
ALTER TABLE `resultat`
  ADD CONSTRAINT `fk_idquestion` FOREIGN KEY (`idquestion`) REFERENCES `questions` (`idquestion`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
