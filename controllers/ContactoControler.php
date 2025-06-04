<?php

namespace Controllers;

use MVC\Router;
use PHPMailer\PHPMailer\PHPMailer;

class ContactoControler{

    public static function contacto ( Router $router ){

        $mensaje = null;

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $respuestas = $_POST['contacto'];
            
            //Crear una instancia de PHPMAILER
            $mail = new PHPMailer();

            //Configurar SMTP
            $mail->isSMTP();
            $mail->Host = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = '7aae49ef9957a5';
            $mail->Password =  '6613bc8bdca822';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 2525;

            //Contenido el mail
            $mail->setFrom('marinaml201101@gmail.com'); //quien lo envia
            $mail->addAddress('marinaml201101@gmail.com', 'FreshEssence.com'); //a que email llega
            $mail->Subject = 'Tienes un nuevo mensaje';

            //HTML
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';

            //Contenido
            $contenido = '<html>';
            $contenido .= '<p>Tienes un nuevo mensaje</p>'; 
            $contenido .= '<p>Nombre: ' . $respuestas['nombre'] .' </p>'; 
            $contenido .= '<p>Apellidos: ' . $respuestas['apellidos'] .' </p>'; 
            $contenido .= '<p>Email: ' . $respuestas['email'] .' </p>'; 
            $contenido .= '<p>Telefono: ' . $respuestas['telefono'] .' </p>'; 
            $contenido .= '<p>Mensaje: ' . $respuestas['mensaje'] .' </p>'; 
            $contenido .= '</html>';


            $mail->Body = $contenido;
            $mail->AltBody = 'ESTO ES TEXTO ALTERNATIVO SIN HTML';


            //enviar el email
            if($mail->send()) {
                $mensaje = "Mensaje enviado Correctamente";
            } else {
                $mensaje = "Mensaje no se pudo enviar..";
            }
        }
        
        $router->render('paginas/contacto', [
            'mensaje' => $mensaje
        ]);

    }
}
