<?php
    session_start();

    include_once 'conexion.php';
    include_once 'config.php';

    $mensaje = '';

    if(isset($_POST['btnAccion'])) {
        switch($_POST['btnAccion']) {
            case 'Agregar': 
                if(is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {
                    $id = openssl_decrypt($_POST['id'], COD, KEY);

                    $mensaje.='El id es ' . $id . '<br/>';
                }else {
                    $mensaje.='Id incorrecto ' . $id . '<br/>';
                }

                if(is_string(openssl_decrypt($_POST['titulo'], COD, KEY))) {
                    $titulo = openssl_decrypt($_POST['titulo'], COD, KEY);

                    $mensaje.='El nombre del producto es ' . $titulo . '<br/>';
                }else {
                    $mensaje.='Algo pasa con el nombre ' . $titulo . '<br/>';
            
                    break;
                }
            
                if(is_numeric(openssl_decrypt($_POST['cantidad'], COD, KEY))) {
                    $cantidad = openssl_decrypt($_POST['cantidad'], COD, KEY);

                    $mensaje.='La cantidad es ' . $cantidad . '<br/>';
                }else {
                    $mensaje.='Algo pasa con la cantidad ' . $cantidad . '<br/>';
            
                    break;
                }
            
                if(is_numeric(openssl_decrypt($_POST['precio'], COD, KEY))) {
                    $precio = openssl_decrypt($_POST['precio'], COD, KEY);
            
                    $mensaje.='El precio es ' . $precio . '<br/>';
                }else {
                    $mensaje.='Algo pasa con el precio';
            
                    break;
                }

                if(!isset($_SESSION['CARRITO'])) {
                    $producto = array(
                        'ID' => $id,
                        'NOMBRE' => $titulo,
                        'CANTIDAD' => $cantidad,
                        'PRECIO' => $precio
                    );

                    $_SESSION['CARRITO'][0] = $producto;
                }else {
                    $numeroProductos = count($_SESSION['CARRITO']);

                    $producto = array(
                        'ID' => $id,
                        'NOMBRE' => $titulo,
                        'CANTIDAD' => $cantidad,
                        'PRECIO' => $precio
                    );

                    $_SESSION['CARRITO'][$numeroProductos] = $producto;
                }

                $mensaje = print_r($_SESSION, true);

            break;

            case 'Eliminar':
                if(is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {
                    $id = openssl_decrypt($_POST['id'], COD, KEY);

                    foreach($_SESSION['CARRITO'] as $indice => $producto) {
                        if($producto['ID'] == $id) {
                            unset($_SESSION['CARRITO'][$indice]);

                            echo "<script>alert('Elemento eliminado');</script>";
                        }
                    }

                    //$mensaje.='El id es ' . $id . '<br/>';
                }else {
                    $mensaje.='Id incorrecto ' . $id . '<br/>';
                }
            break;
        }
    }
?>