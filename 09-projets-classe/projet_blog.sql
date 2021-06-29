-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 29 juin 2021 à 14:09
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
-- Base de données :  `projet_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `idArticle` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL,
  `idCategorie` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `img` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`idArticle`),
  KEY `idCategorie` (`idCategorie`),
  KEY `idUser` (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idArticle`, `title`, `content`, `created_at`, `idCategorie`, `idUser`, `img`) VALUES
(1, 'Total en fait-il assez pour le climat? La parole aux actionnaires ', 'Après des assemblées générales dominées par la question climatique chez ses concurrents Chevron, ExxonMobil ou Shell, la direction du groupe français soumet pour la première fois au vote une résolution consultative sur le climat. \r\nL\'AG, qui se tient par vidéo en raison de la pandémie, a débuté à 10H00. Les actionnaires doivent s\'y exprimer notamment sur \"la stratégie de la société en matière de transition énergétique vers la neutralité carbone et les objectifs en la matière à horizon 2030\". \r\nLe groupe souligne ainsi ses efforts pour moins émettre de gaz à effet de serre. \r\nLe PDG Patrick Pouyanné, dont le mandat doit être renouveler pour trois ans, a salué une AG \"historique\", avec également l\'adoption du nouveau nom TotalEnergies. \"Elle marque notre volonté collective d\'inventer un nouveau Total, une compagnie multi-énergies, acteur majeur de la transition énergétique\", a-t-il affirmé.  \r\nTotal, encore très associé au pétrole, veut ainsi montrer qu\'il est aussi très présent dans le gaz et, de plus en plus, dans l\'électricité et les renouvelables, qui doivent représenter 20% des investissements cette année. \r\n', '2018-01-09 00:00:00', 1, 1, NULL),
(2, 'Les hedge funds en embuscade après le krach des cryptomonnaies', 'Le krach des cryptos a été une aubaine pour des fonds spéculatifs désireux de débuter sur ce marché. La forte volatilité ne rebute pas les grands traders. Ils vont rejoindre un marché dominé par des fonds spécialisés de petite taille, qui s\'efforcent de survivre aux cycles brutaux des cryptos.', '2018-10-11 00:00:00', 2, 2, NULL),
(3, 'Cancer du sein : 1 700 cas par an seraient la conséquence d\'une exposition aux polluants atmosphériques en France selon une étude', 'L’étude a étudié les effets de trois polluants à savoir les particules en suspension avec un diamètre inférieur à 10 microns (PM10), les particules en suspension avec un diamètre inférieur à 2,5 microns (PM2,5) et le dioxyde d’azote (NO2).\r\n\r\nParmi ces trois polluants, c’est pour le dioxyde d’azote que le niveau de preuve est le plus élevé. Selon les données disponibles, environ 1 700 cas de cancers du sein seraient attribuables chaque année en France à l’exposition aux polluants atmosphériques. Ces résultats font l’objet d’une publication dans la revue Environmental Health Perspectives. Le cancer du sein est le cancer le plus fréquent en Europe.\r\nUn coût estimé à au moins 600 millions par an\r\n\r\nLe coût économique associé, cumulant coûts tangibles (ceux liés aux traitements) et intangibles (ceux liés aux décès, à la perte de qualité de vie et la souffrance des patients) est de l’ordre de 600 millions à un milliard d’Euros par an.\r\n\r\nLe dioxyde d’azote est principalement émis par des processus de combustion des combustibles fossiles, tels que ceux des moteurs thermiques des véhicules et du chauffage urbain.', '2019-12-13 00:00:00', 3, 3, NULL),
(4, 'Computex – Intel dévoile deux nouveaux processeurs mobiles, un NUC et l’intégration de la 5G', 'Le Core i5-1155G7 est équipé de quatre cœurs hyperthreadés fonctionnant à 2,5 GHz avec un boost à 4,5 GHz. Il devrait à terme prendre la relève du Core i5-1135G7 ayant une fréquence de base de 2,5 GHz pour un boost à 4,2 GHz. La partie graphique reste inchangée avec toujours l’Iris Xe aux commandes, disposant de 80 UE, tandis que la fréquence de fonctionnement passe de 1,3 GHz à 1,35 GHz. .\r\n5 GHz sur une puce mobile de 28 W !\r\n\r\nDe la même manière, le Core i7-1185G7 devrait au fil de l’année laisser sa place au Core i7-1195G7. Ce dernier embarque quatre cœurs hyperthreadés avec une fréquence de base de 2,9 GHz et peut atteindre jusqu’à 5 GHz en boost. Cette fréquence ne sera maintenue que quelques secondes toutefois. L’Iris Xe avec 96 UE voit également sa fréquence augmenter de 50 MHz.\r\n\r\nComme le reste de la gamme Tiger Lake U, ces deux nouveaux arrivants ont un TDP qui varie de 12 à 28 W à la discrétion des intégrateurs. Si Intel se targue d\'avoir un processeur mobile de cette gamme pouvant atteindre 5 GHz, cela ne dure qu\'un bref instant et plusieurs conditions doivent être réunies : refroidissement, sollicitation d\'un seul cœur, etc.\r\n\r\nCes deux processeurs devraient être disponibles dès cet été et feront la jonction avec la prochaine génération de processeurs, dite Alder Lake. L’annonce de ces derniers devrait avoir lieu en septembre.\r\n\r\nPour compléter les annonces sur la mobilité, Intel a officialisé une carte M.2 en partenariat avec MediaTek afin d’apporter la 5G aux PC portables dotés de processeurs Tiger Lake et Alder Lake.', '2021-05-01 02:09:07', 3, 4, NULL),
(5, 'Vaccination des plus de 18 ans : la prise de RDV sur Doctolib est ouverte', 'Ce que cela change\r\n\r\nDepuis la mi-mai, il était déjà possible, pour toutes les personnes majeures non prioritaires, de réserver un créneau de vaccination pour le lendemain lorsqu’il en restait de disponibles. Le principal changement généré par l’ouverture générale de la vaccination, c’est que la réservation n’est plus compartimentée par la règle « du jour pour le lendemain » : à partir de maintenant, et à compter de la date du 31 mai, il est possible de réserver à l’avance un rendez-vous de vaccination.\r\n\r\nCela signifie, d’après le calcul de Doctolib, que le nombre de personnes éligibles à la vaccination est «  50 fois plus important » que le nombre de RDV disponibles chaque jour. En chiffres, cela signifie qu’il y a dorénavant 28 millions de personnes adultes nouvellement éligibles et non encore vaccinées, pour 500 000 rendez-vous qui s’ouvrent, en moyenne, chaque jour.\r\n\r\nEn conséquence, Doctolib a tenu à préciser dans son communiqué que « cette nouvelle étape ne va cependant pas permettre de répondre à toute la demande des patients du fait d’un nombre encore limité de doses de vaccins, notamment Pfizer et Moderna ». Il faudra donc encore un peu s’armer de patience et espérer tomber au bon moment sur Doctolib ou Vite Ma Dose.', '2020-09-01 00:00:00', 4, 4, NULL),
(6, 'Compteur Linky : finalement, vous allez bien devoir le rembourser ', 'Le déploiement du nouveau compteur sera gratuit pour le consommateur.\" Telle était la promesse d\'Éric Besson, alors ministre de l\'Industrie et de l\'Énergie, le 28 septembre 2011. À l\'époque, dans une interview au Parisien, il avait assuré que le compteur Linky ne coûterait \"pas un centime aux particuliers\", car intégralement financé par ERDF. Les associations de consommateurs UFC-Que-Choisir et CLCV (Consommation Logement Cadre de vie) doutaient de cette gratuité, jugeant que le dispositif pourrait coûter \"très cher\" aux consommateurs dans le futur. Dix ans plus tard, leur prémonition s\'avère exacte. \r\n\r\nAlors qu\'Enedis avait, dans un premier temps, annoncé prendre à sa charge la majeure partie du coût (5,39 milliards d\'euros), les plus de 32 millions foyers équipés d\'un petit boîtier communiquant vont finalement devoir passer à la caisse, rapporte Le Parisien, lundi 31 mai. Le montant de la facture se chiffre à 5,7 milliards d\'euros, selon la Cour des comptes. Chaque compteur vert pomme coûte la bagatelle de 130 euros, fabrication et pose comprises, auxquels il faut rajouter les frais annexes. \r\n\r\n    15 euros de plus par an sur la facture ?\r\n\r\nLes particuliers devront commencer à rembourser cette somme dès 2022, en raison du mécanisme de \"différé tarifaire\" mis en place par Enedis. Les sommes seront directement ponctionnées sur la facture des clients, année après année, pour un total de 2 milliards d\'euros en 2030. Dans son rapport, la Cour des comptes a estimé le taux d\'intérêt appliqué au remboursement à 4,6%. Cela représenterait une marge de 2,8% pour Enedis, soit un demi-milliard d\'euros d\'intérêts supplémentaires. Il restera encore 3,7 milliards d\'euros à régler. À la charge du consommateur ? \"Comme avec le différé, cela sera compensé par les économies générées grâce au compteur. Avec des relevés désormais réalisés à distance par exemple\", a répondu le gestionnaire.', '2021-06-24 00:00:00', 1, 4, NULL),
(7, 'La Chine autorise un troisième enfant : quatre questions pour comprendre les enjeux pour le pays', '\r\nÉcouter\r\n\r\nNewsletter\r\nLa Matinale\r\n\r\nChaque matin, l’actualité du jour sélectionnée par Ouest-France\r\n\r\nVotre e-mail est collecté par le Groupe SIPA Ouest-France pour recevoir nos actualités. En savoir plus.\r\nPartagez\r\n\r\n    Email\r\n\r\nLa Chine est toujours le pays le plus peuplé du monde avec 1,412 milliard d’habitants. Mais sa population n’augmente plus que de 0,53 % par an. Et surtout, les trente-cinq années de politique de l’enfant unique, de 1979-1980 à 2015, ont profondément modifié sa pyramide des âges. L’objectif d’amélioration du niveau de vie de la population, visé par ses initiateurs, a bien été atteint. Mais à présent que les « enfants uniques » sont en âge d’être parents, et leurs parents en âge d’être à la retraite, se pose un gros problème.\r\n1. Quel est le problème pour la Chine ?\r\n\r\nLe vieillissement de la population. Le coût économique de sa prise en charge rapporté à la population active, est mathématiquement déséquilibré par la politique de l’enfant unique. Chaque enfant unique désormais adulte a sur ses seules épaules le poids de la prise en charge de ses deux parents.\r\n\r\nLire aussi : Chine. Pourquoi le vieillissement de la population menace l’économie du pays\r\n2. Quel a été l’impact de l’autorisation de passer à deux enfants en 2015 ?\r\n\r\nEn dehors d’un faible rebond juste après l’annonce, cette première autorisation n’a pas eu d’effet. Le nombre de naissances a repris sa chute dès 2016 pour tomber à douze millions en 2020 contre 14,65 millions en 2019. Cette année-là, le taux de natalité avait déjà touché un plus bas depuis la fondation de la Chine communiste en 1949.\r\n3. Comment cette annonce est-elle accueillie ?\r\n\r\nDiversement sur les réseaux sociaux chinois. \"Je pense qu’il faudrait d’abord résoudre la question de la prise en charge des enfants ainsi que le traitement professionnel inégal des femmes avant de leur demander de faire des enfants !\"​, s’exprime un internaute sur le réseau Weibo, cité parmi les plus plébiscités, par le Financial Times. \"Nombre d’entre nous sommes les seuls enfants de notre génération. […] À présent ils veulent que nous élevions quatre parents âgés, plus trois enfants… dans vos rêves !\"​, renchérit un autre.\r\n4. Cette autorisation a-t-elle des chances de changer la donne ?\r\nL\'Union européenne doit-elle s\'impliquer davantage en politique étrangère ?\r\nPas vraiment si elle est prise seule. Le faible engouement pour le deuxième enfant dans les milieux citadins et aisés depuis 2015 a montré que le seul feu vert des autorités n’aura pas d’effet magique. Des annonces complémentaires sont attendues sur la prise en charge sociale de la garde d’enfant, les congés maternité, le coût de leur éducation…', '2020-11-17 07:13:00', 4, 3, NULL),
(8, 'Le Mali entre putschs et déliquescence', 'Editorial du « Monde ». Le dernier coup de force mené par le colonel Assimi Goïta à Bamako est une très mauvaise nouvelle pour les partenaires du Mali – africains, onusiens, européens – qui, depuis près d’une décennie, sans compter les millions d’euros dépensés, échouent à créer un environnement propice à l’émergence d’un système politique stable et démocratique. C’est aussi un rebondissement désastreux pour le Mali lui-même, car ce troisième putsch en dix ans est le symptôme du pourrissement d’un Etat évanescent.\r\n\r\nAprès avoir failli s’effondrer en 2012 sous les assauts de groupes armés djihadistes et d’indépendantistes touareg qui voulaient dynamiter l’Etat central, le pays n’en finit pas de vaciller. L’explosion finale n’a pas eu lieu, mais la gangrène ronge les institutions.\r\nArticle réservé à nos abonnés Lire aussi Comment le Mali a vécu un deuxième coup d’Etat en moins d’un an\r\n\r\nLe 18 août 2020, le colonel Goïta et son quarteron d’officiers supérieurs déposaient, les armes à la main, le président Ibrahim Boubacar Keïta (« IBK »), après des législatives contestées. Les militaires assuraient intervenir pour rétablir la bonne gouvernance et la probité, vertus oubliées par un pouvoir notoirement corrompu. Ce Conseil national pour le salut du peuple (CNSP) en treillis se voulait le bras armé d’une population éreintée qui, de plus en plus bruyamment, exprimait son ras-le-bol dans les rues de Bamako. Le CNSP d’alors était plutôt bien vu.\r\n« Un coup d’Etat dans le coup d’Etat »\r\n\r\nRien de tel aujourd’hui. Le 24 mai au soir, le colonel Goïta a, dans un communiqué, attribué au président intérimaire Bah N’Daw et au premier ministre Moctar Ouane « une intention avérée de sabotage de la transition » pour justifier leur arrestation.\r\n\r\nLa formule est un piètre camouflage pour une reprise en main au profit de l’armée et du colonel rebelle. Celui-ci a été « confirmé » depuis comme président de la transition par une Cour constitutionnelle aux ordres. Quelques heures plus tôt, Bah N’Daw avait exclu deux putschistes de 2020 lors d’un remaniement ministériel destiné à rééquilibrer – en faveur des civils – les pouvoirs du gouvernement de transition chargé de déminer la route conduisant aux élections inclusives en 2021. Cela n’a pas été du goût du colonel Assimi Goïta.', '2021-01-04 05:05:00', 4, 2, NULL),
(9, 'Un astéroïde plus grand que la tour Eiffel va s’approcher de la Terre', 'Un astéroïde surveillé par la Nasa doit passer devant la Terre à plus de 64 000 km/h ce mardi 1er juin en milieu d\'après-midi, rapporte « Newsweek ».\r\n\r\nUn astéroïde jugé « potentiellement dangereux » par la Nasa doit frôler la Terre, à quelques millions de kilomètres près, ce mardi 1er juin dans l\'après-midi. L\'objet céleste 2021 KT1 - c\'est son petit nom - ne devrait toutefois pas s\'approcher assez près pour causer des dégâts, rapporte Newsweek. En effet, il ne se rapprochera pas de notre planète à moins de 7,24 millions de kilomètres. C\'est environ 19 fois la distance Terre-Lune. Pas de quoi s\'inquiéter donc, mais l\'événement revêt une certaine importance pour les astronomes.\r\n\r\nLa Nasa suit de près cet astéroïde qui, selon ses estimations, mesure entre 150 et 330 mètres de diamètre. Il est donc potentiellement plus grand que la tour Eiffel (qui fait 324 mètres de haut jusqu\'à la pointe) ou, pour donner un autre point de comparaison, équivaut à quasiment trois fois la longueur du stade de France.\r\nLa Nasa surveille 26 000 astéroïdes\r\n\r\n2021 KT1 devrait passer devant la Terre vers 15 h 24 et à une vitesse de plus de 64 000 km/h.', '2021-03-09 05:13:20', 3, 1, NULL),
(10, 'dazda', 'dadddd', '2021-06-28 09:30:03', 2, 4, NULL),
(11, 'michouflette', 'la bonne michouflette', '2021-06-28 09:38:22', 2, 4, NULL),
(12, 'ghfdgfd', 'gfdgdfgdfgdfg', '2021-06-29 10:45:23', 2, 7, NULL),
(13, 'Bonjour', 'Noubelle image ici', '2021-06-29 10:56:06', 2, 7, 'SundayArc.jpg'),
(14, 'Bonjour', 'Noubelle image ici', '2021-06-29 10:58:48', 2, 7, 'SundayArc.jpg'),
(15, 'coucou', 'zrfaezfaez', '2021-06-29 11:02:33', 3, 7, 'Rectangle 3.jpg'),
(16, 'gbdghdf', 'ghfdh', '2021-06-29 11:03:27', 2, 7, 'Rectangle 3.jpg'),
(17, 'gbdghdf', 'ghfdh', '2021-06-29 11:06:33', 2, 7, 'Rectangle 3.jpg'),
(18, 'rgdfsg', 'fgdgd', '2021-06-29 11:11:28', 2, 7, NULL),
(19, 'dhdfh', 'dfgh', '2021-06-29 11:11:53', 3, 7, NULL),
(20, 'sdg', 'sdgsdg', '2021-06-29 11:12:14', 2, 7, NULL),
(21, 'sdg', 'sdgsdg', '2021-06-29 11:20:12', 2, 7, NULL),
(22, 'rfghdfs', 'sfgfsg', '2021-06-29 11:20:45', 1, 7, NULL),
(23, 'rfghdfs', 'sfgfsg', '2021-06-29 11:21:40', 1, 7, NULL),
(24, 'fgxh', 'gdfsh', '2021-06-29 11:22:21', 1, 7, NULL),
(25, 'fgxh', 'gdfsh', '2021-06-29 11:23:23', 1, 7, 'SundayArc.jpg'),
(26, 'dg', 'fgds', '2021-06-29 11:26:24', 2, 7, 'SundayArc.jpg'),
(27, 'dg', 'fgds', '2021-06-29 11:28:35', 2, 7, 'SundayArc.jpg'),
(28, 'sfgdsfg', 'sfgsdg', '2021-06-29 11:28:51', 2, 7, 'SundayArc.jpg'),
(29, 'sfgdsfg', 'sfgsdg', '2021-06-29 11:30:38', 2, 7, 'SundayArc.jpg'),
(30, 'sfgdsfg', 'sfgsdg', '2021-06-29 11:33:18', 2, 7, 'SundayArc.jpg'),
(31, 'sfgdsfg', 'sfgsdg', '2021-06-29 11:33:42', 2, 7, 'SundayArc.jpg'),
(32, 'sfgdsfg', 'sfgsdg', '2021-06-29 11:35:02', 2, 7, 'SundayArc.jpg'),
(33, 'sfgdsfg', 'sfgsdg', '2021-06-29 11:35:30', 2, 7, 'SundayArc.jpg'),
(34, 'sfgdsfg', 'sfgsdg', '2021-06-29 11:39:18', 2, 7, 'SundayArc.jpg'),
(35, 'image0', 'premier image de test', '2021-06-29 11:41:20', 2, 7, '175076802_10225826299989141_5338083035660732925_n.jpg'),
(36, 'sdfgdg', 'sdgsg', '2021-06-29 11:50:06', 1, 7, 'Rectangle 3.jpg'),
(37, 'ssalut yassou', 'aller yassou', '2021-06-29 12:09:13', 2, 7, 'Capture d’écran (6).png'),
(38, 'aad', 'dd', '2021-06-29 13:13:18', 2, 7, '175076802_10225826299989141_5338083035660732925_n.jpg'),
(39, 'aad', 'dd', '2021-06-29 13:14:11', 2, 7, '175076802_10225826299989141_5338083035660732925_n.jpg'),
(40, 'dqsd', 'qsdq', '2021-06-29 14:00:15', 2, 7, 'Capture d’écran (5).png');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `idCategorie` int(11) NOT NULL AUTO_INCREMENT,
  `libCategorie` varchar(128) NOT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `libCategorie`) VALUES
(1, 'Economie'),
(2, 'Santé '),
(3, 'Technologie'),
(4, 'Politique');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `idComment` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL,
  `idArticle` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`idComment`),
  KEY `idArticle` (`idArticle`),
  KEY `idUser` (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`idComment`, `content`, `created_at`, `idArticle`, `idUser`) VALUES
(26, 'dsfsdfs', '2021-06-28 09:54:34', 11, 4),
(27, 'dsfsdfs', '2021-06-28 09:54:35', 11, 4),
(28, 'aaaaaa', '2021-06-28 09:59:00', 11, 4),
(29, 'dadqsdsq', '2021-06-28 10:04:29', 11, 4),
(30, 'dsqdqs', '2021-06-28 10:05:44', 11, 4),
(31, 'dsqdqs', '2021-06-28 10:05:51', 11, 4),
(32, 'fsdfsdfd', '2021-06-28 10:09:11', 10, 4);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `idRole` int(10) NOT NULL,
  `role_label` varchar(128) NOT NULL,
  PRIMARY KEY (`idRole`),
  KEY `idRole` (`idRole`),
  KEY `idRole_2` (`idRole`,`role_label`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`idRole`, `role_label`) VALUES
(1, 'USER'),
(2, 'EDITOR'),
(3, 'ADMIN');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(64) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`idUser`),
  KEY `idUser` (`idUser`),
  KEY `idUser_2` (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `firstname`, `lastname`, `email`, `password`, `created_at`) VALUES
(1, 'billbong', 'sake', 'Ah@bonnet.com', '$2y$10$9okJPoV1CBcH05jpG8caiuRLX5DHwbGGTQSFSgTpBirp8QiuvIbPi', '2021-06-08 08:37:11'),
(2, 'marcel', 'patoulaci', 'marcel.patoulaci@gmail.com', '$2y$10$/jp5DlbLzE4OMLQ8985BNOUpt91mzpcNDXHPB0CCxmVlzkoAZPxZ6', '2021-06-08 08:38:57'),
(3, 'mich', 'mich', 'mich.mich@gmail.com', '$2y$10$oFSpaIr1RTTnyu7qLIjBhe7oUjfLnwsxkzLGjM8tH8OnnZeSR9RYa', '2021-06-08 09:42:42'),
(4, 'hichem', 'ahah', 'hichem.ahah@gmail.com', '$2y$10$woXWMKUm8C.P8ijRHYhcZugMOcR0Kafx0zME27RQ.Gn1JVBcD7HF2', '2021-06-17 08:57:10'),
(5, 'bibi', 'bobo', 'bibi.bobo@gmail.com', '$2y$10$bO4R2Fm3MwfZ1exi8LJkMuYsGdKN50tCz2Mf2IEyDr/craT7jil0m', '2021-06-28 12:02:54'),
(6, 'bibi', 'bobo', 'bibi.popo@gmail.com', '$2y$10$HKzf16Pp2CGoneYabUQSq..Y5ja5pvRKxqHCN.QtbIimPDVfnoZoO', '2021-06-28 12:04:41'),
(7, 'azerty', 'YTREZA', 'azerty.ytreza@gmail.com', '$2y$10$YYAaInXIvHKQwH0ewR30SeiBzTx0aO4jV5Bmk4g.VVdFV.Hu/WmuG', '2021-06-28 13:53:23'),
(8, 'mich', 'mich', 'mich.mich@hotmail.com', '$2y$10$QnpmwIhtN4sRPSJqsl/gleQ9q/9FAlNXaKLTZMveMkUe0lb56Dwb2', '2021-06-28 13:55:47');

-- --------------------------------------------------------

--
-- Structure de la table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
CREATE TABLE IF NOT EXISTS `user_role` (
  `idUser` int(10) NOT NULL,
  `idRole` int(10) NOT NULL,
  PRIMARY KEY (`idUser`,`idRole`),
  KEY `idUser` (`idUser`,`idRole`),
  KEY `idUser_2` (`idUser`,`idRole`),
  KEY `user_role_ibfk_1` (`idRole`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user_role`
--

INSERT INTO `user_role` (`idUser`, `idRole`) VALUES
(8, 1),
(7, 2),
(4, 3);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`idCategorie`),
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`idArticle`) REFERENCES `article` (`idArticle`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

--
-- Contraintes pour la table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `user_role_ibfk_1` FOREIGN KEY (`idRole`) REFERENCES `role` (`idRole`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_role_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
