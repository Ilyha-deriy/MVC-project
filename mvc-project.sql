-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 01, 2022 at 04:12 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(10) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_date` datetime NOT NULL,
  `post_body` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_date`, `post_body`) VALUES
(3, 'Blog from mysql 1', '2021-12-27 14:46:37', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.\r\nTempora nemo, perferendis iure cupiditate fuga consequuntur\r\nnecessitatibus eum aliquam impedit odit nobis ipsam, minima\r\naccusamus. At autem eveniet illum minus enim?'),
(4, 'Blog from mysql 2', '2021-12-27 14:46:37', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.\r\nTempora nemo, perferendis iure cupiditate fuga consequuntur\r\nnecessitatibus eum aliquam impedit odit nobis ipsam, minima\r\naccusamus. At autem eveniet illum minus enim?'),
(5, 'Blog from mysql 3', '2021-12-31 15:59:15', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora nemo, perferendis iure cupiditate fuga consequuntur necessitatibus eum aliquam impedit odit nobis ipsam, minima accusamus. At autem eveniet illum minus enim?'),
(6, 'Blog from mysql 4', '2021-12-31 15:59:15', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora nemo, perferendis iure cupiditate fuga consequuntur necessitatibus eum aliquam impedit odit nobis ipsam, minima accusamus. At autem eveniet illum minus enim?'),
(9, 'Blog from mysql 5', '2021-12-31 16:00:12', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora nemo, perferendis iure cupiditate fuga consequuntur necessitatibus eum aliquam impedit odit nobis ipsam, minima accusamus. At autem eveniet illum minus enim?'),
(10, 'Blog from mysql 7', '2021-12-31 16:00:12', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora nemo, perferendis iure cupiditate fuga consequuntur necessitatibus eum aliquam impedit odit nobis ipsam, minima accusamus. At autem eveniet illum minus enim?');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `image`) VALUES
(1, 'admin12', 'user@mail.ru', '$2y$10$NEQxXwRMGHr7TNgoY7ZXhO.o4MeaXWDh.uvArvlJ8n0GZuFG4HDCG', '1641053217_person.jpeg'),
(2, 'Ilya222', 'skk11222@gmail.com', '$2y$10$VMeFpLcLIS1zKMJWh.atHui3l720H03FbFRMuW/WAyc6HngKFkL.K', '1640965515_person.jpeg'),
(3, 'admin32323', 'skk13232@gmail.com', '$2y$10$cGXxGiBGN.DHsYT1Wdmcz.zcchRylcgg.7FLB.RcUWnpb7tSli7/2', NULL),
(4, 'user12', 'user1212@mail.ru', '$2y$10$F/TUPtP4fpKqeI5w2/axDO4OM2mIbidoEEuPPNFbOx28D2uHsgqKq', '1640868859_viber_image_2021-04-18_19-21-36.jpg'),
(5, 'admin1112', 'user11112@mail.ru', '$2y$10$sCZpPLw98aM/TU51E45ZwOmvttJjyPLbAWPKVEKTnyNOMKKNHoiHO', '1640879848_User_icon_2.svg.png'),
(6, 'user1112', 'skkdss1@gmail.com', '$2y$10$mQL.j/28X5WuFvP534fvKOatCCfrKCiu31py5oFq1e5H86PxKfy8W', '1641053013_person.jpeg'),
(7, 'admin12', 'skdsdk132@gmail.com', '$2y$10$e.d1AbptGXn88avYeP88GuZ5xb8yMrvg9TZlcgMxYgagcBGfBFNba', NULL),
(8, 'user213213', 'user32312@mail.ru', '$2y$10$mKNzgxbiM1VVNxlQK8iuDu/9y86vvnpVCfHRpSUgMZiFV9QlEClgK', '1641053480_person.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
