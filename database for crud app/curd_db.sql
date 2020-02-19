-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2020 at 08:26 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curd_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `user_id` int(5) NOT NULL,
  `f_id` int(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`user_id`, `f_id`, `subject`, `created_at`, `status`) VALUES
(71, 30, 'c', '2020-02-11', 0),
(72, 30, 'demo1', '2020-02-11', 0),
(120, 49, 'ando', '2020-02-13', 0),
(121, 29, 'c', '2020-02-14', 0),
(122, 29, 'demo1', '2020-02-14', 0),
(123, 29, 'ando', '2020-02-14', 0),
(124, 29, 'ANDROID', '2020-02-18', 0),
(125, 29, 'java', '2020-02-18', 0),
(126, 29, 'python', '2020-02-18', 0),
(127, 29, 'sci', '2020-02-18', 0),
(128, 29, 'fyi', '2020-02-18', 0),
(129, 27, 'c', '2020-02-18', 0),
(130, 27, 'c', '2020-02-18', 0),
(131, 27, 'c', '2020-02-18', 0),
(132, 43, 'demo1', '2020-02-18', 0),
(133, 43, 'demo1', '2020-02-18', 0),
(134, 43, 'demo1', '2020-02-18', 0),
(135, 46, 'assasas', '2020-02-19', 0),
(136, 45, 'cc', '2020-02-19', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`) VALUES
(27, 'diksha'),
(29, 'jeevit'),
(30, 'vandeepbhai'),
(31, 'kartik'),
(43, 'jon'),
(45, 'falgun'),
(46, 'madvi'),
(47, 'pulkit kansarea'),
(48, 'vishal'),
(49, 'vik'),
(50, 'panduranga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
