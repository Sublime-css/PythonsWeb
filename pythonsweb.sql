-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 03:22 AM
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
(1, 5, 457),
(2, 6, 54),
(3, 7, 40),
(6, 8, 64),
(9, 2, 296),
(10, 3, 35),
(11, 4, 55),
(12, 9, 16);

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
(6, 'digger1213@hotmail.com', 'digger1213', '033a482100831cdc916c1c7b0315cb96141a74256e01147cfe901322b0d7a7d6b10ad9508a14edfaf687d09793438a51f532826cc7a680a1984a6962674b708b', '5e0b3c93281348e9', 'admin'),
(131, 'mahurangi@mac.com', 'VernD', '883e0e011677c6acc48e45a2d2643932c90568044b4604f8366dba13df1dd573acadc4c537d00d0faff057c3167336a6c35de16f3ed2c5bc1c422ac524450885', '0909e22492bccbbc', 'admin');

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
(1, 9, '', '', 'lesson1_reference.png', 'medium'),
(2, 9, '', '', 'lesson2_reference.png', 'medium'),
(3, 9, 'Lesson 3 Reference: Variables and Console:', '<code>Usage: tracert [-d] [-h maximum_hops] [-j host-list] [-w timeout]<br>\r\n               [-R] [-S srcaddr] [-4] [-6] target_name<br>\r\n\r\nOptions:\r\n    -d                 Do not resolve addresses to hostnames.<br>\r\n    -h maximum_hops    Maximum number of hops to search for target.<br>\r\n    -j host-list       Loose source route along host-list (IPv4-only).<br>\r\n    -w timeout         Wait timeout milliseconds for each reply.<br>\r\n    -R                 Trace round-trip path (IPv6-only).<br>\r\n    -S srcaddr         Source address to use (IPv6-only).<br>\r\n    -4                 Force using IPv4.<br>\r\n    -6                 Force using IPv6.</code>', '', 'long'),
(4, 7, 'You\'re Early!', 'PythonsWeb is currently a website under development. Not all features are functional yet, so if things... well... explode, don\'t worry! Check back here soon for a guide on learning to program in Python!\r\nIn the mean time, it can\'t hurt to create an account. You\'ll find the register page at register/login, up the top.', '', 'medium'),
(5, 7, 'What is PythonsWeb?', 'Good question! PythonsWeb aims to be a website where you can learn the basics of programming in Python, a computer language. PythonsWeb requires no prior knowledge, and is aimed at the beginner.', '', 'small'),
(6, 8, 'Who is PythonsWeb aimed at?', 'PythonsWeb is aimed at anyone who would like to learn to program! You don\'t have to have any computer expertise. If you\'re a teacher, options are available to share content with your class quickly and easily.\r\n<br><br>What if you\'re at the other end of the python-skill spectrum? Well there\'s no harm in getting a refresher course of the basics. Or, if you really know what you\'re doing, you could <a href = \"mailto: help@pythonsweb.co.nz\">get in contact with us</a>. ', '', 'long'),
(7, 7, 'PythonsWeb is almost done!', 'As you might have figured from the title, this website is almost complete. A few features need to be completed (search, share), and then it\'ll (theoretically) be plain-sailing!', '', 'small'),
(8, 6, 'Hosting and bandwidth cost money :/', 'Its\' a sad truth, but <em>you can help!</em>. Click <a href=\"https://www.paypal.com\">here</a> for details!\r\n\r\nWhere does the money from donations go?\r\n<a href=\"https://doc.new\">here</a> is a breakdown.', '', 'whole'),
(11, 7, 'This is a Newsflash:', '<p style=\"font-size: 2rem\">Fitter, happier</p>\r\n<p style=\"font-size: 1rem\">More productive</p>\r\n<p style=\"font-size: 0.9rem\">Comfortable<br>\r\nNot drinking too much</p>\r\n<p style=\"font-size: 0.7rem\">Regular exercise at the gym, three days a week\r\nGetting on better with your associate employee contemporaries\r\nAt ease\r\nEating well, no more microwave dinners and saturated fats\r\nA patient, better driver\r\nA safer car, baby smiling in back seat\r\nSleeping well, no bad dreams\r\nNo paranoia\r\nCareful to all animals, never washing spiders down the plughole</p>\r\n<p style=\"font-size: 0.5rem\">Keep in contact with old friends, enjoy a drink now and then\r\nWill frequently check credit at moral bank, hole in wall\r\nFavours for favours, fond but not in love\r\nCharity standing orders on sundays, ring-road supermarket\r\nNo killing moths or putting boiling water on the ants\r\nCar wash, also on sundays\r\nNo longer afraid of the dark or midday shadows, nothing so ridiculously teenage and desperate</p>\r\n<p style=\"font-size: 0.2rem\">Nothing so childish\r\nAt a better pace, slower and more calculated\r\nNo chance of escape\r\nNow self-employed\r\nConcerned, but powerless\r\nAn empowered and informed member of societ, pragmatism not idealism\r\nWill not cry in public\r\nLess chance of illness</p>\r\n<p style=\"font-size: 0.1rem\">Tires that grip in the wet, shot of baby strapped in backseat\r\nA good memory\r\nStill cries at a good film\r\nStill kisses with saliva\r\nNo longer empty and frantic\r\nLike a cat\r\nTied to a stick</p>\r\n<p style=\"font-size: 0.05rem\">The ability to laugh at weakness\r\nCalm, fitter, healthier and more productive\r\nA pig in a cage on antibiotics</p>', '', 'large'),
(13, 3, 'To use this feature, you\'ll need an account.', 'Head over to <a href=\"http://localhost/PythonsWeb/php/index.php?page=2\">Register/Login</a> to make a new account, or sign into an existing one.', '', 'whole'),
(14, 8, 'A note on Ipsum', 'According to <a href=\"https://www.lipsum.com/\">www.lipsum.com/</a>, <br>\"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\"', '', 'medium'),
(15, 8, 'Beware, the altered Ipsum!', 'Many passages of Ipsum available on the internet have suffered alterations such as injected humor, or randomised words which don’t even <em>look</em> latin. To use a Lorem passage for a project, you should be confident there isn\'t anything hiding in the text that you don’t want. The Ipsum generator at <a href=\"https://www.lipsum.com/\">www.lipsum.com/</a> is free from such troubles.', '', 'medium');

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
(3, 5, 'Lesson 3: Variables and Console:', 'lesson3.mp4', 'If you\'re watching this video, you should have already watched and understood videos 1 and 2. If you have -- congratulations on the completion of your first program! Now we will build on that program using things called <em>variables</em>, and take a closer look at the <em>console</em> (which you are already familiar with, even if you don\'t know it!)', 'medium'),
(4, 5, 'Lesson 4: Functions and arguments', 'lesson4.mp4', 'Now that you\'re onto you\'re fourth lesson, this is where things should start to get interesting. With <em>functions</em>, you can use chunks of code more than once, to save having to type it out over and over again. <em>Arguments</em> take this one step further, allowing you to use the same \"chunks\" over and over again but with different variables each time. ', 'medium'),
(5, 5, 'Lesson 5: Global and Local', 'lesson5.mp4', 'This lesson is comparatively short, but covers a very important aspect of <em>functions</em> that is yet to be discussed. In brief, variables have what is known as a <em>scope</em>. The scope of a variable is the equivalent of context  in programming languages -- if the variable is out of scope, code can\'t understand it. Watch the video or read the Lesson 4 reference to find out more...', 'medium'),
(6, 5, 'Lesson 6: Try/Except', 'lesson6.mov', 'Normally in programming, an error will halt the code and make it throw errors. This is a good thing, as it prevents your code from doing things you don\'t want it to. However, if you must run some code that may throw an error, you can use <em>try</em> and <em>except</em> to prevent the error from stopping the program entirely. Additionally, Python can tell you what went wrong, so that you can give the user some feedback or try an alternative approach.', 'long'),
(7, 5, 'Lesson 7: Debugging and Spaghetti', 'lesson7.mp4', 'This lesson aims to increase the efficiency of the time you spend programming. Debugging is the process of fixing code that, in doing precisely what you have <em>told it to do</em>, is not doing what you <em>want it to do.</em> While it can seem frustrating, it is also a learning experience. <em>Spaghetti code</em> is code which has been written in an illogical and inefficient manner, which makes the process of debugging far more difficult. Remember:<em> less Spaghetti --> less frustration!</em>', 'medium'),
(8, 5, 'Lesson 8: Turtle Graphics', 'lesson8.mp4', 'Up until now, all the programs you have written have communicated to the user through the console. In lesson 8, you will learn how to use a library of code, which is like a big collection of functions written by another programmer, called <em>Turtle Graphics Library.</em> While not the most impressive or modern, <em>Turtle</em> will allow you to draw on-screen with code. You will also learn how to access PyScripter\'s inbuilt collection of Turtle programs, which can create beautiful fractals and patterns with the use of functions.', 'medium');

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
-- AUTO_INCREMENT for table `analytics`
--
ALTER TABLE `analytics`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `texts`
--
ALTER TABLE `texts`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
