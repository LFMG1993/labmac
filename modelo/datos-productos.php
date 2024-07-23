<?php

class MisProductos
{
    /* ver un producto por su codigo */
    function viewProductoCodigo($codigo)
    {
        require_once 'conexion.php';
        $conexion = new Conexion();
        $consulta = "SELECT
                    id_producto,
                    codigo,
                    Nombre,
                    precio_minimo,
                    precio_maximo,
                    medida,
                    clase,
                    codigo_familiar,
                    nombre_familia
                    FROM producto
                    WHERE codigo = :codigo";
        $modules = $conexion->prepare($consulta);
        $modules->bindParam(":codigo", $codigo);
        $modules->execute();
        $response = $modules->fetch(PDO::FETCH_ASSOC);
        return $response ? $response : [];
    }

    // Retornar todos los Productos
    public function viewProductos()
    {
        require_once 'conexion.php';
        $conexion = new Conexion();
        $consulta = "SELECT
                    id_producto,
                    codigo,
                    Nombre,
                    precio_minimo,
                    precio_maximo,
                    medida,
                    clase,
                    codigo_familiar,
                    nombre_familia
                    FROM producto
                    ORDER BY codigo ASC";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $response = $modules->fetchAll(PDO::FETCH_ASSOC);
        return $response;
    }
    /* Retornar la cantidad de productos */
    function countProductos()
    {
        require_once 'conexion.php';
        $conexion = new Conexion();
        $consulta = "SELECT 
            count(id_producto) as cant 
            FROM producto";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $data = $modules->fetch(PDO::FETCH_ASSOC);
        return $data['cant'];
    }
    public function insertProducto(array $array): bool
    {
        $codigo = $array['codigo'];
        $Nombre = $array['Nombre'];
        $precio_minimo = $array['precio_minimo'];
        $precio_maximo = $array['precio_maximo'];
        $medida = $array['medida'];
        $clase = $array['clase'];
        $codigo_familiar = $array ['codigo_familiar'];
        $nombre_familia = $array ['nombre_familia'];
        
        $conexion = new Conexion();
        $sql = "INSERT INTO producto(codigo, Nombre, precio_minimo, precio_maximo, medida, clase, codigo_familiar, nombre_familia) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
        $reg = $conexion->prepare($sql);
        $reg->bindParam(1, $codigo);
        $reg->bindParam(2, $Nombre);
        $reg->bindParam(3, $precio_minimo);
        $reg->bindParam(4, $precio_maximo);
        $reg->bindParam(5, $medida);
        $reg->bindParam(6, $clase);
        $reg->bindParam(7, $codigo_familiar);
        $reg->bindParam(8, $nombre_familia);
        $response = $reg->execute();
        return $response;
    }

    public function updateProducto(array $array): bool
    {
        $codigo = $array['codigou'];
        $Nombre = $array['nombreu'];
        $precio_minimo = $array['precio_minimou'];
        $precio_maximo = $array['precio_maximou'];
        $medida = $array['medidau'];
        $clase = $array['claseu'];
        $codigo_familiar = $array['codigo_familiaru'];
        $nombre_familia = $array['nombre_familiau'];

        $sql = "UPDATE producto SET
                codigo=:codigo,
                Nombre=:Nombre,
                precio_minimo=:precio_minimo,
                precio_maximo=:precio_maximo,
                medida=:medida,
                clase=:clase,
                codigo_familiar=:codigo_familiar,
                nombre_familia=:nombre_familia
                WHERE codigo=:codigo;";
                
        $conexion = new Conexion();
        $upd = $conexion->prepare($sql);
        $upd->bindParam(":codigo", $codigo);
        $upd->bindParam(":Nombre", $Nombre);
        $upd->bindParam(":precio_minimo", $precio_minimo);
        $upd->bindParam(":precio_maximo", $precio_maximo);
        $upd->bindParam(":medida", $medida);
        $upd->bindParam(":clase", $clase);
        $upd->bindParam(":codigo_familiar", $codigo_familiar);
        $upd->bindParam(":nombre_familia", $nombre_familia);
        $response = $upd->execute();
        return $response;

    }
}

/* ver un producto por su codigo
$codigo = '18130100367';
$misProductos = new MisProductos();
$response = $misProductos->viewProductoCodigo($codigo);
var_dump($response); */

/* Retornar todos los Productos
$misProductos = new MisProductos();
$response = $misProductos->viewProductos();
var_dump($response); */

/* Retornar la cantidad de productos
$misProductos = new MisProductos();
$response = $misProductos->countProductos();
var_dump($response); */
