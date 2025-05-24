-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2025 at 03:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(1, 9, 1, 4),
(3, 9, 4, 6),
(4, 9, 12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `login_logs`
--

CREATE TABLE `login_logs` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `ip_address` text NOT NULL,
  `city` text NOT NULL,
  `region` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `device_info` text NOT NULL,
  `date_logged` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_logs`
--

INSERT INTO `login_logs` (`id`, `user_id`, `ip_address`, `city`, `region`, `country`, `device_info`, `date_logged`) VALUES
(1, '16', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-15 17:46:56'),
(2, '16', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-16 00:32:22'),
(3, '16', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-16 00:32:47'),
(4, '16', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-16 00:43:33'),
(5, '16', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-16 00:44:01'),
(6, '16', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-16 00:45:54'),
(7, '18', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-16 00:53:09'),
(8, '18', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-16 00:58:03'),
(9, '16', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-16 01:00:44'),
(10, '18', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-16 01:08:17'),
(11, '18', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-16 01:12:37'),
(12, '18', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-16 01:16:02'),
(13, '16', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-16 02:12:14'),
(14, '18', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-16 04:10:20'),
(15, '16', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-16 10:49:39'),
(16, '18', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-16 10:58:41'),
(17, '16', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-16 16:59:34'),
(18, '18', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-16 17:24:36'),
(19, '18', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-16 19:44:46'),
(20, '18', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-16 20:57:11'),
(21, '16', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-16 21:19:37'),
(22, '16', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-17 00:49:14'),
(23, '18', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-17 01:12:07'),
(24, '18', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-17 01:17:14'),
(25, '18', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-17 02:35:33'),
(26, '18', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-17 10:53:07'),
(27, '16', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-17 14:28:34'),
(28, '18', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-17 15:56:18'),
(29, '16', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-17 16:33:54'),
(30, '18', '::1', 'Localhost', NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-17 17:22:27');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_username` varchar(100) NOT NULL,
  `receiver_username` varchar(100) DEFAULT 'admin',
  `message_text` text NOT NULL,
  `image_path` text DEFAULT NULL,
  `timestamp` datetime DEFAULT current_timestamp(),
  `is_read` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_username`, `receiver_username`, `message_text`, `image_path`, `timestamp`, `is_read`) VALUES
(57, '18', 'admin', 'customer 1', '', '2025-05-16 04:08:24', 0),
(58, '18', 'admin', 'admin1', '', '2025-05-15 22:08:30', 1),
(59, '18', 'admin', 'customer 2', '', '2025-05-16 04:08:37', 0),
(60, '18', 'admin', 'admin 2', '', '2025-05-15 22:08:42', 1),
(61, '18', 'admin', 'customer 3', '', '2025-05-16 04:08:52', 0),
(62, '18', 'admin', 'admin 3', '', '2025-05-15 22:08:59', 1),
(63, '18', 'admin', 'customer  4', '', '2025-05-16 11:03:59', 0),
(65, '18', 'admin', 'admin 4', '', '2025-05-16 05:05:21', 1),
(66, '18', 'admin', 'customer 5', '', '2025-05-16 11:07:03', 0),
(67, '18', 'admin', 'i want this design', 'upload/msg_6826b31c2a535_1747366684.png', '2025-05-16 11:38:04', 0),
(68, '18', 'admin', 'this one also', 'upload/msg_6826b4618ffe1_1747367009.png', '2025-05-16 11:43:29', 0),
(69, '18', 'admin', 'and this', 'upload/msg_6826b46e04554_1747367022.png', '2025-05-16 11:43:42', 0),
(70, '18', 'admin', 'okay', '', '2025-05-16 05:58:24', 1),
(71, '18', 'admin', '', 'upload/msg_6826bb5d06793_1747368797.png', '2025-05-16 12:13:17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `payment_method` enum('Pickup','COD') NOT NULL,
  `delivery_address` text DEFAULT NULL,
  `refference_num` text DEFAULT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `order_status` enum('Pending','Processing','Shipped','Delivered','Cancelled','Ready for Pickup','Picked Up') NOT NULL DEFAULT 'Pending',
  `reasons` text NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `payment_method`, `delivery_address`, `refference_num`, `total_amount`, `order_status`, `reasons`, `order_date`, `date_updated`, `updated_at`) VALUES
(7, '18', 'Pickup', 'Pickup', '', 900.00, 'Picked Up', '', '2025-05-16 16:52:56', '2025-05-13 02:09:24', '2025-05-17 02:14:26'),
(8, '18', 'COD', 'Poblacion Mahayag, Zamboanag del Sur', '', 360.00, 'Pending', '', '2025-05-16 17:49:57', '2025-05-15 02:09:24', '2025-05-17 13:37:04'),
(9, '18', 'COD', 'Mahayag', '', 455.00, 'Delivered', '', '2025-05-16 17:54:20', '2025-05-17 02:09:24', '2025-05-17 01:58:45'),
(10, '18', 'Pickup', 'Pickup', '', 100.00, 'Picked Up', '', '2025-05-16 19:45:54', '2025-05-16 02:12:58', '2025-05-17 02:14:17'),
(11, '18', 'COD', 'Mahayag', '', 1000.00, 'Delivered', '', '2025-05-17 00:01:37', '2025-05-16 02:09:24', '2025-05-17 02:14:11'),
(12, '18', 'Pickup', 'Pickup', '', 150.00, 'Picked Up', '', '2025-05-17 00:22:01', '2025-05-17 02:13:31', '2025-05-17 02:13:31'),
(13, '18', 'Pickup', 'Pickup', '1234567890123', 150.00, 'Picked Up', '', '2025-05-17 00:25:37', '2025-05-17 02:13:35', '2025-05-17 02:13:35'),
(14, '18', 'Pickup', 'Pickup', '', 100.00, 'Cancelled', '', '2025-05-17 00:27:39', '2025-05-17 02:09:24', '2025-05-17 01:14:13'),
(15, '18', 'Pickup', 'Pickup', '1234567890123', 150.00, 'Picked Up', '', '2025-05-17 00:40:08', '2025-05-17 02:13:39', '2025-05-17 02:13:39'),
(16, '18', 'COD', 'Mahayag', '', 1240.00, 'Shipped', '', '2025-05-17 02:36:08', '2025-05-17 03:43:51', '2025-05-17 03:43:51'),
(17, '18', 'Pickup', 'Pickup', '1234567890123', 250.00, 'Processing', '', '2025-05-17 02:36:40', '2025-05-17 02:36:40', '2025-05-17 03:12:07'),
(18, '18', 'COD', 'Dumingag', '', 220.00, 'Cancelled', 'Way Stock', '2025-05-17 03:14:05', '2025-05-17 03:14:05', '2025-05-17 13:55:36');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`item_id`, `order_id`, `product_id`, `product_name`, `price`, `quantity`, `subtotal`) VALUES
(1, 7, 2, 'Beautifully handcrafted from premium abaca fibers, this eco-friendly bag showcases a perfect blend of durability and elegance. The intricate weaving highlights the artistry of skilled artisans, making each piece unique. With its natural texture and earthy', 900.00, 1, 900.00),
(2, 8, 9, 'Oversized handmade abaca scrunch bag! Spacious, durable, and eco-friendly—perfect for carrying all your essentials in style while supporting sustainable fashion.', 120.00, 3, 360.00),
(3, 9, 6, 'Step out in style with this handmade twine sling bag! Crafted from durable abaca fibers, it’s eco-friendly, lightweight, and perfect for any adventure. A blend of fashion and function you’ll love.', 380.00, 1, 380.00),
(4, 9, 10, 'Stay stylish and eco-friendly with this handmade medium abaca scrunch bag! Perfectly sized for your essentials, it’s durable, lightweight, and a chic addition to any outfit.', 75.00, 1, 75.00),
(5, 10, 3, 'Keep your essentials organized with this handmade abaca pencil case. Durable, eco-friendly, and uniquely stylish—perfect for school, work.', 50.00, 2, 100.00),
(6, 11, 2, 'Beautifully handcrafted from premium abaca fibers, this eco-friendly bag showcases a perfect blend of durability and elegance. The intricate weaving highlights the artistry of skilled artisans, making each piece unique. With its natural texture and earthy', 900.00, 1, 900.00),
(7, 12, 10, 'Stay stylish and eco-friendly with this handmade medium abaca scrunch bag! Perfectly sized for your essentials, it’s durable, lightweight, and a chic addition to any outfit.', 75.00, 2, 150.00),
(8, 13, 10, 'Stay stylish and eco-friendly with this handmade medium abaca scrunch bag! Perfectly sized for your essentials, it’s durable, lightweight, and a chic addition to any outfit.', 75.00, 2, 150.00),
(9, 14, 3, 'Keep your essentials organized with this handmade abaca pencil case. Durable, eco-friendly, and uniquely stylish—perfect for school, work.', 50.00, 2, 100.00),
(10, 15, 3, 'Keep your essentials organized with this handmade abaca pencil case. Durable, eco-friendly, and uniquely stylish—perfect for school, work.', 50.00, 3, 150.00),
(11, 16, 6, 'Step out in style with this handmade twine sling bag! Crafted from durable abaca fibers, it’s eco-friendly, lightweight, and perfect for any adventure. A blend of fashion and function you’ll love.', 380.00, 3, 1140.00),
(12, 17, 3, 'Keep your essentials organized with this handmade abaca pencil case. Durable, eco-friendly, and uniquely stylish—perfect for school, work.', 50.00, 5, 250.00),
(13, 18, 9, 'Oversized handmade abaca scrunch bag! Spacious, durable, and eco-friendly—perfect for carrying all your essentials in style while supporting sustainable fashion.', 120.00, 1, 120.00);

-- --------------------------------------------------------

--
-- Table structure for table `order_tracking`
--

CREATE TABLE `order_tracking` (
  `tracking_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `status` enum('Pending','Processing','Shipped','Delivered','Cancelled','Ready for Pickup','Picked Up') NOT NULL,
  `reasons` text NOT NULL,
  `status_date` datetime NOT NULL DEFAULT current_timestamp(),
  `comments` text DEFAULT NULL,
  `date_updated` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_tracking`
--

INSERT INTO `order_tracking` (`tracking_id`, `order_id`, `status`, `reasons`, `status_date`, `comments`, `date_updated`, `updated_by`) VALUES
(1, 7, 'Picked Up', '', '2025-05-16 16:52:56', 'Order Approved', '2025-05-17 02:09:05', '18'),
(2, 8, 'Cancelled', '', '2025-05-16 17:49:57', 'Order Decline', '2025-05-17 02:09:05', '18'),
(3, 9, 'Delivered', '', '2025-05-17 17:54:20', 'Order Approved', '2025-05-17 02:09:05', '18'),
(4, 10, 'Picked Up', '', '2025-05-16 19:45:54', 'Order Approved', '2025-05-17 02:12:58', '18'),
(5, 11, 'Delivered', '', '2025-05-17 00:01:37', 'Order Approved', '2025-05-17 02:09:05', '18'),
(6, 12, 'Picked Up', '', '2025-05-17 00:22:01', 'Order Approved', '2025-05-17 02:13:31', '18'),
(7, 13, 'Picked Up', '', '2025-05-17 00:25:37', 'Order Approved', '2025-05-17 02:13:35', '18'),
(8, 14, 'Pending', '', '2025-05-17 00:27:39', 'Order Decline', '2025-05-17 02:09:05', '18'),
(9, 15, 'Picked Up', '', '2025-05-17 00:40:08', 'Order Approved', '2025-05-17 02:13:39', '18'),
(10, 16, 'Shipped', '', '2025-05-17 02:36:08', 'Order Approved', '2025-05-17 03:43:51', '18'),
(11, 17, 'Processing', '', '2025-05-17 02:36:40', 'Order Approved', '2025-05-17 02:36:40', '18'),
(12, 18, 'Cancelled', 'Way Stock', '2025-05-17 03:14:05', 'Order Decline', '2025-05-17 03:14:05', '18');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `type_id` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `owner` varchar(255) NOT NULL,
  `size` varchar(50) NOT NULL,
  `material` text NOT NULL,
  `adress` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `qty` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `type_id`, `description`, `owner`, `size`, `material`, `adress`, `price`, `image`, `qty`, `created_at`) VALUES
(1, 4, '1,3,4,5', 'Beautifully handcrafted from premium abaca fibers, this eco-friendly bag showcases a perfect blend of durability and elegance. The intricate weaving highlights the artistry of skilled artisans, making each piece unique. With its natural texture and earthy tones, this abaca bag is not just a functional accessory but also a stylish statement. Ideal for casual outings or as a sustainable fashion choice, it’s lightweight, sturdy, and designed to last. Truly, a masterpiece of nature and craftsmanship combined.', 'Carmen Mejos', 'md', 'This Abaka is from Lower Landing', 'Lower Landing', 700.00, 'uploads/products/Picture1.png', '20', '2025-05-14 03:12:49'),
(2, 4, '1,3,4,5', 'Beautifully handcrafted from premium abaca fibers, this eco-friendly bag showcases a perfect blend of durability and elegance. The intricate weaving highlights the artistry of skilled artisans, making each piece unique. With its natural texture and earthy tones, this abaca bag is not just a functional accessory but also a stylish statement. Ideal for casual outings or as a sustainable fashion choice, it’s lightweight, sturdy, and designed to last. Truly, a masterpiece of nature and craftsmanship combined.', 'Florita Dela Cruz', 'lg', 'This a pure Twine Abaka', 'Lower Landing', 900.00, 'uploads/products/Picture2.png', '19', '2025-05-14 03:17:00'),
(3, 10, '3', 'Keep your essentials organized with this handmade abaca pencil case. Durable, eco-friendly, and uniquely stylish—perfect for school, work.', 'Charita Ybanez', 'sm', 'This a pure Twine Abaka', 'Josefina', 50.00, 'uploads/products/Picture3.png', '115', '2025-05-14 03:19:20'),
(6, 12, '9', 'Step out in style with this handmade twine sling bag! Crafted from durable abaca fibers, it’s eco-friendly, lightweight, and perfect for any adventure. A blend of fashion and function you’ll love.', 'Evelyn Rosalinda', 'sm', 'This a pure Twine Abaka', 'Josefina', 380.00, 'uploads/products/Picture6.png', '29', '2025-05-14 03:45:57'),
(9, 17, '3', 'Oversized handmade abaca scrunch bag! Spacious, durable, and eco-friendly—perfect for carrying all your essentials in style while supporting sustainable fashion.', 'Teresita Alvarez', 'lg', 'This a pure Twine Abaka', 'Lower Landing', 120.00, 'uploads/products/Picture9.png', '12', '2025-05-14 16:14:08'),
(10, 17, '3,5', 'Stay stylish and eco-friendly with this handmade medium abaca scrunch bag! Perfectly sized for your essentials, it’s durable, lightweight, and a chic addition to any outfit.', 'Evelyn Rosalinda', 'md', 'This a pure Twine Abaka', 'Lower Landing', 75.00, 'uploads/products/Picture10.png', '24', '2025-05-15 05:51:49');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`) VALUES
(4, 'Shopping Bag'),
(5, 'Totee bag'),
(6, 'Hand Bag'),
(10, 'Pencil Case'),
(11, 'Twin Wallet'),
(12, 'Twin Sling Bag'),
(17, 'Scrunch Bag');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `name`) VALUES
(1, 'Shoulder Bag'),
(3, 'Handbag'),
(4, 'Eco Bag'),
(5, 'Shopping Bag'),
(9, 'Sling Bag');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `gender` text NOT NULL,
  `cont` text NOT NULL,
  `dob` text NOT NULL,
  `age` text NOT NULL,
  `role` text NOT NULL,
  `gmail` varchar(200) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(60) NOT NULL,
  `image_path` text NOT NULL,
  `status` text NOT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `address`, `gender`, `cont`, `dob`, `age`, `role`, `gmail`, `username`, `password`, `image_path`, `status`, `activate_code`, `reset_code`, `created_at`) VALUES
(16, 'Wilfredo', 'Dumon', 'Catalan', 'Purok', '', '', '1997-10-12', '27', 'admin', 'catalanwilfredo97@gmail.com', 'admin', '$2y$12$jsXp4dlXH/w3jdbW0cXwtes1WYU4rmNevmqmamw6jvJwfXAi8VMa2', 'uploads/profile/6823e008e4a86.png', '1', '', '774242', '0000-00-00'),
(18, 'Wilfredo', 'Dumon', 'Catalan', 'Purok', 'Male', '09510052243', '2025-05-15', '', 'user', 'mr.daotz97@gmail.com', 'wilfred', '$2y$12$HNxMQDKihdTG8SImnMbyqORkHiyc/07SU.2Eyk.yXIROyJBm4gwNe', '../../main/template/uploads/profile/user.jpg', '1', '688944', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_logs`
--
ALTER TABLE `login_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `idx_orders_user_id` (`user_id`),
  ADD KEY `idx_orders_order_date` (`order_date`),
  ADD KEY `idx_orders_status` (`order_status`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `idx_order_items_product_id` (`product_id`);

--
-- Indexes for table `order_tracking`
--
ALTER TABLE `order_tracking`
  ADD PRIMARY KEY (`tracking_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_logs`
--
ALTER TABLE `login_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_tracking`
--
ALTER TABLE `order_tracking`
  MODIFY `tracking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `order_tracking`
--
ALTER TABLE `order_tracking`
  ADD CONSTRAINT `order_tracking_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
