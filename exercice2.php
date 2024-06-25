<?php 
$age=18;
if ($age>=18){
    echo "Vous êtes majeur";
} else {
    echo "Vous êtes mineur";
}


$heure=20;
if ($heure<12) {
    echo "Bonjour !";
} elseif ($heure<18) {
    echo "Bon après-midi !";
} else {
    echo "Bonsoir";
}


$utilisateur="admin";
$motDePasse="1234";

if ($utilisateur=="admin" && $motDePasse=="1234") {
    echo "Connexion réussie";
} else {
    echo "Mot de passe ou Nom d'utilisateur invalide";
}

?>