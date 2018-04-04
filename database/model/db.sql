-- MySQL Script generated by MySQL Workbench
-- Wed Apr  4 18:52:39 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema minds
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `minds` ;

-- -----------------------------------------------------
-- Schema minds
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `minds` DEFAULT CHARACTER SET utf8 ;
USE `minds` ;

-- -----------------------------------------------------
-- Table `minds`.`association`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `minds`.`association` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `label` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `minds`.`paper`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `minds`.`paper` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(300) NOT NULL,
  `venue` VARCHAR(200) NULL DEFAULT NULL,
  `abstract` TEXT NULL DEFAULT NULL,
  `url` VARCHAR(256) NULL DEFAULT NULL,
  `published_at` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `minds`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `minds`.`user` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `full_name` VARCHAR(90) NOT NULL,
  `preferred_name` VARCHAR(45) NULL DEFAULT NULL,
  `description` TEXT NULL DEFAULT NULL,
  `email` VARCHAR(255) NOT NULL,
  `phone` VARCHAR(20) NULL DEFAULT NULL,
  `country` VARCHAR(40) NULL DEFAULT NULL,
  `lattes_url` VARCHAR(256) NULL DEFAULT NULL,
  `researchgate_url` VARCHAR(256) NULL DEFAULT NULL,
  `webpage_url` VARCHAR(256) NULL DEFAULT NULL,
  `is_admin` TINYINT(1) NOT NULL DEFAULT '0',
  `created_at` DATETIME NOT NULL,
  `updated_at` DATETIME NOT NULL,
  `photo_url` VARCHAR(256) NULL DEFAULT NULL,
  `is_active` TINYINT(1) NOT NULL DEFAULT '1',
  `remember_token` VARCHAR(100) NULL,
  `password` VARCHAR(70) NULL,
  `affiliation` VARCHAR(200) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `minds`.`post`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `minds`.`post` (
  `id` INT(11) NOT NULL,
  `user_id` INT(11) NOT NULL,
  `title` VARCHAR(200) NOT NULL,
  `text` TEXT NOT NULL,
  `image_url` VARCHAR(256) NULL DEFAULT NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` DATETIME NOT NULL,
  `is_active` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  INDEX `fk_post_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_post_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `minds`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `minds`.`user_association`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `minds`.`user_association` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) NOT NULL,
  `association_id` INT(11) NOT NULL,
  `start_date` DATETIME NOT NULL,
  `end_date` DATETIME NULL DEFAULT NULL,
  `is_visiting` TINYINT(1) NOT NULL DEFAULT '0',
  `project_title` VARCHAR(200) NULL DEFAULT NULL,
  `supervisor_id` INT(11) NULL DEFAULT NULL,
  `supervisor_name` VARCHAR(90) NULL,
  `cosupervisor_id` INT(11) NULL,
  `cosupervisor_name` VARCHAR(90) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_user_has_association_type_user_idx` (`user_id` ASC),
  INDEX `fk_user_has_association_type_user1_idx` (`supervisor_id` ASC),
  INDEX `fk_user_association_association1_idx` (`association_id` ASC),
  INDEX `fk_user_association_user1_idx` (`cosupervisor_id` ASC),
  CONSTRAINT `fk_user_has_association_type_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `minds`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_has_association_type_user1`
    FOREIGN KEY (`supervisor_id`)
    REFERENCES `minds`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_association_association1`
    FOREIGN KEY (`association_id`)
    REFERENCES `minds`.`association` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_association_user1`
    FOREIGN KEY (`cosupervisor_id`)
    REFERENCES `minds`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `minds`.`user_post`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `minds`.`user_post` (
  `user_id` INT(11) NOT NULL COMMENT 'related users',
  `post_id` INT(11) NOT NULL,
  PRIMARY KEY (`user_id`, `post_id`),
  INDEX `fk_user_has_post_post1_idx` (`post_id` ASC),
  INDEX `fk_user_has_post_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_user_has_post_post1`
    FOREIGN KEY (`post_id`)
    REFERENCES `minds`.`post` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_has_post_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `minds`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `minds`.`user_paper`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `minds`.`user_paper` (
  `user_id` INT(11) NOT NULL,
  `paper_id` INT(11) NOT NULL,
  `author_order` INT(11) NULL,
  PRIMARY KEY (`user_id`, `paper_id`),
  INDEX `fk_user_has_paper_paper1_idx` (`paper_id` ASC),
  INDEX `fk_user_has_paper_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_user_has_paper_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `minds`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_has_paper_paper1`
    FOREIGN KEY (`paper_id`)
    REFERENCES `minds`.`paper` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `minds`.`project`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `minds`.`project` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(200) NOT NULL,
  `description` TEXT NOT NULL,
  `start_date` DATETIME NOT NULL,
  `end_date` DATETIME NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` DATETIME NOT NULL,
  `is_active` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `minds`.`tag`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `minds`.`tag` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `minds`.`resource`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `minds`.`resource` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `description` TEXT NOT NULL,
  `file_path` VARCHAR(256) NOT NULL,
  `project_id` INT NULL,
  `user_id` INT NOT NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` DATETIME NOT NULL,
  PRIMARY KEY (`id`, `user_id`),
  INDEX `fk_project_resource_project1_idx` (`project_id` ASC),
  INDEX `fk_resource_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_project_resource_project1`
    FOREIGN KEY (`project_id`)
    REFERENCES `minds`.`project` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_resource_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `minds`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `minds`.`project_image`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `minds`.`project_image` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `description` TEXT NULL,
  `order` INT NOT NULL DEFAULT 0,
  `file_path` VARCHAR(256) NULL,
  `project_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_project_image_project1_idx` (`project_id` ASC),
  CONSTRAINT `fk_project_image_project1`
    FOREIGN KEY (`project_id`)
    REFERENCES `minds`.`project` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `minds`.`project_tag`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `minds`.`project_tag` (
  `project_id` INT NOT NULL,
  `tag_id` INT NOT NULL,
  PRIMARY KEY (`project_id`, `tag_id`),
  INDEX `fk_project_tag_tag1_idx` (`tag_id` ASC),
  CONSTRAINT `fk_project_tag_project1`
    FOREIGN KEY (`project_id`)
    REFERENCES `minds`.`project` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_project_tag_tag1`
    FOREIGN KEY (`tag_id`)
    REFERENCES `minds`.`tag` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `minds`.`project_user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `minds`.`project_user` (
  `project_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `order` INT NOT NULL DEFAULT 0,
  PRIMARY KEY (`project_id`, `user_id`),
  INDEX `fk_project_user_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_project_user_project1`
    FOREIGN KEY (`project_id`)
    REFERENCES `minds`.`project` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_project_user_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `minds`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `minds`.`paper_tag`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `minds`.`paper_tag` (
  `paper_id` INT NOT NULL,
  `tag_id` INT NOT NULL,
  PRIMARY KEY (`paper_id`, `tag_id`),
  INDEX `fk_paper_tag_tag1_idx` (`tag_id` ASC),
  CONSTRAINT `fk_paper_tag_paper1`
    FOREIGN KEY (`paper_id`)
    REFERENCES `minds`.`paper` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_paper_tag_tag1`
    FOREIGN KEY (`tag_id`)
    REFERENCES `minds`.`tag` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
