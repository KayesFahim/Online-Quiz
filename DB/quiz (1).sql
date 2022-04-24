-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 12:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `round` int(100) NOT NULL,
  `mark` int(100) NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL,
  `answere` varchar(100) NOT NULL,
  `addedAt` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `question`, `round`, `mark`, `option1`, `option2`, `option3`, `option4`, `answere`, `addedAt`) VALUES
(1, 'National Fruits ?', 1, 10, 'Orange', 'Apple', 'Mango', 'Jack Fruits', 'Jack Fruits', '2022-04-20'),
(2, 'National Animals ?', 1, 10, 'Cow', 'Lion', 'Royal Bengal Tiger', 'Dog', 'Royal Bengal Tiger', '2022-04-20'),
(3, 'Which animal is known as the \'Ship of the Desert\"?', 2, 10, 'Cow', 'Dog', 'Camel', 'Goat', 'Camel', '2022-04-21'),
(4, 'How many days are there in a week?', 2, 10, '6 Days', '7 Days', '8 Days', '9 Days', '7 Days', '2022-04-21'),
(5, 'How many hours are there in a day?', 3, 10, '20 Hours', '21 Hours', '24 Hours', '22 Hours', '24 Hours', '2022-04-21'),
(6, 'Rainbow consist of how many colours?', 3, 10, '6', '7', '8', '9', '7', '2022-04-21'),
(7, 'How many minutes are there in an hour?', 1, 10, '60 Minutes', '40 Minutes', '50 Minutes', '30 Minutes', '60 Minutes', '2022-04-21'),
(8, 'What is the Capital Of Bangladesh ?', 1, 10, 'Dhaka', 'Jassore', 'Sylhet', 'Comilla', 'Dhaka', '2022-04-21'),
(9, 'What is The Capital of India ?', 2, 10, 'New Delhi', 'Dhaka', 'Katmandhu', 'London', 'New Delhi', '2022-04-21'),
(10, 'What Is the Difference between 5 - 5 ?', 2, 10, '0', '1', '2', '5', '0', '2022-04-21'),
(11, 'Which is the smallest month of the year?', 1, 10, 'February', 'January', 'June', 'July', 'February', '2022-04-24'),
(12, 'Which colour symbolises peace?', 2, 10, 'Black', 'Red', 'Green', 'White', 'White', '2022-04-24'),
(13, 'Name the largest mammal?', 3, 10, 'Blue Whale', 'Human', 'Cow', 'Elephant', 'Blue Whale', '2022-04-24'),
(14, 'Sun rises in the', 3, 10, 'East', 'West', 'South', 'North', 'East', '2022-04-24'),
(15, 'Name the largest planet of our Solar System?', 3, 10, 'Jupiter', 'Mars', 'Sun', 'Cukkama', 'Jupiter', '2022-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `result` int(100) NOT NULL,
  `round` int(100) NOT NULL,
  `tiemdate` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `email`, `result`, `round`, `tiemdate`) VALUES
(1, 'abc@gmail.com', 140, 0, '0000-00-00 00:00:00.000000'),
(2, 'abc@gmail.com', 150, 0, '0000-00-00 00:00:00.000000'),
(3, 'abc@gmail.com', 150, 0, '2022-04-24 16:25:57.432482');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `createdAt` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `createdAt`, `phone`) VALUES
(1, 'abc@gmail.com', 'ABC', '123456', '2022-04-20 09:03:10', '01532904322'),
(2, 'xyz@gmail.com', 'XYZ', '1234', '2022-04-20 09:04:18', '01877368193'),
(3, 'hasan@gmail.com', 'Hasan Mahmud', '1234', '2022-04-21 20:01:40', '01886311070');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
