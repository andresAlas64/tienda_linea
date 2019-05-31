<?php
    insertarRegistro($_POST['nombre'], $_POST['direccion'], $_POST['telefono'], $_POST['correo'], $_POST['contrasena']);

    function insertarRegistro($nombre, $direccion, $telefono, $correo, $contrasena) {
        include_once 'conexion.php';

        $id_rol = 2;

        $contrasenaEncriptada = password_hash($contrasena, PASSWORD_BCRYPT);

        $query = "INSERT INTO usuario (nombre, telefono, direccion, correo, clave, id_rol)
        VALUES ('$nombre', '$telefono', '$direccion', '$correo', '$contrasenaEncriptada', '$id_rol')";

        echo $result = mysqli_query($con, $query);
    }
?>