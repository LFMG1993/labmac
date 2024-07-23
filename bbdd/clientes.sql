-- Item	tipo doc	identificacion	nombre_empresa	nombre_contacto	direccion	municipio	telefono	correo	

CREATE TABLE clientes(
id_clientes int AUTO_INCREMENT PRIMARY KEY,
tipo_doc VARCHAR(50),
identificacion VARCHAR(50),
nombre_empresa VARCHAR(50),
nombre_contacto VARCHAR(50),
direccion VARCHAR(50),
municipio VARCHAR(50),
telefono VARCHAR(50),
correo VARCHAR(50)
);

SELECT
id_clientes, 
tipo_doc, 
identificacion, 
nombre_empresa,	
nombre_contacto, 
direccion,	
municipio, 
telefono,	
correo
FROM clientes;

INSERT INTO clientes (id_clientes,
tipo_doc,
identificacion,
nombre_empresa,
nombre_contacto,
direccion,
municipio,
telefono,
correo
) VALUES (
'1',
'1',
'1',
'1',
'1',
'1',
'1',
'1',
'1'
);

INSERT INTO clientes(
tipo_doc,
identificacion,
nombre_empresa,
nombre_contacto,
direccion,	
municipio, 
telefono,	
correo
) VALUES (
:tipo_doc,
:identificacion,
:nombre_empresa,	
:nombre_contacto,
:direccion,
:municipio, 
:telefono,	
:correo
);

UPDATE clientes SET 
tipo_doc=:tipo_doc,
identificacion=:identificacion,
nombre_empresa= :nombre_empresa,
nombre_contacto= :nombre_contacto,
direccion=:direccion,
municipio= :municipio,
telefono= :telefono	,
correo= :correo
WHERE id_clientes=:id_clientes;

DELETE FROM clientes
WHERE id_clientes=:id_clientes;