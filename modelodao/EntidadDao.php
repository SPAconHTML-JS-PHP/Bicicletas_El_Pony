<?php

class TiendaDao {

    public function registrarTienda(TiendaDto $TiendaDto) {
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query = $cnn->prepare("INSERT INTO tiendas(nombreTienda, direccionTienda) VALUES (?,?)");


            $nombreTienda =$TiendaDto->getNombreTienda();
            $direccionTienda=$TiendaDto->getdireccionTienda();
                    
            $query->bindParam(1, $nombreTienda);
            $query->bindParam(2, $direccionTienda);
            
            $query->execute();
            $mensaje="Registro Exitoso";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn =null;
        return $mensaje;
    }
    public function modificarTienda(TiendaDto $TiendaDto) {
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query = $cnn->prepare("UPDATE tiendas SET nombreTienda=?, direccionTienda=? WHERE  idTienda=?");
            $idTienda=$TiendaDto->getIdTienda();


            $nombreTienda =$TiendaDto->getNombreTienda();
            $direccionTienda=$TiendaDto->getdireccionTienda();
           

            $query->bindParam(1, $nombreTienda);
            $query->bindParam(2, $direccionTienda);
            $query->bindParam(3,  $idTienda);
            $query->execute();
            $mensaje = "Registro Actualizado";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn=null;
        return $mensaje;
    }
    public function obtenerTienda($idTienda) {
        $cnn = Conexion::getConexion();        
        try {
            $query = $cnn->prepare('SELECT * FROM Tiendas WHERE idTienda = ?');
            $query->bindParam(1, $idTienda);
            $query->execute();
            return $query->fetch();
        } catch (Exception $ex) {
            echo 'Error' . $ex->getMessage();
        }
        $cnn=null;
    }
    public function eliminarTienda($idTienda) {
        $cnn = Conexion::getConexion();  
        $mensaje = "";
        try {
            $query = $cnn->prepare("DELETE FROM Tienda WHERE idTienda = ?");
            $query->bindParam(1, $idTienda);
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
        $listarTienda= 'Select * from tiendas';
        $query = $cnn->prepare($listarTienda);
        $query->execute();
        return $query->fetchAll();
    } catch (Exception $ex) {
        echo 'Error' . $ex->getMessage();
    }
}


}
