
DELIMITER $$

DROP PROCEDURE IF EXISTS insertarT $$

CREATE PROCEDURE insertarT(IN nombre varchar(100), IN descripcion varchar(100),IN imagenX varchar(100)) 

BEGIN

INSERT INTO tecnologias(nombre,descripcion, img)
values(nombre, descripcion, imagenX);
END $$

/***********************/


DELIMITER $$
DROP PROCEDURE IF EXISTS mostrarTecnologias $$

CREATE PROCEDURE mostrarTecnologias() 

BEGIN

SELECT id, nombre, descripcion, img FROM tecnologias; 

END $$


/******************************/



DELIMITER $$
DROP procedure IF EXISTS mostrarTecnologia $$ 
CREATE PROCEDURE mostrarTecnologia(IN idx int) 

BEGIN

SELECT id, nombre, descripcion, img FROM tecnologias
WHERE id = idx; 

END $$


/***********************/

DELIMITER $$

DROP PROCEDURE IF EXISTS editarT $$

CREATE PROCEDURE editarT(IN idx int, IN nombrex varchar(50), IN descripcionx varchar(400),IN imagenX varchar(100)) 

BEGIN
IF(imagenX = "")
THEN
UPDATE tecnologias SET nombre = nombrex ,descripcion = descripcionx
WHERE id = idx;
ELSE
UPDATE tecnologias SET nombre = nombrex ,descripcion = descripcionx, img = imagenX
WHERE id = idx;
END IF;
END $$


/*************************/

DELIMITER $$
DROP PROCEDURE IF EXISTS borrarTecnologia $$

CREATE PROCEDURE borrarTecnologia(IN idx int) 

BEGIN

DELETE FROM tecnologias WHERE id = idx;

END $$

/**********************/