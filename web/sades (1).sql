-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Mei 2017 pada 06.33
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sades`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `announcements`
--

CREATE TABLE `announcements` (
  `id_announcement` int(20) NOT NULL,
  `id_employees` int(20) NOT NULL,
  `announcement_title` text NOT NULL,
  `content` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `announcements`
--

INSERT INTO `announcements` (`id_announcement`, `id_employees`, `announcement_title`, `content`, `active`) VALUES
(1, 0, 'Mandi', 'Mandi yukkkk. Hmmm', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id_category` int(10) NOT NULL,
  `category_name` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id_category`, `category_name`, `active`) VALUES
(1, 'SURAT PENGANTAR PEMBUATAN KTP', 2),
(2, 'SURAT KETERANGAN TANAH', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `employees`
--

CREATE TABLE `employees` (
  `id_employees` int(20) NOT NULL,
  `name_employee` text NOT NULL,
  `birth_place_employee` text NOT NULL,
  `birth_date_employee` date NOT NULL,
  `no_ktp_employee` text NOT NULL,
  `sex_employee` text NOT NULL,
  `address_employee` text NOT NULL,
  `religion_employee` text NOT NULL,
  `position` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `employees`
--

INSERT INTO `employees` (`id_employees`, `name_employee`, `birth_place_employee`, `birth_date_employee`, `no_ktp_employee`, `sex_employee`, `address_employee`, `religion_employee`, `position`, `active`) VALUES
(1, 'Supriadi', 'Bekasi', '1990-01-01', '1234 6574 890 6435', 'P', 'Grogol', 'Islam', '', 2),
(2, 'Supriadi', 'Grogol', '1980-01-01', '1234567890', 'L', 'Ciliwung', 'Islam', '', 2),
(3, 'Supriadi', 'Grogol', '1900-11-11', '1234 6574 890 6435', 'P', 'Ciliwung', 'Islam', 'Bicu', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `letters`
--

CREATE TABLE `letters` (
  `id_letter` int(11) NOT NULL,
  `id_villagers` int(11) NOT NULL,
  `id_category` int(10) NOT NULL,
  `content_letter` text NOT NULL,
  `due_date` date NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `letters`
--

INSERT INTO `letters` (`id_letter`, `id_villagers`, `id_category`, `content_letter`, `due_date`, `active`) VALUES
(1, 0, 0, 'Kawin', '2017-05-01', 2),
(2, 0, 0, 'Makan', '2017-04-30', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `villagers`
--

CREATE TABLE `villagers` (
  `id_villagers` int(20) NOT NULL,
  `name_villager` text NOT NULL,
  `birth_place_villager` text NOT NULL,
  `birth_date_villager` date NOT NULL,
  `no_ktp_villager` varchar(20) NOT NULL,
  `sex_villager` text NOT NULL,
  `address_villager` text NOT NULL,
  `religion_villager` text NOT NULL,
  `job` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `villagers`
--

INSERT INTO `villagers` (`id_villagers`, `name_villager`, `birth_place_villager`, `birth_date_villager`, `no_ktp_villager`, `sex_villager`, `address_villager`, `religion_villager`, `job`, `active`) VALUES
(1, 'Oyon', 'Jakarta', '1997-10-08', 'G64150017', 'L', 'Bandung', 'Islam', 'Mahasiswa', 1),
(2, 'Danang', 'Jakarta', '1997-10-10', '12345', 'L', 'Bandung', 'Hindu', 'Jablay', 2),
(3, 'Linda', 'Subang', '1997-10-05', 'G64150049', 'P', 'Bogor', 'Islam', 'Mahasiswa', 1),
(4, 'Hahaee', 'Cino', '2017-05-01', '23', 'P', 'AA', 'Protestan', 'Jablay', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitors`
--

CREATE TABLE `visitors` (
  `id_visitor` int(20) NOT NULL,
  `id_villagers` int(20) NOT NULL,
  `name_visitor` text NOT NULL,
  `no_ktp_visitor` text NOT NULL,
  `address_villager` text NOT NULL,
  `address_visitor` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `visitors`
--

INSERT INTO `visitors` (`id_visitor`, `id_villagers`, `name_visitor`, `no_ktp_visitor`, `address_villager`, `address_visitor`, `active`) VALUES
(1, 0, 'Jong Un Ren', 'G64150000', 'Dramaga', 'Parung', 2),
(2, 0, 'Jong Un', 'G64150000', 'Dramaga', 'Parung', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id_announcement`),
  ADD KEY `id_employee` (`id_employees`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id_employees`);

--
-- Indexes for table `letters`
--
ALTER TABLE `letters`
  ADD PRIMARY KEY (`id_letter`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `villagers`
--
ALTER TABLE `villagers`
  ADD PRIMARY KEY (`id_villagers`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id_visitor`),
  ADD KEY `id_villagers` (`id_villagers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id_announcement` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id_employees` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `letters`
--
ALTER TABLE `letters`
  MODIFY `id_letter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `villagers`
--
ALTER TABLE `villagers`
  MODIFY `id_villagers` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id_visitor` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
