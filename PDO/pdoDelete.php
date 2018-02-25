<?php

$conn = new PDO('mysql:host=127.0.0.1;dbname=bdPHP7','root', 'root');

$stmt = $conn->prepare("DELETE FROM tb_usuarios  WHERE idusuario = :ID");

$id = 10;

$stmt->bindParam(":ID", $id); //liga o paramentro ao valor


$stmt->execute();


echo " deletado ok de novo==========================================================";


?>
