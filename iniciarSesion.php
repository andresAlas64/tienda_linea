<?php
    $titulo = 'Iniciar sesión';

    include_once 'include/docDeclaracion.php';
    include_once 'include/navbar.php';

    ob_start();

    session_start();

    include_once 'services/conexion.php';
?>
<form class="form-signin my-5" action="" method="POST">
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $correo = mysqli_real_escape_string($con, $_POST['correo']); 
            $contrasena = mysqli_real_escape_string($con, $_POST['contrasena']); 
            //$contrasena = MD5($contrasena1);
            //$contrasenaEncriptada = password_hash($contrasena, PASSWORD_BCRYPT);

            //echo $contrasenaEncriptada;

            //echo $contrasena;

            $query = "SELECT * FROM usuario WHERE correo='$correo' AND clave='$contrasena'";

            $result = mysqli_query($con, $query);

            $row = mysqli_fetch_array($result);

            $_SESSION['ID_USUARIO'] = $row['ID_USUARIO'];

            $_SESSION['ID_ROL'] = $row['ID_ROL'];

            $count = mysqli_num_rows($result);

            if($count == 1) {
                if($row['ID_ROL'] == 1) {
                    header ("location: administrador.php"); 
                }
                else if($row['ID_ROL'] == 2) {
                    $_SESSION['ID_ROL'] = $row['ID_ROL'];

                    header ("location: usuario.php"); 
                }
            }else {
                $error="Correo o contraseña incorrecto";
            }
        }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="text-center mb-3">
                    <img class="mb-4" src="img/codepen64.png" alt="Logo" width="64" height="64">
                    <h1 class="h3 mb-3 font-weight-normal">Iniciar sesión</h1>
                </div>

                <div class="form-label-group mb-3">
                    <label for="inputEmail">Correo</label>
                    <input type="email" name="correo" id="inputEmail" class="form-control" placeholder="Ingrese el correo" required autofocus>
                </div>

                <div class="form-label-group mb-3">
                    <label for="inputPassword">Contraseña</label>
                    <input type="password" name="contrasena" id="inputPassword" class="form-control" placeholder="Ingrese la contraseña" required>
                </div>
                <button class="btn btn-color btn-block" type="submit">Iniciar sesión</button>
            </div>
        </div>
    </div>
</form>

<?php
    include_once 'include/docCierre.php';
?>