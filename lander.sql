-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2019 at 03:00 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lander`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `custid` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `bday` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custid`, `firstname`, `middlename`, `lastname`, `email`, `password`, `bday`, `gender`, `type`) VALUES
(1, 'Mark', 'David', 'Ortega', 'mark@yahoo.com', '1234', '2025-12-20', 'Male', 'Admin'),
(2, 'TestMark', 'Tester', 'Testing', 'test@email.com', '1234', '2018-12-30', 'Male', 'Client'),
(3, 'Test2', 'Testing', 'Tester', 'test2@gmail.com', '12345', '2015-04-24', 'Female', 'Client'),
(4, 'NewTest', 'Newtes', 'Newton', 'newtest@email.com', '1234', '2022-12-31', 'Male', 'Client'),
(8, 'First', 'Middle', 'Last', 'first@email.com', '1234', '2020-01-31', 'Male', 'Client');

-- --------------------------------------------------------

--
-- Table structure for table `licenserenew`
--

CREATE TABLE `licenserenew` (
  `custid` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `licenseid` varchar(50) NOT NULL,
  `agency` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `licenserenew`
--

INSERT INTO `licenserenew` (`custid`, `firstname`, `middlename`, `lastname`, `email`, `gender`, `licenseid`, `agency`, `status`) VALUES
(2, 'TestMark', 'Tester', 'Testing', 'test@email.com', 'Male', 'G1512345678', 'G15', 'Approved'),
(3, 'First', 'Middle', 'Last', 'test@email.com', 'Female', 'G4587654321', 'G45', 'Denied');

-- --------------------------------------------------------

--
-- Table structure for table `newlicense`
--

CREATE TABLE `newlicense` (
  `custid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `bday` date NOT NULL,
  `address` text NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newlicense`
--

INSERT INTO `newlicense` (`custid`, `firstname`, `middlename`, `lastname`, `email`, `gender`, `bday`, `address`, `status`) VALUES
(7, 'First', 'Middle', 'Last', 'first@email.com', 'Male', '2015-11-30', 'Amoa, LLC', 'Denied');

-- --------------------------------------------------------

--
-- Table structure for table `vehiclerenew`
--

CREATE TABLE `vehiclerenew` (
  `custid` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `plateno` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehiclerenew`
--

INSERT INTO `vehiclerenew` (`custid`, `firstname`, `middlename`, `lastname`, `email`, `brand`, `model`, `plateno`, `status`) VALUES
(2, 'NewTest', 'Newtes', 'Newton', 'newtest@email.com', 'Jeep', '23D', 'ABC 123', 'Approved'),
(4, 'Mickey', 'Middle', 'Mouse', 'test@email.com', 'Jeep', '23D', 'GVX 2019', 'Denied'),
(5, 'First', 'Middle', 'Last', 'first@email.com', 'Ford', 'Ranger', 'ABC 123', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`custid`);

--
-- Indexes for table `licenserenew`
--
ALTER TABLE `licenserenew`
  ADD PRIMARY KEY (`custid`);

--
-- Indexes for table `newlicense`
--
ALTER TABLE `newlicense`
  ADD PRIMARY KEY (`custid`);

--
-- Indexes for table `vehiclerenew`
--
ALTER TABLE `vehiclerenew`
  ADD PRIMARY KEY (`custid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `custid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `licenserenew`
--
ALTER TABLE `licenserenew`
  MODIFY `custid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `newlicense`
--
ALTER TABLE `newlicense`
  MODIFY `custid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vehiclerenew`
--
ALTER TABLE `vehiclerenew`
  MODIFY `custid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
