<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\LoginController;
use MVC\Router;
$router = new Router();


/* Inicio: Rutas de Login */

//Login
$router->get('/', [LoginController::class, 'login']);
$router->post('/', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

//Crear cuenta
$router->get('/crear-cuenta', [LoginController::class, 'crear_cuenta']);
$router->post('/crear-cuenta', [LoginController::class, 'crear_cuenta']);

//Formulario de Olvide Pasword
$router->get('/olvide-password', [LoginController::class, 'olvide_password']);
$router->post('/olvide-password', [LoginController::class, 'olvide_password']);

//Colocar Nuevo Pasword
$router->get('/nuevo-password', [LoginController::class, 'nuevo_password']);
$router->post('/nuevo-password', [LoginController::class, 'nuevo_password']);

// Confirmacion de Cuenta
$router->get('/mensaje-confirmacion', [LoginController::class, 'mensaje_confirmacion']);
$router->get('/confirmar-cuenta', [LoginController::class, 'confirmar_cuenta']);

/* Fin: Rutas de Login */


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();