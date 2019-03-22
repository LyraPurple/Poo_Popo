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

CREATE TABLE `vtc`.`association_vehicule_conduteur` (
  `id_association_vehicule_conduteur` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_association_vehicule_conduteur`),
  UNIQUE INDEX `id_association_vehicule_conduteur_UNIQUE` (`id_association_vehicule_conduteur` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE `vtc`.`vehicule` (
  `id_vehicule` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `marque` VARCHAR(45) NOT NULL,
  `model` VARCHAR(45) NOT NULL,
  `couleur` VARCHAR(45) NOT NULL,
  `immatriculation` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_vehicule`),
  UNIQUE INDEX `id_vehicule_UNIQUE` (`id_vehicule` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

ALTER TABLE `vtc`.`association_vehicule_conduteur` 
ADD COLUMN `id_vehicule` INT(10) UNSIGNED NOT NULL AFTER `id_association_vehicule_conduteur`,
ADD COLUMN `id_conducteur` INT(10) UNSIGNED NOT NULL AFTER `id_vehicule`;

ALTER TABLE `vtc`.`association_vehicule_conduteur` 
ADD INDEX `id_vehicule_idx` (`id_vehicule` ASC) ;
;
ALTER TABLE `vtc`.`association_vehicule_conduteur` 
ADD CONSTRAINT `id_vehicule`
  FOREIGN KEY (`id_vehicule`)
  REFERENCES `vtc`.`vehicule` (`id_vehicule`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `vtc`.`association_vehicule_conduteur` 
ADD INDEX `id_conducteur_idx` (`id_conducteur` ASC) ;
;
ALTER TABLE `vtc`.`association_vehicule_conduteur` 
ADD CONSTRAINT `id_conducteur`
  FOREIGN KEY (`id_conducteur`)
  REFERENCES `vtc`.`conducteur` (`id_conducteur`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

INSERT INTO `vtc`.`conducteur` (`prenom`, `nom`) VALUES ('Julien', 'Avigny');
INSERT INTO `vtc`.`conducteur` (`prenom`, `nom`) VALUES ('Morgane', 'Alamia');
INSERT INTO `vtc`.`conducteur` (`prenom`, `nom`) VALUES ('Philippe', 'Pander');
INSERT INTO `vtc`.`conducteur` (`prenom`, `nom`) VALUES ('Amelie', 'Blondelle');
INSERT INTO `vtc`.`conducteur` (`prenom`, `nom`) VALUES ('Alexax', 'Ricky');

INSERT INTO `vtc`.`vehicule` (`id_vehicule`, `marque`, `model`, `couleur`, `immatriculation`) VALUES ('501', 'Peugeaot', '807', 'noir', 'AB-355-CA');
INSERT INTO `vtc`.`vehicule` (`marque`, `model`, `couleur`, `immatriculation`) VALUES ('Citroen', 'C8', 'bleu', 'CE-122-AE');
INSERT INTO `vtc`.`vehicule` (`marque`, `model`, `couleur`, `immatriculation`) VALUES ('Mercedes', 'Cls', 'vert', 'FG-953-HI');
INSERT INTO `vtc`.`vehicule` (`marque`, `model`, `couleur`, `immatriculation`) VALUES ('Volkswagen', 'Touran', 'noir', 'SO-322-NV');
INSERT INTO `vtc`.`vehicule` (`marque`, `model`, `couleur`, `immatriculation`) VALUES ('Skoda', 'Octavia', 'gris', 'PB-631-TK');
INSERT INTO `vtc`.`vehicule` (`marque`, `model`, `couleur`, `immatriculation`) VALUES ('Volkswagen', 'Passat', 'gris', 'XN-973-MM');

INSERT INTO `vtc`.`association_vehicule_conduteur` (`id_vehicule`, `id_conducteur`) VALUES ('501', '1');
INSERT INTO `vtc`.`association_vehicule_conduteur` (`id_vehicule`, `id_conducteur`) VALUES ('502', '2');
INSERT INTO `vtc`.`association_vehicule_conduteur` (`id_vehicule`, `id_conducteur`) VALUES ('503', '3');
INSERT INTO `vtc`.`association_vehicule_conduteur` (`id_vehicule`, `id_conducteur`) VALUES ('504', '4');
INSERT INTO `vtc`.`association_vehicule_conduteur` (`id_vehicule`, `id_conducteur`) VALUES ('501', '3');
