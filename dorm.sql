-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2018 at 01:33 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dorm`
--

-- --------------------------------------------------------

--
-- Table structure for table `furlough`
--

CREATE TABLE `furlough` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `room_number` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `departure` varchar(20) NOT NULL,
  `arrival` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furlough`
--

INSERT INTO `furlough` (`ID`, `name`, `room_number`, `destination`, `departure`, `arrival`) VALUES
(1, 'Lianne Mahilom', 'e2', 'Bantug', '2018-05-03 00:04:33', '2018-05-03 00:13:34'),
(2, 'Lianne Mahilom', 'e2', 'Munoz', '2018-05-03 00:04:47', '2018-05-21 22:52:00'),
(3, 'Lianne Mahilom', 'e2', 'MPG', '2018-05-03 00:05:09', '2018-05-21 22:52:05'),
(4, 'Jazlynn Baldovino', '4', 'Munoz', '2018-05-03 00:14:15', '2018-05-03 00:14:29'),
(5, 'Rhica Carbonel', 'e1', 'Talavera', '2018-05-03 05:40:47', ''),
(6, 'Rhica Carbonel', 'e1', 'Baloc', '2018-05-03 05:41:08', ''),
(7, 'Rhica Carbonel', 'e1', 'Rosville', '2018-05-03 05:41:52', ''),
(8, 'Hanilette Escuardo', '4', 'San Jose City', '2018-05-03 05:46:06', ''),
(9, 'Hanilette Escuardo', '4', 'Munoz', '2018-05-03 05:46:27', ''),
(10, 'Hanilette Escuardo', '4', 'Bantug', '2018-05-03 05:46:38', ''),
(11, 'Dezza Pajarillo', '4', 'Sto. Tomas', '2018-05-03 05:53:27', ''),
(12, 'Dezza Pajarillo', '4', 'Villa Isidra', '2018-05-03 05:53:44', ''),
(13, 'Dezza Pajarillo', '4', 'Bantug', '2018-05-03 05:53:57', ''),
(14, 'Dezza Pajarillo', '4', 'Bantug', '2018-05-03 05:53:58', ''),
(15, 'Candy Carunia', '3', 'Bantug', '2018-05-03 05:55:49', ''),
(16, 'Candy Carunia', '3', 'Bagong Sikat', '2018-05-03 05:56:05', ''),
(17, 'Candy Carunia', '3', 'Munoz', '2018-05-03 05:56:19', ''),
(18, 'Anna Tinio', 'e3', 'Munoz', '2018-05-03 05:57:57', ''),
(19, 'Anna Tinio', 'e3', 'Bantug', '2018-05-03 05:58:10', ''),
(20, 'Anna Tinio', 'e3', 'Villa Isidra', '2018-05-03 05:58:26', ''),
(21, 'Jessica Ramos', '5', 'Munoz', '2018-05-03 06:00:16', ''),
(22, 'Jessica Ramos', '5', 'Talavera', '2018-05-03 06:00:29', ''),
(23, 'Jessica Ramos', '5', 'San Jose City', '2018-05-03 06:00:45', ''),
(24, 'Lianne Lahom', 'e2', 'Bagong Sikat', '2018-05-03 07:40:43', ''),
(25, 'asd asd', 'e1', 'Sta. Barbara', '2018-05-21 22:50:52', '');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(11) NOT NULL,
  `area` varchar(20) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `room_number` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `seen` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `area`, `grade`, `room_number`, `date`, `seen`) VALUES
(1, 'Frontyard', '1', '1', '2018/05/02', 0),
(2, 'Backyard', '1', '1', '2018/05/02', 0),
(3, 'Bedroom', '1', '1', '2018/05/02', 0),
(4, 'Kitchen', '1', '1', '2018/05/02', 0),
(5, 'CR', '1', '1', '2018/05/02', 0),
(6, 'BR', '1', '1', '2018/05/02', 0),
(7, 'Frontyard', '5', '8', '2018/05/02', 0),
(8, 'Backyard', '5', '8', '2018/05/02', 0),
(9, 'Bedroom', '5', '8', '2018/05/02', 0),
(10, 'Kitchen', '1', '8', '2018/05/02', 0),
(11, 'CR', '1', '8', '2018/05/02', 0),
(12, 'BR', '1', '8', '2018/05/02', 0),
(13, 'Frontyard', '1', '1', '2018/05/03', 0),
(14, 'Backyard', '1', '1', '2018/05/03', 0),
(15, 'Bedroom', '1', '1', '2018/05/03', 0),
(16, 'Kitchen', '1', '1', '2018/05/03', 0),
(17, 'CR', '1', '1', '2018/05/03', 0),
(18, 'BR', '1', '1', '2018/05/03', 0),
(19, 'Frontyard', '1', 'e1', '2018/05/21', 0),
(20, 'Backyard', '1', 'e1', '2018/05/21', 0),
(21, 'Bedroom', '1', 'e1', '2018/05/21', 0),
(22, 'Kitchen', '1', 'e1', '2018/05/21', 0),
(23, 'CR', '1', 'e1', '2018/05/21', 0),
(24, 'BR', '1', 'e1', '2018/05/21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lcard`
--

CREATE TABLE `lcard` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `departure` varchar(20) NOT NULL,
  `arrival` varchar(20) NOT NULL,
  `room_number` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Pending',
  `seen` int(11) NOT NULL DEFAULT '0',
  `seen1` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lcard`
--

INSERT INTO `lcard` (`ID`, `name`, `destination`, `departure`, `arrival`, `room_number`, `status`, `seen`, `seen1`) VALUES
(1, 'Lianne Lahom', 'Sta. Barbara', '2018-05-08 12:59', '2018-05-03 08:39:37', '', 'Approve', 1, 0),
(2, 'Lianne Lahom', 'Cabanatuan City', '2018-05-30 13:00', '', '', 'Approve', 1, 0),
(3, 'Lianne Lahom', 'San Jose City', '2018-04-01 14:00', '2018-05-03 00:05:59', '', 'Approve', 1, 1),
(4, 'Lianne Lahom', 'Llanera', '2018-04-26 00:00', '2018-05-21 22:51:17', '', 'Approve', 1, 0),
(5, 'Rhica Carbonel', 'Talavera', '2018-04-27 11:00', '', '', 'Disapprove', 1, 0),
(6, 'Rhica Carbonel', 'Munoz', '2018-03-02 13:00', '', '', 'Pending', 1, 0),
(7, 'Rhica Carbonel', 'San JOse', '2018-03-05 16:00', '', '', 'Pending', 1, 0),
(8, 'Hanilette Escuardo', 'Dagupan', '2018-03-01 13:00', '', '', 'Pending', 1, 0),
(9, 'Hanilette Escuardo', 'San Jose City', '2018-03-30 17:00', '', '', 'Pending', 1, 0),
(10, 'Hanilette Escuardo', 'Lupao', '2018-04-01 01:00', '', '', 'Pending', 1, 0),
(11, 'Dezza Pajarillo', 'San Jose City', '2018-04-30 13:00', '', '', 'Pending', 1, 0),
(12, 'Dezza Pajarillo', 'San Jose City', '2018-03-03 13:00', '', '', 'Pending', 1, 0),
(13, 'Dezza Pajarillo', 'San Jose City', '2018-02-01 13:00', '', '', 'Pending', 1, 0),
(14, 'Candy Carunia', 'Cuyapo', '2018-03-01 15:00', '', '', 'Pending', 1, 0),
(15, 'Candy Carunia', 'Cuyapo', '2018-02-05 22:00', '', '', 'Pending', 1, 0),
(16, 'Candy Carunia', 'Cuyapo', '2018-03-02 13:00', '', '', 'Pending', 1, 0),
(17, 'Anna Tinio', 'San Leonardo', '2018-03-10 14:00', '', '', 'Pending', 1, 0),
(18, 'Anna Tinio', 'San Leonardo', '2018-03-05 13:00', '', '', 'Pending', 1, 0),
(19, 'Anna Tinio', 'San Leonardo', '2018-04-01 10:00', '', '', 'Pending', 1, 0),
(20, 'Jessica Ramos', 'Maragol', '2018-05-01 15:00', '', '', 'Pending', 1, 0),
(21, 'Jessica Ramos', 'Maragol', '2018-03-10 15:00', '', '', 'Pending', 1, 0),
(22, 'Jessica Ramos', 'Maragol', '2018-04-01 13:00', '', '', 'Pending', 1, 0),
(23, 'Lianne Lahom', 'SM', '2018-11-11 20:09', '', '', 'Pending', 1, 0),
(24, 'Lianne Lahom', 'SM', '2018-11-11 20:09', '', '', 'Pending', 1, 0),
(25, 'Lianne Lahom', 'SM', '2018-11-11 20:09', '', '', 'Pending', 1, 0),
(26, 'asd asd', 'Sta. Barbara', '2018-01-01 01:00', '', '', 'Pending', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `merits`
--

CREATE TABLE `merits` (
  `ID` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `room_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `render`
--

CREATE TABLE `render` (
  `ID` int(11) NOT NULL,
  `room_number` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'NOT CLEARED'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `renderers`
--

CREATE TABLE `renderers` (
  `id` int(11) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `violation` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `outcome` varchar(20) NOT NULL,
  `room_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `renderers`
--

INSERT INTO `renderers` (`id`, `student_id`, `name`, `violation`, `area`, `status`, `outcome`, `room_number`) VALUES
(1, '3938', 'Jazlynn Baldovino', 'Electric Violation', 'Frontyard', 'Cleared', '', '4'),
(2, '3938', 'Jazlynn Baldovino', 'Electric Violation', 'CR', 'Cleared', '', '4'),
(3, '1234', 'Kimberly Penaloza', 'Dirty Room', 'Backyard', 'Cleared', '', '4'),
(4, '1811', 'Hanilette Escuardo', 'Electric Violation', 'CR', 'Ongoing', '', '4'),
(5, '1565', 'Pauleene Pascual', 'Electric Violation', 'Backyard', 'Ongoing', '', 'e3'),
(6, '1112', 'Karla Vigilia', 'Electric Violation', 'Kitchen', 'Ongoing', '', 'e3'),
(7, '1487', 'Angel Lescano', 'Dirty Kitchen', 'CR', 'Ongoing', '', '3'),
(8, '1890', 'Alona Diaz', 'Dirty Kitchen', 'Bedroom', 'Ongoing', '', 'e3'),
(9, '1811', 'Hanilette Escuardo', 'Dirty Room', 'Kitchen', 'Ongoing', '', '4'),
(10, '2335', 'Rhica Bernal', 'Dirty Kitchen', 'CR', 'Ongoing', '', 'e3'),
(11, '1009', 'Princess David', 'Dirty Kitchen', 'Frontyard', 'Ongoing', '', 'e3'),
(12, '1578', 'Cally Manzano', 'Dirty Kitchen', 'Backyard', 'Ongoing', '', 'e3'),
(13, '1456', 'Judith Fornal', 'Electric Violation', 'BR', 'Ongoing', '', '3'),
(14, '1900', 'Nina Somera', 'Dirty Kitchen', 'BR', 'Ongoing', '', 'e3'),
(15, '2335', 'Rhica Bernal', 'Dirty Kitchen', 'Frontyard', 'Ongoing', '', 'e3'),
(16, '3938', 'Jazlynn Baldovino', 'Dirty Kitchen', 'Bedroom', 'Ongoing', '', '4'),
(17, '5169', 'Lili De Guia', 'Dirty Kitchen', 'Frontyard', 'Ongoing', '', '4');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `entry_id` int(11) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `request` varchar(20) DEFAULT 'Pending',
  `room_number` varchar(20) NOT NULL,
  `seen` int(11) NOT NULL DEFAULT '0',
  `seen1` int(11) NOT NULL DEFAULT '0',
  `student_type` varchar(20) NOT NULL DEFAULT 'Normal'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`entry_id`, `student_id`, `fname`, `mname`, `lname`, `course`, `year`, `request`, `room_number`, `seen`, `seen1`, `student_type`) VALUES
(85, '3938', 'Jazlynn', 'Saporteza', 'Baldovino', 'BSIT', '3rd', 'Approve', '4', 1, 1, 'Normal'),
(86, '1811', 'Hanilette', 'Almayda', 'Escuardo', 'BSIT', '3rd', 'Approve', '4', 1, 1, 'Normal'),
(87, '2957', 'Dezza', 'Joy', 'Pajarillo', 'BSIT', '3rd', 'Approve', '4', 1, 1, 'Normal'),
(88, '5169', 'Lili', 'Anne', 'De Guia', 'BSIT', '3rd', 'Approve', '4', 1, 1, 'Normal'),
(89, '1234', 'Kimberly', 'Cruz', 'Penaloza', 'BSIT', '3rd', 'Approve', '4', 1, 1, 'Normal'),
(90, '1977', 'Lorena', 'Muray', 'Dela Cruz', 'BSIT', '3rd', 'Approve', '4', 1, 1, 'Normal'),
(91, '1988', 'Cheska', 'Milo', 'Maza', 'BSIT', '3rd', 'Approve', '4', 1, 1, 'Normal'),
(92, '1456', 'Judith', 'Gabayno', 'Fornal', 'BSIT', '3rd', 'Approve', '3', 1, 1, 'Normal'),
(93, '1897', 'Candy', 'Carunia', 'Carunia', 'BSIT', '3rd', 'Approve', '3', 1, 1, 'Normal'),
(94, '2087', 'Kath', 'Gonzales', 'Gonzales', 'BSIT', '3rd', 'Approve', '3', 1, 1, 'Normal'),
(95, '1487', 'Angel', 'Lescano', 'Lescano', 'BSIT', '3rd', 'Approve', '3', 1, 1, 'Normal'),
(96, '1112', 'Karla', 'Valdez', 'Vigilia', 'BSIT', '3rd', 'Approve', 'e3', 1, 1, 'Normal'),
(97, '3334', 'Anna', 'Tinio', 'Tinio', 'BSIT', '3rd', 'Approve', 'e3', 1, 1, 'Normal'),
(98, '1890', 'Alona', 'Diaz', 'Diaz', 'BSIT', '3rd', 'Approve', 'e3', 1, 1, 'Normal'),
(99, '1009', 'Princess', 'David', 'David', 'BSIT', '3rd', 'Approve', 'e3', 1, 1, 'Normal'),
(100, '1578', 'Cally', 'Manzano', 'Manzano', 'BSIT', '3rd', 'Approve', 'e3', 1, 1, 'Normal'),
(101, '1565', 'Pauleene', 'Pascual', 'Pascual', 'BSIT', '3rd', 'Approve', 'e3', 1, 1, 'Normal'),
(102, '1239', 'Angelica', 'Santos', 'Santos', 'BSIT', '3rd', 'Approve', 'e3', 1, 1, 'Normal'),
(103, '1900', 'Nina', 'Somera', 'Somera', 'BSIT', '3rd', 'Approve', 'e3', 1, 1, 'Normal'),
(104, '9000', 'Jesica', 'Sta Ines', 'Sta Ines', 'BSIT', '3rd', 'Approve', 'e3', 1, 1, 'Normal'),
(106, '3271', 'Jessica', 'Julio', 'Ramos', 'BSIT', '3rd', 'Approve', '5', 1, 1, 'Normal'),
(108, '8980', 'Jeremiah', 'San Gabriel', 'San Gabriel', 'BSCE', '3rd', 'Approve', '3', 1, 0, 'Normal'),
(109, '7658', 'Rea', 'Langit', 'Langit', 'BSCE', '3rd', 'Approve', '5', 1, 1, 'Normal'),
(110, '3476', 'Julie', 'Florentino', 'Florentino', 'BSA', '4th', 'Approve', '8', 1, 1, 'Normal'),
(111, '1345', 'Lorieny', 'Catholico', 'Catholico', 'BSED', '4th', 'Approve', '8', 1, 1, 'Normal'),
(112, '7896', 'Jaya', 'Rivera', 'Rivera', 'BSED', '3rd', 'Approve', '4', 1, 1, 'Normal'),
(139, '9870', 'Christine', 'Mesde', 'Mesde', 'BSCE', '3rd', 'Approve', '4', 1, 1, 'Normal'),
(140, '7689', 'Shikinah', 'Qwerty', 'Sardeng', 'BSIT', '4th', 'Approve', '4', 1, 1, 'Normal'),
(152, '6756', 'Melody', 'Abuan', 'Abuan', 'ABSS', '4th', 'Approve', '3', 1, 0, 'Normal'),
(159, '15-5858', 'Ji', 'Young', 'Jo', 'BSAB', '3rd', 'Approve', 'e1', 1, 0, 'Normal'),
(161, '7687', 'marie', 'marie', 'marie', 'BSAB', '4th', 'Approve', 'e1', 1, 0, 'Normal'),
(162, '1367', 'Marian', 'Rivera', 'Dantes', 'BSAB', '2nd', 'Approve', 'e1', 1, 0, 'Normal'),
(163, '5678', 'bianca', 'umali', 'umali', 'BSAB', '2nd', 'Approve', 'e1', 1, 0, 'Normal'),
(164, '3478', 'cherry', 'umali', 'umali', 'BSAB', '2nd', 'Approve', 'e1', 1, 0, 'Normal'),
(165, '9899', 'jenina', 'jenina', 'de leon', 'BSBio', '4th', 'Approve', 'e1', 1, 0, 'Normal'),
(166, '1222', 'precious', 'precious', 'cachuela', 'BSChem', '2nd', 'Approve', 'e1', 1, 0, 'Normal'),
(167, '3444', 'charlene', 'charlene', 'asdasd', 'ABSS', '3rd', 'Approve', 'e1', 1, 0, 'Normal'),
(168, '8889', 'rhica', 'rhica', 'carbonel', 'ABDC', '2nd', 'Approve', 'e1', 1, 0, 'Normal'),
(169, '4575', 'Emerald', 'Emerald', 'Boado', 'ABDC', '3rd', 'Pending', 'e1', 1, 0, 'Normal'),
(170, '6785', 'Cristalyn', 'Madrid', 'Madrid', 'BSChem', '2nd', 'Disapprove', 'e1', 1, 0, 'Normal'),
(171, '8685', 'Joanabel', 'Joanabel', 'Joaquin', 'BSAC', '1st', 'Disapprove', 'e1', 1, 0, 'Normal'),
(174, '7777', 'Julie', 'Julie', 'Julie', 'BSIT', '3rd', 'Approve', '2', 1, 0, 'Normal'),
(175, '1899', 'Lianne', 'Mae', 'Lahom', 'BEED', '4th', 'Approve', 'e2', 1, 0, 'Normal'),
(177, '1444', 'Cath', 'Gonzales', 'Grospe', 'ABDC', '2nd', 'Disapprove', '2', 1, 0, 'Normal'),
(178, '7657', 'Marinela', 'Gonzales', 'Garcia', 'ABDC', '3rd', 'Pending', '2', 1, 0, 'Normal'),
(179, '0917', 'Miriam', 'Santiago', 'Defensor', 'Doctorate', '5th', 'Disapprove', '17', 1, 0, 'Normal'),
(180, '0917', 'Miriam', 'Santiago', 'Defensor', 'BSStat', '4th', 'Approve', '7', 1, 0, 'Normal'),
(181, '1998', 'Meanne', 'Apostol', 'Baldovino', 'ABSS', '3rd', 'Disapprove', '3', 1, 0, 'Normal'),
(182, '1998', 'Meanne', 'Gonzales', 'Baldovino', 'BSIT', '4th', 'Approve', '12', 1, 0, 'Normal'),
(183, '1299', 'asd', 'asd', 'asd', 'BSA', '1st', 'Approve', 'e1', 1, 0, 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `student_accounts`
--

CREATE TABLE `student_accounts` (
  `account_id` int(11) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `request` varchar(20) NOT NULL DEFAULT 'Made',
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_accounts`
--

INSERT INTO `student_accounts` (`account_id`, `student_id`, `fname`, `lname`, `request`, `Username`, `Password`) VALUES
(45, '2335', 'Rhica', 'Bernal', 'Approve', 'rhica', '12345678'),
(46, '3938', 'Jazlynn', 'Baldovino', 'Approve', 'jaz', '12345678'),
(47, '1811', 'Hanilette', 'Escuardo', 'Approve', 'hanilette', '12345678'),
(48, '2957', 'Dezza', 'Pajarillo', 'Approve', 'dezza', '12345678'),
(49, '5169', 'Lili', 'De Guia', 'Approve', 'lili', '12345678'),
(50, '1234', 'Kimberly', 'Penaloza', 'Made', 'kim', '12345678'),
(51, '1977', 'Lorena', 'Dela Cruz', 'Approve', 'lorena', '12345678'),
(52, '1988', 'Cheska', 'Maza', 'Approve', 'cheska', '12345678'),
(53, '1456', 'Judith', 'Fornal', 'Approve', 'judith', '12345678'),
(54, '1897', 'Candy', 'Carunia', 'Approve', 'candy', '12345678'),
(55, '2087', 'Kath', 'Gonzales', 'Approve', 'kath', '12345678'),
(56, '1487', 'Angel', 'Lescano', 'Approve', 'angel', '12345678'),
(57, '1112', 'Karla', 'Vigilia', 'Approve', 'karla', '12345678'),
(58, '3334', 'Anna', 'Tinio', 'Pending', 'anna', '12345678'),
(59, '1890', 'Alona', 'Diaz', 'Pending', 'alona', '12345678'),
(60, '1009', 'Princess', 'David', 'Pending', 'princess', '12345678'),
(61, '1870', 'Louie', 'Villavicencio', 'Pending', 'louie', '12345678'),
(62, '1578', 'Cally', 'Manzano', 'Pending', 'cally', '12345678'),
(63, '1565', 'Pauleene', 'Pascual', 'Pending', 'pauleene', '12345678'),
(64, '1239', 'Angelica', 'Santos', 'Pending', 'angelica', '12345678'),
(65, '1900', 'Nina', 'Somera', 'Pending', 'nina', '12345678'),
(66, '9000', 'Jesica', 'Sta Ines', 'Pending', 'jesica', '12345678'),
(67, '3271', 'Jessica', 'Ramos', 'Approve', 'jess', '12345678'),
(70, '8980', 'Jeremiah', 'San Gabriel', 'Approve', 'jeremiah', '12345678'),
(71, '7658', 'Rea', 'Langit', 'Pending', 'rea', '12345678'),
(72, '3476', 'Julie', 'Florentino', 'Pending', 'julie', '12345678'),
(73, '1345', 'Lorieny', 'Catholico', 'Pending', 'lorieny', '12345678'),
(74, '7896', 'Jaya', 'Rivera', 'Pending', 'jaya', '12345678'),
(121, '9870', 'Christine', 'Mesde', 'Approve', 'xtian', '12345678'),
(122, '7689', 'Shikinah', 'Sardeng', 'Approve', 'shiki', '12345678'),
(133, '6756', 'Melody', 'Abuan', 'Approve', 'abuan', '12345678'),
(142, '7687', 'Marie', 'Blanca', 'Approve', 'marie', '12345678'),
(143, '1367', 'Marian', 'Rivera', 'Approve', 'marian', '12345678'),
(144, '5678', 'Bianca', 'Umali', 'Approve', 'bianca', '12345678'),
(145, '9878', 'Angel', 'Locsin', 'Made', 'angel', '12345678'),
(146, '3478', 'Cherry', 'Umali', 'Approve', 'cherry', '12345678'),
(147, '9899', 'Jenina', 'De Leon', 'Approve', 'jenina', '12345678'),
(148, '1222', 'Precious', 'Cachuel', 'Approve', 'precious', '12345678'),
(149, '3444', 'Charlene', 'Casildo', 'Approve', 'charlene', '12345678'),
(150, '8889', 'Rhica', 'Carbonel', 'Approve', 'rhica', '12345678'),
(151, '4575', 'Emerald', 'Boado', 'Approve', 'eme', '12345678'),
(152, '6785', 'Cristalyn', 'Madrid', 'Made', 'xta', '12345678'),
(153, '8685', 'Joanabel', 'Joaquin', 'Disapprove', 'joa', '12345678'),
(157, '7777', 'Julie', 'Julie', 'Made', 'julie', '12345678'),
(159, '0980', 'kasd', 'asd', 'Made', 'kolokoy', '12345678'),
(160, '1899', 'Lianne', 'Lahom', 'Approve', 'lianne', '12345678'),
(162, '1444', 'Cath', 'Grospe', 'Made', 'cath', '12345678'),
(163, '7657', 'Marinela', 'Garcia', 'Pending', 'marinela', '12345678'),
(164, '0917', 'Miriam', 'Defensor', 'Approve', 'miriam', '12345678'),
(165, '1998', 'Meanne', 'Baldovino', 'Approve', 'meanne', '12345678'),
(166, '1299', 'asd', 'asd', 'Approve', 'asd', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `dorm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`, `area`, `type`, `dorm`) VALUES
(34, 'linda', '12345678', '6', 'WD', '6');

-- --------------------------------------------------------

--
-- Table structure for table `violations`
--

CREATE TABLE `violations` (
  `ID` int(11) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `violation` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Standby',
  `room_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `violations`
--

INSERT INTO `violations` (`ID`, `student_id`, `name`, `violation`, `status`, `room_number`) VALUES
(1, '3938', 'Jazlynn Baldovino', 'Electric Violation', 'Cleared', '4'),
(2, '3938', 'Jazlynn Baldovino', 'Electric Violation', 'Cleared', '4'),
(3, '1811', 'Hanilette Escuardo', 'Dirty Room', 'Ongoing', '4'),
(4, '2335', 'Rhica Bernal', 'Dirty Kitchen', 'Ongoing', 'e3'),
(5, '5169', 'Lili De Guia', 'Curfew', 'Standby', '4'),
(6, '1578', 'Cally Manzano', 'Dirty Kitchen', 'Ongoing', 'e3'),
(7, '1234', 'Kimberly Penaloza', 'Dirty Room', 'Cleared', '4'),
(8, '2087', 'Kath Gonzales', 'Curfew', 'Standby', '3'),
(9, '8685', 'Joanabel Joaquin', 'Curfew', 'Standby', 'e1'),
(10, '1811', 'Hanilette Escuardo', 'Electric Violation', 'Ongoing', '4'),
(11, '1487', 'Angel Lescano', 'Dirty Kitchen', 'Ongoing', '3'),
(12, '1112', 'Karla Vigilia', 'Electric Violation', 'Ongoing', 'e3'),
(13, '1890', 'Alona Diaz', 'Dirty Kitchen', 'Ongoing', 'e3'),
(14, '1234', 'Kimberly Penaloza', 'Curfew', 'Standby', '4'),
(15, '1009', 'Princess David', 'Dirty Kitchen', 'Ongoing', 'e3'),
(16, '1565', 'Pauleene Pascual', 'Electric Violation', 'Ongoing', 'e3'),
(17, '1456', 'Judith Fornal', 'Electric Violation', 'Ongoing', '3'),
(18, '1900', 'Nina Somera', 'Dirty Kitchen', 'Ongoing', 'e3'),
(19, '7777', 'Julie Julie', 'Dirty Room', 'Standby', '2'),
(20, '7896', 'Jaya Rivera', 'Electric Violation', 'Standby', '4'),
(21, '3938', 'Jazlynn Baldovino', 'Dirty Kitchen', 'Ongoing', '4'),
(22, '2335', 'Rhica Bernal', 'Dirty Kitchen', 'Ongoing', 'e3'),
(23, '1239', 'Angelica Santos', 'Dirty Kitchen', 'Standby', 'e3'),
(24, '5169', 'Lili De Guia', 'Electric Violation', 'Standby', '4'),
(25, '1367', 'Marian Dantes', 'Dirty Room', 'Standby', 'e1'),
(26, '9000', 'Jesica Sta Ines', 'Electric Violation', 'Standby', 'e3'),
(27, '8980', 'Jeremiah San Gabriel', 'Electric Violation', 'Standby', '3'),
(28, '1345', 'Lorieny Catholico', 'Dirty Kitchen', 'Standby', '8'),
(29, '3478', 'cherry umali', 'Electric Violation', 'Standby', 'e1'),
(30, '7658', 'Rea Langit', 'Curfew', 'Standby', '5'),
(31, '7687', 'marie marie', 'Dirty Kitchen', 'Standby', 'e1'),
(32, '5169', 'Lili De Guia', 'Dirty Kitchen', 'Ongoing', '4'),
(33, '3938', 'Jazlynn Baldovino', 'Dirty Kitchen', 'Standby', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `furlough`
--
ALTER TABLE `furlough`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lcard`
--
ALTER TABLE `lcard`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `merits`
--
ALTER TABLE `merits`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `render`
--
ALTER TABLE `render`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `renderers`
--
ALTER TABLE `renderers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `student_accounts`
--
ALTER TABLE `student_accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `violations`
--
ALTER TABLE `violations`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `furlough`
--
ALTER TABLE `furlough`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `lcard`
--
ALTER TABLE `lcard`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `merits`
--
ALTER TABLE `merits`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `render`
--
ALTER TABLE `render`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `renderers`
--
ALTER TABLE `renderers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;
--
-- AUTO_INCREMENT for table `student_accounts`
--
ALTER TABLE `student_accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `violations`
--
ALTER TABLE `violations`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
