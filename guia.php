<?php include_once('head.php'); ?>
<script>
    function opcao(pOpcao) {

        switch (pOpcao){
            case 'content_nacional':
                if ( $("#content_nacional").css('display') == 'none' ){
                    $("#content_local").hide();
                    $("#content_nacional").fadeIn();
                }
                break;
            case 'content_local':
                if ( $("#content_local").css('display') == 'none' ){
                    $("#content_nacional").hide();
                    $("#content_local").fadeIn();
                }
                break;
        }
    }
</script>
<div class="container-fluid guia-content">
    <div class="row">
     <script>
            function redireciona(endereco) {
                if (endereco == '') {
                    alert('Favor selecionar uma singular!');
                    return false;
                } else {
                    if (endereco == 'N') {
                        alert('A singular selecionada ainda não possui guia odontológico on-line');
                        return false;
                    } else {
                        window.open(endereco);
                    }
                }
            }

        </script>

    <div class="site-main-title">
        <h2>Guia Odontológico <small class="site-main-subtitle">Encontre abaixo um profissional Uniodonto</small></h2>
    </div>
    <div class="row">
         <div class="container">
             <div class="row guia-body">
                 <div class="col-lg-6 col-sm-12 guia-column">
                     <img src="imgs/computer_work.jpg" style="border-radius: 25px;  float: left;"  width="400px" alt="">
                 </div>
                 <div class="col-lg-6 col-sm-12 guia-column">
                     <p>Para consultar o Guia Odontológico, é muito simples: basta escolher a singular e você sejá redirecionado ao Guia Odontológico da singular desejada.</p>
                     <div class="form-group">
                         <label>Seelcione sua cidade</label>
                         <select name="lstSingular" id="lstSingular" onchange="redireciona(this.value)" class="form-control">
                             <option value="" selected="selected">-- SELECIONE --</option>
                             <option value="https://www.uniodonto.coop.br/encontre-um-dentista-uniodonto/">UNIODONTO ARACAJU</option>
                             <option value="https://www.uniodonto.coop.br/encontre-um-dentista-uniodonto/">UNIODONTO ARAPIRACA</option>
                             <option value="http://www.praticasti.com.br/uniods/guiaOdontologico/guia_odontologico_new.php?codigoUniodonto=088">UNIODONTO CARUARU</option>
                             <option value="http://uniodontofeira.linkpc.net/guiaOdontologico/guia_odontologico_new.php">UNIODONTO FEIRA DE SANTANA</option>
                             <option value="http://www.uniodonto-ce.com.br/pages/encontreUmDentista.jsp">UNIODONTO FORTALEZA</option>
                             <option value="http://uniodontogaranhuns.linkpc.net:8081/guiaOdontologico/guia_odontologico_new.php">UNIODONTO GARANHUNS</option>
                             <option value="http://199.168.189.106/BuscaCooperado/Default.aspx?qr=wlo4wKs0Z14%3d&page=EncontreSeuDentista">UNIODONTO ILHÉUS</option>
                             <option value="http://uniodontoitabuna.linkpc.net:8081/guiaOdontologico/guia_odontologico_new.php">UNIODONTO ITABUNA</option>
                             <option value="https://www.uniodontojp.com.br/consulta/">UNIODONTO JOÃO PESSOA</option>
                             <option value="http://www.uniodontomaceio.com.br/site/clientes/aa/guiaOdontologico/guia_odontologico_new.php">UNIODONTO MACEIÓ</option>
                             <option value="http://199.168.189.106/BuscaCooperado/EncontreSeuDentista.aspx/?qr=QVNX2hu/Luk=">UNIODONTO MOSSORÓ</option>
                             <option value="http://www.uniodontopauloafonso.com.br/redes.html">UNIODONTO PAULO AFONSO</option>
                             <option value="https://www.uniodonto.coop.br/singulares/uniodonto-piaui/">UNIODONTO PIAUÍ</option>
                             <option value="http://191.34.249.17/site/guiaOdontologico/guia_odontologico_new.php">UNIODONTO RECIFE</option>
                             <option value="http://www.uniodontorn.com.br/guia">UNIODONTO RIO GRANDE DO NORTE</option>
                             <option value="http://www.uniodontosalvador.com.br/encontre-um-dentista/">UNIODONTO SALVADOR</option>
                             <option value="http://www.praticasti.com.br/uniods/guiaOdontologico/guia_odontologico_new.php?codigoUniodonto=112">UNIODONTO SERIDÓ</option>
                         </select>
                     </div>
                 </div>
             </div>
        </div>
        <div class="container-fluid marketing main-menu" style="margin-top: 50px;">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <a href="javascript:opcao('content_local')" style="color: transparent">
                    <div class="marketing-item">
                        <img src="imgs/icons/adesao.png" alt="Generic placeholder image" width="140" height="140">
                        <h2>Guia Local</h2>
                    </div><!-- /.col-lg-4 -->
                </a>
                <a href="javascript:opcao('content_nacional')" style="color: transparent">
                    <div class="marketing-item">
                        <img src="imgs/icons/cobertura.png" alt="Generic placeholder image" width="140" height="140">
                        <h2>Guia Nacional</h2>
                    </div><!-- /.col-lg-4 -->
                </a>
            </div><!-- /.row -->

        </div><!-- /.container -->
        <div class="container-wrap">
            <div class="container main-content">
                <div class="row">
                    <!-- Banner -->
                    <div class="tableEmpresariais" id="content_nacional" style="display:none">
                        <section class="iframe-content">
                            <iframe height="850px" src="http://www2.uniodonto.com.br/Institucional/BuscaDentista.aspx?singular=038" width="100%" frameborder="0" scrolling="no" style="opacity: 1; visibility: visible;"></iframe>
                        </section>
                    </div>
                    <div class="tableEmpresariais" id="content_local" style="display:none">
                        <section class="iframe-content">
                            <iframe height="850px" src="https://www2.uniodontomaceio.com.br/uniodontonordeste/site/guia_odonto.php" width="100%" frameborder="0" scrolling="no" style="opacity: 1; visibility: visible;"></iframe>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<?php include_once('footer.php'); ?>
