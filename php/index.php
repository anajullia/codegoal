<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP8</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body class="login-page">
    <h1 class="login-title">Login</h1>
    <form class="login-form" action="login_validate.php" method="post">
        <label class="login-label" for="username">Usuário:</label>
        <input class="login-input" type="text" id="username" name="username" required>
        <br>
        <label class="login-label" for="password">Senha:</label>
        <input class="login-input" type="text" id="password" name="password" required>
        <br>
        <button class="login-button" type="submit">Login</button>
    </form>
</body>

</html>
