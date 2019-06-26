<?php
    include_once 'include/docDeclaracion.php';
    include_once 'include/navbarUsuario.php';
    include_once 'services/config.php';
    include_once 'services/conexion.php';

    $Login = curl_init(LINKAPI.'/v1/oauth2/token');

    curl_setopt($Login, CURLOPT_RETURNTRANSFER, TRUE);

    curl_setopt($Login, CURLOPT_USERPWD, CLIENTID.':'.SECRET);

    curl_setopt($Login, CURLOPT_POSTFIELDS, 'grant_type=client_credentials');

    curl_setopt($Login, CURLOPT_SSL_VERIFYPEER, false);

    $Respuesta = curl_exec($Login);

    $objRespuesta = json_decode($Respuesta);

    $AccessToken = $objRespuesta->access_token;

    $venta = curl_init(LINKAPI.'/v1/payments/payment/'.$_GET['paymentID']);

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

    if($state == 'approved') {
        $mensajePaypal = '<h3>Pago aprobado</h3>';

        $pdo = new PDO('mysql:host=localhost;dbname=ejemplo', 'root', '');

        $sentencia = $pdo -> prepare("UPDATE `ventas` SET `paypalDatos` =:paypalDatos, `status` = 'aprobado' 
        WHERE `ventas`.`id` =:id;");

        $sentencia->bindParam(':id', $claveVenta);
        $sentencia->bindParam(':paypalDatos', $RespuestaVenta);
        $sentencia->execute();

        $sentencia = $pdo -> prepare("UPDATE ventas SET status='completo'
        WHERE claveTransaccion=:claveTransaccion
        AND total=:total
        AND id=:id");

        $sentencia->bindParam(':claveTransaccion', $SID);
        $sentencia->bindParam(':total', $total);
        $sentencia->bindParam(':id', $claveVenta);
        $sentencia->execute();

        $completado = $sentencia->rowCount();

        session_destroy();
    }else {
        $mensajePaypal = '<h3>Problema con el pago de paypal</h3>';
    }
?>
<div class="container">
    <div class="jumbotron bg-jumbotron mb-5">
        <h2 class="display-4 color-titulo">Listo puede descargar</h2>
        <hr class="my-4">
        <p class="lead"><?php echo $mensajePaypal;?></p>
        <p>
            <?php 
                if($completado >= 1) {
                    $sentencia = $pdo -> prepare("SELECT * FROM detalleVenta, producto
                    WHERE detalleventa.idProdcuto=producto.id 
                    AND detalleventa.idVenta=:id");

                    $sentencia->bindParam(':id', $claveVenta);
                    $sentencia->execute();

                    $listaProductos = $sentencia -> fetchAll(PDO::FETCH_ASSOC);
                }
            ?>
            <div class="row">
                <?php foreach($listaProductos as $producto) { ?>
                    <div class="col-md-3 mb-4"> 
                        <div class='card' style='width: 100%;'>
                            <img src="<?php echo $imagen = substr($producto['imagen'], 3);?>" alt="" class='card-img-top'>
                            <div class="card-body bg-color-card">
                                <h5 class='card-title'><?php echo $producto['titulo']?></h5>
                                <?php if($producto['descargado'] < DESCARGASPERMITIDAS) { ?>
                                    <form method="post" action="descargas.php">
                                        <input type="hidden" name="idVenta" value="<?php echo openssl_encrypt($claveVenta, COD, KEY); ?>">
                                        <input type="hidden" name="idProducto" value="<?php echo openssl_encrypt($producto['id'], COD, KEY); ?>">
                                        <button class="btn btn-color btn-block" type="submit">Descargar</button>     
                                    </form>
                                <?php }else { ?>
                                    <button class="btn btn-color btn-block" type="button" disebled><i class="fas fa-file-download"></i> Descargar</button>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </p>
    </div>
</div>
<?php 
    include_once 'include/docCierre.php';
    include_once 'include/footer.php';
?>