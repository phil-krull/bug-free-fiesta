-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema pokes
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema pokes
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pokes` DEFAULT CHARACTER SET utf8 ;
USE `pokes` ;

-- -----------------------------------------------------
-- Table `pokes`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pokes`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `alias` VARCHAR(45) NULL,
  `email` VARCHAR(255) NULL,
  `dob` DATE NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pokes`.`pokes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pokes`.`pokes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `poke_user_id` INT NOT NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_pokes_users_idx` (`user_id` ASC),
  INDEX `fk_pokes_users1_idx` (`poke_user_id` ASC),
  CONSTRAINT `fk_pokes_users`
    FOREIGN KEY (`user_id`)
    REFERENCES `pokes`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pokes_users1`
    FOREIGN KEY (`poke_user_id`)
    REFERENCES `pokes`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
