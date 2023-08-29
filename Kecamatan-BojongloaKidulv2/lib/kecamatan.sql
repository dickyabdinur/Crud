-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Des 2022 pada 05.54
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kecamatan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE `antrian` (
  `id_antrian` int(11) NOT NULL,
  `no_antrian` int(11) NOT NULL,
  `waktu_masuk` datetime NOT NULL,
  `waktu_keluar` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `foto` blob NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `judul` text NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_kategori`
--

CREATE TABLE `berita_kategori` (
  `id_berka` int(100) NOT NULL,
  `id_berita` int(100) NOT NULL,
  `id_kategori` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_penulis`
--

CREATE TABLE `berita_penulis` (
  `id_bepe` int(100) NOT NULL,
  `id_berita` int(100) NOT NULL,
  `id_penulis` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_sumber`
--

CREATE TABLE `berita_sumber` (
  `id_besu` int(100) NOT NULL,
  `id_berita` int(100) NOT NULL,
  `id_sumber` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail`
--

CREATE TABLE `detail` (
  `id` int(11) NOT NULL,
  `id_header` int(11) NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `foto` blob NOT NULL,
  `video` blob NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `nama_tempat` int(11) NOT NULL,
  `jumlah_tempat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_admin`
--

CREATE TABLE `login_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_user`
--

CREATE TABLE `login_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `date_joined` datetime NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login_user`
--

INSERT INTO `login_user` (`id_user`, `username`, `password`, `full_name`, `date_joined`, `level`) VALUES
(1, '123', '123', '123', '2022-12-20 17:52:26', 'admin'),
(7, 'ciki', 'ciki123', 'citato', '2022-12-22 04:50:49', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` int(100) NOT NULL,
  `nama_penulis` varchar(255) NOT NULL,
  `email` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `strukturorganisasi`
--

CREATE TABLE `strukturorganisasi` (
  `id` int(11) NOT NULL,
  `fotostruktur` blob NOT NULL,
  `foto` blob NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumber`
--

CREATE TABLE `sumber` (
  `id_sumber` int(100) NOT NULL,
  `nama_sumber` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `berita_kategori`
--
ALTER TABLE `berita_kategori`
  ADD PRIMARY KEY (`id_berka`),
  ADD KEY `id_berita` (`id_berita`,`id_kategori`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `berita_penulis`
--
ALTER TABLE `berita_penulis`
  ADD PRIMARY KEY (`id_bepe`),
  ADD KEY `id_berita` (`id_berita`,`id_penulis`),
  ADD KEY `id_penulis` (`id_penulis`);

--
-- Indeks untuk tabel `berita_sumber`
--
ALTER TABLE `berita_sumber`
  ADD PRIMARY KEY (`id_besu`),
  ADD KEY `id_berita` (`id_berita`,`id_sumber`),
  ADD KEY `id_sumber` (`id_sumber`);

--
-- Indeks untuk tabel `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_header` (`id_header`);

--
-- Indeks untuk tabel `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- Indeks untuk tabel `strukturorganisasi`
--
ALTER TABLE `strukturorganisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sumber`
--
ALTER TABLE `sumber`
  ADD PRIMARY KEY (`id_sumber`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `berita_kategori`
--
ALTER TABLE `berita_kategori`
  MODIFY `id_berka` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `berita_penulis`
--
ALTER TABLE `berita_penulis`
  MODIFY `id_bepe` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `berita_sumber`
--
ALTER TABLE `berita_sumber`
  MODIFY `id_besu` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id_penulis` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `strukturorganisasi`
--
ALTER TABLE `strukturorganisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sumber`
--
ALTER TABLE `sumber`
  MODIFY `id_sumber` int(100) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berita_kategori`
--
ALTER TABLE `berita_kategori`
  ADD CONSTRAINT `berita_kategori_ibfk_1` FOREIGN KEY (`id_berka`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `berita_kategori_ibfk_2` FOREIGN KEY (`id_berita`) REFERENCES `berita` (`id_berita`),
  ADD CONSTRAINT `berita_kategori_ibfk_3` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`);

--
-- Ketidakleluasaan untuk tabel `berita_penulis`
--
ALTER TABLE `berita_penulis`
  ADD CONSTRAINT `berita_penulis_ibfk_1` FOREIGN KEY (`id_penulis`) REFERENCES `penulis` (`id_penulis`),
  ADD CONSTRAINT `berita_penulis_ibfk_2` FOREIGN KEY (`id_berita`) REFERENCES `berita` (`id_berita`);

--
-- Ketidakleluasaan untuk tabel `berita_sumber`
--
ALTER TABLE `berita_sumber`
  ADD CONSTRAINT `berita_sumber_ibfk_1` FOREIGN KEY (`id_berita`) REFERENCES `berita` (`id_berita`),
  ADD CONSTRAINT `berita_sumber_ibfk_2` FOREIGN KEY (`id_sumber`) REFERENCES `sumber` (`id_sumber`);

--
-- Ketidakleluasaan untuk tabel `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `detail_ibfk_1` FOREIGN KEY (`id_header`) REFERENCES `header` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
