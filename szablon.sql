-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 28 Lis 2010, 19:00
-- Wersja serwera: 5.1.41
-- Wersja PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `dupa`
--
CREATE DATABASE `dupa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dupa`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `wpisy`
--

CREATE TABLE IF NOT EXISTS `wpisy` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nazwa` text NOT NULL,
  `wpis` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Zrzut danych tabeli `wpisy`
--

INSERT INTO `wpisy` (`id`, `nazwa`, `wpis`) VALUES
(1, 'Robert', 'To ja'),
(2, 'sds', 'ffds');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
