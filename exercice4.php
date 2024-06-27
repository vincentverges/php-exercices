<?php 

function direBonjour(){

echo 'Bonjour a tous !';


}
direBonjour();
function direBonjourA($nom){

    echo "Bonjour,$nom";
}
direBonjourA("pierre");

function addition($a, $b){

    echo $a + $b;
}

addition(7,7);
function multiplier($x, $y){
    
    $sum = $x * $y;
    echo $sum;
    return $sum;
}
multiplier(5,5);


?>