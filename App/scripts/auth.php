<?php
require ('connection.php');

$login = $_POST['authLogin'];
$password = $_POST['authPassword'];

$sql = "SELECT * FROM user WHERE login='$login' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();

    session_start();

    $_SESSION['id_user'] = $row['id_user'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['surname'] = $row['surname'];
    //$_SESSION['id_role'] = $row['id_role'];

    header("Location: pages/dashboard.php");
    exit;
} else {
    echo "Неверный логин или пароль";
}
