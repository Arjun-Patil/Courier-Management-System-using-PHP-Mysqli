-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2021 at 02:05 PM
-- Server version: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courier`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`admin`@`localhost` PROCEDURE `insertDatai` (IN `sname` VARCHAR(30), IN `smobile` VARCHAR(12), IN `semail` VARCHAR(50), IN `saddress` VARCHAR(300), IN `rname` VARCHAR(30), IN `rmobile` VARCHAR(12), IN `remail` VARCHAR(50), IN `raddress` VARCHAR(300), IN `cost` DECIMAL(10,5), IN `description` VARCHAR(255), IN `trackingId` INT(11))  BEGIN
    
    	INSERT INTO senderInfo(trackingId,sname,smobile,semail,saddress) VALUES (trackingId,sname,smobile,semail,saddress);
        INSERT INTO receiverInfo(trackingId,rname,rmobile,remail,raddress) VALUES (trackingId,rname,rmobile,remail,raddress);
        INSERT INTO details (trackingId,cost,description) VALUES (trackingId,cost,description);
    
    END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$8AP9DQgfbSvrxp65H6uI6ehJJxkSFI0vIMv9TvzaXi76XibZ/KI9y');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `sno` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(355) DEFAULT NULL,
  `message` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`sno`, `name`, `email`, `subject`, `message`) VALUES
(1, 'vibha ', 'vibhask@gamil.com', 'atc', 'fvnnfhei hvuihv vnf vuhibf fefbf abhfbf abfhbfarh');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `cost` decimal(10,2) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `trackingId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `cost`, `description`, `trackingId`) VALUES
(5, '15000.00', 'Docs and Scripts', 927891),
(6, '600.00', 'Documents', 366376);

-- --------------------------------------------------------

--
-- Table structure for table `receiverInfo`
--

CREATE TABLE `receiverInfo` (
  `id` int(11) NOT NULL,
  `rname` varchar(55) DEFAULT NULL,
  `rmobile` varchar(12) DEFAULT NULL,
  `remail` varchar(55) DEFAULT NULL,
  `raddress` varchar(2000) DEFAULT NULL,
  `trackingId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receiverInfo`
--

INSERT INTO `receiverInfo` (`id`, `rname`, `rmobile`, `remail`, `raddress`, `trackingId`) VALUES
(7, 'Nikola', '9456231478', 'Nikola@gmail.com', 'Tarrok Manto street No 45, England', 927891),
(8, 'Papu', '5689741235', 'papu@gmail.com', 'lays road, kurkere nagar mubai', 366376);

-- --------------------------------------------------------

--
-- Table structure for table `senderInfo`
--

CREATE TABLE `senderInfo` (
  `trackingId` int(11) NOT NULL,
  `sname` varchar(55) DEFAULT NULL,
  `smobile` varchar(12) DEFAULT NULL,
  `semail` varchar(55) DEFAULT NULL,
  `saddress` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `senderInfo`
--

INSERT INTO `senderInfo` (`trackingId`, `sname`, `smobile`, `semail`, `saddress`) VALUES
(366376, 'John', '5462964978', 'John@gmil.com', 'lancy street , India'),
(927891, 'EMMA WATSON', '9562497852', 'emmawat@gmail.com', 'Haaret street 1234 cross-12, England');

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE `tracking` (
  `id` int(11) NOT NULL,
  `trackingId` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tracking`
--

INSERT INTO `tracking` (`id`, `trackingId`, `date`, `status`) VALUES
(1, 927891, '2021-01-10', 'Dispatched'),
(2, 927891, '2021-10-05', 'Reached nearest Hub'),
(3, 927891, '2021-10-10', 'Delivered'),
(4, 366376, '2021-01-29', 'Dispatched');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_senderdescription` (`trackingId`);

--
-- Indexes for table `receiverInfo`
--
ALTER TABLE `receiverInfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_sendereceiver` (`trackingId`);

--
-- Indexes for table `senderInfo`
--
ALTER TABLE `senderInfo`
  ADD PRIMARY KEY (`trackingId`);

--
-- Indexes for table `tracking`
--
ALTER TABLE `tracking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `receiverInfo`
--
ALTER TABLE `receiverInfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tracking`
--
ALTER TABLE `tracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `FK_senderdescription` FOREIGN KEY (`trackingId`) REFERENCES `senderInfo` (`trackingId`);

--
-- Constraints for table `receiverInfo`
--
ALTER TABLE `receiverInfo`
  ADD CONSTRAINT `FK_sendereceiver` FOREIGN KEY (`trackingId`) REFERENCES `senderInfo` (`trackingId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
