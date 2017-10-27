-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 27, 2017 at 11:27 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `art_e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `level` int(1) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category_translation`
--

CREATE TABLE `category_translation` (
  `id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `lang_slug` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `url_slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `dimensions` int(11) DEFAULT NULL,
  `length_class` varchar(50) NOT NULL,
  `weight` int(11) DEFAULT NULL,
  `weight_class` int(11) NOT NULL,
  `manufacturer_id` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_translation`
--

CREATE TABLE `product_translation` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `lang_slug` varchar(2) NOT NULL,
  `name` int(11) NOT NULL,
  `description` int(11) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `id` varchar(100) NOT NULL,
  `language_slug` varchar(2) NOT NULL,
  `website_name` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `google_plus` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `ad_video` text,
  `phone` varchar(150) DEFAULT NULL,
  `mobile_phone` varchar(150) DEFAULT NULL,
  `google_map` text,
  `email` varchar(255) DEFAULT NULL,
  `admin_email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `keyword` text,
  `meta_description` varchar(255) NOT NULL,
  `visitor` int(11) DEFAULT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id`, `language_slug`, `website_name`, `favicon`, `facebook`, `youtube`, `google_plus`, `twitter`, `ad_video`, `phone`, `mobile_phone`, `google_map`, `email`, `admin_email`, `address`, `slogan`, `keyword`, `meta_description`, `visitor`, `modified_date`) VALUES
('common-info-vi', 'vi', 'EHOUSE COFFEE', '/public/upload/images/icon.png', 'https://www.facebook.com/Ehouse.hcmc', '#', '#', '#', '<p><strong>VIDEO</strong></p>\r\n\r\n<p><iframe frameborder="0" scrolling="no" src="https://www.youtube.com/embed/ejXrGoHFGJQ"></iframe></p>\r\n\r\n<p><strong>Luyện Nh&oacute;m</strong></p>\r\n\r\n<p><a href="/english/luyen-noi-nhom-4-5-ban-cung-100-gvnn"><img alt="" src="/public/upload/images/slider2.jpg" style="width:300px" /></a></p>\r\n', ' 028 3939 0811 - 0906 911 022', '0906 911 022', '10.789931, 106.693402', 'Ehousecofffe@gmail.com', 'minhsu57@gmail.com,minhsu0602@gmail.com', '7 Thạch Thị Thanh, Phường Tân Định, Quận 1, HCM', 'LETS SPEAK ENGLISH BETTER TODAY', '<p><a class="tag-link-82 tag-link-position-1" href="http://mcielts.com/tag/4-ky-nang/" style="font-size: 13.333333333333pt;" title="Luyện nói nhóm 4-5 bạn">Luyện n&oacute;i nh&oacute;m 4-5 bạn</a> <a class="tag-link-85 tag-link-position-2" href="http://mcielts.com/tag/academic/" style="font-size: 8pt;" title="1 topic">academic</a> <a class="tag-link-54 tag-link-position-3" href="http://mcielts.com/tag/academy/" style="font-size: 13.333333333333pt;" title="5 topics">academy</a> <a class="tag-link-79 tag-link-position-4" href="http://mcielts.com/tag/aeisec/" style="font-size: 8pt;" title="1 topic">AEISEC</a> <a class="tag-link-57 tag-link-position-5" href="http://mcielts.com/tag/aty/" style="font-size: 15.222222222222pt;" title="8 topics">ATY</a> <a class="tag-link-76 tag-link-position-6" href="http://mcielts.com/tag/band-9/" style="font-size: 8pt;" title="1 topic">band 9</a> <a class="tag-link-69 tag-link-position-7" href="http://mcielts.com/tag/book/" style="font-size: 19.111111111111pt;" title="19 topics">book</a> <a class="tag-link-51 tag-link-position-8" href="http://mcielts.com/tag/charity/" style="font-size: 11.333333333333pt;" title="3 topics">charity</a> <a class="tag-link-72 tag-link-position-9" href="http://mcielts.com/tag/christmas/" style="font-size: 8pt;" title="1 topic">christmas</a> <a class="tag-link-17 tag-link-position-10" href="http://mcielts.com/tag/club/" style="font-size: 14.666666666667pt;" title="7 topics">club</a> <a class="tag-link-74 tag-link-position-11" href="http://mcielts.com/tag/collins/" style="font-size: 8pt;" title="1 topic">Collins</a> <a class="tag-link-68 tag-link-position-12" href="http://mcielts.com/tag/dictionary/" style="font-size: 13.333333333333pt;" title="5 topics">dictionary</a> <a class="tag-link-47 tag-link-position-13" href="http://mcielts.com/tag/economy/" style="font-size: 8pt;" title="1 topic">economy</a> <a class="tag-link-18 tag-link-position-14" href="http://mcielts.com/tag/english/" style="font-size: 19.111111111111pt;" title="19 topics">english</a> <a class="tag-link-65 tag-link-position-15" href="http://mcielts.com/tag/esc/" style="font-size: 12.444444444444pt;" title="4 topics">esc</a> <a class="tag-link-45 tag-link-position-16" href="http://mcielts.com/tag/events/" style="font-size: 19.333333333333pt;" title="20 topics">events</a> <a class="tag-link-59 tag-link-position-17" href="http://mcielts.com/tag/grammar/" style="font-size: 15.222222222222pt;" title="8 topics">grammar</a> <a class="tag-link-50 tag-link-position-18" href="http://mcielts.com/tag/highschool/" style="font-size: 11.333333333333pt;" title="3 topics">highschool</a> <a class="tag-link-16 tag-link-position-19" href="http://mcielts.com/tag/ielts/" style="font-size: 22pt;" title="35 topics">ielts</a> <a class="tag-link-42 tag-link-position-20" href="http://mcielts.com/tag/junior/" style="font-size: 11.333333333333pt;" title="3 topics">junior</a> <a class="tag-link-48 tag-link-position-21" href="http://mcielts.com/tag/law/" style="font-size: 8pt;" title="1 topic">law</a></p>\r\n', '', NULL, '2017-10-21 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_translation`
--
ALTER TABLE `category_translation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_translation`
--
ALTER TABLE `product_translation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category_translation`
--
ALTER TABLE `category_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_translation`
--
ALTER TABLE `product_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
