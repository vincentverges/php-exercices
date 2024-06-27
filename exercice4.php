<?php

function direBonjour (){
    echo "Bonjour à tous!";
}
$nom='Jean';


 function direBonjourA($p){
    echo 'Bonjour' .$p. '<br>';
}
direBonjour ();
direBonjourA ($nom);

$x = 3;
$y = 5;

 function addition($p1, $p2){
    echo $p1. ' + ' .$p2. ' = ' .($p1 + $p2). '<br>';
}

addition ($x, $y);

function multiplier(&$p){
    $p = $p * 3;
    echo 'Valeur dans la fonction:' .$p;
}

multiplier($x);
echo '<br> Valeur en dehors de la fonction :'.$x;