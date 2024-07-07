-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2024 at 10:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salapa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add`
--

CREATE TABLE `tbl_add` (
  `id` bigint(20) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(1) NOT NULL,
  `del` varchar(1) NOT NULL,
  `dates` varchar(50) NOT NULL,
  `admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_add`
--

INSERT INTO `tbl_add` (`id`, `client_name`, `url`, `type`, `category`, `image`, `status`, `del`, `dates`, `admin`) VALUES
(1, 'Financial Indicators 2077', '2077/078', 'financialindicators', 'NA', '1financial indicaters.pdf', '1', '1', '2021-09-07', 'Nisan Rai'),
(3, 'Annual Report', '2077/078', 'annualreport', 'NA', '3annual report.pdf', '1', '1', '2021-09-07', 'Nisan Rai'),
(4, 'Basel Report - 2077', '2077/078', 'baselreport', 'NA', '4basel report.pdf', '1', '1', '2021-09-07', 'Nisan Rai'),
(5, 'Base Rate & Spread Rate - 2077', '2077/078', 'baserateandspreadrate', 'NA', '5base rate.pdf', '1', '1', '2021-09-07', 'Nisan Rai'),
(6, 'QUARTERLY FINANCIAL HIGHLIGHT PUBLISHED ON 2080-07-23', '2080/081', 'quarterlyreport', 'NA', '6Quarterly Financial Highlight.pdf', '1', '1', '2023-11-09', 'M IT Department'),
(7, 'NFRS BASED QUARTERLY FINANCIAL HIGHLIGHT PUBLISHED ON 2080-07-23', '2080/081', 'quarterlyreport', 'NA', '7NFRS BASED QUERTERLY REPORT.pdf', '1', '1', '2023-11-09', 'M IT Department'),
(8, 'NFRS BASED QUARTERLY FINANCIAL HIGHLIGHT PUBLISHED ON 2080-10-17', '2080/081', 'quarterlyreport', 'NA', '8Financial-position.pdf', '1', '1', '2024-01-31', 'IT Department'),
(9, 'QUARTERLY FINANCIAL HIGHLIGHT PUBLISHED ON 2080-10-17', '2080/081', 'quarterlyreport', 'NA', '9Financial-highlight.pdf', '1', '1', '2024-01-31', 'IT Department'),
(10, 'NFRS BASED QUARTERLY FINANCIAL HIGHLIGHT PUBLISHED ON 2081-01-14', '2080/081', 'quarterlyreport', 'NA', '10NFRS BASED QUARTERLY FINANCIAL HIGHLIGHT CHAITRA-2080.pdf', '1', '1', '2024-04-26', 'IT Department'),
(11, 'QUARTERLY FINANCIAL HIGHLIGHT PUBLISHED ON 2081-01-14', '2080/081', 'quarterlyreport', 'NA', '11QUARTERLY FINANCIAL HIGHLIGHT CHAITRA-2080.pdf', '1', '1', '2024-04-26', 'IT Department');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(20) NOT NULL,
  `name` varchar(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `work` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `status` varchar(5) NOT NULL,
  `authority` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `address`, `gender`, `image`, `work`, `position`, `contact`, `username`, `password`, `status`, `authority`) VALUES
(19, 'Nisan Rai', 'Khotang', 'Male', 'nisan - Copy.jpg', 'Salapa Bikas Bank Ltd. ', 'ITO', '9843358296', 'mail.nisanrai@gmail.com', 'bc04fc52de35276828b8a94d2d9877cd', '1', 'yes'),
(22, 'Nisan Rai', 'Khotang', 'Male', '', 'Salapa Bikas Bank Ltd.', 'ITO', '9843358296', 'ict.nisan1@gmail.com', 'bc04fc52de35276828b8a94d2d9877cd', '1', 'no'),
(23, 'IT Department', 'Diktel, Khotang', 'Male', '', 'Salapa Bikas Bank Limited', 'ITO', '9843358296', 'it@salapabikasbank.com.np', '90fcd950ac35778476549bafeb7d754b', '1', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` bigint(20) NOT NULL,
  `metakeyword` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `metadata` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `metadescription` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mtitle` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `small_image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `decrase_size` int(10) NOT NULL,
  `alignment` varchar(200) NOT NULL,
  `files` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `viewer` bigint(20) NOT NULL,
  `status` varchar(1) NOT NULL,
  `del` varchar(1) NOT NULL,
  `display_order` varchar(1) NOT NULL,
  `sources` varchar(250) NOT NULL,
  `dates` varchar(200) NOT NULL,
  `admin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `metakeyword`, `metadata`, `metadescription`, `category`, `mtitle`, `title`, `content`, `image`, `small_image`, `decrase_size`, `alignment`, `files`, `viewer`, `status`, `del`, `display_order`, `sources`, `dates`, `admin`) VALUES
(1, 'Counselling, Objectives of Counseling, Aim of Counseling, meaning of counselling', 'Counselling, Objectives of Counseling, Aim of Counseling, meaning of counselling', 'Counselling in Nepal, Counseling in Nepal by Nisan Rai', 'blogging', 'Meaning and purpose of counselling', 'Mr. Nisan Rai', '<p style=\"margin-left: 40px;\">Counselling is a process that usually has a beginning, middle, and end. There are certain things a counsellor should do in each part. This process can take place over just a few sessions or over a longer period. Effective counselling does not necessarily take a long time. In fact, research shows that many times, clients feel they have received the help they need in just three or four meetings.</p>\r\n\r\n<p style=\"margin-left: 40px;\">Sometimes one meeting is all someone needs. The chance to explain a problem may make it clearer or talking it out may relieve anxiety and other problem feelings.</p>\r\n\r\n<p style=\"margin-left: 40px;\">Whether the process is short or longer, counsellors must have the necessary skills to truly help clients.</p>\r\n\r\n<p style=\"margin-left: 40px;\">The beginning:&nbsp;The counsellor starts to build a trusting relationship with the client and finds out important information about the client&rsquo;s problem.</p>\r\n\r\n<p style=\"margin-left: 40px;\">The middle:&nbsp;the counsellor helps the client set goals &mdash; make decisions about what the client wants. Once goals are decided, the counsellor and client develop ideas about how the client can reach those goals. During this period, the client will try certain things. Then the counsellor and client discuss what happened and whether the method is working.</p>\r\n\r\n<p style=\"margin-left: 40px;\">The end:&nbsp;When the client feels she has achieved what she wanted, the client and counsellor prepare for the end of counselling.</p>\r\n\r\n<p style=\"margin-left: 40px;\"><strong>Aims and Objectives of Counseling</strong><br />\r\nCounseling aims at helping the clients understand and accept themselves &ldquo;as they are&rdquo;, And counseling is to help the student to help himself.<br />\r\nThe main objective of counseling is to bring about a voluntary change in the client. For this purpose the counselor provides facilities to help achieve the desird change or make the suitable choice.<br />\r\nAccording to Dunsmoor and miller, the purpose of student counseling are :-</p>\r\n\r\n<p style=\"margin-left: 80px;\"><br />\r\n1. To give the student information on matters important to success.<br />\r\n2. To get information about student which will be of help in solving his problems.<br />\r\n3. To establish a feeling of mutual understanding between student and teacher.<br />\r\n4. To help the student work out a plan for solving his difficulties.<br />\r\n5. To help the student know himself better-his interests, abilities, aptitudes, and oppurtunities.<br />\r\n6. To encourage and develop special abilities and right attitudes.<br />\r\n7. To inspire successful endeavor toward attainment.<br />\r\n8. To assist the student in planning for educational and vocational choices.</p>\r\n', '', '', 0, '', '', 0, '1', '1', '1', '', '2016-01-20', '7');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_captcha`
--

CREATE TABLE `tbl_captcha` (
  `id` int(11) NOT NULL,
  `captcha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_captcha`
--

INSERT INTO `tbl_captcha` (`id`, `captcha`) VALUES
(1, 'Z8xF3Vs'),
(2, 'V9yC3Rq'),
(3, 'Q8p3YBu'),
(4, 'L2cS4Nw'),
(5, 'N5iS8Tk'),
(6, 'K2tW3Mz'),
(7, 'NiSaNRa'),
(8, 'R2Ai4Nz');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` bigint(20) NOT NULL,
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) NOT NULL,
  `position` bigint(20) NOT NULL,
  `status` varchar(1) NOT NULL,
  `del` varchar(1) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `dates` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class`
--

CREATE TABLE `tbl_class` (
  `id` bigint(20) NOT NULL,
  `class` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_class`
--

INSERT INTO `tbl_class` (`id`, `class`, `status`) VALUES
(1, 'Class 10', 1),
(2, 'Class 9', 1),
(4, 'Class 8', 1),
(5, 'Class 7', 1),
(6, 'Class 6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `id` bigint(20) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `file` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `dates` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_companyprofile`
--

CREATE TABLE `tbl_companyprofile` (
  `id` bigint(20) NOT NULL,
  `companyName` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `companyAddress` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `websiteTitle` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `companyURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `companyLogo` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phoneNumber` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobileNumber` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email1` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email2` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email3` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `companyMap` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `facebookPage` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `twitterFollow` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `googlePlus` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `youtubeVideo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `skyep` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `metaKeyword` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `metaData` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `metaContent` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `copyRight` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `poweredBy` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_companyprofile`
--

INSERT INTO `tbl_companyprofile` (`id`, `companyName`, `companyAddress`, `websiteTitle`, `companyURL`, `companyLogo`, `phoneNumber`, `mobileNumber`, `email1`, `email2`, `email3`, `companyMap`, `facebookPage`, `twitterFollow`, `googlePlus`, `youtubeVideo`, `skyep`, `metaKeyword`, `metaData`, `metaContent`, `copyRight`, `poweredBy`) VALUES
(1, 'Salapa Bikas Bank Ltd.', 'Diktel, Khotang', 'SALAPA BIKAS BANK Ltd.', 'www.salapabikasbank.com.np', '22-Dec-2020-10-12-36logo-main.png', '036420457 / 036420638 / 036420639', '9843358296', 'info@salapabikasbank.com.np', '', 'info@salapabikasbank.com.np', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3548.19682170052!2d86.79013991505134!3d27.212969682999173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e92c39fbc7ea75%3A0xae824802cc36a96a!2z4KS44KS-4KSy4KWN4KSq4KS-IOCkteCkv-CkleCkvuCkuCDgpKzgpYjgpILgpJU!5e0!3m2!1sne!2snp!4v1616575563662!5m2!1sne!2snp\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'https://www.facebook.com/salapadevelopmentbank', '', '', '', '', '', '', '', '© 2023 SALAPA BIKAS BANK Ltd.', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content`
--

CREATE TABLE `tbl_content` (
  `id` bigint(20) NOT NULL,
  `metakeyword` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `metadata` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `metadescription` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mtitle` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `display` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `small_image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `decrase_size` int(10) NOT NULL,
  `alignment` varchar(200) NOT NULL,
  `files` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `viewer` bigint(20) NOT NULL,
  `status` varchar(1) NOT NULL,
  `del` varchar(1) NOT NULL,
  `display_order` varchar(1) NOT NULL,
  `sources` varchar(250) NOT NULL,
  `dates` varchar(200) NOT NULL,
  `admin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_content`
--

INSERT INTO `tbl_content` (`id`, `metakeyword`, `metadata`, `metadescription`, `category`, `mtitle`, `title`, `display`, `content`, `image`, `small_image`, `decrase_size`, `alignment`, `files`, `viewer`, `status`, `del`, `display_order`, `sources`, `dates`, `admin`) VALUES
(1, '', '', '', 'loaninterest', 'BUSINESS LOAN', '5', '<p>BUSINESS OD</p>\r\n', '<p>BUSINESS OD</p>\r\n', '01businessod.png', 'small_01businessod.png', 35, 'left', '', 0, '1', '1', '1', '', '2023-10-11', 'M Nisan Rai'),
(2, '', '', '', 'loaninterest', 'PERSONAL LOAN', '5', '<h3><small>PERSONAL LOAN</small></h3>\r\n', '<h3><small>PERSONAL LOAN</small></h3>\r\n', '12PERSONAL-LOAN.png', 'small_12PERSONAL-LOAN.png', 35, 'left', '', 0, '1', '1', '1', '', '2023-10-11', 'M Nisan Rai'),
(3, '', '', '', 'loaninterest', 'H/P AUTO LOAN', '5', '<h3><small>H/P AUTO LOAN</small></h3>\r\n', '<h3><small>H/P AUTO LOAN</small></h3>\r\n', '13HP-AUTO-LOAN.png', 'small_13HP-AUTO-LOAN.png', 35, 'left', '', 0, '1', '1', '1', '', '2023-10-11', 'M Nisan Rai'),
(4, '', '', '', 'loaninterest', 'H/P HOME LOAN', '5', '<h3><small>H/P HOME LOAN</small></h3>\r\n', '<p><small>H/P HOME LOAN</small></p>\r\n', '14HP-HOME-LOAN.png', 'small_14HP-HOME-LOAN.png', 35, 'left', '', 0, '1', '1', '1', '', '2023-10-11', 'M Nisan Rai'),
(5, '', '', '', 'loaninterest', 'AGRICULTURE LOAN', '4.5', '<h3><small>AGRICULTURE LOAN</small></h3>\r\n', '<h3><small>AGRICULTURE LOAN</small></h3>\r\n', '15AGRICULTURE-LOAN.png', 'small_15AGRICULTURE-LOAN.png', 35, 'left', '', 0, '1', '1', '1', '', '2023-10-11', 'M Nisan Rai'),
(6, '', '', '', 'loaninterest', 'DEPRIVED SECOTR', '5', '<h3><small>DEPRIVED SECOTR</small></h3>\r\n', '<h3><small>DEPRIVED SECOTR</small></h3>\r\n', '030deprivedsector.png', 'small_030deprivedsector.png', 35, 'left', '', 0, '1', '1', '1', '', '2020-12-22', 'Nisan Rai'),
(7, '', '', '', 'loaninterest', 'GOLD LOAN', '5', '<h3><small>GOLD LOAN</small></h3>\r\n', '<h3><small>GOLD LOAN</small></h3>\r\n', '031againstfixeddeposit.png', 'small_031againstfixeddeposit.png', 35, 'left', '', 0, '1', '1', '1', '', '2024-02-15', 'M IT Department'),
(8, '', '', '', 'loaninterest', 'PROFESSIONAL LOAN', '5', '<h3><small>PROFESSIONAL LOAN</small></h3>\r\n', '<h3><small>PROFESSIONAL LOAN</small></h3>\r\n', '18PROFESSINAL-LOAN.png', 'small_18PROFESSINAL-LOAN.png', 35, 'left', '', 0, '1', '1', '1', '', '2023-10-11', 'M Nisan Rai'),
(33, '', '', '', 'activities', 'सालपा विकास बैंकको शाखा हलेसीमा विस्तार', '', '<p>सालपा विकास बैंकको शाखा हलेसीमा विस्तार भएको छ । आज मिति २०७५&nbsp; पुष २५&nbsp;गतेका दिन सालपा विकास बैंकका संचालक समितिका अध्यक्ष&nbsp;श्री टंक राई तथा&nbsp;प्रमुख कार्यकारी अधिकृत श्री इश्वरमान राई&nbsp;&nbsp;&nbsp;द्धारा रिवन काटी समुद्घाटन भएको हो ।</p>\r\n', '<p>सालपा विकास बैंकको शाखा हलेसीमा विस्तार भएको छ । आज मिति २०७५&nbsp; पुष २५&nbsp;गतेका दिन सालपा विकास बैंकका संचालक समितिका अध्यक्ष&nbsp;श्री टंक राई तथा&nbsp;प्रमुख कार्यकारी अधिकृत श्री इश्वरमान राई&nbsp;&nbsp;&nbsp;द्धारा रिवन काटी समुद्घाटन भएको हो ।</p>\r\n', '', '', 35, 'left', '', 0, '1', '1', '1', '', '2023-10-11', 'M Nisan Rai'),
(34, '', '', '', 'activities', 'सालपा विकास बैंकको शाखा ऐसेलुखर्कमा विस्तार', '', '<p>सालपा विकास बैंकको शाखा ऐसेलुखर्कमा विस्तार भएको छ । आज मिति २०७३&nbsp;अषाढ २८&nbsp;गतेका दिन सालपा विकास बैंकका संचालक समितिका अध्यक्ष&nbsp;श्री टंक राई तथा&nbsp;प्रमुख कार्यकारी अधिकृत श्री इश्वरमान राई&nbsp;&nbsp;&nbsp;द्धारा रिवन काटी समुद्घाटन भएको हो ।</p>\r\n', '<p>सालपा विकास बैंकको शाखा ऐसेलुखर्कमा विस्तार भएको छ । आज मिति २०७३&nbsp;अषाढ २८&nbsp;गतेका दिन सालपा विकास बैंकका संचालक समितिका अध्यक्ष&nbsp;श्री टंक राई तथा&nbsp;प्रमुख कार्यकारी अधिकृत श्री इश्वरमान राई&nbsp;&nbsp;&nbsp;द्धारा रिवन काटी समुद्घाटन भएको हो ।</p>\r\n', '', '', 35, 'left', '', 0, '1', '1', '1', '', '2023-10-11', 'M Nisan Rai'),
(35, '', '', '', 'activities', 'सालपा विकास बैंकको शाखा सिम्पानीमा विस्तार', '', '<p>सालपा विकास बैंकको शाखा सिम्पानीमा विस्तार भएको छ । आज मिति २०७५ भाद्र २१ गतेका दिन सालपा विकास बैंकका संचालक समितिका अध्यक्ष&nbsp;श्री टंक राई तथा&nbsp;प्रमुख कार्यकारी अधिकृत श्री इश्वरमान राई&nbsp;&nbsp;&nbsp;द्धारा रिवन काटी समुद्घाटन भएको हो ।</p>\r\n', '<p>सालपा विकास बैंकको शाखा सिम्पानीमा विस्तार भएको छ । आज मिति २०७५ भाद्र २१ गतेका दिन सालपा विकास बैंकका संचालक समितिका अध्यक्ष&nbsp;श्री टंक राई तथा&nbsp;प्रमुख कार्यकारी अधिकृत श्री इश्वरमान राई&nbsp;&nbsp;&nbsp;द्धारा रिवन काटी समुद्घाटन भएको हो ।</p>\r\n', '', '', 35, 'left', '', 0, '1', '1', '1', '', '2023-10-11', 'M Nisan Rai'),
(36, 'Salapa Bikas Bank Ltd., Salapa Bank, Salapa, Bank, Bank in Nepal, Bank of Nepal, Development Bank, Development Bank in Nepal', 'Salapa Bikas Bank Ltd., Salapa Bank, Salapa, Bank, Bank in Nepal, Bank of Nepal, Development Bank, Development Bank in Nepal', 'SalapaBikas Bank was incorporated in 2069/04/01 under the Bank and Financial Institutions Act, 2063 (Amended 2073).The bank was licensed as a regional bank covering geographical area of Khotang district.The name of the bank has been derived from SalapaPokhari, the famous lake for its sacred and spiritual value among the local communities. The promoters of the bank are from different walks of life.', 'introduction', 'Introduction', '', '<p>SalapaBikas Bank was incorporated in 2069/04/01 under the Bank and Financial Institutions Act, 2063 (Amended 2073).The bank was licensed as a regional bank covering geographical area of Khotang district.The name of the bank has been derived from SalapaPokhari, the famous lake for its sacred and spiritual value among the local communities. The promoters of the bank are from different walks of life.</p>\r\n', '<p>SalapaBikas Bank was incorporated in 2069/04/01 under the Bank and Financial Institutions Act, 2063 (Amended 2073).The bank was licensed as a regional bank covering geographical area of Khotang district.The name of the bank has been derived from SalapaPokhari, the famous lake for its sacred and spiritual value among the local communities. The promoters of the bank are from different walks of life.</p>\r\n', '', '', 35, 'left', '', 0, '1', '1', '1', '', '2021-02-25', 'M Nisan Rai'),
(37, '', '', '', 'vision', 'Vision', '', '<p>To contribute in building prosperous nation via prosperous local communities by providing financial intermediary.</p>\r\n', '<p>To contribute in building prosperous nation via prosperous local communities by providing financial intermediary.</p>\r\n', '', '', 35, 'left', '', 0, '1', '1', '1', '', '2021-02-25', 'M Nisan Rai'),
(38, '', '', '', 'mission', 'Mission', '', '<p>To provide effective financial intermediary to the clients through modern banking and micro finance schemes; to instill entrepreneurship skills among the target people by integrating local and indigenous resources, culture and technologies.</p>\r\n', '<p>To provide effective financial intermediary to the clients through modern banking and micro finance schemes; to instill entrepreneurship skills among the target people by integrating local and indigenous resources, culture and technologies.</p>\r\n', '', '', 35, 'left', '', 0, '1', '1', '1', '', '2021-02-25', 'Nisan Rai'),
(39, '', '', '', 'goal', 'Goal', '', '<p>To enhance financial literacy, develop saving culture and invest the savings and funds in productive sectors. Playing keyrole preserve and promote local indigenous technologies and resources by addressing the specialties in the geographical areas. To explore new and possible sectors and prospects for employment and income generation and assist to invest to the areas explored. To attempt encourage people in generating self-employment in order to uplifting the standard of living. To attempt making human resource more resourceful and responsible for the organization sustainability.</p>\r\n', '<p>To enhance financial literacy, develop saving culture and invest the savings and funds in productive sectors. Playing keyrole preserve and promote local indigenous technologies and resources by addressing the specialties in the geographical areas. To explore new and possible sectors and prospects for employment and income generation and assist to invest to the areas explored. To attempt encourage people in generating self-employment in order to uplifting the standard of living. To attempt making human resource more resourceful and responsible for the organization sustainability.</p>\r\n', '', '', 35, 'left', '', 0, '1', '1', '1', '', '2021-02-25', 'Nisan Rai'),
(40, '', '', '', 'objective', 'Objectives', '', '<ol>\r\n	<li>To attract the potential clients through effective returns and prompt service delivery.</li>\r\n	<li>To assess the credit profiles professionally for the maximumfinancial security.</li>\r\n	<li>To organize regular trainings and development programs for enhancing the capacity and performance the employees.</li>\r\n	<li>To fulfill corporate social responsibility by conducting different programs in coordination with local authorizes.</li>\r\n	<li>To maintain equilibrium among the stakeholders of the bank.</li>\r\n	<li>To abide by the NRB guidelines, directives and circulars.</li>\r\n</ol>\r\n', '<ol>\r\n	<li>To attract the potential clients through effective returns and prompt service delivery.</li>\r\n	<li>To assess the credit profiles professionally for the maximumfinancial security.</li>\r\n	<li>To organize regular trainings and development programs for enhancing the capacity and performance the employees.</li>\r\n	<li>To fulfill corporate social responsibility by conducting different programs in coordination with local authorizes.</li>\r\n	<li>To maintain equilibrium among the stakeholders of the bank.</li>\r\n	<li>To abide by the NRB guidelines, directives and circulars.</li>\r\n</ol>\r\n', '', '', 35, 'left', '', 0, '1', '1', '1', '', '2021-02-25', 'Nisan Rai'),
(41, '', '', '', 'bankinghours', 'BANKING HOURS', '', '<p style=\"text-align:center\"><span style=\"color:#000000\"><strong>General banking Hour&nbsp;</strong></span></p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"line-height:50px; width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\">&nbsp;</td>\r\n			<td style=\"text-align:center\"><strong>From</strong></td>\r\n			<td style=\"text-align:center\"><strong>To</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Sunday to Thursday</td>\r\n			<td style=\"text-align:center\">10:00 AM</td>\r\n			<td style=\"text-align:center\">5:00 PM</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Friday</td>\r\n			<td style=\"text-align:center\">10:00 AM</td>\r\n			<td style=\"text-align:center\">3:00 PM</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '<p style=\"text-align:center\"><span style=\"color:#000000\"><strong>General banking Hour&nbsp;</strong></span></p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"line-height:50px; width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\">&nbsp;</td>\r\n			<td style=\"text-align:center\"><strong>From</strong></td>\r\n			<td style=\"text-align:center\"><strong>To</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Sunday to Thursday</td>\r\n			<td style=\"text-align:center\">10:00 AM</td>\r\n			<td style=\"text-align:center\">5:00 PM</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Friday</td>\r\n			<td style=\"text-align:center\">10:00 AM</td>\r\n			<td style=\"text-align:center\">3:00 PM</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '', '', 35, 'left', '', 0, '1', '1', '', '', '2024-01-31', 'M IT Department'),
(42, '', '', '', 'career', 'Notice for Internship', '', '<p>Salapa Bikas Bank Limited announced for internship to all interested candidate who loves to focus career in banking sector. Interested candidate could apply through the mail salapabikashbank@gmail.com.&nbsp;</p>\r\n', '<p>Salapa Bikas Bank Limited announced for internship to all interested candidate who loves to focus career in banking sector. Interested candidate could apply through the mail salapabikashbank@gmail.com.&nbsp;</p>\r\n', '', '', 35, 'left', '042internship.pdf', 0, '1', '1', '1', '2077/078', '2021-07-27', 'M Nisan Rai'),
(43, '', '', '', 'savingdeposit', 'Life Saving', '', '<p>Saving today for bright future.</p>\r\n', '<h4><strong>Features:</strong></h4>\r\n\r\n<ul>\r\n	<li>Free Cheque Book</li>\r\n	<li>Free Mobile Banking for the First Year</li>\r\n	<li>Unlimited Deposit/Withdrawals</li>\r\n</ul>\r\n\r\n<h4><strong>Rates &amp; Fees:</strong></h4>\r\n\r\n<ul>\r\n	<li><strong>Interest Rate Calculation:</strong> Daily basis</li>\r\n	<li><strong>Interest Rate Posting:</strong> Quarterly basis</li>\r\n</ul>\r\n', '043lifesaving.jpg', 'small_043lifesaving.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2023-12-12', 'M IT Department'),
(44, '', '', '', 'savingdeposit', 'Salapa Special Saving', '', '<p>Save today for special purpose.&nbsp;</p>\r\n', '<h4><strong>Features:</strong></h4>\r\n\r\n<ul>\r\n	<li>Free Cheque Book</li>\r\n	<li>Free Mobile Banking for the First Year</li>\r\n	<li>Unlimited Deposit/Withdrawals</li>\r\n</ul>\r\n\r\n<h4><strong>Rates &amp; Fees:</strong></h4>\r\n\r\n<ul>\r\n	<li><strong>Interest Rate Calculation:</strong> Daily basis</li>\r\n	<li><strong>Interest Rate Posting:</strong> Quarterly basis</li>\r\n</ul>\r\n', '044special.jpg', 'small_044special.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2023-12-12', 'M IT Department'),
(45, '', '', '', 'savingdeposit', 'Remit Saving', '', '<p>Saving a little can be a lot of work</p>\r\n', '<h4><strong>Features:</strong></h4>\r\n\r\n<ul>\r\n	<li>Free Cheque Book</li>\r\n	<li>Free Mobile Banking for the First Year</li>\r\n	<li>Unlimited Deposit/Withdrawals</li>\r\n</ul>\r\n\r\n<h4><strong>Rates &amp; Fees:</strong></h4>\r\n\r\n<ul>\r\n	<li><strong>Interest Rate Calculation:</strong> Daily basis</li>\r\n	<li><strong>Interest Rate Posting:</strong> Quarterly basis</li>\r\n</ul>\r\n', '045remitsaving.jpg', 'small_045remitsaving.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2023-12-12', 'M IT Department'),
(46, '', '', '', 'savingdeposit', 'Nari Saving', '', '<p>Save yourself to be able</p>\r\n', '<h4><strong>Features:</strong></h4>\r\n\r\n<ul>\r\n	<li>Free Cheque Book</li>\r\n	<li>Free Mobile Banking for the First Year</li>\r\n	<li>Unlimited Deposit/Withdrawals</li>\r\n</ul>\r\n\r\n<h4><strong>Rates &amp; Fees:</strong></h4>\r\n\r\n<ul>\r\n	<li><strong>Interest Rate Calculation:</strong> Daily basis</li>\r\n	<li><strong>Interest Rate Posting:</strong> Quarterly basis</li>\r\n</ul>\r\n', '046naribachat.jpg', 'small_046naribachat.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2023-12-12', 'M IT Department'),
(47, '', '', '', 'savingdeposit', 'Khutruke Saving', '', '<p>Saving a little can be a lot of work</p>\r\n', '<h4><strong>Features:</strong></h4>\r\n\r\n<ul>\r\n	<li>Free Cheque Book</li>\r\n	<li>Free Mobile Banking for the First Year</li>\r\n	<li>Unlimited Deposit/Withdrawals</li>\r\n</ul>\r\n\r\n<h4><strong>Rates &amp; Fees:</strong></h4>\r\n\r\n<ul>\r\n	<li><strong>Interest Rate Calculation:</strong> Daily basis</li>\r\n	<li><strong>Interest Rate Posting:</strong> Quarterly basis</li>\r\n</ul>\r\n', '047khutrukebachat.jpg', 'small_047khutrukebachat.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2023-12-12', 'M IT Department'),
(48, '', '', '', 'savingdeposit', 'Higher Education Saving', '', '<p>Save for heigher education</p>\r\n', '<h4><strong>Features:</strong></h4>\r\n\r\n<ul>\r\n	<li>Free Cheque Book</li>\r\n	<li>Free Mobile Banking for the First Year</li>\r\n	<li>Unlimited Deposit/Withdrawals</li>\r\n</ul>\r\n\r\n<h4><strong>Rates &amp; Fees:</strong></h4>\r\n\r\n<ul>\r\n	<li><strong>Interest Rate Calculation:</strong> Daily basis</li>\r\n	<li><strong>Interest Rate Posting:</strong> Quarterly basis</li>\r\n</ul>\r\n', '048highereducation.jpg', 'small_048highereducation.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2023-12-12', 'M IT Department'),
(49, '', '', '', 'savingdeposit', 'Normal Saving', '', '<p>Save to make life easier</p>\r\n', '<h4><strong>Features:</strong></h4>\r\n\r\n<ul>\r\n	<li>Free Cheque Book</li>\r\n	<li>Free Mobile Banking for the First Year</li>\r\n	<li>Unlimited Deposit/Withdrawals</li>\r\n</ul>\r\n\r\n<h4><strong>Rates &amp; Fees:</strong></h4>\r\n\r\n<ul>\r\n	<li><strong>Interest Rate Calculation:</strong> Daily basis</li>\r\n	<li><strong>Interest Rate Posting:</strong> Quarterly basis</li>\r\n</ul>\r\n', '049normalsaving.jpg', 'small_049normalsaving.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2023-12-12', 'M IT Department'),
(50, '', '', '', 'savingdeposit', 'Jestha Nagarik Saving', '', '<p>Save to make life easier</p>\r\n', '<h4><strong>Features:</strong></h4>\r\n\r\n<ul>\r\n	<li>Free Cheque Book</li>\r\n	<li>Free Mobile Banking for the First Year</li>\r\n	<li>Unlimited Deposit/Withdrawals</li>\r\n</ul>\r\n\r\n<h4><strong>Rates &amp; Fees:</strong></h4>\r\n\r\n<ul>\r\n	<li><strong>Interest Rate Calculation:</strong> Daily basis</li>\r\n	<li><strong>Interest Rate Posting:</strong> Quarterly basis</li>\r\n</ul>\r\n', '050jesthanagarij.jpg', 'small_050jesthanagarij.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2023-12-12', 'M IT Department'),
(51, '', '', '', 'savingdeposit', 'Student Saving', '', '<p>Save for forther education</p>\r\n', '<h4><strong>Features:</strong></h4>\r\n\r\n<ul>\r\n	<li>Free Cheque Book</li>\r\n	<li>Free Mobile Banking for the First Year</li>\r\n	<li>Unlimited Deposit/Withdrawals</li>\r\n</ul>\r\n\r\n<h4><strong>Rates &amp; Fees:</strong></h4>\r\n\r\n<ul>\r\n	<li><strong>Interest Rate Calculation:</strong> Daily basis</li>\r\n	<li><strong>Interest Rate Posting:</strong> Quarterly basis</li>\r\n</ul>\r\n', '051studentsaving.jpg', 'small_051studentsaving.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2023-12-12', 'M IT Department'),
(52, '', '', '', 'savingdeposit', 'Promotor Saving', '', '<p>Promotor Saving</p>\r\n', '<h4><strong>Features:</strong></h4>\r\n\r\n<ul>\r\n	<li>Free Cheque Book</li>\r\n	<li>Free Mobile Banking for the First Year</li>\r\n	<li>Unlimited Deposit/Withdrawals</li>\r\n</ul>\r\n\r\n<h4><strong>Rates &amp; Fees:</strong></h4>\r\n\r\n<ul>\r\n	<li><strong>Interest Rate Calculation:</strong> Daily basis</li>\r\n	<li><strong>Interest Rate Posting:</strong> Quarterly basis</li>\r\n</ul>\r\n', '052promotor.jpg', 'small_052promotor.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2023-12-12', 'M IT Department'),
(53, '', '', '', 'savingdeposit', 'Staff Saving', '', '<p>Staff Saving</p>\r\n', '<h4><strong>Features:</strong></h4>\r\n\r\n<ul>\r\n	<li>Free Cheque Book</li>\r\n	<li>Free Mobile Banking for the First Year</li>\r\n	<li>Unlimited Deposit/Withdrawals</li>\r\n</ul>\r\n\r\n<h4><strong>Rates &amp; Fees:</strong></h4>\r\n\r\n<ul>\r\n	<li><strong>Interest Rate Calculation:</strong> Daily basis</li>\r\n	<li><strong>Interest Rate Posting:</strong> Quarterly basis</li>\r\n</ul>\r\n', '053staffsaving.jpg', 'small_053staffsaving.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2023-12-12', 'M IT Department'),
(54, '', '', '', 'savingdeposit', 'Penson Saving', '', '<p>Penson Saving</p>\r\n', '<h4><strong>Features:</strong></h4>\r\n\r\n<ul>\r\n	<li>Free Cheque Book</li>\r\n	<li>Free Mobile Banking for the First Year</li>\r\n	<li>Unlimited Deposit/Withdrawals</li>\r\n</ul>\r\n\r\n<h4><strong>Rates &amp; Fees:</strong></h4>\r\n\r\n<ul>\r\n	<li><strong>Interest Rate Calculation:</strong> Daily basis</li>\r\n	<li><strong>Interest Rate Posting:</strong> Quarterly basis</li>\r\n</ul>\r\n', '054pensonsaving.jpg', 'small_054pensonsaving.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2023-12-12', 'M IT Department'),
(55, '', '', '', 'savingdeposit', 'Bal Saving', '', '<p>Bal Saving</p>\r\n', '<h4><strong>Features:</strong></h4>\r\n\r\n<ul>\r\n	<li>Free Cheque Book</li>\r\n	<li>Free Mobile Banking for the First Year</li>\r\n	<li>Unlimited Deposit/Withdrawals</li>\r\n</ul>\r\n\r\n<h4><strong>Rates &amp; Fees:</strong></h4>\r\n\r\n<ul>\r\n	<li><strong>Interest Rate Calculation:</strong> Daily basis</li>\r\n	<li><strong>Interest Rate Posting:</strong> Quarterly basis</li>\r\n</ul>\r\n', '055balbachat.jpg', 'small_055balbachat.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2023-12-12', 'M IT Department'),
(56, '', '', '', 'savingdeposit', 'Samajik Suraksha Saving', '', '<p>Samajik Suraksha Saving</p>\r\n', '<h4><strong>Features:</strong></h4>\r\n\r\n<ul>\r\n	<li>Free Cheque Book</li>\r\n	<li>Free Mobile Banking for the First Year</li>\r\n	<li>Unlimited Deposit/Withdrawals</li>\r\n</ul>\r\n\r\n<h4><strong>Rates &amp; Fees:</strong></h4>\r\n\r\n<ul>\r\n	<li><strong>Interest Rate Calculation:</strong> Daily basis</li>\r\n	<li><strong>Interest Rate Posting:</strong> Quarterly basis</li>\r\n</ul>\r\n', '056samajik.jpg', 'small_056samajik.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2023-12-12', 'M IT Department'),
(57, '', '', '', 'branches', 'Diktel Branch', 'Diktel Rupakot Majhuwagadhi, Khotang', '<p>Diktel Branch</p>\r\n', '<p>Diktel Branch</p>\r\n\r\n<p>Diktel Rupakot Majhuwagadhi-1, Khotang</p>\r\n\r\n<p>Contact : 036420638 / 39</p>\r\n\r\n<p>Email : diktel@salapabikasbank.com.np</p>\r\n', '157diktel.jpg', 'small_157diktel.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2024-04-21', 'M IT Department'),
(58, '', ' ', '', 'branches', 'Halesi Branch', 'Halesi Tuwachung, Khotang', '<p>Halesi Branch</p>\r\n', '<p>Halesi Branch</p>\r\n\r\n<p>Halesi Tuwachung - 7, Khotang</p>\r\n\r\n<p>Contact : 036410039</p>\r\n\r\n<p>Email : helesi@salapabikasbank.com.np</p>\r\n', '158halesi.jpg', 'small_158halesi.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2024-04-21', 'M IT Department'),
(59, '', '', '', 'branches', 'Aiselukharka Branch', 'Rawabeshi, Khotang', '<p>Aiselukharka Branch</p>\r\n', '<p>Aiselukharka Branch</p>\r\n\r\n<p>Aiselukharka-3, Khotang</p>\r\n\r\n<p>Contact : 036411102</p>\r\n\r\n<p>Email : aiselukharka@salapabikasbank.com.np</p>\r\n', '159aiselukharka.jpg', 'small_159aiselukharka.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2024-04-21', 'M IT Department'),
(60, '', '', '', 'branches', 'Simpani Branch', 'Khotehang, Khotang', '<p>Simpani Branch</p>\r\n', '<p>Simpani Branch</p>\r\n\r\n<p>Khotehang-8, Khotang</p>\r\n\r\n<p>Contact : 9852849696</p>\r\n\r\n<p>Email : simpani@salapabikasbank.com.np</p>\r\n', '160SIMPANI.jpg', 'small_160SIMPANI.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2024-04-21', 'M IT Department'),
(61, '', '', '', 'branches', 'Chisapani Branch', 'Jantedhunga, Khotang', '<p>Chisapani Branch</p>\r\n', '<p>Chisapani Branch</p>\r\n\r\n<p>Jantedhunga-5, Khotang</p>\r\n\r\n<p>Contact : 9852849498</p>\r\n\r\n<p>Email : chisapani@salapabikasbank.com.np</p>\r\n', '161chisapani.jpg', 'small_161chisapani.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2024-04-21', 'M IT Department'),
(62, '', '', '', 'branches', 'Baksila Branch', 'Kepilasgadhi, Khtoang', '<p>Baksila Branch</p>\r\n', '<p>Baksila Branch</p>\r\n\r\n<p>Kepilasgadhi-4, Khotang</p>\r\n\r\n<p>Contact : 9852877111</p>\r\n\r\n<p>Email : baksila@salapabikasbank.com.np</p>\r\n', '162baksila.jpg', 'small_162baksila.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2024-04-21', 'M IT Department'),
(63, '', '', '', 'microintroduction', 'Microfinance Introduction', '', '<p>The bank has initiated Micro Finance service in the licensed area in order to cater the door to door service to the deprived, socially backward public. The program mobilizes different deposit schemes and provides credit facilities to the targeted people by enhancing their knowledge on financial literacy. For the implementation of the program, the bank staffs explore and select the potential areas and conduct a week-long Pre-Group Training (PGT) to the potential people. The participants of the PGT are educated on the objectives and procedures in the training. Benefits of savings and credits are shared among the participants. Through the PGT, potential participants are gathered and they are shared the meaning and characteristics of the factors of production and their availabilities to them. Besides this they are also educated about the competitive advantages based on the geographical location. They are also taught the importance of cost calculation and its analysis for running small business in the simplest ways. Those who are interested to be engaged in agro-products are provided technical support by the bank staff. This includes sharing about making land ready, blending of different fertilizers, knowledge about the improved seeds, using pesticides and other necessary skills. This program is designed to gain the equitable distribution of wealth as far as possible. The selected members who are eager to change their life economically, socially and culturally after receiving the knowledge and skills in the pre-group training are encouraged to develop their saving habits and utilize credit facilities based on their capacity.</p>\r\n', '<p>The bank has initiated Micro Finance service in the licensed area in order to cater the door to door service to the deprived, socially backward public. The program mobilizes different deposit schemes and provides credit facilities to the targeted people by enhancing their knowledge on financial literacy. For the implementation of the program, the bank staffs explore and select the potential areas and conduct a week-long Pre-Group Training (PGT) to the potential people. The participants of the PGT are educated on the objectives and procedures in the training. Benefits of savings and credits are shared among the participants. Through the PGT, potential participants are gathered and they are shared the meaning and characteristics of the factors of production and their availabilities to them. Besides this they are also educated about the competitive advantages based on the geographical location. They are also taught the importance of cost calculation and its analysis for running small business in the simplest ways. Those who are interested to be engaged in agro-products are provided technical support by the bank staff. This includes sharing about making land ready, blending of different fertilizers, knowledge about the improved seeds, using pesticides and other necessary skills. This program is designed to gain the equitable distribution of wealth as far as possible. The selected members who are eager to change their life economically, socially and culturally after receiving the knowledge and skills in the pre-group training are encouraged to develop their saving habits and utilize credit facilities based on their capacity.</p>\r\n', '', '', 35, 'left', '', 0, '1', '1', '1', '', '2021-04-18', 'Nisan Rai'),
(64, '', '', '', 'microfinanceobjectives', 'Microfinance Objectives', '', '<p>The main objective of the program is to uplift the standard of living of the targeted people.The participants of the PGT are taught minutely about the meaning and the characteristics of the factors of production like land, labor, capital and organization. Based on the practical way, they are also enabled to assess the competitive advantages, cost analysis in the simplest way. Basically the participants are encouraged to involve in the labor intensive activities, the area of their competitive advantage compared to other factors of production. Meaning and importance of organization is specially highlighted to the participants so that they shall be able to utilize the synergetic approach in benefit reaping. For this they are encouraged to put on uniform, to enchante program slogans, take oath of the program. The objective of all these are to translate theiy daily routine in managing clean drinking water, children education, cohesive relation in society, feeding the children nutritious food, sanitation management and so. Organization In addition to this to the economic upliftment of the targeted people, they are encouraged to develop social and cultural aspects of life. to the program also aims to make the targeted people able in socio-cultural aspects of life. The bank has initiated Micro Finance service in the licensed area in order to cater the door to door service to the deprived, socially backward public. With a view to make local people aware, literate and active on banking activities; the Department of Micro Finance has formulated policies and programs to develop entrepreneurship and self employment to the targeted people. The bank staff visits the potential areas and conduct pre-group training (PGT) to share policy and activities of the program. The training is called so because it is organized to educate the program and different schemes of the program to the public in general before the admittance of their membership. A week long PGT has been designated to make the potential members able to understand the ways of transforming life style. Through the PGT th potential participants gathered are shared the meaning and characteristics of the factors of production and their availabilities to them. Besides this the participants are also educated about the competitive advantages based on the geographical location. The participants are made literate in cost calculation and its analysis. They are also taught the importance of cost calculation and its analysis for running small business in the simplest ways. Those who are interested to be engaged in agro-products are provided technical support by the bank staff sharing about making land ready, blending of the different fertilizers, knowledge about the improved seeds, using pesticides and other necessary skills. The program does not only highlight economic aspect of life but instead the program instills cultural, social variables to the potential members through sharing the knowledge about sanitation, children education, nutritious feeding habits and managing clean dirking water. The program focuses on the nurture of the members&acute; we-feeling, collective efforts, self-respect, dignified life through learning and earning simultaneously. All these attempts are aimed to the well-being of the society at large. This program is designed to attempt gaining the equitable distribution of wealth as far as possible. The selected members who are eager to change their life economically, socially and culturally after receiving the knowledge and skills shared in the pre-group training; are encouraged to develop their saving habits and utilizing credit facilities based on their capacity. The importance of micro finance is credit facilities based on group guarantee rather than collateral; members are made more sensitive and responsive to utilize the fund effectively and efficiently.</p>\r\n', '<p>The main objective of the program is to uplift the standard of living of the targeted people.The participants of the PGT are taught minutely about the meaning and the characteristics of the factors of production like land, labor, capital and organization. Based on the practical way, they are also enabled to assess the competitive advantages, cost analysis in the simplest way. Basically the participants are encouraged to involve in the labor intensive activities, the area of their competitive advantage compared to other factors of production. Meaning and importance of organization is specially highlighted to the participants so that they shall be able to utilize the synergetic approach in benefit reaping. For this they are encouraged to put on uniform, to enchante program slogans, take oath of the program. The objective of all these are to translate theiy daily routine in managing clean drinking water, children education, cohesive relation in society, feeding the children nutritious food, sanitation management and so. Organization In addition to this to the economic upliftment of the targeted people, they are encouraged to develop social and cultural aspects of life. to the program also aims to make the targeted people able in socio-cultural aspects of life. The bank has initiated Micro Finance service in the licensed area in order to cater the door to door service to the deprived, socially backward public. With a view to make local people aware, literate and active on banking activities; the Department of Micro Finance has formulated policies and programs to develop entrepreneurship and self employment to the targeted people. The bank staff visits the potential areas and conduct pre-group training (PGT) to share policy and activities of the program. The training is called so because it is organized to educate the program and different schemes of the program to the public in general before the admittance of their membership. A week long PGT has been designated to make the potential members able to understand the ways of transforming life style. Through the PGT th potential participants gathered are shared the meaning and characteristics of the factors of production and their availabilities to them. Besides this the participants are also educated about the competitive advantages based on the geographical location. The participants are made literate in cost calculation and its analysis. They are also taught the importance of cost calculation and its analysis for running small business in the simplest ways. Those who are interested to be engaged in agro-products are provided technical support by the bank staff sharing about making land ready, blending of the different fertilizers, knowledge about the improved seeds, using pesticides and other necessary skills. The program does not only highlight economic aspect of life but instead the program instills cultural, social variables to the potential members through sharing the knowledge about sanitation, children education, nutritious feeding habits and managing clean dirking water. The program focuses on the nurture of the members&acute; we-feeling, collective efforts, self-respect, dignified life through learning and earning simultaneously. All these attempts are aimed to the well-being of the society at large. This program is designed to attempt gaining the equitable distribution of wealth as far as possible. The selected members who are eager to change their life economically, socially and culturally after receiving the knowledge and skills shared in the pre-group training; are encouraged to develop their saving habits and utilizing credit facilities based on their capacity. The importance of micro finance is credit facilities based on group guarantee rather than collateral; members are made more sensitive and responsive to utilize the fund effectively and efficiently.</p>\r\n', '', '', 35, 'left', '', 0, '1', '1', '1', '', '2021-04-18', 'M Nisan Rai'),
(65, '', '', '', 'microfinanceactivities', 'Microfinance Activities', '', '<p><strong>After making the members psychologically strong and committed to the program, the following activities conducted step by step.</strong></p>\r\n\r\n<ol>\r\n	<li><strong>Pre-group training:-</strong>&nbsp; A week-long pre-group training is organized with view to select the members who are really motivated, capable and committed. Participants not interested, not committed in the PGT are filtered at this atage.</li>\r\n	<li><strong>Group formation:-&nbsp;</strong>Of the selected member, different groups are formed based on the need and wants of members in which group they like to be joined. Each group comprises of 5 persons with a chair person, a vice-chair person and 3 members.</li>\r\n	<li><strong>Roles and responsibilities of the chair person, vice-chair person and members:-</strong> The roles and responsibilities of the authorities and members are as per the program directives which is shared in the PGT.</li>\r\n	<li><strong>Centre formantion:-</strong> The groups as discussed earlier are organized in different certres. A centre can be of 6 groups in maximum. Each centre is formed with a chief, a vice-chief and all others are as members.</li>\r\n	<li><strong>Roles and responsibilities of the centre chief, vice-chief and members:- </strong>The roles and responsibilities of the authorities and members are as per the program directives which is shared in the PGT.</li>\r\n	<li><strong>Centre meeting:-</strong> Centre meeting is held under the chairing of the chief and the presence of the bank staff once a month. The date, venue and time of the meeting is set by the decision of the previous centre meeting. This is the matter of consensus on a pragmatic way so that it can be arranged on festive occasions.</li>\r\n	<li><strong>Loan demand and loan sanction:- </strong>Needy members can demand loan in the c once a month centre meeting with a short briefing about the plan of the project, total amount to invested, the portion of equity injection. The remaining members assess the feasibility and the required amout. The members can also share the idea about project based on the risk factors. After the discussion, loan is sanctioned on group guarantee of the members</li>\r\n	<li><strong>Site visit for the assessment of loan utilization:-</strong> At the end of the month loan sanctioned, the bank staff, centre chief, vi-chief and guarantors pay visit the site for the verification of loan utilization. After conducting the site visit; loan utilization form if filled up for the official record.</li>\r\n	<li><strong>Actions to be taken in case of loan mis-utilization:-</strong> If the fund is found diverted without utilizing by the members; one month long grace period is provided to the member to invest in the said project. Repayment measures are taken if no correction it is not utilized nn the subsequent site visit.</li>\r\n</ol>\r\n', '<p><strong>After making the members psychologically strong and committed to the program, the following activities conducted step by step.</strong></p>\r\n\r\n<ol>\r\n	<li><strong>Pre-group training:-</strong>&nbsp; A week-long pre-group training is organized with view to select the members who are really motivated, capable and committed. Participants not interested, not committed in the PGT are filtered at this atage.</li>\r\n	<li><strong>Group formation:-&nbsp;</strong>Of the selected member, different groups are formed based on the need and wants of members in which group they like to be joined. Each group comprises of 5 persons with a chair person, a vice-chair person and 3 members.</li>\r\n	<li><strong>Roles and responsibilities of the chair person, vice-chair person and members:-</strong> The roles and responsibilities of the authorities and members are as per the program directives which is shared in the PGT.</li>\r\n	<li><strong>Centre formantion:-</strong> The groups as discussed earlier are organized in different certres. A centre can be of 6 groups in maximum. Each centre is formed with a chief, a vice-chief and all others are as members.</li>\r\n	<li><strong>Roles and responsibilities of the centre chief, vice-chief and members:- </strong>The roles and responsibilities of the authorities and members are as per the program directives which is shared in the PGT.</li>\r\n	<li><strong>Centre meeting:-</strong> Centre meeting is held under the chairing of the chief and the presence of the bank staff once a month. The date, venue and time of the meeting is set by the decision of the previous centre meeting. This is the matter of consensus on a pragmatic way so that it can be arranged on festive occasions.</li>\r\n	<li><strong>Loan demand and loan sanction:- </strong>Needy members can demand loan in the c once a month centre meeting with a short briefing about the plan of the project, total amount to invested, the portion of equity injection. The remaining members assess the feasibility and the required amout. The members can also share the idea about project based on the risk factors. After the discussion, loan is sanctioned on group guarantee of the members</li>\r\n	<li><strong>Site visit for the assessment of loan utilization:-</strong> At the end of the month loan sanctioned, the bank staff, centre chief, vi-chief and guarantors pay visit the site for the verification of loan utilization. After conducting the site visit; loan utilization form if filled up for the official record.</li>\r\n	<li><strong>Actions to be taken in case of loan mis-utilization:-</strong> If the fund is found diverted without utilizing by the members; one month long grace period is provided to the member to invest in the said project. Repayment measures are taken if no correction it is not utilized nn the subsequent site visit.</li>\r\n</ol>\r\n', '', '', 35, 'left', '', 0, '1', '1', '1', '', '2021-04-18', 'Nisan Rai'),
(66, '', '', '', 'microfinancedepositschemes', 'Microfinance Deposit Schemes', '', '<p>Micro finance program nurtures the saving habits among the members instilling the philosophy of continuous practice with patience. The following are the saving products under the micro-finance program.</p>\r\n\r\n<ol>\r\n	<li><strong>Personal Saving:-</strong> Members can save and withdraw any amount on their personal saving account individually. The bank provides the stipulated rate of interest to this savings regularly. This scheme is optional in nature.</li>\r\n	<li><strong>Group Saving:- </strong>This saving is maintained on the name of group compulsorily. In this account amount determined by the centre meeting is collected on every group meeting once a month. The saving amount from group to group may be different as the amount is the matter of group meeting based on the affordability of the group member.</li>\r\n	<li><strong>Double Saving:- </strong>Members are allowed to save certain amount under this scheme and the bank pays back its double amount saved cumulatively at the end of 10 or 15 year.</li>\r\n	<li><strong>Centre Fund Saving:- </strong>Every member in the group must save Rs. 10 per month for this saving. Main purpose of this saving is to provide fund on regular maintenance stationery and logistic support for conducting centre meetings. In addition to this, the fund promotes collective feelings amount the members availing subsidy in the cases like maternity/ post natal caring expenses, mourning period and natural calamities like floods and fire accidents.</li>\r\n</ol>\r\n', '<p>Micro finance program nurtures the saving habits among the members instilling the philosophy of continuous practice with patience. The following are the saving products under the micro-finance program.</p>\r\n\r\n<ol>\r\n	<li><strong>Personal Saving:-</strong> Members can save and withdraw any amount on their personal saving account individually. The bank provides the stipulated rate of interest to this savings regularly. This scheme is optional in nature.</li>\r\n	<li><strong>Group Saving:- </strong>This saving is maintained on the name of group compulsorily. In this account amount determined by the centre meeting is collected on every group meeting once a month. The saving amount from group to group may be different as the amount is the matter of group meeting based on the affordability of the group member.</li>\r\n	<li><strong>Double Saving:- </strong>Members are allowed to save certain amount under this scheme and the bank pays back its double amount saved cumulatively at the end of 10 or 15 year.</li>\r\n	<li><strong>Centre Fund Saving:- </strong>Every member in the group must save Rs. 10 per month for this saving. Main purpose of this saving is to provide fund on regular maintenance stationery and logistic support for conducting centre meetings. In addition to this, the fund promotes collective feelings amount the members availing subsidy in the cases like maternity/ post natal caring expenses, mourning period and natural calamities like floods and fire accidents.</li>\r\n</ol>\r\n', '', '', 35, 'left', '', 0, '1', '1', '1', '', '2021-04-18', 'Nisan Rai'),
(67, '', '', '', 'microfinancecreditfacilities', 'Microfinance Credit Facilities', '', '<ol>\r\n	<li><strong>General Loan:-</strong> Members who run small shops can obtain general loan for maximum of 18 month long installments. In general loan there is no provision of grace time.</li>\r\n	<li><strong>Agriculture Loan:-</strong> Members of Micro Finance groups can obtain such credit facility who can engaged in agriculture and produce vegetable and cash crops. Members can credit facilities from minimum NRS. 5,000 to NRS. 1,00,000 in maximum in the first phase. The amount of credit can be increased from the next phses based on their capacity of the utilization of the fund. Members have to repay the amount in 18 installments in maximum. As per necessity; certain time can be allocated grace period for the repayment of principal amount.</li>\r\n</ol>\r\n', '<ol>\r\n	<li><strong>General Loan:-</strong> Members who run small shops can obtain general loan for maximum of 18 month long installments. In general loan there is no provision of grace time.</li>\r\n	<li><strong>Agriculture Loan:-</strong> Members of Micro Finance groups can obtain such credit facility who can engaged in agriculture and produce vegetable and cash crops. Members can credit facilities from minimum NRS. 5,000 to NRS. 1,00,000 in maximum in the first phase. The amount of credit can be increased from the next phses based on their capacity of the utilization of the fund. Members have to repay the amount in 18 installments in maximum. As per necessity; certain time can be allocated grace period for the repayment of principal amount.</li>\r\n</ol>\r\n', '', '', 35, 'left', '', 0, '1', '1', '1', '', '2021-04-18', 'Nisan Rai'),
(68, '', '', '', 'socialsecuritypolicy', 'Social Securities', '', '<p>The program has adopted the policy social security policy for the sake safeguarding the members from loss as well as developing collectiveness in facing such loss causing factors.</p>\r\n\r\n<ol>\r\n	<li><strong>Maternity expenses:-</strong> Members of the program are provided NRS 1,500/- for maternity expenses for first two children. Members have to make a claim within the 90 days from the date of delivery with necessary documents.</li>\r\n	<li><strong>Rites and Ritual expenses:-</strong> Members are provided mourning expenses NRS 5000 at the demise of the member&#39;s spouse as social support with a view to nurture the cohesiveness among the members. Such facility is also provides to the member&#39;s family in a case member&#39;s death too. This facility has to be obtained within 35 days from the date of accident.</li>\r\n	<li><strong>Natural Disaster Assistance:-</strong> In a case of loss caused by fire, flood and earthquake to members&#39; property up to NRS 5,000 in maximum natural disaster assistance is provided to the members. To claim such assistance the concerned member should submit the necessary documents within 35 days of the loss occurred.</li>\r\n</ol>\r\n', '<p>The program has adopted the policy social security policy for the sake safeguarding the members from loss as well as developing collectiveness in facing such loss causing factors.</p>\r\n\r\n<ol>\r\n	<li><strong>Maternity expenses:-</strong> Members of the program are provided NRS 1,500/- for maternity expenses for first two children. Members have to make a claim within the 90 days from the date of delivery with necessary documents.</li>\r\n	<li><strong>Rites and Ritual expenses:-</strong> Members are provided mourning expenses NRS 5000 at the demise of the member&#39;s spouse as social support with a view to nurture the cohesiveness among the members. Such facility is also provides to the member&#39;s family in a case member&#39;s death too. This facility has to be obtained within 35 days from the date of accident.</li>\r\n	<li><strong>Natural Disaster Assistance:-</strong> In a case of loss caused by fire, flood and earthquake to members&#39; property up to NRS 5,000 in maximum natural disaster assistance is provided to the members. To claim such assistance the concerned member should submit the necessary documents within 35 days of the loss occurred.</li>\r\n</ol>\r\n', '', '', 35, 'left', '', 0, '1', '1', '1', '', '2021-04-18', 'Nisan Rai'),
(69, '', '', '', 'other', 'Other', '', '<ol>\r\n	<li><strong>Centre chiefs&#39; workshop:- </strong>Every year a workshop is organized at every branch involved in launching the program. The main aim of the workshop is to make attempt to address the problems of the different groups as far as possible and use inductive approach to integrate their values, beliefs, and experiences on a pragmatic manner.</li>\r\n	<li><strong>Centre chiefs&#39; Exposure Visits:-</strong> The bank organizes centre chiefs&#39; exposure visits to make them able to assess new avenues of income generation.</li>\r\n</ol>\r\n', '<ol>\r\n	<li><strong>Centre chiefs&#39; workshop:- </strong>Every year a workshop is organized at every branch involved in launching the program. The main aim of the workshop is to make attempt to address the problems of the different groups as far as possible and use inductive approach to integrate their values, beliefs, and experiences on a pragmatic manner.</li>\r\n	<li><strong>Centre chiefs&#39; Exposure Visits:-</strong> The bank organizes centre chiefs&#39; exposure visits to make them able to assess new avenues of income generation.</li>\r\n</ol>\r\n', '', '', 35, 'left', '', 0, '1', '1', '1', '', '2021-04-18', 'M Nisan Rai'),
(70, '', '', '', 'currentdeposit', 'Current Deposit', '', '<p>A Current Account is ideal for carrying out day-to-day business transactions. It is a transactional non-interest bearing account wherein a deposit is placed with the Bank for an unspecified period, which can be withdrawn whenever required through different means.</p>\r\n', '<p>A Current Account is ideal for carrying out day-to-day business transactions. It is a transactional non-interest bearing account wherein a deposit is placed with the Bank for an unspecified period, which can be withdrawn whenever required through different means.</p>\r\n\r\n<h5 style=\"text-align: center;\">&quot;Legal entities or institutions are eligible to open this account&quot;</h5>\r\n', '170current-deposit-final-1.jpg', 'small_170current-deposit-final-1.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2021-07-22', 'M Nisan Rai');
INSERT INTO `tbl_content` (`id`, `metakeyword`, `metadata`, `metadescription`, `category`, `mtitle`, `title`, `display`, `content`, `image`, `small_image`, `decrase_size`, `alignment`, `files`, `viewer`, `status`, `del`, `display_order`, `sources`, `dates`, `admin`) VALUES
(71, '', '', '', 'calldeposit', 'Call Deposit', '', '<p>A Salapa&nbsp;Call Account is a non-operative demand deposit account with wide array of benefits including interest earning.</p>\r\n', '<p>A Salapa Call Account is a non-operative demand deposit account with wide array of benefits including interest earning.</p>\r\n\r\n<h5 style=\"text-align:center\">&quot;This account can be opened by such corporates which have the privilege of earning interest.&quot;</h5>\r\n', '071call-deposit-final-1.jpg', 'small_071call-deposit-final-1.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2021-07-22', 'M Nisan Rai'),
(72, '', '', '', 'businessoverdraft', 'Business Overdraft (OD) Loan', '', '<p>Business od loan updating.....</p>\r\n', '<p>Business od loan updating.....</p>\r\n', '072BUSINESS-OD.jpg', 'small_072BUSINESS-OD.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2021-07-22', 'Nisan Rai'),
(73, '', '', '', 'personaloverdraft', 'Personal Overdraft (OD) Loan', '', '<p>Site updating. .......</p>\r\n', '<p>Site updating. .......</p>\r\n', '073PERSONAL-OD.jpg', 'small_073PERSONAL-OD.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2021-07-22', 'Nisan Rai'),
(74, '', '', '', 'personalterm', 'Personal Term Loan', '', '<p>Site updating. .......</p>\r\n', '<p>Site updating. .......</p>\r\n', '174PERSONAL-TERM-LOAN.jpg', 'small_174PERSONAL-TERM-LOAN.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2021-07-23', 'M Nisan Rai'),
(75, '', '', '', 'businessterm', 'Business Term Loan', '', '<p>Site updating. .......</p>\r\n', '<p>Site updating. .......</p>\r\n', '175BUSINESS-TERM-LOAN.jpg', 'small_175BUSINESS-TERM-LOAN.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2021-07-23', 'M Nisan Rai'),
(76, '', '', '', 'hirepurchase', 'Hire Purchase Loan', '', '<p>Site updating. .......</p>\r\n', '<p>Site updating. .......</p>\r\n', '076HIRE-PURCHASE-LOAN.jpg', 'small_076HIRE-PURCHASE-LOAN.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2021-07-22', 'Nisan Rai'),
(77, '', '', '', 'goldloan', 'Gold Loan', '', '<p>Site updating. .......</p>\r\n', '<p>Site updating. .......</p>\r\n', '077GOLD-LOAN.jpg', 'small_077GOLD-LOAN.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2021-07-22', 'Nisan Rai'),
(78, '', '', '', 'agricultureloan', 'Agriculture Loan', '', '<p>Site updating ....</p>\r\n', '<p>Site updating ....</p>\r\n', '078AGRICULTURE-LOAN.jpg', 'small_078AGRICULTURE-LOAN.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2021-07-23', 'Nisan Rai'),
(79, '', '', '', 'womenentrepreneur', 'Women Entrepreneurship Overdraft Loan', '', '<p>Site updating....</p>\r\n', '<p>Site updating....</p>\r\n', '079MAHILA-UDDHAMI-OD.jpg', 'small_079MAHILA-UDDHAMI-OD.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2021-07-26', 'Nisan Rai'),
(80, '', '', '', 'womenentrepreneurshipterm', 'Women Entrepreneurship Term Loan', '', '<p>Site updating....</p>\r\n', '<p>Site updating....</p>\r\n', '080MAHILA-UDDHAMI-TERM.jpg', 'small_080MAHILA-UDDHAMI-TERM.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2021-07-26', 'Nisan Rai'),
(81, '', '', '', 'agricultureodloan', 'Agriculture Overdraft Loan (Subsidy)', '', '<p>Site updating....</p>\r\n', '<p>Site updating....</p>\r\n', '081AGRICULTURE-LOAN.jpg', 'small_081AGRICULTURE-LOAN.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2021-07-26', 'Nisan Rai'),
(82, '', '', '', 'agriculturetermloan', 'Agriculture Term Loan (Subsidy)', '', '<p>Site updating....</p>\r\n', '<p>Site updating....</p>\r\n', '082AGRICULTURE-LOAN-TERM.jpg', 'small_082AGRICULTURE-LOAN-TERM.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2021-07-26', 'M Nisan Rai'),
(83, '', '', '', 'deprivedsectorschedule', 'Deprived Sector Schedule Loan', '', '<p>Site updating.......</p>\r\n', '<p>Site updating.......</p>\r\n', '083DEPRIVED-SECTOR-LOAN.jpg', 'small_083DEPRIVED-SECTOR-LOAN.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2021-07-26', 'M Nisan Rai'),
(84, '', '', '', 'deprivedsectornonschedule', 'Deprived Sector Non-schedule loan', '', '<p>Site updating.......</p>\r\n', '<p>Site updating.......</p>\r\n', '084DEPRIVED-SECTOR-NON-SCHEDULE.jpg', 'small_084DEPRIVED-SECTOR-NON-SCHEDULE.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2021-07-26', 'Nisan Rai'),
(85, '', '', '', 'fixeddeposit', 'Fixed Deposit 3 to 6 Months ', '', '<p>Three to Six Months Fixed Deposit</p>\r\n', '<h4><strong>Features:</strong></h4>\r\n\r\n<ul>\r\n	<li>No set-up, monthly service or management fees</li>\r\n	<li>Minimum Deposit Amount NPR 10,000</li>\r\n	<li>Interest payable at maturity or quarterly</li>\r\n	<li>Loan against your Term Deposit available up to 90%</li>\r\n</ul>\r\n\r\n<h4><strong>Rates &amp; Fees:</strong></h4>\r\n\r\n<ul>\r\n	<li><strong>Interest Rate Calculation:</strong> Daily basis</li>\r\n	<li><strong>Interest Rate Posting:</strong> Quarterly basis</li>\r\n</ul>\r\n', '085three-to-six-months.jpg', 'small_085three-to-six-months.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2023-12-12', 'M IT Department'),
(86, '', '', '', 'fixeddeposit', 'Fixed Deposit 1Year ', '', '<p>One year fixed deposit</p>\r\n', '<h4><strong>Features:</strong></h4>\r\n\r\n<ul>\r\n	<li>No set-up, monthly service or management fees</li>\r\n	<li>Minimum Deposit Amount NPR 10,000</li>\r\n	<li>Interest payable at maturity or quarterly</li>\r\n	<li>Loan against your Term Deposit available up to 90%</li>\r\n</ul>\r\n\r\n<h4><strong>Rates &amp; Fees:</strong></h4>\r\n\r\n<ul>\r\n	<li><strong>Interest Rate Calculation:</strong> Daily basis</li>\r\n	<li><strong>Interest Rate Posting:</strong> Quarterly basis</li>\r\n</ul>\r\n', '086ONE-YEAR-DD.jpg', 'small_086ONE-YEAR-DD.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2023-12-12', 'M IT Department'),
(87, '', '', '', 'fixeddeposit', 'Fixed Deposit 2 Years', '', '<p>Two years fixed deposit</p>\r\n', '<h4><strong>Features:</strong></h4>\r\n\r\n<ul>\r\n	<li>No set-up, monthly service or management fees</li>\r\n	<li>Minimum Deposit Amount NPR 10,000</li>\r\n	<li>Interest payable at maturity or quarterly</li>\r\n	<li>Loan against your Term Deposit available up to 90%</li>\r\n</ul>\r\n\r\n<h4><strong>Rates &amp; Fees:</strong></h4>\r\n\r\n<ul>\r\n	<li><strong>Interest Rate Calculation:</strong> Daily basis</li>\r\n	<li><strong>Interest Rate Posting:</strong> Quarterly basis</li>\r\n</ul>\r\n', '0872-YEAR-FD.jpg', 'small_0872-YEAR-FD.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2023-12-12', 'M IT Department'),
(88, '', '', '', 'fixeddeposit', 'Fixed Deposit 3Years', '', '<p>Fixed deposit three years</p>\r\n', '<h4><strong>Features:</strong></h4>\r\n\r\n<ul>\r\n	<li>No set-up, monthly service or management fees</li>\r\n	<li>Minimum Deposit Amount NPR 10,000</li>\r\n	<li>Interest payable at maturity or quarterly</li>\r\n	<li>Loan against your Term Deposit available up to 90%</li>\r\n</ul>\r\n\r\n<h4><strong>Rates &amp; Fees:</strong></h4>\r\n\r\n<ul>\r\n	<li><strong>Interest Rate Calculation:</strong> Daily basis</li>\r\n	<li><strong>Interest Rate Posting:</strong> Quarterly basis</li>\r\n</ul>\r\n', '0883-YEARS-FD.jpg', 'small_0883-YEARS-FD.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2023-12-12', 'M IT Department'),
(89, '', '', '', 'fixeddeposit', 'Fixed Deposit Above 5 Years', '', '<p>Above 5 years fixed deposit</p>\r\n', '<h4><strong>Features:</strong></h4>\r\n\r\n<ul>\r\n	<li>No set-up, monthly service or management fees</li>\r\n	<li>Minimum Deposit Amount NPR 10,000</li>\r\n	<li>Interest payable at maturity or quarterly</li>\r\n	<li>Loan against your Term Deposit available up to 90%</li>\r\n</ul>\r\n\r\n<h4><strong>Rates &amp; Fees:</strong></h4>\r\n\r\n<ul>\r\n	<li><strong>Interest Rate Calculation:</strong> Daily basis</li>\r\n	<li><strong>Interest Rate Posting:</strong> Quarterly basis</li>\r\n</ul>\r\n', '089more-than-five-years.jpg', 'small_089more-than-five-years.jpg', 35, 'left', '', 0, '1', '1', '1', '', '2023-12-12', 'M IT Department'),
(90, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2077-6-30', '', '', '', '', '', 35, 'left', '090interest-rate-of-2077-6-30.pdf', 0, '1', '1', '1', '', '2020-10-16', 'IT Department'),
(91, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2077-10-30', '', '', '', '', '', 35, 'left', '091interest-rate-of-2077-10-30.pdf', 0, '1', '1', '1', '', '2021-02-12', 'IT Department'),
(92, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2077-11-30', '', '', '', '', '', 35, 'left', '092interest-rate-of-2077-11-30.pdf', 0, '1', '1', '1', '', '2021-03-13', 'IT Department'),
(93, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2078-04-30', '', '', '', '', '', 35, 'left', '193interest-rate-of-2078-04-30.pdf', 0, '1', '1', '1', '', '2021-08-14', 'M IT Department'),
(94, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2078-06-31', '', '', '', '', '', 35, 'left', '094interest-rate-of-2078-06-31.pdf', 0, '1', '1', '1', '', '2021-10-17', 'IT Department'),
(95, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2078-06-31 REVISED', '', '', '', '', '', 35, 'left', '095interest-rate-of-2078-06-31 -samsodhit.pdf', 0, '1', '1', '1', '', '2021-10-17', 'IT Department'),
(96, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2078-08-29', '', '', '', '', '', 35, 'left', '096interest-rate-of-2078-08-29.pdf', 0, '1', '1', '1', '', '2021-12-15', 'IT Department'),
(97, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2078-10-30', '', '', '', '', '', 35, 'left', '097interest-rate-of-2078-10-30.pdf', 0, '1', '1', '1', '', '2022-02-12', 'IT Department'),
(98, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2078-11-30', '', '', '', '', '', 35, 'left', '098interest-rate-of-2078-11-30.pdf', 0, '1', '1', '1', '', '2022-03-14', 'IT Department'),
(99, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2079-04-31', '', '', '', '', '', 35, 'left', '099interest-rate-of-2079-04-31.pdf', 0, '1', '1', '1', '', '2022-08-16', 'IT Department'),
(100, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2079-05-31', '', '', '', '', '', 35, 'left', '0100interest-rate-of-2079-05-31.pdf', 0, '1', '1', '1', '', '2022-09-16', 'IT Department'),
(101, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2079-10-11', '', '', '', '', '', 35, 'left', '0101interest-rate-of-2079-10-11.pdf', 0, '1', '1', '1', '', '2023-01-25', 'IT Department'),
(102, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2079-10-29', '', '', '', '', '', 35, 'left', '0102interest-rate-of-2079-10-29.pdf', 0, '1', '1', '1', '', '2023-02-12', 'IT Department'),
(103, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2079-11-30', '', '', '', '', '', 35, 'left', '0103interest-rate-of-2079-11-30.pdf', 0, '1', '1', '1', '', '2023-03-14', 'IT Department'),
(104, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2079-12-30', '', '', '', '', '', 35, 'left', '0104interest-rate-of-2079-12-30.pdf', 0, '1', '1', '1', '', '2023-04-13', 'IT Department'),
(105, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2080-01-07', '', '', '', '', '', 35, 'left', '0105interest-rate-of-2080-01-07.pdf', 0, '1', '1', '1', '', '2023-04-20', 'IT Department'),
(106, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2080-01-31', '', '', '', '', '', 35, 'left', '0106interest-rate-of-2080-01-31.pdf', 0, '1', '1', '1', '', '2023-05-14', 'IT Department'),
(107, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2080-02-32', '', '', '', '', '', 35, 'left', '0107interest-rate-of-2080-02-32.pdf', 0, '1', '1', '1', '', '2023-06-15', 'IT Department'),
(108, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2080-03-31', '', '', '', '', '', 35, 'left', '0108interest-rate-of-2080-03-31.pdf', 0, '1', '1', '1', '', '2023-07-16', 'IT Department'),
(109, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2080-04-19', '', '', '', '', '', 35, 'left', '0109interest-rate-of-2080-04-19.pdf', 0, '1', '1', '1', '', '2023-08-04', 'IT Department'),
(110, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2080-4-32', '', '', '', '', '', 35, 'left', '0110interest-rate-of-2080-4-32.pdf', 0, '1', '1', '1', '', '2023-08-17', 'IT Department'),
(111, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2080-5-31', '', '', '', '', '', 35, 'left', '0111interest-rate-of-2080-5-31.pdf', 0, '1', '1', '1', '', '2023-09-17', 'IT Department'),
(112, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2080-06-30', '', '', '', '', '', 35, 'left', '0112interest-rate-of-2080-06-30.pdf', 0, '1', '1', '1', '', '2023-10-17', 'IT Department'),
(113, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2080-07-30', 'INTEREST RATE PUBLISHED ON 2080-07-30', '<p>INTEREST RATE PUBLISHED ON 2080-07-30</p>\r\n', '<p>INTEREST RATE PUBLISHED ON 2080-07-30</p>\r\n', '', '', 35, 'left', '0113interest-rate-of-2080-07-30.pdf', 0, '1', '1', '1', '2080/081', '2023-11-17', 'IT Department'),
(114, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2080-08-30', '', '<p>INTEREST RATE PUBLISHED ON 2080-08-30</p>\r\n', '<p>INTEREST RATE PUBLISHED ON 2080-08-30</p>\r\n', '', '', 35, 'left', '1114interest-rate-of-2080-08-30.pdf', 0, '1', '1', '1', '2080/081', '2023-12-19', 'M IT Department'),
(115, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2080-09-29', '', '<p>INTEREST RATE PUBLISHED ON 2080-09-29</p>\r\n', '<p>INTEREST RATE PUBLISHED ON 2080-09-29</p>\r\n', '', '', 35, 'left', '0115interest-rate-of-2080-09-29.pdf', 0, '1', '1', '1', '2080/081', '2024-01-16', 'IT Department'),
(116, '', '', '', 'career', 'Vacancy for the post of Asistant', 'Vacancy for the post of Asistant', '<p>Salapa Bikas Bank Limited announced vacancy for the post of asistant for&nbsp;all interested candidate who loves to focus career in banking sector. Interested candidate could apply through the mail info@salapabikasbank.com.np.</p>\r\n', '<p>Salapa Bikas Bank Limited announced vacancy for the post of asistant for&nbsp;all interested candidate who loves to focus career in banking sector. Interested candidate could apply through the mail info@salapabikasbank.com.np.</p>\r\n', '', '', 35, 'left', '1116vacancy.pdf', 0, '1', '1', '', '2080/081', '2024-01-31', 'M IT Department'),
(117, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2080-10-17', 'INTEREST RATE PUBLISHED ON 2080-10-17', '<p>INTEREST RATE PUBLISHED ON 2080-10-17</p>\r\n', '<p>INTEREST RATE PUBLISHED ON 2080-10-17</p>\r\n', '', '', 35, 'left', '0117interest-rate-of-2080-10-17.pdf', 0, '1', '1', '1', '2080/081', '2024-01-31', 'IT Department'),
(119, '', '', '', 'career', 'Short list of candidates', '', '<p>Short list of candidates</p>\r\n', '<p>Short list of candidates</p>\r\n', '', '', 35, 'left', '0118short-list-notice.pdf', 0, '1', '1', '1', '2080/081', '2024-02-06', 'IT Department'),
(120, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2080-10-29', 'INTEREST RATE PUBLISHED ON 2080-10-29', '<p>INTEREST RATE PUBLISHED ON 2080-10-29</p>\r\n', '<p>INTEREST RATE PUBLISHED ON 2080-10-29</p>\r\n', '', '', 35, 'left', '0120interest-rate-of-2080-10-29.pdf', 0, '1', '1', '1', '2080/081', '2024-02-13', 'IT Department'),
(121, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2080-11-30', 'INTEREST RATE PUBLISHED ON 2080-11-30', '<p>INTEREST RATE PUBLISHED ON 2080-11-30</p>\r\n', '<p>INTEREST RATE PUBLISHED ON 2080-11-30</p>\r\n', '', '', 35, 'left', '0121interest-rate-of-2080-11-30.pdf', 0, '1', '1', '1', '2080/081', '2024-03-14', 'IT Department'),
(122, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2080-12-30', 'INTEREST RATE PUBLISHED ON 2080-12-30', '<p>INTEREST RATE PUBLISHED ON 2080-12-30</p>\r\n', '<p>INTEREST RATE PUBLISHED ON 2080-12-30</p>\r\n', '', '', 35, 'left', '0122interest-rate-of-2080-12-30.pdf', 0, '1', '1', '1', '2080-081', '2024-04-12', 'IT Department'),
(123, '', '', '', 'interestrate', 'INTEREST RATE PUBLISHED ON 2081-01-31', '', '<p>INTEREST RATE PUBLISHED ON 2081-01-31</p>\r\n', '<p>INTEREST RATE PUBLISHED ON 2081-01-31</p>\r\n', '', '', 35, 'left', '0123interest-rate-of-2081-01.31.pdf', 0, '1', '1', '1', '2080/081', '2024-05-15', 'IT Department');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `id` bigint(20) NOT NULL,
  `event_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `event_status` varchar(1) NOT NULL,
  `tweet_status` varchar(1) NOT NULL,
  `event_date` varchar(50) NOT NULL,
  `event_greeting` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dates` varchar(40) NOT NULL,
  `admin` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `id` int(20) NOT NULL,
  `question` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `answer` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) NOT NULL,
  `feature` varchar(10) NOT NULL,
  `del` varchar(10) NOT NULL,
  `dates` date NOT NULL,
  `publisher` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`id`, `question`, `answer`, `status`, `feature`, `del`, `dates`, `publisher`) VALUES
(1, 'What SBBL stand for?', 'SBBL stand for Salapa Bikas Bank.', '1', '1', '1', '2021-02-21', 'Nisan Rai'),
(2, 'What is the full form of KYC?', 'The full form of KYC is Know Your Customer.', '1', '1', '1', '2021-02-23', 'Nisan Rai'),
(6, 'Is Salapa Bikas Bank have mobile banking facility?', 'Yes.', '1', '1', '1', '2021-02-23', 'Nisan Rai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file`
--

CREATE TABLE `tbl_file` (
  `id` bigint(20) NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `del` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `feature` varchar(10) DEFAULT NULL,
  `admin` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_file`
--

INSERT INTO `tbl_file` (`id`, `title`, `name`, `category`, `del`, `status`, `feature`, `admin`, `date`) VALUES
(22, 'Syllabus for All Level', '0-24-Mar-2021-07-03-38Syllabus for all level.pdf', 'adddownload', '1', '1', '', 'Nisan Rai', '24-Mar-2021'),
(23, 'Notice of office time', '0-02-Nov-2023-09-11-49office-time.pdf', 'adddownload', '1', '1', '1', 'IT Department', '02-Nov-2023'),
(24, 'Account Opening Form of SBBL', '0-22-Dec-2023-09-12-35SALAPA ACCOUNT OPENING FORM.pdf', 'adddownload', '1', '1', '', 'IT Department', '22-Dec-2023'),
(25, 'Notice for 11th annual general meeting', '0-02-Feb-2024-09-02-30agm-notice.pdf', 'adddownload', '1', '1', '', 'IT Department', '02-Feb-2024'),
(26, '2nd Notice for 11th annual general meeting', '0-09-Feb-2024-06-02-4724_Magh_ 2080_Sourya_Page_06.pdf', 'adddownload', '1', '1', '', 'IT Department', '09-Feb-2024');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` bigint(20) NOT NULL,
  `parent` bigint(20) NOT NULL,
  `image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `small_image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `urls` varchar(250) NOT NULL,
  `feature` varchar(1) NOT NULL,
  `status` varchar(1) NOT NULL,
  `del` varchar(1) NOT NULL,
  `admin` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dates` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `parent`, `image`, `small_image`, `title`, `alias`, `content`, `urls`, `feature`, `status`, `del`, `admin`, `dates`) VALUES
(101, 6, '27-Dec-20-01-12-23salapa-pokhari.jpg', '', 'Salapa Bikas Bank Limited', 'VIEW MORE', '', '', '1', '1', '1', 'IT Department', '2024-01-26'),
(102, 6, '22-Mar-21-09-03-20temke.jpg', '', 'Salapa Bikas Bank Limited', 'VIEW MORE', '', '', '1', '1', '1', 'IT Department', '2024-01-26'),
(103, 13, '0-25-Mar-21-12-03-13staff.jpg', '', 'Staff of Salapa Bikas Bank Ltd.', '', '', '', '', '1', '1', 'Nisan Rai', '25-Mar-21'),
(104, 13, '1-25-Mar-21-12-03-14staff1.jpg', '', 'depositandsaving', '', '', '', '', '1', '1', 'Nisan Rai', '25-Mar-21'),
(105, 8, '0-25-Mar-21-12-03-09program2.jpg', '', 'आठौ बार्षिक साधारण सभाको उद्घाटन गर्नुहुदै प्रमुख अतिथि र बैंकका अध्यक्ष', '', '', '', '', '1', '1', 'Nisan Rai', '25-Mar-21'),
(106, 8, '1-25-Mar-21-12-03-09program6.jpg', '', 'प्रमुख अतिथि जि.स.स खोटाङका  अध्यक्ष श्री बबि चाम्लिङ मन्तव्य राख्नुहुदै ', '', '', '', '', '1', '1', 'Nisan Rai', '25-Mar-21'),
(107, 8, '2-25-Mar-21-12-03-09program1.jpg', '', 'बैंकका अध्यक्ष श्री टंक राई मन्तव्य राख्नुहुदै ', '', '', '', '', '1', '1', 'Nisan Rai', '25-Mar-21'),
(108, 8, '3-25-Mar-21-12-03-09program3.jpg', '', 'सभामा बैंकको वित्तिय विवरण प्रस्तुत गर्नुहुदै प्रमुख कार्यकारी अधिकृत', '', '', '', '', '1', '1', 'Nisan Rai', '25-Mar-21'),
(109, 8, '0-25-Mar-21-12-03-36program4.jpg', '', 'सभामा बैंकको हालको अवस्थाको जानकारी गराउनुहुदै वरिष्ठ अधिकृत', '', '', '', '', '1', '1', 'Nisan Rai', '25-Mar-21'),
(110, 14, '14-Jan-24-04-01-52IMG-20231221-WA0005.jpg', '', 'IPS', '', '', '', '1', '1', '1', 'IT Department', '2024-01-14'),
(111, 14, '1-10-Oct-23-10-10-57SALAPA-GOLD-LOAN.jpg', '', 'Gold Loan', '', '', '', '1', '1', '1', 'Nisan Rai', '2023-10-10'),
(112, 14, '0-14-Oct-23-04-10-05PROFESSIONAL-LOAN-1.jpg', '', 'Salapa Professional Loan', '', '', '', '1', '1', '1', 'IT Department', '2023-10-14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery_category`
--

CREATE TABLE `tbl_gallery_category` (
  `id` bigint(20) NOT NULL,
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gallery_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `position` bigint(20) NOT NULL,
  `status` varchar(1) NOT NULL,
  `feature` varchar(1) NOT NULL,
  `del` varchar(1) NOT NULL,
  `parent` bigint(20) NOT NULL,
  `admin` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dates` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_gallery_category`
--

INSERT INTO `tbl_gallery_category` (`id`, `category`, `gallery_name`, `position`, `status`, `feature`, `del`, `parent`, `admin`, `dates`) VALUES
(6, 'Image Gallery', 'Slider Images', 2, '1', '', '1', 6, 'Nisan Rai', '2023-10-10'),
(8, 'Image Gallery', 'Salapa Bikas Bank Ltd. Program', 1, '1', '1', '1', 6, 'Nisan Rai', '2021-03-25'),
(13, 'Image Gallery', 'Salapa Staff', 1, '1', '1', '1', 0, 'Nisan Rai', '2021-03-25'),
(14, 'Image Gallery', 'Home Page Notice', 2, '1', '0', '1', 0, 'Nisan Rai', '2023-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id` bigint(20) NOT NULL,
  `membertypeid` bigint(20) NOT NULL,
  `memberType` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `memberName` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(250) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `status` varchar(10) NOT NULL,
  `feature` varchar(10) NOT NULL,
  `displayposition` bigint(20) NOT NULL,
  `del` varchar(10) NOT NULL,
  `admins` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dates` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id`, `membertypeid`, `memberType`, `memberName`, `position`, `address`, `contact`, `email`, `content`, `image`, `status`, `feature`, `displayposition`, `del`, `admins`, `dates`) VALUES
(18, 7, '', 'Mr. Tanka Rai', 'Chairman', 'Khotang', '9851000553', 'tankarai@sbbl.com.np', 'SalapaBikas Bank was incorporated in 2069/04/01 under the Bank and Financial Institutions Act, 2063 (Amended 2073).The bank was licensed as a regional bank covering geographical area of Khotang district.The name of the bank has been derived from SalapaPokhari, the famous lake for its sacred and spiritual value among the local communities. The promoters of the bank are from different walks of life.', 'edit23tankarai.jpg', '1', '', 1, '1', 'Nisan Rai', '2018-11-25'),
(19, 7, '', 'Mr. Saran Kumar Rai', 'Director', 'Khotang', '9851200445', 'skrai@sbbl.com.np', '', 'edit23sarankumarrai.jpg', '1', '', 2, '1', 'Nisan Rai', '2018-11-25'),
(20, 7, '', 'Mr. Harindra Prasad Rai', 'Director', 'Khotang', '9851040445', 'hprai@sbbl.com.np', '', 'edit23harindrarai.jpg', '1', '', 3, '1', 'Nisan Rai', '2018-11-25'),
(21, 7, '', 'Mr. Lab Kumar Rai', 'Director', 'Khotang', '9849488478', 'lkrai@sbbl.com.np', '', 'edit23labkumarrai.jpg', '1', '', 4, '1', 'Nisan Rai', '2018-11-25'),
(22, 7, '', 'Mr. Chandra Bahadur Khadka', 'Director', 'Khotang', '9852849275', 'cbkhadka@sbbl.com.np', '', 'edit23chandrabahadurkhadka.jpg', '1', '', 5, '1', 'Nisan Rai', '2018-11-25'),
(23, 10, '', 'Mr. Ishwar Man Rai', 'CEO', 'Bhojpur', '9841364165', 'imrai@sbbl.com.np', '', 'edit30ishworman-rai.jpg', '', '', 6, '1', 'Nisan Rai', '2020-12-21'),
(24, 10, '', 'Mr. Dipkar Rai', 'Senior Officer', 'Jantedhunga-4, Khotang', '9860004041', 'dipkar@sbbank.com.np', 'SalapaBikas Bank was incorporated in 2069/04/01 under the Bank and Financial Institutions Act, 2063 (Amended 2073).The bank was licensed as a regional bank covering geographical area of Khotang district.The name of the bank has been derived from SalapaPokhari, the famous lake for its sacred and spiritual value among the local communities. The promoters of the bank are from different walks of life.', 'edit30dipkar-rai.jpg', '1', '1', 3, '1', 'Nisan Rai', '2021-01-26'),
(25, 10, '', 'Mr. Chudamani Thapa', 'Officer', 'Diktel Rupakot Majhuwagadhi-2, Khotang', '9862819295', '', '', 'edit30chudamani-thapa1.jpg', '1', '1', 5, '1', 'Nisan Rai', '2021-01-26'),
(26, 10, '', 'Mr. Nisan Rai', 'ITO', 'Sakela-3, Khotang', '9843358296', 'nisan@sbbank.com.np', '', 'edit30edit-nisan-rai3.jpg', '1', '1', 8, '1', 'Nisan Rai', '2021-01-26'),
(27, 10, '', 'Mr. Ananda Rai', 'Officer', 'Aiselukharka, Khotang', '9861119649', '', '', 'edit30ANANDA-RAI.jpg', '1', '1', 4, '1', 'Nisan Rai', '2021-04-16'),
(28, 10, '', 'Mrs. Sita Rai', 'Officer', 'Jantedhunga-4, Khotang', '9862979799', '', '', 'edit30sita-rai.jpg', '1', '1', 6, '1', 'Nisan Rai', '2021-04-16'),
(29, 10, '', 'Mr. Sajan Rai', 'Officer', 'Morang', '9863861136', '', '', 'edit301698998910805.jpg', '1', '1', 7, '1', 'Nisan Rai', '2021-04-16'),
(30, 10, '', 'Yogendra Pun', 'CEO', 'Raghuganga Rural Municipality, Myagdi', '9851181626', 'ceo@salapabikasbank.com.np', '', 'edit32YOGENDRA-PUN.jpg', '1', '1', 1, '1', 'IT Department', '2024-05-15'),
(31, 10, '', 'Lilaraj Tumbapo', 'Senior Manager', '', '9842692226', 'lilaraj@salapabikasbank.com.np', '', 'edit32PHOTO-LILARAJ-TUMBAPO.jpg', '1', '1', 2, '1', 'IT Department', '2024-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_membertype`
--

CREATE TABLE `tbl_membertype` (
  `id` bigint(20) NOT NULL,
  `membertype` varchar(255) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_membertype`
--

INSERT INTO `tbl_membertype` (`id`, `membertype`, `slug`, `status`) VALUES
(7, 'Board of Directors', 'boardofdirectors', '1'),
(10, 'Management Team', 'managementteam', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id` int(20) NOT NULL,
  `menu` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `submenu` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `child` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `icon` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL DEFAULT '',
  `link` varchar(255) NOT NULL DEFAULT '',
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `parent` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `feature` varchar(10) NOT NULL,
  `del` varchar(10) NOT NULL,
  `position` int(11) NOT NULL,
  `dates` varchar(30) NOT NULL,
  `admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id`, `menu`, `submenu`, `child`, `icon`, `link`, `category`, `parent`, `status`, `feature`, `del`, `position`, `dates`, `admin`) VALUES
(1, 'Home', '', '', '', 'home', 'menu', '', '1', '1', '1', 1, '2018-01-31', 'Nisan Rai'),
(2, 'About Us', '', '', 'aboutus.png', 'aboutus', 'menu', '', '1', '1', '1', 2, '2018-07-20', 'Nisan Rai'),
(3, 'Deposit and Saving', '', '', 'deposite_and_saving.png', 'depositandsaving', 'menu', '', '1', '1', '1', 3, '2018-01-21', 'Nisan Rai'),
(4, 'Loan and Borrowing', '', '', 'loan_and_borrowing.png', 'loanandborrowing', 'menu', '', '1', '1', '1', 4, '2016-07-28', 'M Nisan Rai'),
(5, 'Micro Finance', '', '', 'microfinance.png', 'microfinance', 'menu', '', '1', '1', '1', 5, '2016-07-28', 'M Nisan Rai'),
(6, 'Publications', '', '', 'publication.png', 'publications', 'menu', '', '1', '1', '1', 6, '2018-01-31', 'Nisan Rai'),
(7, 'Career', '', '', 'career.png', 'career', 'menu', '', '1', '1', '1', 7, '2016-07-28', 'Nisan Rai'),
(8, '', 'Leadership', '', '', 'leadership', 'submenu', '2', '1', '1', '1', 8, '2021-02-23', 'Nisan Rai'),
(9, '', 'Banking Hours', '', '', 'bankinghours', 'submenu', '2', '1', '1', '1', 8, '2021-02-23', 'Nisan Rai'),
(10, '', '', 'Board of Directors', '', 'boardofdirectors', 'child', '8', '1', '1', '1', 10, '2021-02-23', 'Nisan Rai'),
(11, '', 'Interest Rate', '', '', 'interestrate', 'submenu', '6', '1', '1', '1', 7, '2021-03-23', 'Nisan Rai'),
(12, 'Sms Alert', '', '', '', 'smsalert', 'menu', '', '1', '', '1', 7, '2020-12-22', 'Nisan Rai'),
(13, '', 'Salapa Bikas Bank Ltd.', '', '', 'salapabikasbank', 'submenu', '2', '1', '1', '1', 7, '2021-02-23', 'Nisan Rai'),
(14, '', '', 'Introduction', '', 'introduction', 'child', '13', '1', '1', '1', 9, '2021-02-25', 'Nisan Rai'),
(15, '', '', 'Our Vision', '', 'vision', 'child', '13', '1', '1', '1', 10, '2021-02-23', 'Nisan Rai'),
(16, '', '', 'Our Goal', '', 'goal', 'child', '13', '1', '1', '1', 12, '2021-02-25', 'Nisan Rai'),
(17, '', '', 'Our Objective', '', 'objective', 'child', '13', '1', '1', '1', 13, '2021-02-25', 'Nisan Rai'),
(18, '', '', 'Salapa Staff', '', 'managementteam', 'child', '8', '1', '1', '1', 10, '2023-10-10', 'Nisan Rai'),
(19, '', '', 'Our Mission', '', 'mission', 'child', '13', '1', '1', '1', 11, '2021-02-25', 'Nisan Rai'),
(20, '', 'Investor Relation', '', '', 'investorralations', 'submenu', '6', '1', '1', '1', 7, '2021-03-23', 'Nisan Rai'),
(21, '', 'Download', '', '', 'download', 'submenu', '6', '1', '1', '1', 7, '2021-03-23', 'Nisan Rai'),
(22, '', 'Fixed Deposit', '', '', 'fixeddeposit', 'submenu', '3', '1', '1', '1', 7, '2021-03-25', 'Nisan Rai'),
(23, '', 'Saving Deposit', '', '', 'savingdeposit', 'submenu', '3', '1', '1', '1', 8, '2021-03-25', 'Nisan Rai'),
(24, '', 'Current Deposit', '', '', 'currentdeposit', 'submenu', '3', '1', '1', '1', 9, '2021-03-25', 'Nisan Rai'),
(25, '', 'Call Deposit', '', '', 'calldeposit', 'submenu', '3', '1', '1', '1', 10, '2021-03-25', 'Nisan Rai'),
(26, 'Branches', '', '', '', 'branches', 'menu', '', '1', '', '1', 8, '2021-03-29', 'Nisan Rai'),
(27, '', 'Microfinance Introduction', '', '', 'microintroduction', 'submenu', '5', '1', '1', '1', 8, '2021-04-18', 'Nisan Rai'),
(28, '', 'Microfinance Objectives', '', '', 'microfinanceobjectives', 'submenu', '5', '1', '1', '1', 8, '2021-04-18', 'Nisan Rai'),
(29, '', 'Microfinance Activities', '', '', 'microfinanceactivities', 'submenu', '5', '1', '1', '1', 8, '2021-04-18', 'Nisan Rai'),
(30, '', 'Microfinance Deposit Schemes', '', '', 'microfinancedepositschemes', 'submenu', '5', '1', '1', '1', 8, '2021-04-18', 'Nisan Rai'),
(31, '', 'Microfinance Credit Facilities', '', '', 'microfinancecreditfacilities', 'submenu', '5', '1', '1', '1', 8, '2021-04-18', 'Nisan Rai'),
(32, '', 'Social Security Policy', '', '', 'socialsecuritypolicy', 'submenu', '5', '1', '1', '1', 8, '2021-04-18', 'Nisan Rai'),
(33, '', 'Other', '', '', 'other', 'submenu', '5', '1', '1', '1', 8, '2021-04-18', 'Nisan Rai'),
(34, '', '', 'Business Overdraft Loan', '', 'businessoverdraft', 'child', '41', '1', '1', '1', 1, '2021-07-26', 'Nisan Rai'),
(35, '', '', 'Personal Overdraft Loan', '', 'personaloverdraft', 'child', '41', '1', '1', '1', 1, '2021-07-26', 'Nisan Rai'),
(36, '', '', 'Personal Term Loan', '', 'personalterm', 'child', '42', '1', '1', '1', 1, '2021-07-26', 'Nisan Rai'),
(37, '', '', 'Business Term Loan', '', 'businessterm', 'child', '42', '1', '1', '1', 1, '2021-07-26', 'Nisan Rai'),
(38, '', 'Hire Purchase Loan', '', '', 'hirepurchase', 'submenu', '4', '1', '1', '1', 8, '2021-07-22', 'Nisan Rai'),
(39, '', 'Gold Loan', '', '', 'goldloan', 'submenu', '4', '1', '1', '1', 8, '2021-07-22', 'Nisan Rai'),
(40, '', '', 'Agriculture Overdraft Loan', '', 'agricultureloan', 'child', '41', '1', '1', '1', 1, '2021-07-26', 'Nisan Rai'),
(41, '', 'Overdraft Loan', '', '', 'overdraftloan', 'submenu', '4', '1', '1', '1', 1, '2021-07-26', 'Nisan Rai'),
(42, '', 'Term Loan', '', '', 'termloan', 'submenu', '4', '1', '1', '1', 2, '2021-07-26', 'Nisan Rai'),
(43, '', 'Deprived Sector Loan', '', '', 'deprivedsector', 'submenu', '4', '1', '1', '1', 3, '2021-07-26', 'Nisan Rai'),
(44, '', 'Subsidy Loan', '', '', 'subsidyloan', 'submenu', '4', '1', '1', '1', 4, '2021-07-26', 'Nisan Rai'),
(45, '', '', 'Deprived Sector Schedule', '', 'deprivedsectorschedule', 'child', '43', '1', '1', '1', 9, '2021-07-26', 'Nisan Rai'),
(46, '', '', 'Deprived Sector Non-schedule', '', 'deprivedsectornonschedule', 'child', '43', '1', '1', '1', 9, '2021-07-26', 'Nisan Rai'),
(47, '', '', 'Women Entrepreneurship OD', '', 'womenentrepreneur', 'child', '44', '1', '1', '1', 9, '2021-07-26', 'Nisan Rai'),
(48, '', '', 'Women Entrepreneurship Term Loan', '', 'womenentrepreneurshipterm', 'child', '44', '1', '1', '1', 9, '2021-07-26', 'Nisan Rai'),
(49, '', '', 'Agriculture OD loan', '', 'agricultureodloan', 'child', '44', '1', '1', '1', 9, '2021-07-26', 'Nisan Rai'),
(50, '', '', 'Agriculture Term Loan', '', 'agriculturetermloan', 'child', '44', '1', '1', '1', 9, '2021-07-26', 'Nisan Rai'),
(51, 'Salapa Bikas Bank Activities (News)', '', '', '', 'activities', 'menu', '', '1', '', '1', 9, '2021-07-26', 'Nisan Rai'),
(52, '', 'Gallery', '', '', 'gallery', 'submenu', '6', '1', '1', '1', 9, '2023-10-11', 'Nisan Rai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_meterial`
--

CREATE TABLE `tbl_meterial` (
  `id` bigint(20) NOT NULL,
  `unitid` bigint(20) NOT NULL,
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meterial` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) NOT NULL,
  `admin` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dates` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_meterial`
--

INSERT INTO `tbl_meterial` (`id`, `unitid`, `category`, `title`, `meterial`, `youtube`, `status`, `admin`, `dates`) VALUES
(1, 2, 'Video', 'Class 6 - Lession-1: Grammer part 1', '03-Feb-2017-02-02-08World Premiere ( Movie - Mero Euta Sathi Cha ) - Sugam Pokha.mp4', '', '1', 'Inayg ', ''),
(2, 2, 'Video', 'Class 6 - Lession-2: Grammer part 2', '03-Feb-2017-03-02-48World premiere - Juni Juni - Sugam Pokhrel _ Rejina Rimal - .mp4', '', '1', 'Inayg ', ''),
(3, 2, 'Audio', 'Class 6 - Lession-3: Listening part 1', '03-Feb-2017-04-02-0319-Jan-17-02-01-59Yadil aasikana.mp3', '', '1', 'Inayg ', ''),
(4, 2, 'Video', 'English Grammer', '', 'Nd4MScADY94', '1', '11-Feb-2017', ''),
(5, 2, 'Video', 'Homework Nepali Movie', '', 'Wy46ClGoAI0', '1', '11-Feb-2017', ''),
(9, 3, 'Video', 'Gravity and Force', '', '_q2r9nvnSn4', '1', 'Inayg ', '27-Feb-2017'),
(11, 25, 'Video', 'English 2073 10 06 Vacancy', '', 'hItd4uS3gss', '1', 'Inayg ', '04-Mar-2017'),
(13, 5, 'Audio', 'Lesson - 2 : Poem (Stopping by Woods)', '06-Mar-2017-03-03-253Shaichhik 2072.08.27 Sun Eng_.B (Poem --Stopping by woods).mp3', '', '1', 'Inayg ', '06-Mar-2017'),
(14, 27, 'Audio', 'C10SCU9 - Heridity', '06-Mar-2017-03-03-191Shaichhik 2072.09.21 Tue Science _.B (Heridity).mp3', '', '1', 'Inayg ', '06-Mar-2017');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `id` bigint(20) NOT NULL,
  `title` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `projectfile` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `admin` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dates` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`id`, `title`, `projectfile`, `category`, `admin`, `dates`) VALUES
(7, 'Question Bank', 'PGD question 63,64,65,67,68, &69.pdf', 'Library', '7', '2016-01-05'),
(8, 'Counseling Case and Report Writing', '7Paper~Case~ APA writing 2014.pdf', 'Library', '7', '2016-01-05'),
(9, 'Counseling - Guidelines for Counseling', '8Counseling ~ Guidelines for Counselling.pdf', 'Library', '7', '2016-01-05'),
(10, 'Assessment - Role of Assessment in Counseling', '9Assessment ~ Role of Assessment in Counseling.pdf', 'Library', '7', '2016-01-05'),
(11, 'Assessment - Assessment Summary example', '10Assessment ~ Simple Assessment Summary.pdf', 'Library', '7', '2016-01-05'),
(12, 'What is Mental Illness?', '11What Is Mental Illness  2011 Richard J. McNally.pdf', 'Library', '7', '2016-01-05'),
(13, 'Coping with stress 1', '12Paper 1. unit IV. Coping with stress.pdf', 'Library', '7', '2016-01-05'),
(14, 'Reactions to Stress 2', '13Paper 1. unit IV. Reaction to stress.pdf', 'Library', '7', '2016-01-05'),
(15, 'Sources of stress 3', '14Paper 1. unit IV. Sourses of stress.pdf', 'Library', '7', '2016-01-05'),
(16, 'Stress Coping & Adaptation 4', '15Paper 1. unit IV. Stress ,coping,& adaptation (1).pdf', 'Library', '7', '2016-01-05'),
(17, 'Basic Counseling Skills (Book)', '16Basic counseling skills.pdf', 'Library', '7', '2016-01-05'),
(18, 'Process of Counseling (in Nepali)', '17Process of Counseling NEPALI.pdf', 'Library', '7', '2016-01-05'),
(19, 'Method Developmental Psychology Paper I', '18METHODs of Developmental Study cpssc 2012.pdf', 'Library', '7', '2016-01-05'),
(20, 'Report on Older People: A Report of Govt. of Nepal', '19nepal Status Report on Older People.pdf', 'Library', '7', '2016-01-05'),
(21, 'Counseling (In Africa) - For Light Reading', '20Counseling ~ African Experience.pdf', 'Library', '7', '2016-01-05'),
(22, 'CHILD PSYCHOPATHOLOGY - ', '21CHILD PSYCHOPATHOLOGY - Robert T. Ammerman.pdf', 'Library', '7', '2016-01-05'),
(23, 'CBT Thought record', '22CBT_Thought_Record.pdf', 'Library', '7', '2016-01-05'),
(24, 'CBT Book', '23CBT (Judith Beck).pdf', 'Library', '7', '2016-01-05'),
(25, 'Counseling Skill', '24Active listening Communication Skills 2 [Compatibility Mode].pdf', 'Library', '7', '2016-01-05'),
(26, 'Counseling Skill', '25Mental Health and Psychosocial Support in Emergency Settings handout.pdf', 'Library', '7', '2016-01-05'),
(27, 'Counseling Skill', '26Mental Health and Psychosocial Support in Emergency Settings.pdf', 'Library', '7', '2016-01-05'),
(28, 'Books on counseling', '27Theory and Practice of Counseling and Psychotherapy 8th - Corey.pdf', 'Library', '11', '2016-01-13'),
(29, 'Counseling book', '28Essential Interveiwing and couselling Skills - Tracy A. Prout & Melanie J Wadkins.pdf', 'Library', '11', '2016-01-13'),
(30, 'ADHD', '29ADHD.pdf', 'Library', '11', '2016-01-13'),
(31, 'Book on CBT', '30Case Formulation Approach in CBT.pdf', 'Library', '11', '2016-01-13'),
(32, 'Mental Health', '31II Paper Mental health.pptx', 'Library', '11', '2016-04-17'),
(33, ' Notes on Mental Health by Sarita Pradhan', '32dissociative (Conversion) disorder.pptx', 'Library', '11', '2016-04-17'),
(34, 'Notes on Mental Health by Sarita Pradhan', '33Etiology of mental illness.ppt', 'Library', '11', '2016-04-17'),
(35, 'Notes on Mental Health by Sarita Pradhan', '34Historical overview of Mental health.ppt', 'Library', '11', '2016-04-17'),
(36, 'Notes on Mental Health by Sarita Pradhan', '35stress and stressor.pptx', 'Library', '11', '2016-04-17'),
(37, 'Notes on Mental Health by Sarita Pradhan', '36CPSS note.docx', 'Library', '11', '2016-04-17'),
(38, 'Notes on Mental Health by Sarita Pradhan', '37stress and stressor.pptx', 'Library', '11', '2016-04-17'),
(39, 'Paper I, Unit 1', '38Unit_1_Narendra.ppt', 'Library', '11', '2016-05-05'),
(40, 'Paper I, Unit 1', '39aca-code-of-ethics.pdf', 'CPSSC News', '11', '2016-05-05'),
(41, 'Counseling code of Conduct', '40aca-code-of-ethics.pdf', 'Library', '11', '2016-05-05'),
(42, 'Paper 1, unit III', '41PRINT IT - PGD Notebook -  1st Paper III unit - THEORIES FINAL.pdf', 'Library', '11', '2016-05-18'),
(43, 'Paper 1, unit 1', '42Paper I unit I - PGD Psy Introduction.pdf', 'Library', '11', '2016-05-18'),
(44, 'Paper I Emotion', '43Emotion.pdf', 'Library', '11', '2016-05-19'),
(45, 'Paper 1 unit 1 and 2', '44Paper I unit I - PGD Psy Introduction.pdf', 'Library', '11', '2016-05-19'),
(46, 'WHO materials', '4516 WHO & MHPN (2006) ~ Mental Health System in Nepal  WHO-AIMS_Report.pdf', 'Library', '11', '2016-05-23'),
(47, 'WHO materials 2', '4618 WHO ~ Mental health systems in selected low- and.pdf', 'Library', '11', '2016-05-23'),
(48, 'PFA, Psychological First Aid', '47WHO psychological_first_aid_guide_for_field_workers.pdf', 'Library', '11', '2016-06-24'),
(49, 'PFA, Psychological First Aid in Nepali', '487 PFA - Nepali- TPO.pdf', 'Library', '11', '2016-06-24'),
(50, 'Community based psychosocial care and support', '49Community Based Psychosocail Training Presentation.pptx', 'Library', '11', '2016-06-24'),
(51, 'Conversion reaction ', '50Conversion_Disorder.pptx', 'Library', '11', '2016-06-26'),
(52, 'Psychosocial intervention ', '51Psychosocial Intervention Binod sir.pdf', 'Library', '11', '2016-06-26'),
(53, 'Psychoeducation ', '52Psychoeducation Binod sir.pdf', 'Library', '11', '2016-06-26'),
(54, 'Course Curriculum', '53Revisied Course PGD.docx', 'Library', '11', '2016-06-30'),
(55, 'Old Questions Bank', '54PGD question 63,64,65,67,68, &69.pdf', 'Library', '11', '2016-06-30'),
(56, 'Psychoeducation process', '55Psychoeducation CPSSC.pdf', 'Library', '11', '2016-07-12'),
(57, 'BRIEF GUIDELINES FOR REPORT WRITING ( Community visit)', '56Dear all.docx', 'CPSSC News', '11', '2016-07-15'),
(59, 'Guigeline for community report', '58Guideline for communirt reports.docx', 'Library', '11', '2016-07-15'),
(60, 'Person Centered Approach, paper III', '594  Person centered Therapy - Gerald Corey (1).pdf', 'Library', '11', '2016-07-16'),
(61, ' Counseling an introduction', '60Counseling - An introduction to counselling 3RD EDITION-  McLeod.0001.pdf', 'Library', '11', '2016-07-16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `id` bigint(20) NOT NULL,
  `classid` bigint(20) NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`id`, `classid`, `subject`, `status`) VALUES
(1, 6, 'English', 1),
(2, 6, 'Nepali', 1),
(3, 1, 'English', 1),
(4, 1, 'Math', 1),
(5, 1, 'Science', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unit`
--

CREATE TABLE `tbl_unit` (
  `id` bigint(20) NOT NULL,
  `subjectid` bigint(20) NOT NULL,
  `unit` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_unit`
--

INSERT INTO `tbl_unit` (`id`, `subjectid`, `unit`, `status`) VALUES
(3, 5, 'Unit - 1 : Gravity and Force', 1),
(4, 3, 'Unit -1 : Grammar', 1),
(5, 3, 'Unit -2 : Reading', 1),
(6, 3, 'Unit -3 : Writing', 1),
(7, 3, 'Unit -4 : Listening', 1),
(8, 3, 'Unit - 5 : Speaking', 1),
(9, 4, 'Lesson : 1: क्षेत्र १ : समूह (SETS)', 1),
(10, 4, 'Lesson : 2.1 :: अंक गणित (ARITHMETIC)', 1),
(11, 4, 'Lesson : 3.1: त्रिभुजाकार प्रिज्म', 1),
(12, 4, 'Lesson : 3.2: बेलना, गोला, अर्धगोला र सोली (Cylinder, Sphere, Hemisphere and Cone)', 1),
(13, 4, 'Lesson : 3.3: पिरामिड (Pyramid)', 1),
(14, 4, 'Lesson : 4: ल.स. र म.स. (H.C.F. and L.C.M.)', 1),
(15, 4, 'Lesson : 4.2: बिजिय भिन्नहरूकाे सरलीकरण (Simplification of Algebraic Fractions)', 1),
(16, 4, 'Lesson : 4.3: घातांक (Indices)', 1),
(17, 4, 'Lesson : 4.4: मूल र सर्डहरू (Root and Surds)', 1),
(18, 4, 'Lesson : 4.5: युगपत रेखीय समीकरण र वर्ग समीकरण सम्बन्धी शाब्दिक समस्याहरू (Verbal Problems of Simultaneous Equation and Quadratic Equation)', 1),
(19, 4, 'Lesson : 4.6: युगपद रेखिय समिकरण (Simultaneous equation)', 1),
(20, 4, 'Lesson : 4.7: वर्ग समिकरण (Quadratic Equations)', 1),
(21, 4, 'Lesson : 5: ज्यामिती (Geometry)', 1),
(22, 4, 'Lesson : 6: त्रिकोणमिति (Trigonometry)', 1),
(23, 4, 'Lesson : 7: तथ्यांक शास्त्र (Statistics)', 1),
(24, 4, 'Lesson : 8: सम्भाव्यता (Probability)', 1),
(25, 3, 'Unit 3.7 : Letter Writing', 1),
(26, 2, 'Unit 1:', 1),
(27, 5, 'Unit - 9 Classification of animal and Plants, Ecological System & Heridity', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(20) NOT NULL,
  `name` varchar(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `work` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `status` varchar(5) NOT NULL,
  `authority` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `address`, `gender`, `image`, `work`, `position`, `contact`, `username`, `password`, `status`, `authority`) VALUES
(7, 'Nisan Chamling Rai', 'Khotang, Khidima - 9', 'Male', 'Nisan-Rai-Chamling.jpg', 'Our NITS', 'Web Site Developer ', '+977-9848780991', 'mail.nisanrai@gmail.com', 'nisan@1891', '1', 'yes'),
(8, 'CPSSC', 'Bijulibazar, Kathmandu', 'Male', 'logo.png', 'CPSSC', '', '', 'cpssc', 'cpsscq2006', '1', 'yes'),
(11, 'Bijaya Bijukachhe', 'Balaju', 'Female', '', 'CPSSC', 'Principal', '9851221251', 'beeznp@gmail.com', 'nepal@1234', '1', 'yes'),
(12, 'Bal Krishna Maharjan', 'Nabahal, Lalitpur', 'Male', '', '', '', '', 'balkrishna.mjn@gmail.com', '12345', '1', ''),
(13, 'Chhitiz Kiran Shrestha', 'Chhetrapati, Dhalko', 'Male', 'Square.jpg', 'One.E.Seven Pvt. Ltd.', 'Chairman', '9851100008', 'chhitiz.kiran@gmail.com', 'keyrun', '1', ''),
(14, 'Ujjwal Basnet', 'Anamnagar 32, Kathmandu, Nepal', 'Male', '', '', '', '9841906549', 'ujjwalbasnet@gmail.com', 'ujwl@78bas', '1', ''),
(17, 'amita', 'lazimpat', 'Female', '', 'CPSSC', 'Student', '9808060888', 'amytamukhia@gmail.com', 'CPSSCPGD', '1', ''),
(18, 'rajan bista', 'kathmandu', 'Male', '', 'nepal apf hospital', 'Sub-Inspector', '9851259608', 'rajan-med@hotmail.com', 'budhanilkantha11', '1', ''),
(20, 'Prasant Timilsina', 'Koteshwor', 'Male', '', 'Cg', 'Area sales Manager', '9849071823', 'Alwaysprashan2@gmail.com', 'Sonuiloveyou', '1', ''),
(22, 'surya bdr gandhrba', 'sunwal-6 nawalparasi', 'Male', '20received_552520441581691.jpeg', 'cpssc', 'student', '+9779867122430', 'suryagandhrba@47gmail.com', 'surya47', '1', ''),
(27, 'Chhitizkiran', 'Chhetrapati, Dhalko', 'Male', '22sc.bmp - Copy (2).jpg', 'One.E.Seven Pvt. Ltd.', 'Chairman', '9851100008', 'chhitiz.kiran@gmail.com', 'keyrun', '1', ''),
(29, 'Usha Mishra', 'Koteshwor-Kathmandu', 'Female', '28Usha.jpg', 'Alliance for Social Dialogue(ASD)', 'Training-Coordinator', '+977--9841034895', 'mishra.usha87@gmail.com', '9803637996rp', '1', ''),
(30, 'surya bahadur gandhrba', 'sunwal-6 nawalparasi', 'Male', '', 'counseling psychology and social study college', 'student', '+9779867122430', 'suryagandhrba@47gmail.com', 'kanxu47', '1', ''),
(31, 'surya bahadur gandhrba', 'sunwal-6 nawalparasi, and lalitpur gwarko', 'Male', '301795493_469297619903974_1247734266651645611_n.jpg', 'counseling psychology and social study college', 'student', '+9779867122430', 'surajsing280@yahoo.com', 'nepal123', '1', ''),
(32, 'Ramhari K.C.', 'Dandakharka-7, Dolakha', 'Male', '31DSC_9918.JPG', 'Nepal Army, GoN', 'Lt.Col.', '9841987011', 'ramhari.kc@gmail.com', 'ramharikc', '1', ''),
(33, 'Alina Panta', 'Tilganga', 'Female', '', '', '', '9849043566', 'pantaaleena@gmail.com', 'gurukripa123', '1', ''),
(34, 'rajan bista', 'kathmandu', 'Male', '', 'nepal apf hospital', 'Sub-Inspector', '9851259608', 'rajan-med@hotmail.com', 'budhanilkantha', '1', ''),
(35, 'DR dahal', 'new baneshor', 'Male', '', 'cpssc', 'student', '9851193133', 'lifecoachdahal@gmail.com', 'lifecoach', '1', ''),
(38, 'Tara K.C', 'Chabahil', 'Female', '', '', '', '9860153282', 'cpssc', '117454', '1', ''),
(39, 'nirmala gurung', 'baniyatr', 'Female', '', 'cpssc', 'student', '9803124499', 'tamunirmala17@gmail.com', 'gurung1', '1', ''),
(41, 'Ramesh Pandey', 'Pokhara-15, Nayagaun kaski', 'Male', '40297954_275432372472120_3920791_n.jpg', '3Angels Nepal', 'School Principal', '061-430-298, 98560-3', 'ramesh@3angelsnepal.org.np', 'basanta12', '1', ''),
(42, 'phul kumari lama', 'pokhara-15', 'Female', '', '', '', '9856072892', 'phullama@yahoo.com', 'mendies', '1', ''),
(44, 'sarita pradhan', 'Gwarko lalitpur', 'Female', '', 'cpssc', 'lecturer', '9841352551', 'saritapradhan20@yahoo.com', 'jajarkot2069', '1', ''),
(47, 'Bikesh Shahi', 'Prayag Pokhari', 'Male', '461378994579476.jpg', 'Sahaayam Nepal', 'Technical Advisor', '9802078434', 'bkeshahi@hotmail.com', 'bkesandhyya', '1', ''),
(48, 'Manoj Acharya', 'Kathmandu, Nepal', 'Male', '', '', '', '9851157142', 'macharyajee@gmail.com', 'nepal', '1', ''),
(50, 'Jyotsana Simha Thakuri', 'New Baneshwor', 'Female', '423129_353415558017061_100000458599851_1275791_1600016631_n copy.jpg', '', 'PGD', '9851174108', 'jsimha9@gmail.com', 'me2day', '1', ''),
(53, 'Salina', 'Balaju, Machhapokhari< Kathmandu', 'Female', '52487335_335922613160407_1269725889_n.jpg', 'Maya Outreach Cancer relief Organisation', 'Office Secretary', '9861069464', 'salu4230@gmail.com', 'sansa1', '1', ''),
(55, 'Jennie Upadhyaya', 'Old Baneshwor', 'Female', '', 'Malpi City School', 'Teacher', '9851234638 , 9813464', 'tmn.jnu@gmail.com', 'jennie123', '1', ''),
(59, 'Aswin Shrestha', 'Sanepa, Lalitpur', 'Male', '5513063877_1325536387475882_1759021077_o.jpg', 'Udeshya Paribarthan', 'Board Member', '9803083676', 'aswinshrestha62@gmail.com', 'vortex007', '1', ''),
(61, 'Phanindra Adhikari', 'Bansbari, Kathmandu', 'Male', '', 'CVICT', 'Administrator', '9841341587', 'phanindra06@gmail.com', '2029pha*.@C', '1', ''),
(62, 'avash joshi', 'tahachal', 'Male', '', '', '', '', 'avash_joshi@hotmail.com', 'deathmetal', '1', ''),
(64, 'Tika Maden Limbu', 'Teenkune, Kathmandu', 'Female', '', '', '', '98412-69331', 'akit23_gemini@yahoo.com', 'cpssc666', '1', ''),
(67, 'Bikesh Shahi', 'PrayagPokhari', 'Male', '66DSCN3000.jpg', 'Sahaayam Nepal', 'Technical Advisor', '9802078434', 'bkeshahi@hotmail.com', 'bkesandhyya', '1', ''),
(68, 'Avash', 'Tachal', 'Male', '', 'samarthan nepal', 'volunter staff', '9813111477', 'avash_joshi@hotmail.com', 'deathmetal', '1', ''),
(69, 'Tika Maden', 'Tinkune', 'Female', '', '', '', '9841269331', 'akit23_gemini@yahoo.com', 'cpsse666', '1', ''),
(70, 'Niraj ', 'Shorhakhutte,Nayabazar', 'Male', '5-handling-success.jpg', '', '', '98510-63715', 'nivaan_t43@hotmail.com', 'Garlic@123', '1', ''),
(74, 'Manoj Acharya', 'Kathmandu, Nepal', 'Male', '', '', '', '9851157142', 'macharyajee@gmail.com', 'meronepal', '1', ''),
(76, 'MONICA BHATTACHAN', 'Hattigauda', 'Female', '7520150115_120529.jpg', 'J.F.Institute of Health Sciences', 'Faculty', '9841338634', 'monicabhattachan@yahoo.com', 'emotion', '1', ''),
(77, 'mina khaniya', 'sinamangal', 'Female', '', 'not yet', 'student', '9809498992', 'flowerlittle50@yahoo.com', 'america179', '1', ''),
(79, 'Suvash Bhattarai', 'Bharatpur-12, Chitwan', 'Male', '', '', '', '9845053668', 'cosmicsuvash2012@gmail.com', 'neocounselor', '1', ''),
(80, 'Jennie Upadhyaya', 'Old Baneshwor', 'Female', '', 'Malpi City School', 'Teacher', '9813464638, 98512346', 'tmn.jnu@gmail.com', 'jennie123', '1', ''),
(81, 'Sagar Pandey', 'Chavel', 'Male', '', '', '', '9847147605', 'sagar.pandey2068@gmail.com', 'sagarsitaramesh', '1', ''),
(82, 'Phanindra Adhikari', 'Bansbari, Kathmandu', 'Male', '', 'CVICT', 'Administrator', '9841341587', 'phanindra06@gmail.com', '2029pha*.@C', '1', ''),
(83, 'Phanindra Adhikari', 'Bansbari, Kathmandu', 'Male', '82phanindra.jpg', 'CVICT', 'Administrator', '9841341587', 'phanindra06@gmail.com', '2029pha*.@C', '1', ''),
(91, 'Mina Khaniya', 'Tinkune, Ktm', 'Female', '90Sutu 7th.jpg', 'CPSSC', 'Student', '9809498992', 'freekingdom300@gmail.com', 'leoniders300', '1', ''),
(92, 'Saugat Raj Basnet', 'Balaju-16, Machhapokhari', 'Male', '', 'Green Path Nepal', 'Program Officer', '9841694805', 'S2ndofficial@outlook.com', 'Apsychology', '1', ''),
(93, 'Rita Gautam', 'Banasthali', 'Female', '', '', '', '9851187853', 'ritagautam.lamsal@gmail.com', 'deepaklamsal', '1', ''),
(94, 'Dinanath Fayal', 'Banepa Municipality-3, Krishimarga, Krishnanagar.', 'Male', '', '', '', '9841404697', 'dinanath_fayal@yahoo.com', 'shyam', '1', ''),
(95, 'Asmita Thapa', 'Samakhusi, Kathmandu', 'Female', '', 'Karuna Foundation Nepal', 'Program Officer', '9851169505', 'ashmita.thapa53@gmail.com', 'asmita7789', '1', ''),
(96, 'prasanna malla', 'naxal, kathmandu', 'Male', '', 'chelsea international academy', 'teacher', '9843641954', 'prasannamalla015@gmail.com', 'rockstar182', '1', ''),
(98, 'Poonam Rana ', 'Lakitpur,Nepal', 'Female', '', '', '', '', 'ranap304@gmail.com', 'jayadev', '1', ''),
(101, 'Narendra Singh Thagunna', 'CPSSC Buddhanagar', 'Male', '', 'CPSSC', '', '', 'thagunnanarendra81@gmail.com', 'anurakshat', '1', ''),
(102, 'charu', 'chabahil', 'Female', '10111027501_10205992290795219_4848347762932383322_n.jpg', '', '', '9841-554974', 'koiralacharu@gmail.com', 'charun1478', '1', ''),
(103, 'Rita balami', 'Pharping', 'Female', '', 'Dav college', 'lecturer', '9841365291', 'balamiritu@gmail.com', 'suhanrup', '1', ''),
(105, 'arjun nepal', 'koteshwor', 'Male', '', 'cfm', 'producer', '9803032959', 'nepal65arjun@gmail.com', 'arjunkajol', '1', ''),
(106, 'sujan Gurung', 'Maharajgunj', 'Female', '', 'Bikalpa Gyan Tatha Bikas Kendra ', 'Children Counselling Program Incharge', '9841603827', 'sujan1gurung@gmail.com', 'saralagrg8', '1', ''),
(107, 'Saraswati Tharu', 'Bardiya ', 'Female', '', '', '', '', 'Sarusaraswatibaslc@gmail.com', 'Koomaarah', '1', ''),
(108, 'Jennie Upadhyaya', 'Old Baneshwor', 'Female', '', 'Malpi City School', 'Grade Teacher', '9851234638', 'tmn.jnu@gmail.com', 'tamanna123', '1', ''),
(109, 'sujan gurung ', 'bansabri sallaghari', 'Female', '108FB_IMG_1461786058537_1.jpg', 'Bikalpa Gyan Tatha Bikas Kendra', 'Children Counselling Program Incharge', '9841603827', 'sujan1gurung@gmail.com', 'saralagrg8', '1', ''),
(110, 'Sagar Pandey', 'Kathmandu', 'Male', '', '', '', '9847147605', 'sagar.pandey2068@gmail.com', 'sagarsitaramesh', '1', ''),
(111, 'Udaya Chalise ', 'Boudha ,Kathmandu ', 'Male', '110image.jpg', 'Tevel Nepal ', 'Fellows ', '9810100500', 'chaliseudaya@yahoo.com', 'fuckuman123', '1', ''),
(113, 'Nisan Rai', 'Khotang', 'Male', '', 'BTech Nepal', 'CEO', '9843358296', 'mail.nisanrai@gmail.com', 'nisan', '1', ''),
(114, 'Dilip Khadka', 'Chhetrapa-1 Dolakha', 'Male', '', 'CPSSC Batch #9', 'Student', '9851096063', 'dilip.dkhadka@gmail.com', 'memory', '1', ''),
(115, 'Tika Maden Limbu', 'Teenkune', 'Female', '', '', '', '9841269331', 'akit23_gemini@yahoo.com', 'cpssc666', '1', ''),
(120, 'Yeshu lama(tamang)', 'Satungal,pradhikaran', 'Female', '119944098_1635684010030176_6436567339460660910_n.jpg', 'Nyayik sansar/Tevel Nepal', 'Past fellows', '9813129854', 'Spacedout619@gmail.com', 'loveosho', '1', ''),
(121, 'Yeshu lama(tamang)', 'Satungal,pradhikaran', 'Female', '120944098_1635684010030176_6436567339460660910_n.jpg', 'Nyayik sansar/Tevel Nepal', 'Past fellows', '9813129854', 'Spacedout619@gmail.com', 'loveosho', '1', ''),
(123, 'Abhiraj Acharya', 'Godawari, Lalitpur', 'Male', '122abhi (2).jpg', 'Self Employed', '', '9851153132', 'abhirajacharya@gmail.com', 'COLaviraj1811', '1', ''),
(125, 'Dilip ', 'Khadka', 'Male', 'dddd.jpg', 'CPSSC Batch #9', 'Student', '9851096063', 'dilip.dkhadka@gmail.com', 'memory1717', '1', ''),
(127, 'Iru Poudel', 'Chahabil', 'Female', '', 'Om Hospital', 'Assistant director', '9813658642', 'iru.poudel@gmail.com', 'shaswat', '1', ''),
(128, 'Abhiraj Acharya', 'Godawari, Lalitpur', 'Male', '127abhi (2).jpg', '', '', '9851153132', 'abhirajacharya@gmail.com', 'COLaviraj1811', '1', ''),
(135, 'bikal kumar basnet ', 'madhaypur thimi', 'Male', '', '', '', '9808695794 ', 'betanir061@gmail.com ', 'downtown061', '1', ''),
(136, 'Richa Sapkota', 'Dhapakhel', 'Female', '135upload.jpg', 'NA', 'NA', '9841032055', 'sapkota.richa@gmail.com', 'anusuya@24', '1', ''),
(137, 'IruPoudel', 'Shantigoreto', 'Female', '136Untitled-1 (2).jpg', '', 'Asst Director/Marketing', '9813658642', 'iru.poudel@gmail.com', 'marketing', '1', ''),
(138, 'Asim Ali', 'Sankamul', 'Male', '', 'Tevel Nepal', 'Intern', '9802656707', 'Trigger707aa@gmail.com', 'plzopen707', '1', ''),
(139, 'prasannamalla015@gmail.com', 'kalopool,kathmandu,Nepal', 'Male', '', 'chelsea international academy', 'teacher', '9843641954', 'prasannamalla015@gmail.com', 'counsellor182', '1', ''),
(148, 'Dilip Khadka', 'Chhetrapa-01 Dolakha', 'Male', '', 'Student', 'Student', '9851096063', 'dilip.dkhadka@gmail.com', 'memory17', '1', ''),
(149, 'saraswati mishra', 'gajuri 1 dhading', 'Female', '', 'ICDC -nepal', 'PSC', '9841838651', 'smishra2072@gmail.com', 'jhapali12', '1', ''),
(150, 'shanta rimal', 'Dhading', 'Female', 'BeautyPlus_20160214080712_fast.jpg', 'ICDC Nepal', 'CPSW', '9851243009', 'shanta.rimal.775@facebook.com', 'sirishrimal', '1', ''),
(151, 'Iru Poudel', 'Kathmandu', 'Female', '', 'OM', '', '9813658642', 'iru.poudel@gmail.com', '9813shaswat', '1', ''),
(152, 'Jyotsna ', 'Baluwatar', 'Female', '', 'Malpi ', 'Consultant', '9849274135', 'Sherchanjyotsna@gmail.com', 'biztheliz', '1', ''),
(153, 'Pratikshya Sharma', 'Bhainsepati', 'Female', '152UBAX7682.png', 'Samriddhi College', 'Lecturer and Filed Supervisor', '9841415684', 'pratiksyasharma@gmail.com', 'darkartemis', '1', ''),
(154, 'Jyotsna Sherchan', 'Baluwatar', 'Female', '', 'Malpi international school', 'Consultant ', '9849274135', 'Sherchanjyotsna@gmail.com', 'biztheliz', '1', ''),
(156, 'Ratna Maya Lama', 'Boudha-6', 'Female', '', 'TPO Nepal', 'M & E officer', '9841660687', 'rmlama@gmail.com', 'tponepal1', '1', ''),
(157, 'Pratikshya Sharma', 'Bhainsepati', 'Female', '156Instasize_0111184449.jpg', 'Samriddhi College', 'Lecturer and Filed Supervisor', '9841415684', 'pratiksyasharma@gmail.com', 'psychologydream', '1', ''),
(158, 'angirash', 'bhaktapur', 'Male', '157DSC02875.JPG', '', '', '9818564030', 'ghimireangirash@gmail.com', 'hait', '1', ''),
(159, 'Rita Dahal', 'Dhulabari,Jhapa', 'Female', '', 'TPO-Nepal', 'Psychosocial Counselor', '9806081998', 'ritadahal05@gmail.com', '9806081998', '1', ''),
(160, 'Rita Dahal', 'Dhulabari,Jhapa', 'Female', '', 'TPO-Nepal', 'Psychosocial Counselor', '9806081998', 'ritadahal05@gmail.com', '9806081998', '1', ''),
(161, 'Arjun Kumar Ghimire', 'Damak- 12, Jhapa', 'Male', '1605001.jpg', 'TPO alliance', 'Assistant Trainer (Six Months Psychosocial Counseling Training)', '9842630913', 'arjunkumarghimire@gmail.com', 'impossible69', '1', ''),
(162, 'bishnu maya paudel', ' Baneshwor', 'Female', '', 'CWINNepal', 'counselor', '9842087278', 'bishnupaudel@gmail.com', 'gauravi8', '1', ''),
(163, 'Bishnu Maya paudel ', 'Morang', 'Female', '', 'CWIN Nepal ', 'Psychosocial Counselor', '9842087278', 'bishnu.cwinbrt@gmail.com', 'biratnagar', '1', ''),
(164, 'Pradip Parajuli', 'Jorpati, Kathmandu', 'Male', '163profile picture.jpg', 'SOS Children\'s Village', 'Counselor', '+977-9851123517', 'pradip70@hotmail.com', 'Kathmandu123', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `id` bigint(20) NOT NULL,
  `videos` varchar(100) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `types` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(2) NOT NULL,
  `feature` varchar(2) NOT NULL,
  `del` varchar(2) NOT NULL,
  `admin` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dates` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`id`, `videos`, `title`, `types`, `image`, `status`, `feature`, `del`, `admin`, `dates`) VALUES
(9, 'VHfeFoaXPJM', 'Conference', 'conference', '', '1', '1', '1', 'Nisan Rai', '2016-01-06'),
(10, '05zeFj7ykfc', 'CPSSC Video', 'conference', '', '1', '1', '1', 'Nisan Rai', '2016-01-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_add`
--
ALTER TABLE `tbl_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_captcha`
--
ALTER TABLE `tbl_captcha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_class`
--
ALTER TABLE `tbl_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_companyprofile`
--
ALTER TABLE `tbl_companyprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_content`
--
ALTER TABLE `tbl_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery_category`
--
ALTER TABLE `tbl_gallery_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_membertype`
--
ALTER TABLE `tbl_membertype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_meterial`
--
ALTER TABLE `tbl_meterial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_unit`
--
ALTER TABLE `tbl_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_add`
--
ALTER TABLE `tbl_add`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_captcha`
--
ALTER TABLE `tbl_captcha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_class`
--
ALTER TABLE `tbl_class`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_companyprofile`
--
ALTER TABLE `tbl_companyprofile`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_content`
--
ALTER TABLE `tbl_content`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `tbl_gallery_category`
--
ALTER TABLE `tbl_gallery_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_membertype`
--
ALTER TABLE `tbl_membertype`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_meterial`
--
ALTER TABLE `tbl_meterial`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_unit`
--
ALTER TABLE `tbl_unit`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
