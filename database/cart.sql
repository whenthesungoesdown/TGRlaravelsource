-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2019 at 10:42 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `product_name`, `price`, `quantity`, `session_id`, `created_at`, `updated_at`, `pic`) VALUES
(1, 2, 'Mustard Fluer Notebook', 250.00, 1, '9nSoxy922lVRxQIBwmb2eYfV5WGvLlp52fOasCCo', '2019-09-02 02:46:59', '2019-09-02 02:46:59', '[{\"pic1\":\"Files\\/image\\/products\\/2WebTGR1.jpg\"}]'),
(2, 3, 'Pastel Vibrance Notebook', 250.00, 2, '9nSoxy922lVRxQIBwmb2eYfV5WGvLlp52fOasCCo', '2019-09-02 02:49:03', '2019-09-02 02:49:03', '[{\"pic1\":\"Files\\/image\\/products\\/3WebTGR1.jpg\"}]'),
(3, 3, 'Pastel Vibrance Notebook', 250.00, 1, '9nSoxy922lVRxQIBwmb2eYfV5WGvLlp52fOasCCo', '2019-09-02 02:58:46', '2019-09-02 02:58:46', '[{\"pic1\":\"Files\\/image\\/products\\/3WebTGR1.jpg\"}]'),
(4, 6, 'Chilli Chai Black Tea', 399.00, 3, '9nSoxy922lVRxQIBwmb2eYfV5WGvLlp52fOasCCo', '2019-09-02 03:02:00', '2019-09-02 03:02:00', '[{\"pic1\":\"Files\\/image\\/products\\/6WebTGR1.jpg\"}]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
