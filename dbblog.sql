-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2017 at 04:14 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbblog`
--

CREATE TABLE `tbblog` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tag` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbblog`
--

INSERT INTO `tbblog` (`id`, `judul`, `isi`, `waktu`, `tag`) VALUES
(1, 'pertma', 'isi pertama', '2017-04-30 08:37:45', 'jaringan'),
(2, 'kedua', 'isi kedua', '2017-04-30 08:37:45', 'linux'),
(3, 'ketiga ', 'isi ketiga', '2017-04-30 08:39:00', 'komputer'),
(4, 'na', 'iko', '2017-05-04 04:35:21', 'iso');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbblog`
--
ALTER TABLE `tbblog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbblog`
--
ALTER TABLE `tbblog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
