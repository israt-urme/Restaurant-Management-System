-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2019 at 06:31 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `ur_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `orderType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `food_id`, `ur_name`, `email`, `phone`, `address`, `food_name`, `quantity`, `amount`, `orderType`) VALUES
(9, 2, '', '', '0', '', 'set menu 2', 3, 1050, 'preOrder'),
(10, 2, '', '', '0', '', 'set menu 2', 3, 1050, ''),
(11, 2, '', '', '0', '', 'set menu 2', 3, 1050, ''),
(12, 2, '', '', '0', '', 'set menu 2', 3, 1050, ''),
(13, 2, '', '', '0', '', 'set menu 2', 3, 1050, ''),
(14, 2, 'urme', 'urmejahan68@gmail.com', '0', '', 'set menu 2', 3, 1050, 'preOrder'),
(15, 2, 'urme', 'urmejahan68@gmail.com', '0', '', 'set menu 2', 3, 1050, 'preOrder'),
(16, 2, '', '', '0', '', 'set menu 2', 3, 1050, 'preOrder'),
(17, 2, '', '', '0', '', 'set menu 2', 3, 1050, 'preOrder'),
(18, 1, '', '', '0', '', 'set menu 1', 1, 250, 'preOrder'),
(19, 1, '', '', '0', '', 'set menu 1', 1, 250, 'preOrder'),
(20, 1, 'urme', '', '0', '', 'set menu 1', 1, 250, 'preOrder'),
(21, 1, 'urme', '', '0', '', 'set menu 1', 1, 250, 'preOrder'),
(24, 1, 'urme', 'urmejahan68@gmail.com', '17', '194/A,mirpur', 'set menu 1', 2, 500, ''),
(25, 2, 'arif', 'arif@gmail.com', '18', '194/A,mirpur', 'set menu 2', 3, 1050, 'preOrder'),
(26, 2, 'tazim', 'tazim@gmail.com', '017******', '191/1/1,mirpur', 'set menu 2', 2, 700, 'homeDelivery'),
(27, 2, 'maruf', 'rmsrock@gmail.com', '018*********', '191/1/1,mirpur', 'set menu 2', 3, 1050, 'homeDelivery');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `tb_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `table` varchar(255) NOT NULL,
  `foodType` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`tb_id`, `name`, `email`, `phone`, `table`, `foodType`, `purpose`, `date`) VALUES
(1, 'israt jahan', 'rmsrock@gmail.com', '018*********', '1', 'breakfast', 'casual', '2019-10-10'),
(2, 'israt jahan', 'rmsrock@gmail.com', '018*********', '1', 'breakfast', 'casual', '2019-10-10'),
(3, 'israt jahan', 'rmsrock@gmail.com', '018*********', '1', 'breakfast', 'casual', '2019-10-10'),
(4, 'israt jahan', 'rmsrock@gmail.com', '018*********', '1', 'breakfast', 'casual', '2019-10-10'),
(5, 'israt jahan', 'rmsrock@gmail.com', '018*********', '1', 'breakfast', 'casual', '2019-10-10'),
(6, 'kamrun', 'rmsrock@gmail.com', '017******', '1', 'lunch', 'casual', '2019-10-10'),
(7, 'kamrun', 'rmsrock@gmail.com', '017******', '1', 'lunch', 'casual', '2019-10-10'),
(8, 'admin', 'rmsrock@gmail.com', '018*********', '3', 'dinner', 'meeting', '2019-10-09'),
(9, 'sadat hossain', '', '', '', '', '', '0000-00-00'),
(10, 'sadat hossain', '', '', '', '', '', '0000-00-00'),
(11, 'sadat hossain', 'urmejahan68@gmail.com', '018*********', '3', 'lunch', 'meeting', '2019-10-12'),
(12, 'sadat hossain', 'urmejahan68@gmail.com', '018*********', '3', 'lunch', 'meeting', '2019-10-12'),
(13, 'israt jahan', 'urmejahan68@gmail.com', '018*********', '3', 'breakfast', 'meeting', '2019-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contac_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `emai` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contac_id`, `name`, `emai`, `message`) VALUES
(1, 'israt jahan', 'urmejahan68@gmail.com', 'i face a problem in reservation.please fix it.'),
(2, 'israt jahan', 'urmejahan68@gmail.com', 'i face a problem in reservation.please fix it.'),
(3, 'israt jahan', 'urmejahan68@gmail.com', 'i face a problem in reservation.please fix it.'),
(4, 'tazim', 'tazim@gmail.com', 'i wanna through party');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `food_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`food_id`, `food_name`, `food_price`) VALUES
(1, 'set menu 1', 250),
(2, 'set menu 2', 350),
(3, 'set menu 3', 550);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `UserId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`UserId`, `name`, `email`, `password`) VALUES
(1, 'admin', 'restro@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`tb_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contac_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `tb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
