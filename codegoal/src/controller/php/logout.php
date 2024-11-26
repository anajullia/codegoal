    <?php

include("../controller/php/conexao.php");

// DESLOGAR:
session_start(); // começar
session_unset(); // limpar
session_destroy(); // destruir


if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie); // 
        $name = trim($parts[0]); // 

        setcookie($name, '', time() - 7200, '/'); // Deletar cookie após um tempo determinado
    }
}


header("Location: ../../../index.php"); 
