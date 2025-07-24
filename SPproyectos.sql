
DELIMITER $$

DROP PROCEDURE IF EXISTS insertarP $$

CREATE PROCEDURE insertarP(IN nombre varchar(50), IN descripcion varchar(400),IN imagenX varchar(100),IN linkX varchar(100)) 

BEGIN

INSERT INTO proyectos(nombreProyecto,descripcionProyecto, imagen, link)
values(nombre, descripcion, imagenX,linkX);
END $$

/***********/

DELIMITER $$
DROP PROCEDURE IF EXISTS mostrarProyectos $$

CREATE PROCEDURE mostrarProyectos() 

BEGIN

SELECT idProyecto, nombreProyecto, descripcionProyecto, imagen, link FROM proyectos; 

END $$

CALL mostrarProyectos();

/**********/


DELIMITER $$
DROP PROCEDURE IF EXISTS mostrarProyecto $$

CREATE PROCEDURE mostrarProyecto(IN id int) 

BEGIN

SELECT idProyecto, nombreProyecto, descripcionProyecto, imagen, link FROM proyectos
WHERE idProyecto = id; 

END $$

CALL mostrarProyecto(1);


/*************/


DELIMITER $$

DROP PROCEDURE IF EXISTS editarP $$

CREATE PROCEDURE editarP(IN id int, IN nombre varchar(50), IN descripcion varchar(400),IN imagenX varchar(100),IN linkX varchar(100)) 

BEGIN
IF(imagenX = "")
THEN
UPDATE proyectos SET nombreProyecto = nombre ,descripcionProyecto = descripcion, link = linkX
WHERE idProyecto = id;
ELSE
UPDATE proyectos SET nombreProyecto = nombre ,descripcionProyecto = descripcion, imagen = imagenX, link = linkX
WHERE idProyecto = id;
END IF;
END $$



/***********************/


DELIMITER $$
DROP PROCEDURE IF EXISTS borrarProyecto $$

CREATE PROCEDURE borrarProyecto(IN id int) 

BEGIN

DELETE FROM proyectos WHERE idProyecto = id;

END $$
