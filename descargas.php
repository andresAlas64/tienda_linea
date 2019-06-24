<?php
    include_once 'include/docDeclaracion.php';
    include_once 'services/config.php';
    include_once 'services/conexion.php';
?>
<?php
    if($_POST) {
        $idVenta = openssl_decrypt($_POST['idVenta'], COD, KEY);
        $idProducto = openssl_decrypt($_POST['idProducto'], COD, KEY);

        $pdo = new PDO('mysql:host=localhost;dbname=ejemplo', 'root', '');

        $sentencia = $pdo -> prepare("SELECT * FROM detalleventa
        WHERE idVenta=:idVenta
        AND idProdcuto=:idProducto
        AND descargado<".DESCARGASPERMITIDAS);

        $sentencia -> bindParam(':idVenta', $idVenta);
        $sentencia -> bindParam(':idProducto', $idProducto);
        $sentencia -> execute();

        $listaProductos = $sentencia -> fetchAll(PDO::FETCH_ASSOC);

        if($sentencia -> rowCount() > 0) {
            echo "Archivo en descarga";

            $nombreArchivo = 'archivo/' . $listaProductos[0]['idProdcuto'] . '.pdf';

            $nuevoNombreArchivo = $_POST['idVenta'] . $_POST['idProducto'] . '.pdf';

            header("Content-Transfer-Encoding: binary");
            header("Content-type: application/force-download");
            header("Content-Disposition: attachment; filename=$nuevoNombreArchivo");
            readfile("$nombreArchivo");

            $sentencia = $pdo -> prepare("UPDATE detalleventa SET descargado=descargado+1
            WHERE idVenta=:idVenta
            AND idProdcuto=:idProducto");

            $sentencia -> bindParam(':idVenta', $idVenta);
            $sentencia -> bindParam(':idProducto', $idProducto);
            $sentencia -> execute();
        }else {
            include_once 'include/navbarUsuario.php';

            echo "<div class='container'>
                <div class='alert alert-color' role='alert'>
                    Se agotaron sus descargas.
                </div>
            <div>";
        }
    }    
?>
<?php
    include_once 'include/docCierre.php';
?>