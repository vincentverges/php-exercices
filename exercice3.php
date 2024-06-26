<?php 
$fruits = ["Pomme", "Banane", "Orange"];

echo $fruits[2];

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
?>