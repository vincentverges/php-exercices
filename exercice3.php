<?php 
$fruits = ["Pomme", "Banane", "Orange"];

echo $fruits[2];

array_push($fruits, "mangue");

foreach ($fruits as $fruit) {
    echo  $fruit[0];
};

$personne = [
    "nom" =>"Deheegher",
    "prenom"=> "Claire",
    "age"=> "29",
];

foreach ($personne as $person) {
    echo $person[1];
};

$replace= ["age"=> "30"];
array_replace($replace);

foreach ($personne as $person) {
    echo $person[0];
};
?>