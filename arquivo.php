<?php

$nome = "raoni";
$sobrenome = "nascimento";
$NomeCompleto = $nome." ".$sobrenome; 
echo "<br/>";
echo $nome;
echo "<br/>";
echo $NomeCompleto;
echo "<br/>";

$nome = 1990;
$salario = 5500.99;
$bloqueado = false;

$frutas = array("abacaxi", "laranja", "manga");

echo $frutas[2];
$nascimento = new DateTime();"<br/>";
var_dump($nascimento); // Para ver o tipo de variavel
"<br/>";
$arquivo = fopen("arquivo.php", "r");
var_dump($arquivo); // verifica q o arquivo é resource do tipo string

$nul = NULL;

exit;

//unset($nome); o unset limpa a memoria apagando a variavel
if (isset ($nome)){ //O isset verifica a existencia da variavel, "se ela existir...
    echo $nome;

}



?>