-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2021 at 02:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zimma`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `sn` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `prod_id` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'true',
  `order_id` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`sn`, `user_id`, `prod_id`, `quantity`, `status`, `order_id`) VALUES
(124, 'fb95c3c1d', 'L0920ROPs', '2', 'true', ''),
(125, 'fb95c3c1d', '0oDklA3', '2', 'true', ''),
(126, 'fb95c3c1d', '08iLK3bb', '2', 'true', ''),
(127, 'c4b6b25d8', 'N89skO0As', '1', 'true', '');

-- --------------------------------------------------------

--
-- Table structure for table `products_all`
--

CREATE TABLE `products_all` (
  `sn` int(25) NOT NULL,
  `unique_key` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `old_price` double(10,2) NOT NULL,
  `short_desc` varchar(300) NOT NULL,
  `category` varchar(255) NOT NULL,
  `in_stock` int(255) NOT NULL,
  `img_1` varchar(255) NOT NULL,
  `img_2` varchar(255) NOT NULL,
  `img_3` varchar(255) NOT NULL,
  `img_4` varchar(255) NOT NULL,
  `img_5` varchar(255) NOT NULL,
  `long_desc` text NOT NULL,
  `reviews` int(255) NOT NULL,
  `purchases` varchar(255) NOT NULL,
  `date_added` varchar(255) NOT NULL,
  `measurement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_all`
--

INSERT INTO `products_all` (`sn`, `unique_key`, `name`, `price`, `old_price`, `short_desc`, `category`, `in_stock`, `img_1`, `img_2`, `img_3`, `img_4`, `img_5`, `long_desc`, `reviews`, `purchases`, `date_added`, `measurement`) VALUES
(1, '8J90j', 'Beans', 150.00, 320.39, 'short beans description', 'grain', 1000000, '../assets/images/prod1.png', '../assets/images/prod2.png', '../assets/images/prod3.png', '../assets/images/prod4.png', '../assets/images/ppp.png', 'Long beans description', 5, '19', '', 'module'),
(3, '1K2n0i', 'Fish', 200.99, 0.00, 'short sedf', 'Frozen Fish', 1000000, '../assets/images/grid_1.jpg', '../assets/images/pp.png', '../assets/images/prod1.png', '../assets/images/prod2.png', '../assets/images/prod4.png', 'long desc', 9, '7', '', 'pieces'),
(4, 'O0hJ0P', 'Green Bean', 200.99, 400.00, 'short desc', 'vegetables', 1000000, '../assets/images/vegetables/breen-bean.png', '../assets/images/vegetables/breen-bean.png', '../assets/images/vegetables/breen-bean.png', '../assets/images/vegetables/breen-bean.png', '../assets/images/vegetables/breen-bean.png', 'Long desc', 1, '0', '8/05/2021', 'Bundle'),
(5, 'Y87bi2', 'Cabbage', 100.00, 200.00, 'short desc', 'vegetables', 1000000, '../assets/images/vegetables/cabbage.png', '../assets/images/vegetables/cabbage.png', '../assets/images/vegetables/cabbage.png', '../assets/images/vegetables/cabbage.png', '../assets/images/vegetables/cabbage.png', 'Long Desc', 1, '0', '8/05/2021', 'Piece'),
(6, '8Oih2O0L', 'Carrot', 200.00, 0.00, 'sd', 'vegetables', 1000000, '../assets/images/vegetables/carrot.png', '../assets/images/vegetables/carrot.png', '../assets/images/vegetables/carrot.png', '../assets/images/vegetables/carrot.png', '../assets/images/vegetables/carrot.png', 'ld', 1, '0', '8/05/2021', 'Piece'),
(7, 'K0Ol21sW', 'Onion', 100.00, 0.00, 'sd', 'vegetables', 1000000, '../assets/images/vegetables/onion.png', '../assets/images/vegetables/onion.png', '../assets/images/vegetables/onion.png', '../assets/images/vegetables/onion.png', '../assets/images/vegetables/onion.png', 'ld', 1, '0', '8/05/2021', 'piece'),
(11, 'L092nuOPs', 'Red Pepper', 50.00, 0.00, 'sd', 'vegetables', 1000000, '../assets/images/vegetables/pepper.png', '../assets/images/vegetables/pepper.png', '../assets/images/vegetables/pepper.png', '../assets/images/vegetables/pepper.png', '../assets/images/vegetables/pepper.png', 'ld', 1, '0', '8/05/2021', 'Piece'),
(12, 'G39jn1J', 'Pumpkin Leaf', 150.00, 0.00, 'sd', 'vegetables', 1000000, '../assets/images/vegetables/pumpkin.png', '../assets/images/vegetables/pumpkin-leaf.png', '../assets/images/vegetables/pumpkin-leaf.png', '../assets/images/vegetables/pumpkin.png', '../assets/images/vegetables/pumpkin-leaf.png', 'ld', 1, '0', '8/05/2021', 'Bundle'),
(13, 'B87iOms30', 'Tomatoes', 300.00, 390.00, 'sd', 'vegetables', 100000, '../assets/images/vegetables/tomato.png', '../assets/images/vegetables/tomato.png', '../assets/images/vegetables/tomato.png', '../assets/images/vegetables/tomato.png', '../assets/images/vegetables/tomato.png', 'ld', 1, '0', '8/05/2021', 'Piece'),
(14, 'K09oW3jb', 'Okra', 190.00, 198.00, 'sd', 'vegetables', 1000000, '../assets/images/vegetables/okra.png', '../assets/images/vegetables/okra.png', '../assets/images/vegetables/okra.png', '../assets/images/vegetables/okra.png', '../assets/images/vegetables/okra.png', 'ld', 1, '0', '8/05/2021', 'Bowl'),
(15, 'L0920ROPs', 'Green Pepper', 50.00, 0.00, 'sd', 'vegetables', 1000000, '../assets/images/vegetables/green-pepper.png', '../assets/images/vegetables/green-pepper.png', '../assets/images/vegetables/green-pepper.png', '../assets/images/vegetables/green-pepper.png', '../assets/images/vegetables/green-pepper.png', 'ld', 1, '0', '8/05/2021', 'Piece'),
(16, '08iLK3bb', 'Goat Meat', 1500.00, 1700.00, 'sd', 'protein', 1000000, '../assets/images/protein/goat-meat.png', '../assets/images/protein/goat-meat.png', '../assets/images/protein/goat-meat.png', '../assets/images/protein/goat-meat.png', '../assets/images/protein/goat-meat.png', 'ld', 1, '0', '8/05/2021', 'Kg'),
(17, 'P09jKl2', 'Orobo Chicken (Jombo)', 2200.00, 2400.00, 'sd', 'protein', 1000000, '../assets/images/protein/orobo-chicken.png', '../assets/images/protein/orobo-chicken.png', '../assets/images/protein/orobo-chicken.png', '../assets/images/protein/orobo-chicken.png', '../assets/images/protein/orobo-chicken.png', 'ld', 1, '0', '8/05/2021', 'Kg'),
(18, '0oDklA3', 'Turkey', 2400.00, 2550.00, 'sd', 'protein', 100000, '../assets/images/protein/turkey.png', '../assets/images/protein/turkey.png', '../assets/images/protein/turkey.png', '../assets/images/protein/turkey.png', '../assets/images/protein/turkey.png', 'ld', 1, '0', '8/05/2021', 'Kg'),
(19, '9OpKG72k', 'Chicken Gizzard', 2000.00, 2150.00, 'sd', 'protein', 100000, '../assets/images/protein/gizzard.png', '../assets/images/protein/gizzard2.png', '../assets/images/protein/gizzard3.png', '../assets/images/protein/gizzard.png', '../assets/images/protein/gizzard2.png', 'ld', 1, '0', '8/05/2021', 'Kg'),
(20, 'N89skO0As', 'Broiler', 1700.00, 1950.00, 'sd', 'protein', 1000000, '../assets/images/protein/broiler.png', '../assets/images/protein/broiler.png', '../assets/images/protein/broiler.png', '../assets/images/protein/broiler.png', '../assets/images/protein/broiler.png', 'ld', 1, '0', '8/05/2021', 'Kg'),
(21, 'M98G4bla', 'Frozen Chichen', 3000.00, 3700.00, 'sd', 'protein', 1000000, '../assets/images/protein/frozen-chicken.png', '../assets/images/protein/frozen-chicken.png', '../assets/images/protein/frozen-chicken.png', '../assets/images/protein/frozen-chicken.png', '../assets/images/protein/frozen-chicken.png', 'ld', 1, '0', '8/05/2021', 'Kg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sn` int(25) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL DEFAULT '',
  `lastName` varchar(255) NOT NULL DEFAULT '',
  `number` varchar(255) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `address2` varchar(255) NOT NULL DEFAULT '',
  `country` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(255) NOT NULL DEFAULT '',
  `terms` varchar(255) NOT NULL DEFAULT '',
  `is_admin` varchar(25) NOT NULL DEFAULT '',
  `joined` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sn`, `unique_id`, `email`, `password`, `firstName`, `lastName`, `number`, `address`, `address2`, `country`, `state`, `terms`, `is_admin`, `joined`) VALUES
(3, 'c4b6b25d8', 'palmerbideconcepts@gmail.com', '4b0ab7b94e92a4f175774a4ad8a9a8c4d273671086ef091a689d63d3752a53ba043a1daf6204c9d4043b24bb42e18903029b43acd5efeabf7f368c26d532ab6e', 'Joseph Chu', 'bide', '99999999999', 'east-west road', 'Abuja', 'Nigeria', 'Rivers', 'checked', '', ''),
(4, 'fb95c3c1d', 'chu@gmail.com', '4b0ab7b94e92a4f175774a4ad8a9a8c4d273671086ef091a689d63d3752a53ba043a1daf6204c9d4043b24bb42e18903029b43acd5efeabf7f368c26d532ab6e', '', '', '', '', '', '', '', '', 'yes', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `products_all`
--
ALTER TABLE `products_all`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `unique` (`unique_key`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `unique_id` (`unique_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `products_all`
--
ALTER TABLE `products_all`
  MODIFY `sn` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sn` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
