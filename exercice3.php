<?php

$fruits = ["Pomme", "Banane", "Orange"];

echo $fruits[1];


$fruits[] = "Mangue";

foreach( $fruits as $fruit) {
    echo $fruit;
}


$personne = ["nom" => "Donat-Goninet", "prénom" => "Antoine", "âge" => "26"];

echo $personne["nom"];


$personne["âge"] = "27";

foreach( $personne as $pers) {
    
    echo $pers;
}

?>
