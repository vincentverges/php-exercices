<?php 

function direBonjour(){
    echo "Bonjour à tous!";
}
direBonjour();

echo "\n";

function direBonjourA($name){

echo "Bonjour, $name !";
}
$nom = readline("entrez votre nom : ");
direBonjourA($nom);

echo "\n";

function addition(){
$a = readline("entrez un nombre : ");
$b = readline("entrez vun nombre : ");

echo "la somme des deux chiffre $a  $b est : ".$a + $b ;
echo "\n";
$a = [readline("entrez un premier nombre  : "),readline("entrez un deuxieme nombre : ")];
$b = [readline("entrez un premier nombre : "),readline("entrez un deuxieme nombre : ")];

echo "la somme des deux chiffre premier est : ". $a[0] + $b[0];
echo "\n";
echo "la somme des deux chiffre second est : ". $a[1] + $b[1] ;

}
addition();

echo "\n";

function multiplier(){
$x = readline("entrez un nombre : ");
$y = readline("entrez un nombre : ");
$result = ($x * $y);
echo "le resultat de la multiplication $x et $y est : " .$result;
}
multiplier();

?>