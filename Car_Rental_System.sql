-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 22, 2017 at 09:11 AM
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
  `engine_type` varchar(255) NOT NULL,
  `fuel` varchar(255) NOT NULL,
  `mileage` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `category_id`, `brand`, `model`, `production_year`, `engine`, `engine_type`, `fuel`, `mileage`, `color`, `pic`) VALUES
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
(56, 'ntp', 'bright', 'ntp', 'ntp@ku.th', '0000-00-00', 'chong', '1997-03-16', '232132543455');

-- --------------------------------------------------------

--
-- Table structure for table `drop_off_location`
--

CREATE TABLE `drop_off_location` (
  `id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drop_off_location`
--

INSERT INTO `drop_off_location` (`id`, `city_id`) VALUES
(34, 24),
(35, 24),
(36, 24),
(37, 24),
(38, 24),
(39, 24),
(40, 24),
(41, 24),
(42, 24),
(43, 24),
(44, 24),
(45, 24),
(46, 24),
(47, 24),
(48, 24),
(49, 24),
(50, 24),
(51, 24),
(52, 24),
(53, 24),
(54, 24),
(55, 24),
(56, 24),
(57, 24),
(58, 24),
(59, 24),
(60, 24),
(61, 24),
(62, 24),
(63, 24),
(64, 24),
(65, 24),
(66, 24),
(67, 24),
(68, 24),
(69, 24),
(70, 24),
(71, 24),
(72, 24),
(73, 24),
(74, 24),
(75, 24),
(76, 24),
(77, 24),
(78, 24),
(79, 24),
(80, 24),
(81, 24),
(82, 24),
(83, 24),
(84, 24),
(85, 24),
(86, 24),
(87, 24),
(88, 24),
(89, 24),
(90, 24),
(91, 24),
(92, 24),
(93, 24),
(94, 24),
(95, 24),
(96, 24),
(97, 24),
(98, 24),
(99, 24),
(100, 24),
(101, 24),
(102, 24),
(103, 24),
(109, 28),
(110, 28),
(111, 28),
(112, 28),
(113, 28),
(104, 31),
(105, 31),
(106, 31),
(107, 31),
(108, 31);

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
-- Table structure for table `pick_up_location`
--

CREATE TABLE `pick_up_location` (
  `id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pick_up_location`
--

INSERT INTO `pick_up_location` (`id`, `city_id`) VALUES
(76, 26),
(77, 26),
(78, 26),
(79, 26),
(80, 26),
(71, 33),
(72, 33),
(73, 33),
(74, 33),
(75, 33),
(1, 58),
(2, 58),
(3, 58),
(4, 58),
(5, 58),
(6, 58),
(7, 58),
(8, 58),
(9, 58),
(10, 58),
(11, 58),
(12, 58),
(13, 58),
(14, 58),
(15, 58),
(16, 58),
(17, 58),
(18, 58),
(19, 58),
(20, 58),
(21, 58),
(22, 58),
(23, 58),
(24, 58),
(25, 58),
(26, 58),
(27, 58),
(28, 58),
(29, 58),
(30, 58),
(31, 58),
(32, 58),
(33, 58),
(34, 58),
(35, 58),
(36, 58),
(37, 58),
(38, 58),
(39, 58),
(40, 58),
(41, 58),
(42, 58),
(43, 58),
(44, 58),
(45, 58),
(46, 58),
(47, 58),
(48, 58),
(49, 58),
(50, 58),
(51, 58),
(52, 58),
(53, 58),
(54, 58),
(55, 58),
(56, 58),
(57, 58),
(58, 58),
(59, 58),
(60, 58),
(61, 58),
(62, 58),
(63, 58),
(64, 58),
(65, 58),
(66, 58),
(67, 58),
(68, 58),
(69, 58),
(70, 58);

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
(120, 56, 12, 78, 111, '2017-05-22', '2017-05-27', ''),
(121, 56, 12, 79, 112, '2017-05-22', '2017-05-27', ''),
(122, 56, 12, 80, 113, '2017-05-22', '2017-05-27', '');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `rental_id` int(11) NOT NULL,
  `customer_id` int(11) UNSIGNED NOT NULL,
  `start_date` int(11) NOT NULL,
  `end_date` int(11) NOT NULL,
  `card_type` varchar(255) NOT NULL,
  `card_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `rental_id`, `customer_id`, `start_date`, `end_date`, `card_type`, `card_id`, `status`) VALUES
(79, 122, 56, 2017, 2017, 'visa', 2147483647, 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_equipment`
--

CREATE TABLE `reservation_equipment` (
  `reservation_id` int(11) NOT NULL,
  `equipment_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drop_off_location`
--
ALTER TABLE `drop_off_location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_id` (`city_id`);

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
-- Indexes for table `pick_up_location`
--
ALTER TABLE `pick_up_location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pick_up_location_id` (`pick_up_location_id`),
  ADD KEY `rental_ibfk_2` (`drop_off_location_id`),
  ADD KEY `start_date` (`start_date`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `rental_id` (`rental_id`);

--
-- Indexes for table `reservation_equipment`
--
ALTER TABLE `reservation_equipment`
  ADD PRIMARY KEY (`reservation_id`,`equipment_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
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
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `drop_off_location`
--
ALTER TABLE `drop_off_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
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
-- AUTO_INCREMENT for table `pick_up_location`
--
ALTER TABLE `pick_up_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `drop_off_location`
--
ALTER TABLE `drop_off_location`
  ADD CONSTRAINT `drop_off_location_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pick_up_location`
--
ALTER TABLE `pick_up_location`
  ADD CONSTRAINT `pick_up_location_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rental`
--
ALTER TABLE `rental`
  ADD CONSTRAINT `rental_ibfk_1` FOREIGN KEY (`pick_up_location_id`) REFERENCES `pick_up_location` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rental_ibfk_2` FOREIGN KEY (`drop_off_location_id`) REFERENCES `drop_off_location` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`rental_id`) REFERENCES `rental` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
