-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2016 at 06:12 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kedaiyatai`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uid` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uid`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `category_menu`
--

CREATE TABLE `category_menu` (
  `category_menu` varchar(10) NOT NULL,
  `Explanation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_menu`
--

INSERT INTO `category_menu` (`category_menu`, `Explanation`) VALUES
('YT0001', 'Makanan'),
('YT0002', 'Tusukan'),
('YT0003', 'Minuman');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_menu`
--

CREATE TABLE `daftar_menu` (
  `id_menu` varchar(10) NOT NULL,
  `img_menu` varchar(60) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `harga_satuan` decimal(10,2) NOT NULL,
  `id_category` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_menu`
--

INSERT INTO `daftar_menu` (`id_menu`, `img_menu`, `nama_menu`, `harga_satuan`, `id_category`) VALUES
('YTM002', 'assets/images/daftar_menu/hokkaido_ramen.jpg', 'Hokaido Miso Ramen', '20000.00', 'YT0001'),
('YTM003', 'assets/images/daftar_menu/ottogi_cheese_ramen.jpg', 'Ottogi Cheese Ramen', '20000.00', 'YT0001'),
('YTM004', 'assets/images/daftar_menu/samyang.jpg', 'Samyang Hot Ramen', '20000.00', 'YT0001'),
('YTM005', 'assets/images/daftar_menu/spicy_korean_fried_chicken.jpg', 'Chicken Spicy', '6000.00', 'YT0002'),
('YTM006', 'assets/images/daftar_menu/chicken_wing.jpg', 'Chicken Wing', '8000.00', 'YT0002'),
('YTM007', 'assets/images/daftar_menu/chicken_egg_roll.jpg', 'Egg Chicken Roll', '7000.00', 'YT0002'),
('YTM008', 'assets/images/daftar_menu/salmon_ball.jpg', 'Fish Roll', '4000.00', 'YT0002'),
('YTM009', 'assets/images/daftar_menu/lobster_ball.jpg', 'Lobster Ball', '6000.00', 'YT0002'),
('YTM010', 'assets/images/daftar_menu/salmon_ball.jpg', 'Salmon Ball', '6000.00', 'YT0002'),
('YTM011', 'assets/images/daftar_menu/sosis_beef.jpg', 'Sosis Beef', '10000.00', 'YT0002'),
('YTM012', 'assets/images/daftar_menu/miraiocha.jpg', 'Mirai Ocha', '4500.00', 'YT0003'),
('YTM013', 'assets/images/daftar_menu/miraiocha.jpg', 'Fresh Tea', '6500.00', 'YT0003'),
('YTM014', 'assets/images/daftar_menu/kiyora.jpg', 'Kiyora', '8000.00', 'YT0003'),
('YTM015', 'assets/images/daftar_menu/green_tea.jpg', 'Green Tea', '6000.00', 'YT0003'),
('YTM016', 'assets/images/daftar_menu/aqua.jpg', 'Aqua', '3000.00', 'YT0003'),
('YTM017', 'assets/images/daftar_menu/teh.jpg', 'Teh', '2000.00', 'YT0003'),
('YTM018', 'assets/images/daftar_menu/teh_tarik.jpg', 'Teh Tarik', '4000.00', 'YT0003'),
('YTM019', 'assets/images/daftar_menu/lemon_tea.jpg', 'Lemon Tea', '4000.00', 'YT0003'),
('YTM020', 'assets/images/daftar_menu/airputih.jpg', 'Air Putih', '1000.00', 'YT0003');

-- --------------------------------------------------------

--
-- Table structure for table `data_customer`
--

CREATE TABLE `data_customer` (
  `id_customer` int(10) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `No_Handphone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(5) NOT NULL,
  `id_customer` varchar(6) NOT NULL,
  `category_menu` varchar(10) NOT NULL,
  `id_menu` varchar(10) NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(115) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `orderid` int(11) NOT NULL,
  `id_menu` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `sub_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `category_menu`
--
ALTER TABLE `category_menu`
  ADD PRIMARY KEY (`category_menu`);

--
-- Indexes for table `daftar_menu`
--
ALTER TABLE `daftar_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `data_customer`
--
ALTER TABLE `data_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `uid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_customer`
--
ALTER TABLE `data_customer`
  MODIFY `id_customer` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
