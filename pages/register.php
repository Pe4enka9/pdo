<?php
session_start();
require_once '../connect.php';

if (isset($_SESSION['user'])) {
    header('Location: ./home.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/index.css" />
    <title>Регистрация</title>
</head>

<body>
    <form action="../vendor/create.php" method="post">
        <h1>Регистрация</h1>

        <div class="input_wrapper">
            <div class="wrapper name_wrapper">
                <label for="name">Имя</label>
                <input type="text" name="name" id="name" autocomplete="off" placeholder="Введите имя">
            </div>

            <div class="wrapper lastName_wrapper">
                <label for="lastName">Фамилия</label>
                <input type="text" name="lastName" id="lastName" autocomplete="off" placeholder="Введите фамилию">
            </div>


            <div class="wrapper login_wrapper">
                <label for="login">Логин</label>
                <input type="text" name="login" id="login" autocomplete="off" placeholder="Введите логин" />
            </div>

            <div class="wrapper password_wrapper">
                <label for="password">Пароль</label>
                <div class="pass_eyes">
                    <input
                        type="password"
                        name="password"
                        id="password"
                        autocomplete="off" placeholder="Введите пароль" />
                    <div class="pass"></div>
                </div>
            </div>

            <input type="submit" id="btn" value="Зарегистрироваться" />
        </div>

        <a href="/">Авторизоваться</a>
    </form>
</body>

</html>