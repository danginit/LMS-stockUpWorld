-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 07:44 AM
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
-- Database: `db_elearning`
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
(1, 'admin', '$2y$10$X9s4amXtFv.zx5rcgzg7g.bzQhSgxqC/jojJrQLPAH..y11TChZyS');

-- --------------------------------------------------------

--
-- Table structure for table `affiliate_id`
--

CREATE TABLE `affiliate_id` (
  `Serial number` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `refer_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `affiliate_id`
--

INSERT INTO `affiliate_id` (`Serial number`, `name`, `phone_number`, `email`, `refer_id`) VALUES
(1, 'Nitesh Dangi', '987466522', 'abcd@gmail.com', 'i7ieajat'),
(3, 'Nitesh Dangi', '9876543210', 'dangi@gmail.com', 'k00hreeo'),
(4, 'Gaurav', '959924646', 'gaurav@gmail.com', 'sw21seq1'),
(5, 'Navnnet', '94632361616', 'nav@gmail.com', 'obdx9sdt'),
(6, 'Abcd', '987456213', 'abcd@gmail.com', 'o7qc86jo');

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
  `id` int(11) UNSIGNED NOT NULL,
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
(4, 'Nitesh', 'niteshdangi80@gmail.com', '9876543210', '$2y$10$yNip4Oeop.qNg6gTLqW85Oo4CTc.3kG0UeDJlpJZG2mMuSixKtE/2', '$2y$10$SprrOlH0IV2t5h1N7ZBWwuwQmtvz8XyZZ5RNWEkMfdt27BPkLaqnG', 'i7ieajat'),
(5, 'Chandan-Kumar', 'niteshdang@gmail.com', '93408637', '$2y$10$qedk8cvGY8VSbPk8r9JPcuD86o6q1XEivJTdAbRUjlLVd7PaGJb9y', '$2y$10$JWPEmMgLWQuFZDK2GlpXQeh70vQJKvACPuvQJIZQ59Ogg8Vyo4dCq', ''),
(7, 'babu', 'babu@gmail.com', '984562959', '$2y$10$vUUfNT06TB64amZMpRtvyeXBJznB7NxiLaT1SeV3Hk5.8CblY0u2K', '$2y$10$tddLWdzlh34UhXeU37F23OXQbz2YGDtST7ipRupY/75leLXG.Fgga', 'sw21seq1'),
(8, 'ran123', 'raushan@gmail.com', '598616516', '$2y$10$z9G5JlOQuVTSl1BNi7kLi.jU2S33pjFA7ww6jdKjkm/x5kzm3neuC', '$2y$10$sw34zjNMO/p2/SQhCyjcsOhiXS9PhIYLom2x878/Cap9PGh6Lza5u', 'i7ieajat'),
(14, 'Dangi', 'dangi@gmail.com', '987456123', '$2y$10$dFY1DC5R7JnzMG1GtJf7XOeSO3w9xRxJ7oLkDaTWoYaXdNnjeiGOm', '$2y$10$AzdPrtuYsVh.cA4PJLtXeuOBkOLMVEpOQKuvyGTG.P0bjObbQqa1W', 'sw21seq1');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `StudentID` int(11) NOT NULL,
  `Fname` varchar(90) NOT NULL,
  `Lname` varchar(90) NOT NULL,
  `Address` varchar(90) NOT NULL,
  `MobileNo` varchar(90) NOT NULL,
  `STUDUSERNAME` varchar(90) NOT NULL,
  `STUDPASS` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`StudentID`, `Fname`, `Lname`, `Address`, `MobileNo`, `STUDUSERNAME`, `STUDPASS`) VALUES
(1, 'a', 'a', 'a', '21', 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
(2, 'sd', 'sad', 'sad', '231', 'a', 'a0f1490a20d0211c997b44bc357e1972deab8ae3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `affiliate_id`
--
ALTER TABLE `affiliate_id`
  ADD PRIMARY KEY (`Serial number`),
  ADD KEY `refer_id` (`refer_id`),
  ADD KEY `refer_id_2` (`refer_id`);

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
-- AUTO_INCREMENT for table `affiliate_id`
--
ALTER TABLE `affiliate_id`
  MODIFY `Serial number` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
