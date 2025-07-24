
/*SP Insertar mensajes*/

DELIMITER $$

DROP PROCEDURE IF EXISTS insertarM $$

CREATE PROCEDURE insertarM(IN mensaje varchar(500)) 

BEGIN

INSERT INTO saludos(presentacion)
values(mensaje);
END $$

/*SP mostrar mensajes**/

DELIMITER $$
DROP PROCEDURE IF EXISTS mostrarSaludos $$

CREATE PROCEDURE mostrarSaludos() 

BEGIN

SELECT id, presentacion FROM saludos; 

END $$


/*SP mostrar mensajes id**/

DELIMITER $$
DROP PROCEDURE IF EXISTS mostrarSaludo $$

CREATE PROCEDURE mostrarSaludo(IN idx int) 

BEGIN

SELECT id, presentacion FROM saludos WHERE id = idx; 

END $$


/*Borrar Mensajes**/


DELIMITER $$
DROP PROCEDURE IF EXISTS borrarMensaje $$

CREATE PROCEDURE borrarMensaje(IN idx int) 

BEGIN

DELETE FROM saludos WHERE id = idx;

END $$


/**SP editar */

DELIMITER $$

DROP PROCEDURE IF EXISTS editarM $$

CREATE PROCEDURE editarM(IN idx int, IN mensaje varchar(400)) 

BEGIN

UPDATE saludos SET presentacion = mensaje
WHERE id = idx;

END $$

/**Para mostrarl mensaje*/
DELIMITER $$
DROP PROCEDURE IF EXISTS mostrarL $$
CREATE PROCEDURE mostrarL()
BEGIN 
SELECT presentacion FROM saludos WHERE id = (SELECT max(id) FROM saludos);
END;

CALL mostrarL()