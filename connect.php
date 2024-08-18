<?php

$host = 'MySQL-8.2';
$dbname = 'database';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;", $username, $password);
} catch (PDOException $e) {
    die($e->getMessage());
}
