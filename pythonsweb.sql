-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 06:06 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

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
-- Table structure for table `analytics`
--

CREATE TABLE `analytics` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `pagenum` tinyint(3) UNSIGNED NOT NULL,
  `hits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `analytics`
--

INSERT INTO `analytics` (`id`, `pagenum`, `hits`) VALUES
(1, 5, 661),
(2, 6, 68),
(3, 7, 44),
(6, 8, 67),
(9, 2, 346),
(10, 3, 40),
(11, 4, 57),
(12, 9, 18),
(13, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` int(10) UNSIGNED NOT NULL,
  `email` varchar(320) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `salt` varchar(16) NOT NULL,
  `perms` enum('user','admin') NOT NULL,
  `pepperID` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1 unless pepper value is lost, which will force the creation of a new pepper value.',
  `date` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Timestamp to aid in pepper recovery in an emergency.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `email`, `username`, `password`, `salt`, `perms`, `pepperID`, `date`) VALUES
(3, 'theadmin@pythonsweb.co.nz', 'theadmin', '268b1091d19cba0417c0df507f6d3d0028ddcc67471c0d07658f1904a2149839ba5a552973f771a5dc9d5d569929198e1d224873054b80dbbecab30d8f9bf07d', '76298d7984ec32d6', 'admin', 1, '2020-11-09 03:09:41'),
(4, 'notabot@user.com', 'first_user', '519b949ca94daf55f3e4570ff1fc3cdbce142411b66621b029348a75894d7b00c1b8cf9ad1f88ec119f49a57af32a05941ba6d656f2e61ea160ea858419b7e51', 'fa6f65998d4ab403', 'user', 1, '2020-11-09 03:09:41'),
(5, 'the-two-dimensional@spaceship.hawkwind', 'theSecondUser', 'cf33fddb5a35e6a7475697f57217f557307b12d956ac2449b07090fab328fcadb810270dce8fec67986d946759be25656760818e8b995c1060e62c754e500aea', 'ef4b82e96de88968', 'user', 1, '2020-11-09 03:09:41'),
(6, 'digger1213@hotmail.com', 'digger1213', 'ed7d9a0f9cfbaa28ff9c04b49f6a4a014e579ac8b236befbe5633892f21adc46d5c3f4b0fd3e39decfe536fbaf6029a51939d17ef3d085112e41efcdee1ab564', '5e0b3c93281348e9', 'admin', 1, '2020-11-09 03:09:41'),
(131, 'mahurangi@mac.com', 'VernD', '883e0e011677c6acc48e45a2d2643932c90568044b4604f8366dba13df1dd573acadc4c537d00d0faff057c3167336a6c35de16f3ed2c5bc1c422ac524450885', '0909e22492bccbbc', 'admin', 1, '2020-11-09 03:09:41');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `pagenum` tinyint(3) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `url` varchar(100) NOT NULL,
  `size` enum('small','medium','large','long','whole','none','small') NOT NULL,
  `display` enum('video','text') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `pagenum`, `title`, `text`, `url`, `size`, `display`) VALUES
(1, 5, 'Lesson 1: First Steps', 'In the first lesson, you will install all that you will need to learn how to write Python. \r\nThe first requirement is to download the python interpreter itself. This will allow your computer to understand python. It can be found <a href=\"https://www.python.org/downloads/\">here</a>. The second thing you\'ll need is an IDE, or Integrated Development Environment. <a href=\"https://sourceforge.net/projects/pyscripter/\">This</a> will help you to write code quickly and accurately.', 'lesson1.mp4', 'small', 'video'),
(3, 5, '', '', 'lesson2.mp4', 'small', 'video'),
(4, 5, 'Lesson 3: Variables and Console:', 'If you\'re watching this video, you should have already watched and understood videos 1 and 2. If you have -- congratulations on the completion of your first program! Now we will build on that program using things called <em>variables</em>, and take a closer look at the <em>console</em> (which you are already familiar with, even if you don\'t know it!)', 'lesson3.mp4', 'medium', 'video'),
(6, 5, 'Lesson 4: Functions and arguments', 'Now that you\'re onto your fourth lesson, this is where things should start to get interesting. With <em>functions</em>, you can use chunks of code more than once, to save having to type it out over and over again. <em>Arguments</em> take this one step further, allowing you to use the same \"chunks\" over and over again but with different variables each time. ', 'lesson4.mp4', 'medium', 'text');

-- --------------------------------------------------------

--
-- Table structure for table `pepper`
--

CREATE TABLE `pepper` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `url` varchar(100) NOT NULL,
  `pepper_index` tinyint(3) UNSIGNED NOT NULL COMMENT '`index` is reserved by MySQLi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pepper`
--

INSERT INTO `pepper` (`id`, `url`, `pepper_index`) VALUES
(1, 'config.yaml', 30),
(2, 'pepper', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analytics`
--
ALTER TABLE `analytics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pagenum` (`pagenum`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `pepperID` (`pepperID`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pagenum` (`pagenum`);

--
-- Indexes for table `pepper`
--
ALTER TABLE `pepper`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analytics`
--
ALTER TABLE `analytics`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pepper`
--
ALTER TABLE `pepper`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`pepperID`) REFERENCES `pepper` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`pagenum`) REFERENCES `analytics` (`pagenum`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
