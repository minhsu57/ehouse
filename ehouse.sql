-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 03, 2017 lúc 06:03 CH
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
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `url` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `url`, `parent`, `level`, `modified_date`) VALUES
(1, 'Khóa học luyện nói tiếng anh', 'Khóa học luyện nói tiếng anh', NULL, NULL, 0, '2017-09-03 14:18:17'),
(2, 'Luyện nói nhóm 4-5 bạn cùng 100% GVNN', 'Luyện nói nhóm 4-5 bạn cùng 100% GVNN', NULL, 1, 1, '2017-09-03 14:29:24'),
(3, 'Luyện nói nhóm 8 bạn cùng 100% GVNN', 'Luyện nói nhóm 8 bạn cùng 100% GVNN', NULL, 1, 1, '2017-09-03 14:30:21'),
(4, 'Khóa luyện thi IELTS', 'Khóa luyện thi IELTS', NULL, NULL, 0, '2017-09-03 15:32:16');

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
  `image` varchar(255) NOT NULL,
  `language_slug` varchar(2) NOT NULL,
  `modified_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `page_content`
--

CREATE TABLE `page_content` (
  `id` varchar(50) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `class` varchar(30) NOT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `content` text,
  `content2` text,
  `content3` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `page_content`
--

INSERT INTO `page_content` (`id`, `parent_id`, `class`, `icon`, `image`, `title`, `description`, `content`, `content2`, `content3`) VALUES
('course01', 0, 'course', NULL, 'art1.png', 'Luyện nghe nói tiếng Anh theo nhóm cùng 100% GVNN', '', '<h5 style=\"text-align:justify\"><span style=\"font-size:12.0pt\">Chương tr&igrave;nh luyện nghe n&oacute;i theo nh&oacute;m nhỏ từ <span style=\"color:#c0392b\"><strong>căn bản đến n&acirc;ng cao</strong></span> theo chương tr&igrave;nh luyện n&oacute;i ri&ecirc;ng, <span style=\"color:#2980b9\"><strong>4-5 bạn/nh&oacute;m hoặc 8 bạn/nh&oacute;m</strong></span>, học to&agrave;n bộ với gi&aacute;o vi&ecirc;n bản ngữ Anh, Mỹ, &Uacute;c, Canada,&hellip; To&agrave;n bộ gi&aacute;o vi&ecirc;n c&oacute; bằng cấp sư phạm v&agrave; kinh nghiệm dạy học l&acirc;u năm. Học vi&ecirc;n sẽ được <span style=\"color:#27ae60\"><strong>GVNN trực tiếp chỉnh sửa ph&aacute;t &acirc;m, luyện nghe, n&oacute;i</strong></span>. Đặc biệt, bạn c&oacute; cơ hội học thử c&ugrave;ng ch&iacute;nh GVNN dạy bạn trước khi quyết định tham gia kh&oacute;a học.</span></h5>\r\n', '', ''),
('course02', 0, 'course', NULL, 'art2.png', 'Luyện nghe nói tiếng Anh theo nhóm cùng 100% GVNN tại công ty', '', '<h5 style=\"text-align:justify\"><span style=\"font-size:12.0pt\">Chương tr&igrave;nh luyện nghe n&oacute;i tiếng Anh theo nh&oacute;m nhỏ c&ugrave;ng 100% gi&aacute;o vi&ecirc;n bản ngữ <span style=\"color:#27ae60\"><strong>Anh, Mỹ, &Uacute;c, Canada</strong></span>,.. được thiết kế d&agrave;nh cho người đi l&agrave;m. Gi&aacute;o vi&ecirc;n sẽ <span style=\"color:#c0392b\">trực tiếp chỉnh sửa ph&aacute;t &acirc;m, văn phạm, c&aacute;ch sử dụng từ ph&ugrave; hợp với ngữ cảnh</span>. Đặc biệt, đội ngũ GVNN tại Ehouse sẽ đến c&ocirc;ng ty v&agrave; trực tiếp training cho học vi&ecirc;n.</span></h5>\r\n', '', ''),
('course03', 0, 'course', NULL, 'art3.png', 'Luyện thi IELTS cam kết đầu ra', '', '<h5 style=\"text-align:justify\"><span style=\"font-size:12.0pt\"><span style=\"background-color:white\"><strong><span style=\"color:#c0392b\">Ehouse</span></strong><span style=\"color:#222222\"> cung cấp chương tr&igrave;nh luyện thi IELTS trang bị nền tảng Anh ngữ vững chắc để đạt được điểm IELTS tốt nhất với c&aacute;c mức từ 4.0 &ndash; 6.5 với thời gian học linh hoạt. Chương tr&igrave;nh luyện thi IELTS tại Ehouse sẽ </span><strong><span style=\"color:#27ae60\">trang bị đầy đủ kiến thức v&agrave; kĩ năng</span></strong><span style=\"color:#222222\"> khi l&agrave;m b&agrave;i thi IELTS cho học vi&ecirc;n v&agrave; gi&uacute;p học vi&ecirc;n đạt được số điểm như mong muốn. Mỗi kh&oacute;a học được thiết kế ri&ecirc;ng ph&ugrave; hợp với điểm số IELTS cần đạt được của học vi&ecirc;n. B&ecirc;n cạnh đ&oacute; GV đứng lớp l&agrave; </span><strong><span style=\"color:#c0392b\">100% GVNN c&oacute; kinh nghiệm dạy IELTS nhiều năm</span></strong><span style=\"color:#222222\"> tại c&aacute;c trường đại học tại Việt Nam v&agrave; c&aacute;c thầy sẽ đứng lớp 100% thời lượng học. </span></span></span></h5>\r\n', '', ''),
('course04', 0, 'course', NULL, 'art4.png', 'Thi thử IELTS', '', '<h5 style=\"text-align:justify\"><span style=\"font-size:12.0pt\"><span style=\"background-color:white\"><span style=\"color:#222222\">Mỗi th&aacute;ng </span><strong><span style=\"color:#c0392b\">Ehouse</span></strong><span style=\"color:#222222\"> sẽ tổ chức chương tr&igrave;nh thi thử IELTS d&agrave;nh cho c&aacute;c bạn chưa v&agrave; sắp thi IELTS kiểm tra tr&igrave;nh độ IELTS của m&igrave;nh. Thi thử IELTS với </span><strong><span style=\"color:#8e44ad\">4 kĩ năng c&ugrave;ng với format thi s&aacute;t với thực tế</span></strong><span style=\"color:#222222\"> gi&uacute;p bạn đ&aacute;nh gi&aacute; được tr&igrave;nh độ IELTS hiện tại v&agrave; lập kế hoạch để </span><strong><span style=\"color:#27ae60\">chinh phục IELTS với điểm số mong muốn</span></strong><span style=\"color:#222222\">.</span></span></span></h5>\r\n', '', ''),
('course_consultant', 0, 'course_consultant', NULL, 'call.png', 'Đăng ký tư vấn khóa học', NULL, NULL, NULL, NULL),
('english_45_member', 0, '', NULL, NULL, 'Luyện nói nhóm 4-5 bạn cùng 100% GVNN', '<h4 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">Chương tr&igrave;nh luyện n&oacute;i theo nh&oacute;m nhỏ chỉ 4-5 bạn c&ugrave;ng 100% gi&aacute;o vi&ecirc;n bản ngữ theo chương tr&igrave;nh luyện n&oacute;i ri&ecirc;ng. Gi&aacute;o vi&ecirc;n nước ngo&agrave;i trực tiếp chỉnh sửa ph&aacute;t &acirc;m v&agrave; luyện nghe n&oacute;i cho học vi&ecirc;n.</span></span></span></h4>', '<h6><strong>+ Lịch học</strong></h6>\r\n\r\n                <ul>\r\n                    <li>\r\n                        <h6>S&aacute;ng Thứ 2 - Thứ 4 ----- 9:30 - 11:00</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Chiều Thứ 2 &ndash; Thứ 4 ----- 14:30 - 16:00</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Tối Thứ 2 - Thứ 4 ------ 17:30 - 19:00</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>S&aacute;ng Thứ 3 - Thứ 5 ------- 9:30 - 11:00</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Chiều thứ 3 &ndash; Thứ 5 ------- 14:30 &ndash; 16:00</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Tối thứ 3 &ndash; Thứ 5 ------- 17:30 &ndash; 19:00</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Chiều Thứ 7 ------- 14:00 - 17:00 (3 tiếng/1 buổi /1 tuần)</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Chiều Chủ Nhật ------- 14:00 - 17:00 (3 tiếng/1 buổi/1 tuần)</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Thời lượng: 2 buổi/tuần/1 tiếng 30 ph&uacute;t/buổi</h6>\r\n                    </li>\r\n                </ul>\r\n\r\n                <h6><strong>+ Học ph&iacute; :&nbsp;</strong></h6>\r\n\r\n                <ul>\r\n                    <li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">4.200.000 VND nếu đ&oacute;ng 1 lần 3 th&aacute;ng</span></span></span></span></li>\r\n                    <li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">3.200.000 VND nếu đ&oacute;ng 1 lần 2 th&aacute;ng</span></span></span></span></li>\r\n                    <li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">1.800.000 VND nếu đ&oacute;ng từng th&aacute;ng</span></span></span></span></li>\r\n                </ul>\r\n\r\n\r\n                <h6 style=\"text-align:justify\"><strong><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">+ Sỉ số: 4-5 bạn/nh&oacute;m</span></span></strong></h6>\r\n\r\n                <h6 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">+ Gi&aacute;o vi&ecirc;n: 100% gi&aacute;o vi&ecirc; nước ngo&agrave;i</span></span></span></h6>\r\n\r\n                <h6 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">+ Địa chỉ: 7 Thạch Thị Thanh, Phường T&acirc;n Định, Quận 1, HCM</span></span></span></h6>\r\n\r\n                <h6>&nbsp;</h6>', '<h6>Tất cả các học viên trước khi đăng kí khóa học luyện nghe, nói tại Ehouse cần tham gia bài kiểm tra đầu vào tại Ehouse. Sau khi kiểm tra trình độ, dựa trên kết quả bài kiểm tra, Ehouse sẽ đưa ra lời khuyên về cấp độ lớp phù hợp nhất dựa trên trình độ và nguyện vọng của học viên.\r\n                    </h6>\r\n                    <h6>Các bạn vui lòng xem Cấu trúc bài kiểm tra trình độ, Thời gian, và Đăng ký&nbsp;tại <a href=\"http://mcielts.com/blogs/lich-khai-giang/1000183813-lich-khai-giang\">ĐÂY</a>.</h6>', '<h6>Tất cả các học viên trước khi đăng kí khóa học luyện nghe, nói tại Ehouse cần tham gia bài kiểm tra đầu vào tại Ehouse. Sau khi kiểm tra trình độ, dựa trên kết quả bài kiểm tra, Ehouse sẽ đưa ra lời khuyên về cấp độ lớp phù hợp nhất dựa trên trình độ và nguyện vọng của học viên.\r\n                    </h6>\r\n                    <h6>Các bạn vui lòng xem Cấu trúc bài kiểm tra trình độ, Thời gian, và Đăng ký&nbsp;tại <a href=\"http://mcielts.com/blogs/lich-khai-giang/1000183813-lich-khai-giang\">ĐÂY</a>.</h6>'),
('english_8_member', 0, '', NULL, NULL, 'Luyện nói nhóm 8 bạn cùng 100% GVNN', '<h4 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Chương tr&igrave;nh luyện n&oacute;i theo nh&oacute;m nhỏ chỉ 4-5 bạn c&ugrave;ng 100% gi&aacute;o vi&ecirc;n bản ngữ theo chương tr&igrave;nh luyện n&oacute;i ri&ecirc;ng. Gi&aacute;o vi&ecirc;n nước ngo&agrave;i trực tiếp chỉnh sửa ph&aacute;t &acirc;m v&agrave; luyện nghe n&oacute;i cho học vi&ecirc;n.</span></span></h4>\r\n', '<h6><strong>+ Lịch học</strong></h6>\r\n\r\n<ul>\r\n	<li>\r\n	<h6>S&aacute;ng Thứ 2 - Thứ 4 ----- 9:30 - 11:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Chiều Thứ 2 &ndash; Thứ 4 ----- 14:30 - 16:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Tối Thứ 2 - Thứ 4 ------ 17:30 - 19:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>S&aacute;ng Thứ 3 - Thứ 5 ------- 9:30 - 11:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Chiều thứ 3 &ndash; Thứ 5 ------- 14:30 &ndash; 16:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Tối thứ 3 &ndash; Thứ 5 ------- 17:30 &ndash; 19:00</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Chiều Thứ 7 ------- 14:00 - 17:00 (3 tiếng/1 buổi /1 tuần)</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Chiều Chủ Nhật ------- 14:00 - 17:00 (3 tiếng/1 buổi/1 tuần)</h6>\r\n	</li>\r\n	<li>\r\n	<h6>Thời lượng: 2 buổi/tuần/1 tiếng 30 ph&uacute;t/buổi</h6>\r\n	</li>\r\n</ul>\r\n\r\n<h6><strong>+ Học ph&iacute; :&nbsp;</strong></h6>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">4.200.000 VND nếu đ&oacute;ng 1 lần 3 th&aacute;ng</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">3.200.000 VND nếu đ&oacute;ng 1 lần 2 th&aacute;ng</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">1.800.000 VND nếu đ&oacute;ng từng th&aacute;ng</span></span></span></li>\r\n</ul>\r\n\r\n<h6 style=\"text-align:justify\"><strong><span style=\"background-color:#fcfcfc\">+ Sỉ số: 4-5 bạn/nh&oacute;m</span></strong></h6>\r\n\r\n<h6 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">+ Gi&aacute;o vi&ecirc;n: 100% gi&aacute;o vi&ecirc; nước ngo&agrave;i</span></span></h6>\r\n\r\n<h6 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">+ Địa chỉ: 7 Thạch Thị Thanh, Phường T&acirc;n Định, Quận 1, HCM</span></span></h6>\r\n\r\n<h6>&nbsp;</h6>\r\n', '<h6>Tất cả c&aacute;c học vi&ecirc;n trước khi đăng k&iacute; kh&oacute;a học luyện nghe, n&oacute;i tại Ehouse cần tham gia b&agrave;i kiểm tra đầu v&agrave;o tại Ehouse. Sau khi kiểm tra tr&igrave;nh độ, dựa tr&ecirc;n kết quả b&agrave;i kiểm tra, Ehouse sẽ đưa ra lời khuy&ecirc;n về cấp độ lớp ph&ugrave; hợp nhất dựa tr&ecirc;n tr&igrave;nh độ v&agrave; nguyện vọng của học vi&ecirc;n.</h6>\r\n\r\n<h6>C&aacute;c bạn vui l&ograve;ng xem Cấu tr&uacute;c b&agrave;i kiểm tra tr&igrave;nh độ, Thời gian, v&agrave; Đăng k&yacute;&nbsp;tại <a href=\"http://mcielts.com/blogs/lich-khai-giang/1000183813-lich-khai-giang\"><span style=\"color:#c0392b\">Đ&Acirc;Y</span></a>.</h6>\r\n', '<h6>Tất cả c&aacute;c học vi&ecirc;n trước khi đăng k&iacute; kh&oacute;a học luyện nghe, n&oacute;i tại Ehouse cần tham gia b&agrave;i kiểm tra đầu v&agrave;o tại Ehouse. Sau khi kiểm tra tr&igrave;nh độ, dựa tr&ecirc;n kết quả b&agrave;i kiểm tra, Ehouse sẽ đưa ra lời khuy&ecirc;n về cấp độ lớp ph&ugrave; hợp nhất dựa tr&ecirc;n tr&igrave;nh độ v&agrave; nguyện vọng của học vi&ecirc;n.</h6>\r\n\r\n<h6>C&aacute;c bạn vui l&ograve;ng xem Cấu tr&uacute;c b&agrave;i kiểm tra tr&igrave;nh độ, Thời gian, v&agrave; Đăng k&yacute;&nbsp;tại <a href=\"http://mcielts.com/blogs/lich-khai-giang/1000183813-lich-khai-giang\"><span style=\"color:#c0392b\">Đ&Acirc;Y</span></a>.</h6>\r\n'),
('ielts_4_skills', 0, '', NULL, NULL, 'Luyện thi tiếng anh 4 kĩ năng IELTS', '<h4 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">Chương tr&igrave;nh luyện n&oacute;i theo nh&oacute;m nhỏ chỉ 4-5 bạn c&ugrave;ng 100% gi&aacute;o vi&ecirc;n bản ngữ theo chương tr&igrave;nh luyện n&oacute;i ri&ecirc;ng. Gi&aacute;o vi&ecirc;n nước ngo&agrave;i trực tiếp chỉnh sửa ph&aacute;t &acirc;m v&agrave; luyện nghe n&oacute;i cho học vi&ecirc;n.</span></span></span></h4>', '<h6><strong>+ Lịch học</strong></h6>\r\n\r\n                <ul>\r\n                    <li>\r\n                        <h6>S&aacute;ng Thứ 2 - Thứ 4 ----- 9:30 - 11:00</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Chiều Thứ 2 &ndash; Thứ 4 ----- 14:30 - 16:00</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Tối Thứ 2 - Thứ 4 ------ 17:30 - 19:00</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>S&aacute;ng Thứ 3 - Thứ 5 ------- 9:30 - 11:00</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Chiều thứ 3 &ndash; Thứ 5 ------- 14:30 &ndash; 16:00</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Tối thứ 3 &ndash; Thứ 5 ------- 17:30 &ndash; 19:00</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Chiều Thứ 7 ------- 14:00 - 17:00 (3 tiếng/1 buổi /1 tuần)</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Chiều Chủ Nhật ------- 14:00 - 17:00 (3 tiếng/1 buổi/1 tuần)</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Thời lượng: 2 buổi/tuần/1 tiếng 30 ph&uacute;t/buổi</h6>\r\n                    </li>\r\n                </ul>\r\n\r\n                <h6><strong>+ Học ph&iacute; :&nbsp;</strong></h6>\r\n\r\n                <ul>\r\n                    <li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">4.200.000 VND nếu đ&oacute;ng 1 lần 3 th&aacute;ng</span></span></span></span></li>\r\n                    <li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">3.200.000 VND nếu đ&oacute;ng 1 lần 2 th&aacute;ng</span></span></span></span></li>\r\n                    <li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">1.800.000 VND nếu đ&oacute;ng từng th&aacute;ng</span></span></span></span></li>\r\n                </ul>\r\n\r\n\r\n                <h6 style=\"text-align:justify\"><strong><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">+ Sỉ số: 4-5 bạn/nh&oacute;m</span></span></strong></h6>\r\n\r\n                <h6 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">+ Gi&aacute;o vi&ecirc;n: 100% gi&aacute;o vi&ecirc; nước ngo&agrave;i</span></span></span></h6>\r\n\r\n                <h6 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">+ Địa chỉ: 7 Thạch Thị Thanh, Phường T&acirc;n Định, Quận 1, HCM</span></span></span></h6>\r\n\r\n                <h6>&nbsp;</h6>', '<h6>Tất cả các học viên trước khi đăng kí khóa học luyện nghe, nói tại Ehouse cần tham gia bài kiểm tra đầu vào tại Ehouse. Sau khi kiểm tra trình độ, dựa trên kết quả bài kiểm tra, Ehouse sẽ đưa ra lời khuyên về cấp độ lớp phù hợp nhất dựa trên trình độ và nguyện vọng của học viên.\r\n                    </h6>\r\n                    <h6>Các bạn vui lòng xem Cấu trúc bài kiểm tra trình độ, Thời gian, và Đăng ký&nbsp;tại <a href=\"http://mcielts.com/blogs/lich-khai-giang/1000183813-lich-khai-giang\">ĐÂY</a>.</h6>', '<h6>Tất cả các học viên trước khi đăng kí khóa học luyện nghe, nói tại Ehouse cần tham gia bài kiểm tra đầu vào tại Ehouse. Sau khi kiểm tra trình độ, dựa trên kết quả bài kiểm tra, Ehouse sẽ đưa ra lời khuyên về cấp độ lớp phù hợp nhất dựa trên trình độ và nguyện vọng của học viên.\r\n                    </h6>\r\n                    <h6>Các bạn vui lòng xem Cấu trúc bài kiểm tra trình độ, Thời gian, và Đăng ký&nbsp;tại <a href=\"http://mcielts.com/blogs/lich-khai-giang/1000183813-lich-khai-giang\">ĐÂY</a>.</h6>'),
('ielts_reading_listening', 0, '', NULL, NULL, 'Luyện thi tiếng anh Reading & Listening', '<h4 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">Chương tr&igrave;nh luyện n&oacute;i theo nh&oacute;m nhỏ chỉ 4-5 bạn c&ugrave;ng 100% gi&aacute;o vi&ecirc;n bản ngữ theo chương tr&igrave;nh luyện n&oacute;i ri&ecirc;ng. Gi&aacute;o vi&ecirc;n nước ngo&agrave;i trực tiếp chỉnh sửa ph&aacute;t &acirc;m v&agrave; luyện nghe n&oacute;i cho học vi&ecirc;n.</span></span></span></h4>', '<h6><strong>+ Lịch học</strong></h6>\r\n\r\n                <ul>\r\n                    <li>\r\n                        <h6>S&aacute;ng Thứ 2 - Thứ 4 ----- 9:30 - 11:00</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Chiều Thứ 2 &ndash; Thứ 4 ----- 14:30 - 16:00</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Tối Thứ 2 - Thứ 4 ------ 17:30 - 19:00</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>S&aacute;ng Thứ 3 - Thứ 5 ------- 9:30 - 11:00</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Chiều thứ 3 &ndash; Thứ 5 ------- 14:30 &ndash; 16:00</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Tối thứ 3 &ndash; Thứ 5 ------- 17:30 &ndash; 19:00</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Chiều Thứ 7 ------- 14:00 - 17:00 (3 tiếng/1 buổi /1 tuần)</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Chiều Chủ Nhật ------- 14:00 - 17:00 (3 tiếng/1 buổi/1 tuần)</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Thời lượng: 2 buổi/tuần/1 tiếng 30 ph&uacute;t/buổi</h6>\r\n                    </li>\r\n                </ul>\r\n\r\n                <h6><strong>+ Học ph&iacute; :&nbsp;</strong></h6>\r\n\r\n                <ul>\r\n                    <li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">4.200.000 VND nếu đ&oacute;ng 1 lần 3 th&aacute;ng</span></span></span></span></li>\r\n                    <li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">3.200.000 VND nếu đ&oacute;ng 1 lần 2 th&aacute;ng</span></span></span></span></li>\r\n                    <li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">1.800.000 VND nếu đ&oacute;ng từng th&aacute;ng</span></span></span></span></li>\r\n                </ul>\r\n\r\n\r\n                <h6 style=\"text-align:justify\"><strong><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">+ Sỉ số: 4-5 bạn/nh&oacute;m</span></span></strong></h6>\r\n\r\n                <h6 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">+ Gi&aacute;o vi&ecirc;n: 100% gi&aacute;o vi&ecirc; nước ngo&agrave;i</span></span></span></h6>\r\n\r\n                <h6 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">+ Địa chỉ: 7 Thạch Thị Thanh, Phường T&acirc;n Định, Quận 1, HCM</span></span></span></h6>\r\n\r\n                <h6>&nbsp;</h6>', '<h6>Tất cả các học viên trước khi đăng kí khóa học luyện nghe, nói tại Ehouse cần tham gia bài kiểm tra đầu vào tại Ehouse. Sau khi kiểm tra trình độ, dựa trên kết quả bài kiểm tra, Ehouse sẽ đưa ra lời khuyên về cấp độ lớp phù hợp nhất dựa trên trình độ và nguyện vọng của học viên.\r\n                    </h6>\r\n                    <h6>Các bạn vui lòng xem Cấu trúc bài kiểm tra trình độ, Thời gian, và Đăng ký&nbsp;tại <a href=\"http://mcielts.com/blogs/lich-khai-giang/1000183813-lich-khai-giang\">ĐÂY</a>.</h6>', '<h6>Tất cả các học viên trước khi đăng kí khóa học luyện nghe, nói tại Ehouse cần tham gia bài kiểm tra đầu vào tại Ehouse. Sau khi kiểm tra trình độ, dựa trên kết quả bài kiểm tra, Ehouse sẽ đưa ra lời khuyên về cấp độ lớp phù hợp nhất dựa trên trình độ và nguyện vọng của học viên.\r\n                    </h6>\r\n                    <h6>Các bạn vui lòng xem Cấu trúc bài kiểm tra trình độ, Thời gian, và Đăng ký&nbsp;tại <a href=\"http://mcielts.com/blogs/lich-khai-giang/1000183813-lich-khai-giang\">ĐÂY</a>.</h6>'),
('ielts_speaking_writting', 0, '', NULL, NULL, 'Luyện thi tiếng anh SPEAKING & WRITING', '<h4 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">Chương tr&igrave;nh luyện n&oacute;i theo nh&oacute;m nhỏ chỉ 4-5 bạn c&ugrave;ng 100% gi&aacute;o vi&ecirc;n bản ngữ theo chương tr&igrave;nh luyện n&oacute;i ri&ecirc;ng. Gi&aacute;o vi&ecirc;n nước ngo&agrave;i trực tiếp chỉnh sửa ph&aacute;t &acirc;m v&agrave; luyện nghe n&oacute;i cho học vi&ecirc;n.</span></span></span></h4>', '<h6><strong>+ Lịch học</strong></h6>\r\n\r\n                <ul>\r\n                    <li>\r\n                        <h6>S&aacute;ng Thứ 2 - Thứ 4 ----- 9:30 - 11:00</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Chiều Thứ 2 &ndash; Thứ 4 ----- 14:30 - 16:00</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Tối Thứ 2 - Thứ 4 ------ 17:30 - 19:00</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>S&aacute;ng Thứ 3 - Thứ 5 ------- 9:30 - 11:00</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Chiều thứ 3 &ndash; Thứ 5 ------- 14:30 &ndash; 16:00</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Tối thứ 3 &ndash; Thứ 5 ------- 17:30 &ndash; 19:00</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Chiều Thứ 7 ------- 14:00 - 17:00 (3 tiếng/1 buổi /1 tuần)</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Chiều Chủ Nhật ------- 14:00 - 17:00 (3 tiếng/1 buổi/1 tuần)</h6>\r\n                    </li>\r\n                    <li>\r\n                        <h6>Thời lượng: 2 buổi/tuần/1 tiếng 30 ph&uacute;t/buổi</h6>\r\n                    </li>\r\n                </ul>\r\n\r\n                <h6><strong>+ Học ph&iacute; :&nbsp;</strong></h6>\r\n\r\n                <ul>\r\n                    <li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">4.200.000 VND nếu đ&oacute;ng 1 lần 3 th&aacute;ng</span></span></span></span></li>\r\n                    <li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">3.200.000 VND nếu đ&oacute;ng 1 lần 2 th&aacute;ng</span></span></span></span></li>\r\n                    <li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">1.800.000 VND nếu đ&oacute;ng từng th&aacute;ng</span></span></span></span></li>\r\n                </ul>\r\n\r\n\r\n                <h6 style=\"text-align:justify\"><strong><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">+ Sỉ số: 4-5 bạn/nh&oacute;m</span></span></strong></h6>\r\n\r\n                <h6 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">+ Gi&aacute;o vi&ecirc;n: 100% gi&aacute;o vi&ecirc; nước ngo&agrave;i</span></span></span></h6>\r\n\r\n                <h6 style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">+ Địa chỉ: 7 Thạch Thị Thanh, Phường T&acirc;n Định, Quận 1, HCM</span></span></span></h6>\r\n\r\n                <h6>&nbsp;</h6>', '<h6>Tất cả các học viên trước khi đăng kí khóa học luyện nghe, nói tại Ehouse cần tham gia bài kiểm tra đầu vào tại Ehouse. Sau khi kiểm tra trình độ, dựa trên kết quả bài kiểm tra, Ehouse sẽ đưa ra lời khuyên về cấp độ lớp phù hợp nhất dựa trên trình độ và nguyện vọng của học viên.\r\n                    </h6>\r\n                    <h6>Các bạn vui lòng xem Cấu trúc bài kiểm tra trình độ, Thời gian, và Đăng ký&nbsp;tại <a href=\"http://mcielts.com/blogs/lich-khai-giang/1000183813-lich-khai-giang\">ĐÂY</a>.</h6>', '<h6>Tất cả các học viên trước khi đăng kí khóa học luyện nghe, nói tại Ehouse cần tham gia bài kiểm tra đầu vào tại Ehouse. Sau khi kiểm tra trình độ, dựa trên kết quả bài kiểm tra, Ehouse sẽ đưa ra lời khuyên về cấp độ lớp phù hợp nhất dựa trên trình độ và nguyện vọng của học viên.\r\n                    </h6>\r\n                    <h6>Các bạn vui lòng xem Cấu trúc bài kiểm tra trình độ, Thời gian, và Đăng ký&nbsp;tại <a href=\"http://mcielts.com/blogs/lich-khai-giang/1000183813-lich-khai-giang\">ĐÂY</a>.</h6>'),
('resgiter_test_level', 0, 'resgiter_test_level', NULL, NULL, 'Đăng ký kiểm tra trình độ', NULL, '<div class=\"lead\">\n<p><span style=\"font-size:18px\"><span style=\"color:#c0392b\"><strong>Địa chỉ :</strong></span></span></p>\n\n<p><span style=\"font-size:14px\"><span style=\"color:#16a085\">&ndash; Cơ sở 1: 112 Nguyễn Đ&igrave;nh Chiểu, P. Đakao, Q.1, TP.HCM (ghi danh, lớp học).</span></span></p>\n\n<p><span style=\"font-size:14px\"><span style=\"color:#16a085\">&ndash; Cơ sở 2: 140/54 L&ecirc; Đức Thọ, P. 6, Q. G&ograve; Vấp, TP.HCM (chỉ l&agrave; lớp học, học vi&ecirc;n c&oacute; nhu cầu ghi danh vui l&ograve;ng li&ecirc;n hệ cơ sở 1).</span></span></p>\n\n<p><span style=\"font-size:14px\"><span style=\"color:#16a085\">&ndash; Học vi&ecirc;n c&oacute; thể đăng k&yacute; kiểm tra đầu v&agrave;o để x&aacute;c định tr&igrave;nh độ trước khi chọn lớp ph&ugrave; hợp.</span></span></p>\n\n<p><span style=\"font-size:14px\"><span style=\"color:#16a085\">&ndash; Chi tiết ưu đ&atilde;i học ph&iacute; (với h&igrave;nh thức n&agrave;y th&igrave; sẽ KH&Ocirc;NG c&oacute; học thử nh&eacute; c&aacute;c bạn.)</span></span></p>\n\n<p><span style=\"font-size:14px\"><span style=\"color:#16a085\">&nbsp; &nbsp;+ Giảm 10% nếu bạn điền form đăng k&yacute; (b&ecirc;n tr&ecirc;n) v&agrave; ho&agrave;n tất học ph&iacute; (chuyển khoản) theo deadline ở tr&ecirc;n.<br />\n&nbsp; &nbsp;+ Giảm th&ecirc;m 5% nếu bạn đăng k&yacute; v&agrave; ho&agrave;n tất học ph&iacute; với 1 người bạn (sẽ l&agrave; 10% nếu đăng k&yacute; v&agrave; ho&agrave;n tất học ph&iacute; với 2 người bạn). Lưu &yacute; l&agrave; sự giảm n&agrave;y &aacute;p dụng cho tất cả th&agrave;nh vi&ecirc;n trong nh&oacute;m.<br />\n&nbsp; &nbsp;+ Giảm th&ecirc;m 10% nếu l&agrave; học vi&ecirc;n cũ.</span></span></p>\n\n<p><span style=\"font-size:14px\"><span style=\"color:#c0392b\"><strong>&ndash; H&igrave;nh thức thanh to&aacute;n học ph&iacute;:</strong></span></span></p>\n\n<p><span style=\"font-size:14px\"><span style=\"color:#16a085\">1/ Đ&oacute;ng trực tiếp tại cơ sở 1&nbsp;(112 Nguyễn Đ&igrave;nh Chiểu, P.Đakao, Quận 1, TP.HCM)<br />\n2/ Chuyển khoản ng&acirc;n h&agrave;ng:</span></span></p>\n\n<p><span style=\"font-size:14px\"><span style=\"color:#16a085\">&nbsp; + Số t&agrave;i khoản 0421 000 461 474</span></span></p>\n\n<p><span style=\"font-size:14px\"><span style=\"color:#16a085\">&nbsp; + Ng&acirc;n h&agrave;ng Vietcombank- Chi nh&aacute;nh&nbsp;Ph&uacute; Thọ &ndash; PGD Nguyễn Sơn</span></span></p>\n\n<p><span style=\"font-size:14px\"><span style=\"color:#16a085\">&nbsp; + Chủ t&agrave;i khoản: Bui Vu Viet Bao</span></span></p>\n\n<p><span style=\"font-size:14px\"><span style=\"color:#16a085\">C&aacute;c bạn nhớ ghi nội dung chuyển khoản l&agrave; họ t&ecirc;n+SĐT+t&ecirc;n lớp. Vd: Nguyen Van A 09000011111 Advanced 08/03.</span></span></p>\n\n<p><span style=\"font-size:14px\"><span style=\"color:#16a085\">Lưu &yacute;:&nbsp; &nbsp;&ndash; Tất cả học vi&ecirc;n c&aacute;c lớp IELTS thiếu ni&ecirc;n cần đăng k&yacute; kiểm tra đầu v&agrave;o để x&aacute;c định tr&igrave;nh lớp học ph&ugrave; hợp.</span></span></p>\n\n<p><span style=\"font-size:14px\"><span style=\"color:#16a085\">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&ndash; &nbsp;Kh&ocirc;ng c&oacute; buổi học thử đối c&aacute;c với lớp IELTS thiếu ni&ecirc;n</span></span></p>\n\n<p><br />\n&nbsp;</p>\n\n<p><span style=\"font-size:14px\"><span style=\"color:#c0392b\">ĐĂNG K&Yacute; KH&Oacute;A HỌC</span><br />\n<br />\n<span style=\"color:#16a085\">Tất cả c&aacute;c học vi&ecirc;n trước khi đăng k&yacute; c&aacute;c kh&oacute;a học luyện thi IELTS tại Mc IELTS cần tham gia một b&agrave;i kiểm tra đầu v&agrave;o với giảng vi&ecirc;n IELTS tại trung t&acirc;m.</span></span></p>\n\n<p><span style=\"font-size:14px\"><span style=\"color:#16a085\">Sau b&agrave;i thi kiểm tra tr&igrave;nh độ, dựa tr&ecirc;n kết quả b&agrave;i kiểm tra, gi&aacute;o vi&ecirc;n sẽ đưa ra lời khuy&ecirc;n về cấp độ lớp ph&ugrave; hợp nhất dựa tr&ecirc;n tr&igrave;nh độ v&agrave; nguyện vọng của học vi&ecirc;n.</span></span></p>\n\n<p><span style=\"font-size:14px\"><span style=\"color:#16a085\">C&aacute;c bạn vui l&ograve;ng xem Cấu tr&uacute;c b&agrave;i kiểm tra tr&igrave;nh độ, Thời gian, v&agrave; Đăng k&yacute;</span><a href=\"http://www.ktdcgroup.com/vi/khoa-hoc\" target=\"_blank\"><span style=\"color:#16a085\">&nbsp;</span></a><span style=\"color:#16a085\">tại Đ&Acirc;Y.</span></span></p>\n\n<p><span style=\"font-size:14px\"><span style=\"color:#16a085\">Nếu bạn c&oacute; thắc mắc về chương tr&igrave;nh học xin li&ecirc;n lạc qua:</span></span></p>\n\n<p>&nbsp;</p>\n\n<p><span style=\"font-size:14px\"><span style=\"color:#16a085\">Facebook:&nbsp;</span><a href=\"https://www.facebook.com/mc.ielts/\"><span style=\"color:#16a085\">https://www.facebook.com/mc.ielts/</span></a><span style=\"color:#16a085\">&nbsp;(inbox)</span></span></p>\n\n<p><span style=\"font-size:14px\"><span style=\"color:#16a085\">IELTS office:&nbsp;08.6676.9900.</span></span></p>\n\n<p><span style=\"font-size:14px\"><span style=\"color:#16a085\">Cơ sở 1: 112 Nguyễn Đ&igrave;nh Chiểu, P. Đakao, Q.1, TP.HCM (ghi danh, lớp học).Cơ sở 2: 140/54 L&ecirc; Đức Thọ, P. 6, Q. G&ograve; Vấp, TP.HCM (chỉ l&agrave; lớp học, học vi&ecirc;n c&oacute; nhu cầu ghi danh vui l&ograve;ng li&ecirc;n hệ cơ sở 1).<br />\nHotline:&nbsp;0906.897.772 &ndash; 0167.6747.715 ( từ 8h-20h, thứ 2 đến thứ 7).<br />\nGiờ l&agrave;m việc:&nbsp;Từ thứ 2 đến thứ 7 : 8h-20h.</span></span></p>\n</div>\n', NULL, NULL),
('speaking_company', 0, '', NULL, NULL, 'Khóa luyện nói tiếng anh tại công ty', '<p><span style=\"font-size:16px\"><span style=\"color:#000000\">Chương tr&igrave;nh luyện n&oacute;i tiếng Anh theo nh&oacute;m nhỏ (4-5 bạn/nh&oacute;m) đ&atilde; được thiết kế v&agrave; triển khai 4 năm tại Ehouse v&agrave; hơn 3 năm (cho đến nay) tại tập đo&agrave;n h&agrave;ng đầu trong lĩnh vực c&ocirc;ng nghệ th&ocirc;ng tin DEK Technologies (đ&agrave;o tạo tại c&ocirc;ng ty). Gi&aacute;o vi&ecirc;n sẽ trực tiếp chỉnh sửa ph&aacute;t &acirc;m, văn phạm, c&aacute;ch sử dụng từ ph&ugrave; hợp với ngữ cảnh. Đặc biệt, đội ngũ GVNN tại Ehouse sẽ đến c&ocirc;ng ty v&agrave; trực tiếp training cho học vi&ecirc;n.</span></span></p>\r\n', '<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">- Th&ocirc;ng tin kh&oacute;a học:</span>&nbsp;</span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Sỉ số: 4-5 bạn/ nh&oacute;m</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Level: căn bản đến n&acirc;ng cao</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Gi&aacute;o vi&ecirc;n: 100% gi&aacute;o vi&ecirc;n nước ngo&agrave;i</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">H&igrave;nh thức: Training tại c&ocirc;ng ty</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"background-color:#fcfcfc\">Chi ph&iacute;: li&ecirc;n hệ để xem bảng gi&aacute;</span></span></span></li>\r\n</ul>\r\n', '<h6><span style=\"font-size:16px\"><span style=\"background-color:#fcfcfc\"><span style=\"color:#000000\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">Vui l&ograve;ng li&ecirc;n hệ v&agrave;o số hotline </span></span><span style=\"color:#c0392b\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">0906 911 022</span></span><span style=\"color:#000000\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"> hoặc qua email: </span></span><a href=\"mailto:ehouse.hcmc@gmail.com\"><span style=\"color:#27ae60\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">ehouse.hcmc@gmail.com</span></span></a></span></span></h6>\r\n', '<h6>Tất cả c&aacute;c học vi&ecirc;n trước khi đăng k&iacute; kh&oacute;a học luyện nghe, n&oacute;i tại Ehouse cần tham gia b&agrave;i kiểm tra đầu v&agrave;o tại Ehouse. Sau khi kiểm tra tr&igrave;nh độ, dựa tr&ecirc;n kết quả b&agrave;i kiểm tra, Ehouse sẽ đưa ra lời khuy&ecirc;n về cấp độ lớp ph&ugrave; hợp nhất dựa tr&ecirc;n tr&igrave;nh độ v&agrave; nguyện vọng của học vi&ecirc;n.</h6>\r\n\r\n<h6>C&aacute;c bạn vui l&ograve;ng xem Cấu tr&uacute;c b&agrave;i kiểm tra tr&igrave;nh độ, Thời gian, v&agrave; Đăng k&yacute;&nbsp;tại <a href=\"http://mcielts.com/blogs/lich-khai-giang/1000183813-lich-khai-giang\"><span style=\"color:#c0392b\">Đ&Acirc;Y</span></a>.</h6>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `seo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`id`, `name`, `image_name`, `link`, `seo`, `description`, `modified_date`, `status`) VALUES
(1, 'banner.png', 'banner.png', NULL, NULL, NULL, NULL, 1),
(2, 'banner1.jpg', 'banner1.jpg', NULL, NULL, NULL, NULL, 1),
(3, 'banner2.jpg', 'banner2.jpg', NULL, NULL, NULL, '2017-09-01 08:07:03', 1);

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
(1, '127.0.0.1', 'administrator', '$2a$06$WlemzmFke/8WR4CYUF8AfeJ3spy721g9wbglozzS1wZ/ZEZJLwF6W', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1504426219, 1, 'Admin', 'istrator', 'ADMIN', '1'),
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

--
-- Chỉ mục cho các bảng đã đổ
--

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
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
