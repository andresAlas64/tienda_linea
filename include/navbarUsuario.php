<?php
    include_once 'services/carrito.php';
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-color mb-5">
    <div class="container">
        <a class="navbar-brand" href="index.php" title="Inicio">Tecnosoft</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="productoUsuario.php">Productos<span class="sr-only">(current)</span></a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>  usuario.php
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="services/cerrarSesion.php">Cerrar sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mostrarCarrito.php"><i class="fas fa-shopping-cart"></i> <?php
                        echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                    ?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>