-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 02:21 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `registrationtable`
--

CREATE TABLE `registrationtable` (
  `username` varchar(64) DEFAULT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `catagory` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrationtable`
--

INSERT INTO `registrationtable` (`username`, `phone`, `email`, `catagory`, `dob`, `password`) VALUES
('abir', 46456, 'sadmanhasan74@gamil.com', 'Buyer', '2021-01-04', '1'),
('bro', 78945, 'sadmanhasan74@gamil.com', 'Seller', '2021-01-04', '1'),
('sam', 1674878084, 'shimantohassan@yahoo.com', 'Buyer', '2021-01-05', '1'),
('admin', 1758387250, 'admin@ticket.com', 'admin', '2021-01-02', '1234'),
('manager', 1987452365, 'manager@ticket.com', 'manager', '2021-01-02', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrationtable`
--
ALTER TABLE `registrationtable`
  ADD PRIMARY KEY (`phone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
