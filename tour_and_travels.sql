-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 06:39 PM
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
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `email`, `username`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin', '20232024'),
(2, 'souravsaha@gmail.com', 'sourav@hello', 'souravsaha03');

-- --------------------------------------------------------

--
-- Table structure for table `package_info`
--

CREATE TABLE `package_info` (
  `id` int(10) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `package_price` varchar(100) NOT NULL,
  `day` varchar(10) NOT NULL,
  `night` varchar(100) NOT NULL,
  `package_image` varchar(100) NOT NULL,
  `classification` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `package_desc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package_info`
--

INSERT INTO `package_info` (`id`, `package_name`, `package_price`, `day`, `night`, `package_image`, `classification`, `category`, `location`, `package_desc`) VALUES
(7, 'Magnificent Kashmir', '20000', '4', '3', '1694533415kashmir.jpg', 'Summer Destination', 'premium', 'Srinagar - Gulmarg - Sonmarg - Pahalgaon', '<p>Enjoy magnificant view of kashmir in summer. Enjoy boat ride at dal lake in srinagar , feel magnificent view of mountains at gulmarg sonmarg and pahalgaon</p>\r\n'),
(8, 'Exotic Vacation in Goa', '15000', '3', '2', '1694533595GOA2.jpg', 'Summer Destination', 'standard', 'North Goa - South Goa', '<p>Enjoy a great vacation in goa.&nbsp;</p>\r\n'),
(9, 'Beautiful Ladakh', '21000', '4', '3', '1694533817LADHAK.jpg', 'Summer Destination', 'premium', 'Leh - Ladakh - Pangong - Nubra valley', '<p>Feel and enjoy the adventure of leh ladakh. Enjoy magnificent view of pangong lake and many more.</p>\r\n'),
(10, 'Mesmerizing Shimla', '17000', '3', '2', '1694533955shimla.jpg', 'Summer Destination', 'premium', 'Shimla', '<p>Enjoy mesmerizing summer holiday at shimla.</p>\r\n'),
(11, 'Relaxing Andaman', '16999', '4', '3', '1694534179ANDAMAN.jpg', 'Summer Destination', 'standard', 'Port Blair - Havelock - Niel Island', '<p>Enjoy feel and relax at andaman nicobar island. Explore various islands and places in andaman.</p>\r\n'),
(12, 'Magnificent Darjeeling', '22000', '6', '5', '1694534378darjeeling pic 1.jpg', 'Summer Destination', 'premium', 'Darjeeling - Gangtok - Kalimpong', '<p>Enjoy summer at beautiful hillstation darjeeling. Also explore and enjoy at gangtok</p>\r\n'),
(13, 'Nainital', '13000', '3', '2', '1694534509NAINITAL.jpg', 'Summer Destination', 'premium', 'Nainital', '<p>Enjoy and feel maountains and take a beautiful boat ride at nainital</p>\r\n'),
(14, 'Scenic Ooty', '20000', '5', '4', '1694534634ooty pic.jpg', 'Summer Destination', 'premium', 'Mysore - Coorg - Ooty', '<p>Enjoy scenic view of ooty and explore mysore city.</p>\r\n'),
(15, 'Dooars', '20000', '4', '3', '1694534918DOOARS.jpg', 'Summer Destination', 'premium', 'Rajabhatkhawa - jaldapara - Gorumara - Buxa - Dooars', '<p>Explore wild life&nbsp;sanctuary of Rajabhatkhawa, jaldapara and gorumara.</p>\r\n'),
(16, 'Mysore', '15000', '5', '4', '1694535013karnataka.jpg', 'Summer Destination', 'standard', 'Mysore - Coorg - Ooty', '<p>Explore the historic city mysore and also scenic view of ooty.</p>\r\n'),
(17, 'Splendid Himachal', '19999', '5', '4', '1694535160HIMACHAL.jpg', 'Summer Destination', 'premium', 'Shimla - Kullu - Manali', '<p>Enjoy relxaing vacation at shimla and take part on adventure activites at kullu and manali.</p>\r\n'),
(18, 'Historic Odisha', '16000', '5', '4', '1694535544odisha.jpg', 'Summer Destination', 'standard', 'Puri - Konark - Bhubaneswar', '<p>Explore historic places of konark and bhubaneswar. Enjoy relaxing holiday at ouri beach.</p>\r\n'),
(19, 'Digha', '4000', '2', '1', '1694535633DIGHA.jpg', 'Summer Destination', 'standard', 'Digha', '<p>Enjoy relaxing vacation at digha.</p>\r\n'),
(20, 'Uttarakhand', '20000', '5', '4', '1694535908uttarakhand.jpg', 'Summer Destination', 'premium', 'Haridwar - Rishikesh - Mussoorie', '<p>Explore historic temples and places in haridwar. Enjoy beauty of mussoorie hillstation.</p>\r\n'),
(21, 'Scenic McLeodganj', '15000', '4', '3', '1694536008mcleodganj.jpg', 'Summer Destination', 'standard', 'McLeodganj - Dharamshala - Dalhousie', '<p>Enjoy scenic view of dharmashala, dalhousie and mcleodganj.</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_info`
--
ALTER TABLE `package_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `package_info`
--
ALTER TABLE `package_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
