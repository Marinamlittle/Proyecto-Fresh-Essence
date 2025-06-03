<?php 

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email;
    public $nombre;
    public $token;
    


    public function __construct($email, $nombre, $token){
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion(){

        //Crear el objeto de email

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '7aae49ef9957a5';
        $mail->Password = '6613bc8bdca822';

        $mail->setFrom('marinaml201101@gmail.com'); //quien lo envia
        $mail->addAddress('marinaml201101@gmail.com', 'FreshEssence.com'); //a que email llega
        $mail->Subject = 'Confirma tu cuenta';


        //Set html
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->email . ".</strong> Has creado tu cuenta en Fresh Essence. Solo debes confirmarla presionando el siguiente enlace.</p>";
        $contenido .= "<p>Presiona aquí: <a href='http://localhost:3000/confirmar-cuenta?token=".$this->token . "'>Confirmar Cuenta.</a></p>";
        $contenido .= "<p> Si tú no solicitaste esta cuenta, puedes ignorar el mensaje.</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        //Enviar el email
        $mail->send();
}

    //ENVIAR INSTRUCCIONES
    public function enviarInstrucciones(){

        //Crear el objeto de email

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '7aae49ef9957a5';
        $mail->Password = '6613bc8bdca822';
    
        $mail->setFrom('marinaml201101@gmail.com'); //quien lo envia
        $mail->addAddress('marinaml201101@gmail.com', 'FreshEssence.com'); //a que email llega
        $mail->Subject = 'Reestablecer tu password';
    
    
        //Set html
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';
    
        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . ". </strong>Has solicitado reestablecer tu password, sigue el siguiente enlace para hacerlo.</p>";
        $contenido .= "<p>Presiona aquí: <a href='http://localhost:3000/recuperar?token=".$this->token . "'>Reestablecer Password.</a></p>";
        $contenido .= "<p> Si tú no solicitaste esta cuenta, puedes ignorar el mensaje.</p>";
        $contenido .= "</html>";
    
        $mail->Body = $contenido;
    
        //Enviar el email
        $mail->send();
}

}