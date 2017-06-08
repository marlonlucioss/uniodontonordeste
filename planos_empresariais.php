<?php include_once('head.php'); ?>
<style>
.tableEmpresariais {
	width:60%;
	margin-left:20%;
	text-align:justify;
	color:#000;
}
.tituloDica {
	color:#990000;
	font-size:0.9em;
	text-align: justify;

}
.fontDaDica {
	font-size:0.7em;
	text-align: justify;
	border-bottom-color: #990000;
	border-bottom:solid;
	border-bottom-width:1px;
}
</style>
<script>
        function opcao(pOpcao) {
		  $("#tbEmpresarial").fadeOut();
		  $("#tbAdesao").fadeOut();
		  $("#"+pOpcao).show();
		}
        </script>
<div class="container-fluid planos-empresariais-content">
    <div class="site-main-title">
        <h2>Plano Empresarial Uniodonto
            <small class="site-main-subtitle">Uniodonto é o benefício que gera satisfação para seus colaboradores e dependentes.</small></h2>
    </div>
    <div class="container-fluid marketing main-menu">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <a href="javascript:opcao('tbEmpresarial')" style="color: transparent">
                <div class="marketing-item">
                    <img src="imgs/icons/empresarial.png" alt="Generic placeholder image" width="140" height="140">
                    <h2>Plano Coletivo Empresarial</h2>
                </div><!-- /.col-lg-4 -->
            </a>
            <a href="javascript:opcao('tbAdesao')" style="color: transparent">
                <div class="marketing-item">
                    <img src="imgs/icons/adesao.png" alt="Generic placeholder image" width="140" height="140">
                    <h2>Plano Coletivo por Adesão</h2>
                </div><!-- /.col-lg-4 -->
            </a>
            <a href="javascript:opcao('tbCobertura')" style="color: transparent">
                <div class="marketing-item">
                    <img src="imgs/icons/cobertura.png" alt="Generic placeholder image" width="140" height="140">
                    <h2>Cobertura</h2>
                </div><!-- /.col-lg-4 -->
            </a>
        </div><!-- /.row -->

    </div><!-- /.container -->
    <div class="container-wrap">
        <div class="container main-content">
            <div class="row">
                <!-- Banner -->
                <table width="75%" border="0" align="center" cellpadding="0" cellspacing="0" class="tableEmpresariais" id="tbEmpresarial">
                    <tr><td><center><h2>Plano Coletivo Empresarial</h2></td></tr>
                        <tr>
                            <td><p>Oferece cobertura à população delimitada e vinculada à pessoa jurídica por relação empregatícia ou estatutária. O vínculo à pessoa jurídica contratante poderá abranger ainda, desde que previsto contratualmente:<br><br>

                                    1 - os sócios da pessoa jurídica contratante;<br>
                                    2 - os administradores da pessoa jurídica contratante;<br>
                                    3 - os demitidos ou aposentados que tenham sido vinculados anteriormente à pessoa jurídica contratante, ressalvada a aplicação do disposto no caput dos artigos 30 e 31 da Lei nº 9.656, de 1998;<br>
                                    4 – os agentes políticos; <br>
                                    5 – os trabalhadores temporários; <br>
                                    6 – os estagiários e menores aprendizes; <br>
                                    7 - o grupo familiar até o terceiro grau de parentesco consangüíneo, até o segundo grau de parentesco por afinidade, cônjuge ou companheiro dos empregados e servidores públicos, bem como dos demais vínculos dos incisos anteriores. <br>
                                    8 - O ingresso do grupo familiar dependerá da participação do beneficiário titular no contrato de plano privado de assistência a saúde.
                                </p>&nbsp;</td>
                        </tr>
                </table>

                <table width="75%" border="0" align="center" cellpadding="0" cellspacing="0" class="tableEmpresariais" style="display:none" id="tbAdesao">
                    <tr><td><center><h2>Plano Coletivo Por Adesão</h2></td></tr>
                        <tr>
                            <td>Oferece cobertura à população que mantenha vínculo com as seguintes pessoas jurídicas de caráter profissional, classista ou setorial:
                                <br><br>
                                1 - conselhos profissionais e entidades de classe, nos quais seja necessário o registro para o exercício da profissão; <br>
                                2 - sindicatos, centrais sindicais e respectivas federações e confederações; <br>
                                3 - associações profissionais legalmente constituídas; <br>
                                4 - cooperativas que congreguem membros de categorias ou classes de profissões regulamentadas; <br>
                                5 - caixas de assistência e fundações de direito privado que se enquadrem nas disposições desta resolução; <br>
                                6 - entidades previstas na Lei no 7.395, de 31 de outubro de 1985, e na Lei no 7.398, de 4 de novembro de 1985; <br>
                                7 - outras pessoas jurídicas de caráter profissional, classista ou setorial não previstas nos incisos anteriores, desde que autorizadas pela Diretoria de Normas e Habilitação de operadoras – DIOPE. <br>
                                8 -  Poderá ainda aderir ao plano  coletivo por adesão, desde que previsto contratualmente, o grupo familiar do beneficiário titular até o terceiro grau de parentesco consangüíneo, até o segundo grau de parentesco por afinidade, cônjuge ou companheiro. <br>
                                9 - A adesão do grupo familiar  dependerá da participação do beneficiário titular no contrato de plano de assistência à saúde.<br>
                                10 - Caberá à operadora exigir e comprovar a legitimidade da pessoa jurídica contratante, na forma do caput e a condição de elegibilidade do beneficiário. <br>
                                11 - Caberá tanto à Administradora de Benefícios quanto à Operadora de Plano de Assistência à Saúde comprovar a legitimidade da pessoa jurídica contratante e a condição de elegibilidade do beneficiário.<br>
                                <br>
                                Art. 10. As pessoas jurídicas só poderão contratar plano coletivo por adesão quando constituídas há pelo menos um ano, exceto as previstas nos itens 1 e 2. </td>
                        </tr>
                </table>


                <table width="75%" border="0" align="center" cellpadding="0" cellspacing="0" class="tableEmpresariais" style="display:none" id="tbCobertura">
                    <tr><td><center><h2>Coberturas</h2></td></tr>
                        <tr>
                            <td>

                                <table width="830" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                                    <tr>
                                        <td height="15" colspan="3" bgcolor="#FFFFFF" ></td>
                                    </tr>
                                    <tr>
                                        <td height="295" colspan="3" bgcolor="#FFFFFF" align="center">A cobertura de nossos planos abrange as seguintes especialidades:
                                            <table width="820" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td height="15" colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td width="802" height="22" bgcolor="#990000" colspan="2"><font color="#FFFFFF"><strong>DIAGNÓSTICO</strong></font>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="8" colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td class="textoVermenho12"><table width="98%" border="1px" cellspacing="0" cellpadding="0" class="tabelaSimples" bordercolor="#8C0B42">
                                                            <tr bgcolor="#CCCCCC">
                                                                <td width="35%" height="53" align="left"><strong>Consulta Inicial</strong></td>
                                                                <td width="65%" class="texto">Consiste em anamnese, preenchimento de ficha clínica odontolegal, diagnóstico das doenças e anomalias bucais do paciente, plano de tratamento e prognóstico</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="83"><strong>Exame Histopatológico</strong></td>
                                                                <td>Consiste em exame feito de tecido obtido por biópsia incisional ou excisional. O objetivo principal do exame é a definição clara de uma patologia: neoplásica, inflamatória, infecciosa, etc. No caso de neoplasias, são fornecidas informações para o estadiamento e prognóstico</td>
                                                            </tr>
                                                        </table></td>
                                                </tr>
                                                <tr>
                                                    <td height="22" colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td width="802" height="22" bgcolor="#990000" colspan="2"><font color="#FFFFFF"><strong>URGÊNCIA / EMERGÊNCIA</strong></font></td>
                                                </tr>
                                                <tr>
                                                    <td height="8" colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td><table width="98%" border="1px" bordercolor="#8C0B42" cellspacing="0" cellpadding="0">
                                                            <tr bgcolor="#CCCCCC">
                                                                <td width="35%" height="48" align="left"><strong>Curativo e/ou sutura em caso de hemorragia bucal/labial</strong></td>
                                                                <td width="65%" class="texto">Consiste na aplicação de hemostático e/ou sutura na cavidade bucal</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="46" class="textoCentralizado"><strong>Curativo em caso de <br />
                                                                        odontalgia aguda /pulpectomia/necrose</strong></td>
                                                                <td class="texto">Consiste na abertura de câmara pulpar e remoção da polpa, obturação endodôntica ou núcleo existente</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="45" align="left"><strong>Imobilização dentária temporária</strong></td>
                                                                <td>Procedimento que visa a imobilização de elementos dentais que apresentam alto grau de mobilidade, provocado por trauma</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="35" class="textoCentralizado"><strong>Recimentação de trabalho protético</strong></td>
                                                                <td class="texto">Consiste na recolocação de trabalho protético</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="33" class="textoCentralizado"><strong>Tratamento de alveolite</strong></td>
                                                                <td class="texto">Consiste na limpeza do alvéolo dentário</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="53" class="textoCentralizado"><strong>Colagem de fragmentos</strong></td>
                                                                <td class="texto">Consiste na recolocação de partes de dente que sofreu fratura, através da utilização de material dentário adesivo</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="53" class="textoCentralizado"><strong>Incisão e drenagem de <br />
                                                                        abscesso
                                                                        extra oral</strong></td>
                                                                <td class="texto">Consiste em incisão na face e posterior drenagem do abscesso</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="53" class="textoCentralizado"><strong>Incisão e drenagem de <br />
                                                                        abscesso intraoral</strong></td>
                                                                <td class="texto">Consiste em incisão dentro da cavidade oral e posterior drenagem do abscesso</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="38"><strong>Reimplante de dente avulsionado</strong></td>
                                                                <td>Consiste na recolocação do dente no alvéolo dentário e conseqüente imobilização</td>
                                                            </tr>
                                                        </table></td>
                                                </tr>
                                                <tr>
                                                    <td height="22" colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td height="22" bgcolor="#990000" colspan="2"><font color="#FFFFFF"><strong>RADIOLOGIA</strong></font></td>
                                                </tr>

                                                <tr>
                                                    <td height="8" colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td class="textoVermenho12"><table width="98%" border="1px" bordercolor="#8C0B42" cellspacing="0" cellpadding="0" class="tabelaSimples">
                                                            <tr bgcolor="#CCCCCC">
                                                                <td width="35%" height="66" align="left"><strong>Radiologia periapical</strong></td>
                                                                <td width="65%">Realizada com película periapical inteira ou cortada ao meio, ou ainda com película infantil, mesmo que realizada em adulto. As películas podem ser de 2,0x3,0; 2,2x3,5; 2,4x4,0, ou 3,0x4,0</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="68" class="textoCentralizado"><strong>Radiografia bite-wing</strong></td>
                                                                <td class="texto">Realizada com película periapical inteira ou cortada ao meio, ou ainda com película infantil, mesmo que realizada em adulto. As películas podem ser de 3,0x2,0; 3,5x2,2; 2,4x4,0; 4,0x2,4; 4,0x3,0 ou 5,3x2,6</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="49" class="textoCentralizado"><strong>Radiologia oclusal</strong></td>
                                                                <td class="texto">Realizada com película oclusal inteira, com filme simples ou duplo. As películas podem ser 5,7x7,5cm ou 5,7x7,6 cm</td>
                                                            </tr>
                                                        </table></td>
                                                </tr>
                                                <tr>
                                                    <td height="22" colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td height="22" bgcolor="#990000" colspan="2"><font color="#FFFFFF"><strong>PREVENÇÃO EM SAÚDE BUCAL</strong></font></td>
                                                </tr>
                                                <tr>
                                                    <td height="8" colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td class="textoVermenho12"><table width="98%" border="1px" bordercolor="#8C0B42" cellspacing="0" cellpadding="0" class="tabelaSimples">
                                                            <tr bgcolor="#CCCCCC">
                                                                <td width="35%" height="160" align="left"><strong>Atividades educativas</strong></td>
                                                                <td width="65%" class="texto">Consiste em informar e motivar o beneficiário quanto à necessidade de manter a higiene bucal, devendo ser fornecida orientação quanto:<br />
                                                                    a) aos métodos de higienização e seus produtos, tais como escovas dentais, fios dentais, cremes dentais e anti-sépticos orais, tanto no que diz respeito à qualidade quanto ao uso;<br />
                                                                    b) à cárie dental;<br />
                                                                    c) à doença periodontal;<br />
                                                                    d) ao câncer bucal ; e<br />
                                                                    e) à manutenção de próteses</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="46" class="textoCentralizado"><strong>Evidenciação de placa bacteriana</strong></td>
                                                                <td class="texto">Consiste no uso de substâncias evidenciadoras, para identificação da presença de biofilme nas superfícies dentárias</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="35" class="textoCentralizado"><strong>Profilaxia - polimento coronário</strong></td>
                                                                <td class="texto">Consiste no polimento através de meios mecânicos da superfície coronária do dente</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="47" class="textoCentralizado"><strong>Fluorterapia</strong></td>
                                                                <td class="texto">Consiste na aplicação direta de produtos fluorados sobre a superfície dental, sendo realizada, somente, após profilaxia</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="81" class="textoCentralizado"><strong>Aplicação de selante</strong></td>
                                                                <td class="texto">Consiste na aplicação de produtos ionoméricos, resinas fluidas, foto ou quimicamente polimerizadas nas fóssulas e<br />
                                                                    sulcos de dentes posteriores decíduos e/ou permanentes e na face palatina de incisivos superiores permanentes</td>
                                                            </tr>
                                                        </table></td>
                                                </tr>
                                                <tr>
                                                    <td height="22" colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td height="22" bgcolor="#990000" colspan="2"><font color="#FFFFFF"><strong>DENTÍSTICA</strong></font></td>
                                                </tr>
                                                <tr>
                                                    <td height="9" colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td class="textoVermenho12"><table width="98%" border="1px" bordercolor="#8C0B42" cellspacing="0" cellpadding="0" class="tabelaSimples">
                                                            <tr bgcolor="#CCCCCC">
                                                                <td width="35%" height="49" align="center" class="textoCentralizado"><strong>Aplicação de cariostático</strong></td>
                                                                <td width="65%" class="texto">Consiste na aplicação de medicamento que visa estacionar o processo de cárie bem como a eliminação de sítios de retenção de biofilme</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="79" class="textoCentralizado"><strong>Adequação do meio bucal</strong></td>
                                                                <td class="texto">Consiste na remoção de tecido cariado e colocação de material obturador provisório; e/ou remoção/diminuição de<br />
                                                                    excessos/arestas ou rugosidades em restaurações/próteses fixas, visando eliminação de sítios de retenção de biofilme</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="47" class="textoCentralizado"><strong>Restauração de 1 (uma) face</strong></td>
                                                                <td class="texto">Consiste em utilizar manobras, para recuperar as funções de um dente que tenha sido afetado por cárie, traumatismo ou afecção estrutural, em uma face</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="47" class="textoCentralizado"><strong>Restauração de 2 (duas) faces</strong></td>
                                                                <td class="texto">Consiste em utilizar manobras, para recuperar as funções de um dente que tenha sido afetado por cárie, traumatismo ou afecção estrutural, em duas faces</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="47" class="textoCentralizado"><strong>Restauração de 3 (três) faces</strong></td>
                                                                <td class="texto">Consiste em utilizar manobras, para recuperar as funções de um dente que tenha sido afetado por cárie, traumatismo ou afecção estrutural, em três faces</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="47" class="textoCentralizado"><strong>Restauração de 4 (quatro) faces <br />
                                                                        ou faceta direta</strong></td>
                                                                <td class="texto">Consiste em utilizar manobras, para recuperar as funções de um dente que tenha sido afetado por cárie, traumatismo ou afecção estrutural, em quatro faces</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="47" class="textoCentralizado"><strong>Restauração de ângulo</strong></td>
                                                                <td class="texto">Consiste em utilizar manobras, para recuperar as funções de um dente que tenha sido afetado por cárie, traumatismo ou afecção estrutural, em ângulo</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="47" class="textoCentralizado"><strong>Restauração a pino</strong></td>
                                                                <td class="texto">Consiste em fixar pinos, metálicos ou não, à coroa remanescente para que se possa confeccionar uma restauração com maior resistência e retenção</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="47" class="textoCentralizado"><strong>Restauração de superfície radicular</strong></td>
                                                                <td class="texto">Consiste em utilizar manobras, para recuperar as funções de um dente que tenha sido afetado por cárie, traumatismo ou afecção estrutural, na raiz</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="61" class="textoCentralizado"><strong>Núcleo de preenchimento</strong></td>
                                                                <td class="texto">Consiste na reconstrução de dentes seriamente comprometidos pelo processo carioso, antes da confecção de uma restauração definitiva, não envolvendo câmara radicular</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="47" class="textoCentralizado"><strong>Ajuste oclusal</strong></td>
                                                                <td class="texto">Consiste em realizar pequenos desgastes seletivos visando a obtenção de harmonia oclusal</td>
                                                            </tr>
                                                        </table></td>
                                                </tr>
                                                <tr>
                                                    <td height="22" colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td height="22" bgcolor="#990000" colspan="2"><font color="#FFFFFF"><strong>PERIODONTIA</strong></font></td>
                                                </tr>

                                                <tr>
                                                    <td height="9" colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td class="textoVermenho12"><table width="98%" border="1px" bordercolor="#8C0B42" cellspacing="0" cellpadding="0" class="tabelaSimples">
                                                            <tr bgcolor="#CCCCCC">
                                                                <td width="35%" height="65" align="center" class="textoCentralizado"><strong>Raspagem supra-gengival<br />
                                                                        e polimento coronário</strong></td>
                                                                <td width="65%" class="texto">Consiste na remoção de induto e/ou cálculo supra-gengival seguido de alisamento e polimento coronário (ausência de bolsa periodontal – sulco gengival até 4 mm de profundidade)</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="64" class="textoCentralizado"><strong>Raspagem sub-gengival e <br />
                                                                        alisamento
                                                                        radicular
                                                                        /curetagem <br />
                                                                        de bolsa periodonta</strong></td>
                                                                <td class="texto">Consiste na remoção de induto e/ou cálculo sub-gengival, seguida de alisamento radicular (presença de bolsa periodontal acima de 4 mm de profundidade)</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="47" class="textoCentralizado"><strong>Imobilização dentária temporária ou<br />
                                                                        permanente</strong></td>
                                                                <td class="texto">Consiste na imobilização de elementos dentais que apresentam alto grau de mobilidade, provocado por doença periodontal</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="69" class="textoCentralizado"><strong>Gengivectomia       		          /gengivoplastia</strong></td>
                                                                <td class="texto">Procedimento cirúrgico que consiste na redução de bolsas periodontais supra-ósseas (até 4 mm) ou para refazer contornos gengivais anormais tais como crateras e hiperplasias gengivais</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="65" class="textoCentralizado"><strong>Aumento de coroa clínica</strong></td>
                                                                <td class="texto">Intervenção cirúrgica para recuperação do espaço biológico (aproximadamente 3 mm a partir da crista óssea alveolar até a borda do dente) necessário do dente, para posterior tratamento</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="47" class="textoCentralizado"><strong>Cunha distal</strong></td>
                                                                <td class="texto">Tratamento cirúrgico de bolsas periodontais com defeito ósseo-angular na superfície distal de molares que dispõe de gengiva inserida reduzida</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="66" class="textoCentralizado"><strong>Cirurgia periodontal a retalho</strong></td>
                                                                <td class="texto">Procedimento cirúrgico que consiste na redução de bolsas periodontais infra-ósseas (acima de 4 mm) através de retalho mucoperiosteal e, subseqüente debridamento da superfície radicular e correção de irregularidades das cristas ósseas</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="62" class="textoCentralizado"><strong>Sepultamento radicular</strong></td>
                                                                <td class="texto">Procedimento cirúrgico que consiste em retalho mucoperiosteal e nivelamento da raiz residual (com tratamento endodôntico e sem lesão periapical) à crista óssea e subseqüente reposicionamento do retalho</td>
                                                            </tr>
                                                        </table></td>
                                                </tr>
                                                <tr>
                                                    <td height="22" colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td height="22" bgcolor="#990000" colspan="2" align="left"><font color="#FFFFFF"><strong>ENDODONTIA</strong></font></td>
                                                </tr>
                                                <tr>
                                                    <td height="8" colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td class="textoVermenho12"><table width="98%" border="1px" bordercolor="#8C0B42" cellspacing="0" cellpadding="0" class="tabelaSimples">
                                                            <tr bgcolor="#CCCCCC">
                                                                <td width="35%" height="82" align="center" class="textoCentralizado"><strong>Capeamento pulpar direto <br />
                                                                        – excluindo restauração final</strong></td>
                                                                <td width="65%" class="texto">Consiste em utilizar manobras para recuperar um dente que tenha sido afetado por cárie ou fratura profunda no caso de exposição pulpar, através da utilização de produtos específicos para proteger a polpa dentária e na tentativa de se evitar o tratamento endodôntico</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="35" class="textoCentralizado"><strong>Pulpotomia</strong></td>
                                                                <td class="texto">Consiste em remover a polpa coronária de dentes decíduos e/ou permanentes</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="47" class="textoCentralizado"><strong>Remoção de núcleo intrarradicular<br />
                                                                        /corpo estranho</strong></td>
                                                                <td class="texto">Consiste em retirar o núcleo e/ou corpo estranho da cavidade intrarradicular, com finalidade endodôntica ou protética</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="69" class="textoCentralizado"><strong>Tratamento endodôntico em dentes permanentes com 01 (um) conduto</strong></td>
                                                                <td class="texto">Consiste em realizar manobra em dentes com um conduto radicular, realizando a abertura da câmara pulpar, remoção da polpa, preparo químico mecânico e preenchimento do conduto com material obturador</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="76" class="textoCentralizado"><strong>Tratamento endodôntico em dentes permanentes com 02 (dois) condutos</strong></td>
                                                                <td class="texto">Consiste em realizar manobra em dentes com dois condutos radiculares independente do número de raízes, realizando a abertura da câmara pulpar, remoção da polpa, preparo químico mecânico e preenchimento dos condutos com material obturador</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="64" class="textoCentralizado"><strong>Tratamento endodôntico em dentes permanentes com 03 (três) condutos</strong></td>
                                                                <td class="texto">Consiste em realizar manobra em dentes com três condutos radiculares independente do número de raízes, realizando a abertura da câmara pulpar, remoção da polpa, preparo químico mecânico e preenchimento dos condutos com material obturador</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="80" class="textoCentralizado"><strong>Tratamento endodôntico <br />
                                                                        em dentes permanentes <br />
                                                                        com 04 (quatro) condutos ou mais</strong></td>
                                                                <td class="texto">Consiste em realizar manobra em dentes com quatro ou mais condutos radiculares independente do número de raízes, realizando a abertura da câmara pulpar, remoção da polpa, preparo químico mecânico e preenchimento dos condutos com material obturador</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="63" class="textoCentralizado"><strong>Retratamento endodôntico <br />
                                                                        de dentes incisivos, caninos, <br />
                                                                        pré-molares e molares</strong></td>
                                                                <td class="texto">Consiste na remoção do material obturador do conduto radicular, preparo químico e mecânico quando indicado e seu preenchimento com material apropriado em dentes incisivos, caninos, pré-molares e molares</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="47" class="textoCentralizado"><strong>Tratamento endodôntico <br />
                                                                        em dentes decíduos</strong></td>
                                                                <td class="texto">Consiste em remover a polpa coronária e radicular e preencher a câmara e condutos com material obturador</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="47" class="textoCentralizado"><strong>Tratamento endodôntico <br />
                                                                        em dente com rizogênese incompleta</strong></td>
                                                                <td class="texto">Consiste no tratamento endodôntico específico com objetivo de fechamento do forame apical por um tecido duro mineralizado (apicificação e apicegênese)</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="47" class="textoCentralizado"><strong>Tratamento de perfuração radicular</strong></td>
                                                                <td class="texto">Consiste no tratamento medicamentoso para selamento de perfuração radicular, por via endodôntica</td>
                                                            </tr>
                                                        </table></td>
                                                </tr>
                                                <tr>
                                                    <td height="22" colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td height="22" bgcolor="#990000" colspan="2"><font color="#FFFFFF"><strong>CIRURGIA</strong></font></td>
                                                </tr>
                                                <tr>
                                                    <td height="8" colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td class="textoVermenho12"><table width="98%" border="1px" bordercolor="#8C0B42" cellspacing="0" cellpadding="0" class="tabelaSimples">
                                                            <tr bgcolor="#CCCCCC">
                                                                <td width="35%" height="48" align="center" class="textoCentralizado"><strong>Alveoloplastia</strong></td>
                                                                <td width="65%" class="texto">Consiste em corrigir cirurgicamente os alvéolos dentários após a realização de extrações múltiplas</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="64" class="textoCentralizado"><strong>Apicectomia unirradicular</strong></td>
                                                                <td class="texto">Consiste em remover cirurgicamente a zona patológica periapical, conservando o dente ou dentes que lhe deram origem, seguida da ressecção do ápice radicular em uma raiz</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="59" class="textoCentralizado"><strong>Apicectomia birradicular</strong></td>
                                                                <td class="texto">Consiste em remover cirurgicamente a zona patológica periapical, conservando o dente ou dentes que lhe deram origem, seguida da ressecção do ápice radicular em duas raízes</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="63" class="textoCentralizado"><strong>Apicectomia trirradicular</strong></td>
                                                                <td class="texto">Consiste em remover cirurgicamente a zona patológica periapical conservando o dente ou dentes que lhe deram origem, seguida da ressecção do ápice radicular em três raízes</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="62" class="textoCentralizado"><strong>Apicectomia unirradicular <br />
                                                                        com obturação retrógrada</strong></td>
                                                                <td class="texto">Consiste em remover cirurgicamente a zona patológica periapical, conservando o dente ou dentes que lhe deram origem, seguida de ressecção do ápice radicular e ainda da obturação do forame apical em uma raiz</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="63" class="textoCentralizado"><strong>Apicectomia birradicular <br />
                                                                        com obturação retrógrada</strong></td>
                                                                <td class="texto">Consiste em remover cirurgicamente a zona patológica periapical, conservando o dente ou dentes que lhe deram origem, seguida de ressecção do ápice radicular e ainda da obturação do forame apical em duas raízes</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="64" class="textoCentralizado"><strong>Apicectomia trirradicular <br />
                                                                        com obturação retrógrada</strong></td>
                                                                <td class="texto">Consiste em remover cirurgicamente a zona obturação retrógrada patológica periapical, conservando o dente ou dentes que lhe deram origem, seguida de ressecção do ápice radicular e ainda da obturação do forame apical em três raízes</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="43" class="textoCentralizado"><strong>Biópsia</strong></td>
                                                                <td class="texto">Consiste em remover cirurgicamente um fragmento de tecido, mole e/ou duro alterado, para fins de exame anatomopatológico</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="44" class="textoCentralizado"><strong>Cirurgia de tórus unilateral</strong></td>
                                                                <td class="texto">Consiste em remover cirurgicamente algumas formas de exostoses ósseas unilaterais, na região de mandíbula e/ou maxila</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="47" class="textoCentralizado"><strong>Cirurgia de tórus bilateral</strong></td>
                                                                <td class="texto">Consiste em remover cirurgicamente algumas formas de exostoses ósseas bilaterais, na região de mandíbula e/ou maxila</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="44" class="textoCentralizado"><strong>Correção de bridas musculares</strong></td>
                                                                <td class="texto">Consiste em realizar incisão cirúrgica para correção do posicionamento da musculatura existente entre a mucosa da bochecha e a borda da gengiva</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="47" class="textoCentralizado"><strong>Excisão de mucocele</strong></td>
                                                                <td class="texto">Consiste em remover cirurgicamente lesão dos tecidos moles (principalmente lábios), causada por retenção de saliva devido à obstrução de glândulas salivares</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="59" class="textoCentralizado"><strong>Excisão de rânula</strong></td>
                                                                <td class="texto">Consiste em remover cirurgicamente um tipo de cisto de retenção que ocorre especificamente no assoalho da boca, associado aos ductos da glândula submandibular ou sublingual</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="47" class="textoCentralizado"><strong>Exodontia a retalho</strong></td>
                                                                <td class="texto">Consiste em realizar extração dentária de dentes normalmente implantados que exijam a abertura cirúrgica da gengiva</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="47" class="textoCentralizado"><strong>Exodontia de raiz residual</strong></td>
                                                                <td class="texto">Consiste em realizar extração dentária da porção radicular de dentes que já não possuem a coroa clínica</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="30" class="textoCentralizado"><strong>Exodontia simples</strong></td>
                                                                <td class="texto">Consiste em realizar extração dentária de dentes normalmente implantados</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="32" class="textoCentralizado"><strong>Exodontia de dente decíduo</strong></td>
                                                                <td class="texto">Consiste em realizar extração dentária de dentes decíduo</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="47" class="textoCentralizado"><strong>Redução cruenta <br />
                                                                        (fratura alvéolo dentária)</strong></td>
                                                                <td class="texto">Consiste em reduzir o alvéolo por meio de técnica cirúrgica com exposição dos fragmentos ósseos fraturados, com contenção por meio rígido (cirurgia aberta)</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="47" class="textoCentralizado"><strong>Redução incruenta <br />
                                                                        (fratura alvéolo dentária)</strong></td>
                                                                <td class="texto">Consiste em reduzir o alvéolo por meio de manobra bidigital, sem exposição dos fragmentos ósseos fraturados (cirurgia fechada)</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="47" class="textoCentralizado"><strong>Frenectomia labial</strong></td>
                                                                <td class="texto">Consiste em realizar ressecção cirúrgica da hipertrofia do tecido fibro-mucoso presente na base do lábio, denominado hipertrofia de freio labial</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="47" class="textoCentralizado"><strong>Frenectomia lingual</strong></td>
                                                                <td class="texto">Consiste em realizar ressecção cirúrgica da hipertrofia do tecido fibro-mucoso presente na base da língua, denominado hipertrofia de freio lingual</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="47" class="textoCentralizado"><strong>Remoção de dentes retidos <br />
                                                                        (inclusos ou impactados)</strong></td>
                                                                <td class="texto">Consiste em remover dentes cuja parte coronária está coberta por mucosa ou quando a totalidade do dente encontra-se no interior da porção óssea</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="60" class="textoCentralizado"><strong>Sulcoplastia</strong></td>
                                                                <td class="texto">Consiste em realizar uma incisão cirúrgica para refazer o sulco existente entre a mucosa interna do lábio e a gengiva com a finalidade de aumentar a área chapeável para próteses</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="47" class="textoCentralizado"><strong>Ulectomia</strong></td>
                                                                <td class="texto">Consiste em remover cirurgicamente a porção superior de um processo hipertrófico muco-gengival que normalmente envolve dentes não erupcionados</td>
                                                            </tr>
                                                            <tr bgcolor="#CCCCCC">
                                                                <td height="47" class="textoCentralizado"><strong>Ulotomia</strong></td>
                                                                <td class="texto">Consiste em realizar incisão do capuz mucoso para que o dente permanente possa erupcionar</td>
                                                            </tr>
                                                            <tr>
                                                                <td height="112" class="textoCentralizado"><strong>Hemissecção com ou sem<br />
                                                                        amputação radicular</strong></td>
                                                                <td class="texto">Consiste em realizar a separação da estrutura dentária, mediante corte, tendo por finalidade:<br />
                                                                    1- a manutenção da parte sadia e a remoção da parte comprometida;<br />
                                                                    2- o tratamento da área periodontal afetada com a manutenção das estruturas dentárias seccionadas;<br />
                                                                    pode ainda ser usada para facilitar a extração do elemento dentário</td>
                                                            </tr>
                                                        </table></td>
                                                </tr>
                                                <tr>
                                                    <td height="15" colspan="2"></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="2" colspan="3" bgcolor="#8C0B42" class="texto"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                </table>
            </div>
        </div>

    </div>
</div>


<?php include_once('footer.php'); ?>
