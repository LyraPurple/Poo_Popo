CREATE SCHEMA `vtc` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE `vtc`.`conducteur` (
  `id_conducteur` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `prenom` VARCHAR(80) NOT NULL,
  `nom` VARCHAR(80) NOT NULL,
  PRIMARY KEY (`id_conducteur`),
  UNIQUE INDEX `id_conducteur_UNIQUE` (`id_conducteur` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_mysql500_ci;

CREATE TABLE `vtc`.`association_vehicule_conducteur` (
  `id_association` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_association`),
  UNIQUE INDEX `id_association_UNIQUE` (`id_association` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;
ALTER TABLE `vtc`.`association_vehicule_conducteur` 
CHANGE COLUMN `id_association` `id_association` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ;


CREATE TABLE `vtc`.`vehicule` (
  `id_vehicule` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `marque` VARCHAR(45) NOT NULL,
  `modele` VARCHAR(45) NOT NULL,
  `couleur` VARCHAR(45) NOT NULL,
  `immatriculation` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_vehicule`),
  UNIQUE INDEX `id_vehicule_UNIQUE` (`id_vehicule` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

ALTER TABLE `vtc`.`association_vehicule_conducteur` 
ADD COLUMN `id_vehicule` INT(10) UNSIGNED NOT NULL AFTER `id_association`,
ADD COLUMN `id_conducteur` INT(10) UNSIGNED NOT NULL AFTER `id_vehicule`;

ALTER TABLE `vtc`.`association_vehicule_conducteur` 
ADD INDEX `id_vehicule_idx` (`id_vehicule` ASC) ;
;
ALTER TABLE `vtc`.`association_vehicule_conducteur` 
ADD CONSTRAINT `id_vehicule`
  FOREIGN KEY (`id_vehicule`)
  REFERENCES `vtc`.`vehicule` (`id_vehicule`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `vtc`.`association_vehicule_conducteur` 
ADD INDEX `id_conducteur_idx` (`id_conducteur` ASC) ;
;
ALTER TABLE `vtc`.`association_vehicule_conducteur` 
ADD CONSTRAINT `id_conducteur`
  FOREIGN KEY (`id_conducteur`)
  REFERENCES `vtc`.`conducteur` (`id_conducteur`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
