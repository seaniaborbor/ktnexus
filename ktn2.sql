-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2025 at 07:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ktn2`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Tarnue Pythagoras Borbor', 'mathematics104@gmail.com', 'Contact from Portfolio3', 'Hello world', '2025-07-31 00:16:11', '2025-07-31 00:16:11'),
(2, 'Tarnue Pythagoras Borbor', 'mathematics104@gmail.com', 'Contact from Portfolio3', 'Hello world', '2025-07-31 00:33:52', '2025-07-31 00:33:52');

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
(1, '2023_00_00_000000', 'App\\Database\\Migrations\\CreateTeamTable', 'default', 'App', 1753726788, 1),
(2, '2023_00_00_000001', 'App\\Database\\Migrations\\CreateProjectsTable', 'default', 'App', 1753726907, 2),
(3, '2025-07-30-235414', 'App\\Database\\Migrations\\CreateMessagesTable', 'default', 'App', 1753919823, 3);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `projectId` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL COMMENT 'web, software, database, mobile',
  `client_name` varchar(100) DEFAULT NULL,
  `client_url` varchar(255) DEFAULT NULL,
  `project_date` date DEFAULT NULL,
  `description` text NOT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `status` enum('draft','published','archived') NOT NULL DEFAULT 'draft',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projectId`, `title`, `slug`, `category`, `client_name`, `client_url`, `project_date`, `description`, `featured_image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Call Agent Management 7', 'call-agent-management-7', 'web', 'Gender Ministry', 'https://testsite.com//', '2025-07-04', '&lt;p&gt;Describe the project and your role in itDescribe the project and your role in itDescribe the project and your role in itDescribe the project and your role in itDescribe the project and your role in itDescribe the project and your role in itDescribe the project and your role in itDescribe the project and your role in itDescribe the project and your role in itDescribe the project and your role in it&lt;/p&gt;', '1753739483_2de3d84c37382b5c16d6.jpg', 'published', '2025-07-28 21:51:23', '2025-07-29 03:09:24', '2025-07-29 03:09:24'),
(2, 'Call Agent Management 2', 'call-agent-management-2', 'web', 'Gender Ministry', 'https://testsite.com//', '2025-07-04', 'Describe the project and your role in itDescribe the project and your role in itDescribe the project and your role in itDescribe the project and your role in itDescribe the project and your role in itDescribe the project and your role in itDescribe the project and your role in itDescribe the project and your role in itDescribe the project and your role in itDescribe the project and your role in it', '1753739708_aafc601b3c962874b643.jpg', 'draft', '2025-07-28 21:55:08', '2025-07-29 01:09:13', '2025-07-29 01:09:13'),
(3, 'ECommerce & Content Management System', 'ecommerce-content-management-system', 'web', 'Barcus Group of Agencies', 'https://barcusgroup1.com/', '2025-07-30', '<p>&nbsp;</p>\r\n<p>KT-NEXUS Technologies proudly partnered with Barcus Group of Agencies to design and develop a fully functional&nbsp;<strong>e-commerce and content management platform</strong> tailored to meet the company&rsquo;s growing online needs.</p>\r\n<p>The solution includes over <strong>20 dynamic and responsive pages</strong>, offering a smooth shopping experience for users and an easy-to-manage backend for administrators. Built on the <strong>CodeIgniter framework</strong>, the platform leverages modern web technologies and best practices in user interface and user experience design.</p>\r\n<p>Key features of the project include:</p>\r\n<ul>\r\n<li>\r\n<p><strong>Custom product catalog and cart system</strong></p>\r\n</li>\r\n<li>\r\n<p><strong>Secure checkout with payment gateway integration</strong></p>\r\n</li>\r\n<li>\r\n<p><strong>Admin dashboard for inventory and order management</strong></p>\r\n</li>\r\n<li>\r\n<p><strong>SEO-friendly content management tools</strong></p>\r\n</li>\r\n<li>\r\n<p><strong>Responsive design for desktop and mobile</strong></p>\r\n</li>\r\n<li>\r\n<p><strong>API integrations for real-time data updates</strong></p>\r\n</li>\r\n</ul>\r\n<p>This project demonstrates our ability to deliver scalable, high-performance web applications that balance design, functionality, and business goals. Barcus Group of Agencies now has a digital platform that supports their brand vision and enables them to manage and grow their online presence with confidence.</p>', '1757045111_ce6e7971f5aa7b515b04.png', 'published', '2025-07-30 21:04:17', '2025-09-05 11:06:01', NULL),
(4, 'E-commerce &amp; CMS Website for Barcus Group of Agencies', 'e-commerce-cms-website-for-barcus-group-of-agencies', 'web', 'Barcus Group of Agencies', 'https://barcusgroup1.com/', '2025-07-30', '&lt;p&gt;KT-NEXUS Technologies proudly partnered with Barcus Group of Agencies to design and develop a fully functional&amp;nbsp;&lt;strong&gt;e-commerce and content management platform&lt;/strong&gt; tailored to meet the company&amp;rsquo;s growing online needs.&lt;/p&gt;\r\n&lt;p&gt;The solution includes over &lt;strong&gt;20 dynamic and responsive pages&lt;/strong&gt;, offering a smooth shopping experience for users and an easy-to-manage backend for administrators. Built on the &lt;strong&gt;CodeIgniter framework&lt;/strong&gt;, the platform leverages modern web technologies and best practices in user interface and user experience design.&lt;/p&gt;\r\n&lt;p&gt;Key features of the project include:&lt;/p&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;&lt;strong&gt;Custom product catalog and cart system&lt;/strong&gt;&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;&lt;strong&gt;Secure checkout with payment gateway integration&lt;/strong&gt;&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;&lt;strong&gt;Admin dashboard for inventory and order management&lt;/strong&gt;&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;&lt;strong&gt;SEO-friendly content management tools&lt;/strong&gt;&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;&lt;strong&gt;Responsive design for desktop and mobile&lt;/strong&gt;&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;&lt;strong&gt;API integrations for real-time data updates&lt;/strong&gt;&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;This project demonstrates our ability to deliver scalable, high-performance web applications that balance design, functionality, and business goals. Barcus Group of Agencies now has a digital platform that supports their brand vision and enables them to manage and grow their online presence with confidence.&lt;/p&gt;\r\n&lt;hr&gt;\r\n&lt;p&gt;Let me know if you&amp;rsquo;d like to include screenshots, a project URL, or a testimonial from the client.&lt;/p&gt;', '1753909540_51456b74049aa103d1a0.png', 'published', '2025-07-30 21:05:40', '2025-07-30 21:05:54', '2025-07-30 21:05:54'),
(5, 'ECommerce &amp; Content Management System For US Base Company', 'ecommerce-content-management-system-for-us-base-company', 'web', 'Vina Store', 'https://www.vinaonlinestore.com/', '0000-00-00', '&lt;p&gt;KT-NEXUS Technologies had the privilege of developing a robust&amp;nbsp;&lt;strong&gt;e-commerce platform&lt;/strong&gt; for VinaOnlineStore, a U.S.-based retail business aiming to expand its operations online. Despite being based in &lt;strong&gt;Liberia&lt;/strong&gt;, we seamlessly collaborated with the client across borders, delivering a high-quality, scalable solution that met both their business and technical needs.&lt;/p&gt;\r\n&lt;p&gt;The platform was built using the &lt;strong&gt;CodeIgniter framework&lt;/strong&gt;, ensuring a secure, fast, and maintainable codebase. With a mobile-first, responsive design, the website offers a smooth and engaging user experience across all devices.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Key features of the project include:&lt;/strong&gt;&lt;/p&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;A custom-built &lt;strong&gt;online store with product filtering and search&lt;/strong&gt;&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;&lt;strong&gt;Customer account creation and management&lt;/strong&gt;&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;&lt;strong&gt;Shopping cart and secure checkout system&lt;/strong&gt;&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;&lt;strong&gt;Order tracking and inventory control via admin panel&lt;/strong&gt;&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;&lt;strong&gt;Mobile responsiveness and user-friendly navigation&lt;/strong&gt;&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;&lt;strong&gt;Admin content management for product updates and pages&lt;/strong&gt;&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;This project demonstrates our ability to collaborate globally and deliver modern digital solutions that align with our clients&#039; vision. VinaOnlineStore now has a professional online presence that empowers them to connect with customers, manage operations, and grow their brand.&lt;/p&gt;', '1753909850_30384271937df740329f.png', 'published', '2025-07-30 21:10:50', '2025-07-30 21:10:50', NULL),
(6, 'School Website, Student and Financial Management System', 'school-website-student-and-financial-management-system', 'web', 'Christiana Bedell Preparatory School', 'https://christianabedellschool.com/', '0000-00-00', '&lt;p&gt;KT-NEXUS Technologies developed a&amp;nbsp;&lt;strong&gt;comprehensive school management system&lt;/strong&gt; for Christiania Bedell Preparatory School, designed to streamline academic and financial operations while enhancing communication with parents.&lt;/p&gt;\r\n&lt;p&gt;This modern, user-friendly website goes beyond just information display &amp;mdash; it functions as a powerful administrative tool. Built with &lt;strong&gt;CodeIgniter and a custom backend&lt;/strong&gt;, the system allows for real-time student data tracking, financial reporting, and secure parent interactions.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Key features include:&lt;/strong&gt;&lt;/p&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;&lt;strong&gt;Student Information Management&lt;/strong&gt; (enrollment, attendance, grades)&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;&lt;strong&gt;Financial Management System&lt;/strong&gt; (fee tracking, payments, reporting)&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;&lt;strong&gt;Receipt Verification via QR Code:&lt;/strong&gt; Parents can &lt;strong&gt;scan the QR code on their receipts&lt;/strong&gt; to confirm authenticity, promoting transparency and trust.&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;&lt;strong&gt;Admin Dashboard&lt;/strong&gt; for managing users, reports, and updates&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;&lt;strong&gt;Mobile-responsive design&lt;/strong&gt; for access on any device&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;&lt;strong&gt;Secure login system&lt;/strong&gt; for different user roles (Admin, Staff, Parents)&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;This project reflects our commitment to building smart, secure, and efficient solutions for the education sector. With this platform, Christiania Bedell Preparatory School can now manage its academic and financial activities more effectively while offering modern tools to parents and staff.&lt;/p&gt;', '1757045418_5ee97aa46d066c62e0cd.png', 'published', '2025-07-30 21:15:14', '2025-09-05 04:10:18', NULL),
(7, 'Website and Database System for Bility United Muslim Disables Organization (BUMDO)', 'website-and-database-system-for-bility-united-muslim-disables-organization-bumdo', 'database', 'BUMDO', 'https://bumdo.lovestoblog.com/', '2025-07-10', '&lt;p&gt;Here is a polished portfolio entry for your project with &lt;strong&gt;BUMDO&lt;/strong&gt;:&lt;/p&gt;\r\n&lt;hr&gt;\r\n&lt;p&gt;KT-NEXUS Technologies proudly partnered with&amp;nbsp;&lt;strong&gt;BUMDO&lt;/strong&gt;, a Liberia-based not-for-profit organization, to build a modern &lt;strong&gt;website and database system&lt;/strong&gt; that aligns with their mission of empowerment, support, and spiritual guidance for disabled Muslims.&lt;/p&gt;\r\n&lt;p&gt;Our solution helps BUMDO strengthen their outreach, document their work, and manage resources more effectively. The system is designed to support the organization&amp;rsquo;s core activities, including the planning of their long-term vision: the construction and establishment of the &lt;strong&gt;BUMDO Islamic Peace City&lt;/strong&gt;.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Key features include:&lt;/strong&gt;&lt;/p&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;&lt;strong&gt;Responsive organizational website&lt;/strong&gt; with information on programs, news, and donation options&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;&lt;strong&gt;Dynamic database system&lt;/strong&gt; to manage members, beneficiaries, donors, and aid distribution&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;&lt;strong&gt;Secure admin panel&lt;/strong&gt; for data entry, user access control, and reporting&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;&lt;strong&gt;Content management capabilities&lt;/strong&gt; for updating events, resources, and announcements&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;li&gt;\r\n&lt;p&gt;&lt;strong&gt;User-friendly interface&lt;/strong&gt; for visitors, partners, and stakeholders&lt;/p&gt;\r\n&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;This project reflects our passion for using technology to support meaningful causes. With this platform, BUMDO now has the digital infrastructure to effectively share their mission, connect with supporters, and manage their growing humanitarian efforts.&lt;/p&gt;', '1757046351_4a017b1d544101fac4c2.png', 'published', '2025-07-30 23:31:07', '2025-09-05 11:04:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `teamId` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `bio` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `github_url` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `team_password` varchar(255) NOT NULL,
  `join_date` date DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`teamId`, `name`, `position`, `bio`, `image`, `linkedin_url`, `twitter_url`, `github_url`, `email`, `phone`, `team_password`, `join_date`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 'Tarnue P. Borbor', 'Senior Developer', 'Experienced software developer with 8+ years in web technologies.', '1753756040_f404c1ebb9f5704f15fc.jpg', 'https://linkedin.com/in/tarnue-borbor', 'https://twitter.com/tarnueborbor', 'https://github.com/tarnueborbor', 'tarnue.borbor@ktnexus.com', '+231770123456', '$2y$10$xhrKDnqjHUWgMiRCPstZlu14RgToe6CiNdm8qIZ0/AVRS0sope.Eq', '2020-05-15', 1, NULL, '2025-07-29 02:27:20', NULL),
(11, 'Kamah Duwana', 'CEO', 'Founder and CEO of KT-NEXUS TECHNOLOGIES with 12+ years in IT leadership.', 'kamah-duwana.jpg', 'https://linkedin.com/in/kamah-duwana', 'https://twitter.com/kamahduwana', 'https://github.com/kamahduwana', 'kamah.duwana@ktnexus.com', '+231770654321', '$2y$10$NZgv.EQoWO.PuOGF7GlwrO5QPqheKC9xKyi.kmrLzoNN.CGu8Zttm', '2018-01-10', 1, NULL, '2025-07-30 21:52:51', '2025-07-30 21:52:51'),
(12, 'Kama Duwana', 'CEO', 'An Entrepreneurs, technical advisor with over seven years of experience in tec start up ventures.', '1753913020_81dddf8442b81c7aee21.png', 'https://www.linkedin.com/in/taronue-p-borbor-912506147/', 'https://x.com/0Tarnpue', 'https://github.com/seanpiaborbor', 'duwanakama.ktnexus@nexus.com', '+231775577737', '$2y$10$rltErl0JJBZ0qj5ATcsNr.tzrihIyODQN.UeWgbiFd6fDMCZqt2tu', '2025-07-30', 1, '2025-07-30 22:03:40', '2025-07-30 22:03:40', NULL),
(13, 'Cllr David M. Kolleh JR ', 'Lawyer', 'Pratical lawyer at Liberty Law Firm for over 15 years', '1753915204_3cd9ac85f96cae1c0bc1.jpg', 'https://www.linkyedin.com/in/taronue-p-borbor-912506147/', 'https://x.comm/0Tarnpue', 'https://github.com/seanpiaborbor', 'clr.atnuxus@nuxus.com', '+231775577737', '$2y$10$8sf5.cZqeGLz2jX56coXx.urOhaiic7sKeLRiEKLJ5uaL9QihAKGG', '2025-07-30', 1, '2025-07-30 22:40:04', '2025-07-30 22:40:04', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`projectId`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `category` (`category`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`teamId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `projectId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `teamId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
