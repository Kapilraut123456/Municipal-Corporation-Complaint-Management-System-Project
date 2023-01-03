-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 05:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `email`, `Password`) VALUES
(2, 'Kapil@2023', 'kapilraut73@gmail.com', 'Kapil@12345'),
(3, 'emp2023', 'emp2023@gmail.com', 'Emp@123'),
(4, 'admin', 'admin2023@gmail.com', 'Admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_tab`
--

CREATE TABLE `complaint_tab` (
  `id` int(11) NOT NULL,
  `Fullname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Complaint_category` varchar(100) NOT NULL,
  `Complaint` varchar(100) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Landmark` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint_tab`
--

INSERT INTO `complaint_tab` (`id`, `Fullname`, `Email`, `Complaint_category`, `Complaint`, `Description`, `Address`, `Landmark`, `Image`) VALUES
(29, 'Kapil', 'kapilraut73@gmail.com', 'Water Complaint', 'Pipe damage', 'NA', 'New sonkhas mangrulpir', 'Near mtp factory', 'assete/images.jpeg'),
(30, 'Adesh Pawar', 'adeshpawar451@gmail.com', 'Water Complaint', 'Pipe damage', 'NA', 'New sonkhas mangrulpir', 'NA', 'assete/images.jpeg'),
(32, 'Kewal Pusadkar', 'kapilraut73@gmail.com', 'Water Complaint', 'Water Flowing / wastage', 'Water Complaint', 'New sonkhas mangrulpir', 'Near Bank', 'assete/');

-- --------------------------------------------------------

--
-- Table structure for table `contact_table`
--

CREATE TABLE `contact_table` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `mobilenumber` int(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `id` int(11) NOT NULL,
  `track_complaint` varchar(100) NOT NULL,
  `resolve_complaint` varchar(100) NOT NULL,
  `update_complaint` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration_tab`
--

CREATE TABLE `registration_tab` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration_tab`
--

INSERT INTO `registration_tab` (`id`, `firstname`, `lastname`, `email`, `username`, `Password`) VALUES
(33, 'Kapil', 'Raut', 'kapilraut73@gmail.com', 'Kapil2408', 'Kapil@123'),
(34, 'Kapil', 'Raut', 'sanket@gmail.com', 'san123', '456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint_tab`
--
ALTER TABLE `complaint_tab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_tab`
--
ALTER TABLE `registration_tab`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `complaint_tab`
--
ALTER TABLE `complaint_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `contact_table`
--
ALTER TABLE `contact_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration_tab`
--
ALTER TABLE `registration_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
