-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Jun 2020 pada 05.57
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klubkarya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_karyailmiah`
--

CREATE TABLE `tb_karyailmiah` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `avatar` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nim` varchar(250) NOT NULL,
  `prodi` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `waktu_kirim` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_karyailmiah`
--

INSERT INTO `tb_karyailmiah` (`id`, `judul`, `avatar`, `nama`, `nim`, `prodi`, `file`, `waktu_kirim`, `status`) VALUES
(21, 'SDD', 'dian.jpg', 'Dian Sitanggang', '11319053', 'D3 TEKNOLOGI INFORMASI', 'SDD-PA1-1920-D3TI09.pdf', '2020-06-25 14:51:18', 'Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_notifikasi`
--

CREATE TABLE `tb_notifikasi` (
  `id` int(11) NOT NULL,
  `isi` varchar(250) NOT NULL,
  `penerima` varchar(250) NOT NULL,
  `waktu_kirim` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_notifikasi`
--

INSERT INTO `tb_notifikasi` (`id`, `isi`, `penerima`, `waktu_kirim`) VALUES
(13, 'Selamat, Karya Ilmiah Anda Diterima dan Sudah Ditampilkan Di Website !', 'Dian Sitanggang', '2020-06-25 14:51:18'),
(14, 'Selamat Datang di Klub Karya Ilmiah ! Kamu Berhasil Diterima di Klub Ini, Silahkan Upload Karya Ilmiah Mu Kapanpun Kamu Mau !', 'Gladys Cindana Pardosi', '2020-06-25 16:50:26'),
(15, 'Selamat Datang di Klub Karya Ilmiah ! Kamu Berhasil Diterima di Klub Ini, Silahkan Upload Karya Ilmiah Mu Kapanpun Kamu Mau !', 'Feby Trivena Kesita Sitinjak', '2020-06-26 03:47:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `waktu_pengiriman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isi_pengumuman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id`, `judul`, `waktu_pengiriman`, `isi_pengumuman`) VALUES
(1, 'sasa', '2020-06-26 03:40:32', 'bwifqufobqeol;');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengunjung`
--

CREATE TABLE `tb_pengunjung` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nim` varchar(250) NOT NULL,
  `prodi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengunjung`
--

INSERT INTO `tb_pengunjung` (`id`, `nama`, `nim`, `prodi`) VALUES
(11, 'irma siagian', '11319052', 'D3 Teknologi Informasi'),
(12, 'Feby Sitinjak', '11319031', 'D3 Teknologi Informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_role`
--

CREATE TABLE `tb_role` (
  `id_role` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_role`
--

INSERT INTO `tb_role` (`id_role`, `nama`) VALUES
(1, 'Admin'),
(2, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nim` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `prodi` varchar(250) NOT NULL,
  `jenis_kelamin` varchar(250) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `motivasi` text NOT NULL,
  `avatar` varchar(250) NOT NULL DEFAULT 'avatar.png',
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nim`, `nama`, `prodi`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `motivasi`, `avatar`, `id_role`) VALUES
(17, 'if319111', 'tiurmalbngaol', '', 'Tiurma Lumbangaol', '', 'Perempuan', '1971-03-20', 'Laguboti', '', '21676315-3567-4c48-a1a2-0cdd0953c265 (2).jpg', 1),
(18, 'if319011', 'gladys123', '11319011', 'Gladys Cindana Pardosi', 'D3 TI', 'Perempuan', '2001-11-15', 'Pematangsiantar', 'ingin berlatih menulis karya ilmiah', 'WhatsApp Image 2020-03-15 at 12.27.45.jpeg', 2),
(19, 'if319003', 'nova123', '11319003', 'Nova Siringo-ringo', 'D3 TEKNOLOGI INFORMASI', 'Perempuan', '2001-05-08', 'Balige', 'Ingin berlatih', 'avatar.png', 2),
(20, 'if319053', 'dian123', '11319053', 'Dian Sitanggang', 'D3 TI', 'Perempuan', '2001-04-18', 'Panei Tongah', 'Ingin berlatih', 'Dian Permatasari Sitanggang_DIII Teknologi Informasi_Fakultas Teknik Informatika dan Elektro_11319053.JPG', 2),
(21, 'if319056', 'lucy123', '11319056', 'Lucy Butar butar', 'D3 TI', 'Perempuan', '2001-05-11', 'Medan', 'ingin berlatih', 'lucy.jpeg', 2),
(27, 'if319031', 'feby123', '11319031', 'Feby Trivena Kesita Sitinjak', 'D3 TI', 'Perempuan', '2001-06-19', 'Samosir', 'ingin belajar mengenai karya ilmiah', 'XTHS8337.JPG', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_karyailmiah`
--
ALTER TABLE `tb_karyailmiah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_notifikasi`
--
ALTER TABLE `tb_notifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengunjung`
--
ALTER TABLE `tb_pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_karyailmiah`
--
ALTER TABLE `tb_karyailmiah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tb_notifikasi`
--
ALTER TABLE `tb_notifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_pengunjung`
--
ALTER TABLE `tb_pengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `tb_role` (`id_role`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
