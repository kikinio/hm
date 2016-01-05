-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2015 at 10:27 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'English Premier League Football Teams'),
(2, 'Countries');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(60) DEFAULT NULL,
  `LastName` varchar(60) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `FirstName`, `LastName`, `Age`) VALUES
(1, 'Peter', 'Griffin', 41),
(2, 'Lois', 'Griffin', 40),
(3, 'Joseph', 'Swanson', 39),
(4, 'Glenn', 'Quagmire', 41);

-- --------------------------------------------------------

--
-- Table structure for table `words`
--

CREATE TABLE IF NOT EXISTS `words` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `word` text,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=285 ;

--
-- Dumping data for table `words`
--

INSERT INTO `words` (`id`, `word`, `category_id`) VALUES
(1, 'chelsea', 1),
(2, 'newcastle', 1),
(3, 'tottenham', 1),
(4, 'Leicester', 1),
(5, 'arsenal', 1),
(6, 'everton', 1),
(7, 'southampton', 1),
(8, 'Afghanistan', 2),
(9, 'Albania', 2),
(10, 'Algeria', 2),
(11, 'American Samoa', 2),
(12, 'Andorra', 2),
(13, 'Angola', 2),
(14, 'Angola', 2),
(15, 'Anguilla', 2),
(16, 'Antarctica', 2),
(17, 'Antigua And Barbuda', 2),
(18, 'Argentina', 2),
(19, 'Armenia', 2),
(20, 'Aruba', 2),
(21, 'Australia', 2),
(22, 'Austria', 2),
(23, 'Azerbaijan', 2),
(24, 'Bahamas', 2),
(25, 'Bahrain', 2),
(26, 'Bangladesh', 2),
(27, 'Barbados', 2),
(28, 'Belarus', 2),
(29, 'Belgium', 2),
(30, 'Belize', 2),
(31, 'Benin', 2),
(32, 'Bermuda', 2),
(33, 'Bhutan', 2),
(34, 'Bolivia', 2),
(35, 'Bosnia And Herzegovina', 2),
(36, 'Botswana', 2),
(37, 'Bouvet Island', 2),
(38, 'Brazil', 2),
(39, 'British Indian Ocean Territory', 2),
(40, 'Brunei Darussalam', 2),
(41, 'Bulgaria', 2),
(42, 'Burkina Faso', 2),
(43, 'Burundi', 2),
(44, 'Cambodia', 2),
(45, 'Cameroon', 2),
(46, 'Canada', 2),
(47, 'Cape Verde', 2),
(48, 'Cayman Islands', 2),
(49, 'Central African Republic', 2),
(50, 'Chad', 2),
(51, 'Chile', 2),
(52, 'China', 2),
(53, 'Christmas Island', 2),
(54, 'Cocos (keeling) Islands', 2),
(55, 'Colombia', 2),
(56, 'Comoros', 2),
(57, 'Congo', 2),
(58, 'Congo; The Democratic Republic Of The', 2),
(59, 'Cook Islands', 2),
(60, 'Costa Rica', 2),
(61, 'Bangladesh', 2),
(62, 'Barbados', 2),
(63, 'Belarus', 2),
(64, 'Belgium', 2),
(65, 'Belize', 2),
(66, 'Benin', 2),
(67, 'Bermuda', 2),
(68, 'Bhutan', 2),
(69, 'Bolivia', 2),
(70, 'Bosnia And Herzegovina', 2),
(71, 'Botswana', 2),
(72, 'Bouvet Island', 2),
(73, 'Brazil', 2),
(74, 'British Indian Ocean Territory', 2),
(75, 'Brunei Darussalam', 2),
(76, 'Bulgaria', 2),
(77, 'Burkina Faso', 2),
(78, 'Burundi', 2),
(79, 'Cambodia', 2),
(80, 'Cameroon', 2),
(81, 'Canada', 2),
(82, 'Cape Verde', 2),
(83, 'Cayman Islands', 2),
(84, 'Central African Republic', 2),
(85, 'Chad', 2),
(86, 'Chile', 2),
(87, 'China', 2),
(88, 'Christmas Island', 2),
(89, 'Cocos (keeling) Islands', 2),
(90, 'Colombia', 2),
(91, 'Comoros', 2),
(92, 'Congo', 2),
(93, 'Congo; The Democratic Republic Of The', 2),
(94, 'Cook Islands', 2),
(95, 'Costa Rica', 2),
(96, 'Cote Divoire', 2),
(97, 'Croatia', 2),
(98, 'Cuba', 2),
(99, 'Cyprus', 2),
(100, 'Czech Republic', 2),
(101, 'Denmark', 2),
(102, 'Djibouti', 2),
(103, 'Dominica', 2),
(104, 'Dominican Republic', 2),
(105, 'East Timor', 2),
(106, 'Ecuador', 2),
(107, 'Egypt', 2),
(108, 'El Salvador', 2),
(109, 'Equatorial Guinea', 2),
(110, 'Eritrea', 2),
(111, 'Estonia', 2),
(112, 'Ethiopia', 2),
(113, 'Falkland Islands (malvinas)', 2),
(114, 'Faroe Islands', 2),
(115, 'Fiji', 2),
(116, 'Finland', 2),
(117, 'France', 2),
(118, 'French Guiana', 2),
(119, 'French Polynesia', 2),
(120, 'French Southern Territories', 2),
(121, 'Gabon', 2),
(122, 'Gambia', 2),
(123, 'Georgia', 2),
(124, 'Germany', 2),
(125, 'Ghana', 2),
(126, 'Gibraltar', 2),
(127, 'Greece', 2),
(128, 'Greenland', 2),
(129, 'Grenada', 2),
(130, 'Guadeloupe', 2),
(131, 'Guam', 2),
(132, 'Guatemala', 2),
(133, 'Guinea', 2),
(134, 'Guinea-bissau', 2),
(135, 'Guyana', 2),
(136, 'Haiti', 2),
(137, 'Heard Island And Mcdonald Islands', 2),
(138, 'Holy See (vatican City State)', 2),
(139, 'Honduras', 2),
(140, 'Hong Kong', 2),
(141, 'Hungary', 2),
(142, 'Iceland', 2),
(143, 'India', 2),
(144, 'Indonesia', 2),
(145, 'Iran; Islamic Republic Of', 2),
(146, 'Iraq', 2),
(147, 'Ireland', 2),
(148, 'Israel', 2),
(149, 'Italy', 2),
(150, 'Jamaica', 2),
(151, 'Japan', 2),
(152, 'Jordan', 2),
(153, 'Kazakstan', 2),
(154, 'Kenya', 2),
(155, 'Kiribati', 2),
(156, 'Korea; Democratic Peoples Republic Of', 2),
(157, 'Korea; Republic Of', 2),
(158, 'Kosovo', 2),
(159, 'Kuwait', 2),
(160, 'Kyrgyzstan', 2),
(161, 'Lao Peoples Democratic Republic', 2),
(162, 'Latvia', 2),
(163, 'Lebanon', 2),
(164, 'Lesotho', 2),
(165, 'Liberia', 2),
(166, 'Libyan Arab Jamahiriya', 2),
(167, 'Liechtenstein', 2),
(168, 'Lithuania', 2),
(169, 'Luxembourg', 2),
(170, 'Macau', 2),
(171, 'Macedonia; The Former Yugoslav Republic Of', 2),
(172, 'Madagascar', 2),
(173, 'Malawi', 2),
(174, 'Malaysia', 2),
(175, 'Maldives', 2),
(176, 'Mali', 2),
(177, 'Malta', 2),
(178, 'Marshall Islands', 2),
(179, 'Martinique', 2),
(180, 'Mauritania', 2),
(181, 'Mauritius', 2),
(182, 'Mayotte', 2),
(183, 'Mexico', 2),
(184, 'Micronesia; Federated States Of', 2),
(185, 'Moldova; Republic Of', 2),
(186, 'Monaco', 2),
(187, 'Mongolia', 2),
(188, 'Montserrat', 2),
(189, 'Montenegro', 2),
(190, 'Morocco', 2),
(191, 'Mozambique', 2),
(192, 'Myanmar', 2),
(193, 'Namibia', 2),
(194, 'Nauru', 2),
(195, 'Nepal', 2),
(196, 'Netherlands', 2),
(197, 'Netherlands Antilles', 2),
(198, 'New Caledonia', 2),
(199, 'New Zealand', 2),
(200, 'Nicaragua', 2),
(201, 'Niger', 2),
(202, 'Nigeria', 2),
(203, 'Niue', 2),
(204, 'Norfolk Island', 2),
(205, 'Northern Mariana Islands', 2),
(206, 'Norway', 2),
(207, 'Oman', 2),
(208, 'Pakistan', 2),
(209, 'Palau', 2),
(210, 'Palestinian Territory; Occupied', 2),
(211, 'Panama', 2),
(212, 'Papua New Guinea', 2),
(213, 'Paraguay', 2),
(214, 'Peru', 2),
(215, 'Philippines', 2),
(216, 'Pitcairn', 2),
(217, 'Poland', 2),
(218, 'Portugal', 2),
(219, 'Puerto Rico', 2),
(220, 'Qatar', 2),
(221, 'Reunion', 2),
(222, 'Romania', 2),
(223, 'Russian Federation', 2),
(224, 'Rwanda', 2),
(225, 'Saint Helena', 2),
(226, 'Saint Kitts And Nevis', 2),
(227, 'Saint Lucia', 2),
(228, 'Saint Pierre And Miquelon', 2),
(229, 'Saint Vincent And The Grenadines', 2),
(230, 'Samoa', 2),
(231, 'San Marino', 2),
(232, 'Sao Tome And Principe', 2),
(233, 'Saudi Arabia', 2),
(234, 'Senegal', 2),
(235, 'Serbia', 2),
(236, 'Seychelles', 2),
(237, 'Sierra Leone', 2),
(238, 'Singapore', 2),
(239, 'Slovakia', 2),
(240, 'Slovenia', 2),
(241, 'Solomon Islands', 2),
(242, 'Somalia', 2),
(243, 'South Africa', 2),
(244, 'South Georgia And The South Sandwich Islands', 2),
(245, 'Spain', 2),
(246, 'Sri Lanka', 2),
(247, 'Sudan', 2),
(248, 'Suriname', 2),
(249, 'Svalbard And Jan Mayen', 2),
(250, 'Swaziland', 2),
(251, 'Sweden', 2),
(252, 'Switzerland', 2),
(253, 'Syrian Arab Republic', 2),
(254, 'Taiwan; Province Of China', 2),
(255, 'Tajikistan', 2),
(256, 'Tanzania; United Republic Of', 2),
(257, 'Thailand', 2),
(258, 'Togo', 2),
(259, 'Tokelau', 2),
(260, 'Tonga', 2),
(261, 'Trinidad And Tobago', 2),
(262, 'Tunisia', 2),
(263, 'Turkey', 2),
(264, 'Turkmenistan', 2),
(265, 'Turks And Caicos Islands', 2),
(266, 'Tuvalu', 2),
(267, 'Uganda', 2),
(268, 'Ukraine', 2),
(269, 'United Arab Emirates', 2),
(270, 'United Kingdom', 2),
(271, 'United States', 2),
(272, 'United States Minor Outlying Islands', 2),
(273, 'Uruguay', 2),
(274, 'Uzbekistan', 2),
(275, 'Vanuatu', 2),
(276, 'Venezuela', 2),
(277, 'Viet Nam', 2),
(278, 'Virgin Islands; British', 2),
(279, 'Virgin Islands; U.s.', 2),
(280, 'Wallis And Futuna', 2),
(281, 'Western Sahara', 2),
(282, 'Yemen', 2),
(283, 'Zambia', 2),
(284, 'Zimbabwe', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
