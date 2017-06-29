<?php
ini_set('display_errors',0);
ini_set('display_startup_erros',0);
error_reporting(0);

if(isset($_POST['form-nome']) && isset($_POST['form-email']) && ($_POST['acao'] == 'enviar-ouvidoria')) {

    require_once('email/email.php');

    $nome = $_POST['form-nome'];
    $email = $_POST['form-email'];
    $cidade = $_POST['form-cidade'];
    $assunto = $_POST['form-assunto'];
    $tel =  $_POST['form-tel'];
    $cel = $_POST['form-cel'];
//    $tipo = $_POST['form-tipo-contato'];
    $msg = $_POST['form-msg'];

    $corpo = "<table style='text-align=center'>
    <tr>
        <td>Nome: </td>
        <td>$nome </td>
    </tr>
      <tr>
        <td>Cidade: </td>
        <td> $email</td>
    </tr>
     <tr>
        <td>Cidade: </td>
        <td> $cidade</td>
    </tr>
     <tr>
        <td>Assunto: </td>
        <td>$assunto</td>
    </tr>
     <tr>
        <td>Telefone: </td>
        <td>$tel</td>
    </tr>
     <tr>
        <td>Celular: </td>
        <td>$cel</td>
    </tr>
     <tr>
        <td>Mensagem: </td>
        <td>$msg</td>
    </tr>
</table>";

    if(enviarEmail($corpo, 'juceliofeitoza@gmail.com','juceliofeitoza@uniodontomaceio.com.br', 'Ouvidoria - Site Uniodonto Nordeste')) {
        echo 'S';
    } else {
        echo 'N';
    }
}

if(isset($_POST['form-nome']) && isset($_POST['form-email']) && ($_POST['acao'] == 'enviar-contato')) {

    require_once('email/email.php');

    $nome = $_POST['form-nome'];
    $email = $_POST['form-email'];
    $cidade = $_POST['form-cidade'];
    $assunto = $_POST['form-assunto'];
    $tel =  $_POST['form-tel'];
    $cel = $_POST['form-cel'];
//    $tipo = $_POST['form-tipo-contato'];
    $msg = $_POST['form-msg'];

    $corpo = "<table style='text-align=center'>
    <tr>
        <td>Nome: </td>
        <td>$nome </td>
    </tr>
      <tr>
        <td>Cidade: </td>
        <td> $email</td>
    </tr>
     <tr>
        <td>Cidade: </td>
        <td> $cidade</td>
    </tr>
     <tr>
        <td>Assunto: </td>
        <td>$assunto</td>
    </tr>
     <tr>
        <td>Telefone: </td>
        <td>$tel</td>
    </tr>
     <tr>
        <td>Celular: </td>
        <td>$cel</td>
    </tr>
     <tr>
        <td>Mensagem: </td>
        <td>$msg</td>
    </tr>
</table>";

    if(enviarEmail($corpo, 'juceliofeitoza@gmail.com', 'juceliofeitoza@uniodontomaceio.com.br','Fale Conosco - Site Uniodonto Nordeste')) {
        echo 'S';
    } else {
        echo 'N';
    }
}
