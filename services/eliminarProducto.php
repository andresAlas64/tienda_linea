<?php
    eliminarProducto($_GET['id']);

    function eliminarProducto($id) {
        include_once 'conexion.php';

        $query = "DELETE FROM producto
        WHERE id = '$id'";

        $result = mysqli_query($con, $query);

        header('Location: ../listaProducto.php');
    }
?>