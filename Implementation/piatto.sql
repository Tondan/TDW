-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Lug 12, 2017 alle 19:13
-- Versione del server: 5.7.14
-- Versione PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tdw`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `piatto`
--

CREATE TABLE `piatto` (
  `Nome_Piatto` varchar(20) NOT NULL,
  `Descrizione` text,
  `Ingredienti` varchar(50) NOT NULL,
  `Prezzo` decimal(8,2) NOT NULL,
  `Img` varchar(100) DEFAULT NULL,
  `tipo_piatto` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `piatto`
--

INSERT INTO `piatto` (`Nome_Piatto`, `Descrizione`, `Ingredienti`, `Prezzo`, `Img`, `tipo_piatto`) VALUES
('funghi trifolati', 'eh..sono funghi trifolati', 'funghi ehm ehm', '12.69', NULL, 'primo'),
('panna cotta', 'panna cottissima (alla vaniglia)', 'gelatine in foglie, panna, zucchero, vaniglia', '3.20', 'Img/desserts/3.jpg', 'dessert'),
('Pizza brutta', 'questa l\'hai cucinata tu', 'pepperoni suggo', '25.19', 'Img/food/1.jpg', 'primo');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `piatto`
--
ALTER TABLE `piatto`
  ADD PRIMARY KEY (`Nome_Piatto`),
  ADD KEY `Img` (`Img`);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `piatto`
--
ALTER TABLE `piatto`
  ADD CONSTRAINT `piatto_ibfk_1` FOREIGN KEY (`Img`) REFERENCES `immagine` (`Link`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
