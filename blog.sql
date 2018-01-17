-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 15, 2018 at 09:54 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tag` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `titre`, `description`, `image`, `contenu`, `auteur`, `tag`, `date`) VALUES
(1, 'test', 'testststststststst', 'https://cdn.pixabay.com/photo/2013/04/06/11/50/image-editing-101040_960_720.jpg', 'tetetettetetetettetete', 'Alexis', 'Commun', '2018-01-15 00:00:00'),
(2, 'Symfony j\'aime pas', 'test', 'http://j-place.developpez.com/tutoriels/php/creer-premiere-application-web-avec-symfony2/images/1-screenshot_sf2_welcome.PNG', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras consequat placerat nisl eget mattis. Proin nibh tortor, ullamcorper posuere enim at, convallis luctus lorem. Proin ullamcorper at turpis mollis feugiat. Pellentesque sit amet nisl et urna elementum pretium. Fusce non eros ac sapien semper cursus. Phasellus pretium dapibus leo id dictum. Integer urna velit, auctor eu magna rutrum, dictum vestibulum urna. Etiam vel sapien sem. Phasellus ligula erat, ullamcorper eu malesuada ut, pulvinar a elit. Cras iaculis fermentum ornare. Duis sagittis fringilla leo ut faucibus. Sed ut magna turpis. Morbi nec viverra lectus. Aenean tristique auctor lacus. Nulla vestibulum sed libero vitae fermentum.\r\n<hr>\r\nSed odio odio, suscipit quis accumsan nec, posuere quis enim. Aenean et metus finibus, consequat urna in, ullamcorper lacus. Maecenas eu volutpat leo, in sodales lorem. Maecenas posuere lectus enim, a auctor erat bibendum sed. Nunc consectetur, erat sed elementum elementum, ex enim euismod odio, quis sodales dui diam in velit. In luctus nisi a ante fermentum laoreet. Praesent placerat tellus ipsum, quis elementum dui placerat id. Donec imperdiet vitae ligula quis pretium. Proin gravida fermentum ultrices. Proin arcu nibh, elementum ac ornare sed, venenatis sed purus. Nunc ut vestibulum odio, sit amet venenatis enim. Aliquam eget eros a ligula sollicitudin hendrerit non at ante.\r\n\r\nNunc eget odio sit amet felis varius porttitor sed ut ligula. Phasellus tempus quam ac augue faucibus, eget bibendum est tempor. Donec commodo purus sed nunc scelerisque, eget condimentum lorem volutpat. Vestibulum enim nunc, egestas ac eleifend eu, auctor non turpis. Curabitur interdum libero eu molestie lobortis. Pellentesque varius mi sem, nec pulvinar neque consectetur nec. Aliquam lobortis lacinia est. Maecenas scelerisque aliquam nibh ac fermentum. Integer elit diam, aliquet in turpis vitae, elementum volutpat turpis.\r\n\r\nCras augue ipsum, tempor id justo nec, pellentesque sagittis nulla. Suspendisse potenti. Quisque porta placerat rutrum. Vivamus placerat at quam gravida lobortis. Vestibulum volutpat blandit mauris, at vestibulum ante cursus sed. Integer tempor felis a blandit cursus. Donec gravida leo eu lectus gravida, sit amet aliquet erat vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. In maximus elit est, tempus facilisis risus varius ut. Fusce dolor eros, mattis eget sapien vel, cursus tempus enim. Aenean vel dolor at mauris gravida maximus. Curabitur diam nisi, molestie vulputate est sit amet, iaculis commodo tellus. Nunc at congue ante, quis ullamcorper ligula. In finibus scelerisque augue, vel porttitor turpis. Duis et hendrerit purus.\r\n\r\nDonec placerat mattis nibh a hendrerit. Aliquam turpis diam, fermentum at dolor vitae, imperdiet placerat ligula. Vivamus vestibulum id mauris nec lobortis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque id scelerisque dolor, sed elementum risus. Etiam sit amet imperdiet massa. Curabitur dolor quam, volutpat vel mattis elementum, maximus a velit. Sed elementum nec orci sed ultricies. Aenean vehicula lacus imperdiet ligula porttitor iaculis a id diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel egestas tellus, at aliquam lacus. Pellentesque id fermentum leo, at convallis metus. In auctor lacus quam, et pulvinar nisi venenatis a.\r\n\r\nSed ullamcorper nisl id metus rutrum ullamcorper. Ut faucibus lorem ac felis pulvinar porttitor. Donec lobortis quam vel consectetur volutpat. Vivamus vitae commodo lectus. Donec dignissim sapien nec urna scelerisque, sodales convallis metus venenatis. Aliquam pharetra, sapien et dignissim tincidunt, nibh metus auctor sem, non interdum lectus odio ut sem. Vestibulum varius pulvinar mauris sit amet lobortis.\r\n\r\nSed pellentesque nisi eget turpis cursus vestibulum. Phasellus eu diam a nibh efficitur venenatis vel eget orci. Donec gravida diam in placerat tincidunt. Etiam non ullamcorper quam. Aenean rutrum dui eget interdum laoreet. Praesent vehicula augue eu libero iaculis, non porta turpis dignissim. Donec malesuada, mauris in eleifend aliquam, massa odio suscipit massa, id tincidunt lorem libero sit amet massa. Proin eget elit semper, porta mauris sit amet, porttitor felis. Proin eleifend elit in sapien convallis elementum.\r\n\r\nMorbi sit amet ultricies quam, non pretium quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent ultrices dapibus elit, ut tincidunt ligula consectetur vitae. Integer et magna at ex condimentum sollicitudin. Sed quis dignissim velit. Vivamus id aliquet tellus. Aliquam tempor rhoncus laoreet. Proin porttitor enim sed pretium consequat. Vestibulum elementum enim eget arcu laoreet blandit. In sed varius diam. Pellentesque ligula odio, dictum congue feugiat bibendum, imperdiet at metus. Donec tristique egestas mi eu ornare. Quisque accumsan euismod eleifend. Pellentesque in leo et arcu mollis rutrum ut et elit. Aenean iaculis nisl sit amet nisi vehicula, at venenatis metus viverra. Nunc eu nisi vel lectus imperdiet facilisis.\r\n\r\nMaecenas eu libero quis eros consectetur semper cursus tincidunt neque. Ut mattis mattis turpis, at semper massa ullamcorper eu. Cras ullamcorper pulvinar quam et sodales. Quisque auctor arcu ut diam porta, eu posuere velit semper. Nam ut convallis lectus. Mauris faucibus facilisis libero nec placerat. Curabitur semper nibh eget nunc eleifend aliquam. Aliquam erat volutpat.\r\n\r\nMaecenas eget urna tortor. Integer est ex, lobortis at varius in, ultrices non sapien. Duis tortor nisl, eleifend vel venenatis in, cursus ut neque. Nunc ac libero mollis, consequat elit id, aliquam odio. Phasellus fermentum gravida ex non bibendum. Cras blandit metus sed purus pharetra rutrum. Aliquam fermentum pretium dolor, at mollis enim suscipit non. In hac habitasse platea dictumst.', 'test', 'test', '2018-01-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `certification`
--

CREATE TABLE `certification` (
  `id` int(11) NOT NULL,
  `titre_certification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu_certification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_certification` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `certification`
--

INSERT INTO `certification` (`id`, `titre_certification`, `contenu_certification`, `date_certification`) VALUES
(1, 'Google Analytics', 'Google Analytics est un outil puissant et flexible qui permet notamment les fonctionnalités suivantes: Génèrer des données pour n\'importe quel période', 'Avril 2017');

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `commentaires` longtext COLLATE utf8_unicode_ci NOT NULL,
  `isvalid` tinyint(1) NOT NULL,
  `idarticle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `commentaires`
--

INSERT INTO `commentaires` (`id`, `pseudo`, `commentaires`, `isvalid`, `idarticle`) VALUES
(1, 'Test', 'test', 1, '1'),
(2, 'test', 'test', 1, '1'),
(3, 'test', 'kshflkqhglkdqhglhdqlkghlkdhglqdh', 1, '1'),
(5, 'Alexis', 'test', 1, '2'),
(6, 'Alexis', 'ceci est un test', 0, '1'),
(7, 'Otaku', 'T\'a raison mais les hentai c\'est mieux', 1, '2'),
(8, 'Otaku', 'T\'a raison mais les hentai c\'est mieux', 0, '2'),
(9, 'Salut', 'test', 0, '2');

-- --------------------------------------------------------

--
-- Table structure for table `competence`
--

CREATE TABLE `competence` (
  `id` int(11) NOT NULL,
  `titre_competence` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `niveau_competence` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `competence`
--

INSERT INTO `competence` (`id`, `titre_competence`, `niveau_competence`) VALUES
(1, 'C#', 'Bon'),
(2, 'Python', 'Bon'),
(3, 'Shell', 'Moyen'),
(4, 'Php', 'Nul'),
(5, 'Game Design', 'Bon'),
(6, 'Management', 'Bon'),
(7, 'Animation 3D', 'Moyen');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `titre_diplome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu_diplome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_diplome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titre_competence` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `niveau_competence` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titre_experience` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu_experience` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_experience` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titre_certification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu_certification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_certification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titre_realisation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_realisation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu_realisation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_realisation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `langue` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diplome`
--

CREATE TABLE `diplome` (
  `id` int(11) NOT NULL,
  `titre_diplome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu_diplome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_diplome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ecole_diplome` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `diplome`
--

INSERT INTO `diplome` (`id`, `titre_diplome`, `contenu_diplome`, `date_diplome`, `ecole_diplome`) VALUES
(1, 'Ingésup', 'en 2ème années pour la préparation d\'un bachelor Architecture Informatique.', '2017-2018', 'Campus Ynov'),
(2, 'Ingésup', 'En 1° année pour la préparation d\'un bachelor d\'architecture informatique.', '2016-2017', 'Campus Ynov'),
(3, 'Bac Pro SEN', 'Bac pro système électronique et numérique en spécialité télécomunication et réseau', '2014-2015', 'Jean-Monnet'),
(4, 'BEP SEN', 'Brevet étude professionnel dans le secteur du système électronique et numérique.', '2013-2014', 'Jean-Monnet');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `titre_experience` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu_experience` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_experience` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `titre_experience`, `contenu_experience`, `date_experience`) VALUES
(1, 'Tmp-Informatique', 'Technicien Informatique, Management, Mise en service, relation client, développement.', '2012-2015'),
(2, 'Rn-motoculture', 'Création d\'un site internet sous laravel, gestion de toute la partie back par un panel admin. Gestion de la partie occasion par l\'entreprise grâce à un pannel d\'administration.', '2017-aujourd\'hui');

-- --------------------------------------------------------

--
-- Table structure for table `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(1, 'test', 'test', 'alexis.aubineau@ynov.com', 'alexis.aubineau@ynov.com', 1, NULL, '$2y$13$lW/Qr6a0BUiMIA8UaoSXveH5Nbat/7C0WfkeD52UAo3PLQ.zSdYd2', '2018-01-15 15:30:04', NULL, NULL, 'a:2:{i:0;s:16:\"ROLE_SUPER_ADMIN\";i:1;s:10:\"ROLE_ADMIN\";}');

-- --------------------------------------------------------

--
-- Table structure for table `me`
--

CREATE TABLE `me` (
  `id` int(11) NOT NULL,
  `Adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Code_postal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Numero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Adresse_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Ville` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `me`
--

INSERT INTO `me` (`id`, `Adresse`, `Code_postal`, `Numero`, `Adresse_mail`, `Ville`, `Description`) VALUES
(1, '2 chemin de la tauziatte', '24230', '0658060687', 'alexis.aubineau@ynov.com', 'Lamothe Montravel', 'Développeur junior C#, Java, Python. Curieux, polyvalent, rigoureux. A la recherche d\'un stage ou d\'une alternance');

-- --------------------------------------------------------

--
-- Table structure for table `realisation`
--

CREATE TABLE `realisation` (
  `id` int(11) NOT NULL,
  `titre_realisation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu_realisation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_realisation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_realisation` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `realisation`
--

INSERT INTO `realisation` (`id`, `titre_realisation`, `contenu_realisation`, `url_realisation`, `date_realisation`) VALUES
(1, 'Cv-Blog php sous symfony', 'Le but de ce projet fut de créer un cv plus un blog sous symfony entièreent administrable depuis le panel administrateur', '', '15-01-18'),
(2, 'Création d\'un réseau d\'entreprise', 'Le but de ce projet étais de répondre à un appel d\'offre pour gérer le parc inforatique d\'une société.', '', '21-12-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certification`
--
ALTER TABLE `certification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `competence`
--
ALTER TABLE `competence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diplome`
--
ALTER TABLE `diplome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`);

--
-- Indexes for table `me`
--
ALTER TABLE `me`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `realisation`
--
ALTER TABLE `realisation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `certification`
--
ALTER TABLE `certification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `competence`
--
ALTER TABLE `competence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diplome`
--
ALTER TABLE `diplome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `me`
--
ALTER TABLE `me`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `realisation`
--
ALTER TABLE `realisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
