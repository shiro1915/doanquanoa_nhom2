-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 27, 2024 lúc 03:25 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1_quanao`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `address`
--

INSERT INTO `address` (`id`, `user_id`, `address`) VALUES
(17, 15, 'Vĩnh Long 123'),
(18, 6, 'Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`cart_id`, `product_id`, `user_id`, `product_name`, `product_price`, `product_quantity`, `product_image`) VALUES
(80, 25, 9, 'Cây cam ngọt', 160000, 1, 'cay-cam-ngot.jpg'),
(81, 23, 9, 'Sách đất rừng', 120000, 1, 'dat-rung.jpg'),
(82, 27, 9, 'Người bà tài giỏi(tái bản 2022)', 180000, 1, 'nguoi-ba.jpg'),
(83, 2, 9, 'Sách mới', 110000, 3, 'book-2.png'),
(224, 15, 8, 'Màu xanh denim nhạt', 97000, 1, 'quanjeannamxanhnhat.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`category_id`, `name`, `image`, `status`) VALUES
(2, 'Nam', 'aokhoacnamtrang.jpg', 1),
(4, 'Trẻ em', 'yemtreemxanh.jpg', 1),
(6, 'Nữ', 'vaytrang.jpg', 1),
(16, 'Áo Polo', 'aopolotaydai.jpg', 1),
(17, 'Quần Jeans', 'quanjeannamxanhnhat.jpg', 1),
(19, 'Áo thun', 'aothuntrangnam.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 ẩn 1 hiện',
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`comment_id`, `content`, `date`, `status`, `user_id`, `product_id`) VALUES
(1, 'Helllo', '2024-12-20 19:46:51', 1, 8, 26),
(3, 'Admin nè xin chào mn', '2024-12-24 20:48:50', 1, 8, 26),
(13, 'hi', '2024-12-26 23:28:28', 1, 8, 1),
(14, 'hi', '2024-12-26 23:29:57', 1, 8, 1),
(15, 'ha', '2024-12-26 23:30:07', 1, 8, 1),
(16, 'haha', '2024-12-27 00:08:27', 1, 8, 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderdetails_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orderdetails`
--

INSERT INTO `orderdetails` (`orderdetails_id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(24, 11, 24, 1, 300000),
(29, 14, 25, 4, 160000),
(30, 14, 27, 1, 180000),
(39, 17, 32, 2, 100000),
(52, 24, 15, 1, 95000),
(53, 24, 14, 1, 102000),
(54, 25, 21, 1, 88000),
(55, 26, 21, 4, 24000),
(56, 27, 29, 1, 50000),
(57, 27, 1, 1, 159000),
(80, 39, 29, 2, 50000),
(81, 39, 30, 1, 102000),
(82, 40, 17, 1, 187000),
(83, 40, 16, 1, 90000),
(84, 40, 18, 2, 120000),
(86, 42, 29, 2, 50000),
(87, 42, 17, 1, 187000),
(88, 43, 27, 1, 180000),
(89, 43, 31, 1, 126000),
(115, 68, 29, 1, 769000),
(116, 69, 29, 1, 769000),
(117, 70, 29, 1, 769000),
(118, 71, 29, 1, 769000),
(119, 72, 29, 1, 769000),
(120, 73, 29, 1, 769000),
(121, 74, 29, 1, 769000),
(122, 75, 29, 1, 769000),
(123, 76, 29, 1, 769000),
(124, 76, 31, 2, 745000),
(125, 77, 29, 1, 769000),
(126, 77, 31, 2, 745000),
(127, 78, 30, 1, 431000),
(128, 78, 32, 1, 779000),
(129, 79, 14, 1, 97000),
(130, 80, 32, 1, 100000),
(131, 81, 24, 1, 569000),
(132, 81, 32, 1, 779000),
(133, 81, 29, 1, 769000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `total` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `note` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `date`, `total`, `address`, `phone`, `note`, `status`) VALUES
(11, 6, '2024-12-25 09:00:28', 200000, 'Bình Dương', '0123456789', 'Giao buổi trưa', 3),
(14, 6, '2024-12-28 14:00:19', 1220000, 'Can tho', '0123456789', 'hi', 4),
(17, 10, '2024-12-20 10:12:41', 376000, 'Gia Lai', '0123456789', 'Gói hàng cẩn thận giao nhanh giúp tôi ', 1),
(24, 11, '2024-12-04 21:49:06', 197000, 'Cần Thơ', '0123456789', '', 1),
(25, 11, '2024-12-04 21:56:40', 88000, 'Nam Định', '0123456789', '', 1),
(26, 11, '2024-12-04 22:00:39', 352000, 'Bắc Kan', '0123456789', '', 1),
(27, 10, '2024-12-06 22:10:19', 209000, 'Ninh Kiều', '0123456789', '', 2),
(28, 10, '2024-12-06 22:12:15', 180000, 'Long An', '0123456789', 'adfdf', 1),
(39, 7, '2025-01-16 17:38:21', 362000, 'Giao đâu cũng được', '0123456789', '', 2),
(40, 6, '2024-12-21 17:47:50', 517000, 'Dĩ An Bình Dương', '0123456789', 'Đóng gói hàng kĩ', 1),
(42, 6, '2024-12-20 18:19:03', 287000, ' Hà Nội', '0123456789', '', 2),
(43, 10, '2024-12-12 18:22:50', 306000, 'HCM', '0123456789', 'Gói hàng kĩ', 1),
(58, 6, '2024-12-21 17:47:50', 517000, 'Dĩ An Bình Dương', '0123456789', 'Đóng gói hàng kĩ', 1),
(59, 8, '2024-12-26 22:54:10', 2259000, 'Cần Thơ', '0336216559', '', 1),
(60, 8, '2024-12-26 22:56:02', 2259000, 'Cần Thơ', '0336216559', '', 1),
(61, 8, '2024-12-26 22:56:37', 2259000, 'Cần Thơ', '0336216559', '', 1),
(62, 8, '2024-12-26 22:57:52', 2259000, 'Cần Thơ', '0336216559', '', 1),
(63, 8, '2024-12-26 23:01:04', 2259000, 'Cần Thơ', '0336216559', '', 1),
(64, 8, '2024-12-26 23:02:21', 2259000, 'Cần Thơ', '0336216559', '', 1),
(65, 8, '2024-12-26 23:03:36', 2259000, 'Cần Thơ', '0336216559', '', 1),
(66, 8, '2024-12-26 23:03:50', 2259000, 'Cần Thơ', '0336216559', '', 1),
(67, 8, '2024-12-26 23:04:15', 2259000, 'Cần Thơ', '0336216559', '', 1),
(68, 8, '2024-12-26 23:04:52', 2259000, 'Cần Thơ', '0336216559', '', 1),
(69, 8, '2024-12-26 23:05:16', 2259000, 'Cần Thơ', '0336216559', '', 1),
(70, 8, '2024-12-26 23:06:12', 2259000, 'Cần Thơ', '0336216559', '', 1),
(71, 8, '2024-12-26 23:07:00', 2259000, 'Cần Thơ', '0336216559', '', 1),
(72, 8, '2024-12-26 23:07:22', 2259000, 'Cần Thơ', '0336216559', '', 1),
(73, 8, '2024-12-26 23:08:13', 2259000, 'Cần Thơ', '0336216559', '', 1),
(74, 8, '2024-12-26 23:09:23', 2259000, 'Cần Thơ', '0336216559', '', 1),
(75, 8, '2024-12-26 23:10:36', 2259000, 'Cần Thơ', '0336216559', '', 1),
(76, 8, '2024-12-26 23:11:41', 2259000, 'Cần Thơ', '0336216559', '', 1),
(77, 8, '2024-12-26 23:13:04', 2259000, 'Cần Thơ', '0336216559', '', 1),
(78, 8, '2024-12-26 23:23:30', 1210000, 'Cần Thơ', '0336216559', 'Goi ki', 2),
(79, 8, '2024-12-26 23:33:20', 97000, 'Cần Thơ', '0336216559', '', 2),
(80, 11, '2024-12-27 09:20:22', 100000, 'Bình Dương', '0909006712', '', 1),
(81, 11, '2024-12-27 09:21:51', 2117000, 'Bình Dương', '0909006712', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`post_id`, `category_id`, `title`, `image`, `author`, `content`, `views`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'Top 5+ những cuốn sách hay nên đọc 1 lần trong đời', 'top-sach.jpg', 'Admin', '<p><strong>Ngày nay, bạn có thể tìm thấy hàng triệu cuốn sách trên thế giới thuộc vô số chủ đề độc đáo. Tuy nhiên, có những cuốn sách tâm đắc nhất mà bạn không thể bỏ lỡ và nhất định nên đọc một lần. Hãy cùng Sforum điểm qua top 22+ những cuốn sách hay 2023 nên đọc trong đời ngay bây giờ nhé. Đừng quên chọn cho mình cuốn sách ưng ý nhất để đem về tủ sách nhà mình!</strong></p><h4><strong>Nhà giả kim</strong></h4><p>“Nhà giả kim” là một trong những cuốn sách hay của tác giả Paulo Coelho, kể về cuộc hành trình theo đuổi giấc mơ của Santiago, một chàng chăn cừu người Tây Ban Nha. Cuốn sách truyền đạt thông điệp về việc tìm kiếm quy luật của vũ trụ và ý nghĩa thực sự của cuộc đời. Và đây không chỉ là một câu chuyện phiêu lưu mà còn là một hành trình tìm kiếm bản thân, khám phá niềm tin và theo đuổi đam mê.</p><h4><strong>Đắc nhân tâm</strong></h4><p>“Đắc nhân tâm” do Dale Carnegie viết là một trong những cuốn sách hay bán chạy nhất mọi thời đại. Cuốn sách này chứa đựng những bài học về kỹ năng giao tiếp, làm thế nào để thu hút và ảnh hưởng đến người khác. Không chỉ dừng lại ở việc truyền đạt những kỹ năng mềm, cuốn sách còn giúp người đọc hiểu rõ hơn về tâm lý con người và cách xây dựng mối quan hệ.</p><h4><strong>Cà phê cùng Tony</strong></h4><p>“Cà phê cùng Tony” là sách hay nên đọc cho giới trẻ của tác giả Tony Buổi Sáng chứa đựng những suy nghĩ, bài học về cuộc sống, công việc và tình yêu dưới góc nhìn của Tony - một người trẻ tuổi đầy nhiệt huyết. Thông qua những câu chuyện ngắn gọn, dễ hiểu, Tony giúp người đọc nhìn lại và định hình lại quan điểm về nhiều vấn đề trong cuộc sống. Cuốn sách còn một người bạn đồng hành, giúp bạn tìm thấy niềm vui, hạnh phúc và ý nghĩa trong từng khoảnh khắc của cuộc đời.</p><h4><strong>Người giàu có nhất thành Babylon</strong></h4><p>George S. Clason thông qua “Người giàu có nhất thành Babylon” đã trình bày những bài học tài chính quý báu dưới dạng các câu chuyện huyền bí từ Babylon cổ đại, nơi được coi là nền kinh tế phồn thịnh nhất từng tồn tại. Đây là cuốn sách hay 2023 cực kỳ hot mà nhắc tới chắc hẳn ai cũng từng nghe qua một lần.</p><p>Cuốn sách cung cấp cho người đọc những nguyên tắc quản lý tài chính cá nhân, tiết kiệm và đầu tư một cách thông minh. Mỗi chương đều mang đến một bài học riêng biệt, giúp người đọc hiểu biết về việc làm giàu không chỉ dựa vào thu nhập, mà còn cần sự khôn ngoan, kỷ luật và hiểu biết về tiền bạc.</p><h4><strong>Cách nghĩ để thành công (Think &amp; Grow Rich)</strong></h4><p>“Think &amp; Grow Rich” thuộc top những cuốn sách hay nên đọc và là một tác phẩm kinh điển của Napoleon Hill, được viết dựa trên nghiên cứu của ông về hàng trăm người thành đạt nhất thế kỷ 20. Cuốn sách không chỉ giới thiệu về việc kiếm tiền mà còn về việc xây dựng tư duy thành công. Hill trình bày 13 bước để đạt đến sự giàu có và thành công, bắt đầu từ ý thức định hướng, lòng tin và sức mạnh của việc tạo lập mục tiêu cụ thể.</p>', 0, 1, '2024-12-29 17:13:09', '2024-12-30 21:31:51'),
(5, 2, 'Những tác giả có sức ảnh hưởng nhất trong làng sách Việt Nam năm 2015', 'tac-gia.jpg', 'Admin', '<p><strong>Năm 2015, bên cạnh những tác giả đã quá đỗi quen thuộc thì thị trường xuất bản còn đón nhận nhiều gương mặt trẻ. Họ đã thổi một làn gió mới tới những người yêu sách, đem đến tinh thần mua sách và đọc sách ở thế hệ 9x, 10x.&nbsp;</strong></p><p>Cùng LĐTĐ điểm tên 10 nhà văn, tác giả tạo được tiếng vang nhất trong làng sách Việt Nam trong năm qua.</p><h4><strong>Nguyễn Nhật Ánh</strong></h4><p>Năm 2015 có thể coi là một năm “đại thắng” đối với nhà văn Nguyễn Nhật Anh. “Tôi thấy hoa vàng trên cỏ xanh” thu nhận thành công trên mức tưởng tượng khi được chuyển thể thành phim nhựa giới thiệu tới khán giả trong và ngoài nước. Bên cạnh sự phủ sóng mạnh mẽ của “Tôi thấy hoa vàng trên cỏ xanh”, những cuốn sách khác của nhà văn Nguyễn Nhật Ánh như: “Bảy bước tới mùa hè”, “Cô gái đến từ hôm qua”… cũng nhanh chóng trở thành “best-seller” ngay từ khi mới ra mắt.</p><p>Thành công của những tác phẩm do Nguyễn Nhật Ánh sáng tác đến từ sự dung dị, đời thường, gắn liền với những kỷ niệm tươi đẹp của tuổi thơ. Mỗi cuốn sách như một bức tranh mở ra trước mắt người đọc những khung cảnh chân phương, đầy ắp tiếng cười.</p><h4><strong>Nguyễn Phong Việt</strong></h4><p>“Đi qua thương nhớ”, “Sinh ra là để cô đơn” hay mới đây nhất là “Sống một cuộc đời bình thường” đều là những cuốn sách được yêu mến của Nguyễn Phong Việt.</p><p>Được mệnh danh là nhà thơ “ăn khách” nhất, Nguyễn Phong Việt chia sẻ: “Tôi may mắn khi mình có rất nhiều cảm xúc. Ngay từ tập thơ đầu, tôi là người làm thơ không câu nệ câu chữ. Mình nghĩ câu đó cần 20 từ thì viết 20 từ chứ không phải vì để cho ngắn gọn, cho người đọc dễ chịu thì viết ngắn hơn. Mình viết mình cảm nhận được trước đã, rồi độc giả mới hiểu. Sau này, tôi có sự thỏa hiệp nho nhỏ, thay đổi vài từ để cảm xúc của câu chữ không bị bóp nghẹt trong đau đớn”.</p><h4><strong>Anh Khang</strong></h4><p>Sớm định hình phong cách riêng trong dòng văn học trẻ sôi động, Anh Khang - tác giả sinh năm 1987 được độc giả trẻ đón nhận qua những tựa sách “hot” như “Ngày trôi về phía cũ”, “Đường hai ngả người thương thành lạ” hay “Buồn làm sao buông”.</p><p>Văn của Anh Khang không tìm đến sự nổi loạn hay phá cách trong con chữ mà tạo ra dấu ấn riêng nhờ sự nhạy cảm trong lối suy nghĩ thấu đáo, truyền tải đúng tâm tình của người trẻ hiện đại. Anh Khang là một trong những tác giả trẻ sở hữu số lượng fans đông đảo nhất hiện nay trên mạng xã hội cũng như ngoài đời thực.</p>', 0, 1, '2024-12-01 17:25:47', '2024-12-03 13:21:05'),
(8, 9, 'Top cuốn sách tâm lý làm chủ chính mình hay nhất hiện nay', 'top-sach-tam-li.jpg', 'Admin', '<p><i>Tâm lý học là một ngành học thú vị và hấp dẫn, bởi vì nó giúp chúng ta hiểu được tâm lý con người, một thứ rất phức tạp và biến đổi. Nhiều người muốn nâng cao kiến thức về tâm lý học và tìm đọc những cuốn sách chất lượng và hữu ích về ngành học này. Trong bài viết này, sẽ giới thiệu cho bạn top cuốn sách tâm lý nổi tiếng hiện nay.</i></p><h4><strong>Tư duy nhanh và chậm – Daniel Kahneman</strong></h4><p>Tư Duy Nhanh Và Chậm là một cuốn sách nổi tiếng của Daniel Kahneman, một nhà tâm lý học xuất sắc. Sách giải thích rằng tâm trí con người có hai hệ thống hoạt động khác nhau: Hệ thống 1 hoạt động nhanh chóng, trực giác và không cần suy nghĩ nhiều; Hệ thống 2 hoạt động chậm rãi, cẩn thận và cần nhiều sự chú ý. Tác giả cũng cho thấy rằng con người thường mắc phải những sai lầm trong việc ra quyết định, do bị ảnh hưởng bởi những cảm xúc, định kiến và thiếu nhất quán. Cuốn sách này sẽ giúp bạn đọc hiểu được nhiều điều thú vị và sâu sắc về tâm lý con người và nhận ra rằng “Chúng ta không giỏi như chúng ta nghĩ”.</p><h4><a href=\"https://tiki.vn/search?q=phi%20l%C3%BD%20tr%C3%AD\"><strong>Phi lý trí</strong></a><strong> – Dan Ariely</strong></h4><p>Phi Lý Trí là một tác phẩm trong top cuốn sách tâm lý của Dan Ariely, một giáo sư tâm lý học và kinh tế học hành vi, trong đó ông đã trình bày những nghiên cứu và thí nghiệm của mình về sự thiếu hợp lý của con người trong việc ra quyết định và tiết lộ những hiện tượng tâm lý mới lạ và thú vị. Ông đã khẳng định rằng: chúng ta thường bị ảnh hưởng bởi một “hệ thống” phi lý trí vô hình.&nbsp;</p><p>Ông đã kết hợp những nghiên cứu khoa học với những ví dụ thực tế để giúp chúng ta nhận ra những “điểm mù” trong cách suy nghĩ hàng ngày. Phi Lý Trí của Dan Ariely là một cuốn sách tâm lý học rất cuốn hút bởi ông đã sử dụng ngôn ngữ dễ hiểu nhưng vẫn khiến người đọc phải suy ngẫm về những hành vi và những sai lầm của bản thân để có thể sống một cách hợp lý và tốt đẹp hơn.</p><h4><strong>Im lặng – Sức mạnh của người hướng nội</strong></h4><p>Trong cuốn sách này, Susan Cain đã nói về sự khác biệt giữa người hướng ngoại và người hướng nội, và những ưu điểm của người có tính cách nhạy cảm. Tác giả đã chỉ ra rằng người hướng nội có thể tận dụng tính cách của mình để chọn lựa công việc, lĩnh vực phù hợp với mình trong xã hội.&nbsp;</p><p>Cuốn sách này sẽ rất hữu ích cho bạn nếu bạn là người hướng nội muốn tìm đường đi cho bản thân, hoặc nếu bạn muốn hiểu thêm về người hướng nội để có thể quản lý, giao tiếp và hợp tác tốt hơn với họ.</p><h4><strong>Tâm Lý Học Đám Đông – Gustave Le Bon</strong></h4><p>Tác giả Gustave Le Bon, một nhà tâm lý học Pháp nổi tiếng, đã viết cuốn sách Tâm lý học đám đông để nghiên cứu về sự ảnh hưởng của đám đông đến lý trí và cảm xúc của con người. Tác giả đã dựa trên nhiều nghiên cứu về tinh thần và tính cách của các dân tộc, chủng tộc khác nhau trên thế giới. Tác giả đã cho rằng, con người bị chi phối bởi những yếu tố sinh học và tâm lý học. Chủng tộc là một thực thể ẩn sâu trong mỗi cá nhân và có ảnh hưởng đến mọi hành động, ham muốn, xung năng của họ. Tác giả cũng đã trải qua nhiều biến động lịch sử của Pháp, như Công Xã Paris, cách mạng Pháp 1789 và 1848. Những trải nghiệm này đã giúp tác giả có những quan sát và phân tích từ thực tiễn được thể hiện rõ nét trong cuốn sách Tâm lý học đám đông.</p>', 0, 1, '2024-12-03 13:45:32', '2024-12-04 13:45:32'),
(9, 9, '9 cuốn sách kinh tế hay nhất | Muốn kinh doanh phải đọc qua', 'top-9-sach.jpg', 'Admin', '<p><strong>Bạn quan tâm đến tình hình kinh tế thế giới, bạn muốn bắt đầu một sự nghiệp kinh doanh mà phân vân không biết nền kinh tế thực sự vận hành như thế nào, bạn muốn tìm hiểu một tựa sách về kinh tế nhưng vẫn đang phân vân. Bài viết này sẽ giải đáp hết thắc mắc đó. Cùng tìm hiểu những cuốn sách về kinh doanh hay nhất được chúng tớ tổng hợp nhé.</strong></p><h4><strong>Thế giới phẳng – Thomas L.Friedman</strong></h4><p>Sách kinh tế Thế giới phẳng nói về vấn đề toàn cầu hóa dưới góc độ phân tích độc đáo. Theo tác giả, “phẳng” trong thế giới phẳng đó là sự kết nối, phá vỡ đi rào cản về chính trị, tôn giáo, địa lý, từ đó mở ra địa chính trị, địa kinh tế, phương thức sản xuất kinh doanh tiên tiến hiện đại hơn.</p><p>Cuốn sách tập trung mổ xẻ cấu trúc của nền kinh tế và chính trị đương đại, nêu rõ sự phát triển vượt bậc của khoa học kỹ thuật làm thay đổi diện mạo của nền kinh tế thế giới. Bằng cách trình bày hóm hỉnh hài hước, tác giả đã giúp người đọc hiểu thế giới phẳng được bắt đầu khi nào, diễn tiến ra sao, các yếu tố then chốt làm thế giới phẳng. Thông qua cuốn sách, các doanh nghiệp, quốc gia, cá nhân nhìn nhận rõ được cơ hội và thách thức trong bối cảnh toàn cầu hóa, từ đó đưa ra định hướng phát triển riêng cho mình.</p><h4><strong>Lược sử kinh tế học – Niall Kishtainy</strong></h4><p>Sách kinh tế Lược sử kinh tế học luôn nằm trong top những cuốn sách bán chạy nhất hiện nay. Đọc xong cuốn sách mọi người sẽ cảm nhận được kinh tế học không phải là những kiến thức cao siêu dành cho các doanh nhân, chính khách hay nhà kinh tế học mà nó có ích và gần gũi với cuộc sống củ mỗi người. Mỗi người trong thời đại hiện nay đều cần nắm được các kiến thức cơ bản về kinh tế để giúp cuộc sống của mình được tốt đẹp hơn.</p><p>Nội dung sách tập trung nói về các học thuyết và quy luật kinh tế kinh điển ở phương tây trong hàng nghìn năm qua dưới góc độ khác quan. Tác giả đưa ra những minh họa, ví dụ sống động và dễ hiểu để có thể tiếp cận được phần đa người đọc. Với độ dày khoảng 300 trang, sách kinh tế hay Lược sử kinh tế học giúp chúng ta nắm được các cột mốc quan trọng toàn cảnh nền kinh tế, từ lúc khởi nguồn đơn giản đến khi phức tạp hơn, xuất hiện giá trị thặng dư, buôn bán…</p><h4><strong>Doanh nghiệp của thế kỷ 21 – Robert T. Kiyosaki</strong></h4><p>Nhắc đến những cuốn sách kinh tế hay thì không thể nào kể thiếu tên cuốn Doanh nghiệp của thế kỷ 21. Cuốn sách này sẽ nêu rõ lý do tại sao cần phải xây dựng được cho mình doanh nghiệp riêng, và nên hoạt động trong lĩnh vực nào là tốt nhất. Bên cạnh đó tác giả cũng đưa ra nhiều kiến thức về tư duy làm giàu, cách tìm kiếm các phương tiện giúp xây dựng hình ảnh doanh nghiệp tốt hơn đối với khách hàng, người tiêu dùng, đối tác… Những công cụ, cách thức tìm kiếm mọi thứ để giúp doanh nghiệp phát triển toàn diện hơn cũng được bật mí chi tiết và đầy đủ nhất qua cuốn sách.</p><p>Cuốn sách khai sáng tư duy cho những ai đang mong muốn tự lập kinh doanh và làm giàu cho bản thân. Tác giả đưa ra giải pháp mà bất cứ ai cũng có thể vận dụng, áp dụng thành công mà không cần phải có tài năng hay thiên bẩm.</p><h4><strong>Tuần làm việc 4 giờ – Timothy Ferress</strong></h4><p>Một trong những cuốn sách kinh tế hay mà bạn nên đọc đó là Tuần làm việc 4 giờ. Đọc cuốn sách này, mỗi người sẽ tự trả lời được cho mình câu hỏi làm thế nào để có được cuộc sống tự do, thoải mái như một triệu phú, tỷ phú mà không cần phải có 1 triệu đô la, 1 tỷ đô la – số tiền mà ít ai có được trong suốt cuộc đời học tập, làm việc của mình. Tác giả đã giúp mỗi người biết cách tách biệt thu nhập với thời gian, từ đó xây dựng cho mình lối sống lý tưởng với nhiều hoạt động đa dạng như đi vòng quanh thế giới, đọc sách…</p><p>Từ cuốn sách, tác giả Timothy Ferress cũng đã có những chia sẻ về cách kiếm tiền 40 nghìn đô /tháng chỉ bằng cách làm 4 tiếng/tuần. Sự khác biệt của cuốn sách là đưa ra góc nhìn cuộc sống đơn giản và dễ thở hơn, thay vì đề cập đến các vấn đề thường gặp như thiếu thời gian làm việc, nghỉ ngơi, tinh thần căng thẳng… Nhìn chung mỗi người hoàn toàn có thể sống tốt với công việc mà mình có tiềm năng, quan trọng bạn cần phải khai phá tiềm năng của mình đúng đắn.</p><h4><strong>Chiến lược đại dương xanh – W. Chan Kim &amp; Renee Mauborgne</strong></h4><p>Chiến lược đại dương xanh là cuốn sách hay về kinh tế tiếp theo mà chúng tôi muốn giới thiệu đến các bạn đọc. Cuốn sách này xuất bản từ năm 2004, đến nay đã trải qua gần 20 năm nhưng vẫn giữ nguyên tính lịch sử và sự phù hợp với thời đại. Cuốn sách nổi tiếng này đã được dịch hơn 46 thứ tiếng và bán hơn 4 triệu bản trên toàn thế giới.</p><p>Nội dung cuốn sách đề cập đến chiến lược kinh doanh kinh điển mà các doanh nhân, lãnh đạo cần biết, đó là mở rộng và phát triển thị trường mới – một đại dương xanh – ở đó không có bất cứ sự cạnh tranh nào.</p><p>Chiến lược này nhấn mạnh tầm quan trọng của việc nâng cao giá trị dịch vụ cũng như sản phẩm, đi kèm với đó là giá thành hợp lý để mang lại nhiều quyền lợi cho người tiêu dùng. Chiến lược này có thể đưa các doanh nghiệp phát triển nhảy vọt và tăng trưởng mạnh mẽ về giá trị.</p>', 0, 1, '2023-12-03 17:41:06', '2023-12-03 17:44:51'),
(14, 2, 'sdadasdasdasda', 'wallpaperflare.com_wallpaper.jpg', 'Admin', '<p>dasdasda</p>', 0, 1, '2024-12-27 07:23:11', '2024-12-27 07:23:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_categories`
--

CREATE TABLE `post_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `post_categories`
--

INSERT INTO `post_categories` (`id`, `name`) VALUES
(1, 'Chưa cập nhật'),
(2, 'Tác giả nổi tiếng'),
(9, 'Giới thiệu sách');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sell_quantity` int(11) NOT NULL DEFAULT 0,
  `price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `views` int(11) NOT NULL DEFAULT 0,
  `details` text NOT NULL,
  `short_description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `name`, `image`, `quantity`, `sell_quantity`, `price`, `sale_price`, `create_date`, `views`, `details`, `short_description`, `status`) VALUES
(1, 19, 'Áo Thun Nam Trắng', 'aothuntrangnam.jpg', 100, 0, 199000, 159000, '2024-11-18 08:22:03', 10, 'Áo thun Lót Nam Trắng Đẹp Cổ Tròn, Áo Phông Nam Dáng Rộng Cotton cộc tay trơn kiểu bộ đội dệt kim đông xuân\r\n\r\nChất liệu cotton ( vải bông) đem đến sự mềm mại, thoáng khí, thấm hút mổ hôi tốt, giúp bạn khi mặc sẽ luôn cảm thấy thỏa mái và tự tin.\r\n- Co giãn tốt, không gây vết lằn trên da, không gây sự khó chịu khi mặc.\r\n- Áo được thiết kế đơn giản, dễ mặc cho nam giới phong cách năng động và khỏe khoắn hơn.\r\n- Sản phẩm được sản xuất tại việt nam, an toàn và không gây hại tới sức khỏe\r\nHướng dẫn sử dụng sản phẩm Áo\r\n- Hãy nhớ giặt qua lần đầu để hết bụi vải, và hình in được bền hơn, không bong tróc\r\n- Nhớ lộn trái áo khi giặt và không giặt ngâm chung với đồ dễ phai màu.\r\n- Không sử dụng thuốc tẩy mạnh\r\n- Khi phơi lộn trái và không nên phơi trực tiếp dưới ánh nắng mặt trời để bảo vệ vải.\r\n- Là/Ủi áo ở nhiệt độ trung bình.\r\n', 'Áo thun Lót Nam Trắng Đẹp Cổ Tròn, Áo Phông Nam Dáng Rộng Cotton cộc tay trơn kiểu bộ đội dệt kim đông xuân', 1),
(2, 19, 'Áo thun nam polo đen trơn cotton (AXH-098)', 'aothunnamden.jpg', 100, 0, 140000, 97000, '2024-11-18 10:15:54', 1, 'Hôm nay Aoxuanhe xin giới thiệu đến các bạn mẫu \"Áo thun nam polo đen trơn cotton\" mã số AXH-098, đây là 1 trong những mẫu áo thun nam mới nhất năm nay. Áo được thiết kế theo phong cách trẻ trung tối giản, với kiểu dáng áo polo rất hiện đại.\r\n\r\nSản phẩm làm từ vải pha cotton tạo sự co giản bền bỉ mà vẫn thoáng mát và thấm mồ hôi cực tốt. Các đường chỉ may chắn chắn giúp tạo nên chất lượng cho sản phẩm. Áo có màu đen trơn nam tính rất phù hợp với môi trường văn phòng năng động hoặc những chuyến dã ngoại. \r\n\r\nHãy cùng chúng tôi chiêm ngưỡng sản phẩm qua 1 số hình ảnh sau và liên hệ ngay để nhận được tư vấn đặt hàng miễn phí nhé !!!', 'Áo thun nam polo đen trơn cotton AXH-098 là 1 trong những mẫu áo thun nam mới nhất năm nay. Áo được thiết kế theo phong cách trẻ trung tối giản, với kiểu dáng áo polo rất hiện đại. Sản phẩm làm từ vải pha cotton tạo sự co giản bền bỉ mà vẫn thoáng mát và thấm mồ hôi cực tốt. Áo có màu đen nam tính, rất phù hợp với môi trường văn phòng trẻ hoặc những chuyến dã ngoại.', 1),
(6, 19, 'Áo Thun Nam Xanh Dương', 'aothunnamxanhduong.jpg', 50, 0, 145000, 100000, '2024-11-20 22:23:49', 0, 'Bắt đầu cuộc hành trình đầy phong cách với chiếc Áo Thun Nam Puma Team Graphic. Thiết kế độc đáo cùng hình ảnh thêu tinh tế sẽ giúp bạn tự tin và tạo nên dấu ấn độc đáo của riêng mình.', 'Phối áo phông xanh dương đem lại cho bạn sự tươi mới, trẻ trung', 1),
(14, 17, 'Quần jogger Loose Cargo Denim Màu đen', 'quanjeannamden.jpg', 4, 1, 999000, 97000, '2024-11-20 22:54:49', 0, 'Quần jogger bằng cotton denim cứng cáp với ống bo tròn và dáng rộng từ vòng ba cho tới gấu với toàn bộ ống quần rộng rãi. Cạp thường với chun bọc và dây rút ẩn. Túi hai bên, túi ống quần may đáp có nắp, túi sau mở và nẹp kéo khoá giả. Đây là tất cả những gì bạn cần để diện một bộ denim hoàn hảo.', 'Túi hộp, Quần thể thao, Quần dài lưng thun', 1),
(15, 17, 'Màu xanh denim nhạt', 'quanjeannamxanhnhat.jpg', 50, 0, 999000, 97000, '2024-11-20 23:05:47', 3, 'Quần jogger bằng cotton denim cứng cáp với ống bo tròn và dáng rộng từ vòng ba cho tới gấu với toàn bộ ống quần rộng rãi. Cạp thường với chun bọc và dây rút ẩn. Túi hai bên, túi ống quần may đáp có nắp, túi sau mở và nẹp kéo khoá giả. Đây là tất cả những gì bạn cần để diện một bộ denim hoàn hảo.', 'Túi hộp, Quần thể thao, Quần dài lưng thun', 1),
(16, 17, 'Barrel Regular Jeans Màu xám', 'quanjeannuxam.jpg', 200, 0, 799000, 779000, '2024-11-20 23:09:13', 0, 'Quần jean 5 túi bằng cotton denim cứng, khi mới mặc sẽ có cảm giác vải cứng nhưng càng mặc sẽ càng mềm và thoải mái hơn. Ống quần phồng rộng, lượn cong với dáng rộng từ hông tới đùi rồi thuôn dần tới gấu. Cạp thường với nẹp khoá kéo và khuy. Chiều dài vừa phải, được thiết kế để vừa chạm tới bàn chân và không bị chùng. Một thiết kế có thể chuyển từ thanh lịch và sành điệu sang thể thao và cá tính.', ' Ống quần balloon', 1),
(17, 17, 'Barrel High Jeans Màu xanh denim đậm', 'quanjeannu.jpg', 30, 0, 749000, 729000, '2024-11-20 23:12:48', 1, 'Quần jean 5 túi bằng cotton denim cứng, khi mới mặc sẽ có cảm giác vải cứng nhưng càng mặc sẽ càng mềm và thoải mái hơn. Ống quần phồng rộng, lượn cong với dáng rộng từ hông tới đùi, thuôn dần tới gấu. Cạp cao với nẹp khoá kéo và khuy. Chiều dài vừa phải, được thiết kế để vừa chạm tới bàn chân và không bị chùng. Đây là một món đồ denim thoải mái và cá tính.', 'Màu xanh denim đậm, Màu trơn', 1),
(18, 6, 'Áo thun dáng thụng Màu trắng', 'aothunnutrang.jpg', 66, 0, 199000, 179000, '2024-11-20 23:20:33', 7, 'Áo thun dáng thụng bằng cotton jersey mềm có viền gân nổi quanh cổ và vai ráp trễ.', 'Màu trắng, Màu trơn', 1),
(20, 2, 'Loose Fit Printed hoodie ', 'aokhoacnamtrang.jpg', 55, 0, 799000, 779000, '2024-11-20 23:31:04', 0, 'Hoodie in heavyweight sweatshirt fabric made from a cotton blend with a soft brushed inside and a print motif. Double-layered hood, dropped shoulders and long sleeves. Kangaroo pocket and ribbing at the cuffs and hem. Loose fit for a generous but not oversized silhouette.', 'Áo dài tay có mũ, Màu be, Màu trơn', 1),
(21, 6, 'Áo khoác Màu xanh dương-xám', 'aokhoacnuxanhduong.jpg', 20, 0, 499000, 479000, '2024-11-23 09:54:06', 3, 'Áo khoác rộng bằng vải nỉ có mũ dây rút, trong có lớp lót, túi kiểu kangaroo và gân nổi ở cổ tay và gấu áo.', 'Áo dài tay có mũ, Màu xanh dương-xám, Màu trơn', 1),
(23, 19, 'Áo thun lửng in hình Màu be nhạt', 'aothunnube.jpg', 30, 0, 149000, 129000, '2024-11-23 12:19:16', 0, 'Áo thun lửng, ôm bằng cotton jersey mềm có hoạ tiết in ở thân trước. Viền gân nổi quanh cổ và vạt ngang.', 'Lửng, Tay áo ngắn, Ôm nhẹ, Cổ tròn, Màu be nhạt, Hoa', 1),
(24, 6, 'Áo sơ mi linen pha Màu xanh kaki đậm', 'aosominuxanh.jpg', 120, 3, 599000, 569000, '2024-11-23 12:20:16', 4, 'Áo sơ mi lửng dệt thoi mỏng nhẹ làm từ linen pha viscose. Dáng rộng, có cổ, khuy dọc thân trước và cầu vai hai lớp với ly hộp phía sau. Túi ngực may đáp, vai ráp trễ và tay ngắn.', 'Tay áo ngắn, Cổ bẻ, Dáng hộp, Màu xanh kaki đậm', 1),
(25, 16, 'Áo polo Slim Fit Màu be', 'aopolonambe.jpg', 50, 0, 499000, 459000, '2024-11-23 16:21:03', 4, 'Áo polo bằng cotton dệt kim mềm có cổ, nẹp khuy, tay ngắn và vạt ngang. Dáng ôm gọn các đường cong trên cơ thể tạo dáng vừa vặn.\r\n\r\n', 'Tay áo ngắn, Ôm nhẹ, Cổ bẻ, Áo phông có cổ, Màu be, Màu trơn', 1),
(26, 2, 'Regular Fit Oxford shirt Màu đen', 'sominamden.jpg', 49, 1, 499000, 409000, '2024-11-23 16:23:55', 14, 'Shirt in Oxford cotton with a button-down collar, classic front, yoke at the back and an open chest pocket. Long sleeves with buttoned cuffs and a sleeve placket with a link button. Gently rounded hem. Regular fit for comfortable wear and a classic silhouette.', 'Tay dài, Ôm vừa, Cổ áo cài khuy, Màu đen, Màu trơn', 1),
(27, 4, 'Áo nỉ có hoạ tiết Màu ngọc lam nhạt', 'aokhoactreemxanhnhat.jpg', 29, 1, 499000, 9000, '2024-11-23 20:31:17', 1133, 'Áo dáng thụng bằng vải nỉ có mặt trái chải xù mềm và một hoạ tiết phía trước. Cổ tròn, viền gân nổi, vai ráp trễ, tay dài với cổ tay và gấu bo gân nổi.', 'Tay dài, Áo nỉ, Cổ vịt, Màu ngọc lam nhạt', 1),
(28, 4, 'Áo hoodie có hoạ tiết ', 'aokhoacteemkem.jpg', 499, 1, 699000, 679000, '2024-11-29 20:36:43', 13, 'Áo hoodie dáng rộng bằng vải nỉ có hoạ tiết thêu ở thân trước và mặt trái chải xù mềm. Mũ đáp chéo phía trước, lót vải jersey, vai ráp trễ nhiều và túi kangaroo ở phía trước. Tay dài với cổ tay và gấu bo gân nổi.', 'Tay dài, Áo dài tay có mũ, Màu kem', 1),
(29, 4, 'Quần yếm denim', 'yemtreemxanh.jpg', -5, 4, 799000, 769000, '2024-12-02 20:54:53', 110002, 'Quần yếm bằng cotton denim giặt phai có quai điều chỉnh được nối nhau ở sau lưng, khuy bấm ở hai bên và nẹp kéo khoá giả. Túi ngực mở, túi trước và sau.', 'Dài, Quần yếm, Màu xanh denim, Màu trơn', 1),
(30, 4, 'Áo sơ mi ', 'somitreemnam.jpg', 46, 4, 449000, 431000, '2023-12-02 20:56:21', 17, 'Áo sơ mi dài tay bằng cotton dệt thoi kèm cà vạt. Áo sơ mi có cổ bẻ, khuy dọc thân trước, cầu vai hai lớp phía sau và măng sét cài khuy. Cà vạt có thể tháo rời có quai co giãn điều chỉnh được và khoá nhựa.', 'Tay dài, Cổ bẻ, Màu trắng', 1),
(31, 6, 'Chân váy poplin xoè ', 'vaytrang.jpg', 41, 9, 799000, 745000, '2024-12-02 20:59:06', 26, 'Chân váy xoè, ngắn bằng poplin thô làm từ cotton pha viscose. Cạp cao với chun bọc và dây rút kiểu mì ống. Túi chìm hai bên và phần may ghép bằng ren bậc thang trên gấu. Có lớp lót.', 'Chân váy chữ A, Cạp cao, Ôm vừa, Màu trắng, Màu trơn', 1),
(32, 16, 'Áo polo dệt kim mịn Regular Fit', 'aopolotaydai.jpg', 5, 5, 799000, 779000, '2024-12-02 21:00:48', 32, 'Áo polo dệt kim mềm, mịn có cổ, nẹp khuy, tay dài và vạt ngang. Cổ tay và gấu bo gân nổi mịn. Dáng vừa để mặc thoải mái và tạo dáng cổ điển.', 'Áo phông có cổ, Màu be đậm, Màu trơn, Cổ bẻ, Ôm vừa', 1),
(36, 4, 'TRAN VU MINH DAT', 'wallpaperflare.com_wallpaper.jpg', 5, 0, 5, 4, '2024-12-27 07:17:05', 0, '<p>1111</p>', '<p>1111</p>', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL COMMENT 'Tên đăng nhập',
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL COMMENT 'Họ tên',
  `image` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 là khách hàng 1 là nhân viên',
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `full_name`, `image`, `email`, `phone`, `address`, `role`, `active`) VALUES
(6, 'abc123', 'abcxyz', 'Nguyễn Trãi', 'avatar_it.png', 'abc@gmail.com', '099999999', 'Định Quán', 0, 1),
(7, 'lannhi', '123456', 'Mai Lan Nhi', 'user-default.png', 'lanhi123@gmail.com', '0336124532', 'Nghệ An', 0, 1),
(8, 'admin', 'admin123', 'Admin', 'hocbai.jpg', 'abc@gmail.com', '0336216559', 'Cần Thơ', 1, 1),
(9, 'nguyenvana', 'vana123', 'Nguyễn Văn A', 'user-default.png', 'nguyenvana@gmail.com', '0909135789', 'Bình Định', 0, 1),
(10, 'Nhien', 'thuynhien123', 'Thụy Nhiên', 'user-default.png', 'nhien123@gmail.com', '0901235985', 'HCM', 0, 1),
(11, 'dian', 'dian123', 'Dĩ An', 'user-default.png', 'dian@gmail.com', '0909006712', 'Bình Dương', 0, 1),
(16, 'ss', '$2y$10$FJDvzzeJZTP86Tt8FXci0uhutiiwi5wTMo4LJvW/51.00BXGlKFUG', 'tranvuminhdat', 'user-default.png', 'minhdatt27@gmail.com', '0785285507', '`123', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `warehouse`
--

CREATE TABLE `warehouse` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sell` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `warehouse`
--

INSERT INTO `warehouse` (`id`, `name`, `price`, `quantity`, `sell`, `created_at`) VALUES
(12, 'Áo  nam', 123555, 2, 0, '2024-12-10 20:27:13'),
(13, 'Áo Polo PC01', 123555, 50, 0, '2024-12-11 20:27:34'),
(14, 'Quần thun', 200000, 0, 0, '2024-10-10 20:27:56'),
(15, 'Sơ mi trắng', 120000, 90, 0, '2024-11-10 20:28:17'),
(16, 'Áo thun trẻ em', 50000, 70, 0, '2024-10-20 20:54:48');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderdetails_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_category` (`category_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `orderdetails_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Các ràng buộc cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `post_categories` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
