-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 16, 2023 at 12:08 PM
-- Server version: 5.7.33
-- PHP Version: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obillia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '2022-09-26 12:06:16', '$2y$10$fZEPSOCC/ZOpzgcBrh9FEuFGOxYvoknccpEswjTzrnSbH.wdiCLey', 'f2RfD5GrMoUWDqib3HmfhYsBGhTkAWITZJ3qF8rU1o9JK9R7BxbJaf8Z19c9', '2022-09-26 12:06:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(3000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `industry_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `status`, `created_at`, `updated_at`, `industry_id`) VALUES
(31, 'Logo & Brand Identity', 'logo-brand-identity', 'https://obilia.fra1.digitaloceanspaces.com/public/images/category/img-644e1b2c5361d871b4337ccdaebfadd2f2af68bc30e.Logo%20_%20Brand%20Identity_B_2x.webp', 'active', '2022-12-15 23:47:55', '2022-12-15 23:47:55', 1),
(32, 'Web & App Design', 'web-app-design', 'https://obilia.fra1.digitaloceanspaces.com/public/images/category/img-304ce9221f4131f69178d9285a946de877f332dee75.Web%20_%20App_2x.webp', 'active', '2022-12-15 23:48:44', '2022-12-15 23:48:44', 1),
(33, 'Art & Illustration', 'art-illustration', 'https://obilia.fra1.digitaloceanspaces.com/public/images/category/img-708f0f91cdd644158bd3fb349fd77d7a11cc8f669f8.Art%20_Illustration_2x.webp', 'active', '2022-12-15 23:49:53', '2022-12-15 23:49:53', 1),
(34, 'Search', 'search', 'https://obilia.fra1.digitaloceanspaces.com/public/images/category/img-253ef797b1e91e488445f1a13f707b3a58b69512a2b.Search.webp', 'active', '2022-12-15 23:50:48', '2022-12-15 23:50:48', 2),
(35, 'Social', 'social', 'https://obilia.fra1.digitaloceanspaces.com/public/images/category/img-5607e774b129bf41b751dd71c600bea079a92ede0db.Social.webp', 'active', '2022-12-15 23:51:16', '2022-12-15 23:51:16', 2),
(36, 'Advertising', 'advertising', 'https://obilia.fra1.digitaloceanspaces.com/public/images/category/img-346baf3064632efe3296d66a9eebc8a854991a9a761.bucket123.webp', 'active', '2022-12-15 23:52:09', '2022-12-15 23:52:09', 2);

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings` json DEFAULT NULL,
  `job_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('active','closed','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `workspace_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `name`, `uuid`, `settings`, `job_id`, `status`, `created_at`, `updated_at`, `workspace_id`) VALUES
(15, 'Shiv & Afzal', '0e8141bf-fac7-44b6-8eb3-7d2dd07723f4', NULL, NULL, 'active', '2023-02-15 10:29:18', '2023-02-15 10:29:18', NULL),
(16, 'For Testing Purpose chat', '2a3b71fb-a266-4893-aa76-5824d96499b6', NULL, NULL, 'active', '2023-02-16 06:54:02', '2023-02-16 06:54:02', 1),
(17, 'Shivesh & Afzal', '839a348a-e919-40a8-808c-393f90b000ed', NULL, NULL, 'active', '2023-03-14 06:53:04', '2023-03-14 06:53:04', NULL),
(18, 'Distinctio Quam eni chat', '24e6b307-5c5c-4562-b951-f301f900ec34', NULL, NULL, 'active', '2023-03-14 10:06:47', '2023-03-14 10:06:47', 2),
(20, 'First Test Jobs - Shivesh', '6c7ee389-ea00-49aa-ad46-62a1b45e403e', NULL, 34, 'active', '2023-03-14 10:39:02', '2023-03-14 10:39:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chat_participants`
--

CREATE TABLE `chat_participants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chat_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` enum('owner','admin','member') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'member',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chat_participants`
--

INSERT INTO `chat_participants` (`id`, `chat_id`, `user_id`, `role`, `created_at`, `updated_at`) VALUES
(24, 15, 1, 'owner', '2023-02-15 10:29:18', '2023-02-15 10:29:18'),
(25, 15, 6, 'member', '2023-02-15 10:29:18', '2023-02-15 10:29:18'),
(26, 16, 6, 'member', '2023-02-16 06:54:02', '2023-02-16 06:54:02'),
(27, 16, 1, 'owner', '2023-02-16 06:54:02', '2023-02-16 06:54:02'),
(28, 17, 2, 'owner', '2023-03-14 06:53:04', '2023-03-14 06:53:04'),
(29, 17, 6, 'member', '2023-03-14 06:53:04', '2023-03-14 06:53:04'),
(30, 18, 2, 'member', '2023-03-14 10:06:47', '2023-03-14 10:06:47'),
(31, 18, 6, 'owner', '2023-03-14 10:06:47', '2023-03-14 10:06:47'),
(34, 20, 2, 'member', '2023-03-14 10:39:02', '2023-03-14 10:39:02'),
(35, 20, 6, 'owner', '2023-03-14 10:39:02', '2023-03-14 10:39:02');

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` datetime NOT NULL,
  `cost` double(12,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','active','completed','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `title`, `start_date`, `cost`, `description`, `status`, `client_id`, `user_id`, `job_id`, `created_at`, `updated_at`) VALUES
(8, 'Test', '2023-02-15 00:00:00', 1000.00, 'Efficiently repurpose installed base alignments through low-risk high-yield convergence. Dynamically disseminate viral total linkage after e-business synergy. Dramatically utilize performance.', 'pending', 1, 6, NULL, '2023-02-15 08:23:49', '2023-02-15 08:23:49'),
(9, 'For Testing Purpose', '2023-02-16 00:00:00', 10000.00, 'Phosfluorescently monetize an expanded array of solutions via bleeding-edge infrastructures. Phosfluorescently network enabled catalysts for change without sticky potentialities. Intrinsicly disseminate magnetic technology vis-a-vis installed base intellectual.', 'pending', 1, 6, NULL, '2023-02-16 06:54:02', '2023-02-16 06:54:02'),
(10, 'Distinctio Quam eni', '2023-03-14 00:00:00', 74.00, 'Laboriosam adipisic', 'pending', 6, 2, NULL, '2023-03-14 10:06:47', '2023-03-14 10:06:47'),
(11, 'Distinctio Quam eni', '2023-03-14 00:00:00', 74.00, 'Laboriosam adipisic', 'pending', 6, 2, NULL, '2023-03-14 10:08:56', '2023-03-14 10:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `contract_files`
--

CREATE TABLE `contract_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contract_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contract_milestones`
--

CREATE TABLE `contract_milestones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` double(12,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','active','completed','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `escrow_fund_added_time` timestamp NULL DEFAULT NULL,
  `razorpay_order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `escrow_fund_released_time` timestamp NULL DEFAULT NULL,
  `due_date` timestamp NULL DEFAULT NULL,
  `completed_at` timestamp NULL DEFAULT NULL,
  `contract_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contract_milestones`
--

INSERT INTO `contract_milestones` (`id`, `title`, `cost`, `description`, `status`, `escrow_fund_added_time`, `razorpay_order_id`, `escrow_fund_released_time`, `due_date`, `completed_at`, `contract_id`, `created_at`, `updated_at`) VALUES
(12, 'test', 1000.00, 'Efficiently repurpose installed base alignments through low-risk high-yield convergence. Dynamically disseminate viral total linkage after e-business synergy. Dramatically utilize performance.', 'pending', NULL, NULL, NULL, NULL, NULL, 8, '2023-02-15 08:23:49', '2023-02-15 08:23:49'),
(13, 'First Milestone', 2000.00, 'Phosfluorescently monetize an expanded array of solutions via bleeding-edge infrastructures. Phosfluorescently network enabled catalysts for change without sticky potentialities. Intrinsicly disseminate magnetic technology vis-a-vis installed base intellectual.', 'pending', '2023-03-08 12:33:23', 12, '2023-03-13 04:36:03', NULL, NULL, 9, '2023-02-16 06:54:02', '2023-03-13 04:36:03'),
(14, 'Second Milestone', 2000.00, 'Phosfluorescently monetize an expanded array of solutions via bleeding-edge infrastructures. Phosfluorescently network enabled catalysts for change without sticky potentialities. Intrinsicly disseminate magnetic technology vis-a-vis installed base intellectual.', 'pending', '2023-03-13 09:19:21', 14, '2023-03-13 09:21:30', NULL, NULL, 9, '2023-02-16 06:54:02', '2023-03-13 09:21:30'),
(15, 'Third Milestone', 2000.00, 'Phosfluorescently monetize an expanded array of solutions via bleeding-edge infrastructures. Phosfluorescently network enabled catalysts for change without sticky potentialities. Intrinsicly disseminate magnetic technology vis-a-vis installed base intellectual.', 'pending', NULL, NULL, NULL, NULL, NULL, 9, '2023-02-16 06:54:02', '2023-02-16 06:54:02'),
(16, 'Fourth Milestone', 2000.00, 'Phosfluorescently monetize an expanded array of solutions via bleeding-edge infrastructures. Phosfluorescently network enabled catalysts for change without sticky potentialities. Intrinsicly disseminate magnetic technology vis-a-vis installed base intellectual.', 'pending', NULL, NULL, NULL, NULL, NULL, 9, '2023-02-16 06:54:02', '2023-02-16 06:54:02'),
(17, 'Fifth Milestone', 2000.00, 'Phosfluorescently monetize an expanded array of solutions via bleeding-edge infrastructures. Phosfluorescently network enabled catalysts for change without sticky potentialities. Intrinsicly disseminate magnetic technology vis-a-vis installed base intellectual.', 'pending', NULL, NULL, NULL, NULL, NULL, 9, '2023-02-16 06:54:02', '2023-02-16 06:54:02'),
(18, 'Ut est distinctio', 7.00, 'Eos earum maxime vol', 'pending', NULL, NULL, NULL, '2023-03-13 18:30:00', NULL, 9, '2023-03-13 09:07:33', '2023-03-13 09:07:33'),
(19, 'test', 100.00, 'dadadsdadasdasd', 'pending', NULL, NULL, NULL, '2023-03-14 18:30:00', NULL, 9, '2023-03-13 09:14:33', '2023-03-13 09:14:33'),
(20, 'Testing', 5000.00, 'okoko', 'pending', NULL, NULL, NULL, '2023-03-19 18:30:00', NULL, 9, '2023-03-13 09:18:49', '2023-03-13 09:18:49'),
(21, 'Corporis deserunt re', 67.00, 'Porro aute vel commo', 'pending', NULL, NULL, NULL, '2023-03-14 18:30:00', NULL, 10, '2023-03-14 10:06:47', '2023-03-14 10:06:47'),
(22, 'Corporis deserunt re', 67.00, 'Porro aute vel commo', 'pending', NULL, NULL, NULL, '2023-03-14 18:30:00', NULL, 11, '2023-03-14 10:08:56', '2023-03-14 10:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `experience_levels`
--

CREATE TABLE `experience_levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experience_levels`
--

INSERT INTO `experience_levels` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Entry', 'entry', 'active', '2022-10-30 23:21:58', '2022-10-30 23:21:58'),
(2, 'Intermediate', 'intermediate', 'active', '2022-10-30 23:22:16', '2022-10-30 23:22:16'),
(3, 'Expert', 'expert', 'active', '2022-10-30 23:22:20', '2022-10-30 23:22:20');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `name`, `slug`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Graphics & design', 'graphics-design', 'https://obilia.fra1.digitaloceanspaces.com/public/images/industries/industry-9360c3f82ac885fc4d5c535e0b733e75da7e3f01c9e.graphics-design.d32a2f8.svg', 'active', '2022-12-15 23:26:33', '2022-12-15 23:26:33'),
(2, 'Digital Marketing', 'digital-marketing', 'https://obilia.fra1.digitaloceanspaces.com/public/images/industries/industry-9382a8597ac99451e77f0b348b0e9c559f14b4af607.online-marketing.74e221b.svg', 'active', '2022-12-15 23:27:25', '2022-12-15 23:27:25'),
(3, 'Writing & Translation', 'writing-translation', 'https://obilia.fra1.digitaloceanspaces.com/public/images/industries/industry-962203a79216ebc6c394a0045de6404efec62889dac.writing-translation.32ebe2e.svg', 'active', '2022-12-15 23:28:08', '2022-12-15 23:28:08'),
(4, 'Video & Animation', 'video-animation', 'https://obilia.fra1.digitaloceanspaces.com/public/images/industries/industry-249d5f5468bf446c702a243405ed2753d77417c0da9.video-animation.f0d9d71.svg', 'active', '2022-12-15 23:28:44', '2022-12-15 23:28:44');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(3000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` enum('fixed','hourly') COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_hours` double(8,2) DEFAULT NULL,
  `size` enum('small','medium','large') COLLATE utf8mb4_unicode_ci NOT NULL,
  `visibility` enum('public','private','hidden') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'public',
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate_from` double(8,2) NOT NULL,
  `rate_to` double(8,2) NOT NULL,
  `experience_level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `metadata` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_length_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('pending','active','completed','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `slug`, `description`, `banner`, `payment_type`, `work_hours`, `size`, `visibility`, `country`, `rate_from`, `rate_to`, `experience_level_id`, `sub_category_id`, `metadata`, `work_length_id`, `created_at`, `updated_at`, `user_id`, `status`) VALUES
(23, 'Logo Designer', 'logo-designer', 'Credibly reinvent focused processes vis-a-vis ethical human capital. Dramatically recaptiualize optimal convergence whereas standardized niches. Enthusiastically revolutionize wireless networks with.', 'https://obilia.fra1.digitaloceanspaces.com/public/images/jobs/banner-9189d37772891775c95142e1d08b7002e068523119d.batman.jpg', 'fixed', 20.00, 'small', 'public', 'india', 2000.00, 5000.00, 1, 12, 'Sketch,Logo,Adobe Illustrator,Designer,Logo Design,Logo & Brand Identity,Less than a month,Entry,Logo Designer', 1, '2022-12-16 08:43:27', '2023-01-30 05:50:00', 1, 'active'),
(24, 'Deserunt ut do sapie', 'deserunt-ut-do-sapie', 'Vero quod fugiat err Vero quod fugia Vero quod fu Vero quod fugiat err giat err t err', 'https://obilia.fra1.digitaloceanspaces.com/public/images/jobs/banner-295b92af9299aef75ec1bec32c9ec517821ac65d43.batman.jpg', 'fixed', 20.00, 'small', 'public', 'india', 10000.00, 20000.00, 1, 30, 'SEO,Website,Link Building,Lead Generation,Marketing Strategy,Social Media Marketing,Social,Less than a month,Entry,Deserunt ut do sapie', 1, '2023-01-19 10:13:59', '2023-01-30 05:50:17', 1, 'active'),
(25, 'Android APP', 'android-app', 'Basic project for student learning portal.', 'https://obilia.fra1.digitaloceanspaces.com/public/images/jobs/banner-349e22a07618815b25a5443529738dd2352f7cb1cc1.1liter.jpg', 'fixed', 60.00, 'medium', 'public', 'india', 10000.00, 50000.00, 3, 17, 'Web Design,Logo,App Design,Web & App Design,1 to 3 months,Expert,Android APP', 2, '2023-01-19 11:10:34', '2023-01-30 05:50:33', 1, 'active'),
(33, 'Officiis qui unde re', 'officiis-qui-unde-re', 'Distinctio Aliquam', NULL, 'fixed', NULL, 'medium', 'public', 'india', 1000.00, 2000.00, 2, 12, 'Web Design,Logo,App Design,Web & App Design,1 to 3 months,Expert,Android APP', 2, '2023-03-13 10:46:11', '2023-03-13 10:46:11', 1, 'active'),
(34, 'First Test Jobs', 'first-test-jobs', 'Proactively utilize standardized potentialities and cross-unit quality vectors. Assertively iterate B2C technology rather than distributed vortals. Phosfluorescently.', NULL, 'fixed', NULL, 'medium', 'public', 'india', 10000.00, 20000.00, 2, 34, 'SEO,Link Building,Lead Generation,Marketing Strategy,Sales,Search Engine Marketing (SEM),Advertising,1 to 3 months,Intermediate,First Test Jobs', 2, '2023-03-14 04:50:52', '2023-03-14 04:50:57', 6, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `bid_price` double(10,2) NOT NULL,
  `document` varchar(3000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_letter` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','accepted','rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`id`, `job_id`, `user_id`, `bid_price`, `document`, `work_letter`, `status`, `created_at`, `updated_at`) VALUES
(1, 23, 4, 2000.00, NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quibusdam non perferendis vero sequi quo vitae cumque tenetur vel itaque sed, eum ipsum nobis veniam quod. Harum beatae quia quaerat.', 'accepted', '2022-12-21 09:54:56', '2022-12-21 09:58:43'),
(2, 24, 6, 20000.00, 'https://obilia.fra1.digitaloceanspaces.com/public/docs/job-proposal/proposals-713fe200afe9e4d6c7fdea13239acb13204653d8b78.batman.jpg', 'Lorem ipsum dolor sit amet, scriptorem comprehensam concludaturque at cum, sit ea labores corrumpit. Per an iuvaret saperet appetere, et vocibus placerat sea. Vim ei illud petentium. At eligendi invidunt per, debet vocent aliquam pri ei.\r\n\r\nProbo lorem id sea. Tantas periculis adversarium quo no, ut mel solum civibus. Te nec quod gloriatur. Ei ius accusam deleniti, at malorum fierent gloriatur vis.', 'accepted', '2023-01-19 10:39:02', '2023-01-19 10:39:23'),
(3, 25, 7, 25000.00, 'https://obilia.fra1.digitaloceanspaces.com/public/docs/job-proposal/proposals-7305307cbdb5ba3c13d24e66e76632d3ae4fd63c2c0._335347022.pdf', 'hi\r\nI have good exp in app.\r\nwww.appdid.com', 'accepted', '2023-01-19 11:14:27', '2023-01-19 11:15:30'),
(4, 25, 6, 185.00, NULL, 'Deserunt labore sint', 'accepted', '2023-02-10 08:30:23', '2023-02-10 08:30:53'),
(5, 23, 8, 10000.00, 'https://obilia.fra1.digitaloceanspaces.com/public/docs/job-proposal/proposals-1084edc9bd2088d3d976105bb2f3ccc17a0a3853606.200ml.jpg', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'accepted', '2023-02-14 09:58:03', '2023-02-14 09:59:03'),
(6, 34, 2, 4545.00, NULL, 'Invitation accepted', 'accepted', '2023-03-14 06:41:30', '2023-03-14 10:39:02');

-- --------------------------------------------------------

--
-- Table structure for table `job_invitations`
--

CREATE TABLE `job_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('pending','accepted','rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_invitations`
--

INSERT INTO `job_invitations` (`id`, `job_id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 34, 2, 'accepted', '2023-03-14 05:21:47', '2023-03-14 06:52:33');

-- --------------------------------------------------------

--
-- Table structure for table `job_responsibilities`
--

CREATE TABLE `job_responsibilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `responsibility` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_responsibilities`
--

INSERT INTO `job_responsibilities` (`id`, `job_id`, `responsibility`, `created_at`, `updated_at`) VALUES
(7, 23, 'Assertively iterate distributed data with granular metrics.', '2022-12-16 08:43:27', NULL),
(8, 23, 'Conveniently simplify bleeding-edge experiences through enterprise-wide niches.', '2022-12-16 08:43:27', NULL),
(9, 23, 'Proactively whiteboard excellent outsourcing rather than flexible.', '2022-12-16 08:43:27', NULL),
(10, 24, 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '2023-01-19 10:13:59', NULL),
(11, 24, 'Assertively iterate distributed data with granular metrics.', '2023-01-19 10:13:59', NULL),
(12, 24, 'Proactively whiteboard excellent outsourcing rather than flexible.', '2023-01-19 10:13:59', NULL),
(13, 25, '1. Abc', '2023-01-19 11:10:34', NULL),
(14, 25, '2. Xyz', '2023-01-19 11:10:34', NULL),
(15, 34, 'Objectively unleash one-to-one e-commerce via next-generation platforms', '2023-03-14 04:50:52', NULL),
(16, 34, 'Conveniently syndicate robust sources through wireless strategic theme areas. Authoritatively.', '2023-03-14 04:50:52', NULL),
(17, 34, 'Synergistically morph open-source potentialities for efficient methods of empowerment. Assertively actualize flexible benefits for maintainable leadership skills.', '2023-03-14 04:50:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_skills`
--

CREATE TABLE `job_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `skill_id` bigint(20) UNSIGNED DEFAULT NULL,
  `other_skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_skills`
--

INSERT INTO `job_skills` (`id`, `job_id`, `skill_id`, `other_skill`, `created_at`, `updated_at`) VALUES
(48, 23, 15, NULL, '2022-12-16 08:43:27', NULL),
(49, 23, 21, NULL, '2022-12-16 08:43:27', NULL),
(50, 23, 16, NULL, '2022-12-16 08:43:27', NULL),
(51, 23, NULL, 'Designer', '2022-12-16 08:43:27', NULL),
(52, 24, 9, NULL, '2023-01-19 10:13:59', NULL),
(53, 24, 11, NULL, '2023-01-19 10:13:59', NULL),
(54, 24, 10, NULL, '2023-01-19 10:13:59', NULL),
(55, 24, 12, NULL, '2023-01-19 10:13:59', NULL),
(56, 24, 13, NULL, '2023-01-19 10:13:59', NULL),
(57, 25, 22, NULL, '2023-01-19 11:10:34', NULL),
(58, 25, 21, NULL, '2023-01-19 11:10:34', NULL),
(59, 33, NULL, 'Labore minim lorem l', '2023-03-13 10:46:11', NULL),
(60, 34, 9, NULL, '2023-03-14 04:50:52', NULL),
(61, 34, 10, NULL, '2023-03-14 04:50:52', NULL),
(62, 34, 12, NULL, '2023-03-14 04:50:52', NULL),
(63, 34, 13, NULL, '2023-03-14 04:50:52', NULL),
(64, 34, NULL, 'Sales', '2023-03-14 04:50:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `laravel_jobs`
--

CREATE TABLE `laravel_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `likeable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `likeable_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `likeable_type`, `likeable_id`, `created_at`, `updated_at`, `user_id`) VALUES
(11, 'App\\Models\\Job', 12, '2022-11-30 09:21:59', '2022-11-30 09:21:59', 1),
(12, 'App\\Models\\Job', 11, '2022-12-02 06:13:41', '2022-12-02 06:13:41', 4),
(13, 'App\\Models\\Job', 12, '2022-12-02 06:13:42', '2022-12-02 06:13:42', 4),
(14, 'App\\Models\\Job', 20, '2022-12-02 06:13:45', '2022-12-02 06:13:45', 4),
(15, 'App\\Models\\Job', 13, '2022-12-05 10:39:00', '2022-12-05 10:39:00', 1),
(17, 'App\\Models\\Job', 14, '2022-12-15 08:51:43', '2022-12-15 08:51:43', 1),
(18, 'App\\Models\\Job', 25, '2023-03-15 12:28:20', '2023-03-15 12:28:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chat_id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `read_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `replied_to` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `chat_id`, `sender_id`, `message`, `read_at`, `created_at`, `updated_at`, `replied_to`) VALUES
(457, 15, 1, 'Hi, I am interested in your service.', NULL, '2023-02-15 10:29:18', '2023-02-15 10:29:18', NULL),
(458, 15, 1, 'kkk', NULL, '2023-02-15 10:29:32', '2023-02-15 10:29:32', NULL),
(459, 15, 1, 'hy', NULL, '2023-02-15 11:53:42', '2023-02-15 11:53:42', NULL),
(460, 15, 6, 'hi', NULL, '2023-02-16 05:30:00', '2023-02-16 05:30:00', NULL),
(461, 15, 6, NULL, NULL, '2023-02-16 06:51:12', '2023-02-16 06:51:12', NULL),
(462, 15, 1, 'Contract Accepted', NULL, '2023-02-16 06:54:02', '2023-02-16 06:54:02', 461),
(463, 16, 6, 'hi', NULL, '2023-02-16 06:56:41', '2023-02-16 06:56:41', NULL),
(464, 16, 1, 'hello', NULL, '2023-02-16 06:57:02', '2023-02-16 06:57:02', 463),
(465, 16, 1, 'hello', NULL, '2023-02-16 06:57:14', '2023-02-16 06:57:14', 463),
(466, 16, 1, 'hello', NULL, '2023-02-16 06:59:35', '2023-02-16 06:59:35', 463),
(467, 16, 1, 'gfd', NULL, '2023-02-16 07:02:04', '2023-02-16 07:02:04', NULL),
(468, 16, 6, 'hi', NULL, '2023-02-16 08:32:40', '2023-02-16 08:32:40', 466),
(469, 16, 6, 'hi', NULL, '2023-02-16 08:34:10', '2023-02-16 08:34:10', 468),
(470, 16, 6, 'l', NULL, '2023-02-16 08:35:15', '2023-02-16 08:35:15', 469),
(471, 16, 6, 'dsdd', NULL, '2023-02-16 08:39:24', '2023-02-16 08:39:24', 468),
(472, 16, 1, 'hi', NULL, '2023-02-16 08:40:16', '2023-02-16 08:40:16', 468),
(473, 16, 1, 'hi', NULL, '2023-02-27 05:40:03', '2023-02-27 05:40:03', NULL),
(474, 16, 1, 'hi', NULL, '2023-02-27 05:40:21', '2023-02-27 05:40:21', NULL),
(475, 16, 1, 'hi', NULL, '2023-02-27 07:06:58', '2023-02-27 07:06:58', NULL),
(476, 16, 6, 'hey', NULL, '2023-02-27 07:08:28', '2023-02-27 07:08:28', NULL),
(477, 16, 1, 'hi', NULL, '2023-02-27 07:08:33', '2023-02-27 07:08:33', NULL),
(478, 16, 6, 'whats going on', NULL, '2023-02-27 07:08:43', '2023-02-27 07:08:43', NULL),
(479, 16, 1, 'nothing', NULL, '2023-02-27 07:12:04', '2023-02-27 07:12:04', 478),
(480, 16, 6, 'hi', NULL, '2023-02-27 07:12:36', '2023-02-27 07:12:36', NULL),
(481, 16, 1, 'hi', NULL, '2023-02-27 07:12:41', '2023-02-27 07:12:41', NULL),
(482, 16, 1, 'adsadasdasdas', NULL, '2023-02-27 07:13:14', '2023-02-27 07:13:14', NULL),
(483, 16, 6, 'cxzzczczxczxc', NULL, '2023-02-27 07:13:23', '2023-02-27 07:13:23', NULL),
(484, 15, 1, 'hi', NULL, '2023-02-27 07:14:04', '2023-02-27 07:14:04', NULL),
(485, 15, 6, 'hello', NULL, '2023-02-27 07:14:08', '2023-02-27 07:14:08', NULL),
(486, 15, 1, 'hi', NULL, '2023-02-27 07:16:22', '2023-02-27 07:16:22', NULL),
(487, 15, 1, 'hi', NULL, '2023-02-27 07:18:20', '2023-02-27 07:18:20', NULL),
(488, 15, 1, 'hhhhhhhhhhhii', NULL, '2023-02-27 07:18:25', '2023-02-27 07:18:25', NULL),
(489, 15, 6, 'hi', NULL, '2023-02-27 10:19:11', '2023-02-27 10:19:11', NULL),
(490, 15, 1, 'hi', NULL, '2023-02-27 10:19:26', '2023-02-27 10:19:26', NULL),
(491, 15, 1, 'hi', NULL, '2023-02-27 10:19:58', '2023-02-27 10:19:58', NULL),
(492, 15, 6, 'jhi', NULL, '2023-02-27 10:20:02', '2023-02-27 10:20:02', NULL),
(493, 15, 6, 'hi', NULL, '2023-02-27 10:20:28', '2023-02-27 10:20:28', NULL),
(494, 15, 1, 'dadsa', NULL, '2023-02-27 10:21:03', '2023-02-27 10:21:03', NULL),
(495, 15, 6, 'dsad', NULL, '2023-02-27 10:22:03', '2023-02-27 10:22:03', NULL),
(496, 15, 6, 'adadas.', NULL, '2023-02-27 10:23:05', '2023-02-27 10:23:05', NULL),
(497, 15, 6, 'adas', NULL, '2023-02-27 10:23:34', '2023-02-27 10:23:34', NULL),
(498, 15, 1, 'hi', NULL, '2023-02-27 10:25:19', '2023-02-27 10:25:19', NULL),
(499, 16, 6, 'hi', NULL, '2023-02-27 10:34:33', '2023-02-27 10:34:33', NULL),
(500, 15, 1, 'hi', NULL, '2023-02-27 10:41:02', '2023-02-27 10:41:02', NULL),
(501, 15, 6, 'hi', NULL, '2023-02-27 10:41:07', '2023-02-27 10:41:07', NULL),
(502, 15, 1, 'hi', NULL, '2023-02-27 13:03:47', '2023-02-27 13:03:47', NULL),
(503, 15, 1, 'hi', NULL, '2023-02-27 13:05:13', '2023-02-27 13:05:13', NULL),
(504, 15, 1, 'hi', NULL, '2023-02-28 04:22:53', '2023-02-28 04:22:53', NULL),
(505, 15, 1, 'hey', NULL, '2023-02-28 04:23:15', '2023-02-28 04:23:15', NULL),
(506, 15, 6, 'hi', NULL, '2023-02-28 04:23:27', '2023-02-28 04:23:27', NULL),
(507, 15, 1, 'hey', NULL, '2023-02-28 04:23:49', '2023-02-28 04:23:49', NULL),
(508, 15, 6, 'nice', NULL, '2023-02-28 04:23:57', '2023-02-28 04:23:57', NULL),
(509, 15, 1, 'hi', NULL, '2023-02-28 04:33:53', '2023-02-28 04:33:53', NULL),
(510, 15, 6, 'hi', NULL, '2023-02-28 04:36:36', '2023-02-28 04:36:36', NULL),
(511, 15, 1, 'hi', NULL, '2023-02-28 04:51:01', '2023-02-28 04:51:01', NULL),
(512, 15, 1, 'hi', NULL, '2023-02-28 05:59:24', '2023-02-28 05:59:24', NULL),
(513, 15, 1, 'hi', NULL, '2023-02-28 06:01:03', '2023-02-28 06:01:03', NULL),
(514, 15, 6, 'hi', NULL, '2023-02-28 06:01:39', '2023-02-28 06:01:39', NULL),
(515, 15, 1, 'hi', NULL, '2023-02-28 06:01:51', '2023-02-28 06:01:51', NULL),
(516, 16, 1, 'hi', NULL, '2023-02-28 06:07:35', '2023-02-28 06:07:35', NULL),
(517, 16, 1, 'dsadasd', NULL, '2023-02-28 06:07:58', '2023-02-28 06:07:58', NULL),
(518, 15, 1, 'hi', NULL, '2023-02-28 09:35:41', '2023-02-28 09:35:41', NULL),
(519, 15, 6, 'hi', NULL, '2023-02-28 09:36:24', '2023-02-28 09:36:24', NULL),
(520, 15, 1, 'dsad', NULL, '2023-02-28 09:36:29', '2023-02-28 09:36:29', NULL),
(521, 15, 1, 'das', NULL, '2023-02-28 09:36:32', '2023-02-28 09:36:32', NULL),
(522, 15, 6, 'dsa', NULL, '2023-02-28 09:36:34', '2023-02-28 09:36:34', NULL),
(523, 15, 6, 'hi', NULL, '2023-02-28 09:37:01', '2023-02-28 09:37:01', NULL),
(524, 15, 1, 'hi', NULL, '2023-02-28 09:37:04', '2023-02-28 09:37:04', NULL),
(525, 15, 1, 'hi', NULL, '2023-03-06 05:13:06', '2023-03-06 05:13:06', NULL),
(526, 15, 1, 'asd', NULL, '2023-03-06 05:13:24', '2023-03-06 05:13:24', NULL),
(527, 15, 1, 'dsada', NULL, '2023-03-06 05:13:34', '2023-03-06 05:13:34', NULL),
(528, 15, 1, 'dsadas', NULL, '2023-03-06 05:14:24', '2023-03-06 05:14:24', NULL),
(529, 15, 1, 'adsds', NULL, '2023-03-06 05:14:33', '2023-03-06 05:14:33', NULL),
(530, 15, 1, 'dasdas', NULL, '2023-03-06 05:14:46', '2023-03-06 05:14:46', NULL),
(531, 15, 1, 'dsdas', NULL, '2023-03-06 05:20:09', '2023-03-06 05:20:09', NULL),
(532, 15, 1, 'ad', NULL, '2023-03-06 05:20:09', '2023-03-06 05:20:09', NULL),
(533, 15, 1, 'a', NULL, '2023-03-06 05:20:10', '2023-03-06 05:20:10', NULL),
(534, 15, 1, 'das', NULL, '2023-03-06 05:20:10', '2023-03-06 05:20:10', NULL),
(535, 15, 1, 'da', NULL, '2023-03-06 05:20:10', '2023-03-06 05:20:10', NULL),
(536, 15, 1, 'sd', NULL, '2023-03-06 05:20:10', '2023-03-06 05:20:10', NULL),
(537, 15, 1, 'asd', NULL, '2023-03-06 05:20:10', '2023-03-06 05:20:10', NULL),
(538, 15, 1, 'a', NULL, '2023-03-06 05:20:10', '2023-03-06 05:20:10', NULL),
(539, 15, 1, 'd', NULL, '2023-03-06 05:20:10', '2023-03-06 05:20:10', NULL),
(540, 15, 6, NULL, NULL, '2023-03-06 05:43:40', '2023-03-06 05:43:40', NULL),
(541, 15, 6, NULL, NULL, '2023-03-06 06:17:48', '2023-03-06 06:17:48', NULL),
(542, 16, 1, 'hi', NULL, '2023-03-13 09:17:42', '2023-03-13 09:17:42', NULL),
(543, 16, 6, 'i neec ore fole', NULL, '2023-03-13 09:21:07', '2023-03-13 09:21:07', NULL),
(544, 16, 1, 'something mising', NULL, '2023-03-13 09:21:15', '2023-03-13 09:21:15', NULL),
(545, 15, 1, 'dasdas', NULL, '2023-03-13 10:48:08', '2023-03-13 10:48:08', NULL),
(546, 15, 1, 'dss', NULL, '2023-03-13 10:48:12', '2023-03-13 10:48:12', 541),
(547, 17, 2, 'Hi, I am interested in your service.', NULL, '2023-03-14 06:53:04', '2023-03-14 06:53:04', NULL),
(548, 17, 6, 'hiii', NULL, '2023-03-14 06:53:23', '2023-03-14 06:53:23', NULL),
(549, 17, 2, NULL, NULL, '2023-03-14 09:54:59', '2023-03-14 09:54:59', NULL),
(550, 17, 6, 'Contract Accepted', NULL, '2023-03-14 10:06:47', '2023-03-14 10:06:47', 549),
(551, 17, 6, 'Contract Accepted', NULL, '2023-03-14 10:08:56', '2023-03-14 10:08:56', 549),
(552, 18, 2, 'hi', NULL, '2023-03-14 10:25:50', '2023-03-14 10:25:50', NULL),
(553, 18, 2, 'hii', NULL, '2023-03-14 10:32:20', '2023-03-14 10:32:20', NULL),
(554, 18, 6, 'heydasda', NULL, '2023-03-14 10:33:05', '2023-03-14 10:33:05', NULL),
(555, 18, 2, 'dad', NULL, '2023-03-14 10:33:15', '2023-03-14 10:33:15', NULL),
(556, 18, 6, 'dasd', NULL, '2023-03-14 10:34:10', '2023-03-14 10:34:10', NULL),
(557, 18, 2, 'adasd', NULL, '2023-03-14 10:34:13', '2023-03-14 10:34:13', NULL),
(558, 18, 2, NULL, NULL, '2023-03-14 10:34:23', '2023-03-14 10:34:23', NULL),
(559, 15, 6, 'jo', NULL, '2023-03-14 10:39:45', '2023-03-14 10:39:45', 532);

-- --------------------------------------------------------

--
-- Table structure for table `message_contracts`
--

CREATE TABLE `message_contracts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message_id` bigint(20) UNSIGNED NOT NULL,
  `contract` json NOT NULL,
  `status` enum('pending','accepted','rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `send_by` bigint(20) UNSIGNED NOT NULL,
  `send_to` bigint(20) UNSIGNED NOT NULL,
  `reject_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message_contracts`
--

INSERT INTO `message_contracts` (`id`, `message_id`, `contract`, `status`, `send_by`, `send_to`, `reject_reason`, `created_at`, `updated_at`) VALUES
(1, 461, '{\"milestones\": [{\"title\": \"First Milestone\", \"amount\": \"2000\", \"description\": \"Phosfluorescently monetize an expanded array of solutions via bleeding-edge infrastructures. Phosfluorescently network enabled catalysts for change without sticky potentialities. Intrinsicly disseminate magnetic technology vis-a-vis installed base intellectual.\"}, {\"title\": \"Second Milestone\", \"amount\": \"2000\", \"description\": \"Phosfluorescently monetize an expanded array of solutions via bleeding-edge infrastructures. Phosfluorescently network enabled catalysts for change without sticky potentialities. Intrinsicly disseminate magnetic technology vis-a-vis installed base intellectual.\"}, {\"title\": \"Third Milestone\", \"amount\": \"2000\", \"description\": \"Phosfluorescently monetize an expanded array of solutions via bleeding-edge infrastructures. Phosfluorescently network enabled catalysts for change without sticky potentialities. Intrinsicly disseminate magnetic technology vis-a-vis installed base intellectual.\"}, {\"title\": \"Fourth Milestone\", \"amount\": \"2000\", \"description\": \"Phosfluorescently monetize an expanded array of solutions via bleeding-edge infrastructures. Phosfluorescently network enabled catalysts for change without sticky potentialities. Intrinsicly disseminate magnetic technology vis-a-vis installed base intellectual.\"}, {\"title\": \"Fifth Milestone\", \"amount\": \"2000\", \"description\": \"Phosfluorescently monetize an expanded array of solutions via bleeding-edge infrastructures. Phosfluorescently network enabled catalysts for change without sticky potentialities. Intrinsicly disseminate magnetic technology vis-a-vis installed base intellectual.\"}], \"project_cost\": \"10000\", \"contract_date\": \"2023-02-16\", \"contract_file\": [], \"project_title\": \"For Testing Purpose\", \"project_description\": \"Phosfluorescently monetize an expanded array of solutions via bleeding-edge infrastructures. Phosfluorescently network enabled catalysts for change without sticky potentialities. Intrinsicly disseminate magnetic technology vis-a-vis installed base intellectual.\"}', 'accepted', 6, 1, NULL, '2023-02-16 06:51:12', '2023-02-16 06:54:02'),
(2, 540, '{\"milestones\": [{\"title\": \"Interactively iterate enabled opportunities rather than.\", \"amount\": \"1000\", \"description\": \"Conveniently cultivate customer directed imperatives via distinctive information. Authoritatively negotiate just in time experiences vis-a-vis principle-centered innovation. Competently implement top-line opportunities vis-a-vis pandemic sources. Proactively revolutionize technically.\"}, {\"title\": \"Energistically foster open-source collaboration and idea-sharing without strategic.\", \"amount\": \"1000\", \"description\": \"Professionally morph client-focused quality vectors without installed base metrics. Conveniently exploit cross functional web services vis-a-vis optimal convergence. Holisticly synthesize.\"}], \"project_cost\": \"2000\", \"contract_date\": \"2023-03-06\", \"contract_file\": [], \"project_title\": \"Test Contract\", \"project_description\": \"Conveniently cultivate customer directed imperatives via distinctive information. Authoritatively negotiate just in time experiences vis-a-vis principle-centered innovation. Competently implement top-line opportunities vis-a-vis pandemic sources. Proactively revolutionize technically.\"}', 'pending', 6, 1, NULL, '2023-03-06 05:43:40', '2023-03-06 05:43:40'),
(3, 541, '{\"milestones\": [{\"title\": \"Dynamically communicate one-to-one.\", \"amount\": \"1000\", \"due_date\": \"2023-03-31\", \"description\": \"Interactively coordinate leveraged content and holistic paradigms. Credibly enhance professional models via prospective schemas. Assertively pontificate B2C.\"}], \"project_cost\": \"1000\", \"contract_date\": \"2023-03-06\", \"contract_file\": [], \"project_title\": \"Test Contract 2\", \"project_description\": \"Intrinsicly fashion enabled e-business via timely web services. Enthusiastically maximize backward-compatible action items and reliable collaboration and idea-sharing. Completely enhance.\"}', 'pending', 6, 1, NULL, '2023-03-06 06:17:48', '2023-03-06 06:17:48'),
(4, 549, '{\"milestones\": [{\"title\": \"Corporis deserunt re\", \"amount\": \"67\", \"due_date\": \"2023-03-15\", \"description\": \"Porro aute vel commo\"}], \"project_cost\": \"74\", \"contract_date\": \"2023-03-14\", \"contract_file\": [], \"project_title\": \"Distinctio Quam eni\", \"project_description\": \"Laboriosam adipisic\"}', 'accepted', 2, 6, NULL, '2023-03-14 09:54:59', '2023-03-14 10:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `message_media`
--

CREATE TABLE `message_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(3000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message_media`
--

INSERT INTO `message_media` (`id`, `message_id`, `type`, `file`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 558, 'image/jpeg', 'https://obilia.fra1.digitaloceanspaces.com/public/workspace/chat/media/img-88037c6e2d11102c9e12c5be5c1728a539feafd7441.3MXLRyRk2_0.jpg', NULL, '2023-03-14 10:34:25', '2023-03-14 10:34:25');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_26_120050_create_admins_table', 2),
(6, '2022_09_27_055445_create_categories_table', 3),
(8, '2022_10_12_055434_create_sub_categories_table', 4),
(9, '2022_10_12_075458_create_packages_table', 5),
(10, '2022_10_12_092413_create_package_perks_table', 5),
(11, '2022_10_29_114051_create_experience_levels_table', 6),
(12, '2022_10_29_115737_create_skills_table', 6),
(13, '2022_10_29_120454_create_jobs_table', 6),
(14, '2022_10_31_062710_create_job_skills_table', 7),
(15, '2022_10_31_063031_add_project_scope_in_jobs_table', 7),
(16, '2022_10_31_063554_create_work_lengths_table', 7),
(17, '2022_10_31_065216_add_project_lenght_id_in_jobs_table', 8),
(18, '2022_11_04_062427_add_user_id_into_jobs_table', 9),
(19, '2022_11_04_071253_add_status_into_jobs_table', 10),
(20, '2022_11_07_054051_add_status_to_users_table', 11),
(21, '2022_11_07_101544_create_likes_table', 12),
(22, '2022_11_09_054620_add_user_id_to_likes_table', 13),
(23, '2022_11_15_061922_create_user_skills_table', 14),
(24, '2022_11_17_050508_create_job_applications_table', 15),
(25, '2022_11_17_050716_create_job_invitaions_table', 15),
(26, '2022_11_17_075559_add_bid_price_document_work_letter_to_job_applications_table', 16),
(35, '2022_11_19_054754_create_workspaces_table', 17),
(36, '2022_11_20_063530_create_chat_groups_table', 17),
(37, '2022_11_21_055257_create_chats_table', 17),
(38, '2022_11_21_055804_create_chat_media_table', 17),
(39, '2022_11_21_055930_create_chat_contracts_table', 17),
(40, '2022_11_21_065527_create_chat_group_participants_table', 17),
(41, '2022_11_28_125355_create_job_responsibilities_table', 18),
(42, '2022_11_29_105346_create_laravel_jobs_table', 19),
(43, '2022_12_02_095758_create_chats_table', 20),
(44, '2022_12_02_100023_create_messages_table', 21),
(45, '2022_12_02_100419_create_message_media_table', 21),
(46, '2022_12_02_101337_create_chat_participants_table', 22),
(47, '2022_12_05_063810_add_uuid_in_users_table', 23),
(48, '0000_00_00_000000_create_websockets_statistics_entries_table', 24),
(49, '2022_12_16_042914_create_industries_table', 25),
(50, '2022_12_16_043526_add_industry_id_to_categories_table', 25),
(51, '2023_01_09_142642_add_replied_to_in_messages_table', 26),
(52, '2023_01_16_053129_create_contracts_table', 27),
(53, '2023_01_16_053528_create_contract_milestones_table', 27),
(54, '2023_01_16_053629_create_contract_files_table', 27),
(55, '2023_01_17_051321_create_message_contracts_table', 27),
(56, '2023_01_16_123521_create_workspaces_table', 28),
(58, '2023_01_18_085454_add_completed_at_to_contract_milestones_table', 29),
(59, '2023_01_18_095203_add_escrow_fund_added_time_to_contract_milestones_table', 30),
(62, '2023_01_31_064809_create_user_services_table', 31),
(63, '2023_01_31_065136_create_user_service_images_table', 31),
(64, '2023_02_01_093339_create_user_kycs_table', 32),
(65, '2023_02_01_095750_create_user_businesses_table', 33),
(66, '2023_02_01_111414_add_extra_data_to_users_table', 34),
(70, '2023_02_07_043236_create_user_banks_table', 35),
(71, '2023_02_07_100340_add_workspace_id_to_chats_table', 36),
(72, '2023_02_15_104936_add_metadata_to_user_services_table', 37),
(73, '2023_02_20_105813_add_slug_to_user_services_table', 38),
(74, '2023_03_08_043600_add_rp_contract_to_users_table', 39),
(75, '2023_03_08_060356_add_rp_account_no_to_user_banks_table', 40),
(76, '2023_03_08_100656_create_milestone_works_table', 41),
(79, '2023_03_08_103328_create_razorpay_orders_table', 42),
(80, '2023_03_08_120950_add_order_id_to_contract_milestones_table', 43),
(81, '2023_03_09_065325_create_milestone_works_table', 44),
(82, '2023_03_13_043258_create_new_milestone_requests_table', 45);

-- --------------------------------------------------------

--
-- Table structure for table `milestone_works`
--

CREATE TABLE `milestone_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci,
  `remark` text COLLATE utf8mb4_unicode_ci,
  `milestone_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('pending','approved','rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `milestone_works`
--

INSERT INTO `milestone_works` (`id`, `file`, `remark`, `milestone_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'https://obilia.fra1.digitaloceanspaces.com/public/milestones/works/img-3519b5c3788b0172b41682839597b32a3770a697e13.logo.jpg', NULL, 13, 'approved', '2023-03-13 04:35:45', '2023-03-13 04:36:03'),
(2, 'https://obilia.fra1.digitaloceanspaces.com/public/milestones/works/img-818bdcb9a52424003bb3bfea5cddc35f4349bff934d.1liter.jpeg', NULL, 14, 'approved', '2023-03-13 09:20:08', '2023-03-13 09:21:30');

-- --------------------------------------------------------

--
-- Table structure for table `new_milestone_requests`
--

CREATE TABLE `new_milestone_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contract_id` bigint(20) UNSIGNED NOT NULL,
  `milestone` json NOT NULL,
  `requested_by` bigint(20) UNSIGNED NOT NULL,
  `status` enum('pending','approved','rejected') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `new_milestone_requests`
--

INSERT INTO `new_milestone_requests` (`id`, `contract_id`, `milestone`, `requested_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, '{\"title\": \"Ut est distinctio\", \"amount\": \"7\", \"due_date\": \"2023-03-14\", \"description\": \"Eos earum maxime vol\"}', 1, 'approved', '2023-03-13 06:54:58', '2023-03-13 09:07:33'),
(2, 9, '{\"title\": \"test\", \"amount\": \"100\", \"due_date\": \"2023-03-15\", \"description\": \"dadadsdadasdasd\"}', 6, 'approved', '2023-03-13 07:17:37', '2023-03-13 09:14:33'),
(3, 9, '{\"title\": \"Testing\", \"amount\": \"5000\", \"due_date\": \"2023-03-20\", \"description\": \"okoko\"}', 1, 'approved', '2023-03-13 09:17:08', '2023-03-13 09:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `discount` float(3,2) DEFAULT '0.00',
  `is_popular` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `is_subscription` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `for` enum('individual','agency') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'individual',
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `title`, `description`, `duration`, `price`, `discount`, `is_popular`, `is_subscription`, `for`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Basic', 'Test', NULL, 30, 1000.00, 0.00, 'no', 'no', 'individual', 'active', '2022-10-12 07:27:32', '2022-10-12 07:27:32'),
(8, 'Standard', 'Standard', NULL, 60, 1000.00, 0.00, 'no', 'no', 'individual', 'active', '2022-12-08 23:53:48', '2022-12-08 23:53:48'),
(9, 'Extended', 'Extended', NULL, 90, 899.00, 0.00, 'no', 'no', 'individual', 'active', '2022-12-08 23:54:56', '2022-12-08 23:54:56');

-- --------------------------------------------------------

--
-- Table structure for table `package_perks`
--

CREATE TABLE `package_perks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_perks`
--

INSERT INTO `package_perks` (`id`, `package_id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 7, 'commition', '20', '2022-10-12 07:27:32', '2022-10-12 07:27:32'),
(2, 7, 'credits', '10', '2022-10-12 07:27:32', '2022-10-12 07:27:32'),
(3, 7, 'connections', '20', '2022-10-12 07:27:32', '2022-10-12 07:27:32'),
(4, 7, 'job_applications', '100', '2022-10-12 07:27:32', '2022-10-12 07:27:32'),
(5, 7, 'watermark', 'yes', '2022-10-12 07:27:32', '2022-10-12 07:27:32'),
(6, 8, 'commition', '20', '2022-12-08 23:53:48', '2022-12-08 23:53:48'),
(7, 8, 'credits', '12', '2022-12-08 23:53:48', '2022-12-08 23:53:48'),
(8, 8, 'connections', '100', '2022-12-08 23:53:48', '2022-12-08 23:53:48'),
(9, 8, 'job_applications', '300', '2022-12-08 23:53:48', '2022-12-08 23:53:48'),
(10, 9, 'commition', '20', '2022-12-08 23:54:56', '2022-12-08 23:54:56'),
(11, 9, 'credits', '300', '2022-12-08 23:54:56', '2022-12-08 23:54:56'),
(12, 9, 'connections', '500', '2022-12-08 23:54:56', '2022-12-08 23:54:56'),
(13, 9, 'job_applications', '200', '2022-12-08 23:54:56', '2022-12-08 23:54:56');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `razorpay_orders`
--

CREATE TABLE `razorpay_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','paid','failed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'milestone, project, subscription, etc',
  `for_data` json DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `resolved_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resolved_at` timestamp NULL DEFAULT NULL,
  `payment_mode` enum('test','live') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'live',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `razorpay_orders`
--

INSERT INTO `razorpay_orders` (`id`, `user_id`, `order_id`, `amount`, `discount`, `currency`, `status`, `for`, `for_data`, `transaction_id`, `attempts`, `resolved_by`, `resolved_at`, `payment_mode`, `created_at`, `updated_at`) VALUES
(8, 1, 'order_LP1VPJAyypIWin', 200000.00, NULL, 'INR', 'pending', 'milestone', '{\"id\": 13, \"cost\": 2000, \"title\": \"First Milestone\", \"status\": \"pending\", \"due_date\": null, \"created_at\": \"2023-02-16T06:54:02.000000Z\", \"updated_at\": \"2023-02-16T06:54:02.000000Z\", \"contract_id\": 9, \"description\": \"Phosfluorescently monetize an expanded array of solutions via bleeding-edge infrastructures. Phosfluorescently network enabled catalysts for change without sticky potentialities. Intrinsicly disseminate magnetic technology vis-a-vis installed base intellectual.\", \"completed_at\": null, \"laravel_through_key\": 1, \"escrow_fund_added_time\": null, \"escrow_fund_released_time\": null}', NULL, 0, NULL, NULL, 'live', '2023-03-08 12:03:45', '2023-03-08 12:03:45'),
(9, 1, 'order_LP1XLyL11XcjHk', 200000.00, NULL, 'INR', 'pending', 'milestone', '{\"id\": 13, \"cost\": 2000, \"title\": \"First Milestone\", \"status\": \"pending\", \"due_date\": null, \"created_at\": \"2023-02-16T06:54:02.000000Z\", \"updated_at\": \"2023-02-16T06:54:02.000000Z\", \"contract_id\": 9, \"description\": \"Phosfluorescently monetize an expanded array of solutions via bleeding-edge infrastructures. Phosfluorescently network enabled catalysts for change without sticky potentialities. Intrinsicly disseminate magnetic technology vis-a-vis installed base intellectual.\", \"completed_at\": null, \"laravel_through_key\": 1, \"escrow_fund_added_time\": null, \"escrow_fund_released_time\": null}', NULL, 0, NULL, NULL, 'live', '2023-03-08 12:05:36', '2023-03-08 12:05:36'),
(10, 1, 'order_LP1eKCf5YN9jJT', 200000.00, NULL, 'INR', 'paid', 'milestone', '{\"id\": 13, \"cost\": 2000, \"title\": \"First Milestone\", \"status\": \"pending\", \"due_date\": null, \"created_at\": \"2023-02-16T06:54:02.000000Z\", \"updated_at\": \"2023-02-16T06:54:02.000000Z\", \"contract_id\": 9, \"description\": \"Phosfluorescently monetize an expanded array of solutions via bleeding-edge infrastructures. Phosfluorescently network enabled catalysts for change without sticky potentialities. Intrinsicly disseminate magnetic technology vis-a-vis installed base intellectual.\", \"completed_at\": null, \"razorpay_order_id\": null, \"laravel_through_key\": 1, \"escrow_fund_added_time\": null, \"escrow_fund_released_time\": null}', NULL, 0, NULL, NULL, 'live', '2023-03-08 12:12:12', '2023-03-08 12:22:35'),
(11, 1, 'order_LP1zPlEdREC7SV', 200000.00, NULL, 'INR', 'paid', 'milestone', '{\"id\": 13, \"cost\": 2000, \"title\": \"First Milestone\", \"status\": \"pending\", \"due_date\": null, \"created_at\": \"2023-02-16T06:54:02.000000Z\", \"updated_at\": \"2023-03-08T12:30:17.000000Z\", \"contract_id\": 9, \"description\": \"Phosfluorescently monetize an expanded array of solutions via bleeding-edge infrastructures. Phosfluorescently network enabled catalysts for change without sticky potentialities. Intrinsicly disseminate magnetic technology vis-a-vis installed base intellectual.\", \"completed_at\": null, \"razorpay_order_id\": null, \"laravel_through_key\": 1, \"escrow_fund_added_time\": null, \"escrow_fund_released_time\": null}', NULL, 0, NULL, NULL, 'live', '2023-03-08 12:32:10', '2023-03-08 12:32:28'),
(12, 1, 'order_LP20NlCioqZSxp', 200000.00, NULL, 'INR', 'paid', 'milestone', '{\"id\": 13, \"cost\": 2000, \"title\": \"First Milestone\", \"status\": \"pending\", \"due_date\": null, \"created_at\": \"2023-02-16T06:54:02.000000Z\", \"updated_at\": \"2023-03-08T12:32:28.000000Z\", \"contract_id\": 9, \"description\": \"Phosfluorescently monetize an expanded array of solutions via bleeding-edge infrastructures. Phosfluorescently network enabled catalysts for change without sticky potentialities. Intrinsicly disseminate magnetic technology vis-a-vis installed base intellectual.\", \"completed_at\": null, \"razorpay_order_id\": null, \"laravel_through_key\": 1, \"escrow_fund_added_time\": null, \"escrow_fund_released_time\": null}', NULL, 0, NULL, NULL, 'live', '2023-03-08 12:33:05', '2023-03-08 12:33:23'),
(13, 1, 'order_LQuVqDY1b9styn', 200000.00, NULL, 'INR', 'pending', 'milestone', '{\"id\": 14, \"cost\": 2000, \"title\": \"Second Milestone\", \"status\": \"pending\", \"due_date\": null, \"created_at\": \"2023-02-16T06:54:02.000000Z\", \"updated_at\": \"2023-02-16T06:54:02.000000Z\", \"contract_id\": 9, \"description\": \"Phosfluorescently monetize an expanded array of solutions via bleeding-edge infrastructures. Phosfluorescently network enabled catalysts for change without sticky potentialities. Intrinsicly disseminate magnetic technology vis-a-vis installed base intellectual.\", \"completed_at\": null, \"razorpay_order_id\": null, \"laravel_through_key\": 1, \"escrow_fund_added_time\": null, \"escrow_fund_released_time\": null}', NULL, 0, NULL, NULL, 'live', '2023-03-13 06:31:19', '2023-03-13 06:31:19'),
(14, 1, 'order_LQxN0jjntv60EM', 200000.00, NULL, 'INR', 'paid', 'milestone', '{\"id\": 14, \"cost\": 2000, \"title\": \"Second Milestone\", \"status\": \"pending\", \"due_date\": null, \"created_at\": \"2023-02-16T06:54:02.000000Z\", \"updated_at\": \"2023-02-16T06:54:02.000000Z\", \"contract_id\": 9, \"description\": \"Phosfluorescently monetize an expanded array of solutions via bleeding-edge infrastructures. Phosfluorescently network enabled catalysts for change without sticky potentialities. Intrinsicly disseminate magnetic technology vis-a-vis installed base intellectual.\", \"completed_at\": null, \"razorpay_order_id\": null, \"laravel_through_key\": 1, \"escrow_fund_added_time\": null, \"escrow_fund_released_time\": null}', NULL, 0, NULL, NULL, 'live', '2023-03-13 09:19:02', '2023-03-13 09:19:21');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(9, 'SEO', 'seo', 'active', '2022-12-16 00:10:59', '2022-12-16 00:10:59'),
(10, 'Link Building', 'link-building', 'active', '2022-12-16 00:11:16', '2022-12-16 00:11:16'),
(11, 'Website', 'website', 'active', '2022-12-16 00:13:28', '2022-12-16 00:13:28'),
(12, 'Lead Generation', 'lead-generation', 'active', '2022-12-16 00:14:04', '2022-12-16 00:14:04'),
(13, 'Marketing Strategy', 'marketing-strategy', 'active', '2022-12-16 00:14:13', '2022-12-16 00:14:13'),
(14, 'UI/UX Prototyping', 'uiux-prototyping', 'active', '2022-12-16 00:14:30', '2022-12-16 00:14:30'),
(15, 'Sketch', 'sketch', 'active', '2022-12-16 00:14:39', '2022-12-16 00:14:39'),
(16, 'Adobe Illustrator', 'adobe-illustrator', 'active', '2022-12-16 00:14:52', '2022-12-16 00:14:52'),
(17, 'Print Design', 'print-design', 'active', '2022-12-16 00:15:04', '2022-12-16 00:15:04'),
(18, 'Product Design', 'product-design', 'active', '2022-12-16 00:15:15', '2022-12-16 00:15:15'),
(19, '2D Design', '2d-design', 'active', '2022-12-16 00:15:28', '2022-12-16 00:15:28'),
(20, 'Adobe Photoshop', 'adobe-photoshop', 'active', '2022-12-16 00:15:36', '2022-12-16 00:15:36'),
(21, 'Logo', 'logo', 'active', '2022-12-16 00:15:46', '2022-12-16 00:15:46'),
(22, 'Web Design', 'web-design', 'active', '2022-12-16 00:16:00', '2022-12-16 00:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(3000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `slug`, `image`, `category_id`, `status`, `created_at`, `updated_at`) VALUES
(12, 'Logo Design', 'logo-design', NULL, 31, 'active', '2022-12-15 23:55:21', '2022-12-15 23:55:21'),
(13, 'Brand Style Guides', 'brand-style-guides', NULL, 31, 'active', '2022-12-15 23:55:41', '2022-12-15 23:55:41'),
(14, 'Fonts & Typography', 'fonts-typography', NULL, 31, 'active', '2022-12-15 23:56:04', '2022-12-15 23:56:04'),
(15, 'Business Cards & Stationery', 'business-cards-stationery', NULL, 31, 'active', '2022-12-15 23:56:10', '2022-12-15 23:56:10'),
(16, 'Website Design', 'website-design', NULL, 32, 'active', '2022-12-15 23:56:30', '2022-12-15 23:56:30'),
(17, 'App Design', 'app-design', NULL, 32, 'active', '2022-12-15 23:56:35', '2022-12-15 23:56:35'),
(18, 'UX Design', 'ux-design', NULL, 32, 'active', '2022-12-15 23:56:40', '2022-12-15 23:56:40'),
(19, 'Landing Page Design', 'landing-page-design', NULL, 32, 'active', '2022-12-15 23:56:44', '2022-12-15 23:56:44'),
(20, 'Icon Design', 'icon-design', NULL, 32, 'active', '2022-12-15 23:56:49', '2022-12-15 23:56:49'),
(21, 'Illustration', 'illustration', NULL, 33, 'active', '2022-12-15 23:57:05', '2022-12-15 23:57:05'),
(22, 'NFT Art', 'nft-art', NULL, 33, 'active', '2022-12-15 23:57:11', '2022-12-15 23:57:11'),
(23, 'Pattern Design', 'pattern-design', NULL, 33, 'active', '2022-12-15 23:57:16', '2022-12-15 23:57:16'),
(24, 'Portraits & Caricatures', 'portraits-caricatures', NULL, 33, 'active', '2022-12-15 23:57:21', '2022-12-15 23:57:21'),
(25, 'Cartoons & Comics', 'cartoons-comics', NULL, 33, 'active', '2022-12-15 23:57:25', '2022-12-15 23:57:25'),
(26, 'Tattoo Design', 'tattoo-design', NULL, 33, 'active', '2022-12-15 23:57:30', '2022-12-15 23:57:30'),
(27, 'Storyboards', 'storyboards', NULL, 33, 'active', '2022-12-15 23:57:36', '2022-12-15 23:57:36'),
(28, 'Search Engine Optimization (SEO)', 'search-engine-optimization-seo', NULL, 34, 'active', '2022-12-15 23:59:04', '2022-12-15 23:59:04'),
(29, 'Local SEO', 'local-seo', NULL, 34, 'active', '2022-12-15 23:59:10', '2022-12-15 23:59:10'),
(30, 'Social Media Marketing', 'social-media-marketing', NULL, 35, 'active', '2022-12-16 00:00:40', '2022-12-16 00:00:40'),
(31, 'Influencer Marketing', 'influencer-marketing', NULL, 35, 'active', '2022-12-16 00:08:35', '2022-12-16 00:08:35'),
(32, 'Community Management', 'community-management', NULL, 35, 'active', '2022-12-16 00:08:41', '2022-12-16 00:08:41'),
(33, 'Social Media Advertising', 'social-media-advertising', NULL, 36, 'active', '2022-12-16 00:08:58', '2022-12-16 00:08:58'),
(34, 'Search Engine Marketing (SEM)', 'search-engine-marketing-sem', NULL, 36, 'active', '2022-12-16 00:09:03', '2022-12-16 00:09:03'),
(35, 'Display Advertising', 'display-advertising', NULL, 36, 'active', '2022-12-16 00:09:08', '2022-12-16 00:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(3000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rp_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('service_provider','client') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'service_provider',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('pending','active','blocked') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uuid`, `name`, `email`, `images`, `rp_contact`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`, `status`, `phone`, `gender`, `state`, `city`) VALUES
(1, '0437be66-5395-45fd-bac2-914d4d09496f', 'Shiv', 'shivtiwari627@gmail.com', NULL, 'cont_LOuc4jtuxgqQ2Y', NULL, '$2y$10$6OBK74JoKFlZxxydwwE1e.iubWkqqcm5ZXNcLFBzaKtiMiGli2K0O', '1KsBo42tRZ6J0xTYAFXGHd4Z3LwFELvF2CHuEzXf9URY0nnmh47lHWBnKo6E', 'client', '2022-09-26 10:57:06', '2023-03-15 05:24:49', 'active', '9137231270', 'male', NULL, NULL),
(2, '59b1cab8-fbbc-475e-bfb8-acf862f0b785', 'Shivesh', 'shivesh.appdid@gmail.com', 'https://obilia.fra1.digitaloceanspaces.com/public/images/users/batman.jpg', 'cont_LOueeZSbgLnXAg', NULL, '$2y$10$ewXPSIQ4nZ5DpqUc4Kq87OobRwAKf8FHhit/rhsdLcjSkXOiQf/vW', 'eslvDYV3rdkQSeNRFcsqhE4r40TbM65v9KaF6DZkAnyMDUXwJs2QWQvW7ts3', 'service_provider', '2022-11-07 04:44:08', '2023-03-08 05:21:39', 'active', NULL, NULL, NULL, NULL),
(3, 'd5fd204e-c368-4702-8760-07ba96bdd13c', 'Rahul', 'rahul.appdid@gmail.com', NULL, 'cont_LOueexjIRzJPWu', NULL, '$2y$10$ewXPSIQ4nZ5DpqUc4Kq87OobRwAKf8FHhit/rhsdLcjSkXOiQf/vW', NULL, 'client', '2022-11-07 05:34:53', '2023-03-08 05:21:40', 'active', NULL, NULL, NULL, NULL),
(4, '9bada014-fb0c-49d3-a7b5-5865f333aac0', 'Ketan Kadam', 'ketan.appdid@gmail.com', NULL, 'cont_LOuefPF6JAzzL4', NULL, '$2y$10$ggGI0IzY3vWFhR6BPBwkcOC82GpQsXcMPLpbF8tuxlUVU5XsheNtu', NULL, 'service_provider', '2022-11-07 05:45:45', '2023-03-08 05:21:40', 'active', NULL, NULL, NULL, NULL),
(5, '9bada014-fb0c-49d3-a7b5-5865f333aafd', 'Rahul Y', 'rahul@gmail.com', NULL, 'cont_LOuefvglK2yK3Q', NULL, '$2y$10$p5AxqKgomIrkbo5GkXAuiu2kvsEzjcHLtjWYVMc.ASIiW60VgARwO', NULL, 'client', '2022-12-05 10:47:33', '2023-03-08 05:21:40', 'pending', NULL, NULL, NULL, NULL),
(6, '9bada014-fb0c-49d3-a7b5-5865f333aa3d', 'Afzal', 'afzal.appdid@gmail.com', 'https://obilia.fra1.digitaloceanspaces.com/public/images/user/img-4051c104d3617b48099c4e2976de26853b420583504.3MXLRyRk2_0.jpg', 'cont_LOuegVhraCXNrW', NULL, '$2y$10$XWcslQTXc5rBy0gQ0hVqa.YDl7FtlOW2ZHO7E1w8t1Z3G/BcArfGi', NULL, 'service_provider', '2023-01-19 10:32:09', '2023-03-08 05:21:41', 'active', '9137231270', 'male', NULL, NULL),
(7, 'b33e643f-cad8-48b8-a82b-8e95881cfdfe', 'Appdid Infotech', 'info.appdid@gmail.com', NULL, 'cont_LOueh2vpQSYLwu', NULL, '$2y$10$DRORqbgL2sp/lmWIMLuNhuz.K2piPeD2zxE/JIRcnhnfAW7cRzHBO', NULL, 'service_provider', '2023-01-19 11:06:18', '2023-03-08 05:21:41', 'pending', NULL, NULL, NULL, NULL),
(8, 'a991e58a-086f-4849-8a44-583bf4eba007', 'Appdid', 'appdid@gmail.com', NULL, 'cont_LOuehQSXZjRwpx', NULL, '$2y$10$U9a4Jgvxe76DkBaIHw1GU.d2QiOHg9ThBk/ioOCBJa0cI9WiM2IqG', NULL, 'service_provider', '2023-02-14 09:55:15', '2023-03-08 05:21:42', 'active', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_banks`
--

CREATE TABLE `user_banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_holder_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rp_account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifsc_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_banks`
--

INSERT INTO `user_banks` (`id`, `name`, `account_holder_name`, `account_number`, `rp_account_number`, `ifsc_code`, `branch`, `address`, `city`, `state`, `user_id`, `created_at`, `updated_at`) VALUES
(21, 'Axis Bank', 'Shivesh Tripathi', '921010045559997', 'fa_LOwlWWppf5XNYh', 'UTIB0001892', 'THANE (EAST)', 'GROUND FLOOR,GEETA CONSTRUCTION CO., ANAND CINEMA STATION ROAD,THANE EAST, DIST. THANE,MAHARASHTRA,PIN 400603', 'MUMBAI', 'MAHARASHTRA', 6, '2023-03-08 07:25:28', '2023-03-08 07:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `user_businesses`
--

CREATE TABLE `user_businesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gstin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incorporation_certificate` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_businesses`
--

INSERT INTO `user_businesses` (`id`, `name`, `cin`, `address`, `gstin`, `incorporation_certificate`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Appdidd', '1234', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.', NULL, 'https://obilia.fra1.digitaloceanspaces.com/public/images/user/business/img-629274178d5d3e80f9f8b7261307f552b41fbd02e2d.2PwiceWZLUg.jpg', 6, '2023-02-03 10:54:51', '2023-02-03 11:11:37'),
(2, 'Appdid LLP', '12341234', '405 Primus Business Park, Rd Number 29, Ambika Nagar No. 2, Wagle Industrial Estate, Thane, Maharashtra 400604', '12341234', 'https://obilia.fra1.digitaloceanspaces.com/public/images/user/business/img-1502042fa48b7c43c2e0cd8b1e811971c05e3897cf1.logo.jpg', 1, '2023-03-15 05:21:15', '2023-03-15 05:21:15');

-- --------------------------------------------------------

--
-- Table structure for table `user_kycs`
--

CREATE TABLE `user_kycs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_kycs`
--

INSERT INTO `user_kycs` (`id`, `name`, `file`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'aadhar', 'https://obilia.fra1.digitaloceanspaces.com/public/images/user/kyc/img-6758366d155778666e4ba0f04b22a9d54b30a149ab8.2PwiceWZLUg.jpg', 6, '2023-02-03 04:59:25', '2023-02-03 04:59:25'),
(2, 'pan', 'https://obilia.fra1.digitaloceanspaces.com/public/images/user/kyc/img-71031f21c3d93129c2b01bde39b473d6ae7a893098d._B7LjqNXu5Q.jpg', 6, '2023-02-03 04:59:25', '2023-02-03 04:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_services`
--

CREATE TABLE `user_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `metadata` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_services`
--

INSERT INTO `user_services` (`id`, `title`, `slug`, `description`, `price`, `user_id`, `category_id`, `sub_category_id`, `status`, `created_at`, `updated_at`, `metadata`) VALUES
(3, 'I will design modern line art text or badge logo design', 'i-will-design-modern-line-art-text-or-badge-logo-design-63f355050b80c', '<p>Progressively syndicate clicks-and-mortar process improvements after dynamic innovation. Dynamically embrace superior functionalities without state of the art architectures. Intrinsicly monetize.</p>\n', 1000.00, 6, 31, 12, 'active', '2023-02-01 06:54:09', '2023-02-21 05:54:04', NULL),
(4, 'I will design UI for Android or IOS apps.', 'i-will-design-ui-for-android-or-ios-apps-63f355050c8cf', '<p>Quickly procrastinate error-free services and holistic mindshare. Holisticly utilize leveraged sources for bricks-and-clicks processes. Dramatically build efficient partnerships and just.</p>\n', 20000.00, 6, 32, 17, 'active', '2023-02-01 07:03:33', '2023-02-21 05:54:04', NULL),
(9, 'I will design modern Android and IOS apps', 'i-will-design-modern-android-and-ios-apps-63f45b2a41511', '<p>Grow your Instagram account and gain more exposure to your audience!</p>\n<p><strong>IMPORTANT NOTES:</strong></p>\n<p>Your account needs to be at least 3 months old with more than 15 posts.\nYou must be logged in to your account.\nThis gig can be extended to run for more than 1 month; simply pick subscription option for 3 or 6 months with 15% discount.</p>\n<p><strong>WHAT DO YOU GET FOR $140?</strong></p>\n<ul>\n<li>Increase Your Target Audience</li>\n<li>Increase Your Engagement and Follower Growth</li>\n<li>Reporting and Analytics of Your Growth</li>\n<li>4 Weeks Management</li>\n</ul>\n<p><strong>WHAT WILL I DO?</strong></p>\n<ul>\n<li>Organic Interactions with Your Target Audience.</li>\n</ul>\n<p><strong>WHAT DO I NEED FROM YOU?</strong></p>\n<p>Username\nPassword\nTargeting information (Competitors, Location, Hashtags)</p>\n<p><strong>WHY IS MY SERVICE BETTER THAN OTHERS?</strong></p>\n<p>I have been one of the first sellers to provide Instagram marketing service here on Fiverr and 6 years later I helped over 11,000 customers succeed with their Instagram journey starting from just a personal account and working with Fortune 500 companies.</p>\n', 20000.00, 6, 32, 17, 'active', '2023-02-21 05:48:26', '2023-02-21 05:54:04', 'app,app,ios,ios,android,android,product-design,product design,design,design,application-design,application design,'),
(10, 'I will be your web developer php laravel, php web developer and develop laravel website', 'i-will-be-your-web-developer-php-laravel-php-web-developer-and-develop-laravel-website-63f46293e8272', '<p>Hello there!</p>\n<p>I\'m a Professional PHP Laravel Web developer having more than five years experience in PHP Laravel, Codeigniter, and WordPress web designing and web development. I\'m able to create any kind of PHP websites and web base application for you.</p>\n<p>Web developer PHP laravel?</p>\n<p>Front end developer?</p>\n<p>Backend developer?</p>\n<p><strong>OFFER!</strong></p>\n<ul>\n<li>Full custom php laravel website</li>\n<li>Core php websites</li>\n<li>Add new custom module</li>\n<li>PHP Codeigniter</li>\n<li>PHP WordPress</li>\n<li>APIs integration</li>\n<li>Third party API integrations</li>\n<li>Front-end and Back-end implementation</li>\n<li>REST-Full APIs</li>\n<li>PHP Laravel APIs</li>\n<li>Front end web development</li>\n<li>Backend web development</li>\n<li>Laravel / Blade</li>\n<li>AWS / Digital Ocean</li>\n</ul>\n<p><strong>Fix Bugs and Issues to!</strong></p>\n<ul>\n<li>PHP Laravel issues</li>\n<li>Core php issues</li>\n<li>Codeigniter issues</li>\n<li>AJAX issues</li>\n<li>WordPress issues</li>\n<li>HTML, CSS Issues</li>\n<li>e-Commerce issues</li>\n<li>Laravel REST APIs</li>\n</ul>\n<p><strong>Databases Includes</strong></p>\n<ul>\n<li>SQL</li>\n<li>MYSQL</li>\n<li>Postgresql</li>\n</ul>\n<p>Need Web developer PHP laravel OR PHP web developer?</p>\n<p>If you are looking for Web developer PHP laravel and php web developer, You are on right place.</p>\n<p><em>Note: Please ping me before ordering, The payment will not be refundable without discuss requirement.</em></p>\n<p>Thank you!</p>\n', 50000.00, 6, 32, 16, 'active', '2023-02-21 06:20:04', '2023-02-27 05:07:23', 'website,website,web-design,web design,laravel,laravel,web-development,web development,php,php,html,html,css,css,'),
(11, 'I design cusotm premium websites.', 'i-design-cusotm-premium-websites-641005349ff4b', '<p>NB: Contact me for Codebase errors/Bugs fixes, JavaScript/PHP issues.</p>\r\n<p>Are you Looking for skilled Pro design and development for your website and apllications?</p>\r\n<p>Are you looking for HTML/CSS, ReactJS/NEXTJS Development?</p>\r\n<p>Are you an agency looking to outsource projects for your clients?</p>\r\n<p>If yes, I have come to your rescue!</p>\r\n<p>What I offer here is to share your lenses, picture what you have in mind and then find the best approach to help you actualize your Web Applications Project.</p>\r\n<p>I develop apps with latest technology using Html/CSS, Reactjs, Nextjs, Nodejs, JavaScript and Laravel.</p>\r\n<p>My Packages Include the following:</p>\r\n<pre><code>HTML, CSS , JAVASCRIPT , Bootstrap, React, Nextjs.\r\nReact js Full Stack Development using MERN stack.\r\nResponsive Design\r\nGoogle Maps integration\r\nCSS, Bootstrap, Material UI Usage\r\nEye-Catching GUI\r\nNode.js or Laravel Backend\r\nFirebase Database Connection\r\nMongoDB Database Connection\r\nSQL Database Connection\r\n	\r\n	\r\n</code></pre>\r\n<p>I assure you:</p>\r\n<pre><code>Delivery before deadline with all requirements completed.\r\n100% satisfaction\r\nResponsive design\r\n</code></pre>\r\n<p>Please, kindly send a message before placing order, so we get the vision &amp; purpose right in order to deliver your project effectively.</p>\r\n', 100000.00, 2, 32, 17, 'active', '2023-03-14 05:25:14', '2023-03-14 05:25:14', 'website,website,web-design,web design,software-development,software development,nextjs,nextjs,webapp,webapp,react,react,');

-- --------------------------------------------------------

--
-- Table structure for table `user_service_images`
--

CREATE TABLE `user_service_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_service_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_service_images`
--

INSERT INTO `user_service_images` (`id`, `user_service_id`, `image`, `created_at`, `updated_at`) VALUES
(2, 3, 'https://obilia.fra1.digitaloceanspaces.com/public/images/services/img-2985bd9318d7ddc0800d1cc64dee8da312fbb2d626e.Logo%20_%20Brand%20Identity_B_2x.webp', '2023-02-01 06:54:14', '2023-02-01 06:54:14'),
(3, 4, 'https://obilia.fra1.digitaloceanspaces.com/public/images/services/img-352977b6c0dc13cfd1f82a3ba1d0953959ae9cfd57d.Application%20Development_2x.webp', '2023-02-01 07:03:33', '2023-02-01 07:03:33'),
(9, 3, 'https://obilia.fra1.digitaloceanspaces.com/public/images/services/img-352977b6c0dc13cfd1f82a3ba1d0953959ae9cfd57d.Application%20Development_2x.webp', '2023-02-01 07:03:33', '2023-02-01 07:03:33'),
(10, 9, 'https://obilia.fra1.digitaloceanspaces.com/public/images/services/img-7621fcd64d041feb8ebabddc43f9db55dada1df127f.eGALMCJ_Cvk.jpg', '2023-02-21 05:48:31', '2023-02-21 05:48:31'),
(11, 9, 'https://obilia.fra1.digitaloceanspaces.com/public/images/services/img-50f1687f4b30e7032dddaebfd852a1affa77ca3bf1.FAUsTQ5Qj7M.jpg', '2023-02-21 05:48:33', '2023-02-21 05:48:33'),
(12, 9, 'https://obilia.fra1.digitaloceanspaces.com/public/images/services/img-304c97a056395d90143bff5e1eca8d49fba1b64e3b9.ffN0cYJMs20.jpg', '2023-02-21 05:48:33', '2023-02-21 05:48:33'),
(13, 9, 'https://obilia.fra1.digitaloceanspaces.com/public/images/services/img-23c97a056395d90143bff5e1eca8d49fba1b64e3b9.fhrWAh2HMnM.jpg', '2023-02-21 05:48:34', '2023-02-21 05:48:34'),
(14, 9, 'https://obilia.fra1.digitaloceanspaces.com/public/images/services/img-966c8d8928acc651056b69af1890955045c02b9b9af.G6dXvXN2gVM.jpg', '2023-02-21 05:48:35', '2023-02-21 05:48:35'),
(15, 10, 'https://obilia.fra1.digitaloceanspaces.com/public/images/services/img-9610a8301fcc2b0af6c2dc95407f6d851246df879ae.gSNSv5_jr44.jpg', '2023-02-21 06:20:06', '2023-02-21 06:20:06'),
(16, 10, 'https://obilia.fra1.digitaloceanspaces.com/public/images/services/img-62302d43a98a72a20c67b8d15cf757105d1d0065cb2.h3CLVcR1ppI.jpg', '2023-02-21 06:20:08', '2023-02-21 06:20:08'),
(17, 10, 'https://obilia.fra1.digitaloceanspaces.com/public/images/services/img-96718e807427828dae56d8edbf9712310592890aee3.h7UcVFHHYFw.jpg', '2023-02-21 06:20:10', '2023-02-21 06:20:10'),
(18, 10, 'https://obilia.fra1.digitaloceanspaces.com/public/images/services/img-110b4ada3521d92136cc852fe188e7db263f6d070c0.HEqGA-7_0Z8.jpg', '2023-02-21 06:20:11', '2023-02-21 06:20:11'),
(19, 10, 'https://obilia.fra1.digitaloceanspaces.com/public/images/services/img-9986fad5c5463e27cbb0845ae6157d9cf576e4dd79b.HSugP9V6HTA.jpg', '2023-02-21 06:20:11', '2023-02-21 06:20:11'),
(20, 11, 'https://obilia.fra1.digitaloceanspaces.com/public/images/services/img-64487a0d8c0f68ce15973e903d3cd888021794bb7e5.357QRVRb_Mc.jpg', '2023-03-14 05:25:24', '2023-03-14 05:25:24');

-- --------------------------------------------------------

--
-- Table structure for table `user_skills`
--

CREATE TABLE `user_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `skill_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_skills`
--

INSERT INTO `user_skills` (`id`, `user_id`, `skill_id`, `created_at`, `updated_at`) VALUES
(1, 2, 21, '2022-12-21 07:11:55', NULL),
(2, 4, 19, '2022-12-21 07:11:55', NULL),
(3, 6, 21, '2022-12-21 07:11:55', NULL),
(4, 6, 19, '2022-12-21 07:11:55', NULL),
(5, 6, 10, '2023-02-03 04:51:18', '2023-02-03 04:51:18');

-- --------------------------------------------------------

--
-- Table structure for table `websockets_statistics_entries`
--

CREATE TABLE `websockets_statistics_entries` (
  `id` int(10) UNSIGNED NOT NULL,
  `app_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peak_connection_count` int(11) NOT NULL,
  `websocket_message_count` int(11) NOT NULL,
  `api_message_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workspaces`
--

CREATE TABLE `workspaces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `contract_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('active','archived') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workspaces`
--

INSERT INTO `workspaces` (`id`, `name`, `slug`, `client_id`, `user_id`, `contract_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'For Testing Purpose workspace', 'for-testing-purpose-workspace', 1, 6, 9, 'active', '2023-02-16 06:54:02', '2023-02-16 06:54:02'),
(2, 'Distinctio Quam eni workspace', 'distinctio-quam-eni-workspace', 6, 2, 10, 'active', '2023-03-14 10:06:47', '2023-03-14 10:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `work_lengths`
--

CREATE TABLE `work_lengths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_lengths`
--

INSERT INTO `work_lengths` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Less than a month', 'less-than-a-month', 'active', '2022-10-31 06:48:54', NULL),
(2, '1 to 3 months', '1-to-3-months', 'active', '2022-10-31 06:49:19', NULL),
(3, '3 to 6 months', '3-to-6-months', 'active', '2022-10-31 06:49:19', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`),
  ADD KEY `categories_industry_id_foreign` (`industry_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `chats_uuid_unique` (`uuid`),
  ADD KEY `chats_job_id_foreign` (`job_id`),
  ADD KEY `chats_workspace_id_foreign` (`workspace_id`);

--
-- Indexes for table `chat_participants`
--
ALTER TABLE `chat_participants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chat_participants_chat_id_foreign` (`chat_id`),
  ADD KEY `chat_participants_user_id_foreign` (`user_id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contracts_client_id_foreign` (`client_id`),
  ADD KEY `contracts_user_id_foreign` (`user_id`),
  ADD KEY `contracts_job_id_foreign` (`job_id`);

--
-- Indexes for table `contract_files`
--
ALTER TABLE `contract_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contract_files_contract_id_foreign` (`contract_id`);

--
-- Indexes for table `contract_milestones`
--
ALTER TABLE `contract_milestones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contract_milestones_contract_id_foreign` (`contract_id`);

--
-- Indexes for table `experience_levels`
--
ALTER TABLE `experience_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_experience_level_id_foreign` (`experience_level_id`),
  ADD KEY `jobs_sub_category_id_foreign` (`sub_category_id`),
  ADD KEY `jobs_metadata_index` (`metadata`),
  ADD KEY `jobs_work_length_id_foreign` (`work_length_id`),
  ADD KEY `jobs_user_id_foreign` (`user_id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_applications_job_id_foreign` (`job_id`),
  ADD KEY `job_applications_user_id_foreign` (`user_id`);

--
-- Indexes for table `job_invitations`
--
ALTER TABLE `job_invitations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_invitations_job_id_foreign` (`job_id`),
  ADD KEY `job_invitations_user_id_foreign` (`user_id`);

--
-- Indexes for table `job_responsibilities`
--
ALTER TABLE `job_responsibilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_responsibilities_job_id_foreign` (`job_id`);

--
-- Indexes for table `job_skills`
--
ALTER TABLE `job_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_skills_job_id_foreign` (`job_id`),
  ADD KEY `job_skills_skill_id_foreign` (`skill_id`);

--
-- Indexes for table `laravel_jobs`
--
ALTER TABLE `laravel_jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laravel_jobs_queue_index` (`queue`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_likeable_type_likeable_id_index` (`likeable_type`,`likeable_id`),
  ADD KEY `likes_user_id_foreign` (`user_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_chat_id_foreign` (`chat_id`),
  ADD KEY `messages_sender_id_foreign` (`sender_id`),
  ADD KEY `messages_replied_to_foreign` (`replied_to`);

--
-- Indexes for table `message_contracts`
--
ALTER TABLE `message_contracts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `message_contracts_message_id_foreign` (`message_id`),
  ADD KEY `message_contracts_send_by_foreign` (`send_by`),
  ADD KEY `message_contracts_send_to_foreign` (`send_to`);

--
-- Indexes for table `message_media`
--
ALTER TABLE `message_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `message_media_message_id_foreign` (`message_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `milestone_works`
--
ALTER TABLE `milestone_works`
  ADD PRIMARY KEY (`id`),
  ADD KEY `milestone_works_milestone_id_foreign` (`milestone_id`);

--
-- Indexes for table `new_milestone_requests`
--
ALTER TABLE `new_milestone_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `new_milestone_requests_contract_id_foreign` (`contract_id`),
  ADD KEY `new_milestone_requests_requested_by_foreign` (`requested_by`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_perks`
--
ALTER TABLE `package_perks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_perks_package_id_foreign` (`package_id`);

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
-- Indexes for table `razorpay_orders`
--
ALTER TABLE `razorpay_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `razorpay_orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_banks`
--
ALTER TABLE `user_banks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_banks_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_businesses`
--
ALTER TABLE `user_businesses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_businesses_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_kycs`
--
ALTER TABLE `user_kycs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_kycs_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_services`
--
ALTER TABLE `user_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_services_user_id_foreign` (`user_id`),
  ADD KEY `user_services_category_id_foreign` (`category_id`),
  ADD KEY `user_services_sub_category_id_foreign` (`sub_category_id`);

--
-- Indexes for table `user_service_images`
--
ALTER TABLE `user_service_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_service_images_user_service_id_foreign` (`user_service_id`);

--
-- Indexes for table `user_skills`
--
ALTER TABLE `user_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_skills_user_id_foreign` (`user_id`),
  ADD KEY `user_skills_skill_id_foreign` (`skill_id`);

--
-- Indexes for table `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workspaces`
--
ALTER TABLE `workspaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `workspaces_client_id_foreign` (`client_id`),
  ADD KEY `workspaces_user_id_foreign` (`user_id`),
  ADD KEY `workspaces_contract_id_foreign` (`contract_id`);

--
-- Indexes for table `work_lengths`
--
ALTER TABLE `work_lengths`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_lengths_slug_index` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `chat_participants`
--
ALTER TABLE `chat_participants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contract_files`
--
ALTER TABLE `contract_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contract_milestones`
--
ALTER TABLE `contract_milestones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `experience_levels`
--
ALTER TABLE `experience_levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `job_invitations`
--
ALTER TABLE `job_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_responsibilities`
--
ALTER TABLE `job_responsibilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `job_skills`
--
ALTER TABLE `job_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `laravel_jobs`
--
ALTER TABLE `laravel_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=560;

--
-- AUTO_INCREMENT for table `message_contracts`
--
ALTER TABLE `message_contracts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message_media`
--
ALTER TABLE `message_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `milestone_works`
--
ALTER TABLE `milestone_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `new_milestone_requests`
--
ALTER TABLE `new_milestone_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `package_perks`
--
ALTER TABLE `package_perks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `razorpay_orders`
--
ALTER TABLE `razorpay_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_banks`
--
ALTER TABLE `user_banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_businesses`
--
ALTER TABLE `user_businesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_kycs`
--
ALTER TABLE `user_kycs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_services`
--
ALTER TABLE `user_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_service_images`
--
ALTER TABLE `user_service_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_skills`
--
ALTER TABLE `user_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workspaces`
--
ALTER TABLE `workspaces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `work_lengths`
--
ALTER TABLE `work_lengths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_industry_id_foreign` FOREIGN KEY (`industry_id`) REFERENCES `industries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chats_workspace_id_foreign` FOREIGN KEY (`workspace_id`) REFERENCES `workspaces` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `chat_participants`
--
ALTER TABLE `chat_participants`
  ADD CONSTRAINT `chat_participants_chat_id_foreign` FOREIGN KEY (`chat_id`) REFERENCES `chats` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chat_participants_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contracts`
--
ALTER TABLE `contracts`
  ADD CONSTRAINT `contracts_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `contracts_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`),
  ADD CONSTRAINT `contracts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `contract_files`
--
ALTER TABLE `contract_files`
  ADD CONSTRAINT `contract_files_contract_id_foreign` FOREIGN KEY (`contract_id`) REFERENCES `contracts` (`id`);

--
-- Constraints for table `contract_milestones`
--
ALTER TABLE `contract_milestones`
  ADD CONSTRAINT `contract_milestones_contract_id_foreign` FOREIGN KEY (`contract_id`) REFERENCES `contracts` (`id`);

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_experience_level_id_foreign` FOREIGN KEY (`experience_level_id`) REFERENCES `experience_levels` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `jobs_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `jobs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jobs_work_length_id_foreign` FOREIGN KEY (`work_length_id`) REFERENCES `work_lengths` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD CONSTRAINT `job_applications_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `job_applications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `job_invitations`
--
ALTER TABLE `job_invitations`
  ADD CONSTRAINT `job_invitations_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `job_invitations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `job_responsibilities`
--
ALTER TABLE `job_responsibilities`
  ADD CONSTRAINT `job_responsibilities_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `job_skills`
--
ALTER TABLE `job_skills`
  ADD CONSTRAINT `job_skills_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `job_skills_skill_id_foreign` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_chat_id_foreign` FOREIGN KEY (`chat_id`) REFERENCES `chats` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_replied_to_foreign` FOREIGN KEY (`replied_to`) REFERENCES `messages` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `message_contracts`
--
ALTER TABLE `message_contracts`
  ADD CONSTRAINT `message_contracts_message_id_foreign` FOREIGN KEY (`message_id`) REFERENCES `messages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `message_contracts_send_by_foreign` FOREIGN KEY (`send_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `message_contracts_send_to_foreign` FOREIGN KEY (`send_to`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `message_media`
--
ALTER TABLE `message_media`
  ADD CONSTRAINT `message_media_message_id_foreign` FOREIGN KEY (`message_id`) REFERENCES `messages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `milestone_works`
--
ALTER TABLE `milestone_works`
  ADD CONSTRAINT `milestone_works_milestone_id_foreign` FOREIGN KEY (`milestone_id`) REFERENCES `contract_milestones` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `new_milestone_requests`
--
ALTER TABLE `new_milestone_requests`
  ADD CONSTRAINT `new_milestone_requests_contract_id_foreign` FOREIGN KEY (`contract_id`) REFERENCES `contracts` (`id`),
  ADD CONSTRAINT `new_milestone_requests_requested_by_foreign` FOREIGN KEY (`requested_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `package_perks`
--
ALTER TABLE `package_perks`
  ADD CONSTRAINT `package_perks_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `razorpay_orders`
--
ALTER TABLE `razorpay_orders`
  ADD CONSTRAINT `razorpay_orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `user_banks`
--
ALTER TABLE `user_banks`
  ADD CONSTRAINT `user_banks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_businesses`
--
ALTER TABLE `user_businesses`
  ADD CONSTRAINT `user_businesses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_kycs`
--
ALTER TABLE `user_kycs`
  ADD CONSTRAINT `user_kycs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_services`
--
ALTER TABLE `user_services`
  ADD CONSTRAINT `user_services_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_services_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_services_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_service_images`
--
ALTER TABLE `user_service_images`
  ADD CONSTRAINT `user_service_images_user_service_id_foreign` FOREIGN KEY (`user_service_id`) REFERENCES `user_services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_skills`
--
ALTER TABLE `user_skills`
  ADD CONSTRAINT `user_skills_skill_id_foreign` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_skills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `workspaces`
--
ALTER TABLE `workspaces`
  ADD CONSTRAINT `workspaces_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `workspaces_contract_id_foreign` FOREIGN KEY (`contract_id`) REFERENCES `contracts` (`id`),
  ADD CONSTRAINT `workspaces_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
