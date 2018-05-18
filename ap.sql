-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2018 at 02:04 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ap`
--

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `busId` int(11) NOT NULL,
  `busName` varchar(60) NOT NULL,
  `busAddress` varchar(120) NOT NULL,
  `busType` varchar(80) NOT NULL,
  `busABN` varchar(60) DEFAULT NULL,
  `busEmail` varchar(80) DEFAULT NULL,
  `busContact` int(11) DEFAULT NULL,
  `busContactPerson` varchar(90) DEFAULT NULL,
  `busContactPersonRole` varchar(30) DEFAULT NULL,
  `busWebsite` varchar(90) DEFAULT NULL,
  `busSize` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`busId`, `busName`, `busAddress`, `busType`, `busABN`, `busEmail`, `busContact`, `busContactPerson`, `busContactPersonRole`, `busWebsite`, `busSize`) VALUES
(14, 'Jasmel Dhrirr', '502 Queen Street', 'Bakery', '3456777544', 'jass@gmail.com', 12457678, 'Jasmel ', 'Customer Relationship', '', 'Small'),
(19, 'rajesh IT', 'D/48 pooja park society NEW VIP road near Snehal press Vadodara', 'Bakery', '1475858', 'rgrgadhvi6@gmail.com', 1457894, 'Navdeep', 'Customer Relationship Officer', 'http://khush.com', 'Small'),
(20, 'khushdeep', '7 WASLEY', 'database management', '', 'RGRGADHVI6@GMAIL.COM', 52525252, '', '', '', 'Medium');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stuId` int(200) NOT NULL,
  `stuFirstName` varchar(100) NOT NULL,
  `stuLastName` varchar(100) NOT NULL,
  `parentName` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` int(100) NOT NULL,
  `stuContact` int(100) DEFAULT NULL,
  `age` int(100) NOT NULL,
  `schoolName` varchar(100) NOT NULL,
  `courseLevel` varchar(100) NOT NULL,
  `courseName` varchar(100) DEFAULT NULL,
  `schoolContact` int(100) DEFAULT NULL,
  `schoolLocation` varchar(400) DEFAULT NULL,
  `reasonOfDropout` varchar(500) NOT NULL,
  `flagged` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'rajesh', 'rgrgadhvi6@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'jasmel', 'jass123@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'anand', 'anand@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`busId`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stuId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `busId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stuId` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
