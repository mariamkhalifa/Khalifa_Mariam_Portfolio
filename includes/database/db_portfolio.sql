-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 14, 2019 at 04:19 PM
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
  `Name` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `main_image` varchar(50) DEFAULT NULL,
  `image_2` varchar(50) DEFAULT NULL,
  `image_1` varchar(50) DEFAULT NULL,
  `Team Members` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_projects`
--

INSERT INTO `tbl_projects` (`ID`, `Name`, `Description`, `main_image`, `image_2`, `image_1`, `Team Members`) VALUES
(2, 'TRAA', 'This was a school project. I worked with a partner to remake the Thames River Anglers Association website. We were required to preserve the branding and logo. We shared the design work equally.\r\nFor the development, we used HTML5, CSS3, and Vanilla JavaScript. The website is fully responsive and was written mobile-first.<br>\r\nFor my part of the development, I wrote the HTML and CSS for the contact, blog and about pages. However, I didn\'t write the CSS animations in the about page, that was my awesome partner. I wrote the JavaScript for the sub-menu in the nav for the mobile version. I also used the Greensock library for the smooth scrolling.<br> The code for the project can be found on GitHub: <span><a href=\"https://github.com/kchang00/chang_k_khalifa_m_final_ia\" target=\"_blank\">https://github.com/kchang00/chang_k_khalifa_m_final_ia</a></span>', 'traa-desktop.png', 'traa-mobile-2.png', 'traa-mobile.png', 'Kayla Chang (designer + developer + motion) <span><a href=\"https://github.com/kchang00\" target=\"_blank\">https://github.com/kchang00</a></span><br>\r\nMe (designer + developer + photo-editor)'),
(1, 'Animal Tracks', 'This is a music mixer web app. This was a school homework where I worked with a partner. She did the design work and I was the developer. I wrote the javaScript. The music mixer works y dragging the animal icons to the middle section drop area. Also, there are track buttons to choose from. The animal sounds create the beats that go with the tracks. The app allows the user o add any number of animals they want with only one track playing. The user can add animals or remove them as they like. There is a play/pause button and a restart button to allow the user to restart everything without having to refresh the page.<br> The code for the project can be found on GitHub: <span><a href=\"https://github.com/kchang00/chang_k_khalifa_m_musicMixer\" target=\"_blank\">https://github.com/kchang00/chang_k_khalifa_m_musicMixer</a></span>', 'animal-tracks-desktop.png', NULL, NULL, 'Kayla Chang (designer) <span><a href=\"https://github.com/kchang00\" target=\"_blank\">https://github.com/kchang00</a></span><br>\r\nMe (developer)'),
(3, 'Red Fox', 'This is a freelance project I did for a client during the summer holiday after the first year. The client had only a name and wanted a brand and a website. I created the logo and branding for the company. I made the website using HTML, CSS3 and vanilla JavaScript. I used GreenSock as well as CSS3 for animations.<br> The website is hosted and can be found here: <span><a href=\"https://redfoxmedical.ca\" target=\"_blank\">www.redfoxmedical.ca</a></span><br>\r\nThe project is available on Github: <span><a href=\"https://github.com/mariamkhalifa/redFox\" target=\"_blank\">https://github.com/mariamkhalifa/redFox</a></span>', 'red-fox-desktop.png', 'red-fox-mobile-2.png', 'red-fox-mobile.png', 'Just me (designer + developer)'),
(4, 'Imagina', 'This is a school team project. We were a team of 4. Two designers and 2 developers. I worked with my partner to write HTML, CSS, and javaScript. We used Sass for CSS and vanilla JavaScript. We were required to create a dynamic section where the content is pulled through a JavaScript object. We did that for the popover in the “team members” section, where hovering over an image displays the bio for this person over their image.  \r\nThe project is available on Github: <span><a href=\"https://github.com/SandraTsao/Gajjar_Khalifa_Tsao_Valero_Bootcamp\" target=\"_blank\">https://github.com/SandraTsao/Gajjar_Khalifa_Tsao_Valero_Bootcamp</a></span>', 'imagina-desktop.png', 'imagina-mobile-2.png', 'imagina-mobile.png', 'Sandra Tsao (developer + motion) <span><a href=\"https://github.com/SandraTsao/Gajjar_Khalifa_Tsao_Valero_Bootcamp\" target=\"_blank\">https://github.com/SandraTsao</a></span><br>\r\nLuiza Valero  (designer) <span><a href=\"https://github.com/SandraTsao/Gajjar_Khalifa_Tsao_Valero_Bootcamp\" target=\"_blank\">https://github.com/LuDesigner</a></span><br>\r\nKahani Gajar  (designer + photographer) <span><a href=\"https://github.com/SandraTsao/Gajjar_Khalifa_Tsao_Valero_Bootcamp\" target=\"_blank\">https://github.com/Kahani22</a></span><br>\r\nMe (developer)'),
(5, 'Roomba 614 Robot Vaccuum', 'This was a school homework where we were required to create a web page for any product using Node.js and host the web page on Heroku. I chose Roomba614. I designed the page and wrote the code using HTML, CSS3, Sass and Node.js.<br> The website is hosted on Heroku: <span><a href=\"https://mariam-product-hw.herokuapp.com/\" target=\"_blank\">https://mariam-product-hw.herokuapp.com/</a></span><br>\r\nThis is the link to the Github repo: <span><a href=\"https://github.com/mariamkhalifa/Khalifa_Mariam_HerokuTest\" target=\"_blank\">https://github.com/mariamkhalifa/Khalifa_Mariam_HerokuTest</a></span>', 'irobot-desktop.png', 'irobot-mobile-2.png', 'irobot-mobile.png', 'Just me (designer + developer)'),
(6, 'My Favourite Things', 'This was a school homework where we were required to create a one-page dynamic web app that shows 3 f our favourite things. We were required to use Node.js. All the content needed to be retrieved from a database. We were also required to create a custom error page.<br> I decided to make it a mystery guessing game where the user can click on the image of a question mark to reveal my favourite item. I created a database with 2 tables, one for the question mark images and the other for the favourite items images and description. The favourite items are displayed in a lightbox.<br> The project is available on Github: <span><a href=\"https://github.com/mariamkhalifa/Khalifa_Mariam_FavouriteThings\" target=\"_blank\">https://github.com/mariamkhalifa/Khalifa_Mariam_FavouriteThings</a></span>', 'fav-things-desktop.png', 'fav-things-mobile-2.png', 'fav-things-mobile.png', 'Just me (designer + developer)');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
