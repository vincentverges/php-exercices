<?php

$age = 19;
$heure = date("H:i:s");

echo "Il est $heure";
echo '<br/>';
if ($age >= 18) {
    echo "Et tu es majeur !!!!";
} else echo " vous êtes mineur";

echo '<br/>';

if ($heure < date("12:00:00")) {
    echo "Bonjour";
} elseif ($heure < date("18:00:00")) {
    echo "Bon-après midi";
} else echo "Bonsoir";

echo '<br/>';

$utilisateur = 'admin';
$motDePass = '1234';

if ($utilisateur == 'admin' & $motDePass == '1234') {
    echo "Connection reussie !!!";
} else echo "Nom d'utilisateur ou Mot de passe incorrect";
