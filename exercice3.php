<?php

$fruit = array("Pomme", "Banane", "Orange");
print_r($fruit);
echo "<br>";
echo " la case numéro 2 est: ";
echo "$fruit[1]";
echo "<br>";
$fruit[] = "Mangue";
print_r($fruit);
echo "<br>";
echo "Avec le Foreach:";
foreach ($fruit as $i => $value) {
    echo "$fruit[$i] ";
}
echo "<br>";
$personne = array(
    "Nom" => "Doe",
    "Prenom"  => "Jhon",
    "Age" => 29,
);
print_r($personne);
$personne["Age"] = 38;
foreach ($personne as $i => $value) {
    echo "$personne[$i] ";
}

?>