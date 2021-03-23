-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Mar 2021 pada 11.54
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujiprak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id_produk` int(10) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` int(20) NOT NULL,
  `stock` int(20) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `detail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id_produk`, `nama_produk`, `harga`, `stock`, `gambar`, `detail`) VALUES
(1, 'AHHA MASK Indo Pride Edition 1', 89000, 10, 'https://s3-ap-southeast-1.amazonaws.com/avana-shop-files/72096/images/large/de420c2d978fdbe9e94e', 'Detail :Bahan KatunBisa dicuci dan dipakai ulang'),
(7, 'AHHA MASK Indo Pride Edition ', 89500, 10, 'https://s3-ap-southeast-1.amazonaws.com/avana-shop-files/72096/images/large/8bb255441c9a2060cbf4', 'Detail :  Bahan Katun  Bisa dicuci dan dipakai ulang'),
(8, 'AHHA MASK Indo Pride Edition ', 89000, 10, 'https://s3-ap-southeast-1.amazonaws.com/avana-shop-files/72096/images/large/354c069f0c55200da889', 'Detail :Bahan KatunBisa dicuci dan dipakai ulang'),
(9, 'AHHA Hijab Kiara Pastan Series', 129000, 10, 'https://s3-ap-southeast-1.amazonaws.com/avana-shop-files/72096/images/large/56629021d6a38d218c4e5cebff10e3b3f71555d3', 'PASHMINA TALI INSTAN  Ukuran : 180 x 75cm  Material : Ceruty baby doll');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
