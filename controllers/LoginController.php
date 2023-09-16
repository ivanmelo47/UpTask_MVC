<?php
    
namespace Controllers;
use MVC\Router;

class LoginController {
    public static function login(Router $router){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            # code...
        }

        // Render a la Vista
        $router->render('auth/login', [
            'titulo' => 'Iniciar Sessión'
        ]);
    }
    public static function logout(){
        echo 'Desde Logout';

        
    }
    public static function crear_cuenta(Router $router){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            # code...
        }

        // Render a la Vista
        $router->render('auth/crear-cuenta', [
            'titulo' => 'Crear Cuenta'
        ]);
    }
    public static function olvide_password(Router $router){
        //echo 'Desde Olvide';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            # code...
        }

        // Render a la Vista
        $router->render('auth/olvide-pass', [
            'titulo' => 'Olvide Password'
        ]);
    }
    public static function nuevo_password(Router $router){
        //echo 'Desde Nuevos Password';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            # code...
        }

        // Render a la Vista
        $router->render('auth/nuevo-pass', [
            'titulo' => 'Nuevo Password'
        ]);
    }
    public static function mensaje_confirmacion(){
        echo 'Desde Mensaje';

        
    }
    public static function confirmar_cuenta(){
        echo 'Desde Confirmar';

    }
}