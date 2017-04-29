-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 апр 2017 в 23:01
-- Версия на сървъра: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elbag`
--

-- --------------------------------------------------------

--
-- Структура на таблица `address`
--

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `street_address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_code` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура на таблица `basket`
--

CREATE TABLE `basket` (
  `quantity` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура на таблица `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `categories`
--

INSERT INTO `categories` (`category_id`, `name`) VALUES
(1, 'Телефони, Таблети & Смарт технологии'),
(2, 'Лаптопи, IT продукти & Офис'),
(3, 'ТВ, Електроника & Фото'),
(4, 'Големи електроуреди'),
(5, 'Малки електроуреди');

-- --------------------------------------------------------

--
-- Структура на таблица `favorits`
--

CREATE TABLE `favorits` (
  `fav_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура на таблица `manufacturers`
--

CREATE TABLE `manufacturers` (
  `manufacturer_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `manufacturers`
--

INSERT INTO `manufacturers` (`manufacturer_id`, `name`) VALUES
(1, 'СОНИ');

-- --------------------------------------------------------

--
-- Структура на таблица `minicategories`
--

CREATE TABLE `minicategories` (
  `minicategories_id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subcategories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `minicategories`
--

INSERT INTO `minicategories` (`minicategories_id`, `name`, `subcategories_id`) VALUES
(1, 'proba', 1);

-- --------------------------------------------------------

--
-- Структура на таблица `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура на таблица `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `products_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(65) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` float DEFAULT NULL,
  `picture` varchar(105) COLLATE utf8_unicode_ci DEFAULT NULL,
  `warranty` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `subcategory_id` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `products`
--

INSERT INTO `products` (`id`, `products_name`, `model`, `price`, `picture`, `warranty`, `quantity`, `subcategory_id`, `manufacturer_id`) VALUES
(1, 'Telefon', 'Samsung', 200, '../assets/images/productPhoto/e.jpg', 2, 100, 1, 1),
(2, 'TV', 'LG', 2020, '../assets/images/productPhoto/e.jpg', 2, 100, 15, 1),
(3, 'Hladilnik', 'SDDF', 700, '../assets/images/productPhoto/e.jpg', 2, 100, 16, 1),
(4, 'Laptop', 'Accer', 1200, '../assets/images/productPhoto/e.jpg', 2, 100, 24, 1),
(7, 'Laptop', 'Accer', 1200, '../assets/images/productPhoto/e.jpg', 2, 100, 25, 1),
(8, 'Laptop', 'Accer', 1200, '../assets/images/productPhoto/e.jpg', 2, 100, 2, 1),
(9, 'Laptop', 'Accer', 1200, '../assets/images/productPhoto/e.jpg', 2, 100, 2, 1),
(10, 'Laptop', 'Accer', 1200, '../assets/images/productPhoto/e.jpg', 2, 100, 9, 1),
(11, 'Laptop', 'Accer', 1200, '../assets/images/productPhoto/e.jpg', 2, 100, 8, 1),
(12, 'Laptop', 'Accer', 1200, '../assets/images/productPhoto/e.jpg', 2, 100, 30, 1),
(13, 'Laptop', 'Accer', 1200, '../assets/images/productPhoto/e.jpg', 2, 100, 29, 1);

-- --------------------------------------------------------

--
-- Структура на таблица `product_specification_name_values`
--

CREATE TABLE `product_specification_name_values` (
  `id` int(11) NOT NULL,
  `specification_name` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `specification_values` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура на таблица `subcategories`
--

CREATE TABLE `subcategories` (
  `subcategories_id` int(11) NOT NULL,
  `name` varchar(65) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `subcategories`
--

INSERT INTO `subcategories` (`subcategories_id`, `name`, `category_id`) VALUES
(1, 'Мобилни телефони', 1),
(2, 'Смарт часовници', 1),
(3, 'Таблети', 1),
(4, 'Външни батери', 1),
(5, 'Аксесоари', 1),
(6, 'Smart Home & VR очила', 1),
(7, 'Лаптопи & Аксесоари', 2),
(8, 'Настолни компютри & Монитори', 2),
(9, 'PC компоненти', 2),
(10, 'Software', 2),
(11, 'Периферия', 2),
(12, 'Принтери &  Скенери', 2),
(13, 'Wireless & Networking', 2),
(14, 'Телевизори & Аксесоари', 3),
(15, 'Видео проектори & Екрани', 3),
(16, 'Системи за домашно кино & Аудио Hi-Fi', 3),
(17, 'Електроника', 3),
(18, 'Конзоли & Игри', 3),
(19, 'Фотоапарати', 3),
(20, 'Видеокамери', 3),
(21, 'Фото & Видеоаксесоари', 3),
(22, 'Хладилна техника', 4),
(23, 'Перални & сушилни за дрехи', 4),
(24, 'Съдомиялни машини', 4),
(25, 'Уреди за вграждане', 4),
(26, 'Готварски печки & Микровълнови', 4),
(27, 'Батерии, Климатици & Уреди за отопление', 4),
(28, 'Прахосмукачки & Ютии', 5),
(29, 'Приготвяне на напитки', 5),
(30, 'Кухненски уреди', 5);

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(105) COLLATE utf8_unicode_ci DEFAULT NULL,
  `favorite_id` int(11) DEFAULT NULL,
  `address_id` int(11) DEFAULT NULL,
  `first_name` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `phone`, `picture`, `favorite_id`, `address_id`, `first_name`, `last_name`) VALUES
(2, 'Gergin', 'gergin@abv.bg', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'gencho', 'Gencho@abv.bg', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD KEY `fk_basket_users1_idx` (`user_id`),
  ADD KEY `fk_basket_products1_idx` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `favorits`
--
ALTER TABLE `favorits`
  ADD PRIMARY KEY (`fav_id`),
  ADD KEY `fk_favorits_users1_idx` (`user_id`),
  ADD KEY `fk_favorits_products1_idx` (`product_id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `minicategories`
--
ALTER TABLE `minicategories`
  ADD PRIMARY KEY (`minicategories_id`),
  ADD KEY `fk_minicategories_subcategories1_idx` (`subcategories_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`),
  ADD KEY `fk_orders_products1_idx` (`product_id`),
  ADD KEY `fk_orders_users1_idx` (`user_id`),
  ADD KEY `fk_orders_address1_idx` (`address_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_products_manufacturers1_idx` (`manufacturer_id`),
  ADD KEY `subcategory_id_idx` (`subcategory_id`);

--
-- Indexes for table `product_specification_name_values`
--
ALTER TABLE `product_specification_name_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_specification_name_values_products1_idx` (`product_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`subcategories_id`),
  ADD KEY `fk_subcategories_categories1_idx` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `fk_users_address1_idx` (`address_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `favorits`
--
ALTER TABLE `favorits`
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `minicategories`
--
ALTER TABLE `minicategories`
  MODIFY `minicategories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `product_specification_name_values`
--
ALTER TABLE `product_specification_name_values`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `subcategories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `fk_basket_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_basket_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения за таблица `favorits`
--
ALTER TABLE `favorits`
  ADD CONSTRAINT `fk_favorits_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_favorits_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения за таблица `minicategories`
--
ALTER TABLE `minicategories`
  ADD CONSTRAINT `fk_minicategories_subcategories1` FOREIGN KEY (`subcategories_id`) REFERENCES `subcategories` (`subcategories_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения за таблица `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_address1` FOREIGN KEY (`address_id`) REFERENCES `address` (`address_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orders_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orders_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения за таблица `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_manufacturers1` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturers` (`manufacturer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `subcategory_id` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`subcategories_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения за таблица `product_specification_name_values`
--
ALTER TABLE `product_specification_name_values`
  ADD CONSTRAINT `fk_product_specification_name_values_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения за таблица `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `fk_subcategories_categories1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения за таблица `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_address1` FOREIGN KEY (`address_id`) REFERENCES `address` (`address_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
