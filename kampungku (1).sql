-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Mei 2017 pada 16.48
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampungku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `announcements`
--

CREATE TABLE `announcements` (
  `id_announcement` int(11) NOT NULL,
  `author` text NOT NULL,
  `announcement_title` text NOT NULL,
  `content` text NOT NULL,
  `pic_announcement` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status_announcement` varchar(5) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `letters`
--

CREATE TABLE `letters` (
  `id_letter` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `category_letter` varchar(100) NOT NULL,
  `status_letter` varchar(5) NOT NULL,
  `content_letter` text NOT NULL,
  `due_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `letters`
--

INSERT INTO `letters` (`id_letter`, `author`, `category_letter`, `status_letter`, `content_letter`, `due_date`, `active`) VALUES
(1, 'Muhammad Ilham Ramadhan', 'SURAT PENGANTAR PEMBUATAN KTP', 'yet', 'aaaaaaaaaaaaaaaaa', '2017-05-31 17:00:00', 0),
(2, 'Muhammad Ilham Ramadhan', 'SURAT KETERANGAN TANAH', 'yet', 'mhkghkghkgk', '2017-06-01 17:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `villagers`
--

CREATE TABLE `villagers` (
  `id_villagers` int(20) NOT NULL,
  `name_villager` text NOT NULL,
  `email_villager` varchar(50) NOT NULL,
  `password_villager` varchar(50) NOT NULL,
  `phone_villager` varchar(12) NOT NULL,
  `birth_place_villager` text NOT NULL,
  `birth_date_villager` date NOT NULL,
  `no_ktp_villager` varchar(20) NOT NULL,
  `sex_villager` text NOT NULL,
  `address_villager` text NOT NULL,
  `religion_villager` text NOT NULL,
  `job` text NOT NULL,
  `photo_villager` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `villagers`
--

INSERT INTO `villagers` (`id_villagers`, `name_villager`, `email_villager`, `password_villager`, `phone_villager`, `birth_place_villager`, `birth_date_villager`, `no_ktp_villager`, `sex_villager`, `address_villager`, `religion_villager`, `job`, `photo_villager`, `active`) VALUES
(1, 'Admin', 'kampungku@gmail.com', '7a25b0bc04e77a2f7453dd021168cdc2', '085712163208', '', '1997-08-10', '3306021008970002', 'Laki-Laki', 'Bandung', '', '', 'images/member/11.jpg', 0),
(10, 'Muhammad Ilham Ramadhan', 'm.ilhamramadhanca@gmail.com', 'a906449d5769fa7361d7ecc6aa3f6d28', '085810279923', '', '1997-12-31', '', '', 'Kali Licin', '', '', 'images/member/ç¤ºä¾‹å›¾ç‰‡_01.jpg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitors`
--

CREATE TABLE `visitors` (
  `id_visitor` int(20) NOT NULL,
  `author` text NOT NULL,
  `name_visitor` text NOT NULL,
  `no_ktp_visitor` text NOT NULL,
  `address_visitor` text NOT NULL,
  `status_visitor` varchar(5) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id_announcement`);

--
-- Indexes for table `letters`
--
ALTER TABLE `letters`
  ADD PRIMARY KEY (`id_letter`);

--
-- Indexes for table `villagers`
--
ALTER TABLE `villagers`
  ADD PRIMARY KEY (`id_villagers`),
  ADD UNIQUE KEY `email_villager` (`email_villager`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id_visitor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id_announcement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `letters`
--
ALTER TABLE `letters`
  MODIFY `id_letter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `villagers`
--
ALTER TABLE `villagers`
  MODIFY `id_villagers` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id_visitor` int(20) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
