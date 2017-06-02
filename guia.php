<?php include_once('head.php'); ?>
<div class="container-fluid">
    <div class="site-main-title">
        <h2>Guia Odontológico</h2>
    </div>
    <div class="row">
         <div class="container">
        <h1 style="text-align: center; font-weight: bold; padding-top: 50px; margin-bottom: 100px; ">Guia Odontológico</h1>
            <section class="6u">
                <div class="box post"  >

                    <div class="inner">
                        <img src="imgs/computer_work.jpg" style="border-radius: 25px;  float: left;"  width="400px" alt="">
                        <h3 style=" float:left; padding:20px;   ">Encontre o seu dentista</h3>


                    </div>
                    <div>
                        <p>Para consultar o Guia Odontológico, é muito simples: basta escolher a singular e você sejá redirecionado ao Guia Odontológico da singular desejada.</p>
                    </div>
                </div>
            </section>
            <section class="6u">
                <div class="box post">
                    <a href="#" class="image left"><img src="images/mapa_nordeste2.gif" alt=""></a>
                    <div class="inner">
                        <h3>Seelcione sua cidade</h3>
                        <p><select name="lstSingular" id="lstSingular" onchange="redireciona(this.value)">
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
                            </select></p>
                    </div>
                </div>
            </section>
        <section>
            <iframe src="https://www2.uniodontomaceio.com.br/uniodontonordeste/site/guia_odonto.php" width="100%" height="1400" frameborder="0" scrolling="auto" style="opacity: 1; visibility: visible;"></iframe>
        </section>
        </div>
    </div>
</div>
<?php include_once('footer.php'); ?>
