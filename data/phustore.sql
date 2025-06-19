-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 19, 2025 at 04:04 AM
-- Server version: 8.0.40
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phustore`
--

-- --------------------------------------------------------

--
-- Table structure for table `loai_sanpham`
--

CREATE TABLE `loai_sanpham` (
  `idloaisanpham` int NOT NULL,
  `tenloaisanpham` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loai_sanpham`
--

INSERT INTO `loai_sanpham` (`idloaisanpham`, `tenloaisanpham`) VALUES
(1, 'Đồ ăn cho chó'),
(2, 'Đồ ăn cho mèo'),
(3, 'Phụ kiện thú cưng'),
(4, 'Sữa tắm & vệ sinh'),
(5, 'Đồ chơi cho thú cưng');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `iduser` int NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` tinyint NOT NULL,
  `idrole` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`iduser`, `fullname`, `username`, `password`, `gender`, `idrole`) VALUES
(1, 'ho truong minh phu', 'phu', 'e10adc3949ba59abbe56e057f20f883e', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `idsanpham` int NOT NULL,
  `tensanpham` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dongia` decimal(10,2) NOT NULL,
  `giagoc` decimal(10,2) DEFAULT NULL,
  `giaban` decimal(10,2) DEFAULT NULL,
  `soluongton` int DEFAULT '0',
  `idloaisanpham` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`idsanpham`, `tensanpham`, `hinhanh`, `dongia`, `giagoc`, `giaban`, `soluongton`, `idloaisanpham`) VALUES
(1, 'Pate Pedigree cho chó 400g', 'pate_dog1.jpg', 25000.00, 30000.00, 25000.00, 100, 1),
(2, 'Hạt Royal Canin cho chó nhỏ', 'royalcanin_small.jpg', 150000.00, 170000.00, 150000.00, 50, 1),
(3, 'Bánh thưởng cho chó vị gà', 'banhga_dog.jpg', 30000.00, 35000.00, 30000.00, 80, 1),
(4, 'Xương gặm sạch răng', 'xuonggam.jpg', 20000.00, 25000.00, 20000.00, 70, 1),
(5, 'Hạt Smartheart gói 1kg', 'smartheart1kg.jpg', 80000.00, 90000.00, 80000.00, 60, 1),
(6, 'Pate Whiskas cho mèo 85g', 'patewhiskas.jpg', 12000.00, 15000.00, 12000.00, 100, 2),
(7, 'Hạt Catsrang 400g', 'hat-castrang.jpg', 35000.00, 40000.00, 35000.00, 90, 2),
(8, 'Súp thưởng cho mèo vị cá', 'supthuongg-vimeo.png', 10000.00, 12000.00, 10000.00, 80, 2),
(9, 'Whiskas gói 1.1kg', 'whiskas-1kg.png', 90000.00, 100000.00, 90000.00, 50, 2),
(10, 'Hạt Me-O cho mèo con', 'hat-me-o.jpg', 40000.00, 50000.00, 40000.00, 60, 2),
(11, 'Dây dắt chó màu đỏ', 'daydo.jpg', 45000.00, 50000.00, 45000.00, 40, 3),
(12, 'Bát ăn inox chống trượt', 'batinox.jpg', 30000.00, 35000.00, 30000.00, 35, 3),
(13, 'Lược chải lông chó mèo', 'luoclong.jpeg', 25000.00, 28000.00, 25000.00, 50, 3),
(14, 'Vòng cổ thú cưng có chuông', 'vongco.png', 20000.00, 25000.00, 20000.00, 45, 3),
(15, 'Túi vận chuyển thú cưng mini', 'tui_vanchuyen.jpg', 95000.00, 120000.00, 95000.00, 20, 3),
(16, 'Sữa tắm SOS cho chó lông trắng', 'suatam-sos.jpg', 60000.00, 70000.00, 60000.00, 30, 4),
(17, 'Cát vệ sinh cho mèo 5kg', 'cat-vesinh-5kg.jpeg', 85000.00, 90000.00, 85000.00, 25, 4),
(18, 'Khăn ướt cho thú cưng', 'khanuot-cho-thucung.jpeg', 20000.00, 25000.00, 20000.00, 50, 4),
(19, 'Xịt khử mùi chuồng trại', 'xit-khumui-chuongtrai.jpg', 70000.00, 80000.00, 70000.00, 15, 4),
(20, 'Sữa tắm Fay cho chó mèo', 'suatam.jpeg', 55000.00, 60000.00, 55000.00, 28, 4),
(21, 'Bóng cao su có tiếng kêu', 'bongcao-su.jpg', 15000.00, 20000.00, 15000.00, 60, 5),
(22, 'Đồ chơi xương nhựa dai', 'bongcao.jpeg', 30000.00, 35000.00, 30000.00, 40, 5),
(23, 'Chuột vải có dây kéo', 'cho.jpeg', 25000.00, 28000.00, 25000.00, 35, 5),
(24, 'Cần câu mèo có chuông', 'cancau-meo.jpg', 20000.00, 25000.00, 20000.00, 50, 5),
(25, 'Đồ chơi bóng gai nhựa mềm', 'bong-gao.jpeg', 18000.00, 22000.00, 18000.00, 45, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loai_sanpham`
--
ALTER TABLE `loai_sanpham`
  ADD PRIMARY KEY (`idloaisanpham`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsanpham`),
  ADD KEY `idloaisanpham` (`idloaisanpham`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loai_sanpham`
--
ALTER TABLE `loai_sanpham`
  MODIFY `idloaisanpham` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `iduser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsanpham` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`idloaisanpham`) REFERENCES `loai_sanpham` (`idloaisanpham`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
