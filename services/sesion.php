<?php
    include_once 'conexion.php';

    session_start();

    $correo = mysqli_real_escape_string($con, $_POST['correo']);
    $contrasena = mysqli_real_escape_string($con, $_POST['contrasena']);

    $administrador = mysqli_query($con, "SELECT * FROM administrador WHERE correo = '$correo'");
    $usuario = mysqli_query($con, "SELECT * FROM usuario WHERE correo = '$correo'");

    $queryUsurio = "SELECT clave FROM usuario WHERE correo = '$correo'";
    $queryAdmin = "SELECT clave FROM administrador WHERE correo = '$correo'";

    $resultUsuario = mysqli_query($con, $queryUsurio);
    $resultAdmin = mysqli_query($con, $queryAdmin);

    while ($row = mysqli_fetch_array($resultUsuario)) {
        $hashUsuario = $row['clave'];
    }

    while ($row = mysqli_fetch_array($resultAdmin)) {
        $hashAdmin = $row['clave'];
    }

    if(mysqli_num_rows($administrador) > 0) {
        if(password_verify($contrasena, $hashAdmin)) {
            $_SESSION['administrador'] = "$correo";

            header("Location: ../listaProducto.php"); // administrador.php

            exit();
        }else {
            echo '<script type="text/javascript">
                window.location.href="../formIniciarSesion.php";
            </script>';
        }
    }
    else if(mysqli_num_rows($usuario) > 0) {
        if(password_verify($contrasena, $hashUsuario)) {
            $_SESSION['usuario'] = "$correo";

            header("Location: ../productoUsuario.php");

            exit();
        }else {
            echo '<script type="text/javascript">
                window.location.href="../formIniciarSesion.php";
            </script>';
        }
    }else {
        echo '<script type="text/javascript">
            window.location.href="../formIniciarSesion.php";
        </script>';
    }
?>