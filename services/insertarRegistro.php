<?php
    include_once 'conexion.php';

    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $direccion = mysqli_real_escape_string($con, $_POST['direccion']);
    $telefono = mysqli_real_escape_string($con, $_POST['telefono']);
    $correo = mysqli_real_escape_string($con, $_POST['correo']);
    $contrasena = mysqli_real_escape_string($con, $_POST['contrasena']);

    $contrasenaEncriptada = password_hash($contrasena, PASSWORD_BCRYPT);

    $query = "INSERT INTO usuario (nombre, telefono, direccion, correo, clave)
    VALUES ('$nombre', '$telefono', '$direccion', '$correo', '$contrasenaEncriptada')";

    echo $result = mysqli_query($con, $query);

    header('Location: ../formRegistrarse.php');
?>