-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2021 at 05:39 AM
-- Server version: 5.1.68-community
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database:  vegdb 
--
CREATE DATABASE IF NOT EXISTS  vegdb  DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE  vegdb ;

-- --------------------------------------------------------

--
-- Table structure for table  adminlogin 
--

CREATE TABLE IF NOT EXISTS  adminlogin  (
   username  varchar(50) NOT NULL,
   password  varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table  adminlogin 
--

INSERT INTO  adminlogin  ( username ,  password ) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table  buy 
--

CREATE TABLE IF NOT EXISTS  buy  (
   orderno  SERIAL,
   username  varchar(20) NOT NULL,
   vid  int NOT NULL,
   price  int NOT NULL,
   weight  real NOT NULL,
   amount  real NOT NULL,
   deladdr  varchar(200) NOT NULL,
  PRIMARY KEY ( orderno )
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table  buy 
--

INSERT INTO  buy  ( orderno ,  username ,  vid ,  price ,  weight ,  amount ,  deladdr ) VALUES
(4, 'divya', 2, 20, 1, 20, 'satara');

-- --------------------------------------------------------

--
-- Table structure for table  feedback 
--

CREATE TABLE IF NOT EXISTS  feedback  (
   emailid  varchar(50) NOT NULL,
   fdet  varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table  feedback 
--

INSERT INTO  feedback  ( emailid ,  fdet ) VALUES
('abc@yahoo.com', 'very nice taste'),
('abc@yahoo.com', 'nice');

-- --------------------------------------------------------

--
-- Table structure for table  payment 
--

CREATE TABLE IF NOT EXISTS  payment  (
   amount  int NOT NULL,
   mode  varchar(30) NOT NULL,
   num  int NOT NULL,
   username  varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table  payment 
--

INSERT INTO  payment  ( amount ,  mode ,  num ,  username ) VALUES
(5000, 'COD', 0, 'hema'),
(20, 'COD', 20, 'divya');

-- --------------------------------------------------------

--
-- Table structure for table  register 
--

CREATE TABLE IF NOT EXISTS  register  (
   name  varchar(20) DEFAULT NULL,
   address  varchar(100) DEFAULT NULL,
   contactno  varchar(15) DEFAULT NULL,
   username  varchar(20) DEFAULT NULL,
   password  varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table  register 
--

INSERT INTO  register  ( name ,  address ,  contactno ,  username ,  password ) VALUES
('hema mane', 'satara', '8989898989', 'hema', '12345'),
('tushar', 'satara', '7777777777', 'tushar', '123'),
('divya', 'satara', '7878787878', 'divya', '123');

-- --------------------------------------------------------

--
-- Table structure for table  veg 
--

CREATE TABLE IF NOT EXISTS  veg  (
   vid  SERIAL,
   vtype  varchar(30) NOT NULL,
   vimg  varchar(500) NOT NULL,
   price  int NOT NULL,
   vname  varchar(30) NOT NULL,
  PRIMARY KEY ( vid )
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table  veg 
--

INSERT INTO  veg  ( vid ,  vtype ,  vimg ,  price ,  vname ) VALUES
(2, 'leafy', 'sp1.jpg', 20, 'Spinach'),
(3, 'cru', 'cauli.jpg', 10, 'Cauliflower'),
(4, 'cru', 'p1.jpg', 20, 'peas');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
