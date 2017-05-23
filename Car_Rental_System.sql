-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 23, 2017 at 07:30 PM
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
  `price` int(11) NOT NULL,
  `pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `category_id`, `brand`, `model`, `production_year`, `engine`, `engine_type`, `fuel`, `mileage`, `color`, `price`, `pic`) VALUES
(10, 9, '2014', 'Koenigsegg', 0, ' 5.0', 'Turbo', 'Petrol', 0, 'White', 0, 'agera_r_01'),
(11, 9, 'Lamborghini', 'Huracan', 2014, ' 5.0', 'Turbo', 'Petrol', 0, 'White', 50, 'huracan_01'),
(12, 9, 'Lamborghini', 'Aventador', 2014, ' 6.5', 'Turbo', 'Petrol', 0, 'White', 50, 'aventador_01'),
(13, 7, 'Nissan', 'GTR R35', 2017, ' 3.8', 'Turbo', 'Petrol', 0, 'Orange', 40, 'gtr_r35_01'),
(14, 7, 'Nissan', '370z', 2015, ' 3.7', 'n/a', 'Petrol', 0, 'White', 30, '370z_01'),
(15, 7, 'Honda', 'NSX', 2016, ' 3.5', 'Turbo', 'Petrol', 0, 'Red', 40, 'nsx_01'),
(16, 2, 'Honda', 'Civic Type R', 2015, ' 2.0', 'Turbo', 'Petrol', 0, 'Orange', 30, 'civic_typer_01'),
(17, 1, 'Honda', 'Civic RS', 2017, ' 1.5', 'Turbo', 'Petrol', 0, 'White', 5, 'civic_turbo_01'),
(18, 2, 'Nissan', 'Pulsar', 2015, ' 1.6', 'Turbo', 'Petrol', 0, 'Red', 5, 'pulsar_turbo_01'),
(19, 7, 'Toyota', 'GT86', 2015, ' 2.0', 'n/a', 'Petrol', 0, 'Orange', 30, 'gt86_01'),
(20, 7, 'BMW', 'M4', 2017, ' 3.0', 'Turbo', 'Petrol', 0, 'White', 30, 'series4_01'),
(21, 9, 'BMW', 'i8', 2016, ' 1.5', 'Hybrid', 'Petrol', 0, 'Red', 40, 'i8_01'),
(22, 1, 'BMW', 'Series 5', 2017, ' 2.0', 'Turbo', 'Petrol', 0, 'Blue', 10, 'series5_01'),
(23, 1, 'BMW', 'Series 3', 2016, ' 2.0', 'Turbo', 'Petrol', 0, 'Blue', 10, 'series3_01'),
(24, 1, 'Benz', 'E350e', 2017, ' 2.0', 'Hybrid', 'Petrol', 0, 'Gray', 10, 'E350e_01'),
(25, 1, 'Benz', 'C200', 2017, ' 2.0', 'Turbo', 'Petrol', 0, 'Black', 10, 'c200_01'),
(26, 1, 'Benz', 'CLA45', 2017, ' 2.0', 'Turbo', 'Petrol', 0, 'White', 30, 'cla45_01'),
(27, 2, 'Benz', 'A45', 2017, ' 2.0', 'Turbo', 'Petrol', 0, 'White', 30, 'a45_01'),
(28, 2, 'Ford', 'Focus RS', 2016, ' 2.0', 'Turbo', 'Petrol', 0, 'Blue', 30, 'focus_rs_01'),
(29, 7, 'Ford', 'Mustang Shelby ', 2017, ' 5.2', 'Turbo', 'Petrol', 0, 'Blue', 40, 'mustang_01'),
(30, 1, 'Honda', 'Accoard', 2016, ' 2.0', 'Hybrid', 'Petrol', 0, 'Black', 5, 'accoard_hybrid_01'),
(31, 1, 'Honda', 'Accoard', 2016, ' 2.0', 'n/a', 'Petrol', 0, 'Black', 5, 'accoard_01'),
(32, 1, 'Honda', 'Accoard', 2016, ' 2.4', 'n/a', 'Petrol', 0, 'Black', 5, 'accoard_01'),
(33, 1, 'Honda', 'City', 2017, ' 1.5', 'n/a', 'Petrol', 0, 'Blue', 2, 'city_01'),
(34, 1, 'Honda', 'Civic', 2017, ' 1.8', 'n/a', 'Petrol', 0, 'Blue', 2, 'civic_sedan_01'),
(35, 2, 'Honda', 'Civic', 2017, ' 1.5', 'Turbo', 'Petrol', 0, 'Brown', 2, 'civic_hatchback_01'),
(36, 3, 'Honda', 'C-RV', 2017, ' 1.6', 'Turbo', 'Diesel', 0, 'White', 2, 'crv_01'),
(37, 3, 'Honda', 'C-RV', 2017, ' 2.4', 'n/a', 'Petrol', 0, 'White', 2, 'crv_01'),
(38, 4, 'Honda', 'H-RV', 2016, ' 1.8', 'n/a', 'Petrol', 0, 'Black', 2, 'hrv_01'),
(39, 2, 'Honda', 'Jazz', 2016, ' 1.5', 'n/a', 'Petrol', 0, 'Yello', 2, 'jazz_01'),
(40, 3, 'Mazda', 'CX5', 2016, ' 2.5', 'n/a', 'Petrol', 0, 'Red', 2, 'cx5_01'),
(41, 3, 'Mazda', 'CX3', 2016, ' 1.5', 'n/a', 'Petrol', 0, 'Black', 2, 'cx3_01'),
(42, 2, 'Mazda', '3', 2016, ' 2.0', 'n/a', 'Petrol', 0, 'Blue', 2, 'mazda3_hatchback_01'),
(43, 2, 'Mazda', '2', 2016, ' 1.5', 'n/a', 'Diesel', 0, 'Blue', 2, 'mazda2_hatchback_01'),
(44, 1, 'Mazda', '3', 2016, ' 2.0', 'n/a', 'Petrol', 0, 'Red', 2, 'mazda3_sedan_01'),
(45, 1, 'Mazda', '2', 2016, ' 1.5', 'n/a', 'Diesel', 0, 'Red', 2, 'mazda2_sedan_01'),
(46, 1, 'Toyota', 'Altis Esport', 2017, ' 1.8', 'n/a', 'Petrol', 0, 'Black', 2, 'altis_esport_01'),
(47, 1, 'Toyota', 'Altis', 2017, ' 1.6', 'n/a', 'Petrol', 0, 'Silver', 2, 'altis_01'),
(48, 1, 'Toyota', 'Camry Esport', 2017, ' 2.5', 'n/a', 'Petrol', 0, 'Blue', 5, 'camry_esport_01'),
(49, 1, 'Toyota', 'Camry', 2017, ' 2.5', 'n/a', 'Petrol', 0, 'Black', 5, 'camry_01'),
(50, 5, 'Toyota', 'Commuter', 2015, ' 3.0', 'n/a', 'Diesel', 0, 'Silver', 2, 'commuter_01'),
(51, 5, 'Toyota', 'Alphard', 2016, ' 3.5', 'n/a', 'Petrol', 0, 'White', 5, 'alphard_01'),
(52, 5, 'Toyota', 'Alphard', 2016, ' 2.5', 'hybrid', 'Petrol', 0, 'White', 5, 'alphard_hybrid_01'),
(53, 5, 'Toyota', 'Vellfire', 2016, ' 2.5', 'n/a', 'Petrol', 0, 'White', 5, 'vellfire_01'),
(54, 6, 'Toyota', 'Fortuner', 2016, ' 2.8', 'n/a', 'Diesel', 0, 'Brown', 2, 'fortuner_01'),
(55, 6, 'Toyota', 'Fortuner TRD', 2016, ' 2.8', 'n/a', 'Diesel', 0, 'White', 2, 'fortuner_trd_01'),
(56, 8, 'Toyota', 'Revo', 2016, ' 2.7', 'n/a', 'Diesel', 0, 'Blue', 2, 'revo_01'),
(57, 1, 'Toyota', 'Vios', 2017, ' 1.5', 'n/a', 'Petrol', 0, 'Red', 2, 'vios_01'),
(58, 2, 'Toyota', 'Yaris', 2016, ' 1.2', 'n/a', 'Petrol', 0, 'Red', 1, 'yaris_01'),
(59, 1, 'Nissan', 'Almera', 2015, ' 1.2', 'n/a', 'Petrol', 0, 'Silver', 1, 'almera_01'),
(60, 2, 'Nissan', 'Juke', 2016, ' 1.5', 'n/a', 'Petrol', 0, 'White', 2, 'juke_01'),
(61, 3, 'Nissan', 'Livina', 2015, ' 1.6', 'n/a', 'Petrol', 0, 'White', 2, 'livina_01'),
(62, 2, 'Nissan', 'March', 2015, ' 1.2', 'n/a', 'Petrol', 0, 'Red', 1, 'march_01'),
(63, 8, 'Nissan', 'Navara', 2016, ' 2.5', 'n/a', 'Petrol', 0, 'Black', 2, 'navara_01'),
(64, 2, 'Nissan', 'Note', 2017, ' 1.2', 'n/a', 'Petrol', 0, 'Red', 2, 'note_01'),
(65, 2, 'Nissan', 'Pulsar', 2015, ' 1.8', 'n/a', 'Petrol', 0, 'Red', 2, 'pulsar_01'),
(66, 1, 'Nissan', 'Sylphy', 2015, ' 1.8', 'n/a', 'Petrol', 0, 'Black', 2, 'sylphy_01'),
(67, 1, 'Nissan', 'Sylphy', 2015, ' 1.6', 'Turbo', 'Petrol', 0, 'Red', 5, 'sylphy_turbo_01'),
(68, 1, 'Nissan', 'Teana', 2016, ' 2.5', 'n/a', 'Petrol', 0, 'Black', 5, 'teana_01'),
(69, 5, 'Nissan', 'Urvan', 2016, ' 2.5', 'n/a', 'Diesel', 0, 'Brown', 2, 'urvan_01'),
(70, 3, 'Nissan', 'X-Trail', 2016, ' 2.0', 'hybrid', 'Petrol', 0, 'White', 5, 'xtrail_hybrid_01'),
(71, 3, 'Nissan', 'X-Trail', 2016, ' 2.5', 'n/a', 'Petrol', 0, 'Red', 5, 'xtrail_01');

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
(4, 'Crossover'),
(5, 'Van'),
(6, 'PPV'),
(7, 'Sport'),
(8, 'Pick-up'),
(9, 'Supercar');

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
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dln` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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
(118, 11),
(119, 11),
(132, 20),
(133, 20),
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
(108, 31),
(120, 38),
(121, 38),
(122, 38),
(123, 38),
(124, 38),
(125, 38),
(126, 38),
(127, 38),
(128, 38),
(129, 38),
(130, 38),
(114, 52),
(115, 52),
(116, 52),
(117, 52),
(131, 58);

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
(81, 10),
(82, 10),
(83, 13),
(84, 13),
(85, 22),
(86, 22),
(76, 26),
(77, 26),
(78, 26),
(79, 26),
(80, 26),
(99, 28),
(100, 28),
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
(70, 58),
(87, 58),
(88, 58),
(89, 58),
(90, 58),
(91, 58),
(92, 58),
(93, 58),
(94, 58),
(95, 58),
(96, 58),
(97, 58),
(98, 58);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipment_id` (`equipment_id`),
  ADD KEY `car_id` (`car_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipment_category_id` (`equipment_category_id`);

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
  ADD KEY `start_date` (`start_date`),
  ADD KEY `car_id` (`car_id`),
  ADD KEY `customer_id` (`customer_id`);

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
  ADD PRIMARY KEY (`reservation_id`,`equipment_category_id`),
  ADD KEY `equipment_category_id` (`equipment_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `car_equipment`
--
ALTER TABLE `car_equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `drop_off_location`
--
ALTER TABLE `drop_off_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `equipment_category`
--
ALTER TABLE `equipment_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pick_up_location`
--
ALTER TABLE `pick_up_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `car_equipment`
--
ALTER TABLE `car_equipment`
  ADD CONSTRAINT `car_equipment_ibfk_1` FOREIGN KEY (`equipment_id`) REFERENCES `equipment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `car_equipment_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `car` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `drop_off_location`
--
ALTER TABLE `drop_off_location`
  ADD CONSTRAINT `drop_off_location_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `equipment`
--
ALTER TABLE `equipment`
  ADD CONSTRAINT `equipment_ibfk_1` FOREIGN KEY (`equipment_category_id`) REFERENCES `equipment_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `rental_ibfk_2` FOREIGN KEY (`drop_off_location_id`) REFERENCES `drop_off_location` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rental_ibfk_3` FOREIGN KEY (`car_id`) REFERENCES `car` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rental_ibfk_4` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`rental_id`) REFERENCES `rental` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation_equipment`
--
ALTER TABLE `reservation_equipment`
  ADD CONSTRAINT `reservation_equipment_ibfk_1` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`),
  ADD CONSTRAINT `reservation_equipment_ibfk_2` FOREIGN KEY (`equipment_category_id`) REFERENCES `equipment_category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
