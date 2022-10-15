-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Okt 2022 pada 08.51
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `article`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NULL DEFAULT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `category`, `created_date`, `updated_date`, `status`) VALUES
(1, 'article 1', 'article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 article 1 ', 'politic', '2022-10-13 12:49:17', '2022-10-15 04:14:31', 'publish'),
(2, 'article 2', 'article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2 article 2', 'education', '2022-10-13 12:49:17', '0000-00-00 00:00:00', 'publish'),
(3, 'article 3', 'article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3 article 3', 'food', '2022-10-13 14:45:20', '0000-00-00 00:00:00', 'publish'),
(4, 'article 4', 'article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4 article 4', 'tech', '2022-10-13 14:45:20', '2022-10-15 04:18:17', 'draft'),
(5, 'article 5', 'article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 article 5 ', 'mistery', '2022-10-14 08:29:27', '2022-10-15 03:26:22', 'trash');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
