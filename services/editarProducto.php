<?php
    include_once 'conexion.php';

    $id = mysqli_real_escape_string($con, $_POST['id']);
    $titulo = mysqli_real_escape_string($con, $_POST['titulo']);
    $precio = mysqli_real_escape_string($con, $_POST['precio']);
    $descripcion = mysqli_real_escape_string($con, $_POST['descripcion']);
    
    $imagen = $_FILES['imagen']['name'];
    $ruta =  $_FILES['imagen']['tmp_name'];
    $destino = 'img/imgProducto/' . $imagen;
    copy($ruta, $destino);

    $query = "UPDATE producto SET titulo='$titulo', precio='$precio', descripcion='$descripcion', imagen='$destino'
    WHERE id='$id'";

    $result = mysqli_query($con, $query);

    header('Location: ../listaProducto.php');
?>