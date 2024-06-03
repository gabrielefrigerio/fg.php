-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              10.4.28-MariaDB - mariadb.org binary distribution
-- S.O. server:                  Win64
-- HeidiSQL Versione:            12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dump della struttura di tabella film-real.contatti
CREATE TABLE IF NOT EXISTS `contatti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `commento` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella film-real.contatti: ~0 rows (circa)

-- Dump della struttura di tabella film-real.film
CREATE TABLE IF NOT EXISTS `film` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titolo` varchar(100) DEFAULT NULL,
  `descrizione` text DEFAULT NULL,
  `anno` year(4) DEFAULT NULL,
  `durata` int(11) DEFAULT NULL,
  `regista` varchar(50) DEFAULT NULL,
  `lingua` set('inglese','italiano','francese','spagnolo') DEFAULT NULL,
  `settings` varchar(50) DEFAULT NULL,
  `trailer` varchar(50) DEFAULT NULL,
  `casa_produttrice` varchar(50) DEFAULT NULL,
  `voto` float DEFAULT NULL,
  `descr_breve` text DEFAULT NULL,
  `genere` enum('commedia','avventura','azione','drammatico','horror','western','romantico','animazione') DEFAULT NULL,
  `media` enum('Film','Serie') DEFAULT NULL,
  `copertina` enum('TRUE','FALSE') NOT NULL DEFAULT 'FALSE',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella film-real.film: ~26 rows (circa)
INSERT INTO `film` (`id`, `titolo`, `descrizione`, `anno`, `durata`, `regista`, `lingua`, `settings`, `trailer`, `casa_produttrice`, `voto`, `descr_breve`, `genere`, `media`, `copertina`) VALUES
	(0, 'Dune', 'Dopo una serie di prove, Paul Atreides (Timothée Chalamet) è diventato ormai parte del popolo desertico dei Fremen, sostenuto dall\'entusiasta leader Stilgar (Javier Bardem). Si è inoltre profondamente legato a Chani (Zendaya), che non riesce però del tutto a leggere in un cuore tormentato.<br>\r\nQual è la priorità di Paul? Vorrebbe vendicarsi degli Harkonnen che gli hanno ucciso il padre e hanno preso il controllo del pianeta Arrakis, con la complicità dell\'Imperatore (Christopher Walken), deciso a liberarsi della sua casata. Sa però che questo lo trasformerebbe in un leader spietato, così resiste alle insistenze di sua madre: Lady Jessica (Rebecca Ferguson), ora Reverenda Madre dell\'ordine delle Bene Gesserit, vuole che accetti il suo destino di "messia", Muad\'dib, la figura che guiderà i Fremen alla liberazione di Arrakis.<br>\r\nE\' una strada dalla quale non si torna indietro, e dal canto loro gli Harkonnen stanno per schierare un nuovo avversario, lo spietato e sanguinario Feyd-Rautha (Austin Butler), nipote del Barone (Stellan Skarsgaard).\r\n<br>Paul può avere la meglio? Ma soprattutto, VUOLE avere la meglio, considerando il prezzo da pagare con la guerra? E\' davvero il messia o solo un principe che cerca di vendicare suo padre, il Duca Leto Atreides?', '2021', 165, 'Denis Villenueve', 'inglese', 'Arabia Saudita-Giordania-Italia', 'https://www.youtube.com/watch?v=UgcRr6cAh2E', 'Legendary Pictures-Villeneuve Films-Warner Bros', 4.7, 'Dune - Parte Due, film diretto da Denis Villeneuve, \r\n                  è il secondo capitolo della saga sci-fi tratta dal romanzo di Frank Herbert.', 'avventura', 'Film', 'FALSE'),
	(1, 'Dune 2', NULL, '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'avventura', 'Film', 'FALSE'),
	(2, 'I goonies', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'avventura', 'Film', 'FALSE'),
	(3, 'Indiana jones 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'avventura', 'Film', 'FALSE'),
	(4, 'Il buono il brutto e il cattivo', 'Il Buono, il Brutto, il Cattivo è un film western del 1966 diretto da Sergio Leone, con Clint Eastwood, Lee Van Cliff e Eli Wallach.\r\nLa storia è ambientata nella seconda metà del 1800, durante la guerra di secessione americana; tre uomini senza scrupoli e regole morali vivono ai margini della società e della legge: Tuco, il Brutto (Eli Wallach), Joe, il Buono (Clint Eastwood) e Sentenza, il Cattivo (Lee van Cliff).\r\nTuco è un bandito e viene catturato da un cacciatore di taglie, Joe, che prima lo consegna alle autorità e poi lo salva dall\'esecuzione; i due si mettono d\'accordo così per ripetere la truffa e intascare la taglia, ma il Buono viene meno al patto e abbandona il Brutto nel deserto, che organizza così la sua vendetta.\r\nNel frattempo Sentenza è da tempo sulle tracce di una grande quantità d\'oro nascosta dal temibile Bill Carson al sicuro dentro una tomba. Per uno scherzo del destino, però, è il Brutto a scoprire dove si trova: quando è sulle tracce del Buono per freddarlo nel deserto, infatti, incontra Carson moribondo, che gli rivela l\'ubicazione di duecentomila dollari; ma mentre si allontana per prendergli dell\'acqua, si avvicina il Buono che scopre il nome della tomba in cui sono sepolti, prima che Carson muoia. Così i tre uomini, senza nessuna reciproca fiducia e accomunati solo dal risentimento, sono costretti loro malgrado a mettersi insieme sulle tracce del bottino, spinti dalla necessità e legati da un destino beffardo, sorvegliandosi l\'un l\'altro giorno e notte. Affronteranno ostacoli e peripezie per arrivare al cimitero, dove si sfideranno in un ultimo scontro risolutivo per impossessarsi del tesoro.', '1966', 175, 'Sergio Leone', 'inglese,italiano,spagnolo', 'Italia Spagna', 'https://www.youtube.com/watch?v=WBXWxuOc2dE', 'Produzioni Europee Associate, United Artists', 4, 'Il Buono, il Brutto, il Cattivo è un film western del 1966 diretto da Sergio Leone', 'western', 'Film', 'FALSE'),
	(5, 'La La Land', 'La La Land è un film del 2016 diretto da Damien Chazelle.\r\nIl film è realizzato come musical contemporaneo, dove Los Angeles, la terra dei sogni, fa da sfondo all\'intensa storia d\'amore tra un\'aspirante attrice e un musicista jazz.\r\nMia (Emma Stone) è una ragazza determinata a inseguire il proprio sogno di diventare attrice e tra un provino e un altro serve caffè in un bar all\'interno degli Hollywood Studios, mentre Sebastian (Ryan Gosling) è un bravo jazzista che, nell\'attesa di aprirsi un locale tutto suo, si guadagna da vivere suonando nei piano bar anche se ciò lo rende profondamente insoddisfatto.\r\nDopo l\'ennesimo provino andato male, Mia viene convinta dalle sue amiche ad andare a una festa sulle colline di Hollywood e mentre rientra a casa a piedi, Mia è attirata da una musica proveniente da un locale, in cui decide di entrare. Lì si imbatterà per la prima volta in Sebastian, che proprio in quel momento viene licenziato dal proprietario del ristorante, colpevole di aver improvvisato musica jazz al pianoforte anziché attenersi alla scaletta di classici natalizi per i clienti.\r\nSuccessivamente, dopo una serie di incontri casuali, tra Mia e Sebastian si crea un rapporto d\'amicizia fatto di scontri e incontri, fino a quando tra i due esploderà una travolgente passione alimentata dalla condivisione di aspirazioni comuni, da sogni intrecciati e da una complicità fatta di incoraggiamento e sostegno reciproco.\r\nMa proprio quando inizieranno ad arrivare i primi successi, i due si dovranno confrontare con importanti scelte e con le loro ambizioni professionali, le quali rimetteranno in discussione il loro rapporto. La minaccia più grande sarà rappresentata infatti dalla loro volontà di inseguire i rispettivi sogni. Tra musiche emozionanti e balletti travolgenti, Mia e Sebastian proveranno a cercare i compromessi necessari per raggiungere i propri sogni senza dover rinunciare alla loro intensa e burrascosa storia d\'amore.', '2016', 128, 'Damien Chazelle', 'inglese', 'USA', 'https://www.youtube.com/watch?v=YbtJyxjXpMI', 'Summit Entertainment, Black Label Media, Gilbert F', 3.9, 'La La Land è un musical contemporaneo del 2016 diretto da Damien Chazelle.\r\n                  Emma stone nel 2017 vinse l\'oscar per la miglior attrice protagonista.', 'romantico', 'Film', 'FALSE'),
	(6, 'Il silenzio degli innocenti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'horror', 'Film', 'TRUE'),
	(7, 'C era una volta ad hollywood', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'drammatico', 'Film', 'TRUE'),
	(8, 'Forrest gump', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'commedia', 'Film', 'TRUE'),
	(9, 'Breaking bad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'azione', 'Serie', 'TRUE'),
	(10, 'Better call saul', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'drammatico', 'Serie', 'TRUE'),
	(11, 'fight club', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'azione', 'Film', 'TRUE'),
	(12, 'the Iron claw', NULL, '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'drammatico', 'Film', 'TRUE'),
	(13, 'il gande lebowski', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'commedia', 'Film', 'TRUE'),
	(14, 'joker', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'drammatico', 'Film', 'TRUE'),
	(15, 'oppenheimer', NULL, '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'drammatico', 'Film', 'TRUE'),
	(16, 'bullet train', NULL, '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'azione', 'Film', 'TRUE'),
	(17, 'mad max', NULL, '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'azione', 'Film', 'TRUE'),
	(18, 'Hazbin Hotel', 'Hazbin Hotel is an American adult animated musical comedy television series created by Vivienne "VivziePop" Medrano.The series revolves around Charlie Morningstar, princess of Hell, on her quest to find a way for sinners to be "rehabilitated" and allowed into Heaven, via her "Hazbin Hotel", as an alternative to Heaven\'s annual "Extermination" of souls due to Hell\'s overpopulation. The series is produced by SpindleHorse Toons in collaboration with A24, Amazon Studios, and the animation studio Bento Box Entertainment.\r\n\r\nThe pilot episode, released on YouTube on October 28, 2019, was made entirely by freelance animators and was mainly financed by Medrano\'s Patreon followers. The first season premiered on Amazon Prime Video on January 18, 2024, with its first episode also released on YouTube on that same day for a limited release. A second season is confirmed to be in production. It has received generally positive reviews from critics.\r\n\r\nThe popularity and success of the pilot allowed Medrano to create a spin-off series called Helluva Boss, which premiered on October 31, 2020. The series features a different cast of characters within the same in-universe setting.\r\n\r\nAs of January 2024, Hazbin Hotel was the largest global debut for a new animated series on Prime Video. In February 2024, the pilot episode surpassed 100 million views on YouTube.', '2024', 29, 'Vivienne Medrano', 'inglese', 'Fantasy', NULL, 'SpindleHorse Toons\r\nBento Box Entertainment\r\nA24\r\n', 3, 'Due to overpopulation, Hell goes through an annual purge where angels, led by Adam, descend from Heaven and kill sinners.', 'animazione', 'Serie', 'TRUE'),
	(19, 'I griffin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'animazione', 'Serie', 'FALSE'),
	(20, 'the mandalorian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'azione', 'Serie', 'TRUE'),
	(21, 'atlanta', NULL, '2016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'drammatico', 'Serie', 'TRUE'),
	(22, 'the whale', NULL, '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'horror', 'Film', 'TRUE'),
	(23, 'saltburn', NULL, '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'romantico', 'Film', 'TRUE'),
	(24, 'The Beekeeper', 'Retired school teacher Eloise Parker lives alone but has a tenant in her barn, Adam Clay, living a quiet life as a beekeeper. Eloise falls for a phishing scam that bankrupts her and steals $2 million from a charity fund she manages. Devastated, she commits suicide. Adam discovers her body and is immediately arrested by FBI agent Verona Parker, Eloise\'s daughter. After Adam is cleared and released, Verona tells him that the FBI was aware of the group that scammed her mother but they are difficult to track. Seeking justice for Eloise, Adam contacts the Beekeepers, a mysterious group, to find those responsible.\r\n\r\nAdam receives an address for a call center run by Mickey Garnett. Adam scares off the employees and burns down the building. Mickey informs his boss, technology executive Derek Danforth, who sends Mickey to kill Adam. A violent confrontation ensues where Adam kills Mickey\'s men and severs Mickey\'s right hand fingers with a bandsaw. Mickey calls Derek while stopped at a bridge, informing him that Adam is a Beekeeper. Having followed Mickey, Adam drags him off the bridge with his truck to his death and warns Derek that he is coming after him.\r\n\r\nDerek informs former CIA director Wallace Westwyld, who is running security for Danforth Enterprises at the request of Derek\'s mother, Jessica, about Adam. Concerned, Wallace contacts current CIA Director Harward in hopes of stopping Adam. Harward contacts the Beekeepers and learns that Adam has retired from the organization. After Adam kills the current Beekeeper, Anisette, sent to kill him, the Beekeepers declare neutrality. Verona and her partner, Matt Wiley, anticipate that Adam will deliver an assault on the Nine Star United Center in Boston, which oversees all of Derek\'s global scam call centers. After informing FBI Deputy Director Prigg that Adam is a Beekeeper, Verona and Matt receive all the support they ask for.', '2024', 105, 'David Ayer', 'inglese', 'USA', NULL, 'Amazon MGM Studios', 2.6, 'La spietata vendetta di un uomo diventa di portata nazionale dopo che si scopre che è un ex agente di una potente organizzazione clandestina conosciuta come Beekeepers.', 'azione', 'Film', 'TRUE'),
	(25, 'the bear', NULL, '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'drammatico', 'Serie', 'FALSE');

-- Dump della struttura di tabella film-real.preferiti
CREATE TABLE IF NOT EXISTS `preferiti` (
  `id_utente` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  PRIMARY KEY (`id_utente`,`id_film`),
  KEY `FK__film` (`id_film`),
  CONSTRAINT `FK__film` FOREIGN KEY (`id_film`) REFERENCES `film` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK__utenti` FOREIGN KEY (`id_utente`) REFERENCES `utenti` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella film-real.preferiti: ~0 rows (circa)

-- Dump della struttura di tabella film-real.utenti
CREATE TABLE IF NOT EXISTS `utenti` (
  `nome` varchar(50) DEFAULT NULL,
  `cognome` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `conferma` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nazionalità` varchar(50) DEFAULT NULL,
  `età` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella film-real.utenti: ~0 rows (circa)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
