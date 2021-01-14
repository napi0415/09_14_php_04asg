-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2021 年 1 月 09 日 02:46
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
-- データベース: `gsacf_d07_14`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `todo_table`
--

CREATE TABLE `todo_table` (
  `id` int(12) NOT NULL,
  `todo` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `todo_table`
--

INSERT INTO `todo_table` (`id`, `todo`, `deadline`, `created_at`, `updated_at`) VALUES
(9, 'おおかみsuper', '2021-01-09', '2020-12-19 00:00:00', '2021-01-08 23:20:56'),
(10, 'ぞう', '2020-12-19', '2020-12-19 00:00:00', '2020-12-19 16:22:42'),
(11, 'kikiki', '2020-12-12', '2020-12-19 17:25:07', '2020-12-19 17:25:07'),
(12, 'gigigig', '2020-12-18', '2020-12-19 17:39:11', '2020-12-19 17:39:11'),
(13, 'しばかり', '2020-12-25', '2020-12-24 05:12:27', '2020-12-24 05:12:27'),
(14, 'つり', '2020-12-26', '2020-12-24 05:13:06', '2020-12-24 05:13:06'),
(15, '狩り', '2020-12-27', '2020-12-24 05:13:32', '2020-12-24 05:13:32'),
(16, '稲刈り', '2020-12-28', '2020-12-24 05:13:44', '2020-12-24 05:13:44'),
(17, 'もちつき', '2020-12-29', '2020-12-24 05:13:55', '2020-12-24 05:13:55'),
(18, '大掃除', '2020-12-30', '2020-12-24 05:14:18', '2020-12-24 05:14:18'),
(19, '年越し', '2020-12-31', '2020-12-24 05:14:27', '2020-12-24 05:14:27'),
(20, 'walking', '2020-12-12', '2020-12-25 14:18:59', '2020-12-25 14:18:59'),
(21, '宿題', '2020-12-26', '2020-12-26 15:07:46', '2020-12-26 15:07:46'),
(22, '買い物', '2020-12-27', '2020-12-26 15:09:20', '2020-12-26 15:09:20'),
(23, '荷物運び', '2020-12-28', '2020-12-26 15:53:48', '2020-12-26 15:53:48');

-- --------------------------------------------------------

--
-- テーブルの構造 `users_table`
--

CREATE TABLE `users_table` (
  `id` int(12) NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` int(1) NOT NULL,
  `is_deleted` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `users_table`
--

INSERT INTO `users_table` (`id`, `username`, `password`, `is_admin`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'goto', '1919weimarer', 0, 0, '2021-01-08 23:41:40', '2021-01-08 23:41:40'),
(2, 'demo', 'yamakawa', 0, 0, '2021-01-09 10:44:55', '2021-01-09 10:44:55');

-- --------------------------------------------------------

--
-- テーブルの構造 `wbc2018_u15_table`
--

CREATE TABLE `wbc2018_u15_table` (
  `id` int(11) NOT NULL,
  `player_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_kana` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `player_position` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uni_number` int(10) NOT NULL,
  `height` int(10) NOT NULL,
  `p_weight` int(10) NOT NULL,
  `league` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `throws` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bats` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `run_1` int(20) NOT NULL,
  `run_2` int(20) NOT NULL,
  `ball_speed_1` int(20) NOT NULL,
  `ball_speed_2` int(20) NOT NULL,
  `ball_speed_set_1` int(20) NOT NULL,
  `ball_speed_set_2` int(20) NOT NULL,
  `second_throw_1` int(20) NOT NULL,
  `second_throw_2` int(20) NOT NULL,
  `second_throw_3` int(20) NOT NULL,
  `note` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `wbc2018_u15_table`
--

INSERT INTO `wbc2018_u15_table` (`id`, `player_name`, `name_kana`, `player_position`, `uni_number`, `height`, `p_weight`, `league`, `team`, `area`, `throws`, `bats`, `run_1`, `run_2`, `ball_speed_1`, `ball_speed_2`, `ball_speed_set_1`, `ball_speed_set_2`, `second_throw_1`, `second_throw_2`, `second_throw_3`, `note`) VALUES
(1, '樋上　颯太', 'ヒノウエ　ソウタ', '投手', 11, 173, 78, 'ボーイズ', '湖南ボーイズ', '滋賀', '右', '右', 4, 4, 130, 135, 127, 135, 0, 0, 0, 'なし'),
(2, '金井　慎之助', 'カナイ　シンノスケ', '投手', 14, 179, 68, 'ボーイズ', '東京城南ボーイズ', '神奈川', '左', '左', 0, 0, 132, 126, 130, 124, 0, 0, 0, ''),
(3, '古川　秀弥', 'フルカワ　シュウヤ', '投手', 15, 177, 60, 'ヤング', 'ヤング西福岡メッツ', '福岡', '右', '右', 3, 4, 126, 119, 122, 119, 0, 0, 0, ''),
(4, '本田　峻也', 'ホンダ　シュンヤ', '投手', 16, 177, 63, 'リトルシニア', '小松加賀リトルシニア', '石川', '左', '左', 4, 4, 122, 119, 121, 121, 0, 0, 0, ''),
(5, '鈴木　唯斗', 'スズキ　ユイト', '投手', 17, 175, 70, 'ヤング', 'SASUKE名古屋ヤング', '名古屋', '左', '左', 4, 4, 126, 126, 126, 126, 0, 0, 0, 'なし'),
(6, '畔柳　亨丞', 'クロヤナギ　キョウスケ', '投手', 18, 175, 72, 'ヤング', 'SASUKE名古屋ヤング', '名古屋', '右', '右', 4, 4, 135, 132, 135, 127, 0, 0, 0, 'なし'),
(7, '藤森　粋七丞', 'フジモリ　イキナスケ', '投手', 19, 178, 78, 'リトルシニア', '青森山田リトルシニア', '青森', '右', '右', 4, 4, 135, 130, 130, 127, 0, 0, 0, 'なし'),
(8, '秋山　恭平', 'アキヤマ　キョウヘイ', '投手', 21, 165, 56, 'フレッシュ', '筑後サザンホークス', '福岡', '左', '左', 4, 4, 130, 126, 130, 126, 0, 0, 0, 'なし'),
(9, '清田　蒼陽', 'キヨタ　ソウヒ', '投手', 22, 185, 87, 'ボーイズ', '新城ボーイズ', '名古屋', '右', '右', 4, 4, 128, 128, 128, 128, 0, 0, 0, 'なし'),
(10, '池田　陵真', 'イケダ　リョウマ', '捕手', 5, 170, 72, 'ボーイズ', '忠岡ボーイズ', '大阪', '右', '右', 4, 4, 0, 0, 0, 0, 2, 2, 2, 'なし'),
(11, '坂　玲哉', 'サカ　レイヤ', '捕手', 10, 178, 75, 'ボーイズ', '湖南ボーイズ', '滋賀', '右', '右', 4, 4, 0, 0, 0, 0, 2, 2, 2, 'なし'),
(12, '福原　聖矢', 'フクハラ　セイヤ', '捕手', 12, 166, 62, 'ヤング', '安仁屋ヤングスピリッツ', '沖縄', '右', '右', 4, 3, 0, 0, 0, 0, 2, 2, 2, '唯一2年生'),
(13, '城下　拡', 'ジョウシタ　ヒロム', '捕手', 13, 171, 66, 'フレッシュ', '串木野ドリームズ', '鹿児島', '右', '右', 4, 4, 0, 0, 0, 0, 2, 2, 2, '副キャプテン'),
(14, '木本　圭一', 'キモト　ケイイチ', '内野手', 2, 174, 70, 'リトルシニア', '静岡裾野リトルシニア', '静岡', '右', '右', 4, 4, 0, 0, 0, 0, 0, 0, 0, 'キャプテン'),
(15, '竹中　勇登', 'タケナカ　ハヤト', '内野手　投手', 3, 174, 75, 'ヤング', '倉敷ビガーズヤング', '岡山', '右', '右', 4, 4, 130, 126, 132, 126, 0, 0, 0, 'なし'),
(16, '杉下　海生', 'スギシタ　アオイ', '内野手', 4, 168, 63, 'リトルシニア', '泉佐野リトルシニア', '大阪', '右', '左', 4, 4, 0, 0, 0, 0, 0, 0, 0, '副キャプテン'),
(17, '齋藤　広空', 'サイトウ　ヒロタカ', '内野手', 6, 167, 65, 'ボーイズ', '京葉ボーイズ', '千葉', '右', '右', 4, 4, 0, 0, 0, 0, 0, 0, 0, 'キャプテン　体育委員'),
(18, '内山　陽斗', 'ウチヤマ　ハルト', '内野手', 8, 167, 70, 'ボーイズ', '羽曳野ボーイズ', '大阪', '右', '左', 4, 4, 0, 0, 0, 0, 0, 0, 0, 'キャプテン　生徒会長'),
(19, '花田　旭', 'ハナダ　アサヒ', '外野手', 7, 183, 68, 'ボーイズ', '西淀ボーイズ', '大阪', '右', '右', 4, 4, 0, 0, 0, 0, 0, 0, 0, 'なし'),
(20, '小畠　一心', 'オバタ　イッシン', '外野手　投手', 9, 184, 77, 'ヤング', 'オール住之江ヤング', '大阪', '右', '右', 4, 4, 130, 127, 125, 120, 0, 0, 0, 'なし');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `todo_table`
--
ALTER TABLE `todo_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `wbc2018_u15_table`
--
ALTER TABLE `wbc2018_u15_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `todo_table`
--
ALTER TABLE `todo_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- テーブルの AUTO_INCREMENT `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- テーブルの AUTO_INCREMENT `wbc2018_u15_table`
--
ALTER TABLE `wbc2018_u15_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
