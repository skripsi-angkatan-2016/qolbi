-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Apr 2021 pada 05.53
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qolbi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` enum('administrator','pemeriksa','pembayaran','pengadaan') NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `nama`, `email`, `role`, `password`) VALUES
(3, 'pemeriksa', 'pemeriksa@gmail.com', 'pemeriksa', '76419c58730d9f35de7ac538c2fd6737'),
(4, 'pembayaran', 'pembayaran@gmail.com', 'pembayaran', '76419c58730d9f35de7ac538c2fd6737'),
(6, 'pengadaan', 'admin@gmail.com', 'administrator', '76419c58730d9f35de7ac538c2fd6737');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ceklis_dokumen`
--

CREATE TABLE `ceklis_dokumen` (
  `dokumen_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `lelang_id` int(11) NOT NULL,
  `proyek_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `copy` enum('asli','copy') NOT NULL,
  `berkas` enum('ada','tidak ada') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ceklis_dokumen`
--

INSERT INTO `ceklis_dokumen` (`dokumen_id`, `vendor_id`, `lelang_id`, `proyek_id`, `nama`, `nomor`, `tanggal`, `copy`, `berkas`) VALUES
(11, 4, 4, 28, 'COPY SURAT PERJANJIAN KERJA/ADENDUM', '009.ADD/DAN.01.06/UP2B/2019', '2019-02-20', 'copy', 'ada'),
(12, 4, 4, 28, 'PERMINTAAN PEMBAYARAN', '086.KU/CPB-MKS/VIII/2019', '2019-08-13', 'asli', 'ada'),
(13, 4, 4, 28, 'KWITANSI', '086.KU/CPB-MKS/VII/2019', '2019-08-13', 'asli', 'ada'),
(14, 4, 4, 28, 'FAKTUR PAJAK', '030.006-19.68497332', '2019-09-09', 'asli', 'ada'),
(15, 4, 4, 28, 'BUKTI PENDAFTARAN PERJANJIAN PEMBORONGAN PEKERJAAN', '320.H/562.2/DKTJ/V/2017', '2017-05-15', 'copy', 'ada'),
(16, 4, 4, 28, 'COPY BUKTI SETORAN PPLK/DPLK', '-', '2019-08-09', 'copy', 'ada'),
(17, 4, 4, 28, 'COPY BUKTI SETOR UIRAN BPJS KESEHATAN', '-', '2019-07-22', 'copy', 'ada'),
(18, 4, 4, 28, 'COPY BUKTI SETOR UIRAN BPJS KETENAGAKERJAAN', '-', '2019-08-08', 'copy', 'ada'),
(19, 4, 4, 28, 'BERITA ACARA PEMERIKSAAN PEKERJAAN', '005.BA/DAN.01.06/ADM & KSA/UP2B/2019', '2019-07-31', 'asli', 'ada'),
(20, 4, 4, 28, 'LAPORAN PRESTASI PEKERJAAN', '024.LPP/DAN.01.06/ADM & UMUM/UP2B/2019', '2019-07-31', 'asli', 'ada'),
(21, 4, 4, 28, 'BERITA ACARA SERAH TERIMA PEKERJAAN', '0176.DA/DAN.01.06/UP2B/2019', '2019-08-19', 'asli', 'ada'),
(22, 4, 4, 28, 'SURAT KEPUTUSAN PENGUKUHAN PENGUSAHA KENA PAJAK', 'PEM-468/WPJ.15/KP.0203/2011', '2011-11-14', 'copy', 'ada'),
(23, 4, 4, 28, 'BERITA ACARA SLA', '-', '2019-08-12', 'asli', 'ada'),
(24, 4, 4, 28, 'BUKTI PEMBAYARAN', '-', '2019-08-02', 'copy', 'ada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lelang`
--

CREATE TABLE `lelang` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `proyek_id` int(11) NOT NULL,
  `status` enum('sedang pengerjaan','selesai') DEFAULT NULL,
  `status_pemeriksa` enum('1','0','2') DEFAULT NULL,
  `status_pembayaran` enum('0','1','2') DEFAULT NULL,
  `berkas` varchar(100) DEFAULT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lelang`
--

INSERT INTO `lelang` (`id`, `vendor_id`, `proyek_id`, `status`, `status_pemeriksa`, `status_pembayaran`, `berkas`, `catatan`) VALUES
(4, 4, 28, 'selesai', '2', '1', '07__Operasi_PO_CPB_Jul19.pdf', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `proyek`
--

CREATE TABLE `proyek` (
  `proyek_id` int(11) NOT NULL,
  `nama_proyek` varchar(100) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `no_kontrak` varchar(100) DEFAULT NULL,
  `adendum1` varchar(100) NOT NULL,
  `adendum2` varchar(100) NOT NULL,
  `adendum3` varchar(100) NOT NULL,
  `adendum4` varchar(100) NOT NULL,
  `nilai_kontrak` varchar(100) NOT NULL,
  `nilai_tagihan` varchar(100) NOT NULL,
  `sumber_dana` varchar(200) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `no_invoice` varchar(100) NOT NULL,
  `no_posting` varchar(100) NOT NULL,
  `kategori` enum('Barang','Jasa') DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `proyek`
--

INSERT INTO `proyek` (`proyek_id`, `nama_proyek`, `vendor_id`, `no_kontrak`, `adendum1`, `adendum2`, `adendum3`, `adendum4`, `nilai_kontrak`, `nilai_tagihan`, `sumber_dana`, `lokasi`, `no_invoice`, `no_posting`, `kategori`, `date_created`) VALUES
(28, 'PEKERJAAN PENGELOLAAN KENDARAAN DAN PENGEMUDI BULAN JULI 2019 PT. PLN (PERSERO) UPB SULSELRABAR', 0, '08.PJ/613/UPB/2017 Tgl 01 April 2017', '004.ADD/DAN.01.06/MUPB/2018 Tgl.30-01-2018', '007.ADD/DAN.01.06/UP2B/19 TGL 14-01-19', '009.ADD/DAN.01.06/UP2B/19 TGL 20-02-19', '-', 'Rp. 1,542,350,000', 'Rp. 23,920,600', '03/R/AO-TU/UIKL SULAWESI/2019-UP2B SULSELRABAR RI, 2517.19.12.1.300.001', 'UP2B SISTEM MAKASSAR', '5101762070', '7100002459', NULL, '2021-04-26 04:37:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `npwp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `nama`, `alamat`, `npwp`, `email`, `password`) VALUES
(4, 'PT.CAHAYA PUTRA BERSAMA', 'KOMPLEK MANGASA PERMAI BLOK V/1 RT.003 RW.004, GUNUNG SARI, KOTA MAKASSAR', '03.187.430.8-805.000', 'pt.cpb_mks@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `ceklis_dokumen`
--
ALTER TABLE `ceklis_dokumen`
  ADD PRIMARY KEY (`dokumen_id`);

--
-- Indeks untuk tabel `lelang`
--
ALTER TABLE `lelang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`proyek_id`);

--
-- Indeks untuk tabel `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `ceklis_dokumen`
--
ALTER TABLE `ceklis_dokumen`
  MODIFY `dokumen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `lelang`
--
ALTER TABLE `lelang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `proyek`
--
ALTER TABLE `proyek`
  MODIFY `proyek_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
