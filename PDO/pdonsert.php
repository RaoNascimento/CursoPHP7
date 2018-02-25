<?php

$conn = new PDO('mysql:host=127.0.0.1;dbname=bdPHP7','root', 'root');

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN,:PASSWORD)");

$login = "jose";
$password = "123456";

$stmt->bindParam(":LOGIN", $login); //statement 
$stmt->bindParam(":PASSWORD", $password); //liga o paramentro ao valor


$stmt->execute();


echo " inserido ok ==========================================================";


?>
