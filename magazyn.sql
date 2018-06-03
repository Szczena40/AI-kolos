-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Cze 2018, 22:27
-- Wersja serwera: 10.1.32-MariaDB
-- Wersja PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `magazyn`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `faktury`
--

CREATE TABLE `faktury` (
  `IdFaktury` int(11) NOT NULL,
  `NazwaTowaru` char(100) COLLATE utf8_polish_ci NOT NULL,
  `NumerFaktury` int(11) NOT NULL,
  `Cena` int(11) NOT NULL,
  `IdTowaru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `faktury`
--

INSERT INTO `faktury` (`IdFaktury`, `NazwaTowaru`, `NumerFaktury`, `Cena`, `IdTowaru`) VALUES
(1, '', 0, 4, 4),
(2, 'Zaprawa murarska', 1, 4, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `towar`
--

CREATE TABLE `towar` (
  `IdTowaru` int(11) NOT NULL,
  `NazwaTowaru` text COLLATE utf8_polish_ci NOT NULL,
  `Cena` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `towar`
--

INSERT INTO `towar` (`IdTowaru`, `NazwaTowaru`, `Cena`) VALUES
(1, 'Potężna betoniarka', '1499.00'),
(2, 'Mega buldożer ', '9999.99'),
(3, 'Złoty szpadel', '2000.00'),
(4, 'Zaprawa murarska', '90.00'),
(5, 'Bulbulator', '1499.90'),
(6, 'TwÃ³j stary', '0.00'),
(7, 'TwÃ³j stary', '0.00'),
(8, 'TwÃ³j stary', '0.00'),
(9, 'Betoniarka', '0.00'),
(10, 'Betoniarka', '0.00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `UserName` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `UserPassword` varchar(100) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`UserName`, `UserPassword`) VALUES
('Pracownik', 'amd100'),
('Kierownik', 'amd200');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `faktury`
--
ALTER TABLE `faktury`
  ADD PRIMARY KEY (`IdFaktury`),
  ADD KEY `IdTowaru` (`IdTowaru`),
  ADD KEY `Cena` (`Cena`);

--
-- Indeksy dla tabeli `towar`
--
ALTER TABLE `towar`
  ADD PRIMARY KEY (`IdTowaru`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `faktury`
--
ALTER TABLE `faktury`
  MODIFY `IdFaktury` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `towar`
--
ALTER TABLE `towar`
  MODIFY `IdTowaru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
