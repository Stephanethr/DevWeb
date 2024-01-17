let button = document.getElementById("button");

function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min) + min); // The maximum is exclusive and the minimum is inclusive
}

randomNumber = getRandomInt(0, 10);
console.log(randomNumber);
compteur = 0;


function goodNumber(randomNumber) {
  number = document.getElementById("number").value;
  console.log(number);
  console.log(randomNumber);
  compteur++;
  pseudo = document.getElementById("pseudo");
  if (number == randomNumber) {
    window.alert("Bon nombre ! bravo !");
    console.log("Bon nombre ! Bravo !/n Le joueur : "+ pseudo + " en " + compteur + "coups : ");
  }
  else if (number > randomNumber) {
    document.getElementById("result").innerHTML = "nombre trop grand";
    console.log("nombre trop grand");
  } else {
    document.getElementById("result").innerHTML = "nombre trop petit";
    console.log("nombre trop petit");
  }
}


button.addEventListener("click", goodNumber(randomNumber));
