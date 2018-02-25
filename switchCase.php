<?php

$diaSemana = date("7");
echo $diaSemana;

switch ($diaSemana){
case 0: echo "domingo";
break;
case 1: echo "segunda";
break;
case 2: echo "terça";
break;
case 3: echo "quarta";
break;
case 4: echo "quinta";
break;
case 5: echo "sexta";
break;

default: echo "Data inválida";
}
?>