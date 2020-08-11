-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 09:27 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `username`, `password`) VALUES
(1, 'admin', 'ceb6c970658f31504a901b89dcd3e461');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `enroll_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `enroll_date`, `end_date`, `status`) VALUES
(1, 'Stock Exchange', '2020-08-11 12:40:23', '2020-11-11 12:40:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `affiliate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `mobile`, `password`, `cpassword`, `affiliate`) VALUES
(4, 'Nitesh', 'niteshdangi80@gmail.com', '9876543210', '$2y$10$yNip4Oeop.qNg6gTLqW85Oo4CTc.3kG0UeDJlpJZG2mMuSixKtE/2', '$2y$10$SprrOlH0IV2t5h1N7ZBWwuwQmtvz8XyZZ5RNWEkMfdt27BPkLaqnG', 'asdgfdrgf'),
(5, 'Chandan-Kumar', 'niteshdang@gmail.com', '93408637', '$2y$10$qedk8cvGY8VSbPk8r9JPcuD86o6q1XEivJTdAbRUjlLVd7PaGJb9y', '$2y$10$JWPEmMgLWQuFZDK2GlpXQeh70vQJKvACPuvQJIZQ59Ogg8Vyo4dCq', 'ahrdgJHG'),
(6, 'Nitesh Dangi', 'abcd@gmail.com', '9876663332', '$2y$10$txJT6LkYsvEt/pEmtUW2gOKD/wBX8CVL1LP5mWS/nfATEIdU8Egmu', '$2y$10$A0EJCjqqOfw5lUnZXlGs/.aX85Aokt5JP4IvVKsht5MlLJwjEnnlC', ''),
(7, 'babu', 'babu@gmail.com', '984562959', '$2y$10$vUUfNT06TB64amZMpRtvyeXBJznB7NxiLaT1SeV3Hk5.8CblY0u2K', '$2y$10$tddLWdzlh34UhXeU37F23OXQbz2YGDtST7ipRupY/75leLXG.Fgga', ''),
(8, 'ran123', 'raushan@gmail.com', '598616516', '$2y$10$z9G5JlOQuVTSl1BNi7kLi.jU2S33pjFA7ww6jdKjkm/x5kzm3neuC', '$2y$10$sw34zjNMO/p2/SQhCyjcsOhiXS9PhIYLom2x878/Cap9PGh6Lza5u', ''),
(10, 'a', 'a@gmail.com', '7676424445', '$2y$10$LrZ5fqio8RMumkg6.zOkeekG59O73A4R.0DW.FezIRY1OdNFkAuHa', '$2y$10$QWjGRQMBRHDnVG74aZHIw.AxklujjDzNZUqAfKvKWPBPowzrZhmXm', ''),
(11, 'Chandan-Kumar-18427057', 'root@gmail.com', '8445153131', '$2y$10$RGh.hdJA1WoK7Qd4kATcueSfAf.Z66bJ3xmUSMvJZcZRvTbVcVtu6', '$2y$10$UfKHnByKO5eZz8zjOslkqOc6JSObRV4/vK9jfFsSj3I78yC1QoX/.', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
