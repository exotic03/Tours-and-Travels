-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2023 at 05:25 PM
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
-- Database: `tour_and_travels`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings_info`
--

CREATE TABLE `bookings_info` (
  `id` int(100) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `package_price` varchar(100) NOT NULL,
  `tourist_number` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `traveller_name` varchar(100) NOT NULL,
  `traveller_age` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `payment_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings_info`
--

INSERT INTO `bookings_info` (`id`, `package_name`, `package_price`, `tourist_number`, `date`, `contact_no`, `traveller_name`, `traveller_age`, `user_id`, `payment_id`) VALUES
(10, 'Mesmerizing Coorg', '30000', '2', '2023-10-19', '7897569878', 'Sourav Saha, Supratim Das', '22, 22', '1', ''),
(11, 'Amazing Meghalaya', '60000', '3', '2023-11-01', '8978256578', 'Ankit Das, Aranya Biswas, Aniket Paul', '26, 27, 26', '2', ''),
(12, 'Amazing Meghalaya', '20000', '1', '2023-11-10', '7980236045', 'Suman Ghosh', '22', '1', 'pay_MuM2foceT7iPFz'),
(13, 'Amazing Meghalaya', '20000', '1', '2023-11-10', '7980236045', 'Suman Ghosh', '22', '1', 'pay_MuM6NcdvPNQ7Mk'),
(14, 'Splendid Goa', '12000', '1', '2023-11-09', '7897569878', 'Sayan Saha', '20', '1', 'pay_MuTHfBj8SJ6epm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings_info`
--
ALTER TABLE `bookings_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings_info`
--
ALTER TABLE `bookings_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
