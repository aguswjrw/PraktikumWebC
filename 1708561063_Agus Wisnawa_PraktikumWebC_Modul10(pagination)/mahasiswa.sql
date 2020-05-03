-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 03:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nama` varchar(25) NOT NULL,
  `nim` int(11) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `fakultas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nama`, `nim`, `jurusan`, `fakultas`) VALUES
('asdf', 123, 'asfasdf', 'asdfasdf'),
('asdf', 123123, '123', 'sadf'),
('asdf', 123222, '123', 'sadf'),
('dajjaru', 345345, 's', 'sdg'),
('asdf', 12311111, '123', 'asdfasdf'),
('asdfaaaaasdf', 123312312, 'asdfasdf', 'asdfasdf'),
('asdf', 345345994, '123', 'sadf'),
('asdfaaaadajjaru', 1232222222, 'asfasdf', 'sadf'),
('asdf', 2147483647, 'asfasdf', 'asdfasdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
