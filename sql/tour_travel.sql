-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2017 at 11:40 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tour_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `album_list`
--

CREATE TABLE IF NOT EXISTS `album_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tour_album` varchar(100) NOT NULL,
  `short_desc` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `album_list`
--

INSERT INTO `album_list` (`id`, `tour_album`, `short_desc`, `image`, `created_date`, `updated_date`) VALUES
(1, 'Londons', 'London Tour ', '20170706064940.jpg', '2017-06-06 14:54:47', '2017-06-06 14:54:47'),
(2, 'France', 'enjoy ', '20170620083415.jpg', '2017-06-06 14:55:54', '2017-06-06 14:55:54');

-- --------------------------------------------------------

--
-- Table structure for table `album_list_images`
--

CREATE TABLE IF NOT EXISTS `album_list_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `tour_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `album_list_images`
--

INSERT INTO `album_list_images` (`id`, `name`, `image`, `tour_id`) VALUES
(2, 'Garden', '20170620075010.jpg', 1),
(3, 'Mountains', '20170620075410.jpg', 1),
(4, 'Evenings', '20170620075426.jpg', 1),
(5, 'Airport', '20170620075448.jpg', 1),
(6, 'Mornings', '20170620075507.jpg', 1),
(7, 'River', '20170620075533.jpg', 1),
(15, 'winter3', '20170621103347.jpg', 2),
(14, 'Winter2', '20170621103328.jpg', 2),
(16, 'winter4', '20170621103405.jpg', 2),
(17, 'winter5', '20170621103427.jpg', 2),
(18, 'winter6', '20170621103444.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `created_date`, `updated_date`) VALUES
(1, 'water sports', '2017-06-05 22:46:39', '2017-06-05 22:46:39'),
(2, 'rock climbing', '2017-06-05 22:48:15', '2017-06-05 22:48:15'),
(5, 'test', '2017-06-06 15:01:06', '2017-06-06 15:01:06'),
(6, 'ice sliding', '2017-06-06 16:06:05', '2017-06-06 16:06:05'),
(7, 'slides', '2017-06-06 16:10:42', '2017-06-06 16:10:42'),
(8, 'water sliding', '2017-06-06 16:13:19', '2017-06-06 16:13:19'),
(9, 'practice', '2017-06-06 18:47:41', '2017-06-06 18:47:41'),
(10, 'para', '2017-06-08 01:23:40', '2017-06-08 01:23:40'),
(34, 'hotels', '2017-07-06 22:27:40', '2017-07-06 22:27:40'),
(33, 'water activity', '2017-07-06 12:15:48', '2017-07-06 12:15:48'),
(32, 'test12', '2017-06-23 19:22:24', '2017-06-23 19:22:24'),
(31, 'test', '2017-06-19 18:55:51', '2017-06-19 18:55:51');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE IF NOT EXISTS `order_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` varchar(100) NOT NULL,
  `people` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`id`, `name`, `address`, `phone`, `email`, `date`, `people`, `status`, `created_date`, `updated_date`) VALUES
(4, 'maryrose', 'london', '84526890', 'sdh@gmail.com', '2nd jan', '10', 'completed', '2017-06-13 18:57:06', '2017-06-13 18:57:06'),
(2, 'Tanvi Naik', 'ew', 'ew', 'jskfnewj@gmail.com', '29/04/1991', 'ew', 'rejected', '2017-06-08 01:15:19', '2017-06-08 01:15:19'),
(3, 'Leo', 'virar west', '99784896003', 'leo2gmail.com', '29/04', '4', 'rejected', '2017-06-08 15:15:54', '2017-06-08 15:15:54'),
(5, 'Neha Raut', 'pune', '8592695445', 'nehag@gmail.com', '12 th jan', '15', 'active', '2017-06-14 18:15:50', '2017-06-14 18:15:50'),
(6, 'Sumeet', 'xyz', '3547687', 'tanvi@gmail.com', '12jan', '3', 'completed', '2017-06-17 17:33:16', '2017-06-17 17:33:16'),
(8, 'Virat Kohli', 'Mumbai', '937493274', 'vaidgjh@gmail.com', '12 june', '10', 'active', '2017-06-18 20:09:10', '2017-06-18 20:09:10'),
(10, 'Sonesha', 'Mumbai west', '9072862786', 'hdhjh@gmail.com', '15th jan', '10', 'active', '2017-06-22 21:20:44', '2017-06-22 21:20:44'),
(11, 'Zarin', 'Kurla', '3578384574', 'zarin@gmail.com', '15 th jan', '10', 'completed', '2017-06-23 19:32:02', '2017-06-23 19:32:02'),
(12, 'Avinash', 'Pune', '983463849', 'avi@gmail.com', '07/19/2017', '12', 'rejected', '2017-07-06 12:32:24', '2017-07-06 12:32:24'),
(13, 'sonam', 'dhonde', '9354723584', 'tanvinaik35@gmail.com', '07/28/2017', '2', 'active', '2017-07-06 12:40:58', '2017-07-06 12:40:58'),
(14, 'summet', 'pune', '849685349', 'tanvinaik35@gmail.com', '07/18/2017', '12', 'completed', '2017-07-06 22:33:00', '2017-07-06 22:33:00'),
(15, 'varsha', 'borivali', '123548797', 'varsha@gmail.com', '12/30/2017', '2', 'rejected', '2017-12-02 12:15:23', '2017-12-02 12:15:23');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(100) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`) VALUES
(1, 'website', 'Trevon, Travel and Tourisms one																	'),
(2, 'address', 'malad'),
(3, 'mobile', '67898097578'),
(4, 'email', 'tanvinaik1@gmail.com'),
(6, 'partnerslogo', '2.jpg,3.jpg,4.jpg,7.jpg,8.jpg'),
(7, 'logo', '20170614125516.png'),
(8, 'facebook', 'http://facebook.com/YOU'),
(9, 'google', 'http://google.com/YOU'),
(10, 'twitter', 'http://t.co/YOU'),
(11, 'link', 'http://link.com/YOU'),
(12, 'utube', 'http://youtube.com/YOU'),
(13, 'heading', 'What We Do'),
(14, 'text', '				 				 				 				 				 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quis, ipsam. Maiores soluta facere accusantium modi libero ullam maxime alias quam sequi neque quae, vero ratione officiis rem deleniti, fugiat commodi voluptas voluptatum ut provident, laboriosam,				 				 				 				 				 '),
(15, 'editor', '<p><iframe align="middle" frameborder="1" height="317" longdesc="Paris Tour" scrolling="no" src="https://www.youtube.com/embed/AQ6GmpMu5L8" width="560"></iframe><iframe align="middle" frameborder="1" height="315" longdesc="Swiz Tour" scrolling="no" src="https://www.youtube.com/embed/24VvcOVg-fg" width="560"></iframe></p>\r\n\r\n<div id="editor">&nbsp;</div>\r\n\r\n<div id="editor">&nbsp;</div>\r\n\r\n<div id="editor">&nbsp;</div>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `bold_text` varchar(100) NOT NULL,
  `small_text` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `bold_text`, `small_text`, `created_date`, `updated_date`) VALUES
(15, '20170621054539.jpg', 'california', 'LA', '2017-06-21 11:15:39', '2017-06-21 11:15:39'),
(17, '20170621083937.jpg', 'Island', 'Island', '2017-06-21 14:09:37', '2017-06-21 14:09:37'),
(13, '20170621054231.jpg', 'Germany', 'Gm', '2017-06-21 11:12:31', '2017-06-21 11:12:31');

-- --------------------------------------------------------

--
-- Table structure for table `tour_list`
--

CREATE TABLE IF NOT EXISTS `tour_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tour_name` varchar(50) NOT NULL,
  `tour_cost` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `tour_list`
--

INSERT INTO `tour_list` (`id`, `tour_name`, `tour_cost`, `duration`, `location`, `category`, `image`, `description`, `created_date`, `updated_date`) VALUES
(45, 'Phuket', '1200$', '15days', 'Coral Island', '1', '20170627102208.jpg', ' Lorem ipsum dolor sit amet, consetetur sadipscing\r\n elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna\r\n aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo \r\ndolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus \r\nest Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur \r\nsadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et \r\ndolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et\r\n justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea \r\ntakimata sanctus est Lorem ipsum dolor sit amet', '2017-06-27 15:52:08', '2017-06-27 15:52:08'),
(41, 'Darjeeling', '1200$', '10 days', 'Sikkim', '10', '20170621053121.jpg', 'greenary', '2017-06-21 11:01:21', '2017-06-21 11:01:21'),
(36, 'China', '1200$', '10 days', 'cina', '1', '20170620184656.jpg', 'ABC', '2017-06-21 00:16:56', '2017-06-21 00:16:56'),
(44, 'India', '1200$', '10 days', 'Dehradun', '1', '20170627101019.jpg', ' Lorem ipsum dolor sit amet, consetetur sadipscing\r\n elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna\r\n aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo \r\ndolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus \r\nest Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur \r\nsadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et \r\ndolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et\r\n justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea \r\ntakimata sanctus est Lorem ipsum dolor sit amet', '2017-06-27 15:40:19', '2017-06-27 15:40:19'),
(38, 'Bali', '1200$', '10 days', 'Indonesia', '1', '20170621052650.jpg', 'Fun', '2017-06-21 10:56:50', '2017-06-21 10:56:50'),
(39, 'Bangkok', '1600$', '10 days', 'Coral Island', '1', '20170621052836.jpg', 'water slides', '2017-06-21 10:58:36', '2017-06-21 10:58:36'),
(47, 'Paris', '1200$', '12 days', 'Italy', '34', '20170706165829.jpg', 'fun place', '2017-07-06 22:28:29', '2017-07-06 22:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `roll` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `roll`, `created_date`, `updated_date`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '2017-06-05 18:46:45', '2017-06-05 18:46:45');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
