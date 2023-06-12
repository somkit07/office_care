-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 05 ก.ค. 2022 เมื่อ 10:10 AM
-- เวอร์ชันของเซิร์ฟเวอร์: 10.4.24-MariaDB-log
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zford_lamocha`
--

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
-- โครงสร้างตาราง `lv_about_us`
--

CREATE TABLE `lv_about_us` (
  `about_us_id` int(11) NOT NULL,
  `about_us_detail1_th` text NOT NULL,
  `about_us_detail1_en` text NOT NULL,
  `about_us_detail1_ch` text NOT NULL,
  `about_us_detail2_th` text NOT NULL,
  `about_us_detail2_en` text NOT NULL,
  `about_us_detail2_ch` text NOT NULL,
  `about_us_detail3_th` text NOT NULL,
  `about_us_detail3_en` text NOT NULL,
  `about_us_detail3_ch` text NOT NULL,
  `about_us_datetime_update` datetime NOT NULL,
  `about_us_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `lv_about_us`
--

INSERT INTO `lv_about_us` (`about_us_id`, `about_us_detail1_th`, `about_us_detail1_en`, `about_us_detail1_ch`, `about_us_detail2_th`, `about_us_detail2_en`, `about_us_detail2_ch`, `about_us_detail3_th`, `about_us_detail3_en`, `about_us_detail3_ch`, `about_us_datetime_update`, `about_us_ip_update`) VALUES
(1, '<h3>\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">แก้ตัวและปัญญา</font></font></font></font></h3>\r\n<section class=\"elementor-section elementor-top-section elementor-element elementor-element-48429f3d elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-element_type=\"section\" data-id=\"48429f3d\" font-size:=\"\" helvetica=\"\" segoe=\"\" style=\"box-sizing: border-box; position: relative; color: rgb(58, 58, 58); font-family: -apple-system, BlinkMacSystemFont, \">\r\n	<div class=\"elementor-container elementor-column-gap-default\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px auto; outline: 0px; padding: 0px; vertical-align: baseline; display: flex; position: relative; max-width: 1140px;\">\r\n		<div class=\"elementor-row\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; width: 1140px; display: flex;\">\r\n			<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c34aeee\" data-element_type=\"column\" data-id=\"c34aeee\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; min-height: 1px; position: relative; display: flex; width: 1140px;\">\r\n				<div class=\"elementor-column-wrap elementor-element-populated\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 10px; vertical-align: baseline; position: relative; display: flex; width: 1140px;\">\r\n					<div class=\"elementor-widget-wrap\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; position: relative; width: 1120px; flex-wrap: wrap; align-content: flex-start; display: flex;\">\r\n						<div class=\"elementor-element elementor-element-7f8d2533 elementor-widget elementor-widget-heading\" data-element_type=\"widget\" data-id=\"7f8d2533\" data-widget_type=\"heading.default\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; position: relative; width: 1120px; text-align: center;\">\r\n							<div class=\"elementor-widget-container\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; transition: background 0.3s ease 0s, border 0.3s ease 0s, border-radius 0.3s ease 0s, box-shadow 0.3s ease 0s, -webkit-border-radius 0.3s ease 0s, -webkit-box-shadow 0.3s ease 0s;\">\r\n								<h2 class=\"elementor-heading-title elementor-size-default\" style=\"box-sizing: border-box; border: 0px; font-size: 2rem; font-style: inherit; font-weight: var( --e-global-typography-primary-font-weight ); margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; clear: both; color: rgb(247, 51, 100); line-height: 1.3; font-family: var( --e-global-typography-primary-font-family ), Sans-serif;\">\r\n									<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">มาเป็น LA MOCHA Premium Skincare ไม่ง่าย!</font></font></h2>\r\n							</div>\r\n						</div>\r\n					</div>\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</div>\r\n</section>\r\n<section class=\"elementor-section elementor-top-section elementor-element elementor-element-78a416af elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-element_type=\"section\" data-id=\"78a416af\" font-size:=\"\" helvetica=\"\" segoe=\"\" style=\"box-sizing: border-box; position: relative; color: rgb(58, 58, 58); font-family: -apple-system, BlinkMacSystemFont, \">\r\n	<div class=\"elementor-container elementor-column-gap-default\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px auto; outline: 0px; padding: 0px; vertical-align: baseline; display: flex; position: relative; max-width: 1140px;\">\r\n		<div class=\"elementor-row\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; width: 1140px; display: flex;\">\r\n			<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fe6df66\" data-element_type=\"column\" data-id=\"fe6df66\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; min-height: 1px; position: relative; display: flex; width: 1140px;\">\r\n				<div class=\"elementor-column-wrap elementor-element-populated\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 10px; vertical-align: baseline; position: relative; display: flex; width: 1140px;\">\r\n					<div class=\"elementor-widget-wrap\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; position: relative; width: 1120px; flex-wrap: wrap; align-content: flex-start; display: flex;\">\r\n						<div class=\"elementor-element elementor-element-1b472afb elementor-widget elementor-widget-text-editor\" data-element_type=\"widget\" data-id=\"1b472afb\" data-widget_type=\"text-editor.default\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: var( --e-global-typography-text-font-weight ); margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; position: relative; color: var( --e-global-color-text ); font-family: var( --e-global-typography-text-font-family ), Sans-serif; width: 1120px;\">\r\n							<div class=\"elementor-widget-container\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; transition: background 0.3s ease 0s, border 0.3s ease 0s, border-radius 0.3s ease 0s, box-shadow 0.3s ease 0s, -webkit-border-radius 0.3s ease 0s, -webkit-box-shadow 0.3s ease 0s;\">\r\n								<div class=\"elementor-text-editor elementor-clearfix\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n									<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n										<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">ขอบพระคุณที่ไว้วางใจ LA MOCHA ปิ่ ปี ปฏิวัติ ช๊อปปิ้ง</font></font></p>\r\n									<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n										<img alt=\"?\" class=\"emoji\" draggable=\"false\" role=\"img\" src=\"https://s.w.org/images/core/emoji/13.1.0/svg/1f4cc.svg\" style=\"box-sizing: border-box; border: none; height: auto; max-width: 100%; vertical-align: -0.1em !important; display: inline !important; box-shadow: none; width: 1em !important; margin: 0px 0.07em !important; background: none !important; padding: 0px !important; border-radius: 0px;\" /><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">สั่งซื้อง่ายๆ เพียง</font></font><br style=\"box-sizing: border-box;\" />\r\n										<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">คลิก</font></font><img alt=\"??\" class=\"emoji\" draggable=\"false\" role=\"img\" src=\"https://s.w.org/images/core/emoji/13.1.0/svg/1f449-1f3fb.svg\" style=\"box-sizing: border-box; border: none; height: auto; max-width: 100%; vertical-align: -0.1em !important; display: inline !important; box-shadow: none; width: 1em !important; margin: 0px 0.07em !important; background: none !important; padding: 0px !important; border-radius: 0px;\" />&nbsp;<a href=\"https://www.lamocha.co.th/shop/\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; background-color: transparent; text-decoration-line: none; color: rgb(2, 116, 190); transition: all 0.2s linear 0s; box-shadow: none;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">https://www.lamocha.co.th/shop/</font></font></a></p>\r\n									<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n										<img alt=\"?\" class=\"emoji\" draggable=\"false\" role=\"img\" src=\"https://s.w.org/images/core/emoji/13.1.0/svg/1f4cc.svg\" style=\"box-sizing: border-box; border: none; height: auto; max-width: 100%; vertical-align: -0.1em !important; display: inline !important; box-shadow: none; width: 1em !important; margin: 0px 0.07em !important; background: none !important; padding: 0px !important; border-radius: 0px;\" /><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">ต้องการสมาชิกก่อนช๊อปเพื่อคุ้มค่า</font></font><br style=\"box-sizing: border-box;\" />\r\n										<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">คลิก&nbsp; </font></font><img alt=\"??\" class=\"emoji\" draggable=\"false\" role=\"img\" src=\"https://s.w.org/images/core/emoji/13.1.0/svg/1f449-1f3fb.svg\" style=\"box-sizing: border-box; border: none; height: auto; max-width: 100%; vertical-align: -0.1em !important; display: inline !important; box-shadow: none; width: 1em !important; margin: 0px 0.07em !important; background: none !important; padding: 0px !important; border-radius: 0px;\" />&nbsp;<a href=\"https://www.lamocha.co.th/membership/\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; background-color: transparent; text-decoration-line: none; color: rgb(2, 116, 190); transition: all 0.2s linear 0s; box-shadow: none;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">https://www.lamocha.co.th/membership/</font></font></a></p>\r\n									<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n										<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">**หากลูกค้าโอนเงินแล้ว เร่งหน้าส่งสลิปไม่ได้ ** </font></font><br style=\"box-sizing: border-box;\" />\r\n										<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">เข้าลิงค์นี้ค่ะ&nbsp; </font></font><img alt=\"??\" class=\"emoji\" draggable=\"false\" role=\"img\" src=\"https://s.w.org/images/core/emoji/13.1.0/svg/1f449-1f3fb.svg\" style=\"box-sizing: border-box; border: none; height: auto; max-width: 100%; vertical-align: -0.1em !important; display: inline !important; box-shadow: none; width: 1em !important; margin: 0px 0.07em !important; background: none !important; padding: 0px !important; border-radius: 0px;\" />&nbsp;<a href=\"https://www.lamocha.co.th/confirm-payment/\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; background-color: transparent; text-decoration-line: none; color: rgb(2, 116, 190); transition: all 0.2s linear 0s; box-shadow: none;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">https://www.lamocha.co.th/confirm-payment/</font></font></a></p>\r\n								</div>\r\n							</div>\r\n						</div>\r\n					</div>\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</div>\r\n</section>\r\n<section class=\"elementor-section elementor-top-section elementor-element elementor-element-e60e4a3 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-element_type=\"section\" data-id=\"e60e4a3\" font-size:=\"\" helvetica=\"\" segoe=\"\" style=\"box-sizing: border-box; position: relative; color: rgb(58, 58, 58); font-family: -apple-system, BlinkMacSystemFont, \">\r\n	<div class=\"elementor-container elementor-column-gap-default\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px auto; outline: 0px; padding: 0px; vertical-align: baseline; display: flex; position: relative; max-width: 1140px;\">\r\n		<div class=\"elementor-row\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; width: 1140px; display: flex;\">\r\n			<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8d5ab1f\" data-element_type=\"column\" data-id=\"8d5ab1f\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; min-height: 1px; position: relative; display: flex; width: 1140px;\">\r\n				<div class=\"elementor-column-wrap elementor-element-populated\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 10px; vertical-align: baseline; position: relative; display: flex; width: 1140px;\">\r\n					<div class=\"elementor-widget-wrap\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; position: relative; width: 1120px; flex-wrap: wrap; align-content: flex-start; display: flex;\">\r\n						<div class=\"elementor-element elementor-element-d318d17 elementor-widget elementor-widget-text-editor\" data-element_type=\"widget\" data-id=\"d318d17\" data-widget_type=\"text-editor.default\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: var( --e-global-typography-text-font-weight ); margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; position: relative; color: var( --e-global-color-text ); font-family: var( --e-global-typography-text-font-family ), Sans-serif; width: 1120px;\">\r\n							<div class=\"elementor-widget-container\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; transition: background 0.3s ease 0s, border 0.3s ease 0s, border-radius 0.3s ease 0s, box-shadow 0.3s ease 0s, -webkit-border-radius 0.3s ease 0s, -webkit-box-shadow 0.3s ease 0s;\">\r\n								<div class=\"elementor-text-editor elementor-clearfix\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n									<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n										<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">LA MOCHA สตาร์ตติต ติตติง ติติง ติติง ติติง ติ่มซำ ท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าให้คุณของคุณ</font></font></p>\r\n								</div>\r\n							</div>\r\n						</div>\r\n					</div>\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</div>\r\n</section>\r\n<p>\r\n	https://www.youtube.com/watch?v=BmMZZUTg8RQ</p>\r\n<section class=\"elementor-section elementor-top-section elementor-element elementor-element-424080d elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-element_type=\"section\" data-id=\"424080d\" font-size:=\"\" helvetica=\"\" segoe=\"\" style=\"box-sizing: border-box; position: relative; color: rgb(58, 58, 58); font-family: -apple-system, BlinkMacSystemFont, \">\r\n	<div class=\"elementor-container elementor-column-gap-default\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px auto; outline: 0px; padding: 0px; vertical-align: baseline; display: flex; position: relative; max-width: 1140px;\">\r\n		<div class=\"elementor-row\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; width: 1140px; display: flex;\">\r\n			<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-686fefe\" data-element_type=\"column\" data-id=\"686fefe\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; min-height: 1px; position: relative; display: flex; width: 1140px;\">\r\n				<div class=\"elementor-column-wrap elementor-element-populated\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 10px; vertical-align: baseline; position: relative; display: flex; width: 1140px;\">\r\n					<div class=\"elementor-widget-wrap\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; position: relative; width: 1120px; flex-wrap: wrap; align-content: flex-start; display: flex;\">\r\n						<div class=\"elementor-element elementor-element-02368e5 elementor-widget elementor-widget-text-editor\" data-element_type=\"widget\" data-id=\"02368e5\" data-widget_type=\"text-editor.default\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: var( --e-global-typography-text-font-weight ); margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; position: relative; color: var( --e-global-color-text ); font-family: var( --e-global-typography-text-font-family ), Sans-serif; width: 1120px;\">\r\n							<div class=\"elementor-widget-container\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; transition: background 0.3s ease 0s, border 0.3s ease 0s, border-radius 0.3s ease 0s, box-shadow 0.3s ease 0s, -webkit-border-radius 0.3s ease 0s, -webkit-box-shadow 0.3s ease 0s;\">\r\n								<div class=\"elementor-text-editor elementor-clearfix\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n									<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n										คุณประโยชน์จากรังไหมสีทองของไทย สารสกัดล้ำค่า หนึ่งในผลิตภัณฑ์ ที่ภูมิใจนำเสนอ ที่หลายคนมักไม่รู้มากก่อน สารสกัดตัวนี้ถูกนำไปใช้ในนวัตกรรมความงามและดุแลผิว มากมาย ทั้งในไทยและต่างประเทศ</p>\r\n								</div>\r\n							</div>\r\n						</div>\r\n					</div>\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</div>\r\n</section>\r\n<section class=\"elementor-section elementor-top-section elementor-element elementor-element-1f822769 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-element_type=\"section\" data-id=\"1f822769\" font-size:=\"\" helvetica=\"\" segoe=\"\" style=\"box-sizing: border-box; position: relative; color: rgb(58, 58, 58); font-family: -apple-system, BlinkMacSystemFont, \">\r\n	<div class=\"elementor-container elementor-column-gap-default\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px auto; outline: 0px; padding: 0px; vertical-align: baseline; display: flex; position: relative; max-width: 1140px;\">\r\n		<div class=\"elementor-row\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; width: 1140px; display: flex;\">\r\n			<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5ed1d76c\" data-element_type=\"column\" data-id=\"5ed1d76c\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; min-height: 1px; position: relative; display: flex; width: 1140px;\">\r\n				<div class=\"elementor-column-wrap\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; position: relative; display: flex; width: 1140px;\">\r\n					<div class=\"elementor-widget-wrap\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; position: relative; width: 1140px; flex-wrap: wrap; align-content: flex-start; display: flex;\">\r\n						&nbsp;</div>\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</div>\r\n</section>\r\n<section class=\"elementor-section elementor-top-section elementor-element elementor-element-499ed90e elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-element_type=\"section\" data-id=\"499ed90e\" font-size:=\"\" helvetica=\"\" segoe=\"\" style=\"box-sizing: border-box; position: relative; color: rgb(58, 58, 58); font-family: -apple-system, BlinkMacSystemFont, \">\r\n	<div class=\"elementor-container elementor-column-gap-default\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px auto; outline: 0px; padding: 0px; vertical-align: baseline; display: flex; position: relative; max-width: 1140px;\">\r\n		<div class=\"elementor-row\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; width: 1140px; display: flex;\">\r\n			<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-75431180\" data-element_type=\"column\" data-id=\"75431180\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; min-height: 1px; position: relative; display: flex; width: 1140px;\">\r\n				<div class=\"elementor-column-wrap elementor-element-populated\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 10px; vertical-align: baseline; position: relative; display: flex; width: 1140px;\">\r\n					<div class=\"elementor-widget-wrap\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; position: relative; width: 1120px; flex-wrap: wrap; align-content: flex-start; display: flex;\">\r\n						<div class=\"elementor-element elementor-element-110da6a1 elementor-widget elementor-widget-text-editor\" data-element_type=\"widget\" data-id=\"110da6a1\" data-widget_type=\"text-editor.default\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: var( --e-global-typography-text-font-weight ); margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; position: relative; color: var( --e-global-color-text ); font-family: var( --e-global-typography-text-font-family ), Sans-serif; width: 1120px;\">\r\n							<div class=\"elementor-widget-container\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; transition: background 0.3s ease 0s, border 0.3s ease 0s, border-radius 0.3s ease 0s, box-shadow 0.3s ease 0s, -webkit-border-radius 0.3s ease 0s, -webkit-box-shadow 0.3s ease 0s;\">\r\n								<div class=\"elementor-text-editor elementor-clearfix\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n									<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n										เราเลือกสรร สิ่งที่ดี ที่สุด ด้วยความใส่ใจทุกรายละเอียด ของ คนที่ชอบสินค้าสไตล์ ธรรมชาติ ผสมผสาน นวัตกรรม แบบพรีเมี่ยม และ ไม่ยึดติดแบรนด์ แต่อยากได้สินค้าที่คุณภาพ สมราคา ไม่ต้องจ่ายแพงเกิน แต่คุ้มเกินค่า ถ้าถามว่า ทำไม ไม่ทำ Nature Product 100 % ไปเลยหล่ะ ก็ต้องอธิบายว่า บางที ธรรมชาติ อย่างเดียวเพียวๆล้วนๆ ก็ไม่ได้สามารถ แก้ปัญหาผิวต่างๆ หรือ มีประสิทธิภาพมากพอ ที่จะ ยื้อความสาว สวย ใส ของผิวเราไว้ได้ แต่การ ไม่ Nature 100 % ก็ไม่ได้แปลว่า สินค้าจะไม่ดี หรือ อันตรายนะคะ เพราะ ทุกอย่าง เราศึกษาและเลือกสิ่งที่ดีที่สุด ให้คุณแล้ว อุ่นใจได้ หากคุณลูกค้ายังไม่มั่นใจในสินค้าผลิตภัณฑ์ ของเราพอ เราเข้าใจ เรารู้ใจคุณค่ะ คุณลูกค้าสามารถขอดูรายละเอียด สินค้า สารสกัด และ การส่งทดสอบ LAB เป็นรายตัวได้เลยค่ะ เรายินดี&nbsp;</p>\r\n									<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n										&nbsp;</p>\r\n									<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n										&nbsp;</p>\r\n									<section class=\"elementor-section elementor-top-section elementor-element elementor-element-8caef68 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-element_type=\"section\" data-id=\"8caef68\" style=\"box-sizing: border-box; position: relative;\">\r\n										<div class=\"elementor-container elementor-column-gap-default\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px auto; outline: 0px; padding: 0px; vertical-align: baseline; display: flex; position: relative; max-width: 1140px;\">\r\n											<div class=\"elementor-row\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; width: 1140px; display: flex;\">\r\n												<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4216e09a\" data-element_type=\"column\" data-id=\"4216e09a\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; min-height: 1px; position: relative; display: flex; width: 1140px;\">\r\n													<div class=\"elementor-column-wrap elementor-element-populated\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 10px; vertical-align: baseline; position: relative; display: flex; width: 1140px;\">\r\n														<div class=\"elementor-widget-wrap\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; position: relative; width: 1120px; flex-wrap: wrap; align-content: flex-start; display: flex;\">\r\n															<div class=\"elementor-element elementor-element-72981fd6 elementor-widget elementor-widget-text-editor\" data-element_type=\"widget\" data-id=\"72981fd6\" data-widget_type=\"text-editor.default\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: var( --e-global-typography-text-font-weight ); margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; position: relative; color: var( --e-global-color-text ); font-family: var( --e-global-typography-text-font-family ), Sans-serif; width: 1120px;\">\r\n																<div class=\"elementor-widget-container\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; transition: background 0.3s ease 0s, border 0.3s ease 0s, border-radius 0.3s ease 0s, box-shadow 0.3s ease 0s, -webkit-border-radius 0.3s ease 0s, -webkit-box-shadow 0.3s ease 0s;\">\r\n																	<div class=\"elementor-text-editor elementor-clearfix\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n																		<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n																			<span style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(0, 0, 0);\"><span style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: 700; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">มหัศจรรย์แห่งครีมกันแดด ที่ทำไม๊ ทำไม ถึงขายดีนักหนา ไม่เคยตก</span></span></p>\r\n																		<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n																			ไม่ได้ง่าย #ของดีมักมีที่มา&nbsp;<img alt=\"?\" class=\"emoji\" draggable=\"false\" role=\"img\" src=\"https://s.w.org/images/core/emoji/13.1.0/svg/1f98b.svg\" style=\"box-sizing: border-box; border: none; height: auto; max-width: 100%; vertical-align: -0.1em !important; display: inline !important; box-shadow: none; width: 1em !important; margin: 0px 0.07em !important; background: none !important; padding: 0px !important; border-radius: 0px;\" /><img alt=\"?\" class=\"emoji\" draggable=\"false\" role=\"img\" src=\"https://s.w.org/images/core/emoji/13.1.0/svg/1f33c.svg\" style=\"box-sizing: border-box; border: none; height: auto; max-width: 100%; vertical-align: -0.1em !important; display: inline !important; box-shadow: none; width: 1em !important; margin: 0px 0.07em !important; background: none !important; padding: 0px !important; border-radius: 0px;\" />มหัศจรรย์แห่งครีมกันแดด ที่เป็นมากกว่าครีมกันแดด จาก Lamocha( ลาโมช่า )</p>\r\n																		<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n																			<span style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: 700; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">&rdquo; อย่าเชื่อ!!! จนกว่าจะได้ลอง &ldquo;</span></p>\r\n																		<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n																			<span style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: 700; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">&ldquo;ใหม่ล่าสุด สินค้ามาแรง นวัตกรรมสุดล้ำ แห่งวงการกันแดด</span></p>\r\n																		<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n																			ที่มีถึง 3 นวัตกรรม ในหลอดเดียว มาพร้อมอาหารผิวในเนื้อครีมผสมรองพื้นแป้งไว้ในหลอดเดียว&rdquo;<br style=\"box-sizing: border-box;\" />\r\n																			LA MOCHA Perfect Smooth mouse SunScreen SPF 50 PA ++++</p>\r\n																		<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n																			1.ลดขั้นตอนความยุ่งยากในการแต่งหน้า.<br style=\"box-sizing: border-box;\" />\r\n																			ให้ประสิทธิภาพ ถึง3คุณสมบัติ ในขั้นตอนเดียว.</p>\r\n																		<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n																			1.1บำรุงล้ำลึก<br style=\"box-sizing: border-box;\" />\r\n																			1.2.ปกป้องผิวหน้าจาก UVA UVB ด้วยSPF 50++++.<br style=\"box-sizing: border-box;\" />\r\n																			1.3.เคลือบผิวละมุนดุจผงแป้งไหมทอง ให้ผิวดูสวยใส ผุดผ่อง อ่อนเยาว์เจิดจรัส โดยไม่ต้องทาแป้ง มิติใหม่ของครีมกันแดด ที่คุณจะต้องหลงรัก</p>\r\n																		<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n																			2. กันเหงื่อกันน้ำไม่เป็นคราบ.<br style=\"box-sizing: border-box;\" />\r\n																			3. เบาสบายผิวเหมือนทาแป้งมีอาหารผิวหน้าไม่แก่เร็ว ปกป้องดี ปกปิด 3 ระดับ.<br style=\"box-sizing: border-box;\" />\r\n																			4.เติมทับเมคอัพได้ ทาทับระหว่างวันได้ไม่เกิดคราบ<br style=\"box-sizing: border-box;\" />\r\n																			5. อำพรางรูขุมขน เบลินผิวให้ดูเรียบเนียนละเอียด มีออร่าตลอดวัน.</p>\r\n																		<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n																			&rdquo; ทำการศึกษา ค้นหา พัฒนา ต่อยอด จากสูตรดั้งเดิม มาถึง 5 ปี กว่าจะมาเป็น กันแดด สูตรนี้<br style=\"box-sizing: border-box;\" />\r\n																			สารสกัด เนื้อกันแดด ที่อุดมไปด้วย คุณค่า อาหารผิว โดยเฉพาะ สารสกัด รังไหมธรรมชาติ</p>\r\n																		<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n																			สีทอง ของไทย ที่มีประโยชน์ต่อผิวอย่างสูง<br style=\"box-sizing: border-box;\" />\r\n																			( สารสกัด รังไหมสีทอง มีงานวิจัยจากหลายแหล่ง รองรับเช่น กระทรวงวิทยาศาสตร์ ของไทย เป็นที่ นิยมใช้ในเวชสำอางญี่ปุ่น )</p>\r\n																		<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n																			ตัวนี้ไม่ใช่แค่กันแดด แต่..มาพร้อมคุณค่าการบำรุงครอบคลุมการดูแลผิวขั้นสุด มอบความเจิดจรัส<br style=\"box-sizing: border-box;\" />\r\n																			ให้ผิวคุณหลังทาทันทีและดูแลอย่างต่อเนื่อง ให้คุณเห็นถึงความเปลี่ยนแปลงของผิวที่มากกว่าผิวสวยใส แต่เป็น</p>\r\n																		<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n																			&rdquo; ผิวสวย ละมุน เนียนใส อ่อนเยาว์ เจิดจรัส &ldquo;</p>\r\n																		<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n																			#LAMOCHAThailand</p>\r\n																	</div>\r\n																</div>\r\n															</div>\r\n														</div>\r\n													</div>\r\n												</div>\r\n											</div>\r\n										</div>\r\n									</section>\r\n									<section class=\"elementor-section elementor-top-section elementor-element elementor-element-813675d elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-element_type=\"section\" data-id=\"813675d\" style=\"box-sizing: border-box; position: relative;\">\r\n										<div class=\"elementor-container elementor-column-gap-default\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px auto; outline: 0px; padding: 0px; vertical-align: baseline; display: flex; position: relative; max-width: 1140px;\">\r\n											<div class=\"elementor-row\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; width: 1140px; display: flex;\">\r\n												<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c158052\" data-element_type=\"column\" data-id=\"c158052\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; min-height: 1px; position: relative; display: flex; width: 1140px;\">\r\n													<div class=\"elementor-column-wrap elementor-element-populated\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 10px; vertical-align: baseline; position: relative; display: flex; width: 1140px;\">\r\n														<div class=\"elementor-widget-wrap\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; position: relative; width: 1120px; flex-wrap: wrap; align-content: flex-start; display: flex;\">\r\n															<div class=\"elementor-element elementor-element-619b1e4 elementor-widget elementor-widget-text-editor\" data-element_type=\"widget\" data-id=\"619b1e4\" data-widget_type=\"text-editor.default\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: var( --e-global-typography-text-font-weight ); margin: 0px 0px 20px; outline: 0px; padding: 0px; vertical-align: baseline; position: relative; color: var( --e-global-color-text ); font-family: var( --e-global-typography-text-font-family ), Sans-serif; width: 1120px;\">\r\n																<div class=\"elementor-widget-container\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; transition: background 0.3s ease 0s, border 0.3s ease 0s, border-radius 0.3s ease 0s, box-shadow 0.3s ease 0s, -webkit-border-radius 0.3s ease 0s, -webkit-box-shadow 0.3s ease 0s;\">\r\n																	<div class=\"elementor-text-editor elementor-clearfix\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n																		<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n																			<span style=\"box-sizing: border-box; border: 0px; font-size: 14pt; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(255, 0, 0);\"><span style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: 700; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">จุดเริ่มต้น</span></span></p>\r\n																		<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n																			&ldquo;LA MOCHA (ลา โมช่า )&rdquo; เริ่มมาจาก ความคลั่งสวย และร่ำรวยความฝัน รวมถึงอยากดูสวยตลอดเวลาอยากผิวสวยไม่อยากแก่เร็ว&nbsp; ของผู้หญิงทั่วๆไปคนนึงทุกวันนี้ก็คือ พลอย (CEO LA MOCHA ) เองค่ะ และ จุดสำคัญที่ทำให้เกิดสินค้าสกินแคร์ไสตล์พรีเมี่ยมแบรนด์ไทย มาจากการต้องการพิสูจน์คุณค่า ให้คนเห็นว่า สินค้าไทย สกินแคร์ไทย สารสกัดไทยๆ ก็ดีไม่แพ้แบรนด์ใดในโลก และ ตอบโจทย์คนชอบใช้ของดีพรีเมี่ยม ได้ ภายใต้ Made in Thailand นั้นทำได้มีอยู่จริง เนื่องจากความเชื่อของคนส่วนมากชอบมองและคิดว่า สกินแคร์ไทยที่ผลิตในไทย สารสกัดไทย สู้แบรนด์สกินแคร์ที่ผลิตต่างประเทศไม่ได้ และ ต้องการนำเสนอความเป็นไทยสินค้าไทยที่มีคุณค่า มีมูลค่า มีคุณภาพ ส่งผ่านสินค้า คุณภาพนี้ไปยังประเทศต่างๆทั่วโลก ด้วยค่ะ</p>\r\n																		<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n																			&nbsp;</p>\r\n																		<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n																			ความจริงแล้วพลอยเป็นเด็กต่างจังหวัดหรือเรียกว่า เด็กบ้านนอก นั่นแหละคะ ขึ้นชื่อว่า บ้านนอก สมัยก่อนมันก็ดูทุกอย่างก็ดูล้าสมัย เชย โบราณ&nbsp; ประกอบกับอากาศที่ร้อนแดดก็แรง แอร์หรือเครื่องปรับอากาศ นี่แทบไม่เคยสัมผัสโดนตัวพลอยเลยค่ะ ผิวพรรณของเด็กบ้านนอกอย่างเราสมัยนั้น ก็จะเห็นว่า แห้ง หยาบกระด้าง ผิวนี่สีกระดำกระด่างไม่สม่ำเสมอ ไม่ได้สวยสักเท่าไหร่ แต่ลึกๆแล้ว พลอยก็เป็นคนคลั่งสวยค่ะ&nbsp; ชอบส่องกระจกเช็คผิวเช็คหน้าทั้งวัน ชอบดูทีวี ชอบนิตยสาร ชอบดูดาราค่ะสมัยนั้น เราก็เริ่มเป็นวัยรุ่น และเราก็มีความฝัน อยากสวย ผิวดี ดูดีแบบนั้นบ้าง&nbsp; ด้วยความที่รักสวย รักงาม แต่ไม่มีเงิน ไม่มีทางเลือกมากนัก จึงดูแลตัวเอง ใจลึกๆก็อยากใช้ของดีๆมาดูแลผิว ตอนนั้นเราไม่มีความรู้มากเท่าไหร่เกี่ยวกับด้านนี้&nbsp; ก็เลือกใช้ของที่คิดว่าดีและปลอดภัยเท่าที่เราหาใช้ได้&nbsp; ผิดพลาดไปก็เยอะค่ะ โชคดีที่หน้าไม่พัง ประกอบกับเป็นวัยรุ่นตอนนั้นก็ฟื้นฟูเร็ว&nbsp; พอวันนึงมีโอกาส มีความพร้อม เราก็ได้ทำแบรนด์ของตัวเองอย่างที่ใฝ่ฝันโดยไม่ละทิ้งเป้าหมายเดิมที่มีอยู่ในใจ คือ การทำสกินแคร์ ของดีพรีเมี่ยม ของไทย โดยคนไทย แบรนด์ไทย ส่งเสริมเกษตรกรไทย&nbsp; และมีโอกาสได้ศึกษาปริญญาโทเฉพาะด้านเกี่ยวกับวิทยาศาสตร์เครื่องสำอางโดยตรง ได้ไปคุยงานกับโรงงานต่างๆ รวมถึง Doctor เก่งๆมากมายหลายท่านที่เป็นคนไทย เรียนรู้กับอาจารย์ผู้ทรงคุณวุฒิก็คนไทยอีกเช่นกัน ทำให้เรายิ่งมั่นใจในความเก่งของคนไทยและ&nbsp; คุณสมบัติของธรรมชาติที่มีอยู่รอบตัวของไทย นวัตกรรมจากความคิดคนไทย รวมถึงสารสหัดไทยดีๆ นั้นมีมากมายที่ทรงคุณค่า และบางตัวยังถูกส่งออกไปเพื่อใช้ในแบรนด์ของต่างประเทศด้วยซ้ำ และกลับมาขายคนไทยในราคาสูงที่ควรจะได้รับกว่าเดิมอีก ซึ่งบางทีอาจจะไม่ถูกชูจุดเด่นนั้นออกมา&nbsp; เราอยากเป็นคนที่ชูจุดเด่น และนำสารสกัดดีๆนวัตกรรมดีๆ ทำออกมาในนามแบรนด์ไทย พรีเมี่ยม ทรงคุณค่า อย่างภูมิใจให้ได้ จึงพยายาม เรียนรู้ ศึกษา ค้นคว้าอย่างมุ่งมั่น ตั้งใจ และทำเอง ใช้เองอย่างต่อเนื่องมาหลายปี&nbsp; และ มันให้ผลที่ดีเกินคาดค่ะ จากความพยายามทั้งหมดที่เราทำมา ก่อนจะได้แบรนด์นี้มาก็เคยผิดพลาด บกพร่อง ปรับปรุงแก้ไข มาแล้วหลายรอบมากๆ ค่ะ จึงเป็นที่มา แบรนด์ LA MOCHA เป็น สุดยอด Skincare (โดย LA เป็นคำที่มาจากภาษาฝรั่งเศษ ที่ใช้นำหน้าเพศหญิงค่ะ ส่วนคำว่า MOCHA ที่หลายคนมักอ่านผิดว่าเป็น ม๊อคค่า ความจริงคือมาจากคำย่อรวบคำ ชื่อจริงภาษาอังกฤษของพลอยค่ะ ที่ชื่อว่า MANOCHA&nbsp; )&nbsp; หลายคนคงคิดว่าทำไมแบรนดืไทยไม่ใช้ชื่อไทย เพราะพลอยคิดตอนนั้นที่ตั้งชื่อแบรนด์ว่า ควรเรียกง่าย ไม่ว่าคนไทยหรือต่างชาติ ติดปาก ฟังคุ้นหู และดัดแปลงมาจากชื่อเราที่เป็นผู้ก่อตั้งแบรนด์ ก็น่าจะดีค่ะ&nbsp; เลยได้มาเป็นชื่อนี้</p>\r\n																		<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n																			&nbsp;</p>\r\n																		<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n																			&nbsp;แบรนด์ LA MOCHA (ลา โมช่า )เน้นมากเรื่องต้องเป็นแบรนด์สกินแคร์ที่มีความปลอดภัยสูง สารต้องห้ามใดๆ เราไม่แตะต้องเลยค่ะ ไม่ว่าจะเห็นผลแค่ไหน ความปลอดภัย ของลูกค้าต้องมาอันดับแรก และพยายามเลือก ใช้สารสกัดจากธรรมชาติของไทย&nbsp; และศึกษาตัวที่มีการพูดถึง ถูกใช้มายาวนานเลยบางตัวและมีงานวิจัยรองรับเช่น sericin ( สารสกัดจากรังไหม น้ำกาวไหม&nbsp; เป็นต้น ที่มีงานวิจัยกล่าวถึงเยอะมาก ) และนำมาผสมผสานกับนวัตกรรมเฉพาะ กับเทคนิคทางการพัฒนาสูตรให้เป็นแบบเฉพาะของเรา ทั้ง เนื้อสัมผัส และ คุณสมบัติให้เหมาะกับการใช้ต่อเนื่องระยะยาวแล้วดีจริง&nbsp; ในคุณค่าที่ลูกค้าได้รับแบบคุ้มค่าเกินราคา สินค้า 1 ชนิดจะมีคุณสมบัติทางการใช้งานมากกว่า 1 เสมอด้วยค่ะ</p>\r\n																	</div>\r\n																</div>\r\n															</div>\r\n															<div class=\"elementor-element elementor-element-468ee82 elementor-widget elementor-widget-text-editor\" data-element_type=\"widget\" data-id=\"468ee82\" data-widget_type=\"text-editor.default\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: var( --e-global-typography-text-font-weight ); margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; position: relative; color: var( --e-global-color-text ); font-family: var( --e-global-typography-text-font-family ), Sans-serif; width: 1120px;\">\r\n																<div class=\"elementor-widget-container\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; transition: background 0.3s ease 0s, border 0.3s ease 0s, border-radius 0.3s ease 0s, box-shadow 0.3s ease 0s, -webkit-border-radius 0.3s ease 0s, -webkit-box-shadow 0.3s ease 0s;\">\r\n																	<div class=\"elementor-text-editor elementor-clearfix\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n																		&nbsp;</div>\r\n																</div>\r\n															</div>\r\n														</div>\r\n													</div>\r\n												</div>\r\n											</div>\r\n										</div>\r\n									</section>\r\n									<section class=\"elementor-section elementor-top-section elementor-element elementor-element-ebba269 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-element_type=\"section\" data-id=\"ebba269\" style=\"box-sizing: border-box; position: relative;\">\r\n										<div class=\"elementor-container elementor-column-gap-default\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px auto; outline: 0px; padding: 0px; vertical-align: baseline; display: flex; position: relative; max-width: 1140px;\">\r\n											<div class=\"elementor-row\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; width: 1140px; display: flex;\">\r\n												<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6abf25c\" data-element_type=\"column\" data-id=\"6abf25c\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; min-height: 1px; position: relative; display: flex; width: 1140px;\">\r\n													<div class=\"elementor-column-wrap elementor-element-populated\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 10px; vertical-align: baseline; position: relative; display: flex; width: 1140px;\">\r\n														<div class=\"elementor-widget-wrap\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; position: relative; width: 1120px; flex-wrap: wrap; align-content: flex-start; display: flex;\">\r\n															<div class=\"elementor-element elementor-element-18e9a13 elementor-widget elementor-widget-text-editor\" data-element_type=\"widget\" data-id=\"18e9a13\" data-widget_type=\"text-editor.default\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: var( --e-global-typography-text-font-weight ); margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; position: relative; color: var( --e-global-color-text ); font-family: var( --e-global-typography-text-font-family ), Sans-serif; width: 1120px;\">\r\n																<div class=\"elementor-widget-container\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; transition: background 0.3s ease 0s, border 0.3s ease 0s, border-radius 0.3s ease 0s, box-shadow 0.3s ease 0s, -webkit-border-radius 0.3s ease 0s, -webkit-box-shadow 0.3s ease 0s;\">\r\n																	<div class=\"elementor-text-editor elementor-clearfix\" style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n																		<p style=\"box-sizing: border-box; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n																			เลือกอะไรที่ใช่ มันก็เป็นตัวช่วยที่ดี ให้เราได้จริงๆนะคะ ผลิตภัณฑ์ ทุกตัวใช้เวลาในการพัฒนาสูตร ที่ยาวนาน อย่างพิถีพิถัน จนได้สูตรที่ดีที่สุด และ มีการทดลอง โดยเจ้าของแบรนด์ บุคลากรในบริษัท และ อาสาสมัคร ทั้ง ใน LAB และ นอก LAB จริง !!!! ก่อนจำหน่าย</p>\r\n																	</div>\r\n																</div>\r\n															</div>\r\n														</div>\r\n													</div>\r\n												</div>\r\n											</div>\r\n										</div>\r\n									</section>\r\n								</div>\r\n							</div>\r\n						</div>\r\n					</div>\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</div>\r\n</section>\r\n<p>\r\n	&nbsp;</p>', '<h3>\r\n	&nbsp;</h3>\r\n<p>\r\n	LA MOCHA with origin of the first product, the legendary sunscreen that impresses to a large number of users</p>\r\n<p>\r\n	<a href=\"https://www.youtube.com/watch?v=BmMZZUTg8RQ\">https://www.youtube.com/watch?v=BmMZZUTg8RQ</a></p>\r\n<p>\r\n	Benefits from natural extracts of Thai gold. precious extract one of the products proud to present that many people don&#39;t know much before These extracts are used in many beauty and skin care innovations both in Thailand and abroad. Including blending with premium extracts of high quality from abroad such as gold that comes in the form of innovative nanoparticles and extracts that have many interesting researches in skin care to be radiant, youthful, smooth, radiant. sparkling aura</p>\r\n<p>\r\n	We select the best with attention to every detail for people who like natural style products, combining premium innovations and not sticking to brands. But I want a quality product that&#39;s worth the price, don&#39;t pay too much. But it&#39;s worth it. If you ask why not do 100% Nature Product at all, you have to explain that sometimes it&#39;s pure nature alone. just can&#39;t Solve various skin problems or are effective enough to sustain the beauty of our skin, but not 100% Nature</p>\r\n<p>\r\n	doesn&#39;t mean The product will not be good or dangerous because everything we study and choose the best one can give you peace of mind if the customer is not confident enough in our products, we understand, we know your heart. Customers can ask for details of products, extracts and sending LAB tests individually. We are happy</p>\r\n<p>\r\n	<img alt=\"\" src=\"/userfiles/images/01.png\" style=\"width: 602px; height: 602px;\" /></p>\r\n<p>\r\n	<img alt=\"\" src=\"/userfiles/images/02.png\" style=\"width: 602px; height: 316px;\" /></p>\r\n<p>\r\n	<img alt=\"\" src=\"/userfiles/images/03.png\" style=\"width: 602px; height: 217px;\" /></p>\r\n<p>\r\n	It&#39;s not easy. #Good things always have a source.</p>\r\n<p>\r\n	miracle of sunscreen that is more than a sunscreen from Lamocha (Lamocha)</p>\r\n<p>\r\n	&quot;Don&#39;t believe!!! until you try it.&rdquo;</p>\r\n<p>\r\n	&ldquo;The newest, hottest products, the most innovative of the sun industry</p>\r\n<p>\r\n	with up to 3 innovations in one tube, comes with skin food in cream, mixed with powder foundation in one tube.&rdquo;</p>\r\n<p>\r\n	LA MOCHA Perfect Smooth mouse SunScreen SPF 50 PA++++</p>\r\n<p>\r\n	1. Reduce the hassle of makeup procedures.</p>\r\n<p>\r\n	provide efficiency up to 3 properties in one step.</p>\r\n<p>\r\n	1.1 Deep nourishment</p>\r\n<p>\r\n	1.2. Protect the skin from UVA UVB with SPF 50 ++++.</p>\r\n<p>\r\n	1.3. The surface is smooth like silk powder. Make your skin look beautiful, clear, radiant, youthful, radiant. without powder A new dimension in sunscreen that you will love</p>\r\n<p>\r\n	2. Sweat-proof, waterproof, not stain.</p>\r\n<p>\r\n	3. Light and comfortable skin like applying powder. There is food on the face. Not aging quickly. Good protection. Cover 3 levels.</p>\r\n<p>\r\n	4. Can add over makeup Can be applied during the day without staining</p>\r\n<p>\r\n	5. Camouflage pores Blaine the skin to look smooth and detailed. There is aura all day.</p>\r\n<p>\r\n	&rdquo; Researched, searched, developed, and continued from the original formula for 5 years before becoming this formula.</p>\r\n<p>\r\n	Sunscreen extracts that are rich in skin nutrients, especially natural silkworm extracts.</p>\r\n<p>\r\n	Golden color of Thailand that is highly beneficial to the skin.</p>\r\n<p>\r\n	(Golden cocoon extract has research from many sources, such as the Ministry of Science of Thailand, it is popularly used in Japanese cosmeceuticals)</p>\r\n<p>\r\n	This is not just a sunscreen. But.. comes with the most comprehensive nourishment value for skin care. give radiance</p>\r\n<p>\r\n	Give your skin immediately after applying and take care of it continuously. Let you see the change in your skin that is more than beautiful skin, but is</p>\r\n<p>\r\n	&quot;Beautiful, smooth, clear, youthful, radiant skin&quot;</p>\r\n<p>\r\n	#LAMOCHAThailand</p>\r\n<p>\r\n	beginning</p>\r\n<p>\r\n	&ldquo;LA MOCHA (La Mocha )&rdquo; started from a crazy beauty and rich dreams. including wanting to look beautiful all the time, wanting beautiful skin, not wanting to get old quickly One common woman these days is Ploy (CEO LA MOCHA).</p>\r\n<p>\r\n	and the important point that causes premium skin care products of Thai brands It comes from wanting to prove the value to people that Thai products, Thai skin care, Thai extracts are good, not allergic to any brand in the world.</p>\r\n<p>\r\n	and can meet the needs of people who like to use premium products under Made in Thailand that can actually exist Because of the belief that most people like to look and think. Thai skin care produced in Thailand, Thai extracts, can&#39;t compete with skincare brands produced abroad and want to present Thainess, valuable, valuable, quality products delivered through products. This quality goes to countries all over the world too.</p>\r\n<p>\r\n	In fact, Ploy is a country boy or called a country boy. That&#39;s it. It&#39;s known as a country house. In the past, everything seemed outdated, old-fashioned, and ancient. Coupled with the hot weather, the sun was strong. air conditioner or air conditioner This is almost never touched by the gemstone. The skin of a country boy like us at that time would see that it was dry, rough, and the skin was unevenly speckled. It&#39;s not that pretty, but deep down, Ploy is a pretty fanatic. I like to look in the mirror and check my skin all day. I like watching TV. I like magazines. I like watching celebrities in those days. We started as teenagers. And we have a dream of wanting to be beautiful, have good skin, look good like that. With love, beauty, love, but no money, no choice. so take care of yourself Deep in my heart, I want to use good things to take care of my skin. We didn&#39;t know much about this area back then. We choose what we think is as good and safe as we can find. I made a lot of mistakes. Fortunately, the face is not broken. In addition to being a teenager at that time, he recovered quickly. When one day there is an opportunity and we are ready, we can create our own brand as we dreamed of without abandoning the original goal that we had in mind, which was skin care. Premium products of Thailand by Thai people, Thai brands, promoting Thai farmers. and have the opportunity to directly study a master&#39;s degree in cosmetic science Have talked to various factories, including many good Doctors who are Thai people. Learn with qualified teachers, who are also Thai people. makes us more confident in the talents of Thai people and Features of nature that exist around Thailand Innovation from Thai thinking including good Thai herbicides There are many that are invaluable. And some are even exported for use in foreign brands. and come back to sell Thai people at a high price that should be received again which may not be highlighted We want to be the people who highlight and bring good extracts, good innovations Made out in the name of a premium Thai brand that is valuable and proud to be able to So I try to learn, study, research with determination, focus and do it myself. I have used it myself continuously for many years and it gives me better results than I expected. from all the efforts that we have made Before getting this brand, there were mistakes, defects, improvements. I&#39;ve been here many times, which is why LA MOCHA brand is the ultimate Skincare (where LA is a French word. which is used before the female gender. The word MOCHA that many people often misread is Mocha.</p>\r\n<p>\r\n	The truth is that it comes from a collective abbreviation. Ploy&#39;s real English name is MANOCHA). Many people probably think why Thai brands don&#39;t use Thai names. Because Ploy thought at that time that the brand name should be easy to call, whether Thais or foreigners, familiar with the mouth, sound familiar, and adapted from our name, who was the founder of the brand, should be good, so I came up with this name. The brand LA MOCHA (La Mocha) focuses a lot on being a high-security skincare brand. any prohibited substance We don&#39;t even touch it. Regardless of the results, customer safety must come first. and try to choose using natural extracts from Thailand and study the ones being spoken It has been used for a long time and has some research supporting it, such as sericin (cocoon extract, silk glue water, etc. that have a lot of research mentions) and combined with specific innovations with our unique formula development techniques, both texture and properties, suitable for long-term continuous use In the value that the customer receives that is worth more than the price, 1 product will always have more than 1 feature. choose what is right It&#39;s also a good helper. We really can. Every product takes a long time to develop the formula meticulously. until the best formula and has been tested by the brand owner Personnel in the company and volunteers both in LAB and outside LAB actually !!!! before selling</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<img alt=\"\" src=\"/userfiles/images/04.png\" style=\"width: 602px; height: 401px;\" /></p>\r\n<p>\r\n	It&#39;s not easy, but I do it because I really love and think that there must be women like us. who want to invent a special good formula that makes us beautiful girls for a long time, but not everyone has the convenience Come to do it here, everyone, we would like to represent women who have the same style as us, so we started to continue to study, research, improve, develop continuously until selected as a Premium Product that has passed international standards that are supported. and passed international standards until it is a product that is sold both in and exported abroad</p>\r\n<p>\r\n	<img alt=\"\" src=\"/userfiles/images/05.png\" style=\"width: 602px; height: 753px;\" /></p>\r\n<p>\r\n	<img alt=\"\" src=\"/userfiles/images/06.png\" style=\"width: 602px; height: 451px;\" /></p>\r\n<p>\r\n	Every product, every product has been tested by myself, 100% can be used as long as 1-5 It&#39;s been a year before it comes out as a product, so Ploy is confident. In every product of LA MOCHA that it is a product. Premium grade quality over price and also designed to have quality packaging that keeps the extracts well and Beautiful, luxurious, meet the needs of customers Those who like premium luxury are clearly different from the market. More importantly, LA MOCHA intends to help Thai farmers. Therefore, we use good raw materials and high quality products from Thai agriculture as well. Agree that there are still many foreign extracts, imported formula fibers are necessary for our specific formula technique, but it is considered that we try to choose the best extracts from Thailand to use and glorify as much as possible. presented in various media in order not to forget to promote Thai people together and being a skincare brand Thai blood Accept that it is an investment of personal money. We started with not very high capital. Compared to the start of big brands, big companies But he did his best, doing small things but focusing on quality. gradual Focus on word-of-mouth marketing or tell me more until expanding and growing up to the present by marketing mainly from online channels and stepping into offline quality beauty stores in some areas in order to access lifestyles to meet the needs of consumers and is accepted in the market more reliable until we are able to produce premium quality products of international standards until now and is accepted Good feedback from users</p>\r\n<p>\r\n	<img alt=\"\" src=\"/userfiles/images/07.png\" style=\"width: 602px; height: 753px;\" /></p>\r\n<p align=\"center\">\r\n	<img alt=\"\" src=\"/userfiles/images/08.png\" style=\"width: 498px; height: 331px;\" /><img alt=\"\" src=\"/userfiles/images/09.png\" style=\"width: 470px; height: 470px;\" /></p>\r\n<p align=\"center\">\r\n	<img alt=\"\" src=\"/userfiles/images/10.png\" style=\"width: 559px; height: 372px;\" /></p>\r\n<p align=\"center\">\r\n	Ladies, don&#39;t stop being beautiful, don&#39;t give in to old age, keep your youthfulness as long as possible. that we can hold I believe everyone knows it&#39;s really important. probably don&#39;t need to explain</p>\r\n<p>\r\n	and not only women In modern times, regardless of gender Want to have beautiful, healthy skin, use premium products with standards that can Take care of our skin to look good for a long time. without harming health and causing harm and we believe dealer will be able to pass on good values This beauty experience is given to young women all over the world and earns them a sustainable growth that they are truly proud of.</p>\r\n<p>\r\n	<img alt=\"\" src=\"/userfiles/images/11.png\" style=\"width: 602px; height: 451px;\" /></p>\r\n<p>\r\n	<img alt=\"\" src=\"/userfiles/images/12.png\" style=\"width: 602px; height: 545px;\" /></p>\r\n<p>\r\n	<img alt=\"\" src=\"/userfiles/images/13.png\" style=\"width: 602px; height: 422px;\" /></p>\r\n<p>\r\n	<img alt=\"\" src=\"/userfiles/images/14.png\" style=\"width: 602px; height: 451px;\" /></p>\r\n<p>\r\n	<img alt=\"\" src=\"/userfiles/images/15.png\" style=\"width: 602px; height: 602px;\" /></p>\r\n<p>\r\n	<img alt=\"\" src=\"/userfiles/images/16.png\" style=\"width: 602px; height: 602px;\" /></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Premium Product All products of LA MOCHA THAILAND</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Satisfaction with the product, customers are more than 99% satisfied.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	https://www.youtube.com/watch?v=lUW8TseRkXA</p>\r\n<p>\r\n	https://www.youtube.com/watch?v=nLJEAsPr2GA&amp;t=13s</p>\r\n<p>\r\n	<a href=\"https://www.youtube.com/watch?v=tTfZYE7sOMc&amp;t=4s\">https://www.youtube.com/watch?v=tTfZYE7sOMc&amp;t=4s</a></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Inquire about product information, opening a product bill Being an additional franchise branch directly at</p>\r\n<p>\r\n	Email: lamochathailand@gmail.com&nbsp;</p>', '<h3>\r\n	&nbsp;</h3>\r\n<p>\r\n	LA MOCHA 起源于第一款产品，给广大用户留下深刻印象的传奇防晒霜</p>\r\n<p>\r\n	<a href=\"https://www.youtube.com/watch?v=BmMZZUTg8RQ\">https://www.youtube.com/watch?v=BmMZZUTg8RQ</a></p>\r\n<p>\r\n	受益于泰国黄金的天然提取物。珍贵的提取物 很多人以前不太了解的产品之一 这些提取物被用于许多美容和护肤品</p>\r\n<p>\r\n	泰国和国外的创新。包括与来自国外的优质提取物混合，例如以创新形式出现的黄金</p>\r\n<p>\r\n	纳米粒子和提取物在皮肤护理中有许多有趣的研究，使其容光焕发，年轻，光滑，容光焕发。闪闪发光的光环</p>\r\n<p>\r\n	我们为喜欢自然风格产品的人们选择最好的，注重每一个细节，结合优质的创新</p>\r\n<p>\r\n	并且不拘泥于品牌。但我想要一个物有所值的优质产品，不要付出太多。但这是值得的。如果你问为什么根本不做 100% Nature Product，你必须解释说有时它只是纯粹的自然。只是不能解决各种皮肤问题或足以维持我们皮肤的美丽，但不是 100% Nature</p>\r\n<p>\r\n	不代表产品不好也不危险，因为如果客户对我们的产品没有足够的信心，我们研究并选择最好的可以让您安心，我们理解，我们了解您的心。客户可以单独询问产品、提取物和发送 LAB 测试的详细信息。我们很开心</p>\r\n<p>\r\n	<img alt=\"\" src=\"/userfiles/images/01.png\" style=\"width: 602px; height: 602px;\" /></p>\r\n<p>\r\n	<img alt=\"\" src=\"/userfiles/images/02.png\" style=\"width: 602px; height: 316px;\" /></p>\r\n<p>\r\n	<img alt=\"\" src=\"/userfiles/images/03.png\" style=\"width: 602px; height: 217px;\" /></p>\r\n<p>\r\n	这并不容易。 #好东西总有源头。</p>\r\n<p>\r\n	防晒霜的奇迹，不仅仅是来自 Lamocha (Lamocha) 的防晒霜</p>\r\n<p>\r\n	&ldquo;不要相信！！！在你尝试之前。&rdquo;</p>\r\n<p>\r\n	&ldquo;最新、最热的产品，最具创新性的太阳能行业</p>\r\n<p>\r\n	一管内含多达 3 项创新，一管内配有护肤霜和粉底液。&rdquo;</p>\r\n<p>\r\n	LA MOCHA Perfect Smooth mouse SunScreen SPF 50 PA++++</p>\r\n<p>\r\n	1.减少化妆程序的麻烦。</p>\r\n<p>\r\n	一步提供多达 3 个属性的效率。</p>\r\n<p>\r\n	1.1 深层滋养</p>\r\n<p>\r\n	1.2.使用 SPF 50 ++++ 保护皮肤免受 UVA UVB 的伤害。</p>\r\n<p>\r\n	1.3.表面光滑如丝粉。让你的皮肤看起来很漂亮，</p>\r\n<p>\r\n	清澈，容光焕发，年轻，容光焕发。无粉防晒霜的新维度，你会喜欢</p>\r\n<p>\r\n	2. 防汗、防水、不染色。</p>\r\n<p>\r\n	3. 皮肤轻盈舒适，如涂粉。脸上有食物。不会很快衰老。良好的保护。覆盖3个级别。</p>\r\n<p>\r\n	4. 可以补妆 白天也可以涂不掉色</p>\r\n<p>\r\n	5. 伪装毛孔 Blaine 皮肤看起来光滑细致。整天都有气场。</p>\r\n<p>\r\n	&rdquo; 从原来的配方研究、搜索、开发、延续了5年才成为这个配方。</p>\r\n<p>\r\n	富含皮肤营养成分的防晒提取物，尤其是天然蚕提取物。</p>\r\n<p>\r\n	泰国的金色，对皮肤非常有益。</p>\r\n<p>\r\n	（金茧提取物有很多来源的研究，如泰国科学部，广泛用于日本药妆品）</p>\r\n<p>\r\n	这不仅仅是防晒霜。但是..带有最全面的护肤营养价值。光彩照人</p>\r\n<p>\r\n	涂抹后立即给您的皮肤并持续护理。让你看到你的皮肤变化不仅仅是美丽的皮肤，而是</p>\r\n<p>\r\n	&ldquo;美丽、光滑、透明、年轻、容光焕发的肌肤&rdquo;</p>\r\n<p>\r\n	#LAMOCHAT泰国</p>\r\n<p>\r\n	开始</p>\r\n<p>\r\n	&ldquo;LA MOCHA（拉摩卡）&rdquo;从一个疯狂的美丽和丰富的梦想开始。包括想要一直看起来很漂亮，想要美丽的皮肤，不想很快变老 现在一个常见的女人是Ploy（CEO LA MOCHA）。</p>\r\n<p>\r\n	以及导致泰国品牌护肤品优质的重要原因 来自于想向人们证明泰国产品、泰国护肤品、泰国精华好，对世界上任何品牌都不过敏的价值。</p>\r\n<p>\r\n	并且可以满足喜欢使用真正可以存在的泰国制造下的优质产品的人们的需求，因为相信大多数人都喜欢看和想。泰国生产的泰国护肤品，泰国提取物，无法与国外生产的护肤品牌竞争，想要通过产品呈现泰国性，有价值，有价值，优质的产品。这种品质也适用于世界各国。事实上，Ploy 是一个乡村男孩或被称为乡村男孩。而已。它被称为乡间别墅。过去，一切都显得过时、过时、古老。再加上炎热的天气，太阳很强。空调或空调这几乎从没碰过由宝石。像我们那个时候的乡下小子，皮肤会看出来是干燥、粗糙、皮肤不均匀的斑点。它不是那么漂亮，但在内心深处，Ploy 是一个非常狂热的人。我喜欢照镜子，整天检查我的皮肤。我喜欢看电视。我喜欢杂志。我喜欢看那个年代的名人。我们从青少年开始。我们有一个梦想，想要变得美丽，拥有好皮肤，看起来像那样。有爱，有美，有爱，却没有钱，别无选择。所以照顾好自己在我的内心深处，我想用好的东西来照顾我的皮肤。那时我们对这个地区了解不多。我们选择我们认为尽可能好的和安全的东西。我犯了很多错误。还好脸没有破。加之当时还是少年，他恢复得很快。当有一天有机会，我们准备好了，我们可以在不放弃最初的目标的情况下，按照我们的梦想创建自己的品牌，这是皮肤护理。泰国人的泰国优质产品，泰国品牌，推广泰国农民。并且有机会直接攻读化妆品科学硕士学位 跟各个工厂谈过，包括很多泰国人的好医生。与合格的老师一起学习，他们也是泰国人人们。让我们对泰国人民的才能和泰国周围存在的自然特征更有信心 来自泰国思维的创新，包括好的泰国除草剂 有许多是无价的。有些甚至出口国外品牌使用。回来以高价卖给泰国人，应该再次收到，可能不会突出我们希望成为突出和带来好的提取物，好的创新的人以泰国优质品牌的名义制造，有价值和为能够做到而感到自豪所以我尝试与下定决心，专注，自己去做。我已经连续使用了很多年，给我的结果比我自己想要的好。过这里很多次，这就是为什么 LA MOCHA 品牌是终极护肤品（LA 是词汇。在女性之前使用。很多人经常误读的 MOCHA 这个词就是 Mocha。</p>\r\n<p>\r\n	事实是，它来自一个集体缩写。 Ploy的真实英文名是MANOCHA）。很多人可能会想，为什么泰国品牌不用泰国名字。因为当时Ploy认为品牌名称应该好叫，不管是泰国人还是外国人，口耳相传，听上去耳熟能详，改编自我们这个品牌创始人的名字，应该不错，所以才想出了这个名字。品牌LA MOCHA（拉摩卡）非常注重做一个高安全性的护肤品牌。任何违禁物质我们甚至不碰它。无论结果如何，客户安全都必须放在首位。并尽量选择使用泰国的天然提取物，研究一下说出来的，用了很长时间，也有一些研究支持，比如丝胶（蚕茧提取物、蚕丝胶水等有很多研究提到的） ) 并结合特定的创新与我们独特的配方开发技术，话说，一些研究对象可以选择使用泰国的天然提取物，然后用很长时间结合蚕丝，有研究支持丝胶（茧丝胶等）的结果。独特的菜式开发技术，</p>\r\n<p>\r\n	并根据配方品牌测试公司内部人员和实验室内外专家的！！！！<img alt=\"\" src=\"/userfiles/images/04.png\" style=\"width: 602px; height: 401px;\" /></p>\r\n<p>\r\n	这并不容易，但我认为是因为我真的很爱认为有这样的女人。谁想我们发明一种特殊的食谱，让美丽的女孩长久，但不是每个人都有方便来这里做，每个人，我们想&nbsp; 与我们有相同风格的女性，所以我们开始不断地研究、研究、改进、不断发展，直到被选为通过国际标准支持的优质产品。并通过国际标准，直至成为内销外销的产品</p>\r\n<p>\r\n	<img alt=\"\" src=\"/userfiles/images/05.png\" style=\"width: 602px; height: 753px;\" /></p>\r\n<p>\r\n	<img alt=\"\" src=\"/userfiles/images/06.png\" style=\"width: 602px; height: 451px;\" /></p>\r\n<p>\r\n	每一款产品，每一款产品都经过我自己的测试，100%可以用，只要1-5作为产品出来已经一年了，所以Ploy有信心。在 LA MOCHA 的每一件产品中，它都是一个产品。优质的质量超过价格，还设计有优质的包装，使提取物保持良好，美观，奢华，满足&nbsp; 客户的需求 那些喜欢高级奢侈品的人显然与市场不同。更重要的是，LA MOCHA 意在帮助泰国农民。因此，我们也使用来自泰国农业的优质原材料和优质产品。同意国外提取物还有很多，我们具体配方需要进口配方纤维技术，但我们认为我们尽量选择泰国最好的提取物来尽可能地使用和美化。出现在各种媒体上，为了不忘记一起宣传泰国人，成为护肤品牌泰国血接受这是个人金钱的投资。我们一开始的资金并不高。相比起大品牌，大公司，但他尽力了，做小事但注重质量。逐渐专注于口碑营销或告诉我更多直到扩大和成长到现在，主要从线上渠道进行营销，并在部分地区进入线下优质美容店，以接触生活方式以满足消费者的需求，并且是被市场接受 更可靠 直到我们能够生产出符合国际标准的优质产品 并被接受 来自用户的良好反馈&nbsp;</p>\r\n<p align=\"center\">\r\n	<img alt=\"\" src=\"/userfiles/images/07.png\" style=\"width: 602px; height: 753px;\" /><img alt=\"\" src=\"/userfiles/images/08.png\" style=\"width: 498px; height: 331px;\" /><img alt=\"\" src=\"/userfiles/images/09.png\" style=\"width: 470px; height: 470px;\" /></p>\r\n<p align=\"center\">\r\n	&nbsp;</p>\r\n<p align=\"center\">\r\n	<img alt=\"\" src=\"/userfiles/images/10.png\" style=\"width: 559px; height: 372px;\" /></p>\r\n<p>\r\n	女士们，不要停止美丽，不要屈服于老年，尽可能保持青春。我们可以持有我相信每个人都知道这非常重要。可能不需要解释</p>\r\n<p>\r\n	不仅是女性 在现代，不分性别 想要拥有美丽健康的肌肤，请使用符合标准的优质产品 呵护我们的肌肤，让肌肤长久保持美丽</p>\r\n<p>\r\n	时间。在不损害健康和造成伤害的情况下，我们相信经销商将能够传递良好的价值观这种美容体验提供给世界各地的年轻女性，并为她们赢得了真正引以为豪的可持续发展。</p>\r\n<p align=\"center\">\r\n	<img alt=\"\" src=\"/userfiles/images/11.png\" style=\"width: 602px; height: 451px;\" /></p>\r\n<p align=\"center\">\r\n	<img alt=\"\" src=\"/userfiles/images/12.png\" style=\"width: 602px; height: 545px;\" /></p>\r\n<p align=\"center\">\r\n	<img alt=\"\" src=\"/userfiles/images/13.png\" style=\"width: 602px; height: 422px;\" /></p>\r\n<p align=\"center\">\r\n	<img alt=\"\" src=\"/userfiles/images/14.png\" style=\"width: 602px; height: 451px;\" /></p>\r\n<p align=\"center\">\r\n	&nbsp;</p>\r\n<p align=\"center\">\r\n	<img alt=\"\" src=\"/userfiles/images/15.png\" style=\"width: 602px; height: 602px;\" /></p>\r\n<p align=\"center\">\r\n	<img alt=\"\" src=\"/userfiles/images/16.png\" style=\"width: 602px; height: 602px;\" /></p>\r\n<p align=\"center\">\r\n	优质产品 LA MOCHA THAILAND 的所有产品</p>\r\n<p align=\"center\">\r\n	&nbsp;</p>\r\n<p align=\"center\">\r\n	对产品的满意度，客户满意度99%以上。</p>\r\n<p align=\"center\">\r\n	https://www.youtube.com/watch?v=lUW8TseRkXA</p>\r\n<p>\r\n	https://www.youtube.com/watch?v=nLJEAsPr2GA&amp;t=13s</p>\r\n<p>\r\n	<a href=\"https://www.youtube.com/watch?v=tTfZYE7sOMc&amp;t=4s\">https://www.youtube.com/watch?v=tTfZYE7sOMc&amp;t=4s</a></p>\r\n<p>\r\n	查询产品信息，开立产品账单 直接在</p>\r\n<p>\r\n	Email: <a href=\"mailto:lamochathailand@gmail.com\">lamochathailand@gmail.com</a></p>\r\n<br />', '<h3>\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">เนื้อหาเกี่ยวกับผลิตภัณฑ์</font></font></font></font></h3>\r\n<p>\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">LA MOCHA สตาร์ตติต ติติง ติติง ติติง ติง ติ่มซำ ท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้า ท้าท้าท้าท้าท้าคุณของคุณ</font></font></font></font></p>\r\n<p>\r\n	<iframe class=\"embed\" src=\"https://www.youtube.com/embed/jTk6mZfpA7k\"></iframe></p>\r\n<p>\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">คุณประโยชน์จากไหมรังไหมของไทย สารสกัดค่าพรีเมี่ยมที่คุ้มราคา ที่ค้นเจอที่เล...ีมมากก สารสกัดที่พิเศษถูกใน คุ้มเกินคุ้ม และคุ้มเกินคุ้ม ...</font></font></font></font></p>\r\n<p>\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/9.jpg\')}}\" /></p>\r\n<p>\r\n	เราเลือกสรร สิ่งที่ดี ที่สุด ด้วยความใส่ใจทุกรายละเอียด ของ คนที่ชอบสินค้าสไตล์ ธรรมชาติ ผสมผสาน นวัตกรรม แบบพรีเมี่ยม และ ไม่ยึดติดแบรนด์ แต่อยากได้สินค้าที่คุณภาพ สมราคา ไม่ต้องจ่ายแพงเกิน แต่คุ้มเกินค่า ถ้าถามว่า ทำไม ไม่ทำ Nature Product 100 % ไปเลยหล่ะ ก็ต้องอธิบายว่า บางที ธรรมชาติ อย่างเดียวเพียวๆล้วนๆ ก็ไม่ได้สามารถ แก้ปัญหาผิวต่างๆ หรือ มีประสิทธิภาพมากพอ ที่จะ ยื้อความสาว สวย ใส ของผิวเราไว้ได้ แต่การ ไม่ Nature 100 % ก็ไม่ได้แปลว่า สินค้าจะไม่ดี หรือ อันตรายนะคะ เพราะ ทุกอย่าง เราศึกษาและเลือกสิ่งที่ดีที่สุด ให้คุณแล้ว อุ่นใจได้ หากคุณลูกค้ายังไม่มั่นใจในสินค้าผลิตภัณฑ์ ของเราพอ เราเข้าใจ เรารู้ใจคุณค่ะ คุณลูกค้าสามารถขอดูรายละเอียด สินค้า สารสกัด และ การส่งทดสอบ LAB เป็นรายตัวได้เลยค่ะ เรายินดี ^^</p>\r\n<div class=\"pro_about\">\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/10.jpg\')}}\" /></div>\r\n<h5>\r\n	มหัศจรรย์แห่งครีมกันแดด ที่ทำไม๊ ทำไม ถึงขายดีนักหนา ไม่เคยตก</h5>\r\n<div class=\"wonderful\">\r\n	<h6>\r\n		ไม่ได้ง่าย #ของดีมักมีที่มา มหัศจรรย์แห่งครีมกันแดด ที่เป็นมากกว่าครีมกันแดด จาก Lamocha ( ลาโมช่า )</h6>\r\n	<h6>\r\n		&quot; อย่าเชื่อ!!! จนกว่าจะได้ลอง &quot;</h6>\r\n	<h6>\r\n		&ldquo;ใหม่ล่าสุด สินค้ามาแรง นวัตกรรมสุดล้ำ แห่งวงการกันแดด</h6>\r\n	<h6>\r\n		ที่มีถึง 3 นวัตกรรม ในหลอดเดียว มาพร้อมอาหารผิวในเนื้อครีมผสมรองพื้นแป้งไว้ในหลอดเดียว&rdquo; LA MOCHA Perfect Smooth mouse SunScreen SPF 50 PA ++++</h6>\r\n	<h6>\r\n		1. ลดขั้นตอนความยุ่งยากในการแต่งหน้า. ให้ประสิทธิภาพ ถึง3คุณสมบัติ ในขั้นตอนเดียว.</h6>\r\n	<h6 style=\"padding-left: 30px;\">\r\n		1.1 บำรุงล้ำลึก</h6>\r\n	<h6 style=\"padding-left: 30px;\">\r\n		1.2.ปกป้องผิวหน้าจาก UVA UVB ด้วยSPF 50++++.</h6>\r\n	<h6 style=\"padding-left: 30px;\">\r\n		1.3.เคลือบผิวละมุนดุจผงแป้งไหมทอง ให้ผิวดูสวยใส ผุดผ่อง อ่อนเยาว์เจิดจรัส โดยไม่ต้องทาแป้ง มิติใหม่ของครีมกันแดด ที่คุณจะต้องหลงรัก</h6>\r\n	<h6>\r\n		2. กันเหงื่อกันน้ำไม่เป็นคราบ.</h6>\r\n	<h6>\r\n		3. เบาสบายผิวเหมือนทาแป้งมีอาหารผิวหน้าไม่แก่เร็ว ปกป้องดี ปกปิด 3 ระดับ.</h6>\r\n	<h6>\r\n		4.เติมทับเมคอัพได้ ทาทับระหว่างวันได้ไม่เกิดคราบ</h6>\r\n	<h6>\r\n		5. อำพรางรูขุมขน เบลินผิวให้ดูเรียบเนียนละเอียด มีออร่าตลอดวัน.</h6>\r\n	<h6>\r\n		&quot; ทำการศึกษา ค้นหา พัฒนา ต่อยอด จากสูตรดั้งเดิม มาถึง 5 ปี กว่าจะมาเป็น กันแดด สูตรนี้</h6>\r\n	<h6>\r\n		สารสกัด เนื้อกันแดด ที่อุดมไปด้วย คุณค่า อาหารผิว โดยเฉพาะ สารสกัด รังไหมธรรมชาติ</h6>\r\n	<h6>\r\n		สีทอง ของไทย ที่มีประโยชน์ต่อผิวอย่างสูง</h6>\r\n	<h6>\r\n		( สารสกัด รังไหมสีทอง มีงานวิจัยจากหลายแหล่ง รองรับเช่น กระทรวงวิทยาศาสตร์ ของไทย เป็นที่ นิยมใช้ในเวชสำอางญี่ปุ่น )</h6>\r\n	<h6>\r\n		ตัวนี้ไม่ใช่แค่กันแดด แต่..มาพร้อมคุณค่าการบำรุงครอบคลุมการดูแลผิวขั้นสุด มอบความเจิดจรัส</h6>\r\n	<h6>\r\n		ให้ผิวคุณหลังทาทันทีและดูแลอย่างต่อเนื่อง ให้คุณเห็นถึงความเปลี่ยนแปลงของผิวที่มากกว่าผิวสวยใส แต่เป็น</h6>\r\n	<h6>\r\n		&quot; ผิวสวย ละมุน เนียนใส อ่อนเยาว์ เจิดจรัส &quot;</h6>\r\n	<h6>\r\n		#LAMOCHAThailand</h6>\r\n</div>\r\n<h5>\r\n	จุดเริ่มต้น</h5>\r\n<div class=\"wonderful\">\r\n	<h6>\r\n		&ldquo;LA MOCHA&rdquo; เริ่มจากความรักและความหลงใหลเกี่ยวกับ Skincare ของ &ldquo;พลอย&rdquo; ซึ่งเป็นเพียงแม่บ้านธรรมดาๆ คนหนึ่งที่ไม่ได้ร่ำรวยเงินทอง แต่พลอยร่ำรวยความฝัน นะคะ</h6>\r\n	<h6>\r\n		พลอยเป็นเด็กต่างจังหวัดหรือเรียกว่า เด็กบ้านนอก นั่นแหละคะ ขึ้นชื่อว่า บ้านนอก ทุกอย่างก็ดูล้าสมัย เชย โบราณ รวมถึงผิวพรรณของเด็กบ้าน</h6>\r\n	<h6>\r\n		นอก ที่เรามักจะเห็นว่า แห้ง หยาบกระด้าง ไม่สวย พลอยก็เป็นเช่นนั้น ด้วยความที่รักสวย รักงาม แต่ เหมือนโอกาส ในการจะซื้อผลิตภัณฑ์ แพงๆ</h6>\r\n	<h6>\r\n		ราคาสูงๆ มันดูจะยากซะเหลือเกิน เป็นความฝังใจเล็กๆ ที่เป็นแรงบันดาลใจอยากดูแลตัวเองด้วยผลิตภัณฑ์ดีๆ. ในเวลานั้นจึงดูแลตัวเองโดยศึกษา</h6>\r\n	<h6>\r\n		คุณสมบัติของธรรมชาติที่มีอยู่รอบตัวที่เราสามารถ ทำได้ แต่ก็ทำให้เราได้ค้นพบ อะไรบางอย่าง</h6>\r\n	<h6>\r\n		พลอยเอง ก็ได้โอกาสได้ศึกษา และเรียนรู้เพิ่มเติม เพื่อค้นคว้า วิจัย ให้ผลิตภัณฑ์ LaMocha ที่ออกมานั้น มีทั้งคุณภาพและคุณประโยชน์ต่อผู้ใช้</h6>\r\n	<h6>\r\n		สูงสุด ย้ำ!!! ภายในราคา ที่คุณลูกค้าจะคุ้มค่าที่สุด ไม่แพงเกินจริงไป ให้ความสำคัญ ที่คุณภาพ สินค้าและ สารสกัด เป็นหลัก</h6>\r\n	<h6>\r\n		จุดนี้ จากทั้งการทดลอง และ ประสบการณ์ความรู้เฉพาะด้าน ที่ได้ทำการศึกษาอย่างจริงจัง ในด้าน วิทยาศาสตร์ เครื่องสำอาง ทำให้พลอยเข้าใจ</h6>\r\n	<h6>\r\n		และ รู้ความจริงในจุดที่ ว่า ผู้หญิงที่ไม่สวย ก็สวยได้ !! หากดูแลผิวพรรณ อย่างต่อเนื่อง ด้วยสารสกัดจากธรรมชาติที่พรีเมี่ยม ใน % และ ความ</h6>\r\n	<h6>\r\n		ลงตัวของสูตร ที่เหมาะสม ก็จะได้รับ ความล้ำค่าของผลิตภัณฑ์ นั้น ต่อผิวแบบเต็มๆ โดย ไม่ต้องจ่ายของแพงเกินความจำเป็น หากคุณไม่ได้ยึด</h6>\r\n	<h6>\r\n		ติดกับแบรนด์ ใดแบรนด์หนึ่งที่ชื่อดัง หรือ เน้นการตลาดเท่านั้น ... แต่เป็นราคา ที่สมเหตุสมผล สามารถใช้ของระดับพรีเมี่ยม ไฮเอนด์ได้เช่นกัน</h6>\r\n	<h6>\r\n		หากคุณมีความต้องการเดียวกัน LA MOCHA คือตัวเลือกที่ดี ตัวนึงสำหรับคุณค่ะ ^^</h6>\r\n	<h6>\r\n		** หลายคนที่ไม่เคยใช้ อาจจะมีคำถามในใจ หรือ บางเสียง อาจจะบ่นหรือมองว่าแพง เราขออธิบายแบบนี้ค่ะ เราเน้นของดีพรีเมี่ยม ในราคาคุ้มค่าค่ะ เรียนตามตรงว่า เราไม้เน้นถูก หรือ เน้นแพง เราเน้น คุณค่า คุ้มค่า สมราคา ไม่เกินจริง **</h6>\r\n	<h6>\r\n		และ ประสบการณ์ ที่ผ่านมา มันทำให้เรารับรู้เสียง ความพึงพอใจ จากลูกค้าที่ใช้ว่า อะไร ที่ซื้อมา แล้วคุ้ม ได้ใช้ ถูกใจ คือไม่แพง เราเลยมีกำลังใจ คง Concept นี้ต่อไป โดยไม่เน้น การ ลดคุณค่า เพื่อลดราคา เท่านั้นค่ะ ***</h6>\r\n	<h6>\r\n		นี่เรา ยังไม่รวม ค่าใช้จ่ายในการ พัฒนาต่างๆ ต่อยอด การทุ่มเท ระยะเวลา และอีกมากมาย นะคะ เพราะเรา ไม่อยากเอามาคิดเป็นต้นทุนสินค้า แต่เรา อยากเอามันมาเป็น คุณค่าทางแบรนด์ ที่หวังเพียงให้ คุณลูกค้า ใช้สินค้าเราไปนานๆ ก็พอ ^^</h6>\r\n</div>\r\n<p>\r\n	เลือกอะไรที่ใช่ มันก็เป็นตัวช่วยที่ดี ให้เราได้จริงๆนะคะ ผลิตภัณฑ์ ทุกตัวใช้เวลาในการพัฒนาสูตร ที่ยาวนาน อย่างพิถีพิถัน จนได้สูตรที่ดีที่สุด และ มีการทดลอง โดยเจ้าของแบรนด์ บุคลากรในบริษัท และ อาสาสมัคร ทั้ง ใน LAB และ นอก LAB จริง !!!! ก่อนจำหน่าย</p>\r\n<div class=\"pro_about\">\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/11.jpg\')}}\" /></div>\r\n<p>\r\n	ไม่ได้ง่าย แต่ทำเพราะใจรัก จริงๆ และคิดว่า ต้องมีผู้หญิงแบบเรา ที่อยากคิดค้นสูตร ดีๆ พิเศษๆ ที่ทำให้เรา สาวสวย ไปนานๆ แต่ทุกคนไม่ได้มีความสะดวก จะมาทำตรงนี้ทุกคน นั้นเรา ขอเป็นตัวแทน ผู้หญิงที่มีสไตล์เดียวกันกับเรา เลยละกัน เลยเริ่ม ต่อยอด ศึกษา ค้นคว้า ปรับปรุง พัฒนา อย่างต่อเนื่อง จนคัดสรร ออกมาเป็น Premium Product ที่ ผ่านมาตรฐาน สากล ที่ได้รับการรองรับ และ ผ่านมาตรฐาน ระดับสากล จนเป็นสินค้า ที่ จำหน่ายทั้งใน และ ส่งออก ต่างประเทศ</p>\r\n<div class=\"pro_about\">\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/12.jpg\')}}\" /> <img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/13.jpg\')}}\" /></div>\r\n<h5>\r\n	จึงเป็นที่มา แบรนด์ LA MOCHA</h5>\r\n<div class=\"wonderful\">\r\n	<h6>\r\n		แบรนด์ LA MOCHA เป็น สุดยอด Skincare ที่มีความปลอดภัย และ คุณภาพสูง ใช้สารสกัดจากธรรมชาติ ผสมผสานนวัตกรรมล้ำๆ จากฝีมือผู้เชี่ยวชาญคนไทย และมีงานวิจัยรองรับ ในราคาสมเหตุสมผล</h6>\r\n	<h6>\r\n		เมื่อทดลองใช้เอง 100% พลอยจึงมั่นใจ ในผลิตภัณฑ์ทุกตัวของ LA MOCHA ว่าเป็นสินค้า เกรดพรีเมี่ยม คุณภาพเกินราคา มีความแตกต่างจากท้องตลาด วัตถุดิบที่นำมาใช้ มีปลอดภัยสูง มีงานวิจัยรองรับ ที่สำคัญ LA MOCHA ตั้งใจที่จะช่วยเกษตรกรไทย จึงเลือกใช้วัตถุดิบ และผลผลิตดีๆ มีคุณภาพสูงจากเกษตรไทยด้วยค่ะ</h6>\r\n	<h6>\r\n		เราเริ่มต้นด้วยเงินทุนไม่สูงมากนัก ค่อยๆ ขยายและเติบโตขึ้นจนถึงปัจจุบัน โดยทำการตลาดจากช่องทางออนไลน์เป็นหลัก และ ก้าวสู่ทางออฟไลน์ Beauty store คุณภาพ ในบางพื้นที่ เพื่อให้เข้าถึง Lifestyle ตอบสนองได้ตรงความต้องการของผู้บริโภค</h6>\r\n	<h6>\r\n		ปัจจุบัน แบรนด์ LA MOCHA (ลา โมช่า) เติบโตอย่างต่อเนื่อง ทั้งแบบออฟไลน์และออนไลน์ อีกทั้งได้ขยายออกไปสู่ต่างประเทศ ทั้ง ลาว กัมพูชา มาเลเซีย ออสเตรเลีย อเมริกา สวิสเซอร์แลนด์ และ ยังมีแผนที่จะขยายสินค้าไปยังประเทศอื่นๆ อย่างต่อเนื่องอีกด้วยค่ะ</h6>\r\n	<h6>\r\n		เพราะ &ldquo;รวยความฝัน&rdquo; จึงมีวันนี้ พลอยยินดีต้อนรับตัวแทนและลูกค้าทุกท่าน ให้มาเป็นครอบครัว LA MOCHA นะคะ ช่วยกันส่งต่อผลิตภัณฑ์ดีๆ มีคุณภาพ ในราคาไม่แรง ให้คนทั่วโลกได้ใช้ด้วยนะคะ</h6>\r\n	<h6>\r\n		หากสนใจเป็นตัวแทนจำหน่าย คลิกสมัครเลยค่ะ &gt;&gt; <a href=\"\">https://forms.gle/WNFQPEfeWtk4BP559</a></h6>\r\n</div>\r\n<div class=\"pro_about\">\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/14.jpg\')}}\" /> <img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/15.jpg\')}}\" /></div>\r\n<p>\r\n	ผู้หญิง อย่าหยุดสวย อย่ายอมแก่ ถนอมความสาว ไว้ให้นานที่สุดค่ะ ที่เราจะยื้อได้ เชื่อว่าทุกคนรู้ว่ามันสำคัญจริงๆ คงไม่ต้องอธิบาย</p>\r\n<div class=\"pro_about\">\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/16.jpg\')}}\" /> <img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/17.jpg\')}}\" /></div>\r\n<p>\r\n	ส่งออกไปยังต่างประเทศ ต่างๆ ทั้งแบบ Beauty และ Online ผ่าน Shipping ก็มีหมดค่ะ</p>\r\n<div class=\"pro_about\">\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/18.jpg\')}}\" /></div>\r\n<p>\r\n	ปัจจุบัน LA MOCHA มีสินค้า มากมายหลากหลายรายการ ดูรายละเอียดสินค้าเพิ่มเติม หรือ สั่งซื้อสินค้า คลิก &gt;&gt; <a href=\"\">https://www.lamocha.co.th/shop/</a></p>\r\n<p>\r\n	ชมรีวิว ผลิตภัณฑ์ สาระความรู้การดุแลผิว และ ข้อมูลการใช้ผลิตภัณฑ์ที่ Channel ของเรา คลิก &gt;&gt; <a href=\"\">https://www.youtube.com/channel/UCi-nSDIcGXXzkY4y6skAUQA/videos?view_as=subscriber</a></p>\r\n<div class=\"pro_about\">\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/19.jpg\')}}\" /></div>\r\n<p>\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">สินค้าผลิตภัณฑ์ LA MOCHA THAILAND</font></font></font></font></p>\r\n<div class=\"pro_about\">\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/20.jpg\')}}\" /></div>', '<h3>\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">เนื้อหาเกี่ยวกับผลิตภัณฑ์</font></font></font></font></h3>\r\n<p>\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">LA MOCHA สตาร์ตติต ติติง ติติง ติติง ติง ติ่มซำ ท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้า ท้าท้าท้าท้าท้าคุณของคุณ</font></font></font></font></p>\r\n<p>\r\n	<iframe class=\"embed\" src=\"https://www.youtube.com/embed/jTk6mZfpA7k\"></iframe></p>\r\n<p>\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">คุณประโยชน์จากไหมรังไหมของไทย สารสกัดค่าพรีเมี่ยมที่คุ้มราคา ที่ค้นเจอที่เล...ีมมากก สารสกัดที่พิเศษถูกใน คุ้มเกินคุ้ม และคุ้มเกินคุ้ม ...</font></font></font></font></p>\r\n<p>\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/9.jpg\')}}\" /></p>\r\n<p>\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">เราขอประทังใจ ส่วนใหญ่ด้วยความใส่ใจทุกรายละเอียด ผู้คนของเยาะเย้ยสินค้าสไตล์เป้าหมาย และเยื่... ว่าตีไม่ทำ ธรรมชาติ สินค้า 100 % เลยทีเดียว เลยทีเดียวเชียว เงื่อนเ... เน้นแค่เพียงเพียวๆ ล้วนๆ เพราะมีไหวพริบ สามารถเล่นเพลงได้หลาย ๆ อย่าง หรือ สำ หรับที่จะ ยฉานความสาว ใส ของผิวเราไว้ได้ แต่การใ... ไม่ธรรมชาติ 100 % พรีเมียร์สินค้าจะดีหรือ อันตรายจากทรัมป์ เพราะอาจพยายามเตือนเราเครื่... คุณค่ะ สามารถขอเชิญได้ สินค้า สารสกัด และ ท้าทาย LAB เป็นรายตัว เรายินดี ^^</font></font></p>\r\n<div class=\"pro_about\">\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/10.jpg\')}}\" /></div>\r\n<h5>\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">ความมหัศจรรย์ของครีมกันแดดที่ว่าทำไมถึงถึงดีมาก นักหนา เพิ่งตก</font></font></h5>\r\n<div class=\"wonderful\">\r\n	<h6>\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">ไม่เยาะเย้ย #ของดีมักมีมา มหัศจรรย์ที่เกินเป้า จาก Lamocha ( ลาช่า )</font></font></h6>\r\n	<h6>\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">&quot;อย่าเชื่อ!!!จนกว่าจะได้ลอง&quot;</font></font></h6>\r\n	<h6>\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">&ldquo;ใหม่ล่าสุด สินค้ามาแรง สุดล้ำแห่งเทคโนโลยี</font></font></h6>\r\n	<h6>\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">เรียกร้องให้มี 3 เคลือนไหวในหลอดเดียวถึงจะมีอาหารถึงผิวในที่เคลีย ... คุ้ม คุ้ม คุ้ม คุ้ม เดียว&rdquo; LA MOCHA Perfect Smooth mouse กันแดด SPF 50 PA ++++</font></font></h6>\r\n	<h6>\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">1. ลดขั้นตอนความยุ่งยากในอ... </font><font style=\"vertical-align: inherit;\">ให้เคียด3คุณสมบัติคือเดียว.</font></font></h6>\r\n	<h6 style=\"padding-left: 30px;\">\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">1.1 บำรุงล้ำลึก</font></font></h6>\r\n	<h6 style=\"padding-left: 30px;\">\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">1.2. ปกป้องผิวหน้าจาก UVA UVB ด้วยSPF 50++++.</font></font></h6>\r\n	<h6 style=\"padding-left: 30px;\">\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">1.3. ละมุนละไมดิษ์แป้งแป้งไหมทอง ดูสวยใส ผุดผ่องเีขียว เลิศเจิดจ้า แป้งจะเปลี่ยนเ...</font></font></h6>\r\n	<h6>\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">2. กันกันน้ำไม่เป็น</font></font></h6>\r\n	<h6>\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">3. ความสบายผิวเหมือนทาแป้งมีอาหารผิวหน้าไม่แก่เร็ว ปกป้องดีดี 3 ระดับ.</font></font></h6>\r\n	<h6>\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">4.เติมเมคอัพได้ทับทับวันได้ไม่เกิดทางเลือก</font></font></h6>\r\n	<h6>\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">5. อัญเชิญเบลินินผิวผ...ีมีออล่าวัน.</font></font></h6>\r\n	<h6>\r\n		&quot; ทำการศึกษา ค้นหา พัฒนา ต่อยอด จากสูตรดั้งเดิม มาถึง 5 ปี กว่าจะมาเป็น กันแดด สูตรนี้</h6>\r\n	<h6>\r\n		สารสกัด เนื้อกันแดด ที่อุดมไปด้วย คุณค่า อาหารผิว โดยเฉพาะ สารสกัด รังไหมธรรมชาติ</h6>\r\n	<h6>\r\n		สีทอง ของไทย ที่มีประโยชน์ต่อผิวอย่างสูง</h6>\r\n	<h6>\r\n		( สารสกัด รังไหมสีทอง มีงานวิจัยจากหลายแหล่ง รองรับเช่น กระทรวงวิทยาศาสตร์ ของไทย เป็นที่ นิยมใช้ในเวชสำอางญี่ปุ่น )</h6>\r\n	<h6>\r\n		ตัวนี้ไม่ใช่แค่กันแดด แต่..มาพร้อมคุณค่าการบำรุงครอบคลุมการดูแลผิวขั้นสุด มอบความเจิดจรัส</h6>\r\n	<h6>\r\n		ให้ผิวคุณหลังทาทันทีและดูแลอย่างต่อเนื่อง ให้คุณเห็นถึงความเปลี่ยนแปลงของผิวที่มากกว่าผิวสวยใส แต่เป็น</h6>\r\n	<h6>\r\n		&quot; ผิวสวย ละมุน เนียนใส อ่อนเยาว์ เจิดจรัส &quot;</h6>\r\n	<h6>\r\n		#LAMOCHAThailand</h6>\r\n</div>\r\n<h5>\r\n	จุดเริ่มต้น</h5>\r\n<div class=\"wonderful\">\r\n	<h6>\r\n		&ldquo;LA MOCHA&rdquo; เริ่มจากความรักและความหลงใหลเกี่ยวกับ Skincare ของ &ldquo;พลอย&rdquo; ซึ่งเป็นเพียงแม่บ้านธรรมดาๆ คนหนึ่งที่ไม่ได้ร่ำรวยเงินทอง แต่พลอยร่ำรวยความฝัน นะคะ</h6>\r\n	<h6>\r\n		พลอยเป็นเด็กต่างจังหวัดหรือเรียกว่า เด็กบ้านนอก นั่นแหละคะ ขึ้นชื่อว่า บ้านนอก ทุกอย่างก็ดูล้าสมัย เชย โบราณ รวมถึงผิวพรรณของเด็กบ้าน</h6>\r\n	<h6>\r\n		นอก ที่เรามักจะเห็นว่า แห้ง หยาบกระด้าง ไม่สวย พลอยก็เป็นเช่นนั้น ด้วยความที่รักสวย รักงาม แต่ เหมือนโอกาส ในการจะซื้อผลิตภัณฑ์ แพงๆ</h6>\r\n	<h6>\r\n		ราคาสูงๆ มันดูจะยากซะเหลือเกิน เป็นความฝังใจเล็กๆ ที่เป็นแรงบันดาลใจอยากดูแลตัวเองด้วยผลิตภัณฑ์ดีๆ. ในเวลานั้นจึงดูแลตัวเองโดยศึกษา</h6>\r\n	<h6>\r\n		คุณสมบัติของธรรมชาติที่มีอยู่รอบตัวที่เราสามารถ ทำได้ แต่ก็ทำให้เราได้ค้นพบ อะไรบางอย่าง</h6>\r\n	<h6>\r\n		พลอยเอง ก็ได้โอกาสได้ศึกษา และเรียนรู้เพิ่มเติม เพื่อค้นคว้า วิจัย ให้ผลิตภัณฑ์ LaMocha ที่ออกมานั้น มีทั้งคุณภาพและคุณประโยชน์ต่อผู้ใช้</h6>\r\n	<h6>\r\n		สูงสุด ย้ำ!!! ภายในราคา ที่คุณลูกค้าจะคุ้มค่าที่สุด ไม่แพงเกินจริงไป ให้ความสำคัญ ที่คุณภาพ สินค้าและ สารสกัด เป็นหลัก</h6>\r\n	<h6>\r\n		จุดนี้ จากทั้งการทดลอง และ ประสบการณ์ความรู้เฉพาะด้าน ที่ได้ทำการศึกษาอย่างจริงจัง ในด้าน วิทยาศาสตร์ เครื่องสำอาง ทำให้พลอยเข้าใจ</h6>\r\n	<h6>\r\n		และ รู้ความจริงในจุดที่ ว่า ผู้หญิงที่ไม่สวย ก็สวยได้ !! หากดูแลผิวพรรณ อย่างต่อเนื่อง ด้วยสารสกัดจากธรรมชาติที่พรีเมี่ยม ใน % และ ความ</h6>\r\n	<h6>\r\n		ลงตัวของสูตร ที่เหมาะสม ก็จะได้รับ ความล้ำค่าของผลิตภัณฑ์ นั้น ต่อผิวแบบเต็มๆ โดย ไม่ต้องจ่ายของแพงเกินความจำเป็น หากคุณไม่ได้ยึด</h6>\r\n	<h6>\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">เขียงแบรนด์ ใดแบรนด์หนึ่งที่เน้นที่เน้นเน้นการตลาด ... สำรวจราคา ที่เน้นเฉพาะของระดับพรีเมียมเอ...</font></font></h6>\r\n	<h6>\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">แทรกแซง LA MOCHA เหมาะเป็นอย่างยิ่ง ตัวนึงสำหรับคุณ ^^</font></font></h6>\r\n	<h6>\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">** ที่อ้างสิทธิ์ที่ต้องใช้อ้างสิทธิ์ จะบอกกล่าวในใจ หรือ บางเสียงบ่นบ่นเครื่... ถูกหรือเน้นหนักเราเน้นเน้นย้ำ คุ้มค่า สมราคา ไม่เกินจริง **</font></font></h6>\r\n	<h6>\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">และการทดสอบเหล่านี้อาจนำไปสู่การทดสอบคุณภาพเสียงที่อัดแน่นไปด้วยเสียงที่อัดแน่นไปด้วยเสียงที่อัดแน่นและหนักหน่วง แนวคิดนี้ เน้นเน้นการลดราคาหนัก แนวคิดนี้จะช่วยเร่งการเน้นการลดราคาให้เหมาะสม ค่ะ ***</font></font></h6>\r\n	<h6>\r\n		นี่เรา ยังไม่รวม ค่าใช้จ่ายในการ พัฒนาต่างๆ ต่อยอด การทุ่มเท ระยะเวลา และอีกมากมาย นะคะ เพราะเรา ไม่อยากเอามาคิดเป็นต้นทุนสินค้า แต่เรา อยากเอามันมาเป็น คุณค่าทางแบรนด์ ที่หวังเพียงให้ คุณลูกค้า ใช้สินค้าเราไปนานๆ ก็พอ ^^</h6>\r\n</div>\r\n<p>\r\n	เลือกอะไรที่ใช่ มันก็เป็นตัวช่วยที่ดี ให้เราได้จริงๆนะคะ ผลิตภัณฑ์ ทุกตัวใช้เวลาในการพัฒนาสูตร ที่ยาวนาน อย่างพิถีพิถัน จนได้สูตรที่ดีที่สุด และ มีการทดลอง โดยเจ้าของแบรนด์ บุคลากรในบริษัท และ อาสาสมัคร ทั้ง ใน LAB และ นอก LAB จริง !!!! ก่อนจำหน่าย</p>\r\n<div class=\"pro_about\">\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/11.jpg\')}}\" /></div>\r\n<p>\r\n	ไม่ได้ง่าย แต่ทำเพราะใจรัก จริงๆ และคิดว่า ต้องมีผู้หญิงแบบเรา ที่อยากคิดค้นสูตร ดีๆ พิเศษๆ ที่ทำให้เรา สาวสวย ไปนานๆ แต่ทุกคนไม่ได้มีความสะดวก จะมาทำตรงนี้ทุกคน นั้นเรา ขอเป็นตัวแทน ผู้หญิงที่มีสไตล์เดียวกันกับเรา เลยละกัน เลยเริ่ม ต่อยอด ศึกษา ค้นคว้า ปรับปรุง พัฒนา อย่างต่อเนื่อง จนคัดสรร ออกมาเป็น Premium Product ที่ ผ่านมาตรฐาน สากล ที่ได้รับการรองรับ และ ผ่านมาตรฐาน ระดับสากล จนเป็นสินค้า ที่ จำหน่ายทั้งใน และ ส่งออก ต่างประเทศ</p>\r\n<div class=\"pro_about\">\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/12.jpg\')}}\" /> <img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/13.jpg\')}}\" /></div>\r\n<h5>\r\n	จึงเป็นที่มา แบรนด์ LA MOCHA</h5>\r\n<div class=\"wonderful\">\r\n	<h6>\r\n		แบรนด์ LA MOCHA เป็น สุดยอด Skincare ที่มีความปลอดภัย และ คุณภาพสูง ใช้สารสกัดจากธรรมชาติ ผสมผสานนวัตกรรมล้ำๆ จากฝีมือผู้เชี่ยวชาญคนไทย และมีงานวิจัยรองรับ ในราคาสมเหตุสมผล</h6>\r\n	<h6>\r\n		เมื่อทดลองใช้เอง 100% พลอยจึงมั่นใจ ในผลิตภัณฑ์ทุกตัวของ LA MOCHA ว่าเป็นสินค้า เกรดพรีเมี่ยม คุณภาพเกินราคา มีความแตกต่างจากท้องตลาด วัตถุดิบที่นำมาใช้ มีปลอดภัยสูง มีงานวิจัยรองรับ ที่สำคัญ LA MOCHA ตั้งใจที่จะช่วยเกษตรกรไทย จึงเลือกใช้วัตถุดิบ และผลผลิตดีๆ มีคุณภาพสูงจากเกษตรไทยด้วยค่ะ</h6>\r\n	<h6>\r\n		เราเริ่มต้นด้วยเงินทุนไม่สูงมากนัก ค่อยๆ ขยายและเติบโตขึ้นจนถึงปัจจุบัน โดยทำการตลาดจากช่องทางออนไลน์เป็นหลัก และ ก้าวสู่ทางออฟไลน์ Beauty store คุณภาพ ในบางพื้นที่ เพื่อให้เข้าถึง Lifestyle ตอบสนองได้ตรงความต้องการของผู้บริโภค</h6>\r\n	<h6>\r\n		ปัจจุบัน แบรนด์ LA MOCHA (ลา โมช่า) เติบโตอย่างต่อเนื่อง ทั้งแบบออฟไลน์และออนไลน์ อีกทั้งได้ขยายออกไปสู่ต่างประเทศ ทั้ง ลาว กัมพูชา มาเลเซีย ออสเตรเลีย อเมริกา สวิสเซอร์แลนด์ และ ยังมีแผนที่จะขยายสินค้าไปยังประเทศอื่นๆ อย่างต่อเนื่องอีกด้วยค่ะ</h6>\r\n	<h6>\r\n		เพราะ &ldquo;รวยความฝัน&rdquo; จึงมีวันนี้ พลอยยินดีต้อนรับตัวแทนและลูกค้าทุกท่าน ให้มาเป็นครอบครัว LA MOCHA นะคะ ช่วยกันส่งต่อผลิตภัณฑ์ดีๆ มีคุณภาพ ในราคาไม่แรง ให้คนทั่วโลกได้ใช้ด้วยนะคะ</h6>\r\n	<h6>\r\n		หากสนใจเป็นตัวแทนจำหน่าย คลิกสมัครเลยค่ะ &gt;&gt; <a href=\"\">https://forms.gle/WNFQPEfeWtk4BP559</a></h6>\r\n</div>\r\n<div class=\"pro_about\">\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/14.jpg\')}}\" /> <img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/15.jpg\')}}\" /></div>\r\n<p>\r\n	ผู้หญิง อย่าหยุดสวย อย่ายอมแก่ ถนอมความสาว ไว้ให้นานที่สุดค่ะ ที่เราจะยื้อได้ เชื่อว่าทุกคนรู้ว่ามันสำคัญจริงๆ คงไม่ต้องอธิบาย</p>\r\n<div class=\"pro_about\">\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/16.jpg\')}}\" /> <img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/17.jpg\')}}\" /></div>\r\n<p>\r\n	ส่งออกไปยังต่างประเทศ ต่างๆ ทั้งแบบ Beauty และ Online ผ่าน Shipping ก็มีหมดค่ะ</p>\r\n<div class=\"pro_about\">\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/18.jpg\')}}\" /></div>\r\n<p>\r\n	ปัจจุบัน LA MOCHA มีสินค้า มากมายหลากหลายรายการ ดูรายละเอียดสินค้าเพิ่มเติม หรือ สั่งซื้อสินค้า คลิก &gt;&gt; <a href=\"\">https://www.lamocha.co.th/shop/</a></p>\r\n<p>\r\n	ชมรีวิว ผลิตภัณฑ์ สาระความรู้การดุแลผิว และ ข้อมูลการใช้ผลิตภัณฑ์ที่ Channel ของเรา คลิก &gt;&gt; <a href=\"\">https://www.youtube.com/channel/UCi-nSDIcGXXzkY4y6skAUQA/videos?view_as=subscriber</a></p>\r\n<div class=\"pro_about\">\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/19.jpg\')}}\" /></div>\r\n<p>\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">สินค้าผลิตภัณฑ์ LA MOCHA THAILAND</font></font></font></font></p>\r\n<div class=\"pro_about\">\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/20.jpg\')}}\" /></div>', '<h3>\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">เนื้อหาเกี่ยวกับผลิตภัณฑ์</font></font></font></font></h3>\r\n<p>\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">LA MOCHA สตาร์ตติต ติติง ติติง ติติง ติง ติ่มซำ ท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้าท้า ท้าท้าท้าท้าท้าคุณของคุณ</font></font></font></font></p>\r\n<p>\r\n	<iframe class=\"embed\" src=\"https://www.youtube.com/embed/jTk6mZfpA7k\"></iframe></p>\r\n<p>\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">คุณประโยชน์จากไหมรังไหมของไทย สารสกัดค่าพรีเมี่ยมที่คุ้มราคา ที่ค้นเจอที่เล...ีมมากก สารสกัดที่พิเศษถูกใน คุ้มเกินคุ้ม และคุ้มเกินคุ้ม ...</font></font></font></font></p>\r\n<p>\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/9.jpg\')}}\" /></p>\r\n<p>\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">เราขอประทังใจ เน้นด้วยความใส่ใจทุกรายละเอียด รายละเอียดย... เน้นแค่เพียงเพียวๆ เน้นสินค้า 100 % เน้นแค่เพียงเพียวๆ ล้วนเพราะ อาจมีเล่ห์เพียวฉลาดได้หลาย ๆ อย่าง อย่าง หรือ สำ หรับที่จะ ย...ฌานความสาว ใส ของผิวเราไว้ได้ เช่น การใ... ไม่ธรรมชาติ 100% การันตีสินค้าจะดีหรือ อันตรายจากอาจ เพราะอาจอาจอ... เครื่... คุณค่ะ สามารถขอเชิญได้ สินค้า สารสกัด และ โค้ด LAB เป็นรายตัว เรายินดี ^^</font></font></font></font></p>\r\n<div class=\"pro_about\">\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/10.jpg\')}}\" /></div>\r\n<h5>\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">ความมหัศจรรย์ของครีมกันแดดที่ว่าทำไมถึงถึงดีมาก นักหนา เพิ่งตก</font></font></h5>\r\n<div class=\"wonderful\">\r\n	<h6>\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">ไม่เยาะเย้ย #ของดีมักมีมา มหัศจรรย์ที่เกินเป้า จาก Lamocha ( ลาช่า )</font></font></h6>\r\n	<h6>\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">&quot;อย่าเชื่อ!!!จนกว่าจะได้ลอง&quot;</font></font></h6>\r\n	<h6>\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">&ldquo;ใหม่ล่าสุด สินค้ามาแรง สุดล้ำแห่งเทคโนโลยี</font></font></h6>\r\n	<h6>\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">เรียกร้องให้มี 3 เคลือนไหวในหลอดเดียวถึงจะมีอาหารถึงผิวในที่เคลีย ... คุ้ม คุ้ม คุ้ม คุ้ม เดียว&rdquo; LA MOCHA Perfect Smooth mouse กันแดด SPF 50 PA ++++</font></font></h6>\r\n	<h6>\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">1. ลดขั้นตอนความยุ่งยากในอ... </font><font style=\"vertical-align: inherit;\">ให้เคียด3คุณสมบัติคือเดียว.</font></font></h6>\r\n	<h6 style=\"padding-left: 30px;\">\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">1.1 บำรุงล้ำลึก</font></font></h6>\r\n	<h6 style=\"padding-left: 30px;\">\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">1.2. ปกป้องผิวหน้าจาก UVA UVB ด้วยSPF 50++++.</font></font></h6>\r\n	<h6 style=\"padding-left: 30px;\">\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">1.3. ละมุนละไมดิษ์แป้งแป้งไหมทอง ดูสวยใส ผุดผ่องเีขียว เลิศเจิดจ้า แป้งจะเปลี่ยนเ...</font></font></h6>\r\n	<h6>\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">2. กันกันน้ำไม่เป็น</font></font></h6>\r\n	<h6>\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">3. ความสบายผิวเหมือนทาแป้งมีอาหารผิวหน้าไม่แก่เร็ว ปกป้องดีดี 3 ระดับ.</font></font></h6>\r\n	<h6>\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">4.เติมเมคอัพได้ทับทับวันได้ไม่เกิดทางเลือก</font></font></h6>\r\n	<h6>\r\n		<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">5. อัญเชิญเบลินินผิวผ...ีมีออล่าวัน.</font></font></h6>\r\n	<h6>\r\n		&quot; ทำการศึกษา ค้นหา พัฒนา ต่อยอด จากสูตรดั้งเดิม มาถึง 5 ปี กว่าจะมาเป็น กันแดด สูตรนี้</h6>\r\n	<h6>\r\n		สารสกัด เนื้อกันแดด ที่อุดมไปด้วย คุณค่า อาหารผิว โดยเฉพาะ สารสกัด รังไหมธรรมชาติ</h6>\r\n	<h6>\r\n		สีทอง ของไทย ที่มีประโยชน์ต่อผิวอย่างสูง</h6>\r\n	<h6>\r\n		( สารสกัด รังไหมสีทอง มีงานวิจัยจากหลายแหล่ง รองรับเช่น กระทรวงวิทยาศาสตร์ ของไทย เป็นที่ นิยมใช้ในเวชสำอางญี่ปุ่น )</h6>\r\n	<h6>\r\n		ตัวนี้ไม่ใช่แค่กันแดด แต่..มาพร้อมคุณค่าการบำรุงครอบคลุมการดูแลผิวขั้นสุด มอบความเจิดจรัส</h6>\r\n	<h6>\r\n		ให้ผิวคุณหลังทาทันทีและดูแลอย่างต่อเนื่อง ให้คุณเห็นถึงความเปลี่ยนแปลงของผิวที่มากกว่าผิวสวยใส แต่เป็น</h6>\r\n	<h6>\r\n		&quot; ผิวสวย ละมุน เนียนใส อ่อนเยาว์ เจิดจรัส &quot;</h6>\r\n	<h6>\r\n		#LAMOCHAThailand</h6>\r\n</div>\r\n<h5>\r\n	จุดเริ่มต้น</h5>\r\n<div class=\"wonderful\">\r\n	<h6>\r\n		&ldquo;LA MOCHA&rdquo; เริ่มจากความรักและความหลงใหลเกี่ยวกับ Skincare ของ &ldquo;พลอย&rdquo; ซึ่งเป็นเพียงแม่บ้านธรรมดาๆ คนหนึ่งที่ไม่ได้ร่ำรวยเงินทอง แต่พลอยร่ำรวยความฝัน นะคะ</h6>\r\n	<h6>\r\n		พลอยเป็นเด็กต่างจังหวัดหรือเรียกว่า เด็กบ้านนอก นั่นแหละคะ ขึ้นชื่อว่า บ้านนอก ทุกอย่างก็ดูล้าสมัย เชย โบราณ รวมถึงผิวพรรณของเด็กบ้าน</h6>\r\n	<h6>\r\n		นอก ที่เรามักจะเห็นว่า แห้ง หยาบกระด้าง ไม่สวย พลอยก็เป็นเช่นนั้น ด้วยความที่รักสวย รักงาม แต่ เหมือนโอกาส ในการจะซื้อผลิตภัณฑ์ แพงๆ</h6>\r\n	<h6>\r\n		ราคาสูงๆ มันดูจะยากซะเหลือเกิน เป็นความฝังใจเล็กๆ ที่เป็นแรงบันดาลใจอยากดูแลตัวเองด้วยผลิตภัณฑ์ดีๆ. ในเวลานั้นจึงดูแลตัวเองโดยศึกษา</h6>\r\n	<h6>\r\n		คุณสมบัติของธรรมชาติที่มีอยู่รอบตัวที่เราสามารถ ทำได้ แต่ก็ทำให้เราได้ค้นพบ อะไรบางอย่าง</h6>\r\n	<h6>\r\n		พลอยเอง ก็ได้โอกาสได้ศึกษา และเรียนรู้เพิ่มเติม เพื่อค้นคว้า วิจัย ให้ผลิตภัณฑ์ LaMocha ที่ออกมานั้น มีทั้งคุณภาพและคุณประโยชน์ต่อผู้ใช้</h6>\r\n	<h6>\r\n		สูงสุด ย้ำ!!! ภายในราคา ที่คุณลูกค้าจะคุ้มค่าที่สุด ไม่แพงเกินจริงไป ให้ความสำคัญ ที่คุณภาพ สินค้าและ สารสกัด เป็นหลัก</h6>\r\n	<h6>\r\n		จุดนี้ จากทั้งการทดลอง และ ประสบการณ์ความรู้เฉพาะด้าน ที่ได้ทำการศึกษาอย่างจริงจัง ในด้าน วิทยาศาสตร์ เครื่องสำอาง ทำให้พลอยเข้าใจ</h6>\r\n	<h6>\r\n		และ รู้ความจริงในจุดที่ ว่า ผู้หญิงที่ไม่สวย ก็สวยได้ !! หากดูแลผิวพรรณ อย่างต่อเนื่อง ด้วยสารสกัดจากธรรมชาติที่พรีเมี่ยม ใน % และ ความ</h6>\r\n	<h6>\r\n		ลงตัวของสูตร ที่เหมาะสม ก็จะได้รับ ความล้ำค่าของผลิตภัณฑ์ นั้น ต่อผิวแบบเต็มๆ โดย ไม่ต้องจ่ายของแพงเกินความจำเป็น หากคุณไม่ได้ยึด</h6>\r\n	<h6>\r\n		ติดกับแบรนด์ ใดแบรนด์หนึ่งที่ชื่อดัง หรือ เน้นการตลาดเท่านั้น ... แต่เป็นราคา ที่สมเหตุสมผล สามารถใช้ของระดับพรีเมี่ยม ไฮเอนด์ได้เช่นกัน</h6>\r\n	<h6>\r\n		หากคุณมีความต้องการเดียวกัน LA MOCHA คือตัวเลือกที่ดี ตัวนึงสำหรับคุณค่ะ ^^</h6>\r\n	<h6>\r\n		** หลายคนที่ไม่เคยใช้ อาจจะมีคำถามในใจ หรือ บางเสียง อาจจะบ่นหรือมองว่าแพง เราขออธิบายแบบนี้ค่ะ เราเน้นของดีพรีเมี่ยม ในราคาคุ้มค่าค่ะ เรียนตามตรงว่า เราไม้เน้นถูก หรือ เน้นแพง เราเน้น คุณค่า คุ้มค่า สมราคา ไม่เกินจริง **</h6>\r\n	<h6>\r\n		และ ประสบการณ์ ที่ผ่านมา มันทำให้เรารับรู้เสียง ความพึงพอใจ จากลูกค้าที่ใช้ว่า อะไร ที่ซื้อมา แล้วคุ้ม ได้ใช้ ถูกใจ คือไม่แพง เราเลยมีกำลังใจ คง Concept นี้ต่อไป โดยไม่เน้น การ ลดคุณค่า เพื่อลดราคา เท่านั้นค่ะ ***</h6>\r\n	<h6>\r\n		นี่เรา ยังไม่รวม ค่าใช้จ่ายในการ พัฒนาต่างๆ ต่อยอด การทุ่มเท ระยะเวลา และอีกมากมาย นะคะ เพราะเรา ไม่อยากเอามาคิดเป็นต้นทุนสินค้า แต่เรา อยากเอามันมาเป็น คุณค่าทางแบรนด์ ที่หวังเพียงให้ คุณลูกค้า ใช้สินค้าเราไปนานๆ ก็พอ ^^</h6>\r\n</div>\r\n<p>\r\n	เลือกอะไรที่ใช่ มันก็เป็นตัวช่วยที่ดี ให้เราได้จริงๆนะคะ ผลิตภัณฑ์ ทุกตัวใช้เวลาในการพัฒนาสูตร ที่ยาวนาน อย่างพิถีพิถัน จนได้สูตรที่ดีที่สุด และ มีการทดลอง โดยเจ้าของแบรนด์ บุคลากรในบริษัท และ อาสาสมัคร ทั้ง ใน LAB และ นอก LAB จริง !!!! ก่อนจำหน่าย</p>\r\n<div class=\"pro_about\">\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/11.jpg\')}}\" /></div>\r\n<p>\r\n	ไม่ได้ง่าย แต่ทำเพราะใจรัก จริงๆ และคิดว่า ต้องมีผู้หญิงแบบเรา ที่อยากคิดค้นสูตร ดีๆ พิเศษๆ ที่ทำให้เรา สาวสวย ไปนานๆ แต่ทุกคนไม่ได้มีความสะดวก จะมาทำตรงนี้ทุกคน นั้นเรา ขอเป็นตัวแทน ผู้หญิงที่มีสไตล์เดียวกันกับเรา เลยละกัน เลยเริ่ม ต่อยอด ศึกษา ค้นคว้า ปรับปรุง พัฒนา อย่างต่อเนื่อง จนคัดสรร ออกมาเป็น Premium Product ที่ ผ่านมาตรฐาน สากล ที่ได้รับการรองรับ และ ผ่านมาตรฐาน ระดับสากล จนเป็นสินค้า ที่ จำหน่ายทั้งใน และ ส่งออก ต่างประเทศ</p>\r\n<div class=\"pro_about\">\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/12.jpg\')}}\" /> <img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/13.jpg\')}}\" /></div>\r\n<h5>\r\n	จึงเป็นที่มา แบรนด์ LA MOCHA</h5>\r\n<div class=\"wonderful\">\r\n	<h6>\r\n		แบรนด์ LA MOCHA เป็น สุดยอด Skincare ที่มีความปลอดภัย และ คุณภาพสูง ใช้สารสกัดจากธรรมชาติ ผสมผสานนวัตกรรมล้ำๆ จากฝีมือผู้เชี่ยวชาญคนไทย และมีงานวิจัยรองรับ ในราคาสมเหตุสมผล</h6>\r\n	<h6>\r\n		เมื่อทดลองใช้เอง 100% พลอยจึงมั่นใจ ในผลิตภัณฑ์ทุกตัวของ LA MOCHA ว่าเป็นสินค้า เกรดพรีเมี่ยม คุณภาพเกินราคา มีความแตกต่างจากท้องตลาด วัตถุดิบที่นำมาใช้ มีปลอดภัยสูง มีงานวิจัยรองรับ ที่สำคัญ LA MOCHA ตั้งใจที่จะช่วยเกษตรกรไทย จึงเลือกใช้วัตถุดิบ และผลผลิตดีๆ มีคุณภาพสูงจากเกษตรไทยด้วยค่ะ</h6>\r\n	<h6>\r\n		เราเริ่มต้นด้วยเงินทุนไม่สูงมากนัก ค่อยๆ ขยายและเติบโตขึ้นจนถึงปัจจุบัน โดยทำการตลาดจากช่องทางออนไลน์เป็นหลัก และ ก้าวสู่ทางออฟไลน์ Beauty store คุณภาพ ในบางพื้นที่ เพื่อให้เข้าถึง Lifestyle ตอบสนองได้ตรงความต้องการของผู้บริโภค</h6>\r\n	<h6>\r\n		ปัจจุบัน แบรนด์ LA MOCHA (ลา โมช่า) เติบโตอย่างต่อเนื่อง ทั้งแบบออฟไลน์และออนไลน์ อีกทั้งได้ขยายออกไปสู่ต่างประเทศ ทั้ง ลาว กัมพูชา มาเลเซีย ออสเตรเลีย อเมริกา สวิสเซอร์แลนด์ และ ยังมีแผนที่จะขยายสินค้าไปยังประเทศอื่นๆ อย่างต่อเนื่องอีกด้วยค่ะ</h6>\r\n	<h6>\r\n		เพราะ &ldquo;รวยความฝัน&rdquo; จึงมีวันนี้ พลอยยินดีต้อนรับตัวแทนและลูกค้าทุกท่าน ให้มาเป็นครอบครัว LA MOCHA นะคะ ช่วยกันส่งต่อผลิตภัณฑ์ดีๆ มีคุณภาพ ในราคาไม่แรง ให้คนทั่วโลกได้ใช้ด้วยนะคะ</h6>\r\n	<h6>\r\n		หากสนใจเป็นตัวแทนจำหน่าย คลิกสมัครเลยค่ะ &gt;&gt; <a href=\"\">https://forms.gle/WNFQPEfeWtk4BP559</a></h6>\r\n</div>\r\n<div class=\"pro_about\">\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/14.jpg\')}}\" /> <img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/15.jpg\')}}\" /></div>\r\n<p>\r\n	ผู้หญิง อย่าหยุดสวย อย่ายอมแก่ ถนอมความสาว ไว้ให้นานที่สุดค่ะ ที่เราจะยื้อได้ เชื่อว่าทุกคนรู้ว่ามันสำคัญจริงๆ คงไม่ต้องอธิบาย</p>\r\n<div class=\"pro_about\">\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/16.jpg\')}}\" /> <img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/17.jpg\')}}\" /></div>\r\n<p>\r\n	ส่งออกไปยังต่างประเทศ ต่างๆ ทั้งแบบ Beauty และ Online ผ่าน Shipping ก็มีหมดค่ะ</p>\r\n<div class=\"pro_about\">\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/18.jpg\')}}\" /></div>\r\n<p>\r\n	ปัจจุบัน LA MOCHA มีสินค้า มากมายหลากหลายรายการ ดูรายละเอียดสินค้าเพิ่มเติม หรือ สั่งซื้อสินค้า คลิก &gt;&gt; <a href=\"\">https://www.lamocha.co.th/shop/</a></p>\r\n<p>\r\n	ชมรีวิว ผลิตภัณฑ์ สาระความรู้การดุแลผิว และ ข้อมูลการใช้ผลิตภัณฑ์ที่ Channel ของเรา คลิก &gt;&gt; <a href=\"\">https://www.youtube.com/channel/UCi-nSDIcGXXzkY4y6skAUQA/videos?view_as=subscriber</a></p>\r\n<div class=\"pro_about\">\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/19.jpg\')}}\" /></div>\r\n<p>\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">สินค้าผลิตภัณฑ์ LA MOCHA THAILAND</font></font></font></font></p>\r\n<div class=\"pro_about\">\r\n	<img class=\"img-fluid\" src=\"{{asset(\'public/frontend/images/promotion/20.jpg\')}}\" /></div>', '<h3>\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">แก้ตัวและปัญญา</font></font></font></font></h3>\r\n<p>\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">คุณพลอย มโนชา นิจปิยนันท์</font></font></font></font><br />\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">เกิดไฟ 12 พฤศจิกายน พศ. </font></font></font><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">2531 </font></font></font></font><br />\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">เป็นกิจกรรมวันนี้ ออลกู๊ด ประส...</font></font></font></font></p>\r\n<p>\r\n	<iframe class=\"embed\" src=\"https://www.youtube.com/embed/VnDfk68cL-k\"></iframe></p>', '<h3>\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">แก้ตัวและปัญญา</font></font></font></font></h3>\r\n<p>\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">คุณพลอย มโนชา นิจปิยนันท์</font></font></font></font><br />\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">เกิดไฟ 12 พฤศจิกายน พศ. </font></font></font><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">2531 </font></font></font></font><br />\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">เป็นกิจกรรมวันนี้ ออลกู๊ด ประส...</font></font></font></font></p>\r\n<p>\r\n	<iframe class=\"embed\" src=\"https://www.youtube.com/embed/VnDfk68cL-k\"></iframe></p>', '<h3>\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">แก้ตัวและปัญญา</font></font></font></font></h3>\r\n<p>\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">คุณพลอย มโนชา นิจปิยนันท์</font></font></font></font><br />\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">เกิดไฟ 12 พฤศจิกายน พศ. </font></font></font><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">2531 </font></font></font></font><br />\r\n	<font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">เป็นกิจกรรมวันนี้ ออลกู๊ด ประส...</font></font></font></font></p>\r\n<p>\r\n	<iframe class=\"embed\" src=\"https://www.youtube.com/embed/VnDfk68cL-k\"></iframe></p>', '2022-06-17 05:55:04', '58.8.176.164');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_agent`
--

CREATE TABLE `lv_agent` (
  `agent_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `agent_register_500` enum('No','Yes') NOT NULL,
  `agent_point` int(11) NOT NULL,
  `agent_point_real` int(11) DEFAULT NULL,
  `agent_image` varchar(255) NOT NULL,
  `agent_wait` enum('No','Yes') NOT NULL,
  `agent_name` varchar(255) NOT NULL,
  `agent_surname` varchar(255) NOT NULL,
  `agent_gender` varchar(255) NOT NULL,
  `agent_age` int(11) NOT NULL,
  `agent_date` date NOT NULL,
  `agent_tiktok` varchar(255) NOT NULL,
  `agent_favourite` varchar(255) NOT NULL,
  `agent_sale_online` varchar(255) NOT NULL,
  `agent_sale_offline` varchar(255) NOT NULL,
  `agent_type_product` text NOT NULL,
  `agent_area` text NOT NULL,
  `agent_email` varchar(255) NOT NULL,
  `agent_telephone` varchar(255) NOT NULL,
  `agent_mobile` varchar(255) NOT NULL,
  `agent_current_address` text NOT NULL,
  `agent_shipping_address` text NOT NULL,
  `agent_birth_day` date NOT NULL,
  `agent_shirt_size` varchar(255) NOT NULL,
  `agent_line` varchar(255) NOT NULL,
  `agent_facebook` varchar(255) NOT NULL,
  `agent_instagram` varchar(255) NOT NULL,
  `agent_type` varchar(255) NOT NULL,
  `agent_area_sale_comfortable` text NOT NULL,
  `agent_password` varchar(255) NOT NULL,
  `agent_new_address` text DEFAULT NULL,
  `agent_new_province` varchar(255) DEFAULT NULL,
  `agent_new_amphur` varchar(255) DEFAULT NULL,
  `agent_new_country` varchar(255) NOT NULL,
  `agent_new_postal_code` varchar(255) DEFAULT NULL,
  `agent_google_map` text DEFAULT NULL,
  `agent_age_25_55` enum('No','Yes') NOT NULL,
  `agent_meta_500` enum('No','Yes') NOT NULL,
  `agent_look_at_the_world` enum('No','Yes') NOT NULL,
  `agent_lifestyle` enum('No','Yes') NOT NULL,
  `agent_product_thai` enum('No','Yes') NOT NULL,
  `agent_social` enum('No','Yes') NOT NULL,
  `agent_sale` enum('No','Yes') NOT NULL,
  `agent_doing` enum('No','Yes') NOT NULL,
  `agent_store` varchar(255) DEFAULT NULL,
  `agent_image_store` varchar(255) DEFAULT NULL,
  `agent_pikad_store` varchar(255) DEFAULT NULL,
  `agent_map_store` text NOT NULL,
  `agent_datetime_create` datetime NOT NULL,
  `agent_ip_create` varchar(255) NOT NULL,
  `agent_datetime_update` datetime NOT NULL,
  `agent_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `lv_agent`
--

INSERT INTO `lv_agent` (`agent_id`, `country_id`, `agent_register_500`, `agent_point`, `agent_point_real`, `agent_image`, `agent_wait`, `agent_name`, `agent_surname`, `agent_gender`, `agent_age`, `agent_date`, `agent_tiktok`, `agent_favourite`, `agent_sale_online`, `agent_sale_offline`, `agent_type_product`, `agent_area`, `agent_email`, `agent_telephone`, `agent_mobile`, `agent_current_address`, `agent_shipping_address`, `agent_birth_day`, `agent_shirt_size`, `agent_line`, `agent_facebook`, `agent_instagram`, `agent_type`, `agent_area_sale_comfortable`, `agent_password`, `agent_new_address`, `agent_new_province`, `agent_new_amphur`, `agent_new_country`, `agent_new_postal_code`, `agent_google_map`, `agent_age_25_55`, `agent_meta_500`, `agent_look_at_the_world`, `agent_lifestyle`, `agent_product_thai`, `agent_social`, `agent_sale`, `agent_doing`, `agent_store`, `agent_image_store`, `agent_pikad_store`, `agent_map_store`, `agent_datetime_create`, `agent_ip_create`, `agent_datetime_update`, `agent_ip_update`) VALUES
(1, 6, 'Yes', 0, NULL, '9515.jpg', 'No', 'Ford', 'Fuji', 'ชาย', 42, '2021-11-10', 'F', 'aa', 'No', 'Yes', 'bb', 'Thailand', 'sitiporn@orange-thailand.com', '0990943010', '0963206829', '366/66', '366/66', '1979-06-14', 'A', 'B', 'C', 'D', 'DropShip', 'dd', 'qwaszx', NULL, NULL, NULL, '0', NULL, 'https://www.google.co.th/embed/map/123/456', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, NULL, NULL, '', '2022-02-10 03:59:16', '::1', '2022-02-10 03:59:16', '::1'),
(2, 17, 'Yes', 6, 2000, 'CEO.jpg', 'Yes', 'Ford', 'Fuji', 'ชาย', 42, '2021-11-10', 'F', 'dd', 'No', 'Yes', 'dd', 'yyy', 'nirvanaford94@gmail.com', '0990943010', '0963206829', 'dd', 'dd', '2021-11-10', 'A', 'B', 'C', 'D', 'Member Thai franchise online', 'dd', 'qwaszx', '90/16', 'กรุงเทพมหานคร', 'Dusit', 'Switzerland', '10300', NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'FordFuji', '0t.png', '366/66', 'bannerhome.jpg', '2022-03-22 08:42:54', '124.120.116.154', '2022-03-22 08:42:54', '124.120.116.154'),
(3, 7, 'No', 0, NULL, 'CEO.jpg', 'Yes', 'Ford', 'Fuji', '0', 42, '2021-12-09', '@fordfuji', 'Toy', 'No', 'Yes', 'Bangkok', '', 'nirvanaford94@gmail.com', '0963206829', '0990943010', '366/66', '366/66', '1979-06-14', 'XS', '@fordfuji', 'https://www.facebook.com/fordfuji', 'https://www.instagram.com/fordfuji', 'Dealer Partner', 'Bangkok', 'qwaszx', NULL, NULL, NULL, '0', NULL, NULL, 'Yes', 'No', 'No', 'Yes', 'Yes', 'No', 'No', 'No', NULL, NULL, NULL, '', '2021-12-09 06:25:29', '58.8.174.171', '2021-12-09 06:25:29', '58.8.174.171'),
(4, 17, 'No', 3997, NULL, 'CEO.jpg', 'No', 'Ford', 'Fuji', '0', 42, '2022-01-28', '@fordfuji', 'Test', 'No', 'No', 'Test', '', 'nirvanaford94@gmail.com', '0963206829', '0990943010', 'Test Address Current', 'Test Address Shipping', '1979-06-14', 'L', '@fordfuji', 'https://www.facebook.com/fordfuji', 'https://www.instagram.com/fordfuji', 'DropShip', 'Test', 'qwaszx', NULL, NULL, NULL, '', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, '', '2022-01-28 04:39:01', '::1', '2022-04-27 09:08:02', '147.92.179.113'),
(5, 15, 'No', 0, NULL, 'CEO.jpg', 'No', 'Malaysia', 'Malaysia', '0', 42, '2022-01-28', '@fordfuji', 'Malaysia', 'No', 'No', 'Malaysia', '', 'nirvanaford94@gmail.com', '0963206829', '0990943010', 'Test Address Current', 'Test Address Shipping', '1979-06-14', 'L', '@fordfuji', 'https://www.facebook.com/fordfuji', 'https://www.instagram.com/fordfuji', 'DropShip', 'Malaysia', 'qwaszx', NULL, NULL, NULL, '', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, NULL, NULL, '', '2022-01-28 04:44:40', '::1', '2022-01-28 04:44:40', '::1'),
(6, 6, 'No', 0, NULL, '', 'No', 'Ford', 'Fuji', 'ชาย', 42, '2021-11-10', 'F', 'dd', 'No', 'Yes', 'dd', 'Thailand', 'sitiporn@orange-thailand.com', '0990943010', '0963206829', '366/66', '366/66', '1979-06-14', 'A', 'B', 'C', 'D', 'DropShip', 'dd', '', NULL, NULL, NULL, '', NULL, 'https://www.google.co.th/embed/map/123/456', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, NULL, NULL, '', '2022-02-10 03:53:36', '::1', '2022-02-10 03:53:36', '::1'),
(7, 6, 'No', 0, NULL, '', 'No', 'Ford', 'Fuji', 'ชาย', 42, '2021-11-10', 'F', 'aa', 'No', 'Yes', 'bb', 'Thailand', 'sitiporn@orange-thailand.com', '0990943010', '0963206829', '366/66', '366/66', '1979-06-14', 'A', 'B', 'C', 'D', 'DropShip', 'dd', '', NULL, NULL, NULL, '', NULL, 'https://www.google.co.th/embed/map/123/456', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, NULL, NULL, '', '2022-02-10 03:59:16', '::1', '2022-02-10 03:59:16', '::1'),
(8, 17, 'No', 0, NULL, '', 'Yes', 'Ford', 'Fuji', 'ชาย', 42, '2021-11-10', 'F', 'dd', 'No', 'Yes', 'dd', 'yyy', 'nirvanaford94@gmail.com', '0990943010', '0963206829', 'dd', 'dd', '2021-11-10', 'A', 'B', 'C', 'D', 'Member Thai franchise online', 'dd', '', NULL, NULL, NULL, '', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', NULL, NULL, NULL, '', '2022-03-22 08:36:13', '124.120.116.154', '2022-03-22 08:36:13', '124.120.116.154'),
(9, 17, 'No', 0, NULL, '', 'Yes', 'Ford', 'Fuji', 'ชาย', 42, '2021-11-10', 'F', 'dd', 'No', 'Yes', 'dd', 'yyy', 'nirvanaford94@gmail.com', '0990943010', '0963206829', 'dd', 'dd', '2021-11-10', 'A', 'B', 'C', 'D', 'Member Thai franchise online', 'dd', '', NULL, NULL, NULL, '', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'FordFuji', NULL, '366/66', '', '2022-03-22 08:36:50', '124.120.116.154', '2022-03-22 08:36:50', '124.120.116.154'),
(10, 17, 'No', 0, NULL, '', 'Yes', 'Ford', 'Fuji', 'ชาย', 42, '2021-11-10', 'F', 'dd', 'No', 'Yes', 'dd', 'yyy', 'nirvanaford94@gmail.com', '0990943010', '0963206829', 'dd', 'dd', '2021-11-10', 'A', 'B', 'C', 'D', 'Member Thai franchise online', 'dd', '', NULL, NULL, NULL, '', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'FordFuji', NULL, '366/66', '', '2022-03-22 08:38:32', '124.120.116.154', '2022-03-22 08:38:32', '124.120.116.154'),
(11, 17, 'No', 0, NULL, '', 'Yes', 'Ford', 'Fuji', 'ชาย', 42, '2021-11-10', 'F', 'dd', 'No', 'Yes', 'dd', 'yyy', 'nirvanaford94@gmail.com', '0990943010', '0963206829', 'dd', 'dd', '2021-11-10', 'A', 'B', 'C', 'D', 'Member Thai franchise online', 'dd', '', NULL, NULL, NULL, '', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'FordFuji', NULL, '366/66', '', '2022-03-22 08:41:29', '124.120.116.154', '2022-03-22 08:41:29', '124.120.116.154'),
(12, 17, 'No', 0, NULL, '', 'Yes', 'Ford', 'Fuji', 'ชาย', 42, '2021-11-10', 'F', 'dd', 'No', 'Yes', 'dd', 'yyy', 'nirvanaford94@gmail.com', '0990943010', '0963206829', 'dd', 'dd', '2021-11-10', 'A', 'B', 'C', 'D', 'Member Thai franchise online', 'dd', '', NULL, NULL, NULL, '', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'FordFuji', '0t.png', '366/66', 'bannerhome.jpg', '2022-03-22 08:42:54', '124.120.116.154', '2022-03-22 08:42:54', '124.120.116.154');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_agent_backup_2020.10.09`
--

CREATE TABLE `lv_agent_backup_2020.10.09` (
  `agent_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `agent_name_th` varchar(255) NOT NULL,
  `agent_name_en` varchar(255) NOT NULL,
  `agent_name_ch` text NOT NULL,
  `agent_address_th` text NOT NULL,
  `agent_address_en` text NOT NULL,
  `agent_address_ch` text NOT NULL,
  `agent_google_map` text NOT NULL,
  `agent_datetime_create` datetime NOT NULL,
  `agent_ip_create` varchar(255) NOT NULL,
  `agent_datetime_update` datetime NOT NULL,
  `agent_ip_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `lv_agent_backup_2020.10.09`
--

INSERT INTO `lv_agent_backup_2020.10.09` (`agent_id`, `country_id`, `type_id`, `agent_name_th`, `agent_name_en`, `agent_name_ch`, `agent_address_th`, `agent_address_en`, `agent_address_ch`, `agent_google_map`, `agent_datetime_create`, `agent_ip_create`, `agent_datetime_update`, `agent_ip_update`) VALUES
(1, 1, 1, 'คุณ ภัควรินทร์ เกียรติกูลภัสร์', 'คุณ ภัควรินทร์ เกียรติกูลภัสร์', 'คุณ ภัควรินทร์ เกียรติกูลภัสร์', 'เลขที่ 5 หมู่ 5 ต.สระแจง อ.บางระจัน จ.สิงห์บุรี 16130', 'เลขที่ 5 หมู่ 5 ต.สระแจง อ.บางระจัน จ.สิงห์บุรี 16130', 'เลขที่ 5 หมู่ 5 ต.สระแจง อ.บางระจัน จ.สิงห์บุรี 16130', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d496085.2904004586!2d100.42960931640626!3d13.738640095047291!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3314589d712fb05a!2sEmQuartier!5e0!3m2!1sen!2sus!4v1585570686899!5m2!1sen!2sus', '2020-10-08 04:02:54', '::1', '2020-10-08 04:04:01', 0),
(2, 4, 1, 'คุณ สุชานันท์ เอี่ยมพันธ์', 'คุณ สุชานันท์ เอี่ยมพันธ์', 'คุณ สุชานันท์ เอี่ยมพันธ์', '160 ถ.พุทธมณฑลสาย1 ซอย21 แขวงบางระมาด เขตตลิ่งชัน เขตตลิ่งชัน จังหวัดกรุงเทพมหานคร 10170', '160 ถ.พุทธมณฑลสาย1 ซอย21 แขวงบางระมาด เขตตลิ่งชัน เขตตลิ่งชัน จังหวัดกรุงเทพมหานคร 10170', '160 ถ.พุทธมณฑลสาย1 ซอย21 แขวงบางระมาด เขตตลิ่งชัน เขตตลิ่งชัน จังหวัดกรุงเทพมหานคร 10170', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31004.30979121433!2d100.534935!3d13.746354!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcc25c0b48d43099c!2sNasha%20Made%20in%20Mars%20-%20Siam%20Paragon%20MF!5e0!3m2!1sen!2sus!4v1585571550339!5m2!1sen!2sus', '2020-10-08 04:04:55', '::1', '2020-10-08 04:04:55', 0);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_agent_banner`
--

CREATE TABLE `lv_agent_banner` (
  `agent_banner_id` int(11) NOT NULL,
  `agent_banner_image_th` varchar(255) NOT NULL,
  `agent_banner_image_en` varchar(255) NOT NULL,
  `agent_banner_image_ch` varchar(255) NOT NULL,
  `agent_banner_datetime_update` datetime NOT NULL,
  `agent_banner_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `lv_agent_banner`
--

INSERT INTO `lv_agent_banner` (`agent_banner_id`, `agent_banner_image_th`, `agent_banner_image_en`, `agent_banner_image_ch`, `agent_banner_datetime_update`, `agent_banner_ip_update`) VALUES
(1, 'unnamed (4).jpg', 'unnamed (4).jpg', 'unnamed (4).jpg', '2022-03-23 02:19:26', '1.47.137.162');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_agent_data_register`
--

CREATE TABLE `lv_agent_data_register` (
  `agent_data_register_id` int(11) NOT NULL,
  `agent_data_register_detail_th` longtext COLLATE utf8_unicode_ci NOT NULL,
  `agent_data_register_detail_en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `agent_data_register_detail_ch` longtext COLLATE utf8_unicode_ci NOT NULL,
  `agent_data_register_datetime_update` datetime NOT NULL,
  `agent_data_register_ip_update` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `lv_agent_data_register`
--

INSERT INTO `lv_agent_data_register` (`agent_data_register_id`, `agent_data_register_detail_th`, `agent_data_register_detail_en`, `agent_data_register_detail_ch`, `agent_data_register_datetime_update`, `agent_data_register_ip_update`) VALUES
(1, '<p>\r\n	เงื่อนไขการสมัครเป็นตัวแทนกับ Lamocha</p><br>\r\n<p>\r\n	1. aaa</p><br>\r\n<p>\r\n	2. bbb</p><br>\r\n<p>\r\n	3. ccc</p>', '<p>\r\n	Agent Condition Lamocha</p><br>\r\n<p>\r\n	1. aaa</p><br>\r\n<p>\r\n	2. bbb</p><br>\r\n<p>\r\n	3. ccc</p>', '<p>\r\n	Agent Condition Lamocha</p><br>\r\n<p>\r\n	1. aaa</p><br>\r\n<p>\r\n	2. bbb</p><br>\r\n<p>\r\n	3. ccc</p>', '2022-03-16 07:57:20', '1.46.14.141');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_agent_product`
--

CREATE TABLE `lv_agent_product` (
  `agent_product_id` int(11) NOT NULL,
  `agent_product_name_th` varchar(255) NOT NULL,
  `agent_product_name_en` varchar(255) NOT NULL,
  `agent_product_name_ch` varchar(255) NOT NULL,
  `agent_product_datetime_create` datetime NOT NULL,
  `agent_product_ip_create` varchar(255) NOT NULL,
  `agent_product_datetime_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `agent_product_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `lv_agent_product`
--

INSERT INTO `lv_agent_product` (`agent_product_id`, `agent_product_name_th`, `agent_product_name_en`, `agent_product_name_ch`, `agent_product_datetime_create`, `agent_product_ip_create`, `agent_product_datetime_update`, `agent_product_ip_update`) VALUES
(1, 'ครีมกันแดด', 'ครีมกันแดด', 'ครีมกันแดด', '2020-10-09 08:40:19', '::1', '2022-01-28 01:15:35', '::1'),
(2, 'เซรั่ม', 'เซรั่ม', 'เซรั่ม', '2020-10-09 08:44:26', '::1', '2020-10-11 19:47:20', '::1'),
(4, 'ครีมบำรุง', 'ครีมบำรุง', 'ครีมบำรุง', '2020-10-12 02:47:37', '::1', '2020-10-11 19:47:37', '::1'),
(5, 'Ampoule', 'Ampoule', 'Ampoule', '2020-10-12 02:48:00', '::1', '2020-10-11 19:48:00', '::1');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_agent_shipping_address`
--

CREATE TABLE `lv_agent_shipping_address` (
  `agent_shipping_address_id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `agent_shipping_address_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agent_shipping_address_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agent_shipping_address_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agent_shipping_address_telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agent_shipping_address_address` text COLLATE utf8_unicode_ci NOT NULL,
  `agent_shipping_address_province` int(11) NOT NULL,
  `agent_shipping_address_amphur` int(11) NOT NULL,
  `agent_shipping_address_country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agent_shipping_address_zipcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agent_shipping_address_default` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `agent_shipping_address_datetime_create` datetime NOT NULL,
  `agent_shipping_address_ip_create` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agent_shipping_address_datetime_update` datetime NOT NULL,
  `agent_shipping_address_ip_update` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `lv_agent_shipping_address`
--

INSERT INTO `lv_agent_shipping_address` (`agent_shipping_address_id`, `agent_id`, `agent_shipping_address_name`, `agent_shipping_address_surname`, `agent_shipping_address_email`, `agent_shipping_address_telephone`, `agent_shipping_address_address`, `agent_shipping_address_province`, `agent_shipping_address_amphur`, `agent_shipping_address_country`, `agent_shipping_address_zipcode`, `agent_shipping_address_default`, `agent_shipping_address_datetime_create`, `agent_shipping_address_ip_create`, `agent_shipping_address_datetime_update`, `agent_shipping_address_ip_update`) VALUES
(16, 2, '0', '9', '8@fds.com', '7', '9', 4, 5, 'Malaysia', '9', 'No', '2022-03-01 07:19:41', '::1', '2022-03-01 07:19:41', '::1'),
(17, 2, '0', '9', '8@fds.com', '7', '9', 4, 5, 'Laos', '9', 'No', '2022-03-01 07:19:41', '::1', '2022-03-01 07:19:41', '::1'),
(18, 2, '0', '9', '8@fds.com', '7', '9', 4, 5, 'Thai', '9', 'No', '2022-03-01 07:19:41', '::1', '2022-03-01 07:19:41', '::1');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_banner_slide`
--

CREATE TABLE `lv_banner_slide` (
  `banner_slide_id` int(11) NOT NULL,
  `banner_slide_image_th` varchar(255) NOT NULL,
  `banner_slide_image_en` varchar(255) NOT NULL,
  `banner_slide_image_ch` varchar(255) NOT NULL,
  `banner_slide_link` varchar(255) NOT NULL,
  `banner_slide_datetime_create` datetime NOT NULL,
  `banner_slide_ip_create` varchar(255) NOT NULL,
  `banner_slide_datetime_update` datetime NOT NULL,
  `banner_slide_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `lv_banner_slide`
--

INSERT INTO `lv_banner_slide` (`banner_slide_id`, `banner_slide_image_th`, `banner_slide_image_en`, `banner_slide_image_ch`, `banner_slide_link`, `banner_slide_datetime_create`, `banner_slide_ip_create`, `banner_slide_datetime_update`, `banner_slide_ip_update`) VALUES
(1, 'S__129974276 (1).jpg', 'S__129974276 (1).jpg', 'S__129974276 (1).jpg', 'https://www.sanook.com', '2020-10-20 04:02:27', '124.120.117.45', '2022-04-28 06:12:28', '1.46.129.255'),
(3, 'S__129966118.jpg', 'S__129966118.jpg', 'S__129966118.jpg', '', '2020-10-20 04:12:07', '124.120.117.45', '2022-03-16 10:11:05', '1.46.14.141'),
(4, 'bannerhome_2.png', 'bannerhome_2.png', 'bannerhome_2.png', '', '2022-04-27 09:36:18', '1.46.129.255', '2022-04-27 09:36:18', '1.46.129.255');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_coach`
--

CREATE TABLE `lv_coach` (
  `coach_id` int(11) NOT NULL,
  `coach_image` varchar(255) DEFAULT NULL,
  `coach_name_th` varchar(255) NOT NULL,
  `coach_name_en` varchar(255) NOT NULL,
  `coach_name_ch` varchar(255) NOT NULL,
  `coach_nickname_th` varchar(255) NOT NULL,
  `coach_nickname_en` varchar(255) NOT NULL,
  `coach_nickname_ch` varchar(255) NOT NULL,
  `coach_description_th` text NOT NULL,
  `coach_description_en` text NOT NULL,
  `coach_description_ch` text NOT NULL,
  `coach_datetime_create` datetime NOT NULL,
  `coach_ip_create` varchar(255) NOT NULL,
  `coach_datetime_update` datetime NOT NULL,
  `coach_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `lv_coach`
--

INSERT INTO `lv_coach` (`coach_id`, `coach_image`, `coach_name_th`, `coach_name_en`, `coach_name_ch`, `coach_nickname_th`, `coach_nickname_en`, `coach_nickname_ch`, `coach_description_th`, `coach_description_en`, `coach_description_ch`, `coach_datetime_create`, `coach_ip_create`, `coach_datetime_update`, `coach_ip_update`) VALUES
(1, 'img_study.png', 'ดาราวรรณ ล่องคลอง', 'ดาราวรรณ ล่องคลอง', 'ดาราวรรณ ล่องคลอง', 'โค้ชมิน', 'โค้ชมิน', 'โค้ชมิน', 'นายหน้าอสังหาฯ มืออาชีพ ประสบการณ์มากกว่า 7 ปี!@#$%^&*()ผู้เชี่ยวชาญด้านการตลาดออนไลน์ขายอสังหาฯ Facebook Ads และ Google Ads!@#$%^&*()ผู้ร่วมก่อตั้งบริษัทโบรคเกอร์อสังหาฯ เป็นตัวแทนนาย หน้าฯ ดูแลการขายอสังหาฯ มูลค่ากว่า 1,000 ล้านบาท!@#$%^&*()วิทยากรสอนตัวแทนนายหน้าอสังหาฯมากว่า 15 รุ่น !!!@#$%^&*()', 'นายหน้าอสังหาฯ มืออาชีพ ประสบการณ์มากกว่า 7 ปี!@#$%^&*()ผู้เชี่ยวชาญด้านการตลาดออนไลน์ขายอสังหาฯ Facebook Ads และ Google Ads!@#$%^&*()ผู้ร่วมก่อตั้งบริษัทโบรคเกอร์อสังหาฯ เป็นตัวแทนนาย หน้าฯ ดูแลการขายอสังหาฯ มูลค่ากว่า 1,000 ล้านบาท!@#$%^&*()วิทยากรสอนตัวแทนนายหน้าอสังหาฯมากว่า 15 รุ่น !!!@#$%^&*()', 'นายหน้าอสังหาฯ มืออาชีพ ประสบการณ์มากกว่า 7 ปี!@#$%^&*()ผู้เชี่ยวชาญด้านการตลาดออนไลน์ขายอสังหาฯ Facebook Ads และ Google Ads!@#$%^&*()ผู้ร่วมก่อตั้งบริษัทโบรคเกอร์อสังหาฯ เป็นตัวแทนนาย หน้าฯ ดูแลการขายอสังหาฯ มูลค่ากว่า 1,000 ล้านบาท!@#$%^&*()วิทยากรสอนตัวแทนนายหน้าอสังหาฯมากว่า 15 รุ่น !!!@#$%^&*()', '2020-10-06 03:43:26', '::1', '2020-10-06 06:32:02', '::1');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_contact_us`
--

CREATE TABLE `lv_contact_us` (
  `contact_us_id` int(11) NOT NULL,
  `contact_us_name` varchar(255) NOT NULL,
  `contact_us_surname` varchar(255) NOT NULL,
  `contact_us_email` varchar(255) NOT NULL,
  `contact_us_telephone` varchar(255) NOT NULL,
  `contact_us_message` text NOT NULL,
  `contact_us_datetime_create` datetime NOT NULL,
  `contact_us_ip_create` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `lv_contact_us`
--

INSERT INTO `lv_contact_us` (`contact_us_id`, `contact_us_name`, `contact_us_surname`, `contact_us_email`, `contact_us_telephone`, `contact_us_message`, `contact_us_datetime_create`, `contact_us_ip_create`) VALUES
(1, 'Ford', 'Fuji', 'nirvanaford94@gmail.com', '0999999999', 'Test', '2020-10-05 10:27:15', '::1'),
(2, 'Ford', 'Fuji', 'nirvanaford94@gmail.com', '0999999999', 'Test', '2020-10-05 10:27:31', '::1'),
(3, 'Ford', 'Fuji', 'nirvanaford94@gmail.com', '0999999999', 'Test', '2020-10-05 10:28:41', '::1'),
(4, 'Ford', 'Fuji', 'nirvanaford94@gmail.com', '0999999999', 'ooo', '2020-10-05 10:29:46', '::1'),
(5, 'Ford', 'Fuji', 'nirvanaford94@gmail.com', '0999999999', 'Test', '2020-10-08 04:48:10', '::1'),
(6, 'Ford', 'Fuji', 'nirvanaford94@gmail.com', '0999999999', 'Test', '2020-10-08 04:48:27', '::1'),
(7, 'Ford', 'Fuji', 'nirvanaford94@gmail.com', '0999999999', 'Test', '2020-10-08 04:48:40', '::1'),
(8, 'Ford', 'Fuji', 'nirvanaford94@gmail.com', '0999999999', 'Test', '2020-10-08 04:49:03', '::1'),
(9, 'Ford', 'Fuji', 'nirvanaford94@gmail.com', '0999999999', 'Test', '2020-10-08 04:50:42', '::1'),
(10, 'Ford', 'Fuji', 'nirvanaford94@gmail.com', '0999999999', 'Test', '2020-10-08 04:51:41', '::1'),
(11, 'Ford', 'Fuji', 'nirvanaford94@gmail.com', '0999999999', 'Test', '2020-10-08 04:52:51', '::1'),
(12, 'test', 'test', 'test@test.com', '0963206829', 'Test', '2022-01-19 05:40:43', '1.47.19.163');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_country`
--

CREATE TABLE `lv_country` (
  `country_id` int(11) NOT NULL,
  `country_name_th` varchar(255) NOT NULL,
  `country_name_en` varchar(255) NOT NULL,
  `country_name_ch` varchar(255) NOT NULL,
  `country_delivery_day` varchar(255) NOT NULL,
  `country_rate_normal_1_2` float(10,2) DEFAULT NULL,
  `country_rate_normal_3_5` float(10,2) DEFAULT NULL,
  `country_rate_normal_6_9` float(10,2) DEFAULT NULL,
  `country_rate_normal_10_29` float(10,2) DEFAULT NULL,
  `country_rate_normal_30_59` float(10,2) DEFAULT NULL,
  `country_rate_normal_60_149` float(10,2) DEFAULT NULL,
  `country_rate_normal_150_499` float(10,2) DEFAULT NULL,
  `country_rate_normal_500_4999` float(10,2) DEFAULT NULL,
  `country_rate_normal_5000_10000` float(10,2) DEFAULT NULL,
  `country_rate_except_1_2` float(10,2) DEFAULT NULL,
  `country_rate_except_3_5` float(10,2) DEFAULT NULL,
  `country_rate_except_6_9` float(10,2) DEFAULT NULL,
  `country_rate_except_10_29` float(10,2) DEFAULT NULL,
  `country_rate_except_30_59` float(10,2) DEFAULT NULL,
  `country_rate_except_60_149` float(10,2) DEFAULT NULL,
  `country_rate_except_150_499` float(10,2) DEFAULT NULL,
  `country_rate_except_500_4999` float(10,2) DEFAULT NULL,
  `country_rate_except_5000_10000` float(10,2) DEFAULT NULL,
  `country_except_product_id_1_2` int(11) DEFAULT NULL,
  `country_except_product_id_3_5` int(11) DEFAULT NULL,
  `country_except_product_id_6_9` int(11) DEFAULT NULL,
  `country_except_product_id_10_29` int(11) DEFAULT NULL,
  `country_except_product_id_30_59` int(11) DEFAULT NULL,
  `country_except_product_id_60_149` int(11) DEFAULT NULL,
  `country_except_product_id_150_499` int(11) DEFAULT NULL,
  `country_except_product_id_500_4999` float(10,2) DEFAULT NULL,
  `country_except_product_id_5000_10000` int(11) DEFAULT NULL,
  `country_datetime_create` datetime NOT NULL,
  `country_ip_create` varchar(255) NOT NULL,
  `country_datetime_update` datetime NOT NULL,
  `country_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `lv_country`
--

INSERT INTO `lv_country` (`country_id`, `country_name_th`, `country_name_en`, `country_name_ch`, `country_delivery_day`, `country_rate_normal_1_2`, `country_rate_normal_3_5`, `country_rate_normal_6_9`, `country_rate_normal_10_29`, `country_rate_normal_30_59`, `country_rate_normal_60_149`, `country_rate_normal_150_499`, `country_rate_normal_500_4999`, `country_rate_normal_5000_10000`, `country_rate_except_1_2`, `country_rate_except_3_5`, `country_rate_except_6_9`, `country_rate_except_10_29`, `country_rate_except_30_59`, `country_rate_except_60_149`, `country_rate_except_150_499`, `country_rate_except_500_4999`, `country_rate_except_5000_10000`, `country_except_product_id_1_2`, `country_except_product_id_3_5`, `country_except_product_id_6_9`, `country_except_product_id_10_29`, `country_except_product_id_30_59`, `country_except_product_id_60_149`, `country_except_product_id_150_499`, `country_except_product_id_500_4999`, `country_except_product_id_5000_10000`, `country_datetime_create`, `country_ip_create`, `country_datetime_update`, `country_ip_update`) VALUES
(6, 'Australia', 'Australia', 'Australia', '7-10 business days', 1000.00, 1400.00, 1600.00, 1800.00, 4000.00, 8000.00, 20000.00, 32000.00, 320000.00, 1400.00, 1600.00, 1800.00, 2000.00, 4400.00, 8400.00, 8600.00, 39000.00, 390000.00, 1, 1, 1, 1, 1, 1, 1, 1.00, 1, '2022-01-06 02:17:02', '::1', '2022-01-27 03:52:03', '::1'),
(7, 'Switzerland', 'Switzerland', 'Switzerland', '7-10 business days', 1000.00, 1400.00, 1600.00, 1800.00, 5200.00, 3600.00, 9000.00, 45000.00, 450000.00, 1400.00, 1600.00, 1800.00, 2000.00, 2200.00, 4000.00, 9600.00, 56000.00, 560000.00, 1, 1, 1, 1, 1, 1, 1, 1.00, 1, '2022-01-27 03:20:01', '::1', '2022-01-27 03:54:08', '::1'),
(8, 'USA', 'USA', 'USA', '7-10 business days', 1700.00, 1900.00, 2100.00, 2300.00, 4000.00, 8000.00, 20000.00, 200000.00, 1800000.00, 1400.00, 2100.00, 2300.00, 2500.00, 4400.00, 8400.00, 24000.00, 250000.00, 2900000.00, 1, 1, 1, 1, 1, 1, 1, 1.00, 1, '2022-01-27 04:06:13', '::1', '2022-01-27 04:09:57', '::1'),
(9, 'Hongkong', 'Hongkong', 'Hongkong', '7-10 business days', 650.00, 800.00, 900.00, 1000.00, 2300.00, 4600.00, 11500.00, 57500.00, 575000.00, 890.00, 1000.00, 1100.00, 1200.00, 2600.00, 4800.00, 13000.00, 62000.00, 590000.00, 1, 1, 1, 1, 1, 1, 1, 1.00, 1, '2022-01-27 04:12:51', '::1', '2022-01-27 04:12:51', '::1'),
(10, 'Singapore', 'Singapore', 'Singapore', '7-10 business days', 500.00, 800.00, 900.00, 1000.00, 2300.00, 4600.00, 11500.00, 57500.00, 575000.00, 600.00, 950.00, 1100.00, 1200.00, 2600.00, 4800.00, 13500.00, 62000.00, 590000.00, 1, 1, 1, 1, 1, 1, 1, 1.00, 1, '2022-01-27 04:15:34', '::1', '2022-01-27 04:15:42', '::1'),
(11, 'Macau', 'Macau', 'Macau', '7-10 business days', 1650.00, 1850.00, 2050.00, 2500.00, 4500.00, 9000.00, 22500.00, 90500.00, 904999.00, 1890.00, 2050.00, 2250.00, 2700.00, 4800.00, 9400.00, 23500.00, 92500.00, 907500.00, 1, 1, 1, 1, 1, 1, 1, 1.00, 1, '2022-01-27 04:19:50', '::1', '2022-01-27 04:19:50', '::1'),
(12, 'United kingdom(อังกฤษ)', 'United kingdom(อังกฤษ)', 'United kingdom(อังกฤษ)', '7-10 business days', 1129.00, 1300.00, 1600.00, 1700.00, 3900.00, 7800.00, 19500.00, 77500.00, 775000.00, 1390.00, 1500.00, 1800.00, 1900.00, 4100.00, 8000.00, 23000.00, 82000.00, 801000.00, 1, 1, 1, 1, 1, 1, 1, 1.00, 1, '2022-01-27 04:22:11', '::1', '2022-01-27 04:23:37', '::1'),
(13, 'Indonesia', 'Indonesia', 'Indonesia', '7-10 business days', 800.00, 950.00, 1300.00, 1600.00, 4100.00, 8200.00, 20500.00, 87500.00, 875000.00, 890.00, 1200.00, 1500.00, 1800.00, 4300.00, 8600.00, 21500.00, 92000.00, 920000.00, 1, 1, 1, 1, 1, 1, 1, 1.00, 1, '2022-01-27 04:26:18', '::1', '2022-01-27 04:26:18', '::1'),
(14, 'Dobai', 'Dobai', 'Dobai', '7-10 business days', 800.00, 1200.00, 1300.00, 1500.00, 3700.00, 7400.00, 18500.00, 75000.00, 750000.00, 1000.00, 1400.00, 1500.00, 1700.00, 4200.00, 7800.00, 21000.00, 82000.00, 820000.00, 1, 1, 1, 1, 1, 1, 1, 1.00, 1, '2022-01-27 04:28:37', '::1', '2022-01-27 04:28:37', '::1'),
(15, 'Malaysia', 'Malaysia', 'Malaysia', '7-10 business days', 650.00, 800.00, 900.00, 1100.00, 2800.00, 5600.00, 14000.00, 57500.00, 575000.00, 890.00, 1000.00, 1100.00, 1300.00, 3000.00, 5800.00, 15900.00, 62000.00, 590000.00, 1, 1, 1, 1, 1, 1, 1, 1.00, 1, '2022-01-27 04:31:14', '::1', '2022-01-27 04:31:14', '::1'),
(16, 'Laos', 'Laos', 'Laos', '1-2 business days', 100.00, 100.00, 100.00, 100.00, 100.00, 200.00, 500.00, 700.00, 1000.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-27 04:38:50', '::1', '2022-01-27 04:38:58', '::1'),
(17, 'Thai', 'Thai', 'Thai', '1-2 business days', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-28 04:28:16', '::1', '2022-01-28 04:28:16', '::1');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_favourite`
--

CREATE TABLE `lv_favourite` (
  `favourite_id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `favourite_datetime_create` datetime NOT NULL,
  `favourite_ip_create` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `lv_favourite`
--

INSERT INTO `lv_favourite` (`favourite_id`, `agent_id`, `product_id`, `favourite_datetime_create`, `favourite_ip_create`) VALUES
(1, 2, 3, '2022-01-17 07:05:06', '::1'),
(2, 2, 4, '2022-01-17 07:05:59', '::1'),
(3, 2, 5, '2022-01-17 07:25:18', '::1');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_first_fee`
--

CREATE TABLE `lv_first_fee` (
  `first_fee_id` int(11) NOT NULL,
  `first_fee_amount` float(10,2) NOT NULL,
  `first_fee_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `lv_first_fee`
--

INSERT INTO `lv_first_fee` (`first_fee_id`, `first_fee_amount`, `first_fee_datetime_update`) VALUES
(1, 999.00, '2021-12-10 04:20:07');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_logo`
--

CREATE TABLE `lv_logo` (
  `logo_id` int(11) NOT NULL,
  `logo_image_th` varchar(255) NOT NULL,
  `logo_image_en` varchar(255) NOT NULL,
  `logo_image_ch` varchar(255) NOT NULL,
  `logo_link` varchar(255) NOT NULL,
  `logo_datetime_create` datetime NOT NULL,
  `logo_ip_create` varchar(255) NOT NULL,
  `logo_datetime_update` datetime NOT NULL,
  `logo_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `lv_logo`
--

INSERT INTO `lv_logo` (`logo_id`, `logo_image_th`, `logo_image_en`, `logo_image_ch`, `logo_link`, `logo_datetime_create`, `logo_ip_create`, `logo_datetime_update`, `logo_ip_update`) VALUES
(1, 'cover_1601538779.png', 'cover_1601538779.png', 'cover_1601538779.png', 'https://www.sanook.com', '2020-10-01 07:52:59', '::1', '2021-10-18 07:09:48', '1.46.158.255'),
(2, 'cover_1601538800.png', 'cover_1601538800.png', 'cover_1601538800.png', '', '2020-10-01 07:53:20', '::1', '2020-10-01 07:53:20', '::1'),
(3, 'cover_1601538826.png', 'cover_1601538826.png', 'cover_1601538826.png', '', '2020-10-01 07:53:46', '::1', '2020-10-01 07:53:46', '::1'),
(6, 'S__130416651.jpg', 'S__130416651.jpg', 'S__130416651.jpg', 'https://ford.com', '2022-03-22 02:55:42', '124.120.116.154', '2022-03-22 02:55:42', '124.120.116.154'),
(8, 'S__130416652.jpg', 'S__130416652.jpg', 'S__130416652.jpg', 'https://lamocha.com', '2022-03-22 02:58:33', '124.120.116.154', '2022-03-22 02:58:33', '124.120.116.154');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_message_top`
--

CREATE TABLE `lv_message_top` (
  `message_top_id` int(11) NOT NULL,
  `message_top_th` varchar(255) NOT NULL,
  `message_top_en` varchar(255) NOT NULL,
  `message_top_ch` varchar(255) NOT NULL,
  `message_top_datetime_update` datetime NOT NULL,
  `message_top_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_news`
--

CREATE TABLE `lv_news` (
  `news_id` int(11) NOT NULL,
  `news_image` varchar(255) NOT NULL,
  `news_name_th` varchar(255) NOT NULL,
  `news_name_en` varchar(255) NOT NULL,
  `news_name_ch` varchar(255) NOT NULL,
  `news_date` date NOT NULL,
  `news_detail_th` text NOT NULL,
  `news_detail_en` text NOT NULL,
  `news_detail_ch` text NOT NULL,
  `news_datetime_create` datetime NOT NULL,
  `news_ip_create` varchar(255) NOT NULL,
  `news_datetime_update` datetime NOT NULL,
  `news_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `lv_news`
--

INSERT INTO `lv_news` (`news_id`, `news_image`, `news_name_th`, `news_name_en`, `news_name_ch`, `news_date`, `news_detail_th`, `news_detail_en`, `news_detail_ch`, `news_datetime_create`, `news_ip_create`, `news_datetime_update`, `news_ip_update`) VALUES
(1, 'img-new-1.jpg', 'LaMocha-มีตติ้งตัวแทนจำหน่าย', 'LaMocha-มีตติ้งตัวแทนจำหน่าย', 'LaMocha-มีตติ้งตัวแทนจำหน่าย', '2020-10-08', 'เมื่อเครื่องพิมพ์โนเนมเครื่องหนึ่งนำรางตัวพิมพ์มาสลับสับตำแหน่งตัวอักษรเพื่อทำหนังสือตัวอย่าง Lorem Ipsum อยู่ยงคงกระพันมาไม่ใช่แค่เพียงห้าศตวรรษ แต่อยู่มาจนถึงยุคที่พลิกโฉมเข้าสู่งานเรียงพิมพ์ด้วยวิธีทางอิเล็กทรอนิกส์ และยังคงสภาพเดิมไว้อย่างไม่มีการเปลี่ยนแปลง มันได้รับความนิยมมากขึ้นในยุค ค.ศ. 1960 เมื่อแผ่น Letraset วางจำหน่ายโดยมีข้อความบนนั้นเป็น Lorem Ipsum', 'เมื่อเครื่องพิมพ์โนเนมเครื่องหนึ่งนำรางตัวพิมพ์มาสลับสับตำแหน่งตัวอักษรเพื่อทำหนังสือตัวอย่าง Lorem Ipsum อยู่ยงคงกระพันมาไม่ใช่แค่เพียงห้าศตวรรษ แต่อยู่มาจนถึงยุคที่พลิกโฉมเข้าสู่งานเรียงพิมพ์ด้วยวิธีทางอิเล็กทรอนิกส์ และยังคงสภาพเดิมไว้อย่างไม่มีการเปลี่ยนแปลง มันได้รับความนิยมมากขึ้นในยุค ค.ศ. 1960 เมื่อแผ่น Letraset วางจำหน่ายโดยมีข้อความบนนั้นเป็น Lorem Ipsum', 'เมื่อเครื่องพิมพ์โนเนมเครื่องหนึ่งนำรางตัวพิมพ์มาสลับสับตำแหน่งตัวอักษรเพื่อทำหนังสือตัวอย่าง Lorem Ipsum อยู่ยงคงกระพันมาไม่ใช่แค่เพียงห้าศตวรรษ แต่อยู่มาจนถึงยุคที่พลิกโฉมเข้าสู่งานเรียงพิมพ์ด้วยวิธีทางอิเล็กทรอนิกส์ และยังคงสภาพเดิมไว้อย่างไม่มีการเปลี่ยนแปลง มันได้รับความนิยมมากขึ้นในยุค ค.ศ. 1960 เมื่อแผ่น Letraset วางจำหน่ายโดยมีข้อความบนนั้นเป็น Lorem Ipsum', '2020-10-08 07:10:07', '::1', '2020-10-08 07:10:07', '::1'),
(2, 'img-new-1.jpg', 'LaMocha-มีตติ้งตัวแทนจำหน่าย', 'LaMocha-มีตติ้งตัวแทนจำหน่าย', 'LaMocha-มีตติ้งตัวแทนจำหน่าย', '2020-10-08', 'เมื่อเครื่องพิมพ์โนเนมเครื่องหนึ่งนำรางตัวพิมพ์มาสลับสับตำแหน่งตัวอักษรเพื่อทำหนังสือตัวอย่าง Lorem Ipsum อยู่ยงคงกระพันมาไม่ใช่แค่เพียงห้าศตวรรษ แต่อยู่มาจนถึงยุคที่พลิกโฉมเข้าสู่งานเรียงพิมพ์ด้วยวิธีทางอิเล็กทรอนิกส์ และยังคงสภาพเดิมไว้อย่างไม่มีการเปลี่ยนแปลง มันได้รับความนิยมมากขึ้นในยุค ค.ศ. 1960 เมื่อแผ่น Letraset วางจำหน่ายโดยมีข้อความบนนั้นเป็น Lorem Ipsum', 'เมื่อเครื่องพิมพ์โนเนมเครื่องหนึ่งนำรางตัวพิมพ์มาสลับสับตำแหน่งตัวอักษรเพื่อทำหนังสือตัวอย่าง Lorem Ipsum อยู่ยงคงกระพันมาไม่ใช่แค่เพียงห้าศตวรรษ แต่อยู่มาจนถึงยุคที่พลิกโฉมเข้าสู่งานเรียงพิมพ์ด้วยวิธีทางอิเล็กทรอนิกส์ และยังคงสภาพเดิมไว้อย่างไม่มีการเปลี่ยนแปลง มันได้รับความนิยมมากขึ้นในยุค ค.ศ. 1960 เมื่อแผ่น Letraset วางจำหน่ายโดยมีข้อความบนนั้นเป็น Lorem Ipsum', 'เมื่อเครื่องพิมพ์โนเนมเครื่องหนึ่งนำรางตัวพิมพ์มาสลับสับตำแหน่งตัวอักษรเพื่อทำหนังสือตัวอย่าง Lorem Ipsum อยู่ยงคงกระพันมาไม่ใช่แค่เพียงห้าศตวรรษ แต่อยู่มาจนถึงยุคที่พลิกโฉมเข้าสู่งานเรียงพิมพ์ด้วยวิธีทางอิเล็กทรอนิกส์ และยังคงสภาพเดิมไว้อย่างไม่มีการเปลี่ยนแปลง มันได้รับความนิยมมากขึ้นในยุค ค.ศ. 1960 เมื่อแผ่น Letraset วางจำหน่ายโดยมีข้อความบนนั้นเป็น Lorem Ipsum', '2020-10-08 07:11:00', '::1', '2020-10-08 07:11:00', '::1'),
(3, 'img-new-1_1.jpg', '3LaMocha-มีตติ้งตัวแทนจำหน่าย', '3LaMocha-มีตติ้งตัวแทนจำหน่าย', '3LaMocha-มีตติ้งตัวแทนจำหน่าย', '2020-10-09', '333', '333', '333', '2020-10-08 07:41:40', '::1', '2020-10-08 07:41:40', '::1'),
(4, 'CEO.jpg', '4444', '44444', '444444', '2020-10-10', '4444444', '44444', '444444', '2020-10-08 07:44:06', '::1', '2020-10-08 07:44:06', '::1'),
(5, 'img-new-1_1.jpg', '555', '555', '55555', '2020-10-21', '55555', '5555', '55555', '2020-10-08 07:44:43', '::1', '2020-10-08 07:44:43', '::1'),
(6, 'bg-footer.jpg', '11111', '11111', '11111', '2020-10-27', '111111111', '11111111', '11111111', '2020-10-08 07:45:19', '::1', '2020-10-08 07:45:19', '::1'),
(7, 'bannerhome-1.jpg', '777', '777', '777', '2020-10-17', '77777777', '77777777', '7777777', '2020-10-08 08:24:20', '::1', '2020-10-08 08:24:20', '::1');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_newsletter`
--

CREATE TABLE `lv_newsletter` (
  `newsletter_id` int(11) NOT NULL,
  `newsletter_email` varchar(255) NOT NULL,
  `newsletter_datetime_create` datetime NOT NULL,
  `newsletter_ip_create` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `lv_newsletter`
--

INSERT INTO `lv_newsletter` (`newsletter_id`, `newsletter_email`, `newsletter_datetime_create`, `newsletter_ip_create`) VALUES
(1, 'ford@ford.com', '2022-03-21 07:57:49', '1.47.137.162'),
(2, 'test@test.com', '2022-03-30 08:07:00', '1.46.4.65'),
(3, 'sitiporn@orange-thailand.com', '2022-03-30 09:02:55', '1.46.4.65');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_news_gallery`
--

CREATE TABLE `lv_news_gallery` (
  `news_gallery_id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `news_gallery_image` varchar(255) NOT NULL,
  `news_gallery_datetime_create` datetime NOT NULL,
  `news_gallery_ip_create` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `lv_news_gallery`
--

INSERT INTO `lv_news_gallery` (`news_gallery_id`, `news_id`, `news_gallery_image`, `news_gallery_datetime_create`, `news_gallery_ip_create`) VALUES
(1, 2, 'bannerhome-1.jpg', '2020-10-08 07:11:01', '::1'),
(2, 2, 'bg-footer.jpg', '2020-10-08 07:11:01', '::1'),
(4, 3, 'img-new-1.jpg', '2020-10-08 07:41:40', '::1'),
(5, 3, 'img-new-1_1.jpg', '2020-10-08 07:41:41', '::1'),
(6, 4, 'bannerhome-1.jpg', '2020-10-08 07:44:06', '::1'),
(7, 4, 'bg-footer.jpg', '2020-10-08 07:44:06', '::1'),
(8, 4, 'bg-menu.jpg', '2020-10-08 07:44:07', '::1'),
(9, 5, 'bannerhome-1.jpg', '2020-10-08 07:44:44', '::1'),
(10, 5, 'bg-footer.jpg', '2020-10-08 07:44:44', '::1'),
(11, 5, 'bg-menu.jpg', '2020-10-08 07:44:44', '::1'),
(12, 6, 'bannerhome-1.jpg', '2020-10-08 07:45:20', '::1'),
(13, 6, 'bg-footer.jpg', '2020-10-08 07:45:20', '::1'),
(14, 6, 'bg-menu.jpg', '2020-10-08 07:45:20', '::1'),
(15, 7, 'customer-1.png', '2020-10-08 08:24:20', '::1'),
(16, 7, 'customer-2.png', '2020-10-08 08:24:20', '::1'),
(17, 7, 'customer-3.png', '2020-10-08 08:24:20', '::1');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_order`
--

CREATE TABLE `lv_order` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_detail_id` int(11) NOT NULL,
  `order_image` varchar(255) NOT NULL,
  `order_name` varchar(1000) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `order_price` float(10,2) NOT NULL,
  `order_use_point` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `lv_order`
--

INSERT INTO `lv_order` (`order_id`, `product_id`, `order_detail_id`, `order_image`, `order_name`, `order_qty`, `order_price`, `order_use_point`) VALUES
(1, 5, 1, 'cream2.png', 'ครีมบำรุง  ( LA MOCHA MOM & BABY Moisturerizing Mask & Massage Cream ) 30 g', 1, 1550.00, 0),
(2, 3, 2, 'serum.png', 'เซรั่ม (LA MOCHA 8 Gold Miracle   Face & Eye serum ) 30 ml', 1, 1590.00, 0),
(3, 3, 3, 'serum.png', 'เซรั่ม (LA MOCHA 8 Gold Miracle   Face & Eye serum ) 30 ml', 1160, 1590.00, 0),
(4, 4, 3, 'ampull.png', 'แอมพูล ( LA MOCHA Premium light & Bright Skin Ampoule ) 15 ml', 1, 799.00, 0),
(5, 5, 4, 'cream2.png', 'ครีมบำรุง  ( LA MOCHA MOM & BABY Moisturerizing Mask & Massage Cream ) 30 g', 1, 1240.00, 0),
(6, 1, 5, 'Foam_Face.png', 'โฟมล้างหน้า (LA MOCHA fresh & Smooth Cleansing Perfect Foam ) 100 g', 1, 712.00, 0),
(7, 5, 6, 'cream2.png', 'ครีมบำรุง  ( LA MOCHA MOM & BABY Moisturerizing Mask & Massage Cream ) 30 g', 1, 1240.00, 0),
(8, 4, 7, 'ampull.png', 'แอมพูล ( LA MOCHA Premium light & Bright Skin Ampoule ) 15 ml', 10000, 399.50, 0),
(9, 2, 8, 'cream.png', 'ครีมกันแดด ( LA MOCHA Perfect smooth mousse sunscreen SPF 50 PA ++++ ) 30 g', 1, 1250.00, 0),
(10, 1, 9, 'Foam_Face.png', 'โฟมล้างหน้า (LA MOCHA fresh & Smooth Cleansing Perfect Foam ) 100 g', 1, 890.00, 0),
(11, -1, 9, 'pon1.png', 'Point Product', 1, 0.00, 30),
(12, 5, 10, 'cream2.png', 'ครีมบำรุง  ( LA MOCHA MOM & BABY Moisturerizing Mask & Massage Cream ) 30 g', 1, 1550.00, 0),
(13, -2, 10, 'pon2.png', 'Point Product', 1, 0.00, 50),
(14, -2, 11, 'pon2.png', 'Point Product', 1, 0.00, 50),
(15, 5, 11, 'cream2.png', 'ครีมบำรุง  ( LA MOCHA MOM & BABY Moisturerizing Mask & Massage Cream ) 30 g', 1, 1550.00, 0),
(16, 1, 12, '', 'ฟรี', 1, 0.00, 25),
(17, 5, 12, 'cream2.png', 'ครีมบำรุง  ( LA MOCHA MOM & BABY Moisturerizing Mask & Massage Cream ) 30 g', 1, 1550.00, 0),
(18, 2, 13, 'customer-5.png', 'กระต่าย', 1, 0.00, 50),
(19, 5, 13, 'cream2.png', 'ครีมบำรุง  ( LA MOCHA MOM & BABY Moisturerizing Mask & Massage Cream ) 30 g', 1, 1550.00, 0);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_order_detail`
--

CREATE TABLE `lv_order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_no` varchar(255) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `order_detail_shipping_method` enum('Register','EMS') NOT NULL,
  `order_detail_payment_method` varchar(255) NOT NULL,
  `order_detail_payment_bank` varchar(1000) DEFAULT NULL,
  `order_detail_sub_total` float(10,2) NOT NULL,
  `order_detail_discount` float(10,2) NOT NULL,
  `order_detail_shipping` float(10,2) NOT NULL,
  `order_detail_total` float(10,2) NOT NULL,
  `order_detail_vat_7_percent` enum('No','Yes') NOT NULL,
  `order_detail_currency` enum('USD','THB') NOT NULL,
  `order_detail_name` varchar(1000) NOT NULL,
  `order_detail_surname` varchar(1000) NOT NULL,
  `order_detail_telephone` varchar(1000) NOT NULL,
  `order_detail_email` varchar(1000) NOT NULL,
  `order_detail_address` text NOT NULL,
  `order_detail_country` varchar(1000) NOT NULL,
  `order_detail_amphur` varchar(1000) NOT NULL,
  `order_detail_province` varchar(1000) NOT NULL,
  `order_detail_postal_code` varchar(1000) NOT NULL,
  `order_detail_qty_more_150` varchar(255) DEFAULT NULL,
  `order_detail_company_shipping` varchar(255) DEFAULT NULL,
  `order_detail_billing_name` varchar(255) DEFAULT NULL,
  `order_detail_billing_surname` varchar(255) DEFAULT NULL,
  `order_detail_billing_telephone` varchar(255) DEFAULT NULL,
  `order_detail_billing_email` varchar(255) DEFAULT NULL,
  `order_detail_billing_address` varchar(255) DEFAULT NULL,
  `order_detail_billing_country` varchar(255) DEFAULT NULL,
  `order_detail_billing_amphur` varchar(255) DEFAULT NULL,
  `order_detail_billing_province` varchar(255) DEFAULT NULL,
  `order_detail_billing_postal_code` varchar(255) DEFAULT NULL,
  `order_detail_status` enum('Ordering','Processing','Delivery','Shipped','Complete','Cancel') DEFAULT NULL,
  `order_detail_shipping_no` varchar(255) DEFAULT NULL,
  `order_detail_shipping_link` text DEFAULT NULL,
  `order_detail_point` int(11) NOT NULL,
  `order_detail_check_point` enum('No','Yes') NOT NULL COMMENT 'No = ยังไม่ Insert Point เข้าฟิลด์ agent_point, Yes = Inser Point แล้ว',
  `order_detail_datetime_create` datetime NOT NULL,
  `order_detail_ip_create` varchar(255) NOT NULL,
  `order_detail_datetime_update` datetime NOT NULL,
  `order_detail_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `lv_order_detail`
--

INSERT INTO `lv_order_detail` (`order_detail_id`, `order_no`, `agent_id`, `order_detail_shipping_method`, `order_detail_payment_method`, `order_detail_payment_bank`, `order_detail_sub_total`, `order_detail_discount`, `order_detail_shipping`, `order_detail_total`, `order_detail_vat_7_percent`, `order_detail_currency`, `order_detail_name`, `order_detail_surname`, `order_detail_telephone`, `order_detail_email`, `order_detail_address`, `order_detail_country`, `order_detail_amphur`, `order_detail_province`, `order_detail_postal_code`, `order_detail_qty_more_150`, `order_detail_company_shipping`, `order_detail_billing_name`, `order_detail_billing_surname`, `order_detail_billing_telephone`, `order_detail_billing_email`, `order_detail_billing_address`, `order_detail_billing_country`, `order_detail_billing_amphur`, `order_detail_billing_province`, `order_detail_billing_postal_code`, `order_detail_status`, `order_detail_shipping_no`, `order_detail_shipping_link`, `order_detail_point`, `order_detail_check_point`, `order_detail_datetime_create`, `order_detail_ip_create`, `order_detail_datetime_update`, `order_detail_ip_update`) VALUES
(1, '1', 2, 'EMS', 'Paypal', NULL, 1550.00, 0.00, 100.00, 1765.50, 'Yes', 'THB', 'สิทธิพร', 'ตรองวิเชียร', '0990943010', 'nirvanaford94@gmail.com', 'test', 'Laos', 'บางซื่อ', 'นครหลวงเวียงจันทร์', '10800', NULL, NULL, 'สิทธิพร', 'ตรองวิเชียร', '0990943010', 'nirvanaford94@gmail.com', 'test', 'Laos', 'บางซื่อ', 'นครหลวงเวียงจันทร์', '10800', 'Processing', 'TEST12345', 'https://www.sanook.com', 2, 'Yes', '2022-03-09 01:49:14', '1.46.31.137', '2022-06-09 08:46:07', '1.46.14.141'),
(2, '2', 0, 'EMS', 'ชำระผ่าน ATM', 'ชำระผ่าน ATM ธนาคารกรุงเทพ', 1590.00, 0.00, 650.00, 2396.80, 'Yes', 'THB', 'สิทธิพร', 'ตรองวิเชียร', '0999999999', 'nirvanaford94@gmail.com', 'test', 'Hongkong', 'Bangsue', 'Bangkok', '10890', NULL, NULL, 'สิทธิพร', 'ตรองวิเชียร', '0999999999', 'nirvanaford94@gmail.com', 'test', 'Hongkong', 'Bangsue', 'Bangkok', '10890', 'Processing', 'TEST12345', 'https://www.sanook.com', 2, 'No', '2022-03-16 07:23:24', '1.46.14.141', '2022-03-16 07:29:04', '1.46.14.141'),
(3, '3', 0, 'EMS', 'iBanking', 'iBanking ธนาคารกรุงเทพ', 1845199.00, 0.00, 800.00, 1845999.00, 'No', 'THB', 'สิทธิพร', 'ตรองวิเชียร', '0999999999', 'nirvanaford94@gmail.com', 'test', 'Laos', 'Bangsue', 'Bangkok', '10890', NULL, NULL, 'สิทธิพร', 'ตรองวิเชียร', '0999999999', 'nirvanaford94@gmail.com', 'test', 'Hongkong', 'Bangsue', 'Bangkok', '10890', 'Processing', 'TEST12345', 'https://www.sanook.com', 1845, 'No', '2022-03-16 08:03:38', '1.46.14.141', '2022-04-27 06:32:17', '1.46.14.141'),
(4, '4', 2, 'EMS', 'Paypal', NULL, 1240.00, 0.00, 100.00, 1433.80, 'Yes', 'THB', 'สิทธิพร', 'ตรองวิเชียร', '0999999999', 'nirvanaford94@gmail.com', 'test', 'Laos', 'Bangsue', 'Bangkok', '10890', NULL, NULL, 'สิทธิพร', 'ตรองวิเชียร', '0999999999', 'nirvanaford94@gmail.com', 'test', 'Hongkong', 'Bangsue', 'Bangkok', '10890', 'Ordering', NULL, NULL, 1, 'No', '2022-03-16 08:08:38', '1.46.14.141', '2022-03-16 08:08:38', '1.46.14.141'),
(5, '5', 2, 'EMS', 'Paypal', NULL, 712.00, 0.00, 100.00, 812.00, 'No', 'THB', 'สิทธิพร', 'ตรองวิเชียร', '0999999999', 'nirvanaford94@gmail.com', 'test', 'Laos', 'Bangsue', 'Bangkok', '10890', NULL, NULL, 'สิทธิพร', 'ตรองวิเชียร', '0999999999', 'nirvanaford94@gmail.com', 'test', 'Hongkong', 'Bangsue', 'Bangkok', '10890', 'Ordering', 'LMC00001', 'https://www.dhl.co.th', 1, 'No', '2022-03-16 08:09:56', '1.46.14.141', '2022-03-16 08:11:42', '1.46.14.141'),
(6, '6', 2, 'EMS', 'Paypal', NULL, 1240.00, 0.00, 100.00, 1433.80, 'Yes', 'THB', 'สิทธิพร', 'ตรองวิเชียร', '0999999999', 'nirvanaford94@gmail.com', 'test', 'Laos', 'Bangsue', 'Bangkok', '10890', NULL, NULL, 'สิทธิพร', 'ตรองวิเชียร', '0999999999', 'nirvanaford94@gmail.com', 'test', 'Hongkong', 'Bangsue', 'Bangkok', '10890', 'Ordering', 'LMC00002', 'https://www.dhl.co.th', 1, 'No', '2022-03-16 08:50:51', '1.46.14.141', '2022-03-16 08:58:16', '1.46.14.141'),
(7, '7', 4, 'EMS', 'โอนเงิน/ชำระผ่านช่องทางธนาคาร', NULL, 3995000.00, 0.00, 0.00, 4274650.00, 'Yes', 'THB', 'สิทธิพร', 'ตรองวิเชียร', '0999999999', 'nirvanaford94@gmail.com', 'test', 'Thai', 'Bangsue', 'Bangkok', '10890', 'รับสินค้าด้วยตัวเอง', NULL, 'สิทธิพร', 'ตรองวิเชียร', '0999999999', 'nirvanaford94@gmail.com', 'test', 'Thai', 'Bangsue', 'Bangkok', '10890', 'Processing', NULL, NULL, 3995, 'Yes', '2022-04-27 06:33:20', '1.46.129.255', '2022-04-27 09:08:02', '147.92.179.113'),
(8, '8', 4, 'EMS', 'Paypal', NULL, 1250.00, 0.00, 0.00, 1337.50, 'Yes', 'THB', 'สิทธิพร', 'ตรองวิเชียร', '0999999999', 'nirvanaford94@gmail.com', 'test', 'Thai', 'Bangsue', 'Bangkok', '10890', NULL, NULL, 'สิทธิพร', 'ตรองวิเชียร', '0999999999', 'nirvanaford94@gmail.com', 'test', 'Thai', 'Bangsue', 'Bangkok', '10890', 'Ordering', NULL, NULL, 1, 'No', '2022-04-27 06:35:27', '1.46.129.255', '2022-04-27 06:35:27', '1.46.129.255'),
(9, '9', 4, 'EMS', 'Paypal', NULL, 890.00, 0.00, 0.00, 890.00, 'No', 'THB', 'สิทธิพร', 'ตรองวิเชียร', '0999999999', 'nirvanaford94@gmail.com', 'test', 'Thai', 'Bangsue', 'Bangkok', '10890', NULL, NULL, 'สิทธิพร', 'ตรองวิเชียร', '0999999999', 'nirvanaford94@gmail.com', 'test', 'Thai', 'Bangsue', 'Bangkok', '10890', 'Ordering', NULL, NULL, 1, 'No', '2022-04-27 06:36:32', '1.46.129.255', '2022-04-27 06:36:32', '1.46.129.255'),
(10, '10', 4, 'EMS', 'Paypal', NULL, 1550.00, 0.00, 0.00, 1550.00, 'No', 'THB', 'สิทธิพร', 'ตรองวิเชียร', '0999999999', 'nirvanaford94@gmail.com', 'test', 'Thai', 'Bangsue', 'Bangkok', '10890', NULL, NULL, 'สิทธิพร', 'ตรองวิเชียร', '0999999999', 'nirvanaford94@gmail.com', 'test', 'Thai', 'Bangsue', 'Bangkok', '10890', 'Processing', NULL, NULL, 2, 'Yes', '2022-04-27 06:42:18', '1.46.129.255', '2022-04-27 09:08:02', '147.92.179.113'),
(11, '11', 4, 'EMS', 'ชำระผ่าน ATM', 'ชำระผ่าน ATM ธนาคารกรุงเทพ', 1550.00, 0.00, 1000.00, 2728.50, 'Yes', 'THB', 'สิทธิพร', 'ตรองวิเชียร', '0999999999', 'nirvanaford94@gmail.com', 'test', 'Singapore', 'Bangsue', 'Bangkok', '10890', NULL, NULL, 'สิทธิพร', 'ตรองวิเชียร', '0999999999', 'nirvanaford94@gmail.com', 'test', 'Singapore', 'Bangsue', 'Bangkok', '10890', 'Ordering', NULL, NULL, 2, 'No', '2022-04-27 09:10:31', '1.46.129.255', '2022-04-27 09:10:31', '1.46.129.255'),
(12, '12', 4, 'EMS', 'ชำระผ่าน ATM', 'ชำระผ่าน ATM ธนาคารกรุงเทพ', 1550.00, 0.00, 0.00, 1550.00, 'No', 'THB', 'สิทธิพร', 'ตรองวิเชียร', '0999999999', 'nirvanaford94@gmail.com', 'test', 'Thai', 'Bangsue', 'Bangkok', '10890', NULL, NULL, 'สิทธิพร', 'ตรองวิเชียร', '0999999999', 'nirvanaford94@gmail.com', 'test', 'Thai', 'Bangsue', 'Bangkok', '10890', 'Ordering', NULL, NULL, 2, 'No', '2022-04-28 08:01:28', '1.46.129.255', '2022-04-28 08:01:28', '1.46.129.255'),
(13, '13', 4, 'EMS', 'ชำระผ่าน ATM', 'ชำระผ่าน ATM ธนาคารกรุงเทพ', 1550.00, 0.00, 0.00, 1658.50, 'Yes', 'THB', 'สิทธิพร', 'ตรองวิเชียร', '0999999999', 'nirvanaford94@gmail.com', 'test', 'Thai', 'Bangsue', 'Bangkok', '10890', NULL, NULL, 'สิทธิพร', 'ตรองวิเชียร', '0999999999', 'nirvanaford94@gmail.com', 'test', 'Thai', 'Bangsue', 'Bangkok', '10890', 'Ordering', NULL, NULL, 2, 'No', '2022-04-28 08:12:55', '1.46.129.255', '2022-04-28 08:12:55', '1.46.129.255');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_payment`
--

CREATE TABLE `lv_payment` (
  `payment_id` int(11) NOT NULL,
  `order_no` int(11) NOT NULL,
  `payment_order_status_processing` enum('No','Yes') NOT NULL,
  `payment_payment_method` enum('ชำระสินค้าที่จุดเครื่องเอทีเอ็ม','ชำระผ่านธนาคารออนไลน์','ชำระผ่านโมบายแบงค์กิ้ง','ชำระผ่านเคาน์เตอร์ธนาคาร','Paypal') NOT NULL,
  `payment_name_surname` varchar(255) NOT NULL,
  `payment_telephone` varchar(255) NOT NULL,
  `payment_datetime` datetime NOT NULL,
  `payment_price` float(10,2) NOT NULL,
  `payment_slip` varchar(255) NOT NULL,
  `payment_datetime_create` datetime NOT NULL,
  `payment_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `lv_payment`
--

INSERT INTO `lv_payment` (`payment_id`, `order_no`, `payment_order_status_processing`, `payment_payment_method`, `payment_name_surname`, `payment_telephone`, `payment_datetime`, `payment_price`, `payment_slip`, `payment_datetime_create`, `payment_datetime_update`) VALUES
(1, 1, 'No', 'ชำระผ่านธนาคารออนไลน์', 'สิทธิพร ตรองวิเชียร', '000999999', '2021-10-18 06:12:00', 4000.00, 'bannerhome.jpg', '2021-10-18 08:01:50', '2021-10-18 08:01:50'),
(2, 1, 'No', 'Paypal', 'สิทธิพร ตรองวิเชียร', '0990943010', '2022-03-21 19:18:00', 100.00, '0t.png', '2022-03-21 08:07:39', '2022-03-21 08:07:39');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_point`
--

CREATE TABLE `lv_point` (
  `point_id` int(11) NOT NULL,
  `point_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `point_name_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `point_name_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `point_name_ch` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `point_use_point` int(11) NOT NULL,
  `promocode_id` int(11) DEFAULT NULL,
  `point_datetime_create` datetime NOT NULL,
  `point_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `lv_point`
--

INSERT INTO `lv_point` (`point_id`, `point_image`, `point_name_th`, `point_name_en`, `point_name_ch`, `point_use_point`, `promocode_id`, `point_datetime_create`, `point_datetime_update`) VALUES
(1, '3.jpg', 'Gold 1 สลึง ต่อ 40 Point', 'Gold 1 สลึง ต่อ 40 Point', 'Gold 1 สลึง ต่อ 40 Point', 40, 0, '0000-00-00 00:00:00', '2022-07-01 04:38:36'),
(2, '5.jpg', 'Gold 50 สตางค์ ต่อ 80 Point', 'Gold 50 สตางค์ ต่อ 80 Point', 'Gold 50 สตางค์ ต่อ 80 Point', 80, 0, '0000-00-00 00:00:00', '2022-06-10 02:10:32'),
(3, '9.jpg', 'Gold 2 บาท ต่อ 400 Point', 'Gold 2 บาท ต่อ 400 Point', 'Gold 2 บาท ต่อ 400 Point', 400, 0, '0000-00-00 00:00:00', '2022-06-10 02:11:54'),
(4, '4.jpg', 'Voucher 2,000 THB และ Gold 1 สลึง', 'Voucher 2,000 THB และ Gold 1 สลึง', 'Voucher 2,000 THB และ Gold 1 สลึง', 60, 3, '0000-00-00 00:00:00', '2022-07-01 05:11:36'),
(5, '6.jpg', 'Voucher 3,500 THB + Gold 50 สตางค์', 'Voucher 3,500 THB + Gold 50 สตางค์', 'Voucher 3,500 THB + Gold 50 สตางค์', 120, 4, '0000-00-00 00:00:00', '2022-07-01 05:12:04'),
(6, '7.jpg', 'Voucher 5,000 THB + Gold 1 THB', 'Voucher 5,000 THB + Gold 1 THB', 'Voucher 5,000 THB + Gold 1 THB', 200, 5, '0000-00-00 00:00:00', '2022-07-01 05:13:12'),
(7, '8.jpg', 'Voucher 10,000 Baht + Gold 1 THB', 'Voucher 10,000 Baht + Gold 1 THB', 'Voucher 10,000 Baht + Gold 1 THB', 300, 6, '0000-00-00 00:00:00', '2022-07-01 05:13:03');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_product`
--

CREATE TABLE `lv_product` (
  `product_id` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_category_name_th` varchar(255) NOT NULL,
  `product_category_name_en` varchar(255) NOT NULL,
  `product_category_name_ch` varchar(255) NOT NULL,
  `product_name_th` varchar(255) NOT NULL,
  `product_name_en` varchar(255) NOT NULL,
  `product_name_ch` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_description_th` text NOT NULL,
  `product_description_en` text NOT NULL,
  `product_description_ch` text NOT NULL,
  `product_feature_th` text NOT NULL,
  `product_feature_en` text NOT NULL,
  `product_feature_ch` text NOT NULL,
  `product_addition_th` text NOT NULL,
  `product_addition_en` text NOT NULL,
  `product_addition_ch` text NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_stock` int(11) NOT NULL,
  `product_datetime_create` datetime NOT NULL,
  `product_ip_create` varchar(255) NOT NULL,
  `product_datetime_update` datetime NOT NULL,
  `product_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `lv_product`
--

INSERT INTO `lv_product` (`product_id`, `product_image`, `product_category_name_th`, `product_category_name_en`, `product_category_name_ch`, `product_name_th`, `product_name_en`, `product_name_ch`, `product_code`, `product_description_th`, `product_description_en`, `product_description_ch`, `product_feature_th`, `product_feature_en`, `product_feature_ch`, `product_addition_th`, `product_addition_en`, `product_addition_ch`, `product_price`, `product_stock`, `product_datetime_create`, `product_ip_create`, `product_datetime_update`, `product_ip_update`) VALUES
(1, 'Foam_Face.png', 'โฟมล้างหน้า', 'โฟมล้างหน้า', 'โฟมล้างหน้า', 'โฟมล้างหน้า (LA MOCHA fresh & Smooth Cleansing Perfect Foam ) 100 g', 'โฟมล้างหน้า (LA MOCHA fresh & Smooth Cleansing Perfect Foam ) 100 g', 'โฟมล้างหน้า (LA MOCHA fresh & Smooth Cleansing Perfect Foam ) 100 g', '001', 'โฟมล้างหน้าที่ช่วยชำระล้างสิ่งสกปรกบนใบหน้ามีส่วนผสมของ ทองคำบริสุทธิ์และ  อุดมไปด้วยสารสกัดจากเมล็ดกาแฟดิบซึ่งมีคุณสมบัติเป็นสารต้าน อนุมูลอิสระที่มีประสิทธิภาพสูง อีกทั้งยังมีสารสกัดจากธรรมชาติที่ช่วยปกป้องผิวจากมลภาวะต่างๆ คงความชุ่มชื่นให้แก่ผิว เผยผิวหน้า กระจ่างใส ล้างออกง่าย ไม่แห้งตึง ไม่ก่อให้เกิดการระคายเคือง ปราศจากสาร SLS/SLES, สี, แอลกอฮอลล์ และสารกันเสียชนิดพาราเบน', 'โฟมล้างหน้าที่ช่วยชำระล้างสิ่งสกปรกบนใบหน้ามีส่วนผสมของ ทองคำบริสุทธิ์และ  อุดมไปด้วยสารสกัดจากเมล็ดกาแฟดิบซึ่งมีคุณสมบัติเป็นสารต้าน อนุมูลอิสระที่มีประสิทธิภาพสูง อีกทั้งยังมีสารสกัดจากธรรมชาติที่ช่วยปกป้องผิวจากมลภาวะต่างๆ คงความชุ่มชื่นให้แก่ผิว เผยผิวหน้า กระจ่างใส ล้างออกง่าย ไม่แห้งตึง ไม่ก่อให้เกิดการระคายเคือง ปราศจากสาร SLS/SLES, สี, แอลกอฮอลล์ และสารกันเสียชนิดพาราเบน', 'โฟมล้างหน้าที่ช่วยชำระล้างสิ่งสกปรกบนใบหน้ามีส่วนผสมของ ทองคำบริสุทธิ์และ  อุดมไปด้วยสารสกัดจากเมล็ดกาแฟดิบซึ่งมีคุณสมบัติเป็นสารต้าน อนุมูลอิสระที่มีประสิทธิภาพสูง อีกทั้งยังมีสารสกัดจากธรรมชาติที่ช่วยปกป้องผิวจากมลภาวะต่างๆ คงความชุ่มชื่นให้แก่ผิว เผยผิวหน้า กระจ่างใส ล้างออกง่าย ไม่แห้งตึง ไม่ก่อให้เกิดการระคายเคือง ปราศจากสาร SLS/SLES, สี, แอลกอฮอลล์ และสารกันเสียชนิดพาราเบน', '<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; list-style: none; padding-left: 0px; font-size: 15px; line-height: 31px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif;\">\r\n	<li style=\"box-sizing: border-box;\">\r\n		<p>\r\n			Main Ingredients/Function (ส่วนประกอบหลัก และประสิทธิภาพ)</p>\r\n		<p>\r\n			1.&nbsp; Skinguard&nbsp; : คุณค่าจากสารสกัดธรรมชาติ 9 ชนิด ที่ท างานเสริมฤทธิ์กันช่วยปกป้องผิวจากมลภาวะ ทางอากาศ เช่น ควันจากท่อไอเสีย ฝุ่นละอองขนาดเล็ก (PM2.5)ให้เกิดความสมดุล ซึ่งประกอบไปด้วย 1.Ougon เป็นสารสกัดจาก Scutellaria root ช่วยในการปกป้องผิวจากมลพิษทาง สิ่งแวดล้อม</p>\r\n		<p>\r\n			&nbsp;2. Houttuynia เป็นสารสกัดจากคาวทอง ช่วยในการยับยั้งการสร้างเอนไซม์ CPY1B1 และช่วยในการปกป้องผิวจากมลพิษทางสิ่งแวดล้อม</p>\r\n		<p>\r\n			3. Buddleja Officinalis Flower Extract : สารสกัดธรรมชาติจากดอก Buddleia (Buddleja Officinalis)&nbsp; หรือที่รู้จักกันดีในอีกชื่อคือ Butterfly bush หรือในวงการแพทย์แผนจีนเรียกว่า เม็กโหม่วฮวยเป็นดอกไม้สีม่วงอ่อน ที่พบมากในแถบมณฑลจีนยูนนาน ประเทศจีน ดอกไม้นี้เติบโตในสภาพอากาศ รังสี ความร้อน และแสงแดดที่รุนแรง จึงท าให้สารสกัดอุดมไปด้วยสาร Verbascoside และ Echinacoside ซึ่งช่วยกระตุ้น Phenylpropanoids pathway กระตุ้นการท างานของเอนไซม์ ซึ่งเร่งปฎิกิริยาการสร้างสารประกอบ Protective compounds ส าหรับผิว มีสรรพคุณช่วย ในการปกป้องผิวจากการท าลายของรังสี UV, IR และแสงสีฟ้า (Blue light) ลดการอักเสบ ของผิว และปรับสมดุลของระบบภูมิคุ้มกันผิว (Protection from inflammation)</p>\r\n		<p>\r\n			4. Coffea Arabica Seed Extract : สารสกัดจากเมล็ดกาแฟดิบสายพันธุ์อาราบิก้าที่ยังไม่ผ่านกระบวนการคั่ว น ามาสกัดให้ได้ กาแฟชนิดที่มีคาเฟอีนน้อย ประกอบด้วยสารส าคัญคือ Polyphenol ที่มีชื่อเรียกว่า กรดคลอโรจินิก (Chlorogenic Acid) ซึ่งมีคุณสมบัติเป็นสารต้านอนุมูลอิสระ (Antioxidant) ที่มีประสิทธิภาพสูง พร้อมยังมีคุณสมบัติช่วยกระชับผิว</p>\r\n		<p>\r\n			5. Pharcolex : ประกอบด้วยสารสกัดจากดอกไม้ 6 ชนิดได้แก่ Anthemis Nobilis Flower, Centaurea Cyanus Flower, Chamomilla Recutita Flower, Hypericum Perforatum Flower,Tilia Cordata Flower, Calendula Officinalis Flower ช่วยลดการระคายเคือง ผื่นแพ้ การอักเสบ</p>\r\n		<p>\r\n			&nbsp;ของผิวจากมลภาวะต่างๆ ต้านอนุมูลอิสระและเพิ่มความยืดหยุ่นให้กับเซลล์ผิว&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6. Porphyra Algae เป็นสารสกัดจากสาหร่ายสีแดงพอร์ไฟรา ช่วยในการเสริมสร้างเกราะ ป้องกันผิว (Skin barrier) ให้แข็งแรง โดยมีการสร้างฟิล์มเคลือบผิวด้วยสารพอร์ไฟแรน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n		<p>\r\n			&nbsp; 7. Herb robert เป็นสารสกัดจากพืชดอกตระกูล Geranium ช่วยในการปกป้องคอลลาเจน ในผิว โดยไปยับยั้งการท างานของเอนไซม์ Tryptase และยับยั้งการย่อยสลายของ คอลลาเจน</p>\r\n		<p>\r\n			&nbsp;8. Cornflower เป็นสารสกัดคอร์นฟลาวเวอร์ช่วยในการเพิ่มการขจัดของเสียตกค้างใต้ผิว ในระบบน้ าเหลือง และดูแลระบบท่อน้ าเหลือง</p>\r\n		<p>\r\n			&nbsp;9. Rooibos เป็นสารสกัดจากต้นรอยบอสช่วยยับยั้งการเกิดปฏิกิริยาออกซิเดชันของไขมัน โดยอนุมูลอิสระ และมีฤทธิ์ต้านอนุมูลอิสระเหมือนสาร SOD ช่วยในการป้องกัน สารเคลือบเซลล์ (Subcellular matrix) ไม่ให้ถูกท าลายจากความเครียดจากสิ่งแวดล้อม. ล้วนเป็นสารสกัด ที่พรีเมียม ที่คัดสรรมาแล้วค่ะ ^^&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n		&nbsp;#lamochathailand #LamochFreshandsmoothcleansingfoam #โฟมหน้าใส #โฟมล้างหน้า #โฟมลดสิวอุดตัน #โฟมยกกระชับผิวหน้า</li>\r\n</ul>', '<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; list-style: none; padding-left: 0px; font-size: 15px; line-height: 31px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif;\">\r\n	<li style=\"box-sizing: border-box;\">\r\n		<div>\r\n			Foam &amp;amp; Cleansing in the body, clear face, firm skin, aura, soft, smooth,</div>\r\n		<div>\r\n			nourishing while washing, not dry, tight, not old quickly, skin care to the max.</div>\r\n		<div>\r\n			Cleansing foam that helps cleanse the dirt on the face with a mixture of pure</div>\r\n		<div>\r\n			gold and It is rich in extracts from raw coffee beans which have antioxidant</div>\r\n		<div>\r\n			&nbsp;</div>\r\n		<div>\r\n			properties. highly effective free radicals</div>\r\n		<div>\r\n			&nbsp;</div>\r\n		<div>\r\n			It also contains natural extracts that help protect the skin from various pollution.</div>\r\n		<div>\r\n			maintain skin moisture Reveals clear skin, washes off easily, makes you feel</div>\r\n		<div>\r\n			clean and fresh. derived from herbs that nourish the skin Does not cause</div>\r\n		<div>\r\n			irritation, free of SLS / SLES, color, alcohol and preservatives, parabens, size 100</div>\r\n		<div>\r\n			g. (concentrated, sticky, very soft to the skin)</div>\r\n	</li>\r\n</ul>', '<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; list-style: none; padding-left: 0px; font-size: 15px; line-height: 31px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif;\">\r\n	<li style=\"box-sizing: border-box;\">\r\n		<div>\r\n			泡沫&amp;amp;洁面在体内，清透面部，紧致肌肤，气场，柔软，光滑，边洗边滋养，</div>\r\n		<div>\r\n			不干燥，紧绷，不快老，将护肤发挥到极致。含有纯金和丰富的生咖啡豆提取</div>\r\n		<div>\r\n			物，具有抗氧化特性，有助于清洁面部污垢的清洁泡沫。高效自由基</div>\r\n		<div>\r\n			它还含有天然提取物，有助于保护皮肤免受各种污染。保持肌肤水分 显露肌肤</div>\r\n		<div>\r\n			清透，轻松洗净，让您倍感洁净清新。源自滋养皮肤的草药 不会引起刺激，不</div>\r\n		<div>\r\n			含 SLS / SLES、色素、酒精和防腐剂、对羟基苯甲酸酯，大小 100 g。 （浓</div>\r\n		<div>\r\n			缩，粘稠，对皮肤非常柔软）</div>\r\n	</li>\r\n</ul>', '<p>\r\n	-</p>', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 15px; padding-top: 10px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif;\">\r\n	-</p>', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 15px; padding-top: 10px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif;\">\r\n	-</p>', 890.00, 464, '2020-10-02 07:27:48', '::1', '2022-03-23 05:46:57', '1.47.137.162'),
(2, 'cream.png', 'ครีมกันแดด', 'ครีมกันแดด', 'ครีมกันแดด', 'ครีมกันแดด ( LA MOCHA Perfect smooth mousse sunscreen SPF 50 PA ++++ ) 30 g', 'ครีมกันแดด ( LA MOCHA Perfect smooth mousse sunscreen SPF 50 PA ++++ ) 30 g', 'ครีมกันแดด ( LA MOCHA Perfect smooth mousse sunscreen SPF 50 PA ++++ ) 30 g', '002', 'ครีมกันแดดทาหน้า : เนื้อดีคือสิ่งที่ช่วยปกป้องผิวใบหน้าอันบอบบางจากแสงแดดจ้าได้ ไม่เพียงแต่ทุกวันนี้เราเจอกับแสงแดดจากธรรมชาติทั้งนั้น เรายังต้องเจอกับแสงจากหลอดไฟภายในอาคาร ผิวใบหน้าของเราหากไม่ปกป้องเสียตั้งแต่เนิ่น ๆ ด้วยการครีมกันแดด ก็อาจจะส่งผลเสียให้กับผิวหน้าของเราได้', 'ครีมกันแดดทาหน้า : เนื้อดีคือสิ่งที่ช่วยปกป้องผิวใบหน้าอันบอบบางจากแสงแดดจ้าได้ ไม่เพียงแต่ทุกวันนี้เราเจอกับแสงแดดจากธรรมชาติทั้งนั้น เรายังต้องเจอกับแสงจากหลอดไฟภายในอาคาร ผิวใบหน้าของเราหากไม่ปกป้องเสียตั้งแต่เนิ่น ๆ ด้วยการครีมกันแดด ก็อาจจะส่งผลเสียให้กับผิวหน้าของเราได้', 'ครีมกันแดดทาหน้า : เนื้อดีคือสิ่งที่ช่วยปกป้องผิวใบหน้าอันบอบบางจากแสงแดดจ้าได้ ไม่เพียงแต่ทุกวันนี้เราเจอกับแสงแดดจากธรรมชาติทั้งนั้น เรายังต้องเจอกับแสงจากหลอดไฟภายในอาคาร ผิวใบหน้าของเราหากไม่ปกป้องเสียตั้งแต่เนิ่น ๆ ด้วยการครีมกันแดด ก็อาจจะส่งผลเสียให้กับผิวหน้าของเราได้', '<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; list-style: none; padding-left: 0px; font-size: 15px; line-height: 31px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif;\">\r\n	<li style=\"box-sizing: border-box;\">\r\n		<p align=\"center\">\r\n			กันแดดสูตร ผสมรองพื้นและ แป้งไว้ในหลอดเดียว มี อาหารผิวสารบำรุง แบรนด์เดียว ที่จัดเต็มขนาดนี้!</p>\r\n		<p align=\"center\">\r\n			&nbsp;</p>\r\n		<p align=\"center\">\r\n			#ลาโมช่า ครีมกันแดดเนื้อแป้งผสมอาหารผิว</p>\r\n		<p align=\"center\">\r\n			ที่ใช้สารสกัดสีทอง จากธรรมชาติ ถึง 8 ชนิด</p>\r\n		<p align=\"center\">\r\n			จึงปลอดภัย ใช้ได้กับทุกสภาพผิว แม้ผิวที่แพ้ง่าย</p>\r\n		<p align=\"center\">\r\n			จัดเต็มให้ผิวขนาดนี้ ไม่ดีได้ไง?</p>\r\n		<p align=\"center\">\r\n			&nbsp;</p>\r\n		<p align=\"center\">\r\n			☑ เพียงแค่แตะครีมสัมผัสผิว ก็รู้สึกถึงความเนียนนุ่ม</p>\r\n		<p align=\"center\">\r\n			☑ ปกปิดรูขุมขนสนิท ไม่เหนียวเหนอะหน้า</p>\r\n		<p align=\"center\">\r\n			☑ ทำให้ผิวหน้าเบาสบาย ตบแป้งครั้งเดียวอยู่ได้ทั้งวัน</p>\r\n		<p align=\"center\">\r\n			☑ หน้าไม่มัน พร้อมบำรุงให้หน้าชุ่มชื้น อย่างมีออร่า</p>\r\n		<p align=\"center\">\r\n			&nbsp;</p>\r\n		<p align=\"center\">\r\n			✨อยากลดขั้นตอนความยุ่งยากในการแต่งหน้า</p>\r\n		<p align=\"center\">\r\n			ใช้ #ลาโมช่า กันแดดเนื้อครีม รับรองคุณจะต้องหลงรัก</p>\r\n		<p>\r\n			ทำไมต้องเป็นครีมกันแดด Lamocha</p>\r\n		<p>\r\n			ครีมกันแดดทาหน้า : เนื้อดีคือสิ่งที่ช่วยปกป้องผิวใบหน้าอันบอบบางจากแสงแดดจ้าได้ ไม่เพียงแต่ทุกวันนี้เราเจอกับแสงแดดจากธรรมชาติทั้งนั้น เรายังต้องเจอกับแสงจากหลอดไฟภายในอาคาร ผิวใบหน้าของเราหากไม่ปกป้องเสียตั้งแต่เนิ่น ๆ ด้วยการครีมกันแดด ก็อาจจะส่งผลเสียให้กับผิวหน้าของเราได้</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			ครีมกันแดด Lamocha สูตรมหัสจรรย์เพื่อการบำรุงและปกป้องผิวจากแสงแดด</p>\r\n		<p>\r\n			นอกจากเป็นครีมกันแดดเนื้อสมูท ยังมีสารสกัดบำรุงผิวจากรังไหมสีทองบริสุทธิ์ ข้าวโอ๊ค เห็ดชิตาเกะ และสาหร่ายใต้ท้องทะเลลึก</p>\r\n		<p>\r\n			ปกป้องผิวจากแสงแดดได้ด้วยสาร SPF 50 PA++++ ปกป้องผิวจากแสงแดดได้อย่างยาวนาน</p>\r\n		<p>\r\n			มีวิตามินอี อาหารผิวสุดพรีเมี่ยม ให้อาหารผิวได้ในขณะที่ปกป้องผิวจากแสงแดด</p>\r\n		<p>\r\n			ทาทับเมคอัพได้ในระหว่างวัน ไม่ต้องกลัวหน้าเป็นคราบ เพราะครีมกันแดดกันเหงื่อได้ แถมยังปกปิดได้อย่างยาวนานตลอดวัน</p>\r\n		<p>\r\n			ครีมกันแดดนั้นมีมากมาย แต่ถ้าต้องการครีมกันแดดที่เป็นได้ทั้งครีมบำรุงผิวสุดลึกล้ำด้วยแล้วล่ะก็ ต้องเป็นครีมกันแดด LaMocha เท่านั้นเลย</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			ครีมกันแดด Lamocha ดีอย่างไร ?</p>\r\n		<p>\r\n			ผิวหนังของสาวเอเชียเป็นผิวที่ไวต่อแสงแดด ลองสังเกตได้ ถ้าเราออกแดดเพียงไม่กี่นาที ผิวของเราก็คล้ำแดดแล้ว โดยเฉพาะผิวหน้าของเราที่ไวต่อแสงแดด ถ้าไม่อยากให้เกิดปัญหาผิว มีทางเดียวเท่านั้นที่เราจะปกป้องผิวของเราได้ก็คือ ใช้ครีมกันแดดทุกครั้ง และยิ่งดีกว่านั้นหากเราปกป้องผิวด้วยครีมกันแดด Lamocha</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			Lamocha เป็นได้มากกว่าครีมกันแดด ทาครั้งเดียวเป็นทั้งครีมบำรุงผิวและครีมกันแดดได้เลย</p>\r\n		<p>\r\n			ออกแดดกี่ครั้งก็ไม่ต้องกลัวหน้าเป็นคราบ กันเหงื่อได้ดีมาก</p>\r\n		<p>\r\n			ครีมกันแดดเติมทับเมคอัพได้เลย ทาทับได้ในระหว่างวัน</p>\r\n		<p>\r\n			เป็นครีมรองพื้นที่ปกปิดได้แนบเนียนสุด ๆ อำพรางรูขุมขนได้เรียบเนียนกริบ</p>\r\n		<p>\r\n			มีประสิทธิภาพทั้งป้องกันแดดและบำรุงผิวได้ในขั้นตอนเดียว</p>\r\n		<p>\r\n			เพื่อการบำรุงผิวสุดลึกล้ำและปกป้องผิวจากแสงแดด Lamocha ครีมกันแดดสารสกัดจากรังไหมสีทองธรรมชาติสุดเข้มข้น สกัดเป็นครีมกันแดดแบบรองพื้นเนื้อสมูท บำรุงผิวและปกป้องผิวได้ในคราวเดียวกัน</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			ส่วนประกอบของ LaMocha มีอะไรบ้างนะ ?</p>\r\n		<p>\r\n			ครีมกันแดด LaMocha ครีมกันแดดสุดพรีเมียม สามารถเป็นทั้งครีมบำรุงผิวและครีมกันแดดได้ภายในครั้งเดียว นอกจากจะช่วยป้องกันผิวจากรังสี UVA และ UVB แล้ว ส่วนประกอบของครีมกันแดด LaMocha ก็พรีเมี่ยมไม่แพ้กันค่</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			ผนังเซลล์ยีสต์ ช่วยเสริมสร้างผิวให้แข็งแรงมีสุขภาพดี</p>\r\n		<p>\r\n			เห็ดชิตาเกะ ช่วยต้านสารอนุมูลอิสระ ลดการอักเสบของผิวหนัง ชะลอการแพ้</p>\r\n		<p>\r\n			สาหร่ายใต้ท้องทะเลลึก ช่วยควบคุมความมันบนใบหน้า เป็นสารค้านอนุมูลอิสระและมีวิตามินซีที่ดีต่อผิวสุด ๆ</p>\r\n		<p>\r\n			รังไหมสีทองบริสุทธิ์ บำรุงให้ผิวเนียนนุ่ม ขจัดเซลล์ผิวที่ตายแล้ว ผลัดเซลล์ผิวให้กลับมาสวยบลิ๊งมากกว่าเดิม</p>\r\n		<p>\r\n			ข้าวโอ๊ต ข้าวบาร์เล่ต์ ปรับผิวให้ชุ่มชื้น ช่วยดูซับรังสี UVA</p>\r\n		<p>\r\n			อัลฟ่าอาบูติน สารสกัดวิตามินซีจากธรรมชาติ ช่วยให้ผิวขาว กระจ่างใส ทำให้สีผิวคล้ำช้าลง</p>\r\n		<p>\r\n			ทองคำบริสุทธิ์ อุดมด้วยสารต้านอนุมูลอิสระ ลดการอักเสบจากรังสี UV ได้ ลดริ้วรอยได้</p>\r\n		<p>\r\n			ครีมกันแดดทาหน้า LaMocha เนื้อสมูทใช้ง่าย เป็นรองพื้นเนื้อละเอียด ปกป้องผิวจากแสงแดดได้อย่างยาวนาน พร้อมบำรุงผิวได้ตลอดวันเลย</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			ประโยชน์ของครีมกันแดด LaMocha</p>\r\n		<p>\r\n			สาว ๆ ที่ไม่อยากมีปัญหาผิวจากการถูกแสงแดดทำร้าย อย่าลืมหาครีมกันแดดเนื้อดีเอาไว้ใช้ก่อนออกจากบ้านด้วยนะคะ เพราะไม่เช่นนั้น ผิวสวยของคุณอาจจะกลายเป็นผิวเสียได้ หากคุณชะล่าใจ และจะมีครีมกันแดดสักกี่ตัวที่นอกจากจะช่วยป้องกันแสงแดดแล้วยังเป็นครีมบำรุงผิวได้ด้วย ลองตามมาดูกันค่ะ</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			ครีมกันแดด LaMocha ช่วยต้านทานสารอนุมูลอิสระ ด้วยสารสกัดจากรังไหมสีทองบริสุทธิ์ ทองคำบริสุทธิ์ เห็ดชิตาเกะ และสารหร่ายใต้ท้องทะเลลึก ที่เราสกัดมาไว้ใน LaMocha</p>\r\n		<p>\r\n			ช่วยเติมความชุ่มชื้นให้กับผิวได้ในระหว่างวัน ไม่ต้องกลัวว่าผิวจะแห้งจากสารเคมี เพราะเราคัดเลือกเอาแต่สารสกัดธรรมชาติเท่านั้น</p>\r\n		<p>\r\n			เป็นรองพื้นเนื้อละเอียด ปกปิดอำพรางรูขุมขนและจุดด่างดำได้อย่างเนียนเรียบกริบ แต่ไม่อุดตันรูขุมขนแน่นอน</p>\r\n		<p>\r\n			จะออกแดดระหว่างวัน สามารถเติมทับเมคอัพได้ กันทั้งเหงื่อและคุมความมัน ไม่ทำให้ผิวหน้าเป็นคราบ</p>\r\n		<p>\r\n			สรุป ครีมกันแดดทาหน้า</p>\r\n		<p>\r\n			ดีขนาดนี้ ถ้าไม่ใช้จะพลาดของดีเอานะคะ ยิ่งแดดบ้านเราแรงๆ แบบนี้ ก่อนออกจากบ้าน อย่าทาครีมกันแดด LaMocha ด้วยกันนะคะ</p>\r\n	</li>\r\n</ul>', '<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; list-style: none; padding-left: 0px; font-size: 15px; line-height: 31px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif;\">\r\n	<li style=\"box-sizing: border-box;\">\r\n		<div>\r\n			Amazing sunscreen innovation from Lamocha that is much more than your</div>\r\n		<div>\r\n			ordinary sunscreen.</div>\r\n		<div>\r\n			Do not believe!!! Until you get to try the best of the best! This amazing sunscreen</div>\r\n		<div>\r\n			completely protects your skin from UVA and UVB while providing complete</div>\r\n		<div>\r\n			nourishments and benefits to your skin. Feel the difference since the first usage</div>\r\n		<div>\r\n			and gradually improvement of the skin with continuously usage. This amazing</div>\r\n		<div>\r\n			&nbsp;</div>\r\n		<div>\r\n			product will transform your skin into clear, bright and smooth skin texture that</div>\r\n		<div>\r\n			is soft to the touch. Your skin will become young again.</div>\r\n		<div>\r\n			The 3 main benefits are as follow:</div>\r\n		<div>\r\n			1) Deep nourishments</div>\r\n		<div>\r\n			2) UVA and UVB protection with SPF50 PA++++</div>\r\n		<div>\r\n			3) Complete skin coverage with golden powder, no need to apply powder</div>\r\n		<div>\r\n			 Suitable for all skin type</div>\r\n		<div>\r\n			 Suitable for all skin color</div>\r\n		<div>\r\n			 Provide smooth and even color tone skin coverage for aura skin</div>\r\n		<div>\r\n			 Provide for a beautiful and bright skin</div>\r\n		<div>\r\n			 Premium formulation perfect blend between sunscreen and foundation</div>\r\n		<div>\r\n			with innovative deep skin nutrition</div>\r\n		<div>\r\n			 Youthful, bright and clear skin with continuous use</div>\r\n		<div>\r\n			 Paraben free and free from dangerous substance guaranteed by SGS lab</div>\r\n		<div>\r\n			that is globally certified</div>\r\n		<div>\r\n			 Thai traditional silk protein known as Sericin provide the maximum</div>\r\n		<div>\r\n			nutrition into the deeper layer of the skin for smooth and beautiful skin</div>\r\n		<div>\r\n			 Sericin or Thai traditional silk protein benefits:</div>\r\n		<div>\r\n			o Provides hydration and moisturization up to 300 times for tight</div>\r\n		<div>\r\n			and youthful skin</div>\r\n		<div>\r\n			o Reduces toxin within the skin cells to strengthens the skin</div>\r\n		<div>\r\n			structure</div>\r\n		<div>\r\n			o Reduces the skin inflammation and speed up skin recovery</div>\r\n		<div>\r\n			o Anti-tyrosinase enzyme one of the main cause of dark and dull skin</div>\r\n		<div>\r\n			o UVA and UVB protection the cause of many skin problems</div>\r\n		<div>\r\n			o Light weight and non-sticky</div>\r\n		<div>\r\n			o Premium Active Ingredients certified by international institution</div>\r\n		<div>\r\n			(NSTAD) and used in many Japanese premium cosmetics brand</div>\r\n		<div>\r\n			&nbsp;</div>\r\n		<div>\r\n			LA MOCHA Perfect Smooth Mousse Sunscreen SPF50 PA++++</div>\r\n		<div>\r\n			New Innovation for the world of sunscreen with 3 innovations within 1 tube &ldquo;LA</div>\r\n		<div>\r\n			MOCHA Perfect Smooth Mousse Sunscreen SPF50 PA++++&rdquo;</div>\r\n		<div>\r\n			This premium and special formulation is researched and developed by Thai</div>\r\n		<div>\r\n			specialist whom have won the award for Chitora Innovation from 4 countries:</div>\r\n		<div>\r\n			Thailand, Switzerland, South Korea and Taiwan.</div>\r\n		<div>\r\n			This all in one sunscreen provide for a smooth and even color skin tone coverage</div>\r\n		<div>\r\n			for all skin type and color. For those with dry skin, it is recommend to use</div>\r\n		<div>\r\n			moisturizer daily and pre apply moisturizer before La Mocha for the best benefit</div>\r\n		<div>\r\n			and smooth skin texture.</div>\r\n		<div>\r\n			Lamocha contain special ingredient that will absorb excess oil from the skin.</div>\r\n		<div>\r\n			&nbsp;</div>\r\n		<div>\r\n			Lamocha is convenient and will provide the skin with 3 steps in 1 step, which are</div>\r\n		<div>\r\n			SPF protection, skin nourishment and foundation. Some users may apply a thin</div>\r\n		<div>\r\n			layer of powder after applying La mocha for even smooth skin.</div>\r\n		<div>\r\n			This sunscreen is certified and checked by Daiso Lab (BionNest) for official SPF</div>\r\n		<div>\r\n			and PA report to ensure accurate protection against UVA and UVB.</div>\r\n		<div>\r\n			One tube of La Mocha will last a very long time as one single application require</div>\r\n		<div>\r\n			just a little amount of this amazing mousse cream.</div>\r\n	</li>\r\n</ul>', '<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; list-style: none; padding-left: 0px; font-size: 15px; line-height: 31px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif;\">\r\n	<li style=\"box-sizing: border-box;\">\r\n		<div>\r\n			LA MOCHA是 &ldquo;最新，最具创新性的产品，总共有3项创新&rdquo;而LA MOCHA</div>\r\n		<div>\r\n			Perfect Smooth mouse SunScreen SPF 50 PA ++++ 就是其中之一。由国家科学技</div>\r\n		<div>\r\n			术局（NSTAD）认证结果表明，它是葵花籽萃取物富含肌肤营养成分，特别是</div>\r\n		<div>\r\n			泰国金色的天然葵花籽的黄金萃取物。（还有就是金丝椰子提取物，是泰国科</div>\r\n		<div>\r\n			学部用于日本医学，它有多种来源的研究证明。）</div>\r\n		<div>\r\n			产品介绍</div>\r\n		<div>\r\n			LA MOCHA是一个特别的防晒产品，采用了特别的配方，粉末质地，光泽度很</div>\r\n		<div>\r\n			高，适用于所有皮肤类型。对于干燥的皮肤起到滋润的效用。</div>\r\n		<div>\r\n			这款防晒霜很受欢迎，可防汗水，防水，质地为光滑慕斯。 （不含对羟基苯甲</div>\r\n		<div>\r\n			酸酯，低品质防腐剂），对皮肤无有害物质。没有禁用物质100％安全无污害</div>\r\n		<div>\r\n			。</div>\r\n		<div>\r\n			LA MOCHA可避免阳光对皮肤造成伤害，有高品质的防晒保证。资料显示</div>\r\n		<div>\r\n			，Daiso与该公司的合作伙伴&ldquo;BioNest&rdquo;为高效的UVA UVB做保护，可皱纹，祛</div>\r\n		<div>\r\n			除雀斑，晒伤，修复皮肤损伤。产品特点</div>\r\n		<div>\r\n			1. 作为一款防晒霜，有皮肤护理的作用，可延缓衰老。</div>\r\n		<div>\r\n			2. 1管可以使用很长时间，质地很好，只需挤压，在脸上少量使用。</div>\r\n		<div>\r\n			3. 适合所有皮肤类型，使用起来感觉皮肤都变得光滑了。</div>\r\n		<div>\r\n			4. 让皮肤毛孔和皮肤表层得到精致的呵护。</div>\r\n		<div>\r\n			5. 所有物质均由SGS Global Institute担保。</div>\r\n		<div>\r\n			6. 这款防晒霜具有吸收脸部多余油脂的功能。</div>\r\n		<div>\r\n			7. 在将皮肤供给顶层的创新中，刺激胶原蛋白的产生，同时使皮肤受到日光损</div>\r\n		<div>\r\n			伤。</div>\r\n		<div>\r\n			8. 防汗水，防水，不会造成污点。整天用可保护皮肤免受UVA UVB的侵害。</div>\r\n		<div>\r\n			9. 使用就可获得皮肤外3层的护理和保护作用。</div>\r\n		<div>\r\n			10. 它不需要用粉底遮盖就能帮助增亮皮肤。</div>\r\n		<div>\r\n			丝蛋白的好处</div>\r\n		<div>\r\n			&nbsp;</div>\r\n		<div>\r\n			这款防晒提取富含肌肤营养的防晒霜，特别是泰国的天然金茧。丝蛋白（丝蛋</div>\r\n		<div>\r\n			白）的好处 或称为丝胶蛋白的提取物好在哪里呢。</div>\r\n		<div>\r\n			1 一种天然保湿剂，可以水合300次。</div>\r\n		<div>\r\n			2 减少有毒残留物帮助护理皮肤。</div>\r\n		<div>\r\n			3 减少皮肤的炎症，使得伤口愈合迅速并减少炎症。</div>\r\n		<div>\r\n			4 将Trioxin（酪氨酸酶）酶的色素浮于具有天然特性的皮肤上，使得皮肤更加</div>\r\n		<div>\r\n			自然高亮。</div>\r\n		<div>\r\n			5 保护皮肤免受可能导致癌症的紫外线。</div>\r\n		<div>\r\n			6 包装轻巧，携带舒适，质地不粘。</div>\r\n		<div>\r\n			购买渠道</div>\r\n		<div>\r\n			可在Eveandboy 所有分支機構</div>\r\n		<div>\r\n			&nbsp;</div>\r\n		<div>\r\n			微信ID ：&nbsp;</div>\r\n		<div>\r\n			Lamochathailand</div>\r\n		<div>\r\n			脸书Facebook官方页面链接：</div>\r\n		<div>\r\n			www.facebook.com/LAMOCHATHOfiicial</div>\r\n	</li>\r\n</ul>', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 15px; padding-top: 10px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif;\">\r\n	-</p>', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 15px; padding-top: 10px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif;\">\r\n	-</p>', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; font-size: 15px; padding-top: 10px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif;\">\r\n	-</p>', 1250.00, 500, '2020-10-02 07:29:51', '::1', '2022-03-23 05:44:08', '1.47.137.162'),
(3, 'serum.png', 'เซรั่ม', 'เซรั่ม', 'เซรั่ม', 'เซรั่ม (LA MOCHA 8 Gold Miracle   Face & Eye serum ) 30 ml', 'เซรั่ม (LA MOCHA 8 Gold Miracle   Face & Eye serum ) 30 ml', 'เซรั่ม (LA MOCHA 8 Gold Miracle   Face & Eye serum ) 30 ml', '003', 'เซรั่ม ลดริ้วรอย  : หากต้องการบำรุงผิวให้มากกว่าครีมบำรุงผิวทั่วไป เราแนะนำให้สาว ๆ เลือกใช้เซรั่มบำรุงผิว เพิ่มประสิทธิภาพการบำรุงผิวได้สุดลึกล้ำถึงระดับเซลล์ผิว อย่างเซรั่ม LaMocha ที่ช่วยให้ผิวทำงานได้อย่างดียิ่งขึ้นกว่าเดิม', 'เซรั่ม ลดริ้วรอย  : หากต้องการบำรุงผิวให้มากกว่าครีมบำรุงผิวทั่วไป เราแนะนำให้สาว ๆ เลือกใช้เซรั่มบำรุงผิว เพิ่มประสิทธิภาพการบำรุงผิวได้สุดลึกล้ำถึงระดับเซลล์ผิว อย่างเซรั่ม LaMocha ที่ช่วยให้ผิวทำงานได้อย่างดียิ่งขึ้นกว่าเดิม', 'เซรั่ม ลดริ้วรอย  : หากต้องการบำรุงผิวให้มากกว่าครีมบำรุงผิวทั่วไป เราแนะนำให้สาว ๆ เลือกใช้เซรั่มบำรุงผิว เพิ่มประสิทธิภาพการบำรุงผิวได้สุดลึกล้ำถึงระดับเซลล์ผิว อย่างเซรั่ม LaMocha ที่ช่วยให้ผิวทำงานได้อย่างดียิ่งขึ้นกว่าเดิม', '<p>\r\n	☑ ใช้บำรุงผิวหน้าและรอบดวงตา</p>\r\n<p>\r\n	☑ สกัดจากธรรมชาติ 100%</p>\r\n<p>\r\n	☑ จึงอ่อนโยนต่อผิวหน้าและดวงตา</p>\r\n<p>\r\n	☑ เห็นผลภายใน 7 วัน</p>\r\n<p>\r\n	☑ ใช้ต่อเนื่อง ยิ่งดูเด็ก หน้ายิ่งใส</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	เซรั่ม ลดริ้วรอย &nbsp;: หากต้องการบำรุงผิวให้มากกว่าครีมบำรุงผิวทั่วไป เราแนะนำให้สาว ๆ เลือกใช้เซรั่มบำรุงผิว เพิ่มประสิทธิภาพการบำรุงผิวได้สุดลึกล้ำถึงระดับเซลล์ผิว อย่างเซรั่ม LaMocha ที่ช่วยให้ผิวทำงานได้อย่างดียิ่งขึ้นกว่าเดิม</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	เซรั่มบำรุงผิว LaMocha ช่วยเติมน้ำให้กับเซลล์ผิว ทำให้ผิวหน้าไม่แห้งกร้าน ผิวเต่งตึง อุดมไปด้วยความชุ่มชื้น</p>\r\n<p>\r\n	ลดเลือนริ้วรอยแห่งวัย และช่วยทำให้ผิวมีความเรียบเนียน ลดอายุ เพิ่มการน่าสัมผัส</p>\r\n<p>\r\n	กระตุ้นการผลัดเซลล์ผิว โดยไม่ทำให้ผิวเกิดอาการระคายเคือง</p>\r\n<p>\r\n	ช่วยปรับสีผิวให้มีความกระจ่างใสอย่างเป็นธรรมชาติ ปรับสภาพให้เซลล์ผิวมีความอ่อนโยนมากยิ่งขึ้น</p>\r\n<p>\r\n	ลดการอักเสบของผิว มีสารต้านอนุมูลอิสระ ทำให้ผิวคงความอ่อนเยาว์</p>\r\n<p>\r\n	ลดการอุดตัน ช่วยทำให้ผิวแข็งแรง และยังช่วยลดจุดด่างดำได้</p>\r\n<p>\r\n	ถ้าต้องการอาหารผิวที่ช่วยบำรุงผิวหน้าได้ลึกล้ำ แนะนำเซรั่ม LaMocha เซรั่มสกัดจากสารธรรมชาติ เป็นอาหารผิว เมื่อใช้แล้วสามารถแทรกซึมลงบนผิวหน้า ใช้งานง่าย ใช้ควบคู่กับครีมบำรุงผิวที่ใช้อยู่ประจำได้เลย</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	ส่วนประกอบจากสารสกัดสีทอง จากธรรมชาติถึง 8 ชนิด</p>\r\n<p>\r\n	การดูแลผิวหน้า</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	1. รังไหมสีทองไหม(HYDROLYZED SILK)</p>\r\n<p>\r\n	เป็นโปรตีนที่สกัดได้จาก รังไหม ประกอบไปด้วย กรดอะมิโน 18 ชนิด มีคุณสมบัติกักเก็บความชุ่มชื้นได้ดี จึงสามารถป้องกันการสูญเสียน้ำ ของผิว อีกทั้งยัง ลดเลือน ริ้วรอย และ เพิ่มความเรียบเนียนให้แก่ผิว</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	2. เอนไซม์จากการหมักน้ำผึ้ง (FERMENTED HONEY)</p>\r\n<p>\r\n	สารสกัดจากการ หมักน้ำผึ้ง ด้วยเอ็นไซม์จากดอกพืช ได้เป็นสาร Gluconic Acid หรือ กรดน้ำผึ้ง ซึ่งมีประสิทธิภาพสูงในการ กระตุ้นการผลัดเซลล์ผิวโดยไม่ก่อให้เกิดการระคายเคือง ปรับสีผิวให้กระจ่างใสขึ้นอย่างอ่อนโยน และ เพิ่มความชุ่มชื่นให้กับผิว</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	3. โสมอินเดีย (ASHLEX BG)</p>\r\n<p>\r\n	สารสกัดจาก โสมอินเดีย ช่วยกระตุ้นการทำงานของเซลล์ให้มีประสิทธิภาพมากขึ้น ช่วยลดอาการอักเสบ และ ต้านอนุมูลอิสระช่วยให้ ผิวคงความสดใส</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	4. ดอกดาวเรือง (CALENDULA EXTRACT)</p>\r\n<p>\r\n	มีคุณสมบัติให้ความชุ่มชื้น ลดการอักเสบระคายเคือง รักษาผิวแพ้ง่าย และ ชะลออายุของผิว ทั้งยังช่วยป้องกันอนุมูลอิสระ ลดการอุดตัน และ ลดรอยแดงจากสิว ช่วยให้ผิวแข็งแรง</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	5. ขมิ้น (CURCUMIONIDS)</p>\r\n<p>\r\n	ช่วยลดสิวอักเสบ ลดเรือนริ้วรอย เสริมสร้างเซลล์ผิวให้แข็งแรง ลดการสะสมของสารอนุมูลอิสระ ขมิ้นชันมีส่วนผสมของเคอร์คูมินอยด์ และวิตามินอีสูง ลดอาการระคายเคือง และ อาการอักเสบของผิวให้ลดลง</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	6. ทองคำบริสุทธิ์อนุภาคนาโน(GOLD PEPTIDE)</p>\r\n<p>\r\n	สารสกัดจาก ทองคำบริสุทธิ์ ที่มีอนุภาคขนาดเล็กและมีความสามารถในการ บำรุงผิวได้อย่างล้ำลึก โดยมีความสามารถในการต้านอนุมูลอิสระ ทำให้ผิวคุณดู นุ่มลื่นน่าสัมผัส และต่อต้านริ้วรอยต่างๆ ที่เป็นปัญหากวนใจ ของสาวๆ ที่เริ่มมีริ้วรอย</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	7. สารสกัดจากดอก (LUMINESCENCE FLOWER)</p>\r\n<p>\r\n	สารสกัดจากดอก Verbascum Thapsus เป็น อนุภาคไมโครสะท้อนให้เห็นประกายรังสีสีฟ้าและให้ ความกระจ่างใส กับผิวหน้า มีคุณสมบัติช่วยกระจายแสงให้ ผิวดูเรียบเนียน เปล่งปลั่ง</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	8. WITCH HAZEL</p>\r\n<p>\r\n	ช่วยบำรุงให้ผิวชุ่มชื้น อีกทั้งยังช่วยกระตุ้นการสร้าง Elastin และ Collagen ทำให้ ผิวเนียนนุ่ม กระชับรูขุมขน สามารถปกป้องผิวจากมลภาวะต่างๆ และช่วยลดการเกิดสิว</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	AMC(Advance Moisture Complex) ที่ทำหน้าที่ผิวแลดูอ่อนเยาว์ กระจ่างใส ให้ความชุ่มชื่นยาวนานถึง 72 ชั่วโมง</p>\r\n<p>\r\n	ดอก Indian gentian leaves ปกป้องผิวจากมลภาวะ และแสงสีฟ้า SWT-7 TM และฟื้นบำรุงผิว ลดเลือนริ้วรอยอย่างเห็นผลชัดเจน สัมผัสได้ถึงริ้วรอยแลดูตื้นขึ้น เผยผิวเรียบเนียน ภายใน 7 วัน ทำให้ผิวแลอ่อนเยาว์</p>\r\n<p>\r\n	ได้รับรางวัลการันตรี ใน งาน In-Cosmetics สาขา Innovation Zone Best Ingredient Awards 2015</p>\r\n<p>\r\n	ปราศจากน้ำหอม ไร้สารอันตราย จึงมั่นใจได้ว่าปลอดภัยอ่อนโยน</p>\r\n<p>\r\n	เหมาะทุกสภาพผิว เซรั่มสามารถได้ทั่วใบหน้าและใต้ตาได้อีกด้วย</p>\r\n<p>\r\n	มี GO-VC จากประเทศญี่ปุ่นช่วยให้ปรับสภาพผิวให้แลดูขาวกระจ่างใส ลดเลือนฝ้ากระแลดูจางลง สัมผัสผิวที่แข็งแรงขึ้น แลดูสุขภาพดี เมื่อใช้ต่อเนื่องเป็นประจำ</p>\r\n<p>\r\n	ประโยชน์ของเซรั่ม LaMocha เพื่อการบำรุงผิวสุดลึกล้ำ</p>\r\n<p>\r\n	ครีมลดริ้วรอย : หากผิวหน้าของคุณต้องพบเจอกับปัญหาผิวมากมาย ไม่ว่าจะเป็นความแห้งกร้าน คล้ำเสีย ริ้วรอย จุดด่างดำ สิว หรือรอยสิว สิ่งที่จะช่วยขจัดปัญหาได้อย่างเร่งด่วนก็คือ เซรั่ม ซึ่งควรใช้ควบคู่กับครีมบำรุงผิว จะช่วยทำให้ผิวกลับมามีสุขภาพดีได้แบบเร่งด่วน</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	เซรั่มสกัดจากธรรมชาติ อุดมด้วยสารต้านอนุมูลอิสระ ช่วยปกป้องผิวจากมลพิษ และแสงสีฟ้าที่มาจากคอมพิวเตอร์หรืออุปกรณ์อิเล็กทรอนิกส์ต่าง ๆ</p>\r\n<p>\r\n	ช่วยทำให้ผิวขาวกระจ่างใส เรียบเนียน มีสุขภาพดีขึ้นได้แบบเร่งด่วนภายใน 7 วัน</p>\r\n<p>\r\n	ใช้ได้กับทุกสภาพผิว เป็นทั้งเซรั่มบำรุงผิวหน้าและเซรั่มลดเรือริ้วรอยและป้องกันผิวใต้ดวงตาได้อีกด้วย</p>\r\n<p>\r\n	มีความอ่อนโยน ไม่อันตราย และปราศจากน้ำหอม ไม่มีสารที่ทำให้ผิวเกิดการแพ้หรือระคายเคือง</p>\r\n<p>\r\n	ครีมลดริ้วรอย : นอกจากนี้ เซรั่ม LaMocha การันตีแล้วว่าดีต่อผิว เพราะได้รับรางวัล จากงาน In-Cosmetics สาขา Innovation Zone Best Ingredient Awards 2015 มั่นใจได้ว่าปลอดภัยต่อผิวสุด ๆ อาหารดีสำหรับผิว แม้แต่ผู้ที่แพ้ง่ายก็ยังใช้ได้ ดีขนาดนี้ รีบมาพิสูจน์ด้วยตัวคุณเองกันนะคะ</p>\r\n<p>\r\n	&nbsp;</p>', '<div>\r\n	LA MOCHA 8 Gold Face &amp;amp; Eye Serum</div>\r\n<div>\r\n	La Mocha Eight Gold Miracle Face and Eye Serum is a product for the face and</div>\r\n<div>\r\n	eyes.</div>\r\n<div>\r\n	pH Balance Formula</div>\r\n<div>\r\n	[ Ingredients and specials ]</div>\r\n<div>\r\n	- 8 types of natural gold extracts</div>\r\n<div>\r\n	-AMC (Advance Moisture Complex) that acts on the skin to look youthful, radiant,</div>\r\n<div>\r\n	moisturized for up to 72 hours.</div>\r\n<div>\r\n	- Indian gentian leaves protect the skin from pollution and blue light SWT-7 TM and</div>\r\n<div>\r\n	revitalize the skin. Visibly reduce the appearance of wrinkles Feel the wrinkles and</div>\r\n<div>\r\n	look shallower Reveal smooth skin within 7 days, making the skin look younger.</div>\r\n<div>\r\n	- Received a guaranteed award in the In-Cosmetics category in the Innovation Zone</div>\r\n<div>\r\n	Best Ingredient Awards 2015</div>\r\n<div>\r\n	Hydra Filler retains moisture under the skin 1000 times more.</div>\r\n<div>\r\n	Rejuvenate dry and rough skin in a deep way. Support the skin to be firm, absorb</div>\r\n<div>\r\n	water, reduce water loss of the skin. Make the skin look hydrated and soft. - Free of</div>\r\n<div>\r\n	perfume. free from harmful substances So you can be confident that it&amp;#39;s safe and</div>\r\n<div>\r\n	gentle.</div>\r\n<div>\r\n	- Suitable for all skin types The serum can be applied all over the face and under the</div>\r\n<div>\r\n	eyes as well.</div>\r\n<div>\r\n	- Contains GO-VC from Japan to help adjust the skin to look white and clear. Reduce</div>\r\n<div>\r\n	freckles and look faded Experience stronger, healthier-looking skin with regular use.</div>', '<div>\r\n	LA MOCHA 8 黄金面部和眼部精华</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	La Mocha 八金奇迹面部和眼部精华是面部和眼睛的产品</div>\r\n<div>\r\n	。</div>\r\n<div>\r\n	pH平衡公式</div>\r\n<div>\r\n	[成分和特色]</div>\r\n<div>\r\n	- 8 种天然黄金提取物</div>\r\n<div>\r\n	-AMC（高级保湿复合物）作用于肌肤，让肌肤看起来年轻</div>\r\n<div>\r\n	、容光焕发、滋润长达 72 小时。</div>\r\n<div>\r\n	- 印度龙胆叶保护皮肤免受污染和蓝光 SWT-7 TM 和活化</div>\r\n<div>\r\n	皮肤。明显减少皱纹的出现 感受皱纹，看起来更浅 在 7 天</div>\r\n<div>\r\n	内展现光滑的肌肤，让肌肤看起来更年轻。</div>\r\n<div>\r\n	- 在 2015 年创新区最佳成分奖中获得化妆品类的保证奖</div>\r\n<div>\r\n	Hydra Filler 可将皮肤下的水分保持 1000 倍以上。</div>\r\n<div>\r\n	深层修复干燥粗糙的肌肤。支持皮肤紧致，吸收水分，减</div>\r\n<div>\r\n	少皮肤水分流失。使皮肤看起来水润柔软。 - 不含香水。不</div>\r\n<div>\r\n	含有害物质，因此您可以确信它是安全和温和的。</div>\r\n<div>\r\n	- 适用于所有皮肤类型 精华液可涂抹于全脸和眼下。</div>\r\n<div>\r\n	- 含有来自日本的GO-VC，帮助调整皮肤看起来白皙透亮。</div>\r\n<div>\r\n	减少雀斑和褪色 经常使用可体验更强壮、更健康的肌肤。</div>', '<p>\r\n	<span courier=\"\" lucida=\"\" style=\"font-family: Consolas, \" white-space:=\"\">- </span></p>', '<p>\r\n	<span courier=\"\" lucida=\"\" style=\"font-family: Consolas, \" white-space:=\"\">- </span></p>', '<p>\r\n	<span courier=\"\" lucida=\"\" style=\"font-family: Consolas, \" white-space:=\"\">- </span></p>', 1590.00, -661, '2020-10-20 04:29:32', '124.120.117.45', '2022-03-23 05:45:44', '1.47.137.162'),
(4, 'ampull.png', 'แอมพูล', 'แอมพูล', 'แอมพูล', 'แอมพูล ( LA MOCHA Premium light & Bright Skin Ampoule ) 15 ml', 'แอมพูล ( LA MOCHA Premium light & Bright Skin Ampoule ) 15 ml', 'แอมพูล ( LA MOCHA Premium light & Bright Skin Ampoule ) 15 ml', '004', '-', '-', '-', '<p>\r\n	คุณสมบัติ :-</p>\r\n<p>\r\n	??สารบำรุงประสิทธิภาพสูง</p>\r\n<p>\r\n	??เข้มข้นมากกว่า เซรั่ม และ เอสเซ้นซ์ ธรรมดาทั่วไป</p>\r\n<p>\r\n	??สามารถฟื้นฟูผิวได้แบบรวดเร็ว หากสภาพผิวอ่อนล้า หรือ พังมา ที่ต้องการการดูแลในฉบับเร่งด่วน ซึ่ง Ampoule ที่มีความพรีเมียมประสิทธิภาพสูง</p>\r\n<p>\r\n	เราควรเลือกใช้แบบด่วนๆ และที่สำคัญ Ampoule คือสูตรลับ จาก LA MOCHA เน้นธรรมชาติ ผสมผสานนวัตกรรมขั้นล้ำ ที่พลังฟื้นฟู แบบเต็มที่</p>\r\n<p>\r\n	??สามารถผสมลงในผลิตภัณฑ์ดูแลผิวได้ทุกชนิด เช่น หยดลงใน เซรั่ม ครีมบำรุง โฟมล้างหน้า เป็นต้น</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	น่าใช้มากๆเลยหล่ะค่ะ ห้ามพลาด!!!!</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	ขนาด 15 ml</p>\r\n<p>\r\n	&nbsp;</p>', '<div>\r\n	Ampoule, a highly concentrated skin rejuvenation extract, specially designed</div>\r\n<div>\r\n	premium formula suitable for daily use, consisting of 8 molecules of hyaluronic</div>\r\n<div>\r\n	acid, stem cells from southern France&#39;s lost roses, and Alpha A. arbutin</div>\r\n<div>\r\n	Clear face, bouncing, higher than .. because using ampoule, good skin, urgent</div>\r\n<div>\r\n	rejuvenation up concentration See better results with nourishing products (good</div>\r\n<div>\r\n	skin, great results, easy to use, can be used in many forms, can be mixed with any</div>\r\n<div>\r\n	product, enhances the experience of taking care of advanced skin to another</div>\r\n<div>\r\n	level.</div>\r\n<div>\r\n	feature :-</div>\r\n<div>\r\n	high efficiency nourishment</div>\r\n<div>\r\n	More concentrated than normal serums and essences</div>\r\n<div>\r\n	can rejuvenate the skin quickly If the skin is tired or broken that needs urgent</div>\r\n<div>\r\n	care, the Ampoule is a high performance premium.</div>\r\n<div>\r\n	We should choose quickly and most importantly, Ampoule is a secret formula</div>\r\n<div>\r\n	from LA MOCHA, emphasizing nature, combining advanced innovations. at full</div>\r\n<div>\r\n	recovery power</div>\r\n<div>\r\n	Can be mixed into all kinds of skin care products such as drops into serum,</div>\r\n<div>\r\n	nourishing cream, facial foam, etc.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Size 15 ml</div>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	น่าใช้มากๆเลยหล่ะค่ะ ห้ามพลาด!!!!</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	ขนาด 15 ml</p>\r\n<p>\r\n	&nbsp;</p>', '<div>\r\n	安瓿，高浓缩嫩肤精华，特别设计适合日常使用的优质配方，由8分子透明质</div>\r\n<div>\r\n	酸、法国南部失落玫瑰的干细胞和熊果苷组成</div>\r\n<div>\r\n	清透的脸，弹跳的，高于..因为使用安瓿，皮肤好，紧急年轻化集中注意力使用</div>\r\n<div>\r\n	滋养产品看到更好的效果（皮肤好，效果好，易于使用，可以多种形式使用，</div>\r\n<div>\r\n	可以与任何产品混合使用，将高级肌肤护理体验提升到另一个层次。</div>\r\n<div>\r\n	特征 ：</div>\r\n<div>\r\n	高效营养</div>\r\n<div>\r\n	比普通精华液和精华液更浓缩</div>\r\n<div>\r\n	可以快速使皮肤恢复活力如果皮肤疲劳或破损需要紧急护理，安瓶是一种高性</div>\r\n<div>\r\n	能的优质产品。</div>\r\n<div>\r\n	我们应该快速选择，最重要的是，安瓿是来自LA MOCHA的秘密配方，强调自</div>\r\n<div>\r\n	然，结合先进的创新。完全恢复能力</div>\r\n<div>\r\n	可混入各种护肤品，如滴入精华液、滋养霜、洗面奶等。</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	大小 15 毫升</div>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>', '<p>\r\n	<span courier=\"\" lucida=\"\" style=\"font-family: Consolas, \" white-space:=\"\">- </span></p>', '<p>\r\n	<span courier=\"\" lucida=\"\" style=\"font-family: Consolas, \" white-space:=\"\">- </span></p>', '<p>\r\n	<span courier=\"\" lucida=\"\" style=\"font-family: Consolas, \" white-space:=\"\">- </span></p>', 799.00, -9506, '2020-10-20 04:31:13', '124.120.117.45', '2022-03-23 05:52:43', '1.47.137.162'),
(5, 'cream2.png', 'ครีมบำรุง', 'ครีมบำรุง', 'ครีมบำรุง', 'ครีมบำรุง  ( LA MOCHA MOM & BABY Moisturerizing Mask & Massage Cream ) 30 g', 'ครีมบำรุง  ( LA MOCHA MOM & BABY Moisturerizing Mask & Massage Cream ) 30 g', 'ครีมบำรุง  ( LA MOCHA MOM & BABY Moisturerizing Mask & Massage Cream ) 30 g', '005', 'ครีมบำรุงผิวหน้า สำหรับคุณแม่และลูกน้อย สามารถช่วย ลดการอับเสบระคายเคืองผิว ปกป้องผิวจากมลภาวะจากแสงแดด ( UV,Visible light ) และแสงสีฟ้า (IR) พร้อมทั้งช่วยปรับสภาพผิวให้ค่อยๆกระจ่างใสอย่างเป็นธรรมชาติ และบำรุงผิวหน้า ให้มีสุขภาพดี คืนชีวิตชีวาให้กับเซลล์ผิว ลดเลือนริ้วรอย จุดด่างดำ อีกทั้งยังช่วยส่งเสริมการสร้างของคอลลาเจน และ Hyaluronic acid ภายในเซลล์ เพื่อผิวดูเรียบเนียน แน่นกระชับ อิ่มฟู เต่งตึง และดูชุ่มชื้นมากขึ้น', 'ครีมบำรุงผิวหน้า สำหรับคุณแม่และลูกน้อย สามารถช่วย ลดการอับเสบระคายเคืองผิว ปกป้องผิวจากมลภาวะจากแสงแดด ( UV,Visible light ) และแสงสีฟ้า (IR) พร้อมทั้งช่วยปรับสภาพผิวให้ค่อยๆกระจ่างใสอย่างเป็นธรรมชาติ และบำรุงผิวหน้า ให้มีสุขภาพดี คืนชีวิตชีวาให้กับเซลล์ผิว ลดเลือนริ้วรอย จุดด่างดำ อีกทั้งยังช่วยส่งเสริมการสร้างของคอลลาเจน และ Hyaluronic acid ภายในเซลล์ เพื่อผิวดูเรียบเนียน แน่นกระชับ อิ่มฟู เต่งตึง และดูชุ่มชื้นมากขึ้น', 'ครีมบำรุงผิวหน้า สำหรับคุณแม่และลูกน้อย สามารถช่วย ลดการอับเสบระคายเคืองผิว ปกป้องผิวจากมลภาวะจากแสงแดด ( UV,Visible light ) และแสงสีฟ้า (IR) พร้อมทั้งช่วยปรับสภาพผิวให้ค่อยๆกระจ่างใสอย่างเป็นธรรมชาติ และบำรุงผิวหน้า ให้มีสุขภาพดี คืนชีวิตชีวาให้กับเซลล์ผิว ลดเลือนริ้วรอย จุดด่างดำ อีกทั้งยังช่วยส่งเสริมการสร้างของคอลลาเจน และ Hyaluronic acid ภายในเซลล์ เพื่อผิวดูเรียบเนียน แน่นกระชับ อิ่มฟู เต่งตึง และดูชุ่มชื้นมากขึ้น', '<p>\r\n	ครีมบำรุงผิวหน้า : สูตรอ่อนโยน ที่เป็นนวัตกรรมแห่งความผ่อนคลาย และ ปลอบปะโลมผิวหน้า ช่วยเพิ่มควำมชุ่มชื้นให้แก่ผิว ลดการสูญเสียน้ำของผิว</p>\r\n<p>\r\n	ครีมบำรุงผิวหน้า สำหรับคุณแม่และลูกน้อย สามารถช่วย ลดการอับเสบระคายเคืองผิว ปกป้องผิวจากมลภาวะจากแสงแดด ( UV,Visible light ) และแสงสีฟ้า (IR) พร้อมทั้งช่วยปรับสภาพผิวให้ค่อยๆกระจ่างใสอย่างเป็นธรรมชาติ และบำรุงผิวหน้า ให้มีสุขภาพดี คืนชีวิตชีวาให้กับเซลล์ผิว ลดเลือนริ้วรอย จุดด่างดำ อีกทั้งยังช่วยส่งเสริมการสร้างของคอลลาเจน และ Hyaluronic acid ภายในเซลล์ เพื่อผิวดูเรียบเนียน แน่นกระชับ อิ่มฟู เต่งตึง และดูชุ่มชื้นมากขึ้น</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	ส่วนประกอบ ครีมบำรุงผิวหน้า</p>\r\n<p>\r\n	(Mom &amp; Baby Moisturizing Cream)</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Allantoin</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	ช่วยลดการระคายเคือง ต่อต้านการแพ้ต่างๆของผิว (Soothing and Anti-Irritanting) และเสริมสร้างการสร้างเนื้อเยื่อ (Granulation tissue) ที่สมบูรณ์ขึ้นมาใหม่ ปลอดภัยและไร้ผลข้างเคียงสามารถใช้ได้แม้ในผลิตภัณฑ์สาหรับเด็กทารก</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Dipotassium Glycyrrhizate</p>\r\n<p>\r\n	สารสกัดจากชะเอมเทศ ทาหน้าที่ลดการอักเสบ ลดการแพ้ระคายเคือง</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Vitamin C (Sourc:Japan)</p>\r\n<p>\r\n	เป็นวิตามินซีที่อยู่ในรูป Ester ละลายได้ดีในน้ามัน ไม่มีความเป็นกรดเหมือนวิตามินซีทั่วไปที่ละลายในน้า มีความคงตัว มีประสิทธิภาพในการเป็น Antioxidant และกระตุ้นการสร้าง Collagen ช่วยปรับสภาพผิวให้ค่อยๆขาวขึ้นอย่างเป็นธรรมชาติ</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Chamomile Extract</p>\r\n<p>\r\n	สารสกัดจากดอกคาร์โมมายด์ชนิดออแกนิค ช่วยปกป้องผิวจากมลภาวะ ช่วยเพิ่มความแข็งแรง เนียนนุ่ม ชุ่มชื่นแก่ผิว ลดการอักเสบระคายเคืองของสิวและผิวพรรณ และลดรอยและแผลเป็น</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<strong>Jojoba oil</strong></p>\r\n<p>\r\n	oil น้ามันโจโจบามีคุณสมบัติทางเคมีใกล้เคียงกับซีบัม (น้ามันที่ร่างกายผลิตขึ้น) จึงให้ความชุ่มชื่นกับผิวได้อย่างเป็นธรรมชาติ ไม่เหนียวเหนอะ ซึมซาบลงสู่ผิวได้อย่างรวดเร็ว ไม่อุดตันรูขุมขน ไม่ทาให้เกิดการแพ้และระคายเคือง ช่วยป้องกันการสูญเสียน้า ทาให้ผิวเนียนนุ่ม นอกจากนี้ยังอุดมไปด้วยสารโทโคฟีรอล (วิตามินอี) ในปริมาณมาก จึงช่วยต่อต้านอนุมูลอิสระได้อย่างมีประสิทธิภาพ</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Squalane จัดเป็น Natural Moisturizing Factor เหมาะสาหรับผู้ที่มีปัญหา ผิวแห้งลอก ผิวแห้งหยาบกร้าน รักษาผิวให้เนียนนุ่มนวล ใช้บารุงผิวให้นุ่ม ไม่แห้งเป็นสะเก็ด สามารถนามาใช้เพิ่มประสิทธิภาพของ Moisturizers ในการบารุงผิวที่มีประสิทธิภาพ</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Hyaluronicc Acid ที่มีมวลโมเลกุลขนาด 1.0 Mda เป็นสารกลุ่มมอยซ์เจอร์ไรเซอร์ช่วยเติมน้าหล่อเลี้ยงและล็อคความชุ่มชื้นใต้ชั้นเซลล์ผิว ช่วยให้ผิวเรียบเนียน เต่งตึง มีความยืดหยุ่น กระชับ แลดูมีชีวิตชีวา ผิวหน้าจึงดูอ่อนเยาว์ มีสุขภาพดี จะช่วยลดริ้วรอยเหี่ยวย่น ริ้วรอยแห่งวัย และความแห้งกร้านที่เกิดจากการขาดการบารุงได้เป็นอย่างดี</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Serincin (Sourc: Thai)</p>\r\n<p>\r\n	สารสกัดจากรังไหม ที่อุดมไปด้วย Protein Sericinn มีคุณสมบัติพิเศษที่สามารถกักเก็บน้าไว้ได้ดีมาก เพิ่มความชุ่มชื่นให้แก่ผิวพรรณ ช่วยรักษาสมดุลความชุ่มชื่นของผิวหนัง ปกป้องรังสียูวี เพิ่มความกระชับและต้านริ้วรอยรวมทั้งปกป้องผิวจากมลภาวะภายนอก</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Myrciaria Dubia Fruit Extract (Sourc : France)</p>\r\n<p>\r\n	สารสกัดจากผลคามู -คามูที่ประกอบไปด้วยวิตามินซีและยังมีสารต้านอนุมูลอิสระที่เรียกว่า Polyphenol ในปริมาณสูง ช่วยทาให้ผิวขาวและช่วยให้ผิวดูอ่อนเยาว์</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Buddleja Officinalis Flower Extract (Sourc : France)</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	สารสกัดธรรมชาติจากดอก Buddleia หรือดอก Butterfly bush ที่อุดมด้วยสารสกัด Verbascoside และ Echinacoside ที่ช่วยปกป้องผิวจากแสงแดด (UV, Visible light) และแสงสีฟ้า (IR )</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Glycogen (Sourc : Canada)</p>\r\n<p>\r\n	เป็น Glycogen ที่มาจากธรรมชาติ ช่วยกักเก็บความชุ่มชื้น (Humectant) ทั้งยังลดเลือนริ้วรอย จุดด่างดา และทาให้ผิวดูกระจ่างใส นอกจากนี้ยังช่วยส่งเสริมการทางานของคอลลาเจนและ Hyaluronic acid ภายในเซลล์ ทาให้ผิวดูเรียบเนียน แน่นกระชับและดูชุ่มชื้น</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	สรุป</p>\r\n<p>\r\n	ครีมบำรุงผิวหน้า สำหรับคุณแม่และลูกน้อย สามารถช่วย ลดการอับเสบระคายเคืองผิว ปกป้องผิวจากมลภาวะจากแสงแดด ( UV,Visible light ) และแสงสีฟ้า (IR) พร้อมทั้งช่วยปรับสภาพผิวให้ค่อยๆกระจ่างใสอย่างเป็นธรรมชาติ และบำรุงผิวหน้า ให้มีสุขภาพดี คืนชีวิตชีวาให้กับเซลล์ผิว ลดเลือนริ้วรอย จุดด่างดำ อีกทั้งยังช่วยส่งเสริมการสร้างของคอลลาเจน และ Hyaluronic acid ภายในเซลล์ เพื่อผิวดูเรียบเนียน แน่นกระชับ อิ่มฟู เต่งตึง และดูชุ่มชื้นมากขึ้น</p>\r\n<p>\r\n	&nbsp;</p>', '<div>\r\n	Facial Cream : Gentle formula that is innovative to relax and</div>\r\n<div>\r\n	soothe the skin. Helps add moisture to the skin reduce the</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	water loss of the skin</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	facial cream For mothers and babies, it can help reduce</div>\r\n<div>\r\n	inflammation and skin irritation. Protects the skin from</div>\r\n<div>\r\n	pollution from sunlight (UV, Visible light) and blue light (IR)</div>\r\n<div>\r\n	as well as helping to adjust the skin to gradually brighten</div>\r\n<div>\r\n	naturally. and skin care to be healthy Rejuvenate the skin</div>\r\n<div>\r\n	cells Reduce wrinkles, dark spots, and also helps to promote</div>\r\n<div>\r\n	the creation of collagen and hyaluronic acid within the cells</div>\r\n<div>\r\n	to make the skin look smoother, firmer, fuller, firmer and</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	more hydrated.</div>\r\n<div>\r\n	Ingredients of facial cream</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	(Mom &amp;amp; Baby Moisturizing Cream) Allantoin</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	helps reduce irritation Anti-allergy of the skin (Soothing and</div>\r\n<div>\r\n	Anti-Irritanting) and strengthening the regeneration of</div>\r\n<div>\r\n	complete tissue (Granulation tissue) Safe and free of side</div>\r\n<div>\r\n	effects can be used even in infant products.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Dipotassium Glycyrrhizate</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Licorice Extract acts to reduce inflammation reduce allergic</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	irritation Vitamin C (Sourc:Japan)</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	It is vitamin C in ester form, soluble in oil. Not acidic like</div>\r\n<div>\r\n	general vitamin C that dissolves in water, has stability, is</div>\r\n<div>\r\n	effective as an Antioxidant and stimulates the production of</div>\r\n<div>\r\n	Collagen, helping to adjust the skin to gradually whiten</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	naturally. Chamomile Extract</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Organic chamomile flower extract protects the skin from</div>\r\n<div>\r\n	pollution Helps increase strength, smoothness, and moisture</div>\r\n<div>\r\n	to the skin Reduce inflammation, irritation of acne and skin.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	and reduce scars and scars Jojoba oil</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Jojoba oil has similar chemical properties to sebum. (Oil</div>\r\n<div>\r\n	produced by the body), so it naturally moisturizes the skin.</div>\r\n<div>\r\n	not sticky Absorbs into the skin quickly. Does not clog pores</div>\r\n<div>\r\n	Does not cause allergies and irritation. Help prevent water</div>\r\n<div>\r\n	loss Makes the skin smooth and soft It is also rich in</div>\r\n<div>\r\n	tocopherol (vitamin E) in large quantities, thus helping to</div>\r\n<div>\r\n	fight free radicals effectively. and also has extracts from</div>\r\n<div>\r\n	many different types of nature that are beneficial to the skin</div>\r\n<div>\r\n	Helps prevent skin damaging factors To premature aging,</div>\r\n<div>\r\n	irritation, is a good protective island. be premium</div>\r\n<div>\r\n	Moisturizing ,It is a product that should be used on a regular</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	basis.</div>', '<div>\r\n	面霜：创新的温和配方，可放松和舒缓肌肤。帮助补充皮</div>\r\n<div>\r\n	肤水分减少皮肤水分流失</div>\r\n<div>\r\n	面霜 对于妈妈和宝宝来说，它可以帮助减少炎症和皮肤刺</div>\r\n<div>\r\n	激。保护皮肤免受阳光（紫外线，可见光）和蓝光（IR）的</div>\r\n<div>\r\n	污染，并帮助调整皮肤以逐渐自然地变亮。和皮肤护理健</div>\r\n<div>\r\n	康 使皮肤细胞恢复活力 减少皱纹、黑斑，还有助于促进细</div>\r\n<div>\r\n	胞内胶原蛋白和透明质酸的产生，使皮肤看起来更光滑、</div>\r\n<div>\r\n	更紧致、更饱满、更紧致和更水润。</div>\r\n<div>\r\n	面霜的成分</div>\r\n<div>\r\n	（妈妈和宝宝保湿霜）尿囊素</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	有助于减少刺激 皮肤抗过敏（舒缓和抗刺激）和加</div>\r\n<div>\r\n	强完整组织（肉芽组织）的再生 安全且无副作用，</div>\r\n<div>\r\n	即使在婴儿产品中也可使用。</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	甘草酸二钾</div>\r\n<div>\r\n	甘草提取物可减轻炎症减少过敏性刺激维生素 C（来</div>\r\n<div>\r\n	源：日本）</div>\r\n<div>\r\n	它是酯形式的维生素C，溶于油。不像一般维他命C</div>\r\n<div>\r\n	呈酸性，溶于水，具有稳定性，具有抗氧化作用，能</div>\r\n<div>\r\n	刺激胶原蛋白的产生，帮助调整肌肤自然逐渐变白。</div>\r\n<div>\r\n	洋甘菊提取物</div>\r\n<div>\r\n	有机洋甘菊花提取物保护皮肤免受污染有助于增加皮</div>\r\n<div>\r\n	肤的强度、光滑度和水分减少炎症、痤疮和皮肤的刺</div>\r\n<div>\r\n	激。并减少疤痕和疤痕荷荷巴油</div>\r\n<div>\r\n	荷荷巴油具有与皮脂相似的化学性质。 （身体产生</div>\r\n<div>\r\n	的油脂），自然滋润肌肤。不粘腻迅速吸收到皮肤中</div>\r\n<div>\r\n	。不堵塞毛孔 不会引起过敏和刺激。帮助防止水分</div>\r\n<div>\r\n	流失使皮肤光滑柔软还大量富含生育酚（维生素</div>\r\n<div>\r\n	E），从而有助于有效对抗自由基。并且还含有来自</div>\r\n<div>\r\n	许多不同类型的对皮肤有益的自然提取物</div>\r\n<div>\r\n	有助于防止皮肤破坏因素对过早老化、刺激，是一个</div>\r\n<div>\r\n	很好的保护岛。是优质保湿，是应该定期使用的产品</div>\r\n<div>\r\n	&nbsp;</div>', '<p>\r\n	-</p>', '<p>\r\n	-</p>', '<p>\r\n	-</p>', 1550.00, 498, '2021-11-03 09:10:53', '1.46.17.34', '2022-03-23 05:48:45', '1.47.137.162');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_product_gallery`
--

CREATE TABLE `lv_product_gallery` (
  `product_gallery_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_gallery_image` varchar(255) NOT NULL,
  `product_gallery_datetime_create` datetime NOT NULL,
  `product_gallery_ip_create` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `lv_product_gallery`
--

INSERT INTO `lv_product_gallery` (`product_gallery_id`, `product_id`, `product_gallery_image`, `product_gallery_datetime_create`, `product_gallery_ip_create`) VALUES
(1, 1, 'Foam_Face.png', '2021-11-03 08:25:55', '1.46.17.34'),
(2, 2, 'cream.png', '2021-11-03 08:26:11', '1.46.17.34'),
(3, 3, 'serum.png', '2021-11-03 08:26:38', '1.46.17.34'),
(4, 4, 'ampull.png', '2021-11-03 08:26:52', '1.46.17.34'),
(5, 5, 'cream2.png', '2021-11-03 09:10:54', '1.46.17.34');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_promocode`
--

CREATE TABLE `lv_promocode` (
  `promocode_id` int(11) NOT NULL,
  `promocode_code` varchar(255) NOT NULL,
  `promocode_discount` float(10,2) NOT NULL,
  `promocode_type` enum('%','Baht') NOT NULL,
  `promocode_date_begin` date NOT NULL,
  `promocode_date_end` date NOT NULL,
  `promocode_datetime_create` datetime NOT NULL,
  `promocode_ip_create` varchar(255) NOT NULL,
  `promocode_datetime_update` datetime NOT NULL,
  `promocode_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `lv_promocode`
--

INSERT INTO `lv_promocode` (`promocode_id`, `promocode_code`, `promocode_discount`, `promocode_type`, `promocode_date_begin`, `promocode_date_end`, `promocode_datetime_create`, `promocode_ip_create`, `promocode_datetime_update`, `promocode_ip_update`) VALUES
(1, '12345', 35.00, '%', '2020-10-16', '2022-03-31', '2020-10-16 10:40:34', '::1', '2022-01-19 05:49:32', '1.47.19.163'),
(2, '78910', 300.00, 'Baht', '2020-10-16', '2020-10-31', '2020-10-16 10:40:56', '::1', '2020-10-16 10:46:04', '::1'),
(3, 'abc', 2000.00, 'Baht', '2022-07-01', '2022-07-31', '2022-07-01 05:06:29', '::1', '2022-07-01 05:11:36', '::1'),
(4, 'def', 3500.00, 'Baht', '2022-07-01', '2022-07-31', '2022-07-01 05:12:04', '::1', '2022-07-01 05:12:04', '::1'),
(5, 'ghi', 5000.00, 'Baht', '2022-07-01', '2022-07-31', '2022-07-01 05:12:30', '::1', '2022-07-01 05:13:12', '::1'),
(6, 'jkl', 10000.00, 'Baht', '2022-07-01', '2022-07-31', '2022-07-01 05:13:03', '::1', '2022-07-01 05:13:03', '::1');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_promotion`
--

CREATE TABLE `lv_promotion` (
  `promotion_id` int(11) NOT NULL,
  `promotion_image_th` varchar(255) NOT NULL,
  `promotion_image_en` varchar(255) NOT NULL,
  `promotion_image_ch` varchar(255) NOT NULL,
  `promotion_link` varchar(255) NOT NULL,
  `promotion_datetime_update` datetime NOT NULL,
  `promotion_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `lv_promotion`
--

INSERT INTO `lv_promotion` (`promotion_id`, `promotion_image_th`, `promotion_image_en`, `promotion_image_ch`, `promotion_link`, `promotion_datetime_update`, `promotion_ip_update`) VALUES
(1, 'cover_1650438817.jpg', 'cover_1650438817.jpg', 'cover_1650438817.jpg', 'http://ford.orangeworkshop.info/lamocha/product_inside/3', '2022-04-20 07:13:37', '1.46.131.213'),
(9, 'cover_1650438832.jpg', 'cover_1650438832.jpg', 'cover_1650438832.jpg', '', '2022-04-20 07:13:52', '1.46.131.213'),
(10, 'cover_1650438847.jpg', 'cover_1650438847.jpg', 'cover_1650438847.jpg', '', '2022-04-20 07:14:07', '1.46.131.213'),
(11, 'cover_1650438862.jpg', 'cover_1650438862.jpg', 'cover_1650438862.jpg', '', '2022-04-20 07:14:22', '1.46.131.213'),
(13, 'cover_1650438886.jpg', 'cover_1650438886.jpg', 'cover_1650438886.jpg', 'http://ford.orangeworkshop.info/lamocha/product_inside/3', '2022-04-20 07:14:46', '1.46.131.213'),
(14, 'cover_1650438903.jpg', 'cover_1650438903.jpg', 'cover_1650438903.jpg', 'http://ford.orangeworkshop.info/lamocha/product_inside/3', '2022-04-20 07:15:03', '1.46.131.213');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_rate_agent`
--

CREATE TABLE `lv_rate_agent` (
  `rate_agent_id` int(11) NOT NULL,
  `rate_agent_drop_ship_1_9` float(10,2) NOT NULL,
  `rate_agent_drop_ship_10_29` float(10,2) NOT NULL,
  `rate_agent_drop_ship_30_59` float(10,2) NOT NULL,
  `rate_agent_drop_ship_60_149` float(10,2) NOT NULL,
  `rate_agent_drop_ship_150_999` float(10,2) NOT NULL,
  `rate_agent_drop_ship_1000_4999` float(10,2) NOT NULL,
  `rate_agent_drop_ship_5000_10000` float(10,2) NOT NULL,
  `rate_agent_member_thai_franchise_online` float(10,2) NOT NULL,
  `rate_agent_dealer_partner_1_9` float(10,2) NOT NULL,
  `rate_agent_dealer_partner_10_29` float(10,2) NOT NULL,
  `rate_agent_dealer_partner_30_59` float(10,2) NOT NULL,
  `rate_agent_dealer_partner_60_149` float(10,2) NOT NULL,
  `rate_agent_dealer_partner_150_999` float(10,2) NOT NULL,
  `rate_agent_dealer_partner_1000_4999` float(10,2) NOT NULL,
  `rate_agent_dealer_partner_5000_10000` float(10,2) NOT NULL,
  `rate_agent_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `lv_rate_agent`
--

INSERT INTO `lv_rate_agent` (`rate_agent_id`, `rate_agent_drop_ship_1_9`, `rate_agent_drop_ship_10_29`, `rate_agent_drop_ship_30_59`, `rate_agent_drop_ship_60_149`, `rate_agent_drop_ship_150_999`, `rate_agent_drop_ship_1000_4999`, `rate_agent_drop_ship_5000_10000`, `rate_agent_member_thai_franchise_online`, `rate_agent_dealer_partner_1_9`, `rate_agent_dealer_partner_10_29`, `rate_agent_dealer_partner_30_59`, `rate_agent_dealer_partner_60_149`, `rate_agent_dealer_partner_150_999`, `rate_agent_dealer_partner_1000_4999`, `rate_agent_dealer_partner_5000_10000`, `rate_agent_datetime_update`) VALUES
(1, 0.00, 20.00, 26.40, 31.60, 41.60, 45.00, 50.00, 20.00, 0.00, 20.00, 26.40, 31.60, 41.60, 45.00, 50.00, '2021-12-10 03:16:59');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_review`
--

CREATE TABLE `lv_review` (
  `review_id` int(11) NOT NULL,
  `review_type` enum('Image','Video') NOT NULL,
  `review_image_th` varchar(255) DEFAULT NULL,
  `review_image_en` varchar(255) DEFAULT NULL,
  `review_image_ch` varchar(255) DEFAULT NULL,
  `review_vdo_th` varchar(255) DEFAULT NULL,
  `review_vdo_en` varchar(255) DEFAULT NULL,
  `review_vdo_ch` varchar(255) DEFAULT NULL,
  `review_datetime_create` datetime NOT NULL,
  `review_ip_create` varchar(255) NOT NULL,
  `review_datetime_update` datetime NOT NULL,
  `review_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `lv_review`
--

INSERT INTO `lv_review` (`review_id`, `review_type`, `review_image_th`, `review_image_en`, `review_image_ch`, `review_vdo_th`, `review_vdo_en`, `review_vdo_ch`, `review_datetime_create`, `review_ip_create`, `review_datetime_update`, `review_ip_update`) VALUES
(1, 'Image', 'img-reviews-1.jpg', 'img-reviews-1.jpg', 'img-reviews-1.jpg', 'https://www.youtube.com/embed/PtXs9vIuJ_8', 'https://www.youtube.com/embed/IlfPqrf48fc', 'https://www.youtube.com/embed/9VU8IjCzQDs', '2020-10-05 08:54:33', '::1', '2020-10-20 04:38:13', '124.120.117.45'),
(2, 'Image', 'img-reviews-2.jpg', 'img-reviews-2.jpg', 'img-reviews-2.jpg', NULL, NULL, NULL, '2020-10-05 09:13:00', '::1', '2020-10-20 04:38:48', '124.120.117.45'),
(6, 'Image', 'img-reviews-3.jpg', 'img-reviews-3.jpg', 'img-reviews-3.jpg', NULL, NULL, NULL, '2020-10-05 09:16:19', '::1', '2020-10-20 04:39:15', '124.120.117.45'),
(7, 'Image', 'img-reviews-4.jpg', 'img-reviews-4.jpg', 'img-reviews-4.jpg', NULL, NULL, NULL, '2020-10-20 04:39:49', '124.120.117.45', '2020-10-20 04:39:49', '124.120.117.45'),
(8, 'Image', 'img-reviews-5.jpg', 'img-reviews-5.jpg', 'img-reviews-5.jpg', NULL, NULL, NULL, '2020-10-20 04:40:25', '124.120.117.45', '2020-10-20 04:40:25', '124.120.117.45'),
(9, 'Image', 'img-reviews-6.jpg', 'img-reviews-6.jpg', 'img-reviews-6.jpg', NULL, NULL, NULL, '2020-10-20 04:41:04', '124.120.117.45', '2020-10-20 04:41:04', '124.120.117.45'),
(10, 'Image', 'img-reviews-7.jpg', 'img-reviews-7.jpg', 'img-reviews-7.jpg', NULL, NULL, NULL, '2020-10-20 04:41:41', '124.120.117.45', '2020-10-20 04:41:41', '124.120.117.45'),
(11, 'Image', 'img-reviews-8.jpg', 'img-reviews-8.jpg', 'img-reviews-8.jpg', NULL, NULL, NULL, '2020-10-20 04:42:20', '124.120.117.45', '2020-10-20 04:42:20', '124.120.117.45'),
(12, 'Image', 'img-reviews-9.jpg', 'img-reviews-9.jpg', 'img-reviews-9.jpg', NULL, NULL, NULL, '2020-10-20 04:42:56', '124.120.117.45', '2020-10-20 04:42:56', '124.120.117.45'),
(13, 'Image', 'img-reviews-10.jpg', 'img-reviews-10.jpg', 'img-reviews-10.jpg', NULL, NULL, NULL, '2020-10-20 04:43:35', '124.120.117.45', '2020-10-20 04:43:35', '124.120.117.45'),
(14, 'Image', 'img-reviews-11.jpg', 'img-reviews-11.jpg', 'img-reviews-11.jpg', NULL, NULL, NULL, '2020-10-20 04:44:12', '124.120.117.45', '2020-10-20 04:44:12', '124.120.117.45'),
(15, 'Image', 'img-reviews-12.jpg', 'img-reviews-12.jpg', 'img-reviews-12.jpg', NULL, NULL, NULL, '2020-10-20 04:44:50', '124.120.117.45', '2020-10-20 04:44:50', '124.120.117.45'),
(16, 'Image', 'img-reviews-14.jpg', 'img-reviews-14.jpg', 'img-reviews-14.jpg', NULL, NULL, NULL, '2020-10-20 04:45:26', '124.120.117.45', '2020-10-20 04:45:26', '124.120.117.45'),
(17, 'Image', 'img-reviews-15.jpg', 'img-reviews-15.jpg', 'img-reviews-15.jpg', NULL, NULL, NULL, '2020-10-20 04:46:02', '124.120.117.45', '2020-10-20 04:46:02', '124.120.117.45'),
(18, 'Image', 'img-reviews-16.jpg', 'img-reviews-16.jpg', 'img-reviews-16.jpg', NULL, NULL, NULL, '2020-10-20 04:47:54', '124.120.117.45', '2020-10-20 04:47:54', '124.120.117.45'),
(19, 'Video', NULL, NULL, NULL, 'https://www.youtube.com/embed/PtXs9vIuJ_8', 'https://www.youtube.com/embed/PtXs9vIuJ_8', 'https://www.youtube.com/embed/PtXs9vIuJ_8', '2020-10-20 04:48:44', '124.120.117.45', '2020-10-20 04:49:36', '124.120.117.45'),
(20, 'Video', NULL, NULL, NULL, 'https://www.youtube.com/embed/IlfPqrf48fc', 'https://www.youtube.com/embed/IlfPqrf48fc', 'https://www.youtube.com/embed/IlfPqrf48fc', '2020-10-20 04:50:44', '124.120.117.45', '2020-10-20 04:50:55', '124.120.117.45'),
(21, 'Video', NULL, NULL, NULL, 'https://www.youtube.com/embed/oX4ycFXhXrw', 'https://www.youtube.com/embed/oX4ycFXhXrw', 'https://www.youtube.com/embed/oX4ycFXhXrw', '2020-10-20 04:51:45', '124.120.117.45', '2020-10-20 04:51:45', '124.120.117.45'),
(22, 'Video', NULL, NULL, NULL, 'https://www.youtube.com/embed/9VU8IjCzQDs', 'https://www.youtube.com/embed/9VU8IjCzQDs', 'https://www.youtube.com/embed/9VU8IjCzQDs', '2020-10-20 04:52:25', '124.120.117.45', '2020-10-20 04:52:25', '124.120.117.45');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_shipping_information`
--

CREATE TABLE `lv_shipping_information` (
  `shipping_information_id` int(11) NOT NULL,
  `shipping_information_detail_th` longtext COLLATE utf8_unicode_ci NOT NULL,
  `shipping_information_detail_en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `shipping_information_detail_ch` longtext COLLATE utf8_unicode_ci NOT NULL,
  `shipping_information_datetime_update` datetime NOT NULL,
  `shipping_information_ip_update` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `lv_shipping_information`
--

INSERT INTO `lv_shipping_information` (`shipping_information_id`, `shipping_information_detail_th`, `shipping_information_detail_en`, `shipping_information_detail_ch`, `shipping_information_datetime_update`, `shipping_information_ip_update`) VALUES
(1, '<p>\r\n	Shipping Information (Th)</p>', '<p>\r\n	Shipping Information (En)</p>', '<p>\r\n	Shipping Information (Ch)</p>', '2022-06-10 03:41:20', '124.122.197.155');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_social_network`
--

CREATE TABLE `lv_social_network` (
  `social_network_id` int(11) NOT NULL,
  `social_network_facebook` varchar(255) NOT NULL,
  `social_network_twitter` varchar(255) NOT NULL,
  `social_network_instagram` varchar(255) NOT NULL,
  `social_network_youtube` varchar(255) NOT NULL,
  `social_network_line` varchar(255) NOT NULL,
  `social_network_datetime_update` datetime NOT NULL,
  `social_network_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_study_online`
--

CREATE TABLE `lv_study_online` (
  `study_online_id` int(11) NOT NULL,
  `coach_id` int(11) NOT NULL,
  `chapter_id` varchar(255) NOT NULL,
  `study_online_description_th` longtext NOT NULL,
  `study_online_description_en` longtext NOT NULL,
  `study_online_description_ch` longtext NOT NULL,
  `study_online_chapter` int(11) NOT NULL,
  `study_online_course_name_th` varchar(255) NOT NULL,
  `study_online_course_name_en` varchar(255) NOT NULL,
  `study_online_course_name_ch` varchar(255) NOT NULL,
  `study_online_embed_youtube_or_mp4` enum('Embed Youtube','MP4') NOT NULL,
  `study_online_embed_youtube_th` text NOT NULL,
  `study_online_embed_youtube_en` text NOT NULL,
  `study_online_embed_youtube_ch` text NOT NULL,
  `study_online_mp4_th` varchar(255) NOT NULL,
  `study_online_mp4_en` varchar(255) NOT NULL,
  `study_online_mp4_ch` varchar(255) NOT NULL,
  `study_online_time` varchar(255) NOT NULL,
  `study_online_sample` enum('No','Yes') NOT NULL,
  `study_online_datetime_create` datetime NOT NULL,
  `study_online_ip_create` varchar(255) NOT NULL,
  `study_online_datetime_update` datetime NOT NULL,
  `study_online_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `lv_study_online`
--

INSERT INTO `lv_study_online` (`study_online_id`, `coach_id`, `chapter_id`, `study_online_description_th`, `study_online_description_en`, `study_online_description_ch`, `study_online_chapter`, `study_online_course_name_th`, `study_online_course_name_en`, `study_online_course_name_ch`, `study_online_embed_youtube_or_mp4`, `study_online_embed_youtube_th`, `study_online_embed_youtube_en`, `study_online_embed_youtube_ch`, `study_online_mp4_th`, `study_online_mp4_en`, `study_online_mp4_ch`, `study_online_time`, `study_online_sample`, `study_online_datetime_create`, `study_online_ip_create`, `study_online_datetime_update`, `study_online_ip_update`) VALUES
(1, 1, 'บทนำ', '<h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Poppins, Prompt, sans-serif; font-weight: 500; line-height: 1.2; color: rgb(33, 37, 41); font-size: 18px;\">\r\n	คำอธิบายคอร์สออนไลน์</h5>\r\n<p style=\"box-sizing: border-box; margin: 0px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	&quot;การตลาดออนไลน์ ขายอสังหาฯ ยุค COVID-19&quot;</p>\r\n<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102); font-family: Poppins, Prompt, sans-serif;\">\r\n	<li style=\"box-sizing: border-box;\">\r\n		- มาทำความเข้าใจเครื่องมือการตลาดออนไลน์ ไม่ว่าจะเป็น Facebook, Google, Website, Line OA, IG, Inbox Massenger ฯลฯ ในการขายอสังหาฯ เครื่องมือไหนใช้ทำอะไร ควรเลือกใช้เครื่องมืออะไรดีในการขายและโฆษณาอสังหาฯ</li>\r\n	<li style=\"box-sizing: border-box;\">\r\n		- พร้อมกับเทคนิคการรับมือสถานการณ์ COVID-19 รวมไปถึงโอกาสที่จะเกิดขึ้น รู้ก่อน เตรียมพร้อมได้ก่อน</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	ประโยชน์ที่ผู้เรียนจะได้รับ</p>\r\n<div class=\"multi-collapse collapse show\" id=\"multiCollapseExample2\" style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102);\">\r\n		<li style=\"box-sizing: border-box;\">\r\n			1. ทำความเข้าใจจุดแข็งของ FB, Google, Website, IG, Youtube, LineOA และอื่นๆ</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			2. รู้วิธีการใช้เครื่องการมือการตลาดออนไลน์ที่ถูกต้อง</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			3. ชนะเกมส์การขายอสังหาฯ บนโลกออนไลน์ แบบ Winnig Strategy</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			4. เทคนิคการปรับตัว รับมือ COVID-19 พร้อมโอกาสที่จะเกิดขึ้นแน่นอน</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			5. เจาะลึกพฤติกรรมของลูกค้าบนโลกออนไลน์ กับอสังหาฯ</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			6. Customer Journey กว่าลูกค้าจะซื้อ เขาผ่านอะไรมาบ้าง</li>\r\n		และอื่นๆอีกมากมาย\r\n	</ul>\r\n	<p style=\"box-sizing: border-box; margin: 0px;\">\r\n		ใครควรเรียนคอร์สออนไลน์นี้</p>\r\n	<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102);\">\r\n		<li style=\"box-sizing: border-box;\">\r\n			- เจ้าของโครงการ, นักพัฒนาอสังหาฯริมทรัพย์</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- นายหน้าอสังหาริมทรัพย์</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- ฝ่ายขาย, ฝ่ายการตลาด, และเซลล์โครงการใหม่</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- นักลงทุนในธุรกิจอสังหาริมทรัพย์</li>\r\n	</ul>\r\n</div>\r\n<p>\r\n	&nbsp;</p>', '<h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Poppins, Prompt, sans-serif; font-weight: 500; line-height: 1.2; color: rgb(33, 37, 41); font-size: 18px;\">\r\n	คำอธิบายคอร์สออนไลน์</h5>\r\n<p style=\"box-sizing: border-box; margin: 0px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	&quot;การตลาดออนไลน์ ขายอสังหาฯ ยุค COVID-19&quot;</p>\r\n<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102); font-family: Poppins, Prompt, sans-serif;\">\r\n	<li style=\"box-sizing: border-box;\">\r\n		- มาทำความเข้าใจเครื่องมือการตลาดออนไลน์ ไม่ว่าจะเป็น Facebook, Google, Website, Line OA, IG, Inbox Massenger ฯลฯ ในการขายอสังหาฯ เครื่องมือไหนใช้ทำอะไร ควรเลือกใช้เครื่องมืออะไรดีในการขายและโฆษณาอสังหาฯ</li>\r\n	<li style=\"box-sizing: border-box;\">\r\n		- พร้อมกับเทคนิคการรับมือสถานการณ์ COVID-19 รวมไปถึงโอกาสที่จะเกิดขึ้น รู้ก่อน เตรียมพร้อมได้ก่อน</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	ประโยชน์ที่ผู้เรียนจะได้รับ</p>\r\n<div class=\"multi-collapse collapse show\" id=\"multiCollapseExample2\" style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102);\">\r\n		<li style=\"box-sizing: border-box;\">\r\n			1. ทำความเข้าใจจุดแข็งของ FB, Google, Website, IG, Youtube, LineOA และอื่นๆ</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			2. รู้วิธีการใช้เครื่องการมือการตลาดออนไลน์ที่ถูกต้อง</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			3. ชนะเกมส์การขายอสังหาฯ บนโลกออนไลน์ แบบ Winnig Strategy</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			4. เทคนิคการปรับตัว รับมือ COVID-19 พร้อมโอกาสที่จะเกิดขึ้นแน่นอน</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			5. เจาะลึกพฤติกรรมของลูกค้าบนโลกออนไลน์ กับอสังหาฯ</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			6. Customer Journey กว่าลูกค้าจะซื้อ เขาผ่านอะไรมาบ้าง</li>\r\n		และอื่นๆอีกมากมาย\r\n	</ul>\r\n	<p style=\"box-sizing: border-box; margin: 0px;\">\r\n		ใครควรเรียนคอร์สออนไลน์นี้</p>\r\n	<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102);\">\r\n		<li style=\"box-sizing: border-box;\">\r\n			- เจ้าของโครงการ, นักพัฒนาอสังหาฯริมทรัพย์</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- นายหน้าอสังหาริมทรัพย์</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- ฝ่ายขาย, ฝ่ายการตลาด, และเซลล์โครงการใหม่</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- นักลงทุนในธุรกิจอสังหาริมทรัพย์</li>\r\n	</ul>\r\n</div>\r\n<p>\r\n	&nbsp;</p>', '<h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Poppins, Prompt, sans-serif; font-weight: 500; line-height: 1.2; color: rgb(33, 37, 41); font-size: 18px;\">\r\n	คำอธิบายคอร์สออนไลน์</h5>\r\n<p style=\"box-sizing: border-box; margin: 0px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	&quot;การตลาดออนไลน์ ขายอสังหาฯ ยุค COVID-19&quot;</p>\r\n<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102); font-family: Poppins, Prompt, sans-serif;\">\r\n	<li style=\"box-sizing: border-box;\">\r\n		- มาทำความเข้าใจเครื่องมือการตลาดออนไลน์ ไม่ว่าจะเป็น Facebook, Google, Website, Line OA, IG, Inbox Massenger ฯลฯ ในการขายอสังหาฯ เครื่องมือไหนใช้ทำอะไร ควรเลือกใช้เครื่องมืออะไรดีในการขายและโฆษณาอสังหาฯ</li>\r\n	<li style=\"box-sizing: border-box;\">\r\n		- พร้อมกับเทคนิคการรับมือสถานการณ์ COVID-19 รวมไปถึงโอกาสที่จะเกิดขึ้น รู้ก่อน เตรียมพร้อมได้ก่อน</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	ประโยชน์ที่ผู้เรียนจะได้รับ</p>\r\n<div class=\"multi-collapse collapse show\" id=\"multiCollapseExample2\" style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102);\">\r\n		<li style=\"box-sizing: border-box;\">\r\n			1. ทำความเข้าใจจุดแข็งของ FB, Google, Website, IG, Youtube, LineOA และอื่นๆ</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			2. รู้วิธีการใช้เครื่องการมือการตลาดออนไลน์ที่ถูกต้อง</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			3. ชนะเกมส์การขายอสังหาฯ บนโลกออนไลน์ แบบ Winnig Strategy</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			4. เทคนิคการปรับตัว รับมือ COVID-19 พร้อมโอกาสที่จะเกิดขึ้นแน่นอน</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			5. เจาะลึกพฤติกรรมของลูกค้าบนโลกออนไลน์ กับอสังหาฯ</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			6. Customer Journey กว่าลูกค้าจะซื้อ เขาผ่านอะไรมาบ้าง</li>\r\n		และอื่นๆอีกมากมาย\r\n	</ul>\r\n	<p style=\"box-sizing: border-box; margin: 0px;\">\r\n		ใครควรเรียนคอร์สออนไลน์นี้</p>\r\n	<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102);\">\r\n		<li style=\"box-sizing: border-box;\">\r\n			- เจ้าของโครงการ, นักพัฒนาอสังหาฯริมทรัพย์</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- นายหน้าอสังหาริมทรัพย์</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- ฝ่ายขาย, ฝ่ายการตลาด, และเซลล์โครงการใหม่</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- นักลงทุนในธุรกิจอสังหาริมทรัพย์</li>\r\n	</ul>\r\n</div>\r\n<p>\r\n	&nbsp;</p>', 1, 'Test', 'Test', 'Test', 'Embed Youtube', 'https://www.youtube.com/embed/tBFY0r1xN7c', 'https://www.youtube.com/embed/tBFY0r1xN7c', 'https://www.youtube.com/embed/tBFY0r1xN7c', '', '', '', '01:00', 'Yes', '2020-10-07 03:19:14', '::1', '2020-10-07 05:47:01', '::1'),
(2, 1, 'บทนำ', '<h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Poppins, Prompt, sans-serif; font-weight: 500; line-height: 1.2; color: rgb(33, 37, 41); font-size: 18px;\">\r\n	คำอธิบายคอร์สออนไลน์</h5>\r\n<p style=\"box-sizing: border-box; margin: 0px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	&quot;การตลาดออนไลน์ ขายอสังหาฯ ยุค COVID-19&quot;</p>\r\n<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102); font-family: Poppins, Prompt, sans-serif;\">\r\n	<li style=\"box-sizing: border-box;\">\r\n		- มาทำความเข้าใจเครื่องมือการตลาดออนไลน์ ไม่ว่าจะเป็น Facebook, Google, Website, Line OA, IG, Inbox Massenger ฯลฯ ในการขายอสังหาฯ เครื่องมือไหนใช้ทำอะไร ควรเลือกใช้เครื่องมืออะไรดีในการขายและโฆษณาอสังหาฯ</li>\r\n	<li style=\"box-sizing: border-box;\">\r\n		- พร้อมกับเทคนิคการรับมือสถานการณ์ COVID-19 รวมไปถึงโอกาสที่จะเกิดขึ้น รู้ก่อน เตรียมพร้อมได้ก่อน</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	ประโยชน์ที่ผู้เรียนจะได้รับ</p>\r\n<div class=\"multi-collapse collapse show\" id=\"multiCollapseExample2\" style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102);\">\r\n		<li style=\"box-sizing: border-box;\">\r\n			1. ทำความเข้าใจจุดแข็งของ FB, Google, Website, IG, Youtube, LineOA และอื่นๆ</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			2. รู้วิธีการใช้เครื่องการมือการตลาดออนไลน์ที่ถูกต้อง</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			3. ชนะเกมส์การขายอสังหาฯ บนโลกออนไลน์ แบบ Winnig Strategy</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			4. เทคนิคการปรับตัว รับมือ COVID-19 พร้อมโอกาสที่จะเกิดขึ้นแน่นอน</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			5. เจาะลึกพฤติกรรมของลูกค้าบนโลกออนไลน์ กับอสังหาฯ</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			6. Customer Journey กว่าลูกค้าจะซื้อ เขาผ่านอะไรมาบ้าง</li>\r\n		และอื่นๆอีกมากมาย\r\n	</ul>\r\n	<p style=\"box-sizing: border-box; margin: 0px;\">\r\n		ใครควรเรียนคอร์สออนไลน์นี้</p>\r\n	<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102);\">\r\n		<li style=\"box-sizing: border-box;\">\r\n			- เจ้าของโครงการ, นักพัฒนาอสังหาฯริมทรัพย์</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- นายหน้าอสังหาริมทรัพย์</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- ฝ่ายขาย, ฝ่ายการตลาด, และเซลล์โครงการใหม่</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- นักลงทุนในธุรกิจอสังหาริมทรัพย์</li>\r\n	</ul>\r\n</div>\r\n<p>\r\n	&nbsp;</p>', '<h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Poppins, Prompt, sans-serif; font-weight: 500; line-height: 1.2; color: rgb(33, 37, 41); font-size: 18px;\">\r\n	คำอธิบายคอร์สออนไลน์</h5>\r\n<p style=\"box-sizing: border-box; margin: 0px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	&quot;การตลาดออนไลน์ ขายอสังหาฯ ยุค COVID-19&quot;</p>\r\n<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102); font-family: Poppins, Prompt, sans-serif;\">\r\n	<li style=\"box-sizing: border-box;\">\r\n		- มาทำความเข้าใจเครื่องมือการตลาดออนไลน์ ไม่ว่าจะเป็น Facebook, Google, Website, Line OA, IG, Inbox Massenger ฯลฯ ในการขายอสังหาฯ เครื่องมือไหนใช้ทำอะไร ควรเลือกใช้เครื่องมืออะไรดีในการขายและโฆษณาอสังหาฯ</li>\r\n	<li style=\"box-sizing: border-box;\">\r\n		- พร้อมกับเทคนิคการรับมือสถานการณ์ COVID-19 รวมไปถึงโอกาสที่จะเกิดขึ้น รู้ก่อน เตรียมพร้อมได้ก่อน</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	ประโยชน์ที่ผู้เรียนจะได้รับ</p>\r\n<div class=\"multi-collapse collapse show\" id=\"multiCollapseExample2\" style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102);\">\r\n		<li style=\"box-sizing: border-box;\">\r\n			1. ทำความเข้าใจจุดแข็งของ FB, Google, Website, IG, Youtube, LineOA และอื่นๆ</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			2. รู้วิธีการใช้เครื่องการมือการตลาดออนไลน์ที่ถูกต้อง</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			3. ชนะเกมส์การขายอสังหาฯ บนโลกออนไลน์ แบบ Winnig Strategy</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			4. เทคนิคการปรับตัว รับมือ COVID-19 พร้อมโอกาสที่จะเกิดขึ้นแน่นอน</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			5. เจาะลึกพฤติกรรมของลูกค้าบนโลกออนไลน์ กับอสังหาฯ</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			6. Customer Journey กว่าลูกค้าจะซื้อ เขาผ่านอะไรมาบ้าง</li>\r\n		และอื่นๆอีกมากมาย\r\n	</ul>\r\n	<p style=\"box-sizing: border-box; margin: 0px;\">\r\n		ใครควรเรียนคอร์สออนไลน์นี้</p>\r\n	<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102);\">\r\n		<li style=\"box-sizing: border-box;\">\r\n			- เจ้าของโครงการ, นักพัฒนาอสังหาฯริมทรัพย์</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- นายหน้าอสังหาริมทรัพย์</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- ฝ่ายขาย, ฝ่ายการตลาด, และเซลล์โครงการใหม่</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- นักลงทุนในธุรกิจอสังหาริมทรัพย์</li>\r\n	</ul>\r\n</div>\r\n<p>\r\n	&nbsp;</p>', '<h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Poppins, Prompt, sans-serif; font-weight: 500; line-height: 1.2; color: rgb(33, 37, 41); font-size: 18px;\">\r\n	คำอธิบายคอร์สออนไลน์</h5>\r\n<p style=\"box-sizing: border-box; margin: 0px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	&quot;การตลาดออนไลน์ ขายอสังหาฯ ยุค COVID-19&quot;</p>\r\n<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102); font-family: Poppins, Prompt, sans-serif;\">\r\n	<li style=\"box-sizing: border-box;\">\r\n		- มาทำความเข้าใจเครื่องมือการตลาดออนไลน์ ไม่ว่าจะเป็น Facebook, Google, Website, Line OA, IG, Inbox Massenger ฯลฯ ในการขายอสังหาฯ เครื่องมือไหนใช้ทำอะไร ควรเลือกใช้เครื่องมืออะไรดีในการขายและโฆษณาอสังหาฯ</li>\r\n	<li style=\"box-sizing: border-box;\">\r\n		- พร้อมกับเทคนิคการรับมือสถานการณ์ COVID-19 รวมไปถึงโอกาสที่จะเกิดขึ้น รู้ก่อน เตรียมพร้อมได้ก่อน</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	ประโยชน์ที่ผู้เรียนจะได้รับ</p>\r\n<div class=\"multi-collapse collapse show\" id=\"multiCollapseExample2\" style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102);\">\r\n		<li style=\"box-sizing: border-box;\">\r\n			1. ทำความเข้าใจจุดแข็งของ FB, Google, Website, IG, Youtube, LineOA และอื่นๆ</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			2. รู้วิธีการใช้เครื่องการมือการตลาดออนไลน์ที่ถูกต้อง</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			3. ชนะเกมส์การขายอสังหาฯ บนโลกออนไลน์ แบบ Winnig Strategy</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			4. เทคนิคการปรับตัว รับมือ COVID-19 พร้อมโอกาสที่จะเกิดขึ้นแน่นอน</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			5. เจาะลึกพฤติกรรมของลูกค้าบนโลกออนไลน์ กับอสังหาฯ</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			6. Customer Journey กว่าลูกค้าจะซื้อ เขาผ่านอะไรมาบ้าง</li>\r\n		และอื่นๆอีกมากมาย\r\n	</ul>\r\n	<p style=\"box-sizing: border-box; margin: 0px;\">\r\n		ใครควรเรียนคอร์สออนไลน์นี้</p>\r\n	<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102);\">\r\n		<li style=\"box-sizing: border-box;\">\r\n			- เจ้าของโครงการ, นักพัฒนาอสังหาฯริมทรัพย์</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- นายหน้าอสังหาริมทรัพย์</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- ฝ่ายขาย, ฝ่ายการตลาด, และเซลล์โครงการใหม่</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- นักลงทุนในธุรกิจอสังหาริมทรัพย์</li>\r\n	</ul>\r\n</div>\r\n<p>\r\n	&nbsp;</p>', 2, 'Test 2', 'Test 2', 'Test 2', 'Embed Youtube', 'https://www.youtube.com/embed/tBFY0r1xN7c', 'https://www.youtube.com/embed/tBFY0r1xN7c', 'https://www.youtube.com/embed/tBFY0r1xN7c', '', '', '', '02:00', 'Yes', '2020-10-07 03:24:00', '::1', '2020-10-26 09:16:33', '124.122.197.40'),
(3, 1, '1', '<h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Poppins, Prompt, sans-serif; font-weight: 500; line-height: 1.2; color: rgb(33, 37, 41); font-size: 18px;\">\r\n	คำอธิบายคอร์สออนไลน์</h5>\r\n<p style=\"box-sizing: border-box; margin: 0px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	&quot;การตลาดออนไลน์ ขายอสังหาฯ ยุค COVID-19&quot;</p>\r\n<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102); font-family: Poppins, Prompt, sans-serif;\">\r\n	<li style=\"box-sizing: border-box;\">\r\n		- มาทำความเข้าใจเครื่องมือการตลาดออนไลน์ ไม่ว่าจะเป็น Facebook, Google, Website, Line OA, IG, Inbox Massenger ฯลฯ ในการขายอสังหาฯ เครื่องมือไหนใช้ทำอะไร ควรเลือกใช้เครื่องมืออะไรดีในการขายและโฆษณาอสังหาฯ</li>\r\n	<li style=\"box-sizing: border-box;\">\r\n		- พร้อมกับเทคนิคการรับมือสถานการณ์ COVID-19 รวมไปถึงโอกาสที่จะเกิดขึ้น รู้ก่อน เตรียมพร้อมได้ก่อน</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	ประโยชน์ที่ผู้เรียนจะได้รับ</p>\r\n<div class=\"multi-collapse collapse show\" id=\"multiCollapseExample2\" style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102);\">\r\n		<li style=\"box-sizing: border-box;\">\r\n			1. ทำความเข้าใจจุดแข็งของ FB, Google, Website, IG, Youtube, LineOA และอื่นๆ</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			2. รู้วิธีการใช้เครื่องการมือการตลาดออนไลน์ที่ถูกต้อง</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			3. ชนะเกมส์การขายอสังหาฯ บนโลกออนไลน์ แบบ Winnig Strategy</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			4. เทคนิคการปรับตัว รับมือ COVID-19 พร้อมโอกาสที่จะเกิดขึ้นแน่นอน</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			5. เจาะลึกพฤติกรรมของลูกค้าบนโลกออนไลน์ กับอสังหาฯ</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			6. Customer Journey กว่าลูกค้าจะซื้อ เขาผ่านอะไรมาบ้าง</li>\r\n		และอื่นๆอีกมากมาย\r\n	</ul>\r\n	<p style=\"box-sizing: border-box; margin: 0px;\">\r\n		ใครควรเรียนคอร์สออนไลน์นี้</p>\r\n	<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102);\">\r\n		<li style=\"box-sizing: border-box;\">\r\n			- เจ้าของโครงการ, นักพัฒนาอสังหาฯริมทรัพย์</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- นายหน้าอสังหาริมทรัพย์</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- ฝ่ายขาย, ฝ่ายการตลาด, และเซลล์โครงการใหม่</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- นักลงทุนในธุรกิจอสังหาริมทรัพย์</li>\r\n	</ul>\r\n</div>\r\n<p>\r\n	&nbsp;</p>', '<h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Poppins, Prompt, sans-serif; font-weight: 500; line-height: 1.2; color: rgb(33, 37, 41); font-size: 18px;\">\r\n	คำอธิบายคอร์สออนไลน์</h5>\r\n<p style=\"box-sizing: border-box; margin: 0px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	&quot;การตลาดออนไลน์ ขายอสังหาฯ ยุค COVID-19&quot;</p>\r\n<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102); font-family: Poppins, Prompt, sans-serif;\">\r\n	<li style=\"box-sizing: border-box;\">\r\n		- มาทำความเข้าใจเครื่องมือการตลาดออนไลน์ ไม่ว่าจะเป็น Facebook, Google, Website, Line OA, IG, Inbox Massenger ฯลฯ ในการขายอสังหาฯ เครื่องมือไหนใช้ทำอะไร ควรเลือกใช้เครื่องมืออะไรดีในการขายและโฆษณาอสังหาฯ</li>\r\n	<li style=\"box-sizing: border-box;\">\r\n		- พร้อมกับเทคนิคการรับมือสถานการณ์ COVID-19 รวมไปถึงโอกาสที่จะเกิดขึ้น รู้ก่อน เตรียมพร้อมได้ก่อน</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	ประโยชน์ที่ผู้เรียนจะได้รับ</p>\r\n<div class=\"multi-collapse collapse show\" id=\"multiCollapseExample2\" style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102);\">\r\n		<li style=\"box-sizing: border-box;\">\r\n			1. ทำความเข้าใจจุดแข็งของ FB, Google, Website, IG, Youtube, LineOA และอื่นๆ</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			2. รู้วิธีการใช้เครื่องการมือการตลาดออนไลน์ที่ถูกต้อง</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			3. ชนะเกมส์การขายอสังหาฯ บนโลกออนไลน์ แบบ Winnig Strategy</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			4. เทคนิคการปรับตัว รับมือ COVID-19 พร้อมโอกาสที่จะเกิดขึ้นแน่นอน</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			5. เจาะลึกพฤติกรรมของลูกค้าบนโลกออนไลน์ กับอสังหาฯ</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			6. Customer Journey กว่าลูกค้าจะซื้อ เขาผ่านอะไรมาบ้าง</li>\r\n		และอื่นๆอีกมากมาย\r\n	</ul>\r\n	<p style=\"box-sizing: border-box; margin: 0px;\">\r\n		ใครควรเรียนคอร์สออนไลน์นี้</p>\r\n	<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102);\">\r\n		<li style=\"box-sizing: border-box;\">\r\n			- เจ้าของโครงการ, นักพัฒนาอสังหาฯริมทรัพย์</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- นายหน้าอสังหาริมทรัพย์</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- ฝ่ายขาย, ฝ่ายการตลาด, และเซลล์โครงการใหม่</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- นักลงทุนในธุรกิจอสังหาริมทรัพย์</li>\r\n	</ul>\r\n</div>\r\n<p>\r\n	&nbsp;</p>', '<h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-family: Poppins, Prompt, sans-serif; font-weight: 500; line-height: 1.2; color: rgb(33, 37, 41); font-size: 18px;\">\r\n	คำอธิบายคอร์สออนไลน์</h5>\r\n<p style=\"box-sizing: border-box; margin: 0px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	&quot;การตลาดออนไลน์ ขายอสังหาฯ ยุค COVID-19&quot;</p>\r\n<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102); font-family: Poppins, Prompt, sans-serif;\">\r\n	<li style=\"box-sizing: border-box;\">\r\n		- มาทำความเข้าใจเครื่องมือการตลาดออนไลน์ ไม่ว่าจะเป็น Facebook, Google, Website, Line OA, IG, Inbox Massenger ฯลฯ ในการขายอสังหาฯ เครื่องมือไหนใช้ทำอะไร ควรเลือกใช้เครื่องมืออะไรดีในการขายและโฆษณาอสังหาฯ</li>\r\n	<li style=\"box-sizing: border-box;\">\r\n		- พร้อมกับเทคนิคการรับมือสถานการณ์ COVID-19 รวมไปถึงโอกาสที่จะเกิดขึ้น รู้ก่อน เตรียมพร้อมได้ก่อน</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	ประโยชน์ที่ผู้เรียนจะได้รับ</p>\r\n<div class=\"multi-collapse collapse show\" id=\"multiCollapseExample2\" style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: Poppins, Prompt, sans-serif; font-size: 16px;\">\r\n	<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102);\">\r\n		<li style=\"box-sizing: border-box;\">\r\n			1. ทำความเข้าใจจุดแข็งของ FB, Google, Website, IG, Youtube, LineOA และอื่นๆ</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			2. รู้วิธีการใช้เครื่องการมือการตลาดออนไลน์ที่ถูกต้อง</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			3. ชนะเกมส์การขายอสังหาฯ บนโลกออนไลน์ แบบ Winnig Strategy</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			4. เทคนิคการปรับตัว รับมือ COVID-19 พร้อมโอกาสที่จะเกิดขึ้นแน่นอน</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			5. เจาะลึกพฤติกรรมของลูกค้าบนโลกออนไลน์ กับอสังหาฯ</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			6. Customer Journey กว่าลูกค้าจะซื้อ เขาผ่านอะไรมาบ้าง</li>\r\n		และอื่นๆอีกมากมาย\r\n	</ul>\r\n	<p style=\"box-sizing: border-box; margin: 0px;\">\r\n		ใครควรเรียนคอร์สออนไลน์นี้</p>\r\n	<ul class=\"ul_online\" style=\"box-sizing: border-box; margin: 0px; list-style: none; padding: 0px 0px 0px 30px; font-size: 15px; line-height: 31px; color: rgb(102, 102, 102);\">\r\n		<li style=\"box-sizing: border-box;\">\r\n			- เจ้าของโครงการ, นักพัฒนาอสังหาฯริมทรัพย์</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- นายหน้าอสังหาริมทรัพย์</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- ฝ่ายขาย, ฝ่ายการตลาด, และเซลล์โครงการใหม่</li>\r\n		<li style=\"box-sizing: border-box;\">\r\n			- นักลงทุนในธุรกิจอสังหาริมทรัพย์</li>\r\n	</ul>\r\n</div>\r\n<p>\r\n	&nbsp;</p>', 3, 'Test 3', 'Test 3', 'Test 3', 'Embed Youtube', 'https://www.youtube.com/embed/tBFY0r1xN7c', 'https://www.youtube.com/embed/tBFY0r1xN7c', 'https://www.youtube.com/embed/tBFY0r1xN7c', '', '', '', '03:00', 'Yes', '2020-10-07 03:33:20', '::1', '2020-10-07 05:47:09', '::1');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_study_online_banner`
--

CREATE TABLE `lv_study_online_banner` (
  `study_online_banner_id` int(11) NOT NULL,
  `study_online_banner_image_th` varchar(255) NOT NULL,
  `study_online_banner_image_en` varchar(255) NOT NULL,
  `study_online_banner_image_ch` varchar(255) NOT NULL,
  `study_online_banner_datetime_update` datetime NOT NULL,
  `study_online_banner_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `lv_study_online_banner`
--

INSERT INTO `lv_study_online_banner` (`study_online_banner_id`, `study_online_banner_image_th`, `study_online_banner_image_en`, `study_online_banner_image_ch`, `study_online_banner_datetime_update`, `study_online_banner_ip_update`) VALUES
(1, 'img-learn-online.jpg', 'img_study_1.png', 'img_study_2.png', '2020-10-01 04:11:44', '::1');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `lv_top_text_menu`
--

CREATE TABLE `lv_top_text_menu` (
  `top_text_menu_id` int(11) NOT NULL,
  `top_text_menu_name_th` text COLLATE utf8_unicode_ci NOT NULL,
  `top_text_menu_name_en` text COLLATE utf8_unicode_ci NOT NULL,
  `top_text_menu_name_ch` text COLLATE utf8_unicode_ci NOT NULL,
  `top_text_menu_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `lv_top_text_menu`
--

INSERT INTO `lv_top_text_menu` (`top_text_menu_id`, `top_text_menu_name_th`, `top_text_menu_name_en`, `top_text_menu_name_ch`, `top_text_menu_datetime_update`) VALUES
(1, 'ใช้โค้ด FIRST10 เพื่อส่วนลด 10% สำหรับการสั่งซื้อครั้งแรก', 'ใช้โค้ด FIRST10 เพื่อส่วนลด 10% สำหรับการสั่งซื้อครั้งแรก', 'ใช้โค้ด FIRST10 เพื่อส่วนลด 10% สำหรับการสั่งซื้อครั้งแรก', '2022-05-11 08:31:08');

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

--
-- Indexes for dumped tables
--

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
-- Indexes for table `lv_about_us`
--
ALTER TABLE `lv_about_us`
  ADD PRIMARY KEY (`about_us_id`);

--
-- Indexes for table `lv_agent`
--
ALTER TABLE `lv_agent`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `lv_agent_backup_2020.10.09`
--
ALTER TABLE `lv_agent_backup_2020.10.09`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `lv_agent_banner`
--
ALTER TABLE `lv_agent_banner`
  ADD PRIMARY KEY (`agent_banner_id`);

--
-- Indexes for table `lv_agent_data_register`
--
ALTER TABLE `lv_agent_data_register`
  ADD PRIMARY KEY (`agent_data_register_id`);

--
-- Indexes for table `lv_agent_product`
--
ALTER TABLE `lv_agent_product`
  ADD PRIMARY KEY (`agent_product_id`);

--
-- Indexes for table `lv_agent_shipping_address`
--
ALTER TABLE `lv_agent_shipping_address`
  ADD PRIMARY KEY (`agent_shipping_address_id`);

--
-- Indexes for table `lv_banner_slide`
--
ALTER TABLE `lv_banner_slide`
  ADD PRIMARY KEY (`banner_slide_id`);

--
-- Indexes for table `lv_coach`
--
ALTER TABLE `lv_coach`
  ADD PRIMARY KEY (`coach_id`);

--
-- Indexes for table `lv_contact_us`
--
ALTER TABLE `lv_contact_us`
  ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `lv_country`
--
ALTER TABLE `lv_country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `lv_favourite`
--
ALTER TABLE `lv_favourite`
  ADD PRIMARY KEY (`favourite_id`);

--
-- Indexes for table `lv_first_fee`
--
ALTER TABLE `lv_first_fee`
  ADD PRIMARY KEY (`first_fee_id`);

--
-- Indexes for table `lv_logo`
--
ALTER TABLE `lv_logo`
  ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `lv_message_top`
--
ALTER TABLE `lv_message_top`
  ADD PRIMARY KEY (`message_top_id`);

--
-- Indexes for table `lv_news`
--
ALTER TABLE `lv_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `lv_newsletter`
--
ALTER TABLE `lv_newsletter`
  ADD PRIMARY KEY (`newsletter_id`);

--
-- Indexes for table `lv_news_gallery`
--
ALTER TABLE `lv_news_gallery`
  ADD PRIMARY KEY (`news_gallery_id`);

--
-- Indexes for table `lv_order`
--
ALTER TABLE `lv_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `lv_order_detail`
--
ALTER TABLE `lv_order_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `lv_payment`
--
ALTER TABLE `lv_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `lv_point`
--
ALTER TABLE `lv_point`
  ADD PRIMARY KEY (`point_id`);

--
-- Indexes for table `lv_product`
--
ALTER TABLE `lv_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `lv_product_gallery`
--
ALTER TABLE `lv_product_gallery`
  ADD PRIMARY KEY (`product_gallery_id`);

--
-- Indexes for table `lv_promocode`
--
ALTER TABLE `lv_promocode`
  ADD PRIMARY KEY (`promocode_id`);

--
-- Indexes for table `lv_promotion`
--
ALTER TABLE `lv_promotion`
  ADD PRIMARY KEY (`promotion_id`);

--
-- Indexes for table `lv_rate_agent`
--
ALTER TABLE `lv_rate_agent`
  ADD PRIMARY KEY (`rate_agent_id`);

--
-- Indexes for table `lv_review`
--
ALTER TABLE `lv_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `lv_shipping_information`
--
ALTER TABLE `lv_shipping_information`
  ADD PRIMARY KEY (`shipping_information_id`);

--
-- Indexes for table `lv_social_network`
--
ALTER TABLE `lv_social_network`
  ADD PRIMARY KEY (`social_network_id`);

--
-- Indexes for table `lv_study_online`
--
ALTER TABLE `lv_study_online`
  ADD PRIMARY KEY (`study_online_id`);

--
-- Indexes for table `lv_study_online_banner`
--
ALTER TABLE `lv_study_online_banner`
  ADD PRIMARY KEY (`study_online_banner_id`);

--
-- Indexes for table `lv_top_text_menu`
--
ALTER TABLE `lv_top_text_menu`
  ADD PRIMARY KEY (`top_text_menu_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

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
-- AUTO_INCREMENT for dumped tables
--

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
-- AUTO_INCREMENT for table `lv_about_us`
--
ALTER TABLE `lv_about_us`
  MODIFY `about_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lv_agent`
--
ALTER TABLE `lv_agent`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lv_agent_backup_2020.10.09`
--
ALTER TABLE `lv_agent_backup_2020.10.09`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lv_agent_banner`
--
ALTER TABLE `lv_agent_banner`
  MODIFY `agent_banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lv_agent_data_register`
--
ALTER TABLE `lv_agent_data_register`
  MODIFY `agent_data_register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lv_agent_product`
--
ALTER TABLE `lv_agent_product`
  MODIFY `agent_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lv_agent_shipping_address`
--
ALTER TABLE `lv_agent_shipping_address`
  MODIFY `agent_shipping_address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `lv_banner_slide`
--
ALTER TABLE `lv_banner_slide`
  MODIFY `banner_slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lv_coach`
--
ALTER TABLE `lv_coach`
  MODIFY `coach_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lv_contact_us`
--
ALTER TABLE `lv_contact_us`
  MODIFY `contact_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lv_country`
--
ALTER TABLE `lv_country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `lv_favourite`
--
ALTER TABLE `lv_favourite`
  MODIFY `favourite_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lv_first_fee`
--
ALTER TABLE `lv_first_fee`
  MODIFY `first_fee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lv_logo`
--
ALTER TABLE `lv_logo`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lv_message_top`
--
ALTER TABLE `lv_message_top`
  MODIFY `message_top_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lv_news`
--
ALTER TABLE `lv_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lv_newsletter`
--
ALTER TABLE `lv_newsletter`
  MODIFY `newsletter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lv_news_gallery`
--
ALTER TABLE `lv_news_gallery`
  MODIFY `news_gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `lv_order`
--
ALTER TABLE `lv_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `lv_order_detail`
--
ALTER TABLE `lv_order_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `lv_payment`
--
ALTER TABLE `lv_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lv_point`
--
ALTER TABLE `lv_point`
  MODIFY `point_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lv_product`
--
ALTER TABLE `lv_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lv_product_gallery`
--
ALTER TABLE `lv_product_gallery`
  MODIFY `product_gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lv_promocode`
--
ALTER TABLE `lv_promocode`
  MODIFY `promocode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lv_promotion`
--
ALTER TABLE `lv_promotion`
  MODIFY `promotion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `lv_rate_agent`
--
ALTER TABLE `lv_rate_agent`
  MODIFY `rate_agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lv_review`
--
ALTER TABLE `lv_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `lv_shipping_information`
--
ALTER TABLE `lv_shipping_information`
  MODIFY `shipping_information_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lv_social_network`
--
ALTER TABLE `lv_social_network`
  MODIFY `social_network_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lv_study_online`
--
ALTER TABLE `lv_study_online`
  MODIFY `study_online_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lv_study_online_banner`
--
ALTER TABLE `lv_study_online_banner`
  MODIFY `study_online_banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lv_top_text_menu`
--
ALTER TABLE `lv_top_text_menu`
  MODIFY `top_text_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
