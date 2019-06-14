/* 
 *  Developed by SMN Shuvo
 *  Using it without credit will be under copyright strike  * 
 */
/**
 * Author:  smnsh
 * Created: Jun 14, 2019
 */

$$$$$$$$$ TABLE: mess_manager
-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2019 at 01:55 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `mess_manager`
--

CREATE TABLE `mess_manager` (
  `Date` int(11) NOT NULL,
  `Shuvo` int(10) DEFAULT NULL,
  `Touhid` int(10) DEFAULT NULL,
  `Mahir` int(10) DEFAULT NULL,
  `Mehedi` int(10) DEFAULT NULL,
  `Mahmud` int(10) DEFAULT NULL,
  `Anik` int(10) DEFAULT NULL,
  `Amount` int(128) DEFAULT NULL,
  `done_by` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mess_manager`
--

INSERT INTO `mess_manager` (`Date`, `Shuvo`, `Touhid`, `Mahir`, `Mehedi`, `Mahmud`, `Anik`, `Amount`, `done_by`) VALUES
(1, 2, 2, 2, 2, 2, 2, 100, ''),
(2, 0, 0, 0, 0, 0, 0, 0, ''),
(3, 0, 0, 0, 0, 0, 0, 0, ''),
(4, 0, 0, 0, 0, 0, 0, 0, ''),
(7, 2, 2, 2, 4, 5, 6, 800, 'Towhid'),
(9, 0, 0, 0, 0, 0, 0, 500, ''),
(10, 0, 0, 0, 0, 0, 0, 0, ''),
(11, 0, 0, 0, 0, 0, 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mess_manager`
--
ALTER TABLE `mess_manager`
  ADD PRIMARY KEY (`Date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mess_manager`
--
ALTER TABLE `mess_manager`
  MODIFY `Date` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

$$$$$$$$$$$$$$$$$$$$$$$ Table: mess_advance

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2019 at 01:57 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `mess_advance`
--

CREATE TABLE `mess_advance` (
  `Serial` int(64) NOT NULL,
  `time_of_adding` varchar(128) NOT NULL,
  `Shuvo` int(128) DEFAULT NULL,
  `Touhid` int(128) DEFAULT NULL,
  `Mahir` int(128) DEFAULT NULL,
  `Mehedi` int(128) DEFAULT NULL,
  `Mahmud` int(128) DEFAULT NULL,
  `Anik` int(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mess_advance`
--

INSERT INTO `mess_advance` (`Serial`, `time_of_adding`, `Shuvo`, `Touhid`, `Mahir`, `Mehedi`, `Mahmud`, `Anik`) VALUES
(21, '', 1000, 0, 0, 0, 0, 0),
(22, '', 0, 0, 0, 0, 0, 0),
(23, '', 1000, 0, 0, 0, 0, 0),
(24, '', 0, 0, 0, 0, 0, 0),
(25, '', 1000, 0, 0, 0, 0, 0),
(26, '', 0, 0, 0, 0, 0, 0),
(27, 'Friday 14th of June 2019 01:26:24 PM', 1000, 0, 0, 0, 0, 0),
(28, 'Friday 14th of June 2019 01:26:24 PM', 0, 0, 0, 0, 0, 0),
(29, 'Friday 14th of June 2019 01:28:38 PM', 1000, 2000, 300, 2, 500, 2),
(30, 'Friday 14th of June 2019 01:28:38 PM', 0, 0, 0, 0, 0, 0),
(31, 'Friday 14th of June 2019 01:29:23 PM', 100, 0, 0, 0, 0, 0),
(32, 'Friday 14th of June 2019 01:29:23 PM', 0, 0, 0, 0, 0, 0),
(33, 'Friday 14th of June 2019 01:47:44 PM', 123, 0, 0, 0, 0, 0),
(34, 'Friday 14th of June 2019 01:47:44 PM', 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mess_advance`
--
ALTER TABLE `mess_advance`
  ADD PRIMARY KEY (`Serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mess_advance`
--
ALTER TABLE `mess_advance`
  MODIFY `Serial` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
