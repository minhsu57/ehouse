-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 17, 2017 lúc 04:03 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ehouse`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_date` varchar(48) NOT NULL,
  `end_date` varchar(48) NOT NULL,
  `all_day` varchar(5) NOT NULL,
  `color` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `calendar`
--

INSERT INTO `calendar` (`id`, `title`, `start_date`, `end_date`, `all_day`, `color`, `user_id`) VALUES
(30, 'New Event', '2017-10-29T00:00:00+05:30', '2017-10-29T00:00:00+05:30', '0', 'green', 0),
(35, 'New Event', '2017-08-28T00:00:00+05:30', '2017-08-28T00:00:00+05:30', '0', 'undefined', 0),
(36, 'New Event', '2017-08-30T00:00:00+05:30', '2017-08-30T00:00:00+05:30', '0', 'undefined', 0),
(37, 'New Event', '2017-08-29T00:00:00+05:30', '2017-08-29T00:00:00+05:30', '0', 'undefined', 0),
(38, 'New Event', '2017-08-31T00:00:00+05:30', '2017-08-31T00:00:00+05:30', '0', 'undefined', 0),
(39, 'New Event', '2017-09-02', '2017-09-02', '0', 'undefined', 0),
(40, 'New Event', '2017-09-01', '2017-09-01', '0', 'undefined', 0),
(41, 'New Event', '2017-09-05T00:00:00+05:30', '2017-09-05T00:00:00+05:30', '0', 'undefined', 0),
(42, 'New Event', '2017-09-06T00:00:00+05:30', '2017-09-06T00:00:00+05:30', '0', 'undefined', 0),
(43, 'New Event', '2017-09-07T00:00:00+05:30', '2017-09-07T00:00:00+05:30', '0', 'undefined', 0),
(45, 'New Event', '2017-09-09T00:00:00+05:30', '2017-09-09T00:00:00+05:30', '0', 'undefined', 0),
(47, 'leave company', '2017-09-13', '2017-09-13', '0', 'red', 0),
(49, 'New Event', '2017-08-28T00:00:00+05:30', '2017-08-28T00:00:00+05:30', '0', '#3a87ad', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `content` text,
  `content2` text,
  `content3` text,
  `content4` text,
  `url` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `parent` varchar(100) DEFAULT NULL,
  `level` int(2) DEFAULT '0',
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `content`, `content2`, `content3`, `content4`, `url`, `parent`, `level`, `meta_keyword`, `meta_description`, `modified_date`) VALUES
('gioi-thieu', 'Giới thiệu', '<p><span style=\"color:#9b59b6\"><span style=\"font-size:22px\">Đ&acirc;y l&agrave; giới thiệu</span></span></p>\r\n', '', '', '', NULL, NULL, '', -1, NULL, NULL, '2017-09-04 03:01:04'),
('home', 'Home', '', NULL, NULL, NULL, NULL, NULL, NULL, -1, 'Thi thử ITELS, khóa học luyện nói tiếng anh, luyện nói nhóm 4-5 bạn, luyện nói nhóm 8 bạn, luyện thi ielts', 'Thi thử ITELS, khóa học luyện nói tiếng anh, luyện nói nhóm 4-5 bạn, luyện nói nhóm 8 bạn, luyện thi ielts', '2017-09-15 19:21:21'),
('khoa-hoc-luyen-noi-tieng-anh', 'Khóa học luyện nói tiếng anh', '', '', NULL, '', '<h3 style=\"text-align:center\"><strong><strong>Nếu bạn c&oacute; thắc mắc về chương tr&igrave;nh học </strong></strong></h3>\r\n\r\n<h3 style=\"text-align:center\"><strong><strong>xin li&ecirc;n lạc qua:</strong></strong></h3>\r\n\r\n<h6 style=\"text-align:center\">Facebook: <a href=\"https://www.facebook.com/Ehouse.hcmc/\"><span style=\"color:#993333\">https://www.facebook.com/Ehouse.hcmc</span></a> (inbox)</h6>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Tel: 028 3939 0811</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Hotline: 0906 911 022</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Địa chỉ: 7 Thạch Thị Thanh, Phường T&acirc;n Định, Quận 1, HCM</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Giờ l&agrave;m việc: Thứ 2 &ndash; Chủ nhật (9:00 &ndash; 21:00)</span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n', '', '', 0, '', '', '2017-09-15 19:24:17'),
('khoa-luyen-noi-tieng-anh-tai-cong-ty', 'Khóa luyện nói tiếng anh tại công ty', '<p><span style=\"font-size:16px\"><span style=\"color:#000000\">Chương tr&igrave;nh luyện n&oacute;i tiếng Anh theo nh&oacute;m nhỏ (4-5 bạn/nh&oacute;m) đ&atilde; được thiết kế v&agrave; triển khai 4 năm tại Ehouse v&agrave; hơn 3 năm (cho đến nay) tại tập đo&agrave;n h&agrave;ng đầu trong lĩnh vực c&ocirc;ng nghệ th&ocirc;ng tin DEK Technologies (đ&agrave;o tạo tại c&ocirc;ng ty). Gi&aacute;o vi&ecirc;n sẽ trực tiếp chỉnh sửa ph&aacute;t &acirc;m, văn phạm, c&aacute;ch sử dụng từ ph&ugrave; hợp với ngữ cảnh. Đặc biệt, đội ngũ GVNN tại Ehouse sẽ đến c&ocirc;ng ty v&agrave; trực tiếp training cho học vi&ecirc;n.</span></span></p>\r\n', '<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">- Th&ocirc;ng tin kh&oacute;a học:</span>&nbsp;</span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Sỉ số: 4-5 bạn/ nh&oacute;m</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Level: căn bản đến n&acirc;ng cao</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Gi&aacute;o vi&ecirc;n: 100% gi&aacute;o vi&ecirc;n nước ngo&agrave;i</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">H&igrave;nh thức: Training tại c&ocirc;ng ty</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Chi ph&iacute;: li&ecirc;n hệ để xem bảng gi&aacute;</span></span></span></li>\r\n</ul>\r\n', NULL, '<h6>Tất cả c&aacute;c học vi&ecirc;n trước khi đăng k&iacute; kh&oacute;a học luyện nghe, n&oacute;i tại Ehouse cần tham gia b&agrave;i kiểm tra đầu v&agrave;o tại Ehouse. Sau khi kiểm tra tr&igrave;nh độ, dựa tr&ecirc;n kết quả b&agrave;i kiểm tra, Ehouse sẽ đưa ra lời khuy&ecirc;n về cấp độ lớp ph&ugrave; hợp nhất dựa tr&ecirc;n tr&igrave;nh độ v&agrave; nguyện vọng của học vi&ecirc;n.</h6>\r\n\r\n<h6>C&aacute;c bạn vui l&ograve;ng xem Cấu tr&uacute;c b&agrave;i kiểm tra tr&igrave;nh độ, Thời gian, v&agrave; Đăng k&yacute;&nbsp;tại <a href=\"http://mcielts.com/blogs/lich-khai-giang/1000183813-lich-khai-giang\"><span style=\"color:#c0392b\">Đ&Acirc;Y</span></a>.</h6>\r\n', '<h3 style=\"text-align:center\"><strong><strong>Nếu bạn c&oacute; thắc mắc về chương tr&igrave;nh học </strong></strong></h3>\r\n\r\n<h3 style=\"text-align:center\"><strong><strong>xin li&ecirc;n lạc qua:</strong></strong></h3>\r\n\r\n<h6 style=\"text-align:center\">Facebook: <a href=\"https://www.facebook.com/Ehouse.hcmc/\"><span style=\"color:#993333\">https://www.facebook.com/Ehouse.hcmc</span></a> (inbox)</h6>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Tel: 028 3939 0811</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Hotline: 0906 911 022</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Địa chỉ: 7 Thạch Thị Thanh, Phường T&acirc;n Định, Quận 1, HCM</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Giờ l&agrave;m việc: Thứ 2 &ndash; Chủ nhật (9:00 &ndash; 21:00)</span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n', '', '', 0, 'Khóa luyện nói tiếng anh tại công ty', 'Khóa luyện nói tiếng anh tại công ty, xin liên hệ 028 3939 0811 - 0906 911 022', '2017-09-15 14:40:08'),
('khoa-luyen-thi-ielts', 'Khóa luyện thi IELTS', '', '', NULL, '', '<h3 style=\"text-align:center\"><strong><strong>Nếu bạn c&oacute; thắc mắc về chương tr&igrave;nh học </strong></strong></h3>\r\n\r\n<h3 style=\"text-align:center\"><strong><strong>xin li&ecirc;n lạc qua:</strong></strong></h3>\r\n\r\n<h6 style=\"text-align:center\">Facebook: <a href=\"https://www.facebook.com/Ehouse.hcmc/\"><span style=\"color:#993333\">https://www.facebook.com/Ehouse.hcmc</span></a> (inbox)</h6>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Tel: 028 3939 0811</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Hotline: 0906 911 022</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Địa chỉ: 7 Thạch Thị Thanh, Phường T&acirc;n Định, Quận 1, HCM</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Giờ l&agrave;m việc: Thứ 2 &ndash; Chủ nhật (9:00 &ndash; 21:00)</span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n', '', '', 0, '', '', '2017-09-15 14:39:52'),
('lien-he', 'Liên hệ', '<p><span style=\"color:#2980b9\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-family:Calibri,serif\">Nếu bạn c&oacute; thắc mắc về chương tr&igrave;nh học xin li&ecirc;n hệ qua:</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"color:#c0392b\"><strong>Ehouse Coffee</strong></span></span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,serif\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri,serif\">Facebook: <a href=\"https://www.facebook.com/Ehouse.hcmc\" target=\"_blank\"><span style=\"color:#2980b9\">https://www.facebook.com/Ehouse.hcmc</span></a></span></span></span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,serif\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri,serif\">Tel: <span style=\"color:#2980b9\"><strong>028 3939 0811</strong></span></span></span></span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,serif\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri,serif\">Hotline: <span style=\"color:#2980b9\"><strong>0906 911 022</strong></span></span></span></span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,serif\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri,serif\">Địa chỉ: <span style=\"color:#27ae60\"><strong>7 Thạch Thị Thanh, Phường T&acirc;n Định, Quận 1, HCM</strong></span></span></span></span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,serif\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri,serif\">Giờ l&agrave;m việc: <span style=\"color:#f39c12\"><strong>Thứ 2 &ndash; Chủ nhật (9:00 &ndash; 21:00)</strong></span></span></span></span></p>\r\n\r\n<p><span style=\"color:#000000\">Hoặc gửi th&ocirc;ng tin cho EHouse để nhận được những hỗ trợ tốt nhất</span></p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, -1, 'ehouse coffee, luyện nói tiếng anh', 'ehouse coffee, luyện nói tiếng anh', '2017-09-15 19:21:14'),
('login', 'login', '', NULL, NULL, NULL, NULL, NULL, NULL, -1, 'ehouse coffee, luyện nói tiếng anh', 'ehouse coffee, luyện nói tiếng anh', '2017-09-15 19:21:02'),
('luyen-noi-nhom-4-5-ban-cung-100-gvnn', 'Luyện nói nhóm 4-5 bạn cùng 100% GVNN', '<h4 style=\"text-align:justify\"><span style=\"background-color:#fcfcfc\">Chương tr&igrave;nh luyện n&oacute;i theo nh&oacute;m nhỏ chỉ 4-5 bạn c&ugrave;ng 100% gi&aacute;o vi&ecirc;n bản ngữ theo chương tr&igrave;nh luyện n&oacute;i ri&ecirc;ng. Gi&aacute;o vi&ecirc;n nước ngo&agrave;i trực tiếp chỉnh sửa ph&aacute;t &acirc;m v&agrave; luyện nghe n&oacute;i cho học vi&ecirc;n.</span></h4>\r\n', '<h6><strong>+ Lịch học</strong></h6>\r\n\r\n<ul>\r\n	<li>\r\n	<h6>S&aacute;ng Thứ 2 - Thứ 4 ----- 9:30 - 11:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Chiều Thứ 2 &ndash; Thứ 4 ----- 14:30 - 16:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Tối Thứ 2 - Thứ 4 ------ 17:30 - 19:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>S&aacute;ng Thứ 3 - Thứ 5 ------- 9:30 - 11:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Chiều thứ 3 &ndash; Thứ 5 ------- 14:30 &ndash; 16:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Tối thứ 3 &ndash; Thứ 5 ------- 17:30 &ndash; 19:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Chiều Thứ 7 ------- 14:00 - 17:00 (3 tiếng/1 buổi /1 tuần)</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Chiều Chủ Nhật ------- 14:00 - 17:00 (3 tiếng/1 buổi/1 tuần)</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Thời lượng: 2 buổi/tuần/1 tiếng 30 ph&uacute;t/buổi</h6>\r\n	</li>\r\n</ul>\r\n\r\n<h6><strong>+ Học ph&iacute; :&nbsp;</strong></h6>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">4.200.000 VND nếu đ&oacute;ng 1 lần 3 th&aacute;ng</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">3.200.000 VND nếu đ&oacute;ng 1 lần 2 th&aacute;ng</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">1.800.000 VND nếu đ&oacute;ng từng th&aacute;ng</span></span></span></li>\r\n</ul>\r\n\r\n<h6 style=\"text-align:justify\"><strong><span style=\"background-color:#fcfcfc\">+ Sỉ số: 4-5 bạn/nh&oacute;m</span></strong></h6>\r\n\r\n<h6 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">+ Gi&aacute;o vi&ecirc;n: 100% gi&aacute;o vi&ecirc; nước ngo&agrave;i</span></span></h6>\r\n\r\n<h6 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">+ Địa chỉ: 7 Thạch Thị Thanh, Phường T&acirc;n Định, Quận 1, HCM</span></span></h6>\r\n\r\n<h6>&nbsp;</h6>\r\n', NULL, '<h6>Tất cả c&aacute;c học vi&ecirc;n trước khi đăng k&iacute; kh&oacute;a học luyện nghe, n&oacute;i tại Ehouse cần tham gia b&agrave;i kiểm tra đầu v&agrave;o tại Ehouse. Sau khi kiểm tra tr&igrave;nh độ, dựa tr&ecirc;n kết quả b&agrave;i kiểm tra, Ehouse sẽ đưa ra lời khuy&ecirc;n về cấp độ lớp ph&ugrave; hợp nhất dựa tr&ecirc;n tr&igrave;nh độ v&agrave; nguyện vọng của học vi&ecirc;n.</h6>\r\n\r\n<h6>C&aacute;c bạn vui l&ograve;ng xem Cấu tr&uacute;c b&agrave;i kiểm tra tr&igrave;nh độ, Thời gian, v&agrave; Đăng k&yacute;&nbsp;tại <a href=\"http://mcielts.com/blogs/lich-khai-giang/1000183813-lich-khai-giang\">Đ&Acirc;Y</a>.</h6>\r\n', '<h3 style=\"text-align:center\"><strong><strong>Nếu bạn c&oacute; thắc mắc về chương tr&igrave;nh học </strong></strong></h3>\r\n\r\n<h3 style=\"text-align:center\"><strong><strong>xin li&ecirc;n lạc qua:</strong></strong></h3>\r\n\r\n<h6 style=\"text-align:center\">Facebook: <a href=\"https://www.facebook.com/Ehouse.hcmc/\"><span style=\"color:#993333\">https://www.facebook.com/Ehouse.hcmc</span></a> (inbox)</h6>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Tel: 028 3939 0811</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Hotline: 0906 911 022</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Địa chỉ: 7 Thạch Thị Thanh, Phường T&acirc;n Định, Quận 1, HCM</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Giờ l&agrave;m việc: Thứ 2 &ndash; Chủ nhật (9:00 &ndash; 21:00)</span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n', '', 'khoa-hoc-luyen-noi-tieng-anh', 1, '', '', '2017-09-15 14:39:35'),
('luyen-noi-nhom-8-ban-cung-100-gvnn', 'Luyện nói nhóm 8 bạn cùng 100% GVNN', '<h4 style=\"text-align:justify\"><span style=\"background-color:#fcfcfc\">Chương tr&igrave;nh luyện n&oacute;i theo nh&oacute;m nhỏ chỉ 4-5 bạn c&ugrave;ng 100% gi&aacute;o vi&ecirc;n bản ngữ theo chương tr&igrave;nh luyện n&oacute;i ri&ecirc;ng. Gi&aacute;o vi&ecirc;n nước ngo&agrave;i trực tiếp chỉnh sửa ph&aacute;t &acirc;m v&agrave; luyện nghe n&oacute;i cho học vi&ecirc;n.</span></h4>\r\n', '<h6><strong>+ Lịch học</strong></h6>\r\n\r\n<ul>\r\n	<li>\r\n	<h6>S&aacute;ng Thứ 2 - Thứ 4 ----- 9:30 - 11:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Chiều Thứ 2 &ndash; Thứ 4 ----- 14:30 - 16:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Tối Thứ 2 - Thứ 4 ------ 17:30 - 19:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>S&aacute;ng Thứ 3 - Thứ 5 ------- 9:30 - 11:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Chiều thứ 3 &ndash; Thứ 5 ------- 14:30 &ndash; 16:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Tối thứ 3 &ndash; Thứ 5 ------- 17:30 &ndash; 19:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Chiều Thứ 7 ------- 14:00 - 17:00 (3 tiếng/1 buổi /1 tuần)</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Chiều Chủ Nhật ------- 14:00 - 17:00 (3 tiếng/1 buổi/1 tuần)</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Thời lượng: 2 buổi/tuần/1 tiếng 30 ph&uacute;t/buổi</h6>\r\n	</li>\r\n</ul>\r\n\r\n<h6><strong>+ Học ph&iacute; :&nbsp;</strong></h6>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">4.200.000 VND nếu đ&oacute;ng 1 lần 3 th&aacute;ng</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">3.200.000 VND nếu đ&oacute;ng 1 lần 2 th&aacute;ng</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">1.800.000 VND nếu đ&oacute;ng từng th&aacute;ng</span></span></span></li>\r\n</ul>\r\n\r\n<h6 style=\"text-align:justify\"><strong><span style=\"background-color:#fcfcfc\">+ Sỉ số: 4-5 bạn/nh&oacute;m</span></strong></h6>\r\n\r\n<h6 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">+ Gi&aacute;o vi&ecirc;n: 100% gi&aacute;o vi&ecirc; nước ngo&agrave;i</span></span></h6>\r\n\r\n<h6 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">+ Địa chỉ: 7 Thạch Thị Thanh, Phường T&acirc;n Định, Quận 1, HCM</span></span></h6>\r\n\r\n<h6>&nbsp;</h6>\r\n', NULL, '<h6>Tất cả c&aacute;c học vi&ecirc;n trước khi đăng k&iacute; kh&oacute;a học luyện nghe, n&oacute;i tại Ehouse cần tham gia b&agrave;i kiểm tra đầu v&agrave;o tại Ehouse. Sau khi kiểm tra tr&igrave;nh độ, dựa tr&ecirc;n kết quả b&agrave;i kiểm tra, Ehouse sẽ đưa ra lời khuy&ecirc;n về cấp độ lớp ph&ugrave; hợp nhất dựa tr&ecirc;n tr&igrave;nh độ v&agrave; nguyện vọng của học vi&ecirc;n.</h6>\r\n\r\n<h6>C&aacute;c bạn vui l&ograve;ng xem Cấu tr&uacute;c b&agrave;i kiểm tra tr&igrave;nh độ, Thời gian, v&agrave; Đăng k&yacute;&nbsp;tại <a href=\"http://mcielts.com/blogs/lich-khai-giang/1000183813-lich-khai-giang\"><span style=\"color:#c0392b\">Đ&Acirc;Y</span></a>.</h6>\r\n', '<h3 style=\"text-align:center\"><strong><strong>Nếu bạn c&oacute; thắc mắc về chương tr&igrave;nh học </strong></strong></h3>\r\n\r\n<h3 style=\"text-align:center\"><strong><strong>xin li&ecirc;n lạc qua:</strong></strong></h3>\r\n\r\n<h6 style=\"text-align:center\">Facebook: <a href=\"https://www.facebook.com/Ehouse.hcmc/\"><span style=\"color:#993333\">https://www.facebook.com/Ehouse.hcmc</span></a> (inbox)</h6>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Tel: 028 3939 0811</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Hotline: 0906 911 022</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Địa chỉ: 7 Thạch Thị Thanh, Phường T&acirc;n Định, Quận 1, HCM</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Giờ l&agrave;m việc: Thứ 2 &ndash; Chủ nhật (9:00 &ndash; 21:00)</span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n', '', 'khoa-hoc-luyen-noi-tieng-anh', 1, '', '', '2017-09-15 14:39:43'),
('luyen-thi-4-ki-nang-ielts', 'Luyện thi 4 kĩ năng IELTS', '<h4 style=\"text-align:justify\"><span style=\"background-color:#fcfcfc\">Chương tr&igrave;nh luyện n&oacute;i theo nh&oacute;m nhỏ chỉ 4-5 bạn c&ugrave;ng 100% gi&aacute;o vi&ecirc;n bản ngữ theo chương tr&igrave;nh luyện n&oacute;i ri&ecirc;ng. Gi&aacute;o vi&ecirc;n nước ngo&agrave;i trực tiếp chỉnh sửa ph&aacute;t &acirc;m v&agrave; luyện nghe n&oacute;i cho học vi&ecirc;n.</span></h4>\r\n', '<h6><strong>+ Lịch học</strong></h6>\r\n\r\n<ul>\r\n	<li>\r\n	<h6>S&aacute;ng Thứ 2 - Thứ 4 ----- 9:30 - 11:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Chiều Thứ 2 &ndash; Thứ 4 ----- 14:30 - 16:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Tối Thứ 2 - Thứ 4 ------ 17:30 - 19:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>S&aacute;ng Thứ 3 - Thứ 5 ------- 9:30 - 11:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Chiều thứ 3 &ndash; Thứ 5 ------- 14:30 &ndash; 16:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Tối thứ 3 &ndash; Thứ 5 ------- 17:30 &ndash; 19:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Chiều Thứ 7 ------- 14:00 - 17:00 (3 tiếng/1 buổi /1 tuần)</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Chiều Chủ Nhật ------- 14:00 - 17:00 (3 tiếng/1 buổi/1 tuần)</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Thời lượng: 2 buổi/tuần/1 tiếng 30 ph&uacute;t/buổi</h6>\r\n	</li>\r\n</ul>\r\n\r\n<h6><strong>+ Học ph&iacute; :&nbsp;</strong></h6>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">4.200.000 VND nếu đ&oacute;ng 1 lần 3 th&aacute;ng</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">3.200.000 VND nếu đ&oacute;ng 1 lần 2 th&aacute;ng</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">1.800.000 VND nếu đ&oacute;ng từng th&aacute;ng</span></span></span></li>\r\n</ul>\r\n\r\n<h6 style=\"text-align:justify\"><strong><span style=\"background-color:#fcfcfc\">+ Sỉ số: 4-5 bạn/nh&oacute;m</span></strong></h6>\r\n\r\n<h6 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">+ Gi&aacute;o vi&ecirc;n: 100% gi&aacute;o vi&ecirc; nước ngo&agrave;i</span></span></h6>\r\n\r\n<h6 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">+ Địa chỉ: 7 Thạch Thị Thanh, Phường T&acirc;n Định, Quận 1, HCM</span></span></h6>\r\n\r\n<h6>&nbsp;</h6>\r\n', NULL, '<h6>Tất cả c&aacute;c học vi&ecirc;n trước khi đăng k&iacute; kh&oacute;a học luyện nghe, n&oacute;i tại Ehouse cần tham gia b&agrave;i kiểm tra đầu v&agrave;o tại Ehouse. Sau khi kiểm tra tr&igrave;nh độ, dựa tr&ecirc;n kết quả b&agrave;i kiểm tra, Ehouse sẽ đưa ra lời khuy&ecirc;n về cấp độ lớp ph&ugrave; hợp nhất dựa tr&ecirc;n tr&igrave;nh độ v&agrave; nguyện vọng của học vi&ecirc;n.</h6>\r\n\r\n<h6>C&aacute;c bạn vui l&ograve;ng xem Cấu tr&uacute;c b&agrave;i kiểm tra tr&igrave;nh độ, Thời gian, v&agrave; Đăng k&yacute;&nbsp;tại <a href=\"http://mcielts.com/blogs/lich-khai-giang/1000183813-lich-khai-giang\">Đ&Acirc;Y</a>.</h6>\r\n', '<h3 style=\"text-align:center\"><strong><strong>Nếu bạn c&oacute; thắc mắc về chương tr&igrave;nh học </strong></strong></h3>\r\n\r\n<h3 style=\"text-align:center\"><strong><strong>xin li&ecirc;n lạc qua:</strong></strong></h3>\r\n\r\n<h6 style=\"text-align:center\">Facebook: <a href=\"https://www.facebook.com/Ehouse.hcmc/\"><span style=\"color:#993333\">https://www.facebook.com/Ehouse.hcmc</span></a> (inbox)</h6>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Tel: 028 3939 0811</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Hotline: 0906 911 022</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Địa chỉ: 7 Thạch Thị Thanh, Phường T&acirc;n Định, Quận 1, HCM</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Giờ l&agrave;m việc: Thứ 2 &ndash; Chủ nhật (9:00 &ndash; 21:00)</span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n', '', 'khoa-luyen-thi-ielts', 1, '', '', '2017-09-15 14:38:18'),
('luyen-thi-tieng-anh-reading-listening', 'Luyện thi tiếng anh Reading &amp; Listening', '<h4 style=\"text-align:justify\"><span style=\"background-color:#fcfcfc\">Chương tr&igrave;nh luyện n&oacute;i theo nh&oacute;m nhỏ chỉ 4-5 bạn c&ugrave;ng 100% gi&aacute;o vi&ecirc;n bản ngữ theo chương tr&igrave;nh luyện n&oacute;i ri&ecirc;ng. Gi&aacute;o vi&ecirc;n nước ngo&agrave;i trực tiếp chỉnh sửa ph&aacute;t &acirc;m v&agrave; luyện nghe n&oacute;i cho học vi&ecirc;n.</span></h4>\r\n', '<h6><strong>+ Lịch học</strong></h6>\r\n\r\n<ul>\r\n	<li>\r\n	<h6>S&aacute;ng Thứ 2 - Thứ 4 ----- 9:30 - 11:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Chiều Thứ 2 &ndash; Thứ 4 ----- 14:30 - 16:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Tối Thứ 2 - Thứ 4 ------ 17:30 - 19:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>S&aacute;ng Thứ 3 - Thứ 5 ------- 9:30 - 11:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Chiều thứ 3 &ndash; Thứ 5 ------- 14:30 &ndash; 16:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Tối thứ 3 &ndash; Thứ 5 ------- 17:30 &ndash; 19:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Chiều Thứ 7 ------- 14:00 - 17:00 (3 tiếng/1 buổi /1 tuần)</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Chiều Chủ Nhật ------- 14:00 - 17:00 (3 tiếng/1 buổi/1 tuần)</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Thời lượng: 2 buổi/tuần/1 tiếng 30 ph&uacute;t/buổi</h6>\r\n	</li>\r\n</ul>\r\n\r\n<h6><strong>+ Học ph&iacute; :&nbsp;</strong></h6>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">4.200.000 VND nếu đ&oacute;ng 1 lần 3 th&aacute;ng</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">3.200.000 VND nếu đ&oacute;ng 1 lần 2 th&aacute;ng</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">1.800.000 VND nếu đ&oacute;ng từng th&aacute;ng</span></span></span></li>\r\n</ul>\r\n\r\n<h6 style=\"text-align:justify\"><strong><span style=\"background-color:#fcfcfc\">+ Sỉ số: 4-5 bạn/nh&oacute;m</span></strong></h6>\r\n\r\n<h6 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">+ Gi&aacute;o vi&ecirc;n: 100% gi&aacute;o vi&ecirc; nước ngo&agrave;i</span></span></h6>\r\n\r\n<h6 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">+ Địa chỉ: 7 Thạch Thị Thanh, Phường T&acirc;n Định, Quận 1, HCM</span></span></h6>\r\n\r\n<h6>&nbsp;</h6>\r\n', NULL, '<h6>Tất cả c&aacute;c học vi&ecirc;n trước khi đăng k&iacute; kh&oacute;a học luyện nghe, n&oacute;i tại Ehouse cần tham gia b&agrave;i kiểm tra đầu v&agrave;o tại Ehouse. Sau khi kiểm tra tr&igrave;nh độ, dựa tr&ecirc;n kết quả b&agrave;i kiểm tra, Ehouse sẽ đưa ra lời khuy&ecirc;n về cấp độ lớp ph&ugrave; hợp nhất dựa tr&ecirc;n tr&igrave;nh độ v&agrave; nguyện vọng của học vi&ecirc;n.</h6>\r\n\r\n<h6>C&aacute;c bạn vui l&ograve;ng xem Cấu tr&uacute;c b&agrave;i kiểm tra tr&igrave;nh độ, Thời gian, v&agrave; Đăng k&yacute;&nbsp;tại <a href=\"http://mcielts.com/blogs/lich-khai-giang/1000183813-lich-khai-giang\">Đ&Acirc;Y</a>.</h6>\r\n', '<h3 style=\"text-align:center\"><strong><strong>Nếu bạn c&oacute; thắc mắc về chương tr&igrave;nh học </strong></strong></h3>\r\n\r\n<h3 style=\"text-align:center\"><strong><strong>xin li&ecirc;n lạc qua:</strong></strong></h3>\r\n\r\n<h6 style=\"text-align:center\">Facebook: <a href=\"https://www.facebook.com/Ehouse.hcmc/\"><span style=\"color:#993333\">https://www.facebook.com/Ehouse.hcmc</span></a> (inbox)</h6>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Tel: 028 3939 0811</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Hotline: 0906 911 022</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Địa chỉ: 7 Thạch Thị Thanh, Phường T&acirc;n Định, Quận 1, HCM</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Giờ l&agrave;m việc: Thứ 2 &ndash; Chủ nhật (9:00 &ndash; 21:00)</span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n', '', 'khoa-luyen-thi-ielts', 1, '', '', '2017-09-15 14:38:01'),
('luyen-thi-tieng-anh-speaking-writing', 'Luyện thi tiếng anh speaking & writing', '<h4 style=\"text-align:justify\"><span style=\"background-color:#fcfcfc\">Chương tr&igrave;nh luyện n&oacute;i theo nh&oacute;m nhỏ chỉ 4-5 bạn c&ugrave;ng 100% gi&aacute;o vi&ecirc;n bản ngữ theo chương tr&igrave;nh luyện n&oacute;i ri&ecirc;ng. Gi&aacute;o vi&ecirc;n nước ngo&agrave;i trực tiếp chỉnh sửa ph&aacute;t &acirc;m v&agrave; luyện nghe n&oacute;i cho học vi&ecirc;n.</span></h4>\r\n', '<h6><strong>+ Lịch học</strong></h6>\r\n\r\n<ul>\r\n	<li>\r\n	<h6>S&aacute;ng Thứ 2 - Thứ 4 ----- 9:30 - 11:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Chiều Thứ 2 &ndash; Thứ 4 ----- 14:30 - 16:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Tối Thứ 2 - Thứ 4 ------ 17:30 - 19:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>S&aacute;ng Thứ 3 - Thứ 5 ------- 9:30 - 11:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Chiều thứ 3 &ndash; Thứ 5 ------- 14:30 &ndash; 16:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Tối thứ 3 &ndash; Thứ 5 ------- 17:30 &ndash; 19:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Chiều Thứ 7 ------- 14:00 - 17:00 (3 tiếng/1 buổi /1 tuần)</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Chiều Chủ Nhật ------- 14:00 - 17:00 (3 tiếng/1 buổi/1 tuần)</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Thời lượng: 2 buổi/tuần/1 tiếng 30 ph&uacute;t/buổi</h6>\r\n	</li>\r\n</ul>\r\n\r\n<h6><strong>+ Học ph&iacute; :&nbsp;</strong></h6>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">4.200.000 VND nếu đ&oacute;ng 1 lần 3 th&aacute;ng</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">3.200.000 VND nếu đ&oacute;ng 1 lần 2 th&aacute;ng</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">1.800.000 VND nếu đ&oacute;ng từng th&aacute;ng</span></span></span></li>\r\n</ul>\r\n\r\n<h6 style=\"text-align:justify\"><strong><span style=\"background-color:#fcfcfc\">+ Sỉ số: 4-5 bạn/nh&oacute;m</span></strong></h6>\r\n\r\n<h6 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">+ Gi&aacute;o vi&ecirc;n: 100% gi&aacute;o vi&ecirc; nước ngo&agrave;i</span></span></h6>\r\n\r\n<h6 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">+ Địa chỉ: 7 Thạch Thị Thanh, Phường T&acirc;n Định, Quận 1, HCM</span></span></h6>\r\n\r\n<h6>&nbsp;</h6>\r\n', NULL, '<h6>Tất cả c&aacute;c học vi&ecirc;n trước khi đăng k&iacute; kh&oacute;a học luyện nghe, n&oacute;i tại Ehouse cần tham gia b&agrave;i kiểm tra đầu v&agrave;o tại Ehouse. Sau khi kiểm tra tr&igrave;nh độ, dựa tr&ecirc;n kết quả b&agrave;i kiểm tra, Ehouse sẽ đưa ra lời khuy&ecirc;n về cấp độ lớp ph&ugrave; hợp nhất dựa tr&ecirc;n tr&igrave;nh độ v&agrave; nguyện vọng của học vi&ecirc;n.</h6>\r\n\r\n<h6>C&aacute;c bạn vui l&ograve;ng xem Cấu tr&uacute;c b&agrave;i kiểm tra tr&igrave;nh độ, Thời gian, v&agrave; Đăng k&yacute;&nbsp;tại <a href=\"http://mcielts.com/blogs/lich-khai-giang/1000183813-lich-khai-giang\">Đ&Acirc;Y</a>.</h6>\r\n', '<h3 style=\"text-align:center\"><strong><strong>Nếu bạn c&oacute; thắc mắc về chương tr&igrave;nh học </strong></strong></h3>\r\n\r\n<h3 style=\"text-align:center\"><strong><strong>xin li&ecirc;n lạc qua:</strong></strong></h3>\r\n\r\n<h6 style=\"text-align:center\">Facebook: <a href=\"https://www.facebook.com/Ehouse.hcmc/\"><span style=\"color:#993333\">https://www.facebook.com/Ehouse.hcmc</span></a> (inbox)</h6>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Tel: 028 3939 0811</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Hotline: 0906 911 022</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Địa chỉ: 7 Thạch Thị Thanh, Phường T&acirc;n Định, Quận 1, HCM</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Giờ l&agrave;m việc: Thứ 2 &ndash; Chủ nhật (9:00 &ndash; 21:00)</span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n', 'https://google.com', 'khoa-luyen-thi-ielts', 1, '', '', '2017-09-15 11:31:02'),
('thi-thu-ielts', 'Thi thử ITELS', '<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-family:Calibri,serif\">Cuộc thi thử được tổ chức nhằm tạo cơ hội cho c&aacute;c bạn chưa v&agrave; đang luyện thi IELTS r&egrave;n luyện t&acirc;m l&yacute; v&agrave; đ&aacute;nh gi&aacute; tr&igrave;nh độ, năng lực tiếng Anh của bản th&acirc;n trước khi bước v&agrave;o k&igrave; thi IELTS ch&iacute;nh thức tại </span></span></span></span><span style=\"color:#8e44ad\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-family:Calibri,serif\"><strong>2 đơn vị tổ chức thi IELTS lớn tại TP.HCM (IDP v&agrave; British Council)</strong></span></span></span></span><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-family:Calibri,serif\">.</span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-family:Calibri,serif\">Khi đăng k&iacute; thi thử, bạn sẽ nhận được:</span></span></span></span></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-family:Calibri,serif\">Chương tr&igrave;nh thi thử </span></span></span></span><span style=\"color:#c0392b\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-family:Calibri,serif\">giống đến 99%</span></span></span></span><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-family:Calibri,serif\"> k&igrave; thi thật.</span></span></span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-family:Calibri,serif\">Examiner l&agrave; gi&aacute;o vi&ecirc;n bản xứ c&oacute; kinh nghiệm luyện IELTS l&acirc;u năm.</span></span></span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-family:Calibri,serif\">Đ&aacute;nh gi&aacute; ch&iacute;nh x&aacute;c năng lực của bạn.</span></span></span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-family:Calibri,serif\">L&agrave;m quen với kh&ocirc;ng kh&iacute; &aacute;p lực v&agrave; căng thẳng trong ph&ograve;ng thi.</span></span></span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-family:Calibri,serif\">Được tư vấn, vạch lộ tr&igrave;nh luyện thi IELTS nhanh v&agrave; hiệu quả nhất.</span></span></span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-family:Calibri,serif\">Hỗ trợ giải đ&aacute;p thắc mắc về đ&aacute;p &aacute;n b&agrave;i thi v&agrave; kết qu&agrave; thi miễn ph&iacute;.</span></span></span></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong><span style=\"color:#16a085\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-family:Calibri,serif\">***</span></span></span></span></strong><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-family:Calibri,serif\"> Bạn c&oacute; thể lựa chọn một trong </span></span></span></span><strong><span style=\"color:#2980b9\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-family:Calibri,serif\">4 kĩ năng để thi hoặc thi cả 4 kĩ năng</span></span></span></span></strong><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-family:Calibri,serif\">. Th&iacute; sinh l&agrave;m b&agrave;i thi thử IELTS bốn kỹ năng li&ecirc;n tục trong 1 buổi.</span></span></span></span></p>\r\n', '<ul>\r\n	<li>\r\n	<p><span style=\"font-family:Times New Roman,serif\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri,serif\"><span style=\"color:#9b59b6\"><strong>Phần thi nghe</strong></span> (<strong><span style=\"color:#c0392b\">40 ph&uacute;t</span></strong>):<span style=\"color:#000000\"> th&iacute; sinh được sử dụng tai nghe kh&ocirc;ng d&acirc;y ri&ecirc;ng cho mỗi người để đảm bảo chất lượng &acirc;m thanh tốt nhất, kh&ocirc;ng bị c&aacute;c tiếng ồn xung quanh ảnh hưởng đến qu&aacute; tr&igrave;nh l&agrave;m b&agrave;i.</span></span></span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"font-family:Times New Roman,serif\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri,serif\"><strong><span style=\"color:#27ae60\">Phần thi đọc</span></strong> (<strong><span style=\"color:#c0392b\">60 ph&uacute;t</span></strong>): <span style=\"color:#000000\">th&iacute; sinh được tiếp cận với đề thi đọc theo chuẩn IELTS.</span></span></span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"font-family:Times New Roman,serif\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri,serif\"><strong><span style=\"color:#2980b9\">Phần thi viết</span></strong> (<span style=\"color:#c0392b\"><strong>60 ph&uacute;t</strong></span>): (bổ sung sau)</span></span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"font-family:Times New Roman,serif\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri,serif\"><span style=\"color:#ff6633\"><strong>Phần thi n&oacute;i</strong></span> (<strong><span style=\"color:#c0392b\">15 ph&uacute;t</span></strong>): (bổ sung sau)</span></span></span></p>\r\n	</li>\r\n</ul>\r\n', NULL, '<p><span style=\"color:#8e44ad\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri,serif\"><strong>(Nội dung bổ sung sau)</strong></span></span></span></span></p>\r\n', '<h3 style=\"text-align:center\"><strong><strong>Nếu bạn c&oacute; thắc mắc về chương tr&igrave;nh học </strong></strong></h3>\r\n\r\n<h3 style=\"text-align:center\"><strong><strong>xin li&ecirc;n lạc qua:</strong></strong></h3>\r\n\r\n<h6 style=\"text-align:center\">Facebook: <a href=\"https://www.facebook.com/Ehouse.hcmc/\"><span style=\"color:#993333\">https://www.facebook.com/Ehouse.hcmc</span></a> (inbox)</h6>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Tel: 028 3939 0811</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Hotline: 0906 911 022</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Địa chỉ: 7 Thạch Thị Thanh, Phường T&acirc;n Định, Quận 1, HCM</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Giờ l&agrave;m việc: Thứ 2 &ndash; Chủ nhật (9:00 &ndash; 21:00)</span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n', '', '', 0, 'Thi thử ITELS, khóa học luyện nói tiếng anh, luyện nói nhóm 4-5 bạn, luyện nói nhóm 8 bạn, luyện thi ielts', 'học tiếng anh, luyện thi ielts tại ehouse coffee', '2017-09-15 20:47:26'),
('tin-tuc', 'Tin tức', '', NULL, NULL, NULL, NULL, NULL, NULL, -1, 'Thi thử ITELS, khóa học luyện nói tiếng anh, luyện nói nhóm 4-5 bạn, luyện nói nhóm 8 bạn, luyện thi ielts', 'Thi thử ITELS, khóa học luyện nói tiếng anh, luyện nói nhóm 4-5 bạn, luyện nói nhóm 8 bạn, luyện thi ielts', '2017-09-17 18:58:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_translation`
--

CREATE TABLE `category_translation` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `language_slug` varchar(2) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `slug-name` varchar(255) NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrators'),
(2, 'members', 'Members');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_link` varchar(255) NOT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `page` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `language_slug` varchar(2) NOT NULL,
  `modified_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `short_content`, `content`, `keyword`, `meta_description`, `image`, `language_slug`, `modified_date`, `status`) VALUES
(7, 'Tiến độ Son Tra Ocean View tại đà nẵng', 'Tiến độ Son Tra Ocean View tại đà nẵng', '<p>Tiến độ Son Tra Ocean View tại đ&agrave; nẵng</p>\r\n\r\n<p><img alt=\"\" src=\"/public/upload/images/topic2.jpg\" style=\"height:200px; width:200px\" /></p>\r\n', 'Tiến độ Son Tra Ocean View tại đà nẵng', 'Tiến độ Son Tra Ocean View tại đà nẵng', '/public/upload/images/topic2.jpg', '', '2017-09-14 21:51:45', 1),
(8, 'Dự án căn hộ Sơn Trà Ocean View Đà Nẵng', 'Chủ đầu tư dự án căn hộ Sơn Trà Ocean View Đà Nẵng chính thức nhận đặt chỗ các căn view đẹp hướng biển cho suất nội bộ 100 căn dành cho các khách hàng đợt đầu tiên.', '<p><img alt=\"\" src=\"/public/upload/images/slider01.jpg\" /></p>\r\n', 'Dự án căn hộ Sơn Trà Ocean View Đà Nẵng', 'Dự án căn hộ Sơn Trà Ocean View Đà Nẵng', '/public/upload/images/slider01.jpg', '', '2017-09-15 09:59:54', 1),
(9, 'Giới thiệu dự án Imperial Place Bình Tân', 'Dự án Imperial Place Bình Tân được phát triển bởi chủ đầu tư NHO Hàn Quốc được khởi công xây dựng trong thời điểm hạ tầng và không gian cộng đồng hoàn chỉnh.', '<p><img alt=\"\" src=\"/public/upload/images/ielts_testing.jpg\" /></p>\r\n', '', '', '/public/upload/images/ielts_testing.jpg', '', '2017-09-14 22:07:34', 1),
(10, 'Học tiếng anh thật dễ', 'Dự án Imperial Place Bình Tân là dự án có quy mô và cao cấp bậc nhất trong các dự án đã được thực hiện trong hơn 5 năm qua. ', '<p><img alt=\"\" src=\"/public/upload/images/class.jpg\" /></p>\r\n', '', '', '/public/upload/images/class.jpg', '', '2017-09-14 22:12:53', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `page_content`
--

CREATE TABLE `page_content` (
  `id` varchar(50) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `class` varchar(30) NOT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `content` text,
  `content2` text,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `page_content`
--

INSERT INTO `page_content` (`id`, `note`, `class`, `icon`, `link`, `image_name`, `image`, `title`, `description`, `content`, `content2`, `modified_date`) VALUES
('course1', 'Trang chủ - Menu các chương trình tại Ehouse', 'course', NULL, 'english/luyen-noi-nhom-4-5-ban-cung-100-gvnn', '/public/upload/images/speaking_english_pratice.jpg', '<p><img alt=\"\" src=\"/public/upload/images/speaking_english_pratice.jpg\" /></p>\r\n', 'Luyện nói nhóm 4-5 bạn cùng 100% GVNN', '<p><span style=\"font-size:12.0pt\">Chương tr&igrave;nh luyện nghe n&oacute;i theo nh&oacute;m nhỏ từ <span style=\"color:#c0392b\"><strong>căn bản đến n&acirc;ng cao</strong></span> theo chương tr&igrave;nh luyện n&oacute;i ri&ecirc;ng, <span style=\"color:#2980b9\"><strong>4-5 bạn/nh&oacute;m hoặc 8 bạn/nh&oacute;m</strong></span>, học to&agrave;n bộ với gi&aacute;o vi&ecirc;n bản ngữ Anh, Mỹ, &Uacute;c, Canada,&hellip; To&agrave;n bộ gi&aacute;o vi&ecirc;n c&oacute; bằng cấp sư phạm v&agrave; kinh nghiệm dạy học l&acirc;u năm. Học vi&ecirc;n sẽ được <span style=\"color:#27ae60\"><strong>GVNN trực tiếp chỉnh sửa ph&aacute;t &acirc;m, luyện nghe, n&oacute;i</strong></span>. Đặc biệt, bạn c&oacute; cơ hội học thử c&ugrave;ng ch&iacute;nh GVNN dạy bạn trước khi quyết định tham gia kh&oacute;a học.</span></p>\r\n', '', '', '2017-09-14 10:19:25'),
('course2', 'Trang chủ - Menu các chương trình tại Ehouse', 'course', NULL, 'english/luyen-noi-nhom-8-ban-cung-100-gvnn', '/public/upload/images/slider2.jpg', '<p><img alt=\"\" src=\"/public/upload/images/slider2.jpg\" /></p>\r\n', 'Luyện nói nhóm 8 bạn cùng 100% GVNN', '', '', '', '2017-09-15 14:35:24'),
('course3', 'Trang chủ - Menu các chương trình tại Ehouse', 'course', NULL, '', '/public/upload/images/speaking_company.jpg', '<p><img alt=\"\" src=\"/public/upload/images/speaking_company.jpg\" /></p>\r\n', 'Luyện nghe nói theo nhóm cùng 100% GVNN tại công ty', '<p><span style=\"font-size:12.0pt\">Chương tr&igrave;nh luyện nghe n&oacute;i tiếng Anh theo nh&oacute;m nhỏ c&ugrave;ng 100% gi&aacute;o vi&ecirc;n bản ngữ <span style=\"color:#27ae60\"><strong>Anh, Mỹ, &Uacute;c, Canada</strong></span>,.. được thiết kế d&agrave;nh cho người đi l&agrave;m. Gi&aacute;o vi&ecirc;n sẽ <span style=\"color:#c0392b\">trực tiếp chỉnh sửa ph&aacute;t &acirc;m, văn phạm, c&aacute;ch sử dụng từ ph&ugrave; hợp với ngữ cảnh</span>. Đặc biệt, đội ngũ GVNN tại Ehouse sẽ đến c&ocirc;ng ty v&agrave; trực tiếp training cho học vi&ecirc;n.</span></p>\r\n', '', '', '2017-09-14 10:47:08'),
('course4', 'Trang chủ - Menu các chương trình tại Ehouse', 'course', NULL, '', '/public/upload/images/slider4.jpg', '<p><img alt=\"\" src=\"/public/upload/images/slider4.jpg\" /></p>\r\n', 'Luyện thi IELTS cam kết đầu ra', '', '<h5 style=\"text-align:justify\"><span style=\"font-size:12.0pt\"><span style=\"background-color:white\"><strong><span style=\"color:#c0392b\">Ehouse</span></strong><span style=\"color:#222222\"> cung cấp chương tr&igrave;nh luyện thi IELTS trang bị nền tảng Anh ngữ vững chắc để đạt được điểm IELTS tốt nhất với c&aacute;c mức từ 4.0 &ndash; 6.5 với thời gian học linh hoạt. Chương tr&igrave;nh luyện thi IELTS tại Ehouse sẽ </span><strong><span style=\"color:#27ae60\">trang bị đầy đủ kiến thức v&agrave; kĩ năng</span></strong><span style=\"color:#222222\"> khi l&agrave;m b&agrave;i thi IELTS cho học vi&ecirc;n v&agrave; gi&uacute;p học vi&ecirc;n đạt được số điểm như mong muốn. Mỗi kh&oacute;a học được thiết kế ri&ecirc;ng ph&ugrave; hợp với điểm số IELTS cần đạt được của học vi&ecirc;n. B&ecirc;n cạnh đ&oacute; GV đứng lớp l&agrave; </span><strong><span style=\"color:#c0392b\">100% GVNN c&oacute; kinh nghiệm dạy IELTS nhiều năm</span></strong><span style=\"color:#222222\"> tại c&aacute;c trường đại học tại Việt Nam v&agrave; c&aacute;c thầy sẽ đứng lớp 100% thời lượng học. </span></span></span></h5>\r\n', '', '2017-09-14 10:13:56'),
('course5', 'Trang chủ - Menu các chương trình tại Ehouse', 'course', NULL, '', '/public/upload/images/ielts_testing.jpg', '<p><img alt=\"\" src=\"/public/upload/images/ielts_testing.jpg\" /></p>\r\n', 'Thi thử IELTS', '<p><span style=\"font-size:12.0pt\"><span style=\"background-color:white\"><span style=\"color:#222222\">Mỗi th&aacute;ng </span><strong><span style=\"color:#c0392b\">Ehouse</span></strong><span style=\"color:#222222\"> sẽ tổ chức chương tr&igrave;nh thi thử IELTS d&agrave;nh cho c&aacute;c bạn chưa v&agrave; sắp thi IELTS kiểm tra tr&igrave;nh độ IELTS của m&igrave;nh. Thi thử IELTS với </span><strong><span style=\"color:#8e44ad\">4 kĩ năng c&ugrave;ng với format thi s&aacute;t với thực tế</span></strong><span style=\"color:#222222\"> gi&uacute;p bạn đ&aacute;nh gi&aacute; được tr&igrave;nh độ IELTS hiện tại v&agrave; lập kế hoạch để </span><strong><span style=\"color:#27ae60\">chinh phục IELTS với điểm số mong muốn</span></strong><span style=\"color:#222222\">.</span></span></span></p>\r\n', '', '', '2017-09-14 10:46:51'),
('course_consultant', 'Trang chủ', 'course_consultant', NULL, '', '/public/upload/images/3_member_english_speaking.jpg', '<p><img alt=\"\" src=\"/public/upload/images/3_member_english_speaking.jpg\" /></p>\r\n', 'Đăng ký tư vấn khóa học', '', '', '', '2017-09-14 10:59:45'),
('resgiter_test_level', 'Trang chủ', 'resgiter_test_level', NULL, 'english/luyen-noi-nhom-4-5-ban-cung-100-gvnn', '', '', 'ĐĂNG KÝ KIỂM TRA TRÌNH ĐỘ', '<p><span style=\"color:#c0392b\"><strong><span style=\"font-size:18px\">Lưu &yacute; :</span></strong></span>&nbsp;</p>\r\n\r\n<div class=\"lead\">\r\n<ul>\r\n	<li>\r\n	<p><span style=\"color:#000000\"><span style=\"font-size:medium\">Địa chỉ: </span></span><span style=\"color:#2980b9\"><span style=\"font-size:medium\">7 Thạch Thị Thanh, phường T&acirc;n Định, quận 1, HCM</span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#000000\"><span style=\"font-size:medium\">Học vi&ecirc;n cần phải đăng k&iacute; kiểm tra tr&igrave;nh độ đầu v&agrave;o để x&aacute;c định tr&igrave;nh độ trước khi chọn lớp ph&ugrave; hợp. (&Aacute;p dụng với chương tr&igrave;nh luyện nghe n&oacute;i v&agrave; luyện thi IELTS).</span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#000000\"><span style=\"font-size:medium\">Học vi&ecirc;n được quyền học thử buổi đầu với ch&iacute;nh GVNN dạy bạn trước khi tham gia kh&oacute;a học (&Aacute;p dụng đối với chương tr&igrave;nh luyện nghe n&oacute;i).</span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#000000\"><span style=\"font-size:medium\">H&igrave;nh thức thanh to&aacute;n học ph&iacute;:</span></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:medium\">+ Đ&oacute;ng trực tiếp tại địa chỉ Ehouse: </span></span><span style=\"color:#27ae60\"><span style=\"font-size:medium\">7 Thạch Thị Thanh, Phường T&acirc;n Định, Quận 1, Hồ Ch&iacute; Minh</span></span><span style=\"color:#000000\"><span style=\"font-size:medium\">.</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:medium\">+ Chuyển khoản qua ng&acirc;n h&agrave;ng:</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:medium\">Chủ t&agrave;i khoản: </span></span><span style=\"color:#27ae60\"><span style=\"font-size:medium\"><strong>V&Otilde; TRẦN BẢO CH&Acirc;U</strong></span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:medium\">Số t&agrave;i khoản: </span></span><strong><span style=\"color:#8e44ad\"><span style=\"font-size:medium\">0071003156140</span></span></strong></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:medium\">Ng&acirc;n h&agrave;ng: </span></span><strong><span style=\"color:#8e44ad\"><span style=\"font-size:medium\">Vietcombank chi nh&aacute;nh Bến Th&agrave;nh (S&agrave;i G&ograve;n)</span></span></strong></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:medium\">C&aacute;c bạn nhớ ghi nội dung chuyển khoản l&agrave; họ t&ecirc;n+SĐT. Vd: </span></span><strong><span style=\"color:#e74c3c\"><span style=\"font-size:medium\">Nguyen Van A 09000011111</span></span></strong><span style=\"color:#000000\"><span style=\"font-size:medium\">.</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:20px\"><span style=\"color:#2980b9\"><strong>ĐĂNG K&Iacute; KH&Oacute;A HỌC</strong></span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri,serif\">Tất cả c&aacute;c học vi&ecirc;n trước khi đăng k&iacute; kh&oacute;a học luyện nghe, n&oacute;i v&agrave; kh&oacute;a luyện thi IELTS tại Ehouse cần tham gia b&agrave;i kiểm tra đầu v&agrave;o tại Ehouse. Sau khi kiểm tra tr&igrave;nh độ, dựa tr&ecirc;n kết quả b&agrave;i kiểm tra, Ehouse sẽ đưa ra lời khuy&ecirc;n về cấp độ lớp ph&ugrave; hợp nhất dựa tr&ecirc;n tr&igrave;nh độ v&agrave; nguyện vọng của học vi&ecirc;n.</span></span></span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri,serif\">C&aacute;c bạn vui l&ograve;ng xem v&agrave; Đăng k&iacute; tại </span></span></span></span><a href=\"https://docs.google.com/forms/d/1171XIoGI26L9dd_hetehAzNovaeEn4cH47wFh43F2dw/edit\"><span style=\"color:#2980b9\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri,serif\"><strong>Đ&Acirc;Y</strong></span></span></span></span></a><span style=\"color:#000000\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri,serif\">.</span></span></span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri,serif\">Nếu bạn c&oacute; thắc mắc về chương tr&igrave;nh học xin li&ecirc;n hệ qua:</span></span></span></span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,serif\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri,serif\"><span style=\"color:#000000\">Facebook: </span><strong><a href=\"https://www.facebook.com/Ehouse.hcmc\" target=\"_blank\"><span style=\"color:#2980b9\">https://www.facebook.com/Ehouse.hcmc</span></a></strong></span></span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri,serif\">Tel: </span></span></span></span><strong><span style=\"color:#f39c12\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri,serif\">028 3939 0811</span></span></span></span></strong></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri,serif\">Hotline: </span></span></span></span><span style=\"color:#f39c12\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri,serif\"><strong>0906 911 022</strong></span></span></span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri,serif\">Địa chỉ: </span></span></span></span><span style=\"color:#27ae60\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri,serif\"><strong>7 Thạch Thị Thanh, Phường T&acirc;n Định, Quận 1, HCM</strong></span></span></span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri,serif\">Giờ l&agrave;m việc: </span></span></span></span><strong><span style=\"color:#e74c3c\"><span style=\"font-family:Times New Roman,serif\"><span style=\"font-size:medium\"><span style=\"font-family:Calibri,serif\">Thứ 2 &ndash; Chủ nhật (9:00 &ndash; 21:00)</span></span></span></span></strong></p>\r\n</div>\r\n', '<p>&nbsp;</p>\r\n\r\n<div class=\"lead\">&nbsp;</div>\r\n', '', '2017-09-14 14:20:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `category_id` varchar(100) NOT NULL,
  `image_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description2` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`id`, `category_id`, `image_name`, `image`, `link`, `description`, `description2`, `modified_date`, `status`) VALUES
(1, '0', 'slider01.jpg', 'slider01.jpg', NULL, 'LET\'S SPEAK ENGLISH BETTER TODAY', 'EHOUSE ENGLISH SPEAKING', NULL, 1),
(3, 'lien-he', '/public/upload/images/contact.png', '<p><img alt=\"\" src=\"/public/upload/images/contact.png\" /></p>\r\n', '123123', 'Liên Hệ', '', NULL, 1),
(4, 'luyen-noi-nhom-4-5-ban-cung-100-gvnn', '/public/upload/images/slider01.jpg', '<p><img alt=\"\" src=\"/public/upload/images/slider01.jpg\" /></p>\r\n', '', 'LET\'S SPEAK ENGLISH BETTER TODAY', 'ENGLISH SPEAKING', NULL, 1),
(5, 'luyen-noi-nhom-8-ban-cung-100-gvnn', '/public/upload/images/slider01.jpg', '<p><img alt=\"\" src=\"/public/upload/images/slider01.jpg\" /></p>\r\n', '', 'LET\'S SPEAK ENGLISH BETTER TODAY', 'ENGLISH SPEAKING', NULL, 1),
(9, 'khoa-luyen-noi-tieng-anh-tai-cong-ty', '/public/upload/images/slider01.jpg', '<p><img alt=\"\" src=\"/public/upload/images/slider01.jpg\" /></p>\r\n', '', 'LET\'S SPEAK ENGLISH BETTER TODAY', 'ENGLISH SPEAKING', NULL, 1),
(10, 'thi-thu-ielts', '/public/upload/images/slider01.jpg', '<p><img alt=\"\" src=\"/public/upload/images/slider01.jpg\" /></p>\r\n', '', 'LET\'S SPEAK ENGLISH BETTER TODAY', 'ENGLISH SPEAKING', NULL, 1),
(11, 'luyen-thi-4-ki-nang-ielts', '/public/upload/images/slider01.jpg', '<p><img alt=\"\" src=\"/public/upload/images/slider01.jpg\" /></p>\r\n', '', 'LET\'S SPEAK ENGLISH BETTER TODAY', 'ENGLISH SPEAKING', NULL, 1),
(12, 'luyen-thi-tieng-anh-speaking-writing', '/public/upload/images/slider01.jpg', '<p><img alt=\"\" src=\"/public/upload/images/slider01.jpg\" /></p>\r\n', '', 'LET\'S SPEAK ENGLISH BETTER TODAY', 'ENGLISH SPEAKING', NULL, 1),
(13, 'luyen-thi-tieng-anh-reading-listening', '/public/upload/images/slider01.jpg', '<p><img alt=\"\" src=\"/public/upload/images/slider01.jpg\" /></p>\r\n', '', 'LET\'S SPEAK ENGLISH BETTER TODAY', 'ENGLISH SPEAKING', NULL, 1),
(14, 'gioi-thieu', '/public/upload/images/slider01.jpg', '<p><img alt=\"\" src=\"/public/upload/images/slider01.jpg\" /></p>\r\n', '', 'LET\'S SPEAK ENGLISH BETTER TODAY', 'ENGLISH SPEAKING', NULL, 1),
(15, 'home', '/public/upload/images/slider01.jpg', '<p><img alt=\"\" src=\"/public/upload/images/slider01.jpg\" /></p>\r\n', '', 'LET\'S SPEAK ENGLISH BETTER TODAY', 'ENGLISH SPEAKING', NULL, 1),
(16, 'tin-tuc', '/public/upload/images/news.jpg', '<p><img alt=\"\" src=\"/public/upload/images/news.jpg\" /></p>\r\n', '', 'NEWS', '', NULL, 1),
(18, 'login', '/public/upload/images/login/ehouse_login.jpg', '<p><img alt=\"\" src=\"/public/upload/images/login/ehouse_login.jpg\" /></p>\r\n', '', 'LOGIN', '', NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$06$WlemzmFke/8WR4CYUF8AfeJ3spy721g9wbglozzS1wZ/ZEZJLwF6W', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1505645329, 1, 'Admin', 'istrator', 'ADMIN', '1'),
(2, '172.21.6.196', 'minhsu', '$2y$08$phcuMU8NslJcMko/DYfjPOWR6yoYbqowHo56WZxkaHBeZYxENcKei', NULL, 'minhsu57@gmail.com', NULL, NULL, NULL, NULL, 1490858515, 1496823990, 1, 'lê', 'minh sự', 'pouchen việt nam', '0936777170');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(3, 1, 1),
(4, 2, 1),
(5, 2, 2),
(6, 3, 1),
(7, 3, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_online`
--

CREATE TABLE `user_online` (
  `id` int(11) NOT NULL,
  `time_tmp` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `video_link_online` varchar(255) DEFAULT NULL,
  `video_link_offline` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `website`
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
  `phone` varchar(150) DEFAULT NULL,
  `mobile_phone` varchar(150) DEFAULT NULL,
  `google_map` text,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `keyword` text,
  `meta_description` varchar(255) NOT NULL,
  `visitor` int(11) DEFAULT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `website`
--

INSERT INTO `website` (`id`, `language_slug`, `website_name`, `favicon`, `facebook`, `youtube`, `google_plus`, `twitter`, `phone`, `mobile_phone`, `google_map`, `email`, `address`, `slogan`, `keyword`, `meta_description`, `visitor`, `modified_date`) VALUES
('common-info-vi', 'vi', 'EHOUSE COFFEE', '<p><img alt=\"\" src=\"/public/upload/images/icon.png\" /></p>\r\n', 'https://www.facebook.com/Ehouse.hcmc', '#', '#', '#', ' 028 3939 0811 - 0906 911 022', '0906 911 022', '10.789931, 106.693402', 'Ehousecofffe@gmail.com', '7 Thạch Thị Thanh, Phường Tân Định, Quận 1, HCM', 'LETS SPEAK ENGLISH BETTER TODAY', '<p><a class=\"tag-link-82 tag-link-position-1\" href=\"http://mcielts.com/tag/4-ky-nang/\" style=\"font-size: 13.333333333333pt;\" title=\"Luyện nói nhóm 4-5 bạn\">Luyện n&oacute;i nh&oacute;m 4-5 bạn</a> <a class=\"tag-link-85 tag-link-position-2\" href=\"http://mcielts.com/tag/academic/\" style=\"font-size: 8pt;\" title=\"1 topic\">academic</a> <a class=\"tag-link-54 tag-link-position-3\" href=\"http://mcielts.com/tag/academy/\" style=\"font-size: 13.333333333333pt;\" title=\"5 topics\">academy</a> <a class=\"tag-link-79 tag-link-position-4\" href=\"http://mcielts.com/tag/aeisec/\" style=\"font-size: 8pt;\" title=\"1 topic\">AEISEC</a> <a class=\"tag-link-57 tag-link-position-5\" href=\"http://mcielts.com/tag/aty/\" style=\"font-size: 15.222222222222pt;\" title=\"8 topics\">ATY</a> <a class=\"tag-link-76 tag-link-position-6\" href=\"http://mcielts.com/tag/band-9/\" style=\"font-size: 8pt;\" title=\"1 topic\">band 9</a> <a class=\"tag-link-69 tag-link-position-7\" href=\"http://mcielts.com/tag/book/\" style=\"font-size: 19.111111111111pt;\" title=\"19 topics\">book</a> <a class=\"tag-link-51 tag-link-position-8\" href=\"http://mcielts.com/tag/charity/\" style=\"font-size: 11.333333333333pt;\" title=\"3 topics\">charity</a> <a class=\"tag-link-72 tag-link-position-9\" href=\"http://mcielts.com/tag/christmas/\" style=\"font-size: 8pt;\" title=\"1 topic\">christmas</a> <a class=\"tag-link-17 tag-link-position-10\" href=\"http://mcielts.com/tag/club/\" style=\"font-size: 14.666666666667pt;\" title=\"7 topics\">club</a> <a class=\"tag-link-74 tag-link-position-11\" href=\"http://mcielts.com/tag/collins/\" style=\"font-size: 8pt;\" title=\"1 topic\">Collins</a> <a class=\"tag-link-68 tag-link-position-12\" href=\"http://mcielts.com/tag/dictionary/\" style=\"font-size: 13.333333333333pt;\" title=\"5 topics\">dictionary</a> <a class=\"tag-link-47 tag-link-position-13\" href=\"http://mcielts.com/tag/economy/\" style=\"font-size: 8pt;\" title=\"1 topic\">economy</a> <a class=\"tag-link-18 tag-link-position-14\" href=\"http://mcielts.com/tag/english/\" style=\"font-size: 19.111111111111pt;\" title=\"19 topics\">english</a> <a class=\"tag-link-65 tag-link-position-15\" href=\"http://mcielts.com/tag/esc/\" style=\"font-size: 12.444444444444pt;\" title=\"4 topics\">esc</a> <a class=\"tag-link-45 tag-link-position-16\" href=\"http://mcielts.com/tag/events/\" style=\"font-size: 19.333333333333pt;\" title=\"20 topics\">events</a> <a class=\"tag-link-59 tag-link-position-17\" href=\"http://mcielts.com/tag/grammar/\" style=\"font-size: 15.222222222222pt;\" title=\"8 topics\">grammar</a> <a class=\"tag-link-50 tag-link-position-18\" href=\"http://mcielts.com/tag/highschool/\" style=\"font-size: 11.333333333333pt;\" title=\"3 topics\">highschool</a> <a class=\"tag-link-16 tag-link-position-19\" href=\"http://mcielts.com/tag/ielts/\" style=\"font-size: 22pt;\" title=\"35 topics\">ielts</a> <a class=\"tag-link-42 tag-link-position-20\" href=\"http://mcielts.com/tag/junior/\" style=\"font-size: 11.333333333333pt;\" title=\"3 topics\">junior</a> <a class=\"tag-link-48 tag-link-position-21\" href=\"http://mcielts.com/tag/law/\" style=\"font-size: 8pt;\" title=\"1 topic\">law</a></p>\r\n', '', NULL, '2017-09-15 00:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category_translation`
--
ALTER TABLE `category_translation`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `page_content`
--
ALTER TABLE `page_content`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Chỉ mục cho bảng `user_online`
--
ALTER TABLE `user_online`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;