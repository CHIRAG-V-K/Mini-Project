-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 19, 2021 at 06:10 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_management`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `insertData`$$
CREATE DEFINER=`login`@`localhost` PROCEDURE `insertData` (IN `firstName` VARCHAR(100), IN `lastName` VARCHAR(100), IN `Email` VARCHAR(100), IN `Password` VARCHAR(50), IN `Phone` VARCHAR(10), IN `Gender` VARCHAR(10), IN `location` VARCHAR(250), IN `Dob` DATE)  BEGIN
INSERT INTO patient(firstname, lastname, email, p_password, phone, gender, location, dob) VALUES (firstName, lastName, Email, Password, Phone, Gender, Location, Dob);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ad_id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ad_password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `firstname`, `lastname`, `email`, `ad_password`, `phone`, `gender`, `address`, `date`) VALUES
(1, 'chirag', 'v k', 'chirag.v.k2@gmail.com', 'chirag', '6362752166', 'male', 'india', '2020-12-17 07:04:44');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `ap_id` int NOT NULL AUTO_INCREMENT,
  `ap_date` date NOT NULL,
  `ap_time` time NOT NULL,
  `d_role` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `d_fee` int NOT NULL,
  `d_id` int NOT NULL,
  `message` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `p_id` int NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `patientstatus` int NOT NULL,
  `doctorstatus` int NOT NULL,
  PRIMARY KEY (`ap_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`ap_id`, `ap_date`, `ap_time`, `d_role`, `d_fee`, `d_id`, `message`, `p_id`, `date`, `patientstatus`, `doctorstatus`) VALUES
(1, '2021-01-07', '01:00:00', 'physiotherapist', 350, 2, 'cold', 1, '2021-01-06 18:01:08', 1, 1),
(4, '2021-01-15', '07:40:00', 'dentist', 500, 1, 'i need to have root canal', 4, '2021-01-08 09:10:02', 1, 0),
(5, '2021-01-10', '12:45:00', 'Physiotherapist', 500, 3, 'I have high fever', 2, '2021-01-09 18:13:57', 0, 1),
(6, '2021-01-12', '14:29:00', 'Dentist', 500, 1, 'hi riya', 2, '2021-01-09 18:57:53', 1, 0),
(7, '2021-02-01', '10:25:00', 'Nueralogist', 1500, 4, 'i have tumor', 5, '2021-01-10 15:54:53', 0, 0),
(8, '2021-01-12', '12:00:00', 'consultant', 500, 6, 'I have doubt regaurding my sexual life. ', 6, '2021-01-10 17:26:40', 0, 0),
(9, '2021-01-21', '16:00:00', 'Dentist', 500, 1, 'I have tooth ache', 6, '2021-01-10 17:29:15', 0, 1),
(10, '2021-01-22', '16:20:00', 'Nueralogist', 1500, 4, 'hjkhjh', 0, '2021-01-14 10:47:01', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `d_id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `d_password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `d_role` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `d_fee` int NOT NULL,
  `dob` date NOT NULL,
  `ad_id` int NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`d_id`, `firstname`, `lastname`, `email`, `d_password`, `phone`, `gender`, `address`, `d_role`, `d_fee`, `dob`, `ad_id`, `date`) VALUES
(1, 'Riya', 'Choudary', 'riya@gmail.com', 'riya', '6354219856', 'female', 'varansi,up.', 'Dentist', 500, '1993-11-02', 1, '2021-01-07 21:05:56'),
(3, 'Gaurav', 'yadav', 'Gaurav@gmail.com', '123123123', '6525625622', 'male', 'bangalore', 'Physiotherapist', 500, '1995-04-02', 1, '2021-01-09 18:00:46'),
(4, 'poornima', 'rai', 'poornima@gmail.com', 'poornima', '8875884566', 'female', 'gulbarga', 'Nueralogist', 1500, '1980-11-02', 1, '2021-01-09 18:05:02'),
(5, 'GOLU', 'pandey', 'golu@gmail.com', 'golu', '9875641235', 'male', 'P598/1 7th camp ,Air force station ,Jalahalli east', 'Pediatrition', 400, '1980-06-25', 0, '2021-01-10 16:28:55'),
(6, 'Shubham', 'Doobey', 'doobey@gmail.com', 'doobey', '8787654565', 'male', 'Uttar Pradesh', 'consultant', 500, '1992-11-24', 0, '2021-01-10 16:33:44');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `p_id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `p_password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `location` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dob` date NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `firstname`, `lastname`, `email`, `p_password`, `phone`, `gender`, `location`, `dob`, `date`) VALUES
(1, 'tejas', 'kumar', 'tejas@gmail.com', 'tejas', '54545446', 'male', 'bangalore', '2020-11-11', '2021-01-08 08:38:06'),
(2, 'Vinayak', 'belagavi', 'vinayak@gmail.com', 'vinayak', '7406535290', 'male', 'belagavi', '2000-06-19', '2021-01-09 18:09:50'),
(4, 'garima', 'yadav', 'garima@gmail.com', 'garima', '6363132467', 'female', 'bangalore', '2000-02-14', '2021-01-15 07:32:22'),
(5, 'govinda', 'poojari', 'govinda@gmail.com', 'govinda', '8565456545', 'male', 'bangalore', '1999-12-05', '2021-01-10 15:53:11'),
(7, 'saritha', 'I l', 'saritha@gmail.com', 'saritha', '656565232', 'female', 'bangalore', '2000-08-11', '2021-01-14 09:17:37'),
(8, 'ramu', 'kaka', 'ramu@gmail.com', 'ramu', '998877665', 'male', 'bangalore', '2000-09-12', '2021-01-14 09:22:22'),
(30, 'rocky', 'bhau', 'cef@gmail.com', 'garima', '5678965424', 'male', 'klsjouosy', '2021-01-06', '2021-01-19 05:58:19'),
(31, 'rocky', 'bhau', 'gwrg@gmail.com', 'riya', '5678965424', 'male', 'klsjouosy', '2021-01-06', '2021-01-19 06:00:45'),
(32, 'rocky', 'bhau', 'grg@gmail.com', 'tw4t', '5678965424', 'male', 'klsjouosy', '2021-01-06', '2021-01-19 06:02:37');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

DROP TABLE IF EXISTS `prescription`;
CREATE TABLE IF NOT EXISTS `prescription` (
  `pre_id` int NOT NULL AUTO_INCREMENT,
  `med_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `med_count` int NOT NULL,
  `med_dose` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `message` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `d_id` int NOT NULL,
  `p_id` int NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`pre_id`, `med_name`, `med_count`, `med_dose`, `message`, `d_id`, `p_id`, `date`) VALUES
(1, 'Dolo150', 2, '0-0-1', 'take it daily', 1, 4, '2021-01-14 19:18:55'),
(2, 'paracetamol', 2, '1-0-1', 'daily', 1, 1, '2021-01-14 19:24:03'),
(3, 'vfgrgwrg', 5, '1-0-1', '', 1, 4, '2021-01-18 08:07:51');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
