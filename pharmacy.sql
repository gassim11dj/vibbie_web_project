-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 11:09 PM
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
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosage`
--

CREATE TABLE `dosage` (
  `ID` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(25) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosage`
--

INSERT INTO `dosage` (`ID`, `medicine_id`, `date`, `time`, `quantity`) VALUES
(1, 4, '0000-00-00', '16:37', 2),
(3, 4, '0000-00-00', '16:39', 3),
(7, 4, '0000-00-00', '10:45', 6),
(8, 4, '0000-00-00', '12:57', 10),
(9, 4, '0000-00-00', '18:15', 7),
(10, 4, '0000-00-00', '19:47', 4),
(11, 3, '0000-00-00', '14:00', 2),
(12, 3, '2021-06-15', '20:45', 2);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dosage_quantity` int(11) NOT NULL,
  `dosage_unit` varchar(10) NOT NULL,
  `milligram_quantity` int(11) NOT NULL,
  `milligram_unit` varchar(10) NOT NULL,
  `frequency_quantity` int(11) NOT NULL,
  `frequency_unit` varchar(25) NOT NULL,
  `amount_taken` int(11) NOT NULL,
  `daily_amount` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`ID`, `name`, `dosage_quantity`, `dosage_unit`, `milligram_quantity`, `milligram_unit`, `frequency_quantity`, `frequency_unit`, `amount_taken`, `daily_amount`, `user_ID`) VALUES
(1, 'Paracetamol', 10, 'Tab', 100, 'mg', 3, 'Per Day', 0, 0, 28),
(3, 'Ciprofloxacin', 30, 'Tab', 500, 'mg', 2, 'Per Day', 4, 0, 28),
(4, 'Emzor', 30, 'Tab', 250, 'mg', 3, 'Per Day', 30, 0, 29);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `name`, `email`, `password`) VALUES
(28, 'Mohamed Thoronka', 'mthoronka@gmail.com', '696d29e0940a4957748fe3fc9efd22a3'),
(29, 'Ibrahim Mansaray', 'imansaray@gmail.com', '696d29e0940a4957748fe3fc9efd22a3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosage`
--
ALTER TABLE `dosage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosage`
--
ALTER TABLE `dosage`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
