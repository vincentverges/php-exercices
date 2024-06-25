<?php


$age = 5;

if ($age >= 18) {
    echo "Vous êtes majeur";
} else if ($age < 18) {
    echo "Vous êtes mineur";
}

$heure = 7;

if ($heure < 12) {
    echo "Bonjour";
} else if ($heure < 18) {
    echo "Bon après midi";
} else {
    echo "Bonsoir";
}


$utilisateur = "utilisateur";
$motDePasse = "motdePasse";

echo $utilisateur == "admin" || $motDePasse == "1234" ? "nom d'utilisateur ou mot de passe incorrect" : "Connexion réussie";


?>