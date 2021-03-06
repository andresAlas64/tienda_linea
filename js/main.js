document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

function validar() {
    var nombre, direccion, telefono, correo, contrasena, expresion;

    nombre = document.getElementById('nombre').value;
    direccion = document.getElementById('direccion').value;
    telefono = document.getElementById('telefono').value;
    correo = document.getElementById('correo').value;
    contrasena = document.getElementById('contrasena').value;

    expresion = /\w+@\w+\.+[a-z]/;

    expresionNombre = /[A-Za-z]/;

    if(nombre === '' || direccion === '' || telefono === '' || correo === '' || contrasena === '') {
        alertify.warning('Todos los campos son obligatorios');

        return false;
    }
    else if(!expresionNombre.test(nombre)) {
        alertify.warning('El nombre solo puede tener letras');

        return false;
    }
    else if(nombre.length > 60) {
        alertify.warning('El nombre tiene que ser menor a 60 caracteres');

        return false;
    }
    else if(direccion.length > 255) {
        alertify.warning('La direccion tiene que ser menor a 255 caracteres');

        return false;
    }
    else if(telefono.length > 20) {
        alertify.warning('La telefono tiene que ser menor a 20 caracteres');

        return false;
    }
    else if(correo.length > 255) {
        alertify.warning('El correo tiene que ser menor a 255 caracteres');

        return false;
    }
    else if(!expresion.test(correo)) {
        alertify.warning('El correo no es valido');

        return false;
    }
    else if(contrasena.length > 255) {
        alertify.warning('La contraseña tiene que ser menor a 255 caracteres');

        return false;
    }
    else if(isNaN(telefono)) {
        alertify.warning('El telefono ingresado no es numero');

        return false;
    }else {
        alertify.success('Se agrego el usuario');
    }
}

function validarAdmin() {
    var correo, contrasena, expresion, nombre, telefono, direccion;

    nombre = document.getElementById('nombreAdmin').value;
    telefono = document.getElementById('telefonoAdmin').value;
    correo = document.getElementById('correoAdmin').value;
    contrasena = document.getElementById('contrasenaAdmin').value;
    direccion = document.getElementById('direccionAdmin').value;

    expresion = /\w+@\w+\.+[a-z]/;

    if(correo === '' || contrasena === '' || nombre === '' || telefono === '' || direccion === '') {
        alertify.warning('Todos los campos son obligatorios');

        return false;
    }
    else if(correo.length > 255) {
        alertify.warning('El correo tiene que ser menor a 255 caracteres');

        return false;
    }
    else if(contrasena.length > 255) {
        alertify.warning('La contraseña tiene que ser menor a 255 caracteres');

        return false;
    }
    else if(nombre.length > 60) {
        alertify.warning('El nombre tiene que ser menor a 60 caracteres');

        return false;
    }
    else if(direccion.length > 255) {
        alertify.warning('La direccion tiene que ser menor a 255 caracteres');

        return false;
    }
    else if(telefono.length > 60) {
        alertify.warning('El telefono tiene que ser menor a 20 caracteres');

        return false;
    }
    else if(!expresion.test(correo)) {
        alertify.warning('El correo no es valido');

        return false;
    }else {
        alertify.success('Se agrego el administrador');
    }
}

function eliminarProducto(id) {
    alertify.confirm("Estas seguro de que lo deseas eliminar",
    function(){
        window.location = "http://localhost/tienda/services/eliminarProducto.php?id="+id;
    },
    function(){
        alertify.error('Cancelar');
    });
}

function validarProducto() {
    var titulo, precio, descripcion;

    titulo = document.getElementById('titulo').value;
    precio = document.getElementById('precio').value;
    descripcion = document.getElementById('descripcion').value;

    expresionPrecio = /[0-9,]+[^.]/;

    if(titulo === '' || precio === '' || descripcion === '') {
        alertify.warning('Todos los campos son obligatorios');

        return false;
    }
    else if(titulo.length > 60) {
        alertify.warning('El nombre tiene que ser menor a 60 caracteres');

        return false;
    }
    else if(!expresionPrecio.test(precio)) {
        alertify.warning('El precio solo puede tener numeros y punto decimal');

        return false;
    }
    else if(descripcion.length > 140) {
        alertify.warning('La descripcion tiene que ser menor a 140 caracteres');

        return false;
    }
}

function limpiar() {
    document.getElementById('buscarProducto').value = '';

	location.reload();
}

function limpiarUsuario() {
    document.getElementById('buscarProductoUsuario').value = '';

	location.reload();
}

$(document).ready(function() {
    var texto = $('#buscarProducto').val();

    $.ajax({
        type: 'POST',
        url:  'services/buscarProducto.php',
        data: {'texto': texto},
        success: function(response) {
              $("#tablaProductos").html(response);
        }
    });

    $('#buscarProducto').on('keyup', function(){
        var texto = $('#buscarProducto').val();

        $.ajax({
            type: 'POST',
            url:  'services/buscarProducto.php',
            data: {'texto': texto},
            error: function() {
                    alert("error petición ajax");
            },
            success: function(response) {
                    $("#tablaProductos").html(response);
            }
        });
    });
    
    var texto = $('#buscarProductoUsuario').val();

    $.ajax({
        type: 'POST',
        url:  'services/buscarProductoUsuario.php',
        data: {'texto': texto},
        success: function(response) {
              $("#tablaProductoUsuario").html(response);
        }
    });    

    $('#buscarProductoUsuario').on('keyup', function(){
        var texto = $('#buscarProductoUsuario').val();

        $.ajax({
            type: 'POST',
            url:  'services/buscarProductoUsuario.php',
            data: {'texto': texto},
            error: function() {
                    alert("error petición ajax");
            },
            success: function(response) {
                    $("#tablaProductoUsuario").html(response);
            }
        });
    });
});

function validarUsuario() {
    var nombre, direccion, telefono, correo;

    nombre = document.getElementById('nombre').value;
    direccion = document.getElementById('dir').value;
    telefono = document.getElementById('telefono').value;
    correo = document.getElementById('correo').value;

    expresion = /\w+@\w+\.+[a-z]/;

    expresionNombre = /[A-Za-z]/;

    if(nombre === '' || direccion === '' || telefono === '' || correo === '') {
        alertify.warning('Todos los campos son obligatorios');

        return false;
    }
    else if(!expresionNombre.test(nombre)) {
        alertify.warning('El nombre solo puede tener letras');

        return false;
    }
    else if(nombre.length > 60) {
        alertify.warning('El nombre tiene que ser menor a 60 caracteres');

        return false;
    }
    else if(direccion.length > 255) {
        alertify.warning('La direccion tiene que ser menor a 255 caracteres');

        return false;
    }
    else if(telefono.length > 20) {
        alertify.warning('La telefono tiene que ser menor a 20 caracteres');

        return false;
    }
    else if(!expresion.test(correo)) {
        alertify.warning('El correo no es valido');

        return false;
    }
    else if(correo.length > 255) {
        alertify.warning('El correo tiene que ser menor a 255 caracteres');

        return false;
    }else {
        alertify.success('Se modifico el usuario');
    }
}

function mostrarSeleccion() {
    var cod = document.getElementById("categoria").value;
    
    $.ajax({
        type: 'POST',
        url:  'services/buscarProductoCategoria.php',
        data: {'texto': cod},
        error: function() {
                alert("error petición ajax");
        },
        success: function(response) {
                $("#tablaProductos").html(response);
        }
    });
}

function mostrarSeleccionUsuario() {
    var cod = document.getElementById("categoriaUsuario").value;
    
    $.ajax({
        type: 'POST',
        url:  'services/buscarProductoCategoriaUsuario.php',
        data: {'texto': cod},
        error: function() {
            alert("error petición ajax");
        },
        success: function(response) {
            $("#tablaProductoUsuario").html(response);
        }
    });
}