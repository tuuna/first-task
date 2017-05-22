-- phpMyAdmin SQL Dump
-- version 4.6.4deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 2017-05-22 16:09:27
-- 服务器版本： 5.7.18-0ubuntu0.16.10.1
-- PHP Version: 7.0.15-0ubuntu0.16.10.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- 表的结构 `pp_order`
--

CREATE TABLE `pp_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `state` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `click` int(11) NOT NULL,
  `flow` int(11) NOT NULL,
  `remark` varchar(500) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `pp_order`
--

INSERT INTO `pp_order` (`id`, `type`, `state`, `title`, `start`, `end`, `click`, `flow`, `remark`, `created`) VALUES
(1, 0, 1, 'test1', '2017-05-21 11:16:00', '2017-05-21 11:22:16', 1000, 4321, 'test1', '2017-05-21 18:17:37'),
(2, 0, 1, 'test2', '2017-05-21 05:15:11', '2017-05-21 11:22:16', 4321, 20000, 'qoie', '2017-05-22 13:52:59');

-- --------------------------------------------------------

--
-- 表的结构 `pp_order_hour`
--

CREATE TABLE `pp_order_hour` (
  `id` int(10) UNSIGNED NOT NULL,
  `o_id` int(10) UNSIGNED NOT NULL,
  `hour` int(11) NOT NULL,
  `click` int(11) NOT NULL DEFAULT '0',
  `flow` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `pp_order_hour`
--

INSERT INTO `pp_order_hour` (`id`, `o_id`, `hour`, `click`, `flow`) VALUES
(1, 1, 0, 4321, 6655),
(2, 1, 1, 0, 0),
(3, 1, 2, 0, 0),
(4, 1, 3, 0, 0),
(5, 1, 4, 0, 0),
(6, 1, 5, 0, 0),
(7, 1, 6, 0, 0),
(8, 1, 7, 0, 0),
(9, 1, 8, 0, 0),
(10, 1, 9, 0, 0),
(11, 1, 10, 0, 0),
(12, 1, 11, 0, 0),
(13, 1, 12, 0, 0),
(14, 1, 13, 0, 0),
(15, 1, 14, 0, 0),
(16, 1, 15, 0, 0),
(17, 1, 16, 0, 0),
(18, 1, 17, 0, 0),
(19, 1, 18, 10000, 20000),
(20, 1, 19, 0, 0),
(21, 1, 20, 0, 0),
(22, 1, 21, 0, 0),
(23, 1, 22, 0, 0),
(24, 1, 23, 0, 0),
(25, 2, 0, 0, 0),
(26, 2, 1, 0, 0),
(27, 2, 2, 0, 0),
(28, 2, 3, 0, 0),
(29, 2, 4, 0, 0),
(30, 2, 5, 0, 0),
(31, 2, 6, 0, 0),
(32, 2, 7, 0, 0),
(33, 2, 8, 0, 0),
(34, 2, 9, 0, 0),
(35, 2, 10, 0, 0),
(36, 2, 11, 0, 0),
(37, 2, 12, 0, 0),
(38, 2, 13, 0, 0),
(39, 2, 14, 0, 0),
(40, 2, 15, 0, 0),
(41, 2, 16, 0, 0),
(42, 2, 17, 0, 0),
(43, 2, 18, 0, 0),
(44, 2, 19, 0, 0),
(45, 2, 20, 0, 0),
(46, 2, 21, 0, 0),
(47, 2, 22, 0, 0),
(48, 2, 23, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `pp_order_urls`
--

CREATE TABLE `pp_order_urls` (
  `id` int(10) UNSIGNED NOT NULL,
  `o_id` int(11) NOT NULL,
  `flag` tinyint(4) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `pp_order_urls`
--

INSERT INTO `pp_order_urls` (`id`, `o_id`, `flag`, `sort`, `url`) VALUES
(1, 1, 1, 0, 'https://baidu.top'),
(2, 1, 1, 0, 'https://google.com'),
(3, 1, 2, 0, 'https://duohuo.org'),
(4, 1, 2, 0, 'https://duohuo.com');

-- --------------------------------------------------------

--
-- 表的结构 `pp_static_day`
--

CREATE TABLE `pp_static_day` (
  `id` int(10) UNSIGNED NOT NULL,
  `o_id` int(10) UNSIGNED NOT NULL,
  `day` datetime NOT NULL,
  `click_ip` int(11) NOT NULL,
  `click_pv` int(11) NOT NULL,
  `flow_ip` int(11) NOT NULL,
  `flow_pv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `pp_static_day`
--

INSERT INTO `pp_static_day` (`id`, `o_id`, `day`, `click_ip`, `click_pv`, `flow_ip`, `flow_pv`) VALUES
(1, 1, '2017-05-02 04:08:00', 111, 1123, 4324, 1234),
(2, 1, '2017-05-03 07:23:22', 532, 8009, 1234, 6778),
(3, 1, '2017-05-09 04:10:09', 6543, 8987, 7654, 6543),
(4, 1, '2017-05-10 04:44:20', 1234, 5432, 6543, 7654);

-- --------------------------------------------------------

--
-- 表的结构 `pp_static_hour`
--

CREATE TABLE `pp_static_hour` (
  `id` int(10) UNSIGNED NOT NULL,
  `o_id` int(10) UNSIGNED NOT NULL,
  `day` datetime NOT NULL,
  `hour` int(11) NOT NULL,
  `click_ip` int(11) NOT NULL,
  `click_pv` int(11) NOT NULL,
  `flow_ip` int(11) NOT NULL,
  `flow_pv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `pp_static_hour`
--

INSERT INTO `pp_static_hour` (`id`, `o_id`, `day`, `hour`, `click_ip`, `click_pv`, `flow_ip`, `flow_pv`) VALUES
(1, 1, '2017-05-03 00:00:00', 1, 1234, 1234, 1234, 134),
(2, 1, '2017-05-03 00:00:00', 2, 4321, 1234, 4321, 5432),
(3, 1, '2017-05-03 00:00:00', 3, 5432, 7654, 8765, 9876);

-- --------------------------------------------------------

--
-- 表的结构 `pp_static_total`
--

CREATE TABLE `pp_static_total` (
  `id` int(10) UNSIGNED NOT NULL,
  `day` datetime NOT NULL,
  `click_ip` int(11) NOT NULL,
  `click_pv` int(11) NOT NULL,
  `click_ip_use` int(11) NOT NULL,
  `click_pv_use` int(11) NOT NULL,
  `flow_ip` int(11) NOT NULL,
  `flow_pv` int(11) NOT NULL,
  `flow_ip_use` int(11) NOT NULL,
  `flow_pv_use` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `pp_static_total`
--

INSERT INTO `pp_static_total` (`id`, `day`, `click_ip`, `click_pv`, `click_ip_use`, `click_pv_use`, `flow_ip`, `flow_pv`, `flow_ip_use`, `flow_pv_use`) VALUES
(1, '2017-05-02 11:30:24', 6666, 7777, 8888, 9999, 1234, 5342, 7654, 8765),
(2, '2017-05-03 14:17:29', 5432, 11234, 67654, 43214, 1234, 4312, 64536, 12344);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pp_order`
--
ALTER TABLE `pp_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pp_order_hour`
--
ALTER TABLE `pp_order_hour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `o_id` (`o_id`);

--
-- Indexes for table `pp_order_urls`
--
ALTER TABLE `pp_order_urls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `o_id` (`o_id`);

--
-- Indexes for table `pp_static_day`
--
ALTER TABLE `pp_static_day`
  ADD PRIMARY KEY (`id`),
  ADD KEY `o_id` (`o_id`);

--
-- Indexes for table `pp_static_hour`
--
ALTER TABLE `pp_static_hour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `o_id` (`o_id`);

--
-- Indexes for table `pp_static_total`
--
ALTER TABLE `pp_static_total`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `pp_order`
--
ALTER TABLE `pp_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `pp_order_hour`
--
ALTER TABLE `pp_order_hour`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- 使用表AUTO_INCREMENT `pp_order_urls`
--
ALTER TABLE `pp_order_urls`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `pp_static_day`
--
ALTER TABLE `pp_static_day`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `pp_static_hour`
--
ALTER TABLE `pp_static_hour`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `pp_static_total`
--
ALTER TABLE `pp_static_total`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
