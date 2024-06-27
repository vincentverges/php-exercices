<?php
function direBonjour() {
   echo ("Bonjour à tous !");
}
;
direBonjour();
$nom = "Claire";
 function direBonjourA($nom) {
    echo ("Bonjour" .$nom. ".");
};
direBonjourA($nom);
$a = 2;
$b = 5;
function addition($a, $b) {
    $somme = $a + $b;
    echo($somme);
};
addition($a, $b);
$x = 4;
$y = 5;
function multiplier ($x, $y){
    $multiple= $x * $y;
    return $multiple;
};
$result = multiplier($x, $y);
echo ($result);
?>

