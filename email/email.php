<?php
	require_once('phpmailer/class.phpmailer.php');

	function enviarEmail($_texto,$email,$assunto) {
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

            $mail->IsHTML(true);

            $mail->Subject = $assunto;
            $mail->Body = $_texto;


            $retornoEnvio = $mail->send();
            echo $retornoEnvio;
           
	}
?>
