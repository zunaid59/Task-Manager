-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2018 at 02:12 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2018_06_27_085141_create_projects_table', 1),
(22, '2018_07_03_083426_create_roles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starting_date` date NOT NULL,
  `ending_date` date NOT NULL,
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assign_to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assign_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_member` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_title`, `type`, `category`, `description`, `image`, `url`, `starting_date`, `ending_date`, `remarks`, `assign_to`, `assign_by`, `team_member`, `status`) VALUES
(2, 'sdafsadf', 'xcccxvx', 'ewrewr', 'dfgdsg', 'images (2).jpg', 'ewttr', '2018-07-04', '2018-07-19', 'cvxbcvb', '9', 'trytyreyrt', 'vcbxccxb', 'cvxbvcvbbc'),
(6, 'jhfaksjf', 'mnxc,v', 'iowuterw', 'fhkfjasfjsa', 'Hopetoun_falls.jpg', 'kflsadjflsd', '2018-07-12', '2018-07-18', 'fskalfjdsa', '8', 'lsdkkds', 'ksmdkfsaf', 'nvx,vcxm,zc'),
(7, 'sdsf', 'vcxzvzxc', 'hdfhdf', 'cxcbcxcb', 'natural scene.jpg', 'gdsgfd', '2018-07-19', '2018-07-25', 'cbxcbvxc', '5', 'fhgf', 'cvbcxbvx', 'Completed'),
(9, 'wrwere', 'inhouse', 'vcbvcxv', 'gdfsgfdg', 'Asus-X555LN-Core-i5-compressed.jpg', 'iutuity', '2018-07-05', '2018-07-13', 'dfgfdg', '6', 'tryrtytr', 'popopopo', NULL),
(10, 'werrew', 'inhouse', 'ewrew', 'sddsafdsa', 'Samsung-Galaxy-J7-NXT-Bangladesh.jpg', 'sdfsdf', '2018-07-05', '2018-07-19', 'sdfsdf', '4', 'ewrewr', 'sdafads', '2'),
(13, 'ewrwer', 'commercial', 'xcvxcv', 'sgdfgdsfg', 'Asus-X453MA-N2840-compressed.jpg', 'hfgdgfh', '2018-07-04', '2018-07-20', 'vcbcvxbxvc', '5', '10', '9', '3'),
(14, 'sdfsadf', 'inhouse', 'ewrewrw', 'cxvczxvcx', 'images (3).jpg', 'rrttrtr', '2018-07-14', '2018-07-18', 'ewrewrewr', '4', '10', '5', '3');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'durul huda', 'durulHuda@gamil.om', 'durul', 1, NULL, NULL, NULL),
(5, 'Eva', 'eva@gmail.com', 'eva21', 1, NULL, NULL, NULL),
(6, 'Azim', 'azim@gmail.com', 'azim18', 2, NULL, NULL, NULL),
(8, 'zunaid', 'zunaid@gmail.com', '$2y$10$MbxuEntnYN9AUlfRSVWMfupADHqNRUldsuRonlkPCpc1QrwA02ewK', 1, 'TRubtQF6yhOPEMFJssffPPeQmta0dglrsoSs5t2tgsZvLWhEkBacToVyUO8B', '2018-07-09 01:27:50', '2018-07-09 01:27:50'),
(9, 'durul huda', 'durul@gmail.com', '$2y$10$8Upfq2WJvY8JVFtr1M/iLuBo7jTB/LLibltKpFmcWeu3A4yc0J4n2', 1, '7YCa2AwJPh2D3d6Bg8iJ8JvkxHtfjMbqeKNQyOTbvFgi0PsnxCIPjXH7D2kB', '2018-07-09 01:29:31', '2018-07-09 01:29:31'),
(10, 'admin', 'admin@admin.com', '$2y$10$so8HTyihZdtGUupDXvUFd.D1EfzftZz7apNxXhQZ63oYa/nAB7DH6', 9, 'pqlcFy599MKUziAkRfQXywWgMbgx03kS8J77KXaD0i4V4OYTjwjp0sdgv7gC', '2018-07-10 03:40:44', '2018-07-10 03:40:44'),
(11, 'Arif', 'arif@gmail.com', '$2y$10$b94ZFOXK7uwbLtNhVDdN9ekxhzNgXxLUtXZovX.tMVIceF4v1FNaa', 1, 'l2B3CT3XYx6nwfiT5pPlVZ6PQKEjtuVpndqs5bxA8LLsPoFdw3L7rpwzQBho', '2018-07-14 04:13:06', '2018-07-14 04:13:06'),
(13, 'ewoire', 'ew@gmail.com', '$2y$10$FPSO9d1lJ68TtUxPBeeXd.wgvEWhbFfo8B63t2mIMafuMbSdL5pdW', 1, '4V8by8La7LeNx4yicqAnPndI2SjdwvqDh1GJYn9IZvLjmu0SEvayOvdro9EC', '2018-07-14 04:19:03', '2018-07-14 04:19:03'),
(14, 'abdullah', 'abdullah@gmail.com', '$2y$10$MfRXKafj7wRhyuTj5pViUO1nX0zbL5dyarqnd44YOLX1f4w792pl.', 1, 'lJeOGM6FcabhS4UagyEg1f2407paO5Jvsu6rvacHG0IyZjYfzMHcCJlUbiAp', '2018-07-14 04:20:51', '2018-07-14 04:20:51'),
(15, 'skdfj', 'ewroprw@gmail.com', '$2y$10$jmsnJjJ5soQjdzImrqt8POwRUBs5bSJGdtvFiQVmLC7L0HYjvfCSS', 1, 'ZynsOzcEelPSYIzk1Qhqu5SBf7WipLxZD9dfrqOvfUtAhFBrnyGE2wG5GUxq', '2018-07-14 04:24:58', '2018-07-14 04:24:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
