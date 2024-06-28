<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercice 5 : Utilisation des Boucles en PHP</title>
</head>
<body>

<h2>Boucle while :</h2>

<?php
// Utilisation d'une boucle while pour afficher les nombres de 1 à 10
$i = 1;
while ($i <= 10) {
    echo $i . " ";
    $i++;
}
echo "<br>";

// Utilisation d'une boucle while pour calculer et afficher la somme des nombres de 1 à 10
$sum = 0;
$j = 1;
while ($j <= 10) {
    $somme += $j;
    $j++;
}
echo "La somme des nombres de 1 à 10 est : " . $sum . "<br>";
?>

<h2>Boucle for :</h2>

<?php
// Utilisation d'une boucle for pour afficher les nombres de 1 à 10
for ($k = 1; $k <= 10; $k++) {
    echo $k . " ";
}
echo "<br>";

// Utilisation d'une boucle for pour afficher la table de multiplication de 5
echo "Table de multiplication de 5 : <br>";
for ($l = 1; $l <= 10; $l++) {
    echo "5 x " . $l . " = " . (5 * $l) . "<br>";
}
?>

<h2>Boucle foreach :</h2>

<?php
// Création du tableau de fruits
$fruits = array("Pomme", "Banane", "Orange", "Mangue");

// Utilisation d'une boucle foreach pour afficher chaque fruit du tableau
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
?>

<h2>Boucle do...while :</h2>

<?php
// Utilisation d'une boucle do...while pour afficher les nombres de 1 à 10
$m = 1;
do {
    echo $m . " ";
    $m++;
} while ($m <= 10);
?>
</body>
</html>
