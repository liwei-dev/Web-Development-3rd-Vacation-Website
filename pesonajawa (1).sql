-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 03:38 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesonajawa`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `beritaKODE` char(4) NOT NULL,
  `beritaNAMA` char(120) NOT NULL,
  `beritaFILE` char(120) NOT NULL,
  `destinasiKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`beritaKODE`, `beritaNAMA`, `beritaFILE`, `destinasiKODE`) VALUES
('9111', 'Berita Anyer', 'berita anyer.jpg', '2111'),
('9112', 'Berita Fatahillah', 'berita fatahillah.jpg', '2112'),
('9113', 'Berita Bromo', 'berita bromo.jpeg', '2113');

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `destinasiKODE` char(4) NOT NULL,
  `destinasiNAMA` varchar(120) NOT NULL,
  `kategoriKODE` char(4) NOT NULL,
  `destinasiFILE` char(120) NOT NULL,
  `destinasiKET` char(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`destinasiKODE`, `destinasiNAMA`, `kategoriKODE`, `destinasiFILE`, `destinasiKET`) VALUES
('2111', 'Anyer', 'Pant', 'pantai anyer.jpeg', '1111'),
('2112', 'Fatahillah', ' Mus', 'museum fatahillah.jpg', '1112'),
('2113', 'Bromo', 'Gunu', 'bromo.jpeg', '1113');

-- --------------------------------------------------------

--
-- Table structure for table `filmliwei`
--

CREATE TABLE `filmliwei` (
  `filmliweiKODE` char(4) NOT NULL,
  `filmliweiNAMA` char(120) NOT NULL,
  `filmliweiFILE` char(120) NOT NULL,
  `destinasiKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `filmliwei`
--

INSERT INTO `filmliwei` (`filmliweiKODE`, `filmliweiNAMA`, `filmliweiFILE`, `destinasiKODE`) VALUES
('6111', 'Film Anyer', 'filmanyer.jpeg', '2111'),
('6112', 'Film Fatahillah', 'filmfatahillah.jpg', '2112'),
('6113', 'Film Bromo', 'filmbromo.jpeg', '2113');

-- --------------------------------------------------------

--
-- Table structure for table `fotodestinasi`
--

CREATE TABLE `fotodestinasi` (
  `fotodestinasiKODE` char(4) NOT NULL,
  `fotodestinasiNAMA` char(120) NOT NULL,
  `fotodestinasiFILE` char(120) NOT NULL,
  `destinasiKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `fotodestinasi`
--

INSERT INTO `fotodestinasi` (`fotodestinasiKODE`, `fotodestinasiNAMA`, `fotodestinasiFILE`, `destinasiKODE`) VALUES
('5111', 'Foto Anyer', 'pantai anyer.jpeg', '5111'),
('5112', 'Foto Fatahillah', 'museum fatahillah.jpg', '5112'),
('5113', 'Foto Bromo', 'bromo.jpeg', '5113');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotelKODE` char(4) NOT NULL,
  `hotelNAMA` char(120) NOT NULL,
  `hotelKET` char(225) NOT NULL,
  `hotelFILE` char(120) NOT NULL,
  `destinasiKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotelKODE`, `hotelNAMA`, `hotelKET`, `hotelFILE`, `destinasiKODE`) VALUES
('3111', 'Hotel Anyer', 'Hotel terbaik pada marketnya, memiliki pemandangan langsung ke arah pantai dan memiliki style semi resort yang menenangkan serta menjadi tempat yang digemari banyak wisatawan yang ingin menikmati nuansa yang segar.', 'hotel1.jpeg', '2111'),
('3112', 'Hotel Fatahillah', 'Hotel terbaik pada marketnya, memiliki pemandangan langsung ke arah museum dan memiliki style semi vintage yang menenangkan.', 'hotel fatahillah.jpg', '2112'),
('3113', 'Hotel Bromo', 'Hotel terbaik pada marketnya, memiliki pemandangan langsung ke arah gunung dan memiliki style semi alam yang menenangkan serta menjadi tempat yang digemari banyak wisatawan yang ingin menikmati nuansa yang asri.', 'hotel bromo.jpg', '2113');

-- --------------------------------------------------------

--
-- Table structure for table `kategoriberita`
--

CREATE TABLE `kategoriberita` (
  `kategoriberitaKODE` char(4) NOT NULL,
  `kategoriberitaNAMA` varchar(60) NOT NULL,
  `kategoriberitaKET` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategoriberita`
--

INSERT INTO `kategoriberita` (`kategoriberitaKODE`, `kategoriberitaNAMA`, `kategoriberitaKET`) VALUES
('1003', 'tes', '1111'),
('1003', 'tes', '1111'),
('', '', ''),
('1003', 'tes', '1111'),
('1003', 'tes', 'tttt'),
('sss', 'ss', 's');

-- --------------------------------------------------------

--
-- Table structure for table `kategoriwisata`
--

CREATE TABLE `kategoriwisata` (
  `kategoriKODE` char(4) NOT NULL,
  `kategoriNAMA` varchar(25) NOT NULL,
  `kategoriKET` text NOT NULL,
  `kategoriREFERENCE` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategoriwisata`
--

INSERT INTO `kategoriwisata` (`kategoriKODE`, `kategoriNAMA`, `kategoriKET`, `kategoriREFERENCE`) VALUES
('1111', 'Pantai', 'Pantai merupakan objek wisata terbaik untuk liburan karena Grameds bisa melihat luasnya lautan biru sejauh mata memandang. Elemen fisik dari pantai menjadi alasan mendasar mengapa pantai dijadikan lokasi untuk melakukan kegiatan wisata.', 'Wisata Tourist'),
('1112', 'Museum', 'Museum adalah lembaga yang berfungsi melindungi, mengembangkan, memanfaatkan koleksi, dan mengomunikasikannya kepada masyarakat. Definisi museum berdasarkan konferensi umum ICOM (International Council Of Museums) yang ke-22 di Wina, Austria, pada 24 Agustus 2007 menyebutkan bahwa Museum adalah lembaga yang bersifat tetap, tidak mencari keuntungan, melayani masyarakat dan perkembangannya, terbuka untuk umum, yang mengumpulkan, merawat, meneliti, mengomunikasikan, dan memamerkan warisan budaya dan lingkungannya yang bersifat kebendaan dan takbenda untuk tujuan pengkajian, pendidikan, dan kesenangan.', 'Wisata Literatour'),
('1113', 'Gunung', 'Gunung adalah bagian kerak bumi yang lebih tinggi dari area di sekitarnya. Gunung biasanya memiliki sisi curam yang secara signifikan menyingkap batuan dasarnya. Gunung berbeda dari dataran tinggi karena memiliki daerah puncak yang terbatas, gunung lebih besar dari sebuah bukit, biasanya memiliki ketinggian setidaknya 300 meter (1.000 kaki) di atas tanah sekitarnya. Beberapa gunung adalah puncak yang berdiri sendiri, tetapi sebagian besar merupakan bagian dari rangkaian pegunungan.', 'Wisata Merapi');

-- --------------------------------------------------------

--
-- Table structure for table `liwei`
--

CREATE TABLE `liwei` (
  `liweiID` char(4) NOT NULL,
  `liweiKOTA` char(120) NOT NULL,
  `destinasiKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `liwei`
--

INSERT INTO `liwei` (`liweiID`, `liweiKOTA`, `destinasiKODE`) VALUES
('3311', 'Jakarta Selatan', '2111'),
('3312', 'Bandung', '2113'),
('3313', 'Jogja', '2113');

-- --------------------------------------------------------

--
-- Table structure for table `pusatoleholeh`
--

CREATE TABLE `pusatoleholeh` (
  `pusatoleholehKODE` char(4) NOT NULL,
  `pusatoleholehNAMA` char(120) NOT NULL,
  `pusatoleholehFILE` char(120) NOT NULL,
  `destinasiKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pusatoleholeh`
--

INSERT INTO `pusatoleholeh` (`pusatoleholehKODE`, `pusatoleholehNAMA`, `pusatoleholehFILE`, `destinasiKODE`) VALUES
('4111', 'Pusat Oleh Anyer', 'pusatolehanyer.jpg', '2111'),
('4112', 'Pusat Oleh Fatahillah', 'pusatolehfatahillah.jpg', '2112'),
('4113', 'Pusat Oleh Bromo', 'pusatolehbromo.jpeg', '2113');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `restaurantKODE` char(4) NOT NULL,
  `restaurantNAMA` char(120) NOT NULL,
  `restaurantFILE` char(120) NOT NULL,
  `destinasiKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restaurantKODE`, `restaurantNAMA`, `restaurantFILE`, `destinasiKODE`) VALUES
('7111', 'Resto Seafood Anyer', 'seafood.jpg', '2111'),
('7112', 'Resto Vintage Fatahillah', 'restofatahillah.jpg', '2112'),
('7113', 'Resto Sky Bromo', 'restobromo.jpg', '2113');

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `travelKODE` char(4) NOT NULL,
  `travelNAMA` char(120) NOT NULL,
  `travelFILE` char(120) NOT NULL,
  `destinasiKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`travelKODE`, `travelNAMA`, `travelFILE`, `destinasiKODE`) VALUES
('8111', 'Travel Anyer', 'travelanyer.jpg', '2111'),
('8112', 'Travel Fatahillah', 'travelfatahilla.jpg', '2112'),
('8113', 'Travel Bromo', 'travelbromo.jpg', '2113');

-- --------------------------------------------------------

--
-- Table structure for table `useradmin`
--

CREATE TABLE `useradmin` (
  `userKODE` char(4) NOT NULL,
  `userNAMA` char(30) NOT NULL,
  `userEMAIL` char(60) NOT NULL,
  `userPASS` char(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useradmin`
--

INSERT INTO `useradmin` (`userKODE`, `userNAMA`, `userEMAIL`, `userPASS`) VALUES
('S001', 'Liwei', 'liwei@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fotodestinasi`
--
ALTER TABLE `fotodestinasi`
  ADD PRIMARY KEY (`fotodestinasiKODE`);

--
-- Indexes for table `useradmin`
--
ALTER TABLE `useradmin`
  ADD PRIMARY KEY (`userKODE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
