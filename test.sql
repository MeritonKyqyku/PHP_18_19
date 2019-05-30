-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2019 at 02:04 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

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
-- Table structure for table `regjistrimi`
--

CREATE TABLE `regjistrimi` (
  `Rid` int(11) NOT NULL,
  `Rname` varchar(30) DEFAULT NULL,
  `Rlastname` varchar(30) DEFAULT NULL,
  `Remail` varchar(70) DEFAULT NULL,
  `Rdatelindja` date DEFAULT NULL,
  `Rvendbanimi` varchar(40) DEFAULT NULL,
  `Rshkollat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regjistrimi`
--

INSERT INTO `regjistrimi` (`Rid`, `Rname`, `Rlastname`, `Remail`, `Rdatelindja`, `Rvendbanimi`, `Rshkollat`) VALUES
(1, 'Meriton', 'Kyqyku', 'kyqykumeriton@gmail.com', '1997-05-21', 'Kaqanik', 'Emin Duraku'),
(2, 'Milot', 'Kyqyku', 'milot@live.com', '1999-06-03', 'Prishtine', 'Elena Gjika'),
(3, 'Miran', 'Rexhepi', 'miranrexhpi@live.com', '1999-05-05', 'Prizren', 'Sami Frasheri'),
(4, 'Mirsad', 'Dibrani', 'mirsaddibrani@hotmail.com', '1996-02-05', 'Fushe Kosove', 'Shtejfan Gjeqovi'),
(9, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Lirim', 'Raka', 'lirimraka@live.com', '1996-08-20', 'Ranillug', 'Paskal Milo'),
(11, 'Rilind', 'Gashi', 'rilindgashi@live.com', '2001-12-06', 'Lipjan', 'Emin Duraku'),
(12, '', '', '', '0000-00-00', '', ''),
(13, '', '', '', '0000-00-00', '', ''),
(14, '', '', '', '0000-00-00', '', ''),
(15, '', '', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Uid` int(11) NOT NULL,
  `Username` varchar(30) DEFAULT NULL,
  `Upassword` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Uid`, `Username`, `Upassword`) VALUES
(1, 'Meriton', 'Kyqyku'),
(3, 'Ndriqim', 'Halili');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regjistrimi`
--
ALTER TABLE `regjistrimi`
  ADD PRIMARY KEY (`Rid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regjistrimi`
--
ALTER TABLE `regjistrimi`
  MODIFY `Rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
