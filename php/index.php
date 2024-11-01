
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/loginpage.css">
    <title>PHP8</title>
</head>

<body>
    <h1>Formulário de Login</h1>
    <form action="login_validate.php" method="post">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" class="flip-card__input" required>
        <br>
        <label for="password">Senha:</label>
        <input type="text" id="password" name="password"  class="flip-card__input" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>

</html>

<div class="wrapper">
        <div class="card-switch">
            <label class="switch">
               <input type="checkbox" class="toggle">
               <span class="slider"></span>
               <span class="card-side"></span>
               <div class="flip-card__inner">
                  <div class="flip-card__front">
                     <div class="title">Log in</div>
                     <form class="flip-card__form" action="">
                        <input class="flip-card__input" name="email" placeholder="Email" type="email">
                        <input class="flip-card__input" name="password" placeholder="Password" type="password">
                        <button class="flip-card__btn">Let`s go!</button>
                     </form>
                  </div>
               </div>
            </label>
        </div>   
   </div>