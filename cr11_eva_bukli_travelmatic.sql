-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 07:23 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr11_eva_bukli_travelmatic`
--

-- --------------------------------------------------------

--
-- Table structure for table `concert`
--

CREATE TABLE `concert` (
  `concert_id` int(11) NOT NULL,
  `concert_name` varchar(155) COLLATE utf8_bin NOT NULL,
  `concert_date` date NOT NULL,
  `concert_time` time NOT NULL,
  `concert_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `concert_desc` varchar(1555) COLLATE utf8_bin NOT NULL,
  `concert_price` int(11) NOT NULL,
  `fk_location` int(11) NOT NULL,
  `concert_like` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `concert`
--

INSERT INTO `concert` (`concert_id`, `concert_name`, `concert_date`, `concert_time`, `concert_post`, `concert_desc`, `concert_price`, `fk_location`, `concert_like`) VALUES
(1, 'linkin park', '2018-11-23', '21:00:00', '2018-11-16 16:01:28', 'cool', 120, 1, 3),
(2, 'Britney Spears', '2001-02-20', '20:00:00', '2018-11-16 15:58:17', 'oops', 99, 14, 2);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `city` varchar(55) COLLATE utf8_bin NOT NULL,
  `ZIP` int(11) NOT NULL,
  `address` varchar(100) COLLATE utf8_bin NOT NULL,
  `web` varchar(100) COLLATE utf8_bin NOT NULL,
  `img` varchar(1555) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `city`, `ZIP`, `address`, `web`, `img`) VALUES
(1, 'miami', 324, 'dfs', 'chang.com', 'https://cdn.pixabay.com/photo/2018/10/01/20/38/meteora-3717220_960_720.jpg'),
(2, 'vienna', 1220, 'Apfel strasse 45', 'sdfsd.com', 'https://cdn.pixabay.com/photo/2012/03/01/00/21/bridge-19513_960_720.jpg'),
(3, 'new york', 3242, 'street 65', 'fdsfd.com', 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_960_720.jpg'),
(13, 'mexicocity', 3123, 'dsfdsf', 'dsfsdf', 'https://cdn.pixabay.com/photo/2014/12/04/14/46/magnolia-trees-556718_960_720.jpg'),
(14, 'Berlin', 32421, 'something street', 'dsad.com', 'https://cdn.pixabay.com/photo/2015/01/28/23/35/landscape-615429_960_720.jpg'),
(16, 'Mateszalka', 3431, 'Beke utca', 'dsfdsf.com', 'https://cdn.pixabay.com/photo/2012/08/27/14/19/evening-55067_960_720.png');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `restaurant_id` int(11) NOT NULL,
  `restaurant_name` varchar(55) COLLATE utf8_bin NOT NULL,
  `tel` int(11) NOT NULL,
  `restaurant_type` varchar(55) COLLATE utf8_bin NOT NULL,
  `restaurant_desc` varchar(1555) COLLATE utf8_bin NOT NULL,
  `fk_location` int(11) NOT NULL,
  `restaurant_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `restaurant_like` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restaurant_id`, `restaurant_name`, `tel`, `restaurant_type`, `restaurant_desc`, `fk_location`, `restaurant_post`, `restaurant_like`) VALUES
(1, 'chang', 13123, 'chinese', 'gut', 3, '2018-11-16 16:01:28', 3),
(3, 'taco', 41343, 'mexican', 'hot food', 13, '2018-11-16 16:38:09', 3);

-- --------------------------------------------------------

--
-- Table structure for table `things_to_do`
--

CREATE TABLE `things_to_do` (
  `things_id` int(11) NOT NULL,
  `things_name` varchar(155) COLLATE utf8_bin NOT NULL,
  `things_type` varchar(55) COLLATE utf8_bin NOT NULL,
  `things_desc` varchar(1555) COLLATE utf8_bin NOT NULL,
  `things_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fk_location` int(11) NOT NULL,
  `things_like` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `things_to_do`
--

INSERT INTO `things_to_do` (`things_id`, `things_name`, `things_type`, `things_desc`, `things_post`, `fk_location`, `things_like`) VALUES
(2, 'food fest', 'festival', 'delicious food', '2018-11-16 11:36:06', 2, 0),
(4, 'Palinkakostolas', 'ivas', 'wqewqe', '2018-11-16 15:50:19', 16, 23);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
(1, 'vicabukli', 'vica.bukli@gmail.com', 'def49a189fe23e6520cc3d5fe2c32de0afcd44cc3269161aea6000b332995140'),
(2, 'eva', 'eva@eva.hu', '4cc8f4d609b717356701c57a03e737e5ac8fe885da8c7163d3de47e01849c635');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `concert`
--
ALTER TABLE `concert`
  ADD PRIMARY KEY (`concert_id`),
  ADD KEY `fk_location` (`fk_location`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restaurant_id`),
  ADD KEY `fk_location` (`fk_location`);

--
-- Indexes for table `things_to_do`
--
ALTER TABLE `things_to_do`
  ADD PRIMARY KEY (`things_id`),
  ADD KEY `fk_location` (`fk_location`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `concert`
--
ALTER TABLE `concert`
  MODIFY `concert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `restaurant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `things_to_do`
--
ALTER TABLE `things_to_do`
  MODIFY `things_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `concert`
--
ALTER TABLE `concert`
  ADD CONSTRAINT `concert_ibfk_1` FOREIGN KEY (`fk_location`) REFERENCES `location` (`location_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD CONSTRAINT `restaurant_ibfk_1` FOREIGN KEY (`fk_location`) REFERENCES `location` (`location_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `things_to_do`
--
ALTER TABLE `things_to_do`
  ADD CONSTRAINT `things_to_do_ibfk_1` FOREIGN KEY (`fk_location`) REFERENCES `location` (`location_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
