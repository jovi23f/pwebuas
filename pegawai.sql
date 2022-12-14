-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 01:32 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajarlaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `pegawai_id` int(11) NOT NULL,
  `pegawai_nama` varchar(50) NOT NULL,
  `pegawai_jabatan` varchar(20) NOT NULL,
  `pegawai_umur` int(11) NOT NULL,
  `pegawai_alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`pegawai_id`, `pegawai_nama`, `pegawai_jabatan`, `pegawai_umur`, `pegawai_alamat`) VALUES
(1, 'Zainudin', 'Manager', 43, 'Jl. Asmara dua'),
(2, 'Diki Alfarabi Hadi', 'Staff IT', 26, 'Jl. Merak Putih'),
(6, 'winter', 'singer', 22, 'Kwangya 12'),
(7, 'Joni', 'Web Designer', 25, 'Jl. Panglateh'),
(8, 'Elma Sudiati', 'quo', 38, 'Gg. Cikapayang No. 255, Sungai Penuh 32691, Riau'),
(9, 'Slamet Lega Rajata S.Farm', 'voluptatem', 32, 'Gg. Supono No. 84, Sawahlunto 47885, SulSel'),
(10, 'Jaya Naradi Situmorang', 'quasi', 33, 'Dk. Imam Bonjol No. 814, Palu 46518, SumUt'),
(11, 'Rendy Habibi S.Psi', 'sit', 37, 'Gg. Basuki No. 314, Administrasi Jakarta Pusat 73176, NTB'),
(12, 'Yahya Sinaga', 'enim', 26, 'Ki. Industri No. 238, Sungai Penuh 38002, SulSel'),
(13, 'Hesti Janet Hasanah S.Sos', 'est', 35, 'Dk. Wahidin Sudirohusodo No. 637, Surabaya 44801, Banten'),
(14, 'Sari Rahmi Melani', 'laborum', 36, 'Psr. Dipatiukur No. 227, Balikpapan 19234, SulTeng'),
(15, 'Clara Wahyuni', 'eveniet', 38, 'Jln. Otista No. 163, Dumai 91798, KalUt'),
(16, 'Dasa Jais Maheswara', 'esse', 32, 'Kpg. Radio No. 94, Padangpanjang 14989, Bali'),
(17, 'Viktor Prasasta', 'sunt', 27, 'Jln. BKR No. 694, Surakarta 95932, NTB'),
(18, 'Lurhur Damanik', 'nemo', 29, 'Psr. Salak No. 990, Bau-Bau 25079, SulSel'),
(19, 'Zelaya Nasyidah', 'sit', 29, 'Jr. Kali No. 589, Administrasi Jakarta Barat 96388, Gorontalo'),
(20, 'Oman Damanik', 'maiores', 28, 'Psr. Taman No. 461, Banjarbaru 37220, Maluku'),
(21, 'Lili Anggraini', 'id', 25, 'Jr. Baranang No. 631, Pariaman 57837, JaTim'),
(22, 'Harto Prabowo', 'quos', 38, 'Jln. Ki Hajar Dewantara No. 213, Tual 51023, Jambi'),
(23, 'Kanda Habibi', 'nam', 35, 'Kpg. Baan No. 69, Blitar 72288, Lampung'),
(24, 'Wani Prastuti', 'doloremque', 33, 'Gg. Bakau No. 67, Pagar Alam 78006, Papua'),
(25, 'Vero Natsir', 'illum', 34, 'Ds. Salak No. 391, Pontianak 80916, KalTeng'),
(26, 'Paris Hani Nuraini S.IP', 'quo', 39, 'Ds. Dahlia No. 744, Ambon 99599, KalTeng'),
(27, 'Padma Salimah Suartini S.H.', 'ab', 38, 'Ds. Bawal No. 241, Salatiga 42046, Papua'),
(28, 'Kasiran Pangeran Prasetyo', 'aut', 35, 'Ki. Fajar No. 272, Prabumulih 45913, Aceh'),
(29, 'Aslijan Sirait', 'repellendus', 25, 'Gg. Ujung No. 11, Pekanbaru 57006, MalUt'),
(30, 'Ira Nuraini', 'magnam', 36, 'Gg. Yohanes No. 441, Jambi 46510, SumSel'),
(31, 'Kiandra Puspita', 'enim', 40, 'Dk. Kali No. 33, Pontianak 12025, MalUt'),
(32, 'Harsaya Prayoga', 'esse', 25, 'Kpg. Dago No. 928, Kupang 92150, Bali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`pegawai_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `pegawai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
