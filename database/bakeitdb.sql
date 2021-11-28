-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 07:46 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakeit`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(30) NOT NULL,
  `order_id` int(100) NOT NULL,
  `paid_amount` varchar(100) NOT NULL,
  `date_and_time` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `cashier_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(5) NOT NULL,
  `branch_name` varchar(30) NOT NULL,
  `branch_address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`, `branch_address`) VALUES
(1, 'Kasbewa', 'Kasbewa'),
(2, 'Baththaramulla', 'Baththaramulla'),
(3, 'Piliyandala', 'Piliyandala');

-- --------------------------------------------------------

--
-- Table structure for table `branch_contacts`
--

CREATE TABLE `branch_contacts` (
  `branch_id` int(5) NOT NULL,
  `contact_number` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `branch_manager`
--

CREATE TABLE `branch_manager` (
  `staff_id` int(20) NOT NULL,
  `branch_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch_manager`
--

INSERT INTO `branch_manager` (`staff_id`, `branch_id`) VALUES
(21, 1),
(34, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `customer_id` int(20) NOT NULL,
  `cart_id` int(20) NOT NULL,
  `menu_id` varchar(30) NOT NULL,
  `cart_item_id` varchar(40) NOT NULL,
  `order_type` varchar(100) NOT NULL,
  `cart_total_amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `customer_id` int(20) NOT NULL,
  `cart_id` int(20) NOT NULL,
  `menu_id` varchar(30) NOT NULL,
  `cart_item_id` varchar(40) NOT NULL,
  `quantity` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `staff_id` int(20) NOT NULL,
  `branch_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`staff_id`, `branch_id`) VALUES
(20, 1),
(32, 1),
(23, 2),
(24, 3);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(20) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address1` varchar(200) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `address3` varchar(100) DEFAULT NULL,
  `customer_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `address1`, `address2`, `address3`, `customer_type`) VALUES
(14, 'Pubudu', 'Mihiranga', 'Petiwaththa', 'Wathugedara', '', '1'),
(15, 'Nimalka', 'KodagodaW', 'Petiwaththa', 'Wathugedara', 'Siri', '1'),
(35, 'Chamath', 'Chinthana', 'Petiwaththa', 'Wathugedara', '', '1'),
(48, 'thilina', 'Madushanka', '', '', '', '2'),
(49, 'Chamath', 'Chinthana', 'Petiwaththa', 'Wathugedara', '', '2'),
(50, 'Chamath', 'Chinthana', 'Petiwaththa', 'Wathugedara', '', '2'),
(51, 'Chamath', 'Chinthana', '', '', '', '2'),
(52, 'Sahan', 'Chinthana', 'No.23/69 B', 'Pettiwaththa', '', '2'),
(53, 'Sasasd', 'eeqwe', '', '', '', '2'),
(54, 'arundd', 'vcasdasd', '', '', '', '2'),
(55, 'errwerwerwer', 'rwerwerwerwer', '', '', '', '2'),
(56, 'Faasd', 'fdfsdfs', '', '', '', '2'),
(57, 'fasdfsdfsdf', 'fsdfsdffsd', '', '', '', '2'),
(58, 'Samantga', 'Samantga', '', '', '', '2');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_person`
--

CREATE TABLE `delivery_person` (
  `staff_id` int(20) NOT NULL,
  `availability` varchar(100) NOT NULL,
  `branch_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_person`
--

INSERT INTO `delivery_person` (`staff_id`, `availability`, `branch_id`) VALUES
(19, '', 1),
(25, '', 2),
(26, '', 3),
(33, '', 1),
(35, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` varchar(30) NOT NULL,
  `item_id` varchar(40) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `category_id` int(5) NOT NULL,
  `quantity` int(20) NOT NULL,
  `price` varchar(30) NOT NULL,
  `branch_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `item_id`, `item_name`, `category_id`, `quantity`, `price`, `branch_id`) VALUES
('1', '1', 'White Bread', 1, 12, '70', 1),
('1', '2', 'Cheese Pastry', 2, 22, '350', 1),
('1', '4', 'Cheese Burger', 4, 11, '320', 1),
('1', '5', 'Fish Bun', 5, 60, '60', 1),
('1', '6', 'Red Bread', 1, 33, '70', 1),
('1', '7', 'Hall Bread', 1, 2, '1220', 1),
('1', '8', 'Japanese Bread', 1, 0, '1500', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_category`
--

CREATE TABLE `menu_category` (
  `category_id` int(5) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_category`
--

INSERT INTO `menu_category` (`category_id`, `category_name`) VALUES
(1, 'Bread'),
(2, 'Pastry'),
(3, 'Cake'),
(4, 'Burger'),
(5, 'Snacks'),
(6, 'Donut'),
(7, 'Muffin'),
(8, 'Sweets'),
(9, 'Beverages');

-- --------------------------------------------------------

--
-- Table structure for table `menu_category_items`
--

CREATE TABLE `menu_category_items` (
  `menu_id` varchar(30) NOT NULL,
  `item_id` varchar(40) NOT NULL,
  `category_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(100) NOT NULL,
  `customer_id` int(20) DEFAULT NULL,
  `menu_id` varchar(30) NOT NULL,
  `cashier_id` int(20) DEFAULT NULL,
  `order_type` varchar(100) NOT NULL,
  `total_amount` varchar(100) NOT NULL,
  `paid_amount` varchar(255) DEFAULT '0',
  `is_advanced` int(5) NOT NULL DEFAULT 0,
  `reveiving_method` varchar(50) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `order_status` varchar(40) NOT NULL,
  `placed_date_and_time` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `needed_date` varchar(50) DEFAULT NULL,
  `needed_time` varchar(50) DEFAULT NULL,
  `delivery_person_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `customer_id`, `menu_id`, `cashier_id`, `order_type`, `total_amount`, `paid_amount`, `is_advanced`, `reveiving_method`, `payment_type`, `order_status`, `placed_date_and_time`, `needed_date`, `needed_time`, `delivery_person_id`) VALUES
(31, 14, '1', NULL, '2', '7000.00 LKR', '', 0, '1', '', '1', '2021-11-27 20:35:52', '2021-12-02', '20:39', NULL),
(32, 14, '1', NULL, '2', '7000', '', 1, '1', '', '1', '2021-11-27 20:50:16', '2021-12-09', '20:55', NULL),
(33, 14, '1', NULL, '2', '7000', '3500', 1, '1', '', '1', '2021-11-27 20:51:09', '2021-12-02', '20:57', NULL),
(34, 14, '1', NULL, '2', '7000', '', 0, '2', '', '1', '2021-11-27 20:51:31', '2021-12-10', '20:55', NULL),
(35, 14, '1', NULL, '2', '7000', '7000', 0, '2', '', '1', '2021-11-27 20:52:06', '2021-12-02', '20:57', NULL),
(36, 58, '1', NULL, '2', '7070', '7070', 0, '1', '', '1', '2021-11-27 20:53:01', '2021-12-09', '20:57', NULL),
(37, 14, '1', NULL, '1', '140.00 LKR', '0', 0, '1', '1', '1', '2021-11-28 22:47:52', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_id` int(100) NOT NULL,
  `menu_id` varchar(30) NOT NULL,
  `item_id` varchar(40) NOT NULL,
  `quantity` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_id`, `menu_id`, `item_id`, `quantity`) VALUES
(31, '1', '1', 100),
(32, '1', '1', 100),
(33, '1', '1', 100),
(34, '1', '1', 100),
(35, '1', '1', 100),
(36, '1', '1', 100),
(36, '1', '6', 1),
(37, '1', '1', 1),
(37, '1', '6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ratings_and_reviews`
--

CREATE TABLE `ratings_and_reviews` (
  `rate_id` int(100) NOT NULL,
  `customer_id` int(20) NOT NULL,
  `order_id` int(100) NOT NULL,
  `rating` varchar(100) DEFAULT NULL,
  `review` varchar(1000) DEFAULT NULL,
  `review_type` varchar(100) NOT NULL,
  `delivery_person_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `raw_material_inventory`
--

CREATE TABLE `raw_material_inventory` (
  `rawitem_id` int(5) NOT NULL,
  `rawitem_name` varchar(100) NOT NULL,
  `stock_amount` varchar(100) NOT NULL,
  `measure_unit` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `raw_material_inventory`
--

INSERT INTO `raw_material_inventory` (`rawitem_id`, `rawitem_name`, `stock_amount`, `measure_unit`) VALUES
(1, 'Suger', '70.1', 'Kg'),
(2, 'Flour', '27', 'Kg'),
(3, 'Strawberry Jam', '11', 'Kg'),
(4, 'Coconut Oil', '10', 'L'),
(5, 'Bread Crums', '30', 'Kg'),
(6, 'Potato', '60', 'Kg'),
(7, 'Carrot', '10', 'Kg'),
(8, 'Eggs', '500', 'Units'),
(9, 'Chicken', '96', 'Kg'),
(10, 'Fish', '60', 'Kg'),
(11, 'Soya', '5', 'Kg');

-- --------------------------------------------------------

--
-- Table structure for table `registered_customer`
--

CREATE TABLE `registered_customer` (
  `contact_number` varchar(30) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `customer_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_customer`
--

INSERT INTO `registered_customer` (`contact_number`, `email`, `password`, `customer_id`) VALUES
('07619975866', 'pubudu@gmail.com', '$2y$10$xPi91rr9vcNIYwzekVTxKuIZmSZ1yoHW.RUXjzsvd0JvuGdO507vm', 14),
('0765844236933', 'nimalda@gg.com', '$2y$10$aEGU4eYmPjDX60T6Gm.22e4xivDEQSvyT8mUBkt1/8MoZZi5qEuZy', 15),
('0765846931', 'chamath428@gmail.com', '$2y$10$VlROS4FB5XQhXZYQ1Qf4n.lasSEYPMr60j1Cdl3RdqeJDCyGpIwmO', 35);

-- --------------------------------------------------------

--
-- Table structure for table `retrieve_materials`
--

CREATE TABLE `retrieve_materials` (
  `retrieve_id` int(200) NOT NULL,
  `rawitem_id` int(5) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `date_and_time` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `bakery_manager_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(20) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `contact_number` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `job_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `first_name`, `last_name`, `email`, `contact_number`, `password`, `job_role`) VALUES
(1, 'Wasantha', 'Gunarathne', 'wk@gmail.com', '022', '$2y$10$KlPRkOH7y/qVtVCOg3sy7OwgJAJkU/ORQWfylv5EWrK3Yyn4UvhIe', '2'),
(19, 'Dilantha', 'Malagamuwa', 'dilango@gmail.com', '066', '$2y$10$hLCiWUIHHNDcRdga4kJMce0i.opmwaZMLtVLVzEGwybfPCPGu7Jgy', '6'),
(20, 'Maleesha', 'Kavindi', 'makawi@gmail.com', '055', '$2y$10$fXMQkLV557xFR1cwduy84eeXjy3D/BzIMl.IkihPb.8ElQT3cJzH2', '5'),
(21, 'Thilina', 'Madusamka', 'reman@gmail.com', '044', '$2y$10$8G6u3x1Gdwt7JdivkBft4.DjgYXZdGuSRCo5ndkIpoS3abSHjAHjG', '4'),
(22, 'Anupama', 'Bamdara', 'Bamdara@gmail.com', '033', '$2y$10$3VpNXEagZOeMBtxoKgSg2eA0R5qzrlDSBAwJKLpIQrI6V1Yy5ZeQy', '3'),
(23, 'Chamath', 'Chinthana', 'chamath0662@gmail.com', '0552', '$2y$10$j5GgKyO72jHZVggQ7ynkn.AIIwRcp7xRmsLRtdNm7GytngRmF8HEG', '5'),
(24, 'Madusha', 'Mihiran', 'Mihiran@g.com', '0053', '$2y$10$SmlanBXtO3nBEmrGHB9MhOddjVAqsicyrdA.TurrvehGAPzmyu1U2', '5'),
(25, 'Pubudu', 'MIhiranga', 'MIhiranga@g.com', '0662', '$2y$10$03EcO1WAm3ZHujWatCZ42.8LMAhsfVntHu0cpfThFcSkpquwXn2M.', '6'),
(26, 'Nipun', 'Widusara', 'Nipun@g.com', '0663', '$2y$10$ac.pzGpMCsK3IByiKX1aKelml2yWMJUOb/ez2tq.zCXPLxOiyl6wi', '6'),
(28, 'Rasogya', 'Pubudumali', 'Rasogya@g.com', '0443', '$2y$10$VyQQmFfAWUXaBYgfNOirDOj2MerWjHheRNgUpjXhoVdPkEJeATvWu', '4'),
(29, 'fdsfsdf', 'fsdfsdfwdfwefw', '', '654654654654654', '$2y$10$Ingyo3ybbdDqGpQkAxMNyOTjtyArN4ZdNUkp9XT6dET5eFe1j76uu', '3'),
(30, 'Yalla', 'Habibi', '', '7895263546546', '$2y$10$X7BNDQHxrKvUsmINKhfP4ulbB55R0ZlvnPjIcV3hLvLYaKu6vJxGq', ''),
(31, 'Misba', 'ulhak', 'chamsadsd8@gmail.com', '076584693132132', '$2y$10$wnE77oiROL.jbnqXalTwlOAP5Y7Q1WDeYlzQJSKy0vjrzIYc8sYwS', '3'),
(32, 'kesbawe', 'eka', '', '5435466546546', '$2y$10$tHCtWSYz9s4Y.NihWIq2WOurwuaH3WNgyYaflIog2wdr4fgfH5xY6', '5'),
(33, 'dlvry', 'ekaaaaaaaaaaaaaaaaa', '', '23434554646546', '$2y$10$3o9cso6Fv7IzEOJIR51uqOLtwhjf5F0AST0To7YDN4/PCaRgtUsl6', '6'),
(34, 'dsadasasddas', 'asdadddasasd', '', '4234234234234234', '$2y$10$tAAai9viBr3CbIFDrFxF1.GyGbRvq.H1n8JlK6guzir40065Yhz7G', '4'),
(35, 'dasdasasdadas', 'dasdasasdadas', '', '2334534534654', '$2y$10$C4Xoh8i.LAGsH2JJON/abebR6MxwDE41XxqHdi6yDz9W8OkAYsMZS', '6');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `stock_id` int(100) NOT NULL,
  `rawitem_id` int(5) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `date_and_time` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `bakery_manager_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `unregistered_customer`
--

CREATE TABLE `unregistered_customer` (
  `contact_number` varchar(30) NOT NULL,
  `customer_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unregistered_customer`
--

INSERT INTO `unregistered_customer` (`contact_number`, `customer_id`) VALUES
('3121231233', 48),
('0765846931', 49),
('076584622931', 51),
('076581146931', 52),
('22312312313', 53),
('31232131231', 54),
('12312341212', 55),
('23123232312', 56),
('07658469231231', 57),
('342342342234', 58);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`,`order_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `cashier_id` (`cashier_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `branch_contacts`
--
ALTER TABLE `branch_contacts`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `branch_manager`
--
ALTER TABLE `branch_manager`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`,`customer_id`,`menu_id`,`cart_item_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `cart_item_id` (`cart_item_id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`customer_id`,`cart_id`,`menu_id`,`cart_item_id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `cart_item_id` (`cart_item_id`);

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `cashier_ibfk_2` (`branch_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `delivery_person`
--
ALTER TABLE `delivery_person`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `delivery_person_ibfk_2` (`branch_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`,`item_id`),
  ADD KEY `branch_id` (`branch_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `menu_category`
--
ALTER TABLE `menu_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `menu_category_items`
--
ALTER TABLE `menu_category_items`
  ADD PRIMARY KEY (`menu_id`,`item_id`,`category_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`,`menu_id`) USING BTREE,
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `cashier_id` (`cashier_id`),
  ADD KEY `delivery_person_id` (`delivery_person_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_id`,`menu_id`,`item_id`) USING BTREE,
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `ratings_and_reviews`
--
ALTER TABLE `ratings_and_reviews`
  ADD PRIMARY KEY (`rate_id`,`customer_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `delivery_person_id` (`delivery_person_id`);

--
-- Indexes for table `raw_material_inventory`
--
ALTER TABLE `raw_material_inventory`
  ADD PRIMARY KEY (`rawitem_id`);

--
-- Indexes for table `registered_customer`
--
ALTER TABLE `registered_customer`
  ADD PRIMARY KEY (`contact_number`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `retrieve_materials`
--
ALTER TABLE `retrieve_materials`
  ADD PRIMARY KEY (`retrieve_id`,`rawitem_id`),
  ADD KEY `rawitem_id` (`rawitem_id`),
  ADD KEY `bakery_manager_id` (`bakery_manager_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`stock_id`,`rawitem_id`),
  ADD KEY `rawitem_id` (`rawitem_id`),
  ADD KEY `bakery_manager_id` (`bakery_manager_id`);

--
-- Indexes for table `unregistered_customer`
--
ALTER TABLE `unregistered_customer`
  ADD PRIMARY KEY (`contact_number`),
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `menu_category`
--
ALTER TABLE `menu_category`
  MODIFY `category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `ratings_and_reviews`
--
ALTER TABLE `ratings_and_reviews`
  MODIFY `rate_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `raw_material_inventory`
--
ALTER TABLE `raw_material_inventory`
  MODIFY `rawitem_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `retrieve_materials`
--
ALTER TABLE `retrieve_materials`
  MODIFY `retrieve_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `stock_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_details` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`cashier_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `branch_contacts`
--
ALTER TABLE `branch_contacts`
  ADD CONSTRAINT `branch_contacts_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `branch_manager`
--
ALTER TABLE `branch_manager`
  ADD CONSTRAINT `branch_manager_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`),
  ADD CONSTRAINT `branch_manager_ibfk_2` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_items_ibfk_2` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_items_ibfk_3` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_items_ibfk_4` FOREIGN KEY (`cart_item_id`) REFERENCES `menu` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cashier`
--
ALTER TABLE `cashier`
  ADD CONSTRAINT `cashier_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cashier_ibfk_2` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `delivery_person`
--
ALTER TABLE `delivery_person`
  ADD CONSTRAINT `delivery_person_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `delivery_person_ibfk_2` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `menu_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `menu_category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_category_items`
--
ALTER TABLE `menu_category_items`
  ADD CONSTRAINT `menu_category_items_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `menu_category_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `menu` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `menu_category_items_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `menu_category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_4` FOREIGN KEY (`cashier_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_5` FOREIGN KEY (`delivery_person_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_details` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_3` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_4` FOREIGN KEY (`item_id`) REFERENCES `menu` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ratings_and_reviews`
--
ALTER TABLE `ratings_and_reviews`
  ADD CONSTRAINT `ratings_and_reviews_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ratings_and_reviews_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order_details` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ratings_and_reviews_ibfk_3` FOREIGN KEY (`delivery_person_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registered_customer`
--
ALTER TABLE `registered_customer`
  ADD CONSTRAINT `registered_customer_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `retrieve_materials`
--
ALTER TABLE `retrieve_materials`
  ADD CONSTRAINT `retrieve_materials_ibfk_1` FOREIGN KEY (`rawitem_id`) REFERENCES `raw_material_inventory` (`rawitem_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `retrieve_materials_ibfk_2` FOREIGN KEY (`bakery_manager_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_ibfk_1` FOREIGN KEY (`rawitem_id`) REFERENCES `raw_material_inventory` (`rawitem_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stocks_ibfk_2` FOREIGN KEY (`bakery_manager_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `unregistered_customer`
--
ALTER TABLE `unregistered_customer`
  ADD CONSTRAINT `unregistered_customer_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
