-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 25, 2022 lúc 03:30 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btn_doan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) UNSIGNED NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `user_name`, `pass`) VALUES
(1, 'phamtho', 'admin', '1'),
(2, 'Pham thọ', 'admin1', 'c4ca4238a0b923820dcc509a6f7584');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `featured` int(1) NOT NULL DEFAULT 1,
  `active` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(1, 'Pizza', 'Food_Category_790.jpg', 1, 1),
(2, 'Hamberger', 'burger.jpg', 1, 1),
(3, 'MoMo', 'Food_Category_77.jpg', 1, 1),
(17, 'Bánh mì', 'banhmi (1).jpg', 1, 1),
(18, 'Donut', 'banh-donut-5.jpg', 1, 1),
(19, 'Kimbap', 'Kimbap.jpeg', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,3) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `featured` int(1) NOT NULL DEFAULT 1,
  `active` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `food`
--

INSERT INTO `food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(2, 'Best Burger', 'Burger với giăm bông, dứa và nhiều pho mát', '4.000', 'burger.jpg', 2, 1, 1),
(3, 'Pizza hải sản', 'Tôm sú 300 gr\r\nMực ống 200 gr\r\nỚt chuông 2 trái\r\nHành tím 1 củ', '90.000', 'pizzahaisan.jpg', 1, 1, 1),
(4, 'Bánh Momo Tây tạ', 'Momo cay ngon nhất cho mùa đông', '7.000', 'Food_Category_77.jpg', 3, 1, 1),
(9, 'Mixed Pizza', 'Pizza với gà, giăm bông, thịt nướng, nấm và rau ...', '10.000', 'Food_Category_790.jpg', 1, 1, 1),
(28, 'Bánh mì thịt bò', 'Bánh mì 4 cái\r\nThịt bò băm 500 gr\r\nDưa chuột 1 trái\r\nCà rốt 1/2 củ', '5.000', 'banh-mi-thit-bo-nuong-thumbnail-1.jpg', 17, 1, 1),
(29, 'Bánh mì kẹp cá chiên xù', 'Bánh mì: 4 ổ\r\nCá basa phi lê: 200g\r\nHành tây: 1/2 củ\r\nDưa leo : 1 trái\r\nXà lách: 1 cây', '7.000', 'banh-mi-kep-ca-chien-xu-500.jpg', 17, 1, 1),
(30, 'Bánh mì kẹp đùi gà', 'Bánh mì: 2 ổ\r\nĐùi gà góc tư: 1 miếng\r\nDừa xiêm: 1 trái\r\nDưa leo: 1 trái\r\nCà chua: 1 trái', '4.000', 'banhmikepgakhia1.png', 17, 1, 1),
(31, 'Bánh mì bóng đêm', '30 g bột bánh mì\r\n30 g nước\r\n1 g men bánh mì\r\n250 g bột bánh mì\r\n60 g bột chua', '5.000', 'avata1.jpg', 17, 1, 1),
(32, 'Bánh mì chả lụa', '1 ổ bánh mì.\r\n3 lát chả lụa.\r\n1 ít bơ hoặc nước sốt mayonnaise.\r\n1 trái dưa leo.\r\n1 ít ngò và hành lá.', '4.000', 'banh-mi-cha.jpg', 17, 1, 1),
(33, 'Bánh donut nướng', 'Bột mì đa dụng 531 gr\r\nBột cacao đen 4 muỗng canh\r\nBơ lạt 170 gr\r\nĐường bột 561 gr\r\nMen nở instant 2 muỗng cà phê', '3.000', 'donutnuong.jpg', 18, 1, 1),
(35, 'Bánh donut chocolate:', '250g Bột mì\r\n96g Bột cacao\r\n4g Bột nở\r\n2g Muối', '8.000', 'donutsocola.jpg', 18, 1, 1),
(36, 'Bánh donut vị táo', '385g Bột mì\r\n6g Bột nở\r\n3g Muối nở\r\n2 trái Táo\r\n120ml Nước ép táo\r\n2 miếng Thanh quế\r\n220g Đường trắng\r\n2 quả Trứng gà', '8.000', 'donuttao.jpg', 18, 1, 1),
(43, 'Donut ', '280g Bột mì 1 quả Trứng gà 25g Đường trắng 5g Men nở 25g Bơ 1/2 muỗng Muối', '6.000', 'donutchao.jpg', 18, 1, 1),
(45, 'Donut chuối', '280g Bột mì 1 quả Trứng gà 25g Đường trắng 5g Men nở 25g Bơ 1/2 muỗng Muối chuối', '8.000', 'donutchuoi.jpg', 18, 1, 1),
(46, 'pizza lạp xường', 'Pizza lạp xường sốt muối', '80.000', 'pizzalapxuong.jpg', 1, 1, 1),
(47, 'Pizza xúc xích', 'pizza kết hợp với xúc xích', '80.000', 'pizzaxucxich.jpg', 1, 1, 1),
(48, 'Hamburger tinh than đen', 'Bột mì số 13 200 gr\r\nBột tinh than tre 10 gr\r\nBơ lạt 20 gr\r\nThịt bò xay 400 gr\r\nMen instant 4 gr', '25.000', 'hamburgerden.jpg', 2, 1, 1),
(49, 'hamburger bò phô mai', 'Bò băm 500 gr\r\nĐường 2 muỗng cà phê\r\nHạt nêm 3 muỗng cà phê\r\nMuối 1/2 muỗng cà phê\r\nTiêu 2 muỗng cà phê', '30.000', 'hamburgerbophomai.jpg', 2, 1, 1),
(50, 'hamburger kẹp gà', 'Được kẹp với gà rán béo ngậy...', '27.000', 'hamburgergagan.jpg', 2, 1, 1),
(52, 'Tiểu Long Bao', 'Tiểu Long Bao là loại bánh bao có nguồn gốc từ Giang Tô, có nhân tôm, thịt, hải sản.', '20.000', 'tieu_long_bao.jpg', 3, 1, 1),
(53, 'Thang Bao', 'Thang Bao được làm với nguyên liệu như bánh bao thông thường và có thêm thạch da lợn.', '20.000', 'thang_bao.jpg', 3, 1, 1),
(54, 'Há Cảo', 'Há Cảo có nguồn gốc từ Triều Châu, thường được dùng làm bánh ăn sáng và được mệnh danh là đệ nhất điểm tâm', '15.000', 'ha_cao_1.jpg', 3, 1, 1),
(55, 'Kimbap truyền thống', 'Gạo Hàn Quốc, lá rong biển khô, trứng, cà rốt, dưa leo, rau xanh, xúc xích, thịt hong khói…', '25.000', 'kimbap-kieu-truyen-thong-han-quoc.jpg', 19, 1, 1),
(56, 'Kimbap chiên xù', 'Kimbap chiên xù thì hơi khác so với các kiểu kimbap khác bởi có lớp vỏ ngoài cùng màu vàng, xù, giòn tan', '25.000', 'kimbap-chien-xu.jpg', 19, 1, 1),
(57, 'Kimbap cuộn trứng', 'Kimbap cuộn trứng có lớp vỏ ngoài làm bằng trứng tráng mỏng cuộn vào với cuộn cơm', '25.000', 'kimbap-cuon-trung.jpg', 19, 1, 1),
(58, 'Kimbap thịt bò', 'Kimbap thịt bò có phần nhân được làm kết hợp thịt bò cùng với các loại thức ăn và rau củ quả khác', '27.000', 'kimbap-thit-bo.jpg', 19, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oder`
--

CREATE TABLE `oder` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,3) NOT NULL,
  `oder_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0,
  `custormer_name` varchar(50) NOT NULL,
  `customer_contact` int(10) UNSIGNED ZEROFILL NOT NULL,
  `customer_address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `oder`
--

INSERT INTO `oder` (`id`, `user_id`, `food_id`, `qty`, `total`, `oder_date`, `status`, `custormer_name`, `customer_contact`, `customer_address`) VALUES
(25, 23, 3, 2, '12.000', '2022-05-27 00:10:38', 2, 'team09shop', 0397327836, 'Hà Nội'),
(26, 23, 2, 2, '8.000', '2022-05-14 12:20:07', 0, 'team09shop', 0397327836, 'Hà Nội'),
(29, 23, 2, 2, '8.000', '2022-05-27 00:10:45', 1, 'w', 0397327836, 'Hà Nội'),
(40, 24, 3, 2, '12.000', '2022-05-24 19:59:47', 2, 'team09shop', 0397327836, 'Hà Nội'),
(41, 24, 3, 2, '12.000', '2022-05-15 13:42:31', 0, 'team09shop', 0397327836, 'Hà Nội'),
(48, 24, 2, 3, '12.000', '2022-05-22 12:54:16', 2, 'Tho1', 0397327836, 'VP'),
(49, 24, 2, 2, '8.000', '2022-05-23 12:23:44', 2, 'team09shop', 0397327836, 'Hà Nội'),
(50, 24, 3, 5, '30.000', '2022-05-16 09:38:50', 0, 'team09shop', 0397327836, 'Hà Nội'),
(58, 24, 9, 3, '30.000', '2022-05-27 00:30:53', 0, 'Phạm Thọ', 0397327836, 'VP'),
(59, 24, 3, 3, '270.000', '2022-05-27 00:34:57', 0, 'Phạm Thọ', 0397327836, 'Hà Nội'),
(60, 24, 9, 4, '40.000', '2022-05-27 12:46:07', 1, 'Phạm Nghĩa', 0397327836, 'Hà Nội'),
(61, 24, 9, 2, '20.000', '2022-05-27 13:40:58', 1, 'Lê Đình thọ', 0365789454, 'Hà Nội'),
(62, 24, 56, 1, '25.000', '2022-05-27 00:41:20', 0, 'Ngô Hoàng Thủy', 0369784567, 'Hà Nội'),
(63, 24, 50, 1, '27.000', '2022-05-27 00:41:54', 0, 'Cẩm Tú', 0348795124, 'Hà Nội'),
(64, 24, 58, 2, '54.000', '2022-05-27 00:42:29', 0, 'Văn Sinh', 0397546842, 'Hà Nội'),
(65, 24, 2, 2, '8.000', '2022-05-27 13:40:30', 0, 'Phạm Thọ', 0397327836, 'VP'),
(66, 24, 2, 2, '8.000', '2022-05-27 14:43:30', 0, 'Phạm Thọ', 0397327836, 'Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fisrt_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `registration_date` datetime NOT NULL DEFAULT current_timestamp(),
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `fisrt_name`, `last_name`, `username`, `registration_date`, `email`, `phone`, `address`, `pass`) VALUES
(23, 'Phạm', 'thọ', 'admin', '2022-05-14 00:40:40', 'phamthokd19@gmail.com', '0397327836', 'Hà Nội', '1'),
(24, 'Phạm', 'thọ', 'admin', '2022-05-14 00:44:43', 'phamthokd@gmail.com', '0397327836', 'Hà Nội', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`),
  ADD KEY `food_ibfk_1` (`category_id`);

--
-- Chỉ mục cho bảng `oder`
--
ALTER TABLE `oder`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oder_ibfk_1` (`food_id`),
  ADD KEY `oder_ibfk_2` (`user_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `oder`
--
ALTER TABLE `oder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `oder`
--
ALTER TABLE `oder`
  ADD CONSTRAINT `oder_ibfk_1` FOREIGN KEY (`food_id`) REFERENCES `food` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `oder_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
