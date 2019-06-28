<?php
    $titulo = 'Lista de productos';

    include_once 'include/docDeclaracion.php';
    include_once 'include/navbarAdmin.php';
    include_once 'services/conexion.php';

    session_start();

    $administrador = $_SESSION['administrador'];

    $query = "SELECT * FROM producto";

    $result = mysqli_query($con, $query);

    echo "<div class='container mb-5'>
        <div class='row'>
            <div class='col-md-12'>
                <a href='agregarProducto.php' class='btn btn-color mb-3'><i class='fas fa-plus'></i> Agregar producto</a>
                <div class='table-responsive'>
                    <table class='table table-striped'>
                        <thead>
                            <tr>
                                <th>Titulo</th>
                                <th>Descripcion</th>
                                <th>Precio</th>
                                <th>Imagen</th>
                                <th>Categoría</th>
                                <th class='text-center'>Editar</th>
                                <th class='text-center'>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>";
                        while($fila = mysqli_fetch_array($result)) {
                            echo "<tr>
                                <td>".$fila['titulo']."</td>
                                <td>".$fila['descripcion']."</td>
                                <td>".$fila['precio']."</td>
                                <td>".$fila['imagen']."</td>
                                <td>".$fila['idCategoria']."</td>
                                <td class='text-center'><a href='editarProducto.php?id=".$fila['id']."' class='btn btn-color btn-sm'><i class='fas fa-pencil-alt'></i></a></td>
                                <td class='text-center'><a href='#' class='btn btn-color btn-sm' id='eliminarProducto' onclick='eliminarProducto(".$fila['id'].");'><i class='fas fa-trash-alt'></i></a></td>
                            </tr>";
                        }
                        echo "</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>";

    include_once 'include/docCierre.php';
    include_once 'include/footer.php';
?>