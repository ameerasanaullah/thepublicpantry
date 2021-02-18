-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 18, 2021 at 04:32 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypantry_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
--Written in PhpMyAdmin by Ameera Sanaullah--
CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `first_name` varchar(19) NOT NULL,
  `last_name` varchar(19) NOT NULL,
  `gender` varchar(19) NOT NULL,
  `e_mail` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `confirm_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userid`, `first_name`, `last_name`, `gender`, `e_mail`, `pass`, `confirm_pass`) VALUES
(11, 0, 'sara', 'jones', 'female', 'sarajones@gmail.com', 'apples10', 'apples10'),
(54, 0, 'john', 'doe', 'Male', 'johndoe@gmail.com', 'doe20', 'doe20'),
(56, 0, 'jane', 'doe', 'Female', 'janedoe@gmail.com', 'apples20', 'apples20'),
(75, 0, 'harry', 'styles', 'Male', 'hstyles@gmail.com', 'hs10', 'hs10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `first_name` (`first_name`),
  ADD KEY `last_name` (`last_name`),
  ADD KEY `gender` (`gender`),
  ADD KEY `e_mail` (`e_mail`),
  ADD KEY `pass` (`pass`),
  ADD KEY `confirm_pass` (`confirm_pass`),
  ADD KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
