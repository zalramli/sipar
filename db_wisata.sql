-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2018 pada 14.50
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
(4, 'W002', 'Stasiun', 'lin', 5000, 'Stasiun Rambipuji', 'Jalan Mastripsxss');

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
('E001', 'Jfcs', '2018-12-15', 'Jalan Asds', 'sky.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gmaps`
--

CREATE TABLE `gmaps` (
  `id` int(11) NOT NULL,
  `nama_lokasi` int(100) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lng` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gmaps`
--

INSERT INTO `gmaps` (`id`, `nama_lokasi`, `lat`, `lng`) VALUES
(1, 12, '-8.159382', '113.723629');

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
('KK003', 'Restoran');

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
('KW002', 'Buatan'),
('KW003', 'Religi'),
('KW004', 'Dasx');

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

--
-- Dumping data untuk tabel `rating_kuliner`
--

INSERT INTO `rating_kuliner` (`id_rating`, `id_tempat`, `email`, `deskripsi`, `rating`) VALUES
(1, 'K002', 'asi@gmail.com', 'babla', 5),
(2, 'K002', 'asdas@gmail.com', 'asdh has  kash', 5),
(3, 'K001', 'ads@fgmail.com', 'asdasdasdas asd', 4),
(4, 'K003', '', '', 5),
(5, 'K004', '', '', 4),
(6, 'K005', '', '', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating_wisata`
--

CREATE TABLE `rating_wisata` (
  `id_rating` int(11) NOT NULL,
  `id_wisata` varchar(10) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rating_wisata`
--

INSERT INTO `rating_wisata` (`id_rating`, `id_wisata`, `rating`) VALUES
(1, 'W001', 5),
(2, 'W001', 4),
(3, 'W001', 3),
(4, 'W001', 2),
(5, 'W001', 4),
(6, 'W001', 3),
(7, 'W002', 4),
(8, 'W002', 3),
(9, 'W002', 2),
(10, 'W002', 2),
(11, 'W001', 3),
(12, 'W001', 1),
(13, 'W001', 5),
(14, 'W001', 5),
(15, 'W001', 5),
(16, 'W003', 5),
(17, 'W004', 5),
(18, 'W005', 5),
(19, 'W001', 0),
(20, 'W001', 5);

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
('::1', '2018-10-17', 55, '1539783679'),
('::1', '2018-10-31', 14, '1540998058'),
('::1', '2018-11-03', 1, '1541255521');

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

--
-- Dumping data untuk tabel `tempat_kuliner`
--

INSERT INTO `tempat_kuliner` (`id_tempat`, `id_kategoriKuliner`, `nama`, `lokasi`, `gambar_profil`, `gambar_detail`, `deskripsi`) VALUES
('K001', 'KK001', 'Cafe Kolongs', 'Jalan Cutmutiahs', 'bg.jpg', '1.png,2.png,3.png,4.png,5.png,6.png', 'Lorems ipsum dolor sit amet, consectetur adipisicing elit. Minus, recusandae, quia! Nisi repudiandae, eaque voluptatibus architecto tenetur similique deleniti reprehenderit perspiciatis placeat explicabo, dolores incidunt obcaecati minus facilis. Mollitia temporibus suscipit provident omnis asperiores perspiciatis doloribus voluptates quaerat id facilis alias, saepe inventore dolorum laborum nihil magni tenetur, beatae quisquam nam dicta harum quia! Omnis quo placeat delectus, ea, alias dolor dolores iure esse itaque sit, aperiam quod dolore quaerat iusto cupiditate nulla illo cumque reiciendis! Laudantium nemo, natus architecto mollitia. Obcaecati inventore quod non quisquam ipsam commodi deserunt, incidunt reprehenderit, aperiam vero consectetur natus asperiores iure earum aliquid soluta iste quia saepe ab eligendi explicabo aspernatur laborum enim cumque. Debitis qui error corrupti suscipit culpa accusamus beatae ipsam fugit a. Eveniet assumenda laboriosam eaque. Ipsum quidem nobis cum et minus quas nam hic ducimus iste voluptatum earum explicabo, distinctio veritatis aperiam itaque sint officia saepe, sed alias asperiores, voluptatibus ea voluptatem sapiente. Alias quibusdam iste, ipsam nobis illum ex reiciendis velit nemo ipsum enim, quaerat voluptate. Accusamus sed maiores aperiam dolorem ad ullam cum, velit fugiat harum ipsa. Repudiandae iste odio autem tenetur voluptatum animi recusandae aperiam porro, ad, nesciunt, soluta tempora voluptates amet ipsum minus illum. A, inventore?'),
('K002', 'KK002', 'As', 'Asd', 'benches.jpg', 'benches.jpg,bridge.jpg,coast.jpg,park.jpg,rails.jpg', 'asd'),
('K003', 'KK002', 'Warung Ijo', 'Jalan Mastrip', 'bridge.jpg', 'benches.jpg,bridge.jpg,coast.jpg,park.jpg', 'warung ijo blablablabla asdkbk sakdk sadlsadh sdaskd sadsa qwe sadaksd sadasd sadkag sadkagd asdgk aks'),
('K004', 'KK002', 'Warung Bu Niban', 'Jalan Bangka', 'traffic.jpg', 'coast.jpg,park.jpg,rocks.jpg,sky.jpg,traffic.jpg', 'warung mastirpbkasdh sdh a lahsdh alsdhl lsadhlh sladhladsh');

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
(2, 'xxx', 'aaa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` varchar(10) NOT NULL,
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
('W001', 'KW001', 'Pantai Papumas', 'Jalan Cutmutiahs', '2.jpg', 'benches.jpg,bridge.jpg,coast.jpg,park.jpg,rails.jpg,rocks.jpg', 'Lorems ipsum dolor sit amet, consectetur adipisicing elit. Minus, recusandae, quia! Nisi repudiandae, eaque voluptatibus architecto tenetur similique deleniti reprehenderit perspiciatis placeat explicabo, dolores incidunt obcaecati minus facilis. Mollitia temporibus suscipit provident omnis asperiores perspiciatis doloribus voluptates quaerat id facilis alias, saepe inventore dolorum laborum nihil magni tenetur, beatae quisquam nam dicta harum quia! Omnis quo placeat delectus, ea, alias dolor dolores iure esse itaque sit, aperiam quod dolore quaerat iusto cupiditate nulla illo cumque reiciendis! Laudantium nemo, natus architecto mollitia. Obcaecati inventore quod non quisquam ipsam commodi deserunt, incidunt reprehenderit, aperiam vero consectetur natus asperiores iure earum aliquid soluta iste quia saepe ab eligendi explicabo aspernatur laborum enim cumque. Debitis qui error corrupti suscipit culpa accusamus beatae ipsam fugit a. Eveniet assumenda laboriosam eaque. Ipsum quidem nobis cum et minus quas nam hic ducimus iste voluptatum earum explicabo, distinctio veritatis aperiam itaque sint officia saepe, sed alias asperiores, voluptatibus ea voluptatem sapiente. Alias quibusdam iste, ipsam nobis illum ex reiciendis velit nemo ipsum enim, quaerat voluptate. Accusamus sed maiores aperiam dolorem ad ullam cum, velit fugiat harum ipsa. Repudiandae iste odio autem tenetur voluptatum animi recusandae aperiam porro, ad, nesciunt, soluta tempora voluptates amet ipsum minus illum. A, inventore?'),
('W002', 'KW002', 'Teluk Love', 'Jalan Cutmutiah', 'Screenshot_4.png', '1.png,2.png,3.png,4.png,5.png,6.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic nulla molestias provident dolorum harum ratione. Temporibus dicta labore reiciendis provident sunt error fugiat eius animi eaque aspernatur, nemo, ipsa. Velit hic asperiores nisi ea nemo accusantium tenetur odit, tempore repellat non culpa quibusdam repudiandae incidunt corporis. Earum id perferendis hic repellat fugit officiis illo ea similique quibusdam sequi, possimus, dolorum, quisquam asperiores atque culpa quas et quo perspiciatis, minus ex aperiam doloribus voluptates ullam. Quos nostrum debitis dolorem possimus quisquam recusandae ut mollitia voluptate, harum non repellat dignissimos iusto aliquid error eveniet eum, aspernatur rerum quo accusantium reiciendis beatae. Eum perspiciatis consequatur hic a molestias facilis, distinctio facere sunt. Ipsum officiis ullam quam, recusandae facere voluptatum modi, suscipit ab omnis, alias neque iusto saepe perspiciatis, voluptas odio amet id. Harum repellat esse aliquam soluta, fuga, nesciunt earum saepe assumenda perspiciatis libero minus eveniet ratione asperiores repellendus, blanditiis cum! Eos nulla veniam, possimus temporibus doloribus ipsam deleniti ipsa, autem cumque sed obcaecati cum natus soluta aliquid molestias accusamus expedita ex placeat tempore beatae in iusto dignissimos maiores nobis. Rerum, molestiae. Placeat nam iste dolorem consectetur eius assumenda vero natus nesciunt architecto at explicabo fugit tenetur, quisquam quos velit officiis, deleniti est.'),
('W003', 'KW001', 'Pantai Sanur', 'Jalan Mastrip', 'Screenshot_4.png', 'daftar-buku.png,daftar-dosen.png,daftar-mahasiswa.png,input-buku.png,input-pengguna.png,login.png,peminjaman.png', 'lorem klashk hkhasdga kjsk g ajks g j agsjgfjhgkjg kjkgK K Gakhkh KHAKHKH KHSKH KJHKHhkahs khlahasdhklhsalk hlal ad akhh askhj sakhsakjh kahk hahf khhaksh lkhasklhlk alkshlkha ash klh lkahlk hklashlkh afhawhio wqa ah sa kh kah a h k  ahkhakssasa assaldhlkash uifak  ash haslhaskld h  ashdlashhksad  asdlhsadhsdakhfh ashlhs hf akshdsh hasdhsah kashl shadlhsa dhaslk sksdhksahkldsh  sahdksahksahkls sadhslakhksdahs'),
('W004', 'KW002', 'Pantai Andalan', 'Jalan Mastrip', 'Screenshot_4.png', 'daftar-buku.png,daftar-dosen.png,daftar-mahasiswa.png,input-buku.png,input-pengguna.png,login.png', 'asdasd  ;asjdjjsja askhdaskaskj askjgdkasgd sakjjdgkaskj sakdhkashd kashdhsadjk askdsakdh kasdkashk askdhksahk askdhkashd ksahdsad'),
('W005', 'KW003', 'Masjid Agung', 'Jalan Sudirman', 'Screenshot_5.png', 'daftar-buku.png,daftar-dosen.png,daftar-mahasiswa.png,input-buku.png,input-pengguna.png,login.png', 'sadhkasdkh askdjhaskdh  asdksakhsa askdkashka sadjgaskdg sadkhaskhsdak askhdkjashkj akjsdkjaskjdhsag'),
('W006', 'KW001', 'Tanjung Papmas', 'Jalan Cutmutiahss', 'benches.jpg', 'benches.jpg,bridge.jpg,coast.jpg,park.jpg,rails.jpg,rocks.jpg', 'pemandangans alam adalah asdjas asdaskdb asdask asdasdj asdjgasdkj asgasdk askgasdk ');

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
-- Indeks untuk tabel `gmaps`
--
ALTER TABLE `gmaps`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_akomodasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `cindramata`
--
ALTER TABLE `cindramata`
  MODIFY `id_cindramata` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gmaps`
--
ALTER TABLE `gmaps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
