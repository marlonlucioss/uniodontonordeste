<?php
include_once('head.php');
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
                            
                            <hr class="divider">
                            <form action="" method="post" id="form-contato">
                                <div class="form-group col-lg-12">
                                    <label for="">Seu nome</label>
                                    <input required type="text" id="form-nome" name="form-nome" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="">Email</label>
                                    <input required type="text" id="form-email" name="form-email" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="">Cidade</label>
                                    <input required type="text" id="form-cidade" name="form-cidade" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="">Assunto</label>
                                    <input required type="text" id="form-assunto" name="form-assunto" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="">Telefone fixo</label>
                                    <input required type="text" id="form-tel" name="form-tel" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="">Telefone celular</label>
                                    <input required type="text" id="form-cel" name="form-cel" class="form-control">
                                </div>
                                <div class="form-group col-lg-12" style="display: none">
                                    <label for="">Como gostaria de ser atendido?</label>
                                    <div class="form-input">
                                        <input required type="radio" name="form-tipo-contato" id="form-tipo-contato-telefone" value="telefone" class="form-control radio-field form-tipo-contato">Telefone
                                    </div>
                                    <div class="form-input">
                                        <input required type="radio"  name="form-tipo-contato" id="form-tipo-contato-email" value="email" class="form-control radio-field form-tipo-contato">Email
                                    </div>  
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="">Mensagem</label>
                                    <textarea required type="text" id="form-msg" name="form-msg" class="form-control"></textarea>
                                </div>
                                <hr class="divider">
                                <div class="form-group col-lg-12" id="contato-confirm" style="display:none;">
                                    <h3 style="color:green;">Muito Obrigado!, Contato enviado com sucesso.</h3>
                                </div>
                                <div class="form-group col-lg-12" id="msgerrorcontact" style="display:none;">
                                    <h3 style="color:red;">Ops!, Error ao tentar Enviar.</h3>
                                </div>
                                <p id="spin" style="display: none"><img src="imgs/carregando.gif" width="100px" /> </p>
                                <p class="msg-error-consulta" style="color:red;" id="msg-error-consulta" style="display:none;"></p>
                                <div class="form-group col-lg-12">
                                    <button type="button" class="btn-primary btn  enviar-form-contact ">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                    </div>
            </div>
        </div>
<script>

                            
        $('.enviar-form-contact').click( function () {
            
            
            if($('#form-nome').val() == null || $('#form-nome').val() == '') {
                $('.msg-error-consulta').html('Favor preencher o nome!');

                setTimeout(function () {
                    $('.msg-error-consulta').html('');
                }, 3000);

                $('#form-nome').focus();
                return false;
            }
            if($('#form-cidade').val() == null || $('#form-cidade').val() == '') {
                $('.msg-error-consulta').html('Favor preencher a cidade!');

                setTimeout(function () {
                    $('.msg-error-consulta').html('');
                }, 3000);

                $('#form-cidade').focus();
                return false;
            }
            if($('#form-msg').val() == null || $('#form-msg').val() == '') {
                $('.msg-error-consulta').html('Favor preencher a mensagem!');

                setTimeout(function () {
                    $('.msg-error-consulta').html('');
                }, 3000);

                $('#form-msg').focus();
                return false;
            }
            
            $('.enviar-form-contact').hide();
            $('#contato-confirm').hide();
            $('#msgerrorcontact').hide();
                        
            $('#spin').show();
            var data = {
                        "form-nome": $('#form-nome').val(),
                        "form-email": $('#form-email').val(),
                        "form-cidade": $('#form-cidade').val(),
                        "form-assunto": $('#form-assunto').val(),
                        "form-tel": $('#form-tel').val(),
                        "form-cel": $('#form-cel').val(),
                        "form-msg": $('#form-msg').val(),
                        "acao": 'enviar-contato'
                    };
                    
            $.ajax({
                url : "enviarEmail.php",
                type: "POST",
                data: data,
                success : function(data) {
                    if(data == "S" ) {
                        $('#form-contato').each (function(){
                            this.reset();
                        });

                        $('#contato-confirm').show();
                        $('#spin').hide();
                        $('#msgerrorcontact').hide();
                        $('.enviar-form-contact').show();
                       
                    }else if(data == "N") {
                        $('#spin').hide();
                        $('#contato-confirm').hide();
                        $('#msgerrorcontact').show();
                        $('.enviar-form-contact').show();
                    }
                },
                error: function() {
                    $('#spin').hide();
                    $('#contato-confirm').hide();
                    $('#msgerrorcontact').show();
                     $('.enviar-form-contact').hide();
                }
            });
      });
  </script>
<?php include_once('footer.php'); ?>
