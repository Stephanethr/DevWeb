<?php
include 'config.php';
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",  $username, $password);
} catch (PDOException $e) {
    header("Location: upload.php");
    exit;
}