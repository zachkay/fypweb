-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2021 at 12:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `budee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `fullname`, `username`, `password`) VALUES
(1, 'Administrator1', 'admin', '123'),
(2, 'Mohd Zuhair', 'mz', '123'),
(3, 'JKR Electric', 'jkr', '123'),
(4, 'Staff JKR', 'staff', '123'),
(6, 'New', 'baru', '123');

-- --------------------------------------------------------

--
-- Table structure for table `breaker_size`
--

CREATE TABLE `breaker_size` (
  `breaker_id` int(11) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `breaker_size`
--

INSERT INTO `breaker_size` (`breaker_id`, `size`) VALUES
(1, 20),
(2, 32),
(3, 40),
(4, 63),
(5, 80),
(6, 100),
(7, 125),
(8, 160),
(9, 200),
(10, 250),
(11, 320),
(12, 400),
(13, 500);

-- --------------------------------------------------------

--
-- Table structure for table `cable_phase`
--

CREATE TABLE `cable_phase` (
  `phase_id` int(11) NOT NULL,
  `phase` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `volt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cable_phase`
--

INSERT INTO `cable_phase` (`phase_id`, `phase`, `volt`) VALUES
(1, 'SINGLE PHASE', 230),
(2, 'THREE PHASE', 400);

-- --------------------------------------------------------

--
-- Table structure for table `cable_price`
--

CREATE TABLE `cable_price` (
  `price_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` double(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cable_price`
--

INSERT INTO `cable_price` (`price_id`, `size_id`, `type_id`, `price`) VALUES
(1, 2, 1, 8.7),
(2, 3, 1, 9.7),
(3, 4, 1, 11.4),
(4, 5, 1, 13.6),
(5, 6, 1, 17.9),
(6, 7, 1, 28.5),
(7, 8, 1, 34.2),
(8, 9, 1, 41.5),
(9, 10, 1, 53.8),
(10, 2, 3, 9.8),
(11, 3, 3, 11.5),
(12, 4, 3, 14.3),
(13, 5, 3, 18.0),
(14, 6, 3, 29.4),
(15, 7, 3, 39.5),
(16, 8, 3, 56.8),
(17, 9, 3, 78.9),
(18, 10, 3, 100.3),
(19, 10, 4, 108.4),
(20, 11, 4, 142.4),
(21, 12, 4, 185.7),
(22, 13, 4, 232.0),
(23, 14, 4, 282.7),
(24, 15, 4, 351.0),
(25, 16, 4, 446.8),
(26, 17, 4, 553.3),
(27, 8, 5, 62.4),
(28, 9, 5, 71.3),
(29, 10, 5, 81.7),
(30, 11, 5, 98.0),
(31, 8, 7, 81.9),
(32, 9, 7, 97.3),
(33, 10, 7, 117.7),
(34, 11, 7, 173.1),
(35, 12, 7, 212.1),
(36, 13, 7, 253.6),
(37, 14, 7, 295.8),
(38, 15, 7, 353.7),
(39, 16, 7, 436.2),
(40, 17, 7, 526.1),
(41, 3, 6, 41.8),
(42, 4, 6, 43.7),
(43, 5, 6, 45.7),
(44, 6, 6, 49.9),
(45, 7, 6, 55.1),
(46, 3, 8, 44.5),
(47, 4, 8, 48.0),
(48, 5, 8, 51.6),
(49, 6, 8, 58.6),
(50, 7, 8, 69.0);

-- --------------------------------------------------------

--
-- Table structure for table `cable_size`
--

CREATE TABLE `cable_size` (
  `size_id` int(11) NOT NULL,
  `size` double(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cable_size`
--

INSERT INTO `cable_size` (`size_id`, `size`) VALUES
(1, 1.0),
(2, 1.5),
(3, 2.5),
(4, 4.0),
(5, 6.0),
(6, 10.0),
(7, 16.0),
(8, 25.0),
(9, 35.0),
(10, 50.0),
(11, 70.0),
(12, 95.0),
(13, 120.0),
(14, 150.0),
(15, 185.0),
(16, 240.0),
(17, 300.0),
(18, 400.0),
(19, 500.0),
(20, 630.0),
(21, 800.0),
(22, 1000.0);

-- --------------------------------------------------------

--
-- Table structure for table `cable_spec`
--

CREATE TABLE `cable_spec` (
  `spec_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `iz` double(10,1) NOT NULL,
  `vd` double(10,2) NOT NULL,
  `price` double(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cable_spec`
--

INSERT INTO `cable_spec` (`spec_id`, `size_id`, `type_id`, `iz`, `vd`, `price`) VALUES
(2, 2, 1, 17.5, 29.00, 8.7),
(3, 3, 1, 24.0, 18.00, 9.7),
(4, 4, 1, 32.0, 11.00, 11.4),
(5, 5, 1, 41.0, 7.30, 13.6),
(6, 6, 1, 57.0, 4.40, 17.9),
(7, 7, 1, 76.0, 2.80, 28.5),
(8, 8, 1, 101.0, 1.80, 34.2),
(9, 9, 1, 125.0, 1.30, 41.5),
(10, 10, 1, 151.0, 1.00, 53.8),
(12, 2, 3, 15.5, 25.00, 9.8),
(13, 3, 3, 21.0, 15.00, 11.5),
(14, 4, 3, 28.0, 9.50, 14.3),
(15, 5, 3, 36.0, 6.40, 18.0),
(16, 6, 3, 50.0, 3.80, 29.4),
(17, 7, 3, 68.0, 2.40, 39.5),
(18, 8, 3, 89.0, 1.55, 56.8),
(19, 9, 3, 110.0, 1.10, 78.9),
(20, 10, 3, 134.0, 0.85, 100.3),
(29, 10, 4, 215.0, 0.87, 108.4),
(30, 11, 4, 279.0, 0.62, 142.4),
(31, 12, 4, 341.0, 0.46, 185.7),
(32, 13, 4, 398.0, 0.38, 232.0),
(33, 14, 4, 461.0, 0.32, 282.7),
(34, 15, 4, 530.0, 0.28, 351.0),
(35, 16, 4, 630.0, 0.24, 446.8),
(36, 17, 4, 730.0, 0.21, 553.3),
(37, 8, 5, 146.0, 1.90, 62.4),
(38, 9, 5, 180.0, 1.35, 71.3),
(39, 10, 5, 219.0, 1.00, 81.7),
(40, 11, 5, 279.0, 0.69, 98.0),
(48, 8, 7, 124.0, 1.65, 81.9),
(49, 9, 7, 154.0, 1.15, 97.3),
(50, 10, 7, 187.0, 0.87, 117.7),
(51, 11, 7, 238.0, 0.60, 173.1),
(52, 12, 7, 289.0, 0.45, 212.1),
(53, 13, 7, 335.0, 0.37, 253.6),
(54, 14, 7, 386.0, 0.30, 295.8),
(55, 15, 7, 441.0, 0.26, 353.7),
(56, 16, 7, 520.0, 0.21, 436.2),
(57, 17, 7, 599.0, 0.18, 526.1),
(60, 3, 6, 28.0, 18.00, 41.8),
(61, 4, 6, 38.0, 11.00, 43.7),
(62, 5, 6, 49.0, 7.30, 45.7),
(63, 6, 6, 67.0, 4.40, 49.9),
(64, 7, 6, 89.0, 2.80, 55.1),
(66, 3, 8, 25.0, 15.00, 44.5),
(67, 4, 8, 33.0, 9.50, 48.0),
(68, 5, 8, 42.0, 6.40, 51.6),
(69, 6, 8, 58.0, 3.80, 58.6),
(70, 7, 8, 77.0, 2.40, 69.0),
(78, 1, 1, 0.2, 1.00, 1.0);

-- --------------------------------------------------------

--
-- Table structure for table `cable_type`
--

CREATE TABLE `cable_type` (
  `type_id` int(11) NOT NULL,
  `cable_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cable_core` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phase_id` int(11) NOT NULL,
  `table_reference` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `installation_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cable_type`
--

INSERT INTO `cable_type` (`type_id`, `cable_name`, `cable_core`, `phase_id`, `table_reference`, `installation_type`) VALUES
(1, 'PVC (1⌀)', '2X', 1, '4D1A', 'INDOOR'),
(3, 'PVC (3⌀)', '4X', 2, '4D1A', 'INDOOR'),
(4, 'XLPE (3⌀)', '4X', 2, '4E1A', 'INDOOR'),
(5, 'XLPE/SWA/PVC (1⌀)', '2C', 1, '4E4A', 'OUTDOOR'),
(6, 'PVC/SWA/PVC (1⌀)', '2C', 1, '4D4A', 'OUTDOOR'),
(7, 'XLPE/SWA/PVC (3⌀)', '4C', 2, '4E4A', 'OUTDOOR'),
(8, 'PVC/SWA/PVC (3⌀)', '4C', 2, '4D4A', 'OUTDOOR');

-- --------------------------------------------------------

--
-- Table structure for table `cable_vd`
--

CREATE TABLE `cable_vd` (
  `vd_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `vd` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cable_vd`
--

INSERT INTO `cable_vd` (`vd_id`, `size_id`, `type_id`, `vd`) VALUES
(2, 2, 1, 29.00),
(3, 3, 1, 18.00),
(4, 4, 1, 11.00),
(5, 5, 1, 7.30),
(6, 6, 1, 4.40),
(7, 7, 1, 2.80),
(8, 8, 1, 1.80),
(9, 9, 1, 1.30),
(10, 10, 1, 1.00),
(12, 2, 3, 25.00),
(13, 3, 3, 15.00),
(14, 4, 3, 9.50),
(15, 5, 3, 6.40),
(16, 6, 3, 3.80),
(17, 7, 3, 2.40),
(18, 8, 3, 1.55),
(19, 9, 3, 1.10),
(20, 10, 3, 0.85),
(29, 10, 4, 0.87),
(30, 11, 4, 0.62),
(31, 12, 4, 0.46),
(32, 13, 4, 0.38),
(33, 14, 4, 0.32),
(34, 15, 4, 0.28),
(35, 16, 4, 0.24),
(36, 17, 4, 0.21),
(37, 8, 5, 1.90),
(38, 9, 5, 1.35),
(39, 10, 5, 1.00),
(40, 11, 5, 0.69),
(48, 8, 7, 1.65),
(49, 9, 7, 1.15),
(50, 10, 7, 0.87),
(51, 11, 7, 0.60),
(52, 12, 7, 0.45),
(53, 13, 7, 0.37),
(54, 14, 7, 0.30),
(55, 15, 7, 0.26),
(56, 16, 7, 0.21),
(57, 17, 7, 0.18),
(60, 3, 6, 18.00),
(61, 4, 6, 11.00),
(62, 5, 6, 7.30),
(63, 6, 6, 4.40),
(64, 7, 6, 2.80),
(66, 3, 8, 15.00),
(67, 4, 8, 9.50),
(68, 5, 8, 6.40),
(69, 6, 8, 3.80),
(70, 7, 8, 2.40);

-- --------------------------------------------------------

--
-- Table structure for table `calculation_data`
--

CREATE TABLE `calculation_data` (
  `data_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `loc_a` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `loc_b` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `est_dist` double(10,1) NOT NULL,
  `c_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `c_vd` double(10,1) NOT NULL,
  `c_iz` double(10,1) NOT NULL,
  `calc_vd` double(10,2) NOT NULL,
  `calc_vd_percent` double(10,1) NOT NULL,
  `allowed_vd` double(10,1) NOT NULL,
  `c_qty` int(11) NOT NULL,
  `c_price` double(10,2) NOT NULL,
  `o_price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `calculation_data`
--

INSERT INTO `calculation_data` (`data_id`, `user_id`, `date`, `loc_a`, `loc_b`, `est_dist`, `c_type`, `c_vd`, `c_iz`, `calc_vd`, `calc_vd_percent`, `allowed_vd`, `c_qty`, `c_price`, `o_price`) VALUES
(2, 6, '2021-05-17 13:44:04', 'A', 'B', 115.0, 'PVC (1⌀)', 2.8, 76.0, 19.32, 4.8, 1.0, 1, 28.50, 3277.50),
(4, 6, '2021-05-17 13:45:39', 'A', 'B', 115.0, 'PVC (1⌀)', 2.8, 76.0, 20.29, 5.1, 1.0, 1, 28.50, 3277.50),
(9, 6, '2021-05-17 14:20:46', 'A', 'B', 115.0, 'PVC (3⌀)', 1.6, 89.0, 10.69, 2.7, 1.0, 1, 56.80, 6532.00),
(10, 1, '2021-05-19 08:54:34', 'Kl Sentral', 'Poslaju', 115.0, 'PVC (1⌀)', 1.8, 101.0, 6.52, 1.6, 1.0, 2, 34.20, 7866.00),
(11, 6, '2021-05-20 09:25:54', 'JKR', 'UniKL', 460.0, 'PVC (1⌀)', 1.0, 151.0, 15.33, 6.7, 1.0, 3, 53.80, 74244.00),
(12, 6, '2021-05-20 09:28:07', 'Malaysia', 'Palestine', 1150.0, 'XLPE (3⌀)', 0.9, 215.0, 25.01, 6.3, 2.0, 4, 108.40, 498640.00),
(13, 1, '2021-05-20 15:09:16', 'KL', 'Klang', 1150.0, 'PVC (1⌀)', 1.8, 101.0, 124.20, 54.0, 1.0, 1, 34.20, 39330.00),
(14, 8, '2021-05-21 01:26:08', 'Unikl', 'JKR', 575.0, 'PVC (1⌀)', 2.8, 76.0, 96.60, 42.0, 1.0, 1, 28.50, 16387.50),
(15, 1, '2021-05-28 10:10:32', 'JKR ', 'Unikl', 115.0, 'PVC (1⌀)', 2.8, 76.0, 19.32, 8.4, 1.0, 1, 28.50, 3277.50),
(16, 1, '2021-05-31 02:52:05', 'JKR', 'UniKL', 115.0, 'PVC (1⌀)', 2.8, 76.0, 19.32, 8.4, 1.0, 1, 28.50, 3277.50),
(17, 1, '2021-06-08 00:59:30', 'Unikl', 'JKR', 115.0, 'XLPE/SWA/PVC (1⌀)', 1.9, 146.0, 10.92, 4.8, 1.0, 2, 62.40, 14352.00),
(18, 1, '2021-06-22 05:08:41', 'Cyber', 'Tower', 115.0, 'XLPE/SWA/PVC (1⌀)', 1.9, 146.0, 17.48, 7.6, 1.0, 1, 62.40, 7176.00),
(19, 1, '2021-06-22 06:45:52', 'UniKL', 'JKR', 115.0, 'XLPE/SWA/PVC (1⌀)', 0.7, 279.0, 2.50, 1.1, 2.0, 2, 98.00, 22540.00),
(20, 11, '2021-07-04 18:23:03', 'UniKL', 'JKR', 115.0, 'PVC (1⌀)', 1.0, 151.0, 5.75, 2.5, 2.0, 2, 53.80, 12374.00);

-- --------------------------------------------------------

--
-- Table structure for table `data_collection`
--

CREATE TABLE `data_collection` (
  `collection_id` int(10) NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `feedback` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `date`, `name`, `email`, `subject`, `feedback`) VALUES
(1, '2021-05-19 16:00:00', 'Zuhair', 'zuhair@gmail.com', 'Good App', 'Your application very user friendly and easy to use. Naisuuuu'),
(5, '2021-05-20 14:59:46', 'test123', 'test123@gmail.com', 'Complaint', 'Covid xtrun lg ni'),
(6, '2021-05-20 15:03:13', 'test123', 'test123@gmail.com', 'Goodwork', 'Nice UI and UX'),
(7, '2021-05-21 01:27:00', 'ZuhairJKR', 'jkr@gmail.com', 'User Friendly', 'Nice ui design'),
(11, '2021-06-21 19:23:43', 'madju', 'zachkay47@gmail.com', 'Bagus', 'Good work'),
(12, '2021-07-04 18:26:56', 'zuhair', 'zuhair@gmail.com', 'Nice UI', 'User friendly');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Mobile` varchar(100) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `fcm_token` varchar(200) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `Email`, `Mobile`, `Password`, `fcm_token`, `status`) VALUES
(1, 'madju', 'zachkay47@gmail.com', '0199485944', 'cc03e747a6afbbcbf8be7668acfebee5', 'test_fcm_token', 1),
(2, 'admin', 'admin@gmail.com', '0199387651', '21232f297a57a5a743894a0e4a801fc3', 'test_fcm_token', 1),
(3, 'staff 1', 'staff@hotmail.com', '016345641', '1253208465b1efa876f982d8a9e73eef', 'test_fcm_token', 1),
(4, 'Staff 1', 'staff@gmail.com', '0166453214', '1253208465b1efa876f982d8a9e73eef', 'test_fcm_token', 1),
(5, 'Staff2', 'staff2@gmail.com', '019987456123', '8bc01711b8163ec3f2aa0688d12cdf3b', 'test_fcm_token', 1),
(6, 'test123', 'test123@gmail.com', '123', 'cc03e747a6afbbcbf8be7668acfebee5', 'test_fcm_token', 1),
(7, 'UniKL', 'unikl@gmail.com', '0133223111', '202cb962ac59075b964b07152d234b70', 'test_fcm_token', 1),
(8, 'ZuhairJKR', 'jkr@gmail.com', '0199995665', '202cb962ac59075b964b07152d234b70', 'test_fcm_token', 1),
(9, 'Ahmad', 'ahmad@gmail.com', '019987654321', '8de13959395270bf9d6819f818ab1a00', 'test_fcm_token', 1),
(10, 'mohd', 'mohd@gmail.com', '019987654123', 'bcd5d4ce81045ef68671b03b64ca612b', 'test_fcm_token', 1),
(11, 'zuhair', 'zuhair@gmail.com', '013321123', '38d9465d747dcc3895b73ed83477d69e', 'test_fcm_token', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `breaker_size`
--
ALTER TABLE `breaker_size`
  ADD PRIMARY KEY (`breaker_id`);

--
-- Indexes for table `cable_phase`
--
ALTER TABLE `cable_phase`
  ADD PRIMARY KEY (`phase_id`);

--
-- Indexes for table `cable_price`
--
ALTER TABLE `cable_price`
  ADD PRIMARY KEY (`price_id`),
  ADD KEY `size_id` (`size_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `cable_size`
--
ALTER TABLE `cable_size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `cable_spec`
--
ALTER TABLE `cable_spec`
  ADD PRIMARY KEY (`spec_id`),
  ADD KEY `size_id` (`size_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `cable_type`
--
ALTER TABLE `cable_type`
  ADD PRIMARY KEY (`type_id`),
  ADD KEY `phase_id` (`phase_id`);

--
-- Indexes for table `cable_vd`
--
ALTER TABLE `cable_vd`
  ADD PRIMARY KEY (`vd_id`),
  ADD KEY `size_id` (`size_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `calculation_data`
--
ALTER TABLE `calculation_data`
  ADD PRIMARY KEY (`data_id`);

--
-- Indexes for table `data_collection`
--
ALTER TABLE `data_collection`
  ADD PRIMARY KEY (`collection_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `breaker_size`
--
ALTER TABLE `breaker_size`
  MODIFY `breaker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cable_phase`
--
ALTER TABLE `cable_phase`
  MODIFY `phase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cable_price`
--
ALTER TABLE `cable_price`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `cable_size`
--
ALTER TABLE `cable_size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `cable_spec`
--
ALTER TABLE `cable_spec`
  MODIFY `spec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `cable_type`
--
ALTER TABLE `cable_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cable_vd`
--
ALTER TABLE `cable_vd`
  MODIFY `vd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `calculation_data`
--
ALTER TABLE `calculation_data`
  MODIFY `data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `data_collection`
--
ALTER TABLE `data_collection`
  MODIFY `collection_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cable_price`
--
ALTER TABLE `cable_price`
  ADD CONSTRAINT `cable_price_ibfk_1` FOREIGN KEY (`size_id`) REFERENCES `cable_size` (`size_id`),
  ADD CONSTRAINT `cable_price_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `cable_type` (`type_id`);

--
-- Constraints for table `cable_spec`
--
ALTER TABLE `cable_spec`
  ADD CONSTRAINT `cable_spec_ibfk_1` FOREIGN KEY (`size_id`) REFERENCES `cable_size` (`size_id`),
  ADD CONSTRAINT `cable_spec_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `cable_type` (`type_id`);

--
-- Constraints for table `cable_type`
--
ALTER TABLE `cable_type`
  ADD CONSTRAINT `cable_type_ibfk_1` FOREIGN KEY (`phase_id`) REFERENCES `cable_phase` (`phase_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cable_vd`
--
ALTER TABLE `cable_vd`
  ADD CONSTRAINT `cable_vd_ibfk_1` FOREIGN KEY (`size_id`) REFERENCES `cable_size` (`size_id`),
  ADD CONSTRAINT `cable_vd_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `cable_type` (`type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
