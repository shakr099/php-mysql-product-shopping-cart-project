-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2021 at 02:45 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `childrenn`
--

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `id_child` int(11) NOT NULL,
  `fname` varchar(60) COLLATE utf8_bin NOT NULL,
  `lname` varchar(60) COLLATE utf8_bin NOT NULL,
  `birthdate` varchar(60) COLLATE utf8_bin NOT NULL,
  `report` text COLLATE utf8_bin NOT NULL,
  `email` varchar(40) COLLATE utf8_bin NOT NULL,
  `phone` varchar(50) COLLATE utf8_bin NOT NULL,
  `address` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`id_child`, `fname`, `lname`, `birthdate`, `report`, `email`, `phone`, `address`) VALUES
(5, 'عمر', 'عبداللله', '2002:3:13', '3.jpg', 'sal44@gmail.com', '+933333278997', 'dekw'),
(11, 'مصطفى ', 'احمد سلطان', '2002:3:14', '2Y.jpg', 'mmmmmm@gmail.com', '+933333333333', 'rrrrrrrrrr'),
(13, 'علي', 'حسان', '2002:3:13', '3.jpg', 'd@gmail.com', '+66666666666666', 'dekw'),
(16, 'خالد', 'احمد سلطان', '2021-12-14', '1.png', 'd@gmail.com', '+933333333333', 'qqqqq');

-- --------------------------------------------------------

--
-- Table structure for table `child_special`
--

CREATE TABLE `child_special` (
  `id` int(11) NOT NULL,
  `id_child` int(11) NOT NULL,
  `id_special` int(11) NOT NULL,
  `date` varchar(40) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `child_special`
--

INSERT INTO `child_special` (`id`, `id_child`, `id_special`, `date`, `description`) VALUES
(11, 11, 9, '2021-12-21', 'ssssssssssssssss'),
(13, 5, 1, '2021-12-23', 'fffffffffffffff'),
(15, 5, 1, '2021-12-23', 'sawsssss'),
(16, 5, 1, '2021-12-07', 'lllllllllll'),
(17, 11, 9, '2021-12-23', 'ssssssssss'),
(18, 13, 1, '2021-12-23', 'assssssss');

-- --------------------------------------------------------

--
-- Table structure for table `t_special_need`
--

CREATE TABLE `t_special_need` (
  `id_special` int(11) NOT NULL,
  `special_need` varchar(80) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `t_special_need`
--

INSERT INTO `t_special_need` (`id_special`, `special_need`) VALUES
(1, 'شلل نصفي'),
(9, 'ضمور ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `cind` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `cind`) VALUES
(18, 'saleh', 'd@gmail.com', '123', 'admin'),
(19, 'maytham', 'm@gmail.com', '123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`id_child`);

--
-- Indexes for table `child_special`
--
ALTER TABLE `child_special`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_special_need`
--
ALTER TABLE `t_special_need`
  ADD PRIMARY KEY (`id_special`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `id_child` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `child_special`
--
ALTER TABLE `child_special`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `t_special_need`
--
ALTER TABLE `t_special_need`
  MODIFY `id_special` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
