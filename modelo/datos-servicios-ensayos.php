<?php

class ServiciosEnsayos
{
    /* ver un producto por su codigo */
    function viewServicioEnsayoId($id_servicios_ensayos)
    {
        require_once 'conexion.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT 
            id_servicios_ensayos,
            cotizacion,
            prefactura,
            cliente_id,
            fecha_solicitud,
            fecha_pago,
            fecha_entrega,
            observaciones
            FROM servicios_ensayos
            WHERE id_servicios_ensayos = :id_servicios_ensayos
            ORDER BY id_servicios_ensayos ASC";
        $modules = $conexion->prepare($consulta);
        $modules->bindParam(":id_servicios_ensayos", $id_servicios_ensayos);
        $modules->execute();
        $response = $modules->fetch(PDO::FETCH_ASSOC);
        return $response;
    }
    // Retornar todos los Productos
    function viewServiciosEnsayos()
    {
        require_once 'conexion.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT
            id_servicios_ensayos,
            cotizacion,
            prefactura,
            cliente_id,
            fecha_solicitud,
            fecha_pago,
            fecha_entrega,
            observaciones
            FROM servicios_ensayos
            ORDER BY id_servicios_ensayos ASC";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $response = $modules->fetch(PDO::FETCH_ASSOC);
        return $response;
    }
    /* Retornar la cantidad de productos */
    function countServiciosEnsayos()
    {
        require_once 'conexion.php';
        $conexion = new Conexion();
        $consulta = "SELECT 
            count(id_servicios_ensayos) as cant 
            FROM servicios_ensayos";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $data = $modules->fetch(PDO::FETCH_ASSOC);
        return $data['cant'];
    }
}

/* ver servicio ensayo por id
$id_servicios_ensayos = '1';
$misProductos = new ServiciosEnsayos();
$response = $misProductos->viewServicioEnsayoId($id_servicios_ensayos);
var_dump($response); */

/* Retornar todos los Productos
$misProductos = new ServiciosEnsayos();
$response = $misProductos->viewServiciosEnsayos();
var_dump($response); */

/* Retornar la cantidad de productos
$misProductos = new ServiciosEnsayos();
$response = $misProductos->countServiciosEnsayos();
var_dump($response); */
