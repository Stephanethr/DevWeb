<?php
include 'config.php';
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",  $username, $password);
} catch (PDOException $e) {
    die("Erreur lors de la connexion à la BDD : " . $e->getMessage());
}