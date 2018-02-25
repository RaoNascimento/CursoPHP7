<?php

function ola(){

    //echo "Olá mundo <br>";
    return "Olá mundo <br>";

}
  echo ola(); // com return vc tem que mostrar a função de resposta

function salario(){

    return 946.00;
}

echo "jose recebeu 3 salarios ". salario()*3;


function salario1($nome){
$nome = "Paulo $nome";

    return $nome;
}
echo salario1("Antonio");


?>