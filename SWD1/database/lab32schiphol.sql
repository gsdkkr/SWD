SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `gebruiker` (
  `ID` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `geslacht` varchar(255) NOT NULL,
  `geboortedatum` datetime NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `klacht` (
  `ID` smallint(6) NOT NULL,
  `ID_gebruiker` smallint(6) NOT NULL,
  `ID_klacktsoort` smallint(6) NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `datum` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `klachtsoort` (
  `ID` smallint(6) NOT NULL,
  `klachtsoort` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `postcode` (
  `postcode` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
ALTER TABLE `gebruiker`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `klacht`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `klachtsoort`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `gebruiker`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `klacht`
  MODIFY `ID` smallint(6) NOT NULL AUTO_INCREMENT;
ALTER TABLE `klachtsoort`
  MODIFY `ID` smallint(6) NOT NULL AUTO_INCREMENT;
COMMIT;