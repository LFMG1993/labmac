<?php
require 'conexion.php';
$conexion = new Conexion();
if (isset($_POST['usu']) && isset($_POST['pass'])) {
    $loginNombre = $_POST["usu"];
    $loginPassword = $_POST["pass"];
    $sql = "SELECT * FROM usuario WHERE usuario=:loginNombre AND contrasena=:loginPassword";
    $modules = $conexion->prepare($sql);
    $modules->bindParam(":loginNombre", $loginNombre);
    $modules->bindParam(":loginPassword", $loginPassword);
    $modules->execute();
    $total = $modules->rowCount();
    if ($total > 0) {
        $row = $modules->fetch(PDO::FETCH_ASSOC);
        if (($row['usuario'] == $loginNombre) && ($row['contrasena'] == $loginPassword)) {
            session_start();
            $_SESSION['codigo'] = $row['codigo'];
            $_SESSION['identificacion'] = $row['identificacion'];
            $_SESSION['nombres'] = $row['nombres'];
            $_SESSION['usuario'] = $row['usuario'];
            $_SESSION['contrasena'] = $row['contrasena'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['telefono'] = $row['telefono'];
            $_SESSION['rol_id'] = $row['rol_id'];
            header("Location: ../app/index.php");
        } else {
            echo '<script language = javascript>
            alert("Por favor verifique la información registrada 1.");
            self.location = "../index.php"
            </script>';
        }
    } else {
        echo '<script language = javascript>
        alert("Por favor verifique la información registrada 2.");
        self.location = "../index.php"
        </script>';
    }
} else {
    echo '<script language = javascript>
	alert("Por favor verifique la información registrada 3.");
	self.location = "../index.php"
	</script>';
}