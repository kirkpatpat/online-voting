-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 04:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `CandidateID` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `MidInit` char(1) DEFAULT NULL,
  `Position` varchar(14) NOT NULL,
  `Party` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`CandidateID`, `FirstName`, `LastName`, `MidInit`, `Position`, `Party`) VALUES
(1, 'ERNIE', 'ABELLA', NULL, 'president', 'IND'),
(2, 'LEODY', 'DE GUZMAN', NULL, 'president', 'PLM'),
(3, 'ISKO', 'DOMAGOSO', 'M', 'president', 'AKSYON'),
(4, 'NORBERTO', 'GONZALES', NULL, 'president', 'PDSP'),
(5, 'PING', 'LACSON', NULL, 'president', 'PDR'),
(6, 'FAISAL', 'MANGONDATO', NULL, 'president', 'KTPNAN'),
(7, 'MARCOS', 'BONGBONG', NULL, 'president', 'PFP'),
(8, 'JOSE', 'MONTEMAYOR', NULL, 'president', 'PROMDI'),
(9, 'MANNY', 'PACQUIAO', NULL, 'president', 'PROMDI'),
(10, 'LENI', 'ROBREDO', NULL, 'president', 'IND'),
(11, 'LITO', 'ATIENZA', NULL, 'vice president', 'PROMDI'),
(12, 'WALDEN', 'BELLO', NULL, 'vice president', 'PLM'),
(13, 'RIZALITO', 'DAVID', NULL, 'vice president', 'DPP'),
(14, 'SARA', 'DUTERTE', NULL, 'vice president', 'LAKAS'),
(15, 'MANNY SD', 'LOPEZ', NULL, 'vice president', 'WPP'),
(16, 'DOC WILLIE', 'ONG', NULL, 'vice president', 'AKSYON'),
(17, 'KIKO', 'PANGILINAN', NULL, 'vice president', 'LP'),
(18, 'CARLOS', 'SERAPIO', NULL, 'vice president', 'KTPNAN'),
(19, 'VICENTE TITO', 'SOTTO', NULL, 'vice president', 'NPC'),
(20, 'ABNER', 'AFUANG', NULL, 'senator', 'IND'),
(21, 'IBRAHIM', 'ALBANI', NULL, 'senator', 'WPP'),
(22, 'MANG JESS', 'ARRANZA', NULL, 'senator', 'IND'),
(23, 'TEDDY', 'BAGUILAT', NULL, 'senator', 'LP'),
(24, 'AGNES', 'BAILEN', NULL, 'senator', 'IND'),
(25, 'CARL', 'BALITA', NULL, 'senator', 'AKSYON'),
(26, 'LUTZ', 'BARBO', NULL, 'senator', 'PDDLBN'),
(27, 'HERBERT BISTEK', 'BAUTISTA', NULL, 'senator', 'NPC'),
(28, 'GRECO', 'BELGICA', NULL, 'senator', 'PDDS'),
(29, 'SILVERSTRE', 'BELLO', NULL, 'senator', 'PDPLBN'),
(30, 'JOJO', 'BINAY', NULL, 'senator', 'UNA'),
(31, 'ROY', 'CABONEGRO', NULL, 'senator', 'PLM'),
(32, 'BRO JOHN', 'CASTRICIONES', NULL, 'senator', 'PDPLBN'),
(33, 'ALAN PETER', 'CAYETANO', NULL, 'senator', 'IND'),
(34, 'MELCHOR', 'CHAVEZ', NULL, 'senator', 'WPP'),
(35, 'NERI', 'COLMENARES', NULL, 'senator', 'MKBYN'),
(36, 'DAVID', 'D\'ANGELO', NULL, 'senator', 'PLM'),
(37, 'LEILA', 'DE LIMA', NULL, 'senator', 'LP'),
(38, 'MONSOUR', 'DEL ROSARIO', NULL, 'senator', 'PDR'),
(39, 'PING', 'DIAZ', NULL, 'senator', 'PPP'),
(40, 'CHEL', 'DIOKNO', NULL, 'senator', 'KANP'),
(41, 'JV', 'EJERCITO', 'E', 'senator', 'NPC'),
(42, 'GUILLERMO', 'ELEAZAR', NULL, 'senator', 'PDR'),
(43, 'ERNIE', 'ERE&#209;O', NULL, 'senator', 'PM'),
(44, 'CHIZ', 'ESCUDERO', NULL, 'senator', 'NPC'),
(45, 'LUKE', 'ESPIRITU', NULL, 'senator', 'PLM'),
(46, 'JINGGOY', 'ESTRADA', NULL, 'senator', 'PMP'),
(47, 'BAL FALCON', 'FALCONE', NULL, 'senator', 'DPP'),
(48, 'LARRY', 'GADON', NULL, 'senator', 'KBL'),
(49, 'WIN', 'GATCHALIAN', NULL, 'senator', 'NPC'),
(50, 'DICK', 'GORDON', NULL, 'senator', 'BVNP'),
(51, 'SAMIRA', 'GUTOC', NULL, 'senator', 'AKSYON'),
(52, 'GRINGO', 'HONASAN', NULL, 'senator', 'IND'),
(53, 'HONTIVEROS', 'RISA', NULL, 'senator', 'AKBAYAN'),
(54, 'RJ', 'JAVELLANA', NULL, 'senator', 'IND'),
(55, 'NUR-MAHAL', 'KIRAM', NULL, 'senator', 'IND'),
(56, 'ELMER', 'LABOG', NULL, 'senator', 'MKBYN'),
(57, 'ALEX', 'LACSON', NULL, 'senator', 'KP'),
(58, 'REY', 'LANGIT', NULL, 'senator', 'PDPLBN'),
(59, 'LOREN', 'LEGARDA', NULL, 'senator', 'NPC'),
(60, 'ARIEL', 'LIM', NULL, 'senator', 'IND'),
(61, 'EMILY', 'MALLILLIN', NULL, 'senator', 'PPM'),
(62, 'RODANTE', 'MARCOLETA', NULL, 'senator', 'PDPLBN'),
(63, 'FRANCIS LEO', 'MARCOS', NULL, 'senator', 'IND'),
(64, 'SONNY', 'MATULA', NULL, 'senator', 'IND'),
(65, 'MARIETA', 'MINDALANO-ADAM', NULL, 'senator', 'KTPNAN'),
(66, 'LEO', 'OLARTE', NULL, 'senator', 'BIGKIS'),
(67, 'MINGUITA', 'PADILLA', NULL, 'senator', 'PDR'),
(68, 'ROBIN', 'PADILLA', NULL, 'senator', 'PDPLBN'),
(69, 'SAL PANALO', 'PANELO', NULL, 'senator', 'PDPLBN'),
(70, 'ASTRA', 'PIMENTEL', NULL, 'senator', 'PDPLBN'),
(71, 'MANNY', 'PI&#209;OL', NULL, 'senator', 'NPC'),
(72, 'WILLIE', 'RICABLANCA', NULL, 'senator', 'PM'),
(73, 'HARRY SPOX', 'ROQUE', NULL, 'senator', 'PRP'),
(74, 'SAHIDULLA', 'LADY ANNE', NULL, 'senator', 'PDDS'),
(75, 'JOPET', 'SISON', NULL, 'senator', 'AKSYON'),
(76, 'GIBO', 'TEODORO', NULL, 'senator', 'PRP'),
(77, 'ANTONIO', 'TRILLANES', NULL, 'senator', 'LP'),
(78, 'RAFFY', 'TULFO', NULL, 'senator', 'IND'),
(79, 'REY', 'VALEROS', NULL, 'senator', 'IND'),
(80, 'JOEL TESDAMAN', 'VILLANUEVA', NULL, 'senator', 'NP'),
(81, 'MARK', 'VILLAR', NULL, 'senator', 'NP'),
(82, 'CARMEN', 'ZUBIAGA', NULL, 'senator', 'IND'),
(83, 'MIGZ', 'ZUBIRI', NULL, 'senator', 'IND');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `VoterID` int(11) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Barangay` varchar(255) NOT NULL,
  `Street` varchar(255) NOT NULL,
  `yearsCity` int(11) NOT NULL,
  `monthsCity` int(11) NOT NULL,
  `yearsPH` int(11) NOT NULL,
  `illiterate` tinyint(1) DEFAULT NULL,
  `pwd` tinyint(1) DEFAULT NULL,
  `indigenous` tinyint(1) DEFAULT NULL,
  `AssistedBy` varchar(255) DEFAULT NULL,
  `Gender` varchar(20) NOT NULL,
  `Birthday` date NOT NULL,
  `BirthCity` varchar(255) NOT NULL,
  `BirthProvince` varchar(255) NOT NULL,
  `CivilStatus` varchar(20) NOT NULL,
  `Spouse` varchar(255) DEFAULT NULL,
  `Usertype` varchar(255) NOT NULL,
  `VoteStatus` varchar(255) NOT NULL DEFAULT 'not voted',
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `VoterID` int(11) NOT NULL,
  `CandidateID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`CandidateID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`VoterID`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`VoterID`,`CandidateID`),
  ADD KEY `VoterID` (`VoterID`),
  ADD KEY `CandidateID` (`CandidateID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `CandidateID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `VoterID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1009;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `vote_ibfk_1` FOREIGN KEY (`VoterID`) REFERENCES `user` (`VoterID`),
  ADD CONSTRAINT `vote_ibfk_2` FOREIGN KEY (`CandidateID`) REFERENCES `candidate` (`CandidateID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
