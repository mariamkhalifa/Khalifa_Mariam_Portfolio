-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 27, 2019 at 04:51 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects`
--

DROP TABLE IF EXISTS `tbl_projects`;
CREATE TABLE IF NOT EXISTS `tbl_projects` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Description` text NOT NULL,
  `main_image` varchar(20) DEFAULT NULL,
  `image_2` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_projects`
--

INSERT INTO `tbl_projects` (`ID`, `Name`, `Description`, `main_image`, `image_2`) VALUES
(1, 'TRAA', 'This was a school project. I worked with a partner to remake the Thames River Anglers Association website. We were required to preserve the branding and logo. We shared the design work equally.\r\nFor the development, we used HTML5, CSS3, and native JavaScript. The website if fully responsive and was written mobile first.\r\nFor my part of the development, I wrote the HTML and CSS for the contact, blog and abut pages. However, I didn\'t write the css animations in the about page, that was my awesome partner. I wrote the JavaScript for the sub-menu in the nav for the mobile version. I also used the GreeSock library for the smooth scrolling. \r\nUnfortunately, this website is not hosted. If you\'d like to checkout the code, this is the github link: https://github.com/kchang00/chang_k_khalifa_m_final_ia ', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
