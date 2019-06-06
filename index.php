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
    <h1 class="mb-4 color-gray">Catalogo de productos</h1>
</div>
<!-- Titulo -->

<!-- Card -->
<div class="container">
    <div class="row">
        <?php
            include_once 'services/conexion.php';

            $query = "SELECT titulo, precio, descripcion, imagen FROM producto";

            $result = mysqli_query($con, $query);

            $i = 0;
                    
            while($fila = mysqli_fetch_array($result)) {
                echo "<div class='col-md-3 mb-5'> 
                    <div class='card' style='width: 100%;'>
                        <img src='$fila[imagen]' class='card-img-top'></img>
                        <div class='card-body bg-color-card'>
                            <h5 class='card-title'>$fila[titulo]</h5>
                            <p class='text-color'>Precio ".'₡'."$fila[precio]</p>
                            <p>
                                <a class='btn btn-color btn-block' data-toggle='collapse' href='#collapseExample' role='button' aria-expanded='false' aria-controls='collapseExample'>
                                    Ver más
                                </a>
                            </p>    
                            <div class='collapse' id='collapseExample'>
                                <p>$fila[descripcion]</p>
                            </div>
                        </div>
                    </div>
                </div>";
            }
        ?>
    </div>
</div>
<!-- Card -->
<?php
    include_once 'include/docCierre.php';
    include_once 'include/footer.php';
?>