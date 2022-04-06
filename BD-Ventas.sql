CREATE DATABASE ventas;
USE ventas;
CREATE TABLE products(
id int(100) AUTO_INCREMENT PRIMARY KEY,
nombreProducto VARCHAR(150) NOT NULL,
precio FLOAT NOT NULL,
unidades INT(100) NOT NULL,
descripcion VARCHAR(150) NOT NULL
);

INSERT INTO products VALUES
(NULL,'Labial Beauty Creations Nude',90.0,15,'#2BCN'),
(NULL,'Labial Bebella Pink',57.0,25,'#2BBP'),
(NULL,'Labial Beauty Creations Velvet',85.6,32,'#2BCV'),
(NULL,'Labial S.HE Natural Look',35.9,10,'#2SNL'),
(NULL,'Labial L.A Girl Glazed',105.0,17,'#2LAG');