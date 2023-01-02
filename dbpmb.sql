-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 07:03 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpmb`
--

-- --------------------------------------------------------

--
-- Table structure for table `alquran`
--

CREATE TABLE `alquran` (
  `idalquran` int(11) NOT NULL,
  `namamahasantri` varchar(300) NOT NULL,
  `asaldomisili` varchar(200) NOT NULL,
  `tempatseleksi` varchar(100) NOT NULL,
  `tesbacaan` varchar(100) NOT NULL,
  `nilaibacaan` varchar(100) NOT NULL,
  `nilaitajwid` varchar(100) NOT NULL,
  `teshafalan` varchar(100) NOT NULL,
  `jmlhhafalan` varchar(100) NOT NULL,
  `nilaihafalan` varchar(100) NOT NULL,
  `nilaitajwidhafalan` varchar(100) NOT NULL,
  `kemampuanhafalan` varchar(100) NOT NULL,
  `mahasantri_idmahasantri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `idberkas` int(11) NOT NULL,
  `pengiriman` varchar(45) NOT NULL,
  `scanBerkas` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `idinformasi` int(11) NOT NULL,
  `mediaInformasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `idjurusan` int(11) NOT NULL,
  `namaJurusan` enum('ppl','dm') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `idkecamatan` int(11) NOT NULL,
  `namaKecamatan` varchar(60) DEFAULT NULL,
  `kota_idkota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `idkeluarga` int(11) NOT NULL,
  `namaAyah` varchar(60) NOT NULL,
  `namaIbu` varchar(60) NOT NULL,
  `pkjAyah` varchar(50) NOT NULL,
  `pkjIbu` varchar(50) NOT NULL,
  `pdkAyah` varchar(45) NOT NULL,
  `pdkIbu` varchar(45) NOT NULL,
  `jml_saudara` int(11) NOT NULL,
  `hpKeluarga` varchar(50) NOT NULL,
  `keluargacol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `idkelurahan` int(11) NOT NULL,
  `namaKelurahan` varchar(60) NOT NULL,
  `kecamatan_idkecamatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `idkota` int(11) NOT NULL,
  `namaKota` varchar(60) NOT NULL,
  `provinsi_idprovinsi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasantri`
--

CREATE TABLE `mahasantri` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `tmp_lahir` varchar(45) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `anak` varchar(45) NOT NULL,
  `no_hp` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` longtext NOT NULL,
  `pendidikan_idpendidikan` int(11) NOT NULL,
  `keluarga_idkeluarga` int(11) NOT NULL,
  `jurusan_idjurusan` int(11) NOT NULL,
  `informasi_idinformasi` int(11) NOT NULL,
  `provinsi_idprovinsi` int(11) NOT NULL,
  `profil_idprofil` int(11) NOT NULL,
  `berkas_idberkas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `mahasantri`
--

INSERT INTO `mahasantri` (`id`, `nama`, `tmp_lahir`, `tgl_lahir`, `anak`, `no_hp`, `email`, `alamat`, `pendidikan_idpendidikan`, `keluarga_idkeluarga`, `jurusan_idjurusan`, `informasi_idinformasi`, `provinsi_idprovinsi`, `profil_idprofil`, `berkas_idberkas`) VALUES
(1, 'Andika Alifian', 'Wonogiri', '2023-01-01', '1', '085714118514', 'andfian0520@gmail.com', 'DKI Jakarta', 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `idpendidikan` int(11) NOT NULL,
  `n_sekolah` varchar(50) NOT NULL,
  `jurusan` varchar(15) NOT NULL,
  `thn_lulus` int(11) NOT NULL,
  `citaCita` longtext NOT NULL,
  `prestasi` longtext DEFAULT NULL,
  `penyakit` longtext NOT NULL,
  `perokok` enum('Ya','Tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `idprofil` int(11) NOT NULL,
  `pengetahuanprofil` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `idprovinsi` int(11) NOT NULL,
  `namaProvinsi` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `survei`
--

CREATE TABLE `survei` (
  `idsurvei` int(11) NOT NULL,
  `namamahasantri` varchar(200) NOT NULL,
  `nohandphone` varchar(45) NOT NULL,
  `namapewawancara` varchar(100) NOT NULL,
  `tempatseleksi` varchar(100) NOT NULL,
  `sktm` varchar(100) NOT NULL,
  `catatansktm` longtext NOT NULL,
  `programbeasiswa` varchar(100) NOT NULL,
  `catatanprogram` longtext NOT NULL,
  `izinbeasiswa` varchar(100) NOT NULL,
  `catatanizinbeasiswa` longtext NOT NULL,
  `statuskeluarga` varchar(100) NOT NULL,
  `catatanstatuskeluarga` longtext NOT NULL,
  `pendidikankeluarga` varchar(100) NOT NULL,
  `catatanpendidikan` longtext NOT NULL,
  `usiapendidikan` varchar(100) NOT NULL,
  `catatanusiapendidikan` longtext NOT NULL,
  `kesehatankeluarga` varchar(100) NOT NULL,
  `catatankesehatan` longtext NOT NULL,
  `jenispekerjaan` varchar(100) NOT NULL,
  `catatanpekerjaan` longtext NOT NULL,
  `statusrumah` varchar(100) NOT NULL,
  `catatanrumah` longtext NOT NULL,
  `luasrumah` varchar(100) NOT NULL,
  `catatanluasrumah` longtext NOT NULL,
  `dindingrumah` varchar(100) NOT NULL,
  `catatandinding` longtext NOT NULL,
  `ataprumah` varchar(100) NOT NULL,
  `catatanatap` longtext NOT NULL,
  `lantairumah` varchar(100) NOT NULL,
  `catatanlantai` longtext NOT NULL,
  `alatmasak` varchar(100) NOT NULL,
  `catatanalatmasak` longtext NOT NULL,
  `perabotan` varchar(100) NOT NULL,
  `catatanperabotan` longtext NOT NULL,
  `sumberair` varchar(100) NOT NULL,
  `catatansumberair` longtext NOT NULL,
  `mck` varchar(100) NOT NULL,
  `catatanmck` longtext NOT NULL,
  `penerangan` varchar(100) NOT NULL,
  `catatanpenerangan` longtext NOT NULL,
  `lokasirumah` varchar(100) NOT NULL,
  `catatanlokasi` longtext NOT NULL,
  `tataletak` varchar(100) NOT NULL,
  `catatantataletak` longtext NOT NULL,
  `miliktanah` varchar(100) NOT NULL,
  `catatanmiliktanah` longtext NOT NULL,
  `harta` varchar(100) NOT NULL,
  `catatanharta` longtext NOT NULL,
  `mahasantri_idmahasantri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tanyajawab`
--

CREATE TABLE `tanyajawab` (
  `idtanyajawab` int(11) NOT NULL,
  `namamahasantri` varchar(200) NOT NULL,
  `asaldomisili` varchar(200) NOT NULL,
  `namapewawancara` varchar(200) NOT NULL,
  `tempatseleksi` varchar(100) NOT NULL,
  `visimisi` varchar(100) NOT NULL,
  `catatanvisimisi` longtext NOT NULL,
  `komitmen` varchar(100) NOT NULL,
  `catatankomitmen` longtext NOT NULL,
  `tanggungjawab` varchar(100) NOT NULL,
  `catatantanggungjawab` longtext NOT NULL,
  `kejujuran` varchar(100) NOT NULL,
  `catatankejujuran` longtext NOT NULL,
  `pekerjakeras` varchar(100) NOT NULL,
  `catatanpekerjakeras` longtext NOT NULL,
  `bekerjasama` varchar(100) NOT NULL,
  `catatanbekerjasama` longtext NOT NULL,
  `kemandirian` varchar(100) NOT NULL,
  `catatankemandirian` longtext NOT NULL,
  `tolongmenolong` varchar(100) NOT NULL,
  `catatantolongpenolong` longtext NOT NULL,
  `peduli` varchar(100) NOT NULL,
  `catatanpeduli` longtext NOT NULL,
  `pembelajar` varchar(100) NOT NULL,
  `catatanpembelajaran` longtext NOT NULL,
  `menghargaiprestasi` varchar(100) NOT NULL,
  `catatanmenghargai` longtext NOT NULL,
  `percayadiri` varchar(100) NOT NULL,
  `catatanpercayadiri` longtext NOT NULL,
  `demokratis` varchar(100) NOT NULL,
  `catatandemokratis` longtext NOT NULL,
  `disiplinwaktu` varchar(100) NOT NULL,
  `catatandisiplin` longtext NOT NULL,
  `menjaganamabaik` varchar(100) NOT NULL,
  `catatannamabaik` longtext NOT NULL,
  `salam` varchar(100) NOT NULL,
  `catatansalam` longtext NOT NULL,
  `motivasi` varchar(100) NOT NULL,
  `catatanmotivasi` longtext NOT NULL,
  `brgpolutan` varchar(100) NOT NULL,
  `catatanbrgpolutan` longtext NOT NULL,
  `brgharam` varchar(100) NOT NULL,
  `catatanbrgharam` longtext NOT NULL,
  `riwayatpenyakit` varchar(100) NOT NULL,
  `catatanriwayatpenyakit` longtext NOT NULL,
  `ceritasingkat` varchar(100) NOT NULL,
  `catatancerita` longtext NOT NULL,
  `mediakomunikasi` varchar(100) NOT NULL,
  `catatanmediakomunikasi` longtext NOT NULL,
  `mahasantri_idmahasantri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alquran`
--
ALTER TABLE `alquran`
  ADD PRIMARY KEY (`idalquran`);

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`idberkas`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`idinformasi`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`idjurusan`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`idkecamatan`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`idkeluarga`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`idkelurahan`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`idkota`);

--
-- Indexes for table `mahasantri`
--
ALTER TABLE `mahasantri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`idpendidikan`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`idprofil`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`idprovinsi`);

--
-- Indexes for table `survei`
--
ALTER TABLE `survei`
  ADD PRIMARY KEY (`idsurvei`);

--
-- Indexes for table `tanyajawab`
--
ALTER TABLE `tanyajawab`
  ADD PRIMARY KEY (`idtanyajawab`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alquran`
--
ALTER TABLE `alquran`
  MODIFY `idalquran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `idberkas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `idinformasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `idjurusan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `idkecamatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `idkeluarga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `idkelurahan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `idkota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasantri`
--
ALTER TABLE `mahasantri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `idpendidikan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `idprovinsi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survei`
--
ALTER TABLE `survei`
  MODIFY `idsurvei` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tanyajawab`
--
ALTER TABLE `tanyajawab`
  MODIFY `idtanyajawab` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
