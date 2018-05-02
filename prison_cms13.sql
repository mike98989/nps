-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2018 at 09:12 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prison_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`ID` bigint(20) unsigned NOT NULL,
  `admin_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `admin_fname` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_lname` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `admin_phone` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_address` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_state` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_type` int(11) NOT NULL,
  `date` date NOT NULL,
  `admin_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `admin_pass`, `admin_fname`, `admin_lname`, `admin_email`, `admin_phone`, `admin_address`, `admin_state`, `account_type`, `date`, `admin_status`) VALUES
(1, 'a82450ee149067875b4306513741e379', 'Prisons', 'Admin', 'admin@prisons.gov.ng', ' 206-212-6439', 'Bill Clinton Drive, Airport Road Abuja', 'FCT-Abuja', 3, '2017-05-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE IF NOT EXISTS `attachments` (
`id` int(11) NOT NULL,
  `recruit_id` int(11) NOT NULL,
  `title` tinytext NOT NULL,
  `path` tinytext NOT NULL,
  `file_type` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attachments`
--

INSERT INTO `attachments` (`id`, `recruit_id`, `title`, `path`, `file_type`) VALUES
(1, 1, 'Birth Certificate/Age Declaration', '1_19869_AGREEMENT FOR MICHAEL.pdf', 'pdf'),
(2, 1, 'Medeival Studies', '1_89707_SWAPTIFY SOLUTIONS LIMITED - ACCOUNT OPENING FORM & BOARD RESOLUTION.pdf', 'pdf'),
(3, 1, 'Passport Photograph', '1_37342_my_photo.jpg', 'jpg'),
(4, 1, 'SSCE(NECO)', '1_71691_pic8.jpg', 'jpg'),
(5, 1, 'First School Leaving Certificate', '1_15518_ReactNative.pdf', 'pdf'),
(6, 1, 'Certificate of Identification/Origin', '1_39259_exitcertified.docx', 'docx'),
(7, 2, 'Birth Certificate/Age Declaration', '2_93007_AGREEMENT FOR MICHAEL.pdf', 'pdf'),
(8, 2, 'Certificate of Identification/Origin', '2_35942_beginning-mobile-app-development-with-react-native-sample.pdf', 'pdf'),
(9, 2, 'First School Leaving Certificate', '2_48513_exitcertified.docx', 'docx'),
(10, 2, 'Passport Photograph', '2_50183_my_photo.jpg', 'jpg'),
(15, 2, 'SSCE(NECO)', '2_92265_IMG-20160511-WA0004.jpg', 'jpg'),
(16, 3, 'Birth Certificate/Age Declaration', '3_67707_IMG_20180129_0002.jpg', 'jpg'),
(17, 3, 'Certificate of Identification/Origin', '3_99940_IMG_20180129_0003.pdf', 'pdf'),
(18, 3, 'First School Leaving Certificate', '3_57012_IMG_20180129_0002.jpg', 'jpg'),
(19, 3, 'Passport Photograph', '3_14176_blogging-3094201_1920.jpg', 'jpg'),
(20, 3, 'SSCE(NECO)', '3_36183_IMG_20180129_0003.pdf', 'pdf'),
(21, 4, 'Birth Certificate/Age Declaration', '4_55200_IMG_20180129_0001.jpg', 'jpg'),
(23, 4, 'Certificate of Identification/Origin', '4_61896_Ds_160_CEACAA007QB9EE.PDF', 'pdf'),
(24, 4, 'First School Leaving Certificate', '4_68453_IMG_20180129_0003.pdf', 'pdf'),
(25, 4, 'Passport Photograph', '4_16498_blogging-3094201_1920.jpg', 'jpg'),
(26, 4, 'SSCE(NECO)', '4_48237_PULLOVAWEBSITECONTENT.docx', 'docx'),
(27, 6, 'Birth Certificate/Age Declaration', '6_17322_1_15518_ReactNative.pdf', 'pdf'),
(28, 6, 'Certificate of Identification/Origin', '6_26571_1_15518_ReactNative.pdf', 'pdf'),
(29, 6, 'First School Leaving Certificate', '6_97607_1_19869_AGREEMENT FOR MICHAEL.pdf', 'pdf'),
(30, 6, 'Medical Fitness Certificate', '6_51483_1_89707_SWAPTIFY SOLUTIONS LIMITED - ACCOUNT OPENING FORM & BOARD RESOLUTION.pdf', 'pdf'),
(31, 6, 'Passport Photograph', '6_57222_1_37342_my_photo.jpg', 'jpg'),
(32, 6, 'SSCE(NECO)', '6_56104_2_93007_AGREEMENT FOR MICHAEL.pdf', 'pdf');

-- --------------------------------------------------------

--
-- Table structure for table `attachments_list`
--

CREATE TABLE IF NOT EXISTS `attachments_list` (
`id` int(11) NOT NULL,
  `degree` tinytext NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attachments_list`
--

INSERT INTO `attachments_list` (`id`, `degree`, `status`) VALUES
(1, 'MPhil/Phd', 1),
(2, 'MBA/Msc', 1),
(3, 'MBBS', 1),
(4, 'MD', 1),
(5, 'MS', 1),
(6, 'MB', 1),
(7, 'BSc', 1),
(8, 'HND', 1),
(9, 'OND', 1),
(10, 'NCS', 1),
(11, 'Diploma', 1),
(12, 'Vocational', 1),
(13, 'SSCE(WAEC)', 1),
(14, 'SSCE(NECO)', 1),
(15, 'First School Leaving Certificate', 1),
(16, 'Birth Certificate/Age Declaration', 0),
(17, 'Passport Photograph', 0),
(18, 'D.V.M', 1),
(20, 'Trade Test Grade III', 0),
(21, 'RN', 0),
(22, 'RM', 0),
(23, 'RNM', 0),
(24, 'Certificate of Identification/Origin', 0),
(25, 'NCE', 1),
(26, 'Medical Fitness Certificate', 0),
(27, 'Change Of Name', 0);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
`id` int(11) unsigned NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=251 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'Afghanistan'),
(3, 'Albania'),
(4, 'Algeria'),
(5, 'American Samoa'),
(6, 'Andorra'),
(7, 'Angola'),
(8, 'Anguilla'),
(9, 'Antarctica'),
(10, 'Antigua and Barbuda'),
(11, 'Argentina'),
(12, 'Armenia'),
(13, 'Aruba'),
(14, 'Australia'),
(15, 'Austria'),
(16, 'Azerbaijan'),
(17, 'Bahamas'),
(18, 'Bahrain'),
(19, 'Bangladesh'),
(20, 'Barbados'),
(21, 'Belarus'),
(22, 'Belgium'),
(23, 'Belize'),
(24, 'Benin'),
(25, 'Bermuda'),
(26, 'Bhutan'),
(27, 'Bolivia'),
(28, 'Bonaire, Sint Eustatius and Saba'),
(29, 'Bosnia and Herzegovina'),
(30, 'Botswana'),
(31, 'Bouvet Island'),
(32, 'Brazil'),
(33, 'British Indian Ocean Territory'),
(37, 'Brunei'),
(38, 'Bulgaria'),
(39, 'Burkina Faso'),
(40, 'Burundi'),
(44, 'Cabo Verde'),
(41, 'Cambodia'),
(42, 'Cameroon'),
(43, 'Canada'),
(45, 'Cayman Islands'),
(46, 'Central African Republic'),
(47, 'Chad'),
(48, 'Chile'),
(49, 'China'),
(50, 'Christmas Island'),
(51, 'Cocos (Keeling) Islands'),
(52, 'Colombia'),
(53, 'Comoros'),
(54, 'Congo'),
(55, 'Congo Democratic Republic'),
(56, 'Cook Islands'),
(57, 'Costa Rica'),
(107, 'Côte d''Ivoire'),
(58, 'Croatia'),
(59, 'Cuba'),
(60, 'Curaçao'),
(61, 'Cyprus'),
(62, 'Czech Republic'),
(166, 'Democratic People''s Republic of Korea'),
(63, 'Denmark'),
(64, 'Djibouti'),
(65, 'Dominica'),
(66, 'Dominican Republic'),
(67, 'Ecuador'),
(68, 'Egypt'),
(69, 'El Salvador'),
(70, 'Equatorial Guinea'),
(71, 'Eritrea'),
(72, 'Estonia'),
(73, 'Ethiopia'),
(74, 'Falkland Islands'),
(75, 'Faroe Islands'),
(76, 'Fiji'),
(77, 'Finland'),
(78, 'France'),
(79, 'French Guiana'),
(80, 'French Polynesia'),
(81, 'French Southern Territories'),
(82, 'Gabon'),
(83, 'Gambia'),
(84, 'Georgia'),
(85, 'Germany'),
(86, 'Ghana'),
(87, 'Gibraltar'),
(88, 'Greece'),
(89, 'Greenland'),
(90, 'Grenada'),
(91, 'Guadeloupe'),
(92, 'Guam'),
(93, 'Guatemala'),
(94, 'Guernsey'),
(95, 'Guinea'),
(96, 'Guinea-Bissau'),
(97, 'Guyana'),
(98, 'Haiti'),
(99, 'Heard Island and McDonald Islands'),
(100, 'Holy See'),
(101, 'Honduras'),
(102, 'Hong Kong'),
(103, 'Hungary'),
(104, 'Iceland'),
(105, 'India'),
(106, 'Indonesia'),
(109, 'Iraq'),
(110, 'Ireland'),
(108, 'Islamic Republic of Iran'),
(111, 'Isle of Man'),
(112, 'Israel'),
(113, 'Italy'),
(114, 'Jamaica'),
(115, 'Japan'),
(116, 'Jersey'),
(117, 'Jordan'),
(118, 'Kazakhstan'),
(119, 'Kenya'),
(120, 'Kiribati'),
(121, 'Kuwait'),
(122, 'Kyrgyzstan'),
(123, 'Lao People''s Democratic Republic'),
(124, 'Latvia'),
(125, 'Lebanon'),
(126, 'Lesotho'),
(127, 'Liberia'),
(128, 'Libya'),
(129, 'Liechtenstein'),
(130, 'Lithuania'),
(131, 'Luxembourg'),
(132, 'Macao'),
(133, 'Macedonia'),
(134, 'Madagascar'),
(135, 'Malawi'),
(136, 'Malaysia'),
(137, 'Maldives'),
(138, 'Mali'),
(139, 'Malta'),
(140, 'Marshall Islands'),
(141, 'Martinique'),
(142, 'Mauritania'),
(143, 'Mauritius'),
(144, 'Mayotte'),
(145, 'Mexico'),
(146, 'Micronesia'),
(147, 'Moldova'),
(148, 'Monaco'),
(149, 'Mongolia'),
(150, 'Montenegro'),
(151, 'Montserrat'),
(152, 'Morocco'),
(153, 'Mozambique'),
(154, 'Myanmar'),
(155, 'Namibia'),
(156, 'Nauru'),
(157, 'Nepal'),
(158, 'Netherlands'),
(159, 'New Caledonia'),
(160, 'New Zealand'),
(161, 'Nicaragua'),
(162, 'Niger'),
(163, 'Nigeria'),
(164, 'Niue'),
(165, 'Norfolk Island'),
(167, 'Northern Mariana Islands'),
(168, 'Norway'),
(169, 'Oman'),
(170, 'Pakistan'),
(171, 'Palau'),
(172, 'Palestine'),
(173, 'Panama'),
(174, 'Papua New Guinea'),
(175, 'Paraguay'),
(176, 'Peru'),
(177, 'Philippines'),
(178, 'Pitcairn'),
(179, 'Poland'),
(180, 'Portugal'),
(181, 'Puerto Rico'),
(182, 'Qatar'),
(211, 'Republic of Korea'),
(183, 'Republic of Kosovo'),
(184, 'Réunion'),
(185, 'Romania'),
(186, 'Russian Federation'),
(187, 'Rwanda'),
(188, 'Saint Barthélemy'),
(189, 'Saint Helena, Ascension and Tristan da Cunha'),
(190, 'Saint Kitts and Nevis'),
(191, 'Saint Lucia'),
(192, 'Saint Martin (French part)'),
(193, 'Saint Pierre and Miquelon'),
(194, 'Saint Vincent and the Grenadines'),
(195, 'Samoa'),
(196, 'San Marino'),
(197, 'Sao Tome and Principe'),
(198, 'Saudi Arabia'),
(199, 'Senegal'),
(200, 'Serbia'),
(201, 'Seychelles'),
(202, 'Sierra Leone'),
(203, 'Singapore'),
(204, 'Sint Maarten (Dutch part)'),
(205, 'Slovakia'),
(206, 'Slovenia'),
(207, 'Solomon Islands'),
(208, 'Somalia'),
(209, 'South Africa'),
(210, 'South Georgia and the South Sandwich Islands'),
(212, 'South Sudan'),
(213, 'Spain'),
(214, 'Sri Lanka'),
(215, 'Sudan'),
(216, 'Suriname'),
(217, 'Svalbard and Jan Mayen'),
(218, 'Swaziland'),
(219, 'Sweden'),
(220, 'Switzerland'),
(221, 'Syrian Arab Republic'),
(222, 'Taiwan'),
(223, 'Tajikistan'),
(224, 'Tanzania, United Republic of'),
(225, 'Thailand'),
(226, 'Timor-Leste'),
(227, 'Togo'),
(228, 'Tokelau'),
(229, 'Tonga'),
(230, 'Trinidad and Tobago'),
(231, 'Tunisia'),
(232, 'Turkey'),
(233, 'Turkmenistan'),
(234, 'Turks and Caicos Islands'),
(235, 'Tuvalu'),
(236, 'Uganda'),
(237, 'Ukraine'),
(238, 'United Arab Emirates'),
(239, 'United Kingdom of Great Britain and Northern Ireland'),
(34, 'United States Minor Outlying Islands'),
(240, 'United States of America'),
(241, 'Uruguay'),
(242, 'Uzbekistan'),
(243, 'Vanuatu'),
(244, 'Venezuela'),
(245, 'Vietnam'),
(35, 'Virgin Islands (British)'),
(36, 'Virgin Islands (U.S.)'),
(246, 'Wallis and Futuna'),
(247, 'Western Sahara'),
(248, 'Yemen'),
(249, 'Zambia'),
(250, 'Zimbabwe'),
(2, 'Åland Islands');

-- --------------------------------------------------------

--
-- Table structure for table `educational_qualifications`
--

CREATE TABLE IF NOT EXISTS `educational_qualifications` (
`id` int(11) unsigned NOT NULL,
  `recruit_id` int(11) unsigned DEFAULT NULL,
  `startdate` varchar(20) NOT NULL,
  `enddate` varchar(20) NOT NULL,
  `course_of_study` tinytext NOT NULL,
  `qualification` tinytext NOT NULL,
  `type` varchar(35) NOT NULL,
  `classification` varchar(35) NOT NULL,
  `institution` tinytext NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educational_qualifications`
--

INSERT INTO `educational_qualifications` (`id`, `recruit_id`, `startdate`, `enddate`, `course_of_study`, `qualification`, `type`, `classification`, `institution`, `city`, `country`) VALUES
(1, 1, '1978', '1978', 'Microbiology', '', 'BSc', 'No Classification', 'JoviLearn', 'Maitama', 'Nigeria'),
(2, 1, '1978', '1978', '', '', 'First School Leaving Certificate', 'No Classification', 'DoviLearn', 'Maitama', 'Nigeria'),
(3, 1, '1978', '1978', '', '', 'SSCE(WAEC)', 'No Classification', 'DoviLearn', 'Maitama', 'Nigeria'),
(4, 2, '1978', '1978', 'Microbiology', '', 'BSc', 'No Classification', 'MichaelLearn', 'Maitama', 'Nigeria'),
(5, 3, '1978', '1978', '', '', 'First School Leaving Certificate', 'No Classification', 'MichaelLearn', 'Maitama', 'Nigeria'),
(6, 3, '1978', '1978', 'Microbiology', '', 'HND', 'No Classification', 'Delta state university', 'Warri', 'Nigeria'),
(7, 4, '1978', '1978', 'Bush burning and cattle rearing', '', 'BSc', 'No Classification', 'Nnamdi Azikiwe University', 'awka', 'Nigeria'),
(8, 6, '1987', '1989', 'Bush burning and cattle rearing', '', 'BSc', 'Second Class Lower/Lower Credit', 'Nnamdi Azikiwe University', 'ABUJA', 'Nigeria'),
(9, 8, '1984', '1986', 'Bush burning and cattle rearing', '', 'MBA/Msc', 'No Classification', 'Nnamdi Azikiwe University', 'Abuja', 'Nigeria'),
(10, 8, '1985', '1978', 'Bush burning and cattle rearing', '', 'MB', 'First Class/Distinction', 'Nnamdi Azikiwe University', 'Awka', 'Nigeria');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`id` int(11) NOT NULL,
  `galleryTitle` tinytext NOT NULL,
  `galleryType` int(11) NOT NULL,
  `button` tinytext NOT NULL,
  `path` tinytext NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `galleryTitle`, `galleryType`, `button`, `path`, `date`, `status`) VALUES
(1, 'The Nigerian Prisons Service', 1, '', 'images/gallery/slider2.jpg', '', 0),
(2, '', 1, 'roll_of_honours', 'images/gallery/slider3b.jpg', '', 1),
(5, 'The Nigerian Prisons Service', 1, '', 'images/gallery/slider2.jpg', '', 1),
(8, 'We are recruiting', 1, 'recruit', 'images/gallery/application-2076445_12807994501.png', '2018/03/11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `home_content`
--

CREATE TABLE IF NOT EXISTS `home_content` (
`id` int(11) NOT NULL,
  `mission` text NOT NULL,
  `vision` text NOT NULL,
  `functions_of_nps` text NOT NULL,
  `external_links` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_content`
--

INSERT INTO `home_content` (`id`, `mission`, `vision`, `functions_of_nps`, `external_links`) VALUES
(1, '<p>To promote public protection by providing assistance for offenders in their reformation and rehabilitation under safe, secure and humane conditions in accordance with universally accepted standard and to facilitate their social reintegration into society.</p>    \r\n    \r\n    \r\n    \r\n', '<p>Our intention is to establish a credible Prisons Service which through excellent penal practice seek lasting change in offender’s attitudes, values and behaviour and ensure successful reintegration into the society.</p>', '<p>The Nigerian Prisons Service derives its operational powers from CAP P29 Laws of the Federation of Nigeria 2004 to i. take into lawful custody all those certified to be so kept by courts of competent jurisdiction; ii. produce suspects in courts as and when due; iii. identify the causes of their anti-social dispositions; iv. set in motion mechanisms for their treatment and training for eventual reintegration into society as normal law abiding citizens on discharge; and v. Administer Prisons Farms and Industries for this purpose and in the process generate revenue for the government.</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `hr_admin`
--

CREATE TABLE IF NOT EXISTS `hr_admin` (
`ID` bigint(20) unsigned NOT NULL,
  `admin_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `admin_fname` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_lname` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `admin_phone` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_address` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_state` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_type` int(11) NOT NULL,
  `date` date NOT NULL,
  `admin_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hr_admin`
--

INSERT INTO `hr_admin` (`ID`, `admin_pass`, `admin_fname`, `admin_lname`, `admin_email`, `admin_phone`, `admin_address`, `admin_state`, `account_type`, `date`, `admin_status`) VALUES
(1, 'a82450ee149067875b4306513741e379', 'Prisons', 'Admin', 'hr@prisons.gov.ng', ' 206-212-6439', 'Bill Clinton Drive, Airport Road Abuja', 'FCT-Abuja', 3, '2017-05-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inmates_allclassregister`
--

CREATE TABLE IF NOT EXISTS `inmates_allclassregister` (
`id` int(11) NOT NULL,
  `PrisonerNo` varchar(50) NOT NULL,
  `state_id` int(11) NOT NULL,
  `prison_id` int(11) NOT NULL,
  `surname` tinytext NOT NULL,
  `firstname` tinytext NOT NULL,
  `othernames` tinytext NOT NULL,
  `prosecuting_agency` tinytext NOT NULL,
  `date_of_birth` varchar(25) NOT NULL,
  `age_on_admission` int(11) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `marital_status` tinytext NOT NULL,
  `mobileNo` varchar(60) NOT NULL,
  `address` text NOT NULL,
  `weight` varchar(45) NOT NULL,
  `height` varchar(45) NOT NULL,
  `occupation` tinytext NOT NULL,
  `inmate_description` tinytext NOT NULL,
  `next_of_kin` tinytext NOT NULL,
  `next_of_kin_phone` varchar(55) NOT NULL,
  `next_of_kin_address` text NOT NULL,
  `health_status` tinytext NOT NULL,
  `other_health_status` tinytext NOT NULL,
  `inmate_status` tinytext NOT NULL,
  `previous_conviction` tinytext NOT NULL,
  `date_of_first_arrival_in_any_prison` varchar(50) NOT NULL,
  `date_of_arrival_in_current_prison` varchar(50) NOT NULL,
  `risks` tinytext NOT NULL,
  `other_risk` tinytext NOT NULL,
  `religion` tinytext NOT NULL,
  `other_religion` varchar(70) NOT NULL,
  `nationality` tinytext NOT NULL,
  `state_of_origin` tinytext NOT NULL,
  `ethnic_group` tinytext NOT NULL,
  `other_ethnic_group` tinytext NOT NULL,
  `lga_of_origin` varchar(15) NOT NULL,
  `town` tinytext NOT NULL,
  `intl_passport_no` varchar(30) NOT NULL,
  `national_id_no_or_permit` varchar(30) NOT NULL,
  `bvn` varchar(30) NOT NULL,
  `name_of_court` tinytext NOT NULL,
  `charge_no_suit_no` varchar(30) NOT NULL,
  `offence` tinytext NOT NULL,
  `date_of_case_disposal` varchar(50) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `nature_of_final_case_disposal` tinytext NOT NULL,
  `name_of_legal_representative` tinytext NOT NULL,
  `legal_representative_phone` varchar(60) NOT NULL,
  `date_of_last_court_appearance` varchar(50) NOT NULL,
  `court_where_inmate_will_appear` varchar(50) NOT NULL,
  `date_of_final_case_disposal` varchar(50) NOT NULL,
  `time_from_arrival_to_departure` tinytext NOT NULL,
  `nature_of_case_disposal` varchar(50) NOT NULL,
  `transfer_to_convict_register` varchar(50) NOT NULL,
  `date_tfd_to_convict_register` varchar(50) NOT NULL,
  `no_of_times` varchar(20) NOT NULL,
  `court_where_inmate_appeared` varchar(50) NOT NULL,
  `reason_for_adjournment` varchar(50) NOT NULL,
  `date_of_next_court_appearance` varchar(50) NOT NULL,
  `sentence_passed` varchar(100) NOT NULL,
  `other_sentence_passed` varchar(50) NOT NULL,
  `sentence_type` varchar(50) NOT NULL,
  `other_sentence_type` varchar(50) NOT NULL,
  `appeal_data` varchar(100) NOT NULL,
  `court_of_appeal` tinytext NOT NULL,
  `latest_date_of_release` varchar(50) NOT NULL,
  `earliest_date_of_release` varchar(50) NOT NULL,
  `actual_date_of_release` varchar(50) NOT NULL,
  `reason_for_release` tinytext NOT NULL,
  `pending_case` tinytext NOT NULL,
  `conviction_date` tinytext NOT NULL,
  `departure_date` varchar(50) NOT NULL,
  `estimated_return` varchar(50) NOT NULL,
  `transfer_to` varchar(25) NOT NULL,
  `who_authorised_transfer` varchar(50) NOT NULL,
  `who_authorised_release` varchar(50) NOT NULL,
  `release_remark` text NOT NULL,
  `transfer_remark` text NOT NULL,
  `register_table` int(11) NOT NULL,
  `input_date_time` tinytext NOT NULL,
  `input_date` varchar(50) NOT NULL,
  `front_image` tinytext NOT NULL,
  `side_image` tinytext NOT NULL,
  `biometric` int(11) NOT NULL,
  `warrant` tinytext NOT NULL,
  `warrant_two` tinytext NOT NULL,
  `warrant_three` tinytext NOT NULL,
  `warrant_four` tinytext NOT NULL,
  `warrant_five` tinytext NOT NULL,
  `inmate_logger` varchar(50) NOT NULL,
  `inmate_logger_ip` tinytext NOT NULL,
  `register_stage` int(11) NOT NULL,
  `vetted` int(11) NOT NULL,
  `vet_date` varchar(50) NOT NULL,
  `upload_to_cloud` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lgas`
--

CREATE TABLE IF NOT EXISTS `lgas` (
`id` int(11) unsigned NOT NULL,
  `state` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `state_short_code` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=775 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lgas`
--

INSERT INTO `lgas` (`id`, `state`, `name`, `state_short_code`) VALUES
(1, 'Abia', 'Aba North', 'AB'),
(2, 'Abia', 'Aba South', 'AB'),
(3, 'Abia', 'Arochukwu', 'AB'),
(4, 'Abia', 'Bende', 'AB'),
(5, 'Abia', 'Ikwuano', 'AB'),
(6, 'Abia', 'Isiala Ngwa North', 'AB'),
(7, 'Abia', 'Isiala Ngwa South', 'AB'),
(8, 'Abia', 'Isuikwuato', 'AB'),
(9, 'Abia', 'Obi Ngwa', 'AB'),
(10, 'Abia', 'Ohafia', 'AB'),
(11, 'Abia', 'Osisioma', 'AB'),
(12, 'Abia', 'Ugwunagbo', 'AB'),
(13, 'Abia', 'Ukwa East', 'AB'),
(14, 'Abia', 'Ukwa West', 'AB'),
(15, 'Abia', 'Umu Nneochi', 'AB'),
(16, 'Abia', 'Umuahia North', 'AB'),
(17, 'Abia', 'Umuahia South', 'AB'),
(18, 'Adamawa', 'Demsa', 'ADA'),
(19, 'Adamawa', 'Fufure', 'ADA'),
(20, 'Adamawa', 'Ganye', 'ADA'),
(21, 'Adamawa', 'Gayuk', 'ADA'),
(22, 'Adamawa', 'Gombi', 'ADA'),
(23, 'Adamawa', 'Grie', 'ADA'),
(24, 'Adamawa', 'Hong', 'ADA'),
(25, 'Adamawa', 'Jada', 'ADA'),
(26, 'Adamawa', 'Lamurde', 'ADA'),
(27, 'Adamawa', 'Madagali', 'ADA'),
(28, 'Adamawa', 'Maiha', 'ADA'),
(29, 'Adamawa', 'Mayo Belwa', 'ADA'),
(30, 'Adamawa', 'Michika', 'ADA'),
(31, 'Adamawa', 'Mubi North', 'ADA'),
(32, 'Adamawa', 'Mubi South', 'ADA'),
(33, 'Adamawa', 'Numan', 'ADA'),
(34, 'Adamawa', 'Shelleng', 'ADA'),
(35, 'Adamawa', 'Song', 'ADA'),
(36, 'Adamawa', 'Toungo', 'ADA'),
(37, 'Adamawa', 'Yola North', 'ADA'),
(38, 'Adamawa', 'Yola South', 'ADA'),
(39, 'AkwaIbom', 'Abak', 'AKW'),
(40, 'AkwaIbom', 'Eastern Obolo', 'AKW'),
(41, 'AkwaIbom', 'Eket', 'AKW'),
(42, 'AkwaIbom', 'Esit Eket', 'AKW'),
(43, 'AkwaIbom', 'Essien Udim', 'AKW'),
(44, 'AkwaIbom', 'Etim Ekpo', 'AKW'),
(45, 'AkwaIbom', 'Etinan', 'AKW'),
(46, 'AkwaIbom', 'Ibeno', 'AKW'),
(47, 'AkwaIbom', 'Ibesikpo Asutan', 'AKW'),
(48, 'AkwaIbom', 'Ibiono-Ibom', 'AKW'),
(49, 'AkwaIbom', 'Ika', 'AKW'),
(50, 'AkwaIbom', 'Ikono', 'AKW'),
(51, 'AkwaIbom', 'Ikot Abasi', 'AKW'),
(52, 'AkwaIbom', 'Ikot Ekpene', 'AKW'),
(53, 'AkwaIbom', 'Ini', 'AKW'),
(54, 'AkwaIbom', 'Itu', 'AKW'),
(55, 'AkwaIbom', 'Mbo', 'AKW'),
(56, 'AkwaIbom', 'Mkpat-Enin', 'AKW'),
(57, 'AkwaIbom', 'Nsit-Atai', 'AKW'),
(58, 'AkwaIbom', 'Nsit-Ibom', 'AKW'),
(59, 'AkwaIbom', 'Nsit-Ubium', 'AKW'),
(60, 'AkwaIbom', 'Obot Akara', 'AKW'),
(61, 'AkwaIbom', 'Okobo', 'AKW'),
(62, 'AkwaIbom', 'Onna', 'AKW'),
(63, 'AkwaIbom', 'Oron', 'AKW'),
(64, 'AkwaIbom', 'Oruk Anam', 'AKW'),
(65, 'AkwaIbom', 'Udung-Uko', 'AKW'),
(66, 'AkwaIbom', 'Ukanafun', 'AKW'),
(67, 'AkwaIbom', 'Uruan', 'AKW'),
(68, 'AkwaIbom', 'Urue-Offong/Oruko', 'AKW'),
(69, 'AkwaIbom', 'Uyo', 'AKW'),
(70, 'Anambra', 'Aguata', 'ANA'),
(71, 'Anambra', 'Anambra East', 'ANA'),
(72, 'Anambra', 'Anambra West', 'ANA'),
(73, 'Anambra', 'Anaocha', 'ANA'),
(74, 'Anambra', 'Awka North', 'ANA'),
(75, 'Anambra', 'Awka South', 'ANA'),
(76, 'Anambra', 'Ayamelum', 'ANA'),
(77, 'Anambra', 'Dunukofia', 'ANA'),
(78, 'Anambra', 'Ekwusigo', 'ANA'),
(79, 'Anambra', 'Idemili North', 'ANA'),
(80, 'Anambra', 'Idemili South', 'ANA'),
(81, 'Anambra', 'Ihiala', 'ANA'),
(82, 'Anambra', 'Njikoka', 'ANA'),
(83, 'Anambra', 'Nnewi North', 'ANA'),
(84, 'Anambra', 'Nnewi South', 'ANA'),
(85, 'Anambra', 'Ogbaru', 'ANA'),
(86, 'Anambra', 'Onitsha North', 'ANA'),
(87, 'Anambra', 'Onitsha South', 'ANA'),
(88, 'Anambra', 'Orumba North', 'ANA'),
(89, 'Anambra', 'Orumba South', 'ANA'),
(90, 'Anambra', 'Oyi', 'ANA'),
(91, 'Bauchi', 'Alkaleri', 'BAU'),
(92, 'Bauchi', 'Bauchi', 'BAU'),
(93, 'Bauchi', 'Bogoro', 'BAU'),
(94, 'Bauchi', 'Damban', 'BAU'),
(95, 'Bauchi', 'Darazo', 'BAU'),
(96, 'Bauchi', 'Dass', 'BAU'),
(97, 'Bauchi', 'Gamawa', 'BAU'),
(98, 'Bauchi', 'Ganjuwa', 'BAU'),
(99, 'Bauchi', 'Giade', 'BAU'),
(100, 'Bauchi', 'Itas/Gadau', 'BAU'),
(101, 'Bauchi', 'Jama''are', 'BAU'),
(102, 'Bauchi', 'Katagum', 'BAU'),
(103, 'Bauchi', 'Kirfi', 'BAU'),
(104, 'Bauchi', 'Misau', 'BAU'),
(105, 'Bauchi', 'Ningi', 'BAU'),
(106, 'Bauchi', 'Shira', 'BAU'),
(107, 'Bauchi', 'Tafawa Balewa', 'BAU'),
(108, 'Bauchi', 'Toro', 'BAU'),
(109, 'Bauchi', 'Warji', 'BAU'),
(110, 'Bauchi', 'Zaki', 'BAU'),
(111, 'Bayelsa', 'Brass', 'BAY'),
(112, 'Bayelsa', 'Ekeremor', 'BAY'),
(113, 'Bayelsa', 'Kolokuma/Opokuma', 'BAY'),
(114, 'Bayelsa', 'Nembe', 'BAY'),
(115, 'Bayelsa', 'Ogbia', 'BAY'),
(116, 'Bayelsa', 'Sagbama', 'BAY'),
(117, 'Bayelsa', 'Southern Ijaw', 'BAY'),
(118, 'Bayelsa', 'Yenagoa', 'BAY'),
(119, 'Benue', 'Ado', 'BN'),
(120, 'Benue', 'Agatu', 'BN'),
(121, 'Benue', 'Apa', 'BN'),
(122, 'Benue', 'Buruku', 'BN'),
(123, 'Benue', 'Gboko', 'BN'),
(124, 'Benue', 'Guma', 'BN'),
(125, 'Benue', 'Gwer East', 'BN'),
(126, 'Benue', 'Gwer West', 'BN'),
(127, 'Benue', 'Katsina-Ala', 'BN'),
(128, 'Benue', 'Konshisha', 'BN'),
(129, 'Benue', 'Kwande', 'BN'),
(130, 'Benue', 'Logo', 'BN'),
(131, 'Benue', 'Makurdi', 'BN'),
(132, 'Benue', 'Obi', 'BN'),
(133, 'Benue', 'Ogbadibo', 'BN'),
(134, 'Benue', 'Ohimini', 'BN'),
(135, 'Benue', 'Oju', 'BN'),
(136, 'Benue', 'Okpokwu', 'BN'),
(137, 'Benue', 'Oturkpo', 'BN'),
(138, 'Benue', 'Tarka', 'BN'),
(139, 'Benue', 'Ukum', 'BN'),
(140, 'Benue', 'Ushongo', 'BN'),
(141, 'Benue', 'Vandeikya', 'BN'),
(142, 'Borno', 'Abadam', 'BOR'),
(143, 'Borno', 'Askira/Uba', 'BOR'),
(144, 'Borno', 'Bama', 'BOR'),
(145, 'Borno', 'Bayo', 'BOR'),
(146, 'Borno', 'Biu', 'BOR'),
(147, 'Borno', 'Chibok', 'BOR'),
(148, 'Borno', 'Damboa', 'BOR'),
(149, 'Borno', 'Dikwa', 'BOR'),
(150, 'Borno', 'Gubio', 'BOR'),
(151, 'Borno', 'Guzamala', 'BOR'),
(152, 'Borno', 'Gwoza', 'BOR'),
(153, 'Borno', 'Hawul', 'BOR'),
(154, 'Borno', 'Jere', 'BOR'),
(155, 'Borno', 'Kaga', 'BOR'),
(156, 'Borno', 'Kala/Balge', 'BOR'),
(157, 'Borno', 'Konduga', 'BOR'),
(158, 'Borno', 'Kukawa', 'BOR'),
(159, 'Borno', 'Kwaya Kusar', 'BOR'),
(160, 'Borno', 'Mafa', 'BOR'),
(161, 'Borno', 'Magumeri', 'BOR'),
(162, 'Borno', 'Maiduguri', 'BOR'),
(163, 'Borno', 'Marte', 'BOR'),
(164, 'Borno', 'Mobbar', 'BOR'),
(165, 'Borno', 'Monguno', 'BOR'),
(166, 'Borno', 'Ngala', 'BOR'),
(167, 'Borno', 'Nganzai', 'BOR'),
(168, 'Borno', 'Shani', 'BOR'),
(169, 'CrossRiver', 'Abi', 'CR'),
(170, 'CrossRiver', 'Akamkpa', 'CR'),
(171, 'CrossRiver', 'Akpabuyo', 'CR'),
(172, 'CrossRiver', 'Bakassi', 'CR'),
(173, 'CrossRiver', 'Bekwarra', 'CR'),
(174, 'CrossRiver', 'Biase', 'CR'),
(175, 'CrossRiver', 'Boki', 'CR'),
(176, 'CrossRiver', 'Calabar Municipal', 'CR'),
(177, 'CrossRiver', 'Calabar South', 'CR'),
(178, 'CrossRiver', 'Etung', 'CR'),
(179, 'CrossRiver', 'Ikom', 'CR'),
(180, 'CrossRiver', 'Obanliku', 'CR'),
(181, 'CrossRiver', 'Obubra', 'CR'),
(182, 'CrossRiver', 'Obudu', 'CR'),
(183, 'CrossRiver', 'Odukpani', 'CR'),
(184, 'CrossRiver', 'Ogoja', 'CR'),
(185, 'CrossRiver', 'Yakuur', 'CR'),
(186, 'CrossRiver', 'Yala', 'CR'),
(187, 'Delta', 'Aniocha North', 'DEL'),
(188, 'Delta', 'Aniocha South', 'DEL'),
(189, 'Delta', 'Bomadi', 'DEL'),
(190, 'Delta', 'Burutu', 'DEL'),
(191, 'Delta', 'Ethiope East', 'DEL'),
(192, 'Delta', 'Ethiope West', 'DEL'),
(193, 'Delta', 'Ika North East', 'DEL'),
(194, 'Delta', 'Ika South', 'DEL'),
(195, 'Delta', 'Isoko North', 'DEL'),
(196, 'Delta', 'Isoko South', 'DEL'),
(197, 'Delta', 'Ndokwa East', 'DEL'),
(198, 'Delta', 'Ndokwa West', 'DEL'),
(199, 'Delta', 'Okpe', 'DEL'),
(200, 'Delta', 'Oshimili North', 'DEL'),
(201, 'Delta', 'Oshimili South', 'DEL'),
(202, 'Delta', 'Patani', 'DEL'),
(203, 'Delta', 'Sapele', 'DEL'),
(204, 'Delta', 'Udu', 'DEL'),
(205, 'Delta', 'Ughelli North', 'DEL'),
(206, 'Delta', 'Ughelli South', 'DEL'),
(207, 'Delta', 'Ukwuani', 'DEL'),
(208, 'Delta', 'Uvwie', 'DEL'),
(209, 'Delta', 'Warri North', 'DEL'),
(210, 'Delta', 'Warri South', 'DEL'),
(211, 'Delta', 'Warri South West', 'DEL'),
(212, 'Ebonyi', 'Abakaliki', 'EBO'),
(213, 'Ebonyi', 'Afikpo North', 'EBO'),
(214, 'Ebonyi', 'Afikpo South (Edda)', 'EBO'),
(215, 'Ebonyi', 'Ebonyi', 'EBO'),
(216, 'Ebonyi', 'Ezza North', 'EBO'),
(217, 'Ebonyi', 'Ezza South', 'EBO'),
(218, 'Ebonyi', 'Ikwo', 'EBO'),
(219, 'Ebonyi', 'Ishielu', 'EBO'),
(220, 'Ebonyi', 'Ivo', 'EBO'),
(221, 'Ebonyi', 'Izzi', 'EBO'),
(222, 'Ebonyi', 'Ohaozara', 'EBO'),
(223, 'Ebonyi', 'Ohaukwu', 'EBO'),
(224, 'Ebonyi', 'Onicha', 'EBO'),
(225, 'Edo', 'Akoko-Edo', 'EDO'),
(226, 'Edo', 'Egor', 'EDO'),
(227, 'Edo', 'Esan Central', 'EDO'),
(228, 'Edo', 'Esan North-East', 'EDO'),
(229, 'Edo', 'Esan South-East', 'EDO'),
(230, 'Edo', 'Esan West', 'EDO'),
(231, 'Edo', 'Etsako Central', 'EDO'),
(232, 'Edo', 'Etsako East', 'EDO'),
(233, 'Edo', 'Etsako West', 'EDO'),
(234, 'Edo', 'Igueben', 'EDO'),
(235, 'Edo', 'Ikpoba Okha', 'EDO'),
(236, 'Edo', 'Oredo', 'EDO'),
(237, 'Edo', 'Orhionmwon', 'EDO'),
(238, 'Edo', 'Ovia North-East', 'EDO'),
(239, 'Edo', 'Ovia South-West', 'EDO'),
(240, 'Edo', 'Owan East', 'EDO'),
(241, 'Edo', 'Owan West', 'EDO'),
(242, 'Edo', 'Uhunmwonde', 'EDO'),
(243, 'Ekiti', 'Ado Ekiti', 'EKT'),
(244, 'Ekiti', 'Efon', 'EKT'),
(245, 'Ekiti', 'Ekiti East', 'EKT'),
(246, 'Ekiti', 'Ekiti South-West', 'EKT'),
(247, 'Ekiti', 'Ekiti West', 'EKT'),
(248, 'Ekiti', 'Emure', 'EKT'),
(249, 'Ekiti', 'Gbonyin', 'EKT'),
(250, 'Ekiti', 'Ido Osi', 'EKT'),
(251, 'Ekiti', 'Ijero', 'EKT'),
(252, 'Ekiti', 'Ikere', 'EKT'),
(253, 'Ekiti', 'Ikole', 'EKT'),
(254, 'Ekiti', 'Ilejemeje', 'EKT'),
(255, 'Ekiti', 'Irepodun/Ifelodun', 'EKT'),
(256, 'Ekiti', 'Ise/Orun', 'EKT'),
(257, 'Ekiti', 'Moba', 'EKT'),
(258, 'Ekiti', 'Oye', 'EKT'),
(259, 'Enugu', 'Aninri', 'ENU'),
(260, 'Enugu', 'Awgu', 'ENU'),
(261, 'Enugu', 'Enugu East', 'ENU'),
(262, 'Enugu', 'Enugu North', 'ENU'),
(263, 'Enugu', 'Enugu South', 'ENU'),
(264, 'Enugu', 'Ezeagu', 'ENU'),
(265, 'Enugu', 'Igbo Etiti', 'ENU'),
(266, 'Enugu', 'Igbo Eze North', 'ENU'),
(267, 'Enugu', 'Igbo Eze South', 'ENU'),
(268, 'Enugu', 'Isi Uzo', 'ENU'),
(269, 'Enugu', 'Nkanu East', 'ENU'),
(270, 'Enugu', 'Nkanu West', 'ENU'),
(271, 'Enugu', 'Nsukka', 'ENU'),
(272, 'Enugu', 'Oji River', 'ENU'),
(273, 'Enugu', 'Udenu', 'ENU'),
(274, 'Enugu', 'Udi', 'ENU'),
(275, 'Enugu', 'Uzo Uwani', 'ENU'),
(276, 'FCT', 'Abaji', 'FCT'),
(277, 'FCT', 'Bwari', 'FCT'),
(278, 'FCT', 'Gwagwalada', 'FCT'),
(279, 'FCT', 'Kuje', 'FCT'),
(280, 'FCT', 'Kwali', 'FCT'),
(281, 'FCT', 'Municipal Area Council', 'FCT'),
(282, 'Gombe', 'Akko', 'GOM'),
(283, 'Gombe', 'Balanga', 'GOM'),
(284, 'Gombe', 'Billiri', 'GOM'),
(285, 'Gombe', 'Dukku', 'GOM'),
(286, 'Gombe', 'Funakaye', 'GOM'),
(287, 'Gombe', 'Gombe', 'GOM'),
(288, 'Gombe', 'Kaltungo', 'GOM'),
(289, 'Gombe', 'Kwami', 'GOM'),
(290, 'Gombe', 'Nafada', 'GOM'),
(291, 'Gombe', 'Shongom', 'GOM'),
(292, 'Gombe', 'Yamaltu/Deba', 'GOM'),
(293, 'Imo', 'Aboh Mbaise', 'IMO'),
(294, 'Imo', 'Ahiazu Mbaise', 'IMO'),
(295, 'Imo', 'Ehime Mbano', 'IMO'),
(296, 'Imo', 'Ezinihitte', 'IMO'),
(297, 'Imo', 'Ideato North', 'IMO'),
(298, 'Imo', 'Ideato South', 'IMO'),
(299, 'Imo', 'Ihitte/Uboma', 'IMO'),
(300, 'Imo', 'Ikeduru', 'IMO'),
(301, 'Imo', 'Isiala Mbano', 'IMO'),
(302, 'Imo', 'Isu', 'IMO'),
(303, 'Imo', 'Mbaitoli', 'IMO'),
(304, 'Imo', 'Ngor Okpala', 'IMO'),
(305, 'Imo', 'Njaba', 'IMO'),
(306, 'Imo', 'Nkwerre', 'IMO'),
(307, 'Imo', 'Nwangele', 'IMO'),
(308, 'Imo', 'Obowo', 'IMO'),
(309, 'Imo', 'Oguta', 'IMO'),
(310, 'Imo', 'Ohaji/Egbema', 'IMO'),
(311, 'Imo', 'Okigwe', 'IMO'),
(312, 'Imo', 'Orlu', 'IMO'),
(313, 'Imo', 'Orsu', 'IMO'),
(314, 'Imo', 'Oru East', 'IMO'),
(315, 'Imo', 'Oru West', 'IMO'),
(316, 'Imo', 'Owerri Municipal', 'IMO'),
(317, 'Imo', 'Owerri North', 'IMO'),
(318, 'Imo', 'Owerri West', 'IMO'),
(319, 'Imo', 'Unuimo', 'IMO'),
(320, 'Jigawa', 'Auyo', 'JIG'),
(321, 'Jigawa', 'Babura', 'JIG'),
(322, 'Jigawa', 'Biriniwa', 'JIG'),
(323, 'Jigawa', 'Birnin Kudu', 'JIG'),
(324, 'Jigawa', 'Buji', 'JIG'),
(325, 'Jigawa', 'Dutse', 'JIG'),
(326, 'Jigawa', 'Gagarawa', 'JIG'),
(327, 'Jigawa', 'Garki', 'JIG'),
(328, 'Jigawa', 'Gumel', 'JIG'),
(329, 'Jigawa', 'Guri', 'JIG'),
(330, 'Jigawa', 'Gwaram', 'JIG'),
(331, 'Jigawa', 'Gwiwa', 'JIG'),
(332, 'Jigawa', 'Hadejia', 'JIG'),
(333, 'Jigawa', 'Jahun', 'JIG'),
(334, 'Jigawa', 'Kafin Hausa', 'JIG'),
(335, 'Jigawa', 'Kaugama', 'JIG'),
(336, 'Jigawa', 'Kazaure', 'JIG'),
(337, 'Jigawa', 'Kiri Kasama', 'JIG'),
(338, 'Jigawa', 'Kiyawa', 'JIG'),
(339, 'Jigawa', 'Maigatari', 'JIG'),
(340, 'Jigawa', 'Malam Madori', 'JIG'),
(341, 'Jigawa', 'Miga', 'JIG'),
(342, 'Jigawa', 'Ringim', 'JIG'),
(343, 'Jigawa', 'Roni', 'JIG'),
(344, 'Jigawa', 'Sule Tankarkar', 'JIG'),
(345, 'Jigawa', 'Taura', 'JIG'),
(346, 'Jigawa', 'Yankwashi', 'JIG'),
(347, 'Kaduna', 'Birnin Gwari', 'KAD'),
(348, 'Kaduna', 'Chikun', 'KAD'),
(349, 'Kaduna', 'Giwa', 'KAD'),
(350, 'Kaduna', 'Igabi', 'KAD'),
(351, 'Kaduna', 'Ikara', 'KAD'),
(352, 'Kaduna', 'Jaba', 'KAD'),
(353, 'Kaduna', 'Jema''a', 'KAD'),
(354, 'Kaduna', 'Kachia', 'KAD'),
(355, 'Kaduna', 'Kaduna North', 'KAD'),
(356, 'Kaduna', 'Kaduna South', 'KAD'),
(357, 'Kaduna', 'Kagarko', 'KAD'),
(358, 'Kaduna', 'Kajuru', 'KAD'),
(359, 'Kaduna', 'Kaura', 'KAD'),
(360, 'Kaduna', 'Kauru', 'KAD'),
(361, 'Kaduna', 'Kubau', 'KAD'),
(362, 'Kaduna', 'Kudan', 'KAD'),
(363, 'Kaduna', 'Lere', 'KAD'),
(364, 'Kaduna', 'Makarfi', 'KAD'),
(365, 'Kaduna', 'Sabon Gari', 'KAD'),
(366, 'Kaduna', 'Sanga', 'KAD'),
(367, 'Kaduna', 'Soba', 'KAD'),
(368, 'Kaduna', 'Zangon Kataf', 'KAD'),
(369, 'Kaduna', 'Zaria', 'KAD'),
(370, 'Kano', 'Ajingi', 'KAN'),
(371, 'Kano', 'Albasu', 'KAN'),
(372, 'Kano', 'Bagwai', 'KAN'),
(373, 'Kano', 'Bebeji', 'KAN'),
(374, 'Kano', 'Bichi', 'KAN'),
(375, 'Kano', 'Bunkure', 'KAN'),
(376, 'Kano', 'Dala', 'KAN'),
(377, 'Kano', 'Dambatta', 'KAN'),
(378, 'Kano', 'Dawakin Kudu', 'KAN'),
(379, 'Kano', 'Dawakin Tofa', 'KAN'),
(380, 'Kano', 'Doguwa', 'KAN'),
(381, 'Kano', 'Fagge', 'KAN'),
(382, 'Kano', 'Gabasawa', 'KAN'),
(383, 'Kano', 'Garko', 'KAN'),
(384, 'Kano', 'Garun Mallam', 'KAN'),
(385, 'Kano', 'Gaya', 'KAN'),
(386, 'Kano', 'Gezawa', 'KAN'),
(387, 'Kano', 'Gwale', 'KAN'),
(388, 'Kano', 'Gwarzo', 'KAN'),
(389, 'Kano', 'Kabo', 'KAN'),
(390, 'Kano', 'Kano Municipal', 'KAN'),
(391, 'Kano', 'Karaye', 'KAN'),
(392, 'Kano', 'Kibiya', 'KAN'),
(393, 'Kano', 'Kiru', 'KAN'),
(394, 'Kano', 'Kumbotso', 'KAN'),
(395, 'Kano', 'Kunchi', 'KAN'),
(396, 'Kano', 'Kura', 'KAN'),
(397, 'Kano', 'Madobi', 'KAN'),
(398, 'Kano', 'Makoda', 'KAN'),
(399, 'Kano', 'Minjibir', 'KAN'),
(400, 'Kano', 'Nasarawa', 'KAN'),
(401, 'Kano', 'Rano', 'KAN'),
(402, 'Kano', 'Rimin Gado', 'KAN'),
(403, 'Kano', 'Rogo', 'KAN'),
(404, 'Kano', 'Shanono', 'KAN'),
(405, 'Kano', 'Sumaila', 'KAN'),
(406, 'Kano', 'Takai', 'KAN'),
(407, 'Kano', 'Tarauni', 'KAN'),
(408, 'Kano', 'Tofa', 'KAN'),
(409, 'Kano', 'Tsanyawa', 'KAN'),
(410, 'Kano', 'Tudun Wada', 'KAN'),
(411, 'Kano', 'Ungogo', 'KAN'),
(412, 'Kano', 'Warawa', 'KAN'),
(413, 'Kano', 'Wudil', 'KAN'),
(414, 'Katsina', 'Bakori', 'KAT'),
(415, 'Katsina', 'Batagarawa', 'KAT'),
(416, 'Katsina', 'Batsari', 'KAT'),
(417, 'Katsina', 'Baure', 'KAT'),
(418, 'Katsina', 'Bindawa', 'KAT'),
(419, 'Katsina', 'Charanchi', 'KAT'),
(420, 'Katsina', 'Dan Musa', 'KAT'),
(421, 'Katsina', 'Dandume', 'KAT'),
(422, 'Katsina', 'Danja', 'KAT'),
(423, 'Katsina', 'Daura', 'KAT'),
(424, 'Katsina', 'Dutsi', 'KAT'),
(425, 'Katsina', 'Dutsin Ma', 'KAT'),
(426, 'Katsina', 'Faskari', 'KAT'),
(427, 'Katsina', 'Funtua', 'KAT'),
(428, 'Katsina', 'Ingawa', 'KAT'),
(429, 'Katsina', 'Jibia', 'KAT'),
(430, 'Katsina', 'Kafur', 'KAT'),
(431, 'Katsina', 'Kaita', 'KAT'),
(432, 'Katsina', 'Kankara', 'KAT'),
(433, 'Katsina', 'Kankia', 'KAT'),
(434, 'Katsina', 'Katsina', 'KAT'),
(435, 'Katsina', 'Kurfi', 'KAT'),
(436, 'Katsina', 'Kusada', 'KAT'),
(437, 'Katsina', 'Mai''Adua', 'KAT'),
(438, 'Katsina', 'Malumfashi', 'KAT'),
(439, 'Katsina', 'Mani', 'KAT'),
(440, 'Katsina', 'Mashi', 'KAT'),
(441, 'Katsina', 'Matazu', 'KAT'),
(442, 'Katsina', 'Musawa', 'KAT'),
(443, 'Katsina', 'Rimi', 'KAT'),
(444, 'Katsina', 'Sabuwa', 'KAT'),
(445, 'Katsina', 'Safana', 'KAT'),
(446, 'Katsina', 'Sandamu', 'KAT'),
(447, 'Katsina', 'Zango', 'KAT'),
(448, 'Kebbi', 'Aleiro', 'KEB'),
(449, 'Kebbi', 'Arewa Dandi', 'KEB'),
(450, 'Kebbi', 'Argungu', 'KEB'),
(451, 'Kebbi', 'Augie', 'KEB'),
(452, 'Kebbi', 'Bagudo', 'KEB'),
(453, 'Kebbi', 'Birnin Kebbi', 'KEB'),
(454, 'Kebbi', 'Bunza', 'KEB'),
(455, 'Kebbi', 'Dandi', 'KEB'),
(456, 'Kebbi', 'Fakai', 'KEB'),
(457, 'Kebbi', 'Gwandu', 'KEB'),
(458, 'Kebbi', 'Jega', 'KEB'),
(459, 'Kebbi', 'Kalgo', 'KEB'),
(460, 'Kebbi', 'Koko/Besse', 'KEB'),
(461, 'Kebbi', 'Maiyama', 'KEB'),
(462, 'Kebbi', 'Ngaski', 'KEB'),
(463, 'Kebbi', 'Sakaba', 'KEB'),
(464, 'Kebbi', 'Shanga', 'KEB'),
(465, 'Kebbi', 'Suru', 'KEB'),
(466, 'Kebbi', 'Wasagu/Danko', 'KEB'),
(467, 'Kebbi', 'Yauri', 'KEB'),
(468, 'Kebbi', 'Zuru', 'KEB'),
(469, 'Kogi', 'Adavi', 'KOG'),
(470, 'Kogi', 'Ajaokuta', 'KOG'),
(471, 'Kogi', 'Ankpa', 'KOG'),
(472, 'Kogi', 'Bassa', 'KOG'),
(473, 'Kogi', 'Dekina', 'KOG'),
(474, 'Kogi', 'Ibaji', 'KOG'),
(475, 'Kogi', 'Idah', 'KOG'),
(476, 'Kogi', 'Igalamela Odolu', 'KOG'),
(477, 'Kogi', 'Ijumu', 'KOG'),
(478, 'Kogi', 'Kabba/Bunu', 'KOG'),
(479, 'Kogi', 'Kogi', 'KOG'),
(480, 'Kogi', 'Lokoja', 'KOG'),
(481, 'Kogi', 'Mopa Muro', 'KOG'),
(482, 'Kogi', 'Ofu', 'KOG'),
(483, 'Kogi', 'Ogori/Magongo', 'KOG'),
(484, 'Kogi', 'Okehi', 'KOG'),
(485, 'Kogi', 'Okene', 'KOG'),
(486, 'Kogi', 'Olamaboro', 'KOG'),
(487, 'Kogi', 'Omala', 'KOG'),
(488, 'Kogi', 'Yagba East', 'KOG'),
(489, 'Kogi', 'Yagba West', 'KOG'),
(490, 'Kwara', 'Asa', 'KWA'),
(491, 'Kwara', 'Baruten', 'KWA'),
(492, 'Kwara', 'Edu', 'KWA'),
(493, 'Kwara', 'Ekiti', 'KWA'),
(494, 'Kwara', 'Ifelodun', 'KWA'),
(495, 'Kwara', 'Ilorin East', 'KWA'),
(496, 'Kwara', 'Ilorin South', 'KWA'),
(497, 'Kwara', 'Ilorin West', 'KWA'),
(498, 'Kwara', 'Irepodun', 'KWA'),
(499, 'Kwara', 'Isin', 'KWA'),
(500, 'Kwara', 'Kaiama', 'KWA'),
(501, 'Kwara', 'Moro', 'KWA'),
(502, 'Kwara', 'Offa', 'KWA'),
(503, 'Kwara', 'Oke Ero', 'KWA'),
(504, 'Kwara', 'Oyun', 'KWA'),
(505, 'Kwara', 'Pategi', 'KWA'),
(506, 'Lagos', 'Agege', 'LAG'),
(507, 'Lagos', 'Ajeromi-Ifelodun', 'LAG'),
(508, 'Lagos', 'Alimosho', 'LAG'),
(509, 'Lagos', 'Amuwo-Odofin', 'LAG'),
(510, 'Lagos', 'Apapa', 'LAG'),
(511, 'Lagos', 'Badagry', 'LAG'),
(512, 'Lagos', 'Epe', 'LAG'),
(513, 'Lagos', 'Eti Osa', 'LAG'),
(514, 'Lagos', 'Ibeju-Lekki', 'LAG'),
(515, 'Lagos', 'Ifako-Ijaiye', 'LAG'),
(516, 'Lagos', 'Ikeja', 'LAG'),
(517, 'Lagos', 'Ikorodu', 'LAG'),
(518, 'Lagos', 'Kosofe', 'LAG'),
(519, 'Lagos', 'Lagos Island', 'LAG'),
(520, 'Lagos', 'Lagos Mainland', 'LAG'),
(521, 'Lagos', 'Mushin', 'LAG'),
(522, 'Lagos', 'Ojo', 'LAG'),
(523, 'Lagos', 'Oshodi-Isolo', 'LAG'),
(524, 'Lagos', 'Shomolu', 'LAG'),
(525, 'Lagos', 'Surulere', 'LAG'),
(526, 'Nasarawa', 'Akwanga', 'NAS'),
(527, 'Nasarawa', 'Awe', 'NAS'),
(528, 'Nasarawa', 'Doma', 'NAS'),
(529, 'Nasarawa', 'Karu', 'NAS'),
(530, 'Nasarawa', 'Keana', 'NAS'),
(531, 'Nasarawa', 'Keffi', 'NAS'),
(532, 'Nasarawa', 'Kokona', 'NAS'),
(533, 'Nasarawa', 'Lafia', 'NAS'),
(534, 'Nasarawa', 'Nasarawa', 'NAS'),
(535, 'Nasarawa', 'Nasarawa Egon', 'NAS'),
(536, 'Nasarawa', 'Obi', 'NAS'),
(537, 'Nasarawa', 'Toto', 'NAS'),
(538, 'Nasarawa', 'Wamba', 'NAS'),
(539, 'Niger', 'Agaie', 'NIG'),
(540, 'Niger', 'Agwara', 'NIG'),
(541, 'Niger', 'Bida', 'NIG'),
(542, 'Niger', 'Borgu', 'NIG'),
(543, 'Niger', 'Bosso', 'NIG'),
(544, 'Niger', 'Chanchaga', 'NIG'),
(545, 'Niger', 'Edati', 'NIG'),
(546, 'Niger', 'Gbako', 'NIG'),
(547, 'Niger', 'Gurara', 'NIG'),
(548, 'Niger', 'Katcha', 'NIG'),
(549, 'Niger', 'Kontagora', 'NIG'),
(550, 'Niger', 'Lapai', 'NIG'),
(551, 'Niger', 'Lavun', 'NIG'),
(552, 'Niger', 'Magama', 'NIG'),
(553, 'Niger', 'Mariga', 'NIG'),
(554, 'Niger', 'Mashegu', 'NIG'),
(555, 'Niger', 'Mokwa', 'NIG'),
(556, 'Niger', 'Moya', 'NIG'),
(557, 'Niger', 'Paikoro', 'NIG'),
(558, 'Niger', 'Rafi', 'NIG'),
(559, 'Niger', 'Rijau', 'NIG'),
(560, 'Niger', 'Shiroro', 'NIG'),
(561, 'Niger', 'Suleja', 'NIG'),
(562, 'Niger', 'Tafa', 'NIG'),
(563, 'Niger', 'Wushishi', 'NIG'),
(564, 'Ogun', 'Abeokuta North', 'OGU'),
(565, 'Ogun', 'Abeokuta South', 'OGU'),
(566, 'Ogun', 'Ado-Odo/Ota', 'OGU'),
(567, 'Ogun', 'Ewekoro', 'OGU'),
(568, 'Ogun', 'Ifo', 'OGU'),
(569, 'Ogun', 'Ijebu East', 'OGU'),
(570, 'Ogun', 'Ijebu North', 'OGU'),
(571, 'Ogun', 'Ijebu North East', 'OGU'),
(572, 'Ogun', 'Ijebu Ode', 'OGU'),
(573, 'Ogun', 'Ikenne', 'OGU'),
(574, 'Ogun', 'Imeko Afon', 'OGU'),
(575, 'Ogun', 'Ipokia', 'OGU'),
(576, 'Ogun', 'Obafemi Owode', 'OGU'),
(577, 'Ogun', 'Odeda', 'OGU'),
(578, 'Ogun', 'Odogbolu', 'OGU'),
(579, 'Ogun', 'Ogun Waterside', 'OGU'),
(580, 'Ogun', 'Remo North', 'OGU'),
(581, 'Ogun', 'Shagamu', 'OGU'),
(582, 'Ogun', 'Yewa North', 'OGU'),
(583, 'Ogun', 'Yewa South', 'OGU'),
(584, 'Ondo', 'Akoko North-East', 'OND'),
(585, 'Ondo', 'Akoko North-West', 'OND'),
(586, 'Ondo', 'Akoko South-East', 'OND'),
(587, 'Ondo', 'Akoko South-West', 'OND'),
(588, 'Ondo', 'Akure North', 'OND'),
(589, 'Ondo', 'Akure South', 'OND'),
(590, 'Ondo', 'Ese Odo', 'OND'),
(591, 'Ondo', 'Idanre', 'OND'),
(592, 'Ondo', 'Ifedore', 'OND'),
(593, 'Ondo', 'Ilaje', 'OND'),
(594, 'Ondo', 'Ile Oluji/Okeigbo', 'OND'),
(595, 'Ondo', 'Irele', 'OND'),
(596, 'Ondo', 'Odigbo', 'OND'),
(597, 'Ondo', 'Okitipupa', 'OND'),
(598, 'Ondo', 'Ondo East', 'OND'),
(599, 'Ondo', 'Ondo West', 'OND'),
(600, 'Ondo', 'Ose', 'OND'),
(601, 'Ondo', 'Owo', 'OND'),
(602, 'Osun', 'Aiyedaade', 'OSU'),
(603, 'Osun', 'Aiyedire', 'OSU'),
(604, 'Osun', 'Atakunmosa East', 'OSU'),
(605, 'Osun', 'Atakunmosa West', 'OSU'),
(606, 'Osun', 'Boluwaduro', 'OSU'),
(607, 'Osun', 'Boripe', 'OSU'),
(608, 'Osun', 'Ede North', 'OSU'),
(609, 'Osun', 'Ede South', 'OSU'),
(610, 'Osun', 'Egbedore', 'OSU'),
(611, 'Osun', 'Ejigbo', 'OSU'),
(612, 'Osun', 'Ife Central', 'OSU'),
(613, 'Osun', 'Ife East', 'OSU'),
(614, 'Osun', 'Ife North', 'OSU'),
(615, 'Osun', 'Ife South', 'OSU'),
(616, 'Osun', 'Ifedayo', 'OSU'),
(617, 'Osun', 'Ifelodun', 'OSU'),
(618, 'Osun', 'Ila', 'OSU'),
(619, 'Osun', 'Ilesa East', 'OSU'),
(620, 'Osun', 'Ilesa West', 'OSU'),
(621, 'Osun', 'Irepodun', 'OSU'),
(622, 'Osun', 'Irewole', 'OSU'),
(623, 'Osun', 'Isokan', 'OSU'),
(624, 'Osun', 'Iwo', 'OSU'),
(625, 'Osun', 'Obokun', 'OSU'),
(626, 'Osun', 'Odo Otin', 'OSU'),
(627, 'Osun', 'Ola Oluwa', 'OSU'),
(628, 'Osun', 'Olorunda', 'OSU'),
(629, 'Osun', 'Oriade', 'OSU'),
(630, 'Osun', 'Orolu', 'OSU'),
(631, 'Osun', 'Osogbo', 'OSU'),
(632, 'Oyo', 'Afijio', 'OYO'),
(633, 'Oyo', 'Akinyele', 'OYO'),
(634, 'Oyo', 'Atiba', 'OYO'),
(635, 'Oyo', 'Atisbo', 'OYO'),
(636, 'Oyo', 'Egbeda', 'OYO'),
(637, 'Oyo', 'Ibadan North', 'OYO'),
(638, 'Oyo', 'Ibadan North-East', 'OYO'),
(639, 'Oyo', 'Ibadan North-West', 'OYO'),
(640, 'Oyo', 'Ibadan South-East', 'OYO'),
(641, 'Oyo', 'Ibadan South-West', 'OYO'),
(642, 'Oyo', 'Ibarapa Central', 'OYO'),
(643, 'Oyo', 'Ibarapa East', 'OYO'),
(644, 'Oyo', 'Ibarapa North', 'OYO'),
(645, 'Oyo', 'Ido', 'OYO'),
(646, 'Oyo', 'Irepo', 'OYO'),
(647, 'Oyo', 'Iseyin', 'OYO'),
(648, 'Oyo', 'Itesiwaju', 'OYO'),
(649, 'Oyo', 'Iwajowa', 'OYO'),
(650, 'Oyo', 'Kajola', 'OYO'),
(651, 'Oyo', 'Lagelu', 'OYO'),
(652, 'Oyo', 'Ogbomosho North', 'OYO'),
(653, 'Oyo', 'Ogbomosho South', 'OYO'),
(654, 'Oyo', 'Ogo Oluwa', 'OYO'),
(655, 'Oyo', 'Olorunsogo', 'OYO'),
(656, 'Oyo', 'Oluyole', 'OYO'),
(657, 'Oyo', 'Ona Ara', 'OYO'),
(658, 'Oyo', 'Orelope', 'OYO'),
(659, 'Oyo', 'Ori Ire', 'OYO'),
(660, 'Oyo', 'Oyo', 'OYO'),
(661, 'Oyo', 'Oyo East', 'OYO'),
(662, 'Oyo', 'Saki East', 'OYO'),
(663, 'Oyo', 'Saki West', 'OYO'),
(664, 'Oyo', 'Surulere', 'OYO'),
(665, 'Plateau', 'Barkin Ladi', 'PLT'),
(666, 'Plateau', 'Bassa', 'PLT'),
(667, 'Plateau', 'Bokkos', 'PLT'),
(668, 'Plateau', 'Jos East', 'PLT'),
(669, 'Plateau', 'Jos North', 'PLT'),
(670, 'Plateau', 'Jos South', 'PLT'),
(671, 'Plateau', 'Kanam', 'PLT'),
(672, 'Plateau', 'Kanke', 'PLT'),
(673, 'Plateau', 'Langtang North', 'PLT'),
(674, 'Plateau', 'Langtang South', 'PLT'),
(675, 'Plateau', 'Mangu', 'PLT'),
(676, 'Plateau', 'Mikang', 'PLT'),
(677, 'Plateau', 'Pankshin', 'PLT'),
(678, 'Plateau', 'Qua''an Pan', 'PLT'),
(679, 'Plateau', 'Riyom', 'PLT'),
(680, 'Plateau', 'Shendam', 'PLT'),
(681, 'Plateau', 'Wase', 'PLT'),
(682, 'Rivers', 'Abua/Odual', 'RVR'),
(683, 'Rivers', 'Ahoada East', 'RVR'),
(684, 'Rivers', 'Ahoada West', 'RVR'),
(685, 'Rivers', 'Akuku-Toru', 'RVR'),
(686, 'Rivers', 'Andoni', 'RVR'),
(687, 'Rivers', 'Asari-Toru', 'RVR'),
(688, 'Rivers', 'Bonny', 'RVR'),
(689, 'Rivers', 'Degema', 'RVR'),
(690, 'Rivers', 'Eleme', 'RVR'),
(691, 'Rivers', 'Emuoha', 'RVR'),
(692, 'Rivers', 'Etche', 'RVR'),
(693, 'Rivers', 'Gokana', 'RVR'),
(694, 'Rivers', 'Ikwerre', 'RVR'),
(695, 'Rivers', 'Khana', 'RVR'),
(696, 'Rivers', 'Obio/Akpor', 'RVR'),
(697, 'Rivers', 'Ogba/Egbema/Ndoni', 'RVR'),
(698, 'Rivers', 'Ogu/Bolo', 'RVR'),
(699, 'Rivers', 'Okrika', 'RVR'),
(700, 'Rivers', 'Omuma', 'RVR'),
(701, 'Rivers', 'Opobo/Nkoro', 'RVR'),
(702, 'Rivers', 'Oyigbo', 'RVR'),
(703, 'Rivers', 'Port Harcourt', 'RVR'),
(704, 'Rivers', 'Tai', 'RVR'),
(705, 'Sokoto', 'Binji', 'SOK'),
(706, 'Sokoto', 'Bodinga', 'SOK'),
(707, 'Sokoto', 'Dange Shuni', 'SOK'),
(708, 'Sokoto', 'Gada', 'SOK'),
(709, 'Sokoto', 'Goronyo', 'SOK'),
(710, 'Sokoto', 'Gudu', 'SOK'),
(711, 'Sokoto', 'Gwadabawa', 'SOK'),
(712, 'Sokoto', 'Illela', 'SOK'),
(713, 'Sokoto', 'Isa', 'SOK'),
(714, 'Sokoto', 'Kebbe', 'SOK'),
(715, 'Sokoto', 'Kware', 'SOK'),
(716, 'Sokoto', 'Rabah', 'SOK'),
(717, 'Sokoto', 'Sabon Birni', 'SOK'),
(718, 'Sokoto', 'Shagari', 'SOK'),
(719, 'Sokoto', 'Silame', 'SOK'),
(720, 'Sokoto', 'Sokoto North', 'SOK'),
(721, 'Sokoto', 'Sokoto South', 'SOK'),
(722, 'Sokoto', 'Tambuwal', 'SOK'),
(723, 'Sokoto', 'Tangaza', 'SOK'),
(724, 'Sokoto', 'Tureta', 'SOK'),
(725, 'Sokoto', 'Wamako', 'SOK'),
(726, 'Sokoto', 'Wurno', 'SOK'),
(727, 'Sokoto', 'Yabo', 'SOK'),
(728, 'Taraba', 'Ardo Kola', 'TAR'),
(729, 'Taraba', 'Bali', 'TAR'),
(730, 'Taraba', 'Donga', 'TAR'),
(731, 'Taraba', 'Gashaka', 'TAR'),
(732, 'Taraba', 'Gassol', 'TAR'),
(733, 'Taraba', 'Ibi', 'TAR'),
(734, 'Taraba', 'Jalingo', 'TAR'),
(735, 'Taraba', 'Karim Lamido', 'TAR'),
(736, 'Taraba', 'Kumi', 'TAR'),
(737, 'Taraba', 'Lau', 'TAR'),
(738, 'Taraba', 'Sardauna', 'TAR'),
(739, 'Taraba', 'Takum', 'TAR'),
(740, 'Taraba', 'Ussa', 'TAR'),
(741, 'Taraba', 'Wukari', 'TAR'),
(742, 'Taraba', 'Yorro', 'TAR'),
(743, 'Taraba', 'Zing', 'TAR'),
(744, 'Yobe', 'Bade', 'YOB'),
(745, 'Yobe', 'Bursari', 'YOB'),
(746, 'Yobe', 'Damaturu', 'YOB'),
(747, 'Yobe', 'Fika', 'YOB'),
(748, 'Yobe', 'Fune', 'YOB'),
(749, 'Yobe', 'Geidam', 'YOB'),
(750, 'Yobe', 'Gujba', 'YOB'),
(751, 'Yobe', 'Gulani', 'YOB'),
(752, 'Yobe', 'Jakusko', 'YOB'),
(753, 'Yobe', 'Karasuwa', 'YOB'),
(754, 'Yobe', 'Machina', 'YOB'),
(755, 'Yobe', 'Nangere', 'YOB'),
(756, 'Yobe', 'Nguru', 'YOB'),
(757, 'Yobe', 'Potiskum', 'YOB'),
(758, 'Yobe', 'Tarmuwa', 'YOB'),
(759, 'Yobe', 'Yunusari', 'YOB'),
(760, 'Yobe', 'Yusufari', 'YOB'),
(761, 'Zamfara', 'Anka', 'ZAM'),
(762, 'Zamfara', 'Bakura', 'ZAM'),
(763, 'Zamfara', 'Birnin Magaji/Kiyaw', 'ZAM'),
(764, 'Zamfara', 'Bukkuyum', 'ZAM'),
(765, 'Zamfara', 'Bungudu', 'ZAM'),
(766, 'Zamfara', 'Chafe', 'ZAM'),
(767, 'Zamfara', 'Gummi', 'ZAM'),
(768, 'Zamfara', 'Gusau', 'ZAM'),
(769, 'Zamfara', 'Kaura Namoda', 'ZAM'),
(770, 'Zamfara', 'Maradun', 'ZAM'),
(771, 'Zamfara', 'Maru', 'ZAM'),
(772, 'Zamfara', 'Shinkafi', 'ZAM'),
(773, 'Zamfara', 'Talata Mafara', 'ZAM'),
(774, 'Zamfara', 'Zurmi', 'ZAM');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id` int(11) NOT NULL,
  `newsTitle` tinytext NOT NULL,
  `newsAuthor` tinytext NOT NULL,
  `Details` text NOT NULL,
  `link` varchar(60) NOT NULL,
  `picture` tinytext NOT NULL,
  `year` year(4) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(10) NOT NULL,
  `time` varchar(45) NOT NULL,
  `contentimage1` tinytext NOT NULL,
  `contentimage2` tinytext NOT NULL,
  `contentimage3` tinytext NOT NULL,
  `contentimage4` tinytext NOT NULL,
  `contentimage5` tinytext NOT NULL,
  `video_path` tinytext NOT NULL,
  `posterID` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `newsTitle`, `newsAuthor`, `Details`, `link`, `picture`, `year`, `month`, `day`, `time`, `contentimage1`, `contentimage2`, `contentimage3`, `contentimage4`, `contentimage5`, `video_path`, `posterID`, `status`) VALUES
(1, '  7 SATELLITE PRISONS RE-OPENED IN THE NORTH EAST', '', '    The Controller-General of Prisons, Ja’afaru Ahmed has re-opened 8 out of the 9 Satellite Prisons in Bauchi State, North East of Nigeria that were closed down in 2012 in the wake of Boko Haram insurgency after securing the approval of the Honourable Minister of Interior, Lt. General Abdulrahman Dambazau (Rtd), CFR, PhD. The satellite prisons are Alkaleri, Burra, Darazo, Katagum, Shira, Tafa Balewa and Toro. They were re-opened on Monday 15th August, 2016. Gamawa, the 8th satellite prison will however remain closed till it’s conducive enough to receive prisoners under safe and humane conditions.  Prisoners are drawn from main prisons that had borne the burden of accommodating inmates in the state while the insurgency lasted. The re-opening of the satellite prisons will significantly reduced congestion and the attendant management difficulties in the main prisons across the state. Recall that due to the Boko Haram insurgency that affected most government security establishments a couple of years back, some prisons in the North Eastern zone were closed down. DCP OF EnoborePPROFor: Controller-General of Prisons25th August, 2016', '893445', 'images/uploads/prison_building_old.jpg', 2018, '01', '16', '', '', '', '', '', '', '', 'admin@pris', 1),
(2, '  THE CONTROLLER GENERAL OF PRISONS COMMISSIONS 133 ASSISTANT SUPERINTENDENTS OF PRISONS', '', '    \r\nThe Controller General of Prisons, Ahmed Ja’afaru, has commissioned 133 Assistant Superintendents of Prisons, who just concluded their six months training at the Prisons Staff College, Barnawa, Kaduna. \r\nThe Course tagged 24th ASP Basic Course International had in participation 123 Nigerians and 10 allied officers from South Sudan. \r\nThe Controller General of Prisons who was represented at the Passing out ceremony by the Deputy Controller General of Prisons, in charge of Finance and Budget Directorate, while congratulating the graduating officers admonished them to be good ambassadors of the college and by extension the Service. \r\nJa’afaru explained that the Prisons Staff College, which was established in 1986, was set up for the training of senior Prisons officers who hitherto were sent overseas for courses. He further explained that the Basic Course was primarily designed for Assistant Superintendents of Prisons and other senior officers to equip them with the basic knowhow of Prisons management. He expressed optimism that the graduands have been adequately exposed to the basic knowledge of the Corrections profession. \r\nHe encouraged the graduating officers to execute their duties henceforth with a new zeal pointing out that the Corrections profession demands absolute commitment, foresight, loyalty, perseverance and patriotism to achieve its Mandate. \r\nExpressing his discontent at the recent spate of escapes and jailbreaks he admonished the cadets to show commitment to the actualisation of the mandate of the Service, chief of which is the safe custody of all legally committed to the prisons, the CGP warned that none who is found wanting due to negligence of duty would be spared.  \r\nJa’afaru acknowledged the enormity of the task ahead of the graduands but assured them of the commitment of the Management of the Prisons to ensure that structures and processes are put in place to enhance effective performance of duties by all Prison officers. \r\nTo the foreign participants from South Sudan the CGP urged them to be good ambassadors of the college in particular and the country in general as they put to use the knowledge acquired to create positive changes that would enhance the justice system in their country.\r\nHighlight of the ceremony was a beautiful parade display by the graduating students which was indeed a delight to watch.\r\n10 Students – 1 South Sudanese and 9 Nigerian – who excelled in various fields were publicly acknowledged and rewarded. The fields include, academics, fields activities, leadership, discipline and marksmanship.   \r\nThe Ambassador of South Sudan, Riek Puok Riek, PhD, was also present with his members of staff to witness the ceremony. Also in attendance, were dignitaries from the Police, the Immigrations and Nigeria Security and Civil Defence Corps.', '898923', 'images/uploads/cgp_news.jpg', 2018, '01', '16', '', '', '', '', '', '', '', 'admin@pris', 1),
(3, '  26 INMATES OF ABAKALIKI PRISON REGAIN FROM', '', '<p>&nbsp;</p>\r\n<p style="margin: 0px 0px 13.33px; text-align: justify;"><span style="font-family: Cambria; font-size: x-large;">26 inmates of Abakaliki Prison, Ebonyi State have regained their freedom courtesy of the visit of the Chief Judge of Ebonyi State, Honourable Justice Aloy Nweke Nwankwo.</span></p>\r\n<p>&nbsp;</p>\r\n<p style="margin: 0px 0px 13.33px; text-align: justify;"><span style="font-family: Cambria; font-size: x-large;">According to ASP Iyasei Nneka, the Nigerian Prisons Ebonyi Command Public Relations Officer, the inmates included 18 who were granted bail and another 8 including a juvenile who were discharged. The inmates released were awaiting trial inmates most of who have stayed longer than they would have stayed serving the maximum sentence for the charge against them had they been found guilty. The Chief Judge therefore had to let them off the hook for lack of diligent prosecution. Other criteria used by the Judge for their release include age, health ground and simplicity of charge.</span></p>\r\n<p>&nbsp;</p>\r\n<p style="margin: 0px 0px 13.33px; text-align: justify;"><span style="font-family: Cambria; font-size: x-large;">While thanking the Chief Judge for the visit, the Controller of Prisons, Emilia pleaded for a more regular exercise as it will help in decongesting the prisons in the State. </span></p>\r\n<p>&nbsp;</p>', '547456', 'images/uploads/cgp_news.jpg', 2018, '02', '14', '', '', '', '', '', '', '', 'admin@prisons.gov.ng', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE IF NOT EXISTS `personal_details` (
`id` int(11) unsigned NOT NULL,
  `recruit_id` int(11) unsigned DEFAULT NULL,
  `title` varchar(3) DEFAULT NULL,
  `mname` tinytext,
  `gender` varchar(6) DEFAULT NULL,
  `nationality` tinytext,
  `dob` varchar(20) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `height` varchar(20) DEFAULT NULL,
  `nin` varchar(20) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `permAddress` tinytext,
  `permStreet` tinytext,
  `permLga` tinytext,
  `permState` tinytext,
  `curAddress` tinytext,
  `curStreet` tinytext,
  `curLga` tinytext,
  `curState` tinytext,
  `prefAddress` tinytext,
  `stage` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`id`, `recruit_id`, `title`, `mname`, `gender`, `nationality`, `dob`, `age`, `height`, `nin`, `phone`, `permAddress`, `permStreet`, `permLga`, `permState`, `curAddress`, `curStreet`, `curLga`, `curState`, `prefAddress`, `stage`, `status`) VALUES
(1, 1, 'mis', 'Hillari', 'female', 'Nigeria', '10/04/2018', 41, '44', '783732', '07060678275', '10  Oguda close', NULL, 'Ethiope East', 'Delta', '5, Mimi Street Kubwa', NULL, 'Bwari', 'FCT', '5, mimi street Kubwa', 0, 0),
(2, 2, 'mr', '', 'male', 'Nigeria', '01/04/2018', 0, '', '783333gh', '7060678275', '10  Oguda close', NULL, 'Ethiope East', 'Delta', '10  Oguda close', NULL, 'Ethiope East', 'Delta', '10  Oguda close', 0, 0),
(3, 3, 'mr', '', 'male', 'Nigeria', '02/04/1985', 33, '', '06544897', '8037805381', '55, Okere Ugborikoko road', NULL, 'Bomadi', 'Delta', '10  Oguda close', NULL, 'Aniocha North', 'Delta', '10  Oguda close', 0, 0),
(4, 4, 'mr', '', 'female', 'Nigeria', '05/12/1991', 26, '', '05563421', '0814458678', 'PMB 5025, awka/enugu express road', NULL, 'Aguata', 'Anambra', 'PMB 5025, awka/enugu express road', NULL, 'Aguata', 'Anambra', 'PMB 5025, awka/enugu express road', 0, 0),
(5, 6, 'mr', '', '? stri', 'Nigeria', '11/04/1989', 29, '55', '876200', '07060678275', '10, OGUDA CLOSE,  MAITAMA', NULL, 'Birnin Gwari', 'Kaduna', '10, OGUDA CLOSE,  MAITAMA', NULL, 'Birnin Gwari', 'Kaduna', '10, OGUDA CLOSE,  MAITAMA', 0, 0),
(6, 8, 'mr', '', '? stri', 'Nigeria', '14/05/1988', 0, '1.167', '8889832', '0807505006', 'Bill Clinton Drive, Airport Road Abuja', NULL, 'Akko', 'Gombe', 'Bill Clinton Drive, Airport Road Abuja', NULL, 'Akko', 'Gombe', 'Bill Clinton Drive, Airport Road Abuja', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE IF NOT EXISTS `positions` (
`id` int(11) NOT NULL,
  `title` tinytext NOT NULL,
  `short_code` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `title`, `short_code`, `status`) VALUES
(1, 'Superintendent Cadre', 'A', 1),
(2, 'Inspectorate Cadre', 'B', 1),
(3, 'Assistant Cadre', 'C', 1);

-- --------------------------------------------------------

--
-- Table structure for table `prisons`
--

CREATE TABLE IF NOT EXISTS `prisons` (
`prison_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `prison_name` tinytext NOT NULL,
  `addreess` tinytext NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=243 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prisons`
--

INSERT INTO `prisons` (`prison_id`, `state_id`, `prison_name`, `addreess`, `status`) VALUES
(1, 24, 'Max. Sec.\nKirikiri', '', 1),
(2, 24, 'Med. Sec.\nKirikiri', '', 1),
(3, 24, 'Female', '', 1),
(4, 24, 'Ikoyi', '', 1),
(5, 24, 'Badagry', '', 1),
(6, 27, 'Abeokuta', '', 1),
(7, 27, 'Ijebu-Ode', '', 1),
(8, 27, 'Ilaro', '', 1),
(9, 27, 'Shagamu', '', 1),
(10, 27, 'Borstal', '', 1),
(11, 27, 'New MSP Ab', '', 1),
(12, 27, 'Ago-Iwoye FC', '', 1),
(13, 18, 'Birnin Gwari', '', 1),
(14, 18, 'Kaduna', '', 1),
(15, 18, 'Kafanchan', '', 1),
(16, 18, 'Kakuri Prison \nCamp', '', 1),
(17, 18, 'Zaria', '', 1),
(18, 18, 'Kujama Farm', '', 1),
(19, 18, 'Borstal', '', 1),
(20, 18, 'Kachia Satellite', '', 1),
(21, 18, 'Saminaka Satellite', '', 1),
(22, 18, 'Soba Satellite', '', 1),
(23, 18, 'Manchok Satellite', '', 1),
(24, 18, 'Gwantu Satellite', '', 1),
(25, 18, 'Kwoi Satellite', '', 1),
(26, 18, 'Ikara Satellite', '', 1),
(27, 18, 'Makarfi Satellite', '', 1),
(28, 20, 'MSP Daura \n(New)', '', 1),
(29, 20, 'Daura Old', '', 1),
(30, 20, 'Katsina', '', 1),
(31, 20, 'MSP Funtua', '', 1),
(32, 20, 'Dutsinma Satellite', '', 1),
(33, 20, 'Kankia Satellite', '', 1),
(34, 20, 'Malumfashi \nSatellite', '', 1),
(35, 20, 'Jibia Satellite', '', 1),
(36, 20, 'Mani Satellite', '', 1),
(37, 20, 'Musawa Satellite', '', 1),
(38, 20, 'Ingawa Satellite', '', 1),
(39, 17, 'Hadejia New', '', 1),
(40, 17, 'Kazaure', '', 1),
(41, 17, 'Gumel', '', 1),
(42, 17, 'Birnin Kudu Farm', '', 1),
(43, 17, 'Birnin Kudu \nSatellite', '', 1),
(44, 17, 'Gwaram Satellite', '', 1),
(45, 17, 'Dutse Satellite', '', 1),
(46, 17, 'Ringim Satellite', '', 1),
(47, 17, 'Jahum Satellite', '', 1),
(48, 17, 'Garki-Satellite', '', 1),
(49, 17, 'Kiyawa satelite', '', 1),
(50, 19, 'Goron Dutse', '', 1),
(51, 19, 'Kano Central', '', 1),
(52, 19, 'Wudil', '', 1),
(53, 19, 'Gwarzo \nNew Satellite', '', 1),
(54, 19, 'Bichi Satellite', '', 1),
(55, 19, 'Rano Satellite', '', 1),
(56, 19, 'Tudun \nWada Satellite', '', 1),
(57, 19, 'Sumaila Satellite', '', 1),
(58, 19, 'Kiru Satellite', '', 1),
(59, 19, 'Dawakin \nTofa Satellite', '', 1),
(60, 5, 'Bauchi', '', 1),
(61, 5, 'Azare', '', 1),
(62, 5, 'Misau', '', 1),
(63, 5, 'Ningi', '', 1),
(64, 5, 'MSP Jama`are', '', 1),
(65, 5, 'Alkaleri Satellite', '', 1),
(66, 5, 'Burra Satellite', '', 1),
(67, 5, 'Darazo Satellite', '', 1),
(68, 5, 'Tora Satellite', '', 1),
(69, 5, 'Gamawa Satellite', '', 1),
(70, 5, 'Shira Satellite', '', 1),
(71, 5, 'Tafawa \nBalewa Satellite', '', 1),
(72, 5, 'Katagun Satellite', '', 1),
(73, 15, 'Gombe', '', 1),
(74, 15, 'Tula', '', 1),
(75, 15, 'Cham Satellite', '', 1),
(76, 15, 'Billiri Satellite', '', 1),
(77, 15, 'Bajoga Satellite', '', 1),
(78, 2, 'Yola', '', 1),
(79, 2, 'Mubi', '', 1),
(80, 2, 'Jimeta', '', 1),
(81, 2, 'Numan', '', 1),
(82, 2, 'Ganye', '', 1),
(83, 2, 'Jada', '', 1),
(84, 2, 'Michika Satellite', '', 1),
(85, 2, 'Gombi Satellite', '', 1),
(86, 2, 'Hong Satellite', '', 1),
(87, 2, 'Dumne Satellite', '', 1),
(88, 2, 'Guyuk Satellite', '', 1),
(89, 2, 'Kojoli Satellite', '', 1),
(90, 2, 'Mayobelwa Satellite', '', 1),
(91, 2, 'Shelleng Satellite', '', 1),
(92, 2, 'Maina Satellite', '', 1),
(93, 2, 'Gulak Saterllite', '', 1),
(94, 2, 'Karlami Satellite', '', 1),
(95, 8, 'Bama', '', 1),
(96, 8, 'Biu', '', 1),
(97, 8, 'New Maiduguri', '', 1),
(98, 8, 'Gwoza', '', 1),
(99, 8, 'Maiduguri \nFarm Centre', '', 1),
(100, 8, 'Maximum Security \nMaiduguri', '', 1),
(101, 8, 'Mongono \nSatellite', '', 1),
(102, 8, 'Kukawa Satellite', '', 1),
(103, 8, 'Gamboru-Ngala \nSatellite', '', 1),
(104, 8, 'Kumshe \nSatellite', '', 1),
(105, 8, 'Konduga \nSatellite', '', 1),
(106, 8, 'Damasak \nSatellite', '', 1),
(107, 8, 'Askira Satellite', '', 1),
(108, 8, 'Shani Satellite', '', 1),
(109, 8, 'Kwayakusar \nSatellite', '', 1),
(110, 34, 'Jalingo', '', 1),
(111, 34, 'New Wukari', '', 1),
(112, 34, 'Serti', '', 1),
(113, 34, 'Gembu', '', 1),
(114, 34, 'Zing Satellite', '', 1),
(115, 34, 'Takum Satellite', '', 1),
(116, 34, 'Baissa Satellite', '', 1),
(117, 34, 'Bali Satellite', '', 1),
(118, 34, 'Lau Satellite', '', 1),
(119, 34, 'Gassol Satellite', '', 1),
(120, 34, 'M/Biyu Satellite', '', 1),
(121, 34, 'Karin - Lamido \nSatellite', '', 1),
(122, 35, 'Gashua', '', 1),
(123, 35, 'Nguru', '', 1),
(124, 35, 'MSP Potiskum', '', 1),
(125, 35, 'Dapchi Satellite', '', 1),
(126, 35, 'Damagun Satellite', '', 1),
(127, 35, 'Geidam Satellite', '', 1),
(128, 35, 'Damaturu Satellite', '', 1),
(129, 35, 'Fika Satellite', '', 1),
(130, 26, 'Agaie', '', 1),
(131, 26, 'Bida', '', 1),
(132, 26, 'MSP Kotongora', '', 1),
(133, 26, 'MSP Minna', '', 1),
(134, 26, 'Lapai', '', 1),
(135, 26, 'Minna', '', 1),
(136, 26, 'New - Bussa', '', 1),
(137, 26, 'Kagara', '', 1),
(138, 23, 'Ilorin', '', 1),
(139, 23, 'Ilorin new/Mandala', '', 1),
(140, 23, 'Lafiagi', '', 1),
(141, 23, 'MSP Omu-Aran', '', 1),
(142, 23, 'Borstal', '', 1),
(143, 21, 'Old Kebbi', '', 1),
(144, 21, 'New Kebbi', '', 1),
(145, 21, 'Argungu', '', 1),
(146, 21, 'Zuru', '', 1),
(147, 21, 'Yelwa Yauri', '', 1),
(148, 21, 'Kamba Satellite', '', 1),
(149, 21, 'Kangiwa Satellite', '', 1),
(150, 21, 'Jega Satellite', '', 1),
(151, 21, 'Bagundu Satellite', '', 1),
(152, 21, 'Wara Satellite', '', 1),
(153, 36, 'Gusau MSP', '', 1),
(154, 36, 'Talata Mafara Sat.', '', 1),
(155, 36, 'Maru Satellite', '', 1),
(156, 36, 'Gumi Satellite', '', 1),
(157, 36, 'Kaura Namoda Sat.', '', 1),
(158, 33, 'Sokoto', '', 1),
(159, 33, 'Farm Centre Bissalam', '', 1),
(160, 33, 'Gwadabawa Satellite', '', 1),
(161, 33, 'Wurno Satellite', '', 1),
(162, 33, 'Tambuwal Satellite', '', 1),
(163, 37, 'Suleja', '', 1),
(164, 37, 'Kuje', '', 1),
(165, 37, 'Dukpa Farm center', '', 1),
(166, 1, 'Aba', '', 1),
(167, 1, 'Umuahia', '', 1),
(168, 1, 'Arochukwu', '', 1),
(169, 3, 'Abak', '', 1),
(170, 3, 'Eket', '', 1),
(171, 3, 'Ikot-Abasi', '', 1),
(172, 3, 'Ikot-Ekpene', '', 1),
(173, 3, 'Uyo', '', 1),
(174, 16, 'Owerri', '', 1),
(175, 16, 'Okigwe', '', 1),
(176, 16, 'Orreh Farm', '', 1),
(177, 9, 'Adim Farm', '', 1),
(178, 9, 'Calabar', '', 1),
(179, 9, 'Obubra', '', 1),
(180, 9, 'Obudu', '', 1),
(181, 9, 'Ogoja', '', 1),
(182, 9, 'Ikom', '', 1),
(183, 32, 'Ahoada', '', 1),
(184, 32, 'Degema', '', 1),
(185, 32, 'Elele Farm', '', 1),
(186, 32, 'Port-Harcourt', '', 1),
(187, 6, 'Okaka', '', 1),
(188, 30, 'Agodi', '', 1),
(189, 30, 'Oyo', '', 1),
(190, 30, 'Ogbomoso Farm', '', 1),
(191, 29, 'Ile-Ife', '', 1),
(192, 29, 'Ilesa', '', 1),
(193, 28, 'Okitipupa', '', 1),
(194, 28, 'MSP-Ondo', '', 1),
(195, 28, 'Owo', '', 1),
(196, 28, 'MSP Akure', '', 1),
(197, 28, 'Female', '', 1),
(198, 13, 'Ado-Ekiti', '', 1),
(199, 4, 'Awka', '', 1),
(200, 4, 'Onitsha', '', 1),
(201, 4, 'MSP Nnewi', '', 1),
(202, 4, 'Nnewi ', '', 1),
(203, 4, 'Aguata', '', 1),
(204, 12, 'Benin(Old)', '', 1),
(205, 12, 'Benin(New)', '', 1),
(206, 12, 'Ogba Farm', '', 1),
(207, 12, 'Ozalla Farm', '', 1),
(208, 12, 'Ubiaja', '', 1),
(209, 12, 'Auchi', '', 1),
(210, 10, 'Warri', '', 1),
(211, 10, 'Ogwuashi-Uku', '', 1),
(212, 10, 'Sapele', '', 1),
(213, 10, 'Agbor', '', 1),
(214, 10, 'Kwale', '', 1),
(215, 11, 'Abakaliki', '', 1),
(216, 11, 'Afikpo', '', 1),
(217, 14, 'Enugu', '', 1),
(218, 14, 'Ibite-Olo Farm', '', 1),
(219, 14, 'Nsukka', '', 1),
(220, 14, 'Oji River', '', 1),
(221, 7, 'Gboko', '', 1),
(222, 7, 'MSP Makurdi', '', 1),
(223, 7, 'Otukpo', '', 1),
(224, 25, 'Lafia', '', 1),
(225, 25, 'Wamba', '', 1),
(226, 25, 'MSP Keffi', '', 1),
(227, 25, 'Old keffi', '', 1),
(228, 25, 'Nassarawa', '', 1),
(229, 31, 'Jos', '', 1),
(230, 31, 'Jos ', '', 1),
(231, 31, 'Lamingo Prison Camp', '', 1),
(232, 31, 'Lakushi Farm center', '', 1),
(233, 31, 'Pankshin', '', 1),
(234, 31, 'Shedam', '', 1),
(235, 31, 'Wase', '', 1),
(236, 31, 'Langtang', '', 1),
(237, 22, 'Ankpa', '', 1),
(238, 22, 'Dekina', '', 1),
(239, 22, 'Idah', '', 1),
(240, 22, 'Koton-Karfe', '', 1),
(241, 22, 'Kabba', '', 1),
(242, 22, 'Okene', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `professional_qualifications`
--

CREATE TABLE IF NOT EXISTS `professional_qualifications` (
`id` int(11) unsigned NOT NULL,
  `recruit_id` int(11) unsigned DEFAULT NULL,
  `startdate` varchar(20) NOT NULL,
  `enddate` varchar(20) NOT NULL,
  `qualification` tinytext,
  `institution` tinytext NOT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `reg_no` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `grade` varchar(50) DEFAULT NULL,
  `certificate_title` tinytext,
  `highest_qual` tinytext
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professional_qualifications`
--

INSERT INTO `professional_qualifications` (`id`, `recruit_id`, `startdate`, `enddate`, `qualification`, `institution`, `city`, `country`, `reg_no`, `level`, `grade`, `certificate_title`, `highest_qual`) VALUES
(1, 1, '1978', '1978', NULL, 'DoviLearn', 'Maitama', 'Nigeria', NULL, NULL, NULL, 'Programming made easy', NULL),
(2, 3, '1989', '1978', NULL, 'Delta state university', 'Warri', 'Nigeria', NULL, NULL, NULL, 'Programming made easy', NULL),
(3, 4, '1985', '1978', NULL, 'Nnamdi Azikiwe University', 'awka', 'Nigeria', NULL, NULL, NULL, 'Certification Title Goes here', NULL),
(4, 6, '1988', '1985', NULL, 'Nnamdi Azikiwe University', 'ABUJA', 'Nigeria', NULL, NULL, NULL, 'Certification Title Goes here', NULL),
(5, 8, '1987', '1989', NULL, 'Nnamdi Azikiwe University', 'Abuja', 'Nigeria', NULL, NULL, NULL, 'Certification Title Goes here', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recruit`
--

CREATE TABLE IF NOT EXISTS `recruit` (
`id` int(11) unsigned NOT NULL,
  `fname` tinytext NOT NULL,
  `sname` tinytext NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reference` tinytext NOT NULL,
  `completed` int(11) NOT NULL,
  `position_category` int(11) NOT NULL,
  `position_applied_for` int(11) NOT NULL,
  `application_stage` int(11) NOT NULL,
  `accepted` int(11) NOT NULL,
  `denied` int(11) NOT NULL,
  `verified` int(11) NOT NULL,
  `cg_approval` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recruit`
--

INSERT INTO `recruit` (`id`, `fname`, `sname`, `email`, `password`, `reference`, `completed`, `position_category`, `position_applied_for`, `application_stage`, `accepted`, `denied`, `verified`, `cg_approval`) VALUES
(1, 'Jibunor', 'Mirabel', 'jbaby@gmail.com', '$2y$10$QU/WyEecCv2n88AbDCqkJ.l9DuFy0SdiVHnifaqW5.EDGF.8xdh8O', 'NPS/DEL/A15/20052490', 1, 1, 15, 0, 1, 0, 2, 1),
(2, 'Michael', 'Akpobome', 'mike98989@gmail.com', '$2y$10$9XvTkXakj09EvgN0rNpEJ.F3AvAdB7xZji0ETltZlJXGi.llqhLgi', 'NPS/DEL/B4/87417908', 1, 2, 4, 5, 0, 0, 1, 0),
(3, 'McLaukin', 'Ambros', 'mcambros@gmail.com', '$2y$10$tlDs.URcFGGy6r6Oj0AstOY9xVWxNNe2MJ2sWsoXLTv5XA2ex/uWO', 'NPS/DEL/B5/63239746', 1, 2, 5, 5, 1, 0, 2, 1),
(4, 'Mary', 'Guda', 'maryg@gmail.com', '$2y$10$piMTxeuiTP2CvElUuuUzOuDw/shZ5pi3p.V.edKz2WF0HXk/HI0F.', 'NPS/ANA/C6/62753601', 1, 3, 6, 5, 0, 1, 2, 0),
(5, 'medueke', 'onuorah', 'jonah@gmail.com', '$2y$10$7oo5DJVMPqkhAQxUvogkXOX64FyXhVpIweO5UXUtnT3VJntE/dS2e', '', 0, 2, 5, 2, 0, 0, 0, 0),
(6, 'Jonathan', 'Butler', 'jonathb@gmail.com', '$2y$10$ewd.TRKcOY/aR8ds1f3NyOY3wFZQ7KJhpdelk3n.MgIBiXRKGF8LO', 'NPS/KAD/B5/58880920', 1, 2, 5, 5, 0, 0, 0, 0),
(7, 'The Nigerian Prisons Service', 'onuorah', 'info@prisons.gov.ng', '$2y$10$i8QETOSiTmUULoXSo2h9R.6ZNGca7tDTE6ujueKj1sLLNv/5emi.m', '', 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'The Nigerian Prisons Service', 'onuorah', 'mikkylala@gmail.com', '$2y$10$y8F/rs33NLdh6NjDJtKZJusB7disknej/s8GL8YyCAKN2/u9Ygzri', '', 0, 1, 11, 5, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `result_classifications`
--

CREATE TABLE IF NOT EXISTS `result_classifications` (
`id` int(11) NOT NULL,
  `classification` tinytext NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result_classifications`
--

INSERT INTO `result_classifications` (`id`, `classification`, `status`) VALUES
(1, 'No Classification', 1),
(2, 'First Class/Distinction', 1),
(3, 'Second Class Upper/Upper Credit', 1),
(4, 'Second Class Lower/Lower Credit', 1),
(5, 'Third Class', 1),
(6, 'Pass', 1);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
`state_id` int(10) NOT NULL,
  `state` char(20) NOT NULL,
  `capital` char(20) DEFAULT NULL,
  `short_code` varchar(35) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1 COMMENT='InnoDB free: 4096 kB';

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `state`, `capital`, `short_code`) VALUES
(1, 'Abia', 'Umuahia', 'AB'),
(2, 'Adamawa', 'Yola', 'ADM'),
(3, 'Akwa Ibom', 'Uyo', 'AKW'),
(4, 'Anambra', 'Awka', 'ANA'),
(5, 'Bauchi', 'Bauchi', 'BAU'),
(6, 'Bayelsa', 'Yenagoa', 'BAY'),
(7, 'Benue', 'Makurdi', 'BN'),
(8, 'Borno', 'Maiduguri', 'BOR'),
(9, 'Cross River', 'Calabar', 'CR'),
(10, 'Delta', 'Asaba', 'DEL'),
(11, 'Ebonyi', 'Abakaliki', 'EBO'),
(12, 'Edo', 'Benin City', 'EDO'),
(13, 'Ekiti', 'Ado-Ekiti', 'EKT'),
(14, 'Enugu', 'Enugu', 'ENU'),
(15, 'Gombe', 'Gombe', 'GOM'),
(16, 'Imo', 'Owerri', 'IMO'),
(17, 'Jigawa', 'Dutse', 'JIG'),
(18, 'Kaduna', 'Kaduna', 'KAD'),
(19, 'Kano', 'Kano', 'KAN'),
(20, 'Katsina', 'Katsina', 'KAT'),
(21, 'Kebbi', 'Birnin Kebbi', 'KBI'),
(22, 'Kogi', 'Lokoja', 'KOG'),
(23, 'Kwara', 'Ilorin', 'KWA'),
(24, 'Lagos', 'Ikeja', 'LAG'),
(25, 'Nasarawa', 'Lafia', 'NAS'),
(26, 'Niger', 'Minna', 'NIG'),
(27, 'Ogun', 'Abeokuta', 'OGU'),
(28, 'Ondo', 'Akure', 'OND'),
(29, 'Osun', 'Oshogbo', 'OSN'),
(30, 'Oyo', 'Ibadan', 'OYO'),
(31, 'Plateau', 'Jos', 'PLT'),
(32, 'Rivers', 'Port Harcourt', 'RVR'),
(33, 'Sokoto', 'Sokoto', 'SKT'),
(34, 'Taraba', 'Jalingo', 'TRB'),
(35, 'Yobe', 'Damaturu', 'YOB'),
(36, 'Zamfara', 'Gusau', 'ZMF'),
(37, 'F.C.T.', 'Abuja', 'FCT');

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE IF NOT EXISTS `statistics` (
`id` int(11) NOT NULL,
  `heading` tinytext NOT NULL,
  `convicted_male` varchar(60) NOT NULL,
  `convicted_female` varchar(60) NOT NULL,
  `awaiting_trial_male` varchar(60) NOT NULL,
  `awaiting_trial_female` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`id`, `heading`, `convicted_male`, `convicted_female`, `awaiting_trial_male`, `awaiting_trial_female`) VALUES
(1, 'Summary of Inmate Population By Convict and Awaiting Trial persons as at 18TH December, 2017           ', '23162', '329', '47607', '1081');

-- --------------------------------------------------------

--
-- Table structure for table `sub_positions`
--

CREATE TABLE IF NOT EXISTS `sub_positions` (
`sub_position_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `sub_title` tinytext NOT NULL,
  `hint` tinytext NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_positions`
--

INSERT INTO `sub_positions` (`sub_position_id`, `position_id`, `sub_title`, `hint`, `status`) VALUES
(1, 1, 'Superintendent of Prisons (SP) Medical, CONMESS 02', 'Applicants must be holders of M.B.B.S; M.D; M.D.S; or equivalents from recognized universities.', 1),
(2, 1, 'Superintendent of Prisons (SP) Vetinary CONMESS 02', 'Applicants must be holders of D.V.M from recognized universities.', 1),
(3, 2, 'Senior Inspector of Prisons (SIP), CONPASS 08.', 'Applicants must be holders of HND certificates from recognized Polytechnics/Colleges in the following areas: Humanities, Social Sciences, Psychology, Estate/Town Planning, Public Health, Food Sciences, Social Works etc.', 1),
(4, 2, 'Inspector of Prisons (IP) Nursing, CONHESS 06.', 'Applicants must be registered Nurses (RN), Registered Midwives (RM) or Registered Nurses/Midwives (RNM) obtained from recognized institutions', 1),
(5, 2, 'Assistant Inspector of Prisons (AIP), General Duty, CONPASS 06. ', 'Applicants must be holders of OND/NCE Obtained from recognized institutions.', 1),
(6, 3, 'Prisons Assistant I (PAI) CONPASS 05', 'Applicants must be holders of GCE Ordinary Level, SSCE/NECO or their equivalents with a minimum of Five (5) credits in not more than two (2) sittings, which should include English and Mathematics or Trade Test Grade 1', 1),
(7, 3, 'Prisons Assistant II (PAII) CONPASS 04       ', 'Applicants must possess the GCE Ordinary Level, SSCE or its equivalent with a minimum of five (5) credits in not more than two (2) sittings, which should include English or Trade Test Grade II. (Artisans, Motor drivers, Mechanics, Auto Electricians, Plumb', 1),
(8, 3, 'Prison Assistant III (PA.III) CONPASS 03.', 'Applicants must be holders of GCE Ordinary Level, SSCE/NECO or it’s equivalents with a minimum of three (3) credits in not more than Two (2) sittings, which should include at least English or Mathematics or Trade Test Grade III for artisans. (Motor driver', 1),
(9, 1, 'Deputy Superintendent of Prisons (DSP) Pharmacy, CONHESS 09.', 'Applicants must possess Bachelor’s of Pharmacy degrees from recognized universities.', 1),
(10, 1, 'Assistant Superintendent of Prisons. I (ASP.I) CONPASS 09', 'Applicants must be holders of master’s degree from recognized Universities in the following areas:  Humanities, Social Sciences, Lab. Sciences, Architecture, Engineering, Radiology, etc', 1),
(11, 1, 'Assistant Superintendent of Prisons II (ASP.II), CONPASS 08', 'Applicants must holders first degree from recognized Universities in the following areas: Humanities, Social Sciences, Psychology, Estate/Town Planning, Public Health, Food Sciences, Social Works, etc.', 1),
(12, 1, 'Assistant Superintendent of Prisons (ASP1) Lab Scientists, CONHESS 08', 'Applicants must be holders of Bsc minimum or its equivalent in the appropriate field from recognized universities.', 0),
(13, 1, 'Assistant Superintendent of Prisons (ASP1) Architecture, CONPASS 09', 'Applicants must be holders of Bsc minimum or its equivalent in the appropriate field from recognized universities.', 0),
(14, 1, 'Assistant Superintendent of Prisons (ASP1) Engineering, CONPASS 09', 'Applicants must be holders of Bsc minimum or its equivalent in the appropriate field from recognized universities.', 0),
(15, 1, 'Assistant Superintendent of Prisons (ASP1) Radiologists, CONHESS 08', 'Applicants must be holders of Bsc minimum or its equivalent in the appropriate field from recognized universities.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `work_experience`
--

CREATE TABLE IF NOT EXISTS `work_experience` (
`id` int(11) unsigned NOT NULL,
  `recruit_id` int(11) unsigned NOT NULL,
  `startdate` varchar(20) NOT NULL,
  `enddate` varchar(20) NOT NULL,
  `role` tinytext,
  `organization` tinytext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_experience`
--

INSERT INTO `work_experience` (`id`, `recruit_id`, `startdate`, `enddate`, `role`, `organization`) VALUES
(1, 1, '23/03/2018', '04/04/2018', 'Teacher [NYSC]', 'The Authority Newspaper'),
(2, 2, '05/04/2018', '18/04/2018', 'Teacher [NYSC]', 'The Authority Newspaper'),
(3, 3, '07/04/2018', '18/04/2018', 'Teacher [NYSC]', 'The Authority Newspaper'),
(4, 4, '06/04/2018', '03/04/2018', 'Application developer', 'The Nigerian Prisons Service'),
(5, 6, '18/04/2018', '11/04/2018', 'Application developer', 'The Nigerian Prisons Service'),
(6, 8, '04/05/2018', '08/05/2018', 'Application developer', 'The Nigerian Prisons Service'),
(7, 8, '06/04/2018', '23/05/2018', 'Moulder', 'Hakonix Technologies');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`ID`), ADD KEY `user_email` (`admin_email`);

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attachments_list`
--
ALTER TABLE `attachments_list`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `educational_qualifications`
--
ALTER TABLE `educational_qualifications`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_content`
--
ALTER TABLE `home_content`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr_admin`
--
ALTER TABLE `hr_admin`
 ADD PRIMARY KEY (`ID`), ADD KEY `user_email` (`admin_email`);

--
-- Indexes for table `inmates_allclassregister`
--
ALTER TABLE `inmates_allclassregister`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lgas`
--
ALTER TABLE `lgas`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `recruit_id` (`recruit_id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prisons`
--
ALTER TABLE `prisons`
 ADD PRIMARY KEY (`prison_id`);

--
-- Indexes for table `professional_qualifications`
--
ALTER TABLE `professional_qualifications`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recruit`
--
ALTER TABLE `recruit`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result_classifications`
--
ALTER TABLE `result_classifications`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
 ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_positions`
--
ALTER TABLE `sub_positions`
 ADD PRIMARY KEY (`sub_position_id`);

--
-- Indexes for table `work_experience`
--
ALTER TABLE `work_experience`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `attachments`
--
ALTER TABLE `attachments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `attachments_list`
--
ALTER TABLE `attachments_list`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=251;
--
-- AUTO_INCREMENT for table `educational_qualifications`
--
ALTER TABLE `educational_qualifications`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `home_content`
--
ALTER TABLE `home_content`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hr_admin`
--
ALTER TABLE `hr_admin`
MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `inmates_allclassregister`
--
ALTER TABLE `inmates_allclassregister`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lgas`
--
ALTER TABLE `lgas`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=775;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `prisons`
--
ALTER TABLE `prisons`
MODIFY `prison_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=243;
--
-- AUTO_INCREMENT for table `professional_qualifications`
--
ALTER TABLE `professional_qualifications`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `recruit`
--
ALTER TABLE `recruit`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `result_classifications`
--
ALTER TABLE `result_classifications`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
MODIFY `state_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sub_positions`
--
ALTER TABLE `sub_positions`
MODIFY `sub_position_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `work_experience`
--
ALTER TABLE `work_experience`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
