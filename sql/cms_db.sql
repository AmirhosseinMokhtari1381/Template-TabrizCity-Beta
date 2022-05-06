-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 06, 2022 at 01:30 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `discription` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `imagepath` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `category`, `name`, `discription`, `imagepath`, `createtime`) VALUES
(8, 21, 'کتاب نه داستان', 'کتاب «نه داستان» مجموعه‌ای از نه داستان‌ کوتاه جروم دیوید سلینجر، نویسنده معاصر آمریکایی است که احتمالا نام رمان معروف او، ناطوردشت، به گوشتان خورده‌است.', '../uploads/کتاب دوم.jpg', '2022-05-06 13:07:22'),
(9, 22, 'کتاب زندگی عزیز', 'مجموعه‌ای از چهارده داستان کوتاه است که در آن با آدم‌های معمولی و زندگی‌های معمولی روبرو می‌شویم، آدم‌هایی که از فرط عادی بون انتظار نداریم که در قصه‌ها ببینیم‌شان.', '../uploads/کتاب سوم.jpg', '2022-05-06 13:11:06'),
(10, 23, 'کافه پاریس', ' «کافه پاریس» یکی از مجموعه داستان‌های کوتاه از نویسنده‌های بزرگ جهان است که تنوع داستانی بسیار خوبی دارد، هجده داستان از چهارده نویسنده.', '../uploads/کتاب چهارم.jpg', '2022-05-06 13:15:28');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8mb4_persian_ci NOT NULL,
  `discription` text COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `discription`) VALUES
(22, 'فرهنگی', ''),
(23, 'اجتماعی', ''),
(20, 'رویاگردی', 'خودت تصورشو بکن'),
(21, 'تاریخی', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(99) COLLATE utf8mb4_persian_ci NOT NULL,
  `First Name` varchar(99) COLLATE utf8mb4_persian_ci NOT NULL,
  `Last Name` varchar(99) COLLATE utf8mb4_persian_ci NOT NULL,
  `UserName` varchar(99) COLLATE utf8mb4_persian_ci NOT NULL,
  `Password` varchar(99) COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Email`, `First Name`, `Last Name`, `UserName`, `Password`) VALUES
(1, 'SiamakBagheriTurk@Gmail.com', 'سیامک', 'باقری', 'TurkSiam', 'c2c897325edfe0356d1cbebe5687ab9a'),
(2, 'Hamid2000@Gmail.com', 'حمید', 'ایرانی', 'Hamid2000', 'd63076e714f20068e5423db4c69ca768');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
