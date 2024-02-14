<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <stylesheet href="style.css">
        <title>Modifier</title>
</head>
<body>
    <form action="submit">
        <input type="text" name="skills" placeholder="skills">
        <button type="submit" name="submit">Modifier</button>
    </form>
</body>

<?php

include "connect.php";

if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $skills = $_POST['skills'];

    $sql = "UPDATE etudiants SET skills = :skills WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':skills', $skills);
    $stmt->execute();

    header("Location: index.php");
    exit;
}