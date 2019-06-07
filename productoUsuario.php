<?php
    $titulo = 'Productos';

    include_once 'include/docDeclaracion.php';
    include_once 'include/navbarUsuario.php';
?>
<!-- Titulo -->
<div id="productos" class="container">
    <h2 class="mb-3 color-gray">Agrega productos al carrito</h2>
</div>
<!-- Titulo -->

<!-- Buscador -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="input-group mb-5">
        <input type="text" class="form-control" placeholder="Buscar productos" aria-label="Recipient's username" aria-describedby="button-addon2" name="busqueda" id="busqueda" onkeyup="busqueda();">
        <div class="input-group-append">
          <button class="btn btn-color" type="button" id="button-addon2">Limpiar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Buscador -->

<div class="container">
    <div class="row">
        <?php
            include_once 'services/conexion.php';

            $query = "SELECT id, titulo, precio, descripcion, imagen FROM producto";

            $result = mysqli_query($con, $query);
    
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
                                <a href='#' class='btn btn-color btn-block'>Agregar al carrito</a>
                                <a class='btn btn-color btn-block' data-toggle='collapse' href='#id$fila[id]' role='button' aria-expanded='false' aria-controls='collapseExample'>
                                    Mas información 
                                </a>
                                    
                            </p>    
                            <div class='collapse' id='id$fila[id]'>
                                <p>$fila[descripcion]</p>
                            </div>
                        </div>
                    </div>
                </div>";

                $i++;
            }
        ?>
    </div>
</div>
<div class="mb-4"></div>
<?php
    include_once 'include/docCierre.php';
    include_once 'include/footer.php';
?>