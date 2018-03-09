-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2018 at 08:57 AM
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
-- Table structure for table `attachments`
--

CREATE TABLE IF NOT EXISTS `attachments` (
`id` int(11) unsigned NOT NULL,
  `recruit_id` int(11) DEFAULT NULL,
  `title` tinytext NOT NULL,
  `path` tinytext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attachments`
--

INSERT INTO `attachments` (`id`, `recruit_id`, `title`, `path`) VALUES
(1, 1, 'Passport Photograph', 'images/uploads/passport_photo/image1.jpg'),
(7, 0, 'First School Leaving Certificate', '');

-- --------------------------------------------------------

--
-- Table structure for table `attachments_list`
--

CREATE TABLE IF NOT EXISTS `attachments_list` (
`id` int(11) NOT NULL,
  `degree` tinytext NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attachments_list`
--

INSERT INTO `attachments_list` (`id`, `degree`, `status`) VALUES
(1, 'MPhil/Phd', 1),
(2, 'MBA/Msc', 1),
(3, 'MBBS', 1),
(4, 'BSc', 1),
(5, 'HND', 1),
(6, 'OND', 1),
(7, 'N.C.E', 1),
(8, 'Diploma', 1),
(9, 'Vocational', 1),
(10, 'SSCE(WAEC)', 1),
(11, 'SSCE(NECO)', 1),
(12, 'First School Leaving Certificate', 1),
(13, 'Birth Certificate/Age Declaration', 0),
(14, 'Passport Photograph', 0),
(15, 'Others', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educational_qualifications`
--

INSERT INTO `educational_qualifications` (`id`, `recruit_id`, `startdate`, `enddate`, `course_of_study`, `qualification`, `type`, `classification`, `institution`, `city`, `country`) VALUES
(12, 1, '1990', '1994', 'Bush burning', '', 'MPhil/Phd', 'Second Class Upper/Upper Credit', 'Nnamdi Azikiwe University', 'Awka', 'Nigeria'),
(13, 1, '2000', '2002', 'Bush burning and cattle rearing', '', 'MBA/Msc', 'Second Class Upper/Upper Credit', 'Ambrose Ali University', 'Ekpoma', 'Nigeria'),
(14, 1, '2005', '2010', 'Animal Husbandry and barb wiring', '', 'BSc', 'No Classification', 'University of Benin', 'Benin', 'Nigeria'),
(15, 1, '1991', '1994', 'Fencing and balb wiring', '', 'Diploma', 'Second Class Lower/Lower Credit', 'Ambrose Ali University', 'Awka', 'Nigeria');

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
-- Table structure for table `lgas`
--

CREATE TABLE IF NOT EXISTS `lgas` (
`id` int(11) unsigned NOT NULL,
  `state` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=775 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lgas`
--

INSERT INTO `lgas` (`id`, `state`, `name`) VALUES
(1, 'Abia State', 'Aba North'),
(2, 'Abia State', 'Aba South'),
(3, 'Abia State', 'Arochukwu'),
(4, 'Abia State', 'Bende'),
(5, 'Abia State', 'Ikwuano'),
(6, 'Abia State', 'Isiala Ngwa North'),
(7, 'Abia State', 'Isiala Ngwa South'),
(8, 'Abia State', 'Isuikwuato'),
(9, 'Abia State', 'Obi Ngwa'),
(10, 'Abia State', 'Ohafia'),
(11, 'Abia State', 'Osisioma'),
(12, 'Abia State', 'Ugwunagbo'),
(13, 'Abia State', 'Ukwa East'),
(14, 'Abia State', 'Ukwa West'),
(15, 'Abia State', 'Umu Nneochi'),
(16, 'Abia State', 'Umuahia North'),
(17, 'Abia State', 'Umuahia South'),
(18, 'Adamawa State', 'Demsa'),
(19, 'Adamawa State', 'Fufure'),
(20, 'Adamawa State', 'Ganye'),
(21, 'Adamawa State', 'Gayuk'),
(22, 'Adamawa State', 'Gombi'),
(23, 'Adamawa State', 'Grie'),
(24, 'Adamawa State', 'Hong'),
(25, 'Adamawa State', 'Jada'),
(26, 'Adamawa State', 'Lamurde'),
(27, 'Adamawa State', 'Madagali'),
(28, 'Adamawa State', 'Maiha'),
(29, 'Adamawa State', 'Mayo Belwa'),
(30, 'Adamawa State', 'Michika'),
(31, 'Adamawa State', 'Mubi North'),
(32, 'Adamawa State', 'Mubi South'),
(33, 'Adamawa State', 'Numan'),
(34, 'Adamawa State', 'Shelleng'),
(35, 'Adamawa State', 'Song'),
(36, 'Adamawa State', 'Toungo'),
(37, 'Adamawa State', 'Yola North'),
(38, 'Adamawa State', 'Yola South'),
(39, 'Akwa Ibom State', 'Abak'),
(40, 'Akwa Ibom State', 'Eastern Obolo'),
(41, 'Akwa Ibom State', 'Eket'),
(42, 'Akwa Ibom State', 'Esit Eket'),
(43, 'Akwa Ibom State', 'Essien Udim'),
(44, 'Akwa Ibom State', 'Etim Ekpo'),
(45, 'Akwa Ibom State', 'Etinan'),
(46, 'Akwa Ibom State', 'Ibeno'),
(47, 'Akwa Ibom State', 'Ibesikpo Asutan'),
(48, 'Akwa Ibom State', 'Ibiono-Ibom'),
(49, 'Akwa Ibom State', 'Ika'),
(50, 'Akwa Ibom State', 'Ikono'),
(51, 'Akwa Ibom State', 'Ikot Abasi'),
(52, 'Akwa Ibom State', 'Ikot Ekpene'),
(53, 'Akwa Ibom State', 'Ini'),
(54, 'Akwa Ibom State', 'Itu'),
(55, 'Akwa Ibom State', 'Mbo'),
(56, 'Akwa Ibom State', 'Mkpat-Enin'),
(57, 'Akwa Ibom State', 'Nsit-Atai'),
(58, 'Akwa Ibom State', 'Nsit-Ibom'),
(59, 'Akwa Ibom State', 'Nsit-Ubium'),
(60, 'Akwa Ibom State', 'Obot Akara'),
(61, 'Akwa Ibom State', 'Okobo'),
(62, 'Akwa Ibom State', 'Onna'),
(63, 'Akwa Ibom State', 'Oron'),
(64, 'Akwa Ibom State', 'Oruk Anam'),
(65, 'Akwa Ibom State', 'Udung-Uko'),
(66, 'Akwa Ibom State', 'Ukanafun'),
(67, 'Akwa Ibom State', 'Uruan'),
(68, 'Akwa Ibom State', 'Urue-Offong/Oruko'),
(69, 'Akwa Ibom State', 'Uyo'),
(70, 'Anambra State', 'Aguata'),
(71, 'Anambra State', 'Anambra East'),
(72, 'Anambra State', 'Anambra West'),
(73, 'Anambra State', 'Anaocha'),
(74, 'Anambra State', 'Awka North'),
(75, 'Anambra State', 'Awka South'),
(76, 'Anambra State', 'Ayamelum'),
(77, 'Anambra State', 'Dunukofia'),
(78, 'Anambra State', 'Ekwusigo'),
(79, 'Anambra State', 'Idemili North'),
(80, 'Anambra State', 'Idemili South'),
(81, 'Anambra State', 'Ihiala'),
(82, 'Anambra State', 'Njikoka'),
(83, 'Anambra State', 'Nnewi North'),
(84, 'Anambra State', 'Nnewi South'),
(85, 'Anambra State', 'Ogbaru'),
(86, 'Anambra State', 'Onitsha North'),
(87, 'Anambra State', 'Onitsha South'),
(88, 'Anambra State', 'Orumba North'),
(89, 'Anambra State', 'Orumba South'),
(90, 'Anambra State', 'Oyi'),
(91, 'Bauchi State', 'Alkaleri'),
(92, 'Bauchi State', 'Bauchi'),
(93, 'Bauchi State', 'Bogoro'),
(94, 'Bauchi State', 'Damban'),
(95, 'Bauchi State', 'Darazo'),
(96, 'Bauchi State', 'Dass'),
(97, 'Bauchi State', 'Gamawa'),
(98, 'Bauchi State', 'Ganjuwa'),
(99, 'Bauchi State', 'Giade'),
(100, 'Bauchi State', 'Itas/Gadau'),
(101, 'Bauchi State', 'Jama''are'),
(102, 'Bauchi State', 'Katagum'),
(103, 'Bauchi State', 'Kirfi'),
(104, 'Bauchi State', 'Misau'),
(105, 'Bauchi State', 'Ningi'),
(106, 'Bauchi State', 'Shira'),
(107, 'Bauchi State', 'Tafawa Balewa'),
(108, 'Bauchi State', 'Toro'),
(109, 'Bauchi State', 'Warji'),
(110, 'Bauchi State', 'Zaki'),
(111, 'Bayelsa State', 'Brass'),
(112, 'Bayelsa State', 'Ekeremor'),
(113, 'Bayelsa State', 'Kolokuma/Opokuma'),
(114, 'Bayelsa State', 'Nembe'),
(115, 'Bayelsa State', 'Ogbia'),
(116, 'Bayelsa State', 'Sagbama'),
(117, 'Bayelsa State', 'Southern Ijaw'),
(118, 'Bayelsa State', 'Yenagoa'),
(119, 'Benue State', 'Ado'),
(120, 'Benue State', 'Agatu'),
(121, 'Benue State', 'Apa'),
(122, 'Benue State', 'Buruku'),
(123, 'Benue State', 'Gboko'),
(124, 'Benue State', 'Guma'),
(125, 'Benue State', 'Gwer East'),
(126, 'Benue State', 'Gwer West'),
(127, 'Benue State', 'Katsina-Ala'),
(128, 'Benue State', 'Konshisha'),
(129, 'Benue State', 'Kwande'),
(130, 'Benue State', 'Logo'),
(131, 'Benue State', 'Makurdi'),
(132, 'Benue State', 'Obi'),
(133, 'Benue State', 'Ogbadibo'),
(134, 'Benue State', 'Ohimini'),
(135, 'Benue State', 'Oju'),
(136, 'Benue State', 'Okpokwu'),
(137, 'Benue State', 'Oturkpo'),
(138, 'Benue State', 'Tarka'),
(139, 'Benue State', 'Ukum'),
(140, 'Benue State', 'Ushongo'),
(141, 'Benue State', 'Vandeikya'),
(142, 'Borno State', 'Abadam'),
(143, 'Borno State', 'Askira/Uba'),
(144, 'Borno State', 'Bama'),
(145, 'Borno State', 'Bayo'),
(146, 'Borno State', 'Biu'),
(147, 'Borno State', 'Chibok'),
(148, 'Borno State', 'Damboa'),
(149, 'Borno State', 'Dikwa'),
(150, 'Borno State', 'Gubio'),
(151, 'Borno State', 'Guzamala'),
(152, 'Borno State', 'Gwoza'),
(153, 'Borno State', 'Hawul'),
(154, 'Borno State', 'Jere'),
(155, 'Borno State', 'Kaga'),
(156, 'Borno State', 'Kala/Balge'),
(157, 'Borno State', 'Konduga'),
(158, 'Borno State', 'Kukawa'),
(159, 'Borno State', 'Kwaya Kusar'),
(160, 'Borno State', 'Mafa'),
(161, 'Borno State', 'Magumeri'),
(162, 'Borno State', 'Maiduguri'),
(163, 'Borno State', 'Marte'),
(164, 'Borno State', 'Mobbar'),
(165, 'Borno State', 'Monguno'),
(166, 'Borno State', 'Ngala'),
(167, 'Borno State', 'Nganzai'),
(168, 'Borno State', 'Shani'),
(169, 'Cross River State', 'Abi'),
(170, 'Cross River State', 'Akamkpa'),
(171, 'Cross River State', 'Akpabuyo'),
(172, 'Cross River State', 'Bakassi'),
(173, 'Cross River State', 'Bekwarra'),
(174, 'Cross River State', 'Biase'),
(175, 'Cross River State', 'Boki'),
(176, 'Cross River State', 'Calabar Municipal'),
(177, 'Cross River State', 'Calabar South'),
(178, 'Cross River State', 'Etung'),
(179, 'Cross River State', 'Ikom'),
(180, 'Cross River State', 'Obanliku'),
(181, 'Cross River State', 'Obubra'),
(182, 'Cross River State', 'Obudu'),
(183, 'Cross River State', 'Odukpani'),
(184, 'Cross River State', 'Ogoja'),
(185, 'Cross River State', 'Yakuur'),
(186, 'Cross River State', 'Yala'),
(187, 'Delta State', 'Aniocha North'),
(188, 'Delta State', 'Aniocha South'),
(189, 'Delta State', 'Bomadi'),
(190, 'Delta State', 'Burutu'),
(191, 'Delta State', 'Ethiope East'),
(192, 'Delta State', 'Ethiope West'),
(193, 'Delta State', 'Ika North East'),
(194, 'Delta State', 'Ika South'),
(195, 'Delta State', 'Isoko North'),
(196, 'Delta State', 'Isoko South'),
(197, 'Delta State', 'Ndokwa East'),
(198, 'Delta State', 'Ndokwa West'),
(199, 'Delta State', 'Okpe'),
(200, 'Delta State', 'Oshimili North'),
(201, 'Delta State', 'Oshimili South'),
(202, 'Delta State', 'Patani'),
(203, 'Delta State', 'Sapele'),
(204, 'Delta State', 'Udu'),
(205, 'Delta State', 'Ughelli North'),
(206, 'Delta State', 'Ughelli South'),
(207, 'Delta State', 'Ukwuani'),
(208, 'Delta State', 'Uvwie'),
(209, 'Delta State', 'Warri North'),
(210, 'Delta State', 'Warri South'),
(211, 'Delta State', 'Warri South West'),
(212, 'Ebonyi State', 'Abakaliki'),
(213, 'Ebonyi State', 'Afikpo North'),
(214, 'Ebonyi State', 'Afikpo South (Edda)'),
(215, 'Ebonyi State', 'Ebonyi'),
(216, 'Ebonyi State', 'Ezza North'),
(217, 'Ebonyi State', 'Ezza South'),
(218, 'Ebonyi State', 'Ikwo'),
(219, 'Ebonyi State', 'Ishielu'),
(220, 'Ebonyi State', 'Ivo'),
(221, 'Ebonyi State', 'Izzi'),
(222, 'Ebonyi State', 'Ohaozara'),
(223, 'Ebonyi State', 'Ohaukwu'),
(224, 'Ebonyi State', 'Onicha'),
(225, 'Edo State', 'Akoko-Edo'),
(226, 'Edo State', 'Egor'),
(227, 'Edo State', 'Esan Central'),
(228, 'Edo State', 'Esan North-East'),
(229, 'Edo State', 'Esan South-East'),
(230, 'Edo State', 'Esan West'),
(231, 'Edo State', 'Etsako Central'),
(232, 'Edo State', 'Etsako East'),
(233, 'Edo State', 'Etsako West'),
(234, 'Edo State', 'Igueben'),
(235, 'Edo State', 'Ikpoba Okha'),
(236, 'Edo State', 'Oredo'),
(237, 'Edo State', 'Orhionmwon'),
(238, 'Edo State', 'Ovia North-East'),
(239, 'Edo State', 'Ovia South-West'),
(240, 'Edo State', 'Owan East'),
(241, 'Edo State', 'Owan West'),
(242, 'Edo State', 'Uhunmwonde'),
(243, 'Ekiti State', 'Ado Ekiti'),
(244, 'Ekiti State', 'Efon'),
(245, 'Ekiti State', 'Ekiti East'),
(246, 'Ekiti State', 'Ekiti South-West'),
(247, 'Ekiti State', 'Ekiti West'),
(248, 'Ekiti State', 'Emure'),
(249, 'Ekiti State', 'Gbonyin'),
(250, 'Ekiti State', 'Ido Osi'),
(251, 'Ekiti State', 'Ijero'),
(252, 'Ekiti State', 'Ikere'),
(253, 'Ekiti State', 'Ikole'),
(254, 'Ekiti State', 'Ilejemeje'),
(255, 'Ekiti State', 'Irepodun/Ifelodun'),
(256, 'Ekiti State', 'Ise/Orun'),
(257, 'Ekiti State', 'Moba'),
(258, 'Ekiti State', 'Oye'),
(259, 'Enugu State', 'Aninri'),
(260, 'Enugu State', 'Awgu'),
(261, 'Enugu State', 'Enugu East'),
(262, 'Enugu State', 'Enugu North'),
(263, 'Enugu State', 'Enugu South'),
(264, 'Enugu State', 'Ezeagu'),
(265, 'Enugu State', 'Igbo Etiti'),
(266, 'Enugu State', 'Igbo Eze North'),
(267, 'Enugu State', 'Igbo Eze South'),
(268, 'Enugu State', 'Isi Uzo'),
(269, 'Enugu State', 'Nkanu East'),
(270, 'Enugu State', 'Nkanu West'),
(271, 'Enugu State', 'Nsukka'),
(272, 'Enugu State', 'Oji River'),
(273, 'Enugu State', 'Udenu'),
(274, 'Enugu State', 'Udi'),
(275, 'Enugu State', 'Uzo Uwani'),
(276, 'FCT', 'Abaji'),
(277, 'FCT', 'Bwari'),
(278, 'FCT', 'Gwagwalada'),
(279, 'FCT', 'Kuje'),
(280, 'FCT', 'Kwali'),
(281, 'FCT', 'Municipal Area Council'),
(282, 'Gombe State', 'Akko'),
(283, 'Gombe State', 'Balanga'),
(284, 'Gombe State', 'Billiri'),
(285, 'Gombe State', 'Dukku'),
(286, 'Gombe State', 'Funakaye'),
(287, 'Gombe State', 'Gombe'),
(288, 'Gombe State', 'Kaltungo'),
(289, 'Gombe State', 'Kwami'),
(290, 'Gombe State', 'Nafada'),
(291, 'Gombe State', 'Shongom'),
(292, 'Gombe State', 'Yamaltu/Deba'),
(293, 'Imo State', 'Aboh Mbaise'),
(294, 'Imo State', 'Ahiazu Mbaise'),
(295, 'Imo State', 'Ehime Mbano'),
(296, 'Imo State', 'Ezinihitte'),
(297, 'Imo State', 'Ideato North'),
(298, 'Imo State', 'Ideato South'),
(299, 'Imo State', 'Ihitte/Uboma'),
(300, 'Imo State', 'Ikeduru'),
(301, 'Imo State', 'Isiala Mbano'),
(302, 'Imo State', 'Isu'),
(303, 'Imo State', 'Mbaitoli'),
(304, 'Imo State', 'Ngor Okpala'),
(305, 'Imo State', 'Njaba'),
(306, 'Imo State', 'Nkwerre'),
(307, 'Imo State', 'Nwangele'),
(308, 'Imo State', 'Obowo'),
(309, 'Imo State', 'Oguta'),
(310, 'Imo State', 'Ohaji/Egbema'),
(311, 'Imo State', 'Okigwe'),
(312, 'Imo State', 'Orlu'),
(313, 'Imo State', 'Orsu'),
(314, 'Imo State', 'Oru East'),
(315, 'Imo State', 'Oru West'),
(316, 'Imo State', 'Owerri Municipal'),
(317, 'Imo State', 'Owerri North'),
(318, 'Imo State', 'Owerri West'),
(319, 'Imo State', 'Unuimo'),
(320, 'Jigawa State', 'Auyo'),
(321, 'Jigawa State', 'Babura'),
(322, 'Jigawa State', 'Biriniwa'),
(323, 'Jigawa State', 'Birnin Kudu'),
(324, 'Jigawa State', 'Buji'),
(325, 'Jigawa State', 'Dutse'),
(326, 'Jigawa State', 'Gagarawa'),
(327, 'Jigawa State', 'Garki'),
(328, 'Jigawa State', 'Gumel'),
(329, 'Jigawa State', 'Guri'),
(330, 'Jigawa State', 'Gwaram'),
(331, 'Jigawa State', 'Gwiwa'),
(332, 'Jigawa State', 'Hadejia'),
(333, 'Jigawa State', 'Jahun'),
(334, 'Jigawa State', 'Kafin Hausa'),
(335, 'Jigawa State', 'Kaugama'),
(336, 'Jigawa State', 'Kazaure'),
(337, 'Jigawa State', 'Kiri Kasama'),
(338, 'Jigawa State', 'Kiyawa'),
(339, 'Jigawa State', 'Maigatari'),
(340, 'Jigawa State', 'Malam Madori'),
(341, 'Jigawa State', 'Miga'),
(342, 'Jigawa State', 'Ringim'),
(343, 'Jigawa State', 'Roni'),
(344, 'Jigawa State', 'Sule Tankarkar'),
(345, 'Jigawa State', 'Taura'),
(346, 'Jigawa State', 'Yankwashi'),
(347, 'Kaduna State', 'Birnin Gwari'),
(348, 'Kaduna State', 'Chikun'),
(349, 'Kaduna State', 'Giwa'),
(350, 'Kaduna State', 'Igabi'),
(351, 'Kaduna State', 'Ikara'),
(352, 'Kaduna State', 'Jaba'),
(353, 'Kaduna State', 'Jema''a'),
(354, 'Kaduna State', 'Kachia'),
(355, 'Kaduna State', 'Kaduna North'),
(356, 'Kaduna State', 'Kaduna South'),
(357, 'Kaduna State', 'Kagarko'),
(358, 'Kaduna State', 'Kajuru'),
(359, 'Kaduna State', 'Kaura'),
(360, 'Kaduna State', 'Kauru'),
(361, 'Kaduna State', 'Kubau'),
(362, 'Kaduna State', 'Kudan'),
(363, 'Kaduna State', 'Lere'),
(364, 'Kaduna State', 'Makarfi'),
(365, 'Kaduna State', 'Sabon Gari'),
(366, 'Kaduna State', 'Sanga'),
(367, 'Kaduna State', 'Soba'),
(368, 'Kaduna State', 'Zangon Kataf'),
(369, 'Kaduna State', 'Zaria'),
(370, 'Kano State', 'Ajingi'),
(371, 'Kano State', 'Albasu'),
(372, 'Kano State', 'Bagwai'),
(373, 'Kano State', 'Bebeji'),
(374, 'Kano State', 'Bichi'),
(375, 'Kano State', 'Bunkure'),
(376, 'Kano State', 'Dala'),
(377, 'Kano State', 'Dambatta'),
(378, 'Kano State', 'Dawakin Kudu'),
(379, 'Kano State', 'Dawakin Tofa'),
(380, 'Kano State', 'Doguwa'),
(381, 'Kano State', 'Fagge'),
(382, 'Kano State', 'Gabasawa'),
(383, 'Kano State', 'Garko'),
(384, 'Kano State', 'Garun Mallam'),
(385, 'Kano State', 'Gaya'),
(386, 'Kano State', 'Gezawa'),
(387, 'Kano State', 'Gwale'),
(388, 'Kano State', 'Gwarzo'),
(389, 'Kano State', 'Kabo'),
(390, 'Kano State', 'Kano Municipal'),
(391, 'Kano State', 'Karaye'),
(392, 'Kano State', 'Kibiya'),
(393, 'Kano State', 'Kiru'),
(394, 'Kano State', 'Kumbotso'),
(395, 'Kano State', 'Kunchi'),
(396, 'Kano State', 'Kura'),
(397, 'Kano State', 'Madobi'),
(398, 'Kano State', 'Makoda'),
(399, 'Kano State', 'Minjibir'),
(400, 'Kano State', 'Nasarawa'),
(401, 'Kano State', 'Rano'),
(402, 'Kano State', 'Rimin Gado'),
(403, 'Kano State', 'Rogo'),
(404, 'Kano State', 'Shanono'),
(405, 'Kano State', 'Sumaila'),
(406, 'Kano State', 'Takai'),
(407, 'Kano State', 'Tarauni'),
(408, 'Kano State', 'Tofa'),
(409, 'Kano State', 'Tsanyawa'),
(410, 'Kano State', 'Tudun Wada'),
(411, 'Kano State', 'Ungogo'),
(412, 'Kano State', 'Warawa'),
(413, 'Kano State', 'Wudil'),
(414, 'Katsina State', 'Bakori'),
(415, 'Katsina State', 'Batagarawa'),
(416, 'Katsina State', 'Batsari'),
(417, 'Katsina State', 'Baure'),
(418, 'Katsina State', 'Bindawa'),
(419, 'Katsina State', 'Charanchi'),
(420, 'Katsina State', 'Dan Musa'),
(421, 'Katsina State', 'Dandume'),
(422, 'Katsina State', 'Danja'),
(423, 'Katsina State', 'Daura'),
(424, 'Katsina State', 'Dutsi'),
(425, 'Katsina State', 'Dutsin Ma'),
(426, 'Katsina State', 'Faskari'),
(427, 'Katsina State', 'Funtua'),
(428, 'Katsina State', 'Ingawa'),
(429, 'Katsina State', 'Jibia'),
(430, 'Katsina State', 'Kafur'),
(431, 'Katsina State', 'Kaita'),
(432, 'Katsina State', 'Kankara'),
(433, 'Katsina State', 'Kankia'),
(434, 'Katsina State', 'Katsina'),
(435, 'Katsina State', 'Kurfi'),
(436, 'Katsina State', 'Kusada'),
(437, 'Katsina State', 'Mai''Adua'),
(438, 'Katsina State', 'Malumfashi'),
(439, 'Katsina State', 'Mani'),
(440, 'Katsina State', 'Mashi'),
(441, 'Katsina State', 'Matazu'),
(442, 'Katsina State', 'Musawa'),
(443, 'Katsina State', 'Rimi'),
(444, 'Katsina State', 'Sabuwa'),
(445, 'Katsina State', 'Safana'),
(446, 'Katsina State', 'Sandamu'),
(447, 'Katsina State', 'Zango'),
(448, 'Kebbi State', 'Aleiro'),
(449, 'Kebbi State', 'Arewa Dandi'),
(450, 'Kebbi State', 'Argungu'),
(451, 'Kebbi State', 'Augie'),
(452, 'Kebbi State', 'Bagudo'),
(453, 'Kebbi State', 'Birnin Kebbi'),
(454, 'Kebbi State', 'Bunza'),
(455, 'Kebbi State', 'Dandi'),
(456, 'Kebbi State', 'Fakai'),
(457, 'Kebbi State', 'Gwandu'),
(458, 'Kebbi State', 'Jega'),
(459, 'Kebbi State', 'Kalgo'),
(460, 'Kebbi State', 'Koko/Besse'),
(461, 'Kebbi State', 'Maiyama'),
(462, 'Kebbi State', 'Ngaski'),
(463, 'Kebbi State', 'Sakaba'),
(464, 'Kebbi State', 'Shanga'),
(465, 'Kebbi State', 'Suru'),
(466, 'Kebbi State', 'Wasagu/Danko'),
(467, 'Kebbi State', 'Yauri'),
(468, 'Kebbi State', 'Zuru'),
(469, 'Kogi State', 'Adavi'),
(470, 'Kogi State', 'Ajaokuta'),
(471, 'Kogi State', 'Ankpa'),
(472, 'Kogi State', 'Bassa'),
(473, 'Kogi State', 'Dekina'),
(474, 'Kogi State', 'Ibaji'),
(475, 'Kogi State', 'Idah'),
(476, 'Kogi State', 'Igalamela Odolu'),
(477, 'Kogi State', 'Ijumu'),
(478, 'Kogi State', 'Kabba/Bunu'),
(479, 'Kogi State', 'Kogi'),
(480, 'Kogi State', 'Lokoja'),
(481, 'Kogi State', 'Mopa Muro'),
(482, 'Kogi State', 'Ofu'),
(483, 'Kogi State', 'Ogori/Magongo'),
(484, 'Kogi State', 'Okehi'),
(485, 'Kogi State', 'Okene'),
(486, 'Kogi State', 'Olamaboro'),
(487, 'Kogi State', 'Omala'),
(488, 'Kogi State', 'Yagba East'),
(489, 'Kogi State', 'Yagba West'),
(490, 'Kwara State', 'Asa'),
(491, 'Kwara State', 'Baruten'),
(492, 'Kwara State', 'Edu'),
(493, 'Kwara State', 'Ekiti'),
(494, 'Kwara State', 'Ifelodun'),
(495, 'Kwara State', 'Ilorin East'),
(496, 'Kwara State', 'Ilorin South'),
(497, 'Kwara State', 'Ilorin West'),
(498, 'Kwara State', 'Irepodun'),
(499, 'Kwara State', 'Isin'),
(500, 'Kwara State', 'Kaiama'),
(501, 'Kwara State', 'Moro'),
(502, 'Kwara State', 'Offa'),
(503, 'Kwara State', 'Oke Ero'),
(504, 'Kwara State', 'Oyun'),
(505, 'Kwara State', 'Pategi'),
(506, 'Lagos State', 'Agege'),
(507, 'Lagos State', 'Ajeromi-Ifelodun'),
(508, 'Lagos State', 'Alimosho'),
(509, 'Lagos State', 'Amuwo-Odofin'),
(510, 'Lagos State', 'Apapa'),
(511, 'Lagos State', 'Badagry'),
(512, 'Lagos State', 'Epe'),
(513, 'Lagos State', 'Eti Osa'),
(514, 'Lagos State', 'Ibeju-Lekki'),
(515, 'Lagos State', 'Ifako-Ijaiye'),
(516, 'Lagos State', 'Ikeja'),
(517, 'Lagos State', 'Ikorodu'),
(518, 'Lagos State', 'Kosofe'),
(519, 'Lagos State', 'Lagos Island'),
(520, 'Lagos State', 'Lagos Mainland'),
(521, 'Lagos State', 'Mushin'),
(522, 'Lagos State', 'Ojo'),
(523, 'Lagos State', 'Oshodi-Isolo'),
(524, 'Lagos State', 'Shomolu'),
(525, 'Lagos State', 'Surulere'),
(526, 'Nasarawa State', 'Akwanga'),
(527, 'Nasarawa State', 'Awe'),
(528, 'Nasarawa State', 'Doma'),
(529, 'Nasarawa State', 'Karu'),
(530, 'Nasarawa State', 'Keana'),
(531, 'Nasarawa State', 'Keffi'),
(532, 'Nasarawa State', 'Kokona'),
(533, 'Nasarawa State', 'Lafia'),
(534, 'Nasarawa State', 'Nasarawa'),
(535, 'Nasarawa State', 'Nasarawa Egon'),
(536, 'Nasarawa State', 'Obi'),
(537, 'Nasarawa State', 'Toto'),
(538, 'Nasarawa State', 'Wamba'),
(539, 'Niger State', 'Agaie'),
(540, 'Niger State', 'Agwara'),
(541, 'Niger State', 'Bida'),
(542, 'Niger State', 'Borgu'),
(543, 'Niger State', 'Bosso'),
(544, 'Niger State', 'Chanchaga'),
(545, 'Niger State', 'Edati'),
(546, 'Niger State', 'Gbako'),
(547, 'Niger State', 'Gurara'),
(548, 'Niger State', 'Katcha'),
(549, 'Niger State', 'Kontagora'),
(550, 'Niger State', 'Lapai'),
(551, 'Niger State', 'Lavun'),
(552, 'Niger State', 'Magama'),
(553, 'Niger State', 'Mariga'),
(554, 'Niger State', 'Mashegu'),
(555, 'Niger State', 'Mokwa'),
(556, 'Niger State', 'Moya'),
(557, 'Niger State', 'Paikoro'),
(558, 'Niger State', 'Rafi'),
(559, 'Niger State', 'Rijau'),
(560, 'Niger State', 'Shiroro'),
(561, 'Niger State', 'Suleja'),
(562, 'Niger State', 'Tafa'),
(563, 'Niger State', 'Wushishi'),
(564, 'Ogun State', 'Abeokuta North'),
(565, 'Ogun State', 'Abeokuta South'),
(566, 'Ogun State', 'Ado-Odo/Ota'),
(567, 'Ogun State', 'Ewekoro'),
(568, 'Ogun State', 'Ifo'),
(569, 'Ogun State', 'Ijebu East'),
(570, 'Ogun State', 'Ijebu North'),
(571, 'Ogun State', 'Ijebu North East'),
(572, 'Ogun State', 'Ijebu Ode'),
(573, 'Ogun State', 'Ikenne'),
(574, 'Ogun State', 'Imeko Afon'),
(575, 'Ogun State', 'Ipokia'),
(576, 'Ogun State', 'Obafemi Owode'),
(577, 'Ogun State', 'Odeda'),
(578, 'Ogun State', 'Odogbolu'),
(579, 'Ogun State', 'Ogun Waterside'),
(580, 'Ogun State', 'Remo North'),
(581, 'Ogun State', 'Shagamu'),
(582, 'Ogun State', 'Yewa North'),
(583, 'Ogun State', 'Yewa South'),
(584, 'Ondo State', 'Akoko North-East'),
(585, 'Ondo State', 'Akoko North-West'),
(586, 'Ondo State', 'Akoko South-East'),
(587, 'Ondo State', 'Akoko South-West'),
(588, 'Ondo State', 'Akure North'),
(589, 'Ondo State', 'Akure South'),
(590, 'Ondo State', 'Ese Odo'),
(591, 'Ondo State', 'Idanre'),
(592, 'Ondo State', 'Ifedore'),
(593, 'Ondo State', 'Ilaje'),
(594, 'Ondo State', 'Ile Oluji/Okeigbo'),
(595, 'Ondo State', 'Irele'),
(596, 'Ondo State', 'Odigbo'),
(597, 'Ondo State', 'Okitipupa'),
(598, 'Ondo State', 'Ondo East'),
(599, 'Ondo State', 'Ondo West'),
(600, 'Ondo State', 'Ose'),
(601, 'Ondo State', 'Owo'),
(602, 'Osun State', 'Aiyedaade'),
(603, 'Osun State', 'Aiyedire'),
(604, 'Osun State', 'Atakunmosa East'),
(605, 'Osun State', 'Atakunmosa West'),
(606, 'Osun State', 'Boluwaduro'),
(607, 'Osun State', 'Boripe'),
(608, 'Osun State', 'Ede North'),
(609, 'Osun State', 'Ede South'),
(610, 'Osun State', 'Egbedore'),
(611, 'Osun State', 'Ejigbo'),
(612, 'Osun State', 'Ife Central'),
(613, 'Osun State', 'Ife East'),
(614, 'Osun State', 'Ife North'),
(615, 'Osun State', 'Ife South'),
(616, 'Osun State', 'Ifedayo'),
(617, 'Osun State', 'Ifelodun'),
(618, 'Osun State', 'Ila'),
(619, 'Osun State', 'Ilesa East'),
(620, 'Osun State', 'Ilesa West'),
(621, 'Osun State', 'Irepodun'),
(622, 'Osun State', 'Irewole'),
(623, 'Osun State', 'Isokan'),
(624, 'Osun State', 'Iwo'),
(625, 'Osun State', 'Obokun'),
(626, 'Osun State', 'Odo Otin'),
(627, 'Osun State', 'Ola Oluwa'),
(628, 'Osun State', 'Olorunda'),
(629, 'Osun State', 'Oriade'),
(630, 'Osun State', 'Orolu'),
(631, 'Osun State', 'Osogbo'),
(632, 'Oyo State', 'Afijio'),
(633, 'Oyo State', 'Akinyele'),
(634, 'Oyo State', 'Atiba'),
(635, 'Oyo State', 'Atisbo'),
(636, 'Oyo State', 'Egbeda'),
(637, 'Oyo State', 'Ibadan North'),
(638, 'Oyo State', 'Ibadan North-East'),
(639, 'Oyo State', 'Ibadan North-West'),
(640, 'Oyo State', 'Ibadan South-East'),
(641, 'Oyo State', 'Ibadan South-West'),
(642, 'Oyo State', 'Ibarapa Central'),
(643, 'Oyo State', 'Ibarapa East'),
(644, 'Oyo State', 'Ibarapa North'),
(645, 'Oyo State', 'Ido'),
(646, 'Oyo State', 'Irepo'),
(647, 'Oyo State', 'Iseyin'),
(648, 'Oyo State', 'Itesiwaju'),
(649, 'Oyo State', 'Iwajowa'),
(650, 'Oyo State', 'Kajola'),
(651, 'Oyo State', 'Lagelu'),
(652, 'Oyo State', 'Ogbomosho North'),
(653, 'Oyo State', 'Ogbomosho South'),
(654, 'Oyo State', 'Ogo Oluwa'),
(655, 'Oyo State', 'Olorunsogo'),
(656, 'Oyo State', 'Oluyole'),
(657, 'Oyo State', 'Ona Ara'),
(658, 'Oyo State', 'Orelope'),
(659, 'Oyo State', 'Ori Ire'),
(660, 'Oyo State', 'Oyo'),
(661, 'Oyo State', 'Oyo East'),
(662, 'Oyo State', 'Saki East'),
(663, 'Oyo State', 'Saki West'),
(664, 'Oyo State', 'Surulere'),
(665, 'Plateau State', 'Barkin Ladi'),
(666, 'Plateau State', 'Bassa'),
(667, 'Plateau State', 'Bokkos'),
(668, 'Plateau State', 'Jos East'),
(669, 'Plateau State', 'Jos North'),
(670, 'Plateau State', 'Jos South'),
(671, 'Plateau State', 'Kanam'),
(672, 'Plateau State', 'Kanke'),
(673, 'Plateau State', 'Langtang North'),
(674, 'Plateau State', 'Langtang South'),
(675, 'Plateau State', 'Mangu'),
(676, 'Plateau State', 'Mikang'),
(677, 'Plateau State', 'Pankshin'),
(678, 'Plateau State', 'Qua''an Pan'),
(679, 'Plateau State', 'Riyom'),
(680, 'Plateau State', 'Shendam'),
(681, 'Plateau State', 'Wase'),
(682, 'Rivers State', 'Abua/Odual'),
(683, 'Rivers State', 'Ahoada East'),
(684, 'Rivers State', 'Ahoada West'),
(685, 'Rivers State', 'Akuku-Toru'),
(686, 'Rivers State', 'Andoni'),
(687, 'Rivers State', 'Asari-Toru'),
(688, 'Rivers State', 'Bonny'),
(689, 'Rivers State', 'Degema'),
(690, 'Rivers State', 'Eleme'),
(691, 'Rivers State', 'Emuoha'),
(692, 'Rivers State', 'Etche'),
(693, 'Rivers State', 'Gokana'),
(694, 'Rivers State', 'Ikwerre'),
(695, 'Rivers State', 'Khana'),
(696, 'Rivers State', 'Obio/Akpor'),
(697, 'Rivers State', 'Ogba/Egbema/Ndoni'),
(698, 'Rivers State', 'Ogu/Bolo'),
(699, 'Rivers State', 'Okrika'),
(700, 'Rivers State', 'Omuma'),
(701, 'Rivers State', 'Opobo/Nkoro'),
(702, 'Rivers State', 'Oyigbo'),
(703, 'Rivers State', 'Port Harcourt'),
(704, 'Rivers State', 'Tai'),
(705, 'Sokoto State', 'Binji'),
(706, 'Sokoto State', 'Bodinga'),
(707, 'Sokoto State', 'Dange Shuni'),
(708, 'Sokoto State', 'Gada'),
(709, 'Sokoto State', 'Goronyo'),
(710, 'Sokoto State', 'Gudu'),
(711, 'Sokoto State', 'Gwadabawa'),
(712, 'Sokoto State', 'Illela'),
(713, 'Sokoto State', 'Isa'),
(714, 'Sokoto State', 'Kebbe'),
(715, 'Sokoto State', 'Kware'),
(716, 'Sokoto State', 'Rabah'),
(717, 'Sokoto State', 'Sabon Birni'),
(718, 'Sokoto State', 'Shagari'),
(719, 'Sokoto State', 'Silame'),
(720, 'Sokoto State', 'Sokoto North'),
(721, 'Sokoto State', 'Sokoto South'),
(722, 'Sokoto State', 'Tambuwal'),
(723, 'Sokoto State', 'Tangaza'),
(724, 'Sokoto State', 'Tureta'),
(725, 'Sokoto State', 'Wamako'),
(726, 'Sokoto State', 'Wurno'),
(727, 'Sokoto State', 'Yabo'),
(728, 'Taraba State', 'Ardo Kola'),
(729, 'Taraba State', 'Bali'),
(730, 'Taraba State', 'Donga'),
(731, 'Taraba State', 'Gashaka'),
(732, 'Taraba State', 'Gassol'),
(733, 'Taraba State', 'Ibi'),
(734, 'Taraba State', 'Jalingo'),
(735, 'Taraba State', 'Karim Lamido'),
(736, 'Taraba State', 'Kumi'),
(737, 'Taraba State', 'Lau'),
(738, 'Taraba State', 'Sardauna'),
(739, 'Taraba State', 'Takum'),
(740, 'Taraba State', 'Ussa'),
(741, 'Taraba State', 'Wukari'),
(742, 'Taraba State', 'Yorro'),
(743, 'Taraba State', 'Zing'),
(744, 'Yobe State', 'Bade'),
(745, 'Yobe State', 'Bursari'),
(746, 'Yobe State', 'Damaturu'),
(747, 'Yobe State', 'Fika'),
(748, 'Yobe State', 'Fune'),
(749, 'Yobe State', 'Geidam'),
(750, 'Yobe State', 'Gujba'),
(751, 'Yobe State', 'Gulani'),
(752, 'Yobe State', 'Jakusko'),
(753, 'Yobe State', 'Karasuwa'),
(754, 'Yobe State', 'Machina'),
(755, 'Yobe State', 'Nangere'),
(756, 'Yobe State', 'Nguru'),
(757, 'Yobe State', 'Potiskum'),
(758, 'Yobe State', 'Tarmuwa'),
(759, 'Yobe State', 'Yunusari'),
(760, 'Yobe State', 'Yusufari'),
(761, 'Zamfara State', 'Anka'),
(762, 'Zamfara State', 'Bakura'),
(763, 'Zamfara State', 'Birnin Magaji/Kiyaw'),
(764, 'Zamfara State', 'Bukkuyum'),
(765, 'Zamfara State', 'Bungudu'),
(766, 'Zamfara State', 'Chafe'),
(767, 'Zamfara State', 'Gummi'),
(768, 'Zamfara State', 'Gusau'),
(769, 'Zamfara State', 'Kaura Namoda'),
(770, 'Zamfara State', 'Maradun'),
(771, 'Zamfara State', 'Maru'),
(772, 'Zamfara State', 'Shinkafi'),
(773, 'Zamfara State', 'Talata Mafara'),
(774, 'Zamfara State', 'Zurmi');

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
  `completed` tinyint(1) DEFAULT 0,
  `accepted` tinyint(1) DEFAULT 0,
  `denied` tinyint(1) DEFAULT 0,
  `verified` tinyint(1) DEFAULT 0,
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`id`, `recruit_id`, `title`, `mname`, `gender`, `nationality`, `dob`, `height`, `nin`, `phone`, `permAddress`, `permStreet`, `permLga`, `permState`, `curAddress`, `curStreet`, `curLga`, `curState`, `prefAddress`, `filled`, `completed`, `accepted`, `denied`, `verified`, `status`) VALUES
(1, 1, 'mr', NULL, 'female', 'Nigeria', '2018-03-10', NULL, '0954', '07060678275', '5, mimi street Kubwa', '5', 'Aba North', 'Abia State', '5, mimi street Kubwa', '5', 'Aba North', 'Abia State', NULL, 1, 1, 1, 0, 1, 1),
(2, 2, 'mr', NULL, 'male', 'Nigeria', '2018-03-03', NULL, '2033', '07060678275', 'Malama road garki', '5', 'temp', 'state', 'Malama Road', '5', 'temp', 'temp', NULL, 1, 1, 0, 1, 1, 1),
(3, 3, 'mrs', NULL, 'female', 'Nigeria', '2018-03-03', NULL, '8889832', '07067323444', 'Adjacent Close', '5', 'temp', 'state', 'Adjacent Close', '5', 'temp', 'temp', NULL, 1, 1, 0, 1, 1, 1),
(4, 4, 'mr', NULL, 'female', 'Nigeria', '2018-03-10', NULL, '54433', '07060678275', 'Malama road garki', '10', 'temp', 'state', 'Malama Road', '15', 'temp', 'temp', NULL, 1, 1, 0, 1, 1, 1),
(5, 5, 'mr', NULL, 'male', 'Nigeria', '2018-02-15', NULL, '90991', '07060678275', 'Malama road garki', '10', 'temp', 'state', 'Malama Road', '15', 'temp', 'temp', NULL, 1, 1, 0, 1, 1, 1),
(6, 6, 'mr', NULL, 'female', 'Nigeria', '2018-03-03', NULL, '0954', '0807078433', 'Malama road garki', '5', 'temp', 'state', 'Malama Road', '5', 'temp', 'temp', NULL, 1, 1, 0, 0, 0, 1),
(7, 7, 'mr', NULL, 'male', 'Nigeria', '2018-03-03', NULL, '8889832', '07060678275', 'Malama road garki', '3', 'temp', 'state', 'Adjacent Close', '5', 'temp', 'temp', NULL, 1, 1, 0, 0, 0, 1),
(8, 8, 'mr', NULL, 'female', 'Nigeria', '2018-03-03', NULL, '8889832', '07060678275', 'Malama road garki', '10', 'temp', 'state', 'Adjacent Close', '5', 'temp', 'temp', NULL, 1, 1, 0, 0, 0, 1),
(9, 9, 'mr', NULL, 'female', 'Nigeria', '2018-03-03', NULL, '983342', '07067323444', 'Malama road garki', '5', 'temp', 'state', 'Adjacent Close', '15', 'temp', 'temp', NULL, 0, 0, 0, 0, 0, 1);

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
  `fos` tinytext,
  `highest_qual` tinytext
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professional_qualifications`
--

INSERT INTO `professional_qualifications` (`id`, `recruit_id`, `startdate`, `enddate`, `qualification`, `institution`, `city`, `country`, `reg_no`, `level`, `grade`, `fos`, `highest_qual`) VALUES
(1, 9, '2018-03-03', '2018-03-03', '', 'hhhhhhhhhhhh', 'hhhhhh', 'temp', '867867', 'jjjhhhjjjjj', '889897', 'hjjkhjkj', 'uuuyyuiuyu'),
(3, 1, '2001', '2005', '', 'Webtronet Solutions Ltd', 'Awka', 'Nigeria', '', '', '', 'Webdesign and Development', ''),
(4, 1, '2014', '2017', '', 'Tech point', 'Abuja', 'Nigeria', '', '', '', 'Mobile App Development', ''),
(5, 1, '1986', '1984', '', 'Amazon', 'San Fransisco', 'United States of America', '', '', '', 'Amazon Web Service ', ''),
(6, 1, '1988', '1989', '', 'Swaptify', 'Awka', 'Nigeria', '', '', '', 'Electronics', '');

-- --------------------------------------------------------

--
-- Table structure for table `recruit`
--

CREATE TABLE IF NOT EXISTS `recruit` (
`id` int(11) unsigned NOT NULL,
  `fname` tinytext NOT NULL,
  `sname` tinytext NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recruit`
--

INSERT INTO `recruit` (`id`, `fname`, `sname`, `email`, `password`) VALUES
(1, 'Michael', 'Akpobome', 'mike98989@gmail.com', '$2y$10$t38wYkMKloEd6Rh/9QXUCOBamjYlKQHzFSV6/aaT3giqwYn.c/y7C'),
(2, 'James', 'Amata', 'james_amata@gmail.com', '$2y$10$C6dD4npZ3mJynZL.spu2HegewKH5b48j.rujNIgNw8Fdo.Xmo3Ahu'),
(3, 'Maryann', 'Haruna', 'maryann_haruna@gmail.com', '$2y$10$35YgQUftivpPGOiY4e7ng.aCEBUEyQUuiHcK3yeBtl3Hq.ie9ij7y'),
(4, 'Abigail', 'Abama', 'abigail2017@gmail.com', '$2y$10$ZJUxpivAPf0C0K48PlXpBOzMy9z6eOT.n3ceEuLMrnid72S64MfnC'),
(5, 'Henry', 'Monday', 'henry_m@gmai.com', '$2y$10$a2CIkBvW0HX7Fw0QEhOabeiLGFh5MIIo/fiIZO66WlqQG5QIwaiqu'),
(6, 'Ebuja', 'Abaka', 'ebuja@gmail.com', '$2y$10$1gMOuzQCKlWFoSfkZq.1Fu2cN.8xWr7shrVxubtsusWU22b1uqffi'),
(7, 'kabungu', 'Kabungu', 'kabungu@gmail.com', '$2y$10$q0F3sl6bVZbFyqrEcNRRL.FOqrkMFF0aCAbUcd8hYljWfYzHkQJXK'),
(8, 'Dumebi', 'Akugo', 'dumebiakugo@gmail.com', '$2y$10$4HHUF3gHXGVYcvRp9StI3O9F4sfSUeb1PK5JdVHEEhf61eT0W6kya'),
(9, 'Kingsley', 'Arujovwe', 'kingsleyk@gmail.com', '$2y$10$l9sK/2/whiRkwmxfWUS1A.GqfZTO3BIF7ZlJz9CpZhhEBqicKNHvC');

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
-- Table structure for table `work_experience`
--

CREATE TABLE IF NOT EXISTS `work_experience` (
`id` int(11) unsigned NOT NULL,
  `recruit_id` int(11) unsigned NOT NULL,
  `startdate` varchar(20) NOT NULL,
  `enddate` varchar(20) NOT NULL,
  `role` tinytext,
  `organization` tinytext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_experience`
--

INSERT INTO `work_experience` (`id`, `recruit_id`, `startdate`, `enddate`, `role`, `organization`) VALUES
(3, 1, '2018-03-03', '2018-03-10', 'Application developer', 'Swaptify Solutions Ltd'),
(4, 1, '2018-03-10', '2018-03-16', 'Graphix Designer', 'Hakonix Technologies'),
(5, 1, '2018-03-17', '2018-03-29', 'Proxag concept', 'Software Engineer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `recruit_id` (`recruit_id`);

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
-- Indexes for table `hr_admin`
--
ALTER TABLE `hr_admin`
 ADD PRIMARY KEY (`ID`), ADD KEY `user_email` (`admin_email`);

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
-- Indexes for table `work_experience`
--
ALTER TABLE `work_experience`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attachments`
--
ALTER TABLE `attachments`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `attachments_list`
--
ALTER TABLE `attachments_list`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=251;
--
-- AUTO_INCREMENT for table `educational_qualifications`
--
ALTER TABLE `educational_qualifications`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `hr_admin`
--
ALTER TABLE `hr_admin`
MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `professional_qualifications`
--
ALTER TABLE `professional_qualifications`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `recruit`
--
ALTER TABLE `recruit`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `result_classifications`
--
ALTER TABLE `result_classifications`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `work_experience`
--
ALTER TABLE `work_experience`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
