<?php
//include "includeeRequire.php";// tenta funcionar ainda q o arquivo nao exista --include possui recurso de include paths
//permite include dinamico -pessima prática
//require "includeeRequire.php"; //O require obriga q o arquivo exista e funcionando perfeito - Se nao for para usar recurso de paths melhor usar require
//mais interessante
require_once "includeeRequire.php"; //nnao chama outra vez
//melhor pois chama so uma vez e garante q o arquivo exista
$resultado = somar(10,5);

echo $resultado;


?>