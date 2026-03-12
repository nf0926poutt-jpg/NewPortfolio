-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2026-03-12 04:04:36
-- サーバのバージョン： 10.4.32-MariaDB
-- PHP のバージョン: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `ccdonuts`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `furigana` varchar(100) NOT NULL,
  `postcode_a` int(3) NOT NULL,
  `postcode_b` int(4) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- テーブルのデータのダンプ `customers`
--

INSERT INTO `customers` (`id`, `name`, `furigana`, `postcode_a`, `postcode_b`, `address`, `mail`, `password`) VALUES
(3, '猫田　重蔵', 'ﾈｺﾀ　ｼﾞｭｳｿﾞｳ', 123, 4567, '静岡県静岡市葵区追手町9-6', 'necota.96@gmail.com', 'necota96');

-- --------------------------------------------------------

--
-- テーブルの構造 `favorite`
--

CREATE TABLE `favorite` (
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `introduction` varchar(1000) NOT NULL,
  `is_new` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- テーブルのデータのダンプ `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `introduction`, `is_new`) VALUES
(1, 'CCドーナツ 当店オリジナル（5個入り）', 1500, '当店のオリジナル商品、CCドーナツは、サクサクの食感が特徴のプレーンタイプのドーナツです。素材にこだわり、丁寧に揚げた生地は軽やかでサクッとした食感が楽しめます。一口食べれば、口の中に広がる甘くて香ばしい香りと、口どけの良い食感が感じられます。', 0),
(2, 'チョコレートデライト（5個入り）', 1600, '口いっぱいに広がる濃厚なカカオの香りが自慢の「チョコレートディライト」。しっとりとしたココア生地を、艶やかなビターチョコで贅沢にコーティングしました。トッピングのナッツの食感が程よいアクセント。自分へのご褒美や大切な方へのギフトにも最適です。', 0),
(3, 'キャラメルクリーム（5個入り）', 1600, 'とろけるような特製キャラメルクリームを、ふわふわのイースト生地にたっぷりと詰め込みました。表面には香ばしいキャラメルグレーズと砕いたアーモンドをトッピング。一口食べるたびに、ほろ苦さと濃厚な甘みが絶妙なハーモニーを奏でる、贅沢な一品です。', 0),
(4, 'プレーンクラシック（5個入り）', 1500, '当店のオリジナル商品、CCドーナツは、サクサクの食感が特徴のプレーンタイプのドーナツです。素材にこだわり、丁寧に揚げた生地は軽やかでサクッとした食感が楽しめます。一口食べれば、口の中に広がる甘くて香ばしい香りと、口どけの良い食感が感じられます。', 0),
(5, 'サマーシトラス（5個入り）', 1600, '夏の太陽をたっぷり浴びたレモンとオレンジの果汁を、爽やかなグレーズに仕立てました。軽い食感のドーナツ生地と、シトラスのキュンとした酸味が相性抜群。仕上げに添えたピールが、爽やかな香りと彩りを添えます。暑い日でもさっぱりと楽しめる、夏季限定の自信作です。', 1),
(6, 'ストロベリークラッシュ（5個入り）', 1800, '完熟いちごをふんだんに使用した甘酸っぱいストロベリーチョコで、ドーナツを鮮やかにコーティングしました。仕上げにフリーズドライのいちごを贅沢に散りばめることで、豊かな香りとサクサクした食感を楽しめます。見た目も可愛らしく、ティータイムを華やかに彩る一品です。', 0),
(7, 'フルーツドーナツセット（12個入り）', 3500, '新鮮で豊かなフルーツをたっぷりと使用した贅沢な12個入りセットです。このセットには、季節の最高のフルーツを厳選し、ドーナツに取り入れました。口に入れた瞬間にフルーツの風味と生地のハーモニーが広がります。色鮮やかな見た目も魅力の一つです。', 0),
(8, 'フルーツドーナツセット（14個入り）', 4000, '新鮮で豊かなフルーツをたっぷりと使用した贅沢な14個入りセットです。このセットには、季節の最高のフルーツを厳選し、ドーナツに取り入れました。口に入れた瞬間にフルーツの風味と生地のハーモニーが広がります。色鮮やかな見た目も魅力の一つです。', 0),
(9, 'ベストセレクションボックス（4個入り）', 1200, '自慢の人気ドーナツを一度に楽しめる、贅沢な詰め合わせセットです。定番のチョコレートからストロベリーまで、バラエティ豊かなラインナップをバランスよく詰め込みました。ご家族での団らんや友人との集まり、大切な方への手土産にも喜ばれること間違いなしの、当店一押しボックスです。', 0),
(10, 'チョコクラッシュボックス（7個入り）', 2400, '当店自慢の「チョコレートディライト」をたっぷり詰め込んだ、チョコ好きにはたまらない7個セットです。濃厚なカカオの風味とザクザクした食感を、ご家族やご友人と存分にシェアしていただけます。一箱で食卓がパッと華やぐ、贅沢な食べ比べセット。自分へのご褒美や、大切な日の手土産にも最適なボリュームです。', 0),
(11, 'クリームボックス（4個入り）', 1400, 'とろけるクリーム系ドーナツを厳選した4個セットです。ふわふわの生地から溢れ出す濃厚なクリームは、一度食べたら忘れられない至福の味わい。午後のティータイムを彩る手土産や、少人数でのシェアにぴったりな、満足感たっぷりのボックスです。', 0),
(12, 'クリームボックス（9個入り）', 2800, '風味豊かな特製クリームをたっぷり詰め込んだドーナツ9個の豪華セットです。ふわふわ食感の生地と、あふれ出すクリームの優しさが心まで満たします。大人数でのパーティーや大切な方への贈り物に最適な、バラエティ豊かな美味しさが詰まった満足度No.1のボックスです。', 0);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- テーブルのインデックス `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`customer_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- テーブルのインデックス `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- テーブルの AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `favorite_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
