

<form>
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" name="value = ok">

</form>
<?php

/*for($i=0; $i<10; $i++){
echo $i;
echo"<br/>";

}
echo "<select>";
for($i=date("Y"); $i>date("Y")-100; $i--){

    echo '<option value = "'.$i. '">'.$i. '</option>';


}
echo "</select>";


$meses = array(
"janeiro", "fevereiro", "março"

);
echo "<br/>";
foreach($meses as $index => $mes) { // mostra a posição no array - index
    echo "indice ".$index; echo "<br/>";
    echo " O mes eh : ".$mes; echo "<br/>";
}
echo "<br/>"; */

if(isset($_GET)) { // Quando n coloca method o padrao eh get

    foreach($_GET as $key => $value) { // key eh padrao para mostrar o nome do campo
        echo "nome do campo: " .$key; // value eh padrao para mostrar o valor contido nele
        echo "<br/>";
        echo "valor do campo: ".$value;
        echo "<br/>";
        echo "<hr>";
    }

}

$condicao = true;

while($condicao){
    $numero = rand(1,10);

    if($numero === 3){
        echo "numero tres!!";
        $condicao = false;
    }

    echo $numero. " ";

}


?>