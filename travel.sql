-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2023 at 06:14 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Cat_id` int(100) NOT NULL,
  `Cat_name` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat_id`, `Cat_name`) VALUES
(1, 'Standard Package'),
(3, 'Business Package'),
(4, 'Special Event Package');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactid` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phno` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactid`, `Name`, `Phno`, `Email`, `Message`) VALUES
(1, 'Mehar', '9501065206', 'mehar@gmail.com', 'We have read about the interest your advertisement in the times of India about the vacation trip. We will appreciate, if you kindly send the detailed information about the cost of the trip,the luggage wight, economy class and first class and etc. . The above information is required for our managing director who will like to enjoy the holiday trip along with his family.'),
(2, 'Japleen', '9915079133', 'japu@gmail.com', 'We have read about the interest your advertisement in the times of India about the vacation trip. We will appreciate, if you kindly send the detailed information about the cost of the trip,the luggage wight, economy class and first class and etc. . The above information is required for our managing director who will like to enjoy the holiday trip along with his family.'),
(3, 'Veena', '9815724956', 'veena12@gmail.com', 'We have read about the interest your advertisement in the times of India about the vacation trip. We will appreciate, if you kindly send the detailed information about the cost of the trip,the luggage wight, economy class and first class and etc. . The above information is required for our managing director who will like to enjoy the holiday trip along with his family.'),
(4, 'Sahil', '9814532456', 'Sahil@yahoo.com', 'We have read about the interest your advertisement in the times of India about the vacation trip. We will appreciate, if you kindly send the detailed information about the cost of the trip,the luggage wight, economy class and first class and etc. . The above information is required for our managing director who will like to enjoy the holiday trip along with his family.'),
(5, 'Varinder', '9812345234', 'vinnysharma@gmail.com', 'We have read about the interest your advertisement in the times of India about the vacation trip. We will appreciate, if you kindly send the detailed information about the cost of the trip,the luggage wight, economy class and first class and etc. . The above information is required for our managing director who will like to enjoy the holiday trip along with his family.');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `Enquiryid` int(50) NOT NULL,
  `Packageid` int(50) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Mobileno` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Price` varchar(12) NOT NULL,
  `NoofDays` int(50) NOT NULL,
  `Child` int(50) NOT NULL,
  `Adults` int(50) NOT NULL,
  `Message` varchar(900) NOT NULL,
  `Statusfield` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`Enquiryid`, `Packageid`, `Name`, `Gender`, `Mobileno`, `Email`, `Price`, `NoofDays`, `Child`, `Adults`, `Message`, `Statusfield`) VALUES
(33, 1, 'Second Package', 'Male', '01478523695', 'd@g.com', '20000', 2, 2, 2, 'hello', 'Pending'),
(34, 1, 'shakib', 'Male', '01236547891', 'lkn@gm.com', '41000', 1, 1, 1, 'hello', 'Pending'),
(35, 1, 'bshjsdbv', 'Male', '011111111111', 'lkn@gm.com', '41000', 1, 1, 1, 'new hello', 'Pending'),
(36, 19, 'jhcshjd', 'Male', '0111122233', 'cjdbhj@ga.com', '25000', 2, 2, 2, 'helllooooooooo helllooooooooo helllooooooooo helllooooooooo ', 'Pending'),
(37, 19, 'cjsdjkjchkds', 'Male', '0111122233', 'cjdbhj@ga.com', '25000', 2, 2, 2, 'helllooooooooo helllooooooooo helllooooooooo helllooooooooo ', 'Pending'),
(38, 1, 'baust', 'Male', '01478523695', 'trail@g.com', '41000', 5, 2, 2, 'new again', 'Pending'),
(39, 29, 'server', 'Male', '3155654565', 'mnsmcbd@com', '16000', 2, 2, 2, 'sbcjhjbsdjndjk', 'Pending'),
(40, 32, 'kazi', 'Male', '01478523695', 'd@g.com', '1000', 2, 2, 2, 'vgg dgf d  jku ', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Packid` int(200) NOT NULL,
  `Packname` varchar(1000) NOT NULL,
  `Category` int(200) NOT NULL,
  `Subcategory` int(200) NOT NULL,
  `Packprice` int(200) NOT NULL,
  `Pic1` varchar(8000) NOT NULL,
  `Pic2` varchar(8000) NOT NULL,
  `Pic3` varchar(8000) NOT NULL,
  `Detail` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Packid`, `Packname`, `Category`, `Subcategory`, `Packprice`, `Pic1`, `Pic2`, `Pic3`, `Detail`) VALUES
(1, 'Exclusive Creative Studio', 1, 1, 41000, 'ExclusiveCreativeStudio1.jpg', 'ExclusiveCreativeStudio2.jpg', 'ExclusiveCreativeStudio3.jpg', 'Description:\r\nThe room size 1,300 sft with 01 living room 01 dining , 01 office room and 02 bed room with well amenities and interior, bathtub in washrooms.\r\n<hr>\r\nOther Features:\r\n32\" LCD Television, Air Conditioning, Bathtub, Breakfast, Car Parking, Dressing Mirror, Electronic Safety Locker, Hair Dryer, High Speed Wi-Fi, Intercom, King size bed with luxury fittings,  Mineral water 500ml @ 02 bottles.'),
(2, 'Executive Suite (Sea View)', 1, 2, 24000, 'LuxuryExecutiveSuite5.jpg', 'LuxuryExecutiveSuite6.jpg', 'LuxuryExecutiveSuite7.jpg', 'Description:\r\nThe room size 650 sft with 01 living room and 01 bed room with well amenities and interior, bathtub in washrooms, the ocean are visible from the rooms and from the Balcony.\r\n<hr>\r\nOther Features:\r\n32\" LCD Television, Air Conditioning, Bathtub, Breakfast, Car Parking, Dressing Mirror, Electronic Safety Locker, Hair Dryer, High Speed Wi-Fi, Intercom, King size bed with luxury fittings,  Mineral water 500ml @ 02 bottles.'),
(5, 'Premier Deluxe ', 1, 3, 15000, 'PremierDeluxe1.jpg', 'PremierDeluxe2.jpg', 'PremierDeluxe3.jpg', 'Description:\r\nThe room size is 390 sft with well amenities and interior, bathtub in wash rooms and super view of the ocean from balcony.\r\n<hr>\r\nOther Features:\r\n32\" LCD Television, Air Conditioning, Bathtub, Breakfast, Car Parking, Dressing Mirror, Electronic Safety Locker, Hair Dryer, High Speed Wi-Fi, Intercom, King size bed with luxury fittings,  Mineral water 500ml @ 02 bottles.'),
(15, 'Luxury Package', 3, 16, 21000, 'EconomyClass6.jpg', 'EconomyClass5.jpg', 'EconomyClass4.jpg', 'Description:\r\nThe room size 650 sft with 01 living room and 01 bed room with well amenities and interior, bathtub in washrooms, the ocean are visible from the rooms and from the Balcony.\r\n<hr>\r\nOther Features:\r\n32\" LCD Television, Air Conditioning, Bathtub, Breakfast, Car Parking, Dressing Mirror, Electronic Safety Locker, Hair Dryer, High Speed Wi-Fi, Intercom, King size bed with luxury fittings,  Mineral water 500ml @ 02 bottles.'),
(19, 'Honeymoon Suite ', 4, 18, 25000, 'HoneymoonSuite1.jpg', 'HoneymoonSuite2.jpg', 'HoneymoonSuite3.jpg', 'Description:\r\nThe room size 550 sft with well decorated amenities and interior, bathtub in washrooms, the ocean is visible from the rooms.\r\n<hr>\r\nOther Features:\r\n32\" LCD Television, Air Conditioning, Bathtub, Breakfast, Car Parking, Dressing Mirror, Electronic Safety Locker, Hair Dryer, High Speed Wi-Fi, Intercom, King size bed with luxury fittings,  Mineral water 500ml @ 02 bottles.'),
(27, 'Luxury Package', 3, 15, 24000, 'BusinessClass6.jpg', 'BusinessClass7.jpg', 'BusinessClass9.jpg', 'Description:\r\nThe room size 1,300 sft with 01 living room 01 dining , 01 office room and 02 bed room with well amenities and interior, bathtub in washrooms.\r\n<hr>\r\nOther Features:\r\n32\" LCD Television, Air Conditioning, Bathtub, Breakfast, Car Parking, Dressing Mirror, Electronic Safety Locker, Hair Dryer, High Speed Wi-Fi, Intercom, King size bed with luxury fittings,  Mineral water 500ml @ 02 bottles.'),
(28, 'Super Creative Studio     ', 1, 1, 35000, 'SuperCreativeStudio1.jpg', 'SuperCreativeStudio2.jpg', 'SuperCreativeStudio3.jpg', 'Description:\r\nThe room size 650 sft with 01 living room and 01 bed room with well amenities and interior, Handicraft furniture’s in room, bathtub in washrooms, the ocean are visible from the Balcony.\r\n<hr>\r\nOther Features:\r\n32\" LCD Television, Air Conditioning, Bathtub, Breakfast, Car Parking, Dressing Mirror, Electronic Safety Locker, Hair Dryer, High Speed Wi-Fi, Intercom, King size bed with luxury fittings,  Mineral water 500ml @ 02 bottles.'),
(29, ' Executive Suite (Mountain View)', 1, 2, 16000, 'ExecutiveSuiteMountain1.jpg', 'ExecutiveSuiteMountain2.jpg', 'ExecutiveSuiteMountain3.jpg', 'Description:\r\nThe room size is 550 sft with well amenities and interior, Bathtub in wash rooms.\r\n<hr>\r\nOther Features:\r\n32\" LCD Television, Air Conditioning, Bathtub, Breakfast, Car Parking, Dressing Mirror, Electronic Safety Locker, Hair Dryer, High Speed Wi-Fi, Intercom, King size bed with luxury fittings,  Mineral water 500ml @ 02 bottles.'),
(32, 'Superior Deluxe ', 1, 3, 12000, 'SuperiorDeluxe1.jpg', 'SuperiorDeluxe2.jpg', 'SuperiorDeluxe3.jpg', 'Description:\r\nThe room size is 420 sft with well amenities and interior, bathtub in wash room.\r\n<hr>\r\nOther Features:\r\n32\" LCD Television, Air Conditioning, Bathtub, Breakfast, Car Parking, Dressing Mirror, Electronic Safety Locker, Hair Dryer, High Speed Wi-Fi, Intercom, King size bed with luxury fittings,  Mineral water 500ml @ 02 bottles.'),
(36, 'Simple Package', 3, 16, 12000, 'EconomyClass1.jpg', 'EconomyClass2.jpg', 'EconomyClass3.jpg', 'Description:\r\nThe room size is 420 sft with well amenities and interior, bathtub in wash room.\r\n<hr>\r\nOther Features:\r\n32\" LCD Television, Air Conditioning, Bathtub, Breakfast, Car Parking, Dressing Mirror, Electronic Safety Locker, Hair Dryer, High Speed Wi-Fi, Intercom, King size bed with luxury fittings,  Mineral water 500ml @ 02 bottles.'),
(38, 'Simple Package', 3, 15, 16000, 'BusinessClass1.jpg', 'BusinessClass3.jpg', 'BusinessClass4.jpg', 'Description:\r\nThe room size is 550 sft with well amenities and interior, Bathtub in wash rooms.\r\n<hr>\r\nOther Features:\r\n32\" LCD Television, Air Conditioning, Bathtub, Breakfast, Car Parking, Dressing Mirror, Electronic Safety Locker, Hair Dryer, High Speed Wi-Fi, Intercom, King size bed with luxury fittings,  Mineral water 500ml @ 02 bottles.'),
(39, 'admin', 10, 27, 100000, '317907344_175037971841863_8772450925032904897_n.jpg', '317744136_1300489690711241_248438241588084150_n.jpg', 'pic.jpg', 'yes ');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `Subcatid` int(200) NOT NULL,
  `Subcatname` varchar(1000) NOT NULL,
  `Catid` int(200) NOT NULL,
  `Pic` varchar(8000) NOT NULL,
  `Detail` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`Subcatid`, `Subcatname`, `Catid`, `Pic`, `Detail`) VALUES
(1, 'Creative Studio (Family Pack)', 1, 'ExclusiveCreativeStudio1.jpg', ''),
(2, 'Executive Suite (Family Pack)', 1, 'LuxaryExecutiveSuite1.jpg', ''),
(3, 'Deluxe (Family Pack)', 1, 'PremierDeluxe1_sml.jpg', ''),
(15, 'Business Class', 3, 'BusinessClass_sml.jpg', ''),
(16, ' Economy Class', 3, 'EconomyClass_sml.jpg', ''),
(18, 'Wedding Festival', 4, 'WeddingFestival.jpg', ''),
(27, 'admin', 10, '324663057_1781653112206215_4206208255654449183_n.jpg', 'hello guys');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(100) NOT NULL,
  `Pwd` varchar(100) NOT NULL,
  `Typeofuser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Pwd`, `Typeofuser`) VALUES
('admin', 'admin', 'Admin'),
('neeru', 'neeru', 'General'),
('manu', '12345', 'Admin'),
('preet', 'preet', 'General');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cat_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`Enquiryid`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Packid`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`Subcatid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `Enquiryid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `Packid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `Subcatid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
