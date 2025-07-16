-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2025 at 09:25 AM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bant_bantubersama`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads_campaign`
--

CREATE TABLE `ads_campaign` (
  `id` bigint(11) NOT NULL,
  `program_id` bigint(20) NOT NULL,
  `adaccount_id` varchar(100) NOT NULL,
  `ref_code` varchar(15) DEFAULT NULL,
  `name` varchar(250) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `budget` int(11) DEFAULT 0,
  `spend` int(11) DEFAULT 0,
  `cpr` int(11) DEFAULT 0,
  `result` int(11) DEFAULT 0,
  `start_time` datetime NOT NULL,
  `updated_time` datetime NOT NULL,
  `budget_remaining` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ads_campaign_history`
--

CREATE TABLE `ads_campaign_history` (
  `id` bigint(20) NOT NULL,
  `ads_campaign_id` bigint(11) NOT NULL,
  `result` int(11) DEFAULT 0,
  `cpr` int(11) DEFAULT 0,
  `spend` int(11) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT NULL,
  `budget` int(11) DEFAULT NULL,
  `budget_remaining` int(11) DEFAULT NULL,
  `frequency` int(11) DEFAULT 0,
  `impressions` int(11) DEFAULT 0,
  `clicks` int(11) DEFAULT 0,
  `cpc` int(11) DEFAULT 0,
  `cpm` int(11) DEFAULT 0,
  `ctr` int(11) DEFAULT 0,
  `reach` int(11) DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `a_log`
--

CREATE TABLE `a_log` (
  `id` bigint(20) NOT NULL,
  `type` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` bigint(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `text` longtext NOT NULL,
  `image` longtext DEFAULT NULL,
  `token` longtext NOT NULL,
  `vendor` varchar(25) NOT NULL,
  `url` longtext NOT NULL,
  `type` enum('fu_trans','thanks_trans','repeat_donate','info') NOT NULL,
  `status` enum('pending','sent','read','fail','inbox') DEFAULT 'pending',
  `transaction_id` bigint(20) DEFAULT NULL,
  `donatur_id` bigint(20) DEFAULT NULL,
  `program_id` bigint(20) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `check_mutation`
--

CREATE TABLE `check_mutation` (
  `id` bigint(20) NOT NULL,
  `bank_type` enum('bni','bsi','bri','qris','mandiri','bca','others') NOT NULL,
  `apps_from` varchar(150) NOT NULL,
  `mutation_date` datetime NOT NULL,
  `mutation_type` enum('cr','db') NOT NULL,
  `amount` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `transaction_id` bigint(20) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donatur`
--

CREATE TABLE `donatur` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `want_to_contact` tinyint(1) NOT NULL COMMENT '1=yes, 0=no',
  `wa_inactive_since` datetime DEFAULT NULL COMMENT 'null=active',
  `email` varchar(255) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `password_reset` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `wa_check` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `last_donate_paid` datetime DEFAULT NULL,
  `count_donate_paid` smallint(6) DEFAULT NULL,
  `sum_donate_paid` bigint(20) DEFAULT NULL,
  `wa_campaign` varchar(100) DEFAULT '-',
  `ref_code` varchar(15) DEFAULT NULL,
  `is_muslim` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donatur_monthly_report`
--

CREATE TABLE `donatur_monthly_report` (
  `id` bigint(20) NOT NULL,
  `donatur_id` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `donate_count_all` mediumint(9) DEFAULT NULL,
  `donate_sum_all` int(11) DEFAULT NULL,
  `donate_count_paid` mediumint(9) DEFAULT NULL,
  `donate_sum_paid` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fundraiser`
--

CREATE TABLE `fundraiser` (
  `id` bigint(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `name` varchar(250) NOT NULL,
  `type` enum('person','ads','influencer','others') NOT NULL,
  `desc` text DEFAULT NULL,
  `donatur_id` bigint(20) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grab_organization`
--

CREATE TABLE `grab_organization` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `avatar` text DEFAULT NULL,
  `domicile` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `fb_pixel` text DEFAULT NULL,
  `gtm` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `youtube` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `is_partner` enum('nothing','opening','fu','contacting','partner','reject') DEFAULT 'nothing',
  `platform` varchar(50) DEFAULT 'amalsholeh',
  `is_interest` tinyint(1) DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grab_program`
--

CREATE TABLE `grab_program` (
  `id` bigint(20) NOT NULL,
  `id_grab` bigint(100) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `category_slug` varchar(200) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `permalink` text DEFAULT NULL,
  `headline` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `target_status` varchar(100) DEFAULT NULL,
  `target_type` varchar(100) DEFAULT NULL,
  `target_at` varchar(150) DEFAULT NULL,
  `target_amount` bigint(20) DEFAULT NULL,
  `collect_amount` bigint(20) DEFAULT NULL,
  `remaining_amount` bigint(20) DEFAULT NULL,
  `over_at` datetime DEFAULT NULL,
  `is_featured` tinyint(4) DEFAULT NULL,
  `is_populer_search` tinyint(4) DEFAULT NULL,
  `status_percent` int(11) DEFAULT NULL,
  `status_date` varchar(200) DEFAULT NULL,
  `image_url` text DEFAULT NULL,
  `image_url_thumb` text DEFAULT NULL,
  `total_donatur` int(11) DEFAULT NULL,
  `fb_pixel` text DEFAULT NULL,
  `gtm` text DEFAULT NULL,
  `toggle_dana` varchar(100) DEFAULT NULL,
  `program_created_at` date DEFAULT NULL,
  `tags_name` varchar(150) DEFAULT NULL,
  `is_favorite` tinyint(4) DEFAULT NULL,
  `fund_display` varchar(100) DEFAULT NULL,
  `is_interest` tinyint(4) DEFAULT 0,
  `is_taken` tinyint(4) DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `id` bigint(20) NOT NULL,
  `uuid` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL,
  `status` enum('regular','verified','verif_org','banned') NOT NULL DEFAULT 'regular',
  `about` text NOT NULL,
  `logo` text NOT NULL,
  `pic_fullname` varchar(255) DEFAULT NULL,
  `pic_nik` text DEFAULT NULL,
  `pic_image` text DEFAULT NULL,
  `approved_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_type`
--

CREATE TABLE `payment_type` (
  `id` int(11) NOT NULL,
  `key` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `img` text NOT NULL,
  `target_number` varchar(50) DEFAULT NULL,
  `target_desc` varchar(255) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT 1,
  `sort_number` tinyint(2) NOT NULL,
  `type` enum('transfer','virtual_account','instant','others') NOT NULL,
  `payment_code` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payout`
--

CREATE TABLE `payout` (
  `id` bigint(20) NOT NULL,
  `program_id` bigint(20) NOT NULL,
  `status` enum('request','process','paid','cancel','reject') DEFAULT 'request',
  `nominal_request` int(11) NOT NULL,
  `nominal_approved` int(11) DEFAULT NULL,
  `desc_request` text NOT NULL,
  `paid_at` datetime DEFAULT NULL,
  `file_submit` text DEFAULT NULL,
  `file_paid` text DEFAULT NULL,
  `file_accepted` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` bigint(20) NOT NULL,
  `organization_id` bigint(20) NOT NULL,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `thumbnail` text NOT NULL,
  `image` text NOT NULL,
  `short_desc` text NOT NULL,
  `about` longtext NOT NULL,
  `nominal_request` bigint(11) NOT NULL,
  `nominal_approved` bigint(11) DEFAULT 0,
  `approved_at` timestamp NULL DEFAULT NULL,
  `approved_by` bigint(20) DEFAULT NULL COMMENT 'user_id / admin_id',
  `end_date` datetime NOT NULL COMMENT 'if null = forever',
  `is_publish` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=show, 0=not show',
  `is_recommended` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=yes, 0=no',
  `is_show_home` tinyint(1) DEFAULT 0 COMMENT '1=yes, 0=no',
  `is_urgent` tinyint(1) DEFAULT 0,
  `count_amount_page` int(11) DEFAULT 0,
  `count_view` int(11) DEFAULT NULL COMMENT 'count view detail',
  `count_pra_checkout` int(11) DEFAULT NULL COMMENT 'count view input nominal & select payment method',
  `count_read_more` int(11) DEFAULT 0,
  `optimation_fee` tinyint(3) DEFAULT 0 COMMENT 'Kalau ada biaya optimasi dalam persen',
  `show_minus` tinyint(3) DEFAULT 0 COMMENT 'Menampilkan penghimpunan setelah dipotong berapa persen ini',
  `donate_sum` int(11) DEFAULT 0,
  `donate_sum_last_updated` datetime DEFAULT current_timestamp(),
  `is_islami` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) NOT NULL COMMENT 'json : admin_id / member_id, type : admin / member',
  `updated_by` bigint(20) DEFAULT NULL COMMENT 'json : admin_id / member_id, type : admin / member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `program_categories`
--

CREATE TABLE `program_categories` (
  `id` bigint(20) NOT NULL,
  `program_id` bigint(20) NOT NULL,
  `program_category_id` bigint(20) NOT NULL,
  `is_active` tinyint(1) DEFAULT 1 COMMENT '1=yes, 0=no',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `program_category`
--

CREATE TABLE `program_category` (
  `id` bigint(20) NOT NULL,
  `name` varchar(75) NOT NULL,
  `slug` text NOT NULL,
  `sort_number` tinyint(2) NOT NULL COMMENT 'sort show',
  `icon` text NOT NULL,
  `is_show` tinyint(1) DEFAULT 1 COMMENT '1=show, 0=hide',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `created_by` bigint(20) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `program_info`
--

CREATE TABLE `program_info` (
  `id` bigint(20) NOT NULL,
  `program_id` bigint(20) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `is_publish` tinyint(1) NOT NULL COMMENT '0=show, 1=not show',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `program_spend`
--

CREATE TABLE `program_spend` (
  `id` bigint(20) NOT NULL,
  `program_id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc_publish` text DEFAULT NULL,
  `nominal_request` bigint(20) NOT NULL,
  `nominal_approved` bigint(20) NOT NULL,
  `date_request` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `type` enum('ads','payment_fee','operational','others') DEFAULT NULL,
  `is_operational` tinyint(1) DEFAULT 1,
  `status` enum('draft','process','done','cancel','reject') DEFAULT 'draft',
  `date_approved` timestamp NULL DEFAULT NULL,
  `approved_by` bigint(20) NOT NULL,
  `transfer_proof` text DEFAULT NULL,
  `desc_request` text NOT NULL,
  `ads_campaign_id` bigint(20) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `sort_number` tinyint(4) NOT NULL,
  `is_show` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `craeted_by` bigint(20) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tracking_visitor`
--

CREATE TABLE `tracking_visitor` (
  `id` int(11) NOT NULL,
  `program_id` bigint(20) NOT NULL,
  `visitor_code` varchar(250) NOT NULL COMMENT 'yg membedakan antar visitor',
  `page_view` enum('landing_page','amount','payment_type','form','invoice') NOT NULL,
  `ref_code` text DEFAULT NULL,
  `utm_source` varchar(100) DEFAULT NULL COMMENT 'fb/ig/ads_fb/ads_tiktok',
  `utm_medium` varchar(100) DEFAULT NULL COMMENT 'bisa nama akun ads/channel',
  `utm_campaign` varchar(200) DEFAULT NULL COMMENT 'bisa judul ads campaign',
  `utm_content` varchar(200) DEFAULT NULL COMMENT 'nama konten',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `nominal` int(11) DEFAULT NULL,
  `payment_type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` bigint(20) NOT NULL,
  `program_id` bigint(20) NOT NULL,
  `donatur_id` bigint(20) NOT NULL,
  `payment_type_id` int(11) NOT NULL,
  `invoice_number` text NOT NULL,
  `status` enum('draft','success','cancel') DEFAULT 'draft',
  `nominal` int(11) NOT NULL,
  `nominal_code` int(11) DEFAULT 0,
  `nominal_final` int(11) NOT NULL,
  `message` text DEFAULT NULL COMMENT 'pray / message',
  `midtrans_token` text DEFAULT NULL,
  `midtrans_url` text DEFAULT NULL,
  `link` text DEFAULT NULL,
  `paid_at` timestamp NULL DEFAULT NULL,
  `is_show_name` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `ref_code` varchar(15) DEFAULT NULL COMMENT 'donatur_ref_code as referral'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_real`
--

CREATE TABLE `transaction_real` (
  `id` bigint(20) NOT NULL,
  `bank` enum('bca','bsi','bni','bri','mandiri','gopay','cash') NOT NULL,
  `nominal` bigint(20) NOT NULL,
  `date_paid` datetime DEFAULT NULL,
  `invoice_number` varchar(150) DEFAULT NULL,
  `status` enum('draft','matched','notfound','duplicate','hold') DEFAULT 'draft',
  `transaction_id` bigint(20) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `position` varchar(150) DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads_campaign`
--
ALTER TABLE `ads_campaign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads_campaign_history`
--
ALTER TABLE `ads_campaign_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_log`
--
ALTER TABLE `a_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `check_mutation`
--
ALTER TABLE `check_mutation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donatur_monthly_report`
--
ALTER TABLE `donatur_monthly_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fundraiser`
--
ALTER TABLE `fundraiser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grab_organization`
--
ALTER TABLE `grab_organization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grab_program`
--
ALTER TABLE `grab_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uuid` (`uuid`) USING HASH;

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payment_type`
--
ALTER TABLE `payment_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `key` (`key`);

--
-- Indexes for table `payout`
--
ALTER TABLE `payout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`) USING HASH;

--
-- Indexes for table `program_categories`
--
ALTER TABLE `program_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_category`
--
ALTER TABLE `program_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_info`
--
ALTER TABLE `program_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_spend`
--
ALTER TABLE `program_spend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracking_visitor`
--
ALTER TABLE `tracking_visitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_real`
--
ALTER TABLE `transaction_real`
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
-- AUTO_INCREMENT for table `ads_campaign`
--
ALTER TABLE `ads_campaign`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ads_campaign_history`
--
ALTER TABLE `ads_campaign_history`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `a_log`
--
ALTER TABLE `a_log`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `check_mutation`
--
ALTER TABLE `check_mutation`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donatur`
--
ALTER TABLE `donatur`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donatur_monthly_report`
--
ALTER TABLE `donatur_monthly_report`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fundraiser`
--
ALTER TABLE `fundraiser`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grab_organization`
--
ALTER TABLE `grab_organization`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grab_program`
--
ALTER TABLE `grab_program`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_type`
--
ALTER TABLE `payment_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payout`
--
ALTER TABLE `payout`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program_categories`
--
ALTER TABLE `program_categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program_category`
--
ALTER TABLE `program_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program_info`
--
ALTER TABLE `program_info`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program_spend`
--
ALTER TABLE `program_spend`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tracking_visitor`
--
ALTER TABLE `tracking_visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction_real`
--
ALTER TABLE `transaction_real`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
