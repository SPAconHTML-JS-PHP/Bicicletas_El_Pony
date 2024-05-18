<?php
session_start();
require '../modelodao/UsuarioDao.php';
require '../modelodto/UsuarioDto.php';
require '../conectaBD.php';

//Controla la consulta de la BD y asigna rol.
if(isset($_POST['btnLogin'])){ //Dice que va a hacer el boton Login de la pagina Login.
    
    $usuarioDao = new UsuarioDao();
    $usuario = $usuarioDao->login($_POST['txtEmail'],$_POST['txtClave']);
    if($usuario['email']!= null){
        $_SESSION['email']=$usuario['email'];        
        $_SESSION['contrasena']=$usuario['contrasena'];
        $_SESSION['rol'] = $usuario['rol'];
        
//Captura y Analiza Quien entró

        if($_SESSION['rol']=='Cliente'){
             echo "<script> window.location.replace('../comprar.php'); 
             </script>"; 
           
        }
        elseif($_SESSION['rol']=='Admin'){
            echo "<script> window.location.replace('../admin-tienda.php'); </script>"; 
           
       }


   }
   else{
    $_SESSION['mensaje']="Usuario y/o contraseña incorrectos";
    echo "<script> 

window.location.replace('../login.php'); 

</script>"; 
    
   }


?>