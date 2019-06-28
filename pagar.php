<?php
    $titulo = 'Procesar pago';

    include_once 'include/docDeclaracion.php';
    include_once 'include/navbarUsuario.php';
    include_once 'services/config.php';
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

        $sentencia = $pdo -> prepare("INSERT INTO `ventas` (`id`, `claveTransaccion`, `paypalDatos`, `fecha`, `correo`, `total`, `status`) 
        VALUES (NULL, :claveTransaccion, '', NOW(), :correo, :total, 'pendiente');");

        $sentencia->bindParam(":claveTransaccion", $SID);
        $sentencia->bindParam(":correo", $correo);
        $sentencia->bindParam(":total", $total);

        $sentencia->execute();

        $idVenta = $pdo->lastInsertId();

        foreach($_SESSION['CARRITO'] as $indice => $producto) {
            $sentencia = $pdo -> prepare("INSERT INTO `detalleventa` (`id`, `idVenta`, `idProdcuto`, `precioUnitario`, `cantidad`, `descargado`) 
            VALUES (NULL, :idVenta, :idProducto, :precioUnitario, :cantidad, '0');");

            $sentencia->bindParam(":idVenta", $idVenta);
            $sentencia->bindParam(":idProducto", $producto['ID']);
            $sentencia->bindParam(":precioUnitario", $producto['PRECIO']);
            $sentencia->bindParam(":cantidad", $producto['CANTIDAD']);
            //$sentencia->bindParam(":descargado", $total);

            $sentencia->execute();
        }
    }
?>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<style>
    
    /* Media query for mobile viewport */
    @media screen and (max-width: 400px) {
        #paypal-button-container {
            width: 100%;
        }
    }
    
    /* Media query for desktop viewport */
    @media screen and (min-width: 400px) {
        #paypal-button-container {
            width: 250px;
            display: inline-block;
        }
    }
    
</style>
<div class="container">
    <div class="jumbotron text-center bg-jumbotron">
        <h1 class="display-4">Procesar pago</h1>
        <hr class="my-4">
        <p class="lead">Estas a punto de pagar con paypal la cantidad de
            <h4>$<?php echo number_format($total, 2)?></h4>
            <div id="paypal-button-container"></div>
        </p>
        <p>Los productos podrán ser descargados cuando se procese el pago<br/>
            <strong>(Para aclaraciones: andres.au95@gmail.com)</strong>
        </p>
    </div>
</div>
<script>
    paypal.Button.render({
        env: 'production', // sandbox | production
        style: {
            label: 'checkout',  // checkout | credit | pay | buynow | generic
            size:  'responsive', // small | medium | large | responsive
            shape: 'pill',   // pill | rect
            color: 'gold'   // gold | blue | silver | black
        },

        // PayPal Client IDs - replace with your own
        // Create a PayPal app: https://developer.paypal.com/developer/applications/create

        client: {
            sandbox:    'AePNFoGyEUaF0bwGQH7ucH4qIflY58hTIOb8JYpsb4DGnKNApLQPqFUoXpMAmLSYyY7bmiyel9XeBj5a',
            production: 'AYtcmMivgNOOiQg0kjbi4ZdmgUU6nRRblXzdKpifUaiAcH05fv0-wrfXvL6XEeswGXzMo7O92A7vIgwL'
        },

        // Wait for the PayPal button to be clicked

        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: '<?php echo $total?>', currency: 'USD' }, 
                            description:"Compra de productos a tecnosoft $<?php echo number_format($total, 2);?>",
                            custom:"<?php echo $SID;?>#<?php echo openssl_encrypt($idVenta, COD, KEY);?>"
                        }
                    ]
                }
            });
        },

        // Wait for the payment to be authorized by the customer

        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function() {
                console.log(data);
                window.location = "verificador.php?paymentToken="+data.paymentToken+"&paymentID="+data.paymentID;
            });
        }
    
    }, '#paypal-button-container');

</script>
<?php
    include_once 'include/docCierre.php';
?>