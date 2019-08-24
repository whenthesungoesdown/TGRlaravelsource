-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2019 at 12:09 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tgr`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` int(11) DEFAULT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `material` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `brand`, `price`, `category`, `weight`, `note`, `material`, `pic1`, `pic2`, `pic3`, `created_at`, `updated_at`) VALUES
(1, 'Yes You Can Notebook', 'When you deserve to have beautiful things that make working hard fun, and our \'Yes You Can\' notebook does just that. Its semi-hard cover makes it easy to carry around wherever you go.', 'CREATIVE MIDDLE\r\n\r\n', 250, 'Stationary\r\n\r\n', 236, NULL, NULL, 'Files/image/products/1WebTGR1.jpg', 'Files/image/products/1WebTGR2.jpg', 'Files/image/products/1WebTGR3.jpg', NULL, NULL),
(2, 'Mustard Fluer Notebook', 'Letting your ideas grow bigger,with our semi-hard cover and classic wiro binding notebook. With all the space you can work through even the toughest of writer\'s/ creative\'s block,or you can simply play a quick game of tic-tac-toe,both are valid options.', 'CREATIVE MIDDLE\r\n\r\n', 250, 'Stationary\r\n\r\n', 238, NULL, NULL, 'Files/image/products/2WebTGR1.jpg', 'Files/image/products/2WebTGR2.jpg', 'Files/image/products/2WebTGR3.jpg', NULL, NULL),
(3, 'Pastel Vibrance Notebook', 'The Pastel Vibrance journal features a vivacious full-colour geometric cover. Its packed with 128 blank pages for your big ideas.', 'CREATIVE MIDDLE', 250, 'Stationary', 252, '128 Blank Pages', NULL, 'Files/image/products/3WebTGR1.jpg', 'Files/image/products/3WebTGR2.jpg', 'Files/image/products/3WebTGR3.jpg', NULL, NULL),
(4, 'Marigold Green Tea', 'Our tribute to the iconic Marigold,a symbol of celebration and festive joy. Hands down Tea Trunk\'s best selling green tea and most popular as gifts,wedding favours and souvenirs of India. Petals of yellow and orange marigold flower,lemongrass bits,green tea.                                                                                                                           Health Benefits: Perfect to improve digestion and compliment your detox regime. Marigold belongs to the Calendula family. It has natural healing properties.', 'TEA TRUNK', 399, 'Tea\r\n', 180, 'Size - 50g', 'Rose Gold Tins', 'Files/image/products/4WebTGR1.jpg', 'Files/image/products/4WebTGR2.jpg', 'Files/image/products/4WebTGR3.jpg', NULL, NULL),
(5, 'Long Island Green Tea', 'Holiday in a teacup. This tropical green tea brings back memories of that vacation that happy place. Brew some for the day dreamer in you.                                          Mint is a natural cure for several digestive ailments. Sip on this tea when you are feeling bloated or when you have eaten food of uncertain quality. Orange and mint is a classic combination to improve your mood and concentration. Excellent tea to carry to your workplace or cure the day dreamer in you!', 'TEA TRUNK\r\n\r\n\r\n\r\n', 399, 'Tea\r\n', 174, 'Size - 50g', 'Rose Gold Tins', 'Files/image/products/5WebTGR1.jpg', 'Files/image/products/5WebTGR2.jpg', 'Files/image/products/5WebTGR3.jpg', NULL, NULL),
(6, 'Chilli Chai Black Tea', 'Your favorite masala tea infused with a hint of red chilli flakes. Chai lovers approved. Here\'s a cuppa for the firebrand in you. Really? You\'re going to make us give you a reason to have chai! Grandma-approved,masala chai has several health benefits from the spices infused in it - when consumed in moderate quantities.', 'TEA TRUNK', 399, 'Tea\r\n\r\n', 170, 'Size - 50g', 'Rose Gold Tins', 'Files/image/products/6WebTGR1.jpg', 'Files/image/products/6WebTGR2.jpg', 'Files/image/products/6WebTGR3.jpg', NULL, NULL),
(7, 'Apple Spice Black Tea', 'Just like the forbidden fruit a tea full of temptations. Inspired by the mulled wine,this fragrant tea can be naughty or nice. Brew it as it is or serve with a splash of dark rum. Melange of warm spices and malty Assam tea makes it is a perfect winter tea. Perfect to cure winter chills and rid you of stress and tardiness. Each ingredient has its own healing properties. Overall,a good tea to boost your immune system and add to your daily dose of antioxidants and nutrients.', 'TEA TRUNK\r\n\r\n\r\n\r\n', 399, 'Tea\r\n\r\n', 174, 'Size - 50g', 'Rose Gold Tins', 'Files/image/products/7WebTGR1.jpg', 'Files/image/products/7WebTGR2.jpg', 'Files/image/products/7WebTGR3.jpg', NULL, NULL),
(8, 'Hibiscus Green Tea', 'Put on your party shirt and let your taste buds do the Hula dance. Our bright-hued lady in red is here. Cools down your body temperature,making it an excellent choice for tea lovers who experience harsh summers and tropical weather. Rich in Vitamin C,Hibiscus tea improves your immunity and protects you against common cold and sore throat. It is anti-inflammatory properties,makes it a good tonic for the liver.', 'TEA TRUNK\r\n\r\n\r\n\r\n', 399, 'Tea\r\n\r\n', 172, 'Size - 50g', 'Rose Gold Tins', 'Files/image/products/8WebTGR1.jpg', 'Files/image/products/8WebTGR2.jpg', 'Files/image/products/8WebTGR3.jpg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
