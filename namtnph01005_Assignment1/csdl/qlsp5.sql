-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2015 at 07:02 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qlsp5`
--
CREATE DATABASE IF NOT EXISTS `qlsp5` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `qlsp5`;

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `makh` int(15) NOT NULL,
  `mahd` int(15) NOT NULL,
  PRIMARY KEY (`makh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`makh`, `mahd`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE IF NOT EXISTS `hoadon` (
  `id` int(11) NOT NULL,
  `mahd` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id`, `mahd`, `soluong`, `masp`) VALUES
(1, 1, 2, 5),
(2, 1, 6, 4),
(3, 2, 1, 2),
(4, 2, 1, 3),
(5, 3, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE IF NOT EXISTS `khachhang` (
  `makh` int(15) NOT NULL AUTO_INCREMENT,
  `tenkh` varchar(50) COLLATE utf8_bin NOT NULL,
  `diachi` varchar(100) COLLATE utf8_bin NOT NULL,
  `sodienthoai` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` char(50) COLLATE utf8_bin NOT NULL,
  `gioitinh` char(15) COLLATE utf8_bin NOT NULL,
  `matkhau` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`makh`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=18 ;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `diachi`, `sodienthoai`, `email`, `gioitinh`, `matkhau`) VALUES
(13, 'nguyenph02304', 'Äá»“ng SÆ¡n - IaPa - Gia lai', '01666060113', 'nguyenvan02304@gmail.com', 'nam', '123456'),
(16, 'abc', 'ha noi', '01666060113', 'nguyenvanthinh358@gmail.com', 'nam', '123'),
(17, '11', '1', '1', '1@gmaill.com', 'nam', 'c4ca4238a0b923820dcc509a6f7584');

-- --------------------------------------------------------

--
-- Table structure for table `mucsanpham`
--

CREATE TABLE IF NOT EXISTS `mucsanpham` (
  `mamucsp` int(15) NOT NULL,
  `tenmucsp` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`mamucsp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mucsanpham`
--

INSERT INTO `mucsanpham` (`mamucsp`, `tenmucsp`) VALUES
(1, 'Bồn Nước Inox Đứng'),
(2, 'Bồn Nước Inox Ngang');

-- --------------------------------------------------------

--
-- Table structure for table `quantri`
--

CREATE TABLE IF NOT EXISTS `quantri` (
  `maqt` int(15) NOT NULL,
  `tendn` varchar(100) COLLATE utf8_bin NOT NULL,
  `pass` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`maqt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `quantri`
--

INSERT INTO `quantri` (`maqt`, `tendn`, `pass`) VALUES
(1, 'admin', 'admin'),
(2, 'mod', 'mod');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `masp` int(15) NOT NULL,
  `tensp` varchar(50) COLLATE utf8_bin NOT NULL,
  `gia` int(255) NOT NULL,
  `baohanh` text COLLATE utf8_bin NOT NULL,
  `chatlieu` text COLLATE utf8_bin NOT NULL,
  `xuatxu` text COLLATE utf8_bin NOT NULL,
  `gioithieu` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(225) COLLATE utf8_bin NOT NULL,
  `mamucsp` int(15) NOT NULL,
  PRIMARY KEY (`masp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `gia`, `baohanh`, `chatlieu`, `xuatxu`, `gioithieu`, `hinhanh`, `mamucsp`) VALUES
(1, 'Bồn Inox Đứng', 3333123, '12 năm', 'Nhôm', 'VN', 'Đặc điểm sản phẩm Bồn nước Tân Á 1000 lít đứng F940, Bồn inox Tân Á 1000 lít đứng F940 ', '1.jpg', 1),
(3, 'Bồn Inox Đứng', 12323213, '12 năm', 'Nhôm', 'EL', 'Đặc điểm sản phẩm Bồn nước Tân Á 1000 lít đứng F940, Bồn inox Tân Á 1000 lít đứng F940 ', '2.jpg', 1),
(4, 'Bồn Inox Đứng', 123233, '12 năm', 'Nhôm', 'LAO', 'Bồn nước Tân Á 700 Lít Ngang, Bồn inox Tân Á 700 Lit Ngang, ', '3.jpg', 2),
(5, 'Bồn Inox Ngang', 121323, '12 năm', 'Nhôm', 'MY', 'Bồn nước Tân Á 700 Lít Ngang, Bồn inox Tân Á 700 Lit Ngang, ', '4.jpg', 2),
(6, 'Bồn Inox Ngang', 333000, '12 năm', 'Nhôm', 'NHAT', 'Đặc điểm sản phẩm Bồn nước Tân Á 1000 lít đứng F940, Bồn inox Tân Á 1000 lít đứng F940 ', '5.jpg', 1),
(8, 'Bồn Inox Ngang', 7230, '12 năm', 'Nhôm', 'VN', 'Bồn nước Tân Á 700 Lít Ngang, Bồn inox Tân Á 700 Lit Ngang, ', '6.jpg', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
