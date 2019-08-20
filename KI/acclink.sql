-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2019 at 07:03 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acclink`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(1) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastlogin` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `lastlogin`) VALUES
(1, 'admin', '$2y$10$JRv/GJxHYE/xfFYP1X.wruHc/3aANFxDv4MhWbDClPRueP0SNRV22', '1561270299');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_num` bigint(20) NOT NULL,
  `card_cvc` int(5) NOT NULL,
  `card_exp_month` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `card_exp_year` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `item_price` float(10,2) NOT NULL,
  `item_price_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'usd',
  `paid_amount` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `paid_amount_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `txn_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(5) NOT NULL,
  `pro_name` varchar(30) NOT NULL,
  `pro_brand` varchar(20) NOT NULL,
  `pro_price` varchar(8) NOT NULL,
  `pro_color` varchar(150) NOT NULL,
  `pro_fe1` text NOT NULL,
  `pro_fe2` text NOT NULL,
  `pro_fe3` text NOT NULL,
  `pro_fe4` text NOT NULL,
  `pro_os` text NOT NULL,
  `pro_ram` varchar(5) NOT NULL,
  `pro_dimensions` text NOT NULL,
  `pro_battery` text NOT NULL,
  `pro_model` varchar(50) NOT NULL,
  `pro_comm` text NOT NULL,
  `pro_connectivity` text NOT NULL,
  `pro_special` text NOT NULL,
  `pro_addinfo` text NOT NULL,
  `pro_img1` text NOT NULL,
  `pro_img2` text NOT NULL,
  `pro_img3` text NOT NULL,
  `pro_img4` text NOT NULL,
  `pro_img5` text NOT NULL,
  `pro_img6` text NOT NULL,
  `pro_img7` text NOT NULL,
  `pro_img8` text NOT NULL,
  `pro_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pro_name`, `pro_brand`, `pro_price`, `pro_color`, `pro_fe1`, `pro_fe2`, `pro_fe3`, `pro_fe4`, `pro_os`, `pro_ram`, `pro_dimensions`, `pro_battery`, `pro_model`, `pro_comm`, `pro_connectivity`, `pro_special`, `pro_addinfo`, `pro_img1`, `pro_img2`, `pro_img3`, `pro_img4`, `pro_img5`, `pro_img6`, `pro_img7`, `pro_img8`, `pro_status`) VALUES
(3, 'SPARK 3 PRO', 'Tecno', '', 'Midnight black, Bordeaux red,Nebula black,Champagne gold', '(13+2)M AF(rear)/8M FF(front)', 'Sim Card :Dual Nano', 'Processor : Quad Core 2.0GHz', 'Display :6.19” HD+ (Marketing inch 6.2”)', 'Android 9.0', '32GB ', '155.3*75.8*7.88mm', '3500mAh', 'KB8 32+2', 'WiFi/BT 5.0', 'GSM: 900/1800\r\nWCDMA: B1/B8\r\nFDD: B1/B2/B3/B4/B5/B7/B8/B20/B28A', 'AI Bright Camera\r\n13MP+2MP Dual Camera\r\n4G LTE\r\n32GB ROM +2GB RAM\r\n6.2” Super FULL VIEW', '', 'assets/images/products/79785094cda412b9bcc88106ab313a69.jpeg', 'assets/images/products/481872c577d0f7f58937c165392dafdf.jpeg', '', '', '', '', '', '', 1),
(5, 'POP 2F', 'Tecno', '', 'Midnight black,', 'Camera :5M AF/8M FF', 'SIM Card :Micro SIM + Micro SIM', 'Display :5.45” FW+ TN (Marketing inch 5.5”)', 'Processor :Quad Core 1.3GHz', 'Android 8.1(Go edition)', '16GB ', '150.6*72.6*9.35mm', '2400mAh', 'B1f', 'WIFI/BT 4.2', 'GSM: 850/900/1800/1900\r\nWCDMA: B1/B2/B5/B8', '5.5 INCH Super FULL VIEW\r\n8M Front Camera with Flash\r\nFace unlock\r\n16GB ROM +1 GB RAM', '', 'assets/images/products/e89c63da9205dcc9275fe7f4b24cc60a.png', 'assets/images/products/30d819ec0ad81b2112dd740c753ee2a4.png', 'assets/images/products/469e2188356cc05839d3ebd59d6bdd69.png', '', '', '', '', '', 2),
(6, 'AXON 7MINI', '', '', '', 'Camera :16MP AF, PDAF, LED, 8MP FF ', 'Display :5.2’’FHD, AMOLED, 16M Color', 'Platform :MSM8952, 4xA53, 1.5GHz, 4xA53, 1.2GHz', 'Interface :3.5mm Earphone Port, Type C,', 'Android M', '32GB ', '147.5*71.5*7.9mm', '2680mAh', '', '', 'FDD: B1/3/4/7/8/20\r\nTDD: B38/40/41\r\nWCDMA: B1/2/5/8\r\nGSM: B2/3/5/8\r\nCA: B3+B7  B3+B20  B7+B20  B7+B8', 'WIFI 802.11b/g/n/ac,BT4.0\r\nGPS/AGPS/gronass/ Bei dou\r\nAccelerometer, Proximity,  Ambient Light, Gyro. Hall\r\nMicro SD, Fingerpint\r\nHIFI, 3D Touch\r\nQuick Charge2.0', '', 'assets/images/products/806d89c7ccc4dbbe3cc0d9ce8f7095d3.jpeg', 'assets/images/products/67708484aa3ac1d308c027028c8f7dd5.jpeg', 'assets/images/products/79931fc3769d337e057420d4ea38450c.jpeg', 'assets/images/products/3f02c3c77c47c9abfd900a3bf7e600e2.jpeg', 'assets/images/products/265287a5a6d152376ff0c3892f96507f.jpeg', '', '', '', 1),
(7, 'ZTE A510', '', '', '', 'Platform :MTK6735P', 'Display :5.0 inch HD, IPS, Oncell', 'Camera :8M AF+5M  front and back flash', 'Interface :5pin Micro USB, 3.5mm Earphone Port,  Micro SD slot,(3FF+4FF+T)', 'Android 6.0', '1GB R', '143.5*71*8.2mm', '2200mAh(Unremovable)', '', 'GPS,  WiFi 802.11 b/g/n,  BT 4.0', 'LTE: B1/B3/B5(8)/B7(40)/B20(28)\r\nUMTS: 850/900/2100\r\nGSM: 850/900/1800/1900', 'Accelerometer, Proximity, Ambient Light,\r\nFM Radio ,\r\nHall sensor,\r\nFOTA', '', 'assets/images/products/4ccb22322bd443f37a70d89b9f0accd8.jpeg', 'assets/images/products/28adaf973a5778514ad1604a1abd8e2f.jpeg', 'assets/images/products/528dd9988a3fb10a43b3a086cc85a65e.jpeg', 'assets/images/products/bb2df90f41428702f10d8af0f708cfd1.jpeg', 'assets/images/products/3ab174e315730feaa5990453f631773a.jpeg', '', '', '', 1),
(8, 'T1', '', '', '', 'Platform :SPRD6531DA', 'Bands :GSM 900/1800MHz', 'Display :2.4', 'Thickness: 12.8mm', '', '32Mb+', '', '1000mAh', '', '', 'BT,FM,MP3/4,WAP,Torch,Micro 5pin,3.5mm ear-jack', '', '<p>Speaker :&nbsp;20*30; 2 in1</p><p>Keyboard :&nbsp;Rubber </p><p>Camera :&nbsp;0.08mp</p>', 'assets/images/products/52150c7c59e5ad353442e6bc8e8ebbf0.png', '', '', '', '', '', '', '', 1),
(9, 'T2', '', '', '', 'Camera :2+5 AF with front flash ', 'Thickness :8.6mm', 'Painting : Two Part Painting', 'Support :Platform', 'Android 7.0', '1GB+8', '5inch with FWVGA TN 2.5D glass G+F  touch panel', 'Maximum 2500mAh', '', '', 'Bands : WCDMA 900 /2100  GSM 850/1900/900/1800MHz', 'Full wave 700mA output, USB cable ,earphone with mic', '', 'assets/images/products/0be01dffbd3741989639981c62c5b137.png', '', '', '', '', '', '', '', 2),
(10, 'ZTE V7 Lite', '', '', '', 'Camera :8M AF+8M, front and back flash', 'Platform :MTK6735P', 'Display : 5.0 inch, HD, 2.5D', 'Interface :5pin Micro USB, 3.5mm Earphone Port,  Micro SD slot?4FF+4FF/T)', 'Android  6.0', '2GB R', '5.0 inch, HD, 2.5D', '2500mAh?Unremovable)', '', '', 'LTE: B1/B3/B5(8)/B7(40)/B20(28)\r\nUMTS: 850/900/2100\r\nGSM: 850/900/1800/1900', 'GPS, \r\nWiFi 802.11 b/g/n, \r\nBT 4.0,\r\nAccelerometer, Proximity, Ambient Light, Compass\r\nFM Radio ,\r\nHall sensor,\r\nFinger print', '', 'assets/images/products/0d39befba7a79594663f17b0887f74c0.jpeg', 'assets/images/products/72782fe53cbbd12bbe8cec7d0a504433.jpeg', 'assets/images/products/50cf28954d7b099087b88cc5524bdf79.jpeg', 'assets/images/products/ba074f7a3a1f4a3b3502fc38c6ca9407.jpeg', 'assets/images/products/0f8f64296d2c272b49f693e1ed09a1a7.jpeg', '', '', '', 1),
(11, 'ZTE Blade V7 Max', '', '', '', 'Camera :16M  AF (PDAF)+8M FF, (front  flash optional)', 'Display :5.5inch FHD, GFM (2.5D)', 'Interface :5pin Micro USB, 3.5mm Earphone Port,  Micro SD slot(4FF+4FF/T)', 'Platform :MTK6755M,8Core,1.8GHz', 'Android 6.0', '3GB R', '5.5inch FHD, GFM (2.5D)', '3000mAh (Unremovable)', '', '', 'LTE: B1/B3/B5/B7/B8/B20\r\nUMTS: 850/900/2100\r\nGSM: 850/900/1800/1900', 'GPS, WiFi 802.11 b/g/n, BT 4.0, FM Radio ,\r\nAccelerometer, Proximity, Ambient Light, Compass, Geroscope?Hall sensor\r\nFingerPrint,\r\nVoLTE,\r\nFOTA', '', 'assets/images/products/39d8657822ffb4372006e604637763fd.jpeg', 'assets/images/products/dd3b91df415ec2fafcadb81bebf54170.jpeg', 'assets/images/products/cc5b9cb324470a054caa090c5052b75a.jpeg', 'assets/images/products/b203765a38b5b73642b114c70fe372f3.jpeg', 'assets/images/products/578b7b37e7cbb6b4830227c4cf9dcfa7.jpeg', '', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about_static`
--

CREATE TABLE `tbl_about_static` (
  `id` int(100) NOT NULL,
  `heading_1` varchar(100) NOT NULL,
  `heading_2` varchar(100) NOT NULL,
  `heading_3` varchar(100) NOT NULL,
  `description_1` varchar(1500) NOT NULL,
  `description_2` varchar(1500) NOT NULL,
  `description_3` varchar(1500) NOT NULL,
  `image_1` varchar(250) NOT NULL,
  `image_2` varchar(250) NOT NULL,
  `image_3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about_static`
--

INSERT INTO `tbl_about_static` (`id`, `heading_1`, `heading_2`, `heading_3`, `description_1`, `description_2`, `description_3`, `image_1`, `image_2`, `image_3`) VALUES
(1, 'test', 'Nothing new', 'new data', 'kjuhgukdjf llLorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.       \r\n                                 \r\n                                 \r\n                                 \r\n                                 \r\n                          ', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.                \r\n                                          \r\n                                          \r\n                                          \r\n                                          \r\n                          ', 'assets/images/slider/4c7f46c50ac6fcc36dcc775ca1275.jpg', 'assets/images/slider/4c7f46c50ac6fcc36dcc775ca1275.jpg', 'assets/images/slider/4c7f46c50ac6fcc36dcc775ca1275.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_block`
--

CREATE TABLE `tbl_block` (
  `id` int(11) NOT NULL,
  `blk_heading1` varchar(30) NOT NULL,
  `blk_heading2` varchar(30) NOT NULL,
  `blk_description1` text NOT NULL,
  `blk_description2` text NOT NULL,
  `blk_link1` text NOT NULL,
  `blk_link2` text NOT NULL,
  `blk_img1` varchar(150) NOT NULL,
  `blk_img2` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_block`
--

INSERT INTO `tbl_block` (`id`, `blk_heading1`, `blk_heading2`, `blk_description1`, `blk_description2`, `blk_link1`, `blk_link2`, `blk_img1`, `blk_img2`) VALUES
(4, 'test', 'test', 'test', 'test', 'test', 'test', 'assets/images/blocks/ddd030786c2c84e8b95be742b4bad0df3512e215fb5031f7c81c64faimgpsh_fullsize.jpg', 'assets/images/blocks/ddd030786c2c84e8b95be742b4bad0df3512e215fb5031f7c81c64faimgpsh_fullsize_(1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(3) NOT NULL,
  `sdr_title` text NOT NULL,
  `sdr_url` text NOT NULL,
  `sdr_des` text NOT NULL,
  `sdr_status` int(1) NOT NULL DEFAULT '1',
  `sdr_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `sdr_title`, `sdr_url`, `sdr_des`, `sdr_status`, `sdr_img`) VALUES
(9, 'asdsad', 'asdsa', 'asdsad', 1, 'assets/images/slider/02b35d9c1c30685ba22cda48b434c33ea034b965c85b0084f6add77a4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_smtp`
--

CREATE TABLE `tbl_smtp` (
  `smtp_id` int(1) NOT NULL,
  `smtp_host` text NOT NULL,
  `smtp_username` text NOT NULL,
  `smtp_password` text NOT NULL,
  `smtp_type` varchar(4) NOT NULL,
  `smtp_port` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_smtp`
--

INSERT INTO `tbl_smtp` (`smtp_id`, `smtp_host`, `smtp_username`, `smtp_password`, `smtp_type`, `smtp_port`) VALUES
(1, 'sg2plcpnl0076.prod.sin2.secureserver.net', 'test@97inn.socius-global.com', 'Test@123', 'ssl', '465');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_profile`
--

CREATE TABLE `tbl_user_profile` (
  `id` int(11) NOT NULL,
  `mobile_no` varchar(12) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` varchar(12) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `pic` text NOT NULL,
  `last_login` varchar(30) NOT NULL,
  `first_login` int(1) NOT NULL,
  `lastlogin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_profile`
--

INSERT INTO `tbl_user_profile` (`id`, `mobile_no`, `username`, `password`, `name`, `dob`, `contact`, `email`, `address`, `pic`, `last_login`, `first_login`, `lastlogin`) VALUES
(1, '', 'rdsfds', '$2y$10$uw3ahUUrmpFoJjeMDVkrhuuihHQKbKKIqnKWzBRA4Qm8YOoVWuVQO', 'Jackson John', '1995-12-09', '83243924', 'sakdja@skjd.com', 'sakdjaski dfdg', 'assets/images/profilepic/4b4ecf7e44bce3ed8f1e4f7df470jack.jpg', '', 1, ''),
(2, '', 'rootsdf', 'rootdsfdsfds', 'fdsf', '2019-05-11', 'sdfsd', 'jackson20000@gmail.com', 'ascsdadsafcdsa', '', '', 1, ''),
(3, '', 'rootsdf', 'rootdsfdsfds', 'fdsf', '2019-05-11', 'sdfsd', 'jackson20000@gmail.com', 'ascsdadsafcdsa', 'http://localhost/acclink/assets/images/profilepic/650cdda1a26763307d420822ba1bbathroom_with_jacuzzi_.JPG', '', 1, ''),
(4, '', 'dfsfdsf', '$2y$10$GvgcBO57JYDLDpqgB/htZu/b.4tyDVMdfhCmB/WfKiK', 'fgfdh', '2019-05-24', 'hgfhfgh', 'df@dfs.com', 'fghgfh', 'http://localhost/acclink/assets/images/profilepic/812fb34a00c276caa8cc7de5f2eebh_headshot.jpg', '', 1, ''),
(5, '', 'rootsd', '$2y$10$pjGZLEA4Cbm1z9BecTTvrOLgJtVWSQZfQ6Pggcvu8EG', '', '', '', '', '', '', '', 1, ''),
(6, '', 'root', '$2y$10$z9.4sEPsaLUm7E9exX8CT.73F380HNvuNcelRsSj3bD', 'efeg', '2019-06-07', '1515', 'akgk@d.com', 'dwff', 'http://localhost/acclink/assets/images/profilepic/f2577436f0f113fa60039ee19e80icon_(1).png', '', 1, ''),
(7, '', 'test', '$2y$10$AFeRPz7oIHE4lfCns.jSQulJtEHZ/H4z0x15T4cvlcE', 'gfjnf', '2019-06-06', '1515', 'jackson20000@gmail.com', 'Thundil JJ nivas, Thrikkannamangal, Kottarakkara po', '', '', 1, ''),
(8, '', 'test1', '$2y$10$QHjI57ptrHZFexClETf8..0quvOmxZNmXV2gzajbwjO5gmLh7DtYC', 'asijdhj', '1950-04-26', 'juhi', 'akgk@d.com', 'asdsadsads', 'http://localhost/acclink/assets/images/profilepic/866f7dcb13d74b6a440ee595b47abathroom_with_jacuzzi_.JPG', '', 1, ''),
(9, '', 'NewUser', '$2y$10$YSRHUY.YQyLldi1cYFq4LuMUigbbt88.u5Yp1FLbzGk4Kt40iz4MC', 'Admin', '2019-06-03', '123456789', 'abcd@gmail.com', 'jdfgggj', 'http://localhost/acclink/assets/images/profilepic/930ec8b2801f23cb65b9983d2bac7d82ceb115ac74af9553c29e365d0084443f3430534a6448b16993752.jpg', '', 1, ''),
(10, '', 'jack', '$2y$10$NRbEIMDKX4rlMmdUg/4soOxCcLkQReiRrnYDVYcr2f7dFfnVseBD6', 'Jackson John', '1995-12-09', '83243924', 'sakdja@skjd.com', 'sakdjaski dfdg', 'assets/images/profilepic/546724ef9e5481d3ce6d6393d770jack.jpg', '', 1, '1561305444'),
(11, '', 'root', '$2y$10$EbIoiuAj3LE8P2cjzvXL0OBkSkHocKRXWhrB/5FonQcSwMZAN7wxq', '', '', '', '', '', '', '', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_setup`
--

CREATE TABLE `tb_setup` (
  `id` int(100) NOT NULL,
  `head_1` varchar(100) NOT NULL,
  `head_2` varchar(100) NOT NULL,
  `head_3` varchar(100) NOT NULL,
  `head_4` varchar(100) NOT NULL,
  `head_5` varchar(100) NOT NULL,
  `descr_head1` varchar(100) NOT NULL,
  `descr_head2` varchar(100) NOT NULL,
  `img_1` varchar(100) NOT NULL,
  `img_2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_about_static`
--
ALTER TABLE `tbl_about_static`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_block`
--
ALTER TABLE `tbl_block`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_smtp`
--
ALTER TABLE `tbl_smtp`
  ADD PRIMARY KEY (`smtp_id`);

--
-- Indexes for table `tbl_user_profile`
--
ALTER TABLE `tbl_user_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_about_static`
--
ALTER TABLE `tbl_about_static`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_block`
--
ALTER TABLE `tbl_block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_user_profile`
--
ALTER TABLE `tbl_user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
