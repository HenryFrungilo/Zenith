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
    `logo_image` varchar(255) DEFAULT NULL,
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
    `model_image` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`id`),
    KEY `brand_id` (`brand_id`),
    CONSTRAINT `fk_car_model_brand` FOREIGN KEY (`brand_id`) REFERENCES `Brand`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `User` (
    `id` int(11) NOT NULL,
    `nome` varchar(50) NOT NULL,
    `email` varchar(50) NOT NULL,
    `senha` varchar(100) NOT NULL,
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

INSERT INTO `Brand` (`id`, `name`, `foundationYear`, `country`, `logo_image`) VALUES
(1, 'Porsche', 1931, 'Germany', 'https://upload.wikimedia.org/wikipedia/de/thumb/2/2d/Porsche_Wappen.svg/800px-Porsche_Wappen.svg.png'),
(2, 'Ferrari', 1939, 'Italy', 'https://logodownload.org/wp-content/uploads/2017/05/ferrari-logo-0.png'),
(3, 'Lamborghini', 1963, 'Italy', 'https://upload.wikimedia.org/wikipedia/en/thumb/d/df/Lamborghini_Logo.svg/800px-Lamborghini_Logo.svg.png'),
(4, 'Bugatti', 1909, 'France', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/Bugatti_logo.svg/1920px-Bugatti_logo.svg.pnghttps://upload.wikimedia.org/wikipedia/commons/thumb/6/60/Bugatti_logo.svg/1920px-Bugatti_logo.svg.png'),
(5, 'McLaren', 1963, 'United Kingdom', 'https://pt.wikipedia.org/wiki/McLaren_Automotive#/media/Ficheiro:McLaren_Automotive_logo.svg'),
(6, 'Audi', 1910, 'Germany', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/Audi-Logo_2016.svg/1920px-Audi-Logo_2016.svg.png'),
(7, 'BMW', 1916, 'Germany', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/BMW_logo_%28gray%29.svg/1024px-BMW_logo_%28gray%29.svg.png'),
(8, 'Mercedes-Benz', 1926, 'Germany', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Mercedes-Benz_Logo_2010.svg/1920px-Mercedes-Benz_Logo_2010.svg.png'),
(9, 'Koenigsegg', 1994, 'Sweden', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/Koenigsegg_logo.svg/1920px-Koenigsegg_logo.svg.png'),
(10, 'Pagani', 1992, 'Italy', 'https://w7.pngwing.com/pngs/798/705/png-transparent-pagani-zonda-pagani-huayra-sports-car-geneva-motor-show-car-emblem-label-logo.png');

INSERT INTO `CarModel` (`id`, `name`, `year`, `motor`, `chassis`, `licensePlate`, `color`, `brand_id`, `model_image`) VALUES
(1, '911 GT3 RS', 2021, '4,0 l 6 cilinders', '123456', 'ABC-1234', 'Grey', 1, 'https://files.porsche.com/filestore/image/multimedia/none/992-gt3-rs-modelimage-sideshot/model/cfbb8ed3-1a15-11ed-80f5-005056bbdc38/porsche-model.png'),
(2, '488 GTB', 2021, '3.9 V8 Turbo', '123456', 'DEF-5678', 'Red', 2, 'https://static.wikia.nocookie.net/forzamotorsport/images/c/c8/HOR_XB1_Ferrari_488.png/revision/latest?cb=20191009194902'),
(3, 'Urus', 2021, '4,0 l V8', '123456', 'GHI-9101', 'Orange', 3, 'https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/facelift_2019/model_gw/urus/2024/model_chooser/Model%3DUrus%20SE%2C%20Type%3DMobile.png'),
(4, 'Chiron', 2021, 'W16 8.0 quad-turbo', '123456', 'JKL-1213', 'Blue', 4, 'https://static.wikia.nocookie.net/forzamotorsport/images/4/4c/HOR_XB1_Bugatti_Chiron.png/revision/latest?cb=20200215151927'),
(5, '720S', 2021, '4.0 l V8', '123456', 'MNO-1415', 'Orange', 5, 'https://carsguide-res.cloudinary.com/image/upload/f_auto,fl_lossy,q_auto,t_default/v1/editorial/vhs/mclaren-720S-Coupe.png'),
(6, 'R8', 2021, '5.2 V10', '123456', 'PQR-1617', 'Silver', 6, 'https://file.kelleybluebookimages.com/kbb/base/evox/CP/51535/2023-Audi-R8-front_51535_032_2400x1800_L5L5.png'),
(7, 'M5 Competition', 2021, '4.4 V8 Biturbo', '123456', 'STU-1819', 'Black', 7, 'https://cdn.dicklovett.co.uk/uploads/new_vehicle/4_23.png?v=1710323460'),
(8, 'AMG GT', 2021, '4.0 V8 Biturbo', '123456', 'VWX-2021', 'Silver', 8 ,'https://media.oneweb.mercedes-benz.com/iris/europe/PT/192342/805/iris.webp?q=COSY-EU-100-1713d0VXqrWFqtyO67PobzIr3eWsrrCsdRRzwQZUkRZbMw3SGtlaWtsd2Z3cUfpMqXGEjnmJ0l70NOB2KQObApHixI5usoZQC3UXQkzNGJNm7juyIhKV0%25F%25vqGugyLRlzdYaxHoErHAlGqhTWFEnlAoW7ZV1JnwxV4V%25d%25CWLH59zW0uBZTmGaX&BKGND=9&IMGT=W27&POV=BE320&uni=m'),
(9, 'Jesko', 2021, '5.0 V8 Biturbo', '123456', 'YZA-2223', 'Orange', 9 ,'https://static.wikia.nocookie.net/forzamotorsport/images/d/df/HOR_XB1_Koenigsegg_Jesko.png/revision/latest?cb=20201213155957'),
(10, 'Huayra', 2021, '6.0 V12 HWA', '123456', 'BCD-2425', 'Purple', 10, 'https://static.wikia.nocookie.net/forzamotorsport/images/d/db/FH5_Pagani_Huayra_R_Large.png/revision/latest?cb=20240114213815');

INSERT INTO `User` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Christian Von Koenigsegg', 'von@koenigsegg.com', 'koenigsegg'),
(2, 'Enzo Ferrari', 'enzo@ferrari.com', 'ferrari'),
(3, 'Ferdinand Porsche', 'ferdinand@porsche.com', 'porsche'),
(4, 'Ferruccio Lamborghini', 'ferruccio@lamborghini.com', 'lamborghini'),
(5, 'Bruce McLaren', 'bruce@mclaren.com', 'mclaren'),
(6, 'Horacio Pagani', 'horacio@pagani.com', 'pagani');

INSERT INTO `User_Brands` (`user_id`, `brand_id`) VALUES
(1, 9),
(2, 2),
(3, 1),
(4, 3),
(5, 5),
(6, 10);

COMMIT;