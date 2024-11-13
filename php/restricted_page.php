<?php
session_start(); // Inicia a sessão ou retoma a sessão existente

// Verifica se o usuário está autenticado
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php"); // Redireciona para a página de login se não estiver autenticado
    exit(); // Garante que o redirecionamento ocorra e o script pare aqui
}

$produtos_selecionados = isset($_COOKIE['produtos_selecionados']) ? explode(',', $_COOKIE['produtos_selecionados']) : [];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>

<body class="body">
    <!--<h1 class="titulo">Bem-vindo à CodeGoal</h1>-->
    <!--<p class="ola">Olá, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>-->
    <nav class="navbar">
        <div class="container-fluid">
            <img src="../assets/codelogo.png" class="logonav">
            <a href="logout.php" class="sair">Sair</a> <!-- Link para fazer logout -->
        </div>
    </nav>

    <div class="banner">
        <img src="../assets/banner.png" class="imgbanner">
    </div>

    <p class="categoria"> Explore nossas categorias</p>
    <div class="containercompra d-flex flex-row gap-5">
        <div class="form-check d-flex flex-column divprod">
            <div class="imgprod">
                <img src="../assets/pele.png" style="imgctg" />
            </div>
            <label class="form-check-label labelprod">Camisa Goleiro São Paulo Retrô - 1988</label>
        </div>

        <div class="form-check d-flex flex-column divprod">
            <div class="imgprod">
                <img src="../assets/pele.png" style="imgctg" />
            </div>
            <label class="form-check-label labelprod">Camisa Goleiro São Paulo Retrô - 1988</label>
        </div>

        <div class="form-check d-flex flex-column divprod">
            <div class="imgprod">
                <img src="../assets/pele.png" style="imgctg" />
            </div>
            <label class="form-check-label labelprod">Camisa Goleiro São Paulo Retrô - 1988</label>
        </div>
    </div>



</body>

</html>