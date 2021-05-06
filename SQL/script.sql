CREATE DATABASE IF NOT EXISTS briones_crud_completo
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