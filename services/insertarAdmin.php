<?php
    include_once 'conexion.php';

    $correoAdmin = mysqli_real_escape_string($con, $_POST['correoAdmin']);
    $contrasenaAdmin = mysqli_real_escape_string($con, $_POST['contrasenaAdmin']);
    $nombreAdmin = mysqli_real_escape_string($con, $_POST['nombreAdmin']);
    $telefonoAdmin = mysqli_real_escape_string($con, $_POST['telefonoAdmin']);
    $direccionAdmin = mysqli_real_escape_string($con, $_POST['direccionAdmin']);

    $contrasenaEncriptada = password_hash($contrasenaAdmin, PASSWORD_BCRYPT);

    $query = "INSERT INTO administrador (correo, clave, nombre, telefono, direccion)
    VALUES ('$correoAdmin', '$contrasenaEncriptada', '$nombreAdmin', '$telefonoAdmin', '$direccionAdmin')";

    echo $result = mysqli_query($con, $query);

    header('Location: ../agregarAdmin.php');
?>