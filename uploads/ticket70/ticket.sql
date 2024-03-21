-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2024 at 02:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(11) NOT NULL,
  `ticket_number` text NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `contact_person` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sla` varchar(255) NOT NULL,
  `supervisor` varchar(255) NOT NULL,
  `subject` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `branch` int(10) NOT NULL,
  `issue_desc` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `company_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `system` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `device_location` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `contact_number` varchar(12) NOT NULL,
  `address` varchar(1000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(200) NOT NULL,
  `file_path` varchar(250) NOT NULL,
  `request_date` date NOT NULL,
  `issue_status` int(10) NOT NULL,
  `assigned_staff_id` varchar(30) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `created_by` int(10) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `updated_by` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `technician` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `ticket_number`, `user_id`, `name`, `contact_person`, `sla`, `supervisor`, `subject`, `branch`, `issue_desc`, `company_name`, `system`, `device_location`, `contact_number`, `address`, `email`, `file_path`, `request_date`, `issue_status`, `assigned_staff_id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `location`, `department`, `technician`) VALUES
(62, 'TCN0062', '21', 'User', '4232323', '', '', 'qweqw', 11, 'qwerqw', 'Dextra', 'ewfwe', 'dsfsd', '1234567890', 'Velachery', 'user@gmail.com', '', '2024-03-13', 1, '', '2024-03-13 06:02', 21, '2024-03-13 06:02', 'User', '', '', ''),
(63, 'TCN0063', '4', 'user', '', '', '', '1', 0, '1', NULL, '1', '', '2147483647', '', 'user@gmail.com', '', '2024-03-18', 1, '', '2024-03-18 06:10', 4, '2024-03-18 06:10', 'user', '002', '222', 'Sub Employee'),
(64, 'TCN0064', '4', 'user', '', '', '', 'Key-board', 0, 'Battery', NULL, 'Labtop', '', '2147483647', '', 'user@gmail.com', '', '2024-03-18', 1, '', '2024-03-18 07:24', 4, '2024-03-18 07:24', 'user', '002', '333', 'Sub Employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
