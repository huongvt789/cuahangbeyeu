-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2018 at 04:18 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuahangbeyeu`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `c_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `c_name`, `slug`) VALUES
(6, 'Sữa vinamilk', 'sua-vinamilk'),
(7, 'Sữa Cô gái Hà Lan', 'sua-co-gai-ha-lan'),
(8, 'Sữa Nutifood', 'sua-nutifood'),
(9, 'Sữa TH-True Milk', 'sua-th-true-milk'),
(10, 'Sữa Mộc Châu', 'sua-moc-chau'),
(11, 'Sữa Abbot', 'sua-abbot'),
(12, 'Sữa Friso Gold', 'sua-friso-gold'),
(13, 'Sữa Anlence', 'sua-anlence'),
(14, 'Sữa Nuticare', 'sua-nuticare'),
(15, 'Sữa Calosure', 'sua-calosure'),
(17, 'Sữa ông thọ 1', 'sua-ong-tho-1');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_07_021918_create_category_table', 1),
(4, '2018_03_07_023550_create_news_table', 1),
(5, '2018_03_07_024414_create_product_table', 1),
(6, '2018_03_07_024916_create_order_table', 1),
(7, '2018_03_15_015017_create_order_detail_table', 1),
(8, '2018_03_15_015413_create_producer_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `n_id` int(10) UNSIGNED NOT NULL,
  `n_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_description` text COLLATE utf8mb4_unicode_ci,
  `n_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_hotnews` int(11) NOT NULL DEFAULT '1',
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `n_name`, `n_description`, `n_content`, `n_img`, `n_hotnews`, `author`, `slug`) VALUES
(2, 'Vinamilk Sure Prevent Mới – Giải Pháp Dinh Dưỡng Đặc Biệt Cho Người Lớn Tuổi', '<p>Vừa qua, sau qu&aacute; tr&igrave;nh hợp t&aacute;c với tập đo&agrave;n ADM của Hoa Kỳ, Vinamilk đ&atilde; nghi&ecirc;n cứu th&agrave;nh c&ocirc;ng việc ứng dụng dưỡng chất Plant Sterols (Sterol ester thực vật) v&agrave;o sản phẩm Vinamilk Sure Prevent, sữa d&agrave;nh cho người gấy yếu, gi&uacute;p giảm hiệu quả cholesterol xấu trong cơ thể v&agrave; từ đ&oacute; l&agrave;m giảm c&aacute;c nguy cơ mắc bệnh tim mạch cho người lớn tuổi.</p>', '<p><strong>1. ĂN NGỦ TỐT</strong></p>\r\n\r\n<p>Hiểu được t&acirc;m sinh l&yacute; k&eacute;m ăn, kh&oacute; ngủ thường gặp ở người lớn tuổi, Vinamilk Sure Prevent l&agrave; một trong c&aacute;c loại sữa cho người gầy yếu v&igrave; bổ sung đầy đủ c&aacute;c Vitamin nh&oacute;m B, A, C, E v&agrave; c&aacute;c khoảng chất như Kẽm, Magi&ecirc;, Selen gi&uacute;p tăng cường sức đề kh&aacute;ng, giảm t&igrave;nh trạng mệt mỏi, gi&uacute;p ăn ngon, ngủ ngon. Chất xơ h&ograve;a tan FOS gi&uacute;p tăng cường vi khuẩn c&oacute; lợi trong đường ruột, hỗ trợ sức khỏe của hệ ti&ecirc;u h&oacute;a cho người lớn.</p>\r\n\r\n<p><strong>2. TỐT CHO TIM MẠCH:</strong></p>\r\n\r\n<p>C&aacute;c bệnh l&yacute; về tim mạch ch&iacute;nh l&agrave; nỗi lo của đa số người cao tuổi. Nguy cơ mắc c&aacute;c bệnh tim mạch thường được nhắc đến do h&agrave;m lượng cholesterol cao. Chế độ ăn uống kh&ocirc;ng hợp l&iacute; sẽ l&agrave;m lượng Cholesterol xấu trong m&aacute;u tăng cao. Lượng Cholesterol xấu dư thừa sẽ t&iacute;ch tụ v&agrave; g&acirc;y ra c&aacute;c mảng xơ vữa tr&ecirc;n th&agrave;nh động mạch, l&agrave;m mạch m&aacute;u bị tắc nghẽn dẫn đến c&aacute;c cơn đau tim, đột quỵ hay chứng xơ vữa động mạch.</p>\r\n\r\n<p>C&aacute;c nh&agrave; khoa học đ&atilde; t&igrave;m ra 1 dưỡng chất gọi l&agrave; Sterol ester thực vật (plant sterol) - đ&acirc;y l&agrave; chất b&eacute;o được chiết xuất tự nhi&ecirc;n từ thực vật. Do cấu tr&uacute;c tương tự cholesterol, Sterol ester thực vật thay thế hữu hiệu cholesterol trong h&aacute;c hạt mixen; nhờ vậy, lượng cholesterol xấu hấp thụ từ ruột non v&agrave;o m&aacute;u c&oacute; thể giảm đến 30 - 40%.</p>\r\n\r\n<p>Vinamilk Sure Prevent đ&atilde; ứng dụng th&agrave;nh c&ocirc;ng đưa dưỡng chất Plant Sterol v&agrave;o c&ocirc;ng thức sản phẩm. Đ&acirc;y l&agrave; sự hợp t&aacute;c của những tiến bộ khoa học dinh dưỡng h&agrave;ng đầu thế giới giữa Vinamilk v&agrave; tập đo&agrave;n dinh dưỡng ADM. ADM l&agrave; một tập đo&agrave;n dinh dưỡng h&agrave;ng đầu thế giới với phạm vi hoạt động rộng khắp tr&ecirc;n to&agrave;n cầu: Nam Mỹ, Bắc Mỹ, ch&acirc;u &Acirc;u v&agrave; cả ch&acirc;u &Aacute;, điều đ&oacute; gi&uacute;p ADM cộng t&aacute;c hiệu quả với c&aacute;c đối t&aacute;c tr&ecirc;n to&agrave;n cầu để chăm s&oacute;c sức khỏe mọi người một c&aacute;ch tốt nhất, trong đ&oacute; Vinamilk ch&iacute;nh l&agrave; một trong những đối t&aacute;c chiến lược.</p>\r\n\r\n<p><strong>3. TỐT CHO XƯƠNG</strong></p>\r\n\r\n<p><a href=\"https://giacmosuaviet.com.vn/products/vinamilk-sure-prevent-hop-thiec-900g\">Vinamilk Sure Prevent</a>&nbsp;-&nbsp;Sữa cho người gầy&nbsp;yếu suy nhược, người lớn tuổi gi&uacute;p phục hồi sức khỏe nhanh ch&oacute;ng. Ngo&agrave;i ra Sure Prevent c&ograve;n được bổ sung th&ecirc;m Canxi &ndash; Phốt pho với tỉ lệ c&acirc;n đối, kết hợp với Vitamin D gi&uacute;p tăng cường hấp thụ Canxi tối ưu, tạo hệ xương vững chắc</p>', '152239348429249916_1881840648772703_8832874391986503680_n.jpg', 1, 'vinamilk', 'vinamilk-sure-prevent-sua-danh-cho-nguoi-lon-tuoi-gay-yeu-suy-nhuoc'),
(3, 'ádfghjkl', '<p>qwertyuiopzsdfghjk.</p>', '<p>d&aacute;bgnhgfdsasdsfbngfdsadsfdgf</p>', '1523754873plain-pack-20.jpg', 1, 'thành', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `ngaymua` datetime DEFAULT NULL,
  `thanhtien` double(8,2) DEFAULT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `httt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_detail_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `o_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('thanh@gmail.com', '5aSP8ef9dlI7pJwePZAH', '2018-04-01 08:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `producer`
--

CREATE TABLE `producer` (
  `producer_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `producer`
--

INSERT INTO `producer` (`producer_id`, `name`, `phone`, `address`, `email`) VALUES
(1, 'thành123', '01987654321', 'thái bình 123', 'test123@mail.com'),
(2, 'Vinamlik', '0123456789', 'Thái Nguyên', 'vinamilk@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `fk_category_id` int(11) NOT NULL,
  `p_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_description` text COLLATE utf8mb4_unicode_ci,
  `p_content` text COLLATE utf8mb4_unicode_ci,
  `p_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_price` float DEFAULT NULL,
  `p_hotproduct` int(11) NOT NULL,
  `idProducer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `fk_category_id`, `p_name`, `p_description`, `p_content`, `p_img`, `p_price`, `p_hotproduct`, `idProducer`) VALUES
(1, 6, 'Sữa PediaSure BA 850g - Vị Sô Cô La (1 - 10 tuổi)', '<p>Sữa PediaSure BA 850g - Vị S&ocirc; C&ocirc; La (1 - 10 tuổi)</p>', '<p>Sữa pediasure BA được sản xuất một c&aacute;ch an to&agrave;n v&agrave; hiện đại nhất cho b&eacute; y&ecirc;u của bạn. Những chức năng v&agrave; đảm bảo sự an to&agrave;n cho b&eacute; v&agrave; mẹ bạn cũng sẽ c&oacute; thể nhanh ch&oacute;ng bắt kịp v&agrave; tiếp tục đ&agrave; tăng trưởng tối ưu cả về thể chất v&agrave; tr&iacute; tuệ. Pediasure c&oacute; thể d&ugrave;ng bổ sung hoặc thay thế ho&agrave;n to&agrave;n bữa ăn đối với trẻ biếng ăn. Nghi&ecirc;n cứu l&acirc;m s&agrave;ng tr&ecirc;n nh&oacute;m trẻ biếng ăn c&oacute; nguy cơ thiếu hụt dinh dưỡng đ&atilde; chứng minh: việc bổ sung Pediasure c&ugrave;ng với chế độ dinh dưỡng h&agrave;ng ng&agrave;y gi&uacute;p trẻ ph&aacute;t triển nhanh v&agrave; tốt hơn về c&acirc;n nặng, chiều cao, giảm đ&aacute;ng kể nguy cơ vi&ecirc;m nhiễm đường h&ocirc; hấp tr&ecirc;n so với chế độ dinh dưỡng th&ocirc;ng thường.</p>', '1.jpg', 587000, 1, 1),
(2, 9, 'SỮA TƯƠI TIỆT TRÙNG VINAMILK', '<p>Th&ugrave;ng sữa tươi tiệt tr&ugrave;ng Vinamilk 100% c&oacute; đường 180ml Read more: https://bibomart.com.vn/sua-tuoi-tiet-trung-vinamilk-100-co-duong-180ml-p59653.html#ixzz5CjhiFuu7</p>', '<p>Sữa tươi tiệt tr&ugrave;ng Sữa tươi ti&ecirc;t tr&ugrave;ng Vinamilk 100% c&oacute; đường 180ml (1 th&ugrave;ng) được l&agrave;m từ 100% sữa b&ograve; tươi nguy&ecirc;n chất từ những n&ocirc;ng trại lớn nhất Việt Nam, xử l&yacute; bằng c&ocirc;ng nghệ tiệt tr&ugrave;ng UHT hiện đại, kh&ocirc;ng chứa chất bảo quản tuyệt đối an to&agrave;n cho sức khỏe của trẻ nhỏ. Cung cấp dưỡng chất tốt cho sức khỏe - Sữa với đầy đủ c&aacute;c th&agrave;nh phần dinh dưỡng như chất b&eacute;o, đạm, vitamin, canxi... đảm bảo cung cấp nguồn năng lượng dồi d&agrave;o cho c&aacute;c hoạt động vui chơi trong ng&agrave;y của trẻ v&agrave; c&aacute;c th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh. Sản phẩm gi&uacute;p bổ sung chất dinh dưỡng cho cơ thể khỏe mạnh, gi&uacute;p b&eacute; ph&aacute;t triển hệ xương, ăn ngon miệng v&agrave; tăng cường sức đề kh&aacute;ng hiệu quả. - Bổ sung Vitamin D3 theo chuẩn EFSA Ch&acirc;u &Acirc;u kết hợp c&ugrave;ng vitamin A, C v&agrave; Selen hỗ trợ miễn dịch khỏe mạnh, kh&ocirc;ng những cho trẻ nhỏ m&agrave; c&ograve;n cho cả c&aacute;c th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh. Read more: https://bibomart.com.vn/sua-tuoi-tiet-trung-vinamilk-100-co-duong-180ml-p59653.html#ixzz5Cjhlbysy</p>', '3.jpg', 298000, 1, 2),
(3, 7, 'Sữa Bột Enfagrow A+ 4 360 Brain Plus - Hộp 900G', '<h1>Sữa Bột Enfagrow A+ 4 360 Brain Plus - Hộp 900G (Cho Trẻ Tr&ecirc;n 5&nbsp;Tuổi)</h1>', '<h1>Sữa Bột Enfagrow A+ 4 360 Brain Plus - Hộp 900G (Cho Trẻ Tr&ecirc;n 5&nbsp;Tuổi)</h1>', 'AZlRG_enfa.jpg', 200000, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `fullname`, `phonenumber`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'thanh@gmail.com', '$2y$10$L/87ODY6ttHlEO0QBRyyFu/SOOmqdfrnNGjCpk4kk/wP8jmshnyfC', 'Vũ Thành', '0123456789', 'Thái Bình', 'pgj8gWyGIRIwWsb13UiZj7ztWEA5FHprv4rnKCZTfJt5vsnhUM7ouU4QG8Iw', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_slug_unique` (`slug`),
  ADD KEY `category_c_name_index` (`c_name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`),
  ADD UNIQUE KEY `news_n_name_unique` (`n_name`),
  ADD UNIQUE KEY `news_slug_unique` (`slug`),
  ADD KEY `news_n_name_slug_index` (`n_name`,`slug`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `producer`
--
ALTER TABLE `producer`
  ADD PRIMARY KEY (`producer_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_p_name_index` (`p_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_detail_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producer`
--
ALTER TABLE `producer`
  MODIFY `producer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
