<?php 

// Créer une fonction sans paramètres :
function direBonjour(){

echo 'Bonjour a tous !';

}
// Appel de la function
direBonjour();




// Créer une fonction avec un paramètre :
function direBonjourA($nom){

    echo "Bonjour,$nom";
}
// Appel de la function avec paramètre
direBonjourA("pierre");




// Créer une fonction avec plusieurs paramètres :
function addition($a, $b){

    echo $a + $b;
}
// Appel de la function avec 2 paramètre
addition(7,7);





// Créer une fonction avec une valeur de retour :
function multiplier($x, $y){
    
    $sum = $x * $y;
    echo $sum;
    return $sum;
}
// Appel de la function avec 2 paramètre, récupération du résultat stocker dans une variable et renvoyer avec le return.
multiplier(5,5);


?>