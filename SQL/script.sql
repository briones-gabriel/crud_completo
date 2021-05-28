CREATE DATABASE IF NOT EXISTS briones_crud_completo;
USE briones_crud_completo;

CREATE TABLE IF NOT EXISTS alumnos (
    ID INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(32) NOT NULL,
    apellido VARCHAR(32) NOT NULL,
    edad INT NOT NULL,
    email VARCHAR(64) NOT NULL,
    escuela VARCHAR(64) NOT NULL,
    PRIMARY KEY (ID)
);

INSERT INTO `alumnos` (nombre, apellido, edad, email, escuela)
VALUES ("Valentin", "Ventos", 18, "emaildeejemplo@hotmail.com", "EEST N1");

INSERT INTO `alumnos` (nombre, apellido, edad, email, escuela)
VALUES ("Emanual", "Ragone", 18, "emaildeejemplo@hotmail.com", "EEST N1");

INSERT INTO `alumnos` (nombre, apellido, edad, email, escuela)
VALUES ("Erick", "Irusta", 18, "emaildeejemplo@hotmail.com", "EEST N1");

INSERT INTO `alumnos` (nombre, apellido, edad, email, escuela)
VALUES ("Valentin", "Masaccessi", 18, "emaildeejemplo@hotmail.com", "EEST N1");

INSERT INTO `alumnos` (nombre, apellido, edad, email, escuela)
VALUES ("Valentin", "Napolitan", 18, "emaildeejemplo@hotmail.com", "EEST N1");

INSERT INTO `alumnos` (nombre, apellido, edad, email, escuela)
VALUES ("Joaquin", "Labarta", 18, "emaildeejemplo@hotmail.com", "EEST N1");

INSERT INTO `alumnos` (nombre, apellido, edad, email, escuela)
VALUES ("Facundo", "Rodriguez", 18, "emaildeejemplo@hotmail.com", "EEST N1");

INSERT INTO `alumnos` (nombre, apellido, edad, email, escuela)
VALUES ("Maximo", "Dappiano", 18, "emaildeejemplo@hotmail.com", "EEST N1");
