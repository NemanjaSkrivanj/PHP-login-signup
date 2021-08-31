-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 07:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbb`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `username`, `password`, `email`) VALUES
(57, 'KayzerSoze', '$2y$10$GTf4bXh0CMOKzNjrK.uar.36c7q.9j5rKs4REcFmgsX/sjQ76LJ46', 'nemanjas2000@gmail.com'),
(58, 'MrRobot', '$2y$10$/JoD5dUUaX8wiZhI3HMe3OPo1H09f8tnRMdxgel5L1Mgw/T0ZvAdy', 'mrrobot@gmail.com'),
(59, 'Dr Gonzo', '$2y$10$4DkVTw4093cCzqF6p4CMQe3JFwAy02ETvzz3fCOUczXcXxKXfS.7u', 'test1@test.com'),
(60, 'HST', '$2y$10$ZMMtN3Wgwo0epMjnTT6EFuVsmsxcsYLVaxbww7K3Wglf02ht8mhEO', 'test2@test.com'),
(61, 'NN', '$2y$10$zFR1iyf3U7xEjvgI9LOW.e9v/LAnEqXzzJ3bTcpUtyHzP2XiNersO', 'mejl@mejll.com'),
(62, 'lazar', '$2y$10$vukA5KHW/pnNXK4G9DtvjeoE/.QyOi5kIHLv2t3Ey0BGAjyI0QsCm', 'email12@email.com'),
(63, 'deep', '$2y$10$PhSMzjMtpYTWs7IZD17XVOF4uvTrxGAss0dM7buO5Yn41tyF1gUpS', 'deep@gmail.com'),
(64, 'wolf', '$2y$10$jSnL7GB3X/h0DY5t345iE.r3gbnsMOp7bGjYCuFsO0StiuyTKN/7K', 'wolf@hotmail.com'),
(65, 'Todor', '$2y$10$LRDl0k8/Kxstsqh7zTFpouFDvIf8zukj2qHfHzayGHL62T779B8O.', 'testem@email.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
