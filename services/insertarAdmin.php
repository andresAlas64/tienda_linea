<?php
    insertarAdmin($_POST['correoAdmin'], $_POST['contrasenaAdmin']);

    function insertarAdmin($correoAdmin, $contrasenaAdmin) {
        include_once 'conexion.php';

        $contrasenaEncriptada = password_hash($contrasenaAdmin, PASSWORD_BCRYPT);

        $query = "INSERT INTO administrador (correo, clave)
        VALUES ('$correoAdmin', '$contrasenaEncriptada')";

        echo $result = mysqli_query($con, $query);
    }
?>