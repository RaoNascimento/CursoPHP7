<?php

$pessoas = array();

array_push($pessoas, array(

'nome' =>'joao',
'idade' => 20
));
array_push($pessoas, array(

    'nome' =>'pedro',
    'idade' => 30
    ));

    print_r($pessoas);

    echo json_encode($pessoas); // Funçao que gera json a partir de um array multidimensional

    $json = '[{"nome":"joao","idade":20},{"nome":"pedro","idade":30}]';

    $data = json_decode($json, true); // funçao que transforma json em array novamente - OBS: É preciso por o true senao
//transforma em objeto[{"nome":"joao","idade":20},{"nome":"pedro","idade":30}]
    var_dump($data);



?>