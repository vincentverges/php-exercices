<?php

function direBonjour (){
    echo " Fonction direBonjour = Bonjour à tous!";
}
$nom='Jean';


 function direBonjourA($p){
    echo '<br> Fonction direBonjourA = Bonjour ' .$p. '<br>';
}
direBonjour ();
direBonjourA ($nom);

$x = 3;
$y = 5;

 function addition($p1, $p2){
    echo '<br> Fonction addition : ' .$p1. ' + ' .$p2. ' = ' .($p1 + $p2). '<br>';
}

addition ($x, $y);

function multiplier(&$p, $s){
    $o = $p * $s;
    echo '<br> Fonction multiplier = ' .$o;
    return $p;
}

multiplier($x,$y);
echo '<br> Valeur en dehors de la fonction :'.$x;