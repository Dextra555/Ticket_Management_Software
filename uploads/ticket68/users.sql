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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `dept_id` varchar(255) NOT NULL,
  `location_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `notes` varchar(1000) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `dept_id`, `location_id`, `email`, `password`, `mobile`, `role`, `notes`, `status`, `created_at`, `created_by`, `updated_at`) VALUES
(5, 1, 'admin', 'webdeveloper (222)', 'Madurai (002)', 'admin@gmail.com', '123456', 1111111111, '1', 'admin', 'Decline', '2024-03-14 00:00:00', '0000-00-00 00:00:00', '2024-03-14 00:00:00'),
(6, 4, 'user', 'webdeveloper (222)', 'Madurai (002)', 'user@gmail.com', '123456', 2147483647, '4', 'test', 'Active', '2024-03-14 00:00:00', '0000-00-00 00:00:00', '2024-03-14 00:00:00'),
(8, 3, 'Sub Employee', 'wordpressdeveloper (333)', 'Madurai (002)', 'subemployee@gmail.com', '123456', 2147483647, '3', 'test', 'Decline', '2024-03-14 00:00:00', '0000-00-00 00:00:00', '2024-03-14 00:00:00'),
(9, 2, 'Employee', 'webdeveloper (222)', 'Madurai (002)', 'employee@gmail.com', '123456', 1111111111, '2', 'test', 'Decline', '2024-03-14 00:00:00', '0000-00-00 00:00:00', '2024-03-14 00:00:00'),
(19, 54, 'test', '333', '002', 'test@gmail.com', '654321', 2147483647, '2', '1', 'Decline', '2024-03-15 11:50:14', '0000-00-00 00:00:00', '2024-03-15 11:50:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
