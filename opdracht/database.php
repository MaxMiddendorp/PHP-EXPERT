<?php
session_start();

$host = 'localhost';
$database = 'phpexpert';
$username = 'root';
$password = 'College-2020';
$message = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $error) {
    $message = $error->getMessage();
}
