<?php

require_once("config.php");

//carrega 1 usuario
/*$root = new Usuario();
$root->loadbyId(3);
echo $root;
*/
/*$lista = Usuario::getList();
echo json_encode($lista);*/
/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//var_dump($usuarios);

echo json_encode($usuarios);
*/
//testado 
/*
$search = Usuario::search("aluno");
echo json_encode($search);
*/

//carrega usuario usando login e a senha
//testado
/*
$usuario = new Usuario();
$usuario->login("Pedro", "123");

echo $usuario;
*/

//insert
//testado 
/*
$aluno = new Usuario();

$aluno->setDeslogin("helsinque");
$aluno->setDessenha("321");
$aluno->insert();
echo $aluno; 
*/

//$usuario->insert();
//Update - Testado
/*
$usuario = new Usuario();
$usuario->loadById(3);
echo $usuario;
$usuario->update("Tokyo", "1234");
*/
//echo $usuario;*/

//DELETE

$usuario = new Usuario();
$usuario->loadById(3);
$usuario->delete();
echo $usuario;
?>