<?php
session_start();
require '../modelodao/UsuarioDao.php';
require '../modelodto/UsuarioDto.php';
require '../PHP/conectaBD.php';

if(isset($_POST['btnLogin'])){
    
    $usuarioDao = new UsuarioDao();
    $usuario = $usuarioDao->login($_POST['txtEmail'],$_POST['txtClave']);
    if($usuario['email']!= null){
        $_SESSION['time'] = time();
        $_SESSION['email']=$usuario['email'];
        $_SESSION['nombre']=$usuario['nombreUsuario'];
        $_SESSION['rol']=$usuario['rol'];
        if($_SESSION['rol']=="Cliente"){
             echo "<script> 

window.location.replace('../comprar.php'); 

</script>"; 
           
        }
        else{
            echo "<script> 

window.location.replace('../entidad.php'); 

</script>"; 
           
       }


   }
   else{
    $_SESSION['mensaje']="Usuario y/o contraseña incorrectos";
    echo "<script> 

window.location.replace('../login.php'); 

</script>"; 
    
   }

   
}



?>