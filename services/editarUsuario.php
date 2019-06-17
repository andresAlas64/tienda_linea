<?php
    include_once 'conexion.php';

    $id = mysqli_real_escape_string($con, $_POST['id']);
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $direccion = mysqli_real_escape_string($con, $_POST['dir']);
    $correo = mysqli_real_escape_string($con, $_POST['correo']);
    $telefono = mysqli_real_escape_string($con, $_POST['telefono']);

    $query = "UPDATE usuario SET nombre='$nombre', direccion='$direccion', correo='$correo', telefono='$telefono'
    WHERE id='$id'";

    $result = mysqli_query($con, $query);

    header('Location: ../usuario.php');
?>