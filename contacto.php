<?php
  $titulo = 'Contacto';

  include_once 'include/docDeclaracion.php';
  include_once 'include/navbar.php';
?>

<!-- Titulo -->
<div id="productos" class="container">
  <h1 class="mt-5 mb-3 color-gray">Contáctenos</h1>
</div>
<!-- Titulo -->
<section class="mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d1964.8354364111738!2d-84.07776196690763!3d9.961317351321622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d9.9613031!2d-84.0766177!5e0!3m2!1ses-419!2scr!4v1548531451094" width="600" height="450" frameborder="0" style="border:0" allowfullscreen class="size"></iframe>
      </div>
      <div class="col-md-6">
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-color btn-sm" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <a href="#">Dirección</a>
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                Estamos ubicados en San Juan de Tibas de la Burger King 100 metros al sur del edificio sing
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-color btn-sm collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <a href="#">Telefonos</a>
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                2236-7391 / 2236-7093
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-color btn-sm collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <a href="#">Correo</a>
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                tecnosoft.milenio@gmail.com
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
    include_once 'include/docCierre.php';
    include_once 'include/footer.php';
?>