--Create DB

create database webservicepostmanphp;

use webservicepostmanphp;

--Creacion de tabla

CREATE TABLE webservicepostmanphp.categoria (
  cat_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  cat_nombre VARCHAR(50) NOT NULL,
  cat_observacion VARCHAR(250) NOT NULL,
  cat_estado INT UNSIGNED NOT NULL,
  PRIMARY KEY (cat_id));

-- Insercion de datos

INSERT INTO categoria (cat_id, cat_nombre, cat_observacion, cat_estado) VALUES
(1, 'Televisores', 'Observacion TV', 1),
(2, 'Refrigeradoras', 'Observacion Refrigeradoras', 1),
(3, 'Cocinas', 'Observacion Cocinas', 1),
(4, 'Lavadoras', 'Observacion Lavadoras', 1),
(5, 'PC', 'Observacion PC', 1),
(6, 'Xtreme', 'Observacion Xtreme', 1),
(7, 'Laptos X', 'Observacion Laptops X', 1),
(8, '6', 'Xtreme', 0),
(9, '6', 'Xtreme', 0),
(10, '6', 'Xtreme', 0);


-- Queries

SELECT cat_id, cat_nombre, cat_observacion, cat_estado FROM webservicepostmanphp.categoria;

SELECT cat_id, cat_nombre, cat_observacion, cat_estado FROM webservicepostmanphp.categoria where cat_estado=1;

SELECT cat_id, cat_nombre, cat_observacion, cat_estado FROM webservicepostmanphp.categoria where cat_id=1;

UPDATE webservicepostmanphp.categoria set cat_estado=0 where cat_id = 10 ;

INSERT INTO webservicepostmanphp.categoria(cat_id,cat_nombre,cat_observacion,cat_estado) values (null,'PC','Observacion PC',1);