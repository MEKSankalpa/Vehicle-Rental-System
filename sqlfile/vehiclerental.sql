-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 06:16 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehiclerental`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `invoice_id` int(20) NOT NULL,
  `amount` int(20) NOT NULL,
  `payment_method` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(20) NOT NULL,
  `vehicle_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `rental_id` int(20) NOT NULL,
  `rental_date` date NOT NULL,
  `rental_time` time(6) NOT NULL,
  `return_date` date NOT NULL,
  `vehicle_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `rental_status` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `driving_method` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblbrands`
--

CREATE TABLE `tblbrands` (
  `id` int(11) NOT NULL,
  `BrandName` varchar(120) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbrands`
--

INSERT INTO `tblbrands` (`id`, `BrandName`, `CreationDate`, `UpdationDate`) VALUES
(1, 'Maruti', '2017-06-18 16:24:34', '2017-06-19 06:42:23'),
(2, 'BMW', '2017-06-18 16:24:50', NULL),
(3, 'Audi', '2017-06-18 16:25:03', NULL),
(4, 'Nissan', '2017-06-18 16:25:13', NULL),
(5, 'Toyota', '2017-06-18 16:25:24', NULL),
(7, 'Marutiu', '2017-06-19 06:22:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblvehicles`
--

CREATE TABLE `tblvehicles` (
  `id` int(11) NOT NULL,
  `VehiclesTitle` varchar(150) DEFAULT NULL,
  `VehiclesBrand` int(11) DEFAULT NULL,
  `VehiclesOverview` longtext DEFAULT NULL,
  `PricePerDay` int(11) DEFAULT NULL,
  `FuelType` varchar(100) DEFAULT NULL,
  `ModelYear` int(6) DEFAULT NULL,
  `SeatingCapacity` int(11) DEFAULT NULL,
  `Vimage1` varchar(120) DEFAULT NULL,
  `AirConditioner` int(11) DEFAULT NULL,
  `PowerDoorLocks` int(11) DEFAULT NULL,
  `AntiLockBrakingSystem` int(11) DEFAULT NULL,
  `BrakeAssist` int(11) DEFAULT NULL,
  `PowerSteering` int(11) DEFAULT NULL,
  `DriverAirbag` int(11) DEFAULT NULL,
  `PassengerAirbag` int(11) DEFAULT NULL,
  `PowerWindows` int(11) DEFAULT NULL,
  `CDPlayer` int(11) DEFAULT NULL,
  `CentralLocking` int(11) DEFAULT NULL,
  `CrashSensor` int(11) DEFAULT NULL,
  `LeatherSeats` int(11) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvehicles`
--

INSERT INTO `tblvehicles` (`id`, `VehiclesTitle`, `VehiclesBrand`, `VehiclesOverview`, `PricePerDay`, `FuelType`, `ModelYear`, `SeatingCapacity`, `Vimage1`, `AirConditioner`, `PowerDoorLocks`, `AntiLockBrakingSystem`, `BrakeAssist`, `PowerSteering`, `DriverAirbag`, `PassengerAirbag`, `PowerWindows`, `CDPlayer`, `CentralLocking`, `CrashSensor`, `LeatherSeats`, `RegDate`, `UpdationDate`) VALUES
(8, 'zzzz', 7, '<p>vb</p>\r\n', 54, 'Petrol', 45, 0, 'car-b.jpg', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, '2021-06-26 16:29:08', NULL),
(9, 'nklkl', 3, '<p>nnm</p>\r\n', 5, 'Diesel', 100, 0, '_downloadfiles_wallpapers_1024_768_puppy_power_5413.jpg', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, '2021-06-26 16:33:14', NULL),
(10, 'mm', 5, '<p>zzz</p>\r\n', 54, 'Diesel', 100, 0, '17947-hrithik-roshan.jpg', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-26 16:40:13', NULL),
(11, 'jjj', 3, '<p>nm</p>\r\n', 54, 'Diesel', 45, 0, 'lg_640.jpg', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-26 16:47:32', NULL),
(40, 'j', 2, '<p>nmm</p>\r\n', 5, 'Petrol', 100, 0, 'cool-cars-wallpaper-hd-images-3[1].jpg', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2021-06-26 21:37:48', NULL),
(41, 'nklkl', 4, '<p>x</p>\r\n', 54, 'Petrol', 100, 0, 'maxresdefault.jpg', NULL, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2021-06-26 21:43:06', NULL),
(42, 'j', 3, '<p>bbnn</p>\r\n', 5, 'CNG', 100, 0, '_downloadfiles_wallpapers_1024_768_parrots_drawing_wallpaper_parrots_animals_366.jpg', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-26 21:50:26', NULL),
(43, 'j', 3, '<p>bbnn</p>\r\n', 5, 'CNG', 100, 0, '_downloadfiles_wallpapers_1024_768_parrots_drawing_wallpaper_parrots_animals_366.jpg', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-26 21:52:44', NULL),
(44, 'nklkl', 2, '<p>klk;l</p>\r\n', 54, 'CNG', 34, 0, 'lg_640.jpg', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-27 03:48:41', NULL),
(45, 'nklkl', 2, '<p>klk;l</p>\r\n', 54, 'CNG', 34, 0, 'lg_640.jpg', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-27 03:50:12', NULL),
(46, 'nklkl', 2, '<p>klk;l</p>\r\n', 54, 'CNG', 34, 0, 'lg_640.jpg', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-27 03:50:18', NULL),
(47, 'nklkl', 2, '<p>klk;l</p>\r\n', 54, 'CNG', 34, 0, 'lg_640.jpg', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-27 03:50:23', NULL),
(48, 'nklkl', 2, '<p>klk;l</p>\r\n', 54, 'CNG', 34, 0, 'lg_640.jpg', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-27 03:50:45', NULL),
(49, 'nklkl', 2, '<p>klk;l</p>\r\n', 54, 'CNG', 34, 0, 'lg_640.jpg', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-27 03:52:43', NULL),
(50, 'nklkl', 2, '<p>klk;l</p>\r\n', 54, 'CNG', 34, 0, 'lg_640.jpg', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-27 03:52:48', NULL),
(51, 'hh', 3, '<p>jkjk</p>\r\n', 54, 'Diesel', 100, 0, 'cf736bb0e3ed4b65d050f6defc7610ab.jpg', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2021-06-27 03:56:08', NULL),
(52, 'hh', 4, '<p>jk,j</p>\r\n', 54, 'Petrol', 45, 0, 'cf736bb0e3ed4b65d050f6defc7610ab.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 1, NULL, '2021-06-27 03:58:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_estonian_ci NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_number` int(10) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirm_password` varchar(20) CHARACTER SET utf16 NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicle_id` int(10) NOT NULL,
  `description` text NOT NULL,
  `vehicle_model_year` text NOT NULL,
  `vehicle_brand` varchar(20) NOT NULL,
  `capacity` text NOT NULL,
  `plate_number` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `vehicle_type` varchar(20) NOT NULL,
  `image_path` text NOT NULL,
  `passengers` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_category`
--

CREATE TABLE `vehicle_category` (
  `category_id` int(20) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`rental_id`);

--
-- Indexes for table `tblbrands`
--
ALTER TABLE `tblbrands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `invoice_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `rental_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblbrands`
--
ALTER TABLE `tblbrands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehicle_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
