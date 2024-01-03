-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 15, 2023 lúc 08:24 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cnw4s`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminEmail` varchar(255) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminPass` varchar(150) NOT NULL,
  `lever` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`adminID`, `adminName`, `adminEmail`, `adminUser`, `adminPass`, `lever`) VALUES
(2, 'ThuyTrang', 'Trang123@gmail.com', 'thuytrang', '21232f297a57a5a743894a0e4a801fc3', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `Id` int(11) NOT NULL,
  `Namebanner` varchar(255) NOT NULL,
  `HinhAnh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`Id`, `Namebanner`, `HinhAnh`) VALUES
(3, 'Hình 1', 'images/slideshow-banners/home3-banner.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaHD` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaHD`, `MaSP`, `SoLuong`, `DonGia`) VALUES
(43, 111, 1, 260000),
(43, 114, 2, 170000),
(43, 115, 1, 250000),
(43, 111, 1, 260000),
(43, 114, 2, 170000),
(43, 115, 1, 250000),
(43, 111, 1, 260000),
(43, 114, 2, 170000),
(43, 115, 1, 250000),
(43, 114, 3, 170000),
(43, 114, 3, 170000),
(43, 114, 3, 170000),
(43, 114, 2, 170000),
(43, 113, 1, 230000),
(43, 109, 1, 250000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `ComID` int(11) NOT NULL,
  `TenUser` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Star` int(11) NOT NULL,
  `Tomtat` varchar(255) NOT NULL,
  `Noidung` varchar(255) NOT NULL,
  `NgayCom` date NOT NULL,
  `MaSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDM` int(11) NOT NULL,
  `TenDM` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`MaDM`, `TenDM`) VALUES
(1, 'Baby Girl'),
(2, 'Baby Boy'),
(3, 'Sale');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `MaND` int(11) NOT NULL,
  `NgayLap` datetime NOT NULL,
  `NguoiNhan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PhuongThucTT` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TongTien` float NOT NULL,
  `TrangThai` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaND`, `NgayLap`, `NguoiNhan`, `SDT`, `DiaChi`, `PhuongThucTT`, `TongTien`, `TrangThai`) VALUES
(43, 12, '2023-10-10 16:54:18', 'boutique', '0357659930', 'Bắc ninh', '', 500, '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MaKM` int(11) NOT NULL,
  `TenKM` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LoaiKM` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `GiaTriKM` float(11,0) NOT NULL,
  `NgayBD` date NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`MaKM`, `TenKM`, `LoaiKM`, `GiaTriKM`, `NgayBD`, `TrangThai`) VALUES
(1, 'Không khuyến mãi', 'Nothing', 0, '2022-11-10', 1),
(2, 'Giảm giá', 'GiamGia', 500000, '2022-11-10', 1),
(3, 'Giá rẻ online', 'GiaReOnline', 650000, '2022-11-10', 1),
(4, 'Mới ra mắt', 'MoiRaMat', 200, '2022-11-10', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLSP` int(11) NOT NULL,
  `TenLSP` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `MaDM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLSP`, `TenLSP`, `MaDM`) VALUES
(1, 'Phụ kiện ', 1),
(2, 'Túi xách', 1),
(7, 'Thời trang', 2),
(44, 'Giày', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaND` int(11) NOT NULL,
  `Ho` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Ten` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `TaiKhoan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MaQuyen` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`MaND`, `Ho`, `Ten`, `GioiTinh`, `SDT`, `Email`, `DiaChi`, `TaiKhoan`, `MatKhau`, `MaQuyen`, `TrangThai`) VALUES
(12, 'Mister', 'Underound', 'Male', '0123456789', 'MisterUnderound@123,com', 'Baoiugho', 'Mister', '21232f297a57a5a743894a0e4a801fc3', 1, 1),
(67, 'Phạm Thị Lan', 'Anh', 'Female', '0123555666', 'lananhulsa@gmail.com', 'Thái Bình', 'lananh', '9d9ca0162c8cc09f018f37c3d37bc8b3', 1, 1),
(72, '', 'Trang', 'Male', '051515415', 'admin123@gmail.com', 'VietNam', 'Trang', 'e6e061838856bf47e1de730719fb2609', 1, 1),
(73, 'Khôi', 'Đăng', 'Male', '0344045289', 'lananh.ulsa.148@gmail.com', 'Thái Bình', 'dangkhoi', '1de3f1191cf4d8b9f05888accefc88b2', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `MaQuyen` int(11) NOT NULL,
  `TenQuyen` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ChiTietQuyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`MaQuyen`, `TenQuyen`, `ChiTietQuyen`) VALUES
(1, 'Customer', 'Khách hàng có tài khoản'),
(2, 'Admin', 'Quản trị viên'),
(3, 'Personnel', 'Nhân Viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `MaLSP` int(11) NOT NULL,
  `MaDM` int(11) NOT NULL,
  `TenSP` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` int(11) NOT NULL,
  `SoLuong` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `HinhAnh1` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HinhAnh3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaKM` int(11) NOT NULL,
  `SoSao` int(11) DEFAULT NULL,
  `SoDanhGia` int(11) DEFAULT NULL,
  `TrangThai` int(11) NOT NULL,
  `MoTa` text COLLATE utf8_unicode_ci NOT NULL,
  `MotaCT` text COLLATE utf8_unicode_ci NOT NULL,
  `Time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `MaLSP`, `MaDM`, `TenSP`, `DonGia`, `SoLuong`, `HinhAnh1`, `HinhAnh2`, `HinhAnh3`, `MaKM`, `SoSao`, `SoDanhGia`, `TrangThai`, `MoTa`, `MotaCT`, `Time`) VALUES
(109, 7, 1, 'Váy Công Chúa Poopi', 250000, 15, 'images/Women/vay4.jpeg', 'images/Women/vay5.jpeg', 'images/Women/vay6.jpeg', 1, 0, 0, 1, 'Váy Bé Gái Poopi, Đầm Bé Gái Mặc Hè, Đầm Công Chúa Cho Trẻ Em, Váy Bé Gái Đẹp, Váy Bé Gái Mùa Hè', 'Váy công chúa bé gái Thiết kế sang trọng mặc đi chơi, đi dự tiệc, biểu diễn văn nghệ đều rất đẹp. Đường may tinh tế, chắc chắn, đều đẹp, tỉ mỉ từng đường kim mũi chỉ được kiểm soát chặt chẽ. Tạo nên form dáng đẹp cùng cảm giác thoải mái cho bé khi mặc.', '2023-10-11'),
(111, 7, 1, ' Set đồ thu Bear Leader', 260000, 28, 'images/Women/dress51.jpeg', 'images/Women/dress52.jpeg', 'images/Women/dress53.jpeg', 2, 0, 0, 1, 'Chất liệu: Bông/Polyester', 'Đầm Thời Trang Mùa Thu Mới 2023 Đính Nơ Xinh Xắn Cho Bé Gái 2 7 Tuổi', '2023-10-11'),
(113, 7, 1, 'Set đồ Bear Leader Hàn', 230000, 30, 'images/Women/dress21.jpeg', 'images/Women/dress22.jpeg', 'images/Women/dress23.jpeg', 4, 0, 0, 1, 'Chất liệu: Bông / Polyester', 'Set đồ BEAR LEADER gồm áo sweater cổ bẻ đính nơ + chân váy ngắn thời trang cho bé gái', '2023-10-11'),
(114, 1, 1, 'Váy Nơ Đen Cho Bé Gái \"Elegance Enfants\"', 170000, 29, 'images/Women/dress91.jpeg', '', '', 1, 0, 0, 1, 'Tên vải: Dệt kim', 'BEAR LEADER Đầm Len Tay Dài Đính Nơ Thời Trang Thu Đông Dành Cho Bé Gái 2-6 Tuổi', '2023-10-11'),
(115, 7, 1, 'Váy Hoa Nơ Đỏ Cho Trẻ Em \"Hương Hoa Đỏ\"', 250000, 36, 'images/Women/dress32.jpeg', 'images/Women/dress31.jpeg', '', 1, 0, 0, 1, 'Chất liệu: Cotton, poly', 'Đầm Công Chúa Tay Phồng Phối Lưới Thêu Hoa Đính Nơ Ngọt Ngào Cho Bé Gái', '2023-10-11'),
(116, 7, 1, 'Áo sweater và đầm dệt kim thời trang ', 250000, 35, 'images/Women/dress43.jpeg', 'images/Women/dress42.jpeg', '', 1, 0, 0, 1, 'Tên bông: Dệt kim', 'Set đồ BEAR LEADER gồm áo sweater và đầm dệt kim thời trang thu đông cho bé gái 3-7 tuổi', '2023-10-11'),
(117, 7, 1, 'Váy Kẻ Sọc Gấu \"Charme Rayures\"', 300000, 45, 'images/Women/dress61.jpeg', 'images/Women/dress62.jpeg', 'images/Women/dress63.jpeg', 4, 0, 0, 1, 'Chất liệu: Cotton/ Polyester', 'Set trang phục BEAR LEADER 3 món họa tiết kẻ sọc thời trang xinh xắn cho bé gái', '2023-10-11'),
(118, 1, 1, 'Tất Hồng Candy Crush', 1500, 50, 'images/Women/socks12.jpeg', 'images/Women/socks11.jpeg', '', 2, 0, 0, 1, 'Chất liệu: Cotton', 'Tất cotton cổ ngắn viền ren xinh xắn cho bé gái sơ sinh', '2023-10-11'),
(119, 44, 1, ' Giày Nơ \"Nữ Tính Chic\"', 170000, 15, 'images/Women/shoes21.jpeg', 'images/Women/shoes22.jpeg', 'images/Women/shoes23.jpeg', 1, 0, 0, 1, 'Chất liệu Giày được làm từ da PU tổng hợp siêu êm và dễ vệ sinh', 'Giày Búp Bê Cho Bé Gái Tập Đi Từ 0-4 Tuổi Vintage Chất Da Mề Gắn Nơ Bồng Phong Cách Thời Trang ', '2023-10-11'),
(121, 1, 1, 'Tất búp bê', 16000, 15, 'images/Women/socks23.jpeg', 'images/Women/socks22.jpeg', 'images/Women/socks21.jpeg', 3, 0, 0, 1, 'Chất liệu: Len hàn mềm mịn thoáng khí', 'Tất vớ đùi cho bé gái NEMO BABY siêu xinh gắn nơ thiết kế viền thoáng khí phong cách vintage Hàn Quốc mới nhất TL07', '2023-10-11'),
(122, 7, 2, 'Áo khoác bé trai', 300000, 35, 'images/Women/jacket12.jpeg', 'images/Women/jacket13.jpeg', 'images/Women/jacket11.jpeg', 4, 0, 0, 1, 'Chất liệu: Nỉ ngoại', 'Dáng đồ Taho theo phong cách thiết kế hàn quốc nên khá ôm ngừi, vừa vặn. Với những bé đậm người hoặc muốn mặc rộng thì nên tăng size', '2023-10-11'),
(123, 44, 2, 'Sneakers bé trai', 358000, 25, 'images/Women/shoes13.jpeg', 'images/Women/shoes12.jpeg', 'images/Women/shoes11.jpeg', 3, 0, 0, 1, 'Bảng màu đều rất dễ phối đồ, hàng loại 1 cao cấp, đẹp từng đường kim mũi chỉ', 'Giầy thể thao Quảng Châu cao cấp cho bé trai và bé gái từ 1-10 tuổi mã mới TT2309', '2023-10-11'),
(124, 1, 2, 'Túi xách bé trai', 168000, 35, 'images/Women/bagboy1.jpeg', 'images/Women/bagboy2.jpeg', '', 2, 0, 0, 1, ' \r\nTúi Đeo Chéo Cho Bé Gái và Bé Trai - Loại Túi Chống Nước Phong Cách Hàn Quốc', 'Túi đeo chéo cho bé phong cách Hàn Quốc là một phụ kiện đáng ưu và hữu ích cho các con. Khi có chiếc túi này mẹ không sợ thất lạc đồ và hơn nữa đây là một phù kiện thời trang cực kỳ phá cách cho con.', '2023-10-11'),
(125, 7, 2, 'Quần đùi Kaki cho bé trai', 270000, 36, '\r\nimages/Women/jean1.jpeg', 'images/Women/jean13.jpeg', '', 1, 0, 0, 1, 'Chất liệu: Jean thoáng khí,  thấm hút mồ hôi, có độ co giãn', 'Quần short jean lưng thun cho bé trai size từ 11kg - 45kg có độ co giãn mềm mịn thoải mái vận động', '2023-10-11'),
(126, 7, 2, 'Áo Khoác Nỉ Hoodie Cho Bé Trai', 250000, 21, 'images/Women/jacket22.jpeg', 'images/Women/jacket23.jpeg', '', 1, 0, 0, 1, 'Chất Liệu: Nỉ Ngoại', 'Dáng đồ Taho theo phong cách thiết kế Hàn Quốc nên khá ôm người, vừa vặn. Với những bé đậm người hoặc muốn mặc rộng rài hơn thì nên chọn tăng thêm 1 size.', '2023-10-11'),
(127, 7, 2, 'Áo thun bé trai cộc tay siêu ngầu', 230000, 15, 'images/Women/heni13.jpeg', 'images/Women/heni12.jpeg', 'images/Women/heni11.jpeg', 2, 0, 0, 1, '\r\nÁo cotton 100% mềm mịn, thấm hút mồ hôi tốt, Form híp hop. ', 'Áo in 2 mặt kết hợp quần jean, kaki đùi, lửng hay quần dài cũng siêu cưng, thoải mái cho bé vui chơi, vận động, Bé mặc thoải mái lắm ạ', '2023-10-11'),
(128, 7, 2, 'Áo jacket bé trai', 360000, 15, 'images/Women/jacket32.jpeg', 'images/Women/jacket33.jpeg', 'images/Women/jacket31.jpeg', 4, 0, 0, 1, 'Màu sắc có thể đậm hoặc nhạt hơn hình 0-3%', 'Dáng đồ Taho theo phong cách thiết kế Hàn Quốc nên khá ôm người, vừa vặn. Với những bé đậm người hoặc muốn mặc rộng rài hơn thì nên chọn tăng thêm 1 size.\r\n', '2023-10-11'),
(129, 44, 2, 'Giày Thể Thao Cho Bé Trai ', 310000, 20, 'images/Women/shoes92.jpeg', 'images/Women/shoes93.jpeg', 'images/Women/shoes91.jpeg', 1, 0, 0, 1, 'Giày Thể Thao Cho Bé Trai Bé Gái Thời Trang Thoáng Khí Siêu Nhẹ', '- Mẫu dép dành cho các bé tập đi rất nhẹ, đế êm, quai da mềm.\r\n\r\n- Kiểu thiết kế cực đáng yêu, quai dạng dán dễ dàng tra chân bé,\r\n\r\n- Đế kếp má sát tốt chống trơn trợt\r\n\r\n- Sản phẩm có nhiều màu sắc cho cả bé trai và bé gái nên cực kỳ dễ chọn và phối đồ, đi dịp gì cũng hợp\r\n\r\n- Sản phẩm phù hợp cho bé từ tầm 12 tháng đến dưới 10 tuổi.', '2023-10-11'),
(131, 1, 1, 'Băng đô bé gái', 15000, 25, 'images/Women/head11.jpeg', 'images/Women/bangdo1.jpeg', '', 1, 0, 0, 1, 'Băng đô nơ & kẹp tóc nơ cho bé gái cực đáng yêu, phối được nhiều mẫu quần áo khác nhau, cho bé càng thêm xinh', '?? ĐẶC BIỆT: Khi ba mẹ order sản phẩm sẽ được kèm theo thêm quà tặng ngẫu nhiên cho bé yêu nữa nhé ', '2023-10-11'),
(132, 1, 1, 'Băng Đô tiểu thư', 17000, 15, 'images/Women/head12.jpeg', 'images/Women/bangdo2.jpeg', '', 1, 0, 0, 1, 'Băng Đô Cho Bé Gái - Băng Đô Turban Che Thóp Trắng Ren Xinh', '- Chất liệu: Cotton + ren mềm \r\n- Co giãn, rất mềm cho bé sơ sinh', '2023-10-11'),
(133, 7, 1, 'Body suit', 230000, 15, 'images/Women/body1.jpeg', 'images/Women/body1.jpeg', 'images/Women/body2.jpeg', 2, 0, 0, 1, 'Chất liệu : Cotton organic co dãn 4 chiều dày mặn,mềm mịn phù hợp với độ tuổi 0-18m .vải mềm mại,co dãn thấm hút hồ hôii hột.', 'Sản phẩm phù hợp 4 mùa.đặc biệt với các bé sơ sinh không thể thiếu nha các mẹ ơiiii\r\nBody suit dài tay tặng kèm tai thỏ xinh xắn phong cách Hàn quốc cho em bé trao bé gái sơ sinh từ 3-18 tháng nặng 4-11kg', '2023-10-11'),
(134, 7, 1, 'Váy hoa nhí kèm băng đô bé gái', 300000, 25, 'images/Women/nhi3.jpeg', 'images/Women/nhi2.jpeg', 'images/Women/nhi1.jpeg', 2, 0, 0, 1, 'Váy bodysuit (kèm turban nơ) muslin hoa nhí siêu vintage phong cách Hàn cho bé gái 5-13kg', 'Váy bodysuit (kèm turban nơ) muslin hoa nhí siêu vintage phong cách Hàn cho bé gái 5-13kg\r\nChất vải muslin thấm hút mồ hôi, rất thích hợp cho mùa Hè này luôn đó các mẹ ạ.\r\n', '2023-10-11'),
(135, 7, 1, 'Đầm váy tiểu thư cho bé gái Tutupetti', 350000, 15, 'images/Women/vaytt1.jpeg', 'images/Women/vaytt2.jpeg', '', 4, 0, 0, 1, 'Chất vải lụa thỏa mãn tiêu chí: Mềm mịn, thoáng mát và siêu thấm mồ hôi, dịu da và an toàn cho da em bé.', 'Với mong muốn đem đến các sản phẩm tốt nhất cho bé, tiết kiệm nhất cho mẹ, shop sản xuất thêm nhiều mẫu mã sản phẩm mới, lựa chọn các loại vải có độ co giãn tốt, thấm hút mồ hôi và thoáng mát, để bé thoải mái vận động không lo bị nóng.', '2023-10-11'),
(136, 1, 1, 'Vớ công chúa Sanlutoz màu đỏ dễ thương cho bé gái', 13000, 5, 'images/Women/tat1.jpeg', 'images/Women/tat2.jpeg', '', 1, 0, 0, 1, 'Vải: 100% cotton\r\nMùa mặc thích hợp: xuân, hạ, thu, đông', 'Thiết kế dành cho bé trai và bé gái; Thích hợp để mang hàng ngày hoặc dịp đặc biệt', '2023-10-12');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`Id`) USING BTREE;

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD KEY `MaHD` (`MaHD`) USING BTREE,
  ADD KEY `MaSP` (`MaSP`) USING BTREE;

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDM`) USING BTREE;

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`) USING BTREE,
  ADD KEY `MaKH` (`MaND`) USING BTREE;

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MaKM`) USING BTREE;

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLSP`) USING BTREE,
  ADD KEY `MaDM` (`MaDM`) USING BTREE,
  ADD KEY `MaLSP` (`MaLSP`,`MaDM`) USING BTREE,
  ADD KEY `MaLSP_2` (`MaLSP`) USING BTREE,
  ADD KEY `MaDM_2` (`MaDM`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaND`) USING BTREE,
  ADD KEY `MaQuyen` (`MaQuyen`) USING BTREE;

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`MaQuyen`) USING BTREE;

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`) USING BTREE,
  ADD KEY `LoaiSP` (`MaLSP`) USING BTREE,
  ADD KEY `MaKM` (`MaKM`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MaKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `MaQuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`MaND`);

--
-- Các ràng buộc cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`MaQuyen`) REFERENCES `phanquyen` (`MaQuyen`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`MaKM`) REFERENCES `khuyenmai` (`MaKM`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`MaLSP`) REFERENCES `loaisanpham` (`MaLSP`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
