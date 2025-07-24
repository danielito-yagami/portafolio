/***

Author Daniel Cortes Vaca 2025
**/

CREATE DATABASE portafolio;

use portafolio;


CREATE TABLE IF NOT EXISTS proyectos(


idProyecto int primary key auto_increment,
nombreProyecto varchar(50),
descripcionProyecto varchar(100),
imagen varchar(100),
link varchar(100)


);

CREATE TABLE IF NOT EXISTS tecnologias(

id int primary key auto_increment,
nombre varchar(100),
descripcion varchar(100),
img varchar(100)



);

CREATE TABLE IF NOT EXISTS saludos(

id int primary key auto_increment,
presentacion varchar(500)


);

CREATE TABLE usuarios(

id int primary key auto_increment,
nombre varchar(50),
apellido varchar(50),
correo varchar(100),
contraseña varchar(100)


);