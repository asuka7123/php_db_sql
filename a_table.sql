-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2021 年 3 朁E24 日 15:14
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onsen_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `a_table`
--

CREATE TABLE IF NOT EXISTS `a_table` (
`id` int(20) unsigned NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pref` varchar(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `access` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `a_table`
--

INSERT INTO `a_table` (`id`, `name`, `pref`, `access`, `comment`) VALUES
(1, '高湯', '福島県', '①新幹線＋バスで3時間②車で3.5時間', '標高2,000メートルの活火山「吾妻山」から湧き出る硫黄泉で、乳白色のお湯が特徴です。身体を癒やしたい方、静かな時間をゆっくり過ごしたい方にぴったりの温泉。2017年じゃらん温泉地満足度ランキングで全国一位に輝きました。'),
(2, '越後湯沢', '新潟県', '①新幹線（1.5時間）②車（2.5時間）', '東京駅から片道80分ほどとアクセス抜群でありながら、川端康成の代表作「雪国」の舞台にもなった、風情ある温泉地です。日本一の米どころで、日本酒も評判。'),
(3, '四万', '群馬県', '①電車＋特急列車＋バス（3時間）②車（2.5時間）', '温泉大国の群馬県の中でも、人気の高い温泉。“四万の病に効く霊泉”という伝説から名づけられていると云われ、街並みはレトロで情緒を感じる雰囲気です。ジブリ作品の舞台になったとも噂される宿や、自然溢れるスポット、美味しいグルメなど数々の魅力であふれています。'),
(4, '熱海', '静岡県', '①新幹線（45m）②車（2時間）', '国内屈指の温泉リゾートとして知られる、熱海。東京から1時間かからずサクッと行ける手軽さが嬉しい。温泉と美味しいモノを堪能しつつ、のんびりとした時間を過ごすことができ、忙しい日々を忘れさせてくれます。'),
(5, '草津', '群馬県', '②特急電車＋バス（約3時間）②車（5h）', '「草津よいとこ一度はおいで♪」の草津節が有名な草津温泉。江戸時代には温泉番付で最高位の“東大関”を得るほどの名湯で、昔から湯治場として親しまれてきました。湯畑さんぽや湯もみ体験など、草津ならではの楽しい観光も盛りだくさん。'),
(6, '鬼怒川', '栃木県', '①電車＋特急列車（2.5時間）②車（2.5時間）', '東京から電車で2時間ちょっとで到着する鬼怒川温泉。東京から近く、自然を満喫できる散策スポットが揃っているので、「癒されたいな」と思った時に友達を誘ってさっと行けます。温泉街ということで、足湯が各所に設置され、無料で入れるのも魅力。'),
(7, '甲府', '山梨県', '①電車＋特急列車（2h）②車（2h）', 'そう遠くない場所へ旅に行きたいと思ったら、甲府へ。首都圏から電車で約2時間もあればアクセスできて、ほうとうやもつ煮などのご当地グルメ、温泉と、ふらっとひとり旅にも最適です。'),
(8, '伊豆', '静岡県', '①車（3h）②新幹線＋特急列車（2h）', '忙しい日々に疲れてくると「たまには贅沢をして気分転換したい」と思う時がありますよね。そんな時には都心からもアクセス抜群な「伊豆」へ、身も心も癒されるリフレッシュ旅行に出かけてみませんか？綺麗な海や、地元でとれた海鮮を使った料理、動物と触れ合える公園など、伊豆には知れば知るほど沢山の魅力があります。'),
(9, '那須塩原', '栃木県', '車（2.5～3h）', '栃木県北部に位置する観光エリア・那須塩原は雄大な大自然に囲まれた魅力的な温泉地です。皇族や文豪にも愛された温泉は“美肌の湯”として有名ですよね。自然豊かで落ち着いた雰囲気の温泉郷は、癒しを求めている方にぴったり。'),
(10, '万座', '群馬県', '車（3.5h）', 'こってり濃厚な温泉に癒されたいと思ったら「万座温泉」へ。硫黄含有量日本一の超高濃度硫黄泉ともいわれ、独特の香りと白濁したお湯に思わず「濃い！」と言ってしまうかも。身体がハードに疲れているのなら、白濁湯で癒されてませんか。群馬の高原に湧き出る知る人ぞ知る「名湯」を求めて、旅にでかけましょう。'),
(11, '湯西川', '栃木県', '車（3h）', '「美肌の湯」として愛される湯西川温泉。刺激が少なく、浸かるだけでお肌がスベスベになると言われる良質な温泉で、特に女性に大人気です。冬は「湯西川温泉 かまくら祭」を開催しており、幻想的なかまくらの世界を楽しむこともできます。'),
(12, '箱根', '神奈川県', '①車（1.5h）②特急列車（1.5h）', '新宿から特急ロマンスカーで一本。関東屈指の人気観光地「箱根」は、全国有数の温泉地です。また、温泉だけではなく、大涌谷や、沢山の美術館、箱根神社など、旅の見どころがたくさんあります。'),
(13, '房総', '千葉県', '①車（1.5h）②電車（2h）', '千葉県・房総半島の中心部は、緑に囲まれた静かで落ち着いた環境なんです。美肌効果が評判の温泉もあって、大人女子のひとり旅にぴったり。都内からもふらっと行けるので、移動で疲れないのも魅力！のんびりゆっくり、美味しいものと温泉を満喫して癒されましょう。');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a_table`
--
ALTER TABLE `a_table`
 ADD UNIQUE KEY `code` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a_table`
--
ALTER TABLE `a_table`
MODIFY `id` int(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;