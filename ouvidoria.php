<?php include_once('head.php'); ?>
        <div class="container-fluid ouvidoria-content">
            <div class="site-main-title">
                <h2>OUVIDORIA<small class="site-main-subtitle">
Bem-vindo à Ouvidoria da Uniodonto do Nordeste. Sua opinião é muito importante para nós.</small></h2>
            </div>
            <div class="container-wrap">

            <div class="container main-content">

                <div class="row">


                    <table border="0" cellpadding="0" cellspacing="0" bgcolor="#EDEDED"  class="tabSingulares" align="center" width="600" border=1>
                <tr><td align="justify">
        A Ouvidoria tem como objetivo intervir em favor dos clientes que já recorreram a Central de Atendimento, Serviço de Apoio ao Cliente (SAC) ou contato por e-mail e não se sentiram satisfeitos ou desejam rever a solução dada por estes canais.</p><p> Temos o compromisso de fomentar a melhoria contínua na prestação de serviços e assegurar a observância das normas legais e regulamentares relativas aos direitos do consumidor. </p><p>Para falar com a Ouvidoria é necessário já ter registrado a reclamação em um dos diversos canais de atendimento à disposição e possuir o número de protocolo recebido.</p></td></tr></table>
        </center>
            <div class="row ">&nbsp;</div>
                    <div class="col-lg-6" style="margin: 0 auto;float: none;">
                        <form method="post" action="../phpmailer/email.php" name="frmContato" id="form-ouvidoria">
                            <input type="hidden" name="tipoContato" value="Ouvidoria" class="form-control">
                            <div class="form-group col-lg-12">
                                <label for="">Nome</label>
                                <input required name="edtNome" type="text" id="edtNome" size="50" maxlength="150" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="">Protocolo</label>
                                <input required name="edtProtocolo" type="text" id="edtProtocolo" size="50" maxlength="150" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="">Assunto</label>
                                <input required name="edtAssunto" type="text" id="edtAssunto" size="50" maxlength="150" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="">Email</label>
                                <input required name="edtEmail" type="text" id="edtEmail" size="50" maxlength="150" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="">Mensagem</label>
                                <textarea required name="edtMensagem" id="edtMensagem" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <hr class="divider">
                            <div class="form-group col-lg-12">
                                <input class="btn-primary btn submit" type="submit" src="imagens/botao_enviar.png" name="Submit" value="Enviar">
                            </div>
                        <!--
                        <input type="hidden" name="tipoContato" value="Ouvidoria">
                            <table border="0" cellpadding="0" cellspacing="0" bgcolor="#EDEDED"  class="tabSingulares" align="center" width="600" border=1>
                                <tr><td colspan="3">Por favor preencha os campos abaixo e clique em Enviar, que entraremos em contato com você o mais rápido possível.</td></tr>
                                <tr>
                                    <td bgcolor="#EDEDED" class="textoNegritoDireita">Nome:</td>
                                    <td height="30" bgcolor="#EDEDED" class="texto">
                                        <div align="left">
                                          <input name="edtNome" type="text" id="edtNome" size="50" maxlength="150">
                                  </div></td>
                              </tr>
                              <tr><td colspan="3">&nbsp;</td></tr>
                              <tr>
                                    <td bgcolor="#EDEDED" class="textoNegritoDireita">Protocolo:</td>
                                    <td height="30" bgcolor="#EDEDED" class="texto">
                                        <div align="left">
                                          <input name="edtProtocolo" type="text" id="edtProtocolo" size="50" maxlength="150">
                                  </div></td>
                              </tr>
                              <tr><td colspan="3">&nbsp;</td></tr>
                                <tr>
                                    <td bgcolor="#EDEDED" class="textoNegritoDireita">Assunto:</td>
                                    <td height="30" bgcolor="#EDEDED" class="texto">
                                        <div align="left">
                                          <input name="edtAssunto" type="text" id="edtAssunto" size="50" maxlength="150">
                                  </div></td>
                              </tr>
                              <tr><td colspan="3">&nbsp;</td></tr>
                                <tr>
                                    <td bgcolor="#EDEDED" class="textoNegritoDireita">E-mail:</td>
                                    <td height="30" bgcolor="#EDEDED" class="texto">
                                        <div align="left">
                                          <input name="edtEmail" type="text" id="edtEmail" size="50" maxlength="150">
                                  </div></td>
                              </tr>
                              <tr><td colspan="3">&nbsp;</td></tr>
                                <tr>
                                    <td bgcolor="#EDEDED" class="textoNegritoDireita">Telefone:</td>
                                    <td height="30" bgcolor="#EDEDED" class="texto"><div align="left">
  <input name="edtFone" type="text" id="edtFone" size="30" maxlength="30">
  &nbsp;DDD + Telefone</div></td>
                                </tr>
                                <tr><td colspan="3">&nbsp;</td></tr>
                                <tr>
                                    <td valign="top" bgcolor="#EDEDED" class="textoNegritoDireita">Mensagem:</td>
                                  <td height="30" bgcolor="#EDEDED" class="texto"><div align="left">
                                      <textarea name="edtMensagem" id="edtMensagem" cols="30" rows="5"></textarea>
                                  </div></td>
                                </tr>
                                <tr><td colspan="3"></td></tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="button" src="imagens/botao_enviar.png" name="Submit" width="116" height="36" style="cursor:pointer;" onClick="enviar()" value="Enviar"></td></td>
                                </tr>
                            </table>
                            -->
                        </form>
                    </div>
                </div>
            </div>
       </div></div>
<?php include_once('footer.php'); ?>
