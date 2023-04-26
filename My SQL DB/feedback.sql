-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 04:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(20) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `massege` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `phone`, `email`, `subject`, `massege`) VALUES
('ahmed', 1125733734, 'ahmedxmohammed12@goo', 'nlj', 'ojbjhibupb'),
('ahmed', 1125733734, 'ahmedxmohammed12@goo', ';,;lmlkn', ',nn[nninkl'),
('ahmed', 1125733734, 'ahmedxmohammed12@goo', ';,;lmlkn', ',nn[nninkl'),
('ahmed', 1125733734, 'ahmedxmohammed12@goo', ';,;lmlkn', ',nn[nninkl'),
('ahmed', 1125733734, 'ahmedxmohammed12@goo', ';,;lmlkn', ',nn[nninkl'),
('ahmed', 1125733734, 'ahmedxmohammed12@goo', ';,;lmlkn', ',nn[nninkl'),
('ahmed', 1125733734, 'ahmedxmohammed12@goo', 'kknon', 'm;mplml'),
('ahmed', 1125733734, 'ahmedxmohammed12@goo', 'kknon', 'm;mplml'),
('ragb', 1125733734, 'ragb@gmail.com', 'nlj', 'qwedcoqeyixrffoi2QEAHSOI');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
