-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.19-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for crimerecord
CREATE DATABASE IF NOT EXISTS `crimerecord` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `crimerecord`;


-- Dumping structure for table crimerecord.tbl_case
DROP TABLE IF EXISTS `tbl_case`;
CREATE TABLE IF NOT EXISTS `tbl_case` (
  `Casid` int(11) NOT NULL AUTO_INCREMENT,
  `Firnumber` varchar(30) NOT NULL,
  `Crmid` int(11) NOT NULL,
  PRIMARY KEY (`Casid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table crimerecord.tbl_case: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_case` DISABLE KEYS */;
INSERT INTO `tbl_case` (`Casid`, `Firnumber`, `Crmid`) VALUES
	(1, '7843/34', 1),
	(2, '7844/35', 1);
/*!40000 ALTER TABLE `tbl_case` ENABLE KEYS */;


-- Dumping structure for table crimerecord.tbl_chargesheet
DROP TABLE IF EXISTS `tbl_chargesheet`;
CREATE TABLE IF NOT EXISTS `tbl_chargesheet` (
  `Chid` int(11) NOT NULL AUTO_INCREMENT,
  `Firnumber` varchar(30) NOT NULL,
  `Section` int(10) NOT NULL,
  `Nameinvest` varchar(30) NOT NULL,
  `Investigationdetail` varchar(70) NOT NULL,
  `Remark` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Chardate` date NOT NULL,
  PRIMARY KEY (`Chid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table crimerecord.tbl_chargesheet: ~5 rows (approximately)
/*!40000 ALTER TABLE `tbl_chargesheet` DISABLE KEYS */;
INSERT INTO `tbl_chargesheet` (`Chid`, `Firnumber`, `Section`, `Nameinvest`, `Investigationdetail`, `Remark`, `Status`, `Chardate`) VALUES
	(1, '7843/34', 12, '123PC', 'Testing', 'Test', 'Charge Sheet Completed', '2021-05-01'),
	(3, '7843/34', 18, '123PC', 'asas', 'asas', 'Not yet Completed', '2021-06-14'),
	(4, '7843/34', 5, '123PC', 'ewew', 'weew', 'Charge Sheet Completed', '2021-06-14'),
	(5, '7844/35', 6, '123PC', 'sdsd', 'sdsd', 'Charge Sheet Completed', '2021-06-14'),
	(6, '7843/34', 18, '123PC', 'we', 'wewe', 'Charge Sheet Completed', '2021-06-14');
/*!40000 ALTER TABLE `tbl_chargesheet` ENABLE KEYS */;


-- Dumping structure for table crimerecord.tbl_court
DROP TABLE IF EXISTS `tbl_court`;
CREATE TABLE IF NOT EXISTS `tbl_court` (
  `Courtid` int(11) NOT NULL AUTO_INCREMENT,
  `Courtname` varchar(30) NOT NULL,
  PRIMARY KEY (`Courtid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table crimerecord.tbl_court: ~3 rows (approximately)
/*!40000 ALTER TABLE `tbl_court` DISABLE KEYS */;
INSERT INTO `tbl_court` (`Courtid`, `Courtname`) VALUES
	(2, 'District Court'),
	(3, 'Sessions Court'),
	(5, 'Supreme Court');
/*!40000 ALTER TABLE `tbl_court` ENABLE KEYS */;


-- Dumping structure for table crimerecord.tbl_crimecategory
DROP TABLE IF EXISTS `tbl_crimecategory`;
CREATE TABLE IF NOT EXISTS `tbl_crimecategory` (
  `Crimeid` int(10) NOT NULL AUTO_INCREMENT,
  `Categoryname` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  PRIMARY KEY (`Crimeid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table crimerecord.tbl_crimecategory: ~1 rows (approximately)
/*!40000 ALTER TABLE `tbl_crimecategory` DISABLE KEYS */;
INSERT INTO `tbl_crimecategory` (`Crimeid`, `Categoryname`, `Description`) VALUES
	(1, 'Missing Case', 'Test');
/*!40000 ALTER TABLE `tbl_crimecategory` ENABLE KEYS */;


-- Dumping structure for table crimerecord.tbl_criminaldetails
DROP TABLE IF EXISTS `tbl_criminaldetails`;
CREATE TABLE IF NOT EXISTS `tbl_criminaldetails` (
  `Crmid` int(11) NOT NULL AUTO_INCREMENT,
  `Firnumber` varchar(30) NOT NULL,
  `Crimedate` date NOT NULL,
  `Crimetime` varchar(10) NOT NULL,
  `Prison` varchar(30) NOT NULL,
  `Court` varchar(30) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Height` varchar(20) NOT NULL,
  `Weight` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(30) NOT NULL,
  `Country` varchar(30) NOT NULL,
  `Zipcode` int(20) NOT NULL,
  `Photo` varchar(50) NOT NULL,
  PRIMARY KEY (`Crmid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table crimerecord.tbl_criminaldetails: ~1 rows (approximately)
/*!40000 ALTER TABLE `tbl_criminaldetails` DISABLE KEYS */;
INSERT INTO `tbl_criminaldetails` (`Crmid`, `Firnumber`, `Crimedate`, `Crimetime`, `Prison`, `Court`, `Name`, `Height`, `Weight`, `DOB`, `Phone`, `Address`, `City`, `State`, `Country`, `Zipcode`, `Photo`) VALUES
	(1, '7843/34', '2021-05-03', '12:42', '1', '3', 'Anu', '6', '60', '2021-05-14', '14234567894', 'Test', 'Kothamangalam', 'Kerala', 'India', 686691, './Timage/608fa286532385.18049175.jpg');
/*!40000 ALTER TABLE `tbl_criminaldetails` ENABLE KEYS */;


-- Dumping structure for table crimerecord.tbl_fir
DROP TABLE IF EXISTS `tbl_fir`;
CREATE TABLE IF NOT EXISTS `tbl_fir` (
  `Fid` int(11) NOT NULL AUTO_INCREMENT,
  `Firnumber` varchar(30) NOT NULL,
  `Station` varchar(30) NOT NULL,
  `crime` int(10) NOT NULL,
  `Accused` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `parentageapplicant` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Addrs` varchar(50) NOT NULL,
  `Raccused` varchar(30) NOT NULL,
  `Fdate` date NOT NULL,
  `Policeremark` varchar(50) NOT NULL,
  `remarkdate` date NOT NULL,
  PRIMARY KEY (`Fid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table crimerecord.tbl_fir: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_fir` DISABLE KEYS */;
INSERT INTO `tbl_fir` (`Fid`, `Firnumber`, `Station`, `crime`, `Accused`, `Name`, `Gender`, `parentageapplicant`, `Phone`, `Addrs`, `Raccused`, `Fdate`, `Policeremark`, `remarkdate`) VALUES
	(1, '7843/34', '1', 1, 'Anu', 'Anu', 'Male', 'Manu1', '14234567894', 'Test', 'Brother', '2021-05-03', 'Charge Sheet Issued', '2021-05-03'),
	(2, '7844/35', '1', 1, 'Testing', 'Test', 'Male', 'Tes', '1234567890', 'ewewe', 'Brother', '2021-06-14', 'Charge Sheet Issued', '2021-06-14');
/*!40000 ALTER TABLE `tbl_fir` ENABLE KEYS */;


-- Dumping structure for table crimerecord.tbl_police
DROP TABLE IF EXISTS `tbl_police`;
CREATE TABLE IF NOT EXISTS `tbl_police` (
  `PoId` int(11) NOT NULL AUTO_INCREMENT,
  `Station` int(11) NOT NULL,
  `Policid` varchar(30) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  PRIMARY KEY (`PoId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table crimerecord.tbl_police: ~1 rows (approximately)
/*!40000 ALTER TABLE `tbl_police` DISABLE KEYS */;
INSERT INTO `tbl_police` (`PoId`, `Station`, `Policid`, `Name`, `Email`, `Mobile`, `Address`) VALUES
	(1, 1, '123PC', 'test', '123pc@gmail.com', '1234567890', 'test');
/*!40000 ALTER TABLE `tbl_police` ENABLE KEYS */;


-- Dumping structure for table crimerecord.tbl_policestation
DROP TABLE IF EXISTS `tbl_policestation`;
CREATE TABLE IF NOT EXISTS `tbl_policestation` (
  `Pid` int(11) NOT NULL AUTO_INCREMENT,
  `Stationname` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Pass` varchar(20) NOT NULL,
  PRIMARY KEY (`Pid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table crimerecord.tbl_policestation: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_policestation` DISABLE KEYS */;
INSERT INTO `tbl_policestation` (`Pid`, `Stationname`, `Address`, `Email`, `Phone`, `Pass`) VALUES
	(1, 'Kothamangalam', ' Kothamangalam                           ', 'kot@gmail.com', 1234567890, '123'),
	(2, 'Test', 'test', 'manu@gmail.com', 1234567890, 'e10adc3949ba59abbe56');
/*!40000 ALTER TABLE `tbl_policestation` ENABLE KEYS */;


-- Dumping structure for table crimerecord.tbl_prison
DROP TABLE IF EXISTS `tbl_prison`;
CREATE TABLE IF NOT EXISTS `tbl_prison` (
  `Prisonid` int(11) NOT NULL AUTO_INCREMENT,
  `Prison` varchar(50) NOT NULL,
  PRIMARY KEY (`Prisonid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table crimerecord.tbl_prison: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_prison` DISABLE KEYS */;
INSERT INTO `tbl_prison` (`Prisonid`, `Prison`) VALUES
	(1, 'Sub Jail'),
	(3, 'Central Jails');
/*!40000 ALTER TABLE `tbl_prison` ENABLE KEYS */;


-- Dumping structure for table crimerecord.tbl_section
DROP TABLE IF EXISTS `tbl_section`;
CREATE TABLE IF NOT EXISTS `tbl_section` (
  `Sectionid` int(11) NOT NULL AUTO_INCREMENT,
  `Section` varchar(50) NOT NULL,
  `Sdes` varchar(100) NOT NULL,
  PRIMARY KEY (`Sectionid`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table crimerecord.tbl_section: ~34 rows (approximately)
/*!40000 ALTER TABLE `tbl_section` DISABLE KEYS */;
INSERT INTO `tbl_section` (`Sectionid`, `Section`, `Sdes`) VALUES
	(5, 'Section 121A', 'Conspiracy to commit offences punishable'),
	(6, 'Section 122', 'Collecting arms, etc., with intention of waging war against the Government of India'),
	(7, 'Section 123', 'Concealing with intent to facilitate design to wage war'),
	(8, 'Section 124', 'Assaulting President. Governor, etc., with intent to compel or restrain the exercise of any lawful p'),
	(9, 'Section 124A', 'Sedition'),
	(10, 'Sections 125', 'Waging war against any Asiatic power in alliance with the Government of India'),
	(11, 'Sections 126', 'Committing depredation on territories of power at peace with the Government of India'),
	(12, 'Sections 127', 'Receiving property taken by war or depredation mentioned in sections 125 and 126'),
	(13, 'Sections 128', 'Public servant voluntarily allowing prisoner of State or war to escape'),
	(14, 'Sections 129', 'Public servant negligently suffering such prisoner to escape'),
	(15, 'Sections 130', 'Aiding escape of, rescuing or harboring such prisoner.\r\n'),
	(16, 'Sections 141', 'Unlawful assembly'),
	(17, 'Sections 142', 'Being member of unlawful assembly.'),
	(18, 'Sections 143', 'Punishment'),
	(19, 'Sections 144', 'Joining unlawful assembly armed with deadly weapon'),
	(20, 'Sections 145', 'Joining or continuing in unlawful assembly, knowing it has been commanded to disperse.'),
	(21, 'Sections 146', 'Rioting'),
	(22, 'Sections 147', 'Punishment for rioting'),
	(23, 'Sections 148', 'Rioting, armed with deadly weapon'),
	(24, 'Sections 149', 'Every member of unlawful assembly guilty of offence committed in prosecution of common object'),
	(25, 'Sections 150', 'Hiring, or conniving at hiring, of persons to join unlawful assembly'),
	(26, 'Sections 151', 'Knowingly joining or continuing in assembly of five or more persons after it has been commanded to d'),
	(27, 'Sections 152', 'Assaulting or obstructing public servant when suppressing riot, etc'),
	(28, 'Section 153', 'Wantonly giving provocation, with intent to cause riotâ€”\r\nif rioting be committed; if not committed'),
	(29, 'Sections 153A', 'Promoting enmity between different groups on grounds of religion, race, place of birth, residence.\r\n'),
	(30, 'Sections 153AA', 'Punishment for knowingly carrying arms in any procession or organizing, or holding or taking part in'),
	(31, 'Sections 153B', 'Imputation, assertions prejudicial to national-integration'),
	(32, 'Sections 154', 'Owner or occupier of land on which an unlawful assembly is held'),
	(33, 'Sections 155', ' Liability of person for whose benefit riot is committed.'),
	(34, 'Sections 156', 'Liablility of agent of owner or occupier for whose benefit riot is committed'),
	(35, 'Sections 157', ' Harbouring persons hired for an unlawful assembly'),
	(36, 'Sections 158', 'Being hired to take part in an unlawful assembly or riot; or to go armed'),
	(37, 'Sections 159', 'Affray'),
	(38, 'Sections 160', 'Punishment for committing affray');
/*!40000 ALTER TABLE `tbl_section` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
