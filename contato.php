<?php 
ini_set('display_errors', 0);
ini_set('display_startup_erros', 0);
error_reporting(0);

//
include_once('head.php');
// 
//
//if(isset($_POST['form-nome']) && isset($_POST['form-email'])) {
//    
//    require_once('email/email.php');
//    
//    $nome = $_POST['form-nome'];
//    $email = $_POST['form-email'];
//    $cidade = $_POST['form-cidade'];
//    $assunto = $_POST['form-assunto'];
//    $tel =  $_POST['form-tel'];
//    $cel = $_POST['form-cel'];
//    $tipo = $_POST['form-tipo-contato'];
//    $msg = $_POST['form-msg'];
//    
//    $corpo = "<table>
//    <tr>
//        <td>Nome: </td>
//        <td>$nome </td>
//    </tr>
//      <tr>
//        <td>Cidade: </td>
//        <td> $email</td>
//    </tr>
//     <tr>
//        <td>Cidade: </td>
//        <td> $cidade</td>
//    </tr>
//     <tr>
//        <td>Assunto: </td>
//        <td>$assunto</td>
//    </tr>
//     <tr>
//        <td>Telefone: </td>
//        <td>$tel</td>
//    </tr>
//     <tr>
//        <td>Celular: </td>
//        <td>$cel</td>
//    </tr> 
//    <tr>
//        <td>Tipo de Contato que gostaria de ser Contactado: </td>
//        <td>$tipo</td>
//    </tr>
//     <tr>
//        <td>Mensagem: </td>
//        <td>$msg</td>
//    </tr>
//</table>";
//    
//    if(enviarEmail($corpo, 'juceliofeitoza@gmail.com', 'Fale Conosco - Site Uniodonto Nordeste')) {
//        $contatoConfirm = 'block';
//    } else {
//        $contatoConfirm = 'none';
//    }
//}
 
?>



        <div class="container-fluid contato-content">
            <div class="row">
            <div class="site-main-title">
                <h2>Fale Conosco <small class="site-main-subtitle">Seu contato é muito importante para nós.!</small></h2>
            </div>

            <div class="container-wrap">

                <div class="container main-content">

                    <div class="row">

                        <div class="col-lg-6">

                            <div class="vc_col-sm-6 wpb_column column_container col padding-2-percent instance-1" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
                                <div class="wpb_wrapper">
                                    <div style="margin-top: 3px; margin-bottom: 3px;" class="divider-border"></div>
                                    <div class="wpb_text_column wpb_content_element">
                                        <div class="wpb_wrapper">
                                            <h4>SEDE MACEIÓ AL</h4>
                                        </div>
                                    </div>
                                    <div style="margin-top: 3px; margin-bottom: 3px;" class="divider-border"></div><div style="height: 15px;" class="divider"></div>
                                    <div class="wpb_text_column wpb_content_element">
                                        <div class="wpb_wrapper">
                                            <p><strong>Endereço:</strong> Rua Joaquim Nabuco, 161 - Sala 02 - Edf. Opara<br>
                                                <strong>Bairro:</strong> Farol<br>
                                                <strong>CEP:</strong> 57051-410<br>
                                                <strong>Cidade:</strong>&nbsp;Maceió-AL
                                            <br>
                                            <strong>Telefones:</strong>&nbsp; <b>(82)3317-0778 / (82)3317-0779</b>
                                            </p>
                                        </div>
                                    </div>
                                    <div style="margin-top: 3px; margin-bottom: 3px;" class="divider-border"></div><div style="height: 15px;" class="divider"></div>
                                    <div class="wpb_text_column wpb_content_element">
                                        <div class="wpb_wrapper">
                                            <h4>ESCRITÓRIO TERESINA PI</h4>
                                        </div>
                                    </div>
                                    <div style="margin-top: 3px; margin-bottom: 3px;" class="divider-border"></div><div style="height: 15px;" class="divider"></div>
                                    <div class="wpb_text_column wpb_content_element">
                                        <div class="wpb_wrapper">
                                            <p><strong>Endereço:</strong> Rua Desembargador Pires de Castro, 722 - Edf. Opala Center - Salas 03,04<br>
                                                <strong>Bairro:</strong> Centro<br>
                                                <strong>CEP:</strong> 64000-390<br>
                                                <strong>Cidade:</strong>&nbsp;Teresina/PI
                                            <br>
                                            <strong>Telefones:</strong>&nbsp; <b> (86)3221-1939 / (86)3085-2908 </b>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3>Favor prencher o formulário</h3>
                            <hr class="divider">
                            <div class="form-group col-lg-12" id="contato-confirm" style="display:none;">
                                <h3 style="color:gren;">Muito Obrigado!, Contato enviado com sucesso.</h3>
                                </div>
                            <hr class="divider">
                            <form action="" method="post">
                                <div class="form-group col-lg-12">
                                    <label for="">Seu nome</label>
                                    <input type="text" id="form-nome" name="form-nome" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="">Email</label>
                                    <input type="text" id="form-email" name="form-email" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="">Cidade</label>
                                    <input type="text" id="form-cidade" name="form-cidade" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="">Assunto</label>
                                    <input type="text" id="form-assunto" name="form-assunto" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="">Telefone fixo</label>
                                    <input type="text" id="form-tel" name="form-tel" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="">Telefone celular</label>
                                    <input type="text" id="form-cel" name="form-cel" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="">Como gostaria de ser atendido?</label>
                                    <div class="form-input">
                                        <input type="radio" name="form-tipo-contato" id="form-tipo-contato" value="telefone" class="form-control radio-field">Email
                                    </div>
                                    <div class="form-input">
                                        <input type="radio"  name="form-tipo-contato" id="form-tipo-contato" value="telefone" class="form-control radio-field">Telefone
                                    </div>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="">Mensagem</label>
                                    <textarea type="text" id="form-msg" name="form-msg" class="form-control"></textarea>
                                </div>
                                <hr class="divider">
                                <div class="form-group col-lg-12">
                                    <button type="submit" class="btn-primary btn submit enviar-form-contact " disabled="disabled">Enviar formulário</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                    </div>
            </div>
        </div>


<script>
    $('enviar-form-contact').click( function () {

        $('enviar-form-contact').hide();

    });

</script> 
<?php include_once('footer.php'); ?>