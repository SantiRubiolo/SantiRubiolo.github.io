<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.mcsgroup.com.py';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '_mainaccount@mcsgroup.com.py';                     //SMTP username
    $mail->Password   = '';                               //SMTP password
    $mail->SMTPSecure = 'ssl';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    if (isset($_POST['enviar'])){

        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];

        $contenidoMail = "De: $nombre  <br>";
        $contenidoMail .= "Mail: $email <br>";
        $contenidoMail .= "Consulta: $mensaje";
        
        $asunto = "Consulta Mega Control Service S.A";
    }

    //Recipients
    $mail->setFrom( $email, $nombre);
    $mail->addAddress('mcs@megacontrol.com.py');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = $contenidoMail;

    $mail->send();
    echo 'El mensaje se envio correctamente';
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
}






// // Import PHPMailer classes into the global namespace
// // These must be at the top of your script, not inside a function
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// // Load Composer's autoloader
// require "PHPmailer/Exception.php";
// require "PHPmailer/PHPMailer.php";
// require "PHPmailer/SMTP.php";

// // Instantiation and passing `true` enables exceptions
// $mail = new PHPMailer(true);

// try {
//     //Server settings
//     // Enable verbose debug output
//     $mail->isSMTP(); // Send using SMTP
//     $mail->Host       = 'host, puede ser gmail o el del hosting ';                    // Set the SMTP server to send through
//     $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
//     $mail->Username   = 'cuenta de mail ';                     // SMTP username
//     $mail->Password   = 'contrase�a de la cuenta de mail';                               // SMTP password
//     $mail->SMTPSecure =  'tsl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
//     $mail->Port       =  587 ;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
   
//     if (isset($_POST['enviar'])){

//         $nombre = $_POST['nombre'];
//         $email = $_POST['email'];
//         $mensaje = $_POST['mensaje'];
    
//         $contenidoMail = "De: $nombre  <br>";
//         $contenidoMail .= "Mail: $email <br>";
//         $contenidoMail .= "Consulta: $mensaje";
        
//         $asunto = "Consultas Pepe";
//     }
//     //Recipients
//     $mail->setFrom($email, $nombre);
//     $mail->addAddress('infololamorablancos@gmail.com', 'LolaMora');     // Add a recipient
//                 // Name is optional
//     $mail->addReplyTo('info@example.com', 'Information');
//     $mail->addCC('cc@example.com');
//     $mail->addBCC('bcc@example.com');

//     // Attachments
//        // Optional name

//     // Content
//     $mail->isHTML(true);                                  // Set email format to HTML
//     $mail->Subject = $asunto;
//     $mail->Body    = $contenidoMail;
//     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }

// ?>

