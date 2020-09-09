-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 04:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebuysell`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `psw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `psw`) VALUES
('Maleesha', 'mpm@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category`) VALUES
('Car'),
('Van'),
('Electrical'),
('Vehicle'),
('Bike'),
('House Hold'),
('Spare Parts');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `name` varchar(150) NOT NULL,
  `comment` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`name`, `comment`) VALUES
('mpm@gmail.com', 'Great buy and selling page.'),
('mpm@gmail.com', 'This is a good buy and sell web site.');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` varchar(100) NOT NULL,
  `filename` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `filename`) VALUES
('2020/05/19/05:52:49ammpm@gmail.com', 'allion2.jpg'),
('2020/05/19/08:25:25ammpm@gmail.com', 'axi03.jpg'),
('2020/05/19/10:16:10ammpm@gmail.com', 'cbr.jpg'),
('2020/05/19/10:17:50ammpm@gmail.com', 'allion2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `category` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `price` varchar(15) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `image` varchar(150) NOT NULL,
  `date_time` varchar(25) NOT NULL,
  `tp_number` varchar(10) NOT NULL,
  `oderby` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `email`, `subject`, `category`, `location`, `price`, `description`, `image`, `date_time`, `tp_number`, `oderby`) VALUES
('2020/05/18/08:01:50pmmpm@gmail.com', 'mpm@gmail.com', 'Toyota Allion 2012', 'Car', 'Colombo', '3500000', 'This is a good car.', 'allion.jpg', '2020/05/18', '', 0),
('2020/05/19/10:25:36ammpm@gmail.com', 'mpm@gmail.com', 'Yamaha Fz s 2016', 'Vehicle', 'Colombo', '330000', 'Bike is in good condition.', 'fz.jpg', '2020/05/19', '0112457896', 1),
('2020/05/19/11:02:44ammpm@gmail.com', 'mpm@gmail.com', 'Toyota Primio Head Light', 'Spare Parts', 'Puttalam', '12000', 'Brand new toyota primio head light.', 'headlight.jpg', '2020/05/19', '0767950600', 2),
('2020/05/19/11:15:36ammpm@gmail.com', 'mpm@gmail.com', 'Honda CBR Gullarm', 'Bike', 'Colombo', '450000', 'Good Condition', 'cbr.jpg', '2020/05/19', '0112457896', 3),
('2020/05/19/11:16:55ammpm@gmail.com', 'mpm@gmail.com', 'Apple 11 Pro', 'Electrical', 'Gampaha', '250000', 'Brand new. with packing.', '11pro.jpg', '2020/05/19', '0767950600', 4),
('2020/05/19/11:18:46ammpm@gmail.com', 'mpm@gmail.com', 'Apple Mac Book Pro', 'Electrical', 'Colombo', '325000', 'Used laptop. good condition.', 'macbook.jpg', '2020/05/19', '0767950600', 5),
('2020/05/19/11:20:53ammpm@gmail.com', 'mpm@gmail.com', 'Yamaha Wr x 250', 'Bike', 'Matale', '345000', 'Yamaha wr x 250. 2012 .', 'wr.jpg', '2020/05/19', '0112457896', 6);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `distric` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`distric`) VALUES
('Colombo'),
('Gampaha'),
('Kaluthara'),
('Jaffna'),
('Kilinochchi'),
('Mannar'),
('Mullaitivu'),
('Vavuniya'),
('Puttalam'),
('Kurunegala'),
('Anuradhapura'),
('Polonnaruwa'),
('Matale'),
('Kandy'),
('Nuwara Eliya'),
('Kegalle'),
('Ratnapura'),
('Trincomalee'),
('Batticaloa'),
('Ampara'),
('Badulla'),
('Monaragala');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `psw` varchar(20) NOT NULL,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `lname`, `email`, `psw`, `image`) VALUES
('Maleesha', 'Sulakshana', 'mpm@gmail.com', '12345678', 'IMG_20180115_114605.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
