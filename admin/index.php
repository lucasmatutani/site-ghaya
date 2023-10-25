<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
    <div class="login-container">
        <form action="./login.php" method="post">
            <h1>Login</h1>
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required>
            <br>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            <br>

            <input type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>
