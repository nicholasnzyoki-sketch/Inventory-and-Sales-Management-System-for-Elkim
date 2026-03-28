-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 08, 2023 at 09:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartchem`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(50) NOT NULL,
  `userid` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `profile` varchar(250) DEFAULT NULL,
  `user_type` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `userid`, `fname`, `lname`, `email`, `password`, `profile`, `user_type`, `status`) VALUES
(1, 'ULNMYBK', 'paul', 'maluki', 'test@gmail.com', '123456', 'assets/images/default.png', '0', '0'),
(5, 'UVPCGWY', 'paul', 'maluki', 'tesee@gmail.com', '1234567', 'main_server/images/2ZMV71VpSAEoA_Wa9QWfu-transformed.webp', '1', '0'),
(6, 'UEPNWLU', 'mary', 'samy', 'mary@gmail.com', '12345678', 'assets/images/default.png', '1', '0'),
(7, 'ULAEMFT', 'shine', 'munyoki', 'shine@gmail.com', '12345678', 'main_server/images/Marketing Agency Square Ad Template - Made with PosterMyWall.jpg', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `catergory`
--

CREATE TABLE `catergory` (
  `id` int(50) NOT NULL,
  `catergory_id` varchar(50) DEFAULT NULL,
  `catergory_name` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catergory`
--

INSERT INTO `catergory` (`id`, `catergory_id`, `catergory_name`, `status`) VALUES
(1, 'CATBAIFNV', 'HHHQW', '0'),
(3, 'CATFXUCIK', 'hhh', '0'),
(4, 'CATWZABHD', 'hhh', '0'),
(7, 'CATMHPKWC', 'EAR', '0'),
(8, 'CATFWUVOR', 'EYE PRODUCTS', '0'),
(9, 'CATDIMVBF', 'DIABETES', '0'),
(10, 'CATSACRLJ', 'DIABETES', '0'),
(11, 'CATUWLMBZ', 'BLEEDING MEDICAL', '0'),
(12, 'CATRMNUWZ', 'BLEEDING MEDICAL', '0'),
(13, 'CATHMATDY', 'BLEEDING MEDICAL', '0'),
(14, 'CATNPMZWG', 'BLEEDING MEDICAL', '0'),
(15, 'CATDSIXFG', 'TEST', '0'),
(16, 'CATAMRXYN', '', '0'),
(17, 'CATXUJZDV', '', '0'),
(18, 'CATDLRJPZ', '', '0'),
(19, 'CATWZIAPR', '', '0'),
(20, 'CATYEWIMG', 'Oral care', '0'),
(21, 'CATMHEUSI', 'Reproductive health', '0'),
(22, 'CATZUJYRO', 'EYE PRODUCTSS', '0'),
(23, 'CATCOGLJY', 'EYE PRODUCTSS', '0'),
(24, 'CATVTFIYU', 'TEST1', '0'),
(25, 'CATRTXVPQ', 'TEST12', '0'),
(26, 'CATWGFVQI', 'MMMM', '0'),
(27, 'CATCVPFZB', 'DDDD', '0'),
(28, 'CATWNKRUX', 'PPHHH', '0'),
(29, 'CATGVCBWA', 'KKKK', '0'),
(30, 'CATXVKHOF', 'NNNNN', '0'),
(31, 'CATNSQEAI', 'PPHHH', '0'),
(32, 'CATOVKUSJ', 'CARLOSS', '0');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(50) NOT NULL,
  `c_id` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `note` varchar(250) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `c_id`, `fname`, `lname`, `email`, `contact`, `note`, `status`) VALUES
(1, 'CUSTWNDKJM', 'PAUL', 'MALUKI', 'deltibulte@gufum.com', '0757725548', 'REGULAR CUSTOMER', '0'),
(2, 'CUSTFANGYP', 'JOHN', 'MALUKI', 'deltibulte@gufum.com', '0757725548', 'REGULAR CUSTOMER', '0'),
(3, 'CUSTQCTBOJ', 'SHINE', 'SAMMY', 'deltibulte@gufum.com', '07577255481', 'HOW DO I LOAD CASH INTO MY VOOMA WALLET THROUGH THE VOOMA APP? · LAUNCH YOUR KCB APP ', '0'),
(4, 'CUSTAQURWT', 'MARY', 'SAMMY', 'deltibulte@gufum.com', '07577255481', 'HOW DO I LOAD CASH INTO MY VOOMA WALLET THROUGH THE VOOMA APP? · LAUNCH YOUR KCB APP ', '0'),
(5, 'CUSTWVDFCO', 'MARY', 'KATE', 'deltibulte@gufum.com', '07577255481', 'HOW DO I LOAD CASH INTO MY VOOMA WALLET THROUGH THE VOOMA APP? · LAUNCH YOUR KCB APP ', '0'),
(6, 'CUSTRMWIAG', 'ZIPORA', 'SAMMY', 'deltibulte@gufum.com', '07577255481', 'HOW DO I LOAD CASH INTO MY VOOMA WALLET THROUGH THE VOOMA APP? · LAUNCH YOUR KCB APP ', '0');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(20) NOT NULL,
  `product_id` varchar(50) DEFAULT NULL,
  `product_name` varchar(150) DEFAULT NULL,
  `product_generic` varchar(150) DEFAULT NULL,
  `product_catergory` varchar(50) DEFAULT NULL,
  `product_arrival` varchar(50) DEFAULT NULL,
  `product_expiry` varchar(50) DEFAULT NULL,
  `product_orgprice` varchar(50) DEFAULT NULL,
  `product_sellprice` varchar(50) DEFAULT NULL,
  `supplier` varchar(150) DEFAULT NULL,
  `quantity` int(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_id`, `product_name`, `product_generic`, `product_catergory`, `product_arrival`, `product_expiry`, `product_orgprice`, `product_sellprice`, `supplier`, `quantity`, `status`) VALUES
(1, 'PRORQAKNF', 'TEST HOW DO I I IUSIN', 'SSS', 'EYE PRODUCTS', '08/04/2023', '', '87', '45', 'BIDII PHARMECIES', 80, '0'),
(4, 'PROVAFYWB', 'How do I iterate over it using JavaScript?', '', '', '30/03/2023', '', '', '', 'productsupplier', 78, '0'),
(5, 'PROKYSXAD', 'probeta', 'probesa', 'EAR', '30/03/2023', '', '34', '57', 'productsupplier', 50, '0'),
(6, 'PRODREOUW', 'PANADOL', 'PANADOLS', 'EYE PRODUCTS', '02/04/2023', '', '45', '34', 'BIDII PHARMECIES', 6503, '0'),
(7, 'PROGCXKLM', 'MARA MOJA', 'KALUMA', 'BLEEDING MEDICAL', '30/03/2023', '', '8', '15', 'productsupplier', 20, '0'),
(8, 'PROQCGZDB', 'MARA MOJA2', '', 'EAR', '30/03/2023', '', '23', '34', 'productsupplier', 23, '0'),
(9, 'PROKCZABY', 'PARACITAMOL', 'PAIN KILLER', 'EAR', '30/03/2023', '', '24', '35', 'productsupplier', 45, '0'),
(10, 'PROLHVPBJ', 'PAIN KILLERS', '', 'REPRODUCTIVE HEALTH', '31/03/2023', '', '450', '500', 'BIDII PHARMECIES', 11, '0'),
(11, 'PROFHQSMU', 'CONDOM', 'CDS', 'DIABETES', '07/04/2023', '', '250', '300', 'MEDICAL SUPPLIER', 25, '0');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(50) NOT NULL,
  `sale_id` varchar(50) DEFAULT NULL,
  `customer` varchar(50) DEFAULT NULL,
  `product` varchar(50) DEFAULT NULL,
  `qty` varchar(50) DEFAULT NULL,
  `payment` varchar(50) DEFAULT NULL,
  `sale_date` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `sale_id`, `customer`, `product`, `qty`, `payment`, `sale_date`, `status`) VALUES
(1, 'SALMOQWECLP', 'CUSTWNDKJM', 'PRODREOUW', '1', 'CASH', '04-04-2023 14:12 PM', '0'),
(2, 'SALXAKLNEDS', 'CUSTWNDKJM', 'PROKCZABY', '3', 'CASH', '04-04-2023 14:12 PM', '0'),
(3, 'SALDVKUYIGL', 'CUSTWNDKJM', 'PRODREOUW', '1', 'CASH', '04-04-2023 14:12 PM', '0'),
(4, 'SALCIXRWYJB', 'CUSTWNDKJM', 'PROKCZABY', '3', 'CASH', '04-04-2023 14:12 PM', '0'),
(6, 'SALMCROVSAB', 'CUSTWVDFCO', 'PROLHVPBJ', '2', 'MOBILE MONEY', '04-04-2023 14:12 PM', '0'),
(7, 'SALTSVQNWKY', 'CUSTWVDFCO', 'PROLHVPBJ', '2', 'MOBILE MONEY', '04-04-2023 14:12 PM', '0'),
(8, 'SALBGFKPNVC', 'CUSTWVDFCO', 'PRODREOUW', '1', 'BANK TRANSER', '04-04-2023 14:12 PM', '0'),
(9, 'SALAQSVPBJZ', 'CUSTWNDKJM', 'PROQCGZDB', '1', 'BANK TRANSER', '04-04-2023 14:12 PM', '0'),
(10, 'SALVWCKLUPG', 'CUSTFANGYP', 'PRODREOUW', '1', 'BANK TRANSER', '04-04-2023 14:12 PM', '0'),
(12, 'SALVOGIKHYM', 'CUSTAQURWT', 'PROLHVPBJ', '2', 'MOBILE MONEY', '04-04-2023 14:12 PM', '0'),
(13, 'SALIVQXEWMH', 'CUSTWNDKJM', 'PROGCXKLM', '1', 'CASH', '04-04-2023 14:12 PM', '0'),
(14, 'SALNRGPHLQA', 'CUSTQCTBOJ', 'PROKCZABY', '1', 'BANK TRANSER', '04-04-2023 14:12 PM', '0'),
(15, 'SALSJUPHEVF', 'CUSTWNDKJM', 'PRODREOUW', '1', 'BANK TRANSER', '04-04-2023 14:12 PM', '0'),
(16, 'SALSTMOHUEA', 'CUSTWVDFCO', 'PROLHVPBJ', '1', 'MOBILE MONEY', '04-04-2023 14:12 PM', '0'),
(17, 'SALIAGQCOZR', 'CUSTWVDFCO', 'PRODREOUW', '3', 'MOBILE MONEY', '04-04-2023 14:12 PM', '0'),
(18, 'SALFXULZWSA', 'CUSTWVDFCO', 'PROKCZABY', '3', 'BANK TRANSER', '04-04-2023 14:12 PM', '0'),
(19, 'SALLQACBEHX', 'CUSTFANGYP', 'PRODREOUW', '1', 'BANK TRANSER', '04-04-2023 14:12 PM', '0'),
(20, 'SALFOHEUNBA', 'CUSTRMWIAG', 'PROGCXKLM', '3', 'BANK TRANSER', '04-04-2023 14:12 PM', '0'),
(21, 'SALDEZYKLCQ', 'CUSTRMWIAG', 'PRODREOUW', '1', 'BANK TRANSER', '04-04-2023 14:12 PM', '0'),
(22, 'SALXHBNKFSA', 'CUSTRMWIAG', 'PROKCZABY', '1', 'BANK TRANSER', '04-04-2023 14:12 PM', '0'),
(23, 'SALKJGRNCXF', 'CUSTRMWIAG', 'PROKCZABY', '1', 'BANK TRANSER', '04-04-2023 14:12 PM', '0'),
(24, 'SALTUJEQFKY', 'CUSTFANGYP', 'PRODREOUW', '1', 'BANK TRANSER', '04-04-2023 14:12 PM', '0'),
(25, 'SALRMLOPGQN', 'CUSTWNDKJM', 'PROGCXKLM', '1', 'CASH', '07-04-2023 19:08 PM', '0'),
(26, 'SALWUCSMQZG', 'CUSTQCTBOJ', 'PRODREOUW', '6', 'MOBILE MONEY', '07-04-2023 20:15 PM', '0'),
(27, 'SALMDCEZWBI', 'CUSTRMWIAG', 'PROFHQSMU', '3', 'CASH', '07-04-2023 20:52 PM', '0'),
(28, 'SALVSUFOIEG', 'CUSTAQURWT', 'PRODREOUW', '4', 'CASH', '08-04-2023 07:54 AM', '0');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(50) NOT NULL,
  `s_id` varchar(50) DEFAULT NULL,
  `sname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `note` varchar(250) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `s_id`, `sname`, `email`, `contact`, `note`, `status`) VALUES
(1, 'SUPSKREJC', 'MEDICAL SUPPLIER', 'test@gmail', '0757725548', '', '0'),
(2, 'SUPINPXRV', 'BIDII PHARMECIES', 'test@gmail.COM', '0757725523', '', '0'),
(4, 'SUPDPBTKL', 'QQQDDD', 'ddds@gmail.com', 'QQQQDDD', '', '0'),
(5, 'SUPYBJORN', 'EEWE', 'ewewewew@gmail.com', 'EWEWEW', 'EWEWEWEW', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `catergory`
--
ALTER TABLE `catergory`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cate_id` (`catergory_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `c_id` (`c_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `saleid` (`sale_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `s_id` (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `catergory`
--
ALTER TABLE `catergory`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
