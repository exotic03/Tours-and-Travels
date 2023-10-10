-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2023 at 06:38 PM
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
  `package_desc` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package_info`
--

INSERT INTO `package_info` (`id`, `package_name`, `package_price`, `day`, `night`, `package_image`, `classification`, `category`, `location`, `package_desc`) VALUES
(7, 'Magnificent Kashmir', '20000', '4', '3', '1694533415kashmir.jpg', 'Summer Destination', 'premium', 'Srinagar - Gulmarg - Sonmarg - Pahalgaon', '<h2><strong>Day 1 - Arrival in Srinagar</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>On arrival in Srinagar, meet a Yatra representative who will arrange your transfer to Srinagar Houseboat.</p>\r\n\r\n<p>Srinagar, situated on the banks of river Jhelum, is the summer capital of Jammu and Kashmir. Its awe-inspiring landscape, magnificent architecture, tombs and temples, exquisite gardens and Dal Lake make it a heaven on earth. Surrounded by a number of lakes, this scenic city, serene in its own way, is also known as the Kashmiri Venice or the Venice of the East. Bestowing its old-world charm on tourists, Srinagar aces in natural beauty and historical significance.</p>\r\n\r\n<p>Begin the excursion by paying homage at Shankaracharya Temple. Named after the great saint, Shankaracharya, this temple is situated atop Gopadari Hill and is a revered Hindu pilgrimage site. Dedicated to Lord Shiva, this spiritual place can be reached after climbing around a hundred steps. It stands strong in an octagonal structure, resembling the shape of a Shiva linga.</p>\r\n\r\n<p>After this, journey to the Mughal Gardens and explore its unending beauty. With bright and colourful flowerbeds, gushing fountains and terraced lawns, the panoramic expanse of Mughal Gardens is beyond description.</p>\r\n\r\n<p>After a jaunt to the astonishing sites of Srinagar, treat yourselves by indulging in some shopping at the bustling Lal Chowk. You can buy locally produced products, such as leather goods, embroidered mats and carpets, antique jewellery and the highly demanded Pashmina shawls.</p>\r\n\r\n<p>After spending some moments of relaxation, proceed to experience a soothing shikara ride.</p>\r\n\r\n<p>Unique in its own way, Dal Lake captures the sight of all with its ever-charming beauty and floating market. The pulsating surroundings of this lake make it even more peaceful and will also rejuvenate you completely.</p>\r\n\r\n<p>Later, check-in at the Houseboat Followed by a hearty dinner, enjoy a pleasurable overnight stay.</p>\r\n\r\n<h2><strong>Day 2 - Drive from Srinagar to Gulmarg</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>After Breakfast, Drive from Srinagar to Gulmarg via Tangmarg Road, and after covering around 50 km, arrive at your destination. Post reaching here, transfer to the hotel and relax for some time.</p>\r\n\r\n<p>As serene and peaceful as it can get, Gulmarg is truly a fantasy for all. Gulmarg derived its name from the immense lushness of hills, full of colourful flowers, and is thus one of the most popular destinations in India. A wide expanse of panoramic surroundings, spectacular views and simplicity add solace to the omnipresent charm of this town.</p>\r\n\r\n<p>You may go on a fun-filled gondola ride at your own expense that offers a thrilling view of fir-clad slopes. With the evening at your leisure, you may opt for a stroll through enchanting valleys, along mountain streams, and to the lakes in the area.</p>\r\n\r\n<p>Later, return to the hotel and retire to your room for some sound sleep.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Day 3 - Gulmarg</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>After breakfast on this day enjoy your day in Gulmarg which is easily one of the premier hill resorts in the country. You could spend the day exploring the place; visit the world&#39;s highest Golf Course that the British once frequented to spend their summers (golf kit and caddy charges are at an additional cost). You could enjoy an exhilarating Gandola or cable car ride (Pay Directly). Do note that the Gondola ride is not included in the package and can be availed on direct payment basis; the ride will be operational depending on weather conditions. Later have a comfortable overnight stay at the hotel in Gulmarg &quot;Please note that in case there is heavy snow, a chained vehicle will have to be hired from Tanmarg to Gulmarg on direct payment basis. Also the Gondola ride is not included in the package and it completely depends on weather conditions. It may be closed at times due to bad weather or maintenance issues.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Day 4 - Gulmarg - Pahalgam</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>After a delectable breakfast, check-out from the hotel and drive to Pahalgam via NH-1A.</p>\r\n\r\n<p>Also known as the village of shepherds, Pahalgam attracts hordes of tourists owing to its gradually dropping temperature and the glistening river, Lidder flowing through here. Also, one of the best health resorts in the country, this astounding site is famous for its vast meadows, pine forests, pastures and a favourable weather. Its enthralling picturesque beauty is the reason behind some many Bollywood movies being shot here.</p>\r\n\r\n<p>After covering a distance of about 140 km, reach Pahalgam and check-in at the hotel and have a comfortable sleep in your room.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Day 5 - Pahalgam to Srinagar | En route visit to Avantipur</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>After a wholesome breakfast, check-out from the hotel and drive towards Srinagar through NH-1A and NH-501, en route visit Avantipur.</p>\r\n\r\n<p>Overlooked by river Jhelum, the town of Avantipur houses two temples that were almost ruined during medieval times. Dedicated to Lord Vishnu and Lord Shiva, these temples display intricate carvings and alluring sculptures along with an impressive architecture.</p>\r\n\r\n<p>Spend the evening at leisure.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Day 6 - Departure from Srinagar</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>After a scrumptious breakfast, check-out from the hotel and transfer to the Srinagar airport to continue your onward journey.</p>\r\n'),
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
(21, 'Scenic McLeodganj', '15000', '4', '3', '1694536008mcleodganj.jpg', 'Summer Destination', 'standard', 'McLeodganj - Dharamshala - Dalhousie', '<p>Enjoy scenic view of dharmashala, dalhousie and mcleodganj.</p>\r\n'),
(22, 'Winter Kashmir', '30000', '6', '5', '1694693383kashmir winter.jpg', 'Winter Destination', 'premium', 'Gulmarg - Sonmarg - Srinagar - Pahalgaon ', '<p>Enjoy your winter holiday at kashmir.</p>\r\n'),
(23, 'Memorable Shimla', '20000', '3', '2', '1694693396shimla winter.jpg', 'Winter Destination', 'premium', 'Shimla', '<p>Enjoy memorable winter holidat at shimla.</p>\r\n'),
(24, 'Relaxing Manali', '15000', '4', '3', '1694694210manali winter.jpg', 'Winter Destination', 'standard', 'Kullu - Manali', '<p>Relaxing winter holiday at manali and kullu.</p>\r\n'),
(25, 'Runn of Kutch', '12000', '2', '1', '1694694856runn of kutch.jpg', 'Winter Destination', 'standard', 'Runn of Kutch Gujarat', '<p>Permits for Visiting the Rann of Kutch<br />\r\nThe Rann of Kutch is a sensitive area, due to its proximity to the Pakistani border. Therefore, a permit is required to visit the salt desert. This can be obtained on the way at the Bhirandiyara village (famous for mawa, a sweet made from milk) checkpoint, about 55 kilometers (34 miles) from Bhuj. The cost is 100 rupees for an adult, 50 rupees for a child aged six to 12 years, 25 rupees for a motor bike and 50 rupees for a car. You&#39;ll need to '),
(26, 'Magnificent Kerala', '25000', '5', '4', '1694695098kerala boat.jpg', 'Winter Destination', 'standard', 'Cochin - Munnar - Alleppey ', '<p>Explore and enjoy God&#39;s Own Country - Kerala.</p>\r\n'),
(27, 'Jewels of Rajasthan', '30000', '6', '5', '1694695467rajasthan.jpg', 'Winter Destination', 'premium', 'Jaipur - Jaishalmer - Jodhpur - Udaipur', '<p>Enjoy beautiful cities of rajasthan.</p>\r\n'),
(28, 'Memorable Gangtok', '20000', '5', '4', '1694696828gangtok winter pic winter.jpg', 'Winter Destination', 'premium', 'Gangtok - Darjeeling', '<p>Enjoy memorable holiday at gangtok and darjeeling.</p>\r\n'),
(29, 'Memorable Mussoorie', '20000', '5', '4', '1694696136mussoorie winter.jpg', 'Winter Destination', 'premium', 'Mussoorie - Nainital', '<p>Enjoy relaxing and memorable holiday at mussoorie.</p>\r\n'),
(30, 'Mesmerizing Ooty', '15000', '4', '3', '1694696271ooty pic.jpg', 'Winter Destination', 'standard', 'Ooty - Coorg', '<p>Enjoy and explore ooty.</p>\r\n'),
(31, 'Winter Delhi', '25000', '5', '4', '1694696597new delhi winter.jpg', 'Winter Destination', 'premium', 'New Delhi', '<p>Enjoy and explore the history of new delhi.</p>\r\n'),
(32, 'Explore Agra', '10000', '2', '1', '1694696894agra winter.jpg', 'Winter Destination', 'standard', 'Agra', '<p>Explore the Taj Mahal and Agra Fort</p>\r\n'),
(33, 'Amazing Meghalaya', '20000', '5', '4', '1694705634meghalaya.jpg', 'Monsoon Destination', 'premium', 'Meghalaya - Shillong - Cherrapunji', '<p>Enjoy the beauty of monsoon at meghalaya.</p>\r\n'),
(34, 'Mesmerizing Coorg', '15000', '3', '2', '1694705753coorg.jpg', 'Monsoon Destination', 'standard', 'Coorg - Ooty', '<p>Feel and enjoy mesmerizing monsoon holiday at coorg</p>\r\n'),
(35, 'Exciting Lonavala', '10000', '2', '1', '1694705954lonavala.jpg', 'Monsoon Destination', 'standard', 'Lonavala - Khandala', '<p>Enjoy monsoon season at lonavala.</p>\r\n'),
(36, 'Monsoon Darjeeling', '10000', '3', '2', '1694706038darjeeling pic 1.jpg', 'Monsoon Destination', 'standard', 'Darjeeling', '<p>Enjoy monsoon at darjeeling</p>\r\n'),
(37, 'Splendid Goa', '12000', '3', '2', '1694706144goa.jpg', 'Monsoon Destination', 'standard', 'Goa', '<p>Enjoy and explore goa at the season of monsoon.</p>\r\n'),
(38, 'Monsoon Andaman', '15000', '4', '3', '1694706330andaman pic.jpg', 'Monsoon Destination', 'standard', 'Andaman Nicobor Island', '<p>Feel relax and enjoy at Andaman Nicobor island during monsoon.</p>\r\n'),
(39, 'Feel Munnar', '15000', '3', '2', '1694706671munnar.jpg', 'Monsoon Destination', 'standard', 'Munnar - Alleppey', '<p>Feel monsoon at munnar</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `package_info`
--
ALTER TABLE `package_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `package_info`
--
ALTER TABLE `package_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
