-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 02:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `Id` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Thumbnail` varchar(50) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Id`, `Title`, `Thumbnail`, `Description`, `Date`) VALUES
(2, 'Извънземни кацнаха в сливен', '2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lacinia, ante vitae interdum dictum, massa lacus euismod est, non faucibus massa justo ac ligula. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cra', '2021-07-15'),
(3, 'Динко кацна в Ямбол', '3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lacinia, ante vitae interdum dictum, massa lacus euismod est, non faucibus massa justo ac ligula. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cra', '2021-07-07'),
(4, 'Риба се удави в аквариум', '4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lacinia, ante vitae interdum dictum, massa lacus euismod est, non faucibus massa justo ac ligula. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cra', '2021-07-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
