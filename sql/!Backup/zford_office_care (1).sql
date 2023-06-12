-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 09 พ.ย. 2022 เมื่อ 09:48 AM
-- เวอร์ชันของเซิร์ฟเวอร์: 10.4.26-MariaDB-log
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zford_office_care`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `banner_slide`
--

CREATE TABLE `banner_slide` (
  `banner_slide_id` int(11) NOT NULL,
  `banner_slide_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner_slide_text1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner_slide_text2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner_slide_datetime_create` datetime NOT NULL,
  `banner_slide_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand_datetime_create` datetime NOT NULL,
  `brand_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `category1`
--

CREATE TABLE `category1` (
  `category1_id` int(11) NOT NULL,
  `category1_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category1_datetime_create` datetime NOT NULL,
  `category1_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `category2`
--

CREATE TABLE `category2` (
  `category2_id` int(11) NOT NULL,
  `category1_id` int(11) NOT NULL,
  `category2_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category2_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category2_datetime_create` datetime NOT NULL,
  `category2_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `category3`
--

CREATE TABLE `category3` (
  `category3_id` int(11) NOT NULL,
  `category2_id` int(11) NOT NULL,
  `category3_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category3_datetime_create` datetime NOT NULL,
  `category3_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `color`
--

CREATE TABLE `color` (
  `color_id` int(11) NOT NULL,
  `color_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color_datetime_create` datetime NOT NULL,
  `color_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `contact_us_form`
--

CREATE TABLE `contact_us_form` (
  `contact_us_form_id` int(11) NOT NULL,
  `contact_us_form_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_form_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_form_mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_form_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_form_subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_form_message` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_us_form_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(1000) NOT NULL,
  `department_menu` longtext DEFAULT NULL,
  `department_sub_menu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `department_menu`, `department_sub_menu`) VALUES
(1, 'Administrator', '50, 56, 57, 58, 51, 53, 54, 59, 62, 61, 66, 65, 63', '5, 6, 7, 23, 24, 25, 26, 27, 28, 29, 30, 34, 31, 49, 33, 36, 37, 39, 40, 41, 42, 43, 44, 45, 46, 47'),
(3, 'User', NULL, NULL);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `ford`
--

CREATE TABLE `ford` (
  `ford_id` int(11) NOT NULL,
  `ford_image` varchar(255) NOT NULL,
  `ford_name` varchar(255) NOT NULL,
  `ford_select` varchar(255) NOT NULL,
  `ford_ckeditor` longtext NOT NULL,
  `ford_username_create` varchar(255) NOT NULL,
  `ford_username_update` varchar(255) NOT NULL,
  `ford_datetime_create` datetime NOT NULL,
  `ford_datetime_update` datetime NOT NULL,
  `ford_ip_create` varchar(255) NOT NULL,
  `ford_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `ford`
--

INSERT INTO `ford` (`ford_id`, `ford_image`, `ford_name`, `ford_select`, `ford_ckeditor`, `ford_username_create`, `ford_username_update`, `ford_datetime_create`, `ford_datetime_update`, `ford_ip_create`, `ford_ip_update`) VALUES
(4, 'logo.png', 'test1', '1', '<p>\r\n	abccc1</p>', '1', '1', '2016-10-22 06:54:29', '2016-10-22 07:35:03', '::1', '::1'),
(5, 'user-5.jpg', 'fsdafsaddf', '10', '<p>\r\n	fsdfsdaffds</p>', '1', '1', '2016-10-22 07:25:39', '2016-10-22 07:35:41', '::1', '::1');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `map_product`
--

CREATE TABLE `map_product` (
  `map_product_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `map_product_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `member_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `member_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `member_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `member_mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `member_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `member_datetime_create` datetime NOT NULL,
  `member_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `member_shipping_address`
--

CREATE TABLE `member_shipping_address` (
  `member_shipping_address_id` int(11) NOT NULL,
  `member_shipping_address_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `member_shipping_address_mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `member_shipping_address_address` text COLLATE utf8_unicode_ci NOT NULL,
  `province_id` int(11) NOT NULL,
  `amphur_id` int(11) NOT NULL,
  `tumbol_id` int(11) NOT NULL,
  `member_shipping_address_postcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `member_shipping_address_datetime_create` datetime NOT NULL,
  `member_shipping_address_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_controller` varchar(255) NOT NULL,
  `menu_sort` int(11) NOT NULL,
  `menu_enable` int(1) NOT NULL,
  `menu_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_controller`, `menu_sort`, `menu_enable`, `menu_link`) VALUES
(1, 'Menu', 'menu', 10, 0, 'menu/backend'),
(2, 'Sub Menu', 'sub_menu', 20, 0, 'sub_menu/backend'),
(50, 'Authentication', 'authentication', 30, 1, 'authentication/backend'),
(51, 'About', 'about', 300, 1, 'about/backend'),
(52, 'News', 'news', 500, 0, 'news/backend'),
(53, 'Contact (Form)', 'contact_form', 700, 1, 'contact_form/backend'),
(54, 'Member', 'member', 900, 1, 'member/backend'),
(56, 'Home', 'home', 100, 1, 'home/backend'),
(57, 'Product', 'product', 200, 1, 'product/backend'),
(58, 'News & Promotion', 'news_promotion', 225, 1, 'news_promotion/backend'),
(59, 'Order', 'order', 1000, 1, 'order/backend'),
(60, 'Payment', 'payment', 1100, 0, 'payment/backend'),
(61, 'Shipping', 'shipping', 1200, 1, 'shipping/backend'),
(62, 'Promotion', 'promotion', 1150, 1, 'promotion/backend'),
(63, 'Report', 'report', 1300, 1, 'report/backend'),
(64, 'Message', 'message', 1250, 0, 'message/backend'),
(65, 'Email Wording', 'email_wording', 1275, 1, 'email_wording/backend'),
(66, 'Shipping Policy', 'shipping_policy', 1225, 1, 'shipping_policy/backend');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `news_promotion`
--

CREATE TABLE `news_promotion` (
  `news_promotion_id` int(11) NOT NULL,
  `news_promotion_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_promotion_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_promotion_date` date NOT NULL,
  `news_promotion_datetime_create` datetime NOT NULL,
  `news_promotion_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `order_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_amount` float(10,2) NOT NULL,
  `payment_name_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_date` date NOT NULL,
  `payment_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category3_id` int(11) NOT NULL,
  `product_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_before_discount` float(10,2) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_brand` int(11) NOT NULL,
  `product_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `product_specificial` text COLLATE utf8_unicode_ci NOT NULL,
  `product_best_seller` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `product_datetime_create` datetime NOT NULL,
  `product_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `product_photo`
--

CREATE TABLE `product_photo` (
  `product_photo_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_photo_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_photo_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `province`
--

CREATE TABLE `province` (
  `PROVINCE_ID` int(5) NOT NULL,
  `PROVINCE_CODE` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `PROVINCE_NAME` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `GEO_ID` int(5) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `province`
--

INSERT INTO `province` (`PROVINCE_ID`, `PROVINCE_CODE`, `PROVINCE_NAME`, `GEO_ID`) VALUES
(1, '10', 'กรุงเทพมหานคร   ', 2),
(2, '11', 'สมุทรปราการ   ', 2),
(3, '12', 'นนทบุรี   ', 2),
(4, '13', 'ปทุมธานี   ', 2),
(5, '14', 'พระนครศรีอยุธยา   ', 2),
(6, '15', 'อ่างทอง   ', 2),
(7, '16', 'ลพบุรี   ', 2),
(8, '17', 'สิงห์บุรี   ', 2),
(9, '18', 'ชัยนาท   ', 2),
(10, '19', 'สระบุรี', 2),
(11, '20', 'ชลบุรี   ', 5),
(12, '21', 'ระยอง   ', 5),
(13, '22', 'จันทบุรี   ', 5),
(14, '23', 'ตราด   ', 5),
(15, '24', 'ฉะเชิงเทรา   ', 5),
(16, '25', 'ปราจีนบุรี   ', 5),
(17, '26', 'นครนายก   ', 2),
(18, '27', 'สระแก้ว   ', 5),
(19, '30', 'นครราชสีมา   ', 3),
(20, '31', 'บุรีรัมย์   ', 3),
(21, '32', 'สุรินทร์   ', 3),
(22, '33', 'ศรีสะเกษ   ', 3),
(23, '34', 'อุบลราชธานี   ', 3),
(24, '35', 'ยโสธร   ', 3),
(25, '36', 'ชัยภูมิ   ', 3),
(26, '37', 'อำนาจเจริญ   ', 3),
(27, '39', 'หนองบัวลำภู   ', 3),
(28, '40', 'ขอนแก่น   ', 3),
(29, '41', 'อุดรธานี   ', 3),
(30, '42', 'เลย   ', 3),
(31, '43', 'หนองคาย   ', 3),
(32, '44', 'มหาสารคาม   ', 3),
(33, '45', 'ร้อยเอ็ด   ', 3),
(34, '46', 'กาฬสินธุ์   ', 3),
(35, '47', 'สกลนคร   ', 3),
(36, '48', 'นครพนม   ', 3),
(37, '49', 'มุกดาหาร   ', 3),
(38, '50', 'เชียงใหม่   ', 1),
(39, '51', 'ลำพูน   ', 1),
(40, '52', 'ลำปาง   ', 1),
(41, '53', 'อุตรดิตถ์   ', 1),
(42, '54', 'แพร่   ', 1),
(43, '55', 'น่าน   ', 1),
(44, '56', 'พะเยา   ', 1),
(45, '57', 'เชียงราย   ', 1),
(46, '58', 'แม่ฮ่องสอน   ', 1),
(47, '60', 'นครสวรรค์   ', 2),
(48, '61', 'อุทัยธานี   ', 2),
(49, '62', 'กำแพงเพชร   ', 2),
(50, '63', 'ตาก   ', 4),
(51, '64', 'สุโขทัย   ', 2),
(52, '65', 'พิษณุโลก   ', 2),
(53, '66', 'พิจิตร   ', 2),
(54, '67', 'เพชรบูรณ์   ', 2),
(55, '70', 'ราชบุรี   ', 4),
(56, '71', 'กาญจนบุรี   ', 4),
(57, '72', 'สุพรรณบุรี   ', 2),
(58, '73', 'นครปฐม   ', 2),
(59, '74', 'สมุทรสาคร   ', 2),
(60, '75', 'สมุทรสงคราม   ', 2),
(61, '76', 'เพชรบุรี   ', 4),
(62, '77', 'ประจวบคีรีขันธ์   ', 4),
(63, '80', 'นครศรีธรรมราช   ', 6),
(64, '81', 'กระบี่   ', 6),
(65, '82', 'พังงา   ', 6),
(66, '83', 'ภูเก็ต   ', 6),
(67, '84', 'สุราษฎร์ธานี   ', 6),
(68, '85', 'ระนอง   ', 6),
(69, '86', 'ชุมพร   ', 6),
(70, '90', 'สงขลา   ', 6),
(71, '91', 'สตูล   ', 6),
(72, '92', 'ตรัง   ', 6),
(73, '93', 'พัทลุง   ', 6),
(74, '94', 'ปัตตานี   ', 6),
(75, '95', 'ยะลา   ', 6),
(76, '96', 'นราธิวาส   ', 6),
(77, '97', 'บึงกาฬ', 3);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `sub_menu`
--

CREATE TABLE `sub_menu` (
  `sub_menu_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `sub_menu_name` varchar(255) NOT NULL,
  `sub_menu_controller` varchar(255) NOT NULL,
  `sub_menu_sort` int(11) NOT NULL,
  `sub_menu_enable` int(1) NOT NULL,
  `sub_menu_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `sub_menu`
--

INSERT INTO `sub_menu` (`sub_menu_id`, `menu_id`, `sub_menu_name`, `sub_menu_controller`, `sub_menu_sort`, `sub_menu_enable`, `sub_menu_link`) VALUES
(5, 50, 'Department', 'department,department_form,department_save_update', 10, 1, 'authentication/backend/department'),
(6, 50, 'Permission', 'permission,permission_form,permission_save_update', 20, 1, 'authentication/backend/permission'),
(7, 50, 'User', 'user,user_form,user_save_update', 30, 1, 'authentication/backend/user'),
(16, 68, 'Contact Us', 'contact_us,contact_us_form,contact_us_save_update', 10, 0, 'contact_us/backend/contact_us'),
(23, 56, 'Slide Banner', 'slide_banner,slide_banner_form,slide_banner_save_update', 100, 1, 'home/backend/slide_banner'),
(24, 56, 'Video', 'video,video_form,video_save_update', 200, 1, 'home/backend/video'),
(25, 56, 'New Arrivals', 'new_arrival,new_arrival_form,new_arrival_save_update', 300, 1, 'home/backend/new_arrival'),
(26, 56, 'Collection', 'collection,collection_form,collection_save_update', 400, 1, 'home/backend/collection'),
(27, 56, 'Instagram', 'instagram,instagram_form,instagram_save_update', 500, 1, 'home/backend/instagram'),
(28, 57, 'Category', 'category,category_form,category_save_update', 100, 1, 'product/backend/category'),
(29, 57, 'Sub Category', 'sub_category,sub_category_form,sub_category_save_update', 200, 1, 'product/backend/sub_category'),
(30, 57, 'Product', 'product,product_form,product_save_update', 300, 1, 'product/backend/product'),
(31, 54, 'Member', 'member,member_form,member_save_update', 100, 1, 'member/backend/member'),
(32, 54, 'Address', 'member_address,member_address_form,member_address_save_update', 200, 0, 'member/backend/member_address'),
(33, 54, 'Wishlist', 'wishlist,wishlist_form,wishlist_save_update', 300, 1, 'member/backend/wishlist'),
(34, 54, 'Member Status', 'first_register_point,first_register_point_save_update', 50, 1, 'member/backend/first_register_point'),
(35, 54, 'Membery Type', 'member_type,member_type_form,member_type_save_update', 400, 0, 'member/backend/member_type'),
(36, 59, 'Order', 'order,order_form,order_save_update', 100, 1, 'order/backend/order'),
(37, 59, 'Payment', 'payment,payment_form,payment_save_update', 200, 1, 'order/backend/payment'),
(38, 54, 'Special Code', 'special_code,special_code_form,special_code_save_update', 2100, 0, 'member/backend/special_code'),
(39, 59, 'Order Complete', 'order_complete,order_complete_form', 300, 1, 'order/backend/order_complete'),
(40, 62, 'Campaign', 'campaign,campaign_form,campaign_save_update', 100, 1, 'promotion/backend/campaign'),
(41, 62, 'Promotion Code', 'promotion,promotion_form,promotion_save_update', 200, 1, 'promotion/backend/promotion'),
(42, 62, 'Promotion Sale', 'promotion_sale,promotion_sale_form,promotion_sale_save_update', 400, 1, 'promotion/backend/promotion_sale'),
(43, 63, 'Sale Report', 'sale_report', 100, 1, 'report/backend/sale_report'),
(44, 63, 'Product Sale Report', 'product_sale_report', 200, 1, 'report/backend/product_sale_report'),
(45, 63, 'Top Sale', 'top_sale', 300, 1, 'report/backend/top_sale'),
(46, 63, 'Payment Method', 'payment_method', 400, 1, 'report/backend/payment_method'),
(47, 63, 'Member Report', 'member_report,member_report_detail', 450, 1, 'report/backend/member_report'),
(48, 63, 'Member Detail', 'member_detail', 600, 0, 'report/backend/member_detail'),
(49, 54, 'Adjust', 'adjust,adjust_form,adjust_save_update', 150, 1, 'member/backend/adjust');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_username` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `user_activated` int(1) NOT NULL,
  `user_datetime_create` datetime NOT NULL,
  `user_ip_create` varchar(255) NOT NULL,
  `user_datetime_update` datetime NOT NULL,
  `user_ip_update` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- dump ตาราง `user`
--

INSERT INTO `user` (`user_id`, `department_id`, `user_email`, `user_name`, `user_username`, `user_password`, `user_activated`, `user_datetime_create`, `user_ip_create`, `user_datetime_update`, `user_ip_update`) VALUES
(30, 1, 'sitiporn@orange-thailand.com', 'Sitiporn Trongwichien', 'admin', 'qwaszx', 1, '2020-09-03 08:57:01', '::1', '2020-09-03 08:57:01', '::1'),
(31, 1, 'ford@fuji.com', 'Ford Fuji', 'Ford Fuji', 'Ford Fuji', 1, '2020-09-03 08:57:26', '::1', '2022-03-02 07:26:26', '1.47.7.157'),
(32, 1, 'allgoodinnovation@gmail.com', 'Allgood Lamocha', 'allgoodinnovation@gmail.com', 'qwaszx', 1, '2020-10-08 10:27:45', '::1', '2020-10-12 02:34:47', '::1');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `wishlist_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner_slide`
--
ALTER TABLE `banner_slide`
  ADD PRIMARY KEY (`banner_slide_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `category1`
--
ALTER TABLE `category1`
  ADD PRIMARY KEY (`category1_id`);

--
-- Indexes for table `category2`
--
ALTER TABLE `category2`
  ADD PRIMARY KEY (`category2_id`);

--
-- Indexes for table `category3`
--
ALTER TABLE `category3`
  ADD PRIMARY KEY (`category3_id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `contact_us_form`
--
ALTER TABLE `contact_us_form`
  ADD PRIMARY KEY (`contact_us_form_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `ford`
--
ALTER TABLE `ford`
  ADD PRIMARY KEY (`ford_id`);

--
-- Indexes for table `map_product`
--
ALTER TABLE `map_product`
  ADD PRIMARY KEY (`map_product_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `member_shipping_address`
--
ALTER TABLE `member_shipping_address`
  ADD PRIMARY KEY (`member_shipping_address_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `news_promotion`
--
ALTER TABLE `news_promotion`
  ADD PRIMARY KEY (`news_promotion_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_photo`
--
ALTER TABLE `product_photo`
  ADD PRIMARY KEY (`product_photo_id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`PROVINCE_ID`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`sub_menu_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner_slide`
--
ALTER TABLE `banner_slide`
  MODIFY `banner_slide_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category1`
--
ALTER TABLE `category1`
  MODIFY `category1_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category2`
--
ALTER TABLE `category2`
  MODIFY `category2_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category3`
--
ALTER TABLE `category3`
  MODIFY `category3_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us_form`
--
ALTER TABLE `contact_us_form`
  MODIFY `contact_us_form_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ford`
--
ALTER TABLE `ford`
  MODIFY `ford_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `map_product`
--
ALTER TABLE `map_product`
  MODIFY `map_product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_shipping_address`
--
ALTER TABLE `member_shipping_address`
  MODIFY `member_shipping_address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `news_promotion`
--
ALTER TABLE `news_promotion`
  MODIFY `news_promotion_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_photo`
--
ALTER TABLE `product_photo`
  MODIFY `product_photo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `PROVINCE_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `sub_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
