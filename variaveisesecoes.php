<?php
session_start();

$_SESSION["nome"] = "hcode";
echo "Sessão iniciada";









/*
define("SERVIDOR", "127.0.0.1"); // constante eh gerada com define()

echo SERVIDOR;

define("BANCO_DE_DADOS", [ //constante de array
    '127.0.0.1',
    'root',
    'password',
    'test'
], true); // Se eu coloco este true vira case insensitive
print_r(BANCO_DE_DADOS);

echo PHP_VERSION; // CONSTANTE pré definida PARA VER VERSAO DO PHP
*/

?>