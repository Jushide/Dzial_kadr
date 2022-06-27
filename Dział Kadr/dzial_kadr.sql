-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 05 Cze 2022, 12:19
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `dzial_kadr`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--
CREATE DATABASE dzial_kadr;

CREATE TABLE `pracownicy` (
  `Id` int(11) NOT NULL,
  `Imie` varchar(20) NOT NULL,
  `Nazwisko` varchar(30) NOT NULL,
  `Nr_telefonu` varchar(9) NOT NULL,
  `Data_zatrudnienia` date NOT NULL,
  `Stanowisko` varchar(30) NOT NULL,
  `Dzial` varchar(10) NOT NULL,
  `Pensja` float DEFAULT NULL,
  `Premia` float DEFAULT NULL,
  `Prowizje` float DEFAULT NULL,
  `Ubezpieczenie` char(3) DEFAULT NULL CHECK (`Ubezpieczenie` in ('Tak','Nie')),
  `Dodatek_stazowy` char(3) DEFAULT NULL CHECK (`Dodatek_stazowy` in ('Tak','Nie')),
  `Czy_zatrudniony` char(3) NOT NULL DEFAULT 'Tak',
  `Czy_kandydat` char(3) NOT NULL DEFAULT 'Nie'
) Engine=InnoDB DEFAULT CHARACTER SET 'utf8' COLLATE 'utf8_polish_ci';

--
-- Zrzut danych tabeli `pracownicy`
--

INSERT INTO `pracownicy` (`Id`, `Imie`, `Nazwisko`, `Nr_telefonu`, `Data_zatrudnienia`, `Stanowisko`, `Dzial`, `Pensja`, `Premia`, `Prowizje`, `Ubezpieczenie`, `Dodatek_stazowy`, `Czy_zatrudniony`, `Czy_kandydat`) VALUES
(1, 'Piotr', 'Nowacki', '123456789', '2022-05-12', 'Uczeń', 'IT', 50, 100, 100, 'Tak', 'Tak', 'Tak', 'Nie'),
(2, 'Michał', 'Nowak', '123654789', '2022-05-11', 'Uczeń', 'IT', 50, 0, 100, 'Tak', 'Tak', 'Tak', 'Nie'),
(5, 'Maciej', 'Nowak', '109', '2022-05-11', 'Uczeń', 'IT', 5000, 0, 100, 'Tak', 'Nie', 'Tak', 'Nie'),
(7, 'Michał', 'Nowak', '1091', '2022-05-11', 'Uczeń', 'IT', 50, 0, 100, 'Tak', 'Tak', 'Nie', 'Nie'),
(8, 'Michał', 'Nowak', '10911', '2022-05-11', 'Uczeń', 'IT', 50, 0, 100, 'Tak', 'Tak', 'Nie', 'Nie'),
(10, 'Michał', 'Nowak', '109321', '2022-05-11', 'Uczeń', 'IT', 50, 0, 100, 'Tak', 'Tak', 'Nie', 'Nie'),
(12, 'Michał', 'Nowak', '109111123', '2022-05-11', 'Uczeń', 'IT', 50, 0, 100, 'Tak', 'Tak', 'Nie', 'Nie'),
(13, 'Michał', 'Nowak', '109111234', '2022-05-11', 'Uczeń', 'IT', 50, 0, 100, 'Tak', 'Tak', 'Nie', 'Nie'),
(14, 'Adam', 'Nowak', '690', '2022-05-11', 'Uczeń', 'IT', 50000, 10, 100, 'Tak', 'Nie', 'Tak', 'Nie'),
(15, 'Michał', 'Nowak', '126724', '2022-05-11', 'Uczeń', 'IT', 50, 0, 100, 'Tak', 'Tak', 'Nie', 'Nie'),
(16, 'Michał', 'Nowak', '690132', '2022-06-13', 'Kierownik', 'Kadr', 1600, 0, 0, 'Tak', 'Nie', 'Tak', 'Nie'),
(17, 'Sławek', 'Kowalski', '124532', '2022-06-05', 'Kierownik', 'Kadr', 150, 0, 0, 'Nie', 'Tak', 'Tak', 'Nie'),
(18, 'Piotrek', 'Kowalski', '1245321', '2022-06-05', 'Kierownik', 'Kadr', NULL, NULL, NULL, NULL, NULL, 'Nie', 'Tak'),
(19, 'Jan', 'Adamowski', '109562', '2022-06-05', 'Kierownik', 'Kadr', 2800, 0, 0, 'Tak', 'Nie', 'Tak', 'Nie'),
(21, 'Karol', 'Krawczyk', '573', '2022-06-05', 'Dyrektor', 'Zarząd', 2800, 100, 0, 'Tak', 'Nie', 'Nie', 'Tak'),
(22, 'Tadeusz', 'Norek', '7325', '2022-06-05', 'Kierownik', 'Zarząd', 16500, 500, 0, 'Tak', 'Nie', 'Nie', 'Tak');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Nr_telefonu` (`Nr_telefonu`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
