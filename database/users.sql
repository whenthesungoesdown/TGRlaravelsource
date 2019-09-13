-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2019 at 09:33 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mob_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_confirmation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `mob_num`, `password_confirmation`) VALUES
(1, 'Nancy', 'nancychhatwal97@gmail.com', NULL, '$2y$10$HnhIC84awb2Ib00rA7NX7u4CKqMvokBM5WRVfWOCmM5G69Z9DXrNG', NULL, '2019-08-26 20:55:57', '2019-09-13 01:10:04', '9958680250', '$2y$10$YO5gNsFNWbtoeXaQ79OMZuMv5dltKKNQrPHNxDElNqvGmWFltxKIO'),
(2, 'Piyush', 'guptap423@gmail.com', NULL, '$2y$10$ul71McwrT/QQ6k4nQCYCEe9YJIdbv4l4VCryF6X8EY3yI6lF.Pss2', NULL, '2019-09-03 11:07:31', '2019-09-03 11:07:31', '456778525', '$2y$10$RStv5romK15VkZLPZ8oSKOwyaRHFhjJ1I3gAhXXW/WBYk.VJFBE6i'),
(3, 'Sumit', 'ratawal.symit90@gmial.com', NULL, '$2y$10$oRuB6bcCae1hTowhPz/MqubsHFcYluJQuSQZHy8FldV2MMNLVMzca', NULL, '2019-09-04 04:32:16', '2019-09-04 04:32:16', '9711714467', '$2y$10$UYULF9XuUuLx5r/.5P8kAeoGsrEyJptuUz6RgQwnYrvE0xuvYeCEa'),
(4, 'sumit ratawal', 'ratawal.symit90@gmail.com', NULL, '$2y$10$uxI77xs9QrHBiFpb8qDWC.oHWS4SAUdeDqP.rHIDUge2LlK8JAucy', NULL, '2019-09-04 04:53:09', '2019-09-04 04:53:09', '9711714467', '$2y$10$1xJgcDigk094YsaOcVm8XOVeflJZD4YEUM.GF1O3ttwGeNrA6Pxx2'),
(5, 'abhijeet', 'ak806252@gmail.com', NULL, '$2y$10$RtORIZJ5eVXF2aT3fZZPFe8e5qiw0ADCzmaJ0aeu0r6AE/4J/qF42', NULL, '2019-09-05 02:12:34', '2019-09-05 02:12:34', '1234567809', '$2y$10$R8KAD4fw1js5ufUmILHLS.09XT1SIGGIi5j/Pn2F3ZRHst5MFM3q6'),
(6, 'karan', 'karangupta@gmail.com', NULL, '$2y$10$JxSQZr4l1C67qokg4kkK1umIm..FCrQU5WiJIY2mnLVna7pFzHiIe', NULL, '2019-09-07 08:21:11', '2019-09-07 08:21:11', '8877990235', '$2y$10$I2W5Dgwr44u44OhBpXTWl.UiPTR59W57QZA87.GajMlNx/YkSB4Pu'),
(7, 'Suhana', 'suhana123@yahoo.co.in', NULL, '$2y$10$e17pAa1uyPhQ72RF7zTby.C5j0EuZMsc.MXfBZH/ak4CtQnX/zKJ.', NULL, '2019-09-07 08:24:53', '2019-09-07 08:24:53', '9900887733', '$2y$10$UAyal5sdQE1Lr9RwkDRZ7eromWBaxzY27zplHd3upEEZILhuBGqQ2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
