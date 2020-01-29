-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 29, 2020 at 02:50 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdn2setiamulya`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `kelas` varchar(20) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `absen` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `pass` varchar(8) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('uden', '123');

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id`, `nama`) VALUES
('1', 'Islam'),
('2', 'Kristen'),
('3', 'Katolik'),
('4', 'Hindu'),
('5', 'Buddha'),
('6', 'Konghucu');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `bidang` varchar(40) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `jenis_kelamin`, `jabatan`, `bidang`, `foto`) VALUES
('12345678910', 'Uden Suherlan', 'Laki-Laki', 'Wakil Kepala sekolah', 'Guru kls 3', ''),
('192738234', 'Rina', 'Perempuan', 'Bendahara', 'Guru B.Sunda', ''),
('22331155444', 'Hery Heryanto', 'Laki-Laki', 'Sekretaris', 'Guru Olahraga Kls 5', '');

-- --------------------------------------------------------

--
-- Table structure for table `jenis kelamin`
--

CREATE TABLE `jenis kelamin` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis kelamin`
--

INSERT INTO `jenis kelamin` (`id`, `nama`) VALUES
('L', 'Laki-laki'),
('P', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` varchar(10) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `kelas`) VALUES
('01', 'I/A'),
('02', 'I/B'),
('03', 'I/C'),
('04', 'I/D'),
('05', 'II/A'),
('06', 'II/B'),
('07', 'II/C'),
('08', 'II/D'),
('09', 'III/A'),
('10', 'III/B'),
('11', 'III/C'),
('12', 'IV/A'),
('13', 'IV/B'),
('14', 'V/A'),
('15', 'V/B'),
('16', 'VI/A'),
('17', 'VI/B'),
('18', 'VI/C');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id` varchar(50) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `nama_mapel`) VALUES
('001', 'Tematik'),
('002', 'PADB'),
('003', 'PJOK'),
('004', 'Bahasa Sunda'),
('005', 'Matematika'),
('006', 'Pengembangan diri');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `nisn` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `ulangan_harian` int(20) NOT NULL,
  `pts` int(20) NOT NULL,
  `pas` int(20) NOT NULL,
  `rata_rata` int(20) NOT NULL,
  `idnilai` int(20) NOT NULL,
  `semester` varchar(20) DEFAULT '',
  `idmapel` varchar(20) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`nisn`, `kelas`, `ulangan_harian`, `pts`, `pas`, `rata_rata`, `idnilai`, `semester`, `idmapel`) VALUES
('0094693588', '01', 100, 100, 100, 100, 1, 'Ganjil', '001');

-- --------------------------------------------------------

--
-- Table structure for table `pekerortu`
--

CREATE TABLE `pekerortu` (
  `ayah` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `ibu` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profortu`
--

CREATE TABLE `profortu` (
  `ayah` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `ibu` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `nisn` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tempat` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `agama` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `pendidikan_sebelumnya` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `alamat_siswa` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `kelas` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `semester` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `na_ayah` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `na_ibu` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `pek_ayah` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `pek_ibu` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `na_wali` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `pek_wali` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `alamat_wali` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `foto` varchar(10) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nisn`, `nama`, `tempat`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `pendidikan_sebelumnya`, `alamat_siswa`, `kelas`, `semester`, `na_ayah`, `na_ibu`, `pek_ayah`, `pek_ibu`, `na_wali`, `pek_wali`, `alamat_wali`, `foto`) VALUES
('161701013', '0094693588', 'AZKA ADRIAN MAULANA', 'Tasikmalaya', '2009-10-18', 'laki-laki', 'Islam', 'TK', 'Sindangsari', '', 'Ganjil', '', '', '', '', '', '', '', ''),
('161701017', '0099851991', 'AULIA PUTRI RAMADANI', 'Tasikmalaya', '2009-08-29', 'laki-laki', 'Islam', 'TK', 'Perum Tamanjaya', '3', 'Ganjil', '', '', '', '', '', '', '', ''),
('161701018', '0086473604', 'FACHRI MUHAMAD PUTRA IRAWAN', 'Tasikmalaya', '2008-05-17', 'laki-laki', 'Islam', 'TK', 'Sumurdago', '3', 'Ganjil', '', '', '', '', '', '', '', ''),
('161701024', '0095330081', 'INTAN TRI MULIANI SALIMAH', 'Tasikmalaya', '2008-12-22', 'perempuan', 'Islam', 'TK', 'Madewangi', '3', 'Ganjil', '', '', '', '', '', '', '', ''),
('161701029', '0107654606', 'MUHAMAD ZEIN NAJRIL ILHAM', 'Tasikmalaya', '2010-02-14', 'laki-laki', 'Islam', 'TK', 'Sidanglengo', '3', 'Ganjil', '', '', '', '', '', '', '', ''),
('u76787', '68467', 'r8u67nuy', 'ftuy', '2020-01-22', 'Laki-Laki', 'Islam', 'PAUD', '', 'VIb', 'Ganjil', '', '', '', '', '', '', '', ''),
('92939499', '27121222', 'cydoshdt', 'seoul korsel', '2020-02-20', 'Perempuan', 'Islam', 'PAUD', 'jln kasih syang kp. cinta', 'VIA', 'Ganjil', 'suho', 'baeki', 'CEO', 'Desainer', '', '', '', ''),
('1111111', '222222', 'adsf', 'bandung', '2020-01-27', 'Perempuan', 'Islam', 'PAUD', 'NDADBHWKF', '', 'Genap', 'chanyeol', 'baeki', 'CEO', 'gegeroh', '', '', '', ''),
('44444444', '4949499494', 'deti permatasari', 'tasikmalaya', '2020-01-08', 'Perempuan', '', 'PAUD', 'jln kasih sayang', 'VI/A', 'Genap', 'didi', 'munaroh', 'buruh', 'irt', '', '', '', ''),
('9292929292', '292929292', 'kdfrj', 'seoul korsel', '2020-01-14', 'Perempuan', 'Islam', 'tk', 'jln jln', 'III/A', 'Ganjil', 'deden', 'siti', 'buruh', 'irt', '', '', '', ''),
('28282828', '828282882', 'deti permatasari', 'tasikmalaya', '2020-01-08', 'Perempuan', 'Islam', 'PAUD', 'cikatomas', 'II/D', 'Ganjil', 'juned', 'munaroh', 'buruh', 'irt', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `walisiswa`
--

CREATE TABLE `walisiswa` (
  `nama` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `pekerjaan` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `jenis kelamin`
--
ALTER TABLE `jenis kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`idnilai`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `idnilai` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
