<?php 
    session_start();
    if (isset($_SESSION['id_user'])) {
        header("Location: pages/dashboard.php");
    }
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="login.css"/>
    <title>Вход</title>
</head>
<body>
    <h1>Вход</h1>
    <form class="auth-form" action="scripts/auth.php" method="POST" id="authForm">
        <div class="form-elem">
            <label for="authLogin">Логин</label>
            <input type="text" id="authLogin" placeholder="Логин" name="authLogin" required/>
        </div>
        <div class="form-elem">
            <label for="authPassword">Пароль</label>
            <input type="password" id="authPassword" placeholder="Пароль" name="authPassword" required/>
        </div>
        <button type="submit" id="authSubmit">Войти</button>
        <a href="pages/registration.php">Создать аккаунт</a>
    </form>
</body>
</html>
