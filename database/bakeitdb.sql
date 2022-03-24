-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 08:58 AM
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

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `order_id`, `paid_amount`, `date_and_time`, `cashier_id`) VALUES
(285, 415, '1400', '2022-03-23 15:12:11', 38),
(286, 416, '0', '2022-03-23 15:19:07', 38),
(287, 417, '1560', '2022-03-23 15:29:23', 38),
(288, 421, '122140', '2022-03-23 16:16:52', 38);

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
(37, 1),
(34, 2);

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
(38, 1),
(23, 2),
(41, 2);

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
(52, 'Sahan', 'Chinthana', 'Pettiwaththa', 'Wathugedara', 'Ambalangoda', '2'),
(53, 'Sasasd', 'eeqwe', '', '', '', '2'),
(54, 'arundd', 'vcasdasd', '', '', '', '2'),
(55, 'errwerwerwer', 'rwerwerwerwer', '', '', '', '2'),
(56, 'Faasd', 'fdfsdfs', '', '', '', '2'),
(57, 'fasdfsdfsdf', 'fsdfsdffsd', '', '', '', '2'),
(58, 'Samantga', 'Samantga', '', '', '', '2'),
(59, 'Dhananjaya', 'Bandara', '', '', '', '2'),
(60, 'Akila', 'Maithripala', '', '', '', '2'),
(61, 'Akila', 'Maithripala', '', '', '', '2'),
(62, 'Anupama', 'Bandara', '118/2,', 'Illukwatta road, ', 'Pilimathalawa', '2'),
(63, 'Anupama', 'Bandara', '118/2,', 'Illukwatta road, ', 'Pilimathalawa', '2'),
(64, 'Chamath', 'Chinthana', '', '', '', '2'),
(65, 'Chamath', 'Chinthana', '', '', '', '2'),
(66, 'Chamath', 'Chinthana', '', '', '', '2'),
(69, 'Karol', 'Masnayaka', '', '', '', ''),
(70, 'Prassnna', 'Ranathunga', 'Wathugedara', 'Pettiwaththa', 'Malabe', ''),
(71, 'Ajith', 'Manihara', '', '', '', ''),
(72, 'Asanka', 'Perera', 'Wathugedara', 'Pettiwaththa', 'Malabe', '2'),
(73, 'Chamath', 'Chinthana', '', '', '', '2'),
(74, 'Chamath', 'Chinthana', '', '', '', '2'),
(75, 'Chamath', 'Chinthana', '', '', '', '2'),
(76, 'Tarusha', 'Vithanage', '147 Botanic Avenue', 'Pettiwaththa', 'Malabe', '2'),
(77, 'Sajith', 'Perera', '', '', '', '2'),
(78, 'Chamath', 'Chinthana', '', '', '', '2'),
(79, 'Virath', 'Kholi', '', '', '', ''),
(80, 'ABD', 'Villiers', '', '', '', ''),
(81, 'cdsa', 'Perera', '', '', '', '2'),
(82, 'weera', 'rathna', 'Wathugedara', 'Pettiwaththa', '', '2'),
(83, 'Virath', 'Kholi', '', '', '', '2');

-- --------------------------------------------------------

--
-- Stand-in structure for view `customer_details`
-- (See below for the actual view)
--
CREATE TABLE `customer_details` (
`customer_id` int(20)
,`full_name` varchar(201)
,`contact_number` varchar(30)
,`address` varchar(404)
);

-- --------------------------------------------------------

--
-- Table structure for table `customer_notification`
--

CREATE TABLE `customer_notification` (
  `notification_id` int(5) NOT NULL,
  `customer_id` int(5) NOT NULL,
  `order_id` int(5) NOT NULL,
  `message` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_notification`
--

INSERT INTO `customer_notification` (`notification_id`, `customer_id`, `order_id`, `message`, `link`, `status`, `date`) VALUES
(1, 14, 415, 'Order Status has been updated', NULL, 0, '2022-03-23 20:29:49'),
(2, 14, 414, 'Order Status has been updated2', NULL, 1, '2022-03-24 06:51:38');

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
(19, '1', 1),
(25, '', 2),
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
('1', '1', 'White Bread', 1, 32, '70', 1),
('1', '2', 'Cheese Pastry', 2, 22, '350', 1),
('1', '4', 'Cheese Burger', 4, 11, '320', 1),
('1', '5', 'Fish Bun', 5, 60, '60', 1),
('1', '6', 'Red Bread', 1, 33, '70', 1),
('1', '7', 'Hall Bread', 1, 2, '1220', 1),
('1', '8', 'Japanese Bread', 1, 0, '1500', 1),
('2', '1', 'White Bread', 1, 32, '70', 2),
('2', '2', 'Cheese Pastry', 2, 22, '350', 2),
('2', '4', 'Cheese Burger', 4, 11, '320', 2),
('2', '5', 'Fish Bun', 5, 60, '60', 2),
('2', '6', 'Red Bread', 1, 33, '70', 2),
('2', '7', 'Hall Bread', 1, 2, '1220', 2),
('2', '8', 'Japanese Bread', 1, 0, '1500', 2);

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
  `receiving_method` varchar(50) NOT NULL,
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

INSERT INTO `order_details` (`order_id`, `customer_id`, `menu_id`, `cashier_id`, `order_type`, `total_amount`, `paid_amount`, `is_advanced`, `receiving_method`, `payment_type`, `order_status`, `placed_date_and_time`, `needed_date`, `needed_time`, `delivery_person_id`) VALUES
(414, 14, '1', NULL, '1', '1360', '0', 0, '1', '1', '6', '2022-03-23 15:06:22', '2022-03-23', NULL, NULL),
(415, 14, '1', 38, '1', '1360', '1400', 0, '1', '1', '6', '2022-03-23 15:11:30', '2022-03-23', NULL, NULL),
(416, 14, '1', 38, '1', '1560', '2000', 0, '2', '1', '6', '2022-03-23 15:14:37', '2022-03-23', NULL, 19),
(417, 14, '1', 38, '1', '1560', '1560', 0, '2', '2', '6', '2022-03-23 15:23:50', '2022-03-23', NULL, 19),
(418, 14, '1', NULL, '2', '122140', '61070', 1, '1', '2', '7', '2022-03-23 15:33:17', '2022-04-09', '15:39', NULL),
(419, 14, '1', NULL, '2', '122140', '61070', 1, '1', '2', '2', '2022-03-23 15:36:27', '2022-04-07', '15:41', 19),
(420, 14, '1', NULL, '2', '122140', '61070', 1, '1', '2', '6', '2022-03-23 15:50:16', '2022-04-08', '15:55', 19),
(421, 14, '1', 38, '2', '122140', '122140', 0, '1', '2', '6', '2022-03-23 16:15:07', '2022-04-07', '16:15', NULL),
(422, 14, '1', NULL, '2', '122340', '61170', 1, '2', '2', '7', '2022-03-23 16:19:12', '2022-04-09', '16:23', NULL);

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
(414, '1', '1', 1),
(414, '1', '6', 1),
(414, '1', '7', 1),
(415, '1', '1', 1),
(415, '1', '6', 1),
(415, '1', '7', 1),
(416, '1', '1', 1),
(416, '1', '6', 1),
(416, '1', '7', 1),
(417, '1', '1', 1),
(417, '1', '6', 1),
(417, '1', '7', 1),
(418, '1', '1', 1),
(418, '1', '6', 1),
(418, '1', '7', 100),
(419, '1', '1', 1),
(419, '1', '6', 1),
(419, '1', '7', 100),
(420, '1', '1', 1),
(420, '1', '6', 1),
(420, '1', '7', 100),
(421, '1', '1', 1),
(421, '1', '6', 1),
(421, '1', '7', 100),
(422, '1', '1', 1),
(422, '1', '6', 1),
(422, '1', '7', 100);

-- --------------------------------------------------------

--
-- Stand-in structure for view `overview_details`
-- (See below for the actual view)
--
CREATE TABLE `overview_details` (
`order_id` int(100)
,`menu_id` varchar(30)
,`needed_date` varchar(50)
,`item_id` varchar(40)
,`item_name` varchar(100)
,`price` varchar(30)
,`quantity` int(150)
,`category_id` int(5)
,`category_name` varchar(100)
,`order_status` varchar(40)
);

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
  `delivery_person_id` int(20) DEFAULT NULL
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
('07619975866', 'pubudu@gmail.com', '$2y$10$kdUVwNM5o8kJv11UcASZLOAwmVCmTNUoKSZrhS3GqjG7iEQon61rC', 14),
('0765844236933', 'nimalda@gg.com', '$2y$10$aEGU4eYmPjDX60T6Gm.22e4xivDEQSvyT8mUBkt1/8MoZZi5qEuZy', 15),
('0765846931', 'chamath428@gmail.com', '$2y$10$zMoncMn6JBLML3d4xXQ.ge1OPpcWzJysEgba0nduxe/maSzVsZ8BG', 35);

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
(25, 'Pubudu', 'MIhiranga', 'MIhiranga@g.com', '0662', '$2y$10$03EcO1WAm3ZHujWatCZ42.8LMAhsfVntHu0cpfThFcSkpquwXn2M.', '6'),
(34, 'dsadasasddas', 'asdadddasasd', '', '4234234234234234', '$2y$10$tAAai9viBr3CbIFDrFxF1.GyGbRvq.H1n8JlK6guzir40065Yhz7G', '4'),
(35, 'dasdasasdadas', 'dasdasasdadas', '', '2334534534654', '$2y$10$C4Xoh8i.LAGsH2JJON/abebR6MxwDE41XxqHdi6yDz9W8OkAYsMZS', '6'),
(37, 'B.A.A.D.Bandara', 'Bandara', 'bmanager@gmail.com', '0702834766', '$2y$10$KY1cZ1L3dMp/8O2v73ZF5OIaDDj/xIOAeKwXOtoOcWWkgy5mBUDcO', '4'),
(38, 'Anuthrara', 'Frigarare', 'cashier1@g.com', '323213123123', '$2y$10$kHtNgdZwodv6RgJWuMDkauy2bgukQ4PpRJS7WN6AWv91Hbyih2ZfG', '5'),
(41, 'Sajith', 'Perera', 'sajiya@g.com', '3213434234', '$2y$10$.KAAvQ8yW.PFzI8OGzyXweTy438Yw5F2QZpGOkaC3sifl.sCwPQgq', '5');

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
('342342342234', 58),
('332423', 59),
('53523523', 60),
('0702834766', 61),
('0702834767', 63),
('076584693754641', 65),
('07643242345846931', 66),
('0768955896', 69),
('0765559998', 70),
('0778966321', 71),
('0765588996', 72),
('0785896985', 76),
('3213434234', 77),
('0762533931', 78),
('07899969', 79),
('0765996365', 80),
('32134342234', 81),
('0987766543', 82),
('078999691', 83);

-- --------------------------------------------------------

--
-- Structure for view `customer_details`
--
DROP TABLE IF EXISTS `customer_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `customer_details`  AS   (select `customer`.`customer_id` AS `customer_id`,concat(`customer`.`first_name`,' ',`customer`.`last_name`) AS `full_name`,`registered_customer`.`contact_number` AS `contact_number`,concat(`customer`.`address1`,', ',`customer`.`address2`,', ',`customer`.`address3`) AS `address` from (`customer` join `registered_customer` on(`customer`.`customer_id` = `registered_customer`.`customer_id`))) union (select `customer`.`customer_id` AS `customer_id`,concat(`customer`.`first_name`,' ',`customer`.`last_name`) AS `full_name`,`unregistered_customer`.`contact_number` AS `contact_number`,concat(`customer`.`address1`,', ',`customer`.`address2`,', ',`customer`.`address3`) AS `address` from (`customer` join `unregistered_customer` on(`customer`.`customer_id` = `unregistered_customer`.`customer_id`)))  ;

-- --------------------------------------------------------

--
-- Structure for view `overview_details`
--
DROP TABLE IF EXISTS `overview_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `overview_details`  AS SELECT `order_details`.`order_id` AS `order_id`, `order_details`.`menu_id` AS `menu_id`, `order_details`.`needed_date` AS `needed_date`, `order_items`.`item_id` AS `item_id`, `menu`.`item_name` AS `item_name`, `menu`.`price` AS `price`, `order_items`.`quantity` AS `quantity`, `menu`.`category_id` AS `category_id`, `menu_category`.`category_name` AS `category_name`, `order_details`.`order_status` AS `order_status` FROM (((`order_details` join `order_items` on(`order_details`.`order_id` = `order_items`.`order_id`)) join `menu` on(`menu`.`menu_id` = `order_items`.`menu_id` and `menu`.`item_id` = `order_items`.`item_id`)) join `menu_category` on(`menu_category`.`category_id` = `menu`.`category_id`)) ;

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
-- Indexes for table `customer_notification`
--
ALTER TABLE `customer_notification`
  ADD PRIMARY KEY (`notification_id`);

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
  MODIFY `bill_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=289;

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
  MODIFY `customer_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `customer_notification`
--
ALTER TABLE `customer_notification`
  MODIFY `notification_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_category`
--
ALTER TABLE `menu_category`
  MODIFY `category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=423;

--
-- AUTO_INCREMENT for table `ratings_and_reviews`
--
ALTER TABLE `ratings_and_reviews`
  MODIFY `rate_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `staff_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
