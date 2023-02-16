-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql209.byethost5.com
-- Generation Time: Apr 14, 2022 at 08:43 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b5_30973457_PROJECT`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_no` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_no`, `username`, `password`, `email`) VALUES
(1, 'ivnkyle', 'qwer1234', 'hgfrsh@gmail.com'),
(2, 'nnae', 'naenae123', 'eduvanekyle@gmail.com'),
(3, 'akosiallan', 'allan123', 'silver@gmail.com'),
(4, 'alexis02', 'alexisjoe', 'aj@yahoo.com'),
(5, 'immortal', 'ferrer123', 'ferrerjohn@gmail.com'),
(6, 'abbie23', 'abbiegael', 'abgael@y.c'),
(7, 'yannaA', 'yannamare', 'yanna@y.c'),
(8, 'robert', 'rowcolumn', 'rb@y.c'),
(9, 'abc@yahoo.com', 'abcdefgh', 'abc@yahoo.com'),
(10, 'allan123', 'allan123', 'artaberdo@gmail.com'),
(11, 'ashley02', 'ashley123', 'ashgael@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `accounts_hist`
--

CREATE TABLE `accounts_hist` (
  `account_no` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `account_details`
--

CREATE TABLE `account_details` (
  `account_no` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `phone_num` varchar(45) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_details`
--

INSERT INTO `account_details` (`account_no`, `first_name`, `last_name`, `phone_num`, `address`) VALUES
(1, 'Kyle Ivan', 'Eduvane', '09158653110', '101 Purok 2, Sta. Rita, Masinloc, Zambales'),
(2, 'Eduvane', 'Kyle', '09158653113', '101 Purok 2, Sta. Rita, Masinloc'),
(3, 'Kyle', 'Ivan', '09326782202', 'Sta. Mesa, Manila'),
(4, 'alexis', 'joe', '09067715289', '18 rosal st. permaline'),
(5, 'Codamon', 'Ferrer', '09324562201', '3304 Tycoon Centre, Pearl Drive, Ortigas Center, Pasig'),
(6, 'abbie', 'gael', '0927413922', '18 st.john street'),
(7, 'yanna', 'arong', '0927413922', '16 st. paul street'),
(8, 'robert', 'denim', '0927423922', '12 rosal street'),
(9, 'sasuke', 'uchiha', '1234567891011', 'san juan'),
(10, 'Roland', 'Taberdo', '09221282211', '3554 secret di mo sure'),
(11, 'ashley', 'montierro', '09058814111', '18 rosal street');

-- --------------------------------------------------------

--
-- Table structure for table `highlights`
--

CREATE TABLE `highlights` (
  `item_code` int(11) NOT NULL DEFAULT 0,
  `item_name` varchar(100) DEFAULT NULL,
  `item_price` float DEFAULT NULL,
  `item_img` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `seller` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `highlights`
--

INSERT INTO `highlights` (`item_code`, `item_name`, `item_price`, `item_img`, `category`, `seller`) VALUES
(10, 'Tee Shirt', 400, 'uploads/shirt3.jpg', 'women_clothing', 'akosiallan'),
(13, 'Women Tee', 300.75, 'uploads/san7.jpg', 'women_clothing', 'akosiallan'),
(21, 'Lip Pillow', 300.75, 'uploads/a16.png', 'cosmetics', 'nnae'),
(22, 'Ellise Lip Tint', 500, 'uploads/a17.png', 'cosmetics', 'nnae'),
(24, 'Nike Air Force 1 Red ', 2000.5, 'uploads/af1.jpg', 'footwear', 'nnae'),
(25, 'Nike Air Force 1 Cream', 1475, 'uploads/nike.jpg', 'footwear', 'nnae');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_code` int(11) NOT NULL,
  `item_name` varchar(100) DEFAULT NULL,
  `item_price` float DEFAULT NULL,
  `item_img` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `seller` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_code`, `item_name`, `item_price`, `item_img`, `category`, `seller`) VALUES
(1, 'The Dazed Graphic Tee', 300.75, 'MENCLOTHING-PRODUCTS/b3.png', 'men_clothing', 'immortal'),
(2, 'Coco Cotton Tee', 350.9, 'MENCLOTHING-PRODUCTS/b5.webp', 'men_clothing', 'immortal'),
(3, 'Florida Graphic Tee', 477, 'uploads/florida.webp', 'men_clothing', 'alexis02'),
(4, 'Astronaut Graphic Tee', 385, 'uploads/astronaut.webp', 'men_clothing', 'alexis02'),
(5, 'Nidalee', 300.75, 'uploads\\san13.png', 'men_clothing', 'immortal'),
(6, 'Apple MacBook Pro 2015 ', 24999.5, 'uploads/macbook.jpg', 'gadgets', 'alexis02'),
(7, 'ASUS TUF 15', 38750.8, 'uploads/asuslaptop.jpg', 'gadgets', 'alexis02'),
(8, 'Black Blouse', 300.75, 'uploads/womenblouse1.webp', 'women_clothing', 'ivnkyle'),
(9, 'Ruffled Blouse', 300.75, 'uploads/womenblouse2.webp', 'women_clothing', 'ivnkyle'),
(10, 'Tee Shirt', 400, 'uploads/shirt3.jpg', 'women_clothing', 'akosiallan'),
(11, 'The Sanscryt Tee(White)', 990, 'uploads/san8.jpg', 'men_clothing', 'ivnkyle'),
(12, 'The Sanscryt Tee(Black)', 420, 'uploads/san9.jpg', 'men_clothing', 'akosiallan'),
(13, 'Women Tee', 300.75, 'uploads/san7.jpg', 'women_clothing', 'akosiallan'),
(14, 'Tee', 400, 'uploads/wc1.jpg', 'women_clothing', 'akosiallan'),
(15, 'Sole', 200, 'uploads/sole1.png', 'footwear', 'akosiallan'),
(16, 'Women\'s Sandals', 990, 'uploads/sole2.png', 'footwear', 'akosiallan'),
(17, 'Foot', 350.75, 'uploads/sole3.png', 'footwear', 'akosiallan'),
(18, 'Laptop', 10000, 'uploads/laptop1.jpg', 'gadgets', 'akosiallan'),
(19, 'Lenovo Thinkpad ', 22000, 'uploads/laptop2.jpg', 'gadgets', 'akosiallan'),
(20, 'HP Laptop', 13000, 'uploads/laptop3.jpg', 'gadgets', 'akosiallan'),
(21, 'Lip Pillow', 300.75, 'uploads/a16.png', 'cosmetics', 'nnae'),
(22, 'Ellise Lip Tint', 500, 'uploads/a17.png', 'cosmetics', 'nnae'),
(23, 'BLUSH Make-Up Kit', 990, 'uploads/m.jpg', 'cosmetics', 'nnae'),
(24, 'Nike Air Force 1 Red ', 2000.5, 'uploads/af1.jpg', 'footwear', 'nnae'),
(25, 'Nike Air Force 1 Cream', 1475, 'uploads/nike.jpg', 'footwear', 'nnae'),
(26, 'Patchwork Button-Down', 455, 'uploads/patchwork_polo.webp', 'men_clothing', 'ivnkyle'),
(27, 'Classic V-Neck Blouse', 399, 'uploads/vneck_women.webp', 'women_clothing', 'alexis02'),
(28, 'Cool Jacket', 978, 'uploads/cool_jacket.webp', 'men_clothing', 'akosiallan'),
(29, 'Air Jordan White-Black', 5400, 'uploads/jordan_white.jpg', 'footwear', 'akosiallan'),
(30, 'Air Jordan Low', 4900, 'uploads/jordan_low.jpg', 'footwear', 'akosiallan'),
(32, 'Damit', 150, 'uploads/ccis leterhead.jpg', 'men_clothing', 'abc@yahoo.com'),
(33, 'Tshirt', 200, 'uploads/san5.jpg', 'men_clothing', 'ivnkyle'),
(34, 'blouse', 300, 'uploads/baba_damit.jpg', 'women_clothing', 'ashley02');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `account_no` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `account_no`, `order_date`, `order_total`) VALUES
(6, 1, '2022-02-21', 3776.25),
(7, 1, '2022-02-22', 14475),
(8, 3, '2022-02-22', 400),
(9, 3, '2022-02-22', 400),
(10, 2, '2022-02-23', 38750.8),
(11, 2, '2022-02-23', 32000),
(12, 3, '2022-02-23', 300.75),
(13, 3, '2022-02-24', 22000),
(14, 6, '2022-02-25', 800.75),
(15, 7, '2022-02-25', 200),
(16, 8, '2022-02-25', 300.75),
(17, 1, '2022-02-25', 13000),
(18, 1, '2022-02-25', 400),
(19, 3, '2022-02-25', 300.75),
(20, 4, '2022-02-26', 3345),
(21, 4, '2022-02-26', 3345),
(22, 7, '2022-02-26', 2958),
(23, 7, '2022-02-27', 1100.75),
(24, 9, '2022-02-28', 24999.5),
(25, 9, '2022-02-28', 24999.5),
(26, 9, '2022-02-28', 150),
(27, 7, '2022-02-28', 1100.75),
(28, 10, '2022-02-28', 1353.45),
(29, 7, '2022-03-01', 601.5),
(30, 1, '2022-03-01', 601.5),
(31, 3, '2022-03-03', 601.5),
(32, 11, '2022-03-03', 300.75),
(33, 7, '2022-03-07', 601.5),
(34, 7, '2022-03-07', 49999);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_id` int(11) NOT NULL,
  `item_code` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_id`, `item_code`, `qty`) VALUES
(6, 24, 1),
(6, 25, 1),
(6, 5, 1),
(7, 25, 1),
(7, 20, 2),
(8, 10, 1),
(9, 10, 1),
(10, 7, 1),
(11, 19, 1),
(11, 18, 1),
(12, 21, 1),
(13, 19, 1),
(14, 22, 1),
(14, 21, 1),
(15, 15, 1),
(16, 13, 1),
(17, 20, 1),
(18, 10, 1),
(19, 13, 1),
(21, 26, 3),
(21, 23, 2),
(22, 16, 2),
(22, 28, 1),
(23, 10, 2),
(23, 21, 1),
(24, 6, 1),
(25, 6, 1),
(26, 32, 1),
(27, 10, 2),
(27, 21, 1),
(28, 1, 1),
(28, 2, 3),
(29, 9, 2),
(30, 1, 1),
(30, 8, 1),
(31, 13, 2),
(32, 9, 1),
(33, 8, 2),
(34, 6, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_no`,`username`);

--
-- Indexes for table `accounts_hist`
--
ALTER TABLE `accounts_hist`
  ADD PRIMARY KEY (`account_no`,`username`);

--
-- Indexes for table `account_details`
--
ALTER TABLE `account_details`
  ADD PRIMARY KEY (`account_no`);

--
-- Indexes for table `highlights`
--
ALTER TABLE `highlights`
  ADD PRIMARY KEY (`item_code`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_code`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD KEY `FK_ord_id` (`order_id`),
  ADD KEY `FK_item_id` (`item_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `account_details`
--
ALTER TABLE `account_details`
  MODIFY `account_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts_hist`
--
ALTER TABLE `accounts_hist`
  ADD CONSTRAINT `accno_fk` FOREIGN KEY (`account_no`) REFERENCES `accounts` (`account_no`);

--
-- Constraints for table `account_details`
--
ALTER TABLE `account_details`
  ADD CONSTRAINT `FK_accno` FOREIGN KEY (`account_no`) REFERENCES `accounts` (`account_no`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_acc` FOREIGN KEY (`account_no`) REFERENCES `accounts` (`account_no`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `FK_item_id` FOREIGN KEY (`item_code`) REFERENCES `item` (`item_code`),
  ADD CONSTRAINT `FK_ord_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
