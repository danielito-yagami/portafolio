

DELIMITER $$

DROP PROCEDURE IF EXISTS usuarios $$

CREATE PROCEDURE usuarios(IN correoX VARCHAR(100), IN pass VARCHAR(100))

BEGIN

DECLARE validar int;

SET validar = (SELECT COUNT(id) FROM usuarios WHERE correo = correoX AND contraseña = pass);

if(validar = 1)

THEN

SELECT "si" as respuesta;

ELSE 

SELECT "no" as respuesta;

END IF;

END $$

/************Para separar por ROL ******************/


DELIMITER $$ 
DROP PROCEDURE IF EXISTS asignar $$
CREATE PROCEDURE asignar(IN correox varchar(100))
BEGIN
DECLARE idx int;

SET idx = (SELECT id FROM usuarios WHERE correo = correox);

IF(idx > 0)
THEN
SELECT rol FROM usuarios WHERE correo = correox;
ELSE 
SELECT 'sin rol' as rol;
END IF;
END;
