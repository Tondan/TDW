-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Lug 16, 2017 alle 21:11
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
-- Struttura della tabella `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'adminer');

-- --------------------------------------------------------

--
-- Struttura della tabella `groupservices`
--

CREATE TABLE `groupservices` (
  `script` varchar(255) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `groupservices`
--

INSERT INTO `groupservices` (`script`, `id`) VALUES
('admin.php', 1),
('dashboard.php', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `script` varchar(255) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `services`
--

INSERT INTO `services` (`id`, `script`, `name`, `description`) VALUES
(1, 'admin.php', 'script dashboard admin', NULL),
(2, 'dashboard.php', NULL, NULL),
(3, 'home.php\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `usergroups`
--

CREATE TABLE `usergroups` (
  `username` varchar(30) NOT NULL,
  `id_group` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `usergroups`
--

INSERT INTO `usergroups` (`username`, `id_group`) VALUES
('admin', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `surname`, `email`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, NULL),
('root', '63a9f0ea7bb98050796b649e85481845', NULL, NULL, NULL);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `groupservices`
--
ALTER TABLE `groupservices`
  ADD PRIMARY KEY (`script`),
  ADD KEY `id` (`id`);

--
-- Indici per le tabelle `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`script`);

--
-- Indici per le tabelle `usergroups`
--
ALTER TABLE `usergroups`
  ADD PRIMARY KEY (`username`,`id_group`),
  ADD KEY `username` (`username`),
  ADD KEY `id_group` (`id_group`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `groupservices`
--
ALTER TABLE `groupservices`
  ADD CONSTRAINT `groupservices_ibfk_1` FOREIGN KEY (`script`) REFERENCES `services` (`script`),
  ADD CONSTRAINT `groupservices_ibfk_2` FOREIGN KEY (`id`) REFERENCES `groups` (`id`);

--
-- Limiti per la tabella `usergroups`
--
ALTER TABLE `usergroups`
  ADD CONSTRAINT `usergroups_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `usergroups_ibfk_2` FOREIGN KEY (`id_group`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
