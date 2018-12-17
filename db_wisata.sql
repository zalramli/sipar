-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2018 pada 15.11
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akomodasi`
--

CREATE TABLE `akomodasi` (
  `id_akomodasi` int(11) NOT NULL,
  `id_wisata` varchar(10) NOT NULL,
  `titik_awal` varchar(255) NOT NULL,
  `kendaraan` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL,
  `dari` varchar(30) NOT NULL,
  `ke` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akomodasi`
--

INSERT INTO `akomodasi` (`id_akomodasi`, `id_wisata`, `titik_awal`, `kendaraan`, `harga`, `dari`, `ke`) VALUES
(2, 'W001', 'Terminal', 'lin', 5000, 'Terminal Tawang Alun', 'Jalan Mastrip'),
(3, 'W001', 'Terminal', 'ojek', 10000, 'Jalan Mastrip', 'Air Terjun'),
(4, 'W002', 'Stasiun', 'lin', 5000, 'Stasiun Rambipuji', 'Jalan Mastripsxss'),
(5, 'W002', 'Stasiun', 'lin', 5000, 'Stasiun Rambipuji', 'Jalan Mastripsxss');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cindramata`
--

CREATE TABLE `cindramata` (
  `id_cindramata` int(11) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_event` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_event` date NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `nama`, `tgl_event`, `lokasi`, `gambar`) VALUES
('E001', 'Jfcs', '2018-12-15', 'Jalan Asds', 'sky.jpg'),
('E002', 'Jfcsxxx', '2018-11-14', 'Jalan Asds', 'sky.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_transportasi`
--

CREATE TABLE `jadwal_transportasi` (
  `id_jadwal` int(11) NOT NULL,
  `nama_kendaraan` varchar(30) NOT NULL,
  `dari` varchar(10) NOT NULL,
  `sampai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_transportasi`
--

INSERT INTO `jadwal_transportasi` (`id_jadwal`, `nama_kendaraan`, `dari`, `sampai`) VALUES
(2, 'asd', '12', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_kuliner`
--

CREATE TABLE `kategori_kuliner` (
  `id_kategoriKuliner` char(10) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_kuliner`
--

INSERT INTO `kategori_kuliner` (`id_kategoriKuliner`, `nama_kategori`) VALUES
('KK001', 'Cafe'),
('KK002', 'Warung'),
('KK003', 'restoran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_wisata`
--

CREATE TABLE `kategori_wisata` (
  `id_kategoriWisata` varchar(10) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_wisata`
--

INSERT INTO `kategori_wisata` (`id_kategoriWisata`, `nama_kategori`) VALUES
('KW001', 'Alam'),
('KW002', 'Edukasi'),
('KW003', 'Religi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_kuliner`
--

CREATE TABLE `menu_kuliner` (
  `id_menu` int(11) NOT NULL,
  `id_tempat` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kategori` enum('Makanan','Minuman') NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu_kuliner`
--

INSERT INTO `menu_kuliner` (`id_menu`, `id_tempat`, `nama`, `kategori`, `harga`) VALUES
(5, 'K001', 'ayam goreng', 'Makanan', 10000),
(6, 'K001', 'es teh', 'Minuman', 200000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_wisata`
--

CREATE TABLE `paket_wisata` (
  `id_paket` varchar(10) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `gambar_profil` varchar(100) NOT NULL,
  `harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket_wisata`
--

INSERT INTO `paket_wisata` (`id_paket`, `nama`, `gambar_profil`, `harga`) VALUES
('PW001', '3 hari 3 malams', 'rails.jpg', 20000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_bantuan`
--

CREATE TABLE `pesan_bantuan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan_bantuan`
--

INSERT INTO `pesan_bantuan` (`id_pesan`, `nama`, `email`, `deskripsi`) VALUES
(1, 'dd', 'ddsdasd@gmail.com', 'asda as dhkahd asdh kashdg jagsaks dgkasgk ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating_kuliner`
--

CREATE TABLE `rating_kuliner` (
  `id_rating` int(11) NOT NULL,
  `id_tempat` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating_wisata`
--

CREATE TABLE `rating_wisata` (
  `id_rating` int(11) NOT NULL,
  `id_wisata` varchar(10) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `statistik_pengunjung`
--

CREATE TABLE `statistik_pengunjung` (
  `ip` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_kuliner`
--

CREATE TABLE `tempat_kuliner` (
  `id_tempat` varchar(10) NOT NULL,
  `id_kategoriKuliner` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `gambar_profil` varchar(255) NOT NULL,
  `gambar_detail` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `id_tentang` int(11) NOT NULL,
  `nama_tentang` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `nama_tentang`, `deskripsi`) VALUES
(2, 'xxx', 'aaa'),
(3, 'asd', 'sad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'iyek', 'iyek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` varchar(10) NOT NULL,
  `id_kategoriWisata` varchar(10) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `lokasi` text NOT NULL,
  `gambar_profil` tinytext NOT NULL,
  `detail_gambar` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akomodasi`
--
ALTER TABLE `akomodasi`
  ADD PRIMARY KEY (`id_akomodasi`);

--
-- Indeks untuk tabel `cindramata`
--
ALTER TABLE `cindramata`
  ADD PRIMARY KEY (`id_cindramata`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indeks untuk tabel `jadwal_transportasi`
--
ALTER TABLE `jadwal_transportasi`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `kategori_kuliner`
--
ALTER TABLE `kategori_kuliner`
  ADD PRIMARY KEY (`id_kategoriKuliner`);

--
-- Indeks untuk tabel `kategori_wisata`
--
ALTER TABLE `kategori_wisata`
  ADD PRIMARY KEY (`id_kategoriWisata`);

--
-- Indeks untuk tabel `menu_kuliner`
--
ALTER TABLE `menu_kuliner`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `paket_wisata`
--
ALTER TABLE `paket_wisata`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `pesan_bantuan`
--
ALTER TABLE `pesan_bantuan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `rating_kuliner`
--
ALTER TABLE `rating_kuliner`
  ADD PRIMARY KEY (`id_rating`);

--
-- Indeks untuk tabel `rating_wisata`
--
ALTER TABLE `rating_wisata`
  ADD PRIMARY KEY (`id_rating`) USING BTREE;

--
-- Indeks untuk tabel `tempat_kuliner`
--
ALTER TABLE `tempat_kuliner`
  ADD PRIMARY KEY (`id_tempat`);

--
-- Indeks untuk tabel `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `id_kategoriWisata` (`id_kategoriWisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akomodasi`
--
ALTER TABLE `akomodasi`
  MODIFY `id_akomodasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `cindramata`
--
ALTER TABLE `cindramata`
  MODIFY `id_cindramata` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwal_transportasi`
--
ALTER TABLE `jadwal_transportasi`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `menu_kuliner`
--
ALTER TABLE `menu_kuliner`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pesan_bantuan`
--
ALTER TABLE `pesan_bantuan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `rating_kuliner`
--
ALTER TABLE `rating_kuliner`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `rating_wisata`
--
ALTER TABLE `rating_wisata`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
