<?php
$images = scandir("images"); // O comando scandir lista tudo q tem naquela pasta

$data = array(); // Declarando array como data;

foreach ($images as $img){ //No foreach se coloca o todo as o arquivo q procuro

    if (!in_array($img, array(".", ".."))) { // o inarray leva como parametro o q eu quero encontrar e o segundo o q n quero no array
    
        $filename = "images" .DIRECTORY_SEPARATOR .$img;
    $info = pathinfo($filename);
    array_push($data, $info); // insere no parametro da esquerda a informação da direita

    var_dump($info);

    }
}
//var_dump($images);
echo json_encode($data);
?>