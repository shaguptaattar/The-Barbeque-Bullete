-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2023 at 06:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_barbeque_bullete_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `Admin_Name` varchar(17) NOT NULL,
  `Admin_Image` text NOT NULL,
  `Restaurant_Address` varchar(100) NOT NULL,
  `Restaurant_Email_Id` varchar(25) NOT NULL,
  `Restaurant_Phone` varchar(13) NOT NULL,
  `Alternate_Phone` varchar(13) NOT NULL,
  `Opening_Day` varchar(20) NOT NULL,
  `Opening_Time` varchar(15) NOT NULL,
  `Last_Day` varchar(15) NOT NULL,
  `Last_Opening_Time` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Admin_Name`, `Admin_Image`, `Restaurant_Address`, `Restaurant_Email_Id`, `Restaurant_Phone`, `Alternate_Phone`, `Opening_Day`, `Opening_Time`, `Last_Day`, `Last_Opening_Time`) VALUES
(2, 'Suraj', 'Suraj.png', 'opp.RTO office, Tarabai Park , Kolhapur, Kolhapur, India, 416003', 'bbqbullete7@gmail.com', '9657788775', ' 974155122', 'Monday - Saturday', '09AM - 09PM', 'Sunday', '10AM - 08PM');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) NOT NULL,
  `booling_name` varchar(15) NOT NULL,
  `booking_email` varchar(25) NOT NULL,
  `data_and_time` varchar(30) NOT NULL,
  `No_people` varchar(3) NOT NULL,
  `booking_phone` varchar(13) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `booling_name`, `booking_email`, `data_and_time`, `No_people`, `booking_phone`, `message`) VALUES
(2, '', '', '', '', '', ''),
(3, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'VEG KEBAB'),
(2, 'NON-VEG'),
(3, 'SPECIAL TANDURI'),
(4, 'CHINESE');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `Product_Image` varchar(255) NOT NULL,
  `Product_Title` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `Product_Image`, `Product_Title`) VALUES
(2, 'panner _tika.jfif', 'Panner Tikha Pataka'),
(3, 'bbq-mix_vegetable.jfif', 'BBQ-Mix Vegetable'),
(4, 'BBQ-Chap soya.jfif', 'BBQ-Chap(Soya)'),
(5, 'bbq-mashroom.jfif', 'BBQ-Mashroom'),
(6, 'banjara_kebab.jfif', 'Banjara Kabab'),
(7, 'chiken_chillimilli.jfif', 'Chicken_Chilli Milli'),
(8, 'BBQ_dietbreast.jfif', 'BBQ-Diet Breast'),
(9, 'murg_malai_kabab.jfif', 'Murg Malai Kabab'),
(10, 'drum _stic_ lolipop.jfif', 'Drumstick Lolipop'),
(11, 'chiken_wings.jfif', 'Chicken Wings'),
(12, 'bbq_grilledwholeleg.jfif', 'BBQ-Grilled Whole Le'),
(13, 'drum _stic_ lolipop.jfif', 'Chicken Drumstick'),
(14, 'peshvai_tandoori.jfif', 'Peshvai Tandoori'),
(15, 'special_platter.jfif', 'BBQ-Special Platter'),
(16, 'veg_manchurian.jfif', 'Veg Manchurian'),
(17, 'veg_noodl.jfif', 'Veg Noodles'),
(18, 'chiken_friedrice.jfif', 'Chicken Fried Rice'),
(19, 'momos.jfif', 'Veg Momos');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `id` int(16) NOT NULL,
  `ProductImage` varchar(100) NOT NULL,
  `ProductName` varchar(30) NOT NULL,
  `category` varchar(15) NOT NULL,
  `details` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`id`, `ProductImage`, `ProductName`, `category`, `details`) VALUES
(1, 'Panneer Tikha Pataka.jfif', 'Panneer Tikha Pataka', 'VEG KEBAB', 'xyz'),
(2, 'BBQ-Mashroom.jfif', 'BBQ-Mushroom', 'VEG KEBAB', 'xyz'),
(3, 'BBQ-Mix Vegetable.jfif', 'BBQ-Mix Vegetable', 'VEG KEBAB', 'xyz'),
(4, 'BBQ-Chap(Soya).jfif', 'BBQ-Chap(Soya)', 'VEG KEBAB', 'xyz'),
(5, 'Banjara Kebab.jfif', 'Banjara Kebab', 'NON-VEG', 'xyz'),
(6, 'Chicken Chilli Milli.jfif', 'Chicken Chilli Milli', 'NON-VEG', 'xyz'),
(7, 'BBQ-Diet Breast.jfif', 'BBQ-Diet Breast', 'NON-VEG', 'xyz'),
(8, 'Murg Malai Kebab.jfif', 'Murg Malai Kebab', 'NON-VEG', 'xyz'),
(9, 'Drum Stick Loloipop.jfif', 'Drum Stick Loloipop', 'NON-VEG', 'xyz'),
(10, 'Chicken Wings.jfif', 'Chicken Wings', 'NON-VEG', 'xyz'),
(11, 'Grilled BBQ-Whole Leg.jfif', 'Grilled BBQ-Whole Leg', 'NON-VEG', 'xyz'),
(12, 'Chicken Drumstick.jfif', 'Chicken Drumstick', 'NON-VEG', 'xyz'),
(13, 'Peshavai Tandoori.jpg', 'Peshavai Tandoori', 'SPECIAL TANDURI', 'xyz'),
(14, 'BBQ-Special Platter.jfif', 'BBQ-Special Platter', 'SPECIAL TANDURI', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `Email_Id` varchar(25) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `Email_Id`, `Password`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) NOT NULL,
  `reviews_name` varchar(15) NOT NULL,
  `Add_Review` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `reviews_name`, `Add_Review`) VALUES
(1, 'Sourabh Shinde', 'The Kabab & tandoor was fresh,mouthwatering, properly prepared and a great value for the price.'),
(2, 'Amar Dhumal', 'Barbeque Bullete Taste and Bike my passion and weak points This venture is unique Taste 100%'),
(3, 'Suraj Jankar', 'This cozy restaurant has left the best impressions! I would like to come back here again and again.'),
(4, 'Durga Khemlapur', 'It’s a great experience. The ambiance is very welcoming and charming. Amazing wines, food and service.'),
(6, 'Krunal', 'It’s a great experience. The ambiance is very welcoming and charming. Amazing wines, food and service.');

-- --------------------------------------------------------

--
-- Table structure for table `slider_forms`
--

CREATE TABLE `slider_forms` (
  `id` int(11) NOT NULL,
  `Banner_Title` varchar(20) NOT NULL,
  `Banner_Image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Banner_Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider_forms`
--

INSERT INTO `slider_forms` (`id`, `Banner_Title`, `Banner_Image`, `Banner_Description`) VALUES
(1, 'The Barbeque Bullete', 'banner1.png', 'Come and experiance Delicious BBQ grill. The Barbeque Bullete @Tarabai park, Kolhapur Enjoy the deli'),
(2, 'Food & beverage', 'banner2.png', 'Celebrate the season of sparkle with your family. Party time is just a click away. We are all set to'),
(3, 'Welcome to Barbeque', 'banner3.png', 'We are happy to announce you that we have launched new diet recipe. Its really jucy & delicious but ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_forms`
--
ALTER TABLE `slider_forms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider_forms`
--
ALTER TABLE `slider_forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
