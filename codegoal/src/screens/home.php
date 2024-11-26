<?php
include("../controller/php/conexao.php");

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}

if (isset($_SESSION['id'])) {
    $id_usuario = $_SESSION['id'];
}

if (isset($_SESSION['nome'])) {
    $nome = $_SESSION['nome'];
}

include('../controller/php/query_produto.php');




if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['filtro'])) {
    $selectedFilter = $_POST['filtro'];

    if ($selectedFilter === 'todos') {
        $code_filtro = "SELECT * FROM camisas";
        $query_filtro = $mysqli->query($code_filtro) or die("Falha na execução do código SQL: " . $mysqli->error);

        while ($fetch_filtro = $query_filtro->fetch_assoc()) {
            $filtro[] = $fetch_filtro;
        }

        $_SESSION['filtro'] = $filtro;
    } elseif ($selectedFilter === 'São Paulo') {
        $code_filtro = "SELECT * FROM camisas where tipo_camisa = 'São Paulo'";
        $query_filtro = $mysqli->query($code_filtro) or die("Falha na execução do código SQL: " . $mysqli->error);

        while ($fetch_filtro = $query_filtro->fetch_assoc()) {
            $filtro[] = $fetch_filtro;
        }

        $_SESSION['filtro'] = $filtro;

    }
}

if(isset($_SESSION['filtro'])){
    $filtro = $_SESSION['filtro'];
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/smartphone.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Codegoal</title>
</head>

<body>

    <nav class="navbar navbar-light container-fluid">
        <div class="container-fluid navbar-content">
            <div class="div-logo-name-navbar">
                <a class="navbar-brand" href="#">
                    <img src="../imgs/codelogo.png" alt="logo" class="logo-navbar">

            </div>

            <div class="icons-navbar">
                <a href="./cart.php">
                    <div class="cart-background">
                        <ion-icon name="cart-outline" class="cart-navbar"></ion-icon>
                        <?php if (isset($_SESSION['qtdTotalCart']) && $_SESSION['qtdTotalCart'] > 0) {
                            echo '<div class="background-cart-notification"><label class="cart-notification">' . $_SESSION['qtdTotalCart'] . '</label></div>';
                        } ?>
                    </div>
                </a>


                <div class="line-navbar"></div>


                <div class="div-logins-navbar">

                    <?php
                    if (isset($id_usuario) && isset($nome) && isset($email)) {
                        echo "<div class='icon-login-background'>
                            <ion-icon name='person' class='icon-login'></ion-icon>
                        </div>
                        <div class='texts-navbar-login'>
                            <label>Ola, <b>" . $nome . "</b></label>
                            <label>" . $email . "</label>
                        </div>
                        <div class='line-navbar'></div>
                        <a href='../controller/php/logout.php'><ion-icon name='log-out-outline' class='cart-navbar''></ion-icon></a>
                        "
                        
                        
                        ;
                    } else {
                        echo "<a href='./login.php'><input type='button' class='btn-login-navbar' value='Entrar'></input></a>";
                    }

                    ?>



                </div>

            </div>

        </div>
    </nav>

    <div class="home-screen container-fluid">

        
        <img src="../imgs/banner.png" width="100%" height="450vh">



        <div class="conteudo-home-screen container-fluid">

            <div class="txt-home-screen">
                <label class="title-home-screen">Já disponível</label>
            </div>


        </div>


    </div>

    <section id="produtos"></section>
    <div class="items-screen">

        <div class="row-categorias-loja">

            <div class="categoria-loja">

                <div class="txt-categoria ">
                    <label class="title-categoria">Retrôs Seleção</label>
                </div>

                <img src="../imgs/pele.jpg" alt="Skate Montado" class="categoria-img-1">

            </div>

            <div class="categoria-loja">

                <div class="txt-categoria">
                    <label class="title-categoria">Retrôs Brasileiros</label>
                </div>

                <img src="../imgs/br.jpg" alt="Shape" class="categoria-img-2">

            </div>



        </div>

        <div class="row-top-items-screen">

            <div class="txt-row-top">
                <div class="title-items-screen">Nossas escolhas:</div>
            </div>

        </div>






        <div class="grid-produtos row">


            <?php

            if(isset($filtro) && !empty($filtro)){
                foreach ($filtro as $produto) {

                    echo "<input type='text' class='displaynone' id='idProduto' value='" . $produto['id_produto'] . "'>
                    </input>
                    <div class='card-produto col-md-5'>
                    
                    <div class='card-image' style=\"background-image: url('../imgs/" . htmlspecialchars($produto['imagem_camisa']) . "');\"></div>
              
                    <div class='div-texts-card'>
              
                        <div class='title-card'>" . $produto['nome_camisa'] . "</div>
              
                        <div style='display:flex; flex-direction:row; justify-content:space-between; align-items:center; position:relative; width:100%;'>
                            <div style='display:flex; flex-direction:column'>
                                <div class='card-prices'>
                                    <div class='incash-card'>R$" . str_replace('.', ',', $produto['preco_camisa']) . "</div>
              
                                    <div class='installments-card'>6x de R$" . str_replace('.', ',', round(intval($produto['preco_camisa']) / 6, 2)) . " sem juros</div>
                                </div>
                            </div>
              
                            <div class='add-to-cart-button' id='addToCart' onclick='addToCart(" . $produto['id_produto'] . ")'>
                                <ion-icon name='cart-outline' class='cart-button'></ion-icon>
                            </div>                    
                        </div>
                    </div>
                </div>";
                }
            }  else{
                foreach ($produtos as $produto) {

                    echo "<input type='text' class='displaynone' id='idProduto' value='" . $produto['id_produto'] . "'>
                    </input>
                    <div class='card-produto col-md-5'>
                    
                    <div class='card-image' style=\"background-image: url('../imgs/" . htmlspecialchars($produto['imagem_camisa']) . "');\"></div>
              
                    <div class='div-texts-card'>
              
                        <div class='title-card'>" . $produto['nome_camisa'] . "</div>
              
                        <div style='display:flex; flex-direction:row; justify-content:space-between; align-items:center; position:relative; width:100%;'>
                            <div style='display:flex; flex-direction:column'>
                                <div class='card-prices'>
                                    <div class='incash-card'>R$" . str_replace('.', ',', $produto['preco_camisa']) . "</div>
              
                                    <div class='installments-card'>6x de R$" . str_replace('.', ',', round(intval($produto['preco_camisa']) / 6, 2)) . " sem juros</div>
                                </div>
                            </div>
              
                            <div class='add-to-cart-button' id='addToCart' onclick='addToCart(" . $produto['id_produto'] . ")'>
                                <ion-icon name='cart-outline' class='cart-button'></ion-icon>
                            </div>                    
                        </div>
                    </div>
                </div>";
                }
            }




            ?>















        </div>
    </div>




    <script>
        function submitForm() {
            document.getElementById("filterForm").submit();
        }
    </script>
    <script src="../controller/js/add-to-cart.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>