-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2018 at 02:58 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `es_project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `accommodation` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `continent` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `budget` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `accommodation`, `semester`, `continent`, `area`, `budget`, `type`, `image`, `name`, `country`) VALUES
(2, 'hostel', 'win', 'afr', 'in', 100, 'rel', 'karnak.jpg', 'معبد الكرنك', 'مصر'),
(3, 'hostel', 'sum', 'afr', 'in', 50, 'rel', 'mahd.jpg', 'كنيسة المهد', 'مصر'),
(4, 'hostel', 'sum', 'afr', 'in', 70, 'rel', 'zenab.jpg', 'مسجد السيدة زينب', 'مصر'),
(5, 'hostel', 'win', 'afr', 'in', 100, 'rel', 'omar.jpg', 'مسجد عمر بن الخطاب', 'مصر'),
(6, 'hostel', 'sum', 'afr', 'in', 120, 'cul', 'alex_lib.jpg', 'مكتبة الاسكندرية', 'مصر'),
(7, 'hotel', 'sum', 'south', 'ex', 1000, 'cul', 'newyork_lib.jpg', 'مكتبة نيويورك العامة', 'الولايات المتحدة الامريكية'),
(8, 'hostel', 'win', 'asia', 'ex', 1500, 'cul', 'jap_lib.jpg', 'مكتبة البرلمان الوطني', 'اليابان'),
(9, 'hostel', 'sum', 'south', 'ex', 1300, 'cul', 'con_lib.jpg', 'مكتبة الكونجرس', 'الولايات المتحدة الامريكية'),
(10, 'hostel', 'win', 'afr', 'in', 50, 'cul', 'sawy_lib.jpg', 'ساقية الصاوي', 'مصر'),
(11, 'hostel', 'sum', 'afr', 'in', 400, 'bea', 'teran.jpg', 'تيران', 'مصر'),
(12, 'hotel', 'win', 'south', 'ex', 2000, 'bea', 'vic.jpg', 'جزيرة فيكتوريا', 'كندا'),
(13, 'hotel', 'sum', 'afr', 'in', 300, 'bea', 'taba.jpg', 'طابا', 'مصر'),
(14, 'hotel', 'win', 'afr', 'in', 400, 'bea', 'dahab.jpg', 'دهب', 'مصر'),
(15, 'hostel', 'sum', 'afr', 'ex', 1000, 'bea', 'oreka.jpg', 'شلالات اوريكا', 'المغرب'),
(16, 'hotel', 'min', 'eur', 'ex', 2000, 'bea', 'albahama.jpg', 'جزر البهاما', 'اوكرانيا'),
(17, 'hotel', 'win', 'afr', 'ex', 1300, 'bea', 'lakzera.jpg', 'شاطئ لكزيره', 'المغرب'),
(18, 'hostel', 'win', 'afr', 'in', 100, 'arc', 'kolthom.jpg', 'متحف ام كلثوم', 'مصر'),
(19, 'hostel', 'sum', 'south', 'ex', 1400, 'arc', 'shams.jpg', 'هرم الشمس', 'كندا'),
(20, 'hostel', 'win', 'eur', 'ex', 800, 'arc', 'goem.jpg', 'متحف غويم المفتوح', 'تركيا'),
(21, 'hostel', 'sum', 'afr', 'in', 100, 'arc', 'khan.jpg', 'خان الخليلي', 'مصر'),
(22, 'hostel', 'sum', 'eur', 'ex', 1000, 'arc', 'choco.jpg', 'متحف الشوكولا', 'تركيا'),
(23, 'hostel', 'win', 'afr', 'in', 200, 'arc', 'luxor.jpg', 'الاقصر', 'مصر'),
(24, 'hostel', 'sum', 'afr', 'in', 200, 'arc', 'qal3a.jpg', 'القلعة', 'مصر'),
(25, 'hotel', 'sum', 'eur', 'ex', 1500, 'arc', 'evel.jpg', 'برج ايفل', 'فرنسا'),
(26, 'hotel', 'win', 'north', 'ex', 1700, 'bea', 'kankon.jpg', 'شاطئ كانكون', 'المكسيك');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
