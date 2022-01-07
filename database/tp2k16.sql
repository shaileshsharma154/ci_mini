-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 09:07 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp2k16`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `article_title` varchar(150) NOT NULL,
  `article_body` longtext NOT NULL,
  `language` varchar(25) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_path` varchar(300) NOT NULL,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `article_title`, `article_body`, `language`, `user_id`, `image_path`, `added_at`) VALUES
(26, 'India vs England, Live Score 2nd ODI: England Captain Morgan Wins Toss, Opts To Bat ', 'ndia, riding high on confidence, will look to wrap up another series on their ongoing tour of the United Kingdom when they face England for the second One-day International at the Lord\'s cricket ground on Saturday. ', '', 1, 'http://localhost/TP2K16/upload/8v9jpb6_india-toss-second-odi_625x300_14_July_18.jpg', '2021-12-17 09:47:49'),
(25, 'GitHub Enterprise 2.14 is ‘open goodness’ behind an enterprise firewall', 'This latest version of the web-based code repository and version control system also of course now features collaborative functions, options for bug tracking and features related to task management — it is, a portal with many Wikis indeed.', '', 1, 'http://localhost/TP2K16/upload/git.png', '2021-12-17 09:47:49'),
(43, 'Simple Article', 'Munsi premchand', 'English', 2, 'http://localhost/ci_mini/upload/chacha14.png', '2021-12-17 09:47:49'),
(38, 'pqr ss sss', 'pqr description ttt', 'English', 2, 'http://localhost/ci_mini/upload/123_14.jpg', '2021-12-17 09:47:49'),
(37, 'abc sss', 'adc Description', 'English', 2, 'http://localhost/ci_mini/upload/02_floweraura1.jpg', '2021-12-17 09:47:49'),
(36, 'asasd', 'asasasasasd', '', 2, 'http://localhost/ci_mini/upload/PIC11.jpg', '2021-12-17 09:47:49'),
(41, 'vivekanand', 'Vivekananda biography', 'English', 2, 'http://localhost/ci_mini/upload/vivekanand.jpg', '2021-12-17 09:47:49'),
(42, 'Ram', 'babu', 'Hindi', 2, 'http://localhost/ci_mini/upload/ck122.jpg', '2021-12-17 09:47:49'),
(44, 'aa', 'aaa', 'Hindi', 2, 'http://localhost/ci_mini/upload/ck123.jpg', '2021-12-17 09:47:49'),
(45, 'tyyyy', 'tyyyyy', 'Hindi', 2, 'http://localhost/ci_mini/upload/ck.jpg', '2021-12-17 09:48:20'),
(46, 'tyyyy', 'tyyyyy', 'Hindi', 2, 'http://localhost/ci_mini/upload/ck1.jpg', '2021-12-17 09:49:24'),
(47, 'aaa', 'qweqwe', 'Hindi', 2, 'http://localhost/ci_mini/upload/pic17.jpg', '2021-12-22 12:16:52');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `state_id`, `city_name`) VALUES
(1, 1, 'New York city'),
(2, 1, 'Buffalo'),
(3, 1, 'Albany'),
(4, 2, 'Birmingham'),
(5, 2, 'Montgomery'),
(6, 2, 'Huntsville'),
(7, 3, 'Los Angeles'),
(8, 3, 'San Francisco'),
(9, 3, 'San Diego'),
(10, 4, 'Toronto'),
(11, 4, 'Ottawa'),
(12, 5, 'Vancouver'),
(13, 5, 'Victoria'),
(14, 6, 'Sydney'),
(15, 6, 'Newcastle'),
(16, 7, 'City of Brisbane'),
(17, 7, 'Gold Coast'),
(18, 8, 'Bangalore'),
(19, 8, 'Mangalore'),
(20, 9, 'Hydrabad'),
(21, 9, 'Warangal');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'USA'),
(2, 'Canada'),
(3, 'Australia'),
(4, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `doc_name` varchar(100) NOT NULL,
  `doc_descr` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `doc_name`, `doc_descr`, `user_id`, `image_path`) VALUES
(1, 'ttt', 'yyyyy', 2, 'http://localhost/ci_mini/upload/pic9.jpg'),
(2, 'pan', 'apasdj', 2, 'http://localhost/ci_mini/upload/02_floweraura.jpg'),
(3, 'Ramlal', 'Ramlal from manpur Azamgarh', 2, 'http://localhost/ci_mini/upload/chacha1.png'),
(4, 'vijay', 'patwa', 2, 'http://localhost/ci_mini/upload/ck12.jpg'),
(5, 'asa', 'asd', 2, 'http://localhost/ci_mini/upload/ck121.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `feedback1` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedback1`) VALUES
(1, 'Ajay Suneja', 'ajay.suneja2@gmail.com', 'Good Job men.:-)'),
(2, 'Xyz', 'zyz@gmail.com', 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_name` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `country_id`, `state_name`) VALUES
(1, 1, 'New York'),
(2, 1, 'Alabama'),
(3, 1, 'California'),
(4, 2, 'Ontario'),
(5, 2, 'British Columbia'),
(6, 3, 'New South Wales'),
(7, 3, 'Queensland'),
(8, 4, 'Karnataka'),
(9, 4, 'Telangana');

-- --------------------------------------------------------

--
-- Table structure for table `superformtable`
--

CREATE TABLE `superformtable` (
  `id` int(11) NOT NULL,
  `article_title` varchar(150) NOT NULL,
  `adhar_number` bigint(15) NOT NULL,
  `article_body` longtext NOT NULL,
  `shirt` varchar(100) NOT NULL,
  `socialMedia` varchar(50) NOT NULL,
  `language` varchar(25) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_path` varchar(300) NOT NULL,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `superformtable`
--

INSERT INTO `superformtable` (`id`, `article_title`, `adhar_number`, `article_body`, `shirt`, `socialMedia`, `language`, `user_id`, `image_path`, `added_at`) VALUES
(1, 'vivekanand', 9, 'my hero is vivekanand', 'large', 'fb', 'Hindi', 2, 'http://localhost/ci_mini/upload/vivekanand3.jpg', '2021-12-17 10:37:58'),
(24, 'demo data', 5, 'asd', 'large', 'fb', 'Hindi', 2, 'http://localhost/ci_mini/upload/chacha118.png', '2021-12-20 09:28:34'),
(26, 'shailesh ', 23, 'dddd', 'large', 'fb', 'Hindi', 2, 'http://localhost/ci_mini/upload/pic12.jpg', '2021-12-20 09:29:18'),
(28, 'shailesh ', 25, 'dddd', 'large', 'fb', 'Hindi', 2, 'http://localhost/ci_mini/upload/pic12.jpg', '2021-12-20 09:30:03'),
(31, 'Ram', 78, 'asd', 'large', 'fb', 'Hindi', 2, 'http://localhost/ci_mini/upload/pic15.jpg', '2021-12-20 09:33:38'),
(34, 'demo data', 90, 'sdf', 'large', '', 'English', 2, 'http://localhost/ci_mini/upload/ck127.jpg', '2021-12-20 09:34:48'),
(39, 'demo data', 67, 'asda', 'large', 'fb', 'English', 2, 'http://localhost/ci_mini/upload/ck3.jpg', '2021-12-20 09:37:45'),
(41, 'demo data', 91, 'asda', 'large', 'fb', 'English', 2, 'http://localhost/ci_mini/upload/ck5.jpg', '2021-12-20 09:38:37'),
(43, 'demo data', 95, 'asd', 'large', 'fb', 'English', 2, 'http://localhost/ci_mini/upload/ck1213.jpg', '2021-12-20 09:39:37'),
(46, 'demo data', 956, 'asd', 'large', 'fb', 'English', 2, 'http://localhost/ci_mini/upload/ck1216.jpg', '2021-12-20 09:43:27'),
(48, 'demo data', 95999, 'sdff', 'large', 'twiter', 'Hindi', 2, 'http://localhost/ci_mini/upload/chacha124.png', '2021-12-20 09:52:35'),
(50, 'asdadasd', 958, 'sdfsdf', 'large', 'fb', 'English', 2, 'http://localhost/ci_mini/upload/ck7.jpg', '2021-12-20 09:53:08'),
(53, 'asdadasd', 9588888, 'sdfsdf', 'large', 'fb', 'English', 2, 'http://localhost/ci_mini/upload/ck10.jpg', '2021-12-20 09:54:44'),
(57, 'asdadasd', 95111111, 'sdfsdf', 'large', 'fb', 'English', 2, 'http://localhost/ci_mini/upload/ck26.jpg', '2021-12-20 10:05:31'),
(58, 'df', 67666, 'sdfsdf', 'large', 'fb', 'English', 2, 'http://localhost/ci_mini/upload/chacha125.png', '2021-12-20 10:05:51'),
(60, 'df', 676666666, 'sdfsdf', 'large', 'fb', 'English', 2, 'http://localhost/ci_mini/upload/chacha127.png', '2021-12-20 10:06:52'),
(61, 'adas', 90888, 'fgfgh', 'large', 'twiter', 'Hindi', 2, 'http://localhost/ci_mini/upload/chacha128.png', '2021-12-20 11:03:26'),
(63, 'asdadasd', 1212121, 'ssdsdf', 'large', 'fb', 'Hindi', 2, 'http://localhost/ci_mini/upload/chacha130.png', '2021-12-22 12:01:18'),
(66, 'saa', 454, 'aasd', 'large', 'fb', 'English', 2, 'http://localhost/ci_mini/upload/ck27.jpg', '2021-12-22 12:23:42'),
(69, 'aaa', 2322222, 'qweqwe', 'large', 'twiter', 'Hindi', 2, 'http://localhost/ci_mini/upload/ck1221.jpg', '2021-12-22 12:26:08'),
(71, 'aaa', 232222211, 'qweqwe', 'large', 'twiter', 'Hindi', 2, 'http://localhost/ci_mini/upload/ck1223.jpg', '2021-12-22 12:26:26'),
(72, 'aaa', 232222266, 'qweqwe', 'large', 'twiter', 'Hindi', 2, 'http://localhost/ci_mini/upload/ck1224.jpg', '2021-12-22 12:26:53'),
(73, 'asdas', 7676, 'ssdf', 'large', 'twiter', 'Hindi', 2, 'http://localhost/ci_mini/upload/ck1225.jpg', '2021-12-22 12:27:37'),
(75, 'asdas', 76763, 'ssdf', 'large', 'twiter', 'Hindi', 2, 'http://localhost/ci_mini/upload/ck1226.jpg', '2021-12-22 12:28:06'),
(77, 'asdas', 767634, 'ssdf', 'large', 'twiter', 'Hindi', 2, 'http://localhost/ci_mini/upload/ck1227.jpg', '2021-12-22 12:28:48'),
(79, 'asdas', 7676342, 'ssdf', 'large', 'twiter', 'Hindi', 2, 'http://localhost/ci_mini/upload/ck1228.jpg', '2021-12-22 12:29:17'),
(80, 'aaa', 656565, 'asd', 'large', 'fb', 'Hindi', 2, 'http://localhost/ci_mini/upload/pic18.jpg', '2021-12-22 12:29:36'),
(81, 'sasda', 345345, 'fff', 'large', 'fb', 'Hindi', 2, 'http://localhost/ci_mini/upload/ck28.jpg', '2021-12-22 12:29:54'),
(82, 'aasdas', 45645645, 'sdfsdf', 'large', 'fb', 'Hindi', 2, 'http://localhost/ci_mini/upload/ck1229.jpg', '2021-12-24 08:06:49'),
(83, 'sda', 567567, 'ssdfsdf', 'large', 'fb', 'English', 2, 'http://localhost/ci_mini/upload/ck29.jpg', '2021-12-24 08:07:36'),
(84, 'vii', 9234, 'asdasd', 'large', 'fb', 'English', 2, 'http://localhost/ci_mini/upload/cake1.jpg', '2021-12-24 08:08:43'),
(85, 'sms demo', 454545454, 'test sms', 'large', 'fb', 'Hindi', 2, 'http://localhost/ci_mini/upload/chacha131.png', '2022-01-05 08:44:40'),
(87, 'sms demo ttt', 454545454234, 'test sms', 'large', 'fb', 'Hindi', 2, 'http://localhost/ci_mini/upload/chacha133.png', '2022-01-05 08:45:48'),
(88, 'sms demo ttt', 4545454542342, 'test sms', 'large', 'fb', 'Hindi', 2, 'http://localhost/ci_mini/upload/chacha134.png', '2022-01-05 08:46:02'),
(89, 'demo data', 56756756, 'sdfsf', 'large', 'fb', 'Hindi', 2, 'http://localhost/ci_mini/upload/ADMT.jpg', '2022-01-05 08:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `email`) VALUES
(1, 'suneja', '123', 'ajay', 'suneja', 'ajay.suneja1993@gmail.com'),
(2, 'shailesh', '123', 'shailesh', 'sharma', 'shaileshsharma154@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `superformtable`
--
ALTER TABLE `superformtable`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `indexAdhar` (`adhar_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `superformtable`
--
ALTER TABLE `superformtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
