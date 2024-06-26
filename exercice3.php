<?php 
$fruits = ["Pomme", "Banane", "Orange"];

echo $fruits[1];

array_push($fruits, "mangue");

foreach ($fruits as $fruit) {
    echo  $fruit;
};

$personne = [
    "nom" =>"Deheegher",
    "prenom"=> "Claire",
    "age"=> "29",
];

foreach ($personne as $person) {
    echo $person;
};

$personne['age']= "30";

foreach ($personne as $person) {
    echo $person;
};
?>