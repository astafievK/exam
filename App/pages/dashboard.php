<?php
session_start();
if (!isset($_SESSION['id_user'])) {
    header("Location: ../index.php");
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css"/>
    <link rel="stylesheet" href="dashboard.css"/>
    <title>Создать аккаунт</title>
</head>
    <body>
    <?php require('../components/header.php'); ?>
        <div class="tickets-wrapper">
            <div class="ticket"></div>
        </div>
    </body>
</html>