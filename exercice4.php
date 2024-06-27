<?php
function direBonjour(){
echo "Bonjour à tous<br> ";

}

direBonjour();

function direBonjourA($nom){
echo "Bonjour" . " ". $nom;

}
direBonjourA("chadeuf<br>");

function addition($a, $b){
echo $a + $b;
echo  "<br>";

}

addition(10,5);

function multiplier($x,$y){

$z = $x * $y;

echo $z;

}

multiplier(5,4);

?>