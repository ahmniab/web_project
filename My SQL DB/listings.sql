-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 05:46 PM
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
(1, 'audis', '', '', 'carimgs\\audis5.png', 123, 0),
(2, 'bmw', '', '', 'carimgs\\bmwe34.png', 5550, 3),
(4, 'bmw', '', '', 'carimgs\\bmwm140i.png', 123, 0),
(5, 'audisq7', '', '', 'carimgs\\audisq7.png', 789, 0),
(26, 'hundai', '2020', 'asaaaaaaaaaaaaaaaaaaaaaaaaddddddddddddddddddddddaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'carimgs/26.jpeg', 80000, 15),
(27, 'bmw', '2020', 'njhhjghfgdfgdgjghjfgghddsrttyuyu', 'carimgs/27.jpeg', 1000000, 4),
(28, 'bmw', '2020', 'Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.', 'carimgs/28.jpeg', 70000, 36),
(29, 'lamborghini aventador', '2021', 'Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.', 'carimgs/29.jpg', 1000000, 1),
(30, 'lamborghini ', '2019', 'Each and every detail of the Aventador bears the hallmarks of the House of the Raging Bull. It is a true masterpiece of design that expresses dynamism and power, with the carbon-fiber monocoque the jewel in its crown.', 'carimgs/30.png', 1101110, 1);

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
  MODIFY `car_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
