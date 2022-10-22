SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `departement`;
CREATE TABLE IF NOT EXISTS `departement` (
  `idepartement` int NOT NULL AUTO_INCREMENT,
  `nomdepartement` varchar(255) NOT NULL,
  PRIMARY KEY (`idepartement`)
) ;

INSERT INTO `departement` (`idepartement`, `nomdepartement`) VALUES
(1, 'MemberCom'),
(0, 'Facebook');

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `msg_id` int NOT NULL AUTO_INCREMENT,
  `incoming_msg_id` int NOT NULL,
  `outgoing_msg_id` int NOT NULL,
  `msg` varchar(1000) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ;


DROP TABLE IF EXISTS `taches`;
CREATE TABLE IF NOT EXISTS `taches` (
  `idTache` int NOT NULL AUTO_INCREMENT,
  `idPerson` int DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `dateD` date NOT NULL,
  `dateF` date NOT NULL,
  `idepartement` int NOT NULL,
  PRIMARY KEY (`idTache`)
) ;


DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `unique_id` int NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `idepartement` int NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `idepartement` (`idepartement`)
);

