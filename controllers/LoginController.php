<?php

namespace Controllers;

use Model\Usuario;
use MVC\Router;

class LoginController {
    public static function login(Router $router) {
        $router->render('auth/login');
    }

    public static function logout() {
        echo "Desde Log out";
    }

    public static function olvide(Router $router) {
        $router->render('auth/olvide-password', [

        ]);
    }

    public static function recuperar() {
        echo "Desde recuperar";
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
                    // No esta registrado
                    debuguear('No esta registrado');
                }
            }
        }

        $router->render('auth/crear-cuenta',[
            'usuario' => $usuario,
            'alertas' => $alertas
        ]);
    }
}
