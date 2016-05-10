-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 10 Mei 2016 pada 09.42
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `bpjs`
--
CREATE DATABASE IF NOT EXISTS `bpjs` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bpjs`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('', ''),
('1234*', 'nanda'),
('bbbb', 'jkjkjkjk'),
('fdsf', 'dfdsdf'),
('klkkkl', 'kkhhi'),
('nanda', '1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faskes`
--

CREATE TABLE IF NOT EXISTS `faskes` (
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_faskes` varchar(255) NOT NULL,
  `Provinsi` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  PRIMARY KEY (`nama`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `faskes`
--

INSERT INTO `faskes` (`nama`, `alamat`, `jenis_faskes`, `Provinsi`, `kabupaten`) VALUES
('', '', 'Puskesmas', 'Jawa Timur', 'Malang'),
('Rumah Sakit Borromeus', 'jalan bla bla', 'bla bla', 'Jawa Barat', 'Bandung'),
('Rumah Sakit Borromeus 2', 'Jalan Dipatiukur', 'Puskesmas', 'Jawa Tengah', 'Solo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `iuran`
--

CREATE TABLE IF NOT EXISTS `iuran` (
  `nik` varchar(255) NOT NULL,
  `iuran_utama` int(11) NOT NULL,
  `file_iuran_utama` int(11) NOT NULL,
  `iuran_rutin` int(11) NOT NULL,
  `file_iuran_rutin` int(11) NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_faskes`
--

CREATE TABLE IF NOT EXISTS `jenis_faskes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_faskes` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `jenis_faskes`
--

INSERT INTO `jenis_faskes` (`id`, `jenis_faskes`) VALUES
(1, 'Puskesmas'),
(2, 'Klinik TNI'),
(3, 'Klinik POLRI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE IF NOT EXISTS `kabupaten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `provinsi` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `provinsi`, `kabupaten`) VALUES
(3, 'Jawa Tengah', 'Solo'),
(4, 'Jawa Timur', 'Malang'),
(5, 'Jawa Timur', 'Sidoarjo'),
(6, 'Jawa Timur', 'Madiun'),
(7, 'Jawa Tengah', 'Sragen'),
(8, 'Jawa Tengah', 'Semarang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartu_keluarga`
--

CREATE TABLE IF NOT EXISTS `kartu_keluarga` (
  `no_kk` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `hubungan_keluarga` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kartu_keluarga`
--

INSERT INTO `kartu_keluarga` (`no_kk`, `nik`, `nama`, `tgl_lahir`, `hubungan_keluarga`, `status`) VALUES
('123', '1234', 'Ananda Kurniawan', '2015-04-01', 'Kepala Keluarga', 2),
('123', '1235', 'Nindy Zulaiqah', '2016-04-01', 'Istri', 0),
('123', '1236', 'Muhammad zaminuddin', '2016-04-22', 'Anak', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `klaim`
--

CREATE TABLE IF NOT EXISTS `klaim` (
  `isi_klaim` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `kuitansi_rs` varchar(255) NOT NULL,
  `rekam_medis` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `klaim`
--

INSERT INTO `klaim` (`isi_klaim`, `tanggal`, `kuitansi_rs`, `rekam_medis`, `nik`, `id`, `status`) VALUES
('hjhjhjjjjj', '0000-00-00', '', '', '', 1, 2),
('', '2016-05-03', '', '', '', 2, 1),
('dsddfdfdfdff', '2016-05-13', '', '', 'dsdsds', 3, 0),
('', '0000-00-00', '', '', '', 4, 0),
('', '0000-00-00', '', '', '1235', 5, 0),
('dsasddsdsdsadsaewewrereereer445r', '2016-05-19', 'kuitansi_rs', '', '1234', 6, 0),
('', '0000-00-00', 'kuitansi_rs/.', '', '', 7, 0),
('', '0000-00-00', 'kuitansi_rs/.', '', '', 8, 0),
('', '0000-00-00', 'kuitansi_rs/.PNG', '', '', 9, 0),
('				sdfdfdfdfdfdfdf', '0000-00-00', 'kuitansi_rs/.docx', '', '', 10, 0),
('								\r\n							', '0000-00-00', 'kuitansi_rs/1_.PNG', '', '', 11, 0),
('								\r\n							', '0000-00-00', 'kuitansi_rs/11_.PNG', '', '', 12, 0),
('								\r\n							', '0000-00-00', 'kuitansi_rs/13_.pdf', 'rekam_medis/13_.pdf', '', 13, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `pemilik_rekening` varchar(255) NOT NULL,
  `jumlah_pembayaran` int(11) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `no_rek` varchar(255) NOT NULL,
  `jumlah_iuran` int(11) NOT NULL,
  `bulan_iuran` varchar(20) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL,
  `tahun_iuran` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`pemilik_rekening`, `jumlah_pembayaran`, `tanggal_pembayaran`, `no_rek`, `jumlah_iuran`, `bulan_iuran`, `bukti_pembayaran`, `tahun_iuran`, `nik`, `id`, `status`) VALUES
('', 300, '2016-05-03', '2132332', 0, 'february', '', 2016, '1234', 2, 1),
('', 0, '2016-05-07', '', 0, '', 'uploads/.png', 0, '', 12, 1),
('', 12332, '2016-05-07', '12123', 0, '2016', 'uploads/123422016.PNG', 2, '1234', 13, 1),
('', 1234, '2016-05-07', '1234', 0, '2', 'uploads/123420162.', 2016, '1234', 14, 0),
('', 1234, '2016-05-07', '1234', 0, '2', 'uploads/123420162.PNG', 2016, '1234', 15, 0),
('', 1234, '2016-05-07', '1234', 0, '2', 'uploads/123420162.PNG', 2016, '1234', 16, 0),
('', 0, '2016-05-08', '', 0, 'maret', 'uploads/maret.docx', 0, '', 17, 0),
('', 0, '2016-05-08', '', 0, 'agustus', 'bukti_pembayaran/18_agustus.pptx', 0, '', 18, 0),
('', 0, '2016-05-08', '', 0, 'januari', 'bukti_pembayaran/19_januari.png', 0, '', 19, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `provinsi` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id`, `provinsi`) VALUES
(1, 'Jawa Timur'),
(2, 'Jawa Tengah'),
(3, 'Jogjakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `nik` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `rt_rw` varchar(50) NOT NULL,
  `kode_pos` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `iuran_perkeluarga` int(11) NOT NULL,
  `iuran_perjiwa` int(11) NOT NULL,
  `kelas_perawatan` varchar(20) NOT NULL,
  `no_rek` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `log_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bank` varchar(20) NOT NULL,
  `log_bayar` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `pemilik_rekening` varchar(255) NOT NULL,
  `faskes_tk1` int(11) NOT NULL,
  `faskes_tk1_gigi` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nik`, `password`, `nama`, `tanggal_lahir`, `tempat_lahir`, `no_hp`, `npwp`, `rt_rw`, `kode_pos`, `kelurahan`, `iuran_perkeluarga`, `iuran_perjiwa`, `kelas_perawatan`, `no_rek`, `no_telp`, `log_daftar`, `bank`, `log_bayar`, `pemilik_rekening`, `faskes_tk1`, `faskes_tk1_gigi`, `status`, `alamat`) VALUES
('1234', 'nanda', '', '0000-00-00', '', '', '', '', '', '', 0, 0, '', 'sddfdfdf', '', '2016-05-10 04:29:59', '', '0000-00-00 00:00:00', '', 0, 0, 2, ''),
('1235', 'nindy', 'Nindy Zulaiqah', '0000-00-00', '', '', '', '', '', '', 0, 0, '', '', '', '2016-04-27 19:10:33', '', '0000-00-00 00:00:00', '', 0, 0, 0, ''),
('1236', 'zamid', 'Muhammad Zaminuddin', '0000-00-00', '', '', '', '', '', '', 0, 0, '', '', '', '2016-04-27 19:11:51', '', '0000-00-00 00:00:00', '', 0, 0, 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
