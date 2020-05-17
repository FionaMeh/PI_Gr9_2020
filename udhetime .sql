-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2020 at 06:46 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `udhetime`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked_form`
--

CREATE TABLE `booked_form` (
  `id` int(11) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `check_IN` date NOT NULL,
  `check_OUT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked_form`
--

INSERT INTO `booked_form` (`id`, `client_name`, `room_type`, `check_IN`, `check_OUT`) VALUES
(1, 'erisera ', 'Single-Room', '2020-05-21', '2020-05-23'),
(2, 'erisera troshupa', 'Single-Room', '2020-05-14', '2020-05-16'),
(3, 'erisera troshupa', 'Single-Room', '2020-05-13', '2020-05-22'),
(4, 'Shendi', 'Single-Room', '2020-05-17', '2020-05-19');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`) VALUES
(1, 'erisera troshupa', 'sa mire'),
(3, 'teuta', 'foto te mrekullueshme\n'),
(10, 'bekim', 'teper mire a'),
(11, 'fiona', 'hej');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `emaili` varchar(60) NOT NULL,
  `mesazhi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `firstName`, `emaili`, `mesazhi`) VALUES
(1, 'erisera ', 'eriseratr@gmail.com', ' eraera'),
(2, 'fiona', 'tr@gmail.com', 'hejhejhej'),
(5, 'era', 'teuta@hotmal.com', ' qa bone'),
(6, 'njody', 'bekim@gmail.com', 'hey'),
(7, '', '', ' '),
(9, 'Shendi', 'shend@gmail.com', 'hej kam nevoje te flas me juve per booking'),
(10, 'fiona', 'fiona@gmail.com', ' me ndihmoni'),
(11, 'teuta', 'teuta@hotmail.com', ' hej fion'),
(12, 'Fiona gashi', 'fina@gmail.com', ' eraera'),
(13, 'fortuna', 'fortuna@gmail.com', ' hejehej');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `email`) VALUES
(1, 'erisera', '6c951516dc25a8a4b445206cdbbd90ad', 'erisera troshupa', 'eriseratr@gmail.com'),
(2, 'Krasniqi', '60bfca485e30226f7586771fd45df847', 'Erisera', 'erisera@gmail.com'),
(3, 'Troshupa', '7c3d33d9f0c3916fd57cd1a1c0cff55c', 'Teuta', 'teuta@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked_form`
--
ALTER TABLE `booked_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emaili` (`emaili`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked_form`
--
ALTER TABLE `booked_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
