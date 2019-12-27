-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 27, 2019 at 08:35 PM
-- Server version: 10.2.29-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u5864817_buku_pembelajaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(11) NOT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bahan_ajar`
--

CREATE TABLE `bahan_ajar` (
  `id` int(6) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `jenis` varchar(25) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `tahun` int(4) DEFAULT NULL,
  `file_link` text NOT NULL,
  `id_mk` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan_ajar`
--

INSERT INTO `bahan_ajar` (`id`, `name`, `jenis`, `author`, `tahun`, `file_link`, `id_mk`) VALUES
(8, 'Tuntunan Visual Basic 6', 'Buku Paket', 'Fajar Astuti', 2016, 'https://drive.google.com/drive/u/0/folders/18X4RTok6umPnw58l1W_ybkNh6LNFpszf', 'PTI9'),
(9, 'Konsep dan Struktur Data', 'Buku Paket', 'Jalal Rumi', 2001, 'https://drive.google.com/drive/u/0/folders/18X4RTok6umPnw58l1W_ybkNh6LNFpszf', 'PTI5');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(25) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `id_jur` int(4) DEFAULT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `name`, `gender`, `id_jur`, `pass`) VALUES
('11301831128485', 'Ponco Wali Pranoto, S.Pd.T, M.Pd', 'Laki-laki', 101, '12345678'),
('11310890215487', 'Sigit Pambudi, S.Pd, M.Eng', 'Laki-laki', 101, '12345678'),
('196206251985031002', 'Dr. Priyanto, M.Kom.', 'Laki-laki', 101, '12345678'),
('196305121989011001', 'Drs. Muhammad Munir, M.Pd.', 'Laki-laki', 101, '12345678'),
('196402051987031001', 'Prof. Drs. Herman Dwi Surjono, M.Sc.,MT.,Ph.D', 'Laki-laki', 101, '12345678'),
('196706081993031001', 'Dr. Ir. Drs. Eko Marpanaji, M.T.', 'Laki-laki', 101, '12345678'),
('197012182005012001', 'Dr. Ratna Wardani, M.T.', 'Perempuan', 101, '12345678'),
('198804122018031001', 'Indra Hidayatulloh, S.Kom, M.T.', 'Laki-laki', 101, '12345678'),
('199102122019032019', 'Ebni Sholikhah, S.Pd., M.Sc', 'Perempuan', 301, '12345678'),
('199109172018031001', 'Arya Sony, S.T, M.Eng', 'Laki-laki', 101, '12345678'),
('199205062019031019', 'Pradana Setialana, S.Pd., M.Eng.', 'Laki-laki', 101, '12345678'),
('51601760703068', 'Tri Ermayani, M.Ag', 'Perempuan', 101, '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id` int(2) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `name`) VALUES
(1, 'Fakultas Teknik'),
(2, 'Fakultas Bahasa dan Seni'),
(3, 'Fakultas Ilmu Pendidikan'),
(4, 'Fakultas Ekonomi'),
(5, 'Fakultas Ilmu Sosial'),
(6, 'Fakultas Ilmu Keolahragaan'),
(7, 'Fakultas MIPA');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(4) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `id_fak` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `name`, `id_fak`) VALUES
(101, 'JPTEI', 1),
(102, 'JPTE', 1),
(103, 'JPTM', 1),
(104, 'JPTO', 1),
(105, 'JPTSP', 1),
(106, 'JPTBB', 1),
(201, 'PBSI', 2),
(202, 'PBI', 2),
(203, 'PBA', 2),
(204, 'PBD', 2),
(205, 'PSR', 2),
(206, 'PSM', 2),
(207, 'PST', 2),
(301, 'MP', 3),
(302, 'PLS', 3),
(303, 'PLB', 3),
(304, 'BK', 3),
(305, 'TP', 3),
(306, 'PGSD', 3),
(307, 'PGPAUD', 3),
(401, 'AP', 4),
(402, 'AK', 4),
(403, 'EKO', 4),
(404, 'MNJ', 4),
(501, 'PKNH', 5),
(502, 'PG', 5),
(503, 'SEJARAH', 5),
(504, 'SOSIOLOGI', 5),
(505, 'P IPS', 5),
(506, 'IKOM', 5),
(507, 'APUB', 5),
(601, 'PJKR', 6),
(602, 'PKO', 6),
(603, 'IKOR', 6),
(604, 'PGSD PENJAS', 6),
(701, 'PM', 7),
(702, 'PF', 7),
(703, 'PK', 7),
(704, 'PB', 7),
(705, 'P IPA', 7);

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

CREATE TABLE `kurikulum` (
  `id` int(6) NOT NULL,
  `id_pr` int(6) DEFAULT NULL,
  `id_mk` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurikulum`
--

INSERT INTO `kurikulum` (`id`, `id_pr`, `id_mk`) VALUES
(13, 1011, 'KTF1'),
(14, 1011, 'KTF2'),
(15, 1011, 'KTF3'),
(16, 1011, 'MDK1'),
(17, 1011, 'MDK2'),
(18, 1011, 'MKU1'),
(19, 1011, 'PTI1'),
(20, 1011, 'PTI10'),
(21, 1011, 'PTI11'),
(22, 1011, 'PTI12'),
(23, 1011, 'PTI13'),
(24, 1011, 'PTI14'),
(25, 1011, 'PTI15'),
(26, 1011, 'PTI15'),
(28, 1011, 'PTI16'),
(29, 1011, 'PTI17'),
(31, 1011, 'PTI19'),
(33, 1011, 'PTI2'),
(34, 1011, 'PTI20'),
(35, 1011, 'PTI21'),
(36, 1011, 'PTI22'),
(37, 1011, 'PTI3'),
(41, 1011, 'PTI4'),
(42, 1011, 'PTI5'),
(43, 1011, 'PTI6'),
(44, 1011, 'PTI7'),
(45, 1011, 'PTI8'),
(47, 1011, 'PTI9'),
(48, 1012, 'KTF1'),
(49, 1012, 'KTF2'),
(50, 1012, 'KTF3'),
(51, 1012, 'MKU1'),
(52, 1012, 'MKU2'),
(53, 1012, 'PTI10'),
(54, 1012, 'PTI11'),
(55, 1012, 'PTI12'),
(56, 1012, 'PTI13'),
(57, 1012, 'PTI14'),
(58, 1012, 'PTI15'),
(59, 1012, 'PTI17'),
(60, 1012, 'PTI16'),
(61, 1012, 'PTI18'),
(62, 1012, 'PTI21'),
(63, 1012, 'PTI4');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `id_pr` int(6) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `name`, `id_pr`, `pass`) VALUES
('18520241001', 'Danang Wijaya', 1011, '12345678'),
('18520241002', 'Patricius Luky Aven', 1012, '12345678'),
('18520241003', 'Annisa Amurweni', 1012, '12345678'),
('18520241004', 'Michael Setyohandoko', 1012, '12345678'),
('18520241005', 'Ria Sartika', 1012, '12345678'),
('18520241006', 'Lilik Rahmawati', 1012, '12345678'),
('18520241007', 'Dhea Putri Ramadhani', 1012, '12345678'),
('18520241008', 'Ardian Marthawijaya', 1012, '12345678'),
('18520241009', 'Catur Nur Agustina', 1011, '12345678'),
('18520241010', 'Aditya Rizki', 1011, '12345678'),
('18520241011', 'Dwi Setiawan', 1011, '12345678'),
('18520241012', 'Vicky Varianda', 1011, '12345678'),
('18520241013', 'Dian Amin Muhtahsin', 1012, '12345678'),
('18520241014', 'Adityo Reyhan Putro', 1012, '12345678'),
('18520241015', 'Rosalina Damayanti', 1011, '12345678'),
('18520241016', 'Rifaldi Iqbal', 1011, '12345678'),
('18520241017', 'Ahsan Firdaus', 1011, '12345678'),
('18520241018', 'Muhammad Rizky', 1011, '12345678'),
('18520241019', 'Naafi Rofiiqoh', 1011, '12345678'),
('18520241020', 'Wakhid Syaiful ', 1012, '12345678'),
('18520241022', 'Ibnu Adam', 1011, '12345678'),
('18520244002', 'Firdaus Galuh Prihasta', 1011, '12345678'),
('18520244011', 'Fani Salamah', 1012, '12345678'),
('18520244012', 'Zhafirah Majdina', 1011, '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id` varchar(6) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `sks` int(3) DEFAULT NULL,
  `semester` int(2) DEFAULT NULL,
  `jenis` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id`, `name`, `sks`, `semester`, `jenis`) VALUES
('KTF1', 'Matematika', 2, 1, 'Teori'),
('KTF2', 'Fisika', 2, 1, 'Teori'),
('KTF3', 'Kesehatan dan Keselamatan Kerja', 2, 1, 'Teori'),
('MDK1', 'Ilmu Pendidikan', 2, 3, 'Teori'),
('MDK2', 'Manajemen Pendidikan', 3, 3, 'Teori'),
('MDK3', 'Kurikulum dan Pembelajaran Kejuruan', 2, 5, 'Teori'),
('MDK4', 'Sosio Antropologi Pendidikan', 2, 5, 'Teori'),
('MKU1', 'Pendidikan Agama', 2, 1, 'Teori'),
('MKU2', 'Pendidikan Kewarganegaraan', 2, 5, 'Teori'),
('PTI1', 'Pengantar Teknologi Informasi', 2, 1, 'Teori'),
('PTI10', 'Praktik Pemrograman 2', 2, 2, 'Praktik'),
('PTI11', 'Sistem Operasi', 2, 2, 'Teori'),
('PTI12', 'Algoritma Pemrograman', 2, 2, 'Teori'),
('PTI13', 'Basis Data', 2, 3, 'Teori'),
('PTI14', 'Praktik Basis Data', 2, 3, 'Praktik'),
('PTI15', 'Struktur Data', 2, 3, 'Teori'),
('PTI16', 'Praktik Struktur Data', 2, 3, 'Praktik'),
('PTI17', 'Rekayasa Perangkat Lunak', 2, 4, 'Teori'),
('PTI18', 'Komunikasi Nirkabel', 2, 5, 'Teori'),
('PTI19', 'Pemrograman Visual 2', 2, 4, 'Praktik'),
('PTI2', 'Pemrograman 1', 2, 1, 'Teori'),
('PTI20', 'Sistem Pendukung Keputusan', 2, 4, 'Teori'),
('PTI21', 'Game Edukasi', 2, 4, 'Teori'),
('PTI22', 'Pengolahan Citra Digital', 2, 5, 'Praktik'),
('PTI3', 'Praktik Pemrograman 1', 2, 1, 'Praktik'),
('PTI4', 'Teknik Digital', 2, 1, 'Teori'),
('PTI5', 'Praktik Teknik Digital', 2, 1, 'Praktik'),
('PTI6', 'Logika', 2, 1, 'Teori'),
('PTI7', 'Perakitan dan Instalasi Komputer', 2, 1, 'Praktik'),
('PTI8', 'Organisasi Sistem Komputer', 2, 2, 'Teori'),
('PTI9', 'Pemrograman 2', 2, 2, 'Teori');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(6) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `jenis` varchar(20) DEFAULT NULL,
  `file_link` text NOT NULL,
  `id_ba` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `name`, `jenis`, `file_link`, `id_ba`) VALUES
(8, 'Mengenal Array dalam Visual Basic', 'Power Point', 'https://drive.google.com/drive/folders/18X4RTok6umPnw58l1W_ybkNh6LNFpszf', 8),
(9, 'LinkedList', 'Media Pembelajaran F', 'https://drive.google.com/drive/folders/18X4RTok6umPnw58l1W_ybkNh6LNFpszf', 9);

-- --------------------------------------------------------

--
-- Table structure for table `mengambil`
--

CREATE TABLE `mengambil` (
  `id` int(6) NOT NULL,
  `nim` varchar(11) DEFAULT NULL,
  `id_mk` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mengambil`
--

INSERT INTO `mengambil` (`id`, `nim`, `id_mk`) VALUES
(14, '18520241022', 'PTI5'),
(15, '18520241022', 'PTI4'),
(16, '18520241022', 'PTI6'),
(26, '18520241022', 'KTF1'),
(27, '18520241022', 'KTF2'),
(28, '18520241022', 'MDK3'),
(30, '18520241022', 'PTI9'),
(31, '18520244011', 'KTF1'),
(32, '18520244011', 'KTF2'),
(33, '18520241022', 'PTI8'),
(34, '18520244011', 'KTF3'),
(35, '18520241022', 'PTI7'),
(36, '18520244011', 'MKU1'),
(37, '18520241022', 'PTI6'),
(38, '18520244011', 'MKU2'),
(39, '18520241022', 'PTI5'),
(40, '18520241022', 'PTI11'),
(41, '18520241022', 'PTI4'),
(42, '18520241022', 'PTI3'),
(43, '18520241022', 'PTI22'),
(44, '18520244011', 'PTI11'),
(45, '18520241022', 'PTI21'),
(46, '18520244011', 'PTI5'),
(47, '18520241001', 'PTI13'),
(48, '18520241002', 'PTI14'),
(49, '18520241003', 'PTI14'),
(50, '18520241012', 'PTI15'),
(51, '18520241015', 'PTI15'),
(52, '18520241018', 'PTI15');

-- --------------------------------------------------------

--
-- Table structure for table `mengampu`
--

CREATE TABLE `mengampu` (
  `id` int(6) NOT NULL,
  `id_mk` varchar(6) DEFAULT NULL,
  `nip` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mengampu`
--

INSERT INTO `mengampu` (`id`, `id_mk`, `nip`) VALUES
(25, 'PTI13', '197012182005012001'),
(26, 'PTI14', '197012182005012001'),
(27, 'PTI15', '197012182005012001'),
(28, 'PTI16', '197012182005012001'),
(29, 'PTI2', '197012182005012001'),
(30, 'PTI22', '11310890215487'),
(31, 'KTF1', '11301831128485'),
(32, 'PTI1', '196206251985031002'),
(33, 'MDK2', '196305121989011001'),
(34, 'MDK3', '196402051987031001'),
(35, 'PTI18', '196706081993031001'),
(36, 'PTI12', '198804122018031001'),
(37, 'MDK1', '199102122019032019'),
(38, 'PTI14', '197012182005012001'),
(39, 'PTI14', '197012182005012001');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id` int(6) NOT NULL,
  `nilai` varchar(2) DEFAULT NULL,
  `id_tgs` int(6) DEFAULT NULL,
  `nim` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id`, `nilai`, `id_tgs`, `nim`) VALUES
(1, 'A', 4, '18520241001'),
(2, 'A', 6, '18520241001'),
(3, 'B', 6, '18520241014'),
(4, 'B', 6, '18520241016'),
(5, 'A', 4, '18520241022'),
(6, 'A', 6, '18520241022'),
(7, 'A', 7, '18520241022'),
(8, 'B', 4, '18520241001'),
(9, 'A', 4, '18520244011'),
(10, 'A', 7, '18520244011'),
(11, 'A+', 7, '18520244011');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int(6) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `jenjang` varchar(10) DEFAULT NULL,
  `id_jur` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `name`, `jenjang`, `id_jur`) VALUES
(1011, 'Pendidikan Teknik Informatika', 'S1', 101),
(1012, 'Teknologi Informasi', 'S1', 101),
(1013, 'Pendidikan Teknik Elektronika', 'S1', 101),
(1014, 'Teknik Elektronika', 'D4', 101),
(1021, 'Pendidikan Teknik Elektro', 'S1', 102),
(1022, 'Teknik Elektro', 'D4', 102),
(1023, 'Pendidikan Teknik Mekatronika', 'S1', 102),
(1031, 'Pendidikan Teknik Mesin', 'S1', 103),
(1032, 'Teknik Mesin', 'D4', 103),
(1033, 'Teknik Manufaktur', 'S1', 103),
(1041, 'Pendidikan Teknik Otomotif', 'S1', 104),
(1042, 'Teknik Otomotif', 'D4', 104),
(1051, 'Pendidikan Teknik Sipil dan Perencanaan', 'S1', 105),
(1052, 'Teknik Sipil', 'D4', 105),
(1053, 'Teknik Sipil', 'S1', 105),
(1061, 'Pendidikan Teknik Boga', 'S1', 106),
(1062, 'Teknik Boga', 'D4', 106),
(1063, 'Pendidikan Teknik Busana', 'S1', 106),
(1064, 'Teknik Busana', 'D4', 106),
(1065, 'Tata Rias dan Kecantikan', 'D4', 106),
(2011, 'Pendidikan Bahasa dan Sastra Indonesia', 'S1', 201),
(2012, 'Sastra Indonesia', 'S1', 201),
(2021, 'Pendidikan Bahasa Inggris', 'S1', 202),
(2022, 'Sastra Inggris', 'S1', 202),
(2031, 'Pendidikan Bahasa Jerman', 'S1', 203),
(2032, 'Pendidikan Bahasa Perancis', 'S1', 203),
(2041, 'Pendidikan Bahasa Jawa', 'S1', 204),
(2051, 'Pendidikan Seni Rupa', 'S1', 205),
(2052, 'Pendidikan Seni Kriya dan Kerajinan', 'S1', 205),
(2061, 'Pendidikan Seni Musik', 'S1', 206),
(2071, 'Pendidikan Seni Tari', 'S1', 207),
(3011, 'Manajemen Pendidikan', 'S1', 301),
(3012, 'Kebijakan Pendidikan', 'S1', 301),
(3021, 'Pendidikan Luar Sekolah', 'S1', 302),
(3031, 'Pendidikan Luar Biasa', 'S1', 303),
(3041, 'Bimbingan Konseling', 'S1', 304),
(3042, 'Psikologi', 'S1', 304),
(3051, 'Teknologi Pendidikan', 'S1', 305),
(3061, 'Pendidikan Guru SD', 'S1', 306),
(3071, 'Pendidikan Guru PAUD', 'S1', 307),
(4011, 'Pendidikan Administrasi Perkantoran', 'S1', 401),
(4012, 'Sekretari', 'D4', 401),
(4021, 'Pendidikan Akutansi', 'S1', 402),
(4022, 'Akutansi', 'D4', 402),
(4031, 'Pendidikan Ekonomi', 'S1', 403),
(4041, 'Manajemen', 'S1', 404),
(4042, 'Pemasaran', 'D4', 404),
(5011, 'Pendidikan Kewarganegaraan dan Hukum', 'S1', 501),
(5021, 'Pendidikan Geografi', 'S1', 502),
(5031, 'Pendidikan Sejarah', 'S1', 503),
(5032, 'Ilmu Sejarah', 'S1', 503),
(5041, 'Pendidikan Sosiologi', 'S1', 504),
(5051, 'Pendidikan IPS', 'S1', 505),
(5061, 'Ilmu Komunikasi', 'S1', 506),
(5071, 'Administrasi Publik', 'S1', 507),
(6011, 'Pendidikan Jasmani Kesehatan dan Rekreasi', 'S1', 601),
(6021, 'Pendidikan Kepelatihan Olahraga', 'S1', 602),
(6031, 'Ilmu Keolahragaan', 'S1', 603),
(6041, 'Pendidikan Guru SD Penjas', 'S1', 604),
(7011, 'Pendidikan Matematika', 'S1', 701),
(7012, 'Matematika', 'S1', 701),
(7013, 'Statistika', 'S1', 701),
(7021, 'Pendidikan Fisika', 'S1', 702),
(7022, 'Fisika', 'S1', 702),
(7031, 'Pendidikan Kimia', 'S1', 703),
(7032, 'Kimia', 'S1', 703),
(7041, 'Pendidikan Biologi', 'S1', 704),
(7042, 'Biologi', 'S1', 704),
(7051, 'Pendidikan IPA', 'S1', 705);

-- --------------------------------------------------------

--
-- Table structure for table `silabus`
--

CREATE TABLE `silabus` (
  `id` int(6) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `id_mk` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `silabus`
--

INSERT INTO `silabus` (`id`, `name`, `isi`, `id_mk`) VALUES
(5, 'Silabus Basis Data', 'https://drive.google.com/drive/u/0/folders/18X4RTok6umPnw58l1W_ybkNh6LNFpszf', 'PTI13');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id` int(6) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `jenis` varchar(20) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `id_mk` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `name`, `jenis`, `desc`, `id_mk`) VALUES
(4, 'Labsheet LinkedList', 'Tugas Individu', 'Sebutkan jenis-jenis linkedlist dan gambarkan illustrasinya!', 'PTI4'),
(6, 'Project Pemrograman Visual', 'Individu', 'Buat Project Pemrograman Visual yang menggunakan operasi file', 'PTI19'),
(7, 'Tugas Basis Data #1', 'Presentasi', 'kumpul minggu depan', 'PTI14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `bahan_ajar`
--
ALTER TABLE `bahan_ajar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bahan_ajar_ibfk_1` (`id_mk`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `dosen_ibfk_1` (`id_jur`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jurusan_ibfk_1` (`id_fak`);

--
-- Indexes for table `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kurikulum_ibfk_1` (`id_pr`),
  ADD KEY `kurikulum_ibfk_2` (`id_mk`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `mahasiswa_ibfk_1` (`id_pr`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_ibfk_1` (`id_ba`);

--
-- Indexes for table `mengambil`
--
ALTER TABLE `mengambil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mengambil_ibfk_1` (`nim`),
  ADD KEY `mengambil_ibfk_2` (`id_mk`);

--
-- Indexes for table `mengampu`
--
ALTER TABLE `mengampu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mengampu_ibfk_1` (`id_mk`),
  ADD KEY `mengampu_ibfk_2` (`nip`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penilaian_ibfk_1` (`id_tgs`),
  ADD KEY `penilaian_ibfk_2` (`nim`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prodi_ibfk_1` (`id_jur`);

--
-- Indexes for table `silabus`
--
ALTER TABLE `silabus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `silabus_ibfk_1` (`id_mk`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tugas_ibfk_1` (`id_mk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahan_ajar`
--
ALTER TABLE `bahan_ajar`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kurikulum`
--
ALTER TABLE `kurikulum`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mengambil`
--
ALTER TABLE `mengambil`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `mengampu`
--
ALTER TABLE `mengampu`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `silabus`
--
ALTER TABLE `silabus`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bahan_ajar`
--
ALTER TABLE `bahan_ajar`
  ADD CONSTRAINT `bahan_ajar_ibfk_1` FOREIGN KEY (`id_mk`) REFERENCES `matkul` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`id_jur`) REFERENCES `jurusan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `jurusan_ibfk_1` FOREIGN KEY (`id_fak`) REFERENCES `fakultas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD CONSTRAINT `kurikulum_ibfk_1` FOREIGN KEY (`id_pr`) REFERENCES `prodi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kurikulum_ibfk_2` FOREIGN KEY (`id_mk`) REFERENCES `matkul` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_pr`) REFERENCES `prodi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`id_ba`) REFERENCES `bahan_ajar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mengambil`
--
ALTER TABLE `mengambil`
  ADD CONSTRAINT `mengambil_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mengambil_ibfk_2` FOREIGN KEY (`id_mk`) REFERENCES `matkul` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mengampu`
--
ALTER TABLE `mengampu`
  ADD CONSTRAINT `mengampu_ibfk_1` FOREIGN KEY (`id_mk`) REFERENCES `matkul` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mengampu_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `penilaian_ibfk_1` FOREIGN KEY (`id_tgs`) REFERENCES `tugas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penilaian_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `prodi_ibfk_1` FOREIGN KEY (`id_jur`) REFERENCES `jurusan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `silabus`
--
ALTER TABLE `silabus`
  ADD CONSTRAINT `silabus_ibfk_1` FOREIGN KEY (`id_mk`) REFERENCES `matkul` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tugas`
--
ALTER TABLE `tugas`
  ADD CONSTRAINT `tugas_ibfk_1` FOREIGN KEY (`id_mk`) REFERENCES `matkul` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
