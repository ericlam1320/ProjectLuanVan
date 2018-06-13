-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 11, 2018 lúc 10:10 AM
-- Phiên bản máy phục vụ: 10.1.29-MariaDB
-- Phiên bản PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_demo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangxephang`
--

CREATE TABLE `bangxephang` (
  `id` int(11) NOT NULL,
  `SoTran` int(3) DEFAULT NULL,
  `SoTranThang` int(3) DEFAULT NULL,
  `SoTranHoa` int(3) DEFAULT NULL,
  `SoTranThua` int(3) DEFAULT NULL,
  `BanThang` int(3) DEFAULT NULL,
  `BanThua` int(3) DEFAULT NULL,
  `HieuSo` int(3) DEFAULT NULL,
  `Diem` int(3) DEFAULT NULL,
  `idGiaiDau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bangxephang`
--

INSERT INTO `bangxephang` (`id`, `SoTran`, `SoTranThang`, `SoTranHoa`, `SoTranThua`, `BanThang`, `BanThua`, `HieuSo`, `Diem`, `idGiaiDau`) VALUES
(1, 38, 35, 4, 1, 128, 28, 100, 100, 1),
(2, 38, 30, 0, 8, 100, 50, 50, 81, 1),
(3, 38, 30, 8, 0, 100, 1, 99, 81, 1),
(4, 38, 25, 10, 3, 100, 15, 85, 81, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangxephang_caulacbo`
--

CREATE TABLE `bangxephang_caulacbo` (
  `idBangXepHang` int(11) NOT NULL,
  `idCauLacBo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bangxephang_caulacbo`
--

INSERT INTO `bangxephang_caulacbo` (`idBangXepHang`, `idCauLacBo`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `caulacbo`
--

CREATE TABLE `caulacbo` (
  `id` int(11) NOT NULL,
  `TenDayDu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TenVietTat` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TruSo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NgayThanhLap` date DEFAULT NULL,
  `BietDanh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SanVanDong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LichSu` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `caulacbo`
--

INSERT INTO `caulacbo` (`id`, `TenDayDu`, `TenVietTat`, `TruSo`, `NgayThanhLap`, `BietDanh`, `SanVanDong`, `LichSu`) VALUES
(1, 'Arsenal', 'Ars', NULL, NULL, NULL, NULL, NULL),
(2, 'Liverpool', 'Liv', NULL, NULL, NULL, NULL, NULL),
(3, 'Manchester Utd', 'MU', NULL, NULL, NULL, NULL, NULL),
(4, 'Manchester City', 'MC', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `caulacbo_giaidau`
--

CREATE TABLE `caulacbo_giaidau` (
  `id` int(11) NOT NULL,
  `idCauLacBo` int(11) NOT NULL,
  `idGiaiDau` int(11) NOT NULL,
  `XepHang` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `caulacbo_giaidau`
--

INSERT INTO `caulacbo_giaidau` (`id`, `idCauLacBo`, `idGiaiDau`, `XepHang`) VALUES
(2, 2, 1, 2),
(3, 2, 2, 1),
(4, 2, 4, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauthu`
--

CREATE TABLE `cauthu` (
  `id` int(11) NOT NULL,
  `ChieuCao` int(3) DEFAULT NULL,
  `CanNang` int(3) DEFAULT NULL,
  `ViTriSoTruong` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SoAo` int(3) NOT NULL,
  `ChanThuan` tinyint(4) DEFAULT NULL,
  `LuocSuCauThu` longtext COLLATE utf8_unicode_ci,
  `idNguoiDung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cauthu`
--

INSERT INTO `cauthu` (`id`, `ChieuCao`, `CanNang`, `ViTriSoTruong`, `SoAo`, `ChanThuan`, `LuocSuCauThu`, `idNguoiDung`) VALUES
(1, 183, 58, 'Thủ môn', 5, NULL, NULL, 2),
(2, 195, 95, 'Hậu vệ', 9, NULL, NULL, 3),
(3, 186, 81, 'Hậu vệ', 10, NULL, NULL, 4),
(4, 189, 81, 'Hậu vệ', 9, NULL, NULL, 5),
(5, 183, 69, 'Tiền vệ', 14, NULL, NULL, 7),
(6, NULL, NULL, 'Hậu vệ', 6, NULL, NULL, 6),
(7, NULL, NULL, 'Tiền vệ', 7, NULL, NULL, 8),
(8, NULL, NULL, 'Tiền vệ', 8, NULL, NULL, 9),
(9, NULL, NULL, 'Tiền đạo', 15, NULL, NULL, 10),
(10, NULL, NULL, 'Tiền đạo', 25, NULL, NULL, 11),
(11, NULL, NULL, 'Tiền đạo', 52, NULL, NULL, 12),
(12, NULL, NULL, NULL, 56, NULL, NULL, 13),
(13, NULL, NULL, NULL, 26, NULL, NULL, 14);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chanthuong`
--

CREATE TABLE `chanthuong` (
  `id` int(11) NOT NULL,
  `TenChanThuong` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `PhanLoaiChanThuong` tinyint(4) DEFAULT NULL,
  `ThoiGianHoiPhuc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chanthuong`
--

INSERT INTO `chanthuong` (`id`, `TenChanThuong`, `PhanLoaiChanThuong`, `ThoiGianHoiPhuc`) VALUES
(1, 'Chấn thương gân kheo', 1, 12),
(2, 'Chấn thương gót chân', 1, 8),
(3, 'Gãy xương chân', 1, 50),
(4, 'Đau đầu', 5, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chienthuat`
--

CREATE TABLE `chienthuat` (
  `id` int(11) NOT NULL,
  `TenChienThuat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDungChienThuat` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chienthuat`
--

INSERT INTO `chienthuat` (`id`, `TenChienThuat`, `NoiDungChienThuat`) VALUES
(1, 'Tiki Taka', '<p>Về nguyên tắc, có thể diễn giải Tiqui-Taca là lối chơi kết hợp giữa \"chuyền\" (Tiqui) và \"chạy\" (Taca). Những đường chuyền của Tiqui-Taca đa phần ở cự ly trung bình - ngắn và tần số di chuyển không bóng của cầu thủ ở mức cao. Cơ bản 2 yếu tố này đan xen với nhau, làm cho đội chơi Tiqui-Taca luôn kiểm soát được bóng và có cơ hội xuyên phá hàng phòng ngự đối phương.</p>\r\n								<p>Như đã nói, Tiqui-Taca là chuyền và chạy. Bóng được chuyền sệt, và chuyền liên tục từ cầu thủ này sang cầu thủ khác. Các cầu thủ không có bóng phải linh động di chuyển để đón bóng. Nhưng vì chỉ tăng tốc và di chuyển trong phạm vi ngắn nên cầu thủ mất sức không nhiều; ngược lại, đội đối phương nếu không thích nghi sẽ bị mất sức do đeo bám và dễ bị rối loạn đội hình.</p>\r\n								<p>Nhìn chung, cũng như nhiều loại hình chiến thuật khác, chiến thuật này cần có sự co giãn nhịp nhàng liên tục, khi hàng công dâng cao, hàng thủ cũng phải dâng cao và ngược lại để đảm bảo cự ly đội hình hợp lý.</p>'),
(2, 'Tấn công tổng lực', NULL),
(3, 'Tacadada', NULL),
(4, 'Quick Passing', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doihinh`
--

CREATE TABLE `doihinh` (
  `id` int(11) NOT NULL,
  `TenDoiHinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SoTranThang` int(11) DEFAULT NULL,
  `SoTranThua` int(11) DEFAULT NULL,
  `SoTranHoa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `doihinh`
--

INSERT INTO `doihinh` (`id`, `TenDoiHinh`, `SoTranThang`, `SoTranThua`, `SoTranHoa`) VALUES
(1, '4-4-2 Cổ Điển', 51, 5, 14),
(2, '4-3-3', 40, 1, 1),
(3, '5-3-2', 5, 1, 0),
(4, '4-2-3-1', 0, 5, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaidau`
--

CREATE TABLE `giaidau` (
  `id` int(11) NOT NULL,
  `TenGiaiDau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NamBatDauMuaGiai` int(5) DEFAULT NULL,
  `NamKetThucMuaGiai` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giaidau`
--

INSERT INTO `giaidau` (`id`, `TenGiaiDau`, `NamBatDauMuaGiai`, `NamKetThucMuaGiai`) VALUES
(1, 'Premier league', 2017, 2018),
(2, 'FA', 2017, 2018),
(4, 'Premier league', 2016, 2017);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaotrinhtap`
--

CREATE TABLE `giaotrinhtap` (
  `id` int(11) NOT NULL,
  `TenBaiTap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDungBaiTap` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giaotrinhtap`
--

INSERT INTO `giaotrinhtap` (`id`, `TenBaiTap`, `NoiDungBaiTap`) VALUES
(1, 'Tập khởi động', NULL),
(2, 'Tập tâng bóng', NULL),
(3, 'Tập bắt bóng', NULL),
(4, 'Tập sút', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaotrinh_luyentap_cauthu`
--

CREATE TABLE `giaotrinh_luyentap_cauthu` (
  `id` int(11) NOT NULL,
  `idCauThu` int(11) NOT NULL,
  `idGiaoTrinhTap` int(11) NOT NULL,
  `idLichLuyenTap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giaotrinh_luyentap_cauthu`
--

INSERT INTO `giaotrinh_luyentap_cauthu` (`id`, `idCauThu`, `idGiaoTrinhTap`, `idLichLuyenTap`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 5, 2, 1),
(4, 1, 4, 2),
(5, 1, 1, 2),
(6, 1, 3, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `huanluyenvien`
--

CREATE TABLE `huanluyenvien` (
  `id` int(11) NOT NULL,
  `LuocSuHuanLuyen` longtext COLLATE utf8_unicode_ci,
  `idNguoiDung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `huanluyenvien`
--

INSERT INTO `huanluyenvien` (`id`, `LuocSuHuanLuyen`, `idNguoiDung`) VALUES
(1, NULL, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kynang`
--

CREATE TABLE `kynang` (
  `id` int(11) NOT NULL,
  `TenKyNang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ChiTiet` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kynang`
--

INSERT INTO `kynang` (`id`, `TenKyNang`, `ChiTiet`) VALUES
(1, 'Chạy nhanh', NULL),
(2, 'Đánh đầu', NULL),
(3, 'Lãnh đạo', NULL),
(4, 'Tổ chức trận đấu', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kynang_cauthu`
--

CREATE TABLE `kynang_cauthu` (
  `id` int(11) NOT NULL,
  `idKyNang` int(11) NOT NULL,
  `idCauThu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kynang_cauthu`
--

INSERT INTO `kynang_cauthu` (`id`, `idKyNang`, `idCauThu`) VALUES
(1, 1, 1),
(2, 3, 1),
(3, 3, 2),
(4, 2, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichkham`
--

CREATE TABLE `lichkham` (
  `id` int(11) NOT NULL,
  `NgayKham` date NOT NULL,
  `CaKham` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DiaDiem` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NoiDungDieuTri` text COLLATE utf8_unicode_ci,
  `idPhacDoDieuTri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lichkham`
--

INSERT INTO `lichkham` (`id`, `NgayKham`, `CaKham`, `DiaDiem`, `NoiDungDieuTri`, `idPhacDoDieuTri`) VALUES
(1, '2018-06-01', 'Sáng', 'Tòa nhà 5a', 'Khám tổng quát, Thuốc Anileneu 50mg', 2),
(2, '2018-06-06', 'Sáng', 'Tòa nhà 5a', 'Khám tổng quát', 1),
(3, '2018-06-10', 'Chiều', 'Tòa nhà 5a', 'Chụp X-Ray', 1),
(4, '2018-06-14', 'Sáng', 'Tòa nhà 5B, Lầu 2', 'Phẫu thuật cắt bỏ khối u', 1),
(5, '2018-06-01', 'Sáng', 'Sân 5A', 'Khám tổng quát', 3),
(6, '2018-06-22', 'Sáng', 'Tòa nhà 5a', 'Uống cocain', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichluyentap`
--

CREATE TABLE `lichluyentap` (
  `id` int(11) NOT NULL,
  `NgayLuyenTap` date NOT NULL,
  `GioLuyenTap` time NOT NULL,
  `DiaDiem` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lichluyentap`
--

INSERT INTO `lichluyentap` (`id`, `NgayLuyenTap`, `GioLuyenTap`, `DiaDiem`) VALUES
(1, '2018-06-06', '08:00:00', 'Sân tập'),
(2, '2018-06-22', '07:00:00', 'Sân tập');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ChucVu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` date DEFAULT NULL,
  `QuocTich` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GioiTinh` tinyint(1) DEFAULT NULL,
  `NoiSinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HinhDaiDien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `username`, `password`, `HoTen`, `ChucVu`, `Email`, `NgaySinh`, `QuocTich`, `GioiTinh`, `NoiSinh`, `HinhDaiDien`) VALUES
(1, 'admin', '123456', 'Admin Admin', 'admin', 'admin@gmail.com', NULL, NULL, NULL, NULL, NULL),
(2, 'ThuMon', '123456', 'Thủ Môn', 'cauthu', 'cauthu1@gmail.com', NULL, NULL, NULL, NULL, NULL),
(3, 'HauVe1', '123456', 'Hậu vệ 1', 'cauthu', 'cauthu2@gmail.com', NULL, NULL, NULL, NULL, NULL),
(4, 'HauVe2', '123456', 'Hậu vệ 2', 'cauthu', 'cauthu3@gmail.com', NULL, NULL, NULL, NULL, NULL),
(5, 'HauVe3', '123456', 'Hậu vệ 3', 'cauthu', 'cauthu4@gmail.com', NULL, NULL, NULL, NULL, NULL),
(6, 'HauVe4', '123456', 'Hậu vệ 4', 'cauthu', 'manager@gmail.com', NULL, NULL, NULL, NULL, NULL),
(7, 'TienVePhongNgu', '123456', 'Santi Cazorla', 'cauthu', 'MohamedSalah@gmail.com', NULL, NULL, NULL, NULL, NULL),
(8, 'TienVe1', '123456', 'Xavi', 'cauthu', 'Xavi@gmail.com', NULL, NULL, NULL, NULL, NULL),
(9, 'TienVe2', '123456', 'Iniesta', 'cauthu', 'Iniesta@gmail.com', NULL, NULL, NULL, NULL, NULL),
(10, 'TienDaoCanh1', '123456', 'C.Ronaldo', 'cauthu', 'Ronaldo@gmail.com', NULL, NULL, NULL, NULL, NULL),
(11, 'TienDaoCanh2', '123456', 'L.Messi', 'cauthu', 'Messi@gmail.com', NULL, NULL, NULL, NULL, NULL),
(12, 'Henry', '123456', 'T.Henry', 'cauthu', 'Henry@gmail.com', NULL, NULL, NULL, NULL, NULL),
(13, 'DuBi1', '123456', 'M.Salah', 'cauthu', 'salah@gmail.com', NULL, NULL, NULL, NULL, NULL),
(14, 'DuBi2', '123456', 'M.Sane', 'cauthu', 'sane@gmail.com', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phacdodieutri`
--

CREATE TABLE `phacdodieutri` (
  `id` int(11) NOT NULL,
  `TrinhTuThucHien` text COLLATE utf8_unicode_ci,
  `TienDoHoiPhuc` tinyint(3) DEFAULT NULL,
  `GhiChu` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phacdodieutri`
--

INSERT INTO `phacdodieutri` (`id`, `TrinhTuThucHien`, `TienDoHoiPhuc`, `GhiChu`) VALUES
(1, '1. Khám tổng quát\r\n2. Chụp X-Ray\r\n3. Phẩu thuật\r\n4. Uống Cacain', 1, NULL),
(2, 'Thuốc Anileneu 50mg', NULL, NULL),
(3, '1. Khám tổng quát\r\n2. Chích Aquafina', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongdo`
--

CREATE TABLE `phongdo` (
  `id` int(11) NOT NULL,
  `ChiSoPhongDo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phongdo`
--

INSERT INTO `phongdo` (`id`, `ChiSoPhongDo`) VALUES
(1, 5),
(2, 4),
(3, 3),
(4, 2),
(5, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongdo_cauthu`
--

CREATE TABLE `phongdo_cauthu` (
  `idCauThu` int(11) NOT NULL,
  `idPhongDo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phongdo_cauthu`
--

INSERT INTO `phongdo_cauthu` (`idCauThu`, `idPhongDo`) VALUES
(1, 1),
(2, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtichcauthu`
--

CREATE TABLE `thanhtichcauthu` (
  `id` int(11) NOT NULL,
  `DiemSo` double DEFAULT NULL,
  `SoDuongChuyen` int(11) DEFAULT NULL,
  `ChuyenThanhCong` int(11) DEFAULT NULL,
  `SoKienTao` int(5) DEFAULT NULL,
  `SoLanSut` int(5) DEFAULT NULL,
  `SoBanThang` int(5) DEFAULT NULL,
  `SoTranGiuSachLuoi` int(5) DEFAULT NULL,
  `SoLanCanPha` int(5) DEFAULT NULL,
  `TheVang` int(5) DEFAULT NULL,
  `TheDo` int(5) DEFAULT NULL,
  `idCauThu` int(11) NOT NULL,
  `idTranDau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhtichcauthu`
--

INSERT INTO `thanhtichcauthu` (`id`, `DiemSo`, `SoDuongChuyen`, `ChuyenThanhCong`, `SoKienTao`, `SoLanSut`, `SoBanThang`, `SoTranGiuSachLuoi`, `SoLanCanPha`, `TheVang`, `TheDo`, `idCauThu`, `idTranDau`) VALUES
(1, 8, 134, 130, 0, 2, 1, 0, 0, 0, 0, 1, 1),
(2, 7.3, 127, 121, 20, 14, 5, 0, 0, 1, 0, 2, 1),
(3, 8.8, 151, 151, 1, 0, 0, 0, 0, 0, 0, 1, 2),
(4, 8, 59, 59, 2, 1, 2, 0, 0, 0, 0, 2, 2),
(5, 10, 250, 250, 0, 10, 0, 0, 0, 0, 0, 4, 1),
(6, 9, 50, 0, 11, 24, 10, 0, 0, 0, 0, 4, 2),
(7, 8, 154, 154, 10, 40, 14, 0, 0, 0, 0, 5, 2),
(8, 8.5, 120, 120, 10, 11, 5, 0, 0, 0, 0, 3, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinchanthuong_cauthu`
--

CREATE TABLE `thongtinchanthuong_cauthu` (
  `id` int(11) NOT NULL,
  `ngaychanthuong` date NOT NULL,
  `NgayHoiPhuc` date DEFAULT NULL,
  `TinhTrangChanThuong` tinyint(4) NOT NULL,
  `idCauThu` int(11) NOT NULL,
  `idChanThuong` int(11) NOT NULL,
  `idPhacDoDieuTri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtinchanthuong_cauthu`
--

INSERT INTO `thongtinchanthuong_cauthu` (`id`, `ngaychanthuong`, `NgayHoiPhuc`, `TinhTrangChanThuong`, `idCauThu`, `idChanThuong`, `idPhacDoDieuTri`) VALUES
(1, '2018-06-01', '2018-06-02', 0, 1, 4, 2),
(2, '2018-06-08', NULL, 1, 1, 1, 1),
(3, '2018-06-01', '2018-06-07', 0, 5, 1, 1),
(4, '2018-06-03', '2018-06-07', 0, 1, 4, 2),
(5, '2018-06-01', '2018-06-15', 0, 1, 2, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuoc`
--

CREATE TABLE `thuoc` (
  `id` int(11) NOT NULL,
  `TenThuoc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `GhiChu` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thuoc`
--

INSERT INTO `thuoc` (`id`, `TenThuoc`, `GhiChu`) VALUES
(1, 'Thuốc aladin', NULL),
(2, 'Thuốc Megamon 10mg', NULL),
(3, 'Thuốc Assasin', NULL),
(4, 'Thuốc GinGana 10mg', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tiso`
--

CREATE TABLE `tiso` (
  `id` int(11) NOT NULL,
  `idCauLacBo` int(11) NOT NULL,
  `idTranDau` int(11) NOT NULL,
  `HiepMot` int(3) DEFAULT NULL,
  `HiepHai` int(3) DEFAULT NULL,
  `TiSo` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tiso`
--

INSERT INTO `tiso` (`id`, `idCauLacBo`, `idTranDau`, `HiepMot`, `HiepHai`, `TiSo`) VALUES
(1, 2, 1, 0, 1, 1),
(2, 1, 1, 0, 0, 0),
(3, 2, 2, 0, 0, 0),
(4, 4, 2, 0, 0, 0),
(5, 2, 3, NULL, NULL, NULL),
(6, 4, 3, NULL, NULL, NULL),
(7, 3, 4, NULL, NULL, NULL),
(8, 2, 4, NULL, NULL, NULL),
(9, 1, 5, NULL, NULL, NULL),
(10, 2, 5, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `toathuoc`
--

CREATE TABLE `toathuoc` (
  `id` int(11) NOT NULL,
  `NgayKham` date NOT NULL,
  `NgayTaiKham` date DEFAULT NULL,
  `ChanDoan` text COLLATE utf8_unicode_ci NOT NULL,
  `idLichKham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `toathuoc`
--

INSERT INTO `toathuoc` (`id`, `NgayKham`, `NgayTaiKham`, `ChanDoan`, `idLichKham`) VALUES
(1, '2018-06-01', '2018-06-02', 'Bị đau đầu', 1),
(2, '2018-06-04', '2018-06-06', 'Bị chấn thương gân kheo', 2),
(3, '2018-06-08', '2018-06-10', 'Bị chấn thương gân kheo', 3),
(4, '2018-06-14', '2018-06-18', 'Chấn thương gân kheo', 4),
(5, '2018-06-01', '2018-06-15', 'Bị đau gót chân', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `toathuoc_thuoc`
--

CREATE TABLE `toathuoc_thuoc` (
  `id` int(11) NOT NULL,
  `idToaThuoc` int(11) NOT NULL,
  `idThuoc` int(11) NOT NULL,
  `SoLuong` int(5) DEFAULT NULL,
  `LieuLuong` text COLLATE utf8_unicode_ci,
  `GhiChu` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `toathuoc_thuoc`
--

INSERT INTO `toathuoc_thuoc` (`id`, `idToaThuoc`, `idThuoc`, `SoLuong`, `LieuLuong`, `GhiChu`) VALUES
(1, 1, 1, 10, 'Uống 2 lần, mỗi lần 1 viên', NULL),
(2, 2, 3, 20, 'Uống 3 lần, mỗi lần 1 viên', NULL),
(3, 3, 3, 10, 'Uống 3 lần, mỗi lần 1 viên', NULL),
(4, 4, 3, 50, '5 lần, mỗi lần 10 viên', NULL),
(5, 4, 4, 20, '3 lần, mỗi lần 4 viên', NULL),
(6, 5, 4, 10, '2 lần, mỗi lần 2 viên', 'Uống trước khi ăn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trandau`
--

CREATE TABLE `trandau` (
  `id` int(11) NOT NULL,
  `VongDau` int(11) NOT NULL,
  `NgayThiDau` date NOT NULL,
  `GioThiDau` time NOT NULL,
  `DiaDiem` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idDoiHinh` int(11) NOT NULL,
  `idChienThuat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trandau`
--

INSERT INTO `trandau` (`id`, `VongDau`, `NgayThiDau`, `GioThiDau`, `DiaDiem`, `idDoiHinh`, `idChienThuat`) VALUES
(1, 1, '2018-06-01', '10:00:00', 'Sân nhà Anfield', 2, 4),
(2, 2, '2018-06-05', '02:00:00', 'Sân khách', 2, 3),
(3, 3, '2018-06-10', '09:00:00', 'Anfield Stadium', 2, 1),
(4, 4, '2018-06-15', '07:00:00', 'Old Stranford', 3, 4),
(5, 5, '2018-06-19', '10:00:00', 'Mỹ Đình Stadium', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vaitro`
--

CREATE TABLE `vaitro` (
  `id` int(11) NOT NULL,
  `TenVaiTro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MieuTa` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vaitro`
--

INSERT INTO `vaitro` (`id`, `TenVaiTro`, `MieuTa`) VALUES
(1, 'Đội trưởng', NULL),
(2, 'Đội phó', NULL),
(3, 'Phạt góc trái', NULL),
(4, 'Phạt góc phải', NULL),
(5, 'Đá Penalty', NULL),
(6, 'Đá phạt', NULL),
(7, 'Dự bị', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vaitro_cauthu`
--

CREATE TABLE `vaitro_cauthu` (
  `idVaiTro` int(11) NOT NULL,
  `idCauThu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vaitro_cauthu`
--

INSERT INTO `vaitro_cauthu` (`idVaiTro`, `idCauThu`) VALUES
(1, 1),
(3, 2),
(4, 2),
(2, 5),
(5, 5),
(6, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vaitro_cauthu_trandau`
--

CREATE TABLE `vaitro_cauthu_trandau` (
  `id` int(11) NOT NULL,
  `idCauThu` int(11) NOT NULL,
  `idVaiTro` int(11) NOT NULL,
  `idTranDau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vaitro_cauthu_trandau`
--

INSERT INTO `vaitro_cauthu_trandau` (`id`, `idCauThu`, `idVaiTro`, `idTranDau`) VALUES
(1, 1, 1, 3),
(2, 6, 2, 3),
(3, 2, 4, 3),
(4, 2, 3, 3),
(5, 5, 5, 3),
(6, 5, 6, 3),
(7, 13, 7, 3),
(8, 12, 7, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vitri`
--

CREATE TABLE `vitri` (
  `id` int(11) NOT NULL,
  `TenViTri` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ChuThich` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vitri`
--

INSERT INTO `vitri` (`id`, `TenViTri`, `ChuThich`) VALUES
(1, 'GK', NULL),
(2, 'LB', NULL),
(3, 'LCB', NULL),
(4, 'RCB', NULL),
(5, 'CB', NULL),
(6, 'RB', NULL),
(7, 'CDM', NULL),
(8, 'CF', NULL),
(9, 'LCM', NULL),
(10, 'RCM', NULL),
(11, 'LM', NULL),
(12, 'RM', NULL),
(13, 'CAM', NULL),
(14, 'SS', NULL),
(15, 'LW', NULL),
(16, 'RW', NULL),
(17, 'Dự Bị', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vitri_cauthu`
--

CREATE TABLE `vitri_cauthu` (
  `id` int(11) NOT NULL,
  `idCauThu` int(11) NOT NULL,
  `idViTri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vitri_cauthu`
--

INSERT INTO `vitri_cauthu` (`id`, `idCauThu`, `idViTri`) VALUES
(3, 1, 1),
(4, 2, 2),
(5, 3, 3),
(6, 4, 4),
(7, 6, 6),
(8, 5, 7),
(9, 7, 9),
(10, 8, 10),
(11, 9, 15),
(12, 10, 16),
(13, 11, 8),
(14, 12, 16),
(15, 13, 15),
(16, 12, 16),
(17, 13, 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vitri_cauthu_trandau`
--

CREATE TABLE `vitri_cauthu_trandau` (
  `id` int(11) NOT NULL,
  `idCauThu` int(11) NOT NULL,
  `idViTri` int(11) NOT NULL,
  `idTranDau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vitri_cauthu_trandau`
--

INSERT INTO `vitri_cauthu_trandau` (`id`, `idCauThu`, `idViTri`, `idTranDau`) VALUES
(1, 1, 1, 3),
(2, 2, 2, 3),
(3, 3, 3, 3),
(4, 4, 4, 3),
(5, 6, 6, 3),
(6, 5, 7, 3),
(7, 7, 9, 3),
(8, 8, 10, 3),
(9, 9, 15, 3),
(10, 10, 16, 3),
(11, 11, 8, 3),
(12, 12, 16, 3),
(13, 13, 16, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vitri_doihinh`
--

CREATE TABLE `vitri_doihinh` (
  `id` int(11) NOT NULL,
  `idViTri` int(11) NOT NULL,
  `idDoiHinh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vitri_doihinh`
--

INSERT INTO `vitri_doihinh` (`id`, `idViTri`, `idDoiHinh`) VALUES
(1, 1, 2),
(2, 2, 2),
(3, 3, 2),
(4, 4, 2),
(5, 6, 2),
(6, 7, 2),
(7, 9, 2),
(8, 10, 2),
(9, 8, 2),
(10, 15, 2),
(11, 16, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bangxephang`
--
ALTER TABLE `bangxephang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idGiaiDau` (`idGiaiDau`);

--
-- Chỉ mục cho bảng `bangxephang_caulacbo`
--
ALTER TABLE `bangxephang_caulacbo`
  ADD PRIMARY KEY (`idBangXepHang`),
  ADD KEY `idBangXepHang` (`idBangXepHang`),
  ADD KEY `idCauLacBo` (`idCauLacBo`);

--
-- Chỉ mục cho bảng `caulacbo`
--
ALTER TABLE `caulacbo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `caulacbo_giaidau`
--
ALTER TABLE `caulacbo_giaidau`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCauLacBo` (`idCauLacBo`),
  ADD KEY `idGiaiDau` (`idGiaiDau`);

--
-- Chỉ mục cho bảng `cauthu`
--
ALTER TABLE `cauthu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idNguoiDung` (`idNguoiDung`);

--
-- Chỉ mục cho bảng `chanthuong`
--
ALTER TABLE `chanthuong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chienthuat`
--
ALTER TABLE `chienthuat`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `doihinh`
--
ALTER TABLE `doihinh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giaidau`
--
ALTER TABLE `giaidau`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giaotrinhtap`
--
ALTER TABLE `giaotrinhtap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giaotrinh_luyentap_cauthu`
--
ALTER TABLE `giaotrinh_luyentap_cauthu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCauThu` (`idCauThu`),
  ADD KEY `idGiaoTrinhTap` (`idGiaoTrinhTap`),
  ADD KEY `idLichLuyenTap` (`idLichLuyenTap`);

--
-- Chỉ mục cho bảng `huanluyenvien`
--
ALTER TABLE `huanluyenvien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCauThu` (`idNguoiDung`),
  ADD KEY `idNguoiDung` (`idNguoiDung`) USING BTREE;

--
-- Chỉ mục cho bảng `kynang`
--
ALTER TABLE `kynang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kynang_cauthu`
--
ALTER TABLE `kynang_cauthu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idKyNang` (`idKyNang`),
  ADD KEY `idCauThu` (`idCauThu`);

--
-- Chỉ mục cho bảng `lichkham`
--
ALTER TABLE `lichkham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPhacDoDieuTri` (`idPhacDoDieuTri`);

--
-- Chỉ mục cho bảng `lichluyentap`
--
ALTER TABLE `lichluyentap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phacdodieutri`
--
ALTER TABLE `phacdodieutri`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phongdo`
--
ALTER TABLE `phongdo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phongdo_cauthu`
--
ALTER TABLE `phongdo_cauthu`
  ADD PRIMARY KEY (`idCauThu`),
  ADD KEY `idCauThu` (`idCauThu`),
  ADD KEY `idPhongDo` (`idPhongDo`);

--
-- Chỉ mục cho bảng `thanhtichcauthu`
--
ALTER TABLE `thanhtichcauthu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCauThu` (`idCauThu`),
  ADD KEY `idTranDau` (`idTranDau`);

--
-- Chỉ mục cho bảng `thongtinchanthuong_cauthu`
--
ALTER TABLE `thongtinchanthuong_cauthu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCauThu` (`idCauThu`),
  ADD KEY `idChanThuong` (`idChanThuong`),
  ADD KEY `idPhacDoDieuTri` (`idPhacDoDieuTri`);

--
-- Chỉ mục cho bảng `thuoc`
--
ALTER TABLE `thuoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tiso`
--
ALTER TABLE `tiso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCauLacBo` (`idCauLacBo`),
  ADD KEY `idTranDau` (`idTranDau`);

--
-- Chỉ mục cho bảng `toathuoc`
--
ALTER TABLE `toathuoc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idLichKham` (`idLichKham`);

--
-- Chỉ mục cho bảng `toathuoc_thuoc`
--
ALTER TABLE `toathuoc_thuoc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idToaThuoc` (`idToaThuoc`),
  ADD KEY `idThuoc` (`idThuoc`);

--
-- Chỉ mục cho bảng `trandau`
--
ALTER TABLE `trandau`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idDoiHinh` (`idDoiHinh`),
  ADD KEY `idChienThuat` (`idChienThuat`);

--
-- Chỉ mục cho bảng `vaitro`
--
ALTER TABLE `vaitro`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vaitro_cauthu`
--
ALTER TABLE `vaitro_cauthu`
  ADD PRIMARY KEY (`idVaiTro`),
  ADD KEY `idVaiTro` (`idVaiTro`),
  ADD KEY `idCauThu` (`idCauThu`);

--
-- Chỉ mục cho bảng `vaitro_cauthu_trandau`
--
ALTER TABLE `vaitro_cauthu_trandau`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCauThu` (`idCauThu`),
  ADD KEY `idVaiTro` (`idVaiTro`),
  ADD KEY `idTranDau` (`idTranDau`);

--
-- Chỉ mục cho bảng `vitri`
--
ALTER TABLE `vitri`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vitri_cauthu`
--
ALTER TABLE `vitri_cauthu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCauThu` (`idCauThu`),
  ADD KEY `idViTri` (`idViTri`);

--
-- Chỉ mục cho bảng `vitri_cauthu_trandau`
--
ALTER TABLE `vitri_cauthu_trandau`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCauThu` (`idCauThu`),
  ADD KEY `idViTri` (`idViTri`),
  ADD KEY `idTranDau` (`idTranDau`) USING BTREE;

--
-- Chỉ mục cho bảng `vitri_doihinh`
--
ALTER TABLE `vitri_doihinh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idViTri` (`idViTri`),
  ADD KEY `idDoiHinh` (`idDoiHinh`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bangxephang`
--
ALTER TABLE `bangxephang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `caulacbo`
--
ALTER TABLE `caulacbo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `caulacbo_giaidau`
--
ALTER TABLE `caulacbo_giaidau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `cauthu`
--
ALTER TABLE `cauthu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `chanthuong`
--
ALTER TABLE `chanthuong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `chienthuat`
--
ALTER TABLE `chienthuat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `doihinh`
--
ALTER TABLE `doihinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `giaidau`
--
ALTER TABLE `giaidau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `giaotrinhtap`
--
ALTER TABLE `giaotrinhtap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `giaotrinh_luyentap_cauthu`
--
ALTER TABLE `giaotrinh_luyentap_cauthu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `huanluyenvien`
--
ALTER TABLE `huanluyenvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `kynang`
--
ALTER TABLE `kynang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `kynang_cauthu`
--
ALTER TABLE `kynang_cauthu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `lichkham`
--
ALTER TABLE `lichkham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `lichluyentap`
--
ALTER TABLE `lichluyentap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `phacdodieutri`
--
ALTER TABLE `phacdodieutri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `phongdo`
--
ALTER TABLE `phongdo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `thanhtichcauthu`
--
ALTER TABLE `thanhtichcauthu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `thongtinchanthuong_cauthu`
--
ALTER TABLE `thongtinchanthuong_cauthu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `thuoc`
--
ALTER TABLE `thuoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tiso`
--
ALTER TABLE `tiso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `toathuoc`
--
ALTER TABLE `toathuoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `toathuoc_thuoc`
--
ALTER TABLE `toathuoc_thuoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `trandau`
--
ALTER TABLE `trandau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `vaitro`
--
ALTER TABLE `vaitro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `vaitro_cauthu_trandau`
--
ALTER TABLE `vaitro_cauthu_trandau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `vitri`
--
ALTER TABLE `vitri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `vitri_cauthu`
--
ALTER TABLE `vitri_cauthu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `vitri_cauthu_trandau`
--
ALTER TABLE `vitri_cauthu_trandau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `vitri_doihinh`
--
ALTER TABLE `vitri_doihinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bangxephang`
--
ALTER TABLE `bangxephang`
  ADD CONSTRAINT `bangxephang_ibfk_1` FOREIGN KEY (`idGiaiDau`) REFERENCES `giaidau` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `bangxephang_caulacbo`
--
ALTER TABLE `bangxephang_caulacbo`
  ADD CONSTRAINT `bangxephang_caulacbo_ibfk_1` FOREIGN KEY (`idBangXepHang`) REFERENCES `bangxephang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bangxephang_caulacbo_ibfk_2` FOREIGN KEY (`idCauLacBo`) REFERENCES `caulacbo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `caulacbo_giaidau`
--
ALTER TABLE `caulacbo_giaidau`
  ADD CONSTRAINT `caulacbo_giaidau_ibfk_1` FOREIGN KEY (`idCauLacBo`) REFERENCES `caulacbo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `caulacbo_giaidau_ibfk_2` FOREIGN KEY (`idGiaiDau`) REFERENCES `giaidau` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `cauthu`
--
ALTER TABLE `cauthu`
  ADD CONSTRAINT `cauthu_ibfk_1` FOREIGN KEY (`idNguoiDung`) REFERENCES `nguoidung` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `giaotrinh_luyentap_cauthu`
--
ALTER TABLE `giaotrinh_luyentap_cauthu`
  ADD CONSTRAINT `giaotrinh_luyentap_cauthu_ibfk_1` FOREIGN KEY (`idCauThu`) REFERENCES `cauthu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `giaotrinh_luyentap_cauthu_ibfk_2` FOREIGN KEY (`idGiaoTrinhTap`) REFERENCES `giaotrinhtap` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `giaotrinh_luyentap_cauthu_ibfk_3` FOREIGN KEY (`idLichLuyenTap`) REFERENCES `lichluyentap` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `huanluyenvien`
--
ALTER TABLE `huanluyenvien`
  ADD CONSTRAINT `huanluyenvien_ibfk_1` FOREIGN KEY (`idNguoiDung`) REFERENCES `nguoidung` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `kynang_cauthu`
--
ALTER TABLE `kynang_cauthu`
  ADD CONSTRAINT `kynang_cauthu_ibfk_1` FOREIGN KEY (`idCauThu`) REFERENCES `cauthu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kynang_cauthu_ibfk_2` FOREIGN KEY (`idKyNang`) REFERENCES `kynang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `lichkham`
--
ALTER TABLE `lichkham`
  ADD CONSTRAINT `lichkham_ibfk_1` FOREIGN KEY (`idPhacDoDieuTri`) REFERENCES `phacdodieutri` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phongdo_cauthu`
--
ALTER TABLE `phongdo_cauthu`
  ADD CONSTRAINT `phongdo_cauthu_ibfk_1` FOREIGN KEY (`idCauThu`) REFERENCES `cauthu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phongdo_cauthu_ibfk_2` FOREIGN KEY (`idPhongDo`) REFERENCES `phongdo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `thanhtichcauthu`
--
ALTER TABLE `thanhtichcauthu`
  ADD CONSTRAINT `thanhtichcauthu_ibfk_1` FOREIGN KEY (`idCauThu`) REFERENCES `cauthu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `thanhtichcauthu_ibfk_2` FOREIGN KEY (`idTranDau`) REFERENCES `trandau` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `thongtinchanthuong_cauthu`
--
ALTER TABLE `thongtinchanthuong_cauthu`
  ADD CONSTRAINT `thongtinchanthuong_cauthu_ibfk_1` FOREIGN KEY (`idCauThu`) REFERENCES `cauthu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `thongtinchanthuong_cauthu_ibfk_2` FOREIGN KEY (`idChanThuong`) REFERENCES `chanthuong` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `thongtinchanthuong_cauthu_ibfk_3` FOREIGN KEY (`idPhacDoDieuTri`) REFERENCES `phacdodieutri` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tiso`
--
ALTER TABLE `tiso`
  ADD CONSTRAINT `tiso_ibfk_1` FOREIGN KEY (`idCauLacBo`) REFERENCES `caulacbo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tiso_ibfk_2` FOREIGN KEY (`idTranDau`) REFERENCES `trandau` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `toathuoc`
--
ALTER TABLE `toathuoc`
  ADD CONSTRAINT `toathuoc_ibfk_1` FOREIGN KEY (`idLichKham`) REFERENCES `lichkham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `toathuoc_thuoc`
--
ALTER TABLE `toathuoc_thuoc`
  ADD CONSTRAINT `toathuoc_thuoc_ibfk_1` FOREIGN KEY (`idThuoc`) REFERENCES `thuoc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `toathuoc_thuoc_ibfk_2` FOREIGN KEY (`idToaThuoc`) REFERENCES `toathuoc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `trandau`
--
ALTER TABLE `trandau`
  ADD CONSTRAINT `trandau_ibfk_1` FOREIGN KEY (`idChienThuat`) REFERENCES `chienthuat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trandau_ibfk_2` FOREIGN KEY (`idDoiHinh`) REFERENCES `doihinh` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `vaitro_cauthu`
--
ALTER TABLE `vaitro_cauthu`
  ADD CONSTRAINT `vaitro_cauthu_ibfk_1` FOREIGN KEY (`idCauThu`) REFERENCES `cauthu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vaitro_cauthu_ibfk_2` FOREIGN KEY (`idVaiTro`) REFERENCES `vaitro` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `vaitro_cauthu_trandau`
--
ALTER TABLE `vaitro_cauthu_trandau`
  ADD CONSTRAINT `vaitro_cauthu_trandau_ibfk_1` FOREIGN KEY (`idCauThu`) REFERENCES `cauthu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vaitro_cauthu_trandau_ibfk_2` FOREIGN KEY (`idTranDau`) REFERENCES `trandau` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vaitro_cauthu_trandau_ibfk_3` FOREIGN KEY (`idVaiTro`) REFERENCES `vaitro` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `vitri_cauthu`
--
ALTER TABLE `vitri_cauthu`
  ADD CONSTRAINT `vitri_cauthu_ibfk_1` FOREIGN KEY (`idCauThu`) REFERENCES `cauthu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vitri_cauthu_ibfk_2` FOREIGN KEY (`idViTri`) REFERENCES `vitri` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `vitri_cauthu_trandau`
--
ALTER TABLE `vitri_cauthu_trandau`
  ADD CONSTRAINT `vitri_cauthu_trandau_ibfk_1` FOREIGN KEY (`idCauThu`) REFERENCES `cauthu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vitri_cauthu_trandau_ibfk_2` FOREIGN KEY (`idTranDau`) REFERENCES `trandau` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vitri_cauthu_trandau_ibfk_3` FOREIGN KEY (`idViTri`) REFERENCES `vitri` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `vitri_doihinh`
--
ALTER TABLE `vitri_doihinh`
  ADD CONSTRAINT `vitri_doihinh_ibfk_1` FOREIGN KEY (`idDoiHinh`) REFERENCES `doihinh` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vitri_doihinh_ibfk_2` FOREIGN KEY (`idViTri`) REFERENCES `vitri` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
