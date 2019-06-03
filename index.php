<?php
    $titulo = 'Tienda';

    include_once 'include/docDeclaracion.php';
    include_once 'include/navbar.php';
?>
<!-- Carousel -->
<div class="bd-example mb-5">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/banner.png" class="d-block w-100" alt="Imagen uno">
      </div>
      <div class="carousel-item">
        <img src="img/banner.png" class="d-block w-100" alt="Imagen dos">
      </div>
      <div class="carousel-item">
        <img src="img/banner.png" class="d-block w-100" alt="Imagen tres">
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
<div class="container">
    <h2 class="mb-4 color-gray">Catalogo de productos</h2>
</div>
<!-- Titulo -->

<!-- Card -->
<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 100%;">
                    <img src="img/ps4.png" class="card-img-top" alt="..." width="400px">
                    <div class="card-body bg-color-card">
                        <h5 class="card-title">Control ps4</h5>
                        <p class="text-color">Precio: $200.99</p>
                        <p>
                        <a class="btn btn-color btn-block" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Ver más
                        </a>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, facilis dicta doloremque numquam non quam alias minima? Quidem fugiat quam sit impedit repudiandae illo aperiam odio distinctio. Ullam, eius ut!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 100%;">
                    <img src="img/ps4.png" class="card-img-top" alt="...">
                    <div class="card-body bg-color-card">
                        <h5 class="card-title">Control ps4</h5>
                        <p class="text-color">Precio: $200.99</p>
                        <p>
                        <a class="btn btn-color btn-block" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                            Ver más
                        </a>
                        </p>
                        <div class="collapse" id="collapseExample2">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ullam inventore corrupti illo vero tempore hic a impedit accusamus nemo? Aliquid vero atque, reiciendis sapiente adipisci quaerat reprehenderit quae. Temporibus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 100%;">
                    <img src="img/ps4.png" class="card-img-top" alt="...">
                    <div class="card-body bg-color-card">
                        <h5 class="card-title">Control ps4</h5>
                        <p class="text-color">Precio: $200.99</p>
                        <p>
                        <a class="btn btn-color btn-block" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
                            Ver más
                        </a>
                        </p>
                        <div class="collapse" id="collapseExample3">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ullam inventore corrupti illo vero tempore hic a impedit accusamus nemo? Aliquid vero atque, reiciendis sapiente adipisci quaerat reprehenderit quae. Temporibus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 100%;">
                    <img src="img/ps4.png" class="card-img-top" alt="...">
                    <div class="card-body bg-color-card">
                        <h5 class="card-title">Control ps4</h5>
                        <p class="text-color">Precio: $200.99</p>
                        <p>
                        <a class="btn btn-color btn-block" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
                            Ver más
                        </a>
                        </p>
                        <div class="collapse" id="collapseExample4">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ullam inventore corrupti illo vero tempore hic a impedit accusamus nemo? Aliquid vero atque, reiciendis sapiente adipisci quaerat reprehenderit quae. Temporibus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 100%;">
                    <img src="img/ps4.png" class="card-img-top" alt="...">
                    <div class="card-body bg-color-card">
                        <h5 class="card-title">Control ps4</h5>
                        <p class="text-color">Precio: $200.99</p>
                        <p>
                        <a class="btn btn-color btn-block" data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5">
                            Ver más
                        </a>
                        </p>
                        <div class="collapse" id="collapseExample5">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ullam inventore corrupti illo vero tempore hic a impedit accusamus nemo? Aliquid vero atque, reiciendis sapiente adipisci quaerat reprehenderit quae. Temporibus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 100%;">
                    <img src="img/ps4.png" class="card-img-top" alt="...">
                    <div class="card-body bg-color-card">
                        <h5 class="card-title">Control ps4</h5>
                        <p class="text-color">Precio: $200.99</p>
                        <p>
                        <a class="btn btn-color btn-block" data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample6">
                            Ver más
                        </a>
                        </p>
                        <div class="collapse" id="collapseExample6">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto commodi recusandae nam consequatur quam suscipit ratione corporis, consequuntur voluptates vero quas. Commodi quae nostrum, corrupti animi in magnam cumque harum!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 100%;">
                    <img src="img/ps4.png" class="card-img-top" alt="...">
                    <div class="card-body bg-color-card">
                        <h5 class="card-title">Control ps4</h5>
                        <p class="text-color">Precio: $200.99</p>
                        <p>
                        <a class="btn btn-color btn-block" data-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample7">
                            Ver más
                        </a>
                        </p>
                        <div class="collapse" id="collapseExample7">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto commodi recusandae nam consequatur quam suscipit ratione corporis, consequuntur voluptates vero quas. Commodi quae nostrum, corrupti animi in magnam cumque harum!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 100%;">
                    <img src="img/ps4.png" class="card-img-top" alt="...">
                    <div class="card-body bg-color-card">
                        <h5 class="card-title">Control ps4</h5>
                        <p class="text-color">Precio: $200.99</p>
                        <p>
                        <a class="btn btn-color btn-block" data-toggle="collapse" href="#collapseExample8" role="button" aria-expanded="false" aria-controls="collapseExample8">
                            Ver más
                        </a>
                        </p>
                        <div class="collapse" id="collapseExample8">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto commodi recusandae nam consequatur quam suscipit ratione corporis, consequuntur voluptates vero quas. Commodi quae nostrum, corrupti animi in magnam cumque harum!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Card -->
<?php
    include_once 'include/docCierre.php';
    include_once 'include/footer.php';
?>