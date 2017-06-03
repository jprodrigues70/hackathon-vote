USE `votes` ;

-- -----------------------------------------------------
-- Table `votes`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `votes`.`users` ;

CREATE TABLE IF NOT EXISTS `votes`.`users` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `name` VARCHAR(255) NULL,
  `level` INT NOT NULL,
  `createdAt` DATETIME NOT NULL,
  `updatedAt` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `votes`.`teams`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `votes`.`teams` ;

CREATE TABLE IF NOT EXISTS `votes`.`teams` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `createdAt` DATETIME NOT NULL,
  `updatedAt` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `votes`.`competitors`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `votes`.`competitors` ;

CREATE TABLE IF NOT EXISTS `votes`.`competitors` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `createdAt` DATETIME NOT NULL,
  `updatedAt` DATETIME NOT NULL,
  `teams_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`, `teams_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_competitors_teams1_idx` (`teams_id` ASC),
  CONSTRAINT `fk_competitors_teams1`
    FOREIGN KEY (`teams_id`)
    REFERENCES `votes`.`teams` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `votes`.`criterias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `votes`.`criterias` ;

CREATE TABLE IF NOT EXISTS `votes`.`criterias` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `description` TEXT NULL,
  `weight` INT NULL,
  `createdAt` DATETIME NOT NULL,
  `updatedAt` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `votes`.`votes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `votes`.`votes` ;

CREATE TABLE IF NOT EXISTS `votes`.`votes` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `value` INT NOT NULL,
  `createdAt` DATETIME NOT NULL,
  `updatedAt` DATETIME NOT NULL,
  `users_id` INT UNSIGNED NOT NULL,
  `criterias_id` INT UNSIGNED NOT NULL,
  `teams_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`, `users_id`, `criterias_id`, `teams_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_votes_users1_idx` (`users_id` ASC),
  INDEX `fk_votes_criterias1_idx` (`criterias_id` ASC),
  INDEX `fk_votes_teams1_idx` (`teams_id` ASC),
  CONSTRAINT `fk_votes_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `votes`.`users` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_votes_criterias1`
    FOREIGN KEY (`criterias_id`)
    REFERENCES `votes`.`criterias` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_votes_teams1`
    FOREIGN KEY (`teams_id`)
    REFERENCES `votes`.`teams` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;