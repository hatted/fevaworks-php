-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2016 at 04:14 PM
-- Server version: 5.7.13-log
-- PHP Version: 5.6.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `supplier` varchar(500) NOT NULL,
  `description` varchar(4000) NOT NULL,
  `remark` varchar(4000) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `createdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `supplier`, `description`, `remark`, `price`, `image`, `createdate`) VALUES
(1, 'Photoshop', 'Adobe', 'Adobe Photoshop is a raster graphics editor developed and published by Adobe Systems for MacOS and Windows.', '', '1981.00', 'images/photoshop.png', '2016-11-23 00:00:01'),
(2, 'Illustrator', 'Adobe', 'Adobe Illustrator is a vector graphics editor developed and marketed by Adobe Systems. The latest version, Illustrator CC 2017, is the twenty-first generation in the product line.', '', '1982.00', 'images/illustrator.png', '2016-11-23 00:00:02'),
(3, 'InDesign', 'Adobe', 'Adobe InDesign is a desktop publishing software application produced by Adobe Systems. It can be used to create works such as posters, flyers, brochures, magazines, newspapers, and books. InDesign can also publish content suitable for tablet devices in conjunction with Adobe Digital Publishing Suite. Graphic designers and production artists are the principal users, creating and laying out periodical publications, posters, and print media. It also supports export to EPUB and SWF formats to create e-books and digital publications, including digital magazines, and content suitable for consumption on tablet computers. In addition, InDesign supports XML, style sheets, and other coding markup, making it suitable for exporting tagged text content for use in other digital and online formats. The Adobe InCopy word processor uses the same formatting engine as InDesign.', '', '1983.00', 'images/indesign.png', '2016-11-23 00:00:03'),
(4, 'Dreamweaver', 'Adobe', 'Adobe Dreamweaver CC is a web design and development application that combines a visual design surface known as Live View and a code editor with standard features such as syntax highlighting, code completion, and code collapsing as well as more sophisticated features such as real-time syntax checking and code introspection for generating code hints to assist the user in writing code. Combined with an array of site management tools, Dreamweaver lets its users design, code and manage websites as well as mobile content. Dreamweaver is positioned as a versatile web design and development tool that enables visualization of web content while coding.', '', '1984.00', 'images/dreamweaver.png', '2016-11-23 00:00:04'),
(5, 'Premiere', 'Adobe', 'Adobe Premiere Pro is a timeline-based video editing software application. It is part of the Adobe Creative Cloud, which includes video editing, graphic design, and web development programs.', '', '1985.00', 'images/premiere.png', '2016-11-23 00:00:05'),
(6, 'After Effects', 'Adobe', 'Adobe After Effects is a digital visual effects, motion graphics, and compositing application developed by Adobe Systems and used in the post-production process of film making and television production. Among other things, After Effects can be used for keying, tracking, compositing and animation. It also functions as a very basic non-linear editor, audio editor and media transcoder.', '', '1986.00', 'images/aftereffects.png', '2016-11-23 00:00:06'),
(7, 'Lightroom', 'Adobe', 'Adobe Lightroom (Lr or LR) is a photo processor and image organizer developed by Adobe Systems for Windows and macOS. It allows viewing, organizing and retouching large numbers of digital images.[1] Lightroom\'s edits are non-destructive. Despite sharing its name with Adobe Photoshop, it cannot perform many Photoshop functions such as doctoring (adding, removing or altering the appearance of individual image items), rendering text or 3D objects on images, or modifying individual video frames.', '', '1987.00', 'images/lightroom.png', '2016-11-23 00:00:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
