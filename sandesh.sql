-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2016 at 05:36 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sandesh`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `id` int(11) NOT NULL,
  `make` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `colour` varchar(200) NOT NULL,
  `proposed` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `make`, `model`, `colour`, `proposed`) VALUES
(1, 'Gibson', 'RA-090', 'blue', '6,878'),
(2, 'Rouge strater', 'Acoustic guitar', 'grey', '11,464'),
(3, 'Mitchell ', 'MD100pk', 'light blue', '14,560'),
(4, 'Rouge strater', 'Electric guitar pack', 'dark red', '13,757'),
(5, 'Rouge ', 'RR100 Rocketeer', 'Dark Red', '8,024'),
(6, 'Yamaha', 'M30', 'Black', '40,000');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'sandesh', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `id` int(11) NOT NULL,
  `pdate` date NOT NULL,
  `ddate` int(200) NOT NULL,
  `qunty` varchar(200) NOT NULL,
  `cost` int(200) NOT NULL,
  `cname` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `pdate`, `ddate`, `qunty`, `cost`, `cname`) VALUES
(1, '2016-04-01', 0, '20', 200000, 'Jaguar'),
(2, '2016-04-04', 2016, '30', 130000, 'Lacquer'),
(3, '2016-04-14', 2016, '50', 1000000, 'Telecaster'),
(4, '2016-04-20', 2016, '5', 500000, 'Stratocaster'),
(5, '2016-04-24', 2016, '100', 200000, 'Telecaster'),
(6, '2016-04-26', 2016, '10', 200000, 'Telecaster'),
(7, '2016-05-06', 2016, '4', 60000, 'ram and sons ');

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE IF NOT EXISTS `table1` (
  `id` int(11) NOT NULL,
  `image1` varchar(500) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`id`, `image1`, `name`, `details`) VALUES
(1, 'img/1.jpg', 'Guitar brand: Gibson', ', Model: RA-090,  Colour: grey, Price: 6876'),
(2, 'img/2.jpg', 'Acoustic guitar', ', Model: RA-090,  Colour: grey, Price: 6876'),
(3, 'img/3.jpg', 'Electric guitar pack', ', Model: RA-090,  Colour: grey, Price:14,500 '),
(4, 'img/4.jpg', 'Guitar brand:Rouge', ', Model: RA-090,  Colour: blue, Price: 20000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
