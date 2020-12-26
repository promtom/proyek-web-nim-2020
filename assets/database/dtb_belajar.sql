-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 08:36 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dtb_belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `NID` int(11) NOT NULL,
  `dsn_nama` varchar(255) NOT NULL,
  `dsn_tpt_lhr` varchar(255) NOT NULL,
  `dsn_tgl_lhr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_falkultas`
--

CREATE TABLE `tb_falkultas` (
  `falkutas_id` int(11) NOT NULL,
  `falkutas_nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_falkultas`
--

INSERT INTO `tb_falkultas` (`falkutas_id`, `falkutas_nama`) VALUES
(1, 'Kedokteran'),
(2, 'FMIPA'),
(3, 'Ekonomi'),
(4, 'Fasilkom');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `jurusan_id` int(11) NOT NULL,
  `jurusan_nama` varchar(25) NOT NULL,
  `jurusan_falkultas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`jurusan_id`, `jurusan_nama`, `jurusan_falkultas`) VALUES
(1, 'Kedokteran gigi', 1),
(2, 'Kimia', 2),
(3, 'Akuntansi', 3),
(4, 'Ilmu Komputer', 4),
(5, 'Menejemen', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `NIM` int(11) NOT NULL,
  `mhs_nama` varchar(25) NOT NULL,
  `mhs_tpt_lhr` varchar(25) NOT NULL,
  `mhs_tgl_lhr` varchar(25) NOT NULL,
  `mhs_jurusan` int(11) NOT NULL,
  `mhs_ipk` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`NIM`, `mhs_nama`, `mhs_tpt_lhr`, `mhs_tgl_lhr`, `mhs_jurusan`, `mhs_ipk`) VALUES
(13012012, 'James Situmorang ', 'Medan', ' 1995-04-02', 1, 2.7),
(14005011, 'Riana Putria', 'Padang', '1996-11-23', 2, 3.1),
(15002032, 'Rina Kumala Sari', 'Jakarta', '1997-06-28', 3, 3.4),
(15003036, 'Sari Citra Lestari', 'Jakarta', '1997-12-31', 4, 2.9),
(15021044, 'Rudi Permana', 'Bandung', '1994-08-22', 5, 3.5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_matakuliah`
--

CREATE TABLE `tb_matakuliah` (
  `mk_ID` int(11) NOT NULL,
  `mk_nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_matakuliah`
--

INSERT INTO `tb_matakuliah` (`mk_ID`, `mk_nama`) VALUES
(1, 'Gerontologi'),
(2, 'MPKT Sains'),
(3, 'Sistem Ekonomi Pancasila');

-- --------------------------------------------------------

--
-- Table structure for table `tb_semester`
--

CREATE TABLE `tb_semester` (
  `sem_ID` int(11) NOT NULL,
  `sem_nama` varchar(25) NOT NULL,
  `sem_mhs` int(11) NOT NULL,
  `sem_mk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_semester`
--

INSERT INTO `tb_semester` (`sem_ID`, `sem_nama`, `sem_mhs`, `sem_mk`) VALUES
(1, '2019-2020', 13012012, 1),
(2, '2019-2020', 14005011, 2),
(3, '2020-2021', 15002032, 3),
(4, '2020-2021', 15003036, 3),
(5, '2020-2021', 15021044, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `name`, `username`, `password`, `status`, `foto`) VALUES
(1, 'admin', 'admin', '$2y$10$/YnjzXjse8MQEqEkUiibGO64.1IYriPq3eREKfFnHEL48Ioah7SnS', 1, 'operator.png'),
(2, 'Beta Tester, The Old User One', 'test', '$2y$10$S.RYwTGoQXumZvfJ8XND3OQyvy1WEKNeP8YEhg8Rl82OYl6PqL/dG', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`NID`);

--
-- Indexes for table `tb_falkultas`
--
ALTER TABLE `tb_falkultas`
  ADD PRIMARY KEY (`falkutas_id`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`jurusan_id`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `tb_matakuliah`
--
ALTER TABLE `tb_matakuliah`
  ADD PRIMARY KEY (`mk_ID`);

--
-- Indexes for table `tb_semester`
--
ALTER TABLE `tb_semester`
  ADD PRIMARY KEY (`sem_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_falkultas`
--
ALTER TABLE `tb_falkultas`
  MODIFY `falkutas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `jurusan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_matakuliah`
--
ALTER TABLE `tb_matakuliah`
  MODIFY `mk_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_semester`
--
ALTER TABLE `tb_semester`
  MODIFY `sem_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
