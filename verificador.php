<?php
    include_once 'include/docDeclaracion.php';
    include_once 'include/navbarUsuario.php';
    include_once 'services/config.php';
    include_once 'services/conexion.php';

    $ClientID = 'AePNFoGyEUaF0bwGQH7ucH4qIflY58hTIOb8JYpsb4DGnKNApLQPqFUoXpMAmLSYyY7bmiyel9XeBj5a';
    $Secret = 'EAIIbt1d2tj2weaqdEGrpjNqJ-XyeZk-DG5KZrtAPn1lYxPm0_XhikiojQMq9nYsE9kM-iiLZq7xGCrq';

    $Login = curl_init('https://api.sandbox.paypal.com/v1/oauth2/token');

    curl_setopt($Login, CURLOPT_RETURNTRANSFER, TRUE);

    curl_setopt($Login, CURLOPT_USERPWD, $ClientID.':'.$Secret);

    curl_setopt($Login, CURLOPT_POSTFIELDS, 'grant_type=client_credentials');

    curl_setopt($Login, CURLOPT_SSL_VERIFYPEER, false);

    $Respuesta = curl_exec($Login);

    $objRespuesta = json_decode($Respuesta);

    $AccessToken = $objRespuesta->access_token;

    $venta = curl_init('https://api.sandbox.paypal.com/v1/payments/payment/'.$_GET['paymentID']);

    curl_setopt($venta, CURLOPT_SSL_VERIFYPEER, FALSE);

    curl_setopt($venta, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Bearer '.$AccessToken));

    curl_setopt($venta, CURLOPT_RETURNTRANSFER, TRUE);

    $RespuestaVenta = curl_exec($venta);

    $objDatosTransaccion = json_decode($RespuestaVenta);

    $state = $objDatosTransaccion->state;

    $email = $objDatosTransaccion->payer->payer_info->email;

    $total = $objDatosTransaccion->transactions[0]->amount->total;

    $currency = $objDatosTransaccion->transactions[0]->amount->currency;

    $custom = $objDatosTransaccion->transactions[0]->custom;

    $clave = explode('#', $custom);

    $SID = $clave[0];

    $claveVenta = openssl_decrypt($clave[1], COD, KEY);

    curl_close($venta);
    curl_close($Login);

    //echo $state;

    if($state == 'approved') {
        $mensajePaypal = '<h3>Pago aprobado</h3>';

        $pdo = new PDO('mysql:host=localhost;dbname=ejemplo', 'root', '');

        $sentencia = $pdo -> prepare("UPDATE `ventas` SET `paypalDatos` =:paypalDatos, `status` = 'aprobado' 
        WHERE `ventas`.`id` =:id;");

        $sentencia->bindParam(':id', $claveVenta);
        $sentencia->bindParam(':paypalDatos', $RespuestaVenta);
        $sentencia->execute();
    }else {
        $mensajePaypal = '<h3>Problema con el pago de paypal</h3>';
    }

    echo $mensajePaypal;
?>