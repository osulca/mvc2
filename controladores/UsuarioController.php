<?php

require_once "modelos/Usuario.php";

class UsuarioController{
    public function mostrar(){
        $usuario = new Usuario();
        return $usuario->mostrar();
    }

    public function guardar(string $username, string $password, string $nombres, string $apellidos, string $tipo, int $id_pa){

        $contadorErrores = 0;
        $errores = "";
        if(trim($username)==""){
            $errores .= "Ingrese el username<br>"; 
            $contadorErrores++;
        }

        if(strlen($password)==0){
            $errores .= "Ingrese contraseña<br>";
            $contadorErrores++;
        }

        if(strlen($password)<6 || strlen($password)>12){
            $errores .= "La contraseña debe tener entre 6 y 12 caracteres<br>";
            $contadorErrores++;
        }

        if($contadorErrores>0){
            return $errores;
        }else{
            //logica de guardado
            return "Usuario Guardado";
        }

    }
}