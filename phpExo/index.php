<!DOCTYPE html>
<html>
    <head>
        <title>exo PHP</title>
        </script src="script.js" defer></script>
    </head>
    <body>
        <h3>Classe de L3</h3>
        <ul id="list">
            <?php
                $file = fopen("name.csv", "r");
                while (!feof($file)) {
                    $line = fgetcsv($file);
                    echo "<li>$line[0]</li>";
                }
                fclose($file);
            ?>
        </ul>
        <button type="button" id="button">Rand!</button>
    </body>
</html>
