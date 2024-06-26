<?php
$fruits = ["pomme", "Banane", "Orange"];
echo ($fruits). "<br>";
echo $fruits[1];
$fruits[] = "Mangue";// Ajouter des éléments à un tableau indexé on peut aussi utiliser append
echo "Tous les éléments du tableau fruits :<br>";//Afficher tous les éléments du tableau à l'aide d'une boucle foreach
foreach ($fruits as $fruit) {// arraysplice pour donner la place qu'on veut a un element dans un tableau donné
    echo $fruit . "<br>";
}
$personne = [// Créer un tableau associatif
    "nom" => "Diabaté",
    "prénom" => "cheick",
    "âge" => 37
];

echo "Valeurs du tableau personne :<br>";// Afficher les valeurs du tableau associatif
echo "Nom : " . $personne["nom"] . "<br>";
echo "Prénom : " . $personne["prénom"] . "<br>";
echo "Âge : " . $personne["âge"] . "<br>";

//Correction car j'ai pas fait cette partie

$personne["âge"] = 28;//Modifier et afficher des éléments du tableau associatif

echo "Clés et valeurs du tableau personne après modification :<br>";// Afficher toutes les clés et valeurs du tableau associatif avec une boucle foreach
foreach ($personne as $cle => $valeur) {
    echo ucfirst($cle) . " : " . $valeur . "<br>";
}
?>