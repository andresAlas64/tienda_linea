<?php
    $titulo = 'Panel usuario';

    include_once 'include/docDeclaracion.php';
    include_once 'include/navbarUsuario.php';
    //include_once 'services/conexion.php';

    session_start();

    $usuario = $_SESSION['usuario'];

    //echo 'El usuario es: ' . $usuario;

   /* echo "<a href='services/cerrarSesion.php'>Cerrar sesion</a>";*/

    include_once 'include/docCierre.php';
?>