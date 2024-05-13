<?php

class UsuarioDto {

    private $id = 0;
    private $rol = "";
    private $email  = "";
    private $contrasena="";
    private $nombres="";
    private $apellidos="";



    function getIdUsuario() { 
        return $this->id; 
    } 
    function setIdUsuario($id) { 
        $this->id = $id; 
    } 

    function getRol() { 
        return $this->rol; 
    } 
    function setRol($rol) { 
        $this->rol = $rol;  
    } 

    function getEmail() { 
        return $this->email; 
    } 
    function setEmail($email) { 
        $this->email = $email; 
    } 
    
    function getContrasena() { 
        return $this->contrasena; 
    } 
    function setContrasena($contrasena) { 
        $this->con = $contrasena;  
    }

    function getNombreUsuario() { return $this->nombres; } 
    function setNombreUsuario($nombres) { $this->nombres = $nombres;  } 

     

    function getApellidoUsuario() { return $this->apellidos; }
    function setApellidoUsuario($apellidos) { $this->apellidos = $apellidos; } 

}