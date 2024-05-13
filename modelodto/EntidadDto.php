    <?php

    class TiendaDto {

        private $idTienda = 0;
        private $nombreTienda = "";
        private $direccionTienda = "";

        


        function getIdTienda() { 
            return $this->idTienda; 
        } 
        function setIdTienda($idTienda) { 
            $this->idTienda = $idTienda; 
        } 
        
        function getNombreTienda() { return $this->nombreTienda; } 
        function setNombreTienda($nombreTienda) { $this->nombreTienda = $nombreTienda;  } 
        function getdireccionTienda() { 
            return $this->direccionTienda; 
        } 
        function setdireccionTienda($direccionTienda) { 
            $this->direccionTienda = $direccionTienda;  
        } 
    }
