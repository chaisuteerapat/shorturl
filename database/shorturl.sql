-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 10:36 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shorturl`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `member_name` varchar(250) NOT NULL,
  `member_lname` varchar(250) NOT NULL,
  `member_user` varchar(100) NOT NULL,
  `member_password` varchar(150) NOT NULL,
  `member_status` varchar(2) NOT NULL DEFAULT 'A',
  `member_role` varchar(2) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_name`, `member_lname`, `member_user`, `member_password`, `member_status`, `member_role`) VALUES
(1, 'Admin', 'Shorturl', 'admin_shorturl', '389644c4df96a8c8360ac81ff4f12247', 'A', '1');

-- --------------------------------------------------------

--
-- Table structure for table `short_url`
--

CREATE TABLE `short_url` (
  `short_url_id` int(11) NOT NULL,
  `short_url_full` text NOT NULL,
  `short_url_short` varchar(250) NOT NULL,
  `short_url_fileqrcode` varchar(250) NOT NULL,
  `short_url_count` int(11) NOT NULL DEFAULT 0,
  `short_url_status` varchar(2) NOT NULL DEFAULT 'A',
  `short_url_datecreate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `short_url`
--

INSERT INTO `short_url` (`short_url_id`, `short_url_full`, `short_url_short`, `short_url_fileqrcode`, `short_url_count`, `short_url_status`, `short_url_datecreate`) VALUES
(5, 'google.co.th', 'R4Yx7xby', 'qrcode/676f6f676c652e636f2e7468.png', 2, 'A', '2021-07-26 23:35:49'),
(6, 'facebook.com', 'vbStf4Wy', 'qrcode/687474703a2f2f66616365626f6f6b2e636f6d.png', 1, 'A', '2021-07-26 23:43:22'),
(7, 'github.com', 'L7JfWZZW', 'qrcode/687474703a2f2f6769746875622e636f6d.png', 0, 'A', '2021-07-26 23:45:10'),
(8, 'https://www.google.com/', 'q5Vf2nrV', 'qrcode/68747470733a2f2f7777772e676f6f676c652e636f6d2f.png', 0, 'A', '2021-07-27 02:02:01'),
(9, 'https://www.w3schools.com/html/', 'RTV6j0Mz', 'qrcode/68747470733a2f2f7777772e77337363686f6f6c732e636f6d2f68746d6c2f.png', 0, 'A', '2021-07-27 02:21:57'),
(10, 'https://www.w3schools.com/css/', 'TS68gRQw', 'qrcode/68747470733a2f2f7777772e77337363686f6f6c732e636f6d2f6373732f.png', 0, 'A', '2021-07-27 02:22:47'),
(11, 'https://jquery.com/', 'HsZ0Dmny', 'qrcode/68747470733a2f2f6a71756572792e636f6d2f.png', 0, 'A', '2021-07-27 02:24:36'),
(12, 'https://www.youtube.com/', '2DYp0KjC', 'qrcode/68747470733a2f2f7777772e796f75747562652e636f6d2f.png', 0, 'A', '2021-07-27 02:26:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `short_url`
--
ALTER TABLE `short_url`
  ADD PRIMARY KEY (`short_url_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `short_url`
--
ALTER TABLE `short_url`
  MODIFY `short_url_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
