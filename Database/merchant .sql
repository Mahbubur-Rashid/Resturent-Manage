-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2018 at 04:56 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `merchant`
--

-- --------------------------------------------------------

--
-- Table structure for table `addressbook`
--

CREATE TABLE IF NOT EXISTS `addressbook` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addressbook`
--

INSERT INTO `addressbook` (`id`, `firstname`, `lastname`, `phone`, `email`) VALUES
(30, 'babu', 'mia', '1451525', 'm@gmail.com'),
(31, 'Mahbub', 'Rashid', '1451525', 'm@gmail.com'),
(32, 'babu', 'mia', '1451525', 'm@gmail.com'),
(33, 'babu', 'mia', '1451525', 'm@gmail.com'),
(34, 'Mahbub', 'Rashid', '1451525', 'm@gmail.com'),
(35, 'babu', 'mia', '1451525', 'm@gmail.com'),
(36, 'babu', 'mia', '1451525', 'm@gmail.com'),
(37, 'Mahbub', 'Rashid', '1451525', 'm@gmail.com'),
(38, 'babu', 'mia', '1451525', 'm@gmail.com'),
(39, 'babu', 'mia', '1451525', 'm@gmail.com'),
(40, 'Mahbub', 'Rashid', '1451525', 'm@gmail.com'),
(41, 'babu', 'mia', '1451525', 'm@gmail.com'),
(42, 'babu', 'mia', '1451525', 'm@gmail.com'),
(43, 'Mahbub', 'Rashid', '1451525', 'm@gmail.com'),
(44, 'babu', 'mia', '1451525', 'm@gmail.com'),
(45, NULL, NULL, NULL, NULL),
(46, NULL, NULL, NULL, NULL),
(47, NULL, NULL, NULL, NULL),
(48, 'babu', 'mia', '1451525', 'm@gmail.com'),
(49, 'Mahbub', 'Rashid', '1451525', 'm@gmail.com'),
(50, 'babu', 'mia', '1451525', 'm@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `commission`
--

CREATE TABLE IF NOT EXISTS `commission` (
  `Commission_id` int(10) NOT NULL,
  `admin_exclude_cod_balance` int(5) NOT NULL,
  `admin_commission_enabled` varchar(5) NOT NULL,
  `admin_disabled_membership_signup` int(5) NOT NULL,
  `admin_disabled_membership` int(5) NOT NULL,
  `total_commission_status` varchar(200) NOT NULL,
  `admin_include_merchant_cod` varchar(5) NOT NULL,
  `admin_commision_type` varchar(10) NOT NULL,
  `admin_commision_percent` int(5) NOT NULL DEFAULT '2',
  `admin_commision_ontop` int(5) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commission`
--

INSERT INTO `commission` (`Commission_id`, `admin_exclude_cod_balance`, `admin_commission_enabled`, `admin_disabled_membership_signup`, `admin_disabled_membership`, `total_commission_status`, `admin_include_merchant_cod`, `admin_commision_type`, `admin_commision_percent`, `admin_commision_ontop`) VALUES
(1, 0, '', 0, 0, 'paid,decline', '', 'fixed', 123, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE IF NOT EXISTS `contact_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` int(11) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `name`, `email`, `mobile_number`, `country`) VALUES
(1, 'sfdfas', 'sd', 222, 'fadsfa'),
(2, 'noasdf', 'sd', 222, 'fadsfa'),
(3, 'rqw', 'sd', 222, 'fadsfa'),
(4, 'wqwe', 'sd', 222, 'fadsfa'),
(5, 'asda', 'sd', 222, 'fadsfa'),
(6, 'mali', 'sd', 222, 'fadsfa'),
(7, 'sobuj', 'sd', 222, 'fadsfa'),
(8, 'milon', 'sd', 222, 'fadsfa'),
(9, 'asek', 'sd', 222, 'fadsfa'),
(10, 'babul', 'sd', 222, 'fadsfa'),
(11, 'mali', 'sd', 222, 'fadsfa'),
(12, 'sobuj', 'sd', 222, 'fadsfa'),
(13, 'milon', 'sd', 222, 'fadsfa'),
(14, 'asek', 'sd', 222, 'fadsfa'),
(15, 'babul', 'sd', 222, 'fadsfa'),
(16, 'mali', 'sd', 222, 'fadsfa'),
(17, 'sobuj', 'sd', 222, 'fadsfa'),
(18, 'milon', 'sd', 222, 'fadsfa'),
(19, 'asek', 'sd', 222, 'fadsfa'),
(20, 'babul', 'sd', 222, 'fadsfa'),
(21, 'mali', 'sd', 222, 'fadsfa'),
(22, 'sobuj', 'sd', 222, 'fadsfa'),
(23, 'milon', 'sd', 222, 'fadsfa'),
(24, 'asek', 'sd', 222, 'fadsfa'),
(25, 'babul', 'sd', 222, 'fadsfa');

-- --------------------------------------------------------

--
-- Table structure for table `cuisine`
--

CREATE TABLE IF NOT EXISTS `cuisine` (
  `cuisine_id` int(10) NOT NULL,
  `cuisine_name` varchar(50) NOT NULL,
  `cuisine_date` varchar(100) NOT NULL,
  `cuisine_sort_position` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cuisine`
--

INSERT INTO `cuisine` (`cuisine_id`, `cuisine_name`, `cuisine_date`, `cuisine_sort_position`) VALUES
(1, 'Burgers', '2018/01/30', 2),
(2, '	Chinese', '2018/01/30', 3),
(3, 'Diner', '2018/01/30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cuisine_sorted`
--

CREATE TABLE IF NOT EXISTS `cuisine_sorted` (
  `cuisine_id` int(10) NOT NULL,
  `cuisine_name` varchar(50) NOT NULL,
  `cs_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cuisine_sorted`
--

INSERT INTO `cuisine_sorted` (`cuisine_id`, `cuisine_name`, `cs_id`) VALUES
(140, '137', 0),
(141, '139', 0),
(142, '138', 0);

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE IF NOT EXISTS `currency` (
  `currency_id` int(10) NOT NULL,
  `currency_code` varchar(30) NOT NULL,
  `currency_symbol` varchar(30) NOT NULL,
  `currency_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`currency_id`, `currency_code`, `currency_symbol`, `currency_date`) VALUES
(14, 'TTD', '$', '2018-01-28'),
(15, 'XOF', 'CFA', '2018-01-28'),
(16, 'ZAR', 'R', '2018-01-28'),
(17, 'Тен', 'KZT', '2018-01-28'),
(20, 'YER', '﷼', '2018-01-28'),
(21, 'THB', '฿', '2018-01-28'),
(22, 'XOF', 'CFA', '0000-00-00'),
(23, 'ZAR', 'R', '0000-00-00'),
(24, 'Тен', 'KZT', '0000-00-00'),
(25, 'YER', '﷼', '0000-00-00'),
(26, 'THB', '฿', '0000-00-00'),
(27, 'XOF', 'CFA', '0000-00-00'),
(28, 'ZAR', 'R', '0000-00-00'),
(29, 'Тен', 'KZT', '0000-00-00'),
(30, 'YER', '﷼', '0000-00-00'),
(31, 'THB', '฿', '0000-00-00'),
(32, 'XOF', 'CFA', '0000-00-00'),
(33, 'ZAR', 'R', '0000-00-00'),
(34, 'Тен', 'KZT', '0000-00-00'),
(35, 'YER', '﷼', '0000-00-00'),
(36, 'THB', '฿', '0000-00-00'),
(37, 'XOF', 'CFA', '0000-00-00'),
(38, 'ZAR', 'R', '0000-00-00'),
(39, 'Тен', 'KZT', '0000-00-00'),
(40, 'YER', '﷼', '0000-00-00'),
(41, 'THB', '฿', '0000-00-00'),
(42, 'XOF', 'CFA', '0000-00-00'),
(43, 'ZAR', 'R', '0000-00-00'),
(44, 'Тен', 'KZT', '0000-00-00'),
(45, 'YER', '﷼', '0000-00-00'),
(46, 'THB', '฿', '0000-00-00'),
(47, 'XOF', 'CFA', '0000-00-00'),
(48, 'ZAR', 'R', '0000-00-00'),
(49, 'Тен', 'KZT', '0000-00-00'),
(50, 'YER', '﷼', '0000-00-00'),
(51, 'THB', '฿', '0000-00-00'),
(52, 'XOF', 'CFA', '0000-00-00'),
(53, 'ZAR', 'R', '0000-00-00'),
(54, 'Тен', 'KZT', '0000-00-00'),
(55, 'YER', '﷼', '0000-00-00'),
(56, 'THB', '฿', '0000-00-00'),
(57, 'XOF', 'CFA', '0000-00-00'),
(58, 'ZAR', 'R', '0000-00-00'),
(59, 'Тен', 'KZT', '0000-00-00'),
(60, 'YER', '﷼', '0000-00-00'),
(61, 'THB', '฿', '0000-00-00'),
(62, 'XOF', 'CFA', '2018-02-03'),
(63, 'ZAR', 'R', '2018-02-03'),
(64, 'Тен', 'KZT', '2018-02-03'),
(65, 'YER', '﷼', '2018-02-03'),
(66, 'THB', '฿', '2018-02-03'),
(67, 'XOF', 'CFA', '2018-02-03'),
(68, 'ZAR', 'R', '2018-02-03'),
(69, 'Тен', 'KZT', '2018-02-03'),
(70, 'YER', '﷼', '2018-02-03'),
(71, 'THB', '฿', '2018-02-03'),
(72, 'XOF', 'CFA', '2018-02-03'),
(73, 'ZAR', 'R', '2018-02-03'),
(74, 'Тен', 'KZT', '2018-02-03'),
(75, 'YER', '﷼', '2018-02-03'),
(76, 'THB', '฿', '2018-02-03'),
(77, 'XOF', 'CFA', '2018-02-03'),
(78, 'ZAR', 'R', '2018-02-03'),
(79, 'Тен', 'KZT', '2018-02-03'),
(80, 'YER', '﷼', '2018-02-03'),
(81, 'THB', '฿', '2018-02-03'),
(82, 'XOF', 'CFA', '2018-02-03'),
(83, 'ZAR', 'R', '2018-02-03'),
(84, 'Тен', 'KZT', '2018-02-03'),
(85, 'YER', '﷼', '2018-02-03'),
(86, 'THB', '฿', '2018-02-03');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE IF NOT EXISTS `dishes` (
  `dishes_id` int(10) NOT NULL,
  `dishes_name` varchar(50) NOT NULL,
  `dishes_icon` varchar(200) NOT NULL,
  `dishes_status` varchar(30) NOT NULL,
  `dishes_date` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`dishes_id`, `dishes_name`, `dishes_icon`, `dishes_status`, `dishes_date`) VALUES
(1, 'sdafa', '', 'Pending', '2018/01/27'),
(2, 'sdafa', 'images_(2)1.jpg', 'Pending', '2018/01/27'),
(3, 'fasdfadsf', '', 'publish', '2018/01/27'),
(4, 'Spyci', 'dis2.png', 'Pending', '2018/01/27'),
(5, 'Helthy', 'dis1.png', 'publish', '2018/01/27'),
(6, 'Helthy 2', 'dis21.png', 'publish', '2018/01/27'),
(7, 'Helthy 3', 'dis22.png', 'publish', '2018/01/27'),
(8, 'Helthy 4', 'dis11.png', 'publish', '2018/01/27'),
(9, 'Helthy 5', 'dis23.png', 'publish', '2018/01/27'),
(10, 'Helthy 6', 'dis12.png', 'publish', '2018/01/27'),
(11, 'Spyci 2', 'dis24.png', 'publish', '2018/01/27'),
(12, 'Spyci 3', 'dis13.png', 'publish', '2018/01/27'),
(13, 'Spyci 4', 'dis25.png', 'publish', '2018/01/27');

-- --------------------------------------------------------

--
-- Table structure for table `merchant_list`
--

CREATE TABLE IF NOT EXISTS `merchant_list` (
  `id` int(12) NOT NULL,
  `merchant_id` int(12) NOT NULL,
  `merchant_name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `package` varchar(30) NOT NULL,
  `activation_code` varchar(30) NOT NULL,
  `charges_type` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `merchant_list`
--

INSERT INTO `merchant_list` (`id`, `merchant_id`, `merchant_name`, `address`, `city`, `country`, `contact`, `package`, `activation_code`, `charges_type`, `status`) VALUES
(1, 119, 'pizza hut', 'house- 35/a, \r\n     	khilkhet', 'dhaka', 'bangladesh', '01722138956', 'premium', '123456', 'membership', 'loged'),
(2, 200, 'pizza bazar', 'house- 35/a, \r\n     	khilkhet', 'dhaka', 'bangladesh', '01722138956', 'premium', '123456', 'membership', 'loged');

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE IF NOT EXISTS `mobiles` (
  `id` int(11) NOT NULL,
  `model_no` varchar(30) NOT NULL,
  `mobile_name` varchar(30) NOT NULL,
  `company` varchar(40) NOT NULL,
  `mobile_category` text NOT NULL,
  `price` double(16,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`id`, `model_no`, `mobile_name`, `company`, `mobile_category`, `price`) VALUES
(13, 'SM-G615FZKUINS', 'Samsung Galaxy On Max (Black, ', 'Samsung', 'Smartphones', 20800.00),
(14, ' SM-G955FZKGINS', 'Samsung Galaxy S8 Plus (Midnig', 'Samsung', 'Smartphones', 18300.00),
(15, 'MN0X2HN/A', 'Apple iPhone 6s (Silver, 32 GB', 'Apple', 'Smartphones', 50000.00),
(16, 'MQ8E2HN/A', 'Apple iPhone 8 Plus (Silver, 6', 'Apple', 'Smartphones', 60200.00),
(17, ' R1 R829', 'OPPO R1 R829 (Black, 16 GB) (', 'OPPO', 'Smartphones', 19000.00),
(18, 'F1', 'OPPO F1 (Gold, 16 GB) (3 GB R', 'OPPO', 'Smartphones', 15500.00),
(19, 'MZB5602IN', 'Redmi 4A (Gold, 32 GB) (3 GB ', 'Xiomi', 'Smartphones', 5999.00),
(20, 'MZB5653IN', 'Mi A1', 'Xiomi', 'Smartphones', 17500.00);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE IF NOT EXISTS `order_status` (
  `order_id` int(10) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`order_id`, `order_status`, `order_date`) VALUES
(3, '	pending', '2018-01-28'),
(4, '	cancelled', '2018-01-28'),
(5, 'delivered', '2018-01-28'),
(6, '	paid', '2018-01-28'),
(7, 'decline', '2018-01-28'),
(8, '	accepted', '2018-01-28');

-- --------------------------------------------------------

--
-- Table structure for table `pack_info`
--

CREATE TABLE IF NOT EXISTS `pack_info` (
  `pack_id` int(10) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` varchar(50) NOT NULL,
  `promo_price` varchar(50) NOT NULL,
  `expiration_type` varchar(50) NOT NULL,
  `expiration` varchar(50) NOT NULL,
  `unlimited_post` varchar(50) NOT NULL,
  `post_limit` int(10) NOT NULL,
  `sell_limit` int(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `sort_position` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pack_info`
--

INSERT INTO `pack_info` (`pack_id`, `description`, `price`, `promo_price`, `expiration_type`, `expiration`, `unlimited_post`, `post_limit`, `sell_limit`, `status`, `title`, `sort_position`) VALUES
(1, 'this desc', '999999', '9999', 'year', '2', '2', 100, 0, 'pending', 'This is final', 2),
(3, 'premium package', '20', '25', 'days', '30', 'limited', 12, 21, 'pending', '	Premium Package', 1),
(4, 'my new food desc', '985.23', '985.32', 'days', '35', '2', 54, 0, 'publish', 'my new food', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_custom`
--

CREATE TABLE IF NOT EXISTS `tbl_custom` (
  `id` int(11) NOT NULL,
  `pageName` varchar(512) DEFAULT NULL,
  `icon` varchar(512) DEFAULT NULL,
  `content` varchar(512) DEFAULT NULL,
  `seoTi` varchar(512) DEFAULT NULL,
  `metaDes` varchar(512) DEFAULT NULL,
  `metaKey` varchar(512) DEFAULT NULL,
  `status` varchar(512) DEFAULT NULL,
  `linkName` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `statuss` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_custom`
--

INSERT INTO `tbl_custom` (`id`, `pageName`, `icon`, `content`, `seoTi`, `metaDes`, `metaKey`, `status`, `linkName`, `link`, `statuss`) VALUES
(2, 'custom page', 'fa fa-icon', 'The metadata can be used by browsers.', 'custom page', 'description', 'HTML,CSS,XML,JavaScript', 'active', 'employee', 'http://localhost/employee/custom-page/do1', 'active'),
(3, 'custom page', 'fa fa-icon', 'pagination with search', 'title', 'description', 'HTML,CSS,XML,JavaScript', 'active', 'employee', 'http://localhost/employee/custom-page/do1', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dishes`
--

CREATE TABLE IF NOT EXISTS `tbl_dishes` (
  `id` int(11) NOT NULL,
  `dishName` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_dishes`
--

INSERT INTO `tbl_dishes` (`id`, `dishName`, `image`, `status`, `date`) VALUES
(8, 'healthy', '60ef0d6e624cb247edab73990aeccfdd.png', 'Publish', ''),
(10, 'Healthy', '44e549ab926c133973f6a0b6d592d2c3.png', 'Publish', ''),
(12, 'Good Food', 'e488e7739f718c4382ebeaf023896db1.png', 'Publish', ''),
(13, 'asdfasdf', '37e3127dff05d08e5fb43205449a15b6.png', 'Publish', '2018/01/31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_list`
--

CREATE TABLE IF NOT EXISTS `tbl_list` (
  `id` int(11) NOT NULL,
  `rtsulg` varchar(255) DEFAULT NULL,
  `rtname` varchar(255) DEFAULT NULL,
  `rtphone` varchar(255) DEFAULT NULL,
  `contactname` varchar(255) DEFAULT NULL,
  `contactphone` varchar(255) DEFAULT NULL,
  `contactemail` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `staddress` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postcode` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `pickup` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `pkgname` varchar(255) DEFAULT NULL,
  `expdate` date DEFAULT NULL,
  `featured` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_list`
--

INSERT INTO `tbl_list` (`id`, `rtsulg`, `rtname`, `rtphone`, `contactname`, `contactphone`, `contactemail`, `country`, `staddress`, `city`, `postcode`, `state`, `pickup`, `status`, `pkgname`, `expdate`, `featured`, `latitude`, `longitude`) VALUES
(8, 'http://localhost/employee/merchantlist/do', 'Res', '078452', 'ariful', '017845896', 'ariful.fb@gmail.com', 'Bangladesh', 'Rampura', 'Dhaka', '6200', 'Dhaka', 'saab', NULL, 'Premium Packag', '2018-01-09', 'on', NULL, NULL),
(9, 'admin', 'ResOn', '014785', 'admin', '017548965', 'admin@bladephp.co', '', 'fsdaf', 'Dhaka', '6200', NULL, 'volvo', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'admin', 'ResOn', '014785', 'admin', '017548965', 'admin@bladephp.co', '', 'sssssss', 'Dhaka', '6200', NULL, 'volvo', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'aaaaaaa', 'aaaaaaaa', '54656516', 'adffasdf', '58984', 'asd@gmal.com', 'Ashmore and Cartier Island', 'aaaaaaaaaaaaaa', 'sadf', 'sadf', 'Ashmore and Cartier Island', 'PickUp Only', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'qqqqqqqqqq', 'qqqqqqqqq', '6', 'sdfa', '232', 'aas@gmail.com', 'Austria', 'aaaaaaaaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaaa', '', 'Delivery Only', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'adminadminadmin', 'ResOnResOn ResOn', '014785', 'admin', '017548965', 'admin@bladephp.co', '', 'sssssss', 'Dhaka', '6200', NULL, 'volvo', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'aaaaaaa', 'aas@gmail.com', '234', 'sdfadf', '2432', 'aas@gmail.com', 'Austria', 'adfa', 'aaaaaaaaaaa', 'aaaaaaaaaa', 'Tirol', 'PickUp Only', NULL, NULL, NULL, NULL, NULL, NULL),
(15, '111111', '111111', '1111111', '111111', '', '1111@1111.com', 'Bangladesh', 'Banasree', 'Dhaka', '1212', 'Faridpur', 'PickUp Only', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE IF NOT EXISTS `tbl_setting` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `dlogo` varchar(255) DEFAULT NULL,
  `mlogo` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phnum` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gmail` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `decimal` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`id`, `title`, `dlogo`, `mlogo`, `country`, `address`, `phnum`, `email`, `gmail`, `currency`, `position`, `decimal`) VALUES
(1, 'Karinderia', 'karin.png', NULL, '', 'Dhaka', '0175485496', 'aaa.ariful.fb@gmail.com', 'ariful.fb@gmail.com', 'USD', 'left', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` varchar(255) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `username`, `phone`, `password`, `is_admin`, `date`, `status`) VALUES
(2, 'hardik', 'diamond@gmail.com', 'cray', '9979133538', '123456', '0', '2017-04-29 13:41:07', '1'),
(3, 'mitul', 'ariful.fb@gmail.com', 'mitul', '9979133538', '123456', '0', '2017-04-29 14:10:53', '0'),
(4, 'mahbub', 'm@gmail.com', 'crayon', '9979133538', '123456', '1', '2017-04-29 14:11:40', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addressbook`
--
ALTER TABLE `addressbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commission`
--
ALTER TABLE `commission`
  ADD PRIMARY KEY (`Commission_id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cuisine`
--
ALTER TABLE `cuisine`
  ADD PRIMARY KEY (`cuisine_id`);

--
-- Indexes for table `cuisine_sorted`
--
ALTER TABLE `cuisine_sorted`
  ADD PRIMARY KEY (`cuisine_id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`currency_id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`dishes_id`);

--
-- Indexes for table `merchant_list`
--
ALTER TABLE `merchant_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `pack_info`
--
ALTER TABLE `pack_info`
  ADD PRIMARY KEY (`pack_id`);

--
-- Indexes for table `tbl_custom`
--
ALTER TABLE `tbl_custom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dishes`
--
ALTER TABLE `tbl_dishes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_list`
--
ALTER TABLE `tbl_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addressbook`
--
ALTER TABLE `addressbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `commission`
--
ALTER TABLE `commission`
  MODIFY `Commission_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `cuisine`
--
ALTER TABLE `cuisine`
  MODIFY `cuisine_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cuisine_sorted`
--
ALTER TABLE `cuisine_sorted`
  MODIFY `cuisine_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=143;
--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `currency_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `dishes_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `merchant_list`
--
ALTER TABLE `merchant_list`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pack_info`
--
ALTER TABLE `pack_info`
  MODIFY `pack_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_custom`
--
ALTER TABLE `tbl_custom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_dishes`
--
ALTER TABLE `tbl_dishes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_list`
--
ALTER TABLE `tbl_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
