-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 10, 2017 at 01:59 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Car_Rental_System`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `production_year` int(11) NOT NULL,
  `engine` varchar(255) NOT NULL,
  `engine type` varchar(255) NOT NULL,
  `fuel` varchar(255) NOT NULL,
  `mileage` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `category_id`, `brand`, `model`, `production_year`, `engine`, `engine type`, `fuel`, `mileage`, `color`, `pic`) VALUES
(4, 1, 'Honda', 'Accoard', 2016, '2.0', 'Hybrid', 'Petrol', 0, 'Black', 'Accoard_01-Accoard_02-Accoard_03'),
(5, 1, 'Honda', 'Accoard', 2016, '2.0', 'n/a', 'Petrol', 0, 'Black', 'Accoard_01-Accoard_02-Accoard_03'),
(6, 1, 'Honda', 'Accoard', 2016, '2.4', 'n/a', 'Petrol', 0, 'Black', 'Accoard_01-Accoard_02-Accoard_03'),
(7, 1, 'Honda', 'City', 2017, '1.5', 'n/a', 'Petrol', 0, 'Blue', 'city_01-city_02-city_03'),
(8, 1, 'Honda', 'Civic', 2017, '1.8', 'n/a', 'Petrol', 0, 'Blue', 'civic_sedan_01-civic_sedan_02-civic_sedan_03'),
(9, 1, 'Honda', 'Civic', 2017, '1.5', 'Turbo', 'Petrol', 0, 'Blue', 'civic_sedan_01-civic_sedan_02-civic_sedan_03'),
(10, 2, 'Honda', 'Civic', 2017, '1.5', 'Turbo', 'Petrol', 0, 'Brown', 'civic_Hatchback_01-civic_Hatchback_02-civic_Hatchback_03'),
(11, 3, 'Honda', 'C-RV', 2017, '1.6', 'Turbo', 'Diesel', 0, 'White', 'crv_01-crv_02-crv_03'),
(12, 3, 'Honda', 'C-RV', 2017, '2.4', 'n/a', 'Petrol', 0, 'White', 'crv_01-crv_02-crv_03'),
(13, 4, 'Honda', 'H-RV', 2016, '1.8', 'n/a', 'Petrol', 0, 'Black', 'hrv_01-hrv_02-hrv_03'),
(14, 2, 'Honda', 'Jazz', 2016, '1.5', 'n/a', 'Petrol', 0, 'Yello', 'jazz_01-jazz_02-jazz_03');

-- --------------------------------------------------------

--
-- Table structure for table `car_equipment`
--

CREATE TABLE `car_equipment` (
  `id` int(11) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Sedan'),
(2, 'Hatchback'),
(3, 'SUV'),
(4, 'Crossover');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`) VALUES
(10, 'Mae Hong Son'),
(11, 'Chiang Mai'),
(12, 'Chiang Rai'),
(13, 'Phayao'),
(14, 'Nan'),
(15, 'Lamphun'),
(16, 'Lampang'),
(17, 'Phrae'),
(18, 'Uttaradit'),
(19, 'Tak'),
(20, 'Sukhothai'),
(21, 'Phitsanulok'),
(22, 'Kamphaeng Phet'),
(23, 'Phichit'),
(24, 'Uthai Thani'),
(25, 'Nakhon Sawan'),
(26, 'Phetchabun'),
(27, 'Loei'),
(28, 'Udon Thani'),
(29, 'Nongbua Lumphoo'),
(30, 'Nong Khai'),
(31, 'Sakon Nakhon'),
(32, 'Nakhon Phanom'),
(33, 'Mukdahan'),
(34, 'Kalasin'),
(35, 'Maha Sarakham'),
(36, 'Khon Kaen'),
(37, 'Chaiyaphum'),
(38, 'Roi Et'),
(39, 'Nakhon Ratchasima'),
(40, 'Buri Ram'),
(41, 'Surin'),
(42, 'Si Sa Ket'),
(43, 'Ubon Ratchathani'),
(44, 'Umnad Chareun'),
(45, 'Yasothon'),
(46, 'Ratchaburi'),
(47, 'Phetchaburi'),
(48, 'Prachuap Khiri Khan'),
(49, 'Chai Nat'),
(50, 'Sing Buri'),
(51, 'Lop Buri'),
(52, 'Ang Thong'),
(53, 'Phra'),
(54, 'Nakhon Si Ayuttaya'),
(55, 'Saraburi'),
(56, 'Pathum Thani'),
(57, 'Nonthaburi'),
(58, 'Bangkok'),
(59, 'Samut Prakan'),
(60, 'Samut Songkhram'),
(61, 'Samut Sakhon'),
(62, 'Nakhon Pathom'),
(63, 'Nakhon Nayok'),
(64, 'Prachin Buri'),
(65, 'Sa Kaew'),
(66, 'Cha Choeng Sao'),
(67, 'Chon Buri'),
(68, 'Rayong'),
(69, 'Chanthaburi'),
(70, 'Trat'),
(71, 'Chumphon'),
(72, 'Ranong'),
(73, 'Surat Thani'),
(74, 'Phang Nga'),
(75, 'Phuket'),
(76, 'Krabi'),
(77, 'Nakhon Si Thammarat'),
(78, 'Phatthalung'),
(79, 'Trang'),
(80, 'Satun'),
(81, 'Song Khla'),
(82, 'Pattani'),
(83, 'Yala'),
(84, 'Narathiwat'),
(85, 'Kanchanaburi'),
(86, 'Suphan Buri');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `gid` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `message` text,
  `msg_type` varchar(1) DEFAULT NULL,
  `date_posted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`gid`, `name`, `email`, `message`, `msg_type`, `date_posted`) VALUES
(100, 'sdsdss', 'rakkan.j@hotmail.com', 'dkgldngklfd', '', '2017-04-25 11:30:22'),
(102, 'rakkan', 'ntp@gmail.com', 'kod kak a', '', '2017-04-25 11:33:14'),
(103, 'ntp', 'maxmax@kahoot.com', '9999999999999999', '', '2017-04-25 11:34:05'),
(104, 'rrrr', 'assda@gmail.com', 'à¸”à¸”à¸”à¸”à¸”à¸”à¸”', '', '2017-04-25 11:38:26'),
(105, 'rakkan jintasatien', 'fipflopok@hotmail.com', 'khdjkhfdsf', '', '2017-04-27 21:10:27'),
(106, 'jhjhjh', NULL, NULL, NULL, NULL),
(107, '9999', NULL, NULL, NULL, NULL),
(108, '101010101111111', NULL, NULL, NULL, NULL),
(109, 'kk', NULL, NULL, NULL, NULL),
(110, 'kk', NULL, NULL, NULL, NULL),
(111, 'hhhh', NULL, NULL, NULL, NULL),
(112, 'hhhh', NULL, NULL, NULL, NULL),
(113, 'lnw', NULL, NULL, NULL, NULL),
(114, 'raknajaa', NULL, NULL, NULL, NULL),
(115, 'raknajaa', NULL, NULL, NULL, NULL),
(116, 'lnw', NULL, NULL, NULL, NULL),
(117, 'name\r\n', NULL, NULL, NULL, NULL),
(118, 'name', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dln` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `name`, `lastname`, `birthday`, `email`, `phone`, `dln`) VALUES
(50, 'ntp', 'bright', 'Bright', 'Chong', '2017-05-03', 'ntp@ku.th', '0838152541', '1234 5678 9000'),
(51, '', '', 'Rakkan', 'Jintasatien', '1997-03-16', 'rakkan@gmail.com', '0812321321', '21321 32 43 5 46 54 '),
(55, '', '', 'job', 'job', '2017-05-01', 'asdsa', 'dfsfds', 'asdsad');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `equipment_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `equipment_category`
--

CREATE TABLE `equipment_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `city_id`) VALUES
(1, 10),
(12, 10),
(14, 10),
(16, 10),
(18, 10),
(20, 10),
(22, 10),
(24, 10),
(5, 11),
(3, 14),
(6, 20),
(9, 28),
(11, 28),
(8, 31),
(10, 31),
(7, 33),
(4, 38),
(13, 41),
(15, 41),
(17, 41),
(19, 41),
(21, 41),
(23, 41),
(25, 41),
(2, 58);

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `pick_up_location_id` int(11) NOT NULL,
  `drop_off_location_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`id`, `customer_id`, `car_id`, `pick_up_location_id`, `drop_off_location_id`, `start_date`, `end_date`, `remarks`) VALUES
(1, 50, 24325425, 12, 13, '0000-00-00', '0000-00-00', ''),
(2, 50, 14, 14, 15, '0000-00-00', '0000-00-00', ''),
(3, 50, 14, 16, 17, '0000-00-00', '0000-00-00', ''),
(4, 50, 14, 18, 19, '0000-00-00', '0000-00-00', ''),
(5, 50, 14, 20, 21, '0000-00-00', '0000-00-00', ''),
(6, 50, 14, 22, 23, '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `pick_up_location_id` int(11) NOT NULL,
  `drop_off_location_id` int(11) NOT NULL,
  `customer_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `pick_up_location_id`, `drop_off_location_id`, `customer_id`) VALUES
(1, 10, 11, 50),
(3, 24, 25, 50);

-- --------------------------------------------------------

--
-- Table structure for table `reservation_equipment`
--

CREATE TABLE `reservation_equipment` (
  `reservation_id` int(11) NOT NULL,
  `equipment_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sitesearch`
--

CREATE TABLE `sitesearch` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sitesearch`
--

INSERT INTO `sitesearch` (`id`, `title`, `url`, `content`) VALUES
(1, 'chaptone', 'www.betagro.com/', 'betagro. EN | TH. PET. As a family member, your pet ... COMPANY. At Betagro Group, quality is first priority. VISIT SITE. FOOD. We create food with passion for '),
(2, 'ntp', 'dfjkansdlkd', 'fdgjsnfjlgnflkdgnslkf'),
(4, 'ntp', 'asdl;sa;dl,sf', 'fdglam;lfdgm;lfda'),
(5, 'ntp', 'dsfknds;gmd;slg', 'ddl;agm;lsdmgal'),
(15, 'ntp', 'dsl;gkd;flag', 'dFI;HDSfjklnd'),
(16, 'ntp', 'dsmfbnadkljgnadf', 'sdg.ajb;adnsfajklfnal'),
(19, 'ntp', ';\'desk;ldsmg;lfmg', 'afgmfd;akgmfda;klgmfd'),
(20, 'ntp', 'fkdang.jkfnalgk', 'fading.nmfda,gm;lafdg'),
(23, 'ntp', 'l;sja;dskahgo;idasfghflda', 'djkfnakjdsnfja;'),
(24, 'ntp', 'fgh;adjopd\'sjkfOA', 'FKGAJDFKL;AGHJLKF;SAJGLK;DS'),
(25, 'ntp', 'ksnfg;akf;langkldsn', 'jksdbngkjanglk;dsnl;k'),
(26, 'ntp', 'ksdjngajkfnldk', 'dsjgabnkjgnlfak'),
(27, 'ntp', 'dkfslajkl;dfjlak;', 'sdlkgnfda;knfdlak;gna'),
(28, 'ntp', 'dsangaskld;gnlka', 'sdklgjhaslkgj'),
(29, 'kldsjfkld', 'LKDFNDSLF.com', 'dsk;fN;DLSNFLDSAK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`),
  ADD KEY `belongs to` (`category_id`);

--
-- Indexes for table `car_equipment`
--
ALTER TABLE `car_equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`gid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment_category`
--
ALTER TABLE `equipment_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `pick_up_at` (`pick_up_location_id`),
  ADD KEY `drop_off_at` (`drop_off_location_id`);

--
-- Indexes for table `reservation_equipment`
--
ALTER TABLE `reservation_equipment`
  ADD PRIMARY KEY (`reservation_id`,`equipment_category_id`);

--
-- Indexes for table `sitesearch`
--
ALTER TABLE `sitesearch`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `car_equipment`
--
ALTER TABLE `car_equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `gid` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `equipment_category`
--
ALTER TABLE `equipment_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sitesearch`
--
ALTER TABLE `sitesearch`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `drop_off_at` FOREIGN KEY (`drop_off_location_id`) REFERENCES `location` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pick_up_at` FOREIGN KEY (`pick_up_location_id`) REFERENCES `location` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
