<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\ContactoController;
use Controllers\AdminController;
use Controllers\APIController;
use Controllers\CitaController;
use Controllers\ContactoControler;
use Controllers\LoginController;
use Controllers\ServicioController;
use Controllers\PaginasController;
use MVC\Router;

$router = new Router();

// Iniciar Sesion
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);


//Recuperar Password
$router->get('/olvide', [LoginController::class, 'olvide']);
$router->post('/olvide', [LoginController::class, 'olvide']);
$router->get('/recuperar', [LoginController::class, 'recuperar']);
$router->post('/recuperar', [LoginController::class, 'recuperar']);


//Crear cuenta
$router->get('/crear-cuenta', [LoginController::class, 'crear']);
$router->post('/crear-cuenta', [LoginController::class, 'crear']);

//Confirma cuenta
$router->get('/confirmar-cuenta', [LoginController::class, 'confirmar']);
$router->get('/mensaje', [LoginController::class, 'mensaje']);

//AREA PRIVADA
$router->get('/cita', [CitaController::class,'index']);
$router->get('/admin', [AdminController::class,'index']);
$router->post('/api/eliminar', [APIController::class, 'eliminar']);

// API de Citas
$router->get('/api/servicios', [APIController::class, 'index']);
$router->post('/api/citas', [APIController::class, 'guardar']);

//CRUD Servicios
$router->get('/servicios', [ServicioController::class, 'index']);
$router->get('/servicios/crear', [ServicioController::class, 'crear']);
$router->post('/servicios/crear', [ServicioController::class, 'crear']);
$router->get('/servicios/actualizar', [ServicioController::class, 'actualizar']);
$router->post('/servicios/actualizar', [ServicioController::class, 'actualizar']);
$router->post('/servicios/eliminar', [ServicioController::class, 'eliminar']);

//Pagina Landing
$router->get('/', [PaginasController::class, 'index']);
$router->get('/contacto', [ContactoControler::class,  'contacto']);
$router->post('/contacto', [ContactoControler::class,  'contacto']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
