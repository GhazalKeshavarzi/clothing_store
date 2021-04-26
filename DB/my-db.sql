-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2021 at 09:44 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'ghazal', 'keshavarzi');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `material` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `id_cat`, `name`, `price`, `size`, `material`, `color`, `picture`) VALUES
(17, 2, 'شلوار گت', '380000', '28', 'کتان', 'مشکی', '1.jpg'),
(18, 2, 'کتان راه راه', '250000', '29', 'کتان', 'رنگ رنگی', '2.jpg'),
(19, 2, 'شرت گلگی', '198000', '29', 'کتان', 'آبی و قرمز', '3.jpg'),
(20, 2, 'شلوار پروانه ای', '380000', '30', 'جین', 'رنگین کمانی', '4.jpg'),
(21, 2, 'دامن روسی', '198000', '31', 'غواصی', 'مشکی-طلایی', '5.jpg'),
(22, 2, 'دامن گلگلی چین پلیسه', '198000', '29', 'غواصی', 'مشکی', '6.jpg'),
(23, 2, 'دامن بلند لامبادا', '380000', '28', 'چرم مصنوعی', 'مشکی', '7.jpg'),
(24, 2, 'شلوار ماهی پولکی', '420000', '30', 'پولکی دو رو کشی', 'نقره ای', '8.jpg'),
(25, 1, 'پیرهن چهل تکه', '198000', 's,m,xl', 'جین', 'آبی روشن و تیره', '9.jpg'),
(26, 1, 'آستین کلوش', '198000', 's,m', 'بافت', 'سبز', '10.jpg'),
(27, 1, 'یقه اسکی', '198000', 's,m,l,xl', 'بافت', 'زرشکی', '11.jpg'),
(28, 1, 'یقه هفت', '198000', 's,m,l,xl', 'ساتن کش', 'سفید', '12.jpg'),
(29, 1, 'آستین عروسکی', '198000', 'l,xl', 'کتان', 'سفید', '13.jpg'),
(30, 1, 'راه راه برجسته', '198000', 's,xl', 'بافت', 'کرم ', '14.jpg'),
(32, 1, 'راه راه برجسته ریز', '198000', 's,m', 'بافت', 'قهوه ای', '15.jpg'),
(33, 1, 'چال زنبوری', '198000', 's,m,xl', 'بافت', 'نارنجی', '16.jpg'),
(34, 3, 'نیم بوت جورابی', '480000', '37،38،39', 'بافت', 'خاکستری', '17.jpg'),
(35, 3, 'مجلسی پاپیونی', '320000', '37،40،39', 'براق', 'سفید،مشکی', '18.jpg'),
(36, 3, 'گلگلی سمبوسه ای', '360000', '38،39،40،41', 'اشبالت', 'مشکی', '19.jpg'),
(37, 3, 'بوت بلند سربازی', '520000', '38،39،40،41', 'چرم طبیعی', 'مشکی', '20.jpg'),
(38, 3, 'نیم بوت پاشنه شیشه ای', '430000', '37،38', 'چرم مصنوعی براق', 'صورتی پاستلی', '21.jpg'),
(39, 3, 'نیم بوت بندی مجلسی', '380000', '37،38،39', 'اشبالت', 'یشمی', '22.jpg'),
(40, 3, 'بوت بلند سربازی فانتزی', '620000', '37،40،39', 'چرم طبیعی', 'قهوه ای', '23.jpg'),
(41, 3, 'بوت بلند جین', '620000', '37،40،39', 'جین', 'آبی روشن و تیره', '24.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_cat`
--

CREATE TABLE `product_cat` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `product_cat`
--

INSERT INTO `product_cat` (`id`, `title`) VALUES
(1, 'شومیز و تاپ'),
(2, 'شلوار و دامن'),
(3, 'کفش و بوت');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `id` int(11) NOT NULL,
  `user-id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `pay_refrence` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sell_detail`
--

CREATE TABLE `sell_detail` (
  `id` int(11) NOT NULL,
  `sell_id` int(11) NOT NULL,
  `product-id` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `number_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `date_register` date NOT NULL,
  `telphone` varchar(10) COLLATE utf8mb4_persian_ci NOT NULL,
  `national_num` varchar(10) COLLATE utf8mb4_persian_ci NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Indexes for table `product_cat`
--
ALTER TABLE `product_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell_detail`
--
ALTER TABLE `sell_detail`
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
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `product_cat`
--
ALTER TABLE `product_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sell_detail`
--
ALTER TABLE `sell_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `product_category` FOREIGN KEY (`id_cat`) REFERENCES `product_cat` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
