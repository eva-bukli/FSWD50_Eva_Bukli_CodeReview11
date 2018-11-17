-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2018 at 04:55 PM
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
(3, 'Rosetta', '2018-11-17', '20:00:00', '2018-11-17 14:55:58', 'metal ', 50, 18, 0),
(4, 'Slayer', '2018-11-23', '19:00:00', '2018-11-17 14:58:00', 'metal', 120, 19, 0),
(5, 'Vini Vici', '2018-12-01', '20:00:00', '2018-11-17 14:59:57', 'electronic', 70, 20, 0),
(6, 'Myrkur', '2012-12-13', '19:00:00', '2018-11-17 15:01:40', 'skandinavian ambient', 49, 21, 0),
(7, 'In Flames', '2019-06-14', '20:00:00', '2018-11-17 15:25:19', 'metal', 90, 33, 0);

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
  `img` varchar(1555) COLLATE utf8_bin NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `city`, `ZIP`, `address`, `web`, `img`, `lat`, `lng`) VALUES
(18, 'Budapest', 1116, 'Kondorfa utca 18', 'rosetta.com', 'http://www.brooklynvegan.com/files/2018/02/rosetta.jpg', 47.4526, 19.0426),
(19, 'Vienna', 1150, 'Roland-Rainer-Platz 1', 'slayer.com', 'https://www.overdrive.ie/wp-content/uploads/2016/02/SLAYER-ANTHRAX-OVERDRIVE-BANNER.jpg', 48.202, 16.334),
(20, 'Vienna', 1020, 'Rieselrad Platz 7', 'vinivici.com', 'https://d31fr2pwly4c4s.cloudfront.net/9/1/0/1099744_1_lock-out-present-vini-vici_400.jpg', 48.2159, 16.3998),
(21, 'Budapest', 1146, 'Ajtosi Durer sor 19', 'miyrkur.sw', 'https://i1.wp.com/www.metalinjection.net/wp-content/uploads/2017/09/a2836519406_10.jpg?fit=700%2C700', 47.5098, 19.0899),
(22, 'Vienna', 1020, 'Innstrasse 16', 'vintagekilosale.at', 'https://cdn.pixabay.com/photo/2016/03/16/23/55/flea-market-1262036_960_720.jpg', 48.2318, 16.3893),
(23, 'Vienna', 1010, 'Am Hof 1', 'christmas.com', 'https://cdn.pixabay.com/photo/2017/11/23/03/17/christmas-2971961_960_720.jpg', 48.211, 16.3683),
(24, 'Vienna', 1070, 'Museumsquartier 1', 'eikon.com', 'https://cdn.pixabay.com/photo/2015/07/15/11/53/woodtype-846089_960_720.jpg', 48.211, 16.3586),
(25, 'Vienna', 1020, 'Messe Platz 1', 'viecc.com', 'https://cdn.pixabay.com/photo/2017/04/02/18/49/manga-2196570_960_720.jpg', 48.2178, 16.4039),
(26, 'Manchester', 3456, 'Victoria Station, Hunts Bank, Manchester M3', 'fantasticalchoco.com', 'https://cdn.pixabay.com/photo/2013/09/18/18/24/chocolate-183543_960_720.jpg', 53.4876, -2.24151),
(27, 'Vienna', 1010, 'Praterstrasse 15', 'mochi.at', 'https://fcc.at/tvr/2012/06/VR_12_6_p27_mochi_pano1b-Kopieweb.jpg', 48.2135, 16.3817),
(28, 'Budapest', 1075, 'Kazinczy utca 10', 'bors.hu', 'https://cdn.pixabay.com/photo/2015/09/15/16/16/appetizer-plate-941284_960_720.jpg', 47.4967, 19.0635),
(29, 'Budapest', 1051, 'Szechenyi Istvan ter', 'eattoeat.hu', 'https://m.blog.hu/va/varosban/image/dsc04111_1280.jpg', 47.4996, 19.0477),
(30, 'Vienna', 1010, 'Kartnerstrasse 19', 'bookattable.at', 'https://media-cdn.tripadvisor.com/media/photo-s/0d/61/b7/ef/sky-bar-on-level-18.jpg', 48.2064, 16.3721),
(31, 'Balatonszemes', 8636, 'Bajcsyzsilinszky ut 25', 'kistucsok.hu', 'https://m.blog.hu/av/avasarlo/image/kistucsok3.jpg', 46.8081, 17.7809),
(32, 'Encs', 3860, 'Petofi Sandor utca 57', 'anyukammondta.hu', 'http://www.diningcity.hu/media/restaurantwidepictures/31575_anyukam_mondta_etterem_encs.jpg', 48.3179, 21.1626),
(33, 'Kleylehof', 2425, 'Stadion', 'inflames.com', 'https://m.media-amazon.com/images/M/MV5BYzJlOWYxMDgtNzU5Zi00YTk0LTk5ZGMtZDVlYTk4YWM2ZDM4XkEyXkFqcGdeQXVyMjUyNDk2ODc@._V1_SX1777_CR0,0,1777,999_AL_.jpg', 47.8949, 17.0693),
(34, 'Kleylehof', 2425, 'Arena', 'novarock.com', 'http://service.oeticket.com/wp-content/uploads/2018/06/nr-19-arzte-blog-big.jpg', 47.8949, 17.0693);

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
(4, 'Mochi', 12345, 'japanese', 'delicious food', 27, '2018-11-17 15:15:51', 0),
(5, 'Bors Gastro Bar', 1234567, 'fine dining', 'top', 28, '2018-11-17 15:17:21', 0),
(6, 'KollÃ¡zs', 12345678, 'normal', 'good place', 29, '2018-11-17 15:19:22', 0),
(7, 'Skybar', 1234567, 'cafe and food', 'very high', 30, '2018-11-17 15:20:49', 0),
(8, 'Kistucsok', 12345678, 'hungarian', 'traditional hunagrian restaurant', 31, '2018-11-17 15:22:15', 0),
(9, 'My Mother Said', 1234567, 'traditional', 'cosy', 32, '2018-11-17 15:23:38', 0);

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
(5, 'Vintage Kilo Sale', 'market', 'second hand ', '2018-11-17 15:04:31', 22, 0),
(6, 'Weinachtsmarkt', 'market', '19.11.2018. christmas market', '2018-11-17 15:07:09', 23, 0),
(7, 'Eikon', 'exhibition', 'selected printed matters', '2018-11-17 15:09:38', 24, 0),
(8, 'Comic Con', 'festival', 'comic, anime, manga', '2018-11-17 15:11:25', 25, 0),
(9, 'Chocolate Festival', 'festival', 'try all chocolates free to taste', '2018-11-17 15:14:17', 26, 0),
(10, 'Novarock', 'festival', 'rock and metal festival', '2018-11-17 15:26:21', 34, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `userRole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`, `userRole`) VALUES
(1, 'vicabukli', 'vica.bukli@gmail.com', 'def49a189fe23e6520cc3d5fe2c32de0afcd44cc3269161aea6000b332995140', 1),
(3, 'eva', 'eva@eva.hu', '4cc8f4d609b717356701c57a03e737e5ac8fe885da8c7163d3de47e01849c635', 0),
(5, 'teacher', 'teacher@teacher.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 1);

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
  MODIFY `concert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `restaurant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `things_to_do`
--
ALTER TABLE `things_to_do`
  MODIFY `things_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
