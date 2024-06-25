<?php
$age =10; 
if ($age >= 18) {
    echo "Vous êtes majeur.";
} elseif ($age < 18) {
    echo "Vous êtes mineur.";
}
?>


<?php
$heure = 13;
if ($heure < 12){
        echo "Bonjour";
}elseif ($heure < 18) {
      echo "Bon après-midi";
    }else{
      echo "bonsoir";
   }
?>

<?php
$utilisteur = "bonjourrrr";
$motdePasse = "bonsoirrrr";
if ($utilisateur === "bonjourrrr" && $motDePasse === "bonsoirrrr"){
echo "Accès autorisé.";
}else {
    echo "Accès refusé."; 
}
?>

<?php

$utilisateur = "admin";
$motDePasse = "1234";
if ($utilisateur === "admin" && $motDePasse === "1234") {
    echo "Connexion réussie!"; 
} else {
    echo "Nom d'utilisateur ou mot de passe incorrect."; 
}
?>
