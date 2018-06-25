-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 24, 2018 lúc 08:10 PM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.2.1

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
-- Cấu trúc bảng cho bảng `bangxephangclb`
--

CREATE TABLE `bangxephangclb` (
  `id` int(11) NOT NULL,
  `idCauLacBo` int(11) NOT NULL,
  `Diem` int(5) NOT NULL,
  `HangCauLacBo` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bangxephangclb`
--

INSERT INTO `bangxephangclb` (`id`, `idCauLacBo`, `Diem`, `HangCauLacBo`) VALUES
(1, 1, 1675, 2),
(2, 4, 1600, 3),
(5, 2, 2100, 7),
(8, 3, 1150, 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangxephangclbgiaidau`
--

CREATE TABLE `bangxephangclbgiaidau` (
  `id` int(11) NOT NULL,
  `SoTran` int(3) DEFAULT NULL,
  `SoTranThang` int(3) DEFAULT NULL,
  `SoTranHoa` int(3) DEFAULT NULL,
  `SoTranThua` int(3) DEFAULT NULL,
  `BanThang` int(3) DEFAULT NULL,
  `BanThua` int(3) DEFAULT NULL,
  `HieuSo` int(3) DEFAULT NULL,
  `Diem` int(3) DEFAULT NULL,
  `idGiaiDau` int(11) NOT NULL,
  `idCauLacBo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bangxephangclbgiaidau`
--

INSERT INTO `bangxephangclbgiaidau` (`id`, `SoTran`, `SoTranThang`, `SoTranHoa`, `SoTranThua`, `BanThang`, `BanThua`, `HieuSo`, `Diem`, `idGiaiDau`, `idCauLacBo`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(2, 2, 1, 1, 0, 4, 2, 2, 4, 1, 2),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3),
(4, 2, 0, 1, 1, 2, 4, -2, 1, 1, 4);

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
  `LichSu` longtext COLLATE utf8_unicode_ci,
  `HinhAnhCauLacBo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnhCauLacBo_lon` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `caulacbo`
--

INSERT INTO `caulacbo` (`id`, `TenDayDu`, `TenVietTat`, `TruSo`, `NgayThanhLap`, `BietDanh`, `SanVanDong`, `LichSu`, `HinhAnhCauLacBo`, `HinhAnhCauLacBo_lon`) VALUES
(1, 'Arsenal', 'Ars', 'Holloway, London', '1886-12-01', 'The Gunners', 'Emirates', '<p>Lịch sử Arsenal</p>', '1529841285Arsenal.png', '1529841285Arsenal_big.png'),
(2, 'Liverpool', 'Liv', 'Liverpool, Merseyside', '1892-06-03', 'The Kop', 'Anfield', '<p>Lịch sử Liverpool</p>', '1529841436Liverpool.png', '1529841436Liverpool_big.png'),
(3, 'Manchester Utd', 'MU', 'Old Trafford, Greater Machester, Anh', '1878-01-01', 'The Red Devils', 'Old Trafford', '<p>Lịch sử Manchester United</p>', 'MU.png', 'MU_big.png'),
(4, 'Manchester City', 'MC', 'Manchester, Anh', '1880-01-01', 'The Citizens', 'Etihad', '<p>Lịch sử Manchester City</p>', 'ManCity.png', 'ManCity_big.png');

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
(12, NULL, NULL, 'Tiền đạo', 56, NULL, NULL, 13),
(13, NULL, NULL, 'Tiền đạo', 26, NULL, NULL, 14);

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
  `HinhAnhDoiHinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SoTranThang` int(11) DEFAULT NULL,
  `SoTranThua` int(11) DEFAULT NULL,
  `SoTranHoa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `doihinh`
--

INSERT INTO `doihinh` (`id`, `TenDoiHinh`, `HinhAnhDoiHinh`, `SoTranThang`, `SoTranThua`, `SoTranHoa`) VALUES
(1, '4-4-2 Cổ Điển', '4-4-2 Cổ Điển.png', 51, 5, 14),
(2, '4-3-3', '4-3-3.png', 40, 1, 1),
(3, '5-3-2', '5-3-2.png', 5, 1, 0),
(4, '4-2-3-1', '4-2-3-1.png', 0, 5, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaidau`
--

CREATE TABLE `giaidau` (
  `id` int(11) NOT NULL,
  `TenGiaiDau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NamBatDauMuaGiai` date DEFAULT NULL,
  `NamKetThucMuaGiai` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giaidau`
--

INSERT INTO `giaidau` (`id`, `TenGiaiDau`, `NamBatDauMuaGiai`, `NamKetThucMuaGiai`) VALUES
(1, 'Premier league', '2017-09-05', '2018-05-10'),
(4, 'Premier league', '2016-09-14', '2017-05-27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaotrinhtap`
--

CREATE TABLE `giaotrinhtap` (
  `id` int(11) NOT NULL,
  `TenBaiTap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDungBaiTap` text COLLATE utf8_unicode_ci,
  `ThoiLuongTapToiDa` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giaotrinhtap`
--

INSERT INTO `giaotrinhtap` (`id`, `TenBaiTap`, `NoiDungBaiTap`, `ThoiLuongTapToiDa`) VALUES
(2, 'Tập thể lực ( Nhảy cóc)', '<p>&ndash; Ng&agrave;y 1 &ndash; 2, nhảy 10 c&aacute;i mỗi ng&agrave;y.</p>\r\n\r\n<p>&ndash; Ng&agrave;y 3 &ndash; 4, nhảy 20 c&aacute;i mỗi ng&agrave;y. C&oacute; thể chia ra mỗi lần nhảy 10 c&aacute;i, giữa 2 lần c&aacute;ch nhau 1 ph&uacute;t.</p>\r\n\r\n<p>&ndash; Ng&agrave;y 5 &ndash; 6, nhảy 30 c&aacute;i mỗi ng&agrave;y. C&oacute; thể chia ra mỗi lần nhảy 15 c&aacute;i, giữa 2 lần c&aacute;ch nhau 1 ph&uacute;t.</p>\r\n\r\n<p>&ndash; Cứ thế tiếp tục đến hết một th&aacute;ng (Nhiều hơn sau đ&oacute; c&agrave;ng tốt).</p>\r\n\r\n<p>* Lưu &yacute;: Chỉ bật nhảy bằng ch&acirc;n tr&ecirc;n nền s&acirc;n b&igrave;nh thường, kh&ocirc;ng được bật cầu thang.</p>', 30),
(3, 'Tập thể lực ( Nhảy dây)', '<p>&ndash; Ng&agrave;y thứ 1 &ndash; 2, nhảy d&acirc;y 100 c&aacute;i mỗi ng&agrave;y.</p>\r\n\r\n<p>&ndash; Ng&agrave;y thứ 3 &ndash; 4, nhảy d&acirc;y 200 c&aacute;i mỗi ng&agrave;y. C&oacute; thể chia ra mỗi lần 100 c&aacute;i, giữa 2 lần c&aacute;ch nhau 1 ph&uacute;t.</p>\r\n\r\n<p>&ndash; Ng&agrave;y thứ 5 &ndash; 6, nhảy d&acirc;y 300 c&aacute;i mỗi ng&agrave;y. C&oacute; thể chia ra mỗi lần 150 c&aacute;i, giữa 2 lần c&aacute;ch nhau 1 ph&uacute;t.</p>\r\n\r\n<p>&ndash; Cứ thế tiếp tục đến hết một th&aacute;ng (Nhiều hơn sau đ&oacute; c&agrave;ng tốt).</p>', 30),
(4, 'Tập thể lực ( Hít đất)', '<p>&ndash; Ng&agrave;y thứ 1 &ndash; 2, h&iacute;t đất 10 c&aacute;i mỗi ng&agrave;y. H&iacute;t xong c&ograve;n khỏe vẫn kh&ocirc;ng được h&iacute;t nữa.</p>\r\n\r\n<p>&ndash; Ng&agrave;y thứ 3 &ndash; 4, l&ecirc;n 20 c&aacute;i mỗi ng&agrave;y. Nếu chưa h&iacute;t li&ecirc;n tục được 20 c&aacute;i th&igrave; c&oacute; thể chia ra mỗi lần 10 c&aacute;i, giữa 2 lần c&aacute;ch nhau 1 ph&uacute;t.</p>\r\n\r\n<p>&ndash; Ng&agrave;y thứ 5 &ndash; 6, l&ecirc;n 30 c&aacute;i mỗi ng&agrave;y. Nếu chưa h&iacute;t li&ecirc;n tục được 30 c&aacute;i th&igrave; c&oacute; thể chia ra mỗi lần 15 c&aacute;i, giữa 2 lần c&aacute;ch nhau 1 ph&uacute;t.</p>\r\n\r\n<p>&ndash; Cứ thế tiếp tục đến hết một th&aacute;ng (Nhiều hơn sau đ&oacute; c&agrave;ng tốt).</p>', 30),
(8, 'Tập thể lực ( Chạy bộ)', '<p>&ndash; Ng&agrave;y 1 &ndash; 2, chạy 1 km mỗi ng&agrave;y.</p>\r\n\r\n<p>&ndash; Ng&agrave;y 3 &ndash; 4, chạy 2 km mỗi ng&agrave;y. C&oacute; thể chạy 1 km rồi đi bộ hồi sức, hoặc nghỉ 5 ph&uacute;t rồi chạy tiếp.</p>\r\n\r\n<p>&ndash; Ng&agrave;y 5 &ndash; 6, chạy 3 km mỗi ng&agrave;y. C&oacute; thể chạy 1.5 km rồi đi bộ hồi sức, hoặc nghỉ 5 ph&uacute;t rồi chạy tiếp.</p>\r\n\r\n<p>&ndash; Cứ thế tiếp tục đến hết một th&aacute;ng (Nhiều hơn sau đ&oacute; c&agrave;ng tốt).</p>', 30),
(10, 'Tập thể lực ( Gập bụng)', '<p>&ndash; Ng&agrave;y 1 &ndash; 2, gập 10 c&aacute;i mỗi ng&agrave;y.</p>\r\n\r\n<p>&ndash; Ng&agrave;y 3 &ndash; 4, gập 20 c&aacute;i mỗi ng&agrave;y. C&oacute; thể chia ra mỗi lần gập 10 c&aacute;i, giữa 2 lần c&aacute;ch nhau 1 ph&uacute;t.</p>\r\n\r\n<p>&ndash; Ng&agrave;y 5 &ndash; 6, gập 30 c&aacute;i mỗi ng&agrave;y. C&oacute; thể chia ra mỗi lần gập 15 c&aacute;i, giữa 2 lần c&aacute;ch nhau 1 ph&uacute;t.</p>\r\n\r\n<p>&ndash; Cứ thế tiếp tục đến hết một th&aacute;ng (Nhiều hơn sau đ&oacute; c&agrave;ng tốt).</p>\r\n\r\n<p>* Lưu &yacute;: Đừng thấy gập những c&aacute;i đầu dễ d&agrave;ng m&agrave; gập vượt khung, đ&atilde; c&oacute; trường hợp đau bụng, tổn thương cơ.</p>', 30),
(11, 'Tập thể lực ( Bức tốc)', '<p>&ndash; Ng&agrave;y 1 &ndash; 2, bứt tốc 10 lượt mỗi ng&agrave;y. C&oacute; thể chia ra mỗi lần 5 lượt, giữa 2 lần c&aacute;ch nhau 3-5 ph&uacute;t.</p>\r\n\r\n<p>&ndash; Ng&agrave;y 3 &ndash; 4, bứt tốc 20 lượt mỗi ng&agrave;y. C&oacute; thể chia ra mỗi lần 10 lượt, giữa 2 lần c&aacute;ch nhau 3-5 ph&uacute;t.</p>\r\n\r\n<p>&ndash; Ng&agrave;y 5 &ndash; 6, bứt tốc 30 lượt mỗi ng&agrave;y. C&oacute; thể chia ra mỗi lần 15 lượt, giữa 2 lần c&aacute;ch nhau 3-5 ph&uacute;t.</p>\r\n\r\n<p>&ndash; Cứ thế tiếp tục đến hết một th&aacute;ng (Nhiều hơn sau đ&oacute; c&agrave;ng tốt).</p>', 30),
(12, 'Tập khởi động', '<p>&ndash; Kỹ thuật căng cơ ( K&eacute;o gi&atilde;n cơ thể để tăng tầm vận động c&aacute;c khớp).<br />\r\n&ndash; Kỹ thuật khởi động kh&ocirc;ng b&oacute;ng ( Chạy bộ chậm, thả lỏng to&agrave;n th&acirc;n để tăng tuần ho&agrave;n m&aacute;u v&agrave; oxy đến cơ bắp).<br />\r\n&ndash; Kỹ thuật khởi động c&oacute; b&oacute;ng</p>', 15),
(13, 'Tập kỹ thuật ( Tâng bóng)', '<p>Khi t&acirc;ng b&oacute;ng thực hiện xen kẽ giữa t&acirc;ng b&oacute;ng cao v&agrave; thấp hoặc li&ecirc;n tục t&acirc;ng b&oacute;ng thấp kh&ocirc;ng vượt qu&aacute; đầu gối.</p>\r\n\r\n<p>T&acirc;ng b&oacute;ng li&ecirc;n tục bằng nhiều bộ phận của cơ thể như ch&iacute;nh diện mu b&agrave;n ch&acirc;n, m&aacute; trong, m&aacute; ngo&agrave;i b&agrave;n ch&acirc;n, đầu, đ&ugrave;i&hellip;</p>\r\n\r\n<p>T&acirc;ng b&oacute;ng phối hợp với c&aacute;c bước di chuyển hoặc chạy dọc theo những đường thẳng v&agrave; đường gấp kh&uacute;c.</p>\r\n\r\n<ol>\r\n	<li>T&acirc;ng b&oacute;ng bằng mu b&agrave;n ch&acirc;n:</li>\r\n</ol>\r\n\r\n<p>Bước 1: Hai ch&acirc;n thả lỏng</p>\r\n\r\n<p>Bước 2: 2 mu b&agrave;n ch&acirc;n chạm b&oacute;ng lần lượt, mu của ch&acirc;n đ&aacute; b&oacute;ng t&aacute;c dụng 1 lực vừa phải</p>\r\n\r\n<p>Ch&uacute; &yacute;: với b&agrave;i tập n&agrave;y, người chơi ch&uacute; &yacute; lưng v&agrave; h&ocirc;ng giữ thẳng, chỉ di chuyển 2 ch&acirc;n l&ecirc;n xuống để đ&aacute; b&oacute;ng, trọng t&acirc;m cơ thể đặt ở h&ocirc;ng.</p>\r\n\r\n<ol start=\"2\">\r\n	<li>T&acirc;ng b&oacute;ng bằng đ&ugrave;i:</li>\r\n</ol>\r\n\r\n<p>Bước 1: Người đứng thẳng v&agrave; thả lỏng</p>\r\n\r\n<p>Bước 2: đ&ugrave;i nhấc cao, vu&ocirc;ng g&oacute;c 90 độ với phần th&acirc;n tr&ecirc;n (giống như b&agrave;i tập n&acirc;ng cao đ&ugrave;i). Chạm b&oacute;ng lần lượt đ&ugrave;i tr&aacute;i v&agrave; phải để t&acirc;ng b&oacute;ng</p>\r\n\r\n<p>Ch&uacute; &yacute;: b&agrave;i tập n&agrave;y cũng c&oacute; những ch&uacute; &yacute; tương tự như b&agrave;i tập t&acirc;ng bắng bằng mu b&agrave;n ch&acirc;n, lung v&agrave; h&ocirc;ng giữ thẳng, n&acirc;ng đ&ugrave;i cao l&ecirc;n vừa tầm v&agrave; t&aacute;c dụng lực vừa đủ để kiểm so&aacute;t b&oacute;ng, trọng t&acirc;m đặt ở h&ocirc;ng. Nhưng b&agrave;i tập n&agrave;y lại hao sức lực v&agrave; dễ mất thăng bằng hơn b&agrave;i tập trước n&ecirc;n cần người chơi cố gắng ki&ecirc;n tr&igrave;.</p>', 30),
(14, 'Tập kỹ thuật ( Di chuyển)', '<h2><span style=\"font-size:16px\">1. Kỹ thuật chạy trong b&oacute;ng đ&aacute;</span></h2>\r\n\r\n<p><span style=\"font-size:16px\">Kỹ thuật chạy gồm: Chạy thường, gi&acirc;̣t lùi, chạy theo ziczac,&hellip;.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Khi chạy trọng t&acirc;m c&aacute;c cầu thủ b&oacute;ng đ&aacute; thường thấp, bước chạy ngằn, tay đ&aacute;nh rộng sang ngang nhiều hơn so với VĐV điền kinh.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Đ&ocirc;̣ng tác chạy gi&acirc;̣t lùi, chạy lùi kh&ocirc;ng c&acirc;̀n nh&acirc;́t thi&ecirc;́t phải t&ocirc;́c đ&ocirc;̣ nhanh hỏi phải c&oacute; sự phối hợp thoải m&aacute;i kh&ocirc;ng g&ograve; b&oacute;.</span></p>\r\n\r\n<h3><span style=\"font-size:16px\">2. Kỹ thuật dừng đột ngột</span></h3>\r\n\r\n<p><span style=\"font-size:16px\">Đ&ograve;i hỏi cầu thủ phải dùng lực bàn ch&acirc;n đ&ecirc;̉ bám sát mặt đ&acirc;́t hạ th&acirc;́p trọng t&acirc;m cơ th&ecirc;̉ đ&ecirc;̉ quay ngược với hướng đang di chuyển một độ nghi&ecirc;ng nhất định.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">B&agrave;n ch&acirc;n dung lực đạp đất, cơ thể hạ thấp để giảm qu&aacute;n t&iacute;nh v&agrave; lực x&ocirc;ng về ph&iacute;a trước.</span></p>\r\n\r\n<h3><span style=\"font-size:16px\">3.&nbsp;Kỹ thu&acirc;̣t thay đ&ocirc;̉i th&acirc;n hình</span></h3>\r\n\r\n<p><span style=\"font-size:16px\">Trong thi đấu b&oacute;ng đ&aacute; lu&ocirc;n c&oacute; sự thay đổi giữa tấn c&ocirc;ng v&agrave; ph&ograve;ng thủ, giữa vị tr&iacute; của c&aacute;c cầu thủ do v&acirc;̣y đòi hỏi các bé c&acirc;̀n phải chuyển th&acirc;n nhanh, bất ngờ ở mỗi tỉnh huống cụ thể đ&ograve;i hỏi.</span></p>\r\n\r\n<h3><span style=\"font-size:16px\">4. Kỹ thuật bật nhảy trong b&oacute;ng đ&aacute;</span></h3>\r\n\r\n<p><span style=\"font-size:16px\">B&acirc;̣t &nbsp;nhảy đ&ecirc;̉ thực hi&ecirc;̣n các đ&ocirc;̣ng tác tranh bóng tr&ecirc;n kh&ocirc;ng. Sức b&acirc;̣t, khả năng chọn đà và lực dậm nhảy, năng lực ph&aacute;n đo&aacute;n điểm rơi, thời gian dậm nhảy&hellip;quyết định kết quả của động t&aacute;c tranh b&oacute;ng.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Kỹ năng b&acirc;̣t nhảy chia làm 2 loại là d&acirc;̣m nhảy 1 ch&acirc;n và d&acirc;̣m nhảy 2 ch&acirc;n.</span></p>\r\n\r\n<h3><span style=\"font-size:16px\">5. Kỹ thuật đi bộ trong b&oacute;ng đ&aacute;</span></h3>\r\n\r\n<p><span style=\"font-size:16px\">Trong thi đấu b&oacute;ng đ&aacute; đi bộ chủ yếu được sử dụng để tranh thủ nghỉ, h&ocirc;̀i phục sức lực.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Khi đi b&ocirc;̣, các em có th&ecirc;̉ quan sát, từ đó chọn vị&nbsp;tr&iacute; ph&ugrave; hợp v&agrave; lập tức tham gia v&agrave;o c&aacute;c t&igrave;nh huống.</span></p>', 120),
(15, 'Tập kỹ thuật ( Đá bóng bằng lòng bàn chân)', '<p><span style=\"font-size:14px\"><strong>Đ&aacute; b&oacute;ng nằm tại chỗ ( chia l&agrave;m 5 bước):</strong></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:14px\">Chạy đ&agrave; thẳng với hướng b&oacute;ng.</span></li>\r\n	<li><span style=\"font-size:14px\">Đặt ch&acirc;n trụ</span></li>\r\n	<li><span style=\"font-size:14px\">Vung ch&acirc;n lăng</span></li>\r\n	<li><span style=\"font-size:14px\">Tiếp x&uacute;c b&oacute;ng.</span></li>\r\n	<li><span style=\"font-size:14px\">Kết th&uacute;c.</span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Đ&aacute; b&oacute;ng lăn sệt</strong></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:14px\">Đ&aacute; b&oacute;ng lăn từ ph&iacute;a trước tới: trước hết cần ph&aacute;n đo&aacute;n thời điểm vung ch&acirc;n v&agrave; vị tr&iacute; b&oacute;ng lăn tới để tiếp x&uacute;c b&oacute;ng được ch&iacute;nh x&aacute;c.</span></li>\r\n	<li><span style=\"font-size:14px\">Đ&aacute; b&oacute;ng đang lăn về trước: ch&acirc;n trụ n&ecirc;n đặt trước về ph&iacute;a trước quả b&oacute;ng.</span></li>\r\n	<li><span style=\"font-size:14px\">Trường hợp b&oacute;ng lăn từ c&aacute;c b&ecirc;n tới về ph&iacute;a ch&acirc;n trụ th&igrave; n&ecirc;n đặt ch&acirc;n trụ hơi xa về ph&iacute;a b&ecirc;n của b&oacute;ng.</span><img alt=\"Hướng dẫn kỹ thuật đá bóng bằng lòng bàn chân - 1\" src=\"https://sites.google.com/site/caulacbohvbp/_/rsrc/1346755618529/home/huan-luyen-dhao-tao/huan-luyen-thu-mon/bai-3-ky-thuat-da-bong-bang-long-ban-chan/2.png\" /></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Đ&aacute; b&oacute;ng nửa nảy</strong></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:14px\">Phải đ&aacute; b&oacute;ng ngay những quả b&oacute;ng từ tr&ecirc;n cao rơi xuống vừa nảy từ đất l&ecirc;n m&agrave; kh&ocirc;ng l&agrave;m độ ngt&aacute;c giữ b&oacute;ng.</span></li>\r\n	<li><span style=\"font-size:14px\">Trước hết phải ph&aacute;n đo&aacute;n tốc độ bay v&agrave; điểm rơi của b&oacute;ng, từ đ&oacute; nhanh ch&oacute;ng di chuyển chọn vịtr&iacute; cho việc đặt ch&acirc;n trụ</span></li>\r\n</ul>\r\n\r\n<h3><span style=\"font-size:14px\"><strong>Tập luyện s&uacute;t b&oacute;ng</strong></span></h3>\r\n\r\n<p><span style=\"font-size:14px\">Khi bạn muốn tập kỹ thuật s&uacute;t b&oacute;ng n&agrave;y th&igrave; bạn c&oacute; thể m&ocirc; phỏng kh&ocirc;ng b&oacute;ng, tại chỗ thực hiện động t&aacute;c đ&aacute;nh lăng, xoay bẻ b&agrave;n ch&acirc;n ra ngo&agrave;i.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">+ Vẽ đường chạy đ&agrave; v&agrave; điểm đặt b&oacute;ng, ch&acirc;n trụ rồi thực hiện kỹ thuật chạy đ&agrave;, đặt ch&acirc;n trụ, vung ch&acirc;n lăng.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">+ Đặt b&oacute;ng chết: D&ugrave;ng gầm b&agrave;n ch&acirc;n đ&egrave; l&ecirc;n ph&iacute;a trước của b&oacute;ng, người kia tập chạy đ&agrave; r&ugrave;i đặt ch&acirc;n trụ rồi tiếp x&uacute;c b&oacute;ng.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Hướng dẫn kỹ thuật đá bóng bằng lòng bàn chân - 2\" src=\"https://sites.google.com/site/caulacbohvbp/_/rsrc/1346755918161/home/huan-luyen-dhao-tao/huan-luyen-thu-mon/bai-3-ky-thuat-da-bong-bang-long-ban-chan/3.png\" /></p>\r\n\r\n<p><span style=\"font-size:14px\">+ Đặt b&oacute;ng chết: Đ&aacute; v&agrave;o c&aacute;c điểm cố định tr&ecirc;n tường v&agrave; tập từ chậm đến nhanh, từ nhẹ, gần sautăng dần cự ly v&agrave; lực đ&aacute;.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">+ Tập hai người hoặc với nhiều người sẽ kết hợp di chuyển v&agrave; đ&aacute; c&aacute;c loại b&oacute;ng đang lăn sệt.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">+ Tập s&uacute;t cầu m&ocirc;n với b&oacute;ng chết v&agrave; c&aacute;c loại b&oacute;ng đang lăn sệt.</span></p>', 30),
(16, 'Tập kỹ thuật ( Đá bóng bằng mu bàn chân)', '<h3><span style=\"font-size:14px\"><strong>Đ</strong><strong>&aacute; b&oacute;ng nằm tại chỗ</strong></span></h3>\r\n\r\n<p><span style=\"font-size:14px\">Do đặc điểm khi tiếp x&uacute;c giữa b&agrave;n ch&acirc;n (bằng mu trong) v&agrave; b&oacute;ng n&ecirc;n c&aacute;ch chạy đ&agrave; của kiểu đ&aacute; n&agrave;y phải chếch với hướng đ&aacute; b&oacute;ng đi khoảng 450.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Khi chạy tốc độ phải tăng dần, độ d&agrave;i bước chạy ngắn, tần số cao để dễ điều chỉnh ở bước cuối c&ugrave;ng trước khi đặt ch&acirc;n trụ.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Động t&aacute;c lăng ch&acirc;n về trước bắt đầu bằng việc lấy khớp h&ocirc;ng l&agrave;m trụ, d&ugrave;ng đ&ugrave;i vung cẳng ch&acirc;n từ sau ra trước.</span></p>\r\n\r\n<h3><span style=\"font-size:14px\"><strong>Đ&aacute; b&oacute;ng nằm tại chỗ</strong></span></h3>\r\n\r\n<p><span style=\"font-size:14px\"><strong><img alt=\"\" src=\"http://sanchoi.com.vn/Content/images/luyen-tap-bong-da/2014/11/mu-ban-chan-1_1.png\" /></strong></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\">Tiếp x&uacute;c với b&oacute;ng l&agrave; cạnh trong b&agrave;n ch&acirc;n, t&iacute;nh từ ng&oacute;n ch&acirc;n c&aacute;i tới ph&iacute;a trong mắt c&aacute; ch&acirc;n<br />\r\nSau khi b&oacute;ng rời ch&acirc;n th&igrave; tiếp tục lăng ch&acirc;n về ph&iacute;a trước, theo qu&aacute;n t&iacute;nh bước về trước 1 v&agrave;i bước để giảm tốc độ của cơ thể v&agrave; 2 tay dang rộng tự nhi&ecirc;n để giữ thăng bằng v&agrave; trở lại hoạt động b&igrave;nh thường.</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Đ&aacute; b&oacute;ng lăn sệt</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Căn cứ v&agrave;o hướng b&oacute;ng lăn, ph&aacute;n đo&aacute;n tốc độ rồi nhanh ch&oacute;ng chọn vị tr&iacute; th&iacute;ch hợp, đảm bảo đ&uacute;ng điểm đặt ch&acirc;n trụ, v&agrave; thời điểm tiếp x&uacute;c b&oacute;ng để đ&aacute; b&oacute;ng đi theo đ&uacute;ng hướng dự định.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Khi đ&aacute; c&aacute;c loại b&oacute;ng đang lăn sệt th&igrave; mũi b&agrave;n ch&acirc;n trụ lu&ocirc;n phải thẳng hướng với hướng đ&aacute; b&oacute;ng đi, đầu gối hơi khụyu thấp, th&acirc;n người nghi&ecirc;ng về trước một b&ecirc;n với b&oacute;ng.</span></p>', 30),
(17, 'Tập kỹ thuật ( Đỡ bóng)', '<p><span style=\"font-size:14px\"><strong>Khống chế b&oacute;ng sệt</strong>&nbsp;t&ugrave;y theo thối quen v&agrave; bối cảnh lực thi đấu&nbsp;cầu thủ thường d&ugrave;ng l&ograve;ng b&agrave;n ch&acirc;n, m&aacute; ngo&agrave;i hoặc gầm gi&agrave;y (sử dụng nhiều trong Futsal) để thực hiện khống chế b&oacute;ng.</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Kỹ thuật khống chế b&oacute;ng</strong>&nbsp;bằng l&ograve;ng trong v&agrave; l&ograve;ng ngo&agrave;i ch&acirc;n kh&aacute; tương tự nhau d&ugrave;ng ch&acirc;n tiếp x&uacute;c b&oacute;ng ch&acirc;n hơi thả lỏng khi b&oacute;ng tới k&eacute;o nhẹ ch&acirc;n về tạo lực h&atilde;m gi&uacute;p b&oacute;ng nảy ra theo &yacute; muốn. C&ograve;n động t&aacute;c kh&ocirc;ng chế b&oacute;ng bằng gầm c&oacute; sự kh&aacute;c biệt l&agrave; lợi dụng lục ma s&aacute;t giữa gầm gi&agrave;y v&agrave; mặt s&acirc;n để h&atilde;m lực b&oacute;ng theo &yacute; muốn.</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Khống chế b&oacute;ng bổng</strong>&nbsp;thường được sử dụng khi bắt c&aacute;c đường chuyền d&agrave;i vượt tuyến từ đồng đội hoặc khi b&oacute;ng rơi tự do. T&ugrave;y theo tầm b&oacute;ng m&agrave;&nbsp;cầu thủ c&oacute; thể sử dụng mu b&agrave;n ch&acirc;n, m&aacute; trong, m&aacute; ngo&agrave;i, đ&ugrave;i hoặc ngực để khống chế b&oacute;ng.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Sử dụng m&aacute; trong, m&aacute; ngo&agrave;i v&agrave; mu b&agrave;n ch&acirc;n: trước ti&ecirc;n bạn cần x&aacute;c định điểm rơi của b&oacute;ng khi b&oacute;ng tới d&ugrave;ng ch&acirc;n chặn b&oacute;ng hơi r&uacute;t ch&acirc;n để tạo lực h&atilde;m. Đối với d&ugrave;i v&agrave; ngực cũng tưng tự chỉ kh&aacute;c phần tiếp x&uacute;c với b&oacute;ng th&ocirc;i.</span></p>', 60),
(18, 'Tập kỹ thuật ( Dẫn bóng)', '<p><span style=\"font-size:14px\">&ndash; Dẫn b&oacute;ng bằng l&ograve;ng b&agrave;n ch&acirc;n<br />\r\n&ndash; Dẫn b&oacute;ng bằng mu giữa b&agrave;n ch&acirc;n<br />\r\n&ndash; Dẫn b&oacute;ng bằng mu ngo&agrave;i b&agrave;n ch&acirc;n</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Cầu thủ thực hiện, HLV bấm giờ. B&agrave;i tập được thực hiện như sau:</strong></p>\r\n\r\n<p>&ndash; Cầu thủ dẫn b&oacute;ng tốc độ 20 m&eacute;t từ chấm giữa s&acirc;n đến vị tr&iacute; cọc.</p>\r\n\r\n<p>&ndash; Sau đ&oacute; dẫn b&oacute;ng d&iacute;c dắc qua 5 cọc.</p>\r\n\r\n<p>&ndash; Kết th&uacute;c 5 cọc th&igrave; thực hiện s&uacute;t b&oacute;ng v&agrave;o cầu m&ocirc;n.</p>\r\n\r\n<p><strong>Ch&uacute; &yacute;:</strong></p>\r\n\r\n<p>&ndash; Thời gian thực hiện b&agrave;i tập khoảng 11 &ndash; 12 gi&acirc;y l&agrave; đạt.</p>\r\n\r\n<p>&ndash; Thời gian b&agrave;i tập được t&iacute;nh từ l&uacute;c cầu thủ chạm b&oacute;ng ở giữa s&acirc;n cho tới khi s&uacute;t b&oacute;ng. HLV dừng thời gian tại thời điểm cầu thủ s&uacute;t b&oacute;ng rời ch&acirc;n.</p>\r\n\r\n<p><span style=\"font-size:14px\"><strong><em>Giữ b&oacute;ng lăn sệt bằng l&ograve;ng b&agrave;n ch&acirc;n</em></strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Mũi ch&acirc;n trụ đối diện với hướng b&oacute;ng đến, đầu gối hơi khuỵu, một b&ecirc;n vai hướng về ph&iacute;a b&oacute;ng đến; Ch&acirc;n giữ b&oacute;ng, mở mũi ch&acirc;n ra ngo&agrave;i, gan b&agrave;n ch&acirc;n nằm song song với mặt đất, l&ograve;ng b&agrave;n ch&acirc;n hướng về ph&iacute;a trước.</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong><em>Giữ b&oacute;ng nửa nảy bằng l&ograve;ng b&agrave;n ch&acirc;n</em></strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><img alt=\"\" src=\"http://sanchoi.com.vn/Content/images/luyen-tap-bong-da/2014/11/giu-bong-2.png\" /></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\">Gối ch&acirc;n trụ hơi thấp, th&acirc;n người sau khi giữ b&oacute;ng hướng vận động hơi lệch so với b&oacute;ng. Ch&acirc;n giữ b&oacute;ng đưa l&ecirc;n, cẳng ch&acirc;n thả lỏng, mũi ch&acirc;n bẻ cong l&ecirc;n, l&ograve;ng b&agrave;n ch&acirc;n tiếp x&uacute;c b&oacute;ng, b&oacute;ng vận h&agrave;nh theo hướng với mặt đất th&agrave;nh một g&oacute;c nhỏ hơn 90o.</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong><em>Giữ b&oacute;ng tr&ecirc;n kh&ocirc;ng bằng l&ograve;ng b&agrave;n ch&acirc;n</em></strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><img alt=\"\" src=\"http://sanchoi.com.vn/Content/images/luyen-tap-bong-da/2014/11/giu-bong-3.png\" /></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Ch&acirc;n đưa l&ecirc;n, hướng l&ograve;ng b&agrave;n ch&acirc;n về hướng b&oacute;ng bay đến để đ&oacute;n b&oacute;ng, khi b&oacute;ng chạm v&agrave;o ch&acirc;n lập tức k&eacute;o ch&acirc;n ra sau l&agrave;m giảm lực, giữ b&oacute;ng ở dưới ch&acirc;n</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong><em>Giữ b&oacute;ng nửa nảy bằng gan b&agrave;n ch&acirc;n</em></strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><img alt=\"\" src=\"http://sanchoi.com.vn/Content/images/luyen-tap-bong-da/2014/11/giu-bong-4.png\" /></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\">Ch&acirc;n trụ đặt một b&ecirc;n ph&iacute;a sau so với điểm b&oacute;ng rơi, mũi ch&acirc;n đối diện với hướng b&oacute;ng đến.</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong><em>Giữ b&oacute;ng lăn sệt bằng gan b&agrave;n ch&acirc;n</em></strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><img alt=\"\" src=\"http://sanchoi.com.vn/Content/images/luyen-tap-bong-da/2014/11/giu-bong-5.png\" /></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Th&acirc;n người đứng đối diện với hướng b&oacute;ng đến, th&acirc;n hơi ng&atilde; về ph&iacute;a trước, ch&acirc;n trụ đặt một b&ecirc;n b&oacute;ng, mũi ch&acirc;n đối diện với hướng b&oacute;ng đến, đầu gối hơi khuỵu xuống, đồng thời ch&acirc;n giữ b&oacute;ng đưa l&ecirc;n, khớp gối co lại,b&agrave;n ch&acirc;n co l&ecirc;n l&agrave;m cho gan b&agrave;n ch&acirc;n hợp với mặt đất th&agrave;nh một g&oacute;c nhỏ hơn 90o</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong><em>Giữ b&oacute;ng lăn sệt</em></strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">B&oacute;ng lăn qua dưới ch&acirc;n</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Khi giữ b&oacute;ng, tiếp x&uacute;c b&oacute;ng ở vị tr&iacute; hơi cao so với mặt đất.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Sau khi giữ b&oacute;ng, b&oacute;ng chưa nằm ở vị tr&iacute; tốt nhất.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Sau khi giữ b&oacute;ng th&acirc;n người chưa kịp rướn tạo n&ecirc;n khoảng c&aacute;ch về thời gian giữa giữ b&oacute;ng v&agrave; rướn l&ecirc;n hơi d&agrave;i n&ecirc;n kh&ocirc;ng thể kịp thời khống chế được b&oacute;ng v&agrave; tạo ra sai s&oacute;t.</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong><em>Giữ b&oacute;ng nửa nảy</em></strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">B&oacute;ng lọt qua ch&acirc;n chủ yếu l&agrave; do sự ph&aacute;n đo&aacute;n thiếu ch&iacute;nh x&aacute;c đường phản xạ từ mặt đất l&ecirc;n</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Lực tiếp x&uacute;c b&oacute;ng, do điểm tiếp x&uacute;c b&oacute;ng l&agrave;m ảnh hưởng đến việc thực hiện động t&aacute;c tiếp theo</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Th&ocirc;ng thường người ta sẽ nghĩ giữ b&oacute;ng lăn sệt, th&igrave; ngược lại giữ b&oacute;ng nảy cao</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Khi giữ b&oacute;ng nủa nảy, hay giữ b&oacute;ng lăn sệt cũng xuất hiện hiện tượng n&agrave;y</span></p>', 120),
(19, 'Tập kỹ thuật ( Đánh đầu)', '<p><span style=\"font-size:14px\"><strong>a. Di động t&igrave;m vị tr&iacute;</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Phải ph&aacute;n đo&aacute;n ch&iacute;nh x&aacute;c tốc độ bay v&agrave; hướng bay của quả b&oacute;ng, sau đ&oacute; chọn điểm tiếp x&uacute;c b&oacute;ng, sau đ&oacute; di động chiếm vị tr&iacute; v&agrave; nhảy l&ecirc;n đ&aacute;nh đầu</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>b. Động t&aacute;c của th&acirc;n</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Kỹ thuật đ&aacute;nh đầu ph&acirc;n ra c&aacute;c kiểu sau</span></p>\r\n\r\n<p><span style=\"font-size:14px\">&ndash; Đứng tại chổ đ&aacute;nh đầu ch&iacute;nh diện</span></p>\r\n\r\n<p><span style=\"font-size:14px\">&ndash; Đứng tại chổ đ&aacute;nh đầu bằng tr&aacute;n b&ecirc;n</span></p>\r\n\r\n<p><span style=\"font-size:14px\">&ndash; Chạy đ&agrave; đ&aacute;nh đầu bằng tr&aacute;n giữa</span></p>\r\n\r\n<p><span style=\"font-size:14px\">&ndash; Chạy đ&agrave; đ&aacute;nh đầu bằngtr&aacute;n b&ecirc;n</span></p>\r\n\r\n<p><span style=\"font-size:14px\">&ndash; Nhảy l&ecirc;n đ&aacute;nh đầu bằng tr&aacute;n giữa hoặc tr&aacute;n b&ecirc;n</span></p>\r\n\r\n<p><span style=\"font-size:14px\">&ndash; Đ&aacute;nh đầu kiểu c&aacute; nhảy</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>c. Tiếp x&uacute;c giữa đầu v&agrave; b&oacute;ng</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Nhiệm vụ chủ yếu của giai đoạn n&agrave;y l&agrave; t&iacute;nh ch&iacute;nh x&aacute;c của đ&aacute;nh đầu.</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>N&oacute; bao gồm:</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Một l&agrave; sử dụng bộ phận n&agrave;o đ&oacute; của đầu để tiếp x&uacute;c b&oacute;ng</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Hai l&agrave;, d&ugrave;ng bộ phận n&agrave;o đ&oacute; của đầu để tiếp x&uacute;c với bộ phận nhất định n&agrave;o của b&oacute;ng</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Thời gian đầu ti&ecirc;n tiếp x&uacute;c b&oacute;ng phải tu&acirc;n thủ nguy&ecirc;n tắc sau: khi đầu tiếp x&uacute;c b&oacute;ng đ&oacute; cũng l&agrave; l&uacute;c động t&aacute;c gập th&acirc;n đạt tốc độ lớn nhất..</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>d. Động t&aacute;c kết th&uacute;c sau khi đầu tiếp x&uacute;c b&oacute;ng</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Khi thực hiện động t&aacute;c đ&aacute;nh đầu xong th&igrave; động t&aacute;c kế tiếp l&agrave; nhanh ch&oacute;ng di chuyển giữthăng bằng quan s&aacute;t v&agrave; thực hiện c&aacute;c động t&aacute;c kỹ thuật kh&aacute;c . Một l&agrave; sử dụng bộ phận n&agrave;o đ&oacute; của đầu đểtiếp x&uacute;c b&oacute;ng.</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>IV. Đ&aacute;nh đầu ch&iacute;nh diện bằng tr&aacute;n giữa:</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>1.Yếu lĩnh động t&aacute;c kỹ thuật đ&aacute;nh đầu bằng tr&aacute;n giữa</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><img alt=\"\" src=\"http://sanchoi.com.vn/Content/images/luyen-tap-bong-da/2014/11/danh-dau-3.png\" /></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\">Th&acirc;n người đối diện với hướng b&oacute;ng đến,mắt quan s&aacute;t sự vận động của quả b&oacute;ng, hai ch&acirc;n dạng ra hai b&ecirc;n hoặc trước sau, đầu gối hơi thấp xuống trọng t&acirc;m cơ thể rơi v&agrave;o ch&acirc;n trụ, hai vai bu&ocirc;ng lỏng tự nhi&ecirc;n</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Khi b&oacute;ng đến gần th&acirc;n người, ngả người như c&aacute;nh cung để tạo lực, hai ch&acirc;n d&ugrave;ng lực đạp đất, nhanh ch&oacute;ng gập người ra trước, hơi k&eacute;o cằm xuống, trong khoảnh khắc khi tiếp x&uacute;c với b&oacute;ng, cổ l&agrave;m động t&aacute;c đ&aacute;nh mạnh, d&ugrave;ng tr&aacute;n giữa đ&aacute;nh v&agrave;o b&oacute;ng th&acirc;n tr&ecirc;n theo đ&agrave; m&agrave; đ&aacute;nh về ph&iacute;a trước.</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>2</strong>.<strong>Yếu lĩnh đ&aacute;nh đầu khi chạy</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Yếu lĩnh động t&aacute;c đ&aacute;nh đầu khi chạy với động t&aacute;c đứng tại chổ đ&aacute;nh đầu hầu như kh&ocirc;ng c&oacute; g&igrave; thay đổi.C&oacute; kh&aacute;c l&agrave; bước đầu ti&ecirc;n phải chạy t&igrave;m vị tr&iacute; th&iacute;ch hợp</span></p>\r\n\r\n<h3><span style=\"font-size:14px\">3. Đứng tại chỗ đ&aacute;nh đầu</span></h3>\r\n\r\n<p><span style=\"font-size:14px\"><img alt=\"\" src=\"http://sanchoi.com.vn/Content/images/luyen-tap-bong-da/2014/11/danh-dau-4.png\" /></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Loại kỹ thuật động t&aacute;c n&agrave;y thường được sửdụng chuyền b&oacute;ng qua khỏi đầu hoặc sử dụng khiđối phương tấn c&ocirc;ng chuyền b&oacute;ng cao qua đầu</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>4. Chạy l&ecirc;n đ&aacute;nh đầu</strong></span></p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<p><span style=\"font-size:14px\"><img alt=\"\" src=\"http://sanchoi.com.vn/Content/images/luyen-tap-bong-da/2014/11/danh-dau-5.png\" /></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Chạy đ&agrave; nhảy l&ecirc;n đ&aacute;nh đầu c&oacute; thể d&ugrave;ng một hoặc cả hai ch&acirc;n giậm nhảy, tuỳ theo g&oacute;c độ của b&oacute;ng m&agrave; chọn vị tr&iacute; m&agrave; chạy nhanh đến điểm giậm nhảy, bước cuối trước khi nhảy l&ecirc;n hơi rộng một t&iacute;,ch&acirc;n giậm nhảy đạp đất nhảy l&ecirc;n, c&ograve;n ch&acirc;n kia co gối đ&aacute;nh l&ecirc;n, khuỷ tay tự nhi&ecirc;n giơ l&ecirc;n</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>5. Kỹ thuật đ&aacute;nh đầu ra ph&iacute;a sau</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><img alt=\"\" src=\"http://sanchoi.com.vn/Content/images/luyen-tap-bong-da/2014/11/danh-dau-6.png\" /></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Động t&aacute;c n&agrave;y ph&acirc;n ra hai loại: đứng tại chổ v&agrave; nhảy l&ecirc;n đ&aacute;nh đầu.Khi b&oacute;ng đến gần cơ thể ở tr&ecirc;n kh&ocirc;ng, ưỡn ngực, mở bụng ra, cằm gh&igrave;m xuống,th&acirc;n ngả ra sau hướng l&ecirc;n ph&iacute;a tr&ecirc;n, d&ugrave;ng ch&iacute;nh giữa đỉnh đầu chạm ph&iacute;a dưới của b&oacute;ng l&agrave;m cho b&oacute;ng bật bay l&ecirc;n cao bay về ph&iacute;a sau.</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>1.Kỹ thuật đ&aacute;nh đầu tại chổ bằng tr&aacute;n b&ecirc;n</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Căn cứ tốc độ vận h&agrave;nh của quả b&oacute;ng, trục chuyển động của quả b&oacute;ng m&agrave; kịp thời di động đến vị tr&iacute; .Hai ch&acirc;n dạng ra trước-sau hoặc hai b&ecirc;n ch&acirc;n trước phải đạt theo hướng b&oacute;ng đi, trọng t&acirc;mchuyển dần dần ra ch&acirc;n trước, mắt quan s&aacute;t b&oacute;ng, đầu gối ch&acirc;n trước hơi khỵu xuống, hai c&aacute;nh tay dangtự nhi&ecirc;n.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Khi b&oacute;ng bay đến tr&ecirc;n kh&ocirc;ng trước mặt, d&ugrave;ng lực đạp đất, mũi b&agrave;n ch&acirc;n di chuyển hướngth&iacute;ch hợp, th&acirc;n người chuyển theo hướng b&oacute;ng bay đi, đồng thời d&ugrave;ng lực đ&aacute;nh đầu v&agrave;o b&oacute;ng, l&agrave;m chotr&aacute;n b&ecirc;n đ&aacute;nh tr&uacute;ng v&agrave;o phần giữa ph&iacute;a sau của quả b&oacute;ng.</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>2. Chạy đ&aacute;nh đầu bằng tr&aacute;n b&ecirc;n</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Yếu lĩnh động t&aacute;c cũng giống như đứng tại chổ đ&aacute;nh đầu bằng tr&aacute;n b&ecirc;n.Điều kh&aacute;c biệt l&agrave;động t&aacute;c được thực hiện khi chạy nhanh, v&agrave; ch&uacute; &yacute; giữ tư thế c&acirc;n bằng cho cơ thể sau khi ho&agrave;n th&agrave;nhđộng t&aacute;c.</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>3. Bật l&ecirc;n đ&aacute;nh đầu bằng b&ecirc;n</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><img alt=\"\" src=\"http://sanchoi.com.vn/Content/images/luyen-tap-bong-da/2014/11/danh-dau-7.png\" /></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Ph&acirc;n l&agrave;m hai loại: đứng tại chổ giậm nhảy bật cao đ&aacute;nh đầu, chạy đ&agrave;</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Những y&ecirc;u cầu khi đ&aacute;nh đầu</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Khi đ&aacute;nh đầu mắt phải mở để quan s&aacute;t b&oacute;ng</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Khi b&oacute;ng tiếp x&uacute;c với đầu phải gồng ngườil&ecirc;n để đề ph&ograve;ng chấn thương khớp cổ .</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Khi đ&aacute;nh đầu phải dứt kho&aacute;t kh&ocirc;ng sợ sệt,thả lỏng người rất dễ g&acirc;y ra chấn thương</span></p>', 60),
(20, 'Tập kỹ thuật ( Truy cản)', '<h2><span style=\"font-size:14px\">1. Bước&nbsp;1</span></h2>\r\n\r\n<p><span style=\"font-size:14px\">Tiến đến trước mặt đối thủ thật nhanh để kh&ocirc;ng cho họ thời gian v&agrave; kh&ocirc;ng giản xử l&yacute; b&oacute;ng.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Che chắn trước mặt đối thủ v&agrave; chờ cơ hội tốt nhất để tấn c&ocirc;ng</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Đ&ocirc;i khi chỉ đặt đối thủ dưới &aacute;p lực cũng khiến họ phạm lỗi n&agrave;o đ&oacute;.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Tiến đến trước mặt đối thủ thật nhanh để kh&ocirc;ng cho họ thời gian v&agrave; kh&ocirc;ng giản xử l&yacute; b&oacute;ng.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Che chắn trước mặt đối thủ v&agrave; chờ cơ hội tốt nhất để tấn c&ocirc;ng</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Đ&ocirc;i khi chỉ đặt đối thủ dưới &aacute;p lực cũng khiến họ phạm lỗi n&agrave;o đ&oacute;.</span></p>\r\n\r\n<h2><span style=\"font-size:14px\">2. Bước&nbsp;2</span></h2>\r\n\r\n<p><span style=\"font-size:14px\">Khi bạn nghĩ c&oacute; thể đoạt được tr&aacute;i b&oacute;ng, sức nặng cơ thể n&ecirc;n dồn về ph&iacute;a trước để chuẩn bị tranh b&oacute;ng bằng l&ograve;ng trong b&agrave;n ch&acirc;n.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Điều đ&oacute; sẽ khiến đối thủ của bạn hoặc phải chuyền b&oacute;ng hoặc phải đưa b&oacute;ng qua bạn.</span></p>\r\n\r\n<h2><span style=\"font-size:14px\">3. Bước 3</span></h2>\r\n\r\n<p><span style=\"font-size:14px\">Nếu quả b&oacute;ng bị mắc giữa ch&acirc;n bạn v&agrave; ch&acirc;n đối thủ, h&atilde;y để ch&acirc;n bạn b&ecirc;n dưới tr&aacute;i b&oacute;ng để l&agrave;m n&oacute; văng ra.<br />\r\nĐảm bảo l&agrave; ch&acirc;n v&agrave; mắt c&aacute; của bạn thật vững chắc suốt pha tranh b&oacute;ng.<br />\r\nBạn sẽ dễ bị thương hơn nếu bạn kh&ocirc;ng thực sự chuẩn bị đầy đủ cho pha tranh b&oacute;ng</span></p>', 60),
(21, 'Tập kỹ thuật ( Chuồi bóng)', '<h2><span style=\"font-size:14px\">1. Nghệ thuật chuồi b&oacute;ng</span></h2>\r\n\r\n<p><span style=\"font-size:14px\">Những&nbsp;huấn luyện vi&ecirc;n dạy đ&aacute; b&oacute;ng cơ bản&nbsp;định nghĩa rằng nghệ thuật chuồi b&oacute;ng l&agrave; đoạt b&oacute;ng gọn g&agrave;ng, kiểm so&aacute;t n&oacute; hoặc ph&aacute; ra ngo&agrave;i để tr&aacute;nh nguy hiểm cho phần s&acirc;n nh&agrave;. Ở đ&acirc;y kh&ocirc;ng c&oacute; chuyện truy cản th&ocirc; bạo hoặc l&agrave;m hại đối phương. Việc t&iacute;nh to&aacute;n đ&uacute;ng thời điểm l&agrave; phần cốt l&otilde;i của kỹ năng chuồi b&oacute;ng giỏi. Bạn phải biết khi n&agrave;o cần nỗ lực đoạt b&oacute;ng. Đừng quyết định chuồi b&oacute;ng qu&aacute; sớm v&igrave; bạn c&oacute; thể sẽ bị lừa qua. H&atilde;y xem x&eacute;t vị tr&iacute; của người hậu vệ b&ecirc;n đội m&igrave;nh, quyết định h&agrave;nh động khi bạn l&agrave; người cuối c&ugrave;ng c&oacute; thể can thiệp. Thay v&igrave; lao v&agrave;o, bạn n&ecirc;n cố gắng k&egrave;m đối phương lại v&agrave; chờ đồng đội quay về phần s&acirc;n nh&agrave;. Trong mọi trường hợp, bạn n&ecirc;n &ldquo;lừa&rdquo; (k&igrave;m h&atilde;m) đối phương cho đến khi bạn cảm thấy đ&atilde; đến l&uacute;c tấn c&ocirc;ng. Chỉ chuồi b&oacute;ng khi bạn nghĩ bạn đ&atilde; c&oacute; cơ hội thuận lợi để lấy b&oacute;ng. Tuy nhi&ecirc;n, khi đ&atilde; quyết định chuồi b&oacute;ng, bạn n&ecirc;n thật quyết đo&aacute;n. C&aacute;c c&uacute; chuồi b&oacute;ng do dự kh&ocirc;ng chỉ tạo cho đối phương thời cơ thuận lợi để giữ lấy b&oacute;ng, m&agrave; c&ograve;n c&oacute; thể dẫn đến chấn thương.</span></p>\r\n\r\n<h2><span style=\"font-size:14px\">2. Trượt người chuồi b&oacute;ng</span></h2>\r\n\r\n<p><span style=\"font-size:14px\">Trượt người chuồi b&oacute;ng l&agrave; c&aacute;ch hiệu quả nhất để ph&aacute; b&oacute;ng. Thế nhưng ta cần t&iacute;nh to&aacute;n thời điểm ch&iacute;nh x&aacute;c, nếu kh&ocirc;ng sẽ rất nguy hiểm. Đ&acirc;y kh&ocirc;ng phải l&agrave; giải ph&aacute;p cho những người chưa th&agrave;nh thạo bởi v&igrave; n&oacute; thường l&agrave;m cho đối phương t&eacute; ng&atilde;. Khi ấy, nếu kh&ocirc;ng bị phạt trực tiếp th&igrave; người chuồi b&oacute;ng cũng nhận thẻ nếu chuồi nguy hiểm. Tuy nhi&ecirc;n, trượt người chuồi b&oacute;ng c&oacute; thể sẽ rất nguy hiểm, đặc biệt l&agrave; khi c&aacute;c tiền đạo d&ugrave;ng c&uacute; chuồi b&oacute;ng ấy để lấy b&oacute;ng trong ch&acirc;n hậu vệ ngay trong v&ograve;ng cấm địa đối phương. Vấn đề cốt l&otilde;i l&agrave; giữ tốc độ theo đối phương v&agrave; trượt người khi anh ta &iacute;t để &yacute; nhất, chuồi tr&uacute;ng b&oacute;ng trước khi tr&uacute;ng ch&acirc;n anh ta v&agrave; l&agrave;m anh ta ng&atilde;. H&atilde;y cố chuồi b&oacute;ng sao cho bạn vẫn đứng v&agrave; chạy được c&ugrave;ng với b&oacute;ng trước khi đối phương c&oacute; thời gian đứng dậy v&agrave; đuổi kịp.</span></p>\r\n\r\n<h2><span style=\"font-size:14px\">3. Cản b&oacute;ng</span></h2>\r\n\r\n<p><span style=\"font-size:14px\">Một số người&nbsp;cho rằng kiểu chuồi b&oacute;ng phổ biến nhất trong b&oacute;ng đ&aacute; l&agrave; &ldquo;cản b&oacute;ng&rdquo;. T&igrave;nh huống n&agrave;y xảy ra khi cả hai đối thủ c&ugrave;ng đến gần quả b&oacute;ng ở c&ugrave;ng một thời điểm. Khi gặp t&igrave;nh huống đối mặt 50-50 n&agrave;y, bạn cần phải tr&aacute;nh lao v&agrave;o đối phương ở những ph&uacute;t ch&oacute;t. L&agrave;m như thế sẽ rất dễ g&acirc;y chấn thương. H&atilde;y chặn đối phương bằng một c&uacute; chuồi b&oacute;ng mạnh. Đặt trọng lượng cơ thể của bạn l&ecirc;n tr&ecirc;n quả b&oacute;ng để gia tăng sức mạnh l&ecirc;n c&uacute; truy cản. Nếu chọn vị tr&iacute; v&agrave; tư thế đ&uacute;ng cũng như với một ch&uacute;t quyết đo&aacute;n, bạn sẽ gi&agrave;nh chiến thắng cho d&ugrave; đối phương to khỏe hơn.</span></p>', 60),
(22, 'Tập kỹ thuật ( Kèm người)', '<p>Đ&acirc;y l&agrave; chiến lược kết hợp kỹ thuật g&acirc;y &aacute;p lực l&ecirc;n đối thủ bằng tấn c&ocirc;ng đoạt b&oacute;ng hoặc đeo b&aacute;m k&egrave;m người. Khi tiếp cận gần đối phương, hậu vệ be mặt họ bằng những bước di chuyển ngắn, quan s&aacute;t chờ đợi cơ hội gi&agrave;nh b&oacute;ng. Tuy nhi&ecirc;n, bạn cũng phải đảm bảo sẵn s&agrave;ng chạy đua với đối phương nếu cần. Kỹ thuật ph&ograve;ng ngự n&agrave;y đ&ograve;i hỏi bạn hướng vị tr&iacute; cơ thể về ph&iacute;a đối phương v&agrave; chuẩn bị cắt b&oacute;ng trước khi họ nhận đường chuyền hoặc chạy theo hướng bảo vệ khung th&agrave;nh đội nh&agrave;.</p>\r\n\r\n<p>1. &Aacute;p s&aacute;t thật nhanh</p>\r\n\r\n<p>Di chuyển thật nhanh đến gần đối thủ đang c&oacute; b&oacute;ng. G&acirc;y &aacute;p lực c&agrave;ng nhanh cho cầu thủ đối phương, anh ta sẽ c&agrave;ng phải đưa ra quyết định sớm. Khi chịu &aacute;p lực cao thường sẽ hay c&oacute; những sai s&oacute;t. Với cầu thủ tấn c&ocirc;ng đối phương, anh ta sẽ c&oacute; &iacute;t thời gian để quan s&aacute;t v&agrave; t&igrave;m người chuyền b&oacute;ng, hoặc kh&ocirc;ng c&oacute; khoảng trống để dẫn b&oacute;ng d&agrave;i.</p>\r\n\r\n<p>2. Giảm tốc độ&nbsp;</p>\r\n\r\n<p>Những hậu vệ sau khi &aacute;p s&aacute;t đối thủ nhưng lại nhao v&agrave;o cướp b&oacute;ng qu&aacute; vội v&agrave;ng sẽ dễ bị đối phương vượt qua chỉ bằng một pha đẩy b&oacute;ng tho&aacute;t đi đơn giản. Bằng c&aacute;ch tiếp cận nhanh nhưng sau đ&oacute; giảm tốc độ xuống với những bước chạy ngắn, giữ một khoảng c&aacute;ch hợp l&yacute;, hậu vệ sẽ kh&oacute; bị đ&aacute;nh bại hơn nhiều.</p>\r\n\r\n<p>Quan trọng l&agrave; x&aacute;c định thời điểm ph&ugrave; hợp để giảm tốc độ xuống. L&uacute;c mới tập c&oacute; thể ch&uacute;ng ta sẽ chưa biết ngay được cự ly bao nhi&ecirc;u l&agrave; hợp l&yacute;. Nhưng dần dần bằng kinh nghiệm, ch&uacute;ng ta sẽ tự &yacute; thức được khoảng c&aacute;ch ph&ugrave; hợp để ngăn chặn đối thủ hiệu quả, kh&ocirc;ng qu&aacute; gần hoặc qu&aacute; xa. Với c&aacute; nh&acirc;n người viết, ước chừng cự ly một sải tay l&agrave; hợp l&yacute;.</p>', 60),
(23, 'Tập kỹ thuật ( Sút bóng)', '<p><span style=\"font-size:14px\">Mục đ&iacute;ch khi sử dụng kỹ thuật s&uacute;t b&oacute;ng bằng mu b&agrave;n ch&acirc;n: S&uacute;t phạt c&oacute; định trước khung th&agrave;nh, s&uacute;t phạt g&oacute;c, những c&uacute; s&uacute;t kết th&uacute;c v&agrave;o cầu m&ocirc;n để ghi b&agrave;n,&hellip;..</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Để tập luyện thuận thục bạn n&ecirc;n tập luyện theo nhưng bước sau đ&acirc;y:</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><img alt=\"ky-thuat-sut-bong-1\" src=\"https://bongda.choithethao.vn/wp-content/uploads/2016/10/ky-thuat-sut-bong-1-300x110.png\" style=\"height:157px; width:428px\" /></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Luyện tập chạy đ&agrave; v&agrave; s&uacute;t cầu m&ocirc;n: Lấy đ&agrave; khoảng 3 đến 5 bước ch&acirc;n sau đ&oacute; chạy đ&agrave; đặt ch&acirc;n trụ song song với b&oacute;ng =&gt; gập ch&acirc;n s&uacute;t sau đ&oacute; duỗi thẳng người đẩy về ph&iacute;a trước tạo l&uacute;c mạnh đẩy b&oacute;ng đi xa. Vị tr&iacute; tiếp b&oacute;ng l&agrave; bằng mu b&agrave;n ch&acirc;n. Điểm tiếp b&oacute;ng quyết định độ xo&aacute;y v&agrave; quỷ đạo bay của b&oacute;ng; điểm tiếp x&uacute;c c&agrave;ng xa t&acirc;m b&oacute;ng th&igrave; độ xo&aacute;y b&oacute;ng tăng l&ecirc;n v&agrave; ngược lại.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><em><strong>Chạy đ&agrave;:</strong></em></li>\r\n</ol>\r\n\r\n<p>&ndash; Thẳng hướng b&oacute;ng (Chếch từ 5-10 độ, đối với người ch&acirc;n d&agrave;i), tốc độ tăng dần đều, bước cuối d&agrave;i.</p>\r\n\r\n<ol start=\"2\">\r\n	<li><em><strong>Ch&acirc;n trụ:</strong></em></li>\r\n</ol>\r\n\r\n<p>&ndash; Đặt ngang v&agrave; c&aacute;ch b&oacute;ng 10-15cm (khoảng c&aacute;ch đặt ch&acirc;n trụ c&oacute; thể điều chỉnh, t&ugrave;y thuộc v&agrave;o tầm v&oacute;c v&agrave; th&oacute;i quen của từng người), lần lượt đặt từ g&oacute;t, m&aacute; ngo&agrave;i rồi cả b&agrave;n ch&acirc;n.</p>\r\n\r\n<p>&ndash; Mũi ch&acirc;n trụ thẳng hướng s&uacute;t b&oacute;ng.</p>\r\n\r\n<p>&ndash; Đầu gối khuỵu, to&agrave;n bộ trọng t&acirc;m cơ thể dồn v&agrave;o ch&acirc;n trụ.</p>\r\n\r\n<ol start=\"3\">\r\n	<li><strong><em>Ch&acirc;n lăng:</em></strong></li>\r\n</ol>\r\n\r\n<p>&ndash; Vung từ sau về trước. Tốc độ vung ch&acirc;n lăng v&agrave; tốc độ chạy đ&agrave; l&agrave; hai yếu tố quyết định uy lực của c&uacute; đ&aacute; (c&uacute; s&uacute;t).</p>\r\n\r\n<ol start=\"4\">\r\n	<li><em><strong>Tiếp x&uacute;c b&oacute;ng:</strong></em></li>\r\n</ol>\r\n\r\n<p><em><strong><img alt=\"biquyet2\" src=\"http://www.compete.vn/vnt_upload/news/06_2017/biquyet2.jpg\" /></strong></em></p>\r\n\r\n<p>&ndash; Duỗi hết mu, cổ ch&acirc;n giữ chắc.</p>\r\n\r\n<p>&ndash; Điểm tiếp x&uacute;c l&agrave; t&acirc;m b&oacute;ng, điểm chạm l&agrave; mu b&agrave;n ch&acirc;n (chỗ buộc d&acirc;y giầy).</p>\r\n\r\n<ol start=\"5\">\r\n	<li><strong><em>Kết th&uacute;c:</em></strong></li>\r\n</ol>\r\n\r\n<p>&ndash; Khi thực hiện v&agrave; kết th&uacute;c động t&aacute;c, hai tay vung tự nhi&ecirc;n, th&acirc;n người hơi đổ về ph&iacute;a trước v&agrave; lao theo hướng b&oacute;ng.</p>', 120),
(24, 'Tập kỹ thuật ( Chuyền ngắn)', '<p>Chuyền nhanh l&agrave;m cho tr&aacute;i b&oacute;ng sớm được đưa l&ecirc;n tr&ecirc;n v&agrave; hạn chế khả năng m&acirc;t quyền kiếm so&aacute;t b&oacute;ng.</p>\r\n\r\n<p>L&ograve;ng b&agrave;n ch&acirc;n (mặt trong ch&acirc;n) gi&uacute;p chuyền ch&iacute;nh x&aacute;c nhất.</p>\r\n\r\n<p>Tuy nhi&ecirc;n n&oacute; lại kh&oacute; gia tăng sức mạnh v&agrave; cũng dễ khiến đối thủ nhận ra bạn đang dự định chuyền b&oacute;ng đi đ&acirc;u.</p>\r\n\r\n<p>Do những điều tr&ecirc;n, tốt nhất chỉ n&ecirc;n d&ugrave;ng kĩ năng đ&oacute; để thực hiện những đường chuyền ngắn</p>\r\n\r\n<hr />\r\n<p><strong>Bước một</strong></p>\r\n\r\n<p>Một c&aacute;ch l&yacute; tưởng, bạn sẽ muốn tiếp x&uacute;c với tr&aacute;i b&oacute;ng theo một g&oacute;c 30 độ để bạn c&oacute; kh&ocirc;ng gian để di chuyển ch&acirc;n thuận tới.</p>\r\n\r\n<p>Đưa ch&acirc;n kh&ocirc;ng thuận gần đến b&ecirc;n cạnh tr&aacute;i b&oacute;ng, sử dụng tay để giữ thăng bằng, giữ đầu thẳng v&agrave; mắt tập trung v&agrave;o tr&aacute;i b&oacute;ng.</p>\r\n\r\n<hr />\r\n<p><strong>Bước hai</strong></p>\r\n\r\n<p>Giữ mắt c&aacute; ch&acirc;n chắc chắn, đưa ch&acirc;n thuận sang ngang v&agrave; đ&aacute; v&agrave;o t&acirc;m tr&aacute;i b&oacute;ng (để giữ n&oacute; tr&ecirc;n mặt s&acirc;n) bằng m&aacute; trong ch&acirc;n.</p>\r\n\r\n<p>Với c&aacute;ch chuyền đ&oacute;, bạn c&oacute; lẽ sẽ khiến tr&aacute;i b&oacute;ng ở tầm thấp để đồng đội c&oacute; thể dễ d&agrave;ng khống chế n&oacute;.</p>\r\n\r\n<hr />\r\n<p><strong>Bước ba</strong></p>\r\n\r\n<p>Lực bạn dồn v&agrave;o đường chuyền cũng rất đ&aacute;ng ch&uacute; &yacute;.</p>\r\n\r\n<p>Phải d&ugrave;ng ch&acirc;n đ&aacute; b&oacute;ng để tăng sức mạnh, tuy nhi&ecirc;n độ mạnh của đường chuyền c&ograve;n phụ thuộc v&agrave;o việc đồng đội của bạn, v&agrave; những cầu th&uacute; đối phương, đang ở bao xa.</p>\r\n\r\n<p>Bạn sẽ c&agrave;ng ng&agrave;y c&agrave;ng thuần thục việc đ&aacute;nh gi&aacute; điều tr&ecirc;n khi bạn chơi b&oacute;ng nhiều hơn</p>', 60),
(25, 'Tập kỹ thuật ( Chuyền dài)', '<p>Để thực hiện một đường chuyền thấp đủ vượt qua đối thủ, bạn phải d&ugrave;ng mu b&agrave;n ch&acirc;n v&agrave; đ&aacute; mạnh tr&aacute;i b&oacute;ng.</p>\r\n\r\n<p>N&oacute; c&oacute; thể ph&aacute; vỡ h&agrave;ng ph&ograve;ng ngự nhưng vẫn giữ được quả b&oacute;ng ở tr&ecirc;n mặt đất để đồng đội c&oacute; thể chạy l&ecirc;n đ&oacute;n đường chuyền.</p>\r\n\r\n<hr />\r\n<p><strong>Bước một</strong></p>\r\n\r\n<p>Vị tr&iacute; tiếp b&oacute;ng cũng giống như khi thực hiện đường chuyền ngắn bằng l&ograve;ng ch&acirc;n.</p>\r\n\r\n<p>Tiếp x&uacute;c với tr&aacute;i b&oacute;ng ở một g&oacute;c 30 độ để bạn c&oacute; kh&ocirc;ng gian để di chuyển ch&acirc;n thuận tới.</p>\r\n\r\n<p>Đặt ch&acirc;n kh&ocirc;ng thuận ngay b&ecirc;n cạnh tr&aacute;i b&oacute;ng, sử dụng tay để giữ thăng bằng, cổ thẳng trong khi mắt tập trung v&agrave;o tr&aacute;i b&oacute;ng.</p>\r\n\r\n<hr />\r\n<p><strong>Bước hai</strong></p>\r\n\r\n<p>Để giữ tr&aacute;i b&oacute;ng bay thấp, bạn phải tập trung giữ tr&aacute;i b&oacute;ng ở b&ecirc;n dưới đầu gối v&agrave; kh&ocirc;ng để ch&acirc;n bị nghi&ecirc;ng.</p>\r\n\r\n<p>Đ&aacute; v&agrave;o t&acirc;m quả b&oacute;ng bằng mu b&agrave;n ch&acirc;n trong khi c&aacute;c ng&oacute;n ch&acirc;n hướng xuống dưới.</p>\r\n\r\n<hr />\r\n<p><strong>Bước ba</strong></p>\r\n\r\n<p>Đưa ch&acirc;n thuận theo đ&agrave; tiến l&ecirc;n để gia tăng lực chuyền</p>', 60);
INSERT INTO `giaotrinhtap` (`id`, `TenBaiTap`, `NoiDungBaiTap`, `ThoiLuongTapToiDa`) VALUES
(26, 'Tập kỹ thuật ( Bắt bóng)', '<h2><span style=\"font-size:14px\">1. B&agrave;i tập&nbsp;di chuyển đổ người bắt b&oacute;ng 2 b&ecirc;n:</span></h2>\r\n\r\n<h3><span style=\"font-size:14px\">B&agrave;i tập 1: Bắt b&oacute;ng xệt</span></h3>\r\n\r\n<p><span style=\"font-size:14px\">&ndash; Chuẩn bị:</span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:14px\">HLV chuẩn bị c&aacute;c vật cản để Thủ m&ocirc;n di chuyển qua c&aacute;c vật cản đ&oacute;.</span></li>\r\n	<li><span style=\"font-size:14px\">Cần 1 hoặc 2 người phục vụ tiếp b&oacute;ng cho thủ m&ocirc;n thực hiện đổ người bắt b&oacute;ng.</span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:14px\">&ndash; C&aacute;c bước thực hiện:</span></p>\r\n\r\n<p><span style=\"font-size:14px\">B1: Thủ m&ocirc;n di chuyển qua c&aacute;c vật cản được bố tr&iacute; bởi HLV.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">B2: Sau đ&oacute; người phục vụ đ&aacute; b&oacute;ng xệt sang 1 b&ecirc;n. Thủ m&ocirc;n lập tức đổ người bắt b&oacute;ng.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">B3: Sau khi thủ m&ocirc;n vừa bắt được tr&aacute;i b&oacute;ng; người phục vụ tiếp tục đ&aacute; b&oacute;ng xệt sang b&ecirc;n ngược lại.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">B4: Thủ m&ocirc;n lập tức đứng dậy v&agrave; tiếp tục đổ người bắt b&oacute;ng.</span></p>\r\n\r\n<h3><span style=\"font-size:14px\">B&agrave;i tập 2: Bắt b&oacute;ng bổng hoặc b&oacute;ng ngang người</span></h3>\r\n\r\n<p><span style=\"font-size:14px\">Tương tự như b&agrave;i tập 1, chỉ kh&aacute;c điều l&agrave; người phục vụ sẽ tung b&oacute;ng cho thủ m&ocirc;n bắt b&oacute;ng bổng.</span></p>\r\n\r\n<h3><span style=\"font-size:14px\">B&agrave;i tập 3: Kết hợp bắt b&oacute;ng bổng v&agrave; xệt:</span></h3>\r\n\r\n<p><span style=\"font-size:14px\">&ndash; Chuẩn bị:</span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:14px\">Giống b&agrave;i tập 1 v&agrave; 2.</span></li>\r\n	<li><span style=\"font-size:14px\">Cần th&ecirc;m 1 người phục vụ n&eacute;m b&oacute;ng ở vị tr&iacute; xuất ph&aacute;t của Thủ m&ocirc;n.</span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:14px\">&ndash; C&aacute;c bước thực hiện:</span></p>\r\n\r\n<p><span style=\"font-size:14px\">B1: Thực hiện y hệt b&agrave;i tập 1.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">B2: Thực hiện xong b&agrave;i tập 1 quay sau chạy qua c&aacute;c vật cản về vị tr&iacute; xuất ph&aacute;t.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">B3: Người phục vụ tung b&oacute;ng cho Thủ m&ocirc;n thực hiện giống b&agrave;i tập 2.</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Ch&uacute; &yacute;:&nbsp;</strong>C&oacute; thể thực hiện với b&oacute;ng Tennis để n&acirc;ng cao độ kh&oacute;.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Xem tham khảo Video buổi tập phản xạ của Thủ m&ocirc;n Thibaut Courtois:</span></p>\r\n\r\n<h2><span style=\"font-size:14px\">2. B&agrave;i tập phản xạ bất k&igrave;</span></h2>\r\n\r\n<h3><span style=\"font-size:14px\">B&agrave;i tập 1: Phản xạ bắt b&oacute;ng ở vị tr&iacute; bất k&igrave;</span></h3>\r\n\r\n<p><span style=\"font-size:14px\">&ndash; Chuẩn bị:</span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:14px\">HLV chuẩn bị 10 quả b&oacute;ng xếp ngang khu vực 16m50 v&agrave; song song với khung th&agrave;nh.</span></li>\r\n	<li><span style=\"font-size:14px\">Mỗi quả b&oacute;ng đặt c&aacute;ch nhau khoảng 30 cm.</span></li>\r\n	<li><span style=\"font-size:14px\">Cần 1 đến 2 người phục vụ.</span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:14px\">&ndash; C&aacute;c bước thực hiện:</span></p>\r\n\r\n<p><span style=\"font-size:14px\">B1: Cầu thủ thực hiện s&uacute;t lần lượt c&aacute;c quả b&oacute;ng từ tr&aacute;i qua phải hoặc ngược lại t&ugrave;y v&agrave;o ch&acirc;n thuận của người phục vụ. S&uacute;t b&oacute;ng v&agrave;o vị tr&iacute; bất k&igrave; trong khung th&agrave;nh.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">B2: Thủ m&ocirc;n thực hiện phản xạ bắt b&oacute;ng theo từng c&uacute; s&uacute;t của người phục vụ.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">B3: Khi thủ m&ocirc;n vừa bắt được tr&aacute;i b&oacute;ng th&igrave; người phục vụ lập tức s&uacute;t tr&aacute;i b&oacute;ng tiếp theo.</span></p>\r\n\r\n<h3><span style=\"font-size:14px\">B&agrave;i tập 2: Phản xạ bắt b&oacute;ng Tennis</span></h3>\r\n\r\n<p><span style=\"font-size:14px\">&ndash; Chuẩn bị:</span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:14px\">Vợt Tennis, nhiều b&oacute;ng Tennis.</span></li>\r\n	<li><span style=\"font-size:14px\">Cần tối thiểu 2 người phục vụ.</span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:14px\">&ndash; C&aacute;c bước thực hiện:</span></p>\r\n\r\n<p><span style=\"font-size:14px\">B1: 1 người phục vụ tiếp b&oacute;ng. 1 người cầm vợt Tennis đ&aacute;nh b&oacute;ng về ph&iacute;a cầu m&ocirc;n với lực vừa phải.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">B2: Thủ m&ocirc;n thực hiện phản xạ bắt b&oacute;ng.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">B3: Sau khi thủ m&ocirc;n vừa bắt b&oacute;ng th&igrave; lập tức đ&aacute;nh quả b&oacute;ng tiếp theo về ph&iacute;a khung th&agrave;nh.</span></p>', 60),
(27, 'Tập kỹ thuật ( Đấm bóng)', '<p><span style=\"font-size:14px\">Bước 1: Người phục vụ tung hoặc s&uacute;t b&oacute;ng v&agrave;o tầm trung v&agrave;o người thủ m&ocirc;n.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Bước 2: Thủ m&ocirc;n x&aacute;c định hướng b&oacute;ng v&agrave; điểm rơi của b&oacute;ng.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Bước 3:&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Nếu b&oacute;ng lăn v&agrave;o giữa thủ m&ocirc;n th&igrave;:</span></p>\r\n\r\n<p><span style=\"font-size:14px\">+ Hai ch&acirc;n của thủ m&ocirc;n đứng rộng bằng vai.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">+ Người hơi c&uacute;i xuống.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">+ Hai tay vươn d&agrave;i nắm s&aacute;t v&agrave;o nhau &nbsp;v&agrave; đấm thẳng v&agrave;o quả b&oacute;ng.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Nếu b&oacute;ng lăn sang hai b&ecirc;n của thủ m&ocirc;n th&igrave;:</span></p>\r\n\r\n<p><span style=\"font-size:14px\">+ Ch&acirc;n trụ của thủ m&ocirc;n chếch l&ecirc;n 1 g&oacute;c 30 độ.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">+ Đổ người theo hướng mũi ch&acirc;n.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">+ Đến đ&acirc;y th&igrave; thủ m&ocirc;n c&oacute; thể thực hiện theo 2 c&aacute;ch:</span></p>\r\n\r\n<p><span style=\"font-size:14px\">C&aacute;ch 1: Đấm b&oacute;ng bằng 1 tay khi b&oacute;ng đến thủ m&ocirc;n vươn 1 tay l&ecirc;n đến vị tr&iacute; thuận lơi nhất th&igrave; đấm thẳng v&agrave;o phần dưới của quả b&oacute;ng.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">C&aacute;ch 2: Đấm b&oacute;ng bằng 2 tay khi b&oacute;ng đến thủ m&ocirc;n đưa hai tay l&ecirc;n nắm s&aacute;t lại v&agrave; đấm thẳng v&agrave;o quả b&oacute;ng.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Ch&uacute; &yacute;</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Thủ m&ocirc;n cần x&aacute;c định ch&iacute;nh x&aacute;c hướng v&agrave; điểm rơi của quả b&oacute;ng.</span></p>', 60),
(28, 'Tập kỹ thuật ( Sút bóng bằng lòng bàn chân)', '<p><span style=\"font-size:14px\"><img alt=\"\" src=\"https://sites.google.com/site/caulacbohvbp/_/rsrc/1346755618529/home/huan-luyen-dhao-tao/huan-luyen-thu-mon/bai-3-ky-thuat-da-bong-bang-long-ban-chan/2.png\" /></span></p>\r\n\r\n<p><span style=\"font-size:14px\">+&nbsp;<strong>B1</strong>: Quan s&aacute;t</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Ngắm mục ti&ecirc;u dứt điểm, đường b&oacute;ng dứt điểm</span></p>\r\n\r\n<p><span style=\"font-size:14px\">+&nbsp;<strong>B2</strong>: Chạy đ&agrave;&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Để s&uacute;t được mạnh ngo&agrave;i điểm tiếp x&uacute;c b&oacute;ng với b&agrave;n ch&acirc;n th&igrave; c&aacute;c bạn phải chạy đ&agrave; hoặc lấy đ&agrave; tốt, v&agrave; quan trọng ở bước cuối c&ugrave;ng trụ ch&acirc;n tr&aacute;i, hoặc ch&acirc;n phải đối với người thuận ch&acirc;n tr&aacute;i phải vững, đồng thời lấy thế của đ&agrave; chạy s&uacute;t b&oacute;ng co ch&acirc;n nhiều về đăng sau</span></p>\r\n\r\n<p><span style=\"font-size:14px\">+&nbsp;<strong>B3</strong>: S&uacute;t b&oacute;ng ( c&oacute; 2 kiểu )</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Điểm tiếp x&uacute;c giữa ch&acirc;n v&agrave; b&oacute;ng l&agrave; l&ograve;ng&nbsp;của b&agrave;n ch&acirc;n</span></p>\r\n\r\n<p><span style=\"font-size:14px\">. S&uacute;t thẳng</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Điểm tiếp x&uacute;c giữa ch&acirc;n v&agrave; b&oacute;ng l&agrave; 1 g&oacute;c 90 độ sẽ gi&uacute;p b&oacute;ng đi thẳng về hướng mục ti&ecirc;u</span></p>\r\n\r\n<p><span style=\"font-size:14px\">. S&uacute;t xo&aacute;y</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Điểm tiếp x&uacute;c giữa ch&acirc;n v&agrave; b&oacute;ng l&agrave; 1 g&oacute;c 30 &ndash; 40 độ t&ugrave;y v&agrave;o độ xo&aacute;y đồng thời đưa ch&acirc;n l&ecirc;n theo hướng s&uacute;t</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><em><strong>Ch&uacute; &yacute;&nbsp;</strong></em></span></p>\r\n\r\n<p><span style=\"font-size:14px\">+ S&uacute;t b&oacute;ng bằng l&ograve;ng&nbsp;b&agrave;n ch&acirc;n b&agrave;n ch&acirc;n</span></p>\r\n\r\n<p><span style=\"font-size:14px\">+ S&uacute;t thẳng&nbsp;sẽ gi&uacute;p b&oacute;ng đi mạnh v&agrave; chuẩn x&aacute;c theo hướng thẳng về ph&iacute;a thủ m&ocirc;n</span></p>\r\n\r\n<p><span style=\"font-size:14px\">+ S&uacute;t xo&aacute;y sẽ l&agrave;m cho tr&aacute;i b&oacute;ng c&oacute; quỹ đạo kh&oacute; lường, thủ m&ocirc;n sẽ kh&oacute; bắt được b&oacute;ng hơn nhưng độ ch&iacute;nh x&aacute;c kh&ocirc;ng cao</span></p>', 60),
(29, 'Tập kỹ thuật ( Phối hợp)', '<h2><span style=\"font-size:16px\">B&agrave;i tập 1:&nbsp;Phối hợp giữa 2 cầu thủ A v&agrave; B</span></h2>\r\n\r\n<p><span style=\"font-size:16px\"><strong>C&aacute;c bước thực hiện:</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">1. A, B đứng thẳng h&agrave;ng nhau.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">2. Cầu thủ A chuyền b&oacute;ng cho B, B l&agrave;m tường bật ch&eacute;o sang tr&aacute;i hoặc phải cho cầu thủ A lao v&agrave;o đỡ b&oacute;ng rồi dứt điểm ch&eacute;o g&oacute;c.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Xem video hướng dẫn sau:</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><span style=\"font-size:16px\">B&agrave;i tập 2: Phối hợp 3 cầu thủ A, B, C</span></h2>\r\n\r\n<p><span style=\"font-size:16px\"><strong>C&aacute;c bước thực hiện:</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">1. A, B, C đứng thẳng h&agrave;ng. C đứng ở giữa s&acirc;n, A đứng ở v&ograve;ng cung 16m50, B đứng ở giữa A v&agrave; C.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">2. Cầu thủ C chuyền b&oacute;ng ch&eacute;o sang tr&aacute;i hoặc phải.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">3. B di chuyển đ&oacute;n b&oacute;ng ở hướng C chuyền. Đồng thời A di chuyển theo hướng ngược với B.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">4. B chuyền b&oacute;ng v&agrave;o giữa v&ograve;ng cấm. A di chuyển đ&oacute;n b&oacute;ng v&agrave; dứt điểm ch&eacute;o g&oacute;c.</span></p>', 120),
(30, 'Tập kỹ thuật ( Đá Vô-lê)', '<h3><span style=\"font-size:14px\">Bước 1: Quan s&aacute;t</span></h3>\r\n\r\n<p><span style=\"font-size:14px\">Ngắm mục ti&ecirc;u dứt điểm, đường b&oacute;ng dứt điểm</span></p>\r\n\r\n<h3><span style=\"font-size:14px\">Bước 2: Chạy đ&agrave;</span></h3>\r\n\r\n<p><span style=\"font-size:14px\">Cần nắm r&otilde; quỹ đạo của b&oacute;ng để chạy đ&agrave; ph&ugrave; hợp dứt điểm đ&uacute;ng tr&aacute;i b&oacute;ng</span></p>\r\n\r\n<h3><span style=\"font-size:14px\">Bước 3: S&uacute;t b&oacute;ng</span></h3>\r\n\r\n<p><span style=\"font-size:14px\">S&uacute;t b&oacute;ng khi b&oacute;ng vẫn c&ograve;n đang ở tr&ecirc;n cao v&agrave; dứt điểm thẳng về ph&iacute;a khung th&agrave;nh</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Ch&uacute; &yacute;:</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">+ V&ocirc; l&ecirc; sẽ gi&uacute;p b&oacute;ng đi rất mạnh v&agrave; căng nhưng sẽ kh&oacute; chuẩn x&aacute;c</span></p>\r\n\r\n<p><span style=\"font-size:14px\">+ X&aacute;c định quỹ đạo của b&oacute;ng v&agrave; đường b&oacute;ng thật chuẩn x&aacute;c mới thực hiện được kỹ thuật n&agrave;y</span></p>', 30),
(31, 'Tập kỹ thuật ( Đá phạt)', '<h3><span style=\"font-size:14px\">Bước 1: Quan s&aacute;t</span></h3>\r\n\r\n<p><span style=\"font-size:14px\">+ Đ&aacute; phạt trực tiếp: Cần x&aacute;c định&nbsp;đường b&oacute;ng hướng hướng b&oacute;ng s&uacute;t phạt</span></p>\r\n\r\n<p><span style=\"font-size:14px\">+ Đ&aacute; phạt gi&aacute;n tiếp: Cần định hướng hướng chuyền v&agrave; chiến thuật đ&aacute; phạt của đội b&oacute;ng</span></p>\r\n\r\n<h3><span style=\"font-size:14px\">Bước 2: Lấy đ&agrave;</span></h3>\r\n\r\n<p><span style=\"font-size:14px\">Lấy đ&agrave; c&aacute;ch b&oacute;ng 3 &ndash; 5 bước ch&acirc;n rồi thực hiện c&aacute;c kỹ thuật chuyền b&oacute;ng s&uacute;t b&oacute;ng cho ph&ugrave; hợp</span></p>\r\n\r\n<h3><span style=\"font-size:14px\">Bước 3: Đ&aacute; phạt</span></h3>\r\n\r\n<p><span style=\"font-size:14px\">+ Đ&aacute; phạt trực tiếp: Thực hiện kỹ thuật s&uacute;t b&oacute;ng để s&uacute;t b&oacute;ng về ph&iacute;a cầu g&ocirc;n</span></p>\r\n\r\n<p><span style=\"font-size:14px\">+ Đ&aacute; phạt gi&aacute;n tiếp: Thực hiện kỹ thuật chuyền b&oacute;ng, tạt b&oacute;ng để thực hiện đ&aacute; phạt</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Ch&uacute; &yacute;:</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">+ Cần tu&acirc;n thủ luật đ&aacute; phạt để tr&aacute;nh phạm luật</span></p>\r\n\r\n<p><span style=\"font-size:14px\">+ C&oacute; thể phối hợp đ&aacute; phạt để g&acirc;y bất ngờ cho thủ m&ocirc;n</span></p>', 60),
(32, 'Tập kỹ thuật ( Phản xạ)', '<h3><span style=\"font-size:14px\">B&agrave;i tập 1: Phản xạ bắt b&oacute;ng ở vị tr&iacute; bất k&igrave;</span></h3>\r\n\r\n<p><span style=\"font-size:14px\">&ndash; Chuẩn bị:</span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:14px\">HLV chuẩn bị 10 quả b&oacute;ng xếp ngang khu vực 16m50 v&agrave; song song với khung th&agrave;nh.</span></li>\r\n	<li><span style=\"font-size:14px\">Mỗi quả b&oacute;ng đặt c&aacute;ch nhau khoảng 30 cm.</span></li>\r\n	<li><span style=\"font-size:14px\">Cần 1 đến 2 người phục vụ.</span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:14px\">&ndash; C&aacute;c bước thực hiện:</span></p>\r\n\r\n<p><span style=\"font-size:14px\">B1: Cầu thủ thực hiện s&uacute;t lần lượt c&aacute;c quả b&oacute;ng từ tr&aacute;i qua phải hoặc ngược lại t&ugrave;y v&agrave;o ch&acirc;n thuận của người phục vụ. S&uacute;t b&oacute;ng v&agrave;o vị tr&iacute; bất k&igrave; trong khung th&agrave;nh.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">B2: Thủ m&ocirc;n thực hiện phản xạ bắt b&oacute;ng theo từng c&uacute; s&uacute;t của người phục vụ.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">B3: Khi thủ m&ocirc;n vừa bắt được tr&aacute;i b&oacute;ng th&igrave; người phục vụ lập tức s&uacute;t tr&aacute;i b&oacute;ng tiếp theo.</span></p>\r\n\r\n<h3><span style=\"font-size:14px\">B&agrave;i tập 2: Phản xạ bắt b&oacute;ng Tennis</span></h3>\r\n\r\n<p><span style=\"font-size:14px\">&ndash; Chuẩn bị:</span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:14px\">Vợt Tennis, nhiều b&oacute;ng Tennis.</span></li>\r\n	<li><span style=\"font-size:14px\">Cần tối thiểu 2 người phục vụ.</span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:14px\">&ndash; C&aacute;c bước thực hiện:</span></p>\r\n\r\n<p><span style=\"font-size:14px\">B1: 1 người phục vụ tiếp b&oacute;ng. 1 người cầm vợt Tennis đ&aacute;nh b&oacute;ng về ph&iacute;a cầu m&ocirc;n với lực vừa phải.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">B2: Thủ m&ocirc;n thực hiện phản xạ bắt b&oacute;ng.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">B3: Sau khi thủ m&ocirc;n vừa bắt b&oacute;ng th&igrave; lập tức đ&aacute;nh quả b&oacute;ng tiếp theo về ph&iacute;a khung th&agrave;nh.</span></p>', 65);

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
(2, 1, 2, 1),
(3, 5, 2, 1),
(4, 1, 4, 2),
(6, 1, 3, 1),
(7, 1, 2, 2),
(8, 1, 3, 2),
(9, 1, 4, 2),
(10, 1, 8, 2),
(11, 1, 10, 2),
(12, 1, 11, 2),
(13, 1, 12, 2),
(14, 2, 2, 2),
(16, 2, 4, 2),
(17, 2, 8, 2),
(18, 2, 10, 2),
(19, 2, 11, 2),
(20, 2, 12, 2),
(21, 3, 2, 2),
(22, 3, 3, 2),
(24, 3, 8, 2),
(25, 3, 10, 2),
(26, 3, 11, 2),
(27, 3, 12, 2),
(28, 4, 2, 2),
(29, 4, 3, 2),
(30, 4, 4, 2),
(31, 4, 8, 2),
(33, 4, 10, 2),
(36, 10, 19, 8),
(38, 10, 21, 8),
(40, 10, 23, 8),
(42, 6, 2, 2),
(43, 6, 3, 2),
(44, 6, 10, 2),
(45, 6, 8, 2),
(46, 6, 10, 2),
(48, 6, 12, 2),
(53, 7, 32, 7),
(56, 8, 2, 2),
(57, 8, 3, 2),
(58, 8, 4, 2),
(59, 8, 8, 2),
(60, 8, 10, 2),
(61, 8, 11, 2),
(62, 8, 12, 2),
(63, 9, 4, 2),
(64, 9, 8, 2),
(65, 9, 10, 2),
(66, 9, 11, 2),
(67, 9, 19, 2),
(68, 9, 30, 2),
(69, 9, 31, 2),
(70, 10, 2, 2),
(71, 10, 3, 2),
(72, 10, 4, 2),
(73, 10, 8, 2),
(74, 10, 10, 2),
(75, 10, 11, 2),
(76, 10, 12, 2),
(77, 11, 2, 2),
(103, 4, 11, 2),
(104, 8, 28, 8),
(105, 8, 30, 8),
(106, 7, 18, 7),
(107, 7, 24, 7),
(108, 8, 18, 7),
(109, 8, 24, 7),
(110, 5, 20, 7),
(111, 5, 22, 7),
(114, 13, 23, 7),
(115, 13, 25, 7),
(118, 5, 24, 7),
(124, 12, 12, 2);

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
(1, 'Chạy nhanh', '<p>Chạy như Salah</p>'),
(2, 'Đánh đầu', '<p>Đ&aacute;nh đầu như Firmino</p>'),
(3, 'Lãnh đạo', '<p>L&atilde;nh đạo như Kloop</p>'),
(4, 'Tổ chức trận đấu', '<p>Tổ chức trận đấu như Milner &amp; Henderson</p>');

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
  `GioLuyenTap` time DEFAULT NULL,
  `CaLuyenTap` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DiaDiem` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lichluyentap`
--

INSERT INTO `lichluyentap` (`id`, `NgayLuyenTap`, `GioLuyenTap`, `CaLuyenTap`, `DiaDiem`) VALUES
(1, '2018-06-06', '08:00:00', 'Ca sáng', 'Sân tập A'),
(2, '2018-06-24', '08:00:00', 'Ca sáng', 'Sân tập B'),
(3, '2018-06-14', '08:00:00', 'Ca sáng', 'Sân tập B'),
(7, '2018-07-15', '08:00:00', 'Ca sáng', 'Sân tập A'),
(8, '2018-07-10', '08:00:00', 'Ca sáng', 'Sân tập A'),
(9, '2018-07-15', '13:30:00', 'Ca chiều', 'Sân tập A');

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
(14, 'DuBi2', '123456', 'M.Sane', 'cauthu', 'sane@gmail.com', NULL, NULL, NULL, NULL, NULL),
(15, 'truongminh', '123456', 'Trường Minh', 'admin', 'truongminh@gmail.com', '1996-08-29', 'Việt Nam', 0, 'Hồ Chí Minh', '1529841242Wallpaper2.jpg');

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
(2, 4),
(3, 3),
(4, 2),
(5, 5),
(7, 1);

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
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `TieuDe` text,
  `TomTat` text,
  `NoiDung` longtext,
  `Hinh` varchar(255) DEFAULT NULL,
  `NgayDang` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `TieuDe`, `TomTat`, `NoiDung`, `Hinh`, `NgayDang`) VALUES
(2, 'Ba Lan không chỉ có Lewandowski', '<p>&quot;Lewan l&agrave; thủ lĩnh t&agrave;i năng v&agrave; l&agrave; một trong những cầu thủ xuất sắc nhất thế giới nhưng c&aacute;c cầu thủ c&ograve;n lại của ch&uacute;ng t&ocirc;i cũng rất đ&aacute;ng gờm.&quot; HLV Ba Lan ph&aacute;t biểu.</p>', '<p>Ai cũng biết Robert Lewandowski l&agrave; c&acirc;y săn b&agrave;n h&agrave;ng đầu Ch&acirc;u &Acirc;u trong những năm gần đ&acirc;y n&ecirc;n khi nh&igrave;n v&agrave;o đội tuyển&nbsp;<a href=\"http://www.bongda.com.vn/Ba+Lan-search/\" target=\"_blank\">Ba Lan</a>, người h&acirc;m mộ chỉ thấy anh l&agrave; cầu thủ nổi bật nhất. HLV Nawalka đ&atilde; cố gắng k&eacute;o sự ch&uacute; &yacute; của mọi người bớt khỏi cầu thủ n&agrave;y, &ocirc;ng cho rằng&nbsp;<strong>&lsquo;Đại b&agrave;ng trắng&rsquo; c&ograve;n rất nhiều cầu thủ đ&aacute;ng gờm kh&aacute;c</strong>.</p>\r\n\r\n<p><img alt=\"Ba Lan không chỉ có Lewandowski - Bóng Đá\" src=\"http://media.bongda.com.vn/files/hoanghai.nguyen/2018/06/19/glik-1-1653.jpg\" style=\"height:365px; width:648px\" /></p>\r\n\r\n<h2>&nbsp;Glik l&agrave; chốt chặn đ&aacute;ng tin cậy ở h&agrave;ng ph&ograve;ng ngự.</h2>\r\n\r\n<p>Sự chuẩn bị của Ba Lan trước&nbsp;<a href=\"http://www.bongda.com.vn/22h00-ngay-19-06-ba-lan-vs-senegal-ki-thuat-dau-suc-manh-d450759.html\" target=\"_blank\">trận đấu gặp Senegal</a>&nbsp;đang rất su&ocirc;n sẻ. Vấn đề duy nhất họ gặp phải l&agrave; chấn thương lưng của Kamil Glik &ndash; hậu vệ tốt nhất của họ trong l&uacute;c tập luyện. Nhiều khả năng trung vệ của Monaco sẽ vắng mặt trong trận tranh t&agrave;i n&agrave;y nhưng HLV của Ba Lan cho rằng anh sẽ kịp b&igrave;nh phục.</p>\r\n\r\n<p><a href=\"http://www.bongda.com.vn/truoc-dai-chien-ba-lan-thuyen-truong-senegal-tang-tro-cung-len-tan-may-xanh-d450800.html\">Trước đại chiến Ba Lan, thuyền trưởng Senegal t&acirc;ng tr&ograve; cưng l&ecirc;n tận m&acirc;y xanh</a></p>\r\n\r\n<p><a href=\"http://www.bongda.com.vn/22h00-ngay-19-06-ba-lan-vs-senegal-ki-thuat-dau-suc-manh-d450759.html\">22h00 ng&agrave;y 19/06, Ba Lan vs Senegal: Kĩ thuật đấu sức mạnh</a></p>\r\n\r\n<p>Ngo&agrave;i ra ở h&agrave;ng ph&ograve;ng ngự họ cũng c&oacute; sự g&oacute;p mặt của Łukasz Piszczek (Dortmund), hậu vệ c&aacute;nh phải vẫn giữ được phong độ tốt của m&igrave;nh từ khi gia nhập đội b&oacute;ng của Đức từ năm 2010. Sự chắc chắn trong ph&ograve;ng ngự của anh đ&atilde; khiến CLB n&agrave;y&nbsp;k&iacute; hợp đồng với&nbsp;anh tới 2020.</p>\r\n\r\n<p><img alt=\"Ba Lan không chỉ có Lewandowski - Bóng Đá\" src=\"http://media.bongda.com.vn/files/hoanghai.nguyen/2018/06/19/skysports-poland-arsenal_4323563-1654.jpg\" style=\"height:432px; width:768px\" /></p>\r\n\r\n<h2>&nbsp;Ba Lan c&oacute; hai thủ m&ocirc;n giỏi l&agrave; Szczesny v&agrave;&nbsp;Fabianski.</h2>\r\n\r\n<p>Trước khung th&agrave;nh, Ba Lan sở hữu kh&ocirc;ng chỉ một hay hai thủ m&ocirc;n rất xuất sắc l&agrave; Fabianski (Swansea) v&agrave; Szczesny (Juventus). Fabianski đ&atilde; c&oacute; một m&agrave;n tr&igrave;nh diễn rất ấn tượng ở Premier League m&ugrave;a giải qua d&ugrave; CLB của anh xuống hạng. Kh&ocirc;ng thủ th&agrave;nh n&agrave;o c&oacute; số lần cứu thua nhiều hơn anh (137).<br />\r\nTrong khi người g&aacute;c đền của Juve cũng c&oacute; tới 14/20 trận ở mọi giải đấu giữ sạch lưới cho CLB m&igrave;nh d&ugrave; phải chia sẻ vị tr&iacute; với Gianluigi Buffon.</p>\r\n\r\n<p>Ở h&agrave;ng tiền vệ, Jakub Blaszczykowski (Wolfburg) sẽ c&oacute; lần thứ 100 kho&aacute;c &aacute;o đội tuyển quốc gia. Tuy m&ugrave;a giải qua cầu thủ n&agrave;y rất hiếm khi được ra s&acirc;n ở CLB nhưng Ba Lan vẫn rất cần kinh nghiệm qu&iacute; b&aacute;u của anh.</p>\r\n\r\n<p><img alt=\"Ba Lan không chỉ có Lewandowski - Bóng Đá\" src=\"http://media.bongda.com.vn/files/hoanghai.nguyen/2018/06/19/piotr-zielinski-controls-the-ball-during-the-international-friendly-match-1655.jpg\" style=\"height:409px; width:615px\" /></p>\r\n\r\n<h2>&nbsp;Piotr Zielinski đang được Liverpool r&aacute;o riết săn đ&oacute;n.</h2>\r\n\r\n<p>Hỗ trợ cho&nbsp;<a href=\"http://www.bongda.com.vn/Lewandowski-search/\" target=\"_blank\">Lewandowski</a>&nbsp;ở h&agrave;ng c&ocirc;ng sẽ l&agrave; cầu thủ Piotr Zielinski của Napoli. Cầu thủ 24 tuổi người Ba Lan l&agrave; một mẫu tiền vệ tuyệt vời. Anh được xem l&agrave; thủ lĩnh của&nbsp;tuyến giữa&nbsp;khi thể hiện được lối chơi s&aacute;ng tạo v&agrave; hỗ trợ đồng đội hết m&igrave;nh. Hiện Zielinski đang được Liverpool li&ecirc;n hệ.</p>\r\n\r\n<p>V&agrave; nếu Ba Lan cần một người s&aacute;t c&aacute;nh cạnh tiền đạo Bayern Munich th&igrave; đ&atilde; c&oacute; trung phong Arkadiusz Milik. Trong m&ugrave;a giải qua ở Napoli, Milik lại gặp v&ocirc; v&agrave;n kh&oacute; khăn v&igrave; chấn thương nhưng nếu đ&aacute; đ&uacute;ng phong độ của m&igrave;nh anh sẽ rất đ&aacute;ng sợ với khả năng dứt điểm cực tốt của m&igrave;nh.</p>', '1529412091piotr-zielinski-controls-the-ball-during-the-international-friendly-match-1655.jpg', '2018-06-19'),
(3, 'World Cup 2018 là một giải đấu kì lạ!', '<p>Giải đấu b&oacute;ng đ&aacute; lớn nhất năm nay mới chỉ chưa đi hết một v&ograve;ng đấu đầu ti&ecirc;n, nhưng c&oacute; vẻ n&oacute; đ&atilde; đem đến cho nhiều người sự bất ngờ kh&ocirc;ng thể tả.</p>', '<p>Hệ thống ph&acirc;n cấp ở&nbsp;c&aacute;c giải đấu b&oacute;ng đ&aacute;&nbsp;vẫn thường được ban tổ chức giải đấu quyết định khi đưa ra 4 nh&oacute;m kh&aacute;c nhau, v&agrave; tr&ecirc;n thực tế, chẳng ai nghi ngờ việc&nbsp;<a href=\"http://www.bongda.com.vn/brazil-search/\" target=\"_blank\">Brazil</a>, Đức, Argentina lại c&ugrave;ng đẳng cấp với Thuỵ Sĩ, Mexico hay Iceland... N&oacute;i như vậy để ch&uacute;ng ta hiểu được tại sao giải đấu năm nay lại l&agrave; một giải đấu k&igrave; lạ.</p>\r\n\r\n<p><img alt=\"World 2018 tại nước Nga thật kì lạ! - Bóng Đá\" src=\"http://media.bongda.com.vn/files/toan.vu/2018/06/19/sport-preview-golden-boot-1451.jpg\" style=\"height:420px; width:630px\" /></p>\r\n\r\n<h2>&nbsp;Gi&aacute; trị của 3 ng&ocirc;i sao n&agrave;y c&oacute; thể nhiều hơn cả một đội h&igrave;nh tại World Cup.</h2>\r\n\r\n<p>Trong lịch sử của c&aacute;c v&ograve;ng chung kết&nbsp;<a href=\"http://www.bongda.com.vn/world+cup+2018-search/\" target=\"_blank\">World Cup</a>, dĩ nhi&ecirc;n l&agrave; vẫn c&oacute; những bất ngờ như Hungary h&ugrave;ng mạnh vẫn bị T&acirc;y Đức đ&aacute;nh bại 3-2 ở trận chung kết năm 1954, d&ugrave; trước đ&oacute; 2 đội đ&atilde; gặp nhau ở v&ograve;ng bảng v&agrave; tỉ số khi đ&oacute; l&agrave; 8-3 cho đội b&oacute;ng của Ferenc Puskas. Nhưng nếu chỉ t&iacute;nh trong một giải đấu th&igrave; trước giờ chưa c&oacute; một k&igrave; đại hội n&agrave;o &quot;kh&oacute; hiểu&quot; như năm nay.</p>\r\n\r\n<p><a href=\"http://www.bongda.com.vn/bi-an-chan-thuong-salah-tat-ca-deu-ngo-ngang-d450855.html\">B&iacute; ẩn chấn thương Salah: Tất cả đều ngỡ ng&agrave;ng!</a></p>\r\n\r\n<p><a href=\"http://www.bongda.com.vn/thua-mexico-tuyen-duc-gian-lay-truyen-thong-d450812.html\">Thua Mexico, tuyển Đức &#39;giận lẫy&#39; truyền th&ocirc;ng</a></p>\r\n\r\n<p>M&agrave;n &quot;hạ s&aacute;t&quot; Ả Rập X&ecirc; &Uacute;t của chủ nh&agrave; Nga ho&aacute; ra lại l&agrave; một sự &quot;giả dối&quot; với con mắt người h&acirc;m mộ. Bởi nếu chỉ t&iacute;nh 8 đội tuyển được đ&aacute;nh gi&aacute; cao nhất l&agrave; Brazil,&nbsp;<a href=\"http://www.bongda.com.vn/T%C3%A2y+Ban+Nha-search/\" target=\"_blank\">T&acirc;y Ban Nha</a>, Đức, Ph&aacute;p, Anh, Bỉ, Argentina, Bồ Đ&agrave;o Nha, th&igrave; kh&ocirc;ng ai trong số n&agrave;y c&oacute; m&agrave;n tr&igrave;nh diễn qu&aacute; ấn tượng, thậm ch&iacute; họ c&ograve;n bị l&ocirc;i ra l&agrave;m tr&ograve; cười sau khi trận đấu với c&aacute;c đối thủ chiếu dưới kết th&uacute;c.</p>\r\n\r\n<p><img alt=\"World 2018 tại nước Nga thật kì lạ! - Bóng Đá\" src=\"http://media.bongda.com.vn/files/toan.vu/2018/06/19/15292712627954-1455.jpg\" style=\"height:370px; width:629px\" /></p>\r\n\r\n<h2>&nbsp;Đ&atilde; rất l&acirc;u rồi Brazil mới phải kh&oacute; khăn trước những đội b&oacute;ng nhỏ như vậy.</h2>\r\n\r\n<p>Đội tuyển&nbsp;<a href=\"http://www.bongda.com.vn/b%E1%BB%89-search/\" target=\"_blank\">Bỉ</a>&nbsp;thắng 3-0 trước Panama nhưng ai cũng biết họ gần như bế tắc cả 45 ph&uacute;t đầu ti&ecirc;n, v&agrave; nếu kh&ocirc;ng c&oacute; Dries Mertens bỗng ngẫu hứng với c&uacute; dứt điểm tuyệt đẹp th&igrave; kh&ocirc;ng ai biết Bỉ c&oacute; thể l&agrave;m c&aacute;ch n&agrave;o m&agrave; xuy&ecirc;n ph&aacute; được h&agrave;ng ph&ograve;ng ngự của Roman Torres v&agrave; c&aacute;c đồng đội.</p>\r\n\r\n<p>Trong khi đ&oacute; Ph&aacute;p v&agrave;&nbsp;<a href=\"http://www.bongda.com.vn/5-diem-nhan-tunisia-1-2-anh-khi-var-khong-phai-la-dong-minh-d450795.html\" target=\"_blank\">Anh phải thực sự h&uacute; v&iacute;a v&igrave; đối thủ</a>, họ cần nhờ đến những t&igrave;nh huống may mắn hoặc cuối trận mới c&oacute; thể kết liễu được đối thủ. C&ograve;n Argentina v&agrave; Brazil đ&atilde; để lại một sự thất vọng c&ugrave;ng cực khi chỉ kiếm được 1 điểm trong thế trận chẳng biết chơi b&oacute;ng thế n&agrave;o.</p>\r\n\r\n<p>Thậm ch&iacute; đương kim v&ocirc; địch thế giới&nbsp;<a href=\"http://www.bongda.com.vn/%C4%91%E1%BB%A9c-search/\" target=\"_blank\">Đức</a>&nbsp;c&ograve;n &quot;chết gục&quot; trước một Mexico kh&ocirc;ng được đ&aacute;nh gi&aacute; cao. Nếu điều n&agrave;y được n&oacute;i ở trước giải đấu c&oacute; lẽ kh&ocirc;ng c&oacute; ai tin trừ người d&acirc;n Mexico. Bởi Đức kh&ocirc;ng giống với 2 &ocirc;ng lớn ở Nam Mỹ, họ lu&ocirc;n c&oacute; sự ổn định rất cao v&agrave; c&aacute;c tuyển thủ đều l&agrave; những người qu&aacute; quen thuộc với kh&aacute;n giả.</p>\r\n\r\n<p><img alt=\"World 2018 tại nước Nga thật kì lạ! - Bóng Đá\" src=\"http://media.bongda.com.vn/files/toan.vu/2018/06/19/germany-mexico-lozano-earthquake-1459.jpg\" style=\"height:351px; width:630px\" /></p>\r\n\r\n<h2>&nbsp;Thậm ch&iacute; ĐKVĐ Đức c&ograve;n thất bại &ecirc; chề trước Mexico, điều chưa bao giờ xảy ra trước đ&oacute;.</h2>\r\n\r\n<p>Những kết quả bất ngờ n&agrave;y đ&atilde; cho thấy, kh&ocirc;ng phải c&aacute;c đội b&oacute;ng lớn đ&atilde; yếu đi m&agrave; do những kẻ &quot;l&oacute;t đường&quot; đ&atilde; lột x&aacute;c với c&aacute;ch l&agrave;m b&oacute;ng đ&aacute; trong nhiều năm qua. Giờ đ&acirc;y World Cup c&oacute; vẻ tương đồng với giải Ngoại hạng Anh, khi m&agrave; bất cứ đội b&oacute;ng n&agrave;o cũng c&oacute; thể bị đ&aacute;nh bại hoặc cầm ch&acirc;n bởi những c&aacute;i t&ecirc;n m&agrave; kh&ocirc;ng ai d&aacute;m nghĩ họ sẽ l&agrave;m được.</p>\r\n\r\n<p>C&oacute; thể n&oacute;i, đ&acirc;y l&agrave; một t&iacute;n hiệu đ&aacute;ng mừng với sự ph&aacute;t triển chung của m&ocirc;n thể thao n&agrave;y. Những đội b&oacute;ng nhỏ đ&atilde; thực sự đi đ&uacute;ng hướng trong kế hoạch ph&aacute;t triển kỹ năng chuy&ecirc;n m&ocirc;n. v&agrave; như vậy sự cạnh tranh cũng sẽ được đưa l&ecirc;n một tầm mới. C&aacute;c giải đấu sẽ kh&ocirc;ng c&ograve;n l&agrave; cuộc chơi ri&ecirc;ng của những đội b&oacute;ng quen thuộc với kh&aacute;n giả m&agrave; sẽ trải đều cơ hội cho tất cả những th&agrave;nh vi&ecirc;n kh&aacute;c.</p>\r\n\r\n<p><img alt=\"World 2018 tại nước Nga thật kì lạ! - Bóng Đá\" src=\"http://media.bongda.com.vn/files/toan.vu/2018/06/19/iceland-team-1502.jpg\" style=\"height:419px; width:630px\" /></p>\r\n\r\n<h2>&nbsp;Trước đ&oacute; kh&ocirc;ng nhiều người để &yacute; đến đội tuyển Iceland.</h2>\r\n\r\n<p>Th&ecirc;m nữa, b&oacute;ng đ&aacute; ph&aacute;t triển ở một khu vực nhất định n&agrave;o đ&oacute; cũng k&eacute;o theo người h&acirc;m mộ, v&agrave; d&acirc;n tr&iacute; từ đ&oacute; cũng sẽ được tăng l&ecirc;n, &iacute;t nhất ở kh&iacute;a cạnh giải tr&iacute;. Ngo&agrave;i ra, c&aacute;i lợi của b&oacute;ng đ&aacute; về những sự ph&acirc;n biệt sắc tộc hay quan điểm ch&iacute;nh trị c&oacute; khi cũng sẽ dung ho&agrave; với m&ocirc;n thể thao n&agrave;y với người h&acirc;m mộ.</p>\r\n\r\n<p><strong>World Cup 2018 l&agrave; một giải đấu k&igrave; lạ</strong>&nbsp;nhưng n&oacute; lại mang đến một điều t&iacute;ch cực lớn lao cho sự ph&aacute;t triển chung của b&oacute;ng đ&aacute;. Trước mắt ch&uacute;ng ta vẫn c&ograve;n rất nhiều trận đấu hấp dẫn, v&agrave; h&atilde;y c&ugrave;ng thưởng thức trọn vẹn để thấy được sự cuốn h&uacute;t của n&oacute;!</p>', '1529412303iceland-team-1502.jpg', '2018-06-19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tiso`
--

CREATE TABLE `tiso` (
  `id` int(11) NOT NULL,
  `idCauLacBo` int(11) NOT NULL,
  `idTranDau` int(11) NOT NULL,
  `idGiaiDau` int(11) NOT NULL,
  `TiSo` int(3) DEFAULT NULL,
  `TrangThai` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tiso`
--

INSERT INTO `tiso` (`id`, `idCauLacBo`, `idTranDau`, `idGiaiDau`, `TiSo`, `TrangThai`) VALUES
(1, 2, 1, 1, NULL, NULL),
(2, 1, 1, 1, NULL, NULL),
(3, 2, 2, 1, 1, 0),
(4, 4, 2, 1, 1, 0),
(5, 2, 3, 1, 3, 1),
(6, 4, 3, 1, 1, -1),
(7, 3, 4, 1, NULL, NULL),
(8, 2, 4, 1, NULL, NULL),
(9, 1, 5, 1, NULL, NULL),
(10, 2, 5, 1, NULL, NULL),
(11, 1, 6, 1, NULL, NULL),
(12, 4, 6, 1, NULL, NULL),
(13, 2, 7, 1, NULL, NULL),
(14, 3, 7, 1, NULL, NULL),
(15, 3, 8, 1, NULL, NULL),
(16, 1, 8, 1, NULL, NULL),
(17, 4, 9, 1, NULL, NULL),
(18, 3, 9, 1, NULL, NULL),
(19, 1, 10, 1, NULL, NULL),
(20, 2, 10, 1, NULL, NULL);

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
  `idDoiHinh` int(11) DEFAULT NULL,
  `idChienThuat` int(11) DEFAULT NULL,
  `TranDauCuaCLB` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trandau`
--

INSERT INTO `trandau` (`id`, `VongDau`, `NgayThiDau`, `GioThiDau`, `DiaDiem`, `idDoiHinh`, `idChienThuat`, `TranDauCuaCLB`) VALUES
(1, 1, '2018-06-01', '16:00:00', 'Anfield', 2, 4, NULL),
(2, 2, '2018-06-05', '02:00:00', 'Sân khách', 2, 3, NULL),
(3, 3, '2018-06-10', '09:00:00', 'Anfield Stadium', 2, 1, NULL),
(4, 4, '2018-06-15', '07:00:00', 'Old Stranford', 3, 4, NULL),
(5, 5, '2018-06-19', '10:00:00', 'Mỹ Đình Stadium', 1, 1, NULL),
(6, 6, '2018-06-23', '17:00:00', 'Emirates', NULL, NULL, NULL),
(7, 7, '2018-06-23', '17:00:00', 'Anfield', NULL, NULL, NULL),
(8, 8, '2018-06-23', '17:00:00', 'Old Trafford', NULL, NULL, NULL),
(9, 9, '2018-06-23', '17:00:00', 'Etihad', NULL, NULL, NULL),
(10, 10, '2018-06-23', '17:00:00', 'Emirates', NULL, NULL, NULL);

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
(1, 'Đội trưởng', '<p>Đeo băng đội trưởng</p>'),
(3, 'Phạt góc trái', '<p>Đ&aacute; phạt ngay g&oacute;c b&ecirc;n tr&aacute;i&nbsp;</p>'),
(4, 'Phạt góc phải', '<p>Đ&aacute; phạt ngay g&oacute;c b&ecirc;n phải</p>'),
(5, 'Đá Penalty', '<p>Đ&aacute; phạt tr&ecirc;n chấm 11m</p>'),
(6, 'Đá phạt gần', '<p>Đ&aacute; phạt ở cự li&nbsp;gần</p>'),
(7, 'Dự bị', '<p>Ngồi tr&ecirc;n ghế kế Huấn Luyện Vi&ecirc;n</p>'),
(8, 'Đá phạt xa', '<p>Đ&aacute; phạt ở cự li xa</p>'),
(9, 'Đội phó', '<p>Khi tr&ecirc;n s&acirc;n kh&ocirc;ng c&oacute; đội trưởng th&igrave; sẽ được đ&ocirc;n l&ecirc;n l&agrave;m đội trưởng</p>');

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
(1, 'GK', 'Thủ môn'),
(2, 'LB', 'Hậu vệ trái'),
(3, 'LCB', 'Trung vệ trái'),
(4, 'RCB', 'Trung vệ phải'),
(5, 'CB', 'Trung vệ'),
(6, 'RB', 'Hậu vệ phải'),
(7, 'CDM', 'Tiền vệ phòng ngự'),
(10, 'RCM', 'Tiền vệ trung tâm phải'),
(11, 'LM', 'Tiền vệ trái'),
(12, 'RM', 'Tiền vệ phải'),
(13, 'CAM', 'Tiền vệ tấn công'),
(14, 'SS', 'Hộ công'),
(15, 'LW', 'Tiền đạo trái'),
(16, 'RW', 'Tiền đạo phải'),
(17, 'Sub', 'Dự bị'),
(18, 'CF', 'Tiền đạo');

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
(10, 8, 10),
(11, 9, 15),
(12, 10, 16),
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
(8, 8, 10, 3),
(9, 9, 15, 3),
(10, 10, 16, 3),
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
(8, 10, 2),
(10, 15, 2),
(11, 16, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bangxephangclb`
--
ALTER TABLE `bangxephangclb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCauLacBo` (`idCauLacBo`);

--
-- Chỉ mục cho bảng `bangxephangclbgiaidau`
--
ALTER TABLE `bangxephangclbgiaidau`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idGiaiDau` (`idGiaiDau`),
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
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tiso`
--
ALTER TABLE `tiso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCauLacBo` (`idCauLacBo`),
  ADD KEY `idTranDau` (`idTranDau`),
  ADD KEY `idGiaiDau` (`idGiaiDau`);

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
-- AUTO_INCREMENT cho bảng `bangxephangclb`
--
ALTER TABLE `bangxephangclb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `bangxephangclbgiaidau`
--
ALTER TABLE `bangxephangclbgiaidau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `caulacbo`
--
ALTER TABLE `caulacbo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `giaotrinh_luyentap_cauthu`
--
ALTER TABLE `giaotrinh_luyentap_cauthu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT cho bảng `huanluyenvien`
--
ALTER TABLE `huanluyenvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `kynang`
--
ALTER TABLE `kynang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `phacdodieutri`
--
ALTER TABLE `phacdodieutri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `phongdo`
--
ALTER TABLE `phongdo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `vaitro`
--
ALTER TABLE `vaitro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `vaitro_cauthu_trandau`
--
ALTER TABLE `vaitro_cauthu_trandau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `vitri`
--
ALTER TABLE `vitri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
-- Các ràng buộc cho bảng `bangxephangclb`
--
ALTER TABLE `bangxephangclb`
  ADD CONSTRAINT `bangxephangclb_ibfk_1` FOREIGN KEY (`idCauLacBo`) REFERENCES `caulacbo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `bangxephangclbgiaidau`
--
ALTER TABLE `bangxephangclbgiaidau`
  ADD CONSTRAINT `bangxephangclbgiaidau_ibfk_1` FOREIGN KEY (`idGiaiDau`) REFERENCES `giaidau` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bangxephangclbgiaidau_ibfk_2` FOREIGN KEY (`idCauLacBo`) REFERENCES `caulacbo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `tiso_ibfk_2` FOREIGN KEY (`idTranDau`) REFERENCES `trandau` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tiso_ibfk_3` FOREIGN KEY (`idGiaiDau`) REFERENCES `giaidau` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
