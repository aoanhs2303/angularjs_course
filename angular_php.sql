-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 02, 2018 lúc 05:53 PM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `angular_php`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `aboutpage`
--

CREATE TABLE `aboutpage` (
  `id` int(11) NOT NULL,
  `tieude` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `tieudephu` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `noidung` text COLLATE utf8_vietnamese_ci NOT NULL,
  `anh` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `aboutpage`
--

INSERT INTO `aboutpage` (`id`, `tieude`, `tieudephu`, `noidung`, `anh`) VALUES
(1, 'Trang About Fixed', 'This is what I do.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur 12voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus, minus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste neque sit tempora!', 'http://localhost/KhoaAngular/project2/asset/img/about-bg.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `angular_library`
--

CREATE TABLE `angular_library` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `angular_library`
--

INSERT INTO `angular_library` (`id`, `tendanhmuc`) VALUES
(1, 'Bóng đá'),
(2, 'Tin mới'),
(3, 'Tin Công nghệ'),
(4, 'Tin Fashion'),
(5, 'Tin Pháp luật'),
(6, 'Angular'),
(7, 'Node JS');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(9) NOT NULL,
  `ten` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `namsinh` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `ten`, `facebook`, `namsinh`, `sdt`) VALUES
(1, 'Lực', 'fb.com/lucs2303', '1997123', '01224562121'),
(2, 'Anh', 'fb.com/anhle', '1996', '0909090909'),
(3, 'Quỳnh Anh', 'fb.com/quynh', '1998', '0808080808');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_backend`
--

CREATE TABLE `user_backend` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `createdate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user_backend`
--

INSERT INTO `user_backend` (`id`, `username`, `password`, `email`, `level`, `createdate`) VALUES
(1, 'Lực Trần', 'apple', 'luc@gmail.com', 'admin', 1522576552),
(2, 'Phương', '2', 'phuong@gmail.com', '1', 1522654116),
(7, '13213123', 'tr123213', '3213@gmail.com', '1', 1522655212),
(10, 'thaoanh', '123456', 'thaoanh@gmail.com', '2', 1522655565),
(14, 'lelele', '123123', 'lele@gmail.com', '2', 1522657217),
(15, '1233232', 'hdfjsahjkh', 'tan@gmail.com', '2', 1522657273),
(17, '123321312', '321321312', '21312312@gmio.com', '1', 1522657611),
(18, '123321312', '321321312', '21312312@gmio.com', '1', 1522657617),
(19, '12312312', '312312312', 'jhdhsadhj@gn', '1', 1522657733),
(20, '21312312', '3123123', '222@gmail.com', '1', 1522658028);

--
-- Bẫy `user_backend`
--
DELIMITER $$
CREATE TRIGGER `Auto datetime` BEFORE INSERT ON `user_backend` FOR EACH ROW BEGIN
	SET NEW.createdate = UNIX_TIMESTAMP();
END
$$
DELIMITER ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `aboutpage`
--
ALTER TABLE `aboutpage`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `angular_library`
--
ALTER TABLE `angular_library`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_backend`
--
ALTER TABLE `user_backend`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `aboutpage`
--
ALTER TABLE `aboutpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `angular_library`
--
ALTER TABLE `angular_library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user_backend`
--
ALTER TABLE `user_backend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
