(function(){

    $('#form-contato').submit( function (e) {
        e.preventDefault();

        var data = {};

        data.nome = $('#form-nome').val();
        data.email = $('#form-email').val();
        data.cidade = $('#form-cidade').val();
        data.assunto = $('#form-assunto').val();
        data.tel_fixo = $('#form-tel').val();
        data.tel_cel = $('#form-cel').val();

        if($('#form-tipo-contato-telefone')[0].checked){
            data.tipo_atendimento = "telefone";
        }else{
            data.tipo_atendimento = "email";
        }

        data.mensagem = $('#form-msg').val();

        $.ajax({
            type:'post',
            url:'/foo',
            data : JSON.stringify(data),
            dataType : 'json',
            contentType : 'application/json',
            success : function(result,status,xhr){
                toastr.success('Obrigado! Sua mensagem foi enviada!', 'Sucesso');
            },
            error : function(xhr,status,error){
                toastr.error('Problemas com o envio, tente novamente mais tarde.', 'Ops!');
            }
        });

    });

    $('#form-ouvidoria').submit( function (e) {
        e.preventDefault();

        var data = {};

        data.nome = $('#edtNome').val();
        data.protocolo = $('#edtProtocolo').val();
        data.assunto = $('#edtAssunto').val();
        data.email = $('#edtEmail').val();
        data.mensagem = $('#edtMensagem').val();

        $.ajax({
            type:'post',
            url:'/foo',
            data : JSON.stringify(data),
            dataType : 'json',
            contentType : 'application/json',
            success : function(result,status,xhr){
                toastr.success('Obrigado! Sua mensagem foi enviada!', 'Sucesso');
            },
            error : function(xhr,status,error){
                toastr.error('Problemas com o envio, tente novamente mais tarde.', 'Ops!');
            }
        });

    });

})();
