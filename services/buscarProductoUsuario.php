<?php
    include_once 'conexion.php';

    $b = mysqli_real_escape_string($con, $_POST['texto']);

    $query = "SELECT id, titulo, descripcion, precio, imagen FROM producto 
    WHERE titulo LIKE '%".$b."%'";

    $result = mysqli_query($con, $query);

    $row_count = mysqli_num_rows($result);

    if($row_count == 0) {
        echo "<p class='text-center mb-5'>No se han encontrado resultados para '$b'</p>";
    }else {
        echo "<div class='container'>
            <div class='row'>";
                $i = 0;

                while($fila = mysqli_fetch_array($result)) {
                    $imagen = substr($fila['imagen'], 3);

                    echo "<div class='col-md-3 mb-4'> 
                        <div class='card' style='width: 100%;'>
                            <img src='$imagen' class='card-img-top'></img>
                            <div class='card-body bg-color-card'>
                                <h5 class='card-title'>$fila[titulo]</h5>
                                <p class='text-color'>Precio ".'₡'."$fila[precio]</p>
                                <p>
                                    <div class='col-md-12'>
                                        <div class='row'>
                                            <div class='col-md-6 btn-verMas'>
                                                <a class='btn btn-color btn-block' data-toggle='collapse' href='#id$fila[id]' role='button' aria-expanded='false' aria-controls='collapseExample'>
                                                    Más
                                                </a>
                                            </div>
                                            <div class='col-md-6 btn-carrito'>
                                                <a href='#' class='btn btn-color btn-block'>Carrito</a>
                                            </div>
                                        </div>
                                    </div>
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