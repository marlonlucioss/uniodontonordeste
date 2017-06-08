<?php

PutEnv("NLS_LANG=PORTUGUESE_BRAZIL.WE8ISO8859P1");

//$ora_conecta = odbc_connect("uniodonto", "web", "web");

$conexao = @ocilogon('web','web',"federaca","AL32UTF8");



if ($conexao) {

//	print "Conex�o realizada com sucesso!";

  }

else {

	print "Conex�o falhou!";

	//odbc_errormsg();

}



//odbc_close($ora_conecta);

?>