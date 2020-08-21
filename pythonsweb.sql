-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2020 at 02:46 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

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
  `email` varchar(320) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `salt` varchar(16) NOT NULL,
  `perms` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `email`, `username`, `password`, `salt`, `perms`) VALUES
(3, 'theadmin@pythonsweb.co.nz', 'theadmin', '55bba9dcfcc701e9c60d7ab432c8cad151207f023315122a901016ced97d80d84417c1f65fac4bd1b1139bd7b0bc6d65bb8353e53db67a14f364ac80b5b4da80', '76298d7984ec32d6', 'admin'),
(4, 'notabot@user.com', 'first_user', 'b2deb5495242ada23797ff341978444b7d9d5bbb71e1b0b2663b09c3656573bc771fca3800b70ea4c7a6a6d7179af72ce2c45ddb9663b6a81e7d8eefd7474426', 'fa6f65998d4ab403', 'user'),
(5, 'the-two-dimensional@spaceship.hawkwind', 'theSecondUser', 'c98ec66ab0bfa41733d2ff9cfce6ac8ccee398647ce7514380e0b2100d56bd436c9ec2b5008f5ccd98c4471d40ce8c1a99b6b610f5336ee353169129bec558cf', 'ef4b82e96de88968', 'user'),
(6, 'digger1213@hotmail.com', 'digger1213', '033a482100831cdc916c1c7b0315cb96141a74256e01147cfe901322b0d7a7d6b10ad9508a14edfaf687d09793438a51f532826cc7a680a1984a6962674b708b', '5e0b3c93281348e9', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `texts`
--

CREATE TABLE `texts` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `pagenum` tinyint(5) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `size` enum('small','medium','large','long','whole','none') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `texts`
--

INSERT INTO `texts` (`id`, `pagenum`, `title`, `text`, `image`, `size`) VALUES
(1, 9, '', '', '', 'medium'),
(2, 9, '', '', '', 'medium'),
(3, 9, 'Lesson 3 Reference: Variables and Console:', '<code>Usage: tracert [-d] [-h maximum_hops] [-j host-list] [-w timeout]<br>\r\n               [-R] [-S srcaddr] [-4] [-6] target_name<br>\r\n\r\nOptions:\r\n    -d                 Do not resolve addresses to hostnames.<br>\r\n    -h maximum_hops    Maximum number of hops to search for target.<br>\r\n    -j host-list       Loose source route along host-list (IPv4-only).<br>\r\n    -w timeout         Wait timeout milliseconds for each reply.<br>\r\n    -R                 Trace round-trip path (IPv6-only).<br>\r\n    -S srcaddr         Source address to use (IPv6-only).<br>\r\n    -4                 Force using IPv4.<br>\r\n    -6                 Force using IPv6.</code>', '', 'long'),
(4, 7, 'You\'re Early!', 'PythonsWeb is currently a website under development. Not all features are functional yet, so if things... well... explode, don\'t worry! Check back here soon for a guide on learning to program in Python!\r\nIn the mean time, it can\'t hurt to create an account. You\'ll find the register page at register/login, up the top.', '', 'medium'),
(5, 7, 'What is PythonsWeb?', 'Good question! PythonsWeb aims to be a website where you can learn the basics of programming in Python, a computer language. PythonsWeb requires no prior knowledge, and is aimed at the beginner.', '', 'small'),
(6, 8, 'Who is PythonsWeb aimed at?', 'PythonsWeb is aimed at anyone who would like to learn to program! You don\'t have to have any computer expertise. If you\'re a teacher, options are available to share content with your class quickly and easily.\r\n<br><br>What if you\'re at the other end of the python-skill spectrum? Well there\'s no harm in getting a refresher course of the basics. Or, if you really know what you\'re doing, you could <a href = \"mailto: help@pythonsweb.co.nz\">get in contact with us</a>. ', '', 'long'),
(7, 7, 'PythonsWeb is almost done!', 'As you might have figured from the title, this website is almost complete. A few features need to be completed (search, share), and then it\'ll (theoretically) be plain-sailing!', '', 'small');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `pagenum` tinyint(5) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `size` enum('small','medium','large','long','whole','none','small') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `pagenum`, `title`, `link`, `text`, `size`) VALUES
(1, 5, 'Lesson 1: First Steps', 'lesson1.mp4', 'In the first lesson, you will install all that you will need to learn how to write Python. \r\nThe first requirement is to download the python interpreter itself. This will allow your computer to understand python. It can be found <a href=\"https://www.python.org/downloads/\">here</a>. The second thing you\'ll need is an IDE, or Integrated Development Environment. <a href=\"https://sourceforge.net/projects/pyscripter/\">This</a> will help you to write code quickly and accurately.', 'small'),
(2, 5, 'Lesson 2: Hello, World!', 'lesson2.mp4', 'In lesson 2, you will learn to write your first program! The video will explain how, but basically you need to open up PyScripter and write the following: <code>print(\"Hello, World!\")</code>, and then hit the \"Run\" button up the top. Don\'t copy and paste this unless you really have to -- you\'ll learn much faster if you type it out yourself.', 'small'),
(3, 5, 'Lesson 3: Variables and Console:', '', 'If you\'re watching this video, you should have already watched and understood videos 1 and 2. If you have -- congratulations on the completion of your first program! Now we will build on that program using things called <em>variables</em>, and take a closer look at the <em>console</em> (which you are already familiar with, even if you don\'t know it!)', 'medium'),
(4, 5, 'Lesson 4: Functions and arguments', 'lesson4.mp4', 'Now that you\'re onto you\'re fourth lesson, this is where things should start to get interesting. With <em>functions</em>, you can use chunks of code more than once, to save having to type it out over and over again. <em>Arguments</em> take this one step further, allowing you to use the same \"chunks\" over and over again but with different variables each time. ', 'medium'),
(5, 5, 'Lesson 5: Global and Local', 'lesson5.mp4', 'This lesson is comparatively short, but covers a very important aspect of <em>functions</em> that is yet to be discussed. In brief, variables have what is known as a <em>scope</em>. The scope of a variable is the equivalent of context  in programming languages -- if the variable is out of scope, code can\'t understand it. Watch the video or read the Lesson 4 reference to find out more...', 'medium'),
(6, 5, 'Lesson 6: Try/Except', 'lesson6.mov', 'Normally in programming, an error will halt the code and make it throw errors. This is a good thing, as it prevents your code from doing things you don\'t want it to. However, if you must run some code that may throw an error, you can use <em>try</em> and <em>except</em> to prevent the error from stopping the program entirely. Additionally, Python can tell you what went wrong, so that you can give the user some feedback or try an alternative approach.', 'long'),
(7, 5, 'Lesson 7: Debugging and Spaghetti', 'lesson7.mp4', 'This lesson aims to increase the efficiency of the time you spend programming. Debugging is the process of fixing code that, in doing precisely what you have <em>told it to do</em>, is not doing what you <em>want it to do.</em> While it can seem frustrating, it is also a learning experience. <em>Spaghetti code</em> is code which has been written in an illogical and inefficient manner, which makes the process of debugging far more difficult. Remember:<em> less Spaghetti --> less frustration!</em>', 'medium'),
(8, 5, 'Lesson 8: Turtle Graphics', 'lesson8.mp4', 'Up until now, all the programs you have written have communicated to the user through the console. In lesson 8, you will learn how to use a library of code, which is like a big collection of functions written by another programmer, called <em>Turtle Graphics Library.</em> While not the most impressive or modern, <em>Turtle</em> will allow you to draw on-screen with code. You will also learn how to access PyScripter\'s inbuilt collection of Turtle programs, which can create beautiful fractals and patterns with the use of functions.', 'medium');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `texts`
--
ALTER TABLE `texts`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
