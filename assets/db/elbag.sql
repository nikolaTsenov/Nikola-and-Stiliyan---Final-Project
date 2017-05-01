-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time:  2 май 2017 в 01:00
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
-- Структура на таблица `comments`
--

CREATE TABLE `comments` (
  `id_comm` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `person_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `date_publish` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `comments` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `comments`
--

INSERT INTO `comments` (`id_comm`, `product_id`, `person_name`, `date_publish`, `comments`) VALUES
(1, 1, 'Stoqn', '2017-05-01 15:26:52', 'hahahahhaha'),
(2, 1, 'Stoqn', '2017-05-01 15:26:52', 'hahahahhaha'),
(3, 2, 'ssss', '2017-05-01 15:28:44', 'dfadsfasdfa'),
(4, 1, 'Stoqn', '2017-05-01 15:28:25', 'hahahahhaha');

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
(1, 'Samsung'),
(2, 'Apple'),
(3, 'Huawei'),
(4, 'Lenovo'),
(5, 'ASUS'),
(6, 'Sony'),
(7, 'LG'),
(8, 'Mercury'),
(9, 'Flexy'),
(10, 'zaGSMnet'),
(11, 'A+'),
(12, 'Acer'),
(13, 'HP'),
(14, 'Dell'),
(15, 'Toshiba');

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
(13, 'Laptop', 'Accer', 1200, '../assets/images/productPhoto/e.jpg', 2, 100, 29, 1),
(14, 'Laptop', 'Accer', 1200, '../assets/images/productPhoto/', 2, 100, 1, 1),
(15, 'Laptop', 'Accer', 1200, '../assets/images/productPhoto/', 2, 100, 1, 1),
(16, 'Протектор', 'A+ Case Nude за Iphone 6/6S, Gold', 17.55, '../assets/images/productPhoto/ACaseNudIphone6Gold.jpg', 4, 74, 2, 11),
(17, 'Силиконов гръб', 'Jelly Case Sony Xperia M4 Aqua', 4.23, '../assets/images/productPhoto/MercuryJellyCaseSonyXperM4Aqua.jpg', 0, 33, 2, 8),
(18, 'Силиконов гръб', 'Samsung S7 Edge, Blue', 1, '../assets/images/productPhoto/SamsungS7EdgeBlue.jpg', 0, 8, 2, 8),
(19, 'Кожен калъф', 'Flip Cover Samsung Galaxy S3 Neo', 9.53, '../assets/images/productPhoto/zagsmnetFlipCoverSamsungGalaxyS3Neo.jpg', 1, 14, 2, 10),
(20, 'Твърд гръб', 'Огледален Huawei P9 lite&sbquo;Златист', 13.71, '../assets/images/productPhoto/zaGSMnetОгледаленHuaweiP9lite&sbquo;Златист.jpg', 2, 18, 2, 10),
(21, 'Вертикален Флип калъф със силиконово легло', 'Samsung Galaxy J1 Mini, Черен', 9.92, '../assets/images/productPhoto/FlexSamsungGalaxyJ1Mini,Черен.jpg', 0, 25, 2, 9),
(22, 'Лаптоп', 'X540SA-XX411', 439.9, '../assets/images/productPhoto/ASUS-X540SA-XX411.jpg', 36, 12, 12, 5),
(23, 'Лаптоп', '15-ay008nu', 471.24, '../assets/images/productPhoto/HP 15-ay008nu.jpg', 12, 5, 12, 13),
(24, 'Лаптоп', 'IdeaPad110', 544.5, '../assets/images/productPhoto/lenovo-IdeaPad110.jpg', 24, 17, 12, 4),
(25, 'Лаптоп', 'Inspiron 3552', 480, '../assets/images/productPhoto/Inspiron3552.jpg', 32, 48, 12, 14),
(26, 'Лаптоп', 'MacBook Air 13', 1000000, '../assets/images/productPhoto/MacBookAir13.jpg', 1000, 3, 12, 2),
(27, 'Лаптоп', 'Aspire E5-774G-32AX', 1001, '../assets/images/productPhoto/AspireE5-774G-32AX.jpg', 24, 15, 12, 12),
(28, 'Смартфон', 'G4 Dual Sim', 704, '../assets/images/productPhoto/lg-g4.jpg', 24, 7, 1, 7),
(29, 'Смартфон', 'Xperia Z5', 901, '../assets/images/productPhoto/sony-z5.jpg', 28, 56, 1, 6),
(30, 'Смартфон', 'Xperia XA', 540, '../assets/images/productPhoto/xperia-xa.jpg', 30, 48, 1, 6),
(31, 'Смартфон', 'Xperia M5', 500, '../assets/images/productPhoto/xperia-m5.jpg', 30, 54, 1, 6),
(32, 'Смартфон', 'P8 Lite', 300, '../assets/images/productPhoto/huawei-p8-lite.jpg', 24, 43, 1, 3),
(33, 'Смартфон', 'iPhone 7', 1400, '../assets/images/productPhoto/iphone7.jpg', 30, 20, 1, 2),
(34, 'Смартфон', 'Galaxy S7 Edge', 1000, '../assets/images/productPhoto/samsung-s7-edge.jpg', 24, 30, 1, 1),
(35, 'Смартфон', 'A7010', 289, '../assets/images/productPhoto/lenovo-a7010.jpg', 24, 50, 1, 4),
(36, 'Смартфон', 'Galaxy A5 (2016)', 500, '../assets/images/productPhoto/samsung-a5-2016.jpg', 25, 50, 1, 1),
(37, 'Смартфон', 'P9 Lite', 450, '../assets/images/productPhoto/huawei-P9 Lite.jpg', 24, 60, 1, 3),
(38, 'Смартфон', 'K6', 300, '../assets/images/productPhoto/lenovo-k6.jpg', 24, 40, 1, 4),
(39, 'Смартфон', 'ZenFone Go ZB500KL', 250, '../assets/images/productPhoto/ASUS-ZenFone-Go-ZB500KL.jpg', 24, 30, 1, 5),
(40, 'Смартфон', 'iPhone 5S', 550, '../assets/images/productPhoto/iPhone-5S.jpg', 30, 25, 1, 2),
(41, 'Смартфон', 'Galaxy J5 (2016)', 330, '../assets/images/productPhoto/Samsung-J3-2016.jpg', 24, 50, 1, 1),
(42, 'Протектор', 'A+ Case ultraslim за iPhone 6/6s', 15, '../assets/images/productPhoto/A+CaseultraslimiPhone6s.jpg', 3, 20, 2, 11);

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

--
-- Схема на данните от таблица `product_specification_name_values`
--

INSERT INTO `product_specification_name_values` (`id`, `specification_name`, `specification_values`, `product_id`) VALUES
(274, 'Процесор', 'Quad Core 1.2Ghz', 1),
(604, 'Размери (Ш x В x Д мм)', '72.3 x 145.8 x 8.1', 1),
(605, 'Тегло (гр)', '159', 1),
(606, 'Операционна система', 'Android v6.0 (Marshmallow)', 1),
(607, 'Вътрешна памет', '16 GB', 1),
(608, 'RAM памет', '2 GB', 1),
(609, 'Тип дисплей', 'Super AMOLED', 1),
(610, 'Диагонал', '5.2', 1),
(611, 'Oсновна камера (Mp)', '13', 1),
(612, 'Вторична камера (Mp)', '5', 1),
(613, 'Батерия', '3100 mAh', 1),
(614, 'Процесор', 'Octa Core 1.2GHz', 2),
(615, 'Размери (Ш x В x Д мм)', '70.6 x 143 x 7.7', 2),
(616, 'Операционна система', 'Android v5.0 (Lollipop)', 2),
(617, 'Вътрешна памет', '16 GB', 2),
(618, 'RAM памет', '2 GB', 2),
(619, 'Тип дисплей', 'IPS LSD', 2),
(620, 'Диагонал', '5.0', 2),
(621, 'Oсновна камера (Mp)', '13', 2),
(622, 'Вторична камера (Mp)', '13', 2),
(623, 'Батерия', '2200 mAh', 2),
(624, 'Процесор', 'A10 Fusion', 3),
(656, 'Размери (Ш x В x Д мм)', '67.1 x 138.3 x 7.1', 3),
(657, 'Тегло (гр)', '138', 3),
(658, 'Операционна система', 'iOS 10', 3),
(659, 'Вътрешна памет', '32 GB', 3),
(660, 'Тип дисплей', 'IPS LCD', 3),
(661, 'Диагонал', '4,7', 3),
(662, 'Основна камера (Mp)', '12', 3),
(663, 'Вторична камера (Mp)', '7', 3),
(664, 'Батерия', 'до 240 часа', 3),
(665, 'Процесор', '2 x Quad Core, 2.3GHz + 1.6Ghz', 4),
(666, 'Размери (Ш x В x Д мм)', '72.6 x 150.9 x 7.7', 4),
(667, 'Тегло (гр)', '157', 4),
(668, 'Операционна система', 'Android v6.0 (Marshmallow)', 4),
(669, 'Вътрешна памет', '32 GB', 4),
(670, 'RAM памет', '4 GB', 4),
(671, 'Тип дисплей', 'Super AMOLED', 4),
(672, 'Диагонал', '5.5', 4),
(673, 'Основна камера (Mpх)', '12', 4),
(674, 'Вторична камера (Mpх)', '5', 4),
(675, 'Батерия', '3600 mAh', 4);

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
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comm`),
  ADD KEY `product_id_idx` (`product_id`);

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
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `favorits`
--
ALTER TABLE `favorits`
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `product_specification_name_values`
--
ALTER TABLE `product_specification_name_values`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=676;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `subcategories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
-- Ограничения за таблица `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
