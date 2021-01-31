-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2021 at 09:13 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `filmovi`
--

DROP TABLE IF EXISTS `filmovi`;
CREATE TABLE IF NOT EXISTS `filmovi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `naslov` varchar(100) NOT NULL,
  `opis` text NOT NULL,
  `žanr` varchar(255) NOT NULL,
  `scenarista` varchar(255) NOT NULL,
  `režiser` varchar(255) NOT NULL,
  `producentskaKuća` varchar(255) NOT NULL,
  `listaGlumaca` varchar(255) NOT NULL,
  `godinaIzdanja` int NOT NULL,
  `slika` varchar(255) NOT NULL,
  `trajanje` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `filmovi`
--

INSERT INTO `filmovi` (`id`, `naslov`, `opis`, `žanr`, `scenarista`, `režiser`, `producentskaKuća`, `listaGlumaca`, `godinaIzdanja`, `slika`, `trajanje`) VALUES
(1, 'Titanik', 'Titanik je američki film iz 1997. godine. Tema filma je romantična priča o bogatoj devojci i siromašnom momku koji se susreću i zaljubljuju na „nepotopivom brodu“, dok posada broda žuri da obori dotadašnji rekord u putovanju preko Atlantika (na putu im stoji „samo“ santa leda).', 'Drama, Romantični', 'James Cameron', 'James Cameron', '20th Century Fox', 'Leonardo DiCaprio, Kate Winslet , Billy Zane', 1997, 'titanik.jpg', 94),
(2, 'Beležnica', 'Godine 1940-te mlada žena dolazi u gradić Sibruk, mesto na obali u Severnoj Karolini, da provede leto sa svojom porodicom. Još uvek tinejdžerka, Eli Hamilton na karnevalu upoznaje lokalnog momka Nou Kalouna. Noa nekako oseća da on i Eli treba da budu zajedno, iako on radi u mlinu i pripada nižem staležu. Tokom jednog strasnog i opuštenog leta na jugu oni se zaljubljuju jedno u drugo.\r\nPočinje Drugi svetski rat i njih dvoje moraju da se razdvoje. Međutim, oboje ih progone uspomene. Kada se Noa vratio iz rata, Eli je nestala iz njegovog života, ali ne i iz srca. Eli se vratila u Sibruk, gde su se prvi put sreli i zavoleli. Međutim, sada je ona verena i treba da se uda za Lona, vojnika koga je upoznala dok je radila kao volonterka u bolnici.', 'Drama, Romantični', 'Jeremy Leven, Jan Sardi, Nicholas Sparks', 'Nick Cassavetes', 'New Line Cinema, Gran Via, Avery Pix', 'Gena Rowlands, James Garner, Rachel McAdams', 2004, 'beleznica.jpg', 123),
(3, 'Igre gladi', 'Snimljen prema istoimenom bestselleru, filmsku senzaciju Igre gladi nazivaju novim Sumrakom!\r\n\r\nU bliskoj budućnosti Sjedinjene Američke Države su propale, izmučene sušom, požarima, glađu i ratom. Iz pepela se uzdigao Panem, država podijeljena na vladajući Kapitol i dvanaest okruga odakle se svake godine nasumično biraju po dječak i djevojčica koji se uživo na televizijskom prijenosu bore do smrti.', 'Akcioni, Drama', 'Gary Ross', '	\r\nGary Ross', '	\r\nLions Gate Entertainment, Lionsgate Films, Color F', ' Jennifer Lawrence, Woody Harrelson, Liam Hemsworth, Elizabeth Banks, Josh Hutcherson', 2012, 'igreGladi.jfif', 142),
(4, 'Trka života', 'Spektakularna ekranizacija nemilosrdnog rivalstva između Džejmsa Hanta i Nikija Laude. Smešten u seksi i glamurozno zlatno doba Formule 1, ovaj film predstavlja neverovatnu priču o rivalstvu zgodnog engleskog plejboja Hanta i austrijskog perfekcioniste Laude. Film nas, osim na staze, vodi i u privatne živote i zakulisna događanja na trkama. Prvenstveno prikazuje dva vozača, koji se dovode do granica fizičke i psihičke izdržljivosti u trci u kojoj nema prečice, do pobede i u kojoj jedna greška znači smrt.', 'Akcioni, Drama', 'Peter Morgan', 'Ron Howard', '/', ' Daniel Brühl, Chris Hemsworth, Olivia Wilde, Alexandra Maria Lara, Pierfrancesco Favino, David Calder, Natalie Dormer, Stephen Mangan, Christian McKay, Alistair Petrie, Julian Rhind-Tutt, Colin Stinton, Jamie de Courcey', 2013, 'trkaZivota.jfif', 123),
(6, 'Posle bala', 'Nakon što se mladi modni dizajner naleti na svoju korumpiranu maćehu i polusestre, ona se preruši da pomogne spasiti porodični posao za svog oca.', 'Komedija', 'Jason Sherman, Kate Melville', 'Sean Garrity', 'Myriad Pictures\r\nPacific Northwest Pictures\r\nMartinelli Films\r\nDon Carmody Productions\r\nJane Silverstone-Segal Productions\r\nTelefilm Canada', 'Portia Doubleday\r\nMarc-André Grondin\r\nChris Noth\r\nLauren Holly', 2015, 'poslePlesa.jpg', 101),
(5, 'Mali dečak', 'Osmogodišnji dečak spreman je da učini sve što je potrebno kako bi okončao Drugi svetski rat kako bi oca mogao dovesti kući. Priča otkriva neopisivu ljubav koju otac ima prema svom dečaku i ljubav koju sin ima prema ocu.', 'Komedija, Drama', 'Alejandro Monteverde\r\nPepe Portillo', 'Leo Severino\r\nEduardo Verástegui\r\nAlejandro Monteverde', 'Metanoia Films\r\nSanta Fé Films', '	Jakob Salvati\r\nEmily Watson\r\nDavid Henrie\r\nCary-Hiroyuki Tagawa\r\nMichael Rapaport\r\nEduardo Verástegui\r\nBen Chaplin\r\nTom Wilkinson', 2015, 'maliDecak.jpg', 106),
(9, 'Tajna broja sedam', 'U svetu u kome su porodice ograničene na jedno dete zbog prenaseljenosti, set identičnih septupleta mora izbegavati da ih vlada dugo uspava i opasne borbe dok istražuju nestanak jednog od svojih.', 'Misterija,Akcioni', ' Max Botkin, Kerry Williamson', 'Tommy Wirkola', '/', 'Noomi Rapace, Glenn Close, Willem Dafoe', 2017, 'sedam.jpg', 123),
(7, '	\r\nIz Pariza s ljubavlju', 'Lični asistent američkog ambasadora u Parizu, Džejms Ris, živi zavidnim životom u Parizu i ima prelepu devojku, Francuskinju. Ipak, njegova prava strast je njegov drugi posao nižeg operativca u CIA.', 'Triler, Akcioni', 'Luc Besson\r\nAdi Hasak', 'Pierre Morel', '/', 'John Travolta, John Travolta, Kasia Smutniak', 2010, 'izPariza.jfif', 92),
(8, 'Profesionalac', 'Velika francuska zvezda Žan Pol Belmondo kao tajni agent Žos Beamont ima zadatak - atentat na africkog diktatora. Francuska vlada, medjutim, hapsi Beamonta i osudjuje ga na doživotan težak fizicki rad. Agent uspeva da pobegne i vraca se u Francusku,...', 'Triler, Akcioni', 'Boaz Yakin', 'Boaz Yakin', '/', 'Jean-Paul Belmondo, Jean Desailly, Cyrielle Clair', 2012, 'profesionalac.jfif\r\n', 94);

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

DROP TABLE IF EXISTS `korisnici`;
CREATE TABLE IF NOT EXISTS `korisnici` (
  `id` int NOT NULL AUTO_INCREMENT,
  `korisnickoIme` varchar(30) NOT NULL,
  `lozinka` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ime` varchar(30) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
