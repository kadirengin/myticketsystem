-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 Oca 2014, 22:20:37
-- Sunucu sürümü: 5.5.32
-- PHP Sürümü: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `ticket`
--
CREATE DATABASE IF NOT EXISTS `ticket` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ticket`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE IF NOT EXISTS `iletisim` (
  `id_iletisim` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `id_iletisim_kategori` int(2) NOT NULL COMMENT '1-Dilek 2-Şikayet 3-Teşekkür',
  `baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text CHARACTER SET latin1 NOT NULL,
  `tarih` datetime NOT NULL,
  `dosya1` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `dosya2` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `ip` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id_iletisim`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=38 ;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id_iletisim`, `ad`, `email`, `id_iletisim_kategori`, `baslik`, `mesaj`, `tarih`, `dosya1`, `dosya2`, `ip`) VALUES
(34, 'Esra Güven', 'ecearda18@gmail.com', 3, 'tesekkur ederim', 'asdassdafd', '2014-01-26 23:05:30', '', '', '::1'),
(35, 'habibe güven', 'habibe@celal.com', 1, 'celal', 'celali çok seviyorum', '2014-01-27 00:18:27', '', '', '::1'),
(36, 'Kadir Engin', 'emreyildirim35@hotmail.com', 3, 'asda', 'dasfafa a', '2014-01-27 00:54:32', '', '', '::1'),
(37, 'Hasan Tokatlı', 'hasantktl@gmail.com', 3, 'Proje', 'Projede eksiklikler var', '2014-01-27 01:14:46', '', '', '::1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim_kategori`
--

CREATE TABLE IF NOT EXISTS `iletisim_kategori` (
  `id_kategori` int(2) NOT NULL AUTO_INCREMENT,
  `ad` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `iletisim_kategori`
--

INSERT INTO `iletisim_kategori` (`id_kategori`, `ad`) VALUES
(1, 'Dilek'),
(2, 'Sikayet'),
(3, 'Tesekkür');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori`) VALUES
(1, 'Bilgi'),
(2, 'Randevu'),
(3, 'Şikayet'),
(4, 'Sipariş'),
(5, 'Ödeme');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE IF NOT EXISTS `kullanici` (
  `id_kullanici` int(2) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kullanici`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id_kullanici`, `email`, `password`) VALUES
(1, 'kadirenginn@gmail.com', '123987');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sorular`
--

CREATE TABLE IF NOT EXISTS `sorular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_soyad` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `kategori` int(1) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `mesaj` varchar(255) NOT NULL,
  `ek1` varchar(255) DEFAULT NULL,
  `ek2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
