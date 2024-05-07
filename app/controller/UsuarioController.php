<?php

    require_once('../model/UsuarioModel.php');

    class UsuarioControl{

        /*
            @param $username el nombre del usuario
            @param $password la contrasenia del usuario
            @param $carnet el numero de carnet del usuario, usuado en bolivia
            @param $confirm_password la contrasenia del usuario, la cual 

        */

        public function registrar($username,$password,$carnet,$confirm_password) {
        //La funcion registrar sirve para poder registar un usuario y a la vez porder confirmar la contrasena 

            if ($password != $confirm_password) {
                echo "Las contraseñas no coinciden.";
                exit();
            }
     
            $model = new UsuarioModel();
            if ($model->registrar($username,$password,$carnet)) {
                echo "Usuario registrado exitosamente.";
            } else {
                echo "Error al registrar usuario.";
            }
        }
    }
    session_start();

        if (isset($_POST['action'])) {
           require_once('UsuarioController.php');
            $controller = new UsuarioControl();
         
            if ($_POST['action'] === 'registrar') {
                $controller->registrar($_POST['username'], $_POST['password'], $_POST['carnet'], $_POST['confpassword']);
            }
        }

?>