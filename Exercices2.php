<?php
$age = 18;
$heure = 12;
$utilisateur = "toto";
$motDePasse = "1234";

if ($age >= 18) {
    echo "Vous êtes majeur.<br>";
} else {
    echo "Vous êtes mineur.<br>";
}

if ($heure < 12 || $heure > 18){
    echo "Bonjour! <br>";
} else {
    echo "Bon aprés-midi!<br>";
}
if ($utilisateur = "admin" && $motDePasse = "1234"){
    echo "connexion réussi";
}else {
    echo "Nom d'utilisateur ou mot de passe incorrect.";
} ?>

