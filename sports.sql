-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2023 at 07:27 PM
-- Server version: 8.0.32
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventinfo`
--

CREATE TABLE `eventinfo` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `eventname` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `loc` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `exp` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `eventinfo`
--

INSERT INTO `eventinfo` (`id`, `name`, `email`, `username`, `eventname`, `type`, `loc`, `date`, `exp`) VALUES
(6, 'Shrushti', 'shrup@gmail.com', 'shru4', 'Swimming Tournament ', 'Outdoors', 'Jodhpur, Rajasthan', '2023-06-25', ' National Level swimmer and also state level medalist.');

-- --------------------------------------------------------

--
-- Table structure for table `eventlist`
--

CREATE TABLE `eventlist` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `eligibility` varchar(200) NOT NULL,
  `location` varchar(50) NOT NULL,
  `lastdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `eventlist`
--

INSERT INTO `eventlist` (`id`, `name`, `date`, `type`, `description`, `eligibility`, `location`, `lastdate`) VALUES
(1, 'Swimming Tournament ', '2023-06-25', 'Outdoors', 'A Swimming tournament is being held at Jodhpur, Rajasthan. It is a State level tournament. Its a 3 days tournament and people willing to participate are required to fill the form by the last date mentioned.', 'Person must be under 35 years old to compete in this competition. \r\nPerson Should belong from Rajasthan only.', 'Jodhpur, Rajasthan', '2023-05-30'),
(2, 'Badminton Tournament ', '2023-06-12', 'Outdoors', 'A Badminton tournament is being held in Pune, Maharashtra. It is a National level tournament. Its a 2 days tournament and people willing to participate are required to fill the form by the last date mentioned.\r\nAlso they are required to come with their certificates of state level tournaments they participated in.', 'Person must be under 25 years old to compete in this competition. \r\n', 'Pune, Maharashtra', '2023-05-15'),
(3, 'Chess Match', '2023-07-12', 'Indoor', 'It is open level chess match, and anyone can participate in this match. \r\nParticipation fees of 200/- must be submitted before the match and the match is one day event.', 'As mentioned, it is open match and needs no specific eligibility criteria.', 'Udaipur, Rajasthan', '2023-05-25');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Id` int NOT NULL,
  `Name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `Name`, `gender`, `phone`, `email`, `username`, `password`) VALUES
(3, 'Krati', 'Female', '8007349872', 'krati@gmail.com', 'kratiii', 'kratimali'),
(4, 'Chetan Soni', 'Male', '8003877721', 'chetansoni@gmail.com', 'chetan', 'soni'),
(5, 'shriya', 'Female', '1234567890', 'shriya@yahoo.in', 'shriya', 'shriya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventinfo`
--
ALTER TABLE `eventinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventlist`
--
ALTER TABLE `eventlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eventinfo`
--
ALTER TABLE `eventinfo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `eventlist`
--
ALTER TABLE `eventlist`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
