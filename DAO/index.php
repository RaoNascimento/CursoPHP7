<?php

require_once("config.php");

/*carrega 1 usuario
$root = new Usuario();
$root->loadbyId(2);
echo $root;
*/
$lista = Usuario::getList();
echo json_encode($lista);
/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//var_dump($usuarios);

echo json_encode($usuarios);
*/
?>