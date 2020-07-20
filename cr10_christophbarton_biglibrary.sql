-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 20. Jul 2020 um 10:15
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_christophbarton_biglibrary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `active` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `date_of_birth`, `active`) VALUES
(1, 'Christoph', 'Barton', '2020-07-11', 0),
(2, 'Martin ', 'Zmatlik', '2019-12-12', 0),
(3, 'Chandler', 'Bing', '2020-07-03', 0),
(4, 'Tony', 'Stark', '2020-07-11', 0),
(5, 'Susanne', 'Barton', '2020-07-02', 0),
(6, 'Max', 'Mustermann', '2020-07-03', 0),
(7, 'Theodor', 'Otto', '2020-08-06', 0),
(8, 'Maria', 'Theresa', '2018-02-16', 0),
(9, 'Marie', 'Curie', '2020-01-18', 0),
(10, 'Arnold', 'Schwarzennegger', '2020-07-03', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `ISBN_Code` int(11) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`id`, `title`, `genre`, `author`, `ISBN_Code`, `active`) VALUES
(1, 'Sherlock Holmes', 'Thriller', 'Arthur Conan Doyle', 1, 0),
(2, 'Der Fremde', 'Thriller', 'Albert Campus', 121232, 0),
(3, 'Nichtlustig', 'Comedy', 'Joscha Sauer', 1231323, 0),
(4, 'Der Prozess', 'Thriller', 'Franz Kafka', 121231323, 0),
(5, 'Schöne neue Welt', 'Abenteuer', 'George Orwell', 838381, 0),
(6, 'Aladin und die Wunderlampe', 'Fantasy-Thriller', 'Maria Seidmann', 1233432, 0),
(7, 'SherlockHolmes', 'Thriller', 'VanDyck', 1212, 0),
(8, 'Harry Potter and the Goglet of Fire', 'Fantasy', 'J.K.Rowling', 212121, 0),
(9, 'White Teeth', 'Thriller', 'Zadie Smith', 1231899, 0),
(10, 'The Hunger Games', 'Thriller', 'Suszanne', 121212, 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `rent`
--

CREATE TABLE `rent` (
  `rent_id` int(11) NOT NULL,
  `fk_customer_id` int(11) DEFAULT NULL,
  `fk_rent_start_id` int(11) DEFAULT NULL,
  `fk_rent_end_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`rent_id`),
  ADD KEY `fk_customer_id` (`fk_customer_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `rent_ibfk_1` FOREIGN KEY (`fk_customer_id`) REFERENCES `customer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
