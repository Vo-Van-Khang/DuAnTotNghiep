-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 10, 2024 lúc 05:49 PM
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
-- Cơ sở dữ liệu: `datn`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`) VALUES
(1, 'Phiêu lưu', '2024-10-23 04:29:03'),
(2, 'Hành động', '2024-10-23 04:29:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `id_movie` int(11) NOT NULL,
  `id_user` bigint(11) UNSIGNED NOT NULL,
  `content` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `isDeleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `id_movie`, `id_user`, `content`, `status`, `created_at`, `isDeleted`) VALUES
(49, 19, 1, 'sad', 0, '2024-11-08 04:52:09', 0),
(55, 21, 1, 'd', 0, '2024-11-08 07:29:44', 0),
(57, 26, 1, 'csd', 0, '2024-11-08 08:17:30', 0),
(58, 19, 1, 'hi', 0, '2024-11-08 09:39:40', 0),
(60, 26, 1, 'cc', 0, '2024-11-09 16:34:46', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment_filters`
--

CREATE TABLE `comment_filters` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comment_filters`
--

INSERT INTO `comment_filters` (`id`, `content`, `created_at`, `updated_at`) VALUES
(3, 'cc', '2024-11-08 02:53:24', '2024-11-08 02:53:24'),
(4, '16', '2024-11-08 02:53:36', '2024-11-08 02:53:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `episodes`
--

CREATE TABLE `episodes` (
  `id` int(11) NOT NULL,
  `episode` int(11) NOT NULL,
  `id_movie` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `histories`
--

CREATE TABLE `histories` (
  `id` int(11) NOT NULL,
  `id_movie` int(11) NOT NULL,
  `id_user` bigint(11) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `histories`
--

INSERT INTO `histories` (`id`, `id_movie`, `id_user`, `created_at`) VALUES
(47, 30, 1, '2024-11-05 16:12:00'),
(48, 20, 1, '2024-11-06 07:28:35'),
(330, 19, 1, '2024-11-08 09:39:18'),
(333, 26, 1, '2024-11-09 16:32:56'),
(335, 21, 1, '2024-11-10 13:52:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `id_movie` int(11) NOT NULL,
  `id_user` bigint(11) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `likes`
--

INSERT INTO `likes` (`id`, `id_movie`, `id_user`, `created_at`) VALUES
(36, 20, 1, '2024-11-01 04:34:20'),
(38, 19, 1, '2024-11-03 15:02:49'),
(39, 21, 1, '2024-11-03 15:03:04'),
(41, 26, 1, '2024-11-08 07:58:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `cast` text NOT NULL,
  `director` varchar(255) NOT NULL,
  `release_year` varchar(50) NOT NULL,
  `id_category` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `duration` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `isDeleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `thumbnail`, `cast`, `director`, `release_year`, `id_category`, `country`, `views`, `status`, `duration`, `created_at`, `isDeleted`) VALUES
(19, 'One Piece: Stampede', 'Luffy và các thành viên băng Mũ Rơm nhận được thư mời đến \"Lễ hội Hải tặc\" từ người tổ chức Buena Festa. Và vô số Hải tặc khắp nơi trên thế giới cũng đã đến đây để cùng hướng về một vũ đài duy nhất \"Tranh đoạt chiếc chìa khóa dẫn đến kho báu Vua Hải Tặc (Roger)\". Nhưng điều bất ngờ nhất chính là Douglas Bullet - tên quái vật với biệt danh \"Hậu duệ của quỷ\" cũng đột ngột tham chiến. Và đội ngũ Hải Quân cũng đã bí mật tham gia với mục đích tóm gọn các Hải tặc. Hải tặc, Hải quân, Vương hạ Thất Vũ Hải, Quân Cách mạng, CP-0, ... những thế lực hùng hậu nhất đã cùng góp mặt trong đại chiến rực lửa này. Liệu còn nhân vật nào sẽ bất ngờ xuất hiện? Cái kết nào sẽ xảy đến với trận chiến giành kho báu của Lễ hội Hải tặc đây...!?', 'images/thumbnails/hq720.jpg', 'Boa Hancock, Sabo, Buggy, Trafalgar Law, Smoker', 'Miyamoto Hiroaki', '2019', 2, 'Nhật', 45, 1, 101, '2024-10-31 14:00:36', 0),
(20, 'Coco: Hội Ngộ Diệu Kỳ', 'Coco sẽ kể về hành trình của Miguel, một cậu bé say mê những giai điệu nhưng lại sinh trưởng trong một gia đình cấm đoán sự xuất hiện của âm nhạc. Miguel luôn nung nấu giấc mơ trở thành một nhạc sĩ nổi tiếng giống như thần tượng Ernesto de la Cruz. Tuy nhiên, truyền thống ngang trái của gia đình đã khiến cậu không thể chứng minh tài năng của mình.  Rũ bỏ thực tế phũ phàng, Miguel tìm thấy chính mình ở Vùng Đất Linh Hồn (Land of the Dead) tuyệt đẹp và đầy sắc màu sau một chuỗi sự kiện huyền bí. Trong hành trình khám phá vùng đất mới, Miguel gặp gỡ “chuyên gia xảo quyệt” Hector. Cả hai cùng tạo nên chuyến phiêu lưu kỳ diệu để lật mở những bí mật chưa được tiết lộ về lịch sử của gia đình Migue', 'images/thumbnails/u2hgmkke_1920x1080-coco.png', 'Anthony Gonzalez, Gael García Bernal, Benjamin Bratt, Alanna Ubach, Renée Victor, Ana Ofelia Murguía, Edward James Olmos, Jaime Camil, Alfonso Arau, Herbert Siguenza, Lombardo Boyar, Sofía Espinosa, Dyana Ortelli, Gabriel Iglesias, Selene Luna, Natalia Co', 'Unkrich', '2017', 1, 'Mỹ', 10, 1, 105, '2024-10-31 15:43:07', 0),
(21, 'Vua sư tử', 'Bộ phim Vua Sư Tử được đạo diễn bởi Jon Favreau sẽ đưa khán giả đến với xavan Châu Phi rộng lớn nơi vị vua tương lai Simba được sinh ra. Tuy là người kế vị ngai vàng chính thức nhưng Simba phải đương đầu với những âm mưu của Scar, người chú ruột luôn toan tính chiếm lấy ngôi báu. Cuộc chiến ở Pride Rock trở nên khốc liệt hơn bao giờ hết và đỉnh điểm là việc chú sư tử Simba bị lưu đày khỏi quê hương. Với sự giúp đỡ của 2 người bạn mới Timon và Pumbaa, Simba dần học cách trưởng thành và quay trở về để giành lại những gì vốn dĩ thuộc về cậu. Bằng kĩ xảo đồ họa ấn tượng và âm nhạc sống động, Vua Sư Tử sẽ tái hiện lại những nhân vật mà khán giả yêu mến theo một cách hoàn toàn mới.', 'images/thumbnails/scale.webp', 'Donald Glover, Seth Rogen, Chiwetel Ejiofor, Alfre Woodard, Billy Eichner, John Kani, John Oliver, Florence Kasumba, Eric Andre, Keegan-Michael Key, JD McCrary, Shahadi Wright Joseph, Beyoncé Knowles-Carter', 'Jon Favreau', '2019', 1, 'Mỹ', 19, 1, 120, '2024-11-01 16:09:26', 0),
(26, 'Người Nhện: Mất mẹ nhà', 'Người Nhện: Không Còn Nhà (Spider-Man: No Way Home) là một bộ phim hành động viễn tưởng tiếp nối câu chuyện của Spider-man sau sự kiện trong Far From Home. Peter Parker, người đằng sau chiếc mặt nạ của Người Nhện, đã phải đối diện với những lời chỉ trích và khen ngợi từ công chúng khi danh tính thật của cậu bị tiết lộ. Cuộc sống của Peter, cùng với Dì May, Ned và MJ, đã bị ảnh hưởng nghiêm trọng. Để giải quyết tình hình, Peter đã tìm đến Doctor Strange để nhờ ông sử dụng phép thuật đảo ngược thời gian. Tuy nhiên, do một sai lầm nhỏ trong quá trình thi triển phép thuật, Peter đã mở ra những cánh cửa đưa các tên ác nhân từ các vũ trụ khác vào thế giới của mình. Liệu rằng Peter có thể sửa chữa được lỗi lầm của mình và đối diện với những thách thức mới? Phim mang lại trải nghiệm mới lạ cho khán giả khi kết hợp các vũ trụ song song và cho phép các nhân vật yêu thích xuất hiện. Sự xuất hiện của Zendaya, Tom Holland và Jon Favreau sẽ khiến người xem không thể rời mắt khỏi màn ảnh. Đạo diễn Jon Watts đã mang lại cho khán giả một tác phẩm không chỉ hấp dẫn về hành động mà còn về điều gì có thể xảy ra khi các thế giới giao nhau.', 'images/thumbnails/1730734000_nguoi-nhen-khong-con-nha-poster.jpg', 'Tom Holland, Zendaya, Benedict Cumberbatch, Jacob Batalon, Jon Favreau, Jamie Foxx, Willem Dafoe, Alfred Molina, Benedict Wong, Tony Revolori, Marisa Tomei, Andrew Garfield,Tobey Maguire', 'Jon Watts', '2021', 2, 'Mỹ', 255, 1, 148, '2024-11-04 15:26:40', 0),
(27, 'Những mảnh ghép cảm xúc', 'Cuộc sống tuổi mới lớn của cô bé Riley lại tiếp tục trở nên hỗn loạn hơn bao giờ hết với sự xuất hiện của 4 cảm xúc hoàn toàn mới: Lo Âu, Ganh Tị, Xấu Hổ, Chán Nản. Mọi chuyện thậm chí còn rối rắm hơn khi nhóm cảm xúc mới này nổi loạn và nhốt nhóm cảm xúc cũ gồm Vui Vẻ, Buồn Bã, Giận Dữ, Sợ Hãi và Chán Ghét lại, khiến cô bé Riley rơi vào những tình huống dở khóc dở cười.', 'images/thumbnails/1730819027_scale.jpg', 'Amy Poehler, Maya Hawke, Lewis Black, Phyllis Smith, Tony Hale, Liza Lapira, Ayo Edebiri, Adèle Exarchopoulos, Paul Walter Hauser,....', 'Pete Docter', '2015', 1, 'Mỹ', 0, 1, 95, '2024-11-05 15:03:47', 0),
(30, 'Câu chuyện đồ chơi 4', 'Sự trở lại rất hào hứng của dàn đồ chơi quen thuộc như Woody, Buzz Lightyear, Jessie... cùng hai nhân vật mới sẽ xuất hiện trong Toy Story4: Ducky và Bunny!', 'images/thumbnails/scale (1).webp', 'Tom Hanks, Tim Allen, Annie Potts, Tony Hale, Keegan-Michael Key, Madeleine, McGraw, Christina Hendricks, Jordan Peele, Keanu Reeves, Ally Maki', 'Josh Cooley', '2019', 1, 'Mỹ', 2, 1, 100, '2024-11-05 15:29:14', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `id_send_user` bigint(11) UNSIGNED NOT NULL,
  `id_receive_user` bigint(11) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `isDeleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `method` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reply_comments`
--

CREATE TABLE `reply_comments` (
  `id` int(11) NOT NULL,
  `id_movie` int(11) NOT NULL,
  `id_user` bigint(11) UNSIGNED NOT NULL,
  `id_comment` int(11) NOT NULL,
  `id_user_reply` bigint(11) UNSIGNED NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `isDeleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `reply_comments`
--

INSERT INTO `reply_comments` (`id`, `id_movie`, `id_user`, `id_comment`, `id_user_reply`, `content`, `created_at`, `isDeleted`) VALUES
(33, 19, 1, 49, 1, 'xamf shit', '2024-11-08 04:52:16', 0),
(42, 19, 3, 58, 1, 'cc', '2024-11-08 09:39:47', 0),
(44, 26, 3, 60, 1, 'dume', '2024-11-09 16:34:55', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('KhZBEvq4RfCvkg2rXMjfcpaEq52wO6FIq9hgoRHL', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicTRnREtweTUxYUR4dk1ETUhKSmg3aGFJV1JaWm9iMHBPcmt4a0dCRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9tb3ZpZS9hZGQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731251501);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `id_movie` int(11) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `slides`
--

INSERT INTO `slides` (`id`, `image`, `status`, `id_movie`, `isDeleted`) VALUES
(5, 'images/thumbnails/hq720.jpg', 1, 19, 0),
(6, 'images/thumbnails/u2hgmkke_1920x1080-coco.png', 1, 20, 0),
(7, 'images/thumbnails/scale.webp', 1, 21, 0),
(8, 'images/thumbnails/1730734000_nguoi-nhen-khong-con-nha-poster.jpg', 1, 26, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subcriptions`
--

CREATE TABLE `subcriptions` (
  `id` int(11) NOT NULL,
  `id_user` bigint(11) UNSIGNED NOT NULL,
  `id_plan` int(11) NOT NULL,
  `start_date` int(11) NOT NULL,
  `end_date` int(11) NOT NULL,
  `payment_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subscription_plans`
--

CREATE TABLE `subscription_plans` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `duration` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `urls`
--

CREATE TABLE `urls` (
  `id` int(11) NOT NULL,
  `resolution` int(50) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `premium` tinyint(1) NOT NULL DEFAULT 0,
  `media_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `urls`
--

INSERT INTO `urls` (`id`, `resolution`, `url`, `type`, `premium`, `media_id`) VALUES
(24, 360, 'https://duantotnghiep.s3.ap-southeast-2.amazonaws.com/videos/rAhGsmPnGFT0yTBG0XyM7XFIjCp3UGYmPZVBAGG8.mp4', 'movie', 0, 19),
(25, 720, 'https://duantotnghiep.s3.ap-southeast-2.amazonaws.com/videos/0lvCrY25G0HEYgwUDZqbBmxyjyr732bZpDFLU6Ne.mp4', 'movie', 0, 19),
(26, 360, 'https://duantotnghiep.s3.ap-southeast-2.amazonaws.com/videos/IWeDNK7j66N743tQyfK5T0ink1PSDc16x00HGVLQ.mp4', 'movie', 0, 20),
(27, 720, 'https://duantotnghiep.s3.ap-southeast-2.amazonaws.com/videos/o0m9SOo5uadgxgYiae6yXzo2FogweZWtX4XvhTAC.mp4', 'movie', 0, 20),
(28, 1080, 'https://duantotnghiep.s3.ap-southeast-2.amazonaws.com/videos/W9ELrRKDTBXbKlI7Cu02EsJsrXpZGAfUmXgjI33u.mp4', 'movie', 1, 21),
(29, 720, 'https://duantotnghiep.s3.ap-southeast-2.amazonaws.com/videos/PGpPrA6KDoblYn7LC9lEqDW7ruLZhi8zthfaHtD9.mp4', 'movie', 0, 21),
(37, 360, 'https://duantotnghiep.s3.ap-southeast-2.amazonaws.com/videos/sbsvhIFpZ4ILMOPmYqZ9y5YOAhl8jAphrz7fEl3R.mp4', 'movie', 0, 26),
(38, 720, 'https://duantotnghiep.s3.ap-southeast-2.amazonaws.com/videos/NPamOTanFCX8hCEd3ekqgfPtdiyFS2eV58NKZRxX.mp4', 'movie', 0, 26),
(39, 1080, 'https://duantotnghiep.s3.ap-southeast-2.amazonaws.com/videos/uaxmonsnTst7z6zTeKkvzHhQxL2W896dqkizYk6w.mp4', 'movie', 1, 26),
(40, 360, 'https://duantotnghiep.s3.ap-southeast-2.amazonaws.com/videos/kMtUnRd11C0kC2n3Ua7zkRMfuCxqpcryVrCHM8OK.mp4', 'movie', 0, 27),
(41, 720, 'https://duantotnghiep.s3.ap-southeast-2.amazonaws.com/videos/IjHay0fUd3sIJmbSZ9lxDqtGYEh2wmuGSgS72YP4.mp4', 'movie', 0, 27),
(43, 720, 'https://duantotnghiep.s3.ap-southeast-2.amazonaws.com/videos/te1QKUAZIRRFkwBTsPdL7v6aPsBeiGMCKxz0Bq2j.mp4', 'movie', 0, 28),
(46, 360, 'https://duantotnghiep.s3.ap-southeast-2.amazonaws.com/videos/7hSGWFFeughY1EmEAG1Hb5jKgXlj4IfN1ENlKAkl.mp4', 'movie', 0, 30),
(47, 720, 'https://duantotnghiep.s3.ap-southeast-2.amazonaws.com/videos/MemApNHk0cJfbYzK7mhDHGgGgPI83BY62CNj3lm3.mp4', 'movie', 0, 30),
(48, 1080, 'https://duantotnghiep.s3.ap-southeast-2.amazonaws.com/videos/g0KlExosjgT8MKRAwiXbEWfZ2HyCNgGCdU3aDhhh.mp4', 'movie', 1, 30);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role` varchar(50) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `premium` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `role`, `email_verified_at`, `password`, `status`, `premium`, `remember_token`, `created_at`, `updated_at`, `isDeleted`) VALUES
(1, 'Khang', 'vovankhang11102004@gmail.com', '/images/users/user.jpg', 'admin', NULL, '12345678', 0, 1, NULL, '2024-10-25 13:40:54', '2024-11-08 02:36:22', 0),
(3, 'Hehe', 'adminhehe@gmail.com', '/images/users/user2.webp', 'admin', NULL, '12345678', 0, 1, NULL, '2024-10-25 13:40:54', NULL, 0),
(10, 'Võ Văn Khang', 'khanglaiedit@gmail.com', '/images/users/user.jpg', 'user', '2024-11-07 23:19:22', '$2y$12$mQNYmB1B4Q0kxfe5KtAOlu3VT9POkQ5cu8EoCklsTOUIqCO9W79jm', 0, 0, NULL, '2024-11-07 23:17:21', '2024-11-07 23:17:21', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `watch_laters`
--

CREATE TABLE `watch_laters` (
  `id` int(11) NOT NULL,
  `id_movie` int(11) NOT NULL,
  `id_user` bigint(11) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `watch_laters`
--

INSERT INTO `watch_laters` (`id`, `id_movie`, `id_user`, `created_at`) VALUES
(72, 19, 1, '2024-11-05 14:48:05'),
(73, 21, 1, '2024-11-06 07:22:23'),
(74, 20, 1, '2024-11-06 07:29:00'),
(75, 26, 1, '2024-11-06 07:29:24');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_movie` (`id_movie`),
  ADD KEY `comment_user` (`id_user`);

--
-- Chỉ mục cho bảng `comment_filters`
--
ALTER TABLE `comment_filters`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `episode_movie` (`id_movie`);

--
-- Chỉ mục cho bảng `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_movie` (`id_movie`),
  ADD KEY `history_user` (`id_user`);

--
-- Chỉ mục cho bảng `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `like_movie` (`id_movie`),
  ADD KEY `like_user` (`id_user`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_category` (`id_category`);

--
-- Chỉ mục cho bảng `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `receive_user` (`id_receive_user`),
  ADD KEY `send_user` (`id_send_user`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_sub` (`id_sub`),
  ADD KEY `payment_user` (`id_user`);

--
-- Chỉ mục cho bảng `reply_comments`
--
ALTER TABLE `reply_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reply_comment_comment` (`id_comment`),
  ADD KEY `reply_comment_movie` (`id_movie`),
  ADD KEY `reply_comment_user` (`id_user`),
  ADD KEY `reply_comment_user_reply` (`id_user_reply`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slide_movie` (`id_movie`);

--
-- Chỉ mục cho bảng `subcriptions`
--
ALTER TABLE `subcriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcription_user` (`id_user`),
  ADD KEY `subcription_plan` (`id_plan`);

--
-- Chỉ mục cho bảng `subscription_plans`
--
ALTER TABLE `subscription_plans`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `urls`
--
ALTER TABLE `urls`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `watch_laters`
--
ALTER TABLE `watch_laters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `watch_later_movie` (`id_movie`),
  ADD KEY `watch_later_user` (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `comment_filters`
--
ALTER TABLE `comment_filters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `episodes`
--
ALTER TABLE `episodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `histories`
--
ALTER TABLE `histories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=339;

--
-- AUTO_INCREMENT cho bảng `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `reply_comments`
--
ALTER TABLE `reply_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `subcriptions`
--
ALTER TABLE `subcriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `subscription_plans`
--
ALTER TABLE `subscription_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `urls`
--
ALTER TABLE `urls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `watch_laters`
--
ALTER TABLE `watch_laters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comment_movie` FOREIGN KEY (`id_movie`) REFERENCES `movies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comment_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `episodes`
--
ALTER TABLE `episodes`
  ADD CONSTRAINT `episode_movie` FOREIGN KEY (`id_movie`) REFERENCES `movies` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `histories`
--
ALTER TABLE `histories`
  ADD CONSTRAINT `history_movie` FOREIGN KEY (`id_movie`) REFERENCES `movies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `history_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `like_movie` FOREIGN KEY (`id_movie`) REFERENCES `movies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `like_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movie_category` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `receive_user` FOREIGN KEY (`id_receive_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `send_user` FOREIGN KEY (`id_send_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payment_sub` FOREIGN KEY (`id_sub`) REFERENCES `subcriptions` (`id`),
  ADD CONSTRAINT `payment_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `reply_comments`
--
ALTER TABLE `reply_comments`
  ADD CONSTRAINT `reply_comment_comment` FOREIGN KEY (`id_comment`) REFERENCES `comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reply_comment_movie` FOREIGN KEY (`id_movie`) REFERENCES `movies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reply_comment_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reply_comment_user_reply` FOREIGN KEY (`id_user_reply`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `slides`
--
ALTER TABLE `slides`
  ADD CONSTRAINT `slide_movie` FOREIGN KEY (`id_movie`) REFERENCES `movies` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `subcriptions`
--
ALTER TABLE `subcriptions`
  ADD CONSTRAINT `subcription_plan` FOREIGN KEY (`id_plan`) REFERENCES `subscription_plans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subcription_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `watch_laters`
--
ALTER TABLE `watch_laters`
  ADD CONSTRAINT `watch_later_movie` FOREIGN KEY (`id_movie`) REFERENCES `movies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `watch_later_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
