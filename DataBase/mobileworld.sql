-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2021 at 01:34 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobileworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE `addcart` (
  `cart_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcart`
--

INSERT INTO `addcart` (`cart_id`, `p_id`, `userid`, `qty`, `status`) VALUES
(1, 3, 1, 1, '0'),
(2, 26, 1, 1, '0'),
(4, 3, 15, 1, '0'),
(5, 15, 15, 2, '0'),
(6, 11, 15, 1, '0'),
(7, 6, 1, 1, '0'),
(8, 3, 1, 2, '0'),
(9, 16, 14, 1, '0'),
(11, 6, 14, 1, '0'),
(12, 6, 13, 1, '0'),
(13, 2, 13, 2, '0'),
(15, 3, 14, 1, '0'),
(16, 21, 16, 1, '0'),
(17, 24, 16, 1, '0'),
(19, 3, 18, 1, '0'),
(21, 11, 18, 5, '0'),
(22, 12, 18, 3, '0');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `ad_id` int(11) NOT NULL,
  `Admin_name` varchar(30) NOT NULL,
  `Admin_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`ad_id`, `Admin_name`, `Admin_password`) VALUES
(1, 'radhika', '12345'),
(2, 'bansi', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `b_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `cid` varchar(20) NOT NULL,
  `total` float NOT NULL,
  `tax` float NOT NULL,
  `gtotal` float NOT NULL,
  `odate` date NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`b_id`, `p_id`, `sp_id`, `userid`, `cid`, `total`, `tax`, `gtotal`, `odate`, `status`) VALUES
(10, 17, 8, 13, '13', 25298, 0.5, 26562.9, '2021-09-13', 'cancle'),
(11, 18, 9, 14, '11,15', 40479, 0.5, 42502.9, '2021-09-15', 'cancle'),
(12, 19, 10, 16, '16,17', 46598, 0.5, 48927.9, '2021-09-16', ''),
(13, 20, 11, 18, '19,21,22', 351964, 0.5, 369562, '2021-09-18', 'cancle');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`c_id`, `c_name`, `c_logo`) VALUES
(1, 'Apple', 'download.png'),
(2, 'VIVO', 'download (1).png'),
(9, 'Samsung', 'download (4).png'),
(10, 'Oppo', 'download (5).png'),
(11, 'MI', 'download (6).png'),
(12, 'Real me', 'real me.jpg'),
(13, 'oneplus', 'oneplus.png'),
(14, 'sony', 'sony.png'),
(15, 'Lenovo', 'lenovo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `f_email` varchar(40) NOT NULL,
  `f_msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_name`, `f_email`, `f_msg`) VALUES
(1, 'radhika vaishnav', 'radhika@gmail.com', 'good..'),
(2, 'piyu ahir', 'piyu11@gmail.com', 'good service....'),
(4, 'bansi chauhan', 'bansi1234@gmail.com', 'excellent performance..'),
(8, 'siyapatel', 'siyapatel@gmail.com', 'good services.....');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `p_id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `cardname` varchar(30) DEFAULT NULL,
  `cardnum` varchar(30) DEFAULT NULL,
  `expmonth` varchar(11) DEFAULT NULL,
  `expyear` varchar(11) DEFAULT NULL,
  `cvv` varchar(11) DEFAULT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`p_id`, `type`, `cardname`, `cardnum`, `expmonth`, `expyear`, `cvv`, `userid`) VALUES
(1, 'cod', NULL, NULL, NULL, NULL, NULL, 1),
(4, 'card', 'siyapatel', '324965466', 'Feb', '2020', '8767898', 15),
(5, 'card', 'siyapatel', '324965466', 'Feb', '2020', '8767898', 15),
(6, 'card', 'siyapatel', '324965466', 'Feb', '2020', '8767898', 15),
(7, 'card', 'siyapatel', '324965466', 'Feb', '2020', '8767898', 15),
(8, 'card', 'siyapatel', '67895645', 'Sep', '2020', '676767', 15),
(9, 'card', 'siyapatel', '67895645', 'Sep', '2020', '676767', 15),
(10, 'card', 'ghsagshaghs', '66565656565', 'Feb', '2019', '6767676', 1),
(11, 'cod', NULL, NULL, NULL, NULL, NULL, 1),
(12, 'card', 'siya', '676767676', 'Jan', '2018', '787', 15),
(13, 'card', 'radhepatel', '7895643654', 'Nov', '2021', '98989', 1),
(14, 'card', 'sita patel', '12332457878', 'Aug', '2021', '998798', 14),
(15, 'card', 'ram patel', '262273226272', 'Feb', '2019', '878', 13),
(16, 'card', 'ram patel', '262273226272', 'Feb', '2019', '878', 13),
(17, 'card', 'ram patel', '7656467854567', 'Jan', '2018', '78787', 13),
(18, 'card', 'sita', '7676776767', 'Jan', '2020', '787878', 14),
(19, 'card', 'Bansi Chauhan', '66445678564534', 'Apr', '2019', '87878', 16),
(20, 'card', 'piyu Ahir', '567897654356', 'Oct', '2021', '878787', 18),
(21, 'card', 'piyu Ahir', '567897654356', 'Oct', '2021', '878787', 18);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `m_name` varchar(60) NOT NULL,
  `c_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `os` varchar(30) NOT NULL,
  `processor` varchar(60) NOT NULL,
  `rear_cemera` varchar(80) NOT NULL,
  `front_cemera` varchar(20) NOT NULL,
  `sim_type` varchar(20) NOT NULL,
  `internal_storage` varchar(30) NOT NULL,
  `display` varchar(30) NOT NULL,
  `battery` varchar(20) NOT NULL,
  `r_id` int(11) NOT NULL,
  `stock` varchar(20) NOT NULL,
  `resolution` varchar(20) NOT NULL,
  `aspact_ratio` varchar(20) NOT NULL,
  `height` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `color` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `release_date` date NOT NULL,
  `mobile_image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `m_name`, `c_id`, `s_id`, `os`, `processor`, `rear_cemera`, `front_cemera`, `sim_type`, `internal_storage`, `display`, `battery`, `r_id`, `stock`, `resolution`, `aspact_ratio`, `height`, `weight`, `color`, `price`, `release_date`, `mobile_image`) VALUES
(1, 'iPhone 12 Pro Max', 1, 18, 'iOS 14', 'A14 Bionic Chip ', '12MP + 12MP + 12MP', '12MP ', 'Dual Sim', '128 Gb', '17.02 cm (6.7 inch)', ' 3687 mAh', 2, '0', '2778 x 1284 Pixels', '19.5:9 ', '160.8 mm', '226 g', 'Silver', 125900, '2020-10-13', 'download (21).jpg'),
(2, 'vivo Y20i', 2, 8, 'Android 10', 'Octa Core', '13MP + 2MP + 2MP', '8MP ', 'Dual Sim', '64 Gb', '16.54 cm (6.51 inch)', '5000 mAh', 5, '6', '1600 x 720 Pixels', '20:9', '164.41 mm', '192.3 g', 'Dawn White', 12649, '2020-08-26', 'download (14).jpg'),
(3, 'Samsung Galaxy F62', 9, 4, 'anroid', 'Exynos 9825', '64Mp+12Mp+5Mp', '32Mp', 'Dual sim', '128 gb', '17.02cm(6.7 inch)', '7000mAh', 2, '7', '2400 x 1080 Pixels', '20:9', '163.9 mm', '218 g', 'Laser Green', 19999, '2021-03-23', 'images (23).jpg'),
(6, 'oppo F19 Pro', 10, 11, 'Android 11', 'Octa Core', '48MP + 8MP + 2MP ', '16MP ', 'Dual sim', '128 Gb', '16.33 cm (6.43 inch)', '4310 mAh Battery', 4, '6', '1080x2400 pixels', '20:9', '160.1 mm', '172 g', 'Fluid Black', 20480, '2021-03-08', 'download (16).jpg'),
(7, 'REDMI Note 10 Pro Max', 11, 14, 'Android 11', 'Octa Core', '108MP + 8MP + 5MP + 2MP', '16MP ', 'Dual Sim', '128 GB', '16.94 cm (6.67 inch)', '5020 mAh', 2, '12', '2400 x 1080 Pixels', '20:9', '164.5 mm', '192 g', 'Glacial Blue', 20788, '2021-02-25', 'download (17).jpg'),
(8, 'REDMI Note 9 Pro Max', 11, 13, 'Android 10', 'Octa Core', '64MP + 8MP + 5MP + 2MP', '32MP', 'Dual Sim', '128 gb', '16.94 cm (6.67 inch)', '5020 mAh', 3, '14', '2400 x 1080 Pixels', '19:6', '165.5 mm', '209 g', 'Aurora Blue', 18499, '2020-07-09', 'download (18).jpg'),
(9, 'Redmi 9A', 11, 15, 'Android Android Q 10', 'Octa Core', '13MP ', '12Mp', 'Dual Sim', '32 Gb', '16.59 cm (6.53 inch)', '5000 mAh', 4, '18', '720 x 1600$$pixel', '18:9', '164.90 x 77.07 x 9.00mm', '196.00 grams', 'Black', 7358, '2019-05-16', 'download (19).jpg'),
(10, 'OPPO F17', 11, 11, 'Android 10', 'Octa Core', '16MP + 8MP + 2MP + 2MP', '16MP', 'Dual sim', '128 Gb', '16.36 cm (6.44 inch)', '4015 mAh', 2, '10', '2400 x 1080 Pixels', '20:09', '159.8 mm', '163 g', 'Dynamic Orange', 16990, '2021-03-31', 'download (20).jpg'),
(11, 'Apple iPhone 11 ', 1, 17, 'iOS 13', 'A13 Bionic Chip', '12MP + 12MP', '12 MP', 'Dual sim', '64 Gb', '15.49 cm (6.1 inch)', '3110mAh', 3, '0', '1792 x 828 Pixels', '19.5:9', '75.7 mm', '194 g', 'white', 51999, '2019-09-21', 'images (24).jfif'),
(12, 'vivo V15 Pro ', 2, 7, 'Android Pie 9.0', 'Octa Core', '48MP + 5MP + 8MP', '32 MP', 'Dual Sim', '128 Gb', '16.23 cm (6.39 inch)', '3700 mAh', 2, '5', '2340 x 1080 pixels', '19.5:9', '157.25 mm', '185 g', 'Topaz Blue', 23990, '2020-03-18', 'download (24).jfif'),
(13, 'SAMSUNG Galaxy Z Flip3 5G', 9, 21, 'Android 11', 'octa core', '12MP + 12MP', '10MP', 'Dual Sim', '128 GB', '17.02 cm (6.7 inch)', '3300 mAh', 1, '10', '2640 x 1080 Pixels', '9:22', '166 mm', '183 g', 'Black', 84999, '2021-09-10', 'sumsungz3flip.jpg'),
(14, 'REDMI 9 Power ', 11, 13, 'Android v10', 'Qualcomm Snapdragon 662 ', '48MP + 8MP + 2MP + 2MP', ' 8MP ', 'Dual Sim', ' 64 GB', '16.59 cm (6.53 inch)', '6000 mAh Battery', 3, '15', '2340 x 1080 pixels ', '19.5:9', '162.3 mm', '198.00', 'green', 11499, '2020-12-17', 'realme9power.jpeg'),
(15, 'SONY Xperia Z5 ', 14, 22, 'Android 11', 'MSM8994 Qualcomm Snapdragon 810', '23MP ', '5MP', 'Dual Sim', '32 GB', '13.21 cm (5.2 inch) ', '2900 mAh', 4, '9', '1080 x 1920 pixels', '16:9 ', '146 mm', '   156.5 g', 'Gold', 52990, '2015-09-02', 'sonyxperiaz5.jpg'),
(16, 'OPPO A53s', 10, 10, 'Android 11', 'Octa Core', '13MP + 2MP + 2MP', '8mp', 'Dual Sim', '128 GB', '16.56 cm (6.52 inch)', '5000mAh', 2, '5', '1600 x 720 Pixels', '20:9', '164 mm', '	      189.6 g', 'Crystal Blue', 15990, '2021-04-27', 'oppoa53.jpg'),
(17, 'vivo V9', 2, 7, 'Android Oreo 8.1', '   Octa Core', '	      16MP + 5MP', '	      24MP', 'Dual Sim', ' 64 GB ', '16.0 cm (6.3 inch)', '3260 mAh ', 3, '7', '2280 x 1080 Pixels', '19:9', '154.81 mm', '150 g', 'Pearl Black', 26000, '2018-03-06', 'vivov9.jpg'),
(18, 'OPPO Reno6 Pro 5G', 10, 12, 'Android 11', 'MediaTek Dimensity 1200', ' 64MP + 8MP + 2MP + 2MP', ' 32MP', 'Dual Sim', ' 256 GB', '16.64 cm (6.55 inch) ', '4500mAh', 1, '6', '2400 x 1080 Pixels', '20:9', '  160 mm', '177 g', ' Aurora', 39990, '2021-07-14', 'opporeno6.jpg'),
(19, 'APPLE iPhone 12 Mini', 1, 18, 'iOS 14', 'A14 Bionic Chip', '12MP + 12MP', '12MP ', 'Dual Sim', '64 GB', 'APPLE iPhone 12 Mini', '2227 mAh', 1, '7', '2340 x 1080 Pixels', ' 19.5:9 ', '131.5 mm', '133 g', 'Purple', 67900, '2020-10-13', 'iphone12mini.jpg'),
(20, 'vivo Y20G', 2, 8, 'Android 11', 'Octa Core', '13 MP + 2 MP + 2 MP', '8MP', 'Dual Sim', '128 GB', '16.54 cm (6.51 inch)', '5000mAh', 2, '9', '1600 x 720$$pixel', '20:9 ', '164.41 mm', '192.3 g', ' Purist Blue', 15990, '2021-01-19', 'vivoy20G.jpg'),
(21, 'Mi 11 Lite', 11, 24, 'Android 11', 'Octa Core', '64MP + 8MP + 5MP', '16MP', 'Dual Sim', '128 GB', '16.64 cm (6.55 inch)', '4250 mAh', 2, '2', '2400 x 1080 Pixels', '20:9', '160.53 mm', '157 g', 'Tuscany Coral', 21999, '2021-06-25', 'mi11Lite.jpg'),
(22, 'OPPO A12 ', 10, 15, 'Android Pie 9.0', 'Octa Core', '13MP + 2MP', '5MP', 'Dual Sim', '32 GB ', '15.8 cm (6.22 inch)', '4230 mAh', 4, '5', '1520 x 720 Pixels', '19:9', '155.9 mm', '165 g', 'Blue', 89990, '2020-04-22', 'oppoa12.jpg'),
(23, 'Lenovo A850', 15, 15, '	   Android Jelly Bean 4.2', ' Quad Core', '5MP Rear', ' 0.3MP', 'Dual Sim', '  4 GB', '13.97 cm (5.5 inch)', '2250 mAh', 6, '4', '960 x 540 Pixels', ' 16:9', '153.5 mm', '184 g', 'Black', 15999, '2013-09-13', 'lenovoa850.jpg'),
(24, 'OnePlus Nord CE 5G', 13, 27, 'Android 11', 'Octa Core', '64MP+8MP+2MP', '16MP', 'Dual Sim', '128 GB', '16.33 cm(6.43-inch)', '4500mAh', 1, '5', '1080x2400 pixels', '20:9', '159.2 mm', ' â€Ž170 g', 'silver gray', 24599, '2021-06-10', 'oneplusnordce5.jpg'),
(25, 'SAMSUNG M31', 9, 6, 'Android Pie 10', 'Octa Core', '64MP + 8MP + 5MP + 5MP', '32MP', 'Dual Sim', '128 GB', '16.26 cm (6.4 inch)', '6000 mAh Battery', 2, '8', '2340 x 1080$$pixel', '19.5:9', '159 mm', ' 191 g', 'Ocean Blue', 16315, '2020-02-26', 'sumsungm31.jpeg'),
(26, 'APPLE iPhone XR ', 1, 16, 'iOS 14.2', '  A12 Bionic Chip', ' 12MP ', '7MP', 'Dual Sim', '64 GB', '15.49 cm (6.1 inch)', '2942 mAh', 1, '12', '1792 x 828 Pixels', '19.5:9', '150.9 mm', ' 194 g', 'White', 42999, '2018-10-26', 'iphonexr.jpg'),
(27, 'vivo Y30', 2, 8, 'Android 10', 'Octa Core', '	      13MP + 8MP + 2MP + 2MP', '8mp', 'Dual Sim', '128 GB', '16.43 cm (6.47 inch)', '5000mAh', 3, '2', '1560 x 720 Pixels', '19.5:9', ' 162.04 mm', '197 g', 'Dazzle Blue', 14970, '2020-12-15', 'vivoy30.jpg'),
(28, 'realme C20', 12, 28, 'Android 10', 'Octa Core', '   8MP', '5MP', 'Dual Sim', '32 GB', '16.51 cm (6.5 inch)', '5000mAh', 5, '6', '720x1600 pixels', '20:9', '165.2 mm', ' 190 g', 'Cool Blue', 7499, '2021-01-22', 'realmec20.jpg'),
(29, 'SAMSUNG M02s', 9, 6, '  Android Pie 10', 'Octa Core', '13MP + 2MP + 2MP', ' 5MP', 'Dual Sim', ' 32 GB', '16.51 cm (6.5 inch)', '5000mAh', 1, '9', '720 x 1600$$pixel', '19.5:9', '164.2 mm', '196 g', ' Black', 9967, '2020-07-20', 'sumsung m20s.jpg'),
(30, 'Mi 11x', 11, 24, 'Android 11', 'Octa Core', '48MP + 8MP + 5MP', '20MP', 'Dual Sim', '128 GB', '16.94 cm (6.67 inch)', ' 4520 mAh', 2, '8', '2400 x 1080 Pixels', '20:9', '163.7 mm', '196 g', 'Cosmic Black', 26194, '2021-04-23', 'mi11x.jpg'),
(31, 'OPPO A54', 10, 10, 'Android 10', 'Octa Core', '13MP + 2MP + 2MP', '16 MP', 'Dual Sim', '128 GB', '16.54 cm (6.51 inch)', '5000mAh', 3, '2', '1600 x 720 Pixels', '4:3', '163.6 mm', '192 g', 'Starry Blue', 15990, '2021-03-26', 'oppoa14.jpg'),
(32, 'Sony Xperia PRO 5G', 14, 22, 'Android 10', 'Qualcomm Snapdragon 865', '12MP + 12MP + 12MP ', '8MP ', 'Dual Sim', '512GB ', '16.51 cm(6.5-inch)', '4000mAh', 1, '8', ' 1644x3840 pixels', '21:9', '170.2 mm', '225.1 g', 'black', 335830, '2021-01-26', 'xpeiapro.png');

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

CREATE TABLE `ram` (
  `r_id` int(11) NOT NULL,
  `r_size` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`r_id`, `r_size`) VALUES
(1, '8 Gb & above'),
(2, '6 gb'),
(3, '4 gb'),
(4, '3 gb'),
(5, '2 Gb'),
(6, '1 Gb'),
(7, 'Less Than 512 mb');

-- --------------------------------------------------------

--
-- Table structure for table `registerform`
--

CREATE TABLE `registerform` (
  `userid` int(11) NOT NULL,
  `FIRSTNAME` varchar(20) NOT NULL,
  `LASTNAME` varchar(20) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registerform`
--

INSERT INTO `registerform` (`userid`, `FIRSTNAME`, `LASTNAME`, `EMAIL`, `PASSWORD`) VALUES
(1, 'radhika', 'vaishnav', 'radhika@gmail.com', '123456'),
(13, 'ram', 'patel', 'ram11@gmail.com', '123456'),
(14, 'sita', 'patel', 'sita@gmail.com', '111111'),
(15, 'siya', 'patel', 'siyapatel@gmail.com', 'siyapatel'),
(16, 'Bansi', 'jhjkg', 'bansi1@gmail.com', 'bansi'),
(17, 'bansi', 'patel', 'bansi111@gmail.com', 'bansi'),
(18, 'piyu', 'ahir', 'piyu@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `s_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `s_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`s_id`, `c_id`, `s_name`) VALUES
(4, 9, 'galaxy F'),
(5, 9, 'galaxy S'),
(6, 9, 'Galaxy M'),
(7, 2, 'V'),
(8, 2, 'Y'),
(9, 2, 'X'),
(10, 10, 'A'),
(11, 10, 'F'),
(12, 10, 'Reno'),
(13, 11, 'Redmi 9'),
(14, 11, 'Radmi Note 10'),
(15, 11, 'A'),
(16, 1, 'iPhone XR'),
(17, 1, 'iPhone 11'),
(18, 1, 'iPhone 12'),
(19, 13, 'oneplus 9R'),
(20, 12, 'real me GT 5G'),
(21, 9, 'galaxy Z'),
(22, 14, 'sony Xperia '),
(23, 12, ' narzo'),
(24, 1, 'mi 11'),
(25, 15, 's'),
(26, 15, 'k'),
(27, 13, 'Nord'),
(28, 12, 'c');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `sp_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `s_add` varchar(300) NOT NULL,
  `b_add` varchar(300) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`sp_id`, `userid`, `name`, `s_add`, `b_add`, `contact`, `city`, `pincode`) VALUES
(1, 1, 'Radhika Vaishnav', 'jantanager', 'amarnager road', '9608778654', 'jetpur', '360370'),
(4, 15, 'siya', 'rgroad', 'hjhjhj', '6547891237', 'jetpur', '098678'),
(8, 13, 'ram patel', 'hp hospital near', 'hp hospital near', '7878678765', 'surat', '098789'),
(9, 14, 'sita', 'M.J road ,Gandhi Chowk ,shiv complex', 'M.J road ,Gandhi Chowk ,shiv complex', '9089065789', 'surat', '768545'),
(10, 16, 'Bansi Chauhan', 'Amarnager Road,near vekriyanager,shiv temple,street no.10,block no.5', 'Amarnager Road,near vekriyanager,shiv temple,street no.10,block no.5', '6354130987', 'jetpur', '360370'),
(11, 18, 'piyu Ahir', 'J.M road,under gandhi bridge', 'J.M road,under gandhi bridge', '9087645634', 'gandhinager', '879567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcart`
--
ALTER TABLE `addcart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `u_id` (`userid`),
  ADD KEY `p_id_2` (`p_id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `sp_id` (`sp_id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `r_id` (`r_id`);

--
-- Indexes for table `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `registerform`
--
ALTER TABLE `registerform`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `series_ibfk_1` (`c_id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`sp_id`),
  ADD KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcart`
--
ALTER TABLE `addcart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `ram`
--
ALTER TABLE `ram`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `registerform`
--
ALTER TABLE `registerform`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `addcart`
--
ALTER TABLE `addcart`
  ADD CONSTRAINT `addcart_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `addcart_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `registerform` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `payment` (`p_id`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`sp_id`) REFERENCES `shipping` (`sp_id`),
  ADD CONSTRAINT `bill_ibfk_3` FOREIGN KEY (`userid`) REFERENCES `registerform` (`userid`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `registerform` (`userid`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `company` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `series` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`r_id`) REFERENCES `ram` (`r_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `series`
--
ALTER TABLE `series`
  ADD CONSTRAINT `series_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `company` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shipping`
--
ALTER TABLE `shipping`
  ADD CONSTRAINT `shipping_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `registerform` (`userid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
