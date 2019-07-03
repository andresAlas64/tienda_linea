<?php
    $titulo = 'Agregar administrador';

    include_once 'include/docDeclaracion.php';
    include_once 'include/navbarAdmin.php';
?>
<!--<div class="content">
<form class="form-signin my-5" action="services/insertarAdmin.php" method="POST" onsubmit="return validarAdmin();">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="text-center mb-3">
                    <h2 class="h3 mb-4 font-weight-normal">Agregar administrador</h2>
                </div>

                <div class="form-label-group mb-3">
                    <label for="correoAdmin">Correo</label>
                    <input type="email" id="correoAdmin" name="correoAdmin" class="form-control" placeholder="Ingrese el correo" maxlength="255" required autofocus>
                </div>

                <div class="form-label-group mb-3">
                    <label for="contrasenaAdmin">Contraseña</label>
                    <input type="password" id="contrasenaAdmin" name="contrasenaAdmin" class="form-control" placeholder="Ingrese la contraseña" maxlength="255" required>
                </div>
                <button class="btn btn-color btn-block" type="submit" id="btn-admin">Agregar</button>
            </div>
        </div>
    </div>
</form>
</div>-->

<div class="content">
    <div class="container mb-5">
        <form method="POST" action="services/insertarAdmin.php" onsubmit="return validarAdmin();">
            <div class="container">
                <h5 class="color-gray mb-4">Agregar administrador</h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombreAdmin" name="nombreAdmin" aria-describedby="emailHelp" placeholder="Ingrese el nombre" required maxlength="60">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" id="direccionAdmin" name="direccionAdmin" placeholder="Ingrese la dirección" required maxlength="255">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" id="telefonoAdmin" name="telefonoAdmin" placeholder="Ingrese el telefono" required maxlength="20">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input type="email" class="form-control" id="correoAdmin" name="correoAdmin" placeholder="Ingrese el correo" required maxlength="255">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="contrasena">Contraseña</label>
                            <input type="password" class="form-control" id="contrasenaAdmin" name="contrasenaAdmin" placeholder="Ingrese la contraseña" required maxlength="255">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-color">Agregar</button>
            </div>
        </form>
    </div>
</div>
<?php
    include_once 'include/docCierre.php';
    include_once 'include/footer.php';
?>