<?php
session_start();
require_once '../connect.php';

$login = $_POST['login'];
$password = md5($_POST['password']);
$name = $_POST['name'];
$lastName = $_POST['lastName'];

$sql = "INSERT INTO `users` (`id`, `login`, `password`, `name`, `lastName`) VALUES (NULL, :login, :password, :name, :lastName)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'login' => $login,
    'password' => $password,
    'name' => $name,
    'lastName' => $lastName
]);

if ($stmt->rowCount() > 0) {
    header('Location: /');
}
