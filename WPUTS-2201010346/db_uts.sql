-- Dumping database structure for webprog
CREATE DATABASE IF NOT EXISTS `webprog` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `webprog`;

-- Dumping structure for table webprog.tbuser
CREATE TABLE `tbuser` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `passkey` varchar(255) DEFAULT NULL,
  `iduser` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbuser` (`id`, `nama`, `email`, `username`, `passkey`, `iduser`) VALUES
	(1, 'Wayan Subagiana Kusuma', 'subagiana23@gmail.com', 'bagiana', 'asd', '70b1d0a11c0e2002d98967e8655a28d4'),
	(2, 'Made Wijaya Kusuma', 'kusumaw@made.co.id', 'wijaya', 'asd', '6351ad45282687fa7c15d383462cdfe2');


-- Dumping structure for table webprog.tbmhs
CREATE TABLE `tbmhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `nim` varchar(35) DEFAULT NULL,
  `prodi` varchar(255) DEFAULT NULL,
  `jeniskelamin` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `idmhs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbmhs` (`id`, `nama`, `nim`, `prodi`, `jeniskelamin`, `tgl_lahir`, `idmhs`) VALUES
(1, 'Gede Surya Baaskara', '2201010666', 'TI-MDI', 'Laki-Laki', '2004-12-14', '191c98dbd0062f57110f3bd255f590f8');


-- Dumping structure for table webprog.tbdosen
CREATE TABLE `tbdosen` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nidn` int(20) DEFAULT NULL,
  `gelar` varchar(12) DEFAULT NULL,
  `dapartemen` varchar(255) DEFAULT NULL,
  `iddosen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `tbdosen` (`id`, `nama`, `nidn`, `gelar`, `dapartemen`, `iddosen`) VALUES
(1, 'Agus Bintang Darma Yudistira', 2147372892, 's1', 'Sistem Komputer', 'cba1cdbb6669b97dbd89a636c33b32e7'),
(2, 'I Kadek Prayoga Putra Mahendra', 2147483647, 's3', 'Teknik Informatika', 'cba1cdbb6669b97dbd89a636c33b32e7')


-- Dumping structure for table webprog.tbmatkul
CREATE TABLE `tbmatkul` (
  `id` int(11) NOT NULL,
  `nama_matkul` varchar(255) DEFAULT NULL,
  `dosen` varchar(255) DEFAULT NULL,
  `sks` int(10) DEFAULT NULL,
  `semester` varchar(50) DEFAULT NULL,
  `ruangan` varchar(50) DEFAULT NULL,
  `idmatkul` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbmatkul` (`id`, `nama_matkul`, `dosen`, `sks`, `semester`, `ruangan`, `idmatkul`) VALUES
(1, 'Arsitektur Komputer', 'Bintang', 3, '2', '302', 'd0c52796a3a030f21a3ed6fdf753e8f1');

ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
