-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2018 at 05:44 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moengage`
--

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `sno` int(11) NOT NULL,
  `head` varchar(500) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`sno`, `head`, `description`, `userid`) VALUES
(4, 'MAYANK', '<p>MAYANK ACCHA LADKA HAI&nbsp;</p>\r\n\r\n<p>SABKA SUNTA HAI</p>\r\n\r\n<p>KARTA APNA HAI</p>\r\n\r\n<p>PROJECT ME HELP KARTA HAI</p>\r\n', 3),
(5, 'MAYANK', '<p>MAYANK PHIR BHI ACCHA LADKA HAI</p>\r\n\r\n<p>MERA HUA TOH SACH ME KFC ME PARTY MILEGA ED KA MOENGAGE KA SABKA PARTY DEGA RE TERA BHAI</p>\r\n', 3),
(9, 'chandan', '<p>ddog ogrsorsg j[g r09gisr09 gri9i9 if0aer]0fi i0 aepdodf;kdf;;dfg zdft oerpodp</p>\r\n', 3),
(10, 'subbu', '<p>chandan</p>\r\n', 3),
(17, 'hello', '<p>we are from university of hyderabad</p>\r\n\r\n<p>we rock</p>\r\n\r\n<p>we play football</p>\r\n', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sno` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sno`, `name`, `email`, `pass`) VALUES
(1, 'Chandan', 'chandan@gmail.com', 'chandan'),
(3, 'subbu', 'subbu@gmail.com', 'subbu'),
(4, 'mayank', 'mayank@gmail.com', 'm'),
(5, 'sai', 'sai@gmail.com ', 'sa'),
(6, 'lakshmi', 'lakshmi@gmail.com', 'l');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
