-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2020 at 11:28 AM
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
-- Database: `pythonsweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `headings`
--

CREATE TABLE `headings` (
  `id` smallint(6) UNSIGNED NOT NULL,
  `heading1` varchar(100) NOT NULL,
  `heading2` varchar(100) NOT NULL,
  `heading3` varchar(100) NOT NULL,
  `heading4` varchar(100) NOT NULL,
  `heading5` varchar(100) NOT NULL,
  `heading6` varchar(100) NOT NULL,
  `heading7` varchar(100) NOT NULL,
  `heading8` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `headings`
--

INSERT INTO `headings` (`id`, `heading1`, `heading2`, `heading3`, `heading4`, `heading5`, `heading6`, `heading7`, `heading8`) VALUES
(47, '`the first heading`', 'No.2', 'Etc, etc', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` int(6) UNSIGNED NOT NULL,
  `email` varchar(320) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `perms` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `email`, `username`, `password`, `perms`) VALUES
(3, '', '1a52e4fbe55b2dbe38d47d0b701d31b9d500db84f2e9bdfbb41c2d48d91a0bf2', 'd0b5b824f9412b734ab74684fe79834efdebf9976328399d8ceb8c3e734f3c5a', 'admin'),
(4, '', '7ffdb4c63d93be783cf6e02077b1e304daaac2fc36cb7559a21f52571eedb3b7', '08c70c5cb9c8541201ec6d09e907ffeebe04dbe9f12dff9168b15a0bb1a1f4c9', 'user'),
(5, '', 'd111116a3794f8d7a83dbe6823d6dbaa45b7ac7d2c5a921669b39ed37e5c8de1', '6c9f4759019149864d7122e576ecbb1dfca655d86d8196f245625d4d6537c601', 'admin'),
(6, '', '71567e5cdd6632b40da8e3bb32a171c207ac41f558c07bc441d0aaf44fb749d3', '4e38732a9c6bd672326c6a59d55e3c3cff48d42ef7ae909e06a16e256b0b2186', 'user'),
(7, 'lukaalexander01@gmail.com', '467d41a814c81b5ac217f7a3855f743d55b178415fd5c06681dfd2c760788426', '8a798890fe93817163b10b5f7bd2ca4d25d84c52739a645a889c173eee7d9d3d', 'user'),
(13, 'new@old.yes', '101a07e5f182ba079644cac91eff0a8586945de26c519ad0736147a74094e275', 'fad900280ce54a04da3b698f1a7783717b466fedd3ded41fe5fc5a3686f1b180', 'user'),
(78, '', '', '', 'user'),
(79, '', '', '', 'user'),
(80, '', '', '', 'user'),
(81, '', '', '', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` smallint(6) UNSIGNED NOT NULL,
  `pagenum` tinyint(6) UNSIGNED NOT NULL,
  `display` enum('text','video','login','share','search') NOT NULL DEFAULT 'text'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `pagenum`, `display`) VALUES
(47, 5, 'video');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` smallint(6) UNSIGNED NOT NULL,
  `size1` enum('invisible','small','medium','large','long','whole page') NOT NULL,
  `size2` enum('invisible','small','medium','large','long','whole page') NOT NULL,
  `size3` enum('invisible','small','medium','large','long','whole page') NOT NULL,
  `size4` enum('invisible','small','medium','large','long','whole page') NOT NULL,
  `size5` enum('invisible','small','medium','large','long','whole page') NOT NULL,
  `size6` enum('invisible','small','medium','large','long','whole page') NOT NULL,
  `size7` enum('invisible','small','medium','large','long','whole page') NOT NULL,
  `size8` enum('invisible','small','medium','large','long','whole page') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size1`, `size2`, `size3`, `size4`, `size5`, `size6`, `size7`, `size8`) VALUES
(47, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `texts`
--

CREATE TABLE `texts` (
  `id` smallint(6) UNSIGNED NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL,
  `text3` text NOT NULL,
  `text4` text NOT NULL,
  `text5` text NOT NULL,
  `text6` text NOT NULL,
  `text7` text NOT NULL,
  `text8` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `texts`
--

INSERT INTO `texts` (`id`, `text1`, `text2`, `text3`, `text4`, `text5`, `text6`, `text7`, `text8`) VALUES
(47, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` smallint(6) UNSIGNED NOT NULL,
  `video1` varchar(100) NOT NULL,
  `video2` varchar(100) NOT NULL,
  `video3` varchar(100) NOT NULL,
  `video4` varchar(100) NOT NULL,
  `video5` varchar(100) NOT NULL,
  `video6` varchar(100) NOT NULL,
  `video7` varchar(100) NOT NULL,
  `video8` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video1`, `video2`, `video3`, `video4`, `video5`, `video6`, `video7`, `video8`) VALUES
(47, 'test', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `videos2`
--

CREATE TABLE `videos2` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos2`
--

INSERT INTO `videos2` (`id`, `title`, `link`, `text`) VALUES
(1, 'Lesson 1: First Steps', 'lesson1.mp4', 'In the first lesson, you will install all that you will need to learn how to write Python. \r\nThe first requirement is to download the python interpreter itself. This will allow your computer to understand python. It can be found <a href=\"https://www.python.org/downloads/\">here</a>. The second thing you\'ll need is an IDE, or Integrated Development Environment. <a href=\"https://sourceforge.net/projects/pyscripter/\">This</a> will help you to write code quickly and accurately.'),
(2, 'Lesson 2: Hello, World!', 'lesson2.mp4', 'In lesson 2, you will learn to write your first program! The video will explain how, but basically you need to open up PyScripter and write the following: <code>print(\"Hello, World!\")</code>, and then hit the \"Run\" button up the top. Don\'t copy and paste this unless you really have to -- you\'ll learn much faster if you type it out yourself.'),
(3, 'Lesson 3: Variables and console:', '', 'If you\'re watching this video, you should have already watched and understood videos 1 and 2. If you have -- congratulations on the completion of your first program! Now we will build on that program using things called <em>variables</em>, and take a closer look at the <em>console</em> (which you are already familiar with even if you don\'t know it!)'),
(4, 'Lesson 4: Functions and arguments', 'lesson4.mp4', 'Now that you\'re onto you\'re fourth lesson, this is where things should start to get interesting. With <em>functions</em>, you can use chunks of code more than once, to save having to type it out over and over again. <em>Arguments</em> take this one step further, allowing you to use the same \"chunks\" over and over again but with different variables each time. '),
(5, 'Lesson 5: Global and Local', 'lesson5.mp4', 'This lesson is comparatively short, but covers a very important aspect of <em>functions</em> that is yet to be discussed. In brief, variables have what is known as a <em>scope</em>. The scope of a variable is the equivalent of context  in programming languages -- if the variable is out of scope, code can\'t understand it. Watch the video or read the Lesson 4 reference to find out more...'),
(6, 'Lesson 6: Try/Except', 'lesson6.mov', 'Normally in programming, an error will halt the code and make it throw errors. This is a good thing, as it prevents your code from doing things you don\'t want it to. However, if you must run some code that may throw an error, you can use <em>try</em> and <em>except</em> to prevent the error from stopping the program entirely. Additionally, Python can tell you what went wrong, so that you can give the user some feedback or try an alternative approach.'),
(7, 'Lesson 7: Debugging and Spaghetti', 'lesson7.mp4', 'This lesson aims to increase the efficiency of the time you spend programming. Debugging is the process of fixing code that, in doing precisely what you have <em>told it to do</em>, is not doing what you <em>want it to do.</em> While it can seem frustrating, it is also a learning experience. <em>Spaghetti code</em> is code which has been written in an illogical and inefficient manner, which makes the process of debugging far more difficult. Remember:<em> less Spaghetti --> less frustration!</em>'),
(8, 'Lesson 8: Turtle Graphics', 'lesson8.mp4', 'Up until now, all the programs you have written have communicated to the user through the console. In lesson 8, you will learn how to use a library of code, which is like a big collection of functions written by another programmer, called <em>Turtle Graphics Library.</em> While not the most impressive or modern, <em>Turtle</em> will allow you to draw on-screen with code. You will also learn how to access PyScripter\'s inbuilt collection of Turtle programs, which can create beautiful fractals and patterns with the use of functions.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `headings`
--
ALTER TABLE `headings`
  ADD UNIQUE KEY `id` (`id`);

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
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `texts`
--
ALTER TABLE `texts`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `videos2`
--
ALTER TABLE `videos2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userid` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `videos2`
--
ALTER TABLE `videos2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
