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
        $usuario = $array['usuario'];
        $contrasena = $array['contrasena'];
        $email = $array['email'];
        $telefono = $array['telefono'];
        $rol_id = $array['rol_id'];
        
        $conexion = new Conexion();
        $sql = "INSERT INTO usuario(identificacion, nombres, usuario, contrasena, email, telefono, rol_id) VALUES (?, ?, ?, ?, ?, ?, ?);";
        $reg = $conexion->prepare($sql);
        $reg->bindParam(1, $identificacion);
        $reg->bindParam(2, $nombres);
        $reg->bindParam(2, $usuario);
        $reg->bindParam(3, $contrasena);
        $reg->bindParam(4, $email);
        $reg->bindParam(5, $telefono);
        $reg->bindParam(6, $rol_id);
        $response = $reg->execute();
        return $response;
    }
    // Actualiza un usuario por array
    public function updateUsuarios(array $array): bool
    {
        $identificacion = $array['identificacionu'];
        $nombres = $array['nombresu'];
        $usuario = $array['usuariou'];
        $contrasena = $array['contrasenau'];
        $email = $array['emailu'];
        $telefono = $array['telefonou'];

        $sql = "UPDATE usuario SET
                identificacion=:identificacion,
                nombres=:nombres,
                usuario=:usuario,
                contrasena=:contrasena,
                email=:email,
                telefono=:telefono
                WHERE identificacion=:identificacion;";
                
        $conexion = new Conexion();
        $upd = $conexion->prepare($sql);
        $upd->bindParam(":identificacion", $identificacion);
        $upd->bindParam("nombres", $nombres);
        $upd->bindParam(":usuario", $usuario);
        $upd->bindParam(":contrasena", $contrasena);
        $upd->bindParam(":email", $email);
        $upd->bindParam(":telefono", $telefono);
        $response = $upd->execute();
        return $response;

    }

}
