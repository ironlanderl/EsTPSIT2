CREATE DATABASE pallamano;
use pallamano;
CREATE TABLE IF NOT EXISTS `atleta` (
  `CF` varchar(16) NOT NULL PRIMARY KEY,
  `nome` varchar(16) NOT NULL,
  `cognome` varchar(16) NOT NULL,
  `numero_maglia` int(11) NOT NULL,
  `data_nascita` date NOT NULL
);
CREATE TABLE IF NOT EXISTS `squadra` (
  `nome` varchar(16) NOT NULL PRIMARY KEY,
  `sede` varchar(16) NOT NULL
);
CREATE TABLE IF NOT EXISTS `contratto` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `atleta` varchar(16) NOT NULL,
  `squadra` varchar(16) NOT NULL,
  `data_inizio` date NOT NULL,
  `data_fine` date NOT NULL,
  FOREIGN KEY (atleta) REFERENCES atleta(CF),
  FOREIGN KEY (squadra) REFERENCES squadra(nome)
);