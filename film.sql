-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2020 pada 17.04
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioskop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `id` varchar(64) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `rating` double NOT NULL,
  `poster` varchar(300) DEFAULT 'default.jpg',
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`id`, `judul`, `deskripsi`, `tahun_terbit`, `rating`, `poster`, `harga`) VALUES
('5e1454c6491b8', 'Avengers : Endgame', 'Twenty-three days after Thanos used the Infinity Gauntlet to disintegrate half of all life in the universe,[N 1] Carol Danvers rescues Tony Stark and Nebula from deep space and returns them to Earth, where they reunite with the remaining Avengers—Bruce Banner, Steve Rogers, Thor, Natasha Romanoff, and James Rhodes—and Rocket. Locating Thanos on an otherwise uninhabited planet, they plan to retake and use the Infinity Stones to reverse \"the Snap\", but Thanos reveals he destroyed the Stones to prevent their further use. Enraged, Thor decapitates Thanos. ', 2019, 8.5, '5e1454c6491b8.jpg', 150000),
('5e1561cc9b3ce', 'Mr Bones', 'Film ini berhubungan ke kerajaan Afrika, mungkin salah satu mantan tanah air, dan pencarian untuk pewaris takhta tersebut. Profesier raja, Mr Bones, perjalanan utara ke Sun City, untuk mencari putra hanya raja. Pada saat yang sama, beberapa tokoh Amerika melakukan perjalanan ke Sun City untuk Tantangan Golf Nedbank di tahunan. Ketika Bones tiba di sana, dua dunia menabrak satu sama lain: Meskipun dia tidak bergaul dengan kehidupan modern, tokoh Amerika adalah heran tentang perilaku dan keterbelakangan negara. Masalah ekstra disebabkan oleh Bones yang pencarian untuk pangeran dan beberapa taruhan di Tantangan Golf membuat hasilnya sangat penting. ', 2001, 8.1, '5e1561cc9b3ce.jpg', 60000),
('5e1563cef34d1', 'Jumanji', 'Jumanji adalah film thriller-fantasi Amerika Serikat yang dibuat pada tahun 1995. Disutradarai oleh Joe Johnston berdasarkan novel yang ditulis oleh Chris Van Allsburg pada tahun 1981.\r\n\r\nFilm ini bercerita tentang sebuah permainan ajaib yang didalamnya terdapat binatang-binatang, dan binatang-binatang itu akan keluar jika tertera pada papan. Dan permainan akan usai jika salah satu dari pemain ada yang dapat mencapai titik Jumanji. ', 1995, 7, '5e1563cef34d1.jpg', 80000),
('5e156591d0a5e', 'Zathura', 'Zathura: Petualangan Ruang Angkasa (atau Zathura) adalah film fantasi fiksi ilmiah yang dibuat pada 2005. Disutradarai oleh Jon Faverau, dan secara longgar didasarkan pada buku Zathura diilustrasikan oleh Chris Van Allsburg, penulis Jumanji. Pemerannya adalah Jonah Bobo sebagai Danny dan Josh Hutcherson sebagai Walter. Tim Robbins juga memiliki peran kecil sebagai ayah anak laki-laki yang bercerai. Film ini dibuat di Los Angeles dan Culver City, California & dirilis pada tanggal 11 November 2005 oleh Columbia Pictures.[1] Tidak seperti buku, film tidak memuat materi Jumanji dan tidak menyebutkan peristiwa Jumanji. Film ini sukses kritis meskipun box office bomb. ', 2005, 6.2, '5e156591d0a5e.jpg', 80000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` varchar(64) NOT NULL,
  `nama_pembeli` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_film` varchar(120) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` text NOT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `status` varchar(14) NOT NULL DEFAULT 'Belum lunas'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama_pembeli`, `email`, `nama_film`, `tanggal`, `alamat`, `bukti_pembayaran`, `status`) VALUES
('5e1ada8b91832', 'John', 'johndoe@gmail.com', 'Zathura', '2020-01-12', 'Batoh', '5e1ada8b91832.jpg', 'Lunas'),
('5e1adbf70f884', 'Jim', 'jim@gmail.com', 'Mr Bones', '2020-01-12', 'Lampaseh', '5e1adbf70f884.jpg', 'Belum lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('administrator','manager','member') DEFAULT 'member',
  `active` enum('0','1') DEFAULT '1',
  `last_login` datetime DEFAULT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`, `active`, `last_login`, `nama`, `email`) VALUES
(2, 'admin', '$2y$10$u.C9oi6ViI1P1nVpvDQKduL9w60K1Bhx/HZBx.EvKvAGb/eGd1KZm', 'administrator', '1', '2020-01-12 17:01:12', 'Admin', 'farizjr12@gmail.com'),
(4, 'manager', '$2y$10$V29m/qEDWqT8UBQ4/9DhCOmwDEQaxvQ5Sa2xDZt11ZFGQbXK4xqz6', 'manager', '1', '2020-01-11 15:23:44', 'Manager', 'test@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
