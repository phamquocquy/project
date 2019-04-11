<?php
require 'public/PHPMailer-master/src/Exception.php';
require 'public/PHPMailer-master/src/PHPMailer.php';
require 'public/PHPMailer-master/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendmail($boty,$arrmail){
    $username = 'phamquocquy1996@gmail.com';
    $password = 'tunganh1996';
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = $username;                 // SMTP username
        $mail->Password = $password;                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('from@example.com', 'Mailer');
//        $mail->addAddress('tunganh08081996@gmail.com', 'Joe User');     // Add a recipient
//    $mail->addAddress('ellen@example.com');               // Name is optional
//    $mail->addReplyTo('info@example.com', 'Information');
        if(is_array($arrmail)){
            foreach ($arrmail as $key => $mails){
                $mail->addCC($mails);
            }
        }
        else{
            $mail->addCC($arrmail);
        }
//    $mail->addBCC('bcc@example.com');

        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = $boty;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        return true;
    } catch (Exception $e) {
        $mail->ErrorInfo;
        return false;
    }
}
require_once ('body_mail.php');