-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 12:29 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `disaster`
--

CREATE TABLE `disaster` (
  `id_disaster` int(11) NOT NULL,
  `id_region` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `date` date NOT NULL,
  `casualty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disaster`
--

INSERT INTO `disaster` (`id_disaster`, `id_region`, `name`, `date`, `casualty`) VALUES
(1, 1, 'Flood', '2022-12-17', 1),
(2, 22, 'Landslide', '2022-12-15', 1),
(3, 32, 'Earthquake', '2022-12-06', 1),
(4, 29, 'Volcano', '2022-12-01', 1),
(5, 1, 'Earthquake', '2022-12-16', 1),
(6, 1, 'Volcano', '2022-12-13', 1),
(7, 29, 'Volcano', '2022-12-01', 1),
(8, 29, 'Volcano', '2022-12-01', 1),
(9, 1, 'Fire', '2022-12-13', 1),
(10, 1, 'Tornado', '2022-12-13', 1),
(11, 1, 'Landslide', '2022-12-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE `family` (
  `id_family` varchar(256) NOT NULL,
  `id_region` int(11) NOT NULL,
  `head_family` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `id_role` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `picture` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`id_family`, `id_region`, `head_family`, `password`, `id_role`, `is_active`, `picture`) VALUES
('123123123', 11, 'Faruzan', '$2y$10$elvPKjhLRCMhVds3wxVgkOildKYWyiVSVLiqn7ANiZ6fYfAqDB5fe', 1, 1, 'tes_kk.jpg'),
('123123321321', 14, 'Faisal', '$2y$10$.U9Bc3pnnSfCydnCd2CCaeiBStw0LdsMUkBTSpuBbJ3a/i9zVD4kC', 2, 1, 'tes_kk1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id_region` int(11) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`id_region`, `name`) VALUES
(1, 'Aceh'),
(2, 'Sumatera Utara'),
(3, 'Sumatera Barat'),
(4, 'Riau'),
(5, 'Jambi'),
(6, 'Sumatera Selatan'),
(7, 'Bengkulu'),
(8, 'Lampung'),
(9, 'Kepulauan Bangka Belitung'),
(10, 'Kepulauan Riau'),
(11, 'DKI Jakarta'),
(12, 'Jawa Barat'),
(13, 'Jawa Tengah'),
(14, 'Daerah Istimewa Yogyakarta'),
(15, 'Jawa Timur'),
(16, 'Banten'),
(17, 'Bali'),
(18, 'Nusa Tenggara Timur'),
(19, 'Nusa Tenggara Barat'),
(20, 'Kalimantan Barat'),
(21, 'Kalimantan Tengah'),
(22, 'Kalimantan Selatan'),
(23, 'Kalimantan Timur'),
(24, 'Kalimantan Utara'),
(25, 'Sulawesi Utara'),
(26, 'Sulawesi Tengah'),
(27, 'Sulawesi Selatan'),
(28, 'Sulawesi Tenggara'),
(29, 'Gorontalo'),
(30, 'Sulawesi Barat'),
(31, 'Maluku'),
(32, 'Maluku Utara'),
(33, 'Papua'),
(34, 'Papua Barat');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nik` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `status` varchar(256) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(256) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `married_status` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `id_disaster` int(11) NOT NULL,
  `id_family` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nik`, `name`, `gender`, `status`, `dob`, `address`, `religion`, `photo`, `married_status`, `contact`, `id_disaster`, `id_family`) VALUES
(1202100058, 'Jonathan', 'Perempuan', 'Hilang', '2003-04-18', 'Cikarang', 'Katolik', '', 'Belum Menikah', '081351552541', 2, '123123321321'),
(1202100059, 'Gonshaga', 'Male', 'Dead', '1985-06-29', 'Banda Raya', 'Islam', '', 'Divorced', '081300120069', 1, '123123321321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disaster`
--
ALTER TABLE `disaster`
  ADD PRIMARY KEY (`id_disaster`),
  ADD KEY `id_region` (`id_region`);

--
-- Indexes for table `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`id_family`),
  ADD KEY `id_region` (`id_region`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id_region`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `id_disaster` (`id_disaster`),
  ADD KEY `id_family` (`id_family`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disaster`
--
ALTER TABLE `disaster`
  MODIFY `id_disaster` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `id_region` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `disaster`
--
ALTER TABLE `disaster`
  ADD CONSTRAINT `disaster_ibfk_1` FOREIGN KEY (`id_region`) REFERENCES `region` (`id_region`);

--
-- Constraints for table `family`
--
ALTER TABLE `family`
  ADD CONSTRAINT `family_ibfk_1` FOREIGN KEY (`id_region`) REFERENCES `region` (`id_region`),
  ADD CONSTRAINT `family_ibfk_2` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_disaster`) REFERENCES `disaster` (`id_disaster`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
