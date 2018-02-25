<?php
function soma(int ...$valores):string {// os 3 pontos indicam que havera uma soma de infinitos numeros de mesmo tipo
    return array_sum($valores);// :string indica que a funçao retornara string, se for int se converte para string
}                               //retorna a soma do array

echo var_dump(soma(2,2));
echo "<br/>";

echo var_dump(soma(2,2, 4, 5, 6));
echo "<br/>";


?>