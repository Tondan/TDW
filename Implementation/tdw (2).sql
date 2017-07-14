-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Creato il: Lug 14, 2017 alle 18:08
-- Versione del server: 5.6.31
-- Versione PHP: 5.5.38

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
-- Struttura della tabella `Caffetteria`
--

CREATE TABLE IF NOT EXISTS `Caffetteria` (
  `ID_Caffetteria` int(11) NOT NULL,
  `Descrizione` text,
  `Img` varchar(100) DEFAULT NULL,
  `Titolo` varchar(50) DEFAULT NULL,
  `Icona` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Caffetteria`
--

INSERT INTO `Caffetteria` (`ID_Caffetteria`, `Descrizione`, `Img`, `Titolo`, `Icona`) VALUES
(1, 'Lasciati trasportare dal gusto inconfondibile del caffe'' Faraglia, l''unico in grado di farti iniziare la giornata nel migliore dei modi!', 'Img/caffe-faraglia.jpg', 'Una Carica Di Espresso!', 'Img/Loghi/logopiccolo.ico'),
(2, 'Non lasciarti sfuggire l''occasione! Qui da noi la colazione sara'' un vero piacere! Lasciatevi tentare dal profumo dei nostri cornetti appena sfornati, e dalla vista di un ottimo cappuccino preparato per voi dalla mano esperta dei nostri maestri caffettieri!', 'Img/Gallery/colazione.jpg', 'Fai Colazione Insieme a Noi!', 'Img/Loghi/logopiccolo.ico'),
(3, 'Che sia in tarda mattinata o in tardo pomeriggio, un aperitivo in compagnia e'' sempre una gran festa! Venite a provare la vasta gamma di aperitivi e cocktail che e'' in grado di preparare il nostro personale altamente qualificato! Ovviamente il tutto accompagnato da buona musica e cibo genuino!', 'Img/slide-aperitivo.jpg', 'Il Meglio Deve Ancora Arrivare!', 'Img/Loghi/logopiccolo.ico');

-- --------------------------------------------------------

--
-- Struttura della tabella `Contatti`
--

CREATE TABLE IF NOT EXISTS `Contatti` (
  `ID_Contatti` int(11) NOT NULL,
  `Descrizione` text,
  `Indirizzo_Az` varchar(30) DEFAULT NULL,
  `Tel_Az` varchar(16) DEFAULT NULL,
  `E_Mail_Az` varchar(30) DEFAULT NULL,
  `Dscrizione` text,
  `E_Mail_Cl` varchar(30) DEFAULT NULL,
  `Nome_Cl` varchar(20) DEFAULT NULL,
  `Oggetto_Msg` varchar(20) DEFAULT NULL,
  `Messaggio` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Evento`
--

CREATE TABLE IF NOT EXISTS `Evento` (
  `ID_Evento` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Nome` varchar(20) DEFAULT NULL,
  `Descrizione` text,
  `Menu` varchar(20) DEFAULT NULL,
  `Img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `FAQ`
--

CREATE TABLE IF NOT EXISTS `FAQ` (
  `ID_FAQ` int(11) NOT NULL,
  `Domanda` varchar(50) NOT NULL,
  `Risposta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Footer`
--

CREATE TABLE IF NOT EXISTS `Footer` (
  `ID_Footer` int(11) NOT NULL,
  `Orario` varchar(10) DEFAULT NULL,
  `Nome_Az` varchar(20) DEFAULT NULL,
  `P_IVA` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Gallery`
--

CREATE TABLE IF NOT EXISTS `Gallery` (
  `ID_Gallery` int(11) NOT NULL,
  `Img` varchar(100) DEFAULT NULL,
  `Categoria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Gallery`
--

INSERT INTO `Gallery` (`ID_Gallery`, `Img`, `Categoria`) VALUES
(1, 'Img/Gallery/colazione.jpg', 'drinks'),
(2, 'Img/Gallery/profitteroles.jpg', 'desserts'),
(3, 'Img/Gallery/pesto.jpg', 'food'),
(4, 'Img/Gallery/tortafrutta.jpg', 'desserts'),
(5, 'Img/Gallery/tagliata.jpg', 'food'),
(6, 'Img/Gallery/drink1.jpg', 'drinks'),
(7, 'Img/Gallery/cappuccino.jpg', 'drinks'),
(8, 'Img/Gallery/pizza1.jpg', 'food'),
(9, 'Img/Gallery/cheesecake.jpg', 'desserts'),
(10, 'Img/Gallery/pasta.jpg', 'food'),
(11, 'Img/Gallery/tappi.jpg', 'drinks'),
(12, 'Img/Gallery/panna-cotta.jpg', 'desserts'),
(13, 'Img/Gallery/pizza2.jpg', 'food'),
(14, 'Img/Gallery/drink2.jpg', 'drinks'),
(15, 'Img/Gallery/dolci.jpg', 'desserts');

-- --------------------------------------------------------

--
-- Struttura della tabella `Gruppo`
--

CREATE TABLE IF NOT EXISTS `Gruppo` (
  `ID_Gruppo` int(11) NOT NULL,
  `Utente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Header`
--

CREATE TABLE IF NOT EXISTS `Header` (
  `ID_Header` int(11) NOT NULL,
  `Nome` varchar(20) NOT NULL,
  `Link` varchar(40) NOT NULL,
  `Posizione` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Header`
--

INSERT INTO `Header` (`ID_Header`, `Nome`, `Link`, `Posizione`) VALUES
(1, 'Home', 'home.php', 'Sx'),
(2, 'Storia', 'story.php', 'Sx'),
(3, 'Ristorante/Pizzeria', 'rist_pizz.php', 'Sx'),
(4, 'Caffetteria', 'caffetteria.php', 'Sx'),
(5, 'Prenotazione', 'reservation.php', 'Dx'),
(6, 'Eventi', 'events.php', 'Dx'),
(7, 'Gallery', 'photo.php', 'Dx'),
(8, 'Contatti', 'contact.php', 'Dx');

-- --------------------------------------------------------

--
-- Struttura della tabella `Home`
--

CREATE TABLE IF NOT EXISTS `Home` (
  `ID_Home` int(11) NOT NULL,
  `Titolo` varchar(20) NOT NULL,
  `Descrizione` text,
  `Img` varchar(100) DEFAULT NULL,
  `Icona` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Home`
--

INSERT INTO `Home` (`ID_Home`, `Titolo`, `Descrizione`, `Img`, `Icona`) VALUES
(1, 'Chi Siamo Noi?', 'Siamo due scemi che giocano a creare un sito internet di un bar/ristorante/pizzeria.\r\n\r\nIl nostro motto e'':\r\n\r\nRISTORIA PIZZORANTE, SE NON CI VIENI SEI IGNORANTE!', 'Img/saro.jpg', 'Img/Loghi/logopiccolo.ico'),
(2, 'Il Nostro Chef', 'Chef Tony gia'' all''eta'' di 15 anni dimostrava un grande talento nel tagliare le cose, e quando conobbe Edward mani di forbice e Jason di Venerdi'' 13 la sua vita comincio'' ad avere un senso. Infatti Jason lo introdusse nell''arte bellica insegnandoli a tagliare ananas al volo oppure cemento utilizzando un semplice coltello. Un giorno trovo'' un coltello pieno di energia chiamato Miracle Blade e senti'' subito la vocazione "Va'' per il mondo e divulgalo". Da quel giorno la sua vita fu segnata dal Miracle Blade, comincio'' infatti a produrre spot assieme al suo maestro di vita Jason (che in seguito lo lascio'' per dedicarsi al cinema, ma nei film usa ancora i Miracle Blade come ricordo).', 'Img/cheftony.jpg', 'Img/Loghi/logopiccolo.ico');

-- --------------------------------------------------------

--
-- Struttura della tabella `Immagine`
--

CREATE TABLE IF NOT EXISTS `Immagine` (
  `Link` varchar(100) NOT NULL,
  `Attivo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Immagine`
--

INSERT INTO `Immagine` (`Link`, `Attivo`) VALUES
('Img/2-1.jpg', 0),
('Img/avatars/avatar-1.jpg', 1),
('Img/avatars/avatar-2.jpg', 1),
('Img/avatars/avatar-3.jpg', 1),
('Img/caffe-faraglia.jpg', 1),
('Img/caffetteria.jpg', 1),
('Img/cheftony.jpg', 1),
('Img/desserts/1.jpg', 1),
('Img/desserts/2.jpg', 0),
('Img/desserts/3.jpg', 0),
('Img/desserts/4.jpg', 0),
('Img/desserts/5.jpg', 0),
('Img/desserts/6.jpg', 0),
('Img/desserts/7.jpg', 0),
('Img/drinks/1.jpg', 1),
('Img/drinks/2.jpg', 0),
('Img/drinks/3.jpg', 0),
('Img/drinks/4.jpg', 0),
('Img/drinks/5.jpg', 0),
('Img/drinks/6.jpg', 0),
('Img/drinks/7.jpg', 0),
('Img/FILE-BLOG-2.jpg', 0),
('Img/food/1.jpg', 1),
('Img/food/2.jpg', 0),
('Img/food/3.jpg', 0),
('Img/food/4.jpg', 0),
('Img/food/5.jpg', 0),
('Img/food/6.jpg', 0),
('Img/food/7.jpg', 0),
('Img/gallery.jpg', 1),
('Img/Gallery/cappuccino.jpg', 1),
('Img/Gallery/cheesecake.jpg', 1),
('Img/Gallery/colazione.jpg', 1),
('Img/Gallery/dolci.jpg', 1),
('Img/Gallery/drink1.jpg', 1),
('Img/Gallery/drink2.jpg', 1),
('Img/Gallery/panna-cotta.jpg', 1),
('Img/Gallery/pasta.jpg', 1),
('Img/Gallery/pesto.jpg', 1),
('Img/Gallery/pizza1.jpg', 1),
('Img/Gallery/pizza2.jpg', 1),
('Img/Gallery/profitteroles.jpg', 1),
('Img/Gallery/tagliata.jpg', 1),
('Img/Gallery/tappi.jpg', 1),
('Img/Gallery/tortafrutta.jpg', 1),
('Img/LGallery/AP1.jpg', 1),
('Img/LGallery/Ap2.jpg', 1),
('Img/LGallery/Baba.jpg', 1),
('Img/LGallery/Cappuccino.jpg', 1),
('Img/LGallery/Flambe.jpg', 1),
('Img/LGallery/Prosciutto.jpg', 1),
('Img/Loghi/bestlogo.png', 1),
('Img/Loghi/logopiccolo.ico', 1),
('Img/reservation.jpg', 1),
('Img/saro.jpg', 1),
('Img/slide-aperitivo.jpg', 1),
('Img/story.jpg', 1),
('Img/story1.jpg', 1),
('Img/story2.jpg', 1),
('Img/story3.jpg', 1),
('Img/story4.jpg', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `Logo`
--

CREATE TABLE IF NOT EXISTS `Logo` (
  `Logo` varchar(100) NOT NULL,
  `Path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Logo`
--

INSERT INTO `Logo` (`Logo`, `Path`) VALUES
('Img/Loghi/bestlogo.png', 'home.php');

-- --------------------------------------------------------

--
-- Struttura della tabella `Menu`
--

CREATE TABLE IF NOT EXISTS `Menu` (
  `Nome_Menu` varchar(20) NOT NULL,
  `Piatto` varchar(20) DEFAULT NULL,
  `Img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Orario`
--

CREATE TABLE IF NOT EXISTS `Orario` (
  `Giorno` varchar(10) NOT NULL,
  `Orario` time DEFAULT NULL,
  `Chiuso` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Piatto`
--

CREATE TABLE IF NOT EXISTS `Piatto` (
  `Nome_Piatto` varchar(20) NOT NULL,
  `Descrizione` text,
  `Ingredienti` varchar(50) NOT NULL,
  `Prezzo` decimal(8,2) NOT NULL,
  `Img` varchar(100) DEFAULT NULL,
  `tipo_piatto` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Piatto`
--

INSERT INTO `Piatto` (`Nome_Piatto`, `Descrizione`, `Ingredienti`, `Prezzo`, `Img`, `tipo_piatto`) VALUES
('funghi trifolati', 'eh..sono funghi trifolati', 'funghi ehm ehm', '12.69', NULL, 'primo'),
('panna cotta', 'panna cottissima (alla vaniglia)', 'gelatine in foglie, panna, zucchero, vaniglia', '3.20', 'Img/desserts/3.jpg', 'dessert'),
('Pizza brutta', 'questa l''hai cucinata tu', 'pepperoni suggo', '25.19', 'Img/food/1.jpg', 'primo');

-- --------------------------------------------------------

--
-- Struttura della tabella `Prenotazione`
--

CREATE TABLE IF NOT EXISTS `Prenotazione` (
  `ID_Prenotazione` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Persone` int(11) NOT NULL,
  `Time` time NOT NULL,
  `Nome_Cl` varchar(50) NOT NULL,
  `Tel` varchar(15) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Notice` text
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Presentazione_Reservation`
--

CREATE TABLE IF NOT EXISTS `Presentazione_Reservation` (
  `Img` varchar(100) DEFAULT NULL,
  `Titolo` varchar(50) NOT NULL,
  `Descrizione` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Presentazione_Reservation`
--

INSERT INTO `Presentazione_Reservation` (`Img`, `Titolo`, `Descrizione`) VALUES
('Img/reservation.jpg', 'COME AND ENJOY THE HOSPITALITY & FOOD', 'Most of the tables in our restaurants are kept unreserved so we can accommodate\r\nanyone who visits us. You may have to wait, depending on what time of day\r\nyou visit, but we''ll be able to find you a table.');

-- --------------------------------------------------------

--
-- Struttura della tabella `Recensione`
--

CREATE TABLE IF NOT EXISTS `Recensione` (
  `Nome` varchar(20) NOT NULL,
  `Avatar` varchar(100) DEFAULT NULL,
  `Testo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Recensione`
--

INSERT INTO `Recensione` (`Nome`, `Avatar`, `Testo`) VALUES
('Bryan Nylson', 'Img/avatars/avatar-1.jpg', 'When arriving in town, this is one of the first stops for something interesting and amazing to eat. The menu has choices for everyone and it is the kind of place you want to come back to. I love the fish and chips there as well.'),
('Lisa Petterson', 'Img/avatars/avatar-3.jpg', 'I just wanted to thank you for providing a great birthday celebration for me. Your staff did an excellent job and the food was superb. Everyone was impressed. I will recommend your expertise to my friends for an event such as this. Thanks again!'),
('Thomas Jefferson', 'Img/avatars/avatar-2.jpg', 'I wanted to write to say thank you for an amazing experience and delicious dinner tonight. You made my baby daughter and I feel very welcome! I look forward to coming back. Jenny was so wonderful with my daughter too and had her laughing most of the night. Best regards, Allison');

-- --------------------------------------------------------

--
-- Struttura della tabella `Rist_Pizz`
--

CREATE TABLE IF NOT EXISTS `Rist_Pizz` (
  `ID_Rist_Pizz` int(11) NOT NULL,
  `Descrizione` text,
  `Menu` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Servizio`
--

CREATE TABLE IF NOT EXISTS `Servizio` (
  `ID_Servizio` int(11) NOT NULL,
  `Gruppo` int(11) DEFAULT NULL,
  `Tipo_Servizio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Slider`
--

CREATE TABLE IF NOT EXISTS `Slider` (
  `ID_Slider` int(11) NOT NULL,
  `Img` varchar(100) DEFAULT NULL,
  `SliderTitle` varchar(30) DEFAULT NULL,
  `SliderText` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Slider`
--

INSERT INTO `Slider` (`ID_Slider`, `Img`, `SliderTitle`, `SliderText`) VALUES
(1, 'Img/2-1.jpg', 'Aperitivi a Volonta''', 'Cocktail preparati sul momento e cibi sfiziosi rendono i nostri aperitivi un''ottima scelta\r\n'),
(2, 'Img/FILE-BLOG-2.jpg', 'Aperitivi in Compagnia', 'Chi non canta in compagnia e'' un ladro o una spia!');

-- --------------------------------------------------------

--
-- Struttura della tabella `Storia`
--

CREATE TABLE IF NOT EXISTS `Storia` (
  `ID_Storia` int(11) NOT NULL,
  `Titolo` varchar(30) NOT NULL,
  `Descrizione` text NOT NULL,
  `Img` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Storia`
--

INSERT INTO `Storia` (`ID_Storia`, `Titolo`, `Descrizione`, `Img`) VALUES
(1, 'E Siamo Noi!', 'Siamo noi, a far casino SEMPRE NOI!', 'Img/story1.jpg'),
(2, 'Siamo Ancora Noi!', 'E ci risiamo, stessa gente, stesso posto e stesso bar', 'Img/story2.jpg'),
(3, 'Nobody cares about us', 'Solo te, che sei scemo e hai letto fino a qui XD', 'Img/story3.jpg'),
(4, 'ANCORA STAI QUA???', 'MA SEI SCEMO DAVVERO ALLORA', 'Img/story4.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `Utente`
--

CREATE TABLE IF NOT EXISTS `Utente` (
  `ID_Utente` int(11) NOT NULL,
  `Nome_Utente` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Tipo_Utente` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `Caffetteria`
--
ALTER TABLE `Caffetteria`
  ADD PRIMARY KEY (`ID_Caffetteria`),
  ADD KEY `Img` (`Img`),
  ADD KEY `Icona` (`Icona`);

--
-- Indici per le tabelle `Contatti`
--
ALTER TABLE `Contatti`
  ADD PRIMARY KEY (`ID_Contatti`);

--
-- Indici per le tabelle `Evento`
--
ALTER TABLE `Evento`
  ADD PRIMARY KEY (`ID_Evento`),
  ADD KEY `Menu` (`Menu`),
  ADD KEY `Img` (`Img`);

--
-- Indici per le tabelle `FAQ`
--
ALTER TABLE `FAQ`
  ADD PRIMARY KEY (`ID_FAQ`);

--
-- Indici per le tabelle `Footer`
--
ALTER TABLE `Footer`
  ADD PRIMARY KEY (`ID_Footer`),
  ADD KEY `Orario` (`Orario`);

--
-- Indici per le tabelle `Gallery`
--
ALTER TABLE `Gallery`
  ADD PRIMARY KEY (`ID_Gallery`),
  ADD KEY `Img` (`Img`);

--
-- Indici per le tabelle `Gruppo`
--
ALTER TABLE `Gruppo`
  ADD PRIMARY KEY (`ID_Gruppo`),
  ADD KEY `Utente` (`Utente`);

--
-- Indici per le tabelle `Header`
--
ALTER TABLE `Header`
  ADD PRIMARY KEY (`ID_Header`);

--
-- Indici per le tabelle `Home`
--
ALTER TABLE `Home`
  ADD PRIMARY KEY (`ID_Home`),
  ADD UNIQUE KEY `Titolo` (`Titolo`),
  ADD KEY `Img` (`Img`),
  ADD KEY `Icona` (`Icona`);

--
-- Indici per le tabelle `Immagine`
--
ALTER TABLE `Immagine`
  ADD PRIMARY KEY (`Link`);

--
-- Indici per le tabelle `Logo`
--
ALTER TABLE `Logo`
  ADD PRIMARY KEY (`Logo`);

--
-- Indici per le tabelle `Menu`
--
ALTER TABLE `Menu`
  ADD PRIMARY KEY (`Nome_Menu`),
  ADD KEY `Piatto` (`Piatto`),
  ADD KEY `Img` (`Img`);

--
-- Indici per le tabelle `Orario`
--
ALTER TABLE `Orario`
  ADD PRIMARY KEY (`Giorno`);

--
-- Indici per le tabelle `Piatto`
--
ALTER TABLE `Piatto`
  ADD PRIMARY KEY (`Nome_Piatto`),
  ADD KEY `Img` (`Img`);

--
-- Indici per le tabelle `Prenotazione`
--
ALTER TABLE `Prenotazione`
  ADD PRIMARY KEY (`ID_Prenotazione`);

--
-- Indici per le tabelle `Presentazione_Reservation`
--
ALTER TABLE `Presentazione_Reservation`
  ADD PRIMARY KEY (`Titolo`),
  ADD KEY `Img` (`Img`);

--
-- Indici per le tabelle `Recensione`
--
ALTER TABLE `Recensione`
  ADD PRIMARY KEY (`Nome`),
  ADD KEY `Avatar` (`Avatar`);

--
-- Indici per le tabelle `Rist_Pizz`
--
ALTER TABLE `Rist_Pizz`
  ADD PRIMARY KEY (`ID_Rist_Pizz`),
  ADD KEY `Menu` (`Menu`);

--
-- Indici per le tabelle `Servizio`
--
ALTER TABLE `Servizio`
  ADD PRIMARY KEY (`ID_Servizio`),
  ADD KEY `Gruppo` (`Gruppo`);

--
-- Indici per le tabelle `Slider`
--
ALTER TABLE `Slider`
  ADD PRIMARY KEY (`ID_Slider`),
  ADD KEY `Img` (`Img`);

--
-- Indici per le tabelle `Storia`
--
ALTER TABLE `Storia`
  ADD PRIMARY KEY (`ID_Storia`),
  ADD KEY `Img` (`Img`);

--
-- Indici per le tabelle `Utente`
--
ALTER TABLE `Utente`
  ADD PRIMARY KEY (`ID_Utente`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `Evento`
--
ALTER TABLE `Evento`
  MODIFY `ID_Evento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `Gruppo`
--
ALTER TABLE `Gruppo`
  MODIFY `ID_Gruppo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `Prenotazione`
--
ALTER TABLE `Prenotazione`
  MODIFY `ID_Prenotazione` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT per la tabella `Servizio`
--
ALTER TABLE `Servizio`
  MODIFY `ID_Servizio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `Utente`
--
ALTER TABLE `Utente`
  MODIFY `ID_Utente` int(11) NOT NULL AUTO_INCREMENT;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `Caffetteria`
--
ALTER TABLE `Caffetteria`
  ADD CONSTRAINT `caffetteria_ibfk_1` FOREIGN KEY (`Img`) REFERENCES `Immagine` (`Link`),
  ADD CONSTRAINT `caffetteria_ibfk_2` FOREIGN KEY (`Icona`) REFERENCES `Immagine` (`Link`);

--
-- Limiti per la tabella `Evento`
--
ALTER TABLE `Evento`
  ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`Menu`) REFERENCES `Menu` (`Nome_Menu`),
  ADD CONSTRAINT `evento_ibfk_2` FOREIGN KEY (`Img`) REFERENCES `Immagine` (`Link`);

--
-- Limiti per la tabella `Footer`
--
ALTER TABLE `Footer`
  ADD CONSTRAINT `footer_ibfk_1` FOREIGN KEY (`Orario`) REFERENCES `Orario` (`Giorno`);

--
-- Limiti per la tabella `Gallery`
--
ALTER TABLE `Gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`Img`) REFERENCES `Immagine` (`Link`);

--
-- Limiti per la tabella `Gruppo`
--
ALTER TABLE `Gruppo`
  ADD CONSTRAINT `gruppo_ibfk_1` FOREIGN KEY (`Utente`) REFERENCES `Utente` (`ID_Utente`);

--
-- Limiti per la tabella `Home`
--
ALTER TABLE `Home`
  ADD CONSTRAINT `home_ibfk_1` FOREIGN KEY (`Img`) REFERENCES `Immagine` (`Link`),
  ADD CONSTRAINT `home_ibfk_2` FOREIGN KEY (`Icona`) REFERENCES `Immagine` (`Link`);

--
-- Limiti per la tabella `Logo`
--
ALTER TABLE `Logo`
  ADD CONSTRAINT `logo_ibfk_1` FOREIGN KEY (`Logo`) REFERENCES `Immagine` (`Link`);

--
-- Limiti per la tabella `Menu`
--
ALTER TABLE `Menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`Piatto`) REFERENCES `Piatto` (`Nome_Piatto`),
  ADD CONSTRAINT `menu_ibfk_2` FOREIGN KEY (`Img`) REFERENCES `Immagine` (`Link`);

--
-- Limiti per la tabella `Piatto`
--
ALTER TABLE `Piatto`
  ADD CONSTRAINT `piatto_ibfk_1` FOREIGN KEY (`Img`) REFERENCES `Immagine` (`Link`);

--
-- Limiti per la tabella `Presentazione_Reservation`
--
ALTER TABLE `Presentazione_Reservation`
  ADD CONSTRAINT `presentazione_reservation_ibfk_1` FOREIGN KEY (`Img`) REFERENCES `Immagine` (`Link`);

--
-- Limiti per la tabella `Recensione`
--
ALTER TABLE `Recensione`
  ADD CONSTRAINT `recensione_ibfk_1` FOREIGN KEY (`Avatar`) REFERENCES `Immagine` (`Link`);

--
-- Limiti per la tabella `Rist_Pizz`
--
ALTER TABLE `Rist_Pizz`
  ADD CONSTRAINT `rist_pizz_ibfk_1` FOREIGN KEY (`Menu`) REFERENCES `Menu` (`Nome_Menu`);

--
-- Limiti per la tabella `Servizio`
--
ALTER TABLE `Servizio`
  ADD CONSTRAINT `servizio_ibfk_1` FOREIGN KEY (`Gruppo`) REFERENCES `Gruppo` (`ID_Gruppo`);

--
-- Limiti per la tabella `Slider`
--
ALTER TABLE `Slider`
  ADD CONSTRAINT `slider_ibfk_1` FOREIGN KEY (`Img`) REFERENCES `Immagine` (`Link`);

--
-- Limiti per la tabella `Storia`
--
ALTER TABLE `Storia`
  ADD CONSTRAINT `storia_ibfk_1` FOREIGN KEY (`Img`) REFERENCES `Immagine` (`Link`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
