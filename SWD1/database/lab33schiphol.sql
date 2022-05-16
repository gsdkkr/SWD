-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2022 at 09:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab33schiphol`
--

-- --------------------------------------------------------

--
-- Table structure for table `gebruiker`
--

CREATE TABLE `gebruiker` (
  `ID` smallint(6) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `geslacht` varchar(1) NOT NULL,
  `postcode` varchar(7) NOT NULL,
  `geboortedatum` date NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gebruiker`
--

INSERT INTO `gebruiker` (`ID`, `naam`, `geslacht`, `postcode`, `geboortedatum`, `email`) VALUES
(1, 'John van den Berg', 'M', '1098 LV', '1984-10-07', 'jvdb@live.nl'),
(2, 'Celia Hayna', 'V', '1999 BB', '1986-05-24', 'ch@gnail.com'),
(3, 'Justin Boom', 'M', '2000 AA', '1991-05-03', 'jv@live.nl'),
(4, 'Roemer Gallo', 'M', '1999 VV', '1985-05-31', 'rg@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `klacht`
--

CREATE TABLE `klacht` (
  `ID` smallint(6) DEFAULT NULL,
  `nummer1` int(1) NOT NULL,
  `nummer2` int(1) NOT NULL,
  `nummer3` int(1) NOT NULL,
  `postcode` varchar(7) NOT NULL,
  `datum` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klacht`
--

INSERT INTO `klacht` (`ID`, `nummer1`, `nummer2`, `nummer3`, `postcode`, `datum`) VALUES
(1, 1, 1, 1, '1098 LV', '2016-05-01 18:00:00'),
(2, 2, 2, 2, '1099 BB', '2016-05-11 19:30:00'),
(3, 3, 3, 3, '2000 AA', '2016-05-10 09:30:00'),
(4, 4, 3, 3, '1999 BB', '2016-05-10 11:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `klachtsoort`
--

CREATE TABLE `klachtsoort` (
  `ID` smallint(6) NOT NULL,
  `klachtsoort` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klachtsoort`
--

INSERT INTO `klachtsoort` (`ID`, `klachtsoort`) VALUES
(1, 'milieu'),
(2, 'veiligheid'),
(3, 'geluid');

-- --------------------------------------------------------

--
-- Table structure for table `postcode`
--

CREATE TABLE `postcode` (
  `ID` smallint(6) NOT NULL,
  `postcode` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postcode`
--

INSERT INTO `postcode` (`ID`, `postcode`) VALUES
(1, '1098 LV'),
(2, '1098 XX'),
(3, '1098 LX'),
(4, '1099 TT'),
(5, '1999 BB'),
(6, '2000 AA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gebruiker`
--
ALTER TABLE `gebruiker`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `klachtsoort`
--
ALTER TABLE `klachtsoort`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `postcode`
--
ALTER TABLE `postcode`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gebruiker`
--
ALTER TABLE `gebruiker`
  MODIFY `ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `klachtsoort`
--
ALTER TABLE `klachtsoort`
  MODIFY `ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `postcode`
--
ALTER TABLE `postcode`
  MODIFY `ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
