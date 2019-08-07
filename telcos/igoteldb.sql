-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2019 at 05:15 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `igoteldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `classofservice`
--

CREATE TABLE `classofservice` (
  `ClassofServiceID` int(11) NOT NULL,
  `ClassofServiceName` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classofservice`
--

INSERT INTO `classofservice` (`ClassofServiceID`, `ClassofServiceName`) VALUES
(1, '2G'),
(2, '3G'),
(3, '4G'),
(4, '5G');

-- --------------------------------------------------------

--
-- Table structure for table `consumers`
--

CREATE TABLE `consumers` (
  `ConsumerID` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `MobileNumber` varchar(15) NOT NULL,
  `OperatorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumers`
--

INSERT INTO `consumers` (`ConsumerID`, `Username`, `Password`, `MobileNumber`, `OperatorID`) VALUES
(1, 'nandom', 'b4af804009cb036a4ccdc33431ef9ac9', '07031676998', 2),
(2, 'salisu', 'b4af804009cb036a4ccdc33431ef9ac9', '08095678376', 5),
(3, 'Amaka', 'b4af804009cb036a4ccdc33431ef9ac9', '08045782963', 2),
(4, 'Jenifer', 'b4af804009cb036a4ccdc33431ef9ac9', '08075694325', 5),
(5, 'Jane', 'b4af804009cb036a4ccdc33431ef9ac9', '07051369425', 1),
(6, 'Emeka', 'b4af804009cb036a4ccdc33431ef9ac9', '09078461235', 2),
(7, 'Hadiza', 'b4af804009cb036a4ccdc33431ef9ac9', '08095678376', 5),
(8, 'Wale', 'b4af804009cb036a4ccdc33431ef9ac9', '08095678376', 3),
(9, 'Wale', 'b4af804009cb036a4ccdc33431ef9ac9', '08095678376', 3),
(10, 'Tomisi', 'b4af804009cb036a4ccdc33431ef9ac9', '09063852469', 0),
(11, 'Adeola', 'b4af804009cb036a4ccdc33431ef9ac9', '07045123689', 6),
(12, 'Wilson', 'b4af804009cb036a4ccdc33431ef9ac9', '080746758473', 4),
(13, 'Wilson', 'b4af804009cb036a4ccdc33431ef9ac9', '080746758473', 4),
(14, 'Wilson', 'b4af804009cb036a4ccdc33431ef9ac9', '080746758473', 4),
(15, 'Caleb', 'b4af804009cb036a4ccdc33431ef9ac9', '07041236589', 5),
(16, 'Donald', 'b4af804009cb036a4ccdc33431ef9ac9', '080746758473', 4),
(17, 'Hamza', 'b4af804009cb036a4ccdc33431ef9ac9', '08074875960', 2),
(18, 'Chibuzo', 'b4af804009cb036a4ccdc33431ef9ac9', '08089384758', 4),
(19, 'Bolaji', 'b4af804009cb036a4ccdc33431ef9ac9', '08089384758', 4),
(20, 'Bello', 'b4af804009cb036a4ccdc33431ef9ac9', '08089384758', 4),
(21, 'Nasir', 'b4af804009cb036a4ccdc33431ef9ac9', '08089384758', 4),
(22, 'Segun', '1a1dc91c907325c69271ddf0c944bc72', '2', 4),
(23, 'Nasir', 'b4af804009cb036a4ccdc33431ef9ac9', '08089384758', 4),
(24, 'Nasir', 'b4af804009cb036a4ccdc33431ef9ac9', '08089384758', 4),
(25, 'Nasir', 'b4af804009cb036a4ccdc33431ef9ac9', '08089384758', 4),
(26, 'Chukwudi', '1a1dc91c907325c69271ddf0c944bc72', '09058522639', 1),
(27, 'Nasir', 'b4af804009cb036a4ccdc33431ef9ac9', '08089384758', 4),
(28, 'Jared', '1a1dc91c907325c69271ddf0c944bc72', '07031621366', 1);

-- --------------------------------------------------------

--
-- Table structure for table `consumersreports`
--

CREATE TABLE `consumersreports` (
  `ConsumersReportID` int(11) NOT NULL,
  `ConsumerID` int(11) DEFAULT NULL,
  `OperatorID` int(11) DEFAULT NULL,
  `ServiceTypeID` int(11) DEFAULT NULL,
  `ClassofServiceID` varchar(100) NOT NULL,
  `RatingID` int(11) DEFAULT NULL,
  `Area` varchar(100) DEFAULT NULL,
  `Description` varchar(100) DEFAULT NULL,
  `IMEI` varchar(100) NOT NULL,
  `StateID` int(11) DEFAULT NULL,
  `Latitude` float DEFAULT NULL,
  `Longitude` float DEFAULT NULL,
  `FrequencyofOccurenceID` int(11) DEFAULT NULL,
  `Status` tinyint(1) NOT NULL,
  `DateSubmitted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumersreports`
--

INSERT INTO `consumersreports` (`ConsumersReportID`, `ConsumerID`, `OperatorID`, `ServiceTypeID`, `ClassofServiceID`, `RatingID`, `Area`, `Description`, `IMEI`, `StateID`, `Latitude`, `Longitude`, `FrequencyofOccurenceID`, `Status`, `DateSubmitted`) VALUES
(1, 1, 3, 2, '3', 1, 'Ekpoma', 'Poorest network ever', '1', 12, 9.4305, 7.59394, 1, 2, '2019-06-20 04:50:31'),
(2, 3, 1, 4, '3', 2, 'Wuse', 'These people are charging me too much and I dont like it', '292KDJFK', 7, 9.59593, 7.2324, 2, 1, '2019-06-20 05:05:20'),
(3, 3, 3, 2, '2', 1, 'Garki', 'My calls are beign interrupted', 'RUY8475938854', 31, 9.59593, 7.2324, 3, 1, '2019-06-20 05:06:45'),
(4, 1, 3, 2, '3', 1, '1', '1', '1', 12, 9.4305, 7.59394, 1, 1, '2019-06-21 20:35:55'),
(5, 1, 3, 2, '3', 1, '1', '1', '1', 12, 9.4305, 7.59394, 1, 2, '2019-06-21 20:47:25'),
(6, NULL, 1, 2, '2', 3, 'vjfjfjf', ' kxj', '358443097545586', 9, 0, 0, 2, 2, '2019-06-21 21:26:16'),
(7, NULL, 1, 4, '2', 1, 'jgffghb', 'this is it ', '358443097545586', 9, 0, 0, 1, 1, '2019-06-21 21:29:45'),
(8, 1, 1, 2, '2', 2, 'Goza', 'My battery is always down ', '358443097545586', 8, 0, 0, 2, 1, '2019-06-21 21:35:16'),
(9, 1, 2, 3, '2', 3, 'kgkgdhdh', 'I had a bad experience ', '358443097545586', 29, 0, 0, 1, 1, '2019-06-21 22:30:47'),
(10, 1, 2, 3, '2', 4, 'kabba', 'Network problem', '358443097545586', 23, 0, 0, 2, 2, '2019-06-21 22:38:44'),
(11, 1, 2, 3, '2', 2, 'Ibadan ', 'SMS is not going ', '358443097545586', 31, 9.02639, 7.41982, 3, 1, '2019-06-21 22:42:56'),
(12, 1, 2, 3, '2', 3, 'Kawo', 'I\'m not happy about this service ', '358443097545586', 19, 9.02635, 7.4198, 2, 1, '2019-06-21 22:47:46'),
(13, 1, 2, 3, '2', 3, 'Tsafe', 'I am using the phone ', '358443097545586', 37, 9.02642, 7.41981, 1, 1, '2019-06-21 23:06:45'),
(14, 1, 2, 3, '2', 3, 'Tsafe', 'I am using the phone ', '358443097545586', 37, 9.02641, 7.41969, 1, 2, '2019-06-21 23:07:01'),
(15, 1, 2, 1, '2', 3, 'Lugbe ', 'Godfrey am reporting this issue to you ', '358443097545586', 15, 9.02015, 7.42668, 1, 2, '2019-06-21 23:38:49'),
(16, 1, 2, 3, '2', 3, 'Gongola ', 'Another problem', '358443097545586', 18, NULL, NULL, 1, 1, '2019-06-22 00:33:15'),
(17, 1, 2, 4, '2', 3, 'obubura', 'My booking issue', '358443097545586', 9, NULL, NULL, 4, 1, '2019-06-22 00:35:54'),
(18, 1, 2, 1, '2', 2, 'Argungun', 'I don\'t like this network', '358443097545586', 22, NULL, NULL, 3, 2, '2019-06-22 00:44:53'),
(19, 1, 2, 4, '2', 2, 'Tundun wada ', 'This is a serious problem', '358443097545586', 23, 8.99331, 7.14846, 2, 2, '2019-06-22 02:11:03'),
(20, 1, 2, 3, '2', 2, 'Giri', 'My data is finishing ', '358443097545586', 15, 8.9935, 7.14853, 2, 1, '2019-06-22 02:13:11'),
(21, 1, 2, 3, '2', 3, 'Obubura', 'I\'m trying this out ', '358443097545586', 9, 8.99409, 7.14873, 1, 1, '2019-06-22 02:14:59'),
(22, 1, 2, 4, '2', 2, 'Surulere', 'This is a testing phase', '358443097545586', 25, 8.99347, 7.14867, 4, 1, '2019-06-22 02:18:19'),
(23, 1, 2, 2, '2', 3, 'bjkkffhj', 'bbbhhjjj', '358443097545586', 10, NULL, NULL, 2, 1, '2019-06-22 02:30:12'),
(24, 1, 2, 3, '2', 3, 'Tudun wada ', 'My experience is not good at all ', '358443097545586', 21, 9.01377, 7.47149, 3, 1, '2019-06-23 07:09:39'),
(25, 1, 2, 3, '2', 2, 'Ibadan ', 'The SMS rate is too high ', '358443097545586', 31, 9.01398, 7.4714, 2, 2, '2019-06-23 08:57:34'),
(26, 1, 3, 2, '3', 1, '1', '1', '1', 12, 9.4305, 7.59394, 1, 2, '2019-06-25 21:44:00');

-- --------------------------------------------------------

--
-- Table structure for table `frequencyofoccurence`
--

CREATE TABLE `frequencyofoccurence` (
  `FrequencyOfOccurenceID` int(11) NOT NULL,
  `Frequency` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frequencyofoccurence`
--

INSERT INTO `frequencyofoccurence` (`FrequencyOfOccurenceID`, `Frequency`) VALUES
(1, 'Daily'),
(2, 'Every Other Day'),
(3, 'Monthly'),
(4, 'Occasionally');

-- --------------------------------------------------------

--
-- Table structure for table `nccadmin`
--

CREATE TABLE `nccadmin` (
  `userID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nccadmin`
--

INSERT INTO `nccadmin` (`userID`, `Username`, `Password`, `Status`, `Role`) VALUES
(1, 'admin', 'admin', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `OperatorID` int(11) NOT NULL,
  `OperatorName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`OperatorID`, `OperatorName`) VALUES
(1, 'MTN'),
(2, 'GLO'),
(3, 'AIRTEL'),
(4, '9MOBILE'),
(5, 'SPECTRANET'),
(6, 'NTEL'),
(7, 'Vodacom'),
(8, 'Visafone'),
(9, ''),
(10, '');

-- --------------------------------------------------------

--
-- Table structure for table `otherreports`
--

CREATE TABLE `otherreports` (
  `ReportingID` int(11) NOT NULL,
  `Name` varchar(34) NOT NULL,
  `Operator` varchar(30) NOT NULL,
  `MobileNumber` varchar(32) NOT NULL,
  `ServiceType` varchar(20) NOT NULL,
  `Location` varchar(32) NOT NULL,
  `MediaID` varchar(32) NOT NULL,
  `Complaint` text NOT NULL,
  `Email` varchar(30) NOT NULL,
  `question1` varchar(5) NOT NULL,
  `question2` varchar(5) NOT NULL,
  `FirstComplaint` varchar(20) NOT NULL,
  `DateReported` datetime DEFAULT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otherreports`
--

INSERT INTO `otherreports` (`ReportingID`, `Name`, `Operator`, `MobileNumber`, `ServiceType`, `Location`, `MediaID`, `Complaint`, `Email`, `question1`, `question2`, `FirstComplaint`, `DateReported`, `Status`) VALUES
(1, 'Godfrey', 'MTN', '08162445607', 'Apo Abuja', 'Email', '', 'They overbill me, i really don\'t like it, especially when am on call.', '', '', '', '', '0000-00-00 00:00:00', 1),
(2, 'Godfrey', '9MOBILE', '09074526867', 'Abuja', 'Social Media', 'Data', 'Bad Network o', '', '', '', '', '0000-00-00 00:00:00', 1),
(3, 'Jonas', '9MOBILE', '0705 946 9134', 'SMS', 'Apapa, Lagos', 'Email', 'Poor network', '', '', '', '', '0000-00-00 00:00:00', 1),
(4, 'Paul', 'MTN', '09057796575', 'Voice', 'Durumi, Abuja', 'USSD Code (662)', 'This is very bad network', '', '', '', '', '0000-00-00 00:00:00', 1),
(5, 'Kemi Okeowo', 'AIRTEL', '07059469134', 'SMS', 'Jabi FCT', 'Social Media', 'Very good reception', '', '', '', '', '0000-00-00 00:00:00', 1),
(6, 'Okupe ', 'MTN', '07037891314', 'Data', 'Benue', 'USSD Code (662)', 'I don\'t get to use my data as much as I want to and yet it gets exhausted fast', '', '', '', '', '0000-00-00 00:00:00', 1),
(7, 'Jolade Ogunleye', 'AIRTEL', '0705 946 9134', 'Data', 'Prince and Princess Estate, Abuj', 'USSD Code (662)', 'The network in my area is pretty good but worst at Night', '', '', '', '', '0000-00-00 00:00:00', 1),
(8, 'Adamu Isa', 'AIRTEL', '08185643875', 'Voice', 'Abuja', 'USSD Code (662)', 'Can\'t seem to hear other party on phone', '', '', '', '', '0000-00-00 00:00:00', 1),
(9, 'Godfrey', 'MTN', '0705 946 9134', 'Billing', 'Pigba Sama', 'Social Media', 'Very poor reception and the call rates are too high', '', '', '', '', '0000-00-00 00:00:00', 1),
(10, 'Temitope', 'GLO', '08054376543', 'Voice', 'Abuja', 'Social Media', 'Poor connection', '', '', '', '', '0000-00-00 00:00:00', 1),
(11, 'Mrs Taiwo', 'GLO', '08075367867', 'Data', 'Calabar', 'USSD Code (662)', 'I have data but poor network to access web pages\r\n', '', '', '', '', '0000-00-00 00:00:00', 1),
(12, 'Jolade', 'AIRTEL', '08124179484', 'Billing', 'Abuja', 'Direct Contacts', 'Cost of data is too much', '', '', '', '', '0000-00-00 00:00:00', 1),
(13, 'Godfrey Okubo', 'MTN', '09036741242', 'Data', 'Abuja', 'USSD Code (662)', '', '', '', '', '', '0000-00-00 00:00:00', 1),
(14, 'Ebenezer', '9MOBILE', '08093785467', 'Billing', 'Abuja', 'USSD Code (662)', 'The cost of billing is high', '', '', '', '', '0000-00-00 00:00:00', 1),
(15, 'Mimi Ajah', 'MTN', '08137594334', 'Data', 'Niger', 'USSD Code (662)', 'Poor network connection and slow', '', '', '', '', '0000-00-00 00:00:00', 1),
(16, '', 'GLO', '', 'Voice', 'Abuja', 'USSD Code (662)', '', '', '', '', '', '0000-00-00 00:00:00', 1),
(17, 'Godfrey David', 'GLO', '07039346465', 'Voice', 'Apo, Abuja.', 'USSD Code (662)', 'Not Hearing', '', '', '', '', '0000-00-00 00:00:00', 1),
(18, 'Alale Esther', 'AIRTEL', '08167517880', 'Data', 'Garki, Abuja.', 'Social Media', 'Too expensive', '', '', '', '', '0000-00-00 00:00:00', 1),
(19, 'Chidi Okafor', '9MOBILE', '07011184206', 'SMS', 'Lekki, Lagos.', 'Email', 'Cannot Recharge', '', '', '', '', '0000-00-00 00:00:00', 1),
(20, 'Isaac Dalatu', 'MTN', '09054269356', 'Billing', 'Otta, Ogun.', 'Direct Contacts', 'Overbilling ', '', '', '', '', '0000-00-00 00:00:00', 1),
(21, 'Emedion bassey', 'GLO', '08059900068', 'Voice', 'Gwarimpa, Abuja.', 'USSD Code (662)', 'Other people cant hear me when I call', '', '', '', '', '0000-00-00 00:00:00', 1),
(22, 'Favor Ben', 'AIRTEL', '08076723185', 'SMS', 'Otta, Ogun.', 'Email', 'Can\'t send messages', '', '', '', '', '0000-00-00 00:00:00', 1),
(23, 'Sope', 'AIRTEL', '090464835', 'Data', 'NCC, Abuja', 'Direct Contacts', 'I am over billed on a weekly basis', '', '', '', '', '0000-00-00 00:00:00', 1),
(24, 'Jboy', 'MTN', '08162445607', 'Call Centre / Custom', 'Durumi, Abuja', 'Consumer Town Hall Meeting', 'Over billing', 'samadeniyi119@gmail.com', 'Yes', 'No', '2019-07-01', '0000-00-00 00:00:00', 1),
(25, 'Jolade Ogunleye', 'AIRTEL', '09074526867', 'Health Issues', 'Jabi FCT', 'Consumer Outreach Programme', 'very sad man', 'jay@yahoo.com', 'No', 'No', '2018-11-30', '0000-00-00 00:00:00', 1),
(26, 'Jolade Ogunleye', '9MOBILE', '09074526867', 'Call Centre / Custom', 'Jabi FCT', 'Social Media', 'poor', 'samadeniyi119@gmail.com', 'No', 'No', '2017-10-30', '0000-00-00 00:00:00', 1),
(27, 'Godfrey', 'MTN', '08162445607', 'Promotion', 'Abuja', 'CTHM', 'Unsatisfied', 'g@gmail.com', 'Yes', '..Sel', '2019-07-12', '0000-00-00 00:00:00', 1),
(28, 'jAY', 'AIRTEL', '08162445607', 'Call Centre / Custom', 'Lagos', 'COP', 'very poor delivery', 'g@gmail.com', 'No', 'Yes', '2018-11-30', '0000-00-00 00:00:00', 1),
(29, 'Jonas', 'AIRTEL', '08162445607', 'Billing', 'Obubra, Cross River State', 'TCP', 'I am tired of reporting this issues', 'g@gmail.com', 'Yes', 'No', '2018-12-31', '0000-00-00 00:00:00', 1),
(30, 'Jonas', 'AIRTEL', '08162445607', 'Internet Services', 'Lagos', 'TCP', 'Please help out', 'g@gmail.com', 'Yes', 'No', '2019-07-24', '0000-00-00 00:00:00', 1),
(31, 'Jonas', 'AIRTEL', '08162445607', 'Internet Services', 'Lagos', 'TCP', 'Please help out', 'g@gmail.com', 'Yes', 'No', '2019-07-24', '0000-00-00 00:00:00', 1),
(32, 'Jonas', 'AIRTEL', '08162445607', 'Internet Services', 'Lagos', 'TCP', 'Please help out', 'g@gmail.com', 'Yes', 'No', '2019-07-24', '2019-07-24 10:00:50', 1),
(33, 'Enangha', 'GLO', '0805023375', 'Recharge Card', 'Kabusa, Abuja', 'COP', 'Great one bro', 'gblaze@gmail.com', 'Yes', 'No', '2019-07-23', '2019-07-24 10:20:15', 1),
(34, 'Patience Ofie ', 'MTN', '08180371026', 'Billing', 'Abuja', 'COP', 'Unsatisfied', 'patienceofie@gmail.com', 'No', 'No', '2019-07-24', '2019-07-24 12:21:47', 1),
(35, 'Enangha', 'AIRTEL', '0805023375', 'Billing', 'Obubra, Cross River State', 'COP', 'Kindly resolve pls', 'patienceofie@gmail.com', 'No', 'Yes', '2018-11-30', '2019-07-27 23:16:05', 1),
(36, 'Arome', 'GLO', '070556432', '3G Services', 'Lagos', 'CTHM', 'Something should be done about this please', 'patienceofie@gmail.com', 'Yes', 'Yes', '2019-07-31', '2019-07-31 14:35:48', 1);

-- --------------------------------------------------------

--
-- Table structure for table `outreachresolutions`
--

CREATE TABLE `outreachresolutions` (
  `ResolutionID` int(11) NOT NULL,
  `Consumer` varchar(20) NOT NULL,
  `Resolution` text NOT NULL,
  `DateResolved` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `RatingID` int(11) NOT NULL,
  `Rating` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`RatingID`, `Rating`) VALUES
(1, 'Poor'),
(2, 'Fair'),
(3, 'Good'),
(4, 'Excellent');

-- --------------------------------------------------------

--
-- Table structure for table `resolutionreports`
--

CREATE TABLE `resolutionreports` (
  `ResolutionID` int(11) NOT NULL,
  `ConsumerReportID` int(11) NOT NULL,
  `Resolution` text NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `DateResolved` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resolutionreports`
--

INSERT INTO `resolutionreports` (`ResolutionID`, `ConsumerReportID`, `Resolution`, `Status`, `DateResolved`) VALUES
(1, 0, 'We sincerely apologize to you', 2, NULL),
(2, 0, 'We are currently on it, kindly bear with us', 2, NULL),
(3, 0, 'This is a great one', 2, NULL),
(6, 0, 'We apologize for all the inconviniences caused, we would review and update our billing system', 2, NULL),
(7, 0, 'Accept our apologies, we are currently working on it', 2, '0000-00-00 00:00:00'),
(8, 0, 'This is a great one, efforts are on this', 2, '0000-00-00 00:00:00'),
(9, 0, 'it is resovled', 1, '2019-07-02 00:00:00'),
(10, 0, 'Another one', 1, '2019-07-02 15:42:31'),
(11, 0, 'Another resolution thing ', 1, '2019-07-02 15:43:32'),
(12, 0, 'Another resolution thing ', 1, '2019-07-02 15:44:47'),
(13, 0, 'SOMETHING NICE', 1, '2019-07-02 15:47:09'),
(14, 0, 'SOMETHING NICE', 1, '2019-07-02 15:47:49'),
(15, 0, 'We are current working on resolving the network issue', 2, '2019-07-02 15:57:28'),
(16, 0, 'We\'ll refund all charges today by God\'s grace', 1, '2019-07-02 15:59:10'),
(17, 0, 'we are so sorry', 2, '2019-07-03 13:25:12'),
(18, 0, 'so sorry', 2, '2019-07-05 09:22:24'),
(19, 0, 'sorry', 2, '2019-07-05 09:26:22'),
(20, 0, 'kakkakak', 2, '2019-07-05 09:50:54'),
(21, 0, 'sorry', 2, '2019-07-05 10:42:09'),
(22, 0, 'jjjjj', 2, '2019-07-05 10:44:14'),
(23, 0, 'dffff', 2, '2019-07-05 20:25:38'),
(24, 0, 'fffssdf', 1, '2019-07-05 20:25:57'),
(25, 0, 'fffssdf', 1, '2019-07-05 21:54:10'),
(26, 0, 'ffeff', 2, '2019-07-05 22:41:46'),
(27, 0, 'hssghh', 2, '2019-07-05 22:53:00'),
(28, 0, 'jjjjjj', 2, '2019-07-06 00:07:52'),
(29, 0, 'hjkjlkk', 1, '2019-07-06 00:10:17'),
(30, 0, 'jfjfjfjfj', 2, '2019-07-06 00:20:31'),
(31, 0, 'nfnfnfnf.sf eek', 2, '2019-07-06 00:22:48'),
(32, 0, 'test', 2, '2019-07-06 06:38:46'),
(33, 0, 'hjjkl/', 2, '2019-07-06 06:42:18'),
(34, 0, 'We are so sorry this is a test pls', 2, '2019-07-06 11:45:03'),
(35, 0, 'his is a test pls', 2, '2019-07-06 11:46:03'),
(36, 0, 'Thi is a pending test pls', 1, '2019-07-06 11:47:58'),
(37, 0, 'THIS IS A TEST WITH REPORT ID', 2, '2019-07-06 11:53:57'),
(38, 0, 'THIS IS A TEST WITH REPORT ID', 2, '2019-07-06 11:55:01'),
(39, 0, 'ffdgg', 2, '2019-07-06 12:08:25'),
(40, 0, 'ffdgg', 2, '2019-07-06 12:10:28'),
(41, 0, 'effff', 2, '2019-07-06 12:39:38'),
(42, 0, 'yujikik', 2, '2019-07-06 15:54:37'),
(43, 0, 'sdsds', 2, '2019-07-06 15:57:01'),
(44, 0, 'sdsds', 2, '2019-07-06 15:59:38'),
(45, 0, 'sdfsdfsdfsd', 2, '2019-07-06 16:01:42'),
(46, 0, 'zxczxczxczx', 2, '2019-07-06 16:02:22'),
(47, 0, 'zxczxczxczx', 2, '2019-07-06 16:02:40'),
(48, 0, 'zxczxczxczx', 2, '2019-07-06 16:02:59'),
(49, 0, 'zxczxczxczx', 2, '2019-07-06 16:05:15'),
(50, 0, 'zxczxczxczx', 2, '2019-07-06 16:05:59'),
(51, 0, 'sdfsdfsdf', 2, '2019-07-06 16:24:33'),
(52, 0, 'sdfsdfsdf', 2, '2019-07-06 16:27:51'),
(53, 0, 'sdfsdfsdf', 2, '2019-07-06 16:28:11'),
(54, 0, 'sdfsdfsdf', 2, '2019-07-06 16:28:31'),
(55, 0, 'sdfsdfsdf', 2, '2019-07-06 16:30:01'),
(56, 0, 'sdfsdfsdf', 2, '2019-07-06 16:30:39'),
(57, 0, 'sdfsdfsdf', 2, '2019-07-06 16:32:08'),
(58, 0, 'sdfsdfsdf', 2, '2019-07-06 16:32:43'),
(59, 0, 'sdfsdfsdf', 2, '2019-07-06 16:36:58'),
(60, 0, 'sdfsdfsdf', 2, '2019-07-06 16:40:08'),
(61, 0, 'sdfsdfs', 2, '2019-07-06 16:41:08'),
(62, 0, 'Edo people have resolved this thing oo', 2, '2019-07-06 16:41:37'),
(63, 0, 'Edo people have resolved this thing oo', 2, '2019-07-06 16:44:11'),
(64, 0, 'it is done', 2, '2019-07-06 16:44:39'),
(65, 0, 'it is done', 2, '2019-07-06 16:45:46'),
(66, 0, '', 0, '2019-07-06 17:03:16'),
(67, 0, 'issues resolved', 2, '2019-07-06 17:04:06'),
(68, 0, 'resolved godfrey', 2, '2019-07-06 19:15:51'),
(69, 0, 'jane resolution', 2, '2019-07-06 19:16:45'),
(70, 0, 'sorry', 2, '2019-07-06 19:27:34'),
(71, 0, 'just a test', 2, '2019-07-08 10:11:30'),
(72, 0, 'we are sorry', 1, '2019-07-08 11:10:58'),
(73, 0, 'just a re run', 2, '2019-07-09 10:15:12'),
(74, 0, 'We apologize', 2, '2019-07-11 13:17:30'),
(75, 5, 'resoved', 2, '2019-07-23 15:17:41'),
(76, 26, 'We are deeply sorry', 2, '2019-07-27 23:18:27');

-- --------------------------------------------------------

--
-- Table structure for table `servicetype`
--

CREATE TABLE `servicetype` (
  `ServiceTypeID` int(11) NOT NULL,
  `ServiceTypeName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicetype`
--

INSERT INTO `servicetype` (`ServiceTypeID`, `ServiceTypeName`) VALUES
(1, 'Data'),
(2, 'Voice'),
(3, 'SMS'),
(4, 'Billing');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `StateID` int(11) NOT NULL,
  `StateName` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`StateID`, `StateName`) VALUES
(1, 'Abia State'),
(2, 'Adamawa State'),
(3, 'Akwa Ibom State'),
(4, 'Anambra State'),
(5, 'Bauchi State'),
(6, 'Bayelsa State'),
(7, 'Benue State'),
(8, 'Borno State'),
(9, 'Cross River State'),
(10, 'Delta State'),
(11, 'Ebonyi State'),
(12, 'Edo State'),
(13, 'Ekiti State'),
(14, 'Enugu State'),
(15, 'FCT'),
(16, 'Gombe State'),
(17, 'Imo State'),
(18, 'Jigawa State'),
(19, 'Kaduna State'),
(20, 'Kano State'),
(21, 'Katsina State'),
(22, 'Kebbi State'),
(23, 'Kogi State'),
(24, 'Kwara State'),
(25, 'Lagos State'),
(26, 'Nasarawa State'),
(27, 'Niger State'),
(28, 'Ogun State'),
(29, 'Ondo State'),
(30, 'Osun State'),
(31, 'Oyo State'),
(32, 'Plateau State'),
(33, 'Rivers State'),
(34, 'Sokoto State'),
(35, 'Taraba State'),
(36, 'Yobe State'),
(37, 'Zamfara State');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `StatusID` int(11) NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`StatusID`, `Status`) VALUES
(1, 'Pending'),
(2, 'Resolved');

-- --------------------------------------------------------

--
-- Table structure for table `telcos`
--

CREATE TABLE `telcos` (
  `TelcosID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `OperatorID` int(11) NOT NULL,
  `operatorName` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `telcos`
--

INSERT INTO `telcos` (`TelcosID`, `Username`, `Password`, `OperatorID`, `operatorName`, `Status`) VALUES
(1, 'glo_admin', 'pass1234', 2, 'GLO Admin', 1),
(2, 'mtn_admin', 'pass1234', 1, 'MTN Admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classofservice`
--
ALTER TABLE `classofservice`
  ADD PRIMARY KEY (`ClassofServiceID`);

--
-- Indexes for table `consumers`
--
ALTER TABLE `consumers`
  ADD PRIMARY KEY (`ConsumerID`);

--
-- Indexes for table `consumersreports`
--
ALTER TABLE `consumersreports`
  ADD PRIMARY KEY (`ConsumersReportID`);

--
-- Indexes for table `frequencyofoccurence`
--
ALTER TABLE `frequencyofoccurence`
  ADD PRIMARY KEY (`FrequencyOfOccurenceID`);

--
-- Indexes for table `nccadmin`
--
ALTER TABLE `nccadmin`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`OperatorID`);

--
-- Indexes for table `otherreports`
--
ALTER TABLE `otherreports`
  ADD PRIMARY KEY (`ReportingID`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`RatingID`);

--
-- Indexes for table `resolutionreports`
--
ALTER TABLE `resolutionreports`
  ADD PRIMARY KEY (`ResolutionID`);

--
-- Indexes for table `servicetype`
--
ALTER TABLE `servicetype`
  ADD PRIMARY KEY (`ServiceTypeID`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`StateID`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`StatusID`);

--
-- Indexes for table `telcos`
--
ALTER TABLE `telcos`
  ADD PRIMARY KEY (`TelcosID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classofservice`
--
ALTER TABLE `classofservice`
  MODIFY `ClassofServiceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `consumers`
--
ALTER TABLE `consumers`
  MODIFY `ConsumerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `consumersreports`
--
ALTER TABLE `consumersreports`
  MODIFY `ConsumersReportID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `frequencyofoccurence`
--
ALTER TABLE `frequencyofoccurence`
  MODIFY `FrequencyOfOccurenceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nccadmin`
--
ALTER TABLE `nccadmin`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `OperatorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `otherreports`
--
ALTER TABLE `otherreports`
  MODIFY `ReportingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `RatingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resolutionreports`
--
ALTER TABLE `resolutionreports`
  MODIFY `ResolutionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `servicetype`
--
ALTER TABLE `servicetype`
  MODIFY `ServiceTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `StateID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `StatusID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `telcos`
--
ALTER TABLE `telcos`
  MODIFY `TelcosID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
