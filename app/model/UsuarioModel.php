<?php

class UsuarioModel{

    /*
        @param $username el nombre del usuario
        @param $password la contrasenia del usuario
        @param $carnet el numero de carnet del usuario, usuado en bolivia
    */
    public function registrar($username, $password, $carnet){
        // Funcion para poder insertar los valores en la DB
        require_once('../../core/conexion.php');

        $contraseña_hash = password_hash($password,PASSWORD_DEFAULT);
        
        $query = "INSERT INTO usuario(user_name, password, ci) 
                   VALUES ('$username', '$contraseña_hash', '$carnet')";
        $ejecutar = mysqli_query($conexion, $query);

        mysqli_close($conexion);
        return $ejecutar;
    }
}
?>
