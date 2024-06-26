<?php 
$fruits = ["Pomme", "Banane", "Orange"];

echo $fruits[2];
$remplacement =  [3 =>"mangue"] ;

foreach ($fruits as $fruit) {
    echo  $fruit[0];
};

$personne = [
    "nom" =>"Deheegher",
    "prenom"=> "Claire",
    "age"=> "29",
];

foreach ($personne as $person) {
    echo $person[0];
};

$replace= ["age"=> "30"];

foreach ($personne as $person) {
    echo $person[0];
};
?>