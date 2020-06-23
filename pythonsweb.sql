-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 03:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pythonsweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` int(10) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `perms` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `username`, `password`, `perms`) VALUES
(3, '1a52e4fbe55b2dbe38d47d0b701d31b9d500db84f2e9bdfbb41c2d48d91a0bf2', 'd0b5b824f9412b734ab74684fe79834efdebf9976328399d8ceb8c3e734f3c5a', 'admin'),
(4, '7ffdb4c63d93be783cf6e02077b1e304daaac2fc36cb7559a21f52571eedb3b7', '08c70c5cb9c8541201ec6d09e907ffeebe04dbe9f12dff9168b15a0bb1a1f4c9', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` smallint(6) NOT NULL,
  `pagenum` smallint(6) NOT NULL,
  `video1` varchar(100) NOT NULL,
  `video2` varchar(100) NOT NULL,
  `video3` varchar(100) NOT NULL,
  `video4` varchar(100) NOT NULL,
  `video5` varchar(100) NOT NULL,
  `video6` varchar(100) NOT NULL,
  `video7` varchar(100) NOT NULL,
  `video8` varchar(100) NOT NULL,
  `heading1` varchar(150) NOT NULL,
  `heading2` varchar(150) NOT NULL,
  `heading3` varchar(150) NOT NULL,
  `heading4` varchar(150) NOT NULL,
  `heading5` varchar(150) NOT NULL,
  `heading6` varchar(150) NOT NULL,
  `heading7` varchar(150) NOT NULL,
  `heading8` varchar(150) NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL,
  `text3` text NOT NULL,
  `text4` text NOT NULL,
  `text5` text NOT NULL,
  `text6` text NOT NULL,
  `text7` text NOT NULL,
  `text8` text NOT NULL,
  `size1` varchar(6) NOT NULL,
  `size2` varchar(6) NOT NULL,
  `size3` varchar(6) NOT NULL,
  `size4` varchar(6) NOT NULL,
  `size5` varchar(6) NOT NULL,
  `size6` varchar(6) NOT NULL,
  `size7` varchar(6) NOT NULL,
  `size8` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `pagenum`, `video1`, `video2`, `video3`, `video4`, `video5`, `video6`, `video7`, `video8`, `heading1`, `heading2`, `heading3`, `heading4`, `heading5`, `heading6`, `heading7`, `heading8`, `text1`, `text2`, `text3`, `text4`, `text5`, `text6`, `text7`, `text8`, `size1`, `size2`, `size3`, `size4`, `size5`, `size6`, `size7`, `size8`) VALUES
(23, 5, 'testing, ', 'testing, testing', 'and more testing', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'small', 'small', 'small', 'small', 'small', 'small', 'small', 'small'),
(26, 6, 'the new stuff', 'plz no die', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'small', 'small', 'small', 'small', 'small', 'small', 'small', 'small'),
(27, 7, 'whoops i broke the syntax with a quote', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'small', 'small', 'small', 'small', 'small', 'small', 'small', 'small'),
(30, 9, 'why no work?!? is only gmaek', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'small', 'small', 'small', 'small', 'small', 'small', 'small', 'small'),
(31, 10, 'why no work?!? is only gmaek', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'small', 'small', 'small', 'small', 'small', 'small', 'small', 'small'),
(36, 1, '<script> Sneeki</script>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none'),
(37, 2, 'you can hack the website with a <script> bad stuff in here</script> or sql injection <?php ?>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none'),
(38, 3, '', '', '<', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pagenum` (`pagenum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
