
CREATE TABLE producto(
id_producto int AUTO_INCREMENT PRIMARY KEY,
codigo VARCHAR(50),
Nombre VARCHAR(110),
precio_minimo VARCHAR(50),
precio_maximo VARCHAR(50),
medida VARCHAR(50),
clase VARCHAR(50),
codigo_familiar VARCHAR(50),
nombre_familia VARCHAR(50)
);

INSERT INTO producto(
codigo,
nombre,
precio_minimo,
precio_maximo,
medida,
clase,
codigo_familiar,
nombre_familia
) VALUES (
'18130100367',
'INV E 154-13 Determinación de la resistencia al corte. Método de corte directo drenado (3 Puntos)',
'226814',
'252015','Unidad',
'Servicios de laboratorio',
'8130',
'Servicios tecnológicos'
);

SELECT
id_producto,
codigo,
nombre,
precio_Minimo,
precio_Maximo,
medida,
clase,
codigo_familiar,
nombre_familia
FROM producto;

INSERT INTO producto(
codigo,
nombre,
precio_minimo,
precio_maximo,
medida,
clase,
codigo_familiar,
nombre_familia
) VALUES (
:codigo,
:nombre,
:precio_minimo,
:precio_maximo,
:medida,
:clase,
:codigo_familiar,
:nombre_familia
);

UPDATE producto SET 
codigo = :codigo,
nombre = :nombre,
precio_minimo = :precio_minimo,
precio_maximo = :precio_maximo,
medida = :medida,
clase = :clase,
codigo_familiar = :codigo_familiar,
nombre_familia = :codigo_familiar
WHERE id_clientes=:id_clientes;

DELETE FROM producto
WHERE id_clientes=:id_clientes;
