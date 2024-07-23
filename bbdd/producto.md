# Documentación de base de datos

## Tabla producto
```SQL
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
```

## Insert de producto
```SQL
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
```
