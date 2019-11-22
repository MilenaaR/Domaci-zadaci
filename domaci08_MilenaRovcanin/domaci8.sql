CREATE TABLE `domac08`.`cars` (
	`id` INT NOT NULL AUTO_INCREMENT, 
	`manufacturer` VARCHAR(255) NOT NULL,
	`model` VARCHAR(255) NOT NULL,
	`transmission` ENUM('automatic','manual') NOT NULL,
	`engine_cubic` DECIMAL NOT NULL,
	`fuel_type` ENUM('dizel','benzin') NOT NULL,
	`horse_power` INT NOT NULL, 
	PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO `cars` (`id`, `manufacturer`, `model`, `transmission`, `engine_cubic`, `fuel_type`, `horse_power`) VALUES
(1, 'Audi', 'A5', 'automatic', 1.9, 'dizel', 286),
(2, 'BMW', 'M4', 'manual', 1.9, 'benzin', 365),
(3, 'Porsche', '911 Carrera', 'automatic', 2.4, 'dizel', 620),
(4, 'Nissan', 'Almera', 'manual', 1.8, 'benzin', 110),
(5, 'Toyota', 'Land cruiser', 'manual', 2.2, 'dizel', 300),
(6, 'Citroen', 'C4', 'manual', 1.4, 'benzin', 90),
(7, 'Volkswagen', 'Passat', 'automatic', 1.9, 'dizel', 150),
(8, 'Opel', 'Insignia', 'automatic', 1.9, 'dizel', 140),
(9, 'Peugeot', '308', 'manual', 1.6, 'dizel', 60),
(10, 'Volkswagen', 'Golf 7', 'automatic', 2.2, 'benzin', 160);