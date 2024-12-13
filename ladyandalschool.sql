-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 15, 2024 at 07:00 AM
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
-- Database: `ladyandalschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `banner_id` int(11) NOT NULL,
  `page` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `caption` text DEFAULT NULL,
  `desktop_image` varchar(255) NOT NULL,
  `mobile_image` varchar(255) NOT NULL,
  `hyperlink` varchar(255) DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `is_published` tinyint(1) DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`banner_id`, `page`, `title`, `caption`, `desktop_image`, `mobile_image`, `hyperlink`, `sort_order`, `is_published`, `created_at`, `updated_at`) VALUES
(2, 'home', 'Lady Andal School', '', 'home-1_20241028_111742.jpg', 'mobileHome-1_20241028_111722.jpg', '', 1, 1, '2024-10-22 06:54:29', '2024-10-28 13:08:43'),
(3, 'home', 'Learning', '', 'home-2_20241028_111659.jpg', 'mobileHome-2_20241028_111632.jpg', '', 2, 1, '2024-10-25 06:49:23', '2024-10-28 11:16:59'),
(4, 'home', 'Lady andal school', '', 'home-3_20241028_111850.jpg', 'mobileHome-3_20241028_111803.jpg', '', 3, 1, '2024-10-28 10:30:58', '2024-10-28 13:08:36'),
(5, 'home', 'Academic', '', 'home-4_20241028_131621.jpg', 'mobileHome-4_20241028_131622.jpg', '', 4, 1, '2024-10-28 13:16:22', '2024-10-28 13:16:22'),
(7, 'career', 'Career', '', 'careersBanner_20241105_073447.jpg', 'careers-MobBanner_20241105_073447.jpg', '', 1, 1, '2024-11-05 07:34:47', '2024-11-05 08:50:57'),
(8, 'testimonial', 'Testimonial', '', 'learning-inquiry_20241113_122410.jpg', 'learning-inquiry-Mob_20241113_122410.jpg', '', 1, 1, '2024-11-13 12:24:10', '2024-11-13 12:34:46'),
(9, 'faq', 'faq', '', 'contactBanner_20241113_124300.jpg', 'contactBanner-Mob_20241113_124300.jpg', '', 1, 1, '2024-11-13 12:43:00', '2024-11-13 12:44:30'),
(10, 'about', 'About us', '', 'aboutBanner_20241113_134757.jpg', 'aboutBannerMob_20241113_134757.jpg', '', 1, 1, '2024-11-13 13:47:57', '2024-11-13 13:50:28'),
(11, 'learning', 'Learning', '', 'learningBanner_20241113_141305.jpg', 'learning-Mob_20241113_141305.jpg', '', 1, 1, '2024-11-13 14:13:05', '2024-11-13 14:13:39'),
(12, 'learning-inquiry', 'Learning', '', 'learning-inquiry_20241113_141459.jpg', 'learning-inquiry-Mob_20241113_141459.jpg', '', 1, 1, '2024-11-13 14:14:59', '2024-11-13 14:15:47'),
(13, 'learning-myp', 'MYP overview', '', 'learning-inquiry_20241113_141923.jpg', 'learning-inquiry-Mob_20241113_141923.jpg', '', 1, 1, '2024-11-13 14:19:23', '2024-11-13 14:19:23'),
(14, 'learning-pyp', 'PYP overview', '', 'learning-inquiry_20241113_141955.jpg', 'learning-inquiry-Mob_20241113_141955.jpg', '', 1, 1, '2024-11-13 14:19:55', '2024-11-13 14:19:55'),
(15, 'learning-dp', 'DP overview', '', 'learning-inquiry_20241113_142043.jpg', 'learning-inquiry-Mob_20241113_142043.jpg', '', 1, 1, '2024-11-13 14:20:43', '2024-11-13 14:20:43'),
(16, 'student-life', 'Student\'s life', '', 'studentLifeBanner_20241114_054631.jpg', 'studentLifeBannerMob_20241114_054631.jpg', '', 1, 1, '2024-11-14 05:46:31', '2024-11-14 05:46:31'),
(17, 'newsEvents', 'News and events', '', 'new-and-eventsBanner_20241114_055228.jpg', 'new-and-eventsBanner-Mob_20241114_055228.jpg', '', 1, 1, '2024-11-14 05:52:28', '2024-11-14 05:52:28'),
(18, 'infrastructure', 'Infrastructure', '', 'infraBanner_20241114_060855.jpg', 'infraBanner-Mob.jpg_20241114_060855.jpg', '', 1, 1, '2024-11-14 06:08:55', '2024-11-14 06:08:55'),
(19, 'documents', 'Documents', '', 'documentBanner_20241114_062132.jpg', 'documentBanner-Mob_20241114_062132.jpg', '', 1, 1, '2024-11-14 06:21:32', '2024-11-14 06:21:40'),
(20, 'admission', 'Admission', '', 'admissionBanner_20241114_062815.jpg', 'admissionBanner-Mob_20241114_062815.jpg', '', 1, 1, '2024-11-14 06:28:15', '2024-11-14 06:28:40'),
(21, 'our-work-culture', 'Our work culture', '', 'careersBanner_20241114_063910.jpg', 'careers-MobBanner_20241114_063910.jpg', '', 1, 1, '2024-11-14 06:39:10', '2024-11-14 06:39:10'),
(22, 'contact', 'Contact', '', 'contactBanner_20241114_064150.jpg', 'contactBanner-Mob_20241114_064150.jpg', '', 1, 1, '2024-11-14 06:41:50', '2024-11-14 06:41:50'),
(23, 'learning-profile', 'Learning profile', '', 'learning-inquiry_20241115_054527.jpg', 'learning-inquiry-Mob_20241115_054527.jpg', '', 1, 1, '2024-11-15 05:45:27', '2024-11-15 05:45:27'),
(24, 'learning-im', 'International mindedness', '', 'learning-inquiry_20241115_054609.jpg', 'learning-inquiry-Mob_20241115_054609.jpg', '', 1, 1, '2024-11-15 05:46:09', '2024-11-15 05:46:09');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `career_id` int(11) NOT NULL,
  `job_type` enum('Academic Opportunities','Administrative Opportunities') NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `employment_type` enum('Full-time','Part-time','Contract') NOT NULL,
  `posted_on` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `job_overview` text NOT NULL,
  `qualifications` text NOT NULL,
  `experience` int(11) NOT NULL,
  `who_are_we_looking_for` text NOT NULL,
  `key_responsibilities` text NOT NULL,
  `must_have` text NOT NULL,
  `nice_to_have` text NOT NULL,
  `last_applied_date` date NOT NULL,
  `publish` tinyint(1) DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`career_id`, `job_type`, `job_title`, `employment_type`, `posted_on`, `location`, `job_overview`, `qualifications`, `experience`, `who_are_we_looking_for`, `key_responsibilities`, `must_have`, `nice_to_have`, `last_applied_date`, `publish`, `created_at`, `updated_at`) VALUES
(1, 'Administrative Opportunities', 'Testing', 'Full-time', '2024-10-17', 'Chennai', 'Testing', 'Testing', 3, 'Testing', 'Testing', 'Testing', 'Testing', '2024-10-17', 1, '2024-10-16 10:47:26', '2024-10-16 10:47:26'),
(2, 'Administrative Opportunities', 'Testing', 'Full-time', '2024-10-17', 'Chennai', 'Test', 'Test', 3, 'Testing', 'Testing', 'Test', 'Testing', '2024-10-17', 1, '2024-10-16 10:55:59', '2024-10-16 11:07:44'),
(3, 'Administrative Opportunities', 'Testing', 'Full-time', '2024-10-17', 'Chennai', 'Testing', 'Test', 3, 'Test', 'Test', 'Testing', 'Testing', '2024-10-17', 1, '2024-10-16 10:56:45', '2024-10-16 10:56:45'),
(4, 'Administrative Opportunities', 'Testing', 'Full-time', '2024-10-17', 'Chennai', 'Testing', 'Test', 3, 'Test', 'Test', 'Testing', 'Testing', '2024-10-17', 1, '2024-10-16 11:02:05', '2024-10-16 11:02:05'),
(5, 'Academic Opportunities', 'Physics Teacher', 'Full-time', '2024-10-17', 'Chennai', 'Testing', 'M.Sc Mathamatics', 4, 'Testing', 'Testing', 'Testing', 'Testing', '2024-10-24', 1, '2024-10-16 11:18:08', '2024-10-16 11:18:36'),
(6, 'Administrative Opportunities', 'Physics Teacher', 'Full-time', '2024-10-17', 'Chennai', 'Testing', 'M.Sc Mathamatics', 4, 'Testing', 'Testing', 'Testing', 'Testing', '2024-10-24', 1, '2024-10-16 11:18:08', '2024-10-18 04:10:39'),
(7, 'Administrative Opportunities', 'Testing', 'Full-time', '2024-10-17', 'Chennai', 'Testing', 'Testing', 3, 'Testing', 'Testing', 'Testing', 'Testing', '2024-10-17', 1, '2024-10-16 10:47:26', '2024-10-16 10:47:26'),
(8, 'Administrative Opportunities', 'Testing', 'Full-time', '2024-10-17', 'Chennai', 'Test', 'Test', 3, 'Testing', 'Testing', 'Test', 'Testing', '2024-10-17', 1, '2024-10-16 10:55:59', '2024-10-16 11:07:44'),
(9, 'Administrative Opportunities', 'Testing', 'Full-time', '2024-10-17', 'Chennai', 'Testing', 'Test', 3, 'Test', 'Test', 'Testing', 'Testing', '2024-10-17', 1, '2024-10-16 10:56:45', '2024-10-16 10:56:45'),
(10, 'Administrative Opportunities', 'Testing', 'Full-time', '2024-10-17', 'Chennai', 'Testing', 'Test', 3, 'Test', 'Test', 'Testing', 'Testing', '2024-10-17', 1, '2024-10-16 11:02:05', '2024-10-16 11:02:05'),
(11, 'Academic Opportunities', 'Physics Teacher', 'Full-time', '2024-10-17', 'Chennai', 'Testing', 'M.Sc Mathamatics', 4, 'Testing', 'Testing', 'Testing', 'Testing', '2024-10-24', 1, '2024-10-16 11:18:08', '2024-10-16 11:18:36'),
(12, 'Academic Opportunities', 'Physics Teacher', 'Full-time', '2024-10-17', 'Chennai', 'Testing', 'M.Sc Mathamatics', 4, 'Testing', 'Testing', 'Testing', 'Testing', '2024-10-24', 1, '2024-10-16 11:18:08', '2024-10-16 11:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `enquiry` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `first_name`, `last_name`, `email`, `phone`, `enquiry`, `created_at`, `updated_at`) VALUES
(1, 'Testing', 'T', 'test@gmail.com', '+1234567890', 'Testing', '2024-10-19 19:42:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `programme` varchar(100) NOT NULL,
  `academic_year` varchar(20) NOT NULL,
  `document_name` varchar(255) NOT NULL,
  `uploaded_at` datetime NOT NULL,
  `is_published` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `programme`, `academic_year`, `document_name`, `uploaded_at`, `is_published`) VALUES
(2, 'MYP', '2025-2026', '1729259287_79a5f01659b990eb01d6.pdf', '2024-10-18 13:23:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `event_location` varchar(255) NOT NULL,
  `event_description` text NOT NULL,
  `registration_required` enum('yes','no') NOT NULL,
  `desktop_image` varchar(255) NOT NULL,
  `mobile_image` varchar(255) NOT NULL,
  `is_published` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_date`, `start_time`, `end_time`, `event_location`, `event_description`, `registration_required`, `desktop_image`, `mobile_image`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Event1', '2024-10-11', '11:47:00', '11:48:00', 'chennai', 'this is need', 'yes', '1729145765_943f87e890e16ef58165.png', '1729145765_f8af963e70ee68fc511e.png', 1, '2024-10-17 06:16:05', '2024-10-17 06:16:05'),
(2, 'Event2', '2024-10-11', '11:47:00', '11:48:00', 'chennai', 'this is need', 'yes', '1729145765_943f87e890e16ef58165.png', '1729145765_f8af963e70ee68fc511e.png', 1, '2024-10-17 06:16:05', '2024-10-17 06:16:05'),
(3, 'Event3', '2024-10-11', '11:47:00', '11:48:00', 'chennai', 'this is need', 'yes', '1729145765_943f87e890e16ef58165.png', '1729145765_f8af963e70ee68fc511e.png', 1, '2024-10-17 06:16:05', '2024-10-17 06:16:05'),
(4, 'Event4', '2024-10-11', '11:47:00', '11:48:00', 'chennai', 'this is need', 'yes', '1729145765_943f87e890e16ef58165.png', '1729145765_f8af963e70ee68fc511e.png', 1, '2024-10-17 06:16:05', '2024-10-17 06:16:05'),
(5, 'Event5', '2024-10-11', '10:47:00', '11:48:00', 'chennai', 'this is need', 'yes', '1729145765_943f87e890e16ef58165.png', '1729145765_f8af963e70ee68fc511e.png', 1, '2024-10-17 06:16:05', '2024-10-17 06:16:05'),
(6, 'Event2', '2024-10-11', '11:47:00', '11:48:00', 'chennai', 'this is need', 'yes', '1729145765_943f87e890e16ef58165.png', '1729145765_f8af963e70ee68fc511e.png', 1, '2024-10-17 06:16:05', '2024-10-17 06:16:05'),
(7, 'Event3', '2024-10-11', '11:47:00', '11:48:00', 'chennai', 'this is need', 'yes', '1729145765_943f87e890e16ef58165.png', '1729145765_f8af963e70ee68fc511e.png', 1, '2024-10-17 06:16:05', '2024-10-17 06:16:05'),
(9, 'Event1', '2024-10-11', '11:47:00', '11:48:00', 'chennai', 'this is need', 'yes', '1729145765_943f87e890e16ef58165.png', '1729145765_f8af963e70ee68fc511e.png', 1, '2024-10-17 06:16:05', '2024-10-17 06:16:05'),
(10, 'Event2', '2024-10-11', '11:47:00', '11:48:00', 'chennai', 'this is need', 'yes', '1729145765_943f87e890e16ef58165.png', '1729145765_f8af963e70ee68fc511e.png', 1, '2024-10-17 06:16:05', '2024-10-17 06:16:05'),
(11, 'Event3', '2024-10-11', '11:47:00', '11:48:00', 'chennai', 'this is need', 'yes', '1729145765_943f87e890e16ef58165.png', '1729145765_f8af963e70ee68fc511e.png', 1, '2024-10-17 06:16:05', '2024-10-17 06:16:05'),
(12, 'Event4', '2024-10-11', '11:47:00', '11:48:00', 'chennai', 'this is need', 'yes', '1729145765_943f87e890e16ef58165.png', '1729145765_f8af963e70ee68fc511e.png', 1, '2024-10-17 06:16:05', '2024-10-17 06:16:05'),
(13, 'Event5', '2024-10-11', '10:47:00', '11:48:00', 'chennai', 'this is need', 'yes', '1729145765_943f87e890e16ef58165.png', '1729145765_f8af963e70ee68fc511e.png', 1, '2024-10-17 06:16:05', '2024-10-17 06:16:05'),
(14, 'Event2', '2024-10-11', '11:47:00', '11:48:00', 'chennai', 'this is need', 'yes', '1729145765_943f87e890e16ef58165.png', '1729145765_f8af963e70ee68fc511e.png', 1, '2024-10-17 06:16:05', '2024-10-17 06:16:05'),
(15, 'Event3', '2024-10-11', '11:47:00', '11:48:00', 'chennai', 'this is need', 'yes', '1729145765_943f87e890e16ef58165.png', '1729145765_f8af963e70ee68fc511e.png', 1, '2024-10-17 06:16:05', '2024-10-17 06:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `event_users`
--

CREATE TABLE `event_users` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` varchar(15) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `page` varchar(255) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `is_published` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `page`, `question`, `answer`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'About', 'what is ur name', 'Testing for ladyandal', 0, '2024-10-21 07:00:31', '2024-10-21 07:05:12'),
(2, 'About', 'what is ur name', 'Testing for ladyandal', 1, '2024-10-21 07:00:31', '2024-10-21 07:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `job_id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`job_id`, `job_title`, `job_type`, `first_name`, `last_name`, `email`, `mobile`, `cv`, `created_at`) VALUES
(1, 'Software Developer', 'Full-Time', 'Testing', 'T', 'testing@gmail.com', '1234567890', 'Testing_cv.pdf', '2024-10-19 09:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `kindergarten_students`
--

CREATE TABLE `kindergarten_students` (
  `student_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` enum('Male','Female','Other') DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `caste` varchar(50) DEFAULT NULL,
  `community` varchar(50) DEFAULT NULL,
  `mother_tongue` varchar(50) DEFAULT NULL,
  `class_last_studied` varchar(50) DEFAULT NULL,
  `school_last_attended` varchar(100) DEFAULT NULL,
  `curriculum` enum('CBSE','ICSE','State Board','Others') DEFAULT NULL,
  `grade_applying_for` varchar(50) DEFAULT NULL,
  `residential_address` text DEFAULT NULL,
  `telephone_number` varchar(20) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `father_religion` varchar(50) DEFAULT NULL,
  `father_language` varchar(50) DEFAULT NULL,
  `father_qualification` varchar(100) DEFAULT NULL,
  `father_occupation` varchar(100) DEFAULT NULL,
  `father_office_address` text DEFAULT NULL,
  `father_mobile_number` varchar(20) DEFAULT NULL,
  `father_email_id` varchar(100) DEFAULT NULL,
  `mother_name` varchar(100) DEFAULT NULL,
  `mother_religion` varchar(50) DEFAULT NULL,
  `mother_language` varchar(50) DEFAULT NULL,
  `mother_qualification` varchar(100) DEFAULT NULL,
  `mother_occupation` varchar(100) DEFAULT NULL,
  `mother_office_address` text DEFAULT NULL,
  `mother_mobile_number` varchar(20) DEFAULT NULL,
  `mother_email_id` varchar(100) DEFAULT NULL,
  `guardian_name` varchar(100) DEFAULT NULL,
  `guardian_relationship` varchar(50) DEFAULT NULL,
  `guardian_occupation` varchar(100) DEFAULT NULL,
  `guardian_address` text DEFAULT NULL,
  `guardian_mobile_number` varchar(20) DEFAULT NULL,
  `guardian_email_id` varchar(100) DEFAULT NULL,
  `sibling_name` varchar(100) DEFAULT NULL,
  `sibling_class` varchar(50) DEFAULT NULL,
  `additional_info` text DEFAULT NULL,
  `family_photo` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kindergarten_students`
--

INSERT INTO `kindergarten_students` (`student_id`, `name`, `date_of_birth`, `gender`, `nationality`, `caste`, `community`, `mother_tongue`, `class_last_studied`, `school_last_attended`, `curriculum`, `grade_applying_for`, `residential_address`, `telephone_number`, `father_name`, `father_religion`, `father_language`, `father_qualification`, `father_occupation`, `father_office_address`, `father_mobile_number`, `father_email_id`, `mother_name`, `mother_religion`, `mother_language`, `mother_qualification`, `mother_occupation`, `mother_office_address`, `mother_mobile_number`, `mother_email_id`, `guardian_name`, `guardian_relationship`, `guardian_occupation`, `guardian_address`, `guardian_mobile_number`, `guardian_email_id`, `sibling_name`, `sibling_class`, `additional_info`, `family_photo`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', '2018-05-15', 'Male', 'Indian', 'General', 'Hindu', 'Hindi', 'Nursery', 'Little Stars School', 'CBSE', 'Kindergarten', '123 Elm Street, Springfield', '1234567890', 'Richard Doe', 'Christian', 'English', 'MBA', 'Engineer', '456 Oak Avenue, Springfield', '0987654321', 'richard.doe@example.com', 'Jane Doe', 'Christian', 'English', 'MSc', 'Teacher', '789 Pine Lane, Springfield', '1231231234', 'jane.doe@example.com', 'Emily Doe', 'Sister', 'Student', '101 Maple Road, Springfield', '4564564567', 'emily.doe@example.com', 'Sarah Doe', 'Grade 1', 'No additional information', 'family_photo.jpg', '2024-10-19 21:34:39', '2024-10-19 21:34:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2024-06-13-123522', 'App\\Database\\Migrations\\CreateUsersTable', 'default', 'App', 1728278292, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` enum('Male','Female','Other') DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `caste` varchar(50) DEFAULT NULL,
  `community` varchar(50) DEFAULT NULL,
  `residential_address` text DEFAULT NULL,
  `telephone_number` varchar(20) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `father_religion` varchar(50) DEFAULT NULL,
  `father_language` varchar(50) DEFAULT NULL,
  `father_qualification` varchar(100) DEFAULT NULL,
  `father_occupation` varchar(100) DEFAULT NULL,
  `father_office_address` text DEFAULT NULL,
  `father_mobile_number` varchar(20) DEFAULT NULL,
  `father_email_id` varchar(100) DEFAULT NULL,
  `mother_name` varchar(100) DEFAULT NULL,
  `mother_religion` varchar(50) DEFAULT NULL,
  `mother_language` varchar(50) DEFAULT NULL,
  `mother_qualification` varchar(100) DEFAULT NULL,
  `mother_occupation` varchar(100) DEFAULT NULL,
  `mother_office_address` text DEFAULT NULL,
  `mother_mobile_number` varchar(20) DEFAULT NULL,
  `mother_email_id` varchar(100) DEFAULT NULL,
  `guardian_name` varchar(100) DEFAULT NULL,
  `guardian_relationship` varchar(50) DEFAULT NULL,
  `guardian_occupation` varchar(100) DEFAULT NULL,
  `guardian_address` text DEFAULT NULL,
  `guardian_mobile_number` varchar(20) DEFAULT NULL,
  `guardian_email_id` varchar(100) DEFAULT NULL,
  `sibling_name` varchar(100) DEFAULT NULL,
  `sibling_class` varchar(50) DEFAULT NULL,
  `additional_info` text DEFAULT NULL,
  `family_photo` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `name`, `date_of_birth`, `gender`, `nationality`, `state`, `religion`, `caste`, `community`, `residential_address`, `telephone_number`, `father_name`, `father_religion`, `father_language`, `father_qualification`, `father_occupation`, `father_office_address`, `father_mobile_number`, `father_email_id`, `mother_name`, `mother_religion`, `mother_language`, `mother_qualification`, `mother_occupation`, `mother_office_address`, `mother_mobile_number`, `mother_email_id`, `guardian_name`, `guardian_relationship`, `guardian_occupation`, `guardian_address`, `guardian_mobile_number`, `guardian_email_id`, `sibling_name`, `sibling_class`, `additional_info`, `family_photo`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', '2010-05-15', 'Male', 'American', 'California', 'Christian', 'General', 'Asian', '123 Elm Street, City, ST', '123-456-7890', 'Michael Doe', 'Christian', 'English', 'Bachelor\'s Degree', 'Engineer', '456 Office St, City, ST', '987-654-3210', 'michael.doe@example.com', 'Jane Doe', 'Christian', 'English', 'Master\'s Degree', 'Teacher', '789 School Rd, City, ST', '321-654-9870', 'jane.doe@example.com', 'Anna Doe', 'Aunt', 'Retired', '321 Maple Ave, City, ST', '654-321-0987', 'anna.doe@example.com', 'Jack Doe', '10th Grade', 'None', 'family_photo.jpg', '2024-10-19 20:50:50', '2024-10-19 20:50:50');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `name`, `designation`, `content`, `photo`, `created_at`, `updated_at`) VALUES
(2, 'Testings', 'Physics', 'Testing', '1729260266_8b25409513aa0653fd05.jpg', '2024-10-18 14:04:26', '2024-10-18 14:04:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'Test', 'user@demo.com', '$2y$10$2/C2v1OnTd0rGZ4s9GdCyOs19a2swZo0LXs091ronQP5e9YmRNJZi', '2024-10-07 10:48:41');

-- --------------------------------------------------------

--
-- Table structure for table `video_banners`
--

CREATE TABLE `video_banners` (
  `id` int(11) NOT NULL,
  `video_title` varchar(255) NOT NULL,
  `video_link` varchar(255) NOT NULL,
  `page` varchar(255) NOT NULL,
  `video_thumbnail` varchar(255) DEFAULT NULL,
  `video_poster` varchar(255) DEFAULT NULL,
  `video_file` varchar(255) DEFAULT NULL,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `video_banners`
--

INSERT INTO `video_banners` (`id`, `video_title`, `video_link`, `page`, `video_thumbnail`, `video_poster`, `video_file`, `sort_order`, `is_published`, `created_at`, `updated_at`) VALUES
(7, 'Lady andal school', 'https://youtu.be/CpUU_6J1cHg?si=eDgWGbp8GhqQVBik', 'home', '', 'posters/1731315885_52f74293e254b4e51757.jpg', 'videos/1731319783_f0ef5332633f3d8d3a4d.mp4', 1, 1, '2024-11-11 03:34:45', '2024-11-11 04:39:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`career_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_users`
--
ALTER TABLE `event_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `kindergarten_students`
--
ALTER TABLE `kindergarten_students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_banners`
--
ALTER TABLE `video_banners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `career_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `event_users`
--
ALTER TABLE `event_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kindergarten_students`
--
ALTER TABLE `kindergarten_students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video_banners`
--
ALTER TABLE `video_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
