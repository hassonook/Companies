-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2024 at 09:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `companies_db`
--
CREATE DATABASE IF NOT EXISTS `companies_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `companies_db`;

-- --------------------------------------------------------

--
-- Table structure for table `approvals`
--

CREATE TABLE `approvals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vp_no` text NOT NULL,
  `req_no` text NOT NULL,
  `issue_date` date NOT NULL,
  `expire_date` date NOT NULL,
  `gender` text NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `nationality_id` bigint(20) UNSIGNED NOT NULL,
  `job_title_id` bigint(20) UNSIGNED NOT NULL,
  `total` int(10) UNSIGNED NOT NULL,
  `consumed` int(10) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `modified_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` text NOT NULL,
  `company_name_ar` text NOT NULL,
  `company_logo` text DEFAULT NULL,
  `owner_id` text NOT NULL,
  `owner_phone` text NOT NULL,
  `registration_id` text NOT NULL,
  `reg_issue_date` date NOT NULL,
  `reg_expire_date` date NOT NULL,
  `reg_photo` text NOT NULL,
  `commercial_id` text NOT NULL,
  `com_issue_date` date NOT NULL,
  `com_expire_date` date NOT NULL,
  `com_photo` text NOT NULL,
  `license_no` text NOT NULL,
  `lic_issue_date` date NOT NULL,
  `lic_expire_date` date NOT NULL,
  `lic_photo` text NOT NULL,
  `main_branch` text NOT NULL,
  `business` text NOT NULL,
  `company_address` text NOT NULL,
  `telephone` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `website` text DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `modified_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `company_name_ar`, `company_logo`, `owner_id`, `owner_phone`, `registration_id`, `reg_issue_date`, `reg_expire_date`, `reg_photo`, `commercial_id`, `com_issue_date`, `com_expire_date`, `com_photo`, `license_no`, `lic_issue_date`, `lic_expire_date`, `lic_photo`, `main_branch`, `business`, `company_address`, `telephone`, `email`, `website`, `created_by`, `modified_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Hllol', 'حلول', 'Hllol_logo.png', '345678765434567', '+97477687720', '1230945876', '2024-02-04', '2024-03-09', 'Hllol_reg.png', '09874597543578', '2024-01-28', '2024-02-23', 'Hllol_com.pdf', '9098762579531', '2024-02-25', '2024-03-09', 'Hllol_lic.pdf', 'Main', 'Information Technology & Services', 'Arayan Um eldom', '+97477687720', 'hassonook@gmail.com', 'https://www.hllol.co', 1, 1, NULL, '2024-02-14 12:54:21', '2024-02-14 13:11:30', NULL),
(19, 'Tal Elsamar', 'تل السمر', 'Tal Elsamar_logo.png', '345678765434567', '963574159', '7895532158753', '2024-01-30', '2024-03-06', 'Tal Elsamar_reg.png', '78872569000498562', '2024-01-31', '2024-03-07', 'Tal Elsamar_com.png', '909876257954', '2024-01-30', '2024-03-06', 'Tal Elsamar_lic.png', 'Branch', 'Information Technology & Services', '678', '+97477687720', 'hassonook@gmail.com', NULL, 1, 1, NULL, '2024-02-15 04:16:11', '2024-02-15 04:16:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`code`, `name`, `name_ar`, `created_at`, `updated_at`) VALUES
('AD', 'Andorra', 'أندورا', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('AE', 'United Arab Emirates', 'الإمارات العربية المتحدة', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('AF', 'Afghanistan', 'أفغانستان', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('AG', 'Antigua and Barbuda', 'أنتيغوا وبربودا', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('AI', 'Anguilla', 'أنغيلا', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('AL', 'Albania', 'ألبانيا', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('AM', 'Armenia', 'أرمينيا', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('AO', 'Angola', 'أنجولا', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('AQ', 'Antarctica', 'القارة القطبية الجنوبية', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('AR', 'Argentina', 'الأرجنتين', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('AS', 'American Samoa', 'ساموا الأمريكية', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('AT', 'Austria', 'النمسا', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('AU', 'Australia', 'أستراليا', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('AW', 'Aruba', 'أروبا', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('AX', 'Åland Islands', 'جزر آلاند', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('AZ', 'Azerbaijan', 'أذربيجان', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('BA', 'Bosnia and Herzegovina', 'البوسنة والهرسك', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('BB', 'Barbados', 'بربادوس', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('BD', 'Bangladesh', 'بنغلاديش', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('BE', 'Belgium', 'بلجيكا', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('BF', 'Burkina Faso', 'بوركينا فاسو', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('BG', 'Bulgaria', 'بلغاريا', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('BH', 'Bahrain', 'البحرين', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('BI', 'Burundi', 'بوروندي', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('BJ', 'Benin', 'بنين', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('BL', 'Saint Barthélemy', 'القديس بارثولوميو', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('BM', 'Bermuda', 'برمودا', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('BN', 'Brunei Darussalam', 'بروناي دار السلام', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('BO', 'Bolivia Plurinational State of', 'دولة بوليفيا المتعددة القوميات', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('BQ', 'Bonaire Sint Eustatius and Saba', 'بونير سينت أوستاتيوس وسابا', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('BR', 'Brazil', 'البرازيل', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('BS', 'Bahamas', 'جزر البهاما', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('BT', 'Bhutan', 'بوتان', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('BV', 'Bouvet Island', 'جزيرة بوفيه', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('BW', 'Botswana', 'بوتسوانا', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('BY', 'Belarus', 'بيلاروسيا', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('BZ', 'Belize', 'بليز', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('CA', 'Canada', 'كندا', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('CC', 'Cocos (Keeling) Islands', 'جزر كوكوس (كيلينغ)', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('CD', 'Congo the Democratic Republic of the', 'الكونغو جمهورية الكونغو الديمقراطية', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('CF', 'Central African Republic', 'جمهورية افريقيا الوسطى', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('CG', 'Congo', 'الكونغو', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('CH', 'Switzerland', 'سويسرا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('CI', 'Côte d\'Ivoire', 'ساحل العاج', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('CK', 'Cook Islands', 'جزر كوك', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('CL', 'Chile', 'تشيلي', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('CM', 'Cameroon', 'الكاميرون', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('CN', 'China', 'الصين', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('CO', 'Colombia', 'كولومبيا', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('CR', 'Costa Rica', 'كوستا ريكا', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('CU', 'Cuba', 'كوبا', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('CV', 'Cape Verde', 'الرأس الأخضر', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('CW', 'Curaçao', 'كوراساو', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('CX', 'Christmas Island', 'جزيرة عيد الميلاد', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('CY', 'Cyprus', 'قبرص', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('CZ', 'Czech Republic', 'الجمهورية التشيكية', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('DE', 'Germany', 'ألمانيا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('DJ', 'Djibouti', 'جيبوتي', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('DK', 'Denmark', 'الدنمارك', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('DM', 'Dominica', 'دومينيكا', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('DO', 'Dominican Republic', 'جمهورية الدومينيكان', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('DZ', 'Algeria', 'الجزائر', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('EC', 'Ecuador', 'الإكوادور', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('EE', 'Estonia', 'إستونيا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('EG', 'Egypt', 'مصر', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('EH', 'Western Sahara', 'الصحراء الغربية', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('ER', 'Eritrea', 'إريتريا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('ES', 'Spain', 'إسبانيا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('ET', 'Ethiopia', 'أثيوبيا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('FI', 'Finland', 'فنلندا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('FJ', 'Fiji', 'فيجي', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('FK', 'Falkland Islands (Malvinas)', 'جزر فوكلاند (فوكلاند)', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('FM', 'Micronesia Federated States of', 'ولايات ميكرونيزيا الموحدة', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('FO', 'Faroe Islands', 'جزر فاروس', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('FR', 'France', 'فرنسا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('GA', 'Gabon', 'الجابون', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('GB', 'United Kingdom', 'المملكة المتحدة', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('GD', 'Grenada', 'غرينادا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('GE', 'Georgia', 'جورجيا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('GF', 'French Guiana', 'غيانا الفرنسية', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('GG', 'Guernsey', 'غيرنسي', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('GH', 'Ghana', 'غانا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('GI', 'Gibraltar', 'جبل طارق', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('GL', 'Greenland', 'الأرض الخضراء', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('GM', 'Gambia', 'غامبيا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('GN', 'Guinea', 'غينيا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('GP', 'Guadeloupe', 'جوادلوب', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('GQ', 'Equatorial Guinea', 'غينيا الإستوائية', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('GR', 'Greece', 'اليونان', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('GS', 'South Georgia and the South Sandwich Islands', 'جورجيا الجنوبية وجزر ساندويتش الجنوبية', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('GT', 'Guatemala', 'غواتيمالا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('GU', 'Guam', 'غوام', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('GW', 'Guinea-Bissau', 'غينيا بيساو', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('GY', 'Guyana', 'غويانا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('HK', 'Hong Kong', 'هونج كونج', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('HM', 'Heard Island and McDonald Mcdonald Islands', 'قلب الجزيرة وجزر ماكدونالز', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('HN', 'Honduras', 'هندوراس', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('HR', 'Croatia', 'كرواتيا', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('HT', 'Haiti', 'هايتي', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('HU', 'Hungary', 'هنغاريا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('ID', 'Indonesia', 'إندونيسيا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('IE', 'Ireland', 'أيرلندا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('IL', 'Israel', 'إسرائيل', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('IM', 'Isle of Man', 'جزيرة آيل أوف مان', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('IN', 'India', 'الهند', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('IO', 'British Indian Ocean Territory', 'إقليم المحيط البريطاني الهندي', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('IQ', 'Iraq', 'العراق', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('IR', 'Iran Islamic Republic of', 'جمهورية إيران الإسلامية\"\"', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('IS', 'Iceland', 'أيسلندا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('IT', 'Italy', 'إيطاليا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('JE', 'Jersey', 'جيرسي', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('JM', 'Jamaica', 'جامايكا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('JO', 'Jordan', 'الأردن', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('JP', 'Japan', 'اليابان', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('KE', 'Kenya', 'كينيا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('KG', 'Kyrgyzstan', 'قيرغيزستان', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('KH', 'Cambodia', 'كمبوديا', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('KI', 'Kiribati', 'كيريباتي', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('KM', 'Comoros', 'جزر القمر', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('KN', 'Saint Kitts and Nevis', 'سانت كيتس ونيفيس', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('KP', 'Korea Democratic People\'s Republic of', 'جمهورية كوريا الديمقراطية الشعبية\"\"', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('KR', 'Korea Republic of', 'جمهورية كوريا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('KW', 'Kuwait', 'الكويت', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('KY', 'Cayman Islands', 'جزر كايمان', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('KZ', 'Kazakhstan', 'كازاخستان', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('LA', 'Lao People\'s Democratic Republic', 'جمهورية لاو الديمقراطية الشعبية', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('LB', 'Lebanon', 'لبنان', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('LC', 'Saint Lucia', 'القديسة لوسيا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('LI', 'Liechtenstein', 'ليختنشتاين', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('LK', 'Sri Lanka', 'سيريلانكا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('LR', 'Liberia', 'ليبيريا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('LS', 'Lesotho', 'ليسوتو', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('LT', 'Lithuania', 'ليتوانيا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('LU', 'Luxembourg', 'لوكسمبورغ', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('LV', 'Latvia', 'لاتفيا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('LY', 'Libya', 'ليبيا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('MA', 'Morocco', 'المغرب', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('MC', 'Monaco', 'موناكو', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('MD', 'Moldova Republic of', 'جمهورية مولدوفا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('ME', 'Montenegro', 'الجبل الأسود', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('MF', 'Saint Martin (French part)', 'سانت مارتن (الجزء الفرنسي)', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('MG', 'Madagascar', 'مدغشقر', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('MH', 'Marshall Islands', 'جزر مارشال', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('MK', 'Macedonia the Former Yugoslav Republic of', 'مقدونيا جمهورية يوغوسلافيا السابقة', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('ML', 'Mali', 'مالي', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('MM', 'Myanmar', 'ميانمار', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('MN', 'Mongolia', 'منغوليا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('MO', 'Macao', 'ماكاو', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('MP', 'Northern Mariana Islands', 'جزر مريانا الشمالية', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('MQ', 'Martinique', 'مارتينيك', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('MR', 'Mauritania', 'موريتانيا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('MS', 'Montserrat', 'مونتسيرات', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('MT', 'Malta', 'مالطا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('MU', 'Mauritius', 'موريشيوس', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('MV', 'Maldives', 'جزر المالديف', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('MW', 'Malawi', 'ملاوي', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('MX', 'Mexico', 'المكسيك', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('MY', 'Malaysia', 'ماليزيا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('MZ', 'Mozambique', 'موزمبيق', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('NA', 'Namibia', 'ناميبيا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('NC', 'New Caledonia', 'كاليدونيا الجديدة', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('NE', 'Niger', 'النيجر', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('NF', 'Norfolk Island', 'جزيرة نورفولك', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('NG', 'Nigeria', 'نيجيريا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('NI', 'Nicaragua', 'نيكاراغوا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('NL', 'Netherlands', 'هولندا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('NO', 'Norway', 'النرويج', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('NP', 'Nepal', 'نيبال', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('NR', 'Nauru', 'ناورو', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('NU', 'Niue', 'نيوي', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('NZ', 'New Zealand', 'نيوزيلندا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('OM', 'Oman', 'سلطنة عمان', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('PA', 'Panama', 'بنما', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('PE', 'Peru', 'بيرو', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('PF', 'French Polynesia', 'بولينيزيا الفرنسية', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('PG', 'Papua New Guinea', 'بابوا غينيا الجديدة', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('PH', 'Philippines', 'فيلبيني', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('PK', 'Pakistan', 'باكستان', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('PL', 'Poland', 'بولندا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('PM', 'Saint Pierre and Miquelon', 'القديس بطرس وميكلون', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('PN', 'Pitcairn', 'بيتكيرن', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('PR', 'Puerto Rico', 'بورتوريكو', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('PS', 'Palestine State of', 'دولة فلسطين', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('PT', 'Portugal', 'البرتغال', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('PW', 'Palau', 'بالاو', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('PY', 'Paraguay', 'باراجواي', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('QA', 'Qatar', 'دولة قطر', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('RE', 'Réunion', 'مقابلة', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('RO', 'Romania', 'رومانيا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('RS', 'Serbia', 'صربيا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('RU', 'Russian Federation', 'الاتحاد الروسي', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('RW', 'Rwanda', 'رواندا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('SA', 'Saudi Arabia', 'المملكة العربية السعودية', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('SB', 'Solomon Islands', 'جزر سليمان', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('SC', 'Seychelles', 'سيشيل', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('SD', 'Sudan', 'السودان', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('SE', 'Sweden', 'السويد', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('SG', 'Singapore', 'سنغافورة', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('SH', 'Saint Helena Ascension and Tristan da Cunha', 'صعود سانت هيلانة وتريستان دا كونها', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('SI', 'Slovenia', 'سلوفينيا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('SJ', 'Svalbard and Jan Mayen', 'سفالبارد والبحر', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('SK', 'Slovakia', 'سلوفاكيا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('SL', 'Sierra Leone', 'سيرا ليون', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('SM', 'San Marino', 'سان مارينو', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('SN', 'Senegal', 'السنغال', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('SO', 'Somalia', 'الصومال', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('SR', 'Suriname', 'سورينام', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('SS', 'South Sudan', 'جنوب السودان', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('ST', 'Sao Tome and Principe', 'ساو تومي وبرينسيبي', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('SV', 'El Salvador', 'المنقذ', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('SX', 'Sint Maarten (Dutch part)', 'سينت مارتن (الجزء الهولندي)', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('SY', 'Syrian Arab Republic', 'الجمهورية العربية السورية', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('SZ', 'Swaziland', 'سوازيلاند', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('TC', 'Turks and Caicos Islands', 'جزر تركس وكايكوس', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('TD', 'Chad', 'تشاد', '2024-02-15 07:13:36', '2024-02-15 07:13:36'),
('TF', 'French Southern Territories', 'المناطق الجنوبية لفرنسا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('TG', 'Togo', 'توجو', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('TH', 'Thailand', 'تايلاند', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('TJ', 'Tajikistan', 'طاجيكستان', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('TK', 'Tokelau', 'توكيلاو', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('TL', 'Timor-Leste', 'تيمور الشرقية', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('TM', 'Turkmenistan', 'تركمانستان', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('TN', 'Tunisia', 'تونس', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('TO', 'Tonga', 'تونغا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('TR', 'Turkey', 'ديك رومى', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('TT', 'Trinidad and Tobago', 'ترينداد وتوباغو', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('TV', 'Tuvalu', 'توفالو', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('TW', 'Taiwan', 'تايوان', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('TZ', 'Tanzania United Republic of', 'تنزانيا جمهورية تنزانيا المتحدة', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('UA', 'Ukraine', 'أوكرانيا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('UG', 'Uganda', 'أوغندا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('UM', 'United States Minor Outlying Islands', 'جزر الولايات المتحدة البعيدة الصغرى', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('US', 'United States', 'الولايات المتحدة', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('UY', 'Uruguay', 'أوروغواي', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('UZ', 'Uzbekistan', 'أوزبكستان', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('VA', 'Holy See (Vatican City State)', 'الكرسي الرسولي (دولة مدينة الفاتيكان)', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('VC', 'Saint Vincent and the Grenadines', 'سانت فنسنت وجزر غرينادين', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('VE', 'Venezuela Bolivarian Republic of', 'جمهورية فنزويلا البوليفارية', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('VG', 'Virgin Islands British', 'جزر فيرجن البريطانية', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('VI', 'Virgin Islands U.S.', 'جزر فيرجن الأمريكية', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('VN', 'Viet Nam', 'فيتنام', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('VU', 'Vanuatu', 'فانواتو', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('WF', 'Wallis and Futuna', 'واليس وفوتونا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('WS', 'Samoa', 'ساموا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('YE', 'Yemen', 'اليمن', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('YT', 'Mayotte', 'مايوت', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('ZA', 'South Africa', 'جنوب أفريقيا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('ZM', 'Zambia', 'زامبيا', '2024-02-15 07:13:37', '2024-02-15 07:13:37'),
('ZW', 'Zimbabwe', 'زيمبابوي', '2024-02-15 07:13:37', '2024-02-15 07:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `education_levels`
--

CREATE TABLE `education_levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `name_ar` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education_levels`
--

INSERT INTO `education_levels` (`id`, `name`, `name_ar`, `created_at`, `updated_at`) VALUES
(1, 'NotEducated', 'غير متعلم', '2024-02-18 05:03:01', '2024-02-18 05:03:01'),
(2, 'Elementary', 'إبتدائي', '2024-02-18 05:03:01', '2024-02-18 05:03:01'),
(3, 'Secondary', 'ثانوي', '2024-02-18 05:03:01', '2024-02-18 05:03:01'),
(4, 'University', 'جامعي', '2024-02-18 05:03:01', '2024-02-18 05:03:01'),
(5, 'ِAbove University', 'فوق الجامعي', '2024-02-18 05:03:01', '2024-02-18 05:03:01');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` text NOT NULL,
  `second_name` text NOT NULL,
  `third_name` text NOT NULL,
  `last_name` text NOT NULL,
  `first_name_ar` text NOT NULL,
  `second_name_ar` text NOT NULL,
  `third_name_ar` text NOT NULL,
  `last_name_ar` text NOT NULL,
  `gender` text NOT NULL,
  `emp_photo` text DEFAULT NULL,
  `nationality_id` bigint(20) UNSIGNED NOT NULL,
  `martial_status_id` bigint(20) UNSIGNED DEFAULT NULL,
  `education_level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profession_id` bigint(20) UNSIGNED DEFAULT NULL,
  `certificate` text DEFAULT NULL,
  `resume` text DEFAULT NULL,
  `approval_id` bigint(20) UNSIGNED DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `job_title_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` text DEFAULT NULL,
  `mobile1` text NOT NULL,
  `mobile2` text DEFAULT NULL,
  `whatsapp` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `birth_date` date NOT NULL,
  `hire_date` date DEFAULT NULL,
  `passport_no` text NOT NULL,
  `pass_issue_date` date NOT NULL,
  `pass_expire_date` date NOT NULL,
  `pass_photo` text DEFAULT NULL,
  `visa_no` text DEFAULT NULL,
  `visa_issue_date` date DEFAULT NULL,
  `visa_expire_date` date DEFAULT NULL,
  `visa_photo` text DEFAULT NULL,
  `qid_no` text DEFAULT NULL,
  `qid_issue_date` date DEFAULT NULL,
  `qid_expire_date` date DEFAULT NULL,
  `qid_photo` text DEFAULT NULL,
  `contract` text DEFAULT NULL,
  `salary` text DEFAULT NULL,
  `bank_name` text DEFAULT NULL,
  `bank_account` text DEFAULT NULL,
  `employee_statuses_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `modified_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_statuses`
--

CREATE TABLE `employee_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_statuses`
--

INSERT INTO `employee_statuses` (`id`, `name`, `name_ar`, `created_at`, `updated_at`) VALUES
(1, 'Apply for Visa', 'تم طلب السمة', '2024-02-18 05:03:01', '2024-02-18 05:03:01'),
(2, 'Visa Approved', 'تمت الموافقة على السمة', '2024-02-18 05:03:01', '2024-02-18 05:03:01'),
(3, 'Visa Printed', 'تم طباعة السمة', '2024-02-18 05:03:01', '2024-02-18 05:03:01'),
(4, 'CheckedIn', 'تم الوصول', '2024-02-18 05:03:01', '2024-02-18 05:03:01'),
(5, 'Medical', 'تم عمل الفحص الطبي', '2024-02-18 05:03:01', '2024-02-18 05:03:01'),
(6, 'Finger Print', 'تم عمل البصمة', '2024-02-18 05:03:01', '2024-02-18 05:03:01'),
(7, 'Contract', 'تم عمل العقد', '2024-02-18 05:03:01', '2024-02-18 05:03:01'),
(8, 'Apply for ID', 'تم طلب البطاقة', '2024-02-18 05:03:01', '2024-02-18 05:03:01'),
(9, 'Process Completed', 'تم إكمال الإجراءات', '2024-02-18 05:03:01', '2024-02-18 05:03:01'),
(10, 'Secondment', 'إعارة', '2024-02-18 05:03:01', '2024-02-18 05:03:01'),
(11, 'Transferred', 'نقل كفالة', '2024-02-18 05:03:01', '2024-02-18 05:03:01'),
(12, 'Outside Country', 'خارج البلاد', '2024-02-18 05:03:01', '2024-02-18 05:03:01');

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
-- Table structure for table `job_titles`
--

CREATE TABLE `job_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `name_ar` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `martial_statuses`
--

CREATE TABLE `martial_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `name_ar` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `martial_statuses`
--

INSERT INTO `martial_statuses` (`id`, `name`, `name_ar`, `created_at`, `updated_at`) VALUES
(1, 'Single', 'عازب', '2024-02-18 05:03:01', '2024-02-18 05:03:01'),
(2, 'Married', 'متزوج', '2024-02-18 05:03:01', '2024-02-18 05:03:01'),
(3, 'Divorced', 'مطلق', '2024-02-18 05:03:01', '2024-02-18 05:03:01'),
(4, 'Widow', 'أرمل', '2024-02-18 05:03:01', '2024-02-18 05:03:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_01_24_070819_create_roles_table', 1),
(7, '2024_01_24_070954_create_role_user_table', 1),
(8, '2024_01_28_070100_create_employee_statuses_table', 1),
(9, '2024_01_30_101315_create_nationalities_table', 1),
(10, '2024_01_30_101942_create_education_levels_table', 1),
(11, '2024_01_30_102056_create_martial_statuses_table', 1),
(12, '2024_01_30_102136_create_professions_table', 1),
(13, '2024_01_30_102237_create_job_titles_table', 1),
(14, '2024_01_30_102312_create_companies_table', 1),
(15, '2024_01_30_102412_create_approvals_table', 1),
(16, '2024_01_30_171225_create_employees_table', 1),
(17, '2024_02_04_175654_create_notifications_table', 1),
(19, '2024_02_15_095509_create_countries_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nationalities`
--

CREATE TABLE `nationalities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `name_ar` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `professions`
--

CREATE TABLE `professions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `name_ar` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2024-02-14 12:31:34', '2024-02-14 12:31:34'),
(2, 'user', '2024-02-14 12:31:34', '2024-02-14 12:31:34'),
(3, 'employee', '2024-02-14 12:31:34', '2024-02-14 12:31:34');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile_number`, `photo`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', '$2y$12$kvw6oQNj7TEZah/E00U6G.4nZ5p8.qrKgLqAzxcM6b8ecWwTCi.Na', NULL, NULL, NULL, NULL, '2024-02-14 12:31:35', '2024-02-14 12:31:35'),
(2, 'Normal user', 'user', '$2y$12$/TfT.MbqxWaV5EAqDDDfMuPgZ9jaeEWLw76bco1O8uqodWOaXKGJm', NULL, NULL, NULL, NULL, '2024-02-14 12:31:35', '2024-02-14 12:31:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approvals`
--
ALTER TABLE `approvals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `approvals_company_id_foreign` (`company_id`),
  ADD KEY `approvals_nationality_id_foreign` (`nationality_id`),
  ADD KEY `approvals_job_title_id_foreign` (`job_title_id`),
  ADD KEY `approvals_created_by_foreign` (`created_by`),
  ADD KEY `approvals_modified_by_foreign` (`modified_by`),
  ADD KEY `approvals_deleted_by_foreign` (`deleted_by`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companies_created_by_foreign` (`created_by`),
  ADD KEY `companies_modified_by_foreign` (`modified_by`),
  ADD KEY `companies_deleted_by_foreign` (`deleted_by`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `education_levels`
--
ALTER TABLE `education_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_company_id_foreign` (`company_id`),
  ADD KEY `employees_approval_id_foreign` (`approval_id`),
  ADD KEY `employees_nationality_id_foreign` (`nationality_id`),
  ADD KEY `employees_martial_status_id_foreign` (`martial_status_id`),
  ADD KEY `employees_education_level_id_foreign` (`education_level_id`),
  ADD KEY `employees_profession_id_foreign` (`profession_id`),
  ADD KEY `employees_job_title_id_foreign` (`job_title_id`),
  ADD KEY `employees_employee_statuses_id_foreign` (`employee_statuses_id`),
  ADD KEY `employees_created_by_foreign` (`created_by`),
  ADD KEY `employees_modified_by_foreign` (`modified_by`),
  ADD KEY `employees_deleted_by_foreign` (`deleted_by`);

--
-- Indexes for table `employee_statuses`
--
ALTER TABLE `employee_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `job_titles`
--
ALTER TABLE `job_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `martial_statuses`
--
ALTER TABLE `martial_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nationalities`
--
ALTER TABLE `nationalities`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `professions`
--
ALTER TABLE `professions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `approvals`
--
ALTER TABLE `approvals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `education_levels`
--
ALTER TABLE `education_levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_statuses`
--
ALTER TABLE `employee_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_titles`
--
ALTER TABLE `job_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `martial_statuses`
--
ALTER TABLE `martial_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `nationalities`
--
ALTER TABLE `nationalities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professions`
--
ALTER TABLE `professions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `approvals`
--
ALTER TABLE `approvals`
  ADD CONSTRAINT `approvals_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `approvals_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `approvals_deleted_by_foreign` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `approvals_job_title_id_foreign` FOREIGN KEY (`job_title_id`) REFERENCES `job_titles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `approvals_modified_by_foreign` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `approvals_nationality_id_foreign` FOREIGN KEY (`nationality_id`) REFERENCES `nationalities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `companies_deleted_by_foreign` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `companies_modified_by_foreign` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_approval_id_foreign` FOREIGN KEY (`approval_id`) REFERENCES `approvals` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employees_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employees_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `employees_deleted_by_foreign` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `employees_education_level_id_foreign` FOREIGN KEY (`education_level_id`) REFERENCES `education_levels` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `employees_employee_statuses_id_foreign` FOREIGN KEY (`employee_statuses_id`) REFERENCES `employee_statuses` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `employees_job_title_id_foreign` FOREIGN KEY (`job_title_id`) REFERENCES `job_titles` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `employees_martial_status_id_foreign` FOREIGN KEY (`martial_status_id`) REFERENCES `martial_statuses` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `employees_modified_by_foreign` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `employees_nationality_id_foreign` FOREIGN KEY (`nationality_id`) REFERENCES `nationalities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employees_profession_id_foreign` FOREIGN KEY (`profession_id`) REFERENCES `professions` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
