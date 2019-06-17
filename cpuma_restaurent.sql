-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 20, 2018 at 03:07 PM
-- Server version: 5.6.30-76.3-log
-- PHP Version: 5.6.30

/*SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
*/

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpuma_restaurent`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--
USE `cpuma_restaurent`;

CREATE TABLE `customer` (
  `id` INT(11) NOT NULL,
  `name` VARCHAR(20) NOT NULL,
  `phone` VARCHAR(20) NOT NULL,
  `email` VARCHAR(40) NOT NULL,
  `password` VARCHAR(20) NOT NULL
) ENGINE=MYISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `phone`, `email`, `password`) VALUES
(1, 'Tushar', '7363807606', 'test@gmail.com', '123'),
(4, 'asas', '123', 'x@gmail.com', '123'),
(3, 'xdgtdh', '1212121', 'tests@gmail.com', '123'),
(5, 'azhar', '7797409330', 'azharislam21@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` INT(11) NOT NULL,
  `name` VARCHAR(20) NOT NULL,
  `phone` VARCHAR(20) NOT NULL,
  `email` VARCHAR(20) NOT NULL,
  `password` VARCHAR(20) NOT NULL
) ENGINE=MYISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `phone`, `email`, `password`) VALUES
(1, 'mixalhs ', '7797409330', 'test@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` INT(11) NOT NULL,
  `date` VARCHAR(220) NOT NULL,
  `time` VARCHAR(200) NOT NULL,
  `person` INT(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text,
  `booked_by` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `date`, `time`, `person`, `table_id`, `phone`, `message`, `booked_by`, `user_id`) VALUES
(1, '2018-05-19', '17:37:32.000000', 4, 1, '7797409330', '', 'customer', 1),
(2, '2018-05-18', '02:04:14.000000', 2, 2, '7797409330', '', 'customer', 5),
(3, '0000-00-00', '01:00:00.000000', 5, 3, '7383806707', '', 'customer', 1),
(4, '05/30/2018', '10:30am', 7, 3, '8759223137', '', 'customer', 1),
(5, '05/26/2018', '1:00am', 9, 1, '7363806707', '', 'customer', 1),
(6, '2018-05-20', '11:00', 9, 2, '7363806707', '', 'Employee', 0),
(7, '2018-11-11', '18:00', 26, 2, '1234567894', '', 'Employee-1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `table_id` int(11) NOT NULL,
  `table` varchar(20) NOT NULL,
  `sit` int(11) NOT NULL,
  `action` int(11) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`table_id`, `table`, `sit`, `action`, `image`) VALUES
(1, 'Table A', 4, 2, ''),
(2, 'Table B', 2, 0, ''),
(3, 'Table C', 6, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `timings`
--

CREATE TABLE `timings` (
  `id` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `from_time` varchar(200) NOT NULL,
  `to_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timings`
--

INSERT INTO `timings` (`id`, `day`, `from_time`, `to_time`) VALUES
(1, 'Sunday ', '10:00', '09:00 PM'),
(2, 'Monday ', '10:00 AM', '09:00 PM'),
(3, 'Tuesday ', '10:00 AM', '09:00 PM'),
(4, 'Thrusday ', '10:00 AM', '09:00 PM'),
(5, 'Friday ', '10:00 AM', '09:00 PM'),
(6, 'Saturday ', '10:00 AM', '14:00 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `timings`
--
ALTER TABLE `timings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `timings`
--
ALTER TABLE `timings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
