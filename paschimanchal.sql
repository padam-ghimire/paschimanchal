-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2020 at 07:54 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paschimanchal`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'Paschimanchal Solution Pvt. Ltd. was incorporated in 2010 and in the relatively short period of time since its inception, it has established as a major Optical fiber networking and engineering services in Nepal with a substantial amount of business generated from the wire line. It has established a good working relationship with the key telecom and network players such as NTC, Ncell, China Comservice (C.C.S) Nepal Pvt. Ltd, United Telecom (UTL) and different ISP and Cable TV Networks, private/government entities and emerging new industry players In doing so, the company has also employed highly technical, well disciplined, foreign trained, and field tested and experienced manpower to handle all fiber telecommunication jobs with a professional’s touch.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `job_id`, `name`, `email`, `phone`, `cv`, `created_at`, `updated_at`) VALUES
(1, 1, 'Padam', 'maker@youngminds.com.np', '9860162702', 'cv1605857808.png', '2020-11-20 01:51:48', '2020-11-20 01:51:48');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `app_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_api_end_point` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_access_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_web_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `audits`
--

CREATE TABLE `audits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auditable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auditable_id` bigint(20) UNSIGNED NOT NULL,
  `old_values` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_values` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(1023) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `audit_logs`
--

CREATE TABLE `audit_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` int(11) DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `board_members`
--

CREATE TABLE `board_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `board_members`
--

INSERT INTO `board_members` (`id`, `designation_id`, `name`, `image`, `phone`, `facebook`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tukka Dutta', '1', '01-43222', 'https://www.facebook.com/Paschimanchal-Solution-Pvt-Ltd-111318457329490', NULL, NULL),
(2, 1, 'Tukka Dutta', '1', '01-43222', 'https://www.facebook.com/Paschimanchal-Solution-Pvt-Ltd-111318457329490', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `working_hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `title`, `working_hours`, `salary`, `description`, `short_description`, `created_at`, `updated_at`) VALUES
(1, 'This is title newwwww', '10am-5pm', '500000', '<p>fjskl;a</p><ol><li>fghjkslk</li><li>dhslk;\'</li><li>vghj</li></ol>', 'we want prpject manager needed', '2020-11-20 00:36:39', '2020-11-20 00:39:45');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `queries` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `queries`, `created_at`, `updated_at`) VALUES
(1, 'Padam', 'maker@youngminds.com.np', '9860162702', 'THis is qu34y', '2020-11-19 23:32:13', '2020-11-19 23:32:13');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `short_name`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'India', 'IND', 'active', NULL, NULL, NULL),
(2, 'America', 'USA', 'active', NULL, NULL, NULL),
(3, 'China', 'CHINA', 'active', NULL, NULL, NULL),
(4, 'Canada', 'CANADA', 'active', NULL, NULL, NULL),
(5, 'Nepal', 'NPL', 'active', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(10) UNSIGNED NOT NULL,
  `designation_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation_short_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation_name`, `designation_short_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Programmer', 'programmer', NULL, NULL, NULL),
(2, 'Manager', 'manager', NULL, NULL, NULL),
(3, 'CEO', 'ceo', NULL, NULL, NULL),
(4, 'Designer', 'designer', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `pradesh_id` int(10) UNSIGNED NOT NULL,
  `district_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nepali_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `english_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `pradesh_id`, `district_code`, `nepali_name`, `english_name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 'ताप्लेजुङ', 'Taplejung', NULL, NULL, '2018-01-23 21:11:20'),
(2, 1, '2', 'पाचथर', 'Panchthar', NULL, NULL, '2018-01-23 21:12:34'),
(3, 1, '3', 'ईलाम', 'Ilam', NULL, NULL, '2018-01-23 21:13:05'),
(4, 1, '4', 'झापा', 'Jhapa', NULL, NULL, '2018-01-23 21:13:31'),
(5, 1, '5', 'मोरङ', 'Morang', NULL, NULL, '2018-01-23 21:14:18'),
(6, 1, '6', 'सुनसरि', 'Sunsari', NULL, NULL, '2018-01-23 21:14:20'),
(7, 1, '7', 'धनकुटा', 'Dhankuta', NULL, NULL, '2018-01-23 21:14:55'),
(8, 1, '8', 'तेह्थुम', 'Terhathum', NULL, NULL, '2018-01-23 21:15:33'),
(9, 1, '9', 'Sankhuwasabha', 'Sankhuwasabha', NULL, NULL, NULL),
(10, 1, '10', 'Bhojpur', 'Bhojpur', NULL, NULL, NULL),
(11, 1, '11', 'Solukhumbu', 'Solukhumbu', NULL, NULL, NULL),
(12, 1, '12', 'Okhaldhunga', 'Okhaldhunga', NULL, NULL, NULL),
(13, 1, '13', 'Khotang', 'Khotang', NULL, NULL, NULL),
(14, 1, '14', 'Udayapur', 'Udayapur', NULL, NULL, NULL),
(15, 2, '15', 'सप्तरी', 'Saptari', NULL, NULL, '2018-01-23 21:13:47'),
(16, 2, '16', 'सिरहा', 'Siraha', NULL, NULL, '2018-01-23 21:14:19'),
(17, 2, '17', 'धनुषा', 'Dhanusa', NULL, NULL, '2018-01-23 21:11:18'),
(18, 2, '18', 'महोत्तरी', 'Mahottari', NULL, NULL, '2018-01-23 21:10:58'),
(19, 2, '19', 'Sarlahi', 'Sarlahi', NULL, NULL, NULL),
(20, 3, '20', 'सिन्धुली', 'Sindhuli', NULL, NULL, '2018-01-23 21:11:28'),
(21, 3, '21', 'Ramechhap', 'Ramechhap', NULL, NULL, NULL),
(22, 3, '22', 'Dolakha', 'Dolakha', NULL, NULL, NULL),
(23, 3, '23', 'सिन्धुपाल्चोक', 'Sindhupalchok', NULL, NULL, '2018-01-20 19:50:21'),
(24, 3, '24', 'काभ्रे', 'Kavre', NULL, NULL, '2018-01-23 21:15:38'),
(25, 3, '25', 'Lalitpur', 'Lalitpur', NULL, NULL, NULL),
(26, 3, '26', 'भक्तपुर', 'Bhaktapur', NULL, NULL, '2018-01-20 19:50:15'),
(27, 3, '27', 'काठमाण्डौ', 'Kathmandu', NULL, NULL, '2018-01-20 19:49:31'),
(28, 3, '28', 'Nuwakot', 'Nuwakot', NULL, NULL, NULL),
(29, 3, '29', 'रसुवा', 'Rasuwa', NULL, NULL, '2018-01-23 21:11:24'),
(30, 3, '30', 'धादिङ', 'Dhading', NULL, NULL, '2018-01-23 21:16:09'),
(31, 3, '31', 'Makwanpur', 'Makwanpur', NULL, NULL, NULL),
(32, 2, '32', 'Rautahat', 'Rautahat', NULL, NULL, NULL),
(33, 2, '33', 'बारा', 'Bara', NULL, NULL, '2018-01-23 21:09:33'),
(34, 2, '34', 'पर्सा', 'Parsa', NULL, NULL, '2018-01-23 21:12:26'),
(35, 3, '35', 'चितवन', 'Chitawan', NULL, NULL, '2018-01-23 21:14:04'),
(36, 4, '36', 'गोरखा', 'Gorkha', NULL, NULL, '2018-01-23 21:11:08'),
(37, 4, '37', 'लम्जुङ', 'Lamjung', NULL, NULL, '2018-01-23 21:14:28'),
(38, 4, '39', 'तनहुं', 'Tanahu', NULL, NULL, '2018-01-23 21:11:28'),
(39, 4, '41', 'स्याङ्जा', 'Syangja', NULL, NULL, '2018-01-23 21:12:52'),
(40, 4, '40', 'कास्की', 'Kaski', NULL, NULL, '2018-01-23 21:13:40'),
(41, 4, '41', 'Manang', 'Manang', NULL, NULL, NULL),
(42, 4, '42', 'Mustang', 'Mustang', NULL, NULL, NULL),
(43, 4, '43', 'Myagdi', 'Myagdi', NULL, NULL, NULL),
(44, 4, '44', 'पर्वत', 'Parbat', NULL, NULL, '2018-01-23 21:13:25'),
(45, 4, '45', 'Baglung', 'Baglung', NULL, NULL, NULL),
(46, 5, '46', 'Gulmi', 'Gulmi', NULL, NULL, NULL),
(47, 5, '47', 'Palpa', 'Palpa', NULL, NULL, NULL),
(48, 5, '48', 'Nawalpur', 'Nawalparasi', NULL, NULL, '2018-01-20 19:32:52'),
(49, 5, '49', 'रुपन्देही', 'Rupandehi', NULL, NULL, '2018-01-23 21:41:26'),
(50, 5, '50', 'Kapilbastu', 'Kapilbastu', NULL, NULL, NULL),
(51, 5, '51', 'Arghakhanchi', 'Arghakhanchi', NULL, NULL, '2018-01-19 18:42:33'),
(52, 5, '52', 'Pyuthan', 'Pyuthan', NULL, NULL, NULL),
(53, 5, '53', 'रोल्पा', 'Rolpa', NULL, NULL, '2018-01-23 21:12:38'),
(54, 6, '54', 'रुकुम', 'Rukum', NULL, NULL, '2018-01-23 21:12:25'),
(55, 6, '55', 'Salyan', 'Salyan', NULL, NULL, NULL),
(56, 5, '56', 'दाङ्ग', 'Dang', NULL, NULL, '2018-01-23 21:13:05'),
(57, 5, '57', 'बाँके', 'Banke', NULL, NULL, '2018-01-23 21:11:02'),
(58, 5, '58', 'Bardiya', 'Bardiya', NULL, NULL, NULL),
(59, 6, '59', 'सुर्खेत', 'Surkhet', NULL, NULL, '2018-01-23 21:11:12'),
(60, 6, '60', 'दैलेख', 'Dailekh', NULL, NULL, '2018-01-23 21:16:23'),
(61, 6, '61', 'जाजरकोटट', 'Jajarkot', NULL, NULL, '2018-01-20 19:49:40'),
(62, 6, '62', 'डोल्पा', 'Dolpa', NULL, NULL, '2018-01-23 21:12:06'),
(63, 6, '63', 'जुम्ला', 'Jumla', NULL, NULL, '2018-01-20 19:50:38'),
(64, 6, '64', 'कालिकोट', 'Kalikot', NULL, NULL, '2018-01-20 19:51:00'),
(65, 6, '65', 'मुगु', 'Mugu', NULL, NULL, '2018-01-20 19:54:37'),
(66, 6, '66', 'Humla', 'Humla', NULL, NULL, NULL),
(67, 7, '67', 'Bajura', 'Bajura', NULL, NULL, NULL),
(68, 7, '68', 'बझाङ्ग', 'Bajhang', NULL, NULL, '2018-01-23 21:10:50'),
(69, 7, '69', 'अछाम', 'Achham', NULL, NULL, '2018-01-23 21:10:01'),
(70, 7, '70', 'डोटी', 'Doti', NULL, NULL, '2018-01-23 21:10:18'),
(71, 7, '71', 'Kailali', 'Kailali', NULL, NULL, NULL),
(72, 7, '72', 'Kanchanpur', 'Kanchanpur', NULL, NULL, NULL),
(73, 7, '73', 'Dadeldhura', 'Dadeldhura', NULL, NULL, NULL),
(74, 7, '74', 'बैतडि', 'Baitadi', NULL, NULL, '2018-01-23 21:15:36'),
(75, 7, '75', 'Darchaula', 'Darchaula', NULL, NULL, NULL),
(76, 5, '76', 'पुर्वि रुकुम', NULL, NULL, '2018-01-20 19:30:57', '2018-01-20 19:31:39'),
(77, 5, '77', 'नवलपुर', NULL, NULL, '2018-01-20 19:31:59', '2018-01-20 19:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `category` enum('bug','suggestion','feedback') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fiscal_years`
--

CREATE TABLE `fiscal_years` (
  `id` int(10) UNSIGNED NOT NULL,
  `fy_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fy_start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fy_start_date_localized` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fy_end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fy_end_date_localized` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fy_status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fiscal_years`
--

INSERT INTO `fiscal_years` (`id`, `fy_name`, `fy_start_date`, `fy_start_date_localized`, `fy_end_date`, `fy_end_date_localized`, `fy_status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2017', '2017-1-1', NULL, '2017-12-30', NULL, 'active', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login_fails`
--

CREATE TABLE `login_fails` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fail_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `log_in_ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `log_in_device` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_logs`
--

CREATE TABLE `login_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `log_in_date` date DEFAULT NULL,
  `log_in_device` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `log_in_ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `menu_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_css` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `menu_order` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `menu_name`, `menu_controller`, `menu_link`, `menu_css`, `menu_icon`, `menu_status`, `menu_order`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 0, 'Users', 'UserController', '/user', '', '<i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i>', '1', 2, NULL, NULL, NULL),
(2, 0, 'Roles', '', '', '', '<i class=\"fa fa-wrench\" aria-hidden=\"true\"></i>', '1', 3, NULL, NULL, NULL),
(3, 0, 'Configuration', '', '', '', '<i class=\"fa fa-gears\" aria-hidden=\"true\"></i>', '1', 4, NULL, NULL, NULL),
(4, 0, 'Logs', '', '', '', '<i class=\"fa fa-child\" aria-hidden=\"true\"></i>', '1', 5, NULL, NULL, NULL),
(5, 2, 'Menus', 'MenuController', '/roles/menu', '', '<i class=\"fa fa-list\" aria-hidden=\"true\"></i>', '1', 0, NULL, NULL, NULL),
(6, 2, 'User Groups', 'UserGroupController', '/roles/group', '', '<i class=\"fa fa-group\" aria-hidden=\"true\"></i>', '1', 1, NULL, NULL, NULL),
(7, 2, 'Role Access', 'RoleAccessController', '/roles/roleAccessIndex', '', '<i class=\"fa fa-unlock\" aria-hidden=\"true\"></i>', '1', 2, NULL, NULL, NULL),
(8, 3, 'Designation', 'DesignationController', '/configurations/designation', '', '<i class=\"fa fa-address-card\" aria-hidden=\"true\"></i>', '1', 3, NULL, NULL, NULL),
(9, 3, 'Fiscal Year', 'FiscalYearController', '/configurations/fiscalYear', '', '<i class=\"fa fa-calendar-check-o\" aria-hidden=\"true\"></i>', '1', 5, NULL, NULL, NULL),
(10, 3, 'Department', 'DepartmentController', '/configurations/department', '', '<i class=\"fa fa-building\" aria-hidden=\"true\"></i>', '1', 1, NULL, NULL, NULL),
(11, 3, 'Country', 'CountryController', '/configurations/country', '', '<i class=\"fa fa-map-o\" aria-hidden=\"true\"></i>', '1', 9, NULL, NULL, NULL),
(12, 4, 'Login Logs', 'LogController', '/logs/loginLogs', '', '<i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>', '1', 1, NULL, NULL, NULL),
(13, 4, 'Failed Login Logs', 'LogController', '/logs/failLoginLogs', '', '<i class=\"fa fa-user-times\" aria-hidden=\"true\"></i>', '1', 2, NULL, NULL, NULL),
(14, 0, 'Frontend', '', '', '', '<i class=\"fa fa-wrench\" aria-hidden=\"true\"></i>', '1', 20, NULL, NULL, NULL),
(15, 14, 'Slider', 'SliderController', '/slider', '', '<i class=\"fa fa-gears\" aria-hidden=\"true\"></i>', '1', 11, NULL, NULL, NULL),
(16, 14, 'About', 'AboutController', '/about_us', '', '<i class=\"fa fa-gears\" aria-hidden=\"true\"></i>', '1', 14, NULL, NULL, NULL),
(17, 14, 'Board Members', 'BoardMemberController', '/board_members', '', '<i class=\"fa fa-gears\" aria-hidden=\"true\"></i>', '1', 14, NULL, NULL, NULL),
(18, 14, 'Services', 'ServicesController', '/services', '', '<i class=\"fa fa-gears\" aria-hidden=\"true\"></i>', '1', 15, NULL, NULL, NULL),
(19, 14, 'Why we?', 'WhyWeController', '/whyWe', '', '<i class=\"fa fa-gears\" aria-hidden=\"true\"></i>', '1', 15, NULL, NULL, NULL),
(20, 14, 'Clients', 'ClientsController', '/clients', '', '<i class=\"fa fa-gears\" aria-hidden=\"true\"></i>', '1', 16, NULL, NULL, NULL),
(21, 14, 'Projects', 'ProjectsController', '/projects', '', '<i class=\"fa fa-gears\" aria-hidden=\"true\"></i>', '1', 16, NULL, NULL, NULL),
(22, 14, 'News and Events', 'NewsController', '/news', '', '<i class=\"fa fa-gears\" aria-hidden=\"true\"></i>', '1', 16, NULL, NULL, NULL),
(23, 0, 'Settings', 'SettingsController', '/settings', '', '<i class=\"fa fa-gears\" aria-hidden=\"true\"></i>', '1', 16, NULL, NULL, NULL),
(24, 0, 'Queries', 'ContactController', '/queries', '', '<i class=\"fa fa-gears\" aria-hidden=\"true\"></i>', '1', 16, NULL, NULL, NULL),
(25, 14, 'Career', 'CareerController', '/careers', NULL, '<i class=\"fa fa-calendar-check-o\" aria-hidden=\"true\"></i>', '1', 3, NULL, NULL, NULL),
(26, 14, 'Applicants', 'ApplicantController', '/applicants', NULL, '<i class=\"fa fa-calendar-check-o\" aria-hidden=\"true\"></i>', '1', 22, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2017_11_16_081741_create_pradeshs_table', 1),
(3, '2017_11_16_082004_create_districts_table', 1),
(4, '2017_11_17_021802_create_muni_types_table', 1),
(5, '2017_11_17_022931_create_municipalitys_table', 1),
(6, '2018_01_18_074710_create_countries_table', 1),
(7, '2018_03_19_071106_create_designations_table', 1),
(8, '2018_03_20_070816_create_menus_table', 1),
(9, '2018_03_20_070934_create_user_groups_table', 1),
(10, '2018_03_20_071031_create_fiscal_years_table', 1),
(11, '2018_03_20_071047_create_user_roles_table', 1),
(12, '2018_03_21_000000_create_users_table', 1),
(13, '2018_03_21_103641_create_departments_table', 1),
(14, '2018_03_25_054751_create_login_logs_table', 1),
(15, '2018_03_25_054819_create_login_fails_table', 1),
(16, '2018_03_25_085224_create_audit_log_table', 1),
(17, '2018_03_27_083725_create_office_types_table', 1),
(18, '2018_03_27_083727_create_offices_table', 1),
(19, '2019_02_17_090603_create_feedback_table', 1),
(20, '2020_07_01_080923_create_audits_table', 1),
(21, '2020_07_19_102107_create_applications_table', 1),
(22, '2020_07_19_105006_create_search_groups_table', 1),
(23, '2020_07_19_111408_create_search_access_levels_table', 1),
(24, '2020_11_10_172840_create_sliders_table', 1),
(25, '2020_11_11_052217_create_abouts_table', 1),
(26, '2020_11_11_140704_create_board_members_table', 1),
(27, '2020_11_18_044927_create_services_table', 1),
(28, '2020_11_18_060732_create_why_wes_table', 1),
(29, '2020_11_18_071928_create_clients_table', 1),
(30, '2020_11_18_085434_create_projects_table', 1),
(31, '2020_11_19_040330_create_news_table', 1),
(32, '2020_11_19_101154_create_settings_table', 1),
(33, '2020_11_20_042128_create_contacts_table', 1),
(34, '2020_11_20_051923_create_careers_table', 2),
(35, '2020_11_20_064639_create_applicants_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `municipalities`
--

CREATE TABLE `municipalities` (
  `id` int(10) UNSIGNED NOT NULL,
  `muni_type_id` int(10) UNSIGNED NOT NULL,
  `district_id` int(10) UNSIGNED NOT NULL,
  `muni_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `muni_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `muni_name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `municipalities`
--

INSERT INTO `municipalities` (`id`, `muni_type_id`, `district_id`, `muni_code`, `muni_name`, `muni_name_en`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '1', 'फुङ्लिङ नगरपालिका', NULL, NULL, NULL, NULL),
(2, 4, 1, '2', 'आठराई त्रिवेणी गाउँपालिका', NULL, NULL, NULL, NULL),
(3, 4, 1, '3', 'सिदिङ्ग्वा गाउँपालिका', NULL, NULL, NULL, NULL),
(4, 4, 1, '4', 'फक्ताङलुङ गाउँपालिका', NULL, NULL, NULL, NULL),
(5, 4, 1, '5', 'मिक्वाखोला गाउँपालिका', NULL, NULL, NULL, NULL),
(6, 4, 1, '6', 'मेरिङ्देन गाउँपालिका', NULL, NULL, NULL, NULL),
(7, 4, 1, '7', 'मैवाखोला गाउँपालिका', NULL, NULL, NULL, NULL),
(8, 4, 1, '8', 'याङ्वरक गाउँपालिका', NULL, NULL, NULL, NULL),
(9, 4, 1, '9', 'सिरिजङ्गा गाउँपालिका', NULL, NULL, NULL, NULL),
(10, 3, 2, '10', 'फिदिम नगरपालिका', NULL, NULL, NULL, NULL),
(11, 4, 2, '11', 'फालेलुङ गाउँपालिका', NULL, NULL, NULL, NULL),
(12, 4, 2, '12', 'फाल्गुनन्द गाउँपालिका', NULL, NULL, NULL, NULL),
(13, 4, 2, '13', 'हिलिहाङ गाउँपालिका', NULL, NULL, NULL, NULL),
(14, 4, 2, '14', 'कुम्मायक गाउँपालिका', NULL, NULL, NULL, NULL),
(15, 4, 2, '15', 'मिक्लाजुङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(16, 4, 2, '16', 'तुम्वेहा गाउँपालिका', NULL, NULL, NULL, NULL),
(17, 4, 2, '17', 'याङ्वरक गाउँपालिका', NULL, NULL, NULL, NULL),
(18, 3, 3, '18', 'इलाम नगरपालिका', NULL, NULL, NULL, NULL),
(19, 3, 3, '19', 'देउमाई नगरपालिका', NULL, NULL, NULL, NULL),
(20, 3, 3, '20', 'माई नगरपालिका', NULL, NULL, NULL, NULL),
(21, 3, 3, '21', 'सूर्योदय नगरपालिका', NULL, NULL, NULL, NULL),
(22, 4, 3, '22', 'फाकफोकथुम गाउँपालिका ', NULL, NULL, NULL, NULL),
(23, 4, 3, '23', 'चुलाचुली गाउँपालिका', NULL, NULL, NULL, NULL),
(24, 4, 3, '24', 'माईजोगमाई गाउँपालिका', NULL, NULL, NULL, NULL),
(25, 4, 3, '25', 'माङ्सेबुङ गाउँपालिका', NULL, NULL, NULL, NULL),
(26, 4, 3, '26', 'रोङ गाउँपालिका', NULL, NULL, NULL, NULL),
(27, 4, 3, '27', 'सन्दकपुर गाउँपालिका', NULL, NULL, NULL, NULL),
(28, 3, 4, '28', 'मेचीनगर नगरपालिका', NULL, NULL, NULL, NULL),
(29, 3, 4, '29', 'दमक नगरपालिका', NULL, NULL, NULL, NULL),
(30, 3, 4, '30', 'कन्काई नगरपालिका', NULL, NULL, NULL, NULL),
(31, 3, 4, '31', 'भद्रपुर नगरपालिका', NULL, NULL, NULL, NULL),
(32, 3, 4, '32', 'अर्जुनधारा नगरपालिका', NULL, NULL, NULL, NULL),
(33, 3, 4, '33', 'शिवसताक्षी नगरपालिका ', NULL, NULL, NULL, NULL),
(34, 3, 4, '34', 'गौरादह नगरपालिका', NULL, NULL, NULL, NULL),
(35, 3, 4, '35', 'विर्तामोड नगरपालिका', NULL, NULL, NULL, NULL),
(36, 4, 4, '36', 'कमल गाउँपालिका', NULL, NULL, NULL, NULL),
(37, 4, 4, '37', 'गौरीगञ्ज गाउँपालिका', NULL, NULL, NULL, NULL),
(38, 4, 4, '38', 'बाह्रदशी गाउँपालिका', NULL, NULL, NULL, NULL),
(39, 4, 4, '39', 'झापा गाउँपालिका', NULL, NULL, NULL, NULL),
(40, 4, 4, '40', 'बुद्धशान्ती गाउँपालिका', NULL, NULL, NULL, NULL),
(41, 4, 4, '41', 'हल्दीवारी गाउँपालिका', NULL, NULL, NULL, NULL),
(42, 4, 4, '42', 'कचनकवल गाउँपालिका', NULL, NULL, NULL, NULL),
(43, 2, 5, '43', 'विराटनगर महानगरपालिका', NULL, NULL, NULL, NULL),
(44, 3, 5, '44', 'बेलबारी नगरपालिका', NULL, NULL, NULL, NULL),
(45, 3, 5, '45', 'लेटाङ्ग नगरपालिका', NULL, NULL, NULL, NULL),
(46, 3, 5, '46', 'पथरी शनिश्चरे नगरपालिका', NULL, NULL, NULL, NULL),
(47, 3, 5, '47', 'रङ्गेली नगरपालिका', NULL, NULL, NULL, NULL),
(48, 3, 5, '48', 'रतुवामाई नगरपालिका', NULL, NULL, NULL, NULL),
(49, 3, 5, '49', 'सुनवर्षी नगरपालिका', NULL, NULL, NULL, NULL),
(50, 3, 5, '50', 'उर्लाबारी नगरपालिका', NULL, NULL, NULL, NULL),
(51, 3, 5, '51', 'सुन्दरहरैंचा नगरपालिका', NULL, NULL, NULL, NULL),
(52, 4, 5, '52', 'बुढीगङ्गा गाउँपालिका', NULL, NULL, NULL, NULL),
(53, 4, 5, '53', 'धनपालथान गाउँपालिका', NULL, NULL, NULL, NULL),
(54, 4, 5, '54', 'ग्रामथान गाउँपालिका', NULL, NULL, NULL, NULL),
(55, 4, 5, '55', 'जहदा गाउँपालिका', NULL, NULL, NULL, NULL),
(56, 4, 5, '56', 'कानेपोखरी गाउँपालिका', NULL, NULL, NULL, NULL),
(57, 4, 5, '57', 'कटहरी गाउँपालिका', NULL, NULL, NULL, NULL),
(58, 4, 5, '58', 'केराबारी गाउँपालिका', NULL, NULL, NULL, NULL),
(59, 4, 5, '59', 'मिक्लाजुङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(60, 2, 6, '60', 'ईटहरी उपमहानगरपालिका', NULL, NULL, NULL, NULL),
(61, 2, 6, '61', 'धरान उपमहानगरपालिका', NULL, NULL, NULL, NULL),
(62, 3, 6, '62', 'ईनरुवा नगरपालिका', NULL, NULL, NULL, NULL),
(63, 3, 6, '63', 'दुहवी नगरपालिका', NULL, NULL, NULL, NULL),
(64, 3, 6, '64', 'रामधुनी नगरपालिका', NULL, NULL, NULL, NULL),
(65, 3, 6, '65', 'बराह नगरपालिका', NULL, NULL, NULL, NULL),
(66, 4, 6, '66', 'देवानगञ्ज गाउँपालिका', NULL, NULL, NULL, NULL),
(67, 4, 6, '67', 'कोशी गाउँपालिका', NULL, NULL, NULL, NULL),
(68, 4, 6, '68', 'गढी गाउँपालिका', NULL, NULL, NULL, NULL),
(69, 4, 6, '69', 'बर्जु गाउँपालिका', NULL, NULL, NULL, NULL),
(70, 4, 6, '70', 'भोक्राहा गाउँपालिका', NULL, NULL, NULL, NULL),
(71, 4, 6, '71', 'हरिनगरा गाउँपालिका', NULL, NULL, NULL, NULL),
(72, 3, 7, '72', 'पाख्रीबास नगरपालिका', NULL, NULL, NULL, NULL),
(73, 3, 7, '73', 'धनकुटा नगरपालिका', NULL, NULL, NULL, NULL),
(74, 3, 7, '74', 'महालक्ष्मी नगरपालिका', NULL, NULL, NULL, NULL),
(75, 4, 7, '75', 'साँगुरीगढी गाउँपालिका', NULL, NULL, NULL, NULL),
(76, 4, 7, '76', 'खाल्सा छिन्ताङ्ग शहीदभूमि गाउँपालिका', NULL, NULL, NULL, NULL),
(77, 4, 7, '77', 'छथर जोरपाटी गाउँपालिका', NULL, NULL, NULL, NULL),
(78, 4, 7, '78', 'चौविसे गाउँपालिका', NULL, NULL, NULL, NULL),
(79, 3, 8, '79', 'म्याङ्लुङ्ग नगरपालिका', NULL, NULL, NULL, NULL),
(80, 3, 8, '80', 'लालीगुराँस नगरपालिका', NULL, NULL, NULL, NULL),
(81, 4, 8, '81', 'आठराई गाउँपालिका', NULL, NULL, NULL, NULL),
(82, 4, 8, '82', 'छथर गाउँपालिका', NULL, NULL, NULL, NULL),
(83, 4, 8, '83', 'फेदाप गाउँपालिका', NULL, NULL, NULL, NULL),
(84, 4, 8, '84', 'मेन्छयायेम गाउँपालिका', NULL, NULL, NULL, NULL),
(85, 3, 9, '85', 'चैनपुर नगरपालिका', NULL, NULL, NULL, NULL),
(86, 3, 9, '86', 'धर्मदेवी नगरपालिका', NULL, NULL, NULL, NULL),
(87, 3, 9, '87', 'खाँदबारी नगरपालिका', NULL, NULL, NULL, NULL),
(88, 3, 9, '88', 'मादी नगरपालिका', NULL, NULL, NULL, NULL),
(89, 3, 9, '89', 'पाँचखपन नगरपालिका', NULL, NULL, NULL, NULL),
(90, 4, 9, '90', 'भोटखोला गाउँपालिका', NULL, NULL, NULL, NULL),
(91, 4, 9, '91', 'चिचिला गाउँपालिका', NULL, NULL, NULL, NULL),
(92, 4, 9, '92', 'मकालु गाउँपालिका', NULL, NULL, NULL, NULL),
(93, 4, 9, '93', 'सभापोखरी गाउँपालिका', NULL, NULL, NULL, NULL),
(94, 4, 9, '94', 'सिलिचोङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(95, 3, 10, '95', 'भोजपुर नगरपालिका', NULL, NULL, NULL, NULL),
(96, 3, 10, '96', 'षडानन्द नगरपालिका', NULL, NULL, NULL, NULL),
(97, 4, 10, '97', 'ट्याम्के मैयुम गाउँपालिका', NULL, NULL, NULL, NULL),
(98, 4, 10, '98', 'रामप्रसादराई गाउँपालिका', NULL, NULL, NULL, NULL),
(99, 4, 10, '99', 'अरुण गाउँपालिका', NULL, NULL, NULL, NULL),
(100, 4, 10, '100', 'पौवादुम्मा गाउँपालिका', NULL, NULL, NULL, NULL),
(101, 4, 10, '101', 'साल्पा सिलिसो गाउँपालिका', NULL, NULL, NULL, NULL),
(102, 4, 10, '102', 'आम्चोक गाउँपालिका', NULL, NULL, NULL, NULL),
(103, 4, 10, '103', 'हतुवागढी गाउँपालिका', NULL, NULL, NULL, NULL),
(104, 3, 11, '104', 'सोलु दुधकुण्ड नगरपालिका', NULL, NULL, NULL, NULL),
(105, 4, 11, '105', 'दुधकोशी गाउँपालिका', NULL, NULL, NULL, NULL),
(106, 4, 11, '106', 'खुम्बु पासाङ्गल्हामु गाउँपालिका', NULL, NULL, NULL, NULL),
(107, 4, 11, '107', 'दुधकौशीका गाउँपालिका', NULL, NULL, NULL, NULL),
(108, 4, 11, '108', 'नेचा सल्यान गाउँपालिका', NULL, NULL, NULL, NULL),
(109, 4, 11, '109', 'महाकुलुङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(110, 4, 11, '110', 'लिखुपिके गाउँपालिका', NULL, NULL, NULL, NULL),
(111, 4, 11, '111', 'सोपाङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(112, 3, 12, '112', 'सिद्धिचरण नगरपालिका', NULL, NULL, NULL, NULL),
(113, 4, 12, '113', 'खिजिदेम्बा गाउँपालिका', NULL, NULL, NULL, NULL),
(114, 4, 12, '114', 'चम्पादेवी गाउँपालिका', NULL, NULL, NULL, NULL),
(115, 4, 12, '115', 'चिशंखुगढी गाउँपालिका', NULL, NULL, NULL, NULL),
(116, 4, 12, '116', 'मानेभञ्ज्याङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(117, 4, 12, '117', 'मोलुङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(118, 4, 12, '118', 'लिखु गाउँपालिका', NULL, NULL, NULL, NULL),
(119, 4, 12, '119', 'सुनकोशी गाउँपालिका', NULL, NULL, NULL, NULL),
(120, 3, 13, '120', 'हलेसी तुवाचुङ्ग नगरपालिका', NULL, NULL, NULL, NULL),
(121, 3, 13, '121', 'रुपाकोट मझुवागढी नगरपालिका', NULL, NULL, NULL, NULL),
(122, 4, 13, '122', 'ऐसेलुखर्क गाउँपालिका', NULL, NULL, NULL, NULL),
(123, 4, 13, '123', 'लामीडाँडा गाउँपालिका', NULL, NULL, NULL, NULL),
(124, 4, 13, '124', 'जन्तेढुङ्गा गाउँपालिका', NULL, NULL, NULL, NULL),
(125, 4, 13, '125', 'खोटेहाङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(126, 4, 13, '126', 'केपिलासगढी गाउँपालिका', NULL, NULL, NULL, NULL),
(127, 4, 13, '127', 'दिप्रुङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(128, 4, 13, '128', 'साकेला गाउँपालिका', NULL, NULL, NULL, NULL),
(129, 4, 13, '129', 'बराहपोखरी गाउँपालिका', NULL, NULL, NULL, NULL),
(130, 3, 14, '130', 'कटारी नगरपालिका', NULL, NULL, NULL, NULL),
(131, 3, 14, '131', 'चौदण्डीगढी नगरपालिका', NULL, NULL, NULL, NULL),
(132, 3, 14, '132', 'त्रियुगा नगरपालिका', NULL, NULL, NULL, NULL),
(133, 3, 14, '133', 'बेलका नगरपालिका', NULL, NULL, NULL, NULL),
(134, 4, 14, '134', 'उदयपुरगढी गाउँपालिका', NULL, NULL, NULL, NULL),
(135, 4, 14, '135', 'ताप्ली गाउँपालिका', NULL, NULL, NULL, NULL),
(136, 4, 14, '136', 'रौताहामाई गाउँपालिका', NULL, NULL, NULL, NULL),
(137, 4, 14, '137', 'सुनकोशी गाउँपालिका', NULL, NULL, NULL, NULL),
(138, 3, 15, '138', 'राजविराज नगरपालिका', NULL, NULL, NULL, NULL),
(139, 3, 15, '139', 'कञ्चनरुप नगरपालिका', NULL, NULL, NULL, NULL),
(140, 3, 15, '140', 'डाक्नेश्वरी नगरपालिका', NULL, NULL, NULL, NULL),
(141, 3, 15, '141', 'बोदेबरसाईन नगरपालिका', NULL, NULL, NULL, NULL),
(142, 3, 15, '142', 'खडक नगरपालिका', NULL, NULL, NULL, NULL),
(143, 3, 15, '143', 'शम्भुनाथ नगरपालिका', NULL, NULL, NULL, NULL),
(144, 3, 15, '144', 'सुरुङ्गा नगरपालिका', NULL, NULL, NULL, NULL),
(145, 3, 15, '145', 'हनुमाननगर कङ्कालिनी नगरपालिका', NULL, NULL, NULL, NULL),
(146, 3, 15, '146', 'सप्तकोशी नगरपालिका', NULL, NULL, NULL, NULL),
(147, 4, 15, '147', 'अग्नीसाइर कृष्णासवरन गाउँपालिका', NULL, NULL, NULL, NULL),
(148, 4, 15, '148', 'छिन्नमस्ता गाउँपालिका', NULL, NULL, NULL, NULL),
(149, 4, 15, '149', 'महादेवा गाउँपालिका', NULL, NULL, NULL, NULL),
(150, 4, 15, '150', 'तिरहुत गाउँपालिका', NULL, NULL, NULL, NULL),
(151, 4, 15, '151', 'तिलाठी कोइलाडी गाउँपालिका', NULL, NULL, NULL, NULL),
(152, 4, 15, '152', 'रुपनी गाउँपालिका', NULL, NULL, NULL, NULL),
(153, 4, 15, '153', 'बेल्ही चपेना गाउँपालिका', NULL, NULL, NULL, NULL),
(154, 4, 15, '154', 'विष्णुपुर गाउँपालिका', NULL, NULL, NULL, NULL),
(155, 4, 15, '155', 'बलान-विहुल गाउँपालिका', NULL, NULL, NULL, NULL),
(156, 3, 16, '156', 'लहान नगरपालिका', NULL, NULL, NULL, NULL),
(157, 3, 16, '157', 'धनगढीमाई नगरपालिका', NULL, NULL, NULL, NULL),
(158, 3, 16, '158', 'सिरहा नगरपालिका', NULL, NULL, NULL, NULL),
(159, 3, 16, '159', 'गोलबजार नगरपालिका', NULL, NULL, NULL, NULL),
(160, 3, 16, '160', 'मिर्चैया नगरपालिका', NULL, NULL, NULL, NULL),
(161, 3, 16, '161', 'कल्याणपुर नगरपालिका', NULL, NULL, NULL, NULL),
(162, 3, 16, '162', 'कर्जन्हा नगरपालिका', NULL, NULL, NULL, NULL),
(163, 3, 16, '163', 'सुखीपुर नगरपालिका', NULL, NULL, NULL, NULL),
(164, 4, 16, '164', 'भगवानपुर गाउँपालिका', NULL, NULL, NULL, NULL),
(165, 4, 16, '165', 'औरही गाउँपालिका', NULL, NULL, NULL, NULL),
(166, 4, 16, '166', 'विष्णुपुर गाउँपालिका', NULL, NULL, NULL, NULL),
(167, 4, 16, '167', 'बरियारपट्टी गाउँपालिका', NULL, NULL, NULL, NULL),
(168, 4, 16, '168', 'लक्ष्मीपुर पतारी गाउँपालिका', NULL, NULL, NULL, NULL),
(169, 4, 16, '169', 'नरहा गाउँपालिका', NULL, NULL, NULL, NULL),
(170, 4, 16, '170', 'सखुवानान्करकट्टी गाउँपालिका', NULL, NULL, NULL, NULL),
(171, 4, 16, '171', 'अर्नमा गाउँपालिका', NULL, NULL, NULL, NULL),
(172, 4, 16, '172', 'नवराजपुर गाउँपालिका', NULL, NULL, NULL, NULL),
(173, 2, 17, '173', 'जनकपुर उपमहानगरपालिका', NULL, NULL, NULL, NULL),
(174, 3, 17, '174', 'क्षिरेश्वरनाथ नगरपालिका', NULL, NULL, NULL, NULL),
(175, 3, 17, '175', 'गणेशमान चारनाथ नगरपालिका', NULL, NULL, NULL, NULL),
(176, 3, 17, '176', 'धनुषाधाम नगरपालिका', NULL, NULL, NULL, NULL),
(177, 3, 17, '177', 'कमला नगरपालिका', NULL, NULL, NULL, NULL),
(178, 3, 17, '178', 'नगराइन नगरपालिका', NULL, NULL, NULL, NULL),
(179, 3, 17, '179', 'विदेह नगरपालिका', NULL, NULL, NULL, NULL),
(180, 3, 17, '180', 'मिथिला नगरपालिका', NULL, NULL, NULL, NULL),
(181, 3, 17, '181', 'मिथिला विहारी नगरपालिका', NULL, NULL, NULL, NULL),
(182, 3, 17, '182', 'शहीदनगर नगरपालिका ', NULL, NULL, NULL, NULL),
(183, 3, 17, '183', 'सबैला नगरपालिका', NULL, NULL, NULL, NULL),
(184, 3, 17, '184', 'हंसपुर नगरपालिका', NULL, NULL, NULL, NULL),
(185, 4, 17, '185', 'औरही गाउँपालिका', NULL, NULL, NULL, NULL),
(186, 4, 17, '186', 'जनकनन्दिनी गाउँपालिका', NULL, NULL, NULL, NULL),
(187, 4, 17, '187', 'बटेश्वर गाउँपालिका', NULL, NULL, NULL, NULL),
(188, 4, 17, '188', 'मुखियापट्टी मुसहरनिया गाउँपालिका', NULL, NULL, NULL, NULL),
(189, 4, 17, '189', 'लक्ष्मीनिया गाउँपालिका', NULL, NULL, NULL, NULL),
(190, 4, 17, '190', 'धनौजी गाउँपालिका', NULL, NULL, NULL, NULL),
(191, 3, 18, '191', 'जलेश्वर नगरपालिका', NULL, NULL, NULL, NULL),
(192, 3, 18, '192', 'बर्दिबास नगरपालिका', NULL, NULL, NULL, NULL),
(193, 3, 18, '193', 'गौशाला नगरपालिका', NULL, NULL, NULL, NULL),
(194, 3, 18, '194', 'बलवा नगरपालिका', NULL, NULL, NULL, NULL),
(195, 3, 18, '195', 'लोहरपट्टी नगरपालिका', NULL, NULL, NULL, NULL),
(196, 3, 18, '196', 'मनरा सिसवा नगरपालिका', NULL, NULL, NULL, NULL),
(197, 3, 18, '197', 'रामगोपालपुर नगरपालिका', NULL, NULL, NULL, NULL),
(198, 3, 18, '198', 'औरही नगरपालिका', NULL, NULL, NULL, NULL),
(199, 3, 18, '199', 'भँगाहा नगरपालिका', NULL, NULL, NULL, NULL),
(200, 3, 18, '200', 'मटिहानी नगरपालिका', NULL, NULL, NULL, NULL),
(201, 4, 18, '201', 'सोनमा गाउँपालिका', NULL, NULL, NULL, NULL),
(202, 4, 18, '202', 'सम्सी गाउँपालिका', NULL, NULL, NULL, NULL),
(203, 4, 18, '203', 'महोत्तरी गाउँपालिका', NULL, NULL, NULL, NULL),
(204, 4, 18, '204', 'पिपरा गाउँपालिका', NULL, NULL, NULL, NULL),
(205, 4, 18, '205', 'एकडारा गाउँपालिका', NULL, NULL, NULL, NULL),
(206, 3, 19, '206', 'ईश्वरपुर नगरपालिका', NULL, NULL, NULL, NULL),
(207, 3, 19, '207', 'मलङ्गवा नगरपालिका', NULL, NULL, NULL, NULL),
(208, 3, 19, '208', 'लालबन्दी नगरपालिका', NULL, NULL, NULL, NULL),
(209, 3, 19, '209', 'हरिपुर नगरपालिका', NULL, NULL, NULL, NULL),
(210, 3, 19, '210', 'हरिपुर्वा नगरपालिका', NULL, NULL, NULL, NULL),
(211, 3, 19, '211', 'हरिवन नगरपालिका', NULL, NULL, NULL, NULL),
(212, 3, 19, '212', 'बरहथवा नगरपालिका', NULL, NULL, NULL, NULL),
(213, 3, 19, '213', 'बलरा नगरपालिका', NULL, NULL, NULL, NULL),
(214, 3, 19, '214', 'गोडैटा नगरपालिका', NULL, NULL, NULL, NULL),
(215, 3, 19, '215', 'बागमती नगरपालिका', NULL, NULL, NULL, NULL),
(216, 3, 19, '216', 'कबिलासी नगरपालिका', NULL, NULL, NULL, NULL),
(217, 4, 19, '217', 'चक्रघट्टा गाउँपालिका', NULL, NULL, NULL, NULL),
(218, 4, 19, '218', 'चन्द्रनगर गाउँपालिका', NULL, NULL, NULL, NULL),
(219, 4, 19, '219', 'धनकौल गाउँपालिका', NULL, NULL, NULL, NULL),
(220, 4, 19, '220', 'ब्रह्मपुरी गाउँपालिका', NULL, NULL, NULL, NULL),
(221, 4, 19, '221', 'रामनगर गाउँपालिका', NULL, NULL, NULL, NULL),
(222, 4, 19, '222', 'विष्णु गाउँपालिका', NULL, NULL, NULL, NULL),
(223, 4, 19, '223', 'बसबरीया गाउँपालिका', NULL, NULL, NULL, NULL),
(224, 4, 19, '224', 'कौडेना गाउँपालिका', NULL, NULL, NULL, NULL),
(225, 4, 19, '225', 'पर्सा गाउँपालिका', NULL, NULL, NULL, NULL),
(226, 3, 32, '226', 'चन्द्रपुर नगरपालिका', NULL, NULL, NULL, NULL),
(227, 3, 32, '227', 'गरुडा नगरपालिका', NULL, NULL, NULL, NULL),
(228, 3, 32, '228', 'गौर नगरपालिका', NULL, NULL, NULL, NULL),
(229, 3, 32, '229', 'बौधीमाई नगरपालिका', NULL, NULL, NULL, NULL),
(230, 3, 32, '230', 'वृन्दावन नगरपालिका', NULL, NULL, NULL, NULL),
(231, 3, 32, '231', 'देवाही गोनाही नगरपालिका', NULL, NULL, NULL, NULL),
(232, 3, 32, '232', 'गढीमाई नगरपालिका', NULL, NULL, NULL, NULL),
(233, 3, 32, '233', 'गजुरा नगरपालिका', NULL, NULL, NULL, NULL),
(234, 3, 32, '234', 'कटहरीया नगरपालिका', NULL, NULL, NULL, NULL),
(235, 3, 32, '235', 'माधवनारायण नगरपालिका', NULL, NULL, NULL, NULL),
(236, 3, 32, '236', 'मौलापुर नगरपालिका', NULL, NULL, NULL, NULL),
(237, 3, 32, '237', 'फतुवा विजयपुर नगरपालिका', NULL, NULL, NULL, NULL),
(238, 3, 32, '238', 'ईशनाथ नगरपालिका', NULL, NULL, NULL, NULL),
(239, 3, 32, '239', 'परोहा नगरपालिका', NULL, NULL, NULL, NULL),
(240, 3, 32, '240', 'राजपुर नगरपालिका', NULL, NULL, NULL, NULL),
(241, 3, 32, '241', 'राजदेवी नगरपालिका', NULL, NULL, NULL, NULL),
(242, 4, 32, '242', 'यमुनामाई गाउँपालिका', NULL, NULL, NULL, NULL),
(243, 4, 32, '243', 'दुर्गाभगवती गाउँपालिका', NULL, NULL, NULL, NULL),
(244, 2, 33, '244', 'कलैया उपमहानगरपालिका', NULL, NULL, NULL, NULL),
(245, 2, 33, '245', 'जितपुर-सिमरा उपमहानगरपालिका', NULL, NULL, NULL, NULL),
(246, 3, 33, '246', 'कोल्हवी नगरपालिका', NULL, NULL, NULL, NULL),
(247, 3, 33, '247', 'निजगढ नगरपालिका', NULL, NULL, NULL, NULL),
(248, 3, 33, '248', 'महागढीमाई नगरपालिका', NULL, NULL, NULL, NULL),
(249, 3, 33, '249', 'सिम्रौनगढ नगरपालिका', NULL, NULL, NULL, NULL),
(250, 3, 33, '250', 'पचरौता नगरपालिका', NULL, NULL, NULL, NULL),
(251, 4, 33, '251', 'परवानीपुर गाउँपालिका', NULL, NULL, NULL, NULL),
(252, 4, 33, '252', 'प्रसौनी गाउँपालिका', NULL, NULL, NULL, NULL),
(253, 4, 33, '253', 'फेटा गाउँपालिका', NULL, NULL, NULL, NULL),
(254, 4, 33, '254', 'आदर्श कोटवाल गाउँपालिका', NULL, NULL, NULL, NULL),
(255, 4, 33, '255', 'करैयामाई गाउँपालिका', NULL, NULL, NULL, NULL),
(256, 4, 33, '256', 'देवताल गाउँपालिका', NULL, NULL, NULL, NULL),
(257, 4, 33, '257', 'बारागढी गाउँपालिका', NULL, NULL, NULL, NULL),
(258, 4, 33, '258', 'सुवर्ण गाउँपालिका', NULL, NULL, NULL, NULL),
(259, 4, 33, '259', 'विश्रामपुर गाउँपालिका', NULL, NULL, NULL, NULL),
(260, 2, 34, '260', 'वीरगञ्ज महानगरपालिका', NULL, NULL, NULL, NULL),
(261, 3, 34, '261', 'पोखरीया नगरपालिका', NULL, NULL, NULL, NULL),
(262, 3, 34, '262', 'बहुदरमाई नगरपालिका', NULL, NULL, NULL, NULL),
(263, 3, 34, '263', 'पर्सागढी नगरपालिका', NULL, NULL, NULL, NULL),
(264, 4, 34, '264', 'ठोरी गाउँपालिका', NULL, NULL, NULL, NULL),
(265, 4, 34, '265', 'जगरनाथपुर गाउँपालिका', NULL, NULL, NULL, NULL),
(266, 4, 34, '266', 'धोबीनी गाउँपालिका', NULL, NULL, NULL, NULL),
(267, 4, 34, '267', 'छिपहरमाई गाउँपालिका', NULL, NULL, NULL, NULL),
(268, 4, 34, '268', 'पकाहा मैनपुर गाउँपालिका', NULL, NULL, NULL, NULL),
(269, 4, 34, '269', 'विन्दबासिनी गाउँपालिका', NULL, NULL, NULL, NULL),
(270, 4, 34, '270', 'सखुवा प्रसौनी गाउँपालिका', NULL, NULL, NULL, NULL),
(271, 4, 34, '271', 'पटेर्वा सुगौली गाउँपालिका', NULL, NULL, NULL, NULL),
(272, 4, 34, '272', 'कालिकामाई गाउँपालिका', NULL, NULL, NULL, NULL),
(273, 4, 34, '273', 'जिराभवानी गाउँपालिका', NULL, NULL, NULL, NULL),
(274, 3, 20, '274', 'कमलामाई नगरपालिका', NULL, NULL, NULL, NULL),
(275, 3, 20, '275', 'दुधौली नगरपालिका', NULL, NULL, NULL, NULL),
(276, 4, 20, '276', 'गोलञ्जोर गाउँपालिका', NULL, NULL, NULL, NULL),
(277, 4, 20, '277', 'घ्याङ्लेख गाउँपालिका', NULL, NULL, NULL, NULL),
(278, 4, 20, '278', 'तीनपाटन गाउँपालिका', NULL, NULL, NULL, NULL),
(279, 4, 20, '279', 'फिक्कल गाउँपालिका', NULL, NULL, NULL, NULL),
(280, 4, 20, '280', 'मरिण गाउँपालिका', NULL, NULL, NULL, NULL),
(281, 4, 20, '281', 'सुनकोशी गाउँपालिका', NULL, NULL, NULL, NULL),
(282, 4, 20, '282', 'हरिहरपुरगढी गाउँपालिका', NULL, NULL, NULL, NULL),
(283, 3, 21, '283', 'मन्थली नगरपालिका', NULL, NULL, NULL, NULL),
(284, 3, 21, '284', 'रामेछाप नगरपालिका', NULL, NULL, NULL, NULL),
(285, 4, 21, '285', 'उमाकुण्ड गाउँपालिका', NULL, NULL, NULL, NULL),
(286, 4, 21, '286', 'खाँडादेवी गाउँपालिका', NULL, NULL, NULL, NULL),
(287, 4, 21, '287', 'गोकुलगङ्गा गाउँपालिका', NULL, NULL, NULL, NULL),
(288, 4, 21, '288', 'दोरम्भा गाउँपालिका', NULL, NULL, NULL, NULL),
(289, 4, 21, '289', 'लिखु गाउँपालिका', NULL, NULL, NULL, NULL),
(290, 4, 21, '290', 'सुनापती गाउँपालिका', NULL, NULL, NULL, NULL),
(291, 3, 22, '291', 'जिरी नगरपालिका', NULL, NULL, NULL, NULL),
(292, 3, 22, '292', 'भिमेश्वर नगरपालिका', NULL, NULL, NULL, NULL),
(293, 4, 22, '293', 'कालिञ्चोक गाउँपालिका', NULL, NULL, NULL, NULL),
(294, 4, 22, '294', 'गौरीशङ्कर गाउँपालिका', NULL, NULL, NULL, NULL),
(295, 4, 22, '295', 'तामाकोशी गाउँपालिका', NULL, NULL, NULL, NULL),
(296, 4, 22, '296', 'मेलुङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(297, 4, 22, '297', 'विगु गाउँपालिका', NULL, NULL, NULL, NULL),
(298, 4, 22, '298', 'बैतेश्वर गाउँपालिका', NULL, NULL, NULL, NULL),
(299, 4, 22, '299', 'शैलुङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(300, 3, 23, '300', 'चौतारा साँगाचोकगढी नगरपालिका', NULL, NULL, NULL, NULL),
(301, 3, 23, '301', 'बाह्रविसे नगरपालिका', NULL, NULL, NULL, NULL),
(302, 3, 23, '302', 'मेलम्ची नगरपालिका', NULL, NULL, NULL, NULL),
(303, 4, 23, '303', 'ईन्द्रावती गाउँपालिका', NULL, NULL, NULL, NULL),
(304, 4, 23, '304', 'जुगल गाउँपालिका', NULL, NULL, NULL, NULL),
(305, 4, 23, '305', 'पाँचपोखरी थाङ्पाल गाउँपालिका', NULL, NULL, NULL, NULL),
(306, 4, 23, '306', 'बलेफी गाउँपालिका', NULL, NULL, NULL, NULL),
(307, 4, 23, '307', 'भोटेकोशी गाउँपालिका', NULL, NULL, NULL, NULL),
(308, 4, 23, '308', 'लिसङ्खुपाखर गाउँपालिका', NULL, NULL, NULL, NULL),
(309, 4, 23, '309', 'सुनकोशी गाउँपालिका', NULL, NULL, NULL, NULL),
(310, 4, 23, '310', 'हेलम्बु गाउँपालिका', NULL, NULL, NULL, NULL),
(311, 4, 23, '311', 'त्रिपुरासुन्दरी गाउँपालिका', NULL, NULL, NULL, NULL),
(312, 3, 24, '312', 'धुलिखेल नगरपालिका', NULL, NULL, NULL, NULL),
(313, 3, 24, '313', 'बनेपा नगरपालिका', NULL, NULL, NULL, NULL),
(314, 3, 24, '314', 'पनौती नगरपालिका', NULL, NULL, NULL, NULL),
(315, 3, 24, '315', 'पाँचखाल नगरपालिका', NULL, NULL, NULL, NULL),
(316, 3, 24, '316', 'नमोबुद्ध नगरपालिका', NULL, NULL, NULL, NULL),
(317, 4, 24, '317', 'खानीखोला गाउँपालिका', NULL, NULL, NULL, NULL),
(318, 4, 24, '318', 'चौंरीदेउराली गाउँपालिका', NULL, NULL, NULL, NULL),
(319, 4, 24, '319', 'तेमाल गाउँपालिका', NULL, NULL, NULL, NULL),
(320, 4, 24, '320', 'बेथानचोक गाउँपालिका', NULL, NULL, NULL, NULL),
(321, 4, 24, '321', 'भुम्लु गाउँपालिका', NULL, NULL, NULL, NULL),
(322, 3, 24, '322', 'मण्डनदेउपुर नगरपालिका', NULL, NULL, NULL, NULL),
(323, 4, 24, '323', 'महाभारत गाउँपालिका', NULL, NULL, NULL, NULL),
(324, 4, 24, '324', 'रोशी गाउँपालिका', NULL, NULL, NULL, NULL),
(325, 2, 25, '325', 'ललितपुर महानगरपालिका', NULL, NULL, NULL, NULL),
(326, 3, 25, '326', 'गोदावरी नगरपालिका', NULL, NULL, NULL, NULL),
(327, 3, 25, '327', 'महालक्ष्मी नगरपालिका', NULL, NULL, NULL, NULL),
(328, 4, 25, '328', 'कोञ्ज्योसोम गाउँपालिका', NULL, NULL, NULL, NULL),
(329, 4, 25, '329', 'बागमती गाउँपालिका', NULL, NULL, NULL, NULL),
(330, 4, 25, '330', 'महाङ्काल गाउँपालिका', NULL, NULL, NULL, NULL),
(331, 3, 26, '331', 'चाँगुनारायण नगरपालिका', NULL, NULL, NULL, NULL),
(332, 3, 26, '332', 'भक्तपुर नगरपालिका', NULL, NULL, NULL, NULL),
(333, 3, 26, '333', 'मध्यपुर थिमी नगरपालिका', NULL, NULL, NULL, NULL),
(334, 3, 26, '334', 'सूर्यविनायक नगरपालिका', NULL, NULL, NULL, NULL),
(335, 2, 27, '335', 'काठमाण्डौं महानगरपालिका', NULL, NULL, NULL, NULL),
(336, 3, 27, '336', 'कागेश्वरी मनोहरा नगरपालिका', NULL, NULL, NULL, NULL),
(337, 3, 27, '337', 'कीर्तिपुर नगरपालिका', NULL, NULL, NULL, NULL),
(338, 3, 27, '338', 'गोकर्णेश्वर नगरपालिका', NULL, NULL, NULL, NULL),
(339, 3, 27, '339', 'चन्द्रागिरी नगरपालिका', NULL, NULL, NULL, NULL),
(340, 3, 27, '340', 'टोखा नगरपालिका', NULL, NULL, NULL, NULL),
(341, 3, 27, '341', 'तारकेश्वर नगरपालिका', NULL, NULL, NULL, NULL),
(342, 3, 27, '342', 'दक्षिणकाली नगरपालिका', NULL, NULL, NULL, NULL),
(343, 3, 27, '343', 'नागार्जुन नगरपालिका', NULL, NULL, NULL, NULL),
(344, 3, 27, '344', 'बुढानिलकण्ठ नगरपालिका', NULL, NULL, NULL, NULL),
(345, 3, 27, '345', 'शङ्करापुर नगरपालिका', NULL, NULL, NULL, NULL),
(346, 4, 29, '346', 'उत्तरगया गाउँपालिका', NULL, NULL, NULL, NULL),
(347, 4, 29, '347', 'कालिका गाउँपालिका', NULL, NULL, NULL, NULL),
(348, 4, 29, '348', 'गोसाईंकुण्ड गाउँपालिका', NULL, NULL, NULL, NULL),
(349, 4, 29, '349', 'नौकुण्ड गाउँपालिका', NULL, NULL, NULL, NULL),
(350, 4, 29, '350', 'पार्वतीकुण्ड गाउँपालिका', NULL, NULL, NULL, NULL),
(351, 3, 28, '351', 'विदुर नगरपालिका', NULL, NULL, NULL, NULL),
(352, 3, 28, '352', 'बेलकोटगढी नगरपालिका', NULL, NULL, NULL, NULL),
(353, 4, 28, '353', 'ककनी गाउँपालिका', NULL, NULL, NULL, NULL),
(354, 4, 28, '354', 'किस्पाङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(355, 4, 28, '355', 'तादी गाउँपालिका', NULL, NULL, NULL, NULL),
(356, 4, 28, '356', 'तारकेश्वर गाउँपालिका', NULL, NULL, NULL, NULL),
(357, 4, 28, '357', 'दुप्चेश्वर गाउँपालिका', NULL, NULL, NULL, NULL),
(358, 4, 28, '358', 'पञ्चकन्या गाउँपालिका', NULL, NULL, NULL, NULL),
(359, 4, 28, '359', 'लिखु गाउँपालिका', NULL, NULL, NULL, NULL),
(360, 4, 28, '360', 'मेघाङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(361, 4, 28, '361', 'शिवपुरी गाउँपालिका', NULL, NULL, NULL, NULL),
(362, 4, 28, '362', 'सूर्यगढी गाउँपालिका', NULL, NULL, NULL, NULL),
(363, 3, 29, '363', 'धुनीवेंशी नगरपालिका', NULL, NULL, NULL, NULL),
(364, 3, 29, '364', 'निलकण्ठ नगरपालिका', NULL, NULL, NULL, NULL),
(365, 4, 30, '365', 'खनीयाबास गाउँपालिका', NULL, NULL, NULL, NULL),
(366, 4, 30, '366', 'गजुरी गाउँपालिका', NULL, NULL, NULL, NULL),
(367, 4, 30, '367', 'गल्छी गाउँपालिका', NULL, NULL, NULL, NULL),
(368, 4, 30, '368', 'गङ्गाजमुना गाउँपालिका', NULL, NULL, NULL, NULL),
(369, 4, 30, '369', 'ज्वालामूखि गाउँपालिका', NULL, NULL, NULL, NULL),
(370, 4, 30, '370', 'थाक्रे गाउँपालिका', NULL, NULL, NULL, NULL),
(371, 4, 30, '371', 'नेत्रावती गाउँपालिका', NULL, NULL, NULL, NULL),
(372, 4, 30, '372', 'बेनीघाट रोराङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(373, 4, 30, '373', 'रुबीभ्याली गाउँपालिका', NULL, NULL, NULL, NULL),
(374, 4, 30, '374', 'सिद्धलेक गाउँपालिका', NULL, NULL, NULL, NULL),
(375, 4, 30, '375', 'त्रिपुरासुन्दरी गाउँपालिका', NULL, NULL, NULL, NULL),
(376, 2, 31, '376', 'हेटौंडा उपमहानगरपालिका', NULL, NULL, NULL, NULL),
(377, 3, 31, '377', 'थाहा नगरपालिका', NULL, NULL, NULL, NULL),
(378, 4, 31, '378', 'ईन्द्रसरोवर गाउँपालिका', NULL, NULL, NULL, NULL),
(379, 4, 31, '379', 'कैलाश गाउँपालिका', NULL, NULL, NULL, NULL),
(380, 4, 31, '380', 'बकैया गाउँपालिका', NULL, NULL, NULL, NULL),
(381, 4, 31, '381', 'बागमती गाउँपालिका', NULL, NULL, NULL, NULL),
(382, 4, 31, '382', 'भीमफेदी गाउँपालिका', NULL, NULL, NULL, NULL),
(383, 4, 31, '383', 'मकवानपुरगढी गाउँपालिका', NULL, NULL, NULL, NULL),
(384, 4, 31, '384', 'मनोहरी गाउँपालिका', NULL, NULL, NULL, NULL),
(385, 4, 31, '385', 'राक्सीराङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(386, 2, 35, '386', 'भरतपुर महानगरपालिका', NULL, NULL, NULL, NULL),
(387, 3, 35, '387', 'कालिका नगरपालिका', NULL, NULL, NULL, NULL),
(388, 3, 35, '388', 'खैरहनी नगरपालिका', NULL, NULL, NULL, NULL),
(389, 3, 35, '389', 'माडी नगरपालिका', NULL, NULL, NULL, NULL),
(390, 3, 35, '390', 'रत्ननगर नगरपालिका', NULL, NULL, NULL, NULL),
(391, 3, 35, '391', 'राप्ती नगरपालिका', NULL, NULL, NULL, NULL),
(392, 4, 35, '392', 'ईच्छाकामना गाउँपालिका', NULL, NULL, NULL, NULL),
(393, 3, 36, '393', 'गोरखा नगरपालिका', NULL, NULL, NULL, NULL),
(394, 3, 36, '394', 'पालुङ्गटार नगरपालिका', NULL, NULL, NULL, NULL),
(395, 4, 36, '395', 'सुलीकोट गाउँपालिका', NULL, NULL, NULL, NULL),
(396, 4, 36, '396', 'सिरानचोक गाउँपालिका', NULL, NULL, NULL, NULL),
(397, 4, 36, '397', 'अजिरकोट गाउँपालिका', NULL, NULL, NULL, NULL),
(398, 4, 36, '398', 'आरुघाट गाउँपालिका', NULL, NULL, NULL, NULL),
(399, 4, 36, '399', 'गण्डकी गाउँपालिका', NULL, NULL, NULL, NULL),
(400, 4, 36, '400', 'चुमनुब्री गाउँपालिका', NULL, NULL, NULL, NULL),
(401, 4, 36, '401', 'धार्चे गाउँपालिका', NULL, NULL, NULL, NULL),
(402, 4, 36, '402', 'भिमसेन गाउँपालिका', NULL, NULL, NULL, NULL),
(403, 4, 36, '403', 'शहीदलखन गाउँपालिका', NULL, NULL, NULL, NULL),
(404, 3, 37, '404', 'बेंशीसहर नगरपालिका', NULL, NULL, NULL, NULL),
(405, 3, 37, '405', 'मध्यनेपाल नगरपालिका', NULL, NULL, NULL, NULL),
(406, 3, 37, '406', 'राईनास नगरपालिका', NULL, NULL, NULL, NULL),
(407, 3, 37, '407', 'सुन्दरवजार नगरपालिका', NULL, NULL, NULL, NULL),
(408, 4, 37, '408', 'क्व्होलासोथार गाउँपालिका', NULL, NULL, NULL, NULL),
(409, 4, 37, '409', 'दुधपोखरी गाउँपालिका', NULL, NULL, NULL, NULL),
(410, 4, 37, '410', 'दोर्दी गाउँपालिका', NULL, NULL, NULL, NULL),
(411, 4, 37, '411', 'मर्स्याङ्गदी गाउँपालिका', NULL, NULL, NULL, NULL),
(412, 3, 38, '412', 'भानु नगरपालिका', NULL, NULL, NULL, NULL),
(413, 3, 38, '413', 'भीमाद नगरपालिका', NULL, NULL, NULL, NULL),
(414, 3, 38, '414', 'ब्यास नगरपालिका', NULL, NULL, NULL, NULL),
(415, 3, 38, '415', 'शुक्लागण्डकी नगरपालिका', NULL, NULL, NULL, NULL),
(416, 4, 38, '416', 'आँबुखैरेनी गाउँपालिका', NULL, NULL, NULL, NULL),
(417, 4, 38, '417', 'ऋषिङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(418, 4, 38, '418', 'घिरिङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(419, 4, 38, '419', 'देवघाट गाउँपालिका', NULL, NULL, NULL, NULL),
(420, 4, 38, '420', 'म्याग्दे गाउँपालिका', NULL, NULL, NULL, NULL),
(421, 4, 38, '421', 'बन्दिपुर गाउँपालिका', NULL, NULL, NULL, NULL),
(422, 3, 39, '422', 'गल्याङ्ग नगरपालिका', NULL, NULL, NULL, NULL),
(423, 3, 39, '423', 'चापाकोट नगरपालिका', NULL, NULL, NULL, NULL),
(424, 3, 39, '424', 'पुतलीवजार नगरपालिका', NULL, NULL, NULL, NULL),
(425, 3, 39, '425', 'भीरकोट नगरपालिका', NULL, NULL, NULL, NULL),
(426, 3, 39, '426', 'वालिङ्ग नगरपालिका', NULL, NULL, NULL, NULL),
(427, 4, 39, '427', 'अर्जुनचौपारी गाउँपालिका', NULL, NULL, NULL, NULL),
(428, 4, 39, '428', 'आँधिखोला गाउँपालिका', NULL, NULL, NULL, NULL),
(429, 4, 39, '429', 'कालीगण्डकी गाउँपालिका', NULL, NULL, NULL, NULL),
(430, 4, 39, '430', 'फेदीखोला गाउँपालिका', NULL, NULL, NULL, NULL),
(431, 4, 39, '431', 'विरुवा गाउँपालिका', NULL, NULL, NULL, NULL),
(432, 4, 39, '432', 'हरिनाश गाउँपालिका', NULL, NULL, NULL, NULL),
(433, 2, 40, '433', 'पोखरा लेखनाथ महानगरपालिका', NULL, NULL, NULL, NULL),
(434, 4, 40, '434', 'अन्नपूर्ण गाउँपालिका', NULL, NULL, NULL, NULL),
(435, 4, 40, '435', 'माछापुच्छ्रे गाउँपालिका', NULL, NULL, NULL, NULL),
(436, 4, 40, '436', 'मादी गाउँपालिका', NULL, NULL, NULL, NULL),
(437, 4, 40, '437', 'रुपा गाउँपालिका', NULL, NULL, NULL, NULL),
(438, 4, 41, '438', 'चामे गाउँपालिका', NULL, NULL, NULL, NULL),
(439, 4, 41, '439', 'नारफु गाउँपालिका', NULL, NULL, NULL, NULL),
(440, 4, 41, '440', 'नासोङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(441, 4, 41, '441', 'नेस्याङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(442, 4, 42, '442', 'घरपझोङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(443, 4, 42, '443', 'खासाङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(444, 4, 42, '444', 'दालोमे गाउँपालिका', NULL, NULL, NULL, NULL),
(445, 4, 42, '445', 'लोमन्थाङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(446, 4, 42, '446', 'बाह्रगाउँ मुक्तिक्षेत्र गाउँपालिका', NULL, NULL, NULL, NULL),
(447, 3, 43, '447', 'बेनी नगरपालिका', NULL, NULL, NULL, NULL),
(448, 4, 43, '448', 'अन्नपूर्ण गाउँपालिका', NULL, NULL, NULL, NULL),
(449, 4, 43, '449', 'धौलागिरी गाउँपालिका', NULL, NULL, NULL, NULL),
(450, 4, 43, '450', 'मङ्गला गाउँपालिका', NULL, NULL, NULL, NULL),
(451, 4, 43, '451', 'मालिका गाउँपालिका', NULL, NULL, NULL, NULL),
(452, 4, 43, '452', 'रघुगङ्गा गाउँपालिका', NULL, NULL, NULL, NULL),
(453, 3, 44, '453', 'कुश्मा नगरपालिका', NULL, NULL, NULL, NULL),
(454, 4, 44, '454', 'फलेवास गाउँपालिका', NULL, NULL, NULL, NULL),
(455, 4, 44, '455', 'जलजला गाउँपालिका', NULL, NULL, NULL, NULL),
(456, 4, 44, '456', 'पैयुँ गाउँपालिका', NULL, NULL, NULL, NULL),
(457, 4, 44, '457', 'महाशिला गाउँपालिका', NULL, NULL, NULL, NULL),
(458, 4, 44, '458', 'मोदी गाउँपालिका', NULL, NULL, NULL, NULL),
(459, 4, 44, '459', 'बिहादी गाउँपालिका', NULL, NULL, NULL, NULL),
(460, 3, 45, '460', 'बागलुङ्ग नगरपालिका', NULL, NULL, NULL, NULL),
(461, 3, 45, '461', 'गलकोट नगरपालिका', NULL, NULL, NULL, NULL),
(462, 3, 45, '462', 'जैमिनी नगरपालिका', NULL, NULL, NULL, NULL),
(463, 3, 45, '463', 'ढोरपाटन नगरपालिका', NULL, NULL, NULL, NULL),
(464, 4, 45, '464', 'बरेङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(465, 4, 45, '465', 'कोठेखोला गाउँपालिका', NULL, NULL, NULL, NULL),
(466, 4, 45, '466', 'तमानखोला गाउँपालिका', NULL, NULL, NULL, NULL),
(467, 4, 45, '467', 'ताराखोला गाउँपालिका', NULL, NULL, NULL, NULL),
(468, 4, 45, '468', 'निसीखोला गाउँपालिका', NULL, NULL, NULL, NULL),
(469, 4, 45, '469', 'बढीगाड गाउँपालिका', NULL, NULL, NULL, NULL),
(470, 3, 48, '470', 'कावासोती नगरपालिका', NULL, NULL, NULL, NULL),
(471, 3, 48, '471', 'गैंडाकोट नगरपालिका', NULL, NULL, NULL, NULL),
(472, 3, 48, '472', 'देवचुली नगरपालिका', NULL, NULL, NULL, NULL),
(473, 3, 48, '473', 'मध्यविन्दु नगरपालिका', NULL, NULL, NULL, NULL),
(474, 4, 48, '474', 'बुङ्दीकाली गाउँपालिका', NULL, NULL, NULL, NULL),
(475, 4, 48, '475', 'बुलिङ्टार गाउँपालिका', NULL, NULL, NULL, NULL),
(476, 4, 48, '476', 'विनयीत्रिवेणी गाउँपालिका', NULL, NULL, NULL, NULL),
(477, 4, 48, '477', 'हुप्सेकोट गाउँपालिका', NULL, NULL, NULL, NULL),
(478, 3, 46, '478', 'मुसिकोट नगरपालिका', NULL, NULL, NULL, NULL),
(479, 3, 46, '479', 'रेसुङ्गा नगरपालिका', NULL, NULL, NULL, NULL),
(480, 4, 46, '480', 'ईश्मा गाउँपालिका', NULL, NULL, NULL, NULL),
(481, 4, 46, '481', 'कालीगण्डकी गाउँपालिका', NULL, NULL, NULL, NULL),
(482, 4, 46, '482', 'गुल्मीदरवार गाउँपालिका', NULL, NULL, NULL, NULL),
(483, 4, 46, '483', 'सत्यवती गाउँपालिका', NULL, NULL, NULL, NULL),
(484, 4, 46, '484', 'चन्द्रपुर गाउँपालिका', NULL, NULL, NULL, NULL),
(485, 4, 46, '485', 'रुरु गाउँपालिका', NULL, NULL, NULL, NULL),
(486, 4, 46, '486', 'छत्रकोट गाउँपालिका', NULL, NULL, NULL, NULL),
(487, 4, 46, '487', 'धुर्कोट गाउँपालिका', NULL, NULL, NULL, NULL),
(488, 4, 46, '488', 'मदाने गाउँपालिका', NULL, NULL, NULL, NULL),
(489, 4, 46, '489', 'मालिका गाउँपालिका', NULL, NULL, NULL, NULL),
(490, 3, 47, '490', 'रामपुर नगरपालिका', NULL, NULL, NULL, NULL),
(491, 3, 47, '491', 'तान्सेन नगरपालिका', NULL, NULL, NULL, NULL),
(492, 4, 47, '492', 'निस्दी गाउँपालिका', NULL, NULL, NULL, NULL),
(493, 4, 47, '493', 'पूर्वखोला गाउँपालिका', NULL, NULL, NULL, NULL),
(494, 4, 47, '494', 'रम्भा गाउँपालिका', NULL, NULL, NULL, NULL),
(495, 4, 47, '495', 'मातागढी गाउँपालिका', NULL, NULL, NULL, NULL),
(496, 4, 47, '496', 'तिनाउ गाउँपालिका', NULL, NULL, NULL, NULL),
(497, 4, 47, '497', 'बगनासकाली गाउँपालिका', NULL, NULL, NULL, NULL),
(498, 4, 47, '498', 'रिब्दिकोट गाउँपालिका', NULL, NULL, NULL, NULL),
(499, 4, 47, '499', 'रैनादेवी छहरा गाउँपालिका', NULL, NULL, NULL, NULL),
(500, 3, 48, '500', 'बर्दघाट नगरपालिका', NULL, NULL, NULL, NULL),
(501, 3, 48, '501', 'रामग्राम नगरपालिका', NULL, NULL, NULL, NULL),
(502, 3, 48, '502', 'सुनवल नगरपालिका', NULL, NULL, NULL, NULL),
(503, 4, 48, '503', 'सुस्ता गाउँपालिका', NULL, NULL, NULL, NULL),
(504, 4, 48, '504', 'पाल्हीनन्दन गाउँपालिका', NULL, NULL, NULL, NULL),
(505, 4, 48, '505', 'प्रतापपुर गाउँपालिका', NULL, NULL, NULL, NULL),
(506, 4, 48, '506', 'सरावल गाउँपालिका', NULL, NULL, NULL, NULL),
(507, 2, 49, '507', 'बुटवल उपमहानगरपालिका', NULL, NULL, NULL, NULL),
(508, 3, 49, '508', 'देवदह नगरपालिका', NULL, NULL, NULL, NULL),
(509, 3, 49, '509', 'लुम्बिनी-साँस्कृतिक नगरपालिका', NULL, NULL, NULL, NULL),
(510, 3, 49, '510', 'सैनामैना नगरपालिका', NULL, NULL, NULL, NULL),
(511, 3, 49, '511', 'सिद्धार्थनगर नगरपालिका', NULL, NULL, NULL, NULL),
(512, 3, 49, '512', 'तिलोत्तमा नगरपालिका', NULL, NULL, NULL, NULL),
(513, 4, 49, '513', 'गैडहवा गाउँपालिका', NULL, NULL, NULL, NULL),
(514, 4, 49, '514', 'कञ्चन गाउँपालिका', NULL, NULL, NULL, NULL),
(515, 4, 49, '515', 'कोटहीमाई गाउँपालिका', NULL, NULL, NULL, NULL),
(516, 4, 49, '516', 'मर्चवारी गाउँपालिका', NULL, NULL, NULL, NULL),
(517, 4, 49, '517', 'मायादेवी गाउँपालिका', NULL, NULL, NULL, NULL),
(518, 4, 49, '518', 'ओमसतिया गाउँपालिका', NULL, NULL, NULL, NULL),
(519, 4, 49, '519', 'रोहिणी गाउँपालिका', NULL, NULL, NULL, NULL),
(520, 4, 49, '520', 'सम्मरीमाई गाउँपालिका', NULL, NULL, NULL, NULL),
(521, 4, 49, '521', 'सियारी गाउँपालिका', NULL, NULL, NULL, NULL),
(522, 4, 49, '522', 'सुद्धोदन गाउँपालिका', NULL, NULL, NULL, NULL),
(523, 3, 50, '523', 'कपिलवस्तु नगरपालिका', NULL, NULL, NULL, NULL),
(524, 3, 50, '524', 'बुद्धभूमि नगरपालिका', NULL, NULL, NULL, NULL),
(525, 3, 50, '525', 'शिवराज नगरपालिका', NULL, NULL, NULL, NULL),
(526, 3, 50, '526', 'महाराजगञ्ज नगरपालिका', NULL, NULL, NULL, NULL),
(527, 3, 50, '527', 'कृष्णनगर नगरपालिका', NULL, NULL, NULL, NULL),
(528, 3, 50, '528', 'बाणगङ्गा नगरपालिका', NULL, NULL, NULL, NULL),
(529, 4, 50, '529', 'मायादेवी गाउँपालिका', NULL, NULL, NULL, NULL),
(530, 4, 50, '530', 'यशोधरा गाउँपालिका', NULL, NULL, NULL, NULL),
(531, 4, 50, '531', 'शुद्धोदन गाउँपालिका', NULL, NULL, NULL, NULL),
(532, 4, 50, '532', 'विजयनगर गाउँपालिका', NULL, NULL, NULL, NULL),
(533, 3, 51, '533', 'सन्धिखर्क नगरपालिका', NULL, NULL, NULL, NULL),
(534, 3, 51, '534', 'शितगङ्गा नगरपालिका', NULL, NULL, NULL, NULL),
(535, 3, 51, '535', 'भूमिकास्थान नगरपालिका', NULL, NULL, NULL, NULL),
(536, 4, 51, '536', 'छत्रदेव गाउँपालिका', NULL, NULL, NULL, NULL),
(537, 4, 51, '537', 'पाणिनी गाउँपालिका', NULL, NULL, NULL, NULL),
(538, 4, 51, '538', 'मालारानी गाउँपालिका', NULL, NULL, NULL, NULL),
(539, 3, 52, '539', 'प्युठान नगरपालिका ', NULL, NULL, NULL, NULL),
(540, 3, 52, '540', 'स्वर्गद्वारी नगरपालिका', NULL, NULL, NULL, NULL),
(541, 4, 52, '541', 'गौमुखी गाउँपालिका', NULL, NULL, NULL, NULL),
(542, 4, 52, '542', 'माण्डवी गाउँपालिका', NULL, NULL, NULL, NULL),
(543, 4, 52, '543', 'सरुमारानी गाउँपालिका', NULL, NULL, NULL, NULL),
(544, 4, 52, '544', 'मल्लरानी गाउँपालिका', NULL, NULL, NULL, NULL),
(545, 4, 52, '545', 'नौबहिनी गाउँपालिका', NULL, NULL, NULL, NULL),
(546, 4, 52, '546', 'झिमरुक गाउँपालिका', NULL, NULL, NULL, NULL),
(547, 4, 52, '547', 'ऐरावती गाउँपालिका', NULL, NULL, NULL, NULL),
(548, 3, 53, '548', 'रोल्पा नगरपालिका', NULL, NULL, NULL, NULL),
(549, 4, 53, '549', 'त्रिवेणी गाउँपालिका', NULL, NULL, NULL, NULL),
(550, 4, 53, '550', 'दुईखोली गाउँपालिका', NULL, NULL, NULL, NULL),
(551, 4, 53, '551', 'माडी गाउँपालिका', NULL, NULL, NULL, NULL),
(552, 4, 53, '552', 'रुन्टीगढी गाउँपालिका', NULL, NULL, NULL, NULL),
(553, 4, 53, '553', 'लुङ्ग्री गाउँपालिका', NULL, NULL, NULL, NULL),
(554, 4, 53, '554', 'सुकीदह गाउँपालिका', NULL, NULL, NULL, NULL),
(555, 4, 53, '555', 'सुनछहरी गाउँपालिका', NULL, NULL, NULL, NULL),
(556, 4, 53, '556', 'सुवर्णवती गाउँपालिका', NULL, NULL, NULL, NULL),
(557, 4, 53, '557', 'थवाङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(558, 4, 54, '558', 'पुथाउथरगङ्गा गाउँपालिका', NULL, NULL, NULL, NULL),
(559, 4, 54, '559', 'भूमे गाउँपालिका', NULL, NULL, NULL, NULL),
(560, 4, 54, '560', 'सिस्ने गाउँपालिका', NULL, NULL, NULL, NULL),
(561, 2, 56, '561', 'तुल्सीपुर उपमहानगरपालिका', NULL, NULL, NULL, NULL),
(562, 2, 56, '562', 'घोराही उपमहानगरपालिका', NULL, NULL, NULL, NULL),
(563, 3, 56, '563', 'लमही नगरपालिका', NULL, NULL, NULL, NULL),
(564, 4, 56, '564', 'बङ्गलाचुली गाउँपालिका', NULL, NULL, NULL, NULL),
(565, 4, 56, '565', 'दङ्गीशरण गाउँपालिका', NULL, NULL, NULL, NULL),
(566, 4, 56, '566', 'गढवा गाउँपालिका', NULL, NULL, NULL, NULL),
(567, 4, 56, '567', 'राजपुर गाउँपालिका', NULL, NULL, NULL, NULL),
(568, 4, 56, '568', 'राप्ती गाउँपालिका', NULL, NULL, NULL, NULL),
(569, 4, 56, '569', 'शान्तीनगर गाउँपालिका', NULL, NULL, NULL, NULL),
(570, 4, 56, '570', 'बबई गाउँपालिका', NULL, NULL, NULL, NULL),
(571, 2, 57, '571', 'नेपालगञ्ज उपमहानगरपालिका', NULL, NULL, NULL, NULL),
(572, 3, 57, '572', 'कोहलपुर नगरपालिका', NULL, NULL, NULL, NULL),
(573, 4, 57, '573', 'नरैनापुर गाउँपालिका', NULL, NULL, NULL, NULL),
(574, 4, 57, '574', 'राप्तीसोनारी गाउँपालिका', NULL, NULL, NULL, NULL),
(575, 4, 57, '575', 'बैजनाथ गाउँपालिका', NULL, NULL, NULL, NULL),
(576, 4, 57, '576', 'खजुरा गाउँपालिका', NULL, NULL, NULL, NULL),
(577, 4, 57, '577', 'डुडुवा गाउँपालिका', NULL, NULL, NULL, NULL),
(578, 4, 57, '578', 'जानकी गाउँपालिका', NULL, NULL, NULL, NULL),
(579, 3, 58, '579', 'गुलरिया नगरपालिका', NULL, NULL, NULL, NULL),
(580, 3, 58, '580', 'मधुवन नगरपालिका', NULL, NULL, NULL, NULL),
(581, 3, 58, '581', 'राजापुर नगरपालिका', NULL, NULL, NULL, NULL),
(582, 3, 58, '582', 'ठाकुरबाबा नगरपालिका', NULL, NULL, NULL, NULL),
(583, 3, 58, '583', 'बाँसगढी नगरपालिका', NULL, NULL, NULL, NULL),
(584, 3, 58, '584', 'बारबर्दिया नगरपालिका', NULL, NULL, NULL, NULL),
(585, 4, 58, '585', 'बढैयाताल गाउँपालिका', NULL, NULL, NULL, NULL),
(586, 4, 58, '586', 'गेरुवा गाउँपालिका', NULL, NULL, NULL, NULL),
(587, 3, 55, '587', 'शारदा नगरपालिका', NULL, NULL, NULL, NULL),
(588, 3, 55, '588', 'बाघचौर नगरपालिका', NULL, NULL, NULL, NULL),
(589, 3, 55, '589', 'बनगाड कुपिण्डे नगरपालिका', NULL, NULL, NULL, NULL),
(590, 4, 55, '590', 'कालीमाटी गाउँपालिका', NULL, NULL, NULL, NULL),
(591, 4, 55, '591', 'त्रिवेणी गाउँपालिका', NULL, NULL, NULL, NULL),
(592, 4, 55, '592', 'कपुरकोट गाउँपालिका', NULL, NULL, NULL, NULL),
(593, 4, 55, '593', 'छत्रेश्वरी गाउँपालिका', NULL, NULL, NULL, NULL),
(594, 4, 55, '594', 'ढोरचौर गाउँपालिका', NULL, NULL, NULL, NULL),
(595, 4, 55, '595', 'कुमाख मालिका गाउँपालिका', NULL, NULL, NULL, NULL),
(596, 4, 55, '596', 'दार्मा गाउँपालिका', NULL, NULL, NULL, NULL),
(597, 3, 54, '597', 'मुसीकोट नगरपालिका', NULL, NULL, NULL, NULL),
(598, 3, 54, '598', 'चौरजहारी नगरपालिका', NULL, NULL, NULL, NULL),
(599, 3, 54, '599', 'आठविसकोट नगरपालिका', NULL, NULL, NULL, NULL),
(600, 4, 54, '600', 'बाफिकोट गाउँपालिका', NULL, NULL, NULL, NULL),
(601, 4, 54, '601', 'त्रिवेणी गाउँपालिका', NULL, NULL, NULL, NULL),
(602, 4, 54, '602', 'सानीभेरी गाउँपालिका', NULL, NULL, NULL, NULL),
(603, 3, 59, '603', 'वीरेन्द्रनगर नगरपालिका', NULL, NULL, NULL, NULL),
(604, 3, 59, '604', 'भेरीगङ्गा नगरपालिका', NULL, NULL, NULL, NULL),
(605, 3, 59, '605', 'गुर्भाकोट नगरपालिका', NULL, NULL, NULL, NULL),
(606, 3, 59, '606', 'पञ्चपुरी नगरपालिका', NULL, NULL, NULL, NULL),
(607, 3, 59, '607', 'लेकवेंशी नगरपालिका', NULL, NULL, NULL, NULL),
(608, 4, 59, '608', 'चौकुने गाउँपालिका', NULL, NULL, NULL, NULL),
(609, 4, 59, '609', 'बराहताल गाउँपालिका', NULL, NULL, NULL, NULL),
(610, 4, 59, '610', 'चिंगाड गाउँपालिका', NULL, NULL, NULL, NULL),
(611, 4, 59, '611', 'सिम्ता गाउँपालिका', NULL, NULL, NULL, NULL),
(612, 3, 60, '612', 'नारायण नगरपालिका', NULL, NULL, NULL, NULL),
(613, 3, 60, '613', 'दुल्लु नगरपालिका', NULL, NULL, NULL, NULL),
(614, 3, 60, '614', 'चामुण्डा विन्द्रासैनी नगरपालिका', NULL, NULL, NULL, NULL),
(615, 3, 60, '615', 'आठविस नगरपालिका', NULL, NULL, NULL, NULL),
(616, 4, 60, '616', 'भगवतीमाई गाउँपालिका', NULL, NULL, NULL, NULL),
(617, 4, 60, '617', 'गुराँस गाउँपालिका', NULL, NULL, NULL, NULL),
(618, 4, 60, '618', 'ढुङ्गेश्वर गाउँपालिका', NULL, NULL, NULL, NULL),
(619, 4, 60, '619', 'नौमुले गाउँपालिका', NULL, NULL, NULL, NULL),
(620, 4, 60, '620', 'महाबु गाउँपालिका', NULL, NULL, NULL, NULL),
(621, 4, 60, '621', 'भैरवी गाउँपालिका', NULL, NULL, NULL, NULL),
(622, 4, 60, '622', 'ठाँटीकाँध गाउँपालिका', NULL, NULL, NULL, NULL),
(623, 3, 61, '623', 'भेरी नगरपालिका', NULL, NULL, NULL, NULL),
(624, 3, 61, '624', 'छेडागाड नगरपालिका', NULL, NULL, NULL, NULL),
(625, 3, 61, '625', 'त्रिवेणीगाड नगरपालिका', NULL, NULL, NULL, NULL),
(626, 4, 61, '626', 'कुशे गाउँपालिका', NULL, NULL, NULL, NULL),
(627, 4, 61, '627', 'जुनीचाँदे गाउँपालिका', NULL, NULL, NULL, NULL),
(628, 4, 61, '628', 'बारेकोट गाउँपालिका', NULL, NULL, NULL, NULL),
(629, 4, 61, '629', 'शिवालय गाउँपालिका', NULL, NULL, NULL, NULL),
(630, 3, 62, '630', 'ठूलीभेरी नगरपालिका', NULL, NULL, NULL, NULL),
(631, 3, 62, '631', 'त्रिपुरासुन्दरी नगरपालिका', NULL, NULL, NULL, NULL),
(632, 4, 62, '632', 'डोल्पोबुद्ध गाउँपालिका', NULL, NULL, NULL, NULL),
(633, 4, 62, '633', 'शे-फोक्सुण्डो गाउँपालिका', NULL, NULL, NULL, NULL),
(634, 4, 62, '634', 'जगदुल्ला गाउँपालिका', NULL, NULL, NULL, NULL),
(635, 4, 62, '635', 'मुड्केचुला गाउँपालिका', NULL, NULL, NULL, NULL),
(636, 4, 62, '636', 'काईके गाउँपालिका', NULL, NULL, NULL, NULL),
(637, 4, 62, '637', 'छार्का ताङ्सोङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(638, 3, 63, '638', 'चन्दननाथ नगरपालिका', NULL, NULL, NULL, NULL),
(639, 4, 63, '639', 'कनका सुन्दरी गाउँपालिका', NULL, NULL, NULL, NULL),
(640, 4, 63, '640', 'सिंजा गाउँपालिका', NULL, NULL, NULL, NULL),
(641, 4, 63, '641', 'हिमा गाउँपालिका', NULL, NULL, NULL, NULL),
(642, 4, 63, '642', 'तिला गाउँपालिका', NULL, NULL, NULL, NULL),
(643, 4, 63, '643', 'गुठीचौर गाउँपालिका', NULL, NULL, NULL, NULL),
(644, 4, 63, '644', 'तातोपानी गाउँपालिका', NULL, NULL, NULL, NULL),
(645, 4, 63, '645', 'पातारासी गाउँपालिका', NULL, NULL, NULL, NULL),
(646, 3, 64, '646', 'खाँडाचक्र नगरपालिका', NULL, NULL, NULL, NULL),
(647, 3, 64, '647', 'रासकोट नगरपालिका', NULL, NULL, NULL, NULL),
(648, 3, 64, '648', 'तिलागुफा नगरपालिका', NULL, NULL, NULL, NULL),
(649, 4, 64, '649', 'कचाल झरना गाउँपालिका', NULL, NULL, NULL, NULL),
(650, 4, 64, '650', 'सान्नीत्रिवेणी गाउँपालिका', NULL, NULL, NULL, NULL),
(651, 4, 64, '651', 'नरहरीनाथ गाउँपालिका', NULL, NULL, NULL, NULL),
(652, 4, 64, '652', 'कालिका गाउँपालिका', NULL, NULL, NULL, NULL),
(653, 4, 64, '653', 'महाबै गाउँपालिका', NULL, NULL, NULL, NULL),
(654, 4, 64, '654', 'पलाता गाउँपालिका', NULL, NULL, NULL, NULL),
(655, 3, 65, '655', 'छायानाथ रारा नगरपालिका', NULL, NULL, NULL, NULL),
(656, 4, 65, '656', 'मुगु मकार्मारोंग गाउँपालिका', NULL, NULL, NULL, NULL),
(657, 4, 65, '657', 'सोरु गाउँपालिका', NULL, NULL, NULL, NULL),
(658, 4, 65, '658', 'खत्याड गाउँपालिका', NULL, NULL, NULL, NULL),
(659, 4, 66, '659', 'सिमकोट गाउँपालिका', NULL, NULL, NULL, NULL),
(660, 4, 66, '660', 'नाम्खा गाउँपालिका', NULL, NULL, NULL, NULL),
(661, 4, 66, '661', 'खार्पुनाथ गाउँपालिका', NULL, NULL, NULL, NULL),
(662, 4, 66, '662', 'सर्केगाड गाउँपालिका', NULL, NULL, NULL, NULL),
(663, 4, 66, '663', 'चङ्खेली गाउँपालिका', NULL, NULL, NULL, NULL),
(664, 4, 66, '664', 'अदानचुली गाउँपालिका', NULL, NULL, NULL, NULL),
(665, 4, 66, '665', 'ताँजाकोट गाउँपालिका', NULL, NULL, NULL, NULL),
(666, 3, 67, '666', 'बडीमालिका नगरपालिका', NULL, NULL, NULL, NULL),
(667, 3, 67, '667', 'त्रिवेणी नगरपालिका', NULL, NULL, NULL, NULL),
(668, 3, 67, '668', 'बुढीगङ्गा नगरपालिका', NULL, NULL, NULL, NULL),
(669, 3, 67, '669', 'बुढीनन्दा नगरपालिका', NULL, NULL, NULL, NULL),
(670, 4, 67, '670', 'गौमूल गाउँपालिका', NULL, NULL, NULL, NULL),
(671, 4, 67, '671', 'पाण्डवगुफा गाउँपालिका', NULL, NULL, NULL, NULL),
(672, 4, 67, '672', 'स्वामिकार्तिक गाउँपालिका', NULL, NULL, NULL, NULL),
(673, 4, 67, '673', 'छेडेदह गाउँपालिका', NULL, NULL, NULL, NULL),
(674, 4, 67, '674', 'हिमाली गाउँपालिका', NULL, NULL, NULL, NULL),
(675, 3, 68, '675', 'जयपृथ्वी नगरपालिका', NULL, NULL, NULL, NULL),
(676, 3, 68, '676', 'बुङ्गल नगरपालिका', NULL, NULL, NULL, NULL),
(677, 4, 68, '677', 'तलकोट गाउँपालिका', NULL, NULL, NULL, NULL),
(678, 4, 68, '678', 'मस्टा गाउँपालिका', NULL, NULL, NULL, NULL),
(679, 4, 68, '679', 'खप्तड छात्रा गाउँपालिका', NULL, NULL, NULL, NULL),
(680, 4, 68, '680', 'थलारा गाउँपालिका', NULL, NULL, NULL, NULL),
(681, 4, 68, '681', 'विथ्थडचिर गाउँपालिका', NULL, NULL, NULL, NULL),
(682, 4, 68, '682', 'सुर्मा गाउँपालिका', NULL, NULL, NULL, NULL),
(683, 4, 68, '683', 'छब्बिसपाथीभेरा गाउँपालिका', NULL, NULL, NULL, NULL),
(684, 4, 68, '684', 'दुर्गाथली गाउँपालिका', NULL, NULL, NULL, NULL),
(685, 4, 68, '685', 'केदारस्यूँ गाउँपालिका', NULL, NULL, NULL, NULL),
(686, 4, 68, '686', 'काँडा गाउँपालिका', NULL, NULL, NULL, NULL),
(687, 3, 69, '687', 'मङ्गलसेन नगरपालिका', NULL, NULL, NULL, NULL),
(688, 3, 69, '688', 'कमलवजार नगरपालिका', NULL, NULL, NULL, NULL),
(689, 3, 69, '689', 'साँफेबगर नगरपालिका', NULL, NULL, NULL, NULL),
(690, 3, 69, '690', 'पञ्चदेवल विनायक नगरपालिका', NULL, NULL, NULL, NULL),
(691, 4, 69, '691', 'चौरपाटी गाउँपालिका', NULL, NULL, NULL, NULL),
(692, 4, 69, '692', 'मेल्लेख गाउँपालिका', NULL, NULL, NULL, NULL),
(693, 4, 69, '693', 'बाँन्नीगढी जयगढ गाउँपालिका', NULL, NULL, NULL, NULL),
(694, 4, 69, '694', 'रामारोसन गाउँपालिका', NULL, NULL, NULL, NULL),
(695, 4, 69, '695', 'ढकारी गाउँपालिका', NULL, NULL, NULL, NULL),
(696, 4, 69, '696', 'तुर्माखाँद गाउँपालिका', NULL, NULL, NULL, NULL),
(697, 3, 70, '697', 'दिपायल सिलगढी नगरपालिका', NULL, NULL, NULL, NULL),
(698, 3, 70, '698', 'शिखर नगरपालिका', NULL, NULL, NULL, NULL),
(699, 4, 70, '699', 'पूर्वीचौकी गाउँपालिका', NULL, NULL, NULL, NULL),
(700, 4, 70, '700', 'बढीकेदार गाउँपालिका', NULL, NULL, NULL, NULL),
(701, 4, 70, '701', 'जोरायल गाउँपालिका', NULL, NULL, NULL, NULL),
(702, 4, 70, '702', 'सायल गाउँपालिका', NULL, NULL, NULL, NULL),
(703, 4, 70, '703', 'आदर्श गाउँपालिका', NULL, NULL, NULL, NULL),
(704, 4, 70, '704', 'के.आई.सिङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(705, 4, 70, '705', 'बोगटान गाउँपालिका', NULL, NULL, NULL, NULL),
(706, 2, 71, '706', 'धनगढी उपमहानगरपालिका', NULL, NULL, NULL, NULL),
(707, 3, 71, '707', 'टिकापुर नगरपालिका', NULL, NULL, NULL, NULL),
(708, 3, 71, '708', 'घोडाघोडी नगरपालिका', NULL, NULL, NULL, NULL),
(709, 3, 71, '709', 'लम्कीचुहा नगरपालिका', NULL, NULL, NULL, NULL),
(710, 3, 71, '710', 'भजनी नगरपालिका', NULL, NULL, NULL, NULL),
(711, 3, 71, '711', 'गोदावरी नगरपालिका', NULL, NULL, NULL, NULL),
(712, 3, 71, '712', 'गौरीगङ्गा नगरपालिका', NULL, NULL, NULL, NULL),
(713, 4, 71, '713', 'जानकी गाउँपालिका', NULL, NULL, NULL, NULL),
(714, 4, 71, '714', 'बर्दगोरिया गाउँपालिका', NULL, NULL, NULL, NULL),
(715, 4, 71, '715', 'मोहन्याल गाउँपालिका', NULL, NULL, NULL, NULL),
(716, 4, 71, '716', 'कैलारी गाउँपालिका', NULL, NULL, NULL, NULL),
(717, 4, 71, '717', 'जोशीपुर गाउँपालिका', NULL, NULL, NULL, NULL),
(718, 4, 71, '718', 'चुरे गाउँपालिका', NULL, NULL, NULL, NULL),
(719, 3, 72, '719', 'भिमदत्त नगरपालिका', NULL, NULL, NULL, NULL),
(720, 3, 72, '720', 'पुनर्वास नगरपालिका', NULL, NULL, NULL, NULL),
(721, 3, 72, '721', 'बेदकोट नगरपालिका', NULL, NULL, NULL, NULL),
(722, 3, 72, '722', 'महाकाली नगरपालिका', NULL, NULL, NULL, NULL),
(723, 3, 72, '723', 'शुक्लाफाँटा नगरपालिका', NULL, NULL, NULL, NULL),
(724, 3, 72, '724', 'बेलौरी नगरपालिका', NULL, NULL, NULL, NULL),
(725, 3, 72, '725', 'कृष्णपुर नगरपालिका', NULL, NULL, NULL, NULL),
(726, 4, 72, '726', 'बेलडाँडी गाउँपालिका', NULL, NULL, NULL, NULL),
(727, 4, 72, '727', 'लालझाँडी गाउँपालिका', NULL, NULL, NULL, NULL),
(728, 3, 73, '728', 'अमरगढी नगरपालिका', NULL, NULL, NULL, NULL),
(729, 3, 73, '729', 'परशुराम नगरपालिका', NULL, NULL, NULL, NULL),
(730, 4, 73, '730', 'आलिताल गाउँपालिका', NULL, NULL, NULL, NULL),
(731, 4, 73, '731', 'भागेश्वर गाउँपालिका', NULL, NULL, NULL, NULL),
(732, 4, 73, '732', 'नवदुर्गा गाउँपालिका', NULL, NULL, NULL, NULL),
(733, 4, 73, '733', 'अजयमेरु गाउँपालिका', NULL, NULL, NULL, NULL),
(734, 4, 73, '734', 'गन्यापधुरा गाउँपालिका', NULL, NULL, NULL, NULL),
(735, 3, 74, '735', 'दशरथचन्द नगरपालिका', NULL, NULL, NULL, NULL),
(736, 3, 74, '736', 'पाटन नगरपालिका', NULL, NULL, NULL, NULL),
(737, 3, 74, '737', 'मेलौली नगरपालिका', NULL, NULL, NULL, NULL),
(738, 3, 74, '738', 'पुचौडी नगरपालिका', NULL, NULL, NULL, NULL),
(739, 4, 74, '739', 'सुर्नया गाउँपालिका', NULL, NULL, NULL, NULL),
(740, 4, 74, '740', 'सिगास गाउँपालिका', NULL, NULL, NULL, NULL),
(741, 4, 74, '741', 'शिवनाथ गाउँपालिका', NULL, NULL, NULL, NULL),
(742, 4, 74, '742', 'पञ्चेश्वर गाउँपालिका', NULL, NULL, NULL, NULL),
(743, 4, 74, '743', 'दगेडा केदार गाउँपालिका', NULL, NULL, NULL, NULL),
(744, 4, 74, '744', 'डिलासैनी गाउँपालिका', NULL, NULL, NULL, NULL),
(745, 3, 75, '745', 'महाकाली नगरपालिका', NULL, NULL, NULL, NULL),
(746, 3, 75, '746', 'शैलेश शिखर नगरपालिका', NULL, NULL, NULL, NULL),
(747, 4, 75, '747', 'मालिकार्जुन गाउँपालिका', NULL, NULL, NULL, NULL),
(748, 4, 75, '748', 'अपिहिमाल गाउँपालिका', NULL, NULL, NULL, NULL),
(749, 4, 75, '749', 'दुहुँ गाउँपालिका', NULL, NULL, NULL, NULL),
(750, 4, 75, '750', 'नौगाड गाउँपालिका', NULL, NULL, NULL, NULL),
(751, 4, 75, '751', 'मार्मा गाउँपालिका', NULL, NULL, NULL, NULL),
(752, 4, 75, '752', 'लेकङ्ग गाउँपालिका', NULL, NULL, NULL, NULL),
(753, 4, 75, '753', 'ब्यास गाउँपालिका', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `muni_types`
--

CREATE TABLE `muni_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `muni_type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `muni_types`
--

INSERT INTO `muni_types` (`id`, `muni_type_name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'महानगरपालिका', NULL, NULL, NULL),
(2, 'उपमहानगरपालिका', NULL, NULL, NULL),
(3, 'नगरपालिका', NULL, NULL, NULL),
(4, 'गाउँपालिका', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` int(10) UNSIGNED NOT NULL,
  `office_type_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `district_id` int(10) UNSIGNED NOT NULL,
  `office_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `office_types`
--

CREATE TABLE `office_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `office_type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pradeshes`
--

CREATE TABLE `pradeshes` (
  `id` int(10) UNSIGNED NOT NULL,
  `pradesh_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pradeshes`
--

INSERT INTO `pradeshes` (`id`, `pradesh_name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Pradesh-1', NULL, NULL, NULL),
(2, 'Pradesh-2', NULL, NULL, NULL),
(3, 'Pradesh-3', NULL, NULL, NULL),
(4, 'Pradesh-4', NULL, NULL, NULL),
(5, 'Pradesh-5', NULL, NULL, NULL),
(6, 'Pradesh-6', NULL, NULL, NULL),
(7, 'Pradesh-7', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` int(11) NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `search_access_levels`
--

CREATE TABLE `search_access_levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `access_level` tinyint(4) NOT NULL,
  `access_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `search_groups`
--

CREATE TABLE `search_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `design` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deployment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `support` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `phone`, `logo`, `address`, `email`, `facebook`, `youtube`, `twitter`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, '+977-9860162701', 'logo.png', 'Duwakot,Bhaktapur', 'padamghimire75@gmail.com', 'facebook.com', 'youtube.com', 'twitter.com', 'linkedin.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation_id` int(10) UNSIGNED NOT NULL,
  `user_group_id` int(10) UNSIGNED NOT NULL,
  `user_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `designation_id`, `user_group_id`, `user_image`, `user_status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Paschimanchal', 'admin@admin.com', '$2y$10$YOU15sP/Eu22U.4Gl2LOsO5XOmVs.fhK6mRfD/lsQJwGm6oNnm/ye', 1, 1, NULL, 'active', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`id`, `group_name`, `group_details`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Super Admin', '', NULL, NULL, NULL),
(2, 'Admin', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_group_id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `allow_view` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `allow_add` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `allow_edit` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `allow_delete` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_group_id`, `menu_id`, `allow_view`, `allow_add`, `allow_edit`, `allow_delete`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1', '1', '1', '1', NULL, NULL, NULL),
(2, 1, 2, '1', '1', '1', '1', NULL, NULL, NULL),
(3, 1, 3, '1', '1', '1', '1', NULL, NULL, NULL),
(4, 1, 4, '1', '1', '1', '1', NULL, NULL, NULL),
(5, 1, 5, '1', '1', '1', '1', NULL, NULL, NULL),
(6, 1, 6, '1', '1', '1', '1', NULL, NULL, NULL),
(7, 1, 7, '1', '1', '1', '1', NULL, NULL, NULL),
(8, 1, 8, '1', '1', '1', '1', NULL, NULL, NULL),
(9, 1, 9, '1', '1', '1', '1', NULL, NULL, NULL),
(10, 1, 10, '1', '1', '1', '1', NULL, NULL, NULL),
(11, 1, 11, '1', '1', '1', '1', NULL, NULL, NULL),
(12, 1, 12, '1', '1', '1', '1', NULL, NULL, NULL),
(13, 1, 13, '1', '1', '1', '1', NULL, NULL, NULL),
(14, 1, 14, '1', '1', '1', '1', NULL, NULL, NULL),
(15, 1, 15, '1', '1', '1', '1', NULL, NULL, NULL),
(16, 1, 16, '1', '1', '1', '1', NULL, NULL, NULL),
(17, 1, 17, '1', '1', '1', '1', NULL, NULL, NULL),
(18, 1, 18, '1', '1', '1', '1', NULL, NULL, NULL),
(19, 1, 19, '1', '1', '1', '1', NULL, NULL, NULL),
(20, 1, 20, '1', '1', '1', '1', NULL, NULL, NULL),
(21, 1, 21, '1', '1', '1', '1', NULL, NULL, NULL),
(22, 1, 22, '1', '1', '1', '1', NULL, NULL, NULL),
(23, 1, 23, '1', '1', '1', '1', NULL, NULL, NULL),
(24, 1, 24, '1', '1', '1', '1', NULL, NULL, NULL),
(25, 1, 25, '1', '1', '1', '1', NULL, NULL, NULL),
(26, 1, 26, '1', '1', '1', '1', NULL, NULL, '2020-11-20 02:02:47');

-- --------------------------------------------------------

--
-- Table structure for table `why_wes`
--

CREATE TABLE `why_wes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audits`
--
ALTER TABLE `audits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `audits_auditable_type_auditable_id_index` (`auditable_type`,`auditable_id`),
  ADD KEY `audits_user_id_user_type_index` (`user_id`,`user_type`);

--
-- Indexes for table `audit_logs`
--
ALTER TABLE `audit_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `audit_logs_log_name_index` (`log_name`);

--
-- Indexes for table `board_members`
--
ALTER TABLE `board_members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `board_members_designation_id_foreign` (`designation_id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_pradesh_id_foreign` (`pradesh_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedback_user_id_foreign` (`user_id`);

--
-- Indexes for table `fiscal_years`
--
ALTER TABLE `fiscal_years`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_fails`
--
ALTER TABLE `login_fails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_logs`
--
ALTER TABLE `login_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `municipalities`
--
ALTER TABLE `municipalities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `municipalities_muni_type_id_foreign` (`muni_type_id`),
  ADD KEY `municipalities_district_id_foreign` (`district_id`);

--
-- Indexes for table `muni_types`
--
ALTER TABLE `muni_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offices_office_type_id_foreign` (`office_type_id`),
  ADD KEY `offices_district_id_foreign` (`district_id`);

--
-- Indexes for table `office_types`
--
ALTER TABLE `office_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pradeshes`
--
ALTER TABLE `pradeshes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search_access_levels`
--
ALTER TABLE `search_access_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search_groups`
--
ALTER TABLE `search_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_designation_id_foreign` (`designation_id`),
  ADD KEY `users_user_group_id_foreign` (`user_group_id`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_roles_user_group_id_foreign` (`user_group_id`),
  ADD KEY `user_roles_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `why_wes`
--
ALTER TABLE `why_wes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audits`
--
ALTER TABLE `audits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit_logs`
--
ALTER TABLE `audit_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `board_members`
--
ALTER TABLE `board_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fiscal_years`
--
ALTER TABLE `fiscal_years`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_fails`
--
ALTER TABLE `login_fails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_logs`
--
ALTER TABLE `login_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `municipalities`
--
ALTER TABLE `municipalities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=754;

--
-- AUTO_INCREMENT for table `muni_types`
--
ALTER TABLE `muni_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `office_types`
--
ALTER TABLE `office_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pradeshes`
--
ALTER TABLE `pradeshes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `search_access_levels`
--
ALTER TABLE `search_access_levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `search_groups`
--
ALTER TABLE `search_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `why_wes`
--
ALTER TABLE `why_wes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `board_members`
--
ALTER TABLE `board_members`
  ADD CONSTRAINT `board_members_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`);

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_pradesh_id_foreign` FOREIGN KEY (`pradesh_id`) REFERENCES `pradeshes` (`id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `municipalities`
--
ALTER TABLE `municipalities`
  ADD CONSTRAINT `municipalities_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`),
  ADD CONSTRAINT `municipalities_muni_type_id_foreign` FOREIGN KEY (`muni_type_id`) REFERENCES `muni_types` (`id`);

--
-- Constraints for table `offices`
--
ALTER TABLE `offices`
  ADD CONSTRAINT `offices_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`),
  ADD CONSTRAINT `offices_office_type_id_foreign` FOREIGN KEY (`office_type_id`) REFERENCES `office_types` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `users_user_group_id_foreign` FOREIGN KEY (`user_group_id`) REFERENCES `user_groups` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_roles_user_group_id_foreign` FOREIGN KEY (`user_group_id`) REFERENCES `user_groups` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
