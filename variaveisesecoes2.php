<?php
/*session_start(); // se nao executar o primeiro da erro pq deve se iniciar a sessão primeiro
//toda pag deve ter o session start, pode ser auto start mas n eh padrao
// o arquivo de configuração config.php, deve conter o session_start
*/

require_once("config.php");

echo session_id(); // mostra o id de cada sessao criada

session_regenerate_id();// gera novas ids

echo $_SESSION['nome'];

session_unset($_SESSION)['nome']; // se nao colocar nada ele apaga todas variaveis da sessao
//session_destroy($_SESSION)['nome']; // essa função reseta f5, na sua navegação

//obter informações da sessao

?>