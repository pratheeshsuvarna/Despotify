-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 11:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `despotify`
--

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `Aid` int(11) NOT NULL,
  `Artist_name` varchar(200) NOT NULL,
  `DOB` date NOT NULL,
  `Bio` varchar(300) NOT NULL,
  `songs` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`Aid`, `Artist_name`, `DOB`, `Bio`, `songs`) VALUES
(1, 'Arjith Singh', '2004-02-04', 'Hindi Singer', 'Tum hi Ho,Zaroorat'),
(2, 'Sonu Nigam', '1990-06-13', 'Hindi Singer', 'Darshana,Believer,Tu meri'),
(3, 'Charlie Puth', '1999-06-09', 'English Singer', 'Let me Love you,Don\'t Let me down'),
(4, 'Justin Beiber', '2010-01-12', 'English Singer', 'Let me Love you,Believer'),
(5, 'Weekend', '1993-02-04', 'English Singer', 'Binding Lights,Don\'t Let me down'),
(6, 'Chandan Shetty', '1997-05-05', 'Kannad Rapper', '3 peg,Payana'),
(7, 'Gurukiran', '1980-06-08', 'Kannada Singer', 'Kanasu,Payana'),
(8, 'Arman Malik', '1990-05-20', 'Hindi Singer', 'Tum hi Ho,Darshana,Zaroorat'),
(9, 'Vijay Shankar', '1995-06-08', 'Kannada Singer', 'Rajakumara'),
(10, 'Shreya Goshal', '1985-06-16', 'Hindi Singer', 'Akhiyan,Tu meri'),
(11, 'Neha kakkar', '1980-05-09', 'Hindi SInger', 'Akhiyan'),
(12, 'A. R. Rahman', '2022-03-11', 'Singer', 'Vande Mataram');

-- --------------------------------------------------------

--
-- Table structure for table `asrating`
--

CREATE TABLE `asrating` (
  `RASid` int(11) NOT NULL,
  `Sid` int(11) NOT NULL,
  `Aid` int(11) NOT NULL,
  `Ratings` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asrating`
--

INSERT INTO `asrating` (`RASid`, `Sid`, `Aid`, `Ratings`) VALUES
(1, 1, 1, 5),
(2, 1, 8, 5),
(3, 2, 5, 4),
(4, 3, 3, 3),
(5, 3, 4, 3),
(6, 4, 3, 3),
(7, 4, 5, 3),
(8, 5, 2, 4),
(9, 5, 8, 4),
(10, 6, 7, 2),
(11, 7, 1, 4),
(12, 7, 8, 4),
(13, 8, 6, 4),
(14, 9, 6, 4),
(15, 9, 7, 4),
(16, 10, 2, 3),
(17, 10, 4, 3),
(18, 11, 9, 2),
(20, 12, 10, 2),
(21, 12, 11, 2),
(22, 13, 2, 2),
(23, 13, 10, 2),
(24, 14, 12, 5);

-- --------------------------------------------------------

--
-- Table structure for table `list_song`
--

CREATE TABLE `list_song` (
  `Sid` int(11) NOT NULL,
  `sname` varchar(600) NOT NULL,
  `dor` date NOT NULL,
  `artwork` varchar(100) NOT NULL,
  `artists` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_song`
--

INSERT INTO `list_song` (`Sid`, `sname`, `dor`, `artwork`, `artists`) VALUES
(1, 'Tum hi Ho', '2002-03-04', 'art1.jpg', 'Arjith Singh,Arman Malik'),
(2, 'Binding Lights', '2022-04-29', 'art2.jpg', 'Weekend'),
(3, 'Let me Love you', '2005-02-04', 'art3.jpg', 'Charlie Puth,Justin Beiber'),
(4, 'Don\'t Let me down', '2022-03-11', 'art1.jpg', 'Charlie Puth,Weekend'),
(5, 'Darshana', '2022-04-22', 'art2.jpg', 'Sonu Nigam,Arman Malik'),
(6, 'Kanasu', '2022-05-06', 'art3.jpg', 'Gurukiran'),
(7, 'Zaroorat', '2022-05-05', 'art4.jpg', 'Arjith Singh,Arman Malik'),
(8, '3 peg', '2005-02-06', 'art4.jpg', 'Chandan Shetty'),
(9, 'Payana', '2006-04-05', 'art1.jpg', 'Chandan Shetty,Gurukiran'),
(10, 'Believer', '2021-11-11', 'art2.jpg', 'Sonu Nigam,Justin Beiber'),
(11, 'Rajakumara', '2022-05-05', 'art3.jpg', 'Vijay Shankar'),
(12, 'Akhiyan', '2022-07-09', 'art2.jpg', 'Shreya Goshal,Neha kakkar'),
(13, 'Tu meri', '2022-08-03', 'art4.jpg', 'Sonu Nigam,Shreya Goshal'),
(14, 'Vande Mataram', '2022-01-07', 'art1.jpg', 'A. R. Rahman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`Aid`);

--
-- Indexes for table `asrating`
--
ALTER TABLE `asrating`
  ADD PRIMARY KEY (`RASid`),
  ADD KEY `Aid` (`Aid`),
  ADD KEY `Sid` (`Sid`);

--
-- Indexes for table `list_song`
--
ALTER TABLE `list_song`
  ADD PRIMARY KEY (`Sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `Aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `asrating`
--
ALTER TABLE `asrating`
  MODIFY `RASid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `list_song`
--
ALTER TABLE `list_song`
  MODIFY `Sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `asrating`
--
ALTER TABLE `asrating`
  ADD CONSTRAINT `asrating_ibfk_1` FOREIGN KEY (`Aid`) REFERENCES `artists` (`Aid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asrating_ibfk_2` FOREIGN KEY (`Sid`) REFERENCES `list_song` (`Sid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
