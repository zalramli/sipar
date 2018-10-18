-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Okt 2018 pada 02.46
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akomodasi`
--

CREATE TABLE `akomodasi` (
  `id_akomodasi` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `kendaraan` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL,
  `dari` varchar(30) NOT NULL,
  `ke` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cindramata`
--

CREATE TABLE `cindramata` (
  `id_cindramata` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_event` date NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `dari` varchar(10) NOT NULL,
  `sampai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_kuliner`
--

CREATE TABLE `kategori_kuliner` (
  `id_kategoriKuliner` varchar(10) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('1', 'Alam'),
('2', 'Buatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_kuliner`
--

CREATE TABLE `menu_kuliner` (
  `id_menu` int(11) NOT NULL,
  `id_tempat` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kategori` enum('Makanan','Minuman') NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Dumping data untuk tabel `statistik_pengunjung`
--

INSERT INTO `statistik_pengunjung` (`ip`, `tanggal`, `hits`, `online`) VALUES
('127.0.0.1', '2018-10-11', 247, '1539276392'),
('192.168.43.31', '2018-10-11', 7, '1539222514'),
('192.168.43.147', '2018-10-11', 1, '1539220256'),
('127.0.0.1', '2018-10-14', 202, '1539531009'),
('::1', '2018-10-16', 175, '1539703788'),
('127.0.0.1', '2018-10-16', 62, '1539700747'),
('::1', '2018-10-17', 55, '1539783679');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_kuliner`
--

CREATE TABLE `tempat_kuliner` (
  `id_tempat` int(11) NOT NULL,
  `id_kategoriKuliner` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `gambar_profil` varchar(255) NOT NULL,
  `gambar_detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `id_kategoriWisata` varchar(10) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `gambar_profil` tinytext NOT NULL,
  `detail_gambar` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `id_kategoriWisata`, `nama`, `lokasi`, `gambar_profil`, `detail_gambar`, `deskripsi`) VALUES
(1, '1', 'Pantai Papumas', 'Jalans Mutiah ', '', '', 'qqww'),
(2, '1', 'Lomboksx', 'Jalans Lembangs', '6.png', '', 'xxaa'),
(3, '2', 'Teluk Love', 'Gumuk Mas', '5.png', '1.png,2.png,3.png,4.png,5.png,6.png', 'alskhdklh asl lasd aklsjl lasjd as  askdgakj sgjagsaslk lkasdj asd kaskdhkashdashkads askdhhaksdhalskdh asdhaskdhaksl askdlhaskd  asdlhaksdh asklhdaklsh lashdaskh laksdhlaskh alshdlashd laskhhdasl lashdlsak khsdakhs lkhadsk kasdhklasdh askdhask khadskhas  askdkash kasdhaskh kasdhkash asdhaksdhsad klsadgkasg kashdkjash hkashdkasdh klahsdklas '),
(4, '1', 'Pantai Jembers', 'Jembers', 'gprofil_wisataScreenshot from 2018-09-30 19-29-11.png', '', 'asd'),
(5, '1', 'Roxys Squares', 'Jalanx Mahakam No 8', '3.png', '1.png,2.png,3.png,4.png,5.png,6.png', 'payangans adalah sebuah pantai yang memiliki pemandangan yang luar biasa karena da kahsd a;sd lashd lahsldh la lhaslkh kalhkdlhl ahklhaskl haklhlkashkl haklsh lkahd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akomodasi`
--
ALTER TABLE `akomodasi`
  ADD PRIMARY KEY (`id_akomodasi`);

--
-- Indexes for table `cindramata`
--
ALTER TABLE `cindramata`
  ADD PRIMARY KEY (`id_cindramata`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `jadwal_transportasi`
--
ALTER TABLE `jadwal_transportasi`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `kategori_kuliner`
--
ALTER TABLE `kategori_kuliner`
  ADD PRIMARY KEY (`id_kategoriKuliner`);

--
-- Indexes for table `kategori_wisata`
--
ALTER TABLE `kategori_wisata`
  ADD PRIMARY KEY (`id_kategoriWisata`);

--
-- Indexes for table `menu_kuliner`
--
ALTER TABLE `menu_kuliner`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pesan_bantuan`
--
ALTER TABLE `pesan_bantuan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tempat_kuliner`
--
ALTER TABLE `tempat_kuliner`
  ADD PRIMARY KEY (`id_tempat`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `id_kategoriWisata` (`id_kategoriWisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akomodasi`
--
ALTER TABLE `akomodasi`
  MODIFY `id_akomodasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cindramata`
--
ALTER TABLE `cindramata`
  MODIFY `id_cindramata` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jadwal_transportasi`
--
ALTER TABLE `jadwal_transportasi`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu_kuliner`
--
ALTER TABLE `menu_kuliner`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pesan_bantuan`
--
ALTER TABLE `pesan_bantuan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tempat_kuliner`
--
ALTER TABLE `tempat_kuliner`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
