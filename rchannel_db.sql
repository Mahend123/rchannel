-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 03:35 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rchannel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg_tbl`
--

CREATE TABLE IF NOT EXISTS `reg_tbl` (
`id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `nname` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `office` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `LoginKey` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `reg_tbl`
--

INSERT INTO `reg_tbl` (`id`, `fname`, `nname`, `sname`, `company`, `office`, `email`, `phone`, `username`, `pwd`, `create_date`, `LoginKey`) VALUES
(1, 'mahendra', 'mahend', 'mahend', 'opulence', 'indore', 'mahendrarajput646@gmail.com', '9865326598', 'mahendra', '202cb962ac59075b964b07152d234b70', '2019-07-11 17:05:19', '66198431696849091974'),
(2, 'rajat', 'raja', 'rajat', 'opulence', 'CHICAGO', 'mahendrdarajput646@gmail.com', '3124472828', 'rajat', '202cb962ac59075b964b07152d234b70', '2019-07-11 17:24:06', '71294698917433878821'),
(3, 'mahendra', 'mahendra', 'rajput', 'Opulence Infotech', 'LOS ANGELES', 'mahendrarajput646@gmail.com', '9865326598', 'mahendra', '202cb962ac59075b964b07152d234b70', '2019-07-11 17:30:30', '43076530908098586289'),
(4, 'test', 'test', 'test', 'test', 'test', 'opulence.dev112@gmail.com', '9827078270', 'mahendra', '202cb962ac59075b964b07152d234b70', '2019-07-11 17:32:40', '59901510721989397775');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg_tbl`
--
ALTER TABLE `reg_tbl`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg_tbl`
--
ALTER TABLE `reg_tbl`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
