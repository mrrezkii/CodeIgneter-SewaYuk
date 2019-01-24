-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 Des 2018 pada 02.23
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `foto_barang` varchar(200) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `tanggal_masuk` datetime NOT NULL,
  `status_barang` tinyint(1) NOT NULL,
  `status_promosi` tinyint(1) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `id_jenis`, `nama_barang`, `foto_barang`, `harga_barang`, `deskripsi_barang`, `tanggal_masuk`, `status_barang`, `status_promosi`, `id_user`) VALUES
(1, 2, 'Yamaha Fino 125 Grande', 'Motor Vario.jpg', 100000, 'Barang merupakan stok baru dengan kualitas prima', '2018-11-01 10:38:15', 1, 0, 16),
(2, 2, 'Yamaha Vixion', 'Suzuki Nex.jpg', 250000, 'Barang bagus', '2010-10-14 16:32:48', 1, 1, 2),
(3, 1, 'Tenda 4x6 meter', 'Tenda 4x6 Meter.jpg', 8000000, 'tenda dalam kondisi bagus, awet dan tahan lama', '2009-11-05 12:23:49', 1, 0, 1),
(4, 1, 'Tenda Anak-Anak', 'Tenda Anak-Anak.jpg', 300000, 'Barang berukuran 3x3 dengan kondisi barang bagus', '2010-12-04 11:23:50', 1, 1, 12),
(5, 2, 'Honda Vario', 'Motor Vario.jpg', 250000, 'Barang merupakan kondisi baik dan bagus dengan perawatna rutin setiap saat', '2008-04-15 16:32:48', 1, 1, 13),
(6, 3, 'Saloon ', 'Saloon.jpg', 80000, 'Saloon ukuran sedang dengan kualitas suara jernih, bagus dan dapat dipakai acara apapun', '2015-08-07 09:26:40', 0, 0, 21),
(7, 3, 'Mixing Console', 'Mixing Console.jpg', 85000, 'Mixing Console untuk pengaturan sound amplifier, kondisi bagus, semua tombol dan fitur dapat berfungsi baik', '2014-01-27 11:34:52', 0, 0, 7),
(8, 3, 'Mic Karaoke', 'Mic Karaoke.jpg', 50000, 'Mic dengan performa suara output jernih, bagus, tidak mudah rusak', '2012-03-02 19:29:21', 1, 0, 17),
(9, 6, 'Kamera Sony Mirrorless', 'Kamera Sony Mirrorless.jpg', 75000, 'Kamera Sony Mirrorless E-mount a5000 dengan Sensor APS-C. Kamera kecil dengan menghasilkan gambar jernih', '2011-11-13 12:22:08', 1, 1, 11),
(10, 6, 'Nikon Coolpix P1000', 'Nikon Coolpix P1000, kamera superzoom dengan rentang zoom optis 125x.jpg', 200000, 'Nikon Coolpix P1000, kamera superzoom dengan rentang zoom optis 125x. Menghasilkan gambar dengan bagus dan jernih tanpa noise', '2011-10-10 12:30:21', 1, 0, 4),
(11, 6, 'Nikon D3400', 'Nikon D3400 Kit AF-P 18-55mm VR.jpg', 150000, 'Nikon D3400 Kit AF-P 18-55mm VR, menghasilkan gambar bagus dan jernih dengan kualitas maksimal', '2016-07-02 11:30:30', 0, 0, 15),
(12, 5, 'Nasi Kuning Mbok Ale', 'Nasi Kuning.jpg', 450000, 'Nasi kuning mbok ale, dibuat dari aneka rempah-rempah pilihan, dimasak dengan sepenuh hati sehingga memunculkan cita rasa nusantara yang beraneka ragam dalam sat kesatuan utuh yang menghasilkan kelezatan tiada tara', '2018-11-15 10:35:35', 0, 0, 10),
(13, 6, 'Goclever DVR Extreme Pro 40k', 'Goclever DVR Extreme Pro 40k.jpeg', 150000, 'Goclever DVR Extreme Pro 40k, merupakan kamera yang dipasang di atas kepala, menghasilkan gambar bagus dan jernih', '2018-11-14 04:25:43', 1, 0, 5),
(14, 1, 'Tenda Camping Original', 'Tenda camping originial.jpg', 1000000, 'Tenda Camping ini berukuran 5x5, cukup besar dan dapat dibongkar pasang', '2017-03-21 13:30:28', 1, 1, 17),
(15, 1, 'Tenda stand', 'Tenda Stand.jpg', 300000, 'Tenda ukuran 3x3 meter bisa dipakai unutk berjualan dalam acara-acara besar', '2012-11-05 16:30:23', 1, 0, 12),
(16, 2, 'Motor Supra X', 'Supra X.jpg', 650000, 'Motor supra x tersedia dalam kondisi bagus dan prima, siap pakai dengan perawatan rutin membuat motor tidak mudah rusak', '2015-04-03 17:30:35', 0, 0, 6),
(17, 4, 'Baju Bajak Laut', 'Bajak Laut.jpg', 100000, 'Kostum bajak laut, bersih rapi dan wangi serta siap pakai', '2015-10-13 08:28:20', 1, 1, 4),
(18, 4, 'Kostum India', 'india.png', 150000, 'Kostum siap pakai asli dari India. Menggunakannya hati-hati karena kain sari dapat mudah robek', '2014-01-07 09:32:32', 1, 1, 3),
(19, 5, 'Sauce Dish', 'Sauce Dish.jpg', 40000, 'Sauce dish untuk wadah saus seperti kecap, sambal dan sebagainya. Barang merupakan kualitas cina yang meniru seni dinasti Ming', '2015-09-01 15:28:50', 0, 0, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_barang`
--

INSERT INTO `jenis_barang` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Peralatan Kemah'),
(2, 'Kendaraan'),
(3, 'Peralatan Audio'),
(4, 'Kostum'),
(5, 'Alat Catering'),
(6, 'Kamera');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id` varchar(4) NOT NULL,
  `id_prov` varchar(2) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `id_prov`, `nama`) VALUES
('1101', '11', 'Kab. Simeulue'),
('1102', '11', 'Kab. Aceh Singkil'),
('1103', '11', 'Kab. Aceh Selatan'),
('1104', '11', 'Kab. Aceh Tenggara'),
('1105', '11', 'Kab. Aceh Timur'),
('1106', '11', 'Kab. Aceh Tengah'),
('1107', '11', 'Kab. Aceh Barat'),
('1108', '11', 'Kab. Aceh Besar'),
('1109', '11', 'Kab. Pidie'),
('1110', '11', 'Kab. Bireuen'),
('1111', '11', 'Kab. Aceh Utara'),
('1112', '11', 'Kab. Aceh Barat Daya'),
('1113', '11', 'Kab. Gayo Lues'),
('1114', '11', 'Kab. Aceh Tamiang'),
('1115', '11', 'Kab. Nagan Raya'),
('1116', '11', 'Kab. Aceh Jaya'),
('1117', '11', 'Kab. Bener Meriah'),
('1118', '11', 'Kab. Pidie Jaya'),
('1171', '11', 'Kota Banda Aceh'),
('1172', '11', 'Kota Sabang'),
('1173', '11', 'Kota Langsa'),
('1174', '11', 'Kota Lhokseumawe'),
('1175', '11', 'Kota Subulussalam'),
('1201', '12', 'Kab. Nias'),
('1202', '12', 'Kab. Mandailing Natal'),
('1203', '12', 'Kab. Tapanuli Selatan'),
('1204', '12', 'Kab. Tapanuli Tengah'),
('1205', '12', 'Kab. Tapanuli Utara'),
('1206', '12', 'Kab. Toba Samosir'),
('1207', '12', 'Kab. Labuhan Batu'),
('1208', '12', 'Kab. Asahan'),
('1209', '12', 'Kab. Simalungun'),
('1210', '12', 'Kab. Dairi'),
('1211', '12', 'Kab. Karo'),
('1212', '12', 'Kab. Deli Serdang'),
('1213', '12', 'Kab. Langkat'),
('1214', '12', 'Kab. Nias Selatan'),
('1215', '12', 'Kab. Humbang Hasundutan'),
('1216', '12', 'Kab. Pakpak Bharat'),
('1217', '12', 'Kab. Samosir'),
('1218', '12', 'Kab. Serdang Bedagai'),
('1219', '12', 'Kab. Batu Bara'),
('1220', '12', 'Kab. Padang Lawas Utara'),
('1221', '12', 'Kab. Padang Lawas'),
('1222', '12', 'Kab. Labuhan Batu Selatan'),
('1223', '12', 'Kab. Labuhan Batu Utara'),
('1224', '12', 'Kab. Nias Utara'),
('1225', '12', 'Kab. Nias Barat'),
('1271', '12', 'Kota Sibolga'),
('1272', '12', 'Kota Tanjung Balai'),
('1273', '12', 'Kota Pematang Siantar'),
('1274', '12', 'Kota Tebing Tinggi'),
('1275', '12', 'Kota Medan'),
('1276', '12', 'Kota Binjai'),
('1277', '12', 'Kota Padangsidimpuan'),
('1278', '12', 'Kota Gunungsitoli'),
('1301', '13', 'Kab. Kepulauan Mentawai'),
('1302', '13', 'Kab. Pesisir Selatan'),
('1303', '13', 'Kab. Solok'),
('1304', '13', 'Kab. Sijunjung'),
('1305', '13', 'Kab. Tanah Datar'),
('1306', '13', 'Kab. Padang Pariaman'),
('1307', '13', 'Kab. Agam'),
('1308', '13', 'Kab. Lima Puluh Kota'),
('1309', '13', 'Kab. Pasaman'),
('1310', '13', 'Kab. Solok Selatan'),
('1311', '13', 'Kab. Dharmasraya'),
('1312', '13', 'Kab. Pasaman Barat'),
('1371', '13', 'Kota Padang'),
('1372', '13', 'Kota Solok'),
('1373', '13', 'Kota Sawah Lunto'),
('1374', '13', 'Kota Padang Panjang'),
('1375', '13', 'Kota Bukittinggi'),
('1376', '13', 'Kota Payakumbuh'),
('1377', '13', 'Kota Pariaman'),
('1401', '14', 'Kab. Kuantan Singingi'),
('1402', '14', 'Kab. Indragiri Hulu'),
('1403', '14', 'Kab. Indragiri Hilir'),
('1404', '14', 'Kab. Pelalawan'),
('1405', '14', 'Kab. S I A K'),
('1406', '14', 'Kab. Kampar'),
('1407', '14', 'Kab. Rokan Hulu'),
('1408', '14', 'Kab. Bengkalis'),
('1409', '14', 'Kab. Rokan Hilir'),
('1410', '14', 'Kab. Kepulauan Meranti'),
('1471', '14', 'Kota Pekanbaru'),
('1473', '14', 'Kota D U M A I'),
('1501', '15', 'Kab. Kerinci'),
('1502', '15', 'Kab. Merangin'),
('1503', '15', 'Kab. Sarolangun'),
('1504', '15', 'Kab. Batang Hari'),
('1505', '15', 'Kab. Muaro Jambi'),
('1506', '15', 'Kab. Tanjung Jabung Timur'),
('1507', '15', 'Kab. Tanjung Jabung Barat'),
('1508', '15', 'Kab. Tebo'),
('1509', '15', 'Kab. Bungo'),
('1571', '15', 'Kota Jambi'),
('1572', '15', 'Kota Sungai Penuh'),
('1601', '16', 'Kab. Ogan Komering Ulu'),
('1602', '16', 'Kab. Ogan Komering Ilir'),
('1603', '16', 'Kab. Muara Enim'),
('1604', '16', 'Kab. Lahat'),
('1605', '16', 'Kab. Musi Rawas'),
('1606', '16', 'Kab. Musi Banyuasin'),
('1607', '16', 'Kab. Banyu Asin'),
('1608', '16', 'Kab. Ogan Komering Ulu Selatan'),
('1609', '16', 'Kab. Ogan Komering Ulu Timur'),
('1610', '16', 'Kab. Ogan Ilir'),
('1611', '16', 'Kab. Empat Lawang'),
('1671', '16', 'Kota Palembang'),
('1672', '16', 'Kota Prabumulih'),
('1673', '16', 'Kota Pagar Alam'),
('1674', '16', 'Kota Lubuklinggau'),
('1701', '17', 'Kab. Bengkulu Selatan'),
('1702', '17', 'Kab. Rejang Lebong'),
('1703', '17', 'Kab. Bengkulu Utara'),
('1704', '17', 'Kab. Kaur'),
('1705', '17', 'Kab. Seluma'),
('1706', '17', 'Kab. Mukomuko'),
('1707', '17', 'Kab. Lebong'),
('1708', '17', 'Kab. Kepahiang'),
('1709', '17', 'Kab. Bengkulu Tengah'),
('1771', '17', 'Kota Bengkulu'),
('1801', '18', 'Kab. Lampung Barat'),
('1802', '18', 'Kab. Tanggamus'),
('1803', '18', 'Kab. Lampung Selatan'),
('1804', '18', 'Kab. Lampung Timur'),
('1805', '18', 'Kab. Lampung Tengah'),
('1806', '18', 'Kab. Lampung Utara'),
('1807', '18', 'Kab. Way Kanan'),
('1808', '18', 'Kab. Tulangbawang'),
('1809', '18', 'Kab. Pesawaran'),
('1810', '18', 'Kab. Pringsewu'),
('1811', '18', 'Kab. Mesuji'),
('1812', '18', 'Kab. Tulang Bawang Barat'),
('1813', '18', 'Kab. Pesisir Barat'),
('1871', '18', 'Kota Bandar Lampung'),
('1872', '18', 'Kota Metro'),
('1901', '19', 'Kab. Bangka'),
('1902', '19', 'Kab. Belitung'),
('1903', '19', 'Kab. Bangka Barat'),
('1904', '19', 'Kab. Bangka Tengah'),
('1905', '19', 'Kab. Bangka Selatan'),
('1906', '19', 'Kab. Belitung Timur'),
('1971', '19', 'Kota Pangkal Pinang'),
('2101', '21', 'Kab. Karimun'),
('2102', '21', 'Kab. Bintan'),
('2103', '21', 'Kab. Natuna'),
('2104', '21', 'Kab. Lingga'),
('2105', '21', 'Kab. Kepulauan Anambas'),
('2171', '21', 'Kota B A T A M'),
('2172', '21', 'Kota Tanjung Pinang'),
('3101', '31', 'Kab. Kepulauan Seribu'),
('3171', '31', 'Kota Jakarta Selatan'),
('3172', '31', 'Kota Jakarta Timur'),
('3173', '31', 'Kota Jakarta Pusat'),
('3174', '31', 'Kota Jakarta Barat'),
('3175', '31', 'Kota Jakarta Utara'),
('3201', '32', 'Kab. Bogor'),
('3202', '32', 'Kab. Sukabumi'),
('3203', '32', 'Kab. Cianjur'),
('3204', '32', 'Kab. Bandung'),
('3205', '32', 'Kab. Garut'),
('3206', '32', 'Kab. Tasikmalaya'),
('3207', '32', 'Kab. Ciamis'),
('3208', '32', 'Kab. Kuningan'),
('3209', '32', 'Kab. Cirebon'),
('3210', '32', 'Kab. Majalengka'),
('3211', '32', 'Kab. Sumedang'),
('3212', '32', 'Kab. Indramayu'),
('3213', '32', 'Kab. Subang'),
('3214', '32', 'Kab. Purwakarta'),
('3215', '32', 'Kab. Karawang'),
('3216', '32', 'Kab. Bekasi'),
('3217', '32', 'Kab. Bandung Barat'),
('3218', '32', 'Kab. Pangandaran'),
('3271', '32', 'Kota Bogor'),
('3272', '32', 'Kota Sukabumi'),
('3273', '32', 'Kota Bandung'),
('3274', '32', 'Kota Cirebon'),
('3275', '32', 'Kota Bekasi'),
('3276', '32', 'Kota Depok'),
('3277', '32', 'Kota Cimahi'),
('3278', '32', 'Kota Tasikmalaya'),
('3279', '32', 'Kota Banjar'),
('3301', '33', 'Kab. Cilacap'),
('3302', '33', 'Kab. Banyumas'),
('3303', '33', 'Kab. Purbalingga'),
('3304', '33', 'Kab. Banjarnegara'),
('3305', '33', 'Kab. Kebumen'),
('3306', '33', 'Kab. Purworejo'),
('3307', '33', 'Kab. Wonosobo'),
('3308', '33', 'Kab. Magelang'),
('3309', '33', 'Kab. Boyolali'),
('3310', '33', 'Kab. Klaten'),
('3311', '33', 'Kab. Sukoharjo'),
('3312', '33', 'Kab. Wonogiri'),
('3313', '33', 'Kab. Karanganyar'),
('3314', '33', 'Kab. Sragen'),
('3315', '33', 'Kab. Grobogan'),
('3316', '33', 'Kab. Blora'),
('3317', '33', 'Kab. Rembang'),
('3318', '33', 'Kab. Pati'),
('3319', '33', 'Kab. Kudus'),
('3320', '33', 'Kab. Jepara'),
('3321', '33', 'Kab. Demak'),
('3322', '33', 'Kab. Semarang'),
('3323', '33', 'Kab. Temanggung'),
('3324', '33', 'Kab. Kendal'),
('3325', '33', 'Kab. Batang'),
('3326', '33', 'Kab. Pekalongan'),
('3327', '33', 'Kab. Pemalang'),
('3328', '33', 'Kab. Tegal'),
('3329', '33', 'Kab. Brebes'),
('3371', '33', 'Kota Magelang'),
('3372', '33', 'Kota Surakarta'),
('3373', '33', 'Kota Salatiga'),
('3374', '33', 'Kota Semarang'),
('3375', '33', 'Kota Pekalongan'),
('3376', '33', 'Kota Tegal'),
('3401', '34', 'Kab. Kulon Progo'),
('3402', '34', 'Kab. Bantul'),
('3403', '34', 'Kab. Gunung Kidul'),
('3404', '34', 'Kab. Sleman'),
('3471', '34', 'Kota Yogyakarta'),
('3501', '35', 'Kab. Pacitan'),
('3502', '35', 'Kab. Ponorogo'),
('3503', '35', 'Kab. Trenggalek'),
('3504', '35', 'Kab. Tulungagung'),
('3505', '35', 'Kab. Blitar'),
('3506', '35', 'Kab. Kediri'),
('3507', '35', 'Kab. Malang'),
('3508', '35', 'Kab. Lumajang'),
('3509', '35', 'Kab. Jember'),
('3510', '35', 'Kab. Banyuwangi'),
('3511', '35', 'Kab. Bondowoso'),
('3512', '35', 'Kab. Situbondo'),
('3513', '35', 'Kab. Probolinggo'),
('3514', '35', 'Kab. Pasuruan'),
('3515', '35', 'Kab. Sidoarjo'),
('3516', '35', 'Kab. Mojokerto'),
('3517', '35', 'Kab. Jombang'),
('3518', '35', 'Kab. Nganjuk'),
('3519', '35', 'Kab. Madiun'),
('3520', '35', 'Kab. Magetan'),
('3521', '35', 'Kab. Ngawi'),
('3522', '35', 'Kab. Bojonegoro'),
('3523', '35', 'Kab. Tuban'),
('3524', '35', 'Kab. Lamongan'),
('3525', '35', 'Kab. Gresik'),
('3526', '35', 'Kab. Bangkalan'),
('3527', '35', 'Kab. Sampang'),
('3528', '35', 'Kab. Pamekasan'),
('3529', '35', 'Kab. Sumenep'),
('3571', '35', 'Kota Kediri'),
('3572', '35', 'Kota Blitar'),
('3573', '35', 'Kota Malang'),
('3574', '35', 'Kota Probolinggo'),
('3575', '35', 'Kota Pasuruan'),
('3576', '35', 'Kota Mojokerto'),
('3577', '35', 'Kota Madiun'),
('3578', '35', 'Kota Surabaya'),
('3579', '35', 'Kota Batu'),
('3601', '36', 'Kab. Pandeglang'),
('3602', '36', 'Kab. Lebak'),
('3603', '36', 'Kab. Tangerang'),
('3604', '36', 'Kab. Serang'),
('3671', '36', 'Kota Tangerang'),
('3672', '36', 'Kota Cilegon'),
('3673', '36', 'Kota Serang'),
('3674', '36', 'Kota Tangerang Selatan'),
('5101', '51', 'Kab. Jembrana'),
('5102', '51', 'Kab. Tabanan'),
('5103', '51', 'Kab. Badung'),
('5104', '51', 'Kab. Gianyar'),
('5105', '51', 'Kab. Klungkung'),
('5106', '51', 'Kab. Bangli'),
('5107', '51', 'Kab. Karang Asem'),
('5108', '51', 'Kab. Buleleng'),
('5171', '51', 'Kota Denpasar'),
('5201', '52', 'Kab. Lombok Barat'),
('5202', '52', 'Kab. Lombok Tengah'),
('5203', '52', 'Kab. Lombok Timur'),
('5204', '52', 'Kab. Sumbawa'),
('5205', '52', 'Kab. Dompu'),
('5206', '52', 'Kab. Bima'),
('5207', '52', 'Kab. Sumbawa Barat'),
('5208', '52', 'Kab. Lombok Utara'),
('5271', '52', 'Kota Mataram'),
('5272', '52', 'Kota Bima'),
('5301', '53', 'Kab. Sumba Barat'),
('5302', '53', 'Kab. Sumba Timur'),
('5303', '53', 'Kab. Kupang'),
('5304', '53', 'Kab. Timor Tengah Selatan'),
('5305', '53', 'Kab. Timor Tengah Utara'),
('5306', '53', 'Kab. Belu'),
('5307', '53', 'Kab. Alor'),
('5308', '53', 'Kab. Lembata'),
('5309', '53', 'Kab. Flores Timur'),
('5310', '53', 'Kab. Sikka'),
('5311', '53', 'Kab. Ende'),
('5312', '53', 'Kab. Ngada'),
('5313', '53', 'Kab. Manggarai'),
('5314', '53', 'Kab. Rote Ndao'),
('5315', '53', 'Kab. Manggarai Barat'),
('5316', '53', 'Kab. Sumba Tengah'),
('5317', '53', 'Kab. Sumba Barat Daya'),
('5318', '53', 'Kab. Nagekeo'),
('5319', '53', 'Kab. Manggarai Timur'),
('5320', '53', 'Kab. Sabu Raijua'),
('5371', '53', 'Kota Kupang'),
('6101', '61', 'Kab. Sambas'),
('6102', '61', 'Kab. Bengkayang'),
('6103', '61', 'Kab. Landak'),
('6104', '61', 'Kab. Pontianak'),
('6105', '61', 'Kab. Sanggau'),
('6106', '61', 'Kab. Ketapang'),
('6107', '61', 'Kab. Sintang'),
('6108', '61', 'Kab. Kapuas Hulu'),
('6109', '61', 'Kab. Sekadau'),
('6110', '61', 'Kab. Melawi'),
('6111', '61', 'Kab. Kayong Utara'),
('6112', '61', 'Kab. Kubu Raya'),
('6171', '61', 'Kota Pontianak'),
('6172', '61', 'Kota Singkawang'),
('6201', '62', 'Kab. Kotawaringin Barat'),
('6202', '62', 'Kab. Kotawaringin Timur'),
('6203', '62', 'Kab. Kapuas'),
('6204', '62', 'Kab. Barito Selatan'),
('6205', '62', 'Kab. Barito Utara'),
('6206', '62', 'Kab. Sukamara'),
('6207', '62', 'Kab. Lamandau'),
('6208', '62', 'Kab. Seruyan'),
('6209', '62', 'Kab. Katingan'),
('6210', '62', 'Kab. Pulang Pisau'),
('6211', '62', 'Kab. Gunung Mas'),
('6212', '62', 'Kab. Barito Timur'),
('6213', '62', 'Kab. Murung Raya'),
('6271', '62', 'Kota Palangka Raya'),
('6301', '63', 'Kab. Tanah Laut'),
('6302', '63', 'Kab. Kota Baru'),
('6303', '63', 'Kab. Banjar'),
('6304', '63', 'Kab. Barito Kuala'),
('6305', '63', 'Kab. Tapin'),
('6306', '63', 'Kab. Hulu Sungai Selatan'),
('6307', '63', 'Kab. Hulu Sungai Tengah'),
('6308', '63', 'Kab. Hulu Sungai Utara'),
('6309', '63', 'Kab. Tabalong'),
('6310', '63', 'Kab. Tanah Bumbu'),
('6311', '63', 'Kab. Balangan'),
('6371', '63', 'Kota Banjarmasin'),
('6372', '63', 'Kota Banjar Baru'),
('6401', '64', 'Kab. Paser'),
('6402', '64', 'Kab. Kutai Barat'),
('6403', '64', 'Kab. Kutai Kartanegara'),
('6404', '64', 'Kab. Kutai Timur'),
('6405', '64', 'Kab. Berau'),
('6409', '64', 'Kab. Penajam Paser Utara'),
('6471', '64', 'Kota Balikpapan'),
('6472', '64', 'Kota Samarinda'),
('6474', '64', 'Kota Bontang'),
('6501', '65', 'Kab. Malinau'),
('6502', '65', 'Kab. Bulungan'),
('6503', '65', 'Kab. Tana Tidung'),
('6504', '65', 'Kab. Nunukan'),
('6571', '65', 'Kota Tarakan'),
('7101', '71', 'Kab. Bolaang Mongondow'),
('7102', '71', 'Kab. Minahasa'),
('7103', '71', 'Kab. Kepulauan Sangihe'),
('7104', '71', 'Kab. Kepulauan Talaud'),
('7105', '71', 'Kab. Minahasa Selatan'),
('7106', '71', 'Kab. Minahasa Utara'),
('7107', '71', 'Kab. Bolaang Mongondow Utara'),
('7108', '71', 'Kab. Siau Tagulandang Biaro'),
('7109', '71', 'Kab. Minahasa Tenggara'),
('7110', '71', 'Kab. Bolaang Mongondow Selatan'),
('7111', '71', 'Kab. Bolaang Mongondow Timur'),
('7171', '71', 'Kota Manado'),
('7172', '71', 'Kota Bitung'),
('7173', '71', 'Kota Tomohon'),
('7174', '71', 'Kota Kotamobagu'),
('7201', '72', 'Kab. Banggai Kepulauan'),
('7202', '72', 'Kab. Banggai'),
('7203', '72', 'Kab. Morowali'),
('7204', '72', 'Kab. Poso'),
('7205', '72', 'Kab. Donggala'),
('7206', '72', 'Kab. Toli-toli'),
('7207', '72', 'Kab. Buol'),
('7208', '72', 'Kab. Parigi Moutong'),
('7209', '72', 'Kab. Tojo Una-una'),
('7210', '72', 'Kab. Sigi'),
('7271', '72', 'Kota Palu'),
('7301', '73', 'Kab. Kepulauan Selayar'),
('7302', '73', 'Kab. Bulukumba'),
('7303', '73', 'Kab. Bantaeng'),
('7304', '73', 'Kab. Jeneponto'),
('7305', '73', 'Kab. Takalar'),
('7306', '73', 'Kab. Gowa'),
('7307', '73', 'Kab. Sinjai'),
('7308', '73', 'Kab. Maros'),
('7309', '73', 'Kab. Pangkajene Dan Kepulauan'),
('7310', '73', 'Kab. Barru'),
('7311', '73', 'Kab. Bone'),
('7312', '73', 'Kab. Soppeng'),
('7313', '73', 'Kab. Wajo'),
('7314', '73', 'Kab. Sidenreng Rappang'),
('7315', '73', 'Kab. Pinrang'),
('7316', '73', 'Kab. Enrekang'),
('7317', '73', 'Kab. Luwu'),
('7318', '73', 'Kab. Tana Toraja'),
('7322', '73', 'Kab. Luwu Utara'),
('7325', '73', 'Kab. Luwu Timur'),
('7326', '73', 'Kab. Toraja Utara'),
('7371', '73', 'Kota Makassar'),
('7372', '73', 'Kota Parepare'),
('7373', '73', 'Kota Palopo'),
('7401', '74', 'Kab. Buton'),
('7402', '74', 'Kab. Muna'),
('7403', '74', 'Kab. Konawe'),
('7404', '74', 'Kab. Kolaka'),
('7405', '74', 'Kab. Konawe Selatan'),
('7406', '74', 'Kab. Bombana'),
('7407', '74', 'Kab. Wakatobi'),
('7408', '74', 'Kab. Kolaka Utara'),
('7409', '74', 'Kab. Buton Utara'),
('7410', '74', 'Kab. Konawe Utara'),
('7471', '74', 'Kota Kendari'),
('7472', '74', 'Kota Baubau'),
('7501', '75', 'Kab. Boalemo'),
('7502', '75', 'Kab. Gorontalo'),
('7503', '75', 'Kab. Pohuwato'),
('7504', '75', 'Kab. Bone Bolango'),
('7505', '75', 'Kab. Gorontalo Utara'),
('7571', '75', 'Kota Gorontalo'),
('7601', '76', 'Kab. Majene'),
('7602', '76', 'Kab. Polewali Mandar'),
('7603', '76', 'Kab. Mamasa'),
('7604', '76', 'Kab. Mamuju'),
('7605', '76', 'Kab. Mamuju Utara'),
('8101', '81', 'Kab. Maluku Tenggara Barat'),
('8102', '81', 'Kab. Maluku Tenggara'),
('8103', '81', 'Kab. Maluku Tengah'),
('8104', '81', 'Kab. Buru'),
('8105', '81', 'Kab. Kepulauan Aru'),
('8106', '81', 'Kab. Seram Bagian Barat'),
('8107', '81', 'Kab. Seram Bagian Timur'),
('8108', '81', 'Kab. Maluku Barat Daya'),
('8109', '81', 'Kab. Buru Selatan'),
('8171', '81', 'Kota Ambon'),
('8172', '81', 'Kota Tual'),
('8201', '82', 'Kab. Halmahera Barat'),
('8202', '82', 'Kab. Halmahera Tengah'),
('8203', '82', 'Kab. Kepulauan Sula'),
('8204', '82', 'Kab. Halmahera Selatan'),
('8205', '82', 'Kab. Halmahera Utara'),
('8206', '82', 'Kab. Halmahera Timur'),
('8207', '82', 'Kab. Pulau Morotai'),
('8271', '82', 'Kota Ternate'),
('8272', '82', 'Kota Tidore Kepulauan'),
('9101', '91', 'Kab. Fakfak'),
('9102', '91', 'Kab. Kaimana'),
('9103', '91', 'Kab. Teluk Wondama'),
('9104', '91', 'Kab. Teluk Bintuni'),
('9105', '91', 'Kab. Manokwari'),
('9106', '91', 'Kab. Sorong Selatan'),
('9107', '91', 'Kab. Sorong'),
('9108', '91', 'Kab. Raja Ampat'),
('9109', '91', 'Kab. Tambrauw'),
('9110', '91', 'Kab. Maybrat'),
('9171', '91', 'Kota Sorong'),
('9401', '94', 'Kab. Merauke'),
('9402', '94', 'Kab. Jayawijaya'),
('9403', '94', 'Kab. Jayapura'),
('9404', '94', 'Kab. Nabire'),
('9408', '94', 'Kab. Kepulauan Yapen'),
('9409', '94', 'Kab. Biak Numfor'),
('9410', '94', 'Kab. Paniai'),
('9411', '94', 'Kab. Puncak Jaya'),
('9412', '94', 'Kab. Mimika'),
('9413', '94', 'Kab. Boven Digoel'),
('9414', '94', 'Kab. Mappi'),
('9415', '94', 'Kab. Asmat'),
('9416', '94', 'Kab. Yahukimo'),
('9417', '94', 'Kab. Pegunungan Bintang'),
('9418', '94', 'Kab. Tolikara'),
('9419', '94', 'Kab. Sarmi'),
('9420', '94', 'Kab. Keerom'),
('9426', '94', 'Kab. Waropen'),
('9427', '94', 'Kab. Supiori'),
('9428', '94', 'Kab. Mamberamo Raya'),
('9429', '94', 'Kab. Nduga'),
('9430', '94', 'Kab. Lanny Jaya'),
('9431', '94', 'Kab. Mamberamo Tengah'),
('9432', '94', 'Kab. Yalimo'),
('9433', '94', 'Kab. Puncak'),
('9434', '94', 'Kab. Dogiyai'),
('9435', '94', 'Kab. Intan Jaya'),
('9436', '94', 'Kab. Deiyai'),
('9471', '94', 'Kota Jayapura');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id` varchar(2) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id`, `nama`) VALUES
('11', 'Aceh'),
('12', 'Sumatera Utara'),
('13', 'Sumatera Barat'),
('14', 'Riau'),
('15', 'Jambi'),
('16', 'Sumatera Selatan'),
('17', 'Bengkulu'),
('18', 'Lampung'),
('19', 'Kepulauan Bangka Belitung'),
('21', 'Kepulauan Riau'),
('31', 'Dki Jakarta'),
('32', 'Jawa Barat'),
('33', 'Jawa Tengah'),
('34', 'Di Yogyakarta'),
('35', 'Jawa Timur'),
('36', 'Banten'),
('51', 'Bali'),
('52', 'Nusa Tenggara Barat'),
('53', 'Nusa Tenggara Timur'),
('61', 'Kalimantan Barat'),
('62', 'Kalimantan Tengah'),
('63', 'Kalimantan Selatan'),
('64', 'Kalimantan Timur'),
('65', 'Kalimantan Utara'),
('71', 'Sulawesi Utara'),
('72', 'Sulawesi Tengah'),
('73', 'Sulawesi Selatan'),
('74', 'Sulawesi Tenggara'),
('75', 'Gorontalo'),
('76', 'Sulawesi Barat'),
('81', 'Maluku'),
('82', 'Maluku Utara'),
('91', 'Papua Barat'),
('94', 'Papua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_penyewa` int(11) NOT NULL,
  `tanggal_sewa` datetime NOT NULL,
  `waktu_kembali` date NOT NULL,
  `status_transaksi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_barang`, `id_penyewa`, `tanggal_sewa`, `waktu_kembali`, `status_transaksi`) VALUES
(2, 18, 21, '2018-11-13 00:00:00', '2018-11-22', 'Disetujui'),
(5, 4, 1, '2018-11-23 09:20:56', '2018-11-23', 'Pending'),
(6, 7, 1, '2018-11-23 09:30:39', '2018-11-23', 'Pending'),
(7, 4, 21, '2018-11-23 10:39:08', '2018-11-23', 'Disetujui'),
(8, 14, 21, '2018-11-23 11:11:22', '2018-11-23', 'Pending'),
(9, 9, 21, '2018-12-05 17:04:06', '2018-12-05', 'Pending'),
(11, 14, 28, '2018-12-06 07:27:34', '2018-12-06', 'Pending'),
(12, 9, 28, '2018-12-06 07:28:44', '2018-12-06', 'Pending'),
(13, 14, 28, '2018-12-06 07:30:19', '2018-12-06', 'Disetujui'),
(14, 14, 29, '2018-12-06 14:35:59', '2018-12-06', 'Disetujui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text,
  `provinsi` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `NIK` varchar(16) DEFAULT NULL,
  `foto_profil` varchar(100) DEFAULT NULL,
  `foto_identitas` varchar(100) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `status` varchar(16) NOT NULL,
  `verifikasi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `tanggal_lahir`, `telepon`, `email`, `alamat`, `provinsi`, `kota`, `jenis_kelamin`, `NIK`, `foto_profil`, `foto_identitas`, `password`, `status`, `verifikasi`) VALUES
(1, 'Kurniadi Ahmad Wijaya', '2018-11-10', ' 08124047478', 'kurniadiahmadwijaya@gmail.com', 'Jalan Danau Ranau G6B/2 , Sawojajar, Kota Malang, Jawa Timur, Indonesia', 'Jawa Timur', 'Malang', 'Laki-Laki', '9999100102', 'CEO.jpg', 'museumangkut1.jpg', 'admin', 'Admin', 1),
(2, 'Dyah Izzatul Lu\'luah', '1998-07-23', '081346723546', 'dyah123@gmail.com', 'Jl. Sigura-gura Barat, Malang', 'Jawa Timur', 'Malang', 'Perempuan', '913742546728', NULL, NULL, NULL, 'User', 0),
(3, 'Ahmad Komaruddin Dakwatuna', '2001-09-18', '081235960837', 'komardakwa@gmail.com', 'JL. Danau Buyan, Malang', 'Jawa Timur', 'Malang', 'Laki-Laki', '992356248254', '', NULL, NULL, 'User', 0),
(4, 'Indira Rahmawati', '1995-05-20', '084568348911', 'indirarahma@gmail.com', 'Jl. Stasiun Besar, Malang', 'Jawa Timur', 'Malang', 'Perempuan', '998264872234', NULL, NULL, NULL, 'User', 0),
(5, 'Wijaya Kurniadi', '2018-11-09', '081', '', ' aaa', 'Jawa Timur', 'Malang', 'Laki-Laki', '89979', NULL, 'BMC.png', 'dwwdww', 'User', 1),
(6, 'Kurniadi Ahmad Wijaya', '2018-11-01', '1213', 'sss@bb.com', NULL, 'Jawa Timur', 'Kab. Aceh Jaya', 'Laki-Laki', NULL, NULL, NULL, 'ssss', 'User', 0),
(7, 'Almira Rahma Sabita', '2001-11-10', '09876543212', 'almirarahma@gmail.com', 'Jl Mastrip Ketiban Kerapu No 2 Malang', 'Jawa Timur', 'Malang', 'Perempuan', '9917462384', 'fotoku.jpg', 'fotosaya.jpg', 'almirarahma', 'Admin', 1),
(8, 'Muhammad Rezki Ananda', '2001-04-08', '123456789089', 'rezki_ananda@gmail.com', 'Jl Danau Ranau Sawojajar Malang', 'Jawa Timur', 'Malang', 'Laki-Laki', '99018347381', 'profil.jpg', 'img123461.jpg', 'rezkiananda', 'Admin', 1),
(9, 'Naufal Atha Haidarbahy', '2001-05-16', '678905432132', 'crowledlegs@gmail.com', 'Jl Sapi Perah Timur Selosari Magetan', 'Jawa Timur', 'Magetan', 'Laki-Laki', '99372642313', 'img974928.jpg', 'img361471.jpg', 'naufalatha', 'Admin', 1),
(10, 'Chris Nanda Zefanya', '2001-05-19', '07135413413', 'chrisnanda275@gmail.com', 'Jl Danau Towuti 4, Sawojajar, Malang', 'Jawa Timur', 'Malang', 'Laki-Laki', '18965482365', NULL, NULL, NULL, 'User', 0),
(11, 'Ozdemiroglu Hayirlim Osman Cali', '1990-07-14', '123456789089', 'osmancali@gmail.com', 'Jl Danau Towuti Sawojajar Malang', 'Jawa Timur', 'Malang', 'Laki-Laki', '999910010224', NULL, NULL, NULL, 'User', 0),
(12, 'Muhammad Seno Fikriansyah', '1983-10-20', '08265235245', 'seno56fikri@gmail.com', 'Jl. Tentara Pelajar, Magelang', 'Jawa Tengah', 'Magelang', 'Laki-Laki', '92354864582', 'img7728572.png', 'img1904134.png', '1234', 'User', 0),
(13, 'Parlametta Cezzarini', '1990-11-17', '43579283236', 'cezzarini@gmail.com', 'Jl. Sidesermo V, Wonocolo, Surabaya', 'Jawa Timur', 'Surabaya', 'Perempuan', '9839845735', NULL, NULL, NULL, 'User', 0),
(14, 'Daffa Sulaimansyahbandar ', '1987-03-22', '081235967145', 'daffasulaiman@gmail.com', 'Perum Sudiang Raya Blok D-3 Makassar', 'Sulawesi Selatan', 'Makassar', 'Laki-Laki', '9259874589739', NULL, NULL, NULL, 'User', 0),
(15, 'Ilhamsyah Mahfuamaruddin', '1995-03-29', '03458525645', 'mahfuamaruddin@gmail.com', 'JL. Ahmad Yani, Mojokerto', 'Jawa Timur', 'Mojokerto', 'Laki-Laki', '3462547657234', 'img9932478.png', 'img7723847.png', 'mahfuamaruddin', 'User', 0),
(16, 'Mahfud Sanjaya', '2000-08-10', '081236452733', 'mahfudsanjaya@gmail.com', 'Jl Sekapur Sirih, Paiton', 'Jawa Timur', 'Probolinggo', 'Laki-Laki', '99237462324', NULL, NULL, NULL, 'User', 0),
(17, 'Paramita Cecilia Wibisono', '2000-09-14', '03475483456', 'ceciliawibisono@gmail.com', 'Perum Rungkut Asri Timur, Rungkut, Surabaya', 'Jawa Timur', 'Surabaya', 'Perempuan', '93748932675', NULL, NULL, '1234', 'User', 0),
(18, 'Dika Permana', '1999-01-17', '01648712512', 'permana2984@gmail.com', 'Jl R Suprapto, Purwodadi, Grobogan', 'Jawa Tengah', 'Grobogan', 'Laki-Laki', '945723546781', NULL, NULL, NULL, 'User', 0),
(19, 'Sofyan Abdul Khoir', '1996-06-25', '08136428345', 'yukododge@gmail.com', 'Perum Bukit Semarangjaya Metro, Semarang', 'Jawa Tengah', 'Semarang', 'Laki-Laki', '936156724245', NULL, NULL, NULL, 'User', 0),
(20, 'Riko Manunggal', '1999-06-01', '081234672342', 'rkmnggal@gmail.com', 'JL Cibodas Raya, Tasikmalaya', 'Jawa Barat', 'Tasikmalaya', 'Laki-Laki', '8236542476529', NULL, NULL, NULL, 'User', 0),
(21, 'Narroyyan Abdillah Utama', '2000-03-11', '018467224524', 'nrryyabdi@gmail.com', 'Jl Pekojan Utara, Pekojan, Jakarta', 'DKI Jakarta', 'Jakarta Utara', 'Laki-Laki', '923542376542', 'CEO.jpg', 'nrayan.png', '1234', 'User', 1),
(22, 'Fuad Robby Darojah', '1998-08-15', '018462371223', 'fuarobbydar@gmail.com', 'Jl Sungai Hilir, Rotanbau, Martapura', 'Kalimantan Selatan', 'Martapura', 'Laki-Laki', '923756452452', NULL, NULL, NULL, 'User', 0),
(23, 'Muhammad Iman Aminullah', '1999-08-30', '08136471354', 'imanami@gmail.com', 'Jl. Khatulistiwa, Pontianak', 'Kalimantan Barat', 'Pontianak', 'Laki-Laki', '9214636584524', NULL, NULL, NULL, 'User', 0),
(24, 'Kamal Mustafa Ibrahim', '2001-03-02', '081543673247', 'kamalmustaf@gmail.com', 'Jl Rotan Hulu, Banjarbaru', 'Kalimantan Selatan', 'Banjarbaru', 'Laki-Laki', '9979892354878', NULL, NULL, NULL, 'User', 0),
(25, 'Indah Rohmatul Ulfa', '1999-07-08', '08146723125', 'indahrohmatul@gmail.com', 'Jl Daeng Manrabiya, Pare-Pare', 'Sulawesi Selatan', 'Pare-Pare', 'Perempuan', '457189570145', NULL, NULL, '1234', 'User', 0),
(26, 'adhadhahkskkas', '2018-11-30', '6613636', 'a@gmail.com', '', 'Di Yogyakarta', 'Kab. Gayo Lues', 'Laki-Laki', '9999100102', NULL, 'museumangkut11.jpg', '1234', 'User', 1),
(27, 'Kurniadi Ahmad Wijaya', '2018-11-02', '081252678281', 'b@gmail.com', '', 'Banten', 'Kab. Gayo Lues', 'Laki-Laki', '9999100102', NULL, 'satwa.jpg', '12', 'User', 1),
(28, 'Halo', '2018-12-05', '727327372', 'halo@gmail.com', '', 'Dki Jakarta', 'Kab. Aceh Tamiang', 'Laki-Laki', '232272273276', NULL, 'CEO.jpg', '1234', 'User', 1),
(29, 'muhammad rezki', '2018-12-28', '11313', 'rezki@gmail.com', '', 'Bali', 'Kab. Pidie', 'Laki-Laki', '123', NULL, 'CTO.jpg', '1234', 'User', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_penyewa` (`id_penyewa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_barang` (`id_jenis`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_penyewa`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
