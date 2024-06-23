-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2024 pada 11.14
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `administrasi`
--

CREATE TABLE `administrasi` (
  `Id_administrasi` varchar(10) NOT NULL,
  `NIS` varchar(13) DEFAULT NULL,
  `jenis_administrasi` enum('Pendaftaran','pembayaran SPP','Izin Tidak Masuk') DEFAULT NULL,
  `tanggal_administrasi` date DEFAULT NULL,
  `biaya_administrasi` int(11) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `NIP` varchar(13) NOT NULL,
  `nama_guru` varchar(20) DEFAULT NULL,
  `Alamat_guru` varchar(50) DEFAULT NULL,
  `JK` varchar(20) DEFAULT NULL,
  `Tanggal_Lahir_guru` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`NIP`, `nama_guru`, `Alamat_guru`, `JK`, `Tanggal_Lahir_guru`) VALUES
('112233', 'Pak Mardi', 'Solo selatan', 'Laki Laki', '2024-03-15'),
('12342', 'genta', 'jawa timur', 'laki laki', '2024-03-13'),
('2015002', 'Bu yeva', 'Bekasi Utara', 'Perempuan', '2024-04-02'),
('20203020002', 'Reyhan Tri Kurniawan', 'Bekasi Utara', 'Laki Laki', '2024-04-21'),
('20203020003', 'Puja Vita Maharani', 'Tegal', 'Perempuan', '2024-04-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_pelajaran`
--

CREATE TABLE `jadwal_pelajaran` (
  `id_jadwal` int(11) NOT NULL,
  `Hari` varchar(18) DEFAULT NULL,
  `Jam_mulai` time DEFAULT NULL,
  `Jam_selesai` time DEFAULT NULL,
  `kode_kelas` varchar(13) DEFAULT NULL,
  `kode_ruangan` varchar(5) DEFAULT NULL,
  `NIP` varchar(13) DEFAULT NULL,
  `kode_mapel` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jadwal_pelajaran`
--

INSERT INTO `jadwal_pelajaran` (`id_jadwal`, `Hari`, `Jam_mulai`, `Jam_selesai`, `kode_kelas`, `kode_ruangan`, `NIP`, `kode_mapel`) VALUES
(1, 'Senin', '16:52:00', '17:53:00', '1234', '101', '12342', '12233'),
(2, ' Selasa', '07:00:00', '11:00:00', '63123', '201', '112233', '1421'),
(7, 'Rabu', '14:00:00', '15:00:00', '1235', '302', '12342', '123'),
(10, 'Kamis', '07:00:00', '11:45:00', '1001', '303', '12342', '12233'),
(11, 'Jumat', '13:00:00', '15:45:00', '1002', '202', '12342', '123'),
(12, 'Senin', '07:00:00', '11:45:00', '2019001', '202', '2015002', '100001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `kode_kelas` varchar(13) NOT NULL,
  `wali_kelas` varchar(20) DEFAULT NULL,
  `tahun_ajaran` varchar(4) DEFAULT NULL,
  `jumlah_siswa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `wali_kelas`, `tahun_ajaran`, `jumlah_siswa`) VALUES
('1001', 'radit', '2021', 21),
('1002', 'Widi', '2021', 30),
('1104', 'ramsha', '2022', 22),
('1234', 'ramsha', '2023', 21),
('1235', 'radit34', '2022', 20),
('2019001', 'Bu Yeva', '2019', 32),
('63123', 'Kevin', '2022', 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `kode_mapel` varchar(10) NOT NULL,
  `nama_mapel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`kode_mapel`, `nama_mapel`) VALUES
('100001', 'Kewirausahaan'),
('1001', 'Rekayasa Perangkat Lunak'),
('1002', 'Desain Komputer Visual'),
('12233', 'Basis Data'),
('122334', 'Pemrograman Lanjut'),
('123', 'Statistika Pemrograman'),
('1421', 'Sistem Analisis Pemrograman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `Kode_Nilai` varchar(11) NOT NULL,
  `NIS` varchar(13) DEFAULT NULL,
  `kode_mapel` varchar(10) DEFAULT NULL,
  `nilai_tugas` int(11) DEFAULT NULL,
  `nilai_UTS` int(11) DEFAULT NULL,
  `nilai_UAS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `kode_ruangan` varchar(5) NOT NULL,
  `Kapasitas_ruangan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`kode_ruangan`, `Kapasitas_ruangan`) VALUES
('101', 43),
('201', 20),
('202', 50),
('203', 40),
('204', 30),
('301', 40),
('302', 50),
('303', 64),
('304', 32),
('401', 50),
('501', 100),
('503', 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `NIS` varchar(13) NOT NULL,
  `nama_siswa` varchar(20) DEFAULT NULL,
  `Alamat` varchar(50) DEFAULT NULL,
  `Tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `kode_kelas` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`NIS`, `nama_siswa`, `Alamat`, `Tanggal_lahir`, `jenis_kelamin`, `kode_kelas`) VALUES
('2018200001', 'Faizal', 'Tanggerang Timur', '1999-06-16', 'Laki Laki', '1234'),
('2018200002', 'Nes', 'Sulawesi', '2024-04-18', 'Laki Laki', '1234'),
('2018200003', 'Widi Patria', 'Trenggalek', '2024-04-22', 'Laki Laki', '1002'),
('2020200001', 'Rayan Ikmal Amala', 'Yogyakarta', '2024-04-08', 'Laki Laki', '1002'),
('2022310003', 'Kevin Mubarak', 'Jakarta Timur', '2024-04-21', 'Laki Laki', '2019001');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `administrasi`
--
ALTER TABLE `administrasi`
  ADD PRIMARY KEY (`Id_administrasi`),
  ADD KEY `fk_NIS` (`NIS`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIP`);

--
-- Indeks untuk tabel `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `fk_kode_Mapel_2` (`kode_mapel`),
  ADD KEY `fk_NIP_2` (`NIP`),
  ADD KEY `fk_kode_ruangan` (`kode_ruangan`),
  ADD KEY `fk_kode_kelas_2` (`kode_kelas`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode_kelas`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kode_mapel`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`Kode_Nilai`),
  ADD KEY `fk_kode_siswa` (`NIS`);

--
-- Indeks untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`kode_ruangan`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIS`),
  ADD KEY `fk_kode_kelas_3` (`kode_kelas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `administrasi`
--
ALTER TABLE `administrasi`
  ADD CONSTRAINT `fk_NIS` FOREIGN KEY (`NIS`) REFERENCES `siswa` (`NIS`);

--
-- Ketidakleluasaan untuk tabel `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  ADD CONSTRAINT `fk_NIP_2` FOREIGN KEY (`NIP`) REFERENCES `guru` (`NIP`),
  ADD CONSTRAINT `fk_kode_Mapel_2` FOREIGN KEY (`kode_mapel`) REFERENCES `mapel` (`kode_mapel`),
  ADD CONSTRAINT `fk_kode_kelas_2` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`kode_kelas`),
  ADD CONSTRAINT `fk_kode_ruangan` FOREIGN KEY (`kode_ruangan`) REFERENCES `ruangan` (`kode_ruangan`);

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `fk_kode_siswa` FOREIGN KEY (`NIS`) REFERENCES `siswa` (`NIS`);

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_kode_kelas_3` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`kode_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
