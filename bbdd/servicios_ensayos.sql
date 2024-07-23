/*
cotizacion	prefactura	cliente_id	fecha_solicitud	fecha_pago	fecha_entrega	observaciones
*/

CREATE TABLE servicios_ensayos(
id_servicios_ensayos int AUTO_INCREMENT PRIMARY KEY,
cotizacion VARCHAR(50),
prefactura VARCHAR(50),
cliente_id VARCHAR(50),
fecha_solicitud VARCHAR(50),
fecha_pago VARCHAR(50),
fecha_entrega VARCHAR(50),
observaciones VARCHAR(50)
);

INSERT INTO servicios_ensayos(
cotizacion,
prefactura,
cliente_id,
fecha_solicitud,
fecha_pago,
fecha_entrega,
observaciones
) VALUES ( 
'6126625245',
'89623',
'1127580818',
'16/04/2024',
'18/06/2024',
'20/06/2024',
'blablabla'													
);

SELECT 
id_servicios_ensayos,
servicios_ensayos,
cotizacion,
prefactura,
cliente_id,
fecha_solicitud,
fecha_pago,
fecha_entrega,
observaciones
FROM servicios_ensayos;

INSERT INTO servicios_ensayos(
servicios_ensayos,
cotizacion,
prefactura,
cliente_id,
fecha_solicitud,
fecha_pago,
fecha_entrega,
observaciones
) VALUES (
:servicios_ensayos,
:cotizacion,
:prefactura,
:cliente_id,
:fecha_solicitud,
:fecha_pago,
:fecha_entrega,
:observaciones
);

UPDATE servicios_ensayos SET 
cotizacion= :cotizacion,
prefactura=:prefactura,
cliente_id=:cliente_id,
fecha_solicitud=:fecha_solicitud,
fecha_pago=:fecha_pago,
fecha_entrega=:fecha_entrega,
observaciones=:observaciones
WHERE id_servicios_ensayos=:id_servicios_ensayos;

DELETE FROM servicios_ensayos
WHERE id_servicios_ensayos=:id_servicios_ensayos;
