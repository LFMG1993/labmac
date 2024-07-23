create TABLE servicios_detalles(
id_servicios_detalles int AUTO_INCREMENT PRIMARY KEY,
servicio_id VARCHAR(50),
producto_id VARCHAR(50),
costo VARCHAR(50),
observaciones VARCHAR(50)
);

INSERT INTO servicios_detalles(
servicio_id	,
producto_id	costo,
observaciones
) VALUES (
:servicio_id,
:producto_id,
:costo,
:observaciones
);

SELECT 
id_servicios_detalles,
 servicio_id,
 producto_id,
 costo,
 observaciones
FROM servicios_detalles;

 
 UPDATE servicios_detalles SET 
 servicio_id=:servicio_id,
 producto_id=:producto_id,
 costo=:costo,
 observaciones=:observaciones
 WHERE id_servicios_detalles=:id_servicios_detalles;
 
 DELETE FROM servicios_detalles 
 WHERE id_servicios_detalles=:id_servicios_detalles;