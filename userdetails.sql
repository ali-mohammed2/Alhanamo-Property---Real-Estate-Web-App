-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 04, 2021 at 01:10 PM
-- Server version: 5.5.68-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adbs928`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `fname`, `lname`, `username`, `email`, `phone`, `password`, `date`) VALUES
(1, 'Yasmin', 'James', 'yas123', 'yas@abc.com', '07883767832', '$2y$10$OrSyXzRcUMIzPg4ppmJhEOF.bVZ1Bp9lVd0/BiB3ybZ0sSxSVbrOa', '2021-04-02'),
(7, 'Ali', 'Mohammed', 'adbs928', 'ali.mohammed.2@city.ac.uk', '07123456789', '$2y$10$lDUy9OdZpxeTTk/QcBPZ0.SMydhdZUzDWDv0iPge06rigXHZ0cl2G', '2021-04-02'),
(8, 'Samantha', 'Thomas', 'sthomas12', 's.thomas12@abc.com', '06376546376', '$2y$10$RoFjXb2Wel2gL8v5Bc2rguoY5X7vrxibIIsjR6CYBO25k3XjrOK42', '2021-04-02'),
(9, 'Alex', 'Lee', 'Alex34', 'alex.lee123@abc.com', '08937874238', '$2y$10$T6LQse/vOXPADKUGDT/b4OmvKUgHIrWHeBiKHriLv.0RDovoB9lmy', '2021-04-03'),
(10, 'Ibrahim', 'Hanifa', 'ihanifa87', 'ibrahim.h87@abc.com', '02843678362', '$2y$10$hOpSNMv8iCjdav8hH10ePust4DK40GnE4TuEduaNtAdK0ItfEjjoS', '2021-04-03'),
(11, 'Hasan', 'Nasir', 'hasnas23', 'hasan.nasir23@gmail.com', '07734276573', '$2y$10$8YFVrxMeF7icsDvQ8D3ebeL.H0Qmv0HWpTJ90m2RhjhIsFXCfuJX2', '2021-04-04'),
(12, 'Jes', 'Benson', 'jesbenson12', 'jes.benson12@gmail.com', '07563567536', '$2y$10$79ihQiLjE5OBQ.3P9AhOkeWK29snTBK2xoA7hr.dJImn0P7z3lP1i', '2021-04-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
