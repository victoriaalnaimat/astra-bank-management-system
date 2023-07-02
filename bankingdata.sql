-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 10:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankingdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `actypetab`
--

CREATE TABLE `actypetab` (
  `actypeName` varchar(20) NOT NULL,
  `acdetails` varchar(50) DEFAULT NULL,
  `facility` varchar(250) DEFAULT NULL,
  `minbal` decimal(6,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actypetab`
--

INSERT INTO `actypetab` (`actypeName`, `acdetails`, `facility`, `minbal`) VALUES
('Current Account', 'Business current account', 'Cheque book, overdraft facility', 5000),
('Fixed Deposit', 'Term deposit with fixed interest rate', 'No withdrawal before maturity', 10000),
('Savings Account', 'Standard savings account', 'ATM card, online banking', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `custactab`
--

CREATE TABLE `custactab` (
  `acno` decimal(10,0) NOT NULL,
  `acName` varchar(50) DEFAULT NULL,
  `MobileNo` decimal(10,0) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `acAdd` varchar(250) DEFAULT NULL,
  `pword` varchar(20) DEFAULT NULL,
  `actypename` varchar(20) NOT NULL,
  `custapp` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `custactab`
--

INSERT INTO `custactab` (`acno`, `acName`, `MobileNo`, `email`, `acAdd`, `pword`, `actypename`, `custapp`) VALUES
(1000000001, 'Victoria Ahmed', 777777777, 'vicki@gmail.com', 'Salt City - Jordan', 'v1234', 'Current', 'Y'),
(1000000002, 'Hala Ahmad', 788888888, 'hala@gmail.com', 'Amman - Jordan', 'h1234', 'Current', 'Y'),
(1000000007, 'Zahraa', 742525424, 'zahraa@gmail.com', 'jtrjtfnntrtrnt', 'z1234', 'Current', 'Y'),
(2000000001, 'Mickle Shello', 767867425, 'micki@gmail.com', 'Britain - U.K', 'm1234', 'Fixed', 'Y'),
(2000000002, 'Allen Mcklowey', 745454545, 'allen@yahoo.uk', 'Britain -U.K', 'a1234', 'Fixed', 'Y'),
(3000000001, 'Celine Al-Abdallah', 765354343, 'celi@gmail.com', 'Salt City - Jordan', 'c1234', 'Savings', 'Y'),
(3000000002, 'Daniel Al-Naimat', 737535434, 'dani@gmail.com', 'Amman - Jordan', 'd1234', 'Savings', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `logintab`
--

CREATE TABLE `logintab` (
  `UserID` varchar(20) NOT NULL,
  `pWord` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logintab`
--

INSERT INTO `logintab` (`UserID`, `pWord`) VALUES
('admin', 'admin'),
('Victoria', 'VictoriaAdmin');

-- --------------------------------------------------------

--
-- Table structure for table `trantab`
--

CREATE TABLE `trantab` (
  `tranNo` decimal(4,0) NOT NULL,
  `tranDate` datetime DEFAULT NULL,
  `acNo` decimal(10,0) DEFAULT NULL,
  `dbAmt` decimal(10,0) DEFAULT NULL,
  `ctAmt` decimal(10,0) DEFAULT NULL,
  `tranDetails` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trantab`
--

INSERT INTO `trantab` (`tranNo`, `tranDate`, `acNo`, `dbAmt`, `ctAmt`, `tranDetails`) VALUES
(1001, '2023-06-18 23:56:34', 1000000001, 5270, 0, 'business_investment'),
(1002, '2023-06-19 00:02:10', 1000000001, 0, 200, 'for_friend'),
(1003, '2023-06-30 12:11:53', 1000000001, 0, 500, 'business_investment'),
(1004, '2023-06-30 12:15:50', 1000000001, 1000, 0, 'retirement_salary');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actypetab`
--
ALTER TABLE `actypetab`
  ADD PRIMARY KEY (`actypeName`),
  ADD KEY `idx_actypetab_actypeName` (`actypeName`);

--
-- Indexes for table `custactab`
--
ALTER TABLE `custactab`
  ADD PRIMARY KEY (`acno`);

--
-- Indexes for table `logintab`
--
ALTER TABLE `logintab`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `trantab`
--
ALTER TABLE `trantab`
  ADD PRIMARY KEY (`tranNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
