-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th8 11, 2021 lúc 01:29 PM
-- Phiên bản máy phục vụ: 10.3.15-MariaDB
-- Phiên bản PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `image` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `image`, `created_at`) VALUES
(3, 'NGUỒN GỐC CỦA PIZZA', 'Giống như rất nhiều món ngon ẩm thực được đánh giá cao nhất của đất nước Ý như rượu vang, dầu ô liu và phô mai, chiếc bánh tinh túy từ thành phố Naples, nơi pizza được sinh r a, đã trở nên đáng trân trọng đến nỗi giờ đây nó đã được Chỉ định Nguồn gốc Kiểm soát từ DOC. Truyền thống làm bánh pizza của thành phố thậm chí còn nhận được sự công nhận của Unesco vào năm 2017 như một vật phẩm di sản văn hóa phi vật thể.', '610bef30a3599_cate4.jpg', '2021-07-17 16:48:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `image`, `created_at`) VALUES
(6, 'Pizza Hải Sản Pesto', '610bef5f8a6dc_cate1.jpg', '2021-07-28 10:03:00'),
(8, 'Pizza Thập cẩm cao cấp', '610bef674463b_cate2.jpg', '2021-07-28 10:05:40'),
(9, 'Pizza Truyền thống', '610bef6f020c0_cate3.jpg', '2021-07-28 10:06:36'),
(10, 'Đồ uống', '610bef78f3b22_dr.jpg', '2021-07-28 10:07:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `id_customer` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `name_pr` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `totalprice` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `note` text DEFAULT NULL,
  `payment` varchar(30) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `checkout`
--

INSERT INTO `checkout` (`id`, `id_customer`, `name`, `name_pr`, `email`, `address`, `phone`, `totalprice`, `status`, `note`, `payment`, `created_at`) VALUES
(38, 'NfGgJUqnYt', 'Phạm Văn Minh', 'Pizza Aloha', 'mincoldly9999@gmail.com', ' Hà Nội,,, ', '0869838806', 308000, 'Đặt Hàng Thành Công', '', 'Thanh Toán Trực Tiếp', '2021-08-11 15:01:29'),
(39, 'OlmLaFDxXq', 'Phạm Văn Minh', 'Pizza Hải Sản Pesto Xanh', 'mincoldly9999@gmail.com', '345 Khương Trung Thanh Xuân Hà Nội,Thanh xuân,hai,', '0869838806', 140000, 'Đặt Hàng Thành Công', 'Ko co gi', 'Thanh Toán Trực Tiếp', '2021-08-11 15:02:12'),
(40, 'sLkdaFX0Cl', '', 'Pizza Hải Sản Đào', '', ',,, ', '', 159000, 'Đặt Hàng Thành Công', '', 'Thanh Toán Trực Tiếp', '2021-08-11 15:08:18'),
(41, 'oDZkieyB7I', 'Phạm Văn Minh', 'Pizza Hải Sản Pesto Xanh', 'mincoldly9999@gmail.com', '345 Khương Trung Thanh Xuân Hà Nội,,, ', '0869838806', 250000, 'Đặt Hàng Thành Công', '', 'Thanh Toán Trực Tiếp', '2021-08-11 15:10:18'),
(42, 'miqVMOw2j1', 'Phạm Văn Minh', 'Pizza Hải Sản Pesto Xanh', 'admin@gmail.com', '345 Khương Trung Thanh Xuân Hà Nội,,, ', '0869838806', 140000, 'Đặt Hàng Thành Công', '', 'Thanh Toán Trực Tiếp', '2021-08-11 15:12:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `name`, `content`, `product_id`, `created_at`) VALUES
(5, 'd', 'd', 24, '2021-08-11 11:13:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` text NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `age` date NOT NULL,
  `home` varchar(100) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `workingtime` varchar(20) NOT NULL,
  `position` varchar(30) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `employee`
--

INSERT INTO `employee` (`id`, `email`, `pass`, `fullname`, `phone`, `age`, `home`, `experience`, `image`, `workingtime`, `position`, `created_at`) VALUES
(4, 'zenkyxz@gmail.com', '12345', '212diep', 12345, '2021-07-01', 'dssđ', 'sdsdsd', '60ec02ed60496_198046065_251887113372869_3001567130348227842_n.png', 'Part-Time', 'Admin', '2021-07-12 15:15:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `Ingredients` text NOT NULL,
  `image` text NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `description` text NOT NULL,
  `cate_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`id`, `name`, `Ingredients`, `image`, `price`, `discount`, `description`, `cate_id`, `created_at`) VALUES
(10, 'Pizza Hải Sản Đào', 'Tôm, Giăm bông, Đào hoà quyện bùng nổ cùng sốt Thousand Island', '6100ca29d8928_pr1.png', 129000, 10, '', 6, '2021-07-28 10:08:25'),
(11, 'Pizza Hải Sản Pesto Xanh', 'Tôm, cua, mực và bông cải xanh tươi ngon trên nền sốt Pesto Xanh', '6100ca4b3ca7f_pr2.png', 110000, 0, '', 6, '2021-07-28 10:08:59'),
(12, 'Pizza Aloha', 'Thịt nguội, xúc xích tiêu cay và dứa hòa quyện với sốt Thousand Island', '610109c34f14b_pr3.png', 149000, 20, '', 6, '2021-07-28 14:39:47'),
(13, 'Pizza Thịt Xông Khói', 'Thịt giăm bông, thịt xông khói và hai loại rau của ớt xanh, cà chua', '610109e49e239_pr4.png', 130000, 0, '', 8, '2021-07-28 14:40:20'),
(14, 'Pizza Thịt Nguội Kiểu Canada', 'Sự kết hợp giữa thịt nguội và bắp ngọt', '61010a10ae8a7_pr5.png', 150000, 0, '', 8, '2021-07-28 14:41:04'),
(15, 'Pizza Gà Nướng 3 Vị', 'Gà nướng, gà bơ tỏi và gà ướp sốt nấm', '61010a2a6d722_pr6.png', 120000, 0, '', 8, '2021-07-28 14:41:30'),
(16, 'Pizza 3 Loại Thịt Thập Cẩm Và Rau Củ', 'Sự kết hợp hài hòa của ba loại thịt và rau củ.', '61010aa624652_pr7.png', 119000, 0, '', 8, '2021-07-28 14:43:34'),
(17, 'Pizza 5 Loại Thịt Đặc Biệt', 'Xúc xích lợn và bò đặc trưng của Ý, giăm bông, thịt xông khói', '61010ac33b757_pr8.png', 119000, 0, '', 8, '2021-07-28 14:44:03'),
(18, 'Coca 300ml', '', '61137fba7778e_dr1.jpg', 10000, 0, '', 10, '2021-08-11 14:43:54'),
(20, 'Pessi', '', '6113808e3f4ce_dr2.jpg', 10000, 0, '', 10, '2021-08-11 14:47:26'),
(21, '7 up', '', '611380c34eae2_dr4.jpg', 10000, 0, '', 10, '2021-08-11 14:48:19'),
(22, 'Fanta 330ml', '', '6113818c5a8e2_dr5.jpg', 12000, 1, '', 10, '2021-08-11 14:49:42'),
(23, 'Bò húc', '', '6113826c1488d_dr6.jpg', 150000, 0, '', 10, '2021-08-11 14:54:15'),
(24, 'Pizza Xúc xích', 'Pizza cơ bản (Cà chua, phô mai mozzarella, oregano), xúc xích', '61138d41c1922_pi1.jpg', 90000, 0, '', 9, '2021-08-11 15:41:37');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
