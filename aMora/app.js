// Autor: Stéphane Thiry
document.getElementById("play").addEventListener("click", game);

function game() {
    let playerNumber = Number(document.getElementById("playerNumber").value);
    let playerSum = Number(document.getElementById("playerSum").value);
    let computerNumber = Math.floor(Math.random() * 5) + 1;
    let computerSum = computerNumber + Math.floor(Math.random() * 5) + 1;
    let realSum = playerNumber + computerNumber;

    document.getElementById("computerNumber").innerHTML = "Nombre de l'ordinateur : " + computerNumber;
    document.getElementById("computerSum").innerHTML = "Somme de l'ordinateur : " + computerSum;
    document.getElementById("realSum").innerHTML = "Résultat : " + realSum;
    if (playerSum == realSum) {
        document.getElementById("playerWin").innerHTML = "Le joueur a gagné !";
    }
    else if (computerSum == realSum) {
        document.getElementById("playerWin").innerHTML = "L'ordinateur a gagné !";
    }
    else {
        document.getElementById("playerWin").innerHTML = "Personne n'a gagné !";
    }
}
