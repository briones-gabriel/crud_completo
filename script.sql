CREATE DATABASE IF NOT EXISTS briones-crud-completo
USE briones-crud-completo

CREATE TABLE IF NOT EXISTS alumnos (
    ID INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(32) NOT NULL,
    apellido VARCHAR(32) NOT NULL,
    edad INT NOT NULL,
    email VARCHAR() NOT NULL,
    escuela VARCHAR() NOT NULL,
    PRIMARY KEY (ID)
)