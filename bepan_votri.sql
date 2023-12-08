-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 08, 2023 lúc 02:33 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bepan_votri`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `id_monan` int(2) NOT NULL,
  `ngaydat` datetime NOT NULL,
  `ngaylenmon` datetime NOT NULL,
  `soluong` int(11) NOT NULL,
  `idtaikhoan` int(2) NOT NULL,
  `idgiohang` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietnguyenlieu`
--

CREATE TABLE `chitietnguyenlieu` (
  `idnguyenlieu` int(2) NOT NULL,
  `id_monan` int(2) NOT NULL,
  `soluongsudung` int(10) NOT NULL,
  `donvitinh` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietnguyenlieu`
--

INSERT INTO `chitietnguyenlieu` (`idnguyenlieu`, `id_monan`, `soluongsudung`, `donvitinh`) VALUES
(2, 1, 200, 'gram'),
(3, 1, 2, 'quả'),
(4, 1, 100, 'gram'),
(27, 1, 1, 'quả'),
(5, 1, 100, 'gram'),
(6, 1, 100, 'gram'),
(9, 1, 10, 'gram'),
(7, 2, 250, 'gram'),
(8, 2, 200, 'gram'),
(29, 2, 100, 'gram'),
(1, 3, 250, 'gram'),
(10, 3, 200, 'gram'),
(11, 4, 1, 'trái'),
(12, 4, 200, 'gram'),
(13, 5, 200, 'gram'),
(14, 5, 200, 'gram'),
(14, 6, 200, 'gram'),
(15, 6, 200, 'gram'),
(16, 7, 200, 'gram'),
(17, 7, 200, 'gram'),
(17, 8, 200, 'gram'),
(18, 8, 100, 'gram'),
(46, 8, 150, 'gram'),
(20, 9, 300, 'gram'),
(21, 9, 3, 'tép'),
(22, 10, 300, 'gram'),
(23, 10, 2, 'quả'),
(24, 11, 200, 'gram'),
(25, 11, 200, 'gram'),
(11, 12, 2, 'Trái'),
(23, 12, 2, 'Quả'),
(26, 13, 300, 'gram'),
(27, 13, 1, 'Quả'),
(45, 13, 1, 'Trái'),
(28, 14, 200, 'gram'),
(29, 14, 200, 'gram'),
(2, 15, 500, 'gram'),
(45, 15, 2, 'Quả'),
(36, 15, 2, 'muỗng'),
(12, 16, 250, 'gram'),
(28, 16, 2, 'Quả'),
(36, 16, 1, 'Muỗng canh '),
(1, 17, 500, 'gram'),
(30, 17, 200, 'gram'),
(45, 17, 2, 'Quả'),
(12, 18, 500, 'gram'),
(30, 18, 200, 'gram'),
(45, 18, 2, 'Quả'),
(31, 19, 500, 'gram'),
(32, 19, 300, 'gram'),
(45, 19, 2, 'Quả'),
(33, 20, 500, 'gram'),
(45, 20, 2, 'Quả'),
(36, 20, 2, 'Muỗng canh'),
(34, 21, 500, 'gram'),
(35, 21, 1, 'Củ'),
(36, 21, 2, 'Muỗng canh'),
(1, 22, 500, 'gram'),
(36, 22, 1, 'Muỗng canh'),
(23, 23, 2, 'Quả'),
(17, 24, 500, 'gram'),
(37, 24, 1, 'Củ'),
(45, 24, 2, 'Quả'),
(38, 25, 500, 'gram'),
(36, 25, 1, 'Muỗng canh'),
(45, 25, 1, 'Muỗng cà phê'),
(39, 26, 2, 'Miếng'),
(23, 26, 1, 'Quả'),
(47, 26, 1, 'Muỗng canh'),
(48, 27, 200, 'gram'),
(47, 27, 1, 'Muỗng canh'),
(23, 27, 1, 'Quả'),
(1, 28, 200, 'gram'),
(23, 28, 1, 'quả'),
(47, 28, 1, 'Muỗng canh'),
(12, 29, 250, 'gram'),
(41, 29, 1, 'Muỗng canh'),
(44, 29, 2, 'Quả'),
(45, 29, 1, 'Quả'),
(1, 30, 1, 'Kg'),
(35, 30, 1, 'Củ'),
(1, 31, 1, 'Kg'),
(35, 31, 1, 'Củ'),
(49, 31, 1, 'Kg'),
(37, 32, 250, 'gram'),
(43, 32, 500, 'gram'),
(44, 32, 2, 'Quả'),
(12, 33, 100, 'gram'),
(50, 33, 50, 'gram'),
(51, 33, 1, 'ổ'),
(53, 33, 20, 'gram'),
(5, 34, 100, 'gram'),
(52, 34, 200, 'gram'),
(9, 34, 10, 'gram'),
(12, 34, 150, 'gram'),
(36, 34, 3, 'muỗng'),
(54, 35, 250, 'gram'),
(17, 35, 200, 'gram'),
(50, 35, 50, 'gram'),
(55, 35, 30, 'gram'),
(9, 36, 15, 'gram'),
(16, 36, 20, 'gram'),
(18, 36, 15, 'gram'),
(25, 36, 150, 'gram'),
(52, 36, 250, 'gram'),
(56, 37, 250, 'gram'),
(5, 37, 50, 'gram'),
(9, 37, 20, 'gram'),
(18, 37, 15, 'gram'),
(25, 37, 200, 'gram'),
(5, 38, 100, 'gram'),
(7, 38, 20, 'gram'),
(12, 38, 150, 'gram'),
(16, 38, 50, 'gram'),
(52, 38, 200, 'gram'),
(5, 39, 100, 'gram'),
(12, 39, 100, 'gram'),
(14, 39, 100, 'gram'),
(16, 39, 20, 'gram'),
(57, 39, 150, 'gram'),
(12, 40, 150, 'gram'),
(16, 40, 100, 'gram'),
(30, 40, 2, 'quả'),
(58, 40, 100, 'gram'),
(9, 41, 30, 'gram'),
(16, 41, 60, 'gram'),
(18, 41, 10, 'gram'),
(25, 41, 150, 'gram'),
(51, 41, 1, 'ổ'),
(5, 42, 70, 'gram'),
(12, 42, 100, 'gram'),
(16, 42, 70, 'gram'),
(52, 42, 150, 'gram'),
(59, 42, 100, 'gram'),
(5, 43, 70, 'gram'),
(12, 43, 180, 'gram'),
(16, 43, 40, 'gram'),
(9, 43, 30, 'gram'),
(60, 43, 200, 'gram'),
(2, 44, 100, 'gram'),
(5, 44, 100, 'gram'),
(12, 44, 100, 'gram'),
(52, 44, 150, 'gram'),
(61, 44, 50, 'gram'),
(3, 45, 200, 'gram'),
(9, 45, 50, 'gram'),
(23, 45, 3, 'quả'),
(3, 46, 50, 'gram'),
(4, 46, 30, 'gram'),
(5, 46, 20, 'gram'),
(6, 46, 10, 'gram'),
(9, 46, 10, 'gram'),
(62, 46, 150, 'gram'),
(15, 47, 150, 'gram'),
(16, 47, 50, 'gram'),
(55, 47, 50, 'gram'),
(65, 48, 150, 'gram'),
(66, 48, 100, 'gram'),
(9, 49, 50, 'gram'),
(67, 49, 150, 'gram'),
(68, 49, 150, 'gram'),
(69, 50, 150, 'gram'),
(12, 50, 100, 'gram');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietphieu`
--

CREATE TABLE `chitietphieu` (
  `idPhieu` int(11) NOT NULL,
  `id_monan` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `ngaylenmon` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietphieu`
--

INSERT INTO `chitietphieu` (`idPhieu`, `id_monan`, `soluong`, `ngaylenmon`) VALUES
(3130188, 8, 1, '2023-12-08 00:00:00'),
(3790059, 13, 2, '2023-12-08 00:00:00'),
(3790059, 3, 1, '2023-12-08 00:00:00'),
(3942741, 3, 1, '2023-12-08 00:00:00'),
(3942741, 8, 1, '2023-12-08 00:00:00'),
(3761277, 17, 2, '2023-12-09 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietthucdon`
--

CREATE TABLE `chitietthucdon` (
  `ichitietthucdon` int(2) NOT NULL,
  `idthucdon` int(2) NOT NULL,
  `id_monan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietthucdon`
--

INSERT INTO `chitietthucdon` (`ichitietthucdon`, `idthucdon`, `id_monan`) VALUES
(1, 1, 1),
(2, 1, 6),
(3, 1, 11),
(4, 2, 2),
(5, 2, 7),
(6, 2, 12),
(7, 3, 3),
(8, 3, 8),
(9, 3, 13),
(10, 4, 4),
(11, 4, 9),
(12, 4, 17);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `idgiohang` int(2) NOT NULL,
  `ngaydat` datetime NOT NULL,
  `tongtien` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`idgiohang`, `ngaydat`, `tongtien`) VALUES
(328763, '2023-12-07 22:51:13', 0),
(336551, '2023-12-07 23:11:43', 0),
(338708, '2023-12-08 00:51:23', 0),
(354558, '2023-12-07 23:06:21', 0),
(355814, '2023-12-07 10:26:34', 0),
(359706, '2023-12-07 10:14:50', 0),
(371332, '2023-12-07 22:54:57', 0),
(385158, '2023-12-07 22:58:46', 0),
(390905, '2023-12-06 23:14:10', 0),
(397339, '2023-12-07 10:21:33', 0),
(3120502, '2023-12-07 23:21:46', 0),
(3127435, '2023-12-07 10:28:49', 0),
(3131152, '2023-12-07 23:09:50', 0),
(3135875, '2023-12-07 23:08:25', 0),
(3179965, '2023-12-07 23:10:27', 0),
(3196967, '2023-12-07 10:34:09', 0),
(3222057, '2023-12-07 10:45:40', 0),
(3229311, '2023-12-07 22:48:48', 0),
(3244975, '2023-12-07 10:33:12', 0),
(3264812, '2023-12-07 22:52:07', 0),
(3267224, '2023-12-07 23:20:29', 0),
(3290470, '2023-12-07 10:47:06', 0),
(3305704, '2023-12-08 00:45:06', 0),
(3310411, '2023-12-07 23:33:04', 0),
(3312210, '2023-12-07 10:18:13', 0),
(3315222, '2023-12-07 11:08:44', 0),
(3328573, '2023-12-07 10:19:13', 0),
(3362707, '2023-12-07 23:13:14', 0),
(3389769, '2023-12-06 21:35:13', 0),
(3431203, '2023-12-07 23:43:44', 0),
(3433513, '2023-12-06 23:01:39', 0),
(3514118, '2023-12-07 10:47:42', 0),
(3547795, '2023-12-07 23:11:17', 0),
(3620117, '2023-12-06 23:15:12', 0),
(3655015, '2023-12-07 23:41:27', 0),
(3656668, '2023-12-07 22:53:52', 0),
(3657623, '2023-12-07 23:06:05', 0),
(3687171, '2023-12-07 10:45:19', 0),
(3709054, '2023-12-07 11:09:07', 0),
(3740617, '2023-12-07 23:36:26', 0),
(3753170, '2023-12-07 23:40:05', 0),
(3781061, '2023-12-07 11:24:56', 0),
(3782188, '2023-12-07 23:15:55', 0),
(3787646, '2023-12-07 22:51:56', 0),
(3800194, '2023-12-06 23:11:10', 0),
(3811561, '2023-12-07 22:45:33', 0),
(3815748, '2023-12-07 11:26:54', 0),
(3840280, '2023-12-07 22:58:13', 0),
(3853969, '2023-12-06 22:59:17', 0),
(3866374, '2023-12-07 23:18:20', 0),
(3876428, '2023-12-08 00:50:48', 0),
(3923684, '2023-12-07 23:07:47', 0),
(3931301, '2023-12-08 08:20:11', 0),
(3932052, '2023-12-08 00:50:33', 0),
(3934283, '2023-12-07 23:02:30', 0),
(3943421, '2023-12-08 00:49:24', 0),
(3954707, '2023-12-07 10:16:00', 0),
(3986736, '2023-12-07 23:14:30', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaimonan`
--

CREATE TABLE `loaimonan` (
  `id_loaimonan` int(2) NOT NULL,
  `tenloaimonan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaimonan`
--

INSERT INTO `loaimonan` (`id_loaimonan`, `tenloaimonan`) VALUES
(1, 'Món canh'),
(2, 'Món xào'),
(3, 'Món kho'),
(4, 'Món chiên'),
(5, 'Món bánh'),
(6, 'Món hấp/luộc'),
(7, 'Món cơm'),
(8, 'Món Bún');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_thucdon`
--

CREATE TABLE `loai_thucdon` (
  `idloaithucdon` int(2) NOT NULL,
  `tenloaithucdon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_thucdon`
--

INSERT INTO `loai_thucdon` (`idloaithucdon`, `tenloaithucdon`) VALUES
(1, 'Thứ Hai'),
(2, 'Thứ Ba'),
(3, 'Thứ Tư'),
(4, 'Thứ Năm'),
(5, 'Thứ Sáu'),
(6, 'Thứ Bảy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monan`
--

CREATE TABLE `monan` (
  `id_monan` int(2) NOT NULL,
  `tenmonan` varchar(50) NOT NULL,
  `mota` varchar(300) NOT NULL,
  `hinhanh` varchar(150) NOT NULL,
  `gia` int(11) NOT NULL,
  `id_loaimonan` int(2) NOT NULL,
  `trangthai` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `monan`
--

INSERT INTO `monan` (`id_monan`, `tenmonan`, `mota`, `hinhanh`, `gia`, `id_loaimonan`, `trangthai`) VALUES
(1, 'Canh chua cá lóc', 'Canh chua cá lóc là một món ăn dân dã của Việt Nam, được nhiều người yêu thích. Món canh này có vị chua thanh của me, vị ngọt của cá lóc, vị cay của ớt và mùi thơm của các loại rau. Nguyên liệu chính của món canh này là cá lóc, me, cà chua, mồng tơi, dứa, giá đỗ, ớt. ', 'canhchuacaloc.jpg', 20000, 1, 0),
(2, 'Canh cua mồng tơi', 'Canh cua mồng tơi là một món canh ngon và bổ dưỡng, đặc biệt là vào mùa hè. Món canh này có vị ngọt thanh của cua đồng, vị mát của mồng tơi và mùi thơm của hành lá. Nguyên liệu chính của món canh này là cua đồng, mồng tơi, hành lá. ', 'canhcuamongtoi.jpg', 20000, 1, 0),
(3, 'Canh gà lá giang', 'Canh gà lá giang là một món ăn đặc sản của miền Tây Nam Bộ. Món canh này có vị chua cay của lá giang, vị ngọt của thịt gà và mùi thơm của hành lá. Nguyên liệu chính của món canh này là thịt gà, lá giang, hành lá. ', 'canhgalagiang.jpg', 20000, 1, 0),
(4, 'Canh khổ qua', 'Canh khổ qua là một món ăn thanh mát, giải nhiệt cho cơ thể. Món canh này có vị đắng của khổ qua, vị ngọt của thịt băm và mùi thơm của hành lá. Nguyên liệu chính của món canh này là khổ qua, thịt băm, hành lá.', 'canhkhoqua.jpg', 20000, 1, 0),
(5, 'Canh bí đỏ', 'Canh bí đỏ là một món ăn bổ dưỡng, tốt cho sức khỏe. Món canh này có vị ngọt của bí đỏ, vị bùi của đậu phộng và mùi thơm của hành lá. Nguyên liệu chính của món canh này là bí đỏ, đậu phộng, hành lá. ', 'canhbido.jpg', 20000, 1, 0),
(6, 'Canh bí đao', 'Canh bí đao là một món ăn thanh mát, giải nhiệt cho cơ thể. Món canh này có vị ngọt của bí đao, vị thanh của nước dừa và mùi thơm của hành lá. Nguyên liệu chính của món canh này là bí đao, nước dừa, hành lá.', 'canhbidao.jpg', 20000, 1, 0),
(7, 'Canh rau củ', 'Canh rau củ là một món ăn tổng hợp, có thể dùng kèm với nhiều loại rau củ khác nhau. Món canh này có vị ngọt của rau củ, vị đậm đà của gia vị và mùi thơm của hành lá. Nguyên liệu chính của món canh này là các loại rau củ tùy chọn.', 'canhraucu.jpg', 20000, 1, 0),
(8, 'Sườn xào chua ngọt', 'Sườn xào chua ngọt là một món ăn thơm ngon, hấp dẫn, được nhiều người yêu thích. Món ăn này có vị chua ngọt của nước sốt, vị thơm của sườn và mùi thơm của rau thơm. Nguyên liệu chính của món ăn này là sườn, cà chua, nước sốt chua ngọt, rau thơm.', 'suonxaochuangot.jpg', 45000, 2, 0),
(9, 'Rau muống xào', 'Rau muống xào là một món ăn dân dã, dễ làm nhưng rất ngon miệng. Món ăn này có vị ngọt của rau muống, vị thơm của tỏi và mùi thơm của rau thơm. Nguyên liệu chính của món ăn này là rau muống, tỏi, rau thơm. ', 'rmx.jpg', 30000, 2, 0),
(10, 'Bắp cải xào trứng', 'Bắp cải xào trứng là một món ăn đơn giản, dễ làm nhưng rất ngon miệng. Món ăn này có vị ngọt của bắp cải, vị thơm của trứng và mùi thơm của hành lá. Nguyên liệu chính của món ăn này là bắp cải, trứng, hành lá. ', 'bcxt.jpg', 30000, 2, 0),
(11, 'Bông bí xào thịt bò', 'Bông bí xào thịt bò là một món ăn dân dã, dễ làm nhưng rất ngon miệng. Món ăn này có vị ngọt của bông bí, vị thơm của thịt bò và mùi thơm của hành lá. Nguyên liệu chính của món ăn này là bông bí, thịt bò, hành lá. ', 'bbxtb.jpg', 30000, 2, 0),
(12, 'Khổ qua xào trứng', 'Khổ qua xào trứng là một món ăn thanh mát, giải nhiệt cho cơ thể. Món ăn này có vị đắng của khổ qua, vị thơm của trứng và mùi thơm của hành lá. Nguyên liệu chính của món ăn này là khổ qua, trứng, hành lá. ', 'kqxt.jpg', 30000, 2, 0),
(13, 'Mực xào dứa', 'Mực xào dứa là một món ăn thơm ngon, hấp dẫn, được nhiều người yêu thích. Món ăn này có vị ngọt của mực, vị chua thanh của dứa và mùi thơm của hành lá. Nguyên liệu chính của món ăn này là mực, dứa, hành lá. ', 'mxd.jpg', 35000, 2, 0),
(14, 'Lòng gà xào mướp', 'Lòng gà xào mướp là một món ăn có vị béo ngậy của lòng gà, vị ngọt của mướp và mùi thơm của hành lá. Nguyên liệu chính của món ăn này là lòng gà, mướp, hành lá.', 'lgxm.jpg', 30000, 2, 0),
(15, 'Cá lóc kho', 'Cá lóc kho là một món ăn dân dã, đậm đà hương vị, được nhiều người yêu thích. Món ăn này có vị ngọt của cá lóc, vị thơm của sả, ớt và mùi thơm của gia vị. Nguyên liệu chính của món ăn này là cá lóc, sả, ớt, gia vị. ', 'clk.jpg', 30000, 3, 0),
(16, 'Thịt kho tàu', 'Thịt kho tàu là một món ăn truyền thống của Việt Nam, được nhiều người yêu thích. Món ăn này có vị ngọt của thịt, vị béo của nước dừa và mùi thơm của hành lá. Nguyên liệu chính của món ăn này là thịt ba chỉ, nước dừa, hành lá. ', 'tkt.jpg', 30000, 3, 0),
(17, 'Gà xào xả ớt', 'Gà xào xả ớt là một món ăn thơm ngon, hấp dẫn, được nhiều người yêu thích. Món ăn này có vị thơm của xả, vị cay của ớt và mùi thơm của rau thơm. Nguyên liệu chính của món ăn này là thịt gà, sả, ớt, rau thơm.', 'gktc.jpg', 30000, 3, 0),
(18, 'Thịt kho trứng cút', 'Thịt kho trứng cút là một món ăn thơm ngon, hấp dẫn, được nhiều người yêu thích. Món ăn này có vị ngọt của thịt, vị béo của trứng cút và mùi thơm của hành lá. Nguyên liệu chính của món ăn này là thịt ba chỉ, trứng cút, hành lá.', 'tktc.jpg', 30000, 3, 0),
(19, 'Cá ngừ kho măng', 'Cá ngừ kho măng là một món ăn thơm ngon, hấp dẫn, được nhiều người yêu thích. Món ăn này có vị ngọt của cá ngừ, vị giòn của măng và mùi thơm của gia vị. Nguyên liệu chính của món ăn này là cá ngừ, măng, gia vị. ', 'cnkm.jpg', 30000, 3, 0),
(20, 'Cá bống kho', 'Cá bống kho tộ là một món ăn dân dã, đậm đà hương vị, được nhiều người yêu thích. Món ăn này có vị ngọt của cá bống, vị thơm của nước mắm và mùi thơm của hành lá. Nguyên liệu chính của món ăn này là cá bống, nước mắm, hành lá. ', 'cbkt.jpg', 30000, 3, 0),
(21, 'Vịt kho gừng', 'Vịt kho gừng là một món ăn dân dã, đậm đà hương vị, được nhiều người yêu thích. Món ăn này có vị ngọt của thịt vịt, vị thơm của gừng và mùi thơm của gia vị. Nguyên liệu chính của món ăn này là thịt vịt, gừng, gia vị. ', 'vkg.jpg', 30000, 3, 0),
(22, 'Gà chiên mắm', 'Gà chiên mắm là một món ăn thơm ngon, hấp dẫn, được nhiều người yêu thích. Món ăn này có vị đậm đà của nước mắm, vị thơm của thịt gà và mùi thơm của rau thơm. Nguyên liệu chính của món ăn này là thịt gà, nước mắm, rau thơm. ', 'gcm.jpg', 30000, 6, 0),
(23, 'Trứng chiên', 'Trứng chiên là một món ăn đơn giản, dễ làm nhưng rất ngon miệng. Món ăn này có vị béo ngậy của trứng, vị thơm của hành lá và mùi thơm của gia vị. Nguyên liệu chính của món ăn này là trứng, hành lá, gia vị. ', 'tc.jpg', 30000, 4, 0),
(24, 'Sườn chiên xả ớt', 'Sườn chiên xả ớt là một món ăn thơm ngon, hấp dẫn, được nhiều người yêu thích. Món ăn này có vị thơm của sả, vị cay của ớt và mùi thơm của thịt sườn. Nguyên liệu chính của món ăn này là sườn, sả, ớt. ', 'scxo.jpg', 30000, 4, 0),
(25, 'Cá diêu hồng chiên', 'Cá diêu hồng chiên là một món ăn thơm ngon, hấp dẫn, được nhiều người yêu thích. Món ăn này có vị ngọt của cá diêu hồng, vị thơm của hành lá và mùi thơm của gia vị. Nguyên liệu chính của món ăn này là cá diêu hồng, hành lá, gia vị. ', 'cdhc.jpg', 30000, 4, 0),
(26, 'Đậu hủ chiên giòn', 'Đậu hủ chiên giòn là một món ăn đơn giản, dễ làm nhưng rất ngon miệng. Món ăn này có vị béo ngậy của đậu hủ, vị thơm của dầu ăn và mùi thơm của hành lá. Nguyên liệu chính của món ăn này là đậu hủ, dầu ăn, hành lá. ', 'dhc.jpg', 30000, 4, 0),
(27, 'Cá linh chiên bột', 'Cá linh chiên bột là một món ăn đặc sản của miền Tây Nam Bộ. Món ăn này có vị ngọt của cá linh, vị giòn của bột và mùi thơm của hành lá. Nguyên liệu chính của món ăn này là cá linh, bột chiên, hành lá.', 'clc.jpg', 30000, 4, 0),
(28, 'Gà viên chiên', 'Gà viên chiên là một món ăn thơm ngon, hấp dẫn, được nhiều người yêu thích. Món ăn này có vị đậm đà của gia vị, vị thơm của thịt gà và mùi thơm của rau thơm. Nguyên liệu chính của món ăn này là thịt gà, gia vị, rau thơm. ', 'gcg.jpg', 30000, 4, 0),
(29, 'Thịt luộc mắm tôm', 'Thịt luộc mắm tôm là một món ăn dân dã, đậm đà hương vị, được nhiều người yêu thích. Món ăn này có vị mặn ngọt của mắm tôm, vị thơm của thịt lợn và mùi thơm của rau thơm. Nguyên liệu chính của món ăn này là thịt lợn, mắm tôm, rau thơm. ', 'tlmt.jpg', 30000, 6, 0),
(30, 'Gà luộc', 'Gà luộc là một món ăn truyền thống của Việt Nam, được nhiều người yêu thích. Món ăn này có vị ngọt của thịt gà, vị thơm của lá chanh và mùi thơm của rau thơm. Nguyên liệu chính của món ăn này là thịt gà, lá chanh, rau thơm.', 'gl.jpg', 30000, 6, 0),
(31, 'Gà hấp muối', 'Gà hấp muối là một món ăn dân dã, thơm ngon, hấp dẫn. Món ăn này có vị ngọt của thịt gà, vị mặn của muối và mùi thơm của lá chanh. Nguyên liệu chính của món ăn này là thịt gà, muối, lá chanh. ', 'ghm.jpg', 30000, 6, 0),
(32, 'Tôm hấp xả chanh', 'Tôm hấp xả chanh là một món ăn thơm ngon, hấp dẫn, được nhiều người yêu thích. Món ăn này có vị ngọt của tôm, vị thơm của xả và mùi thơm của chanh. Nguyên liệu chính của món ăn này là tôm, xả, chanh. ', 'thxc.jpg', 30000, 6, 0),
(33, 'Bánh mỳ thịt', 'Bánh mỳ thịt là một món ăn phổ biến ở Việt Nam. Món ăn này có vị thơm của bánh mỳ, vị đậm đà của thịt và mùi thơm của rau thơm. Nguyên liệu chính của món ăn này là bánh mỳ, thịt, rau thơm. ', 'banhmy.jpg', 15000, 5, 0),
(34, 'Bún thịt nướng', 'Bún thịt nướng là một món ăn đặc sản của Hà Nội. Món ăn này có vị thơm của thịt nướng, vị đậm đà của nước chấm và mùi thơm của rau thơm. Nguyên liệu chính của món ăn này là thịt lợn, bún, nước chấm, rau thơm.', 'bunthitnuong.jpg', 25000, 8, 0),
(35, 'Cơm tấm', 'Cơm tấm là một món ăn đặc sản của Sài Gòn. Món ăn này có vị ngọt của cơm tấm, vị đậm đà của sườn nướng và mùi thơm của rau thơm. Nguyên liệu chính của món ăn này là cơm tấm, sườn nướng, rau thơm. ', 'comtam.jpg', 30000, 7, 0),
(36, 'Bún bò', 'Bún bò Huế là một món ăn đặc sản của Huế. Món ăn này có vị ngọt của nước dùng, vị thơm của thịt bò và mùi thơm của rau thơm. Nguyên liệu chính của món ăn này là bún, thịt bò, nước dùng, rau thơm. ', 'bunbo.jpg', 30000, 8, 0),
(37, 'Phở', 'Phở là một món ăn truyền thống của Việt Nam, được nhiều người yêu thích. Món ăn này có vị ngọt của nước dùng, vị thơm của thịt bò và mùi thơm của rau thơm. Nguyên liệu chính của món ăn này là phở, thịt bò, nước dùng, rau thơm. ', 'pho.jpg', 30000, 8, 0),
(38, 'Bún riêu', 'Bún riêu là một món ăn dân dã, thơm ngon, hấp dẫn. Món ăn này có vị ngọt của nước dùng, vị chua của cà chua và mùi thơm của rau thơm. Nguyên liệu chính của món ăn này là bún, cua đồng, cà chua, rau thơm. ', 'bunrieu.jpg', 30000, 8, 0),
(39, 'Hủ tiếu', 'Hủ tiếu là một món ăn phổ biến ở Việt Nam. Món ăn này có vị ngọt của nước dùng, vị thơm của thịt và mùi thơm của rau thơm. Nguyên liệu chính của món ăn này là hủ tiếu, thịt, nước dùng, rau thơm. ', 'hutieu.jpg', 25000, 8, 0),
(40, 'Bánh bao', 'Bánh bao là một món ăn phổ biến ở Việt Nam. Món ăn này có vị thơm của vỏ bánh, vị đậm đà của nhân và mùi thơm của hành lá. Nguyên liệu chính của món ăn này là bột mì, nhân thịt, hành lá. ', 'banhbao.jpg', 20000, 5, 0),
(41, 'Bò kho', 'Bò kho là một món ăn thơm ngon, hấp dẫn, được nhiều người yêu thích. Món ăn này có vị đậm đà của thịt bò, vị béo ngậy của nước cốt dừa và mùi thơm của rau thơm. Nguyên liệu chính của món ăn này là thịt bò, nước cốt dừa, rau thơm.', 'bokho.jpg', 30000, 3, 0),
(42, 'Bún mộc', 'Bún mộc là một món ăn đặc sản của Nam Định. Món ăn này có vị ngọt của nước dùng, vị thơm của thịt và mùi thơm của rau thơm. Nguyên liệu chính của món ăn này là bún, thịt, nước dùng, rau thơm.', 'bunmoc.jpg', 25000, 8, 0),
(43, 'Bánh hỏi thịt nướng', 'Bánh hỏi thịt nướng là một món ăn đặc sản của Bình Định. Món ăn này có vị thơm của thịt nướng, vị đậm đà của nước chấm và mùi thơm của rau thơm. Nguyên liệu chính của món ăn này là bánh hỏi, thịt nướng, nước chấm, rau thơm. ', 'bhtn.jpg', 25000, 8, 0),
(44, 'Bún xiêm lo', 'Bún xiêm lo là một món ăn đặc sản của miền Tây Nam Bộ. Món ăn này có vị ngọt của nước dùng, vị thơm của thịt và mùi thơm của rau thơm. Nguyên liệu chính của món ăn này là bún, thịt, nước dùng, rau thơm.', 'bxl.jpg', 25000, 8, 0),
(45, 'Canh trứng cà chua', 'Canh trứng cà chua là một món ăn đơn giản, dễ làm nhưng rất ngon miệng. Món ăn này có vị ngọt của cà chua, vị béo ngậy của trứng và mùi thơm của hành lá. Nguyên liệu chính của món ăn này là cà chua, trứng, hành lá. ', 'canhtrungcachua.jpg', 20000, 1, 0),
(46, 'Canh chua chả cá ', 'Canh chua chả cá là một món ăn thơm ngon, hấp dẫn, được nhiều người yêu thích. Món ăn này có vị chua thanh của me, vị ngọt của chả cá và mùi thơm của rau thơm. Nguyên liệu chính của món ăn này là chả cá, me, cà chua, rau thơm. ', 'canhchuachaca.jpg', 20000, 1, 0),
(47, 'Canh dưa chua sườn heo', 'Canh dưa chua sườn heo là một món ăn dân dã, đậm đà hương vị, được nhiều người yêu thích. Món ăn này có vị chua của dưa chua, vị ngọt của sườn heo và mùi thơm của rau thơm. Nguyên liệu chính của món ăn này là dưa chua, sườn heo, rau thơm. ', 'canhduachua.jpg', 20000, 1, 0),
(48, 'Canh hến nấu khế chua', 'Canh hến nấu khế chua là một món ăn đặc sản của miền Tây Nam Bộ. Món ăn này có vị chua thanh của khế, vị ngọt của hến và mùi thơm của hành lá. Nguyên liệu chính của món ăn này là hến, khế, hành lá. ', 'canhhen.jpg', 20000, 1, 0),
(49, 'Canh rau dền thịt băm', 'Canh rau dền thịt băm là một món ăn dân dã, dễ làm nhưng rất ngon miệng. Món ăn này có vị ngọt của rau dền, vị thơm của thịt băm và mùi thơm của hành lá. Nguyên liệu chính của món ăn này là rau dền, thịt băm, hành lá. ', 'canhrauden.jpg', 20000, 1, 0),
(50, 'Canh bầu', 'Canh bầu là một món ăn dân dã, thanh mát, giải nhiệt cho cơ thể. Món ăn này có vị ngọt của bầu, vị thơm của hành lá. Nguyên liệu chính của món ăn này là bầu, hành lá', 'canhbau.jpg', 20000, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenlieu`
--

CREATE TABLE `nguyenlieu` (
  `idnguyenlieu` int(2) NOT NULL,
  `tennguyenlieu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nguyenlieu`
--

INSERT INTO `nguyenlieu` (`idnguyenlieu`, `tennguyenlieu`) VALUES
(1, 'Gà'),
(2, 'Cá lóc'),
(3, 'Cà chua'),
(4, 'Đậu bắp'),
(5, 'Giá đỗ'),
(6, 'Cốt me'),
(7, 'Cua '),
(8, 'Rau mồng tơi'),
(9, 'Rau thơm'),
(10, 'Lá giang'),
(11, 'Khổ qua'),
(12, 'Thịt heo'),
(13, 'Bí đỏ'),
(14, 'Xương heo'),
(15, 'Bí đao'),
(16, 'Rau củ'),
(17, 'Sườn heo'),
(18, 'Hành tây'),
(19, 'Giấm'),
(20, 'Rau muống'),
(21, 'Tỏi'),
(22, 'Bắp cải '),
(23, 'Trứng'),
(24, 'Bông bí'),
(25, ' Thịt bò '),
(26, 'Mực'),
(27, 'Dứa'),
(28, 'Lòng gà'),
(29, 'Mướp'),
(30, 'Trứng cút'),
(31, 'Cá ngừ'),
(32, 'Măng'),
(33, 'Cá bống'),
(34, 'Vịt'),
(35, 'Gừng'),
(36, 'Nước mắm'),
(37, 'Xả'),
(38, 'Cá diêu hồng'),
(39, 'Đậu hủ'),
(40, 'Cá '),
(41, 'Mắm tôm'),
(42, 'Muối'),
(43, 'Tôm'),
(44, 'Chanh '),
(45, 'Ớt'),
(46, 'ớt chuông'),
(47, 'Bột chiên giòn'),
(48, 'Cá linh'),
(49, 'Muối hột'),
(50, 'dưa chuột'),
(51, 'bánh mì'),
(52, 'bún'),
(53, 'pate'),
(54, 'cơm'),
(55, 'dưa chua'),
(56, 'bánh phở'),
(57, 'bánh hủ tiếu'),
(58, 'bột bánh bao'),
(59, 'viên mọc'),
(60, 'bánh hỏi'),
(61, 'rau kèo nèo'),
(64, 'chả cá'),
(65, 'hến'),
(66, 'khế chua'),
(67, 'rau dền'),
(68, 'thịt bằm'),
(69, 'bầu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanhoi`
--

CREATE TABLE `phanhoi` (
  `idphanhoi` int(2) NOT NULL,
  `idnhanvien` int(2) NOT NULL,
  `noidung` varchar(300) NOT NULL,
  `ngaygui` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieudatmon`
--

CREATE TABLE `phieudatmon` (
  `idPhieu` int(11) NOT NULL,
  `idtaikhoan` int(11) NOT NULL,
  `tongsoluong` int(11) NOT NULL,
  `tongtien` int(11) DEFAULT NULL,
  `ngaylenmon` datetime DEFAULT NULL,
  `ngaydat` datetime NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 0,
  `duyetdon` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phieudatmon`
--

INSERT INTO `phieudatmon` (`idPhieu`, `idtaikhoan`, `tongsoluong`, `tongtien`, `ngaylenmon`, `ngaydat`, `trangthai`, `duyetdon`) VALUES
(3130188, 3, 1, 45000, '2023-12-08 00:00:00', '2023-12-07 18:50:37', 0, 0),
(3761277, 3, 2, 60000, '2023-12-09 00:00:00', '2023-12-08 02:22:55', 0, 0),
(3790059, 3, 3, 90000, '2023-12-08 00:00:00', '2023-12-07 18:50:56', 0, 0),
(3942741, 3, 2, 65000, '2023-12-08 00:00:00', '2023-12-07 18:51:31', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `idtaikhoan` int(2) NOT NULL,
  `tendangnhap` varchar(30) NOT NULL,
  `matkhau` varchar(10) NOT NULL,
  `maNV` varchar(30) NOT NULL,
  `hoten` varchar(30) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `ngaytao` datetime NOT NULL,
  `vaitro` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`idtaikhoan`, `tendangnhap`, `matkhau`, `maNV`, `hoten`, `sdt`, `email`, `hinhanh`, `ngaytao`, `vaitro`) VALUES
(1, 'quanlybep', '123456', 'QL001', 'Bùi Thục Đoan', '0123456789', 'doan123@gmail.com', 'doan.jpg', '2023-11-09 17:26:16', 1),
(2, 'nhanvienbep', '123456', 'NVB002', 'Đặng Ngọc Hiếu', '9876543210', 'hieu123@gmail.com', 'hieu.jpg', '2023-11-09 17:27:54', 2),
(3, 'nhanvienct', '123456', 'NV003', 'Nguyễn Thanh Vũ', '7894560123', 'thanhvu102030@gmail.com', 'vu.jpg', '2023-11-10 17:29:43', 4),
(4, 'nhanvienct2', '123456', 'NV002', 'Nguyễn Hoàng Hưng', '0123789654', 'hungxx@gmail.com', 'hung.jpg', '2023-11-23 14:49:04', 4),
(5, 'nhanvienct3', '123456', 'NV004', 'Dương Công Hiếu', '0147852963', 'hieuduong@gmail.com', 'hieuduong.jpg', '2023-11-23 14:57:21', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `idthanhtoan` int(2) NOT NULL,
  `ngaythanhtoan` datetime NOT NULL,
  `tongtienthanhtoan` double NOT NULL,
  `idphieudatmon` int(2) NOT NULL,
  `idnhanvien` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thucdon`
--

CREATE TABLE `thucdon` (
  `idthucdon` int(2) NOT NULL,
  `tenthucdon` varchar(30) NOT NULL,
  `ngaytao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thucdon`
--

INSERT INTO `thucdon` (`idthucdon`, `tenthucdon`, `ngaytao`) VALUES
(1, 'Thực đơn thứ tư', '2023-12-06'),
(2, 'Thực đơn thứ năm', '2023-12-07'),
(3, 'Thực đơn thứ sáu', '2023-12-08'),
(4, 'Thực đơn thứ bảy', '2023-12-09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vaitro`
--

CREATE TABLE `vaitro` (
  `idvaitro` int(2) NOT NULL,
  `tenvaitro` varchar(50) NOT NULL,
  `ngaytao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `vaitro`
--

INSERT INTO `vaitro` (`idvaitro`, `tenvaitro`, `ngaytao`) VALUES
(1, 'Quản lý bếp ăn', '2023-11-09 17:17:57'),
(2, 'Nhân viên bếp ăn', '2023-11-09 17:18:10'),
(3, 'Nhân viên phục vụ', '2023-11-09 17:18:22'),
(4, 'Nhân viên công ty', '2023-11-09 17:18:31');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD KEY `idtaikhoan` (`idtaikhoan`),
  ADD KEY `idgiohang` (`idgiohang`),
  ADD KEY `id_monan` (`id_monan`);

--
-- Chỉ mục cho bảng `chitietnguyenlieu`
--
ALTER TABLE `chitietnguyenlieu`
  ADD KEY `idnguyenlieu` (`idnguyenlieu`,`id_monan`),
  ADD KEY `id_monan` (`id_monan`);

--
-- Chỉ mục cho bảng `chitietphieu`
--
ALTER TABLE `chitietphieu`
  ADD KEY `idPhieu` (`idPhieu`,`id_monan`);

--
-- Chỉ mục cho bảng `chitietthucdon`
--
ALTER TABLE `chitietthucdon`
  ADD PRIMARY KEY (`ichitietthucdon`),
  ADD KEY `id_monan` (`id_monan`),
  ADD KEY `idthucdon` (`idthucdon`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`idgiohang`);

--
-- Chỉ mục cho bảng `loaimonan`
--
ALTER TABLE `loaimonan`
  ADD PRIMARY KEY (`id_loaimonan`);

--
-- Chỉ mục cho bảng `loai_thucdon`
--
ALTER TABLE `loai_thucdon`
  ADD PRIMARY KEY (`idloaithucdon`);

--
-- Chỉ mục cho bảng `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`id_monan`),
  ADD KEY `id_loaimonan` (`id_loaimonan`);

--
-- Chỉ mục cho bảng `nguyenlieu`
--
ALTER TABLE `nguyenlieu`
  ADD PRIMARY KEY (`idnguyenlieu`);

--
-- Chỉ mục cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`idphanhoi`),
  ADD KEY `idnhanvien` (`idnhanvien`);

--
-- Chỉ mục cho bảng `phieudatmon`
--
ALTER TABLE `phieudatmon`
  ADD PRIMARY KEY (`idPhieu`),
  ADD KEY `idtaikhoan` (`idtaikhoan`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`idtaikhoan`),
  ADD KEY `idvaitro` (`vaitro`);

--
-- Chỉ mục cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`idthanhtoan`),
  ADD KEY `idphieudatmon` (`idphieudatmon`,`idnhanvien`);

--
-- Chỉ mục cho bảng `thucdon`
--
ALTER TABLE `thucdon`
  ADD PRIMARY KEY (`idthucdon`);

--
-- Chỉ mục cho bảng `vaitro`
--
ALTER TABLE `vaitro`
  ADD PRIMARY KEY (`idvaitro`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `loaimonan`
--
ALTER TABLE `loaimonan`
  MODIFY `id_loaimonan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `monan`
--
ALTER TABLE `monan`
  MODIFY `id_monan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `nguyenlieu`
--
ALTER TABLE `nguyenlieu`
  MODIFY `idnguyenlieu` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `idtaikhoan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD CONSTRAINT `chitietgiohang_ibfk_1` FOREIGN KEY (`id_monan`) REFERENCES `monan` (`id_monan`),
  ADD CONSTRAINT `chitietgiohang_ibfk_2` FOREIGN KEY (`idgiohang`) REFERENCES `giohang` (`idgiohang`);

--
-- Các ràng buộc cho bảng `chitietnguyenlieu`
--
ALTER TABLE `chitietnguyenlieu`
  ADD CONSTRAINT `chitietnguyenlieu_ibfk_1` FOREIGN KEY (`id_monan`) REFERENCES `monan` (`id_monan`);

--
-- Các ràng buộc cho bảng `chitietthucdon`
--
ALTER TABLE `chitietthucdon`
  ADD CONSTRAINT `chitietthucdon_ibfk_1` FOREIGN KEY (`idthucdon`) REFERENCES `thucdon` (`idthucdon`);

--
-- Các ràng buộc cho bảng `monan`
--
ALTER TABLE `monan`
  ADD CONSTRAINT `monan_ibfk_1` FOREIGN KEY (`id_loaimonan`) REFERENCES `loaimonan` (`id_loaimonan`);

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`vaitro`) REFERENCES `vaitro` (`idvaitro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
