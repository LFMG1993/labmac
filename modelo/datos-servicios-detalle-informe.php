<?php

class ServiciosDetallesInforme
{
    /* ver un producto por su codigo */
    function viewServicioDetalleId($id_detalles_informe)
    {
        require_once 'conexion.php';
        $conexion = new Conexion();
        $consulta = "SELECT
                    id_detalles_informe,
                    detalle_id,
                    codigo,
                    resultado,
                    magnitud FROM
                    servicios_detalle_informe
                    WHERE id_detalles_informe =:id_detalles_informe
                    ORDER BY id_detalles_informe ASC";
        $modules = $conexion->prepare($consulta);
        $modules->bindParam(":id_detalles_informe", $id_detalles_informe);
        $modules->execute();
        $response = $modules->fetch(PDO::FETCH_ASSOC);
        return $response;
    }
    // Retornar todos los Productos
    function viewServiciosDetalles()
    {
        require_once 'conexion.php';
        $conexion = new Conexion();
        $consulta = "SELECT
                    id_detalles_informe,
                    detalle_id,
                    codigo,
                    resultado,
                    magnitud FROM
                    servicios_detalle_informe
                    ORDER BY id_detalles_informe ASC";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $response = $modules->fetch(PDO::FETCH_ASSOC);
        return $response;
    }
    /* Retornar la cantidad de productos */
    function countServiciosDetalles()
    {
        require_once 'conexion.php';
        $conexion = new Conexion();
        $consulta = "SELECT 
            count(id_detalles_informe) as cant 
            FROM servicios_detalle_informe";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $data = $modules->fetch(PDO::FETCH_ASSOC);
        return $data['cant'];
    }
}

/* ver servicio ensayo por id
$id = '1';
$misProductos = new ServiciosDetallesInforme();
$response = $misProductos->viewServicioDetalleId($id);
var_dump($response); */

/* Retornar todos los Productos
$misProductos = new ServiciosDetallesInforme();
$response = $misProductos->viewServiciosDetalles();
var_dump($response); */

/* Retornar la cantidad de productos
$misProductos = new ServiciosDetallesInforme();
$response = $misProductos->countServiciosDetalles();
var_dump($response); */
