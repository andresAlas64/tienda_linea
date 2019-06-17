<?php
    $titulo = 'Tienda';

    include_once 'include/docDeclaracion.php';
    include_once 'include/navbar.php';
?>
<!-- Carousel -->
<div class="bd-example mb-5">
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/banner.png" class="d-block w-100" class="img-responsive" alt="Imagen uno"> <!-- img 1600x600 -->
      </div>
      <div class="carousel-item">
        <img src="img/banner.png" class="d-block w-100" class="img-responsive" alt="Imagen dos">
      </div>
      <div class="carousel-item">
        <img src="img/banner.png" class="d-block w-100" class="img-responsive" alt="Imagen tres">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- Carousel -->

<!-- Titulo -->
<div id="productos" class="container">
    <h1 class="mb-3 color-gray">Catalogo de productos</h1>
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

<!-- Card -->
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
                                <a class='btn btn-color btn-block' data-toggle='collapse' href='#id$fila[id]' role='button' aria-expanded='false' aria-controls='collapseExample'>
                                  Ver más
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
<!-- Card -->
<div class="mb-4"></div>
<?php
    include_once 'include/docCierre.php';
    include_once 'include/footer.php';
?>