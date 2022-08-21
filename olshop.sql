-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2019 pada 17.16
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(16) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `jenengmu` varchar(16) NOT NULL,
  `password` varchar(324) NOT NULL,
  `hak_akses` enum('admin','member') NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `jenengmu`, `password`, `hak_akses`) VALUES
('', 'yaayakk', 'jolebo', '65d387086ffebce58f586a5ac17551bac2fd4beb', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `header_transaksi`
--

CREATE TABLE `header_transaksi` (
  `id_header_transaksi` int(11) NOT NULL,
  `kode_transaksi` varchar(50) NOT NULL,
  `id_member` varchar(16) NOT NULL,
  `tanggal_pembayaran` datetime DEFAULT NULL,
  `status_bayar` enum('0','1','2') NOT NULL DEFAULT '0',
  `jumlah_bayar` int(11) DEFAULT NULL,
  `rekening_pembayaran` bigint(16) DEFAULT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `rekening_pelanggan` bigint(32) DEFAULT NULL,
  `kurir` varchar(33) DEFAULT NULL,
  `ongkir` int(11) DEFAULT NULL,
  `no_resi` varchar(50) DEFAULT NULL,
  `tanggal_transaksi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bukti_bayar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `header_transaksi`
--

INSERT INTO `header_transaksi` (`id_header_transaksi`, `kode_transaksi`, `id_member`, `tanggal_pembayaran`, `status_bayar`, `jumlah_bayar`, `rekening_pembayaran`, `nama_pengirim`, `rekening_pelanggan`, `kurir`, `ongkir`, `no_resi`, `tanggal_transaksi`, `bukti_bayar`) VALUES
(1, 'JLB-20191014-XIX-1014-1001', 'J1019001', '2019-10-14 20:03:50', '1', 282000, 53435346343, 'Yayak Zabara', 5255363666, 'JNE', 6000, NULL, '2019-10-14 20:03:33', 'JLB-20191014-XIX-1014-1001.jpg'),
(2, 'JLB-20191019-XIX-1019-1002', 'J1019001', NULL, '0', NULL, NULL, '', NULL, 'JNE', 8000, NULL, '2019-10-19 21:49:55', NULL),
(3, 'JLB-20191019-XIX-1019-1003', 'J1019001', '2019-10-19 21:56:54', '1', 57000, 87291782901, 'Yayak Zabara', 52553636664, 'JNE', 7000, '323324324324', '2019-10-19 21:56:21', 'JLB-20191019-XIX-1019-1003.png');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `header_trx`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `header_trx` (
`kode_transaksi` varchar(50)
,`id_member` varchar(16)
,`tanggal_pembayaran` datetime
,`status_bayar` enum('0','1','2')
,`jumlah_bayar` int(11)
,`rekening_pembayaran` bigint(16)
,`nama_pengirim` varchar(50)
,`rekening_pelanggan` bigint(32)
,`kurir` varchar(33)
,`ongkir` int(11)
,`bukti_bayar` varchar(255)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_member` varchar(200) NOT NULL,
  `id_produk` varchar(200) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_stok`
--

CREATE TABLE `log_stok` (
  `id_stok` int(11) NOT NULL,
  `stok_lama` int(11) NOT NULL,
  `stok_baru` int(11) NOT NULL,
  `id_produk` varchar(42) NOT NULL,
  `tanggal_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log_stok`
--

INSERT INTO `log_stok` (`id_stok`, `stok_lama`, `stok_baru`, `id_produk`, `tanggal_update`) VALUES
(1, 7, 6, 'case001', '2019-10-19 21:59:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` varchar(16) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `telepon` varchar(16) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `status_pelanggan` enum('0','1') DEFAULT '0',
  `foto` varchar(255) DEFAULT 'default.png',
  `sex` varchar(255) DEFAULT NULL,
  `hak_akses` enum('admin','member') NOT NULL DEFAULT 'member',
  `tanggal_daftar` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nama`, `email`, `password`, `telepon`, `alamat`, `status_pelanggan`, `foto`, `sex`, `hak_akses`, `tanggal_daftar`) VALUES
('J1019001', 'Yaayakk Z', 'yayakjolebo@gmail.com', NULL, '0812143477887', 'Ds. Besole Kec Besuki', '0', 'https://graph.facebook.com/1163405437203153/picture?type=large', NULL, 'member', '2019-10-09 11:10:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(25) NOT NULL,
  `nama_produk` varchar(45) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `harga` int(10) NOT NULL,
  `stok` int(5) DEFAULT '0',
  `id_gambar` varchar(45) NOT NULL,
  `status_produk` enum('0','1') NOT NULL DEFAULT '1',
  `tanggal_post` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `keterangan`, `harga`, `stok`, `id_gambar`, `status_produk`, `tanggal_post`) VALUES
('case001', 'Case Iphone X', 'Case Ini Untuk Hp Iphone XXX', 50000, 6, 'case1.png', '1', '2019-09-25 00:00:00'),
('headset006', 'Headset JBL Keren', 'Headset JLB bass mantul', 120000, 19, 'hs2.png', '1', '2019-09-25 00:00:00'),
('otg009', 'Otg Dengan Kabel', 'OTG yang sangat Keren dengan tambahan kabel', 10000, 28, 'otg2.png', '1', '2019-09-17 00:00:00');

--
-- Trigger `produk`
--
DELIMITER $$
CREATE TRIGGER `before_produk_update` BEFORE UPDATE ON `produk` FOR EACH ROW INSERT INTO log_stok SET
stok_lama=old.stok,
stok_baru=new.stok,
id_produk=old.id_produk,
tanggal_update=now()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(20) NOT NULL,
  `id_member` varchar(16) NOT NULL,
  `kode_transaksi` varchar(50) NOT NULL,
  `id_produk` varchar(20) NOT NULL,
  `harga` int(10) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `total` int(11) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_member`, `kode_transaksi`, `id_produk`, `harga`, `jumlah`, `total`, `tanggal_transaksi`) VALUES
(1, 'J1019001', 'JLB-20191014-XIX-1014-1001', 'case001', 50000, 1, 50000, '2019-10-14 20:03:33'),
(2, 'J1019001', 'JLB-20191019-XIX-1019-1002', 'case001', 50000, 1, 50000, '2019-10-19 21:49:55'),
(3, 'J1019001', 'JLB-20191019-XIX-1019-1003', 'case001', 50000, 1, 50000, '2019-10-19 21:56:21');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `trx`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `trx` (
`id_member` varchar(16)
,`kode_transaksi` varchar(50)
,`id_produk` varchar(20)
,`harga` int(10)
,`jumlah` int(5)
,`total` int(11)
,`tanggal_transaksi` datetime
);

-- --------------------------------------------------------

--
-- Struktur untuk view `header_trx`
--
DROP TABLE IF EXISTS `header_trx`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `header_trx`  AS  select `header_transaksi`.`kode_transaksi` AS `kode_transaksi`,`header_transaksi`.`id_member` AS `id_member`,`header_transaksi`.`tanggal_pembayaran` AS `tanggal_pembayaran`,`header_transaksi`.`status_bayar` AS `status_bayar`,`header_transaksi`.`jumlah_bayar` AS `jumlah_bayar`,`header_transaksi`.`rekening_pembayaran` AS `rekening_pembayaran`,`header_transaksi`.`nama_pengirim` AS `nama_pengirim`,`header_transaksi`.`rekening_pelanggan` AS `rekening_pelanggan`,`header_transaksi`.`kurir` AS `kurir`,`header_transaksi`.`ongkir` AS `ongkir`,`header_transaksi`.`bukti_bayar` AS `bukti_bayar` from `header_transaksi` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `trx`
--
DROP TABLE IF EXISTS `trx`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `trx`  AS  select `transaksi`.`id_member` AS `id_member`,`transaksi`.`kode_transaksi` AS `kode_transaksi`,`transaksi`.`id_produk` AS `id_produk`,`transaksi`.`harga` AS `harga`,`transaksi`.`jumlah` AS `jumlah`,`transaksi`.`total` AS `total`,`transaksi`.`tanggal_transaksi` AS `tanggal_transaksi` from `transaksi` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `header_transaksi`
--
ALTER TABLE `header_transaksi`
  ADD PRIMARY KEY (`id_header_transaksi`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indeks untuk tabel `log_stok`
--
ALTER TABLE `log_stok`
  ADD PRIMARY KEY (`id_stok`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `header_transaksi`
--
ALTER TABLE `header_transaksi`
  MODIFY `id_header_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `log_stok`
--
ALTER TABLE `log_stok`
  MODIFY `id_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
