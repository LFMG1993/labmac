<?php
class misUsuarios
{
    // Retornar usuario por identificación
    function viewUsuario($identificacion)
    {
        require_once 'conexion.php';
        $conexion = new Conexion();
        $consulta = "SELECT id_usuario,
                                identificacion,
                                nombres,
                                usuario,
                                contrasena,
                                email,
                                telefono,
                                rol_id
                        FROM usuario
                        WHERE identificacion = :identificacion";
        $modules = $conexion->prepare($consulta);
        $modules->bindParam(":identificacion", $identificacion);
        $modules->execute();       
        $data = $modules->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    
    // Retornar todos los usuarios
    function viewUsuarios()
    {
        require_once 'conexion.php';
        $conexion = new Conexion();
        $consulta = "SELECT id_usuario,
                                identificacion,
                                nombres,
                                usuario,
                                contrasena,
                                email,
                                telefono,
                                rol_id
                        FROM usuario
                        ORDER BY id_usuario ASC";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        return $modules->fetchAll(PDO::FETCH_ASSOC);
    }
    // Cantidad de usuarios
    function countUsuarios()
    {
        require_once 'conexion.php';
        $conexion = new Conexion();
        $consulta = "SELECT count(id_usuario) as cant FROM usuario ";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $data = $modules->fetch(PDO::FETCH_ASSOC);
        return $data['cant'];
    }
    
    //registra un nuevo usuario por array
    public function insertUsuarios(array $array): bool
    {
        $identificacion = $array['identificacion'];
        $nombres = $array['nombres'];
        $email = $array['email'];
        $usuario = $array['usuario'];
        $contrasena = $array['contrasena'];
        $telefono = $array['telefono'];
        $rol_id = 1;
        
        $conexion = new Conexion();
        $sql = "INSERT INTO usuario(identificacion, nombres, email, usuario, contrasena, telefono, rol_id) VALUES (?, ?, ?, ?, ?, ?, ?);";
        $reg = $conexion->prepare($sql);
        $reg->bindParam(1, $identificacion);
        $reg->bindParam(2, $nombres);
        $reg->bindParam(3, $email);
        $reg->bindParam(4, $usuario);
        $reg->bindParam(5, $contrasena);
        $reg->bindParam(6, $telefono);
        $reg->bindParam(7, $rol_id);
        try {
            $response = $reg->execute();
            return $response;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return false;
        }
    }
    // Actualiza un usuario por array
    public function updateUsuarios(array $array): bool
    {
        $identificacion = $array['identificacionu'];
        $nombres = $array['nombresu'];
        $email = $array['emailu'];
        $usuario = $array['usuariou'];
        $contrasena = $array['contrasenau'];
        $telefono = $array['telefonou'];

        $sql = "UPDATE usuario SET
                identificacion=:identificacion,
                nombres=:nombres,
                email=:email,
                usuario=:usuario,
                contrasena=:contrasena,
                telefono=:telefono
                WHERE identificacion=:identificacion;";
                
        $conexion = new Conexion();
        $upd = $conexion->prepare($sql);
        $upd->bindParam(":identificacion", $identificacion);
        $upd->bindParam("nombres", $nombres);
        $upd->bindParam(":email", $email);
        $upd->bindParam(":usuario", $usuario);
        $upd->bindParam(":contrasena", $contrasena);
        $upd->bindParam(":telefono", $telefono);
        $response = $upd->execute();
        try {
            $response = $upd->execute();
            return $response;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return false;
        }
    }

}
