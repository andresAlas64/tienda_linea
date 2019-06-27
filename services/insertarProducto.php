<?php
    include_once 'conexion.php';

    $titulo = mysqli_real_escape_string($con, $_POST['titulo']);
    $precio = mysqli_real_escape_string($con, $_POST['precio']);
    $descripcion = mysqli_real_escape_string($con, $_POST['descripcion']);
    $categoria = mysqli_real_escape_string($con, $_POST['categoria']);

    $imagen = $_FILES['imagen']['name'];
    $ruta =  $_FILES['imagen']['tmp_name'];
    $destino = '../img/imgProducto/' . $imagen;
    copy($ruta, $destino);

    $query = "INSERT INTO producto (titulo, precio, descripcion, imagen, idCategoria)
    VALUES ('$titulo', '$precio', '$descripcion', '$destino', '$categoria')";

    $result = mysqli_query($con, $query);

    header('Location: ../listaProducto.php');
?>