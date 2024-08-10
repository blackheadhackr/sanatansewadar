-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2024 at 02:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanatansewadar`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `img` varchar(500) NOT NULL,
  `alternate` varchar(5000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `img`, `alternate`, `date`) VALUES
(20, 'AlNU3WTK_400x400.jpg', 'hvgcfdfg', '2024-02-12');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(1200) NOT NULL,
  `desc` text NOT NULL,
  `dateofupdation` varchar(500) NOT NULL,
  `img` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `catg` int(11) NOT NULL DEFAULT 1,
  `updationdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `desc`, `dateofupdation`, `img`, `content`, `catg`, `updationdate`) VALUES
(16, 'dfsdfgsdfg', 'sdfgsdf', '24-01-24', 'Logo_RamA.png', '<p>sdfgsdfgsdf</p>\r\n', 1, '2024-01-24 10:18:25');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(500) NOT NULL,
  `lastnane` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastnane`, `email`, `phone`, `message`, `date`) VALUES
(1, 'roshan', 'kumar', 'roshan@gmail.com', '8585969685', 'this is nothing just testing ', '2024-02-03'),
(2, 'roshan', 'kumar', 'roshan@gmail.com', '8585969685', 'this is nothing just testing ', '2024-02-03'),
(4, 'roshan', 'kumar', 'webteam@gmail.com', '2343123456754', 'fsdgsfdgsdf', '2024-02-03'),
(5, 'roshan', 'kumar', 'webteam@gmail.com', '2343', 'fdsgfdg', '2024-02-03'),
(6, 'roshan', 'kumar', 'webteam@gmail.com', '2343', 'fdsgfdg', '2024-02-03'),
(7, 'roshan', 'kumar', 'admin@gmail.com', '8585858585', 'werertwre', '2024-02-03'),
(8, 'roshan', 'kumar', 'admin@gmail.com', '43', 'dfdgsdf', '2024-02-03'),
(10, 'aa', 'aa', 'admin@gmail.com', '8596748596', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2024-02-05'),
(11, 'dharmender', 'kumar', 'dharmender@gamail.com', '8596857485', 'this is testing from web team please don\'t  call hehehehehheeee', '2024-02-05'),
(12, 'roshan', 'kumar', 'roshan@gmail.com', '8596745896', 'this is testing', '2024-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `whatsapp` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `address`, `mail`, `phone`, `whatsapp`, `date`) VALUES
(1, 'Netaji Subhash Place ', 'www.dharmender.kumar89830@gmail.com', '8527041034', '8527041034', '2024-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `alt` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `img`, `title`, `alt`, `status`, `date`) VALUES
(4, 'wallpaperflare_com_wallpaper.jpg', 'sdsad', 'sdfasd', 1, '2024-02-12'),
(12, 'wallpaperflare_com_wallpaper_(1).jpg', 'DFASDF', 'DFASD', 1, '2024-02-13'),
(13, 'wallpaperflare_com_wallpaper1.jpg', 'this is testing ', 'this is tesing for new img', 1, '2024-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `join_us`
--

CREATE TABLE `join_us` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `country` varchar(100) NOT NULL,
  `idproof` varchar(500) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `join-status` int(11) NOT NULL DEFAULT 0,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `join_us`
--

INSERT INTO `join_us` (`id`, `fname`, `lname`, `email`, `phone`, `DOB`, `gender`, `address`, `address1`, `city`, `state`, `zipcode`, `country`, `idproof`, `religion`, `join-status`, `date`) VALUES
(4, 'aa', 'aa', 'dharmender@gamail.com', '2222222222', '02/Feb/2024', 'Male', '12/78 ', 'fdsasd', 'asdfas', 'asdfasd', 12145, 'sdafsdf', 'wallpaper11.jpg', 'Sanatan', 0, '2024-02-06 18:57:37'),
(5, 'raja ram', 'chaudhary', 'rajaram@gmail.com', '6202223924', '07/Feb/1998', 'Male', '12/78 ', 'fdsasd', 'asdfas', 'asdfasd', 12145, 'sdafsdf', 'Logo_RamA1.png', 'Sanatan', 0, '2024-02-07 14:15:48'),
(6, 'roshan', 'kumar', 'roshan@gmail.com', '8596748596', '14/Feb/2024', 'Female', 'wz-052', 'rohni', 'delhi', 'delhi', 110001, 'india', 'wallpaperflare_com_wallpaper_(4).jpg', 'Hindu', 0, '2024-02-08 05:20:40');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL DEFAULT 'user',
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `user_type`, `date`) VALUES
(1, 'dharmender', 'dharmender@123', 'admin', '2024-01-24'),
(4, 'dharmender1', 'dhar123', 'user', '2024-01-26'),
(9, 'dharmender', 'dharmender89830', 'super admin', '2024-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `disc` varchar(500) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `title`, `disc`, `date`) VALUES
(1, 'wallpaperflare.jpg', 'this is title', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s....', '2024-02-15'),
(2, 'wallpaperflare4.jpg', 'this is title', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s....', '2024-02-15'),
(3, 'AlNU3WTK_400x400.jpg', 'this is heading', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s....', '2024-02-15'),
(4, 'AlNU3WTK_400x40020.jpg', 'this is heading', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s....', '2024-02-15'),
(5, 'AlNU3WTK_400x40010.jpg', 'message 121', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s....', '2024-02-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `join_us`
--
ALTER TABLE `join_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `join_us`
--
ALTER TABLE `join_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
