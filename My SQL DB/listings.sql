-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 09:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `car_num` int(11) NOT NULL,
  `name` text NOT NULL,
  `model` text NOT NULL,
  `caption` text NOT NULL,
  `img` text NOT NULL,
  `price` int(11) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`car_num`, `name`, `model`, `caption`, `img`, `price`, `views`) VALUES
(1, 'audis', '', '', 'carimgs\\audis5.png', 123, 37),
(2, 'bmw', '', '', 'carimgs\\bmwe34.png', 5550, 16),
(4, 'bmw', '', '', 'carimgs\\bmwm140i.png', 123, 4),
(5, 'audisq7', '', '', 'carimgs\\audisq7.png', 789, 0),
(26, 'marcedes', '2023', 'g class', 'carimgs/8.jpg', 500000, 117),
(27, 'marcedes', '2022', 'marceedes maybach', 'carimgs/27.jpeg', 1000000, 8),
(29, 'BMW', '2017', 'BMW M3', 'carimgs/29.jpeg', 150000, 23),
(30, 'marcedes', '2020', 'Lorem ipsum is a name for a common type of placeholder text. Also known as filler or dummy te', 'carimgs/30.jpeg', 1000000, 43),
(31, 'Hundai', '2020', 'Lorem ipsum is a name for a common type of placeholder text. Also known as filler or dummy text, this is text copy that serves to fill a space without saying anything meaningful.', 'carimgs/31.jpeg', 80000, 3),
(32, 'hundai', '2019', 'Lorem ipsum is a name for a common type of placeholder text. Also known as filler or dummy text, this is text copy that serves to fill a space without saying anything meaningful. ', 'carimgs/32.jpg', 70000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`car_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `car_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
