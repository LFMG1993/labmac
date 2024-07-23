<?php

class MisClientes
{
    /* Ver cliente por número de indentificación */
    function viewClienteIdentificacion($identificacion)
    {
        require_once 'conexion.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT
                    id_clientes, 
                    tipo_doc, 
                    identificacion, 
                    nombre_empresa,	
                    nombre_contacto, 
                    direccion,	
                    municipio, 
                    telefono,	
                    correo
                    FROM clientes
                    WHERE identificacion = :identificacion;";
        $modules = $conexion->prepare($consulta);
        $modules->bindParam(":identificacion", $identificacion);
        $modules->execute();
        $response = $modules->fetch(PDO::FETCH_ASSOC);
        return $response;
    }

    /* Ver el listado de todos los clientes */
    function viewClientes()
    {
        require_once 'conexion.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT
                    id_clientes, 
                    tipo_doc, 
                    identificacion, 
                    nombre_empresa,	
                    nombre_contacto, 
                    direccion,	
                    municipio, 
                    telefono,	
                    correo
                    FROM clientes
                    ORDER BY id_clientes ASC;";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $response = $modules->fetchAll(PDO::FETCH_ASSOC);
        return $response;
    }

    /* Retornar la cantidad de clientes */
    function countClientes()
    {
        require_once 'conexion.php';
        $conexion = new Conexion();
        $consulta = "SELECT 
            count(id_clientes) as cant 
            FROM clientes";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $data = $modules->fetch(PDO::FETCH_ASSOC);
        return $data['cant'];
    }

    //registra un nuevo usuario 
    public function insertClientes(array $array): bool
    {
        $tipo_doc = $array['tipo_doc'];
        $identificacion = $array['identificacion'];
        $nombre_empresa = $array['nombre_empresa'];
        $nombre_contacto = $array['nombre_contacto'];
        $direccion = $array['direccion'];
        $municipio = $array['municipio'];
        $telefono = $array['telefono'];
        $correo = $array['correo'];

        require_once 'conexion.php';
        $conexion = new Conexion();
        $sql = "INSERT INTO clientes(
                tipo_doc,
                identificacion,
                nombre_empresa,
                nombre_contacto,
                direccion,	
                municipio, 
                telefono,	
                correo) VALUES (?, ?, ?, ?, ?, ? ,? ,?);";
        $reg = $conexion->prepare($sql);
        $reg->bindParam(1, $tipo_doc);
        $reg->bindParam(2, $identificacion);
        $reg->bindParam(3, $nombre_empresa);
        $reg->bindParam(4, $nombre_contacto);
        $reg->bindParam(5, $direccion);
        $reg->bindParam(6, $municipio);
        $reg->bindParam(7, $telefono);
        $reg->bindParam(8, $correo);
        $response = $reg->execute();
        return $response;
    }
}
class ControllerMisClientes
{

    /* Ver cliente por número de indentificación */
    function viewClienteIdentificacion($identificacion)
    {
        $misClientes = new MisClientes();
        $response = $misClientes->viewclienteIdentificacion($identificacion);
        return $response;
    }

    /* Ver el listado de todos los clientes */
    function viewClientes()
    {
        $misClientes = new MisClientes();
        $response = $misClientes->viewclientes();
        return $response;
    }

    /* Retornar la cantidad de clientes */
    function countClientes()
    {
        $misClientes = new MisClientes();
        $response = $misClientes->countClientes();
        return $response;
    }


    public function insertClientes(array $array): bool
    {
        $misClientes = new MisClientes();
        $response = $misClientes->insertClientes($array);
        return $response;
    }
}

/*
*/
$identificacion = 1090384538;
$controller = new ControllerMisClientes();
$response1 = $controller->viewClienteIdentificacion($identificacion);
$response2 = $controller->viewClientes();
$response3 = $controller->countClientes();
var_dump($response3);
