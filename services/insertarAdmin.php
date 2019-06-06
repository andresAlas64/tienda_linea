<?php
    include_once 'conexion.php';

    $correoAdmin = mysqli_real_escape_string($con, $_POST['correoAdmin']);
    $contrasenaAdmin = mysqli_real_escape_string($con, $_POST['contrasenaAdmin']);

    $contrasenaEncriptada = password_hash($contrasenaAdmin, PASSWORD_BCRYPT);

    $query = "INSERT INTO administrador (correo, clave)
    VALUES ('$correoAdmin', '$contrasenaEncriptada')";

    echo $result = mysqli_query($con, $query);

    header('Location: ../agregarAdmin.php');
?>