-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Feb 27, 2023 at 04:05 PM
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
(47, '20:47', 'Ale', 'a@t', '2023-03-01', 9, 1),
(48, '15:59', 'Marcia', 'm@m', '2023-02-28', 8, 2),
(49, '19:02', 'Henrique', 'a@a', '2023-02-28', 9, 3),
(50, '19:21', 'MArio', 'a@g', '2023-02-28', 9, 2);

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
(88, 'a', 'a@f', 'f'),
(89, 'ale', 'a@t', 'a'),
(90, 'ale', 'a@D', 'dddd'),
(91, 'a', 'f@h', 'd'),
(92, 'a', 'f@h', 'd'),
(93, 'a', 'f@h', 'd'),
(94, 'Ale', 'gds@g', 'fddgggh'),
(95, 'Ale', 'gds@g', 'fddgggh');

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
(8, 'ale', '$2y$10$87aLitxe/J6Vh8AFhNGr4eC5aQ9VT6v3mEgmXuxupygTcCuSmM3ji', 'Alessandra', 'Ribeiro'),
(9, 'corey', '$2y$10$GTDYOw2NonQkQP7j6z7mZeqqvSU5XTXK/m0v5foUufQho4ei0ZFpy', 'Corey', 'Waple');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `Message`
--
ALTER TABLE `Message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
