<?php

$usuario = 'root';
$senha = '';
$database = 'codegoal';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);


// Definir o charset como UTF-8
if (!$mysqli->set_charset("utf8")) {
    die("Erro: Impossível definir UTF-8 " . $mysqli->error);
}
?>
