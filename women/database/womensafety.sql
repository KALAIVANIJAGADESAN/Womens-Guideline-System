-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 08:15 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `womensafety`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(12) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `helpline`
--

CREATE TABLE IF NOT EXISTS `helpline` (
`heid` int(12) NOT NULL,
  `hname` varchar(20) NOT NULL,
  `htype` varchar(30) NOT NULL,
  `hcontact` bigint(10) NOT NULL,
  `haddress` varchar(50) NOT NULL,
  `hlocation` varchar(20) NOT NULL,
  `hename` varchar(20) NOT NULL,
  `hecontact` varchar(10) NOT NULL,
  `headdress` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `helpline`
--

INSERT INTO `helpline` (`heid`, `hname`, `htype`, `hcontact`, `haddress`, `hlocation`, `hename`, `hecontact`, `headdress`) VALUES
(4, 'sukumaran', 'Child Help Line', 100, 'COIMBATORE', 'GANDHIPURAM', 'DHANALAKSHMI', '9751617804', 'PELAMEDU');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE IF NOT EXISTS `hostel` (
`hid` int(12) NOT NULL,
  `hname` varchar(20) NOT NULL,
  `oname` varchar(20) NOT NULL,
  `ocontact` bigint(10) NOT NULL,
  `map` varchar(50) NOT NULL,
  `address` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `pimage` varchar(20) NOT NULL,
  `wname` varchar(20) NOT NULL,
  `wcontact` varchar(20) NOT NULL,
  `otime` time(6) NOT NULL,
  `ctime` time(6) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`hid`, `hname`, `oname`, `ocontact`, `map`, `address`, `location`, `pimage`, `wname`, `wcontact`, `otime`, `ctime`) VALUES
(1, 'SK Womens Hostel', 'DHANALAKSHMI', 9751617804, 'https://goo.gl/maps/fEbZrYGNYvXzgi169', 'Coimbatore', 'peelamedu', 'Desert.jpg', 'Raja', '8012869018', '05:00:00.000000', '22:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `madical`
--

CREATE TABLE IF NOT EXISTS `madical` (
`mid` int(12) NOT NULL,
  `shname` varchar(20) NOT NULL,
  `shlocation` varchar(20) NOT NULL,
  `shcontact` bigint(10) NOT NULL,
  `time` varchar(12) NOT NULL,
  `pimage` varchar(20) NOT NULL,
  `shoname` varchar(20) NOT NULL,
  `shoaddress` varchar(20) NOT NULL,
  `shocontact` bigint(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `madical`
--

INSERT INTO `madical` (`mid`, `shname`, `shlocation`, `shcontact`, `time`, `pimage`, `shoname`, `shoaddress`, `shocontact`) VALUES
(1, 'SS MEDICALS', 'COVAI', 8012869018, '24 * 7 hrs', 'Desert.jpg', 'RAMANI ARUMUGAM', 'KODINGIAM', 8883041199);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`pid` int(12) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `pdescp` varchar(50) NOT NULL,
  `pimage` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `price` int(12) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `address` varchar(120) NOT NULL,
  `location` varchar(20) NOT NULL,
  `contact` bigint(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `pdescp`, `pimage`, `date`, `price`, `sname`, `address`, `location`, `contact`) VALUES
(3, 'pepper spray', 'safe for women', 'pepperspray.jpg', '2023-01-04', 500, 'something medicals', 'kodingiam', 'coimbatore', 8012869018),
(4, 'SAFETY RING', 'RING FOR YOUR SAFE', 'ring.jpg', '2023-01-26', 1200, 'something medicals', 'strdsgfs', 'peelamedu', 9998855258);

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE IF NOT EXISTS `transport` (
`tid` int(12) NOT NULL,
  `tname` varchar(20) NOT NULL,
  `tdescp` varchar(20) NOT NULL,
  `pimage` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `price` int(30) NOT NULL,
  `oname` varchar(30) NOT NULL,
  `address` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `contact` bigint(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`tid`, `tname`, `tdescp`, `pimage`, `time`, `price`, `oname`, `address`, `location`, `contact`) VALUES
(6, 'DHANAMA TRANSPORT', 'safe and secure', '3.jpg', '12 hrs', 500, 'DHANALAKSHMI', 'kodingiam', 'peelamedu', 8012869018);

-- --------------------------------------------------------

--
-- Table structure for table `userregister`
--

CREATE TABLE IF NOT EXISTS `userregister` (
`uid` int(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobileno` bigint(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `pinno` int(6) NOT NULL,
  `dist` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `userregister`
--

INSERT INTO `userregister` (`uid`, `username`, `password`, `mobileno`, `address`, `pinno`, `dist`) VALUES
(1, 'sk', 'sk', 8012869018, 'kodingiam', 642122, 'covai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `helpline`
--
ALTER TABLE `helpline`
 ADD PRIMARY KEY (`heid`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
 ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `madical`
--
ALTER TABLE `madical`
 ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
 ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `userregister`
--
ALTER TABLE `userregister`
 ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `helpline`
--
ALTER TABLE `helpline`
MODIFY `heid` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
MODIFY `hid` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `madical`
--
ALTER TABLE `madical`
MODIFY `mid` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `pid` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
MODIFY `tid` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `userregister`
--
ALTER TABLE `userregister`
MODIFY `uid` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
