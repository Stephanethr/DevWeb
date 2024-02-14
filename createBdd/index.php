<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <stylesheet href="style.css">
        <title>Hackathon</title>
</head>

<body>
    <?php
    include 'connect.php';
    ?>
    <h1>Tableau des élèves</h1>

    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Promo</th>
            <th>Compétence</th>
            <th>Modifier</th>
            <th>Supprimer</th>

        </tr>
        <?php
        $sql = "SELECT * FROM etudiants";
        $result = $pdo->query($sql);
        while ($row = $result->fetch()) {
            echo "<tr>";
            echo "<td>" . $row['nom'] . "</td>";
            echo "<td>" . $row['prenom'] . "</td>";
            echo "<td>" . $row['promo'] . "</td>";
            echo "<td>" . $row['skills'] . "</td>";

            echo "<td><a href='modifier.php?id=" . $row['id'] . "'>Modifier</a></td>";
            echo "<td><a href='supprimer.php?id=" . $row['id'] . "'>Supprimer</a></td>";


            echo "</tr>";
        }


        ?>
    </table>

    <a href="upload.php">Mettre à jour la BDD</a>

</body>

</html>