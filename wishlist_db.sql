-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 06. Jun 2025 um 13:30
-- Server-Version: 10.6.22-MariaDB-0ubuntu0.22.04.1
-- PHP-Version: 8.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `wishlist_db`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `wish`
--

CREATE TABLE `wish` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Daten für Tabelle `wish`
--

INSERT INTO `wish` (`id`, `name`, `link`, `price`) VALUES
(1, 'Neue Kamera (nur Body oder Gehäuse)', 'https://www.calumetphoto.de/product/nikon-d7000-gebraucht/gebraucht/gut/24h1136d6', '150€'),
(2, 'Griff (nur mit der Kamera)', 'https://www.amazon.de/Akku-King-Batteriegriff-Nikon-ersetzt-MB-D11/dp/B005531ICQ/ref=sr_1_6_sspa?__mk_de_DE=%25C3%2585M%25C3%2585%25C5%25BD%25C3%2595%25C3%2591&crid=3VDEZNFWGLVPG&dib=eyJ2IjoiMSJ9.n8e67FYmj5oCLV2BZKnAkBiSlbi4aOCDBz2r6Ipwb3v4wW0JV9q4OxQFBsEY9qc-.oYa2ypCa0v8gzhAQb3d1Y-9roXMF1JHyt-2V_3NVMGI&dib_tag=se&keywords=Nikon+D7000+Batterie+griff&qid=1748953557&sprefix=nikon+d7000+batterie+griff%252Caps%252C88&sr=8-6-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9tdGY&psc=1', '42,99€'),
(3, 'Netz für den Schreibtisch', 'https://www.amazon.de/dp/B0BN7KYC4H?ref_=cm_sw_r_cp_ud_dp_3AZZVSPF1JZ23TRR3N0W', '9,99€');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `wish`
--
ALTER TABLE `wish`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `wish`
--
ALTER TABLE `wish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
