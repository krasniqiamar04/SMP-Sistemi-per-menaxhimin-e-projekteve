-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 03:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smp`
--

-- --------------------------------------------------------

--
-- Table structure for table `antaret`
--

CREATE TABLE `antaret` (
  `antariid` int(11) NOT NULL,
  `emri` varchar(50) NOT NULL,
  `mbiemri` varchar(50) NOT NULL,
  `datalindjes` date DEFAULT NULL,
  `nrpersonal` bigint(20) DEFAULT NULL,
  `telefoni` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `fjalekalimi` varchar(30) DEFAULT NULL,
  `roli` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antaret`
--

INSERT INTO `antaret` (`antariid`, `emri`, `mbiemri`, `datalindjes`, `nrpersonal`, `telefoni`, `email`, `fjalekalimi`, `roli`) VALUES
(1, 'Amar', 'Krasniqi', '2004-07-29', 123456789, '044899099', 'burim.avdiu@probitacademy.com', '123456', b'1'),
(2, 'Rinas', 'Drenica', '1995-09-26', 323456789, '044555879', 'rinasdrenica@gmail.com', '123456', b'0'),
(3, 'Ragip', 'Gjinovci', '1999-09-26', 223456789, '044599999', 'ragipgjinovci@probitacademy.co', '123456', b'0'),
(4, 'Leon', 'Abimi', '1993-09-20', 423456789, '044999999', 'leonabimi@probitacademy.com ', '123456', b'0'),
(5, 'Kastriot', 'Bislimi', '1993-09-26', 153456789, '044696999', 'kastriotb@probitacademy.com ', '123456', b'0'),
(6, 'Arian', 'Shala', '1996-09-26', 123456889, '044999999', 'arianshala@probitacademy.com ', '123456', b'0'),
(7, 'Marigona', 'Mazreku', '1983-09-26', 133456789, '044899999', 'marigonam@gmail.com', '123456', b'0'),
(8, 'Altin', 'Bejta', '1999-09-26', 123456989, '044599999', 'altinbejta@gmail', '123456', b'0'),
(9, 'Lum', 'Pireva', '1983-09-26', 123456729, '044999999', 'lumpireva@tick-ks.com', '123456', b'0'),
(10, 'Filan', 'Fisteku', '1975-11-22', 123416789, '044909999', 'filanf@gmail.com', '123456', b'0'),
(11, 'Arta', 'Bajrami', '1970-05-26', 123457789, '044500999', 'artab@gmail.com', '123456', b'0'),
(109, 'Filan', 'Fisteku', NULL, NULL, '045878787', 'filanf@gamil.com', '123456', NULL),
(118, 'Amar', 'Krasniqii', NULL, NULL, '044 696 665', 'krasniqiamar04@gmail.com', '123456', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projektet`
--

CREATE TABLE `projektet` (
  `projektiid` int(11) NOT NULL,
  `emri` varchar(50) NOT NULL,
  `pershkrimi` text DEFAULT NULL,
  `datafillimit` date NOT NULL,
  `datambarimit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projektet`
--

INSERT INTO `projektet` (`projektiid`, `emri`, `pershkrimi`, `datafillimit`, `datambarimit`) VALUES
(1, 'SMP', 'Projekti qe\r\nmundeson menaxhimin e puneve qe kryhen nga anetaret', '2019-06-17', '2019-08-03'),
(2, 'PROBIT', 'Web faqja per probit', '2019-01-17', '2019-10-03'),
(3, 'Mini Financa', 'Projekti per menaxhimin e financave', '2019-01-17', '2021-10-03'),
(4, 'Probit Academy', 'Projekti per menaxhimin e studentave', '2020-01-17', '2022-10-03'),
(5, 'Student Project', 'Projekti per publikimin e punëve te studentave', '2019-01-17', '2022-10-03'),
(6, 'Probit Web ', 'Projekti per publikimin e informatve per shkollen ', '2016-01-17', '2017-10-03'),
(7, 'PROBIT', 'Projeket per klientat', '2019-01-17', '2021-10-03'),
(8, 'PROBIT', 'Web faqja per probit', '2019-01-17', '2019-10-03'),
(9, 'Mini Financa', 'Projekti per menaxhimin e financave', '2019-01-17', '2021-10-03'),
(10, 'Probit Academy', 'Projekti per menaxhimin e studentave', '2020-01-17', '2022-10-03'),
(11, 'Student Project', 'Projekti per publikimin e punëve te studentave', '2019-01-17', '2022-10-03'),
(12, 'Probit Web ', 'Projekti per publikimin e informatve per shkollen ', '2016-01-17', '2017-10-03'),
(13, 'PROBIT', 'Projeket per klientat', '2019-01-17', '2021-10-03'),
(15, 'AKP', 'Projekti per klientet', '0000-00-00', '0000-00-00'),
(16, 'AKP', 'Projekti per klientet', '0000-00-00', '0000-00-00'),
(17, 'AKP', 'Projekti per klientet', '0000-00-00', '0000-00-00'),
(18, 'Restaurant', 'tdghdhg', '2022-02-27', '2022-03-03'),
(19, 'Restaurant', 'tdghdhg', '2022-02-28', '2022-03-03'),
(20, 'Amar Krasniqi Photography', 'Foto Galeri', '2022-03-08', '2022-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `punet`
--

CREATE TABLE `punet` (
  `punaid` int(11) NOT NULL,
  `projektiid` int(11) DEFAULT NULL,
  `antariid` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  `pershkrimi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `punet`
--

INSERT INTO `punet` (`punaid`, `projektiid`, `antariid`, `data`, `pershkrimi`) VALUES
(41, 1, 2, '2019-07-16 00:00:00', 'permirsimi i html css'),
(42, 5, 2, '2020-10-17 00:00:00', 'Dizajnimi i faqes dhe kthimi ne Bootstrap'),
(43, 5, 3, '2020-10-20 00:00:00', 'Krijimi i DB'),
(44, 5, 3, '2020-10-21 00:00:00', 'Kodimi i pjeses per shtimin modifikimin dhe fshirjen e studentit'),
(45, 5, 3, '2020-10-23 00:00:00', 'Kodimi i pjeses per shtimin modifikimin dhe fshirjen e projekteve'),
(46, 5, 3, '2020-10-25 00:00:00', 'Kodimi i pjeses per shtimin modifikimin dhe fshirjen e trajnimeve'),
(47, 5, 3, '2020-10-30 00:00:00', 'Kodimi i home page per paraqitjen e shenimeve'),
(48, 5, 4, '2020-11-20 00:00:00', 'Analizimi i kerkesave te reja'),
(49, 5, 3, '2020-11-30 00:00:00', 'Kodimi i faqes per paraqitjen e projekteve per nje student'),
(50, 5, 3, '2020-12-05 00:00:00', 'Kodimi i faqes per paraqitjen e nje projekti per nje student'),
(51, 1, 5, '2019-07-17 00:00:00', 'Filtrime me jquery'),
(52, 1, 3, '2019-07-16 00:00:00', 'Formen per regjistrimin e antareve'),
(53, 1, 1, '2019-07-18 00:00:00', 'krijimin e databazes'),
(54, 1, 4, '2019-07-19 00:00:00', 'permirsimi i db'),
(55, 1, 4, '2019-07-20 00:00:00', 'permirsimi i db'),
(56, 1, 5, '2019-07-21 00:00:00', 'pyetsor per anetaret CRUD'),
(57, 1, 5, '2019-07-21 00:00:00', 'PHP funksionet per CRUD te anetaret'),
(58, 1, 6, '2019-07-16 00:00:00', 'PHP permirsime te anetaret'),
(59, 1, 2, '2019-07-16 00:00:00', 'permirsimi i db'),
(60, 1, 3, '2019-07-16 00:00:00', 'permirsimi i html css'),
(61, 12, 1, '0000-00-00 00:00:00', ''),
(62, 12, 1, '0000-00-00 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antaret`
--
ALTER TABLE `antaret`
  ADD PRIMARY KEY (`antariid`),
  ADD UNIQUE KEY `personal` (`nrpersonal`);

--
-- Indexes for table `projektet`
--
ALTER TABLE `projektet`
  ADD PRIMARY KEY (`projektiid`);

--
-- Indexes for table `punet`
--
ALTER TABLE `punet`
  ADD PRIMARY KEY (`punaid`),
  ADD KEY `antariid` (`antariid`),
  ADD KEY `projektiid` (`projektiid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antaret`
--
ALTER TABLE `antaret`
  MODIFY `antariid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `projektet`
--
ALTER TABLE `projektet`
  MODIFY `projektiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `punet`
--
ALTER TABLE `punet`
  MODIFY `punaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `punet`
--
ALTER TABLE `punet`
  ADD CONSTRAINT `punet_ibfk_1` FOREIGN KEY (`antariid`) REFERENCES `antaret` (`antariid`),
  ADD CONSTRAINT `punet_ibfk_2` FOREIGN KEY (`projektiid`) REFERENCES `projektet` (`projektiid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
