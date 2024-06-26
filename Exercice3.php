<?php
$fruits = array ("pomme","banane","orange");
    echo $fruits [1]."\n";

$fruits[] = "mangue"."\n" ;

foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}

$personne = array ("nom"=>"gratien","prenom"=>"lucas","age"=>"30");
   echo "Nom : " . $personne["nom"] . "\n";
   echo "prenom : " . $personne["prenom"] . "\n";
   echo "age : " . $personne["age"] . "\n";

$personne["age"] = 35;
foreach ($personne as $cle => $valeur) {
   echo $cle . " : " . $valeur . "\n";
}
