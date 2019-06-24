<?php
    include_once 'conexion.php';
    include_once 'config.php';

    $b = mysqli_real_escape_string($con, $_POST['texto']);

    $query = "SELECT id, titulo, descripcion, precio, imagen FROM producto 
    WHERE titulo LIKE '%".$b."%'";

    $result = mysqli_query($con, $query);

    $row_count = mysqli_num_rows($result);

    if($row_count == 0) {
        echo "<p class='text-center mb-5'>No se han encontrado resultados para <span class='msj_color'>$b</span></p>";
    }else {
        echo "<div class='container'>
            <div class='row'>";
                $i = 0;

                while($fila = mysqli_fetch_array($result)) {
                    $imagen = substr($fila['imagen'], 3);

                    $id = openssl_encrypt($fila['id'], COD, KEY);
                    $titulo = openssl_encrypt($fila['titulo'], COD, KEY);
                    $precio = openssl_encrypt($fila['precio'], COD, KEY);
                    $cantidad = openssl_encrypt(1, COD, KEY);

                    echo "<div class='col-md-3 mb-4'> 
                        <div class='card' style='width: 100%;'>
                            <img src='$imagen' class='card-img-top'>
                            <div class='card-body bg-color-card'>
                                <h5 class='card-title'>$fila[titulo]</h5>
                                <p class='text-color'>Precio ".'$'."$fila[precio]</p>
                                <p>
                                    <form action='' method='POST'>
                                        <input type='hidden' name='id' id='id' value='$id'>
                                        <input type='hidden' name='titulo' id='titulo' value='$titulo'>
                                        <input type='hidden' name='precio' id='precio' value='$precio'>
                                        <input type='hidden' name='cantidad' id='cantidad' value='$cantidad'>

                                        <button type='submit' class='btn btn-color' name='btnAccion' value='Agregar'>Agregar al carrito</button>
                                        <a class='btn btn-color' data-toggle='collapse' href='#id$fila[id]' role='button' aria-expanded='false' aria-controls='collapseExample'>
                                            Mas
                                        </a>    
                                    </form>   
                                </p> 
                                <div class='collapse' id='id$fila[id]'>
                                    <p>$fila[descripcion]</p>
                                </div>
                            </div>
                        </div>
                    </div>";

                    $i++;
                }
            echo "</div>
        </div>";
    }
?>