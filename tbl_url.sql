-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2021 at 11:37 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techmagnet`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_url`
--

CREATE TABLE `tbl_url` (
  `id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `category` varchar(2) NOT NULL,
  `value1` int(11) NOT NULL,
  `value2` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_url`
--

INSERT INTO `tbl_url` (`id`, `url`, `category`, `value1`, `value2`, `date`) VALUES
(1, 'www.google.com', 'A', 10, 20, '2021-01-01'),
(2, 'www.yahoo.com', 'B', 20, 30, '2021-01-01'),
(3, 'www.bing.com', 'C', 28, 40, '2021-01-01'),
(4, 'www.techmagnate.com', 'D', 20, 40, '2021-01-01'),
(5, 'www.google.com', 'A', 15, 25, '2021-02-01'),
(6, 'www.yahoo.com', 'B', 30, 40, '2021-02-01'),
(7, 'www.bing.com', 'C', 10, 20, '2021-02-01'),
(8, 'www.google.com', 'A', 18, 20, '2021-03-01'),
(9, 'www.yahoo.com', 'B', 32, 18, '2021-03-01'),
(10, 'www.bing.com', 'C', 12, 20, '2021-03-01'),
(11, 'www.yahoo.com', 'B', 35, 40, '2021-05-01'),
(12, 'www.google.com', 'A', 100, 120, '2021-04-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_url`
--
ALTER TABLE `tbl_url`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_url`
--
ALTER TABLE `tbl_url`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
