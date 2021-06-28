-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 18 juin 2021 à 14:07
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog-olivier`
--
CREATE DATABASE IF NOT EXISTS `blog-olivier` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blog-olivier`;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `created_at` datetime NOT NULL,
  `category_Id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_Id` (`category_Id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `created_at`, `category_Id`, `user_id`) VALUES
(31, 'La Phénoménologie de l\'Esprit de G.W.F. Hegel', 'La Phénoménologie de l’Esprit (Phänomenologie des Geistes) est une œuvre du philosophe Hegel, parue en 1807 au nombre de 750 exemplaires1. Le titre de l’édition de 1807 est Système de la science, Première partie, la Phénoménologie de l’esprit. Un autre intertitre de Hegel est : Première partie : Science de l’expérience de la conscience. Le dessein de La Phénoménologie, tel que mentionné dans sa préface, est d\'« appréhender et exprimer le vrai non comme substance, mais précisément comme sujet2 ».\r\n\r\nLa Phénoménologie de l\'Esprit compte parmi les œuvres les plus importantes de la philosophie selon Levinas3. C\'est une œuvre dense théoriquement et qui eut une certaine influence sur des écoles de pensées du XIXe siècle et du XXe siècle (marxisme4, idéalisme5). C\'est un livre conceptuel et difficile. Sa réception en France est tardiven 1. Elle est commentée et traduite à partir des années 193067.', '2021-06-18 14:08:16', 3, 5),
(32, 'La Richesse des Nations d\'Adam Smith', 'Recherches sur la nature et les causes de la richesse des nations (en anglais, An Inquiry into the Nature and Causes of the Wealth of Nations), ou plus simplement la Richesse des nations, est le plus célèbre ouvrage d’Adam Smith. Publié en 1776, c’est le premier livre moderne d’économie.\r\n\r\nSmith y expose son analyse sur l’origine de la prospérité récente de certains pays, comme l’Angleterre ou les Pays-Bas. Il développe des théories économiques sur la division du travail, le marché, la monnaie, la nature de la richesse, le « prix des marchandises en travail », les salaires, les profits et l’accumulation du capital. Il examine différents systèmes d’économie politique, en particulier le mercantilisme et la physiocratie. Il développe aussi l’idée d’un ordre naturel, le « système de liberté naturelle », résultant de l’intérêt individuel se résolvant en intérêt général par le jeu de la libre entreprise, de la libre concurrence et de la liberté des échanges.\r\n\r\nLa Richesse des nations reste à ce jour un des ouvrages socio-politico-economiques les plus importants de cette discipline (pour Amartya Sen, « le plus grand livre jamais écrit sur la vie économique1 »). Il est le document fondateur de la théorie classique en économie et, selon certains2, du libéralisme économique.', '2021-06-18 14:08:50', 2, 5),
(33, 'L\'Enquête d\'Hérodote', 'Les Histoires ou l\'Enquête (en grec ancien Ἱστορίαι / Historíai) est la seule œuvre connue de l\'historien grec, Hérodote. Le titre signifie littéralement « recherches, enquêtes » (du grec ἵστωρ / histôr, « celui qui sait, qui connaît »). C\'est le plus ancien texte complet en prose que nous ayons conservé de l\'Antiquité1. Hérodote y expose le développement de l\'empire perse, puis y relate les guerres médiques qui opposèrent les Perses aux Grecs.', '2021-06-18 14:09:58', 4, 5),
(34, 'Les Rêveries du Promeneur Solitaire de Jean-Jacques Rousseau', 'Les Rêveries du promeneur solitaire tiennent à la fois de l’autobiographie et de la réflexion philosophique : elles constituent un ensemble d’une centaine de pages, l’auteur employant très généralement la première personne du singulier et apportant par digressions quelques détails sur sa vie.\r\n\r\nLe livre, qui se présente comme \"un informe journal [des] rêveries\" de Rousseau, est composé de dix sections inégales, appelées promenades, qui sont des réflexions sur la nature de l’Homme et son Esprit. Rousseau, à travers cet ouvrage, présente une vision philosophique du bonheur, proche de la contemplation, de l’état ataraxique, à travers un isolement relatif, une vie paisible, et surtout, une relation fusionnelle avec la nature, développée par la marche, la contemplation, l\'herborisation que Rousseau pratique.\r\n\r\nCes Rêveries cherchent à produire chez le lecteur un sentiment d\'empathie qui lui permettrait à travers l’auteur de mieux se saisir lui-même.\r\n\r\nAvec les Confessions, Jean-Jacques voulait d’abord faire la lumière sur le citoyen Rousseau et sur sa vie ; cette œuvre postérieure est davantage une invitation au voyage et une réflexion générale sur son mode de pensée.', '2021-06-18 14:11:06', 1, 1),
(35, 'De Rerum Natura de Lucrèce', 'De rerum natura (De la nature des choses), plus souvent appelé De natura rerum, est un grand poème en langue latine du poète philosophe latin Lucrèce, qui vécut au Ier siècle avant notre ère. Composé de six livres totalisant 7 400 hexamètres dactyliques, mètre classique utilisé traditionnellement pour le genre épique, il constitue une traduction de la doctrine d’Épicure.\r\n\r\nLe poème se présente comme une tentative de « briser les forts verrous des portes de la nature », c’est-à-dire de révéler au lecteur la nature du monde et des phénomènes naturels. Selon Lucrèce, qui s\'inscrit dans la tradition épicurienne, cette connaissance du monde doit permettre à l\'homme de se libérer du fardeau des superstitions, notamment religieuses, constituant autant d\'entraves qui empêchent chacun d\'atteindre l\'ataraxie, c’est-à-dire la tranquillité de l\'âme. « Il n\'y a sans doute pas de plus beau poème scientifique que le De Natura Rerum1. »', '2021-06-18 14:13:09', 3, 2),
(36, 'Le Capital de Karl Marx', 'Le Capital. Critique de l\'économie politique (du titre original allemand Das Kapital. Kritik der politischen Ökonomie) est l\'ouvrage majeur du philosophe et théoricien de l\'économie politique allemand Karl Marx.\r\n\r\nMarx a consacré plus de 20 ans de sa vie à l\'écriture de cette œuvre, mais n’en a achevé qu’une partie : le premier livre, publié le 14 septembre 18671 est dédicacé à Wilhelm Wolff, consacré au développement de la production capitaliste. Des brouillons de Marx ont été utilisés par Friedrich Engels pour publier les livres 2 et 3, en 1885 et 1894. Les ébauches de Marx consacrées à l\'histoire des doctrines économiques ont été publiées par le socialiste allemand Karl Kautsky sous le titre Les Théories de la plus-value (4 vol., 1905-1910).\r\n\r\nC\'est en observant l\'industrie britannique contemporaine et ses conditions de travail ainsi qu\'en s\'appuyant sur les précédents théoriciens de l\'économie politique (tels que David Ricardo ou Adam Smith) et en les critiquant que Marx entend démontrer la nature réelle du capitalisme, et mettre l\'accent sur les contradictions internes de ce système.\r\n\r\nToutefois, au moment de l\'observation par Marx de l\'industrie britannique et comme du temps de David Ricardo et de Adam Smith, le capitalisme se caractérise par le fait que le capitaliste et son entreprise ne font qu\'un : il y a responsabilité illimitée du capitaliste. Ainsi, dans travail salarié et capital Marx écrit : «  Le capitaliste achète avec une partie de sa fortune actuelle, de son capital, la force de travail du tisserand tout comme il a acquis, avec une autre partie de sa fortune, la matière première, le fil, et l\'instrument de travail, le métier à tisser ». Le capitaliste paye entièrement de sa poche tous les facteurs de production: les moyens de production et la force de travail.\r\n\r\nOr, dès les années 18602, deux fondements juridiques distinguent clairement le capitaliste de son entreprise. Ces deux fondements sont : (1-) la « responsabilité limitée3» (ex : l\'entreprise emprunte pour acheter des machines sans faire prendre de risques financiers au capitaliste) et (2-) la non réalité juridique de l\'entreprise4 (elle ne peut donc être propriétaire de ce qu\'elle achète : seul le capitaliste qui détient les actions l\'est, même s\'il ne met plus un sous dans l\'entreprise pour acheter de nouvelles machines).\r\n\r\nAussi, de nos jours, l\'entreprise contribue beaucoup plus aux moyens de production que le capitaliste5 car celui-ci préfère utiliser la « responsabilité limitée » pour limiter ses risques plutôt que de partager les risques avec d\'autres capitalistes : dans ce cas, il partage également avec eux la propriété et le pouvoir qui va avec.\r\n\r\nL\'auteur considérait lui-même son ouvrage comme étant « certainement le plus redoutable missile qui ait été lancé à la tête de la bourgeoisie6 ».', '2021-06-18 14:16:31', 2, 2),
(37, 'L\'Histoire de Rome de Tite-Live', 'L\'Histoire de Rome depuis sa fondation (en latin Ab Urbe condita libri, littéralement « les livres depuis la fondation de la Ville » [Urbs, la Ville est toujours Rome]) est une œuvre de l\'historien Tite-Live dont il entame la rédaction aux alentours de 31 av. J.-C. De cette œuvre immense qui couvre en 142 livres, des origines de Rome jusqu\'à la mort de Drusus en 9 av. J.-C., seul le quart, soit trente-cinq livres, nous est parvenu, le reste est connu par des abrégés.', '2021-06-18 14:19:41', 4, 4),
(38, 'Les Confessions de Jean-Jacques Rousseau', 'Les Confessions de Jean-Jacques Rousseau est une autobiographie couvrant les cinquante-trois premières années de la vie de Rousseau, jusqu\'à 1765.\r\n\r\nLes douze livres des Confessions se divisent en deux ensembles distincts, définis par Rousseau lui-même : la première partie constituée par les livres I à VI avec le Préambule, rédigée en 1765-1767, couvre les années 1712-1740 (années de formation, de la naissance à Genève à l\'installation à Paris à 28 ans) alors que la deuxième partie, constituée par les livres VII à XII et rédigée en 1769-1770, couvre les années 1741-1765, c\'est-à-dire sa vie à Paris dans les milieux de la musique et des philosophes, avec ses réussites (Discours - La Nouvelle Héloïse) et ses déboires, comme les attaques qui suivent la publication de l\'Émile, qui l\'obligent à fuir en Suisse.\r\n\r\nL\'œuvre aura une publication entièrement posthume : en 1782 pour la première partie et en 1789 pour la deuxième1. Rousseau avait cependant déjà fait des lectures publiques de certains extraits.\r\n\r\nLe titre des Confessions a sans doute été choisi en référence aux Confessions de saint Augustin, publiées au IVe siècle. Rousseau accomplit ainsi un acte sans valeur religieuse à proprement parler, mais doté d’une forte connotation symbolique : celui de l’aveu des péchés, de la confession. Associant sincérité, humilité et plaidoyer pour lui-même, Rousseau cherche à brosser un portrait positif de lui-même et se présente essentiellement comme une victime de la vie2. L\'œuvre des Confessions fonde néanmoins le genre moderne de l\'autobiographie et constitue un texte marquant de la littérature française.', '2021-06-18 14:20:09', 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `label`) VALUES
(1, 'Autobiographie'),
(2, 'Économie'),
(3, 'Philosophie'),
(4, 'Histoire');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL,
  `article_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `article_id` (`article_id`),
  KEY `article_id_2` (`article_id`),
  KEY `id_user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `content`, `created_at`, `article_id`, `user_id`) VALUES
(37, 'Intéressant à lire !', '2021-06-18 14:24:36', 38, 4),
(38, 'Ouvrage fondamental !', '2021-06-18 14:24:51', 32, 4),
(39, 'Fascinant !', '2021-06-18 14:38:54', 38, 4),
(40, 'Super !', '2021-06-18 15:33:32', 38, 2),
(41, 'Super !', '2021-06-18 15:35:39', 38, 2),
(42, 'Super !', '2021-06-18 15:35:40', 38, 2),
(43, 'Super !', '2021-06-18 15:39:04', 38, 2),
(44, 'Fantastique', '2021-06-18 15:44:28', 38, 2),
(45, 'Youpi', '2021-06-18 15:57:13', 38, 2),
(46, 'Youpi', '2021-06-18 15:57:13', 38, 2),
(47, 'Youpi', '2021-06-18 15:57:27', 38, 2),
(48, 'A lire !', '2021-06-18 16:04:03', 38, 2),
(49, 'A lire', '2021-06-18 16:05:38', 37, 2),
(50, 'Blabla', '2021-06-18 16:06:16', 37, 2);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(64) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `created_at`) VALUES
(1, 'Jean', 'Dupont', 'blabla@blabla.com', '$2y$10$W0lfgRc4mVgZJbMgJJeCau1idlW.BMLIF714nw7i.QUZUubc2Ln1.', '2021-06-08 08:35:47'),
(2, 'Marie', 'Swan', 'ms@blabla.com', '$2y$10$3KFdJTwe1amN6h6qKO594uoiPWCeSWGt0Cgzp/5hCDLswNhR3blB6', '2021-06-09 08:20:52'),
(3, 'Nicolas', 'Sanna', 'nico13sanna@gmail.com', '$2y$10$xXRfMOBGwq/eTYD4Ncabwu18uau0OJUaHFX9sZEH/606ysRYFybOK', '2021-06-16 11:37:46'),
(4, 'Thomas', 'Aussenauther', 'ta@eurydium.com', '$2y$10$eSyg4P52FjpmS7Go8Mjkm.krybq13kw0XrEe7Q4iGSqCf2cxcZSyO', '2021-06-16 11:45:50'),
(5, 'Alexander', 'von Wessencraft', 'avw@eurydium.com', '$2y$10$xNhzBgi49gNGe7i9JdUIOeCErBqNbt4k6NMHOpOKad3VLBgaKWtUa', '2021-06-16 11:48:32'),
(6, 'Victoria', 'Wenders', 'vw@eurydium.com', '$2y$10$GHUnLE0IFWYbensDmHTuieE2VFTvzUKLWLo/JNBLDwiPLpi4FYbiK', '2021-06-18 09:39:40');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`category_Id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
