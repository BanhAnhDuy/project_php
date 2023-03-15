-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2022 lúc 09:59 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `login_user`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_confirm`
--

CREATE TABLE `table_confirm` (
  `id` int(3) NOT NULL,
  `hoten` varchar(40) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `diachi` varchar(60) NOT NULL,
  `ngaynhan` date NOT NULL,
  `canthue` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `table_confirm`
--

INSERT INTO `table_confirm` (`id`, `hoten`, `sdt`, `diachi`, `ngaynhan`, `canthue`) VALUES
(5, 'abc', '090909', '176n duong abc', '2022-12-11', 'Xe Grand i10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_danhmuc`
--

CREATE TABLE `table_danhmuc` (
  `id` int(3) NOT NULL,
  `tendm` varchar(40) NOT NULL,
  `uutien` int(3) NOT NULL DEFAULT 0,
  `hienthi` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `table_danhmuc`
--

INSERT INTO `table_danhmuc` (`id`, `tendm`, `uutien`, `hienthi`) VALUES
(1, 'Sedan', 0, 1),
(2, 'HatchBack', 0, 1),
(3, 'HalfTruck', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_user`
--

CREATE TABLE `table_user` (
  `id` int(4) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `address` varchar(80) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `table_user`
--

INSERT INTO `table_user` (`id`, `name`, `address`, `email`, `username`, `password`, `role`) VALUES
(1, NULL, NULL, NULL, 'admin', 'admin', 1),
(2, NULL, NULL, NULL, 'anhduy', '123', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_xe`
--

CREATE TABLE `table_xe` (
  `id` int(5) NOT NULL,
  `tenxe` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `gia` double(10,0) NOT NULL DEFAULT 0,
  `iddm` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `table_xe`
--

INSERT INTO `table_xe` (`id`, `tenxe`, `img`, `gia`, `iddm`) VALUES
(1, 'Xe Vios 2018', 'vios.jpg', 600000, 1),
(2, 'Xe Vios Altis 2019', 'altis.jpg', 650000, 1),
(3, 'Xe Mazda 2020', 'mazda3.jpg', 550000, 1),
(4, 'Xe Grand i10', 'i10.jpg', 350000, 2),
(5, 'Xe Grand i10 Red', 'i10-red.jpg', 400000, 2),
(7, 'Xe Vinfast Fadil', 'fadil.png', 450000, 2),
(8, 'Xe Ford Vàng 2019', 'ford.jpg', 700000, 3),
(9, 'Xe Ford Trắng 2021', 'ford-ranger-1323.jpg', 660000, 3),
(10, 'Xe Camry 2022', 'camry.jpg', 820000, 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `table_confirm`
--
ALTER TABLE `table_confirm`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_danhmuc`
--
ALTER TABLE `table_danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_xe`
--
ALTER TABLE `table_xe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_xe_danhmuc` (`iddm`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `table_confirm`
--
ALTER TABLE `table_confirm`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `table_danhmuc`
--
ALTER TABLE `table_danhmuc`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `table_xe`
--
ALTER TABLE `table_xe`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `table_xe`
--
ALTER TABLE `table_xe`
  ADD CONSTRAINT `fk_xe_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `table_danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
