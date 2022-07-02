-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 09:21 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group1795864`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `icon` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `tag`, `category`, `icon`, `image_1`, `image_2`, `image_3`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Acheter des ordniateurs depuis chez vous', 2, 'icon-desktop', '5501642891861.jpg', NULL, NULL, 'Aucune limite ne peut empêcher Mcs Groupe de vous offrir votre ordinateur de rêve. Même à la maison vous pouvez obtenir ce que vous voulez Lorem ipsum dolor sit amet consectetur', '2022-01-22 21:51:01', '2022-01-22 21:51:01'),
(2, 'Des prises vues à couper le souffle', 8, 'icon-videocam-1', '2971642892670.jpg', NULL, NULL, 'Consommez nos services multi-média en excusivité notamment des montages 3D..Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum', '2022-01-22 22:04:31', '2022-01-22 22:04:31'),
(3, 'Un bureau numérique pour vous', 2, 'icon-desktop', '7991642895023.jpg', NULL, NULL, 'Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum Lorme ipsum', '2022-01-22 22:43:43', '2022-01-22 22:43:43'),
(4, 'Équipements réseaux Hight-Tech', 4, 'icon-network', '3021642895455.jpg', NULL, NULL, 'Lorem ipsum  Lorem ipsum  Lorem ipsum  Lorem ipsum  Lorem ipsum  Lorem ipsum  Lorem ipsum  Lorem ipsum  Lorem ipsum  Lorem ipsum', '2022-01-22 22:50:55', '2022-01-22 22:50:55'),
(5, 'Formation en développement informatique', 9, 'fa fa-code', '501654740805.jpg', NULL, NULL, 'Saisissez cette opportunité de suivre  une formation excusivement pour vous.', '2022-06-09 01:13:25', '2022-06-09 01:13:25'),
(6, 'Assistance community management', 10, 'fa fa-facebook-square', '8061654741002.jpg', NULL, NULL, 'Béneficiez de nos compétences en marketing rélationnel et community management', '2022-06-09 01:16:42', '2022-06-09 01:16:42'),
(7, 'Des predators pleins à craquer', 2, 'icon-desktop', '421654741329.jpg', NULL, NULL, 'Ils viennent d\'arriver : des ordinateurs marques \"Predators\" dont les prix vous séduisent. Procurez-vous en en clin d\'oeil !', '2022-06-09 01:22:09', '2022-06-09 01:22:09');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `solde_price` decimal(10,2) DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nbre_exemplaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `disk` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pouce` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ram` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processor` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_ordi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `tag`, `category`, `price`, `solde_price`, `desc`, `nbre_exemplaire`, `picture_1`, `picture_2`, `picture_3`, `created_at`, `updated_at`, `disk`, `pouce`, `ram`, `processor`, `id_ordi`) VALUES
(1, 'LENOVO ThinkPad X240', 1, '250.00', '230.00', 'Processeur Intel Core i3-4030U 1.9Ghz / RAM 4Go /320 Go HDD/ 12.5\" HD LED / / Windows 10 PRO /', NULL, '291650584637.webp', '2551650584638.jpg', '5411650584638.jpg', '2022-04-21 22:43:58', '2022-04-21 22:43:58', '320 Go HDD', '12.5\" HD LED', '4Go', 'Core i3-4030U 1.9Ghz', 2),
(2, 'Lenovo Thinkpad x250', 1, '350.00', '300.00', 'Processeur: Intel Core i5 - 5300U 2.3Ghz (5 ème génération)\nMémoire: 8Go DDR3 \nDisque dur: 500GB HDD\nWIFI - USB 3.0 - CAMERA - HDMI (Display port)\nÉcran : 12.5 pouce LED\nOS: Windows 10', NULL, '5591650585196.jpg', '3991650585197.webp', '8641650585197.webp', '2022-04-21 22:53:17', '2022-04-21 22:53:17', '500 GB HDD', '12.5 pouce LED', '8Go DDR3', 'Intel Core i5 - 5300U 2.3Ghz (5 ème génération)', 2),
(3, 'HP ELITEBOOK 840 G1, G2', 1, '450.00', '380.00', 'Disposition clavier : AZERTY FR\r\nProcesseur : Core i5-5300U 2.3GHz\r\nMémoire RAM : 8Go DDR3\r\nDisque dur : 240 Go SSD\r\nContrôleur vidéo : Intel HD Graphics 5500\r\nLecteur optique : Non\r\nPorts : 1x jack, 1x Display Port, 1x RJ45, 4x USB 3.0, 1x VGA\r\nBluetooth : Oui\r\nWebcam : Oui\r\nLecteur cartes SD : Oui\r\nDimensions : 33,9 x 23,7 x 2,1 cm\r\nPoids : 1,5 kg', NULL, '4911650586108.jpg', '4891650586109.jpg', '5411650586109.jpg', '2022-04-21 23:08:29', '2022-04-21 23:08:29', '240 Go SSD', '33,9 x 23,7 x 2,1 cm', '8Go DDR3', 'Core i5-5300U 2.3GHz', 1),
(4, 'Hp elitebook 820', 1, '420.00', '360.00', 'Intel Core i5-5300U, 8GB (2x4GB) DDR3L 2.30Ghz, 500GB HDD SATA + 32GB Flash Cache, 12.5\" AG FHD LED (1920 x 1080), Intel HD Graphics 5500, Gigabit Ethernet, Wi-Fi 802.11a/b/g/n, Bluetooth 4.0, 720p HD webcam, USB 3.0, DisplayPort 1.2, VGA, Windows 10 Professional 64', NULL, '5761650586849.jpg', '6601650586849.png', '3141650586849.jpg', '2022-04-21 23:20:49', '2022-04-21 23:20:49', '500GB HDD SATA + 32GB Flash Cache', '12.5\" AG FHD LED (1920 x 1080)', '8GB (2x4GB) DDR3L', 'Core i5-5300U 2.30Ghz', 1),
(5, 'Hp probook 640', 1, '420.00', '360.00', 'Description longue HP ProBook 640 G2 Ordinateur portable 35,6 cm (14\") Intel® Core™ i5 8 Go DDR4-SDRAM 500 Go HDD Noir, Argent:\r\nHP ProBook 640 G2. Type de produit: Ordinateur portable, Format: Clapet. Famille de processeur: Intel® Core™ i5, Modèle de processeur: i5-6300U, Fréquence du processeur: 2,5 GHz. Taille de l\'écran: 35,6 cm (14\"). Mémoire interne: 8 Go, Type de mémoire interne: DDR4-SDRAM. Capacité totale de stockage: 500 Go, Supports de stockage: HDD. Modèle d\'adaptateur graphique inclus: Intel® HD Graphics 520. Couleur du produit: Noir, Argent. Poids: 1,95 kg', NULL, '8441650593133.jpg', '2181650593133.jpg', '6621650593133.jpg', '2022-04-22 01:05:33', '2022-04-22 01:05:33', '500 Go HDD', '35,6 cm (14\")', '8 Go', 'Core i5-6300U 2,5 GHz', 1),
(6, 'Lenovo ThinkPad T440', 1, '470.00', '420.00', 'Description longue Lenovo ThinkPad T440 Ordinateur portable 35,6 cm (14\") Intel® Core™ i5 DDR3L-SDRAM Noir:\r\nLenovo ThinkPad T440. Type de produit: Ordinateur portable, Format: Clapet. Famille de processeur: Intel® Core™ i5, Modèle de processeur: i5-4300U, Fréquence du processeur: 1,9 GHz. Taille de l\'écran: 35,6 cm (14\"). Type de mémoire interne: DDR3L-SDRAM. Modèle d\'adaptateur graphique inclus: Intel® HD Graphics 4400. Couleur du produit: Noir', NULL, '8161650593435.jpg', '4111650593435.jpg', '851650593435.webp', '2022-04-22 01:10:35', '2022-04-22 01:10:35', '500 Go HDD Noir', '35,6 cm (14\")', '8 Go', 'Core i5-4300U 1,9 GHz', 2),
(7, 'HP WORKSTATION ELITEBOOK 8570W', 2, '580.00', '530.00', 'Processeur: Core i7-3630qm 2.4Ghz (3eme génération)\r\nMémoire: 8Go DDR3 (32Go Max)\r\nDisque dur: 120 Go SSD / 320GB (au choix)\r\nNvidia Quadro K1000M (2Gb)\r\nDVDRW, Webcam, Wifi, Bluetooth\r\nDisplay Port (HDMI), Clavier numerique\r\nÉcran: 15.6\'\' LED\r\nWindows 10', '20', '6831652457715.jpg', '291652457715.jpg', '4071652457715.jpg', '2022-05-13 14:01:55', '2022-05-13 14:01:55', '120 Go SSD / 320GB (au choix)', '15.6\'\' LED', '8Go DDR3 (32Go Max)', 'Core i7-3630qm 2.4Ghz (3eme génération)', 1),
(8, 'DELL Latitude E7440', 2, '450.00', '380.00', 'Facteur de forme : Ordinateur portable\r\nProcesseur : Intel Core i5-4300U 1.9-2,9 GHz Turboboost\r\nChipset : Intel ID9C43 Haswell-ULT\r\nMémoire Vive : 8 Go - DDR3\r\nDisque stockage : 250 Go SSD 10x plus rapide\r\nLecteur optique : sans\r\nCarte graphique : Intégrée - Intel HD Graphics 4400\r\nCarte son : Intégrée - Enceintes et microphone\r\nRéseau : 100/1000 - Gigabit Ethernet\r\nWifi : Oui\r\nBluetooth : Oui Version 4.0\r\nWebcam : Oui\r\nPavé numérique : Non\r\nClavier : AZERTY\r\nEcran : 14.1\'\' HD - LED - MAT Antireflets\r\nRésolution de la dalle : 1280 x 800\r\nReconditionné\r\nSystème d\'exploitation installé : Windows 10 Professionnel 64 bits\r\nDimensions : Hauteur : 2.1 cm - Largeur : 33.7 cm - Profondeur : 23.1 cm\r\nPoids : 1.63 Kg\r\nCouleur : Noir et Gris\r\nPorts de connexion\r\n1 x mini DisplayPort\r\n3 x USB 3.0\r\n1 x HDMI\r\n1 x Lecteur de cartes mémoires : SD\r\n1 x Gigabit Ethernet (RJ45) 10/100/1000Mbps\r\n1 x Station d\'accueil / duplicateur de ports\r\n1 x Sortie de ligne/casque', '20', '3411652458392.jpg', '5521652458392.jpg', '3761652458392.webp', '2022-05-13 14:13:12', '2022-05-13 14:13:12', '250 Go SSD 10x plus rapide', '14.1\'\' HD - LED - MAT Antireflets', '8 Go - DDR3', 'Intel Core i5-4300U 1.9-2,9 GHz Turboboost', 5),
(9, 'DELL Latitude E5470 Webcam HDMI', 2, '450.00', '370.00', 'Facteur de forme : Ordinateur portable\r\nProcesseur : Intel Core i5-6300U 2,4-3.0GHz\r\nChipset : Intel Skylake-U Premium PCH\r\nMémoire Vive : 8 Go\r\nDisque stockage : SSD 256Go jusqu\'a 15 fois plus rapide\r\nLecteur optique : Non\r\nCarte graphique : Intégrée - Intel HD Graphics 4400\r\nCarte son : Intégrée - Enceintes et microphone\r\nRéseau : 100/1000 - Gigabit Ethernet\r\nWifi : Oui\r\nBluetooth : Oui 4.2\r\nWebcam : Oui\r\nPavé numérique : Non\r\nClavier : AZERTY\r\nEcran : 14.1\'\' HD - LED - MAT Antireflets\r\nSystème d\'exploitation installé : Microsoft Windows 10 Professionnel 64 bits\r\nDimensions : Hauteur : 23mm - Largeur : 335mm - Profondeur : 231mm\r\nPoids : 1.828Kg\r\nCouleur : Noir et Gris\r\nReconditionné\r\nPorts de connexion\r\n3 x USB 3.0-3.1\r\n1 x VGA - HD D-Sub (HD-15) 15 broches\r\n1 x HDMI\r\n1 x Lecteur de cartes mémoires : SD\r\n1 x SmartCard Reader\r\n1 x Gigabit Ethernet (RJ45) 10/100/1000Mbps\r\n1 x Port Station d\'accueil / duplicateur de ports\r\n1 x Microphone - entrée / Audio - sortie de ligne/casque\r\nPrix Maximum :   450$\r\nPrix Maximum :  370$', '20', '7141652458761.jpg', '4421652458761.jpg', '6751652458761.jpg', '2022-05-13 14:19:21', '2022-05-13 14:19:21', 'SSD 256Go jusqu\'a 15 fois plus rapide', '14.1\'\' HD - LED - MAT Antireflets', '8 Go', 'Intel Core i5-6300U 2,4-3.0GHz', 5),
(10, 'DELL Latitude E7240', 2, '480.00', '450.00', 'Facteur de forme : Ordinateur ultra portable\r\nProcesseur : Intel Core i7-4600U\r\nChipset : Intel Haswell\r\nMémoire Vive : 8 Go - DDR3\r\nDisque stockage : 256 Go SSD 35x plus rapide\r\nLecteur optique : Non\r\nCarte graphique : Intégrée - Intel HD Graphics 4400\r\nCarte son : Intégrée - Enceintes et microphone\r\nRéseau : 100/1000 - Gigabit Ethernet\r\nWifi : Oui\r\nBluetooth : Oui\r\nWebcam : Oui\r\nClavier : AZERTY  rétro-éclairé\r\nEcran : 12.5\'\' HD - LED - MAT Antireflets\r\nRésolution de la dalle : 1366 x 768\r\nSystème d\'exploitation installé : Microsoft Windows 10 Professionnel 64 bits\r\nDimensions : Hauteur : 2.0 cm - Largeur : 31.0 cm - Profondeur : 21.1 cm\r\nPoids : 1.36 Kg\r\nCouleur : Noir et Gris\r\nType de produit : Reconditionné a neuf\r\nPorts de connexion\r\n1 x mini DisplayPort\r\n3 x USB 3.0\r\n1 x HDMI\r\n1 x Lecteur de cartes mémoires : SD\r\n1 x Gigabit Ethernet (RJ45) 10/100/1000Mbps\r\n1 x Station d\'accueil / duplicateur de ports\r\n1 x Sortie de ligne/casque', '20', '1031652459008.jpg', '4241652459008.png', '9121652459008.jpg', '2022-05-13 14:23:28', '2022-05-13 14:23:28', '256 Go SSD 35x plus rapide', '12.5\'\' HD - LED - MAT Antireflets', '8 Go - DDR3', 'Intel Core i7-4600U', 5),
(11, 'Lenovo ThinkPad Yoga', 2, '470.00', '450.00', 'Type de stockage principal : 5400tr/mn, Interface stockage principal : Serial ATA III, Cache mSATA : 16 Go, Résolution WebCam : 0,9 Mpx, Clavier retroéclairé : Oui, Format de l\'écran : 16:9, Tactile : Oui, Définition de l\'écran : 1920 x 1080, Aspect de l\'écran : Mat, Puce graphique : Intel HD Graphics 4400, Quantité de mémoire graphique : Partagée, SD / MMC : Oui, Support du Wi-Fi : Wi-Fi 802.11ac, Support du Bluetooth : Bluetooth 4.0, Sortie HDMI : Oui', '20', '3171652459963.jpg', '821652459963.jpg', '881652459963.jpg', '2022-05-13 14:39:23', '2022-05-13 14:39:23', '500 Go', '12,5 \"', '8 Go', 'Intel Core i5-4200U 1,6 GHz', 2),
(12, 'MSI GAMING MSI GF75', 2, '1600.00', '1500.00', 'Séries : MSI GF75, Dimensions : 20 x 12 x 3 pouces, Piles : 1 Piles lithium-ion requises', '20', '7601652460472.jpg', '1091652460472.jpg', '2741652460472.jpg', '2022-05-13 14:47:52', '2022-05-13 14:47:52', '512 Go', '17,3 \"\"', '8 Go', '8032 ‎NVIDIA GeForce GTX 1660Ti', 6),
(13, 'MSI GP62M 7RDX-1484XFR Leopard', 2, '1450.00', '1300.00', 'INTEL CORE I7-7700HQ 8 GO SSD 256 GO + HDD 1 TO 15.6\" LED FULL HD NVIDIA GEFORCE GTX 1050 4 GO WI-FI AC/BLUETOOTH WEBCAM FREEDOS', '20', '1751652460657.jpg', '5811652460657.jpg', '3141652460657.jpg', '2022-05-13 14:50:57', '2022-05-13 14:50:57', 'SSD 256 GO + HDD 1 TO', '15.6\" LED FULL HD', '8 Go', 'INTEL CORE I7-7700HQ', 6),
(14, 'MSI GS75 Stealth 9SD-457FR', 2, '1850.00', '1750.00', 'INTEL CORE I7-9750H 16 GO SSD 512 GO 17.3\" LED FULL HD 144 HZ NVIDIA GEFORCE GTX 1660 TI 6 GO WI-FI AC/BLUETOOTH WEBCAM WINDOWS 10 FAMILLE 64 BIT', '20', '9081652460823.jpg', '6181652460823.jpg', '6081652460823.jpg', '2022-05-13 14:53:43', '2022-05-13 14:53:43', 'SSD 512 GO', '17.3\" LED FULL HD', '6 GO', 'INTEL CORE I7-9750H', 6),
(15, 'Asus ROG Strix Scar GL504GW', 2, '1700.00', '1550.00', 'Asus ROG Strix Scar GL504GW 15, 6 Pouces Full HD 144 Hz 3 ms Affichage des Jeux pour Ordinateur Portable - (Intel i7-8750H, 16 Go de RAM, 256 Go SSD PCI-E + 1 t, Vitesse du processeur : 144 Hz, Nombre de cœurs : 6, Vitesse de rotation du disque dur : 1500 tr/min, Technologie du disque dur : Embedded MultiMediaCard, Bluetooth, WiFi, 2,4 Kg', '20', '2811652461358.jpg', '5691652461358.jpg', '8061652461358.jpg', '2022-05-13 15:02:38', '2022-05-13 15:02:38', '256 Go SSD PCI-E + 1 t', '15,6\"\" Full HD', '16 Go', 'Intel i7-8750H', 4),
(16, 'ASUS ROG Gaming STRIX-G17-G712LU-H7015T', 2, '1450.00', '1300.00', '•	Ecran : 17,3\'\' 17,3\'\' FHD 120Hz / NanoEdge / 300 Nits / WideView / NTSC:72% / IPS (1920 x 1080 pixels LED)\r\n•	Processeur : Intel Core i7-10750H Processor 2.6 GHz (12M Cache, up to 5.0 GHz)\r\n•	Mémoire : RAM 16G DDR4 (8G x 2)\r\n•	Stockage : 512GB MVMe M.2 PCIe SSD\r\n•	Système d\'exploitation : WINDOWS 10\r\n•	Carte graphique : Optimus NVIDIA GeForce GTX 1660Ti GDDR6 6GB\r\n•	Puissance: 230 W (LWS / LW / LV / LU)\r\n•	Le Xbox Game Pass pour PC inclut un accès à une bibliothèque de jeux PC incontournables pour Windows 10. De nouveaux jeux sont régulièrement ajoutés, afin que vous ayez toujours une nouveauté à découvrir. La meilleure façon de découvrir le Xbox Game Pass sur Windows 10, c\'est avec l\'application Xbox', '20', '2571652461713.jpg', '9271652461713.jpg', '221652461713.jpg', '2022-05-13 15:08:33', '2022-05-13 15:08:33', '512Go SSD', '17,3\'\' FHD', '16 Go DDR4 (8G x 2)', 'Intel I7-10750H', 4),
(17, 'HP OMEN 15-dh0048nf -NVIDIA', 2, '1500.00', '1400.00', 'Windows 10 Famille 64Intel® Core™ i58 Go RAM512 Go Disque SSD15.6\" FHDNVIDIA® GeForce RTX™ 2060', '20', '8791652462177.webp', '6021652462177.webp', '2781652462177.webp', '2022-05-13 15:16:17', '2022-05-13 15:16:17', '250 Go SSD', '15.6\"', '12 Go', 'Intel® Core i58 Go', 1),
(18, 'HP Omen 15-ce053nf', 2, '1400.00', '1300.00', 'Écran 15.6\" LCD - IPS (anti-reflets) 120 Hz Résolution Full HD 1920 x 1080 pixels Windows 10 Famille Intel Core i7-7700HQ (4 coeurs x 3.80 GHz) Nvidia GeForce GTX 1060 (6 Go) 8 Go DDR4 - 2400 MHz 1 To (7200 tr/min) + 128 Go (SSD M.2 PCI-e 3.0 x4)', '20', '1421652462350.webp', '4901652462350.webp', '7031652462350.webp', '2022-05-13 15:19:10', '2022-05-13 15:19:10', 'SSD 128 Go + HDD 1 To', '15.6\" LCD - IPS (anti-reflets)', '8 Go', 'Core i7 2,8 GHz', 1),
(19, 'Gamer - ACER Predator PT515-52-793U', 2, '2300.00', '2200.00', '•	Processeur : Intel Core i7 (10ème génération) 10750H / 2.6 GHz\r\n•	RAM : 16 Go (2 x 8 Go)\r\n•	Résolution : 1920 x 1080 (Full HD)\r\n•	Fonctions : Anti-éblouissement, ComfyView, écran à bord étroit, Taux de réponse de 3 ms (gris à gris) (Overdrive), temps de réponse de 5 ms (gris à gris)\r\n•	Stockage principal : 1.024 To SSD - Self-Encrypting Drive - Samsung\r\n•	Processeur graphique : NVIDIA GeForce RTX 2080 SUPER\r\n•	Durée de fonctionnement : Jusqu\'à 4 heures\r\n•	Garantie (²) : 2 ans - pièces, main d’œuvre\r\n•	Système d\'exploitation : Windows 10 Edition Familiale 64 bits\r\n•	Poids : 2.1 kg', '20', '711652462565.webp', '8651652462565.webp', '7771652462565.webp', '2022-05-13 15:22:45', '2022-05-13 15:22:45', '1024To SSD', '15,6\" FHD', '16Go', 'Core i7-10750H', 3),
(20, 'Acer Predator PH317-52-726Z', 2, '1500.00', '1400.00', '•	Processeur : Intel Core i7 (8ème génération) 8750H / 2.2 GHz\r\n•	RAM : 8 Go (2 x 4 Go)\r\n•	Résolution : 1920 x 1080 (Full HD)\r\n•	Fonctions : Anti-éblouissement, ComfyView, taux de réponse de 25 ms\r\n•	Stockage principal : 128 Go SSD - SK Hynix\r\n•	Stockage secondaire : 1 To HDD SATA / 7200 tours/min - HGST\r\n•	Processeur graphique : NVIDIA GeForce GTX 1050 Ti\r\n•	Durée de fonctionnement : Jusqu\'à 6 heures\r\n•	Système d\'exploitation : Windows 10 Edition Familiale 64 bits\r\n•	Poids : 3 kg', '20', '2701652462806.webp', '1171652462806.webp', '5631652462806.webp', '2022-05-13 15:26:46', '2022-05-13 15:26:46', 'Ssd 128 Go + Hdd 1 To', '17\"', '8 Go', 'Core i7-8750H', 3),
(21, 'Acer Predator G3-572-72Z8', 2, '1450.00', '1400.00', '•	Processeur : Intel Core i7 (7ème génération) 7700HQ / 2.8 GHz\r\n•	RAM : 8 Go (2 x 4 Go)\r\n•	Résolution : 1920 x 1080 (Full HD)\r\n•	Fonctions : Anti-éblouissement\r\n•	Stockage principal : 128 Go SSD\r\n•	Stockage secondaire : 1 To HDD SATA / 5400 tours/min\r\n•	Processeur graphique : NVIDIA GeForce GTX 1060\r\n•	Garantie (²) : 2 ans - pièces, main d’œuvre\r\n•	Système d\'exploitation : Windows 10 Edition Familiale 64 bits\r\n•	Poids : 2.7 kg', '20', '1051652462981.webp', '361652462981.webp', '6211652462981.webp', '2022-05-13 15:29:41', '2022-05-13 15:29:41', '128Go SSD + 1To HDD', '15,6\"\"', '8 Go', 'i7-7700HQ', 3),
(22, 'HP Pavilion Gaming 15-ec1018nf', 2, '1350.00', '1300.00', '•	Processeur : AMD Ryzen 5 4600H / 3 GHz\r\n•	RAM : 8 Go (2 x 4 Go)\r\n•	Résolution : 1920 x 1080 (Full HD)\r\n•	Fonctions : Anti-éblouissement, Micro Edge\r\n•	Stockage principal : 512 Go SSD M.2 PCIe - NVM Express (NVMe)\r\n•	Processeur graphique : NVIDIA GeForce GTX 1650 Ti / AMD Radeon Graphics\r\n•	Durée de fonctionnement : Jusqu\'à 8.25 heures\r\n•	Garantie (²) : 2 ans\r\n•	Système d\'exploitation : Windows 10 Edition Familiale 64 bits - Anglais/Français\r\n•	Poids : 1.98 kg', '20', '3681652463155.webp', '7361652463155.webp', '9921652463155.webp', '2022-05-13 15:32:35', '2022-05-13 15:32:35', '512 Go - GTX 1650Ti', '15\" FHD', '8 Go', 'AMD Ryzen 5 4600H / 3 GHz', 1),
(23, 'Hp Zbook 17 G1', 2, '750.00', '680.00', 'Etat Correct - Windows 10 Pro - Hp Zbook 17 G1 17\" Core i7-4800MQ 2,7GHz 16 Go 480Go Ssd Windows 10 Pro', '20', '2401652463475.webp', '3131652463475.webp', '731652463475.jpg', '2022-05-13 15:37:55', '2022-05-13 15:37:55', '480Go Ssd', '17\"', '16 Go', 'Core i7-4800MQ 2,7GHz', 1),
(24, 'LENOVO Legion 5 17ACH6H - 17', 2, '1650.00', '1550.00', '•	Processeur : AMD Ryzen 7 5800H / 3.2 GHz\r\n•	RAM : 16 Go (2 x 8 Go)\r\n•	Résolution : 1920 x 1080 (Full HD)\r\n•	Fonctions : Anti-éblouissement, FreeSync Technology, angle de vision 170°, variateur CC, Dolby Vision, gamme de couleurs NTSC de 72 %\r\n•	Stockage principal : 512 Go SSD M.2 2242 PCIe 3.0 x4 - NVM Express (NVMe)\r\n•	Processeur graphique : NVIDIA GeForce RTX 3060 / AMD Radeon Graphics\r\n•	Durée de fonctionnement : Jusqu\'à 7.9 heures\r\n•	Garantie (²) : 2 ans\r\n•	Système d\'exploitation : Aucun système d\'exploitation fourni\r\n•	Poids : 2.98 kg', '20', '8501652463642.webp', '6971652463642.webp', '5361652463642.webp', '2022-05-13 15:40:42', '2022-05-13 15:40:42', '512Go SSD', '17,3\"FHD', '6 GO', 'AMD Ryzen 7 5800H / 3.2 GHz', 2);

-- --------------------------------------------------------

--
-- Table structure for table `baskets`
--

CREATE TABLE `baskets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `label` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `label`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Smartphone', '', '2022-01-22 22:04:34', '2022-01-22 22:04:34'),
(2, 'Ordinateur', 'Le consommable informatique le plus disponible chez Mcs Group', '2022-01-22 22:01:59', '2022-01-22 22:01:59'),
(4, 'Équipement Réseau', '', '2022-01-22 22:04:34', '2022-01-22 22:04:34'),
(5, 'Article vestimentaire', 'Boutique d\'habillement', '2022-01-22 22:06:33', '2022-01-22 22:06:33'),
(6, 'Walkers', 'Casques, Ecouteurs, etc.', '2022-01-22 22:06:33', '2022-01-22 22:06:33'),
(7, 'Accessoires d\'ordinateurs', 'Disque dur, RAM, Carte réseau etc.', '2022-01-22 22:07:55', '2022-01-22 22:07:55'),
(8, 'Multi-média', '', '2022-01-22 23:01:47', '2022-01-22 23:01:47'),
(9, 'Formation', '', '2022-06-09 02:11:32', '2022-06-09 02:11:32'),
(10, 'Service', '', '2022-06-09 02:11:32', '2022-06-09 02:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonecode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `c_name`, `phonecode`, `created_at`, `updated_at`) VALUES
(1, 'RD Congo', '+243', '2021-12-22 01:41:24', '2021-12-22 01:41:24'),
(2, 'Afrique du Sud', '+27', '2021-12-22 01:41:24', '2021-12-22 01:41:24'),
(3, 'Algérie', '+213', NULL, NULL),
(4, 'Allemagne', '+49', NULL, NULL),
(5, 'Angola', '+244', NULL, NULL),
(6, 'Belgique', '+32', NULL, NULL),
(7, 'Cameroun', '+237', NULL, NULL),
(8, 'Canada', '+1', NULL, NULL),
(9, 'République du Congo', '+242', NULL, NULL),
(10, 'Côte d\'Ivoire', '+225', NULL, NULL),
(11, 'Égypte', '+20', NULL, NULL),
(12, 'France', '+33', NULL, NULL),
(13, 'Gabon', '+241', NULL, NULL),
(14, 'Sénégal', '+221', NULL, NULL),
(15, 'Tunisie', '+216', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feed_backs`
--

CREATE TABLE `feed_backs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `objet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mcs_adresses`
--

CREATE TABLE `mcs_adresses` (
  `id_adr` int(11) NOT NULL,
  `nom_adr` varchar(255) DEFAULT NULL,
  `details_adr` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcs_adresses`
--

INSERT INTO `mcs_adresses` (`id_adr`, `nom_adr`, `details_adr`) VALUES
(1, 'Kasavubu-Huilleries-Avenue des cocotiers', NULL),
(2, 'Lemba-Salongo-Kwemi-Paroisse 23', NULL),
(3, 'Adresse 3', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mcs_contact`
--

CREATE TABLE `mcs_contact` (
  `id_cont` int(11) NOT NULL,
  `contenu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcs_contact`
--

INSERT INTO `mcs_contact` (`id_cont`, `contenu`) VALUES
(1, '+33659598750'),
(2, '+243822764142'),
(3, 'groupmcs.it@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_30_163431_create_countries_table', 1),
(6, '2021_11_30_163950_create_towns_table', 1),
(7, '2021_11_30_164746_create_advertisements_table', 1),
(8, '2021_11_30_165141_create_poles_table', 1),
(9, '2021_11_30_171040_create_articles_table', 1),
(10, '2021_11_30_171904_create_purchases_table', 1),
(11, '2021_11_30_181556_create_baskets_table', 1),
(12, '2022_01_12_121017_create_categories_table', 1),
(13, '2022_02_15_111241_create_feed_backs_table', 2),
(14, '2022_02_17_161448_create_terminals_table', 3),
(32, '2022_01_16_075105_create_payments_table', 4),
(33, '2022_06_15_203513_create_trainings_table', 5),
(34, '2022_06_16_054427_create_software_requests_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `ordinateur`
--

CREATE TABLE `ordinateur` (
  `id_ordi` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `site_officiel` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordinateur`
--

INSERT INTO `ordinateur` (`id_ordi`, `name`, `site_officiel`) VALUES
(1, 'HP', NULL),
(2, 'LENOVO', NULL),
(3, 'ACER', NULL),
(4, 'ASUS', NULL),
(5, 'DELL', NULL),
(6, 'MSI', NULL),
(7, 'OMEN', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(10,2) NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_article` int(11) DEFAULT NULL,
  `code_article` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_id`, `payer_id`, `payer_email`, `amount`, `currency`, `payment_status`, `created_at`, `updated_at`, `id_article`, `code_article`) VALUES
(1, 'PAYID-MKQKNJI1JJ42809LK464873J', 'X3CULGNXB7HCU', 'philippembambi413@gmail.com', 1880.00, 'USD', 'approved', '2022-06-05 09:27:08', '2022-06-05 09:27:08', NULL, NULL),
(2, 'PAYID-MKQLQPI75715688A3196221K', 'X3CULGNXB7HCU', 'philippembambi413@gmail.com', 450.00, 'USD', 'approved', '2022-06-05 10:42:38', '2022-06-05 10:42:38', NULL, NULL),
(3, 'PAYID-MKQLSCY3JB75465UF184940F', 'X3CULGNXB7HCU', 'philippembambi413@gmail.com', 470.00, 'USD', 'approved', '2022-06-05 10:45:45', '2022-06-05 10:45:45', NULL, NULL),
(4, 'PAYID-MKQLVTQ9GN82204C38957041', 'X3CULGNXB7HCU', 'philippembambi413@gmail.com', 470.00, 'USD', 'approved', '2022-06-05 10:53:23', '2022-06-05 10:53:23', NULL, NULL),
(5, 'PAYID-MKQLXBI6C443149HH8102153', 'X3CULGNXB7HCU', 'philippembambi413@gmail.com', 1500.00, 'USD', 'approved', '2022-06-05 10:56:08', '2022-06-05 10:56:08', NULL, NULL),
(6, 'PAYID-MKVCZKQ7JD53695FU799373Y', 'X3CULGNXB7HCU', 'philippembambi413@gmail.com', 250.00, 'USD', 'approved', '2022-06-15 17:49:59', '2022-06-15 17:49:59', NULL, NULL),
(7, 'PAYID-MKVC24I3RU75443SG1412316', 'X3CULGNXB7HCU', 'philippembambi413@gmail.com', 1650.00, 'USD', 'approved', '2022-06-15 17:54:22', '2022-06-15 17:54:22', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poles`
--

CREATE TABLE `poles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `netlink` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `delivery_mode` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `state` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'En attente',
  `code_purchase` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `quantity`, `total_price`, `delivery_mode`, `payment_mode`, `created_at`, `updated_at`, `user_id`, `article_id`, `state`, `code_purchase`) VALUES
(2, 1, '250.00', 'pointDeVente', 'carteCredit', '2022-06-05 08:51:17', '2022-06-05 08:51:17', 1, 1, 'Validé', '7218376b1e'),
(3, 1, '1650.00', 'pointDeVente', 'carteCredit', '2022-06-05 08:54:01', '2022-06-05 08:54:01', 1, 24, 'Validé', 'ce9fc8dcd7'),
(4, 2, '2800.00', 'pointDeVente', 'espece', '2022-06-05 09:20:59', '2022-06-05 09:20:59', 1, 18, 'En attente', 'cce3745647'),
(5, 2, '2800.00', 'pointDeVente', 'carteCredit', '2022-06-05 09:21:20', '2022-06-05 09:21:20', 1, 18, 'En attente', '36e2fd85aa'),
(6, 4, '1880.00', 'pointDeVente', 'carteCredit', '2022-06-05 09:26:39', '2022-06-05 09:26:39', 1, 11, 'En attente', '78ce54ba09'),
(7, 1, '450.00', 'Adomicile', 'carteCredit', '2022-06-05 10:41:38', '2022-06-05 10:41:38', 1, 3, 'En attente', '3974e16ed9'),
(8, 1, '470.00', 'Adomicile', 'carteCredit', '2022-06-05 10:45:08', '2022-06-05 10:45:08', 1, 6, 'En attente', '7bcbef6dd1'),
(15, 1, '750.00', 'Adomicile', 'carteCredit', '2022-06-15 17:07:54', '2022-06-15 17:07:54', 1, 23, 'En attente', '92caa7eec9'),
(21, 1, '250.00', 'Adomicile', 'carteCredit', '2022-06-16 11:53:10', '2022-06-16 11:53:10', 1, 1, 'En attente', '063a7cbb75'),
(22, 2, '500.00', 'Adomicile', 'carteCredit', '2022-06-16 12:22:51', '2022-06-16 12:22:51', 1, 1, 'En attente', 'C2703BAF90'),
(23, 2, '500.00', 'Adomicile', 'carteCredit', '2022-06-16 12:36:25', '2022-06-16 12:36:25', 1, 1, 'En attente', 'E7A6DD1816'),
(24, 1, '420.00', 'pointDeVente', 'carteCredit', '2022-06-16 12:41:23', '2022-06-16 12:41:23', 1, 5, 'En attente', '952AAF3B57');

-- --------------------------------------------------------

--
-- Table structure for table `software_requests`
--

CREATE TABLE `software_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `software_requests`
--

INSERT INTO `software_requests` (`id`, `category`, `client_type`, `desc`, `created_at`, `updated_at`, `id_user`) VALUES
(1, 'Web', 'Entreprise', 'J\'ai besoin d\'un site web E-commerce', '2022-06-16 06:24:11', '2022-06-16 06:24:11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `terminals`
--

CREATE TABLE `terminals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `mac_addres` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_addres` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terminals`
--

INSERT INTO `terminals` (`id`, `id_user`, `mac_addres`, `ip_addres`, `user_agent`, `created_at`, `updated_at`) VALUES
(1, 1, '62-67-20-F8-A6-F0   N/A', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:93.0) Gecko/20100101 Firefox/93.0', '2022-02-17 17:29:08', '2022-02-17 17:29:08'),
(7, 0, '62-67-20-F8-A6-F0   N/A', '192.168.137.129', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-02-17 18:22:53', '2022-02-17 18:22:53'),
(18, 0, '62-67-20-F8-A6-F0   N/A', '192.168.137.251', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-02-24 17:52:38', '2022-02-24 17:52:38'),
(82, 0, '', '41.222.199.240', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko/20100101 Firefox/100.0', '2022-04-22 17:11:56', '2022-04-22 17:11:56'),
(83, 0, '', '173.252.127.34', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36', '2022-04-26 01:20:49', '2022-04-26 01:20:49'),
(84, 0, '', '40.77.189.254', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/534+ (KHTML, like Gecko) BingPreview/1.0b', '2022-04-26 10:12:17', '2022-04-26 10:12:17'),
(85, 0, '', '34.133.217.247', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36', '2022-04-29 09:33:58', '2022-04-29 09:33:58'),
(86, 0, '', '54.218.77.173', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', '2022-04-29 22:49:57', '2022-04-29 22:49:57'),
(87, 0, '', '149.56.150.31', 'Mozilla/5.0 (compatible; Dataprovider.com)', '2022-04-30 10:44:49', '2022-04-30 10:44:49'),
(88, 0, '', '154.73.22.47', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko/20100101 Firefox/100.0', '2022-05-03 04:07:45', '2022-05-03 04:07:45'),
(91, 0, '', '31.13.127.10', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.4 Mobile/15E148 Safari/604.1', '2022-05-03 04:59:09', '2022-05-03 04:59:09'),
(92, 0, '', '45.221.4.47', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko/20100101 Firefox/100.0', '2022-05-03 04:59:11', '2022-05-03 04:59:11'),
(93, 0, '', '45.221.5.47', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko/20100101 Firefox/100.0', '2022-05-03 05:08:52', '2022-05-03 05:08:52'),
(97, 1, '', '154.73.23.47', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-03 05:33:02', '2022-05-03 05:33:02'),
(102, 0, '', '91.234.194.10', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.54 Safari/537.36', '2022-05-03 05:43:16', '2022-05-03 05:43:16'),
(103, 0, '', '154.73.22.39', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-03 08:04:54', '2022-05-03 08:04:54'),
(106, 0, '', '169.159.220.246', 'Mozilla/5.0 (Linux; Android 7.1.1; SAMSUNG SM-J510FN) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/16.2 Chrome/92.0.4515.166 Mobile Safari/537.36', '2022-05-03 14:02:30', '2022-05-03 14:02:30'),
(107, 0, '', '154.73.23.39', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko/20100101 Firefox/100.0', '2022-05-05 10:31:56', '2022-05-05 10:31:56'),
(109, 0, '', '45.221.5.39', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.41 Safari/537.36 Edg/101.0.1210.32', '2022-05-05 10:48:02', '2022-05-05 10:48:02'),
(110, 0, '', '173.252.127.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.1 Mobile/15E148 Safari/604.1', '2022-05-05 12:08:50', '2022-05-05 12:08:50'),
(111, 0, '', '45.221.4.39', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko/20100101 Firefox/100.0', '2022-05-05 12:09:32', '2022-05-05 12:09:32'),
(115, 0, '', '65.154.226.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.71 Safari/537.36', '2022-05-05 17:16:10', '2022-05-05 17:16:10'),
(116, 0, '', '65.154.226.166', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.71 Safari/537.36', '2022-05-06 01:22:52', '2022-05-06 01:22:52'),
(117, 0, '', '45.221.4.40', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko/20100101 Firefox/100.0', '2022-05-06 01:45:44', '2022-05-06 01:45:44'),
(118, 0, '', '45.221.5.40', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko/20100101 Firefox/100.0', '2022-05-06 01:57:35', '2022-05-06 01:57:35'),
(120, 0, '', '154.73.23.40', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-06 02:51:35', '2022-05-06 02:51:35'),
(127, 0, '', '154.73.22.40', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko/20100101 Firefox/100.0', '2022-05-06 03:04:11', '2022-05-06 03:04:11'),
(133, 0, '', '45.221.4.42', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-06 05:05:39', '2022-05-06 05:05:39'),
(134, 0, '', '154.73.22.42', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-06 05:06:14', '2022-05-06 05:06:14'),
(136, 1, '', '45.221.5.42', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko/20100101 Firefox/100.0', '2022-05-06 05:21:22', '2022-05-06 05:21:22'),
(138, 0, '', '154.73.23.43', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-06 06:19:27', '2022-05-06 06:19:27'),
(140, 0, '', '169.159.211.155', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-09 04:14:21', '2022-05-09 04:14:21'),
(141, 0, '', '169.159.210.155', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-09 04:16:51', '2022-05-09 04:16:51'),
(145, 0, '', '154.73.22.34', 'Mozilla/5.0 (Linux; Android 5.0.2; SAMSUNG SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/3.3 Chrome/38.0.2125.102 Mobile Safari/537.36', '2022-05-10 16:35:01', '2022-05-10 16:35:01'),
(147, 0, '', '40.77.189.78', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/534+ (KHTML, like Gecko) BingPreview/1.0b', '2022-05-10 22:05:14', '2022-05-10 22:05:14'),
(148, 0, '', '41.243.11.166', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.4 Mobile/15E148 Safari/604.1', '2022-05-11 15:36:37', '2022-05-11 15:36:37'),
(156, 0, '', '204.186.55.230', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', '2022-05-11 15:51:39', '2022-05-11 15:51:39'),
(157, 0, '', '154.73.22.33', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko/20100101 Firefox/100.0', '2022-05-11 15:52:50', '2022-05-11 15:52:50'),
(158, 0, '', '45.221.4.33', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.41 Safari/537.36', '2022-05-11 15:55:31', '2022-05-11 15:55:31'),
(160, 0, '', '154.73.23.33', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko/20100101 Firefox/100.0', '2022-05-11 15:56:23', '2022-05-11 15:56:23'),
(173, 0, '', '45.221.5.33', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-11 16:53:11', '2022-05-11 16:53:11'),
(180, 0, '', '69.59.197.165', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', '2022-05-11 18:40:19', '2022-05-11 18:40:19'),
(185, 0, '', '41.243.11.132', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.4 Mobile/15E148 Safari/604.1', '2022-05-12 09:42:06', '2022-05-12 09:42:06'),
(186, 0, '', '41.243.11.189', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.4 Mobile/15E148 Safari/604.1', '2022-05-12 17:58:41', '2022-05-12 17:58:41'),
(188, 0, '', '219.92.192.160', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.64 Safari/537.36', '2022-05-13 05:10:12', '2022-05-13 05:10:12'),
(189, 0, '', '45.221.5.34', 'Mozilla/5.0 (Linux; Android 10; TECNO KC8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.61 Mobile Safari/537.36', '2022-05-13 08:13:59', '2022-05-13 08:13:59'),
(190, 0, '', '41.243.14.192', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.4 Mobile/15E148 Safari/604.1', '2022-05-13 12:45:56', '2022-05-13 12:45:56'),
(192, 0, '', '154.73.22.41', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko/20100101 Firefox/100.0', '2022-05-13 13:38:37', '2022-05-13 13:38:37'),
(194, 0, '', '45.221.4.41', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko/20100101 Firefox/100.0', '2022-05-13 13:42:57', '2022-05-13 13:42:57'),
(199, 0, '', '45.221.5.41', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-13 16:32:06', '2022-05-13 16:32:06'),
(202, 0, '', '154.73.23.41', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-13 16:36:20', '2022-05-13 16:36:20'),
(237, 0, '', '41.243.11.165', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.4 Mobile/15E148 Safari/604.1', '2022-05-13 17:38:59', '2022-05-13 17:38:59'),
(244, 0, '', '154.73.22.37', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-14 03:44:15', '2022-05-14 03:44:15'),
(245, 0, '', '154.73.23.37', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-14 03:45:46', '2022-05-14 03:45:46'),
(246, 0, '', '45.221.4.37', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-14 03:47:20', '2022-05-14 03:47:20'),
(247, 0, '', '45.221.4.34', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-15 05:30:28', '2022-05-15 05:30:28'),
(248, 0, '', '45.221.4.36', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-16 05:11:53', '2022-05-16 05:11:53'),
(249, 0, '', '95.217.224.250', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 12_2) Applewebkit/605.1.15 (KHTML, like Gecko) Version/15.2 Safari/605.1.15 (Certstream imported domain, Phishing finder tool)', '2022-05-17 03:39:10', '2022-05-17 03:39:10'),
(250, 0, '', '41.243.28.59', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.4 Mobile/15E148 Safari/604.1', '2022-05-17 14:31:21', '2022-05-17 14:31:21'),
(254, 0, '', '154.73.22.35', 'Mozilla/5.0 (Linux; Android 8.1.0; SM-J530F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36', '2022-05-17 18:12:00', '2022-05-17 18:12:00'),
(255, 0, '', '154.73.23.35', 'Mozilla/5.0 (Linux; Android 8.1.0; SM-J530F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36', '2022-05-17 18:22:07', '2022-05-17 18:22:07'),
(256, 0, '', '90.79.252.160', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.4 Mobile/15E148 Safari/604.1', '2022-05-18 05:24:06', '2022-05-18 05:24:06'),
(258, 0, '', '169.159.210.215', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-18 05:50:28', '2022-05-18 05:50:28'),
(260, 0, '', '80.215.207.40', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.4 Mobile/15E148 Safari/604.1', '2022-05-18 10:50:20', '2022-05-18 10:50:20'),
(261, 0, '', '90.79.241.249', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.4 Mobile/15E148 Safari/604.1', '2022-05-18 10:50:44', '2022-05-18 10:50:44'),
(263, 0, '', '35.165.215.140', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', '2022-05-18 21:36:26', '2022-05-18 21:36:26'),
(264, 0, '', '169.159.220.49', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/100.0.4896.85 Mobile/15E148 Safari/604.1', '2022-05-19 09:26:01', '2022-05-19 09:26:01'),
(265, 0, '', '208.117.230.20', 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.1 Mobile/15E148 Safari/604.1', '2022-05-19 09:26:08', '2022-05-19 09:26:08'),
(267, 0, '', '169.159.211.254', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-19 09:38:34', '2022-05-19 09:38:34'),
(268, 0, '', '169.159.220.203', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/100.0.4896.85 Mobile/15E148 Safari/604.1', '2022-05-19 09:59:20', '2022-05-19 09:59:20'),
(269, 0, '', '65.154.226.171', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.71 Safari/537.36', '2022-05-19 12:52:52', '2022-05-19 12:52:52'),
(270, 0, '', '65.154.226.170', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.71 Safari/537.36', '2022-05-20 01:30:31', '2022-05-20 01:30:31'),
(272, 0, '', '41.243.14.206', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.4 Mobile/15E148 Safari/604.1', '2022-05-20 06:25:39', '2022-05-20 06:25:39'),
(273, 0, '', '169.159.210.52', 'Mozilla/5.0 (Linux; Android 11; SM-A105G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.98 Mobile Safari/537.36', '2022-05-20 08:17:19', '2022-05-20 08:17:19'),
(274, 0, '', '40.77.139.127', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/534+ (KHTML, like Gecko) BingPreview/1.0b', '2022-05-20 08:50:23', '2022-05-20 08:50:23'),
(275, 0, '', '40.77.167.34', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', '2022-05-20 08:51:29', '2022-05-20 08:51:29'),
(276, 0, '', '169.255.204.15', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.41 Safari/537.36', '2022-05-20 11:56:59', '2022-05-20 11:56:59'),
(277, 0, '', '169.255.204.27', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.41 Safari/537.36', '2022-05-20 11:59:41', '2022-05-20 11:59:41'),
(278, 0, '', '169.255.204.59', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.41 Safari/537.36', '2022-05-20 12:00:48', '2022-05-20 12:00:48'),
(279, 0, '', '169.255.204.13', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.41 Safari/537.36', '2022-05-20 12:06:32', '2022-05-20 12:06:32'),
(280, 0, '', '169.255.204.24', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.41 Safari/537.36', '2022-05-20 14:08:13', '2022-05-20 14:08:13'),
(281, 0, '', '169.255.204.11', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.41 Safari/537.36', '2022-05-20 14:10:28', '2022-05-20 14:10:28'),
(282, 0, '', '169.255.204.42', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.41 Safari/537.36', '2022-05-20 14:12:14', '2022-05-20 14:12:14'),
(283, 0, '', '169.255.204.20', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.41 Safari/537.36', '2022-05-20 14:14:34', '2022-05-20 14:14:34'),
(284, 0, '', '169.255.204.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.41 Safari/537.36', '2022-05-20 14:15:25', '2022-05-20 14:15:25'),
(285, 0, '', '169.255.204.60', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.41 Safari/537.36', '2022-05-20 14:15:55', '2022-05-20 14:15:55'),
(286, 0, '', '169.159.211.147', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-20 18:33:38', '2022-05-20 18:33:38'),
(287, 0, '', '169.159.210.147', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-20 18:36:31', '2022-05-20 18:36:31'),
(289, 0, '', '41.243.28.12', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.4 Mobile/15E148 Safari/604.1', '2022-05-20 18:40:25', '2022-05-20 18:40:25'),
(292, 0, '', '41.243.30.51', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.54 Safari/537.36', '2022-05-21 11:37:34', '2022-05-21 11:37:34'),
(319, 0, '', '169.159.210.248', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko/20100101 Firefox/100.0', '2022-05-22 03:08:05', '2022-05-22 03:08:05'),
(329, 0, '', '41.243.14.209', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.4 Mobile/15E148 Safari/604.1', '2022-05-22 06:29:00', '2022-05-22 06:29:00'),
(334, 0, '', '185.98.139.119', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/602.1 (KHTML, like Gecko) cutycapt Version/10.0 Safari/602.1', '2022-05-23 06:24:17', '2022-05-23 06:24:17'),
(335, 0, '', '41.243.11.152', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.4 Mobile/15E148 Safari/604.1', '2022-05-23 12:36:40', '2022-05-23 12:36:40'),
(337, 0, '', '207.46.13.196', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', '2022-05-23 16:58:42', '2022-05-23 16:58:42'),
(339, 0, '', '169.159.211.101', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-25 07:59:16', '2022-05-25 07:59:16'),
(340, 0, '', '169.159.210.101', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-25 08:00:56', '2022-05-25 08:00:56'),
(363, 0, '', '169.159.210.246', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-25 09:38:14', '2022-05-25 09:38:14'),
(364, 0, '', '35.205.159.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.54 Safari/537.36', '2022-05-25 10:04:47', '2022-05-25 10:04:47'),
(365, 0, '', '178.213.64.34', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.54 Safari/537.36', '2022-05-25 10:04:48', '2022-05-25 10:04:48'),
(367, 0, '', '169.159.211.103', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-25 14:14:42', '2022-05-25 14:14:42'),
(370, 0, '', '169.159.210.103', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-25 14:34:34', '2022-05-25 14:34:34'),
(374, 0, '', '205.169.39.32', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.71 Safari/537.36', '2022-05-26 13:25:37', '2022-05-26 13:25:37'),
(376, 0, '', '40.77.139.113', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/534+ (KHTML, like Gecko) BingPreview/1.0b', '2022-05-26 17:11:25', '2022-05-26 17:11:25'),
(377, 0, '', '40.77.190.204', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/534+ (KHTML, like Gecko) BingPreview/1.0b', '2022-05-26 22:11:54', '2022-05-26 22:11:54'),
(378, 0, '', '169.159.211.64', 'Mozilla/5.0 (Linux; Android 10; TECNO KC8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.61 Mobile Safari/537.36', '2022-05-27 05:50:24', '2022-05-27 05:50:24'),
(379, 0, '', '169.159.210.184', 'Mozilla/5.0 (Linux; Android 10; TECNO KC8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.61 Mobile Safari/537.36', '2022-05-27 05:51:29', '2022-05-27 05:51:29'),
(380, 0, '', '41.243.254.234', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', '2022-05-27 14:25:55', '2022-05-27 14:25:55'),
(392, 0, '', '154.73.23.44', 'Mozilla/5.0 (Linux; Android 5.0.2; SM-G360F Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', '2022-05-28 04:15:19', '2022-05-28 04:15:19'),
(393, 0, '', '66.249.66.5', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/101.0.4951.64 Safari/537.36', '2022-05-28 15:14:47', '2022-05-28 15:14:47');

-- --------------------------------------------------------

--
-- Table structure for table `towns`
--

CREATE TABLE `towns` (
  `id_town` bigint(20) UNSIGNED NOT NULL,
  `t_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `towns`
--

INSERT INTO `towns` (`id_town`, `t_name`, `created_at`, `updated_at`, `country_id`) VALUES
(1, 'Pretoria', NULL, NULL, 2),
(2, 'Alger', NULL, NULL, 3),
(3, 'Lubumbashi', NULL, NULL, 1),
(4, 'Kinshasa', NULL, NULL, 1),
(5, 'Lyon', NULL, NULL, 12),
(6, 'Paris', NULL, NULL, 12),
(7, 'Yaoundé', NULL, NULL, 7),
(8, 'Bruxelles', NULL, NULL, 6),
(9, 'Luanda', NULL, NULL, 5),
(10, 'Goma', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `formule` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duree` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domain` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `formule`, `duree`, `domain`, `branch`, `comment`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Presentiel', NULL, '2', 'itgen', 'Et c\'est pour quand cette formation ?', 1, '2022-06-15 23:58:18', '2022-06-15 23:58:18'),
(2, NULL, '3 mois', '3', 'ccna', 'Quels sont les modules ?', 1, '2022-06-16 00:48:58', '2022-06-16 00:48:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `town` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo_path` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `sexe`, `phone_number`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `town`, `fb_id`, `profile_photo_path`) VALUES
(1, 'Philippe Mbambi', NULL, '+243826686661', 'philippembambi413@gmail.com', NULL, '$2y$10$OOuVlPkkF7ycbxYN.//1FuBzolpP7Ws3FE2vC5iA0H07iG9Woo8Oy', 'K7NPp5uNAYMBYLPuBAtAHZO5lnbD8MOS0XoC3H8Q5pJI7MtxQ5eof1qJIowa', '2022-05-06 05:21:19', '2022-05-06 05:21:19', NULL, 'Kinshasa', NULL, NULL),
(2, 'emmanuel zwabudi', NULL, '+243822764142', 'z.dgemmanuelzwabudi@gmail.com', NULL, '$2y$10$2BcCoaH6xZPdUDIZWVpdO.0aGhXE8bILkrc6oxBsCmRKxZE4P4Vnq', '6BwYqACxQv06Wd7L5LIJpwMxRQMUbZBo1sU9Rdm29F2WBt6NdrjHscNbAjbK', '2022-05-11 15:47:11', '2022-05-11 15:47:11', NULL, 'Kinshasa', NULL, NULL),
(5, 'Mgr-Philippe Mbambi', NULL, '+243813456932', 'philippembambi413@gmail.com', NULL, '$2y$10$7NpQLY5quOzvvUhjj3dU2eviS1cLGFT07kHwGuIUAxIdEnpwxFYIm', NULL, '2022-05-11 16:53:05', '2022-05-11 16:53:05', NULL, NULL, '3084491898534935', NULL),
(10, 'Chadrack Bombusa', NULL, '+243813456932', NULL, NULL, '$2y$10$f/rgEBR//wQ0JkaYGXpLPePMSE7ULI3iVZAQjLFNZrZ14gJourkry', NULL, '2022-05-11 20:23:49', '2022-05-11 20:23:49', NULL, NULL, '3047944845459058', NULL),
(11, 'Emmanuel Zwäbüdï', NULL, '+243813456932', 'emmanuelzwabudi@yahoo.fr', NULL, '$2y$10$iEDEhr3pUokDIQBoEUCxg.vVrqXp4a2ThS9HM/QJYHdWqINXj8Hze', NULL, '2022-05-21 11:37:54', '2022-05-21 11:37:54', NULL, NULL, '5235741259825900', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baskets`
--
ALTER TABLE `baskets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `baskets_user_id_foreign` (`user_id`),
  ADD KEY `baskets_article_id_foreign` (`article_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feed_backs`
--
ALTER TABLE `feed_backs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcs_adresses`
--
ALTER TABLE `mcs_adresses`
  ADD PRIMARY KEY (`id_adr`);

--
-- Indexes for table `mcs_contact`
--
ALTER TABLE `mcs_contact`
  ADD PRIMARY KEY (`id_cont`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordinateur`
--
ALTER TABLE `ordinateur`
  ADD PRIMARY KEY (`id_ordi`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `poles`
--
ALTER TABLE `poles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `achat_article_constraint` (`article_id`),
  ADD KEY `achat_client_constraint` (`user_id`);

--
-- Indexes for table `software_requests`
--
ALTER TABLE `software_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terminals`
--
ALTER TABLE `terminals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ip_addres` (`ip_addres`);

--
-- Indexes for table `towns`
--
ALTER TABLE `towns`
  ADD PRIMARY KEY (`id_town`),
  ADD KEY `ville_pays_constraint` (`country_id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feed_backs`
--
ALTER TABLE `feed_backs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mcs_adresses`
--
ALTER TABLE `mcs_adresses`
  MODIFY `id_adr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `ordinateur`
--
ALTER TABLE `ordinateur`
  MODIFY `id_ordi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `software_requests`
--
ALTER TABLE `software_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
