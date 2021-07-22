CREATE SCHEMA `gastos` DEFAULT CHARACTER SET utf8mb4 ;

CREATE TABLE `t_fechas` (
  `id_fecha` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `fechaInsert` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
ALTER TABLE `gastos`.`t_fechas` 
CHANGE COLUMN `id_fecha` `id_fecha` INT(11) NOT NULL AUTO_INCREMENT ,
ADD PRIMARY KEY (`id_fecha`);

CREATE TABLE `gastos`.`t_gastos` (
  `id_gastos` INT NOT NULL AUTO_INCREMENT,
  `descripcion` TEXT NULL,
  `monto` INT NOT NULL,
  `fechaInsert` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`id_gastos`));
  ALTER TABLE `gastos`.`t_gastos` 
ADD COLUMN `id_fecha` INT NOT NULL AFTER `id_gastos`;

ALTER TABLE `gastos`.`t_gastos` 
ADD INDEX `fkgastosFechas_idx` (`id_fecha` ASC);
;
ALTER TABLE `gastos`.`t_gastos` 
ADD CONSTRAINT `fkgastosFechas`
  FOREIGN KEY (`id_fecha`)
  REFERENCES `gastos`.`t_fechas` (`id_fecha`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;