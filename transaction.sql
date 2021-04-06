-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 07:41 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `S.No` int(11) NOT NULL,
  `Sender` varchar(100) NOT NULL,
  `Receiver` varchar(100) NOT NULL,
  `Amount` bigint(11) NOT NULL,
  `Date & Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`S.No`, `Sender`, `Receiver`, `Amount`, `Date & Time`) VALUES
(1, 'Atul', 'Vijay', 500, '2021-04-02 10:48:40'),
(2, 'atul', 'shyam', 10, '2021-04-04 09:25:39'),
(3, 'Henry', 'Yamika', 10, '2021-04-04 10:39:59'),
(4, 'Henry', 'Atul', 50, '2021-04-06 11:19:37'),
(5, 'Amulya', 'Ruchi', 785, '2021-04-06 11:45:13'),
(6, 'Aditi', 'Sunny', 520, '2021-04-06 11:45:13'),
(7, 'Henry', 'David', 5, '2021-04-06 12:09:47'),
(8, 'Benji', 'Yash', 530, '2021-04-06 17:03:41'),
(9, 'Henry', 'Yash', 530, '2021-04-06 17:14:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`S.No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `S.No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
