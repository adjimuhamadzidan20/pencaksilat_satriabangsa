-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Sep 2023 pada 03.52
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perguruan_pencaksilat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_anggota`
--

CREATE TABLE `dt_anggota` (
  `ID_anggota` int(10) NOT NULL,
  `Nama_lengkap` varchar(100) NOT NULL,
  `Jenis_kelamin` varchar(15) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Sabuk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dt_anggota`
--

INSERT INTO `dt_anggota` (`ID_anggota`, `Nama_lengkap`, `Jenis_kelamin`, `Alamat`, `Sabuk`) VALUES
(1086, 'Evelyn Efriliani', 'Perempuan', 'Jakarta Selatan', 'Biru'),
(1087, 'Saiful', 'Laki-laki', 'Cikarang', 'Merah'),
(1095, 'Jail Pratama', 'Perempuan', 'Kpg. Bakhita No. 622, Makassar 56512, Gorontalo', 'Biru'),
(1096, 'Raharja Anggriawan S.I.Kom', 'Perempuan', 'Jln. Baranangsiang No. 648, Salatiga 39346, SumUt', 'Hijau'),
(1097, 'Kacung Wibowo S.H.', 'Laki-laki', 'Dk. Basket No. 738, Sorong 68358, Bengkulu', 'Merah'),
(1098, 'Xanana Arsipatra Tarihoran S.Pt', 'Laki-laki', 'Jr. Batako No. 168, Bandar Lampung 39704, KalUt', 'Merah'),
(1099, 'Olga Rizki Budiyanto S.Sos', 'Perempuan', 'Kpg. Madrasah No. 195, Serang 73862, Riau', 'Biru'),
(1100, 'Karna Prayitna Simbolon S.H.', 'Perempuan', 'Jr. Baya Kali Bungur No. 471, Banjarbaru 82021, NTB', 'Merah'),
(1101, 'Indah Wastuti', 'Laki-laki', 'Dk. Surapati No. 668, Mojokerto 75305, KalBar', 'Coklat'),
(1102, 'Nabila Namaga', 'Perempuan', 'Gg. Acordion No. 514, Sungai Penuh 52640, Lampung', 'Putih'),
(1103, 'Lutfan Kusumo', 'Perempuan', 'Ki. Tangkuban Perahu No. 662, Malang 13449, MalUt', 'Merah'),
(1104, 'Dimaz Mulyanto Saragih', 'Perempuan', 'Jr. Raya Ujungberung No. 857, Pekanbaru 78469, SulTra', 'Putih'),
(1105, 'Clara Permata', 'Laki-laki', 'Ki. Warga No. 705, Parepare 64009, KalSel', 'Biru'),
(1106, 'Warsita Kasusra Prayoga S.E.I', 'Perempuan', 'Jln. Rumah Sakit No. 587, Tangerang 97532, KalSel', 'Putih'),
(1107, 'Puspa Oktaviani', 'Laki-laki', 'Ki. Halim No. 851, Sabang 65044, Bengkulu', 'Coklat'),
(1108, 'Karja Budiman', 'Perempuan', 'Kpg. Cikutra Barat No. 668, Binjai 67803, BaBel', 'Merah'),
(1109, 'Irnanto Timbul Saputra S.Pt', 'Perempuan', 'Ds. Baranangsiang No. 53, Jayapura 20653, SulSel', 'Biru'),
(1110, 'Shania Permata S.Pt', 'Laki-laki', 'Jln. Casablanca No. 424, Padang 85330, BaBel', 'Orange'),
(1111, 'Indah Pratiwi', 'Laki-laki', 'Dk. Basuki Rahmat  No. 566, Palu 54729, Banten', 'Putih'),
(1112, 'Lega Mansur S.Farm', 'Laki-laki', 'Gg. Krakatau No. 798, Samarinda 24974, Aceh', 'Hitam'),
(1113, 'Rini Agustina S.Farm', 'Laki-laki', 'Gg. Teuku Umar No. 616, Surakarta 73218, KalUt', 'Putih'),
(1114, 'Gangsa Sinaga', 'Laki-laki', 'Kpg. Bata Putih No. 483, Bekasi 74019, KalBar', 'Hitam'),
(1115, 'Prayoga Prayoga', 'Laki-laki', 'Ki. Wahid No. 551, Padang 52406, KepR', 'Coklat'),
(1116, 'Vanya Rahayu', 'Perempuan', 'Psr. Kebangkitan Nasional No. 866, Pekanbaru 81548, Bali', 'Merah'),
(1117, 'Legawa Ramadan', 'Laki-laki', 'Dk. Basoka No. 959, Parepare 83942, SulTeng', 'Merah'),
(1118, 'Elvina Kamila Pertiwi', 'Laki-laki', 'Jr. Suniaraja No. 328, Gunungsitoli 47513, PapBar', 'Coklat'),
(1119, 'Ivan Hutasoit', 'Perempuan', 'Dk. Cokroaminoto No. 938, Medan 16422, JaBar', 'Biru'),
(1120, 'Keisha Zamira Fujiati S.Kom', 'Perempuan', 'Ds. Lembong No. 208, Padangsidempuan 32912, Bali', 'Hijau'),
(1121, 'Faizah Maryati', 'Laki-laki', 'Dk. Radio No. 472, Tual 75954, SulTeng', 'Merah'),
(1122, 'Arsipatra Galar Marbun M.Pd', 'Laki-laki', 'Gg. Warga No. 384, Tangerang Selatan 27428, KalUt', 'Biru'),
(1123, 'Jaiman Firmansyah', 'Laki-laki', 'Ki. Merdeka No. 319, Bandung 95649, PapBar', 'Coklat'),
(1124, 'Adinata Prasetyo', 'Perempuan', 'Ds. Bara No. 468, Bekasi 93831, Maluku', 'Putih'),
(1125, 'Nabila Rahimah', 'Laki-laki', 'Dk. Baranangsiang No. 440, Sukabumi 84607, Gorontalo', 'Orange'),
(1126, 'Tiara Carla Purwanti', 'Perempuan', 'Psr. Veteran No. 175, Padang 19615, KalTim', 'Orange'),
(1127, 'Daru Gandi Firmansyah', 'Perempuan', 'Ds. Gardujati No. 320, Tegal 25675, SumUt', 'Coklat'),
(1128, 'Nadine Melani', 'Laki-laki', 'Ki. Badak No. 536, Batam 95866, Bengkulu', 'Merah'),
(1129, 'Atma Prasetyo', 'Perempuan', 'Psr. Peta No. 633, Jambi 67702, KalUt', 'Coklat'),
(1130, 'Lurhur Damanik', 'Laki-laki', 'Ki. Padma No. 5, Madiun 54237, Bali', 'Hijau'),
(1131, 'Mustika Habibi', 'Perempuan', 'Jr. Tambak No. 105, Prabumulih 30771, KalSel', 'Biru'),
(1132, 'Daniswara Natsir', 'Laki-laki', 'Ds. Supono No. 982, Pematangsiantar 22838, JaTim', 'Putih'),
(1133, 'Putri Shania Yulianti M.Pd', 'Perempuan', 'Kpg. Pasir Koja No. 726, Pangkal Pinang 17970, KalTim', 'Coklat'),
(1134, 'Ciaobella Humaira Nasyiah M.Kom.', 'Laki-laki', 'Psr. Reksoninten No. 466, Lubuklinggau 10305, DKI', 'Hitam'),
(1135, 'Embuh Hasim Pradana S.Ked', 'Laki-laki', 'Ds. Cikutra Timur No. 629, Cirebon 23137, Riau', 'Merah'),
(1136, 'Shakila Citra Riyanti S.E.I', 'Laki-laki', 'Ds. Abdul Muis No. 23, Surakarta 88778, KalTim', 'Biru'),
(1137, 'Rahmi Maimunah Fujiati S.E.', 'Perempuan', 'Gg. Madrasah No. 752, Sukabumi 69325, Banten', 'Merah'),
(1138, 'Elma Suryatmi', 'Laki-laki', 'Jr. Bacang No. 977, Bengkulu 36011, Gorontalo', 'Putih'),
(1139, 'Rini Usada', 'Laki-laki', 'Psr. Kali No. 253, Blitar 13207, Jambi', 'Putih'),
(1140, 'Hasan Pangeran Hutapea', 'Laki-laki', 'Dk. Lumban Tobing No. 942, Sabang 45242, SumUt', 'Orange'),
(1141, 'Tari Laksita', 'Laki-laki', 'Ki. Moch. Toha No. 671, Bandung 35166, KalUt', 'Biru'),
(1142, 'Titi Usada M.Ak', 'Laki-laki', 'Dk. Babadan No. 990, Tanjungbalai 14136, Bengkulu', 'Putih'),
(1143, 'Gaduh Maulana S.E.I', 'Perempuan', 'Ds. Baik No. 241, Bitung 46532, SumUt', 'Coklat'),
(1144, 'Argono Harsana Wacana S.Pd', 'Perempuan', 'Dk. Jaksa No. 700, Mojokerto 20587, SumSel', 'Hitam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_cabang`
--

CREATE TABLE `dt_cabang` (
  `ID_cabang` int(10) NOT NULL,
  `Nama_cabang` varchar(100) NOT NULL,
  `Penanggung_jawab` varchar(100) NOT NULL,
  `Jumlah_anggota` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dt_cabang`
--

INSERT INTO `dt_cabang` (`ID_cabang`, `Nama_cabang`, `Penanggung_jawab`, `Jumlah_anggota`) VALUES
(1115, 'Petamburan RW. 1', 'Rizki Muhammad Ridwan', 0),
(1116, 'Matraman', 'Ade Kurnia Salam', 0),
(1117, 'Padel', 'Muhammad Akbar Asya', 0),
(1118, 'Petamburan RPTRA', 'Sarah Kartika Ningrum', 0),
(1119, 'Rawa Bunga', 'Eka Santika Putri', 0),
(1120, 'SMPN 67 Jakarta Selatan', 'Sri Dahlia', 0),
(1121, 'Al - Falah', 'Rifqih Rizqullah', 0),
(1122, 'Al - Falah', 'Latika Kani Safitri M.M.', 40),
(1123, 'Padel', 'Okta Samosir', 20),
(1124, 'Petamburan RW. 1', 'Keisha Pudjiastuti S.E.I', 10),
(1125, 'Rawa Bunga', 'Limar Zulkarnain', 28),
(1126, 'Matraman', 'Gamanto Situmorang', 10),
(1127, 'Matraman', 'Kenari Mitra Mandala M.Kom.', 10),
(1128, 'Petamburan RPTRA', 'Harjaya Bambang Winarno M.Kom.', 28),
(1129, 'Petamburan RW. 1', 'Dirja Sitorus', 28),
(1130, 'Petamburan RPTRA', 'Ratih Melani', 10),
(1131, 'Padel', 'Mila Purnawati', 10),
(1132, 'Petamburan RW. 1', 'Silvia Anggraini', 28),
(1133, 'Petamburan RW. 1', 'Naradi Bajragin Dongoran S.Ked', 20),
(1134, 'Padel', 'Dewi Uyainah', 20),
(1135, 'Petamburan RPTRA', 'Diana Farah Sudiati M.Farm', 20),
(1136, 'Matraman', 'Martana Haryanto', 28),
(1137, 'Petamburan RPTRA', 'Juli Zulaika', 20),
(1138, 'Petamburan RPTRA', 'Malika Nasyidah S.Psi', 28),
(1139, 'Matraman', 'Calista Tira Handayani M.Farm', 40),
(1140, 'Padel', 'Nyoman Napitupulu', 28),
(1141, 'Al - Falah', 'Anita Halimah', 20),
(1142, 'SMPN 67 Jakarta Selatan', 'Putri Farida M.M.', 20),
(1143, 'SMPN 67 Jakarta Selatan', 'Puji Padmi Yuniar M.Ak', 20),
(1144, 'Petamburan RPTRA', 'Simon Saefullah', 28),
(1145, 'Petamburan RPTRA', 'Hana Laksmiwati S.Ked', 28),
(1146, 'Matraman', 'Ajeng Hartati', 40),
(1147, 'Al - Falah', 'Eva Hasanah S.T.', 28),
(1148, 'Petamburan RW. 1', 'Arta Jarwa Maulana', 28),
(1149, 'Al - Falah', 'Koko Gunawan', 10),
(1150, 'Padel', 'Septi Handayani S.E.I', 40),
(1151, 'Rawa Bunga', 'Anggabaya Widodo', 20),
(1152, 'Petamburan RPTRA', 'Zizi Farida', 28),
(1153, 'Al - Falah', 'Eka Lazuardi', 28),
(1154, 'SMPN 67 Jakarta Selatan', 'Paramita Safitri M.TI.', 28),
(1155, 'Petamburan RPTRA', 'Maimunah Uyainah', 28),
(1156, 'SMPN 67 Jakarta Selatan', 'Gading Haryanto', 20),
(1157, 'Matraman', 'Jarwi Simanjuntak', 20),
(1158, 'Petamburan RW. 1', 'Kalim Halim Uwais M.Farm', 20),
(1159, 'Petamburan RPTRA', 'Fitria Widiastuti', 40),
(1160, 'SMPN 67 Jakarta Selatan', 'Cinthia Prastuti', 40),
(1161, 'Matraman', 'Halim Tarihoran', 40),
(1162, 'Matraman', 'Jail Dongoran', 40),
(1163, 'Padel', 'Gamani Mahendra', 28),
(1164, 'Al - Falah', 'Artanto Thamrin', 40),
(1165, 'Matraman', 'Garang Kurniawan', 20),
(1166, 'Rawa Bunga', 'Ida Mulyani', 28),
(1167, 'Matraman', 'Amelia Palastri S.Kom', 20),
(1168, 'Petamburan RW. 1', 'Melinda Lailasari', 40),
(1169, 'Matraman', 'Paulin Hastuti', 40),
(1170, 'Padel', 'Dagel Santoso', 10),
(1171, 'SMPN 67 Jakarta Selatan', 'Jail Jailani', 10),
(1172, 'SMPN 67 Jakarta Selatan', 'Ajiono Saefullah', 10),
(1173, 'SMPN 67 Jakarta Selatan', 'Clara Yuni Purnawati S.I.Kom', 20),
(1174, 'SMPN 67 Jakarta Selatan', 'Mutia Mardhiyah', 40),
(1175, 'Al - Falah', 'Rachel Patricia Puspasari S.Kom', 40),
(1176, 'Petamburan RPTRA', 'Ratna Vanya Wulandari', 10),
(1177, 'SMPN 67 Jakarta Selatan', 'Rusman Wibowo', 28),
(1178, 'Padel', 'Pia Suartini', 28),
(1179, 'Padel', 'Pardi Siregar', 20),
(1180, 'Rawa Bunga', 'Hamima Mala Usada M.Farm', 20),
(1181, 'Padel', 'Balapati Asman Kusumo S.T.', 20),
(1182, 'Matraman', 'Kiandra Puspita', 20),
(1183, 'Petamburan RPTRA', 'Ella Jelita Puspasari M.Kom.', 40),
(1184, 'Rawa Bunga', 'Ifa Septi Palastri M.Farm', 40),
(1185, 'Petamburan RW. 1', 'Laila Pertiwi', 20),
(1186, 'Padel', 'Zizi Wulandari S.Kom', 10),
(1187, 'Matraman', 'Wawan Winarno', 40),
(1188, 'Petamburan RPTRA', 'Ciaobella Melani', 28),
(1189, 'Petamburan RW. 1', 'Raden Suryono', 10),
(1190, 'Petamburan RPTRA', 'Lidya Pratiwi', 10),
(1191, 'Padel', 'Rudi Prasasta', 10),
(1192, 'Rawa Bunga', 'Ina Wahyuni S.Farm', 28),
(1193, 'Padel', 'Alambana Sakti Permadi', 10),
(1194, 'Petamburan RPTRA', 'Qori Violet Pertiwi', 40),
(1195, 'Petamburan RPTRA', 'Balamantri Sirait M.TI.', 28),
(1196, 'SMPN 67 Jakarta Selatan', 'Lukita Sitorus', 20),
(1197, 'Al - Falah', 'Nardi Hutapea', 40),
(1198, 'Petamburan RW. 1', 'Ilsa Prastuti', 20),
(1199, 'Padel', 'Oskar Prasetyo', 20),
(1200, 'SMPN 67 Jakarta Selatan', 'Jasmin Zalindra Permata', 10),
(1201, 'Rawa Bunga', 'Purwanto Lazuardi', 10),
(1202, 'Petamburan RPTRA', 'Makara Hutagalung', 20),
(1203, 'Matraman', 'Gading Sitorus', 28),
(1204, 'Petamburan RW. 1', 'Erik Samsul Gunawan M.Farm', 40),
(1205, 'Petamburan RW. 1', 'Ade Tasnim Budiyanto', 40),
(1206, 'Al - Falah', 'Paris Riyanti', 20),
(1207, 'Petamburan RPTRA', 'Galuh Niyaga Mahendra S.Sos', 28),
(1208, 'Petamburan RW. 1', 'Juli Zizi Usada S.Psi', 28),
(1209, 'Al - Falah', 'Jaiman Setiawan', 28),
(1210, 'Matraman', 'Puji Pertiwi S.Kom', 20),
(1211, 'Petamburan RPTRA', 'Arsipatra Iswahyudi', 40),
(1212, 'Rawa Bunga', 'Puspa Aisyah Pratiwi', 20),
(1213, 'Al - Falah', 'Carla Nasyiah', 20),
(1214, 'Padel', 'Melinda Silvia Nurdiyanti M.Pd', 20),
(1215, 'Petamburan RPTRA', 'Nurul Riyanti', 28),
(1216, 'Padel', 'Zulaikha Halimah', 28),
(1217, 'Padel', 'Usyi Kezia Riyanti M.TI.', 20),
(1218, 'Matraman', 'Dewi Queen Rahayu', 10),
(1219, 'SMPN 67 Jakarta Selatan', 'Tri Garda Utama S.T.', 10),
(1220, 'Al - Falah', 'Cahyono Narpati', 20),
(1221, 'Rawa Bunga', 'Arta Dongoran', 40),
(1222, 'Petamburan RW. 1', 'Purwadi Nugroho', 28),
(1223, 'Padel', 'Cici Riyanti M.Kom.', 40),
(1224, 'SMPN 67 Jakarta Selatan', 'Titi Ifa Purwanti S.E.I', 10),
(1225, 'Petamburan RPTRA', 'Diana Wulan Prastuti', 10),
(1226, 'Al - Falah', 'Lanang Kusuma Waluyo S.Ked', 20),
(1227, 'Al - Falah', 'Cindy Suartini S.I.Kom', 20),
(1228, 'SMPN 67 Jakarta Selatan', 'Hasan Dongoran', 40),
(1229, 'Matraman', 'Gatot Sihombing', 28),
(1230, 'Al - Falah', 'Saka Simanjuntak', 40),
(1231, 'Petamburan RW. 1', 'Kambali Saiful Wibowo', 40),
(1232, 'Petamburan RW. 1', 'Oni Pratiwi S.Farm', 40),
(1233, 'Petamburan RW. 1', 'Maida Shakila Susanti', 10),
(1234, 'SMPN 67 Jakarta Selatan', 'Artawan Mahendra S.E.I', 40),
(1235, 'Padel', 'Dina Hassanah', 10),
(1236, 'Padel', 'Kania Rahmi Nurdiyanti', 20),
(1237, 'Petamburan RW. 1', 'Endah Nasyiah', 10),
(1238, 'Petamburan RPTRA', 'Gilda Kania Pudjiastuti S.IP', 10),
(1239, 'Al - Falah', 'Qori Uyainah', 40),
(1240, 'Al - Falah', 'Zahra Zalindra Hassanah', 20),
(1241, 'Padel', 'Umaya Maulana', 40),
(1242, 'Rawa Bunga', 'Rachel Ira Palastri', 40),
(1243, 'SMPN 67 Jakarta Selatan', 'Rudi Bakiono Permadi', 20),
(1244, 'Rawa Bunga', 'Kadir Siregar', 28),
(1245, 'Al - Falah', 'Umi Yulianti S.H.', 20),
(1246, 'Petamburan RW. 1', 'Jasmin Lestari', 40),
(1247, 'Petamburan RW. 1', 'Tirta Rajasa', 10),
(1248, 'Petamburan RW. 1', 'Lamar Salahudin S.E.I', 10),
(1249, 'Al - Falah', 'Damu Ramadan M.Farm', 40),
(1250, 'Al - Falah', 'Oskar Lurhur Waluyo', 40),
(1251, 'Al - Falah', 'Aditya Gilang Permadi M.M.', 20),
(1252, 'Matraman', 'Bakti Cemani Waluyo', 28),
(1253, 'Matraman', 'Harsana Simanjuntak S.I.Kom', 20),
(1254, 'Matraman', 'Yunita Andriani', 40),
(1255, 'Rawa Bunga', 'Winda Yolanda', 10),
(1256, 'Padel', 'Devi Citra Permata', 10),
(1257, 'Al - Falah', 'Lili Suartini S.I.Kom', 10),
(1258, 'Matraman', 'Cinta Novi Mandasari S.Kom', 40),
(1259, 'Petamburan RPTRA', 'Tantri Hastuti M.Pd', 40),
(1260, 'Petamburan RW. 1', 'Devi Farida', 28),
(1261, 'Petamburan RW. 1', 'Panji Iswahyudi S.E.I', 20),
(1262, 'SMPN 67 Jakarta Selatan', 'Setya Hutagalung', 10),
(1263, 'Padel', 'Melinda Shakila Aryani', 40),
(1264, 'Al - Falah', 'Carla Astuti', 28),
(1265, 'Petamburan RW. 1', 'Dono Firgantoro', 40),
(1266, 'Al - Falah', 'Daliono Laswi Prasasta', 28),
(1267, 'Petamburan RW. 1', 'Hasim Ganjaran Halim', 40),
(1268, 'Padel', 'Mulyono Natsir', 20),
(1269, 'Petamburan RPTRA', 'Bakijan Tamba', 28),
(1270, 'SMPN 67 Jakarta Selatan', 'Safina Yuliarti S.Ked', 28),
(1271, 'Al - Falah', 'Amalia Pertiwi M.Kom.', 28),
(1272, 'Rawa Bunga', 'Eli Padmasari S.Pt', 10),
(1273, 'Padel', 'Malika Mulyani', 28),
(1274, 'Matraman', 'Ira Laksmiwati S.Psi', 10),
(1275, 'Rawa Bunga', 'Titi Halimah S.E.', 40),
(1276, 'Petamburan RW. 1', 'Yuliana Lidya Pudjiastuti M.Pd', 10),
(1277, 'Rawa Bunga', 'Jaiman Kala Prasasta M.TI.', 20),
(1278, 'Al - Falah', 'Cecep Napitupulu', 20),
(1279, 'Rawa Bunga', 'Eman Nainggolan M.TI.', 28),
(1280, 'SMPN 67 Jakarta Selatan', 'Nadine Wirda Hastuti S.Pd', 20),
(1281, 'Matraman', 'Galur Sabri Santoso', 10),
(1282, 'SMPN 67 Jakarta Selatan', 'Hani Riyanti', 10),
(1283, 'Rawa Bunga', 'Jatmiko Maulana', 10),
(1284, 'Petamburan RW. 1', 'Jati Utama M.Pd', 28),
(1285, 'Al - Falah', 'Karen Riyanti', 40),
(1286, 'Al - Falah', 'Puji Genta Agustina S.IP', 20),
(1287, 'Al - Falah', 'Warsita Ikin Wacana M.TI.', 20),
(1288, 'Petamburan RPTRA', 'Nurul Palastri', 10),
(1289, 'Al - Falah', 'Okto Waluyo', 40),
(1290, 'Matraman', 'Gamanto Baktiono Maulana S.IP', 40),
(1291, 'Petamburan RW. 1', 'Elisa Purwanti', 10),
(1292, 'Petamburan RW. 1', 'Ellis Uyainah', 10),
(1293, 'Petamburan RPTRA', 'Ina Hani Nasyidah', 40),
(1294, 'Padel', 'Ikhsan Wibowo', 10),
(1295, 'Petamburan RPTRA', 'Vicky Halimah', 40),
(1296, 'Petamburan RPTRA', 'Ratna Hastuti', 28),
(1297, 'Al - Falah', 'Mila Suryatmi S.Pt', 20),
(1298, 'SMPN 67 Jakarta Selatan', 'Wahyu Damu Hutagalung', 20),
(1299, 'Matraman', 'Arta Ardianto', 28),
(1300, 'Matraman', 'Yuliana Nasyiah S.Psi', 10),
(1301, 'Al - Falah', 'Jagaraga Dongoran', 10),
(1302, 'Padel', 'Raden Habibi', 10),
(1303, 'Al - Falah', 'Puti Vanesa Wahyuni', 20),
(1304, 'Petamburan RPTRA', 'Gina Paulin Andriani', 10),
(1305, 'Petamburan RPTRA', 'Gawati Najwa Uyainah', 40),
(1306, 'Matraman', 'Calista Paramita Mulyani', 10),
(1307, 'Rawa Bunga', 'Oni Rahimah', 20),
(1308, 'Petamburan RPTRA', 'Kenzie Gading Salahudin S.I.Kom', 40),
(1309, 'Matraman', 'Viktor Wibowo S.E.', 40),
(1310, 'Rawa Bunga', 'Devi Kania Yuliarti', 10),
(1311, 'Padel', 'Intan Padmasari', 10),
(1312, 'Matraman', 'Calista Kartika Namaga S.Kom', 40),
(1313, 'Rawa Bunga', 'Halim Thamrin', 40),
(1314, 'Al - Falah', 'Nadine Azalea Yulianti', 40),
(1315, 'Padel', 'Cornelia Tiara Halimah', 28),
(1316, 'Petamburan RW. 1', 'Anom Napitupulu', 28),
(1317, 'Matraman', 'Hamzah Muni Hutagalung', 40),
(1318, 'Padel', 'Ira Qori Fujiati', 10),
(1319, 'Al - Falah', 'Ami Mulyani S.Pd', 28),
(1320, 'Padel', 'Irsad Slamet Sitompul M.Kom.', 40),
(1321, 'Petamburan RPTRA', 'Jaiman Wacana S.Gz', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_jadwal_latihan`
--

CREATE TABLE `dt_jadwal_latihan` (
  `ID_latihan` int(10) NOT NULL,
  `Hari` varchar(20) NOT NULL,
  `ID_pelatih` int(10) NOT NULL,
  `ID_cabang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dt_jadwal_latihan`
--

INSERT INTO `dt_jadwal_latihan` (`ID_latihan`, `Hari`, `ID_pelatih`, `ID_cabang`) VALUES
(1, 'Rabu', 1224, 1115),
(2, 'Jumat &amp; Sabtu', 1226, 1116),
(3, 'Jumat &amp; Sabtu', 1231, 1117),
(4, 'Minggu', 1282, 1116);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_keuangan`
--

CREATE TABLE `dt_keuangan` (
  `ID_keuangan` int(10) NOT NULL,
  `Tanggal_Pembayaran` varchar(20) NOT NULL,
  `Nominal` int(100) NOT NULL,
  `Keterangan` varchar(100) NOT NULL,
  `ID_anggota` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dt_keuangan`
--

INSERT INTO `dt_keuangan` (`ID_keuangan`, `Tanggal_Pembayaran`, `Nominal`, `Keterangan`, `ID_anggota`) VALUES
(1, '2023-02-09', 50000, 'Sudah Membayar', 1086),
(6, '2023-09-20', 20000, 'Sudah Membayar', 1103);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_pelatih`
--

CREATE TABLE `dt_pelatih` (
  `ID_pelatih` int(10) NOT NULL,
  `Nama_pelatih` varchar(100) NOT NULL,
  `Tanggal_lahir` varchar(20) NOT NULL,
  `Jenis_kelamin` varchar(15) NOT NULL,
  `Sabuk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dt_pelatih`
--

INSERT INTO `dt_pelatih` (`ID_pelatih`, `Nama_pelatih`, `Tanggal_lahir`, `Jenis_kelamin`, `Sabuk`) VALUES
(1224, 'Abdullah Dzaki', '2005-07-21', 'Laki-laki', 'Merah'),
(1225, 'Dimas Prayoga', '2004-02-13', 'Laki-laki', 'Merah'),
(1226, 'Adi Kurnia Salam', '2003-11-17', 'Laki-laki', 'Merah'),
(1227, 'Evelyn Efriliani', '2005-04-15', 'Perempuan', 'Biru'),
(1228, 'Medina Dwi Hamid', '2005-02-07', 'Perempuan', 'Biru'),
(1229, 'Mochammad Zidan Alfiandy', '2003-07-20', 'Laki-laki', 'Merah'),
(1230, 'Muhammad Rizal Alfarizi', '2004-09-02', 'Laki-laki', 'Merah'),
(1231, 'Muhammad Akbar Asya', '2003-11-12', 'Laki-laki', 'Merah'),
(1232, 'Nyoman Nasab Maheswara M.TI.', '2004-10-06', 'Perempuan', 'Putih'),
(1233, 'Nadine Padmasari', '1976-12-03', 'Laki-laki', 'Hitam'),
(1234, 'Prasetyo Wasita', '1997-12-21', 'Perempuan', 'Coklat'),
(1235, 'Soleh Waluyo', '1977-07-28', 'Perempuan', 'Orange'),
(1236, 'Dimaz Cakrajiya Irawan', '1970-05-11', 'Laki-laki', 'Coklat'),
(1237, 'Citra Widya Nuraini', '2005-01-04', 'Perempuan', 'Coklat'),
(1238, 'Suci Nasyiah', '2009-10-04', 'Perempuan', 'Coklat'),
(1239, 'Sidiq Cengkal Samosir', '2009-11-21', 'Perempuan', 'Hitam'),
(1240, 'Kezia Handayani', '1985-02-13', 'Perempuan', 'Merah'),
(1241, 'Sadina Uyainah M.M.', '1970-05-17', 'Laki-laki', 'Hijau'),
(1242, 'Kiandra Yuniar', '2006-07-19', 'Laki-laki', 'Biru'),
(1243, 'Belinda Nurdiyanti', '2005-09-02', 'Laki-laki', 'Orange'),
(1244, 'Bahuraksa Wadi Firgantoro S.Gz', '1979-10-05', 'Perempuan', 'Hijau'),
(1245, 'Kezia Yolanda S.I.Kom', '1997-07-28', 'Perempuan', 'Coklat'),
(1246, 'Violet Safitri', '1982-03-03', 'Perempuan', 'Putih'),
(1247, 'Danuja Alambana Wahyudin', '2019-04-01', 'Laki-laki', 'Orange'),
(1248, 'Ulva Anggraini', '1975-03-29', 'Laki-laki', 'Orange'),
(1249, 'Raden Sitompul', '2020-01-29', 'Laki-laki', 'Biru'),
(1250, 'Uli Zulaika', '1986-02-05', 'Laki-laki', 'Hitam'),
(1251, 'Ella Mila Pertiwi', '2007-06-09', 'Laki-laki', 'Orange'),
(1252, 'Zahra Melinda Permata', '1970-07-03', 'Perempuan', 'Hijau'),
(1253, 'Legawa Iswahyudi', '2011-10-26', 'Perempuan', 'Merah'),
(1254, 'Diana Wijayanti', '2012-02-21', 'Perempuan', 'Hijau'),
(1255, 'Nyana Pangestu', '1982-04-15', 'Perempuan', 'Biru'),
(1256, 'Faizah Pratiwi S.Sos', '2023-09-19', 'Perempuan', 'Coklat'),
(1257, 'Muhammad Galih Januar S.I.Kom', '2010-05-06', 'Laki-laki', 'Hijau'),
(1258, 'Mila Hartati', '2014-01-30', 'Laki-laki', 'Biru'),
(1259, 'Jelita Dinda Nurdiyanti S.H.', '1987-02-28', 'Perempuan', 'Hijau'),
(1260, 'Juli Kuswandari S.Farm', '1999-10-16', 'Perempuan', 'Merah'),
(1261, 'Legawa Asmuni Sihombing M.Ak', '2005-11-11', 'Laki-laki', 'Merah'),
(1262, 'Kamaria Rahimah', '2006-10-31', 'Perempuan', 'Merah'),
(1263, 'Raditya Gantar Sitompul', '1978-07-20', 'Perempuan', 'Hitam'),
(1264, 'Rahman Anggriawan', '1988-09-08', 'Perempuan', 'Orange'),
(1265, 'Zelda Hastuti', '2014-08-17', 'Laki-laki', 'Hitam'),
(1266, 'Vino Viman Budiyanto S.IP', '1995-11-09', 'Laki-laki', 'Orange'),
(1267, 'Prabawa Prakasa', '1983-07-27', 'Laki-laki', 'Coklat'),
(1268, 'Warsita Lukita Utama S.Kom', '1998-08-12', 'Laki-laki', 'Putih'),
(1269, 'Banara Virman Kurniawan', '2006-05-15', 'Perempuan', 'Coklat'),
(1270, 'Teddy Baktiono Sihombing S.Gz', '2013-03-31', 'Laki-laki', 'Coklat'),
(1271, 'Rahmi Lestari', '1974-08-21', 'Laki-laki', 'Coklat'),
(1272, 'Ratna Purnawati S.Gz', '2003-10-07', 'Laki-laki', 'Hijau'),
(1273, 'Cinta Anggraini', '1971-05-14', 'Perempuan', 'Hijau'),
(1274, 'Cakrawangsa Suryono', '2006-11-16', 'Laki-laki', 'Orange'),
(1275, 'Bambang Wibisono S.H.', '2019-02-10', 'Perempuan', 'Coklat'),
(1276, 'Ajeng Uli Puspita S.E.I', '2012-01-05', 'Laki-laki', 'Coklat'),
(1277, 'Dirja Bakti Permadi S.Ked', '1993-08-11', 'Laki-laki', 'Hitam'),
(1278, 'Cinta Kiandra Namaga S.Gz', '1987-04-28', 'Laki-laki', 'Hijau'),
(1279, 'Salsabila Vera Agustina S.Farm', '2004-08-03', 'Laki-laki', 'Hitam'),
(1280, 'Soleh Karma Pangestu', '1988-02-17', 'Laki-laki', 'Coklat'),
(1281, 'Siti Ani Mayasari M.M.', '2000-12-16', 'Perempuan', 'Hijau'),
(1282, 'Yuni Anggraini', '2022-03-15', 'Perempuan', 'Hijau'),
(1283, 'Widya Wahyuni', '2019-02-15', 'Laki-laki', 'Putih'),
(1284, 'Viktor Samsul Tampubolon', '2014-02-15', 'Laki-laki', 'Merah'),
(1285, 'Kawaya Wibisono S.Sos', '1976-05-14', 'Perempuan', 'Biru'),
(1286, 'Malik Luwes Pradipta S.Farm', '2000-07-03', 'Perempuan', 'Putih');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dt_anggota`
--
ALTER TABLE `dt_anggota`
  ADD PRIMARY KEY (`ID_anggota`);

--
-- Indeks untuk tabel `dt_cabang`
--
ALTER TABLE `dt_cabang`
  ADD PRIMARY KEY (`ID_cabang`);

--
-- Indeks untuk tabel `dt_jadwal_latihan`
--
ALTER TABLE `dt_jadwal_latihan`
  ADD PRIMARY KEY (`ID_latihan`),
  ADD KEY `ID_pelatih` (`ID_pelatih`),
  ADD KEY `ID_cabang` (`ID_cabang`);

--
-- Indeks untuk tabel `dt_keuangan`
--
ALTER TABLE `dt_keuangan`
  ADD PRIMARY KEY (`ID_keuangan`),
  ADD KEY `ID_anggota` (`ID_anggota`);

--
-- Indeks untuk tabel `dt_pelatih`
--
ALTER TABLE `dt_pelatih`
  ADD PRIMARY KEY (`ID_pelatih`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dt_anggota`
--
ALTER TABLE `dt_anggota`
  MODIFY `ID_anggota` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1145;

--
-- AUTO_INCREMENT untuk tabel `dt_cabang`
--
ALTER TABLE `dt_cabang`
  MODIFY `ID_cabang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1322;

--
-- AUTO_INCREMENT untuk tabel `dt_jadwal_latihan`
--
ALTER TABLE `dt_jadwal_latihan`
  MODIFY `ID_latihan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `dt_keuangan`
--
ALTER TABLE `dt_keuangan`
  MODIFY `ID_keuangan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `dt_pelatih`
--
ALTER TABLE `dt_pelatih`
  MODIFY `ID_pelatih` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1287;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dt_jadwal_latihan`
--
ALTER TABLE `dt_jadwal_latihan`
  ADD CONSTRAINT `dt_jadwal_latihan_ibfk_1` FOREIGN KEY (`ID_pelatih`) REFERENCES `dt_pelatih` (`ID_pelatih`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dt_jadwal_latihan_ibfk_2` FOREIGN KEY (`ID_cabang`) REFERENCES `dt_cabang` (`ID_cabang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dt_keuangan`
--
ALTER TABLE `dt_keuangan`
  ADD CONSTRAINT `dt_keuangan_ibfk_1` FOREIGN KEY (`ID_anggota`) REFERENCES `dt_anggota` (`ID_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
