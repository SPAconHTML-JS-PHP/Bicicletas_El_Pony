<?php
require_once '../conectaBD.php';
require_once '../CreaBD.php';
class UsuarioDao {

    public function registrarUsuario(UsuarioDto $usuarioDto) {
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query = $cnn->prepare("INSERT INTO usuarios(email, contrasena, nombres, apellidos) VALUES(?,?,?,?)");

            $email=$usuarioDto->getEmail();
            $contrasena =$usuarioDto->getContrasena() ;
            
            $nombres=$usuarioDto->getNombreUsuario();
            $apellidos=$usuarioDto->getApellidoUsuario();

            $query->bindParam(1,  $email);
            $query->bindParam(2, $contrasena);
            $query->bindParam(3, $nombres);
            $query->bindParam(4, $apellidos);
            
            $query->execute();
            $mensaje="Registro Exitoso";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn =null;
        return $mensaje;
    }
    public function modificarUsuario(UsuarioDto $usuarioDto) {
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query = $cnn->prepare("UPDATE usuarios SET email=?,contraseña=?,nombres=?,apellidos=?,rol=? WHERE email=?");
           
            $email=$usuarioDto->getEmail();
            $contrasena=$usuarioDto->getContrasena();
            
            $nombres=$usuarioDto->getNombreUsuario();
            $apellidos=$usuarioDto->getApellidoUsuario();

            $rol=$usuarioDto->getRol();

            $query->bindParam(1, $email);
            $query->bindParam(2, $contrasena);
            $query->bindParam(3, $nombres);
            $query->bindParam(4, $apellidos);
            $query->bindParam(5, $$rol);

            $query->execute();
            $mensaje = "Registro Actualizado";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn=null;
        return $mensaje;
    }
    public function obtenerUsuario($idUsuario) {
        $cnn = Conexion::getConexion();        
        try {
            $query = $cnn->prepare('SELECT * FROM usuarios WHERE email = ?');
            $query->bindParam(1, $email);
            $query->execute();
            return $query->fetch();
        } catch (Exception $ex) {
            echo 'Error' . $ex->getMessage();
        }
        $cnn=null;
    }
    public function eliminarUsuario($idUsuario) {
        $cnn = Conexion::getConexion();  
        $mensaje = "";
        try {
            $query = $cnn->prepare("DELETE FROM usuarios WHERE email = ?");
            $query->bindParam(1, $email);
            $query->execute();
            $mensaje = "Registro Eliminado";
        } catch (Exception $ex) {
         $mensaje = $ex->getMessage();  
     }
     return $mensaje;
 }
 public function listarTodos() {
    $cnn = Conexion::getConexion();

    try {
        $listarUsuarios = 'Select * from usuarios';
        $query = $cnn->prepare($listarUsuarios);
        $query->execute();
        return $query->fetchAll();
    } catch (Exception $ex) {
        echo 'Error' . $ex->getMessage();
    }
}

public function login($email,$contrasena) {
        $cnn = Conexion::getConexion();
        $mensaje = "";        
        try {
            $query = $cnn->prepare('SELECT usuarios.* FROM usuarios where email= ? and contrasena=?');
            $query->bindParam(1, $email);
            $query->bindParam(2, $contrasena);
            $query->execute();
            return $query->fetch();
        } catch (Exception $ex) {
            echo 'Error' . $ex->getMessage();
        }
        $cnn=null;
    }

    
     public function ascender_cliente(){
        $cnn = Conexion::getConexion();
        try{
        $sql = 'INSERT INTO admin_tienda(email, contrasena, nombres, apellidos, tienda_id) VALUES (?,?,?,?,1)';
        $query = $cnn->prepare($sql);
        $query->bindParam(1, $email);
        $query->bindParam(2, $contrasena);
        $query->bindParam(3, $nombres);
        $query->bindParam(4, $apellidos);
    } catch (Exception $ex) {
        echo 'Error' . $ex->getMessage();
    }
    $cnn=null;  

     }


}
