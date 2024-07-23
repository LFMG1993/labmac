<?php

class ServiciosDetalles
{
    /* ver un producto por su codigo */
    function viewServicioDetalleId($id_servicios_detalles)
    {
        require_once 'conexion.php';
        $conexion = new Conexion();
        $consulta = "SELECT
            id_servicios_detalles,
            servicio_id,
            producto_id,
            costo,
            observaciones 
            FROM servicios_detalles 
            WHERE id_servicios_detalles =:id_servicios_detalles
            ORDER BY id_servicios_detalles ASC";
        $modules = $conexion->prepare($consulta);
        $modules->bindParam(":id_servicios_detalles", $id_servicios_detalles);
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
            id_servicios_detalles,
            servicio_id,
            producto_id,
            costo,
            observaciones 
            FROM servicios_detalles
            ORDER BY id_servicios_detalles ASC";
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
            count(id_servicios_detalles) as cant 
            FROM servicios_detalles";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $data = $modules->fetch(PDO::FETCH_ASSOC);
        return $data['cant'];
    }
}


// ver servicio ensayo por id
// $id = '1';
// $misProductos = new ServiciosDetalles();
// $response = $misProductos->viewServicioDetalleId($id);
// var_dump($response); 

//  Retornar todos los Productos
// $misProductos = new ServiciosDetalles();
// $response = $misProductos->viewServiciosDetalles();
// var_dump($response); 

//  Retornar la cantidad de productos
// $misProductos = new ServiciosDetalles();
// $response = $misProductos->countServiciosDetalles();
// var_dump($response); 
