-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 24, 2017 at 06:01 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental_system`
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
(73, 9, 'Koenigsegg', 'Agera R', 2014, ' 5.0', 'Turbo', 'Petrol', 10000, 'White', 50000, 'agera_r_01'),
(74, 9, 'Lamborghini', 'Huracan', 2014, ' 5.0', 'Turbo', 'Petrol', 0, 'White', 50000, 'huracan_01'),
(75, 9, 'Lamborghini', 'Aventador', 2014, ' 6.5', 'Turbo', 'Petrol', 0, 'White', 50000, 'aventador_01'),
(76, 7, 'Nissan', 'GTR R35', 2017, ' 3.8', 'Turbo', 'Petrol', 0, 'Orange', 40000, 'gtr_r35_01'),
(77, 7, 'Nissan', '370z', 2015, ' 3.7', 'n/a', 'Petrol', 0, 'White', 30000, '370z_01'),
(78, 7, 'Honda', 'NSX', 2016, ' 3.5', 'Turbo', 'Petrol', 0, 'Red', 40000, 'nsx_01'),
(79, 2, 'Honda', 'Civic Type R', 2015, ' 2.0', 'Turbo', 'Petrol', 0, 'Orange', 30000, 'civic_typer_01'),
(80, 1, 'Honda', 'Civic RS', 2017, ' 1.5', 'Turbo', 'Petrol', 0, 'White', 5000, 'civic_turbo_01'),
(81, 2, 'Nissan', 'Pulsar', 2015, ' 1.6', 'Turbo', 'Petrol', 0, 'Red', 5, 'pulsar_turbo_01'),
(82, 7, 'Toyota', 'GT86', 2015, ' 2.0', 'n/a', 'Petrol', 0, 'Orange', 30000, 'gt86_01'),
(83, 7, 'BMW', 'M4', 2017, ' 3.0', 'Turbo', 'Petrol', 0, 'White', 30000, 'series4_01'),
(84, 9, 'BMW', 'i8', 2016, ' 1.5', 'Hybrid', 'Petrol', 0, 'Red', 40000, 'i8_01'),
(85, 1, 'BMW', 'Series 5', 2017, ' 2.0', 'Turbo', 'Petrol', 0, 'Blue', 10000, 'series5_01'),
(86, 1, 'BMW', 'Series 3', 2016, ' 2.0', 'Turbo', 'Petrol', 0, 'Blue', 10000, 'series3_01'),
(87, 1, 'Benz', 'E350e', 2017, ' 2.0', 'Hybrid', 'Petrol', 0, 'Gray', 10000, 'E350e_01'),
(88, 1, 'Benz', 'C200', 2017, ' 2.0', 'Turbo', 'Petrol', 0, 'Black', 10000, 'c200_01'),
(89, 1, 'Benz', 'CLA45', 2017, ' 2.0', 'Turbo', 'Petrol', 0, 'White', 30000, 'cla45_01'),
(90, 2, 'Benz', 'A45', 2017, ' 2.0', 'Turbo', 'Petrol', 0, 'White', 30000, 'a45_01'),
(91, 2, 'Ford', 'Focus RS', 2016, ' 2.0', 'Turbo', 'Petrol', 0, 'Blue', 30000, 'focus_rs_01'),
(92, 7, 'Ford', 'Mustang Shelby ', 2017, ' 5.2', 'Turbo', 'Petrol', 0, 'Blue', 40000, 'mustang_01'),
(93, 1, 'Honda', 'Accoard', 2016, ' 2.0', 'Hybrid', 'Petrol', 0, 'Black', 5000, 'accoard_hybrid_01'),
(94, 1, 'Honda', 'Accoard', 2016, ' 2.0', 'n/a', 'Petrol', 0, 'Black', 5000, 'accoard_01'),
(95, 1, 'Honda', 'Accoard', 2016, ' 2.4', 'n/a', 'Petrol', 0, 'Black', 5000, 'accoard_01'),
(96, 1, 'Honda', 'City', 2017, ' 1.5', 'n/a', 'Petrol', 0, 'Blue', 2000, 'city_01'),
(97, 1, 'Honda', 'Civic', 2017, ' 1.8', 'n/a', 'Petrol', 0, 'Blue', 2000, 'civic_sedan_01'),
(98, 2, 'Honda', 'Civic', 2017, ' 1.5', 'Turbo', 'Petrol', 0, 'Brown', 2000, 'civic_hatchback_01'),
(99, 3, 'Honda', 'C-RV', 2017, ' 1.6', 'Turbo', 'Diesel', 0, 'White', 2000, 'crv_01'),
(100, 3, 'Honda', 'C-RV', 2017, ' 2.4', 'n/a', 'Petrol', 0, 'White', 2000, 'crv_01'),
(101, 4, 'Honda', 'H-RV', 2016, ' 1.8', 'n/a', 'Petrol', 0, 'Black', 2000, 'hrv_01'),
(102, 2, 'Honda', 'Jazz', 2016, ' 1.5', 'n/a', 'Petrol', 0, 'Yello', 2000, 'jazz_01'),
(103, 3, 'Mazda', 'CX5', 2016, ' 2.5', 'n/a', 'Petrol', 0, 'Red', 2000, 'cx5_01'),
(104, 3, 'Mazda', 'CX3', 2016, ' 1.5', 'n/a', 'Petrol', 0, 'Black', 2000, 'cx3_01'),
(105, 2, 'Mazda', '3', 2016, ' 2.0', 'n/a', 'Petrol', 0, 'Blue', 2000, 'mazda3_hatchback_01'),
(106, 2, 'Mazda', '2', 2016, ' 1.5', 'n/a', 'Diesel', 0, 'Blue', 2000, 'mazda2_hatchback_01'),
(107, 1, 'Mazda', '3', 2016, ' 2.0', 'n/a', 'Petrol', 0, 'Red', 2000, 'mazda3_sedan_01'),
(108, 1, 'Mazda', '2', 2016, ' 1.5', 'n/a', 'Diesel', 0, 'Red', 2000, 'mazda2_sedan_01'),
(109, 1, 'Toyota', 'Altis Esport', 2017, ' 1.8', 'n/a', 'Petrol', 0, 'Black', 2000, 'altis_esport_01'),
(110, 1, 'Toyota', 'Altis', 2017, ' 1.6', 'n/a', 'Petrol', 0, 'Silver', 2000, 'altis_01'),
(111, 1, 'Toyota', 'Camry Esport', 2017, ' 2.5', 'n/a', 'Petrol', 0, 'Blue', 5000, 'camry_esport_01'),
(112, 1, 'Toyota', 'Camry', 2017, ' 2.5', 'n/a', 'Petrol', 0, 'Black', 5000, 'camry_01'),
(113, 5, 'Toyota', 'Commuter', 2015, ' 3.0', 'n/a', 'Diesel', 0, 'Silver', 2000, 'commuter_01'),
(114, 5, 'Toyota', 'Alphard', 2016, ' 3.5', 'n/a', 'Petrol', 0, 'White', 5000, 'alphard_01'),
(115, 5, 'Toyota', 'Alphard', 2016, ' 2.5', 'hybrid', 'Petrol', 0, 'White', 5000, 'alphard_hybrid_01'),
(116, 5, 'Toyota', 'Vellfire', 2016, ' 2.5', 'n/a', 'Petrol', 0, 'White', 5000, 'vellfire_01'),
(117, 6, 'Toyota', 'Fortuner', 2016, ' 2.8', 'n/a', 'Diesel', 0, 'Brown', 2000, 'fortuner_01'),
(118, 6, 'Toyota', 'Fortuner TRD', 2016, ' 2.8', 'n/a', 'Diesel', 0, 'White', 2000, 'fortuner_trd_01'),
(119, 8, 'Toyota', 'Revo', 2016, ' 2.7', 'n/a', 'Diesel', 0, 'Blue', 2000, 'revo_01'),
(120, 1, 'Toyota', 'Vios', 2017, ' 1.5', 'n/a', 'Petrol', 0, 'Red', 2000, 'vios_01'),
(121, 2, 'Toyota', 'Yaris', 2016, ' 1.2', 'n/a', 'Petrol', 0, 'Red', 1000, 'yaris_01'),
(122, 1, 'Nissan', 'Almera', 2015, ' 1.2', 'n/a', 'Petrol', 0, 'Silver', 1000, 'almera_01'),
(123, 2, 'Nissan', 'Juke', 2016, ' 1.5', 'n/a', 'Petrol', 0, 'White', 2000, 'juke_01'),
(124, 3, 'Nissan', 'Livina', 2015, ' 1.6', 'n/a', 'Petrol', 0, 'White', 2000, 'livina_01'),
(125, 2, 'Nissan', 'March', 2015, ' 1.2', 'n/a', 'Petrol', 0, 'Red', 1000, 'march_01'),
(126, 8, 'Nissan', 'Navara', 2016, ' 2.5', 'n/a', 'Petrol', 0, 'Black', 2000, 'navara_01'),
(127, 2, 'Nissan', 'Note', 2017, ' 1.2', 'n/a', 'Petrol', 0, 'Red', 2000, 'note_01'),
(128, 2, 'Nissan', 'Pulsar', 2015, ' 1.8', 'n/a', 'Petrol', 0, 'Red', 2000, 'pulsar_01'),
(129, 1, 'Nissan', 'Sylphy', 2015, ' 1.8', 'n/a', 'Petrol', 0, 'Black', 2000, 'sylphy_01'),
(130, 1, 'Nissan', 'Sylphy', 2015, ' 1.6', 'Turbo', 'Petrol', 0, 'Red', 5000, 'sylphy_turbo_01'),
(131, 1, 'Nissan', 'Teana', 2016, ' 2.5', 'n/a', 'Petrol', 0, 'Black', 5000, 'teana_01'),
(132, 5, 'Nissan', 'Urvan', 2016, ' 2.5', 'n/a', 'Diesel', 0, 'Brown', 2000, 'urvan_01'),
(133, 3, 'Nissan', 'X-Trail', 2016, ' 2.0', 'hybrid', 'Petrol', 0, 'White', 5000, 'xtrail_hybrid_01'),
(134, 3, 'Nissan', 'X-Trail', 2016, ' 2.5', 'n/a', 'Petrol', 0, 'Red', 5000, 'xtrail_01');

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

--
-- Dumping data for table `car_equipment`
--

INSERT INTO `car_equipment` (`id`, `equipment_id`, `car_id`, `start_date`, `end_date`) VALUES
(1, 6, 76, '2017-05-24', '2017-05-25'),
(2, 1, 74, '2017-05-24', '2017-05-28'),
(3, 6, 74, '2017-05-24', '2017-05-28'),
(4, 3, 74, '2017-05-24', '2017-05-28'),
(5, 4, 74, '2017-05-24', '2017-05-28'),
(6, 1, 74, '2017-05-24', '2017-05-28'),
(7, 1, 74, '2017-05-24', '2017-05-28'),
(8, 4, 73, '2017-05-24', '2017-05-28');

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

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `name`, `lastname`, `birthday`, `email`, `phone`, `dln`) VALUES
(66, 'ntp', 'bright', 'Nuttapatprom', 'Chongamorkulprapa', '1996-11-04', 'nuttapatprom.c@ku.th', '0906069175', '1232456471'),
(67, 'rakkan', 'rakkan', 'Rakkan', 'Jintasatien', '1997-03-16', 'rakkan.j@ku.th', '0867534567', '4563765412'),
(68, 'jab', 'jab', 'Settapong', 'Pluemlue', '1996-08-15', 'settapong.p@ku.th', '0908764562', '3344567987'),
(69, 'max', 'max', 'Patipol', 'Whangjaithum', '1996-09-13', 'patipol.w@ku.th', '0872243576', '6655712345'),
(70, 'stang', 'stang', 'Khanuchchon', 'Amawong', '1997-06-23', 'khanuchchon.a@ku.th', '0893345587', '9976523414');

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
(175, 10),
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
(166, 31),
(167, 31),
(168, 31),
(169, 31),
(170, 31),
(171, 31),
(172, 31),
(173, 31),
(174, 31),
(176, 31),
(177, 31),
(178, 31),
(179, 31),
(180, 31),
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
(134, 45),
(135, 45),
(136, 45),
(137, 45),
(138, 45),
(139, 45),
(140, 45),
(141, 45),
(142, 45),
(143, 45),
(144, 45),
(145, 45),
(146, 45),
(147, 45),
(148, 45),
(149, 45),
(150, 45),
(151, 45),
(152, 45),
(153, 45),
(154, 45),
(155, 45),
(156, 45),
(157, 45),
(158, 45),
(159, 45),
(160, 45),
(161, 45),
(162, 45),
(163, 45),
(164, 45),
(165, 45),
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

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `name`, `equipment_category_id`) VALUES
(1, 'Baby seat', 1),
(2, 'GPS', 1),
(3, 'Roof box', 2),
(4, 'Roof rack', 2),
(5, 'Travel trailer', 2),
(6, 'Travel dog cage', 2);

-- --------------------------------------------------------

--
-- Table structure for table `equipment_category`
--

CREATE TABLE `equipment_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment_category`
--

INSERT INTO `equipment_category` (`id`, `name`) VALUES
(1, 'Inside'),
(2, 'Outside');

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
(136, 10),
(137, 10),
(138, 10),
(139, 10),
(140, 10),
(141, 10),
(143, 10),
(144, 10),
(145, 10),
(146, 10),
(147, 10),
(83, 13),
(84, 13),
(101, 13),
(102, 13),
(103, 13),
(104, 13),
(105, 13),
(106, 13),
(107, 13),
(108, 13),
(109, 13),
(110, 13),
(111, 13),
(112, 13),
(113, 13),
(114, 13),
(115, 13),
(116, 13),
(117, 13),
(118, 13),
(119, 13),
(120, 13),
(121, 13),
(122, 13),
(123, 13),
(124, 13),
(125, 13),
(126, 13),
(127, 13),
(128, 13),
(129, 13),
(130, 13),
(131, 13),
(132, 13),
(133, 15),
(134, 15),
(135, 15),
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
(142, 52),
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

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`id`, `customer_id`, `car_id`, `pick_up_location_id`, `drop_off_location_id`, `start_date`, `end_date`, `remarks`) VALUES
(146, 67, 78, 101, 134, '2017-05-23', '2017-05-24', ''),
(147, 67, 78, 102, 135, '2017-05-23', '2017-05-24', ''),
(148, 67, 78, 103, 136, '2017-05-23', '2017-05-24', ''),
(149, 67, 78, 104, 137, '2017-05-23', '2017-05-24', ''),
(150, 67, 78, 105, 138, '2017-05-24', '2017-05-25', ''),
(151, 67, 78, 106, 139, '2017-05-24', '2017-05-25', ''),
(152, 67, 73, 107, 140, '2017-05-24', '2017-05-25', ''),
(153, 67, 73, 108, 141, '2017-05-24', '2017-05-25', ''),
(154, 67, 73, 109, 142, '2017-05-24', '2017-05-25', ''),
(155, 67, 73, 110, 143, '2017-05-24', '2017-05-25', ''),
(156, 67, 73, 111, 144, '2017-05-24', '2017-05-25', ''),
(157, 67, 73, 112, 145, '2017-05-24', '2017-05-25', ''),
(158, 67, 73, 113, 146, '2017-05-24', '2017-05-25', ''),
(159, 67, 73, 114, 147, '2017-05-24', '2017-05-25', ''),
(160, 67, 73, 115, 148, '2017-05-24', '2017-05-25', ''),
(161, 67, 73, 116, 149, '2017-05-24', '2017-05-25', ''),
(162, 67, 73, 117, 150, '2017-05-24', '2017-05-25', ''),
(163, 67, 73, 118, 151, '2017-05-24', '2017-05-25', ''),
(164, 67, 73, 119, 152, '2017-05-24', '2017-05-25', ''),
(165, 67, 73, 120, 153, '2017-05-24', '2017-05-25', ''),
(166, 67, 73, 121, 154, '2017-05-24', '2017-05-25', ''),
(167, 67, 73, 122, 155, '2017-05-24', '2017-05-25', ''),
(168, 67, 73, 123, 156, '2017-05-24', '2017-05-25', ''),
(169, 67, 73, 124, 157, '2017-05-24', '2017-05-25', ''),
(170, 67, 73, 125, 158, '2017-05-24', '2017-05-25', ''),
(171, 67, 73, 126, 159, '2017-05-24', '2017-05-25', ''),
(172, 67, 73, 127, 160, '2017-05-24', '2017-05-25', ''),
(173, 67, 73, 128, 161, '2017-05-24', '2017-05-25', ''),
(174, 67, 73, 129, 162, '2017-05-24', '2017-05-25', ''),
(175, 67, 76, 130, 163, '2017-05-24', '2017-05-25', ''),
(176, 67, 76, 131, 164, '2017-05-24', '2017-05-25', ''),
(177, 67, 80, 132, 165, '2017-05-24', '2017-05-25', ''),
(178, 66, 91, 133, 166, '2017-05-24', '2017-05-29', ''),
(179, 66, 91, 134, 167, '2017-05-24', '2017-05-29', ''),
(180, 66, 91, 135, 168, '2017-05-24', '2017-05-29', ''),
(181, 66, 74, 136, 169, '2017-05-24', '2017-05-28', ''),
(182, 66, 74, 137, 170, '2017-05-24', '2017-05-28', ''),
(183, 66, 74, 138, 171, '2017-05-24', '2017-05-28', ''),
(184, 66, 74, 139, 172, '2017-05-24', '2017-05-28', ''),
(185, 66, 74, 140, 173, '2017-05-24', '2017-05-28', ''),
(186, 66, 74, 141, 174, '2017-05-24', '2017-05-28', ''),
(188, 66, 73, 142, 175, '2017-05-24', '2017-05-28', ''),
(189, 66, 74, 143, 176, '2017-05-24', '2017-05-29', ''),
(190, 66, 74, 144, 177, '2017-05-24', '2017-05-29', ''),
(191, 66, 74, 145, 178, '2017-05-24', '2017-05-29', ''),
(192, 66, 74, 146, 179, '2017-05-24', '2017-05-29', ''),
(193, 66, 74, 147, 180, '2017-05-24', '2017-05-29', '');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `rental_id` int(11) NOT NULL,
  `customer_id` int(11) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `card_type` varchar(255) NOT NULL,
  `card_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `rental_id`, `customer_id`, `start_date`, `end_date`, `card_type`, `card_id`, `status`) VALUES
(100, 146, 67, '0000-00-00', '0000-00-00', 'Mastercard', 2147483647, 'waiting'),
(101, 147, 67, '0000-00-00', '0000-00-00', 'Mastercard', 2147483647, 'waiting'),
(102, 148, 67, '0000-00-00', '0000-00-00', 'Mastercard', 2147483647, 'waiting'),
(103, 149, 67, '0000-00-00', '0000-00-00', 'Mastercard', 2147483647, 'waiting'),
(104, 150, 67, '0000-00-00', '0000-00-00', 'Mastercard', 2147483647, 'waiting'),
(105, 151, 67, '0000-00-00', '0000-00-00', 'Mastercard', 2147483647, 'waiting'),
(106, 152, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'active'),
(107, 153, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'active'),
(108, 154, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'active'),
(109, 155, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'waiting'),
(110, 156, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'waiting'),
(111, 157, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'waiting'),
(112, 158, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'waiting'),
(113, 159, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'waiting'),
(114, 160, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'waiting'),
(115, 161, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'waiting'),
(116, 162, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'waiting'),
(117, 163, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'waiting'),
(118, 164, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'waiting'),
(119, 165, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'waiting'),
(120, 166, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'waiting'),
(121, 167, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'waiting'),
(122, 168, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'waiting'),
(123, 169, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'waiting'),
(124, 170, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'waiting'),
(125, 171, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'waiting'),
(126, 172, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'waiting'),
(127, 173, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'waiting'),
(128, 174, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'waiting'),
(129, 175, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'waiting'),
(130, 176, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'waiting'),
(131, 177, 67, '2017-05-24', '2017-05-25', 'Mastercard', 2147483647, 'waiting'),
(132, 178, 66, '2017-05-24', '2017-05-29', 'Visa', 2147483647, 'waiting'),
(133, 179, 66, '2017-05-24', '2017-05-29', 'Visa', 2147483647, 'waiting'),
(134, 180, 66, '2017-05-24', '2017-05-29', 'Visa', 2147483647, 'waiting'),
(135, 181, 66, '2017-05-24', '2017-05-28', 'visa', 2147483647, 'waiting'),
(136, 182, 66, '2017-05-24', '2017-05-28', 'visa', 2147483647, 'waiting'),
(137, 183, 66, '2017-05-24', '2017-05-28', 'visa', 2147483647, 'waiting'),
(138, 184, 66, '2017-05-24', '2017-05-28', 'visa', 2147483647, 'waiting'),
(139, 185, 66, '2017-05-24', '2017-05-28', 'visa', 2147483647, 'waiting'),
(140, 186, 66, '2017-05-24', '2017-05-28', 'visa', 2147483647, 'waiting'),
(142, 188, 66, '2017-05-24', '2017-05-28', 'Visa', 2147483647, 'waiting'),
(143, 189, 66, '2017-05-24', '2017-05-29', 'visa', 2147483647, 'waiting'),
(144, 190, 66, '2017-05-24', '2017-05-29', 'visa', 2147483647, 'waiting'),
(145, 191, 66, '2017-05-24', '2017-05-29', 'visa', 2147483647, 'waiting'),
(146, 192, 66, '2017-05-24', '2017-05-29', 'visa', 2147483647, 'waiting'),
(147, 193, 66, '2017-05-24', '2017-05-29', 'visa', 2147483647, 'waiting');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
--
-- AUTO_INCREMENT for table `car_equipment`
--
ALTER TABLE `car_equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `drop_off_location`
--
ALTER TABLE `drop_off_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;
--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `equipment_category`
--
ALTER TABLE `equipment_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pick_up_location`
--
ALTER TABLE `pick_up_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;
--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;
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
