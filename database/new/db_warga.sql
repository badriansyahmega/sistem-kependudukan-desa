-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2021 pada 08.40
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_warga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartu_keluarga`
--

CREATE TABLE `kartu_keluarga` (
  `id_keluarga` int(11) NOT NULL,
  `nomor_keluarga` varchar(16) NOT NULL,
  `id_kepala_keluarga` int(11) NOT NULL,
  `alamat_keluarga` text NOT NULL,
  `desa_kelurahan_keluarga` varchar(30) NOT NULL,
  `kecamatan_keluarga` varchar(30) NOT NULL,
  `kabupaten_kota_keluarga` varchar(30) NOT NULL,
  `provinsi_keluarga` varchar(30) NOT NULL,
  `negara_keluarga` varchar(30) NOT NULL,
  `rt_keluarga` varchar(3) NOT NULL,
  `rw_keluarga` varchar(3) NOT NULL,
  `kode_pos_keluarga` varchar(5) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kartu_keluarga`
--

INSERT INTO `kartu_keluarga` (`id_keluarga`, `nomor_keluarga`, `id_kepala_keluarga`, `alamat_keluarga`, `desa_kelurahan_keluarga`, `kecamatan_keluarga`, `kabupaten_kota_keluarga`, `provinsi_keluarga`, `negara_keluarga`, `rt_keluarga`, `rw_keluarga`, `kode_pos_keluarga`, `id_user`, `created_at`, `updated_at`) VALUES
(9, '36537255363536', 18, 'Jepatlor', 'Jepatlor', 'Tayu', 'Pati', 'Jawa Tengah', 'Indonesia', '08', '03', '59155', 1, '2021-11-29 07:28:53', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `meninggal`
--

CREATE TABLE `meninggal` (
  `id_meninggal` int(11) NOT NULL,
  `nik_meninggal` varchar(16) NOT NULL,
  `nama_meninggal` varchar(45) NOT NULL,
  `tempat_lahir_meninggal` varchar(30) NOT NULL,
  `tanggal_lahir_meninggal` date NOT NULL,
  `jenis_kelamin_meninggal` enum('L','P') NOT NULL,
  `alamat_ktp_meninggal` text NOT NULL,
  `alamat_meninggal` text NOT NULL,
  `desa_kelurahan_meninggal` varchar(30) NOT NULL,
  `kecamatan_meninggal` varchar(30) NOT NULL,
  `kabupaten_kota_meninggal` varchar(30) NOT NULL,
  `provinsi_meninggal` varchar(30) NOT NULL,
  `negara_meninggal` varchar(30) NOT NULL,
  `rt_meninggal` varchar(3) NOT NULL,
  `rw_meninggal` varchar(3) NOT NULL,
  `agama_meninggal` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `pendidikan_terakhir_meninggal` varchar(20) NOT NULL,
  `pekerjaan_meninggal` varchar(20) NOT NULL,
  `status_perkawinan_meninggal` enum('Menikah','Belum Menikah') NOT NULL,
  `status_meninggal` enum('Tetap','Kontrak') NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tgl_meninggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `meninggal`
--

INSERT INTO `meninggal` (`id_meninggal`, `nik_meninggal`, `nama_meninggal`, `tempat_lahir_meninggal`, `tanggal_lahir_meninggal`, `jenis_kelamin_meninggal`, `alamat_ktp_meninggal`, `alamat_meninggal`, `desa_kelurahan_meninggal`, `kecamatan_meninggal`, `kabupaten_kota_meninggal`, `provinsi_meninggal`, `negara_meninggal`, `rt_meninggal`, `rw_meninggal`, `agama_meninggal`, `pendidikan_terakhir_meninggal`, `pekerjaan_meninggal`, `status_perkawinan_meninggal`, `status_meninggal`, `id_user`, `created_at`, `updated_at`, `tgl_meninggal`) VALUES
(37, '333319199333311', 'Slamet Raharjo', 'Pati', '1978-08-16', 'L', 'Jepatlor', 'Jepatlor', 'Jepatlor', 'Tayu', 'Pati', 'Jawa Tengah', 'Indonesia', '008', '003', 'Islam', 'S1', 'Wiraswasta', 'Menikah', 'Tetap', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-11-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasi`
--

CREATE TABLE `mutasi` (
  `id_mutasi` int(11) NOT NULL,
  `nik_mutasi` varchar(16) NOT NULL,
  `nama_mutasi` varchar(45) NOT NULL,
  `tempat_lahir_mutasi` varchar(30) NOT NULL,
  `tanggal_lahir_mutasi` date NOT NULL,
  `jenis_kelamin_mutasi` enum('L','P') NOT NULL,
  `alamat_ktp_mutasi` text NOT NULL,
  `alamat_mutasi` text NOT NULL,
  `desa_kelurahan_mutasi` varchar(30) NOT NULL,
  `kecamatan_mutasi` varchar(30) NOT NULL,
  `kabupaten_kota_mutasi` varchar(30) NOT NULL,
  `provinsi_mutasi` varchar(30) NOT NULL,
  `negara_mutasi` varchar(30) NOT NULL,
  `rt_mutasi` varchar(3) NOT NULL,
  `rw_mutasi` varchar(3) NOT NULL,
  `agama_mutasi` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `pendidikan_terakhir_mutasi` varchar(20) NOT NULL,
  `pekerjaan_mutasi` varchar(20) NOT NULL,
  `status_perkawinan_mutasi` enum('Menikah','Belum Menikah') NOT NULL,
  `status_mutasi` enum('Tetap','Kontrak') NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mutasi`
--

INSERT INTO `mutasi` (`id_mutasi`, `nik_mutasi`, `nama_mutasi`, `tempat_lahir_mutasi`, `tanggal_lahir_mutasi`, `jenis_kelamin_mutasi`, `alamat_ktp_mutasi`, `alamat_mutasi`, `desa_kelurahan_mutasi`, `kecamatan_mutasi`, `kabupaten_kota_mutasi`, `provinsi_mutasi`, `negara_mutasi`, `rt_mutasi`, `rw_mutasi`, `agama_mutasi`, `pendidikan_terakhir_mutasi`, `pekerjaan_mutasi`, `status_perkawinan_mutasi`, `status_mutasi`, `id_user`, `created_at`, `updated_at`) VALUES
(19, '333355567889988', 'Nindya Ratna', 'Pati', '2000-06-14', 'P', 'Jepatlor', 'Jepatlor', 'Jepatlor', 'Tayu', 'Pati', 'Jawa Tengah', 'Indonesia', '001', '002', 'Islam', 'SMA', 'Wirausaha', 'Belum Menikah', 'Tetap', 1, '2021-11-29 07:35:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(45) NOT NULL,
  `username_user` varchar(20) NOT NULL,
  `password_user` varchar(32) NOT NULL,
  `keterangan_user` text NOT NULL,
  `status_user` enum('Admin','RT','RW') NOT NULL,
  `desa_kelurahan_user` varchar(30) NOT NULL,
  `kecamatan_user` varchar(30) NOT NULL,
  `kabupaten_kota_user` varchar(30) NOT NULL,
  `provinsi_user` varchar(30) NOT NULL,
  `negara_user` varchar(30) NOT NULL,
  `rt_user` varchar(3) NOT NULL,
  `rw_user` varchar(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username_user`, `password_user`, `keterangan_user`, `status_user`, `desa_kelurahan_user`, `kecamatan_user`, `kabupaten_kota_user`, `provinsi_user`, `negara_user`, `rt_user`, `rw_user`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin Desa', 'Admin', 'Jepatlor', 'Tayu', 'Pati', 'Jawa Tengah', 'Indonesia', '00', '00', '2021-11-29 07:20:23', '2020-10-19 18:44:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `id_warga` int(11) NOT NULL,
  `nik_warga` varchar(16) NOT NULL,
  `nama_warga` varchar(45) NOT NULL,
  `tempat_lahir_warga` varchar(30) NOT NULL,
  `tanggal_lahir_warga` date NOT NULL,
  `jenis_kelamin_warga` enum('L','P') NOT NULL,
  `alamat_ktp_warga` text NOT NULL,
  `alamat_warga` text NOT NULL,
  `desa_kelurahan_warga` varchar(30) NOT NULL,
  `kecamatan_warga` varchar(30) NOT NULL,
  `kabupaten_kota_warga` varchar(30) NOT NULL,
  `provinsi_warga` varchar(30) NOT NULL,
  `negara_warga` varchar(30) NOT NULL,
  `rt_warga` varchar(3) NOT NULL,
  `rw_warga` varchar(3) NOT NULL,
  `agama_warga` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `pendidikan_terakhir_warga` varchar(20) NOT NULL,
  `pekerjaan_warga` varchar(20) NOT NULL,
  `status_perkawinan_warga` enum('Menikah','Belum Menikah') NOT NULL,
  `status_warga` enum('Tetap','Kontrak') NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sebagai` enum('Ibu','Anak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`id_warga`, `nik_warga`, `nama_warga`, `tempat_lahir_warga`, `tanggal_lahir_warga`, `jenis_kelamin_warga`, `alamat_ktp_warga`, `alamat_warga`, `desa_kelurahan_warga`, `kecamatan_warga`, `kabupaten_kota_warga`, `provinsi_warga`, `negara_warga`, `rt_warga`, `rw_warga`, `agama_warga`, `pendidikan_terakhir_warga`, `pekerjaan_warga`, `status_perkawinan_warga`, `status_warga`, `id_user`, `created_at`, `updated_at`, `sebagai`) VALUES
(1, '3333111888389497', 'Muhammad Badriansyah', 'Pati', '1997-11-17', 'L', 'Jepatlor', 'Jepatlor', 'Jepatlor', 'Tayu', 'Pati', 'Jawa Tengah', 'Indonesia', '008', '003', 'Islam', 'SMA', 'Mahasiswa', 'Belum Menikah', 'Tetap', 1, '2021-11-29 07:20:46', '0000-00-00 00:00:00', 'Ibu'),
(18, '333319199333311', 'Slamet Raharjo', 'Pati', '1978-08-16', 'L', 'Jepatlor', 'Jepatlor', 'Jepatlor', 'Tayu', 'Pati', 'Jawa Tengah', 'Indonesia', '008', '003', 'Islam', 'S1', 'Wiraswasta', 'Menikah', 'Tetap', 1, '2021-11-29 07:23:08', '0000-00-00 00:00:00', 'Ibu'),
(19, '33339873734834', 'Sri Rejeki', 'Pati', '1986-12-24', 'P', 'Jepatlor', 'Jepatlor', 'Jepatlor', 'Tayu', 'Pati', 'Jawa Tengah', 'Indonesia', '008', '003', 'Islam', 'S1', 'Wirausaha', 'Menikah', 'Tetap', 1, '2021-11-29 07:25:32', '0000-00-00 00:00:00', 'Ibu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga_has_kartu_keluarga`
--

CREATE TABLE `warga_has_kartu_keluarga` (
  `id_warga` int(11) NOT NULL,
  `id_keluarga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `warga_has_kartu_keluarga`
--

INSERT INTO `warga_has_kartu_keluarga` (`id_warga`, `id_keluarga`) VALUES
(1, 9),
(19, 9);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD PRIMARY KEY (`id_keluarga`),
  ADD KEY `id_kepala_keluarga` (`id_kepala_keluarga`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `meninggal`
--
ALTER TABLE `meninggal`
  ADD PRIMARY KEY (`id_meninggal`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`id_mutasi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `warga_has_kartu_keluarga`
--
ALTER TABLE `warga_has_kartu_keluarga`
  ADD KEY `id_penduduk` (`id_warga`,`id_keluarga`),
  ADD KEY `warga_has_kartu_keluarga_ibfk_2` (`id_keluarga`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  MODIFY `id_keluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `meninggal`
--
ALTER TABLE `meninggal`
  MODIFY `id_meninggal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `mutasi`
--
ALTER TABLE `mutasi`
  MODIFY `id_mutasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD CONSTRAINT `kartu_keluarga_ibfk_1` FOREIGN KEY (`id_kepala_keluarga`) REFERENCES `warga` (`id_warga`),
  ADD CONSTRAINT `kartu_keluarga_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `mutasi`
--
ALTER TABLE `mutasi`
  ADD CONSTRAINT `mutasi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD CONSTRAINT `warga_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `warga_has_kartu_keluarga`
--
ALTER TABLE `warga_has_kartu_keluarga`
  ADD CONSTRAINT `warga_has_kartu_keluarga_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `warga_has_kartu_keluarga_ibfk_2` FOREIGN KEY (`id_keluarga`) REFERENCES `kartu_keluarga` (`id_keluarga`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
