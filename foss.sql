-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2015 at 12:32 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foss`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `no` int(100) NOT NULL AUTO_INCREMENT,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `bulan` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `sd` varchar(100) NOT NULL,
  `smp` varchar(100) NOT NULL,
  `sma` varchar(100) NOT NULL,
  `universitas` varchar(40) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`no`, `nim`, `nama`, `kota`, `jenis_kelamin`, `tanggal`, `bulan`, `tahun`, `sd`, `smp`, `sma`, `universitas`) VALUES
(9, 'k3513029', 'Katon Bagas Gumelar', 'jalan bintara jaya 3', 'L', '10', 'Februari', '1995', '05', '199', '59', 'UNS');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
