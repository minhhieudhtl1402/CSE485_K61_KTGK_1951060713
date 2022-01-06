-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2022 lúc 09:20 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qldh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `magv` int(11) NOT NULL,
  `hovaten` varchar(50) DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioitinh` varchar(10) DEFAULT NULL,
  `trinhdo` varchar(50) DEFAULT NULL,
  `chuyenmon` varchar(50) DEFAULT NULL,
  `hocham` varchar(50) DEFAULT NULL,
  `hocvi` varchar(50) DEFAULT NULL,
  `coquan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`magv`, `hovaten`, `ngaysinh`, `gioitinh`, `trinhdo`, `chuyenmon`, `hocham`, `hocvi`, `coquan`) VALUES
(3, 'Rock', '2021-08-24', 'Female', 'Surveyor', 'Supervisor', 'Finance', 'Health Care', 'First US Bancshares, Inc.'),
(4, 'Bryant', '2021-09-11', 'Male', 'Estimator', 'Subcontractor', 'Technology', 'Consumer Services', 'Activision Blizzard, Inc'),
(5, 'Giselbert', '2021-05-08', 'Male', 'Surveyor', 'Engineer', 'Health Care', 'Basic Industries', 'Cytokinetics, Incorporated'),
(6, 'Reider', '2021-09-14', 'Female', 'Estimator', 'Construction Expeditor', 'Consumer Services', 'Finance', 'Genesco Inc.'),
(7, 'Boone', '2021-02-11', 'Female', 'Estimator', 'Construction Expeditor', 'Health Care', 'n/a', 'Trillium Therapeutics Inc.'),
(8, 'Teodoor', '2021-08-23', 'Male', 'Subcontractor', 'Estimator', 'Capital Goods', 'Finance', 'Orbotech Ltd.'),
(9, 'Elly', '2021-08-21', 'Female', 'Construction Worker', 'Project Manager', 'Finance', 'Health Care', 'Associated Capital Group, Inc.'),
(10, 'Gawen', '2021-04-06', 'Female', 'Architect', 'Surveyor', 'n/a', 'n/a', 'Everbridge, Inc.'),
(11, 'Bird', '2021-06-13', 'Female', 'Engineer', 'Engineer', 'Finance', 'Finance', 'Fifth Third Bancorp'),
(12, 'Isidoro', '2021-02-21', 'Male', 'Construction Worker', 'Construction Expeditor', 'Capital Goods', 'Consumer Services', 'KLX Inc.'),
(13, 'Sybille', '2021-05-17', 'Female', 'Construction Foreman', 'Electrician', 'Finance', 'Public Utilities', 'AmTrust Financial Services, Inc.'),
(14, 'Timothee', '2021-04-12', 'Male', 'Construction Foreman', 'Construction Expeditor', 'n/a', 'n/a', 'WisdomTree Strategic Corporate Bond Fund');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`magv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  MODIFY `magv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
