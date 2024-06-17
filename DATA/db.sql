SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db`;

CREATE TABLE `Brand` (
    `id` int(11) NOT NULL,
    `name` varchar(50) NOT NULL,
    `foundationYear` int(11) NOT NULL,
    `country` varchar(50) NOT NULL,
    `logo` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `CarModel` (
    `id` int(11) NOT NULL,
    `name` varchar(50) NOT NULL,
    `year` int(11) NOT NULL,
    `motor` varchar(50) NOT NULL,
    `chassis` varchar(50) NOT NULL,
    `licensePlate` varchar(50) NOT NULL,
    `color` varchar(50) NOT NULL,
    `brand_id` int(11) NOT NULL,
    PRIMARY KEY (`id`),
    KEY `brand_id` (`brand_id`),
    CONSTRAINT `fk_car_model_brand` FOREIGN KEY (`brand_id`) REFERENCES `Brand`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `User` (
    `id` int(11) NOT NULL,
    `nome` varchar(50) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `User_brands` (
    `user_id` int(11) NOT NULL,
    `brand_id` int(11) NOT NULL,
    PRIMARY KEY (`user_id`,`brand_id`),
    KEY `brand_id` (`brand_id`),
    CONSTRAINT `fk_user_brands_brand` FOREIGN KEY (`brand_id`) REFERENCES `Brand`(`id`),
    CONSTRAINT `fk_user_brands_user` FOREIGN KEY (`user_id`) REFERENCES `User`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

ALTER TABLE `Brand` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT; 
ALTER TABLE `CarModel` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT; 
ALTER TABLE `User` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT; 

INSERT INTO `Brand` (`id`, `name`, `foundationYear`, `country`, `logo`) VALUES
(1, 'Porsche', 1931, 'Germany', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Porsche_logo.svg/1200px-Porsche_logo.svg.png'),
(2, 'Ferrari', 1939, 'Italy', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Ferrari-Logo.svg/1200px-Ferrari-Logo.svg.png'),
(3, 'Lamborghini', 1963, 'Italy', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/47/Lamborghini_Logo.svg/1200px-Lamborghini_Logo.svg.png'),
(4, 'Bugatti', 1909, 'France', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Bugatti_logo.svg/1200px-Bugatti_logo.svg.png'),
(5, 'McLaren', 1963, 'United Kingdom', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/McLaren_logo.svg/1200px-McLaren_logo.svg.png'),
(6, 'Audi', 1910, 'Germany', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Audi_logo_detail.svg/1200px-Audi_logo_detail.svg.png'),
(7, 'BMW', 1916, 'Germany', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/BMW.svg/1200px-BMW.svg.png'),
(8, 'Mercedes-Benz', 1926, 'Germany', 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Mercedes-Benz_Logo_2011.svg/1200px-Mercedes-Benz_Logo_2011.svg.png'),
(9, 'Koenigsegg', 1994, 'Sweden', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Koenigsegg_logo.svg/1200px-Koenigsegg_logo.svg.png'),
(10, 'Pagani', 1992, 'Italy', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4b/Pagani_logo.svg/1200px-Pagani_logo.svg.png');

INSERT INTO `CarModel` (`id`, `name`, `year`, `motor`, `chassis`, `licensePlate`, `color`, `brand_id`) VALUES
(1, '911', 2021, '3.0', '123456', 'ABC-1234', 'Red', 1),
(2, '488', 2021, '3.9', '123456', 'DEF-5678', 'Yellow', 2),
(3, 'Aventador', 2021, '6.5', '123456', 'GHI-9101', 'Black', 3),
(4, 'Chiron', 2021, '8.0', '123456', 'JKL-1213', 'Blue', 4),
(5, '720S', 2021, '4.0', '123456', 'MNO-1415', 'White', 5),
(6, 'R8', 2021, '5.2', '123456', 'PQR-1617', 'Silver', 6),
(7, 'M5', 2021, '4.4', '123456', 'STU-1819', 'Gray', 7),
(8, 'AMG GT', 2021, '4.0', '123456', 'VWX-2021', 'Green', 8),
(9, 'Jesko', 2021, '5.0', '123456', 'YZA-2223', 'Orange', 9),
(10, 'Huayra', 2021, '6.0', '123456', 'BCD-2425', 'Purple', 10);

INSERT INTO `User` (`nome`) VALUES
('Christian Von Koenigsegg'),
('Enzo Ferrari'),
('Ferdinand Porsche'),
('Ferruccio Lamborghini'),
('Bruce McLaren'),
('Horacio Pagani');

INSERT INTO `User_Brands` (`user_id`, `brand_id`) VALUES
(1, 9),
(2, 2),
(3, 1),
(4, 3),
(5, 5),
(6, 10);

COMMIT;