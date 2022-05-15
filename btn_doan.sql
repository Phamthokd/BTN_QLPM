-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 15, 2022 lúc 12:42 PM
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
(2, 'Burger', 'Food_Category_344.jpg', 1, 1),
(3, 'MoMo', 'Food_Category_77.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `featured` int(1) NOT NULL DEFAULT 1,
  `active` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `food`
--

INSERT INTO `food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(1, 'Dumplings Specials', 'Bánh bao nhân gà với các loại thảo mộc vùng núi', '5.00', 'Food-Name-3649.jpg', 3, 1, 1),
(2, 'Best Burger', 'Burger với giăm bông, dứa và nhiều pho mát', '4.00', 'Food-Name-6340.jpg', 2, 1, 1),
(3, 'Smoky BBQ Pizza', 'Pizza Củi ngon nhất tại Thị trấn.', '6.00', 'Food-Name-8298.jpg', 1, 1, 1),
(4, 'Sadeko Momo', 'Momo cay ngon nhất cho mùa đông', '6.00', 'Food-Name-7387.jpg', 3, 1, 1),
(9, 'Mixed Pizza', 'Pizza với gà, giăm bông, thịt nướng, nấm và rau ...', '10.00', 'Food-Name-7833.jpg', 1, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oder`
--

CREATE TABLE `oder` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `oder_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0,
  `custormer_name` varchar(50) NOT NULL,
  `customer_contact` int(11) NOT NULL,
  `customer_address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `oder`
--

INSERT INTO `oder` (`id`, `user_id`, `food_id`, `qty`, `total`, `oder_date`, `status`, `custormer_name`, `customer_contact`, `customer_address`) VALUES
(25, 23, 3, 2, '12.00', '2022-05-14 11:19:29', 0, 'team09shop', 397327836, 'Hà Nội'),
(26, 23, 2, 2, '8.00', '2022-05-14 12:20:07', 0, 'team09shop', 397327836, 'Hà Nội'),
(27, 23, 2, 2, '8.00', '2022-05-14 12:21:33', 0, 'team09shop', 397327836, 'Hà Nội'),
(29, 23, 2, 2, '8.00', '2022-05-14 12:23:34', 0, 'w', 397327836, 'Hà Nội'),
(30, 23, 2, 2, '8.00', '2022-05-14 12:24:44', 0, 'w', 397327836, 'Hà Nội'),
(37, 24, 3, 1, '6.00', '2022-05-15 11:23:10', 0, 'team09shop2', 397327836, 'Hà Nội'),
(38, 24, 4, 2, '12.00', '2022-05-15 11:23:39', 0, 'team09shop4', 2147483647, 'Hà Nội'),
(39, 24, 4, 2, '12.00', '2022-05-15 11:24:38', 0, 'team09shop4', 2147483647, 'Hà Nội'),
(40, 24, 3, 2, '12.00', '2022-05-15 13:41:39', 0, 'team09shop', 397327836, 'Hà Nội'),
(41, 24, 3, 2, '12.00', '2022-05-15 13:42:31', 0, 'team09shop', 397327836, 'Hà Nội'),
(42, 24, 1, 4, '20.00', '2022-05-15 13:42:46', 0, 'js', 397327836, 'Hà Nội'),
(43, 24, 1, 4, '20.00', '2022-05-15 13:43:43', 0, 'js', 397327836, 'Hà Nội'),
(44, 24, 1, 4, '20.00', '2022-05-15 13:46:27', 0, 'js', 397327836, 'Hà Nội'),
(45, 24, 1, 1, '5.00', '2022-05-15 13:46:53', 0, 'team09shop', 397327836, 'Hà Nội'),
(46, 24, 9, 2, '20.00', '2022-05-15 13:53:13', 0, 'w1', 2147483647, 'Hà Nội'),
(47, 24, 1, 2, '10.00', '2022-05-15 15:03:19', 0, 'lê dũng', 397327836, 'Hà Nội');

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
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `oder`
--
ALTER TABLE `oder`
  ADD PRIMARY KEY (`id`),
  ADD KEY `food_id` (`food_id`),
  ADD KEY `user_id` (`user_id`);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `oder`
--
ALTER TABLE `oder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `oder`
--
ALTER TABLE `oder`
  ADD CONSTRAINT `oder_ibfk_1` FOREIGN KEY (`food_id`) REFERENCES `food` (`id`),
  ADD CONSTRAINT `oder_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
