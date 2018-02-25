<?php
$nome = "hcode";
$nome2 = 'treinamentos';

var_dump($nome);
var_dump($nome2);

echo "ABC  $nome"; //Na aspas duplas ele verifica se há uma variavel e mostra o valor
echo "<br/>";
echo 'ABC $nome'; // Na aspas simples entende tudo como texto
echo "<br/>";

//Funções nativas p/ String

$nome = "joao Rangel";
$nome = strtoupper($nome); // Função q transforma todo texto em maiusculo
echo $nome;
echo "<br/>";
$nome = strtolower($nome); //converte p/ minusulo
echo $nome;
echo "<br/>";

 echo ucwords($nome); // Deixa so a primeira letra maiuscula
 echo "<br/>";
 $empresa = "hcode";
 $empresa = str_replace("o", "0", $empresa); // substitui o caractere por outro da sua escolha
 echo $empresa;

 $frase = "O galo foi eliminado pelo Jorge wilsterman";
 $q = strpos($frase, "Jorg"); //Procura a string na posição pedida
 echo "<br/>";
 var_dump($q);
 $texto = substr($frase, 29); //Apartir de qual posiçao deve procurar o q vc deseja
 var_dump($texto);
 echo "<br/>";
 $texto2 =substr($frase, $q + strlen($texto), strlen($frase));
 echo "<br/>";
 echo $texto2;
 echo strlen($texto2);



?>