<?php
    $titulo = 'Panel usuario';

    include_once 'include/docDeclaracion.php';
    include_once 'include/navbarUsuario.php';

    $usuario = $_SESSION['usuario'];

    $consulta = consultaUsuario($usuario);

    function consultaUsuario($usuario) {
        $con = mysqli_connect("localhost","root","","ejemplo");

        $query = "SELECT * FROM usuario
        WHERE correo = '$usuario'";

        $result = mysqli_query($con, $query);

        $fila = mysqli_fetch_array($result, MYSQLI_ASSOC);

        return [
            $fila['nombre'],
            $fila['direccion'],
            $fila['telefono'],
            $fila['correo'],
            $fila['id']
        ];
    }
?>
<div class='container'>
    <div class='row'>
        <div class='col-md-12'>
            <h2 class='mb-3 color-gray'>Panel usuario</h2>
        </div>
    </div>
</div>

<div class='container mb-5'>
    <form action="services/editarUsuario.php" method="POST" onsubmit="return validarUsuario();">
        <div class="row">
            <div class='col-md-4'>
                <input type="hidden" name="id" value="<?php echo $consulta[4]?>">
                <div class='form-group'>
                    <label for='nombre'>Nombre</label>
                    <input type='text' class='form-control' name='nombre' id='nombre' aria-describedby='emailHelp' value='<?php echo rtrim($consulta[0]);?>' placeholder='Editar el nombre'>
                </div>
            </div>
            <div class='col-md-8'>
                <div class='form-group'>
                    <label for='dir'>Dirección</label>
                    <input type='text' class='form-control' name='dir' id='dir' aria-describedby='emailHelp' value='<?php echo rtrim($consulta[1]);?>' placeholder='Editar la dirección'>
                </div>
            </div>
            <div class='col-md-6'>
                <div class='form-group'>
                    <label for='telefono'>Telefono</label>
                    <input type='text' class='form-control' name='telefono' id='telefono' aria-describedby='emailHelp' value='<?php echo rtrim($consulta[2]);?>' placeholder='Editar el telefono'>
                </div>
            </div>
            <div class='col-md-6'>
                <div class='form-group'>
                    <label for='correo'>Correo</label>
                    <input type='text' class='form-control' name='correo' id='correo' aria-describedby='emailHelp' value='<?php echo rtrim($consulta[3]);?>' placeholder='Editar el correo'>
                </div>
            </div>
            <div class="col-md-12">
                <button type='submit' class='btn btn-color'>Cambiar datos</button>
            </div>
        </div>
    </form>
</div>
<?php
    include_once 'include/docCierre.php';
    //include_once 'include/footer.php';
?>