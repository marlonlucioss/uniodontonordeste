<?php
ini_set('display_errors',0);
ini_set('display_startup_erros',0);
error_reporting(0);
	require_once('phpmailer/class.phpmailer.php');

	function enviarEmail($_texto,$email,$email2,$assunto) {
// print $_texto.' '.$email.' '.$assunto;
            
           $mail = new PHPMailer(true);
       
           $retornoEnvio = '';
        
         
            $mail->setLanguage('br');
            $mail->IsHTML(true);
            $mail->IsSMTP(); // Define que a mensagem será SMTP
            $mail->Host = "smtp.gmail.com"; // Endereço do servidor SMTP
            $mail->SMTPAuth = true;
            $mail->Username = "juceliofeitoza@uniodontomaceio.com.br";
            $mail->Password = "jucelio09";
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->CharSet = 'UTF-8';

            $mail->From = "juceliofeitoza@gmail.com.br"; // Seu e-mail
            $mail->FromName = "Uniodonto Maceió"; // Seu nome
            //
            //DESTINATARIO
            $mail->AddAddress($email);
            $mail->AddBCC($email2);
            $mail->IsHTML(true);

            $mail->Subject = $assunto;
            $mail->Body = $_texto;

            return $retornoEnvio = $mail->send();
	}
?>
