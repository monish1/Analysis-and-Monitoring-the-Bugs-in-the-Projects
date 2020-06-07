-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2018 at 01:37 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbug`
--

CREATE TABLE `addbug` (
  `Project ID` int(5) NOT NULL,
  `Type of Bug` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addbug`
--

INSERT INTO `addbug` (`Project ID`, `Type of Bug`) VALUES
(555, 'logical error');

-- --------------------------------------------------------

--
-- Table structure for table `coderform`
--

CREATE TABLE `coderform` (
  `ID` int(5) NOT NULL,
  `Name` text NOT NULL,
  `Gender` text NOT NULL,
  `E-mail` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Date of Birth` date NOT NULL,
  `Age` int(3) NOT NULL,
  `Country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coderform`
--

INSERT INTO `coderform` (`ID`, `Name`, `Gender`, `E-mail`, `Password`, `Contact`, `Date of Birth`, `Age`, `Country`) VALUES
(100, 'rahul', 'M', 'rahuljackie007@gmail', '123456', '8861144991', '1997-09-08', 21, 'india'),
(123, 'deepak', 'M', 'deepak34@gmail.com', '246824', '4563218956', '1998-08-08', 20, 'india'),
(199, 'keerthana', 'F', 'keerthana12@gmail.co', '567890', '4561237892', '1998-09-05', 20, 'india'),
(777, 'bharath', 'M', 'bharath44@gmail.com', '789012', '8523697410', '1998-09-08', 20, 'pakistan'),
(999, 'kavya', 'F', 'kavya12@gmail.com', '234567', '5632147895', '1998-09-06', 20, 'srilanka');

-- --------------------------------------------------------

--
-- Table structure for table `finalizedproject`
--

CREATE TABLE `finalizedproject` (
  `Project ID` int(5) NOT NULL,
  `Project Name` text NOT NULL,
  `Where to Implement` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finalizedproject`
--

INSERT INTO `finalizedproject` (`Project ID`, `Project Name`, `Where to Implement`) VALUES
(555, 'bus', 'vehicle');

-- --------------------------------------------------------

--
-- Table structure for table `testerform`
--

CREATE TABLE `testerform` (
  `ID` int(5) NOT NULL,
  `Name` text NOT NULL,
  `Gender` text NOT NULL,
  `E-mail` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Date of Birth` date NOT NULL,
  `Age` int(3) NOT NULL,
  `Country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testerform`
--

INSERT INTO `testerform` (`ID`, `Name`, `Gender`, `E-mail`, `Password`, `Contact`, `Date of Birth`, `Age`, `Country`) VALUES
(101, 'astha', 'F', 'astharai75@gmail.com', '123456', '9108797976', '1998-12-03', 20, 'america'),
(234, 'shamanth', 'M', 'shamanth69@gmail.com', '864286', '4123658742', '1997-08-06', 21, 'india'),
(333, 'sushma', 'F', 'sushma23@gmail.com', '345678', '4269785462', '1997-08-06', 21, 'america'),
(666, 'bharathi', 'F', 'bharathi88@gmail.com', '678901', '5214796325', '1998-05-31', 20, 'pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `uploaddebuggedproject`
--

CREATE TABLE `uploaddebuggedproject` (
  `Project ID` int(5) NOT NULL,
  `Project Name` text NOT NULL,
  `Where to Implement` text NOT NULL,
  `File Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploaddebuggedproject`
--

INSERT INTO `uploaddebuggedproject` (`Project ID`, `Project Name`, `Where to Implement`, `File Name`) VALUES
(555, 'bus', 'vehicle', '12.txt');

-- --------------------------------------------------------

--
-- Table structure for table `uploadproject`
--

CREATE TABLE `uploadproject` (
  `Project ID` int(5) NOT NULL,
  `Project Name` text NOT NULL,
  `Where to Implement` text NOT NULL,
  `File Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploadproject`
--

INSERT INTO `uploadproject` (`Project ID`, `Project Name`, `Where to Implement`, `File Name`) VALUES
(555, 'bus', 'vehicle', '11.txt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbug`
--
ALTER TABLE `addbug`
  ADD PRIMARY KEY (`Project ID`);

--
-- Indexes for table `coderform`
--
ALTER TABLE `coderform`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `finalizedproject`
--
ALTER TABLE `finalizedproject`
  ADD PRIMARY KEY (`Project ID`);

--
-- Indexes for table `testerform`
--
ALTER TABLE `testerform`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `uploaddebuggedproject`
--
ALTER TABLE `uploaddebuggedproject`
  ADD PRIMARY KEY (`Project ID`);

--
-- Indexes for table `uploadproject`
--
ALTER TABLE `uploadproject`
  ADD PRIMARY KEY (`Project ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
