<?php
    
namespace Controllers;
use Model\Usuario;
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

        $usuario = new Usuario;
        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario->sincronizar($_POST);
            $alertas = $usuario->validarNuevaCuenta();

            if (empty($alertas)) {
                // Verificar que e usuario no este registrado
                $resultado = $usuario->existeUsuario();

                if ($resultado->num_rows) {
                    $alertas = Usuario::getAlertas();
                } else {
                    // Hashear el password
                    $usuario->hashPassword();

                    //Generar Token único
                    $usuario->crearToken();

                    // Enviar el email
                    //$email = new Email($usuario->email, $usuario->nombre, $usuario->token);
                    //$email->enviarConfirmacion();

                    // Crear el usuario
                    $resultado = $usuario->guardar();
                    if ($resultado) {
                        header('Location: /mensaje');
                    }
                }
            }
        }

        // Render a la Vista
        $router->render('auth/crear-cuenta', [
            'titulo' => 'Crear Cuenta',
            'usuario' => $usuario,
            'alertas' => $alertas
        ]);
    }
    public static function olvide_password(Router $router){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            # code...
        }

        // Render a la Vista
        $router->render('auth/olvide-pass', [
            'titulo' => 'Olvide Password'
        ]);
    }
    public static function nuevo_password(Router $router){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            # code...
        }

        // Render a la Vista
        $router->render('auth/nuevo-pass', [
            'titulo' => 'Nuevo Password'
        ]);
    }
    public static function mensaje(Router $router){
        // Render a la Vista
        $router->render('auth/mensaje', [
            'titulo' => 'Cuenta Creada Exitosamente!'
        ]);
    }
    public static function confirmar_cuenta(Router $router){
        // Render a la Vista
        $router->render('auth/confirmar', [
            'titulo' => 'Cuenta Confirmada!'
        ]);
    }
}