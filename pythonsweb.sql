-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 05:55 AM
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
(1, 5, 680),
(2, 6, 74),
(3, 7, 68),
(6, 8, 75),
(9, 2, 351),
(10, 3, 42),
(11, 4, 57),
(12, 9, 33),
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
  `id` smallint(3) UNSIGNED NOT NULL,
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
(3, 5, 'Lesson 2: Hello, World!', 'In lesson 2, you will learn to write your first program! The video will explain how, but basically you need to open up PyScripter and write the following: <code>print(\"Hello, World!\")</code>, and then hit the \"Run\" button up the top. Don\'t copy and paste this unless you really have to -- you\'ll learn much faster if you type it out yourself.', 'lesson2.mp4', 'small', 'video'),
(4, 5, 'Lesson 3: Variables and Console:', 'If you\'re watching this video, you should have already watched and understood videos 1 and 2. If you have -- congratulations on the completion of your first program! Now we will build on that program using things called <em>variables</em>, and take a closer look at the <em>console</em> (which you are already familiar with, even if you don\'t know it!)', 'lesson3.mp4', 'medium', 'video'),
(6, 5, 'Lesson 4: Functions and arguments', 'Now that you\'re onto your fourth lesson, this is where things should start to get interesting. With <em>functions</em>, you can use chunks of code more than once, to save having to type it out over and over again. <em>Arguments</em> take this one step further, allowing you to use the same \"chunks\" over and over again but with different variables each time. ', 'lesson4.mp4', 'medium', 'video'),
(14, 5, 'Lesson 5: Global and Local', 'This lesson is comparatively short, but covers a very important aspect of <em>functions</em> that is yet to be discussed. In brief, variables have what is known as a <em>scope</em>. The scope of a variable is the equivalent of context  in programming languages -- if the variable is out of scope, code can\'t understand it. Watch the video or read the Lesson 4 reference to find out more...', 'lesson5.mp4', 'medium', 'video'),
(15, 5, 'Lesson 6: Try/Except', 'Normally in programming, an error will halt the code and make it throw errors. This is a good thing, as it prevents your code from doing things you don\'t want it to. However, if you must run some code that may throw an error, you can use <em>try</em> and <em>except</em> to prevent the error from stopping the program entirely. Additionally, Python can tell you what went wrong, so that you can give the user some feedback or try an alternative approach.', 'lesson6.mp4', 'long', 'video'),
(16, 5, 'Lesson 7: Debugging and Spaghetti', 'This lesson aims to increase the efficiency of the time you spend programming. Debugging is the process of fixing code that, in doing precisely what you have <em>told it to do</em>, is not doing what you <em>want it to do.</em> While it can seem frustrating, it is also a learning experience. <em>Spaghetti code</em> is code which has been written in an illogical and inefficient manner, which makes the process of debugging far more difficult. Remember:<em> less Spaghetti --> less frustration!</em>', 'lesson7.mp4', 'medium', 'video'),
(17, 5, 'Lesson 8: Turtle Graphics', 'Up until now, all the programs you have written have communicated to the user through the console. In lesson 8, you will learn how to use a library of code, which is like a big collection of functions written by another programmer, called <em>Turtle Graphics Library.</em> While not the most impressive or modern, <em>Turtle</em> will allow you to draw on-screen with code. You will also learn how to access PyScripter\'s inbuilt collection of Turtle programs, which can create beautiful fractals and patterns with the use of functions.', 'lesson8.mp4', 'medium', 'video'),
(18, 9, '', '', 'lesson1_reference.png', 'medium', 'text'),
(19, 9, '', '', 'lesson2_reference.png', 'medium', 'text'),
(20, 9, 'Lesson 3 Reference: Variables and Console:', '<code>Usage: tracert [-d] [-h maximum_hops] [-j host-list] [-w timeout]<br>\r\n               [-R] [-S srcaddr] [-4] [-6] target_name<br>\r\n\r\nOptions:\r\n    -d                 Do not resolve addresses to hostnames.<br>\r\n    -h maximum_hops    Maximum number of hops to search for target.<br>\r\n    -j host-list       Loose source route along host-list (IPv4-only).<br>\r\n    -w timeout         Wait timeout milliseconds for each reply.<br>\r\n    -R                 Trace round-trip path (IPv6-only).<br>\r\n    -S srcaddr         Source address to use (IPv6-only).<br>\r\n    -4                 Force using IPv4.<br>\r\n    -6                 Force using IPv6.</code>', '', 'long', 'text'),
(21, 7, 'You\'re a tad early... Better than too late!', 'PythonsWeb is currently a website under development. Not all features are functional yet, so if things... well... explode, don\'t worry! Check back here soon for a guide on learning to program in Python!\r\n<br><br>\r\nIn the mean time, it can\'t hurt to create an account. You\'ll find the register page at register/login, up the top.', '', 'medium', 'text'),
(22, 7, '...What is this place?!?', 'Good question!<br><br> PythonsWeb aims to be a website where you can learn the basics of programming in Python, a computer language. PythonsWeb requires no prior knowledge, and is aimed at the beginner.', '', 'small', 'text'),
(23, 8, 'Who is this website aimed at?', 'PythonsWeb is aimed at anyone who would like to learn to program! You don\'t have to have any computer expertise. If you\'re a teacher, options are available to share content with your class quickly and easily.\\r\\n<br><br>What if you\'re at the other end of the python-skill spectrum? Well there\\\'s no harm in getting a refresher course of the basics. Or, if you really know what you\'re doing, you could <a href = \"mailto: help@pythonsweb.co.nz\">get in contact with us</a>.', '', 'long', 'text'),
(24, 7, 'PythonsWeb is almost done!', 'As you might have figured from the title, this website is almost complete. A few features need to be completed, and then it\'ll (theoretically) be plain-sailing!', '', 'small', 'text'),
(25, 6, 'Hosting and bandwidth cost money :/', 'Its\' a sad truth, but <em>you can help!</em> Click <a href=\"https://www.paypal.com\">here</a> for details!<br><br>Where does the money from donations go?<br><a href=\"https://doc.new\">Here</a> is a breakdown.', '', 'whole', 'text'),
(26, 7, 'This is a Newsflash:', '<p style=\\\"font-size: 2rem\\\">Fitter, happier</p><p style=\\\"font-size: 1rem\\\">More productive</p> <p style=\\\"font-size: 0.9rem\\\">Comfortable <br>Not drinking too much</p> <p style=\\\"font-size: 0.7rem\\\">Regular exercise at the gym, three days a week <br>Getting on better with your associate employee contemporaries<br> At ease, Eating well, no more microwave dinners and saturated fats <br>A patient, better driver, A safer car, baby smiling in back seat <br>Sleeping well, no bad dreams, No paranoia <br>Careful to all animals, never washing spiders down the plughole</p> <p style=\\\"font-size: 0.5rem\\\">Keep in contact with old friends, enjoy a drink now and then <br>Will frequently check credit at moral bank, hole in wall <br>Favours for favours, fond but not in love, <br>Charity standing orders on sundays, ring-road supermarket <br>No killing moths or putting boiling water on the ants <br>Car wash, also on sundays, no longer afraid of the dark or midday shadows, <br>Nothing so ridiculously teenage and desperate</p> <p style=\\\"font-size: 0.2rem\\\">Nothing so childish <br>At a better pace, slower and more calculated <br>No chance of escape Now self-employed Concerned, but powerless <br>An empowered and informed member of society, pragmatism not idealism <br>Will not cry in public, less chance of illness</p> <p style=\\\"font-size: 0.1rem\\\">Tires that grip in the wet, shot of baby strapped in backseat <br>A good memory Still cries at a good film Still kisses with saliva <br>No longer empty and frantic <br>Like a cat Tied to a stick</p> <p style=\\\"font-size: 0.05rem\\\">The ability to laugh at weakness <br>Calm, fitter, healthier and more productive <br>A pig in a cage on antibiotics</p>', '', 'large', 'text'),
(27, 3, 'To use this feature, you\'ll need an account.', 'Head over to <a href=\"http://localhost/PythonsWeb/php/index.php?page=2\">Register/Login</a> to make a new account, or sign into an existing one.', '', 'whole', 'text'),
(28, 8, 'A note on Ipsum', 'According to <a href=\"https://www.lipsum.com/\">www.lipsum.com/</a>, <br>\"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\"', '', 'medium', 'text'),
(29, 8, 'Beware, the altered Ipsum!', 'Many passages of Ipsum available on the internet have suffered alterations such as injected humor, or randomised words which don’t even <em>look</em> latin. To use a Lorem passage for a project, you should be confident there isn\'t anything hiding in the text that you don’t want. The Ipsum generator at <a href=\"https://www.lipsum.com/\">www.lipsum.com/</a> is free from such troubles.', '', 'medium', 'text');

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
  MODIFY `id` smallint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

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
