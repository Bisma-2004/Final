-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2024 at 07:00 AM
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
-- Database: `sostti`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Fname` varchar(20) DEFAULT NULL,
  `Address` varchar(20) DEFAULT NULL,
  `Age` varchar(20) DEFAULT NULL,
  `DOB` varchar(20) DEFAULT NULL,
  `Domicile` varchar(20) DEFAULT NULL,
  `Religion` varchar(20) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Cnic` varchar(20) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Gender` varchar(250) DEFAULT NULL,
  `Trade` varchar(20) DEFAULT NULL,
  `Image` varchar(250) DEFAULT NULL,
  `Hobby` varchar(250) DEFAULT NULL,
  `Country` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`ID`, `Name`, `Fname`, `Address`, `Age`, `DOB`, `Domicile`, `Religion`, `Phone`, `Cnic`, `Email`, `Gender`, `Trade`, `Image`, `Hobby`, `Country`) VALUES
(1, 'Hammad', 'Tariq', 'ehjtkfdjshkugj', '12', '2024-10-29', 'Punjab', 'Islam', '5656284398424', '83478937490380', 'hammadtariq234@gmail', 'Male', 'kufhgd', 'upload/saad.jpg', '', 'Iran'),
(2, 'SaadAli', 'Tariq', 'rgftytfdyesedfrfhv', '13', '2020-09-08', 'Sindh', 'islam', '45567687798654', '456789876554332', 'saadali13345@gmail.c', 'Male', 'English language ', 'upload/Harisbirthday card.png', 'Editing,Cooking', 'Iran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
