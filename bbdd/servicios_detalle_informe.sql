CREATE TABLE servicios_detalle_informe(
id_detalles_informe int AUTO_INCREMENT PRIMARY KEY,
detalle_id	VARCHAR(50),
codigo	VARCHAR(50),
resultado VARCHAR(50),
magnitud VARCHAR(50)
);

SELECT 
id_detalles_informe,
servicio_id,
producto_id,
costo,
observaciones
FROM servicios_detalle_informe;


INSERT INTO servicios_detalle_informe(
id_servicios_detalles,
servicio_id,
producto_id,
costo,
observaciones
) VALUES (
:id_servicios_detalles,
:servicio_id,
:producto_id,
:costo,
:observaciones
);

UPDATE servicios_detalle_informe SET
servicio_id=:servicio_id,
producto_id=:producto_id,
costo=:costo,
observaciones=:observaciones 
WHERE id_servicios_detalles=:id_servicios_detalles;


DELETE FROM servicios_detalles 
WHERE id_servicios_detalles=:id_servicios_detalles;

