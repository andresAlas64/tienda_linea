<?php
    $titulo = 'Iniciar sesión';

    include_once 'include/docDeclaracion.php';
    include_once 'include/navbar.php';
?>
<form class="form-signin my-5" action="services/sesion.php" method="POST">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="text-center mb-3">
                    <img class="mb-4" src="img/codepen64.png" alt="Logo" width="64" height="64">
                    <h2 class="h3 mb-3 font-weight-normal">Iniciar sesión</h2>
                </div>

                <div class="form-label-group mb-3">
                    <label for="inputEmail">Correo</label>
                    <input type="email" name="correo" id="inputEmail" class="form-control" placeholder="Ingrese el correo" maxlength="255" required autofocus>
                </div>

                <div class="form-label-group mb-3">
                    <label for="inputPassword">Contraseña</label>
                    <input type="password" name="contrasena" id="inputPassword" class="form-control" placeholder="Ingrese la contraseña" maxlength="255" required>
                </div>
                <button class="btn btn-color btn-block" type="submit">Iniciar sesión</button>
            </div>
        </div>
    </div>
</form>
<?php
    include_once 'include/docCierre.php';
?>