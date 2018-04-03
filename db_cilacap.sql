-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2017 at 04:18 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_cilacap`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id_username` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `user` varchar(15) NOT NULL,
  `akun` varchar(15) NOT NULL,
  PRIMARY KEY (`id_username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_username`, `username`, `password`, `nama_lengkap`, `user`, `akun`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'galuh ayu', 'admin', 'aktif'),
(2, 'indra', 'e24f6e3ce19ee0728ff1c443e4ff488d', 'indra', 'editor', 'aktif'),
(3, 'galuh', '7e67f82b2528050191537b600c15f48e', 'galuh', 'editor', 'aktif'),
(4, 'diva', 'aa62f8527389d3b9531faad76d772b9f', 'diva', 'editor', 'nonaktif'),
(5, 'cup', 'f3f58ee455ae41da2ad5de06bf55e8de', 'cuple', 'admin', 'aktif'),
(6, 'ena', '3f265375ee4fb99f2439f3759683b34f', 'enaerlina', 'editor', 'nonaktif'),
(7, 'indah', 'f3385c508ce54d577fd205a1b2ecdfb7', 'indah permata', 'admin', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `alam`
--

CREATE TABLE IF NOT EXISTS `alam` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `namaa` varchar(250) NOT NULL DEFAULT '',
  `lokasia` varchar(30) NOT NULL,
  `keta` text NOT NULL,
  `longa` varchar(250) DEFAULT NULL,
  `lata` varchar(250) DEFAULT NULL,
  `linka` text NOT NULL,
  `icon` varchar(250) DEFAULT 'lg_a.png',
  PRIMARY KEY (`id`),
  UNIQUE KEY `namaa_2` (`namaa`),
  KEY `namaa` (`namaa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `alam`
--

INSERT INTO `alam` (`id`, `namaa`, `lokasia`, `keta`, `longa`, `lata`, `linka`, `icon`) VALUES
(13, 'Pantai Teluk Penyu', 'JL. Laut No 57 Cilacap Selatan', ' Pantai teluk penyu bisa dikatakan merupakan pantai yang menjadi andalan Kota Cilacap. Jaraknya sekitar 2 kilometer dari pusat kota. Pantai teluk penyu ini membujur dari pelabuhan perikanan samudra cilacap dengan pulau Nusakambanga yang terkenal itu. Ombak dipantai ini terbilang ganas, karena memang letaknya di samudra hindia, tetapi jangan kecewa, ditempat ini anda bisa berenang, menyelam, berjemur dan bermain banana boat, dan melihat ombak yang bergulung-gulung dengan indahnya yaaaa.', '-7.733870', '109.021754', 'teluk_penyu1.jpg', 'lg_a.png'),
(14, 'Pulau Nusa kambangan', 'Pulau Nusa kambangan ', 'Walaupun image pulau ini terdengar sangat menakutkan,  tetapi sebenarnya pulau ini memiliki daya tarik wisata tersendiri. Ada banyak sekali tempat wisata di pulau ini, antara lain hutan cagar alam, keindahan batu karang, hutan belantara, gua, benteng, serta pantai. Disini ada benteng Karang Bolong dan Benteng Pendem, sementara untuk pantai, ada Pantai Karang Pandan. Semuanya eksotis dan masih terlihat asri dan alami.', '-7.724890', '108.906502', 'nuskam.jpg', 'lg_a.png'),
(17, 'Pantai Widara Payung', 'Sidayu, Binangun Kabupaten Cil', 'Pantai Ini berada di desa Widarapayung yang berjarak sekitar 35 km ke arah timur Cilacap di kecamatan Binangun, Kabupaten Cilacap Jawa Tengah. Walaupun kecil, Pantai Widarapayung ini begitu menawan. Apalagi dengan berbagai fasilitas yang sudah dibangun, berupa jalanan yang sudah hotmix sehingga kendaraan anda bisa dengan mulus menyusuri jalanan di  pantai ini.', '-7.698259', '109.263928', 'widarapayung.jpg', 'lg_a.png'),
(19, 'Pantai Karang Pandan', 'Jl. Laut Cilacap (Area Benteng', 'Kalau dari Benteng karang bolong, untuk sampai ke Pantai karang Pandan, Anda cukup berjalan kira-kira setengah jam. Karena lokasinya memang berdekatan. Di pantai karang Pandan ini ombaknya besar, jadi anda harus berhati-hati, tetapi jangan kecewa dulu, di karang pandan pantainya sangat cantik, pasirnya putih dengan pemandangan laut lepas yang menawan.', '-7.749020', '109.017259', 'karangpandan1.jpg', 'lg_a.png'),
(20, 'Pantai Permisan', 'Tambakreja, Cilacap Selatan Ja', 'Pantai Permisan berada di Pulau Nusakambangan, pantai ini masih tetap terjaga keasrian dan kealamianya. Dengan pasirnya yang putih, hembusan angin pantai yang semilir dan deburan ombak yang besar menambah kenyamanan berada di pantai ini.', '-7.746176', '108.883113', 'permisan.jpg', 'lg_a.png');

-- --------------------------------------------------------

--
-- Table structure for table `alam1`
--

CREATE TABLE IF NOT EXISTS `alam1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namaa` varchar(250) NOT NULL,
  `lokasia` text,
  `linka` text NOT NULL,
  `keta` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `alam1`
--

INSERT INTO `alam1` (`id`, `namaa`, `lokasia`, `linka`, `keta`) VALUES
(3, 'hahaokebaik', 'lombok', 'baba.jpg', 'yuhuuu'),
(26, 'aaa', 'aaa', 'Penguins.jpg', 'jkl'),
(28, 'chirt', 'chirt', '0', 'chirt'),
(33, 'sya', 'sya', '0', 'sya'),
(36, 'koe', 'koe', 'paper_stars-1680x1050.jpg', 'koe'),
(38, 'sayaa', 'hkhkh', 'kayu1.jpeg', 'hkhkh'),
(39, 'javaa', 'jva', '300px-Java_logo1.jpg', 'java'),
(40, 'javaaaa', 'jva', '21.jpg', 'java'),
(41, 'chirtt', 'c', '749390-beautiful-tropical-wallpaper.jpg', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `example_4`
--

CREATE TABLE IF NOT EXISTS `example_4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) CHARACTER SET utf8 NOT NULL,
  `url` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=183 ;

--
-- Dumping data for table `example_4`
--

INSERT INTO `example_4` (`id`, `title`, `url`, `priority`) VALUES
(172, 'My house!', 'eb4f-51.jpg', 1),
(173, 'Some flowers', 'ac84-52.jpg', 3),
(176, 'My garden!', '7ad8-63.jpg', 2),
(182, 'Desert\n', '18abf-Desert.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `kode_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(250) CHARACTER SET utf8 NOT NULL,
  `icon` varchar(250) NOT NULL,
  PRIMARY KEY (`kode_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kode_kategori`, `nama_kategori`, `icon`) VALUES
(1, 'alam', 'lg_a.png'),
(7, 'sejarah aja', 'favorite.png'),
(8, 'kuliner', 'lg_k1.png');

-- --------------------------------------------------------

--
-- Table structure for table `kuliner`
--

CREATE TABLE IF NOT EXISTS `kuliner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namak` varchar(250) NOT NULL,
  `lokasik` text,
  `linkk` text NOT NULL,
  `ketk` text NOT NULL,
  `longk` varchar(250) DEFAULT NULL,
  `latk` varchar(250) DEFAULT NULL,
  `icon` varchar(250) DEFAULT 'lg_k.png',
  PRIMARY KEY (`id`),
  UNIQUE KEY `namak` (`namak`),
  UNIQUE KEY `namak_2` (`namak`),
  KEY `namak_3` (`namak`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `kuliner`
--

INSERT INTO `kuliner` (`id`, `namak`, `lokasik`, `linkk`, `ketk`, `longk`, `latk`, `icon`) VALUES
(5, 'RM. Martawi', 'Jl. S. Parman (Pertigaan patung KB) Kabupaten Cilacap', 'rm.martawi_1.PNG', 'Rumah makan ditujukan untuk penyuka kuliner sate ayam. Sate ayam yang dilengkapi dengan bumbu kacang yang sedap dengan racikan yang pas pastinya membuat ketagihan bagi yang memakannya. Khas dari sate ini adalah setiap sate, menggunakan dua tusuk.', '-7.733870', '109.021754', 'lg_k.png'),
(7, 'Martabak Alaska', 'JL.S.Parman Cilacap Tengah', 'Mar_ALASKA.PNG', 'Jika Kamu penyuka jenis makanan manis dan juga legit maka harus mencicipi martabak yang satu ini. Martabak ini disajikan dengan berbagai pilihan toping yang dapat kamu pilih seperti kacang, keju, ketan dan lainnya.', '-7.733870', '109.021754', 'lg_k.png'),
(8, 'Martabak Tempe', 'JL. S.Parman Cilacap', 'Mar_Tempe.PNG', 'Jika kamu penyuka martabak belum lengkap kalo belum nyoba martabak unik ini, yaitu martabak tempe. Martabak ini di buat dengan tambahan tempe kedelai saat kamu menggigit martabak ini, kamu akan merasakan tempe kedelai yang masih kasar dan rasakan sensasinya.', '-7.733870', '109.021754', 'lg_k.png'),
(9, 'Rempeyek Yutuk', 'Tersedia di Rumah Makan Pantai Teluk Penyu Cilacap.', 'rempeyek_yutuk.PNG', 'Rempeyek yutuk ini diolah dari hewan yang mirip dengan kepiting. Yutuk di olah dan dijadikan bahan untuk membuat rempeyek. Rasanya gurih , sangat cocok sebagai pelengkap makanan.', '-7.724890', '108.906502', 'lg_k.png'),
(10, 'Seafood Pantai Teluk Penyu', 'Tersedia di Rumah Makan Pantai Teluk Penyu Cilacap.', 'seafood2.jpg', 'Jika kalian berwisata ke Teluk Penyu Cilacap, Akan banyak warung atau rumah makan yang menyediakan berbagai seafood yang mempunyai cita rasa gurih, enak dan juga bumbunya mantap. ', '-7.733870', '109.021754', 'lg_k.png'),
(11, 'Sop Gurameh', 'Jl. Thamrin Cilacap', 'sopgurame2.jpg', 'Jika kamu sedang berlibur di cilacap kalian bisa menambah daftar list kuliner kalian dengan mencicipi sop segar nan enak ini, Sop Gurameh. Sop ini yang disajikan dengan kuah dari olahan ikan gurameh dan bumbu-bumbu yang pas. Walaupun memakai ikan, sop ini tidak berbau amis.', '-7.733870', '109.021754', 'lg_k.png'),
(12, 'Tempe Mendoan', 'Rumah makan pantai teluk penyu (rekomendasi)', 'tempe_mendoan.PNG', 'Tempe mendoan merupakan makanan khas Cilacap. Terbuat dari bahan baku tempe yang menggunakan adonan tepung beras dan juga tepung kanji ditambah dengan bumbu . Rasanya enak dan gurih. Cocok di santap di pagi hari sebagai cemilan .', '-7.724890', '108.906502', 'lg_k.png'),
(13, 'Bakso Pak Gepeng', 'Jl Pemintalan (menuju pelabuhan Tanjung Intan)', 'pak_gepeng.jpg', 'Tempat makan yang satu ini sangan mudah ditemukan.Berada di emperan swalayan terkenal di kota Cilacap (Rita Pasaraya) yaitu di JL.Jendral Akhmad Yani No.83-85 Cilacap, lokasi tempat makan ini menyediakan banyak sekali pilihan makan. Beberapa diantaranya adalah Bakso urat, Mie ayam, Nasi goreng, Pek-pek Palembang, Rujak, dan berbagai pilihan es buah tersedia disini.', '-7.733870', '109.021754', 'lg_k.png'),
(14, 'Area Pujasera', 'JL.Jendral Akhmad Yani No.83-85 Cilacap', 'area_pujasera.jpg', 'Tempat makan yang satu ini sangan mudah ditemukan.Berada di emperan swalayan terkenal di kota Cilacap (Rita Pasaraya) yaitu di JL.Jendral Akhmad Yani No.83-85 Cilacap, lokasi tempat makan ini menyediakan banyak sekali pilihan makan. Beberapa diantaranya adalah Bakso urat, Mie ayam, Nasi goreng, Pek-pek Palembang, Rujak, dan berbagai pilihan es buah tersedia disini.', '-7.733870', '109.021754', 'lg_k.png');

-- --------------------------------------------------------

--
-- Table structure for table `log_admin`
--

CREATE TABLE IF NOT EXISTS `log_admin` (
  `id_username` int(11) NOT NULL,
  `username` text NOT NULL,
  `proses` text NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `nama_lengkap` text NOT NULL,
  `user` text NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_alam`
--

CREATE TABLE IF NOT EXISTS `log_alam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namaa` varchar(250) NOT NULL,
  `proses` text NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `nama_lengkap` text NOT NULL,
  `user` text NOT NULL,
  `id_username` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_username` (`id_username`),
  KEY `namaa` (`namaa`),
  KEY `namaa_2` (`namaa`),
  KEY `namaa_3` (`namaa`),
  KEY `namaa_4` (`namaa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `log_alam`
--

INSERT INTO `log_alam` (`id`, `namaa`, `proses`, `tanggal`, `waktu`, `nama_lengkap`, `user`, `id_username`) VALUES
(24, 'Pantai Teluk Penyu', 'insert', '2016-12-20', '22:18:52', 'galuhayunovilia', 'admin', 1),
(28, 'Pantai Karang Pandan', 'insert', '2016-12-21', '00:22:21', 'Afdel Rozi', 'editor', 15),
(29, 'Pantai Permisan', 'insert', '2016-12-21', '00:24:46', 'galuhayunovilia', 'admin', 1),
(30, 'Pantai WP', 'delete', '2016-12-21', '00:25:14', 'galuhayunovilia', 'admin', 1),
(31, 'haha', 'insert', '2017-01-15', '22:30:38', 'galuhayunovilia', 'admin', 1),
(32, 'haha', 'delete', '2017-01-15', '22:30:52', 'galuhayunovilia', 'admin', 1),
(33, 'Pantai Teluk Penyu', 'update', '2017-01-15', '23:55:08', 'galuhayunovilia', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log_kategori`
--

CREATE TABLE IF NOT EXISTS `log_kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(250) CHARACTER SET utf8 NOT NULL,
  `proses` text CHARACTER SET utf8 NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `nama_lengkap` text CHARACTER SET utf8 NOT NULL,
  `user` text CHARACTER SET utf8 NOT NULL,
  `id_username` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nama_kategori` (`nama_kategori`,`id_username`),
  KEY `id_username` (`id_username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `log_kategori`
--

INSERT INTO `log_kategori` (`id`, `nama_kategori`, `proses`, `tanggal`, `waktu`, `nama_lengkap`, `user`, `id_username`) VALUES
(5, 'maem', 'delete', '2017-01-15', '22:51:08', 'galuhayunovilia', 'admin', 1),
(6, 'kuliner', 'delete', '2017-01-15', '22:51:24', 'galuhayunovilia', 'admin', 1),
(7, 'sejarah', 'insert', '2017-01-16', '00:02:07', 'galuhayunovilia', 'admin', 1),
(8, 'sejarah aja', 'update', '2017-01-16', '00:06:28', 'galuhayunovilia', 'admin', 1),
(9, 'kuliner', 'insert', '2017-01-25', '19:48:42', 'galuhayunovilia', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log_kuliner`
--

CREATE TABLE IF NOT EXISTS `log_kuliner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namak` varchar(250) DEFAULT NULL,
  `proses` text NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `nama_lengkap` text NOT NULL,
  `user` text NOT NULL,
  `id_username` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_username` (`id_username`),
  KEY `namak` (`namak`),
  KEY `namak_2` (`namak`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `log_kuliner`
--

INSERT INTO `log_kuliner` (`id`, `namak`, `proses`, `tanggal`, `waktu`, `nama_lengkap`, `user`, `id_username`) VALUES
(10, 'Martabak Alaska', 'insert', '2016-12-20', '21:44:56', 'galuhayunovilia', 'admin', 1),
(11, 'Martabak Tempe', 'insert', '2016-12-20', '21:46:02', 'galuhayunovilia', 'admin', 1),
(12, 'Rempeyek Yutuk', 'insert', '2016-12-20', '21:47:35', 'galuhayunovilia', 'admin', 1),
(13, 'Seafood Pantai Teluk Penyu', 'insert', '2016-12-20', '21:48:42', 'galuhayunovilia', 'admin', 1),
(14, 'Sop Gurameh', 'insert', '2016-12-20', '21:49:46', 'galuhayunovilia', 'admin', 1),
(15, 'Tempe Mendoan', 'insert', '2016-12-20', '21:50:28', 'galuhayunovilia', 'admin', 1),
(16, 'Bakso Pak Gepeng', 'insert', '2016-12-20', '21:51:24', 'galuhayunovilia', 'admin', 1),
(17, 'Area Pujasera', 'insert', '2016-12-21', '01:01:01', 'galuhayunovilia', 'admin', 1),
(18, 'RM Martawi', 'update', '2016-12-21', '01:03:00', 'galuhayunovilia', 'admin', 1),
(19, 'RM. Martawi', 'update', '2017-01-15', '23:57:23', 'galuhayunovilia', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log_lokasi`
--

CREATE TABLE IF NOT EXISTS `log_lokasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lokasi` varchar(250) CHARACTER SET utf8 NOT NULL,
  `proses` text CHARACTER SET utf8 NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `nama_lengkap` text CHARACTER SET utf8 NOT NULL,
  `user` text CHARACTER SET utf8 NOT NULL,
  `id_username` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nama_lokasi` (`nama_lokasi`,`id_username`),
  KEY `id_username` (`id_username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `log_lokasi`
--

INSERT INTO `log_lokasi` (`id`, `nama_lokasi`, `proses`, `tanggal`, `waktu`, `nama_lengkap`, `user`, `id_username`) VALUES
(1, 'jkjl', 'insert', '2017-01-25', '20:13:24', 'galuhayunovilia', 'admin', 1),
(2, 'jjk', 'insert', '2017-01-25', '21:29:22', 'galuhayunovilia', 'admin', 1),
(3, 'jkljl', 'insert', '2017-01-25', '21:36:54', 'galuhayunovilia', 'admin', 1),
(4, 'jkljl', 'insert', '2017-01-25', '21:37:45', 'galuhayunovilia', 'admin', 1),
(5, 'm,m,', 'insert', '2017-01-25', '21:50:28', 'galuhayunovilia', 'admin', 1),
(6, 'kjlk', 'insert', '2017-01-25', '22:12:17', 'galuhayunovilia', 'admin', 1),
(7, 'kjkn', 'insert', '2017-01-25', '22:17:23', 'galuhayunovilia', 'admin', 1),
(8, 'baturaden', 'update', '2017-01-25', '22:43:07', 'galuhayunovilia', 'admin', 1),
(9, 'baturaden', 'update', '2017-01-25', '22:45:53', 'galuhayunovilia', 'admin', 1),
(10, 'jjk', 'delete', '2017-01-25', '22:54:58', 'galuhayunovilia', 'admin', 1),
(11, 'jkljl', 'delete', '2017-01-25', '22:55:08', 'galuhayunovilia', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log_profil`
--

CREATE TABLE IF NOT EXISTS `log_profil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) CHARACTER SET utf8 NOT NULL,
  `proses` text NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `nama_lengkap` text NOT NULL,
  `user` text NOT NULL,
  `id_username` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_username` (`id_username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `log_profil`
--

INSERT INTO `log_profil` (`id`, `username`, `proses`, `tanggal`, `waktu`, `nama_lengkap`, `user`, `id_username`) VALUES
(8, 'galuh', 'update', '2016-12-20', '23:39:48', 'galuh', 'admin', 2),
(9, 'admin', 'update', '2017-01-16', '00:14:29', 'galuhayunovilia', 'admin', 1),
(12, 'admin', 'update', '2017-01-16', '00:46:34', 'galuhayunovilia', 'admin', 1),
(13, 'admin', 'update', '2017-01-16', '01:29:24', 'galuhayunovilia', 'admin', 1),
(14, 'admin', 'update', '2017-01-16', '01:59:38', 'galuhayunovilia', 'admin', 1),
(15, 'admin', 'update', '2017-01-16', '02:00:19', 'galuhayunovilia', 'admin', 1),
(16, 'admin', 'update', '2017-01-16', '02:01:56', 'galuhayunovilia', 'admin', 1),
(17, 'admin', 'update', '2017-01-16', '02:06:59', 'galuhayunovilia', 'admin', 1),
(18, 'admin', 'update', '2017-01-16', '02:14:20', 'galuhayunovilia', 'admin', 1),
(19, 'admin', 'update', '2017-01-16', '02:19:05', 'galuhayunovilia', 'admin', 1),
(20, 'admin', 'update', '2017-01-16', '02:20:36', 'galuhayunovilia', 'admin', 1),
(21, 'admin1', 'update', '2017-01-16', '02:21:15', 'galuhayunovilia', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log_wisata`
--

CREATE TABLE IF NOT EXISTS `log_wisata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namaw` varchar(250) DEFAULT NULL,
  `proses` text NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `nama_lengkap` text NOT NULL,
  `user` text NOT NULL,
  `id_username` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_username` (`id_username`),
  KEY `namaw` (`namaw`),
  KEY `namaw_2` (`namaw`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `log_wisata`
--

INSERT INTO `log_wisata` (`id`, `namaw`, `proses`, `tanggal`, `waktu`, `nama_lengkap`, `user`, `id_username`) VALUES
(7, 'Benteng Pendem', 'insert', '2016-12-20', '22:34:57', 'galuhayunovilia', 'admin', 1),
(9, 'Sedekah Laut Khas Cilacap', 'insert', '2016-12-20', '23:36:42', 'galuhayunovilia', 'admin', 1),
(10, 'Hutan Mangrove', 'insert', '2016-12-21', '00:36:28', 'galuhayunovilia', 'admin', 1),
(11, 'Benteng Pendem', 'update', '2016-12-21', '01:02:04', 'galuhayunovilia', 'admin', 1),
(12, 'Benteng Pendem', 'update', '2017-01-15', '23:59:50', 'galuhayunovilia', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nama_lokasi` varchar(250) CHARACTER SET utf8 NOT NULL,
  `lokasi` varchar(30) CHARACTER SET utf8 NOT NULL,
  `keta` text CHARACTER SET utf8 NOT NULL,
  `longtd` varchar(250) CHARACTER SET utf8 NOT NULL,
  `lattd` varchar(250) CHARACTER SET utf8 NOT NULL,
  `linka` text CHARACTER SET utf8 NOT NULL,
  `kode_kategori` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `kode_kategori` (`kode_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama_lokasi`, `lokasi`, `keta`, `longtd`, `lattd`, `linka`, `kode_kategori`) VALUES
(1, 'baturaden', 'baturadennnnnn', 'Purwokerto', '-7.698259', '109.263928', 'baturaden.png', 1),
(17, 'jkljl', 'kjlk', 'mml', '-7.72489', '108.906502', 'bantuan.png', 7),
(18, 'm,m,', 'mn,kml', 'kl', '-7.73387', '109.021754', 'lg_g.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profil_admin`
--

CREATE TABLE IF NOT EXISTS `profil_admin` (
  `id_username` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) CHARACTER SET utf8 NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `password` varchar(240) NOT NULL DEFAULT '123456',
  `user` varchar(15) NOT NULL,
  `akun` varchar(250) DEFAULT NULL,
  `foto` varchar(250) NOT NULL DEFAULT 'profil.jpg',
  `tempat` varchar(250) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `website` varchar(250) DEFAULT NULL,
  `no_telp` varchar(17) DEFAULT NULL,
  PRIMARY KEY (`id_username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `profil_admin`
--

INSERT INTO `profil_admin` (`id_username`, `username`, `nama_lengkap`, `password`, `user`, `akun`, `foto`, `tempat`, `tgl_lahir`, `jk`, `alamat`, `email`, `website`, `no_telp`) VALUES
(1, 'admin1', 'galuhayunovilia', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'aktif', '1b77eaac104929c34c83b17da5f72b7d.jpg', 'cilacap', '2016-11-16', 'pria', 'jawa tengah', 'galuh@gmail.com', 'https://www.galuh.com', '(5555) 555-555-55'),
(2, 'galuh', 'galuh', '7e67f82b2528050191537b600c15f48e', 'admin', 'aktif', 'Tangled_(274).jpg', 'Cilacap', '2016-08-10', 'wanita', 'Jalan merbabu', 'galuh@gmail.com', 'http://www.galuh.com', '(0888) 888-888-'),
(3, 'indra', 'indra', 'e24f6e3ce19ee0728ff1c443e4ff488d', 'editor', 'aktif', '0', 'ggg', '0000-00-00', '0', 'fff', 'galuh@gmail.com', 'http://www.ggg.com', NULL),
(15, 'afdel', 'Afdel Rozi', '44bedf07c00e5fee6317f9f443e2a952', 'editor', 'aktif', 'profil.jpg', 'Pekanbaru', '2016-11-28', 'pria', 'Jl Raya Pekanbaru', 'afdel@gmailcom', 'http://afdel.com', '(0000) 000-0000'),
(18, 'galuh', 'galuhayunovilia', '7e67f82b2528050191537b600c15f48e', 'editor', 'aktif', 'profil.jpg', 'c', '2017-01-04', 'pria', 'kalisahak', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE IF NOT EXISTS `wisata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namaw` varchar(250) NOT NULL,
  `lokasiw` text NOT NULL,
  `linkw` text NOT NULL,
  `ketw` text NOT NULL,
  `longw` varchar(250) NOT NULL,
  `latw` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `namaw` (`namaw`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `namaw`, `lokasiw`, `linkw`, `ketw`, `longw`, `latw`) VALUES
(4, 'Benteng Pendem', 'Benteng Pendem : Pesisir Pantai Teluk Penyu, Kabupaten Cilacap', 'bentengpendem.jpg', 'merupakan wisata sejarah yang sayang untuk dilewatkan jika berada di Cilacap. Benteng yang berada diatas tanah 6.5 Ha ini masih berdiri kokoh sebagai saksi sejarah, begaimana kekuasaan belanda sangat kuat mencakar di Indonesia..', '-7.748364', '109.022889'),
(5, 'Benteng Karang Bolong', 'Jl. Laut Cilacap (Area Benteng Pendem)', 'karangbolong.jpg', 'Benteng Karang Bolong ini memiliki luas sekitar 6000 m2 dan memiliki 4 lantai. 2 lantai berada di atas permukaan tanah sedangkan 2 lantai di bawahnya berada di bawah tanah. Penempakan Benteng Karang Bolong ini terkesan sangat angker, tetapi kemegahan juga masih jelas terlihat, dengan 3 benteng utama, dimana salah satunya adalah benteng yang bertingkat tiga yang memiliki ruang rapat besar.', '-7.749020', '109.017259'),
(6, 'Sedekah Laut Khas Cilacap', 'Pantai Teluk Penyu', 'sedekah_laut.jpg', 'Sedekah laut merupakan acara tahunan dengan melakukan pelarungan sesaji berupa makanan dan kepala kerbau ke tengah laut. Acara ini biasa di laksanakan di teluk penyu, biasanya sebelum di larungkan sesaji di arak terlebih dahulu sepanjang perjalanan menuju teluk penyu.', '-7.749020', '109.017259'),
(7, 'Hutan Mangrove', 'Kampung Laut. ', 'hutan_mangrove.jpg', 'Destinasi tempat wisata di Cilacap ada banyak, mulai dari wisata pantai sampai dengan wisata sejarah peninggalan jajahan belanda yang masih terjaga dengan baik karena dikelola oleh pemerintah setempat.', '-7.748364', '109.022889');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log_alam`
--
ALTER TABLE `log_alam`
  ADD CONSTRAINT `log_alam_ibfk_1` FOREIGN KEY (`id_username`) REFERENCES `profil_admin` (`id_username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `log_kategori`
--
ALTER TABLE `log_kategori`
  ADD CONSTRAINT `log_kategori_ibfk_1` FOREIGN KEY (`id_username`) REFERENCES `profil_admin` (`id_username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `log_kuliner`
--
ALTER TABLE `log_kuliner`
  ADD CONSTRAINT `log_kuliner_ibfk_1` FOREIGN KEY (`id_username`) REFERENCES `profil_admin` (`id_username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `log_lokasi`
--
ALTER TABLE `log_lokasi`
  ADD CONSTRAINT `log_lokasi_ibfk_1` FOREIGN KEY (`id_username`) REFERENCES `profil_admin` (`id_username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `log_profil`
--
ALTER TABLE `log_profil`
  ADD CONSTRAINT `log_profil_ibfk_1` FOREIGN KEY (`id_username`) REFERENCES `profil_admin` (`id_username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `log_wisata`
--
ALTER TABLE `log_wisata`
  ADD CONSTRAINT `log_wisata_ibfk_1` FOREIGN KEY (`id_username`) REFERENCES `profil_admin` (`id_username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `log_wisata_ibfk_2` FOREIGN KEY (`namaw`) REFERENCES `wisata` (`namaw`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD CONSTRAINT `lokasi_ibfk_1` FOREIGN KEY (`kode_kategori`) REFERENCES `kategori` (`kode_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
