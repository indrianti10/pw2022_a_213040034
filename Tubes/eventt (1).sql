-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2022 pada 02.19
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dream_luxion`
--

CREATE TABLE `dream_luxion` (
  `id` int(11) NOT NULL,
  `events` varchar(100) NOT NULL,
  `Genre` int(11) NOT NULL,
  `Tempat` varchar(80) NOT NULL,
  `Tanggal_mulai` date NOT NULL,
  `Tanggal_berakhir` date NOT NULL,
  `Gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dream_luxion`
--

INSERT INTO `dream_luxion` (`id`, `events`, `Genre`, `Tempat`, `Tanggal_mulai`, `Tanggal_berakhir`, `Gambar`) VALUES
(1, 'COLDPLAY, A Head Full Of Dream Tour', 1, 'Jakarta Internationl Stadium (JIS)', '2022-11-06', '2022-11-06', '62963f0c6565c.jpg'),
(2, 'Art & Culture of Indonesia', 3, 'Jogja Gallery', '2022-06-24', '2022-06-26', 'art&culture.jpg'),
(3, 'TULUS, Sound Of The City', 1, 'The Pallas, Jakarta Selatan', '2022-06-04', '2022-06-04', 'sound of city.jpeg'),
(4, 'LOVE FEST, Love is Live', 2, 'Istoran Senayan,Jakarta Pusat', '2022-12-31', '2023-01-01', 'love fest.jpg'),
(5, 'LUKIS PATUNG, Fotografi', 3, 'Kantor DISBUDPAR, Banyuwangi', '2022-11-14', '2022-11-21', 'lukis,patung.jpeg'),
(6, 'NCT DREAM TOUR, The Dream Show', 1, 'Convention Exhibition, BSD City', '2023-02-04', '2023-02-05', 'dream show.png'),
(7, 'WESTLIFE, The Twenty Tour', 1, 'ICE, BSD City', '2022-08-07', '2022-08-07', 'westlife.jpg'),
(9, 'Beat of Culture, Teluk Humbolt 10', 3, 'Pantai Hamadi, JAYAPURA', '2022-08-05', '2022-08-07', 'beat of culture.jpg'),
(10, 'Love, Peace and Freedom, 29 BUDAYA', 2, 'Pantai Ancol, Jakarta Utara', '2022-12-03', '2022-05-06', 'love,peace and freedom.jpg'),
(27, 'Playlist Love,live', 2, 'Husein Satra Negara, BANDUNG', '2022-10-22', '2022-10-23', 'playlist.png'),
(43, 'sc', 1, 'sc', '2022-06-24', '2022-07-08', '62a3dc9d6ad5b.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `Genre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `genre`
--

INSERT INTO `genre` (`id`, `Genre`) VALUES
(1, 'Konser'),
(2, 'Festival'),
(3, 'Pamerean');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'indri', 'indri@mail.com', '$2y$10$bNnZ37i7JWRjcaW3nDkPnuRyX1StgdtUODlF4QrbYwb4QzY54gIfi'),
(2, 'widya', 'widya@mail.com', '123'),
(3, 'dwi ', 'indri@mail.com', '$2y$10$7BKAEBTLerjwd0rU0z55x.UaEmD3E0z6gRnmAcNOU7yMZPMR2I9ju'),
(4, 'anti', 'anti@mail.com', '$2y$10$44vkKh5Ehm16hYRMdtn6M.qVXhc6e00YO/VPyT2MxXr.selI3gUsS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dream_luxion`
--
ALTER TABLE `dream_luxion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Genre` (`Genre`);

--
-- Indeks untuk tabel `genre`
--
ALTER TABLE `genre`
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
-- AUTO_INCREMENT untuk tabel `dream_luxion`
--
ALTER TABLE `dream_luxion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dream_luxion`
--
ALTER TABLE `dream_luxion`
  ADD CONSTRAINT `genre` FOREIGN KEY (`Genre`) REFERENCES `genre` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
