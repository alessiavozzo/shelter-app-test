/* dogs table */
CREATE TABLE `dog_shelter`.`dogs` ( `id` BIGINT NOT NULL AUTO_INCREMENT , `name` VARCHAR(30) NOT NULL , `age` TINYINT NULL , `breed` VARCHAR(50) NOT NULL DEFAULT 'meticcio' ,  `gender` VARCHAR(7) NOT NULL , `weight` TINYINT NULL , `description` TEXT NULL , `image` VARCHAR(255) NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `dogs` (`name`, `age`, `breed`, `gender`, `weight`, `description`, `image`) VALUES ('Gegiù', '10', 'meticcio', 'Femmina', '25', 'coccolone',  NULL);

/* employees table */
CREATE TABLE `dog_shelter`.`employees` ( `id` BIGINT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `lastname` VARCHAR(50) NOT NULL , `email` VARCHAR(255) NOT NULL , `password` VARCHAR(50) NOT NULL ,  `address` VARCHAR(255) NULL , `phone` VARCHAR(15) NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `employees` (`name`, `lastname`, `email`, `password`) VALUES ('Alessia', 'Vozzo', 'alessiavozzo@ciao.it', '123ciao');

/* users table */
CREATE TABLE `dog_shelter`.`users` ( `id` BIGINT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `lastname` VARCHAR(50) NOT NULL , `email` VARCHAR(255) NOT NULL , `password` VARCHAR(50) NOT NULL ,  `address` VARCHAR(255) NULL , `phone` VARCHAR(15) NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;