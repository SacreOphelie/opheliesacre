-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 24 juin 2024 à 11:30
-- Version du serveur : 10.6.18-MariaDB
-- Version de PHP : 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sdgy0690_portfolio_ophelie`
--
CREATE DATABASE IF NOT EXISTS `sdgy0690_portfolio_ophelie` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sdgy0690_portfolio_ophelie`;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(1, 'admin', '$2y$10$w00RWVhzShrHfAfzSFcIl.wwky/Pfxwuqu79B1ibev3rXlWkZtahW');

-- --------------------------------------------------------

--
-- Structure de la table `animation`
--

CREATE TABLE `animation` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `fichier` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `animation`
--

INSERT INTO `animation` (`id`, `nom`, `fichier`, `video`, `description`, `date`) VALUES
(12, 'Van Gogh', '908514164la-nuit-y-toily-e.jpg', 'https://www.youtube.com/embed/iC2Zonc217w?si=-_p2lOYYbOVVuYSB', 'A compositing project where I narrate the story of &#039;La nuit étoilée Vincent Van Gogh&#039; painting, using animated transitions and other effects to captivate the viewer&#039;s attention.', '2024-06-27'),
(9, 'Un brin d&#039;espoir', '11730711211107480273plan-dy-cors.jpg', 'https://www.youtube.com/embed/bn8oTVvfsfc?si=k4UipbwSJhF96xXp', 'for my end-of-year jury presentation during my first year of graphic design studies, I collaborated with a team of four people to create this stop-motion animation. This stop-motion tells the story of a world devoid of life, where a robot endeavors to revive plants...', '2023-06-20'),
(11, 'Paralysis', '423670775animation2D.jpg', 'https://www.youtube.com/embed/JTGGQiMHsB8?si=4adscugq7RGHmMYw', 'For an art project, I created a 2D animation in the horror genre, focusing on sleep paralysis.', '2024-06-27');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `email`, `message`, `date`) VALUES
(1, 'sacré', 'ophélie', 'ophelie.sacre@outlook.fr', 'test', '2024-04-29 10:57:48'),
(2, 'Ophélie', 'Sacré', 'ophelie.sacre@outlook.fr', 'test 2', '2024-04-29 13:23:53'),
(3, 'sacré', 'ophélie', 'ophelie.sacre@outlook.fr', 'test3', '2024-04-29 13:28:06'),
(4, 'Ophélie', 'ophélie', 'ophelie.sacre@outlook.fr', 'test 4', '2024-04-29 13:50:41'),
(5, 'Sacré', 'Ophélie', 'ophelie.sacre@outlook.fr', 'Je t\'aime', '2024-04-29 17:14:41'),
(6, 'Sacré', 'Ophélie', 'ophelie.sacre@outlook.fr', 'test 5', '2024-05-01 12:11:24'),
(7, 'sacré', 'Sacré', 'ophelie.sacre@outlook.fr', 'test', '2024-05-01 12:15:25'),
(8, 'test', 'test', 'test@test.fr', 'test', '2024-05-16 13:59:19'),
(9, 'Sacre', 'Ophelie', 'ophelie.sacre@outlook.fr', 'Coucou toi', '2024-06-12 11:23:51'),
(10, 'Sacre', 'Ophelie', 'ophelie.sacre@outlook.fr', 'Bonjour', '2024-06-13 14:53:37'),
(11, 'Skywalker', 'Anakin', 'anakin@hotmail.com', 'If you not with me, then your my enemy ', '2024-06-13 14:54:47');

-- --------------------------------------------------------

--
-- Structure de la table `illustration`
--

CREATE TABLE `illustration` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `illustration`
--

INSERT INTO `illustration` (`id`, `nom`, `categorie`, `image`, `description`, `date`) VALUES
(17, 'Double Exposure', 'Photoshop', '888662846double-exposition.jpg', 'For an art project, I used the double exposure technique, which involves taking two images and combining them to create an artistic effect.', '2022-11-07'),
(16, 'Reflection', 'Photoshop', '1945547645chateau.jpg', 'For an art project, I created the reflection of the castle in the water. This aimed to capture the architectural beauty of the castle and add a dimension of symmetry and serenity to the image.', '2022-10-07'),
(15, 'Colors Effect', 'Photoshop', '2090736812cocktail.jpg', 'For an art project, I modified the color of some foods to create vibrant and colorful photos. The goal was to play with visual perceptions and transform everyday objects into unique and captivating works of art. Each food item was carefully selected and altered to produce a palette of surprising and bright colors, offering a new perspective on the beauty and diversity of food.', '2022-12-19'),
(18, 'Color Shade', 'Photoshop', '1001571738Exercice-8-nuance-de-couleurs-.jpg', 'For an art project, I used two photos that I overlaid on top of each other. The goal was to create a progressive and harmonious color gradient between the two images.\r\nPlaying with contrasts and color transitions.', '2022-12-19'),
(19, 'Morphing', 'Photoshop', '826411902morphing-1.jpg', 'For an art project, I explored the technique of morphing using two distinct photos: one of a woman and one of a lion.', '2022-10-14'),
(20, 'Tattoo', 'Photoshop', '623125930tatouage.jpg', 'For an art project, I used the overlay technique to add a tattoo to a woman. By playing with perspective and carefully adjusting the orientation and size of the tattoo.', '2022-09-17'),
(21, 'Self-Portrait', 'Photoshop', '418626674Sacry-Autoportrait.jpg', 'For an art project, I have been inspirating from the cut-out and collage style of Hannah Höch, a pioneer of the Dadaist movement. Embracing her technique, I created my own self-portrait. I cut out and assembled various visual elements sourced from magazines and other materials. ', '2022-12-22'),
(22, 'Feeling', 'Photoshop', '1454399160Sacry-Sentiment.jpg', 'For my December jury, I chose to represent the feeling of joy through a digital composition. Drawing inspiration from bright colors and cheerful patterns associated with flowers, I crafted a dynamic and vibrant visual piece.', '2022-12-22'),
(23, 'Moto-Cross', 'Photoshop', '1811180250motocross2.jpg', 'For an art project, I explored a typographic play aimed at representing the word &#039;motocross&#039; while capturing the dynamic and bold essence of the sport.', '2022-11-04'),
(24, 'Vinyle', 'Photoshop', '1215354537Sacry-jury-vinyle-PS.jpg', 'For my december Jury, I worked with an unretouched photo placed inside a square frame. To seamlessly integrate this image, I faithfully reproduced all visible elements around the frame, including the decor, I captured a scene where lush and wild vegetation appears to invade a space once shaped by humans.', '2022-12-22'),
(25, 'Shadow', 'Photoshop', '1193298599ombres-1.jpg', 'For an art project, I used the image of a man whose shadow is reflected in the water to visually represent a woman.', '2022-10-10'),
(26, 'Woman Gradient', 'Photoshop', '730919444Femme.jpg', 'For an art project, I explored the creative use of color gradients. By skillfully manipulating transitions of hues and shades, I aimed to create subtle and evocative visual effects.', '2022-09-30'),
(27, 'Perspective', 'Illustrator', '231709779Maison-perspective-Sacry-O.jpg', 'For an art project, I used the perspective tool to design a modern house. The use of perspective allowed me to add depth and dimension to the composition, creating an illustration that captures the essence of architectural innovation.', '2023-05-01'),
(28, 'Animals', 'Illustrator', '1590533687Animaux-SacreO-1-.png', 'For an art project, I drew inspiration from real photos of animals. \r\nProviding a simplified version of these animals', '2023-01-26'),
(29, 'Character', 'Illustrator', '1515071649Ex8.Personnage-Sacry-O.jpg', 'For an art project, I created an original character and a handmade background.  I designed a unique backdrop that complements and highlights my character.', '2023-03-24'),
(30, 'Monsters', 'Illustrator', '1030928318Ex6.Les3PetitsMonstres-Sacry-O-1-.jpg', 'For an art project, I created cute little monsters and designed a background that matches their style. Each monster was drawn with unique and charming characteristics, and the background was carefully crafted to complement and enhance the appearance and personality of these creatures.', '2023-03-16'),
(31, 'Chocolates', 'Illustrator', '222743398Affiche-A3-pub.jpg', 'For my end-of-year jury, I created my own brand of fruity chocolate by combining chocolate with various fruits. I designed my own packaging for chocolate bars, tablets, and boxes, as well as my own advertisements. Each package was carefully crafted to reflect the harmony between chocolate and fruits, featuring vibrant colors and attractive patterns.', '2023-06-15'),
(32, 'CCPAE', 'Illustrator', '686611371Logo-Canin-dy-finitif-1-white.png', 'For an art project, I created three logos for a dog club, and among the submissions from my class, the club chose the three logos I designed. Each logo was crafted to reflect the spirit and values of the dog club. These logos were selected for their originality, simplicity, and ability to effectively represent the club&#039;s identity.', '2023-06-19'),
(33, 'London', 'Illustrator', '1893648161Ex9.Londres-Sacry-O.jpg', 'For an art project, from a photo, I vectorized the image to represent the city of London. Using vector drawing tools, I transformed the photo into a precise and stylized illustration.', '2023-04-05'),
(34, 'Portrait', 'Illustrator', '36504777Ex4.Portrait-Simplifiy-Sacry-O.jpg', 'For an art project, from a photo of a woman, I simplified the features and vectorized them to create a clean and stylized portrait.', '2023-02-13'),
(35, 'Still Life', 'Illustrator', '522508111Ex3.Nature-Morte-SacreO.jpg', 'For an art project, I created a still life of a sunflower. Using this beautiful floral motif as the main subject, I aimed to capture the light and details of its vibrant petals. The composition highlights the natural beauty and vivid colors of the sunflower.', '2023-02-06'),
(36, 'Cherry', 'Illustrator', '763753268Ex5.Fruit-Sacry-O-2-.jpg', 'For an art project, I used two methods to represent this cherry: first in a simplified manner, and then using a gradient mesh.', '2023-03-10'),
(37, 'Artension', 'Indesign', '292409145Jury-InDesign-SacreO.jpg', 'For my jury,I created a 20-page art magazine where I illustrated all the content myself, using original artwork to accompany the provided text. Each illustration was carefully crafted to correspond to the topic covered in each article.', '2024-06-27'),
(38, 'Tourist', 'Indesign', '218492616Touristique-Sacry-O-2.jpg', 'For an art project, I created a tourist magazine dedicated to the municipalities of Namur. This magazine showcases the attractions, historical sites, cultural events, and picturesque aspects of each municipality in the Namur region.', '2024-02-10'),
(39, 'Rituals', 'Indesign', '2005423797Quadriptyque-SacreO.jpg', 'For an art project, I created an advertising magazine for the brand Rituals. This magazine showcases the brand&#039;s products through elegant advertisements and captivating visual presentations.', '2024-01-28'),
(40, 'Burger Menu', 'Indesign', '112503850Menu-burger-SacreO.jpg', 'For an art project, I created a menu for a restaurant specializing in burgers and other dishes, adopting a modern and sleek style. Each item on the menu, from gourmet burgers to creative sides and craft drinks, is presented with elegant and contemporary graphic designs.', '2024-01-27'),
(41, 'Duotone', 'Indesign', '214920599Bichromie-SacreO.jpg', 'For an art project, I created a magazine using the duotone method, meaning that only two colors were integrated throughout the entire magazine.', '2024-03-18'),
(42, 'Brochure', 'Indesign', '2111987054Brochure-Charleroi-Sacry-O.jpg', 'For a project, I created a brochure for Charleroi while strictly adhering to the city&#039;s graphic standards. Every element of the brochure, from typography to colors and logos used, was aligned with the specific guidelines of Charleroi&#039;s graphic charter.', '2024-04-06'),
(43, 'Carrefour', 'Indesign', '303379356Carrefour-Sacry-O.jpg', 'For an art project, I created a magazine for Carrefour focusing on culinary recipes. This magazine was designed to inspire and guide readers through a variety of delicious and creative recipes.', '2024-02-18');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `fichier` varchar(255) NOT NULL,
  `id_illustration` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `fichier`, `id_illustration`) VALUES
(29, '623976304double-exposition-2.jpg', 17),
(28, '97931126double-exposition-3.jpg', 17),
(24, '1466704434boisson.jpg', 15),
(26, '707950385cocktail.jpg', 15),
(27, '1169741932chateau.jpg', 16),
(23, '1051326276mojito.jpg', 15),
(22, '675061807Exercice-4.-les-couleurs.jpg', 15),
(30, '1728403748double-exposition.jpg', 17),
(35, '1901160325glitch-3.jpg', 18),
(34, '1701728257glitch-2.jpg', 18),
(36, '545198297Exercice-8-nuance-de-couleurs-.jpg', 18),
(37, '498096694morphing-1.jpg', 19),
(38, '1603605149Sacry-Autoportrait.jpg', 21),
(39, '1902842642Sacry-Sentiment.jpg', 22),
(40, '1966348559tatouage.jpg', 20),
(41, '463645401motocross2.jpg', 23),
(42, '366219185motocross.jpg', 23),
(43, '1267752011motocross3.jpg', 23),
(44, '1050032481Sacry-jury-vinyle-PS.jpg', 24),
(45, '203362406ombres-1.jpg', 25),
(46, '108593011Femme.jpg', 26),
(47, '631034323Maison-perspective-Sacry-O.jpg', 27),
(57, '1365496249Animaux-SacreO-5-.png', 28),
(56, '972530506Animaux-SacreO-4-.png', 28),
(55, '509381738Animaux-SacreO-3-.png', 28),
(54, '1652764016Animaux-SacreO-2-.png', 28),
(58, '829179872Animaux-SacreO-1-.png', 28),
(60, '1374660229Ex8.Personnage-Sacry-O.jpg', 29),
(61, '450518730Ex6.Les3PetitsMonstres-Sacry-O-1-.jpg', 30),
(62, '1506893163Ex6.Les3PetitsMonstres-Sacry-O-2-.jpg', 30),
(63, '1808271395Ex6.Les3PetitsMonstres-Sacry-O-3-.jpg', 30),
(64, '1971469210Affiche-A3-pub.jpg', 31),
(65, '1226156084Barre-fraises.jpg', 31),
(66, '1973340924Barre-my-res.jpg', 31),
(67, '716935735Barre-pommes.jpg', 31),
(68, '926306515Boy-te.jpg', 31),
(69, '1321267058carte-de-visite-2-.jpg', 31),
(70, '1404467368Carte-de-visite.jpg', 31),
(71, '412323114Magazine.jpg', 31),
(72, '73522954Tablettes.jpg', 31),
(73, '251479676Tablettes2.jpg', 31),
(74, '1794360618Tablettes3.jpg', 31),
(75, '1020016532Logo-Canin-dy-finitif-1-.png', 32),
(76, '1425919921Logo-Canin-dy-finitif-2-.png', 32),
(77, '1096956736Logo-Canin-dy-finitif-3-.png', 32),
(78, '1335075889ccpaemockup1.jpg', 32),
(89, '912895187ccpaemockup2.jpg', 32),
(80, '19893512ccpaemockup3.jpg', 32),
(88, '898900075ccpaemockup4.jpg', 32),
(82, '266745741ccpaemockup5.jpg', 32),
(90, '1251755228ccpaemockup6.jpg', 32),
(84, '1949067560ccpaemockup8.jpg', 32),
(91, '398368473ccpaemockup7.jpg', 32),
(86, '1074752305ccpaemockup9.jpg', 32),
(87, '2010786685ccpaemockup10.jpg', 32),
(92, '167680230Ex9.Londres-Sacry-O.jpg', 33),
(93, '1212890373Ex4.Portrait-Simplifiy-Sacry-O.jpg', 34),
(95, '1206263988Ex3.Nature-Morte-SacreO.jpg', 35),
(96, '614620903Ex5.Fruit-Sacry-O-2-.jpg', 36),
(97, '745166213Ex5.Fruit-Sacry-O.jpg', 36),
(98, '2101379814Jury-InDesign-SacreO.jpg', 37),
(99, '1882927663Jury-InDesign-SacreO2.jpg', 37),
(100, '1361472988Jury-InDesign-SacreO3.jpg', 37),
(101, '1119694846Jury-InDesign-SacreO4.jpg', 37),
(102, '1397138825Jury-InDesign-SacreO5.jpg', 37),
(103, '1255643550Jury-InDesign-SacreO6.jpg', 37),
(104, '1427197390Jury-InDesign-SacreO7.jpg', 37),
(105, '800057814Jury-InDesign-SacreO8.jpg', 37),
(106, '264316934Jury-InDesign-SacreO9.jpg', 37),
(107, '771101592Jury-InDesign-SacreO10.jpg', 37),
(109, '1965251238Jury-InDesign-SacreO11.jpg', 37),
(110, '1192482020Jury-InDesign-SacreO12.jpg', 37),
(111, '1371997916Jury-InDesign-SacreO13.jpg', 37),
(112, '768643919Jury-InDesign-SacreO14.jpg', 37),
(113, '1044629909Jury-InDesign-SacreO15.jpg', 37),
(114, '1827207757Jury-InDesign-SacreO16.jpg', 37),
(115, '942686601Jury-InDesign-SacreO17.jpg', 37),
(116, '1078761831Jury-InDesign-SacreO18.jpg', 37),
(117, '996232453Jury-InDesign-SacreO19.jpg', 37),
(118, '1636062457Jury-InDesign-SacreO20.jpg', 37),
(119, '966765990Touristique-Sacry-O-2.jpg', 38),
(120, '1571292181Touristique-Sacry-O-22.jpg', 38),
(121, '683406951Touristique-Sacry-O-23.jpg', 38),
(122, '1076315586Touristique-Sacry-O-24.jpg', 38),
(123, '298349246Touristique-Sacry-O-25.jpg', 38),
(124, '1764855828Touristique-Sacry-O-26.jpg', 38),
(125, '1114389454Touristique-Sacry-O-27.jpg', 38),
(126, '1844720596Touristique-Sacry-O-28.jpg', 38),
(127, '1559798862Quadriptyque-SacreO.jpg', 39),
(128, '74216953Quadriptyque-SacreO2.jpg', 39),
(130, '30221668Menu-burger-SacreO.jpg', 40),
(131, '1917058600Bichromie-SacreO.jpg', 41),
(132, '799968298Bichromie-SacreO2.jpg', 41),
(133, '1864761193Bichromie-SacreO3.jpg', 41),
(134, '358285943Bichromie-SacreO4.jpg', 41),
(135, '1894492445Brochure-Charleroi-Sacry-O.jpg', 42),
(136, '1869895115Brochure-Charleroi-Sacry-O2.jpg', 42),
(137, '1378111405Brochure-Charleroi-Sacry-O3.jpg', 42),
(138, '559114676Brochure-Charleroi-Sacry-O4.jpg', 42),
(139, '1946477192Brochure-Charleroi-Sacry-O5.jpg', 42),
(140, '750329575Brochure-Charleroi-Sacry-O6.jpg', 42),
(141, '711678103Brochure-Charleroi-Sacry-O7.jpg', 42),
(142, '647977138Brochure-Charleroi-Sacry-O8.jpg', 42),
(143, '1032636960Carrefour-Sacry-O.jpg', 43),
(144, '2022251171Carrefour-Sacry-O2.jpg', 43),
(145, '1489345173Carrefour-Sacry-O3.jpg', 43);

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `pictures`
--

INSERT INTO `pictures` (`id`, `picture`) VALUES
(13, '12984456051.jpg'),
(14, '1360081472.jpg'),
(15, '18884094763.jpg'),
(16, '12988998174.jpg'),
(17, '10985530935.jpg'),
(18, '9218102646.jpg'),
(19, '21102831357.jpg'),
(20, '20530894548.jpg'),
(21, '16745699619.jpg'),
(22, '127802865610.jpg'),
(23, '32217279611.jpg'),
(24, '11740012412.jpg'),
(25, '13211631513.jpg'),
(26, '122722924014.jpg'),
(27, '83943413515.jpg'),
(28, '61938470116.jpg'),
(29, '35291296517.jpg'),
(30, '22961466418.jpg'),
(31, '154988743419.jpg'),
(32, '174373182620.jpg'),
(33, '100235031921.jpg'),
(34, '71209090722.jpg'),
(35, '10932984323.jpg'),
(36, '48309896124.jpg'),
(38, '24416895525.jpg'),
(39, '61949168526.jpg'),
(40, '177336479727.jpg'),
(41, '103626423228.jpg'),
(42, '172744429520240507-111745.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `svg` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `skills`
--

INSERT INTO `skills` (`id`, `svg`) VALUES
(3, '1286654628skills-an.png'),
(2, '556658999982156034skills-ai.png'),
(4, '554553850skills-au.png'),
(5, '460441786skills-id.png'),
(6, '1045754102skills-pr.png'),
(7, '481690210skills-ps.png'),
(8, '1093225007skills-vs.png'),
(9, '262917415skills-f.png');

-- --------------------------------------------------------

--
-- Structure de la table `web`
--

CREATE TABLE `web` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `figma` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `web`
--

INSERT INTO `web` (`id`, `nom`, `photo`, `url`, `figma`, `description`, `date`) VALUES
(8, 'Portfolio', '1140332379Portfolio.jpg', 'https://sacreophelie.be', 'https://www.figma.com/design/WDtHL15kZtY61vVHKnc6Kw/Portfolio?node-id=104-46&amp;t=ZnR9GNQSRvS7YWqK-1', 'Well, you&#039;re on it, this is my portfolio, entirely coded by me, I use php,html,css and javascript', '2024-06-27'),
(7, 'Artist', '115780338Artiste.jpg', 'no associated links', 'https://www.figma.com/design/I3A8dqjiHyMNUkQgpFvfxt/Artiste?node-id=0-1&amp;t=gg8rRU7d7IVJFrk1-1', 'For my jury 2023, I created a website for an artist specializing in Japanese calligraphy, sumi-e, and Chinese painting. The site is not yet live.', '2023-06-21'),
(9, 'Video Games', '1227760540Dbd.jpg', 'no associated links', 'https://www.figma.com/design/c6XlkdNjyl7liMN8GaLWv6/Untitled?node-id=0-1&amp;t=Zq2S6YOAfQVPIf0A-1', 'For an art project, I created a website deisng for the game &quot;dead by daylight&quot; referring to its basic style which is a horror game, I wanted to recreate this universe through my design.', '2023-04-15'),
(10, 'Puma', '374667006Puma.jpg', 'no associated links', 'https://www.figma.com/proto/SjDveos6NZwFpt5twSlgZb/Puma?page-id=0%3A1&amp;node-id=1-2&amp;t=vkW9FVy9chU20I3T-1', 'For an art project, I created a web design page for a shoe brand, highlighting the brand, the design is designed to make the user want to buy the shoe.\r\n', '2023-05-01'),
(11, 'Object', '1919316499Object.jpg', 'no associated links', 'https://www.figma.com/design/X5SRDW5e3cr0rXIFRZREPK/Objet-site?node-id=0-1&amp;t=KL4IKgLryRvLin4R-1', 'For an art project, I created this website design for a laptop, highlighting the product and making people want to buy, I played with colour contrasts to attract the eye.', '2023-04-20'),
(12, 'Series', '2132798925Doctor-Who.jpg', 'no associated links', 'https://www.figma.com/design/zu7d8suqGZcvrFoEp2bNpe/Doctor-who?node-id=2-18&amp;t=qqBPA6LjL6s8gJkS-1', 'For an art project, I created a design for a TV series, putting all the information you need to make you want to see the series.', '2023-01-05'),
(13, 'Montain', '579149706Montagne.jpg', 'no associated links', 'https://www.figma.com/design/biFHa4PcElOgpRof5CBLlj/Montagne?node-id=0-1&amp;t=zJA89ylynX1uT9A2-1', 'For an art project, I&#039;ve created a tourism website design for a fictitious mountain where you could see the Northern Lights. The aim of the site is to encourage people to book holidays on this mountain.', '2023-05-01');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `animation`
--
ALTER TABLE `animation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `illustration`
--
ALTER TABLE `illustration`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `animation`
--
ALTER TABLE `animation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `illustration`
--
ALTER TABLE `illustration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT pour la table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `web`
--
ALTER TABLE `web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
