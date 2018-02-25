<?php

$nome = "Raoni";

function teste(){
    global $nome; // global - faz com que a variavel declarada fora seja reconhecida dentro da func
    echo $nome;
}

function teste2(){
    echo $nome = "Agora no teste 2";
}
teste(); // imprime func
teste2();



?>