-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 22 jan 2018 om 16:47
-- Serverversie: 10.1.30-MariaDB
-- PHP-versie: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `completed_orders`
--

CREATE TABLE `completed_orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ordered_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `completed_orders`
--

INSERT INTO `completed_orders` (`id`, `user_id`, `ordered_at`) VALUES
(1, 8, '2018-01-17 15:18:11'),
(2, 12, '2018-01-17 22:33:58'),
(3, 12, '2018-01-21 20:38:58'),
(4, 12, '2018-01-21 20:38:58'),
(5, 12, '2018-01-21 21:59:24'),
(6, 12, '2018-01-21 22:31:28'),
(7, 12, '2018-01-21 22:35:04'),
(8, 12, '2018-01-21 22:37:03'),
(9, 12, '2018-01-21 22:40:52'),
(10, 12, '2018-01-21 22:44:35'),
(11, 12, '2018-01-21 22:48:35'),
(12, 12, '2018-01-21 22:54:07'),
(13, 12, '2018-01-21 22:58:08'),
(14, 12, '2018-01-21 23:00:13'),
(15, 12, '2018-01-21 23:01:17'),
(16, 12, '2018-01-21 23:01:26'),
(17, 12, '2018-01-21 23:01:52'),
(18, 12, '2018-01-21 23:02:12'),
(19, 12, '2018-01-21 23:05:26'),
(20, 12, '2018-01-21 23:07:16'),
(21, 12, '2018-01-21 23:08:15'),
(22, 12, '2018-01-21 23:09:29'),
(23, 12, '2018-01-21 23:09:37'),
(24, 12, '2018-01-21 23:17:40'),
(25, 12, '2018-01-21 23:18:12'),
(26, 12, '2018-01-21 23:19:10'),
(27, 12, '2018-01-21 23:19:39'),
(28, 12, '2018-01-21 23:20:50'),
(29, 12, '2018-01-21 23:21:14'),
(30, 12, '2018-01-21 23:24:16'),
(31, 12, '2018-01-21 23:24:48'),
(32, 12, '2018-01-21 23:24:59'),
(33, 12, '2018-01-21 23:29:29'),
(34, 12, '2018-01-21 23:32:06'),
(35, 12, '2018-01-21 23:32:17'),
(36, 12, '2018-01-21 23:35:00'),
(37, 12, '2018-01-21 23:36:11'),
(38, 12, '2018-01-21 23:38:17'),
(39, 12, '2018-01-21 23:45:14'),
(40, 13, '2018-01-21 23:49:18'),
(41, 13, '2018-01-21 23:53:09'),
(42, 13, '2018-01-21 23:55:35'),
(43, 13, '2018-01-21 23:56:25'),
(44, 14, '2018-01-21 23:58:11'),
(45, 14, '2018-01-22 00:02:07'),
(46, 14, '2018-01-22 03:30:05'),
(47, 14, '2018-01-22 03:30:51'),
(48, 14, '2018-01-22 05:33:36');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `completed_orders_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `afgehaald` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `order_details`
--

INSERT INTO `order_details` (`id`, `product_id`, `product_price`, `quantity`, `completed_orders_id`, `employee_id`, `store_id`, `afgehaald`) VALUES
(1, 18, 200.00, 4, 1, 10, 1, 0),
(2, 19, 44.69, 3, 1, 10, 1, 0),
(3, 20, 35.00, 6, 2, 10, 2, 0),
(4, 21, 400.00, 2, 2, 10, 2, 0),
(5, 31, 155.00, 7, 3, 10, 3, 0),
(6, 18, 500.00, 5, 4, 10, 4, 0),
(7, 32, 100.88, 5, 42, 10, 1, 0),
(8, 31, 44.99, 1, 42, 10, 1, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `img` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `not_active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `img`, `user_id`, `not_active`) VALUES
(18, 'Mouse', 'This is a mouse description', 30.44, 'mouse.jpg', 10, 1),
(19, 'Framework', 'Selling php frameworks', 250.99, '13047837_1750854825201374_7809510911662716015_o.png', 10, 1),
(20, 'What&#39;s up', 'Nothing much', 200.00, '18198435_769578906532764_3208624856456069648_n.jpg', 10, 1),
(21, 'Computer', 'It&#39;s a PC', 350.77, 'illustration.jpg', 10, 1),
(23, 'Galaxy s8', 'Galaxy s8', 888.77, 'download.jpg', 12, 1),
(24, 'Iphone X', 'This is the iphone X aka 10 not 9', 1049.99, 'shopping.jpg', 12, 1),
(30, 'Computer screen', 'A computer screen', 270.00, 'hardware.jpg', 10, 1),
(31, 'Pc Item', 'This a another test Item', 44.99, 'DisplayHGS.png', 10, 1),
(32, 'Test Item', 'THis is another one', 100.88, 'favi3.png', 10, 1),
(33, 'Boem nummer 1', '', 34.89, 'download (1).jpg', 10, NULL),
(34, 'Bos Bloem', '', 32.99, 'download.jpg', 10, NULL),
(39, 'Flower power item', '', 20.98, 'download (2).jpg', 10, NULL),
(40, 'New Flowers', '', 20.80, 'download.jpg', 10, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(255) NOT NULL,
  `voorletters` varchar(255) NOT NULL,
  `tussenvoegsel` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `woonplaats` varchar(255) NOT NULL,
  `geboortedatum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `role`, `voorletters`, `tussenvoegsel`, `achternaam`, `adres`, `postcode`, `woonplaats`, `geboortedatum`) VALUES
(8, 'Robin', 'robingiel@gmail.com', '$2y$10$vWv/1I8oarGa9NJ/cUvW8etli2DIRQ35wr3Ttl6kcidaYJb8S.Cse', '2018-01-11 17:32:06', 'klant', '', '', '', '', '', '', '0000-00-00'),
(9, 'John', 'johndoe@gmail.com', '$2y$10$xHsRf6W2VMPSYLAlne9wG.gMKGJyg2Xo7JS8CPBvCtYoOpTsoNhdG', '2018-01-11 20:49:14', 'klant', '', '', '', '', '', '', '0000-00-00'),
(10, 'Bill', 'bill@gmail.com', '$2y$10$vnRziR9kOk394hg4IXKfGuBDWByTnIBxmC0NOSrV8sC4jflYjK4Gm', '2018-01-11 21:57:36', 'medewerker', '', '', '', '', '', '', '0000-00-00'),
(12, 'frank', 'frank@yahoo.com', '$2y$10$QCfHD0b6ApQzg0QzYGN4gemver/s18Sgp4mE3q4S7cIp8eXVjUco6', '2018-01-12 20:46:07', 'klant', '', '', '', '', '', '', '0000-00-00'),
(13, 'Robin Giel', 'klant@gmail.com', '$2y$10$fIFtseyksqh9PmdQZOnxWeVf4mz1BPrMDdsanWZwIkrPB9cG9ergS', '2018-01-18 03:06:03', 'klant', 'RE', 'van der', 'klant@gmail.com', 'FROM THE WORLD', 'klant@gmail.com', 'Robin Giel', '0000-00-00'),
(14, 'NewBuyer', 'buyer@gmail.com', '$2y$10$T/smWrbKucZJdKRc88FSE.xNUF3TVU4BZZv23imqz4r3xRfupBK5u', '2018-01-22 00:57:07', 'klant', '', '', '', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `winkels`
--

CREATE TABLE `winkels` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `vestegingsplaats` varchar(255) NOT NULL,
  `telefoonnummer` bigint(20) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `winkels`
--

INSERT INTO `winkels` (`id`, `naam`, `adres`, `postcode`, `vestegingsplaats`, `telefoonnummer`, `img`) VALUES
(1, 'Bloem Winkel Amsterdam', 'Herengracht 12B', '1102MW', 'Amsterdam', 207789766, 'amsterdam.jpg'),
(2, 'Bloem Den Haag', 'Haagseweg 3', '2303BB', 'Den Haag', 644598776, 'denhaag.jpg'),
(3, 'Tilburge Bloemen', 'Tilburgse baan 2', '2309DE', 'Tilburg', 644953662, 'tilburg.jpg'),
(4, 'Roosendaalse Rosen', 'Beglischeweg 99', '7909FF', 'Roosendaal', 655231225, 'roosendaal.jpg');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `completed_orders`
--
ALTER TABLE `completed_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexen voor tabel `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `completed_orders_id` (`completed_orders_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `store_id` (`store_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `winkels`
--
ALTER TABLE `winkels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `completed_orders`
--
ALTER TABLE `completed_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT voor een tabel `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT voor een tabel `winkels`
--
ALTER TABLE `winkels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `completed_orders`
--
ALTER TABLE `completed_orders`
  ADD CONSTRAINT `completed_orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Beperkingen voor tabel `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`completed_orders_id`) REFERENCES `completed_orders` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `order_details_ibfk_3` FOREIGN KEY (`store_id`) REFERENCES `winkels` (`id`),
  ADD CONSTRAINT `order_details_ibfk_4` FOREIGN KEY (`employee_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
