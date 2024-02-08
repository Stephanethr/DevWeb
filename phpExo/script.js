// Date: 2021-10-05
// Name: script.js
// Version: 1.0
// Description: Script pour le fichier index.php

document.getElementById("add").addEventListener("click", function () {

    // récupère le nombre de puces
    var nombrePuces = document.getElementById("list").childNodes.length;
    var iRand = Math.floor((Math.random() * nombrePuces));
    console.log(iRand);
    document.getElementById("list").childNodes[iRand].style.color = "red".fontWeight = "bold";
});

