<?php

$conn = new PDO('mysql:host=127.0.0.1;dbname=bdPHP7','root', 'root');

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "joao";
$password = "cccds";
$id = 10;

$stmt->bindParam(":LOGIN", $login); //statement 
$stmt->bindParam(":PASSWORD", $password); //liga o paramentro ao valor
$stmt->bindParam(":ID", $id); //liga o paramentro ao valor


$stmt->execute();


echo " alterados ok de novo==========================================================";


?>
