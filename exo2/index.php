<html>

<head>
  <title>Exercice 1</title>
</head>

<body>
  <h1>Le juste nombre</h1>
  <form action="goodNumber.php" method="post">
    <label for="pseudo">Entrez votre pseudo :</label>
    <input type="text" id="pseudo" name="pseudo" value="<?php echo isset($_POST['pseudo']) ? $_POST['pseudo'] : '' ?>" required>
    <br>
    <label for="number">Entrez un nombre entre 0 et 10 :</label>
    <input name="number" id="number" type="number" min="0" max="10" required>

    <button type="submit">Submit</button>
  </form>
</body>

</html>
