-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Feb 26, 2023 at 12:25 PM
-- Server version: 10.9.4-MariaDB-1:10.9.4+maria~ubu2204
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `endAssignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `Appointment`
--

CREATE TABLE `Appointment` (
  `id` int(11) NOT NULL,
  `startingTime` varchar(255) NOT NULL,
  `customerName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dateOfAppointment` varchar(255) NOT NULL,
  `employeeId` int(11) NOT NULL,
  `productID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Appointment`
--

INSERT INTO `Appointment` (`id`, `startingTime`, `customerName`, `email`, `dateOfAppointment`, `employeeId`, `productID`) VALUES
(11, '12:43', 'Corey', 'ale@gmail.com', '2023-01-19', 5, 2),
(15, '11:43', 'Ale', 'A@gmail.com', '2023-01-22', 3, 2),
(33, '13:43', 'x', '', '', 5, 1),
(34, '13:43', 'x', 'at@gmail.com', '', 5, 1),
(37, '00:10', 'Paty', 'pa@gmail.com', '2023-02-17', 3, 1),
(38, '14:11', 'ale', 'a@gmail.com', '2023-02-02', 3, 3),
(39, '', '', '', '', 3, 1),
(40, '14:20', 'ale', 'a@a', '2023-02-20', 3, 3),
(41, '15:29', 'ale', 'b@b', '2023-02-23', 3, 1),
(42, '12:33', 'a', 'b@c', '2023-02-15', 3, 1),
(43, '15:32', 'ale', 'c@c', '2023-02-21', 3, 1),
(44, '12:36', 'ale', 'b@c', '2023-02-14', 3, 1),
(45, '12:37', 'ale', 'sa@f', '2023-02-21', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Message`
--

CREATE TABLE `Message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Message`
--

INSERT INTO `Message` (`id`, `name`, `email`, `message`) VALUES
(84, 's', 's@D', 'sds'),
(85, 's', 's@D', 'sds'),
(86, 's', 's@D', 'sds'),
(87, 's', 's@D', 'sds'),
(88, 'a', 'a@f', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `id` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `price` varchar(155) NOT NULL,
  `duration` varchar(155) NOT NULL,
  `imageSRC` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`id`, `tittle`, `productName`, `description`, `price`, `duration`, `imageSRC`) VALUES
(1, 'Life is too short to have boring hair!', 'HairStyling', '\"The right hairstyle can make a plain woman beautiful, and a beautiful woman unforgettable.\"', '45,00', '40', '/pictures/4.jpg'),
(2, 'We take your nails to the next level!', 'Manicure', ' “Great nails don’t happen by chance. They happen by appointment.', '45,00', '60', '/pictures/manicureEssa.webp'),
(3, 'We help you to feel in paradise!', 'Massage', ' Stress, headache, anxiety, toxins, pain, depression, muscle aches. Let it all go with massage.', '50,00', '60', '/pictures/massage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `username`, `password`, `firstname`, `lastname`) VALUES
(3, 'Thais', '$2y$10$U2WQDGrR9n1B9dL90nhLhu/Lx1y2GTElcaMeD38btFYJHCeGZW68u', 'thais', 'Melo'),
(4, 'corey', '$2y$10$7H8L2Qtt.1zr2KGIZ5tOTOJhF2HnjAB9b0Myz9VZgQr84Y.mlu0qq', 'co', 'co'),
(5, 'ale', '$2y$10$/bK3eTTJo5GI3M8b.39reeWsm9yJi001s1sWHtB5dwhsSlgSCrewW', 'Alessandra', 'Ribeiro'),
(6, 'ale', '$2y$10$WNYPp1l5lm2UG9kAG0P1OurPlh5vUGu0pUOiFX8T7DrnR8nBcDKPO', 'ales', 'ribeiro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Appointment`
--
ALTER TABLE `Appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Message`
--
ALTER TABLE `Message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Appointment`
--
ALTER TABLE `Appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `Message`
--
ALTER TABLE `Message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
