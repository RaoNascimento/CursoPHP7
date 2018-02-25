<?php
function test($callback) {
    $callback();
}

test(function(){ // funçao anonima passada por parametro, funçao sem nome

    echo "terminou";

});
echo "<br/>";
//exemplo 2

$fn = function($a){
    var_dump($a);
};

$fn("oi");

// passar funçao como parametro
//atribuir a uma variavel uma função
// nao tem nome nem return

?>