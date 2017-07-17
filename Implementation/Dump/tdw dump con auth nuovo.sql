-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Creato il: Lug 17, 2017 alle 20:43
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
-- Struttura della tabella `caffetteria`
--

CREATE TABLE IF NOT EXISTS `caffetteria` (
  `ID_Caffetteria` int(11) NOT NULL,
  `Descrizione` text,
  `Img` varchar(100) DEFAULT NULL,
  `Titolo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `caffetteria`
--

INSERT INTO `caffetteria` (`ID_Caffetteria`, `Descrizione`, `Img`, `Titolo`) VALUES
(1, 'Lasciati trasportare dal gusto inconfondibile del caffe'' Faraglia, l''unico in grado di farti iniziare la giornata nel migliore dei modi!', 'Img/caffe-faraglia.jpg', 'Una Carica Di Espresso!'),
(2, 'Non lasciarti sfuggire l''occasione! Qui da noi la colazione sara'' un vero piacere! Lasciatevi tentare dal profumo dei nostri cornetti appena sfornati, e dalla vista di un ottimo cappuccino preparato per voi dalla mano esperta dei nostri maestri caffettieri!', 'Img/Gallery/colazione.jpg', 'Fai Colazione Insieme a Noi!'),
(3, 'Che sia in tarda mattinata o in tardo pomeriggio, un aperitivo in compagnia e'' sempre una gran festa! Venite a provare la vasta gamma di aperitivi e cocktail che e'' in grado di preparare il nostro personale altamente qualificato! Ovviamente il tutto accompagnato da buona musica e cibo genuino!', 'Img/slide-aperitivo.jpg', 'Il Meglio Deve Ancora Arrivare!');

-- --------------------------------------------------------

--
-- Struttura della tabella `contatti`
--

CREATE TABLE IF NOT EXISTS `contatti` (
  `ID_Contatti` int(11) NOT NULL,
  `Titolo` varchar(50) NOT NULL,
  `Indirizzo` varchar(100) NOT NULL,
  `Tel` varchar(20) NOT NULL,
  `Fax` varchar(20) DEFAULT NULL,
  `Email` varchar(30) NOT NULL,
  `Descrizione` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `contatti`
--

INSERT INTO `contatti` (`ID_Contatti`, `Titolo`, `Indirizzo`, `Tel`, `Fax`, `Email`, `Descrizione`) VALUES
(1, 'WE''D LOVE TO HEAR FROM YOU', '49 Chigwell Road - South Woodford, London E18 1NG - United Kingdom', '(020) 8989 3831', '(020) 8989 38 32', 'info@flycoffee.uk', 'WE ARE OPEN FOR YOU');

-- --------------------------------------------------------

--
-- Struttura della tabella `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
  `ID_Evento` int(11) NOT NULL,
  `Data` date DEFAULT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Descrizione` text,
  `Img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `evento`
--

INSERT INTO `evento` (`ID_Evento`, `Data`, `Nome`, `Descrizione`, `Img`) VALUES
(0, NULL, 'Abbiamo Molto In Serbo Per Voi!', 'Ogni anno organizziamo molti eventi di diversa natura. Che siano per una festivita'', per una giornata importante o anche semplicemente per divertimento, solo una cosa e'' certa: il tutto sara'' accompagnato dalle nostre prelibatezze e dalla buona musica.', NULL),
(1, '2017-07-28', 'E'' IL MIO COMPLEANNO!', 'Festeggiamo tutti insieme!', 'Img/cheers.jpg'),
(2, '2017-04-16', 'PASQUA', 'Venite a trovarci a Pasqua! Un menu speciale vi aspetta!', 'Img/pasqua.jpg'),
(3, '2017-12-25', 'NATALE', 'Venite a trovarci a Natale! Un menu speciale vi aspetta!', 'Img/natale.jpg'),
(4, '2017-07-20', 'HAPPY HOUR!', 'Abbiamo organizzato un happy hour solo per voi!', 'Img/happyhour.jpg'),
(5, '2017-07-20', 'LA BAMBAAAAA', NULL, 'Img/labamba.jpg'),
(6, '2017-07-26', 'ROCCO E'' TRA NOI', NULL, 'Img/rocco.jpg'),
(7, '2017-07-26', 'OOOOH YOU TOUCH MY TRALALA', NULL, 'Img/gunther.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `ID_FAQ` int(11) NOT NULL,
  `Domanda` text NOT NULL,
  `Risposta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `faq`
--

INSERT INTO `faq` (`ID_FAQ`, `Domanda`, `Risposta`) VALUES
(1, 'Siete attrezzati per preparare piatti senza glutine?', 'Si, nella nostra cucina abbiamo un locale apposito dedicato alla preparazione dei piatti senza glutine. Ovviamente anche la pizza!'),
(2, 'Fate pizza da asporto?', 'Si, ma ve va venite a prendere!'),
(3, 'Ci sono accessi per persone disabili?', 'Si, il nostro locale è privo di barriere architettoniche. Siano preparati per qualsiasi evenienza!');

-- --------------------------------------------------------

--
-- Struttura della tabella `footer`
--

CREATE TABLE IF NOT EXISTS `footer` (
  `ID_Foot` int(11) NOT NULL,
  `Titoletto` varchar(50) DEFAULT NULL,
  `Indirizzo` varchar(100) DEFAULT NULL,
  `Tel` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `footer`
--

INSERT INTO `footer` (`ID_Foot`, `Titoletto`, `Indirizzo`, `Tel`) VALUES
(1, 'bar, bistro & restaurant', '41126 Oxford Road - england', '44 023 642 124');

-- --------------------------------------------------------

--
-- Struttura della tabella `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `ID_Gallery` int(11) NOT NULL,
  `Img` varchar(100) DEFAULT NULL,
  `Categoria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `gallery`
--

INSERT INTO `gallery` (`ID_Gallery`, `Img`, `Categoria`) VALUES
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
-- Struttura della tabella `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL,
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

CREATE TABLE IF NOT EXISTS `groupservices` (
  `id_service` int(10) unsigned NOT NULL DEFAULT '0',
  `id_group` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `groupservices`
--

INSERT INTO `groupservices` (`id_service`, `id_group`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `header`
--

CREATE TABLE IF NOT EXISTS `header` (
  `ID_Header` int(11) NOT NULL,
  `Nome` varchar(20) NOT NULL,
  `Link` varchar(40) NOT NULL,
  `Posizione` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `header`
--

INSERT INTO `header` (`ID_Header`, `Nome`, `Link`, `Posizione`) VALUES
(1, 'Home', 'home.php', 'Sx'),
(2, 'Storia', 'story.php', 'Sx'),
(3, 'Ristorante', 'rist_pizz.php', 'Sx'),
(4, 'Caffetteria', 'caffetteria.php', 'Sx'),
(5, 'Prenotazione', 'reservation.php', 'Dx'),
(6, 'Eventi', 'events.php', 'Dx'),
(7, 'Gallery', 'photo.php', 'Dx'),
(8, 'Contatti', 'contact.php', 'Dx');

-- --------------------------------------------------------

--
-- Struttura della tabella `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `ID_Home` int(11) NOT NULL,
  `Titolo` varchar(20) NOT NULL,
  `Descrizione` text,
  `Img` varchar(100) DEFAULT NULL,
  `Icona` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `home`
--

INSERT INTO `home` (`ID_Home`, `Titolo`, `Descrizione`, `Img`, `Icona`) VALUES
(1, 'Chi Siamo Noi?', 'Siamo due scemi che giocano a creare un sito internet di un bar/ristorante/pizzeria.\r\n\r\nIl nostro motto e'':\r\n\r\nRISTORIA PIZZORANTE, SE NON CI VIENI SEI IGNORANTE!', 'Img/saro.jpg', 'Img/Loghi/logopiccolo.ico'),
(2, 'Il Nostro Chef', 'Chef Tony gia'' all''eta'' di 15 anni dimostrava un grande talento nel tagliare le cose, e quando conobbe Edward mani di forbice e Jason di Venerdi'' 13 la sua vita comincio'' ad avere un senso. Infatti Jason lo introdusse nell''arte bellica insegnandoli a tagliare ananas al volo oppure cemento utilizzando un semplice coltello. Un giorno trovo'' un coltello pieno di energia chiamato Miracle Blade e senti'' subito la vocazione "Va'' per il mondo e divulgalo". Da quel giorno la sua vita fu segnata dal Miracle Blade, comincio'' infatti a produrre spot assieme al suo maestro di vita Jason (che in seguito lo lascio'' per dedicarsi al cinema, ma nei film usa ancora i Miracle Blade come ricordo).', 'Img/cheftony.jpg', 'Img/Loghi/logopiccolo.ico');

-- --------------------------------------------------------

--
-- Struttura della tabella `immagine`
--

CREATE TABLE IF NOT EXISTS `immagine` (
  `Link` varchar(100) NOT NULL,
  `Attivo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `immagine`
--

INSERT INTO `immagine` (`Link`, `Attivo`) VALUES
('Img/2-1.jpg', 0),
('Img/avatars/avatar-1.jpg', 1),
('Img/avatars/avatar-2.jpg', 1),
('Img/avatars/avatar-3.jpg', 1),
('Img/caffe-faraglia.jpg', 1),
('Img/caffetteria.jpg', 1),
('Img/carote.jpg', 1),
('Img/cheers.jpg', 1),
('Img/cheftony.jpg', 1),
('Img/contact.jpg', 1),
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
('Img/evento.jpg', 1),
('Img/eventospecial.jpg', 1),
('Img/faq.jpg', 1),
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
('Img/gunther.jpg', 1),
('Img/happyhour.jpg', 1),
('Img/impasto.jpg', 1),
('Img/labamba.jpg', 1),
('Img/LGallery/AP1.jpg', 1),
('Img/LGallery/Ap2.jpg', 1),
('Img/LGallery/Baba.jpg', 1),
('Img/LGallery/Cappuccino.jpg', 1),
('Img/LGallery/Flambe.jpg', 1),
('Img/LGallery/Prosciutto.jpg', 1),
('Img/Loghi/bestlogo.png', 1),
('Img/Loghi/logopiccolo.ico', 1),
('Img/misenati24.jpg', 1),
('Img/natale.jpg', 1),
('Img/pasqua.jpg', 1),
('Img/pizza bella.jpg', 1),
('Img/reservation.jpg', 1),
('Img/ristpizz.jpg', 1),
('Img/rocco.jpg', 1),
('Img/saro.jpg', 1),
('Img/slide-aperitivo.jpg', 1),
('Img/story.jpg', 1),
('Img/story1.jpg', 1),
('Img/story2.jpg', 1),
('Img/story3.jpg', 1),
('Img/story4.jpg', 1),
('Img/tricolore.jpg', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
  `Logo` varchar(100) NOT NULL,
  `Path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `logo`
--

INSERT INTO `logo` (`Logo`, `Path`) VALUES
('Img/Loghi/bestlogo.png', 'home.php');

-- --------------------------------------------------------

--
-- Struttura della tabella `messaggi`
--

CREATE TABLE IF NOT EXISTS `messaggi` (
  `ID_Messaggio` int(11) NOT NULL,
  `Nome` text NOT NULL,
  `Cognome` text NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `messaggi`
--

INSERT INTO `messaggi` (`ID_Messaggio`, `Nome`, `Cognome`, `Phone`, `Email`, `Message`) VALUES
(1, 'Gatto', 'Sul Tubo', '5522545655', 'mfkdsfk@mmfkl.dkkd', ', vflermjwogfrnwgkljr mnglr moklirÃ²jsg\n'),
(2, 'fdfdf', '', '554125', 'fgmkdf@dggdf.df', 'gdegdlfgdÃ²f\n'),
(3, '', '', '', '', ''),
(4, 'Gatto', '', '555', 'hjhjfold@gfg.gff', 'lldfdÃ²lgfdkgdÃ²eglre');

-- --------------------------------------------------------

--
-- Struttura della tabella `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `ID_Mail` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Data` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `newsletter`
--

INSERT INTO `newsletter` (`ID_Mail`, `Email`, `Data`) VALUES
(1, '', '2017-07-16'),
(2, '', '2017-07-16'),
(3, '', '2017-07-16'),
(4, 'aaa@a.it', '2017-07-16'),
(5, '', '2017-07-17'),
(6, '', '2017-07-17'),
(7, 'super.game@hotmail.it', '2017-07-17'),
(8, 'super.game@hotmail.it', '2017-07-17');

-- --------------------------------------------------------

--
-- Struttura della tabella `orario`
--

CREATE TABLE IF NOT EXISTS `orario` (
  `ID_Giorno` int(3) NOT NULL,
  `Giorno` varchar(10) NOT NULL,
  `Orario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `orario`
--

INSERT INTO `orario` (`ID_Giorno`, `Giorno`, `Orario`) VALUES
(1, 'Lunedi', '7:30 - 15:30 / 18:00 - 01:00'),
(2, 'Martedi', '7:30 - 15:30 / 18:00 - 01:00'),
(3, 'Mercoledi', 'Chiuso'),
(4, 'Giovedi', '7:30 - 15:30 / 18:00 - 01:00'),
(5, 'Venerdi', '7:30 - 15:30 / 18:00 - 01:00'),
(6, 'Sabato', '7:30 - 15:30 / 18:00 - 01:00'),
(7, 'Domenica', '9:30 - 15:30 / 18:00 - 01:00');

-- --------------------------------------------------------

--
-- Struttura della tabella `piatto`
--

CREATE TABLE IF NOT EXISTS `piatto` (
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
('boh', 'boh', 'aaaaaaaaaa', '2.50', NULL, NULL),
('funghi trifolati', 'eh..sono funghi trifolati', 'funghi ehm ehm', '12.90', NULL, 'primo'),
('panna cotta', 'panna cottissima (alla vaniglia)', 'gelatine in foglie, panna, zucchero, vaniglia', '3.20', 'Img/desserts/3.jpg', 'dessert'),
('Pizza Bella', 'Sei tu la più bellaaaa', 'Cacca, caciocavallo, letame', '250.00', 'Img/pizza bella.jpg', 'pizza'),
('Pizza brutta', 'questa l''hai cucinata tu', 'pepperoni suggo', '25.19', 'Img/food/1.jpg', 'primo');

-- --------------------------------------------------------

--
-- Struttura della tabella `prenotazione`
--

CREATE TABLE IF NOT EXISTS `prenotazione` (
  `ID_Prenotazione` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Persone` int(11) NOT NULL,
  `Time` time NOT NULL,
  `Nome_Cl` varchar(50) NOT NULL,
  `Tel` varchar(15) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Notice` text
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `prenotazione`
--

INSERT INTO `prenotazione` (`ID_Prenotazione`, `Data`, `Persone`, `Time`, `Nome_Cl`, `Tel`, `Email`, `Notice`) VALUES
(25, '2017-07-12', 10, '20:00:00', 'Gatto', '88554411255', 'gatto@mask.vom', 'Mi Raccomando!'),
(26, '2017-12-18', 150, '06:00:00', 'Hawkeye', '0255514222556', 'hawkeye@fjjjfol.stronzo', 'siamo tantissimi'),
(27, '2017-12-18', 10, '15:00:00', 'Vddjo', '55212154', 'dffdff@fmdm.fd', 'jdsjkjkdfd'),
(28, '2018-12-22', 20, '20:00:00', 'Ciao', '55225', 'vhjhjjd@dfjdjk.iy', 'jjdjdjoovv'),
(29, '2017-11-15', 25, '20:00:00', 'Bestuia', '554447711', 'vhhdsdd@dsj.dd', 'dfdfdgdfvg');

-- --------------------------------------------------------

--
-- Struttura della tabella `presentazione_reservation`
--

CREATE TABLE IF NOT EXISTS `presentazione_reservation` (
  `Img` varchar(100) DEFAULT NULL,
  `Titolo` varchar(50) NOT NULL,
  `Descrizione` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `presentazione_reservation`
--

INSERT INTO `presentazione_reservation` (`Img`, `Titolo`, `Descrizione`) VALUES
('Img/reservation.jpg', 'COME AND ENJOY THE HOSPITALITY & FOOD', 'Most of the tables in our restaurants are kept unreserved so we can accommodate\r\nanyone who visits us. You may have to wait, depending on what time of day\r\nyou visit, but we''ll be able to find you a table.');

-- --------------------------------------------------------

--
-- Struttura della tabella `recensione`
--

CREATE TABLE IF NOT EXISTS `recensione` (
  `Nome` varchar(20) NOT NULL,
  `Avatar` varchar(100) DEFAULT NULL,
  `Testo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `recensione`
--

INSERT INTO `recensione` (`Nome`, `Avatar`, `Testo`) VALUES
('Bryan Nylson', 'Img/avatars/avatar-1.jpg', 'When arriving in town, this is one of the first stops for something interesting and amazing to eat. The menu has choices for everyone and it is the kind of place you want to come back to. I love the fish and chips there as well.'),
('Lisa Petterson', 'Img/avatars/avatar-3.jpg', 'I just wanted to thank you for providing a great birthday celebration for me. Your staff did an excellent job and the food was superb. Everyone was impressed. I will recommend your expertise to my friends for an event such as this. Thanks again!'),
('Thomas Jefferson', 'Img/avatars/avatar-2.jpg', 'I wanted to write to say thank you for an amazing experience and delicious dinner tonight. You made my baby daughter and I feel very welcome! I look forward to coming back. Jenny was so wonderful with my daughter too and had her laughing most of the night. Best regards, Allison');

-- --------------------------------------------------------

--
-- Struttura della tabella `rist_pizz`
--

CREATE TABLE IF NOT EXISTS `rist_pizz` (
  `ID_Rist_Pizz` int(11) NOT NULL DEFAULT '0',
  `Titolo` varchar(50) DEFAULT NULL,
  `Descrizione` text,
  `Img` varchar(100) DEFAULT NULL,
  `Categoria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `rist_pizz`
--

INSERT INTO `rist_pizz` (`ID_Rist_Pizz`, `Titolo`, `Descrizione`, `Img`, `Categoria`) VALUES
(1, 'Vieni ad assaporare la genuinita''!', 'I nostri chef utilizzano solo ingredienti naturali di primissima qualita'', forniti da persone affidabili e che mettono il cuore nel loro lavoro!', 'Img/carote.jpg', 'ristorante'),
(2, 'La Cucina', 'I nostri piatti sono ineguagliabili! I nostri chef hanno una fantasia incredibile e creano nuovi piatti sani e genuini ogni giorno, senza però rinunciare a lasciare la clientela senza parole per il sapore squisito!', 'Img/tricolore.jpg', 'ristorante'),
(3, 'La Nostra Pizza', 'Si, facciamo anche la pizza! Ma, soprattutto, la impastiamo a mano!\r\nLa nostra pizza e'' preparata soltanto con ingredienti naturali, senza additivi ed è cotta nel forno a legna!', 'Img/impasto.jpg', 'pizzeria'),
(4, 'La Facciamo Come Vuoi Tu!', 'Il nostro personale si prenderà cura di te in ogni singolo istante e i nostri mastri pizzaioli si impegneranno ad esaudire i tuoi desideri!', 'Img/pizza bella.jpg', 'pizzeria');

-- --------------------------------------------------------

--
-- Struttura della tabella `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(10) unsigned NOT NULL,
  `script` varchar(255) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `services`
--

INSERT INTO `services` (`id`, `script`, `name`, `description`) VALUES
(1, 'admin.php', 'script dashboard admin', NULL),
(2, 'dashboard.php', NULL, NULL),
(3, 'piatti_add.php', NULL, NULL),
(4, 'piatti_delete.php', NULL, NULL),
(5, 'piatti_manager.php', NULL, NULL),
(6, 'piatti_update.php', NULL, NULL),
(7, 'admin.php', 'script dashboard admin', NULL),
(8, 'dashboard.php', NULL, NULL),
(9, 'piatti_add.php', NULL, NULL),
(10, 'piatti_delete.php', NULL, NULL),
(11, 'piatti_manager.php', NULL, NULL),
(12, 'piatti_update.php', NULL, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `ID_Slider` int(11) NOT NULL,
  `Img` varchar(100) DEFAULT NULL,
  `SliderTitle` varchar(30) DEFAULT NULL,
  `SliderText` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `slider`
--

INSERT INTO `slider` (`ID_Slider`, `Img`, `SliderTitle`, `SliderText`) VALUES
(1, 'Img/2-1.jpg', 'Aperitivi a Volonta''', 'Cocktail preparati sul momento e cibi sfiziosi rendono i nostri aperitivi un''ottima scelta\r\n'),
(2, 'Img/FILE-BLOG-2.jpg', 'Aperitivi in Compagnia', 'Chi non canta in compagnia e'' un ladro o una spia!');

-- --------------------------------------------------------

--
-- Struttura della tabella `storia`
--

CREATE TABLE IF NOT EXISTS `storia` (
  `ID_Storia` int(11) NOT NULL,
  `Titolo` varchar(30) NOT NULL,
  `Descrizione` text NOT NULL,
  `Img` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `storia`
--

INSERT INTO `storia` (`ID_Storia`, `Titolo`, `Descrizione`, `Img`) VALUES
(1, 'E Siamo Noi!', 'Siamo noi, a far casino SEMPRE NOI!', 'Img/story1.jpg'),
(2, 'Siamo Ancora Noi!', 'E ci risiamo, stessa gente, stesso posto e stesso bar', 'Img/story2.jpg'),
(3, 'Nobody cares about us', 'Solo te, che sei scemo e hai letto fino a qui XD', 'Img/story3.jpg'),
(4, 'ANCORA STAI QUA???', 'MA SEI SCEMO DAVVERO ALLORA', 'Img/story4.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `usergroups`
--

CREATE TABLE IF NOT EXISTS `usergroups` (
  `username` varchar(30) NOT NULL DEFAULT '',
  `id_group` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `usergroups`
--

INSERT INTO `usergroups` (`username`, `id_group`) VALUES
('admin', 1),
('root', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE IF NOT EXISTS `users` (
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
-- Indici per le tabelle `caffetteria`
--
ALTER TABLE `caffetteria`
  ADD PRIMARY KEY (`ID_Caffetteria`),
  ADD KEY `Img` (`Img`);

--
-- Indici per le tabelle `contatti`
--
ALTER TABLE `contatti`
  ADD PRIMARY KEY (`ID_Contatti`);

--
-- Indici per le tabelle `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`ID_Evento`),
  ADD KEY `Img` (`Img`);

--
-- Indici per le tabelle `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`ID_FAQ`);

--
-- Indici per le tabelle `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`ID_Foot`);

--
-- Indici per le tabelle `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`ID_Gallery`),
  ADD KEY `Img` (`Img`);

--
-- Indici per le tabelle `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `groupservices`
--
ALTER TABLE `groupservices`
  ADD PRIMARY KEY (`id_service`,`id_group`),
  ADD KEY `id_group` (`id_group`);

--
-- Indici per le tabelle `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`ID_Header`);

--
-- Indici per le tabelle `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`ID_Home`),
  ADD UNIQUE KEY `Titolo` (`Titolo`),
  ADD KEY `Img` (`Img`),
  ADD KEY `Icona` (`Icona`);

--
-- Indici per le tabelle `immagine`
--
ALTER TABLE `immagine`
  ADD PRIMARY KEY (`Link`);

--
-- Indici per le tabelle `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`Logo`);

--
-- Indici per le tabelle `messaggi`
--
ALTER TABLE `messaggi`
  ADD PRIMARY KEY (`ID_Messaggio`);

--
-- Indici per le tabelle `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`ID_Mail`);

--
-- Indici per le tabelle `orario`
--
ALTER TABLE `orario`
  ADD PRIMARY KEY (`ID_Giorno`);

--
-- Indici per le tabelle `piatto`
--
ALTER TABLE `piatto`
  ADD PRIMARY KEY (`Nome_Piatto`),
  ADD KEY `Img` (`Img`);

--
-- Indici per le tabelle `prenotazione`
--
ALTER TABLE `prenotazione`
  ADD PRIMARY KEY (`ID_Prenotazione`);

--
-- Indici per le tabelle `presentazione_reservation`
--
ALTER TABLE `presentazione_reservation`
  ADD PRIMARY KEY (`Titolo`),
  ADD KEY `Img` (`Img`);

--
-- Indici per le tabelle `recensione`
--
ALTER TABLE `recensione`
  ADD PRIMARY KEY (`Nome`),
  ADD KEY `Avatar` (`Avatar`);

--
-- Indici per le tabelle `rist_pizz`
--
ALTER TABLE `rist_pizz`
  ADD PRIMARY KEY (`ID_Rist_Pizz`),
  ADD KEY `Img` (`Img`);

--
-- Indici per le tabelle `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`ID_Slider`),
  ADD KEY `Img` (`Img`);

--
-- Indici per le tabelle `storia`
--
ALTER TABLE `storia`
  ADD PRIMARY KEY (`ID_Storia`),
  ADD KEY `Img` (`Img`);

--
-- Indici per le tabelle `usergroups`
--
ALTER TABLE `usergroups`
  ADD PRIMARY KEY (`username`,`id_group`),
  ADD KEY `id_group` (`id_group`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `messaggi`
--
ALTER TABLE `messaggi`
  MODIFY `ID_Messaggio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT per la tabella `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `ID_Mail` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT per la tabella `prenotazione`
--
ALTER TABLE `prenotazione`
  MODIFY `ID_Prenotazione` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT per la tabella `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `caffetteria`
--
ALTER TABLE `caffetteria`
  ADD CONSTRAINT `caffetteria_ibfk_1` FOREIGN KEY (`Img`) REFERENCES `immagine` (`Link`);

--
-- Limiti per la tabella `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`Img`) REFERENCES `immagine` (`Link`);

--
-- Limiti per la tabella `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`Img`) REFERENCES `immagine` (`Link`);

--
-- Limiti per la tabella `groupservices`
--
ALTER TABLE `groupservices`
  ADD CONSTRAINT `groupservices_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `services` (`id`),
  ADD CONSTRAINT `groupservices_ibfk_2` FOREIGN KEY (`id_group`) REFERENCES `groups` (`id`);

--
-- Limiti per la tabella `home`
--
ALTER TABLE `home`
  ADD CONSTRAINT `home_ibfk_1` FOREIGN KEY (`Img`) REFERENCES `immagine` (`Link`),
  ADD CONSTRAINT `home_ibfk_2` FOREIGN KEY (`Icona`) REFERENCES `immagine` (`Link`);

--
-- Limiti per la tabella `logo`
--
ALTER TABLE `logo`
  ADD CONSTRAINT `logo_ibfk_1` FOREIGN KEY (`Logo`) REFERENCES `immagine` (`Link`);

--
-- Limiti per la tabella `piatto`
--
ALTER TABLE `piatto`
  ADD CONSTRAINT `piatto_ibfk_1` FOREIGN KEY (`Img`) REFERENCES `immagine` (`Link`);

--
-- Limiti per la tabella `presentazione_reservation`
--
ALTER TABLE `presentazione_reservation`
  ADD CONSTRAINT `presentazione_reservation_ibfk_1` FOREIGN KEY (`Img`) REFERENCES `immagine` (`Link`);

--
-- Limiti per la tabella `recensione`
--
ALTER TABLE `recensione`
  ADD CONSTRAINT `recensione_ibfk_1` FOREIGN KEY (`Avatar`) REFERENCES `immagine` (`Link`);

--
-- Limiti per la tabella `rist_pizz`
--
ALTER TABLE `rist_pizz`
  ADD CONSTRAINT `rist_pizz_ibfk_1` FOREIGN KEY (`Img`) REFERENCES `immagine` (`Link`);

--
-- Limiti per la tabella `slider`
--
ALTER TABLE `slider`
  ADD CONSTRAINT `slider_ibfk_1` FOREIGN KEY (`Img`) REFERENCES `immagine` (`Link`);

--
-- Limiti per la tabella `storia`
--
ALTER TABLE `storia`
  ADD CONSTRAINT `storia_ibfk_1` FOREIGN KEY (`Img`) REFERENCES `immagine` (`Link`);

--
-- Limiti per la tabella `usergroups`
--
ALTER TABLE `usergroups`
  ADD CONSTRAINT `usergroups_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `usergroups_ibfk_2` FOREIGN KEY (`id_group`) REFERENCES `groups` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
