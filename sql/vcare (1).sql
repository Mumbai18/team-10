-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2018 at 02:31 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `profilepic` varchar(30) NOT NULL,
  `bio` varchar(1000) NOT NULL,
  `age` varchar(50) NOT NULL,
  `location` varchar(25) NOT NULL,
  `mobile` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `name`, `profilepic`, `bio`, `age`, `location`, `mobile`) VALUES
(3, 'devansh', 'dnssh1.jpg', 'Developer of this Project', 'UC Berkley', 'Artificial Intelligence', '8082305369'),
(5, 'dnssh', 'dnssh1.jpg', 'Devansh', 'Carnegie Mellon', 'Computer', '8082305369'),
(6, 'Shah Rukh Khan', 'srk.jpg', 'King Khan <3', 'Bollywood', 'Acting', '911234567'),
(8, 'Steve Jobs', 'steve.jpg', 'Apple Ceo', 'Cupertino', 'Design', '989990001'),
(10, 'Bill Gates', 'bill.jpg', 'CEO Microsoft', 'Microsoft .Inc', 'Operating System Design', '921345698'),
(11, 'Harry Potter', 'potter.jpg', 'Daniel Radiclife', 'Hogwarts', 'Wizardry', '912345689'),
(12, 'Lionel Messi', 'messi.jpg', 'Footaball Is Religion .  I am its God !', 'Arsenal Fc', 'Soccer', '17234152930'),
(13, 'Virat Kohli', 'kohli.jpg', 'All Rounder ', 'Royal Challengers Banagalore', 'Cricket', '4526789932'),
(14, 'Abc', 'b.jpg', 'a', 'asd', 'qwer', 'wer');

-- --------------------------------------------------------

--
-- Table structure for table `maps4`
--

CREATE TABLE `maps4` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `latitude` text NOT NULL,
  `longtitude` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maps4`
--

INSERT INTO `maps4` (`id`, `name`, `latitude`, `longtitude`, `link`) VALUES
(5, 'dnssh', '24.4215535', '54.5766013', 'dnssh'),
(3, 'devansh', '34.068921', '-118.4451811', 'devansh'),
(6, 'Shah Rukh Khan', '48.8583701', '2.2944813', 'Shah Rukh Khan'),
(8, 'Steve Jobs', '37.3316756', '-122.030189', 'Steve Jobs'),
(11, 'Harry Potter', '51.4974948', '-0.1356583', 'Harry Potter'),
(12, 'Lionel Messi', '41.3850639', '2.1734035', 'Lionel Messi'),
(13, 'Virat Kohli', '18.9388993', '72.8257783', 'Virat Kohli'),
(13, 'Virat Kohli', '51.529831', '-0.1721564', 'Virat Kohli'),
(10, 'Bill Gates', '47.6739881', '-122.121512', 'Bill Gates'),
(10, 'Bill Gates', '17.4324622', '78.3436947', 'Bill Gates'),
(6, 'Shah Rukh Khan', '19.0468028', '72.8203627', 'Shah Rukh Khan'),
(6, 'Shah Rukh Khan', '', '', 'Shah Rukh Khan'),
(6, 'Shah Rukh Khan', '40.759011', '-73.9844722', 'Shah Rukh Khan'),
(3, 'Devansh', '19.1071107', '72.8370109', 'Devansh'),
(3, 'Devansh', '', '', 'Devansh'),
(3, 'Devansh', '', '', 'Devansh'),
(5, 'dnssh', '', '', 'dnssh'),
(5, 'dnssh', '19.1334302', '72.9132679', 'dnssh'),
(5, 'dnssh', '12.9279232', '77.6271078', 'dnssh'),
(5, 'dnssh', '17.385044', '78.486671', 'dnssh'),
(5, 'dnssh', '18.5204303', '73.8567437', 'dnssh'),
(10, 'Bill Gates', '13.0826802', '80.2707184', 'Bill Gates'),
(10, 'Bill Gates', '', '', 'Bill Gates'),
(10, 'Bill Gates', '15.2993265', '74.123996', 'Bill Gates'),
(5, 'dnssh', '19.0091432', '72.8157283', 'dnssh'),
(5, 'dnssh', '48.856614', '2.3522219', 'dnssh'),
(14, 'Abc', '40.7127753', '-74.0059728', 'Abc'),
(5, 'dnssh', '19.0687893', '72.8702647', 'dnssh'),
(5, 'dnssh', '52.1133348', '4.2934083', 'dnssh'),
(5, 'dnssh', '19.1551485', '72.8678551', 'dnssh');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `profilepic` varchar(30) NOT NULL,
  `bio` varchar(1000) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `profilepic`, `bio`, `gender`, `mobile`, `type`) VALUES
(3, 'devansh', 'dnssh1.jpg', 'Developer of this Project', 'Berkley,California', '8082305369', 'devanshshah.com'),
(5, 'dnssh', 'dnssh1.jpg', 'Devansh', 'New York,NYC', '8082305369', 'devanshshah.com'),
(6, 'Shah Rukh Khan', 'srk.jpg', 'King Khan <3', 'Mumbai', '911234567', 'shahrukhkhan.com'),
(8, 'Steve Jobs', 'steve.jpg', 'Apple Ceo', 'Los Angeles', '989990001', 'stevejobs.com'),
(10, 'Bill Gates', 'bill.jpg', 'CEO Microsoft', 'Redmond,WA', '921345698', 'gatesfoundation.com'),
(11, 'Harry Potter', 'potter.jpg', 'Daniel Radiclife', 'sweden highlands', '912345689', 'potterfans.com'),
(12, 'Lionel Messi', 'messi.jpg', 'Footaball Is Religion .  I am its God !', 'Portugal', '17234152930', 'messifans.com'),
(13, 'Virat Kohli', 'kohli.jpg', 'All Rounder ', 'Benagaluru', '4526789932', 'kohli.com'),
(14, 'Abc', 'b.jpg', 'a', 'wer', 'wer', 'rwe');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'dnssh', 'dnssh936@yahoo.in', 'dnssh'),
(2, 'Devansh', 'devansh@gmail.com', 'devansh'),
(18, 'Devansh Shah', 'devanshshah396@gmail.com', 'devanshshah'),
(20, 'Bill Gates', 'billgates@gmail.com', 'billgates'),
(21, 'Harry Potter', 'harrypotter@gmail.com', 'harrypotter'),
(22, 'Shah Rukh Khan', 'srk@gmail.com', 'srk'),
(32, 'Advait Sarang', 'advait@gmail.com', 'advait'),
(36, 'Steve Jobs', 'steve@gmail.com', 'steve'),
(38, 'Lionel Messi', 'messi@gmail.com', 'messi'),
(39, 'Virat Kohli', 'virat@gmail.com', 'virat'),
(40, 'Abc', 'abc@gmail.com', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `profilepic` varchar(30) NOT NULL,
  `bio` varchar(1000) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `name`, `profilepic`, `bio`, `mobile`, `location`) VALUES
(3, 'devansh', 'dnssh1.jpg', 'Developer of this Project', '8082305369', 'devanshshah.com'),
(5, 'dnssh', 'dnssh1.jpg', 'Devansh', '8082305369', 'devanshshah.com'),
(6, 'Shah Rukh Khan', 'srk.jpg', 'King Khan <3', '911234567', 'shahrukhkhan.com'),
(8, 'Steve Jobs', 'steve.jpg', 'Apple Ceo', '989990001', 'stevejobs.com'),
(10, 'Bill Gates', 'bill.jpg', 'CEO Microsoft', '921345698', 'gatesfoundation.com'),
(11, 'Harry Potter', 'potter.jpg', 'Daniel Radiclife', '912345689', 'potterfans.com'),
(12, 'Lionel Messi', 'messi.jpg', 'Footaball Is Religion .  I am its God !', '17234152930', 'messifans.com'),
(13, 'Virat Kohli', 'kohli.jpg', 'All Rounder ', '4526789932', 'kohli.com'),
(14, 'Abc', 'b.jpg', 'a', 'wer', 'rwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_2` (`name`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
