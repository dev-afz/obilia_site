-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 02, 2022 at 01:13 PM
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
-- Database: `obilia_laravel`
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `status`, `created_at`, `updated_at`) VALUES
(25, 'Software Development', 'software-development', 'https://obilia.fra1.digitaloceanspaces.com/public/images/category/img-746874d2629490650d7cfbfb9e174f05f8562ff8c00.batman.jpg', 'active', '2022-11-25 04:21:32', '2022-11-25 04:21:32'),
(26, 'Design', 'design', 'https://obilia.fra1.digitaloceanspaces.com/public/images/category/img-196a2877d772916abfa190126ff387f657fd7796a9d.batman.jpg', 'active', '2022-11-25 04:23:15', '2022-11-25 04:23:15'),
(27, 'Sales', 'sales', 'https://obilia.fra1.digitaloceanspaces.com/public/images/category/img-54285d1b1aaf10a8b1e48495ba044d0d6f17167a856.batman.jpg', 'active', '2022-11-25 04:23:29', '2022-11-25 04:23:29'),
(28, 'Writing', 'writing', 'https://obilia.fra1.digitaloceanspaces.com/public/images/category/img-3841f9fcede18ce1701795e2a870791dbc6ea96830.batman.jpg', 'active', '2022-11-25 04:23:46', '2022-11-25 04:23:46'),
(29, 'HR', 'hr', 'https://obilia.fra1.digitaloceanspaces.com/public/images/category/img-63116c6ec0f03e8e00011f1bebd0821c002b39049c9.batman.jpg', 'active', '2022-11-25 04:24:03', '2022-11-25 04:24:03'),
(30, 'Legal', 'legal', 'https://obilia.fra1.digitaloceanspaces.com/public/images/category/img-9793f51fe57186096a089a8a43911c9d6f75534a9c4.batman.jpg', 'active', '2022-11-25 04:24:12', '2022-11-25 04:24:12');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `name`, `uuid`, `settings`, `job_id`, `created_at`, `updated_at`) VALUES
(1, 'Test Chat', '95e93777-0458-407e-9bbd-719b3f913069', NULL, NULL, '2022-12-02 10:34:07', NULL);

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
(1, 1, 2, 'owner', '2022-12-02 10:35:31', NULL),
(2, 1, 4, 'member', '2022-12-02 10:35:47', NULL);

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
(11, 'Need  a laravel developer for maintainance', 'need-a-laravel-developer-for-maintainance', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://obilia.fra1.digitaloceanspaces.com/public/images/jobs/banner-296764c22cfbdc0c0afc923f729892d5243b6ecfa66.3MXLRyRk2_0.jpg', 'fixed', 30.00, 'medium', 'public', 'india', 10000.00, 20000.00, 2, 6, 'PHP,Javascript,Php Developer,Software Development,1 to 3 months,Intermediate,Need  a laravel developer for maintainance', 2, '2022-11-25 10:24:05', '2022-11-29 11:19:56', 1, 'active'),
(12, 'Looking For Logo Designer', 'looking-for-logo-designer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://obilia.fra1.digitaloceanspaces.com/public/images/jobs/banner-56039c37c78c5abda4dc13fa5a6ff97cd8685bba0e2.2PwiceWZLUg.jpg', 'fixed', 60.00, 'medium', 'public', 'india', 10000.00, 20000.00, 3, 10, 'Javascript,Node,Graphic Designer,Design,3 to 6 months,Expert,Looking For Logo Designer', 3, '2022-11-25 11:41:44', '2022-11-29 11:20:12', 2, 'active'),
(13, 'Flutter Developer for bug fixing', 'flutter-developer-for-bug-fixing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://obilia.fra1.digitaloceanspaces.com/public/images/jobs/banner-7480eea146c6b27d76af2c969ef7a465c9aa3e2bf65.FAUsTQ5Qj7M.jpg', 'fixed', 20.00, 'small', 'public', 'india', 30000.00, 40000.00, 2, 7, 'C++,Node,Flutter Developer,Software Development,Less than a month,Intermediate,Flutter Developer for bug fixing', 1, '2022-11-25 11:45:01', '2022-11-29 11:20:12', 2, 'active'),
(14, 'Looking For React Developer', 'looking-for-react-developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://obilia.fra1.digitaloceanspaces.com/public/images/jobs/banner-938a0734f4b364baf761fd52e65fae8a51a3189018d.M8-uyRHdsHc.jpg', 'fixed', 50.00, 'medium', 'public', 'india', 50000.00, 60000.00, 3, 8, 'Javascript,Node,React Developer,Software Development,1 to 3 months,Expert,Looking For React Developer', 2, '2022-11-25 11:48:58', '2022-11-29 11:20:12', 1, 'active'),
(19, 'Looking For UI/UX Expert', 'looking-for-uiux-expert', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://obilia.fra1.digitaloceanspaces.com/public/images/jobs/banner-804455182b735a47391bb57025dbf3f805cd3a3644a.2PwiceWZLUg.jpg', 'fixed', 10.00, 'small', 'public', 'india', 5000.00, 10000.00, 3, 9, 'Figma,Adobe XD,Spline,UI/UX Designer,Design,Less than a month,Expert,Looking For UI/UX Expert', 1, '2022-11-25 12:42:04', '2022-11-29 11:20:12', 1, 'active'),
(20, 'Looking For PHP Dev', 'looking-for-php-dev', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://obilia.fra1.digitaloceanspaces.com/public/images/jobs/banner-643b45e2e7db39d279537ff3391f14c4e0eabeedc59.YClzI5vhtBE.jpg', 'fixed', 50.00, 'medium', 'public', 'india', 20000.00, 50000.00, 2, 6, 'PHP,Javascript,Node,Php Developer,Software Development,1 to 3 months,Intermediate,Looking For PHP Dev', 2, '2022-11-28 06:46:32', '2022-11-29 11:20:12', 1, 'active'),
(21, 'Looking For React/Node Dev', 'looking-for-reactnode-dev', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://obilia.fra1.digitaloceanspaces.com/public/images/jobs/banner-5327b28fbe24e8c0c3147b478e8fd989ecc083d7b03.T6kZsf30NW0.jpg', 'fixed', 50.00, 'medium', 'public', 'india', 20000.00, 50000.00, 2, 8, 'PHP,Javascript,Node,React,React Developer,Software Development,1 to 3 months,Intermediate,Looking For React/Node Dev', 2, '2022-11-28 09:18:10', '2022-11-29 11:04:14', 1, 'active');

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
(1, 11, 1, 20000.00, NULL, 'Dramatically matrix reliable imperatives through real-time platforms. Competently synergize highly efficient e-markets vis-a-vis revolutionary architectures. Credibly initiate flexible supply chains.', 'accepted', '2022-12-02 04:44:00', '2022-12-02 05:52:31'),
(2, 11, 4, 20000.00, 'https://obilia.fra1.digitaloceanspaces.com/public/docs/job-proposal/proposals-146dbf8439538f23867ba2e091e32597a2b2c27a0ce.T6kZsf30NW0.jpg', 'Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.', 'pending', '2022-12-02 06:12:15', '2022-12-02 06:12:15');

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
(1, 19, 4, 'pending', '2022-12-02 05:40:20', NULL),
(2, 11, 2, 'pending', '2022-12-02 05:51:36', '2022-12-02 05:51:36');

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
(1, 21, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum expedita pariatur optio tenetur facilis sed aliquid ducimus illo, ullam officia architecto alias magni nulla officiis commodi dicta voluptate nisi sunt.', '2022-11-28 09:18:10', NULL),
(2, 21, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo delectus aspernatur dolorem fuga voluptatem ad, amet molestiae saepe facere eius in optio, repudiandae nobis dicta fugit maiores quos, magni neque.', '2022-11-28 09:18:10', NULL),
(3, 21, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam labore repudiandae iure veritatis quasi quas aliquam porro beatae amet! Quaerat, facere dolore tenetur doloremque autem illo libero magni officia. Rem!', '2022-11-28 09:18:10', NULL);

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
(26, 11, 2, NULL, '2022-11-25 10:24:05', NULL),
(27, 11, 3, NULL, '2022-11-25 10:24:05', NULL),
(28, 12, 3, NULL, '2022-11-25 11:41:44', NULL),
(29, 12, 4, NULL, '2022-11-25 11:41:44', NULL),
(30, 13, 1, NULL, '2022-11-25 11:45:01', NULL),
(31, 13, 4, NULL, '2022-11-25 11:45:01', NULL),
(32, 14, 3, NULL, '2022-11-25 11:48:58', NULL),
(33, 14, 4, NULL, '2022-11-25 11:48:58', NULL),
(34, 19, 6, NULL, '2022-11-25 12:42:04', NULL),
(35, 19, 7, NULL, '2022-11-25 12:42:04', NULL),
(36, 19, NULL, 'Spline', '2022-11-25 12:42:04', NULL),
(37, 20, 2, NULL, '2022-11-28 06:46:32', NULL),
(38, 20, 3, NULL, '2022-11-28 06:46:32', NULL),
(39, 20, 4, NULL, '2022-11-28 06:46:32', NULL),
(40, 21, 2, NULL, '2022-11-28 09:18:10', NULL),
(41, 21, 3, NULL, '2022-11-28 09:18:10', NULL),
(42, 21, 4, NULL, '2022-11-28 09:18:10', NULL),
(43, 21, NULL, 'React', '2022-11-28 09:18:10', NULL);

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
(8, 'App\\Models\\Job', 13, '2022-11-29 07:28:15', '2022-11-29 07:28:15', 1),
(11, 'App\\Models\\Job', 12, '2022-11-30 09:21:59', '2022-11-30 09:21:59', 1),
(12, 'App\\Models\\Job', 11, '2022-12-02 06:13:41', '2022-12-02 06:13:41', 4),
(13, 'App\\Models\\Job', 12, '2022-12-02 06:13:42', '2022-12-02 06:13:42', 4),
(14, 'App\\Models\\Job', 20, '2022-12-02 06:13:45', '2022-12-02 06:13:45', 4);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chat_id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED DEFAULT NULL,
  `recipient_id` bigint(20) UNSIGNED DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `read_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(46, '2022_12_02_101337_create_chat_participants_table', 22);

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
(7, 'Test', 'Test', NULL, 30, 1000.00, 0.00, 'no', 'no', 'individual', 'active', '2022-10-12 07:27:32', '2022-10-12 07:27:32');

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
(5, 7, 'watermark', 'yes', '2022-10-12 07:27:32', '2022-10-12 07:27:32');

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
(1, 'C++', 'c', 'active', '2022-10-30 23:20:40', '2022-10-30 23:20:40'),
(2, 'PHP', 'php', 'active', '2022-10-30 23:20:47', '2022-10-30 23:20:47'),
(3, 'Javascript', 'javascript', 'active', '2022-10-30 23:20:57', '2022-10-30 23:20:57'),
(4, 'Node', 'node', 'active', '2022-10-30 23:21:04', '2022-10-30 23:21:04'),
(5, 'UI/UX', 'uiux', 'active', '2022-11-25 06:16:26', '2022-11-25 06:16:26'),
(6, 'Figma', 'figma', 'active', '2022-11-25 06:16:34', '2022-11-25 06:16:34'),
(7, 'Adobe XD', 'adobe-xd', 'active', '2022-11-25 06:16:45', '2022-11-25 06:16:45'),
(8, 'Sketch', 'sketch', 'active', '2022-11-25 06:17:05', '2022-11-25 06:17:05');

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
(6, 'Php Developer', 'php-developer', 'https://obilia.fra1.digitaloceanspaces.com/public/images/sub-category/img-405bad581098c37b6ce19d6d5b9ac8bdedc06cd3deb.batman.jpg', 25, 'active', '2022-11-25 04:24:32', '2022-11-25 04:24:32'),
(7, 'Flutter Developer', 'flutter-developer', 'https://obilia.fra1.digitaloceanspaces.com/public/images/sub-category/img-4744ecc991f51285db3738a99d91d0080e07dbd4b76.batman.jpg', 25, 'active', '2022-11-25 04:24:49', '2022-11-25 04:24:49'),
(8, 'React Developer', 'react-developer', 'https://obilia.fra1.digitaloceanspaces.com/public/images/sub-category/img-7819041b4e79856b8e2888ee7b96707888125ca77bd.batman.jpg', 25, 'active', '2022-11-25 04:25:06', '2022-11-25 04:25:06'),
(9, 'UI/UX Designer', 'uiux-designer', 'https://obilia.fra1.digitaloceanspaces.com/public/images/sub-category/img-227fe1ff4c5a19ac6626cf705424b715a12986f863e.gSNSv5_jr44.jpg', 26, 'active', '2022-11-25 04:26:02', '2022-11-25 04:26:02'),
(10, 'Graphic Designer', 'graphic-designer', 'https://obilia.fra1.digitaloceanspaces.com/public/images/sub-category/img-476d66bfb6a4ff35b7cc72915f0333c53f2b4298477.6AUHONBTYjI.jpg', 26, 'active', '2022-11-25 04:26:27', '2022-11-25 04:26:27'),
(11, 'Web Designer', 'web-designer', 'https://obilia.fra1.digitaloceanspaces.com/public/images/sub-category/img-33068f45bd3509dd367df80896a384ebaa3f4612b93._B7LjqNXu5Q.jpg', 26, 'active', '2022-11-25 04:27:09', '2022-11-25 04:27:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(3000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('service_provider','client') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'service_provider',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('pending','active','blocked') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `images`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Shiv', 'shivtiwari627@gmail.com', '/site/img/team-1.jpg', NULL, '$2y$10$6OBK74JoKFlZxxydwwE1e.iubWkqqcm5ZXNcLFBzaKtiMiGli2K0O', 'rRm1nQkAn7mZphmKQaMb55jSvdFceY6P9MUTfianPNP77tlQIrjZ24W1yixV', 'client', '2022-09-26 10:57:06', NULL, 'active'),
(2, 'Shivesh', 'shivesh.appdid@gmail.com', 'https://obilia.fra1.digitaloceanspaces.com/public/images/users/batman.jpg', NULL, '$2y$10$ewXPSIQ4nZ5DpqUc4Kq87OobRwAKf8FHhit/rhsdLcjSkXOiQf/vW', 'MeC0bHWCO1uimW8HBP5mxtfaK2RTdTlkYb6vi4o3daydEFJy0tlQ2G6SO2rb', 'service_provider', '2022-11-07 04:44:08', '2022-11-07 04:44:08', 'active'),
(3, 'Rahul', 'rahul.appdid@gmail.com', NULL, NULL, '$2y$10$oUKnUgnYH61ExFQzRKOXb.1mLeYVoYQTO4ADDtV5zk0KfSmk4wDSW', NULL, 'client', '2022-11-07 05:34:53', '2022-11-07 05:34:53', 'pending'),
(4, 'Ketan Kadam', 'ketan.appdid@gmail.com', NULL, NULL, '$2y$10$ggGI0IzY3vWFhR6BPBwkcOC82GpQsXcMPLpbF8tuxlUVU5XsheNtu', NULL, 'service_provider', '2022-11-07 05:45:45', '2022-11-07 05:45:45', 'active');

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
(1, 2, 3, '2022-11-15 06:20:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `workspaces`
--

CREATE TABLE `workspaces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `chats_uuid_unique` (`uuid`),
  ADD KEY `chats_job_id_foreign` (`job_id`);

--
-- Indexes for table `chat_participants`
--
ALTER TABLE `chat_participants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chat_participants_chat_id_foreign` (`chat_id`),
  ADD KEY `chat_participants_user_id_foreign` (`user_id`);

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
  ADD KEY `messages_recipient_id_foreign` (`recipient_id`);

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
-- Indexes for table `user_skills`
--
ALTER TABLE `user_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_skills_user_id_foreign` (`user_id`),
  ADD KEY `user_skills_skill_id_foreign` (`skill_id`);

--
-- Indexes for table `workspaces`
--
ALTER TABLE `workspaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `workspaces_job_id_foreign` (`job_id`),
  ADD KEY `workspaces_user_id_foreign` (`user_id`),
  ADD KEY `workspaces_client_id_foreign` (`client_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chat_participants`
--
ALTER TABLE `chat_participants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_invitations`
--
ALTER TABLE `job_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_responsibilities`
--
ALTER TABLE `job_responsibilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_skills`
--
ALTER TABLE `job_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `laravel_jobs`
--
ALTER TABLE `laravel_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message_media`
--
ALTER TABLE `message_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `package_perks`
--
ALTER TABLE `package_perks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_skills`
--
ALTER TABLE `user_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `workspaces`
--
ALTER TABLE `workspaces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `work_lengths`
--
ALTER TABLE `work_lengths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `chat_participants`
--
ALTER TABLE `chat_participants`
  ADD CONSTRAINT `chat_participants_chat_id_foreign` FOREIGN KEY (`chat_id`) REFERENCES `chats` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chat_participants_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
  ADD CONSTRAINT `messages_recipient_id_foreign` FOREIGN KEY (`recipient_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `message_media`
--
ALTER TABLE `message_media`
  ADD CONSTRAINT `message_media_message_id_foreign` FOREIGN KEY (`message_id`) REFERENCES `messages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `package_perks`
--
ALTER TABLE `package_perks`
  ADD CONSTRAINT `package_perks_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

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
  ADD CONSTRAINT `workspaces_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `workspaces_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `workspaces_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
