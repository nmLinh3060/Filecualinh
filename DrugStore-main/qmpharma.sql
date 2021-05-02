-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 24, 2021 lúc 02:39 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qmpharma`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `hoten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sodienthoai` int(11) NOT NULL,
  `matkhau` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `quanhuyen` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `thanhpho` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `hoten`, `email`, `sodienthoai`, `matkhau`, `diachi1`, `diachi2`, `quanhuyen`, `thanhpho`) VALUES
(1, 'bai tap nhieu diem', 'btnhieudiem@gmail.com', 1234567890, '7363a0d0604902af7b70b271a0b96480', '17a cong hoa', '', 'tan binh', 'hcm'),
(2, 'nhom6', 'nhom6@gmail.com', 1234567890, '7363a0d0604902af7b70b271a0b96480', '17a cong hoa', '', 'tan binh', 'hcm'),
(3, 'bai tap nhieu diem', 'btnhieudiem@gmail.com', 1234567890, '7363a0d0604902af7b70b271a0b96480', '17a cong hoa', '', 'tan binh', 'hcm'),
(4, 'bai tap nhieu diem', 'btnhieudiem@gmail.com', 1234567890, '7363a0d0604902af7b70b271a0b96480', '17a cong hoa', '', 'tan binh', 'hcm'),
(5, 'bai tap nhieu diem', 'btnhieudiem@gmail.com', 1234567890, '58b1216b06850385d9a4eadbedc806c4', '17a cong hoa', '', 'tan binh', 'hcm'),
(6, 'nhom6', 'nhom6@gmail.com', 1234567890, 'c56d0e9a7ccec67b4ea131655038d604', '17a cong hoa', '', 'tan binh', 'hcm'),
(7, 'nhom6', 'nhom6@gmail.com', 1234567890, '2e99bf4e42962410038bc6fa4ce40d97', '17a cong hoa', '', 'tan binh', 'hcm'),
(8, 'nhom6', 'nhom6@gmail.com', 1234567890, '58b1216b06850385d9a4eadbedc806c4', '17a cong hoa', '', 'tan binh', 'hcm'),
(9, 'bai tap nhieu diem', 'btnhieudiem@gmail.com', 1234567890, '7363a0d0604902af7b70b271a0b96480', '17a cong hoa', '', 'tan binh', 'hcm'),
(10, 'bai tap nhieu diem', 'btnhieudiem@gmail.com', 1234567890, 'e601681ad41f49752c258dcd8bb67afa', '17a cong hoa', '', 'tan binh', 'hcm');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
