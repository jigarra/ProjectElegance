-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2022 at 06:32 PM
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
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `phone`, `service`, `date`, `time`, `message`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'jigar malani', 'jigarmalani999@gmail.com', '+918238114127', 'Face treatment', '16:28', NULL, 'test', 'approved', NULL, '2022-06-20 05:28:26', '2022-06-22 04:24:28'),
(2, 'test', 'test@gmail.com', '08238114127', 'Hair Cutting', '2022-06-23', '20:30', 'test', 'Cancle', NULL, '2022-06-20 05:30:28', '2022-06-20 07:40:02'),
(3, 'raj patel', 'raj@gmail.com', '06353385652', 'Beard', '2022-06-24', '16:34', 'test', 'in progress', NULL, '2022-06-20 05:31:42', '2022-06-20 05:31:42'),
(6, 'User1', 'raj@gmail.com', '06353385652', 'Face treatment', '2022-06-23', '21:26', 'data test', 'Cancle', '1', '2022-06-20 07:24:00', '2022-06-22 04:24:34'),
(7, 'NIrbhay Vora', 'nir@gmail.com', '9632569874', 'Hair color', '2022-06-23', '22:10', 'NA', 'approved', '5', '2022-06-22 06:05:12', '2022-07-10 10:10:05'),
(8, 'jigar malani', 'jigarmalani999@gmail.com', '08238114127', 'Hair Wash', '2022-06-29', '21:17', 'user login', 'Cancle', NULL, '2022-06-25 04:12:00', '2022-06-25 04:40:15'),
(10, 'oidsvpxm', 'jigarmalani999@gmail.com', '156859261321354', 'Hair Wash', NULL, NULL, 'user login', 'Cancle', NULL, '2022-07-10 04:37:58', '2022-07-10 09:48:15');

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
(11, '2022_07_10_141308_create_notifications_table', 6);

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
  `discription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `discription`, `price`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Hair Wash', 'Shinning and Smoothing hair', '399', '1655894321.jpg', '2022-06-16 09:01:52', '2022-06-22 05:08:41'),
(3, 'Beard', 'Tream and set your Beard', '150', '1655390038.jpg', '2022-06-16 09:03:58', '2022-06-16 09:03:58'),
(4, 'Hair color', 'Testr Hair Color', '350', '1655396846.jpg', '2022-06-16 10:57:26', '2022-06-16 10:57:26'),
(6, 'Body scrub', 'Body scrub Treatement With Expert', '800', '1655893649.jpg', '2022-06-22 04:38:05', '2022-06-22 04:57:29'),
(7, 'Hair Cutting', 'Test Hair cut', '200', '1656152043.jpg', '2022-06-25 04:43:29', '2022-06-25 04:44:03');

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
('JBcjFLJATNCLhjzq7QxznAkON0M75rbMd5uOesuT', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOTBUSzFGMXRERVN6R09jbHNIOFFlTnRIR2Q3U3JwVUMwbTRYSU9jdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbl9hcHBvaW50bWVudCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1657466432),
('W5sm2XF6UYFUjZytjVwhpRKyC5sUVLAgryS1MO9C', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiemU1b2lrUTk2MVE3bDlQZThBOFY1YXY5S2NBMVNzWHVMbFJBRk5DQyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbl9lbWFpbF92aWV3LzgiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1657467880);

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
(3, 'raj malani', 'Jigarmalani999@gmail.com', 'Regards', 'Your services is very good  im happy with your service', '2022-07-10 05:33:28', '2022-07-10 05:33:28');

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
(1, 'user', 'user@user.com', '1234567890', 'usertest', '0', '2022-07-02 09:16:27', '$2y$10$stpoR6N8Cz9SnhR4c0bbie.iQD8L6LyXlPL6drciKS08bFgWiIHE6', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-16 05:54:42', '2022-06-16 05:54:42'),
(2, 'Admin', 'admin@admin.com', '1234567890', 'Admin test', '1', '2022-07-02 09:16:27', '$2y$10$6YG/IX.ndbkxnVP0EPoTneL9d/FbhCNe6VLbtfrlAbBOPWa7fDZky', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-16 05:55:28', '2022-06-16 05:55:28'),
(3, 'jigar malani', 'jigarmalani@gmail.com', '8238114127', 'jamangar, ahmedabad, ahmedabad', '0', NULL, '$2y$10$rk.IMqgp8/DsP.s6uIhViO2R.lkkN6/Shd5mcNCHFvmjx3tM25NRG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-22 05:51:45', '2022-06-22 05:51:45'),
(4, 'jigar malani', 'jigsmalani143@gmail.com', '8238114127', 'jamangar, ahmedabad, ahmedabad', '0', NULL, '$2y$10$l8UCtNnmxyY8QcQpTcDcN.APaIlgezwHBIwKfPodqrOZ/Ija1ER.a', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-22 05:54:25', '2022-06-22 05:54:25'),
(5, 'Nirbhay patel', 'nir@gmail.com', '6589635214', 'sultanpur ,vora house', '0', NULL, '$2y$10$vysnJbanWF7.eklytXbYhO1/vWIC6ebw65Pt.0fFjsfQA9j/d3SVm', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-22 06:01:46', '2022-06-22 06:01:46'),
(6, 'nirbhay', 'nirbhay@gmail.com', '646656645', 'ah,edabad', '0', NULL, '$2y$10$PONBTJlkrwzXiLuohTka7.O0Mvv3Tpm.rown/mvrPZyKefvAwFbWC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-25 04:17:27', '2022-06-25 04:17:27'),
(7, 'NIrbhay Vora', 'nirbhay123@gmail.com', '08238114127', 'sultanpur ,, vora house', '0', NULL, '$2y$10$WtZhgz.9QdHqgaQVElAykeN15fyp3qmj8PX44SRNIm4tSjoP7C3wW', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-25 04:20:36', '2022-06-25 04:20:36'),
(8, 'NIrbhay Vora', 'nirbhay12@gmail.com', '08238114127', 'sultanpur ,, vora house', '0', NULL, '$2y$10$f/7UKepzzafp8SjfShNDpON/QyEf0Jq27xp0KTksczHu/rgwOHNn.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-25 04:22:26', '2022-06-25 04:22:26'),
(9, 'NIrbhay Vora', 'nirbhayvora700@gmail.com', '06353385652', 'sultanpur ,, vora house', '0', NULL, '$2y$10$GMZSXgpLlAtwlNIZKJpXkejkfvaF6MTCf3zvtrVU3hvrDXVBdiIfS', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-25 04:24:11', '2022-06-25 04:24:11'),
(10, 'NIrbhay Vora', 'nirbhayvora7@gmail.com', '8238114127', 'sultanpur ,, vora house', '0', NULL, '$2y$10$pwGpkRA83ZAlrrnDbfRwL.gF48EhtqZabZxbOjF0MO3rPujm44utO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-25 04:26:29', '2022-06-25 04:26:29'),
(11, 'NIrbhay Vora', 'nishilakbari2000@gmail.com', '06353385652', 'sultanpur ,, vora house', '0', NULL, '$2y$10$Zerkrxw.ShzeSeYGdHpWzui0KK7AvKOWsuCfr1qZ.7hvVCfHnbAKa', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-25 04:28:47', '2022-06-25 04:28:47'),
(12, 'NIrbhay Vora', 'nishilakbari20@gmail.com', '06353385652', 'sultanpur ,, vora house', '0', NULL, '$2y$10$dnCjlCYuaCtvJdEZMZHnoOQeytpNdawKoVrQnisCq.BEdubwHbHCW', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-25 04:30:53', '2022-06-25 04:30:53'),
(13, 'nirbhay', 'nirbhay5@gmail.com', '1234567980', 'ahmedabad', '0', NULL, '$2y$10$CN8hCaUYyUN.MJrqBuFYCuxAovtoscJLh/O6vbfJ28NxDyY7MscLm', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-25 04:33:21', '2022-06-25 04:33:21'),
(20, 'jigar malani', 'jigarmalani999@gmail.com', '+918238114127', 'jamangar, ahmedabad, ahmedabad', '0', '2022-07-02 09:16:27', '$2y$10$NWV0GGLhbKttfyrNXNWBG.5uzizUeJEypCJbuOo4rAebMKV5d9O..', NULL, NULL, NULL, 'ZHDSsDD7rpj5SVlU21ukNMPPiqbgBFyYPWH5BkQFyQOWudnwjWhpwhNCjMSL', NULL, NULL, '2022-07-02 09:14:05', '2022-07-02 09:20:11'),
(21, 'Nirbhay', 'nirbhayvora9615@gmail.com', '6352999842', 'ahmedabad', '0', NULL, '$2y$10$edkJRo9jevD6vv6pfKohY.AjzoaG7VONbYR5g10uhtJ7LtT36uYfi', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 10:12:05', '2022-07-10 10:12:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subscribs`
--
ALTER TABLE `subscribs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
