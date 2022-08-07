-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 12:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `a_id` int(50) NOT NULL,
  `a_email` varchar(500) NOT NULL,
  `a_pass` varchar(500) NOT NULL,
  `a_img` varchar(500) NOT NULL,
  `web_name` varchar(500) NOT NULL,
  `web_img` varchar(500) NOT NULL,
  `fb` varchar(500) NOT NULL,
  `instagram` varchar(500) NOT NULL,
  `skype` varchar(500) NOT NULL,
  `linkedin` varchar(500) NOT NULL,
  `twiter` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`a_id`, `a_email`, `a_pass`, `a_img`, `web_name`, `web_img`, `fb`, `instagram`, `skype`, `linkedin`, `twiter`) VALUES
(1, 'admin@gmail.com', '$2y$10$xIB9x5V4onq9TruaTxtEF.8xU1Vm/Jla9s8UOAk7PUBe.FStnS9P6', 'assets/profile/_MG_5296_Profile.jpg', 'food cort', '', 'https://facebook.com/yousufislam191', 'https://instagram.com/yousufislam191', 'https://skype.com/yousufislam191', 'https://linkedin.com/in/yousufislam191', 'https://twitter.com/yousufislam191');

-- --------------------------------------------------------

--
-- Table structure for table `category_name`
--

CREATE TABLE `category_name` (
  `id` int(50) NOT NULL,
  `c_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_name`
--

INSERT INTO `category_name` (`id`, `c_name`) VALUES
(2, 'food'),
(3, 'burger'),
(4, 'pasta');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(11) NOT NULL,
  `food_title` varchar(100) NOT NULL,
  `food_price` varchar(40) NOT NULL,
  `food_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_title`, `food_price`, `food_img`) VALUES
(1, 'Chicken Pasta', '$20', 'assets/product/1.jpg'),
(2, 'Flamboyant Pink Top', '$20', 'assets/product/2.jpg'),
(3, 'Flamboyant Pink Top', '$30', 'assets/product/3.jpg'),
(4, 'Flamboyant Pink Top', '$30', 'assets/product/4.jpg'),
(5, 'food', '$30', 'assets/product/6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `s_id` int(50) NOT NULL,
  `s_title` varchar(500) NOT NULL,
  `s_subtitle` varchar(500) NOT NULL,
  `s_description` varchar(500) NOT NULL,
  `s_img_path` varchar(500) NOT NULL,
  `s_offer_price` varchar(500) NOT NULL,
  `s_offer_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`s_id`, `s_title`, `s_subtitle`, `s_description`, `s_img_path`, `s_offer_price`, `s_offer_name`) VALUES
(2, 'chicken Kabar', 'chicekn', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus amet voluptatibus est maxime perferendis inventore quo! Dolorem, natus nihil? Doloribus?', 'assets/slider/chicken.jpg', '$20', 'offday'),
(3, 'spicy chicken burger with chilly sos', 'chicekn', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus amet voluptatibus est maxime perferendis inventore quo! Dolorem, natus nihil? Doloribus?', 'assets/slider/burger1.jpg', '$40', 'offday'),
(4, 'chicken soup with tanduri chicken', 'Spicy chicken', 'When the sun has set, no candle can replace it. Sunset is so marvelous that even the sun itself watches it every day in the reflections of the infinite oceans!\r\nWhen the sun has set, no candle can replace it. Sunset is so marvelous that even the sun itself watches it every day in the reflections of the infinite oceans!\r\n', 'assets/slider/soup.jpg', '$100', 'Eid offer');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `u_id` int(50) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_pass` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`u_id`, `u_name`, `u_email`, `u_pass`) VALUES
(2, 'Alex', 'alex@gmail.com', '$2y$10$iRNtjYlw.ez6gausKj.RSO3LZPiD64PlqiY1II1lUBdj6y2K3nvVa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `category_name`
--
ALTER TABLE `category_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `a_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category_name`
--
ALTER TABLE `category_name`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `s_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `u_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
