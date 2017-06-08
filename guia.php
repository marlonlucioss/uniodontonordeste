<?php include_once('head.php'); ?>
<div class="container-fluid guia-content">
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
                             <option value="http://www.uniodontoaracaju.com.br/paginas.php?chave=f65ff7e4815913f8fe3bcabefbbb4384&amp;pag=encontredent2&amp;cidade=ARACAJU&amp;estado=SE">UNIODONTO ARACAJU</option>
                             <option value="http://uniodontoarapiraca.no-ip.info:8082/guiaOdontologico/guia_odontologico_new.php">UNIODONTO ARAPIRACA</option>
                             <option value="http://uniodontocaruaru.linkpc.net:8081/guiaOdontologico/guia_odontologico_new.php">UNIODONTO CARUARU</option>
                             <option value="http://uniodontofeira.linkpc.net/guiaOdontologico/guia_odontologico_new.php">UNIODONTO FEIRA DE SANTANA</option>
                             <option value="http://www.uniodonto-ce.com.br/site.jsp?pagina=dentista.jsp">UNIODONTO FORTALEZA</option>
                             <option value="http://uniodontogaranhuns.linkpc.net:8081/guiaOdontologico/guia_odontologico_new.php">UNIODONTO GARANHUNS</option>
                             <option value="http://www.uniodontoilheus.com.br/dentistas.php">UNIODONTO ILHÉUS</option>
                             <option value="http://uniodontoitabuna.linkpc.net:8081/guiaOdontologico/guia_odontologico_new.php">UNIODONTO ITABUNA</option>
                             <option value="http://www.uniodontojp.com.br/index.php">UNIODONTO JOÃO PESSOA</option>
                             <option value="http://www.uniodontomaceio.com.br/site/clientes/aa/guiaOdontologico/guia_odontologico_new.php">UNIODONTO MACEIÓ</option>
                             <option value="http://www.uniodontomossoro.com.br/dentistas.php">UNIODONTO MOSSORÓ</option>
                             <option value="http://uniodontopauloafonso.no-ip.biz:8081/guiaOdontologico/guia_odontologico_new.php">UNIODONTO PAULO AFONSO</option>
                             <option value="guia_odontologico_new.php">UNIODONTO PIAUÍ</option>
                             <option value="http://187.115.154.22:8081/site/guiaOdontologico/guia_odontologico_new.php">UNIODONTO RECIFE</option>
                             <option value="http://www.uniodontorn.com.br/modules/conteudo/content/index.php?id=2">UNIODONTO RIO GRANDE DO NORTE</option>
                             <option value="http://www.uniodontosalvador.com.br/novosite/cooperados/">UNIODONTO SALVADOR</option>
                             <option value="http://uniodontoserido.ddns.net:8081/guiaOdontologico/guia_odontologico_new.php">UNIODONTO SERIDÓ</option>
                         </select>
                     </div>
                 </div>
             </div>
            <section class="iframe-content">
                <iframe height="850px" src="https://www2.uniodontomaceio.com.br/uniodontonordeste/site/guia_odonto.php" width="100%" frameborder="0" scrolling="auto" style="opacity: 1; visibility: visible;"></iframe>
            </section>
        </div>
    </div>
</div>
<?php include_once('footer.php'); ?>
