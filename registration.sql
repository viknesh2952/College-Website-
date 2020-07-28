-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2020 at 10:05 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dr.sacoe`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(15) NOT NULL,
  `userid` text NOT NULL,
  `passid` text NOT NULL,
  `username` text NOT NULL,
  `address` text NOT NULL,
  `country` text NOT NULL,
  `zip` text NOT NULL,
  `email` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `userid`, `passid`, `username`, `address`, `country`, `zip`, `email`, `description`) VALUES
(18, 'vikki2952', 'sRNwI5dgKttyzQ==', 'viknesh', 'alwar', 'DZ', '628612', 'smileyviknesh007@gmail.com', 'BE student'),
(19, 'ponram38', 'oAp3Op1kKdB0', 'ponram', 'ponram123', 'DZ', '628655', 'ponram2503@gmail.com', 'imok'),
(20, 'surya59', 'oxBrMZ1weYYmiQ==', 'surya', 'tcr', 'AL', '651613', 'surya002@gmail.com', 'im so cool'),
(21, 'vikki123', 'pgxyI5U4KtE=', 'viknesh', 'alwar', 'DZ', '628612', 'a@gmil.com', 'iam so cool'),
(23, 'test123', 'pABqPM07Kw==', 'testname', 'bdfdfkjnbs', 'AL', '628612', 'test123@gmail.com', 'sgreg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `userid` (`userid`(768)),
  ADD KEY `passid` (`passid`(768));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
