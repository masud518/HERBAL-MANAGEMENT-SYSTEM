-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 11:52 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--
CREATE DATABASE IF NOT EXISTS `crud` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `crud`;

-- --------------------------------------------------------

--
-- Table structure for table `custdetail`
--

CREATE TABLE `custdetail` (
  `id` int(100) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cphone` varchar(255) NOT NULL,
  `cemail` varchar(255) NOT NULL,
  `caddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custdetail`
--

INSERT INTO `custdetail` (`id`, `cname`, `cphone`, `cemail`, `caddress`) VALUES
(7, 'Gupta mohit', '8767566789', 'mohit43@gmail.com', 'shrirampur'),
(8, 'mohit balke', '9870675656', 'balkemoh123@gmail.com', 'ashoknagar'),
(9, 'vivek Agrawal', '8765465758', 'viveka567@gmail.com', 'shirasgoan'),
(10, 'mohsin shaikh', '7767564567', 'mohsin456@gmail.com', 'shrirampur'),
(11, 'Akshay mohite', '7654567845', 'askhay8876@gmail.com', 'shrirampur'),
(12, 'rohan rajput', '9765678776', 'rohan56@gmail.com', 'ashoknagar');

-- --------------------------------------------------------

--
-- Table structure for table `distdetail`
--

CREATE TABLE `distdetail` (
  `id` int(100) NOT NULL,
  `dagency` varchar(255) NOT NULL,
  `downer` varchar(255) NOT NULL,
  `dLno` varchar(255) NOT NULL,
  `daddress` varchar(345) NOT NULL,
  `dphone` varchar(255) NOT NULL,
  `demail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `distdetail`
--

INSERT INTO `distdetail` (`id`, `dagency`, `downer`, `dLno`, `daddress`, `dphone`, `demail`) VALUES
(6, 'Herbal Healing', 'sj.patni', 'SDF234', 'shrirampur', '7373437434', 'herbalmedi@gmail.com'),
(7, 'chame agency', 'govind roy', 'LIC42398', 'Ahemadnagar', '9090988057', 'chameherb@gmail.com'),
(8, 'herb Bazaar', 'farhan nawab', 'LIC7809', 'Rahuri', '9876558686', 'farhan123@gmail.com'),
(9, 'Ayurveda', 'mohan gupta', 'LIC7655', 'sangamner', '8976567845', 'ayurvedic23@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `herbal`
--

CREATE TABLE `herbal` (
  `id` int(10) NOT NULL,
  `Bno` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `gram` varchar(255) NOT NULL,
  `company` varchar(100) NOT NULL,
  `Qty` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `Expire` varchar(100) NOT NULL,
  `margin` varchar(255) NOT NULL,
  `Rate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `herbal`
--

INSERT INTO `herbal` (`id`, `Bno`, `product`, `gram`, `company`, `Qty`, `price`, `Expire`, `margin`, `Rate`) VALUES
(43, 'PJLI454', 'Amrit Rasayan ', '1kg', 'patanjali', '6', '220', '02/12/2022', '1.10% ', '200 '),
(44, 'DIY746', 'Tulsi panchang', '500ml', 'Herbal', '3', '90', '12/10/2022', '1.12%', '80.35'),
(45, 'DTY786', 'Giloy vati', '100tab', 'ayurveda', '12', '110', '02/03/2024', '1.20% ', '91.66'),
(46, 'CHYH290', 'Chyawanprash', '1kg', 'Divya', '3', '280', '20/01/2023', '1.15% ', '243.47 '),
(51, 'BDP56K', 'Badam Pak ', '500 gm', 'Patanjali', '5', '250', '23/09/2022', '1.12%', '223.21'),
(52, 'HO45EY', 'Honey ', '1kg', 'divya', '3', '350', '15/12/2022', '1.10%', '318.18');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin@', 'admin@');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custdetail`
--
ALTER TABLE `custdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distdetail`
--
ALTER TABLE `distdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `herbal`
--
ALTER TABLE `herbal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custdetail`
--
ALTER TABLE `custdetail`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `distdetail`
--
ALTER TABLE `distdetail`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `herbal`
--
ALTER TABLE `herbal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

