<?php
    $titulo = 'Procesar pago';

    include_once 'include/docDeclaracion.php';
    include_once 'include/navbarUsuario.php';
    include_once 'services/config.php';
   // include_once 'services/conexion.php'
?>
<?php
    if($_POST) {
        $total = 0;

        $SID = session_id();

        $correo = $_POST['email'];

        foreach($_SESSION['CARRITO'] as $indice => $producto) {
            $total = $total + ($producto['PRECIO'] * $producto['CANTIDAD']);
        }

        $pdo = new PDO('mysql:host=localhost;dbname=ejemplo', 'root', '');

        $sentencia=$pdo->prepare("INSERT INTO `ventas` (`id`, `claveTransaccion`, `paypalDatos`, `fecha`, `correo`, `total`, `status`) 
        VALUES (NULL, :claveTransaccion, '', NOW(), :correo, :total, 'pendiente');");

        $sentencia->bindParam(":claveTransaccion", $SID);
        $sentencia->bindParam(":correo", $correo);
        $sentencia->bindParam(":total", $total);

        $sentencia->execute();

        $idVenta = $pdo->lastInsertId();

        echo 'Total es: ' . $total;
    }
?>
<?php
    include_once 'include/docCierre.php';
?>