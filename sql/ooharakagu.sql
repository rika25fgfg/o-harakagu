-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-05-16 16:19:07
-- サーバのバージョン： 10.4.17-MariaDB
-- PHP のバージョン: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `ooharakagu`
--

-- データベース作成
-- IF NOT EXISTSは存在しないなら
CREATE DATABASE IF NOT EXISTS ooharakagu;

-- これから使用するデータベースを明示
USE ooharakagu;

-- アカウントを作成
-- CREATE USER [ユーザ名]@[ホスト名] IDENTIFIED BY [パスワード]
CREATE USER IF NOT EXISTS 'ooharakagu'@'%' IDENTIFIED BY 'kagupass';

-- 権限を付与
-- GRANT [権限] ON [データベース名].[テーブル名] TO アカウント情報
GRANT ALL ON ooharakagu.* TO 'ooharakagu'@'%' IDENTIFIED BY 'kagupass';

-- 権限を再読み込み　実際、必要ないらしい
FLUSH PRIVILEGES;

-- --------------------------------------------------------

--
-- テーブルの構造 `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `i_image` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `size` varchar(255) NOT NULL,
  `material` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `p_size` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `goods`
--

INSERT INTO `goods` (`id`, `name`, `image`, `discription`, `price`, `i_image`, `color`, `size`, `material`, `weight`, `p_size`, `category`) VALUES
(1, 'シングルベッドフレーム', 'bed/bed1.jpg', 'シンプルでスッキリとしたデザインのヘッドボード。2台並べてご使用も可能です。', 25361, 'siyou/right.jpg', 'ライトブラウン', '幅99×奥行203.5×高さ80cm', 'プリント紙化粧繊維板', '約37.5kg', '幅105×奥行85.5×高さ10cm', 'bed'),
(2, 'アンティーク調木目ベッドフレーム', 'bed/bed2.jpg', '2段棚・照明・スライドカバーコンセント・幅木よけ付きベッドフレーム。', 35648, 'siyou/consent.jpg', 'ブラウン', '幅100×奥行211.5×高さ78cm', 'ＭＤＦ／ＬＶＬ', '約40.2kg', '幅95×奥行96×高さ9.6cm', 'bed'),
(3, '宮付きチェストシングルベッド', 'bed/bed3.jpg', 'ベッド下に収納を設け、スペースを有効活用。大小の引出しで分類収納、ヘッドボードにも便利な収納・コンセント付き', 29900, 'siyou/right.jpg', 'ナチュラル', '幅98×奥行213×高さ80cm', 'プリント化粧繊維板', '約38.5kg', '幅102×奥行20×高さ83cm', 'bed'),
(4, '3人用布張りソファ', 'sofa/sofa1.jpg', '圧迫感のないコンパクトタイプなので、人が集まるリビングの空間にも奥行きが感じられます。', 30454, 'siyou/usb.jpg', 'グレー', '幅177×奥行83×高さ84cm', 'ポリエステル', '約50.5kg', '幅173×奥行84×高さ75cm', 'sofa'),
(5, 'カジュアルソファ', 'sofa/sofa2.jpg', 'ワンルームにお住まいの方や、1人暮らしのお部屋にぴったりな幅約132cmサイズ。', 21890, 'siyou/usb.jpg', 'ネイビー', '幅132×奥行78×高さ78cm', 'ポリエステル', '約65.5kg', '幅133×奥行75×高さ48cm', 'sofa'),
(6, '3人用両電動本革リクライニングソファ', 'sofa/sofa3.jpg', 'ハイバックの背もたれで、頭までしっかり支えサポート。電動リクライニングでお好みの角度に調整できます。', 253610, 'siyou/usb.jpg', 'ブラウン', '幅206×奥行98×高さ100cm', '皮革（牛革）　ＰＶＣ', '約90.5kg', '幅108×奥行100×高さ101cm', 'sofa'),
(7, 'ダイニングテーブル', 'table/table1.jpg', '天然木ならではの滑らかな造り、肌ざわりが楽しめます。', 27900, 'siyou/muku.jpg', 'ナチュラル', '幅135×奥行80×高さ70cm', '天然木（ビーチ）', '約23kg', '幅91×奥行147×高さ12.5cm', 'table'),
(8, 'リビングダイニングテーブル', 'table/table2.jpg', 'リラックスできるロータイプのリビングダイニングテーブルです。', 30494, 'siyou/muku.jpg', 'ミドルブラウン', '幅160×奥行90×高さ65cm', '天然木化粧繊維板（ウォールナット）', '約25.8kg', '幅166×奥行96×高さ8cm', 'table'),
(9, '伸長式ダイニングテーブル', 'table/table3.jpg', '来客時の時など、広く使いたい時に便利な伸長式テーブル。', 17661, 'siyou/sintyou.jpg', 'ミドルブラウン', '幅94×奥行75×高さ70cm', '繊維板', '約23.4kg', '幅127.5×奥行82.5×高さ9cm', 'table'),
(10, 'スライド本棚', 'shelf/shelf1.jpg', '巻数の多いコミック本やサイズの同じ文庫本は、見えても統一感があるので、取出しやすい扉なしタイプのスライド本棚です。', 29900, 'siyou/pd.jpg', 'ライトブラウン', '幅89×奥行43×高さ181cm', 'パーチクルボード／強化紙', '約42kg', '幅90×奥行45×高さ182cm', 'shelf'),
(11, '本棚', 'shelf/shelf2.jpg', '本棚としても、飾り棚としても使用可能！コレクションなどを飾る見せる収納で、自分らしい生活空間を演出できます。', 10175, 'siyou/pd.jpg', 'ダークブラウン', '幅118×奥行29×高さ181cm', '繊維板', '約41.5kg', '幅91×奥行34×高さ23cm', 'shelf'),
(12, '引き出し付きハイタイプ壁面収納', 'shelf/shelf3.jpg', '高さ210cmのハイタイプ壁面収納！空きスペースを最大限に活用して本や小物を大量収納！', 18232, 'siyou/pd.jpg', 'ホワイト', '幅117.8×奥行30.5×高さ210cm', '繊維板', '約53kg', '幅91×奥行35×高さ20cm', 'shelf');

-- --------------------------------------------------------

--
-- テーブルの構造 `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `goods_id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `datetime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, '今井 陽', 'ksw2070113@stu.o-hara.ac.jp', 'imapass'),
(2, '黒澤 一貴', 'ksw2070284@stu.o-hara.ac.jp', 'kuropass'),
(3, '戸部 一也', 'ksw2070015@stu.o-hara.ac.jp', 'tobepass'),
(4, '長谷川 莉佳', 'ksw2070348@stu.o-hara.ac.jp', 'hasepass');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `goods_id` (`goods_id`);

--
-- テーブルのインデックス `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- テーブルの AUTO_INCREMENT `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
