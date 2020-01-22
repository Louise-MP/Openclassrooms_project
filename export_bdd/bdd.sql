-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  sam. 28 déc. 2019 à 01:36
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `espace_membre`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteurs`
--

CREATE TABLE `acteurs` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `acteurs`
--

INSERT INTO `acteurs` (`id`, `titre`, `description`) VALUES
(1, 'dsa', 'Dsa France accélère la croissance du territoire et s’engage avec les collectivités territoriales. Nous accompagnons les entreprises dans les étapes clés de leur évolution. Notre philosophie : s’adapter à chaque entreprise. Nous les accompagnons pour voir plus grand et plus loin et proposons des solutions de financement adaptées à chaque étape de la vie des entreprises'),
(2, 'formation_co', 'Formation&co est une association française présente sur tout le territoire.\r\n\r\nNous proposons à des personnes issues de tout milieu de devenir entrepreneur grâce à un crédit et un accompagnement professionnel et personnalisé.\r\nNotre proposition :\r\n\r\nun financement jusqu’à 30 000€.\r\n\r\nun suivi personnalisé et gratuit.\r\n\r\nune lutte acharnée contre les freins sociétaux et les stéréotypes.\r\n\r\nLe financement est possible, peu importe le métier :\r\ncoiffeur, banquier, éleveur de chèvres…\r\n\r\nNous collaborons avec des personnes talentueuses et motivées.\r\n\r\nVous n’avez pas de diplômes ? Ce n’est pas un problème pour nous ! Nos financements s’adressent à tous.'),
(3, 'protect', 'Protectpeople finance la solidarité nationale. Nous appliquons le principe édifié par la Sécurité sociale française en 1945 : permettre à chacun de bénéficier d’une protection sociale.\r\n\r\nChez Protectpeople, chacun cotise selon ses moyens et reçoit selon ses besoins. Proectecpeople est ouvert à tous, sans considération d’âge ou d’état de santé.\r\n\r\nNous garantissons un accès aux soins et une retraite. Chaque année, nous collectons et répartissons 300 milliards d’euros. Notre mission est double :\r\n\r\nsociale : nous garantissons la fiabilité des données sociales.\r\n\r\néconomique : nous apportons une contribution aux activités économiques.'),
(4, 'cde', 'La CDE (Chambre Des Entrepreneurs) accompagne les entreprises dans leurs démarches de formation. Son président est élu pour 3 ans par ses pairs, chefs d’entreprises et présidents des CDE.');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `comment` text NOT NULL,
  `createOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `question` varchar(100) NOT NULL,
  `reponse` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `nom`, `prenom`, `pseudo`, `email`, `mdp`, `question`, `reponse`) VALUES
(1, 'Baba', 'Carole', 'baca', 'baca@gmail.com', '123', '', ''),
(83, 'test1', 'test1', 'test1', 'test1@g', '$2y$10$tkmZWx705/BXOUpPKz767.bivVgLIT7NgBqz6XfI47fFI7jm4mQhe', 'color', 'rouge'),
(84, 'test3', 'test3', 'test3', 'test3@g', '$2y$10$y7GdDkKYRzdfYu6T04bnsOxC5dlJNzp7LHNDpNyjwtkIl61totu3C', 'color', 'rouge'),
(85, 'test4', 'test4', 'test4', 'test4@g', '$2y$10$f8NgrNe9.oBC46b/Fs8in..TffV6hiA9zJqIa.oLGCaQFQf3la1Ki', 'color', 'rouge'),
(86, 'test3', 'test3', 'test3', 'test3@g', '$2y$10$uZN6GRIhjjgWh5zrJ3MgNeuuF3l8h0TZdRwsFUnFPM3WIkVZFe3z2', 'color', 'rouge'),
(87, 'test444', 'test444', 'test444', 'test444@g', '$2y$10$HD9iBLSY8Y9R4MNtT9Pv0O7oiHKyW6hb/L8yLNEUu4.0ypSwnJkKm', 'color', 'rouge'),
(88, 'test56', 'test56', 'test56', 'test56@g', '$2y$10$.xmXnUme6M0IyQW7BgD03Oj/Dp1hDadKMZEbJjsQD2ov6w0GfR6Qi', 'color', 'rouge'),
(89, 'test88', 'test88', 'test88', 'test88@g', '$2y$10$amDzc4tXdSUZD0aWVIeLs.5XChhzmshtaRlPu2C.QRKdWfOMZfl3e', 'color', 'rouge'),
(90, 'test333', 'test333', 'test333', 'test333@g', '$2y$10$oj9T6lcEOqe8Q4Niw3EVhuSEgE9f0L9t4yspIaOTCN.XqT7LQ0jUi', 'color', 'rouge'),
(91, 'Filali', 'Mehdi', 'm91', 'mf@gmail.com', '$2y$10$l/LdKLHcw4yfcq2lI7CAZumNkmFelZhNsXW6Zv402/xHRrFtm/SUC', 'color', 'rouge');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acteurs`
--
ALTER TABLE `acteurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acteurs`
--
ALTER TABLE `acteurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
