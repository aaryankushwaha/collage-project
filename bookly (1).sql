-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 05:44 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookly`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `name`, `price`, `quantity`, `image`) VALUES
(121, 1, 'The Immortal Life of Henrietta Lacks', 600, 1, '82ed3f2dc0c6a30a51a2985f4b251b4c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `index_contact`
--

CREATE TABLE `index_contact` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `index_contact`
--

INSERT INTO `index_contact` (`id`, `name`, `email`, `sub`, `message`) VALUES
(1, 'Rahul', 'aaryankushwaha@gmail.com', 'english', '\r\n                '),
(2, 'Rahul', 'rahul123@gmail.com', 'english', '\r\n                hg'),
(3, 'Rahul', 'rahul123@gmail.com', 'english', '\r\n                hg'),
(4, 'Rahul', 'rahul123@gmail.com', 'english', '\r\n                hg'),
(5, '', '', '', ''),
(6, 'Rahul', 'aaryankushwaha@gmail.com', 'english', '\r\n                hj'),
(7, '', '', '', ''),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, '', '', '', ''),
(17, '', '', '', ''),
(18, '', '', '', ''),
(19, '', '', '', ''),
(20, 'Rahul', 'nkc7546@gmail.com', 'english', '\r\n                ffyyfy'),
(21, 'Rahul', 'nkc7546@gmail.com', 'english', '\r\n                ffyyfy'),
(22, 'Rahul', 'nkc7546@gmail.com', 'english', '\r\n                ffyyfy'),
(23, '', '', '', ''),
(24, '', '', '', ''),
(25, '', '', '', ''),
(26, 'rahul', 'aaryankushwaha@gmail.com', 'english', '\r\n                raa'),
(27, '', '', '', ''),
(28, '', '', '', ''),
(29, '', '', '', ''),
(30, 'rahul', 'rahul123@gmail.com', 'english', '\r\n                qweqw'),
(31, 'rahul', 'rahul123@gmail.com', 'english', '\r\n                qweqw'),
(32, '', '', '', ''),
(33, '', '', '', ''),
(34, 'Rahul', 'rahul123@gmail.com', 'english', '\r\n                rahul');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(10, 1, 'Rahul', 'aaryankushwaha@gmail.com', '57765', 'erf'),
(11, 1, 'Rahul', 'aaryankushwaha@gmail.com', '34', 'd'),
(12, 1, 'Rahul', 'aaryankushwaha@gmail.com', '342', 'fdg'),
(13, 1, 'rahul', 'aaryankushwaha9082@gmail.com', '123458', 'aassd');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending',
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(6, 'cooking', 200, 'Screenshot 2023-01-21 155427.jpg'),
(7, 'Shepherding a Child\'s Heart by Tedd Trip', 250, '56d1fb5414270fd97bee536cf0315b09.jpg'),
(8, 'Half Girlfriend by Chetan Bhagat', 500, 'd35df9f5fe94a960815f099a21376a86.jpg'),
(9, 'The Immortal Life of Henrietta Lacks', 600, '82ed3f2dc0c6a30a51a2985f4b251b4c.jpg'),
(10, 'Genius Foods', 800, '52fb063e345be6ea91297fe5cfd44380.jpg'),
(11, 'The Nature Fix', 190, 'd2ca15095d43f455bb41f4deb511d036 (1).jpg'),
(12, 'Art of Drawing the Human Body', 700, '40a376954631afafa275af19fe6b3154.jpg'),
(13, 'Earth Science', 145, '523efec31e81a9460dda085cebeae6fa.jpg'),
(14, 'Handbook of Medicinal Herbs', 1000, '0a4d18c8aea6e359314e2c608bb0fa7b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'rahul', 'rahul123@gmail.com', '2acb7811397a5c3bea8cba57b0388b79', 'user'),
(2, 'rahul', 'aaryankushwaha@gmail.com', '2acb7811397a5c3bea8cba57b0388b79', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_contact`
--
ALTER TABLE `index_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `index_contact`
--
ALTER TABLE `index_contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
