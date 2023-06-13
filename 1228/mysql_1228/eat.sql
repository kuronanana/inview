-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-12-27 23:40:44
-- 伺服器版本： 10.4.19-MariaDB
-- PHP 版本： 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `eat`
--
CREATE DATABASE IF NOT EXISTS `eat` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `eat`;

-- --------------------------------------------------------

--
-- 資料表結構 `company`
--

CREATE TABLE `company` (
  `店名` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `電話` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `地址` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `經緯度` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `company`
--

INSERT INTO `company` (`店名`, `電話`, `地址`, `經緯度`) VALUES
('双牛城牛肉麵食館', '0424180810', '412台中市大里區德芳路二段13號', '24.1044513,120.6783367'),
('大小福', '0423205555', '403台中市大墩十街60號', '24.1478745,120.6510218'),
('大方麵食館', '0424870321', '412台中市大里區益民路二段325號', '24.11298195325339, 120.68'),
('大明牛家莊', '0424819968', '412台中市大里區大明路265號', '24.11524772435382, 120.68'),
('小李牛肉麵', '0424820773', '412台中市大里區永興路220號', '24.1114559,120.6794809'),
('尚品牛肉麵', '0424915215', '412台中市大里區塗城路517號', '24.08827506138565, 120.70'),
('提督府牛肉麵', '0424066800', '412台中市大里區國光路一段9號', '24.0956568,120.683641'),
('曲媽媽牛肉麵', '0424922013', '412台中市大里區成功路408號', '24.0884562,120.7006972'),
('清一色牛肉麵', '0424911250', '412台中市大里區工業二路88號', '24.0958169,120.7127538'),
('炒菜大衛牛肉麵', '0917239142', '407台中市西屯區精明二街77號', '24.155915740057917, 120.6'),
('蘇記原汁牛肉麵', '0422782136', '412台中市大里區新仁路一段229號', '24.1103582,120.6987332'),
('阿康古法牛肉麵', '0939787639', '412台中市大里區中興路一段362號', '24.091542842025422, 120.6'),
('陳師傅牛肉麵', '0424912689', '412台中市大里區工業三路20號', '24.0962321,120.7125161'),
('鼎吉牛肉麵', '0424968536', '412台中市大里區仁化路號 No. 581', '24.09685262273773, 120.69');

-- --------------------------------------------------------

--
-- 資料表結構 `menu`
--

CREATE TABLE `menu` (
  `店名` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `菜名` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `價格` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `menu`
--

INSERT INTO `menu` (`店名`, `菜名`, `價格`) VALUES
('双牛城牛肉麵食館', '半筋肉麵', 160),
('双牛城牛肉麵食館', '泡菜牛肉麵', 110),
('双牛城牛肉麵食館', '滿漢牛肉麵', 160),
('双牛城牛肉麵食館', '牛筋麵', 160),
('双牛城牛肉麵食館', '牛肉冬粉', 110),
('双牛城牛肉麵食館', '牛肉麵', 110),
('双牛城牛肉麵食館', '精緻牛肉麵', 160),
('大小福', '松板豬肉飯', 85),
('大小福', '水餃', 5),
('大小福', '無骨雞腿飯', 85),
('大小福', '燉牛腩飯', 95),
('大小福', '紅燒牛肉麵', 120),
('大方麵食館', '牛肉酸辣麵', 120),
('大方麵食館', '紅燒牛肉冬粉', 130),
('大方麵食館', '紅燒牛肉湯麵', 80),
('大方麵食館', '紅燒牛肉飯', 130),
('大方麵食館', '紅燒牛肉麵', 130),
('大方麵食館', '綜合酸辣麵', 160),
('大方麵食館', '陽春麵', 40),
('大明牛家莊', '原汁牛肉麵', 120),
('大明牛家莊', '牛肉冬粉', 120),
('大明牛家莊', '牛肉湯冬粉', 70),
('大明牛家莊', '牛肉湯粄條', 80),
('大明牛家莊', '牛肉米粉', 120),
('大明牛家莊', '牛肉粄條', 130),
('大明牛家莊', '麻辣牛肉冬粉', 120),
('大明牛家莊', '麻辣牛肉麵', 120),
('小李牛肉麵', '榨菜肉絲麵', 60),
('小李牛肉麵', '榨醬麵', 60),
('小李牛肉麵', '牛肉乾麵', 100),
('小李牛肉麵', '牛肉湯麵', 60),
('小李牛肉麵', '牛肉麵', 100),
('小李牛肉麵', '米粉', 50),
('小李牛肉麵', '陽春麵', 50),
('小李牛肉麵', '餛飩麵', 60),
('小李牛肉麵', '麻醬麵', 60),
('尚品牛肉麵', '榨菜肉絲麵', 50),
('尚品牛肉麵', '牛肉燴飯', 90),
('尚品牛肉麵', '牛肉麵', 90),
('尚品牛肉麵', '豬肉麵', 70),
('尚品牛肉麵', '餛飩麵', 60),
('尚品牛肉麵', '麻醬麵', 35),
('提督府牛肉麵', '清燉牛肉麵', 190),
('提督府牛肉麵', '紅燒牛肉麵', 200),
('提督府牛肉麵', '老妖炸醬', 370),
('提督府牛肉麵', '老妖炸醬麵', 150),
('提督府牛肉麵', '鮮蝦肉絲麵', 140),
('曲媽媽牛肉麵', '水餃', 5),
('曲媽媽牛肉麵', '紅燒牛肉麵', 120),
('曲媽媽牛肉麵', '紅燒牛肚麵', 120),
('曲媽媽牛肉麵', '軟嫩紅燒牛肉麵', 130),
('清一色牛肉麵', '大三元精緻牛肉麵', 160),
('清一色牛肉麵', '大四喜滿漢牛肉麵', 180),
('清一色牛肉麵', '正宗川味牛肉麵', 130),
('清一色牛肉麵', '水餃', 5),
('清一色牛肉麵', '清一色絕頂牛肉麵', 150),
('清一色牛肉麵', '碰碰胡招牌牛肉麵', 140),
('清一色牛肉麵', '紅燒牛肉細粉', 120),
('清一色牛肉麵', '紅燒牛肉麵', 120),
('清一色牛肉麵', '紅燒牛肚麵', 120),
('清一色牛肉麵', '麻辣牛肉麵', 130),
('炒菜大衛牛肉麵', '半筋半肉麵', 120),
('炒菜大衛牛肉麵', '南瓜牛肉麵', 120),
('炒菜大衛牛肉麵', '滿漢牛肉麵', 160),
('炒菜大衛牛肉麵', '牛筋麵', 130),
('炒菜大衛牛肉麵', '番茄牛肉麵', 120),
('炒菜大衛牛肉麵', '碳烤牛肉麵', 130),
('炒菜大衛牛肉麵', '碳烤豬肉麵', 130),
('炒菜大衛牛肉麵', '素香菇菇麵', 100),
('炒菜大衛牛肉麵', '芋頭排骨麵', 90),
('蘇記原汁牛肉麵', '牛肉炒麵', 80),
('蘇記原汁牛肉麵', '紅燒三寶麵', 120),
('蘇記原汁牛肉麵', '紅燒牛筋牛肉麵', 120),
('蘇記原汁牛肉麵', '紅燒牛肉湯餃', 65),
('蘇記原汁牛肉麵', '紅燒牛肉麵', 75),
('蘇記原汁牛肉麵', '麻辣三寶麵', 120),
('蘇記原汁牛肉麵', '麻辣牛肉麵', 95),
('阿康古法牛肉麵', '半筋半肉泡飯', 150),
('阿康古法牛肉麵', '半筋半肉牛肉麵', 150),
('阿康古法牛肉麵', '古法牛肉泡飯', 120),
('阿康古法牛肉麵', '古法牛肉麵', 120),
('阿康古法牛肉麵', '東坡牛肉泡飯', 170),
('阿康古法牛肉麵', '東坡牛肉麵', 170),
('阿康古法牛肉麵', '滿漢牛肉泡飯', 180),
('阿康古法牛肉麵', '滿漢牛肉麵', 180),
('阿康古法牛肉麵', '牛肉湯麵', 80),
('陳師傅牛肉麵', '三寶牛肉麵', 130),
('陳師傅牛肉麵', '原汁牛肉麵', 110),
('陳師傅牛肉麵', '牛筋湯拌麵', 130),
('陳師傅牛肉麵', '牛肉冬粉', 110),
('陳師傅牛肉麵', '牛肉拌麵', 110),
('陳師傅牛肉麵', '牛肚湯拌麵', 130),
('陳師傅牛肉麵', '番茄牛肉麵', 120),
('鼎吉牛肉麵', '招牌牛肉麵', 100),
('鼎吉牛肉麵', '牛三寶麵', 160),
('鼎吉牛肉麵', '牛筋湯', 140),
('鼎吉牛肉麵', '牛筋麵', 150),
('鼎吉牛肉麵', '牛肉湯', 90),
('鼎吉牛肉麵', '牛肉炒麵', 120),
('鼎吉牛肉麵', '牛腱心麵', 130);

-- --------------------------------------------------------

--
-- 資料表結構 `order`
--

CREATE TABLE `order` (
  `日期` date NOT NULL,
  `時間` time NOT NULL,
  `帳號` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `店名` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `菜名` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `價格` int(11) NOT NULL,
  `數量` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `order`
--

INSERT INTO `order` (`日期`, `時間`, `帳號`, `店名`, `菜名`, `價格`, `數量`) VALUES
('2022-11-25', '01:00:22', 'admin', '提督府牛肉麵', '紅燒牛肉麵', 200, 3),
('2022-12-09', '04:00:16', 'admin', '阿三哥牛肉麵', '牛肉麵', 140, 2),
('2022-12-09', '04:01:02', 'admin', '鼎吉牛肉麵', '招牌牛肉麵', 100, 1),
('2022-12-09', '04:01:02', 'admin', '鼎吉牛肉麵', '牛肉炒麵', 120, 2),
('2022-12-26', '01:02:42', 'admin', '陳家牛肉麵', '牛肉麵', 150, 1),
('2022-12-26', '16:19:21', 'admin', '清一色牛肉麵', '水餃', 5, 10),
('2022-12-26', '16:19:21', 'admin', '清一色牛肉麵', '正宗川味牛肉麵', 130, 2),
('2022-12-26', '16:19:21', 'admin', '清一色牛肉麵', '麻辣牛肉麵', 130, 2),
('2022-12-26', '16:20:12', '111', '大明牛家莊', '牛肉粄條', 130, 2),
('2022-12-26', '16:20:12', '111', '大明牛家莊', '牛肉湯粄條', 80, 1),
('2022-12-26', '16:20:12', '111', '大明牛家莊', '牛肉冬粉', 120, 1),
('2022-12-26', '16:20:24', '111', '郭家牛肉麵', '牛肉麵', 110, 1),
('2022-12-26', '16:20:58', '222', '尚品牛肉麵', '麻醬麵', 35, 2),
('2022-12-26', '16:20:58', '222', '尚品牛肉麵', '餛飩麵', 60, 2),
('2022-12-26', '16:20:58', '222', '尚品牛肉麵', '牛肉麵', 90, 1),
('2022-12-26', '16:21:09', '222', '阿康古法牛肉麵', '東坡牛肉麵', 170, 2),
('2022-12-26', '16:21:09', '222', '阿康古法牛肉麵', '古法牛肉泡飯', 120, 3),
('2022-12-26', '16:21:19', '222', '清一色牛肉麵', '大四喜滿漢牛肉麵', 180, 3),
('2022-12-26', '16:40:39', 'admin', '提督府牛肉麵', '老妖炸醬', 370, 3),
('2022-12-26', '16:40:48', 'admin', '双牛城牛肉麵食館', '精緻牛肉麵', 160, 2),
('2022-12-26', '16:56:09', '333', '郭家牛肉麵', '牛肉麵', 110, 2),
('2022-12-26', '16:56:09', '333', '大方麵食館', '綜合酸辣麵', 160, 2),
('2022-12-26', '16:56:23', '333', '双牛城牛肉麵食館', '半筋肉麵', 160, 2),
('2022-12-26', '16:56:32', '333', '樹太老', '白肉魚定食', 290, 1),
('2022-12-27', '14:31:04', 'admin', '曲媽媽牛肉麵', '紅燒牛肉麵', 120, 1),
('2022-12-27', '14:32:10', '111', '炒菜大衛牛肉麵', '牛筋麵', 130, 2),
('2022-12-27', '14:32:10', '111', '炒菜大衛牛肉麵', '碳烤豬肉麵', 130, 2);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `帳號` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `密碼` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `姓名` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `電話` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `地址` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`帳號`, `密碼`, `姓名`, `電話`, `地址`) VALUES
('111', '111', '王敬鵬', '0905-232323', '台中市大里區德芳路二段13號'),
('222', '222', '張公正', '0423205555', '台中市大墩十街60號'),
('333', '333', '李小龍', '0424922013', '台中市大里區國光路一段9號'),
('admin', '123456', '謝志軒', '0905-369852', '台中市大里區德芳路一段13號');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`店名`);

--
-- 資料表索引 `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`店名`,`菜名`,`價格`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`帳號`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
