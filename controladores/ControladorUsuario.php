<?php
session_start();
require '../modelodao/UsuarioDao.php';
require '../modelodto/UsuarioDto.php';
require_once '../PHP/conectaBD.php';

// Controla la consulta de la BD y asigna rol.
if (isset($_POST['btnLogin'])) { // Dice que va a hacer el botón Login de la página Login.

    $usuarioDao = new UsuarioDao();
    $usuario = $usuarioDao->login($_POST['txtEmail'], $_POST['txtClave']);
    if ($usuario['email'] != null) {
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['contrasena'] = $usuario['contrasena'];
        $_SESSION['rol'] = $usuario['rol'];

        // Captura y Analiza Quién entró
        if ($_SESSION['rol'] == 'Cliente') {
            echo "<script>window.location.replace('../comprar.php');</script>";
        } elseif ($_SESSION['rol'] == 'Admin') {
            echo "<script>window.location.replace('../admin-tienda.php');</script>";
        }
    } else {
        $_SESSION['mensaje'] = "Usuario y/o contraseña incorrectos";
        echo "<script>window.location.replace('../login.php');</script>";
    }
}

if (isset($_POST['btnRegistro'])) {
    $usuarioDto = new UsuarioDto();
    $usuarioDto->setEmail($_POST['txtEmail']); // Setee Email para nuevo Registro
    $usuarioDto->setContrasena($_POST['txtClave']); // Setee Clave para nuevo Registro
    $usuarioDto->setNombreUsuario($_POST['txtNombres']);
    $usuarioDto->setApellidoUsuario($_POST['txtApellidos']);

    // Agregar el registro del usuario aquí
    $usuarioDao = new UsuarioDao();
    $_SESSION['mensaje'] = $usuarioDao->registrarUsuario($usuarioDto);
    
    // Después del registro, redirigir a comprar.php
    echo "<script>window.location.replace('../comprar.php');</script>";
}
?>
