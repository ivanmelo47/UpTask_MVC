<?php
    
namespace Controllers;

class LoginController {
    public static function login(){
        echo 'Desde Login';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            # code...
        }
    }
    public static function logout(){
        echo 'Desde Logout';

        
    }
    public static function crear_cuenta(){
        echo 'Desde Crear';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            # code...
        }
    }
    public static function olvide_password(){
        echo 'Desde Olvide';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            # code...
        }
    }
    public static function nuevo_password(){
        echo 'Desde Nuevos Password';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            # code...
        }
    }
    public static function mensaje_confirmacion(){
        echo 'Desde Mensaje';

        
    }
    public static function confirmar_cuenta(){
        echo 'Desde Confirmar';

    }
}