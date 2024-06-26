<?php
$age = 12;
switch ($age) {
    case  $age >=18 :
        echo "Vous êtes majeur";
        break;
    case $age  < 18 :
    echo "Vous êtes mineur";
    break;
};

$heure = 13;
if ($heure <= 12) {
    echo "Bonjour !";
}
else if ($heure <= 18) {
    echo "Bon après-midi !";
}
else {
    echo "Bonsoir !";
};

$utilisateur = "FeatherKnight";
$motDePasse = "ImAPengu";
if ($utilisateur == "admin" && $motDePasse == "1234") {
    echo "Connexion réussie !";
}
else {
    echo "Nom d'utilisateur ou mot de passe incorrect.";
};
?>