<?php

/*	require_once('class.phpmailer.php');

	

	function enviarEmail($assunto,$_texto,$emails,$anexo){			 		

		

	    $novoMail = new PHPMailer (); 	    

        $novoMail->SetFrom('ouvidoria@uniodontonordeste.com.br', 'Contato Uniodonto');

		

		foreach($emails as $email){

			$novoMail->AddAddress($email);		

		}	         		



		$texto= "<html><body>".$_texto."</body></html>";

						

		$novoMail->Subject = utf8_decode($assunto);

		$novoMail->Body = utf8_decode($texto);

		$novoMail->IsHTML(true);// ativa o envio de mensagem em html, pode-se montar uma mensagem em HTML e colocar tudo numa string em $texto  logo acima

		$novoMail->IsSMTP();

		//$novoMail->SMTPAuth = false;		

		//$novoMail->SMTPSecure = "tls";		

		$novoMail -> Host = 'smtp.uniodontonordeste.com.br'; // servidor SMTP

		$novoMail -> Port = 587; // porta do servidor

		$novoMail -> SMTPAuth = false; // ativando autenticação

		$novoMail -> Username = 'ouvidoria@uniodontomaceio.com.br';

		$novoMail -> Password = 'ouvidoria006';

		$novoMail -> SetLanguage('br');

		

		if ($anexo != ''){

			$novoMail->AddAttachment($anexo);//anexa o arquivo		

		}	

		

		if(!$novoMail->Send()) {

		   return false;

		}else{

		   return true;   

		}			

		

	}

$emails[]='lima_neto@hotmail.com';

if (enviarEmail('teste','teste1',$emails,'')) {

print 1;

}

else {

print 0;

}

*/



// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer

require("class.phpmailer.php");


// Inicia a classe PHPMailer

$mail = new PHPMailer();
 

// Define os dados do servidor e tipo de conexão

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail -> Port = 587;

$mail->IsSMTP(); // Define que a mensagem será SMTP

$mail->Host = "smtp.uniodontonordeste.com.br"; // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br)

$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)

$mail->Username = 'ouvidoria@uniodontonordeste.com.br'; // Usuário do servidor SMTP (endereço de email)

$mail->Password = 'ouvidoria006'; // Senha do servidor SMTP (senha do email usado)

 

// Define o remetente

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->From = "ouvidoria@uniodontonordeste.com.br"; // Seu e-mail

$mail->Sender = "ouvidoria@uniodontonordeste.com.br"; // Seu e-mail

$mail->FromName = "Uniodonto Nordeste - Ouvidoria"; // Seu nome

 

// Define os destinatário(s)

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

//$mail->AddAddress('ouvidoria@uniodontonordeste.com.br');

//$mail->AddAddress('juceliofeitoza@uniodontomaceio.com.br');

$mail->AddAddress('paula.iris@uniodontonordeste.com.br');

//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia

//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta

 

// Define os dados técnicos da Mensagem

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->IsHTML(true); // Define que o e-mail será enviado como HTML

//$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)

 

// Define a mensagem (Texto e Assunto)

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->Subject  = "Email da Ouvidoria do Site"; // Assunto da mensagem
$tipoDoContato = @$_POST["tipoContato"];

$mensagem = "Tipo do Contato: " . $tipoDoContato . "<br><br>Nome do visitante: " . $_POST["edtNome"] . "<br>Assunto: " . $_POST["edtAssunto"] . "<br>Email: " . $_POST["edtEmail"] . "<br>Fone: " . $_POST["edtFone"] . "<br>Mensagem: " . $_POST["edtMensagem"];


if (($_POST["edtNome"]=='') || ($_POST["edtAssunto"]=='') || ($_POST["edtEmail"]=='') || ($_POST["edtMensagem"]=='')){
	print "<script>alert('Erro ao tentar enviar o email.'); location.href='../site/contato.php';</script>";
        
}

if (isset($_POST["edtProtocolo"])) {
    
	$mensagem.="<br><br> Protocolo informado pelo cliente: " . $_POST["edtProtocolo"];
}

$mensagem = "Atenção, essa mensagem foi enviada através do site da Federação Nordeste.<br><br>".$mensagem;

$mail->Body = $mensagem;

//$mail->AltBody = 'Este é o corpo da mensagem de teste, em Texto Plano!  ';

 

// Define os anexos (opcional)

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

//$mail->AddAttachment("/home/login/documento.pdf", "novo_nome.pdf");  // Insere um anexo

 

// Envia o e-mail

$mail->SMTPDebug  = 1;

$enviado = $mail->Send();

 

// Limpa os destinatários e os anexos

$mail->ClearAllRecipients();

$mail->ClearAttachments();

 

// Exibe uma mensagem de resultado


if ($enviado) {

print "<script>alert('Email enviado. Aguarde que entraremos em contato em breve.'); location.href='http://www.uniodontonordeste.com.br/site/index.php';</script>";

} else {
echo "7";
 print "<script>alert('Erro ao tentar enviar o email.'); location.href='http://www.uniodontonordeste.com.br/site/index.php';</script>";


//echo "Informa��es do erro: 
//" . $mail->ErrorInfo;
}
?>