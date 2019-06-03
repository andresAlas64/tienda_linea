<?php
    session_start();

    $usuario = $_SESSION['usuario'];

    echo 'El usuario es: ' . $usuario;

    echo "<a href='services/cerrarSesion.php'>Cerrar sesion</a>";
?>