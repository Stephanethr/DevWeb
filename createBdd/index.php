<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <stylesheet href="style.css">
    <title>Uploader un fichier CSV</title>
</head>
<body>
    <h1>Uploader un fichier CSV</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="csv_file" accept=".csv">
        <button type="submit" name="submit">Envoyer</button>
    </form>


</body>
</html>
