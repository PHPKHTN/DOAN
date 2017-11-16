-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 16, 2017 lúc 04:29 PM
-- Phiên bản máy phục vụ: 5.7.19
-- Phiên bản PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop_mobile`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

DROP TABLE IF EXISTS `binh_luan`;
CREATE TABLE IF NOT EXISTS `binh_luan` (
  `ip` varchar(20) CHARACTER SET latin1 NOT NULL,
  `ma_san_pham` int(11) NOT NULL,
  `ho_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `noi_dung` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_dang` date NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_hoa_don`
--

DROP TABLE IF EXISTS `ct_hoa_don`;
CREATE TABLE IF NOT EXISTS `ct_hoa_don` (
  `ma_hoa_don` int(11) NOT NULL AUTO_INCREMENT,
  `ma_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` double NOT NULL,
  PRIMARY KEY (`ma_hoa_don`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_san_xuat`
--

DROP TABLE IF EXISTS `hang_san_xuat`;
CREATE TABLE IF NOT EXISTS `hang_san_xuat` (
  `ma_hang_san_xuat` int(11) NOT NULL AUTO_INCREMENT,
  `ten_hang_san_xuat` varchar(250) NOT NULL,
  `thu_tu` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ma_hang_san_xuat`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hang_san_xuat`
--

INSERT INTO `hang_san_xuat` (`ma_hang_san_xuat`, `ten_hang_san_xuat`, `thu_tu`) VALUES
(1, 'Nokia', 0),
(2, 'SamSung', 0),
(3, 'Sony Ericsson', 0),
(4, 'LG', 0),
(5, 'HTC', 0),
(6, 'etouch', 0),
(7, 'Apple', 0),
(8, 'BlackBerry', 0),
(9, 'Xmobile', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinh_san_pham`
--

DROP TABLE IF EXISTS `hinh_san_pham`;
CREATE TABLE IF NOT EXISTS `hinh_san_pham` (
  `ma_hinh` int(11) NOT NULL AUTO_INCREMENT,
  `ma_san_pham` int(11) NOT NULL,
  `hinh` varchar(250) NOT NULL,
  `thumbnail` bit(1) NOT NULL,
  PRIMARY KEY (`ma_hinh`),
  KEY `ma_san_pham` (`ma_san_pham`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hinh_san_pham`
--

INSERT INTO `hinh_san_pham` (`ma_hinh`, `ma_san_pham`, `hinh`, `thumbnail`) VALUES
(1, 1, 'Nokia-5230.jpg', b'0'),
(2, 1, 'Nokia-5230.jpg', b'1'),
(3, 2, 'Nokia-2730.jpg', b'0'),
(4, 2, 'Nokia-2730.jpg', b'1'),
(5, 3, 'Nokia-5233.jpg', b'0'),
(6, 3, 'Nokia-5233.jpg', b'1'),
(7, 4, 'Nokia_5800.jpg', b'0'),
(8, 4, 'Nokia_5800.jpg', b'1'),
(9, 5, 'Nokia-7230.jpg    ', b'0'),
(10, 5, 'Nokia-7230.jpg    ', b'1'),
(11, 6, 'Nokia_6700_classic_1.jpg', b'0'),
(12, 6, 'Nokia_6700_classic_1.jpg', b'1'),
(13, 7, 'Nokia-6700-Classic-Gold-1.jpg', b'0'),
(14, 7, 'Nokia-6700-Classic-Gold-1.jpg', b'1'),
(15, 9, 'Nokia_6700_classic_1.jpg', b'0'),
(16, 9, 'Nokia_6700_classic_1.jpg', b'1'),
(17, 10, 'nokia-n97.jpg', b'0'),
(18, 10, 'nokia-n97.jpg', b'1'),
(19, 11, 'SamSung-E1360.jpg', b'0'),
(20, 11, 'SamSung-E1360.jpg', b'1'),
(21, 12, 'SamSung_E2510.jpg', b'0'),
(22, 12, 'Sony Ericsson J20i Hazel.jpg', b'1'),
(23, 13, 'Samsung-B7330-OmniaPRO.jpg', b'0'),
(24, 13, 'Samsung-B7330-OmniaPRO.jpg', b'1'),
(25, 14, 'Samsung-B7330-OmniaPRO.jpg', b'0'),
(26, 14, 'Samsung-B7330-OmniaPRO.jpg', b'1'),
(27, 15, 'no_image.jpg', b'0'),
(28, 15, 'no_image.jpg', b'1'),
(29, 16, 'SamSung-S3500.jpg', b'0'),
(30, 16, 'SamSung-S3500.jpg', b'1'),
(31, 17, 'Samsung-S5620-Monte.jpg', b'0'),
(32, 17, 'Samsung-S5620-Monte.jpg', b'1'),
(33, 18, 'no_image.jpg', b'0'),
(34, 18, 'no_image.jpg', b'1'),
(35, 19, 'Samsung-S3653-Corby.jpg', b'0'),
(36, 19, 'Samsung-S3653-Corby.jpg', b'1'),
(37, 20, 'Samsung-E1175T.jpg    ', b'0'),
(38, 20, 'Samsung-E1175T.jpg    ', b'1'),
(39, 21, 'sony_aino.jpg', b'0'),
(40, 21, 'sony_aino.jpg', b'1'),
(41, 22, 'Sony Ericsson J20i Hazel.jpg', b'0'),
(42, 22, 'Sony Ericsson J20i Hazel.jpg', b'1'),
(43, 23, 'Sony Ericsson T700.jpg', b'0'),
(44, 23, 'Sony Ericsson T700.jpg', b'1'),
(45, 24, 'Sony Ericsson T707.jpg', b'0'),
(46, 24, 'Sony Ericsson T707.jpg', b'1'),
(47, 25, 'Sony Ericsson Vivaz.jpg', b'0'),
(48, 25, 'Sony Ericsson Vivaz.jpg', b'1'),
(49, 26, 'Sony Ericsson W508.jpg', b'0'),
(50, 26, 'Sony Ericsson W508.jpg', b'1'),
(51, 27, 'Sony Ericsson W595.jpg', b'0'),
(52, 27, 'Sony Ericsson W595.jpg', b'1'),
(53, 28, 'Sony Ericsson W980.jpg', b'0'),
(54, 28, 'Sony Ericsson W980.jpg', b'1'),
(55, 29, 'Sony Ericsson W995.jpg', b'0'),
(56, 29, 'Sony Ericsson W995.jpg', b'1'),
(57, 30, 'Sony Ericsson XPERIA X10 mini.jpg', b'0'),
(58, 30, 'Sony Ericsson XPERIA X10 mini.jpg', b'1'),
(59, 31, 'LG BL40 New Chocolate.jpg', b'0'),
(60, 31, 'LG BL40 New Chocolate.jpg', b'1'),
(61, 32, 'LG Cookie 3G KM555.jpg', b'0'),
(62, 32, 'LG Cookie 3G KM555.jpg', b'1'),
(63, 33, 'LG GD580 Lollipop.jpg', b'0'),
(64, 33, 'LG GD580 Lollipop.jpg', b'1'),
(65, 34, 'LG GD880 Mini.jpg', b'0'),
(66, 34, 'LG GD880 Mini.jpg', b'1'),
(67, 35, 'LG GS500 Cookie Plus.jpg', b'0'),
(68, 35, 'LG GS500 Cookie Plus.jpg', b'1'),
(69, 36, 'LG GT350i.jpg', b'0'),
(70, 36, 'LG GT350i.jpg', b'1'),
(71, 37, 'Aura-Diamond.gif', b'0'),
(72, 37, 'Aura-Diamond.gif', b'1'),
(73, 38, 'LG GW620.jpg', b'0'),
(74, 38, 'LG GW620.jpg', b'1'),
(75, 39, 'Mobiado-105-Damascus_8.jpg', b'0'),
(76, 39, 'Mobiado-105-Damascus_8.jpg', b'1'),
(77, 40, 'LG GX500.jpg', b'0'),
(78, 40, 'LG GX500.jpg', b'1'),
(79, 41, 'HTC Aria.jpg', b'0'),
(80, 41, 'HTC Aria.jpg', b'1'),
(81, 42, 'HTCDesire.jpg', b'0'),
(82, 42, 'HTC Desire.jpg', b'1'),
(83, 43, 'HTC Diamond2.jpg', b'0'),
(84, 43, 'HTC Diamond2.jpg', b'1'),
(85, 44, 'HTCHD2.jpg', b'0'),
(86, 44, 'HTC HD2.jpg', b'1'),
(87, 45, 'HTC Hero.jpg', b'0'),
(88, 45, 'HTC Hero.jpg', b'1'),
(89, 46, 'HTC Smart.jpg', b'0'),
(90, 46, 'HTC Smart.jpg', b'1'),
(91, 47, 'HTC Snap.jpg', b'0'),
(92, 47, 'HTC Snap.jpg', b'1'),
(93, 48, 'HTC Tattoo.jpg', b'0'),
(94, 48, 'HTC Tattoo.jpg', b'1'),
(95, 49, 'no_image.jpg', b'0'),
(96, 49, 'no_image.jpg', b'1'),
(97, 50, 'HTC Viva T2223.jpg', b'0'),
(98, 50, 'HTC Viva T2223.jpg', b'1'),
(99, 51, 'Nokia N8.jpg', b'0'),
(100, 51, 'Nokia N8.jpg', b'1'),
(101, 52, 'Nokia C5-03.jpg', b'0'),
(102, 52, 'Nokia C5-03.jpg', b'1'),
(103, 53, 'I5800.jpg', b'0'),
(104, 53, 'I5800.jpg', b'1'),
(105, 54, 'Nokia E5.jpg', b'0'),
(106, 54, 'Nokia E5.jpg', b'1'),
(107, 55, 'Nokia C7.jpg', b'0'),
(108, 55, 'Nokia C7.jpg', b'1'),
(109, 56, 'Sony Ericsson Shakira X8.jpg', b'0'),
(110, 56, 'Sony Ericsson Shakira X8.jpg', b'1'),
(111, 70, 'Mobiado-105-Damascus_2.jpg', b'0'),
(112, 70, 'Mobiado-105-Damascus_2.jpg', b'1'),
(113, 71, 'Mobiado-105-Damascus_2.jpg', b'0'),
(114, 71, 'Mobiado-105-Damascus_2.jpg', b'1'),
(115, 72, 'Mobiado-105-Damascus_2.jpg', b'0'),
(116, 72, 'Mobiado-105-Damascus_2.jpg', b'1'),
(117, 73, 'Mobiado-105-Damascus_2.jpg', b'0'),
(118, 73, 'Mobiado-105-Damascus_2.jpg', b'1'),
(119, 74, 'Mobiado-105-Damascus_2.jpg', b'0'),
(120, 74, 'Mobiado-105-Damascus_2.jpg', b'1'),
(121, 75, 'Mobiado-105-Damascus_2.jpg', b'0'),
(122, 75, 'Mobiado-105-Damascus_2.jpg', b'1'),
(123, 76, 'Mobiado-105-Damascus_2.jpg', b'0'),
(124, 76, 'Mobiado-105-Damascus_2.jpg', b'1'),
(125, 77, 'Mobiado-105-Damascus_5.jpg', b'0'),
(126, 77, 'Mobiado-105-Damascus_5.jpg', b'1'),
(127, 78, 'IpadAir.jpg', b'0'),
(128, 79, 'Playbook.jpg', b'0'),
(129, 80, 'IMG_0722.JPG', b'0'),
(130, 81, 'pin-sac-du-phong-6000-mah1.jpg', b'0'),
(131, 82, 'IpadMini.jpg', b'0'),
(132, 83, 'Ipad4.jpg', b'0'),
(133, 84, 'Samsung Galaxy Tab 2.jpg', b'0'),
(134, 85, 'Samsung Galaxy Tab 3.jpg', b'0'),
(135, 86, 'baodasamsung.jpg', b'0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

DROP TABLE IF EXISTS `hoa_don`;
CREATE TABLE IF NOT EXISTS `hoa_don` (
  `ma_hoa_don` int(11) NOT NULL AUTO_INCREMENT,
  `ma_khach_hang` int(11) NOT NULL,
  `ngay_dat` date NOT NULL,
  `tong_tien` double NOT NULL,
  `tien_dat_coc` double NOT NULL,
  `con_lai` double NOT NULL,
  `hinh_thuc_thanh_toan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ma_hoa_don`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

DROP TABLE IF EXISTS `khach_hang`;
CREATE TABLE IF NOT EXISTS `khach_hang` (
  `ma_khach_hang` int(11) NOT NULL AUTO_INCREMENT,
  `ten_khach_hang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phai` tinyint(4) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ma_khach_hang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_san_pham`
--

DROP TABLE IF EXISTS `loai_san_pham`;
CREATE TABLE IF NOT EXISTS `loai_san_pham` (
  `ma_the_loai` int(11) NOT NULL AUTO_INCREMENT,
  `ten_loai` varchar(250) NOT NULL,
  `mo_ta` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`ma_the_loai`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`ma_the_loai`, `ten_loai`, `mo_ta`) VALUES
(1, 'Điện thoại', 'Điện thoại'),
(2, 'Máy tính bảng', 'Máy tính bản'),
(3, 'Phụ kiện', 'Phụ kiện');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoi_dung`
--

DROP TABLE IF EXISTS `nguoi_dung`;
CREATE TABLE IF NOT EXISTS `nguoi_dung` (
  `ten_dang_nhap` varchar(120) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `ho_ten` varchar(120) NOT NULL,
  `email` varchar(120) DEFAULT NULL,
  `dien_thoai` varchar(12) DEFAULT NULL,
  `ma_trang_thai` int(11) NOT NULL,
  PRIMARY KEY (`ten_dang_nhap`),
  KEY `ma_trang_thai` (`ma_trang_thai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`ten_dang_nhap`, `mat_khau`, `ho_ten`, `email`, `dien_thoai`, `ma_trang_thai`) VALUES
('admin', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', 'admin@gmail.com', '12345678', 5),
('admin1', '827ccb0eea8a706c4c34a16891f84e7b', 'phung_hung', 'phunghung@gmail.com', '123456789', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

DROP TABLE IF EXISTS `san_pham`;
CREATE TABLE IF NOT EXISTS `san_pham` (
  `ma_san_pham` int(11) NOT NULL AUTO_INCREMENT,
  `ma_code` varchar(50) NOT NULL,
  `ma_hang_san_xuat` int(11) NOT NULL,
  `ma_the_loai` int(11) NOT NULL,
  `ten_san_pham` varchar(250) NOT NULL,
  `don_gia` decimal(10,0) NOT NULL,
  `don_gia_khuyen_mai` decimal(10,0) NOT NULL DEFAULT '0',
  `mo_ta_tom_tat` varchar(500) NOT NULL,
  `mo_ta` text NOT NULL,
  `so_luot_xem` int(11) NOT NULL DEFAULT '0',
  `so_luot_dat_mua` int(11) NOT NULL DEFAULT '0',
  `ma_trang_thai` int(11) NOT NULL,
  `ngay_tao` datetime NOT NULL,
  `ngay_cap_nhat` datetime NOT NULL,
  `url_video` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ma_san_pham`),
  KEY `ma_hang_san_xuat` (`ma_hang_san_xuat`),
  KEY `ma_the_loai` (`ma_the_loai`),
  KEY `ma_trang_thai` (`ma_trang_thai`),
  KEY `ma_trang_thai_2` (`ma_trang_thai`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`ma_san_pham`, `ma_code`, `ma_hang_san_xuat`, `ma_the_loai`, `ten_san_pham`, `don_gia`, `don_gia_khuyen_mai`, `mo_ta_tom_tat`, `mo_ta`, `so_luot_xem`, `so_luot_dat_mua`, `ma_trang_thai`, `ngay_tao`, `ngay_cap_nhat`, `url_video`) VALUES
(4, 'Nokia 5800 XpressMussic', 1, 1, 'Nokia 5800 XpressMussic', '5479000', '0', '', '<br>Mạng 2G: GSM 850/900/1800/1900</br><br>Mạng 3G: HSDPA 900/2100</br><br>Kích thước điện thoại: 111 x 51.7 x 15.5 mm</br><br>Kích thước màn hình: rộng 3.2 inches </br><br>Trọng lượng: 109g</br><br>Kiểu chuông: Midi, AMR, MKhôngP3, 64 âm sắc, WAV</br><br>Loa ngoài: Có</br><br>Danh bạ: 1000 số</br><br>Các số đã gọi: </br><br>EDGE: Có</br><br>Hồng ngoại: Không</br><br>USB: Micro USB</br><br>Camera phụ: VGA (0.3 Mpx)</br><br>Quay phim: Có</br><br>Tin nhắn: SMS/MMS/Instant Messaging</br><br>Trình duyệt: Wap 2.0/xHTML, RSS feeds, HTML</br><br>Trò chơi: Cài đặt sẵn trong máy, có thể cài thêm</br><br>Màu sắc: 16 triệu màu</br><br>Ngôn ngữ: Tiếng Việt, Tiếng Anh</br><br>Java: MIDP 2.1</br><br>Pin chuẩn: Pin Nokia BL-5J</br><br>Pin chờ: 400 giờ</br><br>Đàm thoại: 8 giờ</br><br>Bộ xử lý: ARM 11 369 MHz processor</br><br>Radio: Có</br><br>Bộ nhớ trong: 80 MB</br><br>Bluetooth: Có, V2.0 với A2DP</br><br>Định vị toàn cầu: A-GPS</br><br>Wifi: Wi-Fi 802.11 b/g, UPnP technology</br>', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(7, 'Nokia 6700 classic Gold Edition', 1, 1, 'Nokia 6700 classic Gold Edition', '9289000', '0', '', '<br>Mạng 2G: GSM 850/900/1800/1900</br><br>Mạng 3G: HSDPA 900/2100</br><br>Kích thước điện thoại: 109.8 x 45 x 11.2 mm</br><br>Kích thước màn hình: 2.2 inhes</br><br>Trọng lượng: 116g</br><br>Kiểu chuông: MP3, 64 âm sắc, Midi</br><br>Loa ngoài: Có</br><br>Danh bạ: 1000 số</br><br>Các số đã gọi: </br><br>EDGE: Có</br><br>Hồng ngoại: Không</br><br>USB: Micro USB</br><br>Camera phụ: Không</br><br>Quay phim: VGA@20fps</br><br>Tin nhắn: SMS/MMS/Instant Messaging</br><br>Trình duyệt: Wap 2.0/xHTML, HTML</br><br>Trò chơi: Cài đặt sẵn trong máy, có thể cài thêm</br><br>Màu sắc: 16 triệu màu</br><br>Ngôn ngữ: Tiếng Việt, Tiếng Anh</br><br>Java: MIDP 2.1</br><br>Pin chuẩn: Pin Nokia BL-6Q</br><br>Pin chờ: 300 giờ</br><br>Đàm thoại: 5 giờ</br><br>Bộ xử lý: </br><br>Radio: FM radio với RDS</br><br>Bộ nhớ trong: 170 MB</br><br>Bluetooth: Có, V2.1 với A2DP</br><br>Định vị toàn cầu: A-GPS</br><br>Wifi: Không</br>', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(10, 'Nokia N97', 1, 1, 'Nokia N97', '9899000', '0', '', '<br>Mạng 2G: GSM 850/900/1800/1900</br><br>Mạng 3G: HSDPA 900/2100</br><br>Kích thước điện thoại: 117.2 x 55.3 x 17 mm</br><br>Kích thước màn hình: 3.5 inches</br><br>Trọng lượng: 150g</br><br>Kiểu chuông: 64 âm sắc, AAC, Midi, MP3</br><br>Loa ngoài: Có</br><br>Danh bạ: Không giới hạn</br><br>Các số đã gọi: </br><br>EDGE: Có</br><br>Hồng ngoại: Không</br><br>USB: Micro USB</br><br>Camera phụ: VGA (0.3 Mpx)</br><br>Quay phim: Có</br><br>Tin nhắn: SMS/MMS/Instant Messaging</br><br>Trình duyệt: Wap 2.0/xHTML, RSS feeds, HTML</br><br>Trò chơi: Cài sẵn trong máy, có thể cài đặt thêm</br><br>Màu sắc: 16 triệu màu</br><br>Ngôn ngữ: Tiếng Việt, Tiếng Anh</br><br>Java: MIDP 2.1</br><br>Pin chuẩn: Pin Nokia BP-4L</br><br>Pin chờ: 400 giờ</br><br>Đàm thoại: 6 giờ</br><br>Bộ xử lý: ARM 11 434 MHz processor</br><br>Radio: FM radio with RDS, Visual radio</br><br>Bộ nhớ trong: 32 GB</br><br>Bluetooth: Có, V2.0 với A2DP</br><br>Định vị toàn cầu: A-GPS</br><br>Wifi: Wi-Fi 802.11 b/g, UPnP technology</br>', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(13, 'Samsung B7330 OmniaPRO', 2, 1, 'Samsung B7330 OmniaPRO', '5099000', '0', '', '<br>Mạng 2G: GSM 850/900/1800/1900</br><br>Mạng 3G: HSDPA 900/1900/2100</br><br>Kích thước điện thoại: 114.9 x 59 x 10.8 mm</br><br>Kích thước màn hình: 2.6 inches</br><br>Trọng lượng: 107g</br><br>Kiểu chuông: MP3, WAV, 64 âm sắc, Midi</br><br>Loa ngoài: Có</br><br>Danh bạ: Không giới hạn</br><br>Các số đã gọi: </br><br>EDGE: 236.8 Kbps</br><br>Hồng ngoại: Không</br><br>USB: Samsung D820</br><br>Camera phụ: QCIF@15fps</br><br>Quay phim: QVGA@15fps</br><br>Tin nhắn: SMS/MMS/Instant Messaging</br><br>Trình duyệt: HTML, Wap 2.0/xHTML</br><br>Trò chơi: Cài đặt sẵn trong máy</br><br>Màu sắc: 65.536 màu</br><br>Ngôn ngữ: Tiếng Anh</br><br>Java: MIDP 2.0</br><br>Pin chuẩn: Pin chuẩn Li-Ion</br><br>Pin chờ: 250 giờ</br><br>Đàm thoại: 5 giờ</br><br>Bộ xử lý: 512 MHz processor</br><br>Radio: FM radio với RDS</br><br>Bộ nhớ trong: 280 MB</br><br>Bluetooth: Có, V2.0 với A2DP</br><br>Định vị toàn cầu: A-GPS</br><br>Wifi: Wi-Fi 802.11 b/g</br>', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(14, 'SamSung Glaxy I5700', 2, 1, 'SamSung Glaxy I5700', '6359000', '0', '', '<br>Mạng 2G: GSM 850/900/1800/1900</br><br>Mạng 3G: HSDPA 900/2100</br><br>Kích thước điện thoại: 115 x 57 x 13.2 mm</br><br>Kích thước màn hình: 3.2 inches</br><br>Trọng lượng: 124g</br><br>Kiểu chuông: Midi, MP3, 64 âm sắc, WAV</br><br>Loa ngoài: Có</br><br>Danh bạ: Không giới hạn</br><br>Các số đã gọi: </br><br>EDGE: Có</br><br>Hồng ngoại: Không</br><br>USB: Micro USB</br><br>Camera phụ: Không</br><br>Quay phim: Có</br><br>Tin nhắn: SMS/MMS/Instant Messaging</br><br>Trình duyệt: HTML</br><br>Trò chơi: Cài đặt sẵn trong máy</br><br>Màu sắc: 16 triệu màu</br><br>Ngôn ngữ: Tiếng Anh</br><br>Java: MIDP 3.0</br><br>Pin chuẩn: Pin chuẩn Li-Ion</br><br>Pin chờ: 650 giờ</br><br>Đàm thoại: 11 giờ</br><br>Bộ xử lý: 800MHz processor</br><br>Radio: Không</br><br>Bộ nhớ trong: 180 MB</br><br>Bluetooth: Có, V2.1 với A2DP</br><br>Định vị toàn cầu: A-GPS</br><br>Wifi: Wi-Fi 802.11 b/g</br>', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(18, 'Samsung S8500 Wave', 2, 1, 'Samsung S8500 Wave', '8899000', '0', '', '<br>Mạng 2G: GSM 850/900/1800/1900</br><br>Mạng 3G: HSDPA 900/2100</br><br>Kích thước điện thoại: 118 x 56 x 10.9 mm</br><br>Kích thước màn hình: 3.0 inches</br><br>Trọng lượng: 118g</br><br>Kiểu chuông: 64 âm sắc, Midi, MP3</br><br>Loa ngoài: Có</br><br>Danh bạ: Không giới hạn</br><br>Các số đã gọi: </br><br>EDGE: 236.8 Kbps</br><br>Hồng ngoại: Không</br><br>USB: Micro USB</br><br>Camera phụ: </br><br>Quay phim: 720p@30fps</br><br>Tin nhắn: SMS/MMS/Instant Messaging</br><br>Trình duyệt: Wap 2.0/xHTML, HTML</br><br>Trò chơi: Cài đặt sẵn trong máy</br><br>Màu sắc: 16 triệu màu</br><br>Ngôn ngữ: Tiếng Anh</br><br>Java: Có</br><br>Pin chuẩn: Pin chuẩn Li-Ion</br><br>Pin chờ: 550 giờ</br><br>Đàm thoại: 7 giờ</br><br>Bộ xử lý: ARM Cortex A8 1GHz processor</br><br>Radio: FM radio với RDS</br><br>Bộ nhớ trong: 1.5 GB</br><br>Bluetooth: Có, V3.0 với A2DP</br><br>Định vị toàn cầu: A-GPS</br><br>Wifi: Wi-Fi 802.11 b/g/n</br>', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(21, 'Sony Ericsson Aino U10', 3, 1, 'Sony Ericsson Aino U10', '10989000', '0', '', '<br>Mạng 2G: GSM 850/900/1800/1900</br><br>Mạng 3G: HSDPA 850/1900/2100</br><br>Kích thước điện thoại: 104 x 50 x 15.5 mm </br><br>Kích thước màn hình: </br><br>Trọng lượng: 134g</br><br>Kiểu chuông: Đa âm sắc, Midi, MP3</br><br>Loa ngoài: Có</br><br>Danh bạ: 1000 số</br><br>Các số đã gọi: </br><br>EDGE: 236.8 Kbps</br><br>Hồng ngoại: Không</br><br>USB: USB 2.0</br><br>Camera phụ: </br><br>Quay phim: Có</br><br>Tin nhắn: SMS/MMS</br><br>Trình duyệt: RSS feeds, HTML (Netfront)</br><br>Trò chơi: Cài sẵn trong máy, có thể cài thêm</br><br>Màu sắc: 16 triệu màu</br><br>Ngôn ngữ: Tiếng Việt</br><br>Java: Có</br><br>Pin chuẩn: Pin chuẩn Li-Po</br><br>Pin chờ: 400 giờ</br><br>Đàm thoại: 4 giờ</br><br>Bộ xử lý: </br><br>Radio: Có</br><br>Bộ nhớ trong: 50 MB</br><br>Bluetooth: Có</br><br>Định vị toàn cầu: A-GPS</br><br>Wifi: Wi-Fi 802.11 b/g</br>', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(22, 'Sony Ericsson J20i Hazel.jpg', 3, 1, 'Sony Ericsson J20i Hazel.jpg', '5989000', '0', '', '<br>Mạng 2G: GSM 850/900/1800/1900</br><br>Mạng 3G: HSDPA 900/2100</br><br>Kích thước điện thoại: 102 x 49.5 x 16 mm </br><br>Kích thước màn hình: 2.6 inches</br><br>Trọng lượng: 120g</br><br>Kiểu chuông: MP3, Đa âm sắc, Midi</br><br>Loa ngoài: Có</br><br>Danh bạ: 2000 số</br><br>Các số đã gọi: </br><br>EDGE: 236.8 Kbps</br><br>Hồng ngoại: Không</br><br>USB: Micro USB</br><br>Camera phụ: </br><br>Quay phim: VGA@30fps</br><br>Tin nhắn: Có, SMTP/IMAP4/POP3/Push Mail</br><br>Trình duyệt: Wap 2.0/xHTML, HTML (Netfront), RSS feeds</br><br>Trò chơi: Cài đặt sẵn trong máy, có thể cài thêm</br><br>Màu sắc: 16 triệu màu</br><br>Ngôn ngữ: Tiếng Anh</br><br>Java: Có</br><br>Pin chuẩn: Pin chuẩn Li-Po</br><br>Pin chờ: 400 giờ</br><br>Đàm thoại: 10 giờ</br><br>Bộ xử lý: </br><br>Radio: Có</br><br>Bộ nhớ trong: 280 MB</br><br>Bluetooth: Có</br><br>Định vị toàn cầu: A-GPS</br><br>Wifi: Wi-Fi 802.11 b/g</br>', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(25, 'Sony Ericsson Vivaz', 3, 1, 'Sony Ericsson Vivaz', '9989000', '0', '', '<br>Mạng 2G: GSM 850/900/1800/1900</br><br>Mạng 3G: HSDPA 900/2100</br><br>Kích thước điện thoại: 107 x 51.7 x 12.5 mm</br><br>Kích thước màn hình: 3.2 inches</br><br>Trọng lượng: 97g</br><br>Kiểu chuông: MP3, 64 âm sắc, Midi</br><br>Loa ngoài: Có</br><br>Danh bạ: Không giới hạn</br><br>Các số đã gọi: </br><br>EDGE: 236.8 Kbps</br><br>Hồng ngoại: Không</br><br>USB: Micro USB</br><br>Camera phụ: </br><br>Quay phim: 720p@30fps</br><br>Tin nhắn: SMS/EMS/MMS/Instant Messaging</br><br>Trình duyệt: HTML (Netfront), Wap 2.0/xHTML</br><br>Trò chơi: Cài đặt sẵn trong máy, có thể cài thêm</br><br>Màu sắc: 16 triệu màu</br><br>Ngôn ngữ: Tiếng Việt, Tiếng Anh</br><br>Java: MIDP 2.1</br><br>Pin chuẩn: Pin chuẩn Li-Po</br><br>Pin chờ: 400 giờ</br><br>Đàm thoại: 13 giờ</br><br>Bộ xử lý: 720 MHz processor</br><br>Radio: Có</br><br>Bộ nhớ trong: 75 MB</br><br>Bluetooth: Có, V2.1 với A2DP</br><br>Định vị toàn cầu: A-GPS</br><br>Wifi: Wi-Fi 802.11 b/g</br>', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(28, 'Sony Ericsson W980', 3, 1, 'Sony Ericsson W980', '4989000', '0', '', '<br>Mạng 2G: Chưa xác định</br><br>Mạng 3G: HSDPA 850/1900/2100</br><br>Kích thước điện thoại: 92 x 46 x 16.9 mm</br><br>Kích thước màn hình: 2.2 inhes</br><br>Trọng lượng: 100g</br><br>Kiểu chuông: AMR, 64 âm sắc, Midi, MP3, AAC</br><br>Loa ngoài: Có</br><br>Danh bạ: 1000 số</br><br>Các số đã gọi: </br><br>EDGE: 236.8 Kbps</br><br>Hồng ngoại: Không</br><br>USB: USB 1.2</br><br>Camera phụ: </br><br>Quay phim: Có</br><br>Tin nhắn: SMS/MMS/Instant Messaging</br><br>Trình duyệt: Wap 2.0/xHTML, RSS feeds, HTML (Netfront)</br><br>Trò chơi: Cài sẵn trong máy, có thể cài đặt thêm</br><br>Màu sắc: 262.144 màu</br><br>Ngôn ngữ: Tiếng Việt</br><br>Java: Có</br><br>Pin chuẩn: Pin chuẩn Li-Ion</br><br>Pin chờ: 300 giờ</br><br>Đàm thoại: 9 giờ</br><br>Bộ xử lý: </br><br>Radio: Có</br><br>Bộ nhớ trong: 8 GB</br><br>Bluetooth: Có</br><br>Định vị toàn cầu: Không</br><br>Wifi: Không</br>', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(29, 'Sony Ericsson W995', 3, 1, 'Sony Ericsson W995', '7989000', '0', '', '<br>Mạng 2G: GSM 850/900/1800/1900</br><br>Mạng 3G: HSDPA 900/2100</br><br>Kích thước điện thoại: 97 x 49 x 15 mm</br><br>Kích thước màn hình: 2.6 inches</br><br>Trọng lượng: 113g</br><br>Kiểu chuông: Midi, MP3, Đa âm sắc</br><br>Loa ngoài: Có</br><br>Danh bạ: 1000 số</br><br>Các số đã gọi: </br><br>EDGE: 236.8 Kbps</br><br>Hồng ngoại: Không</br><br>USB: Sony Erisson K750i</br><br>Camera phụ: VGA (0.3 Mpx)</br><br>Quay phim: Có</br><br>Tin nhắn: SMS/MMS/Instant Messaging</br><br>Trình duyệt: RSS feeds, Wap 2.0, HTML (Netfront)</br><br>Trò chơi: Cài sẵn trong máy, có thể cài thêm</br><br>Màu sắc: 262.144 màu</br><br>Ngôn ngữ: Tiếng Anh, Tiếng Việt</br><br>Java: MIDP 2.0</br><br>Pin chuẩn: Pin Li-Ion BST-38</br><br>Pin chờ: 350 giờ</br><br>Đàm thoại: 4 giờ</br><br>Bộ xử lý: </br><br>Radio: FM radio với RDS</br><br>Bộ nhớ trong: 110 MB</br><br>Bluetooth: Có, V2.0 với A2DP</br><br>Định vị toàn cầu: A-GPS</br><br>Wifi: Wi-Fi 802.11 b/g</br>', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(30, 'Sony Ericsson XPERIA X10 mini', 3, 1, 'Sony Ericsson XPERIA X10 mini', '7589000', '0', '', '<br>Mạng 2G: GSM 850/900/1800/1900</br><br>Mạng 3G: HSDPA 850/1900/2100</br><br>Kích thước điện thoại: 83 x 50 x 16 mm </br><br>Kích thước màn hình: 2.5 inches</br><br>Trọng lượng: 88g</br><br>Kiểu chuông: Midi, 64 âm sắc, WAV, MP3</br><br>Loa ngoài: Có</br><br>Danh bạ: Không giới hạn</br><br>Các số đã gọi: </br><br>EDGE: 236.8 Kbps</br><br>Hồng ngoại: Không</br><br>USB: Micro USB</br><br>Camera phụ: </br><br>Quay phim: VGA@30fps</br><br>Tin nhắn: Có, SMTP/IMAP4/POP3/Push Mail</br><br>Trình duyệt: HTML</br><br>Trò chơi: Cài đặt sẵn trong máy</br><br>Màu sắc: 262.144 màu</br><br>Ngôn ngữ: Tiếng Anh</br><br>Java: Có</br><br>Pin chuẩn: Pin chuẩn Li-Po</br><br>Pin chờ: 300 giờ</br><br>Đàm thoại: 4 giờ</br><br>Bộ xử lý: Qualcomm MSM 7227 600 MHz processor</br><br>Radio: Có</br><br>Bộ nhớ trong: 128 MB</br><br>Bluetooth: Có</br><br>Định vị toàn cầu: A-GPS</br><br>Wifi: Wi-Fi 802.11 b/g</br>', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(31, 'LG BL40 New Chocolate', 4, 1, 'LG BL40 New Chocolate', '7799000', '0', '', '<br>Mạng 2G: GSM 850/900/1800/1900</br><br>Mạng 3G: HSDPA 900/2100</br><br>Kích thước điện thoại: 128 x 51 x 10.9 mm</br><br>Kích thước màn hình: </br><br>Trọng lượng: 129g</br><br>Kiểu chuông: MP3, 64 âm sắc, Midi</br><br>Loa ngoài: Có</br><br>Danh bạ: 1000 số</br><br>Các số đã gọi: </br><br>EDGE: 236.8 Kbps</br><br>Hồng ngoại: Không</br><br>USB: Micro USB</br><br>Camera phụ: VGA (0.3 Mpx)</br><br>Quay phim: VGA@30fps</br><br>Tin nhắn: SMS/MMS/Instant Messaging</br><br>Trình duyệt: Wap 2.0/xHTML, HTML</br><br>Trò chơi: Cài đặt sẵn trong máy</br><br>Màu sắc: 16 triệu màu</br><br>Ngôn ngữ: Tiếng Việt, Tiếng Anh</br><br>Java: MIDP 2.0</br><br>Pin chuẩn: Pin chuẩn Li-Ion</br><br>Pin chờ: 400 giờ</br><br>Đàm thoại: 6 giờ</br><br>Bộ xử lý: </br><br>Radio: FM radio với RDS</br><br>Bộ nhớ trong: 1 GB</br><br>Bluetooth: Có</br><br>Định vị toàn cầu: A-GPS</br><br>Wifi: Wi-Fi 802.11 b/g</br>', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(34, 'LG GD880 Mini', 4, 1, 'LG GD880 Mini', '6899000', '0', '', '<br>Mạng 2G: GSM 850/900/1800/1900</br><br>Mạng 3G: HSDPA 900/2100</br><br>Kích thước điện thoại: 102 x 47.6 x 10.6mm</br><br>Kích thước màn hình: 3.2 inches</br><br>Trọng lượng: 99g</br><br>Kiểu chuông: WAV, Midi, MP3</br><br>Loa ngoài: Có</br><br>Danh bạ: 1000 số</br><br>Các số đã gọi: </br><br>EDGE: 236.8 Kbps</br><br>Hồng ngoại: Không</br><br>USB: Micro USB</br><br>Camera phụ: Có</br><br>Quay phim: VGA@30fps</br><br>Tin nhắn: SMS/MMS</br><br>Trình duyệt: HTML</br><br>Trò chơi: Cài đặt sẵn trong máy, có thể cài thêm</br><br>Màu sắc: 262.144 màu</br><br>Ngôn ngữ: Tiếng Anh, Tiếng Việt</br><br>Java: MIDP 2.1</br><br>Pin chuẩn: Pin chuẩn Li-Ion</br><br>Pin chờ: 350 giờ</br><br>Đàm thoại: 7 giờ</br><br>Bộ xử lý: </br><br>Radio: FM radio với RDS</br><br>Bộ nhớ trong: 320 MB</br><br>Bluetooth: Có, V2.1 với A2DP</br><br>Định vị toàn cầu: A-GPS</br><br>Wifi: Wi-Fi 802.11 b/g</br>', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(38, 'LG GW620', 4, 1, 'LG GW620', '5499000', '0', '', '<br>Mạng 2G: GSM 850/900/1800/1900</br><br>Mạng 3G: HSDPA 900/2100</br><br>Kích thước điện thoại: 109 x 54.5 x 12.7 mm</br><br>Kích thước màn hình: 3.0 inches</br><br>Trọng lượng: 116g</br><br>Kiểu chuông: 64 âm sắc, MP3, WAV, Midi</br><br>Loa ngoài: Có</br><br>Danh bạ: Không giới hạn</br><br>Các số đã gọi: </br><br>EDGE: 236.8 Kbps</br><br>Hồng ngoại: Không</br><br>USB: Micro USB</br><br>Camera phụ: Không</br><br>Quay phim: VGA@20fps</br><br>Tin nhắn: SMS/MMS/Instant Messaging</br><br>Trình duyệt: HTML</br><br>Trò chơi: Cài đặt sẵn trong máy, có thể cài thêm</br><br>Màu sắc: 262.144 màu</br><br>Ngôn ngữ: Tiếng Anh</br><br>Java: MIDP 2.0</br><br>Pin chuẩn: Pin chuẩn Li-Ion</br><br>Pin chờ: 500 giờ</br><br>Đàm thoại: 5 giờ</br><br>Bộ xử lý: </br><br>Radio: FM radio với RDS</br><br>Bộ nhớ trong: 128 MB</br><br>Bluetooth: Có, V2.1 với A2DP</br><br>Định vị toàn cầu: A-GPS</br><br>Wifi: Wi-Fi 802.11 b/g</br>', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(41, 'HTC Aria', 5, 1, 'HTC Aria', '9949000', '0', '', '<br>Mạng 2G: GSM 850/900/1800/1900</br><br>Mạng 3G: HSDPA 1900/2100</br><br>Kích thước điện thoại: 103.8 x 57.7 x 11.7mm</br><br>Kích thước màn hình: 3.2 inches</br><br>Trọng lượng: 115g</br><br>Kiểu chuông: MP3,Midi,WAV</br><br>Loa ngoài: Có</br><br>Danh bạ: 2000 số</br><br>Các số đã gọi: </br><br>EDGE: 236.8 Kbps</br><br>Hồng ngoại: Không</br><br>USB: Micro USB</br><br>Camera phụ: Không</br><br>Quay phim: Có</br><br>Tin nhắn: SMS/MMS/Instant Messaging</br><br>Trình duyệt: HTML</br><br>Trò chơi: Cài đặt sẵn trong máy, có thể cài thêm</br><br>Màu sắc: 262.144 màu</br><br>Ngôn ngữ: Tiếng Anh</br><br>Java: MIDP 3.0</br><br>Pin chuẩn: Pin chuẩn Li-Ion</br><br>Pin chờ: 350 giờ</br><br>Đàm thoại: 6 giờ</br><br>Bộ xử lý: Qualcomm MSM 7227 600 MHz processor</br><br>Radio: FM radio với RDS</br><br>Bộ nhớ trong: 512 MB</br><br>Bluetooth: Có, V2.1 với A2DP</br><br>Định vị toàn cầu: A-GPS</br><br>Wifi: Wi-Fi 802.11 b/g</br>', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(42, 'HTC Desire', 5, 1, 'HTC Desire', '12699000', '0', '', '<br>Mạng 2G: GSM 850/900/1800/1900</br><br>Mạng 3G: HSDPA 900/2100</br><br>Kích thước điện thoại: 119 x 60 x 11.9 mm</br><br>Kích thước màn hình: 3.7 inches</br><br>Trọng lượng: 135g</br><br>Kiểu chuông: MP3, Midi, WAV</br><br>Loa ngoài: Có</br><br>Danh bạ: Không giới hạn</br><br>Các số đã gọi: </br><br>EDGE: 236.8 Kbps</br><br>Hồng ngoại: Không</br><br>USB: Micro USB</br><br>Camera phụ: Không</br><br>Quay phim: WVGA@30fps</br><br>Tin nhắn: SMS/MMS/Instant Messaging</br><br>Trình duyệt: HTML</br><br>Trò chơi: Cài đặt sẵn trong máy</br><br>Màu sắc: 16 triệu màu</br><br>Ngôn ngữ: Tiếng Anh</br><br>Java: MIDP 3.0</br><br>Pin chuẩn: Pin chuẩn Li-Ion</br><br>Pin chờ: 350 giờ</br><br>Đàm thoại: 6 giờ</br><br>Bộ xử lý: Qualcomm Snapdragon QSD8250 1 GHz processor</br><br>Radio: Có</br><br>Bộ nhớ trong: 576 MB</br><br>Bluetooth: Có, V2.0 với A2DP</br><br>Định vị toàn cầu: A-GPS</br><br>Wifi: Wi-Fi 802.11 b/g</br>', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(43, 'HTC Diamond2', 5, 1, 'HTC Diamond2', '10999000', '0', '', '<br>Mạng 2G: GSM 850/900/1800/1900</br><br>Mạng 3G: HSDPA 900/2100</br><br>Kích thước điện thoại: 107.9 x 53.1 x 13.7 mm </br><br>Kích thước màn hình: 3.2 inches</br><br>Trọng lượng: 117g</br><br>Kiểu chuông: WAV, Đa âm sắc, Midi, MP3</br><br>Loa ngoài: Có</br><br>Danh bạ: Không giới hạn</br><br>Các số đã gọi: </br><br>EDGE: 236.8 Kbps</br><br>Hồng ngoại: Không</br><br>USB: USB mini</br><br>Camera phụ: </br><br>Quay phim: Có</br><br>Tin nhắn: SMS/MMS/Instant Messaging</br><br>Trình duyệt: HTML</br><br>Trò chơi: Cài sẵn trong máy, có thể cài thêm</br><br>Màu sắc: 65.536 màu</br><br>Ngôn ngữ: Tiếng Anh</br><br>Java: Có</br><br>Pin chuẩn: Pin chuẩn Li-Ion</br><br>Pin chờ: 500 giờ</br><br>Đàm thoại: 5 giờ</br><br>Bộ xử lý: Qualcomm MSM7200A 528 MHz processor</br><br>Radio: Có</br><br>Bộ nhớ trong: 800 MB</br><br>Bluetooth: Có</br><br>Định vị toàn cầu: A-GPS</br><br>Wifi: Wi-Fi 802.11 b/g</br>', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(44, 'HTC HD2', 5, 1, 'HTC HD2', '13699000', '0', '', '<br>Mạng 2G: GSM 850/900/1800/1900</br><br>Mạng 3G: HSDPA 900/2100</br><br>Kích thước điện thoại: 120.5 x 67 x 11 mm</br><br>Kích thước màn hình: 4.3 inches</br><br>Trọng lượng: 157g</br><br>Kiểu chuông: MP3, 64 âm sắc, WAV, Midi</br><br>Loa ngoài: Có</br><br>Danh bạ: Không giới hạn</br><br>Các số đã gọi: </br><br>EDGE: Có</br><br>Hồng ngoại: Không</br><br>USB: Micro USB</br><br>Camera phụ: Không</br><br>Quay phim: VGA@30fps</br><br>Tin nhắn: SMS/MMS/Instant Messaging</br><br>Trình duyệt: HTML, Wap 2.0/xHTML</br><br>Trò chơi: Cài đặt sẵn trong máy, có thể cài thêm</br><br>Màu sắc: 65.536 màu</br><br>Ngôn ngữ: Tiếng Anh</br><br>Java: MIDP 2.0</br><br>Pin chuẩn: Pin chuẩn Li-Ion</br><br>Pin chờ: 500 giờ</br><br>Đàm thoại: 6 giờ</br><br>Bộ xử lý: Qualcomm Snapdragon QSD8250 1 GHz processor</br><br>Radio: Có</br><br>Bộ nhớ trong: 512 MB</br><br>Bluetooth: Có, V2.0 với A2DP</br><br>Định vị toàn cầu: A-GPS</br><br>Wifi: Wi-Fi 802.11 b/g</br>', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(45, 'HTC Hero', 5, 1, 'HTC Hero', '10599000', '0', '', '<br>Mạng 2G: GSM 850/900/1800/1900</br><br>Mạng 3G: HSDPA 900/2100</br><br>Kích thước điện thoại: 112 x 56.2 x 14.4 mm</br><br>Kích thước màn hình: 3.2 inches</br><br>Trọng lượng: 135g</br><br>Kiểu chuông: 64 âm sắc, Midi, WAV, MP3</br><br>Loa ngoài: Có</br><br>Danh bạ: Không giới hạn</br><br>Các số đã gọi: </br><br>EDGE: 236.8 Kbps</br><br>Hồng ngoại: Không</br><br>USB: USB mini</br><br>Camera phụ: Không</br><br>Quay phim: Có</br><br>Tin nhắn: SMS/EMS/MMS/Instant Messaging</br><br>Trình duyệt: HTML</br><br>Trò chơi: Cài sẵn trong máy, có thể cài thêm</br><br>Màu sắc: Cài sẵn trong máy, có thể cài thêm</br><br>Ngôn ngữ: Tiếng Anh</br><br>Java: MIDP 3.0</br><br>Pin chuẩn: Pin chuẩn Li-Ion</br><br>Pin chờ: 450 giờ</br><br>Đàm thoại: 8 giờ</br><br>Bộ xử lý: Qualcomm MSM7200A 528 MHz processor</br><br>Radio: Không</br><br>Bộ nhớ trong: 512 MB</br><br>Bluetooth: Có, V2.0 với A2DP</br><br>Định vị toàn cầu: A-GPS</br><br>Wifi: Không</br>', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(47, 'HTC Snap', 5, 1, 'HTC Snap', '6999000', '0', '', '<br>Mạng 2G: GSM 850/900/1800/1900</br><br>Mạng 3G: UMTS 2100</br><br>Kích thước điện thoại: 116.5 x 61.5 x 12 mm </br><br>Kích thước màn hình: 2.4 inches</br><br>Trọng lượng: 120g</br><br>Kiểu chuông: WAV, Midi, MP3, Đa âm sắc</br><br>Loa ngoài: Có</br><br>Danh bạ: Không giới hạn</br><br>Các số đã gọi: </br><br>EDGE: 236.8 Kbps</br><br>Hồng ngoại: Không</br><br>USB: Có</br><br>Camera phụ: </br><br>Quay phim: Có</br><br>Tin nhắn: SMS/MMS/Instant Messaging</br><br>Trình duyệt: Wap 2.0/xHTML</br><br>Trò chơi: Cài đặt thêm</br><br>Màu sắc: 65.536 màu</br><br>Ngôn ngữ: Tiếng Anh</br><br>Java: Có</br><br>Pin chuẩn: Pin chuẩn Li-Ion</br><br>Pin chờ: 500 giờ</br><br>Đàm thoại: 5 giờ</br><br>Bộ xử lý: Qualcomm MSM 7225 528 MHz processor</br><br>Radio: Không</br><br>Bộ nhớ trong: 190 MB</br><br>Bluetooth: Có</br><br>Định vị toàn cầu: A-GPS</br><br>Wifi: Wi-Fi 802.11 b/g</br>', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(48, 'HTC Tattoo', 5, 1, 'HTC Tattoo', '7999000', '0', '', '<br>Mạng 2G: GSM 850/900/1800/1900</br><br>Mạng 3G: HSDPA 900/2100</br><br>Kích thước điện thoại: 106 x 55.2 x 14 mm </br><br>Kích thước màn hình: 2.8 inches</br><br>Trọng lượng: 113g</br><br>Kiểu chuông: Midi, MP3, Đa âm sắc, WAV</br><br>Loa ngoài: Có</br><br>Danh bạ: Không giới hạn</br><br>Các số đã gọi: </br><br>EDGE: 236.8 Kbps</br><br>Hồng ngoại: Không</br><br>USB: USB mini</br><br>Camera phụ: </br><br>Quay phim: Có</br><br>Tin nhắn: SMS/MMS/Instant Messaging</br><br>Trình duyệt: HTML</br><br>Trò chơi: Cài đặt sẵn trong máy</br><br>Màu sắc: 65.536 màu</br><br>Ngôn ngữ: Tiếng Anh</br><br>Java: Không</br><br>Pin chuẩn: Pin chuẩn Li-Ion</br><br>Pin chờ: 350 giờ</br><br>Đàm thoại: 6 giờ</br><br>Bộ xử lý: Qualcomm MSM 7225 528 MHz processor</br><br>Radio: Có</br><br>Bộ nhớ trong: 512 MB</br><br>Bluetooth: Có</br><br>Định vị toàn cầu: A-GPS</br><br>Wifi: Wi-Fi 802.11 b/g</br>', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(49, 'HTC Touch 2 Mega', 5, 1, 'HTC Touch 2 Mega', '6099000', '0', '', '<br>Mạng 2G: GSM 850/900/1800/1900</br><br>Mạng 3G: Không có</br><br>Kích thước điện thoại: 104 x 55 x 12.9 mm</br><br>Kích thước màn hình: 2.8 inches</br><br>Trọng lượng: 110g</br><br>Kiểu chuông: WAV, Midi, MP3, 64 âm sắc</br><br>Loa ngoài: Có</br><br>Danh bạ: Không giới hạn</br><br>Các số đã gọi: </br><br>EDGE: 236.8 Kbps</br><br>Hồng ngoại: Không</br><br>USB: USB mini</br><br>Camera phụ: Không</br><br>Quay phim: Có</br><br>Tin nhắn: SMS/MMS/Instant Messaging</br><br>Trình duyệt: HTML</br><br>Trò chơi: Cài đặt sẵn trong máy, có thể cài thêm</br><br>Màu sắc: 65.536 màu</br><br>Ngôn ngữ: Tiếng Anh</br><br>Java: Có</br><br>Pin chuẩn: Pin chuẩn Li-Ion</br><br>Pin chờ: 500 giờ</br><br>Đàm thoại: 7 giờ</br><br>Bộ xử lý: Qualcomm MSM 7225 528 MHz processor</br><br>Radio: Không</br><br>Bộ nhớ trong: 512 MB</br><br>Bluetooth: Có, V2.0 với A2DP</br><br>Định vị toàn cầu: A-GPS</br><br>Wifi: Wi-Fi 802.11 b/g</br>', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(50, 'HTC Viva T2223', 5, 1, 'HTC Viva T2223', '4989000', '0', '', '<br>Mạng 2G: GSM 850/900/1800/1900</br><br>Mạng 3G: Không có</br><br>Kích thước điện thoại: 104.5 x 59 x 15.8 mm </br><br>Kích thước màn hình: 2.8 inches</br><br>Trọng lượng: 110g</br><br>Kiểu chuông: 40 âm sắc, MP3, WAV</br><br>Loa ngoài: Có</br><br>Danh bạ: Không giới hạn</br><br>Các số đã gọi: </br><br>EDGE: 236.8 Kbps</br><br>Hồng ngoại: Không</br><br>USB: USB mini</br><br>Camera phụ: </br><br>Quay phim: Có</br><br>Tin nhắn: SMS/MMS/Instant Messaging</br><br>Trình duyệt: Wap 2.0/xHTML</br><br>Trò chơi: Có thể cài đặt thêm</br><br>Màu sắc: 65.536 màu</br><br>Ngôn ngữ: Tiếng Anh</br><br>Java: Không</br><br>Pin chuẩn: Pin chuẩn Li-Ion</br><br>Pin chờ: 300 giờ</br><br>Đàm thoại: 8 giờ</br><br>Bộ xử lý: TI OMAP 850 200 MHz processor</br><br>Radio: Không</br><br>Bộ nhớ trong: 384 MB</br><br>Bluetooth: Có</br><br>Định vị toàn cầu: Không</br><br>Wifi: Wi-Fi 802.11 b/g</br>', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(51, 'Nokia N8', 1, 1, 'Nokia N8', '10500000', '0', '', '', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(53, 'SamSung I5800', 2, 1, 'SamSung I5800', '5200000', '0', '', '', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(55, 'Nokia C7', 1, 1, 'Nokia C7', '8900000', '0', '', '', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(56, 'Sony Ericsson Shakira X8', 3, 1, 'Sony Ericsson Shakira X8', '5899000', '0', '', '', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(71, 'Mobiado Professional 105 Damascus', 1, 1, 'Mobiado Professional 105 Damascus', '92', '0', '', '', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-20 00:00:00', ''),
(78, 'Ipad Air', 7, 2, 'Ipad Air', '15000000', '0', 'Sản phẩm mới của Apple', 'Màn hình	LED-backlit IPS LCD, 9.7 inch<br>\r\nHệ điều hành	iOS 8<br>\r\nVi xử lí CPU	Dual - Core, 1.3 GHz<br>\r\nRAM	1 GB<br>\r\nBộ nhớ trong	16 GB<br>\r\nCamera	5 MP(2592 x 1944 pixels)<br>\r\nKết nối	Không 3G, Wi-Fi chuẩn (802.11a/b/g/n); 2 kênh (2.4GHz/ 5GHz) và MIMO<br>\r\nĐàm thoại	Face Time<br>\r\nDung lượng pin	8820mAh(32.4W/h)<br>\r\nTrọng lượng	469', 10, 30, 1, '2015-06-18 07:05:36', '2015-06-22 00:00:00', ''),
(79, 'PlayBook', 8, 2, 'PlayBook', '5000000', '0', 'Máy tính bảng Blackberry PlayBook 32GB 3G (Đen) - Hàng nhập khẩu  ', 'Camera Sau 5.0MP; Trước 3.0MP<br>\r\nWifi có<br>\r\n3G Có<br>\r\nKích cỡ màn hình (inches) 7.0<br>\r\nĐộ phân giải màn hình (pixels) 1024x 600<br>\r\nPiin 4800mAh<br>\r\nBộ nhớ trong (GB) 32<br>\r\nTốc độ CPU (GHz) 1.5<br>\r\nSố lượng nhân 2<br>\r\nBảo hành 12 tháng (bằng phiếu bảo hành)', 15, 10, 1, '2015-06-17 00:00:00', '2015-06-22 00:00:00', ''),
(80, 'Sạc dự phòng Samsung 16800 mAh', 2, 3, 'Sạc dự phòng Samsung 16800 mAh', '500000', '0', 'Pin sạc dự phòng Samsung 9500 mAh với kích thước nhỏ gọn và sang trọng sẽ là thiết bị không thể thiếu cho cuộc sống công nghệ của bạn. Đặc biệt hơn, với 3 chế độ màu của đèn LED, bạn có thể kiểm tra tình trạng pin sạc chỉ với một cái liếc mắt.', 'Battery Capacity: 9500 mAh<br>\r\nCompatibility: Compatible Models Không giới hạn', 20, 20, 1, '2015-06-20 00:00:00', '2015-06-23 00:00:00', ''),
(81, 'sacduphong xmobile', 9, 3, 'Pin sạc dự phòng X mobile 6000 mAh', '200000', '0', 'Pin sạc dự phòng Xmobile sử dụng lõi pin Samsung/ LG an toàn và chất lượng', 'Hiệu suất sạc:Sạc đầy mọi pin điện thoại có dung lượng 4200 mAh trở xuống, sạc được mọi loại máy tính bảng<br>\r\nĐèn LED báo hiệu:Có<br>\r\nDung lượng pin:6000 mAh<br>\r\nThời gian sạc7 giờ đến 8 giờ<br>\r\nNguồn vào5V - 1A<br>\r\nCổng ra USB 1Tối đa 5V - 2.1<br>\r\nCổng ra USB 2Không<br>', 0, 0, 1, '2015-06-20 00:00:00', '2015-06-27 00:00:00', ''),
(82, 'ipad mini', 7, 2, 'Ipad Mini', '6000000', '0', 'Kích thước 7.9\" tỉ lệ 4:3 cùng với viền màn hình mỏng giúp máy hiển thị thông tin nhiều hơn tới 35%. Nhờ đó bạn có thể thoải mái xem những trang web, báo chí và hình ảnh trọn trên màn hình.', 'Màn hình	LED-backlit IPS LCD, 7.9 inch<br>\r\nHệ điều hành	iOS 8<br>\r\nVi xử lí CPU	Dual - Core, 1 GHz<br>\r\nRAM	512 MB<br>\r\nBộ nhớ trong	16 GB<br>\r\nCamera	5 MP(2592 x 1944 pixels)<br>\r\nKết nối	Không 3G, Wifi chuẩn 802.11 a/b/g/n<br>\r\nĐàm thoại	Face Time<br>\r\nDung lượng pin	4490mAh(16.3Wh)<br>\r\nTrọng lượng	308g<br>', 50, 40, 1, '2015-06-21 00:00:00', '2015-06-22 00:00:00', ''),
(83, 'Ipad4.jpg', 7, 2, 'Ipad 4', '5000000', '0', 'Máy tính bảng iPad 4 Retina Wi-Fi + Cellular 64GB', 'Màn hình	LED-backlit IPS LCD, 9.7 inch<br>\r\nHệ điều hành	iOS 6<br>\r\nVi xử lí CPU	Dual - Core, 1.4 GHz<br>\r\nRAM	1 GB<br>\r\nBộ nhớ trong	64 GB<br>\r\nCamera	5 MP(2592 x 1944 pixels)<br>\r\nKết nối	Có 3G ( tốc độ Download 21 Mbps, Upload 5.76 Mbps), Wi-Fi chuẩn <br>(802.11a/b/g/n); 2 kênh (2.4GHz/ 5GHz) và MIMO<br>\r\nĐàm thoại	Face Time<br>\r\nDung lượng pin	11.560 mAh<br>\r\nTrọng lượng	662', 30, 35, 1, '2015-06-21 00:00:00', '2015-06-22 00:00:00', ''),
(84, 'Samsung Galaxy Tab 2', 2, 2, 'Samsung Galaxy Tab 2', '7000000', '0', 'Máy tính bảng Samsung Galaxy Tab 2 7.0', 'Màn hình	PLS LCD,16 triệu màu, 7 inch<br>\r\nHệ điều hành	Android 4.0<br>\r\nVi xử lí CPU	Dual-core Cortex-A9, 1 GHz\r\nRAM	1 GB<br>\r\nBộ nhớ trong	16 GB<br>\r\nCamera	3.15 MP(2048x1536)pixels<br>\r\nKết nối	Có 3G ( tốc độ Download 21 Mbps, Upload 5.76 Mbps), Wifi chuẩn 802.11 a/b/g/n<br>\r\nĐàm thoại	Có<br>\r\nDung lượng pin	4000 mAh<br>\r\nTrọng lượng	344<br>', 44, 32, 1, '2015-06-21 00:00:00', '2015-06-22 00:00:00', ''),
(85, 'Samsung Galaxy Tab 3', 2, 2, 'Samsung Galaxy Tab 3', '4000000', '0', 'Bộ vỏ sắc màu, cá tính, mặt lưng giả da giúp máy thêm sang trọng, cảm giác cầm nắm sản phẩm thoải mái, không bám dấu vân tay', 'Màn hình	TFT, 7 inch<br>\r\nHệ điều hành	Android 4.2<br>\r\nVi xử lí CPU	Dual - Core, 1.2 GHz<br>\r\nRAM	1 GB<br>\r\nBộ nhớ trong	8 GB<br>\r\nCamera	2 MP(1600 x 1200 pixels)<br>\r\nKết nối	Có 3G ( tốc độ Download 21 Mbps, Upload 5.76 Mbps), Wi-Fi Chuẩn 802.11 b/g/n, Wi-Fi hotspot<br>\r\nĐàm thoại	Có<br>\r\nDung lượng pin	3600mAh<br>\r\nTrọng lượng	322', 33, 56, 1, '2015-06-21 00:00:00', '2015-06-22 00:00:00', ''),
(86, 'Bao da samsung', 2, 3, 'Bao da samsung', '200000', '0', 'Bao da Mercury quai gài tinh tế sắc xảo bảo vệ máy bạn chắc chắn với quai gài.', '\r\nBao da Mercury có một thiết kế chất liệu vải với những đường may tinh tế sắc sảo, thời trang.<br>\r\nBao da Mercury dễ dàng phối hợp chung với những bộ quần áo trẻ trung, năng động. Với lớp vải gồ, bao da có thể bảo vệ điện thoại khỏi những va đập, trầy xước không mong muốn, đồng thời góp phần tạo vẻ đẹp cho bản thân.<br>\r\nNgoài ra bao da lấy ý tưởng từ những bộ quần áo giả Jean này còn sẽ khiến cho bạn cảm thấy sự tươi trẻ trong phong cách ăn mặc thời trang của bạn.<br> Bên cạnh đó Bao da còn có khả năng làm giá đỡ hỗ trợ xem video, giải trí thoải mái hơn.<br>\r\nBao da  chống bám bụi hiệu quả khi đem ra bên ngoài, chống trầy màn hình cảm ứng bên trong và chống va đập không mong muốn.<br>\r\nBao da với các chỗ chừa các chi tiết loa, camera, các phím volume rất chính xác giúp dễ dàng sử dụng.', 15, 16, 1, '2015-06-21 00:00:00', '2015-06-22 00:00:00', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_tuc`
--

DROP TABLE IF EXISTS `tin_tuc`;
CREATE TABLE IF NOT EXISTS `tin_tuc` (
  `ma_tin` int(11) NOT NULL AUTO_INCREMENT,
  `tieu_de_tin` varchar(250) NOT NULL,
  `noi_dung_tom_tat` varchar(500) NOT NULL,
  `noi_dung` text NOT NULL,
  `duong_dan_seo` varchar(250) NOT NULL,
  `so_luot_xem` int(11) NOT NULL DEFAULT '0',
  `hinh` varchar(250) NOT NULL,
  `nhom_tin` varchar(50) DEFAULT NULL,
  `tac_gia` varchar(120) NOT NULL,
  `ma_trang_thai` int(11) NOT NULL,
  `ngay_tao` datetime NOT NULL,
  `ngay_cap_nhat` datetime NOT NULL,
  PRIMARY KEY (`ma_tin`),
  KEY `ma_trang_thai` (`ma_trang_thai`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tin_tuc`
--

INSERT INTO `tin_tuc` (`ma_tin`, `tieu_de_tin`, `noi_dung_tom_tat`, `noi_dung`, `duong_dan_seo`, `so_luot_xem`, `hinh`, `nhom_tin`, `tac_gia`, `ma_trang_thai`, `ngay_tao`, `ngay_cap_nhat`) VALUES
(1, 'Nokia bắt đầu cho đặt hàng N8 với giá 10,5 triệu', 'Nokia vừa xác nhận giá bán chính thức N8 tại thị trường Việt Nam, trang web đặt hàng model này cũng đã được mở ra.', 'Nokia bắt đầu cho đặt hàng N8 với giá 10,5 triệu\r\nNokia vừa xác nhận giá bán chính thức N8 tại thị trường Việt Nam, trang web đặt hàng model này cũng đã được mở ra.\r\n\r\nĐúng với những thông tin rò rỉ trước đó, N8 có giá 10,5 triệu, tốt hơn rất nhiều so với bản xách tay. Với camera 12 Megapixel, màn hình cảm ứng điện dung, đa điểm, mạnh mẽ kết nối giải trí, Nokia N8 được xem là có thể cạnh tranh được với Motorola Milestone XT720, Nokia N900, Sony Ericsson Aino, HTC HD Mini.\r\n\r\nHiện tại, website hỗ trợ đặt hàng N8 đã chính thức xuất hiện, N8 bán tại Việt nam sẽ có 5 màu, 1.000 khách mua đầu tiên sẽ được tăng một ba lô. Máy sẽ xuất hiện tại các Nokia Store trước và đến tay người dùng đầu tháng 11 tới.\r\n\r\nTheo một bình chọn của Số Hóa sáng nay, tính đến 14h chiều nay, với gần 1.000 độc giả tham gia cho thấy, hơn 50% cho rằng, mức giá gần 11 triệu của N8 là hợp lý.\r\n\r\nN8 là điện thoại di động đáng chú ý nhất của Nokia năm nay, đây là mẫu smartphone đầu tiên chạy Symbian^3, thiết bị nổi bật với máy ảnh 12 \"chấm\" cảm biến lớn và hỗ trợ giải trí, kết nối đa phương tiện.', '', 0, 'Nokia N8.jpg', 'tin_tuc', 'Sưu tầm', 3, '2015-06-20 00:00:00', '2015-06-20 00:00:00'),
(2, 'Nokia N8 chính hãng giá gần 11 triệu', 'Nokia sẽ bán N8 trong vòng vài tuần tới tại Việt Nam, giá chính hãng được hứa hẹn nằm ở mức chưa đến 11 triệu đồng.', 'Nokia N8 chính hãng giá gần 11 triệu\r\nNokia sẽ bán N8 trong vòng vài tuần tới tại Việt Nam, giá chính hãng được hứa hẹn nằm ở mức chưa đến 11 triệu đồng.\r\n\r\nTuần trước, các phiên bản N8 xách tay đã có mặt ở Việt Nam với giá gần 18 triệu. Hiện các cửa hàng ở TP HCM và Hà Nội đang bán máy ở mức hơn 17 triệu, khá đặt so hàng loạt các mẫu di động mạnh mẽ, tốc độ 1GHz mới như Dell Streak, Xperia X10 hay HD2, Desire HD.\r\n\r\nTheo nguồn tin của Số Hóa, chiếc N8 sẽ được bán trong khoảng một đến 2 tuần tới ở Việt Nam. Giá bán model này sẽ nằm từ 10,7 đến 10,9 triệu đồng, hiện tại Nokia vẫn chưa xác nhận giá máy chính thức. Trước đó, có cửa hàng đã đăng giá bán N8 là 10 triệu.\r\n\r\nHệ thống showroom của Nokia và FPT Shop sẽ bán mẫu điện thoại di động này trước, những người đầu tiên mua máy sẽ được tặng kèm bao da. Phụ kiện chuẩn của Nokia N8 sẽ bao gồm sạc, tai nghe, dây cáp USB, cáp chuyển HDMI.\r\n\r\nỞ mức giá gần 11 triệu đồng, N8 sẽ phải cạnh tranh với Motorola Milestone XT720, Nokia N900, Sony Ericsson Aino, HTC HD Mini. Đây phần lớn là những thiết bị chưa có tốc độ đến 1GHz, tương tự như N8. Tuy vậy, smartphone của Nokia lợi thế hơn nhờ máy ảnh 12 Megapixel và nhiều hứa hẹn từ Symbian^3.\r\n\r\nN8 được Nokia công bố cuối tháng 4, máy sở hữu camera 12 Megapixel, quay video HD. Trong đó, máy ảnh đi kèm là ống kính Carl Zeiss và đèn flash Xenon, cảm biến hình ảnh của thiết bị \"là đối thủ của camera kỹ thuật số\", N8 hỗ trợ quay video 720p, 25 khung hình/giây và tích hợp cả trình chỉnh sửa video..\r\n\r\nMáy có bộ nhớ lên tới 16GB, tích hợp khe cắm thẻ nhớ microSD hỗ trợ mở rộng dung lượng thêm 32GB. Mặt trước của máy là màn hình cảm ứng điện dung, đa điểm, rộng 3,5 inch, tỷ lệ 16:9 với độ phân giải chuẩn nHD (360 x 640 pixel).\r\n\r\nN8 hỗ trợ mạnh mẽ kết nối, máy chạy trên 4 băng tần GSM, kết nối 3G tới 5 băng tần là 850/900/1700/1900/2100. Ngoài ra, thiết bị còn hỗ trợ Wi-Fi chuẩn b/g/n, Bluetooth 2.1, GPS với A-GPS, cổng giao tiếp microUSB và tích hợp đài FM.\r\n\r\nN8 là di động đầu tiên chạy trên hệ điều hành Symbian^3, phát triển trên nền tảng Qt, cho phép các lập trình viên xây dựng ứng dụng giống như Symbian và MeeGo. Máy hỗ trợ nhiều màn hình Home, tích hợp các kết nối mạng xã hội. Ngoài ra, model này còn có hiệu năng và đồ họa mạnh', '', 0, 'Nokia N8.jpg', 'tin_tuc', 'Sưu tầm', 3, '2015-06-20 00:00:00', '2015-06-20 00:00:00'),
(3, 'Nokia ra mắt C5-03 cảm ứng, giá trung', 'Nokia vừa trình làng chiếc C5-03 phiên bản cảm ứng với màn hình rộng 3,2 inch, hỗ trợ đầy đủ kết nối và nằm trong phân khúc dưới 5 triệu đồng.', 'Nokia ra mắt C5-03 cảm ứng, giá trung\r\nNokia vừa trình làng chiếc C5-03 phiên bản cảm ứng với màn hình rộng 3,2 inch, hỗ trợ đầy đủ kết nối và nằm trong phân khúc dưới 5 triệu đồng.\r\n\r\nMáy tích hợp kết nối Wi-Fi, GPS cùng bản đồ Ovi Maps miễn phí cài đặt sẵn. Màn hình Home của Nokia C5-03 hỗ trợ hiển thị thông tin về cuộc gọi, tin nhắn, chat. Máy trang bị camera 5 Megapixel nhưng không có đèn flash.\r\n\r\nNokia C5-03 có kích thước 105,8 x 51 x 13,8 mm, nặng 93 gram, kích thước tương đương bản Nokia C6-01, nhỏ hơn Nokia N8 và Nokia C7. Bộ nhớ trong của thiết bị này là 40MB, khe cắm thẻ nhớ microSD đi kèm hỗ trợ mở rộng thêm 16GB.\r\n\r\nNokia cho biết, chiếc smartphone này chạy hệ điều hành Symbian^1, nền tảng trước đây được gọi là S60 phiên bản 5. Pin theo máy hỗ trợ đàm thoại 11,5 giờ và kết nối 3G liên tục 4,5 giờ. C5-03 có thời gian chờ là 25 ngày.\r\n\r\nMột trong những tính năng được chú ý ở thiết bị này là khả năng truy cập e-mail thông qua web hoặc phương thực POP3. Máy hỗ trợ các ứng dụng nhắn tin, email cũng như hỗ trợ truy cập vào kho nhạc Ovi Music và tải ứng dụng từ Ovi Store.\r\n\r\nC5-03 được Nokia xếp vào phân khúc tầm trung, máy được bán ở mức 170 euro (4,6 triệu đồng) trong quý IV năm nay. Đây là chiếc Nokia C5 thứ ba từ Nokia, trước đó hãng đã bán ra C5 màn hình cứng và bản C5 TD-SCDMA cho thị trường Trung Quốc.', '', 0, 'Nokia C5-03.jpg', 'tin_tuc', 'Sưu tầm', 3, '2015-06-20 00:00:00', '2015-06-20 00:00:00'),
(4, 'Điện thoại di động được yêu thích nhất của Nokia', 'Nokia N8 được người dùng Nokia bình chọn là model được yêu thích nhất, tiếp đó là Nokia N97, X6, N900, E72', 'Điện thoại di động được yêu thích nhất của Nokia\r\nNokia N8 được người dùng Nokia bình chọn là model được yêu thích nhất, tiếp đó là Nokia N97, X6, N900, E72\r\n\r\nNokia vừa tiến hành một đợt khảo sát nhỏ trên trang web của mình về các mẫu điện thoại di động được yêu thích nhất của hãng. Trong đó, N8 đã vượt lên các đối thủ khác và dẫn đầu trong danh sách các thiết bị được chọn. Đây là thiết bị vừa xuất hiện trên thị trường với camera 12 Megapixel, chạy Symbian và được nhà sản xuất Phần Lan chờ đợi nhiều.\r\n\r\nSau N8, mẫu di động \"đình đám\" năm ngoái là N97 xếp ở vị trí thứ hai. Mẫu điện thoại cảm ứng điện dung đầu tiên của Nokia là X6 xếp vị trí thứ ba. Danh sách này còn có thêm N900 chạy Meamo và E72.\r\n\r\nTrong khi đó, chiếc smartphone thành công trước đây là N95 chỉ xếp thứ 6, một phiên bản bán rất chạy trong 2 năm trở lại đây là E71 chỉ xếp vị trí thứ 7. Ngay sau đó là phiên bản rút gọn E63. Top 10 còn có sự xuất hiện của N73, mẫu N-series giải trí ra mắt gần 4 năm trước và C6 mới bán ra.', '', 0, 'Nokia N8.jpg', 'tin_tuc', 'Sưu tầm', 3, '2015-06-20 00:00:00', '2015-06-20 00:00:00'),
(5, 'Galaxy 3 chính hãng giá hơn 5 triệu', 'Chiếc Samsung I5800 Galaxy 3 đã bắt đầu có mặt trên các kệ hàng. Mẫu Android tầm trung này được bán ở mức 5,2 triệu đồng.', 'Galaxy 3 chính hãng giá hơn 5 triệu\r\nChiếc Samsung I5800 Galaxy 3 đã bắt đầu có mặt trên các kệ hàng. Mẫu Android tầm trung này được bán ở mức 5,2 triệu đồng.\r\n\r\nGalaxy 3 có cấu hình vừa phải, máy sở hữu lớp vỏ ngoài bóng mượt, thiết kế có nhiều nét giống dòng Corby, màn hình cảm ứng điện dung của máy rộng 3,2 inch, độ phân giải chỉ 240 x 400 pixel, hỗ trợ cảm ứng đa điểm.\r\n\r\nModel này chạy trên hệ điều hành Android 2.1, giao diện TouchWiz với màn hình Home, Menu cho phép đi vào các ứng dụng được bố trí dạng lưới. Galaxy 3 hỗ trợ đầy đủ các kết nối từ 3G với HSDPA 3,6 Mb/giây, Wi-Fi, GPS, camera của máy là 3,2 Megapixel.\r\n\r\nGalaxy 3 I5800 là mẫu Android tiếp theo của Samsung sau Galaxy Spica, Galaxy S và mới đây là chiếc Corby Smart (4,5 triệu) được bán tại Việt Nam.', '', 0, 'I5800.jpg', 'tin_tuc', 'Sưu tầm', 3, '2015-06-20 00:00:00', '2015-06-20 00:00:00'),
(6, 'Nokia E5 ', 'Chiếc điện thoại di động phổ thông dòng E của Nokia đã bắt đầu có mặt trên các cửa hàng với giá 4,7 triệu đồng, tương đương hàng xách tay bán ra 2 tháng trước.', 'Nokia E5\r\nChiếc điện thoại di động phổ thông dòng E của Nokia đã bắt đầu có mặt trên các cửa hàng với giá 4,7 triệu đồng, tương đương hàng xách tay bán ra 2 tháng trước.\r\n\r\nSo với giá bán hiện tại, Nokia E5 đắt hơn so với \"ông anh\" Nokia E63 đúng một triệu đồng. Các phiên bản E-series khác của Nokia như E71, E72 vẫn khá \"hút khách\", hiện các model này đang nằm ở mức 4,99 triệu và 6,49 triệu tương đương.\r\n\r\nSo với Nokia E63, Nokia E5 mạnh mẽ hơn về kết nối, trong khi máy lại trông không thời trang bằng Nokia E71, Nokia E72 bởi bộ khung nhựa. E5 có màn hình 2,4 inch, máy ảnh 5 Megapixel, tích hợp Wi-Fi, 3G\r\n\r\nNokia E5 có pin khỏe, cho phép đàm thoại liên tục 18,5 giờ, thời gian chờ một tháng. Máy chạy trên hệ điều hành S60 phiên bản thứ ba, thiết kế với bàn phím QWERTY phía dưới màn hình cứng, hỗ trợ người dùng nhắn tin, soạn thảo văn bản.\r\n\r\nĐây cũng là model tích hợp phần mềm Ovi Maps, hỗ trợ định vị, dẫn đường. Máy cài đặt sẵn các ứng dụng như Nokia Messaging, Ovi Mail.', '', 0, 'Nokia E5.jpg', 'tin_tuc', 'Sưu tầm', 3, '2015-06-20 00:00:00', '2015-06-20 00:00:00'),
(7, 'Sony Ericsson \'kết\' Android và bỏ mặc Symbian', 'Hãng này khẳng định trên Bloomberg rằng không có kế hoạch phát triển smartphone chạy hệ điều hành của Nokia trong tương lai.', 'Sony Ericsson \'kết\' Android và bỏ mặc Symbian\r\nHãng này khẳng định trên Bloomberg rằng không có kế hoạch phát triển smartphone chạy hệ điều hành của Nokia trong tương lai.\r\n\r\nSony Ericsson cho biết sẽ tập trung vào sản xuất thiết bị chạy trên Android, nền tảng đang phát triển mạnh mẽ nhất hiện nay. Ngoài ra, công ty này còn có kế hoạch hỗ trợ hệ điều hành Windows Phone 7 của Microsoft .\r\n\r\nTheo thống kê gần đây, Symbian vẫn là hệ điều hành phổ biến nhất dành cho điện thoại di động trên thế giới do được sử dụng trên nhiều thiết bị giá rẻ. Theo dự đoán của Gartner, Symbian sẽ thất thế vào năm 2014 trước sự bành trướng của Android.', '', 0, 'Sony-Ericsson-Satio.jpg', 'tin_tuc', 'Sưu tầm', 3, '2015-06-20 00:00:00', '2015-06-20 00:00:00'),
(8, 'Nokia C7 phiên bản màu trắng xuất hiện', 'Những hình ảnh chi tiết về phiên bản màu trắng của mẫu smartphone chạy Symbian^3 nối tiếp model Nokia N8 đã xuất hiện trên mạng.', 'Nokia C7 phiên bản màu trắng xuất hiện\r\nNhững hình ảnh chi tiết về phiên bản màu trắng của mẫu smartphone chạy Symbian^3 nối tiếp model Nokia N8 đã xuất hiện trên mạng.\r\n\r\nNokia C7 là mẫu smartphone mới của Nokia, chạy trên hệ điều hành Symbian^3 tương tự như đàn anh N8. Máy được trang bị màn hình cảm ứng điện dung với kích thước 3,5 inch, trang bị thêm camera có độ phân giải lên tới 8 Megapixel cùng ống kính Carl Zeiss và đèn flash kép.\r\n\r\nĐây là chiếc điện thoại di động tiếp theo của Nokia chạy trên hệ điều hành Symbian^3 sau N8, loạt hình ảnh mới của thiết bị xuất hiện trên một website Trung Quốc. Máy có màn hình cảm ứng điện dung rộng 3,5 inch, máy ảnh 8 Megapixel với ống kính Carl Zeiss, hai đèn flash LED.\r\n\r\nSau khi những hình ảnh về Nokia C7 phiên bản màu đồng tại Trung Quốc đã được tung lên mạng, những bức hình chi tiết khác về phiên bản C7 màu trắng cũng bắt đầu xuất hiện.', '', 0, 'Nokia C7.jpg', 'tin_tuc', 'Sưu tầm', 3, '2015-06-20 00:00:00', '2015-06-20 00:00:00'),
(9, 'Samsung Wave có mặt trên thị trường từ 28/5', 'Chiếc điện thoại di động chạy Bada đầu tiên của Samsung sẽ xuất hiện tại Anh vào 28/5, model nổi bật với màn hình Super AMOLED.', 'Samsung Wave có mặt trên thị trường từ 28/5\r\nChiếc điện thoại di động chạy Bada đầu tiên của Samsung sẽ xuất hiện tại Anh vào 28/5, model nổi bật với màn hình Super AMOLED.\r\n\r\nCác nhà mạng ở Anh đã cho phép đặt hàng, người dùng sẽ nhận được máy vào cuối tháng này. Nhà cung cấp dịch vụ Orange cho biết, người dùng sẽ sở hữu máy miễn phí khi ký hợp đồng 2 năm, cước phí mỗi tháng khoảng 23 euro (200 phút gọi, nhắn tin và vào Internet không hạn chế). Trong khi đó, tại Việt Nam, Samsung cho biết máy sẽ có giá trên dưới 8 triệu đồng.\r\n\r\nWave S8500 là chiếc smartphone đầu tiên chạy Bada, model có màn hình cảm ứng Super AMOLED rộng 3,3 inch, camera 5 Megapixel và hỗ trợ quay video 720p.', '', 0, 'Samsung S8500 Wave.jpg', 'tin_tuc', 'Sưu tầm', 3, '2015-06-20 00:00:00', '2015-06-20 00:00:00'),
(10, 'Điện thoại bán trong tháng 5', 'HTC sẽ bán chính thức Desire và HD Mini, trong khi Samsung trình làng Wave S8500. LG sẽ có bản Cookie mới và Mini thời trang.', 'Điện thoại bán trong tháng 5\r\nHTC sẽ bán chính thức Desire và HD Mini, trong khi Samsung trình làng Wave S8500. LG sẽ có bản Cookie mới và Mini thời trang.\r\n\r\nMặc dù các phiên bản Desire và HD Mini đã xuất hiện trên thị trường xách tay, nhưng hàng chính hãng vẫn chưa được HTC Việt Nam tung ra. Sau Milestone, Motorola sẽ thêm Backflip với kiểu dáng gập độc đáo cho thị trường châu Á. Danh sách các mẫu điện thoại di động đáng chú ý bán trong tháng này còn có các model cảm ứng Samsung, LG.\r\n\r\nHTC Desire\r\n\r\nĐây là một phiên bản của Nexus One mang thương hiệu HTC với một vài sửa đổi về thiết kế, như viên bi được thay bằng nút điều hướng quang học, RAM tăng lên 64 MB và có thêm giao diện Sense. Máy sở hữu màn hình AMOLED 3,7 inch, chạy Android 2.1. Hàng chính hãng sắp bán, còn hàng xách tay đang có giá 12,5 triệu đồng.\r\n\r\nHTC HD Mini\r\n\r\nHD Mini là một trong những mẫu di động chạy Windows Mobile cuối cùng từ HTC với thiết kế gọn gàng. Máy chuẩn bi ra mắt thị trường chính hãng với giá hơn 10 triệu đồng. Model này có màn hình cảm ứng rộng 3,2 inch, công nghệ điện dung, hỗ trợ đa điểm.\r\n\r\nSamsung Wave S8500\r\n\r\nS8500 là chiếc di động đầu tiên chạy trên hệ điều hành Samsung Bada, nền tảng được hãng công bố từ cuối năm ngoái. Model này sở hữu màn hình Super AMOLED, tốc độ 1GHz và các tính năng hướng tới giải trí, kết nối.\r\n\r\nLG Mini GD880\r\n\r\nMini ngoài màn hình rộng 3,2 inch, còn có camera 5 Megapixel, tích hợp kết nối 3G với HSDPA 7,2 Mb/giây, Wi-Fi và GPS. Máy thêm đài FM và khe cắm thẻ nhớ microSD tích hợp, đây là chiếc di động đầu tiên sử dụng HTML5.\r\n\r\nSamsung B3410 CorbyChat\r\n\r\nPhiên bản CorbyChat với kết nối Wi-Fi sẽ có mặt trên thị trường trong tháng này. Model có màn hình cảm ứng 2,6 inch, bàn phím QWERTY trượt ngang, không có 3G và GPS, camera của máy là 2 Megapixel.\r\n\r\nMotorola Backflip\r\n\r\nBackflip phiên bản cho châu Á sẽ bán trong tháng này, model có bàn phím lật xoay khá độc đáo. Máy sở hữu màn hình chạm 3,2 inch, chạy trên hệ điều hành Android, camera 5 Megapixel.\r\n\r\nLG Cookie Plus GS500\r\n\r\nĐây là bản nâng cấp của Cookie KP500 với các tính năng mới như 3G/HSDPA. Máy có giao diện đẹp, hỗ trợ khả năng điều khiển bằng tay tốt.', '', 0, 'HTC Desire.jpg', 'tin_tuc', 'Sưu tầm', 3, '2015-06-20 00:00:00', '2015-06-20 00:00:00'),
(11, 'HTC Desire HD bắt đầu được bán (25/10/2010)', 'HTC đã bắt đầu bán Desire HD tại Anh trên mạng Three và Vodafone, đây là mẫu Android chạy GSM mạnh nhất của nhà sản xuất Đài Loan. .... ', 'HTC Desire HD bắt đầu được bán (25/10/2010)\r\n\r\nHTC đã bắt đầu bán Desire HD tại Anh trên mạng Three và Vodafone, đây là mẫu Android chạy GSM mạnh nhất của nhà sản xuất Đài Loan.\r\nTại Anh, mẫu di động này bán ra sẽ đi kèm theo hợp đồng. Trên mạng Three, người dùng có thể trả 40 bảng mỗi tháng để hưởng 2.000 phút gọi ngoại mạng và 5.000 phút nội mạng, cùng với 1GB data và 5.000 tin nhắn. Trong khi đó, giá mua đứt máy là 500 bảng Anh tương đương 13,8 triệu đồng.\r\n\r\nTên mạng Vodafone, model này sẽ đi kèm hợp đồng hơn 35 bảng mỗi tháng, người dùng sẽ được hưởng các ưu đãi như 900 phút gọi, 750MB dữ liệu download... Hiện chưa có giá bán đứt model này vẫn chưa có.\r\n\r\nDesire HD là chiếc Android mạnh mẽ từ HTC với màn hình cảm ứng 4,3 inch, máy ảnh 8 Megapixel và hỗ trợ quay phim HD. Máy sử dụng vi xử lý 1GHz, hệ điều hành Android 2.2, tích hợp các tính năng giải trí tốt.\r\n', '', 0, 'HTC Desire.jpg', 'tin_tuc', 'Sưu tầm', 3, '2015-06-20 00:00:00', '2015-06-20 00:00:00'),
(12, 'Sony Ericsson Shakira X8 giá gần 6 triệu (23/10/2010)', 'Sony Ericsson X8, phiên bản rút gọn của X10, hàng chính hãng đã có mặt tại Việt Nam với giá gần 6 triệu đồng. Sony Ericsson X8 có thiết kế lớn hơn X10 Mini với 4 góc máy bo tròn, kết hợp hài hòa cùng những đường cong mềm mại hai bên thân giống như các model Elm, Hazel… ra mắt trước đó. .... ', 'Sony Ericsson Shakira X8 giá gần 6 triệu (23/10/2010)\r\n\r\nSony Ericsson X8, phiên bản rút gọn của X10, hàng chính hãng đã có mặt tại Việt Nam với giá gần 6 triệu đồng.\r\n\r\nSony Ericsson X8 có thiết kế lớn hơn X10 Mini với 4 góc máy bo tròn, kết hợp hài hòa cùng những đường cong mềm mại hai bên thân giống như các model Elm, Hazel… ra mắt trước đó.\r\nX8 sở hữu chip Qualcomm MSM7227 600MHz cùng 156MB RAM giúp X8 mạnh mẽ hơn trong việc xử lý cũng như chạy các chương trình ứng dụng trên máy. Ứng dụng được cài trên X8 được chọn lựa từ 100.000 ứng dụng hữu ích khác nhau. Với các phần mềm cài thêm, người dùng có thể tùy chỉnh giao diện, thực hiện các thao tác giải trí, lướt web và các tác vụ liên quan đến công việc dễ dàng và tiện lợi.\r\n\r\nChức năng Timescape cho phép quản lý mọi thông tin cá nhân trên điện thoại. Khi ứng dụng được kích hoạt, người dùng có thể quản lý nội dung tin nhắn, e-mail, danh sách cuộc gọi cùng các ca khúc, video clip, hình ảnh, cập nhật trên Facebook, Twitter một cách hiệu quả, dễ dàng... Người dùng có thể sắp xếp các nội dung đó một cách chính xác theo trình tự thời gian.\r\n\r\nX8 được trang bị màn hình cảm ứng điện dung TFT 3 inch hỗ trợ 16 triệu màu. Các điểm ảnh có độ phân giải 320 x 480 pixel đảm bảo hiển thị hình ảnh và các văn bản sắc nét cùng với bề mặt chống xước. Các cảm biến gia tốc cho phép giao diện tự động xoay, tính năng này cho phép màn hình hiển thị nội dung tùy thuộc vào người sử dụng ở mọi góc nhìn.\r\nChất lượng hình ảnh trên X8 rất tốt.\r\n\r\nMáy ảnh trên điện thoại chỉ 3 Megapixel, không hỗ trợ flash và autofocus nhưng chất lượng hình ảnh rất rõ nét. Ngoài chức năng chụp ảnh, X8 còn được hỗ trợ thêm một số tính năng khác như chia sẻ hình ảnh trực tiếp từ điện thoại lên các mạng xã hội (Facebook, Picasa...) thông qua kết nối Wi-Fi và mạng 3G, gán hình định vị...\r\n\r\nBộ nhớ trong khá khiêm tốn, chỉ với 128MB, nhưng bù lại X8 hỗ trợ khe cắm thẻ nhớ microSD lên đến 16GB đảm bảo cho người dùng thỏa sức lưu trữ thông tin, hình ảnh, nhạc, video...\r\nNgoài những tính năng nổi bật về thiết kế, multimedia, kết nối..., pin cũng là một đặc điểm nổi bật của chiếc Android bình dân này. Đối với điện thoại thông minh sử dụng hệ điều hành, khả năng tiêu thụ năng lượng lớn hơn rất nhiều so với những chiếc điện thoại thông thường. Chính vì thế, Sony Ericsson đã trang bị một pin Li-Ion với dung lượng 1.200 mAh cho máy, đảm bảo thời lượng sử dụng được kéo dài lâu hơn so với những chiếc điện thoại thông minh khác.\r\n\r\nNgoài ra, hệ điều hành Android 1.6 của X8 sẽ được nâng cấp lên phiên bản 2.1 giúp tăng thêm thời lượng pin.\r\n', '', 0, 'Sony Ericsson Shakira X8.jpg', 'tin_tuc', 'Sưu tầm', 3, '2015-06-20 00:00:00', '2015-06-20 00:00:00'),
(13, 'Giới thiệu', '', 'Đang cập nhật.', '', 0, '', 'gioi_thieu', '', 3, '2015-06-24 00:00:00', '2015-06-24 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trang_thai`
--

DROP TABLE IF EXISTS `trang_thai`;
CREATE TABLE IF NOT EXISTS `trang_thai` (
  `ma_trang_thai` int(11) NOT NULL AUTO_INCREMENT,
  `ten_trang_thai` varchar(250) NOT NULL,
  `nhom_trang_thai` varchar(50) NOT NULL,
  PRIMARY KEY (`ma_trang_thai`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `trang_thai`
--

INSERT INTO `trang_thai` (`ma_trang_thai`, `ten_trang_thai`, `nhom_trang_thai`) VALUES
(1, 'Hiển thị', 'san_pham'),
(2, 'Không hiển thị', 'san_pham'),
(3, 'Hiển thị', 'tin_tuc'),
(4, 'Không hiển thị', 'tin_tuc'),
(5, 'Kích hoạt', 'nguoi_dung'),
(7, 'Không kích hoạt', 'nguoi_dung');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD CONSTRAINT `fk_nguoidung_trangthai` FOREIGN KEY (`ma_trang_thai`) REFERENCES `trang_thai` (`ma_trang_thai`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `fk_sp_hangsx` FOREIGN KEY (`ma_hang_san_xuat`) REFERENCES `hang_san_xuat` (`ma_hang_san_xuat`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_sp_theloai` FOREIGN KEY (`ma_the_loai`) REFERENCES `loai_san_pham` (`ma_the_loai`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_sp_trangthai` FOREIGN KEY (`ma_trang_thai`) REFERENCES `trang_thai` (`ma_trang_thai`);

--
-- Các ràng buộc cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD CONSTRAINT `fk_tintuc_trangthai` FOREIGN KEY (`ma_trang_thai`) REFERENCES `trang_thai` (`ma_trang_thai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
