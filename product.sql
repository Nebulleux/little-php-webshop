-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 08, 2021 at 04:23 PM
-- Server version: 10.3.27-MariaDB-0+deb10u1
-- PHP Version: 7.3.27-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jbropp_01`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `catégorie` text NOT NULL,
  `libellé` text NOT NULL,
  `description` text NOT NULL,
  `poids` text NOT NULL,
  `couleur` text NOT NULL,
  `dimensions` text NOT NULL,
  `diamètre_filament` text NOT NULL,
  `précision` text NOT NULL,
  `temperature_transi_vitreuse` text NOT NULL,
  `temperature_point_de_fusion` text NOT NULL,
  `prix_HT` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `catégorie`, `libellé`, `description`, `poids`, `couleur`, `dimensions`, `diamètre_filament`, `précision`, `temperature_transi_vitreuse`, `temperature_point_de_fusion`, `prix_HT`, `image`) VALUES
(1, 'bobine', 'PLA', 'Constituant une valeur sûre à prix serré, cette bobine de PLA rouge conviendra parfaitement pour les usages de prototypage rapide et pièces esthétiques. A la recherche dun PLA de bonne qualité, abordable et fabriqué en Europe ? Cette gamme est faite pour vous.', '1kg', 'rouge', '21x9x20', '1.75mm', '0.05mm', '55-60°C', '150-180°C', 15, 'https://www.filimprimante3d.fr/3886-thickbox_default/fil-dailyfil-pla-500g-175-mm-rouge.jpg'),
(2, 'bobine', 'ABS', 'Constituant une valeur sûre à prix serré, cette bobine d ABS verte conviendra parfaitement pour les usages de prototypage rapide et pièces esthétiques. A la recherche dun PLA de bonne qualité, abordable et fabriqué en Europe ? Cette gamme est faite pour vous.', '1kg', 'vert', '21x9x20', '2.85mm', '0.05mm', '55-60°C', '150-180°C', 16, 'https://www.filimprimante3d.fr/5153-thickbox_default/filament-50g-dailyfil-abs-285-mm-vert.jpg'),
(3, 'bobine', 'PETG', 'Constituant une valeur sûre à prix serré, cette bobine de PETG bleue conviendra parfaitement pour les usages de prototypage rapide et pièces esthétiques. A la recherche dun PLA de bonne qualité, abordable et fabriqué en Europe ? Cette gamme est faite pour vous.', '500g', 'bleu', '21x9x20', '1.75mm', '0.05mm', '55-60°C', '150-180°C', 17, 'https://www.filimprimante3d.fr/5612-thickbox_default/petg-bleu-175-mm-verbatim-1kg.jpg'),
(4, 'machine', 'imprimante 3D Ultimaker S5', 'L Ultimaker S5 est une imprimante de bureau performante présentant un grand volume d impression (330 x 240 x 300 mm), une fiabilité renforcée ainsi que de nouvelles fonctionnalités pour une expérience utilisateur intuitive.\r\nElle offre des possibilités d impressions dans de nombreux domaines d applications tels que l architecture avec des maquettes ou l industrie avec des gabarits.', '18kg', 'blanc', '33x24x30', '', '', '', '', 4900, 'https://www.erm-fabtest.com/180-large_default/ultimaker-s5.jpg'),
(12, 'template', 'template', 'template', 'template', 'template', 'template', 'template', 'template', 'template', 'template', 1200, 'template'),
(14, 'Machine', 'gf', 'gf', '5', 'vert', '7x45x4', 'fggg', 'fgjhyg', 'guyggk', 'gkgkkggk', 75, 'kggkukug');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
