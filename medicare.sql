-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2021 at 03:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicare`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

CREATE TABLE `bloodbank` (
  `id` int(11) NOT NULL,
  `bgroup` varchar(500) NOT NULL,
  `amount` int(11) NOT NULL,
  `hospid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodbank`
--

INSERT INTO `bloodbank` (`id`, `bgroup`, `amount`, `hospid`) VALUES
(1, 'A', 200, 3),
(2, 'B', 400, 3),
(4, 'AB', 200, 3),
(5, 'O-', 200, 1),
(6, 'A', 300, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bloodrequest`
--

CREATE TABLE `bloodrequest` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `bgroup` varchar(20) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `hospid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `campdetails`
--

CREATE TABLE `campdetails` (
  `campid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(200) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campdetails`
--

INSERT INTO `campdetails` (`campid`, `name`, `location`, `contact`, `email`, `password`) VALUES
(1, 'Abc', 'Mumbai ', 9819, 'student@vit.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `campreg`
--

CREATE TABLE `campreg` (
  `campid` int(11) NOT NULL,
  `campname` varchar(100) NOT NULL,
  `orgname` varchar(100) NOT NULL,
  `campdes` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campreg`
--

INSERT INTO `campreg` (`campid`, `campname`, `orgname`, `campdes`, `date`, `email`, `location`, `contact`) VALUES
(1, 'cz', 'zxv', 'xzv', '2021-02-23', 'aa@12', 'sad', 11),
(1, 'asd', 'aas', 'aaa', '2021-02-22', 'aa@12', 'aa', 111),
(0, 'aa', 'aa', 'aa', '2021-02-28', 'aa@11', 'aa', 11);

-- --------------------------------------------------------

--
-- Table structure for table `docdetails`
--

CREATE TABLE `docdetails` (
  `docid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `special` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docdetails`
--

INSERT INTO `docdetails` (`docid`, `name`, `location`, `contact`, `special`, `email`, `password`) VALUES
(1, 'Dr.Rajkumar', 'Mumbai City', 9819, 'Heart', 'student@vit.com', '123'),
(2, 'Dr.Asal', 'Mumbai City', 9819, 'ENT', 'faculty@vit.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `doctordetails`
--

CREATE TABLE `doctordetails` (
  `docid` int(100) NOT NULL,
  `drname` varchar(200) NOT NULL,
  `contact` int(100) NOT NULL,
  `spec` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `conpassword` varchar(100) NOT NULL,
  `location1` varchar(250) NOT NULL,
  `location2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctordetails`
--

INSERT INTO `doctordetails` (`docid`, `drname`, `contact`, `spec`, `email`, `password`, `conpassword`, `location1`, `location2`) VALUES
(1, 'ade', 123123, 'scdsc', 'bhavik@ABC.MN', '1234', '1234', '19.1852645', '72.99761749999999'),
(2, 'haa', 1213, 'heart', 'faculty@vit.com', '321', '321', '19.0676994', '72.8952102');

-- --------------------------------------------------------

--
-- Table structure for table `donordetails`
--

CREATE TABLE `donordetails` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `contact` int(20) NOT NULL,
  `bgroup` varchar(500) NOT NULL,
  `hospid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donordetails`
--

INSERT INTO `donordetails` (`id`, `name`, `contact`, `bgroup`, `hospid`) VALUES
(1, 'donor1', 2147483647, 'A', 3),
(2, 'donor2', 2147483647, 'AB', 3),
(3, 'donor1', 2147483647, 'O+', 3),
(4, 'donor1', 2147483647, 'A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hospitaldetails`
--

CREATE TABLE `hospitaldetails` (
  `hospid` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `contact` int(200) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitaldetails`
--

INSERT INTO `hospitaldetails` (`hospid`, `name`, `location`, `contact`, `email`, `password`) VALUES
(1, 'Kohinor Hospital', 'Mumbai', 2147483647, 'harshalaardekar101@gmail.com', '1234'),
(2, 'Global Hospital', 'hospital1', 2147483647, 'harshalaardekar@gmail.com', '1234'),
(3, 'Appolo Hosipital', 'Mumbai', 9819, 'studentabc@vit.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `shopdetails`
--

CREATE TABLE `shopdetails` (
  `shopid` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopdetails`
--

INSERT INTO `shopdetails` (`shopid`, `name`, `location`, `contact`, `email`, `password`) VALUES
(1, 'Raja Medical', 'Mumbai', 123456789, 'harshalaardekar101@gmail.com', '1234'),
(2, 'Nobel Medical', 'Mumbai', 2147483647, 'harshalaardekar@gmail.com', '1234'),
(3, 'Fit Medical', 'Mumbai', 981911112, 'student@vit.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `userid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `location` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`userid`, `name`, `location`, `contact`, `email`, `password`) VALUES
(1, 'User', 'Mumbai City', 987654321, 'student@vit.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodbank`
--
ALTER TABLE `bloodbank`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hospitaldetails` (`hospid`);

--
-- Indexes for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `hospid` (`hospid`);

--
-- Indexes for table `campdetails`
--
ALTER TABLE `campdetails`
  ADD PRIMARY KEY (`campid`);

--
-- Indexes for table `campreg`
--
ALTER TABLE `campreg`
  ADD KEY `campid` (`campid`);

--
-- Indexes for table `docdetails`
--
ALTER TABLE `docdetails`
  ADD PRIMARY KEY (`docid`);

--
-- Indexes for table `donordetails`
--
ALTER TABLE `donordetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitaldetails`
--
ALTER TABLE `hospitaldetails`
  ADD PRIMARY KEY (`hospid`);

--
-- Indexes for table `shopdetails`
--
ALTER TABLE `shopdetails`
  ADD PRIMARY KEY (`shopid`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodbank`
--
ALTER TABLE `bloodbank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `campdetails`
--
ALTER TABLE `campdetails`
  MODIFY `campid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `docdetails`
--
ALTER TABLE `docdetails`
  MODIFY `docid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donordetails`
--
ALTER TABLE `donordetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hospitaldetails`
--
ALTER TABLE `hospitaldetails`
  MODIFY `hospid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shopdetails`
--
ALTER TABLE `shopdetails`
  MODIFY `shopid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bloodbank`
--
ALTER TABLE `bloodbank`
  ADD CONSTRAINT `hospitaldetails` FOREIGN KEY (`hospid`) REFERENCES `hospitaldetails` (`hospid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  ADD CONSTRAINT `bloodrequest_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `userdetails` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bloodrequest_ibfk_2` FOREIGN KEY (`hospid`) REFERENCES `hospitaldetails` (`hospid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
