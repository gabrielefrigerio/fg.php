CREATE TABLE IF NOT EXISTS `contatti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `commento` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `film` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titolo` varchar(100) DEFAULT NULL,
  `descrizione` text DEFAULT NULL,
  `data` date DEFAULT NULL,
  `durata` int(11) DEFAULT NULL,
  `regista` varchar(50) DEFAULT NULL,
  `lingua` set('inglese','italiano','francese','spagnolo') DEFAULT NULL,
  `settings` varchar(50) DEFAULT NULL,
  `trailer` varchar(50) DEFAULT NULL,
  `casa_produttrice` varchar(50) DEFAULT NULL,
  `voto` float DEFAULT NULL,
  `descr_breve` text DEFAULT NULL,
  `genere` enum('film_commedia','film_davventura','film_dazione','film_drammatici','film_horror','film_western','film_romantici') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE IF NOT EXISTS `utenti` (
  `nome` varchar(50) DEFAULT NULL,
  `cognome` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

