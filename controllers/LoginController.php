<?php

namespace Controllers;

use Classes\Email;
use Model\Usuario;
use MVC\Router;

class LoginController {
    public static function login(Router $router) {
        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $auth = new Usuario($_POST);
            $alertas = $auth->validarLogin();

            if(empty($alertas)) {
                //Comprobar que exita el usuario
                $usuario = Usuario::where('email', $auth->email);

                if($usuario){
                    //verifica la contraseña
                    if( $usuario->comprobarPasswordAndVerificado($auth->password) ){
                        //Autentificar el usuario
                        session_start();

                        $_SESSION['id'] = $usuario->id;
                        $_SESSION['nombre'] = $usuario->nombre . " " . $usuario->apellido;
                        $_SESSION['email'] = $usuario->email;
                        $_SESSION['login'] = true;

                        //Redireccion
                         if($usuario->admin === "1") {
                            $_SESSION['admin'] = $usuario->admin ?? null;

                            header('Location: /admin');
                         } else{
                            header('Location: /cita');
                         }
                    }
                }  else {
                    Usuario::setAlerta('error', 'Usuario no encontrado');
                }

            }
        }
        $alertas = Usuario::getAlertas();
        
        $router->render('auth/login', [
            'alertas' => $alertas
        ]);
    }

    public static function logout() {
        session_start();

        $_SESSION =[];

        header('Location: /login');
    }

    public static function olvide(Router $router) {

        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $auth = new Usuario($_POST);
            $alertas = $auth->validarEmail();

            if(empty($alertas)){
                $usuario = Usuario::where('email', $auth->email);

                if($usuario && $usuario->confirmado === '1'){
                    
                    //Generar token
                    $usuario->crearToken();
                    $usuario->guardar();

                    //Enviar el email
                    $email = new Email($usuario->email, $usuario->nombre, $usuario->token);
                    $email->enviarInstrucciones();

                    //Alerta de exito
                    Usuario::setAlerta('exito', 'Revisa tu email');
                } else{
                    Usuario::setAlerta('error', 'El usuario no existe o no está registrado');
                    
                }
            }
        }

        $alertas = Usuario::getAlertas();

        $router->render('auth/olvide-password', [
            'alertas' => $alertas
        ]);
    }

    public static function recuperar(Router $router) {

        $alertas = [];
        $error= false;

        $token =   s($_GET['token']);

        //Buscar usuario por su token
        $usuario = Usuario::where('token', $token);

        if(empty($usuario)){
            Usuario::setAlerta('error', 'Token no válido');
            $error = true;
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            //Leer el nuevo password y guardarlo

            $password = new Usuario($_POST);
            $alertas = $password->validarPassword();  
            
            if(empty($alertas)) {
                $usuario->password = null;

                $usuario->password = $password->password;
                $usuario->hashPassword();
                $usuario->token = null;

                $resultado = $usuario->guardar();
                if($resultado){
                    header('Location: /login');
                }
            }
        }


        $alertas = Usuario::getAlertas();
        $router->render('auth/recuperar-password', [
            'alertas' => $alertas,
            'error' => $error
        ]);
    }

    public static function crear(Router $router) {
        $usuario = new Usuario;

        //Alertas vacias
        $alertas = [];
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario->sincronizar($_POST);
            $alertas = $usuario->validarNuevaCuenta();

            //Revisar que alerta este vacio
            if(empty($alertas)){
                $resultado = $usuario->existeUsuario();

                if($resultado->num_rows){
                    $alertas = Usuario::getAlertas();
                } else{
                    //Hashear el password

                    $usuario->hashPassword();

                    //Generar un Token único
                    $usuario->crearToken();

                    //Enviar el email
                    $email = new Email($usuario->nombre, $usuario->email, $usuario->token);
                    $email->enviarConfirmacion();


                    //Crear el usuario
                    $resultado = $usuario->guardar();
                    if($resultado){
                        header('Location: /mensaje');
                    }


                    //debuguear($usuario);
                }
            }
        }

        $router->render('auth/crear-cuenta',[
            'usuario' => $usuario,
            'alertas' => $alertas
        ]);
    }

    public static function mensaje(Router $router){
        $router->render('auth/mensaje');
    }

    public static function confirmar(Router $router){
        $alertas = [];
        
        $token = s($_GET['token']);

        $usuario = Usuario::where('token', $token);

        if(empty($usuario)){
            Usuario::setAlerta('error', 'Token no válido');
        } else {
            $usuario->confirmado = "1";
            $usuario->token = null;
            $usuario->guardar();
            Usuario::setAlerta('exito', 'Cuenta Comprobada Correctamente');
        }

        $alertas = Usuario::getAlertas();
        $router->render('auth/confirmar-cuenta', [
            'alertas'=> $alertas
        ]);
   
    }
}