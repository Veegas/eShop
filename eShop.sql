-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 03, 2015 at 03:36 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eShop`
--

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE IF NOT EXISTS `Product` (
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text NOT NULL,
  `ID` int(11) NOT NULL,
  `photo` text,
  `product_name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`price`, `quantity`, `description`, `ID`, `photo`, `product_name`) VALUES
(200, 9, 'WOW', 1, 'img/feather.svg', 'Farkha'),
(200, 7, 'OMG', 2, 'img/chicken-hat.png', 'Deek'),
(300, 7, 'Best Ducks in Town', 3, 'img/duck-hat.jpg', 'Duck'),
(10, 9, 'Agwad anwa3 el ferakh', 4, 'img/chick-hat.jpg', 'Chick');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `email` text NOT NULL,
  `ID` int(11) NOT NULL,
  `password` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `avatar` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`email`, `ID`, `password`, `first_name`, `last_name`, `avatar`) VALUES
('test@test.com', 1, '*94BDCEBE19083CE2A1F959FD02F964C7AF4CFC29', 'test', 'test', '/img/cicken-hat.jpg'),
('test2@test.com', 2, '*7CEB3FDE5F7A9C4CE5FBE610D7D8EDA62EBE5F4E', 'Test', '2nd', '');

-- --------------------------------------------------------

--
-- Table structure for table `User_Product_Purchase`
--

CREATE TABLE IF NOT EXISTS `User_Product_Purchase` (
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User_Product_Purchase`
--

INSERT INTO `User_Product_Purchase` (`product_id`, `user_id`, `date`, `quantity`) VALUES
(2, 1, '2015-10-02 17:12:46', 2),
(4, 1, '2015-10-02 17:12:46', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `User_Product_Purchase`
--
ALTER TABLE `User_Product_Purchase`
  ADD KEY `Product_foreign` (`product_id`),
  ADD KEY `user_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `User_Product_Purchase`
--
ALTER TABLE `User_Product_Purchase`
  ADD CONSTRAINT `User_Product_Purchase_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `User` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `User_Product_Purchase_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `Product` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
