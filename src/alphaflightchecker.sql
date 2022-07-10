-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 01:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alphaflightchecker`
--

-- --------------------------------------------------------

--
-- Table structure for table `airplane`
--

CREATE TABLE `airplane` (
  `AirplaneID` int(5) NOT NULL,
  `Make` varchar(20) DEFAULT NULL,
  `Model` varchar(20) DEFAULT NULL,
  `YearMade` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airplane`
--

INSERT INTO `airplane` (`AirplaneID`, `Make`, `Model`, `YearMade`) VALUES
(22396, 'Boeing', '747-800', 2019),
(34201, 'Airbus', 'A320', 2019),
(34490, 'Boeing', '767-300F', 2016),
(34662, 'Airbus', 'A319', 2018),
(43770, 'Airbus', 'A321', 2018),
(52211, 'Embraer', 'E190', 2019),
(73400, 'Boeing', '747-400F', 2018),
(82969, 'Boeing', '757-200', 2019),
(88834, 'Embraer', 'E175', 2018),
(92001, 'Cessna', 'C208B', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `FlightNo` int(5) NOT NULL,
  `Origin` varchar(50) DEFAULT NULL,
  `Destination` varchar(50) DEFAULT NULL,
  `FlightDate` char(10) DEFAULT NULL,
  `DepTime` char(5) DEFAULT NULL,
  `ArriveTime` char(5) DEFAULT NULL,
  `AirplaneID` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`FlightNo`, `Origin`, `Destination`, `FlightDate`, `DepTime`, `ArriveTime`, `AirplaneID`) VALUES
(322, 'New Jersey', 'Oregon', '1-06-2022', '10:57', '12:47', 22396),
(1029, 'Boston', 'Florida', '1-07-2022', '15:50', '14:27', 43770),
(1110, 'Lousiana', 'Toronto', '06-13-2022', '08:50', '12:55', 73400),
(1111, 'Boston', 'California', '09-22-2022', '09:23', '12:04', 73400),
(1112, 'Boston', 'California', '05-02-2022', '06:34', '12:09', 73400),
(1223, 'Houston', 'Chicago', '05-02-2022', '08:19', '12:04', 73400),
(2222, 'Houston', 'California', '12-04-2022', '05:50', '12:04', 73400),
(2223, 'Houston', 'Chicago', '05-02-2022', '08:19', '12:04', 73400),
(2348, 'Boston', 'California', '09-22-2022', '09:34', '14:09', 22396),
(2377, 'Texas', 'New York City', '01-09-2022', '18:30', '22:46', 34201),
(2467, 'Boston', 'California', '01-02-2022', '08:30', '12:05', 22396),
(3332, 'Houston', 'California', '09-22-2022', '08:19', '14:09', 73400),
(3336, 'Houston', 'California', '11-03-2022', '09:23', '14:08', 73400),
(4444, 'Houston', 'California', '09-22-2022', '09:23', '14:08', 73400),
(4986, 'New York City', 'Texas', '01-05-2022', '12:44', '14:04', 34201),
(5551, 'Houston', 'California', '12-04-2022', '05:50', '12:04', 73400),
(5555, 'New York City', 'California', '09-22-2022', '05:50', '12:04', 73400),
(5674, 'Delware', 'Texas', '05-03-2022', '06:34', '12:09', 73400),
(6542, 'New Jersey', 'California', '01-14-2022', '10:32', '22:49', 34201),
(6666, 'Boston', 'California', '09-22-2022', '09:23', '12:04', 73400),
(6667, 'Houston', '', '09-22-2022', '08:19', '12:09', 73400),
(7410, 'Oregon', 'Florida', '01-10-2022', '05:15', '09:00', 22396),
(7412, 'New York City', 'Houston', '12-04-2022', '05:50', '12:09', 73400),
(7720, 'Lousiana', 'Toronto', '06-13-2022', '08:50', '12:55', 73400),
(7721, 'Lousiana', 'Toronto', '06-13-2022', '08:50', '12:55', 73400),
(7722, 'Lousiana', 'Toronto', '06-13-2022', '08:50', '12:55', 73400),
(7742, 'Lousiana', 'Toronto', '06-13-2022', '08:50', '12:55', 73400),
(7744, 'Lousiana', 'Toronto', '06-13-2022', '08:50', '12:55', 73400),
(7783, 'Lousiana', 'Toronto', '06-13-2022', '08:50', '12:55', 73400),
(7787, 'Lousiana', 'Toronto', '06-13-2022', '08:50', '12:55', 73400),
(7788, 'Lousiana', 'Toronto', '06-13-2022', '08:50', '12:55', 73400),
(7789, 'Lousiana', 'Toronto', '06-13-2022', '08:50', '12:55', 73400),
(8641, 'Boston', 'California', '09-22-2022', '06:34', '12:09', 73400),
(8892, 'Florida', 'Maine', '01-12-2022', '14:30', '16:39', 43770),
(9833, 'Maine', 'New York City', '10-13-2022', '5:39', '7:59', 88834),
(9981, 'California', 'New Jersey', '01-09-2022', '08:50', '17:12', 82969),
(9999, 'Delware', 'California', '05-03-2022', '06:34', '12:09', 73400);

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `MemberID` int(9) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Gender` char(1) DEFAULT NULL,
  `BirthDate` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`MemberID`, `FirstName`, `LastName`, `Gender`, `BirthDate`) VALUES
(18722899, 'Kelly', 'Poopy', 'F', '09-22-1983'),
(101137669, 'William', 'Greene', 'M', '06-01-2000'),
(102398770, 'Maxwell', 'Gold', 'F', '09-12-1969'),
(104300902, 'Joseph', 'Stevens', 'M', '03-03-1993'),
(111301299, 'Rhett', 'Mclaughlin', 'M', '10-11-1977'),
(124879900, 'Peter', 'Pan', 'M', '06-17-1982'),
(134698878, 'Frank', 'Carol', 'M', '09-02-1978'),
(135690010, 'Peter', 'Farley', 'M', '12-20-1995'),
(155630109, 'Lisa', 'Stonehelm', 'F', '04-26-1972'),
(174568922, 'Abigail', 'Brown', 'F', '01-13-1996'),
(176620999, 'Nicole', 'Goober', 'F', '06-19-1992'),
(187643210, 'Stevie', 'Levine', 'F', '11-4-1987'),
(193468330, 'John', 'Doe', 'M', '04-25-1985'),
(198200013, 'Link', 'Neal', 'M', '06-01-1978'),
(336080927, 'Moth', 'Man', 'M', '01-01-1994'),
(623397601, 'George', 'Fallow', 'M', '12-24-1987'),
(760106240, 'Lolli', 'Pop', 'F', '09-22-1983'),
(856598591, 'Andrea', 'Froze', 'F', '07-13-2000'),
(875047375, 'Bertha', 'Harry', 'F', '08-13-1997'),
(877706380, 'Jake', 'Price', 'M', '06-22-1991'),
(907600577, 'Sally', 'Brown', 'F', '03-15-1998'),
(948231692, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `passengerticket`
--

CREATE TABLE `passengerticket` (
  `FlightNo` int(5) NOT NULL,
  `MemberID` int(9) NOT NULL,
  `SeatNo` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passengerticket`
--

INSERT INTO `passengerticket` (`FlightNo`, `MemberID`, `SeatNo`) VALUES
(1029, 135690010, 2),
(1110, 760106240, 95),
(2467, 101137669, 24),
(2467, 102398770, 3),
(2467, 124879900, 13),
(4986, 174568922, 32),
(4986, 193468330, 12),
(7410, 155630109, 22),
(7410, 187643210, 12),
(7410, 198200013, 10),
(7721, 176620999, 58),
(7744, 176620999, 34),
(7783, 176620999, 30),
(7787, 176620999, 86),
(8641, 877706380, 0),
(9981, 104300902, 6),
(9981, 111301299, 10),
(9999, 856598591, 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airplane`
--
ALTER TABLE `airplane`
  ADD PRIMARY KEY (`AirplaneID`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`FlightNo`),
  ADD KEY `AirplaneID` (`AirplaneID`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`MemberID`);

--
-- Indexes for table `passengerticket`
--
ALTER TABLE `passengerticket`
  ADD PRIMARY KEY (`FlightNo`,`MemberID`),
  ADD KEY `MemberID` (`MemberID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flight`
--
ALTER TABLE `flight`
  ADD CONSTRAINT `flight_ibfk_1` FOREIGN KEY (`AirplaneID`) REFERENCES `airplane` (`AirplaneID`);

--
-- Constraints for table `passengerticket`
--
ALTER TABLE `passengerticket`
  ADD CONSTRAINT `passengerticket_ibfk_1` FOREIGN KEY (`FlightNo`) REFERENCES `flight` (`FlightNo`),
  ADD CONSTRAINT `passengerticket_ibfk_2` FOREIGN KEY (`MemberID`) REFERENCES `passenger` (`MemberID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
