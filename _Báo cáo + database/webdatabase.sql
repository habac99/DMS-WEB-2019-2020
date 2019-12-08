-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 08, 2019 lúc 06:01 AM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webdatabase`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `bill_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `order_date` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipped_date` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_payment` double DEFAULT NULL,
  `shipTo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isConfirm` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`bill_id`, `customer_id`, `order_date`, `email`, `shipped_date`, `status`, `total_payment`, `shipTo`, `isConfirm`, `created_at`, `updated_at`) VALUES
(18, 64, '2022-11-19', 'abc12334@gmail.com', NULL, NULL, 150, 'Brooklyn, NY', 1, '2019-11-22 06:37:36', '2019-11-22 12:07:21'),
(19, 57, '2022-11-19', 'eleanore.hettinger@example.org', NULL, NULL, 65, '40259 Madison Islands Apt. 327West Orion, PA 59355', 1, '2019-11-22 07:17:54', '2019-11-25 06:15:54'),
(20, NULL, '2022-11-19', NULL, NULL, NULL, 65, NULL, 1, '2019-11-22 07:22:32', '2019-11-25 06:17:17'),
(21, 57, '2022-11-19', 'eleanore.hettinger@example.org', NULL, NULL, 100, '40259 Madison Islands Apt. 327West Orion, PA 59355', 1, '2019-11-22 09:03:34', '2019-11-25 09:49:36'),
(22, 59, '2022-11-19', 'oberbrunner.orrin@example.net', NULL, NULL, 211, '70195 Crist Rue Apt. 380West Lorenza, NC 45364-1035', 1, '2019-11-22 12:01:24', '2019-11-25 09:49:37'),
(23, 57, '2025-11-19', 'eleanore.hettinger@example.org', NULL, NULL, 50, '40259 Madison Islands Apt. 327West Orion, PA 59355', 1, '2019-11-25 08:10:21', '2019-11-25 09:49:39'),
(24, 57, '2025-11-19', 'eleanore.hettinger@example.org', NULL, NULL, 65, '40259 Madison Islands Apt. 327West Orion, PA 59355', 1, '2019-11-25 08:21:31', '2019-11-25 09:49:33'),
(25, 57, '2025-11-19', 'eleanore.hettinger@example.org', NULL, NULL, 50, '40259 Madison Islands Apt. 327West Orion, PA 59355', 0, '2019-11-25 09:52:15', '2019-11-25 09:52:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_details`
--

CREATE TABLE `bill_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `bill_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `more_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_details`
--

INSERT INTO `bill_details` (`id`, `bill_id`, `product_id`, `more_info`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(12, 18, 15, 'brown', 1, 100, '2019-11-22 06:37:36', '2019-11-22 06:37:36'),
(13, 18, 1, 'blue', 1, 50, '2019-11-22 06:37:36', '2019-11-22 06:37:36'),
(14, 19, 14, 'Grey', 1, 56, '2019-11-22 07:17:55', '2019-11-22 07:17:55'),
(15, 19, 1, 'black', 1, 50, '2019-11-22 07:17:55', '2019-11-22 07:17:55'),
(16, 20, 6, 'blue', 1, 69, '2019-11-22 07:22:32', '2019-11-22 07:22:32'),
(17, 21, 3, 'blue,', 1, 50, '2019-11-22 09:03:34', '2019-11-22 09:03:34'),
(18, 21, 3, 'blue,XL', 1, 50, '2019-11-22 09:03:35', '2019-11-22 09:03:35'),
(19, 22, 5, 'blue,XL', 1, 99, '2019-11-22 12:01:24', '2019-11-22 12:01:24'),
(20, 22, 14, 'Grey,XS', 2, 56, '2019-11-22 12:01:25', '2019-11-22 12:01:25'),
(21, 23, 1, 'black,XL', 1, 50, '2019-11-25 08:10:22', '2019-11-25 08:10:22'),
(22, 24, 2, 'grey,L', 1, 65, '2019-11-25 08:21:31', '2019-11-25 08:21:31'),
(23, 25, 17, 'pink,XXL', 1, 50, '2019-11-25 09:52:15', '2019-11-25 09:52:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`customer_id`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `address`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '晃', '藤本', 'yasuhiro16@example.org', '$2y$10$DDIs1IVgutSPiHTj6QXfr.CocDjfxedUh1Ca8lb7a9mK/Si4THmRG', '089-991-6684', '9112343  大阪府青田市西区喜嶋町山本2-7-1 コーポ廣川104号', 0, NULL, '2006-11-19 09:26:01', '2006-11-19 09:26:01'),
(2, '淳', '中村', 'hkato@example.net', '$2y$10$Z/kcYRTw7SOHJ0pHKBPSDeadlEM5eJH5Ui7o27zpflq2iVf6YND82', '0180-46-0309', '5904665  埼玉県加納市中央区宇野町小林10-3-1', 0, NULL, '2006-11-19 09:26:01', '2006-11-19 09:26:01'),
(3, '桃子', '松本', 'naoto57@example.com', '$2y$10$v9dTVmmg1W3N.qdIH492c.LkzGUUpuCRVSpke84feJRf1PbeSNG62', '0220-407-805', '8622325  静岡県田辺市中央区近藤町喜嶋9-3-4', 0, NULL, '2006-11-19 09:26:01', '2006-11-19 09:26:01'),
(4, '七夏', '井高', 'kana.wakamatsu@example.net', '$2y$10$xVMgz3N9m6bh7DsJsgh94OB2.PxsYSGuwr3.E.yVOJH4gjC7Hd4vm', '00099-9-3115', '9652568  島根県青山市北区斉藤町喜嶋2-2-2 ハイツ近藤106号', 0, NULL, '2006-11-19 09:26:01', '2006-11-19 09:26:01'),
(5, '翼', '山口', 'yasuhiro.tanaka@example.org', '$2y$10$eVwgPN055KCg7tMPrxhekuRcZp7mmWTLbrq3xvjl.z4DiEGvF8N2a', '05-1516-7238', '8864938  埼玉県高橋市東区山本町渚1-5-8', 0, NULL, '2006-11-19 09:26:01', '2006-11-19 09:26:01'),
(6, '香織', '喜嶋', 'yuta.miyake@example.net', '$2y$10$4lHpl79jh.GXjZ7dyefaTegaaTl79pvmX4AJkX4cscI8Vijz6y88m', '080-7999-1849', '2983691  佐賀県山本市西区井高町中島8-2-5 ハイツ浜田110号', 0, NULL, '2006-11-19 09:26:02', '2006-11-19 09:26:02'),
(7, '淳', '藤本', 'miki19@example.net', '$2y$10$OBKtUVc8dpFn5YtBq2UWwevg1zlXB55uaVqBxEodnyMsq49y5r.Ae', '0098-98-5142', '7052431  福井県大垣市東区吉田町小林7-9-8 ハイツ青山110号', 0, NULL, '2006-11-19 09:26:02', '2006-11-19 09:26:02'),
(8, '里佳', '吉田', 'tsubasa.ekoda@example.org', '$2y$10$dyWecfGdW0SJCGkI/CdQeOMiblgJfzISL1pbtD4fMuvTZcTF5JdjW', '090-9853-2202', '7391479  徳島県浜田市北区工藤町斉藤3-8-8 ハイツ加藤104号', 0, NULL, '2006-11-19 09:26:02', '2006-11-19 09:26:02'),
(9, '七夏', '青田', 'hanako58@example.com', '$2y$10$tSHHWfI9tAFH2dDe8ewVHuw7eFcAmXEWwxs0bkwiGreJ1dg7fzGbu', '08196-6-5262', '2763374  神奈川県原田市北区若松町石田4-3-10', 0, NULL, '2006-11-19 09:26:02', '2006-11-19 09:26:02'),
(10, '結衣', '井高', 'kobayashi.yosuke@example.net', '$2y$10$ghCSbjzo8hvipmqdHfogKuZ6J7kW0pYNVLN/CsnePyCLeRCv1CBW.', '082-813-7806', '8762819  東京都山本市中央区江古田町松本6-7-5', 0, NULL, '2006-11-19 09:26:03', '2006-11-19 09:26:03'),
(11, '明美', '原田', 'hideki.murayama@example.net', '$2y$10$zHetXQF6BwN4SJbGbybRL.8Q22du3gtugzMb30Jp4oYPPKDkw2Fyy', '090-0208-0669', '4405482  徳島県小林市中央区藤本町野村3-4-3 ハイツ田辺103号', 0, NULL, '2006-11-19 09:26:03', '2006-11-19 09:26:03'),
(12, '知実', '野村', 'ekoda.nanami@example.org', '$2y$10$eYZLaF5rMUIJyWQUWMh/m.IYab72.MSBL5Wb79bF50/qMnU3dmH0e', '080-5842-2187', '1713373  富山県吉田市東区鈴木町山田4-3-2', 0, NULL, '2006-11-19 09:26:03', '2006-11-19 09:26:03'),
(13, '裕太', '笹田', 'pkobayashi@example.org', '$2y$10$BzCxaNZQxVvH3FLYVyL67uLvUM/JDgtWpxT0bQssfAyEV.evRDXoe', '06-5505-1668', '2258393  山梨県浜田市東区井上町原田8-3-10', 0, NULL, '2006-11-19 09:26:03', '2006-11-19 09:26:03'),
(14, '聡太郎', '坂本', 'mikako.yamada@example.org', '$2y$10$QubgSmDtNLXEXqudZdJgd.y4AHfM571bSkREKkfxzuZa9ciOPjFKy', '009-182-3518', '7762427  奈良県松本市南区山口町渡辺3-8-4', 0, NULL, '2006-11-19 09:26:03', '2006-11-19 09:26:03'),
(15, '結衣', '三宅', 'tomoya.koizumi@example.org', '$2y$10$fHejIKgu1iouvixjs4yFzOUGj1XTh2GoqJb4hE9q6kavgAB1K1NPu', '090-1782-0504', '1013794  北海道鈴木市中央区青山町宇野1-2-6', 0, NULL, '2006-11-19 09:26:04', '2006-11-19 09:26:04'),
(16, '拓真', '中島', 'yuki84@example.net', '$2y$10$RrxuBCjrkWgAPn1aA40zVuMpF2uMh/6iO39tYZIlJbgOAIbdp1Rte', '034-075-9054', '9643700  岩手県小泉市中央区宮沢町渚7-7-4', 0, NULL, '2006-11-19 09:26:04', '2006-11-19 09:26:04'),
(17, 'さゆり', '小林', 'tomoya32@example.com', '$2y$10$Wb4vUxca2joDjEalAyJXtOVHPCTjN9QntEQzFsadcqqCEV8lCheYy', '01574-3-3283', '7935654  岡山県伊藤市西区津田町井上10-2-7', 0, NULL, '2006-11-19 09:26:04', '2006-11-19 09:26:04'),
(18, '零', '杉山', 'zishida@example.org', '$2y$10$zGQwxWU0kDkmakfsi6uL6.zV6KdIrZriZldz1kKrCJPRT1WqcvVXi', '00800-9-9692', '6566008  群馬県西之園市北区大垣町佐藤2-3-9', 0, NULL, '2006-11-19 09:26:05', '2006-11-19 09:26:05'),
(19, '英樹', '佐藤', 'minoru85@example.net', '$2y$10$SBjYZoqjen5drgFKxGdDVuFeUNBgsA/vHqGqmrI5CKm6a8SDRjdxG', '0071-82-8205', '7182855  京都府山田市南区渡辺町井高9-8-9', 0, NULL, '2006-11-19 09:26:05', '2006-11-19 09:26:05'),
(20, '七夏', '西之園', 'yoshimoto.haruka@example.org', '$2y$10$zIOQ.PXszlycdMGLdPSXHeRtDW4SmJbXv5sgtRodI2HmObqWdCBfS', '0590-891-540', '1096477  群馬県藤本市南区江古田町青山3-4-3 コーポ野村102号', 0, NULL, '2006-11-19 09:26:05', '2006-11-19 09:26:05'),
(21, 'Elaina', 'Mohr', 'mante.heber@example.org', '$2y$10$XDP7ZduYw1jzQfGkhO4DPu/w4dHiEOKQsf9YGkSxahj/5SB1rHj0G', '+17859446494', '914 Parker Wall\nNaderfurt, MN 16159', 0, NULL, '2006-11-19 09:28:08', '2006-11-19 09:28:08'),
(22, 'Hugh', 'Kunde', 'ldamore@example.org', '$2y$10$.9rgZCKPsP58VG1Tz3JWN.lJiViBb0/6.JgegOMxHazSRX5LbuNO.', '473-206-1552', '74303 McClure Mountains Suite 698\nPort Bethelhaven, MD 03692', 0, NULL, '2006-11-19 09:28:08', '2006-11-19 09:28:08'),
(23, 'Anabelle', 'Walker', 'bsauer@example.org', '$2y$10$xwkhCFg4sqU5WWN57MB5CuAlNBnWsX1CYXTEgOEmDbaYMST.Ahquq', '884.219.4211 x1676', '169 Wintheiser Parkway\nLake Kasey, IN 29661', 0, NULL, '2006-11-19 09:28:09', '2006-11-19 09:28:09'),
(24, 'Randy', 'Volkman', 'glover.arturo@example.net', '$2y$10$Fz2.Sf2veFME1HrijxrywOsrzoYQLiM2HsHaAWgaX9EQzoyjAcX86', '(634) 488-3139 x047', '351 Goodwin Pass\nToyfurt, SD 67721', 0, NULL, '2006-11-19 09:28:09', '2006-11-19 09:28:09'),
(25, 'Selmer', 'Kshlerin', 'lbecker@example.net', '$2y$10$LRU5cg3NExp808equXQ0MORC70nVJkuh.S7t4zILxmKApoEHaJ/Oi', '+15313751626', '3450 Dibbert Motorway\nNew Ewald, WV 10249', 0, NULL, '2006-11-19 09:28:09', '2006-11-19 09:28:09'),
(26, 'Eldora', 'Hermann', 'santiago.emard@example.org', '$2y$10$EcJavFxTxdsCVy4tNb0Zy.FSqHgcOdPMVQbNOhnP5SdvmmyIU3e.C', '1-886-762-2483', '7774 Eloisa Cape\nPort Leomouth, TN 03649', 0, NULL, '2006-11-19 09:28:09', '2006-11-19 09:28:09'),
(27, 'Bernardo', 'Bashirian', 'jschinner@example.com', '$2y$10$ABkeoz2ZYIwyn..lv5NMi.2YYAvBOSRsjwIezDAHqvl3b3YZJEwFK', '282-202-4481 x8706', '4261 Nolan Cliffs\nWaterschester, IL 79237-2695', 0, NULL, '2006-11-19 09:28:10', '2006-11-19 09:28:10'),
(28, 'Billie', 'Terry', 'ruthie.leannon@example.com', '$2y$10$VSxcSSfGBysNmWdjgvQOw.mdtYYH4W2DGugHG70qd7soUcMIc.Mpu', '+14456237625', '6430 Kevin Lake Suite 996\nEast Destinton, UT 18963-1254', 0, NULL, '2006-11-19 09:28:10', '2006-11-19 09:28:10'),
(29, 'Kobe', 'Ledner', 'alba.bayer@example.com', '$2y$10$uB6edWBtiL8arvoETK50puk3zNBelY1h7.vPsFc9pf2LM/IpPuQXi', '1-745-424-1553 x6247', '8075 Aiyana Tunnel\nNew Donview, MT 77415', 0, NULL, '2006-11-19 09:28:10', '2006-11-19 09:28:10'),
(30, 'Osvaldo', 'Runolfsdottir', 'jenkins.carolanne@example.com', '$2y$10$8rZuMWs1j1107qZK9zqvN.BUW1VxRU4Qf2bAqRe.6Aob0nDEDquIW', '1-895-823-5379 x559', '13529 Macejkovic Ports Apt. 221\nNorth Sonnyview, IL 87201', 0, NULL, '2006-11-19 09:28:10', '2006-11-19 09:28:10'),
(31, 'Johnpaul', 'Friesen', 'madilyn06@example.com', '$2y$10$9X6yL4sbfszSZs37f5U8DOp95xfSZtZjhk2HGYE5CtMCN7fSKo7cy', '+1-757-704-6677', '280 Marquardt Garden Apt. 895\nEthelbury, DC 07739-1120', 0, NULL, '2006-11-19 09:28:11', '2006-11-19 09:28:11'),
(32, 'Terence', 'Jerde', 'lebsack.abigayle@example.net', '$2y$10$UO2tmabuMqNbO6KPAuLAme7fuM28kMYlyxw.hp5R3uFj/dHHqBsZO', '1-365-666-7773 x68578', '54607 Lueilwitz Terrace Suite 928\nLake Delphine, MN 90406', 0, NULL, '2006-11-19 09:28:11', '2006-11-19 09:28:11'),
(33, 'Abbie', 'Hettinger', 'kiehn.rodolfo@example.net', '$2y$10$JnrGO5sL7Uq4OHOaj5wkHuQIBkZieDP7un3w0zNrkKimYXrkCPoXG', '1-916-594-5233 x317', '34143 Jordy Forest Suite 829\nNorth Lisandroview, NV 83880', 0, NULL, '2006-11-19 09:28:11', '2006-11-19 09:28:11'),
(34, 'Tressa', 'Walsh', 'swift.brandi@example.com', '$2y$10$tJInMvMmpr4wVVL.aQUlW.MVyzirxIHpS8V8.FUIxPozhG6/Iyt5y', '521.558.0672 x506', '99878 Hubert Squares Apt. 118\nNorth Harrison, TX 80772-4489', 0, NULL, '2006-11-19 09:28:11', '2006-11-19 09:28:11'),
(35, 'Garrett', 'Reichert', 'guido.terry@example.org', '$2y$10$t1XVVIJXrC0eUo4av.pE1.EA9FWhEEA4vyAquQZhvxTKmoRCEBkQK', '(931) 496-2722', '21098 Kuhlman Station Apt. 255\nEast Cora, FL 20566-1005', 0, NULL, '2006-11-19 09:28:11', '2006-11-19 09:28:11'),
(36, 'Libby', 'Rice', 'torphy.tito@example.org', '$2y$10$3IE5uJUyLk4DCPLoMBBnnusB9YJtmKLQJW/SAS9ViXn9UanDaoh6y', '1-847-724-6868', '7380 Nya Motorway\nBrycenfurt, OK 34669-4102', 0, NULL, '2006-11-19 09:28:12', '2006-11-19 09:28:12'),
(37, 'Elizabeth', 'Monahan', 'jakubowski.tamara@example.net', '$2y$10$Y6Aq8d/U4xYxCoqnaz/gCe7qm34L.uRKtVCzNhvsw5xtvqmZaptiC', '1-657-448-8835 x130', '9646 Damaris Creek\nTroyberg, TN 80369', 0, NULL, '2006-11-19 09:28:12', '2006-11-19 09:28:12'),
(38, 'Sasha', 'Rolfson', 'hettie.hermiston@example.net', '$2y$10$FJELOZ0vg/OQ72rjiSSWBezlJmzCNTSaJ2DgqGKwR2AutPdK47d7i', '347.889.7769', '24704 Camren Key Suite 758\nEast Sageport, PA 99787', 0, NULL, '2006-11-19 09:28:12', '2006-11-19 09:28:12'),
(39, 'Cassidy', 'Considine', 'mazie.oconnell@example.org', '$2y$10$TrqTI0UpSjvoWPMVayndxOZOLLpHs2JPgxZbxBIAE8WwMDGBYkYVG', '+1.808.250.1343', '6384 Della Harbor Apt. 497\nPourosview, IN 49983', 0, NULL, '2006-11-19 09:28:12', '2006-11-19 09:28:12'),
(40, 'Pearline', 'Wolf', 'nmcdermott@example.net', '$2y$10$J2gI2u0.c72snD8SeppdMuWM8ZtmXjnHtOo/Kxxv71Ms.U5EvHxqO', '435.242.3352 x42437', '3270 Verner Vista Suite 538\nPort Rollinshire, MI 01114', 0, NULL, '2006-11-19 09:28:13', '2006-11-19 09:28:13'),
(41, 'Wendell', 'Rutherford', 'friesen.tod@example.com', '$2y$10$tbdHHw6n4USCz4pBQLrITOgowVwBYwD.s1/s9yzv6O8JOl.jOfSwS', '441.259.0859', '9405 Buckridge Loop Apt. 729\nSouth Arielletown, MN 12728', 0, NULL, '2006-11-19 09:50:57', '2006-11-19 09:50:57'),
(42, 'Holly', 'Mann', 'runolfsdottir.boris@example.net', '$2y$10$HxP46pYvRRxMT8hp2Urj4O.TzoqfAQCvCN6lFC.Dj6.fpG1hDE/jq', '262-418-5781 x20316', '2430 Legros Cape\nNorth Alberta, MA 25376', 0, NULL, '2006-11-19 09:50:57', '2006-11-19 09:50:57'),
(43, 'Chauncey', 'Kilback', 'wiegand.paxton@example.net', '$2y$10$f80.ILux9Cax74h5/GuzeOYvijeewwVRRXU8GCDH8DVcNXRwARZNq', '(502) 886-0644', '288 Kristian Square Apt. 388\nLake Patriciaville, ND 32918', 0, NULL, '2006-11-19 09:50:57', '2006-11-19 09:50:57'),
(44, 'Annalise', 'Breitenberg', 'bahringer.juanita@example.com', '$2y$10$k6uqo/6mQzP5DAzi8qbPBeOMNsXGmef9gd/1Tl5woqGqkpBkXODTG', '(896) 301-7702', '72406 Wuckert Mews\nWest Bobbie, AR 48798-7855', 0, NULL, '2006-11-19 09:50:58', '2006-11-19 09:50:58'),
(45, 'Ora', 'Koepp', 'alessandra.champlin@example.org', '$2y$10$ejX11NRVss80RqZzQsmvrOf4eRGkvYjgJKXVW1tXnVyXfu3SsnaSG', '(275) 897-5159 x475', '5338 Ozella Trail\nMadisynmouth, ME 89787', 0, NULL, '2006-11-19 09:50:58', '2006-11-19 09:50:58'),
(46, 'Mckayla', 'Ledner', 'koch.jalon@example.net', '$2y$10$uAeO23FcK8T9xJx24xiZNut/IMTpVZQ0AxfBB.o0NU6mCm3atQaQW', '478.539.4628', '4647 Carmine Gateway Apt. 430\nNorth Thorafort, WV 69578-4264', 0, NULL, '2006-11-19 09:50:58', '2006-11-19 09:50:58'),
(47, 'Francesco', 'Blanda', 'royce63@example.com', '$2y$10$Ily8OCnP8W8BpIKjsnjPZORWWCjeOKyzXzfEDyQMAQidKMtnuSCZa', '1-891-500-4612 x4312', '4840 Terry Motorway Apt. 371\nEast Demond, CO 66523-6847', 0, NULL, '2006-11-19 09:50:59', '2006-11-19 09:50:59'),
(48, 'Michale', 'Abbott', 'chase.hodkiewicz@example.org', '$2y$10$AtAEdhkw/HiRhbcTdOVcCe/ZCU.8wQhjzcuSCpq36VS1ueQZje65O', '517.714.6590 x231', '114 Willy Canyon Suite 399\nJohntown, NM 93979', 0, NULL, '2006-11-19 09:50:59', '2006-11-19 09:50:59'),
(49, 'Crystel', 'Cartwright', 'araceli26@example.com', '$2y$10$iM1vj12r8NnzsnZ9vG/GUe2JxX.C6vSLB5Qd07ZbmnZdywAcVKHXS', '1-403-408-8270 x6249', '164 Botsford Curve\nAlvenaland, KY 46734', 0, NULL, '2006-11-19 09:50:59', '2006-11-19 09:50:59'),
(50, 'Arthur', 'Stamm', 'deshaun23@example.net', '$2y$10$0uPuW9jRnUvDsclTLSXDHu/2IrEuiOX7n83NXgmdhUTm3nADNJouG', '390.532.3448 x9459', '9268 Feil Ridge Suite 162\nPort Eileen, OK 38204-1206', 0, NULL, '2006-11-19 09:50:59', '2006-11-19 09:50:59'),
(51, 'Alan', 'Runolfsson', 'owaelchi@example.org', '$2y$10$4BFnQvmmKGUc3u/OKG/Y0.6RPdOVMhfEQy2CX3p3dnU3hzWw6rW1q', '206-429-0032 x312', '44371 Ali Lock\nEast Merritt, IN 80182', 0, NULL, '2006-11-19 09:50:59', '2006-11-19 09:50:59'),
(52, 'Sadye', 'Beahan', 'hermann.johnnie@example.com', '$2y$10$k7PQ69zBOO2Y6z3m5ELVbuErUXzzt91snjxUhlPzQGNu4xd79XNpO', '+1.961.930.1975', '70315 Kilback Vista Apt. 872\nSouth Orion, OR 41498-7634', 0, NULL, '2006-11-19 09:51:00', '2006-11-19 09:51:00'),
(53, 'Aurelio', 'Casper', 'brekke.russ@example.net', '$2y$10$eiqFHsSV6MBfAsKf.2UQxOVir0Bqreg4qxlKHtZJQFf9EZN17LlrC', '635.433.0586 x00457', '433 Bethany Course\nNew Natalieburgh, SD 75066-5718', 0, NULL, '2006-11-19 09:51:00', '2006-11-19 09:51:00'),
(54, 'Evalyn', 'Walsh', 'schmitt.marge@example.net', '$2y$10$C55K17VXL0sbZmL5n9RgCeG2xacvf7kVJAFVYsw9/v6ZmK3qJehYi', '(657) 221-5049', '715 Kacey Crescent\nSouth Mckayla, CT 34067-8552', 0, NULL, '2006-11-19 09:51:00', '2006-11-19 09:51:00'),
(55, 'Elbert', 'Thiel', 'harry95@example.com', '$2y$10$1glRJJO6OtcjNLfxtHNMw.SkXAzuSMof75YivLY42NwQVe6gy87O.', '1-214-463-3356', '2678 Beatty Avenue Suite 889\nFarrellton, MA 74491', 0, NULL, '2006-11-19 09:51:01', '2006-11-19 09:51:01'),
(56, 'Fred', 'Green', 'hreinger@example.com', '$2y$10$7OZFfBTiXLC3tNg2SpVKAuR/MqsO.DddnnO68cmL.7X/XHaqh1TMC', '310-777-7904', '94620 Vance Mount Suite 026\nMoenberg, NC 20936-8757', 0, NULL, '2006-11-19 09:51:01', '2006-11-19 09:51:01'),
(57, 'Moshe', 'Weber', 'eleanore.hettinger@example.org', '$2y$10$FYL34VVc8DnBOiKIFsLYl.X5EgOfDadLUU1IwtJL5zMLpucBSjtk6', '(204) 235-1495 x1615', '40259 Madison Islands Apt. 327\nWest Orion, PA 59355', 0, 'p83vx0T8QO1r6qi3HW81aqdoo7K3E1fSWGta8aylz8pUvoEByZjmAotcV1lY', '2006-11-19 09:51:01', '2006-11-19 09:51:01'),
(58, 'Rollin', 'Howe', 'josh62@example.com', '$2y$10$aqFkqHwlf5C7vC0tlyh4JevQIFPMtM87lXmDBox9pbbrS2lbJ60va', '604.431.0189', '6736 Ullrich Ville Apt. 025\nLake Aricmouth, WI 52913', 0, NULL, '2006-11-19 09:51:01', '2006-11-19 09:51:01'),
(59, 'Roel', 'Jenkins', 'oberbrunner.orrin@example.net', '$2y$10$na6YXSv9FuBcB/tRKQN0FuuE.urq1pf.FGDtTfVtiV8wSPNrRNZeC', '531-212-4236 x72370', '70195 Crist Rue Apt. 380\nWest Lorenza, NC 45364-1035', 0, 'tzSS72MeeoAXww5My7cCxIsJT7vv3daLId4V4u23kwB1nVvHQHtL9ECQLZvC', '2006-11-19 09:51:01', '2006-11-19 09:51:01'),
(60, 'Gracie', 'Renner', 'mante.margot@example.com', '$2y$10$xFXyK0KgAF3RdHN7v7OT4OiujoOQZf7gUdvcOuPlGu9JooNvsARMu', '1-651-753-1847', '4737 Stan Drive Apt. 836\nAbetown, MO 19368', 0, NULL, '2006-11-19 09:51:02', '2006-11-19 09:51:02'),
(61, 'bac', 'ha', 'abacgh@gmail.com', '$2y$10$ykppzE9jX3poYAsjxOM6x.uPJetzqQ2gzVyeKddoQj6e8MW82Vk02', NULL, NULL, 0, NULL, '2019-11-12 09:42:50', '2019-11-12 09:42:50'),
(62, 'bac', 'ha', 'abacgh123@gmail.com', '$2y$10$G0HvlXOCuzqTQJXFQr9YB.6b710BdayPsMFptFgv6FGeJaQuzFDHy', NULL, NULL, 0, NULL, '2019-11-12 09:43:54', '2019-11-12 09:43:54'),
(63, 'bac', 'ha', 'abc123@gmail.com', '$2y$10$MpkDHNYJ/S5TW3ph/pT3qOEgVsxAQ6gByZ5RnLqaxu4YhYGn872Ne', NULL, NULL, 0, NULL, '2019-11-12 19:37:04', '2019-11-12 19:37:04'),
(64, 'Nick', 'Fury', 'abc12334@gmail.com', '$2y$10$SFXE.ZAp0zkgRLqL/MXrJedOnWWlwIbUeBVZfGyuPn25jpsuKFnVy', NULL, NULL, 0, 'GwPZJgpAZrAJzuyqR31fcXukeX1tZTw2N73F4IdeOGnuce5LsY2LnAeVnyEL', '2019-11-12 19:40:24', '2019-11-12 19:40:24'),
(65, 'frank', 'castle', 'ggggg@gmail.com', '$2y$10$QvkR8xvVgoIewj3PWQefzu8dHtGRtjU9xW6joitexhMkfeQjpFdnC', NULL, NULL, 0, 'FVF7qbdVJIbUFLShDVqjGG65Ep9A91ZOvLNZu9EvwJa2RyE5LrjqnPxyVaFs', '2019-11-12 19:47:38', '2019-11-12 19:47:38'),
(66, 'dgf', 'jhfbh', 'hasg@fjgnk.com', '$2y$10$AiFr./xH/YMjyFQGK4uM3u/KANJDTo9AD1s6BL7Fgntb1/uQSpdFC', NULL, NULL, 0, 'eEqZ0Hwxg52RKhFRZ5zBIlCp0OOTVYLYuhDFlnt8kpxwTHCiqg5zAoUHCdFz', '2019-11-13 00:38:46', '2019-11-13 00:38:46'),
(67, 'ha', 'bac', 'admin1@gmail.com', '$2y$10$eo4XzNOmvzKgT97IZbEMteu9ckWyvMPC7QmM6CQrWvUWS/8z.EcSK', '0123456789', 'Queens, NY', 1, 'FKDa2AttCsX9XaEBNjDTo0SMWAPL3fgVg0r32WotKQle3nLdO4qvlOCAHY3O', '2013-11-19 07:53:39', '2013-11-19 07:53:39'),
(68, 'Tony', 'Stark', 'admin2@gmail.com', '$2y$10$gbVSBLjRfuBE7dNPayhFveFoK9XdVSUPeYdzqpD7LzVHIGk/0bEUS', '0123456789', 'Queens, NY', 1, NULL, '2013-11-19 07:53:39', '2013-11-19 07:53:39'),
(69, 'ahag', 'sshjhjs', 'habac124@gmail.com', '$2y$10$XZ.2esHrlrhLyuF0EB7skO0UELD2mab4SQ6ayZ90GPz7.9/mKscLi', NULL, NULL, 0, 'vvhjIxhwGafBkhqpLAIE5fSmJADkAsaiWcTRa9Xayg8YU7IEmy8GxCq2yMKd', '2019-11-19 12:10:17', '2019-11-19 12:10:17'),
(70, 'hag', 'gahah', 'habac1267@gmail.com', '$2y$10$Cth.QKCBwWLIMDWHIv9NVeYYedJz5IaSavztoG0imZVpk54pniuKe', NULL, NULL, 0, 'oMwbANJfqni5YYfR8nWGJ5BMLdaETgtfIsprnIfyI8E1hZgEx2GFJdGOqhBA', '2019-11-19 12:34:19', '2019-11-19 12:34:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_10_28_145312_customer', 1),
(2, '2019_10_28_145538_product', 1),
(3, '2019_10_28_145602_product_type', 1),
(4, '2019_10_30_150536_bill_detail', 2),
(5, '2019_10_30_150609_bill', 2),
(6, '2019_11_25_155900_product_detail', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_price` double NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `type_name`, `description`, `unit_price`, `image`, `created_at`, `updated_at`) VALUES
(1, 'M1 DENIM', 'denim', 'a124', 50, 'storage/img/denim/m1-denim-black-1.jpg', '2002-11-19 09:15:52', '2019-11-25 06:04:40'),
(2, 'STRETCH DENIM', 'denim', 'this is description', 65, 'storage/img/denim/stretch-denim-1.jpg', '2002-11-19 09:15:52', '2002-11-19 09:15:52'),
(3, 'REPAIRED DENIM', 'denim', 'this is description', 50, 'storage/img/denim/m1-repaired-denim-blue-5.jpg', '2002-11-19 09:15:52', '2002-11-19 09:15:52'),
(4, 'X1 DENIM', 'denim', 'this is description', 89, 'storage/img/denim/x1-denim-blue-5.jpg', '2002-11-19 09:15:52', '2002-11-19 09:15:52'),
(5, 'M14 STRETCH DENIM', 'denim', 'this is description', 99, 'storage/img/denim/m14-stretch-denim-light-blu-1.jpg', '2002-11-19 09:15:52', '2002-11-19 09:15:52'),
(6, 'DENIM SHORTS', 'denim', 'this is description', 69, 'storage/img/denim/denim-shorts-1.jpg', '2002-11-19 09:15:52', '2002-11-19 09:15:52'),
(14, 'Cargos Short', 'cargos', 'this is description', 56, 'storage/img/cargos/cargo-shorts-1.jpg', '2019-11-20 10:00:48', '2019-11-20 10:00:48'),
(15, 'DRAWCORD SHORTS', 'shorts', 'this is descripton', 100, 'storage/img/shorts/cargo-drawcord-shorts-olive-1.jpg', '2019-11-20 10:03:55', '2019-11-20 10:03:55'),
(16, 'FLANEL JACKETS xxx2', 'outerwear', 'rtyyiopp', 66, 'storage/img/outerwear/flannel jacket-1.jpg', '2019-11-20 10:04:50', '2019-11-20 20:28:12'),
(17, 'TOP1', 'top', 'description', 50, 'storage/img/top/tech-fleece-jacket-1.jpg', '2019-11-25 09:50:45', '2019-11-25 09:50:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_details`
--

CREATE TABLE `product_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instock` int(11) NOT NULL DEFAULT 100,
  `sold` int(11) NOT NULL DEFAULT 0,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_details`
--

INSERT INTO `product_details` (`id`, `product_id`, `color`, `instock`, `sold`, `image1`, `image2`, `image3`, `image4`, `image5`, `created_at`, `updated_at`) VALUES
(1, 1, 'black', 199, 100, 'storage/img/denim/m1-denim-black-1.jpg', 'storage/img/denim/m1-denim-black-2.jpg', 'storage/img/denim/m1-denim-black-3.jpg', 'storage/img/denim/m1-denim-black-4.jpg', 'storage/img/denim/m1-denim-black-5.jpg', NULL, '2019-11-25 06:04:40'),
(3, 2, 'grey', 200, 45, 'storage/img/denim/stretch-denim-1.jpg', 'storage/img/denim/stretch-denim-2.jpg', 'storage/img/denim/stretch-denim-3.jpg', 'storage/img/denim/stretch-denim-4.jpg', 'storage/img/denim/stretch-denim-5.jpg', NULL, NULL),
(4, 1, 'blue', 200, 56, 'storage/img/denim/m1-denim-blue-1.jpg', 'storage/img/denim/m1-denim-blue-2.jpg', 'storage/img/denim/m1-denim-blue-3.jpg', 'storage/img/denim/m1-denim-blue-4.jpg', 'storage/img/denim/m1-denim-blue-5.jpg', NULL, NULL),
(6, 6, 'blue', 200, 69, 'storage/img/denim/denim-shorts-1.jpg', 'storage/img/denim/denim-shorts-2.jpg', 'storage/img/denim/denim-shorts-3.jpg', 'storage/img/denim/denim-shorts-4.jpg', 'storage/img/denim/denim-shorts-5.jpg', NULL, NULL),
(14, 3, 'blue', 100, 0, 'storage/img/denim/m1-repaired-denim-blue-5.jpg', 'storage/img/denim/m1-repaired-denim-blue-4.jpg', 'storage/img/denim/m1-repaired-denim-blue-3.jpg', 'storage/img/denim/m1-repaired-denim-blue-2.jpg', 'storage/img/denim/m1-repaired-denim-blue-1.jpg', '0000-00-00 00:00:00', '2019-11-19 09:28:39'),
(15, 4, 'blue', 100, 0, 'storage/img/denim/x1-denim-blue-5.jpg', 'storage/img/denim/x1-denim-blue-4.jpg', 'storage/img/denim/x1-denim-blue-3.jpg', 'storage/img/denim/x1-denim-blue-2.jpg', 'storage/img/denim/x1-denim-blue-1.jpg', '2019-11-19 09:31:23', '2019-11-19 09:31:23'),
(16, 5, 'blue', 100, 0, 'storage/img/denim/m14-stretch-denim-light-blue-1.jpg', 'storage/img/denim/m14-stretch-denim-light-blu-5.jpg', 'storage/img/denim/m14-stretch-denim-light-blu-4.jpg', 'storage/img/denim/m14-stretch-denim-light-blu-3.jpg', 'storage/img/denim/m14-stretch-denim-light-blu-2.jpg', '2019-11-19 09:32:32', '2019-11-19 09:32:32'),
(22, 14, 'grey', 100, 0, 'storage/img/cargos/cargo-shorts-1.jpg', 'storage/img/cargos/cargo-shorts-2.jpg', 'storage/img/cargos/cargo-shorts-3.jpg', 'storage/img/cargos/cargo-shorts-4.jpg', 'storage/img/cargos/cargo-shorts-5.jpg', '2019-11-20 10:00:48', '2019-11-20 10:00:48'),
(23, 15, 'brown', 100, 0, 'storage/img/shorts/cargo-drawcord-shorts-olive-1.jpg', 'storage/img/shorts/cargo-drawcord-shorts-olive-2.jpg', 'storage/img/shorts/cargo-drawcord-shorts-olive-3.jpg', 'storage/img/shorts/cargo-drawcord-shorts-olive-4.jpg', 'storage/img/shorts/cargo-drawcord-shorts-olive-5.jpg', '2019-11-20 10:03:55', '2019-11-20 10:03:55'),
(24, 16, 'red', 100, 0, 'storage/img/outerwear/flannel jacket-1.jpg', 'storage/img/outerwear/flannel jacket-2.jpg', 'storage/img/outerwear/flannel jacket-3.jpg', 'storage/img/outerwear/flannel jacket-4.jpg', 'storage/img/outerwear/flannel jacket-5.jpg', '2019-11-20 10:04:50', '2019-11-20 10:04:50'),
(25, 17, 'pink', 100, 0, 'storage/img/top/tech-fleece-jacket-1.jpg', 'storage/img/top/tech-fleece-jacket-2.jpg', 'storage/img/top/tech-fleece-jacket-3.jpg', 'storage/img/top/tech-fleece-jacket-4.jpg', 'storage/img/top/tech-fleece-jacket-5.jpg', '2019-11-25 09:51:41', '2019-11-25 09:51:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_types`
--

CREATE TABLE `product_types` (
  `type_id` int(10) UNSIGNED NOT NULL,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_types`
--

INSERT INTO `product_types` (`type_id`, `type_name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(3, 'denim', 'this is description', 'storage/img/denim/denim-menu.png', '2001-11-19 08:59:28', '2001-11-19 08:59:28'),
(4, 'cargos', 'this is description', 'storage/img/cargos/cargo-menu.png', '2001-11-19 08:59:28', '2001-11-19 08:59:28'),
(5, 'shorts', 'this is description', 'storage/img/shorts/short-menu.png', '2001-11-19 08:59:28', '2001-11-19 08:59:28'),
(6, 'outerwear', 'this is description', 'storage/img/outerwear/outerwear-menu.png', '2004-11-19 08:09:52', '2004-11-19 08:09:52'),
(7, 'top', 'this is description', 'storage/img/top/top-menu.png', '0000-00-00 00:00:00', '2004-11-19 08:09:52'),
(8, 'bottom', 'this is description', 'storage/img/bottom/banner3.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `bill_id` (`bill_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Chỉ mục cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_details_bills_bill_id_fk` (`bill_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `type_name` (`type_name`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `product_id_2` (`product_id`),
  ADD KEY `product_id_3` (`product_id`),
  ADD KEY `product_id_4` (`product_id`);

--
-- Chỉ mục cho bảng `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`type_id`),
  ADD UNIQUE KEY `product_types_type_name_uindex` (`type_name`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `product_types`
--
ALTER TABLE `product_types`
  MODIFY `type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Các ràng buộc cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  ADD CONSTRAINT `bill_details_bills_bill_id_fk` FOREIGN KEY (`bill_id`) REFERENCES `bills` (`bill_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`type_name`) REFERENCES `product_types` (`type_name`);

--
-- Các ràng buộc cho bảng `product_details`
--
ALTER TABLE `product_details`
  ADD CONSTRAINT `product_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
