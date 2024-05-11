
create database airlines4;
use airlines4;
CREATE TABLE IF NOT EXISTS `booking` (
  `b_id` int(4) NOT NULL AUTO_INCREMENT,
  `b_datetime` datetime DEFAULT NULL,
  `flightno` varchar(30) DEFAULT NULL,
  `from_city` varchar(30) DEFAULT NULL,
  `to_city` varchar(30) DEFAULT NULL,
  `total_amt` float(8,2) DEFAULT NULL,
  `transaction_id` varchar(20) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `b_datetime`, `flightno`, `from_city`, `to_city`, `total_amt`, `transaction_id`, `username`) VALUES
('', '2011-04-05 00:00:00', '2323', 'Bhopal', 'Lucknow', 23.44, '11', 'pankaj');

-- --------------------------------------------------------

--
-- Table structure for table `cancellation`
--

CREATE TABLE IF NOT EXISTS `cancellation` (
  `c_id` int(4) NOT NULL AUTO_INCREMENT,
  `b_id` int(4) DEFAULT NULL,
  `cancel_charges` float(8,2) DEFAULT NULL,
  `refund_amt` float(8,2) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `accno` varchar(50) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cancellation`
--


-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE IF NOT EXISTS `flight` (
  `fid` int(4) NOT NULL AUTO_INCREMENT,
  `flightno` varchar(30) DEFAULT NULL,
  `company` varchar(30) DEFAULT NULL,
  `fromcity` varchar(30) DEFAULT NULL,
  `from_atime` time DEFAULT NULL,
  `from_dtime` time DEFAULT NULL,
  `tocity` varchar(30) DEFAULT NULL,
  `to_atime` time DEFAULT NULL,
  `to_dtime` time DEFAULT NULL,
  `days` varchar(7) DEFAULT NULL,
  `seats_e` int(3) DEFAULT NULL,
  `seats_o` int(3) DEFAULT NULL,
  `fare_e` float(9,2) NOT NULL,
  `fare_b` float(9,2) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `flight`
--


-- --------------------------------------------------------

--
-- Table structure for table `pass_data`
--

CREATE TABLE IF NOT EXISTS `pass_data` (
  `pass_id` int(8) NOT NULL AUTO_INCREMENT,
  `book_id` int(4) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `fare` float(8,2) DEFAULT NULL,
  `class` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`pass_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pass_data`
--


-- --------------------------------------------------------

--
-- Table structure for table `siteuser`
--

CREATE TABLE IF NOT EXISTS `siteuser` (
  `username` varchar(30) NOT NULL,
  `pwd` varchar(100) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `sms_number` varchar(15) DEFAULT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siteuser`
--

INSERT INTO `siteuser` (`username`, `pwd`, `name`, `address`, `city`, `dateofbirth`, `gender`, `sms_number`, `role`) VALUES
('a', 'a', 'aa', 'sad', 'Bhopal', '2011-03-09', 'Male', '2321', 'Admin'),
('sachin', 'sachin', 'sachin', 'sachin\r\n', 'Bhopal', '2011-04-07', 'Male', '12121212', 'User');
