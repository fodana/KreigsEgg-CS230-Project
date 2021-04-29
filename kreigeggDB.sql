-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 28, 2021 at 08:36 PM
-- Server version: 5.7.33-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kreigeggDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commid` int(11) NOT NULL,
  `lid` int(11) NOT NULL,
  `uname` varchar(80) NOT NULL,
  `commtext` text NOT NULL,
  `commdate` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `uname` varchar(80) NOT NULL,
  `Title` varchar(80) NOT NULL,
  `Description` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Price` int(11) NOT NULL,
  `lid` int(11) NOT NULL,
  `imagePath` varchar(50) NOT NULL,
  `tags` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`uname`, `Title`, `Description`, `Date`, `Price`, `lid`, `imagePath`, `tags`) VALUES
('COMPUTERCHAMP2', 'RTX 3090', 'jk its an egg', '2021-04-04 06:16:07', 1234, 21, 'listing-img/606959a772e1e3.99224221.png', 'tags:{ }'),
('COMPUTERCHAMP2', 'Pan CPU', '5Ghz no joke', '2021-04-04 06:19:37', 2000000, 22, 'listing-img/60695a79d65560.67922950.jpeg', 'tags:{ new; cpu; }'),
('testUser', 'RTX 1650', 'Used 1650 Card', '2021-04-04 18:05:25', 650, 23, 'listing-img/6069ffe6004ac8.46266812.jpg', 'tags:{ used; gpu; }'),
('testUser', 'RTX 1660', 'New 1660 card', '2021-04-04 18:05:49', 850, 24, 'listing-img/6069fffdeb68b6.40332968.jpg', 'tags:{ new; gpu; }'),
('testUser', 'RTX 2060', 'New RTX 2060, Stored in attic', '2021-04-04 18:06:24', 890, 25, 'listing-img/606a002092d739.29123304.jpg', 'tags:{ new; gpu; }'),
('testUser', 'Threadripper 3990x', '64 Core, 5.0Ghz clock', '2021-04-04 18:07:00', 4000, 26, 'listing-img/606a00442aab33.45898543.jpg', 'tags:{ new; cpu; }'),
('testUser', 'Gaming PC', 'Graphics: RTX 3080, CPU: I9-10900k, 16GB ddr4 3600hz ram', '2021-04-04 18:08:18', 3800, 27, 'listing-img/606a00922df375.36932401.jpg', 'tags:{ new; rig; }'),
('testUser', 'Used Gaming PC', 'GPU: RTX 3080, CPU Ryzen 9 5700x, 32Gb DDR4 ram', '2021-04-04 18:09:01', 3300, 28, 'listing-img/606a00bdc68fb9.11671780.jpg', 'tags:{ used; rig; }'),
('testUser', 'I7-10700k', 'Brand new CPU, 4.7Ghz', '2021-04-04 18:09:32', 720, 29, 'listing-img/606a00dca0b967.43645499.jpg', 'tags:{ new; cpu; }'),
('testUser', 'I9- 10900k', 'Slightly Used, 16 cores, 4.9Ghz', '2021-04-04 18:10:03', 880, 30, 'listing-img/606a00fbefed45.30122001.jpg', 'tags:{ used; cpu; }'),
('testUser', 'Ryzen 9 3950X', 'New CPU, 5Ghz', '2021-04-04 18:10:37', 680, 31, 'listing-img/606a011d453905.47172989.jpg', 'tags:{ new; cpu; }');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `mid` int(11) NOT NULL,
  `requester` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `pid` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `phnum` varchar(50) DEFAULT NULL,
  `profilepic` varchar(50) NOT NULL DEFAULT '../images/default.png',
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `SupportQuestions`
--

CREATE TABLE `SupportQuestions` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `question` text NOT NULL,
  `qid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `password` varchar(120) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phnum` varchar(14) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `profPic` varchar(120) NOT NULL DEFAULT 'profiles/default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `fname`, `lname`, `uname`, `password`, `email`, `phnum`, `admin`, `profPic`) VALUES
(1, 'testFirst', 'testLast', 'testUser', '$2y$10$Fo/VfyAxvEJ9EjEgtIaBZ.2Ya9fQq6NDz3uiJf8nRPOs1MDgxUfvu', 'test@email.com', '123-456-7890', 0, 'profiles/default.png'),
(2, 'newFirst', 'newLast', 'newUser', '$2y$10$c2RRUVHkhqWKDS0cZufovuWOHEm02/YgbRL6YyeIjL8x8X743b6H.', 'new@email.com', '123-123-1234', 0, 'profiles/default.png'),
(3, 'Jason', 'Gleba', 'COMPUTERCHAMP2', '$2y$10$2QVZgFF9D69iuOMO8gifdOLGx1as3zU3XzdZley.aS1YfioyG71Ki', 'computerman12@computerman.com', '7748031234', 0, 'profiles/default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commid`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `SupportQuestions`
--
ALTER TABLE `SupportQuestions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `SupportQuestions`
--
ALTER TABLE `SupportQuestions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
