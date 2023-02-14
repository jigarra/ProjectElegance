-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 07:58 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectelegance`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `date` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_id` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `phone`, `service`, `amount`, `date`, `time`, `message`, `status`, `user_id`, `service_id`, `created_at`, `updated_at`) VALUES
(224, 'ismile bharmal', 'ismilebharmalalien@gmail.com', '8866275251', 'MEN\'S FACIALS', 150000, '12/01/2022', '06:30 PM to 07:00 PM', NULL, 'in progress', '25', '14', '2022-11-30 14:18:18', '2022-11-30 14:18:18');

-- --------------------------------------------------------

--
-- Table structure for table `approves`
--

CREATE TABLE `approves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointment_id` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `approves`
--

INSERT INTO `approves` (`id`, `name`, `email`, `phone`, `service`, `amount`, `date`, `time`, `message`, `status`, `user_id`, `appointment_id`, `created_at`, `updated_at`) VALUES
(25, 'ismile bharmal', 'ismilebharmalalien@gmail.com', '8866275251', 'Beard', '15000', '12/01/2022', '10:00 AM to 10:30 AM', NULL, 'approved', '25', '223', '2022-11-30 14:14:02', '2022-11-30 14:14:02'),
(27, 'Nirbhay Vora', 'nirbhayvora700@gmail.com', '6352999842', 'Body Wax & Body Scrub', '100000', '12/09/2022', '04:30 PM to 05:00 PM', NULL, 'approved', '26', '226', '2022-12-08 12:32:55', '2022-12-08 12:32:55'),
(28, 'Nirbhay Vora', 'nirbhayvora700@gmail.com', '6352999842', 'Beard', '15000', '01/05/2023', '05:30 PM to 06:30 PM', NULL, 'approved', '26', '229', '2022-12-08 13:09:44', '2022-12-08 13:09:44'),
(29, 'Nirbhay Vora', 'nirbhayvora700@gmail.com', '6352999842', 'Body Wax & Body Scrub', '100000', '12/15/2022', '11:30 AM to 12:00 AM', NULL, 'approved', '26', '228', '2022-12-08 13:09:48', '2022-12-08 13:09:48');

-- --------------------------------------------------------

--
-- Table structure for table `cancles`
--

CREATE TABLE `cancles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointment_id` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cancles`
--

INSERT INTO `cancles` (`id`, `name`, `email`, `phone`, `service`, `amount`, `date`, `time`, `message`, `status`, `user_id`, `appointment_id`, `created_at`, `updated_at`) VALUES
(20, 'Nirbhay Vora', 'nirbhayvora700@gmail.com', '6352999842', 'Face treatment', '30000', '12/01/2022', '06:30 PM to 07:00 PM', NULL, 'Cancle', '26', '196', '2022-11-30 13:34:08', '2022-11-30 13:34:08'),
(21, 'ismile bharmal', 'ismilebharmalalien@gmail.com', '8866275251', 'Beard', '15000', '12/02/2022', '07:00 PM to 07:30 PM', NULL, 'Cancle', '25', '199', '2022-11-30 13:45:35', '2022-11-30 13:45:35'),
(22, 'ismile bharmal', 'ismilebharmalalien@gmail.com', '8866275251', 'Body Wax & Body Scrub', '100000', '12/02/2022', '04:30 PM to 05:00 PM', NULL, 'Cancle', '25', '198', '2022-11-30 13:46:51', '2022-11-30 13:46:51'),
(23, 'Nirbhay Vora', 'nirbhayvora700@gmail.com', '6352999842', 'Body scrub', '80000', '12/01/2022', '05:30 PM to 06:30 PM', NULL, 'Cancle', '26', '197', '2022-11-30 13:54:10', '2022-11-30 13:54:10'),
(24, 'Nirbhay Vora', 'nirbhayvora700@gmail.com', '6352999842', 'MEN\'S FACIALS', '150000', '12/10/2022', '05:30 PM to 06:30 PM', NULL, 'Cancle', '26', '225', '2022-12-08 12:27:19', '2022-12-08 12:27:19'),
(25, 'ismile bharmal', 'ismilebharmalalien@gmail.com', '8866275251', 'Hair color', '35000', '12/01/2022', '05:30 PM to 06:30 PM', NULL, 'Cancle', '25', '200', '2022-12-08 13:13:18', '2022-12-08 13:13:18'),
(26, 'Nirbhay Vora', 'nirbhayvora700@gmail.com', '6352999842', 'Hair color & WASH', '90100', '12/16/2022', '03:00 PM to 03:30 PM', NULL, 'Cancle', '26', '227', '2022-12-08 13:13:52', '2022-12-08 13:13:52');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_06_16_110808_create_sessions_table', 1),
(7, '2022_06_16_135844_create_services_table', 2),
(8, '2022_06_19_080848_create_appoinments_table', 3),
(9, '2022_06_19_080848_create_appointments_table', 4),
(10, '2022_07_10_102648_create_subscribs_table', 5),
(11, '2022_07_10_141308_create_notifications_table', 6),
(12, '2022_11_23_113303_create_payments_table', 7),
(13, '2022_11_30_094535_create_approves_table', 8),
(14, '2022_11_30_104828_create_cancles_table', 9),
(15, '2022_12_08_132118_create_newsletters_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'jigarmalani999@gmail.com', '2022-12-08 08:00:39', '2022-12-08 08:00:39'),
(2, 'admin@admin.com', '2022-12-08 08:00:45', '2022-12-08 08:00:45'),
(3, 'dpatel@gmail.com', '2022-12-08 13:06:17', '2022-12-08 13:06:17');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
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

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('jigsmalani143@gmail.com', '$2y$10$FCr8jc5CmSkegXBZ4oGm/OwW7DTUD9kYF9z1JGmcTyU6pf7c7V53y', '2022-06-22 05:58:19'),
('nirbhayvora700@gmail.com', '$2y$10$D3o1rGShqOogqlq9KTP1zelQFr/PIzb582aj0K3j5/ZUZBfFiwK6y', '2022-07-10 08:16:40'),
('jigarmalani999@gmail.com', '$2y$10$1Jw2rV16D84VhlBgoOdvoOTx8gLkDClEOV/omc2PbD5Uw8PR1beJW', '2022-07-10 08:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ServiceName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointment_id` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `razorpay_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_done` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `service_id`, `ServiceName`, `date`, `time`, `amount`, `user_id`, `appointment_id`, `payment_id`, `razorpay_id`, `payment_done`, `created_at`, `updated_at`) VALUES
(216, '10', 'Face treatment', '12/01/2022', '06:30 PM to 07:00 PM', 30000, '26', '196', 'pay_KmMJOTTFZPismC', 'order_KmMJGTw8Grl7bO', 1, '2022-11-30 13:33:45', '2022-11-30 13:33:58'),
(217, '6', 'Body scrub', '12/01/2022', '05:30 PM to 06:30 PM', 80000, '26', '197', 'pay_KmMLUBeazwRTgg', 'order_KmMLOb38x3xfAg', 1, '2022-11-30 13:35:46', '2022-11-30 13:35:57'),
(219, '3', 'Beard', '12/02/2022', '07:00 PM to 07:30 PM', 15000, '25', '199', 'pay_KmMVIWPPHmdjGH', 'order_KmMUsMj5pf5CXd', 1, '2022-11-30 13:44:45', '2022-11-30 13:45:14'),
(220, '4', 'Hair color', '12/01/2022', '05:30 PM to 06:30 PM', 35000, '25', '200', 'pay_KmMiL83MtzhhNd', 'order_KmMiBHuWQCuP3Y', 1, '2022-11-30 13:57:21', '2022-11-30 13:57:35'),
(246, '13', 'Body Wax & Body Scrub', '12/09/2022', '04:30 PM to 05:00 PM', 100000, '26', '226', 'cash', 'order_KpVSjvBJ2zOgiq', 0, '2022-12-08 12:27:58', '2022-12-08 12:27:58'),
(247, '11', 'Hair color & WASH', '12/16/2022', '03:00 PM to 03:30 PM', 90100, '26', '227', 'pay_KpVTcMFUvvmxb8', 'order_KpVTNyxlbhgVmZ', 1, '2022-12-08 12:28:35', '2022-12-08 12:28:54'),
(248, '13', 'Body Wax & Body Scrub', '12/15/2022', '11:30 AM to 12:00 AM', 100000, '26', '228', 'pay_KpW9L05OTJrKlk', 'order_KpW8ps83fDOaXi', 1, '2022-12-08 13:07:49', '2022-12-08 13:08:23'),
(249, '3', 'Beard', '01/05/2023', '05:30 PM to 06:30 PM', 15000, '26', '229', 'cash', 'order_KpW9sAsLe3vV5C', 0, '2022-12-08 13:08:48', '2022-12-08 13:08:48');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discription` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(255) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `discription`, `price`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Hair Wash', 'Shinning and Smoothing hair', 399, '1655894321.jpg', '2022-06-16 09:01:52', '2022-06-22 05:08:41'),
(3, 'Beard', 'Tream and set your Beard', 150, '1655390038.jpg', '2022-06-16 09:03:58', '2022-06-16 09:03:58'),
(4, 'Hair color', 'Testr Hair Color', 350, '1655396846.jpg', '2022-06-16 10:57:26', '2022-06-16 10:57:26'),
(6, 'Body scrub', 'Body scrub Treatement With Expert', 800, '1669738110.jpg', '2022-06-22 04:38:05', '2022-11-29 10:38:30'),
(7, 'Hair Cutting', 'Test Hair cut', 200, '1656152043.jpg', '2022-06-25 04:43:29', '2022-06-25 04:44:03'),
(10, 'Face treatment', 'Best heir wash in out salon', 300, '1669738288.jpg', '2022-11-21 08:21:02', '2022-11-29 10:41:28'),
(11, 'Hair color & WASH', 'now we are provideing a hair wash &hair color combo pack only for valuable customer.', 901, '1669824713.jpeg', '2022-11-30 10:41:53', '2022-11-30 10:41:53'),
(13, 'Body Wax & Body Scrub', 'A body scrub may be a physical exfoliant that is usually either salt or sugar-based, wont to remove dead skin cells from your skin. The abrasive ingredients (sugar, salt) are worked into the skin and work as a natural exfoliant, clearing the skin of older skin cells so your skin feels soft supple and nourished. Body scrub works by stimulating somatic cell turnover for smoother, brighter skin, and may help restore’s skins natural moisture, prevent future acne breakouts, and cause you to feel great!', 1000, '1669825289.jpg', '2022-11-30 10:51:29', '2022-11-30 10:51:29'),
(14, 'MEN\'S FACIALS', 'In India most of the Men\'s think \"facials are an extravagance better suited to ladies\" that kind of thinking is wrong. ou trust a professional to cut your hair, why don’t you do the same for your face? No matter how much you wash your face or how often you slather on moisturizer, the skin on your face can go crazy at the drop of a hat. When it does, you may not know what to do. That’s where an esthetician comes in. we are trained professionals who know exactly what to do to make you look better.  Our Experts deeply cleanse skin before exfoliating away dead skin cells, steaming open pores, performing extractions to clear individually clogged pores, and applying a toner. The facials may include a vigorous face, neck, and shoulder massage', 1500, '1669833813.jpg', '2022-11-30 13:13:33', '2022-11-30 13:13:33'),
(15, 'Hair Cut & Beard & Hair color', 'Three in one Package in reasonable price', 1501, '1670525486.jpeg', '2022-12-08 13:21:26', '2022-12-08 13:21:26');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('pbqAqVOesDGnJDCSWe1GywkbkRSubWiPTJ6Liiqc', 22, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibWtOMWVuemhBZllQZGlMOVlKZVBEZlhzeGhXWVpXRGVURkR2UzZ2WSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaG93X2FkbWluIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjI7fQ==', 1670526127),
('PralHA8TEhGnBuiKMRgG51TRGc3DXGJbjVpIZhTk', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidnI1WndtcUVDdDR2NmcxM3ZjNDZkV2wydExrRXcxTFFhczc0UzI3SiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zZXJ2aWNlLXBhY2thZ2UvMTUiO319', 1670525505);

-- --------------------------------------------------------

--
-- Table structure for table `subscribs`
--

CREATE TABLE `subscribs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribs`
--

INSERT INTO `subscribs` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'ismile bharmal', 'jigarmalani999@gmail.com', 'test subscribe', 'hello admin', '2022-07-10 05:29:50', '2022-07-10 05:29:50'),
(2, 'Jigar Malana', 'raj@gmail.com', 'help', 'pleas the other marrige special service inforamation', '2022-07-10 05:31:21', '2022-07-10 05:31:21'),
(3, 'raj malani', 'Jigarmalani999@gmail.com', 'Regards', 'Your services is very good  im happy with your service', '2022-07-10 05:33:28', '2022-07-10 05:33:28'),
(4, 'Hani patel', 'hani@gmail.com', 'mare Hair cut karvana chhe', 'mare Hair cut karvana chhe  sara karvana chhe', '2022-12-08 13:15:19', '2022-12-08 13:15:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@user.com', '1234567890', 'usertest', '0', '2022-07-02 09:16:27', '$2y$10$stpoR6N8Cz9SnhR4c0bbie.iQD8L6LyXlPL6drciKS08bFgWiIHE6', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-16 05:54:42', '2022-11-17 01:15:56'),
(2, 'Admin', 'admin@admin.com', '1234567890', 'Admin test', '1', '2022-07-02 09:16:27', '$2y$10$6YG/IX.ndbkxnVP0EPoTneL9d/FbhCNe6VLbtfrlAbBOPWa7fDZky', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-16 05:55:28', '2022-06-16 05:55:28'),
(22, 'Super Admin', 'superadmin@gmail.com', '7896541230', 'Urbar', '3', '2022-11-16 22:41:44', '$2y$10$V.mJpWeOrEk6paM/.YSdjeqBBYmPpefCbrxcaOtUo7R6uCdZFfMci', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-16 17:11:23', '2022-11-16 17:11:23'),
(25, 'ismile bharmal', 'ismilebharmalalien@gmail.com', '8866275251', 'jail chock,takshasheela society,burhani park ,street 1, gondal-360311', '0', '2022-11-23 17:18:55', '$2y$10$TZEA0C0YW4jgZzxchKpfk.0nqZgYAgWuw7NPJtjZJG/4Wm6iG2c7e', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-23 11:48:27', '2022-11-30 14:46:59'),
(26, 'Nirbhay Vora', 'nirbhayvora700@gmail.com', '6352999842', 'sultanpur,gondal,rajkot-364470', '0', '2022-11-30 14:15:23', '$2y$10$cCEc8s2fgn.qBD1bUA0mGuTFEuJcQsm7nU8rlCuaqVW/bMI3cBTOm', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-30 08:44:56', '2022-12-08 13:18:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approves`
--
ALTER TABLE `approves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cancles`
--
ALTER TABLE `cancles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `subscribs`
--
ALTER TABLE `subscribs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT for table `approves`
--
ALTER TABLE `approves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `cancles`
--
ALTER TABLE `cancles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subscribs`
--
ALTER TABLE `subscribs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
