-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2019 at 07:52 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `date`) VALUES
(1, 'Admin', '1a1dc91c907325c69271ddf0c944bc72', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `body` text NOT NULL,
  `post_image` text NOT NULL,
  `user` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `slug`, `body`, `post_image`, `user`, `date`) VALUES
(1, 'I love coding', 'I-love-coding', '<p>Good Morining</p>', 'no_pics.jpg', '', '22nd Jun,2019'),
(2, 'How Far with the coding with pattern', 'How-Far-with-the-coding-with-pattern', '<p>I love coding</p>', 'market2.jpg', '', '22nd Jun,2019');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(90) NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `message` text NOT NULL,
  `subject` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `message`, `subject`, `date`) VALUES
(1, 'Fayose', 'adewumiadewale493@gmail.com', '+2347031828170', 'I love code', 'Requeqst for job', '2019-06-22 00:30:39'),
(2, 'Fayose', 'adewumiadewale493@gmail.com', '+2347031828170', 'I love code', 'Requeqst for job', '2019-06-22 00:31:03'),
(3, 'Lagacy01', 'adewumiadewale493@gmail.com', '2348068998735', 'I love code', 'Requeqst for job', '2019-06-22 03:00:56');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` text CHARACTER SET utf8,
  `level` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='system_user';

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `post`, `profile`, `level`, `profile_image`, `date`) VALUES
(1, 'Lagacy01aa', 'Eletricaian', '<p>I love coding</p>', 'Staff', 'icon.jpg', '2019-06-22 02:24:36'),
(3, 'Adewumi Saheed', 'Plumber', '<p>I love coding</p>', 'Staff', 'icon.jpg', '2019-06-22 02:48:35'),
(4, 'Lagacy01hd', 'Eletricaian', '<p>I love coding</p>', 'Staff', 'icon.jpg', '2019-06-22 03:24:01'),
(5, 'Lagacy01hd', 'Eletricaian', '<p>I love coding</p>', 'Board', 'icon.jpg', '2019-06-22 03:24:55');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `services` text NOT NULL,
  `date_desire` text NOT NULL,
  `time_desire` text NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `state` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `email`, `phone`, `address`, `services`, `date_desire`, `time_desire`, `message`, `date`, `state`) VALUES
(1, 'Lagacy01', 'adewumiadewale493@gmail.com', '2348068998735', 'Eleyin Area Ede Osun State', 'Select a Service', '', '', 'We play', '2019-06-22 22:04:28', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_first_name` varchar(250) CHARACTER SET utf8 NOT NULL,
  `user_last_name` varchar(500) CHARACTER SET utf8 NOT NULL,
  `user_address` text CHARACTER SET utf8,
  `user_address2` varchar(300) CHARACTER SET utf8 NOT NULL DEFAULT 'NA',
  `user_country` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `user_state` varchar(250) CHARACTER SET utf8 NOT NULL DEFAULT 'NA',
  `user_city` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT 'NA',
  `zip_code` varchar(11) CHARACTER SET utf8 NOT NULL,
  `user_mobile` varchar(250) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `user_land` varchar(250) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `user_email` varchar(250) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `user_dob` date NOT NULL DEFAULT '0001-01-01',
  `user_gender` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='system_user';

-- --------------------------------------------------------

--
-- Table structure for table `web_info`
--

CREATE TABLE `web_info` (
  `id` int(11) NOT NULL,
  `web_name` text NOT NULL,
  `web_email` text NOT NULL,
  `phone1` text NOT NULL,
  `phone2` text NOT NULL,
  `tech_mail` text NOT NULL,
  `address` text NOT NULL,
  `facebook` text NOT NULL,
  `linkedin` text NOT NULL,
  `twitter` text NOT NULL,
  `pin_instrest` text NOT NULL,
  `about` text NOT NULL,
  `mission` text NOT NULL,
  `theme` int(11) NOT NULL DEFAULT '0',
  `ideology` text NOT NULL,
  `vision` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_info`
--

INSERT INTO `web_info` (`id`, `web_name`, `web_email`, `phone1`, `phone2`, `tech_mail`, `address`, `facebook`, `linkedin`, `twitter`, `pin_instrest`, `about`, `mission`, `theme`, `ideology`, `vision`, `date`) VALUES
(1, 'OMZServices', 'info@omzservices.com', '+2340800000000', '+23408222222222', 'info@omzservices.com', 'Nigeria', '', '', '', '', '<p><strong>Omzfield Services</strong> is a subsidary of Omzfield Engineering Limited which was established and registered with the coperate affairs commission for business in Nigeria and was built on an entrepreneurial spirit that provides world-class service with all the warmth, spirit and conviction of a locally owned company.</p>\r\n\r\n<p>This philosophy has kept us growing for years and we do what&rsquo;s just to earn your trust.</p>', '<p>Our mission is to provide total engineering solution in the construction industry which contribute to the</p>', 1, '<p><strong>Fast:</strong></p>\r\n\r\n<p>With our specialized technicians and fully stocked rolling warehouse vans, we can get the job done quickly so you can relax resume and resume your normal routine.</p>\r\n\r\n<p><strong>Thorough:</strong></p>\r\n\r\n<p>Our trained specialist will take their time to listen and address your questions and concerns, investigate and accurately diagnose the problem and find the best and most economical solution for your home and family- Satisfaction Guaranteed</p>\r\n\r\n<p><strong>Courteous:</strong></p>\r\n\r\n<p>No waiting around! We&rsquo;ll call you 20-30 minutes before we arrive. Our experts&rsquo; uniformed technicians will respect you and your home. From wearing floor protectors in your home, to cleaning up after services by ourselves and you can be rest assured that you&rsquo;re in the hands of professionals. We want your experience to be exceptional. To ensure your satisfaction, we want your feedback. One of our client care professionals will contact you after our technician leaves your home making sure you&rsquo;re 100% satisfied.</p>', '<p><strong>Fast:</strong></p>\r\n\r\n<p>With our specialized technicians and fully stocked rolling warehouse vans, we can get the job done quickly so you can relax resume and resume your normal routine</p>', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_info`
--
ALTER TABLE `web_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `web_info`
--
ALTER TABLE `web_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
