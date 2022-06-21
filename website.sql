-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 05:31 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `MESSAGE` text NOT NULL,
  `LOGS` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`ID`, `NAME`, `MESSAGE`, `LOGS`) VALUES
(1, 'Karthik', ' Hi Friends', '2019-12-26 07:16:32'),
(2, 'Ragul', 'Hi Karthik', '2019-12-26 07:17:22'),
(3, 'Gokul', 'vanakam da mapla', '2019-12-26 09:32:34'),
(4, 'Ragul', 'vanga sir', '2019-12-26 09:34:41'),
(5, 'Karthik', 'vango vango', '2019-12-26 09:37:44'),
(6, 'Karthik', 'yanna pandiringa', '2019-12-26 09:41:35'),
(7, 'Ragul', 'super... irukom sir', '2019-12-26 09:43:51'),
(8, 'karthik', 'leave la yanna panninga sir ivolo nala ala kanum', '2019-12-26 09:44:31'),
(9, 'Gokul', 'ivolo nala vettiya thoongana da', '2019-12-26 09:45:04'),
(12, 'ganesh', 'welcom', '2019-12-26 10:18:03'),
(16, 'ganesh', 'hai ragul', '2019-12-26 10:32:10'),
(17, 'arun', 'Hi da', '2019-12-26 10:36:00'),
(18, 'arun', 'H r u', '2019-12-26 10:36:15'),
(19, 'arun', 'Yapdi irukinga', '2019-12-26 10:36:32'),
(20, 'ganesh', 'hi arun', '2019-12-26 10:36:45'),
(21, 'arun', 'hi da', '2019-12-26 23:14:10'),
(22, 'arun', 'oru replay varala', '2019-12-27 10:31:52'),
(23, 'arun', 'hi ', '2020-01-01 07:48:56'),
(24, 'ganesh', 'Anna university result vachi senjituda', '2020-02-01 08:46:42'),
(25, 'karthik', 'yappa da revaluvation paper varum', '2020-02-14 09:44:24'),
(26, 'pavims', 'Haiii', '2020-03-12 22:17:41'),
(27, 'pavims', 'Unaku lam velaya illaya', '2020-03-12 22:18:12'),
(28, 'arun', 'hi', '2020-03-12 22:18:14'),
(29, 'pavims', 'Adei...', '2020-03-12 22:18:22'),
(30, 'pavims', ' Ethuku', '2020-03-12 22:19:30');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `COMMENT` text NOT NULL,
  `LOGS` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`ID`, `NAME`, `COMMENT`, `LOGS`) VALUES
(1, 'ganesh', 'hi this is nice', '2019-12-25 02:38:32'),
(2, 'sam', 'This Blog is Usful', '2019-12-25 02:57:29'),
(3, 'ganesh', 'wow..super coments', '2019-12-25 03:07:25'),
(4, 'ganesh', 'ok nice topic', '2019-12-25 03:10:43'),
(6, 'ganesh', 'wow', '2019-12-25 03:30:22'),
(7, 'Kish', 'Wow super website', '2019-12-25 03:37:46'),
(8, 'raina', 'nice comments', '2019-12-25 08:42:41'),
(9, 'arun', 'sema topic', '2019-12-27 10:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `USERNAME` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL,
  `QUESTION` text NOT NULL,
  `ANSWER` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `NAME`, `USERNAME`, `EMAIL`, `PASSWORD`, `QUESTION`, `ANSWER`) VALUES
(2, 'Ragul', 'raina', 'rainaragul@gmail.com', '1234', 'What is your Pet?', 'cat'),
(4, 'Karthik', 'ganesh', 'gk8924768@gmail.com', '1234', 'What is your Fav Bike?', 'JAWA'),
(5, 'Arun', 'arun', 'arun@gmail.com', '1234', 'What is your Fav Color?', 'yellow'),
(6, 'Vikesh', 'vikesh', 'vikesh@gmail.com', '123', 'What is your Fav Pet Name?', 'vks'),
(7, 'Manikandan', 'manivirat', 'manikandantmlc@gmail.com', 'nandhinidevi', 'What is your Pet?', 'cat'),
(8, 'Kishore', 'Kish', 'kishore@gmail.com', '1234', 'What is your Fav Bike?', 'Royal'),
(9, 'karthik', 'karthik', 'kkarthikkarthik922@gmail.com', 'kart@0012', 'What is your Pet?', 'cat'),
(10, 'manikandan', 'mmkkmm', 'mani123@gmail.com', '1234', 'What is your Fav Color?', 'green'),
(11, 'pavi', 'pavithra', 'pavi@gmail.com', '1234', 'What is your Fav Bike?', 'yamaha'),
(12, 'Pavithra', 'pavims', 'mspavithra2307@gmail.com', 'Pavi$2307', 'What is your Pet?', 'Dog'),
(13, 'parthi', 'parthi', 'parthi123@gmail.com', '123456', 'What is your Pet?', 'dog');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD KEY `ID` (`ID`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
