<?php 

$age = 3;
if ($age >= 18){

    echo ('Vous êtes majeur');
}else if($age <18 && $age>3){

    echo ('vous êtes mineur');
}else {

    echo ('Vous êtes un bébé');
}


$heure = 11;

if ($heure<12){

    echo ('Bonjour');
}else if($heure<18){

    echo ('Bon après-midi');
}else {

    echo ('Bonsoir');
}


$utilisateur = "admin";
$motDePasse = "1234";

if ($utilisateur === "admin" && $motDePasse === "1234"){
    echo('conexion réussie');
}else {
    echo('mot de passe ou nom incorrect');
}

?>;