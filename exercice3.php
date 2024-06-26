<?php 

$fruits = array("pomme","Banane","Orange");

echo $fruits[1];






array_push($fruits, "Mangue");

echo $fruits[3];


foreach($fruits as $value){

    echo "$value\n";
}







$personne = array(

    "nom" => "oriez",
    "prenom" => "eric",
    "age" => "38",

);

echo $personne['age']." ".$personne['nom']." ".$personne['prenom'];









$personne['age'] = 22;

foreach ($personne as $per => $values){

    echo ($per. ":".$values);
}

print_r(array_values($personne));



?>