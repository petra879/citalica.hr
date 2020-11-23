-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 08:33 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citalica`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `size`, `downloads`) VALUES
(18, 'Lauren Kate - 1.Pali andjeo.pdf', 1700167, 0),
(19, 'Lauren Kate - 2. Kusnja.pdf', 1597873, 0),
(20, 'Lauren Kate - 3.Potraga.pdf', 1801125, 0),
(21, 'Kendall Ryan - 1. Prljave divne laÅ¾i - 1.dio.pdf', 696215, 0),
(22, 'Kendall Ryan - 2. Prljava divna ljubav - 2.dio.pdf', 932656, 0),
(23, 'Kendall Ryan - 3. Prljava divna poÅ¾uda - 3dio.pdf', 862298, 0),
(24, 'Julie-James-VjenÄanje-je-krivo-za-sve.pdf', 1429884, 0),
(25, 'Julie James - Zakon privlaÄnosti.pdf', 1927704, 0),
(27, 'Julie James - Iznenada jednog ljeta.pdf', 1123435, 0),
(28, 'Kendall Ryan - 1. Prljave divne lazi - 1.dio.pdf', 696215, 0),
(29, 'Kresley Cole - Kad padne noÄ‡ - 2. Nezaustavljivo zlo.pdf', 1499884, 0);

-- --------------------------------------------------------

--
-- Table structure for table `preporuke`
--

CREATE TABLE `preporuke` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `book` text COLLATE utf8_croatian_ci NOT NULL,
  `text` text COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `preporuke`
--

INSERT INTO `preporuke` (`id`, `name`, `book`, `text`) VALUES
(14, 'Petra BenÄek', 'JANET FITCH: BIJELI OLEANDAR', '\"Å½ivot Ä‡e vas stvoriti ili slomiti, odnosno i stvoriti i slomiti. Kad Astridina majka bude strpana u zatvor zbog ubojstva svog bivÅ¡eg ljubavnika, Astrid je smjeÅ¡tena u sirotiÅ¡te u Los Angelesu. To je dovoljno da slomi bilo koga, no suprotno svim oÄekivanjima, mi ÄitajuÄ‡i otkrivamo kako Astrid preÅ¾ivljava oslanjajuÄ‡i se iskljuÄivo na svoju unutraÅ¡nju snagu. Inspirativno, zar ne?\"'),
(15, 'Bojan K.', ' TONI MORRISON: VOLJENA', '\"Uzbudljivi roman velike ameriÄke spisateljice Toni Morrison prati Sethe, osloboÄ‘enu od ropstva ali nikad zapravo sposobnu da odagna ruÅ¾na sjeÄ‡anja. RijeÄ je o beskompromisnom pogledu u uÅ¾ase ropstva, no u kojem Ä‡ete, zaÄuÄ‘ujuÄ‡e, pronaÄ‡i i nadu.\"'),
(16, 'Alis MariÄ‡', 'ZORAN DRVENKAR: SORRY', '\"Ovo je definitivno najÄudniji i najoriginalniji triler koji sam ikad proÄitala. Kada sam uzela ovu knjigu nisam znala nikoga tko ju je proÄitao, kome god sam je spomenula, nitko nije Äuo za nju.  Koja velika Å¡teta. Jer knjiga â€œSorryâ€ je jedan od najÄitanijih i najprodavanijih njemaÄkih trilera posljednjih godina Å¡to i ne Äudi buduÄ‡i je roman izvanredan. Usudila bih se reÄ‡i da je ovo svojevrstan eksperiment jer na knjigu ove forme u svom dugom ÄitalaÄkom staÅ¾u joÅ¡ nisam naiÅ¡la.\"'),
(17, 'Alis MariÄ‡', 'ELENA FERRANTE: LAÅ½LJIVI Å½IVOT ODRASLIH', '\"UÅ¾ivala sam Äitati  knjigu koja se ne moÅ¾e prestati Äitati. Iskrena, pomalo brutalno direktna Ferrantica razotkriva mnoge obiteljske tajne i pokazuje nam koliko one mogu imati utjecaj na mlado biÄ‡e koje se formira i odrasta u takvim okolnostima.\"'),
(19, 'Danijela Pupovac', 'NORA ROBERTS: ODVAÅ½I SE SANJATI', '\"SluÄajno sam proÄitala ovu knjigu, nikad, ali nikad ne bih dva put pogledala ovaj naslov. Ovu knjigu treba uzeti da se odmoriÅ¡ i odmakneÅ¡ od svakodnevnice, da se zaljubiÅ¡ u likove, da progutaÅ¡ svaku stranicu, da pokuÅ¡avaÅ¡ usporiti Äitanje jer ne Å¾eliÅ¡ da prestane.\"'),
(20, 'Vlatka Å rajbek', 'ANTOINE DE SAINT-EXUPERY: MALI PRINC', 'â€œNedavno samo ga proÄitala po prvi put, pronaÅ¡la sam inspiraciju u jednom online predavanju na kojem sam sluÄajno zavrÅ¡ila. Knjiga koje je vjeÄna inspiracija. I kojoj Ä‡u se sigurno vraÄ‡ati u potrazi za inspiracijom. Ne znam kako je nikada ranije nisam proÄitala no kako kaÅ¾u, doÅ¡la je u pravo vrijeme.â€'),
(21, 'Vlatka Å rajbek', 'DESMOND TUTU: KNJIGA OPRAÅ TANJA', 'â€œTu knjigu trebao bi proÄitati svatko tko smatra da mu je nanesena nepravda, da je povrijeÄ‘en, uvrijeÄ‘en ili da je isto ikad nanio nekome. Inspirativna knjiga koja daje odgovore na najdublja pitanja pojedinca i nakon koje vise neÄ‡ete nikoga i nista percipirati na isti naÄin.â€'),
(22, 'Remi', 'TONI MORRISO: JAZZ', '\"Znate li Å¡to je sinestezija? Ono kad vam se mijeÅ¡aju osjeti â€“ Äitate knjigu i Äujete zvukove, vidite boje ÄitajuÄ‡i crna slova na bijelom papiruâ€¦ Eto, upravo se to dogaÄ‘a pri Äitanju ovog ogromnog romana (ogroman znaÄajem, ne i obimom) koji je nagraÄ‘en Nobelom. Slike su Å¾ive, likovi igraju pred oÄima, ÄitajuÄ‡i o Cityju vidim vrevu na ulicama i miriÅ¡em grad.\"');

-- --------------------------------------------------------

--
-- Table structure for table `topbook`
--

CREATE TABLE `topbook` (
  `id` int(11) NOT NULL,
  `autor` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `book_name` varchar(255) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `topbook`
--

INSERT INTO `topbook` (`id`, `autor`, `book_name`) VALUES
(2, 'Bronja Å½akelj', 'Bijelo se pere na devedeset'),
(3, 'Elena Ferrante', 'LaÅ¾ljivi Å¾ivot odraslih'),
(4, 'Bekim SejranoviÄ‡', 'Nigdje, niotkuda'),
(5, 'Afonso Cruz', 'Ni svi kitovi ne lete'),
(6, 'Etgar Keret', 'Kvar na rubu galaksije'),
(7, 'Margaret Atwood', 'SvjedoÄanstva'),
(8, 'Neil Jordan', 'Utopljeni'),
(9, 'Delphine de Vigan', 'Odanosti'),
(10, 'Ida Hegazi HÃ¸yer', 'Oprosti'),
(11, 'Henrik Ibsen', 'Peer Gynt'),
(12, 'Vigdis Hjorth', 'Nasljedstvo'),
(13, 'Elizabeth Strout', 'Olive, iznova'),
(14, 'Darko Å eparoviÄ‡', 'PristaniÅ¡te'),
(15, 'Zoran PiliÄ‡', 'Svijet prije tebe'),
(16, 'Louise Penny', 'Dugo putovanje kuÄ‡i'),
(17, 'Emma Donoghue', 'Soba'),
(18, 'Ekaterina Sedia', 'Tajna povijest Moskve'),
(19, 'Allison Pataki', 'Sisi - u potrazi za slobodom'),
(20, 'Lynn Shepherd', 'Probodeno srce'),
(21, 'Cathy Marie Buchanan', 'Djevojke sa slika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preporuke`
--
ALTER TABLE `preporuke`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topbook`
--
ALTER TABLE `topbook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `preporuke`
--
ALTER TABLE `preporuke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `topbook`
--
ALTER TABLE `topbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
