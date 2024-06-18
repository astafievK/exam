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
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css"/>
    <link rel="stylesheet" href="registration.css"/>
    <title>Создать аккаунт</title>
</head>
    <body>
        <h1>Создание аккаунта</h1>
        <form class="create-form" id="createForm">
            <label for="createLogin">Логин</label>
            <input type="text" id="createLogin" placeholder="Логин"/>

            <label for="createPassword">Пароль</label>
            <input type="password" id="createPassword" placeholder="Пароль"/>

            <label for="createPassword">Подтверждение пароля</label>
            <input type="password" id="createPassword" placeholder="Подтверждение пароля"/>

            <button type="submit" id="createSubmit">Создать</button>
            <a href="../index.php">Уже есть аккаунт</a>
        </form>
    </body>
</html>