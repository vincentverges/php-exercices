<?php 

$fruits = ["Pomme", "Banane", "Orange"];

$fruits[] = 'mangue';
//echo $fruits[1];


foreach($fruits as $fruit){
    echo $fruit."\n" ;
} 

$personnes = [
    'nom' => 'grelier',
    'prenom' => 'jocelyn',
    'age' => '28',
];

echo $personnes["nom"]."\n";
echo $personnes["prenom"]."\n";
echo $personnes["age"]."\n";

//echo $personnes["nom"] . "\n" . $personnes["prenom"] . "\n" . $personnes["age"] . "\n";
//echo "{$personnes['nom']}\n{$personnes['prenom']}\n{$personnes['age']}\n";

$personnes['age'] = '30';


foreach($personnes as $personne){
    echo ("\n". $personne ."\n");
}


?>