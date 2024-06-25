<?php
$age = 20;

if ($age >= 18) {
    echo "Vous êtes grand.<br>";
} else {
    echo "Vous êtes petit.<br>";
}

$heure = date("H");

if ($heure < 12) {
    echo "salut!<br>";
} elseif ($heure < 18) {
    echo "Bon app!<br>";
} else {
    echo "bye!<br>";
}

$utilisateur = "newUser";
$motDePasse = "0000";

if ($utilisateur === "newUser" && $motDePasse === "0000") {
    echo "Connexion réussie!<br>";
} else {
    echo "user name ou password incorrect.<br>";
}

?>
