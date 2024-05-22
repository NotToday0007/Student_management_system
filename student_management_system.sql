-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 10:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` enum('user','teacher','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'rifat', 'rifat@gmail.com', '123', 'user'),
(2, 'rifat', 'rifat@gmail.com', '123', 'user'),
(3, 'rifat', 'rifatkhan.khan01@gmail', '202cb962ac59075b964b07152d234b70', 'user'),
(4, 'rahat', 'rifatbakshi07@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(5, 'rahat', 'rifatkhan.khan021@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(6, 'teacher', 'rifatkhan.khan002@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(7, 'rifatkhan.kh', 'rifatbakshi037@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(8, '', '', '', 'user'),
(9, 'rrr', 'rr@gmail.com', '123', 'user'),
(10, 'rio', 'rifatkhan.khan011@gmail.com', '202cb962ac59075b964b07152d234b70', 'teacher'),
(11, 'rifatkhan', 'rifatbakshi0370@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(12, 'rifatk', 'rifatbakshi03700@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
