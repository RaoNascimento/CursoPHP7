<?php
// bom utilizar transação para tratamento de erro e com segurança
$conn = new PDO('mysql:host=127.0.0.1;dbname=bdPHP7','root', 'root');
$conn->beginTransaction(); //inicia transação

$stmt = $conn->prepare("DELETE FROM tb_usuarios  WHERE idusuario = ?");

$id = 4;

$stmt->execute(array($id));

//$conn->rollback(); //cancela transação
$conn->commit(); //confirma transação


echo " deletado transação ok de novo==========================================================";


?>
