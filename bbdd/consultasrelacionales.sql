select
se.id_servicios_ensayos,
se.cotizacion,
se.prefactura,
se.cliente_id,
se.fecha_solicitud,
se.fecha_pago,
se.fecha_entrega,
se.observaciones,
cl.id_clientes,
cl.tipo_doc,
cl.identificacion,
cl.nombre_empresa,
cl.nombre_contacto,
cl.direccion,
cl.municipio,
cl.telefono,
cl.correo
FROM 
servicios_ensayos as se,
clientes as cl 
WHERE
cl.id_clientes = se.cliente_id;
