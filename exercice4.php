<?php      
function direBonjour(){
    echo "Bonjour à tous!";
}

direBonjour();

function direBonjourA ($nom){
    echo "Bonjour $nom";
}

direBonjourA('Vincent');

function addition($a,$b){
    echo $a+$b;
}

addition(2,5);
addition(10,10);

function multiplier($x,$y){
    $sommeM = $x*$y;
    return $sommeM; 
}

echo multiplier(12,12)

?>