<?php
session_start();

$_SESSION["randomNumber"] = isset($_SESSION["randomNumber"]) ? $_SESSION["randomNumber"] : rand(0, 10);
echo session_id();

if (isset($_POST["number"])) {
    $number = $_POST["number"];
    goodNumber($number, $_SESSION["randomNumber"]);
}

function goodNumber($number, $randomNumber)
{
    echo "ton nombre : " . $number;
    echo "<br>";
    echo "le nombre à trouver : " . $randomNumber;
    echo "<br>";

    if ($number == $randomNumber) {
        echo "GG";
        unset($_SESSION["randomNumber"]);
        session_destroy();
    } else if ($number > $randomNumber) {
        echo "trop haut ";
    } else if ($number < $randomNumber) {
        echo "trop bas ";
    }

    echo "<br>";

    echo "<a href='index.php'>Réessayer</a>";
}
?>
