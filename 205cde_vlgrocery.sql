-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 07:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `205cde_vlgrocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_num` varchar(50) NOT NULL,
  `job_pref` varchar(50) NOT NULL,
  `brief_intro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`user_id`, `fname`, `lname`, `email`, `phone_num`, `job_pref`, `brief_intro`) VALUES
(1, 'Vincent', 'Lee', 'vincentlee@gmail.com', '0123456789', 'Grocery Store Manager', 'Hi, I am Vincent from Inti International College Penang.'),
(2, 'Robert', 'Lewandowski', 'robertlewandowski@gmail.com', '0134567890', 'Grocery Store Cashier', 'Hello, I am Robert Lewandowski from Poland who plays as a striker at FC Bayern.'),
(3, 'Leroy', 'Sane', 'leroysane@gmail.com', '0139087654', 'Grocery Store Bagger', 'Hi, I am Leroy Sane from Germany who plays as a winger at FC Bayern.'),
(4, 'Benjamin', 'Pavard', 'benjaminpavard@gmail.com', '0178901234', 'Grocery Store Cashier', 'Hello, I am Benjamin Pavard from France who plays as a defender at FC Bayern.'),
(5, 'Lucas', 'Hernandez', 'lucashernandez@gmail.com', '0174321098', 'Grocery Store Bagger', 'Hi, I am Lucas Hernandez from France who plays as a defender at FC Bayern.');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_num` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`user_id`, `fname`, `lname`, `email`, `phone_num`, `message`) VALUES
(1, 'Vincent', 'Lee', 'vincentlee@gmail.com', '0123456789', 'How do I order groceries online?'),
(2, 'Robert', 'Lewandowski', 'robertlewandowski@gmail.com', '0134567890', 'Is there a minimum order amount?'),
(3, 'Leroy', 'Sane', 'leroysane@gmail.com', '0139087654', 'Are there a maximum number of orders allowed in a day?'),
(4, 'Benjamin', 'Pavard', 'benjaminpavard@gmail.com', '0178901234', 'Can I order the items that need to be kept cold or warm?'),
(5, 'Lucas', 'Hernandez', 'lucashernandez@gmail.com', '0174321098', 'What if the store is out of something that I ordered?');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) UNSIGNED NOT NULL,
  `ordered_product` varchar(200) NOT NULL,
  `total_payment_amount` double NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `ordered_product`, `total_payment_amount`, `user_id`) VALUES
(1, '3Brown Rice, 2Siakap Fish, 1Apple, ', 87, 1),
(2, '1Spaghetti Pasta, 2Broccoli, 3Orange, ', 14, 6),
(3, '3Chicken Drumstick, 2Corn, 1Chicken Egg, ', 23, 4),
(4, '3Milk, 2Maggi Noodles, 1Cabbage, ', 26, 5),
(5, '1Steam Brown Rice, 2Cup Noodles, 3Banana, ', 45, 3);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` double NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_image`, `product_category`) VALUES
(1, 'Brown Rice', 22, 'brown_rice.jpg', 'Rice'),
(2, 'Spaghetti Pasta', 5, 'spaghetti_pasta.jpg', 'Noodles & Pasta'),
(3, 'Chicken Drumstick', 6, 'chicken_drumstick.jpg', 'Fish & Fresh Meat'),
(4, 'Siakap Fish', 10, 'siakap_fish.jpeg', 'Fish & Fresh Meat'),
(5, 'Broccoli', 3, 'broccoli.jpg', 'Fresh Vegetables'),
(6, 'Corn', 2, 'corn.jpg', 'Fresh Vegetables'),
(7, 'Apple', 1, 'apple.png', 'Fresh Fruits'),
(8, 'Orange', 1, 'orange.png', 'Fresh Fruits'),
(9, 'Chicken Egg', 1, 'chicken_egg.jpg', 'Eggs & Dairy Products'),
(10, 'Milk', 5, 'milk.jpg', 'Eggs & Dairy Products'),
(11, 'Steam Brown Rice', 29, 'steam_brown_rice.jpg', 'Rice'),
(12, 'White Rice', 30, 'white_rice.jpg', 'Rice'),
(13, 'Maggi Noodles', 4, 'maggi_noodles.jpg', 'Noodles & Pasta'),
(14, 'Cup Noodles', 2, 'cup_noodles.jpg', 'Noodles & Pasta'),
(15, 'Yellow Tail Fish', 5, 'yellow_tail_fish.jpg', 'Fish & Fresh Meat'),
(16, 'Cabbage', 3, 'cabbage.jpg', 'Fresh Vegetables'),
(17, 'Banana', 4, 'banana.jpg', 'Fresh Fruits'),
(18, 'Butter', 6, 'butter.jpg', 'Eggs & Dairy Products');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_num` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `fname`, `lname`, `password`, `email`, `phone_num`, `address`) VALUES
(1, 'vlee', 'Vincent', 'Lee', 'Abc$1234', 'vincentlee@gmail.com', '0123456789', 'Penang'),
(2, 'Admin', 'Admin', 'Admin', 'VLgrocery$520', 'vlgrocery@gmail.com', '0129876543', 'Penang'),
(3, 'tmuller', 'Thomas', 'Muller', 'tM_2525#', 'thomasmuller@gmail.com', '0101234567', 'Penang'),
(4, 'jkimmich', 'Joshua', 'Kimmich', 'jK_0606#', 'joshuakimmich@gmail.com', '0107654321', 'Penang'),
(5, 'sgnabry', 'Serge', 'Gnabry', 'sG#0707_', 'sergegnabry@gmail.com', '0198765432', 'Penang'),
(6, 'lgoretzka', 'Leon', 'Goretzka', 'lG#0808_', 'leongoretzka@gmail.com', '0192345678', 'Penang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
