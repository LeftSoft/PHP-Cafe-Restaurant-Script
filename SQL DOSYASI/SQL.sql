-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 07 Tem 2020, 22:03:34
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cafeyeni`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_url` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_footer` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_gsm` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_faks` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_ilce` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_il` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres2` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres3` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres4` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mesai` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_maps` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_analystic` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_zopim` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_google` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_youtube` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtphost` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpuser` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtppassword` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpport` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_bakim` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_url`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_footer`, `ayar_tel`, `ayar_gsm`, `ayar_faks`, `ayar_mail`, `ayar_ilce`, `ayar_il`, `ayar_adres`, `ayar_adres2`, `ayar_adres3`, `ayar_adres4`, `ayar_mesai`, `ayar_maps`, `ayar_analystic`, `ayar_zopim`, `ayar_facebook`, `ayar_twitter`, `ayar_google`, `ayar_youtube`, `ayar_smtphost`, `ayar_smtpuser`, `ayar_smtppassword`, `ayar_smtpport`, `ayar_bakim`) VALUES
(0, 'images/logo.png', 'localhost', 'Cafe & Restaurant Script', 'Cafe & Restaurant Script', 'pasta, responsive, modern html5 template, bootstra', 'Not Avaliable', 'Copyright © 2018 Cafe & Restaurant - Tüm Hakları Saklıdır.', '0553 884 96 58', '', '0500 000 00 00', 'deneme@gmail.com', 'Bağcılar', 'İstanbul', 'Evren Mah. Karaağaç Sokak', 'No 37', 'daire:6', 'Güneşli/Bağcılar', '7 x 24 açık ', '<iframe src=\"https://www.google.com/maps/embed?pb=\" width=\"1903\" height=\"550\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'ayar_analystic', 'ayar_zopima', 'https://facebook.com', 'https://twitter.com', 'www.google.com', 'www.youtube.com', 'deneme', 'deneme', 'deneme', '25', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri`
--

CREATE TABLE `galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_fotograf` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `galeri_baslik` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `galeri_altbaslik` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `galeri`
--

INSERT INTO `galeri` (`galeri_id`, `galeri_fotograf`, `galeri_baslik`, `galeri_altbaslik`) VALUES
(1, 'images/gallery/1.jpg', 'Nice Food Pasta', '<p>Fried fish with sauce</p>\r\n'),
(2, 'images/gallery/2.jpg', 'Güzel Yiyecek', 'Fried fish with sauce');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_baslik` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_icerik` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_icerik`) VALUES
(0, 'Hakkımızda', '<p>Yiyeceklerin orijinalliğini sıfırdan restore etmek bizi y&ouml;nlendiren misyondur. Restarasyon, bir r&uuml;yanın ger&ccedil;ekleşmesidir.</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisim_id` int(11) NOT NULL,
  `iletisim_isim` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_mail` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_tel` varchar(11) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_mesaj` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`iletisim_id`, `iletisim_isim`, `iletisim_mail`, `iletisim_tel`, `iletisim_mesaj`) VALUES
(4, 'Mehmet Kaplan', 'Deneme@gmail.com', '05231454875', 'Sistem Denemsi deneme 123554354');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_zaman` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kullanici_mail` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_mail`, `kullanici_password`, `kullanici_adsoyad`) VALUES
(154, 'ramazankaraca5@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Ramazan Karaca');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ozel_menu_foto`
--

CREATE TABLE `ozel_menu_foto` (
  `ozel_foto_id` int(11) NOT NULL,
  `ozel_menu_id` int(11) NOT NULL,
  `ozel_menu_resim` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ozel_menu_foto`
--

INSERT INTO `ozel_menu_foto` (`ozel_foto_id`, `ozel_menu_id`, `ozel_menu_resim`) VALUES
(1, 1, 'images/content/08_food500x400.jpg'),
(2, 2, 'images/content/05_food500x400.jpg'),
(3, 3, 'images/content/thumb-img-160x160.jpg'),
(4, 4, 'images/content/9.jpg'),
(5, 5, 'images/content/02_food750x450.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rezervasyon`
--

CREATE TABLE `rezervasyon` (
  `rez_id` int(11) NOT NULL,
  `rez_ad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `rez_tel` varchar(11) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `rez_email` varchar(150) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `rez_kisi` varchar(2) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `rez_tarih` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `rez_zaman` varchar(11) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `rezervasyon`
--

INSERT INTO `rezervasyon` (`rez_id`, `rez_ad`, `rez_tel`, `rez_email`, `rez_kisi`, `rez_tarih`, `rez_zaman`) VALUES
(11, 'Ramazan Karaca', '2147483647', 'ramazankaraca5@gmail.com', '1', '11/06/2019', '1:50 AM'),
(12, 'Ramazan Karaca', '2147483647', 'ramazankaraca5@gmail.com', '1', '11/06/2019', '7:39 PM'),
(13, 'Ramazan Karaca', '2147483647', 'ramazankaraca5@gmail.com', '1', '11/06/2019', '7:40 PM'),
(14, 'df', '2147483647', 'ramazankaraca5@gmail.com', '1', '11/06/2019', '1:50 AM'),
(16, 'Ramazan Karaca', '12345678910', 'ramazankaraca5@gmail.com', '1', '11/06/2019', '1:50 AM');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_ad` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `slider_poster` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `slider_resimyol` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `slider_ico` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `slider_sira` int(2) NOT NULL,
  `slider_durum` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_ad`, `slider_poster`, `slider_resimyol`, `slider_ico`, `slider_sira`, `slider_durum`) VALUES
(1, 'Welcome To Restaurant', 'images/slide/01_video_preview1600x800.jpg', 'images/slide/01_previewvideo.mp4', 'images/logo_intro.png', 1, '1'),
(2, 'Delicious Food', 'images/slide/02_video_preview1600x800.jpg', 'images/slide/02_previewvideo.mp4', 'images/logo_intro.png', 2, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yemek_menu`
--

CREATE TABLE `yemek_menu` (
  `food_menu_id` int(11) NOT NULL,
  `food_menu_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `food_menu_description` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `food_menu_price` varchar(10) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `menu_sira` int(2) NOT NULL,
  `ozel_menu` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yemek_menu`
--

INSERT INTO `yemek_menu` (`food_menu_id`, `food_menu_name`, `food_menu_description`, `food_menu_price`, `menu_sira`, `ozel_menu`) VALUES
(1, 'Yiyecek1', '<p>Aciklama</p>\r\n', '4.50', 1, '1'),
(2, 'Yemek2', '<p>A&ccedil;ıklama2</p>\r\n', '10', 2, '1'),
(3, 'Yemek3', '<p>A&ccedil;ıklama3</p>\r\n', '20', 3, '0'),
(4, 'Yemek4', '<p>A&ccedil;ıklama4</p>\r\n', '30', 4, '0'),
(5, 'Yemek5', 'Açıklama5', '102', 5, '1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`galeri_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`iletisim_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `ozel_menu_foto`
--
ALTER TABLE `ozel_menu_foto`
  ADD PRIMARY KEY (`ozel_foto_id`);

--
-- Tablo için indeksler `rezervasyon`
--
ALTER TABLE `rezervasyon`
  ADD PRIMARY KEY (`rez_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `yemek_menu`
--
ALTER TABLE `yemek_menu`
  ADD PRIMARY KEY (`food_menu_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `galeri`
--
ALTER TABLE `galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
--
-- Tablo için AUTO_INCREMENT değeri `rezervasyon`
--
ALTER TABLE `rezervasyon`
  MODIFY `rez_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `yemek_menu`
--
ALTER TABLE `yemek_menu`
  MODIFY `food_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
