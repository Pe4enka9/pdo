<?php
require_once './connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/index.css" />
  <title>Авторизация</title>
</head>

<body>
  <form action="./vendor/login.php" method="post">
    <h1>Авторизация</h1>

    <div class="input_wrapper">
      <div class="wrapper login_wrapper">
        <label for="login">Логин</label>
        <input type="text" name="login" id="login" autocomplete="off" placeholder="Введите логин" />
      </div>

      <div class="wrapper password_wrapper">
        <label for="password">Пароль</label>
        <input
          type="password"
          name="password"
          id="password"
          autocomplete="off" placeholder="Введите пароль" />
      </div>

      <input type="submit" id="btn" value="Войти" />
    </div>

    <a href="./pages/register.php">Зарегистрироваться</a>
  </form>
</body>

</html>