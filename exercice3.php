<?php 
$fruits = ["Pomme", "Banane", "Orange"];

echo $fruits[1];

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
    echo $person[2];
};

$replace= ["age"=> "30"];
array_replace($replace);

foreach ($personne as $person) {
    echo $person[0];
};
?>