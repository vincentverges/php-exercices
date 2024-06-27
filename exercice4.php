<?php 

// Créer une fonction sans paramètres :
// Créer une fonction sans paramètres :
function direBonjour(){

echo 'Bonjour a tous !';

}
// Appel de la function
// Appel de la function
direBonjour();




// Créer une fonction avec un paramètre :




// Créer une fonction avec un paramètre :
function direBonjourA($nom){

    echo "Bonjour,$nom";
}
// Appel de la function avec paramètre
// Appel de la function avec paramètre
direBonjourA("pierre");




// Créer une fonction avec plusieurs paramètres :



// Créer une fonction avec plusieurs paramètres :
function addition($a, $b){

    echo $a + $b;
}
// Appel de la function avec 2 paramètre
// Appel de la function avec 2 paramètre
addition(7,7);




// Créer une fonction avec une valeur de retour :
function multiplier($x, $y){
    
    $sum = $x * $y;
    echo $sum;
    return $sum;
}
multiplier(5,5);


?>