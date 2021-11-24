-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2021 at 10:25 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avpvgymy_erect1`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `sn` int(11) NOT NULL,
  `id` varchar(50) NOT NULL,
  `dollar` varchar(50) NOT NULL,
  `euro` varchar(50) NOT NULL,
  `bit` varchar(50) NOT NULL,
  `eth` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`sn`, `id`, `dollar`, `euro`, `bit`, `eth`) VALUES
(5, '9621921999', '0.0', '0.0', '0.0', '0.0'),
(7, '112788816849878806644', '0.0', '0.0', '2.55367', '0.0'),
(8, '117183156372634757436', '0.0', '0.0', '0.0', '0.0'),
(9, '2658161195', '0.0', '0.0', '0.0', '0.0'),
(10, '104752876112185585152', '0.0', '0.0', '0.0', '0.0'),
(11, '9310016060', '0.0', '0.0', '0.0', '0.0'),
(12, '9116204368', '0.0', '0.0', '0.0', '0.0'),
(13, '1531660223', '0.0', '0.0', '0.0', '0.0'),
(14, '6108300691', '0.0', '0.0', '0.0', '0.0'),
(15, '100986126757974858575', '0.0', '0.0', '0.0', '0.0'),
(16, '5321131663', '0.0', '0.0', '0.0', '0.0'),
(17, '6337613324', '0.0', '0.0', '0.0', '0.0'),
(18, '2796406361', '0.0', '0.0', '0.0', '0.0'),
(19, '102118268994535035469', '0.0', '0.0', '0.0', '0.0');

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'Solomon', 'boye', 'boye'),
(3, 'erectone_admin', 'erectone', 'erectoneofficer2021');

-- --------------------------------------------------------

--
-- Table structure for table `apis`
--

CREATE TABLE `apis` (
  `sn` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `public` varchar(1000) DEFAULT NULL,
  `private` varchar(1000) DEFAULT NULL,
  `redirect` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apis`
--

INSERT INTO `apis` (`sn`, `name`, `public`, `private`, `redirect`) VALUES
(1, 'google', '818881695167-96f0chbv1pctnltdcf2n8kunrkctqei3.apps.googleusercontent.com', 'rdquOpaJHjbW3Qkbs-6tM97G', 'https://erect1.org/app/googleapi.php'),
(2, 'facebook', '2d86a2195bf92a7515065c69d1041221', '174465544659598', 'http://localhost/erect1/app/facebook.php'),
(3, 'stripe', NULL, 'sk_test_51JB7jpG61ITNwdfRCiJ1FMnTBU0wxdddK5tmKoE9oWuMI8AqjdFw0RY15h8Grag5sdNVwGHptd9iQM7dtjzfv0LL00TrMyEhXs', NULL),
(4, 'paystack', 'pk_test_99d69caec3f4f9bcf55f1f96a7c89a5653e2d80c', 'sk_test_98da44136d9c75dc67f3124016fdec282daf82bb', NULL),
(5, 'block', NULL, '4d8aqIyt8DLGaVFc0DBvhXQJybJTcaH5DfuXpqP7kk0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `btc_transaction`
--

CREATE TABLE `btc_transaction` (
  `id` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `emailid` varchar(255) DEFAULT NULL,
  `satoshi` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `xpub` varchar(255) DEFAULT NULL,
  `timestamp` varchar(255) DEFAULT NULL,
  `uuid` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `txid` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `paid_satoshi` varchar(255) DEFAULT NULL,
  `date time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `myid` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `btc_transaction`
--

INSERT INTO `btc_transaction` (`id`, `status`, `emailid`, `satoshi`, `description`, `xpub`, `timestamp`, `uuid`, `value`, `txid`, `currency`, `code`, `address`, `paid_satoshi`, `date time`, `myid`) VALUES
(1, '0', 'riolandadedamola@gmail.com', '3367354', NULL, 'xpub6DKXyh1nJgzt57LSv8239YUViJY6eMY6p7Z8jkaYr9z8qiccZaXo39BLdVim6zpRrjSMyLfCrqoxp9BXG39K7xdVhuvXcNjxNkE7NB1WJrQ', '1626823588', '8faa0efd25db45b88338', '1000', NULL, 'USD', 'Deposit', '19ChBRQQCvojfxomwG3f7HajqTzdHm2MZu', '0', '2021-07-28 14:36:44', '1'),
(2, '2', 'riolandadedamola@gmail.com', '24764', '', 'xpub6Caq7RLvv1f4Gh9REASyrm7a1CMfBiZfkuPGtv5TL8n6mpURPu89K1E5t5dwzXuRfuJRZujZt9c2Kc7UZSfceHcay54sf4JrpnXwrC2dBBf', '1627502275', 'c092e38675da42748808', '10', 'WarningThisIsAGeneratedTestPaymentAndNotARealBitcoinTransaction', 'USD', 'Deposit', '16XJV8nQ24niec8eXQmCXjsm4RWk2XEJAa', '9876000', '2021-07-28 20:03:58', '104752876112185585152'),
(3, '2', 'riolandadedamola@gmail.com', '24764', '', 'xpub6Caq7RLvv1f4Gh9REASyrm7a1CMfBiZfkuPGtv5TL8n6mpURPu89K1E5t5dwzXuRfuJRZujZt9c2Kc7UZSfceHcay54sf4JrpnXwrC2dBBf', '1627502275', 'c092e38675da42748808', '10', 'WarningThisIsAGeneratedTestPaymentAndNotARealBitcoinTransaction', 'USD', 'Deposit', '16XJV8nQ24niec8eXQmCXjsm4RWk2XEJAa', '9876000', '2021-07-28 20:07:46', '104752876112185585152'),
(4, '2', 'riolandadedamola@gmail.com', '24764', '', 'xpub6Caq7RLvv1f4Gh9REASyrm7a1CMfBiZfkuPGtv5TL8n6mpURPu89K1E5t5dwzXuRfuJRZujZt9c2Kc7UZSfceHcay54sf4JrpnXwrC2dBBf', '1627502275', 'c092e38675da42748808', '10', 'WarningThisIsAGeneratedTestPaymentAndNotARealBitcoinTransaction', 'USD', 'Deposit', '16XJV8nQ24niec8eXQmCXjsm4RWk2XEJAa', '9876000', '2021-07-28 20:08:14', '104752876112185585152'),
(5, '2', 'riolandadedamola@gmail.com', '24764', '', 'xpub6Caq7RLvv1f4Gh9REASyrm7a1CMfBiZfkuPGtv5TL8n6mpURPu89K1E5t5dwzXuRfuJRZujZt9c2Kc7UZSfceHcay54sf4JrpnXwrC2dBBf', '1627502275', 'c092e38675da42748808', '10', 'WarningThisIsAGeneratedTestPaymentAndNotARealBitcoinTransaction', 'USD', 'Deposit', '16XJV8nQ24niec8eXQmCXjsm4RWk2XEJAa', '9876000', '2021-07-28 20:09:18', '104752876112185585152'),
(6, '2', 'riolandadedamola@gmail.com', '24764', '', 'xpub6Caq7RLvv1f4Gh9REASyrm7a1CMfBiZfkuPGtv5TL8n6mpURPu89K1E5t5dwzXuRfuJRZujZt9c2Kc7UZSfceHcay54sf4JrpnXwrC2dBBf', '1627502275', 'c092e38675da42748808', '10', 'WarningThisIsAGeneratedTestPaymentAndNotARealBitcoinTransaction', 'USD', 'Deposit', '16XJV8nQ24niec8eXQmCXjsm4RWk2XEJAa', '9876000', '2021-07-28 20:09:46', '104752876112185585152'),
(8, '1', 'riolandadedamola@gmail.com', '25238', '', 'xpub6Caq7RLvv1f4Gh9REASyrm7a1CMfBiZfkuPGtv5TL8n6mpURPu89K1E5t5dwzXuRfuJRZujZt9c2Kc7UZSfceHcay54sf4JrpnXwrC2dBBf', '1627520497', '005dabc2118b48c583c7', '10', 'WarningThisIsAGeneratedTestPaymentAndNotARealBitcoinTransaction', 'USD', 'Deposit', '184ejk3FRE193PWcvBb5EskDTfopwcQeen', '8000000000', '2021-07-29 01:02:30', '1');

-- --------------------------------------------------------

--
-- Table structure for table `campain`
--

CREATE TABLE `campain` (
  `id` int(11) NOT NULL,
  `mode` varchar(69) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campain`
--

INSERT INTO `campain` (`id`, `mode`, `amount`, `date`) VALUES
(1, 'f', '200', '2021-08-01 10:12:31'),
(2, 's', '500', '2021-08-01 10:12:31'),
(3, 't', '1000', '2021-08-01 10:13:02');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `sn` int(11) NOT NULL,
  `id` varchar(100) DEFAULT NULL,
  `card_number` varchar(100) DEFAULT NULL,
  `expedite` varchar(100) DEFAULT NULL,
  `ccv` varchar(100) DEFAULT NULL,
  `address1` text,
  `address2` text,
  `town` varchar(255) DEFAULT NULL,
  `postcode` varchar(20) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`sn`, `id`, `card_number`, `expedite`, `ccv`, `address1`, `address2`, `town`, `postcode`, `country`, `phone`) VALUES
(1, '115887394515989524739', '43245324565461546', '19/24', '567', NULL, NULL, NULL, NULL, NULL, NULL),
(2, '115887394515989524739', '33344677746667367377', '12/24', '778', NULL, NULL, NULL, NULL, NULL, NULL),
(3, '115887394515989524739', '3546636636335353', '12/25', '123', NULL, NULL, NULL, NULL, NULL, NULL),
(4, '115887394515989524739', '4544545454545454545', '06/45', '6767', NULL, NULL, NULL, NULL, NULL, NULL),
(5, '115887394515989524739', '4544545454545454545', '06/45', '6767', NULL, NULL, NULL, NULL, NULL, NULL),
(6, '112788816849878806644', '4544545454545454545', '44/88', '445', NULL, NULL, NULL, NULL, NULL, NULL),
(0, '112788816849878806644', '4544545454545454545', '02/23', '779', 'no7 okeyimi street Ado Ekiti', 'Okeyinmi', 'Ado', '360211', 'Nigeria', '08149916721'),
(0, '112788816849878806644', '4544545454545454545', '02/23', '779', 'no7 okeyimi street Ado Ekiti', 'Okeyinmi', 'Ado', '360211', 'Nigeria', '08149916721'),
(0, '112788816849878806644', '4544545454545454545', '02/23', '779', 'no7 okeyimi street Ado Ekiti', 'Okeyinmi', 'Ado', '360211', 'Nigeria', '08149916721'),
(0, '112788816849878806644', '4544545454545454545', '02/23', '779', 'no7 okeyimi street Ado Ekiti', 'Okeyinmi', 'Ado', '360211', 'Nigeria', '08149916721'),
(0, '112788816849878806644', '4544545454545454545', '02/23', 'ooo', 'no7 okeyimi street Ado Ekiti', 'Okeyinmi', 'Ado', '360211', 'Nigeria', '08149916721'),
(0, '112788816849878806644', '4544545454545454545', '02/23', 'ooo', 'no7 okeyimi street Ado Ekiti', 'Okeyinmi', 'Ado', '360211', 'Nigeria', '08149916721'),
(0, NULL, '4544545454545454545', '5656', '111', 'no7 okeyimi street Ado Ekiti', 'Okeyinmi', 'Ado', '360211', 'Nigeria', '08149916721'),
(0, '112788816849878806644', '4544545454545454545', '02/23', '999', 'no7 okeyimi street Ado Ekiti', 'Okeyinmi', 'Ado', '360211', 'Nigeria', '08149916721');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `code` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `price` double NOT NULL,
  `status` int(11) NOT NULL,
  `uid` varchar(256) NOT NULL,
  `ip` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `code`, `address`, `price`, `status`, `uid`, `ip`) VALUES
(1, 'DSz7W2wDggRWUtqaC7xhZbHZU', '14Y3mQdRkyQnhC3t5LqYFomfw76enmqA7L', 0.00041, -1, '112788816849878806644', '105.112.99.35'),
(2, 'gNvtSSlnPCaOo1MKqT21j5pX2', '15CRHHgyHEyUxBnbjKTjMyeZYdLtzZeFjD', 0.00124, -1, '112788816849878806644', '105.112.99.35'),
(3, 'durIht9dD4XzEKJzbj5jVyd7n', '1K248AbZVmmziJKBi6NdeVGkdFkjpJpskJ', 0.00124, 2, '112788816849878806644', '105.112.102.129'),
(4, 'Th01Ml3zy7LPMwS0be0jY92Hc', '1PE7ukLEKSkwMxizCtwRBKQRZRjXrzGBd7', 0.03719, -1, '9116204368', '197.210.29.201'),
(5, 'j0000B4XZ4wGmlVgqrTm2JJ8z', '1ENwwGCYPgMARSJNeWyq4hALEEFATXw6BD', 0.01857, -1, '9116204368', '197.210.29.201'),
(6, 'w0kC4KNUUgBQvemSRZYN5jh3V', '177C28deaQgBHm5EMfZtPdFBEEzphUjmw3', 0.00002, -1, '3', '129.205.124.82'),
(7, 'DYD0qz2oDGHvZjLhA1mfpnIlb', '177C28deaQgBHm5EMfZtPdFBEEzphUjmw3', 0.01899, -1, '3', '129.205.124.82'),
(8, '58QcyONPL4GJQP7jFCaU8m0M7', '177C28deaQgBHm5EMfZtPdFBEEzphUjmw3', 1.568, -1, '2796406361', '129.205.124.82'),
(9, '5SWumkFEVkrNj2gQhx2PkHzPa', '177C28deaQgBHm5EMfZtPdFBEEzphUjmw3', 1.57081, -1, '2796406361', '129.205.124.82'),
(10, 'o45MEdggC1s9eGONW2PNquBBF', '177C28deaQgBHm5EMfZtPdFBEEzphUjmw3', 1.57081, -1, '2796406361', '129.205.124.82'),
(11, 'tGL7MIHL5HPY0GqDyTZc5FsT0', '177C28deaQgBHm5EMfZtPdFBEEzphUjmw3', 1.57081, -1, '2796406361', '129.205.124.82');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `reciverid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `broadcast` text COLLATE utf8_unicode_ci NOT NULL,
  `isPub` tinyint(1) NOT NULL,
  `broadcastdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments_trasact`
--

CREATE TABLE `payments_trasact` (
  `id` int(11) NOT NULL,
  `txid` varchar(256) DEFAULT NULL,
  `addr` varchar(256) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `mid` varchar(255) DEFAULT NULL,
  `uid` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments_trasact`
--

INSERT INTO `payments_trasact` (`id`, `txid`, `addr`, `value`, `status`, `mid`, `uid`) VALUES
(1, 'WarningThisIsAGeneratedTestPaymentAndNotARealBitcoinTransaction', '16XJV8nQ24niec8eXQmCXjsm4RWk2XEJAa', 151259, 2, '1', NULL),
(0, 'WarningThisIsAGeneratedTestPaymentAndNotARealBitcoinTransaction', '1K248AbZVmmziJKBi6NdeVGkdFkjpJpskJ', 124000, 1, NULL, NULL),
(0, 'WarningThisIsAGeneratedTestPaymentAndNotARealBitcoinTransaction', '1K248AbZVmmziJKBi6NdeVGkdFkjpJpskJ', 124000, 1, '112788816849878806644', NULL),
(0, 'WarningThisIsAGeneratedTestPaymentAndNotARealBitcoinTransaction', '1K248AbZVmmziJKBi6NdeVGkdFkjpJpskJ', 124000, 2, NULL, NULL),
(0, 'WarningThisIsAGeneratedTestPaymentAndNotARealBitcoinTransaction', '1K248AbZVmmziJKBi6NdeVGkdFkjpJpskJ', 124000, 2, '112788816849878806644', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `tid` int(11) NOT NULL,
  `uid` varchar(500) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  `reference` varchar(400) DEFAULT NULL,
  `status` varchar(300) DEFAULT NULL,
  `trans` varchar(500) DEFAULT NULL,
  `transaction` varchar(255) DEFAULT NULL,
  `trxref` varchar(255) DEFAULT NULL,
  `orderdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `amount` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`tid`, `uid`, `message`, `reference`, `status`, `trans`, `transaction`, `trxref`, `orderdate`, `amount`) VALUES
(2, '115887394515989524739', 'Approved', '201891259', 'success', '1221325955', '1221325955', '201891259', '2021-07-16 17:21:54', ''),
(3, '115887394515989524739', 'Approved', '648046545', 'success', '1221334901', '1221334901', '648046545', '2021-07-16 17:30:32', '100000'),
(4, '115887394515989524739', 'Approved', '80474061', 'success', '1221342519', '1221342519', '80474061', '2021-07-16 17:38:31', '100000'),
(5, '115887394515989524739', 'Approved', '744983751', 'success', '1221344096', '1221344096', '744983751', '2021-07-16 17:39:29', '100000'),
(6, '115887394515989524739', 'Approved', '379342210', 'success', '1221344568', '1221344568', '379342210', '2021-07-16 17:39:58', '100000'),
(7, '115887394515989524739', NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-01 08:05:08', '60'),
(8, '115887394515989524739', 'Approved', '396083710', 'success', '1245993501', '1245993501', '396083710', '2021-08-01 08:09:53', '60');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sn` int(11) NOT NULL,
  `id` varchar(40) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `country` varchar(1000) NOT NULL,
  `auth_token` varchar(1000) DEFAULT NULL,
  `reset_pass_token` varchar(500) DEFAULT NULL,
  `token_date` varchar(1000) DEFAULT NULL,
  `is_verify` tinyint(1) DEFAULT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `picture` varchar(1000) DEFAULT NULL,
  `gender` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sn`, `id`, `email`, `password`, `country`, `auth_token`, `reset_pass_token`, `token_date`, `is_verify`, `name`, `picture`, `gender`, `created_at`) VALUES
(1, '9621921999', 'riotech2222@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Nigeria', 'gk2@8mb#wj3t9xy1ald0fu6z74phionrec5qsv', '259437', '2021-08-19 16:12:00', NULL, NULL, NULL, NULL, '2021-08-17 17:06:39'),
(3, '112788816849878806644', 'riolandadedamola@gmail.com', '9360994a524e6e0442fa17efb75bf499', 'Nigeria', '564819', '619475', '2021-08-30 03:15:47', 1, 'Adedamola Rioland', 'https://lh3.googleusercontent.com/a/AATXAJx96qGEWsO9wk0l0yv6Hg3m6gINFgiuDBliikzB=s96-c', NULL, '2021-08-24 07:55:51'),
(4, '117183156372634757436', 'aiibolajohnson@gmail.com', '43f1915c2b8abd7e49062dcbdf34e29b', 'United Kingdom', '6#ac@p3zwegdst7y0ob52hjku81ixmrqvl4fn9', NULL, NULL, NULL, 'Aiibola Johnson', 'https://lh3.googleusercontent.com/a/AATXAJxMr0NVhjgv_HgGOb7mpV_-9W354IKNWsLUq6Za=s96-c', NULL, '2021-08-24 18:39:02'),
(5, '2658161195', 'jefferystud@protonmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Nigeria', 'abkowtir36c58qpf9e#x0vlgm@dyuj4s21nhz7', NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-25 01:40:11'),
(6, '104752876112185585152', 'riotech2222@gmail.com', '7386ce9f967e85d9ae206932920045e1', 'Nigeria', 'j4bfkx9lyu6#de83r0thnzg@2vais1pom57wqc', NULL, NULL, NULL, 'Rio Tech', 'https://lh3.googleusercontent.com/a/AATXAJytmBsEzdsiWnAmky0xPbw4EMg_135o57T7ziVS=s96-c', NULL, '2021-08-25 21:46:42'),
(7, '9310016060', 'ajibobo52@gmail.com', 'c7671082be460c11fad56e07e4cc5b97', 'United States', 'yr794h@amkfwx0t8ig516o2bjpcd#uzesqvnl3', '674835', '2021-08-27 18:38:58', NULL, NULL, NULL, NULL, '2021-08-27 23:28:20'),
(8, '9116204368', 'Frankrich101@gmail.com', '9651fae69f7552171fed83dd5674cbb1', 'Nigeria', 'ipv8ho#4ug7wmbfzqtcd5r6j3l@a1902keyxsn', '329164', '2021-08-29 10:04:48', NULL, NULL, NULL, NULL, '2021-08-29 14:59:28'),
(9, '1531660223', 'Frankisrichard101@gmail.com', '9651fae69f7552171fed83dd5674cbb1', 'Nigeria', '931485', NULL, '2021-08-29 10:54:57', 1, NULL, NULL, NULL, '2021-08-29 15:51:56'),
(10, '6108300691', '1o8gbyv21y@bestparadize.com', 'adab7aeb178730c86d18f3331ec55fe0', 'Unknown', 's@wl0bqi1hpx#od4g6runm9zfjy5k82c3veta7', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-07 10:01:46'),
(11, '100986126757974858575', 'aribigbolakayode@gmail.com', '5b8693f73f160329d2b4bb42f971f21f', 'Nigeria', '481736', NULL, '2021-09-23 10:21:25', NULL, 'aribigbola kayode', 'https://lh3.googleusercontent.com/a/AATXAJzh_dTevVy8zsx9IcccvTuxQFQgMsTe5gvBrz8z=s96-c', NULL, '2021-09-23 15:04:46'),
(12, '5321131663', 'odinnlol@yahoo.com', 'c42f0a4702347bb830bd39fdcbf594a8', 'Morocco', '4zymukphrt8gnwld53@0xeqs6#1f9bav7jic2o', '246517', '2021-10-01 17:20:16', NULL, NULL, NULL, NULL, '2021-10-01 22:15:13'),
(13, '6337613324', 'iayomitunde@yahoo.com', '96e79218965eb72c92a549dd5a330112', 'Nigeria', 'fag58xd9r4c#36@qvkw7epmsj10tounhzylb2i', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-20 09:48:56'),
(14, '2796406361', 'carminasantoliexo89@gmail.com', 'c7671082be460c11fad56e07e4cc5b97', 'Nigeria', '37xsh4wltym8ojdfvri1penb609ua#cz52gq@k', NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-13 09:01:02'),
(15, '102118268994535035469', 'frankisrichard101@gmail.com', '9a761767feb460fce09e03a1a51606a5', 'Nigeria', '2z@hv8lbr10w#g4a9m7ks6fceiodjyntqu3p5x', NULL, NULL, NULL, 'Frank Richard', 'https://lh3.googleusercontent.com/a/AATXAJzh2zb4w_q-K0h58qXmkp-I7kaNTcUCkD87FYpL=s96-c', NULL, '2021-11-17 08:19:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
