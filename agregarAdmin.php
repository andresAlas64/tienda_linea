<?php
    $titulo = 'Agregar administrador';

    include_once 'include/docDeclaracion.php';
    include_once 'include/navbarAdmin.php';
?>
<form class="form-signin my-5" action="services/sesion.php" method="POST">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="text-center mb-3">
                    <h2 class="h3 mb-4 font-weight-normal">Agregar administrador</h2>
                </div>

                <div class="form-label-group mb-3">
                    <label for="correoAdmin">Correo</label>
                    <input type="email" id="correoAdmin" class="form-control" placeholder="Ingrese el correo" maxlength="255" required autofocus>
                </div>

                <div class="form-label-group mb-3">
                    <label for="contrasenaAdmin">Contraseña</label>
                    <input type="password" id="contrasenaAdmin" class="form-control" placeholder="Ingrese la contraseña" maxlength="255" required>
                </div>
                <button class="btn btn-color btn-block" type="button" id="btn-admin">Agregar</button>
            </div>
        </div>
    </div>
</form>
<?php
    include_once 'include/docCierre.php';
?>