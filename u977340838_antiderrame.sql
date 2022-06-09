-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 08, 2022 at 12:32 AM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u977340838_antiderrame`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `data_id` int(11) NOT NULL,
  `data_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_temp` int(11) NOT NULL,
  `data_nivel` int(11) NOT NULL,
  `data_device_sn` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`data_id`, `data_date`, `data_temp`, `data_nivel`, `data_device_sn`) VALUES
(26, '2022-06-07 23:33:57', 0, 25, '797179'),
(27, '2022-06-07 23:34:06', 0, 25, '797179'),
(28, '2022-06-07 23:35:53', 0, 25, '797179'),
(29, '2022-06-07 23:36:12', 0, 25, '797179'),
(30, '2022-06-07 23:36:21', 0, 25, '797179'),
(31, '2022-06-07 23:37:03', 0, 25, '797179'),
(32, '2022-06-07 23:37:13', 0, 25, '797179'),
(33, '2022-06-07 23:37:58', 0, 25, '797179'),
(34, '2022-06-07 23:38:08', 0, 25, '797179'),
(35, '2022-06-07 23:39:10', 0, 25, '797179'),
(36, '2022-06-07 23:39:35', 0, 25, '797179'),
(37, '2022-06-07 23:40:18', 0, 25, '797179'),
(38, '2022-06-07 23:40:40', 0, 25, '797179'),
(39, '2022-06-07 23:41:10', 0, 25, '797179'),
(40, '2022-06-07 23:41:19', 0, 25, '797179'),
(41, '2022-06-07 23:42:48', 0, 25, '797179'),
(42, '2022-06-07 23:43:15', 0, 25, '797179'),
(43, '2022-06-07 23:43:31', 0, 25, '797179'),
(44, '2022-06-07 23:43:41', 0, 25, '797179'),
(45, '2022-06-07 23:43:50', 0, 25, '797179'),
(46, '2022-06-07 23:44:01', 0, 25, '797179'),
(47, '2022-06-07 23:44:19', 0, 25, '797179'),
(48, '2022-06-07 23:44:31', 0, 25, '797179'),
(49, '2022-06-07 23:44:49', 0, 25, '797179'),
(50, '2022-06-07 23:45:26', 0, 25, '797179'),
(51, '2022-06-07 23:45:40', 0, 25, '797179'),
(52, '2022-06-07 23:45:49', 0, 100, '797179'),
(53, '2022-06-07 23:46:04', 0, 25, '797179'),
(54, '2022-06-07 23:46:16', 0, 25, '797179'),
(55, '2022-06-07 23:46:45', 0, 100, '797179'),
(56, '2022-06-07 23:46:54', 0, 25, '797179'),
(57, '2022-06-07 23:47:03', 0, 100, '797179'),
(58, '2022-06-07 23:47:18', 0, 25, '797179'),
(59, '2022-06-07 23:47:27', 0, 25, '797179'),
(60, '2022-06-07 23:47:36', 0, 25, '797179'),
(61, '2022-06-07 23:48:09', 0, 25, '797179'),
(62, '2022-06-07 23:48:19', 0, 25, '797179'),
(63, '2022-06-07 23:48:31', 0, 25, '797179'),
(64, '2022-06-07 23:48:40', 0, 25, '797179'),
(65, '2022-06-07 23:48:49', 0, 25, '797179'),
(66, '2022-06-07 23:48:58', 0, 25, '797179'),
(67, '2022-06-07 23:49:10', 0, 25, '797179'),
(68, '2022-06-07 23:49:19', 0, 25, '797179'),
(69, '2022-06-07 23:49:28', 0, 25, '797179'),
(70, '2022-06-07 23:49:37', 0, 25, '797179'),
(71, '2022-06-07 23:49:49', 0, 25, '797179'),
(72, '2022-06-07 23:49:58', 0, 25, '797179'),
(73, '2022-06-07 23:50:07', 0, 25, '797179'),
(74, '2022-06-07 23:50:16', 0, 25, '797179'),
(75, '2022-06-07 23:50:25', 0, 25, '797179'),
(76, '2022-06-07 23:50:34', 0, 25, '797179'),
(77, '2022-06-07 23:50:43', 0, 25, '797179'),
(78, '2022-06-07 23:50:55', 0, 25, '797179'),
(79, '2022-06-07 23:51:05', 0, 25, '797179'),
(80, '2022-06-07 23:51:13', 0, 25, '797179'),
(81, '2022-06-08 00:21:17', 0, 25, '797179'),
(82, '2022-06-08 00:21:26', 0, 25, '797179'),
(83, '2022-06-08 00:21:35', 0, 25, '797179'),
(84, '2022-06-08 00:21:44', 0, 25, '797179'),
(85, '2022-06-08 00:21:52', 0, 25, '797179'),
(86, '2022-06-08 00:22:01', 0, 25, '797179'),
(87, '2022-06-08 00:22:13', 0, 25, '797179'),
(88, '2022-06-08 00:22:24', 0, 25, '797179'),
(89, '2022-06-08 00:22:36', 0, 25, '797179'),
(90, '2022-06-08 00:22:45', 0, 25, '797179'),
(91, '2022-06-08 00:22:54', 0, 25, '797179'),
(92, '2022-06-08 00:23:03', 0, 25, '797179'),
(93, '2022-06-08 00:23:12', 0, 25, '797179'),
(94, '2022-06-08 00:23:21', 0, 25, '797179'),
(95, '2022-06-08 00:23:30', 0, 25, '797179'),
(96, '2022-06-08 00:23:39', 0, 25, '797179'),
(97, '2022-06-08 00:23:50', 0, 25, '797179'),
(98, '2022-06-08 00:23:58', 0, 25, '797179'),
(99, '2022-06-08 00:24:07', 0, 25, '797179'),
(100, '2022-06-08 00:24:15', 0, 25, '797179'),
(101, '2022-06-08 00:24:27', 0, 25, '797179'),
(102, '2022-06-08 00:25:57', 0, 25, '797179'),
(103, '2022-06-08 00:26:06', 0, 25, '797179'),
(104, '2022-06-08 00:26:14', 0, 25, '797179'),
(105, '2022-06-08 00:26:23', 0, 25, '797179'),
(106, '2022-06-08 00:26:32', 0, 25, '797179'),
(107, '2022-06-08 00:26:41', 0, 25, '797179'),
(108, '2022-06-08 00:26:50', 0, 25, '797179'),
(109, '2022-06-08 00:26:59', 0, 25, '797179'),
(110, '2022-06-08 00:27:08', 0, 25, '797179'),
(111, '2022-06-08 00:27:20', 0, 25, '797179'),
(112, '2022-06-08 00:27:29', 0, 25, '797179'),
(113, '2022-06-08 00:27:38', 0, 25, '797179'),
(114, '2022-06-08 00:27:46', 0, 25, '797179'),
(115, '2022-06-08 00:27:58', 0, 25, '797179'),
(116, '2022-06-08 00:28:07', 0, 25, '797179'),
(117, '2022-06-08 00:28:16', 0, 25, '797179'),
(118, '2022-06-08 00:28:25', 0, 25, '797179'),
(119, '2022-06-08 00:28:34', 0, 25, '797179'),
(120, '2022-06-08 00:28:43', 0, 25, '797179'),
(121, '2022-06-08 00:28:52', 0, 25, '797179'),
(122, '2022-06-08 00:29:01', 0, 25, '797179'),
(123, '2022-06-08 00:29:10', 0, 25, '797179'),
(124, '2022-06-08 00:29:19', 0, 25, '797179'),
(125, '2022-06-08 00:29:28', 0, 25, '797179'),
(126, '2022-06-08 00:29:37', 0, 25, '797179'),
(127, '2022-06-08 00:29:46', 0, 25, '797179'),
(128, '2022-06-08 00:29:54', 0, 25, '797179'),
(129, '2022-06-08 00:30:03', 0, 25, '797179'),
(130, '2022-06-08 00:30:15', 0, 25, '797179');

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `device_id` int(7) UNSIGNED NOT NULL,
  `device_user_id` int(7) DEFAULT NULL,
  `device_date` timestamp NULL DEFAULT current_timestamp(),
  `device_alias` varchar(50) DEFAULT '',
  `device_sn` int(7) DEFAULT NULL,
  `device_topic` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`device_id`, `device_user_id`, `device_date`, `device_alias`, `device_sn`, `device_topic`) VALUES
(12, 2, '2022-06-07 23:35:14', 'UTN-FRT', 797171, '2TvPv2cC9k');

-- --------------------------------------------------------

--
-- Stand-in structure for view `devices_full`
-- (See below for the actual view)
--
CREATE TABLE `devices_full` (
`data_id` int(11)
,`data_date` timestamp
,`data_temp` int(11)
,`data_nivel` int(11)
,`data_device_sn` varchar(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(7) NOT NULL,
  `fb_user` varchar(100) DEFAULT NULL,
  `user_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(60) NOT NULL,
  `user_image` varchar(200) NOT NULL DEFAULT 'https://cdn1.iconfinder.com/data/icons/avatars-vol-2/140/_robocop-512.png',
  `user_selected_device` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fb_user`, `user_date`, `user_name`, `user_email`, `user_password`, `user_image`, `user_selected_device`) VALUES
(2, NULL, '2021-12-04 20:43:52', 'Fulanito', 'demo@demo.com', 'ea7addf05e61754962268a1f44d4f33079249326', 'https://liandev.tk/app/images/logoUTN.png', 12);

-- --------------------------------------------------------

--
-- Structure for view `devices_full`
--
DROP TABLE IF EXISTS `devices_full`;

CREATE ALGORITHM=UNDEFINED DEFINER=`u977340838_liandev`@`127.0.0.1` SQL SECURITY DEFINER VIEW `devices_full`  AS SELECT `data`.`data_id` AS `data_id`, `data`.`data_date` AS `data_date`, `data`.`data_temp` AS `data_temp`, `data`.`data_nivel` AS `data_nivel`, `data`.`data_device_sn` AS `data_device_sn` FROM `data` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`data_id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`device_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `device_id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
