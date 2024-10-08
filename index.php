<?php
session_start();
require_once './connect.php';

if (isset($_SESSION['user'])) {
  header('Location: ./pages/home.php');
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
        <div class="pass_eyes">
          <input
            type="password"
            name="password"
            id="password"
            autocomplete="off" placeholder="Введите пароль" />
          <div class="pass pass_hide"></div>
        </div>
      </div>

      <span id="invalidData">
        <?php
        if (isset($_SESSION['invalidData'])) {
          echo $_SESSION['invalidData'];
          unset($_SESSION['invalidData']);
        }
        ?>
      </span>

      <input type="submit" id="btn" value="Войти" />
    </div>

    <a href="./pages/register.php">Зарегистрироваться</a>
  </form>

  <script src="./js/index.js"></script>
</body>

</html>